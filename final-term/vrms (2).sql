-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2022 at 05:29 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vrms`
--

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `userid` varchar(20) NOT NULL,
  `license_no` varchar(30) NOT NULL,
  `commission` int(11) NOT NULL,
  `account` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`userid`, `license_no`, `commission`, `account`) VALUES
('mahin', 'DHK68465131', 1000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `userid` varchar(20) NOT NULL,
  `rank` int(11) NOT NULL DEFAULT 10,
  `salary` int(11) NOT NULL DEFAULT 5000,
  `account` int(11) NOT NULL DEFAULT 0,
  `join_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `histories`
--

CREATE TABLE `histories` (
  `history_id` int(11) NOT NULL,
  `userid` varchar(20) NOT NULL,
  `history_type` varchar(20) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp(),
  `details` varchar(200) NOT NULL DEFAULT 'none.txt'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `histories`
--

INSERT INTO `histories` (`history_id`, `userid`, `history_type`, `date`, `time`, `details`) VALUES
(1, 'adnan', 'registration', '2022-11-05', '20:52:02', 'userid: adnan, password: adnan123, usertype: passenger, status: active, name: Adnan Fahad, email: adnan@gmail.com, contact: 01951631034, adress: Mothijheel'),
(2, 'rad', 'registration', '2022-11-05', '20:52:02', 'userid: rad, password: rad12345, usertype: passenger, status: active, name: Ras Shahmat Akash, email: rad@gmail.com, contact: 01242042424, adress: Kishoregonj'),
(3, 'sakib', 'registration', '2022-11-05', '20:52:02', 'userid: sakib, password: sakib123, usertype: passenger, status: active, name: Mahin, email: mahin@mail.com, contact: 01651654561, adress: Kuratoli'),
(4, 'monkir2', 'registration', '2022-11-05', '22:50:42', 'userid: monkir2, password: monkir234, usertype: passenger, status: active, name: monkir, email: monkirchowdhury@gmail.com, contact: 06516511413, adress: Motijheel'),
(5, 'munna', 'registration', '2022-11-05', '22:54:11', 'userid: munna, password: munna123, usertype: passenger, status: active, name: Muzahidul Islam, email: monkirchowdhury@gmail.com, contact: 01531190845, adress: asdfdsf'),
(6, 'akash', 'registration', '2022-11-05', '22:55:04', 'userid: akash, password: akash123, usertype: passenger, status: active, name: Monkir Chowdhury, email: monkirchowdhury@gmail.com, contact: 01531190845, adress: asdfdf'),
(7, 'rabbi', 'registration', '2022-11-05', '22:57:06', 'userid: rabbi, password: rabbi123, usertype: passenger, status: active, name: Monkir Chowdhury, email: monkirchowdhury@gmail.com, contact: 01531190845, adress: sadfsdf\n'),
(8, 'najabat', 'registration', '2022-11-07', '18:39:54', 'userid: najabat, password: vrms2020, usertype: passenger, status: active, name: Najabat Chowdhury Anaf, email: najabat@gmail.com, contact: 01537894561, adress: North Kamalapur\n'),
(9, 'ismailsir', 'registration', '2022-11-08', '23:32:10', 'userid: ismailsir, password: aiub1234, usertype: passenger, status: active, name: Md Ismail Hossain, email: md.ismail@aiub.edu, contact: 01651654561, adress: Kazi Bari, Kuratoli, Kuril Bishwaroad, Dha'),
(10, 'brazil6', 'registration', '2022-12-10', '17:04:33', 'userid: brazil6, password: hexa123456, usertype: passenger, status: active, name: Brazil, email: brazil@yahoo.com, contact: 01216546545, adress: Basabo\n'),
(11, 'argentina', 'registration', '2022-12-10', '17:07:32', 'userid: argentina, password: thrice123, usertype: passenger, status: active, name: Argnetina, email: argentina@3wc.com, contact: 01321654651, adress: Kurmitola\n'),
(12, 'munna', 'registration', '2022-12-10', '17:11:53', 'userid: munna, password: munna123, usertype: passenger, status: active, name: MD Muzahidul Islam, email: muzahid.aiub@gmail.com, contact: 01531190845, adress: Pabna\n'),
(13, 'monkir', 'registration', '2022-12-10', '17:27:22', 'userid: monkir, password: asdf4561, usertype: passenger, status: active, name: Monkir Chowdhury, email: monkirchowdhury@gmail.com, contact: 01531190845, adress: Flat A-1, 11 Jasimuddin Road, North Kam'),
(14, 'monkir', 'registration', '2022-12-10', '17:29:21', 'userid: monkir, password: asdf4561, usertype: passenger, status: active, name: Monkir Chowdhury, email: monkirchowdhury@gmail.com, contact: 01531190845, adress: Flat A-1, 11 Jasimuddin Road, North Kam'),
(15, 'monkir', 'registration', '2022-12-10', '17:39:11', 'userid: monkir, password: asdf4561, usertype: passenger, status: active, name: Monkir Chowdhury, email: monkirchowdhury@gmail.com, contact: 03521635211, adress: Flat A-1, 11 Jasimuddin Road, North Kam'),
(16, 'monkir', 'registration', '2022-12-10', '19:29:25', 'userid: monkir, password: asdf4561, usertype: passenger, status: active, name: Monkir Chowdhury, email: monkirchowdhury@gmail.com, contact: 03521635211, adress: Jasimuddin Road, North Kamalapur, Motij'),
(17, 'munna', 'registration', '2022-12-10', '20:10:51', 'userid: munna, password: muzahid456, usertype: passenger, status: active, name: Muzahidul Islam, email: muzahid.aiub@gmail.com, contact: 03521632561, adress: Pabna\n'),
(18, 'rad', 'registration', '2022-12-10', '20:39:31', 'userid: rad, password: akash456, usertype: passenger, status: active, name: Rad Shahmat Akash, email: rad@gmail.com, contact: 01475165164, adress: Kishoregonj\n'),
(19, 'mahin11', 'registration', '2022-12-10', '21:46:37', 'userid: mahin11, password: mahin456, usertype: passenger, status: active, name: Adnan Mahin, email: mahin@mail.com, contact: 01216514651, adress: Kishorgonj\n'),
(20, 'najabat', 'registration', '2022-12-10', '22:26:29', 'userid: najabat, password: chowdhury456, usertype: passenger, status: active, name: Najabat Chowdhury Anaf, email: najabat@gmail.com, contact: 06951165146, adress: Narshingdhi\n');

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

CREATE TABLE `trips` (
  `trip_id` int(11) NOT NULL,
  `departure` varchar(20) NOT NULL,
  `destination` varchar(20) NOT NULL,
  `distance` int(11) NOT NULL DEFAULT 0,
  `price` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trips`
--

INSERT INTO `trips` (`trip_id`, `departure`, `destination`, `distance`, `price`) VALUES
(10001, 'Dhaka', 'Chittagong', 500, 20000),
(10002, 'Dhaka', 'Barishal', 250, 12000),
(10003, 'Dhaka', 'Sylhet', 400, 15000),
(10004, 'Chittagong', 'Dhaka', 500, 20000),
(10005, 'Sylhet', 'Chittagong', 900, 30000),
(10006, 'Barishal', 'Chittagong', 300, 10000),
(10007, 'Barishal', 'Sylhel', 750, 12000);

-- --------------------------------------------------------

--
-- Table structure for table `trips_histories`
--

CREATE TABLE `trips_histories` (
  `th_id` int(11) NOT NULL,
  `trip_id` int(11) NOT NULL,
  `passenger_id` varchar(20) NOT NULL,
  `trip_date` date NOT NULL DEFAULT current_timestamp(),
  `status` varchar(10) NOT NULL DEFAULT 'pending',
  `price` int(11) NOT NULL DEFAULT 0,
  `discount` int(11) NOT NULL DEFAULT 0,
  `driver_id` varchar(20) NOT NULL DEFAULT 'Not Allocated',
  `used_voucher` varchar(20) NOT NULL DEFAULT 'none'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trips_histories`
--

INSERT INTO `trips_histories` (`th_id`, `trip_id`, `passenger_id`, `trip_date`, `status`, `price`, `discount`, `driver_id`, `used_voucher`) VALUES
(100000, 0, 'monkir', '2022-11-05', 'pending', 0, 0, 'Not Allocated', 'none'),
(100001, 0, 'rad', '2022-11-05', 'pending', 0, 0, 'Not Allocated', 'none'),
(100002, 0, 'muzahid', '2022-11-05', 'pending', 0, 0, 'Not Allocated', 'none'),
(100003, 0, 'mahin', '2022-11-05', 'pending', 0, 0, 'Not Allocated', 'none'),
(100004, 10005, 'monkir', '2022-11-14', 'pending', 30000, 0, 'Not Allocated', 'none'),
(100005, 10005, 'monkir', '2022-11-20', 'pending', 30000, 0, 'Not Allocated', 'none'),
(100006, 10005, 'monkir', '2022-11-14', 'pending', 30000, 0, 'Not Allocated', 'none'),
(100007, 10007, 'monkir', '2022-11-30', 'pending', 12000, 0, 'Not Allocated', 'none'),
(100008, 10004, 'monkir', '2022-11-14', 'pending', 20000, 0, 'Not Allocated', 'none'),
(100009, 10004, 'monkir', '2022-11-14', 'pending', 20000, 0, 'Not Allocated', 'none'),
(100010, 10005, 'monkir', '2022-11-14', 'pending', 30000, 0, 'Not Allocated', 'none'),
(100011, 10005, 'monkir', '2022-11-14', 'pending', 30000, 0, 'Not Allocated', 'none'),
(100012, 10005, 'monkir', '2022-11-14', 'pending', 30000, 0, 'Not Allocated', 'none'),
(100013, 10003, 'monkir', '2022-11-24', 'pending', 15000, 0, 'Not Allocated', 'none'),
(100014, 10004, 'rad', '2022-11-15', 'pending', 20000, 0, 'Not Allocated', 'none'),
(100015, 10001, 'monkir', '1970-01-01', 'pending', 20000, 0, 'Not Allocated', 'none'),
(100016, 10006, 'monkir', '2022-11-30', 'pending', 10000, 0, 'Not Allocated', 'none'),
(100017, 10001, 'najabat', '1970-01-01', 'pending', 20000, 0, 'Not Allocated', 'none'),
(100018, 10007, 'najabat', '1970-01-01', 'pending', 12000, 0, 'Not Allocated', 'none'),
(100019, 10007, 'najabat', '1970-01-01', 'pending', 12000, 0, 'Not Allocated', 'none'),
(100020, 10006, 'najabat', '1970-01-01', 'pending', 10000, 0, 'Not Allocated', 'none'),
(100021, 10005, 'najabat', '1970-01-01', 'pending', 30000, 0, 'Not Allocated', 'none'),
(100022, 10005, 'najabat', '2022-11-29', 'pending', 30000, 0, 'Not Allocated', 'none'),
(100023, 10003, 'najabat', '1970-01-01', 'pending', 15000, 0, 'Not Allocated', 'none'),
(100024, 10004, 'najabat', '2022-11-23', 'pending', 20000, 0, 'Not Allocated', 'none'),
(100025, 10002, 'najabat', '2022-11-15', 'pending', 12000, 0, 'Not Allocated', 'none'),
(100026, 10004, 'najabat', '2022-11-29', 'pending', 20000, 0, 'Not Allocated', 'none'),
(100027, 10001, 'najabat', '2022-11-22', 'pending', 20000, 0, 'Not Allocated', 'none'),
(100028, 10004, 'monkir', '2022-11-30', 'pending', 20000, 0, 'Not Allocated', 'none'),
(100029, 10001, 'monkir', '2022-11-22', 'pending', 20000, 0, 'Not Allocated', 'none'),
(100030, 10007, 'monkir', '2022-12-28', 'pending', 12000, 0, 'Not Allocated', 'none'),
(100031, 10005, 'monkir', '2022-12-23', 'pending', 30000, 0, 'Not Allocated', 'none'),
(100032, 10004, 'monkir', '2022-12-28', 'pending', 20000, 0, 'Not Allocated', 'none'),
(100033, 10001, 'monkir', '2022-12-22', 'pending', 20000, 0, 'Not Allocated', 'none'),
(100034, 10006, 'monkir', '2022-12-20', 'pending', 10000, 0, 'Not Allocated', 'none'),
(100035, 10001, 'monkir', '2022-12-19', 'pending', 20000, 0, 'Not Allocated', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(15) NOT NULL,
  `status` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `adress` varchar(100) NOT NULL,
  `profile_image` varchar(30) NOT NULL DEFAULT 'VRMS.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `password`, `usertype`, `status`, `name`, `email`, `contact`, `adress`, `profile_image`) VALUES
('mahin', 'mahin123', 'driver', 'inactive', 'Mahin', 'mahin@mail.com', '012516546541', 'Pabna', 'VRMS.png'),
('admin', 'admin123', 'admin', 'active', 'Admin', 'admin@vrms.com', '0125196465', 'AIUB', 'admin.PNG'),
('monkir', 'asdf4561', 'passenger', 'active', 'Monkir Chowdhury', 'monkirchowdhury@gmail.com', '03521635211', 'Jasimuddin Road, North Kamalapur, Motijheel, Dhaka', 'monkir.jpg'),
('munna', 'muzahid456', 'passenger', 'active', 'Muzahidul Islam', 'muzahid.aiub@gmail.com', '03521632561', 'Pabna', 'munna.png'),
('rad', 'sohomot456', 'passenger', 'active', 'Rad Shahmat Akash', 'rad@gmail.com', '01475165164', 'Kishoregonj', 'rad.PNG'),
('mahin11', 'mahin456', 'passenger', 'active', 'Adnan Mahin', 'mahin@mail.com', '01216514651', 'Kishorgonj', 'VRMS.png'),
('najabat', 'chowdhury456', 'passenger', 'active', 'Najabat Chowdhury Anaf', 'najabat@gmail.com', '06951165146', 'Narshingdhi', 'najabat.png');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `vehicle_id` int(11) NOT NULL,
  `type` varchar(15) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `model` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`vehicle_id`, `type`, `brand`, `model`) VALUES
(10000, 'Car', 'Toyota', 'Premio'),
(10001, 'Motorcycle', 'Honda', 'Livo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `histories`
--
ALTER TABLE `histories`
  ADD PRIMARY KEY (`history_id`);

--
-- Indexes for table `trips`
--
ALTER TABLE `trips`
  ADD PRIMARY KEY (`trip_id`);

--
-- Indexes for table `trips_histories`
--
ALTER TABLE `trips_histories`
  ADD PRIMARY KEY (`th_id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`vehicle_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `histories`
--
ALTER TABLE `histories`
  MODIFY `history_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `trips`
--
ALTER TABLE `trips`
  MODIFY `trip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10008;

--
-- AUTO_INCREMENT for table `trips_histories`
--
ALTER TABLE `trips_histories`
  MODIFY `th_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100036;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `vehicle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10002;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
