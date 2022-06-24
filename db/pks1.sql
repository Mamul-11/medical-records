-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2022 at 03:48 AM
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
(1, '7881533171606', '645858', 'Gangsar Darimin Zulkarnain', '1971-04-30', 'Laki-laki', 'Hindu', 'Gg. Setia Budi No. 284, Bandar Lampung 99276, NTB', 'faskes lainya', '8911268331721', 'Non PBI', 'S1', 'Tukang Kayu', 'Saka Maulana', '+920728297374', 'Jantung', 'Diabetes', 'makanan', 'Tidak', '2022-02-16 01:21:15', '2022-02-16 01:21:15'),
(2, '3882260846726', '656662', 'Kusuma Prakasa S.Psi', '1992-04-23', 'Laki-laki', 'Buddha', 'Jr. Sampangan No. 244, Bandung 77934, Banten', 'BPJS', '0885087727437', 'PBI', 'S1', 'Pendeta', 'Gadang Simbolon', '+261612319545', 'Jantung', 'Jantung', 'makanan', 'Ya', '2022-02-16 01:21:15', '2022-02-16 01:21:15'),
(3, '1672149785632', '301109', 'Ira Nurdiyanti', '1984-05-07', 'Laki-laki', 'Buddha', 'Jr. Sutarjo No. 839, Padangsidempuan 52901, DIY', 'faskes lainya', '7904484752180', 'Non PBI', 'S2', 'Tukang Cukur', 'Oman Siregar S.Pd', '+50641044535', 'Jantung', 'Diabetes', 'obat', 'Tidak', '2022-02-16 01:21:15', '2022-02-16 01:21:15'),
(4, '2950014424731', '598289', 'Lalita Pia Hariyah', '1971-09-05', 'Laki-laki', 'Hindu', 'Ds. Dago No. 144, Lubuklinggau 90522, Kepri', 'faskes lainya', '8661230137770', 'Non PBI', 'SD', 'Penambang', 'Tiara Vanya Novitasari M.M.', '+80871288343', 'Jantung', 'Stroke', 'obat', 'Tidak', '2022-02-16 01:21:15', '2022-02-16 01:21:15'),
(5, '4251051697546', '512329', 'Halim Caturangga Tampubolon M.M.', '1990-05-31', 'Laki-laki', 'Kristen', 'Jln. Jayawijaya No. 948, Singkawang 70211, Kalteng', 'BPJS', '6190054670896', 'PBI', 'SMA', 'Wiraswasta', 'Garang Anggriawan', '+50044825', 'Diabetes', 'Diabetes', 'makanan', 'Tidak', '2022-02-16 01:21:15', '2022-02-16 01:21:15'),
(6, '0503267472504', '604117', 'Yulia Ophelia Kuswandari', '1991-05-22', 'Laki-laki', 'Kristen', 'Jr. R.M. Said No. 729, Mojokerto 66526, Malut', 'BPJS', '1425314673897', 'PBI', 'S2', 'Hakim', 'Edi Jarwadi Firmansyah S.H.', '+33689723234', 'Jantung', 'Jantung', 'minuman', 'Ya', '2022-02-16 01:21:15', '2022-02-16 01:21:15'),
(7, '6156367509033', '316539', 'Baktiadi Teddy Wibisono S.Ked', '1999-04-08', 'Laki-laki', 'Kristen', 'Ki. Basuki Rahmat  No. 988, Tanjung Pinang 24770, Sumsel', 'BPJS', '8947310962053', 'PBI', 'SD', 'Pedagang', 'Septi Permata', '+38633853218', 'Stroke', 'Jantung', 'obat', 'Tidak', '2022-02-16 01:21:15', '2022-02-16 01:21:15'),
(8, '0807885223984', '882632', 'Galak Sihotang', '1982-05-29', 'Perempuan', 'Islam', 'Jln. Abdul No. 912, Tarakan 88651, NTB', 'BPJS', '6711462575820', 'Non PBI', 'SMA', 'Karyawan Honorer', 'Wirda Hassanah', '+97512110181', 'Diabetes', 'Stroke', 'makanan', 'Tidak', '2022-02-16 01:21:15', '2022-02-16 01:21:15'),
(9, '6301720096564', '306812', 'Zaenab Mayasari', '1972-02-02', 'Perempuan', 'Buddha', 'Dk. Bambu No. 954, Tanjung Pinang 57278, Kaltim', 'BPJS', '5660043466034', 'PBI', 'S2', 'Penambang', 'Chelsea Safitri S.Pd', '+68667639505', 'Jantung', 'Stroke', 'minuman', 'Tidak', '2022-02-16 01:21:15', '2022-02-16 01:21:15'),
(10, '8609999353883', '328456', 'Farhunnisa Siti Nasyiah', '2013-03-15', 'Laki-laki', 'Islam', 'Jr. Adisumarmo No. 657, Tual 52525, Sulbar', 'BPJS', '2104177389348', 'Non PBI', 'S1', 'Penyelam', 'Lutfan Sitompul', '+3532884048852', 'Jantung', 'Diabetes', 'minuman', 'Ya', '2022-02-16 01:21:15', '2022-02-16 01:21:15'),
(11, '6021397545122', '996441', 'Hairyanto Lutfan Wibisono', '1990-09-18', 'Perempuan', 'Hindu', 'Kpg. Bahagia No. 873, Surabaya 21816, Kepri', 'BPJS', '2877835947450', 'PBI', 'S1', 'Karyawan BUMD', 'Budi Wibowo', '+689928723043', 'Diabetes', 'Stroke', 'minuman', 'Ya', '2022-02-16 01:21:15', '2022-02-16 01:21:15'),
(12, '2168394312988', '115406', 'Ismail Permadi', '1990-10-09', 'Laki-laki', 'Islam', 'Psr. Sudiarto No. 295, Ternate 55049, Sumut', 'faskes lainya', '9802984517549', 'Non PBI', 'S2', 'Pensiunan', 'Tami Olivia Lestari', '+5954554685136', 'Stroke', 'Diabetes', 'obat', 'Ya', '2022-02-16 01:21:15', '2022-02-16 01:21:15'),
(13, '0595220764306', '405152', 'Paris Yuliarti', '1997-07-03', 'Laki-laki', 'Hindu', 'Gg. Lumban Tobing No. 346, Administrasi Jakarta Barat 14730, Papua', 'faskes lainya', '5648988502979', 'Non PBI', 'SMP', 'Wiraswasta', 'Endah Permata', '+382668288098', 'Stroke', 'Stroke', 'minuman', 'Ya', '2022-02-16 01:21:15', '2022-02-16 01:21:15'),
(14, '8768661719158', '907880', 'Oman Narpati', '1970-08-21', 'Laki-laki', 'Buddha', 'Ki. M.T. Haryono No. 71, Metro 31958, Jambi', 'faskes lainya', '2401279276176', 'PBI', 'SD', 'Pramusaji', 'Ira Yuliana Susanti S.IP', '+94688419054', 'Jantung', 'Stroke', 'makanan', 'Tidak', '2022-02-16 01:21:15', '2022-02-16 01:21:15'),
(15, '5628925721505', '409005', 'Titi Uyainah S.H.', '1980-02-05', 'Perempuan', 'Hindu', 'Jln. Cikutra Barat No. 150, Sukabumi 66037, Bali', 'BPJS', '0469622353041', 'PBI', 'SD', 'Tukang Batu', 'Pia Raina Permata M.TI.', '+37348541778', 'Jantung', 'Jantung', 'obat', 'Ya', '2022-02-16 01:21:15', '2022-02-16 01:21:15'),
(16, '3073584600132', '798395', 'Gabriella Hassanah', '1991-07-27', 'Perempuan', 'Lainya', 'Gg. Baja No. 544, Malang 89764, Jambi', 'BPJS', '9630953145447', 'PBI', 'SD', 'Pegawai Negeri Sipil (PNS)', 'Jelita Widiastuti', '+244716975022', 'Stroke', 'Stroke', 'minuman', 'Ya', '2022-02-16 01:21:15', '2022-02-16 01:21:15'),
(17, '5646505923303', '941579', 'Iriana Lestari S.Pd', '2015-08-24', 'Perempuan', 'Buddha', 'Ki. Dr. Junjunan No. 24, Jayapura 96448, Sultra', 'faskes lainya', '9306241753569', 'PBI', 'SMP', 'Belum / Tidak Bekerja', 'Nurul Rahmawati', '+2692033811', 'Diabetes', 'Diabetes', 'minuman', 'Ya', '2022-02-16 01:21:15', '2022-02-16 01:21:15'),
(18, '2808532655027', '526655', 'Gadang Jumadi Pranowo S.T.', '1987-08-12', 'Perempuan', 'Islam', 'Gg. Kebangkitan Nasional No. 440, Gunungsitoli 84788, Lampung', 'faskes lainya', '1779337385153', 'PBI', 'SMA', 'Konstruksi', 'Setya Kenzie Tamba', '+591355646370', 'Jantung', 'Stroke', 'obat', 'Tidak', '2022-02-16 01:21:15', '2022-02-16 01:21:15'),
(19, '4624725296818', '169052', 'Calista Najwa Rahimah', '1998-03-13', 'Perempuan', 'Buddha', 'Ds. Rajawali Barat No. 914, Sungai Penuh 36404, Gorontalo', 'faskes lainya', '5660274636366', 'PBI', 'SD', 'Kepolisian RI (POLRI)', 'Rahmat Siregar', '+33983430618', 'Stroke', 'Jantung', 'minuman', 'Tidak', '2022-02-16 01:21:15', '2022-02-16 01:21:15'),
(20, '0055633290681', '402015', 'Tiara Tami Rahimah', '1986-01-29', 'Laki-laki', 'Buddha', 'Dk. Salatiga No. 614, Bukittinggi 91052, Kalteng', 'BPJS', '1304893098885', 'Non PBI', 'SMP', 'Perawat', 'Gading Adriansyah', '+878631154176133', 'Jantung', 'Jantung', 'minuman', 'Tidak', '2022-02-16 01:21:15', '2022-02-16 01:21:15'),
(21, '0589240530030', '596912', 'Taswir Suwarno', '2004-09-26', 'Laki-laki', 'Hindu', 'Jr. Ikan No. 328, Dumai 25579, Maluku', 'BPJS', '3951784405468', 'Non PBI', 'S1', 'Kondektur', 'Hairyanto Sitompul', '+25355960398', 'Diabetes', 'Stroke', 'obat', 'Ya', '2022-02-16 01:21:15', '2022-02-16 01:21:15'),
(22, '0758387184346', '965834', 'Farah Haryanti', '1999-09-20', 'Perempuan', 'Kristen', 'Gg. Babah No. 926, Sukabumi 70158, Jambi', 'BPJS', '8858940871808', 'PBI', 'SMP', 'Kepolisian RI (POLRI)', 'Heryanto Kuswoyo', '+67071792913', 'Jantung', 'Stroke', 'obat', 'Tidak', '2022-02-16 01:21:15', '2022-02-16 01:21:15'),
(23, '5067507676861', '136677', 'Paramita Wirda Andriani', '2015-05-07', 'Perempuan', 'Hindu', 'Jr. Peta No. 863, Binjai 41923, NTB', 'faskes lainya', '6557339793509', 'Non PBI', 'S2', 'Jaksa', 'Fitria Hasanah', '+596568407769', 'Diabetes', 'Stroke', 'minuman', 'Tidak', '2022-02-16 01:21:15', '2022-02-16 01:21:15'),
(24, '7410111057319', '334237', 'Jumadi Najam Budiman S.T.', '1972-03-27', 'Laki-laki', 'Lainya', 'Ds. Kartini No. 418, Kendari 54793, Banten', 'BPJS', '1188135530110', 'Non PBI', 'S1', 'Tukang Las / Pandai Besi', 'Bagus Hutasoit', '+812691726297', 'Jantung', 'Diabetes', 'minuman', 'Tidak', '2022-02-16 01:21:15', '2022-02-16 01:21:15'),
(25, '1535833412050', '933858', 'Queen Mardhiyah S.Farm', '1991-09-18', 'Perempuan', 'Hindu', 'Jr. Bata Putih No. 191, Bau-Bau 75665, Jatim', 'BPJS', '0928211089419', 'Non PBI', 'SMP', 'Nelayan / Perikanan', 'Jelita Raina Purnawati', '+9762291464154', 'Diabetes', 'Diabetes', 'obat', 'Tidak', '2022-02-16 01:21:15', '2022-02-16 01:21:15');

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
(1, 'RPU', '2022-02-16 01:21:14', '2022-02-16 01:21:14'),
(2, 'RGM', '2022-02-16 01:21:14', '2022-02-16 01:21:14'),
(3, 'MTBS', '2022-02-16 01:21:14', '2022-02-16 01:21:14'),
(4, 'KIA', '2022-02-16 01:21:14', '2022-02-16 01:21:14');

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

--
-- Dumping data for table `rajals`
--

INSERT INTO `rajals` (`id`, `pasien_id`, `user1`, `user2`, `user3`, `poli_id`, `tgl_masuk`, `tekanan`, `bb`, `tb`, `lp`, `keluhan`, `diagnosa`, `jaminan`, `terapi`, `kode`, `lab`, `rokok`, `created_at`, `updated_at`) VALUES
(1, 1, 'Perawat 1', NULL, NULL, '1', '2022-04-07', '140/80', '65', '170', '90', 'aaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaa', 'BPJS', 'aaaaaaa', NULL, NULL, 'Tidak', '2022-04-06 18:02:33', '2022-04-06 18:02:33'),
(2, 1, 'Perawat 1', NULL, NULL, '1', '2022-04-16', '140/80 S:130', '65', '170', '90', 'aaaaaaaaa', 'aaaaaaaaaaa', 'BPJS', 'aaaaaaaa', NULL, NULL, 'Tidak', '2022-04-16 00:23:12', '2022-04-16 00:23:12');

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

--
-- Dumping data for table `ranaps`
--

INSERT INTO `ranaps` (`id`, `pasien_id`, `user1`, `user2`, `user3`, `keluhan`, `diagnosa`, `terapi`, `jaminan`, `tgl_keluar`, `tgl_masuk`, `biaya`, `ket`, `created_at`, `updated_at`) VALUES
(1, 1, 'Perawat 1', NULL, NULL, 'aaaaaaaaa', 'aaaaaa', 'aaaaaaa', 'BPJS', '2022-02-03', '2022-02-01', '300000', 'Sakit', '2022-02-16 01:23:29', '2022-02-16 01:23:29'),
(2, 1, 'Perawat 2', NULL, NULL, 'aaaaaaaaaaa', 'aaaaaaaaaaaaa', 'aaaaaaaaa', 'BPJS', '2022-04-22', '2022-04-22', '300000', 'Sakit', '2022-04-21 19:51:40', '2022-04-21 19:51:40');

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
(1, 'Admin Rekam Medis', '0000000000000001', 0, 'admin@gmail.com', '2022-02-16 01:21:14', '$2y$10$RNWlCZRePmsEsdeZ76n0NeuryjVXtsNMifd/Gj3bhG8olfiPBWCZO', NULL, NULL, '2022-02-16 01:21:14', '2022-02-16 01:21:14'),
(2, 'Perawat 1', '0000000000000010', 1, 'perawat1@gmail.com', NULL, '$2y$10$Y8CzV81gEfQpxts6twaVb.bFpbaGkHW5Edg6YYgj.xed..16zMC16', NULL, NULL, '2022-02-16 01:22:14', '2022-02-16 01:22:14'),
(3, 'Perawat 2', '0000000000000020', 1, 'perawat2@gmail.com', NULL, '$2y$10$skLyiiYTjQCAQo4Isq5f/eZpwpg34QzoBOV7OuOyWtnSxjFrR.yH2', NULL, NULL, '2022-04-06 20:38:33', '2022-04-06 20:38:33'),
(5, 'ad', '0987654321098765', 1, 'perawat00@gmail.com', NULL, '$2y$10$qYOUHLZq3oey/08ADZaVcuEgOPFwNtRvhQJ6KtYW9jNkZxMfomwRu', NULL, NULL, '2022-06-01 03:23:54', '2022-06-01 03:23:54'),
(6, 'Perawat 99', '0000000098765432', 1, 'perawat99@gmail.com', NULL, '$2y$10$CotgrYvXD4i32tsxc7ntzeC9KhKVzzSSmtZVLUDAJWBMNebDBoN9O', NULL, NULL, '2022-06-01 03:24:21', '2022-06-01 03:24:21');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ranaps`
--
ALTER TABLE `ranaps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
