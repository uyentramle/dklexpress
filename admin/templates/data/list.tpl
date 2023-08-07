<div class="grid_12"> 
  
  <!-- Notification boxes --> 
  {$message}
  <div class="bottom-spacing"> 
    
    <!-- Button -->
    <div class="float-right"> <a href="../data/add.php" class="button"> <span>Thêm mới <img src="../templates/images/plus-small.gif" width="12" height="9" alt="New article" /> </span> </a> </div>
    
    <!-- Table records filtering -->
    <table width="90%">
      <tr>
        <td><form method="get" action="list.php" name="fSearch" id="fSearch">
            Từ Khóa
            <input type="text" name="tu_khoa" class="text-input small-input" value="{$tu_khoa}">
            <input class="button" type="submit" value="Tìm Số Hiệu">
            <input class="button" type="button" value="Tất cả" onclick="window.location.href='list.php'">
          </form></td>
        <td></td>
      </tr>
    </table>
  </div>
  
  <!-- Example table -->
  <div class="module">
    <h2><span>Danh sách ký gửi</span></h2>
    <div class="module-table-body">
      <form action="">
        <table id="myTable" class="tablesorter">
          <thead>
            <tr>
              <th style="width:5%">STT</th>
              <th style="width:15%">Số hiệu</th>
              <th style="width:15%">Người gửi</th>
              <th style="width:15%">Người nhận</th>
              <th style="width:15%">Ngày gửi</th>
              
              <th style="width:15%">Tác vụ</th>
            </tr>
          </thead>
          <tbody>
          
          {foreach $list_hd as $hoa_don}
          <tr>
            <td class="align-center">{$hoa_don.ma}</td>
            <td><a href="detail.php?ma={$hoa_don.ma}&so_hieu={$hoa_don.so_hieu}">{$hoa_don.so_hieu}</a></td>
            <td>{$hoa_don.nguoi_gui}</td>
            <td>{$hoa_don.nguoi_nhan}</td>
            <td>{$hoa_don.ngay_tao}</td>
            
            <td>
            	<a href="detail.php?ma={$hoa_don.ma}&so_hieu={$hoa_don.so_hieu}">
                	<img src="../templates/images/notification-information.gif" width="16" height="16" alt="Xem thông tin chi tiết" title="Xem thông tin chi tiết" /></a> 
                <a href="../info/list.php?ma={$hoa_don.ma}&so_hieu={$hoa_don.so_hieu}">
                	<img src="../templates/images/balloon.gif" width="16" height="16" alt="Xem thông tin chuyển thư" title="Xem thông tin chuyển thư" /></a> 
                <a href="../status/list.php?ma={$hoa_don.ma}&so_hieu={$hoa_don.so_hieu}">
                	<img src="../templates/images/status.png" width="16" height="16" alt="Xem trạng thái vận chuyển" title="Xem trạng thái vận chuyển" /></a> 
                <a href="edit.php?ma={$hoa_don.ma}&so_hieu={$hoa_don.so_hieu}">
                	<img src="../templates/images/pencil.gif" width="16" height="16" alt="Chỉnh sửa" title="Chỉnh sửa" /></a> 
                <a href="delete.php?ma={$hoa_don.ma}&so_hieu={$hoa_don.so_hieu}">
                	<img src="../templates/images/bin.gif" width="16" height="16" alt="Xóa" title="Xóa" /></a></td>
          </tr>
          {/foreach}
          </tbody>
          
        </table>
      </form>
      <div class="pagination"> {$bo_nut}
        <div style="clear: both;"></div>
      </div>
      <div class="pager" id="pager"> </div>
      <div class="table-apply"> </div>
      <div style="clear: both"></div>
    </div>
    <!-- End .module-table-body --> 
  </div>
  <!-- End .module --> 
  
</div>
