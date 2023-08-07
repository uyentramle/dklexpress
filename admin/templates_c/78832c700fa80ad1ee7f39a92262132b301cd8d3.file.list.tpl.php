<?php /* Smarty version Smarty-3.1.14, created on 2014-04-24 09:51:37
         compiled from "..\templates\data\list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:462253587c39094250-03071564%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78832c700fa80ad1ee7f39a92262132b301cd8d3' => 
    array (
      0 => '..\\templates\\data\\list.tpl',
      1 => 1397707379,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '462253587c39094250-03071564',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
    'tu_khoa' => 0,
    'list_hd' => 0,
    'hoa_don' => 0,
    'bo_nut' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53587c392e3f77_65102653',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53587c392e3f77_65102653')) {function content_53587c392e3f77_65102653($_smarty_tpl) {?><div class="grid_12"> 
  
  <!-- Notification boxes --> 
  <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

  <div class="bottom-spacing"> 
    
    <!-- Button -->
    <div class="float-right"> <a href="../data/add.php" class="button"> <span>Thêm mới <img src="../templates/images/plus-small.gif" width="12" height="9" alt="New article" /> </span> </a> </div>
    
    <!-- Table records filtering -->
    <table width="90%">
      <tr>
        <td><form method="get" action="list.php" name="fSearch" id="fSearch">
            Từ Khóa
            <input type="text" name="tu_khoa" class="text-input small-input" value="<?php echo $_smarty_tpl->tpl_vars['tu_khoa']->value;?>
">
            <input class="button" type="submit" value="Tìm Số Hiệu">
            <input class="button" type="button" value="Tất cả" onclick="window.location.href='list.php'">
          </form></td>
        <td><form method="get" action="list.php" name="fSearch" id="fSearch">
            Filter:
            <select class="input-short">
              <option value="1" selected="selected">Select filter</option>
              <option value="2">Created last week</option>
              <option value="3">Created last month</option>
              <option value="4">Edited last week</option>
              <option value="5">Edited last month</option>
            </select>
          </form></td>
      </tr>
    </table>
  </div>
  
  <!-- Example table -->
  <div class="module">
    <h2><span>Danh sách ký gửi</span></h2>
    <div class="module-table-body">
      <form action="">
        <table id="myTable" class="tablesorter">
          <thead>
            <tr>
              <th style="width:5%">STT</th>
              <th style="width:15%">Số hiệu</th>
              <th style="width:15%">Người gửi</th>
              <th style="width:15%">Người nhận</th>
              <th style="width:15%">Ngày gửi</th>
              
              <th style="width:15%">Tác vụ</th>
            </tr>
          </thead>
          <tbody>
          
          <?php  $_smarty_tpl->tpl_vars['hoa_don'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hoa_don']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list_hd']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hoa_don']->key => $_smarty_tpl->tpl_vars['hoa_don']->value){
$_smarty_tpl->tpl_vars['hoa_don']->_loop = true;
?>
          <tr>
            <td class="align-center"><?php echo $_smarty_tpl->tpl_vars['hoa_don']->value['ma'];?>
</td>
            <td><a href="detail.php?ma=<?php echo $_smarty_tpl->tpl_vars['hoa_don']->value['ma'];?>
&so_hieu=<?php echo $_smarty_tpl->tpl_vars['hoa_don']->value['so_hieu'];?>
"><?php echo $_smarty_tpl->tpl_vars['hoa_don']->value['so_hieu'];?>
</a></td>
            <td><?php echo $_smarty_tpl->tpl_vars['hoa_don']->value['nguoi_gui'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['hoa_don']->value['nguoi_nhan'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['hoa_don']->value['ngay_tao'];?>
</td>
            
            <td>
            	<a href="detail.php?ma=<?php echo $_smarty_tpl->tpl_vars['hoa_don']->value['ma'];?>
&so_hieu=<?php echo $_smarty_tpl->tpl_vars['hoa_don']->value['so_hieu'];?>
">
                	<img src="../templates/images/notification-information.gif" width="16" height="16" alt="Xem thông tin chi tiết" title="Xem thông tin chi tiết" /></a> 
                <a href="../info/list.php?ma=<?php echo $_smarty_tpl->tpl_vars['hoa_don']->value['ma'];?>
&so_hieu=<?php echo $_smarty_tpl->tpl_vars['hoa_don']->value['so_hieu'];?>
">
                	<img src="../templates/images/balloon.gif" width="16" height="16" alt="Xem thông tin chuyển thư" title="Xem thông tin chuyển thư" /></a> 
                <a href="../status/list.php?ma=<?php echo $_smarty_tpl->tpl_vars['hoa_don']->value['ma'];?>
&so_hieu=<?php echo $_smarty_tpl->tpl_vars['hoa_don']->value['so_hieu'];?>
">
                	<img src="../templates/images/status.png" width="16" height="16" alt="Xem trạng thái vận chuyển" title="Xem trạng thái vận chuyển" /></a> 
                <a href="">
                	<img src="../templates/images/tick-circle.gif" width="16" height="16" alt="Trạng thái" title="Trạng thái" /></a> 
                <a href="edit.php?ma=<?php echo $_smarty_tpl->tpl_vars['hoa_don']->value['ma'];?>
&so_hieu=<?php echo $_smarty_tpl->tpl_vars['hoa_don']->value['so_hieu'];?>
">
                	<img src="../templates/images/pencil.gif" width="16" height="16" alt="Chỉnh sửa" title="Chỉnh sửa" /></a> 
                <a href="delete.php?ma=<?php echo $_smarty_tpl->tpl_vars['hoa_don']->value['ma'];?>
&so_hieu=<?php echo $_smarty_tpl->tpl_vars['hoa_don']->value['so_hieu'];?>
">
                	<img src="../templates/images/bin.gif" width="16" height="16" alt="Xóa" title="Xóa" /></a></td>
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