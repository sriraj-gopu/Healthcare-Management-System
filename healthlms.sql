-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2021 at 05:39 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthlms`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctorsregistration`
--

CREATE TABLE `doctorsregistration` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Phone` bigint(10) NOT NULL,
  `Gender` enum('Male','Female','Others') NOT NULL,
  `DOB` date NOT NULL,
  `Blood Group` enum('O+','O-','B+','B-','A+','A-','AB+','AB-') NOT NULL,
  `Department` enum('Allergist/Immunologist','Anesthesiologist','Cardiologist','Dermatologist','Nephrologist','Neurologist','Gynecologist','Pediatrician','Physiatrist','Psychiatrist','Radiologist','General Surgeon') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctorsregistration`
--

INSERT INTO `doctorsregistration` (`ID`, `Name`, `EMAIL`, `Password`, `Phone`, `Gender`, `DOB`, `Blood Group`, `Department`) VALUES
(1, 'Dr.Brain', 'Dr.Brain@gmail.com', '5f80e0d2dc0a123f6f1d6bb250795a2f', 9030105859, 'Male', '2001-09-05', 'O+', 'General Surgeon'),
(2, 'Dr.Derma', 'Mr.Derma@gmail.com', '135fac25acb256985bba871b42e428c4', 4651651656, 'Male', '1991-01-15', 'B+', 'Dermatologist'),
(3, 'Dr.Allergist', 'Mr.Allergist@gmail.com', '2cb9e3de8c342977e46818c449689abf', 1234567890, 'Female', '1987-02-18', 'AB+', 'Allergist/Immunologist'),
(4, 'Dr.Stitch', 'Dr.Stitch@gmail.com', '9384fc2786be7e7327e47334f832c087', 6548921374, 'Female', '1990-06-13', 'A+', 'General Surgeon');

-- --------------------------------------------------------

--
-- Table structure for table `patientappointments`
--

CREATE TABLE `patientappointments` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `DOA` date NOT NULL,
  `Blood Group` enum('O+','O-','B+','B-','A+','A-','AB+','AB-') NOT NULL,
  `Department` enum('Allergist/Immunologist','Anesthesiologist','Cardiologist','Dermatologist','Nephrologist','Neurologist','Gynecologist','Pediatrician','Physiatrist','Psychiatrist','Radiologist','General Surgeon') NOT NULL,
  `Medical Condition` text NOT NULL,
  `Gender` enum('Male','Female','Others') NOT NULL,
  `Prescription` text NOT NULL,
  `Doctor Name` varchar(50) NOT NULL,
  `Status` enum('Done','Pending') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patientappointments`
--

INSERT INTO `patientappointments` (`ID`, `Name`, `DOA`, `Blood Group`, `Department`, `Medical Condition`, `Gender`, `Prescription`, `Doctor Name`, `Status`) VALUES
(1, 'Mr.Stone', '2021-04-30', 'O+', 'Dermatologist', 'Skin Dryness and Rashes', 'Male', '', '', 'Pending'),
(2, 'Jocasta', '2021-05-08', 'AB+', 'Allergist/Immunologist', 'Skin Allergy because of peanuts', 'Female', '', '', 'Pending'),
(3, 'Elon', '2021-05-17', 'AB-', 'Psychiatrist', 'Overthinking', 'Male', '', '', 'Pending'),
(4, 'Bill', '2021-04-20', 'A+', 'Neurologist', 'Migraine', 'Male', '', '', 'Pending'),
(5, 'Friday', '2021-04-07', 'B-', 'Radiologist', 'Covid', 'Female', '', '', 'Pending'),
(6, 'Kavya', '2021-05-05', 'B+', 'General Surgeon', 'Finger cut', 'Female', 'Use ointment daily. And clean your wound daily', 'Dr.Stitch', 'Done');

-- --------------------------------------------------------

--
-- Table structure for table `patientregistration`
--

CREATE TABLE `patientregistration` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Phone` bigint(10) NOT NULL,
  `Gender` enum('Male','Female','Others') NOT NULL,
  `DOB` date NOT NULL,
  `Blood Group` enum('O+','O-','B+','B-','A+','A-','AB+','AB-') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patientregistration`
--

INSERT INTO `patientregistration` (`ID`, `Name`, `EMAIL`, `Password`, `Phone`, `Gender`, `DOB`, `Blood Group`) VALUES
(1, 'Mr.Stone', 'Mr.Stone@gmail.com', '057bdcdddcc5925a0746aea4a4c844f3', 9030105859, 'Male', '2001-09-05', 'O+'),
(2, 'Elon', 'Elonmusk@gmail.com', '2e935609d44a333733d93a5c26ce3ca1', 9876543210, 'Male', '1978-10-11', 'AB-'),
(3, 'Bill', 'billgates@gmail.com', '2b0351fe998c6e5b4d674eab37167bb7', 7531264894, 'Male', '1978-05-19', 'A+'),
(4, 'Friday', 'Friday@gmail.com', '9febefe7a09fa8ee74e7b0b6b1e83a9e', 7538945612, 'Female', '2004-11-19', 'B-'),
(5, 'Jocasta', 'Jocasta@gmail.com', 'f00113bfb3f1e66e9d3b912c004feabd', 7418529631, 'Female', '2001-03-25', 'AB+'),
(6, 'Kavya', 'kavya@gmail.com', '3aeb59d71db12d1975a51949e286194a', 7539550125, 'Female', '2001-08-15', 'B+');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctorsregistration`
--
ALTER TABLE `doctorsregistration`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `patientappointments`
--
ALTER TABLE `patientappointments`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `patientregistration`
--
ALTER TABLE `patientregistration`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctorsregistration`
--
ALTER TABLE `doctorsregistration`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `patientappointments`
--
ALTER TABLE `patientappointments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `patientregistration`
--
ALTER TABLE `patientregistration`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
