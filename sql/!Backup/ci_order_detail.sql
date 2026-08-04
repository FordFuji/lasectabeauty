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
-- Table structure for table `ci_order_detail`
--

CREATE TABLE `ci_order_detail` (
  `order_detail_id` int(11) NOT NULL,
  `order_no` varchar(255) NOT NULL,
  `order_detail_sub_total` float(10,2) NOT NULL,
  `order_detail_shipping` float(10,2) NOT NULL,
  `order_detail_discount` float(10,2) NOT NULL,
  `order_detail_total` float(10,2) NOT NULL,
  `member_id` int(11) NOT NULL,
  `influencer_code` varchar(255) NOT NULL,
  `order_detail_payment_method` varchar(255) NOT NULL,
  `order_detail_shipping_method` varchar(255) NOT NULL,
  `order_detail_shipping_first_name_last_name` varchar(255) NOT NULL,
  `order_detail_shipping_phone_number` varchar(255) NOT NULL,
  `order_detail_shipping_address` varchar(255) NOT NULL,
  `order_detail_shipping_province` varchar(255) NOT NULL,
  `order_detail_shipping_amphur` varchar(255) NOT NULL,
  `order_detail_shipping_district` varchar(255) NOT NULL,
  `order_detail_shipping_postal_code` varchar(255) NOT NULL,
  `order_detail_shipping_country` varchar(255) NOT NULL,
  `order_detail_shipping_email` varchar(255) NOT NULL,
  `order_detail_billing_first_name_last_name` varchar(255) NOT NULL,
  `order_detail_billing_phone_number` varchar(255) NOT NULL,
  `order_detail_billing_address` varchar(255) NOT NULL,
  `order_detail_billing_province` varchar(255) NOT NULL,
  `order_detail_billing_amphur` varchar(255) NOT NULL,
  `order_detail_billing_district` varchar(255) NOT NULL,
  `order_detail_billing_postal_code` varchar(255) NOT NULL,
  `order_detail_billing_country` varchar(255) NOT NULL,
  `order_detail_billing_email` varchar(255) NOT NULL,
  `order_detail_note` text NOT NULL,
  `order_detail_status` varchar(255) NOT NULL COMMENT 'มี Waiting, Success, Cancel',
  `order_detail_username_create` varchar(255) NOT NULL,
  `order_detail_datetime_create` datetime NOT NULL,
  `order_detail_ip_create` varchar(255) NOT NULL,
  `order_detail_username_update` varchar(255) NOT NULL,
  `order_detail_datetime_update` datetime NOT NULL,
  `order_detail_ip_update` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_order_detail`
--

INSERT INTO `ci_order_detail` (`order_detail_id`, `order_no`, `order_detail_sub_total`, `order_detail_shipping`, `order_detail_discount`, `order_detail_total`, `member_id`, `influencer_code`, `order_detail_payment_method`, `order_detail_shipping_method`, `order_detail_shipping_first_name_last_name`, `order_detail_shipping_phone_number`, `order_detail_shipping_address`, `order_detail_shipping_province`, `order_detail_shipping_amphur`, `order_detail_shipping_district`, `order_detail_shipping_postal_code`, `order_detail_shipping_country`, `order_detail_shipping_email`, `order_detail_billing_first_name_last_name`, `order_detail_billing_phone_number`, `order_detail_billing_address`, `order_detail_billing_province`, `order_detail_billing_amphur`, `order_detail_billing_district`, `order_detail_billing_postal_code`, `order_detail_billing_country`, `order_detail_billing_email`, `order_detail_note`, `order_detail_status`, `order_detail_username_create`, `order_detail_datetime_create`, `order_detail_ip_create`, `order_detail_username_update`, `order_detail_datetime_update`, `order_detail_ip_update`) VALUES
(1, '2001001', 56.00, 24.00, 4.90, 75.10, 1, '', 'Credit Card', 'on', 'a', 'b', 'c', 'e', '', 'd', 'f', 'Zimbabwe', 'a@a.com', 'a', 'b', 'c', 'e', '', 'd', 'f', 'Zimbabwe', 'a@a.com', '', 'Waiting', '', '2020-01-10 12:50:28', '::1', '', '2020-01-10 12:50:28', '::1'),
(2, '2001002', 1400.00, 20.00, 72.10, 1347.90, 1, '', 'Bank Transfer', 'Normal', 'a', 'b', 'c', 'e', '', 'd', 'f', 'Thailand', 'a@a.com', 'z', 'y', 'x', 'w', '', 'u', 't', 'Azerbaijan', 'a@a.com', 'Test', 'Waiting', '', '2020-01-10 13:30:30', '::1', '', '2020-01-10 13:30:30', '::1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_order_detail`
--
ALTER TABLE `ci_order_detail`
  ADD PRIMARY KEY (`order_detail_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ci_order_detail`
--
ALTER TABLE `ci_order_detail`
  MODIFY `order_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
