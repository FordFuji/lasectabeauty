-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2019 at 09:20 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lasectabeauty`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_banner`
--

CREATE TABLE IF NOT EXISTS `ci_banner` (
`banner_id` int(11) NOT NULL,
  `banner_image` varchar(255) NOT NULL,
  `banner_username_update` varchar(255) NOT NULL,
  `banner_datetime_update` datetime NOT NULL,
  `banner_ip_update` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_banner`
--

INSERT INTO `ci_banner` (`banner_id`, `banner_image`, `banner_username_update`, `banner_datetime_update`, `banner_ip_update`) VALUES
(6, '322a45a25fb119b2fac403e6a2cc011c.png', 'admin', '2019-12-25 11:36:54', '::1'),
(7, 'f2f9990bcda13be8771d656bf489dad5.png', 'admin', '2019-12-25 11:37:00', '::1'),
(8, 'b31df16a88ce00fed951f24b46e08649.png', 'admin', '2019-12-25 11:37:11', '::1'),
(9, '0c29c7dca6742f69e0e4ff304365d655.png', 'admin', '2019-12-25 11:37:21', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `ci_banner_2`
--

CREATE TABLE IF NOT EXISTS `ci_banner_2` (
`banner_2_id` int(11) NOT NULL,
  `banner_2_image` varchar(255) NOT NULL,
  `banner_2_name` varchar(255) NOT NULL,
  `banner_2_description` text NOT NULL,
  `banner_2_embed_youtube` varchar(255) NOT NULL,
  `banner_2_username_update` varchar(255) NOT NULL,
  `banner_2_datetime_update` datetime NOT NULL,
  `banner_2_ip_update` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_banner_2`
--

INSERT INTO `ci_banner_2` (`banner_2_id`, `banner_2_image`, `banner_2_name`, `banner_2_description`, `banner_2_embed_youtube`, `banner_2_username_update`, `banner_2_datetime_update`, `banner_2_ip_update`) VALUES
(1, 'accesories1.png', 'Butae empowering beauty', 'Since 1957, by La Secta Beauty', 'https://www.youtube.com/embed/7Ls7R5M7EpE', 'admin', '2019-12-23 15:32:12', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `ci_banner_news_tips`
--

CREATE TABLE IF NOT EXISTS `ci_banner_news_tips` (
`banner_news_tips_id` int(11) NOT NULL,
  `banner_news_tips_image` varchar(255) NOT NULL,
  `banner_news_tips_username_update` varchar(255) NOT NULL,
  `banner_news_tips_datetime_update` datetime NOT NULL,
  `banner_news_tips_ip_update` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_banner_news_tips`
--

INSERT INTO `ci_banner_news_tips` (`banner_news_tips_id`, `banner_news_tips_image`, `banner_news_tips_username_update`, `banner_news_tips_datetime_update`, `banner_news_tips_ip_update`) VALUES
(1, '', '', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `ci_category`
--

CREATE TABLE IF NOT EXISTS `ci_category` (
`category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_image` varchar(255) NOT NULL,
  `category_image_mobile` varchar(255) NOT NULL,
  `category_username_update` varchar(255) NOT NULL,
  `category_datetime_update` datetime NOT NULL,
  `category_ip_update` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_category`
--

INSERT INTO `ci_category` (`category_id`, `category_name`, `category_image`, `category_image_mobile`, `category_username_update`, `category_datetime_update`, `category_ip_update`) VALUES
(1, 'MAKE UP', 'haircare.png', 'haircare_mobile.png', 'admin', '2019-12-23 13:19:57', '::1'),
(2, 'SKIN CARE', 'skincare.png', 'skincare_mobile.png', 'admin', '2019-12-23 13:20:28', '::1'),
(3, 'HAIR CARE', 'haircare1.png', 'haircare_mobile1.png', 'admin', '2019-12-23 13:20:45', '::1'),
(4, 'ACCESSORIES', 'accesories.png', 'accesories_mobile.png', 'admin', '2019-12-23 13:21:00', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `ci_color`
--

CREATE TABLE IF NOT EXISTS `ci_color` (
`color_id` int(11) NOT NULL,
  `color_name` varchar(255) NOT NULL,
  `color_username_create` varchar(255) NOT NULL,
  `color_datetime_create` datetime NOT NULL,
  `color_ip_create` varchar(255) NOT NULL,
  `color_username_update` varchar(255) NOT NULL,
  `color_datetime_update` datetime NOT NULL,
  `color_ip_update` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_color`
--

INSERT INTO `ci_color` (`color_id`, `color_name`, `color_username_create`, `color_datetime_create`, `color_ip_create`, `color_username_update`, `color_datetime_update`, `color_ip_update`) VALUES
(2, 'Black', 'admin', '2019-12-23 12:51:21', '::1', 'admin', '2019-12-23 12:51:21', '::1'),
(3, 'White', 'admin', '2019-12-23 12:51:27', '::1', 'admin', '2019-12-23 12:51:27', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `ci_contact`
--

CREATE TABLE IF NOT EXISTS `ci_contact` (
`contact_id` int(11) NOT NULL,
  `contact_full_name` varchar(255) NOT NULL,
  `contact_phone_number` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_subject` varchar(255) NOT NULL,
  `contact_message` longtext NOT NULL,
  `contact_datetime_create` datetime NOT NULL,
  `contact_ip_create` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_contact`
--

INSERT INTO `ci_contact` (`contact_id`, `contact_full_name`, `contact_phone_number`, `contact_email`, `contact_subject`, `contact_message`, `contact_datetime_create`, `contact_ip_create`) VALUES
(1, 'Sitiporn Trongwichien', '0990943010', 'nirvanaford94@gmail.com', '1', 'Test ABC', '2019-12-25 15:09:17', '::1'),
(2, 'Sitiporn Trongwichien', '0990943010', 'nirvanaford94@gmail.com', '1', 'Test ABC', '2019-12-25 15:10:16', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `ci_faqs`
--

CREATE TABLE IF NOT EXISTS `ci_faqs` (
`faqs_id` int(11) NOT NULL,
  `faqs_question` text NOT NULL,
  `faqs_answer` text NOT NULL,
  `faqs_username_create` varchar(255) NOT NULL,
  `faqs_datetime_create` datetime NOT NULL,
  `faqs_ip_create` varchar(255) NOT NULL,
  `faqs_username_update` varchar(255) NOT NULL,
  `faqs_datetime_update` datetime NOT NULL,
  `faqs_ip_update` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_faqs`
--

INSERT INTO `ci_faqs` (`faqs_id`, `faqs_question`, `faqs_answer`, `faqs_username_create`, `faqs_datetime_create`, `faqs_ip_create`, `faqs_username_update`, `faqs_datetime_update`, `faqs_ip_update`) VALUES
(1, 'How do I place an order ?', '<p>\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">You could shop with Huskies Online Shopping by following these 3 easy steps: 1. Login at Huskiesbags website 2. Shop 3. Select payment and shipping method</span></p>', 'admin', '2019-12-23 17:32:48', '::1', 'admin', '2019-12-23 17:46:10', '::1'),
(2, 'Can I change or cancel the order I have already made?', '<p>\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">We begin processing the orders immediately For this reason we are unable to change or cancel the orders , If you have any question about your order , please contact Huskies Online Shopping within 1 hour after placing an order tel. 662-4532201 Monday-Saturday 10.00 a.m.-18.00 p.m.. Sorry for cannot accept e-mail request for changes or cancellation.</span></p>', 'admin', '2019-12-23 17:33:29', '::1', 'admin', '2019-12-23 17:33:29', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `ci_how_to_order`
--

CREATE TABLE IF NOT EXISTS `ci_how_to_order` (
`how_to_order_id` int(11) NOT NULL,
  `how_to_order_detail` longtext NOT NULL,
  `how_to_order_username_update` varchar(255) NOT NULL,
  `how_to_order_datetime_update` datetime NOT NULL,
  `how_to_order_ip_update` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_how_to_order`
--

INSERT INTO `ci_how_to_order` (`how_to_order_id`, `how_to_order_detail`, `how_to_order_username_update`, `how_to_order_datetime_update`, `how_to_order_ip_update`) VALUES
(1, '<p>\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">You are provided with the content and services available on the Site in accordance with the following terms and conditions, our Privacy Policy, and other terms and policies that you may find through our Site on certain functions, features, offers or customer services, all of which are part of these Terms and Conditions.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">Please read these Terms and any other terms of use posted on the Platform as together they form our Platform Terms governing your utilization of our Platform and Platform services. We may change these Platform Terms from time to time without notice to you by posting the updated Platform Terms on the Platform, so please be sure to check regularly for updates. When you place an Order through our Platform or the Platform Call Centre, you are deemed to have consented to the latest version of the Platform Terms then posted on our Platform. If a change in law means that we have to change our Platform Terms after you have placed an Order but before it has been fulfilled, we are obliged to apply that change to your Order. In all other cases, the version posted at the time your Order was placed will apply. If you do not agree to be bound by the Platform Terms, you should not use the Platform.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="box-sizing: border-box; font-weight: bolder; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">Intellectual property :</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">We grant you personal, non-transferable and revocable power to use the services we provide to you as part of the Website for the sole purpose of enabling you to use and enjoy our Services, as set forth by us and in the manner permitted by the Terms and Conditions.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">Commercial use or use on behalf of third parties is prohibited unless expressly permitted in writing in advance. Any breach of these terms and conditions will result in the immediate cancellation of the license granted under this paragraph without notice to you and without prejudice to any other rights.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">All copyrights, trademarks, trade names, trade appearance, designs, &quot;features&quot; of the website and any other form of intellectual property, materials and other rights associated with the site, including HTML code and other codes used on the website, page or image titles, Texts, illustrations, formats, logos, designs, icons, images, downloads or videos (collectively, &quot;intellectual property&quot;) are - and remain at all times - the true ownership and right of La Secta Beauty and / or its owners For each of them, as they are protected by Saudi Arabia and the laws of trademarks and international copyright.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">Intellectual property and all other materials displayed on our website may be accessed, displayed, downloaded and printed solely for personal, non-commercial use, as expressly authorized by us and / or licensors as third parties by La Secta Beauty.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">But (i) provided that no modification or change of intellectual property is made in any way,</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">And (ii) not provide or provide intellectual property to any third party as a trade. No copyrights, trademarks or other proprietary rights shall be acquired at all in relation to intellectual property. You shall not be entitled to any license, right or interest in any materials or programs as an effect of your use of this website or your access to, display, download or print the intellectual property.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">Your IP can only be used as a shopping resource. Any other use of intellectual property, including copying, editing, distribution, transmission, republishing, presentation or performance of intellectual property, is strictly prohibited.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">La Secta Beauty is the exclusive or exclusive owner of intellectual property (as appropriate) and is exclusively licensed to the domain name saudi.lasectabeauty.com.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">La Secta Beauty may provide content owned by third parties (&quot;third party content&quot;) or links to third party websites (&quot;third party websites&quot;) as a service to those interested in such information. La Secta Beauty does not monitor or endorse the content of third parties or third party sites and does not have any control over them. The inclusion of links to the content of third parties or third party sites does not imply the existence of any link or relationship between La Secta Beauty and the relevant third parties.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">La Secta Beauty does not guarantee or endorse the accuracy or completeness of any third party content or any third party websites and does not endorse its accuracy or completeness. We are not responsible for updating or reviewing the content of third parties or third party sites. Your use of third party content and third party sites is at your own risk. And does not necessarily reflect the content of third parties, including comments by users of third party content received by La Secta Beauty , the views of the particular trustee.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">In the light of the above, La Secta Beauty will not be liable for any reason whatsoever for third party content and / or third party websites, including but not limited to the provision of external sources, content, commercials, products, services, or any information or data Others are available on the website or from external sources.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="box-sizing: border-box; font-weight: bolder; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">Terms of Sale :</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="box-sizing: border-box; font-weight: bolder; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">1. Eligibility</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">The purchase of products through the website is limited exclusively to parties who can legally conclude contracts on the Internet in accordance with the laws of the Saudi Arabia Kingdom.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">In order to make purchases on the Website, you must provide your personal data, including your true name and surname, a valid mobile phone number, a valid email address, payment details, a valid billing address and other required information as scheduled. You acknowledge and warrant that the payment details you provide are valid, complete and correct, and confirm that you are the person referred to in the billing information provided.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">The website is available only to people who meet the eligibility and e-payment requirements of those who have a valid credit card issued by a bank accepted by La Secta Beauty , and those who have authorized us to debit their credit cards for the total value of the products they purchase, including any taxes or connection charges, if any. Products purchased for personal use are to be presented as a gift only and may not be resold or used for commercial purposes or for any other commercial gain.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">When you request the purchase of a product (s), you expressly authorize La Secta Beauty to verify your credit card and to transfer, transmit or obtain your credit card information or credit reporting information (including any updated information) to or from third parties to verify your identity and verify The validity of your credit card and the initial authorization to use the card and / or authorize individual purchases, as we deem necessary. You agree that we may use personal information you provide for the purpose of conducting the necessary checks against fraud and that such personal information may be disclosed to a credit reference or fraud and fraud agency, which may retain a record of such information.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">Please refer to our Privacy Policy for information on how we use your data.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="box-sizing: border-box; font-weight: bolder; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">2. Order products</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">Products available on the website, including any samples or gifts with purchases that may be offered by you, are for personal use or for gifts only. You may not sell or resell any Products you buy.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">Products for sale are subject to acceptance and availability. If, for any reason, we are unable to provide a product, we will notify you as soon as possible and we will cancel your order in full.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">All applications are subject to acceptance. We reserve the right to refuse or cancel the request for any reason, including inaccuracies, product errors or pricing information, inability to obtain price authorization, or restrictions on delivery applicable to a particular piece, or because The requested item(s) does not meet the quality control standards we apply and is being withdrawn, or because you do not meet the eligibility criteria set out in the Terms and Conditions or any other problem we discover.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">La Secta Beauty will keep a record of your transactions for at least ten years and will keep that record for a reasonable period.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">Once your order is placed, you will receive an email with your order details. This email is not an acceptance of your request, but is an assurance that we have received your request.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">One of our agents will contact you to confirm your request and if our agent cannot reach you on the number you provided upon registration you will receive an email asking you to respond to your order. Even in the absence of confirmation, the initial request will also be processed.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">If you do not cancel your order, your application will be accepted when we have completed it. At this moment you will receive a second email to confirm that your application has been accepted and sent. Therefore, the sale contract is concluded in Saudi Arabia at the moment of approval, and the language of the contract will be Arabic. It is not the power of the payment processor, which represents a third party we use, and the carrier we nominate to accept a request on behalf of La Secta Beauty .</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">We may refuse to process a transaction for any reason and we may refuse to send to any person at any time in our sole and absolute discretion. We will not be liable to you or to any third party for withdrawing any product, including any samples or gifts, from the Website, whether or not you sell this product, nor to be responsible for our deletion, testing, review or editing. Any material or content on the Website, or we refuse to process a transaction, or to revoke or suspend any transaction after proceeding with the processing process.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">We do everything in our power to ensure that all details on the website are accurate, but we may occasionally discover a product price error. If we detect an error in the price of a product listed in your order, we will notify you as soon as possible. We will not be obliged to accept or execute an order for an advertised product at an incorrect price, and reserve the right to cancel this order that has already been accepted or is on its way to you. If you order a product with a wrong price, we will send an email to you or call you to inform you that we have not accepted your request and / or your order has been canceled. In case you have already paid for the product (s), we will refund the full amount as soon as we can. If these products are returned and are on their way, we will process the refund as soon as we receive the products.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">By confirming your purchase at the end of processing the order, you agree to accept and pay the full amount due for the product (s) as indicated in your order, including any delivery charges applicable to that order.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="box-sizing: border-box; font-weight: bolder; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">3. Prices and payment policy</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">Prices include the VAT applied on the day of your order. Any change in the applicable VAT rate will be automatically reflected in the price of the products sold by La Secta Beauty via its website. VAT :</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">Tax number: 300809133800003</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">All forms of payment by credit card are validated and authorized by the card issuer. If the credit card issuer declines the payment authorization, we will not be responsible for any delay or non-delivery. We will cancel your order and may contact you to choose an alternative payment method.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">The data on the credit card used in the payment must match exactly the credit card holder&#39;s information, that information registered with the issuer of the card. Your payment will be approved and placed on hold when you place your order and the amount will be deducted from your account upon termination of your application. You confirm that the credit card used is your card or that you have been specifically authorized by the credit card owner to use it.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">No credit card data will be stored, sold to or offered to or leased to any third parties except for the online payment gateway service provider we use.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="box-sizing: border-box; font-weight: bolder; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">4. Delivery</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">We are responsible for delivering products within Saudi Arabia, and we estimate that your order is expected to arrive within 2 to 7 business days from the day that your order is confirmed by email based on your location.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">Delivery charges will be added, if any, to product prices, and will be displayed in your local currency separately on the application form during the checkout process.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">If no one is available to receive the order, you will have the option to arrange an alternate delivery date or receive additional information about receiving your order from the delivery company. If you cannot receive your order on the second delivery attempt, you may have to pay an additional connection fee for any delivery attempt Other.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">Orders are delivered from Saturday to Thursday, except Fridays and public holidays.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="box-sizing: border-box; font-weight: bolder; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">5. Cancellation, Return and Replacement Policy</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">At La Secta Beauty, our goal is to ensure our customers&#39; satisfaction with their purchases from us.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">For the sake of your safety, La Secta Beauty does not allow the return or replacement of its products, except for products that reach you only damaged</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">Cancellation :</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">We are fully aware that sometimes you may change your mind about your purchase. If you change your mind before receiving your order, you only need to contact our customer service number 00966570674043 to cancel your order, and we will do our best within reasonable limits to cancel it, provided that it has already been implemented your request.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">If this happens, we will treat the cancellation as a return. In all cases, you can always contact our customer service, they will be happy to help you.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">Miscellaneous Provisions :</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">We reserve the right to amend these terms and conditions at any time without notice to you. Any amendments to these terms and conditions shall apply as soon as they are posted on our website. Your continued use of the Website (or any of our other websites) following such change means your consent to be bound by the modified terms and conditions. Please read the terms and conditions and see them again and again. If you do not agree to any change in the Terms and Conditions, you must immediately discontinue use of the Website.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">These terms and conditions constitute the entire legal agreement between you and La Secta Beauty , govern and govern your use of the Website and all the services and products available to it, and supersede any previous agreements between you and La Secta Beauty on the same purpose.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">You acknowledge and agree that the form and nature of the Services may change from time to time without prior notice to you. You may cease to provide the Services (or provide any features contained therein) to you or to users.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">You understand and understand that La Secta Beauty grants to public search engine operators the permission to use web spiders to copy material from the site for the sole purpose of creating publicly available search engines containing the material, and La Secta Beauty reserves the right to revoke these exceptions either generally or in specific cases.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">You understand and understand that you are solely responsible (and that La Secta Beauty is not liable to you or to any third party) for any breach of your obligations under the Terms and Conditions and the consequences (including any loss or damage you may suffer) on any such breach.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">The failure to exercise, enforce or delay the exercise or enforcement of any right or legal remedy shall not be construed as an official waiver of the rights of nationals.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">You and La Secta Beauty are independent contractors. These terms and conditions, including without limitation the provision, transmission, transmission or distribution of your Content, in whole or in part, do not constitute a partnership, joint venture, business, franchise or agency between you and La Secta Beauty . Neither party shall have the power to bind or charge the other party on its behalf without the prior written consent of the other party. Neither party is authorized to act as agent or representative of the other party or on behalf of the other party in any other capacity not expressly provided for in the Terms and Conditions. No party (or any of its agents) may declare that it represents the other party or is authorized to act as its representative or to consider itself as its representative. Neither party shall hold the other party any liability or obligation on its behalf or on its behalf, unless expressly provided for In these terms and conditions.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">If any provision of these Terms and Conditions is found to be illegal or unenforceable, the other terms and conditions shall not be affected and shall remain in full force and effect.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">These terms and conditions are available in English and Arabic. If there is any conflict between the English text and the Arabic text, the Arabic text shall prevail.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">These terms and conditions are subject to the laws of the Kingdom of Saudi Arabia. All disputes arising from the enforcement of these Terms and Conditions shall be subject to the exclusive jurisdiction of the courts of the Kingdom of Saudi Arabia.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">Your Rights :</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">If you have any questions about terms and conditions or any aspect of your system.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">Please contact us at info@saudi.lasectabeauty.com</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">Customer Services : 00966570674043</span></p>', 'admin', '2019-12-23 17:07:09', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `ci_instagram`
--

CREATE TABLE IF NOT EXISTS `ci_instagram` (
`instagram_id` int(11) NOT NULL,
  `instagram_name` varchar(255) NOT NULL,
  `instagram_username_update` varchar(255) NOT NULL,
  `instagram_datetime_update` datetime NOT NULL,
  `instagram_ip_update` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_instagram`
--

INSERT INTO `ci_instagram` (`instagram_id`, `instagram_name`, `instagram_username_update`, `instagram_datetime_update`, `instagram_ip_update`) VALUES
(1, 'lasecta', 'admin', '2019-12-23 15:48:29', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `ci_news_tips_data`
--

CREATE TABLE IF NOT EXISTS `ci_news_tips_data` (
`news_tips_data_id` int(11) NOT NULL,
  `news_tips_data_type` enum('NEWS','TIPS') NOT NULL,
  `news_tips_data_image` varchar(255) NOT NULL,
  `news_tips_data_name` varchar(255) NOT NULL,
  `news_tips_data_description` text NOT NULL,
  `news_tips_data_detail` longtext NOT NULL,
  `news_tips_data_username_create` varchar(255) NOT NULL,
  `news_tips_data_datetime_create` datetime NOT NULL,
  `news_tips_data_ip_create` varchar(255) NOT NULL,
  `news_tips_data_username_update` varchar(255) NOT NULL,
  `news_tips_data_datetime_update` datetime NOT NULL,
  `news_tips_data_ip_update` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_news_tips_data`
--

INSERT INTO `ci_news_tips_data` (`news_tips_data_id`, `news_tips_data_type`, `news_tips_data_image`, `news_tips_data_name`, `news_tips_data_description`, `news_tips_data_detail`, `news_tips_data_username_create`, `news_tips_data_datetime_create`, `news_tips_data_ip_create`, `news_tips_data_username_update`, `news_tips_data_datetime_update`, `news_tips_data_ip_update`) VALUES
(2, 'NEWS', 'newsandtips_051.png', 'THE EDIT TIPS', 'All the handbag styles you need to rock this fall.', '<div class="row" style="box-sizing: border-box; display: flex; flex-wrap: wrap; margin-right: -15px; margin-left: -15px; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">\r\n	<div class="col" style="box-sizing: border-box; position: relative; width: 935.094px; min-height: 1px; padding-right: 15px; padding-left: 15px; flex-basis: 0px; flex-grow: 1; max-width: 100%;">\r\n		<div class="title_news" style="box-sizing: border-box; text-align: center; margin-top: 50px;">\r\n			<span class="date" style="box-sizing: border-box; color: rgb(192, 192, 192); font-size: 0.8em;">23 JAN 19</span>\r\n			<h1 style="box-sizing: border-box; margin-top: 10px; margin-bottom: 0.5rem; font-family: baskervvilleregular; font-weight: 500; line-height: 1.2; color: inherit; font-size: 2.5rem; font-variant-numeric: lining-nums; font-variant-east-asian: normal; border-top: 1px solid rgb(0, 0, 0); border-bottom: 1px solid rgb(0, 0, 0); padding: 10px 0px;">\r\n				20 OF THE BEST WINTER lipstick</h1>\r\n		</div>\r\n	</div>\r\n</div>\r\n<div class="container" style="box-sizing: border-box; width: 905.094px; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto; max-width: 960px; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">\r\n	<div class="row mt-5 mb-5" style="box-sizing: border-box; display: flex; flex-wrap: wrap; margin-right: -15px; margin-left: -15px; margin-top: 3rem !important; margin-bottom: 3rem !important;">\r\n		<div class="col" style="box-sizing: border-box; position: relative; width: 905.094px; min-height: 1px; padding-right: 15px; padding-left: 15px; flex-basis: 0px; flex-grow: 1; max-width: 100%;">\r\n			<div class="news_tips_content" style="box-sizing: border-box;">\r\n				<img class="img-fluid" src="http://localhost/lasectabeauty/asset/frontend/images/newsandtips_inside_03.png" style="box-sizing: border-box; vertical-align: middle; border-style: none; max-width: 100%; height: auto; width: 875.094px;" /><br style="box-sizing: border-box;" />\r\n				<br style="box-sizing: border-box;" />\r\n				<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem;">\r\n					Like pretty much every human on &gt;o, the planet I try to extend summer for as long as plausibility possible. Searching for cheap airfares during the middle of winter to warmer climates is pretty much my favourite past-time.<br style="box-sizing: border-box;" />\r\n					<br style="box-sizing: border-box;" />\r\n					I also blame the fact that as autumn hits Europe, my entire Facebook feed is filled with smug status updates and photos of barbecues and trips to the beach from everyone back home. Even if I wanted escape summer (I don&rsquo;t), I can&rsquo;t.<br style="box-sizing: border-box;" />\r\n					<br style="box-sizing: border-box;" />\r\n					This year we decided to squeeze the very last out of summer via the sunny Spanish isle that is Formentera. You come to this tiny island ( 83.24 square km to be exact) for pretty much one thing only; extreme relaxation. It&rsquo;s mellow, the beaches are ridiculously good looking and it&rsquo;s 30 degrees even in October.</p>\r\n				<br style="box-sizing: border-box;" />\r\n				<div class="row" style="box-sizing: border-box; display: flex; flex-wrap: wrap; margin-right: -15px; margin-left: -15px;">\r\n					<div class="col-lg-7" style="box-sizing: border-box; position: relative; width: 527.969px; min-height: 1px; padding-right: 15px; padding-left: 15px; flex: 0 0 58.3333%; max-width: 58.3333%;">\r\n						<img class="img-fluid" src="http://localhost/lasectabeauty/asset/frontend/images/newsandtips_inside_07.png" style="box-sizing: border-box; vertical-align: middle; border-style: none; max-width: 100%; height: auto;" /></div>\r\n					<div class="col-lg-5" style="box-sizing: border-box; position: relative; width: 377.109px; min-height: 1px; padding-right: 15px; padding-left: 15px; flex: 0 0 41.6667%; max-width: 41.6667%;">\r\n						<img class="img-fluid" src="http://localhost/lasectabeauty/asset/frontend/images/newsandtips_inside_10.png" style="box-sizing: border-box; vertical-align: middle; border-style: none; max-width: 100%; height: auto;" /></div>\r\n				</div>\r\n			</div>\r\n		</div>\r\n	</div>\r\n</div>\r\n<p>\r\n	&nbsp;</p>', 'admin', '2019-12-25 14:46:33', '::1', 'admin', '2019-12-25 14:46:33', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `ci_new_arrivals`
--

CREATE TABLE IF NOT EXISTS `ci_new_arrivals` (
`new_arrivals_id` int(11) NOT NULL,
  `new_arrivals_link` varchar(255) NOT NULL,
  `new_arrivals_username_update` varchar(255) NOT NULL,
  `new_arrivals_datetime_update` datetime NOT NULL,
  `new_arrivals_ip_update` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_new_arrivals`
--

INSERT INTO `ci_new_arrivals` (`new_arrivals_id`, `new_arrivals_link`, `new_arrivals_username_update`, `new_arrivals_datetime_update`, `new_arrivals_ip_update`) VALUES
(1, 'http://www.hunsa.com', 'admin', '2019-12-23 14:57:44', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `ci_product`
--

CREATE TABLE IF NOT EXISTS `ci_product` (
`product_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` float(10,2) NOT NULL,
  `product_description` text NOT NULL,
  `product_detail` longtext NOT NULL,
  `product_username_create` varchar(255) NOT NULL,
  `product_datetime_create` datetime NOT NULL,
  `product_ip_create` varchar(255) NOT NULL,
  `product_username_update` varchar(255) NOT NULL,
  `product_datetime_update` datetime NOT NULL,
  `product_ip_update` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_product`
--

INSERT INTO `ci_product` (`product_id`, `sub_category_id`, `product_image`, `product_name`, `product_price`, `product_description`, `product_detail`, `product_username_create`, `product_datetime_create`, `product_ip_create`, `product_username_update`, `product_datetime_update`, `product_ip_update`) VALUES
(1, 2, 'product_test12.png', 'Buate Hair conditioner', 28.00, 'test description', '<p>\r\n	test detail</p>', 'admin', '2019-12-25 13:49:44', '::1', 'admin', '2019-12-25 13:53:24', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `ci_session`
--

CREATE TABLE IF NOT EXISTS `ci_session` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_session`
--

INSERT INTO `ci_session` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('172pptp269a6t20lnf7oethdjm1roivo', '::1', 1577081217, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373038313231373b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('1jeonaamf2h6kfl2fcb2iq47mck5e5k7', '::1', 1577084598, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373038343539383b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('1ur297drgpumvk7bhepmqtd78vvgq0a3', '::1', 1577066092, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373036363039313b6c616e677c733a323a227468223b),
('1vl9lme6r8i2baejf3ag5ihsghoe95fn', '::1', 1577093549, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373039333534383b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('2g723ebshmve6kb9eat1vbaor7a6an7f', '::1', 1577068806, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373036383732393b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b737563636573737c733a32373a22557064617465207065726d697373696f6e20636f6d706c6574652e223b5f5f63695f766172737c613a313a7b733a373a2273756363657373223b733a333a226f6c64223b7d),
('3660l372eh7pcche6ejilfs2rurpqrlr', '::1', 1577070374, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373037303337343b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('3d2119ditdb7p1mkbh1juhfphcs1jp2u', '::1', 1577256247, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373235363234373b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('3ed99dijg079rs47e0of5dj4gc3va3ap', '::1', 1577092300, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373039323239393b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('3n87k83l23t86r3950lfel9i1dp002s2', '::1', 1577071598, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373037313333343b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('3ril90uo990hh3rnjcjbodie6tmda5rt', '::1', 1577096203, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373039363230333b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('4qagk4aj815p2andchvk1ghnsmsabg94', '::1', 1577087988, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373038373738353b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('50e8rddf7sbf6fphpumn10oosppsb16g', '::1', 1577084290, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373038343239303b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('55quvfjjas966q2abu3f14s0src5jcb5', '::1', 1577255458, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373235353435383b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('5c5d8btlg8kugbfsf5q9a7arqi73oqt4', '::1', 1577085904, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373038353930343b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('5cqkode32pb6073ajcitg09rapummb85', '::1', 1577068646, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373036383337303b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('5pemd6mnv6fsj0m8vj2161d57oviki56', '::1', 1577097970, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373039373937303b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('6c6tb7auoahnrij336qmii08kffpbei5', '::1', 1577256553, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373235363535333b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('6dvcugdnq92jjjo8qukc8t9cq5kagdr8', '::1', 1577077491, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373037373439313b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('6ipufid1mk7lube7oafmanm7bkkv70r2', '::1', 1577070093, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373037303034313b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('6vtchct0j2g915aj43nsf0l1uebu043r', '::1', 1577096828, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373039363832383b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('7h10kjvc69au57bff23ar9litolorill', '::1', 1577093897, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373039333839373b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('7qqu06ajt25v9up220jvcjaha3v7qb20', '::1', 1577095541, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373039353534313b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('87guq9ac1fj2nsstrr9vmrhkefhg897e', '::1', 1577069660, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373036393636303b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('97qqn2foumbjtkdf1cs16490fbaitggj', '::1', 1577097168, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373039373136383b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('9ipki9mmqk02t0jvpf3q8cj7u4q85krs', '::1', 1577083785, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373038333738343b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('accqmhimkhc9u73e7agoukjdsjkfjrgq', '::1', 1577094851, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373039343835313b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('bnds0iltq2l1bheuc74u0a57gdqfd1ro', '::1', 1577088746, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373038383734363b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('bro851q0k416g9up0rvlf6c75gkqav36', '::1', 1577261302, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373236313330323b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('c8p36t1diggncokthif0u1202v8o0m4n', '::1', 1577094322, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373039343332313b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('ccf6mkqefokgn2pj8ld6fqmtckkmd5kd', '::1', 1577257944, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373235373934343b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('ckqkf4h68rutstncdoulki43u2t2ntvr', '::1', 1577250093, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373235303039333b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('clno1v871o9iha70mvh04ng8pmg613eo', '::1', 1577080263, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373038303236333b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('cnoo0bb463s2shsmlqf7449rd1ra7jra', '::1', 1577260038, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373235393939333b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('d2hi1j7bnoiir4dastd908g2e9ce8ert', '::1', 1577080951, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373038303737333b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('d8k949j084m703rk3vvc6jdagifibs8v', '::1', 1577089932, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373038393933323b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('dfa9rep4f7icdhsdmvln77994ioceifm', '::1', 1577254955, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373235343935353b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('dku68r02onad97u0b6ksbovn5e2usvqd', '::1', 1577258629, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373235383632393b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('ec2ifh7iebfkvsel6g657fpkj1a6d309', '::1', 1577255799, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373235353739393b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('eh82n9n00nm8ncorab800sqmub57qmo3', '::1', 1577073026, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373037333032363b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('ge0p4cthos722gvnhfr7rsu86amcu02p', '::1', 1577086271, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373038363237303b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('gofl8lfff52vc4enedqcpha6vn0corde', '::1', 1577259368, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373235393336383b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('h43fjug4kn9m0208lc6rv5q2cskuc90j', '::1', 1577082356, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373038323335363b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('hda02kherj1l21icdumq2qpgtt4g4tca', '::1', 1577083449, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373038333434393b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('hgdigho2musj0mg5gk61b7g1fkcnrh0p', '::1', 1577081874, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373038313837343b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('hiqmkv2p329uhkod9ggbd3teqpmf27kh', '::1', 1577250735, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373235303733353b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('hr28u7ve5mn7sifcephhmvndbes5ikhl', '::1', 1577259686, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373235393638363b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('hs5ole1jpkmiu8dprcu5p6243h13p8t1', '::1', 1577072645, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373037323334373b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('i43pn0ojhiep0vvaiugavd0qmfhnhjrn', '::1', 1577260866, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373236303836363b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('i59eto569325r8o0or7tomq72po68e37', '::1', 1577090708, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373039303730383b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('i868o2enege8316t3hlslktqdq2h9p7v', '::1', 1577254511, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373235343531313b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('je8arnclrqivmnv2tgvrla8f24v1ab0i', '::1', 1577086573, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373038363537333b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('jjjq5qlf87s8hi65skpdk6ktjtffv60p', '::1', 1577079908, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373037393930383b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('kd9tm26hlct8vh87421g76jbp3ho6u4q', '::1', 1577071275, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373037303939383b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('kev20hg5lh4sgt72gpudi2opngkhbbkd', '::1', 1577090407, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373039303430373b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('khtarn893bvjev51b0qv7ddsbi7rg97l', '::1', 1577253346, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373235333334363b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('kl6kbogeohme6etmq73ch53bkcdnuqjq', '::1', 1577091988, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373039313938383b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('krs5digei77ckn25ie562qplaih5kg36', '::1', 1577096521, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373039363532313b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('larf642r4iq00e2e98uil58fhecnv3oc', '::1', 1577095212, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373039353231323b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('lbm3mhr0va7co7o7m2gvrahpcee6ulmj', '::1', 1577098722, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373039383732323b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('leqqk93l9fhst8b2u7n1bsr5i7e1v7cj', '::1', 1577097669, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373039373636393b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('lsjv7838894jt4i50ubojlskk3frm5t1', '::1', 1577084907, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373038343930373b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('ltcod0ev4es9f1fgp0po2ok9rfkcr4an', '::1', 1577253043, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373235333034333b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('m16fecd1chjijltme8metjqdrsjbp8fk', '::1', 1577082792, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373038323739323b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('o7i6koqkuj6si520i2apgu51gn82j0n9', '::1', 1577098300, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373039383330303b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('pfgpu23cf3qbnei0t1bln4amakj7aqvi', '::1', 1577261762, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373236313736323b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('pfjt8ii53dnu1plvb957v2n9kaegknh8', '::1', 1577248568, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373234383536303b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('pidqttg946ht6e85dd85ub8mvrmc6l54', '::1', 1577074702, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373037343730323b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('pr63047bsakespjpvjn6em84tumrupup', '::1', 1577069248, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373036393234383b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('q8en6rdpqgnfm3j4j413550vvuhmfvgf', '::1', 1577091564, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373039313536343b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('qo0jcdldkqo2h4gl7to0dhv3krtnodjc', '::1', 1577250399, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373235303339393b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('r8433eb745goop89eao90avp540t82p0', '::1', 1577253755, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373235333735353b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('t2rr49ndaqq461mssueh69hcjgrg8m9h', '::1', 1577093214, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373039333231343b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('t71dqs3l2n0v7p8d6h1uh7d34fb3nmal', '::1', 1577071732, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373037313635323b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('th3ho6ha3pdouehr5vj66i3gj6aa8nrr', '::1', 1577260476, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373236303437363b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('to3o29pjpi3jnh2pmohoqstqukjvukr6', '::1', 1577095842, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373039353834323b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('ts5f8dlhqfbc7lomp8tpq36tcunvikuv', '::1', 1577089107, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373038393130373b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('u0586it9in82e2dh8qsdto246ml3ikfq', '::1', 1577258286, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373235383238363b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('u4jufk9f2u8lsc6q7su6als6ngm0dtlk', '::1', 1577070939, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373037303638303b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b737563636573737c733a32373a22557064617465207065726d697373696f6e20636f6d706c6574652e223b5f5f63695f766172737c613a313a7b733a373a2273756363657373223b733a333a226f6c64223b7d),
('u9gcvj9kjg03f8thdjkl00bbelt14cnb', '::1', 1577072813, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373037323635333b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('uedmi1047mjtlddp9gn4qh4mmbv621pr', '::1', 1577258932, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373235383933323b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('ugjulb7333sa109sbcdd3np256a3trdr', '::1', 1577254177, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373235343137373b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('uglobepvetb6ptlo1ooaonnjjui0btjr', '::1', 1577248885, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373234383838353b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('uj4g2kgpm1enjhstbmr0s5sqtv8e59bf', '::1', 1577086935, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373038363933343b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('uqb5bsb3fckcmes8qssh8bvdjn68n332', '::1', 1577091232, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373039313233323b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('vmt68cnbujqk1glkiqjihftsof1inapb', '::1', 1577087459, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373038373435393b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b),
('vr99etv6oipj4nqsac1ut9dj9idi0m5b', '::1', 1577257354, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537373235373335343b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b);

-- --------------------------------------------------------

--
-- Table structure for table `ci_shipping`
--

CREATE TABLE IF NOT EXISTS `ci_shipping` (
`shipping_id` int(11) NOT NULL,
  `shipping_detail` longtext NOT NULL,
  `shipping_username_update` varchar(255) NOT NULL,
  `shipping_datetime_update` datetime NOT NULL,
  `shipping_ip_update` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_shipping`
--

INSERT INTO `ci_shipping` (`shipping_id`, `shipping_detail`, `shipping_username_update`, `shipping_datetime_update`, `shipping_ip_update`) VALUES
(1, '<p>\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">You are provided with the content and services available on the Site in accordance with the following terms and conditions, our Privacy Policy, and other terms and policies that you may find through our Site on certain functions, features, offers or customer services, all of which are part of these Terms and Conditions.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">Please read these Terms and any other terms of use posted on the Platform as together they form our Platform Terms governing your utilization of our Platform and Platform services. We may change these Platform Terms from time to time without notice to you by posting the updated Platform Terms on the Platform, so please be sure to check regularly for updates. When you place an Order through our Platform or the Platform Call Centre, you are deemed to have consented to the latest version of the Platform Terms then posted on our Platform. If a change in law means that we have to change our Platform Terms after you have placed an Order but before it has been fulfilled, we are obliged to apply that change to your Order. In all other cases, the version posted at the time your Order was placed will apply. If you do not agree to be bound by the Platform Terms, you should not use the Platform.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="box-sizing: border-box; font-weight: bolder; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">Intellectual property :</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">We grant you personal, non-transferable and revocable power to use the services we provide to you as part of the Website for the sole purpose of enabling you to use and enjoy our Services, as set forth by us and in the manner permitted by the Terms and Conditions.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">Commercial use or use on behalf of third parties is prohibited unless expressly permitted in writing in advance. Any breach of these terms and conditions will result in the immediate cancellation of the license granted under this paragraph without notice to you and without prejudice to any other rights.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">All copyrights, trademarks, trade names, trade appearance, designs, &quot;features&quot; of the website and any other form of intellectual property, materials and other rights associated with the site, including HTML code and other codes used on the website, page or image titles, Texts, illustrations, formats, logos, designs, icons, images, downloads or videos (collectively, &quot;intellectual property&quot;) are - and remain at all times - the true ownership and right of La Secta Beauty and / or its owners For each of them, as they are protected by Saudi Arabia and the laws of trademarks and international copyright.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">Intellectual property and all other materials displayed on our website may be accessed, displayed, downloaded and printed solely for personal, non-commercial use, as expressly authorized by us and / or licensors as third parties by La Secta Beauty.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">But (i) provided that no modification or change of intellectual property is made in any way,</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">And (ii) not provide or provide intellectual property to any third party as a trade. No copyrights, trademarks or other proprietary rights shall be acquired at all in relation to intellectual property. You shall not be entitled to any license, right or interest in any materials or programs as an effect of your use of this website or your access to, display, download or print the intellectual property.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">Your IP can only be used as a shopping resource. Any other use of intellectual property, including copying, editing, distribution, transmission, republishing, presentation or performance of intellectual property, is strictly prohibited.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">La Secta Beauty is the exclusive or exclusive owner of intellectual property (as appropriate) and is exclusively licensed to the domain name saudi.lasectabeauty.com.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">La Secta Beauty may provide content owned by third parties (&quot;third party content&quot;) or links to third party websites (&quot;third party websites&quot;) as a service to those interested in such information. La Secta Beauty does not monitor or endorse the content of third parties or third party sites and does not have any control over them. The inclusion of links to the content of third parties or third party sites does not imply the existence of any link or relationship between La Secta Beauty and the relevant third parties.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">La Secta Beauty does not guarantee or endorse the accuracy or completeness of any third party content or any third party websites and does not endorse its accuracy or completeness. We are not responsible for updating or reviewing the content of third parties or third party sites. Your use of third party content and third party sites is at your own risk. And does not necessarily reflect the content of third parties, including comments by users of third party content received by La Secta Beauty , the views of the particular trustee.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">In the light of the above, La Secta Beauty will not be liable for any reason whatsoever for third party content and / or third party websites, including but not limited to the provision of external sources, content, commercials, products, services, or any information or data Others are available on the website or from external sources.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="box-sizing: border-box; font-weight: bolder; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">Terms of Sale :</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="box-sizing: border-box; font-weight: bolder; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">1. Eligibility</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">The purchase of products through the website is limited exclusively to parties who can legally conclude contracts on the Internet in accordance with the laws of the Saudi Arabia Kingdom.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">In order to make purchases on the Website, you must provide your personal data, including your true name and surname, a valid mobile phone number, a valid email address, payment details, a valid billing address and other required information as scheduled. You acknowledge and warrant that the payment details you provide are valid, complete and correct, and confirm that you are the person referred to in the billing information provided.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">The website is available only to people who meet the eligibility and e-payment requirements of those who have a valid credit card issued by a bank accepted by La Secta Beauty , and those who have authorized us to debit their credit cards for the total value of the products they purchase, including any taxes or connection charges, if any. Products purchased for personal use are to be presented as a gift only and may not be resold or used for commercial purposes or for any other commercial gain.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">When you request the purchase of a product (s), you expressly authorize La Secta Beauty to verify your credit card and to transfer, transmit or obtain your credit card information or credit reporting information (including any updated information) to or from third parties to verify your identity and verify The validity of your credit card and the initial authorization to use the card and / or authorize individual purchases, as we deem necessary. You agree that we may use personal information you provide for the purpose of conducting the necessary checks against fraud and that such personal information may be disclosed to a credit reference or fraud and fraud agency, which may retain a record of such information.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">Please refer to our Privacy Policy for information on how we use your data.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="box-sizing: border-box; font-weight: bolder; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">2. Order products</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">Products available on the website, including any samples or gifts with purchases that may be offered by you, are for personal use or for gifts only. You may not sell or resell any Products you buy.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">Products for sale are subject to acceptance and availability. If, for any reason, we are unable to provide a product, we will notify you as soon as possible and we will cancel your order in full.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">All applications are subject to acceptance. We reserve the right to refuse or cancel the request for any reason, including inaccuracies, product errors or pricing information, inability to obtain price authorization, or restrictions on delivery applicable to a particular piece, or because The requested item(s) does not meet the quality control standards we apply and is being withdrawn, or because you do not meet the eligibility criteria set out in the Terms and Conditions or any other problem we discover.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">La Secta Beauty will keep a record of your transactions for at least ten years and will keep that record for a reasonable period.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">Once your order is placed, you will receive an email with your order details. This email is not an acceptance of your request, but is an assurance that we have received your request.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">One of our agents will contact you to confirm your request and if our agent cannot reach you on the number you provided upon registration you will receive an email asking you to respond to your order. Even in the absence of confirmation, the initial request will also be processed.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">If you do not cancel your order, your application will be accepted when we have completed it. At this moment you will receive a second email to confirm that your application has been accepted and sent. Therefore, the sale contract is concluded in Saudi Arabia at the moment of approval, and the language of the contract will be Arabic. It is not the power of the payment processor, which represents a third party we use, and the carrier we nominate to accept a request on behalf of La Secta Beauty .</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">We may refuse to process a transaction for any reason and we may refuse to send to any person at any time in our sole and absolute discretion. We will not be liable to you or to any third party for withdrawing any product, including any samples or gifts, from the Website, whether or not you sell this product, nor to be responsible for our deletion, testing, review or editing. Any material or content on the Website, or we refuse to process a transaction, or to revoke or suspend any transaction after proceeding with the processing process.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">We do everything in our power to ensure that all details on the website are accurate, but we may occasionally discover a product price error. If we detect an error in the price of a product listed in your order, we will notify you as soon as possible. We will not be obliged to accept or execute an order for an advertised product at an incorrect price, and reserve the right to cancel this order that has already been accepted or is on its way to you. If you order a product with a wrong price, we will send an email to you or call you to inform you that we have not accepted your request and / or your order has been canceled. In case you have already paid for the product (s), we will refund the full amount as soon as we can. If these products are returned and are on their way, we will process the refund as soon as we receive the products.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">By confirming your purchase at the end of processing the order, you agree to accept and pay the full amount due for the product (s) as indicated in your order, including any delivery charges applicable to that order.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="box-sizing: border-box; font-weight: bolder; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">3. Prices and payment policy</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">Prices include the VAT applied on the day of your order. Any change in the applicable VAT rate will be automatically reflected in the price of the products sold by La Secta Beauty via its website. VAT :</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">Tax number: 300809133800003</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">All forms of payment by credit card are validated and authorized by the card issuer. If the credit card issuer declines the payment authorization, we will not be responsible for any delay or non-delivery. We will cancel your order and may contact you to choose an alternative payment method.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">The data on the credit card used in the payment must match exactly the credit card holder&#39;s information, that information registered with the issuer of the card. Your payment will be approved and placed on hold when you place your order and the amount will be deducted from your account upon termination of your application. You confirm that the credit card used is your card or that you have been specifically authorized by the credit card owner to use it.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">No credit card data will be stored, sold to or offered to or leased to any third parties except for the online payment gateway service provider we use.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="box-sizing: border-box; font-weight: bolder; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">4. Delivery</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">We are responsible for delivering products within Saudi Arabia, and we estimate that your order is expected to arrive within 2 to 7 business days from the day that your order is confirmed by email based on your location.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">Delivery charges will be added, if any, to product prices, and will be displayed in your local currency separately on the application form during the checkout process.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">If no one is available to receive the order, you will have the option to arrange an alternate delivery date or receive additional information about receiving your order from the delivery company. If you cannot receive your order on the second delivery attempt, you may have to pay an additional connection fee for any delivery attempt Other.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">Orders are delivered from Saturday to Thursday, except Fridays and public holidays.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="box-sizing: border-box; font-weight: bolder; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">5. Cancellation, Return and Replacement Policy</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">At La Secta Beauty, our goal is to ensure our customers&#39; satisfaction with their purchases from us.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">For the sake of your safety, La Secta Beauty does not allow the return or replacement of its products, except for products that reach you only damaged</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">Cancellation :</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">We are fully aware that sometimes you may change your mind about your purchase. If you change your mind before receiving your order, you only need to contact our customer service number 00966570674043 to cancel your order, and we will do our best within reasonable limits to cancel it, provided that it has already been implemented your request.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">If this happens, we will treat the cancellation as a return. In all cases, you can always contact our customer service, they will be happy to help you.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">Miscellaneous Provisions :</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">We reserve the right to amend these terms and conditions at any time without notice to you. Any amendments to these terms and conditions shall apply as soon as they are posted on our website. Your continued use of the Website (or any of our other websites) following such change means your consent to be bound by the modified terms and conditions. Please read the terms and conditions and see them again and again. If you do not agree to any change in the Terms and Conditions, you must immediately discontinue use of the Website.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">These terms and conditions constitute the entire legal agreement between you and La Secta Beauty , govern and govern your use of the Website and all the services and products available to it, and supersede any previous agreements between you and La Secta Beauty on the same purpose.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">You acknowledge and agree that the form and nature of the Services may change from time to time without prior notice to you. You may cease to provide the Services (or provide any features contained therein) to you or to users.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">You understand and understand that La Secta Beauty grants to public search engine operators the permission to use web spiders to copy material from the site for the sole purpose of creating publicly available search engines containing the material, and La Secta Beauty reserves the right to revoke these exceptions either generally or in specific cases.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">You understand and understand that you are solely responsible (and that La Secta Beauty is not liable to you or to any third party) for any breach of your obligations under the Terms and Conditions and the consequences (including any loss or damage you may suffer) on any such breach.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">The failure to exercise, enforce or delay the exercise or enforcement of any right or legal remedy shall not be construed as an official waiver of the rights of nationals.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">You and La Secta Beauty are independent contractors. These terms and conditions, including without limitation the provision, transmission, transmission or distribution of your Content, in whole or in part, do not constitute a partnership, joint venture, business, franchise or agency between you and La Secta Beauty . Neither party shall have the power to bind or charge the other party on its behalf without the prior written consent of the other party. Neither party is authorized to act as agent or representative of the other party or on behalf of the other party in any other capacity not expressly provided for in the Terms and Conditions. No party (or any of its agents) may declare that it represents the other party or is authorized to act as its representative or to consider itself as its representative. Neither party shall hold the other party any liability or obligation on its behalf or on its behalf, unless expressly provided for In these terms and conditions.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">If any provision of these Terms and Conditions is found to be illegal or unenforceable, the other terms and conditions shall not be affected and shall remain in full force and effect.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">These terms and conditions are available in English and Arabic. If there is any conflict between the English text and the Arabic text, the Arabic text shall prevail.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">These terms and conditions are subject to the laws of the Kingdom of Saudi Arabia. All disputes arising from the enforcement of these Terms and Conditions shall be subject to the exclusive jurisdiction of the courts of the Kingdom of Saudi Arabia.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">Your Rights :</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">If you have any questions about terms and conditions or any aspect of your system.</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">Please contact us at info@saudi.lasectabeauty.com</span><br style="box-sizing: border-box; color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: brandon_grotesqueregular, sans-serif; font-size: 16px;">Customer Services : 00966570674043</span></p>', 'admin', '2019-12-23 17:18:26', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sub_category`
--

CREATE TABLE IF NOT EXISTS `ci_sub_category` (
`sub_category_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_name` varchar(255) NOT NULL,
  `sub_category_username_create` varchar(255) NOT NULL,
  `sub_category_datetime_create` datetime NOT NULL,
  `sub_category_ip_create` varchar(255) NOT NULL,
  `sub_category_username_update` varchar(255) NOT NULL,
  `sub_category_datetime_update` datetime NOT NULL,
  `sub_category_ip_update` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_sub_category`
--

INSERT INTO `ci_sub_category` (`sub_category_id`, `category_id`, `sub_category_name`, `sub_category_username_create`, `sub_category_datetime_create`, `sub_category_ip_create`, `sub_category_username_update`, `sub_category_datetime_update`, `sub_category_ip_update`) VALUES
(2, 1, 'Shop All Make Up', 'admin', '2019-12-25 12:55:18', '::1', 'admin', '2019-12-25 12:55:18', '::1'),
(3, 1, 'Best Sellers', 'admin', '2019-12-25 12:55:30', '::1', 'admin', '2019-12-25 12:55:30', '::1'),
(4, 1, 'New Arrival', 'admin', '2019-12-25 12:55:46', '::1', 'admin', '2019-12-25 12:55:46', '::1'),
(5, 1, 'Lipstick', 'admin', '2019-12-25 12:56:02', '::1', 'admin', '2019-12-25 12:56:02', '::1'),
(6, 1, 'Conpact / Power / Cousion', 'admin', '2019-12-25 12:56:38', '::1', 'admin', '2019-12-25 12:56:38', '::1'),
(7, 2, 'Shop All Skin Care', 'admin', '2019-12-25 12:56:56', '::1', 'admin', '2019-12-25 12:56:56', '::1'),
(8, 2, 'Best Sellers', 'admin', '2019-12-25 12:57:08', '::1', 'admin', '2019-12-25 12:57:08', '::1'),
(9, 2, 'New Arrival', 'admin', '2019-12-25 12:57:22', '::1', 'admin', '2019-12-25 12:57:22', '::1'),
(10, 2, 'Lipstick', 'admin', '2019-12-25 12:57:34', '::1', 'admin', '2019-12-25 12:57:34', '::1'),
(11, 2, 'Conpact / Power / Cousion', 'admin', '2019-12-25 12:57:45', '::1', 'admin', '2019-12-25 12:57:45', '::1'),
(12, 3, 'Shop All Haircare', 'admin', '2019-12-25 12:58:08', '::1', 'admin', '2019-12-25 12:58:08', '::1'),
(13, 3, 'Best Sellers', 'admin', '2019-12-25 12:58:18', '::1', 'admin', '2019-12-25 12:58:27', '::1'),
(14, 3, 'New Arrival', 'admin', '2019-12-25 12:58:37', '::1', 'admin', '2019-12-25 12:58:37', '::1'),
(15, 3, 'Shampoo', 'admin', '2019-12-25 12:58:49', '::1', 'admin', '2019-12-25 12:58:49', '::1'),
(16, 3, 'Conditioner', 'admin', '2019-12-25 12:59:02', '::1', 'admin', '2019-12-25 12:59:02', '::1'),
(17, 3, 'Treatment', 'admin', '2019-12-25 12:59:23', '::1', 'admin', '2019-12-25 12:59:23', '::1'),
(18, 4, 'Shop All Accessories', 'admin', '2019-12-25 12:59:47', '::1', 'admin', '2019-12-25 12:59:47', '::1'),
(19, 4, 'Best Sellers', 'admin', '2019-12-25 12:59:58', '::1', 'admin', '2019-12-25 12:59:58', '::1'),
(20, 4, 'New Arrival', 'admin', '2019-12-25 13:00:10', '::1', 'admin', '2019-12-25 13:00:10', '::1'),
(21, 4, 'Brush', 'admin', '2019-12-25 13:00:25', '::1', 'admin', '2019-12-25 13:00:25', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
`department_id` int(11) NOT NULL,
  `department_name` varchar(1000) NOT NULL,
  `department_menu` longtext NOT NULL,
  `department_sub_menu` text
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`, `department_menu`, `department_sub_menu`) VALUES
(1, 'Administrator', '50, 56, 57, 64, 58, 59, 60, 61, 62, 63', '5, 6, 7, 29, 27, 28, 32, 30, 31, 33, 34, 35, 36'),
(2, 'User', '2, 3', '');

-- --------------------------------------------------------

--
-- Table structure for table `ford`
--

CREATE TABLE IF NOT EXISTS `ford` (
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

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

CREATE TABLE IF NOT EXISTS `menu` (
`menu_id` int(11) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `menu_controller` varchar(255) NOT NULL,
  `menu_sort` int(11) NOT NULL,
  `menu_enable` int(1) NOT NULL,
  `menu_link` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_name`, `menu_controller`, `menu_sort`, `menu_enable`, `menu_link`) VALUES
(1, 'Menu', 'menu', 10, 0, 'menu/backend'),
(2, 'Sub Menu', 'sub_menu', 20, 0, 'sub_menu/backend'),
(50, 'Authentication', 'authentication', 30, 1, 'authentication/backend'),
(56, 'Data Product', 'data_product', 40, 1, 'data_product/backend'),
(57, 'Home', 'home', 100, 1, 'home/backend'),
(58, 'How To Order', 'how_to_order', 400, 1, 'how_to_order/backend'),
(59, 'Shipping', 'shipping', 600, 1, 'shipping/backend'),
(60, 'FAQS', 'faqs', 700, 1, 'faqs/backend'),
(61, 'Contact', 'contact', 800, 1, 'contact/backend'),
(62, 'Member', 'member', 1100, 1, 'member/backend'),
(63, 'Order', 'order', 1200, 1, 'order/backend'),
(64, 'News & Tips', 'news_tips', 350, 1, 'news_tips/backend');

-- --------------------------------------------------------

--
-- Table structure for table `sub_menu`
--

CREATE TABLE IF NOT EXISTS `sub_menu` (
`sub_menu_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `sub_menu_name` varchar(255) NOT NULL,
  `sub_menu_controller` varchar(255) NOT NULL,
  `sub_menu_sort` int(11) NOT NULL,
  `sub_menu_enable` int(1) NOT NULL,
  `sub_menu_link` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_menu`
--

INSERT INTO `sub_menu` (`sub_menu_id`, `menu_id`, `sub_menu_name`, `sub_menu_controller`, `sub_menu_sort`, `sub_menu_enable`, `sub_menu_link`) VALUES
(5, 50, 'Department', 'department,department_form,department_save_update', 10, 1, 'authentication/backend/department'),
(6, 50, 'Permission', 'permission,permission_form,permission_save_update', 20, 1, 'authentication/backend/permission'),
(7, 50, 'User', 'user,user_form,user_save_update', 30, 1, 'authentication/backend/user'),
(16, 68, 'Contact Us', 'contact_us,contact_us_form,contact_us_save_update', 10, 0, 'contact_us/backend/contact_us'),
(22, 65, 'Description', 'portfolio_description,portfolio_description_form,portfolio_description_save_update', 0, 1, 'portfolio/backend/portfolio_description'),
(27, 56, 'Category', 'category,category_form,category_save_update', 100, 1, 'data_product/backend/category'),
(28, 56, 'Sub Category', 'sub_category,sub_category_form,sub_category_save_update', 200, 1, 'data_product/backend/sub_category'),
(29, 56, 'Color', 'color,color_form,color_save_update', 50, 1, 'data_product/backend/color'),
(30, 57, 'Banner', 'banner,banner_form,banner_save_update', 100, 1, 'home/backend/banner'),
(31, 57, 'New Arrivals', 'new_arrivals,new_arrivals_form,new_arrivals_save_update', 200, 0, 'home/backend/new_arrivals'),
(32, 56, 'Product', 'product,product_form,product_save_update', 400, 1, 'data_product/backend/product'),
(33, 57, 'Banner 2', 'banner_2,banner_2_form,banner_2_save_update', 300, 1, 'home/backend/banner_2'),
(34, 57, 'Instagram', 'instagram,instagram_form,instagram_save_update', 500, 1, 'home/backend/instagram'),
(35, 64, 'Banner', 'banner_news_tips,banner_news_tips_form,banner_news_tips_save_update', 100, 0, 'news_tips/backend/banner_news_tips'),
(36, 64, 'Data', 'news_tips_data,news_tips_data_form,news_tips_data_save_update', 200, 1, 'news_tips/backend/news_tips_data');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
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
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

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
-- Indexes for table `ci_banner`
--
ALTER TABLE `ci_banner`
 ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `ci_banner_2`
--
ALTER TABLE `ci_banner_2`
 ADD PRIMARY KEY (`banner_2_id`);

--
-- Indexes for table `ci_banner_news_tips`
--
ALTER TABLE `ci_banner_news_tips`
 ADD PRIMARY KEY (`banner_news_tips_id`);

--
-- Indexes for table `ci_category`
--
ALTER TABLE `ci_category`
 ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `ci_color`
--
ALTER TABLE `ci_color`
 ADD PRIMARY KEY (`color_id`);

--
-- Indexes for table `ci_contact`
--
ALTER TABLE `ci_contact`
 ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `ci_faqs`
--
ALTER TABLE `ci_faqs`
 ADD PRIMARY KEY (`faqs_id`);

--
-- Indexes for table `ci_how_to_order`
--
ALTER TABLE `ci_how_to_order`
 ADD PRIMARY KEY (`how_to_order_id`);

--
-- Indexes for table `ci_instagram`
--
ALTER TABLE `ci_instagram`
 ADD PRIMARY KEY (`instagram_id`);

--
-- Indexes for table `ci_news_tips_data`
--
ALTER TABLE `ci_news_tips_data`
 ADD PRIMARY KEY (`news_tips_data_id`);

--
-- Indexes for table `ci_new_arrivals`
--
ALTER TABLE `ci_new_arrivals`
 ADD PRIMARY KEY (`new_arrivals_id`);

--
-- Indexes for table `ci_product`
--
ALTER TABLE `ci_product`
 ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `ci_session`
--
ALTER TABLE `ci_session`
 ADD PRIMARY KEY (`id`), ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `ci_shipping`
--
ALTER TABLE `ci_shipping`
 ADD PRIMARY KEY (`shipping_id`);

--
-- Indexes for table `ci_sub_category`
--
ALTER TABLE `ci_sub_category`
 ADD PRIMARY KEY (`sub_category_id`);

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
-- AUTO_INCREMENT for table `ci_banner`
--
ALTER TABLE `ci_banner`
MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `ci_banner_2`
--
ALTER TABLE `ci_banner_2`
MODIFY `banner_2_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ci_banner_news_tips`
--
ALTER TABLE `ci_banner_news_tips`
MODIFY `banner_news_tips_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ci_category`
--
ALTER TABLE `ci_category`
MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ci_color`
--
ALTER TABLE `ci_color`
MODIFY `color_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ci_contact`
--
ALTER TABLE `ci_contact`
MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ci_faqs`
--
ALTER TABLE `ci_faqs`
MODIFY `faqs_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ci_how_to_order`
--
ALTER TABLE `ci_how_to_order`
MODIFY `how_to_order_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ci_instagram`
--
ALTER TABLE `ci_instagram`
MODIFY `instagram_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ci_news_tips_data`
--
ALTER TABLE `ci_news_tips_data`
MODIFY `news_tips_data_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ci_new_arrivals`
--
ALTER TABLE `ci_new_arrivals`
MODIFY `new_arrivals_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ci_product`
--
ALTER TABLE `ci_product`
MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ci_shipping`
--
ALTER TABLE `ci_shipping`
MODIFY `shipping_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ci_sub_category`
--
ALTER TABLE `ci_sub_category`
MODIFY `sub_category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ford`
--
ALTER TABLE `ford`
MODIFY `ford_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `sub_menu`
--
ALTER TABLE `sub_menu`
MODIFY `sub_menu_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
