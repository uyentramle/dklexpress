<!-- Form elements -->
<style type="text/css">
div.detail-tb table, tr, td {
	border: 1px #ccc solid !important;
}
</style>
<div class="grid_12">
  <div class="module">
    <h2><span style="font-size:18px">Thông Tin Trạng Thái Vận Chuyển Hiện Tại</span></h2>
    <div class="module-body"> {$message}
      <p> <span>Số hiệu: </span> <span style="font-weight:bold; font-size:14px;">{$hoa_don.so_hieu}</span>
        <input type="hidden" name="data[ma]" id="so_hieu" class="input-short" value="{$hoa_don.ma}" />
         <input type="hidden" name="data[so_hieu]" id="so_hieu" class="input-short" value="{$hoa_don.so_hieu}" />
      </p>
      <table width="90%" border="0" cellspacing="2" cellpadding="2">
        <tr>
          <td><h4 style="font-weight:bold; font-size:16px;">{$trang_thai_vc.trang_thai}</h4></td>
        </tr>
        <tr>
          <td>{$nd_trang_thai} </td>
        </tr>
        <tr>
          <td><fieldset>
              <input type="button" onclick="window.location.href='../status/edit.php?ma={$hoa_don.ma}&so_hieu={$hoa_don.so_hieu}'" value="Cập nhật" class="submit-green" >
              <input type="button" onclick="window.location.href='../data/list.php'" value="Quay lại" class="submit-gray">
            </fieldset></td>
        </tr>
      </table>
    </div>
    <!-- End .module-body --> 
    
  </div>
  <!-- End .module -->
  <div style="clear:both;"></div>
</div>
<!-- End .grid_12 --> 