<style type="text/css">
table {
	margin: 5px 5px 30px 30px !important;
	width: 95% !important;
}
table tr, td {
	border: 1px dotted #CCC !important;
}
</style>
<div class="grid_12"> 
  <!-- Notification boxes --> 
  {$message}
  <div class="bottom-spacing">
    <h3>Bạn đang phân quyền cho <i>{$quan_tri['ho_ten']}</i></h3>
    <div class="clear"></div>
    <div> {$message}</div>
  </div>
  <br />
  <!-- Example table -->
  <div class="module">
    <h2><span>Cấp Quyền Hạn Cho Quản Trị Viên</span></h2>
    <div class="module-table-body">
      <form method="post" action="permission_sm.php" name="fpermission" >
        <fieldset>
          <input type="hidden" class="text-input medium-input" id="ma" name="ma_quan_tri" value="{$quan_tri.ma}">
          <input name="tap_tin[]" type="hidden" value="home_index.php"/>
          <table id="myTable" class="tablesorter">
            <tbody>
              <tr>
                <td width="25%"><h4>Ký Gởi</h4>
                  <p>
                    <input name="tap_tin[]" id="data" type="checkbox" value="data_list.php" checked="checked"/>
                    Danh Sách</p>
                  <p>
                    <input name="tap_tin[]" id="data" type="checkbox" value="data_add.php"/>
                    Thêm Mới</p>
                  <p>
                    <input name="tap_tin[]" id="data" type="checkbox" value="data_delete.php"/>
                    Xóa</p>
                  <p>
                    <input name="tap_tin[]" id="data" type="checkbox" value="data_edit.php"/>
                    Cập Nhật - Chỉnh Sửa</p>
                 </td>
                    
                <td width="25%"><h4>Trạng Thái Vận Chuyển</h4>
                  <p>
                    <input name="tap_tin[]" id="status" type="checkbox" value="status_list.php" checked="checked"/>
                    Danh Sách</p>
                  <p>
                    <input name="tap_tin[]" id="status" type="checkbox" value="status_add.php"/>
                    Thêm Mới</p>
                  <p>
                    <input name="tap_tin[]" id="status" type="checkbox" value="status_delete.php"/>
                    Xóa</p>
                  <p>
                    <input name="tap_tin[]" id="status" type="checkbox" value="status_edit.php"/>
                    Cập Nhật - Chỉnh Sửa </p>
                </td>
                
                <td width="25%"><h4>Thông Tin Chuyển Thư</h4>
                  <p>
                    <input name="tap_tin[]" id="info" type="checkbox" value="info_list.php" checked="checked"/>
                    Danh Sách</p>
                  <p>
                    <input name="tap_tin[]" id="info" type="checkbox" value="info_add.php"/>
                    Thêm Mới</p>
                  <p>
                    <input name="tap_tin[]" type="checkbox" value="info_delete.php"/>
                    Xóa</p>
                  <p>
                    <input name="tap_tin[]" id="info" type="checkbox" value="info_edit.php"/>
                    Cập Nhật - Chỉnh Sửa </p>
              </td>
                
                
              </tr>
              <tr>
                <td><h4>Hãng Vận Chuyển</h4>
                  <p>
                    <input name="tap_tin[]" id="transportation" type="checkbox" value="transportation_list.php" checked="checked"/>
                    Danh Sách</p>
                  <p>
                    <input name="tap_tin[]" type="checkbox" value="transportation_add.php"/>
                    Thêm Mới</p>
                  <p>
                    <input name="tap_tin[]" type="checkbox" value="transportation_delete.php"/>
                    Xóa</p>
                  <p>
                    <input name="tap_tin[]" id="transportation" type="checkbox" value="transportation_edit.php"/>
                    Cập Nhật - Chỉnh Sửa </p>
                </td>
                
                <td><h4>Quản Trị</h4>
                  <p>
                    <input name="tap_tin[]" id="administrator" type="checkbox" value="administrator_list.php" checked="checked"/>
                    Danh Sách</p>
                  <p>
                    <input name="tap_tin[]" id="administrator" type="checkbox" value="administrator_add.php"/>
                    Thêm Mới</p>
                  <p>
                    <input name="tap_tin[]" id="administrator" type="checkbox" value="administrator_delete.php"/>
                    Xóa</p>
                  <p>
                    <input name="tap_tin[]" id="administrator" type="checkbox" value="administrator_edit.php"/>
                    Cập Nhật - Chỉnh Sửa </p>
                </td>
                
                <td><h4>Biểu Đồ Thống Kê</h4>
                  <p>
                    <input name="tap_tin[]" type="checkbox" value="stats_index.php" checked="checked"/>
                    Xem và xuất file</p>
              </td>
              
             
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <td colspan="3"><p style="text-align:center">
                    <input type="submit" value="Lưu Và Thoát" name="button[save-and-end]" class="submit-green" onclick="return kiem_tra()" >
          			<input type="button" onclick="window.location.href='list.php'" value="Không Lưu" class="submit-gray">
                  </p></td>
              </tr>
            </tfoot>
          </table>
        </fieldset>
        <div class="clear"></div>
      </form>
      <div style="clear: both"></div>
    </div>
    <!-- End .module-table-body --> 
  </div>
  <!-- End .module --> 
  
</div>
{literal} 
<script>
/////////////////////////////////////////////////////////////////////////////////
function kiem_tra() {
	var f = document.fpermission;
	if(f.ten_dang_nhap.value == '') {
		alert('Bạn chưa nhập Tên Đăng Nhập, Vui lòng nhập.');
		return false;
	}	
	if(f.mat_khau.value == '') {
		alert('Bạn chưa nhập Mật Khẩu, Vui lòng nhập.');
		return false;
	}	
	if(f.ho_ten.value == '') {
		alert('Bạn chưa nhập Họ Tên, Vui lòng nhập.');
		return false;
	}
}
</script> 
{/literal}
