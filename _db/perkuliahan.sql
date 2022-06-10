-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jun 2022 pada 12.03
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perkuliahan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `id` int(4) NOT NULL,
  `kode_dosen` varchar(5) NOT NULL,
  `nama_dosen` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `no_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_dosen`
--

INSERT INTO `tb_dosen` (`id`, `kode_dosen`, `nama_dosen`, `jenis_kelamin`, `no_hp`) VALUES
(2, 'kd001', 'subakti herman, M.Kom', 'laki-laki', '081271826099'),
(3, 'kd002', 'sanrizk, M.Kom', 'laki-laki', '088296486042'),
(6, 'kd004', 'Neneng Windarti, M.Ikom', 'perempuan', '089911235521');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `id` int(11) NOT NULL,
  `kode_jadwal` varchar(5) NOT NULL,
  `kode_matkul` varchar(5) NOT NULL,
  `kode_dosen` varchar(5) NOT NULL,
  `ruangan` varchar(10) NOT NULL,
  `jam_jadwal` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_jadwal`
--

INSERT INTO `tb_jadwal` (`id`, `kode_jadwal`, `kode_matkul`, `kode_dosen`, `ruangan`, `jam_jadwal`) VALUES
(1, 'kj080', 'mk003', 'kd002', 'ac01', '1654583040');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `nim` varchar(10) NOT NULL,
  `nama_mahasiswa` varchar(35) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tempat_tinggal` varchar(50) NOT NULL,
  `program_studi` varchar(30) NOT NULL,
  `konsentrasi` varchar(70) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `alasan` varchar(100) NOT NULL,
  `tanggal_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`nim`, `nama_mahasiswa`, `tanggal_lahir`, `jenis_kelamin`, `tempat_tinggal`, `program_studi`, `konsentrasi`, `kelas`, `alasan`, `tanggal_input`) VALUES
('1121130025', 'supron', '2002-02-20', 'laki-laki', 'tenjo', 'teknik informatika', 'computer networking', 'malam', 'kuliah', '2022-06-05'),
('1121130040', 'ikhsan rizki', '2001-09-20', 'laki-laki', 'tigaraksa', 'teknik informatika', 'software engineering', 'malam', 'Ingin dapat ijazah', '2022-06-04'),
('1121130200', 'Mutia', '2005-02-01', 'perempuan', 'pasar kemis', 'sistem informasi', 'business intelligence & management support system', 'shift', 'kuliah aja', '2022-06-05'),
('1121130290', 'sanrizk', '2012-08-09', 'Perempuan', 'bekasi', 'sistem informasi', 'e-commerce', 'malam', 'b aja', '2022-06-05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_matkul`
--

CREATE TABLE `tb_matkul` (
  `id` int(11) NOT NULL,
  `kode_matkul` varchar(5) NOT NULL,
  `mata_kuliah` varchar(40) NOT NULL,
  `sks` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_matkul`
--

INSERT INTO `tb_matkul` (`id`, `kode_matkul`, `mata_kuliah`, `sks`) VALUES
(1, 'mk001', 'pemrograman web 1', 3),
(2, 'mk002', 'kalkulus 1', 2),
(4, 'mk003', 'kalkulus 3', 4);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nid` (`kode_dosen`);

--
-- Indeks untuk tabel `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_jadwal` (`kode_jadwal`),
  ADD KEY `kode_matkul` (`kode_matkul`),
  ADD KEY `tb_jadwal_ibfk_2` (`kode_dosen`);

--
-- Indeks untuk tabel `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `tb_matkul`
--
ALTER TABLE `tb_matkul`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_matkul` (`kode_matkul`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_dosen`
--
ALTER TABLE `tb_dosen`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_matkul`
--
ALTER TABLE `tb_matkul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD CONSTRAINT `tb_jadwal_ibfk_1` FOREIGN KEY (`kode_matkul`) REFERENCES `tb_matkul` (`kode_matkul`),
  ADD CONSTRAINT `tb_jadwal_ibfk_2` FOREIGN KEY (`kode_dosen`) REFERENCES `tb_dosen` (`kode_dosen`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
