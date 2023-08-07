<?php
try{
	/*echo '<pre>';
	//print_r($_SESSION); 
	print_r($_GET);
	echo '</pre>'; exit;*/
	
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
		throw new Exception('Mã Ký Gửi này không tồn tại trong hệ thống');
	}
	if($so_hieu != $hoa_don['so_hieu'] || $ma_hd != $hoa_don['ma']){
		throw new Exception('Không có Số Ký Gửi này trong hệ thống');
	}
	$dt_smarty->assign('hoa_don', $hoa_don);
	#KT ton tai:
	if(empty($_GET['ma']) || empty($_GET['ma_hd']) || empty($_GET['so_hieu']) || !is_numeric($_GET['ma']) || !is_numeric($_GET['ma_hd'])){
		throw new Exception('Bạn chưa chọn Số Ký Gửi, hoặc Số Ký gửi không hợp lệ');
	}
	
	$tien_do_vc = $dt_xl_thong_tin_chuyen_thu->doc($ma);	
	
	
	$dt_smarty->assign('tien_do_vc', $tien_do_vc);
	$contentForLayout = $dt_smarty->fetch('info/edit.tpl');
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
	header('Location: '. $_SERVER['HTTP_REFERER']);		
}