-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2021 at 10:22 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid_bd`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_daily_death_date`
--

CREATE TABLE `tbl_daily_death_date` (
  `daily_death_date_id` int(11) NOT NULL,
  `daily_death_date_en` varchar(255) NOT NULL,
  `daily_death_date_bn` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_daily_death_date`
--

INSERT INTO `tbl_daily_death_date` (`daily_death_date_id`, `daily_death_date_en`, `daily_death_date_bn`) VALUES
(1, '14 July', '১৪ জুলাই');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_daily_death_date`
--
ALTER TABLE `tbl_daily_death_date`
  ADD PRIMARY KEY (`daily_death_date_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_daily_death_date`
--
ALTER TABLE `tbl_daily_death_date`
  MODIFY `daily_death_date_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
