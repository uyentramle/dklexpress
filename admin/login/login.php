<?php
try{
	session_start();
	include '../../libraries/smarty/Smarty.class.php';
	include '../../config.php';
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	#######KT người dùng có đăng nhập hay chưa?##########
	if(!empty($_SESSION[SALT.'login']) || $_SESSION[SALT.'login'] == 1){
		throw new Exception('Bạn đã đăng nhập, bạn không thể vào trang này!');
	}	
	
	$dt_smarty = new Smarty();	
	$dt_smarty->setTemplateDir('../templates/');
	$dt_smarty->setCompileDir('../templates_c/');
	$dt_smarty->setConfigDir('../../configs/');
	$dt_smarty->setCacheDir('../../cache/');
	
	############## Chuẩn bị câu thông báo ##############
	if(isset($_SESSION['msg_login'])){
		$message_login = $dt_smarty->fetch('elements/message_login.tpl');
		#Xóa session
		unset($_SESSION['msg_login']);
		unset($_SESSION['type_msg_login']);
	}else{
		$message_login = '';
	}
	
	$dt_smarty->assign('message_login', $message_login);
	$dt_smarty->assign('titleForLayout', 'Đăng nhập trang quản trị');
	$dt_smarty->display('login/login.tpl');
}catch(Exception $e){
	$_SESSION['msg'] = $e->getMessage();
	header('Location: ../index.php');
	exit;	
}