<?php
	session_start();
	include '../../config.php';
	
	/*echo '<pre>';
	print_r($_SESSION); 
	echo '</pre>'; exit;*/
	
	unset($_SESSION[SALT.'login']);
	$_SESSION[SALT.'login'] = '';
	
	unset($_SESSION['user']);
	unset($_SESSION['msg_login']);
	unset($_SESSION['type_msg_login']);
	
	header('Location: login.php'); exit;
