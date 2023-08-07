<?php
class xl_ben_van_chuyen{
	function them($data){
		global $dbh;
		$sql = "INSERT INTO ben_van_chuyen values(NULL,
												:ten,
												:thong_tin,
												:ngay_tao,
												:ngay_xuat_ban,
												NULL,
												:ma_nguoi_tao,
												NULL)";
		$sth = $dbh->prepare($sql);		
		//print_r($data);exit;		
		$result = $sth->execute(array('ten' => $data['ten'],
									'thong_tin' => $data['thong_tin'],
									'ngay_tao' => $data['ngay_tao'],
									'ngay_xuat_ban' => $data['ngay_xuat_ban'],
									'ma_nguoi_tao' => $data['ma_nguoi_tao']
									));
		//print_r($sth->errorInfo());exit;
		return $result;
	}
	
	
	function xoa($ma){
		global $dbh;
		$sql = "DELETE FROM ben_van_chuyen WHERE ma = '$ma'";
		$sth = $dbh->prepare($sql);
		$result = $sth->execute();
		return $result;		
	}
	
	
	function danh_sach($start, $so_luong, $tu_khoa){
		global $dbh;		
		if ($tu_khoa == '') {
			$sql = "Select * from ben_van_chuyen Limit $start, $so_luong";
			$mang = NULL;
		} else {
			$sql = "Select * from ben_van_chuyen WHERE ten LIKE :tu_khoa  Limit $start, $so_luong";
			$mang = array('tu_khoa' => '%'.$tu_khoa.'%');
		}				
		$sth = $dbh->prepare($sql);				
		$sth->execute($mang);
		return $sth;
	}
		
	
	function so_luong($tu_khoa){
		global $dbh;
		if($tu_khoa == ''){
			$sql = "Select count(*) from ben_van_chuyen";
			$mang = NULL;
		} else {
			$sql = "Select count(*) from ben_van_chuyen Where ten LIKE :tu_khoa";
			$mang = array('tu_khoa' => '%'.$tu_khoa.'%');
		}
		$sth = $dbh->prepare($sql);				
		$sth->execute($mang);
		$row = $sth->fetch();
		//print_r($row);exit;
		return $row['count(*)'];		
	}
	
	
	function doc($ma){
		global $dbh;
		$sql = "SELECT * FROM ben_van_chuyen WHERE ma = :ma";
		$sth = $dbh->prepare($sql);
		$sth->execute(array('ma' => $ma));
		return $sth->fetch();
	}
	
	
	function cap_nhat($data){
		global $dbh;
		$sql = "UPDATE ben_van_chuyen SET ma = :ma, 
										ten = :ten,
										thong_tin = :thong_tin,
										ngay_xuat_ban = :ngay_xuat_ban,
										ngay_chinh_sua = :ngay_chinh_sua,
										ma_nguoi_doi = :ma_nguoi_doi
									WHERE ma = :ma";
		//echo $sql;
		//print_r($data);exit;			
		$sth = $dbh->prepare($sql);		
		$result = $sth->execute($data);
		//print_r($sth->errorInfo());exit;
		return $result;
	}
	
	
	function danh_sach_khong_phan_trang(){
		global $dbh;
		$sql="SELECT * from ben_van_chuyen";
		$sth = $dbh->query($sql);
		return $sth->fetchAll();
	}
}











