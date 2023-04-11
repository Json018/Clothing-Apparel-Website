-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2022 at 10:57 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `givenname` varchar(70) NOT NULL,
  `surname` varchar(70) NOT NULL,
  `middlename` varchar(70) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phonenumber` int(15) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `givenname`, `surname`, `middlename`, `gender`, `email`, `phonenumber`, `username`, `password`) VALUES
(1, 'John', 'Doe', 'A.', 'Male', 'name123@gmail.com', 09001234567, 'JohnDoe', '1234'),
(2, 'Mark', 'Long', 'X', 'Male', 'name123@gmail.com', 09001234567, 'MarkLong', '1234'),
(3, 'Daniela', 'Go', 'Z', 'Female', 'name123@gmail.com', 09001234567, 'DanielaGo', '1234'),
(4, 'Rob', 'Joe', 'D', 'Male', 'name123@gmail.com', 09001234567, 'RobJoe', '1234'),
(5, 'Fred', 'Dean', 'G', 'Male', 'name123@gmail.com', 09001234567, 'FredDean', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
