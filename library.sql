-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 11, 2022 at 04:57 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `FILES`
--

CREATE TABLE `FILES` (
  `id` int(11) NOT NULL,
  `author` varchar(20) NOT NULL,
  `judul` text NOT NULL,
  `file_type_id` varchar(20) NOT NULL,
  `isi` text NOT NULL,
  `created_at` text DEFAULT NULL,
  `update_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `FILES`
--

INSERT INTO `FILES` (`id`, `author`, `judul`, `file_type_id`, `isi`, `created_at`, `update_at`) VALUES
(36, 'andika', 'PHP', 'Video', '', '11:35 AM 10/02/2022 060232', NULL),
(37, '', 'PHP', 'Video', '', '11:36 AM 10/02/2022 060233', NULL),
(38, 'andika', 'PHP', 'Video', '', '01:06 PM 10/02/2022 060295', NULL),
(39, 'andika', 'PHP', 'Video', '', '01:06 PM 10/02/2022 060296', NULL),
(40, 'andika', 'PHP', 'Video', '', '01:06 PM 10/02/2022 060296', NULL),
(41, 'andika', 'PHP', 'Video', '', '01:07 PM 10/02/2022 060296', NULL),
(42, 'andika', 'PHP', 'Video', '', '08:30 PM 10/02/2022 060604', NULL),
(43, 'andika', 'PHP', 'Video', '', '08:30 PM 10/02/2022 060604', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `File_Type`
--

CREATE TABLE `File_Type` (
  `id` int(11) NOT NULL,
  `jenis` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `created_at` date DEFAULT NULL,
  `update_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `FILES`
--
ALTER TABLE `FILES`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `File_Type`
--
ALTER TABLE `File_Type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `FILES`
--
ALTER TABLE `FILES`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `File_Type`
--
ALTER TABLE `File_Type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
