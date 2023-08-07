<?php
	#Mo Session
	session_start();
	
	include '../config.php';
	
	#Ket noi
	$dbh = new PDO('mysql:host='.HOST_NAME.'; dbname='.DB_NAME, DB_USERNAME, DB_PASSWORD); //database handle
	$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	
	#Chuyen ma utf8
	$dbh->exec('set names utf8');
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	###############Smarty############
	include '../libraries/smarty/Smarty.class.php';	
	$dt_smarty = new Smarty();	
	$dt_smarty->setTemplateDir('../templates/');
	$dt_smarty->setCompileDir('../templates_c/');
	$dt_smarty->setConfigDir('../configs/');
	$dt_smarty->setCacheDir('../cache/');
	
	
	######################################
	function convert_vi_to_en($str) {
		$str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
		$str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
		$str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
		$str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
		$str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
		$str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
		$str = preg_replace("/(đ)/", 'd', $str);
		$str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
		$str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
		$str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
		$str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
		$str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
		$str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
		$str = preg_replace("/(Đ)/", 'D', $str);
		$str = str_replace(" ", "-", str_replace("&*#39;","",$str));	
		$str = preg_replace("/(\-+)/", "-", $str);		
		return $str;
	}
	
	
	###########Số lượng truy cập website################
	if(!isset($_SESSION['bo_dem'])){
		include '../classes/xl_bo_dem.php';
		$dt_xl_bo_dem = new xl_bo_dem();
		$dia_chi_ip = $_SERVER['REMOTE_ADDR'];
		$trinh_duyet = $_SERVER['HTTP_USER_AGENT'];
		$thoi_gian = date('Y-m-d h:i:s');
		$bo_dem = $dt_xl_bo_dem->them(array('dia_chi_ip' => $dia_chi_ip, 'trinh_duyet' => $trinh_duyet, 'thoi_gian' => $thoi_gian));		
		$_SESSION['bo_dem'] = 1;	
		//print_r($_SESSION['bo_dem']); exit;
	}