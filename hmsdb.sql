-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 17, 2019 at 01:42 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.0.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctorapp`
--

CREATE TABLE `doctorapp` (
  `DOA` date NOT NULL,
  `F_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `M_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `L_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Prmt_add` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `Psnt_add` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `Prof` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Amount_Depo` int(30) NOT NULL,
  `Cabin` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Relative_P` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `RWP` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `docapp` varchar(70) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doctorapp`
--

INSERT INTO `doctorapp` (`DOA`, `F_name`, `M_name`, `L_name`, `Prmt_add`, `Psnt_add`, `Prof`, `Amount_Depo`, `Cabin`, `Relative_P`, `RWP`, `docapp`) VALUES
('0000-00-00', '', '', '', '', '', '', 0, '', '', '', ''),
('0000-00-00', 'Mustafizur', 'Rahman', 'Misuk', 'Brahmanbaria', 'Dhaka', 'Business', 100, 'A6', 'Tonni', 'Friend', ''),
('0000-00-00', 'Siam', 'AL-ISLAM', 'Arnab', 'Dhaka', 'Kharera', 'Student', 2000, 'A7', 'Alvi', 'Sister', ''),
('0000-00-00', 'Farhana', 'Islam', '', 'Comilla', 'Dhaka', 'Private Job', 2000, 'A8', 'Fardin mimi', 'Sister', ''),
('0000-00-00', 'Banna', 'Ahammad', 'Boni', 'Khulna', 'Sylhet', 'Government Job', 1900, 'A9', 'Roni Talukdar', 'Brother', 'DR.IRFAN AHAMMAD NAVIL'),
('2018-12-21', 'Alauddin', 'Bhuiyan', '', 'Brahmanbaria', 'Dhaka', 'Government Job', 4000, 'A0', 'Najnin', 'Wife', 'DR.MUSTAFIZUR RAHMAN'),
('0000-00-00', '', '', '', '', '', '', 0, '', '', '', 'DR.KABIR AHAMMAD'),
('2000-10-10', 'A', 'C', 'D', 'Z', 'Z', 'A', 11, 'C', 'Roni Talukdar', 'Friend', 'DR.IRFAN AHAMMAD NAVIL'),
('2018-12-22', 'Mustafizur', 'Rahman', 'Misuk', 'Khilgaon,Dhaka ', 'Dhaka', 'Student', 2000, 'A6', 'Fardin mimi', 'Sister', 'DR.IRFAN AHAMMAD NAVIL'),
('2018-02-21', 'Muhammad', 'Yakub', 'Hossain', 'Brahmanbaria, Ballabpur ', 'Brahmanbaria, Sadar', 'Student', 30000, 'A1', 'Habiba Akter', 'Mother', 'DR.IRFAN AHAMMAD NAVIL'),
('2018-12-24', 'Sheikh', 'Mujibur', 'Rahman', 'Gopalganj , Tungipara', 'Dhanmondi,Dhaka', 'Politician', 20000, 'W6', 'Sheikh hasina', 'Father', 'DR.IRFAN AHAMMAD NAVIL'),
('0000-00-00', '', '', '', '', '', '', 0, '', '', '', 'DR.KABIR AHAMMAD'),
('2018-12-25', 'Haji', 'Maleka', 'Begum', 'Manderpur', 'Dhaka', 'Retired', 20000, 'W5', 'Joynal Abedin', 'Mother', 'DR.IRFAN AHAMMAD NAVIL'),
('2018-12-27', 'MD.', 'JOYNAL', 'ABEDIN', 'BRAHMANBARIA', 'BRAHMANBARIA', 'Farmer', 30000, 'T7', 'Shammi', 'Wife', 'DR.MUMTAZ BEGUM 4.00 PM to 6.00 PM'),
('0000-00-00', 'Mustafizur', 'Rahman', 'Misuk', '', '', 'Student', 0, '', 'Md.Mustafizur Rahman', 'Yes', 'CSE 215'),
('0000-00-00', '', '', '', '', '', '', 0, '', '', '', 'CSE 115'),
('0000-00-00', '', '', '', '', '', '', 0, '', '', '', 'CSE 115'),
('0000-00-00', 'MD.', 'SAADAT ', 'HOSSAIN', '', '', 'Student', 0, '', 'SAADAT HOSSAIN', 'Yes', 'CSE 215'),
('2019-03-01', 'Irfan', 'Ahammad ', 'Navil', '', '', 'School student', 0, '', 'Irfan Ahammad Navil', 'Yes', 'CSE 231'),
('2019-10-25', 'Misuk', 'Rahman', 'Mustafiz', '', '', 'fg', 0, '', 'alkjh', 'yes', 'CSE 231');

-- --------------------------------------------------------

--
-- Table structure for table `logindb`
--

CREATE TABLE `logindb` (
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logindb`
--

INSERT INTO `logindb` (`username`, `password`) VALUES
('admin', 'pass'),
('misuk', 'misuk');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
