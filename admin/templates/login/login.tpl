<!DOCTYPE html>
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
<div align="center">{$message_login}</div>
</body>
</html>
