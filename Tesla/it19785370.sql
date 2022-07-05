-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Nov 24, 2020 at 07:19 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `it19785370`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(120) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `subject`, `content`, `date`) VALUES
(1, 'Subject is WAD', 'MySQL Insert Into Database PHP Tutorial Learn PHP Programming PHP for Beginners', '2020-11-09 15:59:01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

DROP TABLE IF EXISTS `tbl_products`;
CREATE TABLE IF NOT EXISTS `tbl_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` varchar(100) NOT NULL,
  `styleCode` varchar(10) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `category`, `name`, `image`, `styleCode`, `price`) VALUES
(33, 'shirt', 'Drawstring T-Shirt', 'shirts/7.jpg', 'SS07', 25),
(34, 'shirt', 'Drawstring T-Shirt', 'shirts/8.jpg', 'SS08', 64),
(32, 'shirt', 'Drawstring T-Shirt', 'shirts/6.jpg', 'SS06', 53),
(31, 'shirt', 'Drawstring T-Shirt', 'shirts/5.jpg', 'SS05', 32),
(29, 'shirt', 'Drawstring T-Shirt', 'shirts/3.jpg', 'SS03', 24),
(30, 'shirt', 'Drawstring T-Shirt', 'shirts/4.jpg', 'SS04', 42),
(27, 'shirt', 'Drawstring T-Shirt', 'shirts/1.jpg', 'SS01', 22),
(28, 'shirt', 'Drawstring T-Shirt', 'shirts/2.jpg', 'SS02', 32),
(26, 'trouser', 'Drawstring Trouser', 'trousers/8.jpg', 'TS08', 64),
(25, 'trouser', 'Drawstring Trouser', 'trousers/7.jpg', 'TS07', 25),
(24, 'trouser', 'Drawstring Trouser', 'trousers/6.jpg', 'TS06', 53),
(23, 'trouser', 'Drawstring Trouser', 'trousers/5.jpg', 'TS05', 32),
(22, 'trouser', 'Drawstring Trouser', 'trousers/4.jpg', 'TS04', 42),
(21, 'trouser', 'Drawstring Trouser', 'trousers/3.jpg', 'TS03', 24),
(20, 'trouser', 'Drawstring Trouser', 'trousers/2.jpg', 'TS02', 32),
(19, 'trouser', 'Drawstring Trouser', 'trousers/1.jpg', 'TS01', 22),
(35, 'blazer', 'Drawstring Blazer', 'blazers/1.jpg', 'BS01', 22),
(36, 'blazer', 'Drawstring Blazer', 'blazers/2.jpg', 'BS02', 32),
(37, 'blazer', 'Drawstring Blazer', 'blazers/3.jpg', 'BS03', 24),
(38, 'blazer', 'Drawstring Blazer', 'blazers/4.jpg', 'BS04', 42),
(39, 'blazer', 'Drawstring Blazer', 'blazers/5.jpg', 'BS05', 32),
(40, 'blazer', 'Drawstring Blazer', 'blazers/6.jpg', 'BS06', 53),
(41, 'blazer', 'Drawstring Blazer', 'blazers/7.png', 'BS07', 25),
(42, 'blazer', 'Drawstring Blazer', 'blazers/8.png', 'BS08', 64);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shirts`
--

DROP TABLE IF EXISTS `tbl_shirts`;
CREATE TABLE IF NOT EXISTS `tbl_shirts` (
  `StyleCode` varchar(10) NOT NULL,
  `BustChest` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Waist` varchar(20) NOT NULL,
  `BottomHem` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Collar` varchar(20) NOT NULL,
  `Sleevlenght` varchar(20) NOT NULL,
  `Shoulder` varchar(20) NOT NULL,
  `Backlenght` int(11) NOT NULL,
  `Frontlenght` varchar(20) NOT NULL,
  `UserId` int(11) NOT NULL,
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_shirts`
--

INSERT INTO `tbl_shirts` (`StyleCode`, `BustChest`, `Waist`, `BottomHem`, `Collar`, `Sleevlenght`, `Shoulder`, `Backlenght`, `Frontlenght`, `UserId`, `Id`) VALUES
('SS05', '1', '11', '1', '1', '1', '1', 1, '1', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_trousers`
--

DROP TABLE IF EXISTS `tbl_trousers`;
CREATE TABLE IF NOT EXISTS `tbl_trousers` (
  `StyleCode` varchar(10) NOT NULL,
  `waist` varchar(20) NOT NULL,
  `outseam` varchar(20) NOT NULL,
  `inseam` varchar(20) NOT NULL,
  `frontrise` varchar(20) NOT NULL,
  `backrise` varchar(20) NOT NULL,
  `hip` varchar(20) NOT NULL,
  `thigh` varchar(20) NOT NULL,
  `knee` int(11) NOT NULL,
  `sura` varchar(20) NOT NULL,
  `opening` varchar(20) NOT NULL,
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `UserId` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_trousers`
--

INSERT INTO `tbl_trousers` (`StyleCode`, `waist`, `outseam`, `inseam`, `frontrise`, `backrise`, `hip`, `thigh`, `knee`, `sura`, `opening`, `Id`, `UserId`) VALUES
('TS07', '1', '1', '1', '1', '1', '1', '1', 1, '1', '1', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE IF NOT EXISTS `tbl_users` (
  `fullName` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phoneNumber` varchar(12) NOT NULL,
  `salt` varchar(100) NOT NULL,
  `passwordHash` varchar(200) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`fullName`, `email`, `phoneNumber`, `salt`, `passwordHash`, `id`) VALUES
('Asiri', 'qaz@qaz.com', '123456789', 'HulUAFxmyzyViQ==', '8f4b11a6c4c425e317ba722cfe63dfcb', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_blezers`
--

DROP TABLE IF EXISTS `tb_blezers`;
CREATE TABLE IF NOT EXISTS `tb_blezers` (
  `StyleCode` varchar(10) NOT NULL,
  `A` varchar(200) NOT NULL,
  `B` varchar(200) NOT NULL,
  `C` varchar(200) NOT NULL,
  `D` varchar(200) NOT NULL,
  `E` varchar(200) NOT NULL,
  `F` varchar(200) NOT NULL,
  `G` varchar(200) NOT NULL,
  `H` varchar(200) NOT NULL,
  `I` varchar(200) NOT NULL,
  `J` varchar(200) NOT NULL,
  `K` varchar(200) NOT NULL,
  `L` varchar(200) NOT NULL,
  `M` varchar(200) NOT NULL,
  `UserId` int(11) NOT NULL,
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_blezers`
--

INSERT INTO `tb_blezers` (`StyleCode`, `A`, `B`, `C`, `D`, `E`, `F`, `G`, `H`, `I`, `J`, `K`, `L`, `M`, `UserId`, `Id`) VALUES
('BS06', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 3, 1),
('BS03', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_first` varchar(200) NOT NULL,
  `user_last` varchar(200) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_uid` varchar(200) NOT NULL,
  `user_pword` varchar(200) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_first`, `user_last`, `user_email`, `user_uid`, `user_pword`) VALUES
(1, 'Daniel', 'Nielson', 'User@gmail.com', 'Admin', 'test123'),
(2, 'Gi', 'joe', 'joe@gmail.co', 'joe254', 'test321');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
