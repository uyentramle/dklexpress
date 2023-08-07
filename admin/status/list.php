<?php
try {
	include '../ini.php';
	include '../../classes/xl_hoa_don.php';
	$dt_xl_hoa_don = new xl_hoa_don();
	include '../../classes/xl_trang_thai_van_chuyen.php';
	$dt_xl_trang_thai_van_chuyen = new xl_trang_thai_van_chuyen();
		
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
	
	########################################
	$trang_thai_kien_hang = $dt_xl_trang_thai_van_chuyen->doc($so_hieu);
	
	if($trang_thai_kien_hang = ''){
		$nd_trang_thai = "Trạng thái hiện đang rỗng! <a href='edit.php?ma=$ma&so_hieu=$so_hieu'><img src='../templates/images/pencil.gif' width='16' height='16' />Cập nhật</a>";
	}
	$trang_thai_vc = $dt_xl_trang_thai_van_chuyen->doc($so_hieu);
	#nd trang thai
	$nd_trang_thai = '';
	if($trang_thai_vc['da_giao_nhan'] != NULL || $trang_thai_vc['ky_ten'] != NULL){
		$nd_trang_thai = "<strong>Đã giao nhật ngày: </strong> <span style='font-size:14px; color:#0000ff;'>". $trang_thai_vc['da_giao_nhan']. 
						"</span><br><strong>Ký tên bởi: </strong><span style='font-size:14px; color:#0000ff;'>". $trang_thai_vc['ky_ten'].'</span>';
	}else{
		$nd_trang_thai = "<strong>Địa điểm cuối cùng: </strong> <span style='font-size:14px; color:#ff0000;'>". $trang_thai_vc['dia_diem_cuoi_cung']. 
						"</span><br><strong>Phát hành theo lịch: </strong><span style='font-size:14px; color:#ff0000;'>". $trang_thai_vc['phat_hanh_theo_lich'].'</span>';
	}	
	$dt_smarty->assign('nd_trang_thai', $nd_trang_thai);
	$dt_smarty->assign('trang_thai_vc', $trang_thai_vc);
	
	##############Gởi thông tin qua cho smarty#####################
	$dt_smarty->assign('hoa_don', $hoa_don);
	$dt_smarty->assign('trang_thai_kien_hang', $trang_thai_kien_hang);
	$dt_smarty->assign('message', $message);
	
	##############Chuyển cho smarty biên dịch và đọc giao diện#####
	$contentForLayout = $dt_smarty->fetch('status/list.tpl');
	$dt_smarty->assign('titleForLayout', 'Trạng Thái Vận Chuyển Kiện Hàng');
	$dt_smarty->assign('contentForLayout', $contentForLayout);
	$dt_smarty->display('layouts/default.tpl');	
		
	
	#Đóng kết nối
	$dbh = NULL;
	
	
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