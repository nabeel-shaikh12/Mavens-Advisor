-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2024 at 07:02 PM
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
  `confirmpassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `username`, `password`, `confirmpassword`) VALUES
(1, 'admin@gmail.com', 'AbdurRahman12', '$2y$10$i8YJ6oTF.rzhuKSbFfqab.yQmmM5TBuyzLpbWNMpNfG65VuW1qfnm', '$2y$10$yFenTeVuOz1tuhyU6XL1aeUZfL7sBLTMSarwFuC7xEUZTbG/AZ44q');

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
(135, 2.00, 10.00, 10.00, 0.00, 0.00, 0.00, 105.00, 22.00, '2024-01-31 18:35:28'),
(136, 2.00, 10.00, 10.00, 0.00, 0.00, 0.00, 105.00, 22.00, '2024-02-01 12:28:24'),
(137, 2.00, 10.00, 10.00, 30.00, 30.00, 300.00, 495.00, 382.00, '2024-02-05 16:44:48'),
(138, 2.00, 10.00, 10.00, 30.00, 30.00, 300.00, 495.00, 382.00, '2024-02-05 16:44:49'),
(139, 2.00, 10.00, 10.00, 30.00, 0.00, 0.00, 150.00, 52.00, '2024-02-05 16:46:38'),
(140, 2.00, 10.00, 10.00, 30.00, 0.00, 0.00, 150.00, 52.00, '2024-02-05 16:47:37'),
(143, 2.00, 10.00, 10.00, 30.00, 30.00, 300.00, 495.00, 382.00, '2024-02-05 16:49:28'),
(144, 2.00, 17.50, 10.00, 37.50, 0.00, 0.00, 195.00, 67.00, '2024-02-06 17:03:50');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `email_address` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `email_address`, `message`, `timestamp`) VALUES
(7, 'qaziabdurrahman12@gmail.com', 'Transaction Price: , Invoice Price: , Payroll Price: , Cashflow Price: , Budget Price: , Setup Price: , Total Price: Transaction Price: 15.00                      Invoice Price: 45.00                      Payroll Price: 45.00                      Cashflow Price: 45.00                      Budget Price: 45.00                      Setup Price: 300.00                      Total Price: 495.00', '2024-02-07 17:39:00'),
(8, 'qaziabdurrahman12@gmail.com', 'Transaction Price: , Invoice Price: , Payroll Price: , Cashflow Price: , Budget Price: , Setup Price: , Total Price: Transaction Price: 15.00                      Invoice Price: 45.00                      Payroll Price: 45.00                      Cashflow Price: 45.00                      Budget Price: 45.00                      Setup Price: 0.00                      Total Price: 195.00', '2024-02-07 17:42:47'),
(9, 'qaziabdurrahman12@gmail.com', 'Transaction Price: , Invoice Price: , Payroll Price: , Cashflow Price: , Budget Price: , Setup Price: , Total Price: Transaction Price: 15.00                      Invoice Price: 45.00                      Payroll Price: 45.00                      Cashflow Price: 45.00                      Budget Price: 45.00                      Setup Price: 0.00                      Total Price: 195.00', '2024-02-07 17:43:49'),
(10, 'qaziabdurrahman12@gmail.com', 'Transaction Price: , Invoice Price: , Payroll Price: , Cashflow Price: , Budget Price: , Setup Price: , Total Price: Transaction Price: 15.00                      Invoice Price: 457.50                      Payroll Price: 15.00                      Cashflow Price: 0.00                      Budget Price: 0.00                      Setup Price: 0.00                      Total Price: 487.50', '2024-02-07 17:46:47'),
(11, 'qaziabdurrahman12@gmail.com', 'Transaction Price: , Invoice Price: , Payroll Price: , Cashflow Price: , Budget Price: , Setup Price: , Total Price: Transaction Price: 15.00                      Invoice Price: 45.00                      Payroll Price: 468.75                      Cashflow Price: 0.00                      Budget Price: 0.00                      Setup Price: 0.00                      Total Price: 528.75', '2024-02-07 17:48:05');

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
(25, 'Consulting', 'Small (10 - 50 Employees)', 'bookkeeping', 'Advisors', 'Abdur', 'rehman', 'abc@gmail.com', 2147483647, '2024-02-07 16:33:59'),
(26, 'Consulting Real Estate', 'Mid-size (51 - 250 Employees)', 'bookkeeping', 'Advisors', 'Abdur', 'rehman', 'abc@gmail.com', 2147483647, '2024-02-07 16:49:58'),
(27, 'Consulting Real Estate', 'Startup (1 - 9 Employees)', 'bookkeeping', 'Advisors', 'Abdur', 'rehman', 'abc@gmail.com', 2147483647, '2024-02-07 17:00:22'),
(28, 'Health', 'Small (10 - 50 Employees)', 'bookkeeping', 'Advisors', 'Abdur', 'rehman', 'abc@gmail.com', 2147483647, '2024-02-07 17:23:18'),
(29, 'Consulting Real Estate', 'Small (10 - 50 Employees)', 'bookkeeping', 'abc', 'Abdur', 'rehman', 'abc@gmail.com', 2147483647, '2024-02-07 17:24:03'),
(30, 'Health', 'Small (10 - 50 Employees)', 'bookkeeping', 'Advisors', 'Abdur', 'rehman', 'abc@gmail.com', 2147483647, '2024-02-07 17:32:01'),
(31, 'Food & Beverages', 'Middle Market (250 - 1000 Employees)', 'Select an option', 'Advisors', 'Abdur', 'rehman', 'abc@gmail.com', 2147483647, '2024-02-07 17:41:07'),
(32, 'Food & Beverages', 'Middle Market (250 - 1000 Employees)', 'Select an option', 'Advisors', 'Abdur', 'rehman', 'abc@gmail.com', 2147483647, '2024-02-07 17:41:09'),
(33, 'Food & Beverages', 'Middle Market (250 - 1000 Employees)', 'bookkeeping', 'Advisors', 'Abdur', 'rehman', 'abc@gmail.com', 2147483647, '2024-02-07 17:41:15');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirm_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email_address`, `user_name`, `password`, `confirm_password`) VALUES
(5, 'qaziabdurrahman12@gmail.com', 'abdurrahman12', '$2y$10$cgsJ0iZeXVQi2TXLRPBxweicuWF1KOKkWGdR0tNv3ZAnYO6f11Haa', '$2y$10$V7NfkkXgwzA5lL3P5X9u2uOz6UufvHQUSa08EhY1VE.xFkt5Kcx2u'),
(6, 'info@mavensadvisor.com', 'Mavens Advisor', '$2y$10$G3gxe7aR.07j/aVVruVRsOi0d2xPsTuOvaLeXv21v.1OjqDCGHsMe', '$2y$10$6bPxo/VbeTIdAQwGB6yG3O9XMUWIItsWBHBmBpvov3R.vrOe6duWC');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `subscription_form`
--
ALTER TABLE `subscription_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
