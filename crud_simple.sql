-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 20, 2024 at 10:14 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_simple`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `nama_cust` varchar(50) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `alamat` text NOT NULL,
  `nama_paket` varchar(30) NOT NULL,
  `fktp` text NOT NULL,
  `frumah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama_cust`, `telp`, `alamat`, `nama_paket`, `fktp`, `frumah`) VALUES
(1, 'Customer Number One', '8983348999', 'Jalan Melati No 123', 'Home 1', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `idnsales`
--

CREATE TABLE `idnsales` (
  `id_sales` int(10) NOT NULL,
  `nama_sales` varchar(30) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `tgl_daftar` date NOT NULL,
  `gender` varchar(8) NOT NULL,
  `nip` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `idnsales`
--

INSERT INTO `idnsales` (`id_sales`, `nama_sales`, `tgl_lhr`, `tgl_daftar`, `gender`, `nip`) VALUES
(1, 'Sales\'s Name', '2004-02-02', '2024-02-19', 'Pria', '04022402191001');

-- --------------------------------------------------------

--
-- Table structure for table `loginuser`
--

CREATE TABLE `loginuser` (
  `id_login` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `NIP` int(20) NOT NULL,
  `pass` varchar(8) NOT NULL,
  `level` enum('admin','sales') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loginuser`
--

INSERT INTO `loginuser` (`id_login`, `nama`, `NIP`, `pass`, `level`) VALUES
(1, 'Admin\'s', 20240217, '123456', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL,
  `nama_paket` varchar(30) NOT NULL,
  `keterangan` text NOT NULL,
  `harga_paket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `nama_paket`, `keterangan`, `harga_paket`) VALUES
(1, 'Home 1', 'ini home 1', 100000),
(3, 'Home 2', 'Ini paket home 2', 150000),
(4, 'Home 3', 'Ini paket home 3', 200000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `idnsales`
--
ALTER TABLE `idnsales`
  ADD PRIMARY KEY (`id_sales`);

--
-- Indexes for table `loginuser`
--
ALTER TABLE `loginuser`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `idnsales`
--
ALTER TABLE `idnsales`
  MODIFY `id_sales` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `loginuser`
--
ALTER TABLE `loginuser`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
