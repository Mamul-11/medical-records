-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2021 at 02:51 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pks1`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_09_30_102014_create_ranaps_table', 1),
(6, '2021_09_30_102334_create_ragads_table', 1),
(7, '2021_09_30_102407_create_rajals_table', 1),
(8, '2021_09_30_102519_create_polis_table', 1),
(9, '2021_10_04_140501_create_pasiens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pasiens`
--

CREATE TABLE `pasiens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_rm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `faskes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_kis` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_kis` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pendidikan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penyakit_sendiri` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penyakit_keluarga` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alergi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pengobatan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pasiens`
--

INSERT INTO `pasiens` (`id`, `nik`, `no_rm`, `nama`, `tgl_lahir`, `kelamin`, `agama`, `alamat`, `faskes`, `no_kis`, `status_kis`, `pendidikan`, `pekerjaan`, `kk`, `telp`, `penyakit_sendiri`, `penyakit_keluarga`, `alergi`, `pengobatan`, `created_at`, `updated_at`) VALUES
(1, '8943586809602', '000025', 'Jelita Unjani Astuti', '2004-07-12', 'Perempuan', 'Lainya', 'Ki. Yos Sudarso No. 159, Parepare 55136, NTT', 'BPJS', '5746217441312', 'Non PBI', 'SMP', 'Satpam', 'Puti Ghaliyati Susanti S.Gz', '+994678021965', 'Diabetes', 'Jantung', 'minuman', 'Tidak', '2021-12-04 06:40:20', '2021-12-04 06:40:20'),
(2, '9380359629026', '000024', 'Yance Zaenab Oktaviani M.Pd', '1988-05-24', 'Laki-laki', 'Kristen', 'Jln. Bacang No. 638, Banda Aceh 28481, Jateng', 'BPJS', '2841536676977', 'Non PBI', 'SMP', 'Pramugari', 'Laksana Mansur', '+630507287623', 'Jantung', 'Stroke', 'obat', 'Tidak', '2021-12-04 06:40:20', '2021-12-04 06:40:20'),
(3, '0189224214382', '000023', 'Gandewa Cahyo Kurniawan S.Gz', '2011-06-22', 'Laki-laki', 'Buddha', 'Gg. Antapani Lama No. 154, Pekalongan 53811, Sumut', 'faskes lainya', '9173407379332', 'PBI', 'S1', 'Pelaut', 'Unggul Megantara M.Kom.', '+22944241421', 'Jantung', 'Jantung', 'makanan', 'Tidak', '2021-12-04 06:40:20', '2021-12-04 06:40:20'),
(4, '3554439581743', '000022', 'Atmaja Mansur', '2008-05-15', 'Perempuan', 'Hindu', 'Dk. Ters. Buah Batu No. 121, Kupang 41213, Jabar', 'faskes lainya', '7335773901233', 'Non PBI', 'SMA', 'Karyawan Swasta', 'Nrima Samosir M.Pd', '+206062135682', 'Stroke', 'Stroke', 'obat', 'Ya', '2021-12-04 06:40:20', '2021-12-04 06:40:20'),
(5, '4966077306978', '000021', 'Icha Aryani', '2016-07-12', 'Perempuan', 'Islam', 'Jln. Rumah Sakit No. 175, Depok 75779, NTB', 'faskes lainya', '5523929986286', 'PBI', 'S2', 'Hakim', 'Juli Nasyiah', '+317073026027', 'Stroke', 'Jantung', 'minuman', 'Tidak', '2021-12-04 06:40:20', '2021-12-04 06:40:20'),
(6, '8652723212788', '000020', 'Rizki Wibowo', '1973-12-10', 'Laki-laki', 'Hindu', 'Ds. Yos Sudarso No. 441, Kupang 22715, Jatim', 'BPJS', '7118344859722', 'PBI', 'SMA', 'Penata Rambut', 'Zulaikha Yance Hariyah', '+40664670524', 'Diabetes', 'Diabetes', 'obat', 'Ya', '2021-12-04 06:40:20', '2021-12-04 06:40:20'),
(7, '2977994326041', '000019', 'Ratna Ellis Nurdiyanti', '1988-08-28', 'Laki-laki', 'Buddha', 'Ds. Wora Wari No. 210, Lubuklinggau 21755, Jateng', 'BPJS', '8655808715379', 'PBI', 'S1', 'Pramugari', 'Ajimin Prayoga', '+994537323203', 'Stroke', 'Stroke', 'obat', 'Tidak', '2021-12-04 06:40:20', '2021-12-04 06:40:20'),
(8, '3889606218164', '000018', 'Ajeng Kiandra Laksita', '1978-08-27', 'Laki-laki', 'Buddha', 'Psr. R.M. Said No. 734, Tual 64971, Banten', 'faskes lainya', '6229816143247', 'PBI', 'SMP', 'Tukang Listrik', 'Ozy Gunarto', '+624081849680', 'Jantung', 'Diabetes', 'minuman', 'Ya', '2021-12-04 06:40:20', '2021-12-04 06:40:20'),
(9, '9572304008572', '000017', 'Janet Yulianti', '2011-08-13', 'Perempuan', 'Buddha', 'Jr. Umalas No. 885, Tangerang 97331, Riau', 'BPJS', '4940547217360', 'Non PBI', 'SMA', 'Biarawati', 'Samsul Iswahyudi', '+6883833066', 'Jantung', 'Jantung', 'minuman', 'Tidak', '2021-12-04 06:40:20', '2021-12-04 06:40:20'),
(10, '7729826302767', '000016', 'Kenari Nashiruddin', '1986-09-15', 'Perempuan', 'Islam', 'Dk. Urip Sumoharjo No. 559, Batu 95832, Pabar', 'faskes lainya', '2509731418648', 'Non PBI', 'SMA', 'Mengurus Rumah Tangga', 'Gabriella Wahyuni S.Kom', '+85333450925', 'Stroke', 'Jantung', 'makanan', 'Ya', '2021-12-04 06:40:20', '2021-12-04 06:40:20'),
(11, '9912015219351', '000015', 'Raihan Mustofa', '1978-07-13', 'Laki-laki', 'Lainya', 'Psr. Mahakam No. 198, Gunungsitoli 44498, Bali', 'faskes lainya', '1747466252053', 'PBI', 'SMA', 'Penata Busana', 'Ida Lalita Wijayanti', '+2396708228', 'Diabetes', 'Jantung', 'minuman', 'Tidak', '2021-12-04 06:40:20', '2021-12-04 06:40:20'),
(12, '7944036226162', '000014', 'Hendri Hidayat', '2016-05-07', 'Perempuan', 'Islam', 'Dk. Gambang No. 861, Kediri 41233, Kaltim', 'BPJS', '1690836668824', 'PBI', 'SMP', 'Arsitek', 'Garan Saefullah', '+221665108293', 'Diabetes', 'Jantung', 'obat', 'Tidak', '2021-12-04 06:40:20', '2021-12-04 06:40:20'),
(13, '0567127982090', '000013', 'Ana Pertiwi', '1977-01-31', 'Perempuan', 'Kristen', 'Kpg. Bah Jaya No. 253, Padang 99593, Riau', 'faskes lainya', '3183472870436', 'PBI', 'S1', 'Penyiar Televisi', 'Mahmud Napitupulu', '+265634323930', 'Jantung', 'Stroke', 'minuman', 'Ya', '2021-12-04 06:40:20', '2021-12-04 06:40:20'),
(14, '6129763692326', '000012', 'Dian Mandasari', '2008-12-24', 'Laki-laki', 'Hindu', 'Ki. Lumban Tobing No. 889, Sibolga 95307, Kaltara', 'BPJS', '6687728063586', 'PBI', 'S1', 'Pelajar / Mahasiswa', 'Galuh Prasetya', '+672751387', 'Diabetes', 'Diabetes', 'makanan', 'Ya', '2021-12-04 06:40:20', '2021-12-04 06:40:20'),
(15, '1260900970672', '000011', 'Cahyo Sabri Setiawan S.E.I', '2014-10-07', 'Laki-laki', 'Kristen', 'Psr. Suryo Pranoto No. 464, Kupang 51861, Maluku', 'faskes lainya', '7185816263970', 'Non PBI', 'S1', 'Penata Busana', 'Kamaria Silvia Lestari M.Farm', '+351515858590', 'Stroke', 'Diabetes', 'obat', 'Ya', '2021-12-04 06:40:20', '2021-12-04 06:40:20'),
(16, '4376325358407', '000010', 'Patricia Puspita', '1986-05-25', 'Perempuan', 'Lainya', 'Psr. Suryo Pranoto No. 274, Bekasi 15369, Sulteng', 'faskes lainya', '5572331202474', 'PBI', 'SMP', 'Pastor', 'Dacin Dabukke', '+996944645095', 'Jantung', 'Diabetes', 'minuman', 'Tidak', '2021-12-04 06:40:20', '2021-12-04 06:40:20'),
(17, '5544885274949', '000009', 'Lamar Utama M.TI.', '2012-01-22', 'Perempuan', 'Kristen', 'Ds. Babah No. 529, Kendari 90526, Sulut', 'faskes lainya', '9878560074900', 'PBI', 'SMP', 'Belum / Tidak Bekerja', 'Adinata Najib Jailani S.Pt', '+59946106746', 'Diabetes', 'Diabetes', 'obat', 'Ya', '2021-12-04 06:40:20', '2021-12-04 06:40:20'),
(18, '9023242158032', '000008', 'Cinthia Winarsih', '1990-06-21', 'Perempuan', 'Kristen', 'Ds. Bah Jaya No. 855, Madiun 25054, Sultra', 'faskes lainya', '4137479923410', 'PBI', 'SD', 'Karyawan BUMN', 'Salimah Maryati', '+2974809272', 'Diabetes', 'Jantung', 'makanan', 'Ya', '2021-12-04 06:40:20', '2021-12-04 06:40:20'),
(19, '6753225358144', '000007', 'Harjasa Rahmat Wibowo S.Ked', '1998-01-02', 'Perempuan', 'Islam', 'Gg. Bah Jaya No. 812, Bengkulu 11118, Jambi', 'faskes lainya', '3025549860258', 'Non PBI', 'SD', 'Arsitek', 'Jail Nashiruddin S.Gz', '+59934056676', 'Stroke', 'Jantung', 'minuman', 'Tidak', '2021-12-04 06:40:20', '2021-12-04 06:40:20'),
(20, '7247361928447', '000006', 'Wage Wisnu Salahudin', '2008-07-12', 'Perempuan', 'Kristen', 'Psr. Bhayangkara No. 25, Blitar 76107, Sulut', 'BPJS', '4011162185155', 'Non PBI', 'SMP', 'Atlet', 'Bella Dian Nasyiah', '+387906917688', 'Jantung', 'Stroke', 'makanan', 'Tidak', '2021-12-04 06:40:20', '2021-12-04 06:40:20'),
(21, '7186713418499', '000005', 'Hari Hutapea', '1981-12-27', 'Laki-laki', 'Buddha', 'Gg. Cemara No. 106, Surakarta 83967, DKI', 'BPJS', '2212510086318', 'Non PBI', 'S1', 'Buruh Peternakan', 'Galih Raharja Budiman', '+85330729311', 'Diabetes', 'Diabetes', 'minuman', 'Ya', '2021-12-04 06:40:20', '2021-12-04 06:40:20'),
(22, '0438331623286', '000004', 'Yessi Kuswandari', '1985-05-22', 'Laki-laki', 'Kristen', 'Gg. Basmol Raya No. 938, Bima 86581, Sumsel', 'faskes lainya', '6074049828416', 'Non PBI', 'SD', 'Programmer', 'Tari Paulin Lailasari S.Gz', '+866277105165', 'Diabetes', 'Jantung', 'obat', 'Ya', '2021-12-04 06:40:20', '2021-12-04 06:40:20'),
(23, '2714287732822', '000003', 'Amalia Tari Wulandari S.E.', '1988-03-10', 'Perempuan', 'Islam', 'Dk. Kyai Mojo No. 572, Tangerang 41588, Kepri', 'BPJS', '3843031440445', 'Non PBI', 'SMP', 'Desainer', 'Gilang Megantara S.Gz', '+260169439974', 'Stroke', 'Stroke', 'obat', 'Tidak', '2021-12-04 06:40:20', '2021-12-04 06:40:20'),
(24, '7878451462949', '000002', 'Jefri Wijaya', '1973-03-11', 'Perempuan', 'Islam', 'Psr. Bata Putih No. 173, Tidore Kepulauan 82955, Aceh', 'BPJS', '2450434819681', 'PBI', 'S2', 'Pedagang', 'Yuni Kusmawati', '+6836197715', 'Diabetes', 'Diabetes', 'minuman', 'Ya', '2021-12-04 06:40:20', '2021-12-04 06:40:20'),
(25, '8643321692230', '000001', 'Tami Bella Uyainah M.Kom.', '2010-04-20', 'Perempuan', 'Hindu', 'Kpg. Baranang No. 748, Tarakan 61579, Aceh', 'BPJS', '8343817633593', 'PBI', 'S2', 'Mengurus Rumah Tangga', 'Syahrini Rika Permata M.Pd', '+383202983357', 'Jantung', 'Stroke', 'makanan', 'Ya', '2021-12-04 06:40:20', '2021-12-04 06:40:20'),
(27, '1234567890123456', '000027', 'Arjuna Giripurnomo', '1992-06-18', 'Laki-laki', 'Islam', 'Desa Kemranjen RT/RW 11/12 Kemranjen Banyumas', NULL, NULL, NULL, 'SMA', 'Buruh', NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-04 06:47:56', '2021-12-04 06:47:56');

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `polis`
--

CREATE TABLE `polis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `polis`
--

INSERT INTO `polis` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'RPU', '2021-12-04 06:40:20', '2021-12-04 06:40:20'),
(2, 'RGM', '2021-12-04 06:40:20', '2021-12-04 06:40:20'),
(3, 'MTBS', '2021-12-04 06:40:20', '2021-12-04 06:40:20'),
(4, 'KIA', '2021-12-04 06:40:20', '2021-12-04 06:40:20');

-- --------------------------------------------------------

--
-- Table structure for table `ragads`
--

CREATE TABLE `ragads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pasien_id` bigint(20) UNSIGNED NOT NULL,
  `user1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `tekanan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keluhan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `diagnosa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jaminan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `terapi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tindakan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rujuk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rs_rujuk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `monitoring_rujuk` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rajals`
--

CREATE TABLE `rajals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pasien_id` bigint(20) UNSIGNED NOT NULL,
  `user1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `poli_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `tekanan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keluhan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diagnosa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jaminan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `terapi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lab` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rokok` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ranaps`
--

CREATE TABLE `ranaps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pasien_id` bigint(20) UNSIGNED NOT NULL,
  `user1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keluhan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `diagnosa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `terapi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jaminan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_keluar` date DEFAULT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `biaya` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ket` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` tinyint(1) NOT NULL DEFAULT 1,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `nik`, `level`, `email`, `email_verified_at`, `password`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Rekam Medis', '0000000000000001', 0, 'admin@gmail.com', '2021-12-04 06:40:19', '$2y$10$GB38OQCBjcDuj7j0TsdRVOw0tvcoG7Hi8HyevStf/tf9RIX3wNRS2', NULL, NULL, '2021-12-04 06:40:20', '2021-12-04 06:40:20'),
(2, 'Perawat 1', '0000000000000010', 1, 'perawat1@gmail.com', NULL, '$2y$10$N7xXGD.oPrrI//Nh77mt5ujLIF42JslWpafjn0VGsgYp64D.qFyEq', NULL, NULL, '2021-12-04 06:50:09', '2021-12-04 06:50:09'),
(3, 'perawat2', '0000000000000020', 1, 'perawat2@gmail.com', NULL, '$2y$10$iwpFs2u7Ne.U/bNj6vQ/P.qe5swgUmB6SkmWiJoMjAvCqIW857WKK', NULL, NULL, '2021-12-04 06:50:34', '2021-12-04 06:50:34'),
(4, 'perawat3', '0000000000000030', 1, 'perawat3@gmail.com', NULL, '$2y$10$qk/ouYlP1VJd6UpFUBcioexjeP7bNS67Cb5/UMM8a/7Arbenb4wHy', NULL, NULL, '2021-12-04 06:50:59', '2021-12-04 06:50:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasiens`
--
ALTER TABLE `pasiens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pasiens_nik_unique` (`nik`),
  ADD UNIQUE KEY `pasiens_no_rm_unique` (`no_rm`),
  ADD UNIQUE KEY `pasiens_no_kis_unique` (`no_kis`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `polis`
--
ALTER TABLE `polis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ragads`
--
ALTER TABLE `ragads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rajals`
--
ALTER TABLE `rajals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ranaps`
--
ALTER TABLE `ranaps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_nik_unique` (`nik`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pasiens`
--
ALTER TABLE `pasiens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `polis`
--
ALTER TABLE `polis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ragads`
--
ALTER TABLE `ragads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rajals`
--
ALTER TABLE `rajals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ranaps`
--
ALTER TABLE `ranaps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
