<?php
try{
	/*echo '<pre>';
	print_r($_GET);
	echo '</pre>';
	exit;*/
	
	include '../ini.php';		
	include '../../classes/xl_hoa_don.php';
	$dt_xl_hoa_don = new xl_hoa_don();
	
	$ma = $_GET['ma'];	
	$so_hieu = $_GET['so_hieu'];
	
	//echo $ma, $so_hieu; exit;
	
	#Đọc mã:
	$hoa_don = $dt_xl_hoa_don->doc($so_hieu);
	//echo '<pre>'; print_r($hoa_don); echo '</pre>'; exit;
	//echo $hoa_don['so_hieu']; exit;
	if($so_hieu != $hoa_don['so_hieu'] || $ma != $hoa_don['ma']){
		throw new Exception('Xóa không thành vì không có Số Ký Gửi này trong hệ thống');
	}
	
	
	#KT ton tai:
	if(empty($_GET['ma']) || empty($_GET['so_hieu']) || !is_numeric($_GET['ma'])){
		throw new Exception('Bạn chưa chọn Số Ký Gửi');
	}
	
	#Lenh sql
	$result = $dt_xl_hoa_don->xoa($so_hieu);
	if($result === false){
		throw new Exception('Xóa không thành vì đã có lỗi trong quá trình xử lý');
	}
		
	#Dong ket noi
	$dbh = NULL;
	$_SESSION['msg'] = "Xóa thành công";
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
	header('Location: list.php'); exit;
}