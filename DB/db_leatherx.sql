-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2019 at 03:23 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_leatherx`
--

-- --------------------------------------------------------

--
-- Table structure for table `home_images`
--

CREATE TABLE `home_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_position` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_images`
--

INSERT INTO `home_images` (`id`, `image_title`, `image_url`, `image_slug`, `image_position`, `created_at`, `updated_at`) VALUES
(1, 'Backpacks', 'DSCF6063.JPG', 'shop/1', 1, '2019-04-16 00:56:48', '2019-04-17 06:20:42'),
(2, 'shoes', 'DSCF5953.JPG', 'shop/2', 2, '2019-04-16 00:59:33', '2019-04-16 00:59:33'),
(3, 'Ladies Sandal', 'DSCF5840.JPG', 'shop/3', 3, '2019-04-17 00:47:16', '2019-04-17 00:47:16'),
(4, 'Corporate Lady', 'corporate lady.jpg', 'shop/2', 4, '2019-04-17 00:57:17', '2019-04-17 00:57:17');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `image_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured_image` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `product_id`, `image_url`, `featured_image`, `created_at`, `updated_at`) VALUES
(1, 1, 'DSCF5065.JPG', 1, '2019-04-15 10:57:26', '2019-04-16 05:59:07'),
(2, 2, 'DSCF7060.JPG', 1, '2019-04-15 10:57:49', '2019-04-15 10:57:49'),
(3, 5, 'DSCF5971.JPG', 1, '2019-04-16 01:35:53', '2019-04-16 01:35:53'),
(4, 6, 'DSCF6447.JPG', 1, '2019-04-16 03:05:12', '2019-04-16 03:05:12'),
(5, 7, 'DSCF6063.JPG', 1, '2019-04-16 06:06:26', '2019-04-16 06:06:26'),
(6, 8, 'DSCF6481.JPG', 1, '2019-04-16 06:11:40', '2019-04-16 06:11:40'),
(7, 9, 'DSCF6481.JPG', 1, '2019-04-16 06:15:06', '2019-04-16 06:15:06'),
(8, 10, 'DSCF6481.JPG', 1, '2019-04-16 06:21:38', '2019-04-16 06:21:38'),
(9, 11, 'DSCF6489.JPG', 1, '2019-04-16 06:25:52', '2019-04-16 06:25:52'),
(10, 12, 'DSCF6848.JPG', 1, '2019-04-16 06:27:43', '2019-04-16 06:27:43'),
(11, 3, 'DSCF5975.JPG', 1, '2019-04-16 06:46:25', '2019-04-16 06:46:25');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_04_15_080008_create_products_table', 1),
(4, '2019_04_15_080412_create_product_categories_table', 1),
(5, '2019_04_15_080542_create_product_brands_table', 1),
(6, '2019_04_15_081737_create_images_table', 1),
(8, '2019_04_16_053455_create_home_images_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_sku` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_brand_id` bigint(20) UNSIGNED DEFAULT NULL,
  `homepage_priority` tinyint(3) UNSIGNED DEFAULT NULL,
  `product_price` double(15,2) NOT NULL,
  `product_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_sku`, `product_category_id`, `product_brand_id`, `homepage_priority`, `product_price`, `product_description`, `created_at`, `updated_at`) VALUES
(1, 'Female Sandal', '3495', 6, 1, 0, 7000.00, 'Female Sandal Description', '2019-04-15 04:55:45', '2019-04-16 06:45:24'),
(2, 'Ladies Sandals', '3496', 6, 2, 0, 600.00, 'Ladies Sandals Description', '2019-04-15 04:56:20', '2019-04-17 00:34:39'),
(3, 'Mens Shoe', 'MEN123', 5, 3, 0, 600.00, 'Shoe Description', '2019-04-15 23:17:57', '2019-04-17 00:35:23'),
(4, 'Shoe', '2324', 1, 1, 0, 2000.00, 'ShoeShoeShoeShoeShoe', '2019-04-16 01:34:14', '2019-04-16 01:34:14'),
(5, 'Shoe', '2324', 1, 1, 0, 2000.00, 'ShoeShoeShoeShoeShoe', '2019-04-16 01:35:53', '2019-04-16 01:35:53'),
(6, 'New Bag', 'erfshdl', 2, 1, 0, 600.00, 'sdfsdfsdfsd', '2019-04-16 03:05:12', '2019-04-16 03:05:12'),
(7, 'Bag Pack 1', 'BAG123', 2, 1, 0, 1000.00, 'Bag Pack 1 Description', '2019-04-16 06:06:26', '2019-04-16 06:06:26'),
(8, 'Bag 2', 'bang1234', 2, 1, 0, 11111.00, 'asdfghjksdfghj', '2019-04-16 06:11:40', '2019-04-17 00:40:26'),
(9, 'Bag 2', 'bang1234', 2, 1, 0, 11111.00, 'asdfghjksdfghj', '2019-04-16 06:15:06', '2019-04-17 00:40:33'),
(10, 'Bag 2', 'bang1234', 2, 1, 0, 11111.00, 'asdfghjksdfghj', '2019-04-16 06:21:38', '2019-04-17 00:40:42'),
(11, 'wwwwwwww', 'wwwwwwww', 2, 1, 0, 33333333.00, 'dddddddddddddddddddd', '2019-04-16 06:25:52', '2019-04-17 00:41:41'),
(12, 'qqqqqqq', 'qqqqqqqq', 2, 1, 0, 22222222.00, 'sdsfsdfsdfsdfsd', '2019-04-16 06:27:43', '2019-04-16 06:27:43');

-- --------------------------------------------------------

--
-- Table structure for table `product_brands`
--

CREATE TABLE `product_brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_brands`
--

INSERT INTO `product_brands` (`id`, `brand_name`, `brand_description`, `created_at`, `updated_at`) VALUES
(1, 'Venezia', NULL, '2019-04-16 02:59:07', '2019-04-16 02:59:07'),
(2, 'Fiore', NULL, '2019-04-16 03:41:44', '2019-04-16 03:41:44'),
(3, 'TS Colection', NULL, '2019-04-16 03:42:21', '2019-04-16 03:42:21'),
(4, 'Tradition', NULL, '2019-04-16 03:42:30', '2019-04-16 03:42:30');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) DEFAULT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `parent_id`, `category_name`, `category_description`, `created_at`, `updated_at`) VALUES
(1, 0, 'Footwear', 'Footwear Category', '2019-04-16 01:50:47', '2019-04-16 01:50:47'),
(2, 0, 'Bags', NULL, '2019-04-16 02:24:50', '2019-04-16 02:24:50'),
(3, 0, 'Accessories', NULL, '2019-04-16 02:25:08', '2019-04-16 02:25:08'),
(4, 0, 'Corporate Fashion', NULL, '2019-04-16 02:25:38', '2019-04-16 02:25:38'),
(5, 1, 'Mens', NULL, '2019-04-16 02:26:03', '2019-04-16 02:26:03'),
(6, 1, 'Ladies', NULL, '2019-04-16 02:26:16', '2019-04-16 02:26:16'),
(7, 1, 'Kids', NULL, '2019-04-16 02:26:33', '2019-04-16 02:26:33'),
(8, 1, 'Corporate', NULL, '2019-04-16 02:26:50', '2019-04-16 02:26:50'),
(9, 1, 'Party Shoe', NULL, '2019-04-16 02:27:04', '2019-04-16 02:27:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `home_images`
--
ALTER TABLE `home_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_brands`
--
ALTER TABLE `product_brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
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
-- AUTO_INCREMENT for table `home_images`
--
ALTER TABLE `home_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product_brands`
--
ALTER TABLE `product_brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
