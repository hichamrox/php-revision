-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 14, 2021 at 03:02 PM
-- Server version: 8.0.26
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tp_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `animaux`
--

CREATE TABLE `animaux` (
  `id` int NOT NULL,
  `couleur` varchar(255) NOT NULL,
  `age` int NOT NULL,
  `nom` varchar(255) NOT NULL,
  `race` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `adopte` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `animaux`
--

INSERT INTO `animaux` (`id`, `couleur`, `age`, `nom`, `race`, `created_at`, `adopte`) VALUES
(1, 'Blue', 1, 'Dog Blue', 'Police dog', '2021-10-14 12:55:18', 0),
(2, 'Green', 2, 'Cat', 'Worm', '2021-10-14 13:55:04', 1),
(3, 'Blue', 1, 'Dog Blue', 'Police dog', '2021-10-14 12:55:18', 0),
(4, 'Green', 2, 'Worm', 'Worm', '2021-10-14 13:55:04', 0),
(5, 'Blue', 1, 'Dog Blue', 'Police dog', '2021-10-14 12:55:18', 0),
(6, 'Green', 2, 'Yuky', 'Worm', '2021-10-14 13:55:04', 0),
(7, 'Blue', 1, 'Dog Blue', 'Police dog', '2021-10-14 12:55:18', 0),
(8, 'Green', 2, 'Hicham', 'Worm', '2021-10-14 13:55:04', 0),
(9, 'Blue', 1, 'Dog Blue', 'Police dog', '2021-10-14 12:55:18', 0),
(10, 'Green', 2, 'Hicham', 'Worm', '2021-10-14 13:55:04', 0),
(11, 'Blue', 1, 'Dog Blue', 'Police dog', '2021-10-14 12:55:18', 0),
(12, 'Green', 2, 'Hicham', 'Worm', '2021-10-14 13:55:04', 0),
(13, 'Blue', 1, 'Dog Blue', 'Police dog', '2021-10-14 12:55:18', 0),
(14, 'Green', 2, 'Hicham', 'Worm', '2021-10-14 13:55:04', 0),
(15, 'Blue', 1, 'Dog Blue', 'Police dog', '2021-10-14 12:55:18', 0),
(16, 'Green', 2, 'Hicham', 'Worm', '2021-10-14 13:55:04', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animaux`
--
ALTER TABLE `animaux`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animaux`
--
ALTER TABLE `animaux`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
