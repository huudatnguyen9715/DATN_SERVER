-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 31, 2020 lúc 06:24 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `iot_khang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `modules`
--

CREATE TABLE `modules` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `link` varchar(30) NOT NULL,
  `description` varchar(30) DEFAULT NULL,
  `seq` int(30) DEFAULT NULL,
  `group` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `modules`
--

INSERT INTO `modules` (`id`, `name`, `link`, `description`, `seq`, `group`) VALUES
(1, 'PH_1', 'temp', 'monitoring vi luan', 2, 1),
(2, 'Device', 'pc', 'Pin control', 1, 1),
(3, 'Temp_1', 'hum', 'monitoring DO', 3, 1),
(4, 'PH_2', 'temp2', 'monitoring vi luan', 4, 1),
(5, 'Temp_2', 'hum2', 'monitoring DO', 5, 1),
(6, 'PH_3', 'temp3', 'monitoring PH', 6, 1),
(7, 'Temp_3', 'hum3', 'monitoring DO', 7, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
