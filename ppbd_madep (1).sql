-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2024 at 05:14 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppbd_madep`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_bayar`
--

CREATE TABLE `data_bayar` (
  `id` int(11) NOT NULL,
  `no_pendaftaran` varchar(123) NOT NULL,
  `tanggal` varchar(123) NOT NULL,
  `nama_siswa` varchar(123) NOT NULL,
  `asal_sekolah` varchar(123) NOT NULL,
  `gelombang` varchar(123) NOT NULL,
  `jumlah` bigint(123) NOT NULL,
  `bayar` bigint(123) NOT NULL,
  `kembalian` bigint(123) NOT NULL,
  `sisa` bigint(123) NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_ortu`
--

CREATE TABLE `data_ortu` (
  `id` int(111) NOT NULL,
  `nama_siswa` varchar(123) NOT NULL,
  `nama_ortu` varchar(123) NOT NULL,
  `alamat_ortu` varchar(123) NOT NULL,
  `no_telOrtu` varchar(123) NOT NULL,
  `pekerjaan_ortu` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_ortu`
--

INSERT INTO `data_ortu` (`id`, `nama_siswa`, `nama_ortu`, `alamat_ortu`, `no_telOrtu`, `pekerjaan_ortu`) VALUES
(1, 'coik', 'biim', 'ckp', '887678787', 'bool'),
(2, 'coik', 'biim', 'ckp', '887678787', 'bool');

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE `data_siswa` (
  `id` int(111) NOT NULL,
  `no_pendaftaran` varchar(123) NOT NULL,
  `nama_siswa` varchar(123) NOT NULL,
  `ttl` varchar(123) NOT NULL,
  `jenis_kel` varchar(123) NOT NULL,
  `agama` varchar(123) NOT NULL,
  `no_telSiswa` varchar(123) NOT NULL,
  `asal_sekolah` varchar(123) NOT NULL,
  `alamat_sekolah` varchar(123) NOT NULL,
  `jurusan` varchar(123) NOT NULL,
  `tanggal` varchar(111) NOT NULL,
  `ukuran` varchar(1231) NOT NULL,
  `gelombang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_siswa`
--

INSERT INTO `data_siswa` (`id`, `no_pendaftaran`, `nama_siswa`, `ttl`, `jenis_kel`, `agama`, `no_telSiswa`, `asal_sekolah`, `alamat_sekolah`, `jurusan`, `tanggal`, `ukuran`, `gelombang`) VALUES
(1, 'KBRS99', 'coik', '2024-05-24', 'L', 'Hindu', '787877', 'pelayar', 'cekini', 'MM', '2024-05-24 22:05', 'L', 0),
(2, 'KBRS19', 'coik', '2024-05-24', 'L', 'Hindu', '787877', 'pelayar', 'cekini', 'MM', '2024-05-24 22:08', 'L', 2);

-- --------------------------------------------------------

--
-- Table structure for table `data_wali`
--

CREATE TABLE `data_wali` (
  `id` int(111) NOT NULL,
  `nama_siswa` varchar(123) NOT NULL,
  `nama_wali` varchar(123) NOT NULL,
  `alamat_wali` varchar(123) NOT NULL,
  `no_telWali` varchar(123) NOT NULL,
  `pekerjaan_wali` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_wali`
--

INSERT INTO `data_wali` (`id`, `nama_siswa`, `nama_wali`, `alamat_wali`, `no_telWali`, `pekerjaan_wali`) VALUES
(1, 'coik', 'niam', 'bkp', '67576878', 'songong'),
(2, 'coik', 'niam', 'bkp', '67576878', 'songong');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gel`
--

CREATE TABLE `tbl_gel` (
  `id` int(11) NOT NULL,
  `gelombang` varchar(111) NOT NULL,
  `nominal` int(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_gel`
--

INSERT INTO `tbl_gel` (`id`, `gelombang`, `nominal`) VALUES
(5, '1', 1000000),
(6, '2', 15000000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(30) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `username` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `level` enum('admin','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(7, 'fahmijha', 'fahmi', 'fahmijha12', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_bayar`
--
ALTER TABLE `data_bayar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_ortu`
--
ALTER TABLE `data_ortu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_wali`
--
ALTER TABLE `data_wali`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_gel`
--
ALTER TABLE `tbl_gel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_bayar`
--
ALTER TABLE `data_bayar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_gel`
--
ALTER TABLE `tbl_gel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
