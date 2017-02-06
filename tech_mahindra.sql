-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2017 at 09:29 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tech_mahindra`
--

-- --------------------------------------------------------

--
-- Table structure for table `tech_table`
--

CREATE TABLE `tech_table` (
  `id` int(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tech_table`
--

INSERT INTO `tech_table` (`id`, `fullname`, `email`, `password`, `mobile`) VALUES
(1, 'a', 'a@y.com', '0cc175b9c0f1b6a831c399e269772661', 12),
(2, 'om singh', 'omsingh1156@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', 2147483647),
(3, 'ab ', 'abc@y.com', '187ef4436122d1cc2f40dc2b92f0eba0', 45),
(4, 'a', 'a', '0cc175b9c0f1b6a831c399e269772661', 1),
(5, 'ab', 'ab', '0cc175b9c0f1b6a831c399e269772661', 34),
(6, 'a', 'ab@y.com', '187ef4436122d1cc2f40dc2b92f0eba0', 34),
(7, 'om singh', 'omsingh1156@gmail.com', '202cb962ac59075b964b07152d234b70', 2147483647),
(8, 'upx', 'upx', 'c993811f4c917910dbf008283e969c09', 74),
(9, 'd', 'a@b.com', '0cc175b9c0f1b6a831c399e269772661', 432);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tech_table`
--
ALTER TABLE `tech_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tech_table`
--
ALTER TABLE `tech_table`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
