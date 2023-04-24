-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Mar 2023 pada 11.00
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lkw`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemasukan`
--

CREATE TABLE `pemasukan` (
  `id_pm` int(11) NOT NULL,
  `pm_tanggal` date NOT NULL,
  `pm_jenis` varchar(50) NOT NULL,
  `pm_nama` varchar(50) NOT NULL,
  `pm_harga` int(11) NOT NULL,
  `pm_jumlah` int(11) NOT NULL,
  `pm_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemasukan`
--

INSERT INTO `pemasukan` (`id_pm`, `pm_tanggal`, `pm_jenis`, `pm_nama`, `pm_harga`, `pm_jumlah`, `pm_total`) VALUES
(1, '2022-08-24', 'PREDATOR', 'HIU', 25000, 2, 50000),
(2, '2022-08-25', 'JADI', 'TAKARI', 30000, 2, 60000),
(3, '2022-08-21', 'PREDATOR', 'HIU', 30000, 4, 120000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id_pl` int(11) NOT NULL,
  `pl_tanggal` date NOT NULL,
  `pl_jenis` varchar(50) NOT NULL,
  `pl_nama` varchar(100) NOT NULL,
  `pl_harga` int(11) NOT NULL,
  `pl_jumlah` int(11) NOT NULL,
  `pl_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengeluaran`
--

INSERT INTO `pengeluaran` (`id_pl`, `pl_tanggal`, `pl_jenis`, `pl_nama`, `pl_harga`, `pl_jumlah`, `pl_total`) VALUES
(1, '2022-08-01', 'PREDATOR', 'HIU', 100000, 2, 200000),
(2, '2022-08-01', 'HIAS', 'CUPANG', 50000, 10, 500000),
(3, '2022-08-03', 'HIDUP', 'TAKARI', 25000, 4, 100000),
(4, '2022-08-03', 'JADI', 'TAKARI', 30000, 4, 120000),
(5, '2022-08-26', 'GAJI', 'GAJI KARYAWAN', 0, 0, 50000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, '18.14.1.0003', 'c49e878abbd7b4bf6d14ae6571833373', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pemasukan`
--
ALTER TABLE `pemasukan`
  ADD PRIMARY KEY (`id_pm`);

--
-- Indeks untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id_pl`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pemasukan`
--
ALTER TABLE `pemasukan`
  MODIFY `id_pm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id_pl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
