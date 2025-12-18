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
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int NOT NULL,
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
  `pic_email` varchar(200) NOT NULL,
  `pic_position` varchar(100) NOT NULL,
  `category` enum('Product','Service','Other') NOT NULL,
  `category_details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `user_id`, `company_name`, `industry_type`, `company_address`, `company_city`, `company_state`, `company_postcode`, `company_phone`, `company_email`, `pic_name`, `pic_phone`, `pic_email`, `pic_position`, `category`, `category_details`) VALUES
(1, 2, 'Aurora Retail Sdn Bhd', 'Retail', '23, Jalan SS 15/4, Subang Jaya', 'Subang Jaya', 'Selangor', '47500', '03-5612 8899', 'it@auroraretail.my', 'Lee Jia Min', '012-889 7766', 'jiamin.lee@auroraretail.my', 'Operations Manager', 'Service', 'POS system installation, router configuration and basic network troubleshooting for cashier PCs'),
(2, 2, 'Maple Grove Cafe', 'Food & Beverage', '12, Jalan Tun Sambanthan 4, Brickfields', 'Kuala Lumpur', 'Wilayah Persekutuan Kuala Lumpur', '50470', '03-2201 3344', 'owner@maplegrovecafe.my', 'Ariff Hakimi', '013-771 2300', 'ariff@maplegrovecafe.my', 'Owner', 'Service', 'CCTV system setup, WiFi optimisation and on-call IT support for POS tablets'),
(3, 3, 'CyberSphere Esports Arena', 'Entertainment / Esports', '5, Jalan Sutera 3, Taman Sutera Utama', 'Johor Bahru', 'Johor', '81300', '07-556 9988', 'admin@cyberspherearena.my', 'Chong Wei Han', '016-555 4499', 'weihan.chong@cyberspherearena.my', 'Esports Manager', 'Product', 'Custom gaming PC builds, GPU upgrades and periodic maintenance on 20+ gaming rigs'),
(4, 1, 'Bayfront Accounting Services', 'Professional Services', '19-3, Jalan Burma, Bayfront Commercial Centre', 'George Town', 'Pulau Pinang', '10050', '04-227 6633', 'it@bayfrontaccounting.my', 'Siti Rahmah', '017-662 0088', 'siti.rahmah@bayfrontaccounting.my', 'Senior Partner', 'Service', 'Windows Server reinstall, backup solution setup and multi-function printer configuration');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD KEY `fk_customer_user` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `fk_customer_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
