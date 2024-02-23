-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2024 at 09:43 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `benramerp_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `SupID` int(11) NOT NULL,
  `SupplierName` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `ContactPerson` varchar(255) NOT NULL,
  `Contact` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Status` int(11) NOT NULL,
  `DateCreated` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`SupID`, `SupplierName`, `Address`, `ContactPerson`, `Contact`, `Email`, `Status`, `DateCreated`) VALUES
(1, 'Sample Supplier', 'Sample Address', 'Sample Contact Person', '9', 'sample@email.com', 1, '2024-02-23 08:42:21'),
(2, 'das', 'dsa', 'da', 'dsa', 'dsa@e.com', 1, '2024-02-23 08:50:59'),
(3, 'dsa', 'dsa', 'dsa', 'dsa', 'das@dsa.csda', 1, '2024-02-23 08:53:15'),
(4, 'dsa', 'dsa', 'dsa', 'dsa', 'das@dsa.csda', 1, '2024-02-23 09:22:41'),
(5, 'dsa', 'dsa', 'dsa', 'd', 'dsa@dsa.eass', 1, '2024-02-23 09:30:45'),
(6, 'dsa', 'dsa', 'dsa', '21', 'sda@dsa.dsa', 1, '2024-02-23 09:31:57'),
(7, 'das', 'dsa', 'sad', 'dsa', 'd@dsa.com', 1, '2024-02-23 09:32:32'),
(8, 'dsa', 'dsa', 'dsa', 'dsa', 'dsa@dsa.com', 1, '2024-02-23 09:33:04'),
(9, 'dsa', 'dsa', 'das', '2313', 'hian@gmail.com', 1, '2024-02-23 09:39:15'),
(10, 'dsa', 'dsa', 'dsa', '2', 'das@gm.com', 1, '2024-02-23 09:39:44'),
(11, 'dsa', 'dsa', 'dsa', '23', 'sda2@dsa.fasd', 1, '2024-02-23 09:40:03'),
(12, 'dsa', 'das', 'dsa', 'dsa', 'dsa@das.com', 1, '2024-02-23 09:41:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `Middlename` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` longtext NOT NULL,
  `Avatar` varchar(50) NOT NULL DEFAULT 'no_image.png',
  `DateCreated` varchar(50) NOT NULL,
  `Status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Firstname`, `Lastname`, `Middlename`, `Username`, `Password`, `Avatar`, `DateCreated`, `Status`) VALUES
(1, 'Admin', 'Admin', 'Admin', 'Admin', '0192023a7bbd73250516f069df18b500', 'no_image.png', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`SupID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `SupID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
