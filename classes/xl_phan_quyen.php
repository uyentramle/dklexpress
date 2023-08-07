<?php
class xl_phan_quyen{
	function them($ma_quan_tri , $tap_tin){
		global $dbh;
		$sql = "INSERT INTO phan_quyen values(NULL, 
											:ma_quan_tri,
											:tap_tin)";
		$sth = $dbh->prepare($sql);		
		//print_r($data);exit;		
		$result = $sth->execute(array('ma_quan_tri' => $ma_quan_tri,'tap_tin' => $tap_tin));
		//print_r($sth->errorInfo());exit;
		return $result;
	}
	
	
	function xoa($ma_quan_tri){
		global $dbh;
		$sql = "DELETE FROM phan_quyen WHERE ma_quan_tri = '$ma_quan_tri'";
		$sth = $dbh->prepare($sql);
		$result = $sth->execute();
		return $result;		
	}
		
	
	function cap_nhat($data){
		global $dbh;
		$sql = "UPDATE phan_quyen SET ma = :ma, 							
							ma_quan_tri = :ma_quan_tri,
							tap_tin = :tap_tin
						WHERE ma = :ma";
		//echo $sql;
		//print_r($data);exit;			
		$sth = $dbh->prepare($sql);		
		$result = $sth->execute($data);		
		//print_r($sth->errorInfo());exit;
		return $result;
	}
	
	
	function doc($ma_quan_tri, $tap_tin){
		global $dbh;
		#echo $ma_quan_tri, $tap_tin; exit;
		$sql = "SELECT * FROM phan_quyen WHERE ma_quan_tri = :ma_quan_tri AND tap_tin = :tap_tin";
		$sth = $dbh->prepare($sql);
		$result = $sth->execute(array('ma_quan_tri' => $ma_quan_tri, 'tap_tin' => $tap_tin));
		return $sth->fetchAll();		
	}
	
	
	function danh_sach($ma_quan_tri){
		global $dbh;
		$sql = "SELECT * FROM phan_quyen WHERE ma_quan_tri = $ma_quan_tri";
		$sth = $dbh->prepare($sql);
		$result = $sth->execute(array('ma_quan_tri' => $ma_quan_tri));
		return $sth->fetchAll();		
	}
}











