-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2017 at 08:26 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `evaluation`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_last` varchar(30) NOT NULL,
  `admin_first` varchar(30) NOT NULL,
  `admin_username` varchar(30) NOT NULL,
  `admin_password` varchar(30) NOT NULL,
  `admin_status` varchar(10) NOT NULL,
  `admin_pic` varchar(100) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_last`, `admin_first`, `admin_username`, `admin_password`, `admin_status`, `admin_pic`) VALUES
(1, 'Jungco', 'Cristy', 'admin', 'admin', 'active', 'default.gif'),
(2, 'Bugarin', 'Jennifer', 'jen', '123', 'active', 'default.gif');

-- --------------------------------------------------------

--
-- Table structure for table `agency`
--

CREATE TABLE IF NOT EXISTS `agency` (
  `agency_id` int(11) NOT NULL AUTO_INCREMENT,
  `agency_name` varchar(100) NOT NULL,
  `agency_address` varchar(100) NOT NULL,
  `agency_contact` varchar(30) NOT NULL,
  `agency_email` varchar(30) NOT NULL,
  `person_in_charge` varchar(30) NOT NULL,
  `position` varchar(30) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `industry_id` int(11) NOT NULL,
  `agency_code` varchar(10) NOT NULL,
  PRIMARY KEY (`agency_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `agency`
--

INSERT INTO `agency` (`agency_id`, `agency_name`, `agency_address`, `agency_contact`, `agency_email`, `person_in_charge`, `position`, `dept`, `status`, `industry_id`, `agency_code`) VALUES
(1, 'Sharp Philippines', 'Makati City', '94987878', 'sharp@gmail.com', 'Jason Flor', 'Manager', 'ICT', 'new', 1, 'ZCUsqF');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE IF NOT EXISTS `announcement` (
  `announcement_id` int(11) NOT NULL AUTO_INCREMENT,
  `announcement` varchar(1000) NOT NULL,
  `date_posted` datetime NOT NULL,
  PRIMARY KEY (`announcement_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`announcement_id`, `announcement`, `date_posted`) VALUES
(2, 'Fiesta is There will be no class There will be no class There will be no class There will be no classThere will be no classThere will be no class', '2016-12-10 21:36:00'),
(3, 'There will be no class There will be no classvvvThere will be no class', '2016-12-10 21:36:00'),
(6, 'sasasa', '2017-07-08 11:47:00'),
(11, 'vcc', '2017-07-08 11:57:00'),
(12, 'vcc', '2017-07-08 12:02:00'),
(18, 'No work tomorrow', '2017-07-08 14:35:00'),
(19, 'This is a test', '2017-07-08 14:37:00'),
(20, 'Holiday po tomorrow Fiesta is There will be no class There will be no class There will be no class There will be no classThere will be no classThere will be no class', '2017-07-08 14:38:00'),
(21, 'This is a test motif', '2017-09-04 08:07:00'),
(22, '2nd test', '2017-09-04 08:08:00'),
(23, '3rd multiple', '2017-09-04 08:34:00'),
(24, 'ssss', '2017-09-04 08:35:00'),
(25, 'ccc', '2017-09-04 08:37:00'),
(26, 'ddd', '2017-09-04 08:38:00'),
(27, 'ffff', '2017-09-04 08:41:00'),
(28, 'gtt', '2017-09-04 08:41:00'),
(29, 'ggg', '2017-09-04 08:42:00'),
(30, 'dff', '2017-09-04 08:44:00'),
(31, 'fff', '2017-09-04 08:44:00'),
(32, 'tt', '2017-09-04 08:44:00'),
(33, '1233', '2017-09-04 08:47:00'),
(34, '123', '2017-09-04 08:47:00'),
(35, '333', '2017-09-04 08:56:00');

-- --------------------------------------------------------

--
-- Table structure for table `civil`
--

CREATE TABLE IF NOT EXISTS `civil` (
  `civil_id` int(11) NOT NULL AUTO_INCREMENT,
  `faculty_id` int(11) NOT NULL,
  `eligibility` varchar(100) NOT NULL,
  `rating` decimal(5,2) NOT NULL,
  `date_taken` date NOT NULL,
  `place` varchar(100) NOT NULL,
  `licenseno` varchar(30) NOT NULL,
  `validity` date NOT NULL,
  PRIMARY KEY (`civil_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `civil`
--

INSERT INTO `civil` (`civil_id`, `faculty_id`, `eligibility`, `rating`, `date_taken`, `place`, `licenseno`, `validity`) VALUES
(1, 5, 'Civil Service', '90.00', '2012-02-01', 'Bacolod', '123', '2017-01-01'),
(2, 7, 'Civil Service Professional Passer', '95.00', '0000-00-00', 'Bacolod National High School', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `college_group`
--

CREATE TABLE IF NOT EXISTS `college_group` (
  `college_group_id` int(11) NOT NULL AUTO_INCREMENT,
  `college_group_description` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`college_group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_name` varchar(50) NOT NULL,
  `contact_relation` varchar(30) NOT NULL,
  `contact_haddress` varchar(100) NOT NULL,
  `contact_ono` varchar(30) NOT NULL,
  `contact_oaddress` varchar(100) NOT NULL,
  `contact_hno` varchar(30) NOT NULL,
  `ojt_id` int(11) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_name`, `contact_relation`, `contact_haddress`, `contact_ono`, `contact_oaddress`, `contact_hno`, `ojt_id`) VALUES
(1, 'Ramon Magbanua', 'Father', 'Brgy. Busay, Bago City', 'Na', 'Na', '0997878', 1),
(2, 'Melanie Porquez', 'Friend', 'EB Magalona', 'none', 'none', '987897', 2);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `department_code` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `department_title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`department_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE IF NOT EXISTS `dept` (
  `dept_id` int(11) NOT NULL AUTO_INCREMENT,
  `dept` varchar(100) NOT NULL,
  PRIMARY KEY (`dept_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`dept_id`, `dept`) VALUES
(1, 'TLE Department'),
(2, 'Math Department'),
(3, 'English Department'),
(4, 'MAPEH Department');

-- --------------------------------------------------------

--
-- Table structure for table `educ`
--

CREATE TABLE IF NOT EXISTS `educ` (
  `educ_id` int(11) NOT NULL AUTO_INCREMENT,
  `faculty_id` int(11) NOT NULL,
  `level` varchar(50) NOT NULL,
  `course` varchar(100) NOT NULL,
  `school` varchar(100) NOT NULL,
  `grad` int(11) NOT NULL,
  `at_from` int(4) NOT NULL,
  `at_to` int(4) NOT NULL,
  `level_units` varchar(50) NOT NULL,
  `honors` varchar(100) NOT NULL,
  PRIMARY KEY (`educ_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `educ`
--

INSERT INTO `educ` (`educ_id`, `faculty_id`, `level`, `course`, `school`, `grad`, `at_from`, `at_to`, `level_units`, `honors`) VALUES
(16, 4, 'Elementary1', 'NA', 'MLAES', 2002, 0, 0, '', ''),
(17, 4, 'High School1', 'NA', 'RTNHS', 2006, 0, 0, '', ''),
(18, 4, 'College1', 'BSIm', 'CHMSC', 2010, 0, 0, '', ''),
(19, 5, 'Elementary', 'NA', 'Talisay Elementary School', 2008, 20170213, 20170911, 'NA', 'First'),
(20, 5, 'High School', 'NA', 'RBNHS', 2012, 0, 0, '', ''),
(21, 5, 'College', 'BSIT', 'CHMSC', 2016, 2001, 2001, 'Graduate', 'Deans List'),
(26, 5, '', 'dsds', 'dsd', 2017, 20170101, 20170101, 'ds', 'dsds'),
(27, 5, '', 'dd', 'dd', 2, 20170101, 20170101, ',kjkj', 'dd'),
(28, 5, 'Graduate Studies', 'aaa', 'aaa', 222, 20170101, 20170101, 'ddd', 'ddd'),
(29, 7, 'Elementary', 'Eleentary', 'LAES', 2014, 2001, 2004, 'Graduate', 'Valedictorian'),
(30, 7, 'High School', '', 'RTNHS', 2011, 2005, 2012, '', ''),
(31, 7, 'College', 'BSIT', 'CHSC', 2010, 2012, 2016, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `evaluation`
--

CREATE TABLE IF NOT EXISTS `evaluation` (
  `eval_id` int(11) NOT NULL AUTO_INCREMENT,
  `ojt_emp_id` int(11) NOT NULL,
  `skill` decimal(6,2) NOT NULL,
  `knowledge` decimal(6,2) NOT NULL,
  `attitude` decimal(6,2) NOT NULL,
  `attendance` decimal(6,2) NOT NULL,
  `average` decimal(6,2) NOT NULL,
  `remarks` varchar(1000) NOT NULL,
  `school_year` varchar(10) NOT NULL,
  `ojt_id` int(11) NOT NULL,
  PRIMARY KEY (`eval_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `evaluation`
--

INSERT INTO `evaluation` (`eval_id`, `ojt_emp_id`, `skill`, `knowledge`, `attitude`, `attendance`, `average`, `remarks`, `school_year`, `ojt_id`) VALUES
(1, 1, '100.00', '99.00', '98.00', '97.00', '98.50', '', '2017-2018', 1),
(5, 1, '100.00', '99.00', '98.00', '97.00', '98.50', 'Testing', '2017-2018', 1);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `event` varchar(1000) NOT NULL,
  `event_desc` longtext NOT NULL,
  `date_posted` datetime NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `event`, `event_desc`, `date_posted`) VALUES
(2, 'Sample 1', 'Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur dapibus adipiscing elit.', '2016-12-10 22:00:00'),
(4, 'Recent Posts', 'Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur dapibus adipiscing elit.', '2016-12-13 21:01:00');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `faculty_id` int(11) NOT NULL AUTO_INCREMENT,
  `faculty_last` varchar(30) NOT NULL,
  `faculty_first` varchar(30) NOT NULL,
  `faculty_middle` varchar(30) NOT NULL,
  `faculty_ext` varchar(5) NOT NULL,
  `faculty_pic` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `civil` varchar(30) NOT NULL,
  `height` varchar(15) NOT NULL,
  `weight` varchar(15) NOT NULL,
  `res_address` varchar(100) NOT NULL,
  `res_zip` int(5) NOT NULL,
  `res_tel` varchar(15) NOT NULL,
  `perm_address` varchar(100) NOT NULL,
  `perm_zip` int(5) NOT NULL,
  `perm_tel` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `bday` date NOT NULL,
  `contact` varchar(50) NOT NULL,
  `pob` varchar(100) NOT NULL,
  `citizenship` varchar(50) NOT NULL,
  `sss` varchar(20) NOT NULL,
  `tin` varchar(20) NOT NULL,
  `philhealth` varchar(20) NOT NULL,
  `gsis` varchar(30) NOT NULL,
  `pagibig` varchar(30) NOT NULL,
  `emp_no` varchar(30) NOT NULL,
  `blood_type` varchar(5) NOT NULL,
  `reg_status` int(10) NOT NULL,
  `reg_date` date NOT NULL,
  `log` int(11) NOT NULL,
  `language` varchar(500) NOT NULL,
  `skills` varchar(500) NOT NULL,
  `status` int(11) NOT NULL,
  `inactive` varchar(11) NOT NULL,
  `last_update` date NOT NULL,
  `dept_id` int(11) NOT NULL,
  PRIMARY KEY (`faculty_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `faculty_last`, `faculty_first`, `faculty_middle`, `faculty_ext`, `faculty_pic`, `password`, `gender`, `civil`, `height`, `weight`, `res_address`, `res_zip`, `res_tel`, `perm_address`, `perm_zip`, `perm_tel`, `email`, `bday`, `contact`, `pob`, `citizenship`, `sss`, `tin`, `philhealth`, `gsis`, `pagibig`, `emp_no`, `blood_type`, `reg_status`, `reg_date`, `log`, `language`, `skills`, `status`, `inactive`, `last_update`, `dept_id`) VALUES
(5, 'Jungco', 'Christy ', 'Torres', '', 'default.gif', '123', 'Female', 'Single', '154', '45', 'Brgy Busay Bago City', 6101, 'na', 'Brgy Busay Bago City', 6101, 'na', 'crissy@gmail.com', '1996-10-14', '639177736230', 'Bacolod City', 'Filipino', '323', '3232', '3232', '3232', '332323', '', 'B', 0, '2017-07-12', 3, '', '', 1, 'Active', '0000-00-00', 1),
(7, 'Torres', 'Delilah', '', '', 'default.gif', '123', 'Female', 'Single', '2.3', '45', 'Brgy. Banago, Bacolod City', 6100, 'na', 'Brgy. Banago, Bacolod City', 6100, 'na', 'torres@yahoo.com', '1990-10-14', '639177736230', 'Silay City', 'Filipino', '123', '456', '789', '012', '234', '', 'A', 0, '2017-09-02', 2, '', '', 1, 'Active', '0000-00-00', 2),
(8, 'dada', 'dada', '', '', 'default.gif', '123', '', '', '', '', '', 0, '', '', 0, '', 'emoblazz@gmail.com1', '2017-01-01', '', '', '', '', '', '', '', '', '', '', 0, '2017-09-05', 0, '', '', 0, '', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `family`
--

CREATE TABLE IF NOT EXISTS `family` (
  `fam_id` int(11) NOT NULL AUTO_INCREMENT,
  `faculty_id` int(11) NOT NULL,
  `last` varchar(15) NOT NULL,
  `first` varchar(15) NOT NULL,
  `middle` varchar(15) NOT NULL,
  `relationship` varchar(15) NOT NULL,
  `emp_bus` varchar(100) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `bus_address` varchar(100) NOT NULL,
  `ext` varchar(10) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `bday` date NOT NULL,
  PRIMARY KEY (`fam_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `family`
--

INSERT INTO `family` (`fam_id`, `faculty_id`, `last`, `first`, `middle`, `relationship`, `emp_bus`, `occupation`, `bus_address`, `ext`, `contact`, `bday`) VALUES
(46, 7, 'Torres', 'Jude', 'S', 'Father', '', '', '', 'Jr', '', '0000-00-00'),
(48, 7, 'Torres', 'Jane', 'H', 'Mother', '', '', '', '', '', '0000-00-00'),
(49, 7, 'kjkj', 'kjkj', 'k', 'Spouse', 'klk', 'klkl', 'lkl', '', '989', '0000-00-00'),
(50, 7, 'ddd', 'ff', 'fff', 'Child', '', '', '', '', '', '2017-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `industry`
--

CREATE TABLE IF NOT EXISTS `industry` (
  `industry_id` int(11) NOT NULL AUTO_INCREMENT,
  `industry` varchar(50) NOT NULL,
  `industry_desc` varchar(100) NOT NULL,
  PRIMARY KEY (`industry_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `industry`
--

INSERT INTO `industry` (`industry_id`, `industry`, `industry_desc`) VALUES
(1, 'Electronics', 'Manufactures electronics'),
(2, 'Manufacturing', 'Manufactures electronics');

-- --------------------------------------------------------

--
-- Table structure for table `major`
--

CREATE TABLE IF NOT EXISTS `major` (
  `major_id` int(11) NOT NULL AUTO_INCREMENT,
  `major` varchar(50) NOT NULL,
  PRIMARY KEY (`major_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `major`
--

INSERT INTO `major` (`major_id`, `major`) VALUES
(1, 'Automotive'),
(3, 'Food Technology'),
(4, 'Refrigeration and Airconditioning Technology');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE IF NOT EXISTS `membership` (
  `membership_id` int(11) NOT NULL AUTO_INCREMENT,
  `membership_org` varchar(50) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  PRIMARY KEY (`membership_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`membership_id`, `membership_org`, `faculty_id`) VALUES
(1, 'PSITS1', 5);

-- --------------------------------------------------------

--
-- Table structure for table `ojt_emp`
--

CREATE TABLE IF NOT EXISTS `ojt_emp` (
  `ojt_emp_id` int(11) NOT NULL AUTO_INCREMENT,
  `ojt_id` int(11) NOT NULL,
  `agency_id` int(11) NOT NULL,
  `training_period` varchar(50) NOT NULL,
  `training_start` date NOT NULL,
  `training_end` date NOT NULL,
  `evaluation_status` int(1) NOT NULL,
  `school_year` varchar(10) NOT NULL,
  PRIMARY KEY (`ojt_emp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ojt_emp`
--

INSERT INTO `ojt_emp` (`ojt_emp_id`, `ojt_id`, `agency_id`, `training_period`, `training_start`, `training_end`, `evaluation_status`, `school_year`) VALUES
(1, 1, 1, '1st 600', '2017-01-01', '2017-04-02', 1, '2017-2018'),
(2, 1, 1, '2nd 600', '2017-05-01', '2017-09-01', 1, '2017-2018');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT,
  `question_category_id` int(11) NOT NULL,
  `question` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `question_category`
--

CREATE TABLE IF NOT EXISTS `question_category` (
  `question_category_id` int(11) NOT NULL,
  `question_category` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recognition`
--

CREATE TABLE IF NOT EXISTS `recognition` (
  `recognition_id` int(11) NOT NULL AUTO_INCREMENT,
  `recognition` varchar(50) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  PRIMARY KEY (`recognition_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `recognition`
--

INSERT INTO `recognition` (`recognition_id`, `recognition`, `faculty_id`) VALUES
(1, 'dadada', 5),
(2, 'ssasa', 5),
(3, '1st honor', 7);

-- --------------------------------------------------------

--
-- Table structure for table `reference`
--

CREATE TABLE IF NOT EXISTS `reference` (
  `reference_id` int(11) NOT NULL AUTO_INCREMENT,
  `reference_name` varchar(50) NOT NULL,
  `reference_address` varchar(50) NOT NULL,
  `reference_contact` varchar(30) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  PRIMARY KEY (`reference_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `reference`
--

INSERT INTO `reference` (`reference_id`, `reference_name`, `reference_address`, `reference_contact`, `faculty_id`) VALUES
(1, 'Joanna', 'Bago City', '09898', 5),
(2, 'Lavern Sim', 'Talisay', '089878', 5),
(3, 'sasa', 'sas', '434', 7);

-- --------------------------------------------------------

--
-- Table structure for table `seminar`
--

CREATE TABLE IF NOT EXISTS `seminar` (
  `seminar_id` int(11) NOT NULL AUTO_INCREMENT,
  `seminar` varchar(100) NOT NULL,
  `ojt_id` int(11) NOT NULL,
  PRIMARY KEY (`seminar_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `seminar`
--

INSERT INTO `seminar` (`seminar_id`, `seminar`, `ojt_id`) VALUES
(1, 'Y4IT', 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `settings_id` int(11) NOT NULL AUTO_INCREMENT,
  `school_year` varchar(10) NOT NULL,
  `semester` varchar(20) NOT NULL,
  PRIMARY KEY (`settings_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`settings_id`, `school_year`, `semester`) VALUES
(3, '2017-2018', '1st'),
(4, '2017-2018', '2nd');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE IF NOT EXISTS `skill` (
  `skill_id` int(11) NOT NULL AUTO_INCREMENT,
  `skill` varchar(30) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  PRIMARY KEY (`skill_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`skill_id`, `skill`, `faculty_id`) VALUES
(1, 'Biking', 5),
(2, 'ddsd', 5),
(3, 'dadad', 7),
(4, 'ssss', 7);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `subject_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(50) NOT NULL,
  `ojt_id` int(11) NOT NULL,
  `schedule` varchar(100) NOT NULL,
  PRIMARY KEY (`subject_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE IF NOT EXISTS `training` (
  `training_id` int(11) NOT NULL AUTO_INCREMENT,
  `faculty_id` int(11) NOT NULL,
  `training` varchar(100) NOT NULL,
  `training_start` date NOT NULL,
  `training_end` date NOT NULL,
  `training_hours` decimal(10,2) NOT NULL,
  `type` varchar(30) NOT NULL,
  `sponsor` varchar(30) NOT NULL,
  PRIMARY KEY (`training_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`training_id`, `faculty_id`, `training`, `training_start`, `training_end`, `training_hours`, `type`, `sponsor`) VALUES
(1, 5, 'Test', '2015-02-02', '2017-02-01', '1221.00', 'sss', 'CHSC'),
(2, 7, 'sasasa', '2017-01-01', '2017-01-01', '100.00', 'jikj', 'ji');

-- --------------------------------------------------------

--
-- Table structure for table `voluntary`
--

CREATE TABLE IF NOT EXISTS `voluntary` (
  `voluntary_id` int(11) NOT NULL AUTO_INCREMENT,
  `faculty_id` int(11) NOT NULL,
  `voluntary_start` date NOT NULL,
  `voluntary_end` date NOT NULL,
  `org_name` varchar(50) NOT NULL,
  `org_address` varchar(50) NOT NULL,
  `hours` decimal(10,2) NOT NULL,
  `voluntary_position` varchar(50) NOT NULL,
  PRIMARY KEY (`voluntary_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `voluntary`
--

INSERT INTO `voluntary` (`voluntary_id`, `faculty_id`, `voluntary_start`, `voluntary_end`, `org_name`, `org_address`, `hours`, `voluntary_position`) VALUES
(2, 5, '2011-11-06', '2016-11-01', 'CHSC', 'Talisay City', '123.00', 'Faculty'),
(3, 7, '2017-02-01', '2016-01-01', 'rrtrtrer', 'yuyuy', '123.00', 'csdfd');

-- --------------------------------------------------------

--
-- Table structure for table `work_exp`
--

CREATE TABLE IF NOT EXISTS `work_exp` (
  `work_exp_id` int(11) NOT NULL AUTO_INCREMENT,
  `faculty_id` int(11) NOT NULL,
  `govt` varchar(3) NOT NULL,
  `work_start` date NOT NULL,
  `work_end` date NOT NULL,
  `position` varchar(50) NOT NULL,
  `agency` varchar(100) NOT NULL,
  `salary` decimal(10,2) NOT NULL,
  `grade` varchar(15) NOT NULL,
  `appoint_status` varchar(30) NOT NULL,
  PRIMARY KEY (`work_exp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `work_exp`
--

INSERT INTO `work_exp` (`work_exp_id`, `faculty_id`, `govt`, `work_start`, `work_end`, `position`, `agency`, `salary`, `grade`, `appoint_status`) VALUES
(2, 5, 'Yes', '2016-04-01', '2017-01-01', 'Janitor1', 'DSQD1', '2200.00', 'Grade 11', 'Contractual1'),
(3, 5, 'Yes', '2017-01-01', '2017-01-01', 'kjhkj', 'kjk', '12333.00', 'saa', 'saa'),
(4, 7, 'Yes', '2017-01-01', '2017-01-01', 'manager', 'DWDL', '12000.00', 'Grade 2', 'Regular');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
