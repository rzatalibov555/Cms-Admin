-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2021 at 09:08 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seba_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(255) NOT NULL,
  `a_username` varchar(255) NOT NULL,
  `a_password` varchar(255) NOT NULL,
  `a_category` varchar(255) NOT NULL,
  `a_status` varchar(255) NOT NULL,
  `a_email` varchar(255) NOT NULL,
  `a_img` varchar(255) NOT NULL,
  `a_creater_id` varchar(255) NOT NULL,
  `a_creat_date` varchar(255) NOT NULL,
  `a_updater_id` varchar(255) NOT NULL,
  `a_update_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_username`, `a_password`, `a_category`, `a_status`, `a_email`, `a_img`, `a_creater_id`, `a_creat_date`, `a_updater_id`, `a_update_date`) VALUES
(1, 'Rza Talibov11', 'Seba', 'c5ca28f67333e12198c8cd4fa5c60c4a', '1', '1', 'sethubpro@gmail.com', 'derece16.png', '', '', '20', '2021-09-08 06:10:55'),
(17, 'test111', 'Seba12111', 'c5ca28f67333e12198c8cd4fa5c60c4a', '2', '1', 'n.m.zamanov@gmail.com', 'coordina4.png', '1', '2021-09-08 01:17:13', '20', '2021-09-08 06:20:36'),
(18, 'tester', 'Seba2', 'c5ca28f67333e12198c8cd4fa5c60c4a', '2', '1', 'sethubpro@gmail.com', 'derece19.png', '17', '2021-09-08 01:21:45', '20', '2021-09-08 06:20:28'),
(19, 'test11', 'qwqw', 'c5ca28f67333e12198c8cd4fa5c60c4a', '2', '1', 'sethubpro@gmail.com', 'coordina41.png', '17', '2021-09-08 01:22:08', '20', '2021-09-08 06:20:32'),
(20, 'test111222', 'Ayla021112', 'c5ca28f67333e12198c8cd4fa5c60c4a', '1', '1', 'sethubpro@gmail.com', 'Screenshot_68.png', '17', '2021-09-08 01:32:19', '20', '2021-09-08 06:39:23'),
(21, 'Rza Talibov 55512', 'hunter', 'c5ca28f67333e12198c8cd4fa5c60c4a', '2', '1', 'sethubpro@gmail.com', 'agirliq.png', '20', '2021-09-08 04:04:32', '21', '2021-09-08 06:40:34');

-- --------------------------------------------------------

--
-- Table structure for table `admincategory`
--

CREATE TABLE `admincategory` (
  `a_c_id` int(11) NOT NULL,
  `a_c_value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admincategory`
--

INSERT INTO `admincategory` (`a_c_id`, `a_c_value`) VALUES
(1, 'Admin'),
(2, 'Redactor');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `rank` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `creater_id` tinyint(4) DEFAULT NULL,
  `creat_date` varchar(255) DEFAULT NULL,
  `updater_id` tinyint(4) DEFAULT NULL,
  `update_date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `url`, `title`, `description`, `rank`, `date`, `img`, `status`, `creater_id`, `creat_date`, `updater_id`, `update_date`) VALUES
(1, 'apple', 'apple store', 'It is a apple store', '1', NULL, '', '1', 5, '11', 11, '11'),
(2, 'apple1', 'apple store1', 'It is a apple store1', '1', NULL, '', '0', 5, '12', 12, '12'),
(3, 'apple3', 'apple store3', 'It is a apple store3', '1', NULL, '', '1', 5, '13', 13, '13');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `s_id` int(11) NOT NULL,
  `s_value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`s_id`, `s_value`) VALUES
(1, 'Active'),
(2, 'Deactive'),
(3, 'Pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `admincategory`
--
ALTER TABLE `admincategory`
  ADD PRIMARY KEY (`a_c_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `admincategory`
--
ALTER TABLE `admincategory`
  MODIFY `a_c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
