<?php
try{
	/*echo '<pre>';
	print_r($_GET);
	echo '</pre>';
	exit;*/
	include '../ini.php';	
	include '../../classes/xl_ben_van_chuyen.php';
	$dt_xl_ben_van_chuyen = new xl_ben_van_chuyen();
	
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
	$ten = base64_decode($_GET['name']);
	$hang_van_chuyen = $dt_xl_ben_van_chuyen->doc($ma);	
	if($ten != $hang_van_chuyen['ten'] || $ma != $hang_van_chuyen['ma']){
		throw new Exception('Xóa không thành vì không có Hãng Vận chuyển này trong hệ thống');
	}
	$dt_smarty->assign('hang_van_chuyen', $hang_van_chuyen);
	#KT ton tai:
	if(empty($_GET['ma']) || empty($_GET['name']) || !is_numeric($_GET['ma'])){
		throw new Exception('Bạn chưa chọn Hãng Vận Chuyển, hoặc Mã Hãng Vận Chuyển không hợp lệ');
	}
	
	#Lenh sql
	$result = $dt_xl_ben_van_chuyen->xoa($ma);
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