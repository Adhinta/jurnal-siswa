-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03 Jul 2019 pada 04.39
-- Versi Server: 10.1.30-MariaDB
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
-- Database: `arsip_surat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_surat`
--

CREATE TABLE `jenis_surat` (
  `id_jeSur` int(20) NOT NULL,
  `jen_surat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `id_surKel` int(20) NOT NULL,
  `no_surKel` varchar(50) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `perihal_kel` varchar(150) NOT NULL,
  `alamatTujuan` varchar(100) NOT NULL,
  `disposisi_kel` varchar(50) NOT NULL,
  `file_scan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_keluar`
--

INSERT INTO `surat_keluar` (`id_surKel`, `no_surKel`, `tanggal`, `perihal_kel`, `alamatTujuan`, `disposisi_kel`, `file_scan`) VALUES
(2, '13', '14', 're', '2', 'li', 'storage/suratkeluar/jmbz4uTRSm8xngZ72iO33JFFoXGf4bQV92T6OX0P.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `id_surMa` int(20) NOT NULL,
  `no_surMa` varchar(50) NOT NULL,
  `taMa` varchar(20) DEFAULT NULL,
  `taSu` varchar(20) NOT NULL,
  `perihal` varchar(150) NOT NULL,
  `alamatPengirim` varchar(100) NOT NULL,
  `disposisi` varchar(50) NOT NULL,
  `Scan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_masuk`
--

INSERT INTO `surat_masuk` (`id_surMa`, `no_surMa`, `taMa`, `taSu`, `perihal`, `alamatPengirim`, `disposisi`, `Scan`) VALUES
(12, '12', '12', '12', 'tugas', 'dodik', 'kepsek', 'storage/suratmasuk/eSjlMTDLmVi0dS1ykFpoUaUWiEsWothQJ1OIMAPo.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `jabatan`, `hakAk`, `remember_token`, `created_at`, `updated_at`) VALUES
(18, 'admin', 'admin@gmail.com', NULL, '$2y$10$qKn6ZixCkhJRi.3fTN7IuuKxqZLOkhLWugROKr7xTWkazvN6Y/dYW', 'ADMIN', 'FULL', 'E5dMlpohMsUkHDYHDc91qRLes4jsFcrL2HOIcSMwm7MB7Yu7X3CVfWLQqGRc', NULL, NULL),
(20, 'user', 'user@gmail.com', NULL, '$2y$10$4WQ2QjEA.RUc6ETkAxqWiuc1fi44tyyxQx34aTrpk41Lav76/1lNq', 'USERS', 'LIMITED', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_surat`
--
ALTER TABLE `jenis_surat`
  ADD PRIMARY KEY (`id_jeSur`);

--
-- Indexes for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`id_surKel`);

--
-- Indexes for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`id_surMa`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  MODIFY `id_surKel` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `id_surMa` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
