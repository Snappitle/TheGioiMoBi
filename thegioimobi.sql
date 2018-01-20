create database thegioimobi;
use thegioimobi;
-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 03, 2018 at 05:23 AM
-- Server version: 5.7.19
-- PHP Version: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thegioimobi`
--

-- --------------------------------------------------------

--
-- Table structure for table `cmt`
--

DROP TABLE IF EXISTS `cmt`;
CREATE TABLE IF NOT EXISTS `cmt` (
  `ID` int(11) NOT NULL,
  `IDND` int(11) NOT NULL,
  `IDDT` int(11) NOT NULL,
  `Comment` varchar(1000) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ĐiemDanhGia` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `cmt`
--

INSERT INTO `cmt` (`ID`, `IDND`, `IDDT`, `Comment`, `ĐiemDanhGia`) VALUES
(1, 2, 1, 'Điện thoại xài rất mượt, cho 4 sao!', 4),
(2, 2, 2, 'Điện thoại xài rất mượt, cho 4 sao!', 4),
(3, 2, 3, 'Điện thoại xài rất mượt, cho 4 sao!', 4),
(4, 2, 4, 'Điện thoại xài rất mượt, cho 4 sao!', 4),
(5, 2, 5, 'Điện thoại xài rất mượt, cho 4 sao!', 4),
(6, 2, 6, 'Điện thoại xài rất đã tay, selfi đẹp.', 4),
(7, 2, 7, 'Điện thoại xài rất đã tay, selfi đẹp.', 4),
(8, 2, 8, 'Điện thoại xài rất đã tay, selfi đẹp.', 4),
(9, 2, 9, 'Điện thoại xài rất đã tay, selfi đẹp.', 4),
(10, 2, 10, 'Điện thoại xài rất đã tay, selfi đẹp.', 4),
(11, 2, 11, 'Nhìn đúng sang choảnh, xài đúng sướng ahihi.', 5),
(12, 2, 12, 'Nhìn đúng sang choảnh, xài đúng sướng ahihi.', 5),
(13, 2, 13, 'Nhìn đúng sang choảnh, xài đúng sướng ahihi.', 5),
(14, 2, 14, 'Nhìn đúng sang choảnh, xài đúng sướng ahihi.', 5),
(15, 2, 15, 'Nhìn đúng sang choảnh, xài đúng sướng ahihi.', 5),
(16, 2, 16, 'Nhìn đúng sang choảnh, xài đúng sướng ahihi.', 5),
(17, 2, 17, 'Nhìn đúng sang choảnh, xài đúng sướng ahihi.', 5),
(18, 2, 18, 'Nhìn đúng sang choảnh, xài đúng sướng ahihi.', 5),
(19, 2, 19, 'Xài ok, hợp túi tiền.', 3),
(20, 2, 20, 'Xài ok, hợp túi tiền.', 3),
(21, 3, 4, 'Điện thoại đẹp lắm, hệ điều hành rất mượt, không lắc như mấy dòng cũ, camera rõ nét. Cho 4 sao nè. ahihi', 4),
(22, 3, 5, 'Điện thoại đẹp lắm, hệ điều hành rất mượt, không lắc như mấy dòng cũ, camera rõ nét. Cho 4 sao nè. ahihi', 4),
(23, 3, 1, 'Điện thoại đẹp lắm, hệ điều hành rất mượt, không lắc như mấy dòng cũ, camera rõ nét. Cho 4 sao nè. ahihi', 4),
(24, 3, 2, 'Điện thoại đẹp lắm, hệ điều hành rất mượt, không lắc như mấy dòng cũ, camera rõ nét. Cho 4 sao nè. ahihi', 4),
(25, 3, 6, 'Điện thoại đẹp lắm, hệ điều hành rất mượt, không lắc như mấy dòng cũ, camera rõ nét. Cho 4 sao nè. ahihi', 4),
(26, 3, 7, 'Điện thoại đẹp lắm, hệ điều hành rất mượt, không lắc như mấy dòng cũ, camera rõ nét. Cho 4 sao nè. ahihi', 4),
(27, 3, 8, 'Điện thoại đẹp lắm, hệ điều hành rất mượt, không lắc như mấy dòng cũ, camera rõ nét. Cho 4 sao nè. ahihi', 4),
(28, 3, 9, 'Điện thoại đẹp lắm, hệ điều hành rất mượt, không lắc như mấy dòng cũ, camera rõ nét. Cho 4 sao nè. ahihi', 4),
(29, 3, 8, 'Điện thoại đẹp lắm, hệ điều hành rất mượt, không lắc như mấy dòng cũ, camera rõ nét. Cho 4 sao nè. ahihi', 4),
(30, 3, 9, 'Điện thoại đẹp lắm, hệ điều hành rất mượt, không lắc như mấy dòng cũ, camera rõ nét. Cho 4 sao nè. ahihi', 4),
(31, 3, 10, 'Điện thoại đẹp lắm, hệ điều hành rất mượt, không lắc như mấy dòng cũ, camera rõ nét. Cho 4 sao nè. ahihi', 4),
(32, 3, 11, 'Điện thoại tuyệt quá, có điều giá hơi cao T^T.', 4),
(33, 3, 12, 'Điện thoại tuyệt quá, có điều giá hơi cao T^T.', 4),
(34, 3, 13, 'Điện thoại tuyệt quá, có điều giá hơi cao T^T.', 4),
(35, 3, 16, 'Điện thoại tuyệt quá, có điều giá hơi cao T^T.', 4),
(36, 3, 15, 'Điện thoại tuyệt quá, có điều giá hơi cao T^T.', 4),
(37, 3, 16, 'Điện thoại tuyệt quá, có điều giá hơi cao T^T.', 4),
(38, 3, 17, 'Điện thoại tuyệt quá, có điều giá hơi cao T^T.', 4),
(39, 3, 18, 'Điện thoại tuyệt quá, có điều giá hơi cao T^T.', 4),
(40, 3, 19, 'DÒng này thấy lạ mà cũng mua về xài thử, xài thấy cũng ok, rẻ nữa.', 4),
(41, 3, 20, 'DÒng này thấy lạ mà cũng mua về xài thử, xài thấy cũng ok, rẻ nữa.', 3),
(42, 3, 21, 'DÒng này thấy lạ mà cũng mua về xài thử, xài thấy cũng ok, rẻ nữa.', 3);

-- --------------------------------------------------------

--
-- Table structure for table `dh`
--

DROP TABLE IF EXISTS `dh`;
CREATE TABLE IF NOT EXISTS `dh` (
  `IDDH` int(11) NOT NULL,
  `IDDT` int(11) NOT NULL,
  `IDND` int(11) NOT NULL,
  `NgNhap` date NOT NULL,
  PRIMARY KEY (`IDDH`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `dh`
--

INSERT INTO `dh` (`IDDH`, `IDDT`, `IDND`, `NgNhap`) VALUES
(1, 2, 3, '2018-01-01'),
(2, 6, 2, '2018-01-02');

-- --------------------------------------------------------

--
-- Table structure for table `dtdd`
--

DROP TABLE IF EXISTS `dtdd`;
CREATE TABLE IF NOT EXISTS `dtdd` (
  `IDDT` int(11) NOT NULL,
  `Hang` varchar(30) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Ten` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Hinh` varchar(1000) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Gia` int(11) NOT NULL,
  `NSX` varchar(30) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `NgayNhap` date DEFAULT NULL,
  `Loai` varchar(30) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ManHinh` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `HDH` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `CameraSau` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `CameraTruoc` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `CPU` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Ram` varchar(10) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `BoNhoTrong` varchar(10) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `TheSim` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `DungLuongPin` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `TinhTrang` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `SoLuongMua` int(11) NOT NULL,
  `DiemTB` int(11) NOT NULL,
  `LuotXem` int(11) DEFAULT NULL,
  PRIMARY KEY (`Ten`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `dtdd`
--

INSERT INTO `dtdd` (`IDDT`, `Hang`, `Ten`, `Hinh`, `Gia`, `NSX`, `NgayNhap`, `Loai`, `ManHinh`, `HDH`, `CameraSau`, `CameraTruoc`, `CPU`, `Ram`, `BoNhoTrong`, `TheSim`, `DungLuongPin`, `TinhTrang`, `SoLuongMua`, `DiemTB`, `LuotXem`) VALUES
(1, 'Samsung', 'Samsung Galaxy A8+', '1ZE89V-640.png', 29490000, 'Samsung', '2018-01-01', 'cao_cap', 'Super AMOLED, 5.6\", FullHD+', 'Android 7.1', '16MP', '16MP và 8MP', 'Exynos 7885 8 nhân 64-bit', '4GB', '32GB', 'MicroSD, hỗ trợ tối đa 4GB', '300 mAh', 'moi', 20, 3, 4),
(2, 'Samsung', 'Samsung Galaxy J7+', 'samsung-galaxy-j7-plus-1-400x460.png', 25990000, 'Samsung', '2018-01-02', 'cao_cap', 'Super AMOLED, 5.6\", FullHD+', 'Android 7', '16MP', '16MP và 8MP', 'Exynos 7885 8 nhân 64-bit', '4GB', '32GB', 'MicroSD, hỗ trợ tối đa 4GB', '300 mAh', 'moi', 10, 3, 0),
(3, 'Samsung', 'Samsung Galaxy J7 Prime', 'samsung-galaxy-j7-prime-h12-400x460.png', 12345000, 'Samsung', '2017-01-01', 'trung_cap', 'PLS TFT LCD, 5.5\", Full HD', 'Android 6.0', '13MP', '8MP', 'Exynos 7870 8 nhân 64-bit', '3GB', '32GB', '2 Nano Sim, hỗ trợ 4G', '3300mAh', 'chay', 40, 3, 2),
(4, 'Samsung', 'Samsung Galaxy J7 Pro', 'samsung-galaxy-j7-pro-2323-400x460.png', 12000000, 'Samsung', '2018-01-03', 'trung_cap', 'PLS TFT LCD, 5.5\", Full HD', 'Android 6.1', '16MP', '8MP', 'Exynos 7870 8 nhân 64-bit', '3GB', '32GB', '2 Nano Sim, hỗ trợ 4G', '3300mAh', 'moi', 50, 4, 0),
(5, 'Samsung', 'Samsung Galaxy Note 8', 'samsung-galaxy-note8-1-300x300.png', 16990000, 'Samsung', '2017-01-17', 'trung_cap', 'PLS TFT LCD, 10.5\", Full HD+', 'Android 7.1', '16MP', '8MP', 'Exynos 7870 8 nhân 64-bit', '3GB', '32GB', '2 Nano Sim, hỗ trợ 4G', '3300mAh', 'chay', 70, 4, 0),
(6, 'Samsung', 'Samsung Galaxy Note Fe', 'samsung-galaxy-note-fe-ha-400x460.png', 17000000, 'Samsung', '2017-01-10', 'trung_cap', 'PLS TFT LCD, 9.5\", Full HD', 'Android 7.0', '16MP', '8MP', 'Exynos 7870 8 nhân 64-bit', '3GB', '32GB', '2 Nano Sim, hỗ trợ 4G', '3300mAh', 'chay', 30, 2, 0),
(7, 'Samsung', 'Samsung Galaxy S8', 'samsung-galaxy-s8-4-300x300.png', 18490000, 'Samsung', '2017-01-17', 'trung_cap', 'PLS TFT LCD, 5.5\", Full HD', 'Android 7.0', '16MP', '8MP', 'Exynos 7870 8 nhân 64-bit', '3GB', '32GB', '2 Nano Sim, hỗ trợ 4G', '3300mAh', 'chay', 45, 3, 0),
(8, 'Samsung', 'Samsung Galaxy S8+', 'samsung-galaxy-s8-plus-tim-2-400x460.png', 20490000, 'Samsung', '2017-01-17', 'cao_cap', 'PLS TFT LCD, 6.5\", Full HD+', 'Android 7.1', '16MP', '16MP và 8MP', 'Exynos 7870 8 nhân 64-bit', '3GB', '32GB', '2 Nano Sim, hỗ trợ 4G', '3300mAh', 'chay', 68, 5, 0),
(9, 'Samsung', 'Samsung Galaxy Tab E', 'samsung-galaxy-tab-e-96-sm-t561-400-400x400.png', 16780000, 'Samsung', '2018-01-02', 'trung_cap', 'PLS TFT LCD, 10.5\", Full HD', 'Android 6.5', '16MP', '8MP', 'Exynos 7870 8 nhân 64-bit', '3GB', '32GB', '2 Nano Sim, hỗ trợ 4G', '3300mAh', 'moi', 48, 3, 0),
(10, 'Samsung', 'Samsung Galaxy A5', 'samsung-galaxy-a5-2017-400x460.png', 7000000, 'Samsung', '2017-01-09', 'pho_thong', 'PLS TFT LCD, 6\", Full HD', 'Android 6.5', '13MP', '8MP', 'Exynos 7870 8 nhân 64-bit', '3GB', '32GB', '2 Nano Sim, hỗ trợ 4G', '3300mAh', '', 47, 4, 0),
(11, 'Samsung', 'Samsung Galaxy A7', 'samsung-galaxy-a7-2017-4-400x460.png', 8499000, 'Samsung', '2017-01-17', 'pho_thong', 'PLS TFT LCD, 6.5\", Full HD+', 'Android 6.5', '13MP', '8MP', 'Exynos 7870 8 nhân 64-bitExynos 7870 8 nhân 64-bit', '3GB', '32GB', '2 Nano Sim, hỗ trợ 4G', '3300mAh', '', 32, 3, 0),
(12, 'Samsung', 'Samsung Galaxy C9', 'samsung-galaxy-c9-pro-1-400x460.png', 9450000, 'Samsung', '2018-01-09', 'pho_thong', 'PLS TFT LCD, 6\", Full HD', 'Android 6.5', '13MP', '8MP', 'Exynos 7870 8 nhân 64-bit', '3GB', '32GB', '2 Nano Sim, hỗ trợ 4G', '3300mAh', 'moi', 20, 2, 40),
(13, 'Iphone', 'Iphone X 256GB', 'iphone-x-256gb-h1-2-300x300.png', 34790000, 'Apple', '2018-01-09', 'cao_cap', 'OLED, 5.8\", Super Retina', 'iOS 11', '2 camera 12MP', '7MP', 'Apple A11 Bionic 6 nhân', '3GB', '256GB', '1 Nano sim, hỗ trợ 4G', '2716mAh', 'moi', 18, 5, 0),
(14, 'Iphone', 'Iphone 6S', 'iphone-6s-128gb-hong-1-400x450.png', 15480000, 'Apple', '2017-01-08', 'trung_cap', 'OLED, 5\", Super Retina', 'iOS 9', '12MP', '6MP', 'Apple A11 Bionic 4 nhân', '3GB', '128GB', '1 Nano sim, hỗ trợ 4G', '2000mAh', 'chay', 32, 4, 0),
(15, 'Iphone', 'Iphone 6S+', 'iphone-6s-plus-32gb-400x450-400x450.png', 17890000, 'Apple', '2017-01-02', 'trung_cap', 'OLED, 5.5\", Super Retina', 'iOS 9.1', '12MP', '6MP', 'Apple A11 Bionic 4 nhân', '3GB', '32GB', '1 Nano sim, hỗ trợ 4G', '2000mAh', 'chay', 57, 5, 0),
(16, 'Iphone', 'Iphone 7 256GB', 'iphone-7-256gb-12-300x300.png', 22990000, 'Apple', '2016-01-09', 'cao_cap', 'OLED, 5.8\", Super Retina', 'iOS 10', '12MP', '7MP', 'Apple A11 Bionic 6 nhân', '3GB', '256GB', '1 Nano sim, hỗ trợ 4G', '2500mAh', '', 35, 4, 0),
(17, 'Iphone', 'Iphone 8 256GB', 'iphone-8-256gb2-400x460.png', 25499000, 'Apple', '2016-01-08', 'cao_cap', 'OLED, 5.8\", Super Retina', 'iOS 10.1', '12MP', '7MP', 'Apple A11 Bionic 6 nhân', '3GB', '256GB', '1 Nano sim, hỗ trợ 4G', '2716mAh', 'chay', 60, 5, 0),
(18, 'Iphone', 'Iphone X 64GB', 'iphone-x-64gb-1-400x460.png', 29499000, 'Apple', '2018-01-11', 'cao_cap', 'OLED, 5.8\", Super Retina', 'iOS 11', '2 camera 12MP', '7MP', 'Apple A11 Bionic 6 nhân', '3GB', '64GB', '1 Nano sim, hỗ trợ 4G', '2716mAh', 'moi', 15, 5, 0),
(19, 'HTC', 'HTC One Me 9', 'htc-one-me9-global-gold-sepia-sketchfab-443x425.png', 6490000, 'HTC', '2018-01-17', 'pho_thong', 'Super LCD 5, 5.7\", Quad HD', 'Android 6.2', '12MP', '12MP', 'Qualcomm Snapdragon 821 4 nhân 64-bit', '3GB', '12GB', '1 sim, hỗ trợ 4GB', '3000mAh', 'chay', 30, 3, 8),
(20, 'HTC', 'HTC Desire 10', 'htc-desire-10-pro-400-400x460.png', 4685000, 'HTC', '2018-01-15', 'pho_thong', 'Super LCD 5, 5.5\"', 'Android 6.0', '12MP', '12MP', 'Qualcomm Snapdragon 821 4 nhân 64-bit', '3GB', '10GB', '1 sim, hỗ trợ 4GB', '3000mAh', 'moi', 12, 2, 14),
(21, 'HTC', 'HTC 10 Evo', 'htc-10-evo-400-400x460.png', 3450000, 'HTC', '2018-01-04', 'pho_thong', 'Super LCD 5, 5\"', 'Android 6.0', '12MP', '10MP', 'Qualcomm Snapdragon 821 4 nhân 64-bit', '3MB', '8MB', '1 sim, hỗ trợ 4GB', '3000mAh', '', 18, 2, 0),
(22, 'HTC', 'HTC U11 Plus', 'htc-u11-plus-bac-h1-400x461.png', 10000000, 'HTC', '2018-01-12', 'trung_cap', 'Super LCD 5, 5.8\", Quad HD', 'Android 7.1', '15MP', '16MP', 'Qualcomm Snapdragon 821 4 nhân 64-bit', '4GB', '12GB', '2 Nano sim, hỗ trợ 4GB', '3500mAh', 'moi', 22, 4, 0),
(23, 'HTC', 'HTC U Play', 'htc-u-play-400x460.png', 8645000, 'HTC', '2018-01-16', 'trung_cap', 'Super LCD 5, 5.8\", Quad HD', 'Android 7.0', '15MP', '16MP', 'Qualcomm Snapdragon 821 4 nhân 64-bit', '4GB', '12GB', '2 Nano sim, hỗ trợ 4GB', '3500mAh', 'moi', 18, 3, 0),
(24, 'HTC', 'HTC U Ultra', 'htc-u-ultra-sapphire-400-400x460.png', 6785000, 'HTC', '2018-01-03', 'pho_thong', 'Super LCD 5, 5.7\"', 'Android 7.0', '12MP', '16MP', 'Qualcomm Snapdragon 821 4 nhân 64-bit', '4GB', '12GB', '2 Nano sim, hỗ trợ 4GB', '3000mAh', 'chay', 55, 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

DROP TABLE IF EXISTS `loai`;
CREATE TABLE IF NOT EXISTS `loai` (
  `Loai` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `GiaTienTroLen` int(11) NOT NULL,
  PRIMARY KEY (`Loai`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `loai`
--

INSERT INTO `loai` (`Loai`, `GiaTienTroLen`) VALUES
('cao cap', 20000000),
('trung cap', 10000000),
('pho thong', 1000000);

-- --------------------------------------------------------

--
-- Table structure for table `nd`
--

DROP TABLE IF EXISTS `nd`;
CREATE TABLE IF NOT EXISTS `nd` (
  `IDND` int(11) NOT NULL,
  `HoTen` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `NgSinh` date NOT NULL,
  `TP` varchar(30) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `KiDanh` varchar(30) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `MatKhau` varchar(30) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ChucVu` int(11) NOT NULL,
  PRIMARY KEY (`KiDanh`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `nd`
--

INSERT INTO `nd` (`IDND`, `HoTen`, `NgSinh`, `TP`, `KiDanh`, `MatKhau`, `ChucVu`) VALUES
(1, 'Nguyễn Văn A', '2018-01-09', '', 'root', 'root', 1),
(2, 'Nguyễn Thị hoa', '2018-01-18', 'Đà Nẵng', 'Hoa ', 'hoa', 0),
(3, 'Bùi Công Chánh', '1998-01-10', 'Hà Nội', 'Chánh Chánh như hoa', 'chanh', 0),
(4, 'Võ Thị Liễu', '1984-01-16', 'Hải Phòng', 'Liễu Thị', 'lieu', 0);

-- --------------------------------------------------------

--
-- Table structure for table `nsx`
--

DROP TABLE IF EXISTS `nsx`;
CREATE TABLE IF NOT EXISTS `nsx` (
  `Ten` varchar(30) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `TruSo` varchar(30) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `NamTL` int(11) NOT NULL,
  PRIMARY KEY (`Ten`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `nsx`
--

INSERT INTO `nsx` (`Ten`, `TruSo`, `NamTL`) VALUES
('Apple', 'USA', 1982),
('Samsung', 'Korea', 1989),
('HTC', 'China', 2000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
