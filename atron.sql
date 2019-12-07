-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 07 Des 2019 pada 08.11
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atron`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `npm` varchar(13) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `npm`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pernyataan_kuliah`
--

CREATE TABLE `pernyataan_kuliah` (
  `id_user` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `npm` varchar(13) NOT NULL,
  `jurusan` varchar(18) NOT NULL,
  `semester` char(2) NOT NULL,
  `nama_ortu` varchar(50) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `pangkat` varchar(15) NOT NULL,
  `instansi` varchar(50) NOT NULL,
  `keperluan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjam_kelas`
--

CREATE TABLE `pinjam_kelas` (
  `id_user` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `ruang` char(3) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `keperluan_pinjam` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pkl`
--

CREATE TABLE `pkl` (
  `id_user` int(10) NOT NULL,
  `nama_npm_pkl` varchar(100) NOT NULL,
  `perusahaan_tujuan` varchar(50) NOT NULL,
  `Alamat` text NOT NULL,
  `no` varchar(20) NOT NULL,
  `bagian` varchar(20) NOT NULL,
  `mulai` date NOT NULL,
  `selesai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `id_user` int(10) NOT NULL,
  `instansi` varchar(100) NOT NULL,
  `alamat_ins` text NOT NULL,
  `no` varchar(20) NOT NULL,
  `divisi_tujuan` varchar(100) NOT NULL,
  `keperluan` text NOT NULL,
  `nama` varchar(50) NOT NULL,
  `npm` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `npm` varchar(13) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `password_asli` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `no` varchar(20) NOT NULL,
  `poin` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `email`, `npm`, `nama`, `password`, `password_asli`, `foto`, `no`, `poin`) VALUES
(12, 'muh_idham85@yahoo.com', '17081010044', 'Idham', 'b42c73c7521b8c499f7978034ceb1007', 'idham', '1484544837134.jpg', '089661431824', 1),
(16, 'rama@gmail.com', '17081010005', 'afaf', '604b5996d9c82f4ab8538f7388096ab9', 'amar001', '053817000_1444657845-surbay.jpg', '089661431824', 2),
(17, 'king.idham@gmail.com', '17081010055', 'lukman', 'b5bbc8cf472072baffe920e4e28ee29c', 'lukman', 'BALKOT.jpg', '0987678909876', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
