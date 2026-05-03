-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2025 at 12:38 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mindbalance_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `message_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `message` text NOT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`message_id`, `name`, `email`, `message`, `submitted_at`) VALUES
(1, 'Test User', 'test@example.com', 'This site is amazing!', '2025-04-16 15:07:51'),
(2, 'Curious Visitor', 'visitor@site.com', 'Do you offer mobile apps?', '2025-04-16 15:07:51'),
(3, 'Alice', 'alice_sm@gmail.com', 'i have nothing to add', '2025-04-16 15:32:51'),
(4, 'Alice', 'alice_sm@gmail.com', 'it\'s really helping thank you very much', '2025-04-17 08:27:21'),
(6, 'Mashael', 'mashael12@gmail.com', 'i like this website!!', '2025-04-27 07:10:09'),
(7, 'Sarah', 'Sarah@gmail.com', 'Thank you for helping me out', '2025-04-27 07:16:10'),
(8, 'Seif Elshiaty', 'Seifx011@gmail.com', 'Good website!!', '2025-04-27 07:19:57'),
(9, 'Alice', 'alice_sm@gmail.com', 'I\'m getting cyberbullied </3', '2025-04-27 07:22:22'),
(13, 'mohmmad', 'mo_11fo@hotmail.com', 'I can\'t be done with my projects , they\'re endless literally!!! ', '2025-04-27 09:21:10'),
(14, 'amina', 'aahus33@gmail.com', 'i really need help through my depression !', '2025-04-27 09:31:17'),
(15, 'Mashael', 'mashael12@gmail.com', 'I\'m suffering with ADHD and the tips helped me so muchhh<3', '2025-04-27 09:40:16');

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tip_title` varchar(255) NOT NULL,
  `tip_text` text NOT NULL,
  `category` varchar(100) DEFAULT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`id`, `user_id`, `tip_title`, `tip_text`, `category`, `icon`, `created_at`) VALUES
(3, 1, 'Social Boost', 'Connect with someone.', 'depression', 'emoji_people', '2025-04-17 12:05:40'),
(4, 1, 'Regular Sleep', 'Stick to a consistent bedtime.', 'sleep', 'bedtime', '2025-04-17 12:05:45'),
(5, 1, 'Breathing', 'Practice box breathing.', 'anxiety', 'spa', '2025-04-17 12:05:48'),
(13, 6, 'Grounding', 'Use 5-4-3-2-1 sensory technique.', 'anxiety', 'self_improvement', '2025-04-22 06:04:04'),
(15, 6, 'Sleep Setup', 'Dark, cool rooms help sleep.', 'sleep', 'nightlight_round', '2025-04-22 08:53:42'),
(17, 6, 'Breathing', 'Practice box breathing.', 'anxiety', 'spa', '2025-04-22 08:53:45'),
(20, 5, 'Focus Tools', 'Use white noise to help concentration.', 'adhd', 'headphones', '2025-04-24 08:01:56'),
(21, 5, 'Social Boost', 'Connect with someone.', 'depression', 'emoji_people', '2025-04-24 08:01:57'),
(24, 5, 'Journaling', 'Write down your anxious thoughts.', 'anxiety', 'menu_book', '2025-04-26 23:19:12');

-- --------------------------------------------------------

--
-- Table structure for table `mood_logs`
--

CREATE TABLE `mood_logs` (
  `log_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mood` varchar(50) DEFAULT NULL,
  `note` text DEFAULT NULL,
  `log_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mood_logs`
--

INSERT INTO `mood_logs` (`log_id`, `user_id`, `mood`, `note`, `log_date`) VALUES
(1, 1, 'Happy', 'Had a great walk outside.', '2025-04-01'),
(2, 1, 'Neutral', 'Just another average day.', '2025-04-02'),
(3, 1, 'Sad', 'Felt overwhelmed by schoolwork.', '2025-04-03'),
(4, 1, 'Anxious', 'Presentation stress.', '2025-04-04'),
(5, 2, 'Happy', 'Morning meditation helped.', '2025-04-01'),
(6, 2, 'Angry', 'Had a fight with my roommate.', '2025-04-02'),
(7, 2, 'Calm', 'Listened to calming music.', '2025-04-03'),
(8, 1, 'Grateful', 'Good talk with a friend.', '2025-04-05'),
(9, 2, 'Sad', 'Missed home today.', '2025-04-04'),
(10, 1, 'Energetic', 'Worked out in the gym.', '2025-04-06'),
(11, 1, 'Happy', 'I\'m almost done with my project ;)', '2025-04-17'),
(12, 5, 'Happy', 'finally, im done from the project', '2025-04-18'),
(13, 6, 'Anxious', 'tooo many tests', '2025-04-22'),
(15, 5, 'Happy', 'I just ate ice cream', '2025-04-25'),
(16, 5, 'Anxious', 'too many quizzes and projects SOS', '2025-04-27');

-- --------------------------------------------------------

--
-- Table structure for table `tips`
--

CREATE TABLE `tips` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `category` varchar(50) NOT NULL,
  `icon` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('user','admin') DEFAULT 'user',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `role`, `created_at`) VALUES
(1, 'Alice Smith', 'alice_sm@gmail.com', '$2y$10$GgTvRjAtDAl/Nslp6yNVN.hrkdBeLF9/zfz7BKrPt/3Mp1OFoIwqW', 'user', '2025-04-16 15:07:51'),
(2, 'Amira Karim', 'Am-kar12@example.com', '$2y$10$5BnRwPlWQeBhmq9G0GUBvOAfM79I1d5eC8lycrjONOk2Xk.t3zYCa', 'user', '2025-04-16 15:07:51'),
(3, 'Admin User', 'admin@mindbalance.com', '$2y$10$9zVdGFQkd1f1bSFiNj8bUu/g7lUBWeuI/80KDtauaefesEV7jp3G.', 'admin', '2025-04-16 15:07:51'),
(5, 'Mashael', 'mashael12@gmail.com', '$2y$10$r6ouwTRJdlGsMTP.gPE1WumvcZNrqNKifcU4XXV5sQKxN8x9xWy/6', 'user', '2025-04-18 09:40:51'),
(6, 'Sarah', 'sarah@gmail.com', '$2y$10$vSlrEoy1rsPjoXXwOHh5Oend7lTGkQUxM8SotJqSndNgezVsJYNiO', 'user', '2025-04-22 06:03:07'),
(7, 'Seif Elshiaty', 'Seifx011@gmail.com', '$2y$10$EL2EwSb1OUOZnsUyEhnMLuLNk6s/Q.PBBYJ.jf0tOCTzJ8KGYOLDW', 'user', '2025-04-24 07:43:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `mood_logs`
--
ALTER TABLE `mood_logs`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tips`
--
ALTER TABLE `tips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `mood_logs`
--
ALTER TABLE `mood_logs`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tips`
--
ALTER TABLE `tips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `favorites_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `mood_logs`
--
ALTER TABLE `mood_logs`
  ADD CONSTRAINT `mood_logs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
