-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 22, 2023 at 03:58 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fiver_ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `addroles`
--

CREATE TABLE `addroles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rolesname` varchar(255) NOT NULL,
  `modulename` varchar(255) NOT NULL,
  `managmentpower` varchar(255) NOT NULL,
  `teamstats` varchar(255) DEFAULT NULL,
  `followtheteam` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addroles`
--

INSERT INTO `addroles` (`id`, `rolesname`, `modulename`, `managmentpower`, `teamstats`, `followtheteam`, `created_at`, `updated_at`) VALUES
(30, 'Super Admin', '1,2,4,7', 'Appointment of a department manager', 'إحصائيات الفريق', NULL, '2023-03-16 18:00:00', '2023-03-16 18:00:00'),
(31, 'Users', '1,2,3,4,7', 'Appointment of a department manager', 'إحصائيات الفريق', NULL, '2023-03-16 18:00:00', '2023-03-16 18:00:00'),
(32, 'Sub Admin', '1,2', 'Appointment of a department manager', 'إحصائيات الفريق', 'متابعة الفريق', '2023-03-16 18:00:00', '2023-03-16 18:00:00'),
(33, 'Manager', '3,4', 'Appointment of a department manager', 'إحصائيات الفريق', 'متابعة الفريق', '2023-03-16 18:00:00', '2023-03-16 18:00:00'),
(34, '34', '1,5,9,13', 'Appointment of a department manager', NULL, 'متابعة الفريق', '2023-03-21 18:00:00', '2023-03-21 18:00:00'),
(35, 'u1', '1', 'Appointment of a department manager', NULL, NULL, '2023-03-21 18:00:00', '2023-03-21 18:00:00'),
(36, 't1', '1,2', 'Appointment of a department manager', 'إحصائيات الفريق', 'متابعة الفريق', '2023-03-21 18:00:00', '2023-03-21 18:00:00'),
(37, 'test 1', '1,2,10', 'Appointment of a department manager', NULL, NULL, '2023-03-21 18:00:00', '2023-03-21 18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Categories 1', NULL, NULL),
(2, 'Categories 2', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_17_005220_create_addrole_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `name`) VALUES
(1, 'tags'),
(2, 'shipments'),
(3, 'sellers'),
(4, 'suppliers'),
(5, 'Delivery settings\n\n'),
(6, 'Products settings'),
(7, 'Settings menu'),
(8, 'taxes'),
(9, 'products'),
(10, 'Inventory Management\n\n'),
(11, 'Advertising and media'),
(12, 'Statistics and reports'),
(13, 'orders');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `id` int(11) NOT NULL,
  `orderid` int(10) NOT NULL,
  `customerid` int(10) NOT NULL,
  `productid` int(10) NOT NULL,
  `orderqty` int(11) NOT NULL,
  `orderprice` decimal(18,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) NOT NULL,
  `orderdate` date NOT NULL,
  `customerid` int(10) NOT NULL,
  `trackingno` varchar(100) NOT NULL,
  `orderstatus` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `productname` text NOT NULL,
  `permalink` text NOT NULL,
  `brandid` int(10) NOT NULL,
  `categoriesid` int(10) NOT NULL,
  `relatedproduct` varchar(10) DEFAULT NULL,
  `productimage` text DEFAULT NULL,
  `sellingprice` decimal(18,2) NOT NULL,
  `purchasingprice` decimal(18,2) NOT NULL,
  `previousprice` decimal(18,2) NOT NULL,
  `variablesstatus` decimal(18,2) DEFAULT NULL,
  `variables_size` varchar(200) NOT NULL,
  `variables_type` varchar(200) NOT NULL,
  `variables_value` decimal(18,2) NOT NULL,
  `seo_address` text NOT NULL,
  `seo_slug` text NOT NULL,
  `seo_des` text NOT NULL,
  `seo_image` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productname`, `permalink`, `brandid`, `categoriesid`, `relatedproduct`, `productimage`, `sellingprice`, `purchasingprice`, `previousprice`, `variablesstatus`, `variables_size`, `variables_type`, `variables_value`, `seo_address`, `seo_slug`, `seo_des`, `seo_image`, `created_at`, `updated_at`) VALUES
(7, 'sdfsdf', 'sdfds', 12, 1, NULL, '1679396023.jpg', '360.00', '200.00', '150.00', NULL, 'Type', 'Type', '200.00', 'seo address', 'slug', 'description', '1679396023.jpg', '2023-03-21 04:53:43', '2023-03-21 04:53:43');

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `productid` int(10) NOT NULL,
  `stock` int(10) NOT NULL,
  `stockdescription` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `brand_image` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_brand`
--

INSERT INTO `tbl_brand` (`id`, `name`, `brand_image`, `category_id`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(12, '2Brand 2', '1679388008.png', 1, '2023-03-21 00:07:34', '2023-03-21 00:07:34', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneno` varchar(255) NOT NULL,
  `roleid` varchar(255) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phoneno`, `roleid`, `image`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'sasdasdsa', 'sddd@gmail.com', '212321321', '1', NULL, NULL, '$2y$10$MR69rnkyAqC78Zk5wW4ej.9evCPs5HbO08WGZ4aN/bmW8wAIdG7Xi', NULL, '2023-03-16 20:08:54', '2023-03-16 20:08:54'),
(2, 'sdfsdf', 'ddd@gmail.com', '23432432', '1', NULL, NULL, '$2y$10$jZYDE8BbDzXwHpQEL.cGVOSkG9UH4B3FJwlMv9vM7NQ7SuiVN.XzK', NULL, '2023-03-16 20:11:46', '2023-03-16 20:11:46'),
(7, 'Manirul Islam', 'm@gmail.com', '0008768687', '30', NULL, NULL, '$2y$10$dIrv6jw59EplkU59jkHHsubfHR1M0wmFfbsJSx3hEYORJs.Ozc2hS', NULL, '2023-03-17 11:49:43', '2023-03-18 13:29:03'),
(10, 'islam', 'islam@gmail.com', '888888888', '30', NULL, NULL, '$2y$10$F./NK9h1jx7gAqBvQhIG7euL2obrxVNcANNdMXEFAQv2hDH.bFEwq', NULL, '2023-03-20 03:37:03', '2023-03-20 03:41:07'),
(11, 'Demo Software', 'demo@gmail.com', '97987977', '30', NULL, NULL, '$2y$10$N/mnJaA7P0kqSlFYm6jbguKr89muAwkFmpTJt/GL2xBuzaw3D1gMu', NULL, '2023-03-20 03:43:57', '2023-03-20 03:43:57'),
(12, 'x user one', 'user1@gmail.com', '888888', '31', '1679452687.png', NULL, '$2y$10$Ziow1HiG8t01x3sy89e97u.wTzk72B8mk7NnGFgHQatSAXRvHhD6m', NULL, '2023-03-21 04:57:14', '2023-03-21 04:57:31'),
(13, 'sdfdsfds', 'user2@gmail.com', '2343243', '31', NULL, NULL, '$2y$10$fpY4ctodmE/xeXHWD0D.eeYWP5/xvurJ7HwABIbfQwVtK0F6D5BIW', NULL, '2023-03-21 08:39:03', '2023-03-21 08:39:03'),
(14, 'uddin Jamal', 'jamal@gmail.com', '8798798789', '31', '1679412777.png', NULL, '$2y$10$QG/ymCZ2h/HZt6g7.5xBF.FsVGgnpdmq8OF55rimhmZ5VVA1Dgoue', NULL, '2023-03-21 08:40:48', '2023-03-21 08:40:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addroles`
--
ALTER TABLE `addroles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addroles`
--
ALTER TABLE `addroles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
