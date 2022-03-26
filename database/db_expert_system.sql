-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 23, 2022 at 04:33 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_expert_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `analisa`
--

CREATE TABLE `analisa` (
  `id_analisa` int(11) NOT NULL,
  `M` varchar(255) DEFAULT NULL,
  `kode` varchar(255) DEFAULT NULL,
  `nilai` varchar(255) DEFAULT NULL,
  `id_pengguna` int(11) DEFAULT NULL,
  `tanggal_diagnosa` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detailhasilanalisa`
--

CREATE TABLE `detailhasilanalisa` (
  `idDetailHasilAnalisa` int(11) NOT NULL,
  `idHasilAnalisa` int(11) DEFAULT NULL,
  `penyakit` text DEFAULT NULL,
  `idPengguna` int(11) DEFAULT NULL,
  `persentase` varchar(255) NOT NULL,
  `keterangan_penyakit` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detailhasilanalisa`
--

INSERT INTO `detailhasilanalisa` (`idDetailHasilAnalisa`, `idHasilAnalisa`, `penyakit`, `idPengguna`, `persentase`, `keterangan_penyakit`) VALUES
(1, 2, 'Hepatitis', 1, '', ''),
(2, 3, 'Obesitas', 2, '', ''),
(3, 4, 'Gangguan Pernapasan (ISPA)', 4, '', ''),
(4, 5, 'Obesitas', 3, '', ''),
(5, 6, 'Penyakit Jantung (Syndrom Koroner)', 6, '', ''),
(6, 7, 'Asam Urat', 5, '', ''),
(7, 8, 'Hepatitis', 7, '', ''),
(8, 9, 'Asam Urat', 8, '', ''),
(9, 10, 'Penyakit Jantung (Syndrom Koroner)', 9, '', ''),
(10, 11, 'Hepatitis', 9, '', ''),
(11, 11, 'Darah Rendah', 9, '', ''),
(12, 12, 'Gangguan Pernapasan (ISPA)', 9, '', ''),
(13, 12, 'Tipes', 9, '', ''),
(14, 13, 'Obesitas', 11, '', ''),
(15, 14, 'Tipes', 12, '', ''),
(16, 15, 'Tipes', 10, '', ''),
(17, 16, 'Asam Urat', 12, '', ''),
(18, 17, 'Gangguan Pernapasan (ISPA)', 13, '', ''),
(19, 18, 'Darah Rendah', 14, '', ''),
(20, 19, 'Tipes', 15, '', ''),
(21, 20, 'Asam Urat', 16, '', ''),
(22, 21, 'Gangguan Pernapasan (ISPA)', 18, '', ''),
(23, 22, 'Gangguan Pernapasan (ISPA)', 18, '', ''),
(24, 23, 'Darah Rendah', 19, '', ''),
(25, 24, 'Dispepsia', 20, '', ''),
(26, 25, 'Gangguan Pernapasan (ISPA)', 21, '', ''),
(27, 26, 'Darah Rendah', 22, '', ''),
(28, 27, 'Tipes', 23, '', ''),
(29, 28, 'Hepatitis', 22, '', ''),
(30, 29, 'Penyakit Jantung (Syndrom Koroner)\r\n', 22, '', ''),
(31, 30, 'Asam Urat', 24, '', ''),
(32, 31, 'Gangguan Pernapasan (ISPA)', 25, '', ''),
(33, 32, 'Asam Urat', 26, '', ''),
(34, 33, 'Dispepsia', 29, '', ''),
(35, 34, 'Hepatitis', 28, '', ''),
(36, 35, 'Dispepsia', 28, '', ''),
(37, 36, 'Dispepsia', 31, '', ''),
(38, 37, 'Penyakit Jantung (Syndrom Koroner)\r\n', 27, '', ''),
(39, 38, 'Dispepsia', 27, '', ''),
(40, 39, 'Darah Rendah', 33, '', ''),
(41, 40, 'Gangguan Pernapasan (ISPA)', 30, '', ''),
(42, 41, 'Hepatitis', 32, '', ''),
(43, 42, 'Darah Rendah', 34, '', ''),
(44, 43, 'Penyakit Jantung (Syndrom Koroner)\r\n', 34, '', ''),
(45, 44, 'Tipes', 34, '', ''),
(46, 45, 'Dispepsia', 35, '', ''),
(47, 46, 'Dispepsia', 36, '', ''),
(48, 47, 'Asam Urat', 38, '', ''),
(49, 48, 'Dispepsia', 37, '', ''),
(50, 49, 'Penyakit Jantung (Syndrom Koroner)\r\n', 39, '', ''),
(51, 50, 'Tipes', 41, '', ''),
(52, 51, 'Dispepsia', 40, '', ''),
(53, 52, 'Tipes', 42, '', ''),
(54, 53, 'Dispepsia', 42, '', ''),
(55, 54, 'Penyakit Jantung (Syndrom Koroner)\r\n', 42, '', ''),
(56, 55, 'Obesitas', 43, '', ''),
(57, 56, 'Penyakit Jantung (Syndrom Koroner)\r\n', 44, '', ''),
(58, 57, 'Dispepsia', 45, '', ''),
(59, 58, 'Asam Urat', 47, '', ''),
(60, 59, 'Dispepsia', 46, '', ''),
(61, 60, 'Dispepsia', 46, '', ''),
(62, 61, 'Dispepsia', 46, '', ''),
(63, 62, 'Asam Urat', 49, '', ''),
(64, 62, 'Penyakit Jantung (Syndrom Koroner)', 49, '', ''),
(65, 63, 'Obesitas', 1, '', ''),
(66, 64, 'Hepatitis', 50, '', ''),
(67, 65, 'Tipes', 51, '', ''),
(68, 66, 'Dispepsia', 52, '', ''),
(69, 67, 'Gangguan Pernapasan (ISPA)', 53, '', ''),
(70, 68, 'Gangguan Pernapasan (ISPA)', 53, '', ''),
(71, 69, 'Obesitas', 54, '', ''),
(72, 70, 'Tipes', 56, '', ''),
(73, 71, 'Dispepsia', 55, '', ''),
(74, 72, 'Tipes', 57, '', ''),
(75, 73, 'Hepatitis', 56, '', ''),
(76, 74, 'Asam Urat', 58, '', ''),
(77, 75, 'Darah Rendah', 59, '', ''),
(78, 76, 'Obesitas', 60, '', ''),
(79, 77, 'Hepatitis', 60, '', ''),
(80, 78, 'Obesitas', 60, '', ''),
(81, 79, 'Obesitas', 60, '', ''),
(82, 80, 'Asam Urat', 60, '', ''),
(83, 81, 'Darah Rendah', 61, '', ''),
(84, 81, 'Penyakit Jantung (Syndrom Koroner)', 61, '', ''),
(85, 82, 'Tipes', 62, '', ''),
(86, 83, 'Hepatitis', 63, '', ''),
(87, 84, 'Obesitas', 65, '', ''),
(88, 85, 'Asam Urat', 65, '', ''),
(89, 86, 'Tipes', 65, '', ''),
(90, 87, 'Obesitas', 65, '', ''),
(91, 88, 'Hepatitis', 64, '', ''),
(92, 89, 'Hepatitis', 64, '', ''),
(93, 90, 'Tipes', 64, '', ''),
(94, 91, 'Obesitas', 66, '', ''),
(95, 92, 'Hepatitis', 66, '', ''),
(96, 93, 'Penyakit Jantung (Syndrom Koroner)\r\n', 66, '', ''),
(97, 94, 'Tipes', 66, '', ''),
(98, 95, 'Hepatitis', 67, '', ''),
(99, 96, 'Gangguan Pernapasan (ISPA)', 67, '', ''),
(100, 97, 'Asam Urat', 68, '', ''),
(101, 98, 'Gangguan Pernapasan (ISPA)', 69, '', ''),
(102, 99, 'Obesitas', 69, '', ''),
(103, 100, 'Penyakit Jantung (Syndrom Koroner)', 70, '', ''),
(104, 101, 'Gangguan Pernapasan (ISPA)', 72, '', ''),
(105, 102, 'Obesitas', 72, '', ''),
(106, 103, 'Asam Urat', 71, '', ''),
(107, 104, 'Darah Rendah', 71, '', ''),
(108, 105, 'Penyakit Jantung (Syndrom Koroner)', 71, '', ''),
(109, 105, 'Tipes', 71, '', ''),
(110, 106, 'Penyakit Jantung (Syndrom Koroner)', 73, '', ''),
(111, 107, 'Obesitas', 73, '', ''),
(112, 108, 'Obesitas', 73, '', ''),
(113, 109, 'Asam Urat', 74, '', ''),
(114, 110, 'Obesitas', 73, '', ''),
(115, 110, 'Darah Rendah', 73, '', ''),
(116, 111, 'Darah Rendah', 75, '', ''),
(117, 112, 'Gangguan Pernapasan (ISPA)', 75, '', ''),
(118, 113, 'Obesitas', 76, '', ''),
(119, 114, 'Penyakit Jantung (Syndrom Koroner)', 76, '', ''),
(120, 115, 'Gangguan Pernapasan (ISPA)', 78, '', ''),
(121, 116, 'Dispepsia', 77, '', ''),
(122, 117, 'Dispepsia', 78, '', ''),
(123, 118, 'Penyakit Jantung (Syndrom Koroner)', 77, '', ''),
(124, 119, 'Tipes', 79, '', ''),
(125, 120, 'Tipes', 80, '', ''),
(126, 121, 'Obesitas', 81, '', ''),
(127, 122, 'Darah Rendah', 82, '', ''),
(128, 123, 'Hepatitis', 83, '', ''),
(129, 124, 'Darah Rendah', 84, '', ''),
(130, 125, 'Obesitas', 85, '', ''),
(131, 126, 'Darah Rendah', 86, '', ''),
(132, 127, 'Obesitas', 87, '', ''),
(133, 128, 'Darah Rendah', 88, '', ''),
(134, 129, 'Asam Urat', 89, '', ''),
(135, 130, 'Gangguan Pernapasan (ISPA)', 90, '', ''),
(136, 131, 'Penyakit Jantung (Syndrom Koroner)', 91, '', ''),
(137, 132, 'Penyakit Jantung (Syndrom Koroner)', 92, '', ''),
(138, 133, 'Darah Rendah', 93, '', ''),
(139, 134, 'Dispepsia', 94, '', ''),
(140, 135, 'Dispepsia', 95, '', ''),
(141, 136, 'Dispepsia', 96, '', ''),
(142, 137, 'Darah Rendah', 97, '', ''),
(143, 138, 'Darah Rendah', 98, '', ''),
(144, 139, 'Asam Urat', 99, '', ''),
(145, 140, 'Asam Urat', 100, '', ''),
(146, 141, 'Darah Rendah', 85, '', ''),
(147, 142, 'Darah Rendah', 101, '', ''),
(148, 143, 'Obesitas', 102, '', ''),
(149, 144, 'Hepatitis', 102, '', ''),
(150, 145, 'Penyakit Jantung (Syndrom Koroner)', 104, '', ''),
(151, 146, 'Obesitas', 105, '', ''),
(152, 147, 'Darah Rendah', 106, '', ''),
(153, 148, 'Obesitas', 107, '', ''),
(154, 149, 'Hepatitis', 108, '', ''),
(155, 150, 'Tipes', 109, '', ''),
(156, 151, 'Gangguan Pernapasan (ISPA)', 110, '', ''),
(157, 152, 'Tipes', 111, '', ''),
(158, 153, 'Gangguan Pernapasan (ISPA)', 1, '', ''),
(159, 154, 'Obesitas', 1, '', ''),
(160, 155, 'Penyakit Jantung (Syndrom Koroner)', 112, '', ''),
(161, 156, 'Gangguan Pernapasan (ISPA)', 1, '', ''),
(162, 157, 'Obesitas', 1, '', ''),
(163, 158, 'Obesitas', 1, '', ''),
(164, 159, 'Obesitas', 1, '', ''),
(165, 160, 'Obesitas', 1, '', ''),
(166, 161, 'Obesitas', 1, '', ''),
(167, 162, 'Obesitas', 1, '', ''),
(168, 163, 'Obesitas', 1, '', ''),
(169, 164, 'Obesitas', 1, '', ''),
(170, 165, 'Obesitas', 1, '', ''),
(171, 166, 'Obesitas', 1, '', ''),
(172, 167, 'Obesitas', 1, '', ''),
(173, 168, 'Gangguan Pernapasan (ISPA)', 1, '', ''),
(174, 169, 'Obesitas', 113, '', ''),
(175, 170, 'Karies Gigi', 114, '', ''),
(176, 171, 'Karies Gigi', 114, '', ''),
(177, 172, 'Karies Gigi', 114, '', ''),
(178, 173, 'Gingivitis', 114, '', ''),
(179, 174, 'Pulpitis', 114, '', ''),
(180, 174, 'Abses Gusi', 114, '', ''),
(181, 174, 'Periodontitis', 114, '', ''),
(182, 174, NULL, 114, '', ''),
(183, 174, 'Karies Gigi', 114, '', ''),
(184, 175, 'Periodontitis', 114, '', ''),
(185, 175, NULL, 114, '', ''),
(186, 176, 'Karies Gigi', 114, '', ''),
(187, 177, NULL, 114, '', ''),
(188, 177, 'Karies Gigi', 114, '', ''),
(189, 179, NULL, 114, '', ''),
(190, 179, 'Karies Gigi', 114, '', ''),
(191, 180, 'Karies Gigi', 114, '', ''),
(192, 181, 'Karies Gigi', 114, '', ''),
(193, 182, 'Periodontitis', 114, '', ''),
(194, 183, NULL, 114, '', ''),
(195, 183, 'Karies Gigi', 114, '', ''),
(196, 184, 'Karies Gigi', 114, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `id_gejala` varchar(3) NOT NULL,
  `gejala` varchar(255) DEFAULT NULL,
  `gejala_bobot` decimal(10,1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id_gejala`, `gejala`, `gejala_bobot`) VALUES
('G01', 'Apakah gusi Anda mengalami pembengkakan?', '0.4'),
('G02', 'Apakah gusi Anda berwarna kemerahan?', '0.8'),
('G03', 'Apakah gusi Anda berdarah apabila disentuh?', '0.8'),
('G04', 'Apakah gigi Anda mengalami perubahan warna?', '0.9'),
('G05', 'Apakah permukaan gigi Anda terasa kasar dan tajam?', '0.8'),
('G06', 'Apakah makanan yang Anda makan mudah tersangkut di bagian gigi?', '0.9'),
('G07', 'Apakah Anda merasakan nyeri pada bagian gigi?', '0.4'),
('G08', 'Apakah Anda mengalami rasa gatal pada bagian gusi?', '0.6'),
('G09', 'Apakah Anda mengalami rasa nyeri pada bagian gusi apabila disentuh?.', '0.2'),
('G10', 'Apakah gigi Anda sensitif?', '0.6'),
('G11', 'Apakah gigi Anda goyang?', '0.2'),
('G12', 'Apakah Anda merasa gatal pada bagian gusi?', '0.6');

-- --------------------------------------------------------

--
-- Table structure for table `hasilanalisa`
--

CREATE TABLE `hasilanalisa` (
  `idHasilAnalisa` int(11) NOT NULL,
  `idPengguna` int(11) DEFAULT NULL,
  `tglAnalisa` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasilanalisa`
--

INSERT INTO `hasilanalisa` (`idHasilAnalisa`, `idPengguna`, `tglAnalisa`) VALUES
(1, 1, '2019-09-08'),
(2, 1, '2019-09-08'),
(3, 2, '2019-09-08'),
(4, 4, '2019-09-08'),
(5, 3, '2019-09-08'),
(6, 6, '2019-09-08'),
(7, 5, '2019-09-08'),
(8, 7, '2019-09-08'),
(9, 8, '2019-09-08'),
(10, 9, '2019-09-08'),
(11, 9, '2019-09-08'),
(12, 9, '2019-09-08'),
(13, 11, '2019-09-08'),
(14, 12, '2019-09-08'),
(15, 10, '2019-09-08'),
(16, 12, '2019-09-08'),
(17, 13, '2019-09-08'),
(18, 14, '2019-09-08'),
(19, 15, '2019-09-08'),
(20, 16, '2019-09-08'),
(21, 18, '2019-09-09'),
(22, 18, '2019-09-09'),
(23, 19, '2019-09-09'),
(24, 20, '2019-09-09'),
(25, 21, '2019-09-09'),
(26, 22, '2019-09-09'),
(27, 23, '2019-09-09'),
(28, 22, '2019-09-09'),
(29, 22, '2019-09-09'),
(30, 24, '2019-09-09'),
(31, 25, '2019-09-09'),
(32, 26, '2019-09-09'),
(33, 29, '2019-09-09'),
(34, 28, '2019-09-09'),
(35, 28, '2019-09-09'),
(36, 31, '2019-09-09'),
(37, 27, '2019-09-09'),
(38, 27, '2019-09-09'),
(39, 33, '2019-09-09'),
(40, 30, '2019-09-09'),
(41, 32, '2019-09-09'),
(42, 34, '2019-09-09'),
(43, 34, '2019-09-09'),
(44, 34, '2019-09-09'),
(45, 35, '2019-09-09'),
(46, 36, '2019-09-09'),
(47, 38, '2019-09-09'),
(48, 37, '2019-09-09'),
(49, 39, '2019-09-09'),
(50, 41, '2019-09-09'),
(51, 40, '2019-09-09'),
(52, 42, '2019-09-09'),
(53, 42, '2019-09-09'),
(54, 42, '2019-09-09'),
(55, 43, '2019-09-09'),
(56, 44, '2019-09-09'),
(57, 45, '2019-09-09'),
(58, 47, '2019-09-09'),
(59, 46, '2019-09-09'),
(60, 46, '2019-09-09'),
(61, 46, '2019-09-09'),
(62, 49, '2019-09-09'),
(63, 1, '2019-09-09'),
(64, 50, '2019-09-09'),
(65, 51, '2019-09-09'),
(66, 52, '2019-09-09'),
(67, 53, '2019-09-09'),
(68, 53, '2019-09-09'),
(69, 54, '2019-09-09'),
(70, 56, '2019-09-09'),
(71, 55, '2019-09-09'),
(72, 57, '2019-09-09'),
(73, 56, '2019-09-09'),
(74, 58, '2019-09-09'),
(75, 59, '2019-09-09'),
(76, 60, '2019-09-09'),
(77, 60, '2019-09-09'),
(78, 60, '2019-09-09'),
(79, 60, '2019-09-09'),
(80, 60, '2019-09-09'),
(81, 61, '2019-09-09'),
(82, 62, '2019-09-09'),
(83, 63, '2019-09-09'),
(84, 65, '2019-09-09'),
(85, 65, '2019-09-09'),
(86, 65, '2019-09-09'),
(87, 65, '2019-09-09'),
(88, 64, '2019-09-09'),
(89, 64, '2019-09-09'),
(90, 64, '2019-09-09'),
(91, 66, '2019-09-09'),
(92, 66, '2019-09-09'),
(93, 66, '2019-09-09'),
(94, 66, '2019-09-09'),
(95, 67, '2019-09-09'),
(96, 67, '2019-09-09'),
(97, 68, '2019-09-09'),
(98, 69, '2019-09-09'),
(99, 69, '2019-09-09'),
(100, 70, '2019-09-09'),
(101, 72, '2019-09-09'),
(102, 72, '2019-09-09'),
(103, 71, '2019-09-09'),
(104, 71, '2019-09-09'),
(105, 71, '2019-09-09'),
(106, 73, '2019-09-09'),
(107, 73, '2019-09-09'),
(108, 73, '2019-09-09'),
(109, 74, '2019-09-09'),
(110, 73, '2019-09-09'),
(111, 75, '2019-09-09'),
(112, 75, '2019-09-09'),
(113, 76, '2019-09-09'),
(114, 76, '2019-09-09'),
(115, 78, '2019-09-09'),
(116, 77, '2019-09-09'),
(117, 78, '2019-09-09'),
(118, 77, '2019-09-09'),
(119, 79, '2019-09-09'),
(120, 80, '2019-09-09'),
(121, 81, '2019-09-09'),
(122, 82, '2019-09-09'),
(123, 83, '2019-09-09'),
(124, 84, '2019-09-09'),
(125, 85, '2019-09-09'),
(126, 86, '2019-09-09'),
(127, 87, '2019-09-09'),
(128, 88, '2019-09-09'),
(129, 89, '2019-09-10'),
(130, 90, '2019-09-10'),
(131, 91, '2019-09-10'),
(132, 92, '2019-09-10'),
(133, 93, '2019-09-10'),
(134, 94, '2019-09-10'),
(135, 95, '2019-09-10'),
(136, 96, '2019-09-10'),
(137, 97, '2019-09-10'),
(138, 98, '2019-09-10'),
(139, 99, '2019-09-10'),
(140, 100, '2019-09-10'),
(141, 85, '2019-09-10'),
(142, 101, '2019-09-10'),
(143, 102, '2019-09-10'),
(144, 102, '2019-09-10'),
(145, 104, '2019-09-10'),
(146, 105, '2019-09-11'),
(147, 106, '2019-09-11'),
(148, 107, '2019-09-11'),
(149, 108, '2019-09-12'),
(150, 109, '2019-09-12'),
(151, 110, '2019-09-15'),
(152, 111, '2019-09-15'),
(153, 1, '2019-09-16'),
(154, 1, '2019-09-16'),
(155, 112, '2019-09-16'),
(156, 1, '2019-09-24'),
(157, 1, '2019-09-24'),
(158, 1, '2019-09-24'),
(159, 1, '2019-09-24'),
(160, 1, '2019-09-24'),
(161, 1, '2019-09-24'),
(162, 1, '2019-09-24'),
(163, 1, '2019-09-24'),
(164, 1, '2019-09-24'),
(165, 1, '2019-09-24'),
(166, 1, '2019-09-25'),
(167, 1, '2019-11-23'),
(168, 1, '2021-01-26'),
(169, 113, '2021-07-05'),
(170, 114, '2022-03-22'),
(171, 114, '2022-03-22'),
(172, 114, '2022-03-22'),
(173, 114, '2022-03-22'),
(174, 114, '2022-03-22'),
(175, 114, '2022-03-22'),
(176, 114, '2022-03-22'),
(177, 114, '2022-03-22'),
(178, 114, '2022-03-22'),
(179, 114, '2022-03-22'),
(180, 114, '2022-03-23'),
(181, 114, '2022-03-23'),
(182, 114, '2022-03-23'),
(183, 114, '2022-03-23'),
(184, 114, '2022-03-23');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `idInformasi` int(11) NOT NULL,
  `namaPenyakit` varchar(50) NOT NULL,
  `content` longtext DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_pengguna` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `umur` int(11) NOT NULL,
  `jk` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tanggal_pendaftaran` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama_pengguna`, `username`, `password`, `umur`, `jk`, `email`, `tanggal_pendaftaran`) VALUES
(1, 'Johanes Adhitya', 'joadhitya', '746e9b2fa0dc2d8a409789262463955f', 21, 'Laki-Laki', 'johanes_adhitya@yahoo.com', '2019-09-08'),
(3, 'Lovely', 'Femlymsh', '7eafc96309d795cd2acc8f470c344d42', 22, 'Perempuan', 'nfemmily@gmail.com', '2019-09-08'),
(4, 'Lily Artha Utami', 'Lily artha', '8cde8abef321690701ccb13692cbcffa', 22, 'Perempuan', 'lilyarthautami15@gmail.com', '2019-09-08'),
(5, 'Adhitya Ivan', 'ivan44323', '6ad12e58c647396a180032318b7d852c', 21, 'Laki-Laki', 'iaila44323@gmail.com', '2019-09-08'),
(6, 'Randya Maheswara', 'RandyaMaheswara', '5124bc98377091a775d573f5b24001c9', 21, 'Laki-Laki', 'randyamaheswara@rocketmail.com', '2019-09-08'),
(7, 'Devina Agatha Mailoor', 'devinamailoor', '5218849b7aa2cd0e4b6f3398e5307936', 20, 'Perempuan', 'devinaagatha.da@gmail.com', '2019-09-08'),
(8, 'Gabriel Edwin', 'gabrieledwinsp', 'e3f83ad055490ebe6546974da134e8ea', 22, 'Laki-Laki', 'gabrieledwinsp@gmail.com', '2019-09-08'),
(9, 'Gading Condro Prakoso', 'shy', '827ccb0eea8a706c4c34a16891f84e7b', 10, 'Laki-Laki', 'gadingramjets@gmail.com', '2019-09-08'),
(10, 'pebrian ', 'pek', 'bca3226f0909cb2f02bef843076c56c5', 22, 'Laki-Laki', 'bianpebrian9698@gmail.com', '2019-09-08'),
(11, 'Agita Erfan Rozaan', 'agiterfan', '924d91af5abf4f318637f0d2dfb94185', 22, 'Laki-Laki', 'agita.erfan001@gmail.com', '2019-09-08'),
(12, 'Eximenes Beno', 'eximenesbeno', '78ac12c44e5074376ae49cb7fec0360d', 22, 'Laki-Laki', 'eximenesbeno@gmail.com', '2019-09-08'),
(13, 'Y. Septian Adi Darma', 'MasSept', '200820e3227815ed1756a6b531e7e0d2', 22, 'Laki-Laki', 'septiandarma69@gmail.com', '2019-09-08'),
(14, 'Aci Dessi Novita', 'acikk', 'e9d936d32bb409ca8776ad9ee7939ea4', 21, 'Perempuan', 'acidessin97@gmail.com', '2019-09-08'),
(15, 'Fika Liana', 'FikaLiana29', 'afbe68e070895ec612933f4a2b2668cf', 22, 'Laki-Laki', 'fikalianachan@gmail.com', '2019-09-08'),
(16, 'Winda', 'Winda', '25f9e794323b453885f5181f1b624d0b', 24, 'Perempuan', 'winda.carolina1995@gmail.com', '2019-09-08'),
(17, 'Hery We', 'herywe@gmail.com', 'fedd398a4064578287e3f37569b3c746', 55, 'Laki-Laki', 'herywe@gmail.com', '2019-09-09'),
(18, 'Elisabet Nathalia Cristabel', 'titatrb', 'ee17aab2132afdaa5931ff751963eaba', 23, 'Laki-Laki', 'tita.soekartono@gmail.com', '2019-09-09'),
(19, 'Laurensius Indra', 'Laurensius', 'b87b259e8f3af376bca923354479d691', 22, 'Laki-Laki', 'laurensius.indra01@gmail.com', '2019-09-09'),
(20, 'paulus', 'paulusosok', 'b2f75e8eab09ef2c2c8033c6554ebc41', 23, 'Laki-Laki', 'digivolutionjr@gmail.com', '2019-09-09'),
(21, 'Rani', 'Rani', 'df7e3e914c5b259497e1b1ab5ca807d3', 22, 'Perempuan', 'yohanafransiscar@yahoo.com', '2019-09-09'),
(22, 'Katarina bestari utami', 'Katrin', '9403ac239f72bfc87b86a8ad250c61ee', 21, 'Perempuan', 'angelakatrin@gmail.com', '2019-09-09'),
(23, 'Anastasia Anisa', 'Anastasia.anisa', '29f0dfe4a461674eb3d7e3865d0782cf', 22, 'Perempuan', 'anastasia.anisa@gmail.com', '2019-09-09'),
(24, 'Tera Mantik', 'Teramantik', 'f31ecc9a44855e7b65ce2dbca14bd34b', 22, 'Perempuan', 'terahhm97@gmail.com', '2019-09-09'),
(25, 'Aloysius Gonzaga', 'TerminalGenex', '7bedc9fd30769590c992b8f7f23738f7', 22, 'Laki-Laki', 'aloysiusgfnn@gmail.com', '2019-09-09'),
(26, 'Rafael Wisnumurti', 'Wisnumurti', 'db6674a6c6e3c844e8085ef3915f077b', 22, 'Laki-Laki', 'wisnumurti60@gmail.com', '2019-09-09'),
(27, 'Elizabeth Rani', 'Runn', 'ea0b160cd3dcd16fd381c39244bb11a8', 21, 'Perempuan', 'elizabethrani11.er@gmail.com', '2019-09-09'),
(28, 'Ignatius Kurniawan', 'Kurni170', '99bdac88e033a42d0fb418237290e026', 23, 'Laki-Laki', 'kurni170@gmail.com', '2019-09-09'),
(29, 'Anggraeni Milasari', 'anggrnmila', 'a471618a6e83fb4b8ac43b2c63eab228', 21, 'Perempuan', 'amilasari15@gmail.com', '2019-09-09'),
(30, 'Heraklos Visha Adiafora', 'heraklosvisha', '74120c51c5a298274d2544947be66518', 22, 'Laki-Laki', 'heraklosvisha13@gmail.com', '2019-09-09'),
(31, 'Nadya Cahyaning Putri', 'nadyacp16', '21a7c228ba9df6c9c23d068d6996cc6b', 21, 'Perempuan', 'nadyaa.cahyaning@gmail.com', '2019-09-09'),
(32, 'Ayu Dian Susilo', 'ayudian', 'cafe78882f95821f954756312be93d99', 22, 'Perempuan', 'ayudian9705@gmail.com', '2019-09-09'),
(33, 'Antonius Christiyanto', 'antoniuscs', '25d55ad283aa400af464c76d713c07ad', 22, 'Laki-Laki', 'antonchristiyanto@gmail.com', '2019-09-09'),
(34, 'Gregorius Kurniawan', 'gks', '884e8353fdf7cb982a679fad6d541300', 23, 'Laki-Laki', 'goriskurniawan96@gmail.com', '2019-09-09'),
(35, 'Elisa Dwi Hapsari', 'Elisadh', 'a2e050b4907a77ad8389866bf0aa5f62', 21, 'Perempuan', 'elisadwihapsari@gmail.com', '2019-09-09'),
(36, 'Irene Rinti', 'irenerinti', '94963178ee76808805d7aa667a3ff6c2', 21, 'Perempuan', 'irenerinty@gmail.com', '2019-09-09'),
(37, 'Diva', 'divazerlindaa', '004a6a8e45af1458a981a097dbd62392', 22, 'Perempuan', '392015004@student.uksw.edu', '2019-09-09'),
(38, 'Vanessa', '_vnvan', '0d7337fa609721782f2de4685baee182', 20, 'Perempuan', 'vanessangela11@gmail.com', '2019-09-09'),
(39, 'Meichella', 'Mei', 'e10adc3949ba59abbe56e057f20f883e', 20, 'Perempuan', 'meichella4599@gmail.com', '2019-09-09'),
(40, 'Angela', 'Angela', '827ccb0eea8a706c4c34a16891f84e7b', 20, 'Perempuan', 'angelaajeng04@gmail.com', '2019-09-09'),
(41, 'justicyan dss', 'justi1017', '0c62dc77054be62019f7422fffb58048', 20, 'Laki-Laki', 'justisidabutar10@gmail.com', '2019-09-09'),
(42, 'Daka', 'dakapradana', 'fcea920f7412b5da7be0cf42b8c93759', 22, 'Laki-Laki', 'dakapradana.dp@gmail.com', '2019-09-09'),
(43, 'Maria Imakulata Wahyu P', 'Maria Imakulata', '2d7131182191865f2fa0d70f94364fdf', 22, 'Perempuan', 'mariaimakulata03@gmail.com', '2019-09-09'),
(44, 'Jerika Gri Selda', 'Jerika', 'cc7e8640a03c4e72d19b65e0f9ab877a', 22, 'Perempuan', 'ka.griselda18@gmail.com', '2019-09-09'),
(45, 'Tri Hermi Yanti ', 'Hermii', 'e7aae60ef1cdca458d63fd7e8c188b2f', 21, 'Laki-Laki', 'Hermimoets@gmail.com', '2019-09-09'),
(46, 'Cyrenia Ine Kristi', 'cyrenia', '2c7f56127ca21e3c0830a8f3ccc8d818', 21, 'Perempuan', 'icyrenia@gmail.com', '2019-09-09'),
(47, 'Abra Kadyarina', 'kadyabra', '50ac9032ecb5cc1498c818d2ab7e95d4', 22, 'Perempuan', 'abrakdyrn@gmail.com', '2019-09-09'),
(48, 'Gamaliel Jeevan Dewanto', 'g.jeevan.d', '710c00655cb198a37f9583ea8960416a', 21, 'Laki-Laki', 'jeevan.dewanto@gmail.com', '2019-09-09'),
(49, 'Christa bram', 'Chrstbrm', '96b0e580b469a8b42193ba89c8b19ae7', 23, 'Laki-Laki', 'chrstbram@gmail.com', '2019-09-09'),
(50, 'Brigita Dina', 'brigitatita', 'c8837b23ff8aaa8a2dde915473ce0991', 22, 'Laki-Laki', 'brigitahadi@gmail.com', '2019-09-09'),
(51, 'grellylondo@ymail.com', 'grelly', '81dc9bdb52d04dc20036dbd8313ed055', 22, 'Perempuan', 'grellylondo@ymail.com', '2019-09-09'),
(52, 'Brigitta', 'Senja', '6042b94e41504a2c93404b74c6a7dc9b', 22, 'Perempuan', 'venancia.enja@gmail.com', '2019-09-09'),
(53, 'Glyceria Chrisya', 'glyceriachrisya', 'dd004c7a22c23c2eaff6a117772395c2', 21, 'Perempuan', 'gclaras@gmail.com', '2019-09-09'),
(54, 'Audy Kartika', 'kartikaudy', 'ed1d1f5d257e4846777d39e0ef565ac6', 21, 'Perempuan', 'audy.kartika2686@gmail.com', '2019-09-09'),
(55, 'Josephine', 'josephinesan', 'a5621941ac0c05807bf7057c14825e55', 22, 'Perempuan', 'josephinesantika29@gmail.com', '2019-09-09'),
(56, 'Maria Fransisca Diana Adrianata', 'maria_adrianata', '10ada8b879c7c80d158b6dd8629c15ec', 21, 'Perempuan', 'maryadrians@gmail.com', '2019-09-09'),
(57, 'Bernadette', 'bernaadett', '92583b6fe17a94cced809b85840e995c', 21, 'Perempuan', 'bernaadette72@gmail.com', '2019-09-09'),
(58, 'Renardi Krishna', 'joviekrishna', '32bce9017128963190f77654927ca5b1', 22, 'Laki-Laki', 'joviekrisna1996@gmail.com', '2019-09-09'),
(59, 'Chatarina Maria ', 'chatarinaNora', 'd4388c4d4b47c6655b16fe5b13184b32', 19, 'Perempuan', 'noragtl@gmail.com', '2019-09-09'),
(60, 'Sandra Clarissa Widyawan', 'sandraclaw', 'cf1481a782cbccc86b6c5bf52f776870', 22, 'Perempuan', 'sandra_green_white@yahoo.co.id', '2019-09-09'),
(61, 'Genoveva Fiona Citraclarisa', 'gfcitracs', '0789637b7fafdaeaa29d49e9483ddcd1', 23, 'Perempuan', 'fionagenoveva1996@gmail.com', '2019-09-09'),
(62, 'MARIA NINCE PAULINA', 'Nince', 'f68f67f246a20d1b60879d1160c2fdc1', 21, 'Perempuan', 'nincepaulina0611@gmail.com', '2019-09-09'),
(63, 'Agatha Gita', 'a.gita.p', '235d370cdff421ae318d1df6aedc744a', 21, 'Perempuan', 'agatha.gita01@gmail.com', '2019-09-09'),
(64, 'Sisca indra', 'Cacaind', 'bf225bbbcb579ea38b1ee9a8e71214f1', 23, 'Perempuan', 'siscaindra30@gmail.com', '2019-09-09'),
(65, 'Mei', 'meiliani', 'b45976329362d7fff918327840a47285', 21, 'Perempuan', 'clarameiliani@yahoo.com', '2019-09-09'),
(66, 'Lia', 'titaadlia', '4c5d3dec6a3f532a2eb427eafd3683ec', 19, 'Perempuan', 'adeliaatita@gmail.com', '2019-09-09'),
(67, 'Anjelina Br Sitepu', 'anjelinasitepu', 'bd5158ede34c4b87079452bc22a2b330', 23, 'Perempuan', 'anjelinabrstp@gmail.com', '2019-09-09'),
(68, 'Jeje', 'jeje', '07615efe55303557ad290b928791faf9', 22, 'Perempuan', 'agnesjessica23@yahoo.com', '2019-09-09'),
(69, 'Ni Made Diah Asri Lestari', 'diahasri_', '380f2022f6733eda91638beb4bd77446', 22, 'Perempuan', 'diahasri630@gmail.com', '2019-09-09'),
(70, 'Barunendra', 'Barunendra', 'd4bf8a084b9a0c9fbcafa02ed5183366', 22, 'Laki-Laki', 'barunendra.yamawicakso@gmail.com', '2019-09-09'),
(71, 'Bor', 'Bor', '597e592d65a2f3814020cbdf7e9e522a', 20, 'Laki-Laki', 'christianus_b@yahoo.co.id', '2019-09-09'),
(72, 'Sherly', 'Sherlyyyy', 'd593502347df56ee39daf55092eaa459', 22, 'Laki-Laki', 'kyukyu_xue@yahoo.com', '2019-09-09'),
(73, 'Tioska Davianto', 'tioska', 'd3a5839e3fca75bf4674e4f993a45a98', 21, 'Laki-Laki', 'tioska.davianto@gmail.com', '2019-09-09'),
(74, 'Gilang', 'gilangsastra', '79a5e7df361eeaee5392913262b99414', 21, 'Laki-Laki', 'gilangr108@gmail.com', '2019-09-09'),
(75, 'Melia dian sukmawati', 'melia', '734ee88f1b19ffd8c598602480577988', 20, 'Perempuan', 'meliadiansukmawati@gmail.com', '2019-09-09'),
(76, 'Yuda Raharja', 'yudaraharja', '49cb17bf195d4cfd864f26b537d69961', 22, 'Laki-Laki', 'yudaraharja99@gmail.com', '2019-09-09'),
(77, 'Yohanes Calvin Lugas', 'CalvinLugas', 'd299080dbdd2cf65b300f84d9ce80f95', 21, 'Laki-Laki', 'calvinlugas48@gmail.com', '2019-09-09'),
(78, 'Sibeh', 'kristiandwi29@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 21, 'Laki-Laki', 'kristiandwi29@gmail.com', '2019-09-09'),
(79, 'Nadia Givandy', 'nadiagivandy', 'f117a4d01070fd154bd76203efa33e43', 22, 'Perempuan', 'givandynadia@gmail.com', '2019-09-09'),
(80, 'Yunikeayu', 'yunikeayus', 'd5f9d5626811eadea0ee2d1ea9532e9b', 22, 'Laki-Laki', 'yunikeayus@gmail.com', '2019-09-09'),
(81, 'antonius stanis', 'stanis', '7f95b733f4210c71482904eb422143f8', 22, 'Laki-Laki', 'antoiussena21@gmail.com', '2019-09-09'),
(82, 'Ruth', 'ruthadelvia ', '3b4b9c1eaf1fc5dd923c4801e0abe548', 19, 'Perempuan', 'radelviapad@gmail.com', '2019-09-09'),
(83, 'Yakobus Budi Kusuma', 'Yakobus', '44a10222c9510f6e197f2e673e3950a5', 22, 'Laki-Laki', 'yakobussbudi@gmail.com', '2019-09-09'),
(84, 'Giovani Natalia Widodo', 'giovaninw', 'd7b9b5bb379f5f573daf4fe0ae1a8866', 21, 'Perempuan', 'giovaninw@gmail.com', '2019-09-09'),
(85, 'Dionisius Kristian Saputra', 'Dionisius', '5266c7ca16213b922a70f021d4683fb3', 22, 'Laki-Laki', 'dionisius24.dk@gmail.com', '2019-09-09'),
(86, 'Billa Oktina Trinugraheni', 'Billaoktrin', '07d0b1e90bfb2b8f5512ca01d63e2f37', 20, 'Perempuan', 'billaoktrin@gmail.com', '2019-09-09'),
(87, 'Veron', 'Veron', 'a921166fe1abd87948fc681f3afcd822', 21, 'Perempuan', 'tyastefan@yahoo.com', '2019-09-09'),
(88, 'Widya Ahtha', 'widyaahtha', '527731988d9af21f41ecc5e27dc1425d', 22, 'Perempuan', 'gracia.widyaa@gmail.com', '2019-09-09'),
(89, 'Rosalina', 'Rosa', 'cabf98af03a2d5c6831bd51bd9d3dff5', 20, 'Perempuan', 'rosalina.brigita80@gmail.com', '2019-09-10'),
(90, 'Raka', 'rakaraks', '3299cd9598228321f86eb5cc346a450d', 21, 'Laki-Laki', 'raka.natanael17@gmail.com', '2019-09-10'),
(91, 'Fika Liana Chandra', 'Fika', '905017a64c9ea2b7ef32161257d4d01a', 22, 'Perempuan', 'fikalianachandra@yahoo.com', '2019-09-10'),
(92, 'Akexander Avin', 'Alexanderavin', '4ba9c01f10c13f62b6135f91ed429d36', 24, 'Laki-Laki', 'alexanderavin29@gmail.com', '2019-09-10'),
(93, 'Cornelia arien', 'Corneliaarien', '7b3a509cb0a2b9121e56005814b75873', 21, 'Laki-Laki', 'corneliaarien5@gmail.com', '2019-09-10'),
(94, 'Maggie Handoko', 'maggiehandoko', '21870e0c0fb8d16509e349850491d9a2', 22, 'Laki-Laki', 'maggiehandoko@yahoo.com', '2019-09-10'),
(95, 'Giovani Christian Nugroho', 'giochristian', '4595a78ca114b054334dc8859a8d5159', 22, 'Laki-Laki', 'giochristian97@gmail.com', '2019-09-10'),
(96, 'Nata ', 'Nata', '3587a7cd4613a21e9827130c459a648a', 21, 'Laki-Laki', 'natadotudayana@yahoo.com', '2019-09-10'),
(97, 'Ardian Kurniawan', 'Ardian', '396547f1cb0e383732b9e1ae6953980b', 21, 'Laki-Laki', 'ardiankurnia1@gmail.com', '2019-09-10'),
(98, 'Canda strike', 'Candastrike', '73b411d674a1762173518f82fa5362e8', 21, 'Laki-Laki', 'candastrike@gmail.com', '2019-09-10'),
(99, 'Satya', 'Satya Tio', '97419a236e502bad251a7918be8d0350', 22, 'Laki-Laki', 'tyo1997@gmail.com', '2019-09-10'),
(100, 'marcelia', 'axchelz', '9880c35d8804ed40f467de976963966b', 23, 'Perempuan', 'marceliaedelwies@gmail.com', '2019-09-10'),
(101, 'Yuharningsih Patanduk', 'Yuharningsi', 'e47e65bed477215c0f1824f51da031d4', 22, 'Perempuan', 'yuharningsi@gmail.com', '2019-09-10'),
(102, 'Lulu Retno Herningrum', 'luluretnoh', 'b6c6edcb95800ef0132822a2c120c60b', 24, 'Perempuan', 'luluretnoh@gmail.com', '2019-09-10'),
(103, 'ihsan', 'ihsa', 'e4e1408eb56c2813af13f734cf6f65c6', 24, 'Laki-Laki', 'cosixx9@gmail.com', '2019-09-10'),
(104, 'Ihsanuddin', 'ihsanuddin95', 'e4e1408eb56c2813af13f734cf6f65c6', 24, 'Laki-Laki', 'ihsanuddin09@gmail.com', '2019-09-10'),
(105, 'Theresita Maria Nuri', 'Nuri', 'f922f41679c5a30761f179ff5ba2b1dc', 23, 'Laki-Laki', 'nuripraviani96@gmail.com', '2019-09-11'),
(106, 'Julmilia', 'Julmilia', '25d55ad283aa400af464c76d713c07ad', 21, 'Perempuan', 'julmilia374@gmail.com', '2019-09-11'),
(107, 'Timothy Darevian', 'Darevian', '894eee30b67a1930bda74ee09c125fd0', 21, 'Laki-Laki', 'timothydarevian164@gmail.com', '2019-09-11'),
(108, 'Nike', 'nike', '9dc32d2b541f50c1649f5c47eac9099c', 21, 'Perempuan', 'eunikevioletta@yahoo.com', '2019-09-12'),
(109, 'Yohanes Bonar Hariningtyas ', 'Bonsky', '810247419084c82d03809fc886fedaad', 23, 'Laki-Laki', 'yohanesbonar@gmail.com', '2019-09-12'),
(110, 'Rakha', 'bernardinorakha', 'ae33dd3cad5ddf8f46fee0455ad3c411', 21, 'Laki-Laki', 'bernardino.rakha@gmail.com', '2019-09-15'),
(111, 'Holly Theresa', 'Ollytheresa', '65354582f54f1493c8c59d4254cbb5d0', 23, 'Perempuan', 'holly.theresabartho@gmail.com', '2019-09-15'),
(112, 'Novita Dewi', 'Novita_', 'e00137f6dcaa60df7ebba562afecef5d', 21, 'Perempuan', 'novitaadewi23@gmail.com', '2019-09-16'),
(113, 'adhitya', 'adhitya', 'f5bb0c8de146c67b44babbf4e6584cc0', 23, 'Laki-Laki', 'adhitya@gmail.com', '2021-07-05'),
(114, 'Testing', 'testing', 'e10adc3949ba59abbe56e057f20f883e', 12, 'Laki-Laki', 'testing@test.com', '2022-03-20');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id_penyakit` varchar(3) NOT NULL,
  `penyakit` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id_penyakit`, `penyakit`, `keterangan`) VALUES
('P01', 'Karies Gigi', 'Gigi Berlubang'),
('P02', 'Pulpitis', 'Radang pulpa gigi'),
('P03', 'Gingivitis', 'Perandangan Gingiva / Radang gusi'),
('P04', 'Abses Gusi', 'Gusi bernanah'),
('P05', 'Impaksi Gigi', 'Gigi tidak tumbuh'),
('P06', 'Periodontitis', 'Radang jaringan pendukung gigi');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `is_active` int(1) NOT NULL,
  `id_role` int(1) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `is_active`, `id_role`, `date_created`) VALUES
(37, 'Agit', 'agit', '034b9848ecf30f46ac7cdf703efae753', 1, 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `id_riwayat` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `id_penyakit` varchar(11) NOT NULL,
  `gejala` varchar(255) NOT NULL,
  `id_solusi` int(11) NOT NULL,
  `tanggal_diagnosa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `riwayat`
--

INSERT INTO `riwayat` (`id_riwayat`, `id_pengguna`, `id_penyakit`, `gejala`, `id_solusi`, `tanggal_diagnosa`) VALUES
(1, 1, 'P01', 'Sakit', 1, '2019-08-15');

-- --------------------------------------------------------

--
-- Table structure for table `rule_analisa`
--

CREATE TABLE `rule_analisa` (
  `id_rule_analisa` int(11) NOT NULL,
  `id_penyakit` varchar(3) DEFAULT NULL,
  `id_gejala` varchar(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rule_analisa`
--

INSERT INTO `rule_analisa` (`id_rule_analisa`, `id_penyakit`, `id_gejala`) VALUES
(168, 'P03', 'G12'),
(159, 'P02', 'G10'),
(158, 'P02', 'G07'),
(167, 'P03', 'G08'),
(166, 'P03', 'G03'),
(165, 'P03', 'G02'),
(182, 'P06', 'G12'),
(173, 'P04', 'G11'),
(172, 'P04', 'G10'),
(171, 'P04', 'G09'),
(170, 'P04', 'G07'),
(169, 'P04', 'G01'),
(181, 'P06', 'G11'),
(176, 'P05', 'G09'),
(175, 'P05', 'G07'),
(180, 'P06', 'G10'),
(179, 'P06', 'G08'),
(178, 'P06', 'G07'),
(177, 'P06', 'G01'),
(53, 'P07', 'G14'),
(54, 'P07', 'G25'),
(55, 'P07', 'G26'),
(56, 'P07', 'G28'),
(57, 'P07', 'G29'),
(58, 'P08', 'G03'),
(59, 'P08', 'G05'),
(60, 'P08', 'G06'),
(61, 'P08', 'G07'),
(62, 'P08', 'G08'),
(63, 'P08', 'G10'),
(64, 'P08', 'G11'),
(65, 'P08', 'G18'),
(66, 'P08', 'G27'),
(164, 'P03', 'G01'),
(174, 'P05', 'G01'),
(154, 'P01', 'G04'),
(155, 'P01', 'G05'),
(156, 'P01', 'G06'),
(157, 'P01', 'G10');

-- --------------------------------------------------------

--
-- Table structure for table `solusi`
--

CREATE TABLE `solusi` (
  `id_solusi` int(11) NOT NULL,
  `id_penyakit` varchar(3) DEFAULT NULL,
  `solusi` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `solusi`
--

INSERT INTO `solusi` (`id_solusi`, `id_penyakit`, `solusi`) VALUES
(1, 'P01', 'Penyakit obesitas merupakan sebuah penyakit akibat kelebihan berat badan, hal itu disebabkan karena tumpukan lemak pada tubuh yang berlebihan.\r\nBeberapa cara untuk mencegah obesitas dengan mengonsumsi makanan sehat dengan memperhatikan pola gizi seimbang secara teratur dan benar.\r\nPola gizi seimbang dimaksudkan untuk mengonsumsi makanan rendah lemak dan bergizi serta memiliki sumber vitamin yang lengkap. \r\nSelain menjaga pola gizi yang seimbang, pola aktivitas tubuh juga perlu diperhatikan seperti aktivitas fisik olahraga.\r\nOlahraga dimaksudkan untuk menjaga berat badan sehingga membantu organ tubuh seperti jantung dan paru paru bekerja lebih baik dan teratur.\r\nJangan lupa untuk mengatur gula darah secara rutin untuk mencegah obesitas menjadi diabetes. Kelebihan gula yang berlebih akan menyebabkan pemecahan glukosa menjadi sumber penyakit yaitu diabetes.'),
(2, 'P02', 'Infeksi Saluran Pernapasan Akut atau yang dikenal dengan ISPA disebabkan oleh virus dan bakteri yang disebabkan yang tersebar melalui orang lain atau tempat yang terjangkit virus atau bakteri tersebut. ISPA menyerang bagian hidung, tenggorokan dan saluran pernapasan. \r\nKebiasaan untuk menjaga kebersihan lingkungan sangatlah penting untuk menjauhi dari ISPA.\r\nHal yang dapat dilakukan seperti rajin mencuci tangan setelah beraktivitas untuk menghilangkan bakteri dan kuman pada tangan. Demi menjaga ketahanan tubuh, kita dapat mengonsumsi vitamin C untuk membunuh kuman dan bakteri. \r\nBagi kalian yang merokok, sebaiknya kurangilah rokok bahkan kalau bisa berhenti merokok. Asap rokok tidak hanya berpengaruh pada diri sendiri, namun menyebabkan kerugian bagi orang lain yang menerima asap rokok menjadi perokok pasif.\r\nJika kalian telah menemukan penderita yang mengidap ISPA, lebih baik Anda menjaga jarak atau dapat menggunakan masker untuk menghindari penyebaran penyakit tersebut.'),
(3, 'P03', 'Hepatitis merupakan penyakit yang berbahaya yang menyerang bagian organ hati. Hepatitis memiliki berbagai jenis yaitu hepatitis A,B,C,D dan E yang memiliki penyebarannya masing - masing. Hepatitis A dan B merupakan penyakit yang paling sering menyerang remaja dikarenakan penyebaran yang sangat mudah melalui lingkungan remaja.\r\nPenyakit hepatitis menyerang organ hati , bahkan bisa merusak sel hati dan kanker hati.\r\nPencegahan yang dapat dilakukan untuk mencegah penyakit hepatitis A dan B dapat dilakukan dengan vaksinasi. Vaksin merupakan cara efektuf untuk mencegah penyakit tersebut, antara lain : Vaksin hepatitis A (Havrix dan Vata) , Vaksin hepatitis B(Recombivax HV, Comvax dan Engerix-B) dan Kombinasi vaksin A dan B(Twirinx).\r\nHepatitis A biasanya tersebar akibat lingkungan yang kotor sehingga bakteri mudah bersarang pada lingkungan kotor tersebut. Perlu pembersihan diri dan lingkungan untuk mencegah terjangkitnya penyakit tersebut.\r\nHepatitis B tersebar akibat hubungan seks dan jarum suntik yang terjangkit pada virus tersebut, sehingga perlu menjaga peralatan medis yang tidak steril dari penyebaran hepatitis tersebut.\r\n'),
(4, 'P04', 'Dispepsia merupakan kondisi yang sering dialami oleh remaja dikarenakan pola makan yang tidak teratur. Hal tersebut menyebabkan asam lambung meningkat sehingga memberikan efek panas pada bagian dada bagian atas.\r\nDispepsia dapat ditangani dengan membatasi konsumsi makanan yang menyebabkan dispepsia seperti makanan yang mengandung gas yaitu kol, cabai dan sebagainya.\r\nBiasakan mengonsumsi makanan dalam porsi kecil tapi sering sebanyak 5 - 6 kali.\r\nJauhi konsumsi kafein dan alkohol yang berlebihan sehingga kandungan dalam lambung tidak merusak.\r\nPengendalian stress dan kontrol diri juga penting dalam hal tersebut, karena stress dapat memicu naiknya asam lambung.'),
(5, 'P05', 'Penyakit tipes disebabkan oleh infeksi bakteri bernama Salmonella thyphi yang tersebar melalui makanan dan minuman yang terkontaminasi bakteri tersebut. Penyebaran bakteri tersebut melalui feses dan urin. Infeksi tersebut dapat disebarkan melalui makanan yang dipegang oleh orang yang terinfeksi tersebut. Hal tersebut juga disebabkan kondisi lingkungan yang kumuh.\r\nPencegahan yang dapat dilakukan dengan imunisasi dengan vaksin tifoid mulai dari usia dua tahun. Untuk orang dewasa dapat melakukan konsultasi dengan dokter.\r\nSelain itu menjaga kebersihan lingkungan sangat penting bagi menjauhi penyebaran bakteri. Hal tersebut dapat dilakukan dengan hal mudah yaitu mencuci tangan dengan sabun untuk menghindari penyebaran bakteri dari makanan.\r\nMenjaga makanan juga perlu diperhatikan, terutama kebersihan makanan tersebut. Tipes dapat menyebar melalui makanan dan minuman yang terkontaminasi.'),
(6, 'P06', 'Asam urat dapat dicegah dengan mengurangi makanan yang mengandung tinggi purin. Purin merupakan zat yang memecahkan makanan menjadi asam urat, namun kelebihan tersebut justru menyebabkan nyeri pada bagian tubuh.\r\nAktivitas tubuh juga perlu dijaga untuk membuang asam urat yang terdapat dalam tubuh. Olahraga menjadi salah satu cara untuk mengurangi asam urat sehingga memerlukan olahraga yang teratur. Olahraga dapat dilakukan secara rutin dan ringan, tidak memerlukan olahraga yang berat sehingga setiap individu memiliki jenis olahraganya masing - masing.\r\nHal tersebut juga dapat membantu menurunkan berat badan, sehingga persendian akan mudah digerakan dan terlatih karena olahraga yang teratur.'),
(7, 'P07', 'Darah rendah disebabkan oleh tekanan darah yang dibawah normal akibat beberapa faktor seperti dehidrasi, perubahan hormon dan kelelahan. Beberapa cara untuk mencegah tekanan darah rendah dapat dilakukan dengan mengatur pola hidup yang benar seperti berisitrahat dengan cukup dan menjaga pola gizi yang seimbang.\r\nDarah rendah dapat dicegah dengan mengonsumsi cairan untuk meningkatkan volume darah dan mencegah dehidrasi , sehingga setiap individu minimal memerlukan 8 gelas perhari serta makanan yang mengandung mineral selain itu perlu meningkatkan asupan natrium.\r\nPola hidup perlu dijaga dengan baik, sehingga porsi dalam kegiatan setiap hari harus diperhatikan yaitu 8 jam istirahat, 8 jam aktivitas dan 8 jam bekerja. Waktu yang cukup dalam pembagian tersebut sangat penting karena tubuh memerlukan metabolisme yang betul. '),
(8, 'P08', 'Penyakit jantung sindrom koroner merupakan kondisi aliran darah ke jantung berkurang secara tiba - tiba. Arteri koroner yang memasuk darah memerlukan pasokan darah yang kaya oksigen untuk menuju ke otot jantung, jika arteri tersebut menyempit dapat menyebabkan gangguan fungsi jantung. Beberapa kondisi dan pola hidup yang salah menyebabkan seseorang terkenda sindrom koroner, dimana kondisi penyakit akut biasanya terjadi di usia 50 tahun, namun penyakit ini dapat menyerang di usia muda yaitu 30 tahun. \r\nSeseorang perlu menjaga pola hidup seperti menjauhi pola hidup yang buruk yaitu merokok, begadang, minum alkohol dan sebagainya.\r\nPola buruk tersebut menyebabkan penyakit yang menyerang organ tubuh seperti jantung.\r\nPola pikir juga perlu dijaga untuk mengurangi risiko tekanan darah tinggi, sehingga Anda dapat mencari cara untuk menghilangkan stress tersebut.\r\nOlahraga secara teratur juga perlu dilakukan untuk menjaga ritme jantung supaya bekerja dengan baik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `analisa`
--
ALTER TABLE `analisa`
  ADD PRIMARY KEY (`id_analisa`);

--
-- Indexes for table `detailhasilanalisa`
--
ALTER TABLE `detailhasilanalisa`
  ADD PRIMARY KEY (`idDetailHasilAnalisa`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indexes for table `hasilanalisa`
--
ALTER TABLE `hasilanalisa`
  ADD PRIMARY KEY (`idHasilAnalisa`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD KEY `Index 1` (`idInformasi`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id_riwayat`);

--
-- Indexes for table `rule_analisa`
--
ALTER TABLE `rule_analisa`
  ADD PRIMARY KEY (`id_rule_analisa`);

--
-- Indexes for table `solusi`
--
ALTER TABLE `solusi`
  ADD PRIMARY KEY (`id_solusi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `analisa`
--
ALTER TABLE `analisa`
  MODIFY `id_analisa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detailhasilanalisa`
--
ALTER TABLE `detailhasilanalisa`
  MODIFY `idDetailHasilAnalisa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;

--
-- AUTO_INCREMENT for table `hasilanalisa`
--
ALTER TABLE `hasilanalisa`
  MODIFY `idHasilAnalisa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `idInformasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `id_riwayat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rule_analisa`
--
ALTER TABLE `rule_analisa`
  MODIFY `id_rule_analisa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=183;

--
-- AUTO_INCREMENT for table `solusi`
--
ALTER TABLE `solusi`
  MODIFY `id_solusi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
