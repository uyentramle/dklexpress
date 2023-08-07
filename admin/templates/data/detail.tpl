<!-- Form elements -->
<style type="text/css">
div.detail-tb table, tr, td{
	border: 1px #ccc solid !important;
}
</style>
<div class="grid_12">
  <div class="module">
    <h2><span>Chi tiết về việc theo dõi</span></h2>
    <div class="module-body">
      <p>{$message} </p>
      <div class="detail-tb">
      <h3><span>{$hoa_don.so_hieu}</span></h3>
        <table width="90%" border="0" cellspacing="2" cellpadding="2">
          <tr>
            <td class="title">Tình Trạng Kiện Hàng: <h4 style="font-weight:bold">{$trang_thai_vc.trang_thai}</h4></td>
          </tr>
          <tr>
            <td>{$nd_trang_thai}</td>
          </tr>
        </table>
        <div style="clear:both;"></div>
        <table width="90%" border="0" cellspacing="2" cellpadding="2">
          <tr>
            <td class="title"><h4 style="font-weight:bold">Thông tin bổ sung</h4></td>
          </tr>
          <tr>
            <td>{$nd_thong_tin}</td>
          </tr>
        </table>
        <div style="clear:both;"></div>
        <table width="90%" border="0" cellspacing="2" cellpadding="2">
          <tr>
            <td class="title" colspan="2"><h4 style="font-weight:bold">Thông tin vận chuyển</h4></td>
          </tr>
          <tr>
            <td><span style="font-weight:bold">Điểm Đến: </span><span class='detail'>{$hoa_don.dia_diem_phat}</span></td>
            <td><span style="font-weight:bold">Bên vận chuyển: </span><span class='detail'>{$ben_van_chuyen}</span></td>
          </tr>
        </table>
        <div style="clear:both;"></div>
        <table width="90%" border="0" cellspacing="2" cellpadding="2">
          <tr>
            <td class="title" colspan="4"><h4 style="font-weight:bold">Tiến độ vận chuyển</h4></td>
          </tr>
          <tr>
            <td width="25%"><span style="font-weight:bold">Địa điểm</span></td>
            <td width="25%"><span style="font-weight:bold">Ngày</span></td>
            <td width="25%"><span style="font-weight:bold">Thời gian địa phương</span></td>
            <td width="25%"><span style="font-weight:bold">Hoạt động</span></td>
          </tr>
          {foreach $nd_tien_do as $tien_do_vc}
          <tr>
          <td class='detail'>{$tien_do_vc.dia_diem}</td>
          <td class='detail'>{$tien_do_vc.ngay}</td>
          <td class='detail'>{$tien_do_vc.thoi_gian_dia_phuong}</td>
          <td class='detail'>{$tien_do_vc.hoat_dong}</td>
          </tr>
        {/foreach}
        </table>
      </div>
      <div style="clear:both;"></div>
      <br />
      
      <div class="float-right"> 
      	<a href="edit.php?ma={$hoa_don.ma}&so_hieu={$hoa_don.so_hieu}" class="button"> 
        	<span><img src="../templates/images/pencil.gif" width="12" height="9" alt="Edit" /> Chỉnh sửa 
        	</span> </a>
      	<a href="../data/list.php" class="button"> 
        	<span><img src="../templates/images/arrow-curve-180-left.gif" width="12" height="9" alt="Back" /> Trở lại danh sách 
        	</span> </a>
         </div>
      
    </div>
    <!-- End .module-body --> 
    
  </div>
  <!-- End .module -->
  <div style="clear:both;"></div>
</div>
<!-- End .grid_12 --> 