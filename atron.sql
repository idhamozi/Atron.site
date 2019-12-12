-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 12 Des 2019 pada 16.14
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
-- Struktur dari tabel `suket_kuliah`
--

CREATE TABLE `suket_kuliah` (
  `id_skuliah` int(10) NOT NULL,
  `tahunakademik` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `npm` varchar(13) NOT NULL,
  `jurusan` varchar(18) NOT NULL,
  `semester` char(2) NOT NULL,
  `nama_ortu` varchar(50) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `pangkat` varchar(15) NOT NULL,
  `instansi` varchar(50) NOT NULL,
  `keperluan` text NOT NULL,
  `foto_pembayaran` varchar(100) NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `poin` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `id_skeluar` int(10) NOT NULL,
  `tahunakademik` varchar(10) NOT NULL,
  `instansi` varchar(100) NOT NULL,
  `alamat_ins` text NOT NULL,
  `no_ins` varchar(20) NOT NULL,
  `divisi_tujuan` varchar(100) NOT NULL,
  `keperluan` text NOT NULL,
  `nama` varchar(50) NOT NULL,
  `npm` varchar(13) NOT NULL,
  `nama_teman` varchar(50) NOT NULL,
  `npm_teman` varchar(13) NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `poin` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_pkl`
--

CREATE TABLE `surat_pkl` (
  `id_spkl` int(10) NOT NULL,
  `tahunakademik` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `npm` varchar(13) NOT NULL,
  `nama_teman` varchar(50) NOT NULL,
  `npm_teman` varchar(13) NOT NULL,
  `instansi` varchar(50) NOT NULL,
  `alamat_ins` text NOT NULL,
  `no_ins` varchar(20) NOT NULL,
  `divisi_tujuan` varchar(20) NOT NULL,
  `mulai` date NOT NULL,
  `selesai` date NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `poin` int(3) NOT NULL DEFAULT '0'
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
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `suket_kuliah`
--
ALTER TABLE `suket_kuliah`
  ADD PRIMARY KEY (`id_skuliah`),
  ADD KEY `fk` (`npm`);

--
-- Indexes for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`id_skeluar`),
  ADD KEY `fk` (`npm`) USING BTREE;

--
-- Indexes for table `surat_pkl`
--
ALTER TABLE `surat_pkl`
  ADD PRIMARY KEY (`id_spkl`),
  ADD KEY `npm` (`npm`) USING BTREE;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `npm` (`npm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `suket_kuliah`
--
ALTER TABLE `suket_kuliah`
  MODIFY `id_skuliah` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  MODIFY `id_skeluar` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `surat_pkl`
--
ALTER TABLE `surat_pkl`
  MODIFY `id_spkl` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `suket_kuliah`
--
ALTER TABLE `suket_kuliah`
  ADD CONSTRAINT `suket_kuliah_ibfk_1` FOREIGN KEY (`npm`) REFERENCES `user` (`npm`);

--
-- Ketidakleluasaan untuk tabel `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD CONSTRAINT `surat_keluar_ibfk_1` FOREIGN KEY (`npm`) REFERENCES `user` (`npm`);

--
-- Ketidakleluasaan untuk tabel `surat_pkl`
--
ALTER TABLE `surat_pkl`
  ADD CONSTRAINT `surat_pkl_ibfk_1` FOREIGN KEY (`npm`) REFERENCES `user` (`npm`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
