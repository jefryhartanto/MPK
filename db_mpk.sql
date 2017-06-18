-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2017 at 06:53 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_mpk`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_anggotas`
--

CREATE TABLE IF NOT EXISTS `data_anggotas` (
`id` int(10) unsigned NOT NULL,
  `nama` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `kelamin` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `no_hp` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `data_cv_id` int(11) NOT NULL,
  `no_rekening` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `data_anggotas`
--

INSERT INTO `data_anggotas` (`id`, `nama`, `tanggal_lahir`, `kelamin`, `no_hp`, `alamat`, `data_cv_id`, `no_rekening`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ishadi SE.MM', '1988-01-12', 'Laki-laki', '085245368883', 'Jl muhajirin Komp purna Griama', 1, '8651850024', NULL, '2017-06-14 13:36:44', '2017-06-14 13:36:54');

-- --------------------------------------------------------

--
-- Table structure for table `data_cvs`
--

CREATE TABLE IF NOT EXISTS `data_cvs` (
`id` int(10) unsigned NOT NULL,
  `daerah` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `nama_cv` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `data_cvs`
--

INSERT INTO `data_cvs` (`id`, `daerah`, `nama_cv`, `created_at`, `updated_at`) VALUES
(1, 'pekanbaru', 'CV. Mitra putra Pekanbaru', NULL, NULL),
(2, 'Kuantan singingi', 'CV. Mitra Anugrah Smandola', NULL, NULL),
(3, 'Inhu', 'CV. Mitra Usaha Indragiri', NULL, NULL),
(4, 'Inhil', 'CV. Mitra Inhil Mandiri', NULL, NULL),
(5, 'Pelalawan', 'CV. Mitra Putra Pelalawan', NULL, NULL),
(6, 'Siak', 'CV. Mitra Riski Siak', NULL, NULL),
(7, 'Bengkalis', 'CV. Mitra Usaha Bengkalis', NULL, NULL),
(8, 'Rohul', 'CV. Mitra Perkasa Mandiri', NULL, NULL),
(9, 'Kampar', 'CV. Mitra Kampar Sukses', NULL, NULL),
(10, 'Dumai', 'CV. Mitra Multiguna Sederhana', NULL, NULL),
(11, 'Meranti', 'CV. Mitra Meranti Sejahtera', NULL, NULL),
(12, 'Cabang Riau', 'CV. Mitra Ekonomi Riau', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data_penjualans`
--

CREATE TABLE IF NOT EXISTS `data_penjualans` (
`id` int(10) unsigned NOT NULL,
  `produk_id` int(11) NOT NULL,
  `jumlah_pesanan` int(11) NOT NULL,
  `total_harga` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `customer` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `data_penjualans`
--

INSERT INTO `data_penjualans` (`id`, `produk_id`, `jumlah_pesanan`, `total_harga`, `customer`, `created_at`, `updated_at`) VALUES
(1, 1, 5, '', 'Arif Hidayat', '2017-06-18 02:19:38', '2017-06-18 02:19:38'),
(2, 5, 5, '', 'Irwanda', '2017-06-18 02:19:52', '2017-06-18 02:19:52'),
(3, 6, 5, '', 'Jefri Hartanto', '2017-06-18 02:20:04', '2017-06-18 02:20:04'),
(4, 1, 60, '', 'Agus Rahman', '2017-06-18 02:24:41', '2017-06-18 02:24:41'),
(5, 5, 60, '', 'SD. 033 tampan', '2017-06-18 02:25:54', '2017-06-18 02:25:54');

-- --------------------------------------------------------

--
-- Table structure for table `data_pesans`
--

CREATE TABLE IF NOT EXISTS `data_pesans` (
`id` int(10) unsigned NOT NULL,
  `jumlah_pesan` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `produk_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `data_pesans`
--

INSERT INTO `data_pesans` (`id`, `jumlah_pesan`, `produk_id`, `created_at`, `updated_at`) VALUES
(1, '50', 1, '2017-06-18 02:19:04', '2017-06-18 02:19:04'),
(2, '50', 5, '2017-06-18 02:19:13', '2017-06-18 02:19:13'),
(3, '50', 6, '2017-06-18 02:19:20', '2017-06-18 02:19:20'),
(4, '10', 1, '2017-06-18 02:20:25', '2017-06-18 02:20:25'),
(5, '10', 5, '2017-06-18 02:20:33', '2017-06-18 02:20:33'),
(6, '10', 6, '2017-06-18 02:20:41', '2017-06-18 02:20:41'),
(7, '5', 1, '2017-06-18 02:23:56', '2017-06-18 02:23:56'),
(8, '5', 5, '2017-06-18 02:24:03', '2017-06-18 02:24:03'),
(9, '5', 6, '2017-06-18 02:24:10', '2017-06-18 02:24:10');

-- --------------------------------------------------------

--
-- Table structure for table `data_produks`
--

CREATE TABLE IF NOT EXISTS `data_produks` (
`id` int(10) unsigned NOT NULL,
  `nama` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `harga` int(10) NOT NULL,
  `data_cv_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `data_produks`
--

INSERT INTO `data_produks` (`id`, `nama`, `harga`, `data_cv_id`, `created_at`, `updated_at`) VALUES
(1, 'Teh Hijau ', 40000, 1, '2017-06-14 13:37:24', '2017-06-14 13:37:24'),
(5, 'Seragam SD/SMP/SMA', 150000, 12, '2017-06-18 02:06:16', '2017-06-18 02:06:16'),
(6, 'Teh Hitam', 10000, 8, '2017-06-18 02:16:02', '2017-06-18 02:16:02');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_04_29_061909_create_data_cv_table', 1),
('2017_04_29_061921_create_data_anggota_table', 1),
('2017_04_29_061930_create_data_pesan_table', 1),
('2017_04_29_061936_create_data_produk_table', 2),
('2017_04_29_061957_create_data_penjualan_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'jefri hartanto', 'jefri.hartanto@students.uin-suska.ac.id', '', '0', '$2y$10$BraFME1ledMsgftMRQe4M.HoheZPW35/iqGM6lPE8i57oYvZp9tqW', 'A6F6A6UyJOYwmrMo6E35dxeFUlcHfcacEtojvPNRBiJSWumFX5T5spSo0LLD', '2017-04-29 00:28:31', '2017-06-18 02:41:20'),
(2, 'Pimpinan', 'pimpinan@gmail.com', '', '1', '$2y$10$gg3d3SWPCTEbhqjxLpic4ual3nVshrPfoJDbXFAGgYI7qttmjZRIy', 'ZpasEUaU1dgYoKh4aze21G2QxNg1Q1dvxjL7lpB2KsNib7WReXGe0s4CxgM7', '2017-06-11 09:22:37', '2017-06-11 09:41:41'),
(3, 'Irwanda', 'irwanda@gmail.com', 'irwanda', '1', '$2y$10$w5HfizBd6.vWRf92JcGtm.n2C.YcsQbjwPcwunR5DViNBK70CqrnC', 'bpFsArfDiLku2wnXbykIiCjOO6ZiFrIPVQIRTAYmTFtTMKbAUhClS65Wn1MM', '2017-06-14 12:34:45', '2017-06-14 13:34:37'),
(4, 'Ishadi', 'Ishadi@gmail.com', 'Ishadi', '1', '$2y$10$KwenlIVjU0YApuyR1Yg/Ye572u8kSURevUk7bz/zJQnz3C5zp9i16', NULL, '2017-06-14 13:43:36', '2017-06-14 13:43:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_anggotas`
--
ALTER TABLE `data_anggotas`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_cvs`
--
ALTER TABLE `data_cvs`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_penjualans`
--
ALTER TABLE `data_penjualans`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_pesans`
--
ALTER TABLE `data_pesans`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_produks`
--
ALTER TABLE `data_produks`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_anggotas`
--
ALTER TABLE `data_anggotas`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `data_cvs`
--
ALTER TABLE `data_cvs`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `data_penjualans`
--
ALTER TABLE `data_penjualans`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `data_pesans`
--
ALTER TABLE `data_pesans`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `data_produks`
--
ALTER TABLE `data_produks`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
