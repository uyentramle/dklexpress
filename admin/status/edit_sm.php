<?php
try{
	/*echo '<pre>';
	//print_r($_SESSION); 
	print_r($_POST);
	echo '</pre>'; exit;*/
		
	include '../ini.php';
	include '../../classes/xl_hoa_don.php';
	$dt_xl_hoa_don = new xl_hoa_don();
	include '../../classes/xl_trang_thai_van_chuyen.php';
	$dt_xl_trang_thai_van_chuyen = new xl_trang_thai_van_chuyen();
	
	$data = $_POST['data'];
	
	#Kiem tra
	if(empty($data['ma']) || !is_numeric($data['ma'])){
		throw new Exception('Có vấn đề về mã, vui lòng kiểm tra lại');
	}
	if(empty($data['so_hieu'])){
		throw new Exception('Có vấn đề về Số Hiệu, vui lòng kiểm tra lại');
	}	
	if(empty($data['trang_thai'])){
		throw new Exception('Nhập Trạng Thái');
	}
	if(empty($data['phat_hanh_theo_lich'])){
		throw new Exception('Nhập Lịch Phát hành');
	}
	if(empty($data['dia_diem_cuoi_cung'])){
		throw new Exception('Nhập Địa Điểm Cuối Cùng');
	}
	
	$kiem_tra = $dt_xl_trang_thai_van_chuyen->doc($data['so_hieu']);
	//print_r($kiem_tra); exit;
	if($data['so_hieu'] != $kiem_tra['so_hieu'] || $data['ma'] != $kiem_tra['ma']){
		throw new Exception('Không có Số Ký Gửi này trong hệ thống');
	}
	
	#################
		
	$data['ma_nguoi_dung'] = $data['ma_nguoi_dung'] = $_SESSION['user']['ma'];	
	//echo $data['ma_nguoi_dung']; exit;
	
	$hoa_don = $dt_xl_hoa_don->doc($data['so_hieu']);
	$ma = $hoa_don['ma'];
	$so_hieu = $data['so_hieu'];	
	
	/*echo '<pre>';
	print_r($_SESSION); 
	print_r($hoa_don);
	echo $ma, $so_hieu;
	echo '</pre>'; exit;*/
	
	#Lenh sql
	$result = $dt_xl_trang_thai_van_chuyen->cap_nhat($data);	
	if($result === false){
		throw new Exception('Đã xãy ra lỗi trong quá trình lưu dữ liệu 1, xin vui lòng kiểm tra và thử lại sau!');
	}
	
	#Dong ket noi
	$dbh = NULL;
	$_SESSION['msg'] = "Lưu thành công!";
	$_SESSION['type_msg'] = "success";
	//echo $_SESSION['type_msg']; exit;
	header("Location: list.php?ma=$ma&so_hieu=$so_hieu");
	exit;
	
}catch(PDOException $e){
	echo $e->getMessage();
}catch(Exception $e){
	#Dong ket noi
	$dbh = NULL;
	$_SESSION['msg'] = $e->getMessage();
	$_SESSION['type_msg'] = "error";
	//echo $_SESSION['msg']; exit;
	header("Location: edit.php?ma=$ma&so_hieu=$so_hieu"); exit;
}