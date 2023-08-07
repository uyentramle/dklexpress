<?php /* Smarty version Smarty-3.1.14, created on 2014-04-24 09:51:25
         compiled from "..\templates\elements\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2531053587c2d2526a1-80451347%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a35d15204d345a393b1ff60c8b4e33cae79ea46d' => 
    array (
      0 => '..\\templates\\elements\\home.tpl',
      1 => 1397801077,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2531053587c2d2526a1-80451347',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nguoi_dung' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53587c2d3a8f78_98570297',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53587c2d3a8f78_98570297')) {function content_53587c2d3a8f78_98570297($_smarty_tpl) {?><!-- Dashboard icons -->
<div class="grid_7"> 
    <a href="../data/add.php" class="dashboard-module"> 
    	<img src="../templates/images/Crystal_Clear_write.gif" width="64" height="64" title="Thêm mới ký gửi" /> <span>Thêm Mới Ký Gửi</span> </a> 
    <a href="../data/list.php" class="dashboard-module"> 
    	<img src="../templates/images/Crystal_Clear_files.gif" width="64" height="64" title="Danh sách ký gửi" /> <span>Danh sách Ký Gửi</span> </a>
    <a href="../transportation/list.php" class="dashboard-module"> 
    	<img src="../templates/images/Crystal_Clear_files.gif" width="64" height="64" title="Danh sách bên vận chuyển" /> <span>DS Hãng Vận Chuyển</span> </a> 
    
    <a href="../administrator/detail.php?m=<?php echo $_smarty_tpl->tpl_vars['nguoi_dung']->value['ma'];?>
&u=<?php echo base64_encode($_smarty_tpl->tpl_vars['nguoi_dung']->value['ten_dang_nhap']);?>
" class="dashboard-module">
    	<img src="../templates/images/Crystal_Clear_user.gif" width="64" height="64" /> <span>Tài Khoản Của Tôi</span> </a> 
    <a href="../stats/index.php" class="dashboard-module"> 
    	<img src="../templates/images/Crystal_Clear_stats.gif" width="64" height="64" title="Thống kê" /> <span>Thống kê</span> </a> 
    <a href="../administrator/list.php" class="dashboard-module"> 
    	<img src="../templates/images/Crystal_Clear_settings.gif" width="64" height="64" title="Quản trị" /> <span>Quản trị</span> </a>
  <div style="clear: both"></div>
</div>
<!-- End .grid_7 --> 
<!-- Account overview -->
<div class="grid_5">
  <div class="module">
    <h2><span>Tổng quan về tài khoản</span></h2>
    <div class="module-body">
      <p> <strong>Tên tài khoản: </strong> <?php echo $_smarty_tpl->tpl_vars['nguoi_dung']->value['ho_ten'];?>
 <br />
        <strong>Đăng nhập lần cuối vào lúc: </strong><?php echo $_smarty_tpl->tpl_vars['nguoi_dung']->value['lan_dang_nhap_cuoi'];?>
</p>
       <p> <a href="../administrator/detail.php?m=<?php echo $_smarty_tpl->tpl_vars['nguoi_dung']->value['ma'];?>
&u=<?php echo base64_encode($_smarty_tpl->tpl_vars['nguoi_dung']->value['ten_dang_nhap']);?>
">Chi tiết về tài khoản của bạn</a><br /></p>
    </div>
  </div>
  <div style="clear:both;"></div>
</div>
<!-- End .grid_5 --><?php }} ?>