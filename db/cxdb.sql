-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Sep 2019 pada 08.46
-- Versi server: 10.1.33-MariaDB
-- Versi PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cxdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `calon`
--

CREATE TABLE `calon` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nobp` varchar(20) NOT NULL,
  `nama_lengkap` varchar(40) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jk` varchar(20) NOT NULL,
  `alamat_rumah` varchar(50) NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `alasan` varchar(100) NOT NULL,
  `divisi` varchar(30) NOT NULL,
  `cekuser` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `calon`
--

INSERT INTO `calon` (`id`, `id_user`, `nobp`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `jk`, `alamat_rumah`, `asal_sekolah`, `alasan`, `divisi`, `cekuser`) VALUES
(12, 1, '18238217382173', 'kasdhasjdh', 'jashdj', '2007-12-19', 'Laki-laki', 'sakdjsahdsjah', 'jashdj', 'jashdjshajdhajshdjshaj', 'multimedia', 'v'),
(13, 2, '17101152630070', 'Handika Putra', 'Padang', '2007-12-11', 'Laki-laki', 'Tabing Tunggul hitam', 'SMK N  6 Padang', 'Pengeegn azaah', 'networking', 'v');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cek`
--

CREATE TABLE `cek` (
  `id_regis` int(11) NOT NULL,
  `id_calon` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tahap1` varchar(10) NOT NULL,
  `tahap2` varchar(10) NOT NULL,
  `tahap3` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cek`
--

INSERT INTO `cek` (`id_regis`, `id_calon`, `id_user`, `tahap1`, `tahap2`, `tahap3`) VALUES
(1, 12, 1, 'lulus', 'belum', 'belum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(40) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `level` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `username`, `password`, `level`, `email`) VALUES
(1, 'handika', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'asdsad'),
(2, 'ravit', 'ravit', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'asdas');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `calon`
--
ALTER TABLE `calon`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cek`
--
ALTER TABLE `cek`
  ADD PRIMARY KEY (`id_regis`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `calon`
--
ALTER TABLE `calon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `cek`
--
ALTER TABLE `cek`
  MODIFY `id_regis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
