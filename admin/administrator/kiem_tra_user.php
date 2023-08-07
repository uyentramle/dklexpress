<?php
try{
	include '../ini.php';	
	include '../../classes/xl_quan_tri.php';
	$dt_xl_quan_tri = new xl_quan_tri();
			
	if(empty($_GET['ten_dang_nhap'])){
		echo 'Bạn chưa chọn tên đăng nhập để kiểm tra.';
		exit;
	}	
	$ten_dang_nhap = $_GET['ten_dang_nhap'];
	
	/*
	$sosanh=strcmp($chuoi1,$chuoi2);
	if($sosanh==0)
		$kq="Hai chuỗi giống nhau";
	else
		$kq="Hai chuỗi không bằng nhau";*/
	
	########### Lấy ra được lon sữa ##########
	$kt = $dt_xl_quan_tri->doc_theo_ten($ten_dang_nhap);
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