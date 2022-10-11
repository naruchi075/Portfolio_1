-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2022 at 08:01 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jpkn_multimedia_collection`
--

-- --------------------------------------------------------

--
-- Table structure for table `profileimg`
--

CREATE TABLE `profileimg` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `statusImg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `p_gallery`
--

CREATE TABLE `p_gallery` (
  `idGallery` int(11) NOT NULL,
  `titleGallery` longtext NOT NULL,
  `descGallery` longtext NOT NULL,
  `imgFullNameGallery` longtext NOT NULL,
  `orderGallery` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `p_gallery`
--

INSERT INTO `p_gallery` (`idGallery`, `titleGallery`, `descGallery`, `imgFullNameGallery`, `orderGallery`) VALUES
(7, 'testing1', 'testing1', 'testing1.62e200819734e5.09841343.jpg', '1'),
(9, 'Monitor & PC Delivery', 'Assets were arranged in office', 'testing-3.62e212cded7777.57522803.jpeg', '3'),
(10, 'Penyediaan PC AKNS', 'Di bilik Juruteknik', 'pc-agihan.62eb6df0167541.23144011.jpeg', '4');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersName` varchar(128) NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `usersUid` varchar(128) NOT NULL,
  `usersPwd` varchar(128) NOT NULL,
  `roleAs` tinyint(4) NOT NULL DEFAULT 0,
  `statusUser` tinyint(1) NOT NULL DEFAULT 0,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersName`, `usersEmail`, `usersUid`, `usersPwd`, `roleAs`, `statusUser`, `createdAt`) VALUES
(2, 'SuperAdmin', 'superadmin@something.mail', 'SuperAdmin', '$2y$10$mIe68t5hPM6Ox7MNhEWio.xzg7c5vPZKzePW1v6qYikeST178SmA6', 1, 0, '2022-07-26 06:32:47'),
(3, 'dummyuser', 'user@something.mail', 'dummyuser', '$2y$10$ThP61yaNc4xn/8.A89x9huLh/jAMnOQg6AC/WVqbY70yksF575Rym', 0, 0, '2022-08-02 07:58:46'),
(4, 'Hamid Hamzah', 'hamid@user.gmail.com', 'hamiduser', '$2y$10$tH96uP/QG4GZ5MsBpFaCT.WA/PEv/swCpj1Du.WQv6rOq1BtSJeuW', 0, 0, '2022-08-02 08:12:45'),
(5, 'user4', 'user4@something.com', 'user4', '$2y$10$bSKN.c8mf1H/Ep6hz1Nzguy9V.N5rzMkP/kbnrCMcoIgwzzA1Cdw6', 0, 0, '2022-08-04 08:21:06'),
(6, 'Manager Admin', 'admin2@g.com', 'admin2', '$2y$10$5FFalHY9KifuvaJm.SGs/edOoR7/ZRbgirTzOqrtmMZquPOWi7iki', 0, 0, '2022-08-05 02:53:04');

-- --------------------------------------------------------

--
-- Table structure for table `v_gallery`
--

CREATE TABLE `v_gallery` (
  `v_id` int(100) NOT NULL,
  `descVideo` longtext NOT NULL,
  `v_title` varchar(255) DEFAULT NULL,
  `orderVideo` longtext NOT NULL,
  `vidFullNameGallery` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `v_gallery`
--

INSERT INTO `v_gallery` (`v_id`, `descVideo`, `v_title`, `orderVideo`, `vidFullNameGallery`) VALUES
(8, 'Taken by Muhammad Fadhil', 'Francis retake', '3', 'video62e9cc41eae830.56376178.mp4'),
(10, 'shot by syahrul', 'Second cut', '2', 'video62ea1ba57900c6.44862049.mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profileimg`
--
ALTER TABLE `profileimg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_gallery`
--
ALTER TABLE `p_gallery`
  ADD PRIMARY KEY (`idGallery`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- Indexes for table `v_gallery`
--
ALTER TABLE `v_gallery`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `profileimg`
--
ALTER TABLE `profileimg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `p_gallery`
--
ALTER TABLE `p_gallery`
  MODIFY `idGallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `v_gallery`
--
ALTER TABLE `v_gallery`
  MODIFY `v_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
