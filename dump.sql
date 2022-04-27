-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2020 at 04:54 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `date` date NOT NULL,
  `hour` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numPerson` int(11) NOT NULL DEFAULT 1,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `created_at`, `updated_at`, `date`, `hour`, `numPerson`, `message`, `user_id`, `status`) VALUES
(2, '2020-05-09 21:05:12', '2020-05-09 21:05:12', '2020-05-19', '11:00', 2, 'We want the best service', 2, 0),
(3, '2020-05-09 21:06:37', '2020-05-09 21:06:37', '2020-06-12', '15:00', 5, 'We need the best table', 2, 0),
(4, '2020-05-09 21:07:09', '2020-05-09 21:07:09', '2020-05-13', '22:06', 7, 'Nothing', 2, 0),
(5, '2020-05-09 21:08:53', '2020-05-09 21:08:53', '2020-05-17', '02:08', 6, NULL, 5, 0),
(6, '2020-05-09 21:09:20', '2020-05-09 21:09:20', '2020-06-10', '11:11', 4, NULL, 5, 0),
(7, '2020-05-09 21:09:50', '2020-05-09 21:09:50', '2020-05-11', '00:00', 5, 'Nothing', 5, 0),
(8, '2020-05-09 21:11:59', '2020-05-09 21:11:59', '2020-06-12', '02:11', 7, 'Special service', 3, 0),
(9, '2020-05-09 21:12:24', '2020-05-09 21:12:24', '2020-05-17', '16:09', 1, 'Special Table', 3, 0),
(10, '2020-05-09 21:13:11', '2020-05-09 21:13:11', '2020-06-12', '02:12', 4, 'Larger Table for Family', 3, 0),
(11, '2020-05-09 21:14:37', '2020-05-09 21:14:37', '2020-06-18', '23:15', 4, 'Nothing Fancy', 4, 0),
(12, '2020-05-09 21:15:01', '2020-05-09 21:15:01', '2020-05-13', '12:14', 7, 'Special Guests', 4, 0),
(13, '2020-05-09 21:15:23', '2020-05-09 21:15:23', '2020-05-14', '14:15', 3, 'Family Reunion', 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `created_at`, `updated_at`, `message`, `user_id`) VALUES
(1, '2020-05-09 21:16:35', '2020-05-09 21:16:35', 'Giardiano is the best restraunt', 2),
(2, '2020-05-09 21:18:02', '2020-05-09 21:18:02', 'They have the best meals', 3),
(3, '2020-05-09 21:19:21', '2020-05-09 21:19:21', 'Their Tiramisu is the best dessert I have ever tasted', 4),
(4, '2020-05-09 21:20:10', '2020-05-09 21:20:10', 'Just Perfect', 5);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `category` smallint(5) UNSIGNED NOT NULL,
  `rank` int(11) NOT NULL,
  `food_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`id`, `created_at`, `updated_at`, `name`, `description`, `price`, `category`, `rank`, `food_image`) VALUES
(4, '2020-05-09 20:30:01', '2020-05-09 21:22:44', 'Sushi', 'Prepared vinegared rice with some sugar, salt, seafood, vegetables', 42, 2, 8, 'sushi_1589074201.jpg'),
(5, '2020-05-09 20:33:24', '2020-05-09 21:23:39', 'Pizza', 'Tomato sauce, firm mozzarella cheese, fresh soft mozzarella cheese, mushrooms', 15, 1, 2, 'pizza_1589074404.jpg'),
(6, '2020-05-09 20:38:22', '2020-05-09 20:39:57', 'Osh', 'Made with meat, rice, vegetables, and fruit added for a unique sweet and sour taste', 23, 2, 4, 'osh_1589074797.jpg'),
(7, '2020-05-09 20:42:23', '2020-05-09 20:42:23', 'Kebab', 'Special type of kebab which has been filled with the flavor of spices', 25, 1, 5, 'kebab_1589074943.jpg'),
(8, '2020-05-09 20:44:15', '2020-05-09 20:44:15', 'Sandwich', 'Ordinary sandwich with extraordinary taste', 7, 0, 1, 'sandwich_1589075055.jpeg'),
(9, '2020-05-09 20:46:38', '2020-05-09 20:46:38', 'Fried Eggs', 'Two eggs with one sausage is a perfect breakfast', 6, 0, 6, 'fried_egg_1589075198.jpg'),
(10, '2020-05-09 20:51:02', '2020-05-09 20:51:02', 'Raw Raspberry Slice', 'The dessert which give the taste of beauty in food', 12, 3, 1, 'raw_raspberry_slice_1589075462.jpg'),
(11, '2020-05-09 20:55:03', '2020-05-09 20:55:03', 'Tiramisu', 'The jewel of desserts with exceptional taste', 15, 3, 4, 'tiramisu_1589075703.jpeg'),
(12, '2020-05-09 20:57:00', '2020-05-09 20:57:00', 'Espresso Martini', 'a cold, coffee-flavored cocktail made with vodka, espresso coffee, coffee liqueur, and sugar syrup', 11, 4, 5, 'espresso_martini_1589075820.jpg'),
(13, '2020-05-09 20:59:39', '2020-05-09 20:59:39', 'Cappucino', 'Cream + Cinnamon + Chocolate Powder = Cappucino', 5, 4, 3, 'cappucino_1589075979.jpg'),
(14, '2020-05-09 21:32:11', '2020-05-09 21:32:11', 'Apple and Blueberry Tarts', 'Apple with blueberries in prefect combination', 13, 3, 9, 'apple_blueberry_tarts_1589077931.jpg'),
(15, '2020-05-09 21:36:25', '2020-05-09 21:36:25', 'Orange Juice', 'Juice made from fresh fruits', 4, 4, 5, 'orange_juice_1589078185.jpg'),
(16, '2020-05-09 21:37:56', '2020-05-09 21:37:56', 'Steak', 'The real meat cooked to the best', 35, 2, 6, 'steak_1589078276.jpg'),
(17, '2020-05-09 21:40:49', '2020-05-09 21:40:49', 'French Fries', 'Potatoes, sauce and spices', 10, 0, 1, 'french_fries_1589078449.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2020_05_03_192150_create_posts_table', 1),
(76, '2014_10_12_000000_create_users_table', 2),
(77, '2014_10_12_100000_create_password_resets_table', 2),
(78, '2019_08_19_000000_create_failed_jobs_table', 2),
(79, '2020_05_03_163903_create_contacts_table', 2),
(80, '2020_05_03_163928_create_foods_table', 2),
(81, '2020_05_03_163952_create_bookings_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateofbirth` date DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 1,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postalCode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pasportNumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `telNumber`, `dateofbirth`, `role`, `city`, `postalCode`, `pasportNumber`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Kamronbek', 'kamronbek@gmail.com', NULL, '$2y$10$6be4Bqk.yxUgaFy1hVhuuueJxmLSmLPxK7AnBKDIElpow2z3Oy2nC', '+998-99-1111111', NULL, 1, NULL, NULL, NULL, NULL, '2020-05-09 21:43:36', '2020-05-09 21:43:36'),
(3, 'Mirshod', 'mirshod@gmail.com', NULL, '$2y$10$FbuC7S/81wC49DI7Y/SS5ekyaGDYD9/5hpBPLpZQ/ugmgiLs0WYEi', '+998-99-2222222', NULL, 1, NULL, NULL, NULL, NULL, '2020-05-09 21:45:26', '2020-05-09 21:45:26'),
(4, 'Kamoliddin', 'kamoliddin@gmail.com', NULL, '$2y$10$88S9KiWrFGClsREMU1Ls6.7dN0ATaH.pxfR1gJmJPiGd80iO80nqe', '+998-99-3333333', NULL, 1, NULL, NULL, NULL, NULL, '2020-05-09 21:46:36', '2020-05-09 21:46:36'),
(5, 'Jurabek', 'jurabek@gmail.com', NULL, '$2y$10$Uzb0sGoHuWH0A6leia0oVuduFHUnNS18cHY6KIWNVD.9kbHENiVuS', '+998-99-9999999', NULL, 1, NULL, NULL, NULL, NULL, '2020-05-09 21:48:25', '2020-05-09 21:48:25'),
(6, 'Elite', 'elite@gmail.com', NULL, '$2y$10$ugxjFXjKG28q6htm1MP18uhON8Q1Q5DtjcUXrxw4cxXL.Ar1yZ7ci', '+998-99-0000000', NULL, 2, NULL, NULL, NULL, NULL, '2020-05-09 20:10:05', '2020-05-09 20:10:05'),
(7, 'Amal', 'akhtamov98@mail.ru', NULL, '$2y$10$iBBEK9JgtwEo2d7MRPDDcOCrxflP/j2ZamzrdiZaOUzP9DCYgrlBm', '+998-90-1754718', NULL, 1, NULL, NULL, NULL, NULL, '2020-05-10 11:17:19', '2020-05-10 11:17:19');
--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_name_unique` (`name`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
