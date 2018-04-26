-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 26, 2018 at 05:32 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_codeigneter`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jenis_barang` varchar(50) NOT NULL,
  `harga_barang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_barang`, `nama_barang`, `jenis_barang`, `harga_barang`) VALUES
(1, 'Mowilex jeleik', 'Cat Dasar', '1000000'),
(3, 'Weathercoat Base A', 'Cat Luar', '321'),
(4, 'aman pisan', 'aman', '80000'),
(6, 'cendana', 'intrior', '130000'),
(7, 'ada', 'ada', '123'),
(8, 'ada', 'ada', '90193021'),
(9, 'ada', 'ada', '321'),
(10, 'baru pisan', 'jenis terbaru', '80000'),
(11, 'makanan baru', 'makan terbaru', '321231'),
(12, 'sobat baru', 'barang baru', '132131'),
(13, 'mantap baru', 'barnag mantap baru nih', '13201391023');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_biodata`
--

CREATE TABLE `tbl_biodata` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `jenis_kelamin` enum('Pria','Wanita') NOT NULL,
  `hobi` varchar(100) NOT NULL,
  `jurusan` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_biodata`
--

INSERT INTO `tbl_biodata` (`id`, `nama_lengkap`, `jenis_kelamin`, `hobi`, `jurusan`) VALUES
(13, 'Adi Rosadi', 'Pria', ' hobi1', 'TPM'),
(14, 'Dani Ramdani', 'Pria', ' hobi1, hobi2, hobi3', 'TKJ'),
(15, 'Rizal', 'Pria', ' hobi1, hobi2, hobi3, hobi4', 'TIK'),
(16, 'Mika', 'Wanita', 'data hobi tidak di isi ', 'TKJ'),
(17, 'adam', 'Pria', ' hobi 1, hobi 2', 'TPM'),
(20, 'kakak', 'Pria', ' hobi1, hobi2, hobi3, hobi4', 'TIK');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pagination`
--

CREATE TABLE `tbl_pagination` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `pekerjaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pagination`
--

INSERT INTO `tbl_pagination` (`id`, `nama`, `alamat`, `pekerjaan`) VALUES
(1, 'Andi', 'Surabaya', 'web programmer'),
(2, 'Santoso', 'Jakarta', 'Web Designer'),
(6, 'Samsul', 'Sumedang', 'Pegawai'),
(7, 'Bob', 'jakarta', 'penyanyi'),
(8, 'marley', 'afrika', 'penyanyi'),
(9, 'Bob', 'jakarta', 'penyanyi'),
(10, 'Bob', 'jakarta', 'penyanyi'),
(11, 'Bob', 'jakarta', 'penyanyi'),
(12, 'Bob', 'jakarta', 'penyanyi'),
(13, 'Bob', 'jakarta', 'penyanyi'),
(14, 'Bob', 'jakarta', 'penyanyi'),
(15, 'Bob', 'jakarta', 'penyanyi'),
(16, 'Bob', 'jakarta', 'penyanyi'),
(17, 'Bob', 'jakarta', 'penyanyi'),
(18, 'marley', 'afrika', 'penyanyi'),
(19, 'Bob', 'jakarta', 'penyanyi'),
(20, 'Bob', 'jakarta', 'penyanyi'),
(21, 'Bob', 'jakarta', 'penyanyi'),
(22, 'Bob', 'jakarta', 'penyanyi'),
(23, 'Bob', 'jakarta', 'penyanyi'),
(24, 'Bob', 'jakarta', 'penyanyi'),
(25, 'Bob', 'jakarta', 'penyanyi'),
(26, 'Bob', 'jakarta', 'penyanyi'),
(27, 'Bob', 'jakarta', 'penyanyi'),
(28, 'Bob', 'jakarta', 'penyanyi'),
(29, 'Bob', 'jakarta', 'penyanyi'),
(30, 'Bob', 'jakarta', 'penyanyi'),
(31, 'Bob', 'jakarta', 'penyanyi'),
(32, 'marley', 'afrika', 'penyanyi'),
(33, 'Bob', 'jakarta', 'penyanyi'),
(34, 'Bob', 'jakarta', 'penyanyi'),
(35, 'Bob', 'jakarta', 'penyanyi'),
(36, 'Bob', 'jakarta', 'penyanyi'),
(37, 'Bob', 'jakarta', 'penyanyi'),
(38, 'Bob', 'jakarta', 'penyanyi'),
(39, 'Bob', 'jakarta', 'penyanyi'),
(40, 'Bob', 'jakarta', 'penyanyi'),
(41, 'Bob', 'jakarta', 'penyanyi'),
(42, 'Bob', 'jakarta', 'penyanyi'),
(43, 'Bob', 'jakarta', 'penyanyi'),
(44, 'Bob', 'jakarta', 'penyanyi'),
(45, 'Bob', 'jakarta', 'penyanyi'),
(46, 'Bob', 'jakarta', 'penyanyi'),
(47, 'marley', 'afrika', 'penyanyi'),
(48, 'Bob', 'jakarta', 'penyanyi'),
(49, 'Bob', 'jakarta', 'penyanyi'),
(50, 'Bob', 'jakarta', 'penyanyi'),
(51, 'Bob', 'jakarta', 'penyanyi'),
(52, 'Bob', 'jakarta', 'penyanyi'),
(53, 'Bob', 'jakarta', 'penyanyi'),
(54, 'Bob', 'jakarta', 'penyanyi'),
(55, 'Bob', 'jakarta', 'penyanyi'),
(56, 'Bob', 'jakarta', 'penyanyi'),
(57, 'Bob', 'jakarta', 'penyanyi'),
(58, 'Bob', 'jakarta', 'penyanyi'),
(59, 'Bob', 'jakarta', 'penyanyi'),
(60, 'Bob', 'jakarta', 'penyanyi'),
(61, 'Bob', 'jakarta', 'penyanyi'),
(62, 'marley', 'afrika', 'penyanyi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `nama_lengkap` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`username`, `password`, `nama_lengkap`) VALUES
('S0000490', '81dc9bdb52d04dc20036dbd8313ed055', 'Rosadi'),
('S0000491', '21232f297a57a5a743894a0e4a801fc3', 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tbl_biodata`
--
ALTER TABLE `tbl_biodata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pagination`
--
ALTER TABLE `tbl_pagination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_biodata`
--
ALTER TABLE `tbl_biodata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_pagination`
--
ALTER TABLE `tbl_pagination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
