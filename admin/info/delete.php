<?php
try{
	include '../ini.php';
	include '../../classes/xl_hoa_don.php';
	$dt_xl_hoa_don = new xl_hoa_don();
	include '../../classes/xl_thong_tin_chuyen_thu.php';
	$dt_xl_thong_tin_chuyen_thu = new xl_thong_tin_chuyen_thu();
	
	############## Chuẩn bị câu thông báo ##############
	if(isset($_SESSION['msg'])){
		$message = $dt_smarty->fetch('elements/message.tpl');
	#Xóa session
		unset($_SESSION['msg']);
		unset($_SESSION['type_msg']);
	}else{
		$message = '';
	}
	
	#Đọc mã:
	$ma = $_GET['ma'];
	$ma_hd = $_GET['ma_hd'];
	$so_hieu = $_GET['so_hieu'];	
	$hoa_don = $dt_xl_hoa_don->doc($so_hieu);
	$kiem_tra_ma = $dt_xl_thong_tin_chuyen_thu->doc($ma);
	if($ma != $kiem_tra_ma['ma']){
		throw new Exception('Không có Dữ Liệu này trong hệ thống');
	}
	if($so_hieu != $hoa_don['so_hieu'] || $ma_hd != $hoa_don['ma']){
		throw new Exception('Không có Dữ Liệu Ký Gởi này trong hệ thống');
	}
	//echo $ma, $so_hieu; exit;
	#KT ton tai:
	if(empty($_GET['ma']) || empty($_GET['ma_hd']) || empty($_GET['so_hieu']) || !is_numeric($_GET['ma']) || !is_numeric($_GET['ma_hd'])){
		throw new Exception('Bạn chưa chọn Dữ Liệu để xóa, hoặc Dữ Liệu không hợp lệ');
	}
	
	#Lenh sql
	$result = $dt_xl_thong_tin_chuyen_thu->xoa_theo_ma($ma);
	if($result === false){
		throw new Exception('Xóa không thành vì đã có lỗi trong quá trình xử lý');
	}
		
	#Dong ket noi
	$dbh = NULL;
	$_SESSION['msg'] = "Xóa thành công";
	$_SESSION['type_msg'] = "success";
	header('Location: '. $_SERVER['HTTP_REFERER']);
	exit;
	
}catch(PDOException $e){
	echo $e->getMessage();
}catch(Exception $e){
	#Dong ket noi
	$dbh = NULL;
	$_SESSION['msg'] = $e->getMessage();
	$_SESSION['type_msg'] = "error";
	header('Location: '. $_SERVER['HTTP_REFERER']);	exit;
}