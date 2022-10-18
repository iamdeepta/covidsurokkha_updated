-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2021 at 07:40 PM
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
-- Table structure for table `tbl_doctors`
--

CREATE TABLE `tbl_doctors` (
  `doctor_id` int(11) NOT NULL,
  `doctor_name` varchar(255) NOT NULL,
  `doctor_post` varchar(255) NOT NULL,
  `doctor_consultation_time` varchar(255) NOT NULL,
  `doctor_hospital` varchar(255) NOT NULL,
  `doctor_image` varchar(255) NOT NULL,
  `doctor_remove_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_doctors`
--

INSERT INTO `tbl_doctors` (`doctor_id`, `doctor_name`, `doctor_post`, `doctor_consultation_time`, `doctor_hospital`, `doctor_image`, `doctor_remove_status`) VALUES
(1, 'Ziaul Karim', 'MBBS', '12 pm', 'Monowara Hospital', 'DR.-ZIAUL-KARIM.jpg', 0),
(2, 'Sharmin Akhter', 'MBBS', '5pm', 'Rushmono Hospital', '1527920169_2_dr reyan.jpg', 1),
(3, 'Sharmin Akhter', 'MBBS', '5 pm', 'Rushmono Hospital', '1571044565.jpg', 0),
(4, 'Hasan Rana', 'FCGP', '3 pm', 'Farazi Hospital', '1557718137.jpg', 0),
(5, 'Tinni Talukdar', 'MBBS', '7 pm', 'Apollo Hospital', '1527920169_2_dr reyan.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_doctors`
--
ALTER TABLE `tbl_doctors`
  ADD PRIMARY KEY (`doctor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_doctors`
--
ALTER TABLE `tbl_doctors`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
