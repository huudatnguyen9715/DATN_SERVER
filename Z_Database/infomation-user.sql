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
-- Cấu trúc bảng cho bảng `infomation-user`
--

CREATE TABLE `infomation-user` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gioitinh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `infomation-user`
--

INSERT INTO `infomation-user` (`id`, `username`, `password`, `email`, `phone`, `gioitinh`) VALUES
(0, 'asdsa', 'dsdad', 'asdas', 'dasd', 'Nam'),
(0, 'trinhviluan1997', 'trinhviluan', 'trinhviluan1997@gmail.com', '0342435333', 'Nam'),
(0, '1511897', 'otfh9h', '1511897@hcmut.edu.vn', '022323232', 'Nam'),
(0, '1511897', 'otfh9h', '1511897@hcmut.edu.vn', '022323232', 'Nam'),
(0, 'asdsa', 'dsdad', 'asdas', 'dasd', 'Nam'),
(0, 'trinhviluan1997', 'trinhviluan', 'trinhviluan1997@gmail.com', '0342435333', 'Nam'),
(0, '1511897', 'otfh9h', '1511897@hcmut.edu.vn', '022323232', 'Nam'),
(0, '1511897', 'otfh9h', '1511897@hcmut.edu.vn', '022323232', 'Nam'),
(0, 'asdsa', 'dsdad', 'asdas', 'dasd', 'Nam'),
(0, 'trinhviluan1997', 'trinhviluan', 'trinhviluan1997@gmail.com', '0342435333', 'Nam'),
(0, '1511897', 'otfh9h', '1511897@hcmut.edu.vn', '022323232', 'Nam'),
(0, '1511897', 'otfh9h', '1511897@hcmut.edu.vn', '022323232', 'Nam'),
(0, 'asdsa', 'dsdad', 'asdas', 'dasd', 'Nam'),
(0, 'trinhviluan1997', 'trinhviluan', 'trinhviluan1997@gmail.com', '0342435333', 'Nam'),
(0, '1511897', 'otfh9h', '1511897@hcmut.edu.vn', '022323232', 'Nam'),
(0, '1511897', 'otfh9h', '1511897@hcmut.edu.vn', '022323232', 'Nam'),
(0, 'asdsa', 'dsdad', 'asdas', 'dasd', 'Nam'),
(0, 'trinhviluan1997', 'trinhviluan', 'trinhviluan1997@gmail.com', '0342435333', 'Nam'),
(0, '1511897', 'otfh9h', '1511897@hcmut.edu.vn', '022323232', 'Nam'),
(0, '1511897', 'otfh9h', '1511897@hcmut.edu.vn', '022323232', 'Nam');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
