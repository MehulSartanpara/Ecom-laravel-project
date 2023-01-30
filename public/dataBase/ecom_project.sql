-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2023 at 07:25 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(200) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `no_of_product` int(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `firstname`, `lastname`, `email`, `username`, `password`, `gender`, `role`, `profile`, `no_of_product`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Mehul', 'Sartanpara', 'mehul@gmail.com', 'mehul', '12345', 'Male', '1', '1673348982.png', 2, '2023-01-10 05:39:42', '2023-01-10 05:39:42', NULL),
(2, 'Jenish', 'Patel', 'jenish@gmail.com', 'jenish', '12345', 'Male', '0', '1673350120.png', 0, '2023-01-10 05:58:40', '2023-01-10 05:58:40', NULL),
(3, 'Chirag', 'Patel', 'chirag@gmail.com', 'chirag', '12345', 'Male', '0', '1673350249.png', 0, '2023-01-10 06:00:49', '2023-01-10 06:00:49', NULL),
(4, 'Jagruti', 'Jogi', 'jagruti@gmail.com', 'jagruti', '12345', 'Female', '0', '1673353672.webp', 0, '2023-01-10 06:22:20', '2023-01-10 06:59:05', NULL),
(6, 'Ravi', 'Patel', 'ravi@gmail.com', 'ravi', '12345', 'Male', '0', '1673854039.png', 0, '2023-01-16 01:57:19', '2023-01-16 01:57:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

CREATE TABLE `categorys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `no_of_product` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categorys`
--

INSERT INTO `categorys` (`id`, `category_name`, `no_of_product`, `username`, `created_at`, `updated_at`) VALUES
(1, 'Mens', '0', 'mehul', '2023-01-12 00:06:21', '2023-01-12 00:06:21'),
(2, 'Womens', '0', 'jenish', '2023-01-12 00:23:13', '2023-01-12 00:24:41'),
(5, 'Children', '0', 'chirag', '2023-01-13 06:40:31', '2023-01-13 06:40:31'),
(6, 'Adult', '0', 'jagruti', '2023-01-15 22:57:31', '2023-01-15 22:57:31');

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
(5, '2023_01_10_094037_create_admins_table', 1),
(6, '2023_01_10_123532_add_deleted_at_to_admins_table', 2),
(7, '2023_01_12_052226_create_categories_table', 3),
(8, '2023_01_12_065214_create_products_table', 4),
(9, '2023_01_12_093148_add_deleted_at_to_products_table', 5),
(10, '2023_01_17_121802_create_users_table', 6);

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `sku` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(255) NOT NULL,
  `compare_price` int(11) NOT NULL,
  `selling_price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `admin` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `sku`, `description`, `category`, `compare_price`, `selling_price`, `quantity`, `tag`, `admin`, `image`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Men\'s Shirt', 'Abc', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Mens', 98, 70, 200, 'Popular', 'mehul', '1673515471.png', 'mens-shirt-1674018400', '2023-01-12 01:49:58', '2023-01-17 23:36:40', NULL),
(3, 'Women\'s Dress', 'Xyz', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Womens', 148, 120, 150, 'Great', 'chirag', '1673508707.png', 'womens-dress-1673952285', '2023-01-12 02:01:47', '2023-01-17 05:14:45', NULL),
(5, 'Men\'s T-Shirt', 'Zara', 'As a member of our customer club, you are part of Denmark\'s greenest plant community. Earn points every time you shop, which you can spend on exclusive products.', 'Mens', 198, 149, 90, 'Popular', 'jenish', '1673517026.png', 'mens-t-shirt-1673952281', '2023-01-12 04:20:26', '2023-01-17 05:14:41', NULL),
(6, 'Closet Chic', 'Abcd', 'Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'Adult', 190, 170, 200, 'New', 'jagruti', '1673843480.png', 'closet-chic-1673952277', '2023-01-15 23:01:20', '2023-01-17 05:14:37', NULL),
(7, 'Glam Shack', 'Abc', 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words,', 'Womens', 59, 37, 150, 'budget', 'jagruti', '1673843641.png', 'glam-shack-1673952272', '2023-01-15 23:04:01', '2023-01-17 05:14:32', NULL),
(8, 'The Sleek Studio', 'Xyz', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.', 'Mens', 250, 200, 300, 'Best', 'jagruti', '1673843765.png', 'the-sleek-studio-1674018445', '2023-01-15 23:06:05', '2023-01-17 23:37:25', NULL),
(9, 'Couture Village', 'Abc', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', 'Children', 80, 50, 80, 'Great', 'jagruti', '1673843895.png', 'couture-village-1673952267', '2023-01-15 23:08:15', '2023-01-17 05:14:27', NULL),
(10, 'Couture Village', 'Abc', 'The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', 'Womens', 180, 175, 100, 'budget', 'ravi', '1673854138.png', 'couture-village-1673952262', '2023-01-16 01:58:58', '2023-01-17 05:14:22', NULL),
(11, 'Wardrobe Press', 'Xyz', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,', 'Mens', 155, 120, 250, 'Popular', 'ravi', '1673854192.png', 'wardrobe-press-1673952258', '2023-01-16 01:59:52', '2023-01-17 05:14:18', NULL),
(12, 'The Style Club', 'Zara', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', 'Mens', 200, 180, 200, 'New', 'ravi', '1673854270.png', 'the-style-club-1673952255', '2023-01-16 02:01:10', '2023-01-17 05:14:15', NULL),
(13, 'The Chic Connection', 'Abc', 'when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.', 'Mens', 188, 160, 100, 'Great', 'mehul', '1673854342.png', 'the-chic-connection-1673952252', '2023-01-16 02:02:22', '2023-01-17 05:14:12', NULL),
(14, 'Glam Palace', 'Zara', 'More recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'Womens', 90, 78, 150, 'Best', 'mehul', '1673854426.png', 'glam-palace-1673952249', '2023-01-16 02:03:46', '2023-01-17 05:14:09', NULL),
(15, 'Demo Product one', 'demo', 'demo', 'Mens', 54, 5, 2, '4564', 'mehul', '1673951687.png', 'demo-product-one-1673951736', '2023-01-17 05:04:47', '2023-01-17 05:15:49', '2023-01-17 05:15:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pincode` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `number` varchar(200) NOT NULL,
  `image` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirmpassword` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `username`, `address`, `city`, `pincode`, `gender`, `number`, `image`, `password`, `confirmpassword`, `created_at`, `updated_at`) VALUES
(2, 'Mehul', 'Sartanpara', 'mehul@gmail.com', 'mehul', '428 Green Plazza, Mota Varachha', 'Surat', 395004, 'male', '7405745891', '1673960296.png', '123456', '123456', '2023-01-17 07:28:16', '2023-01-17 07:28:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categorys`
--
ALTER TABLE `categorys`
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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categorys`
--
ALTER TABLE `categorys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
