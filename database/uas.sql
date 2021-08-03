-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2021 at 09:08 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `qty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtotal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `product_id`, `qty`, `subtotal`, `created_at`, `updated_at`) VALUES
(6, 1, 5, '1', '150500', '2021-08-02 00:04:05', '2021-08-02 00:04:05');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Trainers', '2021-06-26 19:55:12', '2021-06-26 19:55:12'),
(2, 'Jeans', '2021-06-26 19:55:12', '2021-06-26 19:55:12'),
(3, 'Chinos', '2021-06-26 19:55:12', '2021-06-26 19:55:12'),
(4, 'T-Shirts', '2021-06-26 19:55:12', '2021-06-26 19:55:12');

-- --------------------------------------------------------

--
-- Table structure for table `detail_transactions`
--

CREATE TABLE `detail_transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transaction_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `qty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtotal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_transactions`
--

INSERT INTO `detail_transactions` (`id`, `transaction_id`, `product_id`, `qty`, `subtotal`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '1', '100000', '2021-08-02 00:02:18', '2021-08-02 00:02:18'),
(2, 1, 6, '1', '120000', '2021-08-02 00:02:18', '2021-08-02 00:02:18'),
(3, 2, 14, '1', '150000', '2021-08-02 00:03:19', '2021-08-02 00:03:19'),
(4, 2, 18, '1', '100000', '2021-08-02 00:03:19', '2021-08-02 00:03:19'),
(5, 3, 20, '1', '150500', '2021-08-02 00:03:58', '2021-08-02 00:03:58');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(51, '2014_10_12_000000_create_users_table', 1),
(52, '2014_10_12_100000_create_password_resets_table', 1),
(53, '2019_08_19_000000_create_failed_jobs_table', 1),
(54, '2021_06_15_095634_addfacebook_id_to_users', 1),
(55, '2021_06_20_071551_create_categories_table', 1),
(56, '2021_06_20_071752_create_products_table', 1),
(57, '2021_06_20_071822_create_transactions_table', 1),
(58, '2021_06_20_075733_create_detail_transactions_table', 1),
(59, '2021_06_20_080429_create_carts_table', 1),
(60, '2021_06_21_052145_add_google_id_to_user', 1),
(61, '2021_07_01_131448_add_role_to_users', 2);

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
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` bigint(20) NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `price`, `photo`, `created_at`, `updated_at`) VALUES
(1, 1, 'Puma', 120000, 'hai.jpg', '2021-06-26 19:55:12', '2021-06-26 19:55:12'),
(2, 2, 'Edwin', 100000, 'edwin-2.jpg', '2021-06-26 19:55:12', '2021-08-01 23:22:10'),
(3, 3, 'Erigo', 100000, 'Erigo.jpg', '2021-06-26 19:55:12', '2021-06-26 19:55:12'),
(4, 4, '3 Seconds', 150000, '3 Seconds.jpg', '2021-06-26 19:55:12', '2021-06-26 19:55:12'),
(5, 1, 'Lace-Up', 150500, 'laceup.jpg', '2021-06-27 03:19:02', '2021-06-27 03:19:02'),
(6, 1, 'Nike', 120000, 'nike.jpg', '2021-06-26 19:55:12', '2021-06-26 19:55:12'),
(7, 2, 'Wrangler', 125000, 'wrangler.jpg', '2021-06-26 19:55:12', '2021-06-26 19:55:12'),
(8, 3, 'Jack & Jones\r\n', 100000, 'jack&jones.jpg', '2021-06-26 19:55:12', '2021-06-26 19:55:12'),
(9, 4, 'Everlane', 150000, 'everlane.jpg', '2021-06-26 19:55:12', '2021-06-26 19:55:12'),
(10, 3, 'Wills Lifestyle', 150500, 'wills.jpg', '2021-06-27 03:19:02', '2021-06-27 03:19:02'),
(11, 1, 'Adidas', 120000, 'adidas.jpg', '2021-06-26 19:55:12', '2021-06-26 19:55:12'),
(12, 2, 'Diesel', 125000, 'diesel-2.jpg', '2021-06-26 19:55:12', '2021-06-26 19:55:12'),
(13, 3, 'Allen SollyAllen Solly', 100000, 'allen solly.jpg', '2021-06-26 19:55:12', '2021-06-26 19:55:12'),
(14, 4, 'On Fire', 150000, 'onfire.jpg', '2021-06-26 19:55:12', '2021-06-26 19:55:12'),
(15, 1, 'New Balance', 150500, 'new balance.jpg', '2021-06-27 03:19:02', '2021-06-27 03:19:02'),
(16, 1, 'Fila', 120000, 'fila.jpg', '2021-06-26 19:55:12', '2021-06-26 19:55:12'),
(17, 2, 'Lee Jeans', 125000, 'lee jeans.jpg', '2021-06-26 19:55:12', '2021-06-26 19:55:12'),
(18, 3, 'Levis', 100000, 'levis.jpg', '2021-06-26 19:55:12', '2021-06-26 19:55:12'),
(19, 4, 'Uniqlo', 150000, 'uniqlo-2.jpg', '2021-06-26 19:55:12', '2021-06-26 19:55:12'),
(20, 1, 'Bata', 150500, 'bata.jpg', '2021-06-27 03:19:02', '2021-06-27 03:19:02');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `total` float NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `total`, `created_at`, `updated_at`) VALUES
(1, 3, 235000, '2021-08-02 00:02:18', '2021-08-02 00:02:18'),
(2, 4, 265000, '2021-08-02 00:03:19', '2021-08-02 00:03:19'),
(3, 1, 165500, '2021-08-02 00:03:58', '2021-08-02 00:03:58');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `facebook_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `facebook_id`, `google_id`, `role`) VALUES
(1, 'User', 'user@mail.com', NULL, '$2y$10$v6dmtiubQm1CWgS6SS2Go.HDCZ3242cXFVd3wv9YIzRdwX.pxK9ou', NULL, '2021-08-01 23:58:27', '2021-08-01 23:58:27', NULL, NULL, 'user'),
(2, 'admin', 'admin@mail.com', NULL, '$2y$10$facRgpNUmg21yPQ7KPvCuuMx/H92lD6DQyPzqHXllllnHrIUr00U.', NULL, '2021-08-01 23:59:16', '2021-08-01 23:59:16', NULL, NULL, 'admin'),
(3, 'Aldi', 'Aldirahmadi@gmail.com', NULL, '$2y$10$VJpSFMSOwTTtHKcRLRCCFO2Rf5qupOfO/ETG56MCi7W5zpPJD5eE.', NULL, '2021-08-02 00:00:03', '2021-08-02 00:00:03', NULL, NULL, 'user'),
(4, 'Arul', 'fahrurrozi.arul3@gmail.com', NULL, '$2y$10$0LI5Mdxrmny0UZ5v8ZLohec5g70nPC6zyv/9o0JvN3OGbDAw8nc6m', NULL, '2021-08-02 00:02:53', '2021-08-02 00:02:53', NULL, NULL, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_product_id_foreign` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_transactions`
--
ALTER TABLE `detail_transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_transactions_transaction_id_foreign` (`transaction_id`),
  ADD KEY `detail_transactions_product_id_foreign` (`product_id`);

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
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `detail_transactions`
--
ALTER TABLE `detail_transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `detail_transactions`
--
ALTER TABLE `detail_transactions`
  ADD CONSTRAINT `detail_transactions_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `detail_transactions_transaction_id_foreign` FOREIGN KEY (`transaction_id`) REFERENCES `transactions` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
