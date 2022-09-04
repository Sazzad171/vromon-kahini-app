-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2022 at 05:31 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vromon-kahini`
--

-- --------------------------------------------------------

--
-- Table structure for table `story`
--

CREATE TABLE `story` (
  `storyId` int(11) NOT NULL,
  `fk_user_id` int(11) NOT NULL,
  `story_heading` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  `location` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `story`
--

INSERT INTO `story` (`storyId`, `fk_user_id`, `story_heading`, `details`, `image`, `status`, `location`, `created_at`, `updated_at`) VALUES
(1, 1, 'Test Heading', 'Test Heading and details about this story.', 'blog-tat-1.png', 'Active', 'Dhaka', '2022-08-28 09:37:29', ''),
(12, 1, 'New story updated', 'new new', 'story-image/MfMaYFz3E1BNqlAAN0XGH6d1eUe54aLV09hFp9e5.jpg', 'Active', 'Cumilla', '2022-09-04 15:17:56', '2022-09-04 15:17:56'),
(13, 1, 'New story update', 'Some details here.', 'story-image/VJEJ5AuDf1lKCHWQv3LCytyCqr9XIRTDXyB6ia7k.jpg', 'Active', 'Cumilla', '2022-09-04 04:54:21', '2022-09-04 10:54:21'),
(14, 2, 'New story', 'Detaills', 'story-image/gqAjqsnf2MrRjxMrPizrqdhMxFkMsDdOFvZy5fIH.jpg', 'Active', 'Nikunja-2, Dhaka', '2022-09-04 08:41:09', '2022-09-04 14:41:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `status`, `id`, `email_verified_at`) VALUES
('Sazzad Bin Jafor', 'test@gmail.com', '$2y$10$vwKcgX45X5jBLEZQFNHJEOyWgmhAcWlm/k2Yx4v2bKcRSuwi6tPIy', NULL, '2022-09-04 01:38:15', '2022-09-04 01:38:15', NULL, 1, NULL),
('John Doe', 'john@gmail.com', '$2y$10$epXbRmMXuuY.tU6vkD89R.NDTiB62xkQg0cao/ZyFbAJbtoCyE/L2', NULL, '2022-09-04 08:39:40', '2022-09-04 08:39:40', NULL, 2, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `story`
--
ALTER TABLE `story`
  ADD PRIMARY KEY (`storyId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `story`
--
ALTER TABLE `story`
  MODIFY `storyId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
