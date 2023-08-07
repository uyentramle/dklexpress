<?php
class xl_trang_thai_van_chuyen{
	function them($data){
		global $dbh;
		$sql = "INSERT INTO trang_thai_van_chuyen values(NULL,
														:so_hieu,
														:trang_thai,
														:phat_hanh_theo_lich,
														:dia_diem_cuoi_cung,
														:da_giao_nhan,
														:ky_ten,
														:ma_nguoi_dung)";
		$sth = $dbh->prepare($sql);		
		//print_r($data);exit;		
		$result = $sth->execute(array('so_hieu' => $data['so_hieu'],
									'trang_thai' => $data['trang_thai'],
									'phat_hanh_theo_lich' => $data['phat_hanh_theo_lich'],
									'dia_diem_cuoi_cung' => $data['dia_diem_cuoi_cung'],
									'da_giao_nhan' => $data['da_giao_nhan'],
									'ky_ten' => $data['ky_ten'],
									'ma_nguoi_dung' => $data['ma_nguoi_dung']));
		//print_r($sth->errorInfo());exit;
		return $result;
	}
	
	
	function xoa_theo_so_hieu($so_hieu){
		global $dbh;
		$sql = "DELETE FROM trang_thai_van_chuyen WHERE so_hieu = '$so_hieu'";
		$sth = $dbh->prepare($sql);
		$result = $sth->execute();
		return $result;		
	}
		
	
	function xoa_theo_ma($ma){
		global $dbh;
		$sql = "DELETE FROM trang_thai_van_chuyen WHERE ma = '$ma'";
		$sth = $dbh->prepare($sql);
		$result = $sth->execute();
		return $result;		
	}
	
	
	function doc_theo_so_hieu($so_hieu){
		global $dbh;
		$sql = "SELECT * FROM trang_thai_van_chuyen WHERE so_hieu = :so_hieu";
		$sth = $dbh->prepare($sql);
		$sth->execute(array('so_hieu' => $so_hieu));
		return $sth->fetch();
	}
	
	
	function doc($ma){
		global $dbh;
		$sql = "SELECT * FROM trang_thai_van_chuyen WHERE ma = :ma";
		$sth = $dbh->prepare($sql);
		$sth->execute(array('ma' => $ma));
		return $sth->fetch();
	}
	
	
	function cap_nhat($data){
		global $dbh;
		$sql = "UPDATE trang_thai_van_chuyen SET ma = :ma,
							so_hieu = :so_hieu,
							trang_thai = :trang_thai,
							phat_hanh_theo_lich = :phat_hanh_theo_lich,
							dia_diem_cuoi_cung = :dia_diem_cuoi_cung,
							da_giao_nhan = :da_giao_nhan,
							ky_ten = :ky_ten,
							ma_nguoi_dung = :ma_nguoi_dung
						WHERE ma = :ma";
		//echo $sql;
		#print_r($data);exit;			
		$sth = $dbh->prepare($sql);		
		$result = $sth->execute(array('ma' => $data['ma'],
									'so_hieu' => $data['so_hieu'],
									'trang_thai' => $data['trang_thai'],
									'phat_hanh_theo_lich' => $data['phat_hanh_theo_lich'],
									'dia_diem_cuoi_cung' => $data['dia_diem_cuoi_cung'],
									'da_giao_nhan' => $data['da_giao_nhan'],
									'ky_ten' => $data['ky_ten'],
									'ma_nguoi_dung' => $data['ma_nguoi_dung']));
		#print_r($sth->errorInfo());exit;
		return $result;
	}
	
	
	function danh_sach_khong_phan_trang(){
		global $dbh;
		$sql="SELECT * from trang_thai_van_chuyen";
		$sth = $dbh->prepare($sql);				
		$sth->execute();
		return $sth;
	}
}