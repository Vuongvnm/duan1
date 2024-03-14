-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 14, 2024 at 03:42 AM
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
-- Table structure for table `chitiet_hoadon`
--

DROP TABLE IF EXISTS `chitiet_hoadon`;
CREATE TABLE IF NOT EXISTS `chitiet_hoadon` (
  `id_cthd` int NOT NULL AUTO_INCREMENT,
  `gia` double(10,2) NOT NULL,
  `so_luong` int NOT NULL,
  `id_hd` int NOT NULL,
  `id_sp` int NOT NULL,
  PRIMARY KEY (`id_cthd`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chitiet_taikhoan`
--

DROP TABLE IF EXISTS `chitiet_taikhoan`;
CREATE TABLE IF NOT EXISTS `chitiet_taikhoan` (
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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `san_pham`
--

DROP TABLE IF EXISTS `san_pham`;
CREATE TABLE IF NOT EXISTS `san_pham` (
  `id_sp` int NOT NULL AUTO_INCREMENT,
  `ten_sp` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `gia_tien` double(10,2) NOT NULL,
  `xuat_su` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `so_luong` int NOT NULL,
  `kich_co` int NOT NULL,
  `ghi_chu` text COLLATE utf8mb4_unicode_520_ci,
  `ngay_tao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ngay_cap_nhat` int NOT NULL,
  PRIMARY KEY (`id_sp`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
