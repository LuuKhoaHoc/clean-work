-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2023 at 04:25 AM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `service type`
--
ALTER TABLE `service type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `service type`
--
ALTER TABLE `service type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
