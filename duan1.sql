-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 29, 2023 lúc 02:54 AM
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
-- Cơ sở dữ liệu: `duan1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `anh_sanpham`
--

CREATE TABLE `anh_sanpham` (
  `id` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `ten_anh` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `anh_sanpham`
--

INSERT INTO `anh_sanpham` (`id`, `id_sanpham`, `ten_anh`) VALUES
(1, 12, 'adidas_campus (1).jpg'),
(2, 12, 'adidas_campus (3).jpg'),
(4, 13, 'adidas_samba (2).jpg'),
(5, 13, 'adidas_samba (3).jpg'),
(6, 14, 'adidas_yeeze350 (1).jpg'),
(7, 14, 'adidas_yeeze350 (2).jpg'),
(8, 14, 'adidas_yeeze350 (3).jpg'),
(9, 15, 'adidas_yeeze350Black (1).jpg'),
(10, 15, 'adidas_yeeze350Black (2).jpg'),
(11, 15, 'adidas_yeeze350Black (3).jpg'),
(12, 16, 'adidas_yeezeFoam (1).jpg'),
(13, 16, 'adidas_yeezeFoam (2).jpg'),
(14, 16, 'adidas_yeezeFoam (3).jpg'),
(15, 17, 'adidas_adFom (1).jpg'),
(16, 17, 'adidas_adFom (2).jpg'),
(17, 17, 'adidas_adFom (3).jpg'),
(21, 19, 'adidas_campusWomen (1).jpg'),
(22, 19, 'adidas_campusWomen (2).jpg'),
(23, 19, 'adidas_campusWomen (3).jpg'),
(24, 20, 'adidas_gazelle (1).jpg'),
(25, 20, 'adidas_gazelle (2).jpg'),
(26, 20, 'adidas_gazelle (3).jpg'),
(27, 21, 'adidas_sambarose (1).jpg'),
(28, 21, 'adidas_sambarose (2).jpg'),
(29, 21, 'adidas_sambarose (3).jpg'),
(30, 22, 'converse_commeDes (1).jpg'),
(31, 22, 'converse_commeDes (2).jpg'),
(32, 22, 'converse_commeDes (3).jpg'),
(33, 23, 'converse70Ox (1).jpg'),
(34, 23, 'converse70Ox (2).jpg'),
(35, 23, 'converse70Ox (3).jpg'),
(36, 24, 'converse70s (1).jpg'),
(37, 24, 'converse70s (2).jpg'),
(38, 24, 'converse70s (3).jpg'),
(39, 25, 'converseRO (1).jpg'),
(40, 25, 'converseRO (2).jpg'),
(41, 25, 'converseRO (3).jpg'),
(43, 26, 'converseWEAPON (2).jpg'),
(44, 26, 'converseWEAPON (3).jpg'),
(45, 27, 'converGolfLeFluer (1).jpg'),
(46, 27, 'converGolfLeFluer (2).jpg'),
(48, 28, 'converseDUCKBOOT (1).jpg'),
(49, 28, 'converseDUCKBOOT (2).jpg'),
(50, 28, 'converseDUCKBOOT (3).jpg'),
(51, 29, 'converseHikeHi (1).jpg'),
(52, 29, 'converseHikeHi (2).jpg'),
(53, 29, 'converseHikeHi (3).jpg'),
(54, 30, 'converseOFFWHITE (1).jpg'),
(55, 30, 'converseOFFWHITE (2).jpg'),
(56, 30, 'converseOFFWHITE (3).jpg'),
(57, 31, 'converseTURBOWPN (1).jpg'),
(58, 31, 'converseTURBOWPN (2).jpg'),
(59, 31, 'converseTURBOWPN (3).jpg'),
(60, 32, 'S_57 (1).jpg'),
(61, 32, 'S_57 (2).jpg'),
(62, 32, 'S_57 (3).jpg'),
(63, 33, 'giay-nike-air-jordan-1-retro-high-og-unc-toe-gs-fd1437-400 (1).jpg'),
(65, 33, 'giay-nike-air-jordan-1-retro-high-og-unc-toe-gs-fd1437-400 (3).jpg'),
(66, 34, 'jordan1_marvel (1).jpg'),
(68, 34, 'jordan1_marvel (3).jpg'),
(69, 35, 'Jordan7 (1).jpg'),
(70, 35, 'Jordan7 (2).jpg'),
(71, 35, 'Jordan7 (3).jpg'),
(72, 36, 'Jordan11 (1).jpg'),
(73, 36, 'Jordan11 (2).jpg'),
(74, 36, 'Jordan11 (3).jpg'),
(75, 37, 'Jordan1_low (1).jpg'),
(76, 37, 'Jordan1_low (2).jpg'),
(79, 38, 'Jordan1_pink (2).jpg'),
(80, 38, 'Jordan1_pink (3).jpg'),
(81, 39, 'jordan1Green_low (1).jpg'),
(82, 39, 'jordan1Green_low (2).jpg'),
(83, 39, 'jordan1Green_low (3).jpg'),
(84, 40, 'Jordan3 (1).jpg'),
(85, 40, 'Jordan3 (2).jpg'),
(86, 40, 'Jordan3 (3).jpg'),
(87, 41, 'Jordan4 (1).jpg'),
(90, 42, 'nBalance530 (1).jpg'),
(91, 42, 'nBalance530 (2).jpg'),
(92, 42, 'nBalance530 (3).jpg'),
(93, 43, 'nBalance550 (1).jpg'),
(94, 43, 'nBalance550 (2).jpg'),
(95, 43, 'nBalance550 (3).jpg'),
(96, 44, 'nBalance1906 (1).jpg'),
(97, 44, 'nBalance1906 (2).jpg'),
(98, 44, 'nBalance1906 (3).jpg'),
(99, 45, 'nBalance2002 (1).jpg'),
(100, 45, 'nBalance2002 (2).jpg'),
(101, 45, 'nBalance2002 (3).jpg'),
(102, 46, 'nBalance9060 (1).jpg'),
(103, 46, 'nBalance9060 (2).jpg'),
(104, 46, 'nBalance9060 (3).jpg'),
(105, 47, 'nBalance327 (1).jpg'),
(106, 47, 'nBalance327 (2).jpg'),
(107, 47, 'nBalance327 (3).jpg'),
(109, 48, 'nBalance550White (2).jpg'),
(110, 48, 'nBalance550White (3).jpg'),
(111, 49, 'nBalance574 (1).jpg'),
(112, 49, 'nBalance574 (2).jpg'),
(113, 49, 'nBalance574 (3).jpg'),
(114, 50, 'nBalance990v5 (1).jpg'),
(115, 50, 'nBalance990v5 (2).jpg'),
(116, 50, 'nBalance990v5 (3).jpg'),
(117, 51, 'nBalance991 (1).jpg'),
(118, 51, 'nBalance991 (2).jpg'),
(120, 52, 'nikeAirLowSupreme (1).jpg'),
(121, 52, 'nikeAirLowSupreme (2).jpg'),
(122, 52, 'nikeAirLowSupreme (3).jpg'),
(123, 53, 'nikeAirMax1 (1).jpg'),
(124, 53, 'nikeAirMax1 (2).jpg'),
(126, 54, 'nikeDunkLowBlack (1).jpg'),
(128, 54, 'nikeDunkLowBlack (2).jpg'),
(134, 54, 'nikeDunkLowBlack (3).jpg'),
(135, 55, 'nikeDunkLowChicago (1).jpg'),
(136, 55, 'nikeDunkLowChicago (2).jpg'),
(137, 55, 'nikeDunkLowChicago (3).jpg'),
(138, 56, 'nikeDunkLowRedSwoosh (1).jpg'),
(139, 56, 'nikeDunkLowRedSwoosh (2).jpg'),
(140, 56, 'nikeDunkLowRedSwoosh (3).jpg'),
(141, 57, 'nikeDunkLow520PackPink (1).jpg'),
(142, 57, 'nikeDunkLow520PackPink (2).jpg'),
(143, 57, 'nikeDunkLow520PackPink (3).jpg'),
(144, 58, 'nikeDunkLowCitronPulse (1).jpg'),
(146, 58, 'nikeDunkLowCitronPulse (3).jpg'),
(147, 59, 'nikeDunkLowDisrupt2 (1).jpg'),
(148, 59, 'nikeDunkLowDisrupt2 (2).jpg'),
(149, 59, 'nikeDunkLowDisrupt2 (3).jpg'),
(150, 60, 'nikeDunkLowPRM (1).jpg'),
(151, 60, 'nikeDunkLowPRM (2).jpg'),
(153, 61, 'nikeDunkLowSolarFlare (1).jpg'),
(154, 61, 'nikeDunkLowSolarFlare (2).jpg'),
(155, 61, 'nikeDunkLowSolarFlare (3).jpg'),
(156, 90, 'adidas_astir (1).jpg'),
(157, 90, 'adidas_astir (2).jpg'),
(158, 90, 'adidas_astir (3).jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `ngay_tao` date NOT NULL DEFAULT current_timestamp(),
  `status` enum('Đã thanh toán','Chưa thanh toán','','') NOT NULL DEFAULT 'Chưa thanh toán'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietbill`
--

CREATE TABLE `chitietbill` (
  `id` int(11) NOT NULL,
  `id_bill` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `size` int(10) NOT NULL,
  `soluong` int(11) NOT NULL,
  `total_price` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietsp`
--

CREATE TABLE `chitietsp` (
  `id` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `id_tag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietsp`
--

INSERT INTO `chitietsp` (`id`, `id_sanpham`, `id_tag`) VALUES
(46, 12, 3),
(47, 13, 3),
(48, 14, 3),
(49, 15, 3),
(50, 16, 3),
(51, 17, 3),
(53, 19, 3),
(54, 20, 3),
(55, 21, 3),
(56, 22, 4),
(57, 23, 4),
(58, 24, 4),
(59, 25, 4),
(60, 26, 4),
(61, 27, 4),
(62, 28, 4),
(63, 29, 4),
(64, 30, 4),
(65, 31, 4),
(66, 32, 3),
(67, 33, 3),
(68, 34, 3),
(69, 35, 3),
(70, 36, 3),
(71, 37, 3),
(72, 38, 3),
(73, 39, 3),
(74, 40, 3),
(75, 41, 3),
(76, 42, 4),
(77, 43, 4),
(78, 44, 4),
(79, 45, 4),
(80, 46, 4),
(81, 47, 4),
(82, 48, 4),
(83, 49, 4),
(84, 50, 4),
(85, 51, 4),
(86, 52, 3),
(87, 53, 3),
(88, 54, 3),
(89, 55, 3),
(90, 56, 3),
(91, 57, 3),
(92, 58, 3),
(93, 59, 3),
(94, 60, 3),
(95, 61, 3),
(96, 90, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `ten_danhmuc` varchar(200) NOT NULL,
  `id_gioitinhLoaihang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `ten_danhmuc`, `id_gioitinhLoaihang`) VALUES
(19, 'Men', 1),
(20, 'Men', 2),
(21, 'Men', 3),
(22, 'Women', 4),
(23, 'Women', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gioitinh`
--

CREATE TABLE `gioitinh` (
  `id` int(11) NOT NULL,
  `ten_gioitinh` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `gioitinh`
--

INSERT INTO `gioitinh` (`id`, `ten_gioitinh`) VALUES
(1, 'Men'),
(2, 'Women');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gioitinh_loaihang`
--

CREATE TABLE `gioitinh_loaihang` (
  `id` int(11) NOT NULL,
  `id_gioitinh` int(11) NOT NULL,
  `id_loaihang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `gioitinh_loaihang`
--

INSERT INTO `gioitinh_loaihang` (`id`, `id_gioitinh`, `id_loaihang`) VALUES
(1, 1, 1),
(2, 1, 4),
(3, 1, 3),
(4, 2, 5),
(5, 2, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(11) NOT NULL,
  `tenkh` varchar(200) NOT NULL,
  `sdt` varchar(250) NOT NULL,
  `diachi` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `anh` text NOT NULL,
  `vaitro` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id`, `tenkh`, `sdt`, `diachi`, `email`, `password`, `anh`, `vaitro`) VALUES
(84, 'Tôn Quyên', '0123456789', 'to 32427', 'q.duoc5@gmail.com', '$2y$10$K5Mf/KgMCxzeMf.RgYYGh.Zz6Bw5UTM/SZ5YPRmn85v.2TYhFAOnC', 'thumbnail.png', b'1'),
(85, 'sdfd333', '456465445', 'ewrewrwetrge', 'q.duoc5asdfasdf@gmail.com', '$2y$10$T5zEZkxhOZ1RgpTo1N.4n.jNM6TVam9ltUXSXloN9byLVB4ovYYuy', '278646164_1339768013203249_8219283401960079602_n.jpg', b'0'),
(86, 'duong lam', '0347073713', 'to 7,phan dinh phung', 'q.duoc5@gmail.com', '$2y$10$vVH/PAhEhkeQRgh.CydY4OCLUhusIF.48n0EiiR1mq1yJ1XX1.W2.', 'Picture5.png', b'0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaihang`
--

CREATE TABLE `loaihang` (
  `id` int(11) NOT NULL,
  `ten_loaihang` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loaihang`
--

INSERT INTO `loaihang` (`id`, `ten_loaihang`) VALUES
(1, 'Jordan'),
(2, 'Converse'),
(3, 'Nike'),
(4, 'Adidas'),
(5, 'New Balance');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `ten_sanpham` varchar(200) NOT NULL,
  `gia` float NOT NULL,
  `anh` text NOT NULL,
  `mota` text NOT NULL,
  `soluong` int(11) NOT NULL,
  `id_loaihang` int(11) DEFAULT NULL,
  `random_number` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `ten_sanpham`, `gia`, `anh`, `mota`, `soluong`, `id_loaihang`, `random_number`) VALUES
(12, 'Adidas Campus', 98, 'adidas_campus.jpg', '', 23, 4, 1236),
(13, 'Adidas Samba', 100, 'adidas_samba.jpg', '', 12, 4, 788),
(14, 'Adidas Yeeze 350', 120, 'adidas_yeeze350.jpg', '', 23, 4, 232),
(15, 'Adidas Yeeze 350 Black', 200, 'adidas_yeeze350Black.jpg', '', 15, 4, 8798),
(16, 'Adidas Yeeze Foam', 320, 'adidas_yeezeFoam.jpg', '', 9, 4, 3295),
(17, 'Adidas AdiFom', 310, 'adidas_adFom.jpg', '', 10, 4, 80),
(19, 'Adidas Campus Women', 99, 'adidas_campusWomen.jpg', '', 24, 4, 517),
(20, 'Adidas Gazelle', 95, 'adidas_gazelle.jpg', '', 19, 4, 2346),
(21, 'Adidas Sambarose', 89, 'adidas_sambarose.jpg', '', 26, 4, 177),
(22, 'Converse Comme Des', 120, 'converse_commeDes.jpg', '', 23, 2, 3850),
(23, 'Converse 700x', 85, 'converse70Ox.jpg', '', 30, 2, 8720),
(24, 'Converse High 1970s', 95, 'converse70s.jpg', '', 18, 2, 2050),
(25, 'Converse Rick Owen', 230, 'converseRO.jpg', '', 14, 2, 4090),
(26, 'Converse WEAPON', 160, 'converseWEAPON.jpg', '', 22, 2, 4300),
(27, 'Converse Golf Le Fleur', 250, 'converGolfLeFluer.jpg', '', 11, 2, 9232),
(28, 'Converse Duck Boot', 320, 'converseDUCKBOOT.jpg', '', 17, 2, 3258),
(29, 'Converse Hike Hi', 99, 'converseHikeHi.jpg', '', 28, 2, 8596),
(30, 'Converse OFFWHITE', 299, 'converseOFFWHITE.jpg', '', 31, 2, 3208),
(31, 'Converse TURBOWPN', 400, 'converseTURBOWPN.jpg', '', 17, 2, 249),
(32, 'Jordan 4 Thunder', 222, 'S_57.jpg', '', 23, 1, 1625),
(33, 'Jordan 1 High Blue', 333, 'giay-nike-air-jordan-1-retro-high-og-unc-toe-gs-fd1437-400 (2).jpg', '', 36, 1, 7378),
(34, 'Jordan 4 Marvel', 460, 'jordan1_marvel (2).jpg', '', 34, 1, 2014),
(35, 'Jordan 7', 290, 'Jordan7.jpg', '', 38, 1, 7937),
(36, 'Jordan 11', 280, 'Jordan11.jpg', '', 19, 1, 3645),
(37, 'Jordan 1 Low', 210, 'Jordan1_low.jpg', '', 25, 1, 4414),
(38, 'Jordan 1 Pink', 160, 'Jordan1_pink.jpg', '', 27, 1, 1134),
(39, 'Jordan 1 Green Low', 399, 'jordan1Green_low.jpg', '', 39, 1, 2431),
(40, 'Jordan 3', 135, 'Jordan3.jpg', '', 26, 1, 8753),
(41, 'Jordan 4', 199, 'Jordan4.jpg', '', 13, 1, 6472),
(42, 'New Balance 530', 336, 'nBalance530.jpg', '', 29, 5, 6101),
(43, 'New Balance 550', 285, 'nBalance550.jpg', '', 24, 5, 1089),
(44, 'New Balance 1960', 240, 'nBalance1906.jpg', '', 21, 5, 7141),
(45, 'New Balance 2002', 136, 'nBalance2002.jpg', '', 15, 5, 2440),
(46, 'New Balance 9060', 123, 'nBalance9060.jpg', '', 12, 5, 777),
(47, 'New Balance 327', 222, 'nBalance327.jpg', '', 11, 5, 6564),
(48, 'New Balance 550 White', 214, 'Untitled-1.jpg', '', 19, 5, 491),
(49, 'New Balance 574', 136, 'nBalance574.jpg', '', 32, 5, 2762),
(50, 'New Balance 990v5', 241, 'nBalance990v5.jpg', '', 22, 5, 2337),
(51, 'New Balance 991', 237, 'nBalance991.jpg', '', 38, 5, 3399),
(52, 'Nike Air Low Supreme', 299, 'nikeAirLowSupreme.jpg', '', 8, 3, 9985),
(53, 'Nike Air Max 1', 399, 'nikeAirMax1.jpg', '', 41, 3, 9731),
(54, 'Nike Dunk Low Black', 412, 'nikeDunkLowBlack.jpg', '', 32, 3, 8697),
(55, 'Nike Dunk Low Chicago', 489, 'nikeDunkLowChicago.jpg', '', 37, 3, 4296),
(56, 'Nike Dunk Low Red Swoosh', 321, 'nikeDunkLowRedSwoosh.jpg', '', 34, 3, 5388),
(57, 'Nike Dunk Low 520 Pack Pink', 296, 'nikeDunkLow520PackPink.jpg', '', 16, 3, 4053),
(58, 'Nike Dunk Low Black Citron Pulse', 239, 'nikeDunkLowCitronPulse.jpg', '', 14, 3, 4101),
(59, 'Nike Dunk Low Disrupt 2', 412, 'nikeDunkLowDisrupt2.jpg', '', 38, 3, 8346),
(60, 'Nike Dunk Low PRM', 499, 'nikeDunkLowPRM.jpg', '', 35, 3, 9429),
(61, 'Nike Dunk Low Solar Flare', 209, 'nikeDunkLowSolarFlare.jpg', '', 29, 3, 2107),
(90, 'Adidas Astir', 110, 'adidas_astir.jpg', '', 15, 4, 2248);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tag`
--

CREATE TABLE `tag` (
  `id` int(11) NOT NULL,
  `ten_tag` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tag`
--

INSERT INTO `tag` (`id`, `ten_tag`) VALUES
(1, 'giay jordan'),
(2, ' giay nike'),
(3, 'giay nam'),
(4, 'giay nu');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `anh_sanpham`
--
ALTER TABLE `anh_sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_anhsp` (`id_sanpham`);

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_kh_bill` (`id_khachhang`);

--
-- Chỉ mục cho bảng `chitietbill`
--
ALTER TABLE `chitietbill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_bill_chitietbill` (`id_bill`),
  ADD KEY `fl_sp_chitietbill` (`id_sanpham`);

--
-- Chỉ mục cho bảng `chitietsp`
--
ALTER TABLE `chitietsp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_chitietSp_sanpham` (`id_sanpham`),
  ADD KEY `fk_chitietsp_tag` (`id_tag`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dk_gioitinhLH` (`id_gioitinhLoaihang`);

--
-- Chỉ mục cho bảng `gioitinh`
--
ALTER TABLE `gioitinh`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `gioitinh_loaihang`
--
ALTER TABLE `gioitinh_loaihang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_gioitinh` (`id_gioitinh`),
  ADD KEY `fk_loaihang` (`id_loaihang`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loaihang`
--
ALTER TABLE `loaihang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_loaihang_sp` (`id_loaihang`);

--
-- Chỉ mục cho bảng `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `anh_sanpham`
--
ALTER TABLE `anh_sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chitietbill`
--
ALTER TABLE `chitietbill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chitietsp`
--
ALTER TABLE `chitietsp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `gioitinh`
--
ALTER TABLE `gioitinh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `gioitinh_loaihang`
--
ALTER TABLE `gioitinh_loaihang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT cho bảng `loaihang`
--
ALTER TABLE `loaihang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT cho bảng `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `anh_sanpham`
--
ALTER TABLE `anh_sanpham`
  ADD CONSTRAINT `fk_anhsp` FOREIGN KEY (`id_sanpham`) REFERENCES `sanpham` (`id`);

--
-- Các ràng buộc cho bảng `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `fk_kh_bill` FOREIGN KEY (`id_khachhang`) REFERENCES `khachhang` (`id`);

--
-- Các ràng buộc cho bảng `chitietbill`
--
ALTER TABLE `chitietbill`
  ADD CONSTRAINT `fk_bill_chitietbill` FOREIGN KEY (`id_bill`) REFERENCES `bill` (`id`),
  ADD CONSTRAINT `fl_sp_chitietbill` FOREIGN KEY (`id_sanpham`) REFERENCES `sanpham` (`id`);

--
-- Các ràng buộc cho bảng `chitietsp`
--
ALTER TABLE `chitietsp`
  ADD CONSTRAINT `fk_chitietSp_sanpham` FOREIGN KEY (`id_sanpham`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `fk_chitietsp_tag` FOREIGN KEY (`id_tag`) REFERENCES `tag` (`id`);

--
-- Các ràng buộc cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD CONSTRAINT `dk_gioitinhLH` FOREIGN KEY (`id_gioitinhLoaihang`) REFERENCES `gioitinh_loaihang` (`id`);

--
-- Các ràng buộc cho bảng `gioitinh_loaihang`
--
ALTER TABLE `gioitinh_loaihang`
  ADD CONSTRAINT `fk_gioitinh` FOREIGN KEY (`id_gioitinh`) REFERENCES `gioitinh` (`id`),
  ADD CONSTRAINT `fk_loaihang` FOREIGN KEY (`id_loaihang`) REFERENCES `loaihang` (`id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_loaihang_sp` FOREIGN KEY (`id_loaihang`) REFERENCES `loaihang` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
