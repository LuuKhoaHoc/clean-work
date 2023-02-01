-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2023 at 11:04 PM
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
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `phone`) VALUES
(1, 'MeoAhihi', 'viphongly2804@gmail.com', '0835607205'),
(2, 'Leo Hoc', 'luatluukhoa@gmail.com', '0778978372');

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
  `state` int(11) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`id`, `time`, `customer_id`, `service_type_id`, `address`, `comment`, `state`) VALUES
(2, '2023-01-30 04:24:26', 2, 2, 'JJCV+J3W, Mỹ Lộc, Cần Giuộc, Long An, Việt Nam', NULL, 2),
(3, '2023-01-31 05:33:49', 1, 1, '113 Tùng Thiện Vương', NULL, 2),
(4, '2023-01-31 05:33:49', 2, 2, '113 Tùng Thiện Vương', NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` char(10) NOT NULL,
  `is_free` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `phone`, `is_free`) VALUES
(1, 'Leo Liu', '0778978372', 1),
(2, 'Wind Li', '0835607205', 1),
(3, 'Nhien Li', '0123456789', 1),
(4, 'Jessy Fan', '0987654321', 1),
(5, 'Yoshioka Junko', '0516251112', 1),
(6, 'Berthold Leitz', '0953633124', 1);

-- --------------------------------------------------------

--
-- Table structure for table `history_result`
--

CREATE TABLE `history_result` (
  `id` tinyint(1) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `history_result`
--

INSERT INTO `history_result` (`id`, `name`) VALUES
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
(1, '2023-01-31 21:50:50', '2023-01-31 21:49:35', 1, 3, '112 Tùng Thiện Vương, P11, Q8, TPHCM', 'ahihi vui gke', '1,2,3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_state`
--

CREATE TABLE `order_state` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_state`
--

INSERT INTO `order_state` (`id`, `name`) VALUES
(1, 'waiting'),
(2, 'verifying'),
(3, 'verified'),
(4, 'on going'),
(5, 'in progress'),
(6, 'completed'),
(7, 'finished');

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_type_id` (`service_type_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `state` (`state`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `service type`
--
ALTER TABLE `service type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD CONSTRAINT `customer_order_ibfk_1` FOREIGN KEY (`service_type_id`) REFERENCES `service type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `customer_order_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `customer_order_ibfk_3` FOREIGN KEY (`state`) REFERENCES `order_state` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
