<?php /* Smarty version Smarty-3.1.14, created on 2014-04-24 09:50:24
         compiled from "..\templates\login\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:758653587bf0bf1d99-86711730%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dee76264d57047cb4a1202a544684d880f9b340c' => 
    array (
      0 => '..\\templates\\login\\login.tpl',
      1 => 1397724213,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '758653587bf0bf1d99-86711730',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message_login' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53587bf0e81e03_36024837',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53587bf0e81e03_36024837')) {function content_53587bf0e81e03_36024837($_smarty_tpl) {?><!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Login - Đăng nhập hệ thống</title>
<link rel="stylesheet" href="../templates/css/style.css">
<!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>




<form method="post" action="login_sm.php" class="login">
  <p>
    <label for="login">User Name:</label>
    <input type="text" name="data[username]" id="username" value="admin">
  </p>
  <p>
    <label for="password">Password:</label>
    <input type="password" name="data[password]" id="password" value="4815162342">
  </p>
  <p class="login-submit">
    <button type="submit" class="login-button">Login</button>
  </p>
  <!--<p class="forgot-password"><a href="index.html">Forgot your password?</a></p>-->
</form>
<div align="center"><?php echo $_smarty_tpl->tpl_vars['message_login']->value;?>
</div>
</body>
</html>
<?php }} ?>