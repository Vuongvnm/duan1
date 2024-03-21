-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 21, 2024 at 02:28 AM
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
-- Table structure for table `binh_luan`
--

DROP TABLE IF EXISTS `binh_luan`;
CREATE TABLE IF NOT EXISTS `binh_luan` (
  `id_bl` int NOT NULL AUTO_INCREMENT,
  `noi_dung` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `ngay_tao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `danh_gia` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `danh_muc`
--

INSERT INTO `danh_muc` (`id_dm`, `ten_dm`) VALUES
(33, 'Gucci'),
(34, 'Prada'),
(35, 'Michaels'),
(36, 'Git'),
(37, 'Gucci3');

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
-- Table structure for table `hoa_don`
--

DROP TABLE IF EXISTS `hoa_don`;
CREATE TABLE IF NOT EXISTS `hoa_don` (
  `id_hd` int NOT NULL AUTO_INCREMENT,
  `hinh_thuc_thanh_toan` int NOT NULL,
  `tinh_trang_thanh_toan` int NOT NULL,
  `tong_tien` double(10,2) NOT NULL,
  `id_tk` int NOT NULL,
  `id_voucher` int NOT NULL,
  PRIMARY KEY (`id_hd`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

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
  `gia_sp` double(10,2) NOT NULL,
  `xuat_xu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `hinh_anh` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `so_luong` int NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `san_pham`
--

INSERT INTO `san_pham` (`id_sp`, `ten_sp`, `gia_sp`, `xuat_xu`, `hinh_anh`, `so_luong`, `ghi_chu`, `ngay_tao`, `ngay_cap_nhat`, `id_dm`, `id_ms`, `id_kc`) VALUES
(29, 'Áo dài', 100000.00, 'Việt Nam', 'null', 10, 'null', '2024-03-19 10:51:51', NULL, 36, 19, 3),
(30, 'Áo dài', 100000.00, 'Việt Nam', 'null', 10, 'null', '2024-03-19 10:51:59', NULL, 36, 19, 3),
(31, 'Áo dài', 100000.00, 'Việt Nam', 'null', 10, 'null', '2024-03-19 10:51:59', NULL, 36, 19, 3),
(32, 'Áo dài', 100000.00, 'Việt Nam', 'null', 10, 'null', '2024-03-19 10:51:59', NULL, 36, 19, 3),
(33, 'Áo dài', 100000.00, 'Việt Nam', 'null', 10, 'null', '2024-03-19 10:51:59', NULL, 36, 19, 3),
(34, 'Áo dài', 100000.00, 'Việt Nam', 'null', 10, 'null', '2024-03-19 10:51:59', NULL, 36, 19, 3),
(35, 'Áo dài', 100000.00, 'Việt Nam', 'null', 10, 'null', '2024-03-19 10:51:59', NULL, 36, 19, 3),
(36, 'Áo dài', 100000.00, 'Việt Nam', 'null', 10, 'null', '2024-03-19 10:51:59', NULL, 36, 19, 3),
(37, 'Áo dài', 100000.00, 'Việt Nam', 'null', 10, 'null', '2024-03-19 10:51:59', NULL, 36, 19, 3),
(38, 'Áo dài', 100000.00, 'Việt Nam', 'null', 10, 'null', '2024-03-19 10:51:59', NULL, 36, 19, 3),
(39, 'Áo dài', 100000.00, 'Việt Nam', 'null', 10, 'null', '2024-03-19 10:51:59', NULL, 36, 19, 3),
(40, 'Áo dài', 100000.00, 'Việt Nam', 'null', 10, 'null', '2024-03-19 10:51:59', NULL, 36, 19, 3),
(43, 'Quần thun', 2000.00, 'Mỹ', 'Array', 80, 'Nope', '2024-03-19 11:17:32', NULL, 34, 26, 2),
(44, 'Quần thun22', 2000.00, 'Mỹ', 'Array', 80, 'Nope', '2024-03-19 11:18:08', NULL, 34, 26, 2),
(45, 'Quần thun22', 2000.00, 'Mỹ', 'Array', 80, 'Nope', '2024-03-19 11:25:53', NULL, 35, 26, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tai_khoan`
--

DROP TABLE IF EXISTS `tai_khoan`;
CREATE TABLE IF NOT EXISTS `tai_khoan` (
  `id_tk` int NOT NULL AUTO_INCREMENT,
  `ten_nguoi_dung` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `mat_khau` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `quyen` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  PRIMARY KEY (`id_tk`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

DROP TABLE IF EXISTS `voucher`;
CREATE TABLE IF NOT EXISTS `voucher` (
  `id_voucher` int NOT NULL AUTO_INCREMENT,
  `ngay_bat_dau` datetime NOT NULL,
  `ngay_ket_thuc` datetime NOT NULL,
  `giam_gia` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `ghi_chu` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `ma_giam_gia` int NOT NULL,
  `dieu_kien` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `giam_toi_da` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  PRIMARY KEY (`id_voucher`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Constraints for dumped tables
--

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
