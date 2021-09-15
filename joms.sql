-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2019 at 05:09 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `joms`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `admin_id` int(5) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_phonenum` varchar(11) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_username` varchar(30) NOT NULL,
  `admin_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`admin_id`, `admin_name`, `admin_phonenum`, `admin_email`, `admin_username`, `admin_password`) VALUES
(1, 'AHMAD ALI', '0199835872', 'ali@gmail.com', 'ali', '123');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `a_id` int(5) NOT NULL,
  `a_title` varchar(50) NOT NULL,
  `a_msg` varchar(150) NOT NULL,
  `a_time` time NOT NULL,
  `a_date` date NOT NULL,
  `admin_username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`a_id`, `a_title`, `a_msg`, `a_time`, `a_date`, `admin_username`) VALUES
(16, 'Trip Ke Kuala Lumpur', 'Trip Ke Kuala Lumpur Hanya serendah RM19 sempena Bulan Ramadhan ini =)', '13:00:00', '2019-05-07', ''),
(18, 'Honda for Sale', '	\r\nAssalamualaikum . Honda Civic Type R for sale . If you have any question please contact us . 0139858755(Mimie) . Thank you', '14:01:00', '2019-05-07', ''),
(19, 'TRIP KE GAMBANG', 'teranggau', '13:01:00', '2019-05-07', ''),
(20, 'KEDAH', 'KEDAH 21/05/2019', '14:01:00', '2019-05-07', ''),
(21, 'Hi', 'Selamat Hari Raya', '13:00:00', '2019-05-07', ''),
(22, 'Salam Ramadhan Kareem', 'Selamat Berpuasa Semua ! ', '15:00:00', '2019-05-07', '');

-- --------------------------------------------------------

--
-- Table structure for table `approval`
--

CREATE TABLE `approval` (
  `approval_id` varchar(5) NOT NULL,
  `status` varchar(20) NOT NULL,
  `register_id` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(5) NOT NULL,
  `customer_name` varchar(200) NOT NULL,
  `booking_date` date NOT NULL,
  `booking_time` time NOT NULL,
  `pick_up` varchar(50) NOT NULL,
  `drop_off` varchar(50) NOT NULL,
  `type_service` varchar(50) NOT NULL,
  `price` int(100) NOT NULL,
  `point` int(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `driver_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `customer_name`, `booking_date`, `booking_time`, `pick_up`, `drop_off`, `type_service`, `price`, `point`, `username`, `driver_id`) VALUES
(22, 'NUR SHAZA SHAMIMI', '2019-05-06', '13:00:00', 'Null', 'Kuantan City Mall', 'Rent for whole day', 110, 8, 'shazmimie', 1),
(26, 'mimi', '0000-00-00', '00:00:00', '0', 'Teluk Cempedak', '0', 110, 8, 'shazmimie', 0),
(42, 'Nik Nur Syakira binti Abdullah', '2019-05-06', '14:31:00', 'Null', 'Null', 'Rent for half day', 65, 4, 'nnsyakira', 1),
(43, 'NUR SHAZA SHAMIMI', '2019-05-06', '14:01:00', 'Kolej Kediaman 3', 'Kuantan City Mall', 'Taxi', 34, 2, 'shazmimie', 0),
(44, 'NUR SHAZA SHAMIMI', '2019-05-06', '14:01:00', 'Kolej Kediaman 3', 'Kuantan City Mall', 'Taxi', 34, 2, 'shazmimie', 3),
(45, 'NUR SHAZA SHAMIMI', '2019-05-16', '13:45:00', 'Null', 'Null', 'Rent for half day', 65, 4, 'shazmimie', 3),
(46, 'IBRAHIM SATHIR', '2019-05-07', '13:02:00', 'Kolej Kediaman 4', 'East Coast Mall', 'Taxi', 40, 2, 'ibrahim', 4),
(47, 'Nur Dalila Diyana', '2019-05-07', '12:00:00', 'Kolej Kediaman 3', 'Kuantan City Mall', 'Taxi', 34, 2, 'dalila', 1),
(50, 'NUR SHAZA SHAMIMI', '2019-05-17', '13:01:00', 'Null', 'Null', 'Rent for half day', 65, 4, 'dalila', 1),
(51, 'NUR SHAZA SHAMIMI', '0000-00-00', '04:01:00', 'Kolej Kediaman 3', 'Terminal Sentral Kuantan', 'Taxi', 32, 2, 'dalila', 4),
(52, 'NUR SHAZA SHAMIMI', '2019-05-07', '13:01:00', 'Kolej Kediaman 3', 'East Coast Mall', 'Rent for whole day', 110, 8, 'dalila', 3),
(53, 'NUR SHAZA SHAMIMI', '2019-05-18', '05:59:00', 'Kolej Kediaman 4', 'Taman Esplanade Kuantan', 'Taxi', 35, 2, 'dalila', 4);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phonenum` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `name`, `phonenum`, `email`, `username`, `password`) VALUES
(27, 'NUR SHAZA SHAMIMI', '0139858756', 'shazmimie98@gmail.com', 'shazmimie', '123'),
(28, 'Nik Nur Syakira binti Abdullah', '01110677073', 'nnsyakira9@gmail.com', 'nnsyakira', 'sya123'),
(29, 'IBRAHIM SATHIR', '01456778987', 'ibrahim@gmail.com', 'ibrahim', '123'),
(30, 'Nur Dalila ', '0138765678', 'diyana@gmail.com', 'dalila', '123');

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `destination_id` varchar(5) NOT NULL,
  `distance` int(11) NOT NULL,
  `point` int(11) NOT NULL,
  `customer_id` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `driver_id` int(11) NOT NULL,
  `driver_name` varchar(150) NOT NULL,
  `age` int(12) NOT NULL,
  `ic` varchar(12) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phonenumber` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `license` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `service` varchar(20) NOT NULL,
  `dusername` varchar(20) NOT NULL,
  `dpassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`driver_id`, `driver_name`, `age`, `ic`, `gender`, `phonenumber`, `email`, `license`, `address`, `status`, `service`, `dusername`, `dpassword`) VALUES
(1, 'NUR DALILA DIYANA BINTI MUHAMAD SALADIN', 22, '971114036354', 'Female', '01125574740', 'saladin@jupem.gov.my', 'KELANTAN', 'PT 144 JALAN KAMPUNG BERIS JAMBU', 'Available', 'Taxi', 'dell', 'dell'),
(2, 'NUR DALILA DIYANA BINTI MUHAMAD SALADIN', 32, '971114036354', 'Male', '0166161741', 'saladin@jupem.gov.my', 'KELANTAN', 'PT 144 JALAN KAMPUNG BERIS JAMBU', 'Available', 'Taxi', 'dell', 'dell'),
(3, 'NUR DALILA DIYANA BINTI MUHAMAD SALADIN', 22, '971114036354', 'Female', '0166161741', 'dell@jupem.gov.my', 'KELANTAN1', 'PT 144 JALAN KAMPUNG BERIS JAMBU', 'Available', 'Taxi', 'dell', 'dell'),
(4, 'LIYANA YAZID', 21, '980510026140', 'Female', '0187656789', 'liyana@gmail.com', '980510026140', 'KEDAH', 'Available', 'Taxi', 'liyana', '123'),
(5, 'Nur Dalila Diyana', 22, '97123678900', 'Female', '01234567990', 'diyana@gmail.com', '11111111111111', 'PAHANG', 'Available', 'Taxi', 'diyana', 'DIYANA');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `rating` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `driver_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `full_name`, `username`, `rating`, `email`, `comment`, `driver_id`) VALUES
(0, '4', 'D1', 'C1', '', 'haha', 0),
(1, 'IBRAHIM SATHIR', 'ibrahim', '3', 'ibrahim@gmail.com', 'Good Service', 4),
(2, 'ibrahim', 'ibrahim', '5', 'ibrahim@gmail.com', 'asd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `income_id` int(11) NOT NULL,
  `total_income` float NOT NULL,
  `driver_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`income_id`, `total_income`, `driver_id`) VALUES
(0, 40, 1);

-- --------------------------------------------------------

--
-- Table structure for table `maintainance`
--

CREATE TABLE `maintainance` (
  `maintainance_id` int(5) NOT NULL,
  `vehicle_id` varchar(100) NOT NULL,
  `driver_id` varchar(100) NOT NULL,
  `maintainance_status` varchar(20) NOT NULL,
  `maintainance_receipt` varchar(11) NOT NULL,
  `maintainance_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maintainance`
--

INSERT INTO `maintainance` (`maintainance_id`, `vehicle_id`, `driver_id`, `maintainance_status`, `maintainance_receipt`, `maintainance_date`) VALUES
(1, '78', '', 'Wash', '15106104096', '2019-05-07'),
(2, '78', '', 'wash car', '164030338-a', '2019-05-16');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `income` float NOT NULL,
  `driver_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `registration_id` int(5) NOT NULL,
  `usertype` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `phonenumber` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `dusername` varchar(50) NOT NULL,
  `dpassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`registration_id`, `usertype`, `name`, `age`, `gender`, `phonenumber`, `email`, `date`, `dusername`, `dpassword`) VALUES
(1, 'staff', 'NUR DALILA', 22, 'Female', '01234567891', 'della@jupem.gov.my', '2019-05-07', 'dell', 'dell'),
(2, 'student', 'LIYANA YAZID', 21, 'Female', '0187656789', 'liyana@gmail.com', '2019-05-07', 'liyana', '123'),
(3, '', '', 0, '', '', '', '0000-00-00', '', ''),
(4, 'student', 'Nur Dalila Diyana', 22, 'Female', '01234567990', 'diyana@gmail.com', '2019-05-07', 'diyana', 'diyana');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(11) NOT NULL,
  `type_service` varchar(50) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `driver_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `type_service`, `booking_id`, `driver_id`) VALUES
(0, 'Rent for whole day', 0, 4);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` varchar(5) NOT NULL,
  `staff_name` varchar(150) NOT NULL,
  `staff_phnum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` varchar(10) NOT NULL,
  `student_name` varchar(150) NOT NULL,
  `student_phnum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `vehicle_id` int(5) NOT NULL,
  `vehicle_name` varchar(100) NOT NULL,
  `vehicle_brand` varchar(100) NOT NULL,
  `vehicle_trans_type` varchar(100) NOT NULL,
  `vehicle_colour` varchar(100) NOT NULL,
  `vehicle_regnum` varchar(10) NOT NULL,
  `driver_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`vehicle_id`, `vehicle_name`, `vehicle_brand`, `vehicle_trans_type`, `vehicle_colour`, `vehicle_regnum`, `driver_id`) VALUES
(1, 'Myvi', 'Perodua', 'Auto', 'Blue', 'CAR123', 1),
(23, 'saga', 'proton', 'auto', 'purple', 'ML 1032', 2),
(25, 'axia', 'perodua', 'auto', 'red', 'EVO 6523', 3),
(77, 'persona', 'proton', 'auto', 'blue black', 'RT 3015', 4),
(78, 'myvi', 'perodua', 'auto', 'purple', 'JKN 2011', 0),
(79, 'Myvi', 'Perodua', 'Auto', 'Blue', 'CAR123', 2),
(80, '', '', '', '', '', 0),
(81, 'Myvi', 'Perodua', 'Auto', 'Blue', 'CAR123', 2),
(82, 'Myvi', 'Perodua', 'Auto', 'Red', 'YANA21', 4),
(83, '', '', '', '', '', 0),
(84, 'myvi', 'perodua', 'auto', 'white', 'CAR123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_username` (`admin_username`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `approval`
--
ALTER TABLE `approval`
  ADD PRIMARY KEY (`approval_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`destination_id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`driver_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`income_id`);

--
-- Indexes for table `maintainance`
--
ALTER TABLE `maintainance`
  ADD PRIMARY KEY (`maintainance_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`registration_id`),
  ADD UNIQUE KEY `dusername` (`dusername`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`vehicle_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `admin_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `a_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `driver_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `maintainance`
--
ALTER TABLE `maintainance`
  MODIFY `maintainance_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `registration_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `vehicle_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
