-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 27, 2022 at 04:50 PM
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
  `tanggal_diagnosa` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
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
  `keterangan_penyakit` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detailhasilanalisa`
--

INSERT INTO `detailhasilanalisa` (`idDetailHasilAnalisa`, `idHasilAnalisa`, `penyakit`, `idPengguna`, `persentase`, `keterangan_penyakit`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Karies Gigi', 1, '60.60959357', '', '2022-03-27 09:09:56', '2022-03-27 09:09:56', NULL),
(2, 2, 'Gingivitis', 1, '30.7456', '', '2022-03-27 12:11:39', '2022-03-27 12:11:39', NULL),
(3, 3, 'Karies Gigi', 2, '60.60959357', '', '2022-03-27 14:44:45', '2022-03-27 14:44:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `id_gejala` varchar(3) NOT NULL,
  `gejala` varchar(255) DEFAULT NULL,
  `gejala_bobot` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id_gejala`, `gejala`, `gejala_bobot`, `created_at`, `updated_at`, `deleted_at`) VALUES
('G01', 'Apakah terjadi perubahan warna pada gigi Anda?', '0.17', '2022-03-27 08:43:29', '2022-03-27 08:46:06', NULL),
('G02', 'Apakah permukaan gigi Anda terasa kasar?', '0.17', '2022-03-27 08:46:28', '2022-03-27 08:46:28', NULL),
('G03', 'Apakah permukaan gigi Anda terasa tajam?', '0.17', '2022-03-27 08:46:49', '2022-03-27 08:46:49', NULL),
('G04', 'Apakah Anda merasakan ada makanan yang mudah tersangkut?', '0.17', '2022-03-27 08:47:10', '2022-03-27 08:47:10', NULL),
('G05', 'Apakah Anda merasakan linu pada bagian gigi jika sudah akut?', '0.17', '2022-03-27 08:47:33', '2022-03-27 08:47:33', NULL),
('G06', 'Apakah Anda tidak merasakan linu pada bagian gigi kronis?', '0.17', '2022-03-27 08:48:35', '2022-03-27 08:48:35', NULL),
('G07', 'Apakah Anda merasakan nyeri yang tajam pada bagian gigi berlangsung cepat dan menetap?', '0.20', '2022-03-27 08:48:52', '2022-03-27 08:48:52', NULL),
('G08', 'Apakah Anda merasakan nyeri pada bagian gigi yang dapat hilang dan timbul kembali secara spontan tanpa adanya rangsangan?', '0.20', '2022-03-27 08:49:24', '2022-03-27 08:49:24', NULL),
('G09', 'Apakah Anda merasakan nyeri pada bagian gigi dapat menjalar hingga kebelakang telinga?', '0.20', '2022-03-27 08:49:42', '2022-03-27 08:49:42', NULL),
('G10', 'Apakah Anda merasakan nyeri pada bagian gigi yang dapat timbul akibat perubahan temperatur seperti dingin, manis, dan asam?', '0.20', '2022-03-27 08:50:01', '2022-03-27 08:50:01', NULL),
('G11', 'Apakah Anda merasakan nyeri pada bagian gigi tidak dapat ditunjukkan dengan tepat?', '0.20', '2022-03-27 08:50:17', '2022-03-27 08:50:17', NULL),
('G12', 'Apakah bagian gusi Anda berwarna kemerahan?', '0.20', '2022-03-27 08:50:38', '2022-03-27 08:50:38', NULL),
('G13', 'Apakah pada bagian gusi Anda mengalami pembengkakan?', '0.19', '2022-03-27 08:50:56', '2022-03-27 04:02:42', NULL),
('G14', 'Apakah pada bagian gusi Anda berdarah apabila disentuh?', '0.20', '2022-03-27 08:51:12', '2022-03-27 08:51:12', NULL),
('G15', 'Apakah Anda mengalami rasa gatal pada bagian gusi di sela-sela gigi?', '0.19', '2022-03-27 08:51:28', '2022-03-27 04:02:53', NULL),
('G16', 'Apakah terdapat karang gigi atau plak pada gigi Anda?', '0.20', '2022-03-27 08:51:44', '2022-03-27 08:51:44', NULL),
('G17', 'Apakah pada bagian gusi Anda terlihat licin dan mengkilap?', '0.16', '2022-03-27 08:52:28', '2022-03-27 09:36:40', NULL),
('G18', 'Apakah pada bagian gusi Anda terasa nyeri apabila dipegang?', '0.16', '2022-03-27 08:52:39', '2022-03-27 09:36:48', NULL),
('G19', 'Apakah pada bagian gusi Anda terdapat cairan nanah?', '0.16', '2022-03-27 08:52:53', '2022-03-27 09:36:56', NULL),
('G20', 'Apakah pada bagian gusi Anda terasa sensitif apabila diketuk?', '0.16', '2022-03-27 08:53:03', '2022-03-27 09:37:05', NULL),
('G21', 'Apakah Anda mengalami goyang pada bagian gigi?', '0.16', '2022-03-27 08:53:18', '2022-03-27 09:37:13', NULL),
('G22', 'Apakah posisi tumbuh pada bagian gigi Anda mengalami malposisi atau tumbuh miring?', '0.20', '2022-03-27 08:53:41', '2022-03-27 09:01:32', NULL),
('G26', 'Apakah gusi Anda mengalami pembengkakan?', '0.16', '2022-03-27 14:34:25', '2022-03-27 14:34:25', NULL),
('G23', 'Apakah pada bagian pipi Anda mengalami pembengkakan dan kesulitan membuka mulut?', '0.20', '2022-03-27 08:55:10', '2022-03-27 09:01:35', NULL),
('G24', 'Apakah Anda mengalami nyeri pada bagian gigi apabila sedang mengunyah?', '0.16', '2022-03-27 08:57:22', '2022-03-27 09:35:55', NULL),
('G25', 'Apakah Anda mengalami rasa nyeri pada bagian gigi apabila sedang menggigit?', '0.16', '2022-03-27 08:57:39', '2022-03-27 09:36:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hasilanalisa`
--

CREATE TABLE `hasilanalisa` (
  `idHasilAnalisa` int(11) NOT NULL,
  `idPengguna` int(11) DEFAULT NULL,
  `tglAnalisa` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasilanalisa`
--

INSERT INTO `hasilanalisa` (`idHasilAnalisa`, `idPengguna`, `tglAnalisa`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '2022-03-27', '2022-03-27 09:09:56', '2022-03-27 09:09:56', NULL),
(2, 1, '2022-03-27', '2022-03-27 12:11:39', '2022-03-27 12:11:39', NULL),
(3, 2, '2022-03-27', '2022-03-27 14:44:45', '2022-03-27 14:44:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `idInformasi` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `content` longtext DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`idInformasi`, `judul`, `content`, `created_at`, `updated_at`, `deleted_at`, `url`) VALUES
(4, 'Gigi', 'Informasi Gigi', '2022-03-27 09:27:54', '2022-03-27 14:27:54', NULL, 'gigi'),
(3, 'Tips Kesehatan', 'Tips kesehatan', '2022-03-27 02:12:15', '2022-03-27 02:12:22', NULL, 'tips-kesehatan');

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
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama_pengguna`, `username`, `password`, `umur`, `jk`, `email`, `tanggal_pendaftaran`, `tgl_lahir`, `tempat_lahir`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Testing', 'testing', 'ae2b1fca515949e5d54fb22b8ed95575', 23, 'Laki-Laki', 'testing@test.coms', '2022-03-26', '1992-11-29', 'Tangerangs', '2022-03-27 06:00:13', '2022-03-27 14:48:16', NULL),
(2, 'Testing 2', 'testing2', 'a119e534072584a0ea88cdea4664aecd', 23, 'Laki-Laki', 'testing2@test.com', '2022-03-27', '1990-10-26', 'Bantul', '2022-03-27 14:42:06', '2022-03-27 14:42:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id_penyakit` varchar(3) NOT NULL,
  `penyakit` varchar(100) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL,
  `url` varchar(150) NOT NULL,
  `url_gambar` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id_penyakit`, `penyakit`, `keterangan`, `created_at`, `updated_at`, `deleted_at`, `url`, `url_gambar`, `deskripsi`) VALUES
('P01', 'Karies Gigi', 'Gigi Berlubang', '2022-03-27 06:00:17', '2022-03-27 03:23:11', NULL, 'karies-gigi', 'http://localhost/ta_expert_system/assets/frontend/images/penyakit/karies.jpg', '<p>Beberapa orang atau bahkan Anda sendiri mungkin masih bingung mengenai perbedaan karies gigi dan gigi berlubang. Pasalnya, kedua kondisi ini memiliki ciri-ciri yang sama, yaitu adanya lubang pada gigi.</p>\r\n<p>Faktanya, karies gigi dan gigi berlubang adalah dua kondisi yang saling berhubungan. Karies gigi sebetulnya merupakan istilah medis yang lebih dikenal sebagai kerusakan gigi atau gigi berlubang.</p>\r\n<p>Karies gigi adalah kondisi rusaknya struktur dan lapisan gigi yang terjadi secara bertahap. Hal ini diawali dengan terkikisnya enamel atau lapisan terluar gigi, kemudian menggerogoti dentin atau lapisan tengah gigi, dan pada akhirnya mencapai sementum alias akar gigi.</p>\r\n<p>Karies gigi umumnya disebabkan oleh kebiasaan makan makanan manis atau jarang menyikat gigi. Saat Anda mengonsumsi makanan manis, bakteri di mulut akan mengubah kandungan gula dari sisa-sisa makanan menjadi asam.</p>\r\n<p>Bila Anda malas menyikat gigi, timbunan asam tersebut dapat berubah menjadi plak berwarna putih, kuning, cokelat, atau kehitaman pada gigi. Jika karies gigi ini tidak segera diatasi, maka kerusakan gigi bisa jadi lebih parah dan menyebabkan gigi berlubang.</p>\r\n<p>Pada awalnya, muncul bercak putih atau white spot pada gigi Anda. Kemudian bila dibiarkan terus menerus, bercak putih akan berubah menjadi kecoklatan dan mulai membentuk lubang pada gigi.</p>\r\n<p>Karena inilah Anda akan merasakan ngilu sesaat setelah mengonsumsi makanan atau minuman yang dingin, panas, atau manis. Lama-kelamaan, gigi berlubang yang sudah parah bisa membuat Anda mengalami sakit gigi yang tak tertahankan.</p>'),
('P02', 'Pulpitis', 'Radang pulpa gigi', '2022-03-27 06:00:17', '2022-03-27 03:23:20', NULL, 'pulpitis', 'http://localhost/ta_expert_system/assets/frontend/images/penyakit/pulpitis.jpg', '<p>Pulpitis adalah penyebab utama dari sakit gigi dan tanggalnya gigi pada orang-orang yang lebih muda. Pulpitis merupakan peradangan pada pulpa gigi (bagian gigi terdalam yang berisi saraf dan pembuluh darah) dan jaringan periradikular yang mengelilingi akar gigi.</p>\r\n<p>Kondisi ini dapat berupa akut atau kronis, dengan atau tanpa gejala. Dalam beberapa kasus, kondisi ini bisa diobati. Namun, kalau sudah parah peradangan pulpa gigi tidak bisa disembuhkan seperti semula lagi.</p>\r\n<p>Kondisi ini cukup umum terjadi. Sering kali terjadi pada pasien yang kurang menjaga kebersihan gigi dan mulut serta pasien dengan sayatan medis pada rongga mulut.</p>\r\n<p>Selain menyebabkan rasa sakit dan tidak nyaman, radang pulpa gigi ini dapat menyebar dan menyebabkan komplikasi yang berpotensi mengancam nyawa, seperti infeksi pada ruang fascia dalam di kepala dan leher.</p>\r\n<p>Pulpitis dapat ditangani dengan mengurangi faktor-faktor risiko. Diskusikan dengan dokter untuk informasi lebih lanjut.</p>\r\n<p>Pulpitis terjadi ketika lapisan enamel dan dentin pelindung pulpa rusak. Ketika lapisan yang melindungi ini rusak, bakteri dapat masuk dengan mudah dan menyebabkan pembengkakan.</p>\r\n<p>Pulpitis tidak hanya disebabkan oleh bakteri, tapi juga bisa terjadi akibat trauma atau cedera pada gigi atau rahang yang membuka rongga pulpa dan mengakibatkan bakteri masuk.</p>'),
('P03', 'Gingivitis', 'Perandangan Gingiva / Radang gusi', '2022-03-27 06:00:17', '2022-03-27 03:23:31', NULL, 'gingivitis', 'http://localhost/ta_expert_system/assets/frontend/images/penyakit/gingivitis.jpg', '<p>Gingivitis (radang gusi) adalah penyakit akibat infeksi bakteri yang menyebabkan gusi bengkak karena meradang.</p>\r\n<p>Penyebab utama kondisi ini adalah kebersihan mulut yang buruk. Orang yang jarang sikat gigi, sering makan makanan yang manis dan asam, tidak rutin cek gigi ke dokter adalah yang paling berisiko mengalami gingivitis.</p>\r\n<p>Banyak orang yang sering tidak tahu mereka memiliki penyakit ini karena gejalanya tidak begitu jelas. Namun, radang gusi tidak boleh dibiarkan berlarut tanpa pengobatan.</p>\r\n<p>Gingivitis adalah penyakit gusi dan mulut yang umum. Kondisi ini dapat dialami siapa saja tanpa memandang jenis kelamin terutama mereka yang tidak menjaga kesehatan gigi dan mulut.</p>\r\n<p>Radang gusi yang tidak diobati dapat berkembang semakin parah. Masalah gusi ini dapat menyebabkan periodontitis, yaitu infeksi gusi serius yang bisa merusak jaringan tulang penyokong gigi. Periodontitis dapat menyebabkan gigi tanggal dan berbagai masalah serius lainnya.</p>\r\n<p>Anda dapat terhindar dari risiko penyakit ini dengan mencegah faktor risiko yang ada. Silakan konsultasi ke dokter gigi untuk informasi lebih lanjut.</p>'),
('P04', 'Abses Gusi', 'Gusi bernanah', '2022-03-27 06:00:17', '2022-03-27 03:23:40', NULL, 'abses-gusi', 'http://localhost/ta_expert_system/assets/frontend/images/penyakit/abses.jpg', '<p>Abses gigi adalah terbentuknya kantung atau benjolan berisi nanah pada gigi. Abses gigi disebabkan oleh infeksi bakteri. Kondisi ini bisa muncul di sekitar akar gigi maupun di gusi.</p>\r\n<p>Infeksi bakteri penyebab abses gigi umumnya terjadi pada orang dengan kebersihan dan kesehatan gigi yang buruk. Nanah yang berkumpul pada benjolan, lambat laun akan terasa bertambah nyeri.</p>\r\n<p>Penyakit ini dapat dicegah dengan cara menyikat gigi secara rutin atau membersihkan gigi menggunakan benang gigi. Untuk menghindari kerusakan dan abses gigi, dianjurkan untuk rutin memeriksakan gigi ke dokter gigi.</p>\r\n<p>Abses gigi dibedakan menjadi beberapa jenis. Berikut ini adalah tiga jenis abses gigi yang paling umum ditemukan:</p>\r\n<ul>\r\n<li>Abses periapikal, yaitu abses yang muncul pada ujung akar gigi.</li>\r\n<li>Abses periodontal, yaitu abses yang muncul pada gusi di sebelah akar gigi dan bisa menyebar ke jaringan dan tulang sekitarnya.</li>\r\n<li>Abses gingiva, yaitu abses yang muncul pada gusi.</li>\r\n</ul>'),
('P05', 'Impaksi Gigi', 'Gigi tidak tumbuh', '2022-03-27 06:00:17', '2022-03-27 03:23:50', NULL, 'impaksi-gigi', 'http://localhost/ta_expert_system/assets/frontend/images/penyakit/impaksi.jpg', '<p>Gigi bungsu adalah gigi geraham ketiga yang paling terakhir tumbuh. Biasanya, gigi ini akan mulai tumbuh saat Anda memasuki usia remaja, yaitu sekitar 17 sampai 20-an. Jumlah gigi orang dewasa sendiri adalah 32.</p>\r\n<p>Setiap orang umumnya punya empat buah gigi geraham bungsu. Dua pasang di atas dan bawah sisi kanan belakang mulut, dan dua pasang lagi di atas-bawah sisi kiri belakang mulut.</p>\r\n<p>Bila tumbuh dengan arah dan posisi yang tepat, tumbuhnya gigi terakhir ini tidak bermasalah. Namun jika pertumbuhan gigi ini miring, maka akan terasa sakit.</p>\r\n<p>Gigi geraham bungsu bisa tumbuh miring dengan arah yang berbeda-beda. Bisa tumbuh horizontal (menyamping), mengarah atau menjauh dari gigi geraham kedua, atau tumbuh ke dalam atau keluar. Kondisi ini dalam istilah medis disebut impaksi gigi bungsu.</p>\r\n<p>Gigi geraham terakhir yang tumbuhnya miring dapat merusak gigi sebelahnya. Tak hanya itu, kerusakan saraf dan tulang rahang yang parah juga bisa terjadi. Akibatnya, Anda akan lebih sering mengalami gusi bengkak dan sakit gigi.</p>'),
('P06', 'Periodontitis', 'Radang jaringan pendukung gigi', '2022-03-27 06:00:17', '2022-03-27 03:23:59', NULL, 'periodontitis', 'http://localhost/ta_expert_system/assets/frontend/images/penyakit/periodontitis.jpg', '<p>Periodontitis adalah infeksi gusi yang merusak gigi, jaringan lunak, dan tulang penyangga gigi. Kondisi ini harus segera diobati karena dapat menyebabkan komplikasi serius.</p>\r\n<p>Periodontitis merupakan salah satu komplikasi dari radang gusi (gingivitis) yang tidak terobati. Jika kondisi ini terjadi dalam jangka panjang, jaringan di sekitar gusi dan gigi akan rusak, sehingga menyebabkan gigi tanggal. Bahkan, bisa muncul abses atau kumpulan nanah di gigi.</p>\r\n<p>Periodontitis bermula dari penumpukan plak di gigi. Plak ini terbentuk dari sisa-sisa makanan yang berinteraksi dengan bakteri yang normalnya hidup di mulut. Jika tidak dibersihkan, plak tersebut akan mengeras dan membentuk karang gigi yang menjadi media bakteri berkembang biak.</p>\r\n<p>Seiring waktu, bakteri di karang gigi tadi akan menyebabkan gusi di sekitar gigi (gingiva) meradang dan iritasi. Jika tidak segera diobati, radang gusi tersebut akan menyebabkan terbentuknya celah di gusi yang memisahkan jaringan gusi dengan gigi.</p>\r\n<p>Celah tersebut menyebabkan bakteri menginfeksi lebih dalam lagi, hingga merusak jaringan dan tulang di dalam gusi. Selain dapat menyebabkan gigi tanggal, radang gusi yang terus terjadi juga dapat melemahkan sistem kekebalan tubuh.</p>');

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
  `date_created` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `is_active`, `id_role`, `date_created`, `created_at`, `updated_at`, `deleted_at`) VALUES
(37, 'Agit', 'agit', '034b9848ecf30f46ac7cdf703efae753', 1, 0, '0000-00-00', '2022-03-27 06:00:20', '2022-03-27 06:00:20', NULL);

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
  `tanggal_diagnosa` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rule_analisa`
--

CREATE TABLE `rule_analisa` (
  `id_rule_analisa` int(11) NOT NULL,
  `id_penyakit` varchar(3) DEFAULT NULL,
  `id_gejala` varchar(3) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rule_analisa`
--

INSERT INTO `rule_analisa` (`id_rule_analisa`, `id_penyakit`, `id_gejala`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'P01', 'G01', '2022-03-27 09:03:19', '2022-03-27 09:03:19', NULL),
(2, 'P01', 'G02', '2022-03-27 09:03:19', '2022-03-27 09:03:19', NULL),
(3, 'P01', 'G03', '2022-03-27 09:03:19', '2022-03-27 09:03:19', NULL),
(4, 'P01', 'G04', '2022-03-27 09:03:19', '2022-03-27 09:03:19', NULL),
(5, 'P01', 'G05', '2022-03-27 09:03:19', '2022-03-27 09:03:19', NULL),
(6, 'P01', 'G06', '2022-03-27 09:03:19', '2022-03-27 09:03:19', NULL),
(7, 'P02', 'G07', '2022-03-27 09:03:35', '2022-03-27 09:03:35', NULL),
(8, 'P02', 'G08', '2022-03-27 09:03:35', '2022-03-27 09:03:35', NULL),
(9, 'P02', 'G09', '2022-03-27 09:03:35', '2022-03-27 09:03:35', NULL),
(10, 'P02', 'G10', '2022-03-27 09:03:35', '2022-03-27 09:03:35', NULL),
(11, 'P02', 'G11', '2022-03-27 09:03:35', '2022-03-27 09:03:35', NULL),
(12, 'P03', 'G12', '2022-03-27 09:03:52', '2022-03-27 09:03:52', NULL),
(13, 'P03', 'G13', '2022-03-27 09:03:52', '2022-03-27 09:03:52', NULL),
(14, 'P03', 'G14', '2022-03-27 09:03:52', '2022-03-27 09:03:52', NULL),
(15, 'P03', 'G15', '2022-03-27 09:03:52', '2022-03-27 09:03:52', NULL),
(16, 'P03', 'G16', '2022-03-27 09:03:52', '2022-03-27 09:03:52', NULL),
(39, 'P04', 'G26', '2022-03-27 14:44:04', '2022-03-27 14:44:04', NULL),
(38, 'P04', 'G21', '2022-03-27 14:44:04', '2022-03-27 14:44:04', NULL),
(37, 'P04', 'G20', '2022-03-27 14:44:04', '2022-03-27 14:44:04', NULL),
(36, 'P04', 'G19', '2022-03-27 14:44:04', '2022-03-27 14:44:04', NULL),
(35, 'P04', 'G18', '2022-03-27 14:44:04', '2022-03-27 14:44:04', NULL),
(34, 'P04', 'G17', '2022-03-27 14:44:04', '2022-03-27 14:44:04', NULL),
(23, 'P05', 'G12', '2022-03-27 09:04:46', '2022-03-27 09:04:46', NULL),
(24, 'P05', 'G13', '2022-03-27 09:04:46', '2022-03-27 09:04:46', NULL),
(25, 'P05', 'G18', '2022-03-27 09:04:46', '2022-03-27 09:04:46', NULL),
(26, 'P05', 'G22', '2022-03-27 09:04:46', '2022-03-27 09:04:46', NULL),
(27, 'P05', 'G23', '2022-03-27 09:04:46', '2022-03-27 09:04:46', NULL),
(28, 'P06', 'G13', '2022-03-27 09:05:19', '2022-03-27 09:05:19', NULL),
(29, 'P06', 'G15', '2022-03-27 09:05:19', '2022-03-27 09:05:19', NULL),
(30, 'P06', 'G18', '2022-03-27 09:05:19', '2022-03-27 09:05:19', NULL),
(31, 'P06', 'G21', '2022-03-27 09:05:19', '2022-03-27 09:05:19', NULL),
(32, 'P06', 'G24', '2022-03-27 09:05:19', '2022-03-27 09:05:19', NULL),
(33, 'P06', 'G25', '2022-03-27 09:05:19', '2022-03-27 09:05:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `solusi`
--

CREATE TABLE `solusi` (
  `id_solusi` int(11) NOT NULL,
  `id_penyakit` varchar(3) DEFAULT NULL,
  `solusi` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `solusi`
--

INSERT INTO `solusi` (`id_solusi`, `id_penyakit`, `solusi`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'P01', '<p>Untuk mengurangi gejala gigi bolong atau berlubang yang terasa sakit, Anda dapat melakukan hal-hal seperti di bawah ini.</p>\r\n<ul>\r\n<li><strong>Tambal gigi</strong>. Bila lubang di gigi tidak begitu besar dan kerusakan belum menyebar terlalu dalam, dokter biasanya akan melakukan tambal gigi. Tambal berguna untuk menutupi rongga yang ada di permukaan gigi agar tidak semakin meluas ke area sekitarnya.</li>\r\n<li><strong>Perawatan saluran akar gigi (<em>root canal</em>)</strong>. Ketika lubang sudah sampai ke pulpa gigi, Anda mungkin membutuhkan perawatan saluran akar gigi. Saluran akar gigi (<em>root canal)</em> adalah prosedur non-invasif yang dilakukan saat pulpa sudah terinfeksi. Tujuannya adalah untuk menyelamatkan gigi. Infeksi di pulpa yang dibiarkan begitu saja berpotensi membuat gigi Anda tidak terselamatkan sehingga gigi harus dicabut. Oleh karena itu, prosedur ini dapat mencegah pencabutan gigi yang sudah tak terselamatkan.</li>\r\n<li><strong>Cabut gigi</strong>. Cabut gigi biasanya jadi pilihan terakhir bila gigi sudah terlanjur sangat rusak dan tidak dapat diobati dengan beragam perawatan lain. Bila hanya satu gigi saja yang dicabut, Anda cukup mendapatkan anestesi lokal. Namun, bila gigi Anda harus dicabut lebih dari satu dalam satu waktu, Anda mungkin akan diberikan obat penenang oral atau bius total. Konsultasikan lebih lanjut tentang hal ini pada dokter gigi.</li>\r\n<li><strong>Obat antibiotik</strong>. Dokter dapat meresepkan antibiotik jenis tertentu untuk mencegah infeksi, termasuk pada kondisi karies gigi. Antibiotik untuk sakit gigi harus diminum sesuai dengan anjuran dokter. Jangan mengurangi, menambahkan, atau menghentikan pengobatan tanpa persetujuan dokter. Apabila dokter memberikan antibiotik maka antibiotik tersebut harus diminum sampai tuntas.</li>\r\n</ul>', '2022-03-27 06:00:35', '2022-03-27 03:12:33', NULL),
(2, 'P02', '<p>Diagnosis untuk pulpitis ringan menunjukkan bahwa pulpa dapat pulih sepenuhnya apabila penyebabnya diatasi. Beberapa perawatan dan pengobatan untuk pulpitis yang dapat diambil, yaitu:</p>\r\n<ul>\r\n<li><strong>Perawatan</strong>: mengangkat karies yang ada, meletakkan pelindung pulpa yang cocok, dan restorasi permanen dilakukan.</li>\r\n<li><strong>Perawatan untuk radang pulpa gigi serius</strong>: melibatkan perawatan saluran akar atau operasi cabut gigi.</li>\r\n</ul>', '2022-03-27 06:00:35', '2022-03-27 03:12:48', NULL),
(3, 'P03', '<p>Beberapa pengobatan paling umum untuk mengatasi nyeri radang gusi di antaranya:</p>\r\n<ul>\r\n<li><strong>Obat pereda nyeri</strong>. Apabila rasa sakitnya amat intens sampai membuat Anda kesulitan mengunyah dan menggigit makanan, dokter dapat meresepkan obat pereda nyeri seperti ibuprofen dan paracetamol. Kedua obat tersebut efektif untuk meredakan sensasi nyut-nyutan di sekitar gusi.</li>\r\n<li><strong>Obat kumur.</strong> Obat kumur antiseptik yang mengandung klorheksidin dapat digunakan untuk membantu melawan bakteri penyebab infeksi di dalam mulut. Gunakan obat kumur sesuai anjuran dokter. Pemakaian yang tidak tepat justru dapat memperburuk kondisi gusi Anda.</li>\r\n<li><strong>Obat antibiotik</strong>. Dokter juga mungkin akan meresepkan obat antibiotik untuk mencegah infeksi yang semakin parah. Antibiotik bekerja dengan cara menekan pertumbuhan bakteri penyebab infeksi. Perhatikan dosis dan cara penggunaan untuk menghindari kondisi gusi yang bertambah parah.</li>\r\n</ul>', '2022-03-27 06:00:35', '2022-03-27 03:13:06', NULL),
(4, 'P04', '<p>Untuk menghilangkan infeksi dan nanah, dokter gigi akan merekomendasikan beberapa tindakan berikut ini:</p>\r\n<ul>\r\n<li><strong>Pengeluaran nanah.</strong> Dokter akan membuat sayatan kecil pada benjolan abses dan mengeluarkan nanah. Setelah nanah dialirkan dan area gigi dibersihkan dengan air garam, diharapkan bengkak akan berkurang.</li>\r\n<li><strong>Pemberian obat antibiotik.</strong> Antibiotik sebenarnya tidak diperlukan bila sudah dilakukan tindakan pengeluaran nanah. Obat antibiotik baru diberikan bila infeksi telah menyebar.</li>\r\n<li><strong>Perawatan saluran akar gigi.</strong> Perawatan akar gigi dapat membantu menghilangkan infeksi. Dokter akan mengebor gigi sampai ke bagian bawah untuk mengangkat jaringan lunak yang menjadi pusat infeksi dan mengalirkan nanah. Setelah itu, gigi yang telah dilubangi ini akan dipasang crown gigi.</li>\r\n<li><strong>Pencabutan gigi.</strong> Jika gigi yang terkena abses tidak bisa diselamatkan, dokter akan mencabut gigi tersebut. Setelah itu, nanah akan dikeluarkan untuk menghilangkan infeksi.</li>\r\n</ul>\r\n<p>Selama masih dalam tahap penyembuhan, pasien akan dianjurkan untuk menjalani perawatan di rumah untuk meringankan sakit, yaitu dengan berkumur menggunakan air garam dan mengonsumsi obat penghilang rasa sakit.</p>', '2022-03-27 06:00:35', '2022-03-27 03:14:56', NULL),
(5, 'P05', '<p>Untuk mengatasi keluhan tersebut, kompreslah area yang mengalami nyeri menggunakan kompres dingin. Selain itu, berkumur dengan larutan air garam dan mengonsumsi obat pereda nyeri seperti aspirin juga dapat membantu meredakan rasa sakit yang muncul.</p>\r\n<p>Meski perawatan tersebut dapat membantu meredakan rasa sakit dan nyeri, Anda tetap disarankan untuk berkunjung ke dokter gigi. Pasalnya jika kondisi tersebut terus dibiarkan, komplikasi seperti periodontitis, abses gigi atau gusi, nyeri hebat, maloklusi atau susunan gigi tidak beraturan, terbentuknya plak gigi, dan kerusakan saraf di sekitar gigi mungkin untuk terjadi.</p>\r\n<p>Perawatan yang diberikan dokter gigi akan disesuaikan dengan kondisi impaksi gigi. Jika dari hasil pemeriksaan menunjukkan bahwa impaksi gigi telah membawa dampak buruk bagi gigi lainnya, tindak pencabutan gigi atau operasi gigi bungsu biasanya akan direkomendasikan.</p>\r\n<p>Tindakan ini sebenarnya bisa dilakukan kapan saja, namun pencabutan gigi impaksi sebelum berusia 20 tahun cenderung lebih mudah untuk dilakukan. Pasalnya pada usia ini, akar gigi geraham bungsu belum berkembang sempurna sehingga lebih mudah diangkat.</p>\r\n<p>Impaksi gigi terkadang tidak menimbulkan keluhan, namun Anda tetap disarankan untuk ke dokter gigi secara rutin agar pertumbuhan gigi bungsu terpantau dari waktu ke waktu. Membiasakan diri berkunjung ke dokter gigi secara rutin setiap 6 bulan sekali juga penting agar kesehatan gigi dan mulut terus terjaga.</p>', '2022-03-27 06:00:35', '2022-03-27 03:16:18', NULL),
(6, 'P06', '<p>Pengobatan periodontitis bertujuan untuk mengurangi peradangan, menghilangkan celah yang terbentuk di antara gusi dan gigi, serta mengatasi penyebab peradangan gusi. Metode pengobatannya tergantung tingkat keparahannya.</p>\r\n<p>Pada periodontitis yang belum parah, metode pengobatan yang dilakukan dokter adalah:</p>\r\n<ul>\r\n<li><em>Scaling</em>, untuk menghilangkan karang gigi dan bakteri dari permukaan gigi atau bagian bawah gusi</li>\r\n<li><em>Root planing</em>, untuk membersihkan dan mencegah penumpukan bakteri dan karang gigi lebih lanjut, serta untuk menghaluskan permukaan akar</li>\r\n<li>Pemberian antibiotik (bisa dalam bentuk minum, obat kumur atau gel), untuk menghilangkan bakteri penyebab infeksi</li>\r\n<li>Pencabutan gigi yang terdampak, agar tidak semakin parah dan menyerang gigi di sekitarnya</li>\r\n</ul>\r\n<p>Untuk periodontitis yang sudah parah, dokter akan melakukan prosedur operasi, seperti:</p>\r\n<ul>\r\n<li><strong><em>Flap surgery</em></strong>, untuk mengurangi kantong atau celah gusi</li>\r\n<li><em><strong>Soft tissue grafts </strong></em><strong>atau operasi cangkok jaringan lunak</strong>, untuk mengganti jaringan yang rusak akibat periodontitis</li>\r\n<li><strong><em>Bone grafting</em> atau operasi cangkok tulang</strong>, untuk memperbaiki tulang-tulang di sekitar akar gigi yang telah hancur</li>\r\n<li><em><strong>Guided tissue regeneration</strong></em>, untuk merangsang pertumbuhan tulang baru guna mengganti tulang yang hancur akibat infeksi</li>\r\n<li><em><strong>Tissue-stimulating proteins</strong>,</em>&nbsp;untuk merangsang pertumbuhan jaringan dan tulang baru</li>\r\n</ul>', '2022-03-27 06:00:35', '2022-03-27 03:18:33', NULL),
(7, 'P07', 'Darah rendah disebabkan oleh tekanan darah yang dibawah normal akibat beberapa faktor seperti dehidrasi, perubahan hormon dan kelelahan. Beberapa cara untuk mencegah tekanan darah rendah dapat dilakukan dengan mengatur pola hidup yang benar seperti berisitrahat dengan cukup dan menjaga pola gizi yang seimbang.\r\nDarah rendah dapat dicegah dengan mengonsumsi cairan untuk meningkatkan volume darah dan mencegah dehidrasi , sehingga setiap individu minimal memerlukan 8 gelas perhari serta makanan yang mengandung mineral selain itu perlu meningkatkan asupan natrium.\r\nPola hidup perlu dijaga dengan baik, sehingga porsi dalam kegiatan setiap hari harus diperhatikan yaitu 8 jam istirahat, 8 jam aktivitas dan 8 jam bekerja. Waktu yang cukup dalam pembagian tersebut sangat penting karena tubuh memerlukan metabolisme yang betul. ', '2022-03-27 06:00:35', '2022-03-27 06:00:35', NULL),
(8, 'P08', 'Penyakit jantung sindrom koroner merupakan kondisi aliran darah ke jantung berkurang secara tiba - tiba. Arteri koroner yang memasuk darah memerlukan pasokan darah yang kaya oksigen untuk menuju ke otot jantung, jika arteri tersebut menyempit dapat menyebabkan gangguan fungsi jantung. Beberapa kondisi dan pola hidup yang salah menyebabkan seseorang terkenda sindrom koroner, dimana kondisi penyakit akut biasanya terjadi di usia 50 tahun, namun penyakit ini dapat menyerang di usia muda yaitu 30 tahun. \r\nSeseorang perlu menjaga pola hidup seperti menjauhi pola hidup yang buruk yaitu merokok, begadang, minum alkohol dan sebagainya.\r\nPola buruk tersebut menyebabkan penyakit yang menyerang organ tubuh seperti jantung.\r\nPola pikir juga perlu dijaga untuk mengurangi risiko tekanan darah tinggi, sehingga anda dapat mencari cara untuk menghilangkan stress tersebut.\r\nOlahraga secara teratur juga perlu dilakukan untuk menjaga ritme jantung supaya bekerja dengan baik', '2022-03-27 06:00:35', '2022-03-27 06:00:35', NULL);

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
  MODIFY `idDetailHasilAnalisa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hasilanalisa`
--
ALTER TABLE `hasilanalisa`
  MODIFY `idHasilAnalisa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `idInformasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id_rule_analisa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `solusi`
--
ALTER TABLE `solusi`
  MODIFY `id_solusi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
