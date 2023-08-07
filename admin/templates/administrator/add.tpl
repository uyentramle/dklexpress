<!-- Form elements -->
<script type="text/javascript" src="../templates/js/kt-email.js"></script>
{literal}
<script>
/////////////////////////////////////////////////////////////////////////////////
function checkInput(){
	var f = document.fadd;
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
/////////////////////////////////////////////////////////////////////////////////
var http_request = false;
function makeRequest() {
	var ten_dang_nhap = document.getElementById('ten_dang_nhap').value;  
	http_request = false;
	if (window.XMLHttpRequest) { // Mozilla, Safari,...
	 http_request = new XMLHttpRequest();
	 if (http_request.overrideMimeType) {
		// set type accordingly to anticipated content type
		//http_request.overrideMimeType('text/xml');
		http_request.overrideMimeType('text/html');
	 }
	} else if (window.ActiveXObject) { // IE
	 try {
		http_request = new ActiveXObject("Msxml2.XMLHTTP");
	 } catch (e) {
		try {
		   http_request = new ActiveXObject("Microsoft.XMLHTTP");
		} catch (e) {}
	 }
	}
	if (!http_request) {
	 alert('Cannot create XMLHTTP instance');
	 return false;
	}
	
	http_request.onreadystatechange = function() {
			 if (http_request.readyState == 4 && http_request.status == 200) { 	
				result = http_request.responseText;
				if(document.getElementById('ten_dang_nhap').value == '') {
					document.getElementById('kiem_tra').innerHTML = ' <span style="color:#ebb22c"><img src="../templates/images/notification-exclamation.gif" width="12px"> Bạn chưa nhập Tên Đăng Nhập!</span>';
				} if(result == 'no') {
					document.getElementById('kiem_tra').innerHTML = ' <span class="notification-input ni-correct"> Bạn có thể dùng Tên Đăng Nhập này! </span>';
				} if(result == 'yes') {
					document.getElementById('kiem_tra').innerHTML = ' <span class="notification-input ni-error"> Tên Đăng Nhập này đã tồn tại! </span>';
				}	
			  }
			}
	http_request.open('GET', 'kiem_tra_user.php?ten_dang_nhap='+ten_dang_nhap , true);
	document.getElementById('kiem_tra').innerHTML = ' <img src="../templates/images/loading.gif" width="12px">';
	http_request.send(null);
}
</script> 
{/literal}
<div class="grid_12">
  <div class="module">
    <h2><span>Thêm Mới Quản Trị Viên</span></h2>
    <div class="module-body">
      <form name="fadd" method="post" action="add_sm.php" onsubmit="return kiemtra();" style="padding-left:100px">
        {$message}
        <p>
          <label>Tên Đăng Nhập <span style="color: red;"> * </span></label>
          <input name="data[ten_dang_nhap]" type="text" class="input-short" id="ten_dang_nhap" onblur="makeRequest()" />
          <span id="kiem_tra" class="icon"></span> </p>
        <p>
          <label>Mật Khẩu <span style="color:red;"> * </span></label>
          <input type="password" class="input-short" name="data[mat_khau]" id="mat_khau" />
        </p>
        <p>
          <label>Họ Và Tên <span style="color:red;"> * </span></label>
          <input type="text" class="input-short" name="data[ho_ten]" id="ho_ten" />
        </p>
        <p>
          <label>Email <span style="color:red;"> * </span></label>
          <input type="text" class="input-short" name="data[email]" id="email" onblur="return checkInput();" />
        </p>
        <p>
          <label>Trạng Thái</label>
            <input type="radio" value="1" checked="checked" name="data[trang_thai]">
            Hoạt động 
            <input type="radio" value="0" name="data[trang_thai]">
            Ngừng hoạt động
        </p>
        <fieldset>
          <input type="submit" value="Lưu Và Thoát" name="button[save-and-end]" class="submit-green" onclick="return kiem_tra()" >
          <input type="button" onclick="window.location.href='list.php'" value="Không Lưu" class="submit-gray">
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
<script>
/////////////////////////////////////////////////////////////////////////////////
function kiem_tra() {
	var f = document.fadd;
	if(f.ten_dang_nhap.value == '') {
		alert('Bạn chưa nhập Tên Đăng Nhập, Vui lòng nhập.');
		return false;
	}	
	if(f.mat_khau.value == '') {
		alert('Bạn chưa nhập Mật Khẩu, Vui lòng nhập.');
		return false;
	}	
	if(f.ho_ten.value == '') {
		alert('Bạn chưa nhập Họ Tên, Vui lòng nhập.');
		return false;
	}
}
</script> 
{/literal}