<!-- Form elements -->
<style type="text/css">
div.detail-tb table, tr, td {
	border: 1px #ccc solid !important;
}
</style>
<div class="grid_12">
  <div class="module">
    <h2><span>Chỉnh Sửa Thông Tin Chuyển Thư</span></h2>
    <div class="module-body"> 
      <form name="fedit" method="post" action="edit_sm.php" onsubmit="return kiemtra()">
      {$message}
        <table width="90%" border="0" cellspacing="2" cellpadding="2">
        <tr>
          <td colspan="4"><h4 style="font-weight:bold; font-size:16px; color:red;">Tiến Độ Vận Chuyển</h4></td>
        </tr>
         <input type="hidden" name="data[so_hieu]" id="so_hieu" class="input-short" value="{$hoa_don.so_hieu}" />
        <tr>
            <td width="20%"><span style="font-weight:bold">Địa điểm</span></td>
            <td width="20%"><span style="font-weight:bold">Ngày</span></td>
            <td width="20%"><span style="font-weight:bold">Thời gian địa phương</span></td>
            <td width="27%"><span style="font-weight:bold">Hoạt động</span></td>
          </tr>
        <tr>
            <td><input type="text" name="data[dia_diem]" id="dia_diem" class="input-long" value="{$tien_do_vc.dia_diem}" /></td>
            <td><input type="text" name="data[ngay]" id="ngay" class="input-long" value="{$tien_do_vc.ngay}" /></td>
            <script>
			  $(function() {
				$("#ngay").datepicker({
					dateFormat: "yy-mm-dd",
					changeMonth: true,
					changeYear: true
					});
			  });
			  </script>
            <td><input type="text" name="data[thoi_gian_dia_phuong]" id="thoi_gian_dia_phuong" class="input-long" value="{$tien_do_vc.thoi_gian_dia_phuong}" /></td>
            <td><input type="text" name="data[hoat_dong]" id="hoat_dong" class="input-long" value="{$tien_do_vc.hoat_dong}" /></td>
            <input type="hidden" name="data[ma_nguoi_dung]" />
          <tr>
            <td colspan="4"><fieldset>
                <input type="submit" value="Lưu Và Thoát" name="button[save-and-end]" class="submit-green" onclick="return kiem_tra()" >
                <input type="button" onclick="window.location.href='list.php?ma={$hoa_don.ma}&so_hieu={$hoa_don.so_hieu}'" value="Không Lưu" class="submit-gray">
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
function kiem_tra() {
	var f = document.fadd;
	if(f.dia_diem.value == '') {
		alert('Bạn chưa nhập Địa Điểm, Vui lòng nhập.');
		return false;
	}
	if(f.ngay.value == '') {
		alert('Bạn chưa nhập Ngày, Vui lòng nhập.');
		return false;
	}
	if(f.thoi_gian_dia_phuong.value == '') {
		alert('Bạn chưa nhập Thời Gian Địa Phương, Vui lòng nhập.');
		return false;
	}
	if(f.hoat_dong.value == '') {
		alert('Bạn chưa nhập Hoạt Động, Vui lòng nhập.');
		return false;
	}	
}
</script> 
{/literal}