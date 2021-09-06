-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2019 at 06:50 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(100) NOT NULL,
  `status` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `status`, `description`) VALUES
(1, 'danger', 'You have entered invalid password!...'),
(2, 'danger', 'Your current password is missing or incorrect!...'),
(3, 'danger', 'Password was not changed successfully!...'),
(4, 'success', 'Password has been successfully changed!...'),
(5, 'success', 'You have successfully login!...'),
(6, 'danger', 'Please enter your username and password!....'),
(7, 'danger', 'Invalid username or password!...'),
(9, 'success', 'Your changes saved successfully!...'),
(10, 'success', 'Your data was saved successfully!...'),
(11, 'danger', 'please enter your email address'),
(12, 'success', 'password reset email was sent successfully!...'),
(13, 'danger', 'Invalid email address!...'),
(14, 'danger', 'There was an error '),
(15, 'success', 'password was reset successfully '),
(16, 'danger', 'please check your reset code'),
(17, 'danger', 'new password and confirm password does not match'),
(18, 'danger', 'Old password is incorrect..!');

-- --------------------------------------------------------

--
-- Table structure for table `oncologist`
--

CREATE TABLE `oncologist` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `createdAt` datetime NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  `authToken` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastLogin` datetime NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `resetcode` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `oncologist`
--

INSERT INTO `oncologist` (`id`, `name`, `email`, `createdAt`, `isActive`, `authToken`, `lastLogin`, `username`, `password`, `resetcode`) VALUES
(1, 'Dr. Suharshana', 'dhanusha@synotec.lk', '2017-07-05 11:03:45', 1, '244ddb306f9d9e36af9cc8ca1d08b59c', '2019-11-21 23:56:03', 'dhanusha', '1321bc0cf3c1730fc9af115b1281c848', '66565'),
(2, 'Dr. Kamal Surendra', 'kamal@gmail.com', '2017-07-05 11:03:45', 1, '0d9891eebfed3d503dc6afc9c4ce349a', '2019-11-22 11:30:01', 'admin', '1321bc0cf3c1730fc9af115b1281c848', ''),
(3, 'Dr. Charuni', 'charuni@gmail.com', '2018-08-15 04:16:34', 1, 'fb750c94ff543203912b992cf6c4ddb8', '2019-11-22 07:47:17', 'charuni', '1321bc0cf3c1730fc9af115b1281c848', '');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `age` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` longtext NOT NULL,
  `status` varchar(10) NOT NULL,
  `comment` longtext NOT NULL,
  `queue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `name`, `image_name`, `age`, `gender`, `address`, `status`, `comment`, `queue`) VALUES
(1001, 'Amali Perera', '-555079369_190648061537_1574374663_n.jpg', '24', 'Female', 'No 25, Baddegama Rd, Galle', 'Abnormal', 'She is in abnormal condition', 0),
(1002, 'Kamal Surendra', '-435229317_190767911589_1574374981_n.jpg', '21', 'Male', 'Thalagaha,Akuressa Rd , Galle', 'Normal', 'I have run several tests of this patient and i did not find any symptoms of having a cancer. He is in normal condition', 0),
(1003, 'Asaf Farhan', '-418382831_190784758075_1574375062_n.jpg', '30', 'Male', 'Karapitiya,Ambalanwatha ', '0', '', 0),
(1004, 'Senukshi De silva', '-522497299_190680643607_1574375130_n.jpg', '25', 'Female', 'Hikkaduwa,Angulughapelssa', '0', '', 0),
(1005, 'Anuradha aponsu', '-36232721_191166908185_1574375170_n.jpg', '40', 'Male', 'Gothatuwa,Baddegama', '0', '', 0),
(1006, 'Anushka Indunil', '-431161421_190771979485_1574375202_n.jpg', '50', 'Male', 'Ampegama', '0', '', 0),
(1007, 'Kasun Madushanka', '-75541046_191127599860_1574375253_n.jpg', '40', 'Male', 'Piliyandala,Bokundara', '0', '', 0),
(1008, 'Apoorwa', '-156082428_191047058478_1574375328_n.jpg', '32', 'Male', 'Yatagala Rd, Unawatuna', '0', '', 0),
(1009, 'Akila', '-55578183_191147562723_1574388552_n.jpg', '40', 'Male', 'galle', '0', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `radiologist`
--

CREATE TABLE `radiologist` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `createdAt` datetime NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  `authToken` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastLogin` datetime NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `resetcode` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `radiologist`
--

INSERT INTO `radiologist` (`id`, `name`, `email`, `createdAt`, `isActive`, `authToken`, `lastLogin`, `username`, `password`, `resetcode`) VALUES
(1, 'Dr. Suharshana', 'dhanusha@synotec.lk', '2017-07-05 11:03:45', 1, '244ddb306f9d9e36af9cc8ca1d08b59c', '2019-11-21 23:56:03', 'dhanusha', 'dc4005be1aa1ec2a9ffaac9055fbd5ac', '66565'),
(2, 'Dr. Sunil Perera', 'sunil@gmail.com', '2017-07-05 11:03:45', 1, '3c2ba98cef618b897f46d47158690d34', '2018-08-16 10:15:40', 'admin', 'dc4005be1aa1ec2a9ffaac9055fbd5ac', ''),
(3, 'Dr. Charuni', 'charuni@gmail.com', '2018-08-15 04:16:34', 1, 'fb750c94ff543203912b992cf6c4ddb8', '2019-11-22 07:47:17', 'charuni', 'dc4005be1aa1ec2a9ffaac9055fbd5ac', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `createdAt` datetime NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  `authToken` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastLogin` datetime NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `resetcode` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `createdAt`, `isActive`, `authToken`, `lastLogin`, `username`, `password`, `resetcode`) VALUES
(1, 'Sublime', 'dhanusha@sublime.lk', '2017-07-05 11:03:45', 1, '2f6aa073e67248d4974b3253abf0982d', '2019-11-21 23:19:33', 'mahesh', '348c880664f2e1458b899ced2a3518e6', '66565'),
(2, 'Sublime', 'dhanusha@sublime.lk', '2017-07-05 11:03:45', 1, '3c2ba98cef618b897f46d47158690d34', '2018-08-16 10:15:40', 'admin', '348c880664f2e1458b899ced2a3518e6', ''),
(3, 'csfdff', 'dhanusha@sublime.lk', '2018-08-15 04:16:34', 1, '8602da55e5b64747097e44142dea2d2b', '2018-08-15 16:10:43', 'matheesha', '348c880664f2e1458b899ced2a3518e6', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oncologist`
--
ALTER TABLE `oncologist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `radiologist`
--
ALTER TABLE `radiologist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `oncologist`
--
ALTER TABLE `oncologist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1010;
--
-- AUTO_INCREMENT for table `radiologist`
--
ALTER TABLE `radiologist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
