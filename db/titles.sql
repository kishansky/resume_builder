-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2024 at 08:15 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resume`
--

-- --------------------------------------------------------

--
-- Table structure for table `titles`
--

CREATE TABLE `titles` (
  `id` int(11) NOT NULL,
  `title` varchar(55) NOT NULL,
  `photo` varchar(64) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `titles`
--

INSERT INTO `titles` (`id`, `title`, `photo`, `description`) VALUES
(1, 'Freshers', 'default.jpg', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda veniam sequi, nihil amet ad ipsam ab corporis quasi laudantium debitis, nostrum ipsum temporibus. Maiores reiciendis eveniet laudantium! Dolor eum esse, perferendis eos provident quae ten'),
(2, 'Experience', 'default.jpg', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda veniam sequi, nihil amet ad ipsam ab corporis quasi laudantium debitis, nostrum ipsum temporibus. Maiores reiciendis eveniet laudantium! Dolor eum esse, perferendis eos provident quae ten'),
(3, 'Helpers', 'default.jpg', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda veniam sequi, nihil amet ad ipsam ab corporis quasi laudantium debitis, nostrum ipsum temporibus. Maiores reiciendis eveniet laudantium! Dolor eum esse, perferendis eos provident quae ten'),
(4, 'Beginners', 'default.jpg', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda veniam sequi, nihil amet ad ipsam ab corporis quasi laudantium debitis, nostrum ipsum temporibus. Maiores reiciendis eveniet laudantium! Dolor eum esse, perferendis eos provident quae ten');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `titles`
--
ALTER TABLE `titles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `titles`
--
ALTER TABLE `titles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
