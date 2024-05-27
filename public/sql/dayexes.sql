-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2024 at 11:41 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sports`
--

-- --------------------------------------------------------

--
-- Table structure for table `dayexes`
--

CREATE TABLE IF NOT EXISTS `dayexes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dayexes`
--

INSERT INTO `dayexes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'day 1', '2024-05-16 09:27:37', '2024-05-16 09:27:37'),
(2, 'day 2', '2024-05-17 07:29:11', '2024-05-17 07:29:11'),
(3, 'day 3', '2024-05-17 07:29:41', '2024-05-17 07:29:41'),
(4, 'day 4', '2024-05-17 07:29:49', '2024-05-17 07:29:49'),
(5, 'day 5', '2024-05-17 07:29:55', '2024-05-17 07:29:55'),
(6, 'day 6', '2024-05-17 07:30:01', '2024-05-17 07:30:01'),
(7, 'day 7', '2024-05-17 07:30:07', '2024-05-17 07:30:07'),
(8, 'day 8', '2024-05-17 07:30:14', '2024-05-17 07:30:14'),
(9, 'day 9', '2024-05-17 07:30:21', '2024-05-17 07:30:21'),
(10, 'day 10', '2024-05-17 07:30:29', '2024-05-17 07:30:29'),
(11, 'day 11', '2024-05-17 07:30:36', '2024-05-17 07:30:36'),
(12, 'day 12', '2024-05-17 07:30:41', '2024-05-17 07:30:41'),
(13, 'day 13', '2024-05-17 07:30:47', '2024-05-17 07:30:47'),
(14, 'day 14', '2024-05-17 07:30:53', '2024-05-17 07:30:53'),
(15, 'day 15', '2024-05-17 07:30:58', '2024-05-17 07:30:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dayexes`
--
-- ALTER TABLE `dayexes`
--   ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dayexes`
--
ALTER TABLE `dayexes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
