-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 28, 2017 at 03:21 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

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
-- Table structure for table `dtdd`
--

DROP TABLE IF EXISTS `dtdd`;
CREATE TABLE IF NOT EXISTS `dtdd` (
  `Hang` varchar(30) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Ten` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Hinh` varchar(1000) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Gia` int(11) NOT NULL,
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

INSERT INTO `dtdd` (`Hang`, `Ten`, `Hinh`, `Gia`, `ManHinh`, `HDH`, `CameraSau`, `CameraTruoc`, `CPU`, `Ram`, `BoNhoTrong`, `TheSim`, `DungLuongPin`, `TinhTrang`, `SoLuongMua`, `DiemTB`, `LuotXem`) VALUES
('Samsung', 'Samsung Galaxy A8+', '1ZE89V-640.png', 29490000, 'Super AMOLED, 5.6\", FullHD+', 'Android 7.1', '16MP', '16MP và 8MP', 'Exynos 7885 8 nhân 64-bit', '4GB', '32GB', 'MicroSD, hỗ trợ tối đa 4GB', '300 mAh', 'moi', 20, 3, 0),
('Samsung', 'Samsung Galaxy J7+', 'samsung-galaxy-j7-plus-1-400x460.png', 25990000, 'Super AMOLED, 5.6\", FullHD+', 'Android 7', '16MP', '16MP và 8MP', 'Exynos 7885 8 nhân 64-bit', '4GB', '32GB', 'MicroSD, hỗ trợ tối đa 4GB', '300 mAh', 'moi', 10, 3, 0),
('Samsung', 'Samsung Galaxy J7 Prime', 'samsung-galaxy-j7-prime-h12-400x460.png', 12345000, 'PLS TFT LCD, 5.5\", Full HD', 'Android 6.0', '13MP', '8MP', 'Exynos 7870 8 nhân 64-bit', '3GB', '32GB', '2 Nano Sim, hỗ trợ 4G', '3300mAh', '', 40, 3, 0),
('Samsung', 'Samsung Galaxy J7 Pro', 'samsung-galaxy-j7-pro-2323-400x460.png', 12000000, 'PLS TFT LCD, 5.5\", Full HD', 'Android 6.1', '16MP', '8MP', 'Exynos 7870 8 nhân 64-bit', '3GB', '32GB', '2 Nano Sim, hỗ trợ 4G', '3300mAh', '', 50, 4, 0),
('Samsung', 'Samsung Galaxy Note 8', 'samsung-galaxy-note8-1-300x300.jpg', 16990000, 'PLS TFT LCD, 10.5\", Full HD+', 'Android 7.1', '16MP', '8MP', 'Exynos 7870 8 nhân 64-bit', '3GB', '32GB', '2 Nano Sim, hỗ trợ 4G', '3300mAh', 'chay', 70, 4, 0),
('Samsung', 'Samsung Galaxy Note Fe', 'samsung-galaxy-note-fe-ha-400x460.png', 17000000, 'PLS TFT LCD, 9.5\", Full HD', 'Android 7.0', '16MP', '8MP', 'Exynos 7870 8 nhân 64-bit', '3GB', '32GB', '2 Nano Sim, hỗ trợ 4G', '3300mAh', '', 30, 2, 0),
('Samsung', 'Samsung Galaxy S8', 'samsung-galaxy-s8-4-300x300.jpg', 18490000, 'PLS TFT LCD, 5.5\", Full HD', 'Android 7.0', '16MP', '8MP', 'Exynos 7870 8 nhân 64-bit', '3GB', '32GB', '2 Nano Sim, hỗ trợ 4G', '3300mAh', '', 45, 3, 0),
('Samsung', 'Samsung Galaxy S8+', 'samsung-galaxy-s8-plus-tim-2-400x460.png', 20490000, 'PLS TFT LCD, 6.5\", Full HD+', 'Android 7.1', '16MP', '16MP và 8MP', 'Exynos 7870 8 nhân 64-bit', '3GB', '32GB', '2 Nano Sim, hỗ trợ 4G', '3300mAh', 'Chay', 68, 5, 0),
('Samsung', 'Samsung Galaxy Tab E', 'samsung-galaxy-tab-e-96-sm-t561-400-400x400.png', 16780000, 'PLS TFT LCD, 10.5\", Full HD', 'Android 6.5', '16MP', '8MP', 'Exynos 7870 8 nhân 64-bit', '3GB', '32GB', '2 Nano Sim, hỗ trợ 4G', '3300mAh', '', 48, 3, 0),
('Samsung', 'Samsung Galaxy A5', 'samsung-galaxy-a5-2017-400x460.png', 7000000, 'PLS TFT LCD, 6\", Full HD', 'Android 6.5', '13MP', '8MP', 'Exynos 7870 8 nhân 64-bit', '3GB', '32GB', '2 Nano Sim, hỗ trợ 4G', '3300mAh', '', 47, 4, 0),
('Samsung', 'Samsung Galaxy A7', 'samsung-galaxy-a7-2017-4-400x460.png', 8499000, 'PLS TFT LCD, 6.5\", Full HD+', 'Android 6.5', '13MP', '8MP', 'Exynos 7870 8 nhân 64-bitExynos 7870 8 nhân 64-bit', '3GB', '32GB', '2 Nano Sim, hỗ trợ 4G', '3300mAh', '', 32, 3, 0),
('Samsung', 'Samsung Galaxy C9', 'samsung-galaxy-c9-pro-1-400x460.png', 9450000, 'PLS TFT LCD, 6\", Full HD', 'Android 6.5', '13MP', '8MP', 'Exynos 7870 8 nhân 64-bit', '3GB', '32GB', '2 Nano Sim, hỗ trợ 4G', '3300mAh', '', 20, 2, 0),
('Iphone', 'Iphone X 256GB', 'iphone-x-256gb-h1-2-300x300.jpg', 34790000, 'OLED, 5.8\", Super Retina', 'iOS 11', '2 camera 12MP', '7MP', 'Apple A11 Bionic 6 nhân', '3GB', '256GB', '1 Nano sim, hỗ trợ 4G', '2716mAh', 'moi', 18, 5, 0),
('Iphone', 'Iphone 6S', 'iphone-6s-128gb-hong-1-400x450.png', 15480000, 'OLED, 5\", Super Retina', 'iOS 9', '12MP', '6MP', 'Apple A11 Bionic 4 nhân', '3GB', '128GB', '1 Nano sim, hỗ trợ 4G', '2000mAh', '', 32, 4, 0),
('Iphone', 'Iphone 6S+', 'iphone-6s-plus-32gb-400x450-400x450.png', 17890000, 'OLED, 5.5\", Super Retina', 'iOS 9.1', '12MP', '6MP', 'Apple A11 Bionic 4 nhân', '3GB', '32GB', '1 Nano sim, hỗ trợ 4G', '2000mAh', 'chay', 57, 5, 0),
('Iphone', 'Iphone 7 256GB', 'iphone-7-256gb-12-300x300.jpg', 22990000, 'OLED, 5.8\", Super Retina', 'iOS 10', '12MP', '7MP', 'Apple A11 Bionic 6 nhân', '3GB', '256GB', '1 Nano sim, hỗ trợ 4G', '2500mAh', '', 35, 4, 0),
('Iphone', 'Iphone 8 256GB', 'iphone-8-256gb2-400x460.png', 25499000, 'OLED, 5.8\", Super Retina', 'iOS 10.1', '12MP', '7MP', 'Apple A11 Bionic 6 nhân', '3GB', '256GB', '1 Nano sim, hỗ trợ 4G', '2716mAh', 'chay', 60, 5, 0),
('Iphone', 'Iphone X 64GB', 'iphone-x-64gb-1-400x460.png', 29499000, 'OLED, 5.8\", Super Retina', 'iOS 11', '2 camera 12MP', '7MP', 'Apple A11 Bionic 6 nhân', '3GB', '64GB', '1 Nano sim, hỗ trợ 4G', '2716mAh', 'moi', 15, 5, 0),
('HTC', 'HTC One Me 9', 'htc-one-me9-global-gold-sepia-sketchfab-443x425.png', 6490000, 'Super LCD 5, 5.7\", Quad HD', 'Android 6.2', '12MP', '12MP', 'Qualcomm Snapdragon 821 4 nhân 64-bit', '3GB', '12GB', '1 sim, hỗ trợ 4GB', '3000mAh', 'chay', 30, 3, 0),
('HTC', 'HTC Desire 10', 'htc-desire-10-pro-400-400x460.png', 4685000, 'Super LCD 5, 5.5\"', 'Android 6.0', '12MP', '12MP', 'Qualcomm Snapdragon 821 4 nhân 64-bit', '3GB', '10GB', '1 sim, hỗ trợ 4GB', '3000mAh', '', 12, 2, 0),
('HTC', 'HTC 10 Evo', 'htc-10-evo-400-400x460.png', 3450000, 'Super LCD 5, 5\"', 'Android 6.0', '12MP', '10MP', 'Qualcomm Snapdragon 821 4 nhân 64-bit', '3MB', '8MB', '1 sim, hỗ trợ 4GB', '3000mAh', '', 18, 2, 0),
('HTC', 'HTC U11 Plus', 'htc-u11-plus-bac-h1-400x461.png', 10000000, 'Super LCD 5, 5.8\", Quad HD', 'Android 7.1', '15MP', '16MP', 'Qualcomm Snapdragon 821 4 nhân 64-bit', '4GB', '12GB', '2 Nano sim, hỗ trợ 4GB', '3500mAh', 'moi', 22, 4, 0),
('HTC', 'HTC U Play', 'htc-u-play-400x460.png', 8645000, 'Super LCD 5, 5.8\", Quad HD', 'Android 7.0', '15MP', '16MP', 'Qualcomm Snapdragon 821 4 nhân 64-bit', '4GB', '12GB', '2 Nano sim, hỗ trợ 4GB', '3500mAh', 'moi', 18, 3, 0),
('HTC', 'HTC U Ultra', 'htc-u-ultra-sapphire-400-400x460.png', 6785000, 'Super LCD 5, 5.7\"', 'Android 7.0', '12MP', '16MP', 'Qualcomm Snapdragon 821 4 nhân 64-bit', '4GB', '12GB', '2 Nano sim, hỗ trợ 4GB', '3000mAh', 'chay', 55, 4, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
