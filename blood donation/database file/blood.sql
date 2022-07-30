-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2022 at 02:15 PM
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
-- Database: `blood`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `name` varchar(30) NOT NULL,
  `bg` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `number` varchar(30) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `mandal` varchar(30) NOT NULL,
  `district` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `pincode` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `status` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `bg`, `email`, `number`, `dob`, `address`, `mandal`, `district`, `state`, `country`, `pincode`, `password`, `status`) VALUES
('vamsi', 'O +ve', 'giribabu00004@gmail.com', '9390812962', '2006-06-14', 'Peyanakandriga (vill)', 'chittoor', 'chittoor', 'Andhra Pradesh', 'India', '517004', 'Giri@123', 'yes'),
('Giri ba', 'B +ve', 'kkkkuyii@ghfgjj', '9390812962', '2022-06-03', 'Deva Rajulu M', 'gd nellore', 'chittoor', 'Andhra Pradesh', 'India', '517004', 'yuyututuuyuyuyu', 'yes'),
('CBSE', 'A -ve', 'manjal03@gmail.com', '9390812962', '2022-06-29', 'peyanakandriga (vill)', 'gd nellore', 'chittoor', 'Andra Pradesh', 'India', '517004', 'bvcxzasr', 'yes'),
('Giri babu', 'B +ve', 'manjalamgirbu003@gmail.com', '9390812962', '2022-06-22', 'Deva Rajulu M', 'gd nellore', 'Chittoor', 'Andhra Pradesh', 'India', '517004', 'fghjdfghjk', 'yes'),
('giri', 'O +ve', 'manjalamgiribabu003@gmail.com', '9390812962', '2001-05-06', 'Peyanakandriga (vill)', 'chittoor', 'chittoor', 'Andhra Pradesh', 'India', '517004', 'Giri@123', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD UNIQUE KEY `email` (`email`) USING BTREE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
