-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2025 at 11:03 AM
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
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Web', '2025-08-21 05:16:23', NULL),
(2, 'Apps', '2025-08-21 05:16:29', NULL),
(3, 'Pets', '2025-08-21 07:41:35', NULL);

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
(1, '<p>Ini adalah Contact untuk bisa mengetahui alamat dan email developer.</p>', 'PPKD Jakarta Pusat', 'riyo@gmail.com', '082191922016', '2025-08-20 07:11:07', '2025-08-22 05:07:08');

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
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `portofolios`
--

INSERT INTO `portofolios` (`id`, `id_category`, `nama_project`, `link`, `description`, `image`, `created_at`, `updated_at`) VALUES
(7, 1, 'One Piece', 'http://localhost/ppkd/portofolio/?page=hero', '<p>Ini adalah web</p>', '807f07887259ddfb3a6e6575bde15d63.jpg', '2025-08-21 09:24:24', NULL),
(8, 3, 'One Piece', 'http://localhost/ppkd/portofolio/?page=portofolio', '<p>ini adalah Pets</p>', '7cf3c08016a6ea8647cbeb39fc307f1d.jpg', '2025-08-22 04:49:25', NULL),
(9, 3, 'One Piece', 'http://localhost/ppkd/portofolio/?page=hero', '<p>hallo</p>', '90052079b7580ef8e12091e2e7e96e4c.jpg', '2025-08-23 03:13:44', '2025-08-23 07:48:44');

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
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `skill1` varchar(50) NOT NULL,
  `skill2` varchar(50) NOT NULL,
  `skill3` varchar(50) NOT NULL,
  `skill4` varchar(50) NOT NULL,
  `skill5` varchar(50) NOT NULL,
  `skill6` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`id`, `title`, `content`, `skill1`, `skill2`, `skill3`, `skill4`, `skill5`, `skill6`, `created_at`, `updated_at`) VALUES
(2, 'ssss', '<p>a</p>', 'fgfsgf', 'dag', 'adfgs', 'ddsd', 'ssgf', 'dsfsdfdsfsdfs', '2025-08-23 08:43:00', '2025-08-23 08:51:55');

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
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

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
-- Indexes for table `skill`
--
ALTER TABLE `skill`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `portofolios`
--
ALTER TABLE `portofolios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
