<?php /* Smarty version Smarty-3.1.14, created on 2014-04-23 18:18:52
         compiled from "..\templates\administrator\edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:129755357a0b5e28484-12208431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14567efb34d9d0b6f263a2f96091a0845c9b5206' => 
    array (
      0 => '..\\templates\\administrator\\edit.tpl',
      1 => 1398251908,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129755357a0b5e28484-12208431',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5357a0b603f590_04932160',
  'variables' => 
  array (
    'message' => 0,
    'quan_tri_vien' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5357a0b603f590_04932160')) {function content_5357a0b603f590_04932160($_smarty_tpl) {?><script type="text/javascript" src="../templates/js/kt-email.js"></script>

<script>
/////////////////////////////////////////////////////////////////////////////////
function checkInput(){
	var f = document.fedit;
	if(f.email.value == ''){
		alert("Bạn chưa nhập Email, Vui lòng nhập.");
		f.email.focus();
		return false;
	}
	if(!isEmail(f.email.value)){
		alert('Email không hợp lệ, vui lòng nhập đúng email của bạn!');
		f.email.focus();
		return false;
	}
	return true;
}
</script>

<div class="grid_12">
  <div class="module">
    <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

    <h2><span>Chỉnh Sửa Thiết Lập Tài Khoản</span></h2>
    <div class="module-body">
      <form name="fedit" method="post" action="edit_sm.php" onsubmit="return kiemtra()" style="padding-left:100px">
        <input type="hidden" name="data[ma]" value="<?php echo $_smarty_tpl->tpl_vars['quan_tri_vien']->value['ma'];?>
">
        <p>
          <label>Tên Đăng Nhập </label>
          <input name="data[ten_dang_nhap]" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['quan_tri_vien']->value['ten_dang_nhap'];?>
" />
          <input name="data[ten_dang_nhap]" type="text" disabled="disabled" class="input-short" id="ten_dang_nhap" value="<?php echo $_smarty_tpl->tpl_vars['quan_tri_vien']->value['ten_dang_nhap'];?>
" />
          <br>
          <small style="color:red;">Không thể thay đổi tên đăng nhập</small></p>
        <p>
          <label>Mật Khẩu </label>
          <input type="password" class="input-short" name="data[mat_khau]" id="mat_khau" />
          <br>
          <small style="color:red;">Nếu không thay đổi mật khẩu vui lòng để trống trường này</small>
        </p>
        <p>
          <label>Họ Và Tên <span style="color:red;"> * </span></label>
          <input type="text" class="input-short" name="data[ho_ten]" id="ho_ten" value="<?php echo $_smarty_tpl->tpl_vars['quan_tri_vien']->value['ho_ten'];?>
" />
        </p>
        <p>
          <label>Email <span style="color:red;"> * </span></label>
          <input type="text" class="input-short" name="data[email]" id="email" value="<?php echo $_smarty_tpl->tpl_vars['quan_tri_vien']->value['email'];?>
" onblur="return checkInput()" />
        </p>
        <p>
          <label>Trạng Thái</label>
          <input type="radio" value="1" checked="checked" name="data[trang_thai]">
          Hoạt động
          <input type="radio" value="0" name="data[trang_thai]">
          Ngừng hoạt động </p>
        <fieldset>
          <input type="submit" value="Lưu Và Thoát" name="button[save-and-end]" class="submit-green" onclick="return kiem_tra()" >
          <input type="button" onclick="window.history.go(-1)" value="Không Lưu" class="submit-gray">
          <input type="button" onclick="window.location.href='detail.php?m=<?php echo $_smarty_tpl->tpl_vars['quan_tri_vien']->value['ma'];?>
&u=<?php echo base64_encode($_smarty_tpl->tpl_vars['quan_tri_vien']->value['ten_dang_nhap']);?>
'" value="Quay Lại" class="submit-gray">
        </fieldset>
      </form>
    </div>
    <!-- End .module-body --> 
    
  </div>
  <!-- End .module -->
  <div style="clear:both;"></div>
</div>
<!-- End .content-box-content --> 

 
<script>
	function kiem_tra() {
		var f = document.fedit;
		if(f.ten_dang_nhap.value == '') {
			alert('Vui lòng nhập tên đăng nhập');
			return false;
		}
		if(f.ho_ten.value == '') {
		alert('Bạn chưa nhập Họ Tên, Vui lòng nhập.');
		return false;
		}	
		if(f.email.value == '') {
			alert('Bạn chưa nhập Email, Vui lòng nhập.');
			return false;
		}
	}
</script> 
<?php }} ?>