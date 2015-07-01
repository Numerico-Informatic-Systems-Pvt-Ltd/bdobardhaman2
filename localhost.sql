-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 29, 2014 at 04:46 AM
-- Server version: 5.5.40-36.1-log
-- PHP Version: 5.4.23

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bdobardh_bdo`
--
CREATE DATABASE `bdobardh_bdo` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bdobardh_bdo`;

-- --------------------------------------------------------

--
-- Table structure for table `bottom_menu`
--

DROP TABLE IF EXISTS `bottom_menu`;
CREATE TABLE IF NOT EXISTS `bottom_menu` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `rank` int(11) NOT NULL,
  `name` text NOT NULL,
  `link` text NOT NULL,
  `description` text NOT NULL,
  `underline` int(11) NOT NULL,
  `widget` text NOT NULL,
  `widget_image` text NOT NULL,
  PRIMARY KEY (`id`,`parent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bottom_menu`
--

INSERT INTO `bottom_menu` (`id`, `parent_id`, `rank`, `name`, `link`, `description`, `underline`, `widget`, `widget_image`) VALUES
(1, 0, 1, 'Establishment', 'workinprogress', '', 0, '', ''),
(2, 0, 2, 'Income Certificate', 'thisis', '', 0, '', ''),
(3, 0, 3, 'Guset House', 'workinprogress', '', 0, '', ''),
(4, 0, 4, 'suggestions', 'home', '', 0, '', ''),
(5, 0, 5, 'Tourism', 'workinprogress', '', 0, '', ''),
(6, 0, 6, 'co-operative sociery', 'holidaylist', '', 0, '', ''),
(7, 1, 1, 'Directory', 'establishment', '', 0, '', ''),
(8, 2, 1, 'Residential Certificate', 'abcd', '', 0, '', ''),
(9, 1, 2, 'Holiday List', 'holidaylist', '', 0, '', ''),
(10, 1, 3, 'Budget', 'holidaylist', '', 0, '', ''),
(11, 1, 4, 'Budgetary Sources', 'establishment', '', 0, '', ''),
(12, 1, 5, 'Revenues', 'establishment', '', 0, '', ''),
(13, 1, 6, 'Department I ', 'holidaylist', '', 0, '', ''),
(14, 1, 7, 'Department II', 'establishment', '', 0, '', ''),
(15, 1, 8, 'Block', 'establishment', '', 0, '', ''),
(16, 1, 9, 'Panchayat Samiti', 'establishment', '', 0, '', ''),
(17, 1, 10, 'Caste Certificate', 'establishment', '', 0, '', ''),
(18, 1, 11, 'Domicile Certificate', 'establishment', '', 0, '', ''),
(19, 2, 2, 'Trade License', 'home', '', 0, '', ''),
(20, 2, 4, 'Finance', 'home', '', 0, '', ''),
(21, 2, 4, 'Financial Assistance', 'holidaylist', '', 0, '', ''),
(22, 2, 5, 'Grant [Cash / Kind]', 'home', '', 0, '', ''),
(23, 2, 6, 'Registration of Birth & Death', 'home', '', 0, '', ''),
(24, 2, 7, 'RTI', 'home', '', 0, '', ''),
(25, 2, 8, 'Passport', 'home', '', 0, '', ''),
(26, 2, 9, 'Public Grievance', 'home', '', 0, '', ''),
(27, 2, 10, 'Booking', 'home', '', 0, '', ''),
(28, 2, 11, 'Marriage Hall', 'home', '', 0, '', ''),
(29, 3, 1, 'Utsav Mancha', 'home', '', 0, '', ''),
(30, 3, 2, 'Retail Shops', 'home', '', 0, '', ''),
(31, 3, 3, 'Dead / Damaged Tree', 'home', '', 0, '', ''),
(32, 3, 4, 'Land Dispute', 'home', '', 0, '', ''),
(33, 3, 5, 'Domestic Violence', 'home', '', 0, '', ''),
(34, 3, 6, 'Misc Public Grievance', 'home', '', 0, '', ''),
(35, 3, 7, 'BPHC', 'home', '', 0, '', ''),
(36, 3, 8, 'SHC', 'home', '', 0, '', ''),
(37, 3, 8, 'Ayush Clinic', 'home', '', 0, '', ''),
(38, 3, 10, 'ICDS Center', 'home', '', 0, '', ''),
(39, 3, 11, 'Veterinary Clinic', 'home', '', 0, '', ''),
(40, 4, 1, 'Midday', 'home', '', 0, '', ''),
(41, 4, 2, 'MDM', 'home', '', 0, '', ''),
(42, 4, 3, 'NBA', 'home', '', 0, '', ''),
(43, 4, 4, 'NREGA', 'home', '', 0, '', ''),
(44, 4, 7, 'KANYASREE', 'home', '', 0, '', ''),
(45, 4, 8, 'BEUP', 'home', '', 0, '', ''),
(46, 4, 10, 'Unemployment Assistance', 'home', '', 0, '', ''),
(47, 4, 11, 'Housing', 'home', '', 0, '', ''),
(48, 5, 1, 'Damodar River', 'home', '', 0, '', ''),
(49, 5, 2, 'Picnic Spot', 'home', '', 0, '', ''),
(50, 5, 3, 'Green landscape', 'home', '', 0, '', ''),
(51, 5, 4, 'Musuri Mayer Bedi', 'home', '', 0, '', ''),
(52, 5, 5, 'Dining & Confectionary', 'home', '', 0, '', ''),
(53, 5, 6, 'Primary', 'home', '', 0, '', ''),
(54, 5, 7, 'Upper Primary', 'home', '', 0, '', ''),
(55, 5, 9, 'Secondary', 'home', '', 0, '', ''),
(56, 5, 10, 'Higher Secondary', 'home', '', 0, '', ''),
(57, 6, 1, 'Information Kiosk', 'home', '', 0, '', ''),
(58, 6, 2, 'Open University Centers', 'home', '', 0, '', ''),
(59, 6, 3, 'Rajib Gandhi Computer Center', 'home', '', 0, '', ''),
(60, 6, 4, 'Telephone Exchange', 'home', '', 0, '', ''),
(61, 6, 5, 'Electric Office', 'home', '', 0, '', ''),
(62, 6, 6, 'Bus Terminus', 'home', '', 0, '', ''),
(63, 6, 7, 'Railway Stations', 'home', '', 0, '', ''),
(64, 6, 8, 'Petrol Pump', 'home', '', 0, '', ''),
(65, 6, 9, 'Fire Station', 'home', '', 0, '', ''),
(66, 6, 10, 'Police Station', 'home', '', 0, '', ''),
(67, 6, 11, 'Tender / Quotation Notification', 'home', '', 0, '', ''),
(68, 5, 8, 'Jr High', 'home', '', 0, '', ''),
(69, 4, 5, '13FC', 'home', '', 0, '', ''),
(70, 4, 6, 'MPLAD', 'home', '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `bulletins`
--

DROP TABLE IF EXISTS `bulletins`;
CREATE TABLE IF NOT EXISTS `bulletins` (
  `id` int(11) NOT NULL,
  `header` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bulletins`
--

INSERT INTO `bulletins` (`id`, `header`, `image`, `content`) VALUES
(1, 'home page bulletin', 'image.png', '<h4>Development Block, under Burdwan District</h4>\n<p>We are providing more development plan for Block under Burdwan District and also we are giving facility for online information, application and various services for public of this block.</p>\n<p><a class="more" href="#">View More...</a></p>');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

DROP TABLE IF EXISTS `contactus`;
CREATE TABLE IF NOT EXISTS `contactus` (
  `id` int(11) NOT NULL,
  `header` varchar(50) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `header`, `content`) VALUES
(1, 'home contact', '<h3>CONTACT US</h3>\n<p>Office Of The Block Development&nbsp;<br /> Burdwan - II, Development Block<br /> Barsul (Unnayani). <br /> Burdwan - 713124<br /> Contact No. - 0342-2586243<br /> E-mail Id : <a href="#">info@bdobardhaman2.in</a></p>'),
(2, 'new contact us', '<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;h3&gt;CONTACT US&lt;/h3&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;p&gt;Office Of The Block Development Officer&lt;br /&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Burdwan - II, Development Block&lt;br /&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Barsul (Unnayani). &lt;br /&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Burdwan - 713124&lt;br /&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Contact No. - 0342-2586243&lt;br /&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; E-mail Id : &lt;a href="#"&gt;info@bdobardhaman2.in&lt;/a&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/p&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;p&gt;&lt;a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.8063412437673!2d87.45047300000002!3d23.467448999999952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f77be54ab15797%3A0xc7f2c45220abbbf2!2sBlock+Development+Officer&amp;#39;s+Office+(B.D.O)!5e0!3m2!1sen!2sin!4v1396358291886" class="more" target="_blank"&gt;Maps and directions to UCOP locations&lt;/a&gt;&lt;/p&gt;</p>');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_images`
--

DROP TABLE IF EXISTS `gallery_images`;
CREATE TABLE IF NOT EXISTS `gallery_images` (
  `id` int(11) NOT NULL,
  `gallery_id` int(11) NOT NULL,
  `image_name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery_images`
--

INSERT INTO `gallery_images` (`id`, `gallery_id`, `image_name`) VALUES
(1, 1, 'bllllueeeeeee5.jpeg'),
(2, 1, 'bllllueeeeeee6.jpeg'),
(3, 1, 'image.png'),
(4, 1, 'kkk.php');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_name`
--

DROP TABLE IF EXISTS `gallery_name`;
CREATE TABLE IF NOT EXISTS `gallery_name` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery_name`
--

INSERT INTO `gallery_name` (`id`, `name`) VALUES
(1, 'gallary1'),
(2, 'gallery 23'),
(3, 'gallery3'),
(4, 'gallery 4');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `rank` int(11) NOT NULL,
  `name` text NOT NULL,
  `link` text NOT NULL,
  `description` text NOT NULL,
  `underline` int(11) NOT NULL,
  `widget` text NOT NULL,
  `widget_image` text NOT NULL,
  PRIMARY KEY (`id`,`parent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `parent_id`, `rank`, `name`, `link`, `description`, `underline`, `widget`, `widget_image`) VALUES
(1, 0, 1, 'Home', 'home', '', 0, '', ''),
(2, 0, 2, 'Organisatioin', 'workinprogress', '', 0, '<p style="width: 300px; float: right; text-align: justify;">During this festival season when we all int end to do something new in our life, I have the honour as the head of the Block (institution) to bring forth the Baghmundi Dev. the websit. During this festival season when we all int end to do something new in our life,</p>', 'organization.png'),
(3, 0, 3, 'Contact Us', 'contactus', '', 0, '', ''),
(4, 0, 4, 'Assets', 'workinprogress', '', 0, '<p style="width: 560px; float: right; text-align: justify;">During this festival season when we all int end to do something new in our life, I have the honour as the head of the Block (institution) to bring forth the Baghmundi Dev. the websit. During this festival season when we all int end to do something new in our life, I have the honour as the head of the Block (institution) to bring forth the Baghmundi Dev. the websit During this festival season when we all int end to do something new in our life, I have the honour as the head of the Block (institution) to bring forth the Baghmundi Dev. the websit. During this festival season when we all int end to do something new in our life, I have the honour as the head of the Block (institution) Dev. the websit...</p>', 'assets.png'),
(5, 0, 5, 'Services', 'workinprogress', '', 0, '', 'service.png'),
(6, 0, 6, 'Schemes', 'workinprogress', '', 0, '<p style="width: 360px; float: right; text-align: justify;">During this festival season when we all int end to do something new in our life, I have the honour as the head of the Block (institution) to bring forth the Baghmundi Dev. the websit. During this festival season when we all int end to do something new in our life, I have the honour as the head of the Block (institution) to bring forth the Baghmundi Dev.</p>', 'miday.png'),
(7, 0, 7, 'Public Utility', 'workinprogress', '', 0, '', 'tourist.png'),
(8, 0, 8, 'About', 'workinprogress', '', 0, '<p style="width: 460px; float: right; text-align: justify;">During this festival season when we all int end to do something new in our life, I have the honour as the head of the Block (institution) to bring forth the Baghmundi Dev. the websit. During this festival season when we all int end to do something new in our life, I have the honour as the head of the Block (institution) to bring forth the Baghmundi Dev. the websit During this festival season when we all int end to do something new in our life, I have the honour as the head of the Block (institution) to bring forth the Baghmundi Dev. the websit. During this festival season when we all int end to do something new in our life, I have the honour as the head of the Block (institution) Dev. the websit...</p>', 'about2.png'),
(9, 2, 1, 'Establishment', 'establishment', '', 0, '', ''),
(10, 2, 2, 'Directory', 'workinprogress', '', 0, '', ''),
(11, 2, 3, 'Holiday List', 'holidaylist', '', 0, '', ''),
(12, 2, 4, 'Budget', 'workinprogress', '', 0, '', ''),
(13, 2, 5, 'Line Department', 'workinprogress', '', 0, '', ''),
(14, 12, 1, 'Budgetary Sources', 'workinprogress', '', 0, '', ''),
(15, 12, 2, 'Revenues', 'workinprogress', '', 0, '', ''),
(16, 13, 1, 'Department-I', 'workinprogress', '', 0, '', ''),
(17, 13, 2, 'Department-2', 'department2', '', 0, '', ''),
(18, 4, 1, 'Block', 'workinprogress', '', 0, '', ''),
(19, 4, 2, 'Panchayat', 'workinprogress', '', 0, '', ''),
(20, 5, 1, 'Certificate', 'workinprogress', '', 0, '', ''),
(21, 20, 1, 'Caste certificate', 'caste-certificate', '', 0, '', ''),
(22, 20, 2, 'Domicile Certificate', 'workinprogress', '', 0, '', ''),
(23, 20, 3, 'Unemployment Certificate', 'workinprogress', '', 0, '', ''),
(24, 20, 4, 'Income Certificate', 'workinprogress', '', 0, '', ''),
(25, 20, 5, 'Residential Certificate', 'workinprogress', '', 0, '', ''),
(26, 20, 6, 'Trade License', 'workinprogress', '', 1, '', ''),
(27, 5, 2, 'Finance', 'workinprogress', '', 0, '', ''),
(28, 27, 1, 'Financial Assistance', 'abcd', '', 0, '', ''),
(29, 27, 2, 'Grant', 'workinprogress', '', 0, '', ''),
(30, 27, 3, 'Registration of Birth and Date', 'workinprogress', '', 1, '', ''),
(31, 27, 4, 'RTI', 'home', '', 1, '', ''),
(32, 5, 3, 'Public Grievance', 'home', '', 0, '', ''),
(33, 32, 1, 'Booking', 'abcd', '', 0, '', ''),
(34, 32, 2, 'Marriage Hall', 'workinprogress', '', 0, '', ''),
(35, 32, 3, 'Guest House', 'holidaylist', '', 0, '', ''),
(36, 32, 4, 'Utsav Mancha', 'home', '', 0, '', ''),
(37, 32, 5, 'Retail Shops', 'holidaylist', '', 0, '', ''),
(38, 5, 4, 'Repost', 'workinprogress', '', 0, '', ''),
(39, 38, 1, 'Dead / Damaged Tree', 'abcd', '', 0, '', ''),
(40, 39, 2, 'Land Dispute', 'workinprogress', '', 0, '', ''),
(41, 38, 2, 'Land Dispute', 'abcd', '', 0, '', ''),
(42, 38, 3, 'Domestic Violence', 'abcd', '', 0, '', ''),
(43, 38, 4, 'MIsc Public Grievence', 'home', '', 0, '', ''),
(44, 38, 5, 'suggestions', 'abcd', '', 0, '', ''),
(45, 5, 5, 'Passpost', 'abcd', '', 0, '', ''),
(46, 45, 1, 'Signup for Volunteers', 'abcd', '', 1, '', ''),
(47, 45, 2, 'Check Status', 'home', '', 1, '', ''),
(48, 6, 1, 'Midday', 'abcd', '', 0, '', ''),
(49, 6, 2, 'NREGA', 'abcd', '', 0, '', ''),
(50, 6, 3, 'KNAYASREE', 'abcd', '', 0, '', ''),
(51, 6, 4, 'Unemployeement assistance', 'abcd', '', 0, '', ''),
(53, 8, 1, 'History', 'establishment', '', 0, '', ''),
(54, 8, 2, 'Facts & Stories of Block', 'abcd', '', 0, '', ''),
(55, 8, 3, 'Attractions', 'workinprogress', '', 0, '', ''),
(56, 48, 1, 'MDM', 'workinprogress', '', 0, '', ''),
(57, 48, 2, 'NBA', 'holidaylist', '', 0, '', ''),
(58, 49, 1, '13FC', 'abcd', '', 0, '', ''),
(59, 49, 2, 'MPLAD', 'thisis', '', 0, '', ''),
(60, 50, 1, 'BEUP', 'workinprogress', '', 0, '', ''),
(61, 50, 2, '3rd FC', 'home', '', 0, '', ''),
(62, 51, 1, 'Housing', 'home', '', 0, '', ''),
(63, 7, 1, 'Tourism', 'home', '', 0, '', ''),
(64, 9, 1, 'test', 'abcd', '', 0, '', ''),
(65, 2, 6, 'test10', 'abcd', 'weqeqqe', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(11) NOT NULL,
  `header` varchar(50) NOT NULL,
  `tab_id` int(11) NOT NULL,
  `tab_name` text NOT NULL,
  `tab_content` text NOT NULL,
  PRIMARY KEY (`news_id`,`tab_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `header`, `tab_id`, `tab_name`, `tab_content`) VALUES
(1, 'home news', 1, 'Election 2011', '<p>ghh111</p>'),
(1, 'home news', 2, 'Election 2012', '<p>Content 2012</p>'),
(1, 'home news', 3, 'Election 2013', '<p>Election 2013</p>'),
(1, 'home news', 4, 'Election 2014', '<p>abc</p>');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
CREATE TABLE IF NOT EXISTS `notifications` (
  `id` int(11) NOT NULL,
  `header` varchar(50) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `header`, `content`) VALUES
(1, 'home notification', '<h3>IMPORTANT NOTIFICATIONS</h3>\n<p>Since the Model Code of Conduct for huge sobha Election 2014 has come into effect from 5th March 2014, no new project is being taken up until the end of Election.</p>\n<p>As per the guideline of the Election Commission of India, only the ongoing works are being executed.</p>\n<p>&nbsp;</p>\n<p>test</p>\n<p>&nbsp;</p>'),
(2, 'new note', '<p>asdasdasd</p>'),
(3, 'New Website Launching in August 2014', '<p>We are happy to announce release of our website on August 2014.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

DROP TABLE IF EXISTS `page`;
CREATE TABLE IF NOT EXISTS `page` (
  `id` int(11) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `default_page` int(11) NOT NULL,
  `video_content_id` int(11) NOT NULL,
  `bulletin_content_id` int(11) NOT NULL,
  `notification_content_id` int(11) NOT NULL,
  `staffdirectory_content_id` int(11) NOT NULL,
  `contactus_content_id` int(11) NOT NULL,
  `news_content_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `slug`, `title`, `content`, `default_page`, `video_content_id`, `bulletin_content_id`, `notification_content_id`, `staffdirectory_content_id`, `contactus_content_id`, `news_content_id`) VALUES
(1, 'establishment', 'establishment', '<h2>ALL STAFF DETAILS UNDER BURDWAN-II DEV. BLOCK</h2>\n<h4>Name of the Block Development Officer : Mrs. Kamalika Mukherjee</h4>\n<h4>Contact Nos. : 9831115082 (Mob.), 0342-2586888 (O), 0342-2586243 (O)</h4>\n<h4>Office mail id : bdo.bardhaman2@gmail.com</h4>\n<table id="customers2" border="1" width="100%">\n<tbody>\n<tr>\n<td style="font-weight: bold;">SL NO</td>\n<td style="font-weight: bold;">SECTION NAME</td>\n<td style="font-weight: bold;">NAME OF STAFF</td>\n<td style="font-weight: bold;">DESIGNATION</td>\n<td style="font-weight: bold;">CONTACT NO</td>\n</tr>\n<tr>\n<td>1</td>\n<td style="font-weight: bold;">ESTABLISHMENT SECTION</td>\n<td>SUKLA DAS GANGULY</td>\n<td>JOINT BDO</td>\n<td>9830569506</td>\n</tr>\n<tr>\n<td>2</td>\n<td>&nbsp;</td>\n<td>CHAITALI MOZUMDER</td>\n<td>UDA(RD)</td>\n<td>9432469689</td>\n</tr>\n<tr>\n<td>3</td>\n<td>&nbsp;</td>\n<td>GOBINDAPRASAD KONER</td>\n<td>UDA(RD)</td>\n<td>8670078202</td>\n</tr>\n<tr>\n<td>4</td>\n<td>&nbsp;</td>\n<td>SAMAPTY MALLICK (CHAKRABORTY)</td>\n<td>LDA</td>\n<td>9832877493</td>\n</tr>\n<tr>\n<td>5</td>\n<td>&nbsp;</td>\n<td>UJJAWAL CHOWDHURY</td>\n<td>LDA</td>\n<td>9732248084</td>\n</tr>\n<tr>\n<td>6</td>\n<td>&nbsp;</td>\n<td>KRISHNAPADA DHALI</td>\n<td>GR.D</td>\n<td>NIL</td>\n</tr>\n<tr>\n<td>7</td>\n<td>&nbsp;</td>\n<td>SUBODH CH MAL</td>\n<td>GR.D</td>\n<td>NIL</td>\n</tr>\n<tr>\n<td>8</td>\n<td>&nbsp;</td>\n<td>GOUTAM MAJI</td>\n<td>GR.D</td>\n<td>9476312366</td>\n</tr>\n<tr>\n<td>9</td>\n<td style="font-weight: bold;">CASH SECTION</td>\n<td>KARTICK KAIBARTYA</td>\n<td>CASHIER-CUM-STORE KEEPER</td>\n<td>9679712697</td>\n</tr>\n<tr>\n<td>10</td>\n<td>&nbsp;</td>\n<td>SOURAV BHATTACHARYA</td>\n<td>CASHIER-CUM-STORE KEEPER (PS)</td>\n<td>9474778225</td>\n</tr>\n<tr>\n<td>11</td>\n<td style="font-weight: bold;">PANCHAYAT SECTION</td>\n<td>PRABIR KR. DUTTA</td>\n<td>PDO</td>\n<td>9734084149 9432849697</td>\n</tr>\n<tr>\n<td>12</td>\n<td>&nbsp;</td>\n<td>TAPAN KARMAKAR</td>\n<td>PA&amp;AO</td>\n<td>8001569436</td>\n</tr>\n<tr>\n<td>13</td>\n<td>&nbsp;</td>\n<td>PINTU PAL</td>\n<td>LDA</td>\n<td>9775316902</td>\n</tr>\n<tr>\n<td>14</td>\n<td>&nbsp;</td>\n<td>MINA DUTTA</td>\n<td>GR.D</td>\n<td>9775332813</td>\n</tr>\n<tr>\n<td>15</td>\n<td style="font-weight: bold;">SAE SECTION(DEV.)</td>\n<td>MANAS KR DE</td>\n<td>SAE(RWS)</td>\n<td>9477060415</td>\n</tr>\n<tr>\n<td>16</td>\n<td>&nbsp;</td>\n<td>TUSHAR DUTTA</td>\n<td>SAE(BP)</td>\n<td>9474362490</td>\n</tr>\n<tr>\n<td>17</td>\n<td>&nbsp;</td>\n<td>KAUSHIK GUHA</td>\n<td>SAE(N)</td>\n<td>9432557468</td>\n</tr>\n<tr>\n<td>18</td>\n<td>&nbsp;</td>\n<td>ESRAR AHMED</td>\n<td>MECH.(PHE)</td>\n<td>9735824202</td>\n</tr>\n<tr>\n<td>19</td>\n<td style="font-weight: bold;">ELECTION SECTION</td>\n<td>SHYAMAL KR. HALDAR</td>\n<td>LDC</td>\n<td>9046949542</td>\n</tr>\n<tr>\n<td>20</td>\n<td style="font-weight: bold;">FISHERY</td>\n<td>PRASANTA SEKHAR KUAR</td>\n<td>FEO</td>\n<td>9476135708</td>\n</tr>\n<tr>\n<td>21</td>\n<td style="font-weight: bold;">CO-OPERATIVE</td>\n<td>KOUSHIK DUTTA</td>\n<td>CI</td>\n<td>9477613621</td>\n</tr>\n<tr>\n<td>22</td>\n<td style="font-weight: bold;">MGNREGA CELL</td>\n<td>SANKALPA SADHAN PAL</td>\n<td>APO</td>\n<td>9647953570</td>\n</tr>\n<tr>\n<td>23</td>\n<td>&nbsp;</td>\n<td>RABINDRA NATH SAREN</td>\n<td>APO</td>\n<td>8172017133</td>\n</tr>\n<tr>\n<td>24</td>\n<td>&nbsp;</td>\n<td>RAKHI MONDAL</td>\n<td>TA</td>\n<td>9378479302</td>\n</tr>\n<tr>\n<td>25</td>\n<td>&nbsp;</td>\n<td>HINDOL CHAKRABORTY</td>\n<td>TA</td>\n<td>9153562069</td>\n</tr>\n<tr>\n<td>26</td>\n<td>&nbsp;</td>\n<td>&nbsp;</td>\n<td>&nbsp;</td>\n<td>&nbsp;</td>\n</tr>\n<tr>\n<td>27</td>\n<td>&nbsp;</td>\n<td>SANDIP GHOSH</td>\n<td>PA</td>\n<td>9735159149</td>\n</tr>\n<tr>\n<td>28</td>\n<td>&nbsp;</td>\n<td>HOIMI PRASAD JANA</td>\n<td>BSAC</td>\n<td>9804069238</td>\n</tr>\n<tr>\n<td>29</td>\n<td>&nbsp;</td>\n<td>SUBHANON MONDAL</td>\n<td>JPO</td>\n<td>9635079762</td>\n</tr>\n<tr>\n<td>30</td>\n<td style="font-weight: bold;">RELIEF SECTION</td>\n<td>PRASENJIT CHATTER JEE</td>\n<td>BDMO</td>\n<td>9474110814</td>\n</tr>\n<tr>\n<td>31</td>\n<td>&nbsp;</td>\n<td>RAMNARAYAN MONDAL</td>\n<td>UDA</td>\n<td>9434833971</td>\n</tr>\n<tr>\n<td>32</td>\n<td>&nbsp;</td>\n<td>MALA GHOSH</td>\n<td>LDA</td>\n<td>9474176652</td>\n</tr>\n<tr>\n<td>33</td>\n<td>&nbsp;</td>\n<td>SUSHANTA MONDAL</td>\n<td>GR.D</td>\n<td>8900250599</td>\n</tr>\n<tr>\n<td>34</td>\n<td style="font-weight: bold;">MID DAY MEAL SECTION</td>\n<td>ASIT DUTTA</td>\n<td>SUPERVISOR,MDM</td>\n<td>&nbsp;</td>\n</tr>\n<tr>\n<td>35</td>\n<td>&nbsp;</td>\n<td>MANIK CH MONDAL</td>\n<td>A/C MDM</td>\n<td>9475636070</td>\n</tr>\n<tr>\n<td>36</td>\n<td>INDUSTRY SECTION</td>\n<td>SOUMITRA DUTTA</td>\n<td>IDO</td>\n<td>9433854907</td>\n</tr>\n<tr>\n<td>37</td>\n<td style="font-weight: bold;">SOCIAL WELFARE SECTION</td>\n<td>RAKESH MONDAL</td>\n<td>BWO</td>\n<td>9038573387</td>\n</tr>\n<tr>\n<td>38</td>\n<td style="font-weight: bold;">LITERACY &amp; BC SECTION</td>\n<td>BHAGYAREKHA DEY</td>\n<td>SUPERVISOR</td>\n<td>9153557769</td>\n</tr>\n<tr>\n<td>39</td>\n<td>&nbsp;</td>\n<td>BANI MUKHERJEE</td>\n<td>INS.BCW</td>\n<td>9434673178</td>\n</tr>\n<tr>\n<td>40</td>\n<td style="font-weight: bold;">SHG &amp; SSM</td>\n<td>AMITA DAS</td>\n<td>WDO</td>\n<td>9475854992</td>\n</tr>\n<tr>\n<td>41</td>\n<td>&nbsp;</td>\n<td>GOURAB GANGULY</td>\n<td>SUPERVISOR,SHG &amp; SE</td>\n<td>9153132514</td>\n</tr>\n<tr>\n<td>42</td>\n<td>&nbsp;</td>\n<td>DHRUBA CHATTAPADHYAY</td>\n<td>FJE</td>\n<td>9475055184</td>\n</tr>\n<tr>\n<td>43</td>\n<td style="font-weight: bold;">CUTTING &amp; TAILORING</td>\n<td>SHYAMA PRASAD ROY</td>\n<td>INST.C&amp;T</td>\n<td>9832289032 9046949542</td>\n</tr>\n<tr>\n<td>44</td>\n<td>&nbsp;</td>\n<td>BHARATI MIRTA</td>\n<td>INST.C&amp;T</td>\n<td>9800024783</td>\n</tr>\n<tr>\n<td>45</td>\n<td>&nbsp;</td>\n<td>BHUVAN CH. GHOSH</td>\n<td>GR.D</td>\n<td>7797626676</td>\n</tr>\n<tr>\n<td>46</td>\n<td style="font-weight: bold;">PANCHAYAT SAMITI STAFF</td>\n<td>AMIT SAMUI</td>\n<td>BIO(PS)</td>\n<td>9832818753</td>\n</tr>\n<tr>\n<td>47</td>\n<td>&nbsp;</td>\n<td>BHUPANANDA MANDI</td>\n<td>DY.SECRETARY (PS)</td>\n<td>9475271149</td>\n</tr>\n<tr>\n<td>48</td>\n<td>&nbsp;</td>\n<td>BHARAT CHOWDHURY</td>\n<td>UDA</td>\n<td>7407543212</td>\n</tr>\n<tr>\n<td>49</td>\n<td>&nbsp;</td>\n<td>AMITA MUKHERJEE</td>\n<td>DEO(PS)</td>\n<td>9477157548</td>\n</tr>\n<tr>\n<td>50</td>\n<td>&nbsp;</td>\n<td>TARAK NATH CHATTERJEE</td>\n<td>GR.D</td>\n<td>9932578475</td>\n</tr>\n<tr>\n<td>51</td>\n<td style="font-weight: bold;">RLI &amp; DTC</td>\n<td>ANUPAM GHOSH</td>\n<td>OCM</td>\n<td>9474021027</td>\n</tr>\n<tr>\n<td>52</td>\n<td>&nbsp;</td>\n<td>ABDUR RAB MONDAL</td>\n<td>ASST. OPERATOR</td>\n<td>NIL</td>\n</tr>\n<tr>\n<td>53</td>\n<td>&nbsp;</td>\n<td>SANTANU CHAKRABORTY</td>\n<td>OPERATOR</td>\n<td>9007437511</td>\n</tr>\n<tr>\n<td>54</td>\n<td>&nbsp;</td>\n<td>INDRAJIT CHOUDHURY</td>\n<td>ASST. OPERATOR</td>\n<td>9932883820</td>\n</tr>\n</tbody>\n</table>', 0, 1, 0, 0, 0, 0, 0),
(2, 'holidaylist', 'Holiday List', '<h1>Holidays in India in 2014</h1>\n<table class="wa border2 lpad ho-tab" style="width: 100%;">\n<thead>\n<tr class="head"><th rowspan="2">Weekday</th><th class="sep" rowspan="2">Date</th><th class="sep" rowspan="2">Holiday name</th><th class="sep" rowspan="2">Holiday type</th></tr>\n</thead>\n<tbody>\n<tr id="tr0" class="c0">\n<td>Wednesday</td>\n<td class="nw">Jan 1</td>\n<td><a href="#">New Years Day</a></td>\n<td>Restricted Holiday</td>\n</tr>\n<tr id="tr1" class="c1">\n<td>Tuesday</td>\n<td class="nw">Jan 7</td>\n<td><a href="#">Guru Govind Singh Jayanti</a></td>\n<td>Restricted Holiday</td>\n</tr>\n<tr id="tr2" class="c0">\n<td>Tuesday</td>\n<td class="nw">Jan 14</td>\n<td><a href="#">Pongal</a></td>\n<td>Restricted Holiday</td>\n</tr>\n<tr id="tr3" class="c1">\n<td>Tuesday</td>\n<td class="nw">Jan 14</td>\n<td><a href="#">Makar Sankranti</a></td>\n<td>Restricted Holiday</td>\n</tr>\n<tr id="tr4" class="c0">\n<td>Tuesday</td>\n<td class="nw">Jan 14</td>\n<td><a href="#">Milad un-Nabi/Id-e-Milad</a></td>\n<td>Gazetted Holiday</td>\n</tr>\n<tr id="tr5" class="c1">\n<td>Sunday</td>\n<td class="nw">Jan 26</td>\n<td><a href="#">Republic Day</a></td>\n<td>Gazetted Holiday</td>\n</tr>\n<tr id="tr6" class="c0">\n<td>Friday</td>\n<td class="nw">Jan 31</td>\n<td><a href="#">Chinese New Year</a></td>\n<td>Observance</td>\n</tr>\n<tr id="tr7" class="c1">\n<td>Tuesday</td>\n<td class="nw">Feb 4</td>\n<td><a href="#">Vasant Panchami</a></td>\n<td>Restricted Holiday</td>\n</tr>\n<tr id="tr8" class="c0">\n<td>Friday</td>\n<td class="nw">Feb 14</td>\n<td><a href="#">Guru Ravidas Jayanti</a></td>\n<td>Restricted Holiday</td>\n</tr>\n<tr id="tr9" class="c1">\n<td>Friday</td>\n<td class="nw">Feb 14</td>\n<td><a href="#">Valentines Day</a></td>\n<td>Observance</td>\n</tr>\n<tr id="tr10" class="c0">\n<td>Wednesday</td>\n<td class="nw">Feb 19</td>\n<td><a href="#">Shivaji Jayanti</a></td>\n<td>Restricted Holiday</td>\n</tr>\n<tr id="tr11" class="c1">\n<td>Monday</td>\n<td class="nw">Feb 24</td>\n<td><a href="#">Maharishi Dayanand Saraswati Jayanti</a></td>\n<td>Restricted Holiday</td>\n</tr>\n<tr id="tr12" class="c0">\n<td>Thursday</td>\n<td class="nw">Feb 27</td>\n<td><a href="#">Maha Shivaratri/Shivaratri</a></td>\n<td>Gazetted Holiday</td>\n</tr>\n<tr id="tr13" class="c1">\n<td>Sunday</td>\n<td class="nw">Mar 16</td>\n<td><a href="#">Dolyatra</a></td>\n<td>Gazetted Holiday</td>\n</tr>\n<tr id="tr14" class="c0">\n<td>Sunday</td>\n<td class="nw">Mar 16</td>\n<td><a href="#">Holika Dahana</a></td>\n<td>Restricted Holiday</td>\n</tr>\n<tr id="tr15" class="c1">\n<td>Monday</td>\n<td class="nw">Mar 17</td>\n<td><a href="#">Dolyatra</a></td>\n<td>Restricted Holiday</td>\n</tr>\n<tr id="tr16" class="c0">\n<td>Monday</td>\n<td class="nw">Mar 31</td>\n<td><a href="#">Chaitra Sukhladi</a></td>\n<td>Restricted Holiday</td>\n</tr>\n<tr id="tr17" class="c1">\n<td>Tuesday</td>\n<td class="nw">Apr 8</td>\n<td><a href="#">Rama Navami</a></td>\n<td>Gazetted Holiday</td>\n</tr>\n<tr id="tr18" class="c0">\n<td>Sunday</td>\n<td class="nw">Apr 13</td>\n<td><a href="#">Mahavir Jayanti</a></td>\n<td>Gazetted Holiday</td>\n</tr>\n<tr id="tr19" class="c1">\n<td>Monday</td>\n<td class="nw">Apr 14</td>\n<td><a href="#">Vaisakhi</a></td>\n<td>Restricted Holiday</td>\n</tr>\n<tr id="tr20" class="c0">\n<td>Monday</td>\n<td class="nw">Apr 14</td>\n<td><a href="#">Ambedkar Jayanti</a></td>\n<td>Observance</td>\n</tr>\n<tr id="tr21" class="c1">\n<td>Tuesday</td>\n<td class="nw">Apr 15</td>\n<td><a href="#">First day of Passover</a></td>\n<td>Observance</td>\n</tr>\n<tr id="tr22" class="c0">\n<td>Tuesday</td>\n<td class="nw">Apr 15</td>\n<td><a href="#">Mesadi/Vaisakhadi</a></td>\n<td>Restricted Holiday</td>\n</tr>\n<tr id="tr23" class="c1">\n<td>Thursday</td>\n<td class="nw">Apr 17</td>\n<td><a href="#">Maundy Thursday</a></td>\n<td>Observance, Christian</td>\n</tr>\n<tr id="tr24" class="c0">\n<td>Friday</td>\n<td class="nw">Apr 18</td>\n<td><a href="#">Good Friday</a></td>\n<td>Gazetted Holiday</td>\n</tr>\n<tr id="tr25" class="c1">\n<td>Sunday</td>\n<td class="nw">Apr 20</td>\n<td><a href="#">Easter Day</a></td>\n<td>Restricted Holiday</td>\n</tr>\n<tr id="tr26" class="c0">\n<td>Thursday</td>\n<td class="nw">May 1</td>\n<td><a href="#">May Day</a></td>\n<td>Observance</td>\n</tr>\n<tr id="tr27" class="c1">\n<td>Friday</td>\n<td class="nw">May 9</td>\n<td><a href="#">Birthday of Ravindranath</a></td>\n<td>Restricted Holiday</td>\n</tr>\n<tr id="tr28" class="c0">\n<td>Sunday</td>\n<td class="nw">May 11</td>\n<td><a href="#">Mothers Day</a></td>\n<td>Observance</td>\n</tr>\n<tr id="tr29" class="c1">\n<td>Tuesday</td>\n<td class="nw">May 13</td>\n<td><a href="#">Hazarat Alis Birthday</a></td>\n<td>Restricted Holiday</td>\n</tr>\n<tr id="tr30" class="c0">\n<td>Wednesday</td>\n<td class="nw">May 14</td>\n<td><a href="#">Buddha Purnima/Vesak</a></td>\n<td>Gazetted Holiday</td>\n</tr>\n<tr id="tr31" class="c1">\n<td>Sunday</td>\n<td class="nw">Jun 15</td>\n<td><a href="#">Fathers Day</a></td>\n<td>Observance</td>\n</tr>\n<tr id="tr32" class="c0">\n<td>Sunday</td>\n<td class="nw">Jun 29</td>\n<td><a href="#">Rath Yatra</a></td>\n<td>Restricted Holiday</td>\n</tr>\n<tr id="tr33" class="c1">\n<td>Friday</td>\n<td class="nw">Jul 25</td>\n<td><a href="#">Jamat Ul-Vida</a></td>\n<td>Restricted Holiday</td>\n</tr>\n<tr id="tr34" class="c0">\n<td>Wednesday</td>\n<td class="nw">Jul 30</td>\n<td><a href="#">Ramzan Id/Eid-ul-Fitar</a></td>\n<td>Muslim, Common Local holidays</td>\n</tr>\n<tr id="tr35" class="c1">\n<td>Sunday</td>\n<td class="nw">Aug 3</td>\n<td><a href="#">Friendship Day</a></td>\n<td>Observance</td>\n</tr>\n<tr id="tr36" class="c0">\n<td>Sunday</td>\n<td class="nw">Aug 10</td>\n<td><a href="#">Raksha Bandhan</a></td>\n<td>Restricted Holiday</td>\n</tr>\n<tr id="tr37" class="c1">\n<td>Friday</td>\n<td class="nw">Aug 15</td>\n<td><a href="#">Independence Day</a></td>\n<td>Gazetted Holiday</td>\n</tr>\n<tr id="tr38" class="c0">\n<td>Friday</td>\n<td class="nw">Aug 15</td>\n<td><a href="#">Thanksgiving Day</a></td>\n<td>Observance</td>\n</tr>\n<tr id="tr39" class="c1">\n<td>Sunday</td>\n<td class="nw">Aug 17</td>\n<td><a href="#">Janmashtami</a></td>\n<td>Gazetted Holiday</td>\n</tr>\n<tr id="tr40" class="c0">\n<td>Monday</td>\n<td class="nw">Aug 18</td>\n<td><a href="#">Parsi New Year</a></td>\n<td>Restricted Holiday</td>\n</tr>\n<tr id="tr41" class="c1">\n<td>Friday</td>\n<td class="nw">Aug 29</td>\n<td><a href="#">Ganesh Chaturthi</a></td>\n<td>Restricted Holiday</td>\n</tr>\n<tr id="tr42" class="c0">\n<td>Sunday</td>\n<td class="nw">Sep 7</td>\n<td><a href="#">Onam</a></td>\n<td>Restricted Holiday</td>\n</tr>\n<tr id="tr43" class="c1">\n<td>Wednesday</td>\n<td class="nw">Oct 1</td>\n<td><a href="#">Maha Saptami</a></td>\n<td>Restricted Holiday</td>\n</tr>\n<tr id="tr44" class="c0">\n<td>Thursday</td>\n<td class="nw">Oct 2</td>\n<td><a href="#">Mahatma Gandhi Jayanti</a></td>\n<td>Gazetted Holiday</td>\n</tr>\n<tr id="tr45" class="c1">\n<td>Thursday</td>\n<td class="nw">Oct 2</td>\n<td><a href="#">Maha Ashtami</a></td>\n<td>Restricted Holiday</td>\n</tr>\n<tr id="tr46" class="c0">\n<td>Friday</td>\n<td class="nw">Oct 3</td>\n<td><a href="#">Dussehra (Maha Navami)</a></td>\n<td>Gazetted Holiday</td>\n</tr>\n<tr id="tr47" class="c1">\n<td>Sunday</td>\n<td class="nw">Oct 5</td>\n<td><a href="#">Bakri Id/Eid ul-Adha</a></td>\n<td>Gazetted Holiday</td>\n</tr>\n<tr id="tr48" class="c0">\n<td>Monday</td>\n<td class="nw">Oct 6</td>\n<td><a href="#">Bakri Id/Eid ul-Adha</a></td>\n<td>Gazetted Holiday</td>\n</tr>\n<tr id="tr49" class="c1">\n<td>Saturday</td>\n<td class="nw">Oct 11</td>\n<td><a href="#">Karaka Chaturthi</a></td>\n<td>Restricted Holiday</td>\n</tr>\n<tr id="tr50" class="c0">\n<td>Wednesday</td>\n<td class="nw">Oct 22</td>\n<td><a href="#">Naraka Chaturdasi</a></td>\n<td>Restricted Holiday</td>\n</tr>\n<tr id="tr51" class="c1">\n<td>Thursday</td>\n<td class="nw">Oct 23</td>\n<td><a href="#">Diwali/Deepavali</a></td>\n<td>Gazetted Holiday</td>\n</tr>\n<tr id="tr52" class="c0">\n<td>Friday</td>\n<td class="nw">Oct 24</td>\n<td><a href="#">Govardhan Puja</a></td>\n<td>Restricted Holiday</td>\n</tr>\n<tr id="tr53" class="c1">\n<td>Saturday</td>\n<td class="nw">Oct 25</td>\n<td><a href="#">Bhai Duj</a></td>\n<td>Restricted Holiday</td>\n</tr>\n<tr id="tr54" class="c0">\n<td>Wednesday</td>\n<td class="nw">Oct 29</td>\n<td><a href="#">Chhat Puja (Pratihar Sashthi/Surya Sashthi)</a></td>\n<td>Restricted Holiday</td>\n</tr>\n<tr id="tr55" class="c1">\n<td>Friday</td>\n<td class="nw">Oct 31</td>\n<td><a href="#">Halloween</a></td>\n<td>Observance</td>\n</tr>\n<tr id="tr56" class="c0">\n<td>Tuesday</td>\n<td class="nw">Nov 4</td>\n<td><a href="#">Muharram/Ashura</a></td>\n<td>Gazetted Holiday</td>\n</tr>\n<tr id="tr57" class="c1">\n<td>Thursday</td>\n<td class="nw">Nov 6</td>\n<td><a href="#">Guru Nanak Jayanti</a></td>\n<td>Gazetted Holiday</td>\n</tr>\n<tr id="tr58" class="c0">\n<td>Monday</td>\n<td class="nw">Nov 24</td>\n<td><a href="#">Guru Tegh Bahadurs Martyrdom Day</a></td>\n<td>Restricted Holiday</td>\n</tr>\n<tr id="tr59" class="c1">\n<td>Wednesday</td>\n<td class="nw">Dec 17</td>\n<td><a href="#">First Day of Hanukkah</a></td>\n<td>Observance</td>\n</tr>\n<tr id="tr60" class="c0">\n<td>Wednesday</td>\n<td class="nw">Dec 24</td>\n<td><a href="#">Last day of Hanukkah</a></td>\n<td>Observance</td>\n</tr>\n<tr id="tr61" class="c1">\n<td>Wednesday</td>\n<td class="nw">Dec 24</td>\n<td><a href="#">Christmas Eve</a></td>\n<td>Restricted Holiday</td>\n</tr>\n<tr id="tr62" class="c0">\n<td>Thursday</td>\n<td class="nw">Dec 25</td>\n<td><a href="#">Christmas</a></td>\n<td>Gazetted Holiday</td>\n</tr>\n<tr id="tr63" class="c1">\n<td>Wednesday</td>\n<td class="nw">Dec 31</td>\n<td><a href="#">New Years Eve</a></td>\n<td>Observance, Christian</td>\n</tr>\n</tbody>\n</table>', 0, 0, 0, 1, 1, 1, 0),
(3, 'home', 'Welcome to Block Development Office Bardhaman II', '<h3>MESSAGE FROM BDO</h3>\n<p>Welcome to official portal of Block Development Office, Barsul, Saktigarh, Bardhaman - II. In this website you will find detailed information about our block, which has plethora of natural beauty with endless waves of lush green fields all around. Despite being an agro-economy based rural area of West Bengal, this block does have adequate civic amenities like Electricity, Phone, and Internet, Health Center, Schools, Collges, and Transportation via Railways and Roadways. Saktigarh, famous for its traditional confectionary, namely, LANGCHA, is likely to sustain and improve over its developmental activitites in near future. Please visit this website to check for more updates.</p>\n<p>Thanks and Regards Kamalika Majumdar</p>', 1, 1, 1, 1, 1, 1, 1),
(4, 'workinprogress', 'Work In Progress', '<h2>hi there,</h2>\n<h2>thanks for your interest.</h2>\n<h2>Wer are presently working on this page content</h2>\n<p>&nbsp;sdaad</p>', 0, 1, 1, 1, 1, 1, 1),
(5, 'abcd', 'abcd', '<h2>BDO TEST.</h2>\n<p>&nbsp;</p>\n<p><a href="http://bardhaman.nic.in">NIC Link&nbsp;</a></p>\n<table style="height: 135px;" width="572">\n<tbody>\n<tr>\n<td>dsfs</td>\n<td>dfsfsd</td>\n<td>fdsfs</td>\n<td>dsfsfd</td>\n<td>dfsf</td>\n</tr>\n<tr>\n<td>&nbsp;</td>\n<td>&nbsp;</td>\n<td>&nbsp;</td>\n<td>&nbsp;</td>\n<td>&nbsp;</td>\n</tr>\n<tr>\n<td>&nbsp;</td>\n<td>&nbsp;</td>\n<td>&nbsp;</td>\n<td>&nbsp;</td>\n<td>&nbsp;</td>\n</tr>\n<tr>\n<td>&nbsp;</td>\n<td>&nbsp;</td>\n<td>&nbsp;</td>\n<td>&nbsp;</td>\n<td>&nbsp;</td>\n</tr>\n</tbody>\n</table>', 0, 0, 0, 0, 0, 0, 0),
(6, 'thisis', 'This is Page Title 1', '<h1>This is a test page content,</h1>', 0, 0, 0, 0, 0, 0, 0),
(7, 'gallery', 'gallery', '<p>xfsd</p>', 0, 0, 0, 0, 0, 0, 0),
(8, 'contactus', 'contactus', '<h2>Contact Us</h2>\r\n<div class="contact">\r\n<h3>Address</h3>\r\n<p>Government of West Bengal</p>\r\n<p>Office Of The Block Development Officer</p>\r\n<p>Burdwan - II, Development Block</p>\r\n<p>Barsul (U). Burdwan - 713124</p>\r\n<p>E-mail Id : <a href="#">info@bdobardhaman2.in</a></p>\r\n</div>\r\n<form method="post">\r\n<table border="0" width="100%">\r\n<tbody>\r\n<tr>\r\n<td>Name :</td>\r\n<td><input name="name" type="text" /></td>\r\n</tr>\r\n<tr>\r\n<td>Address :</td>\r\n<td><input name="address" type="text" /></td>\r\n</tr>\r\n<tr>\r\n<td>E-mail :</td>\r\n<td><input name="email" type="text" /></td>\r\n</tr>\r\n<tr>\r\n<td>Phone No :</td>\r\n<td><input name="phone" type="text" /></td>\r\n</tr>\r\n<tr>\r\n<td>Subject</td>\r\n<td><textarea cols="" name="subject" rows=""></textarea></td>\r\n</tr>\r\n<tr>\r\n<td>&nbsp;</td>\r\n<td><input name="submit" type="submit" value="Submit" /></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</form>\r\n<p><iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.8063412437673!2d87.45047300000002!3d23.467448999999952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f77be54ab15797%3A0xc7f2c45220abbbf2!2sBlock+Development+Officer''s+Office+(B.D.O)!5e0!3m2!1sen!2sin!4v1396358291886" width="100%" height="250" frameborder="0"></iframe></p>', 0, 0, 0, 0, 0, 0, 0),
(9, 'department2', 'department2', '<img width="556" height="2687" alt="school" src="assets/images/school.png">', 0, 0, 0, 0, 0, 0, 0),
(10, 'caste-certificate', 'Caste Certificate', '<h3>Caste Certificate</h3>\n<p>Various certificates are issued from the office of B.D.O. / S.D.O. The applicant must apply with all the necessary documents, e.g., photo identity proof, residential proof etc. to the concerned officer.</p>\n<p>&nbsp;</p>\n<p>Caste certificate is issued by Backward Class Welfare Department to Scheduled Castes / Tribes and Other Backward Classes as determined by the Government from time to time.</p>\n<p>&nbsp;</p>\n<p><a href="http://www.anagrasarkalyan.gov.in/htm/forms.html" target="_blank">http://www.anagrasarkalyan.gov.in/htm/forms.html</a></p>\n<p><br /> <img src="assets/images/certificate.png" alt="certificate" /></p>', 0, 0, 0, 1, 1, 1, 0),
(11, 'form-available', 'Form Available', '<p><span style="color: #993300; font-size: 15px;"><strong>Form available -&gt; Monday&nbsp; and wednesday at working hours</strong></span></p>', 0, 0, 0, 0, 0, 0, 0),
(12, 'marriage-hall', 'Marrige Hall', '<p><strong>Sonar Tari Saktigarh Market Complex.</strong></p>\n<p><strong>Rate :- Rs. 6000/- per day</strong></p>\n<p><strong>Electricity Security : Rs.1000/- per day</strong></p>\n<p><strong>Contact Person :- +91-9046949542 </strong></p>\n<p><strong>Time : ( Mon - Wed , 12PM - 3PM )</strong></p>', 0, 0, 0, 0, 0, 0, 0),
(13, 'domicile-certificate', 'Domicile Certificate', '<h3><strong>Domicile Certificate</strong></h3>', 0, 0, 0, 0, 0, 0, 0),
(14, 'unemployment-certificate', 'Unemployment Certificate', '<h2 style="text-align: justify;">Jubashree</h2>\n<p style="text-align: justify;">West Bengal Chief Minister Mamata Banerjee during the launch of "Jubashree", an empowerment program for the youth of the state which will offer one lakh unemployed youths with a stipend of Rs 1500 per month in Kolkata on Oct.3, 2013.<br /><br />West Bengal chief minister Mamata Banerjee is going to start a number of schemes which includes the Kanyashree which is aimed to provide some relief to the poor girl students.<br /><br />Kanyashree project which will be the flagship project of Mamata Banerjees government will be launched on Tuesday. The Bengal CM will be handing over cheques to about 10,000 beneficiaries.<br /><br />The aim of the kanyashree project will be to provide support to the girl students and for that they will be given an annual scholarship of Rs 500, if they are studying in between Class VIII and XII. Moreover, the family income should not be over Rs 10,000 per month to get the scholarship.<br /><br />Again there will be one time grant of Rs 25,000 to the girls who will be 18 plus but have not crossed 19 and again the income criteria of the parents stands same. An official said that the aim is to reduce foeticide and encourage girls to study, so that their early marriage can be checked. It might be noted that Bengal is among the top five states recording early girl child marriage.</p>\n<p style="text-align: justify;"><a href="http://www.employmentbankwb.gov.in/">Apply Online to register Click here</a></p>\n<p style="text-align: justify; font-size: 15px;"><br /><br /></p>', 0, 0, 0, 0, 0, 0, 0),
(15, 'income-certificate', 'Income Certificate', '<h2>Income Certificate</h2>\n<p><strong>Documents are&nbsp;<span data-dobid="hdw">necessary</span> for Certificate from Prodhan&nbsp; or Income Certificate :-</strong></p>\n<p><strong>1) Voter Card Xerox,</strong></p>\n<p><strong>2) Ration Card Xerox, </strong></p>\n<p><strong>3) Tax receipt</strong></p>\n<p><strong>4) An application </strong></p>\n<p>&nbsp;</p>', 0, 0, 0, 0, 0, 0, 0),
(16, 'residential-certificate', 'Residential Certificate', '<h2><strong>Residential Certificate</strong></h2>\n<p><strong>These are the following documents to make residential certificate.</strong></p>\n<p><strong>1) Application of candidate in white paper.</strong></p>\n<p><strong>2) Voter card of candidate&nbsp; / Fathers voter card (Compulsory )</strong></p>\n<p><strong>3) Ration card.</strong></p>\n<p><strong>4) Birth Certificate / Admit Card / School&nbsp; Certificates with date of birth.</strong></p>\n<p><strong>5) 3 (three )&nbsp; copies of photograph.</strong></p>\n<p><strong>6) Tax receipt.</strong></p>\n<p><strong>7) Prodhans certificate.</strong></p>', 0, 0, 0, 0, 0, 0, 0),
(17, 'disaster-management-department', 'Disaster Management Department', '<h2 style="text-align: center;"><strong>DISASTER MANAGEMENT DEPARTMENT</strong></h2>\n<table width="689" cellspacing="0" cellpadding="4"><colgroup><col width="18" /> <col width="59" /> <col width="268" /> <col width="161" /> <col width="141" /> </colgroup>\n<tbody>\n<tr valign="TOP">\n<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0.1cm 0cm 0.1cm 0.1cm;" width="18">\n<p style="text-align: center;"><strong>Sl. No</strong>.</p>\n</td>\n<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0.1cm 0cm 0.1cm 0.1cm;" width="59">\n<p>&nbsp;</p>\n</td>\n<td style="border-width: 1px medium 1px 1px; border-style: solid none solid solid; border-color: #000000 -moz-use-text-color #000000 #000000; padding: 0.1cm 0cm 0.1cm 0.1cm; text-align: center;" width="268">\n<p><strong>Events</strong></p>\n</td>\n<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0.1cm 0cm 0.1cm 0.1cm;" width="161">\n<p><strong>Required Papers</strong></p>\n</td>\n<td style="border: 1px solid #000000; padding: 0.1cm;" width="141">\n<p><strong>Amount Of Grant</strong></p>\n</td>\n</tr>\n<tr valign="TOP">\n<td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0cm 0cm 0.1cm 0.1cm;" rowspan="2" width="18">\n<p>1</p>\n</td>\n<td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0cm 0cm 0.1cm 0.1cm;" rowspan="2" width="59">\n<p align="JUSTIFY">Ex Gratia Grant</p>\n</td>\n<td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0cm 0cm 0.1cm 0.1cm;" width="268">\n<p align="JUSTIFY">a) Death due to natural calamity (eg. Flood, lightening etc.)</p>\n</td>\n<td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0cm 0cm 0.1cm 0.1cm;" width="161">\n<p>i) Post mortem report.</p>\n<p>ii) Death Certificate.</p>\n<p>Iii) Police report.</p>\n</td>\n<td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0cm 0.1cm 0.1cm 0.1cm;" width="141">\n<p>Rs. 2 Lakhs per death.</p>\n</td>\n</tr>\n<tr valign="TOP">\n<td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0cm 0cm 0.1cm 0.1cm;" width="268">\n<p align="JUSTIFY">b) Death due to snake bite (All such Details must be informed to the BDO through concerned Prodhan within 24Hrs of the incident. )</p>\n</td>\n<td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0cm 0cm 0.1cm 0.1cm;" width="161">\n<p>i) Post mortem report.</p>\n<p>ii) Death Certificate.</p>\n<p>Iii) Police report.</p>\n<p>( Beneficiary must be an indigent person. )</p>\n</td>\n<td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0cm 0.1cm 0.1cm 0.1cm;" width="141">\n<p>Rs. 1.0 lakhs</p>\n</td>\n</tr>\n<tr valign="TOP">\n<td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0cm 0cm 0.1cm 0.1cm;" rowspan="2" width="18">\n<p>2.</p>\n</td>\n<td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0cm 0cm 0.1cm 0.1cm;" rowspan="2" width="59">\n<p>House Building Grant</p>\n</td>\n<td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0cm 0cm 0.1cm 0.1cm;" width="268">\n<p>a)House damage due to Natural Calamity.</p>\n</td>\n<td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0cm 0cm 0.1cm 0.1cm;" width="161">\n<p>i) G.D. Entry No. At PS.</p>\n<p>ii) Application in plain paper.</p>\n<p>iii) Photo of the damage house with owner.</p>\n<p>iv)Report in AB format.( To be contacted with Gp/ BDO office.</p>\n<p>v) JL No. &amp; Plot No.</p>\n<p>vi) BPL no.</p>\n</td>\n<td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0cm 0.1cm 0.1cm 0.1cm;" width="141">\n<p>Full Damage &ndash; Rs.15000/-</p>\n<p>&nbsp;</p>\n<p>Partly Damage- Rs. 3200/-</p>\n</td>\n</tr>\n<tr valign="TOP">\n<td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0cm 0cm 0.1cm 0.1cm;" width="268">\n<p>b) House Damage due to Accidental fire.</p>\n</td>\n<td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0cm 0cm 0.1cm 0.1cm;" width="161">\n<p>i) G.D. Entry No. At PS.</p>\n<p>ii) Application in plain paper.</p>\n<p>iii) Photo of the damage house with owner.</p>\n<p>iv)Report in AB format.( To be contacted with Gp/ BDO office.</p>\n<p>v) JL No. &amp; Plot No.</p>\n<p>vi) BPL no.</p>\n</td>\n<td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0cm 0.1cm 0.1cm 0.1cm;" width="141">\n<p>Full Damage &ndash; Rs.15000/-</p>\n<p>&nbsp;</p>\n<p>Partly Damage- Rs. 3200/-</p>\n</td>\n</tr>\n<tr valign="TOP">\n<td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0cm 0cm 0.1cm 0.1cm;" width="18">\n<p>3.</p>\n</td>\n<td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0cm 0cm 0.1cm 0.1cm;" width="59">\n<p>Normal GR</p>\n</td>\n<td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0cm 0cm 0.1cm 0.1cm;" width="268">\n<p>Food Grains from gram Panchyats to the existing beneficiaries (very poor person)</p>\n</td>\n<td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0cm 0cm 0.1cm 0.1cm;" width="161">\n<p>&nbsp;</p>\n</td>\n<td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0cm 0.1cm 0.1cm 0.1cm;" width="141">\n<p>@ Rs.12 kg per head/ month</p>\n</td>\n</tr>\n<tr valign="TOP">\n<td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0cm 0cm 0.1cm 0.1cm;" width="18">\n<p>4.</p>\n</td>\n<td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0cm 0cm 0.1cm 0.1cm;" width="59">\n<p>Special GR</p>\n</td>\n<td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0cm 0cm 0.1cm 0.1cm;" width="268">\n<p>Food Grains Supplied on special occasion like continuous heavy rainfall etc. From block to &amp; GP level.</p>\n</td>\n<td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0cm 0cm 0.1cm 0.1cm;" width="161">\n<p>&nbsp;</p>\n</td>\n<td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0cm 0.1cm 0.1cm 0.1cm;" width="141">\n<p>&nbsp;</p>\n</td>\n</tr>\n<tr valign="TOP">\n<td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0cm 0cm 0.1cm 0.1cm;" width="18">\n<p>5.</p>\n</td>\n<td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0cm 0cm 0.1cm 0.1cm;" width="59">\n<p>Cash GR</p>\n</td>\n<td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0cm 0cm 0.1cm 0.1cm;" width="268">\n<p>Cash given to the hunger striker people @ Rs. 120 / adult per month &amp; @ Rs. 60 per child per month from BDO office.</p>\n</td>\n<td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding: 0cm 0cm 0.1cm 0.1cm;" width="161">\n<p>&nbsp;</p>\n</td>\n<td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0cm 0.1cm 0.1cm 0.1cm;" width="141">\n<p>&nbsp;</p>\n</td>\n</tr>\n</tbody>\n</table>', 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `side_menu`
--

DROP TABLE IF EXISTS `side_menu`;
CREATE TABLE IF NOT EXISTS `side_menu` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `rank` int(11) NOT NULL,
  `name` text NOT NULL,
  `link` text NOT NULL,
  `description` text NOT NULL,
  `underline` int(11) NOT NULL,
  `widget` text NOT NULL,
  `widget_image` text NOT NULL,
  PRIMARY KEY (`id`,`parent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `side_menu`
--

INSERT INTO `side_menu` (`id`, `parent_id`, `rank`, `name`, `link`, `description`, `underline`, `widget`, `widget_image`) VALUES
(1, 0, 1, 'I Want to Apply For', 'workinprogress', '', 0, '', ''),
(2, 1, 1, 'Cerificate', 'workinprogress', '', 0, 'During this festival season when we all int end to do something new in our life, I have the honour as the head of the Block (institution) to bring forth the Baghmundi Dev. the websit. During this festival season when we all int end to do something new in our life', 'certificagte.png'),
(3, 1, 2, 'Trade Licence', 'workinprogress', '', 0, '', ''),
(4, 1, 3, 'Finanace', 'workinprogress', '', 0, 'During this festival season when we all int end to do something new in our life, I have the honour as the head of the Block (institution) to bring forth the Baghmundi Dev. the websit. During this festival season when we all int end to do something new in our life,', 'finance.png'),
(5, 2, 1, 'Caste Certificate', 'caste-certificate', '', 0, '', ''),
(6, 2, 2, 'Domicile Cerificate', 'domicile-certificate', '', 0, '', ''),
(7, 2, 3, 'Unemployment Certificate', 'unemployment-certificate', '', 0, '', ''),
(8, 2, 4, 'Income Certificate', 'income-certificate', '', 0, '', ''),
(9, 2, 5, 'Residential Certificate', 'residential-certificate', '', 0, '', ''),
(10, 4, 1, 'Financial Assistance', 'home', '', 0, '', ''),
(11, 4, 2, 'Grant [Cash / Kind ]', 'disaster-management-department', '', 0, '', ''),
(12, 1, 4, 'Delayed Registration of Birth & Death', 'holidaylist', '', 0, '', ''),
(13, 1, 5, 'RTI', 'workinprogress', '', 0, '', ''),
(14, 1, 6, 'Passport', 'holidaylist', '', 0, '', ''),
(15, 0, 2, 'I Want to file a Public Grievance Petition', 'holidaylist', '', 0, '', ''),
(16, 15, 1, 'Public Grievance', 'holidaylist', '', 0, '', ''),
(17, 0, 3, 'I want to book', 'establishment', '', 0, '', ''),
(18, 17, 1, 'Booking', 'home', '', 0, 'During this festival season when we all int end to do something new in our life, I have the honour as the head of the Block (institution) to bring forth the Baghmundi Dev. the websit. During this festival season when we all int end to do something new in our life,  ', 'gaust.png'),
(19, 18, 1, 'Marriage Hall', 'marriage-hall', '', 0, '', ''),
(20, 18, 2, 'Guest House', 'holidaylist', '', 0, '', ''),
(21, 18, 3, 'Utsav Mancha', 'establishment', '', 0, '', ''),
(22, 18, 4, 'Retail Shops ', 'holidaylist', '', 0, '', ''),
(23, 0, 4, 'I want to report', 'home', '', 0, '', ''),
(24, 23, 1, 'Report', 'holidaylist', '', 0, 'During this festival season when we all int end to do something new in our life, I have the honour as the head of the Block (institution) to bring forth the Baghmundi Dev. the websit. During this festival season when we all int end to do something new in our life,', 'report.png'),
(25, 24, 1, 'Dead / Damaged Tree', 'holidaylist', '', 0, '', ''),
(26, 24, 2, 'Land Dispute', 'holidaylist', '', 0, '', ''),
(27, 24, 3, 'Domestic Violence', 'establishment', '', 0, '', ''),
(28, 24, 4, 'Misc Public Grievance', 'holidaylist', '', 0, '', ''),
(29, 24, 5, 'Suggestions', 'holidaylist', '', 0, '', ''),
(30, 0, 5, 'I want to sign up', 'establishment', '', 0, '', ''),
(31, 30, 1, 'Sign up for Volunteers', 'establishment', '', 0, '', ''),
(32, 0, 6, 'I want to check status of', 'abcd', '', 0, '', ''),
(33, 32, 1, 'Check Status', 'home', '', 0, '', ''),
(34, 3, 1, 'Form Available', 'form-available', '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sideimage1`
--

DROP TABLE IF EXISTS `sideimage1`;
CREATE TABLE IF NOT EXISTS `sideimage1` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `link` text NOT NULL,
  `msg` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sideimage1`
--

INSERT INTO `sideimage1` (`id`, `image`, `link`, `msg`) VALUES
(1, 'left12.jpg', 'holidaylist', 'hello say somehting');

-- --------------------------------------------------------

--
-- Table structure for table `sideimage2`
--

DROP TABLE IF EXISTS `sideimage2`;
CREATE TABLE IF NOT EXISTS `sideimage2` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `link` text NOT NULL,
  `msg` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sideimage2`
--

INSERT INTO `sideimage2` (`id`, `image`, `link`, `msg`) VALUES
(1, 'kkk.php', 'establishment', '4566456');

-- --------------------------------------------------------

--
-- Table structure for table `staffdirectory`
--

DROP TABLE IF EXISTS `staffdirectory`;
CREATE TABLE IF NOT EXISTS `staffdirectory` (
  `id` int(11) NOT NULL,
  `header` varchar(50) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffdirectory`
--

INSERT INTO `staffdirectory` (`id`, `header`, `content`) VALUES
(1, 'home staff dir', '<h3>STAFF DIRECTORY</h3>\n<p>We have several Staffs foooor various projects and activities.We are providing you the better services with good staff structure.</p>\n<p>&nbsp;aeraweraweawding departments very soon.</p>'),
(2, 'new staff', '<p>some new satffs added</p>');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

DROP TABLE IF EXISTS `videos`;
CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(11) NOT NULL,
  `header` varchar(50) NOT NULL,
  `link` text NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `header`, `link`, `content`) VALUES
(1, 'home page video', '//www.youtube.com/embed/3SGRduIlCcw', '<p>We will provide you various videos with different activity and awareness program.</p>\n<p>&nbsp;</p>\n<p>We will also provide various videos about work progress and method of services.</p>\n<p>&nbsp;</p>\n<p><a class="more" href="#">Watch with us.</a></p>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
