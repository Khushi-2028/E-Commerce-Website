-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2025 at 07:56 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `raipur_cart`
--
CREATE DATABASE IF NOT EXISTS `raipur_cart` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `raipur_cart`;

-- --------------------------------------------------------

--
-- Table structure for table `cart_info`
--

CREATE TABLE IF NOT EXISTS `cart_info` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(30) NOT NULL,
  `item_id` int(11) NOT NULL,
  `rate` float NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `cart_info`
--

INSERT INTO `cart_info` (`cart_id`, `user_name`, `item_id`, `rate`, `quantity`) VALUES
(8, 'ram', 22, 3965.5, 3),
(11, 'a', 4, 1200, 3),
(12, 'ram', 18, 1154.23, 1),
(13, 'ram', 19, 1339.33, 1),
(14, 'ram', 10, 78200, 1),
(16, 'ram', 4, 1200, 2);

-- --------------------------------------------------------

--
-- Table structure for table `category_info`
--

CREATE TABLE IF NOT EXISTS `category_info` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(40) NOT NULL,
  `cat_dname` varchar(40) NOT NULL,
  `cat_type` varchar(15) NOT NULL,
  `cat_parent` int(11) NOT NULL,
  `image_path` varchar(50) NOT NULL,
  `reg_date` date NOT NULL,
  `create_by` varchar(40) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `category_info`
--

INSERT INTO `category_info` (`cat_id`, `cat_name`, `cat_dname`, `cat_type`, `cat_parent`, `image_path`, `reg_date`, `create_by`) VALUES
(1, 'Electronics', 'Electronics', 'Primary', 0, 'p1.jpg', '2025-02-22', 'a'),
(2, 'Jewellary', 'Jewellary', 'Primary', 0, 'j1.jpg', '2025-02-22', 'a'),
(3, 'Furniture', 'Furniture', 'Primary', 0, 'f3.jpg', '2025-02-22', 'a'),
(4, 'Mobile', 'Mobile', 'Secondary', 1, 'p4.jpg', '2025-02-22', 'a'),
(5, 'Shoes', 'Shoes', 'Primary', 0, 's1.jpg', '2025-02-22', 'a'),
(6, 'Samsung Mobile', 'Samsung', 'Secondary', 4, 'p5.jpg', '2025-02-22', 'a'),
(8, 'redmi', 'redmi', 'Secondary', 4, '1740466151_p2.jpg', '2025-02-25', 'a'),
(9, 'nothing', 'nothing', 'Secondary', 4, '1740466244_p3.jpg', '2025-02-25', 'a'),
(11, 'sofa', 'sofa', 'Secondary', 3, '1740466386_f4.jpg', '2025-02-25', 'a'),
(12, 'table', 'table', 'Secondary', 3, '1740466413_f2.jpg', '2025-02-25', 'a'),
(13, 'almira', 'almira', 'Secondary', 3, '1740466476_f5.jpg', '2025-02-25', 'a'),
(14, 'nacklace', 'nacklace', 'Secondary', 2, '1740466650_f2.jpg', '2025-02-25', 'a'),
(15, 'wedding nacklace', 'wedding nacklace', 'Secondary', 2, '1740466696_f4.jpg', '2025-02-25', 'a'),
(16, 'Dimond nacklace', 'Dimond nacklace', 'Secondary', 2, '1740466720_f3.jpg', '2025-02-25', 'a'),
(17, '7 seater sofa ', '7 seater sofa ', 'Secondary', 11, '1740467015_f1.jpg', '2025-02-25', 'a'),
(18, 'wooden almari', 'wooden almari', 'Secondary', 13, '1740467163_f6.jpg', '2025-02-25', 'a'),
(19, 'glassy almira', 'glassy almira', 'Secondary', 13, '1740467193_f7.jpg', '2025-02-25', 'a'),
(20, 'tea-table', 'tea-table', 'Secondary', 12, '1740467312_f8.jpg', '2025-02-25', 'a'),
(21, 'dinning table', 'dinning table', 'Secondary', 12, '1740467333_f9.jpg', '2025-02-25', 'a'),
(22, 'blue stone ', 'blue stone diamond', 'Secondary', 16, '1740467624_df5.jpg', '2025-02-25', 'a'),
(24, 'freash stone diamond', 'freash stone diamond', 'Secondary', 16, '1740467764_df4.jpg', '2025-02-25', 'a'),
(25, 'temple jewellary', 'freash stone diamond', 'Secondary', 15, '1740467910_wf6.jpg', '2025-02-25', 'a'),
(27, 'choker', 'choker', 'Secondary', 15, '1740467963_wf7.jpg', '2025-02-25', 'a'),
(28, 'dresses', 'dresses', 'Primary', 0, '1740468120_caaaatdresses.jpg', '2025-02-25', 'a'),
(29, 'woman', 'woman', 'Secondary', 28, '1740468261_d3.jpg', '2025-02-25', 'a'),
(30, 'mens', 'mens', 'Secondary', 28, '1740468422_md3.jpg', '2025-02-25', 'a'),
(35, 'cosmetics', 'cosmetics', 'Primary', 0, '1740468877_c1.jpg', '2025-02-25', 'a'),
(36, 'lipsticks', 'lipsticks', 'Secondary', 35, '1740468912_c2.jpg', '2025-02-25', 'a'),
(37, 'kajal', 'kajal', 'Secondary', 35, '1740468938_ck3.jpg', '2025-02-25', 'a'),
(40, 'blue kajal', 'blue kajal', 'Secondary', 37, '1740469073_ck1.jpg', '2025-02-25', 'a'),
(41, 'get two kajal', 'get two kajal', 'Secondary', 37, '1740469105_ck2.jpg', '2025-02-25', 'a'),
(42, 'bata ', 'bata', 'Secondary', 5, '1740469212_s1.jpg', '2025-02-25', 'a'),
(43, 'grey shoes', 'grey shoes', 'Secondary', 42, '1740469247_s4.jpg', '2025-02-25', 'a'),
(44, 'brown shoes', 'brown shoes', 'Secondary', 42, '1740469268_s3.jpg', '2025-02-25', 'a'),
(45, 'heels', 'heels', 'Secondary', 5, '1740469413_h1.jpg', '2025-02-25', 'a'),
(46, 'pencil heels', 'pencil heels', 'Secondary', 45, '1740469443_h2.jpg', '2025-02-25', 'a'),
(47, 'platform heels', 'platform heels', 'Secondary', 45, '1740469470_h3.jpg', '2025-02-25', 'a'),
(48, 'Iphone', 'Iphone', 'Secondary', 4, '1740637636_ip16.jpg', '2025-02-27', 'a'),
(49, 'makeup', 'Swiss Beauty', 'Primary', 0, '1755063165_sbeauty.avif', '2025-08-13', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE IF NOT EXISTS `customer_info` (
  `cust_id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_name` varchar(30) NOT NULL,
  `cust_email` varchar(30) NOT NULL,
  `cust_mobile` varchar(25) NOT NULL,
  `cust_address` text NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_pass` varchar(30) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `reg_date` date NOT NULL,
  PRIMARY KEY (`cust_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `customer_info`
--

INSERT INTO `customer_info` (`cust_id`, `cust_name`, `cust_email`, `cust_mobile`, `cust_address`, `user_name`, `user_pass`, `user_type`, `reg_date`) VALUES
(1, 'ram kumar sharma', 'ram@gmail.com', '1452455', 'shankar nagar,\r\nraipur', 'ram', 'r', 'user', '2025-08-02'),
(2, 'mohit verma', 'mohit@gmail.com', '55656555', 'durg', 'm', 'm', 'user', '2025-08-02'),
(3, 'sonu verma', 'sonuverma@gmail.com', '99869898987', 'ganj para,\r\ndurg', 'sonu', 'sonu', 'user', '2025-08-02'),
(4, 'Vijay kapoor', 'vijuay@gmail.com', '9874561234', 'vaishali nagar, indore', 'a', 'a', 'admin', '2025-08-20'),
(5, 'Trisha Sahu', 'trisha@gmail.com', '2354897687', 'Shanti Nagar,Durg', 'trisha', 'trisha', 'user', '2025-08-13'),
(6, 'Trisha Sahu', 'trisha@gmail.com', '2354897687', 'Shanti Nagar,Durg', 'trisha', 'trisha', 'user', '2025-08-13');

-- --------------------------------------------------------

--
-- Table structure for table `message_info`
--

CREATE TABLE IF NOT EXISTS `message_info` (
  `msg_id` int(11) NOT NULL AUTO_INCREMENT,
  `msg_heading` text NOT NULL,
  `msg_detail` text NOT NULL,
  `sender_name` varchar(30) NOT NULL,
  `receiver_name` varchar(30) NOT NULL,
  `sent_date` datetime NOT NULL,
  PRIMARY KEY (`msg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `message_info`
--

INSERT INTO `message_info` (`msg_id`, `msg_heading`, `msg_detail`, `sender_name`, `receiver_name`, `sent_date`) VALUES
(1, 'Sony Dealer from Chandigarh is giving wrong product', 'Dear sir,\r\nI had given order for sony 43" T.V last week which is not delivered yet...', 'ram', 'admin', '2025-08-11 17:47:23'),
(6, 'complain received', 'we will take fruitful action against that vendor\r\nvery soon.\r\nfor right now ,you can apply for returning this product...', 'a', 'ram', '2025-08-11 19:41:29'),
(7, 'complain received', 'we will be solving this issue soon till then you can get return of the product.', 'a', 'ram', '2025-08-13 10:30:39');

-- --------------------------------------------------------

--
-- Table structure for table `news_info`
--

CREATE TABLE IF NOT EXISTS `news_info` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `news_heading` text NOT NULL,
  `news_detail` text NOT NULL,
  `reg_date` date NOT NULL,
  `delete_status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `news_info`
--

INSERT INTO `news_info` (`news_id`, `news_heading`, `news_detail`, `reg_date`, `delete_status`) VALUES
(1, 'we will open offer on next month', 'each product 50% discount..', '2025-08-11', 0),
(2, 'complain received of Cosmetics', 'We will be rechecking each product expired date regularly...', '2025-08-13', 0);

-- --------------------------------------------------------

--
-- Table structure for table `offer_info`
--

CREATE TABLE IF NOT EXISTS `offer_info` (
  `offer_id` int(11) NOT NULL AUTO_INCREMENT,
  `offer_name` text NOT NULL,
  `offer_start_dt` datetime NOT NULL,
  `offer_end_dt` datetime NOT NULL,
  `cat_type` text NOT NULL,
  `offer_discount` float NOT NULL,
  `reg_date` date NOT NULL,
  PRIMARY KEY (`offer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `offer_info`
--

INSERT INTO `offer_info` (`offer_id`, `offer_name`, `offer_start_dt`, `offer_end_dt`, `cat_type`, `offer_discount`, `reg_date`) VALUES
(1, 'Janmastami ', '2025-08-15 00:00:00', '2025-09-11 00:00:00', '3-11-17-12-20-21-13-18-19-', 10, '2025-08-12'),
(2, 'Independence', '2025-08-14 00:00:00', '2025-09-26 00:00:00', '3-11-17-12-20-21-13-18-19-', 5, '2025-08-13');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE IF NOT EXISTS `order_detail` (
  `detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `rate` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `ref_order_id` int(11) NOT NULL,
  `order_status` varchar(20) NOT NULL,
  PRIMARY KEY (`detail_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`detail_id`, `item_id`, `rate`, `quantity`, `ref_order_id`, `order_status`) VALUES
(1, 2, 270, 5, 1, ''),
(2, 4, 1200, 3, 1, ''),
(3, 17, 494, 2, 1, ''),
(4, 22, 3965.5, 2, 3, ''),
(5, 23, 7200, 1, 3, ''),
(6, 2, 270, 4, 4, 'initiate'),
(7, 22, 3965.5, 7, 5, 'initiate'),
(8, 18, 1154.23, 6, 6, 'initiate');

-- --------------------------------------------------------

--
-- Table structure for table `order_main`
--

CREATE TABLE IF NOT EXISTS `order_main` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(30) NOT NULL,
  `shipping_address` text NOT NULL,
  `total_amount` float NOT NULL,
  `order_date` date NOT NULL,
  `order_status` varchar(30) NOT NULL,
  `update_date` date NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `order_main`
--

INSERT INTO `order_main` (`order_id`, `user_name`, `shipping_address`, `total_amount`, `order_date`, `order_status`, `update_date`) VALUES
(1, 'ram', '172, Om parisar,\r\nNear Durg Railway Station\r\nDurg (C.G.)', 5938, '2025-08-06', 'Initiate', '2025-08-12'),
(3, 'sonu', 'ganj para,\r\ndurg', 15131, '2025-08-06', '', '2025-08-11'),
(4, 'ram', 'shankar nagar,\r\nraipur', 1080, '2025-08-06', 'Cancel', '2025-08-12'),
(5, 'a', 'vaishali nagar, indore', 27758.5, '2025-08-10', '', '2025-08-11'),
(6, 'a', 'vaishali nagar, indore', 6925.38, '2025-08-10', 'Dispatched', '2025-08-12');

-- --------------------------------------------------------

--
-- Table structure for table `product_info`
--

CREATE TABLE IF NOT EXISTS `product_info` (
  `prod_id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_name` varchar(40) NOT NULL,
  `parent_cat_id` int(11) NOT NULL,
  `prod_rate` float NOT NULL,
  `prod_discount` float NOT NULL,
  `prod_detail` text NOT NULL,
  `image_path` text NOT NULL,
  `create_by` varchar(40) NOT NULL,
  `reg_date` date NOT NULL,
  PRIMARY KEY (`prod_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `product_info`
--

INSERT INTO `product_info` (`prod_id`, `prod_name`, `parent_cat_id`, `prod_rate`, `prod_discount`, `prod_detail`, `image_path`, `create_by`, `reg_date`) VALUES
(1, 'samsung note 4', 6, 20000, 10, '64MP Front and Back Cam, 8GB RAM, 128GB ROM', '1740460121_banner-onlineapp.png', 'a', '2025-02-25'),
(2, 'Goldan Chockies', 0, 300, 10, 'Tasty Chocklats in Nuts flavered', '1740460752_product-thumb-22.png', 'a', '2025-02-25'),
(3, 'redmi', 4, 15000, 12, '6GB RAM 128GB ROM', '1740465948_p2.jpg', 'a', '2025-02-25'),
(4, 'Bata 2032', 42, 1500, 20, 'black heel sandle....', '1740632276_h2.jpg', 'a', '2025-02-27'),
(5, 'Laptop Bag 101', 0, 5000, 50, 'Side Laptop with gray color,\r\n6 pockets, 3 side holders.', '1740632453_514YLZGCX0L._SX300_SY300_QL70_FMwebp_.webp', 'a', '2025-02-27'),
(6, 'Iphone 13', 48, 45000, 10, 'Iphone 13\r\nColor red \r\nRam 8GB\r\nStorage 128', '1740637721_ip13.jpg', 'a', '2025-02-27'),
(7, 'IPhone 14', 48, 55000, 10, 'Iphone 14\r\nColor Grey \r\nRam 8GB\r\nStorage 128', '1740637768_ip14.jpg', 'a', '2025-02-27'),
(8, 'IPhone 15', 48, 65000, 10, 'Iphone 15\r\nColor Blue\r\nRam 8GB\r\nStorage 128', '1740637807_ip15.jpg', 'a', '2025-02-27'),
(9, 'Iphone 16', 48, 85000, 8, 'Iphone 16\r\nColor Teal\r\nRam 8GB\r\nStorage 128', '1740637865_ip16.jpg', 'a', '2025-02-27'),
(10, 'Iphone 16', 0, 85000, 8, 'Iphone 16\r\nColor Teal \r\nRam 8GB\r\nStorage 128', '1740637943_ip16.jpg', 'a', '2025-02-27'),
(11, 'Samsun S22', 6, 30000, 7, 'Samsung S22 Ultra\r\nColor Purple\r\nRAM 8 GB\r\nStorage 256', '1740638068_s22.jpg', 'a', '2025-02-27'),
(12, 'Samsung s21', 6, 40000, 6, 'Samsung S21 Ultra\r\nColor Red\r\nRAM 8 GB\r\nStorage 256', '1740638107_s21.jpg', 'a', '2025-02-27'),
(13, 'Samsung S23', 6, 50000, 5, 'Samsung S23 Ultra\r\nColor Purple\r\nRAM 8 GB\r\nStorage 256', '1740638159_s23.jpg', 'a', '2025-02-27'),
(14, 'Samsung s24', 6, 75000, 3, 'Samsung S24 Ultra\r\nColor Purple\r\nRAM 8 GB\r\nStorage 256', '1740638227_s24.jpg', 'a', '2025-02-27'),
(15, 'Samsung s24', 0, 75000, 3, 'Samsung S24 Ultra\r\nColor Purple\r\nRAM 8 GB\r\nStorage 256', '1740638295_s24.jpg', 'a', '2025-02-27'),
(16, 'Lakme 9', 36, 450, 10, 'Lakme 9 TO 5 Primer \r\nMatte Lip Color\r\nPink Punch', '1740723148_lip2.jpg', 'a', '2025-02-28'),
(17, 'Maybeline lips', 0, 520, 5, 'This intense and highly pigmented liquid matte lipstick \n', '1740723232_lip1.jpg', 'a', '2025-02-28'),
(18, 'Spaghetti Strap Ruched Mermaid', 29, 1499, 23, 'Solid Color Spaghetti Strap Ruched Mermaid Dress', '1740723458_dress1.jpg', 'a', '2025-02-28'),
(19, 'Maxi Dress In Pink', 0, 1999, 33, 'Cowl Neck Solid Ruffle Hem Ruched Maxi Dress In Pink', '1740723583_dress2.jpg', 'a', '2025-02-28'),
(20, ' WINTAGE Men Suit', 30, 5000, 25, 'Dimensions:40 x 30 x 6 cm; 1.2 kg\r\nCountry of Origin:India\r\n', '1740724173_men1.jpg', 'a', '2025-02-28'),
(21, ' Men Solid Pure Cotton ', 30, 4999, 33, 'Men Solid Pure Cotton Ethnic Dress', '1740724233_men2.jpg', 'a', '2025-02-28'),
(22, ' Indo Western Dress', 0, 5150, 23, 'Fully Customized Indo Western dress for wedding', '1740724288_men3.jpg', 'a', '2025-02-28'),
(23, 'Plastic Cart 101', 0, 8000, 10, 'having capacity 300kg', '1754281568_trolley.png', 'a', '2025-08-04'),
(24, 'Swiss Beauty', 35, 450, 2, 'Swiss Beauty is India’s fastest-growing beauty and cosmetics brand that aims to be every makeup lover’s BFF', '1755063359_sbeauty.avif', 'a', '2025-08-13');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
