-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2023 at 05:39 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `datamhs`
--

CREATE TABLE `datamhs` (
  `nim` int(5) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `angkatan` varchar(5) NOT NULL,
  `prodi_id` int(5) UNSIGNED NOT NULL,
  `type_id` int(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `datamhs`
--

INSERT INTO `datamhs` (`nim`, `nama`, `tgl_lahir`, `angkatan`, `prodi_id`, `type_id`) VALUES
(123, 'Antok', '2000-07-14', '2023', 113, 11),
(21111333, 'Dayat', '0000-00-00', '2112', 113, 11),
(211111124, 'Puy', '2023-07-01', '2022', 112, 14);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2023-07-18-065216', 'App\\Database\\Migrations\\TypeMhs', 'default', 'App', 1689663708, 1),
(2, '2023-07-18-065317', 'App\\Database\\Migrations\\ProdiMigration', 'default', 'App', 1689663708, 1),
(3, '2023-07-18-070240', 'App\\Database\\Migrations\\DataMhsMigration', 'default', 'App', 1689663814, 2);

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `prodi_id` int(5) UNSIGNED NOT NULL,
  `nama_prodi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`prodi_id`, `nama_prodi`) VALUES
(111, 'informatika'),
(112, 'teknik komputer'),
(113, 'teknik elektro'),
(114, 'farmasi'),
(115, 'pgsd');

-- --------------------------------------------------------

--
-- Table structure for table `typemhs`
--

CREATE TABLE `typemhs` (
  `type_id` int(5) UNSIGNED NOT NULL,
  `type_mhs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `typemhs`
--

INSERT INTO `typemhs` (`type_id`, `type_mhs`) VALUES
(11, 'reguler'),
(12, 'kipk'),
(13, 'tahfidz'),
(14, 'flsp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datamhs`
--
ALTER TABLE `datamhs`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `datamhs_prodi_id_foreign` (`prodi_id`),
  ADD KEY `datamhs_type_id_foreign` (`type_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`prodi_id`);

--
-- Indexes for table `typemhs`
--
ALTER TABLE `typemhs`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datamhs`
--
ALTER TABLE `datamhs`
  MODIFY `nim` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211145468;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `prodi_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `typemhs`
--
ALTER TABLE `typemhs`
  MODIFY `type_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `datamhs`
--
ALTER TABLE `datamhs`
  ADD CONSTRAINT `datamhs_prodi_id_foreign` FOREIGN KEY (`prodi_id`) REFERENCES `prodi` (`prodi_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `datamhs_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `typemhs` (`type_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
