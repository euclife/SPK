-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 03, 2019 at 06:56 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spk`
--

-- --------------------------------------------------------

--
-- Table structure for table `jawab`
--

CREATE TABLE `jawab` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_soal` int(11) NOT NULL,
  `id_pelamar` int(11) NOT NULL,
  `id_lowongan` int(11) DEFAULT NULL,
  `pilihan` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `score` decimal(8,2) NOT NULL,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revisi` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jawab`
--

INSERT INTO `jawab` (`id`, `id_soal`, `id_pelamar`, `id_lowongan`, `pilihan`, `score`, `status`, `revisi`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 1, 'A', '2.00', '1', 1, '2019-08-28 15:09:44', '2019-08-28 15:09:51'),
(2, 2, 1, 1, 'C', '0.00', '0', 0, '2019-09-03 18:54:17', '2019-09-03 18:54:17');

-- --------------------------------------------------------

--
-- Table structure for table `lowongan`
--

CREATE TABLE `lowongan` (
  `id_lowongan` int(11) NOT NULL,
  `posisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci,
  `tanggal_selesai` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lowongan`
--

INSERT INTO `lowongan` (`id_lowongan`, `posisi`, `keterangan`, `tanggal_selesai`, `created_at`, `updated_at`) VALUES
(1, 'Administrasi', 'Keterangan', '2019-09-16 00:00:00', '2019-09-03 11:00:07', '2019-08-26 12:49:08');

-- --------------------------------------------------------

--
-- Table structure for table `lowongan_syarat`
--

CREATE TABLE `lowongan_syarat` (
  `id_syarat` int(11) NOT NULL,
  `id_lowongan` int(11) NOT NULL,
  `nama_syarat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lowongan_syarat`
--

INSERT INTO `lowongan_syarat` (`id_syarat`, `id_lowongan`, `nama_syarat`, `created_at`, `updated_at`) VALUES
(28, 1, 'Usia min 2 tahun pelangaman', '2019-08-26 19:49:08', '2019-08-26 19:49:08'),
(29, 1, 'Cantik', '2019-08-26 19:49:08', '2019-08-26 19:49:08');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('kokon377@gmail.com', '$2y$10$cJsae.kYHsrrLYmV79jmjuR7Ni3a3j5/upD/fssKA.AoChI1HD5Zq', '2019-03-03 07:36:38'),
('chandraramdhanpurnama@gmail.com', '$2y$10$tb8oiHtLlAwjgNzxvkpyEO7AkksSAFBT9.k7EAaLzWroCcNwaj1Si', '2019-05-12 19:19:37');

-- --------------------------------------------------------

--
-- Table structure for table `pelamar`
--

CREATE TABLE `pelamar` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `lowongan_id` int(11) NOT NULL,
  `surat_lamaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ijasah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `ipk` double NOT NULL,
  `umur` int(11) NOT NULL,
  `umum` int(11) DEFAULT NULL,
  `point` int(11) DEFAULT NULL,
  `kondisi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pelamar`
--

INSERT INTO `pelamar` (`id`, `user_id`, `lowongan_id`, `surat_lamaran`, `cv`, `ijasah`, `status`, `ipk`, `umur`, `umum`, `point`, `kondisi`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'ada', 'ada', 'ada', 2, 4.5, 12, NULL, 70, 'active', '2019-08-20 17:00:00', '2019-08-20 17:00:00'),
(2, 2, 1, 'ada', 'ada', 'ada', 2, 3.6, 21, 80, 70, NULL, '2019-08-20 17:00:00', '2019-08-20 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `id_soal` int(10) UNSIGNED NOT NULL,
  `pertanyaan` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `pila` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `pilb` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `pilc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `pild` longtext COLLATE utf8mb4_unicode_ci,
  `kunci` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `score` decimal(5,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`id_soal`, `pertanyaan`, `pila`, `pilb`, `pilc`, `pild`, `kunci`, `score`, `created_at`, `updated_at`) VALUES
(2, 'Apa itu Lisan?', 'itu adalah unta', 'itu adalah untb', 'itu adalah untc', 'itu adalah untb', 'B', '2.00', '2019-09-02 03:04:55', '2019-09-02 03:04:55'),
(3, 'Apa itu Lisan?', 'itu adalah unta', 'itu adalah untb', 'itu adalah untc', 'itu adalah untb', 'B', '2.00', '2019-09-02 03:04:55', '2019-09-02 03:04:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USER',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `no_telp`, `email`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `alamat`, `agama`, `foto`, `level`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'maul', '0808321', 'maul@gmail.com', 'BANDUNG', '2019-09-16', 'PRIA', 'JL. MUARARAJEUN LAMA III NO. 21\r\nJL. MANGLID NO 33', 'ISLAM', 'user-120190903175913.png', 'USER', NULL, '$2y$10$IlI5w37lnvbpIKI5xkx9meJvwrJHjpCSpKhQdYMJ0Rx.ue4HMBadK', 'srsUdREU3vFlM9M0QieoVEowx4w3Q4IZOLHTzfCvbJ2Ox6yYMUi1FFy895Pk', NULL, '2019-09-03 10:59:13'),
(2, 'Chan', 'asd', 'chandraramdhanpurnama@gmail.com', 'sad', '2019-06-12', 'PRIA', 'asd', 'BUDHA', 'user-220190813190429.jpg', 'ADMIN', '2019-06-20 18:14:25', '$2y$10$IlI5w37lnvbpIKI5xkx9meJvwrJHjpCSpKhQdYMJ0Rx.ue4HMBadK', NULL, '2019-05-12 18:41:58', '2019-08-13 12:04:29'),
(3, 'Maulana', NULL, '900maulana@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 'ADMIN', '2019-05-15 13:19:23', '$2y$10$dhDlkGHVb3nJ2mXeIz29D.L8jNbzPntCCrxl.uo4jO11Di3SGyAn.', NULL, '2019-05-15 13:17:09', '2019-05-15 13:19:23'),
(6, 'user1', NULL, 'satuuser55@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 'USER', '2019-06-20 00:22:40', '$2y$10$6tHmqxIXxDGDFLo4ShQ4se8X.0GazV6oSpd79OiQJGDYw/iSbIegC', NULL, '2019-06-19 09:21:07', '2019-06-20 00:22:40'),
(7, 'najich', NULL, 'chandraramdhanpurnama@gmail.com2', NULL, NULL, NULL, NULL, NULL, NULL, 'USER', '2019-06-20 13:19:11', '$2y$10$IlI5w37lnvbpIKI5xkx9meJvwrJHjpCSpKhQdYMJ0Rx.ue4HMBadK', NULL, '2019-06-20 13:16:58', '2019-06-20 13:19:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jawab`
--
ALTER TABLE `jawab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lowongan`
--
ALTER TABLE `lowongan`
  ADD PRIMARY KEY (`id_lowongan`);

--
-- Indexes for table `lowongan_syarat`
--
ALTER TABLE `lowongan_syarat`
  ADD PRIMARY KEY (`id_syarat`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelamar`
--
ALTER TABLE `pelamar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jawab`
--
ALTER TABLE `jawab`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lowongan`
--
ALTER TABLE `lowongan`
  MODIFY `id_lowongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lowongan_syarat`
--
ALTER TABLE `lowongan_syarat`
  MODIFY `id_syarat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pelamar`
--
ALTER TABLE `pelamar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id_soal` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
