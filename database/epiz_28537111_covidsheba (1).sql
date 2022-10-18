-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql110.epizy.com
-- Generation Time: Jun 03, 2021 at 06:26 AM
-- Server version: 5.6.48-88.0
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_28537111_covidsheba`
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
(4, 'Labaid Hospital Ambulance Service', 'Labaid Hospital Ambulance Service', '01713330088, 01713091940', 0),
(5, 'Bangladesh Medical College Hospital', 'Dhanmondi', '+880-2-9118202, +880-2-9120793, +880-2-8115843', 0),
(6, 'CMH', 'Cantonement', '+880-2-9871469, +880-2-9870011, +880-2-8114666-75, +880-2-8822779', 0),
(7, 'Dhaka Eye Hospital', 'Mirpur', '+880-2-8014476', 0),
(8, 'Dhaka Medical College Hospital', 'Bakshibajar', '+880-2-8626812-19, +880-2-8626823, +880-2-9669340', 0),
(9, 'Dhaka Renal Centre & General Hospital', 'Mirpur', '+880-2-8610928, +880-2-8621841', 0),
(10, 'Evercare Hospitals Dhaka', 'Bashundhara', '+8801714-090000', 0),
(11, 'Apanjon Ambulance Service', 'Dhaka', '9125420', 0),
(12, 'Al-Markazul Islami Ambulance Service', 'Mohammadpur', '9127867, 8114980', 0),
(13, 'Life Line Healthcare Limited', 'Lalmatia', '+880-2-8155550-2, +8801199-899919', 0),
(14, 'Lab-Aid Cardiac Hospital', 'Banani – Baridhara – Uttara Rayer', '+8801713333337, +8801715-120229, +8801715-154590', 0),
(15, 'Lab-Aid Cardiac Hospital', 'Dhanmondi - Azimpur - Shahbagh', '+8801713333337, +8801713-025911', 0),
(16, 'Lab-Aid Cardiac Hospital', 'Bazaar - Lalmatia - Mohammadpur', '+8801713333337, +8801715-120228', 0),
(17, 'Rafa Ambulance Service', 'Dhaka', '9110663', 0),
(18, 'Green Ambulance Service', 'Dhanmondi', '9334121, 8612412', 0),
(19, 'BIRDEM', 'Shahabag Square', '9661551-60, 8616641-50, Ext-2301', 0),
(20, 'Dhaka City Corporation', 'Mirpur Control Room', '9004734', 0),
(21, 'Dhaka City Corporation', 'Nagar Bhaban Control Room', '9556014, 9556018, 9557186-87', 0),
(22, 'Dhaka Medical College Hospital', 'Bakshibazar Area', '505025-29, 500121-5', 0),
(23, 'Alif Ambulance', 'Panthapath', '8117576 , 9131688', 0),
(24, 'Ad-Din Hospital', 'Moghbazar', '+880-2- 9362929', 0),
(25, 'Anjuman-E-Mufidul Islam', 'Kakrail', '+880-2-9336611, +880-2-7411680, +880-2-7410786', 0),
(26, 'Bangabondhu Sheikh Mujib Medical University (BSMMU)', 'Shahbag', '+88-01866-637482', 0),
(27, 'Fire Brigade Ambulance Service', 'Dhaka', '+880-2-9555555, +880-2-9556666-7, +880-2-9553333-7', 0),
(28, 'Red Crescent Society', 'Moghbazar', '9330188-9, 9358799', 0),
(29, 'Sir Salimullah Medical College & Mitford Hospital Ambulance Service', 'Mitford', '+880-2-7319002-6', 0),
(30, 'Shahid Suhrawardi Hospital, Ambulance Service', 'Sher-E-Bangla Nagar', '9130800', 0),
(31, 'Shishu Hospital, Ambulance Service', 'Sher-E-Bangla Nagar', '8116061-2, 8114571-2', 0),
(32, 'South Asian Hospital, Ambulance Service', 'Panthapath', '8616565, 9665852', 0),
(33, 'National Heart Foundation Hospital', 'Mirpur', '+880-2-9801874, +880-2-9803302', 0),
(34, 'Holy Family Red Crescent Hospital', 'Moghbazar', '+880-2-8311721-5, +880-2-9113512', 0),
(35, 'ICDDRB', 'Mohakhali', '+880-2-8811751-60', 0),
(36, 'Islamia Eye Hospital', 'Farmgate', '+880-2-9119315', 0),
(37, 'Prime General Hospital', 'Tongi', '+880-2-9562267, +880-2-9559862', 0),
(38, 'Red Crescent Society Ambulance Service', 'Moghbazar', '+880-2-9330188-9, +880-2-9358799, +880-2-9113512, +880-2-8311721-5', 0),
(39, 'United Hospital', 'Gulshan', '+880-2-8836000-10, +880-2-8836434-44, +880-2-8110864, +8801914001234', 0),
(40, 'Medinova Medical Service Ltd', 'Dhanmondi', '8113721, 9120288', 0),
(41, 'Monowara Hospital Ambulance Service', 'Shiddheshwari', '+880 01715839400', 0),
(42, 'National Heart Institute, Ambulance Service', 'Dhaka', '9122560-72', 0),
(43, 'Square Hospital', 'Panthapath', '+880-2-8144466, +880-2-8159457 (Ext-2005), +8801713377773, +8801713377775', 0),
(44, 'Day-Night Ambulance Service', 'Dhaka', '9123073, 8122041', 0),
(45, 'Orthopedic Hospital', 'Ring Road', '+880-2-9112150, +880-2-9114075, +880-2-7114812, +880-2-9112152', 0),
(46, 'Shefa Ambulance Services', 'Mohammadpur', '9111758, 8110864', 0);

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
(1, 'Dhaka', '329700', '22221', 0, 0, 0),
(2, 'Chittagong', '48474', '1231', 0, 0, 0),
(3, 'Sylhet', '13504', '12312', 0, 0, 0),
(4, 'Khulna', '10789', '124123', 0, 0, 0),
(5, 'Rajshahi', '124123', '12312', 0, 0, 0),
(6, 'Barisal', '12312', '123131', 0, 0, 0),
(7, 'Rangpur', '12312', '123122', 0, 0, 0),
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
(7, 'DR. A.N.H Hafizur Rahman', 'N/A', '7 days a week (12 pm - 12 am)', 'Holy Family Hospital', 'WhatsApp Image 2021-06-01 at 2.46.21 PM.jpeg', 0),
(8, 'DR. Khaled Bin Altaf', 'N/A', '6 days a week: except Friday (8 am - 12 pm)', 'Holy Family Red Crescent Medical College Hospital', 'WhatsApp Image 2021-06-01 at 2.46.53 PM.jpeg', 0),
(9, 'DR. Muktadir Rajib', 'N/A', 'Sunday, Monday, Wednesday (6 pm - 9 pm)', 'Medinova Medical Services LTD.', 'WhatsApp Image 2021-06-01 at 2.47.23 PM.jpeg', 0),
(6, 'Maj. Dr. SK. Habibur Rahman (RAO)', 'N/A', '7 days a week (12 pm - 1 pm & 4 pm - 6 pm)', 'N/A', 'WhatsApp Image 2021-06-02 at 9.42.40 PM.jpeg', 0);

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_hospital_info`
--

INSERT INTO `tbl_hospital_info` (`hospital_id`, `hospital_name`, `general_bed`, `icu_bed`, `hospital_location`, `hospital_full_address`, `hospital_phone_number`, `hospital_area_id`, `hospital_remove_status`) VALUES
(1, 'Evercare Hospital Dhaka', '28', '12', 'Bashundhara Residential Area', 'Plot: 81, Block: E, Dhaka: 1229', '09666-710678', 0, 0),
(2, 'AMZ Hospital Ltd.', '', '', '', '', '10699, 01847331010', 0, 1),
(3, 'Asgar Ali Hospital', '45', '18', 'Gendaria', 'Playground, 111/1/A Distillery Road, Gendaria, Beside Dhupkhola, Dhaka 1204', '09666-710602', 0, 0),
(4, 'Renaissance Hospital And Research Institute Ltd.', 'N/A', 'N/A', 'Dhanmondi', '4 Road No 13/2, Dhaka 1205', '01712-259761', 0, 0),
(5, 'ICU Specialized Hospital Limited', 'N/A', 'N/A', 'Puran Dhaka', 'Nawab Katra Ln, Dhaka 1000', '01854-560761', 0, 0),
(6, 'CKD & Urology Hospital ( ICU & NEPHROLO )', '', '', '', '', '02-9127306', 0, 1),
(7, 'Bangladesh Specialized Hospital Limited', '34', '16', 'Shahjadpur', 'Road-4, Zip Code- Dhaka: 1215, Shahjadpur', '09666-700100', 0, 0),
(8, 'Dhaka Paediatric-Neonatal & General Hospital', '', '', '', '', '01618-225566', 0, 1),
(9, 'City Hospital & Diagnostic Center', '36', 'N/A', 'Dhanmondi', 'House No#1, 8 Satmasjid Road, Dhaka 1207', '02-8143312', 0, 0),
(10, 'Samorita Hospital Ltd.', '32', '8', 'Panthapath', '89/1, Panthapath, Dhaka-1215', '48117618, 48117619, 48115405', 0, 0),
(11, 'Ad-Din Medical College Hospital', '20', '0', 'Moghbazar', '2 Bara Moghbazar, Outer Circular Road, Dhaka - 1217', '09612-345666', 0, 0),
(12, 'Monowara Hospital Limited', '10', '0', 'Siddheshwari', '54, Siddheshwari Road, Dhaka-1217', '01715-839400', 0, 0),
(13, 'Impulse Hospital', '250', '56', 'Tejgaon', 'Address: 304/E, Tejgaon Industrial Area, Dhaka- 1208', '02-9831034 - 43, 01715-016727', 0, 0),
(14, 'Dhaka Community Medical College and Hospital', '', '', '', '', '02-9351190', 0, 1),
(15, 'Al-Karim General Hospital Limited', '', '', '', '', '01926-633987', 0, 1),
(16, 'Baridhara General Hospital', '', '', '', '', '01768-612835', 0, 1),
(17, 'CARe Medical College & Hospital', '10', '5', 'Mohammadpur', '1/5, Block-B ( College gate) Mohammadpur, Dhaka-1207', '02-44822201, 02-44822202, 02-44822203', 0, 0),
(18, 'Al Helal Specialized Hospital, Dhaka.', '', '', '', '', '02-9006820', 0, 1),
(19, 'Aichi Hospital Ltd.', '', '', '', '', '02-44891001', 0, 1),
(20, 'United Hospital Limited', '73', '22', 'Gulshan', 'Plot 15, Road 71, Gulshan, Dhaka-1212', '+88 02 8836444, +88 02 8836000', 0, 0),
(21, 'Dhanmondi General And Kidney Hospital Limited', '10', '13', 'Dhanmondi', 'Green Road, House #12, Road #7, Dhanmondi, Dhaka-1205', '02-9670372', 0, 0),
(22, 'Insaf Barakah Kidney and General Hospital', '14', '3', 'Moghbazar', '11, Shahid Tajuddin Ahmed Sharani Moghbazar, Dhaka-1217', '01716-306631', 0, 0),
(23, 'Islami Bank Hospital, Motijhil', '', '', '', '', '02-9336423', 0, 1),
(24, 'Popular Medical College & Hospital', '130', '42', 'Dhanmondi', 'House: 08, Road: 02, Dhanmondi, Dhaka-1205', '09613-787800', 0, 0),
(25, 'Ibn Sina Medical College Hospital', '8', '4', 'Kallyanpur', '1/1-B, Kallyanpur, Dhaka-1216', '02-9010396', 0, 0),
(26, 'Rushmono Specialized Hospital', '', '', '', '', '02-49357700', 0, 1),
(27, 'Islami Bank Hospital, Begum Rokeya Sarani', '', '', '', '', '01992-346631', 0, 1),
(28, 'Central Hospital Ltd.', '', '', '', '', '02-9660015', 0, 1),
(29, 'Millennium Heart & General Hospital Ltd.', '12', '8', 'Dhanmondi', '4/9, Block-F, Lalmatia, Dhaka, Bangladesh', '+88029124046 , +8801819282626', 0, 0),
(30, 'AL-MANAR HOSPITAL LTD.', '', '', '', '', '02-9121588', 0, 1),
(31, 'Holy Family Red Crescent Medical College Hospital', '83', '15', 'Moghbazar', '1, Eskaton Garden Road, Bara Moghbazar, Dhaka - 1000', '02-48311721', 0, 0),
(32, 'BIRDEM General Hospital', '176', '18', 'Shahbagh', '122 Kazi Nazrul Islam Avenue, Shahbagh, Dhaka-1000', '02-9661551', 0, 0),
(33, 'Labaid Hospital', '9', '4', 'Dhanmondi', 'House- 06, Road-04, Dhanmondi Dhaka-1205', '09666-710606, +88 02 9676356, +88 02 58610793-8', 0, 0),
(34, 'Square Hospital', '69', '19', 'Panthapath', '18F, Bir Uttam Qazi Nuruzzaman Sarak, West Panthapath, Dhaka 1205', '(880-2) 8144400, 8142431', 0, 0),
(35, 'Kingston Hospital', '', '', '', '', '01952-989866', 0, 1),
(36, 'Comfort Diagnostic Centre Pvt. Ltd.', '', '', '', '', '01731-956033', 0, 1),
(37, 'Proshanti Hospital Limited', '8', '6', 'Malibagh', 'House No -6,Ground Floor ,Shantibagh Road, Malibagh Mor ,Ramna, Dhaka', '02-8318699', 0, 0),
(38, 'Japan East West Medical College Hospital', '103', '12', 'Turag', 'Aichi Nagar, JBCS Sarani Horirampur, Turag, Dhaka, 1711', '09611-222666', 0, 0),
(39, 'Khidmah Hospital Private Limited', '', '', '', '', '09606-063030', 0, 1),
(40, 'Farazy Hospital Ltd', '', '', '', '', '01766-111137', 0, 1),
(41, 'Kurmitola General Hospital', '275', '10', 'Kurmitola', 'New Airport Road, Kurmitola, Dhaka Cantonment, Dhaka-1206', '02-55062388', 0, 0),
(42, 'Japan Bangladesh Friendship Hospital', '32', '7', 'Dhanmondi', 'Zigatola Bus Stand, 55 Satmasjid Road, Dhaka 1209', '02-9672277', 0, 0),
(43, 'Nostrum Hospital', '', '', '', '', '01786-355355', 0, 1),
(44, 'Universal Medical College Hospital Ltd.', '26', '21', 'Mohakhali', '74G/75, Pea-cock Square, New airport road, Mohakhali. Dhaka 1215', '+880 9606 111 222', 0, 0),
(45, 'BIRDEM General Hospital 2 (Child and Mother)', '', '', '', '', '02-41050710', 0, 1),
(46, 'Royal Care And Surgical Hospital', '', '', '', '', '01783-199990', 0, 1),
(47, 'Padma General Hospital Ltd.', '', '', '', '', '02-9661528', 0, 1),
(48, 'Dhaka Central International Medical College & Hospital', '67', '10', 'Mohammadpur', '2/1 Ring Rd, Dhaka 1207', '02-9128727', 0, 0),
(49, 'Ahsania Mission Cancer and General Hospital', '', '', '', '', '02-8931141', 0, 1),
(50, 'BIHS Hospital', '', '', '', '', '01783-917151', 0, 1),
(51, 'Uttara Cresent Hospital', '30', '10', 'Uttara', '40 Rabindra Sarani, 7 Uttara, Dhaka- 1230', '01917704150, 01917704151', 0, 0),
(52, 'Pancare Hospital Ltd.', '', '', '', '', '01844-001024', 0, 1),
(53, 'Memory Medical Centre', '', '', '', '', '02-48314317', 0, 1),
(54, 'Delta Medical College & Hospital', '', '', '', '', '02-9029152', 0, 1),
(55, 'Delta Hospital Ltd.', '', '', '', '', '02-9022410', 0, 1),
(56, 'Islami Bank Central Hospital, Fakirapul', '', '', '', '', '02-9355801', 0, 1),
(57, 'Dhanmondi Clinic (PVT) LTD', '13', '12', 'Dhanmondi', 'House #2, Road-8, Dhanmondi R/A, Dhaka', '01970-476626', 0, 0),
(58, 'Bangabandhu Sheikh Mujib Medical University', '230', '20', 'Merul Badda', 'Building-10, Road- 56, Badda, Dhaka', '09611-677777', 0, 0),
(59, 'Hi-tech Multicare Hospital', '', '', '', '', '01672-241413', 0, 1),
(60, 'Medical College For Women and Hospital', '', '', '', '', '02-8913939', 0, 1),
(61, 'DR. Azmal Hospital Limited', '25', '0', 'Mirpur', 'House No # 5, Road No # 5 Block A, Section -6 Mirpur, Dhaka-1216', '09612-304304, +880-2-8051974', 0, 0),
(62, 'BRB Hospitals Limited', '', '', '', '', '02-9140333', 0, 1),
(63, 'MARKS Medical College & Hospital', '', '', '', '', '02-8057776', 0, 1),
(64, 'KC Hospital & Diagnostic Center', '', '', '', '', '01777-753464', 0, 1),
(65, 'Metropolitan Medical Centre Ltd.', '', '', '', '', '01718-237035', 0, 1),
(66, 'Better life Hospital', '62', '24', 'RAMPURA', 'EAST RAMPURA, DHAKA', '09639786786, 09678786787', 0, 0),
(67, 'Green Life Medical College Hospital', '131', '11', 'Green Road', 'MAK Khan Tower 31 and 31/1, Bir Uttam K.M. Shafiullah Sarak (Green Road) Dhaka - 1205', '+88-02 9612345-50', 0, 0),
(68, 'Reliance General & Renal Hospital', '', '', '', '', '01849-428888', 0, 1),
(69, 'Anwer Khan Modern Medical College Hospital', '', '', '', '', '02-9670295', 0, 1),
(70, 'Shin Shin Japan Hospital', '', '', '', '', '02-8921429', 0, 1),
(71, 'Sajida Hospital', '', '', '', '', '02-9890513', 0, 1),
(72, 'Hi-Care General Hospital Ltd.', '12', '10', 'Uttara', 'House#24 & 26 , Lake Drive Road, Sector#7, Uttara Model Town -1230. Dhaka', '+88 0255094231-5, +88 01778949055-6', 0, 0),
(73, 'Central Police Hospital', '470', '15', 'Rajarbag', '2 DIT Avenue, Dhaka 1000', '01320-225598', 0, 0),
(74, 'Ashiyan Medical College Hospital', '', '', '', '', '01841-133501', 0, 1),
(75, 'Pro-Active Medical College & Hospital Ltd.', '', '', '', '', '01902-556070', 0, 1),
(76, 'Combined Military Hospital (CMH)', '', '', '', '', '01724-579521', 0, 1),
(77, 'Gonoshasthaya Nagar Hospital', '0', '3', 'Dhanmondi', 'Road # 6, House # 14/E Dhanmondi – 1205', '+8801711847719', 0, 0),
(78, 'Enam Medical College and Hospital', '', '', '', '', '01716-358146', 0, 1),
(81, '250 Beded TB Hospital', '183', '5', 'Shyamoli', '250 Bedded TB Hospital , Shyamoli, Dhaka-1207', '02-9111892', 0, 0),
(82, 'AMZ Hospital', '0', '10', 'Uttar Badda', 'Cha- 80/3, Shadhinota Sarani (Progati Sarani), Uttar Badda, Dhaka-1212', '10699, 01847331010', 0, 0),
(83, 'Center for Kidney Diseases and Urology Hospital', 'N/A', 'N/A', 'Shyamoli', 'House #32, Road-03, Shamoli, Dhaka', '02-9127306', 0, 0),
(84, 'Bangladesh Institute of Health Sciences General Hospital', '61', '14', 'Mirpur', '125/1 Darus Salam, Mirpur Dhaka-1216', '8035501-6', 0, 0),
(85, 'Bangladesh Medical College & Hospital', '33', '6', 'Dhanmondi', 'House # 34, Road # 14/A, Dhanmondi R/A, Dhaka - 1209', '880-2-44812101-08', 0, 0),
(86, 'Dhaka Medical College Hospital', '705', '20', 'Ramna', '100 Ramna, Central Shaeed Minar Area, Bakshi Bazar, Dhaka - 1000', '+880-2-8626812-16', 0, 0),
(87, 'DNCC Dedicated Covid-19 Hospital', '250', '212', 'Mohakhali', 'N/A', 'N/A', 0, 0),
(88, 'Famous Specialized Hospital', '18', '12', 'Banasree', 'House # 05, Block # H, Main Road, Meradia Bazar, Banasree, Dhaka', '+8801959 333 666', 0, 0),
(89, 'Infectious Diseases Hospital', '50', '0', 'Mohakhali', 'Mohakhali, Dhaka 1212', '01936415368', 0, 0),
(90, 'Kuwait Bangladesh Friendship Govt. Hospital', '169', '26', 'Uttara', '319 Isakha Avenue,Road-6,Beside Rajuk College, Uttara, Dhaka', '01920-294419', 0, 0),
(91, 'Mugda Medical College and Hospital', '350', '24', 'Khilgaon', 'Hazi Kadam Ali Road, Mugda, Khilgaon, Dhaka - 1214', '+88 02 7276032', 0, 0),
(92, 'National Heart Foundation Hospital & Research Institute', '26', '0', 'Mirpur', 'Plot-7/2, Section-2, Mirpur, Dhaka-1216', '+58054708-12', 0, 0),
(93, 'National Institute of Cardiovascular Diseases', '137', '0', 'Mohammadpur', 'Sher-e-Bangla Nagar, Dhaka-1207', '+88-02-9122560-74', 0, 0),
(94, 'National Institute of Diseases of the Chest and Hospital', '104', '10', 'Mohakhali', 'Mohakhali, Dhaka - 1212', '88-02-55067131 - 40', 0, 0),
(95, 'National Institute of Ophthalmology', '100', '0', 'Mohammadpur', 'Sher-e-Bangla Nagar, Dhaka-1207', '+8802-9118336, +8802-8114807', 0, 0),
(96, 'Sarkari Karmachari Hospital, Fulbaria', '90', '6', 'Fulbaria', 'Fulbaria, Dhaka 1000-1200', '+8802-9558017', 0, 0),
(97, 'Shahabuddin Medical College and Hospital', '178', '22', 'Gulshan', 'House No-12, Road No-113/A, Gulshan Model Town, Gulshan-2, Dhaka-1212', '02-222262594, 02-222263387, 02-222284501', 0, 0),
(98, 'Shaheed Suhrawardy Medical College Hospital', '263', '10', 'Mohammadpur', 'Sher-E-Bangla Nagar, Dhaka-1207', '02-8144048', 0, 0),
(99, 'Sheikh Russel Gastro Liver Institute and Hospital', '174', '16', 'Mohakhali', 'TB Gate, Near NIDCH, Mohakhali', '01819221115', 0, 0),
(100, 'Yamagata Dhaka Friendship Hospital', '13', '7', 'Rampura', 'Plot # 823, Road #3, Avenue #8, Banasree, Rampura, Dhaka-1219', '01876-069762', 0, 0);

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
(67, 'Ahnaf', 'Wee', 'Dry cough', 'Runny nose', 'yes', 'no', 'no', 'yes', 'High');

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
  MODIFY `hospital_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `tbl_symptom_checker`
--
ALTER TABLE `tbl_symptom_checker`
  MODIFY `symptom_checker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
