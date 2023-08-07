<?php
try{
	/*echo '<pre>';
	print_r($_POST);
	echo '</pre>';
	exit;*/
	include '../ini.php';
	include '../../classes/xl_quan_tri.php';
	$dt_xl_quan_tri = new xl_quan_tri();	
	$data = $_POST['data'];	
	#Kiem tra
	if(empty($data['ten_dang_nhap'])){
		throw new Exception('Nhập tên đăng nhập');
	}
	if(empty($data['ho_ten'])){
		throw new Exception('Nhập Họ tên');
	}
	if(empty($data['email'])){
		throw new Exception('Nhập email');
	}
	#Xu ly loi logic
	$row = $dt_xl_quan_tri->doc($data['ma']);
	if($row == NULL){
		throw new Exception('Mã thành viên không tồn tại');
	}	
	if(strpos($data['email'], '@') == false){
		throw new Exception('Nhập đúng định dạng email!');
	}	
	#Lenh sql
	//print_r($data); exit;
	$result = $dt_xl_quan_tri->cap_nhat($data);
	if($result === false){
		throw new Exception('Đã xãy ra lỗi trong quá trình lưu dữ liệu, xin vui lòng kiểm tra và thử lại sau!');
	}	
	
	#Dong ket noi
	$dbh = NULL;
	$_SESSION['msg'] = "Lưu thành công! <a href='permission.php?m=". $data['ma']. "&u=". base64_encode($data['ten_dang_nhap']). "'>Cấp quyền hạn sử dụng cho tài khoản này để được sử dụng quản trị website tại đây</a>.";
	$_SESSION['type_msg'] = "success";
	//echo $_SESSION['type_msg']; exit;	
	header('Location: '.$_SERVER['HTTP_REFERER']);
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