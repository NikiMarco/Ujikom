-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jan 2024 pada 16.31
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sertifikat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_peserta`
--

CREATE TABLE `tb_peserta` (
  `Id_peserta` int(16) NOT NULL,
  `Kd_skema` varchar(16) NOT NULL,
  `Nm_peserta` varchar(255) NOT NULL,
  `Jekel` varchar(16) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `No_hp` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_peserta`
--

INSERT INTO `tb_peserta` (`Id_peserta`, `Kd_skema`, `Nm_peserta`, `Jekel`, `Alamat`, `No_hp`) VALUES
(2, 'SKM-001', 'Niki Marco', 'Laki-laki', 'Bandung', '083617263678'),
(6, 'SKM-001', 'Miftahul Rizal', 'Laki-laki', 'Banten', '083672727632'),
(7, 'SKM-002', 'Irgi Mahendra', 'Laki-laki', 'Cimahi', '089999999127'),
(8, 'SKM-003', 'Vina Agustina', 'Perempuan', 'Pangalengan', '081263553136');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_skema`
--

CREATE TABLE `tb_skema` (
  `Kd_skema` varchar(16) NOT NULL,
  `Nm_skema` varchar(255) NOT NULL,
  `Jenis` varchar(255) NOT NULL,
  `Jml_unit` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_skema`
--

INSERT INTO `tb_skema` (`Kd_skema`, `Nm_skema`, `Jenis`, `Jml_unit`) VALUES
('SKM-001', 'Junior Web Developer', 'KKNI', 6),
('SKM-002', 'Digital Marketing', 'Klaster', 10),
('SKM-003', 'Desainer Multimedia Muda', 'KKNI', 10),
('SKM-004', 'Network Administrator Muda', 'KKNI', 5);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_peserta`
--
ALTER TABLE `tb_peserta`
  ADD PRIMARY KEY (`Id_peserta`),
  ADD KEY `Kd_skema` (`Kd_skema`);

--
-- Indeks untuk tabel `tb_skema`
--
ALTER TABLE `tb_skema`
  ADD PRIMARY KEY (`Kd_skema`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_peserta`
--
ALTER TABLE `tb_peserta`
  MODIFY `Id_peserta` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_peserta`
--
ALTER TABLE `tb_peserta`
  ADD CONSTRAINT `tb_peserta_ibfk_1` FOREIGN KEY (`Kd_skema`) REFERENCES `tb_skema` (`Kd_skema`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
