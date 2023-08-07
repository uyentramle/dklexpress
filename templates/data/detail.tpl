<!-- Form elements -->
<style type="text/css">
div.detail-tb table, tr, td{
	border: 1px #ccc solid !important;
}
</style>
<div class="grid_12">
  <div class="module">
    <h2><span>Chi tiết về việc theo dõi</span></h2><br />
    <div class="module-body">
      <div class="detail-tb">
      <h3>{$hoa_don.so_hieu}</h3>
      <br />
        <table width="90%" class="tb-header">
          <tr>
            <td class="title"><h3 style="font-weight:bold"> {$trang_thai_vc.trang_thai}</h3></td>
          </tr>
          <tr>
            <td>{$nd_trang_thai}</td>
          </tr>
        </table>
        <div style="clear:both;"><br /></div>
        <table width="90%">
          <tr>
            <td class="title"><h3 style="font-weight:bold">Thông tin bổ sung</h3></td>
          </tr>
          <tr>
            <td>{$nd_thong_tin}</td>
          </tr>
        </table>
        <div style="clear:both;"><br /></div>
        <table width="90%">
          <tr>
            <td colspan="2" class="title"><h3 style="font-weight:bold">Thông tin vận chuyển</h3></td>
          </tr>
          <tr>
            <td><span style="font-weight:bold">Điểm Đến: </span>{$hoa_don.dia_diem_phat}</td>
            <td><span style="font-weight:bold">Bên vận chuyển: </span>{$ben_van_chuyen}</td>
          </tr>
        </table>
        <div style="clear:both;"><br /></div>
        <table width="90%">
          <tr>
            <td colspan="4" class="title"><h3 style="font-weight:bold">Tiến độ vận chuyển</h3></td>
          </tr>
          <tr>
            <td width="25%"><span style="font-weight:bold">Địa điểm</span></td>
            <td width="25%"><span style="font-weight:bold">Ngày</span></td>
            <td width="25%"><span style="font-weight:bold">Thời gian địa phương</span></td>
            <td width="25%"><span style="font-weight:bold">Hoạt động</span></td>
          </tr>
          {foreach $nd_tien_do as $tien_do_vc}
          <tr>
          <td>{$tien_do_vc.dia_diem}</td>
          <td>{$tien_do_vc.ngay}</td>
          <td>{$tien_do_vc.thoi_gian_dia_phuong}</td>
          <td>{$tien_do_vc.hoat_dong}</td>
          </tr>
        {/foreach}
        </table>
      </div>
      <div style="clear:both;"></div>
      <br />
      
      <div class="float-right"> 
      	<a href="http://dklexpress.com/" class="button"> 
        	<span><img src="../templates/images/arrow-curve-180-left.gif" width="12" height="9" alt="Back" /> Quay lại
        	</span> </a>
         </div>
      
    </div>
    <!-- End .module-body --> 
    
  </div>
  <!-- End .module -->
  <div style="clear:both;"></div>
</div>
<!-- End .grid_12 --> 