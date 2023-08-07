<?php
class xl_thong_tin_chuyen_thu{
	function them($data){
		global $dbh;
		$sql = "INSERT INTO thong_tin_chuyen_thu values(NULL,
														:so_hieu,
														:dia_diem,
														:ngay,
														:thoi_gian_dia_phuong,
														:hoat_dong,
														:ma_nguoi_dung)";
		$sth = $dbh->prepare($sql);		
		//print_r($data);exit;		
		$result = $sth->execute(array('so_hieu' => $data['so_hieu'],
									'dia_diem' => $data['dia_diem'],
									'ngay' => $data['ngay'],
									'thoi_gian_dia_phuong' => $data['thoi_gian_dia_phuong'],
									'hoat_dong' => $data['hoat_dong'],
									'ma_nguoi_dung' => $data['ma_nguoi_dung']));
		//print_r($sth->errorInfo());exit;
		return $result;
	}
	
	
	function xoa_theo_ma($ma){
		global $dbh;
		$sql = "DELETE FROM thong_tin_chuyen_thu WHERE ma = '$ma'";
		$sth = $dbh->prepare($sql);
		$result = $sth->execute();
		return $result;		
	}
	
	
	function xoa_theo_so_hieu($ma){
		global $dbh;
		$sql = "DELETE FROM thong_tin_chuyen_thu WHERE so_hieu = '$so_hieu'";
		$sth = $dbh->prepare($sql);
		$result = $sth->execute();
		return $result;		
	}
	
	
	function doc($ma){
		global $dbh;
		$sql = "SELECT * FROM thong_tin_chuyen_thu WHERE ma = :ma";
		$sth = $dbh->prepare($sql);
		$sth->execute(array('ma' => $ma));
		return $sth->fetch();
	}
	
	
	function cap_nhat($data){
		global $dbh;
		$sql = "UPDATE thong_tin_chuyen_thu SET ma = :ma, 
							so_hieu = :so_hieu,
							dia_diem = :dia_diem,
							ngay = :ngay,
							thoi_gian_dia_phuong = :thoi_gian_dia_phuong,
							hoat_dong = :hoat_dong,
							ma_nguoi_dung = :ma_nguoi_dung
						WHERE ma = :ma";
		//echo $sql;
		//print_r($data);exit;			
		$sth = $dbh->prepare($sql);		
		$result = $sth->execute(array('ma' => $data['ma'],
									'so_hieu' => $data['so_hieu'],
									'dia_diem' => $data['dia_diem'],
									'ngay' => $data['ngay'],
									'thoi_gian_dia_phuong' => $data['thoi_gian_dia_phuong'],
									'hoat_dong' => $data['hoat_dong'],
									'ma_nguoi_dung' => $data['ma_nguoi_dung']));
		//print_r($sth->errorInfo());exit;
		return $result;
	}
	
	
	function danh_sach_theo_so_hieu($so_hieu){
		global $dbh;
		$sql="SELECT * from thong_tin_chuyen_thu WHERE so_hieu = '$so_hieu' ORDER BY ma DESC";
		$sth = $dbh->query($sql);
		return $sth->fetchAll();
	}
}

