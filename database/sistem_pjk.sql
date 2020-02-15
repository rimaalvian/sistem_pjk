-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2019 at 08:49 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_pjk`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `nama_admin` varchar(255) NOT NULL,
  `email_admin` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `email_admin`, `password`) VALUES
(1, 'Administrator 1', 'administrator@gmail.com', '20eabe5d64b0e216796e834f52d61fd0b70332fc');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(10) NOT NULL,
  `judul_artikel` varchar(255) NOT NULL,
  `url_artikel` varchar(255) NOT NULL,
  `gambar_artikel` varchar(255) NOT NULL,
  `tanggal_artikel` date NOT NULL,
  `isi_artikel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul_artikel`, `url_artikel`, `gambar_artikel`, `tanggal_artikel`, `isi_artikel`) VALUES
(2, 'Bahaya Penyakit Jantung Koroner', 'bahaya-penyakit-jantung-koroner', 'a53.jpg', '2019-12-10', '<p><strong>Penyakit Jantung Koroner </strong>(PJK) adalah kondisi ketika pembuluh darah jantung (arteri koroner) tersumbat oleh timbunan lemak. Bila lemak makin menumpuk, maka arteri akan makin menyempit, dan membuat aliran darah ke jantung berkurang.</p>\r\n\r\n<p>Berkurangnya aliran darah ke jantung akan memicu gejala PJK, seperti angina&nbsp;dan sesak napas. Bila kondisi tersebut tidak segera ditangani, arteri akan tersumbat sepenuhnya, dan memicu serangan jantung. Arteri koroner adalah pembuluh darah yang mengalirkan darah kaya oksigen ke jantung. Terdapat dua jenis arteri koroner, yang sama-sama bercabang dari aorta atau pembuluh darah besar, yaitu :</p>\r\n\r\n<ol>\r\n	<li>Arteri koroner kiri utama (<em>left main coronary artery</em>/LMCA) &ndash; Arteri ini berfungsi mengalirkan darah ke serambi kiri dan bilik kiri jantung. LMCA terbagi menjadi dua bagian, yaitu:</li>\r\n</ol>\r\n\r\n<ul>\r\n	<li><em>Left anterior descending</em>&nbsp;(LAD) &ndash; berfungsi mengalirkan darah ke bagian depan dan kiri jantung.</li>\r\n	<li><em>Circumflex&nbsp;</em>(LCX) &ndash; berfungsi mengalirkan darah ke bagian belakang dan sisi luar jantung.</li>\r\n</ul>\r\n\r\n<ol start=\"2\">\r\n	<li>Arteri koroner kanan (<em>right coronary artery</em>/RCA) &ndash; Arteri ini mengalirkan darah ke serambi kanan dan bilik kanan. Selain itu, RCA juga mengalirkan darah ke nodus sinoatrial dan nodus atrioventrikular, yang mengatur ritme jantung. RCA terbagi menjadi&nbsp;<em>right posterior descending</em>&nbsp;dan&nbsp;<em>acute marginal artery</em>. Bersama LAD, RCA juga mengalirkan darah ke bagian tengah jantung, dan septum (dinding pemisah antara bilik kanan dan bilik kiri jantung).</li>\r\n</ol>\r\n\r\n<p>Berdasarkan data WHO, penyakit jantung koroner merupakan salah satu penyebab kematian tertinggi di dunia. Pada tahun 2015 saja, tercatat lebih dari 7 juta orang meninggal karena PJK. Sedangkan di Indonesia sendiri, lebih dari 2 juta orang terkena PJK di tahun 2013. Dari jumlah tersebut, PJK lebih sering terjadi pada rentang usia 45-54 tahun.</p>\r\n'),
(3, 'Diagnosis Penyakit Jantung Koroner', 'diagnosis-penyakit-jantung-koroner', 'penyakit-jantung-koroner-salah-satu-penyakit-paling-berbahaya-di-indonesia-1556175691.jpg', '2019-12-10', '<p>Sebagai langkah awal diagnosis, dokter akan menanyakan gejala yang dialami, serta memeriksa faktor risiko yang dimiliki pasien. Bila pasien berisiko terserang penyakit jantung koroner (PJK), dokter akan memeriksa tekanan darah pasien.</p>\r\n\r\n<p>Dokter juga akan menjalankan tes darah, untuk mengukur kadar kolesterol pasien. Agar didapat hasil yang akurat, pasien akan diminta berpuasa 12 jam sebelum tes dilakukan.</p>\r\n\r\n<p>Kemudian, untuk memastikan diagnosis, dokter akan menjalankan beberapa metode pemeriksaan yang meliputi:</p>\r\n\r\n<h4>Elektrokardiografi (EKG)</h4>\r\n\r\n<p>EKG&nbsp;bertujuan merekam aktivitas listrik jantung pasien. Melalui EKG, dokter dapat mengetahui apakah pasien pernah atau sedang mengalami serangan jantung. EKG juga dapat membantu dokter mengetahui detak dan irama jantung pasien tergolong normal atau tidak.</p>\r\n\r\n<p>Pada sejumlah kasus, dokter akan menyarankan pasien menjalani&nbsp;<em>Holter monitoring</em>. Sama seperti EKG, pemeriksaan ini bertujuan merekam aktivitas listrik jantung. Bedanya, pasien akan memakai perangkat kecil yang disebut monitor Holter. Alat tersebut akan dikalungkan di dada pasien, selama pasien beraktivitas dalam 24 jam.</p>\r\n\r\n<h4>Foto Rontgen</h4>\r\n\r\n<p><a href=\"https://www.alodokter.com/foto-rontgen-ini-yang-harus-anda-ketahui\">Foto Rontgen</a>&nbsp;di bagian dada dapat dilakukan guna melihat kondisi jantung, paru-paru, dan pembuluh darah. Melalui foto Rontgen dada, dokter dapat mengetahui bila ukuran jantung membesar atau terdapat gangguan pada paru-paru.</p>\r\n\r\n<h4><strong>C</strong><strong>T</strong>&nbsp;<strong>scan dan MRI scan</strong></h4>\r\n\r\n<p>Dua tes pencitraan ini dapat dilakukan untuk melihat kondisi jantung dengan lebih detail, yang tidak dapat terlihat pada pemeriksaan foto Rontgen. Pemeriksaan ini juga bisa memperlihatkan bila ada penumpukan kalsium di pembuluh darah, yang dapat memicu penyakit jantung koroner.</p>\r\n\r\n<h4><strong>Uji tekanan (<em>stress test</em>)</strong></h4>\r\n\r\n<p>Bila gejala yang dialami pasien lebih sering muncul saat sedang beraktivitas, dokter akan menyarankan uji tekanan. Tes ini bertujuan mengukur kerja jantung pasien ketika beraktivitas.</p>\r\n\r\n<p>Dalam uji tekanan, pasien akan diminta berjalan di&nbsp;<em>treadmill</em>, atau mengayuh sepeda statis, sambil menjalani pemeriksaan EKG di saat yang bersamaan. Pada saat pasien tidak dapat beraktivitas, dokter akan memberi obat untuk meningkatkan detak jantung sambil menjalankan tes MRI.</p>\r\n\r\n<h4>Ekokardiografi</h4>\r\n\r\n<p><a href=\"https://www.alodokter.com/cari-rumah-sakit/kardiologi/ekokardiografi\">Ekokardiografi</a>&nbsp;adalah pemeriksaan dengan menggunakan gelombang suara (seperti USG), untuk menampilkan gambaran jantung pasien di monitor. Selama ekokardiografi dilakukan, dokter dapat memeriksa, apakah semua bagian dinding jantung berfungsi baik dalam memompa darah.</p>\r\n\r\n<p>Dinding jantung yang bergerak lemah, bisa disebabkan oleh kekurangan oksigen, atau adanya kerusakan akibat serangan jantung. Hal tersebut bisa menjadi tanda PJK.</p>\r\n\r\n<h4><strong>Pemeriksaan enzim jantung</strong></h4>\r\n\r\n<p>Pemeriksaan enzim jantung dilakukan dengan mengambil sampel darah pasien, untuk diperiksa di laboratorium. Melalui pemeriksaan ini, dokter dapat mengetahui kadar troponin T dalam darah pasien.</p>\r\n\r\n<p>Troponin adalah protein yang dihasilkan sel jantung yang mengalami kerusakan. Pada seseorang yang terkena serangan jantung, kadar troponin akan meningkat dalam 3-12 jam setelahnya. Kadar troponin akan mencapai puncaknya dalam 1-2 hari, dan kembali normal setelah 5-14 hari.</p>\r\n\r\n<p>Kadar troponin terkait secara langsung dengan tingkat kerusakan otot jantung. Dengan kata lain, makin tinggi kadar troponin dalam darah, makin parah pula kerusakan jantung yang dialami.</p>\r\n\r\n<h4><strong>Pemeriksaan radionuklir</strong></h4>\r\n\r\n<p>Pemeriksaan radionuklir digunakan untuk membantu mengukur aliran darah ke otot jantung, saat beristirahat dan saat beraktivitas. Tes ini hampir sama seperti uji tekanan, yaitu dengan meminta pasien berjalan di&nbsp;<em>treadmill</em>&nbsp;atau mengayuh sepeda statis. Bedanya, tes ini dapat menunjukkan informasi yang lebih lengkap dengan menampilkan gambar jantung pasien.</p>\r\n\r\n<p>Sebelum tes dilakukan, pasien akan disuntikkan zat radioaktif yang disebut isotop. Bila pasien tidak dapat berjalan di&nbsp;<em>treadmill</em>&nbsp;atau menggunakan sepeda statis, dokter akan memberikan obat untuk meningkatkan detak jantung pasien. Kemudian, kamera akan diarahkan ke dada pasien, dan menangkap gambar saat isotop mengalir ke jantung.</p>\r\n\r\n<h4>Kateterisasi jantung dan angiografi koroner</h4>\r\n\r\n<p>Katerisasi jantung bertujuan untuk melihat kondisi jantung, dengan memasukkan kateter melalui pembuluh darah di lengan atau paha untuk diarahkan ke jantung. Kemudian, dokter akan menjalankan prosedur&nbsp;<a href=\"https://www.alodokter.com/cari-rumah-sakit/kardiologi/cath-lab\">angiografi koroner</a>. Prosedur ini dilakukan dengan menyuntikkan cairan kontras, dan menggunakan foto Rontgen untuk melihat aliran darah menuju jantung. Melalui angiografi koroner, dokter dapat mengetahui bila ada penyumbatan di pembuluh darah.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `aturan`
--

CREATE TABLE `aturan` (
  `id_aturan` int(10) NOT NULL,
  `id_keputusan` int(10) NOT NULL,
  `nama_aturan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aturan`
--

INSERT INTO `aturan` (`id_aturan`, `id_keputusan`, `nama_aturan`) VALUES
(1, 1, 'R1'),
(2, 1, 'R2'),
(3, 1, 'R3'),
(4, 1, 'R4'),
(5, 1, 'R5'),
(6, 1, 'R6'),
(7, 2, 'R7'),
(8, 2, 'R8'),
(9, 2, 'R9'),
(10, 1, 'R10'),
(11, 1, 'R11'),
(12, 1, 'R12'),
(13, 1, 'R13'),
(14, 1, 'R14'),
(15, 1, 'R15'),
(16, 1, 'R16'),
(17, 2, 'R17'),
(18, 2, 'R18'),
(19, 1, 'R19'),
(20, 1, 'R20'),
(21, 1, 'R21'),
(22, 1, 'R22'),
(23, 1, 'R23'),
(24, 1, 'R24'),
(25, 1, 'R25'),
(26, 1, 'R26'),
(27, 1, 'R27'),
(28, 2, 'R28'),
(29, 2, 'R29'),
(30, 2, 'R30'),
(31, 2, 'R31'),
(32, 2, 'R32'),
(33, 2, 'R33'),
(34, 2, 'R34'),
(35, 2, 'R35'),
(36, 2, 'R36'),
(37, 2, 'R37'),
(38, 2, 'R38'),
(39, 2, 'R39'),
(40, 2, 'R40'),
(41, 2, 'R41'),
(42, 2, 'R42'),
(43, 2, 'R43'),
(44, 2, 'R44'),
(45, 2, 'R45'),
(46, 1, 'R46'),
(47, 1, 'R47'),
(48, 2, 'R48'),
(49, 1, 'R49'),
(50, 2, 'R50'),
(51, 2, 'R51'),
(52, 2, 'R52'),
(53, 2, 'R53'),
(54, 2, 'R54'),
(55, 2, 'R55'),
(56, 2, 'R56'),
(57, 2, 'R57'),
(58, 2, 'R58'),
(59, 2, 'R59'),
(60, 2, 'R60'),
(61, 2, 'R61'),
(62, 2, 'R62'),
(63, 2, 'R63'),
(64, 2, 'R64'),
(65, 2, 'R65'),
(66, 2, 'R66'),
(67, 2, 'R67'),
(68, 2, 'R68'),
(69, 2, 'R69'),
(70, 2, 'R70'),
(71, 2, 'R71'),
(72, 2, 'R72'),
(73, 2, 'R73'),
(74, 2, 'R74'),
(75, 2, 'R75'),
(76, 2, 'R76'),
(77, 1, 'R77'),
(78, 2, 'R78'),
(79, 1, 'R79'),
(80, 2, 'R80'),
(81, 2, 'R81'),
(82, 1, 'R82'),
(83, 1, 'R83'),
(84, 1, 'R84'),
(85, 1, 'R85'),
(86, 1, 'R86'),
(87, 1, 'R87'),
(88, 1, 'R88'),
(89, 1, 'R89'),
(90, 1, 'R90'),
(91, 1, 'R91'),
(92, 1, 'R92'),
(93, 1, 'R93'),
(94, 1, 'R94'),
(95, 1, 'R95'),
(96, 1, 'R96'),
(97, 1, 'R97'),
(98, 1, 'R98'),
(99, 1, 'R99'),
(100, 1, 'R100'),
(101, 1, 'R101'),
(102, 1, 'R102'),
(103, 1, 'R103'),
(104, 1, 'R104'),
(105, 1, 'R105'),
(106, 1, 'R106'),
(107, 1, 'R107'),
(108, 1, 'R108'),
(109, 1, 'R109'),
(110, 1, 'R110'),
(111, 1, 'R111'),
(112, 1, 'R112'),
(113, 1, 'R113'),
(114, 2, 'R114'),
(115, 2, 'R115'),
(116, 2, 'R116'),
(117, 2, 'R117'),
(118, 1, 'R118'),
(119, 1, 'R119'),
(120, 1, 'R120'),
(121, 1, 'R121'),
(122, 1, 'R122'),
(123, 1, 'R123'),
(124, 1, 'R124'),
(125, 2, 'R125'),
(126, 2, 'R126'),
(127, 1, 'R127'),
(128, 1, 'R128'),
(129, 1, 'R129'),
(130, 1, 'R130'),
(131, 2, 'R131'),
(132, 1, 'R132'),
(133, 1, 'R133'),
(134, 1, 'R134'),
(135, 1, 'R135'),
(136, 2, 'R136'),
(137, 2, 'R137'),
(138, 2, 'R138'),
(139, 1, 'R139'),
(140, 2, 'R140'),
(141, 2, 'R141'),
(142, 2, 'R142'),
(143, 2, 'R143'),
(144, 2, 'R144'),
(145, 2, 'R145'),
(146, 2, 'R146'),
(147, 2, 'R147'),
(148, 2, 'R148'),
(149, 2, 'R149'),
(150, 2, 'R150'),
(151, 2, 'R151'),
(152, 2, 'R152'),
(153, 2, 'R153'),
(154, 1, 'R154'),
(155, 2, 'R155'),
(156, 2, 'R156'),
(157, 1, 'R157'),
(158, 2, 'R158'),
(159, 2, 'R159'),
(160, 2, 'R160'),
(161, 2, 'R161'),
(162, 2, 'R162');

-- --------------------------------------------------------

--
-- Table structure for table `cek`
--

CREATE TABLE `cek` (
  `id_cek` int(10) NOT NULL,
  `id_riwayat` int(10) NOT NULL,
  `id_variabel` int(10) NOT NULL,
  `data_cek` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cek`
--

INSERT INTO `cek` (`id_cek`, `id_riwayat`, `id_variabel`, `data_cek`) VALUES
(1, 1, 1, '58'),
(2, 1, 2, '116'),
(3, 1, 3, '220'),
(4, 1, 4, '39'),
(5, 1, 5, '0'),
(6, 1, 6, '0'),
(7, 2, 1, '58'),
(8, 2, 2, '140'),
(9, 2, 3, '210'),
(10, 2, 4, '45'),
(11, 2, 5, '0'),
(12, 2, 6, '0'),
(13, 3, 1, '58'),
(14, 3, 2, '132'),
(15, 3, 3, '210'),
(16, 3, 4, '45'),
(17, 3, 5, '0'),
(18, 3, 6, '0'),
(19, 4, 1, '58'),
(20, 4, 2, '132'),
(21, 4, 3, '230'),
(22, 4, 4, '45'),
(23, 4, 5, '0'),
(24, 4, 6, '0'),
(25, 5, 1, '58'),
(26, 5, 2, '111'),
(27, 5, 3, '230'),
(28, 5, 4, '45'),
(29, 5, 5, '0'),
(30, 5, 6, '0'),
(31, 6, 1, '58'),
(32, 6, 2, '141'),
(33, 6, 3, '230'),
(34, 6, 4, '45'),
(35, 6, 5, '0'),
(36, 6, 6, '0'),
(37, 7, 1, '58'),
(38, 7, 2, '141'),
(39, 7, 3, '190'),
(40, 7, 4, '36'),
(41, 7, 5, '0'),
(42, 7, 6, '0');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id_client` int(10) NOT NULL,
  `nama_client` varchar(255) NOT NULL,
  `jenis_kelamin_client` enum('Pria','Wanita') NOT NULL,
  `tanggal_lahir_client` date NOT NULL,
  `email_client` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id_client`, `nama_client`, `jenis_kelamin_client`, `tanggal_lahir_client`, `email_client`, `password`) VALUES
(1, 'Muslikah', 'Wanita', '1961-12-11', 'muslikah@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(2, 'Alvi', 'Wanita', '1997-02-13', 'alviani@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d'),
(3, 'Ani', 'Wanita', '1997-09-01', 'ani@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d'),
(4, 'Nur', 'Wanita', '1997-05-23', 'nur@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d');

-- --------------------------------------------------------

--
-- Table structure for table `detailaturan`
--

CREATE TABLE `detailaturan` (
  `id_detailaturan` int(10) NOT NULL,
  `id_aturan` int(10) NOT NULL,
  `id_himpunan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detailaturan`
--

INSERT INTO `detailaturan` (`id_detailaturan`, `id_aturan`, `id_himpunan`) VALUES
(1, 1, 1),
(2, 1, 4),
(3, 1, 7),
(4, 1, 10),
(5, 1, 16),
(6, 2, 1),
(7, 2, 5),
(8, 2, 7),
(9, 2, 10),
(10, 2, 16),
(11, 3, 1),
(12, 3, 6),
(13, 3, 7),
(14, 3, 10),
(15, 3, 16),
(16, 4, 1),
(17, 4, 4),
(18, 4, 8),
(19, 4, 10),
(20, 4, 16),
(21, 5, 1),
(22, 5, 5),
(23, 5, 8),
(24, 5, 10),
(25, 5, 16),
(26, 6, 1),
(27, 6, 6),
(28, 6, 8),
(29, 6, 10),
(30, 6, 16),
(31, 7, 1),
(32, 7, 4),
(33, 7, 9),
(34, 7, 10),
(35, 7, 16),
(36, 8, 1),
(37, 8, 5),
(38, 8, 9),
(39, 8, 10),
(40, 8, 16),
(41, 9, 1),
(42, 9, 6),
(43, 9, 9),
(44, 9, 10),
(45, 9, 16),
(46, 10, 1),
(47, 10, 4),
(48, 10, 7),
(49, 10, 12),
(50, 10, 16),
(51, 11, 1),
(52, 11, 5),
(53, 11, 7),
(54, 11, 12),
(55, 11, 16),
(56, 12, 1),
(57, 12, 6),
(58, 12, 7),
(59, 12, 12),
(60, 12, 16),
(61, 13, 1),
(62, 13, 4),
(63, 13, 8),
(64, 13, 12),
(65, 13, 16),
(66, 14, 1),
(67, 14, 5),
(68, 14, 8),
(69, 14, 12),
(70, 14, 16),
(76, 15, 1),
(77, 15, 6),
(78, 15, 8),
(79, 15, 12),
(80, 15, 16),
(81, 16, 1),
(82, 16, 4),
(83, 16, 9),
(84, 16, 12),
(85, 16, 16),
(86, 17, 1),
(87, 17, 5),
(88, 17, 9),
(89, 17, 12),
(90, 17, 16),
(91, 18, 1),
(92, 18, 6),
(93, 18, 9),
(94, 18, 12),
(95, 18, 16),
(96, 19, 1),
(97, 19, 4),
(98, 19, 7),
(99, 19, 13),
(100, 19, 16),
(101, 20, 1),
(102, 20, 5),
(103, 20, 7),
(104, 20, 13),
(105, 20, 16),
(106, 21, 1),
(107, 21, 6),
(108, 21, 7),
(109, 21, 13),
(110, 21, 16),
(111, 22, 1),
(112, 22, 4),
(113, 22, 8),
(114, 22, 13),
(115, 22, 16),
(116, 23, 1),
(117, 23, 5),
(118, 23, 8),
(119, 23, 13),
(120, 23, 16),
(121, 24, 1),
(122, 24, 6),
(123, 24, 8),
(124, 24, 13),
(125, 24, 16),
(126, 25, 1),
(127, 25, 4),
(128, 25, 9),
(129, 25, 13),
(130, 25, 16),
(131, 26, 1),
(132, 26, 5),
(133, 26, 9),
(134, 26, 13),
(135, 26, 16),
(136, 27, 1),
(137, 27, 6),
(138, 27, 9),
(139, 27, 13),
(140, 27, 16),
(141, 28, 2),
(142, 28, 4),
(143, 28, 7),
(144, 28, 10),
(145, 28, 16),
(146, 29, 2),
(147, 29, 5),
(148, 29, 7),
(149, 29, 10),
(150, 29, 16),
(160, 30, 2),
(161, 30, 6),
(162, 30, 7),
(163, 30, 10),
(164, 30, 16),
(165, 31, 2),
(166, 31, 4),
(167, 31, 8),
(168, 31, 10),
(169, 31, 16),
(170, 32, 2),
(171, 32, 5),
(172, 32, 8),
(173, 32, 10),
(174, 32, 16),
(175, 33, 2),
(176, 33, 6),
(177, 33, 8),
(178, 33, 10),
(179, 33, 16),
(180, 34, 2),
(181, 34, 4),
(182, 34, 9),
(183, 34, 10),
(184, 34, 16),
(185, 35, 2),
(186, 35, 5),
(187, 35, 9),
(188, 35, 10),
(189, 35, 16),
(190, 36, 2),
(191, 36, 6),
(192, 36, 9),
(193, 36, 10),
(194, 36, 16),
(195, 37, 2),
(196, 37, 4),
(197, 37, 7),
(198, 37, 12),
(199, 37, 16),
(200, 38, 2),
(201, 38, 5),
(202, 38, 7),
(203, 38, 12),
(204, 38, 14),
(205, 39, 2),
(206, 39, 6),
(207, 39, 7),
(208, 39, 12),
(209, 39, 16),
(210, 40, 2),
(211, 40, 4),
(212, 40, 8),
(213, 40, 12),
(214, 40, 16),
(215, 41, 2),
(216, 41, 5),
(217, 41, 8),
(218, 41, 12),
(219, 41, 16),
(220, 42, 2),
(221, 42, 6),
(222, 42, 8),
(223, 42, 12),
(224, 42, 16),
(225, 43, 2),
(226, 43, 4),
(227, 43, 9),
(228, 43, 12),
(229, 43, 16),
(230, 44, 2),
(231, 44, 5),
(232, 44, 9),
(233, 44, 12),
(234, 44, 16),
(235, 45, 2),
(236, 45, 6),
(237, 45, 9),
(238, 45, 12),
(239, 45, 16),
(240, 46, 2),
(241, 46, 4),
(242, 46, 7),
(243, 46, 13),
(244, 46, 16),
(245, 47, 2),
(246, 47, 5),
(247, 47, 7),
(248, 47, 13),
(249, 47, 16),
(250, 48, 2),
(251, 48, 6),
(252, 48, 7),
(253, 48, 13),
(254, 48, 16),
(255, 49, 2),
(256, 49, 4),
(257, 49, 8),
(258, 49, 13),
(259, 49, 16),
(260, 50, 2),
(261, 50, 5),
(262, 50, 8),
(263, 50, 13),
(264, 50, 16),
(265, 51, 2),
(266, 51, 6),
(267, 51, 8),
(268, 51, 13),
(269, 51, 16),
(270, 52, 2),
(271, 52, 4),
(272, 52, 9),
(273, 52, 13),
(274, 52, 16),
(275, 53, 2),
(276, 53, 5),
(277, 53, 9),
(278, 53, 13),
(279, 53, 16),
(280, 54, 2),
(281, 54, 6),
(282, 54, 9),
(283, 54, 13),
(284, 54, 16),
(290, 55, 3),
(294, 55, 4),
(295, 55, 7),
(296, 55, 10),
(297, 55, 16),
(298, 56, 3),
(299, 56, 5),
(300, 56, 7),
(301, 56, 10),
(302, 56, 16),
(303, 57, 3),
(304, 57, 6),
(305, 57, 7),
(306, 57, 10),
(307, 57, 16),
(308, 58, 3),
(309, 58, 4),
(310, 58, 8),
(311, 58, 10),
(312, 58, 16),
(313, 59, 3),
(315, 59, 8),
(316, 59, 10),
(317, 59, 16),
(318, 60, 3),
(319, 60, 6),
(320, 60, 8),
(321, 60, 10),
(322, 60, 16),
(323, 61, 3),
(324, 61, 4),
(325, 61, 9),
(326, 61, 10),
(327, 61, 16),
(328, 62, 3),
(329, 62, 5),
(330, 62, 9),
(331, 62, 10),
(332, 62, 16),
(333, 63, 2),
(334, 63, 6),
(335, 63, 9),
(336, 63, 10),
(337, 63, 16),
(338, 64, 3),
(339, 64, 4),
(340, 64, 7),
(341, 64, 12),
(342, 64, 16),
(343, 65, 3),
(344, 65, 5),
(345, 65, 7),
(346, 65, 12),
(347, 65, 16),
(348, 66, 3),
(349, 66, 6),
(350, 66, 7),
(351, 66, 12),
(352, 66, 16),
(353, 67, 3),
(354, 67, 4),
(355, 67, 8),
(356, 67, 12),
(357, 67, 16),
(358, 68, 3),
(359, 68, 5),
(360, 68, 8),
(361, 68, 12),
(362, 68, 16),
(363, 69, 3),
(364, 69, 6),
(365, 69, 8),
(366, 69, 12),
(367, 69, 16),
(368, 70, 3),
(369, 70, 4),
(370, 70, 9),
(371, 70, 12),
(372, 70, 16),
(373, 71, 3),
(374, 71, 5),
(375, 71, 9),
(376, 71, 12),
(377, 71, 16),
(378, 72, 3),
(379, 72, 6),
(380, 72, 9),
(381, 72, 12),
(382, 72, 16),
(383, 73, 3),
(384, 73, 4),
(385, 73, 7),
(386, 73, 13),
(387, 73, 16),
(388, 74, 3),
(389, 74, 5),
(390, 74, 7),
(391, 74, 13),
(392, 74, 16),
(393, 75, 3),
(394, 75, 6),
(395, 75, 7),
(396, 75, 13),
(397, 75, 16),
(398, 76, 3),
(399, 76, 4),
(400, 76, 8),
(401, 76, 13),
(402, 76, 16),
(403, 77, 3),
(404, 77, 5),
(405, 77, 8),
(406, 77, 13),
(407, 77, 16),
(408, 78, 3),
(409, 78, 6),
(410, 78, 8),
(411, 78, 13),
(412, 78, 16),
(413, 79, 3),
(414, 79, 4),
(415, 79, 9),
(416, 79, 13),
(417, 79, 16),
(418, 80, 3),
(419, 80, 5),
(420, 80, 9),
(421, 80, 13),
(422, 80, 16),
(423, 81, 3),
(424, 81, 6),
(425, 81, 9),
(426, 81, 13),
(427, 81, 16),
(428, 8, 14),
(429, 18, 14),
(430, 29, 14),
(431, 30, 14),
(432, 31, 14),
(433, 28, 14),
(434, 32, 14),
(435, 33, 14),
(436, 34, 14),
(437, 35, 14),
(438, 36, 14),
(439, 37, 14),
(440, 39, 14),
(441, 40, 14),
(442, 41, 14),
(443, 42, 14),
(444, 43, 14),
(445, 44, 14),
(446, 45, 14),
(447, 51, 14),
(448, 52, 14),
(449, 53, 14),
(450, 54, 14),
(451, 76, 14),
(457, 38, 16),
(458, 1, 14),
(459, 2, 14),
(460, 3, 14),
(461, 4, 14),
(462, 5, 14),
(463, 6, 14),
(464, 7, 14),
(465, 9, 14),
(466, 10, 14),
(467, 11, 14),
(468, 12, 14),
(469, 13, 14),
(470, 14, 14),
(471, 15, 14),
(472, 16, 14),
(473, 17, 14),
(474, 19, 14),
(475, 20, 14),
(476, 21, 14),
(477, 22, 14),
(478, 23, 14),
(479, 24, 14),
(480, 25, 14),
(481, 26, 14),
(482, 27, 14),
(483, 55, 14),
(484, 56, 14),
(485, 57, 14),
(486, 58, 14),
(487, 59, 5),
(488, 59, 14),
(489, 60, 14),
(490, 61, 14),
(491, 62, 14),
(492, 63, 14),
(493, 64, 14),
(494, 65, 14),
(495, 66, 14),
(496, 67, 14),
(497, 68, 14),
(498, 69, 14),
(499, 70, 14),
(500, 71, 14),
(501, 72, 14),
(502, 73, 14),
(503, 74, 14),
(504, 75, 14),
(505, 77, 14),
(506, 78, 14),
(507, 79, 14),
(508, 80, 14),
(509, 81, 14),
(510, 82, 1),
(511, 82, 4),
(512, 82, 7),
(513, 82, 10),
(514, 83, 1),
(515, 83, 5),
(516, 83, 7),
(517, 83, 10),
(518, 84, 1),
(519, 84, 6),
(520, 84, 7),
(521, 84, 10),
(522, 85, 1),
(523, 85, 4),
(524, 85, 8),
(525, 85, 10),
(526, 86, 1),
(527, 86, 5),
(528, 86, 8),
(529, 86, 10),
(530, 87, 1),
(531, 87, 6),
(532, 87, 8),
(533, 87, 10),
(534, 88, 1),
(535, 88, 4),
(536, 88, 9),
(537, 88, 10),
(538, 89, 1),
(539, 89, 5),
(540, 89, 9),
(541, 89, 10),
(542, 90, 1),
(543, 90, 6),
(544, 90, 9),
(545, 90, 10),
(546, 91, 1),
(547, 91, 4),
(548, 91, 7),
(549, 91, 12),
(550, 92, 1),
(551, 92, 5),
(552, 92, 7),
(553, 92, 12),
(554, 93, 1),
(555, 93, 6),
(556, 93, 7),
(557, 93, 12),
(558, 94, 1),
(559, 94, 4),
(560, 94, 8),
(561, 94, 12),
(562, 95, 1),
(563, 95, 5),
(564, 95, 8),
(565, 95, 12),
(566, 96, 1),
(570, 96, 6),
(571, 96, 8),
(572, 96, 12),
(573, 97, 1),
(574, 97, 4),
(575, 97, 9),
(576, 97, 12),
(577, 98, 1),
(578, 98, 5),
(579, 98, 9),
(580, 98, 12),
(581, 99, 1),
(582, 99, 6),
(583, 99, 9),
(584, 99, 12),
(585, 100, 1),
(586, 100, 4),
(587, 100, 7),
(588, 100, 13),
(589, 101, 1),
(590, 101, 5),
(591, 101, 7),
(592, 101, 13),
(593, 102, 1),
(594, 102, 6),
(595, 102, 7),
(596, 102, 13),
(597, 103, 1),
(598, 103, 4),
(599, 103, 8),
(601, 104, 1),
(602, 104, 5),
(603, 104, 8),
(604, 104, 13),
(605, 103, 13),
(606, 105, 1),
(607, 105, 6),
(608, 105, 8),
(609, 105, 13),
(610, 106, 1),
(611, 106, 4),
(612, 106, 9),
(613, 106, 13),
(614, 107, 1),
(615, 107, 5),
(616, 107, 9),
(617, 107, 13),
(618, 108, 1),
(619, 108, 6),
(620, 108, 9),
(621, 108, 13),
(622, 109, 2),
(623, 109, 4),
(624, 109, 7),
(625, 109, 10),
(634, 112, 2),
(635, 112, 4),
(636, 112, 8),
(637, 112, 10),
(638, 111, 2),
(639, 111, 6),
(640, 111, 7),
(641, 111, 10),
(642, 110, 2),
(643, 110, 4),
(644, 110, 7),
(645, 110, 10),
(646, 113, 2),
(647, 113, 5),
(648, 113, 8),
(649, 113, 10),
(650, 114, 2),
(651, 114, 6),
(652, 114, 8),
(653, 114, 10),
(654, 115, 2),
(655, 115, 4),
(656, 115, 9),
(657, 115, 10),
(658, 116, 2),
(659, 116, 5),
(660, 116, 9),
(661, 116, 10),
(662, 117, 2),
(663, 117, 6),
(664, 117, 9),
(665, 117, 10),
(666, 118, 2),
(667, 118, 4),
(668, 118, 7),
(669, 118, 12),
(670, 119, 2),
(671, 119, 5),
(672, 119, 7),
(673, 119, 12),
(674, 120, 2),
(675, 120, 6),
(676, 120, 7),
(677, 120, 12),
(678, 121, 2),
(679, 121, 4),
(680, 121, 8),
(681, 121, 12),
(682, 122, 2),
(683, 122, 5),
(684, 122, 8),
(685, 122, 12),
(686, 123, 2),
(687, 123, 6),
(688, 123, 8),
(689, 123, 12),
(690, 124, 2),
(691, 124, 4),
(692, 124, 9),
(693, 124, 12),
(694, 125, 2),
(695, 125, 5),
(696, 125, 9),
(697, 125, 12),
(698, 126, 2),
(699, 126, 6),
(700, 126, 9),
(701, 126, 12),
(702, 127, 2),
(703, 127, 4),
(704, 127, 7),
(705, 127, 13),
(706, 128, 2),
(707, 128, 5),
(708, 128, 7),
(709, 128, 13),
(710, 129, 2),
(711, 129, 6),
(712, 129, 7),
(713, 129, 13),
(714, 130, 2),
(715, 130, 4),
(716, 130, 8),
(717, 130, 13),
(718, 131, 2),
(719, 131, 5),
(722, 132, 2),
(723, 132, 6),
(726, 131, 8),
(727, 132, 8),
(728, 132, 13),
(729, 131, 13),
(730, 133, 2),
(731, 133, 4),
(732, 133, 9),
(733, 133, 13),
(734, 134, 2),
(735, 134, 5),
(736, 134, 9),
(737, 134, 13),
(738, 135, 2),
(739, 135, 6),
(740, 135, 9),
(741, 135, 13),
(742, 136, 3),
(743, 136, 4),
(744, 136, 7),
(745, 136, 10),
(746, 137, 3),
(747, 137, 5),
(748, 137, 7),
(749, 137, 10),
(750, 138, 3),
(751, 138, 6),
(752, 138, 7),
(753, 138, 10),
(754, 139, 3),
(755, 139, 4),
(756, 139, 8),
(757, 139, 10),
(758, 140, 3),
(759, 140, 5),
(760, 140, 8),
(761, 140, 10),
(762, 141, 3),
(763, 141, 6),
(764, 141, 8),
(765, 141, 10),
(766, 142, 3),
(767, 142, 4),
(768, 142, 9),
(769, 142, 10),
(770, 143, 3),
(771, 143, 5),
(772, 143, 9),
(773, 143, 10),
(774, 144, 3),
(775, 144, 6),
(776, 144, 9),
(777, 144, 10),
(778, 145, 3),
(779, 145, 4),
(780, 145, 7),
(781, 145, 12),
(782, 146, 3),
(783, 146, 5),
(784, 146, 7),
(785, 146, 12),
(786, 147, 3),
(787, 147, 6),
(788, 147, 7),
(789, 147, 12),
(790, 148, 3),
(791, 148, 4),
(792, 148, 8),
(793, 148, 12),
(794, 149, 3),
(795, 149, 5),
(796, 149, 8),
(797, 149, 12),
(798, 150, 3),
(799, 150, 6),
(800, 150, 8),
(801, 150, 12),
(802, 151, 3),
(803, 151, 4),
(804, 151, 9),
(805, 151, 12),
(806, 152, 3),
(807, 152, 5),
(808, 152, 9),
(809, 152, 12),
(810, 153, 3),
(811, 153, 6),
(812, 153, 9),
(813, 153, 12),
(814, 154, 3),
(815, 154, 4),
(816, 154, 7),
(817, 154, 13),
(818, 155, 3),
(819, 155, 5),
(820, 155, 7),
(821, 155, 13),
(822, 156, 3),
(823, 156, 6),
(824, 156, 7),
(825, 156, 13),
(826, 157, 3),
(827, 157, 4),
(828, 157, 8),
(829, 157, 13),
(830, 158, 3),
(831, 158, 5),
(832, 158, 8),
(833, 158, 13),
(834, 159, 3),
(835, 159, 6),
(836, 159, 8),
(837, 159, 13),
(838, 160, 3),
(839, 160, 4),
(840, 160, 9),
(841, 160, 13),
(842, 161, 3),
(843, 161, 5),
(844, 161, 9),
(845, 161, 13),
(846, 162, 3),
(847, 162, 6),
(848, 162, 9),
(849, 162, 13);

-- --------------------------------------------------------

--
-- Table structure for table `himpunan`
--

CREATE TABLE `himpunan` (
  `id_himpunan` int(10) NOT NULL,
  `id_variabel` int(10) NOT NULL,
  `nama_himpunan` varchar(255) NOT NULL,
  `batas_bawah_himpunan` float(5,2) NOT NULL,
  `batas_tengah_1_himpunan` float(5,2) NOT NULL,
  `batas_tengah_2_himpunan` float(5,2) NOT NULL,
  `batas_atas_himpunan` float(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `himpunan`
--

INSERT INTO `himpunan` (`id_himpunan`, `id_variabel`, `nama_himpunan`, `batas_bawah_himpunan`, `batas_tengah_1_himpunan`, `batas_tengah_2_himpunan`, `batas_atas_himpunan`) VALUES
(1, 1, 'Muda', 0.00, 0.00, 30.00, 50.00),
(2, 1, 'Parobaya', 30.00, 50.00, 60.00, 80.00),
(3, 1, 'Tua', 60.00, 80.00, 80.00, 100.00),
(4, 2, 'Normal', 0.00, 0.00, 120.00, 130.00),
(5, 2, 'Prehipertensi', 120.00, 130.00, 140.00, 160.00),
(6, 2, 'Hipertensi', 140.00, 160.00, 160.00, 200.00),
(7, 3, 'Optimal', 0.00, 0.00, 160.00, 200.00),
(8, 3, 'Borderline', 160.00, 200.00, 240.00, 280.00),
(9, 3, 'Tinggi', 240.00, 280.00, 280.00, 300.00),
(10, 4, 'Rendah', 0.00, 0.00, 35.00, 40.00),
(12, 4, 'Normal', 35.00, 40.00, 50.00, 60.00),
(13, 4, 'Tinggi', 50.00, 60.00, 60.00, 100.00),
(14, 5, 'Ya', 1.00, 1.00, 1.00, 1.00),
(15, 5, 'Tidak', 0.00, 0.00, 0.00, 0.00),
(16, 6, 'Ya', 1.00, 1.00, 1.00, 1.00),
(17, 6, 'Tidak', 0.00, 0.00, 0.00, 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `keputusan`
--

CREATE TABLE `keputusan` (
  `id_keputusan` int(10) NOT NULL,
  `nama_keputusan` varchar(255) NOT NULL,
  `batas_bawah_keputusan` float(5,2) NOT NULL,
  `batas_atas_keputusan` float(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keputusan`
--

INSERT INTO `keputusan` (`id_keputusan`, `nama_keputusan`, `batas_bawah_keputusan`, `batas_atas_keputusan`) VALUES
(1, 'Rendah', 0.00, 20.00),
(2, 'Tinggi', 10.00, 30.00);

-- --------------------------------------------------------

--
-- Table structure for table `resiko`
--

CREATE TABLE `resiko` (
  `id_resiko` int(10) NOT NULL,
  `nama_resiko` varchar(255) NOT NULL,
  `batas_bawah_resiko` float(5,2) NOT NULL,
  `batas_atas_resiko` float(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resiko`
--

INSERT INTO `resiko` (`id_resiko`, `nama_resiko`, `batas_bawah_resiko`, `batas_atas_resiko`) VALUES
(1, 'Rendah', 0.00, 10.00),
(2, 'Moderate', 10.01, 20.00),
(3, 'Tinggi', 20.01, 30.00),
(4, 'Sangat Tinggi', 30.01, 100.00);

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `id_riwayat` int(10) NOT NULL,
  `id_client` int(10) NOT NULL,
  `tanggal_riwayat` datetime NOT NULL,
  `id_resiko` int(10) NOT NULL,
  `hasil` float(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `riwayat`
--

INSERT INTO `riwayat` (`id_riwayat`, `id_client`, `tanggal_riwayat`, `id_resiko`, `hasil`) VALUES
(1, 1, '2019-12-18 15:12:37', 1, 6.40),
(2, 1, '2019-12-18 15:12:50', 1, 0.00),
(3, 1, '2019-12-18 15:13:02', 1, 0.00),
(4, 1, '2019-12-18 15:13:09', 1, 0.00),
(5, 1, '2019-12-18 15:13:14', 1, 0.00),
(6, 1, '2019-12-18 15:13:25', 1, 1.90),
(7, 1, '2019-12-18 15:13:44', 2, 10.04);

-- --------------------------------------------------------

--
-- Table structure for table `saran`
--

CREATE TABLE `saran` (
  `id_saran` int(10) NOT NULL,
  `id_resiko` int(10) NOT NULL,
  `nama_saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saran`
--

INSERT INTO `saran` (`id_saran`, `id_resiko`, `nama_saran`) VALUES
(1, 1, 'Olahraga secara teratur untuk meningkatkan metabolisme'),
(2, 1, 'Jaga pola makan sehat dan seimbang'),
(3, 2, 'Lakukan olahraga ringan'),
(4, 1, 'Lakukan maintenance'),
(5, 3, 'Kelola stress agar tekanan darah tidak melonjak'),
(6, 3, 'Batasi konsumsi garam'),
(7, 4, 'Segera lakukan pemeriksaan lebih lanjut'),
(8, 2, 'Batasi makanan dengan lemak trans tinggi seperti gorengan'),
(9, 3, 'Batasi konsumsi daging merah'),
(10, 3, 'Perbanyak makanan yang mengandung lemak baik dan omega 3 seperti ikan salmon, ikan tuna, alpukat, kacang almond, dll');

-- --------------------------------------------------------

--
-- Table structure for table `variabel`
--

CREATE TABLE `variabel` (
  `id_variabel` int(10) NOT NULL,
  `nama_variabel` varchar(255) NOT NULL,
  `status_himpunan_variabel` enum('sembunyikan','tampil') NOT NULL DEFAULT 'sembunyikan'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `variabel`
--

INSERT INTO `variabel` (`id_variabel`, `nama_variabel`, `status_himpunan_variabel`) VALUES
(1, 'Usia', 'sembunyikan'),
(2, 'Sistolik', 'sembunyikan'),
(3, 'Kolesterol Total', 'sembunyikan'),
(4, 'HDL', 'sembunyikan'),
(5, 'Merokok', 'tampil'),
(6, 'Konsumsi Obat Tekanan Darah', 'tampil');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `aturan`
--
ALTER TABLE `aturan`
  ADD PRIMARY KEY (`id_aturan`),
  ADD KEY `id_keputusan` (`id_keputusan`);

--
-- Indexes for table `cek`
--
ALTER TABLE `cek`
  ADD PRIMARY KEY (`id_cek`),
  ADD KEY `id_riwayat` (`id_riwayat`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Indexes for table `detailaturan`
--
ALTER TABLE `detailaturan`
  ADD PRIMARY KEY (`id_detailaturan`),
  ADD KEY `id_aturan` (`id_aturan`),
  ADD KEY `detailaturan_ibfk_2` (`id_himpunan`);

--
-- Indexes for table `himpunan`
--
ALTER TABLE `himpunan`
  ADD PRIMARY KEY (`id_himpunan`),
  ADD KEY `id_variabel` (`id_variabel`);

--
-- Indexes for table `keputusan`
--
ALTER TABLE `keputusan`
  ADD PRIMARY KEY (`id_keputusan`);

--
-- Indexes for table `resiko`
--
ALTER TABLE `resiko`
  ADD PRIMARY KEY (`id_resiko`);

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id_riwayat`),
  ADD KEY `riwayat_member` (`id_client`),
  ADD KEY `id_resiko` (`id_resiko`);

--
-- Indexes for table `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id_saran`),
  ADD KEY `id_resiko` (`id_resiko`);

--
-- Indexes for table `variabel`
--
ALTER TABLE `variabel`
  ADD PRIMARY KEY (`id_variabel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `aturan`
--
ALTER TABLE `aturan`
  MODIFY `id_aturan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;
--
-- AUTO_INCREMENT for table `cek`
--
ALTER TABLE `cek`
  MODIFY `id_cek` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `detailaturan`
--
ALTER TABLE `detailaturan`
  MODIFY `id_detailaturan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=850;
--
-- AUTO_INCREMENT for table `himpunan`
--
ALTER TABLE `himpunan`
  MODIFY `id_himpunan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `keputusan`
--
ALTER TABLE `keputusan`
  MODIFY `id_keputusan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `resiko`
--
ALTER TABLE `resiko`
  MODIFY `id_resiko` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `id_riwayat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `saran`
--
ALTER TABLE `saran`
  MODIFY `id_saran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `variabel`
--
ALTER TABLE `variabel`
  MODIFY `id_variabel` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `aturan`
--
ALTER TABLE `aturan`
  ADD CONSTRAINT `aturan_keputusan` FOREIGN KEY (`id_keputusan`) REFERENCES `keputusan` (`id_keputusan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cek`
--
ALTER TABLE `cek`
  ADD CONSTRAINT `cek_ibfk_1` FOREIGN KEY (`id_riwayat`) REFERENCES `riwayat` (`id_riwayat`);

--
-- Constraints for table `detailaturan`
--
ALTER TABLE `detailaturan`
  ADD CONSTRAINT `detailaturan_ibfk_1` FOREIGN KEY (`id_aturan`) REFERENCES `aturan` (`id_aturan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detailaturan_ibfk_2` FOREIGN KEY (`id_himpunan`) REFERENCES `himpunan` (`id_himpunan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `himpunan`
--
ALTER TABLE `himpunan`
  ADD CONSTRAINT `himpunan_ibfk_1` FOREIGN KEY (`id_variabel`) REFERENCES `variabel` (`id_variabel`) ON UPDATE CASCADE;

--
-- Constraints for table `saran`
--
ALTER TABLE `saran`
  ADD CONSTRAINT `saran_ibfk_1` FOREIGN KEY (`id_resiko`) REFERENCES `resiko` (`id_resiko`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
