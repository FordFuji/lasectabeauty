-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2019 at 05:32 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `srsiri`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_session`
--

CREATE TABLE `ci_session` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_session`
--

INSERT INTO `ci_session` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('1bh9q1hjjfbpu4jb1d6gcmq85mnkm1ao', '::1', 1544087509, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534343038373530393b6c616e677c733a323a227468223b),
('26kspnp6k043hg354ko7ca2j164vno6i', '::1', 1546488896, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363438383839363b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('3s875bomlple3ii2u3skb94celvef643', '::1', 1568950135, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536383935303133353b6c616e677c733a323a227468223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('4hrvmkjr4pqep7c17h5a12ckimchvgq1', '::1', 1562638573, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536323633383537333b6c616e677c733a323a227468223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('a8ha0j6q3bqgm18jqpn3milvpgrb8age', '::1', 1562638617, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536323633383537333b6c616e677c733a323a227468223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('eqc371mfgb3tq3oeu4e52tpp3lhtke22', '::1', 1561102673, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536313130323538323b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('h5v6bed481upg4v7l07kmr3dsenqtlq7', '::1', 1568950328, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536383935303133353b6c616e677c733a323a227468223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('jq8781p5um9ej8qu39fsaj2l984497ss', '::1', 1562300546, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536323330303331393b6c616e677c733a323a227468223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('lcrulqvcc35vka5pg8r4rcgfd89ga29r', '::1', 1546489168, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363438383839363b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('luvde6tel0e9go7a19f45qe4isjflbll', '::1', 1544088331, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534343038383332343b6c616e677c733a323a227468223b),
('m51tj8mj9k5d74362i97c3e76dd4iucv', '::1', 1544087914, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534343038373931343b6c616e677c733a323a227468223b),
('n6ai070akrbjbsm7rpv333f5210v1nsv', '::1', 1544088324, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534343038383332343b6c616e677c733a323a227468223b),
('rc40itf3veik2cmqe82mfg5jo4fdpsbq', '::1', 1562300307, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536323330303330373b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('uocs5mbh62s1v17lfrh94m436c8i7mgs', '::1', 1562637530, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536323633373533303b6c616e677c733a323a227468223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b737563636573737c733a32373a22557064617465207065726d697373696f6e20636f6d706c6574652e223b5f5f63695f766172737c613a313a7b733a373a2273756363657373223b733a333a226f6c64223b7d),
('v7nrbvkltmr1fnc3v2ld74fhna4o9hoa', '::1', 1562637036, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536323633373033363b6c616e677c733a323a227468223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(1000) NOT NULL,
  `department_menu` longtext NOT NULL,
  `department_sub_menu` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`, `department_menu`, `department_sub_menu`) VALUES
(1, 'Administrator', '50, 51, 52, 53, 54, 55', '5, 6, 7, 23, 24, 25, 26'),
(2, 'User', '2, 3', '');

-- --------------------------------------------------------

--
-- Table structure for table `ford`
--

CREATE TABLE `ford` (
  `ford_id` int(11) NOT NULL,
  `ford_image` varchar(255) NOT NULL,
  `ford_name` varchar(255) NOT NULL,
  `ford_select` varchar(255) NOT NULL,
  `ford_ckeditor` longtext NOT NULL,
  `ford_username_create` varchar(255) NOT NULL,
  `ford_username_update` varchar(255) NOT NULL,
  `ford_datetime_create` datetime NOT NULL,
  `ford_datetime_update` datetime NOT NULL,
  `ford_ip_create` varchar(255) NOT NULL,
  `ford_ip_update` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ford`
--

INSERT INTO `ford` (`ford_id`, `ford_image`, `ford_name`, `ford_select`, `ford_ckeditor`, `ford_username_create`, `ford_username_update`, `ford_datetime_create`, `ford_datetime_update`, `ford_ip_create`, `ford_ip_update`) VALUES
(4, 'logo.png', 'test1', '1', '<p>\r\n	abccc1</p>', '1', '1', '2016-10-22 06:54:29', '2016-10-22 07:35:03', '::1', '::1'),
(5, 'user-5.jpg', 'fsdafsaddf', '10', '<p>\r\n	fsdfsdaffds</p>', '1', '1', '2016-10-22 07:25:39', '2016-10-22 07:35:41', '::1', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `menu_controller` varchar(255) NOT NULL,
  `menu_sort` int(11) NOT NULL,
  `menu_enable` int(1) NOT NULL,
  `menu_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_name`, `menu_controller`, `menu_sort`, `menu_enable`, `menu_link`) VALUES
(1, 'Menu', 'menu', 10, 0, 'menu/backend'),
(2, 'Sub Menu', 'sub_menu', 20, 0, 'sub_menu/backend'),
(50, 'Authentication', 'authentication', 30, 1, 'authentication/backend');

-- --------------------------------------------------------

--
-- Table structure for table `sub_menu`
--

CREATE TABLE `sub_menu` (
  `sub_menu_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `sub_menu_name` varchar(255) NOT NULL,
  `sub_menu_controller` varchar(255) NOT NULL,
  `sub_menu_sort` int(11) NOT NULL,
  `sub_menu_enable` int(1) NOT NULL,
  `sub_menu_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_menu`
--

INSERT INTO `sub_menu` (`sub_menu_id`, `menu_id`, `sub_menu_name`, `sub_menu_controller`, `sub_menu_sort`, `sub_menu_enable`, `sub_menu_link`) VALUES
(5, 50, 'Department', 'department,department_form,department_save_update', 10, 1, 'authentication/backend/department'),
(6, 50, 'Permission', 'permission,permission_form,permission_save_update', 20, 1, 'authentication/backend/permission'),
(7, 50, 'User', 'user,user_form,user_save_update', 30, 1, 'authentication/backend/user'),
(16, 68, 'Contact Us', 'contact_us,contact_us_form,contact_us_save_update', 10, 0, 'contact_us/backend/contact_us'),
(22, 65, 'Description', 'portfolio_description,portfolio_description_form,portfolio_description_save_update', 0, 1, 'portfolio/backend/portfolio_description');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_username` varchar(30) NOT NULL,
  `user_password` varchar(30) NOT NULL,
  `user_activated` int(1) NOT NULL,
  `user_username_create` varchar(255) NOT NULL,
  `user_datetime_create` datetime NOT NULL,
  `user_ip_create` varchar(255) NOT NULL,
  `user_username_update` varchar(255) NOT NULL,
  `user_datetime_update` datetime NOT NULL,
  `user_ip_update` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `department_id`, `user_email`, `user_name`, `user_username`, `user_password`, `user_activated`, `user_username_create`, `user_datetime_create`, `user_ip_create`, `user_username_update`, `user_datetime_update`, `user_ip_update`) VALUES
(1, 1, 'sitiporn@orange-thailand.com', 'Sitiporn Trongwichien', 'admin', 'qwaszx', 1, '1', '2018-02-10 03:46:48', '2018-02-13 14:51:25', 'admin', '2018-11-06 13:51:05', '::1'),
(28, 2, 'test@test.com', 'Test', 'test', 'qwaszx', 1, 'admin', '2018-11-06 13:51:25', '::1', 'admin', '2018-11-06 13:51:25', '::1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_session`
--
ALTER TABLE `ci_session`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `ford`
--
ALTER TABLE `ford`
  ADD PRIMARY KEY (`ford_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `sub_menu`
--
ALTER TABLE `sub_menu`
  ADD PRIMARY KEY (`sub_menu_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ford`
--
ALTER TABLE `ford`
  MODIFY `ford_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `sub_menu`
--
ALTER TABLE `sub_menu`
  MODIFY `sub_menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
