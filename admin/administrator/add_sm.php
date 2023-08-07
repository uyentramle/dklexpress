<?php
try{
	include '../ini.php';		
	include '../../classes/xl_quan_tri.php';
	$dt_xl_quan_tri = new xl_quan_tri();
	
	$data = $_POST['data'];
	
	#Kiem tra
	if(empty($data['ten_dang_nhap'])){
		throw new Exception('Nhập tên đăng nhập');
	}
	if(empty($data['mat_khau'])){
		throw new Exception('Nhập mật khẩu');
	}
	if(empty($data['ho_ten'])){
		throw new Exception('Nhập Họ tên');
	}
	if(empty($data['email'])){
		throw new Exception('Nhập email');
	}
	
	$quan_tri = $dt_xl_quan_tri->doc_theo_ten($data['ho_ten']);
	//print_r($quan_tri); exit;
	if(isset($quan_tri['ten_dang_nhap'])){
		throw new Exception('Tên đăng nhập đã tồn tại!');		
	}
	
	if(isset($quan_tri['email'])){
		throw new Exception('Email đã tồn tại!');		
	}
	
	#Lay yeu cau
	$data['ngay_tao'] = date('Y-m-d', time());
	$data['lan_dang_nhap_cuoi'] = NULL;
	
	if(strpos($data['email'], '@') == false){
		throw new Exception('Email không hợp lệ!');
	}
	
	$data['mat_khau'] = md5($data['ten_dang_nhap'].$data['mat_khau']);
	
	#Lenh sql
	$result = $dt_xl_quan_tri->them($data);
	if($result === false){
		throw new Exception('Đã xãy ra lỗi trong quá trình lưu dữ liệu, xin vui lòng kiểm tra và thử lại sau!');
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
	//echo $_SESSION['msg']; exit;
	header('Location: add.php');	
}