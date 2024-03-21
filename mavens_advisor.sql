-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2024 at 07:30 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mavens advisor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirmpassword` varchar(100) NOT NULL,
  `profile_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `username`, `password`, `confirmpassword`, `profile_image`) VALUES
(1, 'admin@gmail.com', 'Mavens Advisor', '$2y$10$i8YJ6oTF.rzhuKSbFfqab.yQmmM5TBuyzLpbWNMpNfG65VuW1qfnm', '$2y$10$yFenTeVuOz1tuhyU6XL1aeUZfL7sBLTMSarwFuC7xEUZTbG/AZ44q', 'profile_pictures/65d495f461ea4_mavens update.png');

-- --------------------------------------------------------

--
-- Table structure for table `calculator`
--

CREATE TABLE `calculator` (
  `id` int(11) NOT NULL,
  `transactionPrice` decimal(10,2) DEFAULT NULL,
  `invoicePrice` decimal(10,2) DEFAULT NULL,
  `payrollPrice` decimal(10,2) DEFAULT NULL,
  `cashflowPrice` decimal(10,2) DEFAULT NULL,
  `budgetPrice` decimal(10,2) DEFAULT NULL,
  `setupPrice` decimal(10,2) DEFAULT NULL,
  `totalPrice` decimal(10,2) DEFAULT NULL,
  `discountPrice` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `calculator`
--

INSERT INTO `calculator` (`id`, `transactionPrice`, `invoicePrice`, `payrollPrice`, `cashflowPrice`, `budgetPrice`, `setupPrice`, `totalPrice`, `discountPrice`, `created_at`) VALUES
(145, 2.00, 1851.67, 0.00, 0.00, 0.00, 0.00, 8347.50, 1853.67, '2024-02-23 15:06:10');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `email_address` varchar(200) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `full_name`, `email_address`, `message`) VALUES
(15, 'Abdur rehman', 'abc@gmail.com', 'sssssssssssssssssssssssssssss'),
(16, 'Abdur rehman', 'abc@gmail.com', 'helloo world'),
(17, 'Abdur rehman', 'abc@gmail.com', 'zzz'),
(18, 'Abdur rehman', 'abc@gmail.com', 'hehehehhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh');

-- --------------------------------------------------------

--
-- Table structure for table `customer_status`
--

CREATE TABLE `customer_status` (
  `customer_email` varchar(255) NOT NULL,
  `is_online` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_status`
--

INSERT INTO `customer_status` (`customer_email`, `is_online`) VALUES
('', 1);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `email_address` varchar(200) NOT NULL,
  `admin_email` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscription_form`
--

CREATE TABLE `subscription_form` (
  `id` int(11) NOT NULL,
  `business_description` varchar(255) NOT NULL,
  `business_size` varchar(255) NOT NULL,
  `business_category` varchar(255) NOT NULL,
  `business_name` varchar(255) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_no` int(11) NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscription_form`
--

INSERT INTO `subscription_form` (`id`, `business_description`, `business_size`, `business_category`, `business_name`, `firstname`, `lastname`, `email`, `phone_no`, `updated_date`) VALUES
(110, 'Health', 'Startup (1 - 9 Employees)', 'bookkeeping', 'brannovate', 'Abdur', 'rehman', 'abc@gmail.com', 2147483647, '2024-03-04 16:51:14'),
(111, 'Media / Entertainment', 'Middle Market (250 - 1000 Employees)', 'financialAnaylysis', 'Advisors', 'Abdur', 'rehman', 'abc@gmail.com', 2147483647, '2024-03-04 17:04:23'),
(112, 'Media / Entertainment', 'Middle Market (250 - 1000 Employees)', 'bookkeeping', 'Advisors', 'Abdur', 'rehman', 'abc@gmail.com', 2147483647, '2024-03-04 17:04:30'),
(113, 'Consulting Real Estate', 'Startup (1 - 9 Employees)', 'bookkeeping', 'Advisors', 'Abdur', 'rehman', 'abc@gmail.com', 2147483647, '2024-03-04 17:15:47'),
(114, 'Manufacturing / Wholesale', 'Middle Market (250 - 1000 Employees)', 'bookkeeping', 'sssssss', 'Abdur', 'rehman', 'abc@gmail.com', 2147483647, '2024-03-04 17:23:21'),
(115, 'Food & Beverages', 'Small (10 - 50 Employees)', 'bookkeeping', 'Advisors', 'Abdur', 'rehman', 'abc@gmail.com', 2147483647, '2024-03-04 17:32:47'),
(116, 'Retail', 'Mid-size (51 - 250 Employees)', 'bookkeeping', 'Advisors', 'Abdur', 'rehman', 'abc@gmail.com', 2147483647, '2024-03-04 17:54:45'),
(117, 'Transportation / Logistics', 'Middle Market (250 - 1000 Employees)', 'bookkeeping', 'Ar store', 'Abdur', 'Rahman', 'qaziabdurrahman12@gmail.com', 2147483647, '2024-03-04 18:02:49'),
(118, 'Manufacturing / Wholesale', 'Mid-size (51 - 250 Employees)', 'audit&Assurance', 'Advisors', 'Abdur', 'rehman', 'abc@gmail.com', 2147483647, '2024-03-04 18:13:12'),
(119, 'Manufacturing / Wholesale', 'Mid-size (51 - 250 Employees)', 'audit&Assurance', 'Advisors', 'Abdur', 'rehman', 'abc@gmail.com', 2147483647, '2024-03-04 18:13:14'),
(120, 'Manufacturing / Wholesale', 'Mid-size (51 - 250 Employees)', 'bookkeeping', 'Advisors', 'Abdur', 'rehman', 'abc@gmail.com', 2147483647, '2024-03-04 18:13:19'),
(121, 'Consulting', 'Startup (1 - 9 Employees)', 'financialAnaylysis', 'Advisors', 'Abdur', 'rehman', 'abc@gmail.com', 2147483647, '2024-03-04 18:17:52'),
(122, 'Consulting', 'Startup (1 - 9 Employees)', 'financialAnaylysis', 'Advisors', 'Abdur', 'rehman', 'abc@gmail.com', 2147483647, '2024-03-04 18:17:53'),
(123, 'Consulting', 'Startup (1 - 9 Employees)', 'bookkeeping', 'Advisors', 'Abdur', 'rehman', 'abc@gmail.com', 2147483647, '2024-03-04 18:17:58'),
(124, 'Consulting', 'Enterprise (1000+ Employees)', 'bookkeeping', 'Advisors', 'Abdur', 'rehman', 'abc@gmail.com', 2147483647, '2024-03-05 18:48:28'),
(125, 'Consulting', 'Mid-size (51 - 250 Employees)', 'bookkeeping', 'Nashfact.com', 'Abcde', 'efgh', 'abc@gmail.com', 2147483647, '2024-03-06 10:28:17'),
(126, 'Consulting Real Estate', 'Startup (1 - 9 Employees)', 'bookkeeping', 'Advisors', 'Abdur', 'rehman', 'abc@gmail.com', 2147483647, '2024-03-06 12:08:12'),
(127, 'Consulting', 'Startup (1 - 9 Employees)', 'financialAnaylysis', 'adc', 'add', 'ad', 'qaziabdulrahman@hotmail.com', 123434, '2024-03-08 10:44:42'),
(128, 'Consulting', 'Startup (1 - 9 Employees)', 'bookkeeping', 'adc', 'add', 'ad', 'qaziabdulrahman@hotmail.com', 123434, '2024-03-08 10:44:53'),
(129, 'Food & Beverages', 'Mid-size (51 - 250 Employees)', 'BusinessSystem', 'Advisors', 'Abdur', 'rehman', 'abc@gmail.com', 2147483647, '2024-03-12 16:01:42'),
(130, 'Food & Beverages', 'Mid-size (51 - 250 Employees)', 'BusinessSystem', 'Advisors', 'Abdur', 'rehman', 'abc@gmail.com', 2147483647, '2024-03-12 16:01:44'),
(134, 'Manufacturing / Wholesale', 'Mid-size (51 - 250 Employees)', 'bookkeeping', 'Advisors', 'Abdur', 'rehman', 'abc@gmail.com', 2147483647, '2024-03-12 20:36:18'),
(135, 'Media / Entertainment', 'Middle Market (250 - 1000 Employees)', 'BusinessSystem', 'abc', 'Abdur', 'rehman', 'abc@gmail.com', 2147483647, '2024-03-12 20:39:32'),
(137, 'Food & Beverages', 'Mid-size (51 - 250 Employees)', 'financialAnaylysis', 'abc', 'Abdur', 'rehman', 'abc@gmail.com', 2147483647, '2024-03-12 20:42:34'),
(142, 'Food & Beverages', 'Startup (1 - 9 Employees)', 'bookkeeping', 'Fintech', 'Abdullah', 'Ahmed', 'abcd@gmail.com', 1988181818, '2024-03-15 10:46:46');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirm_password` varchar(100) NOT NULL,
  `profile_image` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email_address`, `user_name`, `password`, `confirm_password`, `profile_image`) VALUES
(16, 'info@mavensadvisor.com', 'Mavens Advisor', '$2y$10$NtPyJT2/SN5KRtAsV3YgwOdcppEdrDtmZLXblTf0NcA7YpBbH/AlW', '$2y$10$pCHngXELYJRP9n5EKK0ru.yEWN/vD2A7U2an1j2SKkLu.LtnTxafS', 'profile_pictures/65d7834f621d1_finance-6.jpeg'),
(17, 'qaziabdurrahman12@gmail.com', 'qazi', '$2y$10$2PYIiPJyV.E2J184AzKH9e3I3w4yigObBxOkTrfKnKwYtbnJQNMda', '$2y$10$PwZxnd6FlhQt68peuJGTMeEdSuXL3CG1nV7GcreQ0hXVsogqr3ifu', 'profile_pictures/65de1ab6581eb_pngegg.png');

-- --------------------------------------------------------

--
-- Table structure for table `visit_count`
--

CREATE TABLE `visit_count` (
  `id` int(11) NOT NULL,
  `count` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visit_count`
--

INSERT INTO `visit_count` (`id`, `count`) VALUES
(1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `visit_count_subscription`
--

CREATE TABLE `visit_count_subscription` (
  `id` int(11) NOT NULL,
  `count` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visit_count_subscription`
--

INSERT INTO `visit_count_subscription` (`id`, `count`) VALUES
(1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calculator`
--
ALTER TABLE `calculator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_status`
--
ALTER TABLE `customer_status`
  ADD PRIMARY KEY (`customer_email`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscription_form`
--
ALTER TABLE `subscription_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visit_count`
--
ALTER TABLE `visit_count`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visit_count_subscription`
--
ALTER TABLE `visit_count_subscription`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `calculator`
--
ALTER TABLE `calculator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=845;

--
-- AUTO_INCREMENT for table `subscription_form`
--
ALTER TABLE `subscription_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `visit_count`
--
ALTER TABLE `visit_count`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visit_count_subscription`
--
ALTER TABLE `visit_count_subscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
