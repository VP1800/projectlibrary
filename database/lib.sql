-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2023 at 04:18 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lib`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `mail` varchar(20) NOT NULL,
  `msg` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `mail`, `msg`) VALUES
(1, 'Vidyasagar', 'vidyasagarpatil1800@', 'good site!'),
(2, 'dj', 'vp@gmail.com', 'good site!'),
(3, 'sagar', 'sj@gmail.com', 'way to go!'),
(4, 'varad', 'vd@gmail.com', 'keep it up!');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `rid` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobno` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `salary` varchar(50) NOT NULL DEFAULT '0',
  `emptype` varchar(50) NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`rid`, `fname`, `lname`, `emailid`, `password`, `mobno`, `dept`, `salary`, `emptype`) VALUES
(1, 'PATIL', 'BALASO', 'vidyasagarpatil1800@gmail.com', 'admin', '+919373520988', '', '0', 'admin'),
(2, 'Vidyasagar', 'Patil', 'vidyasagarpatil1800@gmail.com', 'dj', '+919373520988', '', '0', 'admin'),
(3, 'Vidyasagar', 'Patil', 'vidyasagarpatil1800@gmail.com', '45', '+919373520988', '', '0', 'admin'),
(4, 'Vidyasagar', 'Patil', 'vidyasagarpatil1800@gmail.com', '45', '+919373520988', '', '0', 'admin'),
(5, 'Vidyasagar', 'Patil', 'vidyasagarpatil1800@gmail.com', '45', '+919373520988', '', '0', 'admin'),
(27, 'Vidyasagar', 'Patil', 'vidyasagarpatil1800@gmail.com', 'dj', '+919373520988', '', '0', 'admin'),
(28, 'Vidyasagar', 'Patil', 'vidyasagarpatil1800@gmail.com', 'aa', '+919373520988', '', '0', 'admin'),
(29, 'Vidyasagar', 'Patil', 'vidyasagarpatil1800@gmail.com', 'qq', '+919373520988', '', '0', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `reqbook`
--

CREATE TABLE `reqbook` (
  `id` int(11) NOT NULL,
  `clss` varchar(20) NOT NULL,
  `mobno` varchar(20) NOT NULL,
  `btitle` varchar(30) NOT NULL,
  `author` varchar(30) NOT NULL,
  `subject` varchar(20) DEFAULT NULL,
  `language` varchar(20) NOT NULL DEFAULT 'English',
  `department` varchar(20) DEFAULT NULL,
  `publisher` varchar(20) DEFAULT NULL,
  `edition` int(11) DEFAULT NULL,
  `volume` int(11) DEFAULT NULL,
  `copies` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reqbook`
--

INSERT INTO `reqbook` (`id`, `clss`, `mobno`, `btitle`, `author`, `subject`, `language`, `department`, `publisher`, `edition`, `volume`, `copies`) VALUES
(2, 'MBA', '9876543210', 'Book of MBA', 'Donald j Arguson', '', 'English', 'it', NULL, 1, 2, 1),
(4, 'MCA', '9876543210', 'abc', 'ball Donald & Mcclloch W.', '', 'English', 'IT', 'Himalaya Publication', 2, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `sheet1`
--

CREATE TABLE `sheet1` (
  `Accno` int(11) NOT NULL,
  `btitle` varchar(70) DEFAULT NULL,
  `author` varchar(40) DEFAULT NULL,
  `subject` varchar(15) DEFAULT 'Other',
  `language` varchar(10) DEFAULT 'English',
  `department` varchar(15) DEFAULT 'Other',
  `location` varchar(10) DEFAULT NULL,
  `classno` varchar(20) DEFAULT NULL,
  `publisher` varchar(50) DEFAULT NULL,
  `pcity` varchar(15) DEFAULT NULL,
  `pyear` year(4) DEFAULT NULL,
  `edition` int(11) DEFAULT NULL,
  `volume` int(11) DEFAULT NULL,
  `pages` decimal(6,2) DEFAULT NULL,
  `isbn` varchar(10) DEFAULT NULL,
  `bstatus` varchar(10) DEFAULT 'Active',
  `type` varchar(10) DEFAULT NULL,
  `billno` int(11) DEFAULT NULL,
  `billdate` date DEFAULT NULL,
  `vendor` varchar(15) DEFAULT NULL,
  `vcity` varchar(15) DEFAULT NULL,
  `rs` int(11) DEFAULT 0,
  `ps` int(2) DEFAULT 0,
  `copies` int(11) DEFAULT 1,
  `discount` decimal(6,2) DEFAULT 0.00,
  `total` decimal(6,2) DEFAULT 0.00,
  `budget` varchar(7) DEFAULT 'Library',
  `register` int(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sheet1`
--

INSERT INTO `sheet1` (`Accno`, `btitle`, `author`, `subject`, `language`, `department`, `location`, `classno`, `publisher`, `pcity`, `pyear`, `edition`, `volume`, `pages`, `isbn`, `bstatus`, `type`, `billno`, `billdate`, `vendor`, `vcity`, `rs`, `ps`, `copies`, `discount`, `total`, `budget`, `register`) VALUES
(6, 'COST ACCOUNTING A MANAGEMENT EMPHOSIS', 'Horngren C.T', 'Commerce', 'English', 'Commerce', NULL, '657.42/HOR', 'Prentice Hall', 'New Delhi', 1983, NULL, NULL, '996.00', NULL, 'Inactive', NULL, 2100, '0000-00-00', 'Ajab', 'Kolhapur', 65, NULL, NULL, NULL, '65.00', 'Library', 1),
(11, 'MARKETING MANAGEMENT', 'Latif T. A. A', 'Management', 'English', 'Management', NULL, '658.8/LAT', 'Deep & Deep', 'New Delhi', 1983, NULL, NULL, '340.00', NULL, 'Active', NULL, 2099, '0000-00-00', 'Ajab', 'Kolhapur', 150, NULL, NULL, NULL, '150.00', 'Library', 1),
(12, 'MARKETING PLANNING APPROACHES TO SELECTED COMPANIES', 'Miller E. C.', 'Management', 'English', 'Management', NULL, '658.8/MIL', 'Taraporala', 'Bombay', 1977, NULL, NULL, '101.00', NULL, 'Active', NULL, 2100, '0000-00-00', 'Ajab', 'Kolhapur', 49, NULL, NULL, NULL, '49.00', 'Library', 1),
(13, 'THE ECONOMICS OF WORK AND PAY', 'Rees Albert', 'Commerce', 'English', 'Commerce', NULL, '331/REE', 'Harper & Raw', 'New York', 1979, NULL, NULL, '228.00', NULL, 'Active', NULL, 2100, '0000-00-00', 'Ajab', 'Kolhapur', 121, 98, NULL, NULL, '121.98', 'Library', 1),
(14, 'MIXED COMPANY', 'Namjoshi M. V.', 'Commerce', 'English', 'Commerce', NULL, '330.126/NAM', 'Himalaya', 'Bombay', 1984, NULL, NULL, '249.00', NULL, 'Active', NULL, 2100, '0000-00-00', 'Ajab', 'Kolhapur', 100, NULL, NULL, NULL, '100.00', 'Library', 1),
(15, 'THE ECONOMICS OF LABOUR MANAGED ENTERPRISES', 'Ireland N. J. & Lawpeter J.', 'Commerce', 'English', 'Commerce', NULL, '331.89/IRE/LAW', 'Coomhelm', 'London', 1982, NULL, NULL, '218.00', NULL, 'Active', NULL, 2100, '0000-00-00', 'Ajab', 'Kolhapur', 227, 39, NULL, NULL, '227.39', 'Library', 1),
(16, 'INVESTMENT EMPLOYMENT AND ECONOMIC GROWTH', 'Sharma Devendra', 'Commerce', 'English', 'Commerce', NULL, '338.9/SHA', 'IBH, Oxford', 'New Delhi', 1983, NULL, NULL, '253.00', NULL, 'Active', NULL, 2099, '0000-00-00', 'Ajab', 'Kolhapur', 80, NULL, NULL, NULL, '80.00', 'Library', 1),
(17, 'PRICE CONTROLS IN THE INDIAN ECONOMY', 'Kulkarni, G. B.', 'Commerce', 'English', 'Commerce', NULL, '330.954/KUL', 'The Times of Research Foundation', 'Pune', 1984, NULL, NULL, '262.00', NULL, 'Active', NULL, 2100, '0000-00-00', 'Ajab', 'Kolhapur', 195, NULL, NULL, NULL, '195.00', 'Library', 1),
(18, 'INTERNATIONAL FINANCE TEXT & CASES', 'Feiger George & Jacqueillat, B.', 'Commerce', 'English', 'Commerce', NULL, '332.042/FEI/JAC', 'Allyn & Bacon', 'Boosten', NULL, NULL, NULL, '453.00', NULL, 'Active', NULL, 2100, '0000-00-00', 'Ajab', 'Kolhapur', 195, 95, NULL, NULL, '195.95', 'Library', 1),
(19, 'PUBLIC BUDGETING & FINANCE', 'WolemiewsR. T. / Robins Jack', 'Commerce', 'English', 'Commerce', NULL, '350.72/GOL/RAB', 'Mazcil Dekkr Inc.', 'New York', 1983, NULL, NULL, '403.00', NULL, 'Active', NULL, 2099, '0000-00-00', 'Ajab', 'Kolhapur', 351, 50, NULL, NULL, '351.50', 'Library', 1),
(20, 'INDUSTRIAL FINANCE', 'Khan M. Y.', 'Commerce', 'English', 'Commerce', NULL, '338/KHA', 'Tata Mcgraw Hill', 'New Delhi', 1982, NULL, NULL, '287.00', NULL, 'Active', NULL, 2100, '0000-00-00', 'Ajab', 'Kolhapur', 96, NULL, NULL, NULL, '96.00', 'Library', 1),
(21, 'LEASING FINANCING', 'Purchase rajay', 'Commerce', 'English', 'Commerce', NULL, '335.5/PAR', 'Time Research Foundation', NULL, 1983, NULL, NULL, '40.00', NULL, 'Active', NULL, 2100, '0000-00-00', 'Ajab', 'Kolhapur', 20, NULL, NULL, NULL, '20.00', 'Library', 1),
(22, 'DIMENSIONS OF PERSONNEL MANAGEMENT', 'Singh N. K.', 'Management', 'English', 'Management', NULL, '658.3/SIN', 'Vikas Publication', 'New Delhi', 1984, NULL, NULL, '224.00', NULL, 'Active', NULL, 2099, '0000-00-00', 'Ajab', 'Kolhapur', 50, NULL, NULL, NULL, '50.00', 'Library', 1),
(23, 'UNDERSTANDING PERSONNEL MANAGEMENT', 'Stone T.H.', 'Management', 'English', 'Management', NULL, '658.3/STO', 'Saundes college Publication', 'New York', 1982, NULL, NULL, '528.00', NULL, 'Active', NULL, 2098, '0000-00-00', 'Ajab', 'Kolhapur', 118, 40, NULL, NULL, '118.40', 'Library', 1),
(24, 'FINANCIAL MANAGEMENT', 'Johnson R.W. & Melicher R.W.', 'Management', 'English', 'Management', NULL, '658.15/JOH/MIC', 'Allyn & Bacon INC.', 'Boston', 1982, NULL, NULL, '731.00', NULL, 'Active', NULL, 2098, '0000-00-00', 'Ajab', 'Kolhapur', 228, 50, NULL, NULL, '228.50', 'Library', 1),
(25, 'ORGANISATION THEORY AND BEHAVIOUR', 'Prasad L.M.', 'Management', 'English', 'Management', NULL, '658.3153/PRA', 'Sultan Chands & Co.', 'New Delhi', 1984, NULL, NULL, '5.54', NULL, 'Active', NULL, 2098, '0000-00-00', 'Ajab', 'Kolhapur', 35, NULL, NULL, NULL, '35.00', 'Library', 1),
(26, 'INDUSTRIAL ORGANISATION', 'George K.D, / Golle', 'Management', 'English', 'Management', NULL, '338.6/GEO/JOL', 'George Allen & Unwin', 'London', 1983, NULL, NULL, '336.00', NULL, 'Active', NULL, NULL, '0000-00-00', 'Ajab', 'Kolhapur', 113, 29, NULL, NULL, '113.29', 'Library', 1),
(27, 'MANAGING AND DVELOPING NEW FORMS OF WORK OF ORGANISATION', 'Kanawati George', 'Management', 'English', 'Management', NULL, '658/KAN', 'Oxford & IBH,Publishing co.', 'New Delhi', 1981, NULL, NULL, '206.00', NULL, 'Active', NULL, 2098, '0000-00-00', 'Ajab', 'Kolhapur', 60, NULL, NULL, NULL, '60.00', 'Library', 1),
(28, 'MANAGING BEHAVIOUR IN ORGANISATIONS', 'Schiesinger L.A.', 'Management', 'English', 'Management', NULL, '658.31244/SCH', 'Mcgraw Hill publication Ltd.', 'london', NULL, NULL, NULL, NULL, NULL, 'Active', NULL, 2098, '0000-00-00', NULL, NULL, 237, 40, NULL, NULL, '237.40', 'Library', 1),
(29, 'OPERATIONS MANAGEMENT', 'Delvitsiotis Kostas T.', 'Management', 'English', 'Management', NULL, '658.5/DER', 'Mcgraw-Hill Intrnational Book co.', 'Auckland', 1981, NULL, NULL, '771.00', NULL, 'Active', NULL, 2100, '0000-00-00', 'Ajab', 'Kolhapur', 113, 50, NULL, NULL, '113.50', 'Library', 1),
(30, 'MANAGEMENT', 'Flippo E.B & Munusinger Gray M.', 'Management', 'English', 'Management', NULL, '658 FLI/MUN', 'Ailyn & Bacon INC', 'Boston', 1975, NULL, NULL, '604.00', NULL, 'Active', NULL, 2099, '0000-00-00', 'Ajab', 'Kolhapur', 154, NULL, NULL, NULL, '154.00', 'Library', 1),
(31, 'MANAGEMENT FOZ ACTION', 'Mozis William T.', 'Management', 'English', 'Management', NULL, '658/MOR', 'D. B. Taraporwala Sons & Co. Ltd.', 'Bombay', 1979, NULL, NULL, '223.00', NULL, 'Active', NULL, 2099, '0000-00-00', 'Ajab', 'Kolhapur', 39, NULL, NULL, NULL, '39.00', 'Library', 1),
(32, 'AN INTRODUCTION TO MANAGEMENT: ITS PRINCIPLES & TECHNIQUES', 'Chaterzee Satya Sazon', 'Management', 'English', 'Management', NULL, '658/CHA', 'The World Press Pvt. Ltd.', 'Culcutta', 1982, NULL, NULL, '428.00', NULL, 'Active', NULL, 2099, '0000-00-00', 'Ajab', 'Kolhapur', 32, NULL, NULL, NULL, '32.00', 'Library', 1),
(33, 'THE POWER OF PROFESSIONAL MANAGEMENT', 'Dively & George', 'Management', 'English', 'Management', NULL, '658.3/DIV', 'Taraporawala Publishing Industry', 'Bombay', 1981, NULL, NULL, '175.00', NULL, 'Active', NULL, 2098, '0000-00-00', 'Ajab', 'Kolhapur', 65, NULL, NULL, NULL, '65.00', 'Library', 1),
(34, 'CHANGING PATTERNS OF CORPORATE MANAGEMENT', 'Sengupta N. K.', 'Management', 'English', 'Management', NULL, '658/4012/SEN', 'Vikas Publishing House', 'New Delhi', 1983, NULL, NULL, '311.00', NULL, 'Active', NULL, 2099, '0000-00-00', 'Ajab', 'Kolhapur', 45, NULL, NULL, NULL, '45.00', 'Library', 1),
(35, 'GREAT IDEAS IN MANAGEMENT', 'Nozthcote C.', 'Management', 'English', 'Management', NULL, '658/NOR', 'Indian Book House Pvt. Ltd.', 'New Delhi', NULL, NULL, NULL, NULL, NULL, 'Active', NULL, 2098, '0000-00-00', 'Ajab', 'Kolhapur', 30, NULL, NULL, NULL, '30.00', 'Library', 1),
(36, 'INTEGRATED SPACES MANAGEMENT', 'GopalKrishna P.', 'Management', 'English', 'Management', NULL, '658.785/EOP', 'S. Chand & Co.', 'New Delhi', 1984, NULL, NULL, '244.00', NULL, 'Active', NULL, 2099, '0000-00-00', 'Ajab', 'Kolhapur', 35, NULL, NULL, NULL, '35.00', 'Library', 1),
(37, 'UNDERSTANDING DATA BASE MANAGEMENT', 'Naveen Prakash', 'Management', 'English', 'Management', NULL, '658.05/NAV', 'Tata Mcgraw Hill Publishing Co. Ltd.', 'New Delhi', 1984, NULL, NULL, '214.00', NULL, 'Active', NULL, 2100, '0000-00-00', NULL, NULL, 57, NULL, NULL, NULL, '57.00', 'Library', 1),
(38, 'DATA BASE ADMINISTRATION', 'Weldon Jay-Louise', 'IT', 'English', 'IT', NULL, '658.05/WEL', 'A Division of Plenum, Publishing Corporation', 'New York', 1983, NULL, NULL, '250.00', NULL, 'Active', NULL, 2100, '0000-00-00', 'Ajab', 'Kolhapur', 351, 50, NULL, NULL, '351.50', 'Library', 1),
(39, 'WAGES PROFITS, PRODUCTIVITY IN SELECTED INDUSTRIES IN INDIA', 'Srivstav S. C.', 'Commerce', 'English', 'Commerce', NULL, '338/SKI', 'Himalaya Publishing House', 'Bombay', 1984, NULL, NULL, '254.00', NULL, 'Active', NULL, 2100, '0000-00-00', 'Ajab', 'Kolhapur', 125, NULL, NULL, NULL, '125.00', 'Library', 1),
(40, 'BUDGETORY CONTROL AND STANDARD COSTS', 'Scott J. A.', 'Commerce', 'English', 'Commerce', NULL, '657.42/SCO', 'Arnoid Hein Eman Publishens', 'New Delhi', 1983, NULL, NULL, '224.00', NULL, 'Active', NULL, 2099, '0000-00-00', 'Ajab', 'Kolhapur', 25, NULL, NULL, NULL, '25.00', 'Library', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sheet2`
--

CREATE TABLE `sheet2` (
  `Accno` int(11) NOT NULL DEFAULT 0,
  `btitle` varchar(70) CHARACTER SET utf8 DEFAULT NULL,
  `author` varchar(40) CHARACTER SET utf8 DEFAULT NULL,
  `subject` varchar(15) CHARACTER SET utf8 DEFAULT 'Other',
  `language` varchar(10) CHARACTER SET utf8 DEFAULT 'English',
  `department` varchar(15) CHARACTER SET utf8 DEFAULT 'Other',
  `location` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `classno` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `publisher` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `pcity` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `pyear` year(4) DEFAULT NULL,
  `edition` int(11) DEFAULT NULL,
  `volume` int(11) DEFAULT NULL,
  `pages` decimal(6,2) DEFAULT NULL,
  `isbn` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `status` varchar(10) CHARACTER SET utf8 DEFAULT 'Active',
  `type` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `billno` int(11) DEFAULT NULL,
  `billdate` date DEFAULT NULL,
  `vendor` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `vcity` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `rs` int(11) DEFAULT 0,
  `ps` int(2) DEFAULT 0,
  `copies` int(11) DEFAULT 1,
  `discount` decimal(6,2) DEFAULT 0.00,
  `total` decimal(6,2) DEFAULT 0.00,
  `budget` varchar(7) CHARACTER SET utf8 DEFAULT 'Library',
  `register` int(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sheet2`
--

INSERT INTO `sheet2` (`Accno`, `btitle`, `author`, `subject`, `language`, `department`, `location`, `classno`, `publisher`, `pcity`, `pyear`, `edition`, `volume`, `pages`, `isbn`, `status`, `type`, `billno`, `billdate`, `vendor`, `vcity`, `rs`, `ps`, `copies`, `discount`, `total`, `budget`, `register`) VALUES
(1, 'WELDONS BUSINESS STATISTICS AND STATISTICAL METHOD', 'Thirkettie G. N.', 'Commerce', 'English', 'Commerce', NULL, '310 / T H I', 'Mcdonald', 'London', 1981, NULL, NULL, '278.00', NULL, 'Active', NULL, 2099, '0000-00-00', 'Ajab', 'Kolhapur', 24, NULL, NULL, NULL, '24.00', 'Library', 1),
(2, 'MANAGEMENT ACCOUNTING', 'Singh / Paul.', 'Management', 'English', 'Management', NULL, '658.1511 SIN/PAU', 'Kitalo Mahal', 'Allahabad,Delhi', NULL, NULL, NULL, '456.00', NULL, 'Active', NULL, 2099, '0000-00-00', 'Ajab', 'Kolhapur', 32, NULL, NULL, NULL, '32.00', 'Library', 1),
(3, 'MANAGEMENT ACCOUNTING PRINCIPLE', 'Anthony R.N. & Recee J.S', 'Management', 'English', 'Management', NULL, '658.1511 / ANT/REC', 'Taraporala', 'Bombay', 1981, NULL, NULL, '733.00', NULL, 'Active', NULL, 2098, '0000-00-00', 'Ajab', 'Kolhapur', 80, NULL, NULL, NULL, '80.00', 'Library', 1),
(4, 'FINANCIAL AND COST ACCOUNTING FOR MANAGEMENT', 'Taytor A.H. & Shearing H.', 'Commerce', 'English', 'Commerce', NULL, '657.42 /TAY /SHE', 'Macdonald', 'London', 1983, NULL, NULL, '340.00', NULL, 'Active', NULL, 2098, '0000-00-00', 'Ajab', 'Kolhapur', 52, 16, NULL, NULL, '52.16', 'Library', 1),
(5, 'COST ACCOUNTING', 'Cashiw J.A & Polimeni R.S.', 'Commerce', 'English', 'Commerce', NULL, '657.42/CAS/POL', 'McGraw Hill', 'Tokyo', NULL, NULL, NULL, '854.00', NULL, 'Active', NULL, 2099, '0000-00-00', 'Ajab', 'Kolhapur', 106, 50, NULL, NULL, '106.50', 'Library', 1),
(6, 'COST ACCOUNTING A MANAGEMENT EMPHOSIS', 'Horngren C.T', 'Commerce', 'English', 'Commerce', NULL, '657.42/HOR', 'Prentice Hall', 'New Delhi', 1983, NULL, NULL, '996.00', NULL, 'Active', NULL, 2100, '0000-00-00', 'Ajab', 'Kolhapur', 65, NULL, NULL, NULL, '65.00', 'Library', 1),
(7, 'BUSINESS AND GOVERNMENT', 'Cherunilam Francis', 'Commerce', 'English', 'Commerce', NULL, '658.4012/CHA', 'Himalaya', 'Bombay', 1984, NULL, NULL, '449.00', NULL, 'Active', NULL, 2100, '0000-00-00', 'Ajab', 'Kolhapur', 125, NULL, NULL, NULL, '125.00', 'Library', 1),
(8, 'AN INTRODUCTION TO BUSINESS MANAGEMENT', 'Asthana S.C & Misra C.B.', 'Management', 'English', 'Management', NULL, '658/TST/MIS', 'Vikas', 'New Delhi', NULL, NULL, NULL, NULL, NULL, 'Active', NULL, 2099, '0000-00-00', 'Ajab', 'Kolhapur', 20, NULL, NULL, NULL, '20.00', 'Library', 1),
(9, 'INTERNATIONAL BUSINESS INTRODUCTIONAS AND ESSENTIAL S', 'Ball Donald & Mcclloch W.', 'Management', 'English', 'Management', NULL, '382/BAL/MCC', 'Texas, Business', NULL, 1982, NULL, NULL, '559.00', NULL, 'Active', NULL, 2098, '0000-00-00', 'Ajab', 'Kolhapur', 296, NULL, NULL, NULL, '296.00', 'Library', 1),
(10, 'MARKETING MANAGEMENT STRATEGICS AND PROGRAMMES', 'Guintinam G.P & Paul G.W.', 'Management', 'English', 'Management', NULL, '658.8/GUI/PAU', 'McGraw Hill', 'Tokyo', NULL, NULL, NULL, '340.00', NULL, 'Active', NULL, 2099, '0000-00-00', 'Ajab', 'Kolhapur', 89, NULL, NULL, NULL, '89.00', 'Library', 1),
(11, 'MARKETING MANAGEMENT', 'Latif T. A. A', 'Management', 'English', 'Management', NULL, '658.8/LAT', 'Deep & Deep', 'New Delhi', 1983, NULL, NULL, '340.00', NULL, 'Active', NULL, 2099, '0000-00-00', 'Ajab', 'Kolhapur', 150, NULL, NULL, NULL, '150.00', 'Library', 1),
(12, 'MARKETING PLANNING APPROACHES TO SELECTED COMPANIES', 'Miller E. C.', 'Management', 'English', 'Management', NULL, '658.8/MIL', 'Taraporala', 'Bombay', 1977, NULL, NULL, '101.00', NULL, 'Active', NULL, 2100, '0000-00-00', 'Ajab', 'Kolhapur', 49, NULL, NULL, NULL, '49.00', 'Library', 1),
(13, 'THE ECONOMICS OF WORK AND PAY', 'Rees Albert', 'Commerce', 'English', 'Commerce', NULL, '331/REE', 'Harper & Raw', 'New York', 1979, NULL, NULL, '228.00', NULL, 'Active', NULL, 2100, '0000-00-00', 'Ajab', 'Kolhapur', 121, 98, NULL, NULL, '121.98', 'Library', 1),
(14, 'MIXED COMPANY', 'Namjoshi M. V.', 'Commerce', 'English', 'Commerce', NULL, '330.126/NAM', 'Himalaya', 'Bombay', 1984, NULL, NULL, '249.00', NULL, 'Active', NULL, 2100, '0000-00-00', 'Ajab', 'Kolhapur', 100, NULL, NULL, NULL, '100.00', 'Library', 1),
(15, 'THE ECONOMICS OF LABOUR MANAGED ENTERPRISES', 'Ireland N. J. & Lawpeter J.', 'Commerce', 'English', 'Commerce', NULL, '331.89/IRE/LAW', 'Coomhelm', 'London', 1982, NULL, NULL, '218.00', NULL, 'Active', NULL, 2100, '0000-00-00', 'Ajab', 'Kolhapur', 227, 39, NULL, NULL, '227.39', 'Library', 1),
(16, 'INVESTMENT EMPLOYMENT AND ECONOMIC GROWTH', 'Sharma Devendra', 'Commerce', 'English', 'Commerce', NULL, '338.9/SHA', 'IBH, Oxford', 'New Delhi', 1983, NULL, NULL, '253.00', NULL, 'Active', NULL, 2099, '0000-00-00', 'Ajab', 'Kolhapur', 80, NULL, NULL, NULL, '80.00', 'Library', 1),
(17, 'PRICE CONTROLS IN THE INDIAN ECONOMY', 'Kulkarni, G. B.', 'Commerce', 'English', 'Commerce', NULL, '330.954/KUL', 'The Times of Research Foundation', 'Pune', 1984, NULL, NULL, '262.00', NULL, 'Active', NULL, 2100, '0000-00-00', 'Ajab', 'Kolhapur', 195, NULL, NULL, NULL, '195.00', 'Library', 1),
(18, 'INTERNATIONAL FINANCE TEXT & CASES', 'Feiger George & Jacqueillat, B.', 'Commerce', 'English', 'Commerce', NULL, '332.042/FEI/JAC', 'Allyn & Bacon', 'Boosten', NULL, NULL, NULL, '453.00', NULL, 'Active', NULL, 2100, '0000-00-00', 'Ajab', 'Kolhapur', 195, 95, NULL, NULL, '195.95', 'Library', 1),
(19, 'PUBLIC BUDGETING & FINANCE', 'WolemiewsR. T. / Robins Jack', 'Commerce', 'English', 'Commerce', NULL, '350.72/GOL/RAB', 'Mazcil Dekkr Inc.', 'New York', 1983, NULL, NULL, '403.00', NULL, 'Active', NULL, 2099, '0000-00-00', 'Ajab', 'Kolhapur', 351, 50, NULL, NULL, '351.50', 'Library', 1),
(20, 'INDUSTRIAL FINANCE', 'Khan M. Y.', 'Commerce', 'English', 'Commerce', NULL, '338/KHA', 'Tata Mcgraw Hill', 'New Delhi', 1982, NULL, NULL, '287.00', NULL, 'Active', NULL, 2100, '0000-00-00', 'Ajab', 'Kolhapur', 96, NULL, NULL, NULL, '96.00', 'Library', 1),
(21, 'LEASING FINANCING', 'Purchase rajay', 'Commerce', 'English', 'Commerce', NULL, '335.5/PAR', 'Time Research Foundation', NULL, 1983, NULL, NULL, '40.00', NULL, 'Active', NULL, 2100, '0000-00-00', 'Ajab', 'Kolhapur', 20, NULL, NULL, NULL, '20.00', 'Library', 1),
(22, 'DIMENSIONS OF PERSONNEL MANAGEMENT', 'Singh N. K.', 'Management', 'English', 'Management', NULL, '658.3/SIN', 'Vikas Publication', 'New Delhi', 1984, NULL, NULL, '224.00', NULL, 'Active', NULL, 2099, '0000-00-00', 'Ajab', 'Kolhapur', 50, NULL, NULL, NULL, '50.00', 'Library', 1),
(23, 'UNDERSTANDING PERSONNEL MANAGEMENT', 'Stone T.H.', 'Management', 'English', 'Management', NULL, '658.3/STO', 'Saundes college Publication', 'New York', 1982, NULL, NULL, '528.00', NULL, 'Active', NULL, 2098, '0000-00-00', 'Ajab', 'Kolhapur', 118, 40, NULL, NULL, '118.40', 'Library', 1),
(24, 'FINANCIAL MANAGEMENT', 'Johnson R.W. & Melicher R.W.', 'Management', 'English', 'Management', NULL, '658.15/JOH/MIC', 'Allyn & Bacon INC.', 'Boston', 1982, NULL, NULL, '731.00', NULL, 'Active', NULL, 2098, '0000-00-00', 'Ajab', 'Kolhapur', 228, 50, NULL, NULL, '228.50', 'Library', 1),
(25, 'ORGANISATION THEORY AND BEHAVIOUR', 'Prasad L.M.', 'Management', 'English', 'Management', NULL, '658.3153/PRA', 'Sultan Chands & Co.', 'New Delhi', 1984, NULL, NULL, '5.54', NULL, 'Active', NULL, 2098, '0000-00-00', 'Ajab', 'Kolhapur', 35, NULL, NULL, NULL, '35.00', 'Library', 1),
(26, 'INDUSTRIAL ORGANISATION', 'George K.D, / Golle', 'Management', 'English', 'Management', NULL, '338.6/GEO/JOL', 'George Allen & Unwin', 'London', 1983, NULL, NULL, '336.00', NULL, 'Active', NULL, NULL, '0000-00-00', 'Ajab', 'Kolhapur', 113, 29, NULL, NULL, '113.29', 'Library', 1),
(27, 'MANAGING AND DVELOPING NEW FORMS OF WORK OF ORGANISATION', 'Kanawati George', 'Management', 'English', 'Management', NULL, '658/KAN', 'Oxford & IBH,Publishing co.', 'New Delhi', 1981, NULL, NULL, '206.00', NULL, 'Active', NULL, 2098, '0000-00-00', 'Ajab', 'Kolhapur', 60, NULL, NULL, NULL, '60.00', 'Library', 1),
(28, 'MANAGING BEHAVIOUR IN ORGANISATIONS', 'Schiesinger L.A.', 'Management', 'English', 'Management', NULL, '658.31244/SCH', 'Mcgraw Hill publication Ltd.', 'london', NULL, NULL, NULL, NULL, NULL, 'Active', NULL, 2098, '0000-00-00', NULL, NULL, 237, 40, NULL, NULL, '237.40', 'Library', 1),
(29, 'OPERATIONS MANAGEMENT', 'Delvitsiotis Kostas T.', 'Management', 'English', 'Management', NULL, '658.5/DER', 'Mcgraw-Hill Intrnational Book co.', 'Auckland', 1981, NULL, NULL, '771.00', NULL, 'Active', NULL, 2100, '0000-00-00', 'Ajab', 'Kolhapur', 113, 50, NULL, NULL, '113.50', 'Library', 1),
(30, 'MANAGEMENT', 'Flippo E.B & Munusinger Gray M.', 'Management', 'English', 'Management', NULL, '658 FLI/MUN', 'Ailyn & Bacon INC', 'Boston', 1975, NULL, NULL, '604.00', NULL, 'Active', NULL, 2099, '0000-00-00', 'Ajab', 'Kolhapur', 154, NULL, NULL, NULL, '154.00', 'Library', 1),
(31, 'MANAGEMENT FOZ ACTION', 'Mozis William T.', 'Management', 'English', 'Management', NULL, '658/MOR', 'D. B. Taraporwala Sons & Co. Ltd.', 'Bombay', 1979, NULL, NULL, '223.00', NULL, 'Active', NULL, 2099, '0000-00-00', 'Ajab', 'Kolhapur', 39, NULL, NULL, NULL, '39.00', 'Library', 1),
(32, 'AN INTRODUCTION TO MANAGEMENT: ITS PRINCIPLES & TECHNIQUES', 'Chaterzee Satya Sazon', 'Management', 'English', 'Management', NULL, '658/CHA', 'The World Press Pvt. Ltd.', 'Culcutta', 1982, NULL, NULL, '428.00', NULL, 'Active', NULL, 2099, '0000-00-00', 'Ajab', 'Kolhapur', 32, NULL, NULL, NULL, '32.00', 'Library', 1),
(33, 'THE POWER OF PROFESSIONAL MANAGEMENT', 'Dively & George', 'Management', 'English', 'Management', NULL, '658.3/DIV', 'Taraporawala Publishing Industry', 'Bombay', 1981, NULL, NULL, '175.00', NULL, 'Active', NULL, 2098, '0000-00-00', 'Ajab', 'Kolhapur', 65, NULL, NULL, NULL, '65.00', 'Library', 1),
(34, 'CHANGING PATTERNS OF CORPORATE MANAGEMENT', 'Sengupta N. K.', 'Management', 'English', 'Management', NULL, '658/4012/SEN', 'Vikas Publishing House', 'New Delhi', 1983, NULL, NULL, '311.00', NULL, 'Active', NULL, 2099, '0000-00-00', 'Ajab', 'Kolhapur', 45, NULL, NULL, NULL, '45.00', 'Library', 1),
(35, 'GREAT IDEAS IN MANAGEMENT', 'Nozthcote C.', 'Management', 'English', 'Management', NULL, '658/NOR', 'Indian Book House Pvt. Ltd.', 'New Delhi', NULL, NULL, NULL, NULL, NULL, 'Active', NULL, 2098, '0000-00-00', 'Ajab', 'Kolhapur', 30, NULL, NULL, NULL, '30.00', 'Library', 1),
(36, 'INTEGRATED SPACES MANAGEMENT', 'GopalKrishna P.', 'Management', 'English', 'Management', NULL, '658.785/EOP', 'S. Chand & Co.', 'New Delhi', 1984, NULL, NULL, '244.00', NULL, 'Active', NULL, 2099, '0000-00-00', 'Ajab', 'Kolhapur', 35, NULL, NULL, NULL, '35.00', 'Library', 1),
(37, 'UNDERSTANDING DATA BASE MANAGEMENT', 'Naveen Prakash', 'Management', 'English', 'Management', NULL, '658.05/NAV', 'Tata Mcgraw Hill Publishing Co. Ltd.', 'New Delhi', 1984, NULL, NULL, '214.00', NULL, 'Active', NULL, 2100, '0000-00-00', NULL, NULL, 57, NULL, NULL, NULL, '57.00', 'Library', 1),
(38, 'DATA BASE ADMINISTRATION', 'Weldon Jay-Louise', 'IT', 'English', 'IT', NULL, '658.05/WEL', 'A Division of Plenum, Publishing Corporation', 'New York', 1983, NULL, NULL, '250.00', NULL, 'Active', NULL, 2100, '0000-00-00', 'Ajab', 'Kolhapur', 351, 50, NULL, NULL, '351.50', 'Library', 1),
(39, 'WAGES PROFITS, PRODUCTIVITY IN SELECTED INDUSTRIES IN INDIA', 'Srivstav S. C.', 'Commerce', 'English', 'Commerce', NULL, '338/SKI', 'Himalaya Publishing House', 'Bombay', 1984, NULL, NULL, '254.00', NULL, 'Active', NULL, 2100, '0000-00-00', 'Ajab', 'Kolhapur', 125, NULL, NULL, NULL, '125.00', 'Library', 1),
(40, 'BUDGETORY CONTROL AND STANDARD COSTS', 'Scott J. A.', 'Commerce', 'English', 'Commerce', NULL, '657.42/SCO', 'Arnoid Hein Eman Publishens', 'New Delhi', 1983, NULL, NULL, '224.00', NULL, 'Active', NULL, 2099, '0000-00-00', 'Ajab', 'Kolhapur', 25, NULL, NULL, NULL, '25.00', 'Library', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `reqbook`
--
ALTER TABLE `reqbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sheet1`
--
ALTER TABLE `sheet1`
  ADD PRIMARY KEY (`Accno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `reqbook`
--
ALTER TABLE `reqbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sheet1`
--
ALTER TABLE `sheet1`
  MODIFY `Accno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
