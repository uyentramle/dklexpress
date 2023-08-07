<!-- Form elements -->

<div class="grid_12">
  <div class="module">
    <h2><span style="font-size:14px">Đổi mật khẩu</span></h2>
    <div class="module-body">
      <form name="fnewpass" method="post" action="newpass_sm.php" onsubmit="return kiemtra()" style="padding-left:100px">
        {$message}
        <p>
          <input name="data[ma]" type="hidden" value="{$quan_tri_vien.ma}"/>
          <input name="data[ten_dang_nhap]" type="hidden" value="{$quan_tri_vien.ten_dang_nhap}"/>
          <label>Mật Khẩu Cũ<span style="color: red;"> * </span></label>
          <input name="data[mat_khau_cu]" type="password" class="input-short" id="mat_khau_cu" onblur="makeRequest()" />
        </p>
        <p>
          <label>Mật Khẩu Mới<span style="color:red;"> * </span></label>
          <input type="password" class="input-short" name="data[mat_khau_moi]" id="mat_khau_moi" onblur="checkform()" />
        </p>
        <p>
          <label>Nhập Lại Mật Khẩu Mới<span style="color:red;"> * </span></label>
          <input type="password" class="input-short" name="data[xn_mat_khau]" id="xn_mat_khau" onblur="checkform()" />
        </p>
        <fieldset>
          <input type="submit" value="Lưu Và Thoát" name="button[save-and-end]" class="submit-green" onclick="return kiem_tra()" >
          <input type="button" onclick="window.history.go(-1)'" value="Không Lưu" class="submit-gray">
        </fieldset>
      </form>
    </div>
    <!-- End .module-body --> 
    
  </div>
  <!-- End .module -->
  <div style="clear:both;"></div>
</div>
<!-- End .grid_12 --> 
{literal} 
<script type="text/javascript">
function kiem_tra() {
	var f = document.fnewpass;
	if(f.mat_khau_cu.value == '') {
		alert('Bạn chưa nhập Mật Khẩu Cũ, Vui lòng nhập.');
		return false;
	}	
	if(f.mat_khau_moi.value == '') {
		alert('Bạn chưa nhập Mật Khẩu Mới, Vui lòng nhập.');
		return false;
	}	
	if(f.xn_mat_khau.value == '') {
		alert('Bạn chưa nhập Xác Nhận Mật Khẩu, Vui lòng nhập.');
		return false;
	}
}
/////////////////////////////////////////////////////////////////////////////////
function checkform(){
	var f = document.fnewpass;
	if(f.xn_mat_khau.value != ''){
		if(f.xn_mat_khau.value != f.mat_khau_moi.value){
        alert('Mật khẩu xác thực không khớp!');
        return false;
		}
	}
}
</script> 
{/literal}