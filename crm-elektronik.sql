-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2023 at 04:14 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crm-elektronik`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` bigint(20) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `harga_barang` int(20) NOT NULL,
  `jumlah_barang` int(10) NOT NULL,
  `id_distributor` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_distributor`
--

CREATE TABLE `tb_distributor` (
  `id_distributor` bigint(20) NOT NULL,
  `nama_distributor` varchar(50) NOT NULL,
  `email_distributor` varchar(50) NOT NULL,
  `kategori_distributor` enum('retailer','importir','grosir') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_trans`
--

CREATE TABLE `tb_jenis_trans` (
  `id_jenis_trans` bigint(20) NOT NULL,
  `jenis_trans` enum('tunai','non tunai','kredit') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_konsumen`
--

CREATE TABLE `tb_konsumen` (
  `id_konsumen` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_wa` varchar(15) NOT NULL,
  `id_riwayat_trans_konsumen` bigint(20) NOT NULL,
  `id_saran_kritik` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `id_pegawai` bigint(20) NOT NULL,
  `nama_pegawai` varchar(20) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat_pegawai` varchar(255) NOT NULL,
  `id_users` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `id_pelanggan` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_wa` varchar(15) NOT NULL,
  `id_riwayat_trans_pelanggan` bigint(20) NOT NULL,
  `id_saran_kritik` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_penukaran_poin`
--

CREATE TABLE `tb_penukaran_poin` (
  `id_penukaran_poin` bigint(20) NOT NULL,
  `status_penukaran` enum('berhasil','gagal','menunggu') NOT NULL,
  `id_poin` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_poin`
--

CREATE TABLE `tb_poin` (
  `id_poin` bigint(20) NOT NULL,
  `dateline` datetime NOT NULL,
  `nominal` int(10) NOT NULL,
  `id_pelanggan` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_riwayat_trans_konsumen`
--

CREATE TABLE `tb_riwayat_trans_konsumen` (
  `id_riwayat_trans_konsumen` bigint(20) NOT NULL,
  `id_trans` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_riwayat_trans_pelanggan`
--

CREATE TABLE `tb_riwayat_trans_pelanggan` (
  `id_riwayat_trans_pelanggan` bigint(20) NOT NULL,
  `id_trans` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_saran_kritik`
--

CREATE TABLE `tb_saran_kritik` (
  `id_saran_kritik` bigint(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `saran_kritik` varchar(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_trans` bigint(20) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah_trans` int(10) NOT NULL,
  `total_trans` int(10) NOT NULL,
  `id_barang` bigint(20) NOT NULL,
  `id_pelanggan` bigint(20) NOT NULL,
  `id_konsumen` bigint(20) NOT NULL,
  `id_jenis_trans` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id_users` bigint(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_distributor` (`id_distributor`);

--
-- Indexes for table `tb_distributor`
--
ALTER TABLE `tb_distributor`
  ADD PRIMARY KEY (`id_distributor`);

--
-- Indexes for table `tb_jenis_trans`
--
ALTER TABLE `tb_jenis_trans`
  ADD PRIMARY KEY (`id_jenis_trans`);

--
-- Indexes for table `tb_konsumen`
--
ALTER TABLE `tb_konsumen`
  ADD PRIMARY KEY (`id_konsumen`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id_riwayat_trans_konsumen` (`id_riwayat_trans_konsumen`),
  ADD KEY `id_saran_kritik` (`id_saran_kritik`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `id_users` (`id_users`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id_riwayat_trans` (`id_riwayat_trans_pelanggan`),
  ADD KEY `id_riwayat_trans_pelanggan` (`id_riwayat_trans_pelanggan`),
  ADD KEY `id_saran_kritik` (`id_saran_kritik`);

--
-- Indexes for table `tb_penukaran_poin`
--
ALTER TABLE `tb_penukaran_poin`
  ADD PRIMARY KEY (`id_penukaran_poin`),
  ADD KEY `id_poin` (`id_poin`);

--
-- Indexes for table `tb_poin`
--
ALTER TABLE `tb_poin`
  ADD PRIMARY KEY (`id_poin`),
  ADD KEY `id_pelanggan` (`id_pelanggan`);

--
-- Indexes for table `tb_riwayat_trans_konsumen`
--
ALTER TABLE `tb_riwayat_trans_konsumen`
  ADD PRIMARY KEY (`id_riwayat_trans_konsumen`),
  ADD KEY `id_trans` (`id_trans`);

--
-- Indexes for table `tb_riwayat_trans_pelanggan`
--
ALTER TABLE `tb_riwayat_trans_pelanggan`
  ADD PRIMARY KEY (`id_riwayat_trans_pelanggan`),
  ADD KEY `id_trans` (`id_trans`);

--
-- Indexes for table `tb_saran_kritik`
--
ALTER TABLE `tb_saran_kritik`
  ADD PRIMARY KEY (`id_saran_kritik`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_trans`),
  ADD KEY `id_barang` (`id_barang`,`id_pelanggan`,`id_konsumen`,`id_jenis_trans`),
  ADD KEY `id_jenis_trans` (`id_jenis_trans`),
  ADD KEY `id_pelanggan` (`id_pelanggan`),
  ADD KEY `id_konsumen` (`id_konsumen`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_users`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD CONSTRAINT `tb_barang_ibfk_1` FOREIGN KEY (`id_distributor`) REFERENCES `tb_distributor` (`id_distributor`);

--
-- Constraints for table `tb_konsumen`
--
ALTER TABLE `tb_konsumen`
  ADD CONSTRAINT `tb_konsumen_ibfk_1` FOREIGN KEY (`id_riwayat_trans_konsumen`) REFERENCES `tb_riwayat_trans_konsumen` (`id_riwayat_trans_konsumen`),
  ADD CONSTRAINT `tb_konsumen_ibfk_3` FOREIGN KEY (`id_saran_kritik`) REFERENCES `tb_saran_kritik` (`id_saran_kritik`);

--
-- Constraints for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD CONSTRAINT `tb_pegawai_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `tb_users` (`id_users`);

--
-- Constraints for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD CONSTRAINT `tb_pelanggan_ibfk_1` FOREIGN KEY (`id_riwayat_trans_pelanggan`) REFERENCES `tb_riwayat_trans_pelanggan` (`id_riwayat_trans_pelanggan`),
  ADD CONSTRAINT `tb_pelanggan_ibfk_3` FOREIGN KEY (`id_saran_kritik`) REFERENCES `tb_saran_kritik` (`id_saran_kritik`);

--
-- Constraints for table `tb_penukaran_poin`
--
ALTER TABLE `tb_penukaran_poin`
  ADD CONSTRAINT `tb_penukaran_poin_ibfk_1` FOREIGN KEY (`id_poin`) REFERENCES `tb_poin` (`id_poin`);

--
-- Constraints for table `tb_poin`
--
ALTER TABLE `tb_poin`
  ADD CONSTRAINT `tb_poin_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `tb_pelanggan` (`id_pelanggan`);

--
-- Constraints for table `tb_riwayat_trans_konsumen`
--
ALTER TABLE `tb_riwayat_trans_konsumen`
  ADD CONSTRAINT `tb_riwayat_trans_konsumen_ibfk_1` FOREIGN KEY (`id_trans`) REFERENCES `tb_transaksi` (`id_trans`);

--
-- Constraints for table `tb_riwayat_trans_pelanggan`
--
ALTER TABLE `tb_riwayat_trans_pelanggan`
  ADD CONSTRAINT `tb_riwayat_trans_pelanggan_ibfk_1` FOREIGN KEY (`id_trans`) REFERENCES `tb_transaksi` (`id_trans`);

--
-- Constraints for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `tb_transaksi_ibfk_1` FOREIGN KEY (`id_jenis_trans`) REFERENCES `tb_jenis_trans` (`id_jenis_trans`),
  ADD CONSTRAINT `tb_transaksi_ibfk_2` FOREIGN KEY (`id_pelanggan`) REFERENCES `tb_pelanggan` (`id_pelanggan`),
  ADD CONSTRAINT `tb_transaksi_ibfk_3` FOREIGN KEY (`id_konsumen`) REFERENCES `tb_konsumen` (`id_konsumen`),
  ADD CONSTRAINT `tb_transaksi_ibfk_4` FOREIGN KEY (`id_barang`) REFERENCES `tb_barang` (`id_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
