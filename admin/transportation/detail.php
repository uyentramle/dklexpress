<?php
try{
	/*echo '<pre>';
	print_r($_GET);
	echo '</pre>'; exit;*/
	
	include '../ini.php';
	include '../../classes/xl_ben_van_chuyen.php';
	$dt_xl_ben_van_chuyen = new xl_ben_van_chuyen();
	include '../../classes/xl_quan_tri.php';
	$dt_xl_quan_tri = new xl_quan_tri();
	############## Chuẩn bị câu thông báo ##############
	if(isset($_SESSION['msg'])){
		$message = $dt_smarty->fetch('elements/message.tpl');
	#Xóa session
		unset($_SESSION['msg']);
		unset($_SESSION['type_msg']);
	}else{
		$message = '';
	}	
	#Đọc mã:
	$ma = $_GET['ma'];	
	$ten = base64_decode($_GET['name']);
	$hang_van_chuyen = $dt_xl_ben_van_chuyen->doc($ma);	
	if($ten != $hang_van_chuyen['ten'] || $ma != $hang_van_chuyen['ma']){
		throw new Exception('Không có Hãng Vận Chuyển này trong hệ thống');
	}
	$dt_smarty->assign('hang_van_chuyen', $hang_van_chuyen);
	#KT ton tai:
	if(empty($_GET['ma']) || empty($_GET['name']) || !is_numeric($_GET['ma'])){
		throw new Exception('Bạn chưa chọn Hãng Vận Chuyển, hoặc Mã Hãng Vận Chuyển không hợp lệ');
	}	
	$nguoi_tao = $dt_xl_quan_tri->doc($hang_van_chuyen['ma_nguoi_tao']);
	//print_r($nguoi_tao); exit;
	$nd_chinh_sua = '';
	if($hang_van_chuyen['ma_nguoi_doi'] != NULL){
		$nguoi_doi = $dt_xl_quan_tri->doc($hang_van_chuyen['ma_nguoi_doi']);
		$nguoi_chinh_sua = $nguoi_doi['ho_ten'];
		$ngay_chinh_sua = $hang_van_chuyen['ngay_chinh_sua'];
		$nd_chinh_sua .= "<p><strong>Nội dung được chỉnh sửa bởi: </strong> $nguoi_chinh_sua </p>
							<p><strong>Nội dung được chỉnh sửa vào ngày: </strong> $ngay_chinh_sua </p>";
	}	
	
	$dt_smarty->assign('nd_chinh_sua', $nd_chinh_sua);
	$dt_smarty->assign('nguoi_tao', $nguoi_tao);		
	$contentForLayout = $dt_smarty->fetch('transportation/detail.tpl');
	$dt_smarty->assign('message', $message);
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
	$_SESSION['type_msg'] = "error";
	header('Location: list.php');	
}