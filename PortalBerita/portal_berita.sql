-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2024 at 11:58 AM
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
-- Database: `portal_berita`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(900) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(900) NOT NULL,
  `video` varchar(900) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `image`, `video`, `category_id`) VALUES
(13, 'Apakah Utang Pinjol Bisa Kadaluarsa', 'JAKARTA - Apakah utang pinjol bisa kadaluarsa? Meskipun pihak bank baru melakukan BI Checking sepuluh tahun kemudian, apabila nasabah yang bersangkutan pernah melakukan penunggakan pembayaran cicilan, namanya akan tetap terdaftar di blacklist BI.\r\n\r\nTidak terdapat patokan pasti berapa lama, umumnya terdaftar dalam blacklist BI, kecuali nasabah yang bersangkutan benar-benar melakukan pelunasan atas seluruh tunggakan yang pernah dilakukannya', 'public/images/pinjol.jpg', 'https://youtu.be/uncieXM421E?si=nuEO61SAq7EkIda4', 5),
(14, 'Gunung Semeru 5 Kali Erupsi Beruntun hingga Pagi Ini, Status Waspada', 'JAKARTA - Gunung Semeru mengalami 5 kali erupsi sejak dini hari hingga pagi ini, Sabtu 14 Desember 2024. Gunung Semeru yang secara administratif terletak dalam dua kabupaten, yaitu Kabupaten Lumajang dan Kabupaten Malang, Provinsi Jawa Timur itu masih berstatus waspada atau level II. \r\n\r\nDari laporan Pusat Vulkanologi dan Mitigasi Bencana Geologi (PVMBG) melaporkan erupsi tercatat sejak pukul 02.39 WIB, 03.27 WIB, 03.54 WIB, 04.44 WIB, dan 06.48 WIB.\r\n\r\nPetugas Pos Pengamatan Gunung Api Ghufron Alwi melaporkan erupsi yang signifikan pagi ini terjadi pukul 04.44 WIB dengan tinggi kolom abu teramati ± 900 m di atas puncak (± 4176 m di atas permukaan laut).\r\n\r\n“Terjadi erupsi G. Semeru pada hari Sabtu, 14 Desember 2024, pukul 04:44 WIB dengan tinggi kolom abu teramati ± 900 m di atas puncak (± 4576 m di atas permukaan laut). Kolom abu teramati berwarna putih hingga kelabu dengan intensitas tebal ke arah tenggara dan selatan. Erupsi ini terekam di seismograf dengan amplitudo maksimum 22 mm dan durasi 113 detik,” kata Ghufron dalam keterangannya.', 'public/images/gunung.jpeg', 'https://youtu.be/fyVsg54E850', 8),
(16, '', '', '', '', 0),
(17, 'Mantan Pelatih Timnas Vietnam Sebut Pratama Arhan Bikin Kecurangan saat Lepaskan Lemparan ke Dalam, Begini Katanya!', 'MANTAN asisten pelatih Timnas Vietnam era Philippe Troussier, Le Minh Dung, mengatakan Pratama Arhan sering membuat kecurangan saat melepaskan lemparan ke dalam. Momen itu diungkapkan Le Minh Dung di media sosialnya, dan dibahas ulang media Vietnam, Soha.vn.\r\n\r\nSalah satu momen yang dikritisi Le Minh Dung saat Timnas Indonesia U-23 bertemu Vietnam U-23 di semifinal SEA Games 2023. Saat itu, Pratama Arhan disebut melepaskan lemparan ke dalam 15 meter dari Jarak yang seharusnya.', 'public/images/sepakbola.jpg', 'public/videos/sepakbola.mp4', 6);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(5, 'Ekonomi'),
(6, 'Olahraga'),
(7, 'Politik'),
(8, 'Bencana Alam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
