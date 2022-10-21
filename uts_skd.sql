-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2022 at 05:26 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts_skd`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama_lengkap`, `username`, `password`) VALUES
(1, 'aubin sava', 'aubin1', 'aby1'),
(2, 'aubin sava', 'aubin1', 'aby1'),
(3, 'aubin sava', 'aubinsava', '1234'),
(4, 'pengguna1', 'user1', '1234'),
(5, 'pengguna 3', 'user3', 'MASLATJUMFZ'),
(6, 'aubin sava R', 'user4', 'JKMR'),
(7, 'user1', 's1', 'JTKKV'),
(8, 'pengguna 4', 'user4', 'HKVSVARJ'),
(9, 'pengguna 5', 'user5', 'HKVSVARJ'),
(10, 'pengguna 5', 'user5', 'HKVSVARJ'),
(11, 'pengguna 7', 'user7', 'HKVSVARJ'),
(12, 'pengguna 8', 'user8', 'HKVSVARJ'),
(13, 'Aubin Sava Rausanfiker', 'aubinsava', 'AXLPUTAJGBGAOCQAKKYA'),
(14, 'pengguna 10', 'user10', 'HKVSQPZQMCHR');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
