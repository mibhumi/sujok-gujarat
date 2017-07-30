-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 01, 2017 at 11:29 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sujok`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertUser`(IN `Package_Id` INT(6), IN `Package_Name` VARCHAR(30), IN `Description` VARCHAR(100), IN `Charge` INT(10), IN `Seating` INT(5), IN `Remark` VARCHAR(100))
BEGIN
			INSERT INTO package(Package_Id,Package_Name,Description,Charge,Seating,Remark) VALUES('','','','','','');
			END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `selectuser`()
BEGIN
		SELECT * FROM package;
		END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `centre`
--

CREATE TABLE IF NOT EXISTS `centre` (
  `Centre_Id` int(6) NOT NULL AUTO_INCREMENT,
  `Centre_Name` varchar(10) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(20) NOT NULL,
  `State` varchar(20) NOT NULL,
  `Pincode` int(6) NOT NULL,
  `Contact` varchar(13) NOT NULL,
  `Centre_Code` varchar(6) NOT NULL,
  `Remark` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Centre_Id`),
  UNIQUE KEY `Centre_Code_2` (`Centre_Code`),
  KEY `Centre_Code` (`Centre_Code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `centre`
--

INSERT INTO `centre` (`Centre_Id`, `Centre_Name`, `Address`, `City`, `State`, `Pincode`, `Contact`, `Centre_Code`, `Remark`) VALUES
(1, 'bhatar', 'd-909', 'surat', 'Gujarat       ', 395009, '8460001125', 'bh', 'qwertyuiop'),
(2, 'adajan', 'a999', 'surat', 'Gujarat       ', 395003, '8460001125', 'ag', 'hi'),
(4, 'city', '987', 'surat', 'gujarat', 98745521, '99797979797', '79797', ''),
(5, 'bharauch', 'bharuch city', 'surat', 'gujarat', 395112, '987456666', '', 'temp');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE IF NOT EXISTS `complaint` (
  `Complaint_Id` int(6) NOT NULL AUTO_INCREMENT,
  `Patient_Id` int(6) NOT NULL,
  `Complaint_Date` varchar(20) NOT NULL,
  `Major_Complaint` varchar(100) NOT NULL,
  `Other_Complaint` varchar(100) DEFAULT NULL,
  `Centre_Id` int(6) NOT NULL,
  `Remark` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Complaint_Id`),
  KEY `Patient_Id` (`Patient_Id`),
  KEY `Centre_Id` (`Centre_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`Complaint_Id`, `Patient_Id`, `Complaint_Date`, `Major_Complaint`, `Other_Complaint`, `Centre_Id`, `Remark`) VALUES
(4, 2, '2017-05-19', 'backpain', 'lklknnn', 2, ''),
(5, 2, '2017-05-27', 'backpain', 'haedache', 1, 'nnnnn'),
(6, 7, 'June 1 2017', 'headche', 'bbbb', 1, 'hii'),
(7, 1, '2017-05-25', 'xyz', 'xyz', 1, ''),
(8, 1, '2017-05-25', 'abc', 'abc', 1, ''),
(9, 1, '2017-05-25', 'asd', 'asd', 1, ''),
(10, 30, '2017-05-09', 'nbnbnbn', 'bnbnb', 1, ''),
(11, 7, '5/27/2017', 'headche', 'bp', 1, ''),
(12, 7, '5/27/2017', 'backpain', 'backpain', 1, ''),
(13, 7, '5/27/2017', 'backpain', 'headache', 1, ''),
(14, 7, '5/27/2017', 'headache', 'headache', 1, ''),
(17, 47, '1 June 2017', 'asdfghjkl', 'poiuytrewq', 2, '321456987');

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE IF NOT EXISTS `document` (
  `Document_Id` int(6) NOT NULL AUTO_INCREMENT,
  `Patient_Id` int(6) NOT NULL,
  `Treatment_Id` int(6) NOT NULL,
  `Date_Of_Upload` date NOT NULL,
  `File` varchar(100) NOT NULL,
  `Centre_Id` int(6) NOT NULL,
  `Remark` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Document_Id`),
  KEY `Treatment_Id` (`Treatment_Id`),
  KEY `Patient_Id` (`Patient_Id`),
  KEY `Centre_Id` (`Centre_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE IF NOT EXISTS `enquiry` (
  `Person_Id` int(6) NOT NULL AUTO_INCREMENT,
  `Centre_Code` varchar(6) NOT NULL,
  `Person_Name` varchar(50) NOT NULL,
  `Enquiry_Date` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(20) NOT NULL,
  `State` varchar(20) NOT NULL,
  `Pincode` int(6) NOT NULL,
  `Mobile` varchar(10) NOT NULL,
  `Phone` varchar(10) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Gender` int(1) NOT NULL,
  `DOB` varchar(20) NOT NULL,
  `Occupation` varchar(50) DEFAULT NULL,
  `Remark` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Person_Id`),
  KEY `Centre_Code` (`Centre_Code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`Person_Id`, `Centre_Code`, `Person_Name`, `Enquiry_Date`, `Address`, `City`, `State`, `Pincode`, `Mobile`, `Phone`, `Email`, `Gender`, `DOB`, `Occupation`, `Remark`) VALUES
(1, 'bh', 'bhumi', '2017-05-05', 'h-090', 'Surat', 'gujarat', 369852, '7896541302', '7896541230', 'bhumi7@hotmail.com', 1, '2017-05-25', 'business', ''),
(2, 'bh', 'chinmay', '2017-05-18', '676', 'Surat', 'gujarat', 741258, '7896541230', '33232323', 'chinu7@gmail.com', 0, '2017-05-13', 'student', ''),
(3, 'ag', 'akshay', '2017-05-05', 'nmnnm', 'Surat', 'gujarat', 741258, '9899898989', '8989989', 'akshay@gmail.com', 0, '2017-05-16', 'student', ''),
(4, 'bh', 'hema', '2017-05-04', 'k-090', 'Surat', 'gujarat', 656566, '5656566565', '7410258963', 'hema4@gmail.com', 1, '2017-05-02', 'housewife', ''),
(5, 'ag', 'bhumi1', '05/26/2017', 'k-00', 'Surat', 'gujarat', 741258, '9874563210', '789654', 'njim@gmail.com', 1, '', ',m,m', ''),
(6, 'ag', 'honey1', '5/26/2017', 'nmnnm', 'Surat', 'gujarat', 989899, '8989899898', '98988989', 'bbnb@gmail.com', 1, '', 'student', 'ffffmkljdlsj'),
(7, 'ag', 'honey45', '5/27/2017', 'hijiji', 'Surat', 'gujarat', 789654, '7896541232', '789654', 'bhumipatel66@gmail.com', 1, '05/29/2017', 'student', ''),
(8, 'ag', 'dishant', '5/27/2017', 'a-908', 'Surat', 'gujarat', 789654, '7896541230', '7412589', 'dishant@gmail.com', 0, '05/22/2017', 'student', ''),
(9, 'ag', 'heli', '23 May 2017', 'h-999', 'Surat', 'gujarat', 789654, '7412589630', '7896541', 'heli77@gmail.com', 1, '29 May 2017', 'student', ''),
(10, 'ag', 'akshay', '25 May 2017', 'h-909', 'Surat', 'gujarat', 987456, '7896541230', '78965412', 'chinu@gmail.com', 0, '23 May 2017', 'jhjhhjhj', '');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE IF NOT EXISTS `inventory` (
  `Stock_Id` int(6) NOT NULL AUTO_INCREMENT,
  `Product_Id` int(6) NOT NULL,
  `Centre_Id` int(6) NOT NULL,
  `Total_Stock` int(10) NOT NULL,
  `Stock_As_Dated` date NOT NULL,
  `Remark` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Stock_Id`),
  KEY `Product_Id` (`Product_Id`),
  KEY `Centre_Id` (`Centre_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE IF NOT EXISTS `package` (
  `Package_Id` int(6) NOT NULL AUTO_INCREMENT,
  `Package_Name` varchar(30) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Charge` int(10) NOT NULL,
  `Seating` int(5) NOT NULL,
  `Remark` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Package_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`Package_Id`, `Package_Name`, `Description`, `Charge`, `Seating`, `Remark`) VALUES
(13, 'chinmay', '88 seating are allowed', 1600, 880, 'kjkjk'),
(15, 'pack890', 'jkjkjkjkj', 989, 898, '98989'),
(19, 'pop', 'pop', 988, 99, 'kkjkj'),
(20, 'Pack899', 'popo', 899, 85, 'kjkjk'),
(21, 'pac567', 'ppo', 989, 89, 'kjkjj'),
(25, 'pack88', '88 seating', 98, 989, '8999');

-- --------------------------------------------------------

--
-- Table structure for table `package_account`
--

CREATE TABLE IF NOT EXISTS `package_account` (
  `Package_Account_Id` int(10) NOT NULL AUTO_INCREMENT,
  `Patient_Id` int(10) NOT NULL,
  `Package_Id` int(10) NOT NULL,
  `seating` varchar(10) NOT NULL,
  `Charge` int(10) NOT NULL,
  `Remark` varchar(30) NOT NULL,
  PRIMARY KEY (`Package_Account_Id`),
  KEY `Patient_Id` (`Patient_Id`,`Package_Id`),
  KEY `Package_Id` (`Package_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `package_account`
--

INSERT INTO `package_account` (`Package_Account_Id`, `Patient_Id`, `Package_Id`, `seating`, `Charge`, `Remark`) VALUES
(5, 7, 13, '880', 1600, ''),
(6, 7, 21, '89', 989, ''),
(7, 7, 15, '898', 989, ''),
(8, 8, 13, '880', 1600, ''),
(9, 15, 20, '85', 899, ''),
(10, 14, 15, '898', 989, ''),
(11, 17, 19, '99', 988, ''),
(12, 47, 13, '880', 1600, ''),
(13, 1, 13, '880', 1600, '');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `Patient_Id` int(6) NOT NULL AUTO_INCREMENT,
  `Centre_Code` varchar(6) NOT NULL,
  `Patient_Name` varchar(50) NOT NULL,
  `Patient_Photo` varchar(100) DEFAULT NULL,
  `Registration_Date` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(20) NOT NULL,
  `State` varchar(20) NOT NULL,
  `Pincode` int(6) NOT NULL,
  `Mobile` varchar(10) NOT NULL,
  `Phone` varchar(10) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Gender` int(1) NOT NULL,
  `DOB` varchar(20) NOT NULL,
  `Occupation` varchar(20) DEFAULT NULL,
  `Remark` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Patient_Id`),
  KEY `Centre_Code` (`Centre_Code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`Patient_Id`, `Centre_Code`, `Patient_Name`, `Patient_Photo`, `Registration_Date`, `Address`, `City`, `State`, `Pincode`, `Mobile`, `Phone`, `Email`, `Gender`, `DOB`, `Occupation`, `Remark`) VALUES
(1, 'ag', 'bhumi', '', '02/27/1905', '', 'surat', 'gujarat', 789632, '7896325410', '7853692', 'bhumipatel1196@gmail.com', 1, '', 'tech', ''),
(2, 'ag', 'honey', '', '2017-05-05', '', 'ahm', 'gujarat', 789632, '7896325410', '7853692', 'bhumipatel1196@gmail.com', 1, '2017-02-07', 'tech', ''),
(4, 'ag', 'chinmayv', 'Screenshot (26).png', '11/02/2017', 'ffff', 'bhuj', 'gujarat', 789632, '7896325410', '7853692', 'bhumipatel1196@gmail.com', 1, '', 'tech', ''),
(5, 'ag', 'bhumi', '', '2017-05-05', '', '', 'gujarat', 789632, '7896325410', '7853692', 'bhumipatel1196@gmail.com', 0, '2017-02-07', 'tech', ''),
(6, 'ag', 'bhumi', '', '02/28/1905', '', '', 'gujarat', 789632, '7896325410', '7853692', 'bhumipatel1196@gmail.com', 1, '', 'tech', ''),
(7, 'bh', 'bhumi', NULL, '2017-05-05', 'h-090', 'Surat', 'gujarat', 369852, '7896541302', '7896541230', 'bhumi7@hotmail.com', 0, '2017-05-25', 'business', ''),
(8, 'bh', 'chinmay', NULL, '2017-05-18', '676', 'Surat', 'gujarat', 741258, '7896541230', '33232323', 'chinu7@gmail.com', 0, '2017-05-13', 'student', ''),
(9, 'ag', 'akshay', NULL, '2017-05-05', 'nmnnm', 'Surat', 'gujarat', 741258, '9899898989', '8989989', 'akshay@gmail.com', 0, '2017-05-16', 'student', ''),
(10, 'ag', 'shruti', 'Screenshot (9).png', '2017-05-05', 'nmnnm', 'Surat', 'gujarat', 741258, '9899898989', '8989989', 'akshay@gmail.com', 0, '2017-05-16', 'student', ''),
(11, 'ag', 'akshay', '', '2017-05-05', 'nmnnm', 'Surat', 'gujarat', 741258, '9899898989', '8989989', 'akshay@gmail.com', 0, '2017-05-16', 'student', ''),
(12, 'ag', 'akshay', '', '2017-05-05', 'nmnnm', 'Surat', 'gujarat', 741258, '9899898989', '8989989', 'akshay@gmail.com', 0, '2017-05-16', 'student', ''),
(13, 'bh', 'chinmay', '', '2017-05-18', '676', 'Surat', 'gujarat', 741258, '7896541230', '33232323', 'chinu7@gmail.com', 0, '2017-05-13', 'student', ''),
(14, 'bh', 'chinmay', '', '2017-05-18', '676', 'Surat', 'gujarat', 741258, '7896541230', '33232323', 'chinu7@gmail.com', 0, '2017-05-13', 'student', ''),
(15, 'bh', 'hema', '', '2017-05-04', 'k-090', 'Surat', 'gujarat', 656566, '5656566565', '7410258963', 'hema4@gmail.com', 1, '2017-05-02', 'housewife', ''),
(16, 'bh', 'hema', '', '2017-05-04', 'k-090', 'Surat', 'gujarat', 656566, '5656566565', '7410258963', 'hema4@gmail.com', 1, '2017-05-02', 'housewife', ''),
(17, 'bh', 'bhumi', '', '2017-05-05', 'h-090', 'Surat', 'gujarat', 369852, '7896541302', '7896541230', 'bhumi7@hotmail.com', 1, '2017-05-25', 'business', ''),
(18, 'ag', 'h1', 'Screenshot (23).png', '2017-05-20', 'h-887', 'Surat', 'gujarat', 989898, '9898989898', '898989', 'h1@gmail.com', 1, '2017-05-05', 'student', ''),
(19, 'ag', 'h2', 'Screenshot (26).png', '2017-05-12', 'j-099', 'surat', 'gujarat', 898989, '8989898898', '89989898', 'bhumi@gmail.com', 1, '2017-05-18', 'mmnnm', ''),
(20, 'ag', 'h3', 'Screenshot (21).png', '2017-05-03', 'nmnm', 'surat', 'gujarat', 323233, '8989899988', '989899', 'jhjhh@gnami.com', 1, '2017-05-17', 'student', ''),
(21, 'ag', 'h4', '', '2017-05-06', 'k-09', 'surat', 'gujarat', 989898, '9898989999', '989899898', 'h3@gmail.com', 0, '2017-05-06', 'student', ''),
(22, 'ag', 'h5', 'Screenshot (26).png', '2017-05-05', 'j-098', 'surat', 'gujarat', 741258, '7412589630', '9898989', 'bhu@jhjh.com', 0, '2017-05-24', 'student', ''),
(23, 'ag', 'bhumika', 'Screenshot (26).png', '2017-05-06', 'kl-000', 'surat', 'gujarat', 789654, '9745821111', '963258741', 'bhumipatel@gmauil.cpom', 1, '2017-05-13', 'kAM', ''),
(24, 'ag', 'chinnu', 'Screenshot (21).png', '2017-05-03', 'h-09', 'surat', 'gujarat', 741258, '7896541230', '7896541', 'nji@gmail.com', 1, '2017-05-19', 'student', ''),
(25, 'ag', 'bhumi', 'Screenshot (24).png', '2017-05-05', 'mnmm', 'surat', 'gujarat', 741252, '7896541230', '7412589', 'bhumipatel@gmauil.cpom', 1, '2017-05-03', ',,,mm,m,', ''),
(26, 'ag', 'kairavi', 'Screenshot (19).png', '2017-05-04', 'mnmnmn', 'surat', 'gujarat', 741258, '7410258963', '741258', 'nmnmnm@hmio.com', 0, '2017-05-05', 'mnmnm', ''),
(27, 'ag', 'honey', '', '2017-05-05', 'jk-099', 'Surat', 'gujarat', 123025, '7412589630', '7896541', 'bhumi88@gmail.com', 0, '2017-05-05', 'housewife', ''),
(28, 'ag', 'akshay', 'Screenshot (4).png', '2017-05-05', 'nbnbnbn', 'Surat', 'gujarat', 789654, '7896541230', '1234567', 'akshay4@gmail.com', 0, '2017-05-05', 'student', 'mbmbm'),
(29, 'ag', 'ompatel1', 'Screenshot (38).png', '5/26/2017', 'jk-9', 'Surat', 'gujarat', 741258, '7896541230', '7896541', 'omdpatel@yahoo.com', 0, '06/03/2017', 'student', 'mbmbmb'),
(30, 'ag', 'Honey Modi', '110425207_1479dd51-0079-48d8-8c90-dc33af0a9956.png', '05/16/2017', 'lklklklkl', 'Surat', 'gujarat', 909090, '9898989898', '8877776', 'm@m.com', 1, '05/03/2017', 'djfkjfkdj', 'dkfjkdjfkjk'),
(31, 'ag', 'akshaypatel', '', '2017-05-05', 'nmnnm', 'Surat', 'gujarat', 741258, '9899898989', '8989989', 'akshay@gmail.com', 0, '2017-05-16', 'student', ''),
(32, 'ag', 'akshay', '', '02/16/2017', 'nmnnm', 'Surat', 'gujarat', 741258, '9899898989', '8989989', 'akshay@gmail.com', 0, '', 'student', ''),
(33, 'ag', 'bhumi1', '', '05/31/2017', 'k-00', 'Surat', 'gujarat', 741258, '9874563210', '789654', 'njim@gmail.com', 1, '', ',m,m', ''),
(34, 'ag', 'om', 'logo.png', '5/27/2017', 'g-90', 'Surat', 'gujarat', 255555, '5555555555', '555555', 'omhh@gmail.com', 0, '', 'student', ''),
(35, 'ag', 'akshay', 'logo.png', '2017-05-05', 'nmnnm', 'Surat', 'gujarat', 741258, '9899898989', '8989989', 'akshay@gmail.com', 0, '05/26/2017', 'student', ''),
(36, 'ag', 'akshayshah', 'logo.png', '2017-05-05', 'nmnnm', 'Surat', 'gujarat', 741258, '9899898989', '8989989', 'akshay@gmail.com', 0, '05/19/2017', 'student', ''),
(37, 'ag', 'honeymehta', '110425207_1479dd51-0079-48d8-8c90-dc33af0a9956.png', '5/27/2017', 'hijiji', 'Surat', 'gujarat', 789654, '7896541232', '789654', 'bhumipatel66@gmail.com', 1, '05/23/2017', 'student', ''),
(38, 'ag', 'dishant', '110425207_1479dd51-0079-48d8-8c90-dc33af0a9956.png', '5/27/2017', 'a-908', 'Surat', 'gujarat', 789654, '7896541230', '7412589', 'dishant@gmail.com', 0, '05/17/2017', 'student', ''),
(39, 'ag', 'jyotee', 'logo.png', '05/27/2017', 'g-99', 'Surat', 'gujarat', 789654, '7896541230', '7412589', 'jyoti6@gmail.com', 1, '05/25/2017', 'housewife', ''),
(40, 'ag', 'disha', '', '5/27/2017', 'a-908', 'Surat', 'gujarat', 789654, '7896541230', '7412589', 'dishant@gmail.com', 0, '05/22/2017', 'student', ''),
(41, 'ag', 'ria', '1.png', '5/27/2017', 'a-908', 'Surat', 'gujarat', 789654, '7896541230', '7412589', 'dishant@gmail.com', 0, '05/22/2017', 'student', ''),
(42, 'ag', 'heli', '1.png', '25 May 2017', 'h-999', 'Surat', 'gujarat', 789654, '7412589630', '7896541', 'heli77@gmail.com', 1, '23 May 2017', 'student', ''),
(43, 'ag', 'akshay', 'Screenshot (2).png', '25 May 2017', 'h-909', 'ahm', 'gujarat', 987456, '7896541230', '78965412', 'chinu@gmail.com', 0, '23 May 2017', 'jhjhhjhj', ''),
(44, 'ag', 'honey45', 'Suicide.Squad.2016.EXTENDED.1080p.BluRay.DTS.x264-ETRG.Screenshot (2).png', '5/27/2017', 'hijiji', 'Surat', 'gujarat', 789654, '7896541232', '789654', 'bhumipatel66@gmail.com', 1, '05/29/2017', 'student', ''),
(45, 'bh', 'bhumi1', '', '05/26/2017', 'k-00', 'Surat', 'gujarat', 741258, '9874563210', '789654', 'njim@gmail.com', 1, '', ',m,m', ''),
(46, 'ag', 'chinmay', 'img_nature_wide.jpg', '1 June 2017', 'q2er', 'Surat', 'gujarat', 999999, '8460001125', '888888', 'poiu@gmai.com', 0, '29 May 2017', 'stud', ''),
(47, 'ag', 'BHUMI PATEL', 'index.jpg', '1 June 2017', 'qwertyuiop', 'Surat', 'gujarat', 395003, '8460001125', '8460000', 'bhumi@email.com', 1, '28 May 2017', 'stud', '');

-- --------------------------------------------------------

--
-- Table structure for table `patient_account`
--

CREATE TABLE IF NOT EXISTS `patient_account` (
  `Account_Id` int(6) NOT NULL AUTO_INCREMENT,
  `Patient_Id` int(6) NOT NULL,
  `Centre_Id` int(6) NOT NULL,
  `Payment_Date` date NOT NULL,
  `Package_Id` int(6) NOT NULL,
  `Paid_Amount` int(10) NOT NULL,
  `Payment_Type` int(1) NOT NULL,
  `Cheque_Number` int(6) DEFAULT NULL,
  `Bank_Name` varchar(50) DEFAULT NULL,
  `Remark` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Account_Id`),
  KEY `Patient_Id` (`Patient_Id`),
  KEY `Centre_Id` (`Centre_Id`),
  KEY `Package_Id` (`Package_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `Product_Id` int(6) NOT NULL AUTO_INCREMENT,
  `Product_Name` varchar(30) NOT NULL,
  `Product_Price` int(6) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Product_Image` varchar(1000) DEFAULT NULL,
  `Remark` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Product_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=133 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_Id`, `Product_Name`, `Product_Price`, `Description`, `Product_Image`, `Remark`) VALUES
(1, 'bhumi123', 100, 'nhjnjnk', 'njhnjh', '16565564'),
(2, 'pen', 522, 'v xvxv', 'km', NULL),
(3, 'p1', 989, '988989', '', 'ddddd'),
(4, 'p1', 788, 'kjkjk', '', 'nnxnxn'),
(5, 'p2', 200, '', '', ''),
(6, 'p2', 200, '', '', 'xyz'),
(7, 'p2', 200, 'nmmnmmn', '', 'xyz'),
(8, 'p2', 200, 'nmmnmmn', '', 'xyz'),
(9, 'p2', 200, 'nmmnmmn', '', 'xyz'),
(10, 'p2', 200, 'nmmnmmn', '', 'xyz'),
(11, 'p2', 200, 'nmmnmmn', '1.png', 'xyz'),
(12, 'p3', 98, 'mnmnm', 'C:fakepathlogo.png', 'nbnbnb'),
(15, 'dishantmeta', 1, 'asdf', 'upload/', 'asdf'),
(16, 'asdf', 234, 'asdf', 'upload/', 'sdf'),
(17, 'asdf', 5, 'sdfsdf', 'upload/', 'sdfsdf'),
(18, 'AAA', 444, 'JAKJHKHKJHJKH', 'upload/', 'kjhjkhhkhkh'),
(19, 'honey', 88, 'nnnn', 'upload/', 'uuuu'),
(20, 'chinnu', 999, 'mmmm', 'upload/''', 'kkkk'),
(21, 'bhumi', 999, 'mmmmm', '', 'sss'),
(22, 'ppp', 888, 'nnnn', '', 'nnnn'),
(23, 'pop', 888, 'kkkkk', '', 'kkkkkk'),
(24, 'h1', 777, 'nnnn', 'C:fakepathDSC00015.JPG', 'nnn'),
(25, 'mmmm', 777, 'mmmm', '', ''),
(26, 'kkk', 888, ' nnnn', 'C:fakepathDSC00013.JPG', 'yyyy'),
(27, 'gggg', 588, 'mmmm', 'C:fakepathDSC00008.JPG', 'lokkk'),
(28, 'kkk', 55, 'ddd', 'C:fakepathDSC00008.JPG', 'hhh'),
(29, 'hhh', 66, 'sss', 'C:fakepathDSC00010.JPG', 'sss'),
(30, 'hhh', 444, 'jjjj', 'C:fakepathDSC00008.JPG', 'jjj'),
(31, 'hello', 99, 'dddd', 'C:fakepathDSC00009.JPG', 'jjj'),
(32, 'jjj', 88, 'jjjjj', 'C:fakepathDSC00008.JPG', 'jjjjj'),
(33, 'hhh', 888, 'ssss', 'C:fakepathDSC00055.JPG', 'sss'),
(34, 'jjj', 777, 'ssss', 'C:fakepathDSC00008.JPG', 'lklklkl'),
(35, 'modi', 88, 'hello', 'C:\\110425207_1479dd51-0079-48d8-8c90-dc33af0a9956.png', 'jjjjj'),
(36, 'hello', 88, 'ddd', 'C:fakepathlogo.png', 'llll'),
(37, 'nnn', 888, 'ssss', 'C:fakepath1.png', 'mmm'),
(38, 'aaaa', 88, 'jjjj', 'C:\\110425207_1479dd51-0079-48d8-8c90-dc33af0a9956.png', 'hhhh'),
(39, 'hhh', 55, 'hhh', 'C:\\110425207_1479dd51-0079-48d8-8c90-dc33af0a9956.png', 'mmmm'),
(40, 'jj', 5, 'jjjjj', 'C:\\logo.png', 'jjj'),
(41, 'hhh', 88, 'jjjj', 'C:\\110425207_1479dd51-0079-48d8-8c90-dc33af0a9956.png', 'sss'),
(42, 'jjj', 88, 'ssss', 'C:\\logo.png', 'kkk'),
(44, 'hhh', 788, 'hhhh', 'logo.png', 'jjjj'),
(45, 'sss', 777, 'hhhh', '110425207_1479dd51-0079-48d8-8c90-dc33af0a9956.png', 'jjj'),
(46, 'hello', 88, 'dddddd', 'logo.png', 'llllll'),
(47, 'hhhh', 888, 'jjjjj', '1.png', 'bbbbb'),
(48, 'qwer', 12345, 'uytrdfgh', 'DSC00001.JPG', 'oiu'),
(49, 'kkk', 555, 'drgdtgre', 'DSC00007.JPG', 'nmnmnm'),
(50, 'xyz', 88, 'mmmm', '[wallcoo_com]_cosmos_wallpaper_EA54078.jpg', 'mmmm'),
(51, 'hello', 66, 'xyz', 'aby-cool-lovely-little-baby-boy-wallpaper-background-2v58ioayqkgf50w2q97a4g.jpg', 'ssss'),
(52, 'huj', 55, 'hhjhjhj', '158151_download-Desktop-PC-Laptop-Chickens-Baby-HD-Wallpapers_1600x1000 (1).jpg', 'hghgh\n'),
(53, 'kjkjk', 566, 'mnmnm', '158151_download-Desktop-PC-Laptop-Chickens-Baby-HD-Wallpapers_1600x1000 (1).jpg', 'mmmm'),
(54, 'plp', 99, 'fffffffffff', '158151_download-Desktop-PC-Laptop-Chickens-Baby-HD-Wallpapers_1600x1000 (1).jpg', ''),
(55, 'mmmm', 6666, 'mmmm', '', 'mmmm'),
(56, 'm1', 999, 'dddd', '1494985.jpg', 'aaa'),
(57, 'p1', 99, 'ssss', 'p128a1eeh.jpg', ',,,,'),
(58, 'p2', 966, 'nnnn', 'p2winnie_the_pooh-wide.jpg', 'nnnn'),
(59, 'p2', 989, 'ssss', 'p22012-laptop-wallpapers-free-download (1).jpg', 'dddd'),
(60, 'kik', 65, 'nmnmnm', 'kik1366x768-Widescreen-Wallpaper.jpg', 'jyuyuyu'),
(61, 'lol', 989, 'mnnmm', 'lol28a1eeh.jpg', 'nmnmn'),
(62, 'ddd', 5454, 'sss', 'ddd28a1eeh.jpg', 'mnmnm'),
(63, 'aaaa', 66, 'sss', 'aaaa1494985.jpg', 'mnmnm'),
(64, 'oops', 99989, 'ddddd', 'oops110425207_1479dd51-0079-48d8-8c90-dc33af0a9956.png', 'dddd'),
(65, 'nnnnn', 1111, 'ssssss', 'nnnnnUsersadminPicturessujok1.png', 'kkkk'),
(66, 'oops', 888, 'ssss', 'oops1366x768-Widescreen-Wallpaper.jpg', 'sss'),
(67, 'oops', 656, 'lklklkl', 'oopswinnie_the_pooh-wide.jpg', 'lklkllk'),
(68, 'hello', 8899, 'aaaa', 'winnie_the_pooh-wide.jpg', 'kkk'),
(69, 'pole', 789, 'dddd', 'pole1366x768-Widescreen-Wallpaper.jpg', 'jjj'),
(70, 'kik', 253, 'fff', 'kikwinnie_the_pooh-wide.jpg', 'werr'),
(71, 'kole', 963, 'gggg', 'koleCool-Wallpapers-9.jpg', 'kjkkj'),
(72, 'kole1', 888, 'ffff', 'kole1Spaniel_laptop_wallpapers.jpg', 'nnn'),
(73, 'ddd', 556, 'cccc', 'dddfire-ball-HD.jpg', ''),
(74, 'kolw2', 989, 'vvvv', 'kolw2flower_path-HD.jpg', ''),
(75, 'fff', 555, 'dddd', 'fffforbidden_city_beijing-wide.jpg', ''),
(76, 'ddd', 555, 'dddd', 'dddcute-desktop-backgrounds-hd.jpg', 'kjkjjk'),
(77, 'kkik', 555, 'xxxx', 'kkikforbidden_city_beijing-wide.jpg', 'xxx'),
(78, 'jjj', 88, 'sss', 'jjjAutumn-Flower-Pink-Natural-1120x600.jpg', 'sss'),
(79, 'kkk', 555, 'sss', 'kkk1366x768-Widescreen-Wallpaper.jpg', 'jjj'),
(80, 'ddd', 656, 'ddddd', 'dddAnimal-tiger-bing-background.jpg', 'kjkkj'),
(81, 'kkkk', 9899, 'mmmmmm', 'kkkk28a1eeh.jpg', 'kklklkl'),
(82, 'kik', 545, 'ddddd', 'kikCool-Wallpapers-9.jpg', 'njnkjnkjhkj'),
(83, 'h1', 99, 'dddd', 'h11494985.jpg', 'dddd'),
(84, 'h2', 88, 'dddd', 'h21366x768-Widescreen-Wallpaper.jpg', 'ddd\n\n'),
(85, 'h3', 989, 'dddd', 'h328a1eeh.jpg', 'kkjkjk'),
(86, 'h4', 989, 'bbbb', 'h4Cool-Wallpapers-12.jpg', 'bbbb'),
(87, 'jjj', 99, 'ddd', 'jjj2012-laptop-wallpapers-free-download (1).jpg', 'mmm'),
(88, 'kkk', 9898, 'sssss', 'kkk2012-laptop-wallpapers-free-download (1).jpg', 'nnn'),
(89, 'kkkk', 877, '6556', 'kkkklogo.png', 'm,,m,m,'),
(90, 'hhh', 999, 'ddddHHH', 'hhh1366x768-Widescreen-Wallpaper.jpg', 'hhhh'),
(91, 'pps1', 989, 'ddddd', '', 'mmmm'),
(92, 'pps1', 989, 'ddddd', '', 'mmmm'),
(93, 'pps1', 989, 'ddddd', '', 'mmmm'),
(94, 'pps1', 989, 'ddddd', '', 'mmmm'),
(95, 'pps1', 989, 'ddddd', '', 'mmmm'),
(96, 'pps1', 989, 'ddddd', '', 'mmmm'),
(97, 'jjj', 999, 'ssssnnn', '1494985.jpg', 'nnn'),
(98, 'jjj', 999, 'ssssnnn', '1494985.jpg', 'nnn'),
(99, 'honey', 999, 'lklkkLKL', 'Sleeping_puppies_hd__laptop_wallpapers.jpg', 'KLKLKLL'),
(100, 'mmmm', 544, 'jkjkkj', '', 'kkjk'),
(101, 'mmmm', 544, 'jkjkkj', '', 'kkjk'),
(102, 'chinu', 88, 'jjjj', 'dog_labrador_lie_face_67234_1366x768.jpg', 'jjjj'),
(103, 'polp', 999, 'sss', '158151_download-Desktop-PC-Laptop-Chickens-Baby-HD-Wallpapers_1600x1000 (1).jpg', 'mmm'),
(104, 'polp', 999, 'sss', '158151_download-Desktop-PC-Laptop-Chickens-Baby-HD-Wallpapers_1600x1000 (1).jpg', 'mmm'),
(105, 'lop', 999, 'kkkk', 'Cool-Wallpapers-8.jpg', 'kkkk'),
(106, 'lop', 999, 'kkkk', 'Cool-Wallpapers-8.jpg', 'kkkk'),
(107, 'honey2', 9898, 'kskkjskj', 'fire-ball-HD.jpg', 'jjkjkj'),
(108, 'honey2', 9898, 'kskkjskj', 'fire-ball-HD.jpg', 'jjkjkj'),
(109, 'kjj', 6565, 'popop', '3d-abstract-mesmerizing-romantical-love-painting-photo-love-wallpaper-2v8q61rjqvkxku2bly524g.jpg', 'popop'),
(110, 'kjj', 6565, 'popop', '3d-abstract-mesmerizing-romantical-love-painting-photo-love-wallpaper-2v8q61rjqvkxku2bly524g.jpg', 'popop'),
(111, 'honey1', 999, 'nnnnnn', '1871427.jpg', 'nnnnn'),
(112, 'kkkk', 656, 'mmmm', '158151_download-Desktop-PC-Laptop-Chickens-Baby-HD-Wallpapers_1600x1000 (1).jpg', 'mmmm'),
(113, 'hello2', 656, 'KJKJK', '1494985.jpg', 'KJKJK'),
(114, 'hzzz', 989, 'mljll', 'Screenshot (7).png', 'ljljl'),
(115, 'jkjk', 666, 'mmm', 'Screenshot (22).png', 'mm'),
(116, 'kol', 966, 'nmnmnm', 'Screenshot (24).png', 'mnmm'),
(117, 'kol', 966, 'nmnmnm', 'Screenshot (24).png', 'mnmm'),
(118, 'kole1', 88, 'mkol', 'Screenshot (26).png', 'llll'),
(119, 'kkkk', 656, 'mnmnm', NULL, 'mnmn'),
(120, 'lklk', 65, 'nmnmnmnm', NULL, 'uuututu'),
(121, 'kilop', 555, 'mnmnmnm', NULL, 'mnmnmn'),
(122, 'kole1', 999, 'jjjj', NULL, 'jjjj'),
(123, 'mmm', 888, 'nnnn', NULL, 'nnn'),
(124, 'lpokk', 888, 'mmmm', NULL, 'mmm'),
(125, 'kkkk', 100, 'nnnn', 'DSC00001.JPG', 'nnn'),
(126, 'honey', 522, 'mnmnm', 'DSC00001.JPG', 'mnmn'),
(127, 'nnn', 966, 'nmmm', 'DSC00001.JPG', ' nnnn'),
(128, 'kolq1', 966, 'nnnn', 'DSC00012.JPG', 'nnn'),
(129, 'plop', 963, 'okokoko', 'DSC00055.JPG', 'kokoko'),
(130, 'ps2', 989, 'dddd', 'Screenshot (7).png', 'nnnnnn'),
(131, 'p0p2', 999, 'nnnnn', '', 'nnnn'),
(132, '444', 888, ',,,,,', 'Screenshot (24).png', '98989');

-- --------------------------------------------------------

--
-- Table structure for table `product_account`
--

CREATE TABLE IF NOT EXISTS `product_account` (
  `Product_Account_Id` int(6) NOT NULL AUTO_INCREMENT,
  `Centre_Id` int(6) NOT NULL,
  `Product_Id` int(6) NOT NULL,
  `Buyer_Name` varchar(30) NOT NULL,
  `Buyer_Contact` text NOT NULL,
  `Buyer_Address` varchar(100) NOT NULL,
  `Selling_Date` date NOT NULL,
  `Quantity` int(10) NOT NULL,
  `Total_Amount` int(10) NOT NULL,
  `Paid_Amount` int(10) NOT NULL,
  `Payment_Type` int(1) NOT NULL,
  `Cheque_Number` int(6) DEFAULT NULL,
  `Bank_Name` varchar(30) DEFAULT NULL,
  `Remark` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Product_Account_Id`),
  KEY `Centre_Id` (`Centre_Id`),
  KEY `Product_Id` (`Product_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `seating`
--

CREATE TABLE IF NOT EXISTS `seating` (
  `Seating_Id` int(6) NOT NULL AUTO_INCREMENT,
  `Patient_Id` int(6) NOT NULL,
  `Seating` varchar(11) NOT NULL,
  PRIMARY KEY (`Seating_Id`),
  KEY `Patient_Id` (`Patient_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `seating`
--

INSERT INTO `seating` (`Seating_Id`, `Patient_Id`, `Seating`) VALUES
(5, 7, '1865'),
(6, 8, '878'),
(7, 15, '85'),
(8, 14, '897'),
(9, 17, '98'),
(10, 47, '878'),
(11, 1, '879');

-- --------------------------------------------------------

--
-- Table structure for table `super_admin`
--

CREATE TABLE IF NOT EXISTS `super_admin` (
  `Super_Id` int(6) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Photo` varchar(100) DEFAULT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Contact` varchar(10) NOT NULL,
  `Remark` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Super_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `super_admin`
--

INSERT INTO `super_admin` (`Super_Id`, `Name`, `Photo`, `Username`, `Password`, `Address`, `Contact`, `Remark`) VALUES
(1, 'bhumi', 'user.jpg', 'bhumi', '12345', '', '', NULL),
(2, 'chinmay', NULL, 'salmawalac@gmail.com', '1996199633', 'adajan surat', '8460001125', 'temp');

-- --------------------------------------------------------

--
-- Table structure for table `therapist`
--

CREATE TABLE IF NOT EXISTS `therapist` (
  `Therapist_Id` int(6) NOT NULL AUTO_INCREMENT,
  `Therapist_Name` varchar(100) NOT NULL,
  `Photo` varchar(100) DEFAULT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(500) NOT NULL,
  `Centre_Id` int(6) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Contact` varchar(10) NOT NULL,
  `Remark` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Therapist_Id`),
  UNIQUE KEY `Username` (`Username`),
  KEY `Center_Id` (`Centre_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `therapist`
--

INSERT INTO `therapist` (`Therapist_Id`, `Therapist_Name`, `Photo`, `Username`, `Password`, `Centre_Id`, `Address`, `Contact`, `Remark`) VALUES
(8, 'bhumi', 'Screenshot (2).png', 'salmawala', '1996199633', 1, 'asdfghjk', '8460001125', ''),
(12, 'chinmay', 'user.jpg', 'salmaw', '1996199633', 1, 'asdfghjk', '8460001125', ''),
(14, 'qwerty', 'Screenshot (2).png', 'qwertyuiop', '25f9e794323b453885f5181f1b624d0b', 1, 'poiuytrewqasdfghjklmnbvcxz', '8460001125', ''),
(15, 'chinmay salmawala', 'Suicide.Squad.2016.EXTENDED.1080p.BluRay.DTS.x264-ETRG.Screenshot (4).png', 'salmawala@yahoo.com', 'e4b8fe95a06a59bc1ad088d92748e993', 2, 'poiuytreqdfg', '8460001125', '');

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE IF NOT EXISTS `treatment` (
  `Treatment_Id` int(6) NOT NULL AUTO_INCREMENT,
  `Patient_Id` int(6) NOT NULL,
  `Treatment_Date` varchar(20) NOT NULL,
  `CS` varchar(100) DEFAULT NULL,
  `EFT` varchar(100) DEFAULT NULL,
  `6KI` varchar(100) DEFAULT NULL,
  `Triorigin` varchar(100) DEFAULT NULL,
  `Others` varchar(100) DEFAULT NULL,
  `Centre_Id` int(6) NOT NULL,
  `Remark` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Treatment_Id`),
  KEY `Patient_Id` (`Patient_Id`),
  KEY `Centre_Id` (`Centre_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `treatment`
--

INSERT INTO `treatment` (`Treatment_Id`, `Patient_Id`, `Treatment_Date`, `CS`, `EFT`, `6KI`, `Triorigin`, `Others`, `Centre_Id`, `Remark`) VALUES
(1, 1, '5/27/2017', 'mnmmnm', '', 'sfddsfâ†‘â†‘', '', '', 1, ''),
(2, 1, '2017-05-25', 'mmnmnmnmnmm', '', '', '', '', 1, ''),
(3, 1, '2017-05-17', 'klklkl', '', '', '', '', 1, ''),
(4, 1, '2017-05-06', '', '', '', '', '', 1, ''),
(5, 1, '27 May 2017', 'honey', '', 'jjjâ†‘â†“', '', '', 1, ''),
(6, 1, '2017-05-11', '', 'chinnu', '', '', '', 1, ''),
(7, 1, '2017-05-11', '', 'kiolo', '', '', '', 1, ''),
(8, 4, '27 May 2017', 'honey', '', 'aki', '', '', 1, ''),
(9, 2, '2017-05-03', 'nnnnnn', '  nnnn', '', '', '', 1, ''),
(10, 6, '2017-05-09', 'lklklklkLKLK', 'KLKLKL', '', '', '', 1, ''),
(11, 1, '2017-05-24', 'lklklklkLKLK', 'KLKLKL', 'erdfgd', 'fgfg', 'dgfgh', 1, ''),
(12, 2, '11-11-2017', 'nmnm', 'nmnm', 'mnmnm', 'mnm', 'mnmn', 1, 'mnbmm'),
(13, 1, '5/27/2017', 'nbnbnb', '', 'dfgdfâ†‘â†“â†“', '', '', 1, ''),
(14, 2, '11-12-2015', 'mnmnm', '', '', '', '', 1, ''),
(15, 2, '27 May 2017', 'bzzzzz', '', '', '', '', 1, ''),
(16, 2, '27 May 2017', 'kjkkjkjk', '', '', '', '', 1, ''),
(17, 1, '27 May 2017', 'uiuiu', '', 'njnkjâ†‘â†“', '', '', 1, ''),
(18, 4, '27 May 2017', 'chinu', 'chinmay salmawala', 'jhjjâ†‘â†“gfgâ†“â†‘', '', '', 2, ''),
(19, 2, '27 May 2017', 'jhjhjhj', '', 'nkjkjkâ†‘â†‘â†“â†“â†“', '', '', 1, ''),
(20, 1, '5/27/2017', '', '', 'kjkjkâ†‘â†‘â†“â†“â†“â†“â†“', '', '', 2, ''),
(21, 7, '5/30/2017', '233', 'â†‘â†“â†‘â†“', 'â†‘â†“â†‘â†“', 'â†‘â†“â†‘â†“', '33', 1, '3232'),
(22, 7, '5/30/2017', 'hello', 'chinmay', 'salmawala', 'helloâ†‘â†‘â†“â†“â†‘â†“â†‘', 'qwerty', 1, ''),
(23, 7, '5/31/2017', 'qwerty', 'qwerty', 'qwerty', 'qwerty', 'qwerty', 1, ''),
(24, 8, '05 July 2017', 'qazxsw', 'edcvfr', 'rfvbgt', 'asdâ†‘â†“', 'qqq', 1, 'qqqq'),
(25, 8, '31 May 2017', 'asdfg', 'qwert', 'qwerty', 'qwerty', 'qwerty', 1, ''),
(26, 8, '31 May 2017', 'sdfgh', 'asdfgh', 'asdfgh', 'asdfgh', 'sdfgh', 1, ''),
(27, 8, '31 May 2017', 'asdg', 'sdfgh', 'sdfgh', 'sdfgh', 'sdfghj', 1, ''),
(28, 8, '31 May 2017', 'q', '', '', '', '', 1, ''),
(29, 8, '31 May 2017', 'jj', '', '', '', '', 1, ''),
(30, 15, '31 May 2017', 'zxcvbnm', '', '', '', '', 1, ''),
(31, 14, '31 May 2017', '', 'â†‘â†“â†‘â†“', '', '', '', 1, ''),
(32, 17, '31 May 2017', '', 'asdfghjkl', '', '', '', 1, ''),
(33, 1, '1 June 2017', 'asdfgh', 'dfghj', '', '', '', 2, ''),
(34, 4, '31 May 2017', 'jhjhh', 'hjhjhjh', NULL, NULL, NULL, 2, NULL),
(35, 47, '1 June 2017', 'agh', 'jjjjâ†‘', 'â†“gggg', '', '', 2, ''),
(36, 1, '1 June 2017', 'qwe', 'qweâ†‘â†“', '', '', '', 2, ''),
(37, 47, '1 June 2017', 'asdfg', '', '', '', '', 2, '');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `complaint`
--
ALTER TABLE `complaint`
  ADD CONSTRAINT `complaint_ibfk_1` FOREIGN KEY (`Patient_Id`) REFERENCES `patient` (`Patient_Id`),
  ADD CONSTRAINT `complaint_ibfk_2` FOREIGN KEY (`Centre_Id`) REFERENCES `centre` (`Centre_Id`);

--
-- Constraints for table `document`
--
ALTER TABLE `document`
  ADD CONSTRAINT `document_ibfk_1` FOREIGN KEY (`Patient_Id`) REFERENCES `patient` (`Patient_Id`),
  ADD CONSTRAINT `document_ibfk_2` FOREIGN KEY (`Treatment_Id`) REFERENCES `treatment` (`Treatment_Id`),
  ADD CONSTRAINT `document_ibfk_3` FOREIGN KEY (`Centre_Id`) REFERENCES `centre` (`Centre_Id`);

--
-- Constraints for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD CONSTRAINT `enquiry_ibfk_1` FOREIGN KEY (`Centre_Code`) REFERENCES `centre` (`Centre_Code`);

--
-- Constraints for table `inventory`
--
ALTER TABLE `inventory`
  ADD CONSTRAINT `inventory_ibfk_1` FOREIGN KEY (`Product_Id`) REFERENCES `product` (`Product_Id`),
  ADD CONSTRAINT `inventory_ibfk_2` FOREIGN KEY (`Centre_Id`) REFERENCES `centre` (`Centre_Id`);

--
-- Constraints for table `package_account`
--
ALTER TABLE `package_account`
  ADD CONSTRAINT `package_account_ibfk_2` FOREIGN KEY (`Package_Id`) REFERENCES `package` (`Package_Id`),
  ADD CONSTRAINT `package_account_ibfk_1` FOREIGN KEY (`Patient_Id`) REFERENCES `patient` (`Patient_Id`);

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `patient_ibfk_1` FOREIGN KEY (`Centre_Code`) REFERENCES `centre` (`Centre_Code`);

--
-- Constraints for table `patient_account`
--
ALTER TABLE `patient_account`
  ADD CONSTRAINT `patient_account_ibfk_1` FOREIGN KEY (`Patient_Id`) REFERENCES `patient` (`Patient_Id`),
  ADD CONSTRAINT `patient_account_ibfk_2` FOREIGN KEY (`Centre_Id`) REFERENCES `centre` (`Centre_Id`),
  ADD CONSTRAINT `patient_account_ibfk_3` FOREIGN KEY (`Package_Id`) REFERENCES `package` (`Package_Id`);

--
-- Constraints for table `product_account`
--
ALTER TABLE `product_account`
  ADD CONSTRAINT `product_account_ibfk_1` FOREIGN KEY (`Centre_Id`) REFERENCES `centre` (`Centre_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_account_ibfk_2` FOREIGN KEY (`Product_Id`) REFERENCES `product` (`Product_Id`);

--
-- Constraints for table `seating`
--
ALTER TABLE `seating`
  ADD CONSTRAINT `seating_ibfk_1` FOREIGN KEY (`Patient_Id`) REFERENCES `patient` (`Patient_Id`);

--
-- Constraints for table `therapist`
--
ALTER TABLE `therapist`
  ADD CONSTRAINT `therapist_ibfk_1` FOREIGN KEY (`Centre_Id`) REFERENCES `centre` (`Centre_Id`);

--
-- Constraints for table `treatment`
--
ALTER TABLE `treatment`
  ADD CONSTRAINT `treatment_ibfk_1` FOREIGN KEY (`Patient_Id`) REFERENCES `patient` (`Patient_Id`),
  ADD CONSTRAINT `treatment_ibfk_2` FOREIGN KEY (`Centre_Id`) REFERENCES `centre` (`Centre_Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
