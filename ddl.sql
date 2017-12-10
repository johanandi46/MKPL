-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2017 at 04:05 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_pengiriman`
--

CREATE TABLE `detail_pengiriman` (
  `resi` char(10) NOT NULL,
  `nama_pengirim` varchar(50) NOT NULL,
  `lokasi_pengirim` varchar(50) NOT NULL,
  `nama_penerima` varchar(50) NOT NULL,
  `lokasi_penerima` varchar(50) NOT NULL,
  `berat` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `status_pengiriman` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_pengiriman`
--

INSERT INTO `detail_pengiriman` (`resi`, `nama_pengirim`, `lokasi_pengirim`, `nama_penerima`, `lokasi_penerima`, `berat`, `harga`, `status_pengiriman`) VALUES
('0123456789', 'Pengirim', 'Lowokwaru', 'Penerima', 'Klojen', 1, 15000, 'Dalam Pengiriman'),
('4153608729', 'Pengirim 2', 'Lowokwaru', 'Penerima 2', 'Lowokwaru', 3, 2700, 'Dalam Pengiriman'),
('9108652374', 'Pengirim 3', 'Samaan', 'Penerima 3', 'Lowokwaru', 2, 5000, 'Dalam Pengiriman');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_paket`
--

CREATE TABLE `jenis_paket` (
  `jenis_paket` varchar(40) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_paket`
--

INSERT INTO `jenis_paket` (`jenis_paket`, `harga`) VALUES
('Reguler', 300),
('Express', 500);

-- --------------------------------------------------------

--
-- Table structure for table `keluhan`
--

CREATE TABLE `keluhan` (
  `resi` char(10) NOT NULL,
  `nama_pengirim` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `berat` int(11) NOT NULL,
  `jenis_keluhan` varchar(50) NOT NULL,
  `keluhan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log_barang`
--

CREATE TABLE `log_barang` (
  `resi` char(10) NOT NULL,
  `waktu` datetime NOT NULL,
  `lokasi_barang` varchar(50) NOT NULL,
  `status_pengiriman` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_barang`
--

INSERT INTO `log_barang` (`resi`, `waktu`, `lokasi_barang`, `status_pengiriman`) VALUES
('0123456789', '2017-06-07 20:43:16', 'Lowokwaru', 'Dalam Pengiriman'),
('4153608729', '2017-06-08 02:17:06', 'Lowokwaru', 'Dalam Pengiriman'),
('9108652374', '2017-06-08 02:18:06', 'Samaan', 'Dalam Pengiriman'),
('0123456789', '2017-06-08 02:57:46', 'Klojen', 'Dalam Pengiriman');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `lokasi_asal` varchar(50) NOT NULL,
  `lokasi_tujuan` varchar(50) NOT NULL,
  `jarak` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`lokasi_asal`, `lokasi_tujuan`, `jarak`) VALUES
('Lowokwaru', 'Klojen', 10),
('Lowokwaru', 'Samaan', 5),
('Samaan', 'Lowokwaru', 5),
('Samaan', 'Klojen', 5),
('Klojen', 'Lowokwaru', 10),
('Klojen', 'Samaan', 5),
('Lowokwaru', 'Lowokwaru', 3),
('Klojen', 'Klojen', 3),
('Samaan', 'Samaan', 2);