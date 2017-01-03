-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 03, 2017 lúc 03:12 CH
-- Phiên bản máy phục vụ: 5.7.14
-- Phiên bản PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `eshopper`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `MaDanhMuc` varchar(30) NOT NULL,
  `TenDanhMuc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`MaDanhMuc`, `TenDanhMuc`) VALUES
('a', 'Áo'),
('gn', 'Giày Nam'),
('gnu', 'Giày Nữ'),
('m', 'Mũ'),
('q', 'Quần');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhanh`
--

CREATE TABLE `hinhanh` (
  `MaSanPham` varchar(30) NOT NULL,
  `HinhAnh` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `hinhanh`
--

INSERT INTO `hinhanh` (`MaSanPham`, `HinhAnh`, `created_at`, `updated_at`) VALUES
('001a', 'images/Ao/001a.jpg', '2016-12-24 20:26:25', '2016-12-24 20:26:59'),
('002a', 'images/Ao/002a.jpg', '2016-12-24 20:26:25', '2016-12-24 20:26:59'),
('003a', 'images/Ao/003a.jpg', '2016-12-24 20:26:25', '2016-12-24 20:26:59'),
('004a', 'images/Ao/004a.jpg', '2016-12-24 20:26:25', '2016-12-24 20:26:59'),
('005a', 'images/Ao/005a.jpg', '2016-12-24 20:26:25', '2016-12-24 20:26:59'),
('006gn', 'images/GiayNam/006gn.jpg', '2016-12-24 20:26:25', '2016-12-24 20:26:59'),
('007gn', 'images/GiayNam/007gn.jpg', '2016-12-24 20:26:25', '2016-12-24 20:26:59'),
('008gn', 'images/GiayNam/008gn.jpg', '2016-12-24 20:26:25', '2016-12-24 20:26:59'),
('009gn', 'images/GiayNam/009gn.jpg', '2016-12-24 20:26:25', '2016-12-24 20:26:59'),
('010gn', 'images/GiayNam/010gn.jpg', '2016-12-24 20:26:25', '2016-12-24 20:26:59'),
('011gnu', 'images/GiayNu/011gnu.jpg', '2016-12-24 20:26:25', '2016-12-24 20:26:59'),
('012gnu', 'images/GiayNu/012gnu.jpg', '2016-12-24 20:26:25', '2016-12-24 20:26:59'),
('013gnu', 'images/GiayNu/013gnu.jpg', '2016-12-24 20:26:25', '2016-12-24 20:26:59'),
('014gnu', 'images/GiayNu/014gnu.jpg', '2016-12-24 20:26:25', '2016-12-24 20:26:59'),
('015gnu', 'images/GiayNu/015gnu.jpg', '2016-12-24 20:26:25', '2016-12-24 20:26:59'),
('016m', 'images/Mu/016m.jpg', '2016-12-24 20:26:25', '2016-12-24 20:26:59'),
('017m', 'images/Mu/017m.jpg', '2016-12-24 20:26:25', '2016-12-24 20:26:59'),
('018m', 'images/Mu/018m.jpg', '2016-12-24 20:26:25', '2016-12-24 20:26:59'),
('019m', 'images/Mu/019m.jpg', '2016-12-24 20:26:25', '2016-12-24 20:26:59'),
('020m', 'images/Mu/020m.jpg', '2016-12-24 20:26:25', '2016-12-24 20:26:59'),
('021q', 'images/Quan/021q.jpg', '2016-12-24 20:26:25', '2016-12-24 20:26:59'),
('022q', 'images/Quan/022q.jpg', '2016-12-24 20:26:25', '2016-12-24 20:26:59'),
('023q', 'images/Quan/023q.jpg', '2016-12-24 20:26:25', '2016-12-24 20:26:59'),
('024q', 'images/Quan/024q.jpg', '2016-12-24 20:26:25', '2016-12-24 20:26:59'),
('025q', 'images/Quan/025q.jpg', '2016-12-24 20:26:25', '2016-12-24 20:26:59');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSanPham` varchar(30) NOT NULL,
  `MaDanhMuc` varchar(30) NOT NULL,
  `Ten` varchar(255) DEFAULT NULL,
  `Gia` int(11) DEFAULT NULL,
  `ThongTin` varchar(255) DEFAULT NULL,
  `ChatLieu` varchar(255) DEFAULT NULL,
  `ThuongHieu` varchar(20) NOT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MaSanPham`, `MaDanhMuc`, `Ten`, `Gia`, `ThongTin`, `ChatLieu`, `ThuongHieu`, `updated_at`, `created_at`, `id`) VALUES
('001a', 'a', 'Áo Khoác Da', 500000, 'Sang trọng, quý phái', 'áo da', 'VN', '2016-12-01 00:21:19', '2016-12-01 00:21:19', 115),
('002a', 'a', 'Áo Lông Cừu', 300000, 'Sang trong,dễ thương', 'Lông Cừu ', 'TQ', '2016-12-01 00:21:19', '2016-12-01 00:21:19', 116),
('003a', 'a', 'Áo Ngắn Kiểu', 100000, 'Dễ thương, cá tính', 'Voan', 'HQ', '2016-12-01 00:21:19', '2016-12-01 00:21:19', 117),
('004a', 'a', 'Áo Ngắn Kiểu Đầm', 250000, 'Sang trọng, cá tinh', 'a Thun mịn', 'US', '2016-12-01 00:21:19', '2016-12-01 00:21:19', 118),
('001a', 'a', 'Áo Khoác Da', 500000, 'Sang trọng, quý phái', 'áo da', 'VN', '2016-12-01 00:21:19', '2016-12-01 00:21:19', 119),
('002a', 'a', 'Áo Lông Cừu', 300000, 'Sang trong,dễ thương', 'Lông Cừu ', 'TQ', '2016-12-01 00:21:19', '2016-12-01 00:21:19', 120),
('003a', 'a', 'Áo Ngắn Kiểu', 100000, 'Dễ thương, cá tính', 'Voan', 'HQ', '2016-12-01 00:21:19', '2016-12-01 00:21:19', 121),
('004a', 'a', 'Áo Ngắn Kiểu Đầm', 250000, 'Sang trọng, cá tinh', 'a Thun mịn', 'US', '2016-12-01 00:21:19', '2016-12-01 00:21:19', 122),
('002a', 'a', 'Áo Lông Cừu', 300000, 'Sang trong,dễ thương', 'Lông Cừu ', 'TQ', '2016-12-01 00:21:19', '2016-12-01 00:21:19', 123),
('003a', 'a', 'Áo Ngắn Kiểu', 100000, 'Dễ thương, cá tính', 'Voan', 'HQ', '2016-12-01 00:21:19', '2016-12-01 00:21:19', 124),
('004a', 'a', 'Áo Ngắn Kiểu Đầm', 250000, 'Sang trọng, cá tinh', 'a Thun mịn', 'US', '2016-12-01 00:21:19', '2016-12-01 00:21:19', 125),
('004a', 'a', 'Áo Ngắn Kiểu Đầm', 250000, 'Sang trọng, cá tinh', 'a Thun mịn', 'US', '2016-12-01 00:21:19', '2016-12-01 00:21:19', 126),
('005a', 'a', 'Áo Ngắn Kiểu ', 100000, 'Dễ thương, phù hợp công sở', 'Voan', 'UC', '2016-12-01 00:21:19', '2016-12-01 00:21:19', 127),
('006gn', 'gn', 'Giày Da', 500000, 'Sang trọng, lịch lãm', 'da', 'VN', '2016-12-01 00:21:19', '2016-12-01 00:21:19', 128),
('007gn', 'gn', 'Giày Da', 200000, 'Sang trọng, lịch lãm', 'da', 'UC', '2016-12-01 00:21:19', '2016-12-01 00:21:19', 129),
('008gn', 'gn', 'Giày Da', 300000, 'Sang trọng, lịch lãm', 'da', 'US', '2016-12-01 00:21:19', '2016-12-01 00:21:19', 130),
('009gn', 'gn', 'Giày Da', 250000, 'Sang trọng, lịch lãm', 'da', 'HQ', '2016-12-01 00:21:19', '2016-12-01 00:21:19', 131),
('010gn', 'gn', 'Giày Da', 320000, 'Sang trọng, lịch lãm', 'da', 'TQ', '2016-12-01 00:21:19', '2016-12-01 00:21:19', 132),
('011gnu', 'gnu', 'Giày ca gót', 200000, 'Đẹp, Cá tính', 'da', 'TQ', '2016-12-01 00:21:19', '2016-12-01 00:21:19', 133),
('012gnu', 'gnu', 'Giày ca gót', 150000, 'Đẹp, Cá tính', 'da', 'VN', '2016-12-01 00:21:19', '2016-12-01 00:21:19', 134),
('013gnu', 'gnu', 'Giày ca gót', 250000, 'Đẹp, Cá tính', 'da', 'HQ', '2016-12-01 00:21:19', '2016-12-01 00:21:19', 135),
('014gnu', 'gnu', 'Giày bata', 200000, 'Đẹp, Cá tính', 'da', 'UC', '2016-12-01 00:21:19', '2016-12-01 00:21:19', 136),
('015gnu', 'gnu', 'Giày ca gót', 300000, 'Đẹp, Cá tính', 'da', 'US', '2016-12-01 00:21:19', '2016-12-01 00:21:19', 137),
('016m', 'm', 'Mũ vành nhỏ', 70000, 'Đẹp, Cá tính', 'vải bóng', 'US', '2016-12-01 00:21:19', '2016-12-01 00:21:19', 138),
('017m', 'm', 'Mũ vành lông', 90000, 'Đẹp, Cá tính', 'vải bóng', 'UC', '2016-12-01 00:21:19', '2016-12-01 00:21:19', 139),
('018m', 'm', 'Mũ lưỡi trai', 20000, 'Đẹp, Cá tính', 'vải thun', 'TQ', '2016-12-01 00:21:19', '2016-12-01 00:21:19', 140),
('019m', 'm', 'Mũ lưỡi trai', 25000, 'Đẹp, Cá tính', 'vải thun ', 'VN', '2016-12-01 00:21:19', '2016-12-01 00:21:19', 141),
('020m', 'm', 'Mũ len', 50000, 'Đẹp, Cá tính', 'vải len', 'HQ', '2016-12-01 00:21:19', '2016-12-01 00:21:19', 142),
('021q', 'q', 'Quần Công Sở', 1000000, 'Đẹp, Cá tính', 'kate', 'UC', '2016-12-01 00:21:19', '2016-12-01 00:21:19', 143),
('022q', 'q', 'Quần Công Sở', 2000000, 'Đẹp, Cá tính', 'kate', 'US', '2016-12-01 00:21:19', '2016-12-01 00:21:19', 144),
('023q', 'q', 'Quần Công Sở', 1500000, 'Đẹp, Cá tính', 'kate', 'VN', '2016-12-01 00:21:19', '2016-12-01 00:21:19', 145),
('024q', 'q', 'Quần Công Sở', 1300000, 'Đẹp, Cá tính', 'kate', 'HQ', '2016-12-01 00:21:19', '2016-12-01 00:21:19', 146),
('025q', 'q', 'Quần Công Sở', 1500000, 'Đẹp, Cá tính', 'kate', 'TQ', '2016-12-01 00:21:19', '2016-12-01 00:21:19', 147);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuonghieu`
--

CREATE TABLE `thuonghieu` (
  `ThuongHieu` varchar(20) CHARACTER SET utf8 COLLATE utf8_german2_ci NOT NULL,
  `Tenthuonghieu` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `thuonghieu`
--

INSERT INTO `thuonghieu` (`ThuongHieu`, `Tenthuonghieu`) VALUES
('FR', 'Pháp'),
('HQ', 'Hàn Quốc'),
('UC', 'Ustralia'),
('USA', 'Mỹ'),
('VN', 'Việt Nam');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(250) CHARACTER SET utf32 NOT NULL,
  `password` varchar(250) CHARACTER SET utf32 NOT NULL,
  `qhan` int(11) DEFAULT '0',
  `name` varchar(250) CHARACTER SET utf32 NOT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL,
  `remember_token` varchar(250) NOT NULL DEFAULT 'a'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `qhan`, `name`, `updated_at`, `created_at`, `remember_token`) VALUES
(4, 'maithihuynhnhu117622@gmail.com', '$2y$10$UbqaKSsp08XIiJfhVs/VcOV9p564/wQI/DY7fX3BzkmXc5oJdLkNS', 0, 'Mai Thị Huỳnh Như', '2017-01-03 07:11:29', '2017-01-02 10:51:38', 'Uuirb3eMBEGYao6kDTii0ekhHjdU7b9Swwlvocl3CGaO6Tubab6jU9udKiEv');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`MaDanhMuc`);

--
-- Chỉ mục cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD PRIMARY KEY (`MaSanPham`,`HinhAnh`),
  ADD KEY `MaSanPham` (`MaSanPham`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sanpham_ibfk_1` (`MaDanhMuc`);

--
-- Chỉ mục cho bảng `thuonghieu`
--
ALTER TABLE `thuonghieu`
  ADD PRIMARY KEY (`ThuongHieu`),
  ADD UNIQUE KEY `ThuongHieu` (`ThuongHieu`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;
--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`MaDanhMuc`) REFERENCES `danhmuc` (`MaDanhMuc`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
