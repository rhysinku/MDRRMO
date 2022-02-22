-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2022 at 03:48 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mdrrmo_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedbackID` int(50) NOT NULL,
  `userid` int(50) NOT NULL,
  `feedbackComment` longtext NOT NULL,
  `feedbackRating` int(11) NOT NULL,
  `feedbackTimestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `feedbackStatus` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedbackID`, `userid`, `feedbackComment`, `feedbackRating`, `feedbackTimestamp`, `feedbackStatus`) VALUES
(3, 9, 'wow this is shitty website please delete this i dont like your face hehehehe', 1, '2022-02-18 16:00:00', 'Consider'),
(4, 10, 'wow this suck please remove this i just create this account to this you u good for nothing piece of shit ', 2, '2022-02-18 16:00:00', 'Consider'),
(6, 9, 'kill me please', 2, '2022-02-19 14:39:05', 'Looking Up'),
(7, 12, 'this is wow website hehehe', 6, '2022-02-20 02:34:18', 'Looking Up');

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `trainingID` int(250) NOT NULL,
  `userID` int(250) NOT NULL,
  `Leader` varchar(250) NOT NULL,
  `Participant` varchar(250) NOT NULL,
  `trainingDate` date NOT NULL,
  `TypeTraining` varchar(250) NOT NULL,
  `trainingEmail` varchar(250) NOT NULL,
  `Contactnum` varchar(250) NOT NULL,
  `trainingReason` longtext NOT NULL,
  `trainingLocation` longtext NOT NULL,
  `trainingTimestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `trainingAdminPermision` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`trainingID`, `userID`, `Leader`, `Participant`, `trainingDate`, `TypeTraining`, `trainingEmail`, `Contactnum`, `trainingReason`, `trainingLocation`, `trainingTimestamp`, `trainingAdminPermision`) VALUES
(11, 9, 'Test1', '12', '2022-02-16', 'WASSAR', 'eatmy@shit.com', '09273743328', 'reason1', 'location1', '2022-02-19 14:01:13', 'Decline'),
(12, 9, 'test2', '2', '2022-02-01', 'BLS/BFA', 'admin@admin.com', '09273743328', 'reason2', 'reason2', '2022-02-19 14:01:45', 'Decline'),
(13, 9, 'test3', '15', '2022-02-27', 'BMC', 'rhysin@gmail.com', '09273743328', 'reason3', 'location3', '2022-02-19 14:02:06', 'Approve'),
(14, 12, 'Hateler', '100000', '2022-02-24', 'WASSAR', 'jewjew@gmail.com', '9999999', 'we want to learn chu chu chu', 'argao next to jollibee', '2022-02-20 02:33:39', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `pwd` varchar(250) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `lname` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `username`, `email`, `pwd`, `fname`, `lname`) VALUES
(8, 'Admin', 'admin@admi', 'admin2022', 'Admin', 'Administra'),
(9, 'rhysinku', 'rhysin@gma', 'rhysin123', 'Rhysin', 'Villahermo'),
(10, 'mark', 'rhysin@gma', 'mark', 'Marks', 'Villahermo'),
(11, 'ponce', 'poncelichi@gmail.com', 'ponce', 'ponce', 'ponce'),
(12, 'rhysin-kun', 'rhysingwapo@gmail.com', 'rhysin', 'rhy', 'sin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedbackID`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`trainingID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedbackID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `trainingID` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
