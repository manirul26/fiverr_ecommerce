-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 18, 2023 at 06:57 PM
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
(30, 'Super Admin', 'البائعون,الشحنات', 'تعيين مدير مصلحة Appointment of a general manager', 'إحصائيات الفريق', NULL, '2023-03-16 18:00:00', '2023-03-16 18:00:00'),
(31, 'Users', 'البائعون,الشحنات', 'تعيين مدير مصلحة Appointment of a general manager', 'إحصائيات الفريق', NULL, '2023-03-16 18:00:00', '2023-03-16 18:00:00'),
(32, 'Sub Admin', 'البائعون,الشحنات,العلامات', 'تعيين مدير مصلحة Appointment of a general manager', 'إحصائيات الفريق', 'متابعة الفريق', '2023-03-16 18:00:00', '2023-03-16 18:00:00'),
(33, 'Manager', 'البائعون,الشحنات,العلامات', 'تعيين مدير مصلحة Appointment of a general manager', 'إحصائيات الفريق', 'متابعة الفريق', '2023-03-16 18:00:00', '2023-03-16 18:00:00');

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
  `productname` varchar(200) NOT NULL,
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
(1, 'sdfsdf', 'sdfsd', 10, 2, NULL, '1679123288.jpeg', '34234.00', '23432.00', '324324.00', NULL, '32432', '32432', '32432.00', '23432', '23432', '23432432', NULL, '2023-03-17 18:00:00', '2023-03-17 18:00:00'),
(2, 'Test Product', 'Test-product', 10, 1, NULL, '1679140453.jpeg', '3000.00', '423432.00', '23432.00', NULL, 'sdfsd', 'tpyp', '3000.00', 'SEO address', 'sdfdsfdsf-sdfdsf', 'sdfdsf', NULL, '2023-03-18 05:54:13', '2023-03-18 05:54:13'),
(3, 'sdfsdf', 'sdfsdf', 10, 2, NULL, '1679141181.jpeg', '23432.00', '32432.00', '32432.00', NULL, 'sdfsdf', 'sdfsd', '2343243.00', 'sdfsd', 'sfsd', 'sdfsd', NULL, '2023-03-18 06:06:21', '2023-03-18 06:06:21'),
(4, 'Test page product', 'sdfsdf', 10, 1, NULL, '1679149851.jpeg', '23432.00', '324324.00', '3243432.00', NULL, 'sdfdsf', 'sdfsd', '3223432.00', 'sdfds', 'sdfdsf', 'sdfsd', '1679149851.jpeg', '2023-03-18 08:30:51', '2023-03-18 08:30:51');

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `productid` int(10) NOT NULL,
  `stock` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`id`, `date`, `productid`, `stock`, `created_at`, `updated_at`) VALUES
(1, '2023-03-18', 2, 343, '2023-03-18 09:46:44', '2023-03-18 09:46:44'),
(2, '2023-03-18', 2, 232, '2023-03-18 09:47:11', '2023-03-18 09:47:11'),
(3, '2023-03-18', 2, 232, '2023-03-18 09:53:56', '2023-03-18 09:53:56');

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
(10, 'sdfsdfds', '1679112883.jpeg', 1, '2023-03-17 22:14:43', '2023-03-17 22:14:43', NULL, NULL);

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
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phoneno`, `roleid`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'sasdasdsa', 'sddd@gmail.com', '212321321', '1', NULL, '$2y$10$MR69rnkyAqC78Zk5wW4ej.9evCPs5HbO08WGZ4aN/bmW8wAIdG7Xi', NULL, '2023-03-16 20:08:54', '2023-03-16 20:08:54'),
(2, 'sdfsdf', 'ddd@gmail.com', '23432432', '1', NULL, '$2y$10$jZYDE8BbDzXwHpQEL.cGVOSkG9UH4B3FJwlMv9vM7NQ7SuiVN.XzK', NULL, '2023-03-16 20:11:46', '2023-03-16 20:11:46'),
(7, 'Manirul Islam', 'm@gmail.com', '0008768687', '30', NULL, '$2y$10$17jUQCjfz3.eiWzmByckjOd00XP7fswAnH6UDLi2bdEDf4JTtf5VK', NULL, '2023-03-17 11:49:43', '2023-03-17 12:24:22');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
