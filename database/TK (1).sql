-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 06, 2022 at 10:39 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `TK`
--

-- --------------------------------------------------------

--
-- Table structure for table `description`
--

CREATE TABLE `description` (
  `id` int(11) NOT NULL,
  `des1` varchar(200) NOT NULL,
  `des2` varchar(200) NOT NULL,
  `des3` varchar(200) NOT NULL,
  `des4` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `description`
--

INSERT INTO `description` (`id`, `des1`, `des2`, `des3`, `des4`) VALUES
(1, 'dst1', 'dst2', 'dst3', 'dst4'),
(2, 'des1', 'des2', 'des3', 'des4'),
(3, 'qw1', 'qw2', 'qw3', 'qw4');

-- --------------------------------------------------------

--
-- Table structure for table `doc_data`
--

CREATE TABLE `doc_data` (
  `id` int(11) NOT NULL,
  `dname` varchar(200) NOT NULL,
  `dfile` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doc_data`
--

INSERT INTO `doc_data` (`id`, `dname`, `dfile`) VALUES
(1, 'test1', 'Ecommerce.doc');

-- --------------------------------------------------------

--
-- Table structure for table `pdf_data`
--

CREATE TABLE `pdf_data` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `filename` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pdf_data`
--

INSERT INTO `pdf_data` (`id`, `username`, `filename`) VALUES
(1, 'sonic 2', 'AMITKABICV.pdf'),
(2, 'sonic 2', 'AMITKABICV.pdf'),
(3, 'sonic 2', 'AMITKABICV.pdf'),
(4, 'Sanjoy', 'BUIE NEWS 2.pdf'),
(5, 'Sanjoy', 'BUIE NEWS 2.pdf'),
(6, 'Sanjoy', 'BUIE NEWS 2.pdf'),
(7, 'Sanjoy', 'BUIE NEWS 2.pdf'),
(8, 'sonic 2', 'sm.pdf'),
(9, 'sonic 2', 'sm.pdf'),
(10, 'sonic 2', 'sm.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbimg`
--

CREATE TABLE `tbimg` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbimg`
--

INSERT INTO `tbimg` (`id`, `name`, `description`, `img`) VALUES
(1, 'test', 'asnjsankasdzjbjscs\r\nlsakask\r\nsadmsak', '1659572129-Screenshot from 2022-07-02 09-56-07.png'),
(2, 'test', 'msnksksad\r\nsalmsdalmsl\r\nsadmlsaml', '1659572650-71X0a79XfnL._AC_UX385_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`) VALUES
(1, 'sanjoy', '01bf32be8c3b9a0d7555e4dcc19c7b8c'),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `description`
--
ALTER TABLE `description`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doc_data`
--
ALTER TABLE `doc_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pdf_data`
--
ALTER TABLE `pdf_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbimg`
--
ALTER TABLE `tbimg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `description`
--
ALTER TABLE `description`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `doc_data`
--
ALTER TABLE `doc_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pdf_data`
--
ALTER TABLE `pdf_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbimg`
--
ALTER TABLE `tbimg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
