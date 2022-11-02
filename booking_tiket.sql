-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2022 at 05:43 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiket_kapal`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_tiket`
--

CREATE TABLE `booking_tiket` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `dari` varchar(50) NOT NULL,
  `ke` varchar(50) NOT NULL,
  `usia_dewasa` int(10) NOT NULL,
  `usia_bayi` int(10) NOT NULL,
  `waktu` date NOT NULL,
  `waktu_unggah` varchar(30) NOT NULL,
  `dokumen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_tiket`
--

INSERT INTO `booking_tiket` (`id`, `nama`, `email`, `dari`, `ke`, `usia_dewasa`, `usia_bayi`, `waktu`, `waktu_unggah`, `dokumen`) VALUES
(1, 'Andi Nur Fadilah', 'andinurfadilah2203@gmail.com', 'NUNUKAN', 'PARE-PARE', 1, 1, '2022-10-08', '27-10-2022', 'Dokumen.jpg'),
(2, 'Adlina Safa', 'adlinasp@gmail.com', 'BALIKPAPAN', 'PARE-PARE', 1, 0, '2022-10-15', '27-10-2022', 'Dokumen.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_tiket`
--
ALTER TABLE `booking_tiket`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_tiket`
--
ALTER TABLE `booking_tiket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
