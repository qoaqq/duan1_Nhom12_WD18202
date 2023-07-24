-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th7 24, 2023 lúc 07:27 PM
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
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietbill`
--

CREATE TABLE `chitietbill` (
  `id_sanpham` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `id_loaihang` int(11) NOT NULL,
  `id_bill` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietsp`
--

CREATE TABLE `chitietsp` (
  `id` int(11) NOT NULL,
  `ten_sanpham` varchar(200) NOT NULL,
  `anh` text NOT NULL,
  `mota` text NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `id_tag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `ten_danhmuc` varchar(200) NOT NULL,
  `id_loaihang` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `ten_danhmuc`, `id_loaihang`) VALUES
(17, 'Nam', 2),
(18, 'Nữ', 1);

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
(85, 'sdfd333', '456465445', 'ewrewrwetrge', 'q.duoc5asdfasdf@gmail.com', '$2y$10$fDU/TMT.gN0hTF7YCOZe2eQi8eZ6nQun5ZRQ4EhYxA7wll8FbGzFW', '278646164_1339768013203249_8219283401960079602_n.jpg', b'0'),
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
  `id_loaihang` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `ten_sanpham`, `gia`, `anh`, `mota`, `soluong`, `id_loaihang`) VALUES
(12, 'Adidas Campus', 98, 'adidas_campus.jpg', '', 23, 4),
(13, 'Adidas Samba', 100, 'adidas_samba.jpg', '', 12, 4),
(14, 'Adidas Yeeze 350', 120, 'adidas_yeeze350.jpg', '', 23, 4),
(15, 'Adidas Yeeze 350 Black', 200, 'adidas_yeeze350Black.jpg', '', 15, 4),
(16, 'Adidas Yeeze Foam', 320, 'adidas_yeezeFoam.jpg', '', 9, 4),
(17, 'Adidas AdiFom', 310, 'adidas_adFom.jpg', '', 10, 4),
(18, 'Adidas Astir', 110, 'adidas_astir.jpg', '', 15, 4),
(19, 'Adidas Campus Women', 99, 'adidas_campusWomen.jpg', '', 24, 4),
(20, 'Adidas Gazelle', 95, 'adidas_gazelle.jpg', '', 19, 4),
(21, 'Adidas Sambarose', 89, 'adidas_sambarose.jpg', '', 26, 4),
(22, 'Converse Comme Des', 120, 'converse_commeDes.jpg', '', 23, 2),
(23, 'Converse 700x', 85, 'converse70Ox.jpg', '', 30, 2),
(24, 'Converse High 19070s', 95, 'converse70s.jpg', '', 18, 2),
(25, 'Converse Rick Owen', 230, 'converseRO.jpg', '', 14, 2),
(26, 'Converse WEAPON', 160, 'converseWEAPON.jpg', '', 22, 2),
(27, 'Converse Golf Le Fleur', 250, 'converGolfLeFluer.jpg', '', 11, 2),
(28, 'Converse Duck Boot', 320, 'converseDUCKBOOT.jpg', '', 17, 2),
(29, 'Converse Hike Hi', 99, 'converseHikeHi.jpg', '', 28, 2),
(30, 'Converse OFFWHITE', 299, 'converseOFFWHITE.jpg', '', 31, 2),
(31, 'Converse TURBOWPN', 400, 'converseTURBOWPN.jpg', '', 17, 2),
(32, 'Jordan 4 Thunder', 222, '$_57.jpg', '', 23, 1),
(33, 'Jordan 1 High Blue', 333, 'giay-nike-air-jordan-1-retro-high-og-unc-toe-gs-fd1437-400.jpg', '', 36, 1),
(34, 'Jordan 4 Marvel', 460, 'jordan1_marvel.jpg', '', 34, 1),
(35, 'Jordan 7', 290, 'Jordan7.jpg', '', 38, 1),
(36, 'Jordan 11', 280, 'Jordan11.jpg', '', 19, 1),
(37, 'Jordan 1 Low', 210, 'Jordan1_low.jpg', '', 25, 1),
(38, 'Jordan 1 Pink', 160, 'Jordan1_pink.jpg', '', 27, 1),
(39, 'Jordan 1 Green Low', 399, 'jordan1Green_low.jpg', '', 39, 1),
(40, 'Jordan 3', 135, 'Jordan3.jpg', '', 26, 1),
(41, 'Jordan 4', 199, 'Jordan4.jpg', '', 13, 1),
(42, 'New Balance 530', 336, 'nBalance530.jpg', '', 29, 5),
(43, 'New Balance 550', 285, 'nBalance550.jpg', '', 24, 5),
(44, 'New Balance 1960', 240, 'nBalance1906.jpg', '', 21, 5),
(45, 'New Balance 2002', 136, 'nBalance2002.jpg', '', 15, 5),
(46, 'New Balance 9060', 123, 'nBalance9060.jpg', '', 12, 5),
(47, 'New Balance 327', 222, 'nBalance327.jpg', '', 11, 5),
(48, 'New Balance 550 Pink', 214, 'nBalance550Pink.jpg', '', 19, 5),
(49, 'New Balance 574', 136, 'nBalance574.jpg', '', 32, 5),
(50, 'New Balance 990v5', 241, 'nBalance990v5.jpg', '', 22, 5),
(51, 'New Balance 991', 237, 'nBalance991.jpg', '', 38, 5),
(52, 'Nike Air Low Supreme', 299, 'nikeAirLowSupreme.jpg', '', 8, 3),
(53, 'Nike Air Max 1', 399, 'nikeAirMax1.jpg', '', 41, 3),
(54, 'Nike Dunk Low Black', 412, 'nikeDunkLowBlack.jpg', '', 32, 3),
(55, 'Nike Dunk Low Chicago', 489, 'nikeDunkLowChicago.jpg', '', 37, 3),
(56, 'Nike Dunk Low Red Swoosh', 321, 'nikeDunkLowRedSwoosh.jpg', '', 34, 3),
(57, 'Nike Dunk Low 520 Pack Pink', 296, 'nikeDunkLow520PackPink.jpg', '', 16, 3),
(58, 'Nike Dunk Low Black Citron Pulse', 239, 'nikeDunkLowCitronPulse.jpg', '', 14, 3),
(59, 'Nike Dunk Low Disrupt 2', 412, 'nikeDunkLowDisrupt2.jpg', '', 38, 3),
(60, 'Nike Dunk Low PRM', 499, 'nikeDunkLowPRM.jpg', '', 35, 3),
(61, 'Nike Dunk Low Solar Flare', 209, 'nikeDunkLowSolarFlare.jpg', '', 29, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tag`
--

CREATE TABLE `tag` (
  `id` int(11) NOT NULL,
  `ten_loaihang` varchar(200) NOT NULL,
  `id_loaihang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chitietsp`
--
ALTER TABLE `chitietsp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_chitietSp_sanpham` (`id_sanpham`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_loaihang_dm` (`id_loaihang`);

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
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chitietsp`
--
ALTER TABLE `chitietsp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT cho bảng `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietsp`
--
ALTER TABLE `chitietsp`
  ADD CONSTRAINT `fk_chitietSp_sanpham` FOREIGN KEY (`id_sanpham`) REFERENCES `sanpham` (`id`);

--
-- Các ràng buộc cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD CONSTRAINT `fk_loaihang_dm` FOREIGN KEY (`id_loaihang`) REFERENCES `loaihang` (`id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_loaihang_sp` FOREIGN KEY (`id_loaihang`) REFERENCES `loaihang` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
