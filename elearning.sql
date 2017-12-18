-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18 Des 2017 pada 16.19
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elearning`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `idAdmin` int(11) NOT NULL,
  `namaAdmin` int(11) NOT NULL,
  `emailAdmin` int(11) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_kuis`
--

CREATE TABLE `hasil_kuis` (
  `idHasil` int(11) NOT NULL,
  `idMember` int(11) NOT NULL,
  `idSandi` int(11) NOT NULL,
  `skor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuis`
--

CREATE TABLE `kuis` (
  `idKuis` int(11) NOT NULL,
  `idSandi` int(11) NOT NULL,
  `soal` varchar(50) NOT NULL,
  `level` enum('T1','T2','T3') NOT NULL,
  `pilA` varchar(50) NOT NULL,
  `pilB` varchar(50) NOT NULL,
  `pilC` varchar(50) NOT NULL,
  `pilD` varchar(50) NOT NULL,
  `jawaban` char(2) NOT NULL,
  `lampiranKuis` varchar(100) DEFAULT NULL,
  `statusKuis` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi`
--

CREATE TABLE `materi` (
  `idMateri` int(11) NOT NULL,
  `idSandi` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `lampiranMateri` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `idMember` int(11) NOT NULL,
  `namaMember` char(50) NOT NULL,
  `jk` enum('L','P','-') NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `statusPendidikan` char(20) NOT NULL,
  `tglLahir` date NOT NULL,
  `statusOnline` enum('Ya','Tidak') NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`idMember`, `namaMember`, `jk`, `email`, `password`, `statusPendidikan`, `tglLahir`, `statusOnline`, `foto`) VALUES
(1, 'Maulana Amsor Sidik', 'L', 'maulanaamsors@gmail.com', 'e4b6849ac573cf037cc7f5cc0384c2e4', 'Kuliah', '1996-10-02', 'Tidak', 'aku.jpg'),
(5, 'maulana', '-', 'maulanaas@gmail.com', 'e4b6849ac573cf037cc7f5cc0384c2e4', 'SMK', '1996-10-02', 'Tidak', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rangking`
--

CREATE TABLE `rangking` (
  `idRangking` int(11) NOT NULL,
  `idHasil` int(11) NOT NULL,
  `idMember` int(11) NOT NULL,
  `rangking` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sandi`
--

CREATE TABLE `sandi` (
  `idSandi` int(11) NOT NULL,
  `sandi` varchar(50) NOT NULL,
  `status` enum('aktif','tidak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sandi`
--

INSERT INTO `sandi` (`idSandi`, `sandi`, `status`) VALUES
(1, 'Morse', 'tidak'),
(2, 'Semaphore', 'aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indexes for table `hasil_kuis`
--
ALTER TABLE `hasil_kuis`
  ADD PRIMARY KEY (`idHasil`);

--
-- Indexes for table `kuis`
--
ALTER TABLE `kuis`
  ADD PRIMARY KEY (`idKuis`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`idMateri`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`idMember`);

--
-- Indexes for table `rangking`
--
ALTER TABLE `rangking`
  ADD PRIMARY KEY (`idRangking`);

--
-- Indexes for table `sandi`
--
ALTER TABLE `sandi`
  ADD PRIMARY KEY (`idSandi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hasil_kuis`
--
ALTER TABLE `hasil_kuis`
  MODIFY `idHasil` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kuis`
--
ALTER TABLE `kuis`
  MODIFY `idKuis` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `idMateri` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `idMember` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `rangking`
--
ALTER TABLE `rangking`
  MODIFY `idRangking` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sandi`
--
ALTER TABLE `sandi`
  MODIFY `idSandi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
