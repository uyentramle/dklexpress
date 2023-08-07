<?php
class xl_hoa_don{
	function danh_sach($start, $so_luong, $so_hieu){
		global $dbh;		
		if ($so_hieu == '') {
			$sql="SELECT * FROM hoa_don LIMIT $start, $so_luong";
			$mang = NULL;
		} else {
			$sql="SELECT * FROM hoa_don WHERE so_hieu LIKE :so_hieu LIMIT $start, $so_luong";
			$mang = array('so_hieu' => '%'.$so_hieu.'%');
		}
				
		$sth = $dbh->prepare($sql);				
		$sth->execute($mang);
		//print_r($sth); exit;
		return $sth;
	}
	
	
	function so_luong($so_hieu){
		global $dbh;
		if($so_hieu == ''){
			$sql = "Select count(*) from hoa_don";
			$mang = NULL;
		} else {
			$sql = "Select count(*) from hoa_don Where so_hieu LIKE :so_hieu";
			$mang = array('so_hieu' => '%'.$so_hieu.'%');
		}
		$sth = $dbh->prepare($sql);				
		$sth->execute($mang);
		$row = $sth->fetch();
		//print_r($row);exit;
		return $row['count(*)'];		
	}
	
	
	function them($data){
		global $dbh;
		$sql = "INSERT INTO hoa_don values(NULL, 
											:so_hieu,
											:ma_ben_van_chuyen,
											:dia_diem_goi,
											:dia_diem_phat,
											:nguoi_gui, 
											:dia_chi_nguoi_gui, 
											:nguoi_nhan, 
											:dia_chi_nguoi_nhan, 
											:ghi_chu, 
											:khoi_luong, 
											:loai, 
											:thanh_toan, 
											:ngay_thanh_toan,
											:ma_nguoi_dung,
											NULL,
											:ngay_tao)";
		$sth = $dbh->prepare($sql);		
		//print_r($data);exit;		
		$result = $sth->execute(array('so_hieu' => $data['so_hieu'],
						'ma_ben_van_chuyen' => $data['ma_ben_van_chuyen'],
						'dia_diem_goi' => $data['dia_diem_goi'], 
						'dia_diem_phat' => $data['dia_diem_phat'], 
						'nguoi_gui' => $data['nguoi_gui'], 
						'dia_chi_nguoi_gui' => $data['dia_chi_nguoi_gui'], 
						'nguoi_nhan' => $data['nguoi_nhan'],
						'dia_chi_nguoi_nhan' => $data['dia_chi_nguoi_nhan'],
						'ghi_chu' => $data['ghi_chu'],
						'khoi_luong' => $data['khoi_luong'],
						'loai' => $data['loai'],
						'thanh_toan' => $data['thanh_toan'],
						'ngay_thanh_toan' => $data['ngay_thanh_toan'],
						'ma_nguoi_dung' => $data['ma_nguoi_dung'],
						'ngay_tao' => $data['ngay_tao']
						));
		//print_r($sth->errorInfo());exit;
		return $result;
	}
	
	
	function cap_nhat($data){
		global $dbh;
		$sql = "UPDATE hoa_don SET ma = :ma,
									ma_ben_van_chuyen = :ma_ben_van_chuyen,
									dia_diem_goi = :dia_diem_goi,
									dia_diem_phat = :dia_diem_phat, 
									nguoi_gui = :nguoi_gui,
									dia_chi_nguoi_gui = :dia_chi_nguoi_gui, 
									nguoi_nhan = :nguoi_nhan, 
									dia_chi_nguoi_nhan = :dia_chi_nguoi_nhan, 
									ghi_chu = :ghi_chu, 
									khoi_luong = :khoi_luong, 
									loai = :loai, 
									thanh_toan = :thanh_toan, 
									ngay_thanh_toan = :ngay_thanh_toan, 
									ma_nguoi_doi = :ma_nguoi_doi
								WHERE ma = :ma";
		$sth = $dbh->prepare($sql);	
		#print_r($data);exit;		
		$result = $sth->execute(array('ma' => $data['ma'],
						'so_hieu' => $data['so_hieu'],
						'ma_ben_van_chuyen' => $data['ma_ben_van_chuyen'],
						'dia_diem_goi' => $data['dia_diem_goi'], 
						'dia_diem_phat' => $data['dia_diem_phat'], 
						'nguoi_gui' => $data['nguoi_gui'], 
						'dia_chi_nguoi_gui' => $data['dia_chi_nguoi_gui'], 
						'nguoi_nhan' => $data['nguoi_nhan'],
						'dia_chi_nguoi_nhan' => $data['dia_chi_nguoi_nhan'],
						'ghi_chu' => $data['ghi_chu'],
						'khoi_luong' => $data['khoi_luong'],
						'loai' => $data['loai'],
						'thanh_toan' => $data['thanh_toan'],
						'ngay_thanh_toan' => $data['ngay_thanh_toan'],
						'ma_nguoi_doi' => $data['ma_nguoi_doi']
						));
		#print_r($sth->errorInfo());exit;
		return $result;
	}
	
	
	function xoa($so_hieu){
		global $dbh;
		$sql = "DELETE FROM hoa_don WHERE so_hieu = '$so_hieu'";
		$sth = $dbh->prepare($sql);
		$result = $sth->execute();
		return $result;		
	}
	
	
	function doc($so_hieu){
		global $dbh;
		$sql = "SELECT * FROM hoa_don WHERE so_hieu = :so_hieu";
		$sth = $dbh->prepare($sql);
		$sth->execute(array('so_hieu' => $so_hieu));
		return $sth->fetch();
	}
	
	
	function so_luong_theo_ngay($ngay_tao){ // 2013-03-20
		global $dbh;
		$sql = "SELECT COUNT(*) FROM hoa_don WHERE  date(ngay_tao) = :ngay_tao ";
		$sth = $dbh->prepare($sql);	
		$result = $sth->execute(array('ngay_tao' => $ngay_tao));
		$row = $sth->fetch(PDO::FETCH_NUM);
		return $row[0];
	}
}