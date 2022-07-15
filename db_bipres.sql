-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jul 2022 pada 11.44
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bipres`
--
CREATE DATABASE IF NOT EXISTS `db_bipres` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_bipres`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_stats`
--

CREATE TABLE `kategori_stats` (
  `id_kategori_stats` int(11) NOT NULL,
  `nama_kategori_stats` varchar(100) NOT NULL,
  `deskripsi_kategori_stats` text NOT NULL,
  `log_datetime` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori_stats`
--

INSERT INTO `kategori_stats` (`id_kategori_stats`, `nama_kategori_stats`, `deskripsi_kategori_stats`, `log_datetime`) VALUES
(1, 'Lengan dan Bahu', 'Daya tahan otot lengan dan bahu.', '2022-07-15 09:59:50'),
(2, 'Perut', 'Daya tahan otot perut', '2022-07-15 09:59:50'),
(3, 'Punggung', 'Daya tahan otot punggung', '0000-00-00 00:00:00'),
(6, 'Fleksibilitas', 'Fleksibilitas otot.	', '2022-07-15 14:10:25'),
(7, 'Tungkai', 'Daya ledak otot tungkai.', '2022-07-15 14:10:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sekolah`
--

CREATE TABLE `sekolah` (
  `id_sekolah` int(11) NOT NULL,
  `nama_sekolah` varchar(60) NOT NULL,
  `jenjang_sekolah` enum('SD','SMP','SMA/SMK') NOT NULL,
  `log_datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sekolah`
--

INSERT INTO `sekolah` (`id_sekolah`, `nama_sekolah`, `jenjang_sekolah`, `log_datetime`) VALUES
(1, 'SMK Al-Hikmah Curug', 'SMA/SMK', '2022-07-15 09:32:32'),
(2, 'MTS Al-Hikmah Curug', 'SMP', '2022-07-15 09:32:32'),
(7, 'SMPN 2 Curug', 'SMP', '2022-07-15 13:19:39'),
(8, 'MTS Al-Barkah', 'SMP', '2022-07-15 11:03:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `jenis_kelamin` enum('putra','putri') NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `id_sekolah` int(11) DEFAULT NULL,
  `log_datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`, `status`, `nama_lengkap`, `jenis_kelamin`, `tanggal_lahir`, `id_sekolah`, `log_datetime`) VALUES
(1, 'riyanuari', 'admin', 'riyanuari@gmail.com', 1, 'Riyanuari', 'putra', '1999-01-01', NULL, '2022-07-15 09:20:54'),
(2, 'usmansidiq', 'atlet', 'usman@gmail.com', 2, 'Usman Sidiq A.', 'putra', '2015-11-19', 2, '2022-07-15 14:39:06'),
(3, 'muhammadalgi', 'atlet', 'algi@gmail.com', 2, 'Muhammad Algi F.', 'putra', '2015-04-15', 2, '2022-07-15 14:39:06'),
(6, 'demian adlyanata', 'atlet', 'demian adlyanata@gmail.com', 2, 'Demian Adlyanata', 'putra', '2015-11-23', 8, '2022-07-15 15:18:18');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori_stats`
--
ALTER TABLE `kategori_stats`
  ADD PRIMARY KEY (`id_kategori_stats`);

--
-- Indeks untuk tabel `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori_stats`
--
ALTER TABLE `kategori_stats`
  MODIFY `id_kategori_stats` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
