-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2020 at 04:08 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kp_if_itera`
--

-- --------------------------------------------------------

--
-- Table structure for table `catatans`
--

CREATE TABLE `catatans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `laporan_id` bigint(20) NOT NULL,
  `catatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catatans`
--

INSERT INTO `catatans` (`id`, `laporan_id`, `catatan`, `created_at`, `updated_at`) VALUES
(1, 1, 'Silahkan perbaiki BAB I, Pada bagian latar belakang kurang kuat, silahkan tambahkan literasi', '2020-04-27 19:03:09', '2020-04-27 19:03:09'),
(2, 1, 'Silahkan perbaiki BAB I, Lingkung Pekerjaan perlu lebih didteailkan', '2020-04-27 19:03:10', '2020-04-27 19:03:10'),
(3, 1, 'Perbaiki BAB II', '2020-04-27 19:03:10', '2020-04-27 19:03:10'),
(4, 2, 'Silahkan perbaiki BAB I, Pada bagian latar belakang kurang kuat, silahkan tambahkan literasi', '2020-04-27 19:03:10', '2020-04-27 19:03:10'),
(5, 2, 'Silahkan perbaiki BAB I, Lingkung Pekerjaan perlu lebih didteailkan', '2020-04-27 19:03:10', '2020-04-27 19:03:10'),
(6, 3, 'Perbaiki BAB II yaa, permasalahan spacing', '2020-04-27 19:03:10', '2020-04-27 19:03:10');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `NIP_NRK` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Kontak_Person` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `user_id`, `NIP_NRK`, `Kontak_Person`, `created_at`, `updated_at`) VALUES
(1, 1, '88-0382591', '0760 0778 391', '2020-04-27 19:02:32', '2020-04-27 19:02:32'),
(2, 2, '80-9147434', '(+62) 899 220 306', '2020-04-27 19:02:32', '2020-04-27 19:02:32'),
(3, 9, '39-1902093', '(+62) 898 3958 4730', '2020-04-27 19:02:32', '2020-04-27 19:02:32'),
(4, 14, '14-7546060', '(+62) 884 1272 7183', '2020-04-27 19:02:33', '2020-04-27 19:02:33'),
(5, 15, '45-0981523', '0894 5431 6448', '2020-04-27 19:02:33', '2020-04-27 19:02:33'),
(6, 17, '35-3917591', '(+62) 444 9742 404', '2020-04-27 19:02:33', '2020-04-27 19:02:33'),
(7, 20, '06-7981290', '(+62) 394 8095 748', '2020-04-27 19:02:33', '2020-04-27 19:02:33'),
(8, 21, '95-4943671', '(+62) 24 2911 8822', '2020-04-27 19:02:33', '2020-04-27 19:02:33'),
(9, 23, '43-3201074', '(+62) 280 7296 462', '2020-04-27 19:02:34', '2020-04-27 19:02:34'),
(10, 24, '57-5432572', '(+62) 637 8587 5023', '2020-04-27 19:02:34', '2020-04-27 19:02:34'),
(11, 25, '42-4556288', '(+62) 804 472 895', '2020-04-27 19:02:34', '2020-04-27 19:02:34'),
(12, 27, '47-0516826', '(+62) 968 8515 4592', '2020-04-27 19:02:34', '2020-04-27 19:02:34'),
(13, 30, '93-4457233', '(+62) 966 9186 246', '2020-04-27 19:02:34', '2020-04-27 19:02:34'),
(14, 32, '30-9571125', '(+62) 483 5780 193', '2020-04-27 19:02:34', '2020-04-27 19:02:34'),
(15, 33, '39-9870725', '0253 8235 640', '2020-04-27 19:02:35', '2020-04-27 19:02:35'),
(16, 34, '25-7185615', '(+62) 432 1018 534', '2020-04-27 19:02:35', '2020-04-27 19:02:35'),
(17, 39, '39-3280397', '029 9496 7473', '2020-04-27 19:02:35', '2020-04-27 19:02:35'),
(18, 41, '66-2327587', '(+62) 853 8484 9947', '2020-04-27 19:02:35', '2020-04-27 19:02:35'),
(19, 42, '67-4882303', '0864 152 993', '2020-04-27 19:02:35', '2020-04-27 19:02:35'),
(20, 45, '33-7752861', '0597 6120 4213', '2020-04-27 19:02:35', '2020-04-27 19:02:35'),
(21, 46, '31-7176307', '024 3163 681', '2020-04-27 19:02:36', '2020-04-27 19:02:36'),
(22, 47, '04-9875705', '(+62) 264 9146 6999', '2020-04-27 19:02:36', '2020-04-27 19:02:36'),
(23, 48, '12-2319022', '0352 7043 2905', '2020-04-27 19:02:36', '2020-04-27 19:02:36'),
(24, 49, '47-9940962', '(+62) 367 9144 246', '2020-04-27 19:02:36', '2020-04-27 19:02:36'),
(25, 50, '45-2064786', '0598 4969 028', '2020-04-27 19:02:36', '2020-04-27 19:02:36'),
(26, 51, '73-3270210', '(+62) 574 2077 886', '2020-04-27 19:02:36', '2020-04-27 19:02:36'),
(27, 52, '21-9585229', '(+62) 650 9010 8143', '2020-04-27 19:02:36', '2020-04-27 19:02:36'),
(28, 55, '25-8949192', '029 4504 1577', '2020-04-27 19:02:37', '2020-04-27 19:02:37'),
(29, 57, '72-4290268', '029 6050 779', '2020-04-27 19:02:37', '2020-04-27 19:02:37'),
(30, 58, '05-9201166', '0395 4512 829', '2020-04-27 19:02:37', '2020-04-27 19:02:37'),
(31, 61, '47-3208242', '(+62) 296 5246 2792', '2020-04-27 19:02:37', '2020-04-27 19:02:37'),
(32, 62, '71-0181038', '(+62) 28 0259 8598', '2020-04-27 19:02:37', '2020-04-27 19:02:37'),
(33, 63, '31-3139411', '(+62) 597 9381 748', '2020-04-27 19:02:37', '2020-04-27 19:02:37'),
(34, 64, '01-5253030', '0882 167 968', '2020-04-27 19:02:38', '2020-04-27 19:02:38'),
(35, 67, '56-2200980', '0526 8923 184', '2020-04-27 19:02:38', '2020-04-27 19:02:38'),
(36, 68, '60-5494879', '0895 4911 9707', '2020-04-27 19:02:38', '2020-04-27 19:02:38'),
(37, 69, '33-5295183', '0988 8350 556', '2020-04-27 19:02:38', '2020-04-27 19:02:38'),
(38, 70, '04-3021702', '(+62) 874 987 610', '2020-04-27 19:02:38', '2020-04-27 19:02:38'),
(39, 72, '88-0226248', '0347 5594 182', '2020-04-27 19:02:38', '2020-04-27 19:02:38'),
(40, 73, '84-0034157', '(+62) 992 2469 562', '2020-04-27 19:02:38', '2020-04-27 19:02:38'),
(41, 74, '38-2364593', '0968 0907 761', '2020-04-27 19:02:39', '2020-04-27 19:02:39'),
(42, 75, '43-0328194', '(+62) 692 4058 485', '2020-04-27 19:02:39', '2020-04-27 19:02:39'),
(43, 76, '11-8198146', '025 9057 069', '2020-04-27 19:02:39', '2020-04-27 19:02:39'),
(44, 79, '06-7615099', '0506 9361 2298', '2020-04-27 19:02:39', '2020-04-27 19:02:39'),
(45, 81, '54-8942696', '0224 8383 8409', '2020-04-27 19:02:39', '2020-04-27 19:02:39'),
(46, 83, '55-5203871', '0625 3191 5146', '2020-04-27 19:02:39', '2020-04-27 19:02:39'),
(47, 85, '43-8999501', '(+62) 243 5922 5298', '2020-04-27 19:02:39', '2020-04-27 19:02:39'),
(48, 86, '71-4943711', '(+62) 859 3926 5742', '2020-04-27 19:02:40', '2020-04-27 19:02:40'),
(49, 87, '83-8340332', '(+62) 24 4077 0817', '2020-04-27 19:02:40', '2020-04-27 19:02:40'),
(50, 90, '77-1498903', '0848 4940 605', '2020-04-27 19:02:40', '2020-04-27 19:02:40'),
(51, 91, '53-6174918', '0732 2526 402', '2020-04-27 19:02:40', '2020-04-27 19:02:40'),
(52, 96, '11-8789377', '0250 8028 241', '2020-04-27 19:02:40', '2020-04-27 19:02:40'),
(53, 97, '42-6423545', '0307 4235 792', '2020-04-27 19:02:41', '2020-04-27 19:02:41'),
(54, 98, '80-8518921', '(+62) 729 1645 096', '2020-04-27 19:02:41', '2020-04-27 19:02:41'),
(55, 103, '58-5785251', '(+62) 610 0567 0372', '2020-04-27 19:02:41', '2020-04-27 19:02:41'),
(56, 106, '65-6637026', '024 8083 6162', '2020-04-27 19:02:41', '2020-04-27 19:02:41');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `instansi`
--

CREATE TABLE `instansi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Telp` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `instansi`
--

INSERT INTO `instansi` (`id`, `name`, `alamat`, `Telp`, `email`, `created_at`, `updated_at`) VALUES
(1, 'UD Wacana (Persero) Tbk', 'Psr. Abdullah No. 682, Surakarta 82676, KalTeng', '0811 4810 1878', 'gnugroho@winarno.or.id', NULL, NULL),
(2, 'Perum Hartati Tbk', 'Jln. Cut Nyak Dien No. 827, Cilegon 31292, JaTeng', '(+62) 503 3902 903', 'balangga.pratama@yahoo.com', NULL, NULL),
(3, 'PT Palastri', 'Jr. Villa No. 367, Langsa 32682, SulSel', '0871 2132 6557', 'hsantoso@gmail.co.id', NULL, NULL),
(4, 'PT Wacana Farida', 'Kpg. Sudirman No. 669, Surabaya 49966, Gorontalo', '(+62) 291 8704 6329', 'erik.riyanti@nasyiah.my.id', NULL, NULL),
(5, 'PT Mayasari Tbk', 'Psr. Ahmad Dahlan No. 129, Balikpapan 61243, NTT', '(+62) 901 3558 0930', 'nrajasa@gmail.com', NULL, NULL),
(6, 'UD Lazuardi', 'Gg. Lumban Tobing No. 629, Sibolga 23240, KalTim', '0881 830 740', 'ehasanah@gmail.co.id', NULL, NULL),
(7, 'PD Laksmiwati', 'Kpg. Teuku Umar No. 115, Magelang 20974, Jambi', '(+62) 713 3033 772', 'xanana48@uyainah.ac.id', NULL, NULL),
(8, 'PT Tampubolon', 'Dk. Laswi No. 682, Samarinda 82181, SumUt', '023 6545 629', 'iriana.najmudin@yahoo.com', NULL, NULL),
(9, 'PD Rahayu Jailani (Persero) Tbk', 'Jr. Flores No. 944, Semarang 59320, Jambi', '0469 9695 710', 'icha.manullang@dabukke.ac.id', NULL, NULL),
(10, 'PT Nainggolan Marpaung (Persero) Tbk', 'Jln. Agus Salim No. 536, Bengkulu 21014, Banten', '0404 9153 457', 'febi80@sudiati.com', NULL, NULL),
(11, 'PD Dabukke', 'Jln. HOS. Cjokroaminoto (Pasirkaliki) No. 93, Ambon 43699, KalTim', '0967 0717 756', 'ibun.setiawan@yahoo.com', NULL, NULL),
(12, 'CV Hastuti Mahendra Tbk', 'Jr. Yos Sudarso No. 851, Depok 19096, Jambi', '0229 1643 7003', 'umar.laksita@yahoo.com', NULL, NULL),
(13, 'UD Kusmawati', 'Gg. Baabur Royan No. 390, Blitar 20927, Jambi', '0421 4538 1932', 'jagapati21@tampubolon.org', NULL, NULL),
(14, 'PT Iswahyudi Tbk', 'Ds. Bak Air No. 952, Balikpapan 87629, JaBar', '0559 4948 4501', 'luwais@saragih.biz', NULL, NULL),
(15, 'CV Lestari Januar Tbk', 'Jr. Jamika No. 271, Serang 54187, Bengkulu', '0289 3085 1062', 'bgunawan@nababan.in', NULL, NULL),
(16, 'CV Utama Narpati', 'Dk. Reksoninten No. 645, Batu 73229, JaBar', '(+62) 26 6085 9906', 'mila.wibowo@yahoo.co.id', NULL, NULL),
(17, 'Perum Mandasari Zulkarnain (Persero) Tbk', 'Jln. Supomo No. 500, Banjar 45420, DIY', '(+62) 585 9004 6300', 'rudi98@uyainah.mil.id', NULL, NULL),
(18, 'Perum Nababan Handayani Tbk', 'Gg. Bazuka Raya No. 362, Bukittinggi 93390, JaTim', '0400 2489 551', 'pardianto@yulianti.org', NULL, NULL),
(19, 'PT Pranowo Yuniar (Persero) Tbk', 'Ki. Bayam No. 95, Banda Aceh 42553, Banten', '(+62) 474 7944 195', 'elisa.novitasari@tarihoran.asia', NULL, NULL),
(20, 'CV Farida Utama Tbk', 'Psr. Cut Nyak Dien No. 483, Banda Aceh 32448, MalUt', '0457 7525 475', 'yance87@waluyo.net', NULL, NULL),
(21, 'Perum Suartini Usada', 'Kpg. Tambun No. 971, Banjar 10414, SulUt', '(+62) 320 5817 3628', 'dariati24@yahoo.com', NULL, NULL),
(22, 'PD Permadi Wastuti', 'Jr. Gambang No. 655, Tebing Tinggi 32647, JaBar', '0846 7587 3161', 'titi.novitasari@susanti.asia', NULL, NULL),
(23, 'PD Rahayu Wahyuni', 'Ds. Umalas No. 654, Magelang 87480, SulTra', '(+62) 757 9695 9452', 'suryatmi.dasa@yahoo.com', NULL, NULL),
(24, 'PT Rajata Kusumo (Persero) Tbk', 'Psr. Bata Putih No. 244, Pematangsiantar 26846, JaBar', '0652 6360 768', 'prayoga.yuliana@pratiwi.co.id', NULL, NULL),
(25, 'CV Hasanah', 'Gg. Kiaracondong No. 306, Palangka Raya 98538, SulSel', '(+62) 21 9229 8550', 'laksita.hasna@gmail.co.id', NULL, NULL),
(26, 'PT Wijaya Tbk', 'Dk. Wora Wari No. 731, Surabaya 87000, Bali', '029 3557 5077', 'ywibowo@saputra.go.id', NULL, NULL),
(27, 'Perum Hutasoit', 'Jln. Perintis Kemerdekaan No. 196, Kendari 69612, Banten', '0333 4478 945', 'ppratiwi@riyanti.org', NULL, NULL),
(28, 'PD Wahyudin Tbk', 'Gg. Jaksa No. 682, Bengkulu 53807, SulSel', '0318 1848 1483', 'wani.utama@maryati.co', NULL, NULL),
(29, 'Perum Permata Mandala', 'Ki. Bak Mandi No. 108, Tanjung Pinang 31130, NTB', '0408 6912 714', 'hprastuti@gmail.co.id', NULL, NULL),
(30, 'PT Agustina (Persero) Tbk', 'Ds. Bank Dagang Negara No. 654, Bima 61194, KalSel', '(+62) 209 2605 0867', 'suryatmi.eka@aryani.biz', NULL, NULL),
(31, 'PD Wasita Damanik Tbk', 'Ki. Achmad Yani No. 91, Banjarbaru 46415, BaBel', '(+62) 526 9494 329', 'astuti.embuh@gmail.com', NULL, NULL),
(32, 'PD Hasanah Pratiwi Tbk', 'Gg. Sudirman No. 839, Tual 85310, Riau', '0669 4455 3270', 'wulan39@usada.biz', NULL, NULL),
(33, 'PD Pudjiastuti Utami Tbk', 'Gg. Ikan No. 776, Prabumulih 17960, Jambi', '0536 1088 0630', 'dirja.wulandari@gunawan.org', NULL, NULL),
(34, 'Perum Aryani Nugroho (Persero) Tbk', 'Jr. Rumah Sakit No. 998, Pasuruan 35081, KalSel', '(+62) 584 0991 9871', 'dina.usamah@gmail.co.id', NULL, NULL),
(35, 'PD Napitupulu Namaga', 'Ki. Flores No. 859, Parepare 84601, NTB', '0537 8951 105', 'hwacana@yolanda.in', NULL, NULL),
(36, 'Perum Nuraini Kusmawati (Persero) Tbk', 'Psr. Wahid No. 495, Tebing Tinggi 41934, Bengkulu', '(+62) 768 9719 191', 'daniswara85@yahoo.com', NULL, NULL),
(37, 'UD Setiawan Agustina Tbk', 'Ds. Raden Saleh No. 801, Probolinggo 26642, SulTeng', '(+62) 979 7206 155', 'ilsa.haryanti@yahoo.com', NULL, NULL),
(38, 'Perum Uwais (Persero) Tbk', 'Kpg. Moch. Yamin No. 551, Subulussalam 18723, KalTeng', '0921 8439 538', 'ifa54@gmail.co.id', NULL, NULL),
(39, 'PT Sihombing Pratiwi (Persero) Tbk', 'Kpg. Ujung No. 177, Palembang 85635, JaTim', '0355 3299 824', 'shalim@gmail.com', NULL, NULL),
(40, 'CV Hidayanto Waluyo Tbk', 'Gg. Perintis Kemerdekaan No. 57, Ternate 47173, BaBel', '0588 5510 3057', 'siregar.eka@usamah.name', NULL, NULL),
(41, 'PT Habibi', 'Dk. Nanas No. 967, Malang 50676, Lampung', '(+62) 624 3473 958', 'asirwada.fujiati@gmail.co.id', NULL, NULL),
(42, 'UD Saragih', 'Ki. Lumban Tobing No. 633, Bengkulu 11490, SulBar', '0656 5043 1962', 'zahra25@pertiwi.org', NULL, NULL),
(43, 'PD Adriansyah', 'Gg. Abdul. Muis No. 938, Subulussalam 99837, SumBar', '(+62) 437 7019 568', 'imangunsong@maryati.desa.id', NULL, NULL),
(44, 'Perum Ardianto', 'Jr. Eka No. 519, Bandung 52699, Aceh', '(+62) 296 8921 6387', 'orahmawati@samosir.org', NULL, NULL),
(45, 'CV Kuswoyo', 'Ki. Basudewo No. 502, Makassar 70628, BaBel', '(+62) 335 2359 3478', 'dsitorus@yahoo.com', NULL, NULL),
(46, 'PD Agustina Hasanah', 'Dk. Sudiarto No. 985, Banda Aceh 51101, KepR', '(+62) 27 3599 957', 'marpaung.darmaji@prasetya.in', NULL, NULL),
(47, 'UD Ramadan Pradana (Persero) Tbk', 'Dk. Taman No. 266, Palembang 21326, KalTeng', '0222 2686 0419', 'xkusumo@marpaung.ac.id', NULL, NULL),
(48, 'PD Wasita Tbk', 'Ki. Madrasah No. 462, Tangerang Selatan 79157, SumUt', '(+62) 620 8061 1236', 'dinda.hidayanto@yahoo.co.id', NULL, NULL),
(49, 'CV Palastri Megantara', 'Psr. Pelajar Pejuang 45 No. 481, Tidore Kepulauan 24472, SumSel', '(+62) 278 5560 084', 'jwahyudin@setiawan.net', NULL, NULL),
(50, 'Yayasan Nurul Huda Lampung', 'Jln. Serbajadi II, Kecamatan Natar, Lampung Selatan', '0721 8013 610', 'admin@ynhl.org', '2020-04-27 19:03:05', '2020-04-27 19:03:05');

-- --------------------------------------------------------

--
-- Table structure for table `instansi_mahasiswa`
--

CREATE TABLE `instansi_mahasiswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `instansi_id` bigint(20) UNSIGNED NOT NULL,
  `mahasiswa_id` bigint(20) UNSIGNED NOT NULL,
  `divisi` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mulai` date DEFAULT NULL,
  `selesai` date DEFAULT NULL,
  `file_nilai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_logsheet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nilai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `instansi_mahasiswa`
--

INSERT INTO `instansi_mahasiswa` (`id`, `instansi_id`, `mahasiswa_id`, `divisi`, `mulai`, `selesai`, `file_nilai`, `file_logsheet`, `nilai`) VALUES
(2, 45, 4, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 30, 5, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 6, 6, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 4, 7, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 3, 8, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 23, 9, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 39, 10, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 20, 11, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 48, 12, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 19, 13, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 37, 14, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 39, 15, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 38, 16, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 10, 17, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 23, 18, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 3, 19, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 11, 20, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 40, 21, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 26, 22, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 11, 23, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 33, 25, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 32, 26, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 43, 27, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 20, 28, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 26, 29, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 47, 30, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 26, 31, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 16, 32, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 15, 33, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 45, 34, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 24, 35, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 38, 36, NULL, NULL, NULL, NULL, NULL, NULL),
(34, 10, 37, NULL, NULL, NULL, NULL, NULL, NULL),
(35, 23, 38, NULL, NULL, NULL, NULL, NULL, NULL),
(36, 1, 39, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 42, 40, NULL, NULL, NULL, NULL, NULL, NULL),
(38, 45, 41, NULL, NULL, NULL, NULL, NULL, NULL),
(39, 13, 42, NULL, NULL, NULL, NULL, NULL, NULL),
(40, 12, 43, NULL, NULL, NULL, NULL, NULL, NULL),
(41, 2, 44, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 39, 45, NULL, NULL, NULL, NULL, NULL, NULL),
(43, 25, 46, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 5, 47, NULL, NULL, NULL, NULL, NULL, NULL),
(45, 9, 48, NULL, NULL, NULL, NULL, NULL, NULL),
(46, 8, 49, NULL, NULL, NULL, NULL, NULL, NULL),
(47, 30, 50, NULL, NULL, NULL, NULL, NULL, NULL),
(48, 35, 51, NULL, NULL, NULL, NULL, NULL, NULL),
(49, 50, 1, 'Programmer', '2019-12-21', '2020-03-22', '14117149_nilai.pdf', '14117149_logsheet.pdf', 100),
(50, 0, 2, 'Quality Assurance', '2020-06-21', '2020-08-31', '14117033_nilai.pdf', '14117033_logsheet.pdf', 80),
(51, 33, 3, 'Programmer', '2020-07-21', '2020-08-31', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mahasiswa_id` bigint(20) NOT NULL,
  `revisi` int(11) NOT NULL,
  `disetujui` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `name`, `mahasiswa_id`, `revisi`, `disetujui`, `created_at`, `updated_at`) VALUES
(1, 'LaporanKP_14117149', 1, 1, 1, '2020-04-27 19:03:07', '2020-04-27 19:03:07'),
(2, 'LaporanKP_14117033', 2, 3, 1, '2020-04-27 19:03:08', '2020-04-27 19:03:08'),
(3, 'LaporanKP_14117041', 3, 2, 0, '2020-04-27 19:03:08', '2020-04-27 19:03:08');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `dosen_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nim` varchar(8) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun_masuk` year(4) DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Kontak_Person` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selesai` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `user_id`, `dosen_id`, `nim`, `tahun_masuk`, `alamat`, `Kontak_Person`, `selesai`, `created_at`, `updated_at`) VALUES
(1, 3, 1, '14117149', 2017, 'Jln. Serbajadi II, Kec. Natar, Lampung Selatan, Lampung', '(+62) 822 6995 8597', NULL, '2020-04-27 19:02:52', '2020-04-27 19:04:24'),
(2, 4, 1, '14117033', 2017, 'Lampung Timur', '(+62) 813 6701 3438', NULL, '2020-04-27 19:02:53', '2020-04-27 19:03:06'),
(3, 5, 1, '14117041', 2017, 'Tanjung Bintang, Lampung Selatan', '(+62) 858 4153 3174', NULL, '2020-04-27 19:02:53', '2020-04-27 19:03:06'),
(4, 6, 8, NULL, NULL, NULL, NULL, NULL, '2020-04-27 19:02:53', '2020-04-27 19:02:53'),
(5, 7, NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-27 19:02:53', '2020-04-27 19:02:53'),
(6, 8, 31, NULL, NULL, NULL, NULL, NULL, '2020-04-27 19:02:54', '2020-04-27 19:02:54'),
(7, 10, 12, NULL, NULL, NULL, NULL, NULL, '2020-04-27 19:02:54', '2020-04-27 19:02:54'),
(8, 11, 17, NULL, NULL, NULL, NULL, NULL, '2020-04-27 19:02:54', '2020-04-27 19:02:54'),
(9, 12, 3, NULL, NULL, NULL, NULL, NULL, '2020-04-27 19:02:54', '2020-04-27 19:02:54'),
(10, 13, 26, NULL, NULL, NULL, NULL, NULL, '2020-04-27 19:02:54', '2020-04-27 19:02:54'),
(11, 16, NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-27 19:02:55', '2020-04-27 19:02:55'),
(12, 18, 5, NULL, NULL, NULL, NULL, NULL, '2020-04-27 19:02:55', '2020-04-27 19:02:55'),
(13, 19, 4, NULL, NULL, NULL, NULL, NULL, '2020-04-27 19:02:55', '2020-04-27 19:02:55'),
(14, 22, 29, NULL, NULL, NULL, NULL, NULL, '2020-04-27 19:02:55', '2020-04-27 19:02:55'),
(15, 26, 12, NULL, NULL, NULL, NULL, NULL, '2020-04-27 19:02:56', '2020-04-27 19:02:56'),
(16, 28, 13, NULL, NULL, NULL, NULL, NULL, '2020-04-27 19:02:56', '2020-04-27 19:02:56'),
(17, 29, NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-27 19:02:56', '2020-04-27 19:02:56'),
(18, 31, 3, NULL, NULL, NULL, NULL, NULL, '2020-04-27 19:02:56', '2020-04-27 19:02:56'),
(19, 35, 7, NULL, NULL, NULL, NULL, NULL, '2020-04-27 19:02:57', '2020-04-27 19:02:57'),
(20, 36, 31, NULL, NULL, NULL, NULL, NULL, '2020-04-27 19:02:57', '2020-04-27 19:02:57'),
(21, 37, NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-27 19:02:57', '2020-04-27 19:02:57'),
(22, 38, 27, NULL, NULL, NULL, NULL, NULL, '2020-04-27 19:02:57', '2020-04-27 19:02:57'),
(23, 40, 10, NULL, NULL, NULL, NULL, NULL, '2020-04-27 19:02:57', '2020-04-27 19:02:57'),
(24, 43, NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-27 19:02:58', '2020-04-27 19:02:58'),
(25, 44, 17, NULL, NULL, NULL, NULL, NULL, '2020-04-27 19:02:58', '2020-04-27 19:02:58'),
(26, 53, 22, NULL, NULL, NULL, NULL, NULL, '2020-04-27 19:02:58', '2020-04-27 19:02:58'),
(27, 54, 17, NULL, NULL, NULL, NULL, NULL, '2020-04-27 19:02:59', '2020-04-27 19:02:59'),
(28, 56, NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-27 19:02:59', '2020-04-27 19:02:59'),
(29, 59, 20, NULL, NULL, NULL, NULL, NULL, '2020-04-27 19:02:59', '2020-04-27 19:02:59'),
(30, 60, 5, NULL, NULL, NULL, NULL, NULL, '2020-04-27 19:02:59', '2020-04-27 19:02:59'),
(31, 65, 10, NULL, NULL, NULL, NULL, NULL, '2020-04-27 19:03:00', '2020-04-27 19:03:00'),
(32, 66, 11, NULL, NULL, NULL, NULL, NULL, '2020-04-27 19:03:00', '2020-04-27 19:03:00'),
(33, 71, 4, NULL, NULL, NULL, NULL, NULL, '2020-04-27 19:03:00', '2020-04-27 19:03:00'),
(34, 77, 30, NULL, NULL, NULL, NULL, NULL, '2020-04-27 19:03:00', '2020-04-27 19:03:00'),
(35, 78, 2, NULL, NULL, NULL, NULL, NULL, '2020-04-27 19:03:01', '2020-04-27 19:03:01'),
(36, 80, 19, NULL, NULL, NULL, NULL, NULL, '2020-04-27 19:03:01', '2020-04-27 19:03:01'),
(37, 82, NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-27 19:03:01', '2020-04-27 19:03:01'),
(38, 84, 30, NULL, NULL, NULL, NULL, NULL, '2020-04-27 19:03:01', '2020-04-27 19:03:01'),
(39, 88, 23, NULL, NULL, NULL, NULL, NULL, '2020-04-27 19:03:01', '2020-04-27 19:03:01'),
(40, 89, 27, NULL, NULL, NULL, NULL, NULL, '2020-04-27 19:03:02', '2020-04-27 19:03:02'),
(41, 92, 6, NULL, NULL, NULL, NULL, NULL, '2020-04-27 19:03:02', '2020-04-27 19:03:02'),
(42, 93, 19, NULL, NULL, NULL, NULL, NULL, '2020-04-27 19:03:02', '2020-04-27 19:03:02'),
(43, 94, 18, NULL, NULL, NULL, NULL, NULL, '2020-04-27 19:03:02', '2020-04-27 19:03:02'),
(44, 95, 18, NULL, NULL, NULL, NULL, NULL, '2020-04-27 19:03:03', '2020-04-27 19:03:03'),
(45, 99, 20, NULL, NULL, NULL, NULL, NULL, '2020-04-27 19:03:03', '2020-04-27 19:03:03'),
(46, 100, 11, NULL, NULL, NULL, NULL, NULL, '2020-04-27 19:03:03', '2020-04-27 19:03:03'),
(47, 101, 21, NULL, NULL, NULL, NULL, NULL, '2020-04-27 19:03:04', '2020-04-27 19:03:04'),
(48, 102, 17, NULL, NULL, NULL, NULL, NULL, '2020-04-27 19:03:04', '2020-04-27 19:03:04'),
(49, 104, 11, NULL, NULL, NULL, NULL, NULL, '2020-04-27 19:03:04', '2020-04-27 19:03:04'),
(50, 105, NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-27 19:03:05', '2020-04-27 19:03:05'),
(51, 107, 12, NULL, NULL, NULL, NULL, NULL, '2020-04-27 19:03:05', '2020-04-27 19:03:05');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(188, '2014_10_12_000000_create_users_table', 1),
(189, '2014_10_12_100000_create_password_resets_table', 1),
(190, '2019_08_19_000000_create_failed_jobs_table', 1),
(191, '2020_03_19_044346_create_roles_table', 1),
(192, '2020_03_19_063522_create_role_user_table', 1),
(193, '2020_03_20_082055_create_mahasiswa_table', 1),
(194, '2020_03_20_120429_create_dosens_table', 1),
(195, '2020_03_20_122627_create_instansis_table', 1),
(196, '2020_03_22_045021_create_laporans_table', 1),
(197, '2020_03_22_121414_create_seminars_table', 1),
(198, '2020_04_09_112442_create_instansi_mahasiswa_table', 1),
(199, '2020_04_26_135143_create_catatans_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'koordinator', '2020-04-27 19:01:41', '2020-04-27 19:01:41'),
(2, 'dosen pembimbing', '2020-04-27 19:01:41', '2020-04-27 19:01:41'),
(3, 'mahasiswa', '2020-04-27 19:01:41', '2020-04-27 19:01:41');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 1, NULL, NULL),
(3, 2, 2, NULL, NULL),
(4, 3, 3, NULL, NULL),
(5, 3, 4, NULL, NULL),
(6, 3, 5, NULL, NULL),
(7, 3, 6, NULL, NULL),
(8, 3, 7, NULL, NULL),
(9, 3, 8, NULL, NULL),
(10, 2, 9, NULL, NULL),
(11, 3, 10, NULL, NULL),
(12, 3, 11, NULL, NULL),
(13, 3, 12, NULL, NULL),
(14, 3, 13, NULL, NULL),
(15, 2, 14, NULL, NULL),
(16, 2, 15, NULL, NULL),
(17, 3, 16, NULL, NULL),
(18, 2, 17, NULL, NULL),
(19, 3, 18, NULL, NULL),
(20, 3, 19, NULL, NULL),
(21, 2, 20, NULL, NULL),
(22, 2, 21, NULL, NULL),
(23, 3, 22, NULL, NULL),
(24, 2, 23, NULL, NULL),
(25, 2, 24, NULL, NULL),
(26, 2, 25, NULL, NULL),
(27, 3, 26, NULL, NULL),
(28, 2, 27, NULL, NULL),
(29, 3, 28, NULL, NULL),
(30, 3, 29, NULL, NULL),
(31, 2, 30, NULL, NULL),
(32, 3, 31, NULL, NULL),
(33, 2, 32, NULL, NULL),
(34, 2, 33, NULL, NULL),
(35, 2, 34, NULL, NULL),
(36, 3, 35, NULL, NULL),
(37, 3, 36, NULL, NULL),
(38, 3, 37, NULL, NULL),
(39, 3, 38, NULL, NULL),
(40, 2, 39, NULL, NULL),
(41, 3, 40, NULL, NULL),
(42, 2, 41, NULL, NULL),
(43, 2, 42, NULL, NULL),
(44, 3, 43, NULL, NULL),
(45, 3, 44, NULL, NULL),
(46, 2, 45, NULL, NULL),
(47, 2, 46, NULL, NULL),
(48, 2, 47, NULL, NULL),
(49, 2, 48, NULL, NULL),
(50, 2, 49, NULL, NULL),
(51, 2, 50, NULL, NULL),
(52, 2, 51, NULL, NULL),
(53, 2, 52, NULL, NULL),
(54, 3, 53, NULL, NULL),
(55, 3, 54, NULL, NULL),
(56, 2, 55, NULL, NULL),
(57, 3, 56, NULL, NULL),
(58, 2, 57, NULL, NULL),
(59, 2, 58, NULL, NULL),
(60, 3, 59, NULL, NULL),
(61, 3, 60, NULL, NULL),
(62, 2, 61, NULL, NULL),
(63, 2, 62, NULL, NULL),
(64, 2, 63, NULL, NULL),
(65, 2, 64, NULL, NULL),
(66, 3, 65, NULL, NULL),
(67, 3, 66, NULL, NULL),
(68, 2, 67, NULL, NULL),
(69, 2, 68, NULL, NULL),
(70, 2, 69, NULL, NULL),
(71, 2, 70, NULL, NULL),
(72, 3, 71, NULL, NULL),
(73, 2, 72, NULL, NULL),
(74, 2, 73, NULL, NULL),
(75, 2, 74, NULL, NULL),
(76, 2, 75, NULL, NULL),
(77, 2, 76, NULL, NULL),
(78, 3, 77, NULL, NULL),
(79, 3, 78, NULL, NULL),
(80, 2, 79, NULL, NULL),
(81, 3, 80, NULL, NULL),
(82, 2, 81, NULL, NULL),
(83, 3, 82, NULL, NULL),
(84, 2, 83, NULL, NULL),
(85, 3, 84, NULL, NULL),
(86, 2, 85, NULL, NULL),
(87, 2, 86, NULL, NULL),
(88, 2, 87, NULL, NULL),
(89, 3, 88, NULL, NULL),
(90, 3, 89, NULL, NULL),
(91, 2, 90, NULL, NULL),
(92, 2, 91, NULL, NULL),
(93, 3, 92, NULL, NULL),
(94, 3, 93, NULL, NULL),
(95, 3, 94, NULL, NULL),
(96, 3, 95, NULL, NULL),
(97, 2, 96, NULL, NULL),
(98, 2, 97, NULL, NULL),
(99, 2, 98, NULL, NULL),
(100, 3, 99, NULL, NULL),
(101, 3, 100, NULL, NULL),
(102, 3, 101, NULL, NULL),
(103, 3, 102, NULL, NULL),
(104, 2, 103, NULL, NULL),
(105, 3, 104, NULL, NULL),
(106, 3, 105, NULL, NULL),
(107, 2, 106, NULL, NULL),
(108, 3, 107, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seminar`
--

CREATE TABLE `seminar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mahasiswa_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pelaksanaan` datetime DEFAULT NULL,
  `lokasi` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disetujui` tinyint(1) DEFAULT NULL,
  `catatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nilai` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seminar`
--

INSERT INTO `seminar` (`id`, `mahasiswa_id`, `name`, `pelaksanaan`, `lokasi`, `disetujui`, `catatan`, `nilai`, `created_at`, `updated_at`) VALUES
(1, 1, 'Visualisasi Dashboard Pemasukan dan Pengeluaran Yayasan Nurul Huda Lampung', '2020-04-09 10:00:00', 'D210', 1, NULL, 100, '2020-04-27 19:03:11', '2020-04-27 19:03:11'),
(2, 2, 'Web desa Kabupaten Lampung Tengah', '2020-09-09 10:00:00', 'D210', NULL, 'Saya bisa pada hari Rabu antara pukul 13:00-15:00 atau Jumat pukul 15:00-17:00', NULL, '2020-04-27 19:03:11', '2020-04-27 19:03:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mugi Praseptiawan', 'mugi.praseptiawan@if.itera.ac.id', '2020-04-27 19:02:32', '$2y$10$CHnseTuMyOVGpoJbxZTKyuokBmnXqDSYEqE6iHTSuahg6YvuEdPMm', NULL, '2020-04-27 19:01:43', '2020-04-27 19:02:32'),
(2, 'Rahman Indra Kesuma', 'rahman.indra@if.itera.ac.id', '2020-04-27 19:02:32', '$2y$10$T/CVypkM3RPxLz7KfMvDPuUk3E/PkiBOtPIOu.VQlpkfLpus1020e', NULL, '2020-04-27 19:01:44', '2020-04-27 19:02:32'),
(3, 'Afdi Fauzul Bahar', 'afdi.14117149@student.itera.ac.id', '2020-04-27 19:01:44', '$2y$10$Z/DQR/ZOZvCOStXbUE7i8u2WvOuypUsMXNWf1RL0uiMRmH/fs4ZPa', NULL, '2020-04-27 19:01:44', '2020-04-27 19:01:44'),
(4, 'Dewa Ayu', 'dewa.14117033@student.itera.ac.id', '2020-04-27 19:01:45', '$2y$10$xXY3e.8a5m6q6K291XTfI.3Ic904wM9gQFMtOlZOdz0AXxdQD1Wla', NULL, '2020-04-27 19:01:44', '2020-04-27 19:01:45'),
(5, 'Maria Andini', 'maria.14117041@student.itera.ac.id', '2020-04-27 19:02:53', '$2y$10$P65r05tR2lzMYnq8LVMaSOGrO6ohfygOntySTVvzJzb5ZNO2W08WO', NULL, '2020-04-27 19:01:45', '2020-04-27 19:02:53'),
(6, 'Yosi Mardianti', 'Yosi.14117096@student.itera.ac.id', '2020-04-27 19:02:53', '$2y$10$IgZzFnAUXnOl8ElQLLATl..m237NCMTQuIIMABv.dOQwzpDN/Mf8m', NULL, '2020-04-27 19:01:45', '2020-04-27 19:02:53'),
(7, 'Dhiko Jangjaya Putra', 'Dhiko.14117016@student.itera.ac.id', '2020-04-27 19:02:54', '$2y$10$nM5sh3OqycqtbceB6s2RluYKOEea1MqU7/M7uJ8HWaoc7uzLNe1q2', NULL, '2020-04-27 19:01:45', '2020-04-27 19:02:54'),
(8, 'Dirja Kanda Wibisono', 'chelsea.mayasari@yahoo.com', '2020-04-27 19:02:54', '$2y$10$.hs6ovAHN418V1iazakcGu.a6gG85Koi8rt8iLtRSJPeWnyDJ0rpi', NULL, '2020-04-27 19:01:47', '2020-04-27 19:02:54'),
(9, 'Silvia Queen Pratiwi', 'permata.wage@yahoo.co.id', '2020-04-27 19:02:32', '$2y$10$V6YnjbJwqHnf/NeEYH/Mv.Bd4XQ4WEv1zClaTkP3h/QZOB5LOSrwK', NULL, '2020-04-27 19:01:47', '2020-04-27 19:02:32'),
(10, 'Hilda Puti Usamah M.Kom.', 'karja.gunawan@yahoo.com', '2020-04-27 19:02:54', '$2y$10$ipgTofiDcWFyy6TVaRch5ePZ/.VjicWeq2MU7/8BqSsKdHnfazujm', NULL, '2020-04-27 19:01:47', '2020-04-27 19:02:54'),
(11, 'Ajimin Hutapea M.Kom.', 'handayani.taufan@yahoo.co.id', '2020-04-27 19:02:54', '$2y$10$6CQ90B1D3K5zjlDKA8c28eY0yXuPIDDzO48NZQnW/GxmeV6aB38rO', NULL, '2020-04-27 19:01:48', '2020-04-27 19:02:54'),
(12, 'Saiful Siregar', 'melani.sabar@yahoo.co.id', '2020-04-27 19:02:54', '$2y$10$KYuA37L5w8Ian6f68tqq7etWDiWUaErf09j0aDk9FGKEk6hBVFbRe', NULL, '2020-04-27 19:01:48', '2020-04-27 19:02:54'),
(13, 'Tira Sarah Laksita M.M.', 'mahmud11@yahoo.com', '2020-04-27 19:02:55', '$2y$10$pHTSNifYozEW/sTcywFLlelprrg9Ym42kdqH9Px5e5T0F1r2/Cy8e', NULL, '2020-04-27 19:01:48', '2020-04-27 19:02:55'),
(14, 'Bakiman Hardi Tarihoran', 'ganda.habibi@yahoo.co.id', '2020-04-27 19:02:33', '$2y$10$M7k4n2v2JZO66jBCJyVYy.eoqzXA.808dDn3yiIDdcfZ3LgDoRRTy', NULL, '2020-04-27 19:01:48', '2020-04-27 19:02:33'),
(15, 'Hesti Suartini', 'bagus67@kuswandari.mil.id', '2020-04-27 19:02:33', '$2y$10$uRrFUZANOzTz8uf.e7V5O.uvjY4GIvl3jUXfTumtHBn.QzaGupjQu', NULL, '2020-04-27 19:01:48', '2020-04-27 19:02:33'),
(16, 'Taufan Harimurti Setiawan S.T.', 'humaira96@pratama.or.id', '2020-04-27 19:02:55', '$2y$10$4B/uKTeVFVM.fClIRMPd9uFOFNGbiKt7yGkMFeHIEG.c8IfwELKv2', NULL, '2020-04-27 19:01:49', '2020-04-27 19:02:55'),
(17, 'Lalita Mardhiyah', 'vwijayanti@mansur.name', '2020-04-27 19:02:33', '$2y$10$DNiWB5DmIK0CaQS8vMQRLOUgNJkYqWI6wCKiZs1ZrUrMsQrashmMK', NULL, '2020-04-27 19:01:49', '2020-04-27 19:02:33'),
(18, 'Galak Nashiruddin', 'nababan.uchita@gmail.com', '2020-04-27 19:02:55', '$2y$10$xxe/k0HFSK9NoP/E4OjtdOQuuKerSAgZukHegpdJGzMs9YTxBTObK', NULL, '2020-04-27 19:01:49', '2020-04-27 19:02:55'),
(19, 'Puput Rachel Nuraini', 'kurniawan.ida@gmail.com', '2020-04-27 19:02:55', '$2y$10$q4ZG789TiSF.lB2E02I81eihCBjX1eGLxOekbr2XkgBtbDNJT/2Oa', NULL, '2020-04-27 19:01:50', '2020-04-27 19:02:55'),
(20, 'Cawuk Putra', 'eanggriawan@yahoo.co.id', '2020-04-27 19:02:33', '$2y$10$HJXwbkn2hiH38rWCXbdu8eZoY3UI0kxIKzRayHEH0wzCosK1MPb3m', NULL, '2020-04-27 19:01:50', '2020-04-27 19:02:33'),
(21, 'Intan Ratih Usada', 'samsul26@yahoo.co.id', '2020-04-27 19:02:33', '$2y$10$JqZEkXhZiXUNbNzjyLS7VuvlC5eL8FOtsmC/ysHXqC6E1.Vfz3bu2', NULL, '2020-04-27 19:01:50', '2020-04-27 19:02:33'),
(22, 'Bakianto Firgantoro', 'hassanah.muni@marbun.tv', '2020-04-27 19:02:56', '$2y$10$M5.cb7XrlHIPqjYavoYpje7AR9Nk7ZpD5hdecqO9rKfC7DnRLr2p6', NULL, '2020-04-27 19:01:50', '2020-04-27 19:02:56'),
(23, 'Sakura Laksita', 'mayasari.eva@yahoo.com', '2020-04-27 19:02:34', '$2y$10$gdWTW8ur3NWGZUMcKU10f.HRwywz/7CQZj3ZXMd6VXa.rLKkcol.W', NULL, '2020-04-27 19:01:50', '2020-04-27 19:02:34'),
(24, 'Candrakanta Eja Waskita M.Pd', 'susanti.purwa@astuti.web.id', '2020-04-27 19:02:34', '$2y$10$9HN.ke6yezMinoWujBtxpujGt1FaL.pZPG7OPFk5gGP/URekw2SI.', NULL, '2020-04-27 19:01:51', '2020-04-27 19:02:34'),
(25, 'Wulan Uchita Halimah', 'sabri.thamrin@agustina.id', '2020-04-27 19:02:34', '$2y$10$vUFRQdSRyQ7RL65lpiv5Teq1rhXFFiZT9ag8vrKW5zC/INxmVqOi6', NULL, '2020-04-27 19:01:51', '2020-04-27 19:02:34'),
(26, 'Kusuma Cemplunk Hidayat', 'olivia.wacana@gmail.com', '2020-04-27 19:02:56', '$2y$10$/zGiQwERh1vuULiT.D/0WuBilDaEK2e2Wt4dT1u1S3cnuoeZfz5Qu', NULL, '2020-04-27 19:01:51', '2020-04-27 19:02:56'),
(27, 'Hilda Wani Melani S.Pd', 'marwata.nuraini@siregar.go.id', '2020-04-27 19:02:34', '$2y$10$29gwSCrEzPMOj03gGHBnU.kgfY6CGZuGuPbo8BTIp3d1npp7RgiLe', NULL, '2020-04-27 19:01:52', '2020-04-27 19:02:34'),
(28, 'Padmi Hasanah S.Ked', 'yani.saptono@salahudin.mil.id', '2020-04-27 19:02:56', '$2y$10$6E7UW3RpR9DSWbcftzR.teOgpQl/spn5X5sFYciYZNqLUIArKa0ze', NULL, '2020-04-27 19:01:53', '2020-04-27 19:02:56'),
(29, 'Padma Ida Purwanti M.Kom.', 'dipa24@gmail.com', '2020-04-27 19:02:56', '$2y$10$SoCAU4EyMgdhT16Nk0.mjegb7xnUjO2lOzVA6Kb87PwMskeklvsk2', NULL, '2020-04-27 19:01:54', '2020-04-27 19:02:56'),
(30, 'Bakijan Nainggolan', 'karta35@mayasari.web.id', '2020-04-27 19:02:34', '$2y$10$Gk98lullKwB4nBVylzXCbui6Q8EWHOPiDZHFyQKUpUoPBdyZ.de3S', NULL, '2020-04-27 19:01:55', '2020-04-27 19:02:34'),
(31, 'Bambang Upik Hidayat', 'nrima58@gmail.co.id', '2020-04-27 19:02:56', '$2y$10$JD7dOB8KHkacWk9y64hhTe6cmhOiDWoNtd1RKKrlX24nIOVkvDtrO', NULL, '2020-04-27 19:01:56', '2020-04-27 19:02:56'),
(32, 'Ophelia Kuswandari S.H.', 'emayasari@gmail.co.id', '2020-04-27 19:02:34', '$2y$10$ksFtJ33nbdvbj6SwwDA23.0H7RG5FWIuMp5Qw02ho2imP7SPT2lIC', NULL, '2020-04-27 19:01:56', '2020-04-27 19:02:34'),
(33, 'Prabawa Kurnia Prasetya S.Psi', 'diah.yolanda@yahoo.co.id', '2020-04-27 19:02:35', '$2y$10$XlVlZ9aIy6Yf2zkr2VFSjuvY6FvBCkWCk09f7JdrdGc3eBeBsfHrC', NULL, '2020-04-27 19:01:57', '2020-04-27 19:02:35'),
(34, 'Ghaliyati Handayani M.Pd', 'ghutagalung@rahmawati.tv', '2020-04-27 19:02:35', '$2y$10$rl8dLi3GAtgqNXN9i//b0e/c7HnqRGqXhBpDah/6I6F7OD1O1X3gS', NULL, '2020-04-27 19:01:57', '2020-04-27 19:02:35'),
(35, 'Julia Nasyidah', 'uwulandari@gmail.co.id', '2020-04-27 19:02:57', '$2y$10$wNIQdE/9IppClgj.10wfpOoq0DOb5ZQWR4SGyHBEY3xRhQJ2Y68nm', NULL, '2020-04-27 19:01:57', '2020-04-27 19:02:57'),
(36, 'Najam Damu Latupono S.Farm', 'cahyanto.yuliarti@dongoran.biz', '2020-04-27 19:02:57', '$2y$10$/yaYpma.qhQ.MP.Kd2ujuOSegNwr2QJQTz.OuLU.i0TsE4uXpoGKm', NULL, '2020-04-27 19:01:58', '2020-04-27 19:02:57'),
(37, 'Raina Aryani', 'koko75@yahoo.co.id', '2020-04-27 19:02:57', '$2y$10$QCETvm9dtcvsx55UHZFy3ORvbC/DYg8tOO4yOiOeo1Q2b1.ybn8aa', NULL, '2020-04-27 19:01:58', '2020-04-27 19:02:57'),
(38, 'Jabal Jailani S.I.Kom', 'icha.tamba@gmail.com', '2020-04-27 19:02:57', '$2y$10$wbBAgvjyzGTKCLMWnP5LieWKH4kr.0/2RGR3mQyfkmyZS7qDo1oSS', NULL, '2020-04-27 19:01:59', '2020-04-27 19:02:57'),
(39, 'Cahyadi Prasetya', 'darijan50@gmail.co.id', '2020-04-27 19:02:35', '$2y$10$.u7Hgv9eEOiQNAmtUocSaegNF7MBxDv.EX/SnCeLQJvrTV10foaMG', NULL, '2020-04-27 19:01:59', '2020-04-27 19:02:35'),
(40, 'Vino Sihombing', 'vicky.uyainah@gmail.com', '2020-04-27 19:02:58', '$2y$10$P5avkO6KrOxg/thUpZ7eY.K7Cu7uBIBiCNtKrtdxEQpm6faWlXcEG', NULL, '2020-04-27 19:02:00', '2020-04-27 19:02:58'),
(41, 'Prayoga Wibisono', 'juli.palastri@yahoo.co.id', '2020-04-27 19:02:35', '$2y$10$e9trUDf2v.h0AG1TK8t1Dez7F/SxEX9B5YfXfPdrmsdVX6uWjMecy', NULL, '2020-04-27 19:02:01', '2020-04-27 19:02:35'),
(42, 'Ismail Cahyo Firmansyah S.E.I', 'xhutapea@narpati.co', '2020-04-27 19:02:35', '$2y$10$JTdK5LKUZ6q0Gi2APwCTTuFMLIXKZQowQGKJCRBEMFgkp3DQKLOb.', NULL, '2020-04-27 19:02:01', '2020-04-27 19:02:35'),
(43, 'Rahmi Yulianti', 'andriani.wani@pudjiastuti.info', NULL, '$2y$10$iE/iAFaFZvW8SiL.dd5RSOR8j9PSjViwAX2A3rqLoWkc2FB0NgLvy', NULL, '2020-04-27 19:02:02', '2020-04-27 19:02:02'),
(44, 'Karma Firmansyah', 'qhartati@yahoo.com', '2020-04-27 19:02:58', '$2y$10$pQd8WYPw3hkvzljJ.vqAE.pfBIjhCWJx06C6IzBpyw8noWB1h7a3.', NULL, '2020-04-27 19:02:03', '2020-04-27 19:02:58'),
(45, 'Dodo Ian Kurniawan S.E.', 'vega86@melani.co.id', '2020-04-27 19:02:35', '$2y$10$L/bXPkQA1YYcJzNhwocJY.yj.bMYnm1W3HmwpH/XbqiomNw8ge0R6', NULL, '2020-04-27 19:02:03', '2020-04-27 19:02:35'),
(46, 'Muhammad Lukita Mahendra', 'martani.najmudin@hastuti.or.id', '2020-04-27 19:02:36', '$2y$10$lomegn6v2O5xLQIdAsWR5.u6t/Ny0A.plvP.Vb0EkvXu48pB.4QDG', NULL, '2020-04-27 19:02:04', '2020-04-27 19:02:36'),
(47, 'Amalia Maimunah Haryanti S.Psi', 'hastuti.bella@marpaung.my.id', '2020-04-27 19:02:36', '$2y$10$gq5G1EYHhhaE0gptlYWd9.WhXc2xOgQcQ/hBW/wnwS2k7SynUmoxO', NULL, '2020-04-27 19:02:04', '2020-04-27 19:02:36'),
(48, 'Ida Juli Kuswandari', 'martaka38@yahoo.com', '2020-04-27 19:02:36', '$2y$10$r9eEr9eHZgc9FLqIgKJVC.aWBU9TgkBOR7D7F10R4AUMrLztz0pMa', NULL, '2020-04-27 19:02:05', '2020-04-27 19:02:36'),
(49, 'Asirwada Latupono M.Pd', 'bakianto32@gunawan.in', '2020-04-27 19:02:36', '$2y$10$pTz44DcC0rzLu7ISqT9CtOyLLdsOhuITWYwJ0l/5xpXS6wmLVtuGe', NULL, '2020-04-27 19:02:05', '2020-04-27 19:02:36'),
(50, 'Rahmi Rahmi Lestari', 'riyanti.salwa@gmail.com', '2020-04-27 19:02:36', '$2y$10$QYx38.MxdSEmqoAz5sBMIeVGdrCDmJ/FfWUumwWikwFRwc4MTiaqy', NULL, '2020-04-27 19:02:06', '2020-04-27 19:02:36'),
(51, 'Banawa Putra', 'slamet.pradana@gmail.co.id', '2020-04-27 19:02:36', '$2y$10$6yFizHdj.LUyMI3L9RS6RufUSAf6yzpk45v3hTNia8wbuqMXfHUGq', NULL, '2020-04-27 19:02:06', '2020-04-27 19:02:36'),
(52, 'Salimah Nasyiah M.TI.', 'dnurdiyanti@mustofa.co.id', '2020-04-27 19:02:36', '$2y$10$8Pk6llmJNTKX2/BXhHKDluA57nDlO3EzWY.9IQN2/iue1tYrv1KMy', NULL, '2020-04-27 19:02:06', '2020-04-27 19:02:37'),
(53, 'Kala Siregar', 'lmanullang@sitompul.go.id', '2020-04-27 19:02:59', '$2y$10$U.yyZEdT7AXiVjgArzx9Yegwq9mg.Ctho9JwRpRDiTVKAyug7ir3y', NULL, '2020-04-27 19:02:07', '2020-04-27 19:02:59'),
(54, 'Mutia Mandasari', 'vero.wijayanti@yahoo.co.id', '2020-04-27 19:02:59', '$2y$10$fuiKPLCJOBa3TtuoHwOxSex051CTQc/66UY3OTxZZPpXbJ.Pi9Nbu', NULL, '2020-04-27 19:02:07', '2020-04-27 19:02:59'),
(55, 'Dirja Suryono', 'qwulandari@kusumo.ac.id', '2020-04-27 19:02:37', '$2y$10$N19z4Su6TyZOBTbxTMtI.ehmIOyeBEvPTrnRKfoImwqPl2Z/x5r3.', NULL, '2020-04-27 19:02:07', '2020-04-27 19:02:37'),
(56, 'Zaenab Mayasari', 'rahmawati.kani@yahoo.com', '2020-04-27 19:02:59', '$2y$10$135YnLodT6xgVVcq.9vVPuzF77..R2TQezI.Mvo/WmpUu4R1dvosW', NULL, '2020-04-27 19:02:07', '2020-04-27 19:02:59'),
(57, 'Jarwi Luhung Waskita S.Sos', 'mandasari.silvia@kuswoyo.tv', '2020-04-27 19:02:37', '$2y$10$r4cohCXaFO6Zalo3ct4MYukXIQTbdd5KBwWLFXbWHfAqKlbKhre..', NULL, '2020-04-27 19:02:08', '2020-04-27 19:02:37'),
(58, 'Panji Samosir S.H.', 'ulaksita@sihombing.id', '2020-04-27 19:02:37', '$2y$10$awBFVhAiGq5bMkIs9.Bn3Otm77Cv2CUuTg43VU9PZl08rvqA9S6/2', NULL, '2020-04-27 19:02:08', '2020-04-27 19:02:37'),
(59, 'Laila Rahayu', 'hilda.budiman@aryani.my.id', '2020-04-27 19:02:59', '$2y$10$iEVcB9HWG1mCVLJNpdjpH.8ZZDvzDOxCJCIdv/RZoC9ZN.F6ZdC5m', NULL, '2020-04-27 19:02:08', '2020-04-27 19:02:59'),
(60, 'Fathonah Wirda Oktaviani M.Ak', 'tania.utama@gmail.com', '2020-04-27 19:03:00', '$2y$10$fKpEe2jKx9YpoGgmyaiDP..yrZOjXpIhnXhqU/SzSfThzYr0sJZfi', NULL, '2020-04-27 19:02:08', '2020-04-27 19:03:00'),
(61, 'Putri Haryanti', 'dartono67@yahoo.com', '2020-04-27 19:02:37', '$2y$10$qhoVq5YBUbh1vv1ZVhFoyefmK/bkZvIgUMKou6XFoeoWiHc5zZtPu', NULL, '2020-04-27 19:02:09', '2020-04-27 19:02:37'),
(62, 'Kamila Prastuti', 'darmana.hidayanto@usada.net', '2020-04-27 19:02:37', '$2y$10$BXl.8D8wT3k99upPoiMst.nTZD487ay76JtR22/n.zR2qzVaVT446', NULL, '2020-04-27 19:02:09', '2020-04-27 19:02:37'),
(63, 'Olivia Lestari', 'kusmawati.upik@situmorang.web.id', '2020-04-27 19:02:37', '$2y$10$cPm5ztSrSjyZA/2KQwrh4eP.h/aDRclE6P0uYG5BGnLlPbr6Ocqh6', NULL, '2020-04-27 19:02:09', '2020-04-27 19:02:37'),
(64, 'Kamidin Marpaung', 'purwanti.kacung@gmail.com', '2020-04-27 19:02:38', '$2y$10$KOggC4KcXscZ1nM8v6gtqO3J0egjHRZl2vszYJ1KruL.SjRaxTrjq', NULL, '2020-04-27 19:02:09', '2020-04-27 19:02:38'),
(65, 'Suci Melani', 'salimah.haryanti@maulana.com', '2020-04-27 19:03:00', '$2y$10$vEMdX2zeuIZh3X7DSVRPe.f1jQzjgzk9zh5lzen8kpL1KytE8MllW', NULL, '2020-04-27 19:02:09', '2020-04-27 19:03:00'),
(66, 'Janet Jasmin Usamah S.H.', 'ajiono80@gmail.co.id', '2020-04-27 19:03:00', '$2y$10$MXIuZ7l5ZI6edFBkhdzmZue9J/GVa0UyjTDc40P2SyMKDrNBnvdoS', NULL, '2020-04-27 19:02:10', '2020-04-27 19:03:00'),
(67, 'Laswi Sitompul', 'cawisono06@gmail.co.id', '2020-04-27 19:02:38', '$2y$10$GKNP4hGUGhICHS2mDyyZ/eJVUPt3NceTua2n.Of8OS9JX0kKXZ2DK', NULL, '2020-04-27 19:02:10', '2020-04-27 19:02:38'),
(68, 'Waluyo Dipa Tampubolon S.Psi', 'anovitasari@gmail.co.id', '2020-04-27 19:02:38', '$2y$10$MjdhDZbT9QBAHkiJkn6kTeLWeszI1C4hmHJk1FFRwEUUaQTW2su.a', NULL, '2020-04-27 19:02:10', '2020-04-27 19:02:38'),
(69, 'Balidin Candrakanta Saefullah', 'humaira.rajasa@prasetyo.web.id', '2020-04-27 19:02:38', '$2y$10$0KUkCwu5EWsJaijrPaOcYuGBl6qwi6AXMZvHJhE5IZc1uVKy4cy32', NULL, '2020-04-27 19:02:11', '2020-04-27 19:02:38'),
(70, 'Kani Ami Utami', 'mayasari.rina@wacana.or.id', '2020-04-27 19:02:38', '$2y$10$fowQA/89eqCzk6mYDxYNKe6k9r1Hz7xEA6pr.AnH608EOgkRfMl46', NULL, '2020-04-27 19:02:11', '2020-04-27 19:02:38'),
(71, 'Prayoga Prasasta', 'rini93@wulandari.biz.id', '2020-04-27 19:03:00', '$2y$10$a5uxBzPmVbcWNWP1vgQ/VOr29VRC3ezsHY37x7e7IKnfWwjxWiMBy', NULL, '2020-04-27 19:02:11', '2020-04-27 19:03:00'),
(72, 'Jessica Sakura Mardhiyah S.Psi', 'harja51@ardianto.asia', '2020-04-27 19:02:38', '$2y$10$E5.MNV/qZtRHVL6Z6c.JY.Mwj0x3o8QWQnhdwrqQhjVqDZXbEloW.', NULL, '2020-04-27 19:02:12', '2020-04-27 19:02:38'),
(73, 'Kunthara Daliono Prakasa M.TI.', 'elisa63@yahoo.co.id', '2020-04-27 19:02:38', '$2y$10$/2m7/CaxMVW3Srf9ECVtt.lL8vML0mljKCm4BO7bbalgLzpp8LGaW', NULL, '2020-04-27 19:02:12', '2020-04-27 19:02:38'),
(74, 'Kasiyah Suryatmi', 'prakasa.dartono@utami.web.id', '2020-04-27 19:02:39', '$2y$10$Yr/2S4R8aAlsINil31mnPeX.Xr2/yPZCZdyPMHdBbwYa.QDN23/Dq', NULL, '2020-04-27 19:02:12', '2020-04-27 19:02:39'),
(75, 'Cakrawangsa Saputra', 'sarah88@yahoo.com', '2020-04-27 19:02:39', '$2y$10$lKsiehNrjP9cLvW1raqu2uPYPefgKAjflZQkdXjW2NOU.iYhqHRZe', NULL, '2020-04-27 19:02:12', '2020-04-27 19:02:39'),
(76, 'Tami Diana Safitri', 'nwaluyo@nurdiyanti.sch.id', '2020-04-27 19:02:39', '$2y$10$0Ay5XmYhaS6T1.9GB2l9ke7T1kTw7fJhoEcdUqkVpF7PG.Qg8Z2pm', NULL, '2020-04-27 19:02:12', '2020-04-27 19:02:39'),
(77, 'Kasiyah Permata', 'glestari@tamba.tv', '2020-04-27 19:03:00', '$2y$10$6YeyYWW4VRfkRK0HXPyYrO7buK5o4uHVYKMn2VAuWkUcD6i.RmXwu', NULL, '2020-04-27 19:02:13', '2020-04-27 19:03:00'),
(78, 'Jane Fujiati M.TI.', 'harjaya31@yahoo.co.id', '2020-04-27 19:03:01', '$2y$10$dcgSs9gXP/sxJjbVOQ9TreZfuVShR4L63GdfyFDcsGxHiQKnnWWOq', NULL, '2020-04-27 19:02:13', '2020-04-27 19:03:01'),
(79, 'Qori Purnawati', 'budiyanto.hasna@sihotang.id', '2020-04-27 19:02:39', '$2y$10$QGbRagWJqQuTDSUnM4ZLxO6yvkG0Fb0.UcgrbPapbEamXg12KI5lW', NULL, '2020-04-27 19:02:13', '2020-04-27 19:02:39'),
(80, 'Farah Jane Usada', 'rahayu.karimah@mangunsong.net', '2020-04-27 19:03:01', '$2y$10$oFJZ7bLvQZbrFIfqTi9PwuhjsFwPrdbeoE0/mLtM3khXrJgbJEaiG', NULL, '2020-04-27 19:02:14', '2020-04-27 19:03:01'),
(81, 'Gasti Handayani', 'nriyanti@gmail.co.id', '2020-04-27 19:02:39', '$2y$10$i24hsRexWXM0Ly5CA/ITU.AC6XYCK8x9OHeYcCcagauAo9JI0J.7e', NULL, '2020-04-27 19:02:14', '2020-04-27 19:02:39'),
(82, 'Alika Hasanah M.Kom.', 'cpuspasari@tampubolon.id', '2020-04-27 19:03:01', '$2y$10$rKEmb3b3DKxLz15XMhglreqGSsuxC30qSjTz5XZ1NDzJdYiqic5Em', NULL, '2020-04-27 19:02:15', '2020-04-27 19:03:01'),
(83, 'Paris Rina Uyainah', 'ivan57@wahyuni.go.id', '2020-04-27 19:02:39', '$2y$10$JVojacaZGhdQLxBUmZWN5.TBbzxMNIl5hENQ5agBLDQE7.fANX67O', NULL, '2020-04-27 19:02:15', '2020-04-27 19:02:39'),
(84, 'Sadina Rahimah', 'utama.fujiati@gmail.co.id', '2020-04-27 19:03:01', '$2y$10$uHQ.uGuNia3wy1g2hcBlm.5ZRZZ32C44O0nzJr4nFNkXMMPwMwcKO', NULL, '2020-04-27 19:02:15', '2020-04-27 19:03:01'),
(85, 'Sadina Astuti M.Farm', 'budiyanto.lala@winarno.my.id', '2020-04-27 19:02:39', '$2y$10$tA3tYRYDcifQxF0msxW4Uu0z0oosNRcDrUcfZplNaxPdNimXmBGqC', NULL, '2020-04-27 19:02:16', '2020-04-27 19:02:40'),
(86, 'Ciaobella Usada S.IP', 'vero64@maheswara.co.id', '2020-04-27 19:02:40', '$2y$10$qtK3rUq4hdZPEZHEkvOyhewKIy0jA1.egkSZ/dZd3pVyA0TGB6PDu', NULL, '2020-04-27 19:02:18', '2020-04-27 19:02:40'),
(87, 'Humaira Aisyah Pertiwi M.Farm', 'anita.marpaung@samosir.info', '2020-04-27 19:02:40', '$2y$10$RXWqEYAYu4R9U9S0EXjzfOV/aKF985rQBSzbjtoVn1uajEDWOBnSC', NULL, '2020-04-27 19:02:18', '2020-04-27 19:02:40'),
(88, 'Dartono Eka Siregar', 'nardianto@uwais.tv', '2020-04-27 19:03:02', '$2y$10$WtlmLSpWAOHgb5CZCi3CEu1NvpjoBEv0hyS6bqzRz6.mi8Pf35Aae', NULL, '2020-04-27 19:02:19', '2020-04-27 19:03:02'),
(89, 'Bancar Santoso M.Pd', 'siregar.lintang@purwanti.net', '2020-04-27 19:03:02', '$2y$10$dE6qPfItyMJzRlGT8mRv/.VSVUPb39UdNZl7bE7jfESLguBco3boO', NULL, '2020-04-27 19:02:19', '2020-04-27 19:03:02'),
(90, 'Intan Ulya Farida', 'claksita@wijayanti.id', '2020-04-27 19:02:40', '$2y$10$vqq.ZE40XuvRHGDGaa3Z4.vjAM9B9Z9ru7TyieYJAlJu.Uryr4Wba', NULL, '2020-04-27 19:02:20', '2020-04-27 19:02:40'),
(91, 'Laksana Wahyu Narpati M.Ak', 'karsana89@habibi.tv', '2020-04-27 19:02:40', '$2y$10$asestmPmgU3VdeprnsYm1eHjzjhCWmzfhycYQhkeAcxvznQ/MYK02', NULL, '2020-04-27 19:02:21', '2020-04-27 19:02:40'),
(92, 'Nurul Hassanah S.Sos', 'anggabaya.saragih@mandala.ac.id', '2020-04-27 19:03:02', '$2y$10$znAFvUXn97nOJvm86.R45O03wAdgHwYMXwLHtZn2YedC03P8934Aq', NULL, '2020-04-27 19:02:21', '2020-04-27 19:03:02'),
(93, 'Galak Capa Damanik', 'lailasari.sari@nasyidah.id', '2020-04-27 19:03:02', '$2y$10$TCk3Rsq.ALPPnSyjVBVoyuh1ot0kS7sSIYzbx7lfo805Ll3j0lDc2', NULL, '2020-04-27 19:02:21', '2020-04-27 19:03:02'),
(94, 'Ajiono Halim', 'gilda.thamrin@santoso.my.id', '2020-04-27 19:03:02', '$2y$10$zqDo88tDTBMcOLrHjQOjw.dOzUjlN/JTp7hoe9LEmSqkhnE0a.F4e', NULL, '2020-04-27 19:02:22', '2020-04-27 19:03:02'),
(95, 'Nurul Hasanah', 'hutagalung.tania@lestari.mil.id', '2020-04-27 19:03:03', '$2y$10$tD4Qel/yvrEnCKfQnmICc.W4faYMFGReGqtUVa0wiDGmuorr0PgBi', NULL, '2020-04-27 19:02:22', '2020-04-27 19:03:03'),
(96, 'Sidiq Agus Kusumo', 'damar58@hasanah.org', '2020-04-27 19:02:40', '$2y$10$oN0GN6uL4OdY3op3/A9rl.zM/vgIEAAyNWJ53/OkitMFCYD1iq.Wy', NULL, '2020-04-27 19:02:23', '2020-04-27 19:02:40'),
(97, 'Respati Winarno', 'qyuniar@gmail.com', '2020-04-27 19:02:41', '$2y$10$hjRscQO0Kk97qMA5rm9ESObT49nSblPfieE4GLEDP9HLG2BN1AwES', NULL, '2020-04-27 19:02:23', '2020-04-27 19:02:41'),
(98, 'Paulin Palastri', 'pratiwi.jessica@wijayanti.in', '2020-04-27 19:02:41', '$2y$10$57m/JWtw0IO.RZqW11o4BOTeGaAzLoWDvyTcZEBOLxtYYXV7hy3/m', NULL, '2020-04-27 19:02:24', '2020-04-27 19:02:41'),
(99, 'Darman Sihombing', 'apuspasari@budiyanto.sch.id', '2020-04-27 19:03:03', '$2y$10$iPgeGjORBs3GONMa8Wmqn..2gMnITOApcvw5C2eFuR1B54FGSbBDa', NULL, '2020-04-27 19:02:24', '2020-04-27 19:03:03'),
(100, 'Ulva Padmasari', 'tamba.cemani@santoso.my.id', '2020-04-27 19:03:03', '$2y$10$CGMqpEm2/w0oC8vYf0dSP.ys7aJNSGlu1qGkfgcpNnWCqIB8kxZC2', NULL, '2020-04-27 19:02:25', '2020-04-27 19:03:03'),
(101, 'Sakti Rajasa', 'banawa.fujiati@yuliarti.mil.id', '2020-04-27 19:03:04', '$2y$10$qprch4bBsd3xI5gEccc3Qe6m4JnJm/u4naqnaVvizkL6Cb8oDiIMy', NULL, '2020-04-27 19:02:26', '2020-04-27 19:03:04'),
(102, 'Abyasa Budiyanto', 'baktiono06@anggriawan.info', '2020-04-27 19:03:04', '$2y$10$Z.NWKzlUObk/AXDaclLGZOHyFytoyGYG/jHYYaGCIsXrWzG7u/XR2', NULL, '2020-04-27 19:02:26', '2020-04-27 19:03:04'),
(103, 'Lala Rahmawati', 'tampubolon.victoria@usada.com', '2020-04-27 19:02:41', '$2y$10$00OAhomkBvNxVxB6bCvT1.xyObuUdMREaZP8qHOlAK/j3trHa3oSG', NULL, '2020-04-27 19:02:27', '2020-04-27 19:02:41'),
(104, 'Naradi Rajasa', 'xlestari@siregar.in', '2020-04-27 19:03:04', '$2y$10$O5TKkr2sCmJTBiC.esnbre0pXfp8mthQPfbKQ6abmpeMiM/GDr8Y.', NULL, '2020-04-27 19:02:28', '2020-04-27 19:03:04'),
(105, 'Sidiq Iswahyudi', 'fhassanah@gunawan.desa.id', '2020-04-27 19:03:05', '$2y$10$yOFhLzGpo9rHq0RIeT.tD.Mc6aWapAuWq35SRbQG0AQXaKLWW650K', NULL, '2020-04-27 19:02:29', '2020-04-27 19:03:05'),
(106, 'Viman Emil Salahudin', 'swinarsih@palastri.ac.id', '2020-04-27 19:02:41', '$2y$10$jEm4NU8PZ9JnQq7xDix93eS6Mw1NPTqklbFZc2y.lwvCCHGdbYgLu', NULL, '2020-04-27 19:02:29', '2020-04-27 19:02:41'),
(107, 'Melinda Keisha Lailasari', 'oktaviani.padmi@gmail.com', '2020-04-27 19:03:05', '$2y$10$sYs3gYktraw6aJ6uwThgxuBMdz5DSfwJmBoggqsOqWwqzqzKX83We', NULL, '2020-04-27 19:02:30', '2020-04-27 19:03:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catatans`
--
ALTER TABLE `catatans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dosen_nip_nrk_unique` (`NIP_NRK`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instansi`
--
ALTER TABLE `instansi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instansi_mahasiswa`
--
ALTER TABLE `instansi_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mahasiswa_nim_unique` (`nim`),
  ADD KEY `mahasiswa_tahun_masuk_index` (`tahun_masuk`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seminar`
--
ALTER TABLE `seminar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catatans`
--
ALTER TABLE `catatans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instansi`
--
ALTER TABLE `instansi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `instansi_mahasiswa`
--
ALTER TABLE `instansi_mahasiswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `seminar`
--
ALTER TABLE `seminar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
