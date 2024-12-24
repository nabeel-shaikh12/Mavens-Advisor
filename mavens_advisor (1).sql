-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2024 at 07:23 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mavens_advisor`
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
(1, 'admin@gmail.com', 'Mavens Advisor', '$2y$10$i8YJ6oTF.rzhuKSbFfqab.yQmmM5TBuyzLpbWNMpNfG65VuW1qfnm', '$2y$10$yFenTeVuOz1tuhyU6XL1aeUZfL7sBLTMSarwFuC7xEUZTbG/AZ44q', 'profile_pictures/65d495f461ea4_mavens update.png'),
(9, 'info@mavensadvisor.com', 'Admin', '$2b$10$.cVNDXmlPOfDvUK4WWWsm.2oNUFUUDpm5J0mw89v/tHad38ThbjUm', '$2b$10$PoYAba487jz7uxateS0ZJew.4o1UQyQZnaNS.qNZoexhf8Apaohyi', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `email_address` varchar(200) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `full_name`, `email_address`, `message`) VALUES
(15, 'Abdur rehman', 'abc@gmail.com', 'sssssssssssssssssssssssssssss'),
(16, 'Abdur rehman', 'abc@gmail.com', 'helloo world'),
(17, 'Abdur rehman', 'abc@gmail.com', 'zzz'),
(18, 'Abdur rehman', 'abc@gmail.com', 'hehehehhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh'),
(19, 'ALI', 'qaziabdulrahmannnt@gmail.com', 'aaaaaaaaaaaaaaaaa'),
(20, 'Qazi Abdur Rahman', 'qaziabdulrahmannnt@gmail.com', 'sssshhhhhhhhhhhhhbzbbs'),
(21, 'Abcd', 'abcd@gmail.com', 'ssssssssssssss'),
(22, 'Abdur Rahman', 'qaziabdulrahmannnt@gmail.com', 'sssssssssssssssssssssssssss\n'),
(23, 'Nameer Udding', 'nameeruddin06@gmail.com', 'ssss'),
(24, 'Abdur Rahman', 'qaziabdulrahmannnt@gmail.com', 'aaaaaaaaaaaaaaaaaa\n'),
(25, 'Abdur Rahman', 'qaziabdulrahmannnt@gmail.com', 'hello world\n');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_code` varchar(100) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_code`, `course_name`, `teacher_id`, `created_at`, `updated_at`) VALUES
(1, 'UIssjjsjs', 'ssss', 2, '2024-12-03 16:40:08', '2024-12-03 16:40:08'),
(2, 'CUU', 'Sociology', 2, '2024-12-03 17:31:31', '2024-12-03 17:31:31');

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
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `business_category` varchar(255) NOT NULL,
  `sub_business_category` varchar(255) NOT NULL,
  `business_size` varchar(255) NOT NULL,
  `company_operate_country` varchar(255) NOT NULL,
  `company_revenue` varchar(255) DEFAULT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `founded_year` int(4) DEFAULT NULL,
  `customer_type` varchar(255) DEFAULT NULL,
  `business_name` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `service_looking_for` varchar(255) DEFAULT NULL,
  `accounting_software_used` enum('Yes','No') DEFAULT NULL,
  `accounting_software_name` varchar(255) DEFAULT NULL,
  `setup` varchar(255) DEFAULT NULL,
  `monthly_bookkeeping_count` int(11) DEFAULT NULL,
  `monthly_payroll_count` int(11) DEFAULT NULL,
  `monthly_invoicing_count` int(11) DEFAULT NULL,
  `monthly_contractor_payment_count` int(11) DEFAULT NULL,
  `monthly_billing` varchar(10) DEFAULT NULL,
  `monthly_profit_and_loss_reporting` varchar(10) DEFAULT NULL,
  `monthly_budgeting` varchar(10) DEFAULT NULL,
  `monthly_cashflow_forecasting` varchar(10) DEFAULT NULL,
  `monthly_financial_analysis` varchar(10) DEFAULT NULL,
  `tax_filing` varchar(10) DEFAULT NULL,
  `satisfied_with_quotation` enum('Yes','No') DEFAULT NULL,
  `reason` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `email_address` varchar(200) NOT NULL,
  `admin_email` varchar(200) DEFAULT NULL,
  `message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `email_address`, `admin_email`, `message`, `timestamp`) VALUES
(1073, 'qaziabdurrahman12@gmail.com', NULL, 'Business description: Tech Services\nBusiness subCategory: IoT Services\nBusiness size: Small (10 - 50 Employees)\nCompany operate country: United States\nCompany revenue: 1000+\nCurrency: Azerbaijani Manat (AZN)\nYearDropdown: 2020\nCustomer type: Both\nBusiness name: Advisors\nFirstnames: Abdur rehman\nEmail: qaziabdurrahman12@gmail.com\nPhone no: +923171150595\nWhichService: Accounting &amp; Finance\nAccounting software used: FreshBooks\nNumberOfTransaction: 8\nNumberOfInvoiceInput: 8\nTransactionPrice: 10.00\nDiscountTransactionPrice: 1.33\nInvoicePrice: 45.00\nDiscountInvoicePrice: 10.00\nTotalPrice: 55.00\nDiscountedPrice: 11.33\nCfo: yes\n', '2024-07-10 16:34:07'),
(1074, 'qaziabdurrahman12@gmail.com', NULL, 'Business description: Food &amp; Beverages\nBusiness subCategory: Online Food Business / Fresh or Frozen\nBusiness size: Small (10 - 50 Employees)\nCompany operate country: United States\nCompany revenue: 1M+\nCurrency: Armenian Dram (AMD)\nYearDropdown: 2017\nCustomer type: Other\nSpecifyCustomer: hello world\nBusiness name: Advisors\nFirstnames: Abdur rehman\nEmail: qaziabdurrahman12@gmail.com\nPhone no: +923171150595\nWhichService: Accounting &amp; Finance\nAccounting software used: Excel\nNumberOfTransaction: 12\nNumberOfInvoiceInput: 10\nNumberOfPayroll: 10\nNoOfExpense: 12\nNumberOfContractualPayment: 8\nTransactionPrice: 15.00\nDiscountTransactionPrice: 2.00\nInvoicePrice: 37.50\nDiscountInvoicePrice: 8.33\nExpensePrice: 45.00\nPayrollPrice: 37.50\nDiscountPayrollPrice: 8.33\nIrsPrice: 200.00\nContractualPaymentPrice: 45.00\nTotalPrice: 380.00\nDiscountedPrice: 273.66\nCfo: yes\n', '2024-07-10 17:51:59'),
(1075, 'qaziabdulrahmannt12@gmail.com', NULL, 'Business description: Retail\nBusiness size: Middle Market (250 - 1000 Employees)\nCompany operate country: United States\nCompany revenue: 10,000+\nCurrency: Bahraini Dinar (BHD)\nYearDropdown: 2007\nCustomer type: Both\nBusiness name: Advisors\nFirstnames: Abdur rehman\nEmail: qaziabdulrahmannt12@gmail.com\nPhone no: +923171150595\nWhichService: IT Support\n', '2024-07-22 14:25:02'),
(1076, 'qaziabdulrahmannt12@gmail.com', 'admin@gmail.com', 'hi', '2024-07-22 17:38:49'),
(1077, 'qaziabdurrahman12@gmail.com', 'admin@gmail.com', 'yes', '2024-07-22 17:44:19'),
(1078, 'abc@gmail.com', NULL, 'Business description: Tech Services\nBusiness subCategory: Software House\nBusiness size: Mid-size (51 - 250 Employees)\nCompany operate country: United States\nCompany revenue: 1000+\nCurrency: Aruban Florin (AWG)\nYearDropdown: 2019\nCustomer type: Individuals\nBusiness name: Advisors\nFirstnames: Abdur rehman\nEmail: abc@gmail.com\nPhone no: +923171150595\nWhichService: Accounting &amp; Finance\nSoftwarePreferred: Sage\nNumberOfTransaction: 9\nTransactionPrice: 15.00\nDiscountTransactionPrice: 2.00\nSetupPrice: 300.00\nTotalPrice: 315.00\nDiscountedPrice: 302.00\nCfo: yes\n', '2024-07-31 16:48:28'),
(1079, 'qaziabdurrahman12@gmail.com', NULL, 'hii', '2024-08-05 11:57:33'),
(1080, 'abc@gmail.com', 'admin@gmail.com', 'hi', '2024-08-11 21:45:29'),
(1081, 'qaziabdulrahmannt@gmail.com', NULL, 'Business description: Retail\nBusiness size: Enterprise (1000+ Employees)\nCompany operate country: United Kingdom\nCompany revenue: 10,000+\nCurrency: Armenian Dram (AMD)\nYearDropdown: 2020\nCustomer type: Individuals\nBusiness name: Advisors\nFirstnames: Abdur rehman\nEmail: qaziabdulrahmannt@gmail.com\nPhone no: +923171150595\nWhichService: IT Support\n', '2024-08-21 18:07:04'),
(1082, 'qaziabdulrahmannt@gmail.com', NULL, 'yyyy', '2024-08-21 18:07:40');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `enrollment_no` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_courses`
--

CREATE TABLE `student_courses` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `registered_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscription_form`
--

CREATE TABLE `subscription_form` (
  `id` int(11) NOT NULL,
  `business_description` varchar(255) DEFAULT NULL,
  `business_subCategory` varchar(255) DEFAULT NULL,
  `other_specify` varchar(255) DEFAULT NULL,
  `business_size` varchar(255) DEFAULT NULL,
  `company_operate_country` varchar(255) DEFAULT NULL,
  `company_revenue` varchar(255) DEFAULT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `yearDropdown` varchar(255) DEFAULT NULL,
  `customer_type` varchar(255) DEFAULT NULL,
  `specifyCustomer` varchar(255) DEFAULT NULL,
  `business_name` varchar(255) DEFAULT NULL,
  `firstnames` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_no` varchar(255) DEFAULT NULL,
  `whichService` varchar(255) DEFAULT NULL,
  `accounting_software_used` varchar(255) DEFAULT NULL,
  `softwarePreferred` varchar(255) DEFAULT NULL,
  `softwareSpecifies` varchar(255) DEFAULT NULL,
  `numberOfTransaction` int(11) DEFAULT NULL,
  `numberOfInvoiceInput` int(11) DEFAULT NULL,
  `numberOfPayroll` int(11) DEFAULT NULL,
  `noOfExpense` int(11) DEFAULT NULL,
  `numberOfContractualPayment` int(11) DEFAULT NULL,
  `transactionPrice` decimal(10,2) DEFAULT NULL,
  `discountTransactionPrice` decimal(10,2) DEFAULT NULL,
  `invoicePrice` decimal(10,2) DEFAULT NULL,
  `discountInvoicePrice` decimal(10,2) DEFAULT NULL,
  `expensePrice` decimal(10,2) DEFAULT NULL,
  `discountExpencePrice` decimal(10,2) DEFAULT NULL,
  `payrollPrice` decimal(10,0) DEFAULT NULL,
  `discountPayrollPrice` decimal(10,2) DEFAULT NULL,
  `cashflowPrice` decimal(10,2) DEFAULT NULL,
  `discountCashflowPrice` decimal(10,2) DEFAULT NULL,
  `budgetPrice` decimal(10,2) DEFAULT NULL,
  `discountBudgetPrice` decimal(10,2) DEFAULT NULL,
  `setupPrice` decimal(10,2) DEFAULT NULL,
  `irsPrice` decimal(10,2) DEFAULT NULL,
  `statePrice` decimal(10,2) DEFAULT NULL,
  `hmrcPrice` decimal(10,2) DEFAULT NULL,
  `companyPrice` decimal(10,2) DEFAULT NULL,
  `contractualPaymentPrice` decimal(10,2) DEFAULT NULL,
  `vatPrice` decimal(10,2) DEFAULT NULL,
  `financialAnalysisPrice` decimal(10,2) DEFAULT NULL,
  `profitPrice` decimal(10,2) DEFAULT NULL,
  `advisoryPrice` decimal(10,2) DEFAULT NULL,
  `totalPrice` decimal(10,2) DEFAULT NULL,
  `discountedPrice` decimal(10,2) DEFAULT NULL,
  `cfo` varchar(255) DEFAULT NULL,
  `specifyReason` varchar(255) DEFAULT NULL,
  `otherReason` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscription_form`
--

INSERT INTO `subscription_form` (`id`, `business_description`, `business_subCategory`, `other_specify`, `business_size`, `company_operate_country`, `company_revenue`, `currency`, `yearDropdown`, `customer_type`, `specifyCustomer`, `business_name`, `firstnames`, `email`, `phone_no`, `whichService`, `accounting_software_used`, `softwarePreferred`, `softwareSpecifies`, `numberOfTransaction`, `numberOfInvoiceInput`, `numberOfPayroll`, `noOfExpense`, `numberOfContractualPayment`, `transactionPrice`, `discountTransactionPrice`, `invoicePrice`, `discountInvoicePrice`, `expensePrice`, `discountExpencePrice`, `payrollPrice`, `discountPayrollPrice`, `cashflowPrice`, `discountCashflowPrice`, `budgetPrice`, `discountBudgetPrice`, `setupPrice`, `irsPrice`, `statePrice`, `hmrcPrice`, `companyPrice`, `contractualPaymentPrice`, `vatPrice`, `financialAnalysisPrice`, `profitPrice`, `advisoryPrice`, `totalPrice`, `discountedPrice`, `cfo`, `specifyReason`, `otherReason`) VALUES
(97, 'Tech Services', 'Software House', NULL, 'Startup (1 - 9 Employees)', 'United States', '1000+', 'Bangladeshi Taka (BDT)', '2016', 'Businesses', NULL, 'Advisors', 'Abdur rehman', 'qaziabdurrahman12@gmail.com', '+923171150595', 'Human Resource', 'Select an option', 'Sage', NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 300.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 300.00, 300.00, 'Select an option', 'Select an option', NULL),
(102, 'Health', 'Dermotologist', NULL, 'Middle Market (250 - 1000 Employees)', 'United Kingdom', '1M+', 'Barbadian Dollar (BBD)', '2011', 'Other', 'hello world', 'Advisors', 'abdurrahman', 'abc@gmail.com', '+923171150595', 'Accounting & Finance', 'Wave Accounting', 'Select an option', NULL, 12, 9, NULL, NULL, NULL, 15.00, 2.00, 45.00, 10.00, 0.00, 0.00, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 60.00, 12.00, 'no', 'High Price', NULL),
(104, 'Health', 'Doctor (Private Practice)', NULL, 'Mid-size (51 - 250 Employees)', 'United Kingdom', '1M+', 'Armenian Dram (AMD)', '2013', 'Other', 'hello world', 'Advisors', 'Abdur rehman', 'qaziabdurrahman12@gmail.com', '+923171150595', 'Accounting &amp; Finance', 'FreshBooks', 'Select an option', NULL, 12, 12, 12, 12, NULL, 15.00, 2.00, 45.00, 10.00, 45.00, 0.00, 45, 10.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 150.00, 67.00, 'yes', 'Select an option', NULL),
(113, 'Tech Services', 'IoT Services', NULL, 'Small (10 - 50 Employees)', 'United States', '1000+', 'Aruban Florin (AWG)', '2019', 'Both', NULL, 'Advisors', 'Abdur rehman', 'sp21bsse0056@maju.edu.pk', '+923171150595', 'Accounting &amp; Finance', 'Select an option', 'FreshBooks', NULL, 12, 12, NULL, NULL, NULL, 15.00, 2.00, 45.00, 10.00, 0.00, 0.00, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 300.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 360.00, 312.00, 'yes', 'Select an option', NULL),
(141, 'Tech Services', 'Other (Please Specify)', 'hello world', 'Mid-size (51 - 250 Employees)', 'United States', '1000+', 'Armenian Dram (AMD)', '2020', 'Businesses', NULL, 'Advisors', 'Abdur rehman', 'qaziabdulrahmannt@gmail.com', '+923171150595', 'Accounting &amp; Finance', 'FreshBooks', 'Xero', NULL, 9, NULL, NULL, NULL, NULL, 11.25, 1.50, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 300.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 311.25, 301.50, 'yes', 'Select an option', NULL),
(142, 'Tech Services', 'IoT Services', NULL, 'Mid-size (51 - 250 Employees)', 'United Kingdom', '1M+', 'Argentine Peso (ARS)', '2021', 'Individuals', NULL, '+923171150595', 'Abdur rehman', 'abc@gmail.com', '+923171150595', 'Human Resource', 'Select an option', 'Select an option', NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'Select an option', 'Select an option', NULL),
(143, 'Health', 'Nutritionist', NULL, 'Mid-size (51 - 250 Employees)', 'United Kingdom', '10,000+', 'Bahamian Dollar (BSD)', '2015', 'Other', 'hello world', 'Advisors', 'Abdur rehman', 'qaziabdulrahmannt@gmail.com', '+923117115595', 'Human Resource', 'Select an option', 'Select an option', NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'Select an option', 'Select an option', NULL),
(144, 'Consulting Real Estate', NULL, NULL, 'Mid-size (51 - 250 Employees)', 'United Kingdom', '1000+', 'Azerbaijani Manat (AZN)', '2015', 'Both', NULL, 'Advisors', 'Abdur rehman', 'qaziabdurrahman12@gmail.com', '+923171150595', 'IT Support', 'Select an option', 'Select an option', NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'Select an option', 'Select an option', NULL),
(145, 'Food &amp; Beverages', 'Other (Please Specify)', 'hello worl', 'Enterprise (1000+ Employees)', 'United States', '1M+', 'Belize Dollar (BZD)', '2012', 'Both', NULL, 'Advisors', 'Abdur rehman', 'abc@gmail.com', '+923171150595', 'Software Development &amp; Maintenance', 'Select an option', 'Select an option', NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'Select an option', 'Select an option', NULL),
(146, 'Tech Services', 'IoT Services', NULL, 'Small (10 - 50 Employees)', 'United Kingdom', '10,000+', 'Aruban Florin (AWG)', '2014', 'Other', 'hello world', 'abc', 'Abdur rehman', 'qaziabdurrahman12@gmail.com', '+923171150595', 'Accounting &amp; Finance', 'Xero', 'Select an option', NULL, 9, NULL, NULL, NULL, NULL, 15.00, 2.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 15.00, 2.00, 'yes', 'Select an option', NULL),
(147, 'Tech Services', 'Software House', NULL, 'Middle Market (250 - 1000 Employees)', 'United Kingdom', '10,000+', 'Bahamian Dollar (BSD)', '2014', 'Other', 'hello world]', 'Advisors', 'Abdur rehman', 'qaziabdulrahmannt@gmail.com', '+923171150595', 'Accounting &amp; Finance', 'Zoho Books', 'Select an option', NULL, 9, NULL, NULL, NULL, NULL, 15.00, 2.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 15.00, 2.00, 'yes', 'Select an option', NULL),
(148, 'Tech Services', 'IoT Services', NULL, 'Small (10 - 50 Employees)', 'United States', '1000+', 'Azerbaijani Manat (AZN)', '2020', 'Both', NULL, 'Advisors', 'Abdur rehman', 'qaziabdurrahman12@gmail.com', '+923171150595', 'Accounting &amp; Finance', 'FreshBooks', 'Select an option', NULL, 8, 8, NULL, NULL, NULL, 10.00, 1.33, 45.00, 10.00, 0.00, 0.00, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 55.00, 11.33, 'yes', 'Select an option', NULL),
(149, 'Food &amp; Beverages', 'Online Food Business / Fresh or Frozen', NULL, 'Small (10 - 50 Employees)', 'United States', '1M+', 'Armenian Dram (AMD)', '2017', 'Other', 'hello world', 'Advisors', 'Abdur rehman', 'qaziabdurrahman12@gmail.com', '+923171150595', 'Accounting &amp; Finance', 'Excel', 'Select an option', NULL, 12, 10, 10, 12, 8, 15.00, 2.00, 37.50, 8.33, 45.00, 0.00, 38, 8.33, 0.00, 0.00, 0.00, 0.00, 0.00, 200.00, 0.00, 0.00, 0.00, 45.00, 0.00, 0.00, 0.00, 0.00, 380.00, 273.66, 'yes', 'Select an option', NULL),
(150, 'Retail', NULL, NULL, 'Middle Market (250 - 1000 Employees)', 'United States', '10,000+', 'Bahraini Dinar (BHD)', '2007', 'Both', NULL, 'Advisors', 'Abdur rehman', 'qaziabdulrahmannt12@gmail.com', '+923171150595', 'IT Support', 'Select an option', 'Select an option', NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'Select an option', 'Select an option', NULL),
(151, 'Tech Services', 'Software House', NULL, 'Mid-size (51 - 250 Employees)', 'United States', '1000+', 'Aruban Florin (AWG)', '2019', 'Individuals', NULL, 'Advisors', 'Abdur rehman', 'abc@gmail.com', '+923171150595', 'Accounting &amp; Finance', 'Select an option', 'Sage', NULL, 9, NULL, NULL, NULL, NULL, 15.00, 2.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 300.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 315.00, 302.00, 'yes', 'Select an option', NULL),
(152, 'Retail', NULL, NULL, 'Enterprise (1000+ Employees)', 'United Kingdom', '10,000+', 'Armenian Dram (AMD)', '2020', 'Individuals', NULL, 'Advisors', 'Abdur rehman', 'qaziabdulrahmannt@gmail.com', '+923171150595', 'IT Support', 'Select an option', 'Select an option', NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'Select an option', 'Select an option', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `department` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `user_id`, `department`, `created_at`, `updated_at`) VALUES
(1, 1, 'Social Sciences', '2024-12-03 13:43:31', '2024-12-03 13:43:31'),
(2, 2, 'Computer Sciences', '2024-12-03 13:47:08', '2024-12-03 13:47:08');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `confirm_password` varchar(100) DEFAULT NULL,
  `token` varchar(32) DEFAULT NULL,
  `token_expiry` datetime DEFAULT NULL,
  `profile_image` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email_address`, `user_name`, `password`, `confirm_password`, `token`, `token_expiry`, `profile_image`) VALUES
(105, 'qaziabdurrahman12@gmail.com', 'abdur12', '$2b$10$cvbsVGLaMbbtUHlsJXGHVOjsA2E4gXMgHrsJMcydn3sHGLqES/ldq', '$2b$10$EMvPeEZ6Kmg1L2rvkNilse7XqYN9JaUgVm/CxbKv1n/Xf9ascxF3.', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','teacher','student') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Teacher1', 'teacher@gmail.com', '12345678', 'teacher', '2024-12-03 13:43:31', '2024-12-03 13:43:31'),
(2, 'Teacher 2', 'Teachers@gmail.com', '123456789', 'teacher', '2024-12-03 13:47:08', '2024-12-03 13:47:08');

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
(1, 8);

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
(1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `course_code` (`course_code`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `customer_status`
--
ALTER TABLE `customer_status`
  ADD PRIMARY KEY (`customer_email`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `enrollment_no` (`enrollment_no`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `student_courses`
--
ALTER TABLE `student_courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `subscription_form`
--
ALTER TABLE `subscription_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1083;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_courses`
--
ALTER TABLE `student_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscription_form`
--
ALTER TABLE `subscription_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `student_courses`
--
ALTER TABLE `student_courses`
  ADD CONSTRAINT `student_courses_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`),
  ADD CONSTRAINT `student_courses_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`);

--
-- Constraints for table `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `teachers_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
