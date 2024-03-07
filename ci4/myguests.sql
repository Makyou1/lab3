-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2024 at 03:04 PM
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
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `myguests`
--

CREATE TABLE `myguests` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `website` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  `gender` enum('Male','Female','Other') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `myguests`
--

INSERT INTO `myguests` (`id`, `name`, `email`, `website`, `comment`, `gender`) VALUES
(1, 'John', 'john@example.com', '2024-01-30 08:38:29', '', ''),
(5, 'Makyoui', 'Makmee@gmail.com', '2024-01-30 09:20:20', '', ''),
(7, '', '', '2024-01-30 09:28:12', '', ''),
(9, 'Delavega', 'jojong@gmail.com', 'https://socitcloud.apc.edu.ph/~manerez/lab2/week8/', 'hey there', 'Other'),
(11, 'Marco', 'marc@gmail.com', 'https://hobbyfactory.com', 'bili na ng paints', 'Male'),
(15, 'Trial', 'Trial@gmail.com', 'https://hobbyfactory.com', 'let&#039;s try', 'Male'),
(17, 'Marc Angelo A Nerez', 'manerez@gmail.com', 'https://hobbyfactory.com', 'let&#039;s try again', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `myguests`
--
ALTER TABLE `myguests`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fname_unique` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `myguests`
--
ALTER TABLE `myguests`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
