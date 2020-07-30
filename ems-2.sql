-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 29, 2019 at 09:17 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ems`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE `Admin` (
  `A_adminID` varchar(200) NOT NULL,
  `A_password` varchar(200) NOT NULL,
  `A_adminName` varchar(200) NOT NULL,
  `A_adminEmail` varchar(200) NOT NULL,
  `A_adminTel` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Admin`
--

INSERT INTO `Admin` (`A_adminID`, `A_password`, `A_adminName`, `A_adminEmail`, `A_adminTel`) VALUES
('admin', 'admin', 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `Booking`
--

CREATE TABLE `Booking` (
  `B_bookingID` varchar(200) NOT NULL,
  `EOd_orderID` varchar(200) NOT NULL,
  `V_venueID` varchar(200) NOT NULL,
  `EP_packageID` varchar(200) NOT NULL,
  `eventPrice` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE `Customer` (
  `C_customerID` varchar(200) NOT NULL,
  `C_name` varchar(200) NOT NULL,
  `C_email` varchar(200) NOT NULL,
  `C_telNo` varchar(200) NOT NULL,
  `C_password` varchar(200) NOT NULL,
  `E_eventID` varchar(200) NOT NULL,
  `E_paymentID` varchar(200) NOT NULL,
  `EO_eventOrgID` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Customer`
--

INSERT INTO `Customer` (`C_customerID`, `C_name`, `C_email`, `C_telNo`, `C_password`, `E_eventID`, `E_paymentID`, `EO_eventOrgID`) VALUES
('C_1', 'asdasd', '123123', '123123', '123ABcd456', '', '', ''),
('C_2', 'tan wei neng', 'weinengt@yahoo.com', '01117688559', '123Abcd456', '', '', ''),
('C_3', 'tan', 'weinengt@yahoo.com', '01117688559', '123ABcd456', '', '', ''),
('C_4', 'tan', 'weinengt97@gmail.com', '01231231', '123Abcd456', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `Equipment`
--

CREATE TABLE `Equipment` (
  `EQ_equipmentID` varchar(200) NOT NULL,
  `EQ_equipmentName` varchar(200) NOT NULL,
  `EQ_category` varchar(200) NOT NULL,
  `EQ_quantityAvailable` int(11) NOT NULL,
  `EQ_price` float NOT NULL,
  `EQ_detail` varchar(200) NOT NULL,
  `EQ_status` varchar(200) NOT NULL,
  `S_supplierID` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Equipment`
--

INSERT INTO `Equipment` (`EQ_equipmentID`, `EQ_equipmentName`, `EQ_category`, `EQ_quantityAvailable`, `EQ_price`, `EQ_detail`, `EQ_status`, `S_supplierID`) VALUES
('EP_1', 'Balloon', 'Balloon', 100, 1, 'Balloon', 'Available', 'S_1');

-- --------------------------------------------------------

--
-- Table structure for table `Equipment_Order`
--

CREATE TABLE `Equipment_Order` (
  `EOd_orderID` varchar(200) NOT NULL,
  `C_customerID` varchar(200) NOT NULL,
  `EQ_equipmentID` varchar(200) NOT NULL,
  `EOd_quantity` int(11) NOT NULL,
  `EOd_totalPrice` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Equipment_Order`
--

INSERT INTO `Equipment_Order` (`EOd_orderID`, `C_customerID`, `EQ_equipmentID`, `EOd_quantity`, `EOd_totalPrice`) VALUES
('EOD_1', 'C_1', 'EP_1', 1, 100),
('EOD_2', 'C_2', 'EP_2', 2, 200);

-- --------------------------------------------------------

--
-- Table structure for table `Event`
--

CREATE TABLE `Event` (
  `E_eventID` varchar(200) NOT NULL,
  `E_eventName` varchar(200) NOT NULL,
  `B_bookingID` varchar(200) NOT NULL,
  `E_dateStart` date NOT NULL,
  `E_dateEnd` date NOT NULL,
  `E_timeStart` time NOT NULL,
  `E_timeEnd` time NOT NULL,
  `P_paymentID` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Event`
--

INSERT INTO `Event` (`E_eventID`, `E_eventName`, `B_bookingID`, `E_dateStart`, `E_dateEnd`, `E_timeStart`, `E_timeEnd`, `P_paymentID`) VALUES
('EV_1', 'Birthday', 'BK_1', '2019-04-29', '2019-04-30', '09:00:00', '13:00:00', 'PY_1');

-- --------------------------------------------------------

--
-- Table structure for table `Event_Organizer`
--

CREATE TABLE `Event_Organizer` (
  `EO_eventOrgID` varchar(200) NOT NULL,
  `EO_companyName` varchar(200) NOT NULL,
  `EO_emailAddress` varchar(200) NOT NULL,
  `EO_password` varchar(200) NOT NULL,
  `EO_telNo` varchar(200) NOT NULL,
  `EO_status` varchar(200) NOT NULL,
  `E_eventID` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Event_Organizer`
--

INSERT INTO `Event_Organizer` (`EO_eventOrgID`, `EO_companyName`, `EO_emailAddress`, `EO_password`, `EO_telNo`, `EO_status`, `E_eventID`) VALUES
('C_1', '123123', '123123', '123Abcd456', '123123', '', ''),
('C_2', 'balloon', 'weinengt@yahoo.com', '123Abcd456', '12323432', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `Event_Package`
--

CREATE TABLE `Event_Package` (
  `EP_packageID` varchar(200) NOT NULL,
  `EP_packageName` varchar(200) NOT NULL,
  `S_supplierID` varchar(200) NOT NULL,
  `EP_packagePrice` float DEFAULT NULL,
  `EP_category` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Payment_Record`
--

CREATE TABLE `Payment_Record` (
  `P_paymentID` varchar(200) NOT NULL,
  `eventPrice` float NOT NULL,
  `P_paymentDate` date NOT NULL,
  `P_paymentTime` time NOT NULL,
  `P_verificationStatus` varchar(200) NOT NULL,
  `P_receiptID` varchar(200) NOT NULL,
  `P_invoiceID` varchar(200) NOT NULL,
  `C_customerID` varchar(200) NOT NULL,
  `E_eventID` varchar(200) NOT NULL,
  `B_bookingID` varchar(200) NOT NULL,
  `P_paymentMethod` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Rating`
--

CREATE TABLE `Rating` (
  `R_rateID` varchar(200) NOT NULL,
  `C_customerID` varchar(200) NOT NULL,
  `S_supplierID` varchar(200) NOT NULL,
  `R_rate` int(11) NOT NULL,
  `R_date` date NOT NULL,
  `R_comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Supplier`
--

CREATE TABLE `Supplier` (
  `S_supplierID` varchar(200) NOT NULL,
  `S_SSMNo` varchar(200) NOT NULL,
  `S_CompanyName` varchar(200) NOT NULL,
  `S_emailAddress` varchar(200) NOT NULL,
  `S_password` varchar(200) NOT NULL,
  `S_supplierType` varchar(200) NOT NULL,
  `S_phoneNo` varchar(200) NOT NULL,
  `S_status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Supplier`
--

INSERT INTO `Supplier` (`S_supplierID`, `S_SSMNo`, `S_CompanyName`, `S_emailAddress`, `S_password`, `S_supplierType`, `S_phoneNo`, `S_status`) VALUES
('1', '123123', 'dasd', 'asdqwd', '123Abcd456', 'EVENT', '123213', 'pending'),
('S_1', '123123', '456456', 'weinengt@yahoo.com', '123Abcd456', 'EVENT', '32423423', 'approved'),
('S_3', 'asdasd', 'sdfsdf', 'asdasd', '123Abcd456', 'EVENT', '123123', 'approved'),
('S_4', '567890', 'Birthday party', 'weinengt97@yahoo.com', '123Abcd456', 'EQUIPMENT', '01231232345', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `Venue`
--

CREATE TABLE `Venue` (
  `V_venueID` varchar(200) NOT NULL,
  `V_venueName` varchar(200) NOT NULL,
  `V_venuePrice` float NOT NULL,
  `V_status` varchar(200) NOT NULL,
  `S_supplierID` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`A_adminID`);

--
-- Indexes for table `Booking`
--
ALTER TABLE `Booking`
  ADD PRIMARY KEY (`B_bookingID`);

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`C_customerID`);

--
-- Indexes for table `Equipment`
--
ALTER TABLE `Equipment`
  ADD PRIMARY KEY (`EQ_equipmentID`);

--
-- Indexes for table `Equipment_Order`
--
ALTER TABLE `Equipment_Order`
  ADD PRIMARY KEY (`EOd_orderID`);

--
-- Indexes for table `Event`
--
ALTER TABLE `Event`
  ADD PRIMARY KEY (`B_bookingID`);

--
-- Indexes for table `Event_Organizer`
--
ALTER TABLE `Event_Organizer`
  ADD PRIMARY KEY (`EO_eventOrgID`);

--
-- Indexes for table `Event_Package`
--
ALTER TABLE `Event_Package`
  ADD PRIMARY KEY (`EP_packageID`);

--
-- Indexes for table `Payment_Record`
--
ALTER TABLE `Payment_Record`
  ADD PRIMARY KEY (`P_paymentID`);

--
-- Indexes for table `Rating`
--
ALTER TABLE `Rating`
  ADD PRIMARY KEY (`R_rateID`);

--
-- Indexes for table `Supplier`
--
ALTER TABLE `Supplier`
  ADD PRIMARY KEY (`S_supplierID`);

--
-- Indexes for table `Venue`
--
ALTER TABLE `Venue`
  ADD PRIMARY KEY (`V_venueID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
