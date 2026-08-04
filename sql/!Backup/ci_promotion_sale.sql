-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2020 at 12:13 PM
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
-- Table structure for table `ci_promotion_sale`
--

CREATE TABLE `ci_promotion_sale` (
  `promotion_sale_id` int(11) NOT NULL,
  `promotion_sale_discount` float(10,2) NOT NULL,
  `promotion_sale_username_update` varchar(255) NOT NULL,
  `promotion_sale_datetime_update` datetime NOT NULL,
  `promotion_sale_ip_update` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_promotion_sale`
--

INSERT INTO `ci_promotion_sale` (`promotion_sale_id`, `promotion_sale_discount`, `promotion_sale_username_update`, `promotion_sale_datetime_update`, `promotion_sale_ip_update`) VALUES
(1, 0.00, '', '0000-00-00 00:00:00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_promotion_sale`
--
ALTER TABLE `ci_promotion_sale`
  ADD PRIMARY KEY (`promotion_sale_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ci_promotion_sale`
--
ALTER TABLE `ci_promotion_sale`
  MODIFY `promotion_sale_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
