<?php
try{
	/*echo '<pre>';
	print_r($_GET);
	echo '</pre>'; exit;*/
	
	include '../ini.php';
	include '../../classes/xl_hoa_don.php';
	$dt_xl_hoa_don = new xl_hoa_don();
	include '../../classes/xl_trang_thai_van_chuyen.php';
	$dt_xl_trang_thai_van_chuyen = new xl_trang_thai_van_chuyen();
	
	############## Chuẩn bị câu thông báo ##############
	if(isset($_SESSION['msg'])){
		$message = $dt_smarty->fetch('elements/message.tpl');
	#Xóa session
		unset($_SESSION['msg']);
		unset($_SESSION['type_msg']);
	}else{
		$message = '';
	}
	#KT ton tai:
	if(empty($_GET['ma']) || empty($_GET['so_hieu']) || !is_numeric($_GET['ma'])){
		throw new Exception('Bạn chưa chọn Số Ký Gửi, hoặc Số Ký gửi không hợp lệ');
	}
	
	#Đọc mã:
	$ma = $_GET['ma'];	
	$so_hieu = $_GET['so_hieu'];	
	$hoa_don = $dt_xl_hoa_don->doc($so_hieu);
	if($so_hieu != $hoa_don['so_hieu'] || $ma != $hoa_don['ma']){
		throw new Exception('Không có Số Ký Gửi này trong hệ thống');
	}
	$trang_thai_van_chuyen = $dt_xl_trang_thai_van_chuyen->doc($so_hieu);
	$dt_smarty->assign('hoa_don', $hoa_don);
	$dt_smarty->assign('trang_thai_van_chuyen', $trang_thai_van_chuyen);
	$contentForLayout = $dt_smarty->fetch('status/edit.tpl');
	$dt_smarty->assign('message', $message);
	$dt_smarty->assign('contentForLayout', $contentForLayout);
	
	$dt_smarty->display('layouts/default.tpl');
	
	#Dong ket noi
	$dbh = NULL;
	
}catch(PDOException $e){
	echo $e->getMessage();
}catch(Exception $e){
	#Dong ket noi
	$dbh = NULL;
	$_SESSION['msg'] = $e->getMessage();
	$_SESSION['type_msg'] = "error";
	//echo $_SESSION['msg']; exit;
	header("Location: ../data/list.php");	
}