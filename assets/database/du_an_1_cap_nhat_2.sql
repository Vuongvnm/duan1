-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 28, 2024 lúc 06:08 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

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
  `id_tt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `bai_viet`
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
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `id_bl` int(11) NOT NULL,
  `noi_dung` text NOT NULL,
  `ngay_tao` datetime NOT NULL DEFAULT current_timestamp(),
  `id_hd` int(11) NOT NULL,
  `id_tk` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
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
-- Cấu trúc bảng cho bảng `chi_tiet_hoa_don`
--

CREATE TABLE `chi_tiet_hoa_don` (
  `id_cthd` int(11) NOT NULL,
  `gia_sp` double(10,2) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `id_hd` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_tai_khoan`
--

CREATE TABLE `chi_tiet_tai_khoan` (
  `ic_cttk` int(11) NOT NULL,
  `ho_ten` varchar(255) NOT NULL,
  `nam_sinh` datetime NOT NULL,
  `dia_chi` varchar(255) NOT NULL,
  `sdt` int(11) NOT NULL,
  `hinh_anh` varchar(255) NOT NULL,
  `id_tk` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_muc`
--

CREATE TABLE `danh_muc` (
  `id_dm` int(11) NOT NULL,
  `ten_dm` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `danh_muc`
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
-- Cấu trúc bảng cho bảng `danh_muc_tt`
--

CREATE TABLE `danh_muc_tt` (
  `id_tt_danh_muc` int(11) NOT NULL,
  `ten_danh_muc` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `danh_muc_tt`
--

INSERT INTO `danh_muc_tt` (`id_tt_danh_muc`, `ten_danh_muc`) VALUES
(1, 'quần'),
(2, 'áo'),
(3, 'quần'),
(4, 'áo khoác');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gioi_thieu`
--

CREATE TABLE `gioi_thieu` (
  `id_gt` int(11) NOT NULL,
  `tieu_de` varchar(255) NOT NULL,
  `noi_dung` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don`
--

CREATE TABLE `hoa_don` (
  `id_hd` int(11) NOT NULL,
  `tong_tien` double(10,2) NOT NULL,
  `id_tk` int(11) NOT NULL,
  `id_voucher` int(11) NOT NULL,
  `hinh_thuc_thanh_toan` int(11) NOT NULL,
  `tinh_trang_thanh_toan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `hoa_don`
--

INSERT INTO `hoa_don` (`id_hd`, `tong_tien`, `id_tk`, `id_voucher`, `hinh_thuc_thanh_toan`, `tinh_trang_thanh_toan`) VALUES
(1, 123151.00, 6, 1, 4, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kho_anh`
--

CREATE TABLE `kho_anh` (
  `id_ha` int(11) NOT NULL,
  `ten_ha` varchar(255) NOT NULL,
  `id_sp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `kho_anh`
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
-- Cấu trúc bảng cho bảng `kich_co`
--

CREATE TABLE `kich_co` (
  `id_kc` int(11) NOT NULL,
  `kich_co` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `kich_co`
--

INSERT INTO `kich_co` (`id_kc`, `kich_co`) VALUES
(1, 'S'),
(2, 'M'),
(3, 'L'),
(4, 'XL'),
(5, 'XXL');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lien_he`
--

CREATE TABLE `lien_he` (
  `id_lh` int(11) NOT NULL,
  `sdt` int(11) NOT NULL,
  `dia_chi` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mau_sac`
--

CREATE TABLE `mau_sac` (
  `id_ms` int(11) NOT NULL,
  `ten_ms` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `mau_sac`
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
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `id_sp` int(11) NOT NULL,
  `ten_sp` varchar(255) NOT NULL,
  `hang` varchar(255) NOT NULL,
  `gia_sp` double(10,2) NOT NULL,
  `xuat_xu` varchar(255) NOT NULL,
  `hinh_anh` varchar(255) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `luot_xem` int(11) NOT NULL,
  `ghi_chu` text DEFAULT NULL,
  `ngay_tao` datetime NOT NULL DEFAULT current_timestamp(),
  `ngay_cap_nhat` int(11) DEFAULT NULL,
  `id_dm` int(11) NOT NULL,
  `id_ms` int(11) NOT NULL,
  `id_kc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
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
-- Cấu trúc bảng cho bảng `tai_khoan`
--

CREATE TABLE `tai_khoan` (
  `id_tk` int(11) NOT NULL,
  `ten_nguoi_dung` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mat_khau` varchar(255) NOT NULL,
  `quyen` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tin_tuc`
--

CREATE TABLE `tin_tuc` (
  `id_tt` int(11) NOT NULL,
  `tieu_de` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `tin_tuc`
--

INSERT INTO `tin_tuc` (`id_tt`, `tieu_de`) VALUES
(5, 'Thời trang mới'),
(6, 'Thời trang mùa hè'),
(7, 'Thời trang mùa đông'),
(8, 'Thời trang mùa thu'),
(9, 'Thời trang mùa xuân 1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `voucher`
--

CREATE TABLE `voucher` (
  `id_voucher` int(11) NOT NULL,
  `ten_voucher` varchar(255) NOT NULL,
  `ngay_bat_dau` datetime NOT NULL,
  `ngay_ket_thuc` datetime NOT NULL,
  `so_tien_giam` varchar(255) NOT NULL,
  `ghi_chu` text DEFAULT NULL,
  `ma_giam_gia` varchar(255) NOT NULL,
  `dieu_kien` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `voucher`
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
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bai_viet`
--
ALTER TABLE `bai_viet`
  ADD PRIMARY KEY (`id_bv`),
  ADD KEY `id_baiviet_tintuc` (`id_tt`);

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`id_bl`);

--
-- Chỉ mục cho bảng `chi_tiet_hoa_don`
--
ALTER TABLE `chi_tiet_hoa_don`
  ADD PRIMARY KEY (`id_cthd`);

--
-- Chỉ mục cho bảng `chi_tiet_tai_khoan`
--
ALTER TABLE `chi_tiet_tai_khoan`
  ADD PRIMARY KEY (`ic_cttk`);

--
-- Chỉ mục cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  ADD PRIMARY KEY (`id_dm`);

--
-- Chỉ mục cho bảng `danh_muc_tt`
--
ALTER TABLE `danh_muc_tt`
  ADD PRIMARY KEY (`id_tt_danh_muc`);

--
-- Chỉ mục cho bảng `gioi_thieu`
--
ALTER TABLE `gioi_thieu`
  ADD PRIMARY KEY (`id_gt`);

--
-- Chỉ mục cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`id_hd`);

--
-- Chỉ mục cho bảng `kho_anh`
--
ALTER TABLE `kho_anh`
  ADD PRIMARY KEY (`id_ha`),
  ADD KEY `fk_sanpham_hinhanh` (`id_sp`);

--
-- Chỉ mục cho bảng `kich_co`
--
ALTER TABLE `kich_co`
  ADD PRIMARY KEY (`id_kc`);

--
-- Chỉ mục cho bảng `lien_he`
--
ALTER TABLE `lien_he`
  ADD PRIMARY KEY (`id_lh`);

--
-- Chỉ mục cho bảng `mau_sac`
--
ALTER TABLE `mau_sac`
  ADD PRIMARY KEY (`id_ms`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `fk_sanpham_danhmuc` (`id_dm`),
  ADD KEY `fk_sanpham_mausac` (`id_ms`),
  ADD KEY `fk_sanpham_kichco` (`id_kc`);

--
-- Chỉ mục cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD PRIMARY KEY (`id_tk`);

--
-- Chỉ mục cho bảng `tin_tuc`
--
ALTER TABLE `tin_tuc`
  ADD PRIMARY KEY (`id_tt`);

--
-- Chỉ mục cho bảng `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`id_voucher`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bai_viet`
--
ALTER TABLE `bai_viet`
  MODIFY `id_bv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `id_bl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `chi_tiet_hoa_don`
--
ALTER TABLE `chi_tiet_hoa_don`
  MODIFY `id_cthd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chi_tiet_tai_khoan`
--
ALTER TABLE `chi_tiet_tai_khoan`
  MODIFY `ic_cttk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  MODIFY `id_dm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `danh_muc_tt`
--
ALTER TABLE `danh_muc_tt`
  MODIFY `id_tt_danh_muc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `gioi_thieu`
--
ALTER TABLE `gioi_thieu`
  MODIFY `id_gt` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `id_hd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `kho_anh`
--
ALTER TABLE `kho_anh`
  MODIFY `id_ha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `kich_co`
--
ALTER TABLE `kich_co`
  MODIFY `id_kc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `lien_he`
--
ALTER TABLE `lien_he`
  MODIFY `id_lh` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `mau_sac`
--
ALTER TABLE `mau_sac`
  MODIFY `id_ms` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  MODIFY `id_tk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tin_tuc`
--
ALTER TABLE `tin_tuc`
  MODIFY `id_tt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `voucher`
--
ALTER TABLE `voucher`
  MODIFY `id_voucher` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bai_viet`
--
ALTER TABLE `bai_viet`
  ADD CONSTRAINT `id_baiviet_tintuc` FOREIGN KEY (`id_tt`) REFERENCES `tin_tuc` (`id_tt`);

--
-- Các ràng buộc cho bảng `kho_anh`
--
ALTER TABLE `kho_anh`
  ADD CONSTRAINT `fk_sanpham_hinhanh` FOREIGN KEY (`id_sp`) REFERENCES `san_pham` (`id_sp`);

--
-- Các ràng buộc cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `fk_sanpham_danhmuc` FOREIGN KEY (`id_dm`) REFERENCES `danh_muc` (`id_dm`),
  ADD CONSTRAINT `fk_sanpham_kichco` FOREIGN KEY (`id_kc`) REFERENCES `kich_co` (`id_kc`),
  ADD CONSTRAINT `fk_sanpham_mausac` FOREIGN KEY (`id_ms`) REFERENCES `mau_sac` (`id_ms`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
