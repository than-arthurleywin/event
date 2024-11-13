-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2024 at 03:30 PM
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
-- Database: `jadwal`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(100) NOT NULL,
  `img` varchar(200) NOT NULL,
  `kategori` varchar(200) NOT NULL,
  `alamat` varchar(1000) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `hari-h` datetime NOT NULL,
  `waktu-hapus` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `img`, `kategori`, `alamat`, `deskripsi`, `hari-h`, `waktu-hapus`) VALUES
(7, 'uploads/7484141.jpg', 'provinsi', 'Kota Banjar', 'Kegiatan untuk menumbuhkan rasa kebersamaan dengan ideologi pancasila', '2024-05-24 19:05:00', '2024-05-24 19:06:00'),
(8, 'uploads/human.jpeg', 'internasional', 'zelat', 'Menumbuhkan jiwa kemanusiaan dengan membantu sesama.', '2024-05-24 20:16:00', '2024-05-31 20:16:00');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(200) NOT NULL,
  `img` varchar(255) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `tingkat` varchar(200) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `waktu_awal` datetime NOT NULL,
  `hingga` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `img`, `judul`, `tingkat`, `deskripsi`, `alamat`, `waktu_awal`, `hingga`) VALUES
(36, 'uploads/IFRC.jpeg', 'Kemanusiaan', 'kabupaten/kota', 'Mari kita membagikan makanan melalui donasi, untuk memenuhi kebutuhan bagi warga yang terkena efek genosida dari israel.', 'rafah palestine', '2024-06-02 17:48:00', '2024-08-10 17:48:00'),
(38, 'uploads/chef1.jpg', 'Japanfest', 'nasional', 'qweqe', 'qewq', '2024-06-02 21:50:00', '2024-06-02 21:51:00');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_pelajaran`
--

CREATE TABLE `jadwal_pelajaran` (
  `id` int(11) NOT NULL,
  `nama_hari` varchar(255) NOT NULL,
  `nama_mata_pelajaran` varchar(255) NOT NULL,
  `durasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jadwal_pelajaran`
--

INSERT INTO `jadwal_pelajaran` (`id`, `nama_hari`, `nama_mata_pelajaran`, `durasi`) VALUES
(10, 'Senin', 'MTK', 240),
(11, 'Selasa', 'Pkn', 100);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123'),
(3, 'restucbl', 'cabulgay');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal_pelajaran`
--
ALTER TABLE `jadwal_pelajaran`
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
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `jadwal_pelajaran`
--
ALTER TABLE `jadwal_pelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
