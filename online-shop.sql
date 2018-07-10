-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2018 at 03:06 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online-shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand_table`
--

CREATE TABLE `brand_table` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(300) NOT NULL,
  `brand_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_address_table`
--

CREATE TABLE `customer_address_table` (
  `customer_address_id` int(11) NOT NULL,
  `customer_address_lot` varchar(300) NOT NULL,
  `customer_address_street` varchar(300) NOT NULL,
  `customer_address_barangay` varchar(300) NOT NULL,
  `customer_address_city` varchar(300) NOT NULL,
  `customer_address_zipcode` int(11) NOT NULL,
  `customer_address_country` varchar(300) NOT NULL,
  `customer_address_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_address_table`
--

INSERT INTO `customer_address_table` (`customer_address_id`, `customer_address_lot`, `customer_address_street`, `customer_address_barangay`, `customer_address_city`, `customer_address_zipcode`, `customer_address_country`, `customer_address_status`) VALUES
(1, '220 Interior 31', 'Honorio Lopez', '129', 'Manila', 113, 'Philippines', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `customer_table`
--

CREATE TABLE `customer_table` (
  `customer_id` int(11) NOT NULL,
  `customer_firstname` varchar(300) NOT NULL,
  `customer_middlename` varchar(300) DEFAULT NULL,
  `customer_lastname` varchar(300) NOT NULL,
  `customer_birthday` date NOT NULL,
  `customer_email` varchar(300) NOT NULL,
  `customer_username` varchar(300) NOT NULL,
  `customer_password` varchar(300) NOT NULL,
  `customer_telephone` int(11) NOT NULL,
  `customer_mobile` int(11) NOT NULL,
  `customer_address_id` int(11) NOT NULL,
  `customer_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_table`
--

INSERT INTO `customer_table` (`customer_id`, `customer_firstname`, `customer_middlename`, `customer_lastname`, `customer_birthday`, `customer_email`, `customer_username`, `customer_password`, `customer_telephone`, `customer_mobile`, `customer_address_id`, `customer_status`) VALUES
(1, 'jonathan', 'chua', 'del prado', '1995-10-01', 'jonathandelprado60@gmail.com', 'jonathan', 'delprado', 123, 2147483647, 1, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE `order_table` (
  `order_id` int(11) NOT NULL,
  `order_placed` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `order_status` varchar(100) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment_method_table`
--

CREATE TABLE `payment_method_table` (
  `payment_method_id` int(11) NOT NULL,
  `payment_method_desc` varchar(300) NOT NULL,
  `payment_method_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_category_table`
--

CREATE TABLE `product_category_table` (
  `product_category_id` int(11) NOT NULL,
  `product_category` varchar(300) NOT NULL,
  `product_category_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_table`
--

CREATE TABLE `product_table` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(300) NOT NULL,
  `product_price` double NOT NULL,
  `product_model_no` varchar(300) NOT NULL,
  `product_img_path` varchar(300) NOT NULL,
  `product_category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shipping_method_table`
--

CREATE TABLE `shipping_method_table` (
  `shipping_method_id` int(11) NOT NULL,
  `shipping_method` varchar(300) NOT NULL,
  `shipping_method_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplier_address_table`
--

CREATE TABLE `supplier_address_table` (
  `supplier_address_id` int(11) NOT NULL,
  `supplier_address_street` varchar(300) NOT NULL,
  `supplier_address_city` varchar(300) NOT NULL,
  `supplier_address_barangay` varchar(300) DEFAULT NULL,
  `supplier_address_country` varchar(300) NOT NULL,
  `supplier_address_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplier_table`
--

CREATE TABLE `supplier_table` (
  `supplier_id` int(11) NOT NULL,
  `supplier_name` varchar(300) NOT NULL,
  `supplier_telephone` int(11) NOT NULL,
  `supplier_mobile` int(11) NOT NULL,
  `supplier_status` varchar(50) NOT NULL,
  `supplier_address_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand_table`
--
ALTER TABLE `brand_table`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `customer_address_table`
--
ALTER TABLE `customer_address_table`
  ADD PRIMARY KEY (`customer_address_id`);

--
-- Indexes for table `customer_table`
--
ALTER TABLE `customer_table`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `order_table`
--
ALTER TABLE `order_table`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payment_method_table`
--
ALTER TABLE `payment_method_table`
  ADD PRIMARY KEY (`payment_method_id`);

--
-- Indexes for table `product_category_table`
--
ALTER TABLE `product_category_table`
  ADD PRIMARY KEY (`product_category_id`);

--
-- Indexes for table `product_table`
--
ALTER TABLE `product_table`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `shipping_method_table`
--
ALTER TABLE `shipping_method_table`
  ADD PRIMARY KEY (`shipping_method_id`);

--
-- Indexes for table `supplier_address_table`
--
ALTER TABLE `supplier_address_table`
  ADD PRIMARY KEY (`supplier_address_id`);

--
-- Indexes for table `supplier_table`
--
ALTER TABLE `supplier_table`
  ADD PRIMARY KEY (`supplier_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand_table`
--
ALTER TABLE `brand_table`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_address_table`
--
ALTER TABLE `customer_address_table`
  MODIFY `customer_address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_table`
--
ALTER TABLE `customer_table`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_table`
--
ALTER TABLE `order_table`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_method_table`
--
ALTER TABLE `payment_method_table`
  MODIFY `payment_method_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_category_table`
--
ALTER TABLE `product_category_table`
  MODIFY `product_category_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_table`
--
ALTER TABLE `product_table`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shipping_method_table`
--
ALTER TABLE `shipping_method_table`
  MODIFY `shipping_method_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supplier_address_table`
--
ALTER TABLE `supplier_address_table`
  MODIFY `supplier_address_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supplier_table`
--
ALTER TABLE `supplier_table`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
