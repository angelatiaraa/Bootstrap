-- phpMyAdmin SQL Dump
-- version 5.2.1deb3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 09, 2025 at 04:51 AM
-- Server version: 10.11.13-MariaDB-0ubuntu0.24.04.1
-- PHP Version: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user20232006`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id` int(10) NOT NULL,
  `albumpic` varchar(100) NOT NULL,
  `albums` varchar(100) NOT NULL,
  `linkspotify` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id`, `albumpic`, `albums`, `linkspotify`) VALUES
(1, 'popsad.jpg', 'Pop Song Sad World', 'https://open.spotify.com/intl-id/album/4Ik98D2jGoNL8HGIPfiOMc'),
(2, 'spunky.jpg', 'Spunky!', 'https://open.spotify.com/intl-id/album/7ahuiikgafeec341zHBq3D'),
(3, 'spower.jpg', 'Soft Power', 'https://open.spotify.com/album/5h60bfevDWgv7i0NTXRk3C'),
(4, 'pbiasa.webp', 'Coastline Paradox', 'https://open.spotify.com/intl-id/album/1h2WmPMri010tRamyfrbbP'),
(5, '369d.webp', '369 Days', 'https://open.spotify.com/album/57F9gACfYCIkHMxjHVDxbh');

-- --------------------------------------------------------

--
-- Table structure for table `chart`
--

CREATE TABLE `chart` (
  `id` int(10) NOT NULL,
  `angka` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `warna` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chart`
--

INSERT INTO `chart` (`id`, `angka`, `nama`, `warna`) VALUES
(1, 32000, 'Girl and Her Badmood', 'rgb(26, 93, 219)'),
(2, 81000, 'Grrrl Gang', 'rgb(255, 94, 46)'),
(3, 75000, 'Fazerdaze', 'rgb(95, 26, 255)'),
(4, 17000, 'Little Mascara', 'rgb(2, 155, 84)'),
(5, 21000, 'The Dare', 'rgb(221, 104, 202)');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `agree` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `nama`, `email`, `phone`, `agree`) VALUES
(12, 'test', 'test@mail.com', '+6283867549021', 1),
(13, 'test', 'test@mail.com', '+6283867549021', 1),
(14, 'tes', 'test@mail.com', '+6283867549021', 1),
(15, 'tes', 'test@mail.com', '+6283867549021', 1),
(16, 'tes', 'test@mail.com', '+6283867549021', 1),
(17, 'tes', 'test@mail.com', '+6283867549021', 1),
(23, 'Ridhok', 'ridhokganteng@gmail.com', '08123456789', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `linkname` varchar(100) NOT NULL,
  `lastup` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `deskripsi`, `image`, `link`, `linkname`, `lastup`) VALUES
(1, 'Welcoming Little Mascara', 'Girl band from Lombok Island \r\nsingle project from Desita, the drummer of The Dare', 'litmasc (1).jpg', 'https://cherrypop.id/little-mascara/', 'News on Cherrypop', 'updated 3 mins ago'),
(2, 'Pop Song Sad World', 'After \"Chani, I Believe\" and \"Pop Song\"\r\nthey put them together in one main album for 2025', 'lokaria.jpg', 'https://pophariini.com/girl-and-her-bad-mood-rilis-album-perdana-pop-songs-sad-world/', 'News on Pophariini', 'updated 2 weeks ago'),
(3, 'O, My Love', 'O, My Love their new single\r\nalso their start to US tour', 'ggang (1).jpg', 'https://gigsplay.com/grrrl-gang-siap-jalani-tur-debut-as-diawali-dengan-rilisan-o-my-love/', 'News on Gigsplay', 'updated 2 days ago');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chart`
--
ALTER TABLE `chart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `chart`
--
ALTER TABLE `chart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
