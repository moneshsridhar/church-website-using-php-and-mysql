-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2021 at 09:35 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_final`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `color` varchar(7) DEFAULT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `color`, `start`, `end`) VALUES
(1, 'All Day Event', 'some text for all day event', '#40E0D0', '2020-12-12 00:00:00', '2020-12-02 00:00:00'),
(2, 'Long Event', 'some text for long event', '#FF0000', '2020-12-07 00:00:00', '2020-12-10 00:00:00'),
(3, 'Short Event', 'some text for repeating event', '#0071c5', '2020-12-09 16:00:00', '2020-12-09 16:30:00'),
(4, 'Conference', 'some text for conference', '#40E0D0', '2020-12-10 00:00:00', '2020-12-12 00:00:00'),
(5, 'Meeting', 'some text for meeting', '#000', '2020-12-11 10:30:00', '2020-12-11 12:30:00'),
(6, 'Lunch', 'some text for lunch', '#0071c5', '2020-12-11 12:00:00', '2020-12-11 01:00:00'),
(7, 'Happy Hour', 'some text for happy hour', '#0071c5', '2020-12-11 17:30:00', '2020-12-11 19:00:00'),
(8, 'Dinner', 'some text for dinner', '#0071c5', '2020-12-11 16:00:00', '2020-12-11 17:30:00'),
(9, 'Birthday Party', 'some text for birthday party', '#FFD700', '2020-12-13 09:00:00', '2020-12-13 12:00:00'),
(10, 'Vacation', 'some text for vacation', '#008000', '2020-12-18 00:00:00', '2020-12-21 00:00:00'),
(11, 'Shopping', 'some text for shopping', '#FF8C00', '2020-12-31 17:30:00', '2020-12-31 18:30:00'),
(12, 'Double click to change', 'some text for double click', '#000', '2020-12-22 00:00:00', '2020-12-22 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `idGallery` int(11) NOT NULL,
  `titleGallery` longtext NOT NULL,
  `descGallery` longtext NOT NULL,
  `imgFullNameGallery` longtext NOT NULL,
  `orderGallery` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`idGallery`, `titleGallery`, `descGallery`, `imgFullNameGallery`, `orderGallery`) VALUES
(13, 'new ', 'infant jesus', 'jesus.5ff01c40450cb2.54304202.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `idNews` int(11) NOT NULL,
  `descNews` longtext NOT NULL,
  `orderNews` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`idNews`, `descNews`, `orderNews`) VALUES
(1, 'Trying to update news', '1'),
(2, 'Trying to update news attempt #2', '2'),
(3, 'Updating news', '3'),
(4, 'news added', '4');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersName` varchar(128) NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `usersUid` varchar(128) NOT NULL,
  `usersPwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersName`, `usersEmail`, `usersUid`, `usersPwd`) VALUES
(1, 'Ms', 'kewoh37465@chatdays.com', 'mskewo', '$2y$10$Blak6L1j7XRk4S8ZSV5mQu.riQWJdi0fyJ96ZAxsc4ca78PrY/bEi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`idGallery`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`idNews`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `idGallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `idNews` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
