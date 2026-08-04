-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2020 at 07:52 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lasectabeauty`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_order`
--

CREATE TABLE `ci_order` (
  `order_id` int(11) NOT NULL,
  `order_detail_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_qty` int(11) NOT NULL,
  `order_price` float(10,2) NOT NULL,
  `order_name` varchar(255) NOT NULL,
  `order_color` varchar(255) NOT NULL,
  `order_image` varchar(255) NOT NULL,
  `order_category` varchar(255) NOT NULL,
  `order_datetime_create` datetime NOT NULL,
  `order_ip_create` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_order`
--

INSERT INTO `ci_order` (`order_id`, `order_detail_id`, `product_id`, `order_qty`, `order_price`, `order_name`, `order_color`, `order_image`, `order_category`, `order_datetime_create`, `order_ip_create`) VALUES
(1, 1, 1, 2, 28.00, 'Buate Hair conditioner', ' White', 'product_test12.png', 'MAKE UP', '2020-01-10 12:50:28', '::1'),
(2, 2, 3, 2, 700.00, 'Test', '', 'cart2_banner_mb.png', 'MAKE UP', '2020-01-10 13:30:30', '::1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_order`
--
ALTER TABLE `ci_order`
  ADD PRIMARY KEY (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ci_order`
--
ALTER TABLE `ci_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
