-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 21, 2019 at 03:12 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kode` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kode`, `nama`, `harga`, `stok`) VALUES
('CCY', 'Cireng Crispy', 7500, 100),
('ICR', 'Ice Cream', 3500, 100),
('NGB', 'Nugget Belfood', 19000, 100),
('NSO', 'Nugget Stick Okey', 18000, 100),
('OTK', 'Otak Otak', 3500, 100),
('SO1KG', 'Sosis Okay 1KG', 32000, 100),
('SO500G', 'Sosis Okey 500G', 18000, 100),
('TMP', 'Tempura', 12000, 100);

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id_invoice` int(11) NOT NULL,
  `id_kasir` int(11) NOT NULL,
  `date` varchar(30) NOT NULL,
  `uang` bigint(20) NOT NULL,
  `total` bigint(100) NOT NULL,
  `kembalian` bigint(20) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id_invoice`, `id_kasir`, `date`, `uang`, `total`, `kembalian`, `kategori`) VALUES
(1, 1, '20-07-2019 17:33:27', 100000, 95500, 4500, 'Uang Anda Lebih Rp.4.500'),
(2, 1, '20-07-2019 17:34:43', 10000, 7500, 2500, 'Uang Anda Lebih Rp.2.500'),
(3, 1, '20-07-2019 17:35:07', 15000, 15000, 0, 'Uang Anda PAS'),
(4, 1, '20-07-2019 22:32:40', 27000, 26500, 500, 'Uang Anda Lebih Rp.500'),
(5, 1, '20-07-2019 22:32:52', 10000, 10000, 0, 'Uang Anda PAS'),
(6, 1, '20-07-2019 22:33:10', 62000, 62000, 0, 'Uang Anda PAS'),
(7, 1, '21-07-2019 10:45:10', 40000, 39000, 1000, 'Uang Anda Lebih Rp.1.000'),
(8, 1, '21-07-2019 10:45:24', 30000, 28000, 2000, 'Uang Anda Lebih Rp.2.000'),
(9, 1, '21-07-2019 10:46:32', 232000, 232000, 0, 'Uang Anda PAS'),
(10, 1, '21-07-2019 10:50:51', 20000, 19000, 1000, 'Uang Anda Lebih Rp.1.000'),
(11, 1, '21-07-2019 10:51:06', 50000, 43000, 7000, 'Uang Anda Lebih Rp.7.000'),
(12, 1, '21-07-2019 10:51:31', 3500, 3500, 0, 'Uang Anda PAS'),
(13, 1, '21-07-2019 10:52:08', 70000, 62000, 8000, 'Uang Anda Lebih Rp.8.000'),
(14, 1, '21-07-2019 10:52:52', 3500, 3500, 0, 'Uang Anda PAS'),
(15, 1, '21-07-2019 10:53:15', 260000, 256000, 4000, 'Uang Anda Lebih Rp.4.000'),
(16, 1, '21-07-2019 10:53:27', 20000, 19000, 1000, 'Uang Anda Lebih Rp.1.000'),
(17, 1, '21-07-2019 10:53:34', 20000, 19000, 1000, 'Uang Anda Lebih Rp.1.000'),
(18, 1, '21-07-2019 10:53:41', 20000, 19000, 1000, 'Uang Anda Lebih Rp.1.000'),
(19, 1, '21-07-2019 10:53:58', 70000, 62000, 8000, 'Uang Anda Lebih Rp.8.000'),
(20, 1, '21-07-2019 10:54:16', 60000, 58500, 1500, 'Uang Anda Lebih Rp.1.500'),
(21, 1, '21-07-2019 10:54:25', 20000, 19000, 1000, 'Uang Anda Lebih Rp.1.000'),
(22, 1, '21-07-2019 10:54:36', 60000, 58500, 1500, 'Uang Anda Lebih Rp.1.500'),
(23, 1, '21-07-2019 10:55:47', 8000, 7500, 500, 'Uang Anda Lebih Rp.500'),
(24, 1, '21-07-2019 10:55:55', 20000, 18000, 2000, 'Uang Anda Lebih Rp.2.000'),
(25, 1, '21-07-2019 10:56:09', 27000, 26500, 500, 'Uang Anda Lebih Rp.500'),
(26, 1, '21-07-2019 10:56:20', 32000, 32000, 0, 'Uang Anda PAS'),
(27, 1, '21-07-2019 10:56:36', 23000, 22500, 500, 'Uang Anda Lebih Rp.500'),
(28, 1, '21-07-2019 10:57:02', 320000, 320000, 0, 'Uang Anda PAS'),
(29, 1, '21-07-2019 10:57:33', 700000, 690000, 10000, 'Uang Anda Lebih Rp.10.000');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `nama_barang` varchar(40) NOT NULL,
  `qty` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `id_invoice`, `kode`, `nama_barang`, `qty`, `subtotal`) VALUES
(1, 1, 'CCY', 'Cireng Crispy', 1, 7500),
(2, 1, 'ICR', 'Ice Cream', 1, 3500),
(3, 1, 'NGB', 'Nugget Belfood', 1, 19000),
(4, 1, 'OTK', 'Otak Otak', 1, 3500),
(5, 1, 'SO1KG', 'Sosis Okay 1KG', 1, 32000),
(6, 1, 'SO500G', 'Sosis Okey 500G', 1, 18000),
(7, 1, 'TMP', 'Tempura', 1, 12000),
(8, 2, 'CCY', 'Cireng Crispy', 1, 7500),
(9, 3, 'CCY', 'Cireng Crispy', 2, 15000),
(10, 4, 'CCY', 'Cireng Crispy', 1, 7500),
(11, 4, 'NGB', 'Nugget Belfood', 1, 19000),
(12, 5, 'ICR', 'Ice Cream', 3, 10000),
(13, 6, 'SO1KG', 'Sosis Okay 1KG', 1, 32000),
(14, 6, 'TMP', 'Tempura', 1, 12000),
(15, 6, 'SO500G', 'Sosis Okey 500G', 1, 18000),
(16, 7, 'ICR', 'Ice Cream', 1, 3500),
(17, 7, 'SO1KG', 'Sosis Okay 1KG', 1, 32000),
(18, 7, 'OTK', 'Otak Otak', 1, 3500),
(19, 8, 'SO500G', 'Sosis Okey 500G', 1, 18000),
(20, 8, 'ICR', 'Ice Cream', 3, 10000),
(21, 9, 'SO1KG', 'Sosis Okay 1KG', 5, 160000),
(22, 9, 'SO500G', 'Sosis Okey 500G', 4, 72000),
(23, 10, 'NGB', 'Nugget Belfood', 1, 19000),
(24, 11, 'SO1KG', 'Sosis Okay 1KG', 1, 32000),
(25, 11, 'CCY', 'Cireng Crispy', 1, 7500),
(26, 11, 'ICR', 'Ice Cream', 1, 3500),
(27, 12, 'ICR', 'Ice Cream', 1, 3500),
(28, 13, 'SO1KG', 'Sosis Okay 1KG', 1, 32000),
(29, 13, 'CCY', 'Cireng Crispy', 4, 30000),
(30, 14, 'ICR', 'Ice Cream', 1, 3500),
(31, 15, 'SO1KG', 'Sosis Okay 1KG', 8, 256000),
(32, 16, 'NGB', 'Nugget Belfood', 1, 19000),
(33, 17, 'NGB', 'Nugget Belfood', 1, 19000),
(34, 18, 'NGB', 'Nugget Belfood', 1, 19000),
(35, 19, 'SO1KG', 'Sosis Okay 1KG', 1, 32000),
(36, 19, 'ICR', 'Ice Cream', 1, 3500),
(37, 19, 'NGB', 'Nugget Belfood', 1, 19000),
(38, 19, 'CCY', 'Cireng Crispy', 1, 7500),
(39, 20, 'SO1KG', 'Sosis Okay 1KG', 1, 32000),
(40, 20, 'CCY', 'Cireng Crispy', 1, 7500),
(41, 20, 'NGB', 'Nugget Belfood', 1, 19000),
(42, 21, 'NGB', 'Nugget Belfood', 1, 19000),
(43, 22, 'CCY', 'Cireng Crispy', 1, 7500),
(44, 22, 'NGB', 'Nugget Belfood', 1, 19000),
(45, 22, 'SO1KG', 'Sosis Okay 1KG', 1, 32000),
(46, 23, 'CCY', 'Cireng Crispy', 1, 7500),
(47, 24, 'SO500G', 'Sosis Okey 500G', 1, 18000),
(48, 25, 'CCY', 'Cireng Crispy', 1, 7500),
(49, 25, 'NGB', 'Nugget Belfood', 1, 19000),
(50, 26, 'SO1KG', 'Sosis Okay 1KG', 1, 32000),
(51, 27, 'OTK', 'Otak Otak', 1, 3500),
(52, 27, 'NGB', 'Nugget Belfood', 1, 19000),
(53, 28, 'SO1KG', 'Sosis Okay 1KG', 10, 320000),
(54, 29, 'SO1KG', 'Sosis Okay 1KG', 10, 320000),
(55, 29, 'NGB', 'Nugget Belfood', 10, 190000),
(56, 29, 'SO500G', 'Sosis Okey 500G', 10, 180000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `jabatan` enum('cashier','supplier','owner','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `nama`, `password`, `tempat`, `jabatan`) VALUES
(9, 'owner', 'owner', '$2y$10$J4vvHU5oA2xILcRkaoWB4uJ9TwxAV9XqYZISmJNvrn9UbF.7o/b5q', 'owner', 'owner'),
(10, 'KSR1', 'kasir 1', '$2y$10$KLpCNiPUj8hUXONdg3AQnuHbPNrM6jiOLXcHcKCnLIz3R9.OHA/MO', 'Mandiraja', 'cashier');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id_invoice`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id_invoice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
