-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 04, 2022 at 06:00 PM
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
  `densitas` varchar(255) DEFAULT NULL,
  `kode_densitas` varchar(255) DEFAULT NULL,
  `nilai_densitas` decimal(10,4) DEFAULT NULL,
  `tgl_diagnosa` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_hasil_analisa` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detail_hasil_analisa`
--

CREATE TABLE `detail_hasil_analisa` (
  `id_detail_hasil_analisa` int(11) NOT NULL,
  `id_hasil_analisa` int(11) DEFAULT NULL,
  `nama_penyakit` text DEFAULT NULL,
  `persentase` decimal(10,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_penyakit` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
('G01', 'Apakah terjadi perubahan warna pada gigi Anda?', '0.17', '2022-03-27 08:43:29', '2022-04-04 10:26:34', NULL),
('G02', 'Apakah permukaan gigi Anda terasa kasar?', '0.17', '2022-03-27 08:46:28', '2022-04-03 09:38:39', NULL),
('G03', 'Apakah permukaan gigi Anda terasa tajam?', '0.17', '2022-03-27 08:46:49', '2022-04-03 09:40:04', NULL),
('G04', 'Apakah Anda merasakan ada makanan yang mudah tersangkut?', '0.17', '2022-03-27 08:47:10', '2022-04-03 09:40:12', NULL),
('G05', 'Apakah Anda merasakan linu pada bagian gigi jika sudah akut?', '0.17', '2022-03-27 08:47:33', '2022-04-03 09:40:21', NULL),
('G06', 'Apakah Anda tidak merasakan linu pada bagian gigi kronis?', '0.17', '2022-03-27 08:48:35', '2022-04-03 09:40:25', NULL),
('G07', 'Apakah Anda merasakan nyeri yang tajam pada bagian gigi berlangsung cepat dan menetap?', '0.20', '2022-03-27 08:48:52', '2022-03-27 08:48:52', NULL),
('G08', 'Apakah Anda merasakan nyeri pada bagian gigi yang dapat hilang dan timbul kembali secara spontan tanpa adanya rangsangan?', '0.20', '2022-03-27 08:49:24', '2022-03-27 08:49:24', NULL),
('G09', 'Apakah Anda merasakan nyeri pada bagian gigi dapat menjalar hingga kebelakang telinga?', '0.20', '2022-03-27 08:49:42', '2022-03-27 08:49:42', NULL),
('G10', 'Apakah Anda merasakan nyeri pada bagian gigi yang dapat timbul akibat perubahan temperatur seperti dingin, manis, dan asam?', '0.20', '2022-03-27 08:50:01', '2022-03-27 08:50:01', NULL),
('G11', 'Apakah Anda merasakan nyeri pada bagian gigi tidak dapat ditunjukkan dengan tepat?', '0.20', '2022-03-27 08:50:17', '2022-03-27 08:50:17', NULL),
('G12', 'Apakah bagian gusi Anda berwarna kemerahan?', '0.20', '2022-03-27 08:50:38', '2022-03-27 08:50:38', NULL),
('G13', 'Apakah pada bagian gusi Anda mengalami pembengkakan?', '0.19', '2022-03-27 08:50:56', '2022-04-03 09:40:40', NULL),
('G14', 'Apakah pada bagian gusi Anda berdarah apabila disentuh?', '0.20', '2022-03-27 08:51:12', '2022-03-27 08:51:12', NULL),
('G15', 'Apakah Anda mengalami rasa gatal pada bagian gusi di sela-sela gigi?', '0.18', '2022-03-27 08:51:28', '2022-04-02 02:59:25', NULL),
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
-- Table structure for table `hasil_analisa`
--

CREATE TABLE `hasil_analisa` (
  `id_hasil_analisa` int(11) NOT NULL,
  `id_pengguna` int(11) DEFAULT NULL,
  `tgl_analisa` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL,
  `payload` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id_informasi` int(11) NOT NULL,
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

INSERT INTO `informasi` (`id_informasi`, `judul`, `content`, `created_at`, `updated_at`, `deleted_at`, `url`) VALUES
(4, 'Organ Gigi', '<p>Gigi mulai berkembang jauh sebelum gigi pertama muncul, yaitu pada awal trimester kedua kehamilan. Mahkota gigi akan terbentuk lebih dulu, kemudian akarnya akan terus berkembang bahkan ketika gigi sudah terlihat. Gigi pertama muncul sekitar usia 6-10 bulan, dan gigi susu ini akan digantikan oleh gigi tetap ketika anak berusia sekitar 6-7 tahun. Untuk mengetahui lebih lanjut, simak artikel kami tentang gigi susu.</p>\r\n<p>Memang bagian gigi yang terlihat oleh kita hanyalah bagian putihnya, namun gigi memiliki anatomi yang kompleks dengan berbagai lapisan. Bagian-bagian utama gigi tersebut adalah:</p>\r\n<ul>\r\n<li>Enamel. Enamel gigi adalah bagian terluar gigi yang berwarna putih. Enamel terbentuk dari kalsium dan fosfat dan berfungsi sebagai lapisan pelindung gigi.</li>\r\n<li>Dentin. Dentin adalah lapisan di bawah enamel gigi dan berwarna kekuningan. Ketika lapisan enamel terkikis, dentin akan terekspos sehingga gigi akan terlihat kekuningan. Lapisan dentin memiliki rongga kecil yang berhubungan langsung dengan jaringan pulpa yang berisi saraf dan pembuluh darah, jadi ketika lapisan dentin terbuka,menyebabkan nyeri ketika gigi berkontak dengan makanan atau minuman dingin dan panas.</li>\r\n<li>Pulpa atau rongga gigi. Pulpa terletak di pusat gigi dan berisi jaringan pembuluh darah, jaringan saraf, dan jaringan lunak yang lain. Pulpa berfungsi untuk membentuk dentin serta mengirimkan sensasi panas, dingin, sakit, dan tekanan ke gigi Anda.</li>\r\n<li>Sementum. Sementum adalah lapisan kuat yang melapisi akar gigi dan berbatasan langsung dengan tulang rahang.</li>\r\n</ul>', '2022-03-27 09:27:54', '2022-04-02 05:37:07', NULL, 'organ-gigi'),
(3, 'Cara Menjaga Kesehatan Gigi dan Mulut', '<p>Kesehatan gigi dan mulut memiliki peranan penting pada proses pencernaan makanan dalam tubuh manusia. Tahap awal dari berlangsungnya proses pencernaan makanan adalah pengunyahan yang baik. Selain fungsi dasar gigi dalam pengunyahan, gigi juga memiliki fungsi sosial, yaitu fungsi verbal untuk berbicara dan fungsi estetika atau kecantikan. Bayangkan jika kita kehilangan gigi depan betapa kehidupan sosial kita akan terganggu karenanya.</p>\r\n<ol>\r\n<li>Menyikat gigi minimal 2 kali sehari setiap pagi hari setelah sarapan dan sebelum tidur.</li>\r\n<li>Gunakanlah sikat gigi dengan bulu sikat yang lembut dan kepala sikat yang kecil untuk memudahkan menyikat gigi pada sudut mulut.</li>\r\n<li>Sikat seluruh permukaan gigi dengan pasta gigi berfluoride dan sikatlah gigi selama 2 menit.</li>\r\n<li>Bersihkan sela gigi dengan benang gigi atau sikat gigi interdental.</li>\r\n<li>Bila perlu kumur dengan obat kumur antibakteri contoh obat kumur mengandung chlorhexidine (selama 30 detik sebelum tidur)</li>\r\n<li>Hindari kebiasaan mengemil makanan manis dan lengket diantara waktu makan (misal permen, coklat, kue), serta makan makanan yang mengandung asam (misal cuka, minuman soda, minuman istotonik) karena dapat mengikis lapisan email gigi.</li>\r\n<li>Perbanyak konsumsi air putih.</li>\r\n<li>Konsumsi permen xylitol sehari sekali</li>\r\n<li>Periksa rutin ke dokter gigi setiap 6 bulan sekali. Bila ada karies atau tambalan yang rusak harus segera diperbaiki.</li>\r\n</ol>', '2022-03-27 02:12:15', '2022-04-02 05:36:47', NULL, 'cara-menjaga-kesehatan-gigi-dan-mulut');

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
  `jenis_kelamin` varchar(50) DEFAULT NULL,
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

INSERT INTO `pengguna` (`id_pengguna`, `nama_pengguna`, `username`, `password`, `umur`, `jenis_kelamin`, `email`, `tanggal_pendaftaran`, `tgl_lahir`, `tempat_lahir`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Testing WAOS', 'testing', 'ae2b1fca515949e5d54fb22b8ed95575', 1, 'Laki-Laki', 'testing@test.com', '2022-04-02', '2022-04-14', 'Bantul', '2022-04-02 09:23:35', '2022-04-04 10:26:22', NULL);

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
  `deskripsi` text NOT NULL,
  `solusi` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id_penyakit`, `penyakit`, `keterangan`, `created_at`, `updated_at`, `deleted_at`, `url`, `url_gambar`, `deskripsi`, `solusi`) VALUES
('P01', 'Karies Gigi', 'Gigi Berlubang', '2022-03-27 06:00:17', '2022-04-02 06:11:38', NULL, 'karies-gigi', 'http://localhost/ta_expert_system/assets/frontend/images/penyakit/karies.jpg', '<p>Beberapa orang atau bahkan Anda sendiri mungkin masih bingung mengenai perbedaan karies gigi dan gigi berlubang. Pasalnya, kedua kondisi ini memiliki ciri-ciri yang sama, yaitu adanya lubang pada gigi.</p>\r\n<p>Faktanya, karies gigi dan gigi berlubang adalah dua kondisi yang saling berhubungan. Karies gigi sebetulnya merupakan istilah medis yang lebih dikenal sebagai kerusakan gigi atau gigi berlubang.</p>\r\n<p>Karies gigi adalah kondisi rusaknya struktur dan lapisan gigi yang terjadi secara bertahap. Hal ini diawali dengan terkikisnya enamel atau lapisan terluar gigi, kemudian menggerogoti dentin atau lapisan tengah gigi, dan pada akhirnya mencapai sementum alias akar gigi.</p>\r\n<p>Karies gigi umumnya disebabkan oleh kebiasaan makan makanan manis atau jarang menyikat gigi. Saat Anda mengonsumsi makanan manis, bakteri di mulut akan mengubah kandungan gula dari sisa-sisa makanan menjadi asam.</p>\r\n<p>Bila Anda malas menyikat gigi, timbunan asam tersebut dapat berubah menjadi plak berwarna putih, kuning, cokelat, atau kehitaman pada gigi. Jika karies gigi ini tidak segera diatasi, maka kerusakan gigi bisa jadi lebih parah dan menyebabkan gigi berlubang.</p>\r\n<p>Pada awalnya, muncul bercak putih atau white spot pada gigi Anda. Kemudian bila dibiarkan terus menerus, bercak putih akan berubah menjadi kecoklatan dan mulai membentuk lubang pada gigi.</p>\r\n<p>Karena inilah Anda akan merasakan ngilu sesaat setelah mengonsumsi makanan atau minuman yang dingin, panas, atau manis. Lama-kelamaan, gigi berlubang yang sudah parah bisa membuat Anda mengalami sakit gigi yang tak tertahankan.</p>', '<p>Untuk mengurangi gejala gigi bolong atau berlubang yang terasa sakit, Anda dapat melakukan hal-hal seperti di bawah ini.</p>\r\n<ul>\r\n<li><strong>Tambal gigi</strong>. Bila lubang di gigi tidak begitu besar dan kerusakan belum menyebar terlalu dalam, dokter biasanya akan melakukan tambal gigi. Tambal berguna untuk menutupi rongga yang ada di permukaan gigi agar tidak semakin meluas ke area sekitarnya.</li>\r\n<li><strong>Perawatan saluran akar gigi (<em>root canal</em>)</strong>. Ketika lubang sudah sampai ke pulpa gigi, Anda mungkin membutuhkan perawatan saluran akar gigi. Saluran akar gigi (<em>root canal)</em> adalah prosedur non-invasif yang dilakukan saat pulpa sudah terinfeksi. Tujuannya adalah untuk menyelamatkan gigi. Infeksi di pulpa yang dibiarkan begitu saja berpotensi membuat gigi Anda tidak terselamatkan sehingga gigi harus dicabut. Oleh karena itu, prosedur ini dapat mencegah pencabutan gigi yang sudah tak terselamatkan.</li>\r\n<li><strong>Cabut gigi</strong>. Cabut gigi biasanya jadi pilihan terakhir bila gigi sudah terlanjur sangat rusak dan tidak dapat diobati dengan beragam perawatan lain. Bila hanya satu gigi saja yang dicabut, Anda cukup mendapatkan anestesi lokal. Namun, bila gigi Anda harus dicabut lebih dari satu dalam satu waktu, Anda mungkin akan diberikan obat penenang oral atau bius total. Konsultasikan lebih lanjut tentang hal ini pada dokter gigi.</li>\r\n<li><strong>Obat antibiotik</strong>. Dokter dapat meresepkan antibiotik jenis tertentu untuk mencegah infeksi, termasuk pada kondisi karies gigi. Antibiotik untuk sakit gigi harus diminum sesuai dengan anjuran dokter. Jangan mengurangi, menambahkan, atau menghentikan pengobatan tanpa persetujuan dokter. Apabila dokter memberikan antibiotik maka antibiotik tersebut harus diminum sampai tuntas.</li>\r\n</ul>'),
('P02', 'Pulpitis', 'Radang pulpa gigi', '2022-03-27 06:00:17', '2022-04-02 05:38:21', NULL, 'pulpitis', 'http://localhost/ta_expert_system/assets/frontend/images/penyakit/pulpitis.jpg', '<p>Pulpitis adalah penyebab utama dari sakit gigi dan tanggalnya gigi pada orang-orang yang lebih muda. Pulpitis merupakan peradangan pada pulpa gigi (bagian gigi terdalam yang berisi saraf dan pembuluh darah) dan jaringan periradikular yang mengelilingi akar gigi.</p>\r\n<p>Kondisi ini dapat berupa akut atau kronis, dengan atau tanpa gejala. Dalam beberapa kasus, kondisi ini bisa diobati. Namun, kalau sudah parah peradangan pulpa gigi tidak bisa disembuhkan seperti semula lagi.</p>\r\n<p>Kondisi ini cukup umum terjadi. Sering kali terjadi pada pasien yang kurang menjaga kebersihan gigi dan mulut serta pasien dengan sayatan medis pada rongga mulut.</p>\r\n<p>Selain menyebabkan rasa sakit dan tidak nyaman, radang pulpa gigi ini dapat menyebar dan menyebabkan komplikasi yang berpotensi mengancam nyawa, seperti infeksi pada ruang fascia dalam di kepala dan leher.</p>\r\n<p>Pulpitis dapat ditangani dengan mengurangi faktor-faktor risiko. Diskusikan dengan dokter untuk informasi lebih lanjut.</p>\r\n<p>Pulpitis terjadi ketika lapisan enamel dan dentin pelindung pulpa rusak. Ketika lapisan yang melindungi ini rusak, bakteri dapat masuk dengan mudah dan menyebabkan pembengkakan.</p>\r\n<p>Pulpitis tidak hanya disebabkan oleh bakteri, tapi juga bisa terjadi akibat trauma atau cedera pada gigi atau rahang yang membuka rongga pulpa dan mengakibatkan bakteri masuk.</p>', '<p>Diagnosis untuk pulpitis ringan menunjukkan bahwa pulpa dapat pulih sepenuhnya apabila penyebabnya diatasi. Beberapa perawatan dan pengobatan untuk pulpitis yang dapat diambil, yaitu:</p>\r\n<ul>\r\n<li><strong>Perawatan</strong>: mengangkat karies yang ada, meletakkan pelindung pulpa yang cocok, dan restorasi permanen dilakukan.</li>\r\n<li><strong>Perawatan untuk radang pulpa gigi serius</strong>: melibatkan perawatan saluran akar atau operasi cabut gigi.</li>\r\n</ul>'),
('P03', 'Gingivitis', 'Perandangan Gingiva / Radang gusi', '2022-03-27 06:00:17', '2022-04-02 05:38:21', NULL, 'gingivitis', 'http://localhost/ta_expert_system/assets/frontend/images/penyakit/gingivitis.jpg', '<p>Gingivitis (radang gusi) adalah penyakit akibat infeksi bakteri yang menyebabkan gusi bengkak karena meradang.</p>\r\n<p>Penyebab utama kondisi ini adalah kebersihan mulut yang buruk. Orang yang jarang sikat gigi, sering makan makanan yang manis dan asam, tidak rutin cek gigi ke dokter adalah yang paling berisiko mengalami gingivitis.</p>\r\n<p>Banyak orang yang sering tidak tahu mereka memiliki penyakit ini karena gejalanya tidak begitu jelas. Namun, radang gusi tidak boleh dibiarkan berlarut tanpa pengobatan.</p>\r\n<p>Gingivitis adalah penyakit gusi dan mulut yang umum. Kondisi ini dapat dialami siapa saja tanpa memandang jenis kelamin terutama mereka yang tidak menjaga kesehatan gigi dan mulut.</p>\r\n<p>Radang gusi yang tidak diobati dapat berkembang semakin parah. Masalah gusi ini dapat menyebabkan periodontitis, yaitu infeksi gusi serius yang bisa merusak jaringan tulang penyokong gigi. Periodontitis dapat menyebabkan gigi tanggal dan berbagai masalah serius lainnya.</p>\r\n<p>Anda dapat terhindar dari risiko penyakit ini dengan mencegah faktor risiko yang ada. Silakan konsultasi ke dokter gigi untuk informasi lebih lanjut.</p>', '<p>Untuk menghilangkan infeksi dan nanah, dokter gigi akan merekomendasikan beberapa tindakan berikut ini:</p>\r\n<ul>\r\n<li><strong>Pengeluaran nanah.</strong> Dokter akan membuat sayatan kecil pada benjolan abses dan mengeluarkan nanah. Setelah nanah dialirkan dan area gigi dibersihkan dengan air garam, diharapkan bengkak akan berkurang.</li>\r\n<li><strong>Pemberian obat antibiotik.</strong> Antibiotik sebenarnya tidak diperlukan bila sudah dilakukan tindakan pengeluaran nanah. Obat antibiotik baru diberikan bila infeksi telah menyebar.</li>\r\n<li><strong>Perawatan saluran akar gigi.</strong> Perawatan akar gigi dapat membantu menghilangkan infeksi. Dokter akan mengebor gigi sampai ke bagian bawah untuk mengangkat jaringan lunak yang menjadi pusat infeksi dan mengalirkan nanah. Setelah itu, gigi yang telah dilubangi ini akan dipasang crown gigi.</li>\r\n<li><strong>Pencabutan gigi.</strong> Jika gigi yang terkena abses tidak bisa diselamatkan, dokter akan mencabut gigi tersebut. Setelah itu, nanah akan dikeluarkan untuk menghilangkan infeksi.</li>\r\n</ul>\r\n<p>Selama masih dalam tahap penyembuhan, pasien akan dianjurkan untuk menjalani perawatan di rumah untuk meringankan sakit, yaitu dengan berkumur menggunakan air garam dan mengonsumsi obat penghilang rasa sakit.</p>'),
('P04', 'Abses Gusi', 'Gusi bernanah', '2022-03-27 06:00:17', '2022-04-02 05:38:40', NULL, 'abses-gusi', 'http://localhost/ta_expert_system/assets/frontend/images/penyakit/abses.jpg', '<p>Abses gigi adalah terbentuknya kantung atau benjolan berisi nanah pada gigi. Abses gigi disebabkan oleh infeksi bakteri. Kondisi ini bisa muncul di sekitar akar gigi maupun di gusi.</p>\r\n<p>Infeksi bakteri penyebab abses gigi umumnya terjadi pada orang dengan kebersihan dan kesehatan gigi yang buruk. Nanah yang berkumpul pada benjolan, lambat laun akan terasa bertambah nyeri.</p>\r\n<p>Penyakit ini dapat dicegah dengan cara menyikat gigi secara rutin atau membersihkan gigi menggunakan benang gigi. Untuk menghindari kerusakan dan abses gigi, dianjurkan untuk rutin memeriksakan gigi ke dokter gigi.</p>\r\n<p>Abses gigi dibedakan menjadi beberapa jenis. Berikut ini adalah tiga jenis abses gigi yang paling umum ditemukan:</p>\r\n<ul>\r\n<li>Abses periapikal, yaitu abses yang muncul pada ujung akar gigi.</li>\r\n<li>Abses periodontal, yaitu abses yang muncul pada gusi di sebelah akar gigi dan bisa menyebar ke jaringan dan tulang sekitarnya.</li>\r\n<li>Abses gingiva, yaitu abses yang muncul pada gusi.</li>\r\n</ul>', '<p>Untuk menghilangkan infeksi dan nanah, dokter gigi akan merekomendasikan beberapa tindakan berikut ini:</p>\r\n<ul>\r\n<li><strong>Pengeluaran nanah.</strong> Dokter akan membuat sayatan kecil pada benjolan abses dan mengeluarkan nanah. Setelah nanah dialirkan dan area gigi dibersihkan dengan air garam, diharapkan bengkak akan berkurang.</li>\r\n<li><strong>Pemberian obat antibiotik.</strong> Antibiotik sebenarnya tidak diperlukan bila sudah dilakukan tindakan pengeluaran nanah. Obat antibiotik baru diberikan bila infeksi telah menyebar.</li>\r\n<li><strong>Perawatan saluran akar gigi.</strong> Perawatan akar gigi dapat membantu menghilangkan infeksi. Dokter akan mengebor gigi sampai ke bagian bawah untuk mengangkat jaringan lunak yang menjadi pusat infeksi dan mengalirkan nanah. Setelah itu, gigi yang telah dilubangi ini akan dipasang crown gigi.</li>\r\n<li><strong>Pencabutan gigi.</strong> Jika gigi yang terkena abses tidak bisa diselamatkan, dokter akan mencabut gigi tersebut. Setelah itu, nanah akan dikeluarkan untuk menghilangkan infeksi.</li>\r\n</ul>\r\n<p>Selama masih dalam tahap penyembuhan, pasien akan dianjurkan untuk menjalani perawatan di rumah untuk meringankan sakit, yaitu dengan berkumur menggunakan air garam dan mengonsumsi obat penghilang rasa sakit.</p>'),
('P05', 'Impaksi Gigi', 'Gigi tidak tumbuh', '2022-03-27 06:00:17', '2022-04-02 05:38:40', NULL, 'impaksi-gigi', 'http://localhost/ta_expert_system/assets/frontend/images/penyakit/impaksi.jpg', '<p>Gigi bungsu adalah gigi geraham ketiga yang paling terakhir tumbuh. Biasanya, gigi ini akan mulai tumbuh saat Anda memasuki usia remaja, yaitu sekitar 17 sampai 20-an. Jumlah gigi orang dewasa sendiri adalah 32.</p>\r\n<p>Setiap orang umumnya punya empat buah gigi geraham bungsu. Dua pasang di atas dan bawah sisi kanan belakang mulut, dan dua pasang lagi di atas-bawah sisi kiri belakang mulut.</p>\r\n<p>Bila tumbuh dengan arah dan posisi yang tepat, tumbuhnya gigi terakhir ini tidak bermasalah. Namun jika pertumbuhan gigi ini miring, maka akan terasa sakit.</p>\r\n<p>Gigi geraham bungsu bisa tumbuh miring dengan arah yang berbeda-beda. Bisa tumbuh horizontal (menyamping), mengarah atau menjauh dari gigi geraham kedua, atau tumbuh ke dalam atau keluar. Kondisi ini dalam istilah medis disebut impaksi gigi bungsu.</p>\r\n<p>Gigi geraham terakhir yang tumbuhnya miring dapat merusak gigi sebelahnya. Tak hanya itu, kerusakan saraf dan tulang rahang yang parah juga bisa terjadi. Akibatnya, Anda akan lebih sering mengalami gusi bengkak dan sakit gigi.</p>', '<p>Untuk mengatasi keluhan tersebut, kompreslah area yang mengalami nyeri menggunakan kompres dingin. Selain itu, berkumur dengan larutan air garam dan mengonsumsi obat pereda nyeri seperti aspirin juga dapat membantu meredakan rasa sakit yang muncul.</p>\r\n<p>Meski perawatan tersebut dapat membantu meredakan rasa sakit dan nyeri, Anda tetap disarankan untuk berkunjung ke dokter gigi. Pasalnya jika kondisi tersebut terus dibiarkan, komplikasi seperti periodontitis, abses gigi atau gusi, nyeri hebat, maloklusi atau susunan gigi tidak beraturan, terbentuknya plak gigi, dan kerusakan saraf di sekitar gigi mungkin untuk terjadi.</p>\r\n<p>Perawatan yang diberikan dokter gigi akan disesuaikan dengan kondisi impaksi gigi. Jika dari hasil pemeriksaan menunjukkan bahwa impaksi gigi telah membawa dampak buruk bagi gigi lainnya, tindak pencabutan gigi atau operasi gigi bungsu biasanya akan direkomendasikan.</p>\r\n<p>Tindakan ini sebenarnya bisa dilakukan kapan saja, namun pencabutan gigi impaksi sebelum berusia 20 tahun cenderung lebih mudah untuk dilakukan. Pasalnya pada usia ini, akar gigi geraham bungsu belum berkembang sempurna sehingga lebih mudah diangkat.</p>\r\n<p>Impaksi gigi terkadang tidak menimbulkan keluhan, namun Anda tetap disarankan untuk ke dokter gigi secara rutin agar pertumbuhan gigi bungsu terpantau dari waktu ke waktu. Membiasakan diri berkunjung ke dokter gigi secara rutin setiap 6 bulan sekali juga penting agar kesehatan gigi dan mulut terus terjaga.</p>'),
('P06', 'Periodontitis', 'Radang jaringan pendukung gigi', '2022-03-27 06:00:17', '2022-04-02 01:13:03', NULL, 'periodontitis', 'http://localhost/ta_expert_system/assets/frontend/images/penyakit/periodontitis.jpg', '<p>Periodontitis adalah infeksi gusi yang merusak gigi, jaringan lunak, dan tulang penyangga gigi. Kondisi ini harus segera diobati karena dapat menyebabkan komplikasi serius.</p>\r\n<p>Periodontitis merupakan salah satu komplikasi dari radang gusi (gingivitis) yang tidak terobati. Jika kondisi ini terjadi dalam jangka panjang, jaringan di sekitar gusi dan gigi akan rusak, sehingga menyebabkan gigi tanggal. Bahkan, bisa muncul abses atau kumpulan nanah di gigi.</p>\r\n<p>Periodontitis bermula dari penumpukan plak di gigi. Plak ini terbentuk dari sisa-sisa makanan yang berinteraksi dengan bakteri yang normalnya hidup di mulut. Jika tidak dibersihkan, plak tersebut akan mengeras dan membentuk karang gigi yang menjadi media bakteri berkembang biak.</p>\r\n<p>Seiring waktu, bakteri di karang gigi tadi akan menyebabkan gusi di sekitar gigi (gingiva) meradang dan iritasi. Jika tidak segera diobati, radang gusi tersebut akan menyebabkan terbentuknya celah di gusi yang memisahkan jaringan gusi dengan gigi.</p>\r\n<p>Celah tersebut menyebabkan bakteri menginfeksi lebih dalam lagi, hingga merusak jaringan dan tulang di dalam gusi. Selain dapat menyebabkan gigi tanggal, radang gusi yang terus terjadi juga dapat melemahkan sistem kekebalan tubuh.</p>', '<p>Pengobatan periodontitis bertujuan untuk mengurangi peradangan, menghilangkan celah yang terbentuk di antara gusi dan gigi, serta mengatasi penyebab peradangan gusi. Metode pengobatannya tergantung tingkat keparahannya.</p>\r\n<p>Pada periodontitis yang belum parah, metode pengobatan yang dilakukan dokter adalah:</p>\r\n<ul>\r\n<li><em>Scaling</em>, untuk menghilangkan karang gigi dan bakteri dari permukaan gigi atau bagian bawah gusi</li>\r\n<li><em>Root planing</em>, untuk membersihkan dan mencegah penumpukan bakteri dan karang gigi lebih lanjut, serta untuk menghaluskan permukaan akar</li>\r\n<li>Pemberian antibiotik (bisa dalam bentuk minum, obat kumur atau gel), untuk menghilangkan bakteri penyebab infeksi</li>\r\n<li>Pencabutan gigi yang terdampak, agar tidak semakin parah dan menyerang gigi di sekitarnya</li>\r\n</ul>\r\n<p>Untuk periodontitis yang sudah parah, dokter akan melakukan prosedur operasi, seperti:</p>\r\n<ul>\r\n<li><strong><em>Flap surgery</em></strong>, untuk mengurangi kantong atau celah gusi</li>\r\n<li><em><strong>Soft tissue grafts </strong></em><strong>atau operasi cangkok jaringan lunak</strong>, untuk mengganti jaringan yang rusak akibat periodontitis</li>\r\n<li><strong><em>Bone grafting</em> atau operasi cangkok tulang</strong>, untuk memperbaiki tulang-tulang di sekitar akar gigi yang telah hancur</li>\r\n<li><em><strong>Guided tissue regeneration</strong></em>, untuk merangsang pertumbuhan tulang baru guna mengganti tulang yang hancur akibat infeksi</li>\r\n<li><em><strong>Tissue-stimulating proteins</strong>,</em> untuk merangsang pertumbuhan jaringan dan tulang baru</li>\r\n</ul>');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `date_created` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `date_created`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'Asep', 'asep', 'fa4d55f2ec70bb48bb7fe39d614de992', '2022-04-02', '2022-04-02 09:57:24', '2022-04-02 09:57:24', NULL);

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `analisa`
--
ALTER TABLE `analisa`
  ADD PRIMARY KEY (`id_analisa`);

--
-- Indexes for table `detail_hasil_analisa`
--
ALTER TABLE `detail_hasil_analisa`
  ADD PRIMARY KEY (`id_detail_hasil_analisa`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indexes for table `hasil_analisa`
--
ALTER TABLE `hasil_analisa`
  ADD PRIMARY KEY (`id_hasil_analisa`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD KEY `Index 1` (`id_informasi`);

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
-- Indexes for table `rule_analisa`
--
ALTER TABLE `rule_analisa`
  ADD PRIMARY KEY (`id_rule_analisa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `analisa`
--
ALTER TABLE `analisa`
  MODIFY `id_analisa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detail_hasil_analisa`
--
ALTER TABLE `detail_hasil_analisa`
  MODIFY `id_detail_hasil_analisa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hasil_analisa`
--
ALTER TABLE `hasil_analisa`
  MODIFY `id_hasil_analisa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rule_analisa`
--
ALTER TABLE `rule_analisa`
  MODIFY `id_rule_analisa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
