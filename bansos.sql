-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2020 at 03:27 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bansos`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `foto` varchar(300) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hak_akses` int(11) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `foto`, `email`, `password`, `hak_akses`, `status`) VALUES
(2, 'Administrator', NULL, 'admin@lpksi.or.id', '25ed1bcb423b0b7200f485fc5ff71c8e', 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE IF NOT EXISTS `pengaduan` (
`id` int(11) NOT NULL,
  `nama_pengadu` varchar(200) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `judul_pengaduan` varchar(200) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL,
  `status` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profil_web`
--

CREATE TABLE IF NOT EXISTS `profil_web` (
`id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `deskripsi` text,
  `keyword` text,
  `url` varchar(50) DEFAULT NULL,
  `alamat` text,
  `email` varchar(100) DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL,
  `kode_pos` varchar(10) DEFAULT NULL,
  `nama_desa` varchar(100) DEFAULT NULL,
  `nama_kecamatan` varchar(100) DEFAULT NULL,
  `nama_kabupaten` varchar(100) DEFAULT NULL,
  `nama_provinsi` varchar(100) DEFAULT NULL,
  `facebook` varchar(250) DEFAULT NULL,
  `twitter` varchar(250) DEFAULT NULL,
  `instagram` varchar(250) DEFAULT NULL,
  `googleplus` varchar(250) DEFAULT NULL,
  `youtube` varchar(250) DEFAULT NULL,
  `googlemap` varchar(500) DEFAULT NULL,
  `bg` varchar(500) NOT NULL,
  `logo` varchar(100) DEFAULT NULL,
  `favicon` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil_web`
--

INSERT INTO `profil_web` (`id`, `nama`, `deskripsi`, `keyword`, `url`, `alamat`, `email`, `telp`, `kode_pos`, `nama_desa`, `nama_kecamatan`, `nama_kabupaten`, `nama_provinsi`, `facebook`, `twitter`, `instagram`, `googleplus`, `youtube`, `googlemap`, `bg`, `logo`, `favicon`) VALUES
(2, 'LPKSI - Lembaga Pengkajian Kebijakan Strategis Indonesia', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.\r\n\r\n', '#', 'https://www.lpksi.com', 'Perum Metland Cileungsi, Blok E.5 No 16/17 Cileungsi – Cibubur Timur', ' info@lpksi.org', '+62 21 2921 2218', '84354', 'Lantung', 'Lantung', 'Sumbawa', 'Nusa Tenggara Barat', '#', '#', '#', NULL, '#', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1215.0499531098442!2d117.52351656185616!3d-8.757274389507824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcb9f373479f61d%3A0x99a738fcab1c47b2!2sKantor%20Desa%20Lantung%20Kec.%20Lantung!5e1!3m2!1sid!2sid!4v1570080191811!5m2!1sid!2sid', '/lpksi/assets/konten/files/logo/1.png', '/lpksi/assets/konten/files/logo/logo-lpksi.png', '/lpksi/assets/konten/files/logo/logo-lpksi2.png');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
`id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `judul`, `foto`) VALUES
(4, 'slider', '/lpksi/assets/konten/files/galeri/IMG_4621.jpg'),
(6, 'Slider 3', '/lpksi/assets/konten/files/logo/1.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profil_web`
--
ALTER TABLE `profil_web`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `profil_web`
--
ALTER TABLE `profil_web`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
