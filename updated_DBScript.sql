-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 18, 2019 at 08:29 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
 Create Database if not exists `cars`;
USE cars;
--

-- --------------------------------------------------------
--
-- Table structure for table `admin`
--
DROP TABLE IF EXISTS `messege`;
CREATE TABLE IF NOT EXISTS `messege` (
`MessegeID` int(255) NOT NULL AUTO_INCREMENT,
  `FirstName` int(255) NOT NULL ,
  `LastName` varchar(255)  NOT NULL,
  `Country` varchar(255)  NOT NULL,
  `Subject` varchar(255)   NOT NULL,
  PRIMARY KEY (`MessegeID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 ;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(100)  NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `email` varchar(100)  NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255)  NOT NULL,
  PRIMARY KEY (`admin_id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `FirstName`, `LastName`, `email`, `username`, `password`) VALUES
(1, '', '', '', 'admin', 'admin'),
(2, 'admin', 'admin', 'admin@gmail.com', 'test2admin', 'test2\r\n ');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `BookingID` int(11) NOT NULL AUTO_INCREMENT,
  `UserID` int(11) NOT NULL,
  `CarID` int(11) NOT NULL,
  `PeriodID` int(11) NOT NULL,
  `BookingFrom` date NOT NULL,
  `BookingTo` date NOT NULL,
  `BookingPrice` int(11) NOT NULL,
  `CreatedON` date NOT NULL,
  `ModifiedON` date NOT NULL,
  `BookingStatusID` int(11) NOT NULL,
  PRIMARY KEY (`BookingID`),
  KEY `UserID` (`UserID`),
  KEY `CarID` (`CarID`),
  KEY `PeriodID` (`PeriodID`),
  KEY `BookingPrice` (`BookingPrice`),
  KEY `BookingStatusID` (`BookingStatusID`),
  KEY `BookingID` (`BookingID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`BookingID`, `UserID`, `CarID`, `PeriodID`, `BookingFrom`, `BookingTo`, `BookingPrice`, `CreatedON`, `ModifiedON`, `BookingStatusID`) VALUES
(1, 14, 9, 1, '2019-09-15', '2019-09-20', 250, '2019-09-15', '2019-09-15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bookingstatus`
--

DROP TABLE IF EXISTS `bookingstatus`;
CREATE TABLE IF NOT EXISTS `bookingstatus` (
  `ID` int(11) NOT NULL,
  `Status` varchar(255) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `Status` (`Status`),
  KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=ujis ;

--
-- Dumping data for table `bookingstatus`
--

INSERT INTO `bookingstatus` (`ID`, `Status`) VALUES
(1, 'Active'),
(3, 'CanceledByAdmin'),
(2, 'CanceledByUser'),
(4, 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `carprice`
--

DROP TABLE IF EXISTS `carprice`;
CREATE TABLE IF NOT EXISTS `carprice` (
  `CarPriceID` int(11) NOT NULL AUTO_INCREMENT,
  `PricePerDay` int(11) NOT NULL,
  `BasseCurrencyID` int(11) NOT NULL,
  `CreatedON` date DEFAULT NULL,
  `ModifiedOn` date DEFAULT NULL,
  PRIMARY KEY (`CarPriceID`),
  KEY `CurrencyID` (`BasseCurrencyID`),
  KEY `PricePerDay` (`PricePerDay`),
  KEY `CarPriceID` (`CarPriceID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

DROP TABLE IF EXISTS `cars`;
CREATE TABLE IF NOT EXISTS `cars` (
  `car_id` int(11) NOT NULL AUTO_INCREMENT,
  `car_brand` varchar(255)  NOT NULL,
  `car_model` varchar(255)  NOT NULL,
  `YearOfManufacturing` int(11) NOT NULL,
  `image` text COLLATE utf8_bin NOT NULL,
  `capacity` int(11) NOT NULL,
  `doors` int(11) NOT NULL,
  `Engine` varchar(45)  NOT NULL,
  `Gearbox` varchar(45)  NOT NULL,
  `status` varchar(255)  NOT NULL,
  `CreatedOn` date DEFAULT NULL,
  `ModifiedOn` date DEFAULT NULL,
  `hire_cost` int(11) NOT NULL,
  PRIMARY KEY (`car_id`),
  KEY `brand` (`car_brand`),
  KEY `hire_cost` (`hire_cost`),
  KEY `car_id` (`car_id`),
  KEY `status` (`status`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 ;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`car_id`, `car_brand`, `car_model`, `YearOfManufacturing`, `image`, `capacity`, `doors`, `Engine`, `Gearbox`, `status`, `CreatedOn`, `ModifiedOn`, `hire_cost`) VALUES
(2, 'Range Rover', 'Evoque', 2018, 'car2.jpg', 6, 5, 'Gasoline', 'Automatic', 'Available', '2019-09-08', '2019-09-08', 33),
(3, 'Toyota', 'Supra', 2020, 'car3.jpg', 2, 3, 'Gasoline', 'Manual', 'Available', '2019-09-08', '2019-09-08', 45),
(5, 'Toyota', 'Land Cruiser ', 2009, 'images (2).jpg', 6, 5, 'Diesel', 'Manual', 'Available', '2019-09-08', '2019-09-08', 23),
(6, 'BMW', '520', 2019, '630.jpg', 4, 3, 'Diesel', 'Automatic', 'Available', '2019-09-08', '2019-09-08', 11),
(7, 'Volkswagen', 'Mk 7', 2018, 'golf7.jpg', 5, 3, 'Diesel', 'Manual', 'Available', '2019-09-08', '2019-09-08', 59),
(8, 'Tesla', 'Model S', 2018, 'teslaS.jpg', 8, 5, 'Electric', 'Automatic', 'Available', '2019-09-08', '2019-09-08', 39),
(9, 'Mercedes Benz', 'E class', 2016, 'car1.jpg', 2, 3, 'Gasoline', 'Automatic', 'Available', '2019-09-12', '2019-09-12', 70);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

DROP TABLE IF EXISTS `city`;
CREATE TABLE IF NOT EXISTS `city` (
  `CityID` int(11) NOT NULL AUTO_INCREMENT,
  `CountryID` int(11) NOT NULL,
  `City` varchar(100) NOT NULL,
  PRIMARY KEY (`CityID`),
  KEY `CityID` (`CityID`),
  KEY `CountryIDCity` (`CountryID`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`CityID`, `CountryID`, `City`) VALUES
(1, 1, 'Bavaria'),
(2, 1, 'Berlin'),
(3, 2, 'Sofia'),
(4, 2, 'Burgas');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

DROP TABLE IF EXISTS `country`;
CREATE TABLE IF NOT EXISTS `country` (
  `CountryID` int(12) NOT NULL AUTO_INCREMENT,
  `Country` varchar(50) NOT NULL,
  PRIMARY KEY (`CountryID`),
  UNIQUE KEY `Country` (`Country`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`CountryID`, `Country`) VALUES
(2, 'Bulgaria'),
(1, 'Germany');

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

DROP TABLE IF EXISTS `currency`;
CREATE TABLE IF NOT EXISTS `currency` (
  `CurrencyID` int(11) NOT NULL,
  `CurrencyCode` int(11) NOT NULL,
  PRIMARY KEY (`CurrencyID`),
  KEY `CurrencyCode` (`CurrencyCode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `penalty`
--

DROP TABLE IF EXISTS `penalty`;
CREATE TABLE IF NOT EXISTS `penalty` (
  `ID` int(11) NOT NULL,
  `PenaltyPerDay` int(11) NOT NULL,
  `BaseCurrencyID` int(11) NOT NULL,
  `CreatedON` date NOT NULL,
  `ModifiedON` date NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `BaseCurrencyID` (`BaseCurrencyID`),
  KEY `PenaltyPerDay` (`PenaltyPerDay`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ;

-- --------------------------------------------------------

--
-- Table structure for table `period`
--

DROP TABLE IF EXISTS `period`;
CREATE TABLE IF NOT EXISTS `period` (
  `PeriodID` int(11) NOT NULL AUTO_INCREMENT,
  `Period` varchar(255)  NOT NULL,
  PRIMARY KEY (`PeriodID`),
  KEY `Period` (`Period`),
  KEY `PeriodID` (`PeriodID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ;

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

DROP TABLE IF EXISTS `rent`;
CREATE TABLE IF NOT EXISTS `rent` (
  `RentID` int(11) NOT NULL,
  `BookingID` int(11) DEFAULT NULL,
  `PeriodID` int(11) NOT NULL,
  `RentFrom` varchar(255) NOT NULL,
  `RentTo` varchar(255) NOT NULL,
  `UserID` int(11) NOT NULL,
  `RentPrice` int(11) NOT NULL,
  `FinalPrice` int(11) NOT NULL,
  `CreatedON` date NOT NULL,
  `ModifiedON` date NOT NULL,
  `ReturnedON` date NOT NULL,
  `Status` varchar(255) NOT NULL,
  `PenaltyPrice` int(11) NOT NULL,
  `RentPricePaidOn` int(11) NOT NULL,
  `PenaltyPriceON` int(11) NOT NULL,
  PRIMARY KEY (`RentID`),
  UNIQUE KEY `UserID` (`UserID`),
  KEY `BookingID` (`BookingID`),
  KEY `PeriodID` (`PeriodID`),
  KEY `RentFrom` (`RentFrom`),
  KEY `RentTo` (`RentTo`),
  KEY `RentPrice` (`RentPrice`),
  KEY `FinalPrice` (`FinalPrice`),
  KEY `Status` (`Status`),
  KEY `PenaltyPrice` (`PenaltyPrice`),
  KEY `RentPricePaidOn` (`RentPricePaidOn`),
  KEY `PenaltyPriceON` (`PenaltyPriceON`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `rentpenalty`
--

DROP TABLE IF EXISTS `rentpenalty`;
CREATE TABLE IF NOT EXISTS `rentpenalty` (
  `ID` int(11) NOT NULL,
  `RentID` int(11) NOT NULL,
  `PeriodID` int(11) NOT NULL,
  `PenaltyAmount` int(11) NOT NULL,
  `FinalPenalty` int(11) NOT NULL,
  `BaseCurrencyID` int(11) NOT NULL,
  `CreatedON` date NOT NULL,
  `ModifiedON` date NOT NULL,
  `PaidON` date NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `RentID` (`RentID`),
  KEY `PeriodID` (`PeriodID`),
  KEY `BaseCurrencyID` (`BaseCurrencyID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ;

-- --------------------------------------------------------

--
-- Table structure for table `rentstatus`
--

DROP TABLE IF EXISTS `rentstatus`;
CREATE TABLE IF NOT EXISTS `rentstatus` (
  `ID` int(11) NOT NULL,
  `Status` varchar(255)  NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `Status` (`Status`),
  KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ;

--
-- Dumping data for table `rentstatus`
--

INSERT INTO `rentstatus` (`ID`, `Status`) VALUES
(1, 'Active'),
(3, 'CarNotReturned'),
(2, 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(45) NOT NULL,
  `LastName` varchar(45) NOT NULL,
  `CountryID` int(11) NOT NULL,
  `CityID` int(11) NOT NULL,
  `Address` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `CreatedON` date NOT NULL,
  `ModifiedON` date NOT NULL,
  PRIMARY KEY (`client_id`),
  UNIQUE KEY `uni_email_username` (`email`,`username`),
  KEY `CountryID` (`CountryID`),
  KEY `CityID` (`CityID`),
  KEY `client_id` (`client_id`),
  KEY `FirstName` (`FirstName`),
  KEY `LastName` (`LastName`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`client_id`, `FirstName`, `LastName`, `CountryID`, `CityID`, `Address`, `email`, `username`, `password`, `CreatedON`, `ModifiedON`) VALUES
(2, 'Ivan', 'Georgiev', 1, 1, '', 'mail@yahoo.com', 'kroks', '1234', '2019-09-08', '2019-09-08'),
(3, 'Cristian', 'Dalby', 2, 2, '', 'mail@gmail.com', 'panda', '4567', '2019-09-08', '2019-09-08'),
(4, 'Adelle', 'Lyons', 1, 1, '', 'mail@gmail.com', 'hello', '9119', '2019-09-08', '2019-09-08'),
(14, 'test', 'test', 2, 3, 'test', 'test@test.test', 'test', 'test', '2019-09-12', '2019-09-12'),
(15, 'Lilqna', 'Angelova', 2, 3, 'zhk. Durvenica', 'akamaru_96@abv.bg', 'Lili', '19011901', '2019-09-13', '2019-09-13');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`UserID`) REFERENCES `user` (`client_id`),
  ADD CONSTRAINT `booking_ibfk_3` FOREIGN KEY (`CarID`) REFERENCES `cars` (`car_id`),
  ADD CONSTRAINT `booking_ibfk_6` FOREIGN KEY (`BookingStatusID`) REFERENCES `bookingstatus` (`ID`);

--
-- Constraints for table `carprice`
--
ALTER TABLE `carprice`
  ADD CONSTRAINT `CurrencyID` FOREIGN KEY (`BasseCurrencyID`) REFERENCES `currency` (`CurrencyID`);

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `CountryIDCity` FOREIGN KEY (`CountryID`) REFERENCES `country` (`CountryID`);

--
-- Constraints for table `penalty`
--
ALTER TABLE `penalty`
  ADD CONSTRAINT `penalty_ibfk_1` FOREIGN KEY (`BaseCurrencyID`) REFERENCES `currency` (`CurrencyID`);

--
-- Constraints for table `period`
--
ALTER TABLE `period`
  ADD CONSTRAINT `period_ibfk_1` FOREIGN KEY (`PeriodID`) REFERENCES `rentpenalty` (`PeriodID`);

--
-- Constraints for table `rent`
--
ALTER TABLE `rent`
  ADD CONSTRAINT `rent_ibfk_1` FOREIGN KEY (`BookingID`) REFERENCES `booking` (`BookingID`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `CityID` FOREIGN KEY (`CityID`) REFERENCES `city` (`CityID`),
  ADD CONSTRAINT `CountryID` FOREIGN KEY (`CountryID`) REFERENCES `country` (`CountryID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
CREATE TABLE IF NOT EXISTS `penalty` (   `ID` int(11) NOT NULL,   `PenaltyPerDay` int(11) NOT NULL,   `BaseCurrencyID` int(11) NOT NULL,   `CreatedON` date NOT NULL,   `ModifiedON` date NOT NULL,   PRIMARY KEY (`ID`),   KEY `BaseCurrencyID` (`BaseCurrencyID`),   KEY `PenaltyPerDay` (`PenaltyPerDay`) ) ENGINE=InnoDB DEFAULT CHARSET=utf8   -- --------------------------------------------------------  -- -- Table structure for table `period` --  DROP TABLE IF EXISTS `period`
