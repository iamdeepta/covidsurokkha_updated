-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 15, 2021 at 04:31 AM
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
-- Database: `coviymbv_covidsurokkha`
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
(4, 'Labaid Hospital Ambulance Service', 'Labaid Hospital Ambulance Service', '10606', 0),
(5, 'Bangladesh Medical College Hospital', 'Dhanmondi', '+880-2-9118202', 0),
(6, 'CMH', 'Cantonement', '+880-2-9871469', 0),
(7, 'Dhaka Eye Hospital', 'Mirpur', '+880-2-8014476', 1),
(8, 'Dhaka Medical College Hospital', 'Bakshibajar', '+880-2-8626812', 1),
(9, 'Dhaka Renal Centre & General Hospital', 'Mirpur', '+880-2-8610928', 1),
(10, 'Evercare Hospitals Dhaka', 'Bashundhara', '+8801714-090000', 0),
(11, 'Apanjon Ambulance Service', 'Dhaka', '029125420', 1),
(12, 'Al-Markazul Islami Ambulance Service', 'Mohammadpur', '01316111688', 0),
(13, 'Life Line Healthcare Limited', 'Lalmatia', '+880-2-8155550', 0),
(14, 'Lab-Aid Cardiac Hospital', 'Banani – Baridhara – Uttara Rayer', '+8801713333337', 0),
(15, 'Lab-Aid Cardiac Hospital', 'Dhanmondi - Azimpur - Shahbagh', '+8801713333337', 0),
(16, 'Lab-Aid Cardiac Hospital', 'Bazaar - Lalmatia - Mohammadpur', '+8801713333337', 0),
(17, 'Rafa Ambulance Service', 'Dhaka', '029110663', 0),
(18, 'Green Ambulance Service', 'Dhanmondi', '029334121', 1),
(19, 'BIRDEM', 'Shahabag Square', '+8801714-559627', 0),
(20, 'Dhaka City Corporation', 'Mirpur Control Room', '029004734', 0),
(21, 'Dhaka City Corporation', 'Nagar Bhaban Control Room', '029556014', 0),
(22, 'Dhaka Medical College Hospital', 'Bakshibazar Area', '505025', 1),
(23, 'Alif Ambulance', 'Panthapath', '88-01713-205555', 0),
(24, 'Ad-Din Hospital', 'Moghbazar', '01713488412', 0),
(25, 'Anjuman-E-Mufidul Islam', 'Kakrail', '8801318242997', 0),
(26, 'Bangabondhu Sheikh Mujib Medical University (BSMMU)', 'Shahbag', '+8801714-559627', 0),
(27, 'Fire Brigade Ambulance Service', 'Dhaka', '+880-2-9555555', 1),
(28, 'Red Crescent Society', 'Moghbazar', '029330188', 1),
(29, 'Sir Salimullah Medical College & Mitford Hospital Ambulance Service', 'Mitford', '+880-2-7319002', 0),
(30, 'Shahid Suhrawardi Hospital, Ambulance Service', 'Sher-E-Bangla Nagar', '029130800', 0),
(31, 'Shishu Hospital, Ambulance Service', 'Sher-E-Bangla Nagar', '028116061', 0),
(32, 'South Asian Hospital, Ambulance Service', 'Panthapath', '028616565', 0),
(33, 'National Heart Foundation Hospital', 'Mirpur', '+880-2-9801874', 0),
(34, 'Holy Family Red Crescent Hospital', 'Moghbazar', '+880-2-9113512', 0),
(35, 'ICDDRB', 'Mohakhali', '+880-2-8811751', 0),
(36, 'Islamia Eye Hospital', 'Farmgate', '+880-2-9119315', 0),
(37, 'Prime General Hospital', 'Tongi', '+880-2-9562267', 0),
(38, 'Red Crescent Society Ambulance Service', 'Moghbazar', '+880-2-9113512', 0),
(39, 'United Hospital', 'Gulshan', '10666', 0),
(40, 'Medinova Medical Service Ltd', 'Dhanmondi', '028113721', 0),
(41, 'Monowara Hospital Ambulance Service', 'Shiddheshwari', '+880-2-8318135', 0),
(42, 'National Heart Institute, Ambulance Service', 'Dhaka', '9122560', 0),
(43, 'Square Hospital', 'Panthapath', '+8801713377775', 0),
(44, 'Day-Night Ambulance Service', 'Dhaka', '029123073', 1),
(45, 'Orthopedic Hospital', 'Ring Road', '+880-2-9112150', 0),
(46, 'Shefa Ambulance Services', 'Mohammadpur', '029111758', 0),
(47, 'Abir Ambulance', 'Dhaka', '01921-189289', 0),
(48, 'Mahin Ambulance', 'Dhaka', '01774-983692', 0),
(49, 'Abdin and Konsus Ambulance', 'Dhaka', '01911538251', 0),
(50, 'Abdul Ambulance', 'Dhaka', '01724-464422', 0),
(51, 'Adiba Ambulance', 'Dhaka', '01712-131834', 0),
(52, 'Al-Sakib Ambulance', 'Dhaka', '01711-060025', 0),
(53, 'Asha and Modern Ambulance', 'Dhaka', '01711-450839', 0),
(54, 'Best Care Ambulance', 'Dhaka', '01911-008118', 0),
(55, 'Dabir Ambulance', 'Dhaka', '01716-523576', 1),
(56, 'Kaium and Sotota Ambulance', 'Dhaka', '01728-215630', 0),
(57, 'MM Ambulance', 'Dhaka', '01819-270157', 0),
(58, 'Sajeda Hospital Ambulance', 'Dhaka', '01777-772572', 0),
(59, 'Shahbajpur Ambulance', 'Dhaka', '01724-464422', 0),
(60, 'Dhaka Ambulance', 'Dhaka', '01714-325325', 0),
(61, 'Desh Ambulance', 'Dhaka', '01790509607', 0),
(62, 'MICU Ambulance', 'Dhaka', '01716269038', 0),
(63, 'Islamia Optical Hospital', 'Dhaka', '+880-2-9119315', 1),
(64, 'Apollo Hospitals', 'Dhaka', '10678', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_approved_laboratories`
--

CREATE TABLE `tbl_approved_laboratories` (
  `lab_id` int(11) NOT NULL,
  `lab_division` varchar(255) NOT NULL,
  `lab_division_bn` varchar(255) NOT NULL,
  `lab_district` varchar(255) NOT NULL,
  `lab_district_bn` varchar(255) NOT NULL,
  `lab_name` varchar(255) NOT NULL,
  `lab_name_bn` varchar(255) NOT NULL,
  `lab_type` varchar(255) NOT NULL,
  `lab_phone` varchar(255) NOT NULL,
  `lab_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_approved_laboratories`
--

INSERT INTO `tbl_approved_laboratories` (`lab_id`, `lab_division`, `lab_division_bn`, `lab_district`, `lab_district_bn`, `lab_name`, `lab_name_bn`, `lab_type`, `lab_phone`, `lab_status`) VALUES
(1, 'Barisal', 'বরিশাল', 'Barisal', 'বরিশাল', '(SBMC) Sher E Bangla Medical College,Barisal', '(এসবিএমসি) শের-ই-বাংলা মেডিকেল কলেজ, বরিশাল', 'govt', '', 0),
(2, 'Chattogram', 'চট্টোগ্রাম', 'Chattogram', 'চট্টোগ্রাম', '(BITID) Bangladesh Institute of Tropical & Infectious Diseases, Chattagram', '(বিআইটিআইডি) বাংলাদেশ ইন্সটিটিউট অফ ট্রপিকাল এন্ড ইনফেকশাস ডিজিজেস, চট্টগ্রাম', 'govt', '', 0),
(3, 'Chattogram', 'চট্টোগ্রাম', 'Cox\'s Bazar', 'কক্স বাজার', '(CoxMC) Cox\'s Bazar Medical College (IEDCR Field Laboratory)', '(কক্সএমসি) কক্সবাজার মেডিকেল কলেজ (আইইডিসিআর ফিল্ড ল্যাবরেটরি)', 'govt', '', 0),
(4, 'Chattogram', 'চট্টোগ্রাম', 'Cumilla', 'কুমিল্লা', '(CuMC) Cumilla Medical College', '(সিইউএমসি) কুমিল্লা মেডিকেল কলেজ', 'govt', '', 0),
(5, 'Dhaka', 'ঢাকা', 'Dhaka', 'ঢাকা', '(NILMRC) National Institute of Laboratory Medicine & Referral Centre', '(এনআইএলএমআরসি) ন্যাশনাল ইন্সটিটিউট অফ ল্যাবরেটরি মেডিসিন এন্ড রেফারাল সেন্টার', 'govt', '', 0),
(6, 'Dhaka', 'ঢাকা', 'Dhaka', 'ঢাকা', '(NPML-IPH) Institute of Public Health', '(এনপিএমএল-আইপিএইচ) ইন্সটিটিউট অফ পাবলিক হেলথ', 'govt', '', 0),
(7, 'Dhaka', 'ঢাকা', 'Dhaka', 'ঢাকা', '(NIPSOM) National Institute of Public Health', '(এনআইপিএসওএম) ন্যাশনাল ইন্সটিটিউট অফ পাবলিক হেলথ', 'govt', '', 0),
(8, 'Dhaka', 'ঢাকা', 'Narayangonj', 'নারায়ণগঞ্জ', 'Narayangonj 300 Bed Hospital', 'নারায়ণগঞ্জ ৩০০ বেড হাসপাতাল ', 'govt', '', 0),
(9, 'Khulna', 'খুলনা', 'Khulna', 'খুলনা', '(KMC) Khulna Medical College', '(কেএমসি) খুলনা মেডিকেল কলেজ', 'govt', '', 0),
(10, 'Khulna', 'খুলনা', 'Kustia', 'কুষ্টিয়া', '(KuMC) Kustia Medical College', '(কেইউএমসি) কুষ্টিয়া মেডিকেল কলেজ', 'govt', '', 0),
(11, 'Mymensingh', 'ময়মনসিংহ', 'Mymensingh', 'ময়মনসিংহ', '(MMC) Mymensingh Medical College', '(এমএমসি) ময়মনসিংহ মেডিকেল কলেজ', 'govt', '', 0),
(12, 'Rajshahi', 'রাজশাহী', 'Bogura', 'বগুড়া', '(SZRMC) Shahid Ziaur Rahman Medical College, Bogura', '(এসজেডআরএমসি) শহীদ জিয়াউর রহমান মেডিকেল কলেজ, বগুড়া', 'govt', '', 0),
(13, 'Rajshahi', 'রাজশাহী', 'Rajshahi', 'রাজশাহী', '(RMC) Rajshshi Medical College', '(আরএমসি) রাজশাহী মেডিকেল কলেজ', 'govt', '', 0),
(14, 'Rangpur', 'রংপুর', 'Dinajpur', 'দিনাজপুর', 'M Abdur Rahim Medical College, Dinajpur', 'এম আব্দুর রহিম মেডিকেল কলেজ, দিনাজপুর', 'govt', '', 0),
(15, 'Rangpur', 'রংপুর', 'Rangpur', 'রংপুর', '(RpMC) Rangpur Medical College', '(আরপিএমসি) রংপুর মেডিকেল কলেজ', 'govt', '', 0),
(16, 'Sylhet', 'সিলেট', 'Sylhet', 'সিলেট', '(SOMC) Sylhet MAG Osmani Medical College', '(এসওএমসি) সিলেট এমএজি ওসমানি মেডিকেল কলেজ', 'govt', '', 0),
(17, 'Noakhali', 'নোয়াখালি', 'Noakhali', 'নোয়াখালি', 'Abdul Malek Ukil Medical College, Noakhali', 'আব্দুল মালেক উকিল মেডিকেল কলেজ, নোয়াখালি', 'govt', '', 0),
(18, 'Chattogram', 'চট্টোগ্রাম', 'Chattogram', 'চট্টোগ্রাম', 'Chattogram Medical College, Chattogram', 'চট্টগ্রাম মেডিকেল কলেজ, চট্টগ্রাম', 'govt', '', 0),
(19, 'Dhaka', 'ঢাকা', 'Dhaka', 'ঢাকা', 'IEDCR-Govt Employees', 'আইইডিসিআর - গভার্নমেন্ট এমপ্লোইস', 'govt', '', 0),
(20, 'Dhaka', 'ঢাকা', 'Fulbaria', 'ফুলবাড়িয়া', 'Sarkari Karmochari Hospital', 'সরকারি কর্মচারি হাসপাতাল', 'govt', '', 0),
(21, 'Dhaka', 'ঢাকা', 'Dhaka', 'ঢাকা', 'ICDDR\'B, Mohakhali', 'আইসিডিডিআরবি, মহাখালি', 'private', '', 0),
(22, 'Dhaka', 'ঢাকা', 'Dhaka', 'ঢাকা', 'DMFR- Moliculer lab & Diagnostic, Sobhanbag', 'ডিএমএফআর - মলিকুলার ল্যাব এন্ড ডায়াগনস্টিক, সোহানবাগ', 'private', '', 0),
(23, 'Dhaka', 'ঢাকা', 'Dhaka', 'ঢাকা', 'LABAID, Dhanmondi', 'ল্যাবএইড, ধানমন্ডি', 'private', '', 0),
(24, 'Dhaka', 'ঢাকা', 'Dhaka', 'ঢাকা', 'Universal Medical College Hospital, Mohakhali', 'ইউনিভার্সাল মেডিকেল কলেজ হাসপাতাল, মহাখালি', 'private', '', 0),
(25, 'Dhaka', 'ঢাকা', 'Dhaka', 'ঢাকা', 'Ideshi, Mohakhali', 'ইদেশি, মহাখালি', 'private', '', 0),
(26, 'Dhaka', 'ঢাকা', 'Dhaka', 'ঢাকা', 'Popular Diagnostic Centre, Dhanmondi', 'পপুলার ডায়াগনস্টিক সেন্টার, ধানমন্ডি', 'private', '', 0),
(27, 'Dhaka', 'ঢাকা', 'Dhaka', 'ঢাকা', 'Square Hospital, Panthapath', 'স্কয়ার হাসপাতাল, পান্থপথ', 'private', '', 0),
(28, 'Dhaka', 'ঢাকা', 'Dhaka', 'ঢাকা', 'Evercare Hospital, Boshundhara', 'এভারকেয়ার হাসপাতাল, বসুন্ধরা', 'private', '', 0),
(29, 'Dhaka', 'ঢাকা', 'Dhaka', 'ঢাকা', 'Prava Diagnostic, Banani', 'প্রাভা ডায়াগনস্টিক, বনানি', 'private', '', 0),
(30, 'Dhaka', 'ঢাকা', 'Dhaka', 'ঢাকা', 'United Hospital, Gulshan', 'ইউনাইটেড হাসপাতাল, গুলশান', 'private', '', 0),
(31, 'Dhaka', 'ঢাকা', 'Dhaka', 'ঢাকা', 'Stemz Health Care', 'স্টেমজ হেলথ কেয়ার', 'private', '', 0),
(32, 'Dhaka', 'ঢাকা', 'Dhaka', 'ঢাকা', 'Gulshan Clinic Limited', 'গুলশান ক্লিনিক লিমিটেড', 'private', '', 0),
(33, 'Dhaka', 'ঢাকা', 'Dhaka', 'ঢাকা', 'Anwar Khan Modern Medical College Hospital, Dhanmondi, Dhaka', 'আনোয়ার খান মডার্ন মেডিকেল কলেজ হাসপাতাল, ধানমন্ডি, ঢাকা', 'private', '', 0),
(34, 'Dhaka', 'ঢাকা', 'Dhaka', 'ঢাকা', 'Novas Clinical Research Service Limited, Paribagh, Dhaka', 'নোভাস ক্লিনিকাল রিসার্চ সার্ভিস লিমিটেড, পরিবাগ, ঢাকা', 'private', '', 0),
(35, 'Dhaka', 'ঢাকা', 'Gazipur', 'গাজীপুর', 'International Medical College Hospital, Tongi, Gazipur', 'ইন্টারন্যাশনাল মেডিকেল কলেজ হাসপাতাল, টংগী, গাজীপুর', 'private', '', 0),
(36, 'Dhaka', 'ঢাকা', 'Dhaka', 'ঢাকা', 'Green Life Medical College, Dhanmondi, Dhaka', 'গ্রিন লাইফ মেডিকেল কলেজ, ধানমন্ডি, ঢাকা', 'private', '', 0),
(37, 'Dhaka', 'ঢাকা', 'Dhaka', 'ঢাকা', 'Aichi Hospital Limited, Uttara, Dhaka', 'আইচি হাসপাতাল লিমিটেড, উত্তরা, ঢাকা', 'private', '', 0),
(38, 'Rajshahi', 'রাজশাহী', 'Bogura', 'বগুড়া', 'TMMS Medical College Hospital & Rafatullah Community Hospital', 'টিএমএমএস মেডিকেল কলেজ হাসপাতাল এন্ড রাফাতুল্লাহ কমিউনিটি হাসপাতাল', 'private', '', 0),
(39, 'Dhaka', 'ঢাকা', 'Dhaka', 'ঢাকা', 'Medinova Medical Services', 'মেডিনোভা মেডিকেল সার্ভিসেস', 'private', '', 0),
(40, 'Dhaka', 'ঢাকা', 'Dhaka', 'ঢাকা', 'Alok Health Care Limited, Mirpur, Dhaka\r\n', 'অলোক হেলথ কেয়ার লিমিটেড, মিরপুর, ঢাকা', 'private', '', 0),
(41, 'Dhaka', 'ঢাকা', 'Dhaka', 'ঢাকা', 'Health Care Diagnostic Center Limited, Dhaka', 'হেলথ কেয়ার ডায়াগনস্টিক সেন্টার লিমিটেড, ঢাকা', 'private', '', 0),
(42, 'Dhaka', 'ঢাকা', 'Dhaka', 'ঢাকা', 'Bashundhara Medical & Diagnostic Center, Shyamoli, Dhaka', 'বসুন্ধরা মেডিকেল এন্ড ডায়াগনস্টিক সেন্টার, শ্যামলী, ঢাকা', 'private', '', 0),
(43, 'Dhaka', 'ঢাকা', 'Dhaka', 'ঢাকা', 'DNA Solution Limited, Bir Uttam Kazi Nazrul Islam Road, West Panthopath, Dhaka', 'ডিএনএ সলুশন লিমিটেড, বীর উত্তম কাজী নজরুল ইসলাম রোড, দক্ষিণ পান্থপথ, ঢাকা', 'private', '', 0),
(44, 'Dhaka', 'ঢাকা', 'Dhaka', 'ঢাকা', 'Biomed Diagnostic, Navana Newberry Press, Dhaka', 'বায়োমেড ডায়াগনস্টিক, নাভানা, নিউবেরি প্রেস, ঢাকা', 'private', '', 0),
(45, 'Dhaka', 'ঢাকা', 'Dhaka', 'ঢাকা', 'Dynamic Lab Diagnostic & Medical Check-up, Rampura, Dhaka', 'ডাইনামিক ল্যাব ডায়াগনস্টিক এন্ড মেডিকেল চেক-আপ, রামপুরা, ঢাকা', 'private', '', 0),
(46, 'Dhaka', 'ঢাকা', 'Dhaka', 'ঢাকা', 'BRB Hospital Limited, Panthopath, Dhaka', 'বিআরবি হাসপাতাল লিমিটেড, পান্থপথ, ঢাকা', 'private', '', 0),
(47, 'Dhaka', 'ঢাকা', 'Dhaka', 'ঢাকা', 'CSBF Health Center, Tejgaon, Dhaka', 'সিএসবিএফ হেলথ সেন্টার, তেজগাঁও, ঢাকা', 'private', '', 0),
(48, 'Dhaka', 'ঢাকা', 'Dhaka', 'ঢাকা', 'Prime Diagnostic Limited, Dhaka', 'প্রাইম ডায়াগনস্টিক লিমিটেড, ঢাকা', 'private', '', 0),
(49, 'Dhaka', 'ঢাকা', 'Dhaka', 'ঢাকা', 'Prescription Point, Dhaka', 'প্রেসক্রিপশন পয়েন্ট, ঢাকা', 'private', '', 0),
(50, 'Dhaka', 'ঢাকা', 'Dhaka', 'ঢাকা', 'Bangladesh Diabetic Association, Dhaka', 'বাংলাদেশ ডায়াবেটিক এসোসিয়েশন, ঢাকা', 'private', '', 0),
(51, 'Sylhet', 'সিলেট', 'Sylhet', 'সিলেট', 'Shimantik Pathology & Diagnostic Center, Sylhet', 'সিমান্তিক প্যাথোলোজি এন্ড ডায়াগনস্টিক সেন্টার, সিলেট', 'private', '', 0),
(52, 'Chattogram', 'চট্টোগ্রাম', 'Chattogram', 'চট্টোগ্রাম', 'Chevron Clinical Laboratory Pvt Limited, Chittagong', 'শেভরন ক্লিনিকাল ল্যাবরেটরি প্রাইভেট লিমিটেড, চট্টগ্রাম', 'private', '', 0),
(53, 'Dhaka', 'ঢাকা', 'Kishoregonj', 'কিশোরগঞ্জ', 'Johurul Islam Medical College & Hospital, Kishoregonj', 'জহুরুল ইসলাম মেডিকেল কলেজ এন্ড হাসপাতাল, কিশোরগঞ্জ', 'private', '', 0);

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
(1, 'Dhaka', '491288', '69', 0, 0, 0),
(2, 'Chittagong', '145814', '39', 0, 0, 0),
(3, 'Sylhet', '31281', '9', 0, 0, 0),
(4, 'Khulna', '68573', '46', 0, 0, 0),
(5, 'Rajshahi', '69553', '15', 0, 0, 0),
(6, 'Barisal', '24194', '10', 0, 0, 0),
(7, 'Rangpur', '33098', '14', 0, 0, 0),
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
(1, 'Evercare Hospital Limited Dhaka', '7', 2, 'Bashundhara Residential Area', 'Plot: 81, Block: E, Dhaka - 1229', '09666-710678', '2021-07-15 01:38 pm', 0, 0),
(2, 'AMZ Hospital Ltd.', '0', 0, '', '', '10699, 01847331010', '2021-07-15 01:38 pm', 0, 1),
(3, 'Asgar Ali Hospital', '12', 1, 'Gendaria', 'Playground, 111/1/A Distillery Road, Gendaria, Beside Dhupkhola, Dhaka - 1204', '09666-710602', '2021-07-15 01:38 pm', 0, 0),
(4, 'Renaissance Hospital And Research Institute Ltd.', 'N/A', 0, 'Dhanmondi', '4 Road No 13/2, Dhaka - 1205', '01712-259761', '', 0, 0),
(5, 'ICU Specialized Hospital Limited', 'N/A', 0, 'Puran Dhaka', 'Nawab Katra Ln - Dhaka, Bangladesh - 1000', '01854-560761', '', 0, 0),
(6, 'CKD & Urology Hospital ( ICU & NEPHROLO )', '', 0, '', '', '02-9127306', '', 0, 1),
(7, 'Bangladesh Specialized Hospital Limited', '0', 0, 'Shahjadpur', 'Road-4, Zip Code, Dhaka, Bangladesh - 1215, Shahjadpur', '09666-700100', '2021-07-15 01:38 pm', 0, 0),
(8, 'Dhaka Paediatric-Neonatal & General Hospital', '', 0, '', '', '01618-225566', '', 0, 1),
(9, 'City Hospital & Diagnostic Center', '9', 0, 'Dhanmondi', 'House No#1, 8 Satmasjid Road, Dhaka, Bangladesh - 1207', '02-8143312', '2021-07-15 01:38 pm', 0, 0),
(10, 'Samorita Hospital Ltd', '8', 0, 'Panthapath', '89/1, Panthapath, Dhaka - 1215', '0248117618', '2021-07-15 01:38 pm', 0, 0),
(11, 'Ad-Din Medical College Hospital Mogbazar, Dhaka', '14', 0, 'Moghbazar', '2 Bara Moghbazar, Outer Circular Road, Dhaka - 1217', '01713488412', '2021-07-15 01:38 pm', 0, 0),
(12, 'Monowara Hospital Ltd.', '8', 0, 'Siddheshwari', '54, Siddheshwari Road, Dhaka, Bangladesh -1217', '01715-839400', '2021-07-15 01:38 pm', 0, 0),
(13, 'Impulse Hospital', '154', 7, 'Tejgaon', 'Address: 304/E, Tejgaon Industrial Area, Dhaka - 1208', '10644', '2021-07-15 01:38 pm', 0, 0),
(14, 'Dhaka Community Medical College and Hospital', '', 0, '', '', '02-9351190', '', 0, 1),
(15, 'Al-Karim General Hospital Limited', '', 0, '', '', '01926-633987', '', 0, 1),
(16, 'Baridhara General Hospital', '', 0, '', '', '01768-612835', '', 0, 1),
(17, 'Care Medical College Hospital', '6', 3, 'Mohammadpur', '1/5, Block-B ( College gate) Mohammadpur, Dhaka - 1207', '02-9138518', '2021-07-15 01:38 pm', 0, 0),
(18, 'Al Helal Specialized Hospital, Dhaka.', '', 0, '', '', '02-9006820', '', 0, 1),
(19, 'Aichi Hospital Ltd.', '', 0, '', '', '02-44891001', '', 0, 1),
(20, 'United Hospital Limited, Dhaka', '3', 1, 'Gulshan', 'Plot 15, Road 71, Gulshan, Dhaka - 1212', '09666-710666', '2021-07-15 01:38 pm', 0, 0),
(21, 'Dhanmondi General And Kidney Hospital Limited', '1', 2, 'Dhanmondi', 'Green Road, House - 12 , Road #7, Dhanmondi, Dhaka, Bangladesh -1205', '02-9670372', '2021-07-15 01:38 pm', 0, 0),
(22, 'Insaf Barakah Kidney and General Hospital', '4', 0, 'Moghbazar', '11, Shahid Tajuddin Ahmed Sharani Moghbazar, Dhaka-1217', '01716-306631', '2021-07-15 01:38 pm', 0, 0),
(23, 'Islami Bank Hospital, Motijhil', '', 0, '', '', '02-9336423', '', 0, 1),
(24, 'Popular Medical College & Hospital', '2', 0, 'Dhanmondi', 'House: 08, Road: 02, Dhanmondi, Dhaka - 1205', '09666 787800', '2021-07-15 01:38 pm', 0, 0),
(25, 'IBN SINA Medical College Hospital', '11', 0, 'Kallyanpur', '1/1-B, Kallyanpur, Dhaka - 1216', '01311-799593', '2021-07-15 01:38 pm', 0, 0),
(26, 'Rushmono Specialized Hospital', '', 0, '', '', '02-49357700', '', 0, 1),
(27, 'Islami Bank Hospital, Begum Rokeya Sarani', '', 0, '', '', '01992-346631', '', 0, 1),
(28, 'Central Hospital Ltd.', '', 0, '', '', '02-9660015', '', 0, 1),
(29, 'Millennium Heart & General Hospital Limited', '6', 1, 'Dhanmondi', '4/9, Block-F, Lalmatia, Dhaka, Bangladesh', '01920151757', '2021-07-15 01:38 pm', 0, 0),
(30, 'AL-MANAR HOSPITAL LTD.', '', 0, '', '', '02-9121588', '', 0, 1),
(31, 'Holy Family Red Cresent Medical College Hospital', '0', 4, 'Moghbazar', '1, Eskaton Garden Road, Bara Moghbazar, Dhaka, Bangladesh - 1000', '02-48311721', '2021-07-15 01:38 pm', 0, 0),
(32, 'BIRDEM General Hospital', '131', 12, 'Shahbagh', '122 Kazi Nazrul Islam Avenue, Shahbagh, Dhaka, Bangladesh -1000', '029665003', '2021-07-15 01:38 pm', 0, 0),
(33, 'Labaid Hospital', '0', 0, 'Dhanmondi', 'House- 06, Road-04, Dhanmondi, Dhaka - 1205', '09666-710606', '2021-07-15 01:38 pm', 0, 0),
(34, 'Square Hospital, Dhaka', '16', 7, 'Panthapath', '18F, Bir Uttam Qazi Nuruzzaman Sarak, West Panthapath, Dhaka, Bangladesh - 1205', '+880-28144400', '2021-07-15 01:38 pm', 0, 0),
(35, 'Kingston Hospital', '', 0, '', '', '01952-989866', '', 0, 1),
(36, 'Comfort Diagnostic Centre Pvt. Ltd.', '', 0, '', '', '01731-956033', '', 0, 1),
(37, 'Proshanti Hospital', '1', 2, 'Malibagh', 'House No -6,Ground Floor ,Shantibagh Road, Malibagh Mor ,Ramna, Dhaka, Bangladesh', '', '2021-07-15 01:38 pm', 0, 0),
(38, 'Japan East West Medical College Hospital', '25', 8, 'Turag', 'Aichi Nagar, JBCS Sarani Horirampur, Turag, Dhaka, 1711', '09611-222666', '2021-07-15 01:38 pm', 0, 0),
(39, 'Khidmah Hospital Private Limited', '', 0, '', '', '09606-063030', '', 0, 1),
(40, 'Farazy Hospital Ltd', '', 0, '', '', '01766-111137', '', 0, 1),
(41, 'Kurmitola General Hospital ( 500 Bed )', '0', 0, 'Kurmitola', 'New Airport Road, Kurmitola, Dhaka, Bangladesh, Cantonment, Dhaka-1206', '02-55062388', '2021-07-15 01:38 pm', 0, 0),
(42, 'Japan Bangladesh Friendship Hospital, Dhaka', '6', 0, 'Dhanmondi', 'Zigatola Bus Stand, 55 Satmasjid Road, Dhaka 1209', '+8801711647877', '2021-07-15 01:38 pm', 0, 0),
(43, 'Nostrum Hospital', '', 0, '', '', '01786-355355', '', 0, 1),
(44, 'Universal Medical College Hospital, Dhaka', '0', 1, 'Mohakhali', '74G/75, Pea-cock Square, New airport road, Mohakhali. Dhaka 1215', '+8809606111222', '2021-07-15 01:38 pm', 0, 0),
(45, 'BIRDEM General Hospital 2 (Child and Mother)', '', 0, '', '', '02-41050710', '', 0, 1),
(46, 'Royal Care And Surgical Hospital', '', 0, '', '', '01783-199990', '', 0, 1),
(47, 'Padma General Hospital Ltd.', '', 0, '', '', '02-9661528', '', 0, 1),
(48, 'Dhaka Central International Medical College & Hospital', '11', 3, 'Mohammadpur', '2/1 Ring Road, Dhaka 1207', '10651', '2021-07-15 01:38 pm', 0, 0),
(49, 'Ahsania Mission Cancer and General Hospital', '', 0, '', '', '02-8931141', '', 0, 1),
(50, 'BIHS Hospital', '', 0, '', '', '01783-917151', '', 0, 1),
(51, 'Uttara Cresent Hospital', '0', 1, 'Uttara', '40 Rabindra Sarani, 7 Uttara, Dhaka, Bangladesh - 1230', '01917-704156', '2021-07-15 01:38 pm', 0, 0),
(52, 'Pancare Hospital Ltd.', '', 0, '', '', '01844-001024', '', 0, 1),
(53, 'Memory Medical Centre', '', 0, '', '', '02-48314317', '', 0, 1),
(54, 'Delta Medical College & Hospital', '', 0, '', '', '02-9029152', '', 0, 1),
(55, 'Delta Hospital Ltd.', '', 0, '', '', '02-9022410', '', 0, 1),
(56, 'Islami Bank Central Hospital, Fakirapul', '', 0, '', '', '02-9355801', '', 0, 1),
(57, 'Dhanmondi Clinic Pvt Ltd', '2', 0, 'Dhanmondi', 'House #2, Road-8, Dhanmondi R/A, Dhaka, Bangladesh', '029675511', '2021-07-15 01:38 pm', 0, 0),
(58, 'Bangabandhu Sheikh Mujib Medical University (BSMMU)', '54', 0, 'Merul Badda', 'Building-10, Road- 56, Badda, Dhaka, Bangladesh', '09611-677777', '2021-07-15 01:38 pm', 0, 0),
(59, 'Hi-tech Multicare Hospital', '', 0, '', '', '01672-241413', '', 0, 1),
(60, 'Medical College For Women and Hospital', '', 0, '', '', '02-8913939', '', 0, 1),
(61, 'Dr. Azmal Hospital Ltd', '5', 0, 'Mirpur', 'House No # 5, Road No # 5 Block A, Section -6 Mirpur, Dhaka - 1216', '09612-304304', '2021-07-15 01:38 pm', 0, 0),
(62, 'BRB Hospitals Limited', '', 0, '', '', '02-9140333', '', 0, 1),
(63, 'MARKS Medical College & Hospital', '', 0, '', '', '02-8057776', '', 0, 1),
(64, 'KC Hospital & Diagnostic Center', '', 0, '', '', '01777-753464', '', 0, 1),
(65, 'Metropolitan Medical Centre Ltd.', '', 0, '', '', '01718-237035', '', 0, 1),
(66, 'Better life Hospital, Rampura', '28', 10, 'Rampura', 'East Rampura, Dhaka, Bangladesh', '09639786786', '2021-07-15 01:38 pm', 0, 0),
(67, 'Green Life Medical College Hospital', '15', 0, 'Green Road', 'MAK Khan Tower 31 and 31/1, Bir Uttam K.M. Shafiullah Sarak (Green Road) Dhaka - 1205', '+88-029612345', '2021-07-15 01:38 pm', 0, 0),
(68, 'Reliance General & Renal Hospital', '', 0, '', '', '01849-428888', '', 0, 1),
(69, 'Anwer Khan Modern Medical College Hospital', '', 0, '', '', '02-9670295', '', 0, 1),
(70, 'Shin Shin Japan Hospital', '', 0, '', '', '02-8921429', '', 0, 1),
(71, 'Sajida Hospital', '', 0, '', '', '02-9890513', '', 0, 1),
(72, 'Hi-Care General Hospital Ltd, Dhaka', '0', 0, 'Uttara', 'House#24 & 26 , Lake Drive Road, Sector#7, Uttara Model Town -1230, Dhaka, Bangladesh', '+880255094231', '2021-07-15 01:38 pm', 0, 0),
(73, 'Central Police Hospital, Rajarbag, Dhaka', '159', 0, 'Rajarbag', '2 DIT Avenue - Dhaka, Bangladesh - 1000', '01320-225598', '2021-07-15 01:38 pm', 0, 0),
(74, 'Ashiyan Medical College Hospital', '', 0, '', '', '01841-133501', '', 0, 1),
(75, 'Pro-Active Medical College & Hospital Ltd.', '', 0, '', '', '01902-556070', '', 0, 1),
(76, 'Combined Military Hospital (CMH)', '', 0, '', '', '01724-579521', '', 0, 1),
(77, 'Gonoshasthaya Nagar Hospital', '3', 4, 'Dhanmondi', 'Road # 6, House # 14/E Dhanmondi – 1205', '+8801711847719', '2021-07-15 01:38 pm', 0, 0),
(78, 'Enam Medical College and Hospital', '', 0, '', '', '01716-358146', '', 0, 1),
(81, '250 Beded TB Hospital Shyamoli', '71', 12, 'Shyamoli', '250 Bedded TB Hospital , Shyamoli, Dhaka, Bangladesh -1207', '0255059085', '2021-07-15 01:38 pm', 0, 0),
(82, 'AMZ Hospital Ltd.', '0', 0, 'Uttar Badda', 'Cha- 80/3, Shwadhinata Sarani (Progati Sarani), Uttar Badda, Dhaka -1212', '10699', '2021-07-15 01:38 pm', 0, 0),
(83, 'Center for Kidney Diseases and Urology Hospital', 'N/A', 0, 'Shyamoli', 'House #32, Road-03, Shamoli, Dhaka, Bangladesh', '02-9127306', '', 0, 0),
(84, 'Bangladesh Institute of Health Sciences General Hospital, Dhaka', '26', 1, 'Mirpur', '125/1 Darus Salam, Mirpur Dhaka, Bangladesh -1216', '+8801783-917151', '2021-07-15 01:38 pm', 0, 0),
(85, 'Bangladesh Medical College & Hospital', '7', 0, 'Dhanmondi', 'House # 34, Road # 14/A, Dhanmondi R/A, Dhaka - 1209', '880-2-44812101', '2021-07-15 01:38 pm', 0, 0),
(86, 'Dhaka Medical College Hospital, Dhaka', '13', 0, 'Ramna', '100 Ramna, Central Shaheed Minar Area, Bakshi Bazar, Dhaka,Bangladesh', '55165143', '2021-07-15 01:38 pm', 0, 0),
(87, 'DNCC Dedicated Covid-19 Hospital', '459', 41, 'Mohakhali', '72/A, Shaheed Tajuddin Ahmed Sharani, Mohakhali, Dhaka, Bangladesh - 1212', '+8809611805414', '2021-07-15 01:38 pm', 0, 0),
(88, 'Famous Specialized Hospital', '15', 8, 'Banasree', 'House # 05, Block # H, Main Road, Meradia Bazar, Banasree, Dhaka, Bangladesh', '+8801959333666', '2021-07-15 01:38 pm', 0, 0),
(89, 'Infectious Diseases Hospital, Dhaka', '44', 0, 'Mohakhali', 'Mohakhali, Dhaka, Bangladesh - 1212', '01936415368', '2021-07-15 01:38 pm', 0, 0),
(90, 'Kuwait Bangladesh Friendship Govt. Hospital', '27', 2, 'Uttara', '319 Isakha Avenue,Road-6,Beside Rajuk College, Uttara, Dhaka, Bangladesh', '01920-294419', '2021-07-15 01:38 pm', 0, 1),
(91, 'Mugda Medical College and Hospital', '91', 1, 'Khilgaon', 'Hazi Kadam Ali Road, Mugda, Khilgaon, Dhaka - 1214', '+88027276032', '2021-07-15 01:38 pm', 0, 0),
(92, 'National Heart Foundation Hospital & Research Institute', '8', 0, 'Mirpur', 'Plot-7/2, Section-2, Mirpur, Dhaka-1216', '0258054708', '2021-07-15 01:38 pm', 0, 0),
(93, 'National Institute of Cardiovascular Diseases, Dhaka', '128', 0, 'Mohammadpur', 'Sher-e-Bangla Nagar, Dhaka - 1207', '01713013064', '2021-07-15 01:38 pm', 0, 0),
(94, 'National Institute of Diseases of the Chest and Hospital,Dhaka', '26', 6, 'Mohakhali', 'Mohakhali, Dhaka - 1212', '+88-02-55067131', '2021-07-15 01:38 pm', 0, 0),
(95, 'National Institute of Ophthalmology, Dhaka(NIO)', '100', 0, 'Mohammadpur', 'Sher-e-Bangla Nagar, Dhaka, Bangladesh - 1207', '01819243370', '2021-07-15 01:38 pm', 0, 0),
(96, 'Sarkari Karmachari Hospital- Fulbaria, Dhaka', '34', 1, 'Fulbaria', 'Fulbaria, Dhaka, Bangladesh - 1000-1200', '01550601157', '2021-07-15 01:38 pm', 0, 0),
(97, 'Shahabuddin Medical College and Hospital, Gulshan', '157', 13, 'Gulshan', 'House No-12, Road No-113/A, Gulshan Model Town, Gulshan-2, Dhaka-1212', '01915055555', '2021-07-15 01:38 pm', 0, 0),
(98, 'Shaheed Suhrawardy Medical College Hospital, Dhaka', '50', 0, 'Mohammadpur', 'Sher-E-Bangla Nagar, Dhaka, Bangladesh - 1207', '0255026702', '2021-07-15 01:38 pm', 0, 0),
(99, 'Sheikh Russel Gastro Liver Institute and Hospital', '89', 1, 'Mohakhali', 'TB Gate, Near NIDCH, Mohakhali', '', '2021-07-15 01:38 pm', 0, 0),
(100, 'Yamagata Dhaka friendship Hospital', '4', 0, 'Rampura', 'Plot # 823, Road #3, Avenue #8, Banasree, Rampura, Dhaka-1219', '01876-069762', '2021-07-15 01:38 pm', 0, 0),
(101, 'Al Haramain Hospital Private Limited, Sylhet', '0', 0, 'Sylhet', 'N206, Sylhet, Sylhet Division, Sylhet 3100', '+880821729981', '2021-07-15 01:38 pm', 0, 0),
(102, 'AL-MANAR HOSPITAL LTD', '7', 5, 'Mohammadpur', 'Plot No: Umo, Block No: Rossoi, Satmosjid Road, Mohammadpur, Dhaka -1207', '01550020885', '2021-07-11 10:40 am', 0, 0),
(103, 'Anwar Khan Modern Medical College Hospital', '48', 17, 'Dhanmondi', 'House # 17,Road # 8,Dhanmondi R/A. Dhaka -1205', '+8802-58616074', '2021-07-15 01:38 pm', 0, 0),
(104, 'Asian Hospital (Pvt.) Limited, Coxs Bazar', '0', 2, 'Chittagong', 'Thana Rastar Matha, Chiringa, Chakaria, Cox\'s Bazar', '01717-690067', '2021-07-15 01:38 pm', 0, 0),
(105, 'Bagerhat District Hospital, Bagerhat', '11', 3, 'Bagerhat', 'Sadar Hospital Road, Bagerhat', '01711008607', '2021-07-15 01:38 pm', 0, 0),
(106, 'Bandarban District Hospital, Bandarban', '85', 0, 'Bandarban', 'Bandarban', '01866471819', '2021-07-15 01:38 pm', 0, 0),
(107, 'Bangabandhu Memorial Hospital,Chattogram', '30', 5, 'Chittagong', 'Zakir Hossain Road, U.S.T.C Foy’s lake, Chittagong', '', '2021-07-15 01:38 pm', 0, 0),
(108, 'Bangladesh Institute of Tropical and Infectious Diseases, Fouzdarhat', '9', 5, 'Fouzdarhat', 'Salimpur, Jafarabad, Fouzderhat, Sitakunda Chittagong - 4317', '0244075165', '2021-07-15 01:38 pm', 0, 0),
(109, 'Barguna District Hospital, Barguna', '0', 0, 'Barguna', 'Hospital Road, Barguna Sadar, Barguna', '01711076416', '2021-07-15 01:38 pm', 0, 0),
(110, 'Bhola District Hospital, Bhola', '77', 6, 'Barisal', 'Western Para Road, Bhola Sadar, Bhola, Barisal Division', '01711042710', '2021-07-15 01:38 pm', 0, 0),
(111, 'Brahmanbaria 250 Bed District Sadar Hospital', '1', 0, 'Brahmanbaria', 'Sadar Hospital Road, Brahmanbaria 3400', '01714914418', '2021-07-15 01:38 pm', 0, 0),
(112, 'Chandpur 250 Bed General Hospital', '0', 0, 'Chandpur', 'Kobi Nazrul Road, Chandpur 3600', '01865174658', '2021-07-15 01:38 pm', 0, 0),
(113, 'Chapai Nababganj 250 bed Adhunik Sadar Hospital', '5', 0, 'Rajshahi', 'Sadar Hospital, Chapai Nawabganj', '078152207', '2021-07-15 01:38 pm', 0, 0),
(114, 'Chattogram General Hospital, Chattogram', '22', 2, 'Chittagong', 'Andarkillah, Chittagong', '01730324768', '2021-07-15 01:38 pm', 0, 0),
(115, 'Chattogram Maa Shishu O General Hospital', '7', 0, 'Chittagong', 'Agrabad, Chittagong 4100, Bangladesh', '031711236', '2021-07-15 01:38 pm', 0, 0),
(116, 'Chattogram Medical College Hospital,Chattogram', '84', 4, 'Chittagong', '57 K.B. Fazlul Kader Road, Chittagong 4203', '031-630335', '2021-07-15 01:38 pm', 0, 0),
(117, 'Chattogram Metropolitan Hospital Limited', '3', 0, 'Chittagong', '698, 752 O.R. Nizam Road, Chittagong 4001', '01814-651077', '2021-07-15 01:38 pm', 0, 0),
(118, 'Chuadanga District Hospital, Chuadanga', '62', 0, 'Khulna', 'Sadar Hospital, Chuadanga', '01711448880', '2021-07-15 01:38 pm', 0, 0),
(119, 'CMP-Bidyanondo Field Hospital', '0', 0, 'Chittagong', 'Sagorika Road, Chittagong', '01844-240403', '2021-07-15 01:38 pm', 0, 0),
(120, 'Cox\'s Bazar 250 Bed District Sadar Hospital', '30', 4, 'Chittagong', 'Cox\'s Bazar, Chittagong', '034163884', '2021-07-15 01:38 pm', 0, 0),
(121, 'CSCR Hospital, Chittagong', '3', 0, 'Chittagong', 'CSCR Bhaban, O.R. Nizam Road, Chittagong', '01876-844882', '2021-07-15 01:38 pm', 0, 0),
(122, 'Cumilla General Hospital', '11', 0, 'Cumilla', 'Comilla Tower, Laksham Road, Comilla Adarsha Sadar, Comilla, Chittagong Division 3500', '01712071522', '2021-07-15 01:38 pm', 0, 0),
(123, 'Cumilla Medical College Hospital', '11', 0, 'Cumilla', 'Kuchaitoli, Dr. Akhtar Hameed Khan Road, Cumilla 3500', '01318331494', '2021-07-15 01:38 pm', 0, 0),
(124, 'Dakhin Surma Upazila Health Complex,Sylhet', '1', 0, 'Sylhet', 'N208, Khalmukh Bazar', '', '2021-07-15 01:38 pm', 0, 0),
(125, 'Doctors Community Hospital Private Ltd, Rangpur', '22', 4, 'Rangpur', 'Medical East Gate, Rangpur', '+8801797852879', '2021-07-15 01:38 pm', 0, 0),
(126, 'Enam Medical College & Hospital', '4', 7, 'Savar', '9/3 Parboti Nagar, Thana Road, Savar Union 1340', '01716-358146', '2021-07-15 01:38 pm', 0, 0),
(127, 'Faridpur Medical College Hospital, Faridpur', '94', 0, 'Faridpur', 'Faridpur Sadar , Faridpur', '', '2021-07-15 01:38 pm', 0, 0),
(128, 'Feni 250 Bed District Sadar Hospital', '2', 0, 'Chittagong', 'Feni Sadar, Feni', '01730324771', '2021-07-15 01:38 pm', 0, 0),
(129, 'Gazi Medical College Hospital', '35', 0, 'Khulna', 'A, 19-21 Majid Sarani, Khulna 9000', '01778-455951', '2021-07-15 01:38 pm', 0, 0),
(130, 'Gopalganj 250 bed General Hospital', '32', 0, 'Gopalganj', 'Gopalganj Town Rd, Gopalganj', '', '2021-07-15 01:38 pm', 0, 0),
(131, 'Hobiganj District Hospital, Hobiganj', '81', 0, 'Sylhet', 'Hospital Road, Habiganj Sadar, Habiganj, Sylhet Division', '01730324817', '2021-07-15 01:38 pm', 0, 0),
(132, 'Imperial Hospital Limited, Chittagong', '43', 12, 'Chittagong', 'Zakir Hossain Road, Chittagong 4202', '09612-247247', '2021-07-15 01:38 pm', 0, 0),
(133, 'Z.H. Sikder Women\'s Medical College & Hospital Ltd', '35', 0, 'Dhanmondi', 'Monica Estate, Western Dhanmondi, Dhaka - 1209', '029181006', '2021-07-15 01:38 pm', 0, 0),
(134, 'TMSS Medical College & Rafatullah Community Hospital', '82', 7, 'Bogura', 'Rangpur Road, Tengamara, Bogura', '01711436508', '2021-07-15 01:38 pm', 0, 0),
(135, 'Thakurgaon District Hospital, Thakurgaon', '0', 0, 'Rangpur', 'Thakurgaon Sadar, Thakurgaon, Rangpur Division 5100', '056152021', '2021-07-15 01:38 pm', 0, 0),
(136, 'Tangail District Hospital, Tangail', '19', 0, 'Tangail', 'Tangail', '01769957199', '2021-07-15 01:38 pm', 0, 0),
(137, 'Sylhet Womens Medical College and Hospital', '0', 0, 'Sylhet', 'Mirboxtola, Sylhet', '0821720123', '2021-07-15 01:38 pm', 0, 0),
(138, 'Sylhet Shahid Shamsuddin Ahmed District Hospital', '0', 1, 'Sylhet', 'Medical College Road, Sylhet Sadar, Sylhet', '01730324820', '2021-07-15 01:38 pm', 0, 0),
(139, 'Surgiscope Hospital Limited', '2', 0, 'Chittagong', '445/466, Katalgonj, Chittagong - 4203', '01821533666', '2021-07-15 01:38 pm', 0, 0),
(140, 'Sunamganj 250 bed District Sadar Hospital', '78', 0, 'Sylhet', 'Hospital Rd, Sunamganj Sadar, Sunamganj, Sylhet', '01730324819', '2021-07-15 01:38 pm', 0, 0),
(141, 'Sirajganj 250 Bed Bongamata Sheikh Fazilatunnesa Mujib General Hospital', '34', 0, 'Rajshahi', 'Sirajganj, Rajshahi', '01786367010', '2021-07-15 01:38 pm', 0, 0),
(142, 'Sherpur District Hospital, Sherpur', '40', 0, 'Mymensingh', 'Nalitabari - Sherpur Road, Sherpur Sadar, Sherpur, Mymensingh', '01552390314', '2021-07-15 01:38 pm', 0, 0),
(143, 'Sher-e-Bangla Medical College Hospital, Barisal', '21', 0, 'Barisal', 'South Alekanda, Band Road, Barisal', '0431-2173547', '2021-07-15 01:38 pm', 0, 0),
(144, 'Shariatpur District Hospital, Shariatpur', '9', 0, 'Shariatpur', 'R861, Shariatpur Sadar, Shariatpur, Dhaka, Bangladesh', '01730324790', '2021-07-15 01:38 pm', 0, 0),
(145, 'Shahid Syed Nazrul Islam Medical College Hospital', '13', 0, 'Kishoreganj', 'Kishoreganj Sadar', '0941-61068', '2021-07-15 01:38 pm', 0, 0),
(146, 'Shaheed Ziaur Rahman Medical College Hospital, Bogra', '0', 2, 'Rajshahi', 'Bogra Sadar, Bogra, Rajshahi', '051-60630', '2021-07-15 01:38 pm', 0, 0),
(147, 'Shaheed Tajuddin Ahmad Medical College Hospital, Gazipur', '0', 3, 'Gazipur', 'Circuit House Road, Gazipur', '0249273251', '2021-07-15 01:38 pm', 0, 0),
(148, 'Satkhira 250 bed Medical College Hospital', '0', 0, 'Satkhira', 'Bakal Bridge, Satkhira - Kaliganj Hwy Satkhira', '+88028900878', '2021-07-15 01:38 pm', 0, 0),
(149, 'SAJIDA Foundation Hospital Keraniganj', '9', 1, 'Keraniganj', 'Chatgaon, Keraniganj 1310', '01777772570', '2021-07-15 01:38 pm', 0, 0),
(150, 'Rangpur Medical College Hospital, Rangpur', '2', 0, 'Rangpur', 'Medical East Gate, Dhap, Rangpur', '01718225722', '2021-07-15 01:38 pm', 0, 0),
(151, 'Rangamati General Hospital', '41', 0, 'Rangamati', 'Hazi Nizam Plaza - Chandra Road, Rangamati Sadar Up, Dendabor, Rangamati', '035163030', '2021-07-15 01:38 pm', 0, 0),
(152, 'Ramu Upazila Health Complex', '57', 0, 'Chittagong', 'N1, Ramu, Cox\'s Bazar, Chittagong', '01873216160', '2021-07-15 01:38 pm', 0, 0),
(153, 'Rajshahi Medical College Hospital, Rajshahi', '0', 0, 'Rajshahi', 'Medical College Road Laxmipur, Rajpara, Rajshahi - 6100', '0721-772150', '2021-07-15 01:38 pm', 0, 0),
(154, 'Rajnagar Upazila Health Complex,Moulvibazar', '29', 0, 'Sylhet', 'Balagong Road, Rajnagar, Maulvibazar, Sylhet', '01717795254', '2021-07-15 01:38 pm', 0, 0),
(155, 'Rajbari District Hospital, Rajbari', '23', 0, 'Rajbari', '67/A R710, 7700, Rajbari Sadar, Rajbari, Dhaka Division 7700', '01711466832', '2021-07-15 01:38 pm', 0, 0),
(156, 'Prime Medical College & Hospital', '30', 6, 'Rangpur', 'Pirjabad, Badagonj Road, Rangpur', '01730-033166', '2021-07-15 01:38 pm', 0, 0),
(157, 'Pirojpur District Hospital, Pirojpur', '9', 0, 'Pirojpur', 'Pirojpur Pourashava', '01711443094', '2021-07-15 01:38 pm', 0, 0),
(158, 'Patuakhali 250 bed Sadar Hospital, Patuakhali', '58', 5, 'Barisal', 'Barisal - Patuakhali Road, R881, Patuakhali Sadar, Kuakata, Patuakhali, Barisal', '01730324763', '2021-07-15 01:38 pm', 0, 0),
(159, 'Parkview Medical College & Hospital, Sylhet', '0', 2, 'Sylhet', 'Sheikhghat - Kazirbazar Road, Sylhet', '0821-728878', '2021-07-15 01:38 pm', 0, 0),
(160, 'Parkview Hospital Ltd', '0', 2, 'Chittagong', '94/103, Katalganj Road, Panchlaish, Chittagong', '01976022111', '2021-07-15 01:38 pm', 0, 0),
(161, 'Panchagarh District Hospital, Panchagarh', '5', 0, 'Rangpur', 'Hospital Road, Panchagarh Sadar, Debiganj, Panchagarh, Rangpur', '0568-61316', '2021-07-15 01:38 pm', 0, 0),
(162, 'Pabna District Hospital, Pabna', '0', 0, 'Pabna', 'Shalgaria, Pabna Sadar, Pabna', '+8801711902725', '2021-07-15 01:38 pm', 0, 0),
(163, 'Oasis Hospital Sylhet', '1', 0, 'Sylhet', 'Oasis Hospital, Subhanighat, Sylhet - 3100', '+8801611-990000', '2021-07-15 01:38 pm', 0, 0),
(164, 'North East Medical College Hospital, Sylhet', '23', 0, 'Sylhet', 'South Surma, Sylhet - 3100', '+8801715944733', '2021-07-15 01:38 pm', 0, 0),
(165, 'Noakhali 250 Bed General Hospital', '26', 6, 'Noakhali', '2 Hospital Road, Noakhali Sadar, Maijdee, Noakhali, Chittagong', '01715241399', '2021-07-15 01:38 pm', 0, 0),
(166, 'Nilphamari District Hospital, Nilphamari', '63', 0, 'Nilphamari', 'Hospital Road, Nilphamari Sadar, Nilphamari, Rangpur', '01730324812', '2021-07-15 01:38 pm', 0, 0),
(167, 'Netrokona District Hospital, Netrokona', '33', 0, 'Netrokona', 'Hospital Road, Netrokona Sadar, Netrokona, Netrakona, Mymensingh', '01711432353', '2021-07-15 01:38 pm', 0, 0),
(168, 'Natore District Hospital, Natore', '0', 0, 'Natore', 'Adhunik Sadar Hospital, Natore', '077166912', '2021-07-15 01:38 pm', 0, 0),
(169, 'National Hospital Chattogram (Pvt.) Ltd', '0', 2, 'Chittagong', '14/15, Dampara Lane, Mehedibag, Chittagong', '+88031627913', '2021-07-15 01:38 pm', 0, 0),
(170, 'Narsingdi (100 bed) Zila Hospital, Narshingdi', '15', 0, 'Narshingdi', 'Narsingdi - Raipur Highway, Narsingdi', '01730-324787', '2021-07-15 01:38 pm', 0, 0),
(171, 'Narayanganj 300 bed Hospital', '24', 7, 'Narayanganj', 'Hospital Road, Narayanganj Sadar, Narayanganj, Dhaka, Bangladesh', '027643622', '2021-07-15 01:38 pm', 0, 0),
(172, 'Narail District Hospital, Narail', '165', 0, 'Narail', 'Narail Sadar, Narail, Khulna', '01714304131', '2021-07-15 01:38 pm', 0, 0),
(173, 'Naogaon District Hospital, Naogaon', '60', 0, 'Naogaon', 'College Rd, Naogaon Sadar, Naogaon, Rajshahi', '01754611611', '2021-07-15 01:38 pm', 0, 0),
(174, 'Mymensingh Medical College Hospital, Mymensingh', '0', 0, 'Mymensingh', 'Char Para, Medical Road, Mymensingh 2200', '+8809166063', '2021-07-15 01:38 pm', 0, 0),
(175, 'Munshiganj 250 bed District Hospital', '28', 0, 'Munshganj', 'Luharpul Bazar - Munshganj Road, Munshiganj Sadar, Munshiganj', '01730324783', '2021-07-15 01:38 pm', 0, 0),
(176, 'Mount Adora Hospital, Sylhet', '0', 0, 'Sylhet', 'Akhalia, Sylhet - Sunamganj Road, Sylhet - 3100', '+8801707079717', '2021-07-15 01:38 pm', 0, 0),
(177, 'Mohammad Ali District Hospital , Bogra', '0', 0, 'Bogra', '1 Sherpur Road, Bogra Sadar, Bogra, Rajshahi', '01730324803', '2021-07-15 01:38 pm', 0, 0),
(178, 'Meherpur 250 bed District Hospital', '42', 0, 'Meherpur', 'Meherpur Sadar Upazila, Meherpur, Khulna', '+8801829699289', '2021-07-15 01:38 pm', 0, 0),
(179, 'Medical center hospital, Chattogram', '0', 0, 'Chittagong', '953 O.R. Nizam Road, Chittagong', '031-658501', '2021-07-15 01:38 pm', 0, 0),
(180, 'Max Hospital, CTG', '3', 0, 'Chittagong', 'Late Alhaj Zahur Ahmed Chowdhury Road, Chittagong', '01713-998199', '2021-07-15 01:38 pm', 0, 0),
(181, 'Manikganj 250 Bed District Hospital', '30', 0, 'Manikganj', 'Shahid Rafique Sarak, Manikganj', '01715537120', '2021-07-15 01:38 pm', 0, 0),
(182, 'Magura District Hospital, Magura', '0', 0, 'Magura', 'Magura Sadar, Khulna', '01715019479', '2021-07-15 01:38 pm', 0, 0),
(183, 'MAG Osmani Medical College Hospital, Sylhet', '16', 0, 'Sylhet', 'Medical Road, Kajolshah, Sylhet', '0821-713487', '2021-07-15 01:38 pm', 0, 0),
(184, 'Madaripur District Hospital, Madaripur', '6', 0, 'Madaripur', 'Madaripur Hospital Road, Madaripur', '01730324781', '2021-07-15 01:38 pm', 0, 0),
(185, 'M.Bazar District Hospital, M.Bazar', '17', 0, 'Maulvibazar', 'Moulvibazar Road, Maulvibazar Sadar, Sreemangal, Maulvibazar, Sylhet', '01716374301', '2021-07-15 01:38 pm', 0, 0),
(186, 'M Abdur Rahim Medical College Hospital, Dinajpur', '2', 0, 'Dinajpur', 'Ananda Sagor, Sadar, Dinajpur', '01793941071', '2021-07-15 01:38 pm', 0, 0),
(187, 'Lakshmipur District Hospital', '0', 3, 'Lakshmipur', 'Ramgati Highway, Lakshmipur Sadar, Lakshmipur, Chittagong', '01730324773', '2021-07-15 01:38 pm', 0, 0),
(188, 'Kushtia 250 bed General Hospital', '29', 0, 'Kushtia', 'Kushtia Sadar, Kushtia', '01712525198', '2021-07-15 01:38 pm', 0, 0),
(189, 'Kurigram District Hospital, Kurigram', '58', 0, 'Kurigram', 'General Hospital Road, Kurigram Sadar, Kurigram, Rangpur', '01713200322', '2021-07-15 01:38 pm', 0, 0),
(190, 'Khulna Medical College Hospital, Khulna', '0', 0, 'Khulna', 'M.a Bari Boyra Main Road Khulna., Sonadanga, Khulna Sadar, Khulna - 9100', '+88-041-760350', '2021-07-15 01:38 pm', 0, 0),
(191, 'Khagrachari District Hospital, Khagrachari', '30', 0, 'Khagrachhari', 'Tatultola Road, Khagrachhari Sadar, Khagrachhari, Chittagong', '01717720137', '2021-07-15 01:38 pm', 0, 0),
(192, 'Joypurhat District Hospital, Joypurhat', '9', 0, 'Joypurhat', 'Hospital Road, Joypurhat Sadar, Joypurhat, Rajshahi', '057162585', '2021-07-15 01:38 pm', 0, 0),
(193, 'Jhenaidah District Hospital, Jhenaidah', '17', 0, 'Jhenaidah', 'Jhenaidah Sadar, Jhenaidah', '01760859761', '2021-07-15 01:38 pm', 0, 0),
(194, 'Jhalokathi District Hospital', '28', 0, 'Jhalokathi', 'Mahammad Ali Road, Kirtipasha Union, Jhalokati Sadar, Kirtipasha Union, Jhalokati, Barisal', '+8801917042331', '2021-07-15 01:38 pm', 0, 0),
(195, 'Jessore Chest Hospital, Jessore', '28', 0, 'Jessore', 'Jessore TB Segregation Hospital, Bockchor, Jessore', '01711397289', '2021-07-15 01:38 pm', 0, 0),
(196, 'Jassore 250 bed General Hospital', '0', 0, 'Jessore', 'Ghope Nowapara Road, Jessore Sadar, Jessore, Khulna', '0421-65056', '2021-07-15 01:38 pm', 0, 0),
(197, 'Jalalabad Ragib Rabeya Medical College Hospital', '47', 0, 'Sylhet', '29/5 Pathantola Road, Sylhet', '0821-719090', '2021-07-15 01:38 pm', 0, 0),
(198, 'Jamalpur 250 Beded General Hospital', '75', 2, 'Jamalpur', 'Medical Road, Jamalpur Sadar, Jamalpur, Mymensingh', '', '2021-07-15 01:38 pm', 0, 0),
(199, 'Khadimpara 31 bed Hospital, Sylhet Sadar', '14', 0, 'Sylhet', 'Sylhet Sadar Upazila, Sylhet', '01713800522', '2021-07-15 01:38 pm', 0, 0),
(200, 'National Institute of Mental Health and Research, Dhaka', '100', 0, 'Sher-E-Bangla Nagar', 'Sher-E-Bangla Nagar, Dhaka, Bangladesh - 1207', '+880258153975', '2021-07-15 01:38 pm', 0, 0),
(201, 'Chakaria Upazila Health Complex', '41', 0, 'Chittagong', 'Health Complex Road, Chakaria, Cox\'s Bazar, Chittagong', '01730324466', '2021-07-15 01:38 pm', 0, 0),
(202, 'National Institute of Neuro Science (NINS)', '32', 0, 'Agargaon', 'Sher-e-Bangla Nagar, Agargaon, Dhaka, Bangladesh - 1207', '+880-2-9137305', '2021-07-15 01:38 pm', 0, 0);

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
(81, 'xcbv', '', 'Fever,Tiredness', 'Body aches,Headache', 'no', 'no', 'no', 'no', 'Medium'),
(82, 'Abcd', '', 'Difficulty in breathing', 'Sore throat,Headache', 'no', 'no', 'no', 'no', 'Medium'),
(83, 'Dee', '', 'Difficulty in breathing', 'None', 'no', 'no', 'no', 'no', 'Low'),
(84, 'So', '', 'Loss of taste or smell,Difficulty in breathing', 'Headache', 'no', 'no', 'yes', 'no', 'High'),
(85, 'dbskan', '', 'Fever', 'Headache', 'no', 'no', 'no', 'no', 'Medium'),
(86, 'fejwak', '', 'Fever,Tiredness', 'Headache', 'no', 'no', 'no', 'no', 'Medium'),
(87, 'Upk', '', 'Loss of taste or smell,Difficulty in breathing', 'Runny nose,Sore throat', 'no', 'no', 'no', 'no', 'Medium'),
(88, 'Kskak', '', 'Dry cough', 'None', 'no', 'no', 'no', 'no', 'Low'),
(89, 'Jakak', '', 'Difficulty in breathing', 'None', 'no', 'no', 'no', 'no', 'Low'),
(90, 'Ksks', '', 'Loss of taste or smell,Difficulty in breathing', 'None', 'no', 'no', 'no', 'no', 'Medium'),
(91, 'Gjk', '', 'Fever', 'Sore throat,Headache', 'no', 'no', 'no', 'no', 'Medium'),
(92, 'J', '', 'None', 'None', 'no', 'no', 'no', 'no', 'Low'),
(93, 'jkkj', '', 'Loss of taste or smell', 'None', 'no', 'no', 'no', 'no', 'Low'),
(94, 'Jw', '', 'None', 'None', 'no', 'no', 'no', 'no', 'Low'),
(95, 'Jkk', '', 'None', 'None', 'no', 'no', 'no', 'no', 'Low'),
(96, 'Kaks', '', 'None', 'None', 'no', 'no', 'no', 'no', 'Low'),
(97, 'Deep', '', 'Tiredness', 'None', 'no', 'no', 'no', 'no', 'Low'),
(98, 'Yu', '', 'Tiredness', 'None', 'no', 'no', 'no', 'no', 'Low'),
(99, 'Hola', '', 'Difficulty in breathing', 'None', 'no', 'no', 'no', 'no', 'Low'),
(100, ',kasd', '', 'Fever,Tiredness', 'Headache', 'no', 'no', 'no', 'no', 'Medium'),
(101, 'asfasf', '', 'জ্বর', 'সর্দি,মাথা ব্যথা', 'no', 'no', 'no', 'no', 'Medium'),
(102, 'j', '', 'জ্বর', 'কিছু না', 'no', 'no', 'no', 'no', 'Medium'),
(103, 'zsdvdas', '', 'Fever,Difficulty in breathing,Tiredness', 'Runny nose,Headache', 'yes', 'no', 'yes', 'no', 'High'),
(104, 'vb x', '', 'Loss of taste or smell', 'None', 'no', 'no', 'no', 'no', 'Low'),
(105, 'Sksk', '', 'None', 'None', 'no', 'no', 'no', 'no', 'Low'),
(106, 'Ok', '', 'কিছুই না', 'কিছুই না', 'no', 'no', 'no', 'no', 'Low'),
(107, 'dbh', '', 'জ্বর,ক্লান্তি', 'সর্দি,গলা ব্যথা,মাথা ব্যথা', 'no', 'yes', 'no', 'yes', 'High'),
(108, 'mohammadali', '', 'শুষ্ক কাশি,জ্বর,স্বাদ বা গন্ধের কমতি', 'সর্দি,মাথা ব্যথা', 'no', 'no', 'no', 'no', 'Medium'),
(109, '', '', 'শুষ্ক কাশি,জ্বর,স্বাদ বা গন্ধের কমতি,কিছুই না', 'শরীর ব্যথা,অনুনাসিক ভিড়,সর্দি', 'yes', 'no', 'yes', 'no', 'High'),
(110, 'awedsf', '', 'শুষ্ক কাশি,জ্বর', 'অনুনাসিক ভিড়,সর্দি', 'yes', 'no', 'yes', 'no', 'High'),
(111, '', '', 'জ্বর', 'অনুনাসিক ভিড়', 'no', 'yes', 'no', 'yes', 'High'),
(112, 'asf', '', 'Fever,Tiredness', 'Sore throat,Headache', 'no', 'no', 'yes', 'yes', 'High'),
(113, 'Loki', '', 'ক্লান্তি', 'কিছুই না', 'no', 'no', 'no', 'no', 'Low'),
(114, '', '', 'শুষ্ক কাশি', 'কিছুই না', 'no', 'no', 'no', 'no', 'Low'),
(115, 'Md Masud Rana', '', 'ক্লান্তি', 'শরীর ব্যথা', 'no', 'no', 'no', 'no', 'Medium');

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
-- Indexes for table `tbl_approved_laboratories`
--
ALTER TABLE `tbl_approved_laboratories`
  ADD PRIMARY KEY (`lab_id`);

--
-- Indexes for table `tbl_cases_deaths`
--
ALTER TABLE `tbl_cases_deaths`
  ADD PRIMARY KEY (`cases_deaths_id`);

--
-- Indexes for table `tbl_daily_death_date`
--
ALTER TABLE `tbl_daily_death_date`
  ADD PRIMARY KEY (`daily_death_date_id`);

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
  MODIFY `ambulance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `tbl_approved_laboratories`
--
ALTER TABLE `tbl_approved_laboratories`
  MODIFY `lab_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `tbl_cases_deaths`
--
ALTER TABLE `tbl_cases_deaths`
  MODIFY `cases_deaths_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_daily_death_date`
--
ALTER TABLE `tbl_daily_death_date`
  MODIFY `daily_death_date_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `symptom_checker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
