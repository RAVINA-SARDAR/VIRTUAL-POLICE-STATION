-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2020 at 12:06 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `contactNo` bigint(11) NOT NULL,
  `ADC_NO` int(50) NOT NULL,
  `desgination` varchar(100) NOT NULL,
  `police station` varchar(100) NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `contactNo`, `ADC_NO`, `desgination`, `police station`, `regDate`, `updationDate`, `status`) VALUES
(1, 'admin', 'f925916e2754e5e03f75dd58a5733251', 0, 0, '', '', '2020-07-08 05:53:56', '18-07-2019 14:18:16', 0),
(2, 'muskan', 'muskan', 0, 0, '', '', '2020-07-08 05:53:56', '', 0),
(3, 'muskan', 'muskan', 0, 0, '', '', '2020-07-08 05:53:56', '', 0),
(4, 'Riddhi@gmail.com', 'rid', 1234567890, 0, 'ASI', 'SARANGPUR', '2020-07-08 06:14:34', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `categoryName` varchar(255) DEFAULT NULL,
  `categoryDescription` longtext DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categoryName`, `categoryDescription`, `creationDate`, `updationDate`) VALUES
(1, 'chandkheda', 'chandkheda', '2019-07-28 06:10:55', '2020-07-03 16:53:47'),
(2, 'general', 'dsdas', '2019-06-10 10:54:06', '2019-08-06 04:49:40'),
(3, 'Ahmedabad', 'All area of Ahmedabad Covers here!!', '2020-07-06 16:50:30', NULL),
(4, 'Surat', 'All area of Surat Covers here!!', '2020-07-06 16:51:27', NULL),
(5, 'Rajkot', 'All area of Rajkot Covers here!!', '2020-07-06 16:51:54', NULL),
(6, 'Vadoadra', 'All area of Vadoadra Covers here!!', '2020-07-06 16:52:16', NULL),
(7, 'Bhavnagar', 'All area of Bhavnagar Covers here!!', '2020-07-06 16:52:41', NULL),
(8, 'Jamnagar', 'All area of Jamnagar Covers here!!', '2020-07-06 16:53:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `commisoner`
--

CREATE TABLE `commisoner` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `contactNo` bigint(11) NOT NULL,
  `ADC_NO` int(50) NOT NULL,
  `desgination` varchar(100) NOT NULL,
  `police station` varchar(100) NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commisoner`
--

INSERT INTO `commisoner` (`id`, `username`, `password`, `contactNo`, `ADC_NO`, `desgination`, `police station`, `regDate`, `updationDate`, `status`) VALUES
(1, 'Priyanka@gmail.com', 'priyanka', 1234567890, 0, 'comiisioner', 'bhavnagar', '2020-07-08 09:05:33', '', 1),
(2, 'apexa@gmail.com', 'apexa', 1234567878, 0, '1 CLASS', 'AHMEDABAD', '2020-07-09 06:01:03', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `complaintremark`
--

CREATE TABLE `complaintremark` (
  `id` int(11) NOT NULL,
  `complaintNumber` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `remark` mediumtext NOT NULL,
  `remarkDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `police_id` bigint(50) NOT NULL,
  `police_name` varchar(100) NOT NULL,
  `police_designation` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaintremark`
--

INSERT INTO `complaintremark` (`id`, `complaintNumber`, `status`, `remark`, `remarkDate`, `police_id`, `police_name`, `police_designation`) VALUES
(1, 2, 'in process', 'Hi this for demo', '2019-07-01 07:29:19', 0, '', ''),
(2, 9, 'in process', 'hiiiiiiiiiiiiiiiiiiii', '2019-07-01 18:37:59', 0, '', ''),
(3, 3, 'in process', 'test', '2019-05-02 15:57:43', 0, '', ''),
(4, 19, 'closed', 'case solved', '2019-06-11 11:18:33', 0, '', ''),
(5, 1, 'closed', 'This sample text for testing', '2019-09-05 17:08:26', 0, '', ''),
(6, 5, 'in process', 'test Data', '2019-06-24 07:26:17', 0, '', ''),
(7, 23, 'in process', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2019-06-24 10:34:47', 0, '', ''),
(8, 23, 'closed', 'Issue resolved ', '2019-06-24 10:37:08', 0, '', ''),
(9, 2, 'closed', 'dfsfsf', '2019-08-06 02:37:57', 0, '', ''),
(10, 6, 'in process', 'kvbk.skj', '2020-07-08 08:26:57', 0, 'muskan', ''),
(11, 6, 'in process', 'kvbk.skj', '2020-07-08 08:26:57', 0, 'muskan', ''),
(12, 9, 'closed', 'closed', '2020-07-08 08:30:42', 0, 'muskan', ''),
(13, 12, 'in process', 'process', '2020-07-08 08:44:34', 0, 'Riddhi@gmail.com', 'ASI'),
(14, 7, 'in process', 'iyfifvog;ij', '2020-07-09 04:32:02', 0, 'muskan', '');

-- --------------------------------------------------------

--
-- Table structure for table `criminal_record`
--

CREATE TABLE `criminal_record` (
  `c_id` int(11) NOT NULL,
  `criminal_name` varchar(11) DEFAULT NULL,
  `crime_type` varchar(11) DEFAULT NULL,
  `crime_location` varchar(255) DEFAULT NULL,
  `Crime_Details` mediumtext DEFAULT NULL,
  `ReportFile` varchar(255) DEFAULT NULL,
  `MedicalFile` varchar(255) NOT NULL,
  `regDate` timestamp NULL DEFAULT current_timestamp(),
  `status` varchar(50) DEFAULT NULL,
  `lastUpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `criminal_record`
--

INSERT INTO `criminal_record` (`c_id`, `criminal_name`, `crime_type`, `crime_location`, `Crime_Details`, `ReportFile`, `MedicalFile`, `regDate`, `status`, `lastUpdationDate`) VALUES
(11, 'pillu', 'MURDER', 'Bhavnagar', 'at chowk', '6051-WIN_20200425_17_09_39_Pro.jpg', '', '2020-07-05 10:34:40', NULL, '2020-07-06 17:55:28'),
(12, 'muski', 'ROBBERY', 'Surat', 'At udana', '1 (5).jpg', '', '2020-07-05 10:35:04', NULL, '2020-07-06 18:20:27'),
(13, 'apexa', 'robbery', 'Ahmedabad', 'gundi', '6939-1 (1).jpg', '', '2020-07-06 08:50:40', NULL, '2020-07-06 18:01:43'),
(14, 'pillu', 'ROBBERY', 'chandkheda', 'hfvsufvbsiofhihwu', NULL, '', '2020-07-08 11:05:49', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `req_isp`
--

CREATE TABLE `req_isp` (
  `id` int(50) NOT NULL,
  `req_num` varchar(15) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `from_time` time NOT NULL,
  `to_time` time NOT NULL,
  `o_desc` varchar(255) NOT NULL,
  `status` varchar(25) NOT NULL,
  `file` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `req_isp`
--

INSERT INTO `req_isp` (`id`, `req_num`, `from_date`, `to_date`, `from_time`, `to_time`, `o_desc`, `status`, `file`) VALUES
(1, '', '2020-07-04', '0000-00-00', '23:33:00', '00:00:00', 'cscs', 'APPROVED', '1 (5).jpg'),
(12, '788488882585', '2020-07-04', '2020-07-06', '00:18:00', '00:21:00', 'ffhd', 'APPROVED', 'LJ HACKATHON PPT.pptx'),
(13, '12345567', '2020-07-03', '2020-07-04', '14:15:00', '14:19:00', 'xxvs', 'APPROVED', ''),
(14, '89877585755', '2020-07-07', '2020-07-08', '17:31:00', '16:36:00', 'usfbwifgwefhewo', 'APPROVED', '290867.jpg'),
(15, '89877585755', '2020-07-03', '2020-07-06', '10:09:00', '10:12:00', 'jisbvouh', 'APPROVED', '290867.jpg'),
(16, '98765432', '2020-07-05', '2020-07-08', '14:20:00', '17:17:00', 'xcvbnm,', '', ''),
(17, '98765432', '2020-07-05', '2020-07-08', '14:20:00', '17:17:00', 'xcvbnm,', '', ''),
(18, '98765432', '2020-07-05', '2020-07-08', '14:20:00', '17:17:00', 'xcvbnm,', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `req_medical`
--

CREATE TABLE `req_medical` (
  `id` int(20) NOT NULL,
  `criminal_name` varchar(100) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `req_medical`
--

INSERT INTO `req_medical` (`id`, `criminal_name`, `Description`, `regDate`, `file`) VALUES
(1, '', 'ghjk', '2020-07-09 09:20:29', 'Screenshot (1).png');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(11) NOT NULL,
  `stateName` varchar(255) DEFAULT NULL,
  `stateDescription` tinytext DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `stateName`, `stateDescription`, `postingDate`, `updationDate`) VALUES
(3, 'Uttar Pradesh', 'UP', '2019-07-18 11:35:02', '2019-08-06 02:58:51'),
(4, 'Punjab', 'Punjab', '2019-07-18 11:35:58', '2019-08-06 02:59:03'),
(5, 'Haryana', 'Haryana', '2019-03-27 21:20:36', '2019-08-06 02:59:13'),
(6, 'Delhi', 'Delhi', '2019-07-11 06:54:12', '2019-08-06 02:59:29');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(11) NOT NULL,
  `categoryid` int(11) DEFAULT NULL,
  `subcategory` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `categoryid`, `subcategory`, `creationDate`, `updationDate`) VALUES
(1, 1, 'ROBBERY', '2019-03-28 07:11:07', '2020-07-03 16:54:44'),
(2, 1, 'MURDER', '2019-03-28 07:11:20', '2020-07-03 16:55:11'),
(3, 2, 'other', '2019-06-24 07:06:44', '2019-06-24 07:21:38'),
(4, 2, 'robbery', '2020-07-05 10:09:28', NULL),
(5, NULL, 'CHEATING', '2020-07-09 04:52:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblapplication`
--

CREATE TABLE `tblapplication` (
  `applicationNumber` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `app_title` varchar(50) DEFAULT NULL,
  `app_place` varchar(255) DEFAULT NULL,
  `event_date` date DEFAULT NULL,
  `event_time` time DEFAULT NULL,
  `aadhar_no` varchar(255) DEFAULT NULL,
  `complaintDetails` mediumtext DEFAULT NULL,
  `complaintFile` varchar(255) DEFAULT NULL,
  `regDate` timestamp NULL DEFAULT current_timestamp(),
  `status` varchar(50) DEFAULT NULL,
  `lastUpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblapplication`
--

INSERT INTO `tblapplication` (`applicationNumber`, `userId`, `app_title`, `app_place`, `event_date`, `event_time`, `aadhar_no`, `complaintDetails`, `complaintFile`, `regDate`, `status`, `lastUpdationDate`) VALUES
(1, 3, 'rally', 'saraspur', '2020-07-04', '15:27:00', 'ccbkcbvbi23445', 'HHHGC', '', '2020-07-04 09:57:28', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblcomplaints`
--

CREATE TABLE `tblcomplaints` (
  `complaintNumber` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `subcategory` varchar(255) DEFAULT NULL,
  `complaintType` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `noc` varchar(255) DEFAULT NULL,
  `complaintDetails` mediumtext DEFAULT NULL,
  `complaintFile` varchar(255) DEFAULT NULL,
  `regDate` timestamp NULL DEFAULT current_timestamp(),
  `status` varchar(50) DEFAULT NULL,
  `lastUpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcomplaints`
--

INSERT INTO `tblcomplaints` (`complaintNumber`, `userId`, `category`, `subcategory`, `complaintType`, `state`, `noc`, `complaintDetails`, `complaintFile`, `regDate`, `status`, `lastUpdationDate`) VALUES
(1, 1, 1, 'E-wllaet', 'General Query', 'Punjab', 'test demo', 'test demo test demo test demotest demotest demotest demotest demotest demotest demotest demotest demo', '', '2017-03-30 16:52:40', 'closed', '2019-06-24 10:29:37'),
(2, 1, 1, 'Online SHopping', 'General Query', 'Punjab', 'testing', 'sample text for demo', '', '2017-03-30 17:05:56', 'closed', '2019-08-06 02:37:57'),
(3, 1, 1, 'Online SHopping', ' Complaint', 'Punjab', 'ferwekt lwentgwewt', 'wetwetwe', '', '2017-03-30 17:07:51', 'in process', '2017-05-02 15:57:43'),
(4, 1, 1, 'E-wllaet', 'General Query', 'Haryana', 'lkdlsfklsdf', 'fdsf,msd,f  f f', '', '2017-03-30 17:13:14', 'closed', '2019-06-24 10:29:37'),
(5, 1, 1, 'E-wllaet', ' Complaint', 'Punjab', 'bgfhfgh', 'hfghfgh', '', '2017-03-30 17:14:55', 'in process', '2019-06-24 10:29:37'),
(6, 1, 1, 'E-wllaet', ' Complaint', 'Punjab', 'bgfhfgh', 'hfghfgh', '', '2017-03-30 17:20:16', 'in process', '2020-07-08 08:26:57'),
(7, 1, 1, 'E-wllaet', ' Complaint', 'Punjab', 'bgfhfgh', 'hfghfgh', '', '2017-03-30 17:20:56', 'in process', '2020-07-09 04:32:02'),
(8, 1, 1, 'E-wllaet', ' Complaint', 'Punjab', 'bgfhfgh', 'hfghfgh', '', '2017-03-30 17:23:05', NULL, '2019-06-24 10:29:37'),
(9, 1, 1, 'E-wllaet', ' Complaint', 'Punjab', 'bgfhfgh', 'hfghfgh', '', '2017-03-30 17:25:09', 'closed', '2020-07-08 08:30:42'),
(10, 1, 1, 'E-wllaet', ' Complaint', 'Punjab', 'bgfhfgh', 'hfghfgh', '', '2017-03-30 17:27:24', NULL, '2019-06-24 10:29:37'),
(11, 1, 1, 'Online SHopping', 'General Query', 'Haryana', 'dsflsdlflsdf', 'fsdfsdfsdf', '', '2017-03-30 17:36:32', NULL, '2019-06-24 10:29:37'),
(12, 1, 1, 'Online SHopping', 'General Query', 'Haryana', 'dsflsdlflsdf', 'fsdfsdfsdf', '', '2017-03-30 17:37:09', 'in process', '2020-07-08 08:44:34'),
(13, 1, 1, 'Online SHopping', 'General Query', 'Haryana', 'dsflsdlflsdf', 'fsdfsdfsdf', '', '2017-03-30 17:39:57', NULL, '2019-06-24 10:29:37'),
(14, 1, 1, 'Online SHopping', ' Complaint', 'Haryana', 'vcxvxcvxcv', 'cvcx', '', '2017-03-30 17:41:19', NULL, '2019-06-24 10:29:37'),
(15, 1, 1, 'E-wllaet', 'General Query', 'Punjab', 'dsfsd', 'fsdfsdf', '', '2017-03-30 17:42:38', NULL, '0000-00-00 00:00:00'),
(16, 1, 1, 'E-wllaet', 'General Query', 'Punjab', 'dsfsd', 'fsdfsdf', '', '2017-03-31 01:54:07', NULL, '0000-00-00 00:00:00'),
(17, 5, 1, 'E-wllaet', ' Complaint', 'fsdfs', 'regarding refund', 'test test', '', '2017-06-11 10:57:49', NULL, '0000-00-00 00:00:00'),
(18, 5, 1, 'Online SHopping', ' Complaint', 'Uttar Pradesh', 'yhytr', 'rtytry', '', '2017-06-11 11:08:47', NULL, '2019-06-24 10:29:37'),
(19, 6, 1, 'Online SHopping', ' Complaint', 'Uttar Pradesh', 'regarding refund', 'Test@123 dfds fsd fs gs gsd g sg g g sgstwerwe ewtw tw', '', '2017-06-11 11:15:24', 'closed', '2019-06-24 10:29:37'),
(20, 1, 1, 'E-wllaet', 'General Query', 'fsdfs', 'sdgsdg', 'gdgsdgsd', '', '2018-05-24 18:26:23', NULL, '0000-00-00 00:00:00'),
(21, 1, 1, 'Online SHopping', 'General Query', 'Uttar Pradesh', 'csdf', 'fsdfs', '', '2018-05-24 18:26:55', NULL, '0000-00-00 00:00:00'),
(22, 1, 1, 'Online SHopping', 'General Query', 'Uttar Pradesh', 'csdf', 'fsdfs', '', '2018-05-24 18:27:02', NULL, '0000-00-00 00:00:00'),
(23, 1, 1, 'E-wllaet', ' Complaint', 'Delhi', 'This is sample text for testing.', 'This is sample text for testing.', '2a09969b-c3d5-467b-82b0-2cf5aeb903eb_200x200.png', '2019-06-24 10:31:19', 'closed', '2019-06-24 10:37:09'),
(24, 2, 1, 'Online Shopping', 'General Query', 'Haryana', 'fdgd', 'fgdfgdgd', '', '2019-08-06 02:48:57', NULL, NULL),
(25, 3, 4, 'Select Subcategory', ' Complaint', 'Punjab', 'KJV.VK.', 'VK.C', 'RBI Draft.pdf', '2020-07-06 19:47:19', NULL, NULL),
(26, 3, 5, 'Select Subcategory', ' Complaint', 'Punjab', '43567584', 'molestation', 'admin_flow.pdf', '2020-07-08 10:26:35', NULL, NULL),
(27, 3, 3, 'Select Subcategory', ' Complaint', 'Punjab', '123456789', 'xhv.kihn;kjhjjgxfggfcgvhjb,mnv', 'admin_flow.pdf', '2020-07-08 10:49:29', NULL, NULL),
(28, 3, 5, 'Select Subcategory', ' Complaint', 'Haryana', '123456789', 'jgkshfvui', '290937.jpg', '2020-07-09 04:24:39', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblcontact_us`
--

CREATE TABLE `tblcontact_us` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(25) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcontact_us`
--

INSERT INTO `tblcontact_us` (`id`, `name`, `email`, `message`) VALUES
(1, 'Adani', 'Priyanka@gmail.com', 'FDDBB'),
(2, 'apexa', 'Riddhi@gmail.com', 'jfbdsofbo;b');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `userip` binary(16) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `logout` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `uid`, `username`, `userip`, `loginTime`, `logout`, `status`) VALUES
(27, 2, 'deepak@gmail.com', 0x3a3a3100000000000000000000000000, '2019-08-06 02:47:52', '', 1),
(28, 2, 'deepak@gmail.com', 0x3a3a3100000000000000000000000000, '2019-08-06 02:54:39', '06-08-2019 10:33:46 AM', 1),
(29, 3, 'ravu@gmail.com', 0x3a3a3100000000000000000000000000, '2020-07-03 15:26:15', '', 1),
(30, 3, 'ravu@gmail.com', 0x3a3a3100000000000000000000000000, '2020-07-03 16:34:00', '', 1),
(31, 3, 'ravu@gmail.com', 0x3a3a3100000000000000000000000000, '2020-07-03 17:31:52', '03-07-2020 11:02:45 PM', 1),
(32, 3, 'ravu@gmail.com', 0x3a3a3100000000000000000000000000, '2020-07-03 17:38:59', '03-07-2020 11:09:58 PM', 1),
(33, 3, 'ravu@gmail.com', 0x3a3a3100000000000000000000000000, '2020-07-04 08:23:06', '', 1),
(34, 3, 'ravu@gmail.com', 0x3a3a3100000000000000000000000000, '2020-07-04 09:20:22', '04-07-2020 03:30:40 PM', 1),
(35, 3, 'ravu@gmail.com', 0x3a3a3100000000000000000000000000, '2020-07-05 08:49:22', '', 1),
(36, 3, 'ravu@gmail.com', 0x3a3a3100000000000000000000000000, '2020-07-05 09:23:21', '', 1),
(37, 3, 'ravu@gmail.com', 0x3a3a3100000000000000000000000000, '2020-07-06 16:36:09', '', 1),
(38, 3, 'ravu@gmail.com', 0x3a3a3100000000000000000000000000, '2020-07-06 19:46:07', '', 1),
(39, 0, 'muskan', 0x3a3a3100000000000000000000000000, '2020-07-07 09:16:11', '', 0),
(40, 3, 'ravu@gmail.com', 0x3a3a3100000000000000000000000000, '2020-07-07 09:16:16', '', 1),
(41, 3, 'ravu@gmail.com', 0x3a3a3100000000000000000000000000, '2020-07-07 16:58:46', '07-07-2020 10:55:49 PM', 1),
(42, 3, 'ravu@gmail.com', 0x3a3a3100000000000000000000000000, '2020-07-08 10:24:25', '08-07-2020 03:59:04 PM', 1),
(43, 3, 'ravu@gmail.com', 0x3a3a3100000000000000000000000000, '2020-07-08 10:44:51', '08-07-2020 04:23:19 PM', 1),
(44, 0, 'Priyanka@gmail.com', 0x3a3a3100000000000000000000000000, '2020-07-08 17:04:34', '', 0),
(45, 3, 'ravu@gmail.com', 0x3a3a3100000000000000000000000000, '2020-07-08 17:04:40', '', 1),
(46, 3, 'ravu@gmail.com', 0x3a3a3100000000000000000000000000, '2020-07-08 18:35:17', '', 1),
(47, 3, 'ravu@gmail.com', 0x3a3a3100000000000000000000000000, '2020-07-08 18:39:16', '09-07-2020 12:10:56 AM', 1),
(48, 3, 'ravu@gmail.com', 0x3a3a3100000000000000000000000000, '2020-07-09 04:20:37', '', 1),
(49, 3, 'ravu@gmail.com', 0x3a3a3100000000000000000000000000, '2020-07-09 04:58:30', '', 1),
(50, 3, 'ravu@gmail.com', 0x3a3a3100000000000000000000000000, '2020-07-09 08:20:51', '', 1),
(51, 0, 'muskan', 0x3a3a3100000000000000000000000000, '2020-07-09 09:41:28', '', 0),
(52, 3, 'ravu@gmail.com', 0x3a3a3100000000000000000000000000, '2020-07-09 09:41:32', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullName` varchar(255) DEFAULT NULL,
  `userEmail` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `contactNo` bigint(11) DEFAULT NULL,
  `address` tinytext DEFAULT NULL,
  `State` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `pincode` int(6) DEFAULT NULL,
  `userImage` varchar(255) DEFAULT NULL,
  `regDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullName`, `userEmail`, `password`, `contactNo`, `address`, `State`, `country`, `pincode`, `userImage`, `regDate`, `updationDate`, `status`) VALUES
(1, 'Amandeep Singh', 'aman@gmail.com', 'f925916e2754e5e03f75dd58a5733251', 9874563210, 'Shakarpur', 'Uttar Pradesh', 'India', 110092, '6e8024ec26c292f258ec30f01e0392dc.png', '2017-03-28 11:44:52', '2019-08-06 02:57:08', 1),
(2, 'Deepak', 'deepak@gmail.com', '498b5924adc469aa7b660f457e0fc7e5', 1234567890, 'Faridabad', 'Haryana', 'India', 112266, '2ec5514b65bdb23768402fdc9382e502.jpg', '2019-08-06 02:47:39', '2019-08-06 02:56:59', 1),
(3, 'ravina', 'ravu@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1234567890, NULL, NULL, NULL, NULL, 'cf0321ece4efbee40b2278699488f9a9.jpg', '2020-07-03 15:25:58', '2020-07-08 10:46:06', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commisoner`
--
ALTER TABLE `commisoner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaintremark`
--
ALTER TABLE `complaintremark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `criminal_record`
--
ALTER TABLE `criminal_record`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `req_isp`
--
ALTER TABLE `req_isp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `req_medical`
--
ALTER TABLE `req_medical`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblapplication`
--
ALTER TABLE `tblapplication`
  ADD PRIMARY KEY (`applicationNumber`);

--
-- Indexes for table `tblcomplaints`
--
ALTER TABLE `tblcomplaints`
  ADD PRIMARY KEY (`complaintNumber`);

--
-- Indexes for table `tblcontact_us`
--
ALTER TABLE `tblcontact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `commisoner`
--
ALTER TABLE `commisoner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `complaintremark`
--
ALTER TABLE `complaintremark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `criminal_record`
--
ALTER TABLE `criminal_record`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `req_isp`
--
ALTER TABLE `req_isp`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `req_medical`
--
ALTER TABLE `req_medical`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblapplication`
--
ALTER TABLE `tblapplication`
  MODIFY `applicationNumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcomplaints`
--
ALTER TABLE `tblcomplaints`
  MODIFY `complaintNumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tblcontact_us`
--
ALTER TABLE `tblcontact_us`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
