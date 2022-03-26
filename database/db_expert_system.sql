-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 26, 2022 at 05:07 PM
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
(1, 1, 'Karies Gigi', 1, '99.8', '');

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
('G01', 'Apakah gusi anda mengalami pembengkakan?', '0.4'),
('G02', 'Apakah gusi anda berwarna kemerahan?', '0.8'),
('G03', 'Apakah gusi anda berdarah apabila disentuh?', '0.8'),
('G04', 'Apakah gigi anda mengalami perubahan warna?', '0.9'),
('G05', 'Apakah permukaan gigi anda terasa kasar dan tajam?', '0.8'),
('G06', 'Apakah makanan yang anda makan mudah tersangkut di bagian gigi?', '0.9'),
('G07', 'Apakah anda merasakan nyeri pada bagian gigi?', '0.4'),
('G08', 'Apakah anda mengalami rasa gatal pada bagian gusi?', '0.6'),
('G09', 'Apakah anda mengalami rasa nyeri pada bagian gusi apabila disentuh?.', '0.2'),
('G10', 'Apakah gigi anda sensitif?', '0.6'),
('G11', 'Apakah gigi anda goyang?', '0.2'),
('G12', 'Apakah anda merasa gatal pada bagian gusi?', '0.6');

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
(1, 1, '2022-03-26');

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

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`idInformasi`, `namaPenyakit`, `content`, `created_at`) VALUES
(6, 'Tips Kesehatan Gigi', 'Seperti yang diketahui untuk menjaga kebersihan dan kesehatan gigi kita itu penting. Setelah melakukan aktivitas kita perlu membersihkan bagian gigi agar kuman dan bakteri yang menempel setelah kita melakukan aktivitas dalam sehari tidak menempel.', NULL),
(7, 'Gigi', 'Gigi manusia merupakan organ mekanis dalam pencernaan manusia. Gigi mempunyai peran dalam pencernaan untuk memotong dan mengunyah makanan yang masuk terlebih dahulu sebelum diproses oleh sistem pencernaan tubuh manusia. Gigi mempunyai beberapa bagian utama yaitu Dentin, Enamel, Pulpa, dan Sementum', NULL);

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
  `tanggal_pendaftaran` date NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama_pengguna`, `username`, `password`, `umur`, `jk`, `email`, `tanggal_pendaftaran`, `tgl_lahir`, `tempat_lahir`) VALUES
(1, 'Testing', 'testing', 'ae2b1fca515949e5d54fb22b8ed95575', 23, 'Laki-Laki', 'testing@test.com', '2022-03-26', '1992-11-29', 'Tangerang');

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
(1, 'P01', 'Sikat gigi setidaknya dua kali sehari dengan pasta gigi yang mengandung fluoride, terutama setelah makan. Selain itu, gunakanlah benang gigi untuk membersihkan sisa makanan yang menempel di sela-sela gigi.\r\n\r\nUntuk membersihkan gigi secara maksimal dan mencegah terjadinya kerusakan gigi, Anda dapat berkumur menggunakan obat kumur yang mengandung fluoride setelah menyikat gigi. Jika obat kumur tersebut tidak tersedia, buatlah obat kumur sendiri di rumah dengan memanfaatkan larutan air garam untuk berkumur.\r\n\r\nGula yang terkandung dalam makanan dan minuman manis bisa menghasilkan cairan asam yang nantinya dapat merusak lapisan gigi. Oleh karena itu, sebaiknya Anda membatasi jumlah asupan makanan dan minuman manis.'),
(2, 'P02', 'Pada kasus yang menyebabkan gigi mati dan tidak dapat diselamatkan maka penanganan yang tepat adalah melakukan prosedur pencabutan gigi. Selain itu, dokter akan memberikan pereda nyeri, gel gigi, atau obat antiinflamasi nonsteroid (OAINS) untuk mengurangi peradangan dan meredakan rasa sakit.'),
(3, 'P03', 'Pengobatan gingivitis atau radang gusi bertujuan untuk meredakan gejala dan mencegah komplikasi. Beberapa metode pengobatan untuk mengatasi radang gusi adalah pembersihan karang gigi (scaling) dan perawatan saluran akar gigi (root planing) dengan menggunakan laser atau gelombang suara dan penambalan atau penggantian gigi yang berlubang atau rusak, bila kondisi tersebut terkait dengan gingivitis.'),
(4, 'P04', 'Abses gusi tidak bisa sembuh dengan sendirinya dan memerlukan penanganan dari dokter gigi. Sebelum ke dokter, sementara Anda bisa mengonsumsi obat pereda nyeri, seperti paracetamol, untuk meringankan rasa nyeri. Selain itu, hindari makanan yang mudah membuat gigi ngilu dan hindari mengunyah dengan gigi pada sisi yang sakit.'),
(5, 'P05', 'Untuk mengatasi keluhan tersebut, kompreslah area yang mengalami nyeri menggunakan kompres dingin. Selain itu, berkumur dengan larutan air garam dan mengonsumsi obat pereda nyeri seperti aspirin juga dapat membantu meredakan rasa sakit yang muncul.\r\nMeski perawatan tersebut dapat membantu meredakan rasa sakit dan nyeri, Anda tetap disarankan untuk berkunjung ke dokter gigi. Pasalnya jika kondisi tersebut terus dibiarkan, komplikasi seperti periodontitis, abses gigi atau gusi, nyeri hebat, maloklusi atau susunan gigi tidak beraturan, terbentuknya plak gigi, dan kerusakan saraf di sekitar gigi mungkin untuk terjadi.'),
(6, 'P06', 'Periodontitis dapat dicegah dengan menyikat gigi secara rutin, minimal 2 kali sehari, yaitu setiap pagi dan menjelang tidur. Selain itu, bersihkan sela-sela gigi menggunakan benang gigi. Dengan begitu, plak tidak akan terbentuk dan Anda terhindar dari periodontitis.\r\nSelain rajin menyikat gigi, Anda juga disarankan untuk melakukan pemeriksaan gigi secara rutin ke dokter gigi tiap 6 bulan sekali. Namun, jika Anda termasuk kelompok orang yang berisiko terserang periodontitis, seperti merokok atau sedang mengonsumsi obat yang membuat mulut kering, pemeriksaan perlu dilakukan lebih rutin.'),
(7, 'P07', 'Darah rendah disebabkan oleh tekanan darah yang dibawah normal akibat beberapa faktor seperti dehidrasi, perubahan hormon dan kelelahan. Beberapa cara untuk mencegah tekanan darah rendah dapat dilakukan dengan mengatur pola hidup yang benar seperti berisitrahat dengan cukup dan menjaga pola gizi yang seimbang.\r\nDarah rendah dapat dicegah dengan mengonsumsi cairan untuk meningkatkan volume darah dan mencegah dehidrasi , sehingga setiap individu minimal memerlukan 8 gelas perhari serta makanan yang mengandung mineral selain itu perlu meningkatkan asupan natrium.\r\nPola hidup perlu dijaga dengan baik, sehingga porsi dalam kegiatan setiap hari harus diperhatikan yaitu 8 jam istirahat, 8 jam aktivitas dan 8 jam bekerja. Waktu yang cukup dalam pembagian tersebut sangat penting karena tubuh memerlukan metabolisme yang betul. '),
(8, 'P08', 'Penyakit jantung sindrom koroner merupakan kondisi aliran darah ke jantung berkurang secara tiba - tiba. Arteri koroner yang memasuk darah memerlukan pasokan darah yang kaya oksigen untuk menuju ke otot jantung, jika arteri tersebut menyempit dapat menyebabkan gangguan fungsi jantung. Beberapa kondisi dan pola hidup yang salah menyebabkan seseorang terkenda sindrom koroner, dimana kondisi penyakit akut biasanya terjadi di usia 50 tahun, namun penyakit ini dapat menyerang di usia muda yaitu 30 tahun. \r\nSeseorang perlu menjaga pola hidup seperti menjauhi pola hidup yang buruk yaitu merokok, begadang, minum alkohol dan sebagainya.\r\nPola buruk tersebut menyebabkan penyakit yang menyerang organ tubuh seperti jantung.\r\nPola pikir juga perlu dijaga untuk mengurangi risiko tekanan darah tinggi, sehingga anda dapat mencari cara untuk menghilangkan stress tersebut.\r\nOlahraga secara teratur juga perlu dilakukan untuk menjaga ritme jantung supaya bekerja dengan baik');

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
  MODIFY `idDetailHasilAnalisa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hasilanalisa`
--
ALTER TABLE `hasilanalisa`
  MODIFY `idHasilAnalisa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `idInformasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
