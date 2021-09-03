-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2021 at 02:46 PM
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
-- Database: `projects_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `image_one` varchar(255) NOT NULL,
  `image_sec` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `image_one`, `image_sec`, `title`, `description`, `created_at`, `updated_at`) VALUES
(3, '1630670793VGA Fav Icon (1).png', '1630670793kreshul_3.png', 'alskdas updated', '<h1>Heading one&nbsp;</h1><br>aksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnas<br><br>aksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnask<br><br>aksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskaksdnaskk<br><br><br>', '2021-09-03 12:02:42', '2021-09-03 12:02:42'),
(4, '1630670887image (3).png', '1630670887Screenshot (27).png', 'kasjd', 'asdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjk<br>asdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjk<br><br>asdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjk<br><br>asdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjkasdjk<br>', '2021-09-03 12:08:07', '2021-09-03 12:08:07'),
(5, '1630673118cover.jpg', '16306731182021-06-12-16-30-risform.com (1).png', 'Project 3', '<h2>Project 3</h2><br>loremasdasdasloremasdasdasloremasdasdasloremasdasdasloremasdasdasloremasdasdasloremasdasdasloremasdasdasloremasdasdasloremasdasdas<br><br>loremasdasdasloremasdasdasloremasdasdasloremasdasdasloremasdasdasloremasdasdasloremasdasdasloremasdasdasloremasdasdasloremasdasdasloremasdasdasloremasdasdasloremasdasdasloremasdasdasloremasdasdasloremasdasdasloremasdasdasloremasdasdasloremasdasdasloremasdasdasloremasdasdasloremasdasdasloremasdasdasloremasdasdasloremasdasdasloremasdasdasloremasdasdasloremasdasdasloremasdasdasloremasdasdas<br><br><br>loremasdasdasloremasdasdasloremasdasdasloremasdasdasloremasdasdasloremasdasdasloremasdasdasloremasdasdasloremasdasdasloremasdasdasloremasdasdasloremasdasdasloremasdasdasloremasdasdasloremasdasdasloremasdasdasloremasdasdasloremasdasdasloremasdasdasloremasdasdasloremasdasdasloremasdasdasloremasdasdasloremasdasdasloremasdasdasloremasdasdasloremasdasdasloremasdasdas<br>', '2021-09-03 12:45:18', '2021-09-03 12:45:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
