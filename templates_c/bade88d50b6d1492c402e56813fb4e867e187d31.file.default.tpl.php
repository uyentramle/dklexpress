<?php /* Smarty version Smarty-3.1.14, created on 2014-05-23 12:29:12
         compiled from "..\templates\layouts\default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:279975374739a902141-74363459%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bade88d50b6d1492c402e56813fb4e867e187d31' => 
    array (
      0 => '..\\templates\\layouts\\default.tpl',
      1 => 1400822950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '279975374739a902141-74363459',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5374739aaadf89_66693410',
  'variables' => 
  array (
    'titleForLayout' => 0,
    'contentForLayout' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5374739aaadf89_66693410')) {function content_5374739aaadf89_66693410($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['titleForLayout']->value)===null||$tmp==='' ? @constant('WEBSITE_NAME') : $tmp);?>
</title>
<link href="../templates/css/style_template.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="wrap">
  <nav id="mainnav">
   <!-- <a href="http://www.dklexpress.com "><h1 id="textlogo">DKL <span>Express</span> </h1></a>
    <ul>
      <li><a href="http://dklexpress.com/">Trang chủ</a></li>
      <li><a href="http://dklexpress.com/?page_id=96">Giới thiệu</a></li>
      <li><a href="#">Dịch vụ</a></li>
      <li><a href="#">Liên lạc</a></li>
    </ul>-->
    <a href="http://www.dklexpress.com "><img src="../templates/images/logo-slogan.jpg" width="996px" /></a>
    
    
  </nav>
  <section id="content">
    <section id="page">
      <header class="mainheading">
        <h2 class="introhead"></h2>
      </header>
      <div align="center">
        <?php echo $_smarty_tpl->tpl_vars['contentForLayout']->value;?>

        <div class="clear"></div>
      </div>
    </section>
  </section>
  <footer>
  <div id="bottom"> <b>DKL EXPRESS</b><br />
Phone: 08.38458999 # 704 – Fax: 08.39484603 - Cell-phone: 094 3223 777<br />
Yahoo chat: vinhnguyend - Email: vinhnguyend@yahoo.com <br />
Copyright &copy;2014 DKLExpress<br />
    <div class="clear"></div>
  </div>
  <div id="credits"> Powered by Grace-Network </div>
</footer>
</div>

<!-- END PAGE SOURCE -->
</body>
</html><?php }} ?>