-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2020 at 08:30 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zechlibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `ISBN` varchar(255) NOT NULL,
  `Title` varchar(255) DEFAULT NULL,
  `Author_LastName` varchar(255) DEFAULT NULL,
  `Author_FirstName` varchar(255) DEFAULT NULL,
  `Copies` int(100) NOT NULL,
  `Available` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`ISBN`, `Title`, `Author_LastName`, `Author_FirstName`, `Copies`, `Available`) VALUES
('514651465', 'Sweet Martha', 'Cookie', 'Monster', 17, 10),
('54534', 'Lego Movie', 'Lego', 'Man', 23, 12),
('5484', 'Where the Book Goes', 'fdasads', 'ere', 14, 13),
('978-255-1452', 'Where the Wild Things Are', 'Jane', 'Goodall', 50, 46);

-- --------------------------------------------------------

--
-- Table structure for table `book_checkout`
--

CREATE TABLE IF NOT EXISTS `book_checkout` (
  `patronID` int(100) NOT NULL,
  `ISBN` varchar(32) NOT NULL,
  `Date_Checked_Out` date NOT NULL,
  `Due_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_checkout`
--

INSERT INTO `book_checkout` (`patronID`, `ISBN`, `Date_Checked_Out`, `Due_Date`) VALUES
(1, '5484', '0000-00-00', '0000-00-00'),
(1, '5484', '0000-00-00', '0000-00-00'),
(1, '5484', '2020-04-25', '2020-04-25'),
(1, '5484', '2020-04-25', '2020-04-25'),
(14, '5484', '2020-04-26', '2020-04-26'),
(14, '5484', '2020-04-26', '2020-04-26'),
(14, '54534', '2020-04-26', '2020-04-26'),
(14, '54534', '2020-04-26', '2020-04-26'),
(14, '54534', '2020-04-26', '2020-04-26'),
(14, '54534', '2020-04-26', '2020-04-26'),
(14, '54534', '2020-04-26', '0000-00-00'),
(14, '54534', '2020-04-26', '0000-00-00'),
(14, '5484', '2020-04-26', '0000-00-00'),
(14, '5484', '2020-04-26', '0000-00-00'),
(14, '5484', '2020-04-26', '2020-04-26'),
(14, '5484', '2020-04-26', '2020-04-26'),
(14, '5484', '2020-04-26', '2020-04-26'),
(14, '5484', '2020-04-26', '2020-04-26'),
(14, '54534', '2020-04-26', '2020-05-10'),
(14, '54534', '2020-04-26', '2020-05-10'),
(14, '54534', '2020-04-26', '2020-05-10'),
(14, '54534', '2020-04-26', '2020-05-10'),
(14, '54534', '2020-04-26', '2020-05-10'),
(14, '54534', '2020-04-26', '2020-05-10'),
(14, '54534', '2020-04-26', '2020-05-10'),
(14, '54534', '2020-04-26', '2020-05-10'),
(14, '54534', '2020-04-26', '2020-05-10'),
(14, '54534', '2020-04-26', '2020-05-10'),
(14, '54534', '2020-04-26', '2020-05-10'),
(14, '54534', '2020-04-26', '2020-05-10'),
(14, '514651465', '2020-04-28', '2020-05-12'),
(14, '514651465', '2020-04-28', '2020-05-12'),
(14, '514651465', '2020-04-28', '2020-05-12'),
(14, '514651465', '2020-04-28', '2020-05-12'),
(14, '514651465', '2020-04-28', '2020-05-12'),
(14, '514651465', '2020-04-28', '2020-05-12'),
(14, '54534', '2020-04-29', '2020-05-13'),
(14, '54534', '2020-04-29', '2020-05-13'),
(14, '5484', '2020-04-29', '2020-05-13'),
(14, '5484', '2020-04-29', '2020-05-13'),
(14, '978-255-1452', '2020-04-29', '2020-05-13'),
(14, '978-255-1452', '2020-04-29', '2020-05-13'),
(14, '978-255-1452', '2020-04-29', '2020-05-13'),
(14, '978-255-1452', '2020-04-29', '2020-05-13'),
(14, '514651465', '2020-04-29', '2020-05-13'),
(14, '514651465', '2020-04-29', '2020-05-13');

-- --------------------------------------------------------

--
-- Table structure for table `patron`
--

CREATE TABLE IF NOT EXISTS `patron` (
`Id` int(11) NOT NULL,
  `First_Name` varchar(32) NOT NULL,
  `Last_Name` varchar(32) NOT NULL,
  `Phone_Number` varchar(10) NOT NULL,
  `State` varchar(32) NOT NULL,
  `City` varchar(32) NOT NULL,
  `Zip_Code` varchar(5) NOT NULL,
  `Veteran_Status` tinyint(1) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patron`
--

INSERT INTO `patron` (`Id`, `First_Name`, `Last_Name`, `Phone_Number`, `State`, `City`, `Zip_Code`, `Veteran_Status`, `Email`) VALUES
(1, 'Aaron', 'Zech', '6517175421', 'MN', 'BLAINE', '55449', 0, ''),
(2, 'Aaron', 'Zech', '6517175421', 'FL', 'BLAINE', '55449', 1, ''),
(3, 'Aaron', 'Zech', '6517175421', 'FL', 'BLAINE', '55449', 1, ''),
(4, 'Aaron', 'Zech', '6517175421', 'FL', 'BLAINE', '55449', 1, ''),
(5, 'Aaron', 'Zech', '6517175421', 'FL', 'BLAINE', '55449', 1, ''),
(6, 'Aaron', 'Zech', '6517175421', 'FL', 'BLAINE', '55449', 1, ''),
(7, 'Aaron', 'Zech', '6517175421', 'FL', 'BLAINE', '55449', 1, ''),
(8, 'Aaron', 'Zech', '6517175421', 'FL', 'BLAINE', '55449', 1, ''),
(9, 'Aaron', 'Zech', '6517175421', 'FL', 'BLAINE', '55449', 1, ''),
(10, 'Aaron', 'Zech', '6517175421', 'FL', 'BLAINE', '55449', 1, ''),
(11, 'Aaron', 'Zech', '6517175421', 'FL', 'BLAINE', '55449', 1, ''),
(12, 'Aaron', 'Zech', '6517175421', 'FL', 'BLAINE', '55449', 1, ''),
(13, 'Aaron', 'Zech', '6517175421', 'FL', 'BLAINE', '55449', 1, 'aaronzech@gmail.com'),
(14, 'John', 'Doe', '6517775555', 'AL', 'Town', '48815', 0, 'JohnDoe@gmail.com'),
(15, 'Max', 'Jones', '787-585-45', 'HI', 'Maui', '14458', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Username`, `Email`, `Password`) VALUES
('user1', 'aaronzech@gmail.com', '6512bd43d9caa6e02c990b0a82652dca'),
('EmailTester1222@gmail.com', 'EmailTester1222@gmail.com', '6512bd43d9caa6e02c990b0a82652dca'),
('MaleficentCoast', 'user1@gmail.com', '202cb962ac59075b964b07152d234b70'),
('', '', 'd41d8cd98f00b204e9800998ecf8427e'),
('admin', 'libraryadmin@gmail.com', '21232f297a57a5a743894a0e4a801fc3'),
('patron1', 'partron1@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
('John', 'john@gmail.com', '527bd5b5d689e2c32ae974c6229ff785'),
('JohnDoe', 'JohnDoe@gmail.com', '9fd9f63e0d6487537569075da85a0c7f');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
 ADD PRIMARY KEY (`ISBN`);

--
-- Indexes for table `book_checkout`
--
ALTER TABLE `book_checkout`
 ADD KEY `patronID` (`patronID`), ADD KEY `ISBN` (`ISBN`);

--
-- Indexes for table `patron`
--
ALTER TABLE `patron`
 ADD PRIMARY KEY (`Id`), ADD KEY `Email` (`Email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patron`
--
ALTER TABLE `patron`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `book_checkout`
--
ALTER TABLE `book_checkout`
ADD CONSTRAINT `ISBN` FOREIGN KEY (`ISBN`) REFERENCES `book` (`ISBN`) ON DELETE CASCADE,
ADD CONSTRAINT `book_checkout_ibfk_1` FOREIGN KEY (`ISBN`) REFERENCES `book` (`ISBN`),
ADD CONSTRAINT `book_checkout_ibfk_2` FOREIGN KEY (`patronID`) REFERENCES `patron` (`Id`);

--
-- Constraints for table `patron`
--
ALTER TABLE `patron`
ADD CONSTRAINT `patron_ibfk_1` FOREIGN KEY (`Email`) REFERENCES `users` (`Email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
