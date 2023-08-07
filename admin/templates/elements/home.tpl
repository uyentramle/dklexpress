<!-- Dashboard icons -->
<div class="grid_7"> 
    <a href="../data/add.php" class="dashboard-module"> 
    	<img src="../templates/images/Crystal_Clear_write.gif" width="64" height="64" title="Thêm mới ký gửi" /> <span>Thêm Mới Ký Gửi</span> </a> 
    <a href="../data/list.php" class="dashboard-module"> 
    	<img src="../templates/images/Crystal_Clear_files.gif" width="64" height="64" title="Danh sách ký gửi" /> <span>Danh sách Ký Gửi</span> </a>
    <a href="../transportation/list.php" class="dashboard-module"> 
    	<img src="../templates/images/Crystal_Clear_files.gif" width="64" height="64" title="Danh sách bên vận chuyển" /> <span>DS Hãng Vận Chuyển</span> </a> 
    
    <a href="../administrator/detail.php?m={$nguoi_dung.ma}&u={base64_encode($nguoi_dung.ten_dang_nhap)}" class="dashboard-module">
    	<img src="../templates/images/Crystal_Clear_user.gif" width="64" height="64" /> <span>Tài Khoản Của Tôi</span> </a> 
    <a href="../stats/index.php" class="dashboard-module"> 
    	<img src="../templates/images/Crystal_Clear_stats.gif" width="64" height="64" title="Thống kê" /> <span>Thống kê</span> </a> 
    <a href="../administrator/list.php" class="dashboard-module"> 
    	<img src="../templates/images/Crystal_Clear_settings.gif" width="64" height="64" title="Quản trị" /> <span>Quản trị</span> </a>
  <div style="clear: both"></div>
</div>
<!-- End .grid_7 --> 
<!-- Account overview -->
<div class="grid_5">
  <div class="module">
    <h2><span>Tổng quan về tài khoản</span></h2>
    <div class="module-body">
      <p> <strong>Tên tài khoản: </strong> {$nguoi_dung.ho_ten} <br />
        <strong>Đăng nhập lần cuối vào lúc: </strong>{$nguoi_dung.lan_dang_nhap_cuoi}</p>
       <p> <a href="../administrator/detail.php?m={$nguoi_dung.ma}&u={base64_encode($nguoi_dung.ten_dang_nhap)}">Chi tiết về tài khoản của bạn</a><br /></p>
    </div>
  </div>
  <div style="clear:both;"></div>
</div>
<!-- End .grid_5 -->