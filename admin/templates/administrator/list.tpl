<div class="grid_12"> 
  <!-- Notification boxes --> 
  {$message}
  <div class="bottom-spacing">
    <h3>Danh Sách Quản Trị Viên</h3>
    <div class="clear"></div>
    <!-- Button -->
    <div class="float-right"> <a href="add.php" class="button"> 
    	<span>Thêm mới <img src="../templates/images/plus-small.gif" width="12" height="9" alt="New" /> </span> </a> </div>
  </div>
  <br />
  <!-- Example table -->
  <div class="module">
    <h2><span>Danh Sách Quản Trị Viên</span></h2>
    <div class="module-table-body">
      <form action="">
        <table id="myTable" class="tablesorter">
          <thead>
            <tr>
              <th style="width:3%">Mã</th>
              <th style="width:15%">Tên Đăng Nhập</th>
              <th style="width:15%">Họ Tên</th>
              <th style="width:15%">Lần Đăng Nhập Cuối</th>
              <th style="width:7%">Trạng Thái</th>
              <th style="width:10%">Tác Vụ</th>
            </tr>
          </thead>
          <tbody>
          
          {foreach $ds_quan_tri as $qt_vien}
          <tr>
            <td>{$qt_vien.ma}</td>
            <td>{$qt_vien.ten_dang_nhap}</td>
            <td>{$qt_vien.ho_ten}</td>
            <td>{$qt_vien.lan_dang_nhap_cuoi}</td>
            <td style="text-align:center">
            	<a href="status.php?m={$qt_vien.ma}&u={base64_encode($qt_vien.ten_dang_nhap)}" > 
                	<img src="../templates/images/status_{$qt_vien.trang_thai}.png" width="20" height="20"></a></td>
            <td> 
				<a href="edit.php?m={$qt_vien.ma}&u={base64_encode($qt_vien.ten_dang_nhap)}"> 
                    <img src="../templates/images/pencil.gif" width="16" height="16" alt="Chỉnh sửa" title="Chỉnh sửa" /></a> 
				<a href="delete.php?m={$qt_vien.ma}&u={base64_encode($qt_vien.ten_dang_nhap)}" onclick="return confirm('Bạn có chắc chắn muốn xóa tài khoản này không?')"> 
                    <img src="../templates/images/bin.gif" width="16" height="16" alt="Xóa" title="Xóa" /></a>
            </td>
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
