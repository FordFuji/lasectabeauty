-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2020 at 09:11 AM
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
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `zone_name` varchar(1) NOT NULL DEFAULT '',
  `country_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `zone_name`, `country_name`) VALUES
(1, 'G', 'Afghanistan'),
(2, 'G', 'Albania'),
(3, 'G', 'Algeria'),
(4, 'G', 'American Samoa'),
(5, 'F', 'Andorra'),
(6, 'G', 'Angola'),
(7, 'G', 'Anguilla'),
(8, 'G', 'Antigua'),
(9, 'G', 'Argentina'),
(10, 'G', 'Armenia'),
(11, 'G', 'Aruba'),
(12, 'B', 'Australia'),
(13, 'F', 'Austria'),
(14, '7', 'Azerbaijan'),
(15, '7', 'Bahamas'),
(16, 'F', 'Bahrain'),
(17, 'C', 'Bangladesh'),
(18, '7', 'Barbados'),
(19, '7', 'Belarus'),
(20, 'E', 'Belgium'),
(21, '7', 'Belize'),
(22, '7', 'Benin'),
(23, '7', 'Bermuda'),
(24, 'C', 'Bhutan'),
(25, '7', 'Bolivia'),
(26, '7', 'Bonaire'),
(27, '7', 'Bosnia'),
(28, '7', 'Botswana'),
(29, '7', 'Brazil'),
(30, 'B', 'Brunei'),
(31, '7', 'Bulgaria'),
(32, '7', 'Burkina'),
(33, '7', 'Burundi'),
(34, 'B', 'Cambodia'),
(35, '7', 'Cameroon'),
(36, 'D', 'Canada'),
(37, '7', 'Canary Islands, The'),
(38, '7', 'Cape Verde'),
(39, '7', 'Cayman Islands'),
(40, '7', 'Central African Rep.'),
(41, '7', 'Chad'),
(42, '7', 'Chile'),
(43, 'B', 'China'),
(44, '0', 'Colombia'),
(45, '0', 'Comoros'),
(46, '0', 'Congo'),
(47, '0', 'Congo (Dem. Republic Of)'),
(48, '0', 'Cook Islands'),
(49, '0', 'Costa Rica'),
(50, '0', 'Cote D\'Ivoire'),
(51, '0', 'Croatia'),
(52, '0', 'Cuba'),
(53, '0', 'Curacao'),
(54, 'F', 'Cyprus'),
(55, 'F', 'Czech Republic'),
(56, 'F', 'Denmark'),
(57, '0', 'Djibouti'),
(58, '0', 'Dominica'),
(59, '0', 'Dominican Republic'),
(60, '0', 'East Timor'),
(61, '0', 'Ecuador'),
(62, '0', 'Egypt'),
(63, '0', 'El Salvador'),
(64, '0', 'Equatorial Guinea'),
(65, '0', 'Eritrea'),
(66, '0', 'Estonia'),
(67, '0', 'Ethiopia'),
(68, '0', 'Falkland'),
(69, '0', 'Faroe Islands'),
(70, '0', 'Fiji'),
(71, 'F', 'Finland'),
(72, 'E', 'France'),
(73, '0', 'French Guyana'),
(74, '0', 'Gabon'),
(75, '0', 'Gambia'),
(76, '0', 'Georgia'),
(77, 'E', 'Germany'),
(78, '0', 'Ghana'),
(79, '0', 'Gibraltar'),
(80, 'F', 'Greece'),
(81, '0', 'Greenland'),
(82, '0', 'Grenada'),
(83, '0', 'Guadeloupe'),
(84, '0', 'Guam'),
(85, '0', 'Guatemala'),
(86, '0', 'Guernsey'),
(87, '0', 'Guinea Republic'),
(88, '0', 'Guinea Bissau'),
(89, '0', 'Guyana (British)'),
(90, '0', 'Haiti'),
(91, '0', 'Honduras'),
(92, 'A', 'Hong Kong'),
(93, 'F', 'Hungary'),
(94, '0', 'Iceland'),
(95, 'C', 'India'),
(96, 'B', 'Indonesia'),
(97, 'F', 'Iran'),
(98, 'F', 'Ireland'),
(99, '0', 'Israel'),
(100, 'E', 'Italy'),
(101, '0', 'Jamaica'),
(102, 'B', 'Japan'),
(103, '0', 'Jersey'),
(104, 'F', 'Jordan'),
(105, '0', 'Kazakhstan'),
(106, '0', 'Kenya'),
(107, '0', 'Kiribati'),
(108, '0', 'Korea, North'),
(109, 'B', 'Korea, South'),
(110, '0', 'Kosovo'),
(111, 'F', 'Kuwait'),
(112, '0', 'Kyrgyzstan'),
(113, 'B', 'Lao PDR'),
(114, '0', 'Latvia'),
(115, 'F', 'Lebanon'),
(116, '0', 'Lesotho'),
(117, '0', 'Liberia'),
(118, '0', 'Libya'),
(119, 'F', 'Liechtenstein'),
(120, '0', 'Lithuania'),
(121, 'E', 'Luxembourg'),
(122, 'A', 'Macau'),
(123, '0', 'Macedonia (FYROM)'),
(124, '0', 'Madagascar'),
(125, '0', 'Malawi'),
(126, 'A', 'Malaysia'),
(127, '0', 'Maldives'),
(128, '0', 'Mali'),
(129, '0', 'Malta'),
(130, '0', 'Marshall Islands'),
(131, '0', 'Martinique'),
(132, '0', 'Mauritania'),
(133, '0', 'Mauritius'),
(134, '0', 'Mayotte'),
(135, 'D', 'Mexico'),
(136, '0', 'Micronesia'),
(137, '0', 'Moldova'),
(138, 'E', 'Monaco'),
(139, 'C', 'Mongolia'),
(140, '0', 'Montenegro'),
(141, '0', 'Montserrat'),
(142, '0', 'Morocco'),
(143, '0', 'Mozambique'),
(144, 'B', 'Myanmar'),
(145, '0', 'Namibia'),
(146, '0', 'Nauru'),
(147, 'C', 'Nepal'),
(148, 'E', 'Netherlands'),
(149, '0', 'Netherlands Antilles'),
(150, '0', 'Nevis'),
(151, '0', 'New Caledonia'),
(152, 'B', 'New Zealand'),
(153, '0', 'Nicaragua'),
(154, '0', 'Niger'),
(155, '0', 'Nigeria'),
(156, '0', 'Niue'),
(157, 'F', 'Norway'),
(158, 'F', 'Oman'),
(159, 'C', 'Pakistan'),
(160, '0', 'Palau'),
(161, '0', 'Panama'),
(162, 'C', 'Papua New Guinea'),
(163, '0', 'Paraguay'),
(164, '0', 'Peru'),
(165, 'B', 'Philippines'),
(166, 'F', 'Poland'),
(167, 'F', 'Portugal'),
(168, '0', 'Puerto Rico'),
(169, 'F', 'Qatar'),
(170, '0', 'Reunion'),
(171, '0', 'Romania'),
(172, '0', 'Russian Federation'),
(173, '0', 'Rwanda'),
(174, '0', 'Saipan'),
(175, '0', 'Samoa'),
(176, 'E', 'San Marino'),
(177, '0', 'Sao Tome & Principe'),
(178, 'F', 'Saudi Arabia'),
(179, '0', 'Senegal'),
(180, '0', 'Senegal'),
(181, '0', 'Serbia'),
(182, '0', 'Seychelles'),
(183, '0', 'Sierra Leone'),
(184, 'A', 'Singapore'),
(185, '0', 'Slovakia'),
(186, '0', 'Slovenia'),
(187, '0', 'Solomon Islands'),
(188, '0', 'Somalia'),
(189, '0', 'Somaliland (North Somalia)'),
(190, 'F', 'South Africa'),
(191, 'F', 'Spain'),
(192, 'C', 'Sri Lanka'),
(193, '0', 'St. Barthelemy'),
(194, '0', 'St. Eustatius'),
(195, '0', 'St. Kitts'),
(196, '0', 'St. Lucia'),
(197, '0', 'St. Maarten'),
(198, '0', 'St. Vincent'),
(199, '0', 'Sudan'),
(200, '0', 'Suriname'),
(201, '0', 'Swaziland'),
(202, 'F', 'Sweden'),
(203, 'E', 'Switzerland'),
(204, '0', 'Syria'),
(205, '0', 'Tahiti'),
(206, 'B', 'Taiwan'),
(207, '0', 'Tajikistan'),
(208, '0', 'Tanzania'),
(209, '0', 'Togo'),
(210, '0', 'Tonga'),
(211, '0', 'Trinidad & Tobago'),
(212, '0', 'Tunisia'),
(213, 'F', 'Turkey'),
(214, '0', 'Turkmenistan'),
(215, '0', 'Turks & Caicos Islands'),
(216, '0', 'Tuvalu'),
(217, '0', 'Uganda'),
(218, '0', 'Ukraine'),
(219, 'F', 'United Arab Emirates'),
(220, 'E', 'United Kingdom'),
(221, 'D', 'United States of America'),
(222, 'G', 'Uruguay'),
(223, '0', 'Uzbekistan'),
(224, '0', 'Vanuatu'),
(225, '0', 'Venezuela'),
(226, 'B', 'Vietnam'),
(227, '0', 'Virgin Islands (British)'),
(228, '0', 'Virgin Islands (U.S.)'),
(229, 'F', 'Yemen'),
(230, '0', 'Zambia'),
(231, '0', 'Zimbabwe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=232;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
