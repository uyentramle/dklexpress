<?php
try {
	include '../ini.php';
	include '../../classes/xl_quan_tri.php';
	$dt_xl_quan_tri = new xl_quan_tri();
	
	include '../../classes/functions.php';
	$dt_phan_trang = new phan_trang();
	
	
	############Chuẩn bị câu thông báo###############
	if(isset($_SESSION['msg'])){
		$message = $dt_smarty->fetch('elements/message.tpl');
		unset($_SESSION['msg']);
		unset($_SESSION['type_msg']);
	} else{
		$message = '';
	}	
	
	
	##############Tìm từ khóa########################
	if(isset($_GET['tu_khoa'])){
		$tu_khoa = $_GET['tu_khoa'];		
	}
	
	###############Chuẩn bị danh sách sữa##################
	#Tìm trang hiện tại
	$page = $dt_phan_trang->tim_trang_hien_tai();
	
	#Tính vị trí phân trang
	$start = $dt_phan_trang->tinh_vi_tri_phan_trang($page, 10);
	
	#Lấy dữ liệu và in danh sách bài viết	
	$ds_quan_tri = $dt_xl_quan_tri->danh_sach($start, $tu_khoa);
	
	###############Chuẩn bị phân trang###################
	#Tìm tổng số bài viết
	$tong_so_thanh_vien = $dt_xl_quan_tri->so_luong($tu_khoa);
	
	#Tính tổng số trang
	$n = $dt_phan_trang->tong_so_trang($tong_so_thanh_vien, 10);
	
	#In bộ nút
	$bo_nut = $dt_phan_trang->in_bo_nut($page, $n);
	
	##############Gởi thông tin qua cho smarty#####################
	$dt_smarty->assign('tu_khoa', $tu_khoa);
	$dt_smarty->assign('ds_quan_tri', $ds_quan_tri);
	$dt_smarty->assign('bo_nut', $bo_nut);
	$dt_smarty->assign('message', $message);
	
	##############Chuyển cho smarty biên dịch và đọc giao diện#####
	$contentForLayout = $dt_smarty->fetch('administrator/list.tpl');
	$dt_smarty->assign('contentForLayout', $contentForLayout);
	$dt_smarty->assign('titleForLayout', 'Danh sách quản trị');
	$dt_smarty->display('layouts/default.tpl');	
		
	
	#Đóng kết nối
	$dbh = NULL;;
	
	
}catch(Exception $e){
	echo 'Lỗi kết nối '.$e->getMessage();
	exit;	
}