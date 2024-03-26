-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 26, 2024 at 03:00 AM
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
  `ten_bai_viet` varchar(254) NOT NULL,
  `tom_tat` text NOT NULL,
  `noi_dung` text NOT NULL,
  `hinh_anh` varchar(255) NOT NULL,
  `id_tt` int NOT NULL,
  PRIMARY KEY (`id_bv`),
  KEY `id_baiviet_tintuc` (`id_tt`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  `noi_dung` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `ngay_tao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `danh_gia` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `id_hd` int NOT NULL,
  `id_tk` int NOT NULL,
  PRIMARY KEY (`id_bl`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

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
  `ho_ten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `nam_sinh` datetime NOT NULL,
  `dia_chi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `sdt` int NOT NULL,
  `hinh_anh` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
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
  `ten_dm` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
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
-- Table structure for table `gioi_thieu`
--

DROP TABLE IF EXISTS `gioi_thieu`;
CREATE TABLE IF NOT EXISTS `gioi_thieu` (
  `id_gt` int NOT NULL AUTO_INCREMENT,
  `tieu_de` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `noi_dung` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  PRIMARY KEY (`id_gt`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hinh_thuc_thanh_toan`
--

DROP TABLE IF EXISTS `hinh_thuc_thanh_toan`;
CREATE TABLE IF NOT EXISTS `hinh_thuc_thanh_toan` (
  `id_httt` int NOT NULL AUTO_INCREMENT,
  `hinh_thuc` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  PRIMARY KEY (`id_httt`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `hinh_thuc_thanh_toan`
--

INSERT INTO `hinh_thuc_thanh_toan` (`id_httt`, `hinh_thuc`) VALUES
(1, 'Thanh toán khi nhận hàng'),
(2, 'Chuyển khoản ngân hàng'),
(3, 'Zalo Pay'),
(4, 'Momo Pay');

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
  `id_httt` int NOT NULL,
  `id_tttt` int NOT NULL,
  PRIMARY KEY (`id_hd`),
  KEY `id_hoadon_hinhthucthanhtoan` (`id_httt`),
  KEY `id_hoadon_tinhtrangthanhtoan` (`id_tttt`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

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
  `kich_co` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
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
  `dia_chi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `facebook` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  PRIMARY KEY (`id_lh`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mau_sac`
--

DROP TABLE IF EXISTS `mau_sac`;
CREATE TABLE IF NOT EXISTS `mau_sac` (
  `id_ms` int NOT NULL AUTO_INCREMENT,
  `ten_ms` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
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
  `ten_sp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `hang` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `gia_sp` double(10,2) NOT NULL,
  `xuat_xu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `hinh_anh` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `so_luong` int NOT NULL,
  `luot_xem` int NOT NULL,
  `ghi_chu` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
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
-- Table structure for table `tai_khoan`
--

DROP TABLE IF EXISTS `tai_khoan`;
CREATE TABLE IF NOT EXISTS `tai_khoan` (
  `id_tk` int NOT NULL AUTO_INCREMENT,
  `ten_nguoi_dung` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `mat_khau` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `quyen` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  PRIMARY KEY (`id_tk`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tinh_trang_thanh_toan`
--

DROP TABLE IF EXISTS `tinh_trang_thanh_toan`;
CREATE TABLE IF NOT EXISTS `tinh_trang_thanh_toan` (
  `id_tttt` int NOT NULL AUTO_INCREMENT,
  `tinh_trang` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  PRIMARY KEY (`id_tttt`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `tinh_trang_thanh_toan`
--

INSERT INTO `tinh_trang_thanh_toan` (`id_tttt`, `tinh_trang`) VALUES
(1, 'Đang xử lý'),
(2, 'Thanh toán thành công');

-- --------------------------------------------------------

--
-- Table structure for table `tin_tuc`
--

DROP TABLE IF EXISTS `tin_tuc`;
CREATE TABLE IF NOT EXISTS `tin_tuc` (
  `id_tt` int NOT NULL AUTO_INCREMENT,
  `tieu_de` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id_tt`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  `ten_voucher` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `ngay_bat_dau` datetime NOT NULL,
  `ngay_ket_thuc` datetime NOT NULL,
  `so_tien_giam` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `ghi_chu` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  `ma_giam_gia` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `dieu_kien` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
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
  ADD CONSTRAINT `id_baiviet_tintuc` FOREIGN KEY (`id_tt`) REFERENCES `tin_tuc` (`id_tt`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD CONSTRAINT `id_hoadon_hinhthucthanhtoan` FOREIGN KEY (`id_httt`) REFERENCES `hinh_thuc_thanh_toan` (`id_httt`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `id_hoadon_tinhtrangthanhtoan` FOREIGN KEY (`id_tttt`) REFERENCES `tinh_trang_thanh_toan` (`id_tttt`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `kho_anh`
--
ALTER TABLE `kho_anh`
  ADD CONSTRAINT `fk_sanpham_hinhanh` FOREIGN KEY (`id_sp`) REFERENCES `san_pham` (`id_sp`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `fk_sanpham_danhmuc` FOREIGN KEY (`id_dm`) REFERENCES `danh_muc` (`id_dm`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_sanpham_kichco` FOREIGN KEY (`id_kc`) REFERENCES `kich_co` (`id_kc`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_sanpham_mausac` FOREIGN KEY (`id_ms`) REFERENCES `mau_sac` (`id_ms`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
