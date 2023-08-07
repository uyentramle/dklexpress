<?php
try{
	/*echo '<pre>';
	print_r($_POST);
	#print_r($_SERVER);
	#print_r($_SESSION);
	echo '</pre> <br>';
	exit;*/
	
	include '../ini.php';
	include '../../classes/xl_phan_quyen.php';
	$dt_xl_phan_quyen = new xl_phan_quyen();	
	$tap_tin = $_POST['tap_tin'];
	$ma_quan_tri = $_POST['ma_quan_tri'];
	
	$dt_xl_phan_quyen->xoa($ma_quan_tri);
	
	foreach($tap_tin as $t){
		$phan_quyen = $dt_xl_phan_quyen->them($ma_quan_tri, $t);
		if($phan_quyen === false){
			throw new Exception(mysql_error());
		}
	}	
	
	#Dong ket noi
	$dbh = NULL;
	$_SESSION['msg'] = "Lưu thành công!";
	$_SESSION['type_msg'] = "success";
	//echo $_SESSION['type_msg']; exit;	
	header('Location: list.php');
	exit;
}catch(PDOException $e){
	echo $e->getMessage();
}catch(Exception $e){
	#Dong ket noi
	$dbh = NULL;
	$_SESSION['msg'] = $e->getMessage();
	$_SESSION['type_msg'] = "error";
	//Trở lại trang trước đó
	header('Location: '.$_SERVER['HTTP_REFERER']);	
}