<!-- Form elements -->

<div class="grid_12">
  <div class="module">
    <h2><span>Chỉnh sửa ký gửi</span></h2>
    <div class="module-body">
      <form name="fedit" method="post" action="edit_sm.php" onsubmit="return kiemtra()">
        {$message}
        <table width="90%" border="0" cellspacing="2" cellpadding="2" class="table-form">
          <input name="data[ma]" type="hidden" value="{$hoa_don.ma}" />
          <input name="data[so_hieu]" type="hidden" value="{$hoa_don.so_hieu}"/>
          <tr>
            <td colspan="2"><p>
                <label>Số hiệu </label>
                <input name="data[so_hieu]" type="text" disabled="disabled" class="input-short" id="so_hieu" value="{$hoa_don.so_hieu}" />
              </p>
              <p>
                <label>Bên vận chuyển</label>
                {$ben_van_chuyen}
              </p></td>
          </tr>
          <tr>
            <td><p>
                <label>Nơi gửi <span style="color:red;"> * </span></label>
                <input type="text" class="input-medium" name="data[dia_diem_goi]" id="dia_diem_goi" value="{$hoa_don.dia_diem_goi}" />
              </p>
              <p>
                <label>Người gửi <span style="color:red;"> * </span></label>
                <input type="text" class="input-medium" name="data[nguoi_gui]" id="nguoi_gui" value="{$hoa_don.nguoi_gui}" />
              </p>
              <p>
                <label>Địa chỉ người gửi <span style="color:red;"> * </span></label>
                <textarea rows="7" cols="90" class="input-medium" name="data[dia_chi_nguoi_gui]" id="dia_chi_nguoi_gui">{$hoa_don.dia_chi_nguoi_gui}</textarea>
              </p></td>
            <td><p>
                <label>Nơi phát <span style="color:red;"> * </span></label>
                <input type="text" class="input-medium" name="data[dia_diem_phat]" id="dia_diem_phat" value="{$hoa_don.dia_diem_phat}" />
              </p>
              <p>
                <label>Người nhận <span style="color:red;"> * </span></label>
                <input type="text" class="input-medium" name="data[nguoi_nhan]" id="nguoi_nhan" value="{$hoa_don.nguoi_nhan}" />
              </p>
              <p>
                <label>Địa chỉ người nhận <span style="color:red;"> * </span></label>
                <textarea rows="7" cols="90" class="input-medium" name="data[dia_chi_nguoi_nhan]" id="dia_chi_nguoi_nhan">{$hoa_don.dia_chi_nguoi_nhan}</textarea>
              </p></td>
          </tr>
          <tr>
            <td><p>
                <label>Ghi chú</label>
                <textarea rows="7" cols="90" class="input-medium" name="data[ghi_chu]" id="ghi_chu">{$hoa_don.ghi_chu}</textarea>
              </p>
              <p>
                <label>Khối lượng <span style="color:red;"> * </span></label>
                <input type="text" class="input-medium" id="khoi_luong" name="data[khoi_luong]" onkeypress="return inputNumber(event)" onkeyup="formatInt(this)" value="{$hoa_don.khoi_luong}" />
                <span> gram</span> </p>
              <p>
                <label>Loại <span style="color:red;"> * </span></label>
                <input type="text" class="input-short" name="data[loai]" id="loai" value="{$hoa_don.loai}"/>
              </p>
              <p>
                <label>Thanh toán <span style="color:red;"> * </span></label>
                <input type="text" class="input-short" name="data[thanh_toan]" id="thanh_toan" onkeypress="return inputNumber(event)" onkeyup="formatInt(this)" value="{$hoa_don.thanh_toan}" />
                <span> VNĐ</span> </p>
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
                <input type="text" class="input-short" name="data[ngay_thanh_toan]" id="ngay_thanh_toan" value="{$hoa_don.ngay_thanh_toan}" />
                <span> (Năm-Tháng-Ngày) </span> </p>
              <input type="hidden" name="data[ma_nguoi_dung]" /></td>
            <td>
              <p>
                <label>Ngày phát hàng <span style="color:red;"> * </span></label>
                <input type="text" class="input-medium" name="data_tt[phat_hanh_theo_lich]" id="phat_hanh_theo_lich" value="{$trang_thai_van_chuyen.phat_hanh_theo_lich}" />
                <span> (Năm-Tháng-Ngày) </span> 
                <script>
				  $(function() {
					$("#phat_hanh_theo_lich").datepicker({
						dateFormat: "yy-mm-dd",
						changeMonth: true,
						changeYear: true
						});
				  });
				  </script> 
              </p></td>
          </tr>
          <tr>
            <td colspan="2"><br />
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
	var f = document.fedit;	
	if(f.buu_cuc_nhan.value == '') {
		alert('Bạn chưa nhập Bưu Cục Nhận, Vui lòng nhập.');
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
	
	if(f.buu_cuc_phat.value == '') {
		alert('Bạn chưa nhập Bưu Cục Phát, Vui lòng nhập.');
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