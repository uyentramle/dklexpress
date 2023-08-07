<!-- Form elements -->
<style type="text/css">
div.detail-tb table, tr, td {
	border: 1px #ccc solid !important;
}
</style>
<div class="grid_12">
  <div class="module">
    <h2><span style="font-size:18px">Thông Tin Chuyển Thư</span></h2>
    <div class="module-body"> {$message}
      <p> <span>Số hiệu: </span> <span style="font-weight:bold; font-size:14px;">{$hoa_don.so_hieu}</span>
      </p>
      <table width="90%" border="0" cellspacing="2" cellpadding="2">
        <tr>
          <td colspan="5"><h4 style="font-weight:bold; font-size:16px; color:red;">Tiến Độ Vận Chuyển</h4></td>
        </tr>
        <tr>
            <td width="20%"><span style="font-weight:bold">Địa điểm</span></td>
            <td width="20%"><span style="font-weight:bold">Ngày</span></td>
            <td width="20%"><span style="font-weight:bold">Thời gian địa phương</span></td>
            <td width="27%"><span style="font-weight:bold">Hoạt động</span></td>
            <td><span style="font-weight:bold">Tác vụ</span></td>
          </tr>
        {foreach $nd_tien_do as $tien_do_vc}
          <tr>
          <td>{$tien_do_vc.dia_diem}</td>
          <td>{$tien_do_vc.ngay}</td>
          <td>{$tien_do_vc.thoi_gian_dia_phuong}</td>
          <td>{$tien_do_vc.hoat_dong}</td>
          <td>
          	<a href="edit.php?ma_hd={$hoa_don.ma}&ma={$tien_do_vc.ma}&so_hieu={$hoa_don.so_hieu}">
                <img src="../templates/images/pencil.gif" width="16" height="16" alt="Chỉnh sửa" title="Chỉnh sửa" /></a> 
            <a href="delete.php?ma={$tien_do_vc.ma}&ma_hd={$hoa_don.ma}&so_hieu={$hoa_don.so_hieu}">
                <img src="../templates/images/bin.gif" width="16" height="16" alt="Xóa" title="Xóa" /></a></td>
          </tr>
        {/foreach}
        <tr>
          <td colspan="5"><fieldset>
              <input type="button" onclick="window.location.href='../info/add.php?ma={$hoa_don.ma}&so_hieu={$hoa_don.so_hieu}'" value="Thêm Thông Tin" class="submit-green" >
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