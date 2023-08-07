<style>
label {
	font-size: 14px;
	color: #000000;
}
span {
	color: #00C;
}
</style>
<div class="grid_12">
  <div class="module">
    <h2><span style="font-size:14px">Thông Tin Tài Khoản - {$qt_vien.ho_ten}</span></h2>
    <div class="module-body" align="center">
      <p>
        <label>Tên Đăng Nhập: <span> {$qt_vien.ten_dang_nhap} </span></label>
      </p>
      <p>
        <label>Họ Và Tên: <span> {$qt_vien.ho_ten} </span></label>
      </p>
      <p>
        <label>Email: <span> {$qt_vien.email} </span></label>
      </p>
      <div style="clear:both;"></div><br />
      <div> 
      	<a href="edit.php?m={$qt_vien.ma}&u={base64_encode($qt_vien.ten_dang_nhap)}"> 
        	<img src="../templates/images/pencil.gif" width="16" height="16" alt=" Chỉnh Sửa " title=" Chỉnh Sửa "  /> Chỉnh Sửa </a> 
        <a href="newpass.php?m={$qt_vien.ma}&u={base64_encode($qt_vien.ten_dang_nhap)}"> 
        	<img src="../templates/images/status-2.png" width="16" height="16" alt=" Đổi Mật Khẩu " title=" Đổi Mật Khẩu " /> Đổi Mật Khẩu </a> 
        <a href="list.php"> 
        	<img src="../templates/images/arrow-curve-180-left.gif" width="16" height="16" alt=" Quay lại " title=" Quay lại " /> Quay lại </a> </div>
    </div>
    <!-- End .module-body --> 
    
  </div>
  <!-- End .module -->
  <div style="clear:both;"></div>
</div>
<!-- End .content-box-content --> 
