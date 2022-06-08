-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2021 at 07:02 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sorting_algorithms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_questions_db`
--

CREATE TABLE `all_questions_db` (
  `id` int(11) NOT NULL,
  `question` varchar(300) NOT NULL,
  `possible_answers` varchar(300) NOT NULL,
  `correct_answers` varchar(300) NOT NULL,
  `diff` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `all_questions_db`
--

INSERT INTO `all_questions_db` (`id`, `question`, `possible_answers`, `correct_answers`, `diff`) VALUES
(2, 'What is your name?', 'Mnigs,Mlks,Wow,Png', 'Mnigs', 'medium'),
(3, 'Wtf?', 'Huh,Hi,Ti thes,Wow', 'Huh', 'easy'),
(4, 'Wow!', 'Huh?,Ti thes?,Go away!, Bye...', 'Huh?', 'easy'),
(5, 'Huh?', 'A,B,C,D', 'B', 'easy'),
(6, 'Hello!', 'Hello!,Hi.,How are you?, Bye.', 'Hello!', 'easy'),
(7, 'Huh?', 'AA,BB,CC,DD', 'BB', 'easy'),
(8, 'Γιατι υπάρχουμε;', 'Γιατί πρέπει,Γιατί μας αρέσει,Γιατί περνάμε καλά,Γιατί μας το είπε ο Θεός', 'Γιατί μας αρέσει', 'hard');

-- --------------------------------------------------------

--
-- Table structure for table `question_requests`
--

CREATE TABLE `question_requests` (
  `id` int(11) NOT NULL,
  `question` varchar(300) NOT NULL,
  `possible_answers` varchar(300) NOT NULL,
  `correct_answers` varchar(300) NOT NULL,
  `diff` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `registered_users`
--

CREATE TABLE `registered_users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `surname` varchar(30) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `profile_image_path` varchar(200) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registered_users`
--

INSERT INTO `registered_users` (`id`, `name`, `surname`, `date_of_birth`, `gender`, `email`, `username`, `password`, `profile_image_path`, `role`) VALUES
(24, 'Giannis', 'Loukas', '2021-05-04', 'Bigender', 'fdsgf@sfg.dsg', 'a', '1', 'user_images/creepy.png', 'user'),
(28, '', '', '0000-00-00', 'Δεν_θέλω_να_αναφέρω', 'mod@gmail.com', 'mod', 'mod', 'user_images/Bruh.gif', 'moderator'),
(29, '', '', '0000-00-00', 'Δεν_θέλω_να_αναφέρω', 'admin@gmail.com', 'admin', 'admin', 'user_images/doctor.png', 'administrator');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `username` varchar(50) NOT NULL,
  `date_taken` varchar(100) NOT NULL,
  `difficulty` varchar(50) NOT NULL,
  `result` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`username`, `date_taken`, `difficulty`, `result`) VALUES
('a', 'Saturday 5th of June 2021 07:58:15 AM', 'easy', 2),
('a', 'Saturday 5th of June 2021 07:59:58 AM', 'easy', 1),
('a', 'Saturday 5th of June 2021 08:03:31 AM', 'easy', 0),
('a', 'Saturday 5th of June 2021 08:03:59 AM', 'easy', 0),
('admin', 'Saturday 5th of June 2021 08:37:52 AM', 'medium', 0),
('a', 'Sunday 6th of June 2021 09:23:34 AM', 'hard', 0),
('mod', 'Sunday 6th of June 2021 11:01:26 AM', 'hard', 1),
('mod', 'Sunday 6th of June 2021 11:40:12 AM', 'easy', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_questions_db`
--
ALTER TABLE `all_questions_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_requests`
--
ALTER TABLE `question_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registered_users`
--
ALTER TABLE `registered_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_questions_db`
--
ALTER TABLE `all_questions_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `question_requests`
--
ALTER TABLE `question_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `registered_users`
--
ALTER TABLE `registered_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
