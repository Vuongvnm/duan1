-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 28, 2024 at 04:23 PM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `du_an_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `bai_viet`
--

DROP TABLE IF EXISTS `bai_viet`;
CREATE TABLE IF NOT EXISTS `bai_viet` (
  `id_bv` int NOT NULL AUTO_INCREMENT,
  `ten_bai_viet` varchar(254) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `tom_tat` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `noi_dung` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `hinh_anh` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `id_tt` int NOT NULL,
  PRIMARY KEY (`id_bv`),
  KEY `id_baiviet_tintuc` (`id_tt`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `bai_viet`
--

INSERT INTO `bai_viet` (`id_bv`, `ten_bai_viet`, `tom_tat`, `noi_dung`, `hinh_anh`, `id_tt`) VALUES
(1, 'Thời trang mới', 'Giảm giá ', 'Giảm giá lớn', 'null', 5),
(2, 'Thời trang mới', 'Giảm giá ', 'Giảm giá lớn', 'null', 5),
(3, 'Thời trang mới', 'Giảm giá ', 'Giảm giá lớn', 'null', 6),
(4, 'Thời trang mới', 'Giảm giá ', 'Giảm giá lớn', 'null', 7),
(5, 'Thời trang mới', 'Giảm giá ', 'Giảm giá lớn', 'null', 8),
(6, 'Giảm giá mùa thu2', 'Giảm giá 2', 'Giảm giá lớn2', 'f7.jpg', 7),
(8, 'Giảm giá mùa hè', '50% giảm giá', '50% giảm giá', 'f5.jpg', 6);

-- --------------------------------------------------------

--
-- Table structure for table `binh_luan`
--

DROP TABLE IF EXISTS `binh_luan`;
CREATE TABLE IF NOT EXISTS `binh_luan` (
  `id_bl` int NOT NULL AUTO_INCREMENT,
  `noi_dung` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `ngay_tao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_hd` int NOT NULL,
  `id_tk` int NOT NULL,
  PRIMARY KEY (`id_bl`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `binh_luan`
--

INSERT INTO `binh_luan` (`id_bl`, `noi_dung`, `ngay_tao`, `id_hd`, `id_tk`) VALUES
(2, 'Đậm là trà nhạt cũng là trà, nóng thì hương tỏa nhạt thì hương tan', '2024-03-28 10:06:29', 2, 1),
(3, 'Are you Charlie Puth?\r\nI\'m not Selena Gomez,\r\nThen why tf we don\'t talk anymore???', '2024-03-28 10:17:48', 3, 3),
(4, 'Hồng trần như mộng, người tỉnh mộng tan\r\nNhân duyên như kịch, người tản kịch tan', '2024-03-28 10:17:48', 4, 4),
(5, 'Hãy cứ khóc nếu bạn muốn\r\nHãy để những giọt lệ, cuốn trôi đi nỗi buồn sâu thẳm trong bạn\r\nHãy trút bỏ mọi buồn phiền\r\nVà để con tim vui trở lại \r\nTôi sẽ ở bên bạn là luôn bảo vệ bạn \r\nXin hãy ở lại bên tôi \r\nĐúng vậy, cảm giác như tôi chưa từng trân trọng giây phút này đúng nghĩa\r\nBấy lâu nay tôi đã quên, gia đình yêu thương mình biết bao\r\nNhững người luôn quan tâm đến tôi', '2024-03-28 10:17:48', 5, 5),
(6, 'Are you 14\r\nYou are the 1 4 me:)))', '2024-03-28 10:17:48', 6, 3),
(7, 'Em biết mùa hè có màu gì không?\r\nTôi tự hỏi, nếu tia nắng chói chang của hòn lửa kia lọt vào đôi mắt xanh biếc đó của em, thì liệu mùa hè có màu gì. Mùa hè năm đó có tiếng ve kêu rôm rả, mùi quả chín thoang thoảng trong gió,  trong tôi, mùa hè có màu nỗi nhớ. Bởi trong căn phòng nóng nực có tiếng nhạc du dương, tôi bắt gặp em với dáng vẻ hiền từ và trìu mến, cứ như thể tim tôi hụt mất vài nhịp, rồi tôi bắt đầu thương, bắt đầu nhớ. Cái tiết trời ấy hình như đã quay lại ba lần rồi, lần nào tôi cũng ngóng, lần nào tôi cũng đuổi theo, ấy vậy mà có kịp với ánh sáng đâu.', '2024-03-28 10:17:48', 7, 2),
(8, 'Tôi nhớ lúc đầu hè, tôi ao ước có một căn nhà gỗ trên trên chốn đồi hoang vắng, có vườn hoa cẩm tú đủ sắc và căn phòng sách yên lặng. Ngoài cửa sổ có nắng vàng lấp ló, tôi thấy được em, và chúng ta cùng trò chuyện qua cánh cửa sổ mở toang. Bên trong căn phòng lộng gió. Đã bao lâu rồi tôi không dám mơ nữa. Có lẽ vì vậy nên mùa hè trong tôi mới có màu nỗi nhớ, có tiếng ve kêu rôm rả, có mùi sắt thoang thoảng trong không khí, có vị mặn ở đầu lưỡi.', '2024-03-28 10:17:48', 8, 4),
(9, 'tiểu hồ đồ vẫn là tiểu hồ đồ\r\nchưa dứt được\r\ndứt kiểu gì?\r\ntôi lỡ xây móng cả trăm năm rồi', '2024-03-28 10:17:48', 9, 6),
(10, 'Chỉ mong ngũ hồ minh nguyệt tạm nhẫn lại\r\nCuối cùng trả được nợ uyên ương', '2024-03-28 10:17:48', 10, 6),
(11, 'Hai ta không đi một ngả đường dài\r\nKhông chung khổ đau không chung nhịp thở\r\nNhững gì em cần, anh chẳng có\r\nEm không màng những ngọn gió anh trao.', '2024-03-28 10:17:48', 11, 1),
(12, '\"Đợi đến khi bản thân tốt hơn mới theo đuổi người mình thích liệu có muộn không? Bởi vì cảm thấy hiện tại chưa phải thời điểm thích hợp.\"\r\nCó một câu trả lời rằng: \" Thời điểm gặp nhau chưa bao giờ phân đúng sai, chỉ có chuyện bạn có đủ dũng cảm hay không thôi.\"\r\nCảm giác bất lực do thời gian mang lại dường như rất rõ ràng trong tình yêu: em rất tốt, chỉ tiếc chúng ta không gặp nhau muộn hơn; anh chưa đủ trưởng thành, nếu chúng ta gặp nhau muộn hơn thì thật tốt.', '2024-03-28 10:17:48', 12, 9);

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_hoa_don`
--

DROP TABLE IF EXISTS `chi_tiet_hoa_don`;
CREATE TABLE IF NOT EXISTS `chi_tiet_hoa_don` (
  `id_cthd` int NOT NULL AUTO_INCREMENT,
  `gia_sp` double(10,2) NOT NULL,
  `so_luong` int NOT NULL,
  `id_hd` int NOT NULL,
  `id_sp` int NOT NULL,
  PRIMARY KEY (`id_cthd`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_tai_khoan`
--

DROP TABLE IF EXISTS `chi_tiet_tai_khoan`;
CREATE TABLE IF NOT EXISTS `chi_tiet_tai_khoan` (
  `ic_cttk` int NOT NULL AUTO_INCREMENT,
  `ho_ten` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `nam_sinh` datetime NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `sdt` int NOT NULL,
  `hinh_anh` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `id_tk` int NOT NULL,
  PRIMARY KEY (`ic_cttk`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `danh_muc`
--

DROP TABLE IF EXISTS `danh_muc`;
CREATE TABLE IF NOT EXISTS `danh_muc` (
  `id_dm` int NOT NULL AUTO_INCREMENT,
  `ten_dm` varchar(225) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  PRIMARY KEY (`id_dm`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `danh_muc`
--

INSERT INTO `danh_muc` (`id_dm`, `ten_dm`) VALUES
(33, 'Gucci'),
(34, 'Prada'),
(35, 'Michaels'),
(36, 'Git'),
(37, 'Gucci3'),
(38, 'Bruno Marss'),
(39, 'Tesla'),
(40, 'Daisy Dukes');

-- --------------------------------------------------------

--
-- Table structure for table `danh_muc_tt`
--

DROP TABLE IF EXISTS `danh_muc_tt`;
CREATE TABLE IF NOT EXISTS `danh_muc_tt` (
  `id_tt_danh_muc` int NOT NULL AUTO_INCREMENT,
  `ten_danh_muc` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  PRIMARY KEY (`id_tt_danh_muc`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `danh_muc_tt`
--

INSERT INTO `danh_muc_tt` (`id_tt_danh_muc`, `ten_danh_muc`) VALUES
(1, 'quần'),
(2, 'áo'),
(3, 'quần'),
(4, 'áo khoác');

-- --------------------------------------------------------

--
-- Table structure for table `gioi_thieu`
--

DROP TABLE IF EXISTS `gioi_thieu`;
CREATE TABLE IF NOT EXISTS `gioi_thieu` (
  `id_gt` int NOT NULL AUTO_INCREMENT,
  `tieu_de` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `noi_dung` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  PRIMARY KEY (`id_gt`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gio_hang`
--

DROP TABLE IF EXISTS `gio_hang`;
CREATE TABLE IF NOT EXISTS `gio_hang` (
  `id_gh` int NOT NULL AUTO_INCREMENT,
  `so_luong` int NOT NULL,
  `id_tknd` int NOT NULL,
  `id_sp` int NOT NULL,
  PRIMARY KEY (`id_gh`),
  KEY `fk_giohang_sanpham` (`id_sp`),
  KEY `fk_giohang_taikhoannguoidung` (`id_tknd`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `gio_hang`
--

INSERT INTO `gio_hang` (`id_gh`, `so_luong`, `id_tknd`, `id_sp`) VALUES
(1, 1, 1, 30),
(2, 1, 1, 50),
(3, 2, 1, 55),
(4, 1, 1, 45);

-- --------------------------------------------------------

--
-- Table structure for table `hoa_don`
--

DROP TABLE IF EXISTS `hoa_don`;
CREATE TABLE IF NOT EXISTS `hoa_don` (
  `id_hd` int NOT NULL AUTO_INCREMENT,
  `tong_tien` double(10,2) NOT NULL,
  `id_tk` int NOT NULL,
  `id_voucher` int NOT NULL,
  `hinh_thuc_thanh_toan` int NOT NULL,
  `tinh_trang_thanh_toan` int NOT NULL,
  PRIMARY KEY (`id_hd`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `hoa_don`
--

INSERT INTO `hoa_don` (`id_hd`, `tong_tien`, `id_tk`, `id_voucher`, `hinh_thuc_thanh_toan`, `tinh_trang_thanh_toan`) VALUES
(1, 123151.00, 6, 1, 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `kho_anh`
--

DROP TABLE IF EXISTS `kho_anh`;
CREATE TABLE IF NOT EXISTS `kho_anh` (
  `id_ha` int NOT NULL AUTO_INCREMENT,
  `ten_ha` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `id_sp` int NOT NULL,
  PRIMARY KEY (`id_ha`),
  KEY `fk_sanpham_hinhanh` (`id_sp`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `kho_anh`
--

INSERT INTO `kho_anh` (`id_ha`, `ten_ha`, `id_sp`) VALUES
(1, 'f1.jpg', 49),
(2, 'f1.jpg', 49),
(3, 'f1.jpg', 49),
(4, 'f1.jpg', 49),
(5, 'f1.jpg', 49),
(6, 'f1.jpg', 49),
(7, 'f1.jpg', 49),
(8, 'f1.jpg', 49),
(9, 'f1.jpg', 49),
(10, 'f1.jpg', 49),
(11, 'f1.jpg', 49),
(12, 'f1.jpg', 49),
(13, 'f1.jpg', 49),
(14, 'f1.jpg', 49),
(15, 'f1.jpg', 49),
(16, 'f1.jpg', 49);

-- --------------------------------------------------------

--
-- Table structure for table `kich_co`
--

DROP TABLE IF EXISTS `kich_co`;
CREATE TABLE IF NOT EXISTS `kich_co` (
  `id_kc` int NOT NULL AUTO_INCREMENT,
  `kich_co` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  PRIMARY KEY (`id_kc`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `kich_co`
--

INSERT INTO `kich_co` (`id_kc`, `kich_co`) VALUES
(1, 'S'),
(2, 'M'),
(3, 'L'),
(4, 'XL'),
(5, 'XXL');

-- --------------------------------------------------------

--
-- Table structure for table `lien_he`
--

DROP TABLE IF EXISTS `lien_he`;
CREATE TABLE IF NOT EXISTS `lien_he` (
  `id_lh` int NOT NULL AUTO_INCREMENT,
  `sdt` int NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  PRIMARY KEY (`id_lh`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mau_sac`
--

DROP TABLE IF EXISTS `mau_sac`;
CREATE TABLE IF NOT EXISTS `mau_sac` (
  `id_ms` int NOT NULL AUTO_INCREMENT,
  `ten_ms` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  PRIMARY KEY (`id_ms`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `mau_sac`
--

INSERT INTO `mau_sac` (`id_ms`, `ten_ms`) VALUES
(19, 'Xanh'),
(20, 'Đỏ'),
(21, 'Tím'),
(22, 'Hồng'),
(23, 'Xanh nước biển'),
(24, 'Vàng'),
(25, 'Cam'),
(26, 'Nâu'),
(27, 'Đỏ thẫm 1');

-- --------------------------------------------------------

--
-- Table structure for table `san_pham`
--

DROP TABLE IF EXISTS `san_pham`;
CREATE TABLE IF NOT EXISTS `san_pham` (
  `id_sp` int NOT NULL AUTO_INCREMENT,
  `ten_sp` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `hang` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `gia_sp` double(10,2) NOT NULL,
  `xuat_xu` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `hinh_anh` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `so_luong` int NOT NULL,
  `luot_xem` int NOT NULL,
  `ghi_chu` text COLLATE utf8mb4_unicode_520_ci,
  `ngay_tao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ngay_cap_nhat` int DEFAULT NULL,
  `id_dm` int NOT NULL,
  `id_ms` int NOT NULL,
  `id_kc` int NOT NULL,
  PRIMARY KEY (`id_sp`),
  KEY `fk_sanpham_danhmuc` (`id_dm`),
  KEY `fk_sanpham_mausac` (`id_ms`),
  KEY `fk_sanpham_kichco` (`id_kc`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `san_pham`
--

INSERT INTO `san_pham` (`id_sp`, `ten_sp`, `hang`, `gia_sp`, `xuat_xu`, `hinh_anh`, `so_luong`, `luot_xem`, `ghi_chu`, `ngay_tao`, `ngay_cap_nhat`, `id_dm`, `id_ms`, `id_kc`) VALUES
(30, 'Áo dài', 'Gucci', 100000.00, 'Việt Nam', 'null', 10, 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, neque saepe. Amet veniam excepturi minima voluptas similique explicabo! Quis, error omnis. Consequatur inventore necessitatibus ullam rem nesciunt. Iure, architecto aliquid?', '2024-03-19 10:51:59', NULL, 36, 19, 3),
(31, 'Áo dài', 'Gucci', 100000.00, 'Việt Nam', 'null', 10, 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, neque saepe. Amet veniam excepturi minima voluptas similique explicabo! Quis, error omnis. Consequatur inventore necessitatibus ullam rem nesciunt. Iure, architecto aliquid?', '2024-03-19 10:51:59', NULL, 36, 19, 3),
(32, 'Áo dài', 'Gucci', 100000.00, 'Việt Nam', 'null', 10, 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, neque saepe. Amet veniam excepturi minima voluptas similique explicabo! Quis, error omnis. Consequatur inventore necessitatibus ullam rem nesciunt. Iure, architecto aliquid?', '2024-03-19 10:51:59', NULL, 36, 19, 3),
(33, 'Áo dài', 'Gucci', 100000.00, 'Việt Nam', 'null', 10, 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, neque saepe. Amet veniam excepturi minima voluptas similique explicabo! Quis, error omnis. Consequatur inventore necessitatibus ullam rem nesciunt. Iure, architecto aliquid?', '2024-03-19 10:51:59', NULL, 36, 19, 3),
(34, 'Áo dài', 'Gucci', 100000.00, 'Việt Nam', 'null', 10, 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, neque saepe. Amet veniam excepturi minima voluptas similique explicabo! Quis, error omnis. Consequatur inventore necessitatibus ullam rem nesciunt. Iure, architecto aliquid?', '2024-03-19 10:51:59', NULL, 36, 19, 3),
(35, 'Áo dài', 'Gucci', 100000.00, 'Việt Nam', 'null', 10, 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, neque saepe. Amet veniam excepturi minima voluptas similique explicabo! Quis, error omnis. Consequatur inventore necessitatibus ullam rem nesciunt. Iure, architecto aliquid?', '2024-03-19 10:51:59', NULL, 36, 19, 3),
(36, 'Áo dài', 'Gucci', 100000.00, 'Việt Nam', 'f3.jpg', 10, 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, neque saepe. Amet veniam excepturi minima voluptas similique explicabo! Quis, error omnis. Consequatur inventore necessitatibus ullam rem nesciunt. Iure, architecto aliquid?', '2024-03-19 10:51:59', NULL, 36, 19, 3),
(37, 'Áo dài', 'Gucci', 100000.00, 'Việt Nam', 'f3.jpg', 10, 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, neque saepe. Amet veniam excepturi minima voluptas similique explicabo! Quis, error omnis. Consequatur inventore necessitatibus ullam rem nesciunt. Iure, architecto aliquid?', '2024-03-19 10:51:59', NULL, 36, 19, 3),
(43, 'Quần thun', 'Gucci', 2000.00, 'Mỹ', 'f3.jpg', 80, 10, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, neque saepe. Amet veniam excepturi minima voluptas similique explicabo! Quis, error omnis. Consequatur inventore necessitatibus ullam rem nesciunt. Iure, architecto aliquid?', '2024-03-19 11:17:32', NULL, 34, 26, 2),
(44, 'Quần thun22', 'Gucci', 2000.00, 'Mỹ', 'f3.jpg', 80, 20, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, neque saepe. Amet veniam excepturi minima voluptas similique explicabo! Quis, error omnis. Consequatur inventore necessitatibus ullam rem nesciunt. Iure, architecto aliquid?', '2024-03-19 11:18:08', NULL, 34, 26, 2),
(45, 'Quần thun22', 'Gucci', 2000.00, 'Mỹ', 'f3.jpg', 80, 30, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, neque saepe. Amet veniam excepturi minima voluptas similique explicabo! Quis, error omnis. Consequatur inventore necessitatibus ullam rem nesciunt. Iure, architecto aliquid?', '2024-03-19 11:25:53', NULL, 35, 26, 3),
(46, 'Áo len', 'Gucci', 123.00, 'Trung Quốc', 'f3.jpg', 123, 40, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, neque saepe. Amet veniam excepturi minima voluptas similique explicabo! Quis, error omnis. Consequatur inventore necessitatibus ullam rem nesciunt. Iure, architecto aliquid?', '2024-03-21 09:40:49', NULL, 37, 26, 2),
(47, 'Áo len', 'Gucci', 1235512.00, 'Trung Quốc', 'f3.jpg', 5, 50, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, neque saepe. Amet veniam excepturi minima voluptas similique explicabo! Quis, error omnis. Consequatur inventore necessitatibus ullam rem nesciunt. Iure, architecto aliquid?', '2024-03-21 09:42:04', NULL, 34, 27, 3),
(48, 'Áo đẹp', 'Gucci', 1233.00, 'Trung Quốc', 'f3.jpg', 123, 60, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, neque saepe. Amet veniam excepturi minima voluptas similique explicabo! Quis, error omnis. Consequatur inventore necessitatibus ullam rem nesciunt. Iure, architecto aliquid?', '2024-03-21 09:43:53', NULL, 37, 25, 3),
(49, 'Bruno mars', 'Gucci', 5000.00, 'Hawaii', 'f3.jpg', 70, 70, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, neque saepe. Amet veniam excepturi minima voluptas similique explicabo! Quis, error omnis. Consequatur inventore necessitatibus ullam rem nesciunt. Iure, architecto aliquid?', '2024-03-21 21:24:04', NULL, 38, 26, 5),
(50, 'Pitbull', 'Gucci', 321412.00, 'Việt Nam', 'f3.jpg', 19, 80, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, neque saepe. Amet veniam excepturi minima voluptas similique explicabo! Quis, error omnis. Consequatur inventore necessitatibus ullam rem nesciunt. Iure, architecto aliquid?', '2024-03-21 22:07:59', NULL, 36, 25, 2),
(51, 'Pitbull', 'Gucci', 321412.00, 'Việt Nam', 'f3.jpg', 19, 90, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, neque saepe. Amet veniam excepturi minima voluptas similique explicabo! Quis, error omnis. Consequatur inventore necessitatibus ullam rem nesciunt. Iure, architecto aliquid?', '2024-03-23 10:23:15', NULL, 37, 25, 2),
(55, 'Pitbull', 'Gucci', 321412.00, 'Việt Nam', 'f3.jpg', 19, 100, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, neque saepe. Amet veniam excepturi minima voluptas similique explicabo! Quis, error omnis. Consequatur inventore necessitatibus ullam rem nesciunt. Iure, architecto aliquid?', '2024-03-23 10:48:18', NULL, 38, 26, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tai_khoan_nguoi_dung`
--

DROP TABLE IF EXISTS `tai_khoan_nguoi_dung`;
CREATE TABLE IF NOT EXISTS `tai_khoan_nguoi_dung` (
  `id_tknd` int NOT NULL AUTO_INCREMENT,
  `ten_dang_nhap` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `mat_khau` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `quyen` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  PRIMARY KEY (`id_tknd`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `tai_khoan_nguoi_dung`
--

INSERT INTO `tai_khoan_nguoi_dung` (`id_tknd`, `ten_dang_nhap`, `email`, `mat_khau`, `quyen`) VALUES
(1, 'lam', 'lam@gmail.com', '123', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tin_tuc`
--

DROP TABLE IF EXISTS `tin_tuc`;
CREATE TABLE IF NOT EXISTS `tin_tuc` (
  `id_tt` int NOT NULL AUTO_INCREMENT,
  `tieu_de` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  PRIMARY KEY (`id_tt`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `tin_tuc`
--

INSERT INTO `tin_tuc` (`id_tt`, `tieu_de`) VALUES
(5, 'Thời trang mới'),
(6, 'Thời trang mùa hè'),
(7, 'Thời trang mùa đông'),
(8, 'Thời trang mùa thu'),
(9, 'Thời trang mùa xuân 1');

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

DROP TABLE IF EXISTS `voucher`;
CREATE TABLE IF NOT EXISTS `voucher` (
  `id_voucher` int NOT NULL AUTO_INCREMENT,
  `ten_voucher` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `ngay_bat_dau` datetime NOT NULL,
  `ngay_ket_thuc` datetime NOT NULL,
  `so_tien_giam` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `ghi_chu` text COLLATE utf8mb4_unicode_520_ci,
  `ma_giam_gia` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `dieu_kien` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  PRIMARY KEY (`id_voucher`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `voucher`
--

INSERT INTO `voucher` (`id_voucher`, `ten_voucher`, `ngay_bat_dau`, `ngay_ket_thuc`, `so_tien_giam`, `ghi_chu`, `ma_giam_gia`, `dieu_kien`) VALUES
(1, 'ao hàng đống', '2024-03-21 03:44:51', '2024-03-21 03:44:51', '10%', 'khách hàng', '172634', 'mua trên 3 sản phẩm áo'),
(2, 'Giảm mùa hè', '2024-03-25 11:58:15', '2024-03-30 18:58:15', '50%', 'Giảm 50% với các loại hàng', 'AZ1234', 'Khách VIP'),
(3, 'Giảm mùa hè', '2024-03-25 11:58:15', '2024-03-30 18:58:15', '50%', 'Giảm 50% với các loại hàng', 'AZ1234', 'Khách VIP'),
(4, 'Giảm mùa hè', '2024-03-25 11:58:15', '2024-03-30 18:58:15', '50%', 'Giảm 50% với các loại hàng', 'AZ1234', 'Khách VIP'),
(5, 'Giảm mùa hè', '2024-03-25 11:58:15', '2024-03-30 18:58:15', '50%', 'Giảm 50% với các loại hàng', 'AZ1234', 'Khách VIP'),
(6, 'Giảm mùa hè', '2024-03-25 11:58:15', '2024-03-30 18:58:15', '50%', 'Giảm 50% với các loại hàng', 'AZ1234', 'Khách VIP'),
(7, 'Giảm mùa hè', '2024-03-25 11:58:15', '2024-03-30 18:58:15', '50%', 'Giảm 50% với các loại hàng', 'AZ1234', 'Khách VIP'),
(8, 'Giảm mùa hè', '2024-03-25 11:58:15', '2024-03-30 18:58:15', '50%', 'Giảm 50% với các loại hàng', 'AZ1234', 'Khách VIP'),
(9, 'Giảm mùa hè', '2024-03-25 11:58:15', '2024-03-30 18:58:15', '50%', 'Giảm 50% với các loại hàng', 'AZ1234', 'Khách VIP'),
(10, 'Giảm mùa hè', '2024-03-25 11:58:15', '2024-03-30 18:58:15', '50%', 'Giảm 50% với các loại hàng', 'AZ1234', 'Khách VIP'),
(11, 'Giảm mùa hè', '2024-03-25 11:58:15', '2024-03-30 18:58:15', '50%', 'Giảm 50% với các loại hàng', 'AZ1234', 'Khách VIP'),
(12, 'Giảm mùa hè', '2024-03-25 11:58:15', '2024-03-30 18:58:15', '50%', 'Giảm 50% với các loại hàng', 'AZ1234', 'Khách VIP'),
(13, 'Giảm mùa hè', '2024-03-25 11:58:15', '2024-03-30 18:58:15', '50%', 'Giảm 50% với các loại hàng', 'AZ1234', 'Khách VIP'),
(15, 'Giảm mùa xuân, hè', '2024-03-26 00:00:00', '2024-04-03 00:00:00', '12000', 'Giảm đợt 1', 'LO94343', 'Giảm cho nữ giới');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bai_viet`
--
ALTER TABLE `bai_viet`
  ADD CONSTRAINT `id_baiviet_tintuc` FOREIGN KEY (`id_tt`) REFERENCES `tin_tuc` (`id_tt`);

--
-- Constraints for table `gio_hang`
--
ALTER TABLE `gio_hang`
  ADD CONSTRAINT `fk_giohang_sanpham` FOREIGN KEY (`id_sp`) REFERENCES `san_pham` (`id_sp`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_giohang_taikhoannguoidung` FOREIGN KEY (`id_tknd`) REFERENCES `tai_khoan_nguoi_dung` (`id_tknd`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `kho_anh`
--
ALTER TABLE `kho_anh`
  ADD CONSTRAINT `fk_sanpham_hinhanh` FOREIGN KEY (`id_sp`) REFERENCES `san_pham` (`id_sp`);

--
-- Constraints for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `fk_sanpham_danhmuc` FOREIGN KEY (`id_dm`) REFERENCES `danh_muc` (`id_dm`),
  ADD CONSTRAINT `fk_sanpham_kichco` FOREIGN KEY (`id_kc`) REFERENCES `kich_co` (`id_kc`),
  ADD CONSTRAINT `fk_sanpham_mausac` FOREIGN KEY (`id_ms`) REFERENCES `mau_sac` (`id_ms`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;