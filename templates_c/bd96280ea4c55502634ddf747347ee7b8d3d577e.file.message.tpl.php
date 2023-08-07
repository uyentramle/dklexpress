<?php /* Smarty version Smarty-3.1.14, created on 2014-05-16 15:07:02
         compiled from "..\templates\elements\message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145255375c726ac6752-65732832%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd96280ea4c55502634ddf747347ee7b8d3d577e' => 
    array (
      0 => '..\\templates\\elements\\message.tpl',
      1 => 1400143122,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145255375c726ac6752-65732832',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5375c726c7a5c6_28368707',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5375c726c7a5c6_28368707')) {function content_5375c726c7a5c6_28368707($_smarty_tpl) {?><div><img src="../templates/images/exclamation.png" /><font style="color:#F00;">
<?php echo $_SESSION['msg'];?>


</font></div>
<?php }} ?>