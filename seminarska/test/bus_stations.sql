-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 29, 2024 at 12:38 AM
-- Server version: 5.7.36
-- PHP Version: 8.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus_station`
--

-- --------------------------------------------------------

--
-- Table structure for table `bus_stations`
--

CREATE TABLE `bus_stations` (
  `id` int(11) NOT NULL,
  `station_name` varchar(50) NOT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `work_time` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_stations`
--

INSERT INTO `bus_stations` (`id`, `station_name`, `contact`, `work_time`) VALUES
(1, 'Stip', '070-111-111', '00:00 AM - 24:00 PM'),
(2, 'Kocani', '070-222-222', '00:00 AM - 24:00 PM'),
(3, 'Skopje', '070-333-333', '00:00 AM - 24:00 PM'),
(4, 'Bitola', '070-444-444', '00:00 AM - 24:00 PM'),
(5, 'Ohrid', '070-555-555', '00:00 AM - 24:00 PM'),
(6, 'Kumanovo', '070-666-666', '00:00 AM - 24:00 PM'),
(7, 'Strumica', '070-777-777', '00:00 AM - 24:00 PM'),
(8, 'Dojran', '070-888-888', '00:00 AM - 24:00 PM'),
(9, 'Gostivar', '070-999-999', '00:00 AM - 24:00 PM'),
(10, 'Prilep', '070-101-010', '00:00 AM - 24:00 PM'),
(11, 'Tetovo', '070-110-011', '00:00 AM - 24:00 PM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bus_stations`
--
ALTER TABLE `bus_stations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bus_stations`
--
ALTER TABLE `bus_stations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
