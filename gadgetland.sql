-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2015 at 02:35 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gadgetland`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', '121b55f928c4a4a34010b549f8a36320');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE IF NOT EXISTS `brand` (
  `brand_id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(200) NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`) VALUES
(1, 'LG'),
(2, 'Dell'),
(3, 'HP'),
(4, 'Samsung'),
(5, 'Sony'),
(6, 'Acer'),
(7, 'Walton');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(200) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Notebooks'),
(3, 'Smartphones'),
(4, 'Camera'),
(5, 'Pendrive'),
(6, 'Desktop');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_cat` int(100) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` decimal(65,0) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL,
  `product_quantity` int(100) NOT NULL,
  PRIMARY KEY (`product_id`),
  KEY `product_cat` (`product_cat`),
  KEY `product_cat_2` (`product_cat`),
  KEY `product_brand` (`product_brand`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`, `product_quantity`) VALUES
(3, 1, 3, 'HP Probook P440', '40000', 'Processor	4th Gen. Core i3 4100M\nClock Rate	2.5GHz\nRAM Type	DDR3\nRAM	4GB\nHDD	500GB\nDisplay Size	14\nBackup Time	3.5 Hrs\nBattery	6 cell\nOperating System	Free Dos\nWeight	2.1 Kg', 'HPP440.jpg', 'notebook laptop', 22),
(5, 1, 5, 'Sony Vaio 53', '57200', 'Processor	3rd Gen. Intel Core i3 3217U\nClock Rate	1.8GHz\nRAM Type	DDR3\nRAM	2 GB\nHDD	500 GB\nDisplay Size	14.1"\nDisplay Type	LED\nBackup Time	4 Hours\nBattery	4 Cell\nWeight	2.2 kg', 'SonyVaio53.png', 'notebook laptop', 11),
(6, 1, 6, 'Acer Aspire E1410', '26000', 'Processor	Celeron Quad Core N2920\nClock Rate	1.86GHz\nRAM Type	DDR3 1600MHz\nRAM	2 GB\nHDD	500GB\nDisplay Size	14"\nDisplay Type	LED Display\nBackup Time	3.5 Hrs Backup\nBattery	4 Cell\nWeight	2.1Kg\n', 'AcerAspireE1410.png', 'notebook laptop', 13),
(7, 3, 1, 'LG G3s', '10000', 'Smartphone\n- 2014 year\n- Classic\n- GSM (900, 1800, 1900)\n- Width: 1 cm\n- Touchscreen: 720x1280 px, Color\n- Camera (8 mpx), led flash\n- MP3 player, Videoplayer, FM radio\n- Bluetooth, Wi-Fi, USB\n- GPS', 'lgg3.jpg', 'Smartphone', 14),
(8, 3, 4, 'Samsung Galaxy S4', '38000', 'Camera	13 Megapixel || Video: Yes, 1080p, 30fps Secondary 2 MP || Video: Yes1080p@30fps\nInternet	GPRS: Yes || EDGE: Yes, 3G, 4G, Wi-Fi 802.11 a/b/g/n/ac, dual-band, DLNA, Wi-Fi Direct\nFM Radio	No\nAudio Player	MP3, WAV, eAAC+, AC3, FLAC\nVideo Player	MP4, DivX, XviD, WMV, H.264, H.263', 'SamS4.jpg', 'Smartphone', 15),
(9, 3, 4, 'Samsung Galaxy S3', '16200', 'Samsung Galaxy S III (I9300) is a power-packed Android (ICS) smartphone\nIt has a 4.8-inch Super AMOLED capacitive touchscreen with ~306 PPI density\nThe S III features an 8 MP back camera and a 1.9 MP front camera\nThe phone is powered with 1.4 GHz quad-core Cortex A9 processor\nIt has 1 GB RAM and comes with variants of 16/32/64 GB of internal storage\nIt supports HSPA, Wi-Fi, NFC, Bluetooth & MicroUSB\n- See more at: http://www.mysmartprice.com/mobile/samsung-galaxy-s3-msp1765#sthash.dwSuQNbc.dpuf', 'SamS3.jpg', 'Smartphone', 0),
(10, 3, 5, 'Sony Xperia Z3', '59000', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rhoncus laoreet ante sed convallis. Vestibulum efficitur suscipit volutpat. Nullam sit amet mattis urna, vitae elementum enim. In sagittis imperdiet dignissim. Proin sed turpis vitae velit fringilla consequat. Etiam maximus augue vitae egestas commodo. Aliquam dapibus placerat tellus in vulputate. Cras tristique quam vel metus semper, a interdum lorem dictum.', 'sxZ3.jpg', 'phone', 0),
(11, 3, 5, 'Sony Xperia M2', '27000', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rhoncus laoreet ante sed convallis. Vestibulum efficitur suscipit volutpat. Nullam sit amet mattis urna, vitae elementum enim. In sagittis imperdiet dignissim. Proin sed turpis vitae velit fringilla consequat. Etiam maximus augue vitae egestas commodo. Aliquam dapibus placerat tellus in vulputate. Cras tristique quam vel metus semper, a interdum lorem dictum.', 'sxM2.jpg', 'Smartphone', 0),
(12, 3, 5, 'Sony Xperia C3', '25000', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rhoncus laoreet ante sed convallis. Vestibulum efficitur suscipit volutpat. Nullam sit amet mattis urna, vitae elementum enim. In sagittis imperdiet dignissim. Proin sed turpis vitae velit fringilla consequat. Etiam maximus augue vitae egestas commodo. Aliquam dapibus placerat tellus in vulputate. Cras tristique quam vel metus semper, a interdum lorem dictum.', 'sxC3.jpg', 'Smartphone', 0),
(13, 3, 5, 'Sony Xperia T3', '26500', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rhoncus laoreet ante sed convallis. Vestibulum efficitur suscipit volutpat. Nullam sit amet mattis urna, vitae elementum enim. In sagittis imperdiet dignissim. Proin sed turpis vitae velit fringilla consequat. Etiam maximus augue vitae egestas commodo. Aliquam dapibus placerat tellus in vulputate. Cras tristique quam vel metus semper, a interdum lorem dictum.', 'sxT3.jpg', 'Smartphone', 0),
(14, 3, 5, 'Sony Xperia Z2', '49000', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rhoncus laoreet ante sed convallis. Vestibulum efficitur suscipit volutpat. Nullam sit amet mattis urna, vitae elementum enim. In sagittis imperdiet dignissim. Proin sed turpis vitae velit fringilla consequat. Etiam maximus augue vitae egestas commodo. Aliquam dapibus placerat tellus in vulputate. Cras tristique quam vel metus semper, a interdum lorem dictum.', 'sxZ2.jpg', 'Smartphone', 0);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `review_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `fullreview` text NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`review_id`),
  KEY `product_id` (`product_id`),
  KEY `product_id_2` (`product_id`),
  KEY `product_id_3` (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `name`, `email`, `title`, `fullreview`, `product_id`) VALUES
(1, 'Rashidul Hasan', 'rashidul69@gmail.com', 'This is a nice Lappy', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rhoncus laoreet ante sed convallis. Vestibulum efficitur suscipit volutpat. Nullam sit amet mattis urna, vitae elementum enim. In sagittis imperdiet dignissim. Proin sed turpis vitae velit fringilla consequat. Etiam maximus augue vitae egestas commodo. Aliquam dapibus placerat tellus in vulputate. Cras tristique quam vel metus semper, a interdum lorem dictum.', 3),
(2, 'Sheefa Azmain', 'sheefa@gmail.com', 'wow nice', 'very nice laptop buy it', 3),
(3, 'Rashidul Hasan', 'rashidul69@gmail.com', 'great pc!', 'onek jotil vallagse vaia', 5),
(5, 'Aisha', 'aisha@gmail.com', 'onek sundor', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rhoncus laoreet ante sed convallis. Vestibulum efficitur suscipit volutpat. Nullam sit amet mattis urna, vitae elementum enim. In sagittis imperdiet dignissim. Proin sed turpis vitae velit fringilla consequat. Etiam maximus augue vitae egestas commodo. Aliquam dapibus placerat tellus in vulputate. Cras tristique quam vel metus semper, a interdum lorem dictum.', 5),
(6, 'Shatu', 'shatu@shatu.com', 'Awesome!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rhoncus laoreet ante sed convallis. Vestibulum efficitur suscipit volutpat. Nullam sit amet mattis urna, vitae elementum enim. In sagittis imperdiet dignissim. Proin sed turpis vitae velit fringilla consequat. Etiam maximus augue vitae egestas commodo. Aliquam dapibus placerat tellus in vulputate. Cras tristique quam vel metus semper, a interdum lorem dictum.', 7);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`product_cat`) REFERENCES `category` (`category_id`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`product_brand`) REFERENCES `brand` (`brand_id`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
