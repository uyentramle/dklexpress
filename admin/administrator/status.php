<?php
try{
	/*echo '<pre>';
	print_r($_GET);
	echo '</pre>';
	exit;*/
	
	include '../ini.php';
	include '../../classes/xl_quan_tri.php';
	$dt_xl_quan_tri = new xl_quan_tri();
	
	#Đọc mã:
	$ma = $_GET['m'];	
	$ten_dang_nhap = base64_decode($_GET['u']);
	$kiem_tra = $dt_xl_quan_tri->doc($ma);
	if($ten_dang_nhap != $kiem_tra['ten_dang_nhap'] || $ma != $kiem_tra['ma']){
		throw new Exception('Không có Quản Trị Viên này trong hệ thống');
	}
	#KT ton tai:
	if(empty($_GET['m']) || empty($_GET['u']) || !is_numeric($_GET['m'])){
		throw new Exception('Bạn chưa chọn Mã Quản Trị Viên, hoặc Mã Quản Trị Viên không hợp lệ');
	}
	
	#Lenh sql
	$result = $dt_xl_quan_tri->trang_thai($ma);
	if($result === false){
		throw new Exception('Đã có lỗi trong quá trình xử lý');
	}
		
	#Dong ket noi
	$dbh = NULL;
	$_SESSION['msg'] = "Cập nhật trạng thái thành công";
	$_SESSION['type_msg'] = "success";
	header('Location: list.php');
	exit;
	
}catch(PDOException $e){
	echo $e->getMessage();
}catch(Exception $e){
	#Dong ket noi
	$dbh = NULL;
	$_SESSION['msg'] = $e->getMessage();
	$_SESSION['type_msg'] = "error";
	header('Location: list.php');	
}