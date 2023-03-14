-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2023 at 04:01 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clean_work`
--

-- --------------------------------------------------------

--
-- Table structure for table `content_manager`
--

CREATE TABLE `content_manager` (
  `name` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `page` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `content_manager`
--

INSERT INTO `content_manager` (`name`, `content`, `page`) VALUES
('cai gi do ben About Us', 'ahihi', 'About Us'),
('Customer reviews title', 'Happy Customers', 'Home'),
('email', 'info@company.com', 'Home'),
('Introduction Content', '<p><a href=\"#\">Clean Work</a> is a Bootstrap v.5.1.3 HTML CSS template for free download provided by Tooplate. You can use this layout for any purpose. Images are taken from <a rel=\"nofollow\" href=\"https://www.freepik.com/\" target=\"_blank\">FreePik</a> and <a rel=\"nofollow\" href=\"https://worldvectorlogo.com/\" target=\"_blank\">WorldVectorLogo</a> websites.</p>\r\n                            <p>You <strong>may not</strong> redistribute this template ZIP file on any other template collection website. Please <a href=\"https://www.tooplate.com/contact\" target=\"_blank\">contact us</a> for more info. Thank you.</p>', 'Home'),
('Introduction Title', 'Reliable &amp; Fast Cleaning <br> Service', 'Home'),
('location', 'Akershusstranda 20, 0150 Oslo, Norway', 'Home'),
('phone number', '110 220 9800', 'Home'),
('services title', 'Our best offers', 'Home'),
('slogan', 'One-Stop Cleaning Service', 'Home'),
('Trusted company title', 'Trusted by companies', 'Home'),
('Working days 1', 'Mon - Fri', 'Home'),
('Working days 2', 'Sat', 'Home'),
('Working time 1', '8:00 AM - 5:30 PM', 'Home'),
('Working time 2', '6:00 AM - 2:30 PM', 'Home');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` char(64) NOT NULL,
  `phone` char(10) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `categoryID` tinyint(4) NOT NULL,
  `rank_id` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `password`, `phone`, `time`, `categoryID`, `rank_id`) VALUES
(1, 'MeoAhihi', 'viphongly2804@gmail.com', '', '0835607205', '2023-02-10 07:04:33', 0, 1),
(2, 'Leo Hoc', 'luatluukhoa@gmail.com', '', '0778978372', '2023-01-10 07:04:33', 0, 1),
(3, 'Lưu Khoa Học', 'luatluukhoaa@gmail.com', '', '0897148972', '2023-02-10 07:04:33', 0, 1),
(5, 'Hoc luu khoa', 'hocluukhoa@gmail.com', '', '0888300779', '2023-02-10 07:04:33', 0, 1),
(6, 'Zinah Beauty & Brow Bar', 'Zinahbeautyvip@zinah9999.pass', '', '0123333333', '2023-02-10 07:04:33', 0, 1),
(7, 'VP chấm Sữa', 'dfgwuey@ndfgn.fgdsf', '', '0123258963', '2023-02-10 07:04:33', 0, 1),
(8, 'Doraemon', 'doraemon@gmail.com', '', '0126964359', '2023-03-13 02:21:55', 2, 1),
(9, 'DaraMini1', 'Mini1@doraemon.com', '', '0962357942', '2023-03-13 02:23:58', 1, 1),
(10, 'DoraMini2', 'MiniMini@doraemon.com', '', '0963567195', '2023-03-13 02:23:58', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `id` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `customer_id` int(11) NOT NULL,
  `service_type_id` int(11) NOT NULL,
  `address` text NOT NULL,
  `comment` text DEFAULT NULL,
  `state` tinyint(4) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`id`, `time`, `customer_id`, `service_type_id`, `address`, `comment`, `state`) VALUES
(18, '2023-02-17 06:03:17', 6, 1, 'asdfasfsdf', NULL, 4),
(19, '2023-02-17 06:06:08', 5, 3, '123 binh chanh', NULL, 2),
(20, '2023-02-17 06:06:31', 2, 2, '456 hhhhh', NULL, 3),
(21, '2023-02-17 06:06:51', 1, 1, 'hcm', NULL, 5),
(22, '2023-02-17 06:07:13', 6, 4, '616566 uybibh', NULL, 6);

-- --------------------------------------------------------

--
-- Table structure for table `customer_rank`
--

CREATE TABLE `customer_rank` (
  `id` tinyint(4) NOT NULL,
  `name` varchar(20) NOT NULL,
  `least completed order` int(11) NOT NULL,
  `least money spent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_rank`
--

INSERT INTO `customer_rank` (`id`, `name`, `least completed order`, `least money spent`) VALUES
(1, 'Bronze', 0, 0),
(2, 'Silver', 9, 3000),
(3, 'Gold', 19, 20000),
(4, 'Diamon', 29, 50000);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` char(10) NOT NULL,
  `is_free` tinyint(1) NOT NULL DEFAULT 1,
  `rank_id` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `phone`, `is_free`, `rank_id`) VALUES
(1, 'Leo Liu', '0778978372', 1, 4),
(2, 'Wind Li', '0835607205', 1, 3),
(3, 'Nhien Li', '0123456789', 1, 2),
(4, 'Jessy Fan', '0987654321', 1, 1),
(5, 'Yoshioka Junko', '0516251112', 1, 1),
(6, 'Berthold Leitz', '0953633124', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee_rank`
--

CREATE TABLE `employee_rank` (
  `id` tinyint(4) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_rank`
--

INSERT INTO `employee_rank` (`id`, `name`) VALUES
(1, 'Cleaner'),
(2, 'Supervisor'),
(3, 'Manager'),
(4, 'Director');

-- --------------------------------------------------------

--
-- Table structure for table `history_result`
--

CREATE TABLE `history_result` (
  `id` tinyint(1) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `history_result`
--

INSERT INTO `history_result` (`id`, `name`) VALUES
(-5, 'dis. while in progress'),
(-4, 'dis. while on the way'),
(-3, 'disproved when verified'),
(-2, 'disproved while verifying'),
(-1, 'disproved'),
(0, 'not paid'),
(1, 'finished');

-- --------------------------------------------------------

--
-- Table structure for table `order_history`
--

CREATE TABLE `order_history` (
  `id` int(11) NOT NULL,
  `start` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `end` timestamp NOT NULL DEFAULT current_timestamp(),
  `customer_id` int(11) NOT NULL,
  `service_type_id` int(11) NOT NULL,
  `address` text NOT NULL,
  `comment` text NOT NULL,
  `employee_list` varchar(20) NOT NULL,
  `result` tinyint(1) NOT NULL DEFAULT -1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_history`
--

INSERT INTO `order_history` (`id`, `start`, `end`, `customer_id`, `service_type_id`, `address`, `comment`, `employee_list`, `result`) VALUES
(1, '2023-01-11 05:29:07', '2023-02-03 15:15:05', 1, 3, '112 Tùng Thiện Vương, P11, Q8, TPHCM', '', '1,2,3,4,5,6', -1),
(2, '2023-02-03 15:14:12', '2023-02-03 15:22:03', 2, 4, 'Bình Chánh', '', '1,2,3,4,5,6', -1),
(3, '2023-01-30 22:33:49', '2023-02-03 15:29:18', 1, 1, '113 Tùng Thiện Vương', '', '1,2,3', -1),
(4, '2023-02-03 15:54:03', '2023-02-03 16:06:54', 1, 2, 'asd', '', '', -1),
(5, '2023-01-29 21:24:26', '2023-02-03 15:29:25', 2, 2, 'JJCV+J3W, Mỹ Lộc, Cần Giuộc, Long An, Việt Nam', '', '1,2,3', -1),
(6, '2023-01-13 05:40:40', '2023-02-03 14:05:40', 2, 2, '113 Tùng Thiện Vương', '', '1,2,3', -1),
(7, '2023-01-29 21:24:26', '2023-02-03 16:33:03', 2, 2, 'JJCV+J3W, Mỹ Lộc, Cần Giuộc, Long An, Việt Nam', '', '1,2,3', -1),
(8, '2023-01-30 22:33:49', '2023-02-03 16:33:46', 1, 1, '113 Tùng Thiện Vương', '', '', -1),
(9, '2023-01-30 22:33:49', '2023-02-03 16:35:41', 2, 2, '113 Tùng Thiện Vương', '', '1,2,3', -1),
(10, '2023-02-03 15:22:34', '2023-02-03 15:25:41', 1, 2, 'haha', '', '1,2,3,4,5,6', -1),
(12, '2023-02-03 15:36:00', '2023-02-03 15:36:15', 2, 1, 'asd', '', '1,2,3', -1),
(14, '2022-12-06 04:52:39', '2023-01-06 04:49:20', 6, 1, '1261/1/15a Lê Đức Thọ, P13, Q.Gò Vấp, TPHCM', 'ahihihihihhi', '1,2,3', 1),
(15, '2023-02-06 04:54:30', '2023-02-06 04:54:09', 1, 3, '112 Tùng Thiện Vương, P11, Q8', 'xe chị lắm, chị tắm cho sâu, kẻo về mẹ mắng', '1,2,3', 1),
(16, '2023-02-06 04:32:33', '2023-02-06 04:53:27', 7, 2, '112 Tùng Thiện Vương, P11, Q8', 'Đổ cái nồi cháo heo', '4,5,6', -1),
(17, '2023-02-06 04:35:19', '2023-02-09 07:46:13', 2, 2, '123 Ai Bit Dou, Bình Chánh, TPHCM', 'Đổ nước nóng, dọn giùm plz', '1,2,3', -1);

-- --------------------------------------------------------

--
-- Table structure for table `order_state`
--

CREATE TABLE `order_state` (
  `id` tinyint(4) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_state`
--

INSERT INTO `order_state` (`id`, `name`) VALUES
(1, 'begin'),
(2, 'verifying'),
(3, 'verified'),
(4, 'on_the_way'),
(5, 'in_progress'),
(6, 'finished'),
(7, 'ended');

-- --------------------------------------------------------

--
-- Stand-in structure for view `pages`
-- (See below for the actual view)
--
CREATE TABLE `pages` (
`page` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `person_category`
--

CREATE TABLE `person_category` (
  `id` tinyint(4) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `person_category`
--

INSERT INTO `person_category` (`id`, `type`) VALUES
(0, 'customer'),
(1, 'admin'),
(2, 'superadmin');

-- --------------------------------------------------------

--
-- Table structure for table `service type`
--

CREATE TABLE `service type` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` smallint(6) NOT NULL,
  `duration` tinyint(4) NOT NULL,
  `rating` float NOT NULL DEFAULT 5,
  `subtitle` text NOT NULL DEFAULT 'Best Cleaning Service Provider Ipsum dolor sit consectetur kengan',
  `description` text NOT NULL DEFAULT 'Please tell your friends about Tooplate\'s free HTML templates. Thank you for choosing our templates for your work.  Affordable Service Clean Work is free Bootstrap v.5.1.3 HTML CSS template provided by Tooplate. You can use this layout for a commercial purpose.  Expert Team You are not allowed to redistribute this clean work HTML template\'s downloadable ZIP file on any other template website. Please contact us for more info. Thank you.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service type`
--

INSERT INTO `service type` (`id`, `name`, `price`, `duration`, `rating`, `subtitle`, `description`) VALUES
(1, 'Office Cleaning', 820, 5, 3, 'Best Cleaning Service Provider Ipsum dolor sit consectetur kengan', 'Please tell your friends about Tooplate\'s free HTML templates. Thank you for choosing our templates for your work.\r\n\r\nAffordable Service\r\nClean Work is free Bootstrap v.5.1.3 HTML CSS template provided by Tooplate. You can use this layout for a commercial purpose.\r\n\r\nExpert Team\r\nYou are not allowed to redistribute this clean work HTML template\'s downloadable ZIP file on any other template website. Please contact us for more info. Thank you.'),
(2, 'Kitchen Cleaning', 640, 4, 5, 'Best Cleaning Service Provider Ipsum dolor sit consectetur kengan', 'Please tell your friends about Tooplate\'s free HTML templates. Thank you for choosing our templates for your work.  Affordable Service Clean Work is free Bootstrap v.5.1.3 HTML CSS template provided by Tooplate. You can use this layout for a commercial purpose.  Expert Team You are not allowed to redistribute this clean work HTML template\'s downloadable ZIP file on any other template website. Please contact us for more info. Thank you.'),
(3, 'Car Washing', 240, 2, 5, 'Best Cleaning Service Provider Ipsum dolor sit consectetur kengan', 'Please tell your friends about Tooplate\'s free HTML templates. Thank you for choosing our templates for your work.  Affordable Service Clean Work is free Bootstrap v.5.1.3 HTML CSS template provided by Tooplate. You can use this layout for a commercial purpose.  Expert Team You are not allowed to redistribute this clean work HTML template\'s downloadable ZIP file on any other template website. Please contact us for more info. Thank you.'),
(4, 'Factory Cleaning', 6800, 30, 5, 'Best Cleaning Service Provider Ipsum dolor sit consectetur kengan', 'Please tell your friends about Tooplate\'s free HTML templates. Thank you for choosing our templates for your work.  Affordable Service Clean Work is free Bootstrap v.5.1.3 HTML CSS template provided by Tooplate. You can use this layout for a commercial purpose.  Expert Team You are not allowed to redistribute this clean work HTML template\'s downloadable ZIP file on any other template website. Please contact us for more info. Thank you.');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `order_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure for view `pages`
--
DROP TABLE IF EXISTS `pages`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pages`  AS SELECT `content_manager`.`page` AS `page` FROM `content_manager` GROUP BY `content_manager`.`page``page`  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `content_manager`
--
ALTER TABLE `content_manager`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rank_id` (`rank_id`),
  ADD KEY `categoryID` (`categoryID`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_type_id` (`service_type_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `state` (`state`);

--
-- Indexes for table `customer_rank`
--
ALTER TABLE `customer_rank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rank_id` (`rank_id`);

--
-- Indexes for table `employee_rank`
--
ALTER TABLE `employee_rank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history_result`
--
ALTER TABLE `history_result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_history`
--
ALTER TABLE `order_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `result` (`result`);

--
-- Indexes for table `order_state`
--
ALTER TABLE `order_state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `person_category`
--
ALTER TABLE `person_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service type`
--
ALTER TABLE `service type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`order_id`,`employee_id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `customer_rank`
--
ALTER TABLE `customer_rank`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employee_rank`
--
ALTER TABLE `employee_rank`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `service type`
--
ALTER TABLE `service type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`rank_id`) REFERENCES `customer_rank` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `customer_ibfk_2` FOREIGN KEY (`categoryID`) REFERENCES `person_category` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD CONSTRAINT `customer_order_ibfk_1` FOREIGN KEY (`service_type_id`) REFERENCES `service type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `customer_order_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `customer_order_ibfk_3` FOREIGN KEY (`state`) REFERENCES `order_state` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`rank_id`) REFERENCES `employee_rank` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `order_history`
--
ALTER TABLE `order_history`
  ADD CONSTRAINT `order_history_ibfk_1` FOREIGN KEY (`result`) REFERENCES `history_result` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `team`
--
ALTER TABLE `team`
  ADD CONSTRAINT `team_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`),
  ADD CONSTRAINT `team_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `customer_order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
