-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2023 at 07:36 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `supershop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_key` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_key`, `user_name`) VALUES
(5242, 'rahman213');

-- --------------------------------------------------------

--
-- Table structure for table `bought_item`
--

CREATE TABLE `bought_item` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bought_item`
--

INSERT INTO `bought_item` (`item_id`, `item_name`, `quantity`) VALUES
(1, '7-Up', 10),
(2, 'Milk Vita', 5),
(3, 'Pran Dal', 15);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `address`, `name`, `phone`, `email`) VALUES
(1003, 'raybazar,Manikgang', 'Fuad', '01894058930', 'fuad@gmail.com'),
(1312, 'satkhira, khulna', 'Tanvir', '01637829407', 'tanvir.9@gmail.com'),
(1610, 'palash, Narshingdi', 'Ilham', '01719871679', 'ilham.10@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `ssn` varchar(11) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `name`, `ssn`, `phone`, `email`) VALUES
(1, 'Abid', '123-45-6789', '01759293942', 'abid@gmail.com'),
(2, 'Farhan', '234-56-7890', '01837394859', 'farhan@gmail.com'),
(3, 'Fahim', '345-67-8901', '01648394859', 'fahim@gmail.com'),
(4, 'Rusana', '456-78-9012', '01833293948', 'rusana@gmail.com'),
(5, 'Lamiya', '567-89-0123', '01385739094', 'lamiya@gmail.com'),
(6, 'Shafin', '678-90-1234', '01738843949', 'shafin@gmail.com'),
(7, 'Ahmar', '789-01-2345', '01584939493', 'ahmar@gmail.com'),
(8, 'Imtiaz', '890-12-3456', '01785938493', 'imtiaz@gmail.com'),
(9, 'Sakib', '901-23-4567', '018473833894', 'sakib@gmail.com'),
(10, 'Maimoona', '012-34-5678', '01738994993', 'maimoona@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `expiry`
--

CREATE TABLE `expiry` (
  `expiry_id` int(11) NOT NULL,
  `manufacture_date` date NOT NULL,
  `inventory_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `end_date` date NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `expiry`
--

INSERT INTO `expiry` (`expiry_id`, `manufacture_date`, `inventory_time`, `end_date`, `item_id`) VALUES
(1, '2022-01-01', '2022-01-01 18:00:00', '2022-12-31', 1),
(2, '2022-02-01', '2022-02-01 18:00:00', '2022-12-31', 2),
(3, '2022-03-01', '2022-03-01 18:00:00', '2022-12-31', 3),
(4, '2022-04-01', '2022-04-01 18:00:00', '2022-12-31', 4),
(5, '2022-05-01', '2022-05-01 18:00:00', '2022-12-31', 5),
(6, '2022-06-01', '2022-06-01 18:00:00', '2022-12-31', 6),
(7, '2022-07-01', '2022-07-01 18:00:00', '2022-12-31', 7),
(8, '2022-08-01', '2022-08-01 18:00:00', '2022-12-31', 8),
(9, '2022-09-01', '2022-09-01 18:00:00', '2022-12-31', 9),
(10, '2022-10-01', '2022-10-01 18:00:00', '2022-12-31', 10),
(11, '2022-01-01', '2022-01-14 18:00:00', '2023-01-01', 1),
(12, '2022-01-01', '2022-01-14 18:00:00', '2023-01-01', 2),
(13, '2022-01-01', '2022-01-14 18:00:00', '2023-01-01', 3),
(14, '2022-01-01', '2022-01-14 18:00:00', '2023-01-01', 4),
(15, '2022-01-01', '2022-01-14 18:00:00', '2023-01-01', 5);

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `product_name` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `store_id` int(11) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`product_name`, `quantity`, `price`, `store_id`, `address`) VALUES
('7up', 100, '10.99', 101, 'Mohakhali,Dhaka'),
('Milk Vita', 75, '15.99', 102, 'Mohakhali,Dhaka'),
('Pran Dal', 50, '20.99', 103, 'Mohakhali,Dhaka'),
('Pran Rice', 200, '25.99', 201, 'Tejgaon,Dhaka'),
('Beef', 150, '30.99', 202, 'Tejgaon,Dhaka'),
('chicken', 100, '35.99', 203, 'Tejgaon,Dhaka'),
('Fish', 125, '40.99', 301, 'Jatrabari,Dhaka'),
('Harpic', 90, '45.99', 302, 'Jatrabari,Dhaka'),
('RFL', 75, '50.99', 303, 'Jatrabari,Dhaka'),
('Pran Ghee', 50, '55.99', 304, 'jatrabari,Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `brand` varchar(50) NOT NULL,
  `upc` varchar(20) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `item_id` int(11) NOT NULL,
  `vat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`brand`, `upc`, `price`, `item_id`, `vat`) VALUES
('7up', '1234567890123', '10.99', 1, 1),
('Milk Vita', '2345678901234', '15.99', 2, 1),
('Pran Dal', '3456789012345', '20.99', 3, 2),
('Pran Rice', '4567890123456', '25.99', 4, 2),
('Beef', '5678901234567', '30.99', 5, 2),
('Chicken', '6789012345678', '35.99', 6, 3),
('Fish', '7890123456789', '40.99', 7, 3),
('Harpic', '8901234567890', '45.99', 8, 3),
('RFL', '9012345678901', '50.99', 9, 3),
('Pran Ghee', '0123456789012', '55.99', 10, 5);

-- --------------------------------------------------------

--
-- Table structure for table `payment_method`
--

CREATE TABLE `payment_method` (
  `customer_id` int(11) NOT NULL,
  `cash` tinyint(1) NOT NULL DEFAULT 0,
  `bkash` tinyint(1) NOT NULL DEFAULT 0,
  `debit_card` tinyint(1) NOT NULL DEFAULT 0,
  `credit_card` tinyint(1) NOT NULL DEFAULT 0,
  `mastercard` tinyint(1) NOT NULL DEFAULT 0,
  `card_no` varchar(255) DEFAULT NULL,
  `merchant_no` varchar(255) NOT NULL,
  `amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment_method`
--

INSERT INTO `payment_method` (`customer_id`, `cash`, `bkash`, `debit_card`, `credit_card`, `mastercard`, `card_no`, `merchant_no`, `amount`) VALUES
(2, 127, 0, 0, 127, 100, '2345678901', 'M002', '500.00'),
(3, 0, 127, 0, 127, 100, '3456789012', 'M003', '600.00'),
(4, 127, 0, 100, 127, 0, '4567890123', 'M004', '550.00'),
(5, 50, 127, 0, 127, 0, '5678901234', 'M005', '650.00'),
(7, 100, 0, 0, 127, 127, '7890123456', 'M007', '600.00'),
(8, 127, 127, 0, 127, 0, '8901234567', 'M008', '600.00'),
(10, 127, 0, 0, 127, 100, '0123456789', 'M010', '600.00'),
(1003, 100, 127, 0, 127, 0, '1234567890', 'M001', '600.00'),
(1312, 0, 127, 127, 127, 0, '6789012345', 'M006', '600.00'),
(1610, 0, 127, 100, 127, 0, '9012345678', 'M009', '600.00');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `address` varchar(100) NOT NULL,
  `trade_license` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`address`, `trade_license`, `name`) VALUES
('Mohakhali,Dhaka', 'T-12543', 'Swopno');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_key`),
  ADD UNIQUE KEY `admin_key` (`admin_key`);

--
-- Indexes for table `bought_item`
--
ALTER TABLE `bought_item`
  ADD PRIMARY KEY (`item_id`),
  ADD UNIQUE KEY `item_id` (`item_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`),
  ADD UNIQUE KEY `employee_id` (`employee_id`),
  ADD UNIQUE KEY `ssn` (`ssn`);

--
-- Indexes for table `expiry`
--
ALTER TABLE `expiry`
  ADD PRIMARY KEY (`expiry_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`store_id`),
  ADD UNIQUE KEY `store_id` (`store_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`),
  ADD UNIQUE KEY `item_id` (`item_id`),
  ADD UNIQUE KEY `upc` (`upc`);

--
-- Indexes for table `payment_method`
--
ALTER TABLE `payment_method`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `card_no` (`card_no`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`trade_license`),
  ADD UNIQUE KEY `trade_license` (`trade_license`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_key` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5243;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1611;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `expiry`
--
ALTER TABLE `expiry`
  MODIFY `expiry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `expiry`
--
ALTER TABLE `expiry`
  ADD CONSTRAINT `expiry_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `items` (`item_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
