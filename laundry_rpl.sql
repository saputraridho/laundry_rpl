-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Apr 2023 pada 03.43
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry_rpl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_laundry`
--

CREATE TABLE `jenis_laundry` (
  `id_jenislaundry` int(11) NOT NULL,
  `nama_jenislaundry` varchar(30) NOT NULL,
  `tarif` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jenis_laundry`
--

INSERT INTO `jenis_laundry` (`id_jenislaundry`, `nama_jenislaundry`, `tarif`) VALUES
(2, 'sahmpoo', 4000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `nik` int(15) NOT NULL,
  `nama_karyawan` varchar(30) NOT NULL,
  `alamat_karyawan` varchar(20) NOT NULL,
  `telp_karyawan` varchar(30) NOT NULL,
  `gender_karyawan` varchar(15) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`nik`, `nama_karyawan`, `alamat_karyawan`, `telp_karyawan`, `gender_karyawan`, `username`, `password`) VALUES
(1, 'saputra ridho pratama', 'lembeyan', '085895140093', 'pria', 'PutraKun', 12345678),
(2, 'rifqi', 'lembeyan', '0858625522', 'Pria', 'rifqi', 123456);

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsumen`
--

CREATE TABLE `konsumen` (
  `kode_konsumen` int(11) NOT NULL,
  `nama_konsumen` varchar(30) NOT NULL,
  `alamat_konsumen` varchar(20) NOT NULL,
  `telp_konsumen` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `konsumen`
--

INSERT INTO `konsumen` (`kode_konsumen`, `nama_konsumen`, `alamat_konsumen`, `telp_konsumen`) VALUES
(1, 'Lucky', 'Sukowidi', '086826472869');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `nota` int(11) NOT NULL,
  `id_jenislaundry` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `kode_konsumen` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `status` int(1) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `nota`, `id_jenislaundry`, `qty`, `kode_konsumen`, `username`, `status`, `tanggal`) VALUES
(6, 0, 2, 1, 1, 'lucky', 1, '0000-00-00'),
(7, 0, 2, 2, 1, 'lucky', 1, '0000-00-00'),
(8, 0, 3, 99, 1, 'lucky', 1, '0000-00-00'),
(9, 0, 2, 99, 1, 'lucky', 1, '0000-00-00'),
(10, 0, 1, 1, 1, 'lucky', 1, '0000-00-00'),
(11, 0, 2, 34, 1, 'lucky', 1, '0000-00-00'),
(12, 0, 1, 34, 1, 'lucky', 1, '0000-00-00'),
(13, 0, 3, 1, 1, 'lucky', 1, '0000-00-00'),
(14, 0, 2, 1, 1, 'lucky', 1, '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jenis_laundry`
--
ALTER TABLE `jenis_laundry`
  ADD PRIMARY KEY (`id_jenislaundry`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `konsumen`
--
ALTER TABLE `konsumen`
  ADD PRIMARY KEY (`kode_konsumen`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `nik` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `konsumen`
--
ALTER TABLE `konsumen`
  MODIFY `kode_konsumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
