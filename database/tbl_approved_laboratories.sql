-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2021 at 11:51 AM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_approved_laboratories`
--
ALTER TABLE `tbl_approved_laboratories`
  ADD PRIMARY KEY (`lab_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_approved_laboratories`
--
ALTER TABLE `tbl_approved_laboratories`
  MODIFY `lab_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
