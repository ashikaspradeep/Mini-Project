-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2023 at 02:46 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `drug`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_det`
--

CREATE TABLE `booking_det` (
  `id` int(11) NOT NULL,
  `cust_name` varchar(60) NOT NULL,
  `med_name` varchar(60) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `amount` int(10) NOT NULL,
  `shipping_address` varchar(30) NOT NULL,
  `contact_no` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking_det`
--

INSERT INTO `booking_det` (`id`, `cust_name`, `med_name`, `quantity`, `amount`, `shipping_address`, `contact_no`, `email`) VALUES
(1, 'ashika', 'dolo', '2', 100, 'ashika bhavan', '9219283746', 'ashikaspradeep@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `medicine_det`
--

CREATE TABLE `medicine_det` (
  `id` int(10) NOT NULL,
  `medicine_name` varchar(60) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `price` varchar(10) NOT NULL,
  `manu_date` varchar(10) NOT NULL,
  `expiry_date` varchar(10) NOT NULL,
  `description` varchar(150) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medicine_det`
--

INSERT INTO `medicine_det` (`id`, `medicine_name`, `quantity`, `price`, `manu_date`, `expiry_date`, `description`, `image`) VALUES
(1, 'dolo', '5', '200', '2022-01-05', '2026-11-25', 'fever', 'istockphoto-1166347371-612x612.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `cust_name` varchar(30) NOT NULL,
  `amount` int(10) NOT NULL,
  `card_no` int(30) NOT NULL,
  `exp_date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `cust_name`, `amount`, `card_no`, `exp_date`) VALUES
(0, 'ashika', 100, 2147483647, '2023-01');

-- --------------------------------------------------------

--
-- Table structure for table `staff_det`
--

CREATE TABLE `staff_det` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `reg_no` varchar(15) NOT NULL,
  `contact_no` varchar(11) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff_det`
--

INSERT INTO `staff_det` (`id`, `name`, `gender`, `reg_no`, `contact_no`, `email`) VALUES
(1, 'ashika', 'Female', '1234567899', '9219283746', 'ashikaspradeep@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `stock_update`
--

CREATE TABLE `stock_update` (
  `id` int(11) NOT NULL,
  `medicine_name` varchar(30) NOT NULL,
  `no_of_stock` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stock_update`
--

INSERT INTO `stock_update` (`id`, `medicine_name`, `no_of_stock`) VALUES
(1, 'dolo', '100');

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE `user_reg` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `contact_no` varchar(11) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`id`, `name`, `contact_no`, `email`) VALUES
(1, 'ashika', '9219283746', 'ashikaspradeep@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_det`
--
ALTER TABLE `booking_det`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine_det`
--
ALTER TABLE `medicine_det`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_det`
--
ALTER TABLE `staff_det`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_update`
--
ALTER TABLE `stock_update`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_reg`
--
ALTER TABLE `user_reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_det`
--
ALTER TABLE `booking_det`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `medicine_det`
--
ALTER TABLE `medicine_det`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff_det`
--
ALTER TABLE `staff_det`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stock_update`
--
ALTER TABLE `stock_update`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_reg`
--
ALTER TABLE `user_reg`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
