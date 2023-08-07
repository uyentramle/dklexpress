<?php
try{
	/*echo '<pre>';
	//print_r($_SESSION); 
	print_r($_POST);
	echo '</pre>';
	exit;*/
	
	include '../ini.php';
	include '../../classes/xl_ben_van_chuyen.php';
	$dt_xl_ben_van_chuyen = new xl_ben_van_chuyen();
	
	$data = $_POST['data'];
	
	#Kiem tra
	if(empty($data['ten'])){
		throw new Exception('Nhập Tên Hãng Vận Chuyển');
	}
	if(empty($data['thong_tin'])){
		throw new Exception('Nhập Thông Tin Hãng Vận Chuyển');
	}
	
	#################
	$data['ma_nguoi_tao'] = $_SESSION['user']['ma'];	
	//echo $data['ma_nguoi_tao']; exit;
	$data['ngay_tao'] = date('Y-m-d h:i:s', time()); //2014-03-27 10:19:12
	//echo $data['ngay_tao']; exit;
	
	if($data['ngay_xuat_ban'] == NULL){
		$data['ngay_xuat_ban'] = date('Y-m-d h:i:s', time());
	}
	
	/*echo '<pre>';
	//print_r($_SESSION); 
	print_r($data);
	echo '</pre>'; exit;*/
	
	#Lenh sql
	$result = $dt_xl_ben_van_chuyen->them($data);	
	if($result === false){
		throw new Exception('Đã xãy ra lỗi trong quá trình lưu dữ liệu, xin vui lòng kiểm tra và thử lại sau!');
	}
	
	#Dong ket noi
	$dbh = NULL;
	$_SESSION['msg'] = "Lưu thành công!";
	$_SESSION['type_msg'] = "success";
	//echo $_SESSION['type_msg']; exit;
	header('Location: list.php');
	exit;
	
}catch(PDOException $e){
	echo $e->getMessage();
}catch(Exception $e){
	#Dong ket noi
	$dbh = NULL;
	$_SESSION['msg'] = $e->getMessage();
	$_SESSION['type_msg'] = "error";
	//echo $_SESSION['msg']; exit;
	header('Location: add.php'); exit;
}