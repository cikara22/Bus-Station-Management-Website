-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 30, 2024 at 03:10 PM
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
-- Table structure for table `ticket_prices`
--

CREATE TABLE `ticket_prices` (
  `id` int(11) NOT NULL,
  `departure_station` varchar(50) NOT NULL,
  `arrival_station` varchar(50) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket_prices`
--

INSERT INTO `ticket_prices` (`id`, `departure_station`, `arrival_station`, `price`) VALUES
(1, 'Stip', 'Skopje', 1000),
(2, 'Stip', 'Ohrid', 1500),
(3, 'Stip', 'Bitola', 1200),
(4, 'Stip', 'Prilep', 800),
(5, 'Stip', 'Gevgelija', 2000),
(6, 'Stip', 'Strumica', 900),
(7, 'Stip', 'Dojran', 1100),
(8, 'Stip', 'Kocani', 700),
(9, 'Stip', 'Veles', 600),
(10, 'Stip', 'Kumanovo', 1300),
(11, 'Stip', 'Tetovo', 1400),
(12, 'Stip', 'Kicevo', 1600),
(13, 'Stip', 'Kriva Palanka', 1000),
(14, 'Skopje', 'Stip', 450),
(15, 'Ohrid', 'Stip', 1500),
(17, 'Prilep', 'Stip', 800),
(18, 'Gevgelija', 'Stip', 2000),
(19, 'Strumica', 'Stip', 450),
(22, 'Veles', 'Stip', 500),
(24, 'Tetovo', 'Stip', 1000),
(42, 'Bitola', 'Stip', 850),
(46, 'Dojran', 'Stip', 450),
(53, 'Skopje', 'Ohrid', 1200),
(54, 'Skopje', 'Bitola', 900),
(55, 'Skopje', 'Prilep', 700),
(56, 'Skopje', 'Gevgelija', 1500),
(57, 'Skopje', 'Strumica', 1600),
(59, 'Skopje', 'Kocani', 1100),
(60, 'Skopje', 'Veles', 400),
(61, 'Skopje', 'Kumanovo', 500),
(62, 'Skopje', 'Tetovo', 600),
(63, 'Skopje', 'Kicevo', 1200),
(64, 'Skopje', 'Kriva Palanka', 800),
(85, 'Kocani', 'Stip', 250),
(87, 'Kumanovo', 'Stip', 450),
(89, 'Kicevo', 'Stip', 1600),
(90, 'Kriva Palanka', 'Stip', 500),
(91, 'Skopje', 'Ohrid', 1200),
(103, 'Ohrid', 'Bitola', 500),
(104, 'Ohrid', 'Prilep', 600),
(105, 'Ohrid', 'Gevgelija', 1800),
(106, 'Ohrid', 'Strumica', 1900),
(107, 'Ohrid', 'Dojran', 1700),
(108, 'Ohrid', 'Kocani', 1400),
(109, 'Ohrid', 'Veles', 900),
(110, 'Ohrid', 'Kumanovo', 1000),
(111, 'Ohrid', 'Tetovo', 1100),
(112, 'Ohrid', 'Kicevo', 1300),
(113, 'Ohrid', 'Kriva Palanka', 900),
(114, 'Bitola', 'Prilep', 300),
(115, 'Bitola', 'Gevgelija', 550),
(116, 'Bitola', 'Strumica', 400),
(117, 'Bitola', 'Dojran', 650),
(118, 'Bitola', 'Kocani', 900),
(119, 'Bitola', 'Veles', 350),
(120, 'Bitola', 'Kumanovo', 900),
(121, 'Bitola', 'Tetovo', 700),
(122, 'Bitola', 'Kicevo', 700),
(123, 'Bitola', 'Kriva Palanka', 600),
(124, 'Prilep', 'Gevgelija', 900),
(125, 'Prilep', 'Strumica', 1000),
(126, 'Prilep', 'Dojran', 800),
(127, 'Prilep', 'Kocani', 500),
(128, 'Prilep', 'Veles', 300),
(129, 'Prilep', 'Kumanovo', 400),
(130, 'Prilep', 'Tetovo', 500),
(131, 'Prilep', 'Kicevo', 700),
(132, 'Prilep', 'Kriva Palanka', 500),
(133, 'Gevgelija', 'Strumica', 300),
(134, 'Gevgelija', 'Dojran', 200),
(135, 'Gevgelija', 'Kocani', 600),
(136, 'Gevgelija', 'Veles', 900),
(137, 'Gevgelija', 'Kumanovo', 1000),
(138, 'Gevgelija', 'Tetovo', 1100),
(139, 'Gevgelija', 'Kicevo', 1300),
(140, 'Gevgelija', 'Kriva Palanka', 1000),
(141, 'Strumica', 'Dojran', 150),
(142, 'Strumica', 'Kocani', 450),
(143, 'Strumica', 'Veles', 700),
(144, 'Strumica', 'Kumanovo', 800),
(145, 'Strumica', 'Tetovo', 900),
(146, 'Strumica', 'Kicevo', 1100),
(147, 'Strumica', 'Kriva Palanka', 1000),
(148, 'Dojran', 'Kocani', 500),
(149, 'Dojran', 'Veles', 550),
(150, 'Dojran', 'Kumanovo', 650),
(151, 'Dojran', 'Tetovo', 950),
(152, 'Dojran', 'Kicevo', 950),
(153, 'Dojran', 'Kriva Palanka', 850),
(154, 'Kocani', 'Veles', 500),
(155, 'Kocani', 'Kumanovo', 350),
(156, 'Kocani', 'Tetovo', 650),
(157, 'Kocani', 'Kicevo', 650),
(158, 'Kocani', 'Kriva Palanka', 300),
(159, 'Veles', 'Kocani', 650),
(160, 'Veles', 'Tetovo', 900),
(161, 'Veles', 'Kriva Palanka', 950),
(162, 'Veles', 'Kumanovo', 850),
(163, 'Veles', 'Skopje', 750),
(164, 'Tetovo', 'Skopje', 900),
(165, 'Tetovo', 'Dojran', 1150),
(166, 'Tetovo', 'Kocani', 1200),
(167, 'Tetovo', 'Kumanovo', 800),
(168, 'Tetovo', 'Kicevo', 650),
(169, 'Tetovo', 'Kriva Palanka', 1000),
(170, 'Kumanovo', 'Kicevo', 450),
(171, 'Kumanovo', 'Skopje', 250),
(172, 'Kumanovo', 'Kriva Palanka', 300),
(173, 'Kumanovo', 'Bitola', 900),
(174, 'Kumanovo', 'Prilep', 650),
(175, 'Kumanovo', 'Strumica', 850),
(176, 'Kumanovo', 'Kocani', 400),
(177, 'Kumanovo', 'Veles', 500),
(178, 'Kriva Palanka', 'Bitola', 1100),
(179, 'Kriva Palanka', 'Kicevo', 900),
(180, 'Kriva Palanka', 'Skopje', 350),
(181, 'Kriva Palanka', 'Prilep', 750),
(182, 'Kriva Palanka', 'Kocani', 350),
(183, 'Kriva Palanka', 'Strumica', 1000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ticket_prices`
--
ALTER TABLE `ticket_prices`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ticket_prices`
--
ALTER TABLE `ticket_prices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
