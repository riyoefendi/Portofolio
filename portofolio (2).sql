-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2025 at 07:26 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portofolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `birthday` text NOT NULL,
  `website` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `age` varchar(50) NOT NULL,
  `degree` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `freelance` varchar(50) NOT NULL,
  `is_active` tinyint(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `content`, `image`, `birthday`, `website`, `city`, `phone`, `age`, `degree`, `email`, `freelance`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'About', '<p class=\"MsoNormal\" style=\"margin-top:4.05pt;mso-pagination:none\"><span style=\"font-family:\"Trebuchet MS\",sans-serif;mso-fareast-font-family:\"Trebuchet MS\";\r\nmso-bidi-font-family:\"Trebuchet MS\";color:#262626\">Saya lulusan dari\r\nUniversitas Nasional dengan jurusan Sistem Informasi. Minat saya pada bidang\r\ninformasi dan teknologi serta administrasi. Saya mempunyai pengalaman analisa\r\nkeuangan perorangan maupun perusahaan dalam rangka pembiayaan kredit dengan\r\nmenggunakan sistem dari perusahaan dan saya memiliki pengalaman stok barang,\r\nserta melakukan pengembangan di bidang teknologi informasi.<o:p></o:p></span></p>', '36c1795accb3bbc9cf01183ea64d8ce7.jpg', '2025-08-05', 'https://www.linkedin.com/in/riyo-efendi-a59115216/', 'Jakarta Selatan', '082191922016', '27', 'Sistem Informasi', 'riyo@gmail.com', 'Web Developer', 1, '2025-08-18 12:04:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(NULL, 'Web', '2025-08-21 05:16:23', NULL),
(NULL, 'Apps', '2025-08-21 05:16:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `content` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `content`, `lokasi`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, '<p>adasdasdsadasdsa</p>', 'dsadas', 'riyo@gmail.com', '089616682955', '2025-08-20 07:11:07', '2025-08-20 15:00:31');

-- --------------------------------------------------------

--
-- Table structure for table `portofolios`
--

CREATE TABLE `portofolios` (
  `id` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `nama_project` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `id` int(11) NOT NULL,
  `education` varchar(100) NOT NULL,
  `tahun_education` varchar(100) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `isi_prodi` text NOT NULL,
  `pengalaman` varchar(50) NOT NULL,
  `tahun_pengalaman` varchar(50) NOT NULL,
  `lokasi_kerja` varchar(50) NOT NULL,
  `jobdesk` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`id`, `education`, `tahun_education`, `prodi`, `isi_prodi`, `pengalaman`, `tahun_pengalaman`, `lokasi_kerja`, `jobdesk`, `created_at`, `updated_at`) VALUES
(1, 'kjkljk', '212', 'kjkljklK', 'kljkljkl', 'ljklj', '2222', 'kkljL', 'jhjkhjkhjk', '2025-08-20 04:55:00', '2025-08-20 07:19:51');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Riyo Efendi', 'riyo@gmail.com', 'efendi', '2025-08-18 02:02:47', '2025-08-18 02:02:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portofolios`
--
ALTER TABLE `portofolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `portofolios`
--
ALTER TABLE `portofolios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
