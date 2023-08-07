<div class="grid_12"> 
  
  <!-- Notification boxes --> 
  {$message}
  <div class="bottom-spacing"> 
    
    <!-- Button -->
    <div class="float-right"> <a href="add.php" class="button"> <span>Thêm mới <img src="../templates/images/plus-small.gif" width="12" height="9" alt="New article" /> </span> </a> </div>
    
    <!-- Table records filtering -->
    <table width="90%">
      <tr>
        <td><form method="get" action="list.php" name="fSearch" id="fSearch">
            Từ Khóa
            <input type="text" name="tu_khoa" class="text-input small-input" value="{$tu_khoa}">
            <input class="button" type="submit" value="Tìm Số Hiệu">
            <input class="button" type="button" value="Tất cả" onclick="window.location.href='list.php'">
          </form></td>
        <td><form method="get" action="list.php" name="fSearch" id="fSearch">
            Hiển Thị:
            <select name="filter" class="input-short">
              <option value="15" {$selc15}>15</option>
              <option {$selcAll}>Tất Cả</option>
            </select>
          </form></td>
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
              <th>STT</th>
              <th>Tên Hãng Vận Chuyển</th>              
              <th>Tác vụ</th>
            </tr>
          </thead>
          <tbody>
          
          {foreach $list as $ds}
          <tr>
            <td>{$ds.ma}</td>
            <td><a href="detail.php?ma={$ds.ma}&name={base64_encode($ds.ten)}">{$ds.ten}</a></td>
            <td>
            	<a href="detail.php?ma={$ds.ma}&name={base64_encode($ds.ten)}">
                	<img src="../templates/images/notification-information.gif" width="16" height="16" alt="Xem thông tin chi tiết" title="Xem thông tin chi tiết" /></a> 
                <a href="edit.php?ma={$ds.ma}&name={base64_encode($ds.ten)}">
                	<img src="../templates/images/pencil.gif" width="16" height="16" alt="Chỉnh sửa" title="Chỉnh sửa" /></a> 
                <a href="delete.php?ma={$ds.ma}&name={base64_encode($ds.ten)}">
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
