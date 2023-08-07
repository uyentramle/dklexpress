<?php
try {
	session_start();
	include '../../libraries/smarty/Smarty.class.php';
	include '../../config.php';
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	#echo '<pre>'; print_r($_SESSION); echo '</pre>'; exit;
	
	$dt_smarty = new Smarty();
	$dt_smarty->setTemplateDir('../templates/');
	$dt_smarty->setCompileDir('../templates_c/');
	$dt_smarty->setConfigDir('../../configs/');
	$dt_smarty->setCacheDir('../../cache/');
	
	
	
	############################
	$dt_smarty->assign('message', $message);
	$contentForLayout = $dt_smarty->fetch('elements/information.tpl');
	$dt_smarty->assign('contentForLayout', $contentForLayout);
	$dt_smarty->display('layouts/default.tpl');	
	
	#Đóng kết nối
	$dbh = NULL;
	
	
}catch(Exception $e){
	echo $e->getMessage();
	exit;	
}