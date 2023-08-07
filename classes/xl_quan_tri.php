<?php
class xl_quan_tri{
	function them($data){
		global $dbh;
		$sql = "INSERT INTO quan_tri values(NULL, 
											:ho_ten,
											:ten_dang_nhap,
											:mat_khau,
											:email,
											:ngay_tao,
											:lan_dang_nhap_cuoi,
											:trang_thai)";
		$sth = $dbh->prepare($sql);		
		//print_r($data);exit;		
		$result = $sth->execute($data);
		//print_r($sth->errorInfo());exit;
		return $result;
	}
	
	
	function xoa($ma){
		global $dbh;
		$sql = "DELETE FROM quan_tri WHERE ma = '$ma'";
		$sth = $dbh->prepare($sql);
		$result = $sth->execute();
		return $result;		
	}
	
	
	function danh_sach($start, $tu_khoa) {
		global $dbh;
		
		if ($tu_khoa == '') {
			$sql="SELECT * FROM quan_tri WHERE ma != 2 LIMIT $start, 10";
			$mang = NULL;
		} else {
			$sql="SELECT * FROM quan_tri WHERE ma != 2 AND ho_ten LIKE :tu_khoa LIMIT $start, 10";
			$mang = array('tu_khoa' => '%'.$tu_khoa.'%');
		}
				
		$sth = $dbh->prepare($sql);				
		$sth->execute($mang);
		//print_r($sth); exit;
		return $sth;
	}
		
	
	function so_luong($tu_khoa){
		global $dbh;
		if($tu_khoa == ''){
			$sql = "Select count(*) from quan_tri";
			$mang = NULL;
		} else {
			$sql = "Select count(*) from quan_tri Where tieu_de LIKE :tu_khoa";
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
		$sql = "SELECT * FROM quan_tri WHERE ma = :ma";
		$sth = $dbh->prepare($sql);
		$sth->execute(array('ma' => $ma));
		return $sth->fetch();
	}
	
	
	function doc_theo_ten($ten_dang_nhap){
		global $dbh;
		$sql = "SELECT * FROM quan_tri WHERE ten_dang_nhap = :ten_dang_nhap";
		$sth = $dbh->prepare($sql);
		$sth->execute(array('ten_dang_nhap' => $ten_dang_nhap));
		return $sth->fetch();
	}
	
	
	function doc_theo_email($email){
		global $dbh;
		$sql = "SELECT * FROM quan_tri WHERE email = :email";
		$sth = $dbh->prepare($sql);
		$sth->execute(array('email' => $email));
		return $sth->fetch();
	}
	
	
	function doc_theo_pass($mat_khau){
		global $dbh;
		$sql = "SELECT * FROM quan_tri WHERE mat_khau = :mat_khau";
		$sth = $dbh->prepare($sql);
		$sth->execute(array('mat_khau' => $mat_khau));
		return $sth->fetch();
	}
	
	
	function kiem_tra($ten_dang_nhap, $mat_khau){
		global $dbh;
		//$password = md5($ten_dang_nhap.$mat_khau);
		$sql = "SELECT * FROM quan_tri WHERE ten_dang_nhap = :ten_dang_nhap AND mat_khau = :mat_khau and trang_thai = 1";
		//echo $sql, $ten_dang_nhap, $mat_khau; exit;
		$sth = $dbh->prepare($sql);
		$sth->execute(array('ten_dang_nhap' => $ten_dang_nhap, 'mat_khau' => $mat_khau));		
		return $row = $sth->fetch(PDO::FETCH_ASSOC);
	}
	
	
	function cap_nhat($data){
		global $dbh;
		if($data['mat_khau'] != ''){
			$data['mat_khau'] = md5($data['ten_dang_nhap'].$data['mat_khau']);
			$sql = "UPDATE quan_tri SET ma = :ma, 
								ho_ten = :ho_ten,
								ten_dang_nhap = :ten_dang_nhap,
								mat_khau = :mat_khau,
								email = :email,
								trang_thai = :trang_thai
							WHERE ma = :ma";
		} else{
			$sql = "UPDATE quan_tri SET ma = :ma, 
								ho_ten = :ho_ten,
								ten_dang_nhap = :ten_dang_nhap,
								email = :email,
								trang_thai = :trang_thai
							WHERE ma = :ma";
		}
		//echo $sql;
		//print_r($data);exit;			
		$sth = $dbh->prepare($sql);		
		$result = $sth->execute($data);		
		//print_r($sth->errorInfo());exit;
		return $result;
	}
	
	
	function thay_doi_mat_khau($ma, $ten_dang_nhap, $mat_khau){
		global $dbh;
		$mat_khau = md5($ten_dang_nhap.$mat_khau);
		$sql = "UPDATE quan_tri SET ma = :ma, 
							mat_khau = :mat_khau
						WHERE ma = :ma";
		//print_r($data);exit;			
		$sth = $dbh->prepare($sql);		
		$result = $sth->execute(array('ma' => $ma, 'mat_khau' => $mat_khau));		
		//print_r($sth->errorInfo());exit;
		return $result;
	}
	
	
	function cap_nhat_lan_dang_nhap_cuoi($ma, $time){
		global $dbh;
		$sql = "UPDATE quan_tri SET lan_dang_nhap_cuoi = :time WHERE ma = :ma";
		//echo $sql; 
		//echo $ma. '  '. $time; exit;
		//print_r($data); exit;			
		$sth = $dbh->prepare($sql);	
		$sth->execute(array('ma' => $ma, 'time' => $time));	
		$result = $sth->execute($data);		
		//print_r($sth->errorInfo());exit;
		return $result;
	}
	
	
	function trang_thai($ma){
		global $dbh;
		$sql = "UPDATE quan_tri SET trang_thai = 1 - trang_thai WHERE ma = :ma";		
		$sth = $dbh->prepare($sql);	
		$sth->execute(array('ma' => $ma));			
		//print_r($sth->errorInfo());exit;
		return $sth;
	}
	
	
}