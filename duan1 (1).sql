
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
  `idSanpham` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `total_price` bigint(20) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `id_loaihang` int(11) NOT NULL,
  `idBill` int(11) NOT NULL
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
  `id_loaihang` int(11) DEFAULT NULL,
  `random_number` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `ten_sanpham`, `gia`, `anh`, `mota`, `soluong`, `id_loaihang`, `random_number`) VALUES
(12, 'Adidas Campus', 98, 'adidas_campus.jpg', '', 23, 4, 516),
(13, 'Adidas Samba', 100, 'adidas_samba.jpg', '', 12, 4, 4480),
(14, 'Adidas Yeeze 350', 120, 'adidas_yeeze350.jpg', '', 23, 4, 853),
(15, 'Adidas Yeeze 350 Black', 200, 'adidas_yeeze350Black.jpg', '', 15, 4, 826),
(16, 'Adidas Yeeze Foam', 320, 'adidas_yeezeFoam.jpg', '', 9, 4, 1570),
(17, 'Adidas AdiFom', 310, 'adidas_adFom.jpg', '', 10, 4, 5375),
(18, 'Adidas Astir', 110, 'adidas_astir.jpg', '', 15, 4, 2164),
(19, 'Adidas Campus Women', 99, 'adidas_campusWomen.jpg', '', 24, 4, 4694),
(20, 'Adidas Gazelle', 95, 'adidas_gazelle.jpg', '', 19, 4, 6979),
(21, 'Adidas Sambarose', 89, 'adidas_sambarose.jpg', '', 26, 4, 816),
(22, 'Converse Comme Des', 120, 'converse_commeDes.jpg', '', 23, 2, 3142),
(23, 'Converse 700x', 85, 'converse70Ox.jpg', '', 30, 2, 3262),
(24, 'Converse High 1970s', 95, 'converse70s.jpg', '', 18, 2, 6884),
(25, 'Converse Rick Owen', 230, 'converseRO.jpg', '', 14, 2, 4634),
(26, 'Converse WEAPON', 160, 'converseWEAPON.jpg', '', 22, 2, 2519),
(27, 'Converse Golf Le Fleur', 250, 'converGolfLeFluer.jpg', '', 11, 2, 8692),
(28, 'Converse Duck Boot', 320, 'converseDUCKBOOT.jpg', '', 17, 2, 5905),
(29, 'Converse Hike Hi', 99, 'converseHikeHi.jpg', '', 28, 2, 3451),
(30, 'Converse OFFWHITE', 299, 'converseOFFWHITE.jpg', '', 31, 2, 9539),
(31, 'Converse TURBOWPN', 400, 'converseTURBOWPN.jpg', '', 17, 2, 7341),
(32, 'Jordan 4 Thunder', 222, '$_57 (5).jpg', '', 23, 1, 8089),
(33, 'Jordan 1 High Blue', 333, 'giay-nike-air-jordan-1-retro-high-og-unc-toe-gs-fd1437-400 (2).jpg', '', 36, 1, 8423),
(34, 'Jordan 4 Marvel', 460, 'jordan1_marvel (2).jpg', '', 34, 1, 7846),
(35, 'Jordan 7', 290, 'Jordan7.jpg', '', 38, 1, 3965),
(36, 'Jordan 11', 280, 'Jordan11.jpg', '', 19, 1, 6286),
(37, 'Jordan 1 Low', 210, 'Jordan1_low.jpg', '', 25, 1, 9537),
(38, 'Jordan 1 Pink', 160, 'Jordan1_pink.jpg', '', 27, 1, 8828),
(39, 'Jordan 1 Green Low', 399, 'jordan1Green_low.jpg', '', 39, 1, 5526),
(40, 'Jordan 3', 135, 'Jordan3.jpg', '', 26, 1, 1150),
(41, 'Jordan 4', 199, 'Jordan4.jpg', '', 13, 1, 9173),
(42, 'New Balance 530', 336, 'nBalance530.jpg', '', 29, 5, 2413),
(43, 'New Balance 550', 285, 'nBalance550.jpg', '', 24, 5, 4549),
(44, 'New Balance 1960', 240, 'nBalance1906.jpg', '', 21, 5, 5505),
(45, 'New Balance 2002', 136, 'nBalance2002.jpg', '', 15, 5, 3877),
(46, 'New Balance 9060', 123, 'nBalance9060.jpg', '', 12, 5, 2871),
(47, 'New Balance 327', 222, 'nBalance327.jpg', '', 11, 5, 2726),
(48, 'New Balance 550 Pink', 214, 'nBalance550Pink.jpg', '', 19, 5, 5019),
(49, 'New Balance 574', 136, 'nBalance574.jpg', '', 32, 5, 6916),
(50, 'New Balance 990v5', 241, 'nBalance990v5.jpg', '', 22, 5, 9523),
(51, 'New Balance 991', 237, 'nBalance991.jpg', '', 38, 5, 6866),
(52, 'Nike Air Low Supreme', 299, 'nikeAirLowSupreme.jpg', '', 8, 3, 5765),
(53, 'Nike Air Max 1', 399, 'nikeAirMax1.jpg', '', 41, 3, 8224),
(54, 'Nike Dunk Low Black', 412, 'nikeDunkLowBlack.jpg', '', 32, 3, 3826),
(55, 'Nike Dunk Low Chicago', 489, 'nikeDunkLowChicago.jpg', '', 37, 3, 4460),
(56, 'Nike Dunk Low Red Swoosh', 321, 'nikeDunkLowRedSwoosh.jpg', '', 34, 3, 821),
(57, 'Nike Dunk Low 520 Pack Pink', 296, 'nikeDunkLow520PackPink.jpg', '', 16, 3, 727),
(58, 'Nike Dunk Low Black Citron Pulse', 239, 'nikeDunkLowCitronPulse.jpg', '', 14, 3, 1171),
(59, 'Nike Dunk Low Disrupt 2', 412, 'nikeDunkLowDisrupt2.jpg', '', 38, 3, 3674),
(60, 'Nike Dunk Low PRM', 499, 'nikeDunkLowPRM.jpg', '', 35, 3, 4859),
(61, 'Nike Dunk Low Solar Flare', 209, 'nikeDunkLowSolarFlare.jpg', '', 29, 3, 3274);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tag`
--

CREATE TABLE `tag` (
  `id` int(11) NOT NULL,
  `id_loaihang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tag_loaihang` (`id_loaihang`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

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

--
-- Các ràng buộc cho bảng `tag`
--
ALTER TABLE `tag`
  ADD CONSTRAINT `fk_tag_loaihang` FOREIGN KEY (`id_loaihang`) REFERENCES `loaihang` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
