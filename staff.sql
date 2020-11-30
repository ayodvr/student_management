-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2020 at 01:40 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `management_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nextkin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skills` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qualification` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `fname`, `lname`, `phone`, `nextkin`, `email`, `street`, `city`, `state`, `zipcode`, `experience1`, `experience2`, `experience3`, `salary`, `skills`, `qualification`, `gender`, `cover_image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'fgnfdj', 'jdjfk', 'jfdjfnj', 'jdfnjfj', 'jfkdfjd@yahoo.com', 'njdefjfj', 'jfnjedfj', 'jnfejfjef', 'kfjndef', NULL, NULL, NULL, 'ndkdj', 'jdjfdk', 'jfdkdk', 'male', '08724_mitchell_michael_1602770041.jpg', '2020-11-04 04:56:55', '2020-10-15 05:54:01', '2020-11-04 04:56:55'),
(2, 'enfjj', 'kfjdfk`', 'k92939', 'ndmdm', 'jdkjdfn@yahoo.com', 'jdkfj', 'kjdfjdk', 'kfdjfdk', 'jfjfkj', 'jdjdjk', 'jdjdjk', 'jfjdk', 'jkdkdk', 'ndmdm', 'jfdkedkd', 'male', '08724_mitchell_michael_1603216342.jpg', NULL, '2020-10-20 09:52:22', '2020-10-30 11:53:54'),
(3, 'fbfnedj', 'jfnjsj', 'jndfjn', 'jfekdjk', 'njdjd@yahoo.com', 'hfkdfj', 'jfjndfc', 'kjncdk', 'ndfn', 'jnsdj', 'dfnedjf', 'ndejf', 'hdjdj', 'jdjdk', 'kfdjdfk', 'male', 'fcb-building-transparent-998-x-460-3242020_1603217329.png', NULL, '2020-10-20 10:08:49', '2020-10-27 07:37:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
