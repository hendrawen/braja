-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 27, 2018 at 07:08 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brajamarketindo`
--

-- --------------------------------------------------------

--
-- Table structure for table `wp_asis_debt`
--

CREATE TABLE `wp_asis_debt` (
  `id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `jam` time DEFAULT NULL,
  `turun_krat` int(11) DEFAULT NULL,
  `turun_btl` int(11) DEFAULT NULL,
  `naik_krat` int(11) DEFAULT NULL,
  `naik_btl` int(11) DEFAULT NULL,
  `aset_krat` int(11) DEFAULT NULL,
  `aset_btl` int(11) DEFAULT NULL,
  `bayar` int(11) DEFAULT NULL,
  `keterangan` text,
  `username` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `wp_barang`
--

CREATE TABLE `wp_barang` (
  `id` int(11) NOT NULL,
  `id_barang` varchar(45) DEFAULT NULL,
  `nama_barang` varchar(115) DEFAULT NULL,
  `harga_beli` varchar(25) DEFAULT NULL,
  `harga_jual` varchar(25) DEFAULT NULL,
  `wp_suplier_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `wp_debt_muat`
--

CREATE TABLE `wp_debt_muat` (
  `id` int(11) NOT NULL,
  `muat_krat` int(11) DEFAULT NULL,
  `muat_dust` int(11) DEFAULT NULL,
  `terkirim_krat` int(11) DEFAULT NULL,
  `terkirim_btl` int(11) DEFAULT NULL,
  `kembali_krat` int(11) DEFAULT NULL,
  `kembali_btl` int(11) DEFAULT NULL,
  `retur_krat` int(11) DEFAULT NULL,
  `keterangan` text,
  `created_at` date DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `wp_barang_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `wp_debt_turun`
--

CREATE TABLE `wp_debt_turun` (
  `id` int(11) NOT NULL,
  `wp_barang_id` int(11) NOT NULL,
  `turun_krat` int(11) DEFAULT NULL,
  `turun_btl` int(11) DEFAULT NULL,
  `naik_krat` int(11) DEFAULT NULL,
  `naik_btl` int(11) DEFAULT NULL,
  `aset_krat` int(11) DEFAULT NULL,
  `aset_btl` int(11) DEFAULT NULL,
  `keterangan` text,
  `username` varchar(45) DEFAULT NULL,
  `wp_pelanggan_id` int(11) NOT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `wp_faktur`
--

CREATE TABLE `wp_faktur` (
  `id` int(11) NOT NULL,
  `no_faktur` varchar(45) DEFAULT NULL,
  `tgl_faktur` date DEFAULT NULL,
  `jatuh_tempo` date DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `wp_transaksi_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `wp_groups`
--

CREATE TABLE `wp_groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `wp_jabatan`
--

CREATE TABLE `wp_jabatan` (
  `id` int(11) NOT NULL,
  `nama_jabatan` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `wp_jadwal`
--

CREATE TABLE `wp_jadwal` (
  `id` int(11) NOT NULL,
  `id_jadwal` varchar(45) DEFAULT NULL,
  `wp_barang_id` int(11) NOT NULL,
  `qty` int(11) DEFAULT NULL,
  `tgl_kirim` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `wp_jkebutuhan`
--

CREATE TABLE `wp_jkebutuhan` (
  `id` int(11) NOT NULL,
  `jenis` varchar(45) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `wp_kebutuhan`
--

CREATE TABLE `wp_kebutuhan` (
  `id` int(11) NOT NULL,
  `wp_pelanggan_id` int(11) NOT NULL,
  `wp_jkebutuhan_id` int(11) NOT NULL,
  `jumlah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `wp_krat_kosong`
--

CREATE TABLE `wp_krat_kosong` (
  `id` int(11) NOT NULL COMMENT '	',
  `krat` int(11) DEFAULT NULL,
  `botol` int(11) DEFAULT NULL,
  `keterangan` text,
  `username` varchar(45) DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `wp_laporan_arus`
--

CREATE TABLE `wp_laporan_arus` (
  `id` int(11) NOT NULL,
  `pendapatan` int(11) DEFAULT NULL,
  `pengeluaran` int(11) DEFAULT NULL,
  `setor_tunai` int(11) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `wp_list_effectif`
--

CREATE TABLE `wp_list_effectif` (
  `id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `tgl_kirim` date DEFAULT NULL,
  `keterangan` text,
  `wp_status_effectif_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `wp_barang_id` int(11) NOT NULL,
  `wp_pelanggan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `wp_login_attempts`
--

CREATE TABLE `wp_login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `wp_pelanggan`
--

CREATE TABLE `wp_pelanggan` (
  `id` int(11) NOT NULL,
  `id_pelanggan` varchar(45) DEFAULT NULL,
  `nama_pelanggan` varchar(125) DEFAULT NULL,
  `no_telp` int(11) DEFAULT NULL,
  `nama_dagang` enum('Toko','Pedagang','Agen') DEFAULT NULL,
  `alamat` text,
  `photo` varchar(115) DEFAULT NULL,
  `photo_toko` varchar(115) DEFAULT NULL,
  `kelurahan` varchar(115) DEFAULT NULL,
  `kecamatan` varchar(115) DEFAULT NULL,
  `kordinat` varchar(200) DEFAULT NULL,
  `keterangan` text,
  `status` enum('Responden','Pelanggan') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `wp_karyawan_id_karyawan` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `wp_profile`
--

CREATE TABLE `wp_profile` (
  `id` int(11) NOT NULL,
  `nama_perusahaan` varchar(45) DEFAULT NULL,
  `alamat` text,
  `no_telp` varchar(25) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `website` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `wp_rekapfaktur`
--

CREATE TABLE `wp_rekapfaktur` (
  `id` int(11) NOT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `bayar` int(11) DEFAULT NULL,
  `keterangan` varchar(115) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `wp_faktur_id` int(11) NOT NULL,
  `wp_pelanggan_id` int(11) NOT NULL,
  `wp_barang_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `wp_status`
--

CREATE TABLE `wp_status` (
  `id` int(11) NOT NULL,
  `status` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `wp_status_effectif`
--

CREATE TABLE `wp_status_effectif` (
  `id` int(11) NOT NULL,
  `status` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `wp_stok`
--

CREATE TABLE `wp_stok` (
  `id` int(11) NOT NULL,
  `wp_barang_id` int(11) NOT NULL,
  `stok` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `wp_suplier`
--

CREATE TABLE `wp_suplier` (
  `id` int(11) NOT NULL,
  `id_suplier` varchar(45) DEFAULT NULL,
  `nama_suplier` varchar(115) DEFAULT NULL,
  `alamat` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `wp_transaksi`
--

CREATE TABLE `wp_transaksi` (
  `id` int(11) NOT NULL,
  `id_transaksi` varchar(45) DEFAULT NULL,
  `wp_barang_id` int(11) NOT NULL,
  `harga` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `satuan` varchar(45) DEFAULT NULL,
  `tgl_transaksi` date DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `wp_pelanggan_id` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `wp_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `wp_users`
--

CREATE TABLE `wp_users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(254) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `wp_users_groups`
--

CREATE TABLE `wp_users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `wp_groups_id` mediumint(8) UNSIGNED NOT NULL,
  `wp_users_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wp_asis_debt`
--
ALTER TABLE `wp_asis_debt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wp_barang`
--
ALTER TABLE `wp_barang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_wp_barang_wp_suplier1_idx` (`wp_suplier_id`);

--
-- Indexes for table `wp_debt_muat`
--
ALTER TABLE `wp_debt_muat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_wp_debt_muat_wp_barang1_idx` (`wp_barang_id`);

--
-- Indexes for table `wp_debt_turun`
--
ALTER TABLE `wp_debt_turun`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_wp_aset_wp_barang1_idx` (`wp_barang_id`),
  ADD KEY `fk_wp_debt_turun_wp_pelanggan1_idx` (`wp_pelanggan_id`);

--
-- Indexes for table `wp_faktur`
--
ALTER TABLE `wp_faktur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_wp_faktur_wp_transaksi1_idx` (`wp_transaksi_id`);

--
-- Indexes for table `wp_groups`
--
ALTER TABLE `wp_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wp_jabatan`
--
ALTER TABLE `wp_jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wp_jadwal`
--
ALTER TABLE `wp_jadwal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_wp_jadwal_wp_barang1_idx` (`wp_barang_id`);

--
-- Indexes for table `wp_jkebutuhan`
--
ALTER TABLE `wp_jkebutuhan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wp_kebutuhan`
--
ALTER TABLE `wp_kebutuhan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_wp_kebutuhan_wp_pelanggan1_idx` (`wp_pelanggan_id`),
  ADD KEY `fk_wp_kebutuhan_wp_jkebutuhan1_idx` (`wp_jkebutuhan_id`);

--
-- Indexes for table `wp_krat_kosong`
--
ALTER TABLE `wp_krat_kosong`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wp_laporan_arus`
--
ALTER TABLE `wp_laporan_arus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wp_list_effectif`
--
ALTER TABLE `wp_list_effectif`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_wp_list_effectif_wp_barang1_idx` (`wp_barang_id`),
  ADD KEY `fk_wp_list_effectif_wp_pelanggan1_idx` (`wp_pelanggan_id`),
  ADD KEY `fk_wp_list_effectif_wp_status_effectif1_idx` (`wp_status_effectif_id`);

--
-- Indexes for table `wp_login_attempts`
--
ALTER TABLE `wp_login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wp_pelanggan`
--
ALTER TABLE `wp_pelanggan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_wp_pelanggan_wp_karyawan1_idx` (`wp_karyawan_id_karyawan`);

--
-- Indexes for table `wp_profile`
--
ALTER TABLE `wp_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wp_rekapfaktur`
--
ALTER TABLE `wp_rekapfaktur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_wp_rekapfaktur_wp_faktur1_idx` (`wp_faktur_id`),
  ADD KEY `fk_wp_rekapfaktur_wp_pelanggan1_idx` (`wp_pelanggan_id`),
  ADD KEY `fk_wp_rekapfaktur_wp_barang1_idx` (`wp_barang_id`);

--
-- Indexes for table `wp_status`
--
ALTER TABLE `wp_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wp_status_effectif`
--
ALTER TABLE `wp_status_effectif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wp_stok`
--
ALTER TABLE `wp_stok`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_wp_stok_wp_barang1_idx` (`wp_barang_id`);

--
-- Indexes for table `wp_suplier`
--
ALTER TABLE `wp_suplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wp_transaksi`
--
ALTER TABLE `wp_transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_wp_transaksi_wp_barang1_idx` (`wp_barang_id`),
  ADD KEY `fk_wp_transaksi_wp_pelanggan1_idx` (`wp_pelanggan_id`),
  ADD KEY `fk_wp_transaksi_wp_status1_idx` (`wp_status_id`);

--
-- Indexes for table `wp_users`
--
ALTER TABLE `wp_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wp_users_groups`
--
ALTER TABLE `wp_users_groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_wp_users_groups_wp_groups1_idx` (`wp_groups_id`),
  ADD KEY `fk_wp_users_groups_wp_users1_idx` (`wp_users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wp_asis_debt`
--
ALTER TABLE `wp_asis_debt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wp_barang`
--
ALTER TABLE `wp_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wp_debt_muat`
--
ALTER TABLE `wp_debt_muat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wp_debt_turun`
--
ALTER TABLE `wp_debt_turun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wp_faktur`
--
ALTER TABLE `wp_faktur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wp_groups`
--
ALTER TABLE `wp_groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wp_jabatan`
--
ALTER TABLE `wp_jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wp_jadwal`
--
ALTER TABLE `wp_jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wp_jkebutuhan`
--
ALTER TABLE `wp_jkebutuhan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wp_kebutuhan`
--
ALTER TABLE `wp_kebutuhan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wp_krat_kosong`
--
ALTER TABLE `wp_krat_kosong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '	';

--
-- AUTO_INCREMENT for table `wp_laporan_arus`
--
ALTER TABLE `wp_laporan_arus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wp_list_effectif`
--
ALTER TABLE `wp_list_effectif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wp_login_attempts`
--
ALTER TABLE `wp_login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wp_pelanggan`
--
ALTER TABLE `wp_pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wp_profile`
--
ALTER TABLE `wp_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wp_rekapfaktur`
--
ALTER TABLE `wp_rekapfaktur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wp_status`
--
ALTER TABLE `wp_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wp_stok`
--
ALTER TABLE `wp_stok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wp_suplier`
--
ALTER TABLE `wp_suplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wp_transaksi`
--
ALTER TABLE `wp_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wp_users`
--
ALTER TABLE `wp_users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wp_users_groups`
--
ALTER TABLE `wp_users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `wp_barang`
--
ALTER TABLE `wp_barang`
  ADD CONSTRAINT `fk_wp_barang_wp_suplier1` FOREIGN KEY (`wp_suplier_id`) REFERENCES `wp_suplier` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `wp_debt_muat`
--
ALTER TABLE `wp_debt_muat`
  ADD CONSTRAINT `fk_wp_debt_muat_wp_barang1` FOREIGN KEY (`wp_barang_id`) REFERENCES `wp_barang` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `wp_debt_turun`
--
ALTER TABLE `wp_debt_turun`
  ADD CONSTRAINT `fk_wp_aset_wp_barang1` FOREIGN KEY (`wp_barang_id`) REFERENCES `wp_barang` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_wp_debt_turun_wp_pelanggan1` FOREIGN KEY (`wp_pelanggan_id`) REFERENCES `wp_pelanggan` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `wp_faktur`
--
ALTER TABLE `wp_faktur`
  ADD CONSTRAINT `fk_wp_faktur_wp_transaksi1` FOREIGN KEY (`wp_transaksi_id`) REFERENCES `wp_transaksi` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `wp_jadwal`
--
ALTER TABLE `wp_jadwal`
  ADD CONSTRAINT `fk_wp_jadwal_wp_barang1` FOREIGN KEY (`wp_barang_id`) REFERENCES `wp_barang` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `wp_kebutuhan`
--
ALTER TABLE `wp_kebutuhan`
  ADD CONSTRAINT `fk_wp_kebutuhan_wp_jkebutuhan1` FOREIGN KEY (`wp_jkebutuhan_id`) REFERENCES `wp_jkebutuhan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_wp_kebutuhan_wp_pelanggan1` FOREIGN KEY (`wp_pelanggan_id`) REFERENCES `wp_pelanggan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `wp_list_effectif`
--
ALTER TABLE `wp_list_effectif`
  ADD CONSTRAINT `fk_wp_list_effectif_wp_barang1` FOREIGN KEY (`wp_barang_id`) REFERENCES `wp_barang` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_wp_list_effectif_wp_pelanggan1` FOREIGN KEY (`wp_pelanggan_id`) REFERENCES `wp_pelanggan` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_wp_list_effectif_wp_status_effectif1` FOREIGN KEY (`wp_status_effectif_id`) REFERENCES `wp_status_effectif` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `wp_pelanggan`
--
ALTER TABLE `wp_pelanggan`
  ADD CONSTRAINT `fk_wp_pelanggan_wp_karyawan1` FOREIGN KEY (`wp_karyawan_id_karyawan`) REFERENCES `wp_karyawan` (`id_karyawan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `wp_rekapfaktur`
--
ALTER TABLE `wp_rekapfaktur`
  ADD CONSTRAINT `fk_wp_rekapfaktur_wp_barang1` FOREIGN KEY (`wp_barang_id`) REFERENCES `wp_barang` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_wp_rekapfaktur_wp_faktur1` FOREIGN KEY (`wp_faktur_id`) REFERENCES `wp_faktur` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_wp_rekapfaktur_wp_pelanggan1` FOREIGN KEY (`wp_pelanggan_id`) REFERENCES `wp_pelanggan` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `wp_stok`
--
ALTER TABLE `wp_stok`
  ADD CONSTRAINT `fk_wp_stok_wp_barang1` FOREIGN KEY (`wp_barang_id`) REFERENCES `wp_barang` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `wp_transaksi`
--
ALTER TABLE `wp_transaksi`
  ADD CONSTRAINT `fk_wp_transaksi_wp_barang1` FOREIGN KEY (`wp_barang_id`) REFERENCES `wp_barang` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_wp_transaksi_wp_pelanggan1` FOREIGN KEY (`wp_pelanggan_id`) REFERENCES `wp_pelanggan` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_wp_transaksi_wp_status1` FOREIGN KEY (`wp_status_id`) REFERENCES `wp_status` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `wp_users_groups`
--
ALTER TABLE `wp_users_groups`
  ADD CONSTRAINT `fk_wp_users_groups_wp_groups1` FOREIGN KEY (`wp_groups_id`) REFERENCES `wp_groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_wp_users_groups_wp_users1` FOREIGN KEY (`wp_users_id`) REFERENCES `wp_users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
