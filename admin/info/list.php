<?php
try {
	include '../ini.php';
	include '../../classes/xl_hoa_don.php';
	$dt_xl_hoa_don = new xl_hoa_don();	
	include '../../classes/xl_thong_tin_chuyen_thu.php';
	$dt_xl_thong_tin_chuyen_thu = new xl_thong_tin_chuyen_thu();
	
	
	############Chuẩn bị câu thông báo###############
	if(isset($_SESSION['msg'])){
		$message = $dt_smarty->fetch('elements/message.tpl');
		unset($_SESSION['msg']);
		unset($_SESSION['type_msg']);
	} else{
		$message = '';
	}	
	
	#Đọc mã:
	$ma = $_GET['ma'];	
	$so_hieu = $_GET['so_hieu'];	
	$hoa_don = $dt_xl_hoa_don->doc($so_hieu);
	if($so_hieu != $hoa_don['so_hieu'] || $ma != $hoa_don['ma']){
		throw new Exception('Không có Số Ký Gửi này trong hệ thống');
	}
	$dt_smarty->assign('hoa_don', $hoa_don);
	#KT ton tai:
	if(empty($_GET['ma']) || empty($_GET['so_hieu']) || !is_numeric($_GET['ma'])){
		throw new Exception('Bạn chưa chọn Số Ký Gửi, hoặc Số Ký gửi không hợp lệ');
	}
	
	#tien do van chuyen
	$nd_tien_do = $dt_xl_thong_tin_chuyen_thu->danh_sach_theo_so_hieu($so_hieu);
	$dt_smarty->assign('nd_tien_do', $nd_tien_do);
		
	
	##############Gởi thông tin qua cho smarty#####################
	$dt_smarty->assign('message', $message);
	$dt_smarty->assign('hoa_don', $hoa_don);
	##############Chuyển cho smarty biên dịch và đọc giao diện#####
	$contentForLayout = $dt_smarty->fetch('info/list.tpl');
	$dt_smarty->assign('contentForLayout', $contentForLayout);
	$dt_smarty->assign('titleForLayout', 'Tiến Độ Vận Chuyển Kiện Hàng');
	$dt_smarty->display('layouts/default.tpl');	
		
	
	#Đóng kết nối
	$dbh = NULL;;
	
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