-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2021 at 05:35 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gozerowebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `contactID` int(10) NOT NULL,
  `cname` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `contactDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `cmessage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`contactID`, `cname`, `email`, `contactDate`, `cmessage`) VALUES
(1183, 'Karma', 'daize30rain@gmail.com', '2021-07-01 13:23:50', 'hi'),
(1185, 'Ryu Hye Young', 'ryuniverse328@gmail.com', '2021-07-01 13:26:01', 'hi there\r\n'),
(1187, 'Kim Sang Beom', 'kkbeom@gmail.com', '2021-07-01 13:30:56', 'oh pretty\r\n'),
(1199, 'Santi Bernardo', 'santibernardo@gmail.com', '2021-07-01 14:24:56', 'Currently, I market computer products for a major supplier using television, radio and news advertising. I have a reputation for seeing every project through to success.'),
(1202, 'Hiraya Ynares', 'iamhiraya@gmail.com', '2021-07-01 15:31:40', 'I am writing to you to inquire about a vacancy in your company’s London office for an IT Project Manager. I have been told of this opening by a Mr Richard Brown who is currently employed by your company.\r\n'),
(1203, 'Lee Do Hyun', 'itsmedohyun@gmail.com', '2021-07-01 15:33:17', 'The Philippines has always been worldwide-known as a successful country, thriving in multiple aspects with its rich culture and historical background, abundant natural resources, and the Filipino people themselves, being the country’s greatest treasure. ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`contactID`),
  ADD UNIQUE KEY `contactID` (`contactID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contactID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1204;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
