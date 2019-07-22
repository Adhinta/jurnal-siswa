-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2019 at 03:02 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prestasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_lomba`
--

CREATE TABLE `daftar_lomba` (
  `id_guru` int(20) NOT NULL,
  `nama_guru` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(150) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `kelas_mengajar` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_lomba`
--

INSERT INTO `daftar_lomba` (`id_guru`, `nama_guru`, `jenis_kelamin`, `alamat`, `email`, `kelas_mengajar`) VALUES
(123, 'adad', 'laki', '', 'admin123', 'ips'),
(1213, 'jem', 'perempuan', 'kubutambahan', 'pratamac2@gmail.com', 'ipa'),
(3445, 'adad', 'perempuan', 'Lingkungan Sema Bitera, Ds Bitera, Kec. Gianyar', 'ryanjem354@gmail.com', 'ipa'),
(123132, 'jem', 'laki', 'Banjar Dinas Pasek, Desa Kubutambahan', 'adhinta.candra@yahoo.com', 'asdads');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_surat`
--

CREATE TABLE `jenis_surat` (
  `id_jeSur` int(20) NOT NULL,
  `jen_surat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_07_22_123447_add_jurnal_name_to_prestasi_siswa', 1);

-- --------------------------------------------------------

--
-- Table structure for table `prestasi_siswa`
--

CREATE TABLE `prestasi_siswa` (
  `id_jurnal` int(20) NOT NULL,
  `id_guru` int(10) NOT NULL,
  `nama_guru` varchar(20) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `agenda` text NOT NULL,
  `jurnal` text NOT NULL,
  `jurnal_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prestasi_siswa`
--

INSERT INTO `prestasi_siswa` (`id_jurnal`, `id_guru`, `nama_guru`, `hari`, `tanggal`, `agenda`, `jurnal`, `jurnal_name`) VALUES
(19, 12, 'jem', 'senin', '2019-07-06', 'baik', 'storage/gambar/0Kmim4wLnBmircBbLBBXfmWGCoJojRj4s5LHFF5q.pdf', ''),
(20, 3, 'jem', 'sabtu', '2019-07-05', 'baik', 'storage/gambar/CJkLNFdwed0m74jrQ0w7Zj1WmTgBsjPXP31eSkdm.pdf', '1615051069_KHS_Genap_2018-2019 (1).pdf');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hakAk` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `jabatan`, `hakAk`, `remember_token`, `created_at`, `updated_at`) VALUES
(18, 'admin', 'admin@gmail.com', NULL, '$2y$10$qKn6ZixCkhJRi.3fTN7IuuKxqZLOkhLWugROKr7xTWkazvN6Y/dYW', 'ADMIN', 'FULL', 'SLyUWCASlrVgRZV3HO2QCwlucOjAEzC3lKWFjE54ZIV9CQHXrniQXN1oicK4', NULL, NULL),
(20, 'user', 'user@gmail.com', NULL, '$2y$10$4WQ2QjEA.RUc6ETkAxqWiuc1fi44tyyxQx34aTrpk41Lav76/1lNq', 'USERS', 'LIMITED', 'qCqmAUoLJb9mRSbsecu84CBmuBFt7O5ANRKKAsmMQN3pBFpgA5cjQv7NkrAg', NULL, NULL),
(22, 'gilang', 'gilang@gmail.com', NULL, '$2y$10$7PrNuqAmqCot1zRhxSLcwuGNa5AlgAAdQJDB/cMNvIxrEkTqBFA/q', 'USERS', NULL, 'HuIjzOW0PixzXRvV5kGBxzfDAPv2hs1tvSMPA47hAxrdhJloc3qjTweLRwVW', NULL, NULL),
(23, 'candra', 'pratamac2@gmail.com', NULL, '$2y$10$lU1hug/Fi6xeneuMzspBYuHuZQWuRRuBM81VckdWFIeth5OHbTkD6', 'USERS', NULL, 'NL1qsLtBXNLOR3bGPhrDZJ3KURkNdCylnDHkwe6nN65m8KALNhhMUoU9SNFf', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_lomba`
--
ALTER TABLE `daftar_lomba`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `jenis_surat`
--
ALTER TABLE `jenis_surat`
  ADD PRIMARY KEY (`id_jeSur`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prestasi_siswa`
--
ALTER TABLE `prestasi_siswa`
  ADD PRIMARY KEY (`id_jurnal`),
  ADD UNIQUE KEY `id_guru` (`id_guru`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_lomba`
--
ALTER TABLE `daftar_lomba`
  MODIFY `id_guru` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123133;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prestasi_siswa`
--
ALTER TABLE `prestasi_siswa`
  MODIFY `id_jurnal` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
