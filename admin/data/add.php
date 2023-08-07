<?php
try{
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
	
	$ds_ben_van_chuyen = $dt_xl_ben_van_chuyen->danh_sach_khong_phan_trang();
	$dt_smarty->assign('ds_ben_van_chuyen', $ds_ben_van_chuyen);
	
	$contentForLayout = $dt_smarty->fetch('data/add.tpl');
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
	header('Location: add.php');	
}