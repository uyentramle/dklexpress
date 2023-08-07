<?php /* Smarty version Smarty-3.1.14, created on 2014-05-15 14:58:17
         compiled from "..\templates\data\detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1106053747399e884c4-21671880%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4536c9600bf87bb5183ac3a2dad81f4450f2421' => 
    array (
      0 => '..\\templates\\data\\detail.tpl',
      1 => 1400139536,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1106053747399e884c4-21671880',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hoa_don' => 0,
    'trang_thai_vc' => 0,
    'nd_trang_thai' => 0,
    'nd_thong_tin' => 0,
    'ben_van_chuyen' => 0,
    'nd_tien_do' => 0,
    'tien_do_vc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5374739a80dea0_31477957',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5374739a80dea0_31477957')) {function content_5374739a80dea0_31477957($_smarty_tpl) {?><!-- Form elements -->
<style type="text/css">
div.detail-tb table, tr, td{
	border: 1px #ccc solid !important;
}
</style>
<div class="grid_12">
  <div class="module">
    <h2><span>Chi tiết về việc theo dõi</span></h2><br />
    <div class="module-body">
      <div class="detail-tb">
      <h3><?php echo $_smarty_tpl->tpl_vars['hoa_don']->value['so_hieu'];?>
</h3>
      <br />
        <table width="90%" class="tb-header">
          <tr>
            <td class="title"><h3 style="font-weight:bold"> <?php echo $_smarty_tpl->tpl_vars['trang_thai_vc']->value['trang_thai'];?>
</h3></td>
          </tr>
          <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['nd_trang_thai']->value;?>
</td>
          </tr>
        </table>
        <div style="clear:both;"><br /></div>
        <table width="90%">
          <tr>
            <td class="title"><h3 style="font-weight:bold">Thông tin bổ sung</h3></td>
          </tr>
          <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['nd_thong_tin']->value;?>
</td>
          </tr>
        </table>
        <div style="clear:both;"><br /></div>
        <table width="90%">
          <tr>
            <td colspan="2" class="title"><h3 style="font-weight:bold">Thông tin vận chuyển</h3></td>
          </tr>
          <tr>
            <td><span style="font-weight:bold">Điểm Đến: </span><?php echo $_smarty_tpl->tpl_vars['hoa_don']->value['dia_diem_phat'];?>
</td>
            <td><span style="font-weight:bold">Bên vận chuyển: </span><?php echo $_smarty_tpl->tpl_vars['ben_van_chuyen']->value;?>
</td>
          </tr>
        </table>
        <div style="clear:both;"><br /></div>
        <table width="90%">
          <tr>
            <td colspan="4" class="title"><h3 style="font-weight:bold">Tiến độ vận chuyển</h3></td>
          </tr>
          <tr>
            <td width="25%"><span style="font-weight:bold">Địa điểm</span></td>
            <td width="25%"><span style="font-weight:bold">Ngày</span></td>
            <td width="25%"><span style="font-weight:bold">Thời gian địa phương</span></td>
            <td width="25%"><span style="font-weight:bold">Hoạt động</span></td>
          </tr>
          <?php  $_smarty_tpl->tpl_vars['tien_do_vc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tien_do_vc']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nd_tien_do']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tien_do_vc']->key => $_smarty_tpl->tpl_vars['tien_do_vc']->value){
$_smarty_tpl->tpl_vars['tien_do_vc']->_loop = true;
?>
          <tr>
          <td><?php echo $_smarty_tpl->tpl_vars['tien_do_vc']->value['dia_diem'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['tien_do_vc']->value['ngay'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['tien_do_vc']->value['thoi_gian_dia_phuong'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['tien_do_vc']->value['hoat_dong'];?>
</td>
          </tr>
        <?php } ?>
        </table>
      </div>
      <div style="clear:both;"></div>
      <br />
      
      <div class="float-right"> 
      	<a href="http://dklexpress.com/" class="button"> 
        	<span><img src="../templates/images/arrow-curve-180-left.gif" width="12" height="9" alt="Back" /> Quay lại
        	</span> </a>
         </div>
      
    </div>
    <!-- End .module-body --> 
    
  </div>
  <!-- End .module -->
  <div style="clear:both;"></div>
</div>
<!-- End .grid_12 --> <?php }} ?>