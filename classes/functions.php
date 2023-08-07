<?php
class phan_trang {
	function tim_trang_hien_tai(){
		if(isset($_GET['page'])) {
			$page = $_GET['page'];
		} else{
			$page = 1;
		} return($page);
	}
	
	function tinh_vi_tri_phan_trang($page, $so_luong){
		$start  =  ($page - 1) * $so_luong;
		return($start);	
	}
	
	function tong_so_trang($tong_so, $so_luong){
		$n = ceil($tong_so/$so_luong);
		//echo $n; exit;
		return $n;
	}
	
	function in_bo_nut($page, $n){
		//Tinh url  
		$url = $_SERVER['REQUEST_URI'];
		$url = str_replace("?page=$page", '', $url);
		$url = str_replace("&page=$page", '', $url);
		
		$str  =  '';
		
		if(strpos($url, '?') === false){
		  $url = $url. '?';
		} else{
		  $url .=  '&';
		}  
			
		//Hien thi day so
		if($page>1){
		  $back = $page-1;
		  $str .= "<a href='{$url}page=1' class='button'><span><img src='../templates/images/arrow-stop-180-small.gif' height='9' width='12' alt='First' /> Trang Đầu </span></a> ";
		  $str .= "<a href='{$url}page=$back' class='button'><span><img src='../templates/images/arrow-180-small.gif' height='9' width='12' alt='Previous' /> Trang Trước </span></a>";
		}else{
		  $str .= '';
		}
			
		$vtdau = max($page - 2, 1);
		$vtcuoi = min($page + 2, $n);
		
		$str .= "<div class='numbers'>";
		
		if($vtdau > 1){
			$str .=  '<span>...</span>';
		}
		
		for($i = $vtdau; $i <= $vtcuoi; $i++){
		  if($i == $page){
			  if($i != 1){
				  $str .= '<span>|</span>';
			  }
			  $str .=  "<a href='{$url}page=$i' class='current'> $i </a>";
			  if($i != $n){
				  $str .= '<span>|</span>';
			  }
		  }else
			$str .=  "<a href='{$url}page=$i'> $i </a>";
		}
		
		if($vtcuoi < $n){
			$str .=  '<span>...</span>';
		}
		
		$str .= "</div>";
		
		$end = $page + 1;
		//echo $end. ' '. $n; exit;
		if($page >= $n){
			$str .= '';
		}else{
			$str .=  "<a href='{$url}page=$end' class='button'><span> Trang Sau <img src='../templates/images/arrow-000-small.gif' height='9' width='12' alt='Next' /></span></a>";  
			$str .=  "<a href='{$url}page=$n' class='button last'><span> Trang Cuối <img src='../templates/images/arrow-stop-000-small.gif' height='9' width='12' alt='Last' /></span></a>";
		}
		
		return $str;
		}

}