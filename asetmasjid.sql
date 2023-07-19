-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jul 2023 pada 16.01
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
-- Database: `asetmasjid`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_aset`
--

CREATE TABLE `t_aset` (
  `id_aset` int(11) NOT NULL,
  `nama_aset` varchar(25) NOT NULL,
  `merk` varchar(20) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_lokasi` int(11) NOT NULL,
  `jenis` enum('Tetap','Bergerak') NOT NULL,
  `kondisi` varchar(20) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `t_aset`
--

INSERT INTO `t_aset` (`id_aset`, `nama_aset`, `merk`, `jumlah`, `id_kategori`, `id_lokasi`, `jenis`, `kondisi`, `keterangan`, `tanggal`) VALUES
(25, 'Jam Dinding', 'Seiko', 2, 4, 8, 'Tetap', 'Perlu diganti', 'Hilang Dimaling marbot yang tinggal digedung', '2023-07-19 05:19:14'),
(26, 'AC + Remot', 'Panasonic', 2, 5, 8, 'Tetap', 'Baik', 'Aman Bos', '2023-07-19 05:18:12'),
(27, 'AC + Remot', 'Mitsubishi', 2, 5, 2, 'Tetap', 'Baik', 'Masih bagus', '2023-07-19 02:02:28'),
(28, 'Kipas Angin', 'Arashi', 1, 5, 8, 'Tetap', 'Perlu diganti', 'Baut nya sudah hilang', '2023-07-19 02:08:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_kategori`
--

CREATE TABLE `t_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `t_kategori`
--

INSERT INTO `t_kategori` (`id_kategori`, `nama_kategori`) VALUES
(2, 'Perlengkapan Ibadah'),
(3, 'Perlengkapan Kebersihan'),
(4, 'Akseseoris'),
(5, 'Elektronik'),
(13, 'Storage');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_lokasi`
--

CREATE TABLE `t_lokasi` (
  `id_lokasi` int(11) NOT NULL,
  `nama_lokasi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `t_lokasi`
--

INSERT INTO `t_lokasi` (`id_lokasi`, `nama_lokasi`) VALUES
(2, 'Ruang operator'),
(3, 'Toilet'),
(4, 'Parkiran'),
(8, 'Ruang Ibadah'),
(9, 'Gudang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_users`
--

CREATE TABLE `t_users` (
  `id_users` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `level` enum('admin','pimpinan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `t_users`
--

INSERT INTO `t_users` (`id_users`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Admin', 'admin', 'admin123', 'admin'),
(2, 'Pimpinan', 'pimpinan', 'pimpinan123', 'pimpinan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_aset`
--
ALTER TABLE `t_aset`
  ADD PRIMARY KEY (`id_aset`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_lokasi` (`id_lokasi`),
  ADD KEY `id_lokasi_2` (`id_lokasi`);

--
-- Indeks untuk tabel `t_kategori`
--
ALTER TABLE `t_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `t_lokasi`
--
ALTER TABLE `t_lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indeks untuk tabel `t_users`
--
ALTER TABLE `t_users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `t_aset`
--
ALTER TABLE `t_aset`
  MODIFY `id_aset` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `t_kategori`
--
ALTER TABLE `t_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `t_lokasi`
--
ALTER TABLE `t_lokasi`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `t_users`
--
ALTER TABLE `t_users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `t_aset`
--
ALTER TABLE `t_aset`
  ADD CONSTRAINT `t_aset_ibfk_1` FOREIGN KEY (`id_lokasi`) REFERENCES `t_lokasi` (`id_lokasi`) ON DELETE CASCADE,
  ADD CONSTRAINT `t_aset_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `t_kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
