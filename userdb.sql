-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2023 at 06:52 PM
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
-- Database: `userdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_tb`
--

CREATE TABLE `account_tb` (
  `id` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(10) DEFAULT NULL,
  `urole` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account_tb`
--

INSERT INTO `account_tb` (`id`, `firstName`, `lastName`, `username`, `password`, `email`, `phone_number`, `urole`) VALUES
(1, 'Kuttapat', 'Somwang', 'gunktp14', 'gunktp14', 'arrliver@gmail.com', '0979603214', 'user'),
(2, 'sssss', 'sssssss', 'ssssss', 'ssssssss', 'ssssssss', 'ssssssss', 'ssssssss'),
(3, 'sssss', 'sssssss', 'ssssss', 'ssssssss', 'ssssssss', 'ssssssss', 'ssssssss'),
(4, 'sssss', 'sssssss', 'ssssss', 'ssssssss', 'ssssssss', 'ssssssss', 'ssssssss'),
(5, 'sssss', 'sssssss', 'ssssss', 'ssssssss', 'ssssssss', 'ssssssss', 'ssssssss'),
(6, 'Kuttapat', 'Somwang', 'Kuttapat14', 'Kuttapat14', 'Kuttapat14@gmail.com', NULL, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_tb`
--
ALTER TABLE `account_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_tb`
--
ALTER TABLE `account_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
