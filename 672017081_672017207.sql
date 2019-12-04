-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2019 at 06:00 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `672017081_672017207`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `Book_ID` int(100) NOT NULL,
  `Book_Tittle` varchar(50) NOT NULL,
  `Author_Name` varchar(50) NOT NULL,
  `Publisher_Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`Book_ID`, `Book_Tittle`, `Author_Name`, `Publisher_Name`) VALUES
(1, '', '', ''),
(2, 'Nihonggo Mantappu', 'Jerome Polin', 'Gramedia'),
(3, '', '', ''),
(4, '', '', ''),
(5, '', '', ''),
(6, 'Dillan 1991', 'P. Baiq', ''),
(7, '', '', ''),
(8, '', '', ''),
(9, 'Dillan 1990', 'P. Baiq', 'Gramedia'),
(10, 'Dillan 1992', 'P. Baiq', 'Gramedia'),
(11, 'Naruto', 'M.Kishimoto', 'Jump'),
(12, 'Naruto Shippuden', 'M.Kishimoto', 'Jump'),
(13, 'One Piece', 'ODA', 'Jump'),
(14, 'Dragon Ball', 'ODA', 'Jump'),
(15, 'Dragon Ball z', 'ODA', 'Jump'),
(16, 'Dragon Ball GT', 'ODA', 'Jump'),
(17, 'Dragon Ball Super', 'ODA', 'Jump'),
(18, 'Mickey Mouse', 'Walt Disney', 'Disney'),
(19, 'Donald Duck', 'Walt Disney', 'Disney'),
(20, 'Spiderman', 'Stan Lee', 'Marvel'),
(21, 'Iron-Man', 'Stan Lee', 'Marvel');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`Book_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `Book_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
