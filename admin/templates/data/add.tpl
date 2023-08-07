<!-- Form elements -->
{literal}
<script>
/////////////////////////////////////////////////////////////////////////////////
var http_request = false;
function makeRequest() {
	var so_hieu = document.getElementById('so_hieu').value;	  
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
				if(document.getElementById('so_hieu').value == '') {
					document.getElementById('kiem_tra').innerHTML = ' <span style="color:#ebb22c"><img src="../templates/images/notification-exclamation.gif" width="12px"> Bạn chưa nhập số hiệu!</span>';
				} if(result == 'no') {
					document.getElementById('kiem_tra').innerHTML = ' <span class="notification-input ni-correct"> Bạn có thể dùng Số Hiệu này! </span>';
				} if(result == 'yes') {
					document.getElementById('kiem_tra').innerHTML = ' <span class="notification-input ni-error"> Số Hiệu này đã tồn tại! </span>';
				}		
			  }
			}
	http_request.open('GET', 'kiem_tra_ma.php?so_hieu='+so_hieu , true);
	document.getElementById('kiem_tra').innerHTML = ' <img src="../templates/images/loading.gif" width="12px">';
	http_request.send(null);
}

</script>
{/literal}
<div class="grid_12">
  <div class="module">
    <h2><span>Thêm mới ký gửi</span></h2>
    <div class="module-body"> 
      <form name="fadd" method="post" action="add_sm.php" onsubmit="return kiemtra()">
      {$message}
        <table width="90%" border="0" cellspacing="2" cellpadding="2" class="table-form" >
          <tr>
            <td colspan="2"><p>
                <label>Số hiệu <span style="color:red;"> * </span></label>
                <input name="data[so_hieu]" type="text" class="input-short" id="so_hieu" onblur="makeRequest()" /><span id="kiem_tra" class="icon"></span>
                </p>
              <p>
                <label>Bên vận chuyển</label>
                <select class="input-short" name="data[ma_ben_van_chuyen]">
                    {foreach $ds_ben_van_chuyen as $ben_van_chuyen}
                    	<option value="{$ben_van_chuyen.ma}">{$ben_van_chuyen.ten}</option>
                    {/foreach}
                </select>
              </p></td>
          </tr>
          <tr>
            <td><p>
                <label>Nơi gửi <span style="color:red;"> * </span></label>
                <input type="text" class="input-medium" name="data[dia_diem_goi]" id="dia_diem_goi" />
              </p>
              <p> 
                <label>Người gửi <span style="color:red;"> * </span></label>
                <input type="text" class="input-medium" name="data[nguoi_gui]" id="nguoi_gui" />
              </p>
              <p>
                <label>Địa chỉ người gửi <span style="color:red;"> * </span></label>
                <textarea rows="7" cols="90" class="input-medium" name="data[dia_chi_nguoi_gui]" id="dia_chi_nguoi_gui"></textarea></p>
              </td>
            <td><p>
                <label>Nơi phát <span style="color:red;"> * </span></label> 
                <input type="text" class="input-medium" name="data[dia_diem_phat]" id="dia_diem_phat" />
              </p>
              <p>
                <label>Người nhận <span style="color:red;"> * </span></label>
                <input type="text" class="input-medium" name="data[nguoi_nhan]" id="nguoi_nhan" />
              </p>
              <p>
                <label>Địa chỉ người nhận <span style="color:red;"> * </span></label>
                <textarea rows="7" cols="90" class="input-medium" name="data[dia_chi_nguoi_nhan]" id="dia_chi_nguoi_nhan"></textarea> </p></td>
          </tr>
          <tr>
            <td>
            <p>
                <label>Ghi chú</label>
                <textarea rows="7" cols="90" class="input-medium" name="data[ghi_chu]" id="ghi_chu"></textarea>
              </p>
              <p>
                <label>Khối lượng <span style="color:red;"> * </span></label>
                <input type="text" class="input-medium" id="khoi_luong" name="data[khoi_luong]" onkeypress="return inputNumber(event)" onkeyup="formatInt(this)" /> <span> gram</span>
              </p>
              <p>
                <label>Loại <span style="color:red;"> * </span></label>
                <input type="text" class="input-short" name="data[loai]" id="loai" value="Kiện Hàng"/>
              </p>
              <p>
                <label>Thanh toán <span style="color:red;"> * </span></label>
                <input type="text" class="input-short" name="data[thanh_toan]" id="thanh_toan" onkeypress="return inputNumber(event)" onkeyup="formatInt(this)" /> <span> VNĐ</span>
              </p>
              <p>
              <script>
			  $(function() {
				$("#ngay_thanh_toan").datepicker({
					dateFormat: "yy-mm-dd 00:00:00",
					changeMonth: true,
					changeYear: true
					});
			  });
			  </script>
                <label>Ngày Thanh toán </label>
                <input type="text" class="input-short" name="data[ngay_thanh_toan]" id="ngay_thanh_toan" /> <span> (Năm-Tháng-Ngày) </span>
              </p>
               <input type="hidden" name="data[ma_nguoi_dung]" />
              </td>
              <td>
              
              <p>
                <label>Ngày phát hàng <span style="color:red;"> * </span></label>
                <input type="text" class="input-medium" name="data_tt[phat_hanh_theo_lich]" id="phat_hanh_theo_lich" /> <span> (Năm-Tháng-Ngày) </span>
                <script>
				  $(function() {
					$("#phat_hanh_theo_lich").datepicker({
						dateFormat: "yy-mm-dd",
						changeMonth: true,
						changeYear: true
						});
				  });
				  </script>
              </p>
              </td>
          </tr>
          <tr>
            <td colspan="2">
              
              <br />
              <p>Các trường <span style="color:red;"> * </span> là thông tin bắt buộc.</p>
              
              
              <fieldset>
                <input type="submit" value="Lưu Và Thoát" name="button[save-and-end]" class="submit-green" onclick="return kiem_tra()" >
                <input type="button" onclick="window.location.href='list.php'" value="Không Lưu" class="submit-gray">
              </fieldset></td>
          </tr>
        </table>
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
function inputNumber(e)
{
	// cho phep nhap so, nut backspace, delete va dau .
	var keynum;
	if(window.event) // IE
	{
	  keynum = e.keyCode;
	}
	else if(e.which) // Netscape/Firefox/Opera
	{
	  keynum = e.which;
	}
	if ( ((keynum > 45) && (keynum <58)) || (keynum == 8) || (keynum == 9) || (keynum == 190) || (keynum == 39)|| (keynum == 37) ) return true;
	else return false;
	
	// 37 : left ; 39: right
}
/////////////////////////////////////////////////////////////////////////////////
function kiem_tra() {
	var f = document.fadd;
	if(f.so_hieu.value == '') {
		alert('Bạn chưa nhập Số Hiệu, Vui lòng nhập.');
		return false;
	}	
	if(f.dia_diem_goi.value == '') {
		alert('Bạn chưa nhập Nơi Gửi Kiện Hàng, Vui lòng nhập.');
		return false;
	}	
	if(f.nguoi_gui.value == '') {
		alert('Bạn chưa nhập Người gửi, Vui lòng nhập.');
		return false;
	}	
	if(f.dia_chi_nguoi_gui.value == '') {
		alert('Bạn chưa nhập Địa Chỉ Người Gửi, Vui lòng nhập.');
		return false;
	}	
	if(f.khoi_luong.value == '') {
		alert('Bạn chưa nhập Khối Lượng, Vui lòng nhập.');
		return false;
	}	
	if(f.dia_diem_phat.value == '') {
		alert('Bạn chưa nhập Nơi Phát Kiện Hàng, Vui lòng nhập.');
		return false;
	}	
	if(f.nguoi_nhan.value == '') {
		alert('Bạn chưa nhập Người Nhận, Vui lòng nhập.');
		return false;
	}	
	if(f.dia_chi_nguoi_nhan.value == '') {
		alert('Bạn chưa nhập Địa Chỉ Người Nhận, Vui lòng nhập.');
		return false;
	}	
	if(f.thanh_toan.value == '') {
		alert('Bạn chưa nhập Số Tiền Thanh Toán, Vui lòng nhập.');
		return false;
	}
	if(f.loai.value == '') {
		alert('Bạn chưa nhập Loại, Vui lòng nhập.');
		return false;
	}
}

/////////////////////////////////////////////////////////////////////////////////
function formatInt (dieu_khien) {
	var separator = ",";
	var int = dieu_khien.value.replace ( new RegExp ( separator, "g" ), "" );
	var regexp = new RegExp ( "\\B(\\d{3})(" + separator + "|$)" );
	do
	{
		  int = int.replace ( regexp, separator + "$1" );
	}
	while ( int.search ( regexp ) >= 0 )
	dieu_khien.value = int;
}
</script>
{/literal}