<!-- Form elements -->
<style>
label {
	font-weight: bold;
}
</style>
<div class="grid_12">
  <div class="module">
    <h2><span style="font-size:18px; color:gray;">Cập Nhật Trạng Thái Vận Chuyển Hiện Tại</span></h2>
    <div class="module-body">
      <form name="fedit" method="post" action="edit_sm.php" onsubmit="return kiemtra()">
        {$message}
        <table width="90%" border="0" cellspacing="2" cellpadding="2" class="table-form">
          <tr>
            <td width="50%"><p style="color:red;"> <span>Số hiệu: </span> <span style="font-weight:bold; font-size:14px;">{$trang_thai_van_chuyen.so_hieu}</span>
                <input type="hidden" name="data[ma]" class="input-short" value="{$trang_thai_van_chuyen.ma}" />
                <input type="hidden" name="data[so_hieu]" class="input-short" value="{$hoa_don.so_hieu}" />
              </p>
              <p>
                <label>Trạng thái <span style="color:red;"> * </span></label>
                <input type="text" class="input-medium" name="data[trang_thai]" id="trang_thai" value="{$trang_thai_van_chuyen.trang_thai}" />
              </p>
              <p>
                <label>Phát hành theo lịch <span style="color:red;"> * </span></label>
                <input type="text" class="input-medium" name="data[phat_hanh_theo_lich]" id="phat_hanh_theo_lich" value="{$trang_thai_van_chuyen.phat_hanh_theo_lich}" />
                <span>Năm-Tháng-Ngày (VD: 2014-01-01)</span> </p>
                <script>
			  $(function() {
				$("#phat_hanh_theo_lich").datepicker({
					dateFormat: "yy-mm-dd",
					changeMonth: true,
					changeYear: true
					});
			  });
			  </script>
              <p>
                <label>Địa điểm cuối cùng <span style="color:red;"> * </span></label>
                <input type="text" class="input-medium" name="data[dia_diem_cuoi_cung]" id="dia_diem_cuoi_cung" value="{$trang_thai_van_chuyen.dia_diem_cuoi_cung}" />
                <span>Địa điểm có dấu hoặc không dấu.</span> </p></td>
            <td><p> <span style="color:red;">Chỉ điền thông tin phía dưới khi đã giao hàng. Vui lòng bỏ trống nếu chưa có thông tin.</span>
              
              <h3 style="color:red;">Trạng thái giao hàng</h3>
              <label>Thời gian đã giao hàng</label>
              <input type="text" class="input-medium" name="data[da_giao_nhan]" id="da_giao_nhan" value="{$trang_thai_van_chuyen.da_giao_nhan}" />
              <span>Năm-Tháng-Ngày Giờ:Phút:Giây <br />(VD: 2014-01-01 12:05:00)</span>
              <script>
			  $(function() {
				$("#da_giao_nhan").datepicker({
					dateFormat: "yy-mm-dd 00:00:00",
					changeMonth: true,
					changeYear: true
					});
			  });
			  </script>
              </p>
              <p>
                <label>Ký tên </label>
                <input type="text" class="input-medium" name="data[ky_ten]" id="ky_ten" value="{$trang_thai_van_chuyen.ky_ten}" />
                <span>Có dấu hoặc không dấu. <br />
                VD: Trần Thị Thanh hoặc Tran Thi Thanh</span> </p>
              <input type="hidden" name="data[ma_nguoi_dung]" />
              <br /></td>
          </tr>
          <tr>
            <td><p>Các trường <span style="color:red;"> * </span> là thông tin bắt buộc.</p>
              <fieldset>
                <input type="submit" value="Lưu Và Thoát" name="button[save-and-end]" class="submit-green" onclick="return kiem_tra()" >
                <input type="button" onclick="window.location.href='list.php?ma={$hoa_don.ma}&so_hieu={$hoa_don.so_hieu}'" value="Không Lưu" class="submit-gray">
              </fieldset></td>
            <td></td>
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
function kiem_tra() {
	var f = document.fedit;
	if(f.trang_thai.value == '') {
		alert('Bạn chưa nhập Trạng Thái, Vui lòng nhập.');
		return false;
	}
	if(f.phat_hanh_theo_lich.value == '') {
		alert('Bạn chưa nhập Phát Hành Theo Lịch, Vui lòng nhập.');
		return false;
	}
	if(f.dia_diem_cuoi_cung.value == '') {
		alert('Bạn chưa nhập Địa Điểm Kiện Hàng Hiện Tại, Vui lòng nhập.');
		return false;
	}
}
</script> 
{/literal}