-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2025 at 10:33 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_feedback`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `class` varchar(30) NOT NULL,
  `rating` int(11) NOT NULL,
  `feeling` varchar(50) DEFAULT NULL,
  `sad_reason` text DEFAULT NULL,
  `join_again` varchar(20) DEFAULT NULL,
  `no_join_reason` text DEFAULT NULL,
  `enjoy_session` varchar(20) DEFAULT NULL,
  `enjoyed_parts` text DEFAULT NULL,
  `not_enjoy_reason` text DEFAULT NULL,
  `usage_frequency` varchar(50) DEFAULT NULL,
  `home_tools` text DEFAULT NULL,
  `home_usage` varchar(50) DEFAULT NULL,
  `fav_subject` varchar(50) DEFAULT NULL,
  `comfort_level` varchar(20) DEFAULT NULL,
  `comfort_reason` text DEFAULT NULL,
  `teachers_support` varchar(50) DEFAULT NULL,
  `parents_support` varchar(50) DEFAULT NULL,
  `helpfulness` varchar(50) DEFAULT NULL,
  `additional_share` varchar(20) DEFAULT NULL,
  `extra_thoughts` text DEFAULT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `gender`, `class`, `rating`, `feeling`, `sad_reason`, `join_again`, `no_join_reason`, `enjoy_session`, `enjoyed_parts`, `not_enjoy_reason`, `usage_frequency`, `home_tools`, `home_usage`, `fav_subject`, `comfort_level`, `comfort_reason`, `teachers_support`, `parents_support`, `helpfulness`, `additional_share`, `extra_thoughts`, `submitted_at`) VALUES
(12, 'Mwanaume', 'Kidato cha 3', 3, '😊 Happy', '', '👍 Yes', '', '😊 Yes', '🗣️ Interactive activities, ❓ Digital quizzes, 💻 Using devices like computers', '', '📅 Every week', '📱 Smartphone', '📅 Every week', '🔬 Science', '🙁 No', 'walimu hawafungui computer lab kwa wakati', '👎 No', '👍 Yes', '🌟 Very helpful', '💬 Yes', 'Mtandao unakatika sanaaa, plz tunaomba muangalie hili swala', '2025-08-27 08:12:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
