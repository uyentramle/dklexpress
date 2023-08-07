<?php /* Smarty version Smarty-3.1.14, created on 2014-04-24 09:51:07
         compiled from "..\templates\elements\message_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2920953587c1b89abf2-65937459%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb8901e4f1ebd0d2fbd930cf18fc29f2219b7c32' => 
    array (
      0 => '..\\templates\\elements\\message_login.tpl',
      1 => 1395902261,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2920953587c1b89abf2-65937459',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53587c1ba32a89_89313567',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53587c1ba32a89_89313567')) {function content_53587c1ba32a89_89313567($_smarty_tpl) {?><div> <span class="notification n-<?php echo $_SESSION['type_msg_login'];?>
"><?php echo $_SESSION['msg_login'];?>
</span> </div>
<?php }} ?>