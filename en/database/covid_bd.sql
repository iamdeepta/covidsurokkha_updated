-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2021 at 11:42 AM
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
-- Table structure for table `tbl_division`
--

CREATE TABLE `tbl_division` (
  `division_id` int(11) NOT NULL,
  `division_name` varchar(255) NOT NULL,
  `division_cases` text NOT NULL,
  `division_deaths` text NOT NULL,
  `division_most_affected` int(11) NOT NULL,
  `division_less_affected` int(11) NOT NULL,
  `division_remove_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_division`
--

INSERT INTO `tbl_division` (`division_id`, `division_name`, `division_cases`, `division_deaths`, `division_most_affected`, `division_less_affected`, `division_remove_status`) VALUES
(1, 'Dhaka', '123123', '123123', 0, 0, 0),
(2, 'Chittagong', '12312', '1231', 0, 0, 0),
(3, 'Sylhet', '12312', '12312', 0, 0, 0),
(4, 'Khulna', '123123', '124123', 0, 0, 0),
(5, 'Rajshahi', '124123', '12312', 0, 0, 0),
(6, 'Barisal', '12312', '123131', 0, 0, 0),
(7, 'Rangpur', '12312', '123122', 0, 0, 0),
(17, 'Mymensingh', '2342323', '2412', 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hospital_info`
--

CREATE TABLE `tbl_hospital_info` (
  `hospital_id` int(11) NOT NULL,
  `hospital_name` text NOT NULL,
  `general_bed` varchar(255) NOT NULL,
  `icu_bed` varchar(255) NOT NULL,
  `hospital_location` varchar(255) NOT NULL,
  `hospital_full_address` varchar(1000) NOT NULL,
  `hospital_phone_number` text NOT NULL,
  `hospital_area_id` int(11) NOT NULL,
  `hospital_remove_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_hospital_info`
--

INSERT INTO `tbl_hospital_info` (`hospital_id`, `hospital_name`, `general_bed`, `icu_bed`, `hospital_location`, `hospital_full_address`, `hospital_phone_number`, `hospital_area_id`, `hospital_remove_status`) VALUES
(1, 'Evercare Hospital Dhaka', '', '', '', '', '09666-710678', 0, 0),
(2, 'AMZ Hospital Ltd.', '', '', '', '', '10699, 01847331010', 0, 0),
(3, 'Asgar Ali Hospital', '', '', '', '', '09666-710602', 0, 0),
(4, 'Renaissance Hospital And Research Institute Ltd.', '', '', '', '', '01712-259761', 0, 0),
(5, 'ICU Specialized Hospital Limited', '', '', '', '', '01854-560761', 0, 0),
(6, 'CKD & Urology Hospital ( ICU & NEPHROLO )', '', '', '', '', '02-9127306', 0, 0),
(7, 'Bangladesh Specialized Hospital', '', '', '', '', '09666-700100', 0, 0),
(8, 'Dhaka Paediatric-Neonatal & General Hospital', '', '', '', '', '01618-225566', 0, 0),
(9, 'City Hospital & Diagnostic Center', '', '', '', '', '02-8143312', 0, 0),
(10, 'Samorita Hospital Ltd.', '', '', '', '', '48117618, 48117619, 48115405', 0, 0),
(11, 'Ad-Din Women\'s Medical College Hospital', '', '', '', '', '02-9353391', 0, 0),
(12, 'Monowara Hospital Private Limited', '', '', '', '', '01715-839400', 0, 0),
(13, 'Impulse Hospital', '', '', '', '', '01715-016727', 0, 0),
(14, 'Dhaka Community Medical College and Hospital', '', '', '', '', '02-9351190', 0, 0),
(15, 'Al-Karim General Hospital Limited', '', '', '', '', '01926-633987', 0, 0),
(16, 'Baridhara General Hospital', '', '', '', '', '01768-612835', 0, 0),
(17, 'CARe Medical College & Hospital', '', '', '', '', '01703-198859', 0, 0),
(18, 'Al Helal Specialized Hospital, Dhaka.', '', '', '', '', '02-9006820', 0, 0),
(19, 'Aichi Hospital Ltd.', '', '', '', '', '02-44891001', 0, 0),
(20, 'United Hospital Limited', '', '', '', '', '01914-001234', 0, 0),
(21, 'Dhanmondi General And Kidney Hospital Limited', '', '', '', '', '02-9670372', 0, 0),
(22, 'Insaf Barakah Kidney and General Hospital', '', '', '', '', '01716-306631', 0, 0),
(23, 'Islami Bank Hospital, Motijhil', '', '', '', '', '02-9336423', 0, 0),
(24, 'Popular Medical College Hospital', '', '', '', '', '09613-787800', 0, 0),
(25, 'Ibn Sina Specialized Hospital', '', '', '', '', '01823-039800', 0, 0),
(26, 'Rushmono Specialized Hospital', '', '', '', '', '02-49357700', 0, 0),
(27, 'Islami Bank Hospital, Begum Rokeya Sarani', '', '', '', '', '01992-346631', 0, 0),
(28, 'Central Hospital Ltd.', '', '', '', '', '02-9660015', 0, 0),
(29, 'Millennium Heart & General Hospital Ltd.', '', '', '', '', '02-9124046', 0, 0),
(30, 'AL-MANAR HOSPITAL LTD.', '', '', '', '', '02-9121588', 0, 0),
(31, 'Holy Family Red Crescent Medical College Hospital', '', '', '', '', '02-48311721', 0, 0),
(32, 'BIRDEM General Hospital', '', '', '', '', '02-9661551', 0, 0),
(33, 'LABAID Specialized Hospital', '', '', '', '', '09666-710606', 0, 0),
(34, 'Square Hospital', '', '', '', '', '09610-010616', 0, 0),
(35, 'Kingston Hospital', '', '', '', '', '01952-989866', 0, 0),
(36, 'Comfort Diagnostic Centre Pvt. Ltd.', '', '', '', '', '01731-956033', 0, 0),
(37, 'Proshanti Hospital Limited', '', '', '', '', '02-8318699', 0, 0),
(38, 'Japan East West Medical College Hospital', '', '', '', '', '09611-222666', 0, 0),
(39, 'Khidmah Hospital Private Limited', '', '', '', '', '09606-063030', 0, 0),
(40, 'Farazy Hospital Ltd', '', '', '', '', '01766-111137', 0, 0),
(41, 'Kurmitola General Hospital', '', '', '', '', '02-55062388', 0, 0),
(42, 'Japan Bangladesh Friendship Hospital', '', '', '', '', '02-9672277', 0, 0),
(43, 'Nostrum Hospital', '', '', '', '', '01786-355355', 0, 0),
(44, 'Universal Medical College Hospital Ltd.', '', '', '', '', '01841-480000', 0, 0),
(45, 'BIRDEM General Hospital 2 (Child and Mother)', '', '', '', '', '02-41050710', 0, 0),
(46, 'Royal Care And Surgical Hospital', '', '', '', '', '01783-199990', 0, 0),
(47, 'Padma General Hospital Ltd.', '', '', '', '', '02-9661528', 0, 0),
(48, 'Dhaka Central International Medical College', '', '', '', '', '02-9128727', 0, 0),
(49, 'Ahsania Mission Cancer and General Hospital', '', '', '', '', '02-8931141', 0, 0),
(50, 'BIHS Hospital', '', '', '', '', '01783-917151', 0, 0),
(51, 'Uttara Cresent Hospital', '', '', '', '', '01917-704156', 0, 0),
(52, 'Pancare Hospital Ltd.', '', '', '', '', '01844-001024', 0, 0),
(53, 'Memory Medical Centre', '', '', '', '', '02-48314317', 0, 0),
(54, 'Delta Medical College & Hospital', '', '', '', '', '02-9029152', 0, 0),
(55, 'Delta Hospital Ltd.', '', '', '', '', '02-9022410', 0, 0),
(56, 'Islami Bank Central Hospital, Fakirapul', '', '', '', '', '02-9355801', 0, 0),
(57, 'Dhanmondi Clinic (PVT) LTD', '', '', '', '', '01970-476626', 0, 0),
(58, 'Bangabandhu Sheikh Mujib Medical University', '', '', '', '', '09611-677777', 0, 0),
(59, 'Hi-tech Multicare Hospital', '', '', '', '', '01672-241413', 0, 0),
(60, 'Medical College For Women and Hospital', '', '', '', '', '02-8913939', 0, 0),
(61, 'DR. A2MAL HOSPITAL LTD', '', '', '', '', '09612-304304', 0, 0),
(62, 'BRB Hospitals Limited', '', '', '', '', '02-9140333', 0, 0),
(63, 'MARKS Medical College & Hospital', '', '', '', '', '02-8057776', 0, 0),
(64, 'KC Hospital & Diagnostic Center', '', '', '', '', '01777-753464', 0, 0),
(65, 'Metropolitan Medical Centre Ltd.', '', '', '', '', '01718-237035', 0, 0),
(66, 'Better life Hospital', '', '', '', '', '', 0, 0),
(67, 'Green Life Medical College Hospital', '', '', '', '', '02-9612345', 0, 0),
(68, 'Reliance General & Renal Hospital', '', '', '', '', '01849-428888', 0, 0),
(69, 'Anwer Khan Modern Medical College Hospital', '', '', '', '', '02-9670295', 0, 0),
(70, 'Shin Shin Japan Hospital', '', '', '', '', '02-8921429', 0, 0),
(71, 'Sajida Hospital', '', '', '', '', '02-9890513', 0, 0),
(72, 'Hi-Care General Hospital Ltd.', '', '', '', '', '02-55094231', 0, 0),
(73, 'Central Police Hospital', '', '', '', '', '01796-500117', 0, 0),
(74, 'Ashiyan Medical College Hospital', '', '', '', '', '01841-133501', 0, 0),
(75, 'Pro-Active Medical College & Hospital Ltd.', '', '', '', '', '01902-556070', 0, 0),
(76, 'Combined Military Hospital (CMH)', '', '', '', '', '01724-579521', 0, 0),
(77, 'Gonoshasthaya Nagar Hospital', '', '', '', '', '01716-838078', 0, 0),
(78, 'Enam Medical College and Hospital', '', '', '', '', '01716-358146', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_symptom_checker`
--

CREATE TABLE `tbl_symptom_checker` (
  `symptom_checker_id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `main_symptoms` varchar(255) NOT NULL,
  `other_symptoms` varchar(255) NOT NULL,
  `red_zone` varchar(255) NOT NULL,
  `healthcare_provider` varchar(255) NOT NULL,
  `contact_with_positive` varchar(255) NOT NULL,
  `pre_existing_conditions` varchar(255) NOT NULL,
  `risk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`) VALUES
(1, 'admin', 'adminabcd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_division`
--
ALTER TABLE `tbl_division`
  ADD PRIMARY KEY (`division_id`);

--
-- Indexes for table `tbl_hospital_info`
--
ALTER TABLE `tbl_hospital_info`
  ADD PRIMARY KEY (`hospital_id`);

--
-- Indexes for table `tbl_symptom_checker`
--
ALTER TABLE `tbl_symptom_checker`
  ADD PRIMARY KEY (`symptom_checker_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_division`
--
ALTER TABLE `tbl_division`
  MODIFY `division_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_hospital_info`
--
ALTER TABLE `tbl_hospital_info`
  MODIFY `hospital_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `tbl_symptom_checker`
--
ALTER TABLE `tbl_symptom_checker`
  MODIFY `symptom_checker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
