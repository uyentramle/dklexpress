<?php
class xl_bo_dem{
	function them($data){
		global $dbh;
		$sql = "INSERT INTO bo_dem values(NULL, :dia_chi_ip, :trinh_duyet, :thoi_gian)";
		$sth = $dbh->prepare($sql);		
		//print_r($data);exit;
		//print_r($sth->errorInfo());exit;
		return $sth->execute($data);
	}
	
	
	function so_luong_theo_ngay($ngay){ // 2013-03-20
		global $dbh;
		$sql = "SELECT COUNT(*) FROM bo_dem WHERE  date(thoi_gian) = :ngay ";
		$sth = $dbh->prepare($sql);	
		$result = $sth->execute(array('ngay' => $ngay));
		$row = $sth->fetch(PDO::FETCH_NUM);
		return $row[0];
	}

}











