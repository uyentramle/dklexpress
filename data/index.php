<?php
try {
	include '../ini.php';
	
	############Chuẩn bị câu thông báo###############
	if(isset($_SESSION['msg'])){
		$message = $dt_smarty->fetch('elements/message.tpl');
		unset($_SESSION['msg']);
	} else{
		$message = '';
	}
	$dt_smarty->assign('message', $message);
	$contentForLayout = $dt_smarty->fetch('data/search.tpl');
	$dt_smarty->assign('contentForLayout', $contentForLayout);
	$dt_smarty->assign('titleForLayout', 'Tra cứu - Tìm số vận đơn');
	$dt_smarty->display('layouts/default.tpl');
	#Đóng kết nối
	$dbh = NULL;
	
	
}catch(Exception $e){
	echo $e->getMessage();
	exit;	
}

