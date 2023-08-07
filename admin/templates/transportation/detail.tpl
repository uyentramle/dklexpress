<!-- Form elements -->
<div class="grid_12">
  <div class="module"> {$message}
    <h2><span style="font-size:14px">Thông tin hãng vận chuyển {$hang_van_chuyen.ten}</span></h2>
    <div class="module-body">
      <div> {$hang_van_chuyen.thong_tin} </div>
      <div style="clear:both;"></div>
      <fieldset style="text-align:right">
        <input type="button" onclick="window.location.href='edit.php?ma={$ds.ma}&name={base64_encode($ds.ten)}'" value="Chỉnh Sửa" class="submit-green" >
        <input type="button" onclick="window.location.href='list.php'" value="Quay lại" class="submit-gray">
      </fieldset>
    </div>
    <br />
  </div>
  <div style="clear:both;"></div>
  <div class="module">
    <div>
      <h2><span style="font-size:14px">Thông tin bài viết</span></h2>
      <div class="module-body">
        <p><strong>Nội dung được xuất bản bởi:</strong> {$nguoi_tao.ho_ten}</p>
        <p><strong>Viết vào ngày:</strong> {$hang_van_chuyen.ngay_tao}</p>
        <p><strong>Xuất bản vào ngày:</strong> {$hang_van_chuyen.ngay_xuat_ban}</p>
        {$nd_chinh_sua} </div>
    </div>
    <!-- End .module-body --> 
    
  </div>
  <!-- End .module -->
  <div style="clear:both;"></div>
</div>
<!-- End .grid_12 --> 