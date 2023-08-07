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
	if(empty($data['mat_khau_cu'])){
		throw new Exception('Nhập Mật Khẩu Cũ');
	}
	if(empty($data['mat_khau_moi'])){
		throw new Exception('Nhập Mật Khẩu Mới');
	}
	if(empty($data['xn_mat_khau'])){
		throw new Exception('Nhập Xác Nhận Mật Khẩu Mới');
	}
	if(empty($data['ma']) || empty($data['ten_dang_nhap']) || !is_numeric($data['ma'])){
		throw new Exception('Tên tài khoản và mã tài khoản không hợp lệ');
	}
	
	#Xu ly loi logic
	if($data['mat_khau_moi'] != $data['xn_mat_khau']){
		throw new Exception('Mật khẩu mới và xác nhận mật khẩu không trùng khớp');
	}
	if($data['mat_khau_moi'] == $data['mat_khau_cu']){
		throw new Exception('Mật khẩu mới không được trùng với mật khẩu cũ');
	}
	$row = $dt_xl_quan_tri->doc($data['ma']);
	if($row == NULL){
		throw new Exception('Mã thành viên không tồn tại');
	}
	if(md5($data['ten_dang_nhap'].$data['mat_khau_cu']) != $row['mat_khau']){
		throw new Exception('Mật khẩu cũ không trùng khớp với hệ thống');
	}
	
	#Lenh sql
	//print_r($data); exit;
	$result = $dt_xl_quan_tri->thay_doi_mat_khau($data['ma'], $data['ten_dang_nhap'], $data['mat_khau_moi']);
	
	if($result === false){
		throw new Exception('Đã xãy ra lỗi trong quá trình lưu dữ liệu, xin vui lòng kiểm tra và thử lại sau!');
	}
	
	
	#Dong ket noi
	$dbh = NULL;
	$_SESSION['msg'] = "Lưu thành công!";
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