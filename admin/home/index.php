<?php
try {
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
	
	
	$nguoi_dung = $_SESSION['user'];
	//echo '<pre>'; print_r($_SESSION); echo '</pre>'; exit;
	
	############################
	$dt_smarty->assign('nguoi_dung', $nguoi_dung);
	$contentForLayout = $dt_smarty->fetch('elements/home.tpl');
	$dt_smarty->assign('contentForLayout', $contentForLayout);
	$dt_smarty->display('layouts/default.tpl');	
	
	#Đóng kết nối
	$dbh = NULL;
	
	
}catch(Exception $e){
	echo $e->getMessage();
	exit;	
}