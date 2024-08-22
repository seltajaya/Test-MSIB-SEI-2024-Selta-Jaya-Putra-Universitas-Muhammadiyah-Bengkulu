-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Agu 2024 pada 16.25
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
-- Database: `proyek_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi`
--

CREATE TABLE `lokasi` (
  `id` bigint(20) NOT NULL,
  `nama_lokasi` varchar(255) NOT NULL,
  `negara` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `lokasi`
--

INSERT INTO `lokasi` (`id`, `nama_lokasi`, `negara`, `provinsi`, `kota`, `created_at`) VALUES
(1, 'Kantor Pusat', 'Indonesia', 'Jawa Barat', 'Bandung', '2024-08-18 02:40:36'),
(2, 'Pabrik A', 'Indonesia', 'Jawa Timur', 'Surabaya', '2024-08-17 13:05:53'),
(3, 'Gudang B', 'Indonesia', 'Jawa Tengah', 'Semarang', '2024-08-17 13:05:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `proyek`
--

CREATE TABLE `proyek` (
  `id` bigint(20) NOT NULL,
  `nama_proyek` varchar(255) NOT NULL,
  `client` varchar(255) NOT NULL,
  `tgl_mulai` datetime(6) DEFAULT NULL,
  `tgl_selesai` datetime(6) DEFAULT NULL,
  `pimpinan_proyek` varchar(255) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `proyek`
--

INSERT INTO `proyek` (`id`, `nama_proyek`, `client`, `tgl_mulai`, `tgl_selesai`, `pimpinan_proyek`, `keterangan`, `created_at`) VALUES
(1, 'Proyek B', 'Client X', '2024-08-20 07:00:00.000000', '2024-08-22 07:00:00.000000', 'John Doe', 'Deskripsi Proyek B', '2024-08-18 02:33:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `proyek_lokasi`
--

CREATE TABLE `proyek_lokasi` (
  `proyek_id` bigint(20) NOT NULL,
  `lokasi_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `proyek_lokasi`
--

INSERT INTO `proyek_lokasi` (`proyek_id`, `lokasi_id`) VALUES
(1, 1),
(1, 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `proyek`
--
ALTER TABLE `proyek`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `proyek_lokasi`
--
ALTER TABLE `proyek_lokasi`
  ADD PRIMARY KEY (`proyek_id`,`lokasi_id`),
  ADD KEY `lokasi_id` (`lokasi_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `proyek`
--
ALTER TABLE `proyek`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `proyek_lokasi`
--
ALTER TABLE `proyek_lokasi`
  ADD CONSTRAINT `proyek_lokasi_ibfk_1` FOREIGN KEY (`proyek_id`) REFERENCES `proyek` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `proyek_lokasi_ibfk_2` FOREIGN KEY (`lokasi_id`) REFERENCES `lokasi` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
