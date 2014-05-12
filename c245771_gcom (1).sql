-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2014 at 10:26 PM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `c245771_gcom`
--

-- --------------------------------------------------------

--
-- Table structure for table `gcom`
--

CREATE TABLE IF NOT EXISTS `gcom` (
  `brand` varchar(40) NOT NULL,
  `customername` varchar(30) NOT NULL,
  `customercell` varchar(30) NOT NULL,
  `avaliablility` varchar(30) NOT NULL,
  `year` varchar(30) DEFAULT NULL,
  `type` varchar(30) NOT NULL,
  `model` varchar(30) NOT NULL,
  `serialnumb` varchar(50) NOT NULL,
  `cpu` varchar(11) NOT NULL,
  `cpumodel` varchar(40) NOT NULL,
  `cpuspeed` varchar(11) NOT NULL,
  `gcard` varchar(11) DEFAULT NULL,
  `gcardmodel` varchar(50) DEFAULT NULL,
  `ram` varchar(11) NOT NULL,
  `HardDrive` varchar(11) NOT NULL,
  `HDType` varchar(11) NOT NULL,
  `size` varchar(11) NOT NULL,
  `usbtype` varchar(40) NOT NULL,
  `usbN` varchar(11) NOT NULL,
  `DisplayOutput` varchar(50) DEFAULT NULL,
  `DVDdrive` varchar(11) NOT NULL,
  `webcam` varchar(11) NOT NULL,
  `wifi` varchar(11) NOT NULL,
  `lan` varchar(11) NOT NULL,
  `OS` varchar(11) NOT NULL,
  `OSversion` varchar(30) NOT NULL,
  `SystemType` varchar(11) NOT NULL,
  `Pic` varchar(100) NOT NULL DEFAULT 'http://i98.photobucket.com/albums/l264/gcomcomputer/nophoto/gcom1_zpsbd7148d0.png',
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `ebay` varchar(30) NOT NULL,
  `sellingprice` int(30) DEFAULT NULL,
  `soldprice` varchar(30) NOT NULL,
  `SbaskedforID` varchar(999) NOT NULL,
  `SBasked` varchar(300) NOT NULL,
  `cpucores` varchar(45) DEFAULT NULL,
  `onsale` varchar(20) NOT NULL,
  `secprice` int(30) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Id` (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=170 ;

--
-- Dumping data for table `gcom`
--

INSERT INTO `gcom` (`brand`, `customername`, `customercell`, `avaliablility`, `year`, `type`, `model`, `serialnumb`, `cpu`, `cpumodel`, `cpuspeed`, `gcard`, `gcardmodel`, `ram`, `HardDrive`, `HDType`, `size`, `usbtype`, `usbN`, `DisplayOutput`, `DVDdrive`, `webcam`, `wifi`, `lan`, `OS`, `OSversion`, `SystemType`, `Pic`, `Id`, `ebay`, `sellingprice`, `soldprice`, `SbaskedforID`, `SBasked`, `cpucores`, `onsale`, `secprice`) VALUES
('Apple', '', '', 'WestEndStore', 'Late2011', 'Laptop', 'MacBook Pro', 'W89056XX1G0', 'Intel', 'Core 2 Duo', '2.4', 'Nvidia', 'Geforce 9600M', '4', '250', 'HDD', '15.6', 'USB2.0', '2', 'MIni Display', 'Y', 'Y', 'Y', 'Y', 'OS X', '10.9.2', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/DSC_0006_zps1147395c.jpg', 17, 'NotOnEbay', 700, '', 'M00011', '9', '2', 'yes', 0),
('Apple', '', '', 'Sold', '2011', 'Laptop', 'MacBook Air', 'C02H8GTGDJWT', 'Intel', 'CORE I5', '1.7', 'Intel', 'HD 3000', '4', '128', 'SSD', '13', 'USB2.0', '2', 'Mini Display', 'Y', 'Y', 'Y', 'Y', 'OS X', '10.9.2', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/DSC_0002_zps7e9c48f4.jpg', 18, 'NotOnEbay', 890, '', 'M00004', '10', '4', 'no', 0),
('Apple', '', '', 'WestEndStore', 'EARLY 2008', 'Laptop', 'MacBook', 'W882695LOP1', 'Intel', 'CORE2 DUO', '2.4', 'Intel', 'GMA X3100', '4', '320', 'HDD', '13', 'USB2.0', '2', 'Display', 'Y', 'Y', 'Y', 'Y', 'OS X', '10.7.5', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/nophoto/gcom1_zpsbd7148d0.png', 19, 'NotOnEbay', 370, '', 'M00001', '10', '2', '', 0),
('Acer', '', '', 'WestEndStore', '', 'Laptop', 'Aspire V5-571P', 'NXM49AA0122410754C2000', 'Intel', 'I3-3217U', '1.8', 'Intel', 'HD Graphic 4000', '8', '500', 'HDD', '15.6', 'USB3.0', '3', 'HDMI', 'Y', 'Y', 'Y', '', 'Windows', '8.1', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/nophoto/gcom1_zpsbd7148d0.png', 22, 'NotOnEbay', 460, '', 'A00142', '', '4', '', 0),
('Gateway', '', '', 'WestEndStore', '', 'Laptop', 'NV57H', 'lxwyy020311422bedf1601', 'Intel', 'i3-2330M', '2.2', 'Intel', 'Graphic', '4', '750', 'HDD', '15.6', 'USB2.0', '3', 'VGA/HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '7 Home Premium', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/nophoto/gcom1_zpsbd7148d0.png', 23, 'NotOnEbay', 375, '', 'A00009', '10', '4', '', 0),
('Asus', '', '', 'WestEndStore', '', 'Laptop', 'X55U', 'CANOCX16344741e', 'AMD', 'E2-1800', '1.7', 'AMD', 'Radeon HD 7340', '4', '320', 'HDD', '15.6', 'USB3.0', '1', 'VGA/HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '8.1', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/nophoto/gcom1_zpsbd7148d0.png', 24, 'NotOnEbay', 320, '', 'A00006', '10', '2', '', 0),
('Acer', '', '', 'Sold', '', 'Laptop', 'Aspire V3-551', 'NXRZFAA01533004BD33400', 'AMD', 'A8-4500M', '2.8', 'AMD', 'Radeon HD 7640G', '8', '750', 'HDD', '15.6', 'USB3.0', '3', 'VGA/HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '8.1', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/DSC_0027_zps1bed0fe8.jpg?t=1395773153', 25, 'NotOnEbay', 430, '', 'A00141', '', '4', '', 0),
('HP', '', '', 'DowntownStore', '', 'Laptop', '2000 NoteBook', 'CNU23900XR', 'AMD', 'E-300 APU', '1.3', 'AMD', 'Radeon HD 6130M', '4', '320', 'HDD', '15.6', 'USB2.0', '3', 'VGA/HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '8.1', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/DSC_0015_zps9590f348.jpg?t=1395772691', 27, 'NotOnEbay', 270, '', 'A00140', '', '2', '', 0),
('Asus', '', '', 'DowntownStore', '', 'Laptop', 'N75S', 'B9N0BC10028236B', 'Intel', 'i7-2670QM', '3.1', 'Nvidia', 'GeForce 555M', '8', '500', 'HDD', '17.3', 'USB3.0', '2', 'VGA/HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '7 Home Premium', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/nophoto/gcom1_zpsbd7148d0.png', 28, 'NotOnEbay', 750, '', 'A00022', '', '8', '', 0),
('Asus', '', '', 'WestEndStore', '', 'Laptop', 'X54C', 'C7N0AS09760427A', 'Intel', 'Pentium', '2.3', 'Intel', 'HD Graphic', '6', '500', 'HDD', '15.6', 'USB3.0', '1', 'VGA/HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '7 Home Premium', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/nophoto/gcom1_zpsbd7148d0.png', 29, 'NotOnEbay', 325, '', 'A00017', '10', '2', '', 0),
('Toshiba', '', '', 'DowntownStore', '', 'Laptop', 'Satellite P500', '1A062635W', 'Intel', 'i5-M450', '2.66', 'Nvidia', 'Geforce GT 330M', '4', '500', 'HDD', '18', 'USB2.0', '3', 'VGA/HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '7 Home Premium', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/nophoto/gcom1_zpsbd7148d0.png', 30, 'NotOnEbay', 700, '', 'A00139', '', '4', '', 0),
('Dell', '', '', 'DowntownStore', '', 'Laptop', 'XPS', 'BN3FLV1', 'Intel', 'i5-3210m', '2.5', 'Nvidia', 'Geforce 630m', '6', '500', 'HDD', '15.6', 'USB3.0', '3', 'HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '8.1', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/A00023_zpsdedcad46.jpg', 31, 'NotOnEbay', 665, '', 'A00023', '10', '4', 'yes', 0),
('Toshiba', '', '', 'Sold', '', 'Laptop', 'Satellite C850', 'YC424203R', 'Intel', 'Celeron B830', '1.8', 'Intel', 'HD Graphics', '4', '640', 'HDD', '15.6', 'USB3.0', '3', 'VGA/HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '8.1', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/nophoto/gcom1_zpsbd7148d0.png', 32, 'NotOnEbay', 300, '', 'A00138', '', '2', '', 0),
('Dell', '', '', 'WestEndStore', '', 'Laptop', 'Vostro 1540', 'null', 'Intel', 'i3-370M', '2.4', 'Intel', 'HD Graphic', '4', '320', 'HDD', '15.6', 'USB2.0', '3', 'VGA/HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '7 Pro', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/nophoto/gcom1_zpsbd7148d0.png', 33, 'NotOnEbay', 360, '', 'A00024', '10', '2', '', 0),
('Lenovo', '', '', 'Sold', '', 'Laptop', 'Z575', 'WB04913822', 'AMD', 'A6-3420M', '2.4', 'AMD', 'Radeon HD 6520G', '4', '500', 'HDD', '15.6', 'USB2.0', '3', 'VGA/HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '7 Home Premium', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/nophoto/gcom1_zpsbd7148d0.png', 34, 'NotOnEbay', 320, '', 'A00137', '', '4', '', 0),
('Dell', '', '', 'WestEndStore', '', 'Laptop', 'Latitude E6530', '78HLBW1', 'Intel', 'Intel i5-3210M', '2.5', 'Intel', 'HD Graphic 4000', '4', '320', 'HDD', '15.6', 'USB3.0', '3', 'VGA/HDMI', 'Y', '', 'Y', 'Y', 'Windows', '7 Pro', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/nophoto/gcom1_zpsbd7148d0.png', 35, 'NotOnEbay', 570, '', 'A00135', '', '4', '', 0),
('HP', '', '', 'WestEndStore', '', 'Laptop', 'Pavilion dm4', '2CE21610D1', 'Intel', 'i5-2450m', '2.4', 'Intel', 'HD Graphic', '5', '500', 'HDD', '14', 'USB3.0', '3', 'VGA/HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '7 Home Premium', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/nophoto/gcom1_zpsbd7148d0.png', 36, 'NotOnEbay', 500, '', 'A00026', '10', '4', '', 0),
('HP', '', '', 'Sold', '', 'Laptop', 'Pavilion 15', '5CD3480NF1', 'AMD', 'A6-5200 APU', '2.0', 'AMD', 'Radeon HD 8400', '4', '750', 'HDD', '15.6', 'USB2.0', '4', 'HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '8.1', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/nophoto/gcom1_zpsbd7148d0.png', 37, 'NotOnEbay', 460, '', 'A00133', '', '4', '', 0),
('Apple', '', '', 'WestEndStore', 'Late2006', 'Laptop', 'Macbook', '4H6480AKWGM', 'Intel', 'Core 2 Duo', '2.00', 'Intel', 'GMA 950', '3', '160', 'HDD', '13', 'USB2.0', '2', 'Mini DP', 'Y', 'Y', 'Y', 'Y', 'OS X', '10.7.5', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/DSC_0005_zps1f3719d6.jpg?t=1395773068', 38, 'NotOnEbay', 465, '', 'M00013', '9', '2', '', 0),
('Apple', '', '', 'WestEndStore', 'Early2004', 'Laptop', 'MacBookPro', 'W86381WNTJ1', 'Intel', 'Core Duo', '2.16', 'ATI', 'RadeonX1600', '2', '500', 'HDD', '17.3', 'USB2.0', '3', 'Display Port', 'Y', 'Y', 'Y', 'Y', 'OS X', '10.7.5', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/DSC_0007_zps7b735db3.jpg', 39, 'NotOnEbay', 585, '', 'M00014', '8', '2', '', 0),
('HP', '', '', 'WestEndStore', '', 'Laptop', 'Pavlion 14 Chromebook', '5CD32717CV', 'Intel', 'Celeron 847', '1.1', 'Intel', 'HD Graphic', '4', '16', 'SSD', '14', 'USB2.0', '3', 'HDMI', '', 'Y', 'Y', 'Y', 'Windows', 'XP Pro', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/nophoto/gcom1_zpsbd7148d0.png', 40, 'NotOnEbay', 230, '', 'A00147', '9', '2', '', 0),
('Dell', '', '', 'WestEndStore', '', 'Laptop', 'Latitude E6500', 'C3Z5XH1', 'Intel', 'Core 2 Duo', '2.8', 'Intel', '4 Series Express', '4', '200', 'HDD', '15.6', 'USB2.0', '4', 'VGA / Display Port', 'Y', '', 'Y', 'Y', 'Windows', '7 Home Premium', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/nophoto/gcom1_zpsbd7148d0.png', 41, 'NotOnEbay', 195, '', 'A00145', '7', '2', '', 0),
('Toshiba', '', '', 'Sold', '', 'Laptop', 'Satellite C850', '3D151855S', 'Intel', 'i3-3120M', '2.5', 'Intel', 'HD Graphic 4000', '6', '750', 'HDD', '15.6', 'USB3.0', '3', 'VGA / HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '8.1', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/nophoto/gcom1_zpsbd7148d0.png', 42, 'NotOnEbay', 330, '', 'A00146', '7', '4', '', 0),
('Acer', '', '', 'Sold', '', 'Laptop', 'Aspire One', 'LUS850Y005924068B32500', 'Intel', 'Atom N520', '1.33', 'Intel', 'Graphic Accelerator 500', '2', '250', 'HDD', '10.1', 'USB2.0', '3', 'VGA', '', 'Y', 'Y', 'Y', 'Windows', '7 Starter', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/DSC_0012_zpsbd677c43.jpg?t=1395772740', 43, 'NotOnEbay', 185, '', 'A00144', '9', '1', '', 0),
('Apple', '', '', 'Sold', 'MID 2010', 'Laptop', 'MacBook Pro', 'W80342E0ATN', 'Intel', 'Core 2 Duo', '2.66', 'Nvidia', '320M', '4', '500', 'HDD', '13', 'USB2.0', '2', 'Mini DP', 'Y', 'Y', 'Y', 'Y', 'OS X', '10.9.2', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/DSC_0003_zps73a49840.jpg?t=1395773076', 44, 'NotOnEbay', 700, '', 'M00005', '8', '2', '', 0),
('Apple', '', '', 'WestEndStore', 'Early 2008', 'Laptop', 'MacBook', 'W8819TK00P1', 'Intel', 'Core 2 Duo', '2.4', 'Intel', 'GMA X3100', '4', '160', 'HDD', '13', 'USB2.0', '2', 'Mini DP', 'Y', 'Y', 'Y', 'Y', 'OS X', '10.7.5', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/DSC_0004_zps1913cc3e.jpg?t=1395773073', 45, 'NotOnEbay', 389, '', 'M00007', '7', '2', '', 0),
('Dell', '', '', 'WestEndStore', '', 'Laptop', 'Inspiron 1090', '7S4PYN1', 'Intel', 'Atom N570', '1.7', 'Intel', 'Graphic 3150', '2', '320', 'HDD', '10.1', 'USB2.0', '2', 'null', '', 'Y', 'Y', 'Y', 'Windows', '7 Home Premium', 'X86', 'http://i98.photobucket.com/albums/l264/gcomcomputer/DSC_0008_zps3c001b47.jpg?t=1395772728', 46, 'NotOnEbay', 399, '', 'A00106', '10', NULL, '', 0),
('Toshiba', '', '', 'Sold', '', 'Laptop', 'Satellite T230D', 'YA023733K', 'AMD', 'Athlon II K325', '1.3', 'ATI', 'Radeon HD 4200M', '4', '320', 'HDD', '14', 'USB2.0', '2', 'VGA / HDMI', '', 'Y', 'Y', 'Y', 'Windows', '7 Home Premium', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/DSC_0009_zps46c3d457.jpg?t=1395772641', 47, 'NotOnEbay', 280, '', 'A00132', '9', '2', '', 0),
('LG', '', '', 'WestEndStore', '', 'Laptop', 'Notebook X120', '907KSMH008459', 'Intel', 'Atom N720', '1.66', 'Intel', 'Graphic', '1', '160', 'HDD', '10.1', 'USB2.0', '3', 'VGA', '', 'Y', 'Y', 'Y', 'Windows', 'XP Pro', 'X86', 'http://i98.photobucket.com/albums/l264/gcomcomputer/DSC_0010_zps0628ebee.jpg?t=1395772673', 48, 'NotOnEbay', 150, '', 'A00014', '7', '1', '', 0),
('HP', '', '', 'WestEndStore', '', 'Laptop', 'Mini 210', '4CZ0460P35', 'Intel', 'Atom N455', '1.66', 'Intel', 'Mobile Graphic', '1', '160', 'HDD', '10.1', 'USB2.0', '3', 'VGA', '', 'Y', 'Y', 'Y', 'Windows', '7 Starter', 'X86', 'http://i98.photobucket.com/albums/l264/gcomcomputer/DSC_0011_zps1a04693f.jpg?t=1395772795', 49, 'NotOnEbay', 185, '', 'A00049', '7', '2', '', 0),
('HP', '', '', 'WestEndStore', '', 'Laptop', 'EliteBook 2530p', 'CND015020F', 'Intel', 'Core 2 Duo', '1.86', 'Intel', 'Graphic', '3', '120', 'HDD', '12', 'USB2.0', '2', 'VGA', 'Y', 'Y', 'Y', 'Y', 'Windows', '7 Pro', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/DSC_0014_zps4f1a27ed.jpg?t=1395772688', 50, 'NotOnEbay', 280, '', 'A00100', '8', '2', '', 0),
('HP', '', '', 'WestEndStore', '', 'Laptop', 'EliteBook 6930p', '2CE925BHR7', 'Intel', 'Core Duo', '2.4', 'ATI', 'Radeon HD 3400', '3', '160', 'HDD', '14', 'USB2.0', '3', 'VGA', 'Y', 'Y', 'Y', 'Y', 'Windows', 'Vista Business', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/DSC_0016_zpsb355ed31.jpg?t=1395772700', 51, 'NotOnEbay', 300, '', 'A00110', '8', '2', '', 0),
('Apple', '', '', 'Sold', 'MID 2008', 'Laptop', 'MacBook', 'W8908DJ1AQ', 'Intel', 'Core 2 Duo', '2', 'Nvidia', 'Geforce 9400M', '4', '320', 'HDD', '13', 'USB2.0', '2', 'Mini DP', 'Y', 'Y', 'Y', 'Y', 'OS X', '10.9.2', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/DSC_0017_zpsbabe0c7c.jpg?t=1395772744', 52, 'NotOnEbay', 685, '', 'M00010', '', '2', '', 0),
('Acer', '', '', 'WestEndStore', '', 'Laptop', 'Acer Aspire V5', 'NXM3BAA005241083CE6600', 'Intel', 'i5-3317U', '1.7~2.6', 'Intel', 'HD Graphic 4000', '8', '500', 'HDD', '14', 'USB3.0', '3', 'HDMI', 'Y', 'Y', 'Y', '', 'Windows', '8.1', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/DSC_0019_zps4d94a9aa.jpg?t=1395773098', 53, 'NotOnEbay', 480, '', 'A0103', '', '4', '', 0),
('Asus', '', '', 'WestEndStore', '', 'Laptop', 'K50IE', 'A4N0AS493488161', 'Intel', 'Pentium', '2.2', 'Nvidia', 'Geforce 310M', '4', '500', 'HDD', '15.6', 'USB2.0', '2', 'VGA / HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '7 Home Premium', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/DSC_0020_zps360835e4.jpg?t=1395773103', 54, 'NotOnEbay', 299, '', 'A00098', '', '2', '', 0),
('HP', '', '', 'Sold', '', 'Laptop', 'Pavilion g6', '5CG1410ZJB', 'AMD', 'Phenom P860', '2.0', 'ATI', 'Redeon HD 4250', '4', '640', 'HDD', '15.6', 'USB2.0', '3', 'VGA / HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '7 Home Premium', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/DSC_0021_zps3a2bb3d0.jpg?t=1395773121', 55, 'NotOnEbay', 330, '', 'A00108', '', '3', '', 0),
('HP', '', '', 'Sold', '', 'Laptop', 'ProBook 6565b', '5CB22522YK', 'AMD', 'A6-3140MX', '1.6', 'AMD', 'Radeon HD 6520G', '6', '320', 'HDD', '15.6', 'USB2.0', '4', 'VGA / HDMI', 'Y', 'Y', '', '', 'Windows', '7 Pro', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/DSC_0022_zps49c9b2b0.jpg?t=1395773117', 56, 'NotOnEbay', 330, '', 'A00037', '', '4', '', 0),
('Asus', '', '', 'Sold', '', 'Laptop', 'F6A', '15G10N3653E0', 'Intel', 'Core 2 Duo', '2.00', 'Intel', 'Mobile Graphic', '4', '250', 'HDD', '13', 'USB2.0', '3', 'VGA / HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '7 Home Premium', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/DSC_0023_zps73155fd6.jpg?t=1395773128', 57, 'NotOnEbay', 249, '', 'A00040', '', '2', '', 0),
('Toshiba', '', '', 'Sold', '', 'Laptop', 'Satellite L500D', '69280988K', 'AMD', 'Athlon', '1.9', 'ATI', 'Radeon 3100', '3', '240', 'HDD', '15.6', 'USB2.0', '2', 'VGA', 'Y', 'Y', 'Y', 'Y', 'Windows', 'Vista Home Premium', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/DSC_0024_zps8aa0f60d.jpg?t=1395773134', 58, 'NotOnEbay', 250, '', 'A00001', '', '2', '', 0),
('Acer', '', '', 'Sold', '', 'Laptop', 'Aspire 7551', 'LXPT9020070161E6902000', 'AMD', 'Athlon II P320', '2.1', 'ATI', 'Radeon HD 4250', '3', '320', 'HDD', '15.6', 'USB2.0', '3', 'VGA / HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '7 Home Premium', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/DSC_0025_zpsbb18b5c8.jpg?t=1395773139', 59, 'NotOnEbay', 280, '', 'A00115', '', '2', '', 0),
('MSI', '', '', 'WestEndStore', '', 'Laptop', 'A7200', 'A7200-027USK1002000165', 'Intel', 'i5-M430', '2.27-2.53', 'Intel', 'HD Graphic', '4', '320', 'HDD', '17.3', 'USB2.0', '4', 'VGA / HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '7 Home Premium', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/DSC_0026_zpseac1d3ba.jpg?t=1395773146', 60, 'NotOnEbay', 400, '', 'A00123', '', '4', '', 0),
('HP', '', '', 'WestEndStore', '', 'Laptop', 'EliteBook 8470p', 'CNU23319X8', 'Intel', 'i5-3320m', '2.6~3.3', 'Intel', 'HD Graphic 4000', '8', '500', 'HDD', '14', 'USB3.0', '3', 'VGA / DP', 'Y', 'Y', 'Y', 'Y', 'Windows', '7 Pro', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/DSC_0028_zps0d7f8ffc.jpg?t=1395773158', 61, 'NotOnEbay', 540, '', 'A00109', '', '4', '', 0),
('HP', '', '', 'WestEndStore', '', 'Laptop', 'Compaq nc6400', 'CND6401VKM', 'Intel', 'Duo T2400', '1.83', 'Intel', '945 Express', '2', '120', 'HDD', '14', 'USB2.0', '3', 'VGA', 'Y', '', 'Y', 'Y', 'Windows', 'XP Pro', 'X86', 'http://i98.photobucket.com/albums/l264/gcomcomputer/DSC_0029_zps4c824ace.jpg?t=1395773179', 62, 'NotOnEbay', 230, '', 'A00129', '', '2', '', 0),
('HP', '', '', 'WestEndStore', '', 'Laptop', 'Compaq nc6400', 'CND7101MFD', 'Intel', 'Duo T5500', '1.66', 'ATI', 'Radeon x1300', '2', '80', 'HDD', '14', 'USB2.0', '3', 'VGA', 'Y', '', 'Y', 'Y', 'Windows', 'XP Pro', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/DSC_0029_zps4c824ace.jpg?t=1395773179', 63, 'NotOnEbay', 210, '', 'A00130', '', '2', '', 0),
('HP', '', '', 'WestEndStore', '', 'Laptop', 'Compaq nc6400', 'CND7100BP7', 'Intel', 'Duo T5500', '1.66', 'ATI', 'Radeon x1300', '2', '100', 'HDD', '14', 'USB2.0', '3', 'VGA', 'Y', '', 'Y', 'Y', 'Windows', 'XP Pro', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/DSC_0029_zps4c824ace.jpg?t=1395773179', 64, 'NotOnEbay', 220, '', 'A00131', '', '2', '', 0),
('HP', '', '', 'WestEndStore', '', 'Laptop', 'Envy 6', 'CND2300S50', 'AMD', 'A6-4455M', '2.6', 'AMD', 'Radeon HD 7500G', '5', '120', 'SSD', '15.6', 'USB2.0', '3', 'HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '7 Home Premium', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/DSC_0030_zps4dcbbd27.jpg?t=1395773194', 65, 'NotOnEbay', 480, '', 'A00093', '', '2', '', 0),
('HP', '', '', 'WestEndStore', '', 'Laptop', 'Pavilion dm3', '4C093829FB', 'AMD', 'Athlon Xeo X2', '1.6', 'ATI', 'Redeon HD 3200', '4', '320', 'HDD', '14', 'USB2.0', '4', 'VGA / HDMI', '', 'Y', 'Y', 'Y', 'Windows', '7 Home Premium', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/nophoto/gcom1_zpsbd7148d0.png', 66, 'NotOnEbay', 285, '', 'A00068', '6', '2', '', 0),
('HP', '', '', 'WestEndStore', '', 'Laptop', 'ProBook 4320S', 'CNF0145MFS', 'Intel', 'i3 m33', '2.33', 'Intel', 'HD Graphic', '4', '320', 'HDD', '14', 'USB2.0', '4', 'VGA / HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '7 Pro', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/DSC_0053_zpsa497ba9e.jpg?t=1396113944', 68, 'NotOnEbay', 350, '', 'A00050', '', '4', '', 0),
('HP', '', '', 'WestEndStore', '', 'Laptop', 'Pavilion g6', 'CNF8511B78', 'Intel', 'Core 2 Duo', '2.00', 'Intel', '45 Express Graphic', '4', '320', 'HDD', '15.6', 'USB2.0', '3', 'VGA / HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '7 Home Premium', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/nophoto/gcom1_zpsbd7148d0.png', 69, 'NotOnEbay', 310, '', 'A00125', '', '2', '', 0),
('HP', '', '', 'Sold', '', 'Laptop', 'EliteBook 2530p', 'CND02701VN', 'Intel', 'Core 2 Duo', '1.86', 'Intel', 'Graphic', '3', '120', 'HDD', '12', 'USB2.0', '2', 'VGA', 'Y', 'Y', 'Y', 'Y', 'Windows', '7 Pro', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/DSC_0014_zps4f1a27ed.jpg?t=1395772688', 71, 'NotOnEbay', 285, '', 'A00107', '8', '2', '', 0),
('Sony', '', '', 'WestEndStore', '', 'Laptop', 'VGN-S460P', 'J000U2TL', 'Intel', 'Pentium M', '1.73', 'Intel', 'Graphic', '1.3', '80', 'HDD', '13', 'USB2.0', '2', 'VGA', 'Y', '', 'Y', 'Y', 'Windows', 'XP Pro', 'X86', 'http://i98.photobucket.com/albums/l264/gcomcomputer/nophoto/gcom1_zpsbd7148d0.png', 72, 'NotOnEbay', 120, '', 'A00151', '7', '1', '', 0),
('Sony', '', '', 'WestEndStore', '', 'Laptop', 'VGN-NR398D', 'x1304657', 'Intel', 'Core 2 Duo', '1.83', 'Intel', 'Graphic', '2', '250', 'HDD', '14', 'USB2.0', '4', 'VGA', 'Y', '', 'Y', 'Y', 'Windows', '7 Home Premium', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/nophoto/gcom1_zpsbd7148d0.png', 73, 'NotOnEbay', 250, '', 'A00152', '5', '2', '', 0),
('HP', '', '', 'WestEndStore', '', 'Laptop', 'HP Compaq tc4400', 'CND6220GH8', 'Intel', 'Duo T2400', '1.8', 'Intel', 'Graphic Accelerator 500', '2', '60', 'HDD', '12', 'USB2.0', '3', 'VGA', '', '', 'Y', 'Y', 'Windows', 'Vista Home Premium', 'X86', 'http://i98.photobucket.com/albums/l264/gcomcomputer/nophoto/gcom1_zpsbd7148d0.png', 74, 'NotOnEbay', 220, '', 'A00153', '', '2', '', 0),
('HP', '', '', 'WestEndStore', '', 'Laptop', 'Pavilion dv7', 'CNF1130BHP', 'AMD', 'PhenomN870', '2.3', 'AMD', 'Radeon HD 6370', '4', '650', 'HDD', '17.3', 'USB2.0', '3', 'VGA / HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '7 Home Premium', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/DSC_0059_zpsaec20394.jpg?t=1396113981', 75, 'NotOnEbay', 470, '', 'A00154', '10', '3', '', 0),
('Acer', '', '', 'WestEndStore', '', 'Laptop', 'Acer Aspire 5315', 'LXALC0Y087745160CA1601', 'Intel', 'Celeron 530', '1.73', 'Intel', '965 Express', '2', '80', 'HDD', '14', 'USB2.0', '3', 'VGA', 'Y', '', 'Y', 'Y', 'Windows', 'Vista Home Premium', 'X86', 'http://i98.photobucket.com/albums/l264/gcomcomputer/nophoto/gcom1_zpsbd7148d0.png', 76, 'NotOnEbay', 140, '', 'A00118', '', '1', '', 0),
('Toshiba', '', '', 'Sold', '', 'Laptop', 'Satellite L40-01E', 'XD083911P', 'Intel', 'i3-4005u', '1.7', 'Intel', 'HD Graphic', '6', '750', 'HDD', '14', 'USB3.0', '3', 'VGA / HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '8.1', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/nophoto/gcom1_zpsbd7148d0.png', 77, 'NotOnEbay', 500, '', 'A00155', '10', '4', '', 0),
('Lenovo', '', '', 'WestEndStore', '', 'Laptop', 'Thinkpad T61', 'L3AAE0B', 'Intel', 'Core 2 Duo', '2.20', 'Nvidia', 'Quadro NVS 140M', '4', '160', 'HDD', '14', 'USB2.0', '3', 'VGA', 'Y', '', 'Y', 'Y', 'Windows', '7 Pro', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/nophoto/gcom1_zpsbd7148d0.png', 78, 'NotOnEbay', 300, '', 'A00156', '', '2', '', 0),
('Toshiba', '', '', 'DowntownStore', '', 'Laptop', 'Satellite C650D', 'ZA256966Q', 'AMD', 'E-350', '1.6', 'AMD', 'Radeon HD 6310', '3', '500', 'HDD', '15.6', 'USB2.0', '2', 'VGA / HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '8.1', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/DSC_0054_zps40934c7a.jpg?t=1396113950', 79, 'NotOnEbay', 320, '', 'A00157', '9', '2', '', 0),
('Toshiba', '', '', 'WestEndStore', '', 'Laptop', 'C650D-02K', '6B489609Q', 'AMD', 'C-50', '1.00', 'AMD', 'Radeon HD 6200', '4', '500', 'HDD', '15.6', 'USB2.0', '2', 'VGA', 'Y', 'Y', 'Y', 'Y', 'Windows', '7 Home Premium', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/nophoto/gcom1_zpsbd7148d0.png', 81, 'NotOnEbay', 300, '', 'A00158', '10', '2', '', 0),
('Acer', '', '', 'Sold', '', 'Laptop', 'Aspire R7-572', 'NXM94AA004345261E63400', 'Intel', 'i5-4200U', '1.6-2.6', 'Intel', 'HD Graphics 4400', '4', '500', 'HDD', '15.6', 'USB3.0', '3', 'HDMI / Mini DP', '', 'Y', 'Y', '', 'Windows', '8.1', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/nophoto/gcom1_zpsbd7148d0.png', 82, 'NotOnEbay', 670, '', 'A00159', '10', '4', '', 0),
('Acer', '', '', 'WestEndStore', '', 'Laptop', 'Aspire V5-431', 'NXM2SAA005308032E76600', 'Intel', 'Celeron', '1.5', 'Intel', 'HD Graphic', '4', '500', 'HDD', '14', 'USB3.0', '3', 'HDMI', 'Y', 'Y', 'Y', '', 'Windows', '8.1', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/DSC_0057_zps5066f48c.jpg?t=1396113970', 83, 'NotOnEbay', 340, '', 'A00160', '8', '2', '', 0),
('HP', '', '', 'Sold', '', 'Laptop', 'Pavilion 15', '5CD3271J92', 'AMD', 'A6-5350M', '2.9', 'AMD', 'Radeon HD 8450G', '8', '500', 'HDD', '15.6', 'USB3.0', '3', 'VGA / HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '8.1', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/nophoto/gcom1_zpsbd7148d0.png', 84, 'NotOnEbay', 420, '', 'A00161', '10', '2', '', 0),
('Thinkpad', '', '', 'WestEndStore', '', 'Laptop', 'E530C', 'MP3CA4A', 'Intel', 'i3-2348M', '2.3', 'Intel', 'HD Graphic 3000', '4', '500', 'HDD', '15.6', 'USB3.0', '4', 'VGA / HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '8.1 Pro', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/DSC_0056_zpsdb10b183.jpg?t=1396113966', 85, 'NotOnEbay', 500, '', 'A00162', '', '4', '', 0),
('HP', '', '', 'Sold', '', 'Laptop', 'Pavilion g6', '5CG2080V33', 'AMD', 'A4-3305M', '1.9', 'AMD', 'Radeon HD 6480G', '6', '650', 'HDD', '15.6', 'USB2.0', '3', 'VGA / HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '7 Home Premium', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/DSC_0058_zpsb76109be.jpg?t=1396113976', 86, 'NotOnEbay', 360, '', 'A00163', '7', '2', '', 0),
('Toshiba', '', '', 'Sold', '', 'Laptop', 'Satellite L650', 'YA097628Q', 'Intel', 'Pentium', '2.0', 'Intel', 'HD Graphic', '4', '650', 'HDD', '15.6', 'USB2.0', '3', 'VGA / HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '7 Home Premium', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/nophoto/gcom1_zpsbd7148d0.png', 87, 'NotOnEbay', 340, '', 'A00164', '9', '2', '', 0),
('HP', '', '', 'Sold', '', 'Laptop', 'Pavilion g6', '5CD2253L2X', 'AMD', 'A6-4400M', '2.7', 'AMD', 'Radeon HD 7520G', '4', '750', 'HDD', '15.6', 'USB3.0', '3', 'VGA / HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '7 Home Premium', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/nophoto/gcom1_zpsbd7148d0.png', 88, 'NotOnEbay', 370, '', 'A00165', '10', '2', '', 0),
('HP', '', '', 'WestEndStore', '', 'Laptop', 'ProBook 4520s', '2CE0260SSW', 'Intel', 'i3-M330', '2.1', 'Intel', 'HD Graphic', '4', '320', 'HDD', '15.6', 'USB2.0', '3', 'VGA / HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '7 Pro', 'X86', 'http://i98.photobucket.com/albums/l264/gcomcomputer/DSC_0055_zps2937e188.jpg?t=1396113959', 89, 'NotOnEbay', 430, '', 'A00166', '10', '4', '', 0),
('HP', '', '', 'WestEndStore', '', 'Laptop', 'G61 Notebook', 'CNF0183W3P', 'AMD', 'Athlon II', '2.0', 'ATI', 'Radeon HD 4200', '4', '320', 'HDD', '15.6', 'USB2.0', '3', 'VGA / HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '7 Home Premium', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/nophoto/gcom1_zpsbd7148d0.png', 90, 'NotOnEbay', 280, '', 'A00167', '7', '2', '', 0),
('Acer', '', '', 'WestEndStore', '', 'Laptop', 'Aspire One D270', 'LUSA0D065206275F07614', 'Intel', 'Atom N2600', '1.6', 'Intel', 'Accelerator', '1', '320', 'HDD', '10.1', 'USB2.0', '3', 'VGA / HDMI', '', 'Y', 'Y', 'Y', 'Windows', '7 Starter', 'X86', 'http://i98.photobucket.com/albums/l264/gcomcomputer/nophoto/gcom1_zpsbd7148d0.png', 91, 'NotOnEbay', 185, '', 'A00168', '10', '4', '', 0),
('Lenovo', '', '', 'Sold', '', 'Laptop', 'ideapad S415', 'CB27425200', 'AMD', 'E1-2100', '1.0', 'AMD', 'Radeon HD 8210', '4', '500', 'HDD', '14', 'USB3.0', '3', 'HDMI', '', 'Y', 'Y', 'Y', 'Windows', '7 Home Premium', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/nophoto/gcom1_zpsbd7148d0.png', 92, 'NotOnEbay', 398, '', 'A00169', '', '2', '', 0),
('Apple', '', '', 'WestEndStore', 'Mid 2011', 'AllInOne', 'iMac', 'C02H559GDHJP', 'Intel', 'I5', '2.7', 'AMD', 'Radeon HD 6770M', '8', '1000', 'HDD', '27', 'USB2.0', '4', 'Thunderbolt', 'Y', 'Y', 'Y', 'Y', 'OS X', '10.9.2', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/nophoto/gcom1_zpsbd7148d0.png', 93, 'NotOnEbay', 1180, '', 'MD0001', '10', '4', '', 0),
('Apple', '', '', 'Sold', 'Late2009', 'AllInOne', 'iMac', 'W89500CTB9U', 'Intel', 'Core 2 Duo', '3.06', 'ATI', 'Radeon HD 4670', '4', '1000', 'HDD', '21.6', 'USB2.0', '4', 'Thunderbolt', 'Y', 'Y', 'Y', 'Y', 'OS X', '10.9.2', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/nophoto/gcom1_zpsbd7148d0.png', 94, 'NotOnEbay', 695, '', 'MD0002', '', '2', '', 0),
('Acer', '', '', 'Sold', '', 'Laptop', 'eMachines E627', 'LXN64020160063DB441601', 'AMD', 'Athlon', '1.6', 'AMD', 'Radeon HD 3200', '3', '160', 'HDD', '15.6', 'USB2.0', '2', 'VGA', 'Y', 'Y', 'Y', 'Y', 'Windows', '7 Home Premium', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/nophoto/gcom1_zpsbd7148d0.png', 95, 'NotOnEbay', 199, '', 'A00170', '8', '1', '', 0),
('Acer', '', '', 'WestEndStore', '', 'Laptop', 'Aspire 5560', 'LXRNWAA00115200BD46600', 'AMD', 'A6-3420M', '1.5', 'AMD', 'Radeon HD 6520G', '4', '250', 'HDD', '15.6', 'USB2.0', '3', 'VGA / HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '7 Home Premium', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/nophoto/gcom1_zpsbd7148d0.png', 96, 'NotOnEbay', 370, '', 'A00171', '', '4', '', 0),
('Acer', '', '', 'Sold', '', 'Laptop', 'Aspire 5253', 'LXRD50201711339A661601', 'AMD', 'E-350', '1.6', 'AMD', 'Radeon HD 6310', '4', '320', 'HDD', '15.6', 'USB2.0', '3', 'VGA / HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '7 Home Premium', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/A00172_zps80b3d355.jpg', 97, 'NotOnEbay', 320, '', 'A00172', '9', '2', '', 0),
('Acer', '', '', 'Sold', '', 'Laptop', 'Aspire 5733', 'NXRN5AA001202084771601', 'Intel', 'i3 M380', '2.53', 'Intel', 'HD graphic', '4', '500', 'HDD', '15.6', 'USB2.0', '3', 'VGA', 'Y', 'Y', 'Y', 'Y', 'Windows', '7 Home Premium', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/A00174_zps2dce58d0.jpg', 98, 'NotOnEbay', 350, '', 'A00173', '9', '4', '', 0),
('Acer', '', '', 'Sold', '', 'Laptop', '20251', 'AB20200404', 'Intel', 'Pentium(R)', '2.4', 'Intel', 'HD Graphic', '4', '500', 'HDD', '17.3', 'USB3.0', '3', 'VGA / HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '8.1', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/nophoto/gcom1_zpsbd7148d0.png', 99, 'NotOnEbay', 490, '', 'A00174', '10', '2', '', 0),
('HP', '', '', 'Sold', '', 'Laptop', '2000 Notebook', '5CG2211ZQP', 'AMD', 'E2-1800', '1.7', 'AMD', 'Radeon HD 7340', '4', '500', 'HDD', '15.6', 'USB2.0', '3', 'VGA / HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '7 Home Premium', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/nophoto/gcom1_zpsbd7148d0.png', 100, 'NotOnEbay', 350, '', 'A00175', '', '2', '', 0),
('Toshiba', '', '', 'Sold', '', 'Laptop', 'Satellite C50', '7D336482Q', 'Intel', 'i3-3120M', '2.5', 'Intel', 'HD Graphic 4000', '6', '500', 'HDD', '15.6', 'USB3.0', '3', 'VGA / HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '8.1', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/nophoto/gcom1_zpsbd7148d0.png', 101, 'NotOnEbay', 450, '', 'A00176', '9', '4', '', 0),
('Dell', '', '', 'WestEndStore', '', 'Desktop', 'Ailenware', '7SGDSL1', 'Intel', 'x980', '3.3', 'AMD', 'Radeon HD 5970', '12', '160', 'SSD', '1', 'USB2.0', '4', 'DVI x 2 / mini-DP', 'Y', '', 'Y', 'Y', 'Windows', '7 Home Premium', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/Z0002_zpsf1ad4e8e.jpg?t=1397249523', 102, 'NotOnEbay', 1500, '', 'Z0002', '10', '6', '', 0),
('HP', '', '', 'WestEndStore', '', 'Laptop', 'Probook 6560B', '4CZ1300796', 'Intel', 'i5-2520m', '2.5', 'Intel', 'HD graphic 3000', '4', '320', 'HDD', '15.6', 'USB2.0', '3', 'VGA in/out / DP', 'Y', 'Y', 'Y', 'Y', 'Windows', '7 Pro', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/A00178_zps03aa92c2.jpg', 103, 'NotOnEbay', 580, '', 'A00178', '10', '4', '', 0),
('HP', '', '', 'WestEndStore', '', 'Laptop', 'G60', '2CE942D7J5', 'Intel', 'Core 2 Duo', '2.2', 'Intel', '4 Series Express', '4', '500', 'HDD', '15.6', 'USB2.0', '3', 'VGA / HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '7 Home Premium', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/A00179_zps20f09884.jpg', 104, 'NotOnEbay', 310, '', 'A00179', '7', '2', '', 0),
('HP', '', '', 'WestEndStore', '', 'Laptop', 'G62 Notebook', 'CNF0237NQ0', 'AMD', 'Athlon II', '2.1', 'ATI', 'Radeon HD 4250', '4', '500', 'HDD', '15.6', 'USB2.0', '3', 'VGA / HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '7 Home Premium', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/A00180_zpsfbef5a83.jpg', 105, 'NotOnEbay', 340, '', 'A00180', '9', '2', '', 0),
('Toshiba', '', '', 'Sold', '', 'Laptop', 'Satellite', 'XB133031R', 'Intel', 'i5-2430M', '2.4', 'Nvidia', 'Geforce 525M', '4', '750', 'HDD', '17.3', 'USB2.0', '3', 'VGA / HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '7 Home Premium', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/A00181_zps6badb095.jpg', 106, 'NotOnEbay', 600, '', 'A00181', '10', '4', '', 0),
('Acer', '', '', 'WestEndStore', '', 'Laptop', 'Aspire 4743', 'LXRFS0200313103A942000', 'Intel', 'Pentium', '2.13', 'Intel', 'HD Graphic', '4', '160', 'HDD', '14.0', 'USB2.0', '3', 'VGA / HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '7 Home Premium', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/A00184_zps6ef52320.jpg?t=1397247885', 109, 'NotOnEbay', 300, '', 'A00184', '10', '2', '', 0),
('Acer', '', '', 'Sold', '', 'Laptop', 'Aspire 5251', 'LXR0D02001027185241601', 'AMD', 'V120', '2.2', 'AMD', 'Radeon HD 4200', '3', '250', 'HDD', '15.6', 'USB2.0', '3', 'VGA / HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '7 Home Premium', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/A00185_zps4c00b134.jpg', 112, 'NotOnEbay', 280, '', 'A00185', '9', '1', '', 0),
('Acer', '', '', 'WestEndStore', '', 'Laptop', 'Aspire 5333', 'LXR4F02154042013DA1601', 'Intel', 'Celeron', '2.0', 'Intel', 'HD Grahpic', '2', '250', 'HDD', '15.6', 'USB2.0', '3', 'VGA', 'Y', 'Y', 'Y', 'Y', 'Windows', '7 Home Premium', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/A00186_zps0e54d75f.jpg', 117, 'NotOnEbay', 290, '', 'A00186', '', '2', '', 0),
('Acer', '', '', 'Sold', '', 'Laptop', 'Acer Aspire 5742', 'LXRJY0215815008B0A1601', 'Intel', 'i3-370M', '2.4', 'Intel', 'HD Graphic', '3', '250', 'HDD', '15.6', 'USB2.0', '3', 'VGA', 'Y', 'Y', 'Y', 'Y', 'Windows', 'XP Pro', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/A00188_zps6aea48cd.jpg', 118, 'NotOnEbay', 370, '', 'A00188', '10', '2', '', 0),
('HP', '', '', 'WestEndStore', '', 'Laptop', 'Pavilion dv6', '2CE209214Y', 'AMD', 'A8-3520M', '1.6', 'AMD', 'Radeon HD 6620G', '6', '500', 'HDD', '15.6', 'USB2.0', '3', 'VGA / HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '7 Home Premium', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/A00187_zps8d3fd218.jpg', 119, 'NotOnEbay', 390, '', 'A00189', '', '4', '', 0),
('Apple', '', '', 'WestEndStore', '', 'Laptop', 'MacBook Pro', 'W88132F8YJZ', 'Intel', 'Core 2 Duo', '2.4', 'Nvidia', 'Geforce 8600M', '4', '250', 'HDD', '15', 'USB2.0', '3', 'DVI', 'Y', 'Y', 'Y', 'Y', 'OS X', '10.7.5', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/M00016_zps6f2375a8.jpg', 120, 'NotOnEbay', 650, '', 'M00016', '10', '2', '', 0),
('Toshiba', '', '', 'Sold', '', 'Laptop', 'Satellite L300D', '68242219Q', 'AMD', 'Athlon QL60', '1.9', 'ATI', 'Radeon HD 3100G', '2', '160', 'HDD', '15.4', 'USB2.0', '3', 'VGA', 'Y', 'Y', 'Y', 'Y', 'Windows', '7 Home Premium', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/A00190_zps4799c0de.jpg', 121, 'NotOnEbay', 179, '', 'A00190', '', '2', '', 0),
('Toshiba', '', '', 'Sold', '', 'Laptop', 'Satellite L300D', '19408952', 'AMD', 'Athlon QL62', '2.0', 'ATI', 'Radeon HD 3100G', '2', '120', 'HDD', '15.4', 'USB2.0', '3', 'VGA', 'Y', 'Y', 'Y', 'Y', 'Windows', '7 Home Premium', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/A00191_zpsf54a79dc.jpg', 122, 'NotOnEbay', 179, '', 'A00191', '', '2', '', 0),
('Toshiba', '', '', 'Sold', '', 'Laptop', 'Satellite A200', '87143757K', 'Intel', 'Core 2 Duo', '2.0', 'Intel', '945 Express', '2', '160', 'HDD', '15.4', 'USB2.0', '4', 'VGA', 'Y', 'Y', 'Y', 'Y', 'Windows', '7 Home Premium', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/A00192_zps7e7cf6a2.jpg', 123, 'NotOnEbay', 179, '', 'A00192', '', '2', '', 0),
('Toshiba', '', '', 'WestEndStore', '', 'Laptop', 'Satellite L300D', 'X8162548Q', 'AMD', 'Athlon TL60', '2.0', 'ATI', 'Radeon X1200', '2', '160', 'HDD', '15.4', 'USB2.0', '3', 'VGA', 'Y', 'Y', 'Y', 'Y', 'Windows', '7 Home Premium', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/A00193_zps714412f7.jpg', 124, 'NotOnEbay', 179, '', 'A00193', '', '2', '', 0),
('Toshiba', '', '', 'Sold', '', 'Laptop', 'Satellite C850', '7C568064R', 'Intel', 'Pentium', '2.1', 'Intel', 'HD Grahpic', '4', '500', 'HDD', '15.6', 'USB3.0', '3', 'VGA / HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '7 Home Premium', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/A00194_zpse1fe2811.jpg', 125, 'NotOnEbay', 330, '', 'A00194', '', '2', '', 0),
('Acer', '', '', 'Sold', '', 'Laptop', 'Acer Aspire 5551', 'LXPWK021170223B78E1601', 'AMD', 'Athlon P320', '2.1', 'ATI', 'Radeon HD 4250', '4', '250', 'HDD', '15.6', 'USB2.0', '3', 'VGA / HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', 'XP Pro', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/A00195_zps6c2e320f.jpg', 126, 'NotOnEbay', 330, '', 'A00195', '', '2', '', 0),
('Toshiba', '', '', 'WestEndStore', '', 'Laptop', 'Portege M200', 'Y3106975P', 'Intel', 'Pentium M', '1.6', 'Nvidia', 'Geforce go 5200', '1.5', '60', 'HDD', '12.1', 'USB2.0', '2', 'VGA', '', '', 'Y', 'Y', 'Windows', 'Vista Home Premium', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/A00196_zps89248ae0.jpg', 127, 'NotOnEbay', 160, '', 'A00196', '', '1', '', 0),
('Apple', '', '', 'WestEndStore', 'Late 2006', 'Laptop', 'MacBook Pro', 'NA', 'Intel', 'Core 2 Duo', '2.33', 'ATI', 'Radeon x1600', '4', '560', 'HDD', '15', 'USB2.0', '3', 'DVI', 'Y', 'Y', 'Y', 'Y', 'OS X', '10.7.5', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/M00018_zpsb8d26e15.jpg', 128, 'NotOnEbay', 475, '', 'M00018', '', '2', '', 0),
('Apple', '', '', 'Sold', 'Late 2011', 'Laptop', 'MacBook Pro', 'C02HN8LGDV13', 'Intel', 'i5', '2.4', 'Intel', 'HD Graphic 3000', '4', '500', 'HDD', '13', 'USB2.0', '2', 'Mini DP', 'Y', 'Y', 'Y', 'Y', 'OS X', '10.9.2', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/M00019_zps1bdd0482.jpg', 129, 'NotOnEbay', 885, '', 'M00019', '', '2', '', 0),
('HP', '', '', 'WestEndStore', '', 'Laptop', 'Envy 14 Notebook', 'CNU1242X3F', 'Intel', 'I5-2410m', '2.3', 'Intel', 'HD Graphic', '6', '500', 'HDD', '14', 'USB3.0', '3', 'Mini DP', 'Y', 'Y', 'Y', 'Y', 'Windows', '7 Home Premium', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/A00197_zps04630a52.jpg', 130, 'NotOnEbay', 550, '', 'A00197', '', '2', '', 0),
('Asus', '', '', 'WestEndStore', '', 'Laptop', 'G75VW', 'C9N0AS28543837D', 'Intel', 'i7-3630QM', '2.4', 'Nvidia', 'Geforce 660m', '12', '750+750', 'HDD', '17.3', 'USB3.0', '4', 'VGA / HDMI / MIni DP', 'Y', 'Y', 'Y', 'Y', 'Windows', '8.1', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/A00198_zpsc5339526.jpg', 131, 'NotOnEbay', 1285, '', 'A00198', '', '4', '', 0),
('HP', '', '', 'WestEndStore', '', 'Laptop', 'G62 Notebook', 'CNF0315HPJ', 'AMD', 'Athlon P340', '2.2', 'ATI', 'Radeon HD 4250', '4', '500', 'HDD', '15.6', 'USB2.0', '3', 'VGA / HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '7 Home Premium', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/A00180_zpsfbef5a83.jpg', 132, 'NotOnEbay', 350, '', 'A00199', '', '2', '', 0),
('HP', '', '', 'Sold', '', 'Laptop', 'Pavilion g6', '5CG13005W1', 'Intel', 'i3-370M', '2.4', 'Intel', 'HD Graphic', '4', '320', 'HDD', '15.6', 'USB2.0', '3', 'VGA / HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '7 Home Premium', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/A00200_zps333d8f11.jpg', 133, 'NotOnEbay', 370, '', 'A00200', '', '2', '', 0),
('Acer', '', '', 'WestEndStore', '', 'Laptop', 'Aspire 5560G', 'LXRNU020181340ACF72000', 'AMD', 'A6-3400M', '1.4', 'AMD', 'Radeon HD 6470M', '4', '500', 'HDD', '15.6', 'USB2.0', '3', 'VGA / HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '7 Home Premium', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/A00201_zpsdd43618b.jpg', 134, 'NotOnEbay', 470, '', 'A00201', '', '4', '', 0),
('HP', '', '', 'WestEndStore', '', 'Laptop', 'Probook 4520s', '2CE0520LJF', 'Intel', 'i5-460m', '2.5', 'ATI', 'Radeon HD 530v', '4', '500', 'HDD', '15.6', 'USB2.0', '3', 'VGA / HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '7 Home Premium', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/A00203_zps43a18b07.jpg', 135, 'NotOnEbay', 500, '', 'A00203', '', '2', '', 0),
('Lenovo', '', '', 'WestEndStore', '', 'Laptop', 'ThinkPad E530', 'MP09WGV', 'Intel', 'i3-2350M', '2.3', 'Intel', 'HD Graphic 3000', '4', '320', 'HDD', '15.6', 'USB3.0', '4', 'VGA / HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '7 Home Premium', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/A00207_zpsba5cf3ce.jpg', 136, 'NotOnEbay', 480, '', 'A00207', '', '2', '', 0),
('Acer', '', '', 'WestEndStore', '', 'Laptop', 'Aspire 7750G', 'NXRVHAA001206192991601', 'Intel', 'i5-2450m', '2.5', 'AMD', 'Radeon HD 7670m', '4', '500', 'HDD', '17.3', 'USB3.0', '3', 'VGA / HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '7 Home Premium', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/A00208_zps9f26bcbc.jpg', 137, 'NotOnEbay', 600, '', 'A00208', '', '4', '', 0),
('HP', '', '', 'WestEndStore', '', 'Laptop', 'Pavilion 17', '5CD4031009', 'Intel', 'i5-4200m', '2.5', 'Intel', 'HD Graphic 4000', '4', '750', 'HDD', '17.3', 'USB3.0', '3', 'VGA / HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '8.1', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/A00209_zpsdcc041eb.jpg', 138, 'NotOnEbay', 699, '', 'A00209', '', '4', '', 0),
('Dell', '', '', 'WestEndStore', '', 'Laptop', 'Inspiron M5110', 'P17F002', 'AMD', 'A8-3520M', '1.6', 'AMD', '7450m + 6620g', '4', '500', 'HDD', '15.6', 'USB3.0', '3', 'VGA / HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '7 Home Premium', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/A00210_zps8919cb66.jpg', 139, 'NotOnEbay', 490, '', 'A00210', '', '4', '', 0),
('Lenovo', '', '', 'WestEndStore', '', 'Laptop', 'ThinkPad E530c', 'MP3CA50', 'Intel', 'i3-2348M', '2.3', 'Intel', 'HD Graphic 3000', '4', '500', 'HDD', '15.6', 'USB3.0', '4', 'VGA / HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '8.1 Pro', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/A00211_zps6940b75e.jpg', 140, 'NotOnEbay', 500, '', 'A00211', '', '4', '', 0),
('Acer', '', '', 'WestEndStore', '', 'Laptop', 'Aspire 5349', 'LXRR902026152079317600', 'Intel', 'Celeron B800', '1.5', 'Intel', 'HD Graphic', '4', '320', 'HDD', '15.6', 'USB2.0', '3', 'VGA / HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '7 Home Premium', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/A00212_zps704cbf0b.jpg', 141, 'NotOnEbay', 310, '', 'A00212', '', '2', '', 0),
('HP', '', '', 'WestEndStore', '', 'Laptop', 'Pavilion 15', '5CD3264R9P', 'AMD', 'A6-5350M', '2.9', 'AMD', '8450G', '4', '500', 'HDD', '15.6', 'USB3.0', '3', 'VGA / HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '8.1', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/A00213_zps1c6a5e5b.jpg', 142, 'NotOnEbay', 400, '', 'A00213', '', '2', '', 0),
('HP', '', '', 'WestEndStore', '', 'Laptop', 'G62 Notebook', 'CNF02016S0', 'AMD', 'Athlon P320', '2.1', 'ATI', 'Radeon HD 4250', '4', '250', 'HDD', '15.6', 'USB2.0', '3', 'VGA / HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '7 Home Premium', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/A00214_zps760ba1d6.jpg', 143, 'NotOnEbay', 340, '', 'A00214', '', '2', '', 0),
('HP', '', '', 'Sold', '', 'Laptop', 'Compaq CQ58', 'CNU23715KH', 'AMD', 'C-60', '1', 'AMD', 'Radeon HD 6290', '4', '320', 'HDD', '15.6', 'USB2.0', '3', 'VGA', 'Y', 'Y', 'Y', 'Y', 'Windows', '8.1', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/A00215_zps1d05f753.jpg', 144, 'NotOnEbay', 310, '', 'A00215', '', '2', '', 0),
('Gateway', '', '', 'WestEndStore', '', 'Laptop', 'NV56R', 'NXY20AA004309050B81601', 'Intel', 'PentiumB960', '2.2', 'Intel', 'HD Graphic', '4', '500', 'HDD', '15.6', 'USB2.0', '3', 'VGA / HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '8.1', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/A00216_zpsd19c4083.jpg', 145, 'NotOnEbay', 330, '', 'A00216', '', '2', '', 0),
('Apple', '', '', 'WestEndStore', 'Late 2007', 'Laptop', 'MacBook Pro', 'W87237U1X91', 'Intel', 'Core 2 Duo', '2.2', 'Nvidia', 'Geforce 8600M', '2', '250', 'HDD', '15', 'USB2.0', '2', 'DVI', 'Y', 'Y', 'Y', 'Y', 'OS X', '10.7.5', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/M00017_zps90b3043d.jpg', 146, 'NotOnEbay', 449, '449', 'M00017', '', '2', '', 0),
('Dell', '', '', 'WestEndStore', '', 'Laptop', 'Inspiron 1525', '69KVZG1', 'Intel', 'Celeron 550', '2.0', 'Intel', '965 Express', '2', '160', 'HDD', '15.4', 'USB2.0', '4', 'VGA / HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '7 Home Premium', 'X86', 'http://i98.photobucket.com/albums/l264/gcomcomputer/A00217_zps92caf95a.jpg', 147, 'NotOnEbay', 215, '', 'A00217', '', '1', '', 0),
('Apple', '', '', 'WestEndStore', 'MId 2012', 'Laptop', 'MacBook Pro', 'C02L74T5DV33', 'Intel', 'i7', '2.3', 'Intel', 'HD Graphic 4000', '4', '500', 'HDD', '15', 'USB2.0', '4', 'Mini DP', 'Y', 'Y', 'Y', 'Y', 'OS X', '10.9.2', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/M00021_zpsa535f114.jpg', 148, 'NotOnEbay', 1250, '', 'M00021', '', '4', '', 0),
('Apple', '', '', 'WestEndStore', 'Mid 2013', 'Laptop', 'MacBook Air', 'C02L6KN4F5V8', 'Intel', 'i5', '1.3-2.6', 'Intel', 'HD Graphic 5000', '4', '256', 'SSD', '13', 'USB3.0', '2', 'Mini DP', '', 'Y', 'Y', '', 'OS X', '10.9.2', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/M00022_zps187321eb.jpg', 149, 'NotOnEbay', 885, '', 'M00022', '', '2', '', 0),
('Sony', '', '', 'Sold', '', 'Laptop', '305E4A', 'HS6D91TC700402V', 'AMD', 'A6-3420M', '1.5', 'AMD', '6470m + 6520g', '4', '500', 'HDD', '15.6', 'USB2.0', '3', 'VGA / HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '7 Home Premium', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/A00224_zps6907ef6d.jpg', 150, 'NotOnEbay', 440, '278', 'A00224', '', '4', '', 0),
('Acer', '', '', 'WestEndStore', '', 'Laptop', 'Aspire 5535', 'LXAUA0Y023911071332000', 'AMD', 'Athlon QL62', '2.0', 'ATI', 'Radeon HD 3200', '3', '160', 'HDD', '15.6', 'USB2.0', '3', 'VGA / HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '7 Home Premium', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/A00225_zpsda1c17ca.jpg', 151, 'NotOnEbay', 260, '', 'A00225', '', '2', '', 0),
('HP', '', '', 'DowntownStore', '', 'Laptop', 'Envy dv7', '2CE2372NL7', 'AMD', 'A8-4500m', '1.9', 'AMD', 'Radeon HD 7640G', '6', '600', 'HDD', '17.3', 'USB2.0', '4', 'VGA / HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '8.1', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/A00232_zps9ff8ca76.jpg', 152, 'NotOnEbay', 599, '', 'A00232', '10', '4', '', 0),
('Apple', '', '', 'WestEndStore', 'Mid 2012', 'Laptop', 'MacBook Pro', 'C02J70QSDV35', 'Intel', 'i7', '2.6', 'Nvidia', '650M', '8', '750', 'HDD', '15', 'USB2.0', '2', 'mini-DP', 'Y', 'Y', 'Y', 'Y', 'OS X', '10.9.2', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/DSC_0006_zps1147395c.jpg', 153, 'NotOnEbay', 1350, '', 'M00023', '', '4', '', 0),
('Apple', '', '', 'WestEndStore', 'Late2011', 'Laptop', 'MacBook Pro', 'C2GP0EBDV13', 'Intel', 'I5', '2.4', 'Intel', 'HD Graphic 3000', '4', '500', 'HDD', '13', 'USB2.0', '2', 'Mini DP', 'Y', 'Y', 'Y', 'Y', 'OS X', '10.9.2', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/DSC_0006_zps1147395c.jpg', 154, 'NotOnEbay', 798, '', 'M00024', '', '4', '', 0),
('Apple', '', '', 'WestEndStore', 'Mid 2011', 'Laptop', 'MacBook Air', 'C02GHAXYDJWT', 'Intel', 'I5', '1,7', 'Intel', 'HD Graphic 3000', '4', '128', 'SSD', '13', 'USB2.0', '2', 'Thunderbolt', 'Y', 'Y', 'Y', '', 'OS X', '10.9.2', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/M00022_zps187321eb.jpg', 155, 'NotOnEbay', 880, '', 'M00025', '', '4', '', 0),
('Apple', '', '', 'WestEndStore', 'Mid 2012', 'Laptop', 'MacBook Air', 'C02J857MDRV6', 'Intel', 'I5', '1.7', 'Intel', 'HD Graphic 3000', '4', '64', 'SSD', '11', 'USB2.0', '4', 'Thunderbolt', 'Y', 'Y', 'Y', '', 'OS X', '10.9.2', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/nophoto/gcom1_zpsbd7148d0.png', 156, 'NotOnEbay', 780, '', 'M00026', '', '4', '', 0),
('Toshiba', '', '', 'DowntownStore', '', 'Laptop', 'Satellite L840D', 'YC034687C', 'AMD', 'A8-4500m', '1.9', 'AMD', 'Radeon HD 7640G', '8', '600', 'HDD', '14.1', 'USB2.0', '3', 'VGA / HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '8.1', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/A00233_zps86d5ed37.jpg', 157, 'NotOnEbay', 499, '', 'A00233', '', '4', '', 0),
('Asus', '', '', 'DowntownStore', '', 'Laptop', 'K53U', 'B6N0CJ369197256', 'AMD', 'C-50', '1.0', 'AMD', 'Radeon HD 6250M', '3', '150', 'HDD', '15.6', 'USB2.0', '3', 'VGA / HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '7 Home Premium', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/DSC01413_zps49464276.jpg', 158, 'NotOnEbay', 320, '', 'A00234', '', '2', '', 0),
('HP', '', '', 'DowntownStore', '', 'Laptop', 'Pavilion 15', '5CD3374W2M', 'AMD', 'A6-5350M', '2.9', 'AMD', 'Radeon HD 8450G', '4', '750', 'HDD', '15.6', 'USB2.0', '3', 'VGA / HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '8.1', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/A00213_zps1c6a5e5b.jpg', 159, 'NotOnEbay', 440, '', 'A00235', '10', '2', '', 0),
('HP', '', '', 'DowntownStore', '', 'Laptop', '2000 Notebook', '5CG325470X', 'AMD', 'E2-2000', '1.8', 'AMD', 'Radeon HD 7340', '4', '500', 'HDD', '15.6', 'USB2.0', '3', 'VGA / HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '8.1', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/DSC_0015_zps9590f348.jpg?t=1395772691', 160, 'NotOnEbay', 330, '', 'A00236', '', '2', '', 0),
('Apple', '', '', 'WestEndStore', 'Late 2008', 'Laptop', 'MacBook Pro', 'W8915DAQ8Q1', 'Intel', 'Core 2 Duo', '2.4', 'Nvidia', 'Geforce 9400M', '4', '750', 'HDD', '15', 'USB2.0', '2', 'Mini DP', 'Y', 'Y', 'Y', 'Y', 'OS X', '10.9.2', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/DSC_0006_zps1147395c.jpg', 161, 'NotOnEbay', 650, '', 'M00027', '', '2', '', 0),
('Asus', '', '', 'Sold', '', 'Laptop', 'K55A', 'D1N0CV47622049', 'Intel', 'i7-6330QM', '2.4', 'Intel', 'HD Graphic 4000', '8', '500', 'HDD', '15.6', 'USB3.0', '3', 'VGA/HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '8.1', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/DSC_0010_zps859b1dd2.jpg', 162, 'NotOnEbay', 485, '', 'A00237', '', '4', '', 0),
('HP', '', '', 'WestEndStore', '', 'Laptop', '2000', '5CG311341Z', 'AMD', 'E1-1200', '1.4', 'AMD', 'HD 7310', '4', '320', 'HDD', '15.6', 'USB3.0', '3', 'VGA/HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '8.1', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/DSC_0015_zps9590f348.jpg?t=1395772691', 163, 'NotOnEbay', 310, '', 'A00238', '', '2', '', 0);
INSERT INTO `gcom` (`brand`, `customername`, `customercell`, `avaliablility`, `year`, `type`, `model`, `serialnumb`, `cpu`, `cpumodel`, `cpuspeed`, `gcard`, `gcardmodel`, `ram`, `HardDrive`, `HDType`, `size`, `usbtype`, `usbN`, `DisplayOutput`, `DVDdrive`, `webcam`, `wifi`, `lan`, `OS`, `OSversion`, `SystemType`, `Pic`, `Id`, `ebay`, `sellingprice`, `soldprice`, `SbaskedforID`, `SBasked`, `cpucores`, `onsale`, `secprice`) VALUES
('Asus', '', '', 'WestEndStore', '', 'Laptop', 'K55A', 'CBNOCV023029445', 'Intel', 'i3-3110M', '2.4', 'Intel', 'HD Graphic 4000', '4', '500', 'HDD', '15.6', 'USB3.0', '3', 'VGA/HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', 'XP Pro', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/DSC_0010_zps859b1dd2.jpg', 164, 'NotOnEbay', 385, '', 'A00239', '', '2', '', 0),
('Acer', '', '', 'WestEndStore', '', 'Laptop', 'V3-551', 'NXRZFAA01532003D353400', 'AMD', 'A8-4500M', '1.9', 'AMD', 'HD 7640G', '4', '750', 'HDD', '15.6', 'USB3.0', '3', 'VGA/HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '8.1', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/DSC_0027_zps1bed0fe8.jpg?t=1395773153', 165, 'NotOnEbay', 399, '', 'A00240', '', '4', '', 0),
('HP', '', '', 'WestEndStore', '', 'Laptop', 'CG62', 'CNF02D6ZD', 'AMD', 'V120', '2.2', 'AMD', 'M880G', '3', '250', 'HDD', '15.6', 'USB2.0', '3', 'VGA', 'Y', 'Y', 'Y', 'Y', 'Windows', '7 Home Premium', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/DSC_0011_zps4f554fa3.jpg', 166, 'NotOnEbay', 280, '', 'A00241', '', '1', '', 0),
('HP', '', '', 'WestEndStore', '', 'Laptop', 'G6', '5CG20118L8', 'AMD', 'A4-3320M', '2.0', 'AMD', 'HD 6480G', '4', '750', 'HDD', '15.6', 'USB2.0', '3', 'VGA/HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '7 Home Premium', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/DSC_0021_zps3a2bb3d0.jpg?t=1395773121', 167, 'NotOnEbay', 355, '', 'A00242', '', '2', '', 0),
('Gateway', '', '', 'WestEndStore', '', 'Laptop', 'NE56R', 'NXY1UAA030305D793400', 'Intel', 'PentiumB960', '2.2', 'Intel', 'HD Graphic', '4', '500', 'HDD', '15.6', 'USB2.0', '3', 'VGA/HDMI', 'Y', 'Y', 'Y', 'Y', 'Windows', '8.1', 'X64', 'http://i98.photobucket.com/albums/l264/gcomcomputer/A00216_zpsd19c4083.jpg', 168, 'NotOnEbay', 385, '', 'A00243', '', '2', '', 0),
('Acer', '', '', 'WestEndStore', '', 'Laptop', 'Aspire One', 'LUS670B0289384F2341601', 'Intel', 'Atom N270', '1.6', 'Intel', 'Mobile Graphic', '1', '160', 'HDD', '11', 'USB2.0', '3', 'VGA', '', 'Y', 'Y', 'Y', 'Windows', '7 Starter', 'X86', 'http://i98.photobucket.com/albums/l264/gcomcomputer/DSC_0012_zps452f3b9b.jpg', 169, 'NotOnEbay', 160, '', 'A00244', '', '2', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE IF NOT EXISTS `invoice` (
  `name` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `itemnumb` varchar(30) NOT NULL,
  `description` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `payment` varchar(30) NOT NULL,
  `Qty` int(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=102 ;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`name`, `phone`, `itemnumb`, `description`, `price`, `date`, `id`, `cid`, `payment`, `Qty`, `address`) VALUES
('jim korchinski', '7809183344', 'A00003', 'Macbook Black Late 2007', '450', '2014-05-06 18:55:38', 87, 1, 'Debit', 1, '9915 65ave edmonton'),
('William Bourne', '7802886135', 'M00018', 'Macbook Pro 2006', '428.57', '2014-05-06 19:12:13', 88, 2, 'Cash', 1, 'box 40029, 10025-106 st Edmonton, Ab'),
('kristy', 'akins', 'None', 'Dell 760 Desktop', '165', '2014-05-06 20:37:51', 89, 3, 'Credit', 1, '20136 48 ave'),
('kristy', 'akins', 'none', 'iPhone 3g case', '5', '2014-05-06 20:37:51', 90, 3, 'Credit', 1, '20136 48 ave'),
('Wilks Ernest Donald', '(780)459-6197', 'None', 'Acer Aspire One', '139', '2014-05-06 22:02:00', 93, 4, 'Debit', 1, '44 Fawcett Cres ST.Alberta'),
('Samantha Bakmeedeniya', '7809077834', 'A00193', 'Toshiba L300D', '150', '2014-05-06 22:20:54', 94, 5, 'Debit', 1, 'Edmonton'),
('cameron graham', '7804873357', 'None', 'System Repair', '76.2', '2014-05-06 23:17:18', 95, 6, 'Cash', 1, 'Edmonton'),
('Jonathan', '5878799477', 'A00148', 'HP DM3 No Warranty', '213.3', '2014-05-07 16:44:21', 96, 7, 'Cash', 1, 'unit 136 5604 199 street'),
('Renato', '7807093089', 'A00230', 'HP Pavilion dv5', '250', '2014-05-08 21:58:39', 97, 8, 'Debit', 1, '10916 136 Ave NW Edmonton, AB'),
('Raelynne', '597-523-5155', 'None', 'HP DV 6000 160GB', '200', '2014-05-09 21:58:29', 98, 9, 'Debit', 1, '#208-10335 156st'),
('SMALE William David', '7808847547', '0001', 'Repair deposit', '170', '2014-05-09 22:39:18', 99, 10, 'Debit', 1, '11343 75ave nw edmonton'),
('Ruel', '5879387714', 'A00219', 'DELL Inspiron 1525', '150', '2014-05-10 19:34:10', 100, 11, 'Credit', 1, '16936 85 Ave. NW Apt A'),
('manpreet bhangu', '5873369900', 'C00001', 'HP DV6000 Core 2 ', '199', '2014-05-10 20:00:48', 101, 12, 'Debit', 1, '16428 64 st');

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE IF NOT EXISTS `phone` (
  `brand` varchar(30) NOT NULL,
  `model` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `phonelock` varchar(30) NOT NULL,
  `looks` varchar(30) NOT NULL,
  `colour` varchar(30) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `serialnumb` varchar(30) NOT NULL,
  `pic` varchar(300) NOT NULL,
  `avaliablity` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `storage` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `phone`
--

INSERT INTO `phone` (`brand`, `model`, `price`, `phonelock`, `looks`, `colour`, `id`, `serialnumb`, `pic`, `avaliablity`, `type`, `storage`) VALUES
('Apple', 'iPhone 5C', 550, 'Unlock', '', 'Blue', 1, '', 'http://i98.photobucket.com/albums/l264/gcomcomputer/phone/DSC_0035_zps18a2a54c.jpg?t=1395943515', 'WestEndStore', 'Phone', '16'),
('Apple', 'iPhone 5C', 550, 'Unlock', '', 'Red', 2, '', 'http://i98.photobucket.com/albums/l264/gcomcomputer/phone/DSC_0036_zpsbf9b231a.jpg?t=1395943537', 'WestEndStore', 'Phone', '16'),
('Apple', 'iPhone 5', 480, 'Fido', '', 'White', 3, '', 'http://i98.photobucket.com/albums/l264/gcomcomputer/phone/DSC_0037_zps285a39e9.jpg?t=1395943574', 'WestEndStore', 'Phone', '16'),
('Apple', 'iPhone 5', 480, 'Rogers', '', 'Black', 4, '', 'http://i98.photobucket.com/albums/l264/gcomcomputer/phone/DSC_0038_zps3e1e4ff5.jpg?t=1395943585', 'WestEndStore', 'Phone', '16'),
('Apple', 'iPhone 5S', 650, 'Rogers', '', 'Gold', 5, '', 'http://i98.photobucket.com/albums/l264/gcomcomputer/phone/DSC_0039_zps04ed3358.jpg?t=1395943598', 'WestEndStore', 'Phone', '32'),
('Apple', 'iPhone 5', 480, 'Fido', '', 'White', 6, '', 'http://i98.photobucket.com/albums/l264/gcomcomputer/phone/DSC_0037_zps285a39e9.jpg?t=1395943574', 'WestEndStore', 'Phone', '16'),
('Apple', 'iPhone 5', 550, 'Bell', '', 'Black', 7, '', 'http://i98.photobucket.com/albums/l264/gcomcomputer/phone/DSC_0038_zps3e1e4ff5.jpg?t=1395943585', 'WestEndStore', 'Phone', '32'),
('Apple', 'iPhone 4S', 350, 'Fido', '', 'Black', 8, '', 'http://i98.photobucket.com/albums/l264/gcomcomputer/phone/DSC_0042_zps1f2b25ec.jpg?t=1395943669', 'WestEndStore', 'Phone', '16'),
('Apple', 'iPhone 4S', 400, 'Unlock', '', 'Black', 9, '', 'http://i98.photobucket.com/albums/l264/gcomcomputer/phone/DSC_0042_zps1f2b25ec.jpg?t=1395943669', 'WestEndStore', 'Phone', '16'),
('BlackBerry', 'Z10', 385, 'Telus', '', 'Black', 10, '', 'http://i98.photobucket.com/albums/l264/gcomcomputer/phone/DSC_0046_zps83e25cbb.jpg?t=1395952142', 'WestEndStore', 'Phone', '16'),
('BlackBerry', 'Z10', 385, 'Telus', '', 'White', 11, '', 'http://i98.photobucket.com/albums/l264/gcomcomputer/phone/DSC_0047_zps02df2939.jpg?t=1395952153', 'WestEndStore', 'Phone', '16'),
('BlackBerry', 'Z10', 385, 'Unlock', '', 'Black', 12, '', 'http://i98.photobucket.com/albums/l264/gcomcomputer/phone/DSC_0046_zps83e25cbb.jpg?t=1395952142', 'WestEndStore', 'Phone', '16'),
('BlackBerry', 'Z10', 385, 'Unlock', '', 'Black', 13, '', 'http://i98.photobucket.com/albums/l264/gcomcomputer/phone/DSC_0046_zps83e25cbb.jpg?t=1395952142', 'WestEndStore', 'Phone', '16'),
('Samsung', 'Galaxy S4', 450, 'Unlock', '', 'White', 14, '', 'http://i98.photobucket.com/albums/l264/gcomcomputer/phone/DSC_0048_zpsa4b03ec2.jpg?t=1395952176', 'WestEndStore', 'Phone', '16'),
('Samsung', 'Galaxy S3', 385, 'Unlock', '', 'Blue', 15, '', 'http://i98.photobucket.com/albums/l264/gcomcomputer/phone/DSC_0049_zpsd29ac367.jpg?t=1395952191', 'WestEndStore', 'Phone', '16'),
('Samsung', 'Galaxy S3', 385, 'Unlock', '', 'White', 16, '', 'http://i98.photobucket.com/albums/l264/gcomcomputer/phone/DSC_0050_zps28299e53.jpg?t=1395952195', 'WestEndStore', 'Phone', '16');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `username` char(15) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL DEFAULT '',
  `email` varchar(40) NOT NULL DEFAULT '',
  `regdate` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `username`, `password`, `email`, `regdate`) VALUES
(1, 'admin', '58118d1db3d840879bd46e1e8a0a1090', 'gcom.computer.ltd@gmail.com', 1399750665);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
