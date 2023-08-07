<?php
try{
	include '../ini.php';
	include '../classes/xl_hoa_don.php';
	$dt_xl_hoa_don = new xl_hoa_don();
	include '../classes/xl_trang_thai_van_chuyen.php';
	$dt_xl_trang_thai_van_chuyen = new xl_trang_thai_van_chuyen();	
	include '../classes/xl_thong_tin_chuyen_thu.php';
	$dt_xl_thong_tin_chuyen_thu = new xl_thong_tin_chuyen_thu();
	include '../classes/xl_ben_van_chuyen.php';
	$dt_xl_ben_van_chuyen = new xl_ben_van_chuyen();
	
		
	#Đọc mã:	
	$so_hieu = $_GET['so_hieu'];	
	$hoa_don = $dt_xl_hoa_don->doc($so_hieu);
	if($so_hieu != $hoa_don['so_hieu']){
		throw new Exception('Chúng tôi không tìm được chi tiết lô hàng theo yêu cầu của bạn. Hãy kiểm tra lại thông tin của bạn và thử lại.');
	}
	$dt_smarty->assign('hoa_don', $hoa_don);
	#KT ton tai:
	if(empty($_GET['so_hieu'])){
		throw new Exception('Bạn chưa chọn Số Ký Gửi, hoặc Số Ký gửi không hợp lệ');
	}	
	$trang_thai_vc = $dt_xl_trang_thai_van_chuyen->doc($so_hieu);
	//print_r($trang_thai_vc); exit;
	#nd trang thai
	$nd_trang_thai = '';
	if($trang_thai_vc['da_giao_nhan'] != NULL || $trang_thai_vc['ky_ten'] != NULL){
		$nd_trang_thai = "<strong>Đã giao nhật ngày: </strong> ". $trang_thai_vc['da_giao_nhan']. 
						"<br><strong>Ký tên bởi: </strong>". $trang_thai_vc['ky_ten'];
	}else{
		$nd_trang_thai = "<strong>Địa điểm cuối cùng: </strong> ". $trang_thai_vc['dia_diem_cuoi_cung']. 
						"<br><strong>Phát hành theo lịch: </strong>". $trang_thai_vc['phat_hanh_theo_lich'];
	}
	$dt_smarty->assign('nd_trang_thai', $nd_trang_thai);
	$dt_smarty->assign('trang_thai_vc', $trang_thai_vc);
	#thong tin bo sung
	$nd_thong_tin = '';
	if($hoa_don['ngay_thanh_toan'] != NULL){
		$nd_thong_tin = "<strong>Đã chuyển hoặc thanh toán ngày:</strong> ". $hoa_don['ngay_thanh_toan'].
					"<br><strong>Loại:</strong> ". $hoa_don['loai'].
					"<br><strong>Trọng lượng:</strong> ". $hoa_don['khoi_luong']. " gram";
	}else{
		$nd_thong_tin = "<strong>Đã chuyển hoặc thanh toán ngày:</strong> Chưa thanh toán
					<br><strong>Loại:</strong> ". $hoa_don['loai'].
					"<br><strong>Trọng lượng:</strong> ". $hoa_don['khoi_luong']. " gram";
	}
	$dt_smarty->assign('nd_thong_tin', $nd_thong_tin);
	#tien do van chuyen
	$nd_tien_do = $dt_xl_thong_tin_chuyen_thu->danh_sach_theo_so_hieu($so_hieu);
	$dt_smarty->assign('nd_tien_do', $nd_tien_do);
	#thong tin van chuyen
	$ben_van_chuyen = $dt_xl_ben_van_chuyen->doc($hoa_don['ma_ben_van_chuyen']);
	$dt_smarty->assign('ben_van_chuyen', $ben_van_chuyen['ten']);
	
	
	$contentForLayout = $dt_smarty->fetch('data/detail.tpl');
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
	//echo $_SESSION['msg']; exit;
	header('Location: index.php');	
}