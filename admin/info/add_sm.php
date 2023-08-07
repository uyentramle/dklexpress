<?php
try{
	/*echo '<pre>';
	//print_r($_SESSION); 
	print_r($_POST);
	echo '</pre>'; exit;*/
		
	include '../ini.php';	
	include '../../classes/xl_thong_tin_chuyen_thu.php';
	$dt_xl_thong_tin_chuyen_thu = new xl_thong_tin_chuyen_thu();
		
	$data = $_POST['data'];
	
	#Kiem tra
	if(empty($data['so_hieu'])){
		throw new Exception('Có vấn đề về Số Hiệu, vui lòng kiểm tra lại');
	}	
	if(empty($data['dia_diem'])){
		throw new Exception('Nhập Địa Điểm');
	}
	if(empty($data['ngay'])){
		throw new Exception('Nhập Ngày');
	}
	if(empty($data['thoi_gian_dia_phuong'])){
		throw new Exception('Nhập Thời Gian Địa Phương');
	}
	if(empty($data['hoat_dong'])){
		throw new Exception('Nhập Hoạt Động');
	}
	$data['ma_nguoi_dung'] = $data['ma_nguoi_dung'] = $_SESSION['user']['ma'];
	
	#Lenh sql
	$result = $dt_xl_thong_tin_chuyen_thu->them($data);	
	if($result === false){
		throw new Exception('Đã xãy ra lỗi trong quá trình lưu dữ liệu, xin vui lòng kiểm tra và thử lại sau!');
	}
	
	#Dong ket noi
	$dbh = NULL;
	$_SESSION['msg'] = "Lưu thành công!";
	$_SESSION['type_msg'] = "success";
	//echo $_SESSION['type_msg']; exit;
	header('Location: '. $_SERVER['HTTP_REFERER']);
	exit;
	
}catch(PDOException $e){
	echo $e->getMessage();
}catch(Exception $e){
	#Dong ket noi
	$dbh = NULL;
	$_SESSION['msg'] = $e->getMessage();
	$_SESSION['type_msg'] = "error";
	//echo $_SESSION['msg']; exit;
	header('Location: '. $_SERVER['HTTP_REFERER']);
}