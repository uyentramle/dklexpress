<?php
try{
	#Mo Session
	session_start();
	/*echo '<pre>';
	print_r($_SESSION['user']);
	echo '</pre>'; exit;*/
	include '../../config.php';
	#Ket noi
	$dbh = new PDO('mysql:host='.HOST_NAME.'; dbname='.DB_NAME, DB_USERNAME, DB_PASSWORD); //database handle
	$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);	
	#Chuyen ma utf8
	$dbh->exec('set names utf8');
	#Đặt múi giờ
	date_default_timezone_set('Asia/Ho_Chi_Minh');	
	####### KT người dùng có đăng nhập hay chưa? ##########
	if(empty($_SESSION[SALT.'login']) || $_SESSION[SALT.'login'] != 1){
		header('Location: ../login/login.php');
		exit;
	}
	#Tự động logout
	$inactive = 900;
	if(isset($_SESSION['timeout']) ) {
	  $session_life = time() - $_SESSION['timeout'];
	  if($session_life > $inactive) { 
		header("Location: ../login/logout.php"); 
	  }
	}	
	$_SESSION['timeout'] = time();	
	
	#Nhúng thư viện smarty
	include '../../libraries/smarty/Smarty.class.php';	
	$dt_smarty = new Smarty();	
	$dt_smarty->setTemplateDir('../templates/');
	$dt_smarty->setCompileDir('../templates_c/');
	$dt_smarty->setConfigDir('../../configs/');
	$dt_smarty->setCacheDir('../../cache/');
	
	include '../../classes/xl_quan_tri.php';
	$dt_xl_quan_tri = new xl_quan_tri();
	
	############Chuẩn bị câu thông báo###############
	if(isset($_SESSION['msg'])){
		//$dt_smarty->assign('type_msg', $_SESSION['type_msg']);
		//$dt_smarty->assign('msg', $_SESSION['msg']);		
		$message = $dt_smarty->fetch('elements/message.tpl');
		unset($_SESSION['msg']);
		unset($_SESSION['type_msg']);
	} else{
		$message = '';
	}
	
	#Đọc mã:
	$ma = $_GET['m'];	
	$ten_dang_nhap = base64_decode($_GET['u']);
	$kiem_tra = $dt_xl_quan_tri->doc($ma);
	if($ten_dang_nhap != $kiem_tra['ten_dang_nhap'] || $ma != $kiem_tra['ma']){
		throw new Exception('Không có Quản Trị Viên này trong hệ thống');
	}
	if($ten_dang_nhap = 'admin' && $ma == 1){
		if($_SESSION['user']['ten_dang_nhap'] != 'uyentramle' && $_SESSION['user']['ten_dang_nhap'] != 'admin'){
			throw new Exception('Bạn không được quyền chỉnh sửa thông tin Ban Quản Trị Chính của website!');
		}
	}
	if($ten_dang_nhap = 'uyentramle' && $ma == 2){
		if($_SESSION['user']['ten_dang_nhap'] != 'uyentramle'){
			throw new Exception('Bạn không được quyền chỉnh sửa thông tin của Quản trị viên này!');
		}
	}
	if($ten_dang_nhap = 'vinhdkl' && $ma == 5){
		if($_SESSION['user']['ten_dang_nhap'] != 'uyentramle' && $_SESSION['user']['ten_dang_nhap'] != 'admin' && $_SESSION['user']['ten_dang_nhap'] != 'vinhdkl'){
			throw new Exception('Bạn không được quyền chỉnh sửa thông tin của Quản trị viên này!');
		}
	}
	$dt_smarty->assign('quan_tri_vien', $kiem_tra);
	#KT ton tai:
	if(empty($_GET['m']) || empty($_GET['u']) || !is_numeric($_GET['m'])){
		throw new Exception('Bạn chưa chọn Mã Quản Trị Viên, hoặc Mã Quản Trị Viên không hợp lệ');
	}
	
	
	#########
	$dt_smarty->assign('message', $message);
	$contentForLayout = $dt_smarty->fetch('administrator/edit.tpl');
	$dt_smarty->assign('contentForLayout', $contentForLayout);
	$dt_smarty->assign('titleForLayout', 'Cập nhật quản trị');
	$dt_smarty->display('layouts/default.tpl');

	
	#Đóng kết nối
	$dbh = NULL;
	
}catch(PDOException $e){
	echo $e->getMessage();
}catch(Exception $e){
	#Dong ket noi
	$dbh = NULL;
	$_SESSION['msg'] = $e->getMessage();
	$_SESSION['type_msg'] = "error";
	header('Location: list.php');	
}