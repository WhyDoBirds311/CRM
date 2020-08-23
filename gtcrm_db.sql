-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2018 at 06:17 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gtcrm_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `backlinks`
--

CREATE TABLE `backlinks` (
  `linkID` int(11) NOT NULL,
  `date_created` date NOT NULL,
  `live_link` varchar(255) NOT NULL,
  `account` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `link_type` varchar(255) NOT NULL,
  `QA_comment` varchar(255) NOT NULL,
  `businessID` int(11) NOT NULL,
  `month_no` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `business_info`
--

CREATE TABLE `business_info` (
  `businessID` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `seo_specialist` varchar(255) NOT NULL,
  `add_blog_post` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `business_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact_num` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `more_page_1` varchar(255) NOT NULL,
  `more_page_2` varchar(255) NOT NULL,
  `more_page_3` varchar(255) NOT NULL,
  `URL_1` varchar(255) NOT NULL,
  `URL_2` varchar(255) NOT NULL,
  `URL_3` varchar(255) NOT NULL,
  `PDF_link` varchar(255) NOT NULL,
  `gmail_name` varchar(255) NOT NULL,
  `gmail_account` varchar(255) NOT NULL,
  `gmail_password` varchar(255) NOT NULL,
  `recovery_account` varchar(255) NOT NULL,
  `recovery_password` varchar(255) NOT NULL,
  `short_bio` varchar(255) NOT NULL,
  `long_bio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `seo`
--

CREATE TABLE `seo` (
  `SEO_ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `company` varchar(50) NOT NULL,
  `user_role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `email`, `username`, `password`, `company`, `user_role`) VALUES
(13, 'test@gmail.com', 'test', '$2y$10$dC.JU8RBpjklHGoR32.21.aiBsy1Hsk8oKB/ZZscunAji6Xhg7InS', 'test', 2),
(14, 'admin@gmail.com', 'root', '$2y$10$HNJpED5i3ICufaJDZ0/VuOerh7A6k1i0BukQnvx1L2JvKNObgjmJ6', 'root', 1),
(15, 'a.markdexter@gmail.com', 'drizzt32', '$2y$10$ZeZBEDLRUyU8iCmVr9HsLOcbVzW4thhn2CL/5R65Uy4jyPMPbAHwG', 'gabtech', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `backlinks`
--
ALTER TABLE `backlinks`
  ADD PRIMARY KEY (`linkID`),
  ADD KEY `businessID` (`businessID`);

--
-- Indexes for table `business_info`
--
ALTER TABLE `business_info`
  ADD PRIMARY KEY (`businessID`);

--
-- Indexes for table `seo`
--
ALTER TABLE `seo`
  ADD PRIMARY KEY (`SEO_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `username_index` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `backlinks`
--
ALTER TABLE `backlinks`
  ADD CONSTRAINT `backlinks_ibfk_1` FOREIGN KEY (`businessID`) REFERENCES `business_info` (`businessID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
