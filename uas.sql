-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 17, 2023 at 12:47 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `nama` varchar(40) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(40) COLLATE utf8mb4_general_ci NOT NULL,
  `subject` varchar(40) COLLATE utf8mb4_general_ci NOT NULL,
  `pesan` text COLLATE utf8mb4_general_ci NOT NULL,
  `submit` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`nama`, `email`, `subject`, `pesan`, `submit`) VALUES
('wewe', 'aharis262@gmail.com', 'eqwe', 'qweqwe', ''),
('hilmi', 'hilmi@gmail.com', 'pembelian', 'beli batagor bang', ''),
('aaaaaaaaaaaaa', 'aaaaaaaaaa@gmail.com', 'aaaaaaaaaaaaaaaaa', 'zaaaaaaaaaa', '');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int NOT NULL,
  `btn_history1` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `btn_history2` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `btn_history3` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int NOT NULL,
  `textboxIndex` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `checkIn` date NOT NULL,
  `checkOut` date NOT NULL,
  `city` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `packages` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `guest` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `tombolHome` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `guest` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `price` int NOT NULL,
  `firstname` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `phonenumber` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `checkin`, `checkout`, `guest`, `price`, `firstname`, `lastname`, `email`, `phonenumber`) VALUES
(3, '2023-12-02', '2023-12-03', '2', 300000, 'Abdul', 'Haris', 'abdul.haris@student.upj.ac.id', '087886816671');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nama` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nama`, `username`, `email`, `password`) VALUES
('ewew', 'abdul2', 'ewewew@gmail.com', ''),
('abdul', 'abdul2', 'aharis262@gmail.com', '$2y$10$vsahwnuSraSba4LMUNhZieRF1cbLh4DmB3w0KjwsBbWRxi9A1osbS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
