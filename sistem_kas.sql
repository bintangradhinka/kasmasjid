-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 27, 2024 at 10:14 AM
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
-- Database: `sistem_kas`
--

-- --------------------------------------------------------

--
-- Table structure for table `kas_masjid`
--

CREATE TABLE `kas_masjid` (
  `id_km` int(11) NOT NULL,
  `tgl_km` date NOT NULL,
  `keterangan_km` varchar(200) NOT NULL,
  `masuk` decimal(15,2) DEFAULT 0.00,
  `keluar` decimal(15,2) DEFAULT 0.00,
  `jenis` enum('Masuk','Keluar') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kas_masjid`
--

INSERT INTO `kas_masjid` (`id_km`, `tgl_km`, `keterangan_km`, `masuk`, `keluar`, `jenis`, `created_at`, `updated_at`) VALUES
(5, '2025-01-10', 'Infak Jumatan ', 300000.00, 0.00, 'Masuk', '2024-12-27 03:27:01', '2024-12-27 09:06:35'),
(12, '2025-01-03', 'Infak Jumatan ', 450000.00, 0.00, 'Masuk', '2024-12-27 03:35:23', '2024-12-27 09:06:07'),
(13, '2024-12-30', 'Perbaikan AC', 0.00, 100000.00, 'Keluar', '2024-12-27 05:13:35', '2024-12-27 09:07:36'),
(15, '2024-12-27', 'Bayar Tagihan Air', 0.00, 70000.00, 'Keluar', '2024-12-27 06:15:18', '2024-12-27 09:08:39');

-- --------------------------------------------------------

--
-- Table structure for table `kas_sosial`
--

CREATE TABLE `kas_sosial` (
  `id_ks` int(11) NOT NULL,
  `tgl_ks` date NOT NULL,
  `keterangan_ks` varchar(200) NOT NULL,
  `masuk` decimal(15,2) DEFAULT 0.00,
  `keluar` decimal(15,2) DEFAULT 0.00,
  `jenis` enum('Masuk','Keluar') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kas_sosial`
--

INSERT INTO `kas_sosial` (`id_ks`, `tgl_ks`, `keterangan_ks`, `masuk`, `keluar`, `jenis`, `created_at`, `updated_at`) VALUES
(1, '2024-12-27', 'sumbangan anak', 10000000.00, 0.00, 'Masuk', '2024-12-27 06:05:33', '2024-12-27 06:05:52'),
(3, '2024-12-27', 'donasi bencanaaa', 0.00, 1000.00, 'Keluar', '2024-12-27 06:14:52', '2024-12-27 06:18:41'),
(5, '2024-12-27', 'sumbangan', 0.00, 2000.00, 'Keluar', '2024-12-27 08:42:46', '2024-12-27 08:42:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `nama_lengkap`, `password`, `created_at`) VALUES
(1, 'adminku', 'aku', 'adminku', '2024-12-27 06:43:28'),
(2, 'admin', 'admin', '$2y$10$RsgpbbOcLtbtp5eG/xy/Uujkl1LQM2AXNdbGKwZJd6cwtzRCtU/KS', '2024-12-27 05:33:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kas_masjid`
--
ALTER TABLE `kas_masjid`
  ADD PRIMARY KEY (`id_km`);

--
-- Indexes for table `kas_sosial`
--
ALTER TABLE `kas_sosial`
  ADD PRIMARY KEY (`id_ks`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kas_masjid`
--
ALTER TABLE `kas_masjid`
  MODIFY `id_km` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `kas_sosial`
--
ALTER TABLE `kas_sosial`
  MODIFY `id_ks` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
