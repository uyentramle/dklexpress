<?php
try{
	/*echo '<pre>';
	//print_r($_SESSION); 
	print_r($_POST);
	echo '</pre>'; exit;*/
	
	include '../ini.php';	
	include '../../classes/xl_hoa_don.php';
	$dt_xl_hoa_don = new xl_hoa_don();
	include '../../classes/xl_trang_thai_van_chuyen.php';
	$dt_xl_trang_thai_van_chuyen = new xl_trang_thai_van_chuyen();
	
	$data = $_POST['data'];
	$data_tt = $_POST['data_tt'];
	
	#Kiem tra
	if(empty($data['so_hieu'])){
		throw new Exception('Có vấn đề khi nhập Số Hiệu, vui lòng kiểm tra lại');
	}
	if(!is_numeric($data['ma_ben_van_chuyen'])){
		throw new Exception('Bên Vận Chuyển không hợp lệ');
	}
	if(empty($data['dia_diem_goi'])){
		throw new Exception('Nhập Địa Điểm Gửi');
	}
	if(empty($data['nguoi_gui'])){
		throw new Exception('Nhập Người Gửi');
	}
	if(empty($data['dia_chi_nguoi_gui'])){
		throw new Exception('Nhập Địa Chỉ Người Gửi');
	}
	if(empty($data['khoi_luong'])){
		throw new Exception('Nhập Khối Lượng');
	}
	if(empty($data['dia_diem_phat'])){
		throw new Exception('Nhập Địa Điểm Phát');
	}
	if(empty($data['nguoi_nhan'])){
		throw new Exception('Nhập Người Nhận');
	}
	if(empty($data['dia_chi_nguoi_nhan'])){
		throw new Exception('Nhập Địa Chỉ Người Nhận');
	}
	if(empty($data['loai'])){
		throw new Exception('Nhập Loại');
	}
	if(empty($data['thanh_toan'])){
		throw new Exception('Nhập Số Tiền Thanh Toán');
	}
	if(empty($data_tt['phat_hanh_theo_lich'])){
		throw new Exception('Nhập Ngày Phát Hàng');
	}
		
	#################
	$hoa_don = $dt_xl_hoa_don->doc($_POST['so_hieu']);
	$data['ma_nguoi_doi'] = $_SESSION['user']['ma'];
	$data_tt['so_hieu'] = $data['so_hieu'];
	$data_tt['dia_diem_cuoi_cung'] = $data['dia_diem_goi'];
	$data_tt['trang_thai'] = 'Đang chờ xử lý';
		
	/*echo '<pre>';
	//print_r($_SESSION); 
	print_r($data);
	echo '</pre>'; exit;*/
	
	#Lenh sql
	$result = $dt_xl_hoa_don->cap_nhat($data);
	if($result === false){
		throw new Exception('Đã xãy ra lỗi trong quá trình lưu dữ liệu, xin vui lòng kiểm tra và thử lại sau!');
	}
	$result_tt = $dt_xl_trang_thai_van_chuyen->cap_nhat($data_tt);
	if($result_tt === false){
		throw new Exception('Đã xãy ra lỗi trong quá trình lưu dữ liệu 2, xin vui lòng kiểm tra và thử lại sau!');
	}
	
	#Dong ket noi
	$dbh = NULL;
	$_SESSION['msg'] = "Cập nhật thành công!";
	$_SESSION['type_msg'] = "success";
	//echo $_SESSION['type_msg']; exit;
	header('Location: list.php');
	exit;

	
}catch(PDOException $e){
	echo $e->getMessage();
}catch(Exception $e){
	#Dong ket noi
	$dbh = NULL;
	$_SESSION['msg'] = $e->getMessage();
	$_SESSION['type_msg'] = "error";
	echo $_SESSION['msg']; exit;
	header('Location: edit.php'); exit;
}