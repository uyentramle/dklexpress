<?php
	include '../ini.php';
	include '../../classes/xl_bo_dem.php';
	$dt_xl_bo_dem = new xl_bo_dem();
	include '../../classes/xl_hoa_don.php';
	$dt_xl_hoa_don = new xl_hoa_don();
	$chuoi_ngay = '';
	$chuoi_ltc = '';
	$chuoi_ddh = '';
	
	for($i=6; $i>=0; $i--){
		$chuoi_ngay .= "'";
		$chuoi_ngay .= date('d-m', strtotime("-$i days"));
		$chuoi_ngay .= "',";
				
		$ngay = date('Y-m-d', strtotime("-$i days"));			
		$luot = $dt_xl_bo_dem->so_luong_theo_ngay($ngay);		
		$chuoi_ltc .= $luot.',';
		
		$hoa_don = $dt_xl_hoa_don->so_luong_theo_ngay($ngay);
		$chuoi_ddh .= $hoa_don. ',';
		
	}
	$thoi_gian = 'Từ ngày ' .date('d-m ', strtotime("-6 days")). 'đến ngày ' . date('d-m');
	$dt_smarty->assign('thoi_gian', $thoi_gian);
	
	$chuoi_ngay = trim($chuoi_ngay, ',');	
	$dt_smarty->assign('chuoi_ngay', $chuoi_ngay);
	$chuoi_ltc = trim($chuoi_ltc, ',');
	$dt_smarty->assign('chuoi_ltc', $chuoi_ltc);
	$chuoi_ddh = trim($chuoi_ddh, ',');
	$dt_smarty->assign('chuoi_ddh', $chuoi_ddh);
	
	$contentForLayout = $dt_smarty->fetch('stats/index.tpl');
	$dt_smarty->assign('titleForLayout', 'Biểu Đồ Thống Kê - DKL Express');
	$dt_smarty->assign('contentForLayout', $contentForLayout);
	$dt_smarty->display('layouts/default.tpl');

