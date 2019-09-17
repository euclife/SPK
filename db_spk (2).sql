-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 17, 2019 at 06:21 PM
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
-- Table structure for table `bobot_minimal`
--

CREATE TABLE `bobot_minimal` (
  `id` int(11) NOT NULL,
  `kriteria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bobot` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bobot_minimal`
--

INSERT INTO `bobot_minimal` (`id`, `kriteria`, `bobot`, `created_at`, `updated_at`) VALUES
(1, 'C1', 0.3, NULL, NULL),
(2, 'C2', 0.3, NULL, NULL),
(3, 'C3', 0.1, NULL, NULL),
(4, 'C4', 0.15, NULL, NULL),
(5, 'C5', 0.15, NULL, NULL);

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
(2, 2, 3, 1, 'B', '2.00', '0', 7, '2019-09-03 18:54:17', '2019-09-05 10:14:37'),
(3, 3, 3, 1, 'A', '0.00', '0', 4, '2019-09-05 05:24:24', '2019-09-05 10:14:39'),
(4, 2, 3, 1, 'A', '0.00', '0', 0, '2019-09-05 10:32:57', '2019-09-05 10:32:57'),
(5, 3, 3, 1, 'B', '20.00', '0', 0, '2019-09-05 10:33:00', '2019-09-05 10:33:00'),
(6, 4, 3, 1, 'D', '0.00', '0', 0, '2019-09-05 10:33:03', '2019-09-05 10:33:03'),
(7, 5, 3, 1, 'B', '20.00', '0', 0, '2019-09-05 10:33:05', '2019-09-05 10:33:05'),
(8, 6, 3, 1, 'B', '20.00', '0', 0, '2019-09-05 10:33:08', '2019-09-05 10:33:08'),
(9, 7, 3, 1, 'B', '20.00', '0', 0, '2019-09-05 10:33:10', '2019-09-05 10:33:10'),
(10, 8, 3, 1, 'B', '20.00', '0', 0, '2019-09-05 10:33:13', '2019-09-05 10:33:13'),
(11, 9, 3, 1, 'B', '20.00', '0', 0, '2019-09-05 10:33:15', '2019-09-05 10:33:15'),
(12, 10, 3, 1, 'B', '20.00', '0', 0, '2019-09-05 10:33:17', '2019-09-05 10:33:17'),
(13, 11, 3, 1, 'B', '20.00', '0', 0, '2019-09-05 10:33:21', '2019-09-05 10:33:21'),
(14, 2, 5, 2, 'A', '0.00', '0', 0, '2019-09-06 00:15:39', '2019-09-06 00:15:39'),
(15, 3, 5, 2, 'B', '20.00', '0', 0, '2019-09-06 00:15:41', '2019-09-06 00:15:41');

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
(1, 'Administrasi', 'Keterangan', '2019-09-16 00:00:00', '2019-09-03 11:00:07', '2019-08-26 12:49:08'),
(2, 'IT', 'OKOK', '2020-09-10 00:00:00', '2019-09-06 00:08:44', '2019-09-06 00:08:44');

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
(29, 1, 'Cantik', '2019-08-26 19:49:08', '2019-08-26 19:49:08'),
(30, 2, 'Edan', '2019-09-06 07:08:44', '2019-09-06 07:08:44'),
(31, 2, 'Wadaw', '2019-09-06 07:08:44', '2019-09-06 07:08:44');

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
-- Table structure for table `nilai_pelamar`
--

CREATE TABLE `nilai_pelamar` (
  `id` int(11) NOT NULL,
  `id_pelamar` int(11) NOT NULL,
  `id_lowongan` int(11) NOT NULL,
  `c1` double DEFAULT '0',
  `c2` double DEFAULT '0',
  `c3` double DEFAULT '0',
  `c4` double DEFAULT '0',
  `c5` double DEFAULT '0',
  `hasil_c1` double DEFAULT '0',
  `hasil_c2` double DEFAULT '0',
  `hasil_c3` double DEFAULT '0',
  `hasil_c4` double DEFAULT '0',
  `hasil_c5` double DEFAULT '0',
  `nilai` double DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nilai_pelamar`
--

INSERT INTO `nilai_pelamar` (`id`, `id_pelamar`, `id_lowongan`, `c1`, `c2`, `c3`, `c4`, `c5`, `hasil_c1`, `hasil_c2`, `hasil_c3`, `hasil_c4`, `hasil_c5`, `nilai`, `created_at`, `updated_at`) VALUES
(1, 4, 2, 0.5, 0.5, 0.2, 0.5, 0.5, 1, 1, 0.2, 1, 1, 0.92, '2019-09-17 17:47:36', '2019-09-17 18:02:03'),
(2, 5, 2, 0.5, 0, 0.4, 0.5, 0.5, 1, 0, 0.4, 1, 1, 0.64, '2019-09-17 17:47:36', '2019-09-17 18:02:03'),
(3, 2, 2, 0.5, 0.5, 1, 0.5, 0.5, 1, 1, 1, 1, 1, 1, '2019-09-17 18:02:03', '2019-09-17 18:02:03'),
(4, 3, 2, 0.3, 0.3, 0.6, 0.5, 0.5, 0.6, 0.6, 0.6, 1, 1, 0.72, '2019-09-17 18:02:03', '2019-09-17 18:02:03');

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
  `umum` double DEFAULT '0',
  `point` int(11) DEFAULT NULL,
  `kondisi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pelamar`
--

INSERT INTO `pelamar` (`id`, `user_id`, `lowongan_id`, `surat_lamaran`, `cv`, `ijasah`, `status`, `ipk`, `umur`, `umum`, `point`, `kondisi`, `created_at`, `updated_at`) VALUES
(2, 2, 2, 'ada', 'ada', 'ada', 2, 3.6, 21, 1, 70, 'not active', '2019-08-20 17:00:00', '2019-09-17 18:20:15'),
(3, 1, 2, 'ada', 'ada', 'ada', 2, 1.2, 25, 0.6, 73, 'active', '2019-08-20 17:00:00', '2019-09-05 10:33:23'),
(4, 1, 2, 'user-120190905221403.pdf', 'user-120190905221403.pdf', 'user-120190905221403.pdf', 1, 3.2, 22, 0.2, 7, 'active', '2019-09-05 15:14:03', '2019-09-05 15:14:03'),
(5, 6, 2, 'user-620190906071433.pdf', 'user-620190906071433.pdf', 'user-620190906071433.pdf', 2, 3, 20, 0.4, 6, 'active', '2019-09-06 00:14:33', '2019-09-06 00:14:33');

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
(2, 'Apa itu Lisan?', 'itu adalah unta', 'itu adalah untb', 'itu adalah untc', 'itu adalah untb', 'B', '0.10', '2019-09-02 03:04:55', '2019-09-02 03:04:55'),
(3, 'Apa itu Lisan?', 'itu adalah unta', 'itu adalah untb', 'itu adalah untc', 'itu adalah untb', 'B', '0.10', '2019-09-02 03:04:55', '2019-09-02 03:04:55'),
(4, 'Apa itu Lisan?', 'itu adalah unta', 'itu adalah untb', 'itu adalah untc', 'itu adalah untb', 'B', '0.10', '2019-09-02 03:04:55', '2019-09-02 03:04:55'),
(5, 'Apa itu Lisan?', 'itu adalah unta', 'itu adalah untb', 'itu adalah untc', 'itu adalah untb', 'B', '0.10', '2019-09-02 03:04:55', '2019-09-02 03:04:55'),
(6, 'Apa itu Lisan?', 'itu adalah unta', 'itu adalah untb', 'itu adalah untc', 'itu adalah untb', 'B', '0.10', '2019-09-02 03:04:55', '2019-09-02 03:04:55'),
(7, 'Apa itu Lisan?', 'itu adalah unta', 'itu adalah untb', 'itu adalah untc', 'itu adalah untb', 'B', '0.10', '2019-09-02 03:04:55', '2019-09-02 03:04:55'),
(8, 'Apa itu Lisan?', 'itu adalah unta', 'itu adalah untb', 'itu adalah untc', 'itu adalah untb', 'B', '0.10', '2019-09-02 03:04:55', '2019-09-02 03:04:55'),
(9, 'Apa itu Lisan?', 'itu adalah unta', 'itu adalah untb', 'itu adalah untc', 'itu adalah untb', 'B', '0.10', '2019-09-02 03:04:55', '2019-09-02 03:04:55'),
(10, 'Apa itu Lisan?', 'itu adalah unta', 'itu adalah untb', 'itu adalah untc', 'itu adalah untb', 'B', '0.10', '2019-09-02 03:04:55', '2019-09-02 03:04:55'),
(11, 'Apa itu Lisan?', 'itu adalah unta', 'itu adalah untb', 'itu adalah untc', 'itu adalah untb', 'B', '0.10', '2019-09-02 03:04:55', '2019-09-02 03:04:55');

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
(1, 'maul', '0808321', 'maul@gmail.com', 'BANDUNG', '2019-09-16', 'PRIA', 'JL. MUARARAJEUN LAMA III NO. 21\r\nJL. MANGLID NO 33', 'ISLAM', 'user-120190903175913.png', 'USER', NULL, '$2y$10$IlI5w37lnvbpIKI5xkx9meJvwrJHjpCSpKhQdYMJ0Rx.ue4HMBadK', '95NeCfgiBihHcYg0dnov8YHpweffJVKkAPuVjfPUsMbY7aLTGMh0VLv2ENr5', NULL, '2019-09-03 10:59:13'),
(2, 'Chan', 'asd', 'chandraramdhanpurnama@gmail.com', 'sad', '2019-06-12', 'PRIA', 'asd', 'BUDHA', 'user-220190813190429.jpg', 'ADMIN', '2019-06-20 18:14:25', '$2y$10$IlI5w37lnvbpIKI5xkx9meJvwrJHjpCSpKhQdYMJ0Rx.ue4HMBadK', NULL, '2019-05-12 18:41:58', '2019-08-13 12:04:29'),
(3, 'Maulana', NULL, '900maulana@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 'ADMIN', '2019-05-15 13:19:23', '$2y$10$dhDlkGHVb3nJ2mXeIz29D.L8jNbzPntCCrxl.uo4jO11Di3SGyAn.', NULL, '2019-05-15 13:17:09', '2019-05-15 13:19:23'),
(6, 'User1', '34892483247', 'satuuser55@gmail.com', 'Bandung', '1998-09-12', 'PRIA', 'JL. MUARARAJEUN LAMA III NO. 21\r\nJL. MANGLID NO 33', 'ISLAM', 'user-620190906071115.png', 'USER', '2019-06-20 00:22:40', '$2y$10$6tHmqxIXxDGDFLo4ShQ4se8X.0GazV6oSpd79OiQJGDYw/iSbIegC', NULL, '2019-06-19 09:21:07', '2019-09-06 00:11:15'),
(7, 'najich', NULL, 'chandraramdhanpurnama@gmail.com2', NULL, NULL, NULL, NULL, NULL, NULL, 'USER', '2019-06-20 13:19:11', '$2y$10$IlI5w37lnvbpIKI5xkx9meJvwrJHjpCSpKhQdYMJ0Rx.ue4HMBadK', NULL, '2019-06-20 13:16:58', '2019-06-20 13:19:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bobot_minimal`
--
ALTER TABLE `bobot_minimal`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `nilai_pelamar`
--
ALTER TABLE `nilai_pelamar`
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
-- AUTO_INCREMENT for table `bobot_minimal`
--
ALTER TABLE `bobot_minimal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jawab`
--
ALTER TABLE `jawab`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `lowongan`
--
ALTER TABLE `lowongan`
  MODIFY `id_lowongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lowongan_syarat`
--
ALTER TABLE `lowongan_syarat`
  MODIFY `id_syarat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nilai_pelamar`
--
ALTER TABLE `nilai_pelamar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pelamar`
--
ALTER TABLE `pelamar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id_soal` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
