<?php /* Smarty version Smarty-3.1.14, created on 2014-05-23 13:01:40
         compiled from "..\templates\administrator\list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27915357a0b1302ba2-62437827%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8584e5b50fd89679ed32a593bee8fcdeacf91f87' => 
    array (
      0 => '..\\templates\\administrator\\list.tpl',
      1 => 1400824709,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27915357a0b1302ba2-62437827',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5357a0b144b578_25895033',
  'variables' => 
  array (
    'message' => 0,
    'ds_quan_tri' => 0,
    'qt_vien' => 0,
    'bo_nut' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5357a0b144b578_25895033')) {function content_5357a0b144b578_25895033($_smarty_tpl) {?><div class="grid_12"> 
  <!-- Notification boxes --> 
  <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

  <div class="bottom-spacing">
    <h3>Danh Sách Quản Trị Viên</h3>
    <div class="clear"></div>
    <!-- Button -->
    <div class="float-right"> <a href="add.php" class="button"> 
    	<span>Thêm mới <img src="../templates/images/plus-small.gif" width="12" height="9" alt="New" /> </span> </a> </div>
  </div>
  <br />
  <!-- Example table -->
  <div class="module">
    <h2><span>Danh Sách Quản Trị Viên</span></h2>
    <div class="module-table-body">
      <form action="">
        <table id="myTable" class="tablesorter">
          <thead>
            <tr>
              <th style="width:3%">Mã</th>
              <th style="width:15%">Tên Đăng Nhập</th>
              <th style="width:15%">Họ Tên</th>
              <th style="width:15%">Lần Đăng Nhập Cuối</th>
              <th style="width:7%">Trạng Thái</th>
              <th style="width:10%">Tác Vụ</th>
            </tr>
          </thead>
          <tbody>
          
          <?php  $_smarty_tpl->tpl_vars['qt_vien'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['qt_vien']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ds_quan_tri']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['qt_vien']->key => $_smarty_tpl->tpl_vars['qt_vien']->value){
$_smarty_tpl->tpl_vars['qt_vien']->_loop = true;
?>
          <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['qt_vien']->value['ma'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['qt_vien']->value['ten_dang_nhap'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['qt_vien']->value['ho_ten'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['qt_vien']->value['lan_dang_nhap_cuoi'];?>
</td>
            <td style="text-align:center">
            	<a href="status.php?m=<?php echo $_smarty_tpl->tpl_vars['qt_vien']->value['ma'];?>
&u=<?php echo base64_encode($_smarty_tpl->tpl_vars['qt_vien']->value['ten_dang_nhap']);?>
" > 
                	<img src="../templates/images/status_<?php echo $_smarty_tpl->tpl_vars['qt_vien']->value['trang_thai'];?>
.png" width="20" height="20"></a></td>
            <td> 
				<a href="edit.php?m=<?php echo $_smarty_tpl->tpl_vars['qt_vien']->value['ma'];?>
&u=<?php echo base64_encode($_smarty_tpl->tpl_vars['qt_vien']->value['ten_dang_nhap']);?>
"> 
                    <img src="../templates/images/pencil.gif" width="16" height="16" alt="Chỉnh sửa" title="Chỉnh sửa" /></a> 
				<a href="delete.php?m=<?php echo $_smarty_tpl->tpl_vars['qt_vien']->value['ma'];?>
&u=<?php echo base64_encode($_smarty_tpl->tpl_vars['qt_vien']->value['ten_dang_nhap']);?>
" onclick="return confirm('Bạn có chắc chắn muốn xóa tài khoản này không?')"> 
                    <img src="../templates/images/bin.gif" width="16" height="16" alt="Xóa" title="Xóa" /></a>
            </td>
          </tr>
          <?php } ?>
          </tbody>
          
        </table>
      </form>
      <div class="pagination"> <?php echo $_smarty_tpl->tpl_vars['bo_nut']->value;?>

        <div style="clear: both;"></div>
      </div>
      <div class="pager" id="pager"> </div>
      <div class="table-apply"> </div>
      <div style="clear: both"></div>
    </div>
    <!-- End .module-table-body --> 
  </div>
  <!-- End .module --> 
  
</div>
<?php }} ?>