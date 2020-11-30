-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28 Apr 2020 pada 12.29
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `wilayah_asalsekolah` varchar(128) NOT NULL,
  `alamat` text NOT NULL,
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
  `kesehatan` varchar(128) NOT NULL,
  `raport` varchar(10) NOT NULL,
  `kegiatan` varchar(128) NOT NULL,
  `email_aktif` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar`
--

INSERT INTO `daftar` (`nisn`, `nama`, `asal_sekolah`, `wilayah_asalsekolah`, `alamat`, `tanggal_lahir`, `jenis_kelamin`, `tempat_lahir`, `agama`, `golongan_darah`, `tinggal`, `rt`, `rw`, `desa`, `kecamatan`, `kabupaten`, `provinsi`, `kesehatan`, `raport`, `kegiatan`, `email_aktif`) VALUES
('0021345672', 'Tatang Rahayu', 'MTs Rumnawati', 'Dalam Kabupaten', 'Mekarsari', '2002-09-19', 'Laki-Laki', 'Subang', 'Islam', 'A', 'Orang Tua Kandung', '08', '03', 'Sarireja', 'Jalancagak', 'Subang', 'Jawa Barat', 'Sehat baik fisik maupun mental', '7', 'Akademis', 'markjulian404@gmail.com'),
('1234567890', 'wew', 'wewe', 'Luar Kabupaten', 'sdsd', '2021-04-06', 'Laki-Laki', 'Subangs', 'Islam', 'A', 'Orang Tua Kandung', '23', '23', 'Sarirejas', 'Jalancagaks', 'Subangs', 'Jawa Barats', 'Sehat baik fisik maupun mental', '75', 'Akademis', 'markjulian404@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `isi_pesan` text NOT NULL,
  `tanggal` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id`, `nama`, `email`, `isi_pesan`, `tanggal`) VALUES
(15, 'Tiara', 'tiaraandita432@gmail.com', 'Adminnya Ganteng ', '25 April 2020');

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
(7, '1234567890', '123456', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`nisn`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
