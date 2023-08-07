<?php
try{
	#Mo Session
	session_start();	
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
	include '../../classes/xl_quan_tri.php';
	$dt_xl_quan_tri = new xl_quan_tri();
	
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
	
	############Chuẩn bị câu thông báo###############
	if(isset($_SESSION['msg'])){	
		$message = $dt_smarty->fetch('elements/message.tpl');
		unset($_SESSION['msg']);
		unset($_SESSION['type_msg']);
	} else{
		$message = '';
	}
	
	#Đọc mã:
	$ma = $_GET['m'];	
	$ten_dang_nhap = base64_decode($_GET['u']);
	$qt_vien = $dt_xl_quan_tri->doc($ma);
	if($ten_dang_nhap != $qt_vien['ten_dang_nhap'] || $ma != $qt_vien['ma']){
		throw new Exception('Không có Quản Trị Viên này trong hệ thống');
	}
	$dt_smarty->assign('qt_vien', $qt_vien);
	#KT ton tai:
	if(empty($_GET['m']) || empty($_GET['u']) || !is_numeric($_GET['m'])){
		throw new Exception('Bạn chưa chọn Mã Quản Trị Viên, hoặc Mã Quản Trị Viên không hợp lệ');
	}
	
	$contentForLayout = $dt_smarty->fetch('administrator/detail.tpl');
	$dt_smarty->assign('message', $message);
	$dt_smarty->assign('contentForLayout', $contentForLayout);	
	$dt_smarty->display('layouts/default.tpl');	
	#Dong ket noi
	$dbh = NULL;	
}catch(PDOException $e){
	echo $e->getMessage();
}catch(Exception $e){
	#Dong ket noi
	$dbh = NULL;
	$_SESSION['msg'] = $e->getMessage();
	$_SESSION['type_msg'] = "error";
	header('Location: ../home/index.php');	
}