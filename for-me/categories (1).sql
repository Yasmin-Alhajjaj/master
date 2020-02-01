-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 01, 2020 at 11:54 AM
-- Server version: 5.7.29-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `master`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `photo`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Doctors', 'uploads/VPH1ovbUkjreYE3Ds3mLzPg9otz38eNLAblqczun.jpeg', 'All Doctors for you', '2020-02-01 07:49:57', '2020-02-01 07:49:57'),
(2, 'Restaurants', 'uploads/vJlX9y7Pb4HCDSwQd4gFZMqiBNTfCWncdVy2f9zH.jpeg', 'food, snacks, drinks, sweet, chocolate, cakes,', '2020-02-01 07:50:46', '2020-02-01 07:50:46'),
(3, 'Cars', 'uploads/6aKx8gOVmc5joN8BCdDMErEcMURt6nXY2MlRGQGZ.jpeg', 'Buying and selling cars, Accessories for cars ,Garages, All about cars', '2020-02-01 07:51:22', '2020-02-01 07:51:22'),
(4, 'Beauty', 'uploads/lAaK16prFWIkyRk486H9WETzIphXVyNdxPO7RfVO.jpeg', 'Beauty experts, hair salons, beauty centers, nail care, men\'s hair salons', '2020-02-01 07:51:51', '2020-02-01 07:51:51'),
(5, 'Hotels', 'uploads/gn3Pow11fH181Eed9NN5YLTOs5HPcnh9oCU7Gsl7.jpeg', 'Hotels, hotel suites', '2020-02-01 07:52:16', '2020-02-01 07:52:16'),
(6, 'Banks And Financial', 'uploads/RGAc6AMMbL9s9yQCU3CCrWNKcW3aTpsgKQ71vHgh.jpeg', 'Banks And Financial', '2020-02-01 07:52:33', '2020-02-01 07:52:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
