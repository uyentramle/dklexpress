-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 18, 2014 at 12:26 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dkl_express`
--

-- --------------------------------------------------------

--
-- Table structure for table `ben_van_chuyen`
--

CREATE TABLE IF NOT EXISTS `ben_van_chuyen` (
  `ma` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `thong_tin` text COLLATE utf8_unicode_ci NOT NULL,
  `ngay_tao` datetime NOT NULL,
  `ngay_xuat_ban` date NOT NULL,
  `ngay_chinh_sua` datetime DEFAULT NULL,
  `ma_nguoi_tao` int(11) NOT NULL,
  `ma_nguoi_doi` int(11) DEFAULT NULL,
  PRIMARY KEY (`ma`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `ben_van_chuyen`
--

INSERT INTO `ben_van_chuyen` (`ma`, `ten`, `thong_tin`, `ngay_tao`, `ngay_xuat_ban`, `ngay_chinh_sua`, `ma_nguoi_tao`, `ma_nguoi_doi`) VALUES
(1, 'Expedited', '<div style="text-align:justify">\r\n          <div align="center" style="text-align:center; background: url(../../upload/transportation/bnr_upsol_worldwide_expedited_710x200.jpg); position:relative; width:710px; height:200px;">\r\n            <div style="position:absolute;padding:5px;margin-top:30px; margin-left:515px;"> <span style="color:#000000;font-size:1.5em;text-align:left;">Vận chuyển từ 15 <br>\r\n              quốc gia Châu Á <br>\r\n              Thái Bình Dương tới <br>\r\n              hơn 220 quốc gia và <br>\r\n              vùng lãnh thổ </span> </div><br />\r\n          </div><br />\r\n          <div>\r\n            <p>UPS Worldwide Expedited cung cấp dịch vụ khai hài quan, xác định ngày giao hàng tới trên 220 Quốc gia và Vùng lãnh thổ trong vòng từ 2 tới 5 ngày làm việc. Khi thời gian gừi hàng có thể linh động hơn, thì đây là dịch vụ toàn cầu tốt nhất giúp bạn có thể cân bằng chi phí và thời gian giao hàng. Nhận hàng đúng lúc khi cần mà không gây tổn thất ngân sách của bạn.<br>\r\n              <br>\r\n              Để cho hoạt động kinh doanh của bạn được vận hành một cách tốt nhất, hãy tìm những đối tác là nhà cung cấp dịch vụ logistics hàng đầu cho mục tiêu mở rộng toàn cầu của bạn. UPS mang đến sự chuyên nghiệp và những giá trị tốt nhất cho mọi nhu cầu trong kinh doanh của bạn. Khi thời gian giao hàng không quá khẩn cấp, UPS cung cấp cho bạn lựa chọn hiệu quả để quản lý chi phí cho những lô hàng quốc tế. Lựa chọn linh hoạt hơn, giúp bạn tiết kiệm ngân sách nhưng vẫn đảm bảo thời gian giao hàng bằng dịch vụ UPS Worldwide Expedited <br>\r\n              <br>\r\n              Dịch vụ Ups Worldwide Expedited luôn đảm bảo cho việc gửi hàng của bạn, bạn chi cần tập trung vào việc tăng trưởng kinh doanh. Việc kinh doanh của bạn cũng dồng thời hưởng lợi ích từ những đặc tính sau: </p>\r\n            <ul>\r\n              <li>Giao hàng 3 lần không tính phí </li>\r\n              <li>Theo dõi lô hàng </li>\r\n              <li>Dịch vụ gửi thông báo </li>\r\n              <li>Khai báo tại nhà, giao hàng tận nơi. <br>\r\n                <br>\r\n              </li>\r\n            </ul>\r\n            <h4>Làm cho Hoạt động Thương mại Quốc tế Trở nên Dễ dàng hơn</h4>\r\n            <p>Việc vượt biên giới đòi hỏi sự phối hợp, tính tuân thủ và một chút công việc giấy tờ. Nếu các phần này không được như mong đợi, bạn có thể gặp tình trạng chậm trễ hải quan. Đưa ra sự kiểm soát chặt chẽ hơn đối với quy trình nhập khẩu - UPS Import Control cho phép bạn quản lý chi phí hiệu quả hơn và giảm thiểu sự chậm trễ.</p>\r\n            <h4>Thích ứng với việc Thay đổi Lịch trình trước khi Có vấn đề</h4>\r\n            <p>Khi cần các cập nhật tiên phong về tình trạng lô hàng, Quantum View Notify<sup>®</sup>sẽ thực hiện điều đó. Ngoài dịch vụ nhanh, đáng tin cậy mà bạn nhận được từ UPS, chúng tôi cũng cung cấp thông báo nhanh chóng về thay đổi trạng thái lô hàng của bạn.</p>\r\n          </div>\r\n        </div>', '2014-04-02 09:40:31', '2014-04-02', '2014-04-16 17:29:08', 1, 1),
(2, 'Express Saver®', '', '0000-00-00 00:00:00', '0000-00-00', '0000-00-00 00:00:00', 1, NULL),
(3, 'test safsd sa ', 'testá  dfs g jfd', '2014-04-16 06:45:31', '2014-04-15', '2014-04-17 08:55:00', 1, 1),
(4, 'test ag sg', 'testg ds sad', '2014-04-16 06:45:37', '2014-04-16', '2014-04-17 08:52:43', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `bo_dem`
--

CREATE TABLE IF NOT EXISTS `bo_dem` (
  `ma` int(11) NOT NULL AUTO_INCREMENT,
  `dia_chi_ip` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `trinh_duyet` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `thoi_gian` datetime NOT NULL,
  PRIMARY KEY (`ma`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `bo_dem`
--

INSERT INTO `bo_dem` (`ma`, `dia_chi_ip`, `trinh_duyet`, `thoi_gian`) VALUES
(1, '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.116 Safari/537.', '2014-04-18 10:37:45'),
(2, '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.116 Safari/537.', '2014-04-18 10:56:39'),
(3, '192.168.1.104', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.116 Safari/537.', '2014-04-18 11:00:41');

-- --------------------------------------------------------

--
-- Table structure for table `cau_hinh`
--

CREATE TABLE IF NOT EXISTS `cau_hinh` (
  `tu_khoa` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`tu_khoa`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cau_hinh`
--


-- --------------------------------------------------------

--
-- Table structure for table `hoa_don`
--

CREATE TABLE IF NOT EXISTS `hoa_don` (
  `ma` int(11) NOT NULL AUTO_INCREMENT,
  `so_hieu` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ma_ben_van_chuyen` int(11) NOT NULL,
  `dia_diem_goi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dia_diem_phat` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nguoi_gui` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi_nguoi_gui` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `nguoi_nhan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi_nguoi_nhan` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ghi_chu` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `khoi_luong` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `loai` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `thanh_toan` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_thanh_toan` datetime DEFAULT NULL,
  `ma_nguoi_dung` int(11) NOT NULL,
  `ma_nguoi_doi` int(11) DEFAULT NULL,
  `ngay_tao` datetime NOT NULL,
  PRIMARY KEY (`ma`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

--
-- Dumping data for table `hoa_don`
--

INSERT INTO `hoa_don` (`ma`, `so_hieu`, `ma_ben_van_chuyen`, `dia_diem_goi`, `dia_diem_phat`, `nguoi_gui`, `dia_chi_nguoi_gui`, `nguoi_nhan`, `dia_chi_nguoi_nhan`, `ghi_chu`, `khoi_luong`, `loai`, `thanh_toan`, `ngay_thanh_toan`, `ma_nguoi_dung`, `ma_nguoi_doi`, `ngay_tao`) VALUES
(15, '1Z50464R04610', 2, 'Ho Chi Minh, Viet Nam', 'DURACK, AU', 'test', 'abc', 'test', 'abc', '', '19,500', 'Kiện Hàng', '1,890,000', NULL, 1, NULL, '2014-04-05 03:33:19'),
(16, '1ZW4090W67621', 1, 'Binh Duong, Viet Nam', 'LONGVIEW, TX, US', 'test1', 'test1', 'test1', 'test1', '', '29,500', 'Kiện Hàng', '3,653,000', NULL, 1, NULL, '2014-04-05 03:35:26'),
(17, '1Z50464Rdg610', 1, 'Tien Giang, Viet Nam', 'DURACK, AU', 'test2', 'test2', 'test2', 'test2', '', '19', 'Kiện Hàng', '1,890,000', '2014-04-05 04:45:22', 1, NULL, '2014-04-05 04:45:22'),
(18, '1Z50464R04710', 2, 'Ho Chi Minh, Viet Nam', 'Ho Chi Minh, Viet Nam', 'abc', 'afdsas', 'test1', 'sadgdsagds', '', '25', 'Kiện Hàng', '190,000', '2014-04-05 04:51:01', 1, NULL, '2014-04-05 04:51:01'),
(19, 'abc12345678de', 2, 'Ho Chi Minh, Viet Nam', 'Ha Noi, Viet Nam', 'abc', 'abc', 'abc', 'abc', '', '25', 'Kiện Hàng', '460,000', NULL, 1, NULL, '2014-04-07 10:32:56');

-- --------------------------------------------------------

--
-- Table structure for table `quan_tri`
--

CREATE TABLE IF NOT EXISTS `quan_tri` (
  `ma` int(11) NOT NULL AUTO_INCREMENT,
  `ho_ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ten_dang_nhap` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_tao` date NOT NULL,
  `lan_dang_nhap_cuoi` datetime DEFAULT NULL,
  `trang_thai` tinyint(4) NOT NULL,
  PRIMARY KEY (`ma`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `quan_tri`
--

INSERT INTO `quan_tri` (`ma`, `ho_ten`, `ten_dang_nhap`, `mat_khau`, `email`, `ngay_tao`, `lan_dang_nhap_cuoi`, `trang_thai`) VALUES
(1, 'Admin', 'admin', 'a66abb5684c45962d887564f08346e8d', 'info@dkl_express.com', '2014-03-26', '2014-04-18 10:56:20', 1),
(2, 'DKL Express 1', 'admin12', 'fccd77eb0e66c41ad681650d2df03dc8', 'admin@test.com', '2014-04-17', '2014-04-17 22:40:30', 1),
(4, 'DKL Express', 'admin11', '5c7f48250edbab29f05b2f8b6044039f', 'test@dlkexpress.com', '2014-04-17', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `thong_tin_chuyen_thu`
--

CREATE TABLE IF NOT EXISTS `thong_tin_chuyen_thu` (
  `ma` int(11) NOT NULL AUTO_INCREMENT,
  `so_hieu` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `dia_diem` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ngay` date NOT NULL,
  `thoi_gian_dia_phuong` time NOT NULL,
  `hoat_dong` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ma_nguoi_dung` int(11) NOT NULL,
  PRIMARY KEY (`ma`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `thong_tin_chuyen_thu`
--

INSERT INTO `thong_tin_chuyen_thu` (`ma`, `so_hieu`, `dia_diem`, `ngay`, `thoi_gian_dia_phuong`, `hoat_dong`, `ma_nguoi_dung`) VALUES
(1, '1Z50464Rdg610', 'Viet Nam', '2014-04-05', '05:42:00', 'Đã xử lý Yêu cầu: Sẵn sàng cho UPS', 1),
(2, '1Z50464Rdg610', 'Ho Chi Minh, Viet Nam', '2014-04-05', '18:42:00', 'Quét Tại Điểm Nhận Hàng', 1),
(3, '1Z50464Rdg610', 'Ho Chi Minh, Viet Nam', '2014-04-05', '20:42:00', 'Quét Tại Điểm Xuất Xứ', 1),
(4, '1Z50464Rdg610', 'DURACK, AU', '2014-04-12', '20:42:43', 'Đã Giao Hàng', 1),
(5, '1ZW4090W67621', 'test', '2014-04-12', '12:05:00', 'test', 1),
(6, '1ZW4090W67621', 'abc', '2014-04-15', '14:05:00', 'aff', 0),
(9, '1Z50464R04610', 'sádfas', '2014-04-16', '00:00:00', 'sdafsdfs', 1),
(10, '1Z50464R04610', 'test2', '2014-04-16', '00:00:00', 'test2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `trang_thai_van_chuyen`
--

CREATE TABLE IF NOT EXISTS `trang_thai_van_chuyen` (
  `ma` int(11) NOT NULL AUTO_INCREMENT,
  `so_hieu` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `trang_thai` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `phat_hanh_theo_lich` date NOT NULL,
  `dia_diem_cuoi_cung` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `da_giao_nhan` datetime DEFAULT NULL,
  `ky_ten` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ma_nguoi_dung` int(11) NOT NULL,
  PRIMARY KEY (`ma`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `trang_thai_van_chuyen`
--

INSERT INTO `trang_thai_van_chuyen` (`ma`, `so_hieu`, `trang_thai`, `phat_hanh_theo_lich`, `dia_diem_cuoi_cung`, `da_giao_nhan`, `ky_ten`, `ma_nguoi_dung`) VALUES
(1, '1ZW4090W67621', 'Đang chờ xử lý', '2014-04-10', 'Ho Chi Minh, Viet Nam', NULL, '', 1),
(3, '1Z50464Rdg610', 'Đã  giao hàng', '2014-04-12', 'Tien Giang, Viet Nam', '2014-04-12 12:05:00', 'Trần Thị Thanh', 1),
(4, '1Z50464R04710', 'Đang chờ xử lý', '2014-04-20', 'Ho Chi Minh, Viet Nam', NULL, NULL, 1),
(5, 'abc12345678de', 'Đã giao hàng', '2014-04-20', 'Ho Chi Minh, Viet Nam', '2014-04-20 15:12:12', 'ABC', 1),
(6, '1Z50464R04610', 'Đã giao hàng', '2014-04-15', 'DURACK, AU', '2014-04-15 12:36:41', 'Kenvin', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
