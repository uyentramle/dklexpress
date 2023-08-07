<?php
	#Mo Session
	session_start();	
	include '../../config.php';	
	/*echo '<pre>';
	print_r($_SESSION); 
	echo '</pre>'; exit;*/	
	
	#Ket noi
	$dbh = new PDO('mysql:host=localhost; dbname='.DB_NAME, DB_USERNAME, DB_PASSWORD); //database handle
	$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);	
	#Chuyen ma utf8
	$dbh->exec('set names utf8');
	#Đặt múi giờ
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	
	#######KT người dùng có đăng nhập hay chưa?##########
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
	
	################## Phân quyền ###############
	$url_tong = $_SERVER['REQUEST_URI'];
	for($i = 0; $i <= 100; $i++){
		$url = str_replace("?page=".$i, '', $url_tong);
	}
	
	echo $url . '<br>';
	$arr = explode('/', $url);
	print_r($arr). '<br>';
	$n = count($arr);
	echo $n. '<br>';
	$file = $arr[$n - 1];
	echo $file. '<br>';
	$folder = $arr[$n - 2];
	echo $folder . '<br>';
	$tap_tin = $folder. '_' .$file;
	echo $tap_tin; exit;
	
	$ma_quan_tri = $_SESSION['user']['ma'];	
	#KT phân quyền
	if($_SESSION['user']['ten_dang_nhap'] != 'admin') {		
		include '../../classes/xl_phan_quyen.php';
		$dt_xl_phan_quyen = new xl_phan_quyen();
		$row = $dt_xl_phan_quyen->doc($ma_quan_tri, $tap_tin);
		if($row == NULL){
			throw new Exception('Bạn không được cấp quyền hạn trong chức năng này!');
			exit;
		}	
	}
	
	###########Nhúng thư viện smarty###########
	include '../../libraries/smarty/Smarty.class.php';	
	$dt_smarty = new Smarty();	
	$dt_smarty->setTemplateDir('../templates/');
	$dt_smarty->setCompileDir('../templates_c/');
	$dt_smarty->setConfigDir('../../configs/');
	$dt_smarty->setCacheDir('../../cache/');
	