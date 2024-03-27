-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 26, 2024 lúc 08:28 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `du_an_1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bai_viet`
--

CREATE TABLE `bai_viet` (
  `id_bv` int(11) NOT NULL,
  `ten_bai_viet` varchar(254) NOT NULL,
  `tom_tat` text NOT NULL,
  `noi_dung` text NOT NULL,
  `hinh_anh` varchar(255) NOT NULL,
  `id_tt` int(11) NOT NULL,
  `ngay_tao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `bai_viet`
--

INSERT INTO `bai_viet` (`id_bv`, `ten_bai_viet`, `tom_tat`, `noi_dung`, `hinh_anh`, `id_tt`, `ngay_tao`) VALUES
(1, 'Thời trang mới', 'Giảm giá ', 'Giảm giá lớn', 'null', 5, '2024-03-26 06:31:16'),
(2, 'Thời trang mới', 'Giảm giá ', 'Giảm giá lớn', 'null', 5, '2024-03-26 06:31:16'),
(3, 'Thời trang mới', 'Giảm giá ', 'Giảm giá lớn', 'null', 6, '2024-03-26 06:31:16'),
(6, 'Giảm giá mùa thu2', 'Giảm giá 2', 'Giảm giá lớn2', 'f7.jpg', 7, '2024-03-26 06:31:16'),
(8, 'Giảm giá mùa hè', '50% giảm giá', '50% giảm giá', 'f5.jpg', 6, '2024-03-26 06:31:16'),
(57, 'quan', 'dsfffffff', 'ssdffffffffffff', 'Ảnh chụp màn hình 2024-03-12 130558.png', 7, '2024-03-26 06:31:16');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bai_viet`
--
ALTER TABLE `bai_viet`
  ADD PRIMARY KEY (`id_bv`),
  ADD KEY `id_baiviet_tintuc` (`id_tt`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bai_viet`
--
ALTER TABLE `bai_viet`
  MODIFY `id_bv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bai_viet`
--
ALTER TABLE `bai_viet`
  ADD CONSTRAINT `id_baiviet_tintuc` FOREIGN KEY (`id_tt`) REFERENCES `tin_tuc` (`id_tt`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
