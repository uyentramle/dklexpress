<?php
try {
	include '../ini.php';
	include '../../classes/xl_ben_van_chuyen.php';
	$dt_xl_ben_van_chuyen = new xl_ben_van_chuyen();	
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
	
	############## Tìm từ khóa ########################
	if(isset($_GET['tu_khoa'])){
		$tu_khoa = $_GET['tu_khoa'];		
	}
	############## Filter ########################
	if(isset($_GET['filter'])){
		if(!is_numeric($_GET['filter'])){
			$selcAll = 'selected="selected"';
			$list = $dt_xl_ben_van_chuyen->danh_sach_khong_phan_trang();
		}elseif(is_numeric($_GET['filter']) && $_GET['filter'] != NULL){
			$selc15 = 'selected="selected"';
			$filter = $_GET['filter'];
		}
	}else{
		$filter = 15;
	}
	###############Chuẩn bị danh sách phân trang##################
	#Tìm trang hiện tại
	$page = $dt_phan_trang->tim_trang_hien_tai();	
	#Tính vị trí phân trang
	$start = $dt_phan_trang->tinh_vi_tri_phan_trang($page, $filter);	
	#Lấy dữ liệu và in danh sách bài viết	
	$list = $dt_xl_ben_van_chuyen->danh_sach($start, $filter, $tu_khoa);
	
	###############Chuẩn bị phân trang###################
	#Tìm tổng số bài viết
	$tong_so_hoa_don = $dt_xl_ben_van_chuyen->so_luong($tu_khoa);	
	#Tính tổng số trang
	$n = $dt_phan_trang->tong_so_trang($tong_so_hoa_don, $filter);	
	#In bộ nút
	$bo_nut = $dt_phan_trang->in_bo_nut($page, $n);
	$stt = 0;
	$dt_smarty->assign('bo_nut', $bo_nut);
	
	##############Gởi thông tin qua cho smarty#####################
	$dt_smarty->assign('stt', $stt);
	$dt_smarty->assign('tu_khoa', $tu_khoa);
	$dt_smarty->assign('list', $list);	
	$dt_smarty->assign('message', $message);
	
	##############Chuyển cho smarty biên dịch và đọc giao diện#####
	$contentForLayout = $dt_smarty->fetch('transportation/list.tpl');
	$dt_smarty->assign('titleForLayout', 'Danh Sách Kiện Hàng');
	$dt_smarty->assign('contentForLayout', $contentForLayout);
	$dt_smarty->display('layouts/default.tpl');	
		
	
	#Đóng kết nối
	$dbh = NULL;
	
	
}catch(Exception $e){
	echo 'Lỗi kết nối '.$e->getMessage();
	exit;	
}