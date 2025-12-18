-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 04, 2025 at 02:45 AM
-- Server version: 8.4.3
-- PHP Version: 8.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mts`
--

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `company_name` varchar(200) NOT NULL,
  `industry_type` varchar(100) NOT NULL,
  `company_address` text NOT NULL,
  `company_city` varchar(100) NOT NULL,
  `company_state` varchar(100) NOT NULL,
  `company_postcode` varchar(10) NOT NULL,
  `company_phone` varchar(20) NOT NULL,
  `company_email` varchar(200) NOT NULL,
  `pic_name` varchar(150) NOT NULL,
  `pic_phone` varchar(20) NOT NULL,
  `pic_email` varchar(100) NOT NULL,
  `brands_supplied` text NOT NULL,
  `items_supplied` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `user_id`, `company_name`, `industry_type`, `company_address`, `company_city`, `company_state`, `company_postcode`, `company_phone`, `company_email`, `pic_name`, `pic_phone`, `pic_email`, `brands_supplied`, `items_supplied`) VALUES
(1, 1, 'TechNova Supplies Sdn Bhd', 'IT Hardware', '15, Jalan Teknologi 3/6B, Kota Damansara', 'Petaling Jaya', 'Selangor', '47810', '03-7722 4588', 'contact@technova.com', 'Aiman Hakim', '012-667 4521', 'aiman.hakim@technova.com', 'Acer', 'Laptop'),
(2, 2, 'Digital Frontier Distribution', 'Computer Components', '27, Jalan Pusat Niaga 1, Taman Intan', 'Klang', 'Selangor', '41300', '03-3358 9921', 'sales@digitalfrontier.my', 'Nur Farah', '017-885 2094', 'farah@digitalfrontier.my', 'MSI', 'Motherboard'),
(3, 3, 'SouthGate IT Solutions Sdn Bhd', 'Network Infrastructure', '21, Jalan Tebrau 5/3, Taman Sentosa', 'Johor Bahru', 'Johor', '80150', '07-334 8922', 'info@southgateit.com', 'Hazim Razak', '013-772 4099', 'hazim.razak@southgateit.com', 'Cisco', 'Network Switch'),
(4, 1, 'Peninsula Tech Ware Sdn Bhd', 'IT Peripherals', '8, Lebuh Pantai, Georgetown Business Centre', 'George Town', 'Pulau Pinang', '10300', '04-261 7743', 'support@peninsulatech.my', 'Tan Wei Ling', '016-883 1204', 'weiling.tan@peninsulatech.my', 'Logitech', 'Keyboard & Mouse');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`),
  ADD KEY `fk_supplier_user` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `supplier`
--
ALTER TABLE `supplier`
  ADD CONSTRAINT `fk_supplier_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
