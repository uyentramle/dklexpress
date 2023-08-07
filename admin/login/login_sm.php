<?php
try{	
	#Mo Session
	session_start();	
	include '../../config.php';	
	#Ket noi
	$dbh = new PDO('mysql:host='.HOST_NAME.'; dbname='.DB_NAME, DB_USERNAME, DB_PASSWORD);  //database handle
	$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);	
	#Chuyen ma utf8
	$dbh->exec('set names utf8');			
	include '../../classes/xl_quan_tri.php';
	$dt_xl_quan_tri = new xl_quan_tri();
	
	$data = $_POST['data'];
	#Kiem tra
	if(empty($data['username'])){
		throw new Exception('Nhập tên đăng nhập');
	}
	if(empty($data['password'])){
		throw new Exception('Nhập mật khẩu');
	}	
	#Lenh sql
	$password = md5($data['username'].$data['password']);
	$user = $dt_xl_quan_tri->kiem_tra($data['username'], $password);	
	if($user == NULL){
		throw new Exception('Tên đăng nhập và mật khẩu không hợp lệ. Vui lòng đăng nhập lại đúng tên đăng nhập và mật khẩu!');
	}	
	$_SESSION[SALT.'login'] = 1;
	$_SESSION['user'] = $user;
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$user = $dt_xl_quan_tri->cap_nhat_lan_dang_nhap_cuoi($user['ma'], date('Y-m-d H:i:s'));
	#################Remember password########
	if(isset($_POST['remember'])){
		setcookie('username', $data['username'], time() + 7*24*60*60, '/');
		setcookie('password', base64_encode($data['password']), time() + 7*24*60*60, '/');
	}	
	$dbh = NULL;
	header('Location: ../home/index.php');
	exit;	
}catch(PDOException $e){
	echo $e->getMessage();
}catch(Exception $e){
	#Dong ket noi
	$dbh = NULL;
	$_SESSION['msg_login'] = $e->getMessage();
	$_SESSION['type_msg_login'] = "information";
	header('Location: login.php');	
}