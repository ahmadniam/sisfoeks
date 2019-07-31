-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2017 at 05:08 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `x4jpo`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_ekstra`
--

CREATE TABLE IF NOT EXISTS `data_ekstra` (
  `kode_ekstra` varchar(11) NOT NULL,
  `nama_ekstra` varchar(12) NOT NULL,
  `pembina_ekstra` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_pembina`
--

CREATE TABLE IF NOT EXISTS `data_pembina` (
  `kode_pembina` varchar(10) NOT NULL DEFAULT '',
  `nama_pembina` varchar(30) NOT NULL,
  `nip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE IF NOT EXISTS `data_siswa` (
  `nis` int(11) NOT NULL,
  `nama_siswa` varchar(30) NOT NULL,
  `kelas` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_siswa`
--

INSERT INTO `data_siswa` (`nis`, `nama_siswa`, `kelas`) VALUES
(173001, 'Ahmad Noviandani', 'X'),
(173002, 'Abdul Majid', 'X'),
(173003, 'Clarissa', 'X'),
(173004, 'Devina', 'X'),
(173006, 'Fajri', 'X');

-- --------------------------------------------------------

--
-- Table structure for table `jurnal`
--

CREATE TABLE IF NOT EXISTS `jurnal` (
  `kode_ekstra` varchar(10) NOT NULL,
  `hari` varchar(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `nama_pembina` varchar(30) NOT NULL,
  `jenis_kegiatan` varchar(20) NOT NULL,
  `Materi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kehadiran_pembina`
--

CREATE TABLE IF NOT EXISTS `kehadiran_pembina` (
  `hari_tanggal` datetime NOT NULL,
  `kode_pembina` varchar(10) NOT NULL,
  `nama_pembina` varchar(30) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kehadiran_siswa`
--

CREATE TABLE IF NOT EXISTS `kehadiran_siswa` (
  `kode_ekstra` varchar(10) NOT NULL,
  `nis` int(11) NOT NULL,
  `nama_siswa` varchar(30) NOT NULL,
  `keterangan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'ppl_niam', 'niamniam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_ekstra`
--
ALTER TABLE `data_ekstra`
 ADD PRIMARY KEY (`kode_ekstra`);

--
-- Indexes for table `data_pembina`
--
ALTER TABLE `data_pembina`
 ADD PRIMARY KEY (`kode_pembina`);

--
-- Indexes for table `data_siswa`
--
ALTER TABLE `data_siswa`
 ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `jurnal`
--
ALTER TABLE `jurnal`
 ADD PRIMARY KEY (`kode_ekstra`);

--
-- Indexes for table `kehadiran_pembina`
--
ALTER TABLE `kehadiran_pembina`
 ADD PRIMARY KEY (`kode_pembina`);

--
-- Indexes for table `kehadiran_siswa`
--
ALTER TABLE `kehadiran_siswa`
 ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `jurnal`
--
ALTER TABLE `jurnal`
ADD CONSTRAINT `jurnal_ibfk_1` FOREIGN KEY (`kode_ekstra`) REFERENCES `data_ekstra` (`kode_ekstra`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kehadiran_pembina`
--
ALTER TABLE `kehadiran_pembina`
ADD CONSTRAINT `kehadiran_pembina_ibfk_1` FOREIGN KEY (`kode_pembina`) REFERENCES `data_pembina` (`kode_pembina`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kehadiran_siswa`
--
ALTER TABLE `kehadiran_siswa`
ADD CONSTRAINT `kehadiran_siswa_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `data_siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
