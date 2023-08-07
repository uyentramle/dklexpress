<?php
try{
	include '../ini.php';
	include '../../classes/xl_quan_tri.php';
	$dt_xl_quan_tri = new xl_quan_tri();
	include '../../classes/xl_phan_quyen.php';
	$dt_xl_phan_quyen = new xl_phan_quyen();
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
	$quan_tri = $dt_xl_quan_tri->doc($ma);
	if($ten_dang_nhap != $quan_tri['ten_dang_nhap'] || $ma != $quan_tri['ma']){
		throw new Exception('Không có Quản Trị Viên này trong hệ thống');
	}
	if($ten_dang_nhap = 'admin' && $ma == 1){
		throw new Exception('Không thể phân quyền cho Ban Quản Trị Chính của website!');
	}
	if($ten_dang_nhap = 'uyentramle' && $ma == 2){
		throw new Exception('Không thể phân quyền cho Ban Quản Trị Chính của website!');
	}
	$dt_smarty->assign('quan_tri', $quan_tri);
	#KT ton tai:
	if(empty($_GET['m']) || empty($_GET['u']) || !is_numeric($_GET['m'])){
		throw new Exception('Bạn chưa chọn Mã Quản Trị Viên, hoặc Mã Quản Trị Viên không hợp lệ');
	}
	########### Lấy ra được bài viết ##########
	$row = $dt_xl_quan_tri->doc($ma);
	if($row == NULL){
		$_SESSION['msg'] = 'Tên quản trị không tồn tại';
		$_SESSION['type_msg'] = 'error';
		header('Location: list.php');	
		exit;
	}
	#######
	$dt_smarty->assign('message', $message);
	$contentForLayout = $dt_smarty->fetch('administrator/permission.tpl');	
	$dt_smarty->assign('contentForLayout', $contentForLayout);
	$dt_smarty->assign('titleForLayout', 'Phân quyền quản trị viên');
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