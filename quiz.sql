-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2022 at 10:54 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer_tbl`
--

CREATE TABLE `answer_tbl` (
  `id` int(11) NOT NULL,
  `answer_1` varchar(255) NOT NULL,
  `answer_2` varchar(255) NOT NULL,
  `answer_3` varchar(255) NOT NULL,
  `answer_4` varchar(255) NOT NULL,
  `correct_ans` varchar(255) NOT NULL,
  `question_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `category_tbl`
--

CREATE TABLE `category_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category_tbl`
--

INSERT INTO `category_tbl` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Web Design', '2022-10-23 14:36:42', '2022-10-23 15:44:13', NULL),
(2, 'Web Development', '2022-10-23 00:00:00', '2022-10-24 14:58:32', NULL),
(3, 'Android Development', '2022-10-13 13:37:11', '2022-10-23 15:43:38', NULL),
(4, 'Game Development', '2022-10-23 15:08:54', NULL, NULL),
(5, 'Software Development', '2022-10-24 15:03:57', NULL, NULL),
(6, 'Graphic Design', '2022-10-29 13:37:26', '2022-10-29 13:37:31', NULL),
(7, 'Cloud Computing', '2022-10-29 13:38:26', NULL, NULL),
(8, 'test', '2022-10-29 13:39:27', NULL, '2022-10-29 13:40:23'),
(9, 'Fundamental Enginnering (FE)', '2022-10-29 13:42:47', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `question_tbl`
--

CREATE TABLE `question_tbl` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `question_tbl`
--

INSERT INTO `question_tbl` (`id`, `question`, `category_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'For logical variables A and B, which of the following is equivalent to the NOR operation on\r\nA and B? Here, ܣ + ܤ ,ܣ・ܤ ,and ܣ ̅are OR, AND, and NOT operations on the\r\ncorresponding variables, respectively.', 9, '2022-10-29 09:21:43', NULL, NULL),
(2, 'For logical variables A and B, which of the following is equivalent to the NOR operation on\r\nA and B? Here, ܣ + ܤ ,ܣ・ܤ ,and ܣ ̅are OR, AND, and NOT operations on the\r\ncorresponding variables, respectively.', 9, '2022-10-29 09:23:21', NULL, NULL),
(3, 'For logical variables A and B, which of the following is equivalent to the NOR operation on\r\nA and B? Here, ܣ + ܤ ,ܣ・ܤ ,and ܣ ̅are OR, AND, and NOT operations on the\r\ncorresponding variables, respectively.', 9, '2022-10-29 09:23:44', NULL, NULL),
(4, 'Which of the following is an appropriate explanation of normal distribution? ', 0, '2022-10-29 14:09:56', NULL, NULL),
(5, 'Which of the following is an appropriate explanation of normal distribution? ', 0, '2022-10-29 14:25:43', NULL, NULL),
(6, '1', 0, '2022-10-29 14:31:19', NULL, '2022-10-29 14:41:14'),
(7, 'Which of the following is an expression in reverse Polish notation that has the same value as the expression below when evaluated? Here, numbers are given as decimals, and the symbols − and × are subtraction and multiplication operators, respectively. ', 1, '2022-10-29 14:34:46', NULL, NULL),
(8, 'Which of the following is an appropriate explanation of feedback control?', 1, '2022-10-29 14:58:53', '2022-10-29 15:17:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `high_score` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer_tbl`
--
ALTER TABLE `answer_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_tbl`
--
ALTER TABLE `category_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_tbl`
--
ALTER TABLE `question_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer_tbl`
--
ALTER TABLE `answer_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category_tbl`
--
ALTER TABLE `category_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `question_tbl`
--
ALTER TABLE `question_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
