-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 06, 2021 at 01:34 PM
-- Server version: 10.3.28-MariaDB-log-cll-lve
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covizwvz_covidsheba`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ambulance`
--

CREATE TABLE `tbl_ambulance` (
  `ambulance_id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `service_area` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `ambulance_remove_status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_ambulance`
--

INSERT INTO `tbl_ambulance` (`ambulance_id`, `company_name`, `service_area`, `contact_number`, `ambulance_remove_status`) VALUES
(1, 'abcds', 'dhaka', '1232', 1),
(2, 'sada', 'dha', '1231231', 1),
(3, 'Sheba', 'Moghbazar', '1931-23223', 1),
(4, 'Labaid Hospital Ambulance Service', 'Labaid Hospital Ambulance Service', '01713330088', 0),
(5, 'Bangladesh Medical College Hospital', 'Dhanmondi', '+880-2-9118202', 0),
(6, 'CMH', 'Cantonement', '+880-2-9871469', 0),
(7, 'Dhaka Eye Hospital', 'Mirpur', '+880-2-8014476', 0),
(8, 'Dhaka Medical College Hospital', 'Bakshibajar', '+880-2-8626812', 0),
(9, 'Dhaka Renal Centre & General Hospital', 'Mirpur', '+880-2-8610928', 0),
(10, 'Evercare Hospitals Dhaka', 'Bashundhara', '+8801714-090000', 0),
(11, 'Apanjon Ambulance Service', 'Dhaka', '029125420', 0),
(12, 'Al-Markazul Islami Ambulance Service', 'Mohammadpur', '029127867', 0),
(13, 'Life Line Healthcare Limited', 'Lalmatia', '+880-2-8155550', 0),
(14, 'Lab-Aid Cardiac Hospital', 'Banani – Baridhara – Uttara Rayer', '+8801713333337', 0),
(15, 'Lab-Aid Cardiac Hospital', 'Dhanmondi - Azimpur - Shahbagh', '+8801713333337', 0),
(16, 'Lab-Aid Cardiac Hospital', 'Bazaar - Lalmatia - Mohammadpur', '+8801713333337', 0),
(17, 'Rafa Ambulance Service', 'Dhaka', '029110663', 0),
(18, 'Green Ambulance Service', 'Dhanmondi', '029334121', 0),
(19, 'BIRDEM', 'Shahabag Square', '029661551', 0),
(20, 'Dhaka City Corporation', 'Mirpur Control Room', '029004734', 0),
(21, 'Dhaka City Corporation', 'Nagar Bhaban Control Room', '029556014', 0),
(22, 'Dhaka Medical College Hospital', 'Bakshibazar Area', '505025', 1),
(23, 'Alif Ambulance', 'Panthapath', '028117576', 0),
(24, 'Ad-Din Hospital', 'Moghbazar', '+880-2-9362929', 0),
(25, 'Anjuman-E-Mufidul Islam', 'Kakrail', '+880-2-9336611', 0),
(26, 'Bangabondhu Sheikh Mujib Medical University (BSMMU)', 'Shahbag', '+88-01866-637482', 0),
(27, 'Fire Brigade Ambulance Service', 'Dhaka', '+880-2-9555555', 0),
(28, 'Red Crescent Society', 'Moghbazar', '029330188', 0),
(29, 'Sir Salimullah Medical College & Mitford Hospital Ambulance Service', 'Mitford', '+880-2-7319002', 0),
(30, 'Shahid Suhrawardi Hospital, Ambulance Service', 'Sher-E-Bangla Nagar', '029130800', 0),
(31, 'Shishu Hospital, Ambulance Service', 'Sher-E-Bangla Nagar', '028116061', 0),
(32, 'South Asian Hospital, Ambulance Service', 'Panthapath', '028616565', 0),
(33, 'National Heart Foundation Hospital', 'Mirpur', '+880-2-9801874', 0),
(34, 'Holy Family Red Crescent Hospital', 'Moghbazar', '+880-2-8311721', 0),
(35, 'ICDDRB', 'Mohakhali', '+880-2-8811751', 0),
(36, 'Islamia Eye Hospital', 'Farmgate', '+880-2-9119315', 0),
(37, 'Prime General Hospital', 'Tongi', '+880-2-9562267', 0),
(38, 'Red Crescent Society Ambulance Service', 'Moghbazar', '+880-2-9330188', 0),
(39, 'United Hospital', 'Gulshan', '+880-2-8836000', 0),
(40, 'Medinova Medical Service Ltd', 'Dhanmondi', '028113721', 0),
(41, 'Monowara Hospital Ambulance Service', 'Shiddheshwari', '+8801715839400', 0),
(42, 'National Heart Institute, Ambulance Service', 'Dhaka', '9122560', 0),
(43, 'Square Hospital', 'Panthapath', '+880-2-8144466', 0),
(44, 'Day-Night Ambulance Service', 'Dhaka', '029123073', 0),
(45, 'Orthopedic Hospital', 'Ring Road', '+880-2-9112150', 0),
(46, 'Shefa Ambulance Services', 'Mohammadpur', '029111758', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cases_deaths`
--

CREATE TABLE `tbl_cases_deaths` (
  `cases_deaths_id` int(11) NOT NULL,
  `cases` int(11) NOT NULL,
  `deaths` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cases_deaths`
--

INSERT INTO `tbl_cases_deaths` (`cases_deaths_id`, `cases`, `deaths`, `date`) VALUES
(1, 5727, 85, '2021-06-21');

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_division`
--

INSERT INTO `tbl_division` (`division_id`, `division_name`, `division_cases`, `division_deaths`, `division_most_affected`, `division_less_affected`, `division_remove_status`) VALUES
(1, 'Dhaka', '450556', '38', 0, 0, 0),
(2, 'Chittagong', '128519', '11', 0, 0, 0),
(3, 'Sylhet', '27447', '1', 0, 0, 0),
(4, 'Khulna', '57529', '39', 0, 0, 0),
(5, 'Rajshahi', '60586', '23', 0, 0, 0),
(6, 'Barisal', '21070', '3', 0, 0, 0),
(7, 'Rangpur', '28613', '15', 0, 0, 0),
(17, 'Mymensingh', '2342323', '2412', 0, 0, 1);

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_doctors`
--

INSERT INTO `tbl_doctors` (`doctor_id`, `doctor_name`, `doctor_post`, `doctor_consultation_time`, `doctor_hospital`, `doctor_image`, `doctor_remove_status`) VALUES
(1, 'Ziaul Karim', 'MBBS', '12 pm', 'Monowara Hospital', 'DR.-ZIAUL-KARIM.jpg', 1),
(2, 'Sharmin Akhter', 'MBBS', '5pm', 'Rushmono Hospital', '1527920169_2_dr reyan.jpg', 1),
(3, 'Sharmin Akhter', 'MBBS', '5 pm', 'Rushmono Hospital', '1571044565.jpg', 1),
(4, 'Hasan Rana', 'FCGP', '3 pm', 'Farazi Hospital', '1557718137.jpg', 1),
(5, 'Tinni Talukdar', 'MBBS', '7 pm', 'Apollo Hospital', '1527920169_2_dr reyan.jpg', 1),
(10, 'Maj. Dr. SK. Habibur Rahman (RAO)', 'N/A', '7 days a week (12 pm - 1 pm & 4 pm - 6 pm)', 'N/A', 'doctors-1.png', 1),
(7, 'DR. A.N.H Hafizur Rahman', 'MBBS, MDU, CCD, FCGP', '7 days a week (12 pm - 12 am)', 'Holy Family Red Crescent Medical College Hospital', 'hafiz.jpg', 0),
(8, 'DR. Khaled Bin Altaf', 'MD (CIS) P.G.T (Paediatrics & Medicine)', '6 days a week: except Friday (8 am - 12 pm)', 'Holy Family Red Crescent Medical College Hospital', 'altaf.png', 0),
(9, 'DR. Muktadir Rajib', 'MBBS, CCD, PGT (Medicine, Skin, Sexual, Surgery)', 'Sunday, Monday, Wednesday (6 pm - 9 pm)', 'Medinova Hospital', 'rajib.png', 0),
(6, 'Maj. Dr. SK. Habibur Rahman (RAO)', 'MBBS, GLO, MCPS, FCPS, ENT, BCPS, PGT, FHNOS', '7 days a week (12 pm - 1 pm & 4 pm - 6 pm)', 'Ex-ENT SPI & Head Neck Surgeon, CMH, Dhaka', 'habib.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hospital_info`
--

CREATE TABLE `tbl_hospital_info` (
  `hospital_id` int(11) NOT NULL,
  `hospital_name` text NOT NULL,
  `general_bed` varchar(255) NOT NULL,
  `icu_bed` int(11) NOT NULL,
  `hospital_location` varchar(255) NOT NULL,
  `hospital_full_address` varchar(1000) NOT NULL,
  `hospital_phone_number` text NOT NULL,
  `updated_date` varchar(255) NOT NULL,
  `hospital_area_id` int(11) NOT NULL,
  `hospital_remove_status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_hospital_info`
--

INSERT INTO `tbl_hospital_info` (`hospital_id`, `hospital_name`, `general_bed`, `icu_bed`, `hospital_location`, `hospital_full_address`, `hospital_phone_number`, `updated_date`, `hospital_area_id`, `hospital_remove_status`) VALUES
(1, 'Evercare Hospital', '5', 2, 'Bashundhara Residential Area', 'Plot: 81, Block: E, Dhaka - 1229', '09666-710678', '2021-07-06 01:17 pm', 0, 0),
(2, 'AMZ Hospital Ltd.', '', 0, '', '', '10699, 01847331010', '', 0, 1),
(3, 'Asgar Ali Hospital', '22', 0, 'Gendaria', 'Playground, 111/1/A Distillery Road, Gendaria, Beside Dhupkhola, Dhaka - 1204', '09666-710602', '2021-07-06 01:06 pm', 0, 0),
(4, 'Renaissance Hospital And Research Institute Ltd.', 'N/A', 0, 'Dhanmondi', '4 Road No 13/2, Dhaka - 1205', '01712-259761', '', 0, 0),
(5, 'ICU Specialized Hospital Limited', 'N/A', 0, 'Puran Dhaka', 'Nawab Katra Ln - Dhaka, Bangladesh - 1000', '01854-560761', '', 0, 0),
(6, 'CKD & Urology Hospital ( ICU & NEPHROLO )', '', 0, '', '', '02-9127306', '', 0, 1),
(7, 'Bangladesh Specialized Hospital Limited', '0', 1, 'Shahjadpur', 'Road-4, Zip Code, Dhaka, Bangladesh - 1215, Shahjadpur', '09666-700100', '2021-07-05 12:37 pm', 0, 0),
(8, 'Dhaka Paediatric-Neonatal & General Hospital', '', 0, '', '', '01618-225566', '', 0, 1),
(9, 'City Hospital & Diagnostic Center', '14', 0, 'Dhanmondi', 'House No#1, 8 Satmasjid Road, Dhaka, Bangladesh - 1207', '02-8143312', '2021-07-06 01:14 pm', 0, 0),
(10, 'Samorita Hospital Ltd.', '5', 4, 'Panthapath', '89/1, Panthapath, Dhaka - 1215', '0248117618', '2021-07-06 01:49 pm', 0, 0),
(11, 'Ad-Din Medical College Hospital', '15', 5, 'Moghbazar', '2 Bara Moghbazar, Outer Circular Road, Dhaka - 1217', '09612-345666', '2021-07-06 01:04 pm', 0, 0),
(12, 'Monowara Hospital Limited', '2', 2, 'Siddheshwari', '54, Siddheshwari Road, Dhaka, Bangladesh -1217', '01715-839400', '2021-07-06 01:32 pm', 0, 0),
(13, 'Impulse Hospital', '183', 30, 'Tejgaon', 'Address: 304/E, Tejgaon Industrial Area, Dhaka - 1208', '02-9831034', '2021-07-06 01:23 pm', 0, 0),
(14, 'Dhaka Community Medical College and Hospital', '', 0, '', '', '02-9351190', '', 0, 1),
(15, 'Al-Karim General Hospital Limited', '', 0, '', '', '01926-633987', '', 0, 1),
(16, 'Baridhara General Hospital', '', 0, '', '', '01768-612835', '', 0, 1),
(17, 'CARe Medical College & Hospital', '8', 7, 'Mohammadpur', '1/5, Block-B ( College gate) Mohammadpur, Dhaka - 1207', '02-44822201', '2021-07-06 01:10 pm', 0, 0),
(18, 'Al Helal Specialized Hospital, Dhaka.', '', 0, '', '', '02-9006820', '', 0, 1),
(19, 'Aichi Hospital Ltd.', '', 0, '', '', '02-44891001', '', 0, 1),
(20, 'United Hospital Limited', '6', 6, 'Gulshan', 'Plot 15, Road 71, Gulshan, Dhaka - 1212', '+88028836444', '2021-07-06 01:57 pm', 0, 0),
(21, 'Dhanmondi General And Kidney Hospital Limited', '10', 6, 'Dhanmondi', 'Green Road, House - 12 , Road #7, Dhanmondi, Dhaka, Bangladesh -1205', '02-9670372', '2021-07-05 12:42 pm', 0, 0),
(22, 'Insaf Barakah Kidney and General Hospital', '12', 0, 'Moghbazar', '11, Shahid Tajuddin Ahmed Sharani Moghbazar, Dhaka-1217', '01716-306631', '2021-07-05 12:47 pm', 0, 0),
(23, 'Islami Bank Hospital, Motijhil', '', 0, '', '', '02-9336423', '', 0, 1),
(24, 'Popular Medical College & Hospital', '32', 0, 'Dhanmondi', 'House: 08, Road: 02, Dhanmondi, Dhaka - 1205', '09613-787800', '2021-07-06 01:43 pm', 0, 0),
(25, 'Ibn Sina Medical College Hospital', '11', 0, 'Kallyanpur', '1/1-B, Kallyanpur, Dhaka - 1216', '02-9010396', '2021-07-05 12:46 pm', 0, 0),
(26, 'Rushmono Specialized Hospital', '', 0, '', '', '02-49357700', '', 0, 1),
(27, 'Islami Bank Hospital, Begum Rokeya Sarani', '', 0, '', '', '01992-346631', '', 0, 1),
(28, 'Central Hospital Ltd.', '', 0, '', '', '02-9660015', '', 0, 1),
(29, 'Millennium Heart & General Hospital Ltd.', '4', 5, 'Dhanmondi', '4/9, Block-F, Lalmatia, Dhaka, Bangladesh', '+88029124046', '2021-07-06 01:31 pm', 0, 0),
(30, 'AL-MANAR HOSPITAL LTD.', '', 0, '', '', '02-9121588', '', 0, 1),
(31, 'Holy Family Red Crescent Medical College Hospital', '48', 6, 'Moghbazar', '1, Eskaton Garden Road, Bara Moghbazar, Dhaka, Bangladesh - 1000', '02-48311721', '2021-07-06 01:20 pm', 0, 0),
(32, 'BIRDEM General Hospital', '80', 1, 'Shahbagh', '122 Kazi Nazrul Islam Avenue, Shahbagh, Dhaka, Bangladesh -1000', '02-9661551', '2021-07-06 01:10 pm', 0, 0),
(33, 'Labaid Hospital', '1', 0, 'Dhanmondi', 'House- 06, Road-04, Dhanmondi, Dhaka - 1205', '09666-710606', '2021-07-06 01:27 pm', 0, 0),
(34, 'Square Hospital', '32', 4, 'Panthapath', '18F, Bir Uttam Qazi Nuruzzaman Sarak, West Panthapath, Dhaka, Bangladesh - 1205', '+880-28144400', '2021-07-06 01:54 pm', 0, 0),
(35, 'Kingston Hospital', '', 0, '', '', '01952-989866', '', 0, 1),
(36, 'Comfort Diagnostic Centre Pvt. Ltd.', '', 0, '', '', '01731-956033', '', 0, 1),
(37, 'Proshanti Hospital Limited', '6', 5, 'Malibagh', 'House No -6,Ground Floor ,Shantibagh Road, Malibagh Mor ,Ramna, Dhaka, Bangladesh', '02-8318699', '2021-07-06 01:47 pm', 0, 0),
(38, 'Japan East West Medical College Hospital', '38', 9, 'Turag', 'Aichi Nagar, JBCS Sarani Horirampur, Turag, Dhaka, 1711', '09611-222666', '2021-07-06 01:25 pm', 0, 0),
(39, 'Khidmah Hospital Private Limited', '', 0, '', '', '09606-063030', '', 0, 1),
(40, 'Farazy Hospital Ltd', '', 0, '', '', '01766-111137', '', 0, 1),
(41, 'Kurmitola General Hospital', '0', 0, 'Kurmitola', 'New Airport Road, Kurmitola, Dhaka, Bangladesh, Cantonment, Dhaka-1206', '02-55062388', '2021-06-28 01:06 pm', 0, 0),
(42, 'Japan Bangladesh Friendship Hospital', '22', 0, 'Dhanmondi', 'Zigatola Bus Stand, 55 Satmasjid Road, Dhaka 1209', '02-9672277', '2021-07-06 01:24 pm', 0, 0),
(43, 'Nostrum Hospital', '', 0, '', '', '01786-355355', '', 0, 1),
(44, 'Universal Medical College Hospital Ltd.', '5', 6, 'Mohakhali', '74G/75, Pea-cock Square, New airport road, Mohakhali. Dhaka 1215', '+8809606111222', '2021-07-06 01:57 pm', 0, 0),
(45, 'BIRDEM General Hospital 2 (Child and Mother)', '', 0, '', '', '02-41050710', '', 0, 1),
(46, 'Royal Care And Surgical Hospital', '', 0, '', '', '01783-199990', '', 0, 1),
(47, 'Padma General Hospital Ltd.', '', 0, '', '', '02-9661528', '', 0, 1),
(48, 'Dhaka Central International Medical College & Hospital', '14', 0, 'Mohammadpur', '2/1 Ring Road, Dhaka 1207', '02-9128727', '2021-07-06 01:16 pm', 0, 0),
(49, 'Ahsania Mission Cancer and General Hospital', '', 0, '', '', '02-8931141', '', 0, 1),
(50, 'BIHS Hospital', '', 0, '', '', '01783-917151', '', 0, 1),
(51, 'Uttara Cresent Hospital', '0', 0, 'Uttara', '40 Rabindra Sarani, 7 Uttara, Dhaka, Bangladesh - 1230', '01917704150', '2021-06-26 01:10 pm', 0, 0),
(52, 'Pancare Hospital Ltd.', '', 0, '', '', '01844-001024', '', 0, 1),
(53, 'Memory Medical Centre', '', 0, '', '', '02-48314317', '', 0, 1),
(54, 'Delta Medical College & Hospital', '', 0, '', '', '02-9029152', '', 0, 1),
(55, 'Delta Hospital Ltd.', '', 0, '', '', '02-9022410', '', 0, 1),
(56, 'Islami Bank Central Hospital, Fakirapul', '', 0, '', '', '02-9355801', '', 0, 1),
(57, 'Dhanmondi Clinic (PVT) LTD', '1', 4, 'Dhanmondi', 'House #2, Road-8, Dhanmondi R/A, Dhaka, Bangladesh', '01970-476626', '2021-07-06 01:16 pm', 0, 0),
(58, 'Bangabandhu Sheikh Mujib Medical University', '83', 0, 'Merul Badda', 'Building-10, Road- 56, Badda, Dhaka, Bangladesh', '09611-677777', '2021-07-06 01:08 pm', 0, 0),
(59, 'Hi-tech Multicare Hospital', '', 0, '', '', '01672-241413', '', 0, 1),
(60, 'Medical College For Women and Hospital', '', 0, '', '', '02-8913939', '', 0, 1),
(61, 'DR. Azmal Hospital Limited', '8', 0, 'Mirpur', 'House No # 5, Road No # 5 Block A, Section -6 Mirpur, Dhaka - 1216', '09612-304304', '2021-07-05 12:42 pm', 0, 0),
(62, 'BRB Hospitals Limited', '', 0, '', '', '02-9140333', '', 0, 1),
(63, 'MARKS Medical College & Hospital', '', 0, '', '', '02-8057776', '', 0, 1),
(64, 'KC Hospital & Diagnostic Center', '', 0, '', '', '01777-753464', '', 0, 1),
(65, 'Metropolitan Medical Centre Ltd.', '', 0, '', '', '01718-237035', '', 0, 1),
(66, 'Better life Hospital', '49', 17, 'Rampura', 'East Rampura, Dhaka, Bangladesh', '09639786786', '2021-07-06 01:09 pm', 0, 0),
(67, 'Green Life Medical College Hospital', '0', 3, 'Green Road', 'MAK Khan Tower 31 and 31/1, Bir Uttam K.M. Shafiullah Sarak (Green Road) Dhaka - 1205', '+88-029612345', '2021-07-06 01:19 pm', 0, 0),
(68, 'Reliance General & Renal Hospital', '', 0, '', '', '01849-428888', '', 0, 1),
(69, 'Anwer Khan Modern Medical College Hospital', '', 0, '', '', '02-9670295', '', 0, 1),
(70, 'Shin Shin Japan Hospital', '', 0, '', '', '02-8921429', '', 0, 1),
(71, 'Sajida Hospital', '', 0, '', '', '02-9890513', '', 0, 1),
(72, 'Hi-Care General Hospital Ltd.', '0', 0, 'Uttara', 'House#24 & 26 , Lake Drive Road, Sector#7, Uttara Model Town -1230, Dhaka, Bangladesh', '+880255094231', '2021-07-05 12:44 pm', 0, 0),
(73, 'Central Police Hospital', '417', 7, 'Rajarbag', '2 DIT Avenue - Dhaka, Bangladesh - 1000', '01320-225598', '2021-06-26 10:27 pm', 0, 0),
(74, 'Ashiyan Medical College Hospital', '', 0, '', '', '01841-133501', '', 0, 1),
(75, 'Pro-Active Medical College & Hospital Ltd.', '', 0, '', '', '01902-556070', '', 0, 1),
(76, 'Combined Military Hospital (CMH)', '', 0, '', '', '01724-579521', '', 0, 1),
(77, 'Gonoshasthaya Nagar Hospital', '0', 1, 'Dhanmondi', 'Road # 6, House # 14/E Dhanmondi – 1205', '+8801711847719', '2021-07-06 01:19 pm', 0, 0),
(78, 'Enam Medical College and Hospital', '', 0, '', '', '01716-358146', '', 0, 1),
(81, '250 Beded TB Hospital', '156', 6, 'Shyamoli', '250 Bedded TB Hospital , Shyamoli, Dhaka, Bangladesh -1207', '02-9111892', '2021-07-06 01:04 pm', 0, 0),
(82, 'AMZ Hospital', '0', 1, 'Uttar Badda', 'Cha- 80/3, Shwadhinata Sarani (Progati Sarani), Uttar Badda, Dhaka -1212', '10699', '2021-07-03 12:20 pm', 0, 0),
(83, 'Center for Kidney Diseases and Urology Hospital', 'N/A', 0, 'Shyamoli', 'House #32, Road-03, Shamoli, Dhaka, Bangladesh', '02-9127306', '', 0, 0),
(84, 'Bangladesh Institute of Health Sciences General Hospital', '15', 0, 'Mirpur', '125/1 Darus Salam, Mirpur Dhaka, Bangladesh -1216', '8035501', '2021-07-05 12:36 pm', 0, 0),
(85, 'Bangladesh Medical College & Hospital', '7', 1, 'Dhanmondi', 'House # 34, Road # 14/A, Dhanmondi R/A, Dhaka - 1209', '880-2-44812101', '2021-07-06 01:09 pm', 0, 0),
(86, 'Dhaka Medical College Hospital', '89', 0, 'Ramna', '100 Ramna, Central Shaheed Minar Area, Bakshi Bazar, Dhaka,Bangladesh', '+880-2-8626812', '2021-07-06 01:16 pm', 0, 0),
(87, 'DNCC Dedicated Covid-19 Hospital', '478', 88, 'Mohakhali', '72/A, Shaheed Tajuddin Ahmed Sharani, Mohakhali, Dhaka, Bangladesh - 1212', '+8809611805414', '2021-07-06 01:16 pm', 0, 0),
(88, 'Famous Specialized Hospital', '15', 8, 'Banasree', 'House # 05, Block # H, Main Road, Meradia Bazar, Banasree, Dhaka, Bangladesh', '+8801959333666', '2021-07-06 01:18 pm', 0, 0),
(89, 'Infectious Diseases Hospital', '47', 0, 'Mohakhali', 'Mohakhali, Dhaka, Bangladesh - 1212', '01936415368', '2021-07-05 12:47 pm', 0, 0),
(90, 'Kuwait Bangladesh Friendship Govt. Hospital', '34', 0, 'Uttara', '319 Isakha Avenue,Road-6,Beside Rajuk College, Uttara, Dhaka, Bangladesh', '01920-294419', '2021-07-06 01:26 pm', 0, 0),
(91, 'Mugda Medical College and Hospital', '160', 0, 'Khilgaon', 'Hazi Kadam Ali Road, Mugda, Khilgaon, Dhaka - 1214', '+88027276032', '2021-07-06 01:32 pm', 0, 0),
(92, 'National Heart Foundation Hospital & Research Institute', '18', 0, 'Mirpur', 'Plot-7/2, Section-2, Mirpur, Dhaka-1216', '+58054708', '2021-07-05 12:56 pm', 0, 0),
(93, 'National Institute of Cardiovascular Diseases', '137', 2, 'Mohammadpur', 'Sher-e-Bangla Nagar, Dhaka - 1207', '+88-02-9122560', '2021-07-06 01:36 pm', 0, 0),
(94, 'National Institute of Diseases of the Chest and Hospital', '19', 3, 'Mohakhali', 'Mohakhali, Dhaka - 1212', '+88-02-55067131', '2021-07-06 01:37 pm', 0, 0),
(95, 'National Institute of Ophthalmology', '100', 0, 'Mohammadpur', 'Sher-e-Bangla Nagar, Dhaka, Bangladesh - 1207', '+8802-9118336', '2021-06-26 10:32 pm', 0, 0),
(96, 'Sarkari Karmachari Hospital, Fulbaria', '39', 1, 'Fulbaria', 'Fulbaria, Dhaka, Bangladesh - 1000-1200', '+8802-9558017', '2021-07-06 01:49 pm', 0, 0),
(97, 'Shahabuddin Medical College and Hospital', '170', 19, 'Gulshan', 'House No-12, Road No-113/A, Gulshan Model Town, Gulshan-2, Dhaka-1212', '02-222262594', '2021-07-06 01:49 pm', 0, 0),
(98, 'Shaheed Suhrawardy Medical College Hospital', '84', 0, 'Mohammadpur', 'Sher-E-Bangla Nagar, Dhaka, Bangladesh - 1207', '02-8144048', '2021-07-06 01:51 pm', 0, 0),
(99, 'Sheikh Russel Gastro Liver Institute and Hospital', '139', 1, 'Mohakhali', 'TB Gate, Near NIDCH, Mohakhali', '01819221115', '2021-07-05 01:16 pm', 0, 0),
(100, 'Yamagata Dhaka Friendship Hospital', '6', 6, 'Rampura', 'Plot # 823, Road #3, Avenue #8, Banasree, Rampura, Dhaka-1219', '01876-069762', '2021-07-06 01:58 pm', 0, 0),
(101, 'Al Haramain Hospital Private Limited, Sylhet', '0', 0, 'Sylhet', 'N206, Sylhet, Sylhet Division, Sylhet 3100', '+880821729981', '2021-07-06 01:05 pm', 0, 0),
(102, 'AL-MANAR HOSPITAL LTD', '7', 5, 'Mohammadpur', 'Plot No: Umo, Block No: Rossoi, Satmosjid Road, Mohammadpur, Dhaka -1207', '02-9121387', '2021-07-02 12:20 pm', 0, 0),
(103, 'Anwar Khan Modern Medical College Hospital', '72', 17, 'Dhanmondi', 'House # 17,Road # 8,Dhanmondi R/A. Dhaka -1205', '+8802-58616074', '2021-07-06 01:05 pm', 0, 0),
(104, 'Asian Hospital (Pvt.) Limited, Coxs Bazar', '0', 7, 'Chittagong', 'Thana Rastar Matha, Chiringa, Chakaria, Cox\'s Bazar', '01717-690067', '2021-07-06 01:06 pm', 0, 0),
(105, 'Bagerhat District Hospital, Bagerhat', '25', 0, 'Bagerhat', 'Sadar Hospital Road, Bagerhat', '01711008607', '2021-07-06 01:06 pm', 0, 0),
(106, 'Bandarban District Hospital, Bandarban', '88', 0, 'Bandarban', 'Bandarban', '01746215350', '2021-07-06 01:06 pm', 0, 0),
(107, 'Bangabandhu Memorial Hospital, Chittagong', '23', 3, 'Chittagong', 'Zakir Hossain Road, U.S.T.C Foy’s lake, Chittagong', '031-659070', '2021-07-06 01:07 pm', 0, 0),
(108, 'Bangladesh Institute of Tropical and Infectious Diseases, Fouzdarhat', '19', 5, 'Fouzdarhat', 'Salimpur, Jafarabad, Fouzderhat, Sitakunda Chittagong - 4317', '0244075160', '2021-07-06 01:09 pm', 0, 0),
(109, 'Barguna District Hospital, Barguna', '0', 0, 'Barguna', 'Hospital Road, Barguna Sadar, Barguna', '01711076416', '2021-07-06 01:09 pm', 0, 0),
(110, 'Bhola District Hospital, Bhola', '80', 3, 'Barisal', 'Western Para Road, Bhola Sadar, Bhola, Barisal Division', '01711042710', '2021-07-06 01:10 pm', 0, 0),
(111, 'Brahmanbaria 250 Bed District Sadar Hospital', '31', 0, 'Brahmanbaria', 'Sadar Hospital Road, Brahmanbaria 3400', '0851-59282', '2021-07-05 12:38 pm', 0, 0),
(112, 'Chandpur 250 Bed General Hospital', '7', 0, 'Chandpur', 'Kobi Nazrul Road, Chandpur 3600', '01865174658', '2021-07-06 01:13 pm', 0, 0),
(113, 'Chapai Nawabganj 250 bed Adhunik Sadar Hospital', '0', 0, 'Rajshahi', 'Sadar Hospital, Chapai Nawabganj', '01730324804', '2021-07-03 12:36 pm', 0, 0),
(114, 'Chittagong General Hospital, Chittagong', '59', 3, 'Chittagong', 'Andarkillah, Chittagong', '+88031611407', '2021-07-06 01:13 pm', 0, 0),
(115, 'Chittagong Maa O Shishu General Hospital', '56', 0, 'Chittagong', 'Agrabad, Chittagong 4100, Bangladesh', '+880-31-2511432', '2021-06-29 10:50 pm', 0, 0),
(116, 'Chittagong Medical College Hospital, Chittagong', '19', 4, 'Chittagong', '57 K.B. Fazlul Kader Road, Chittagong 4203', '031-630335', '2021-07-06 01:14 pm', 0, 0),
(117, 'Chittagong Metropolitan Hospital Limited', '9', 2, 'Chittagong', '698, 752 O.R. Nizam Road, Chittagong 4001', '01814-651077', '2021-07-04 12:35 pm', 0, 0),
(118, 'Chuadanga District Hospital, Chuadanga', '79', 0, 'Khulna', 'Sadar Hospital, Chuadanga', '01711448880', '2021-07-06 01:14 pm', 0, 0),
(119, 'CMP-Bidyanondo Field Hospital', '16', 0, 'Chittagong', 'Sagorika Road, Chittagong', '01844-240403', '2021-07-06 01:14 pm', 0, 0),
(120, 'Cox\'s Bazar 250 Bed District Sadar Hospital', '61', 4, 'Chittagong', 'Cox\'s Bazar, Chittagong', '01730324770', '2021-07-06 01:15 pm', 0, 0),
(121, 'CSCR Hospital, Chittagong', '4', 2, 'Chittagong', 'CSCR Bhaban, O.R. Nizam Road, Chittagong', '031-656565', '2021-07-06 01:15 pm', 0, 0),
(122, 'Cumilla General Hospital', '27', 0, 'Cumilla', 'Comilla Tower, Laksham Road, Comilla Adarsha Sadar, Comilla, Chittagong Division 3500', '01712071522', '2021-07-05 12:41 pm', 0, 0),
(123, 'Cumilla Medical College Hospital', '0', 0, 'Cumilla', 'Kuchaitoli, Dr. Akhtar Hameed Khan Road, Cumilla 3500', '01820652123', '2021-06-29 01:21 pm', 0, 0),
(124, 'South Surma Upazila Health Complex,Sylhet', '13', 0, 'Sylhet', 'N208, Khalmukh Bazar', '01730-324879', '2021-07-06 01:53 pm', 0, 0),
(125, 'Doctors Community Hospital Private Ltd, Rangpur', '20', 2, 'Rangpur', 'Medical East Gate, Rangpur', '+8801797852879', '2021-07-06 01:17 pm', 0, 0),
(126, 'Enam Medical College & Hospital', '3', 14, 'Savar', '9/3 Parboti Nagar, Thana Road, Savar Union 1340', '01716-358146', '2021-07-05 12:43 pm', 0, 0),
(127, 'Faridpur Medical College Hospital, Faridpur', '65', 0, 'Faridpur', 'Faridpur Sadar , Faridpur', '+8801784735515', '2021-07-06 01:18 pm', 0, 0),
(128, 'Feni 250 Bed District Sadar Hospital', '0', 0, 'Chittagong', 'Feni Sadar, Feni', '01730324771', '2021-06-30 12:34 pm', 0, 0),
(129, 'Gazi Medical College Hospital', '0', 0, 'Khulna', 'A, 19-21 Majid Sarani, Khulna 9000', '01778-455951', '2021-07-06 01:18 pm', 0, 0),
(130, 'Gopalganj 250 bed General Hospital', '47', 0, 'Gopalganj', 'Gopalganj Town Rd, Gopalganj', '02-9559216', '2021-07-06 01:19 pm', 0, 0),
(131, 'Hobiganj District Hospital, Hobiganj', '93', 0, 'Sylhet', 'Hospital Road, Habiganj Sadar, Habiganj, Sylhet Division', '01730324817', '2021-07-06 01:20 pm', 0, 0),
(132, 'Imperial Hospital Limited, Chittagong', '27', 12, 'Chittagong', 'Zakir Hossain Road, Chittagong 4202', '09612-247247', '2021-07-06 01:20 pm', 0, 0),
(133, 'Z.H. Sikder Women\'s Medical College & Hospital Ltd', '45', 7, 'Dhanmondi', 'Monica Estate, Western Dhanmondi, Dhaka - 1209', '+880-2811-5951', '2021-07-06 01:58 pm', 0, 0),
(134, 'TMSS Medical College & Rafatullah Community Hospital', '67', 5, 'Bogura', 'Rangpur Road, Tengamara, Bogura', '+88-01730041651', '2021-07-05 01:19 pm', 0, 0),
(135, 'Thakurgaon District Hospital, Thakurgaon', '0', 0, 'Rangpur', 'Thakurgaon Sadar, Thakurgaon, Rangpur Division 5100', '01762614383', '2021-06-26 10:35 pm', 0, 0),
(136, 'Tangail District Hospital, Tangail', '62', 4, 'Tangail', 'Tangail', '01769957199', '2021-07-06 01:56 pm', 0, 0),
(137, 'Sylhet Womens Medical College and Hospital', '0', 0, 'Sylhet', 'Mirboxtola, Sylhet', '+(0821) 720122', '2021-06-29 01:56 pm', 0, 0),
(138, 'Sylhet Shahid Shamsuddin Ahmed District Hospital', '0', 2, 'Sylhet', 'Medical College Road, Sylhet Sadar, Sylhet', '01713331900', '2021-07-06 01:56 pm', 0, 0),
(139, 'Surgiscope Hospital Limited', '2', 0, 'Chittagong', '445/466, Katalgonj, Chittagong - 4203', '01711275955', '2021-07-06 01:55 pm', 0, 0),
(140, 'Sunamganj 250 bed District Sadar Hospital', '86', 0, 'Sylhet', 'Hospital Rd, Sunamganj Sadar, Sunamganj, Sylhet', '01715097087', '2021-07-06 01:55 pm', 0, 0),
(141, 'Sirajganj 250 Bed Bongamata Sheikh Fazilatunnesa Mujib General Hospital', '28', 0, 'Rajshahi', 'Sirajganj, Rajshahi', '01711480448', '2021-07-06 01:53 pm', 0, 0),
(142, 'Sherpur District Hospital, Sherpur', '70', 0, 'Mymensingh', 'Nalitabari - Sherpur Road, Sherpur Sadar, Sherpur, Mymensingh', '01552390314', '2021-07-06 01:53 pm', 0, 0),
(143, 'Sher-e-Bangla Medical College Hospital, Barisal', '64', 0, 'Barisal', 'South Alekanda, Band Road, Barisal', '01765-112001', '2021-07-06 01:52 pm', 0, 0),
(144, 'Shariatpur District Hospital, Shariatpur', '11', 0, 'Shariatpur', 'R861, Shariatpur Sadar, Shariatpur, Dhaka, Bangladesh', '01730324790', '2021-07-05 01:16 pm', 0, 0),
(145, 'Shahid Syed Nazrul Islam Medical College Hospital', '11', 0, 'Kishoreganj', 'Kishoreganj Sadar', '0941-61068', '2021-07-06 01:52 pm', 0, 0),
(146, 'Shaheed Ziaur Rahman Medical College Hospital, Bogra', '29', 10, 'Rajshahi', 'Bogra Sadar, Bogra, Rajshahi', '01798949893', '2021-07-06 01:51 pm', 0, 0),
(147, 'Shaheed Tajuddin Ahmad Medical College Hospital, Gazipur', '54', 3, 'Gazipur', 'Circuit House Road, Gazipur', '02-9261451', '2021-07-06 01:50 pm', 0, 0),
(148, 'Satkhira 250 bed Medical College Hospital', '0', 0, 'Satkhira', 'Bakal Bridge, Satkhira - Kaliganj Hwy Satkhira', '+88028900878', '2021-06-26 10:36 pm', 0, 0),
(149, 'SAJIDA Foundation Hospital Keraniganj', '10', 1, 'Keraniganj', 'Chatgaon, Keraniganj 1310', '+8802222290513', '2021-07-06 01:48 pm', 0, 0),
(150, 'Rangpur Medical College Hospital, Rangpur', '2', 0, 'Rangpur', 'Medical East Gate, Dhap, Rangpur', '01718225722', '2021-07-06 01:48 pm', 0, 0),
(151, 'Rangamati General Hospital', '36', 0, 'Rangamati', 'Hazi Nizam Plaza - Chandra Road, Rangamati Sadar Up, Dendabor, Rangamati', '01554303477', '2021-07-05 01:04 pm', 0, 0),
(152, 'Ramu Upazila Health Complex', '72', 0, 'Chittagong', 'N1, Ramu, Cox\'s Bazar, Chittagong', '01730324469', '2021-07-04 01:14 pm', 0, 0),
(153, 'Rajshahi Medical College Hospital, Rajshahi', '0', 1, 'Rajshahi', 'Medical College Road Laxmipur, Rajpara, Rajshahi - 6100', '0721-772150', '2021-07-06 01:48 pm', 0, 0),
(154, 'Rajnagar Upazila Health Complex, Moulvibazar', '29', 0, 'Sylhet', 'Balagong Road, Rajnagar, Maulvibazar, Sylhet', '01717795254', '2021-07-05 01:03 pm', 0, 0),
(155, 'Rajbari District Hospital, Rajbari', '17', 0, 'Rajbari', '67/A R710, 7700, Rajbari Sadar, Rajbari, Dhaka Division 7700', '01711466832', '2021-07-06 01:47 pm', 0, 0),
(156, 'Prime Medical College & Hospital', '3', 0, 'Rangpur', 'Pirjabad, Badagonj Road, Rangpur', '01730-033166', '2021-07-06 01:47 pm', 0, 0),
(157, 'Pirojpur District Hospital, Pirojpur', '6', 0, 'Pirojpur', 'Pirojpur Pourashava', '01711443094', '2021-07-06 01:42 pm', 0, 0),
(158, 'Patuakhali 250 bed Sadar Hospital, Patuakhali', '70', 0, 'Barisal', 'Barisal - Patuakhali Road, R881, Patuakhali Sadar, Kuakata, Patuakhali, Barisal', '01730324763', '2021-07-06 01:42 pm', 0, 0),
(159, 'Parkview Medical College & Hospital, Sylhet', '4', 4, 'Sylhet', 'Sheikhghat - Kazirbazar Road, Sylhet', '0821-728878', '2021-07-05 01:01 pm', 0, 0),
(160, 'Parkview Hospital Ltd', '52', 0, 'Chittagong', '94/103, Katalganj Road, Panchlaish, Chittagong', '01976-022333', '2021-07-06 01:41 pm', 0, 0),
(161, 'Panchagarh District Hospital, Panchagarh', '2', 0, 'Rangpur', 'Hospital Road, Panchagarh Sadar, Debiganj, Panchagarh, Rangpur', '01730324814', '2021-07-06 01:41 pm', 0, 0),
(162, 'Pabna District Hospital, Pabna', '17', 0, 'Pabna', 'Shalgaria, Pabna Sadar, Pabna', '+8801711902725', '2021-07-06 01:40 pm', 0, 0),
(163, 'Oasis Hospital Sylhet', '1', 0, 'Sylhet', 'Oasis Hospital, Subhanighat, Sylhet - 3100', '+8801611-990000', '2021-07-06 01:40 pm', 0, 0),
(164, 'North East Medical College Hospital, Sylhet', '7', 0, 'Sylhet', 'South Surma, Sylhet - 3100', '+8801715944733', '2021-07-06 01:39 pm', 0, 0),
(165, 'Noakhali 250 Bed General Hospital', '39', 6, 'Noakhali', '2 Hospital Road, Noakhali Sadar, Maijdee, Noakhali, Chittagong', '01715241399', '2021-07-05 01:00 pm', 0, 0),
(166, 'Nilphamari District Hospital, Nilphamari', '64', 0, 'Nilphamari', 'Hospital Road, Nilphamari Sadar, Nilphamari, Rangpur', '01730324812', '2021-07-06 01:39 pm', 0, 0),
(167, 'Netrokona District Hospital, Netrokona', '31', 0, 'Netrokona', 'Hospital Road, Netrokona Sadar, Netrokona, Netrakona, Mymensingh', '01711432353', '2021-07-04 01:11 pm', 0, 0),
(168, 'Natore District Hospital, Natore', '0', 0, 'Natore', 'Adhunik Sadar Hospital, Natore', '077166912', '2021-06-29 01:47 pm', 0, 0),
(169, 'National Hospital Chittagong (Pvt.) Ltd', '9', 0, 'Chittagong', '14/15, Dampara Lane, Mehedibag, Chittagong', '+88031627913', '2021-07-05 12:59 pm', 0, 0),
(170, 'Narsingdi (100 bed) Zila Hospital, Narshingdi', '43', 0, 'Narshingdi', 'Narsingdi - Raipur Highway, Narsingdi', '01734-778507', '2021-07-06 01:35 pm', 0, 0),
(171, 'Narayanganj 300 bed Hospital', '55', 2, 'Narayanganj', 'Hospital Road, Narayanganj Sadar, Narayanganj, Dhaka, Bangladesh', '01715399038', '2021-07-06 01:34 pm', 0, 0),
(172, 'Narail District Hospital, Narail', '103', 0, 'Narail', 'Narail Sadar, Narail, Khulna', '01714304131', '2021-07-04 01:01 pm', 0, 0),
(173, 'Naogaon District Hospital, Naogaon', '38', 0, 'Naogaon', 'College Rd, Naogaon Sadar, Naogaon, Rajshahi', '01712226651', '2021-07-06 01:33 pm', 0, 0),
(174, 'Mymensingh Medical College Hospital, Mymensingh', '0', 0, 'Mymensingh', 'Char Para, Medical Road, Mymensingh 2200', '+8809166063', '2021-07-06 01:33 pm', 0, 0),
(175, 'Munshiganj 250 bed District Hospital', '23', 0, 'Munshganj', 'Luharpul Bazar - Munshganj Road, Munshiganj Sadar, Munshiganj', '01730324783', '2021-07-06 01:33 pm', 0, 0),
(176, 'Mount Adora Hospital, Sylhet', '0', 1, 'Sylhet', 'Akhalia, Sylhet - Sunamganj Road, Sylhet - 3100', '+8801707079717', '2021-07-06 01:32 pm', 0, 0),
(177, 'Mohammad Ali District Hospital , Bogra', '16', 3, 'Bogra', '1 Sherpur Road, Bogra Sadar, Bogra, Rajshahi', '01730324803', '2021-07-06 01:32 pm', 0, 0),
(178, 'Meherpur 250 bed District Hospital', '42', 0, 'Meherpur', 'Meherpur Sadar Upazila, Meherpur, Khulna', '+8801829699289', '2021-07-05 12:53 pm', 0, 0),
(179, 'Medical Center Hospital, Chattogram', '6', 1, 'Chittagong', '953 O.R. Nizam Road, Chittagong', '031-658501', '2021-07-05 12:53 pm', 0, 0),
(180, 'Max Hospital, Chittagong', '0', 0, 'Chittagong', 'Late Alhaj Zahur Ahmed Chowdhury Road, Chittagong', '01713-998199', '2021-07-05 12:52 pm', 0, 0),
(181, 'Manikganj 250 Bed District Hospital', '11', 5, 'Manikganj', 'Shahid Rafique Sarak, Manikganj', '01716301876', '2021-07-06 01:30 pm', 0, 0),
(182, 'Magura District Hospital, Magura', '5', 0, 'Magura', 'Magura Sadar, Khulna', '01715019479', '2021-07-06 01:30 pm', 0, 0),
(183, 'MAG Osmani Medical College Hospital, Sylhet', '102', 0, 'Sylhet', 'Medical Road, Kajolshah, Sylhet', '0821-713487', '2021-07-06 01:30 pm', 0, 0),
(184, 'Madaripur District Hospital, Madaripur', '14', 0, 'Madaripur', 'Madaripur Hospital Road, Madaripur', '01730324781', '2021-07-05 12:51 pm', 0, 0),
(185, 'Maulvibazar District Hospital, Maulvibazar', '30', 2, 'Maulvibazar', 'Moulvibazar Road, Maulvibazar Sadar, Sreemangal, Maulvibazar, Sylhet', '01716374301', '2021-07-06 01:29 pm', 0, 0),
(186, 'M Abdur Rahim Medical College Hospital, Dinajpur', '0', 0, 'Dinajpur', 'Ananda Sagor, Sadar, Dinajpur', '01793941071', '2021-06-29 01:31 pm', 0, 0),
(187, 'Lakshmipur District Hospital', '12', 3, 'Lakshmipur', 'Ramgati Highway, Lakshmipur Sadar, Lakshmipur, Chittagong', '01712620409', '2021-07-06 01:28 pm', 0, 0),
(188, 'Kushtia 250 bed General Hospital', '0', 0, 'Kushtia', 'Kushtia Sadar, Kushtia', '01715145522', '2021-07-04 12:55 pm', 0, 0),
(189, 'Kurigram District Hospital, Kurigram', '61', 0, 'Kurigram', 'General Hospital Road, Kurigram Sadar, Kurigram, Rangpur', '01713200322', '2021-07-06 01:26 pm', 0, 0),
(190, 'Khulna Medical College Hospital, Khulna', '0', 0, 'Khulna', 'M.a Bari Boyra Main Road Khulna., Sonadanga, Khulna Sadar, Khulna - 9100', '+88-041-760350', '2021-06-26 10:38 pm', 0, 0),
(191, 'Khagrachari District Hospital, Khagrachari', '30', 0, 'Khagrachhari', 'Tatultola Road, Khagrachhari Sadar, Khagrachhari, Chittagong', '01717720137', '2021-06-26 10:38 pm', 0, 0),
(192, 'Joypurhat District Hospital, Joypurhat', '3', 0, 'Joypurhat', 'Hospital Road, Joypurhat Sadar, Joypurhat, Rajshahi', '01793119128', '2021-07-06 01:26 pm', 0, 0),
(193, 'Jhenaidah District Hospital, Jhenaidah', '33', 0, 'Jhenaidah', 'Jhenaidah Sadar, Jhenaidah', '01760859761', '2021-07-06 01:25 pm', 0, 0),
(194, 'Jhalokathi District Hospital', '4', 0, 'Jhalokathi', 'Mahammad Ali Road, Kirtipasha Union, Jhalokati Sadar, Kirtipasha Union, Jhalokati, Barisal', '01712163530', '2021-07-05 12:48 pm', 0, 0),
(195, 'Jessore Chest Hospital, Jessore', '28', 0, 'Jessore', 'Jessore TB Segregation Hospital, Bockchor, Jessore', '01711397289', '2021-06-26 12:54 pm', 0, 0),
(196, 'Jessore 250 bed General Hospital', '0', 0, 'Jessore', 'Ghope Nowapara Road, Jessore Sadar, Jessore, Khulna', '01718071234', '2021-07-03 12:49 pm', 0, 0),
(197, 'Jalalabad Ragib Rabeya Medical College Hospital', '63', 0, 'Sylhet', '29/5 Pathantola Road, Sylhet', '0821-719090', '2021-07-06 01:23 pm', 0, 0),
(198, 'Jamalpur 250 Beded General Hospital', '82', 2, 'Jamalpur', 'Medical Road, Jamalpur Sadar, Jamalpur, Mymensingh', '01711632276', '2021-07-06 01:24 pm', 0, 0),
(199, 'Khadimpara 31 bed Hospital, Sylhet Sadar', '13', 0, 'Sylhet', 'Sylhet Sadar Upazila, Sylhet', '01713800522', '2021-07-05 12:49 pm', 0, 0),
(200, 'National Institute of Mental Health and Research', '100', 0, 'Sher-E-Bangla Nagar', 'Sher-E-Bangla Nagar, Dhaka, Bangladesh - 1207', '+880258153975', '2021-06-26 10:39 pm', 0, 0),
(201, 'Chakaria Upazila Health Complex', '48', 0, 'Chittagong', 'Health Complex Road, Chakaria, Cox\'s Bazar, Chittagong', '01730324466', '2021-07-06 01:10 pm', 0, 0),
(202, 'National Institute of Neuro Science', '12', 0, 'Agargaon', 'Sher-e-Bangla Nagar, Agargaon, Dhaka, Bangladesh - 1207', '+880-2-9137305', '2021-07-06 01:38 pm', 0, 0);

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_symptom_checker`
--

INSERT INTO `tbl_symptom_checker` (`symptom_checker_id`, `full_name`, `mobile_number`, `main_symptoms`, `other_symptoms`, `red_zone`, `healthcare_provider`, `contact_with_positive`, `pre_existing_conditions`, `risk`) VALUES
(47, 'Sadi', '01714045388', 'Dry cough,Fever,Difficulty in breathing', 'Nasal congestion,Runny nose,Sore throat', 'yes', 'no', 'yes', 'yes', 'High'),
(48, 'Mohammad Sdai', '19u9348u1234', 'Dry cough,Fever', 'Headache', 'yes', 'no', 'yes', 'no', 'High'),
(49, 'Test', 'Test', 'Dry cough,Tiredness', 'Nasal congestion', 'no', 'no', 'no', 'no', 'Medium'),
(50, 'Ahnaf Shah', '017346266373737', 'Dry cough,Fever', 'Runny nose,Sore throat', 'no', 'no', 'no', 'yes', 'High'),
(51, 'Mahadi', 'Raiyan', 'Dry cough,Fever', 'Runny nose,Sore throat', 'yes', 'no', 'no', 'yes', 'High'),
(52, 'Rahemeen Roza', '018748', 'Fever,Tiredness', 'Body aches,Sore throat', 'no', 'yes', 'yes', 'no', 'High'),
(53, 'Ahnaf', '01730007704', 'None', 'None', 'no', 'no', 'no', 'no', 'Low'),
(54, 'Ahnaf', '01730007704', 'None', 'None', 'no', 'no', 'no', 'no', 'Low'),
(55, 'sadi', '0', 'Dry cough', 'Sore throat', 'no', 'yes', 'no', 'yes', 'High'),
(56, 'Ahnaf Shah', '0997373937030', 'Dry cough,Loss of taste or smell', 'Nasal congestion', 'no', 'no', 'no', 'no', 'Medium'),
(57, 'Test', '43453', 'Dry cough,Fever,Loss of taste or smell', 'Body aches,Sore throat,Headache', 'no', 'no', 'no', 'no', 'Medium'),
(58, 'Test', '01688868889', 'Dry cough,Fever,Loss of taste or smell', 'None', 'no', 'no', 'no', 'no', 'Medium'),
(59, 'Test', '01688868889', 'Dry cough', 'Body aches', 'no', 'no', 'no', 'no', 'Medium'),
(60, 'Test', '01688868889', 'Tiredness', 'None', 'no', 'no', 'no', 'no', 'Low'),
(61, 'sadi', '01711568166', 'Fever', 'None', 'no', 'no', 'no', 'no', 'Low'),
(62, 'Ahnaf', '1257/7', 'Fever', 'Nasal congestion', 'no', 'no', 'no', 'yes', 'High'),
(63, 'Test 2', '', 'None', 'None', 'no', 'no', 'no', 'no', 'Low'),
(64, 'Abcd', '', 'Difficulty in breathing', 'None', 'no', 'no', 'no', 'no', 'Low'),
(65, 'Acbg', '', 'Tiredness', 'None', 'no', 'no', 'no', 'no', 'Low'),
(66, 'sadi', '', 'Fever,Loss of taste or smell', 'Runny nose', 'no', 'no', 'no', 'no', 'Medium'),
(67, 'Ahnaf', 'Wee', 'Dry cough', 'Runny nose', 'yes', 'no', 'no', 'yes', 'High'),
(68, 'MUNTASIR', 'JALAL', 'Dry cough,Tiredness', 'Runny nose', 'no', 'yes', 'no', 'no', 'High'),
(69, 'Ahmaf', '', 'Fever', 'Runny nose', 'no', 'no', 'no', 'no', 'Medium'),
(70, 'Tuh', '', 'None', 'None', 'no', 'no', 'no', 'no', 'Low'),
(71, 'Noori begom', '', 'Loss of taste or smell', 'Runny nose', 'yes', 'no', 'yes', 'no', 'High'),
(72, 'S', '', 'Tiredness', 'None', 'no', 'no', 'no', 'no', 'Low'),
(73, 'S', '', 'Tiredness', 'None', 'no', 'no', 'no', 'no', 'Low'),
(74, 'Test', '', 'None', 'None', 'no', 'no', 'no', 'no', 'Low'),
(75, 'Shafeen Shahid Annon', '', 'None', 'None', 'no', 'no', 'no', 'no', 'Low'),
(76, 'Basic', '', 'None', 'None', 'no', 'no', 'no', 'no', 'Low'),
(77, 'Ahnaf', '', 'Dry cough,Loss of taste or smell', 'None', 'yes', 'no', 'yes', 'no', 'High'),
(78, 'মোঃ নূরে আলম', '০১৯১৬২৬৬৮৮৯', 'Tiredness', 'Nasal congestion', 'yes', 'no', 'no', 'no', 'High'),
(79, 'Test', '', 'None', 'None', 'no', 'no', 'no', 'no', 'Low'),
(80, 'Ads', '', 'Tiredness', 'Nasal congestion', 'no', 'no', 'no', 'no', 'Medium'),
(81, 'xcbv', '', 'Fever,Tiredness', 'Body aches,Headache', 'no', 'no', 'no', 'no', 'Medium');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`) VALUES
(1, 'admin', 'adminabcd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_ambulance`
--
ALTER TABLE `tbl_ambulance`
  ADD PRIMARY KEY (`ambulance_id`);

--
-- Indexes for table `tbl_cases_deaths`
--
ALTER TABLE `tbl_cases_deaths`
  ADD PRIMARY KEY (`cases_deaths_id`);

--
-- Indexes for table `tbl_division`
--
ALTER TABLE `tbl_division`
  ADD PRIMARY KEY (`division_id`);

--
-- Indexes for table `tbl_doctors`
--
ALTER TABLE `tbl_doctors`
  ADD PRIMARY KEY (`doctor_id`);

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
-- AUTO_INCREMENT for table `tbl_ambulance`
--
ALTER TABLE `tbl_ambulance`
  MODIFY `ambulance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `tbl_cases_deaths`
--
ALTER TABLE `tbl_cases_deaths`
  MODIFY `cases_deaths_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_division`
--
ALTER TABLE `tbl_division`
  MODIFY `division_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_doctors`
--
ALTER TABLE `tbl_doctors`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_hospital_info`
--
ALTER TABLE `tbl_hospital_info`
  MODIFY `hospital_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

--
-- AUTO_INCREMENT for table `tbl_symptom_checker`
--
ALTER TABLE `tbl_symptom_checker`
  MODIFY `symptom_checker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
