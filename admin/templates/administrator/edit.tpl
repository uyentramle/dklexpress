<script type="text/javascript" src="../templates/js/kt-email.js"></script>
{literal}
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
{/literal}
<div class="grid_12">
  <div class="module">
    {$message}
    <h2><span>Chỉnh Sửa Thiết Lập Tài Khoản</span></h2>
    <div class="module-body">
      <form name="fedit" method="post" action="edit_sm.php" onsubmit="return kiemtra()" style="padding-left:100px">
        <input type="hidden" name="data[ma]" value="{$quan_tri_vien.ma}">
        <p>
          <label>Tên Đăng Nhập </label>
          <input name="data[ten_dang_nhap]" type="hidden" value="{$quan_tri_vien.ten_dang_nhap}" />
          <input name="data[ten_dang_nhap]" type="text" disabled="disabled" class="input-short" id="ten_dang_nhap" value="{$quan_tri_vien.ten_dang_nhap}" />
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
          <input type="text" class="input-short" name="data[ho_ten]" id="ho_ten" value="{$quan_tri_vien.ho_ten}" />
        </p>
        <p>
          <label>Email <span style="color:red;"> * </span></label>
          <input type="text" class="input-short" name="data[email]" id="email" value="{$quan_tri_vien.email}" onblur="return checkInput()" />
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
          <input type="button" onclick="window.location.href='detail.php?m={$quan_tri_vien.ma}&u={base64_encode($quan_tri_vien.ten_dang_nhap)}'" value="Quay Lại" class="submit-gray">
        </fieldset>
      </form>
    </div>
    <!-- End .module-body --> 
    
  </div>
  <!-- End .module -->
  <div style="clear:both;"></div>
</div>
<!-- End .content-box-content --> 

{literal} 
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
{/literal}