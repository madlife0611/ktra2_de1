-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 17, 2022 lúc 04:41 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ktra_de1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop`
--

CREATE TABLE `lop` (
  `malop` int(11) NOT NULL,
  `tenlop` varchar(100) NOT NULL,
  `giaoviencn` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `lop`
--

INSERT INTO `lop` (`malop`, `tenlop`, `giaoviencn`) VALUES
(1, 'Hệ thống thông tin 01', 'Nguyễn Văn A'),
(2, 'Hệ thống thông tin 02', 'NVB'),
(3, 'Công nghệ thông tin 01', 'Phạm Đức Minh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sv`
--

CREATE TABLE `sv` (
  `masv` int(11) NOT NULL,
  `hoten` varchar(100) NOT NULL,
  `ngaysinh` varchar(50) NOT NULL,
  `quequan` varchar(100) NOT NULL,
  `dantoc` varchar(100) NOT NULL,
  `malop` int(11) NOT NULL,
  `gioitinh` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sv`
--

INSERT INTO `sv` (`masv`, `hoten`, `ngaysinh`, `quequan`, `dantoc`, `malop`, `gioitinh`) VALUES
(1, 'Nguyễn Văn A', '01/01/2001', 'Nam Định', 'Kinh', 1, 'Nam'),
(2, 'Nguyễn Văn B', '01/01/2001', 'Nam Định', 'Kinh', 1, 'Nam'),
(3, 'Nguyễn Văn C', '01/01/2001', 'Hưng Yên', 'Kinh', 3, 'Nữ');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`malop`);

--
-- Chỉ mục cho bảng `sv`
--
ALTER TABLE `sv`
  ADD PRIMARY KEY (`masv`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `lop`
--
ALTER TABLE `lop`
  MODIFY `malop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `sv`
--
ALTER TABLE `sv`
  MODIFY `masv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
