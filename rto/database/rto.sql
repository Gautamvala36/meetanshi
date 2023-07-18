-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2023 at 08:25 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rto`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'gauatmvala711@gmail.com', 'gautam123');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `message` varchar(225) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `application_no` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `payment_type` varchar(225) NOT NULL,
  `number` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `payment_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `application_no`, `email`, `payment_type`, `number`, `status`, `payment_date`) VALUES
(1, '12222', 'admin@gmail.com', 'GPay', '8780982845', 'SUCCES', '2023-07-13 09:59:34'),
(2, '12223', 'admin1@gmail.com ', 'CARD', '4563256345635632', 'SUCCES', '2023-07-13 10:05:24');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `application_no` varchar(225) NOT NULL,
  `photo` varchar(225) NOT NULL,
  `fullname` varchar(225) NOT NULL,
  `fathername` varchar(225) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `bloodgroup` varchar(100) NOT NULL DEFAULT '',
  `mobilenumber` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `aadharnumber` varchar(100) NOT NULL,
  `license_type` varchar(225) NOT NULL,
  `address1` varchar(225) NOT NULL,
  `address2` varchar(225) NOT NULL,
  `state` varchar(225) NOT NULL,
  `district` varchar(225) NOT NULL,
  `city` varchar(225) NOT NULL,
  `pincode` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `reg_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `application_no`, `photo`, `fullname`, `fathername`, `gender`, `dob`, `bloodgroup`, `mobilenumber`, `email`, `password`, `aadharnumber`, `license_type`, `address1`, `address2`, `state`, `district`, `city`, `pincode`, `status`, `reg_date`) VALUES
(1, '12222', 'https://picsum.photos/50/50?random=1', 'admin', 'admin', 'M', '2002-06-03', 'A+', '8780982845', 'admin@gmail.com', 'admin@2002', '365298745412', 'LL', 'mahuva', 'mahuav', 'India', 'Guj', 'mahuva', '364290', 'Accept', '2023-07-05 16:27:24'),
(2, '12223', 'https://picsum.photos/50/50?random=2', 'admin1', 'admin1', 'F', '2023-07-04', 'AB+', '9428040571', 'admin1@gmail.com', 'admin1@123', '456385209541', 'DL', 'GOA', 'GOA', 'India', 'GOA', 'GOA', '364200', 'Reject', '2023-07-06 09:58:54'),
(3, '12224', 'https://picsum.photos/50/50?random=3', 'admin', 'admin', 'F', '2023-07-02', 'B+', '8796541230', 'admin@gmail.com', '123654', '456987451230', 'LL', 'admin', 'admin', 'ind', 'guj', 'mahuva', '364521', 'Accept', '2023-07-12 11:33:52'),
(5, '12225', 'https://picsum.photos/50/50?random=4', 'admin', 'admin', 'F', '2023-07-03', 'B+', '8796541230', 'admin25@gmail.com', '123654', '456987451230', 'LL', 'admin', 'admin', 'ind', 'guj', 'mahuva', '364521', 'Accept', '2023-07-12 11:34:56'),
(6, '12225', 'https://picsum.photos/50/50?random=5', 'admin', 'admin', 'F', '2023-07-03', 'B+', '8796541230', 'admin36@gmail.com', '123654', '456987451230', 'LL', 'admin', 'admin', 'ind', 'guj', 'mahuva', '364521', 'Accept', '2023-07-12 11:35:15');

-- --------------------------------------------------------

--
-- Table structure for table `userexam`
--

CREATE TABLE `userexam` (
  `id` int(11) NOT NULL,
  `application_no` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` varchar(225) NOT NULL,
  `examdate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userexam`
--

INSERT INTO `userexam` (`id`, `application_no`, `email`, `status`, `examdate`) VALUES
(1, 1, 'admin@gmail.com', 'PASS', '2023-07-13 10:03:19'),
(2, 2, 'adminl@gmail.com', 'PASS', '2023-07-13 10:04:01');

-- --------------------------------------------------------

--
-- Table structure for table `user_request`
--

CREATE TABLE `user_request` (
  `id` int(11) NOT NULL,
  `application_no` int(11) NOT NULL,
  `email` varchar(225) NOT NULL,
  `request` varchar(225) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_request`
--

INSERT INTO `user_request` (`id`, `application_no`, `email`, `request`, `date`) VALUES
(1, 1, 'admin@gmail.com', 'll', '2023-07-07 15:01:25'),
(2, 2, 'admin1@gmail.com', 'dl', '2023-07-07 15:01:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`,`aadharnumber`),
  ADD KEY `application_no` (`application_no`);

--
-- Indexes for table `userexam`
--
ALTER TABLE `userexam`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userexam_ibfk_1` (`application_no`);

--
-- Indexes for table `user_request`
--
ALTER TABLE `user_request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_request_ibfk_1` (`application_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `userexam`
--
ALTER TABLE `userexam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_request`
--
ALTER TABLE `user_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `userexam`
--
ALTER TABLE `userexam`
  ADD CONSTRAINT `userexam_ibfk_1` FOREIGN KEY (`application_no`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_request`
--
ALTER TABLE `user_request`
  ADD CONSTRAINT `user_request_ibfk_1` FOREIGN KEY (`application_no`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
