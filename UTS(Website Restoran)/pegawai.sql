-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2022 at 04:32 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pegawai`
--

-- --------------------------------------------------------

--
-- Table structure for table `menumakanan`
--

CREATE TABLE `menumakanan` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `menu` varchar(100) NOT NULL,
  `harga` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menumakanan`
--

INSERT INTO `menumakanan` (`id`, `gambar`, `menu`, `harga`) VALUES
(213427, '618925a0b3bce.jpeg', 'Gulai Kepala Kakap', '30.000'),
(213428, '618925d127017.jpeg', 'Gulai Kambing', '20.000'),
(213429, '618925e68574f.jpeg', 'Ayam Geprek', '12.000'),
(213430, '6189263053f32.jpeg', 'Spageti', '20.000'),
(213431, '6189264703bd2.jpeg', 'Bakso', '20.000'),
(213432, '6189269fc70bf.jpeg', 'Nasi Goreng', '10.000'),
(213433, '61892b24a4ba2.jpeg', 'Chiken Teriyaki', '18.000'),
(213434, '61892b57c36f0.jpeg', 'Nasi Liwet Komplit', '35.000'),
(213435, '61892e0285286.jpeg', 'Sup Ikan', '27.000'),
(213436, '61892e6c7b496.jpg', 'Sop Buntut Sapi', '21.000'),
(213441, '618d1a5081ec0.jpeg', 'Opor Ayam', '20.000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(2156751, 'iklimardiana', '$2y$10$t0wg8ZV94dW7ZM3lTZ/FJu/xhRrNQHeRcYrKABs3oBnw99m1A1s0m'),
(2156752, 'alfinafr', '$2y$10$sb0.IYb/stabAjeYfjp.mu8MLdyDtnlTcmibEbxqzCdcYxB5oPbMS'),
(2156753, 'astiuswah', '$2y$10$z7ClVyQopQSDHKkOS9vU2OtbEeGz9CeWULuE2dL8q5aFIts6wbTv2'),
(2156754, 'amilki', '$2y$10$Teyt8h1Xvo2FXBgk/PGzcuSYAGaxOSEgZjKSb9SsD5wqOiWLmXEsy'),
(2156755, 'iklima mardiana', '$2y$10$kQDWRHjBJalzPQ9lxMCYT.a1tpDFjEUplg8yS701YTKmgTIrKqmd.'),
(2156757, 'asti', '$2y$10$bh/IrntHHxyhhWOjPkx46uO4zBXlzVeEybWKmWlI3LM5agcpgaxWq'),
(2156758, 'iklima', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menumakanan`
--
ALTER TABLE `menumakanan`
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
-- AUTO_INCREMENT for table `menumakanan`
--
ALTER TABLE `menumakanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213443;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2156759;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
