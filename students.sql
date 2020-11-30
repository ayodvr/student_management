-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2020 at 02:36 PM
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
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marital` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `lga` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_entry` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_parent` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `relation_ship` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_address` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel_no` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_occupation` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `fullname`, `gender`, `phone`, `address`, `course`, `marital`, `nationality`, `state`, `lga`, `religion`, `date_entry`, `name_parent`, `relation_ship`, `parent_address`, `tel_no`, `parent_occupation`, `created_at`, `updated_at`) VALUES
(1, 'hahahah', 'Male', '90099000--', 'jjajajajaj', 'tttttt', 'Single', 'gghhjahahaj', 'Jigawa', 'Kazaure', 'Islam', 'mxksksksk', 'kskskskssksk', 'kssksksksskq', 'jajsksksksksk', 'ksksksksksk', 'skskskskskskskssksk', '2020-09-23 15:37:05', '2020-09-23 15:37:05'),
(2, 'QHQHQHQH', 'Male', 'QYQUQUQIQII', 'QIIQIQIQIQIIQIQIQ', 'QIIQIQQQQQQQQQQQQQQQQQQQQQQQ', 'Married', 'QIQIQQQQQQQQQQQQQQQQQQQQQ', 'Ogun', 'Odogbolu', 'Islam', 'JJQQQQIQQ', 'KQKKKKKKKKKKKKK', 'KQQKQKLQLKQLKKLKLQKQK', 'KQKQKQKQKQQKQKQKQQKQ', 'KQKKQKQKQKQKQQKQKLQKLQKQLKQLLQ', 'KLQKQQLKQLKQKQKQKKQQQK', '2020-10-05 10:27:27', '2020-10-05 10:27:27'),
(3, 'QHQHQHQH', 'Male', 'QYQUQUQIQII', 'QIIQIQIQIQIIQIQIQ', 'QIIQIQQQQQQQQQQQQQQQQQQQQQQQ', 'Married', 'QIQIQQQQQQQQQQQQQQQQQQQQQ', 'Ogun', 'Odogbolu', 'Islam', 'JJQQQQIQQ', 'KQKKKKKKKKKKKKK', 'KQQKQKLQLKQLKKLKLQKQK', 'KQKQKQKQKQQKQKQKQQKQ', 'KQKKQKQKQKQKQQKQKLQKLQKQLKQLLQ', 'KLQKQQLKQLKQKQKQKKQQQK', '2020-10-05 10:27:27', '2020-10-05 10:27:27'),
(4, 'hahahah', 'Male', 'qqqqqqqqqqqqqqqqqqqqqqqqqqjqj', 'jqjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', 'jqjqjqjqjqjqjjqjqjqjqjqjqj', 'Married', 'QIQIQQQQQQQQQQQQQQQQQQQQQ', 'Abia', 'Ikwuano', 'Christian', 'qjqjqqjqjqjqjqjqjqjqjqj', 'qqjqjqjqjjqjqjqjqjqjqjqj', 'jqjqjqjqjqjqjqjqjqjqjqjqjqjqj', 'qjjqjqjqjqjqjqjqjqjqjqjqjqj', 'jqjqjqjqjqjqjqjqjqjqjqjqjqjqjqjqjq', 'jqjqjqjqjqjqjqjqjqjqjqjqjqjqjqjqjqjqj', '2020-10-15 12:39:07', '2020-10-15 12:39:07'),
(5, 'hahahah', 'Male', 'qqqqqqqqqqqqqqqqqqqqqqqqqqjqj', 'jqjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', 'jqjqjqjqjqjqjjqjqjqjqjqjqj', 'Married', 'QIQIQQQQQQQQQQQQQQQQQQQQQ', 'Abia', 'Ikwuano', 'Christian', 'qjqjqqjqjqjqjqjqjqjqjqj', 'qqjqjqjqjjqjqjqjqjqjqjqj', 'jqjqjqjqjqjqjqjqjqjqjqjqjqjqj', 'qjjqjqjqjqjqjqjqjqjqjqjqjqj', 'jqjqjqjqjqjqjqjqjqjqjqjqjqjqjqjqjq', 'jqjqjqjqjqjqjqjqjqjqjqjqjqjqjqjqjqjqj', '2020-10-15 12:40:37', '2020-10-15 12:40:37'),
(6, 'QHQHQHQH', 'Female', 'tqhahhhhhhhhhhhhhhhhhhhhhh', 'hahhhhhhhhhhhhhhhhhhhhhhhhhh', 'hahahahahahahah', 'Single', 'hajajajakakakakkkkkkkkkkkkkk', 'Abia', 'Arochukwu', 'Islam', 'msmsmmmmmmmmmmmmmmmmm', 'smmmmmmmmmmmmmmmmmmmmmmm', 'msssssssssssssssssssssssssssssssssssssss', 'smmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm', 'mssssssssssssssssssssssssssssssssssssssssssssssss', 'mssssssssssssssssssssssssssssssssssssssssssssssssss', '2020-10-15 12:41:29', '2020-10-15 12:41:29'),
(7, 'QHQHQHQH', 'Female', '90099000--', 'jjajajajaj', 'jqjqjqjqjqjqjjqjqjqjqjqjqj', 'Single', 'QIQIQQQQQQQQQQQQQQQQQQQQQ', 'Imo', 'Ohaji-Egbema', 'Islam', 'qjqjqqjqjqjqjqjqjqjqjqj', 'kskskskssksk', 'kssksksksskq', 'qjjqjqjqjqjqjqjqjqjqjqjqjqj', 'jqjqjqjqjqjqjqjqjqjqjqjqjqjqjqjqjq', 'mssssssssssssssssssssssssssssssssssssssssssssssssss', '2020-11-30 11:05:41', '2020-11-30 11:05:41'),
(8, 'QHQHQHQH', 'Female', '90099000--', 'jjajajajaj', 'jqjqjqjqjqjqjjqjqjqjqjqjqj', 'Single', 'QIQIQQQQQQQQQQQQQQQQQQQQQ', 'Imo', 'Ohaji-Egbema', 'Islam', 'qjqjqqjqjqjqjqjqjqjqjqj', 'kskskskssksk', 'kssksksksskq', 'qjjqjqjqjqjqjqjqjqjqjqjqjqj', 'jqjqjqjqjqjqjqjqjqjqjqjqjqjqjqjqjq', 'mssssssssssssssssssssssssssssssssssssssssssssssssss', '2020-11-30 11:06:47', '2020-11-30 11:06:47'),
(9, 'QHQHQHQH', 'Female', '90099000--', 'jjajajajaj', 'jqjqjqjqjqjqjjqjqjqjqjqjqj', 'Married', 'gghhjahahaj', 'Adamawa', 'Fufure', 'Islam', 'mxksksksk', 'kskskskssksk', 'kssksksksskq', 'jajsksksksksk', 'jqjqjqjqjqjqjqjqjqjqjqjqjqjqjqjqjq', 'jqjqjqjqjqjqjqjqjqjqjqjqjqjqjqjqjqjqj', '2020-11-30 11:08:33', '2020-11-30 11:08:33'),
(10, 'hahahah', 'Male', '90099000--', 'jjajajajaj', 'tttttt', 'Married', 'QIQIQQQQQQQQQQQQQQQQQQQQQ', 'Jigawa', 'Malam Madori', 'Islam', 'mxksksksk', 'smmmmmmmmmmmmmmmmmmmmmmm', 'msssssssssssssssssssssssssssssssssssssss', 'smmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm', 'KQKKQKQKQKQKQQKQKLQKLQKQLKQLLQ', 'KLQKQQLKQLKQKQKQKKQQQK', '2020-11-30 11:13:23', '2020-11-30 11:13:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
