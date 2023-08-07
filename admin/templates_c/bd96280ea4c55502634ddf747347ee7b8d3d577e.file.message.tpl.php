<?php /* Smarty version Smarty-3.1.14, created on 2014-04-23 18:15:15
         compiled from "..\templates\elements\message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13415357a0c3acaf24-16491774%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd96280ea4c55502634ddf747347ee7b8d3d577e' => 
    array (
      0 => '..\\templates\\elements\\message.tpl',
      1 => 1395886770,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13415357a0c3acaf24-16491774',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5357a0c3b6be04_37729767',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5357a0c3b6be04_37729767')) {function content_5357a0c3b6be04_37729767($_smarty_tpl) {?><div> <span class="notification n-<?php echo $_SESSION['type_msg'];?>
"><?php echo $_SESSION['msg'];?>
</span> </div>

<!--<div> <span class="notification n-<?php echo $_SESSION['type_msg'];?>
"><?php echo $_SESSION['msg'];?>
</span> 
	<span class="notification n-information">Information notification.</span> 
    <span class="notification n-attention">Attention notification.</span> 
    <span class="notification n-error">Error notification.</span> </div>--> 
<?php }} ?>