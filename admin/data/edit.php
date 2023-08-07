<?php
try{
	include '../ini.php';	
	include '../../classes/xl_ben_van_chuyen.php';
	$dt_xl_ben_van_chuyen = new xl_ben_van_chuyen();
	include '../../classes/xl_hoa_don.php';
	$dt_xl_hoa_don = new xl_hoa_don();
	include '../../classes/xl_trang_thai_van_chuyen.php';
	$dt_xl_trang_thai_van_chuyen = new xl_trang_thai_van_chuyen();
	
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
	$so_hieu = $_GET['so_hieu'];	
	$hoa_don = $dt_xl_hoa_don->doc($so_hieu);
	
	//echo '<pre>'; print_r($hoa_don); echo '</pre>'; exit;
	//echo $hoa_don['so_hieu']; exit;
	if($so_hieu != $hoa_don['so_hieu'] || $ma != $hoa_don['ma']){
		throw new Exception('Không có Số Ký Gửi này trong hệ thống');
	}
	
	//echo $ma, $so_hieu; exit;
	#KT ton tai:
	if(empty($_GET['ma']) || empty($_GET['so_hieu']) || !is_numeric($_GET['ma'])){
		throw new Exception('Bạn chưa chọn Số Ký Gửi, hoặc Số Ký gửi không hợp lệ');
	}	
	
	$ds_ben_van_chuyen = $dt_xl_ben_van_chuyen->danh_sach_khong_phan_trang();
	/*echo '<pre>';
	print_r($ds_ben_van_chuyen);
	echo '</pre>';	exit;*/
	
	$ben_van_chuyen = '<select class="input-short" name="data[ma_ben_van_chuyen]">';
	foreach($ds_ben_van_chuyen as $key => $bvc){
		if($key == $hoa_don['ma_ben_van_chuyen']){
			$ben_van_chuyen .= "<option value='".$bvc['ma']."' checked='checked'>".$bvc['ten']."</option>";
		}
		else{
			$ben_van_chuyen .= "<option value='".$bvc['ma']."'>".$bvc['ten']."</option>";
		}
		continue;
	}
	$ben_van_chuyen .= '</select>';
	
	
	
	$dt_smarty->assign('ben_van_chuyen', $ben_van_chuyen);
	$dt_smarty->assign('hoa_don', $hoa_don);
	$contentForLayout = $dt_smarty->fetch('data/edit.tpl');
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