-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Des 2020 pada 14.30
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar`
--

CREATE TABLE `daftar` (
  `nisn` varchar(12) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `asal_sekolah` varchar(128) NOT NULL,
  `kampung` text NOT NULL,
  `tanggal_lahir` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `tempat_lahir` varchar(128) NOT NULL,
  `agama` varchar(128) NOT NULL,
  `golongan_darah` varchar(5) NOT NULL,
  `tinggal` varchar(128) NOT NULL,
  `rt` varchar(10) NOT NULL,
  `rw` varchar(10) NOT NULL,
  `desa` varchar(128) NOT NULL,
  `kecamatan` varchar(128) NOT NULL,
  `kabupaten` varchar(128) NOT NULL,
  `provinsi` varchar(128) NOT NULL,
  `raport` varchar(10) NOT NULL,
  `kegiatan` varchar(128) NOT NULL,
  `email_aktif` varchar(128) NOT NULL,
  `kejuruan` varchar(128) NOT NULL,
  `pondok` varchar(128) NOT NULL,
  `nama_ayah` varchar(128) NOT NULL,
  `nik_ayah` varchar(128) NOT NULL,
  `nama_ibu` varchar(128) NOT NULL,
  `nik_ibu` varchar(128) NOT NULL,
  `nama_wali` varchar(128) NOT NULL,
  `nik_wali` varchar(128) NOT NULL,
  `pend_ayah` varchar(128) NOT NULL,
  `pend_ibu` varchar(128) NOT NULL,
  `pend_wali` varchar(128) NOT NULL,
  `penghasilan` varchar(128) NOT NULL,
  `alamat_ortu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar`
--

INSERT INTO `daftar` (`nisn`, `nama`, `asal_sekolah`, `kampung`, `tanggal_lahir`, `jenis_kelamin`, `tempat_lahir`, `agama`, `golongan_darah`, `tinggal`, `rt`, `rw`, `desa`, `kecamatan`, `kabupaten`, `provinsi`, `raport`, `kegiatan`, `email_aktif`, `kejuruan`, `pondok`, `nama_ayah`, `nik_ayah`, `nama_ibu`, `nik_ibu`, `nama_wali`, `nik_wali`, `pend_ayah`, `pend_ibu`, `pend_wali`, `penghasilan`, `alamat_ortu`) VALUES
('1234567890', 'Tatang', 'Mts', 'Mekarsari', '2020-12-17', 'Laki-Laki', 'Subang', 'Islam', '-', 'Orang Tua Kandung', '89', '008', 'Sarireja', 'Jalancagak', 'Jakarta', 'jabar', '80', 'Akademis', 'markjulian404@gmail.com', 'Rekayasa Perangkat Lunak', 'Siap', 'Carlan', '1234567891', 'Marpuah', '1234567891', 'Tidak Ada', 'Tidak Ada', 'SLTA', 'SLTA', 'Tidak Ada', '2000000', 'Sama jng siswa'),
('1234567891', 'Mark Julian', 'Mts', 'Mekarsari', '2020-12-17', 'Laki-Laki', 'Subang', 'Islam', 'A', 'Orang Tua Kandung', '95', '09', 'Sarireja', 'Jalancagak', 'Jakarta', 'jabar', '80', 'Akademis', 'markjulian404@gmail.com', 'Rekayasa Perangkat Lunak', 'Siap', 'Carlan', '1234567891', 'Marpuah', '1234567891', 'Tidak Ada', 'Tidak Ada', 'SD', 'SD', 'Tidak Ada', '2000000', 'Jalancagak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `isi_pesan` text NOT NULL,
  `tanggal` varchar(128) NOT NULL,
  `user_agent` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id`, `nama`, `email`, `isi_pesan`, `tanggal`, `user_agent`) VALUES
(15, 'Tiara', 'tiaraandita432@gmail.com', 'Adminnya Ganteng ', '25 April 2020', ''),
(16, 'Tatang', 'markjulian404', 'sdasad', '11 December 2020', ''),
(17, 'Mark Julian', 'markjulian404@gmail.com', 'asdasdasdas', '11 December 2020', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.75 Safari/537.36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(6, 'admin', 'admin', '1'),
(9, '1234567891', '1234567891', '2'),
(10, '1234567890', '1234567890', '2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`nisn`);

--
-- Indeks untuk tabel `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
