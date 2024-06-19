-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2024 at 12:38 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ibsnew`
--

-- --------------------------------------------------------

--
-- Table structure for table `klinik`
--

CREATE TABLE `klinik` (
  `bil` int(11) NOT NULL,
  `nama_klinik` varchar(50) NOT NULL,
  `nama_pemilik` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `notelefon` varchar(11) NOT NULL,
  `pic` varchar(30) NOT NULL,
  `jenis_bayaran` varchar(50) NOT NULL,
  `no_acc` char(15) NOT NULL,
  `pemilik_acc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `klinik`
--

INSERT INTO `klinik` (`bil`, `nama_klinik`, `nama_pemilik`, `alamat`, `notelefon`, `pic`, `jenis_bayaran`, `no_acc`, `pemilik_acc`) VALUES
(3, 'Klinik Palani', 'Dr. Palaniappan', 'No 3, Jalan Parang Satu, Taman Sri Kahang', '077881211', '-', 'Cash', '-', '-'),
(4, 'Klinik Bakti', 'Dr. Abdul Razak bin Awang', 'No 28, Jalan Dato Hj Hassan', '077769128', 'Adilah ', 'CIMB', '8005851279', 'Klinik Bakti'),
(6, 'Klinik Dr. Anis', 'Dr. Anis Nazahiyah binti Ismail', '51&53G, Jalan Kempas Utama 1/2, Taman Kempas Utama', '075545231', '-', 'Maybank', '-', '-'),
(9, 'Klinik Taj', 'Dr. Tajudin bin Abdul Majid', 'No 28, Jalan Dato Hj Hassan', '0137791350', '-', 'Check', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `maklumat_staf`
--

CREATE TABLE `maklumat_staf` (
  `nama` varchar(50) NOT NULL,
  `no_visa` varchar(12) NOT NULL,
  `notelefon` varchar(11) NOT NULL,
  `peruntukan` double DEFAULT 200
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `maklumat_staf`
--

INSERT INTO `maklumat_staf` (`nama`, `no_visa`, `notelefon`, `peruntukan`) VALUES
('ali bin abu', '870919014770', '01988765343', 200),
('aminah', '870919014350', '01988765343', 200),
('Naser', '10088090', '0137791350', 200),
('Rudy', '10088008', '01988765342', 200);

-- --------------------------------------------------------

--
-- Table structure for table `penggunaan_staf`
--

CREATE TABLE `penggunaan_staf` (
  `bil` int(11) NOT NULL,
  `tahun` int(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_visa` int(12) NOT NULL,
  `notelefon` int(11) NOT NULL,
  `bil_klinik` int(11) NOT NULL,
  `tarikh_rawatan` date NOT NULL,
  `jum_rawatan` double NOT NULL,
  `total` double NOT NULL,
  `baki` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penggunaan_staf`
--

INSERT INTO `penggunaan_staf` (`bil`, `tahun`, `nama`, `no_visa`, `notelefon`, `bil_klinik`, `tarikh_rawatan`, `jum_rawatan`, `total`, `baki`) VALUES
(1, 2024, 'Naser', 10088090, 137791350, 4, '2024-05-26', 12, 0, 0),
(2, 2023, 'Naser', 10088090, 137791350, 3, '2023-05-25', 56, 0, 0),
(3, 2023, 'ali bin abu', 2147483647, 1988765343, 9, '2024-05-26', 25, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'clinic'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `klinik`
--
ALTER TABLE `klinik`
  ADD PRIMARY KEY (`bil`);

--
-- Indexes for table `maklumat_staf`
--
ALTER TABLE `maklumat_staf`
  ADD PRIMARY KEY (`nama`);

--
-- Indexes for table `penggunaan_staf`
--
ALTER TABLE `penggunaan_staf`
  ADD PRIMARY KEY (`bil`),
  ADD KEY `bil_klinik` (`bil_klinik`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `klinik`
--
ALTER TABLE `klinik`
  MODIFY `bil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `penggunaan_staf`
--
ALTER TABLE `penggunaan_staf`
  MODIFY `bil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `penggunaan_staf`
--
ALTER TABLE `penggunaan_staf`
  ADD CONSTRAINT `penggunaan_staf_ibfk_1` FOREIGN KEY (`bil_klinik`) REFERENCES `klinik` (`bil`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
