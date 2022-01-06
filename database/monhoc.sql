-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 06, 2022 lúc 11:00 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `monhoc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monhoc`
--

CREATE TABLE `monhoc` (
  `mamh` varchar(10) NOT NULL,
  `ten_mh` varchar(50) DEFAULT NULL,
  `sotinchi` int(10) DEFAULT NULL,
  `sotiet_lt` int(10) DEFAULT NULL,
  `sotiet_bt` int(10) DEFAULT NULL,
  `sotiet_thtn` int(10) DEFAULT NULL,
  `sogio_tuhoc` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `monhoc`
--

INSERT INTO `monhoc` (`mamh`, `ten_mh`, `sotinchi`, `sotiet_lt`, `sotiet_bt`, `sotiet_thtn`, `sogio_tuhoc`) VALUES
('1', 'Cong Nghe Web', 3, 5, 5, 5, 5),
('2', 'He Thong Thong Tin', 3, 5, 5, 5, 5),
('3', 'Mang May Tinh', 3, 5, 5, 5, 5);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`mamh`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
