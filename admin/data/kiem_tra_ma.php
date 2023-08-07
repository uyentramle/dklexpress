<?php
try{
	#sleep(2);
	include '../ini.php';
	
	include '../../classes/xl_hoa_don.php';
	$dt_xl_hoa_don = new xl_hoa_don();
	
			
	if(empty($_GET['so_hieu'])){
		echo 'Bạn chưa chọn số hiệu';
		exit;
	}
	
	$so_hieu = $_GET['so_hieu'];
	
	########### Lấy ra được lon sữa ##########
	$so_hieu = $dt_xl_hoa_don->doc($so_hieu);
	if($so_hieu != NULL){
		echo 'yes';
	} else {
		echo 'no';
	}
	
		
	
	#Đóng kết nối
	$dbh = NULL;;
	
}catch(Exception $e){
	echo 'Lỗi '.$e->getMessage();
	exit;	
}
	
?>