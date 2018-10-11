-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2018 at 06:37 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tata`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `Fakultas` varchar(255) NOT NULL,
  `hobi` varchar(50) NOT NULL,
  `kelas` varchar(80) NOT NULL,
  `alamat` varchar(320) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pass` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`nim`, `nama`, `gender`, `Fakultas`, `hobi`, `kelas`, `alamat`, `username`, `pass`) VALUES
('6701174142', 'Sindi Srikandi', 'female', 'FIT', 'Seni', 'D3MI41-03', 'Garut', '', ''),
('6701174165', 'naon', 'male', 'FTE', 'Otomotif', 'D3MI41-01', 'Garut', 'sak', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
