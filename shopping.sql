-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2017 at 07:50 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'H.P'),
(2, 'Samsung'),
(3, 'Apple'),
(4, 'Sony'),
(5, 'One Plus'),
(6, 'Duke'),
(7, 'Roadster'),
(8, 'Jockey'),
(9, 'Dell'),
(10, 'Nike');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `p_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `product_title` text NOT NULL,
  `product_image` text NOT NULL,
  `qty` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `total_amount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `user_id`, `product_title`, `product_image`, `qty`, `price`, `total_amount`) VALUES
(15, 10, 8, 'Grey Duke Tshirt', 'mens_tshirt_1', 2, 599, 1198),
(16, 9, 8, 'OnePlus 5 (Slate Gray 6GB RAM + 64GB memory)', 'oneplus-5', 2, 32999, 65998),
(17, 15, 8, 'Sony DSLR Camera', 'sony_dslr_camera', 1, 36999, 36999),
(18, 17, 8, 'Dell Laptop Pro', 'dell_laptop_2', 1, 32999, 32999),
(19, 4, 8, 'Original Genuine Apple Earphones', 'appleheadphone', 1, 2199, 2199),
(45, 20, 9, 'Mathematics R.D Sharma Vol1&2  ', 'rd', 2, 465, 930),
(46, 8, 9, 'Soft Gold 64 GB One Plus 3T', 'oneplus_3t', 1, 29999, 29999),
(47, 4, 9, 'Original Genuine Apple Earphones', 'appleheadphone', 1, 2199, 2199),
(48, 6, 9, 'H.P Laptop', 'hp_laptop_2', 1, 31999, 31999),
(49, 22, 9, 'Black Colour BackPack for mens.', 'bag_4', 1, 1299, 1299),
(50, 12, 9, 'Samsung S8', 'samsung_s8', 1, 29999, 29999),
(51, 13, 9, 'Sony Vaio Laptop', 'sony_vaio ', 1, 87999, 87999),
(52, 21, 9, 'Wings Of Fire by ABDUL KALAM', 'kalam', 1, 430, 430),
(53, 5, 9, 'H.P Laptop pro', 'hp_laptop_1', 1, 45999, 45999),
(54, 16, 5, 'Dell Laptop 5th Gen ', 'dell_laptop_1', 1, 46999, 46999),
(55, 18, 5, 'Harry Potter And The Deathly Hallows', 'potter_1', 1, 549, 549),
(56, 2, 5, 'Apple iphone 7 plus', 'iphone_7', 1, 74999, 74999),
(57, 9, 5, 'OnePlus 5 (Slate Gray 6GB RAM + 64GB memory)', 'oneplus-5', 1, 32999, 32999),
(58, 23, 5, 'Golden Brown Pure Leather Bag for Girls', 'bag_2', 1, 1899, 1899);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Electronics'),
(2, 'Ladies Wear'),
(3, 'Mens Wear'),
(4, 'Kids Wear'),
(5, 'Furnitures'),
(6, 'Home Appliances'),
(7, 'Electronic Gadgets'),
(8, 'Books'),
(9, 'Backpacks'),
(10, 'Musical Instruments');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(300) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES
(1, 1, 3, 'Apple Macbook Pro', 159999, 'Silver-Grey Macbook Pro', 'apple_macbook_1', 'apple macbook'),
(2, 1, 3, 'Apple iphone 7 plus', 74999, 'Soft Gold 128 GB Aplle iphone 7 plus', 'iphone_7', 'Apple iphone 7'),
(3, 1, 3, 'Apple iphone 6 Plus', 34999, 'Silver-Grey 64 GB Apple iphone 6 plus', 'iphone6p', 'Apple iphone 6 plus'),
(4, 1, 3, 'Original Genuine Apple Earphones', 2199, 'White Apple Earphones ', 'appleheadphone', 'Apple headphones'),
(5, 1, 1, 'H.P Laptop pro', 45999, '4 GB Ram 5th Gen i7 Black H.P Laptop ', 'hp_laptop_1', 'H.P Laptop'),
(6, 1, 1, 'H.P Laptop', 31999, '4 G.B Ram i3 3rd Gen Black H.P\r\nlaptop ', 'hp_laptop_2', 'H.P Laptop'),
(7, 1, 5, 'Black Stone 64 GB One Plus One', 19999, 'Black Stone 64 GB , 4 GB Ram One Plus One Phone', 'oneplus_1', 'One Plus'),
(8, 1, 5, 'Soft Gold 64 GB One Plus 3T', 29999, 'Soft Gold 64 GB , 4 GB Ram One Plus 3T Phone', 'oneplus_3t', 'One Plus Phone'),
(9, 1, 5, 'OnePlus 5 (Slate Gray 6GB RAM + 64GB memory)', 32999, 'Slate Gray 6GB RAM + 64GB memory\r\n\r\n', 'oneplus-5', 'One Plus Phone '),
(10, 3, 6, 'Grey Duke Tshirt', 599, 'Best Quality Grey coloured Cotton Duke Tsirt ', 'mens_tshirt_1', 'Duke tshirt'),
(11, 1, 2, 'Samsung S7', 24999, 'Grey Colour Samsung S7', 'samsung_s7', 'Samsung Phone'),
(12, 1, 2, 'Samsung S8', 29999, 'Blue Colour Round Edges Samsung S8 ', 'samsung_s8', 'Samsung Phone'),
(13, 1, 4, 'Sony Vaio Laptop', 87999, 'Pink Colour 4 GB Ram , Sony Vaio Laptop  \r\n', 'sony_vaio ', 'sony product'),
(14, 1, 4, 'Navy Blue Sony Xperia Z-x', 27999, 'Slim Body 4 GB Ram 128 GB Sony Xperia Z-x\r\ncolour : Navy Blue  ', 'sony_xperia', 'sony product'),
(15, 1, 4, 'Sony DSLR Camera', 36999, 'Black Coloured Auto Zoom Sony DSLR Camera ', 'sony_dslr_camera', 'Sony Product'),
(16, 1, 9, 'Dell Laptop 5th Gen ', 46999, '5th Gen Dell Laptop i3 core processor', 'dell_laptop_1', 'Dell Laptop '),
(17, 1, 9, 'Dell Laptop Pro', 32999, '3th Gen Dell Laptop i3 core processor.\r\n4 GB Ram. ', 'dell_laptop_2', 'Dell Laptop'),
(18, 8, 0, 'Harry Potter And The Deathly Hallows', 549, 'Harry Potter And The Deathly Hallows\r\npage 500\r\nHarry Potter\r\n', 'potter_1', 'book'),
(19, 8, 0, 'Half Girlfriend by Chetan Bhagat', 349, 'Half Girlfriend by Chetan Bhagat \r\npages : 340\r\nChetan Bhagat', 'chetan', 'book'),
(20, 8, 0, 'Mathematics R.D Sharma Vol1&2  ', 465, 'Mathematics R.D Sharma Vol1&2  for class \r\nXII.', 'rd', 'book'),
(21, 8, 0, 'Wings Of Fire by ABDUL KALAM', 430, 'Wings Of Fire by ABDUL KALAM', 'kalam', 'book'),
(22, 9, 0, 'Black Colour BackPack for mens.', 1299, 'Black Colour BackPack for mens with 8 pockets and laptop bag.', 'bag_4', 'bags'),
(23, 9, 0, 'Golden Brown Pure Leather Bag for Girls', 1899, 'Golden Brown Pure Leather Bag for Girls.\r\nLaptop Bag also.', 'bag_2', 'bags');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(500) NOT NULL,
  `address2` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(5, 'Ayush', 'Agrawal', 'ayush1997agrawal.21@gmail.com', '$2y$10$mVisrVaz.xlsxUJ8Xs0EPufVENJ98iBKGxwaTT.ewq1CGFS2UWvEa', '9795335644', 'Beni Ganj', 'Allahabad'),
(6, 'Mukul ', 'Agrawal', 'ayush1997@gmail.com', '$2y$10$VKQ4Iql1GCEl9tHEBPuSNeZVHzQe/fSWDMij.RYKrsdkLRhEG4CxG', '8785335644', 'BeniGanj', 'Allahaabd'),
(7, 'Mukul', 'Agrawal', 'mukulagrawal@gmail.com', '$2y$10$uyQ0gMQcbvBPlbZ6ArmSZOZHpnE0VQ0Wt6HUWYXuhBhOA4cRANav6', '9795335644', 'Bengaluru', 'Karnataka'),
(8, 'Mukul', 'Agrawal', 'mukulagrawal.1993@gmail.com', '$2y$10$sxccfAzPRcPtv4M2rIZSRumuZIVvCGoJRZXPiRkfo0pHKQK4qUfzS', '9795335644', 'Bengaluru', 'Karnataka'),
(9, 'Abiral', 'Singh', 'bighero6@gmail.com', '$2y$10$Di5AUnNCTi8WV1QpBWFz0up5bEEofnqWnYjZwg8YiUFuaukOr.eq.', '9999999999', 'washington dc', 'paris');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
