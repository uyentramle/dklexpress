<?php
try{
	include '../ini.php';	
	include '../../classes/xl_quan_tri.php';
	$dt_xl_quan_tri = new xl_quan_tri();
			
	if(empty($_GET['email'])){
		echo 'Bạn chưa chọn email để kiểm tra.';
		exit;
	}	
	$email = $_GET['email'];
	
	########### Lấy ra được lon sữa ##########
	$kt = $dt_xl_quan_tri->doc_theo_email($email);
	if($kt != NULL){
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