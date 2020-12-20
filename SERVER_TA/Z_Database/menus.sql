-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 31, 2020 lúc 06:23 AM
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
-- Cấu trúc bảng cho bảng `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `link` varchar(30) NOT NULL,
  `seq` int(10) DEFAULT NULL,
  `page_title` varchar(30) DEFAULT NULL,
  `page_title_sm` varchar(30) DEFAULT NULL,
  `icon` varchar(30) DEFAULT NULL,
  `group` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `menus`
--

INSERT INTO `menus` (`id`, `parent_id`, `name`, `link`, `seq`, `page_title`, `page_title_sm`, `icon`, `group`) VALUES
(1, 1, 'In PH_1', 'tin', 2, 'In', 'PH', 'hum', 1),
(2, 2, 'DIEU KHIEN ', 'sw', 2, 'Pins', 'of NODE', 'home', 1),
(3, 3, 'In Temp_1', 'in_hum', 3, 'Temp', 'from ESP32', 'hum', 1),
(4, 4, 'in PH_2', 'tin2', 3, 'in', 'PH_2', 'hum', 1),
(5, 5, 'in Temp_2', 'in_hum2', 3, 'Temp', 'from ESP32', 'hum', 1),
(6, 6, 'in PH_3', 'tin3', 3, 'In', 'PH_3', 'hum', 1),
(7, 7, 'in Temp_3', 'in_hum3', 3, 'Temp', 'from ESP32', 'hum', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
