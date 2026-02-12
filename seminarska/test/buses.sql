-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 29, 2024 at 12:05 AM
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
-- Table structure for table `buses`
--

CREATE TABLE `buses` (
  `id` int(11) NOT NULL,
  `bus_number` varchar(10) NOT NULL,
  `departure_time` time NOT NULL,
  `departure_station` varchar(50) NOT NULL,
  `destination` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buses`
--

INSERT INTO `buses` (`id`, `bus_number`, `departure_time`, `departure_station`, `destination`) VALUES
(12, '1', '09:30:00', 'Stip', 'Skopje'),
(15, '1', '13:30:00', 'Stip', 'Skopje'),
(17, '2', '10:30:00', 'Kocani', 'Stip'),
(22, '1', '11:30:00', 'Skopje', 'Stip'),
(23, '1', '15:30:00', 'Skopje', 'Stip'),
(24, '2', '09:30:00', 'Stip', 'Kocani'),
(25, '2', '11:30:00', 'Stip', 'Kocani'),
(26, '2', '12:30:00', 'Kocani', 'Stip'),
(27, '3', '07:30:00', 'Stip', 'Bitola'),
(28, '3', '13:30:00', 'Stip', 'Bitola'),
(29, '3', '10:30:00', 'Bitola', 'Stip'),
(30, '3', '16:30:00', 'Bitola', 'Stip'),
(31, '13', '10:30:00', 'Ohrid', 'Bitola'),
(32, '13', '20:30:00', 'Bitola', 'Ohrid'),
(33, '13', '14:30:00', 'Bitola', 'Ohrid'),
(34, '13', '18:30:00', 'Ohrid', 'Bitola'),
(35, '5', '07:00:00', 'Stip', 'Kumanovo'),
(36, '5', '11:00:00', 'Stip', 'Kumanovo'),
(37, '5', '09:00:00', 'Kumanovo', 'Stip'),
(38, '5', '13:00:00', 'Kumanovo', 'Stip'),
(39, '6', '06:00:00', 'Stip', 'Ohrid'),
(40, '6', '14:00:00', 'Stip', 'Ohrid'),
(41, '6', '10:00:00', 'Ohrid', 'Stip'),
(42, '6', '18:00:00', 'Ohrid', 'Stip'),
(43, '7', '08:00:00', 'Stip', 'Strumica'),
(44, '7', '12:00:00', 'Stip', 'Strumica'),
(45, '7', '10:00:00', 'Strumica', 'Stip'),
(46, '7', '14:00:00', 'Strumica', 'Stip'),
(47, '7', '08:00:00', 'Stip', 'Dojran'),
(48, '7', '12:00:00', 'Stip', 'Dojran'),
(49, '7', '10:30:00', 'Dojran', 'Stip'),
(50, '7', '14:30:00', 'Dojran', 'Stip'),
(51, '8', '13:30:00', 'Skopje', 'Bitola'),
(52, '8', '17:30:00', 'Skopje', 'Bitola'),
(53, '10', '13:30:00', 'Skopje', 'Kocani'),
(54, '10', '17:30:00', 'Skopje', 'Kocani'),
(55, '8', '11:30:00', 'Bitola', 'Skopje'),
(56, '8', '15:30:00', 'Bitola', 'Skopje'),
(57, '10', '08:30:00', 'Kocani', 'Skopje'),
(58, '10', '13:30:00', 'Kocani', 'Skopje'),
(59, '9', '07:30:00', 'Skopje', 'Kumanovo'),
(60, '9', '09:30:00', 'Skopje', 'Kumanovo'),
(61, '9', '08:30:00', 'Kumanovo', 'Skopje'),
(62, '9', '10:30:00', 'Kumanovo', 'Skopje'),
(63, '12', '05:30:00', 'Skopje', 'Ohrid'),
(64, '12', '13:30:00', 'Skopje', 'Ohrid'),
(65, '12', '09:30:00', 'Ohrid', 'Skopje'),
(66, '12', '17:30:00', 'Ohrid', 'Skopje'),
(67, '11', '05:30:00', 'Skopje', 'Strumica'),
(68, '11', '13:30:00', 'Skopje', 'Strumica'),
(69, '11', '09:30:00', 'Strumica', 'Skopje'),
(70, '11', '17:30:00', 'Strumica', 'Skopje'),
(71, '14', '07:30:00', 'Bitola', 'Kumanovo'),
(72, '14', '09:30:00', 'Bitola', 'Kumanovo'),
(73, '14', '08:30:00', 'Kumanovo', 'Bitola'),
(74, '14', '10:30:00', 'Kumanovo', 'Bitola'),
(75, '15', '13:30:00', 'Strumica', 'Bitola'),
(76, '15', '17:30:00', 'Strumica', 'Bitola'),
(77, '15', '11:30:00', 'Bitola', 'Strumica'),
(78, '15', '15:30:00', 'Bitola', 'Strumica'),
(79, '16', '11:30:00', 'Ohrid', 'Dojran'),
(80, '16', '15:30:00', 'Ohrid', 'Dojran'),
(81, '16', '13:30:00', 'Dojran', 'Ohrid'),
(82, '16', '17:30:00', 'Dojran', 'Ohrid'),
(83, '17', '13:30:00', 'Kocani', 'Dojran'),
(84, '17', '17:30:00', 'Kocani', 'Dojran'),
(85, '17', '11:30:00', 'Dojran', 'Kocani'),
(86, '17', '15:30:00', 'Dojran', 'Kocani'),
(87, '18', '08:00:00', 'Kocani', 'Ohrid'),
(88, '18', '17:00:00', 'Kocani', 'Ohrid'),
(89, '18', '12:00:00', 'Ohrid', 'Kocani'),
(90, '18', '21:00:00', 'Ohrid', 'Kocani'),
(91, '19', '08:00:00', 'Kumanovo', 'Dojran'),
(92, '19', '17:00:00', 'Kumanovo', 'Dojran'),
(93, '19', '12:00:00', 'Dojran', 'Kumanovo'),
(94, '19', '21:00:00', 'Dojran', 'Kumanovo'),
(95, '20', '11:00:00', 'Kocani', 'Strumica'),
(96, '20', '15:00:00', 'Kocani', 'Strumica'),
(97, '20', '13:00:00', 'Strumica', 'Kocani'),
(98, '20', '17:00:00', 'Strumica', 'Kocani'),
(99, '21', '07:00:00', 'Kumanovo', 'Ohrid'),
(100, '21', '16:00:00', 'Kumanovo', 'Ohrid'),
(101, '21', '11:00:00', 'Ohrid', 'Kumanovo'),
(102, '21', '20:00:00', 'Ohrid', 'Kumanovo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buses`
--
ALTER TABLE `buses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buses`
--
ALTER TABLE `buses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
