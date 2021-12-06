-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2021 at 06:24 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `northdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangay_clearance`
--

CREATE TABLE `barangay_clearance` (
  `id` int(11) NOT NULL,
  `resident_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `date_issued` date NOT NULL,
  `cedula_number` varchar(255) NOT NULL,
  `cedula_place` varchar(255) NOT NULL,
  `cedula_date` date NOT NULL,
  `url_image` varchar(255) NOT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barangay_clearance`
--

INSERT INTO `barangay_clearance` (`id`, `resident_id`, `name`, `address`, `purpose`, `date_issued`, `cedula_number`, `cedula_place`, `cedula_date`, `url_image`, `date_created`) VALUES
(1, 44, 'reijan12312312 pangit BAYOT 21', 'asd asdada dasdac', 'tuli', '2021-06-12', '12312312', 'barangay North', '2021-06-10', '../image/1623500622.jpg', '2021-06-12'),
(2, 145, '2313 12312123 12312 qwe', 'purok 13 Purok 15 Zone 4 Lagao. General Santos City 123', 'Tuli', '2021-06-12', '12312', 'barangay North', '2021-06-29', '../image/1623500808.jpg', '2021-06-12'),
(3, 91, 'qwe 12312123 12312 123', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'Tuli', '2021-06-12', '12312', 'qweq', '2021-06-29', '../image/1623501306.jpg', '2021-06-12'),
(4, 91, 'tase', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'Tuli', '2021-06-12', '12312312', 'barangay North', '2021-06-21', '../image/1623501706.jpg', '2021-06-12'),
(5, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '../image/1623501886.jpg', '2021-06-12'),
(6, 91, 'tase', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'Tuli', '2021-06-12', '12312312', 'barangay North', '2021-06-21', '../image/1623501886.jpg', '2021-06-12'),
(7, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '../image/1623501909.jpg', '2021-06-12'),
(8, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '../image/1623501916.jpg', '2021-06-12'),
(9, 91, 'qwe 12312123 12312 123', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'Tuli', '2021-06-12', '12312312', 'barangay North', '2021-06-15', '../image/1623501916.jpg', '2021-06-12'),
(10, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '../image/1623501966.jpg', '2021-06-12'),
(11, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '../image/1623501968.jpg', '2021-06-12'),
(12, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '../image/1623501971.jpg', '2021-06-12'),
(13, 91, 'qwe 12312123 12312 123', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'wqe', '2021-06-12', 'qwe', 'qweq', '2021-06-22', '../image/1623501971.jpg', '2021-06-12'),
(14, 91, 'qwe 12312123 12312 123', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'wqe', '2021-06-12', 'qwe', 'qweq', '2021-06-22', '../image/1623501999.jpg', '2021-06-12'),
(15, 91, 'qwe 12312123 12312 123', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'wqe', '2021-06-12', 'qwe', 'qweq', '2021-06-22', '../image/1623502032.jpg', '2021-06-12'),
(16, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '../image/1623502037.jpg', '2021-06-12'),
(17, 91, 'qwe 12312123 12312 123', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'wqe', '2021-06-12', 'qwe', 'qweq', '2021-06-22', '../image/1623502037.jpg', '2021-06-12'),
(18, 91, 'tae', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'qweq', '2021-06-12', 'qew', 'qweq', '2021-06-22', '../image/1623502081.jpg', '2021-06-12'),
(19, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '../image/1623502111.jpg', '2021-06-12'),
(20, 91, 'tae', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'qweq', '2021-06-12', 'qew', 'qweq', '2021-06-22', '../image/1623502111.jpg', '2021-06-12'),
(21, 91, 'tae', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'qweq', '2021-06-12', 'qew', 'qweq', '2021-06-22', '../image/1623502114.jpg', '2021-06-12'),
(22, 91, 'qwe 12312123 12312 123', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'qwe', '2021-06-12', 'qwe', 'qwe', '2021-06-29', '../image/1623502187.jpg', '2021-06-12'),
(23, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '../image/1623502201.jpg', '2021-06-12'),
(24, 91, 'qwe 12312123 12312 123', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'qwe', '2021-06-12', 'qwe', 'qwe', '2021-06-29', '../image/1623502201.jpg', '2021-06-12'),
(25, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '../image/1623502272.jpg', '2021-06-12'),
(26, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '../image/1623502275.jpg', '2021-06-12'),
(27, 91, 'asda', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'qwewq', '2021-06-12', 'eqw', 'qwe', '2021-06-07', '../image/1623502275.jpg', '2021-06-12'),
(28, 91, 'asda', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'qwewq', '2021-06-12', 'eqw', 'qwe', '2021-06-07', '../image/1623502306.jpg', '2021-06-12'),
(29, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '../image/1623502311.jpg', '2021-06-12'),
(30, 91, 'asda', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'qwewq', '2021-06-12', 'eqw', 'qwe', '2021-06-07', '../image/1623502311.jpg', '2021-06-12'),
(31, 91, 'asda', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'qwewq', '2021-06-12', 'eqw', 'qwe', '2021-06-07', '../image/1623502350.jpg', '2021-06-12'),
(32, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '../image/1623502370.jpg', '2021-06-12'),
(33, 91, 'asda', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'qwewq', '2021-06-12', 'eqw', 'qwe', '2021-06-07', '../image/1623502370.jpg', '2021-06-12'),
(34, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '../image/1623502437.jpg', '2021-06-12'),
(35, 91, 'asda', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'qwewq', '2021-06-12', 'eqw', 'qwe', '2021-06-07', '../image/1623502437.jpg', '2021-06-12'),
(36, 91, 'asda', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'qwewq', '2021-06-12', 'eqw', 'qwe', '2021-06-07', '../image/1623502464.jpg', '2021-06-12'),
(37, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '../image/1623502475.jpg', '2021-06-12'),
(38, 91, 'asda', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'qwewq', '2021-06-12', 'eqw', 'qwe', '2021-06-07', '../image/1623502475.jpg', '2021-06-12'),
(39, 91, 'asda', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'qwewq', '2021-06-12', 'eqw', 'qwe', '2021-06-07', '../image/1623502482.jpg', '2021-06-12'),
(40, 91, 'asda', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'qwewq', '2021-06-12', 'eqw', 'qwe', '2021-06-07', '../image/1623502498.jpg', '2021-06-12'),
(41, 91, 'asda', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'qwewq', '2021-06-12', 'eqw', 'qwe', '2021-06-07', '../image/1623502501.jpg', '2021-06-12'),
(42, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '../image/1623502505.jpg', '2021-06-12'),
(43, 91, 'asda', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'qwewq', '2021-06-12', 'eqw', 'qwe', '2021-06-07', '../image/1623502505.jpg', '2021-06-12'),
(44, 91, 'asda', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'qwewq', '2021-06-12', 'eqw', 'qwe', '2021-06-07', '../image/1623502507.jpg', '2021-06-12'),
(45, 91, 'qwe 12312123 12312 123', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'sasd', '2021-06-12', 'asdas', 'sada', '2021-05-31', '../image/1623502547.jpg', '2021-06-12'),
(46, 91, 'qwe 12312123 12312 123', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'sasd', '2021-06-12', 'asdas', 'sada', '2021-05-31', '../image/1623502588.jpg', '2021-06-12'),
(47, 91, 'qwe 12312123 12312 123', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'sasd', '2021-06-12', 'asdas', 'sada', '2021-05-31', '../image/1623502599.jpg', '2021-06-12'),
(48, 91, 'qwe 12312123 12312 123', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'sasd', '2021-06-12', 'asdas', 'sada', '2021-05-31', '../image/1623502629.jpg', '2021-06-12'),
(49, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '../image/1623502705.jpg', '2021-06-12'),
(50, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '../image/1623502712.jpg', '2021-06-12'),
(51, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '../image/1623502715.jpg', '2021-06-12'),
(52, 91, '123', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'qwe', '2021-06-12', '12312312', 'barangay North', '2021-06-01', '../image/1623502776.jpg', '2021-06-12'),
(53, 91, 'troy', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'qwe', '2021-06-12', '12312312', 'barangay North', '2021-06-01', '../image/1623502790.jpg', '2021-06-12'),
(54, 91, 'wew', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', '12312', '2021-06-12', '12321321', 'qweq', '2021-06-08', '../../n_residents/image/1623237928815_aada989c8caadbde87cdce7b7bc53dbd.jpg', '2021-06-12'),
(55, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '', '2021-06-12'),
(56, 91, 'wew', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', '12312', '2021-06-12', '12321321', 'qweq', '2021-06-08', '../../n_residents/image/1623237928815_aada989c8caadbde87cdce7b7bc53dbd.jpg', '2021-06-12'),
(57, 91, 'wew', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', '12312', '2021-06-12', '12321321', 'qweq', '2021-06-08', '../../n_residents/image/1623237928815_aada989c8caadbde87cdce7b7bc53dbd.jpg', '2021-06-12'),
(58, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '', '2021-06-12'),
(59, 91, 'wew', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', '12312', '2021-06-12', '12321321', 'qweq', '2021-06-08', '../../n_residents/image/1623237928815_aada989c8caadbde87cdce7b7bc53dbd.jpg', '2021-06-12'),
(60, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '', '2021-06-12'),
(61, 91, '123123', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'sada', '2021-06-12', 'asdsa', 'qweq', '2021-06-16', '../../n_residents/image/1623237928815_aada989c8caadbde87cdce7b7bc53dbd.jpg', '2021-06-12'),
(62, 91, '123123', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'sada', '2021-06-12', 'asdsa', 'qweq', '2021-06-16', '../image/1623503211.jpg', '2021-06-12'),
(63, 91, '123123', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'sada', '2021-06-12', 'asdsa', 'qweq', '2021-06-16', '../../n_residents/image/1623237928815_aada989c8caadbde87cdce7b7bc53dbd.jpg', '2021-06-12'),
(64, 91, '123123', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'sada', '2021-06-12', 'asdsa', 'qweq', '2021-06-16', '../image/1623503223.jpg', '2021-06-12'),
(65, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '', '2021-06-12'),
(66, 91, '123rttr', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'Tuli', '2021-06-12', '12312312', 'qweq', '2021-06-01', '../../n_residents/image/1623237928815_aada989c8caadbde87cdce7b7bc53dbd.jpg', '2021-06-12'),
(67, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '', '2021-06-12'),
(68, 91, '123rttr', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'Tuli', '2021-06-12', '12312312', 'qweq', '2021-06-01', '../image/1623503282.jpg', '2021-06-12'),
(69, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '', '2021-06-12'),
(70, 91, '123rttr', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'Tuli', '2021-06-12', '12312312', 'qweq', '2021-06-01', '../image/1623503376.jpg', '2021-06-12'),
(71, 91, '123rttr', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'Tuli', '2021-06-12', '12312312', 'qweq', '2021-06-01', '../image/1623503434.jpg', '2021-06-12'),
(72, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '', '2021-06-12'),
(73, 91, '123rttr', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'Tuli', '2021-06-12', '12312312', 'qweq', '2021-06-01', '../image/1623503440.jpg', '2021-06-12'),
(74, 91, '123rttr', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'Tuli', '2021-06-12', '12312312', 'qweq', '2021-06-01', '../image/1623503466.jpg', '2021-06-12'),
(75, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '', '2021-06-12'),
(76, 91, '123rttr', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'Tuli', '2021-06-12', '12312312', 'qweq', '2021-06-01', '../image/1623503470.jpg', '2021-06-12'),
(77, 91, '123rttr', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'Tuli', '2021-06-12', '12312312', 'qweq', '2021-06-01', '../image/1623503487.jpg', '2021-06-12'),
(78, 91, '123rttr', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'Tuli', '2021-06-12', '12312312', 'qweq', '2021-06-01', '../image/1623503490.jpg', '2021-06-12'),
(79, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '', '2021-06-12'),
(80, 91, 'troyyyyyyyyyyy', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'Tuli', '2021-06-12', '12312312', 'qweq', '2021-06-01', '../image/1623503514.jpg', '2021-06-12'),
(81, 91, 'qwe 12312123 12312 123', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'qweq', '2021-06-12', 'qweq', 'qqwewq', '2021-06-01', '../../n_residents/image/1623237928815_aada989c8caadbde87cdce7b7bc53dbd.jpg', '2021-06-12'),
(82, 91, 'qweqeq', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'qwewq', '2021-06-12', '12312312', 'qweq', '2021-06-10', '../image/1623503572.jpg', '2021-06-12'),
(83, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '', '2021-06-12'),
(84, 91, 'qweqeq', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'qwewq', '2021-06-12', '12312312', 'qweq', '2021-06-10', '../image/1623503653.jpg', '2021-06-12'),
(85, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '', '2021-06-12'),
(86, 91, 'scasdca', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'qwewq', '2021-06-12', '12312312', 'qweq', '2021-06-10', '../image/1623503660.jpg', '2021-06-12'),
(87, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '', '2021-06-12'),
(88, 55, 'troy Michael Ancino Garidos ', '15 wew 555', 'Tuli', '2021-06-12', '12312312', 'barangay North', '2021-06-03', '../image/1623503710.jpg', '2021-06-12'),
(89, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '', '2021-06-12'),
(90, 55, 'troy Michael Ancino Garidos ', '15 wew 555', 'Tuli', '2021-06-12', '12312312', 'barangay North', '2021-06-03', '../image/1623503732.jpg', '2021-06-12'),
(91, 55, 'troy Michael Ancino Garidos ', '15 wew 555', 'Tuli', '2021-06-12', '12312312', 'barangay North', '2021-06-03', '../image/1623503754.jpg', '2021-06-12'),
(92, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '', '2021-06-12'),
(93, 55, 'troy Michael Ancino Garidos ', '15 wew 555', 'Tuli', '2021-06-12', '12312312', 'barangay North', '2021-06-03', '../image/1623503766.jpg', '2021-06-12'),
(94, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '', '2021-06-12'),
(95, 55, 'chroy Michael Ancino Garidos ', '15 wew 555', 'qweq', '2021-06-12', 'eqw', 'qweq', '2021-06-04', '../image/1623503893.jpg', '2021-06-12'),
(96, 55, 'chruy', '15 wew 555', '12321', '2021-06-18', 'eqw', 'qweq', '2021-06-10', '../image/1623504126.jpg', '2021-06-12'),
(97, 44, 'reijan12312312 pangit BAYOT 21', 'asd asdada dasdac', 'sd', '2021-06-12', 'asdas', 'sda', '2021-06-02', '../../n_residents/image/1620903124262_162033562_440007637078575_2173182379989910500_n.jpg', '2021-06-12'),
(98, 44, 'reijan12312312 pangit BAYOT 21', 'asd asdada dasdac', 'qwewq', '2021-06-12', '12312312', 'barangay North', '2021-06-03', '../image/1623504478.jpg', '2021-06-12'),
(99, 147, 'Troy Michael Garidos ', 'purok 10 laurel 123', 'Tuli', '2021-06-13', '12312312', 'barangay North', '2021-06-01', '../../n_residents/image/1623492603.jpg', '2021-06-13'),
(100, 44, 'reijan12312312 pangit BAYOT 21', 'asd asdada dasdac', 'Tuli', '2021-06-13', '12312312', 'qweq', '2021-06-07', '../../n_residents/image/1620903124262_162033562_440007637078575_2173182379989910500_n.jpg', '2021-06-13'),
(101, 131, '2313 qweqw qweqwe qwe', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City qeqw', 'qwewq', '2021-06-13', '12312312', 'qweq', '2021-06-01', '../../n_residents/image/1623244723.jpg', '2021-06-13'),
(102, 131, '2313 qweqw qweqwe qwe', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City qeqw', 'qwewq', '2021-06-13', '12312312', 'qweq', '2021-06-01', '../../n_residents/image/1623244723.jpg', '2021-06-13'),
(103, 68, 'wqeqw qwe qwe qew', 'purok 11 qwe qeqw', 'qweq', '2021-06-13', 'eqw', 'qweq', '2021-05-31', '../../n_residents/image/default.png', '2021-06-13'),
(104, 44, 'reijan12312312 pangit BAYOT 21', 'asd asdada dasdac', 'Tuli', '2021-06-17', '12312312', 'barangay North', '2021-07-07', '../../n_residents/image/1623913790.jpg', '2021-06-17'),
(105, 44, 'reijan12312312 pangit BAYOT 21', 'asd asdada dasdac', 'qweqw', '2021-06-17', '12312312', 'barangay North', '2021-06-21', '../../n_residents/image/1623913790.jpg', '2021-06-17'),
(106, 44, 'reijan12312312 pangit BAYOT 21', 'asd asdada dasdac', 'qweqw', '2021-06-17', '12312312', 'barangay North', '2021-06-21', '../image/1623939831.jpg', '2021-06-17'),
(107, 61, 'Ghorl Pren Bhoi Jr.', '8 Apple street 120', 'qwewq', '2021-06-17', 'qewqqweqw', 'qeq', '2021-06-14', '../image/1623941769.jpg', '2021-06-17'),
(108, 55, 'troy Michael Ancino Garidos ', '15 wew 555', '1231', '2021-06-17', '12321321', '1231', '2021-07-01', '../../n_residents/image/default.png', '2021-06-17'),
(109, 55, 'troy Michael Ancino Garidos ', '15 wew 555', '1231', '2021-06-17', '12321321', '1231', '2021-07-01', '../../n_residents/image/default.png', '2021-06-17'),
(110, 55, 'troy Michael Ancino Garidos ', '15 wew 555', '1231', '2021-06-17', '12321321', '1231', '2021-07-01', '../../n_residents/image/default.png', '2021-06-17'),
(111, 44, 'reijan12312312 pangit BAYOT 21', 'asd asdada dasdac', 'qwewq', '2021-06-17', 'qwewqqwe', 'qweqw', '2021-06-15', '../../n_residents/image/1623913790.jpg', '2021-06-17'),
(112, 55, 'Troy Michael Ancino Garidos Jr.', '555 Lemon Street, Purok 15', 'Job Application', '2021-07-11', '789456123', 'Barangay North', '2021-07-10', '../../n_residents/image/1625992418779_leeikjun.jpg', '2021-07-11');

-- --------------------------------------------------------

--
-- Table structure for table `officials`
--

CREATE TABLE `officials` (
  `id` int(11) NOT NULL,
  `off_position` varchar(255) NOT NULL,
  `off_name` varchar(255) NOT NULL,
  `off_contact` varchar(255) NOT NULL,
  `off_address` varchar(255) NOT NULL,
  `termStart` date NOT NULL,
  `termEnd` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `img_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `officials`
--

INSERT INTO `officials` (`id`, `off_position`, `off_name`, `off_contact`, `off_address`, `termStart`, `termEnd`, `status`, `img_url`) VALUES
(6, 'Barangay Kagawad', 'GENESAN A. SAULON', '1231232131', 'North', '2021-04-01', '2021-04-28', '', '1629250023849_ahnjeongwon.jpg'),
(7, 'Barangay Kagawad', 'RAFAEL D. BALAGTAS', '12321', 'North', '2021-04-15', '2021-04-29', '', '1629249985546_yongseokmin.jpg'),
(10, 'Barangay Secretary', 'JONA CARIÃ‘O', '12321', 'North', '2021-04-16', '2021-04-29', '', '1619160979926_suzy.jpg'),
(12, 'Barangay Kagawad', 'RODOLFO O. PASCUAL JR.', '010', 'North', '2021-04-14', '2021-04-22', '', '1629250071243_leeikjun.jpg'),
(13, 'Barangay Treasurer', 'JEROME JORDAN', '123', 'North', '2021-04-14', '2021-04-15', '', '1619160996486_doyeon.jpg'),
(14, 'Barangay Kagawad', 'NOEL T. BAUTISTA', 'bsthb', 'North', '2021-04-16', '2021-04-30', '', '1619160935128_kwangsoo.jpg'),
(15, 'Barangay Kagawad', 'IRVIN L. BALIGASA', '123456789', 'North', '2021-04-17', '2021-05-01', '', '1619160946993_mooyeol.jpg'),
(16, 'Barangay Kagawad', 'ANDREA SHANENIAH M. MEJIA', '789', 'North', '2021-04-03', '2021-05-08', '', '1629249969996_chaesonghwa.jpg'),
(17, 'SK Chairperson', 'REA PAULA P. DOMINGUEZ', '123', 'North', '2021-04-07', '2021-05-06', '', '1618834743986_yoojung.jpg'),
(18, 'Barangay Kagawad', 'GRACE B. ALFANTA', '123', 'North', '2021-04-03', '2021-04-09', '', '1619161009478_iu.jpg'),
(22, 'Barangay Captain', 'RENIEL A. GONATO', '12321', 'Dagohoy', '2021-04-28', '2021-04-30', '', '1620931325324_1618669499472_yjg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `residents`
--

CREATE TABLE `residents` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `mid_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `suffix` varchar(255) NOT NULL,
  `sex` varchar(11) NOT NULL,
  `date_of_birth` date NOT NULL,
  `house_number` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `purok` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `citizenship` varchar(255) NOT NULL,
  `health_status` varchar(255) NOT NULL,
  `civil_status` varchar(255) NOT NULL,
  `voter_status` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `tel_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `img_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `residents`
--

INSERT INTO `residents` (`id`, `first_name`, `mid_name`, `last_name`, `suffix`, `sex`, `date_of_birth`, `house_number`, `street`, `purok`, `occupation`, `citizenship`, `health_status`, `civil_status`, `voter_status`, `phone_number`, `tel_number`, `email`, `img_url`) VALUES
(44, 'Juan', 'Reyes', 'Dela Cruz', 'Sr.', 'Male', '1960-07-11', '15', 'Santa Cruz', 'Purok 6', 'Businessman', 'Filipino', '-', 'married', 'Registered', '09123456789', '877000', 'juandelacruz@email.com', '1623913790.jpg'),
(55, 'Troy Michael', 'Ancino', 'Garidos', 'Jr.', 'Male', '1999-11-16', '555', 'Lemon', 'Purok 6', 'Web Developer', 'Filipino', '-', 'Single', 'Registered', '09269883740', '87000', 'newacc.troy@gmail.com', '1625992418779_leeikjun.jpg'),
(61, 'Maria', 'Reyes', 'Cruz', '', 'Female', '1982-08-04', '120', 'Apple', 'Purok 6', 'civil engineer', 'filipino', '', 'married', 'Registered', '+639105821593', '552-7085', 'maria@email.com', '1629248050227_chaesonghwa.jpg'),
(66, 'Andres', 'Bonifacio', 'Rizal', 'Jr.', 'Male', '1992-02-20', '55', 'Mangga', 'Purok 6', 'Policeman', 'Filipino', '-', 'single', 'Not Registered', '09531023180', '8777546', 'andres@email.com', '1629248178181_ahnjeongwon.jpg'),
(71, 'Kathryn', 'Padilla', 'Bernando', '', 'female', '1994-03-17', '87', 'Macopa', 'Purok 12', 'Actress', 'Filipino', '-', 'Single', 'Not Registered', '09531023180', '8995623', 'kath@email.com', '1629248301587_chuminha.jpg'),
(72, 'Daniel', 'Santos', 'Padilla', 'III', 'Male', '1993-06-09', '32', 'Recto', 'Purok 3', 'Actor', 'Filipino', '-', 'Single', 'Not Registered', '09531023180', '45123698', 'daniel@email.com', '1629248402756_yangseokhyung.jpg'),
(81, 'Charo', 'Santos', 'Concio', '', 'female', '1963-06-03', '74', 'Mangga', 'Purok 7', 'Businesswoman', 'Filipino', '-', 'widowed', 'Not Registered', '09531023180', '789456123', 'charo@email.com', '1629248639009_heoseonbin.jpg'),
(83, 'Liza', 'Torres', 'Soberano', '', 'female', '1998-06-10', '88', 'Santa Cruz', 'Purok 6', 'Student', 'Filipino', '-', 'Single', 'Not Registered', '09531023180', '12312', 'liza@email.com', '1629248929371_chaesonghwa.jpg'),
(87, 'Enrique', 'Dela Cruz', 'Gil', 'Jr.', 'Male', '1994-06-08', '21', 'Alerta', 'Purok 11', 'Student', 'Filipino', '-', 'Single', 'Not Registered', '09531023180', '12312', 'enrique@email.com', '1629249001338_kimjunwan.jpg'),
(92, 'Eunice', 'Tiblani', 'Cunanan', '', 'Female', '1999-04-15', '25', 'Mangga', 'Purok 7', 'Student', 'Filipino', '-', 'single', 'Registered', '09531023180', '78465123', 'sherry@email.com', '1629249231020_janggyeoul.jpg'),
(106, 'Vanessa', 'Liquit', 'Pascual', '', 'Female', '1999-09-13', '14', 'Santa Cruz', 'Purok 6', 'Student', 'Filipino', '-', 'Single', 'Registered', '09531023180', '8777829', 'banban@email.com', '1629249288297_chaesonghwa.jpg'),
(130, 'Lia', 'Gomez', 'Barangan', '', 'Female', '2000-03-02', '12', 'Macopa', 'Purok 13', 'Student', 'Filipino', '-', 'single', 'Registered', '09531023180', '1231287', 'lia@email.com', '1629249349689_chuminha.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`, `role`) VALUES
(1, 'admin', '1', '', 'Admin'),
(2, 'sec', '123', 'Vanessa Pascual', 'Secretary');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangay_clearance`
--
ALTER TABLE `barangay_clearance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `officials`
--
ALTER TABLE `officials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `residents`
--
ALTER TABLE `residents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barangay_clearance`
--
ALTER TABLE `barangay_clearance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `officials`
--
ALTER TABLE `officials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `residents`
--
ALTER TABLE `residents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
