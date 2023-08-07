<script type="text/javascript" src="../templates/scripts/ckeditor/ckeditor.js"></script>
<!-- Form elements -->
<div class="grid_12">
  <div class="module">
    <h2><span style="font-size:14px">Thêm mới hãng vận chuyển</span></h2>
    <div class="module-body"> {$message}
      <form name="fedit" method="post" action="edit_sm.php" onsubmit="return kiemtra()">
    <fieldset>
    <input type="hidden" name="data[ma]" value="{$hang_van_chuyen.ma}" />
      <p>
        <span style="font-weight:bold">Tên Hãng Vận Chuyển</span>
        <input name="data[ten]" id="ten" class="input-short" value="{$hang_van_chuyen.ten}" />
      </p>
      <p>
        <label style="font-weight:bold">Thông Tin</label>
        <textarea class="input-long" id="thong_tin" name="data[thong_tin]" rows="18">{$hang_van_chuyen.thong_tin}</textarea>
        <script>
		  CKEDITOR.replace( 'thong_tin' );
		</script> 
      </p>
      <p>
        <label style="font-weight:bold">Ngày Xuất Bản</label>
        <input class="input-short" type="text" id="ngay_xuat_ban" name="data[ngay_xuat_ban]" value="{$hang_van_chuyen.ngay_xuat_ban}">
      	<input type="hidden" name="data[ngay_chinh_sua]" />
        <input type="hidden" name="data[ma_nguoi_doi]" />
        {literal} 
        <script>
          $(function() {
            $("#ngay_xuat_ban").datepicker({
				dateFormat: "yy-mm-dd",
                changeMonth: true,
                changeYear: true
                });
          });
          </script> 
        {/literal} 
        <!-- Classes for input-notification: success, error, information, attention --> 
        <br>
      </p>
      <p>
        <input type="submit" value="Lưu Và Thoát" name="button[save-and-end]" class="submit-green" onclick="return kiem_tra()" >
        <input type="button" onclick="window.location.href='list.php'" value="Không Lưu" class="submit-gray">
      </p>
    </fieldset>
    <div class="clear"></div>
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
	if(f.ten.value == '') {
		alert('Bạn chưa nhập Tên Hãng Vận Chuyển, Vui lòng nhập.');
		return false;
	}	
	if(f.thong_tin.value == '') {
		alert('Bạn chưa nhập Nội Dung Thông Tin, Vui lòng nhập.');
		return false;
	}
}
</script>
{/literal}