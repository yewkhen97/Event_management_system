-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2020 at 03:15 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `A_adminID` varchar(200) NOT NULL,
  `A_password` varchar(200) NOT NULL,
  `A_adminName` varchar(200) NOT NULL,
  `A_adminEmail` varchar(200) NOT NULL,
  `A_adminTel` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`A_adminID`, `A_password`, `A_adminName`, `A_adminEmail`, `A_adminTel`) VALUES
('admin', 'admin', 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `B_bookingID` varchar(200) NOT NULL,
  `EOd_orderID` varchar(200) DEFAULT NULL,
  `V_venueID` varchar(200) DEFAULT NULL,
  `EP_packageID` varchar(200) DEFAULT NULL,
  `eventPrice` float NOT NULL,
  `status` varchar(100) NOT NULL,
  `C_customerID` varchar(255) NOT NULL,
  `Order_Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`B_bookingID`, `EOd_orderID`, `V_venueID`, `EP_packageID`, `eventPrice`, `status`, `C_customerID`, `Order_Date`) VALUES
('BK_01', NULL, 'Hotel Sri Malaysia', '3461', 1200, 'paid', 'C_1', '2020-06-09'),
('BK_02', NULL, 'Hotel Sri Malaysia', '3461', 1200, 'paid', 'C_1', '2020-05-09'),
('BK_03', NULL, 'Putra Hotel', '3462', 4560, 'paid', 'C_1', '2020-03-09'),
('BK_04', NULL, 'Putra Hotel', '3464', 7000, 'paid', 'C_1', '2020-03-09'),
('BK_05', NULL, 'Hotel Sri Malaysia', '3461', 1200, 'paid', 'C_1', '2020-01-09'),
('BK_06', 'EOD_03', NULL, NULL, 5, 'paid', 'C_2', '2020-05-09'),
('BK_07', NULL, 'Hotel Sri Malaysia', '3461', 9000, 'paid', 'C_2', '2020-04-09'),
('BK_08', NULL, 'Hotel Sri Malaysia', '3463', 3200, 'paid', 'C_2', '2020-02-09'),
('BK_09', 'EOD_09', NULL, NULL, 2, 'paid', 'C_2', '2020-02-09'),
('BK_10', 'EOD_10', NULL, NULL, 56, 'paid', 'C_2', '2020-06-09'),
('BK_11', 'EOD_11', NULL, NULL, 3, 'paid', 'C_2', '2020-06-09'),
('BK_12', 'EOD_12', NULL, NULL, 5, 'paid', 'C_2', '2020-04-09'),
('BK_13', NULL, 'Hotel Sri Malaysia', '3462', 4560, 'paid', 'C_2', '2020-03-09'),
('BK_15', 'EOD_14', NULL, NULL, 7, 'paid', 'C_2', '2020-01-09'),
('BK_16', 'EOD_15', NULL, NULL, 4, 'paid', 'C_2', '2020-01-09'),
('BK_17', 'EOD_16', NULL, NULL, 4, 'paid', 'C_2', '2020-06-09'),
('BK_18', 'EOD_17', NULL, NULL, 4, 'paid', 'C_2', '2020-04-09'),
('BK_20', NULL, 'Hotel Sri Malaysia', '3464', 7000, 'paid', 'C_2', '2020-03-09'),
('BK_21', NULL, 'Hotel Sri Malaysia', '3463', 3200, 'paid', 'C_2', '2020-02-09'),
('BK_22', NULL, 'Hotel Sri Malaysia', '3464', 7000, 'paid', 'C_2', '2020-01-09'),
('BK_23', 'EOD_20', NULL, NULL, 300, 'paid', 'C_2', '2020-06-09'),
('BK_24', 'EOD_21', NULL, NULL, 200, 'paid', 'C_2', '2020-05-09'),
('BK_25', 'EOD_22', NULL, NULL, 300, 'paid', 'C_2', '2020-04-09'),
('BK_26', 'EOD_23', NULL, NULL, 3, 'paid', 'C_2', '2020-03-09'),
('BK_27', NULL, 'Hotel Sri Malaysia', '3463', 3200, 'paid', 'C_2', '2020-02-09'),
('BK_28', NULL, 'Hotel Sri Malaysia', '3462', 4560, 'paid', 'C_2', '2020-01-09'),
('BK_29', 'EOD_25', NULL, NULL, 2, 'paid', 'C_2', '2020-05-09'),
('BK_30', NULL, 'Hotel Sri Malaysia', '3462', 4560, 'paid', 'C_2', '2020-03-09'),
('BK_31', NULL, 'Hotel Sri Malaysia', '3463', 3200, 'paid', 'C_2', '2020-04-09'),
('BK_32', NULL, 'Hotel Sri Malaysia', '3461', 1200, 'paid', 'C_3', '2020-05-09'),
('BK_33', 'EOD_28', NULL, NULL, 2, 'paid', 'C_3', '2020-06-09'),
('BK_34', NULL, 'Hotel Sri Malaysia', '3467', 4370, 'unpaid', 'C_2', '2020-06-09');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
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
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`C_customerID`, `C_name`, `C_email`, `C_telNo`, `C_password`, `E_eventID`, `E_paymentID`, `EO_eventOrgID`) VALUES
('C_1', 'asdasd', '123123', '123123', '123ABcd456', '', '', ''),
('C_2', 'tan wei neng', 'weinengt@yahoo.com', '01117688559', '123Abcd456', '', '', ''),
('C_3', 'tan', 'weinengt97@yahoo.com', '01117688559', '123ABcd456', '', '', ''),
('C_4', 'tan', 'weinengt97@gmail.com', '01231231', '123Abcd456', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
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
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`EQ_equipmentID`, `EQ_equipmentName`, `EQ_category`, `EQ_quantityAvailable`, `EQ_price`, `EQ_detail`, `EQ_status`, `S_supplierID`) VALUES
('EP_1', 'Balloon', 'Balloon', 100, 1, 'Balloon', 'Available', 'S_1'),
('EP_2', 'Table', 'Table', 99, 100, 'round table', 'Available', 'S_1'),
('EP_3', 'Chair', 'Chair', 55, 45, 'round chair', 'Available', 'S_1'),
('EP_4', 'Instrument', 'Instrument', 100, 1200, 'music instrument', 'Available', 'S_4');

-- --------------------------------------------------------

--
-- Table structure for table `equipment_order`
--

CREATE TABLE `equipment_order` (
  `EOd_orderID` varchar(200) NOT NULL,
  `C_customerID` varchar(200) NOT NULL,
  `EQ_equipmentID` varchar(200) NOT NULL,
  `EOd_quantity` int(11) NOT NULL,
  `EOd_totalPrice` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipment_order`
--

INSERT INTO `equipment_order` (`EOd_orderID`, `C_customerID`, `EQ_equipmentID`, `EOd_quantity`, `EOd_totalPrice`) VALUES
('EOD_01', 'C_1', 'EP_1', 1, 100),
('EOD_02', 'C_2', 'EP_2', 2, 200),
('EOD_03', 'C_2', 'EP_1', 4, 4),
('EOD_04', 'C_2', 'EP_1', 2, 2),
('EOD_05', 'C_2', 'EP_1', 3, 3),
('EOD_06', 'C_2', 'EP_1', 20, 20),
('EOD_07', 'C_2', 'EP_2', 2, 200),
('EOD_08', 'C_2', 'EP_1', 3, 3),
('EOD_09', 'C_2', 'EP_1', 2, 2),
('EOD_10', 'C_2', 'EP_1', 56, 56),
('EOD_11', 'C_2', 'EP_1', 3, 3),
('EOD_12', 'C_2', 'EP_1', 5, 5),
('EOD_13', 'C_2', 'EP_1', 6, 6),
('EOD_14', 'C_2', 'EP_1', 7, 7),
('EOD_15', 'C_2', 'EP_1', 4, 4),
('EOD_16', 'C_2', 'EP_1', 4, 4),
('EOD_17', 'C_2', 'EP_1', 4, 4),
('EOD_18', 'C_2', 'EP_2', 0, 0),
('EOD_19', 'C_2', 'EP_2', 0, 0),
('EOD_20', 'C_2', 'EP_2', 3, 300),
('EOD_21', 'C_2', 'EP_2', 2, 200),
('EOD_22', 'C_2', 'EP_2', 3, 300),
('EOD_23', 'C_2', 'EP_1', 3, 3),
('EOD_24', 'S_1', 'EP_1', 2, 2),
('EOD_25', 'C_2', 'EP_1', 2, 2),
('EOD_26', 'C_3', 'EP_1', 0, 0),
('EOD_27', 'C_3', 'EP_2', 0, 0),
('EOD_28', 'C_3', 'EP_1', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
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
-- Dumping data for table `event`
--

INSERT INTO `event` (`E_eventID`, `E_eventName`, `B_bookingID`, `E_dateStart`, `E_dateEnd`, `E_timeStart`, `E_timeEnd`, `P_paymentID`) VALUES
('EV_1', 'Birthday', 'BK_1', '2019-04-29', '2019-04-30', '09:00:00', '13:00:00', 'PY_1');

-- --------------------------------------------------------

--
-- Table structure for table `event_organizer`
--

CREATE TABLE `event_organizer` (
  `EO_eventOrgID` varchar(200) NOT NULL,
  `EO_companyName` varchar(200) NOT NULL,
  `EO_emailAddress` varchar(200) NOT NULL,
  `EO_password` varchar(200) NOT NULL,
  `EO_telNo` varchar(200) NOT NULL,
  `EO_status` varchar(200) NOT NULL,
  `E_eventID` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_organizer`
--

INSERT INTO `event_organizer` (`EO_eventOrgID`, `EO_companyName`, `EO_emailAddress`, `EO_password`, `EO_telNo`, `EO_status`, `E_eventID`) VALUES
('C_1', '123123', '123123', '123Abcd456', '123123', '', ''),
('C_2', 'balloon', 'weinengt@yahoo.com', '123Abcd456', '12323432', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `event_package`
--

CREATE TABLE `event_package` (
  `EP_packageID` int(200) NOT NULL,
  `EP_packageName` varchar(200) NOT NULL,
  `S_supplierID` varchar(200) NOT NULL,
  `EP_packagePrice` float DEFAULT NULL,
  `EP_category` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_package`
--

INSERT INTO `event_package` (`EP_packageID`, `EP_packageName`, `S_supplierID`, `EP_packagePrice`, `EP_category`) VALUES
(3461, 'Event 1 from asd', 'S_3', 1200, 'First event of asd'),
(3462, 'Event 2 of asd', 'S_3', 4560, 'Second event of asd'),
(3463, 'Event 3 from asd', 'S_3', 3200, 'Third event from asd'),
(3464, 'Event 1 from weinengt', 'S_1', 7000, 'First event of weinengt'),
(3466, 'Event 3 from weinengt', 'S_1', 9000, 'Third event from weinengt'),
(3467, 'Event 2 from weinengt', 'S_1', 4370, 'Second event from weinengt'),
(3469, 'Event from darrel', 'S_1', 1500, 'Birthday party');

-- --------------------------------------------------------

--
-- Table structure for table `payment_record`
--

CREATE TABLE `payment_record` (
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
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `R_rateID` varchar(200) NOT NULL,
  `C_customerID` varchar(200) NOT NULL,
  `S_supplierID` varchar(200) NOT NULL,
  `R_rate` int(11) NOT NULL,
  `R_date` date NOT NULL,
  `R_comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
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
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`S_supplierID`, `S_SSMNo`, `S_CompanyName`, `S_emailAddress`, `S_password`, `S_supplierType`, `S_phoneNo`, `S_status`) VALUES
('1', '123123', 'dasd', 'asdqwd', '123Abcd456', 'EVENT', '123213', 'pending'),
('S_1', '123123', '456456', 'weinengt@yahoo.com', '123Abcd456', 'EVENT', '32423423', 'approved'),
('S_3', 'asdasd', 'sdfsdf', 'asdasd', '123Abcd456', 'EVENT', '123123', 'approved'),
('S_4', '567890', 'Birthday party', 'weinengt97@yahoo.com', '123Abcd456', 'EQUIPMENT', '01231232345', 'approved'),
('S_5', 'dg435345', 'test SDN BHD', 'weads', '123Abcd456', 'EVENT', '0123123efgfd', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `tracking_order`
--

CREATE TABLE `tracking_order` (
  `B_bookingID` varchar(255) NOT NULL,
  `TO_process` varchar(255) DEFAULT NULL,
  `TO_Date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tracking_order`
--

INSERT INTO `tracking_order` (`B_bookingID`, `TO_process`, `TO_Date`) VALUES
('BK_04', 'Order Create,In Progress,Almost Done,Done', '2020-07-10,2020-07-11,2020-07-13,2020-07-24'),
('BK_06', 'Order Create,Order Create,Almost Done,Done', '2020-07-10,2020-07-11,2020-07-18,2020-07-10'),
('BK_09', 'Order Create,In Progress,In Progress', '2020-07-11,2020-07-18,2020-07-10'),
('BK_10', 'Order Create,Almost Done', '2020-07-10,2020-07-11'),
('BK_11', 'Order Create,In Progress', '2020-07-11,2020-07-11'),
('BK_12', 'Order Create', '2020-07-10');

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE `venue` (
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
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`A_adminID`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`B_bookingID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`C_customerID`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`EQ_equipmentID`);

--
-- Indexes for table `equipment_order`
--
ALTER TABLE `equipment_order`
  ADD PRIMARY KEY (`EOd_orderID`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`B_bookingID`);

--
-- Indexes for table `event_organizer`
--
ALTER TABLE `event_organizer`
  ADD PRIMARY KEY (`EO_eventOrgID`);

--
-- Indexes for table `event_package`
--
ALTER TABLE `event_package`
  ADD PRIMARY KEY (`EP_packageID`);

--
-- Indexes for table `payment_record`
--
ALTER TABLE `payment_record`
  ADD PRIMARY KEY (`P_paymentID`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`R_rateID`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`S_supplierID`);

--
-- Indexes for table `tracking_order`
--
ALTER TABLE `tracking_order`
  ADD PRIMARY KEY (`B_bookingID`);

--
-- Indexes for table `venue`
--
ALTER TABLE `venue`
  ADD PRIMARY KEY (`V_venueID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event_package`
--
ALTER TABLE `event_package`
  MODIFY `EP_packageID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3470;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
