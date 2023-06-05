-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 21, 2022 at 04:49 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `visboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerID` int(6) NOT NULL,
  `CustomerFN` varchar(50) NOT NULL,
  `CustomerLN` varchar(50) NOT NULL,
  `CBdate` date NOT NULL,
  `Cemail` varchar(50) NOT NULL,
  `Caddress` varchar(50) NOT NULL,
  `CustomerUN` varchar(12) NOT NULL,
  `Cpass` varchar(12) NOT NULL,
  `Plan` varchar(12) NOT NULL,
  `Amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerID`, `CustomerFN`, `CustomerLN`, `CBdate`, `Cemail`, `Caddress`, `CustomerUN`, `Cpass`, `Plan`, `Amount`) VALUES
(44, 'Arsenio', 'Ambayec', '2000-10-10', 'cenramos99@gmail.com', 'test address', 'ArcyBaby', 'hello', 'Premium', '649.00');

-- --------------------------------------------------------

--
-- Table structure for table `designer`
--

CREATE TABLE `designer` (
  `DesignerID` int(6) NOT NULL,
  `DesignerFN` varchar(50) NOT NULL,
  `DesignerLN` varchar(50) NOT NULL,
  `DesignerBD` date NOT NULL,
  `Demail` varchar(50) NOT NULL,
  `DesignerUN` varchar(12) NOT NULL,
  `Dpass` varchar(12) NOT NULL,
  `Daddress` varchar(50) NOT NULL,
  `Undergrad` varchar(50) NOT NULL,
  `Program` varchar(50) NOT NULL,
  `UnderYr` int(4) NOT NULL,
  `Employ1` varchar(50) NOT NULL,
  `Pos1` varchar(50) NOT NULL,
  `Employ2` varchar(50) NOT NULL,
  `Pos2` varchar(50) NOT NULL,
  `DLink` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `designer`
--

INSERT INTO `designer` (`DesignerID`, `DesignerFN`, `DesignerLN`, `DesignerBD`, `Demail`, `DesignerUN`, `Dpass`, `Daddress`, `Undergrad`, `Program`, `UnderYr`, `Employ1`, `Pos1`, `Employ2`, `Pos2`, `DLink`) VALUES
(8, 'Karl', 'See', '1997-10-07', 'kartsee@gmail.com', 'KarlTzy', 'karltsee1994', 'Valenzuela, NCR, Philippines', 'Far Eastern University - Manila', 'Bachelor of Science in Information Technology', 2017, '7th Media - Graphic Design Outsourcing', 'Junior Graphic Designer', 'NA', 'NA', 'https://1drv.ms/u/s!AggqiotlB6q3g1x2DAg9AAL_zkso?e=rlsQNC'),
(9, 'Ashley', 'Martin', '1994-06-12', 'ashleymartin@gmail.com', 'TheSwan', 'martiniAsh', 'San Ildefonso, Bulacan, Philippines', 'Polytechnic University of the Philippines - Manila', 'Bachelor of Arts in Communication', 2015, 'Polytechnic University of the Philippines - Manila', 'Faculty (2016-2018)', 'Inksurge', 'Supervising In Charge - Designing', 'https://1drv.ms/u/s!AggqiotlB6q3g16qGMUkMti8BZ9t?e=Wl4LKV'),
(10, 'Montano', 'George Juaquin', '2000-04-01', 'montanojg@gmail.com', 'JGMontano', 'JGHandsome', 'Binan, Laguna, Philippines', 'University of the Philippines - Los Banos', 'Bachelor of Arts in Communication Arts', 2022, 'RSEE Graphic Design Services', 'Junior Graphic Designer', 'NA', 'NA', 'https://1drv.ms/u/s!AggqiotlB6q3g19D9tfWEG52QZJM?e=Ia9ykE'),
(11, 'Donny Cathy', 'Ferman', '1995-04-01', 'donnycathyferman@gmail.com', 'Ferman', 'Ferman1995', 'Makati, NCR, Philippines', 'University of the Philippines - Los Banos', 'Bachelor of Arts in Communication Arts', 2014, 'Halcyon', 'Junior Graphic Designer', 'Inksurge', 'Junior Graphic Designer - Supervisor In Charge', 'https://1drv.ms/u/s!AggqiotlB6q3g2CufQeONOF4mlsS?e=H8UKZL'),
(12, 'Andrei', 'Oliveros', '1993-02-04', 'andreioliveros@gmail.com', 'AndreiShot', 'oliveros666', 'Taytay, Rizal, Philippines', 'Rizal Technological University', 'Bachelor of Science in Information Technology', 2013, 'iManila', 'Junior Graphic Designer', 'iManila', 'Design Supervisor', 'https://1drv.ms/u/s!AggqiotlB6q3g2EbJFHn0vqbR8WB?e=ZSPTbG'),
(13, 'Monica', 'Dy', '1999-10-05', 'monicady@gmail.com', 'MonicaDy', 'kissmemore', 'Muntinlupa, NCR, Philippines', 'Pamantasang Lungsod ng Maynila', 'Bachelor of Arts in Communication Arts', 2021, 'InkSurge', 'Junior Graphic Designer', 'NA', 'NA', 'https://1drv.ms/u/s!AggqiotlB6q3g2ITVG-5FoBr5UvN?e=pueXcu');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `RequestID` int(6) NOT NULL,
  `CommDemail` varchar(50) NOT NULL,
  `CustomerID` int(6) NOT NULL,
  `CommEmail` varchar(50) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`RequestID`, `CommDemail`, `CustomerID`, `CommEmail`, `Subject`, `Message`) VALUES
(2, 'kartsee@gmail.com', 44, 'cenramos99@gmail.com', 'Template for my school presentation', 'Hello, I want to pay you');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `TransID` int(6) NOT NULL,
  `TransDate` date NOT NULL,
  `CustomerID` int(6) NOT NULL,
  `CustomerName` varchar(50) NOT NULL,
  `DesignerID` int(6) NOT NULL,
  `TotalAmount` decimal(10,2) NOT NULL,
  `CommAmount` decimal(10,2) NOT NULL,
  `DesignerFee` decimal(10,2) NOT NULL,
  `Method` varchar(20) NOT NULL,
  `Link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerID`),
  ADD KEY `Plan` (`Plan`);

--
-- Indexes for table `designer`
--
ALTER TABLE `designer`
  ADD PRIMARY KEY (`DesignerID`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`RequestID`),
  ADD KEY `CustomerID` (`CustomerID`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`TransID`,`CustomerID`,`DesignerID`),
  ADD KEY `CustomerID` (`CustomerID`),
  ADD KEY `DesignerID` (`DesignerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CustomerID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `designer`
--
ALTER TABLE `designer`
  MODIFY `DesignerID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `RequestID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `TransID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
