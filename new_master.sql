-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2021 at 01:15 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_master`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cop_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `test_report_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rear_mark` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `certified_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `address`, `logo`, `cop_number`, `test_report_no`, `rear_mark`, `certified_by`, `created_at`, `updated_at`) VALUES
(5, 'BE', '', '1615123269.jpeg', '', '', '', '', NULL, NULL),
(6, 'Tamil', '', '1615534854.jpeg', '', '', '', '', NULL, NULL),
(7, 'English', '', '1615534869.png', '', '', '', '', NULL, NULL),
(8, 'Maths', '', '1615534884.jpeg', '', '', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `config_distributors`
--

CREATE TABLE `config_distributors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `config_distributors`
--

INSERT INTO `config_distributors` (`id`, `name`, `address`, `created_at`, `updated_at`) VALUES
(4, 'M/s. SUN TECH', 'SFNO:285/3,\r\nKATHAPALLI ROAD, MUTHALAIPATTTI PUDUR,\r\nNAMAKKAL, Tamil Nadu 637002', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer_forms`
--

CREATE TABLE `customer_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `vehicle_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `engine_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_make` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `rto_id` bigint(20) UNSIGNED NOT NULL,
  `class_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_forms`
--

INSERT INTO `customer_forms` (`id`, `user_id`, `date`, `vehicle_no`, `vehicle_year`, `class_no`, `engine_no`, `vehicle_make`, `vehicle_model`, `owner_name`, `phone`, `address`, `rto_id`, `class_3`, `class_4`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, '2020-10-08', 'TN59AH1120', '2008', 'MA1LC2FJF75E12648', 'A7D0088030', 'MAHINDRA & MAHINDRA LIMITED', 'MAHINDRA BOLERO', 'SUNDARAM', '6369225442', 'NAMAKKAL', 3, '1', '1', 0, '2020-10-08 09:44:43', '2020-10-08 09:44:43'),
(2, 4, '2020-10-08', 'TN28AJ4719', '2011', 'MAT445056BZB13331', '275IDI06BYYS27186', 'TATA MOTORS LTD', 'TATA ACE', 'K RAVI', '8526844151', 'NAMAKKAL', 3, '1', '1', 0, '2020-10-08 09:55:49', '2020-10-08 09:55:49'),
(5, 4, '2020-10-08', 'TN28G0384', '2013', 'MC1D1AMA3DP003944', 'D27068927', 'FORCE MOTORS LIMITED', 'CARGO', 'DEPUTY DIRECTOR OF HELTH SERVICES', '1234567890', 'NAMAKKAL', 3, '1', '1', 0, '2020-10-30 04:21:25', '2020-10-30 04:21:25'),
(6, 4, '2020-10-14', 'TN59AH1120', '2018', 'MAT445056BZB13331', '275IDI06BYYS27186', 'MAHINDRA & MAHINDRA LIMITED', 'TATA ACE', 'K RAVI', '123456', 'Namakkal', 3, '1', '1', 0, '2020-10-14 11:19:12', '2020-10-14 11:19:12'),
(7, 4, '2020-10-20', 'tn47r6637', '2010', 'MAT445056BZB13331', 'A7D0088030', 'TATA MOTORS LTD', 'TATA ACE', 'K RAVI', '9080201487', 'namakkal', 3, '1', '1', 0, '2020-10-20 08:26:50', '2020-10-20 08:26:50'),
(8, 4, '2020-10-30', 'TN59AH1120', '2010', 'MC1D1AMA3DP003944', 'D27068927', 'MAHINDRA & MAHINDRA LIMITED', 'CARGO', 'K RAVI', '9943711054', 'namakkal', 3, '1', '1', 0, '2020-10-30 04:23:34', '2020-10-30 04:23:34'),
(9, 7, '2020-12-24', 'tn36az1412', '2015', 'mb1cadfc432571', 'dfc3457218', 'ASHOK LEYLAND LTD', 'AL 3118', 'SOUNDHAR', '98765432190', 'SATHYAMANGALAM', 6, '1', '1', 1, '2020-12-24 10:35:20', '2020-12-24 10:43:09'),
(12, 4, '2020-12-01', 'test001', '2020', 'Class110', 'Engine190', 'Vechicle110', 'Model112', 'Rajkumar', '09790938129', '5/2, 2nd street, ambedkar street,chennai.', 3, '1', '1', 0, '2020-12-27 12:37:04', '2020-12-27 12:37:04'),
(14, 7, '2020-12-29', 'TAQ7299', '1994', 'ALEN225411', 'ALEN99503,', 'ASHOK LEYLAND LTD', 'AL COMET 1611', 'RAMASAMY.P', '6369225442', 'GOBICHETTIPALAYAM', 6, '1', '1', 0, '2020-12-29 03:56:55', '2020-12-29 03:56:55'),
(15, 7, '2020-12-29', 'TN60S8392', '2013', 'MC229ERC0DK282412', 'E483CDDK627410', 'VE COMMERCIAL VEHICLES LTD', 'EICHER 10.95 BS III', 'ZABIULLA SHERIFF A', '9488205810', 'sathyamangalam', 6, '1', '1', 0, '2020-12-29 06:41:26', '2020-12-29 06:41:26'),
(16, 7, '2020-12-30', 'TN05S4773', '2006', '357166DTZ811039', '497SPTC35DTZ837253', 'TATA MOTORS LTD', 'TATA 407/31', 'RANGANATHAN A', '9750001998', 'SATHYAMANGALAM', 6, '1', '1', 0, '2020-12-30 06:11:17', '2020-12-30 06:11:17'),
(17, 7, '2020-12-30', 'TN36AQ1634', '2017', 'MA3EVB11S01779916', 'F8BIN 4997790', 'MARUTI SUZUKI INDIA LTD', 'MARUTI OMNI', 'MOHAMMED MANZOOR M', '9940776030', 'SATHYAMANGALAM', 6, '1', '1', 0, '2020-12-30 07:35:26', '2020-12-30 07:35:26'),
(18, 7, '2020-12-31', 'TN36AX3030', '2014', 'MD2A48BZ9EWG03601', 'AZZWEG69054', 'BAJAJ AUTO LTD', 'BAJAJ 3 WHEELER', 'MEGANATHAN S', '6382651340', 'SATHYAMANGALAM', 6, '1', '1', 0, '2020-12-31 06:40:08', '2020-12-31 06:40:08'),
(19, 7, '2020-12-31', 'TN36X4747', '2008', 'CPR240240', 'CPH451883', 'ASHOK LEYLAND LTD', 'AL 2214', 'KUMUTHA  C', '9442621257', 'SATHYAMANGALAM', 6, '1', '1', 0, '2020-12-31 09:06:11', '2020-12-31 09:06:11'),
(20, 7, '2020-12-31', 'TN30U8061', '2006', 'TFR235755', 'UFH412488', 'ASHOK LEYLAND LTD', 'AL 2214', 'PERIYANNAN R', '9442621257', 'SATHYAMANGALAM', 6, '1', '1', 0, '2020-12-31 09:17:29', '2020-12-31 09:17:29'),
(22, 8, '2021-01-04', 'TN16Z2477', '2015', 'MAT457403E7P20720', '459TC92PVY843648,', 'TATA MOTORS LTD', 'TATA LPT 1109', 'KHIZARKHAN B', '9443513071', 'SATYAMANGALAM', 6, '1', '1', 0, '2021-01-05 07:35:16', '2021-01-05 07:35:16'),
(23, 7, '2021-01-21', 'TN36AY4793', '2016', 'MC229ERC0DK282412', '497SPTC35DTZ837253', 'VE COMMERCIAL VEHICLES LTD', 'EICHER 10.95 BS III', 'RANGANATHAN A', '6369225442', 'SATHYAMANGALAM', 6, '1', '1', 0, '2021-01-21 07:29:01', '2021-01-21 07:29:01');

-- --------------------------------------------------------

--
-- Table structure for table `customer_images`
--

CREATE TABLE `customer_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `front_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `left_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `right_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `back_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_images`
--

INSERT INTO `customer_images` (`id`, `customer_id`, `front_image`, `left_image`, `right_image`, `back_image`, `created_at`, `updated_at`) VALUES
(1, 1, 'FR1602150283.jpeg', 'LR1602150283.jpeg', 'RR1602150283.jpeg', 'BR1602150283.jpeg', NULL, '2020-10-08 09:44:43'),
(3, 2, 'FR1602150283.jpeg', 'LR1602150283.jpeg', 'RR1602150283.jpeg', 'BR1602150283.jpeg', NULL, '2020-10-08 09:44:43'),
(4, 5, 'FR1602159234.jpeg', 'LR1602159234.jpeg', 'RR1602159234.jpeg', 'BR1602159234.jpeg', '2020-10-08 12:13:54', '2020-10-08 12:13:54'),
(5, 6, 'FR1602674352.jpeg', 'LR1602674352.jpeg', 'RR1602674352.jpeg', 'BR1602674352.jpeg', '2020-10-14 11:19:12', '2020-10-14 11:19:12'),
(6, 7, 'FR1603182410.jpeg', 'LR1603182410.jpeg', 'RR1603182410.jpeg', 'BR1603182410.jpeg', '2020-10-20 08:26:50', '2020-10-20 08:26:50'),
(7, 8, 'FR1604031814.jpeg', 'LR1604031814.jpeg', 'RR1604031814.jpeg', 'BR1604031814.jpeg', '2020-10-30 04:23:34', '2020-10-30 04:23:34'),
(8, 9, 'FR1608805596.jpeg', 'LR1608805596.jpeg', 'RR1608805596.jpeg', 'BR1608805596.jpeg', '2020-12-24 10:26:36', '2020-12-24 10:26:36'),
(11, 12, 'FR1609072624.jpeg', 'LR1609072624.jpeg', 'RR1609072624.png', 'BR1609072624.jpeg', '2020-12-27 12:37:04', '2020-12-27 12:37:04'),
(13, 14, 'FR1609214215.jpeg', 'LR1609214215.jpeg', 'RR1609214215.jpeg', 'BR1609214215.jpeg', '2020-12-29 03:56:55', '2020-12-29 03:56:55'),
(14, 15, 'FR1609224086.jpeg', 'LR1609224086.jpeg', 'RR1609224086.jpeg', 'BR1609224086.jpeg', '2020-12-29 06:41:26', '2020-12-29 06:41:26'),
(15, 16, 'FR1609308677.jpeg', 'LR1609308677.jpeg', 'RR1609308677.jpeg', 'BR1609308677.jpeg', '2020-12-30 06:11:17', '2020-12-30 06:11:17'),
(16, 17, 'FR1609313726.jpeg', 'LR1609313726.jpeg', 'RR1609313726.jpeg', 'BR1609313726.jpeg', '2020-12-30 07:35:26', '2020-12-30 07:35:26'),
(17, 18, 'FR1609396808.jpeg', 'LR1609396808.jpeg', 'RR1609396808.jpeg', 'BR1609396808.jpeg', '2020-12-31 06:40:08', '2020-12-31 06:40:08'),
(18, 19, 'FR1609405571.jpeg', 'LR1609405571.jpeg', 'RR1609405571.jpeg', 'BR1609405571.jpeg', '2020-12-31 09:06:11', '2020-12-31 09:06:11'),
(19, 20, 'FR1609406188.jpeg', 'LR1609406188.jpeg', 'RR1609406188.jpeg', 'BR1609406188.jpeg', '2020-12-31 09:16:28', '2020-12-31 09:16:28'),
(21, 22, 'FR1609832116.jpeg', 'LR1609832116.jpeg', 'RR1609832116.jpeg', 'BR1609832116.jpeg', '2021-01-04 17:20:30', '2021-01-05 07:35:16'),
(22, 23, 'FR1611214141.jpeg', 'LR1611214141.jpeg', 'RR1611214141.jpeg', 'BR1611214141.jpeg', '2021-01-21 07:29:01', '2021-01-21 07:29:01');

-- --------------------------------------------------------

--
-- Table structure for table `customer_tapes`
--

CREATE TABLE `customer_tapes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `qty` decimal(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_08_21_043845_update_users_table', 1),
(4, '2020_08_23_043207_create_companies_table', 1),
(5, '2020_08_23_113047_create_units_table', 1),
(6, '2020_08_23_122110_create_rtos_table', 1),
(7, '2020_08_24_082208_create_products_table', 1),
(8, '2020_08_24_094120_create_user_management_table', 1),
(9, '2020_08_25_072413_create_purchases_table', 1),
(10, '2020_08_25_073220_create_purchase_items_table', 1),
(11, '2020_08_26_043732_create_user_rtos_table', 1),
(12, '2020_08_26_141823_create_sales_table', 1),
(13, '2020_08_26_143029_create_sales_items_table', 1),
(14, '2020_09_02_040830_create_customer_forms_table', 1),
(15, '2020_09_02_041605_create_customer_images_table', 1),
(16, '2020_09_02_041818_create_customer_tapes_table', 1),
(17, '2020_09_28_094659_create_config_distributors_table', 1),
(18, '2021_03_07_135817_create_youtubes_table', 2);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `company_id`, `description`, `created_at`, `updated_at`) VALUES
(32, 'ECE', 5, 'Study new lession', NULL, '2021-03-12 02:05:42'),
(33, 'Styudy new material', 6, 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is availab.Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book.', NULL, NULL),
(34, 'supervisor', 6, 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book.Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book.Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book.Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book.Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book.Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book.Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book.Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book.Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book.Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book.Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book.Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book.Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book.Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book.Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book.Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book.Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book.Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book.Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book.Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book.Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`id`, `order_number`, `order_date`, `created_at`, `updated_at`) VALUES
(1, 'PO0001', '2020-10-08', '2020-10-08 08:54:14', '2020-10-08 08:54:14'),
(2, 'PO0001', '2020-10-08', '2020-10-08 08:54:37', '2020-10-08 08:54:37'),
(3, 'PO0001', '2020-10-08', '2020-10-08 08:55:07', '2020-10-08 08:55:07'),
(4, 'PO0001', '2020-10-08', '2020-10-08 08:55:38', '2020-10-08 08:55:38'),
(5, 'PO0001', '2020-10-08', '2020-10-08 08:55:52', '2020-10-08 08:55:52'),
(6, 'PO0001', '2020-12-24', '2020-12-24 10:10:20', '2020-12-24 10:10:20'),
(7, 'PO0001', '2020-12-29', '2020-12-29 06:32:53', '2020-12-29 06:32:53'),
(8, 'PO0001', '2021-01-04', '2021-01-04 13:12:45', '2021-01-04 13:12:45');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_items`
--

CREATE TABLE `purchase_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `purchase_id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `qty` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rtos`
--

CREATE TABLE `rtos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_date` date NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `order_number`, `order_date`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'SO0001', '2020-10-08', 1, '2020-10-08 08:57:09', '2020-10-08 08:57:09'),
(2, 'SO0001', '2020-12-24', 1, '2020-12-24 10:21:25', '2020-12-24 10:21:25'),
(3, 'SO0001', '2020-12-29', 1, '2020-12-29 06:33:42', '2020-12-29 06:33:42'),
(4, 'SO0001', '2020-12-31', 1, '2020-12-31 08:59:48', '2020-12-31 08:59:48'),
(6, 'SO0001', '2021-01-04', 1, '2021-01-04 17:17:59', '2021-01-04 17:17:59');

-- --------------------------------------------------------

--
-- Table structure for table `sales_items`
--

CREATE TABLE `sales_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `sales_id` bigint(20) UNSIGNED NOT NULL,
  `qty` decimal(8,2) NOT NULL,
  `assigned_by` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Piece', NULL, NULL),
(2, 'Metre', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` int(11) NOT NULL COMMENT '1-admin, 2-distributer, 3-dealer',
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `role`, `mobile`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$b1TiQYwvi2.OJ6eN2tdkLOAkalPxA2jjN.ppumyD0z01ozMQ2PcEC', NULL, 1, NULL, NULL, NULL),
(2, 'madurai', 'TN28', NULL, '', NULL, 4, NULL, NULL, '2020-11-28 08:26:30'),
(3, 'covai', 'TN88', NULL, '', NULL, 4, NULL, NULL, '2020-11-28 08:26:37'),
(4, '3M INDIA LIMITED', '1234@gmail.com', NULL, '$2y$10$L5PQtAUxWOUO13xjCBRLh.ZfF1jdLinykhd0o/WqUJdcnx5wcs3fC', NULL, 3, NULL, '2020-10-08 08:38:01', '2020-10-08 08:40:18'),
(5, 'Trichy9', 'TN009', NULL, '', NULL, 4, NULL, NULL, '2020-11-28 08:21:56'),
(6, 'Sathyamangalam', 'TN-36Z', NULL, '$2y$10$.UAQCAY4OpbSw654ZNu4pecsslCjJcv1b6E.kvRW3gl9onQVIJKH.', NULL, 4, NULL, NULL, NULL),
(7, 'SUNDARAM', 'TN-36Z@gmail.com', NULL, '$2y$10$y6mN.3ksrZnC5h0Jbq4n4uxllqFYY244zKwp18K0d3vg9OqTglcpK', NULL, 3, NULL, '2020-12-24 10:15:35', '2020-12-24 10:19:05'),
(8, 'SUN TECH', 'SUNDAR@GMAIL.COM', NULL, '$2y$10$ZbwkfUXamho6iSfZ/8mlue2EdyKSPICgzgqZNRc6cVwv7ifi1tCCO', NULL, 3, NULL, '2021-01-04 17:13:19', '2021-01-04 17:14:49'),
(9, 'Rajkumar', 'EXT.RTHIRUVENGADAM@cma-cgm.com', NULL, '$2y$10$xZUmGCcgTkusvg76YbbkWeMdZhA8flNPQgyc7W/34u5Ko7FTvWbTG', NULL, 0, '2432424234234', NULL, NULL),
(10, 'supervisor', 'ext.ramanoharan@cma-cgm.com', NULL, '$2y$10$lBGL41YtRz9YPJWrIRsx4.0XMjBJt9JgAdUyrTqTecKmbVh73eh62', NULL, 0, '53455453535', NULL, NULL),
(11, 'abcd', 'abcd@gmail.com', NULL, '$2y$10$3p1OvYpmT2Klz1WHo7FdVehK7ItBgNrjpXXfypNwvwsIQW3qWvm.e', NULL, 0, '9890987890', NULL, NULL),
(12, 'abcd', 'abcd1@gmail.com', NULL, '$2y$10$LS7Rxxv661DTbnw1A.u0iORd0oZ/djmgT3NcwKjlzBishUwR8cuV2', NULL, 0, '9890987890', NULL, NULL),
(13, 'asdasdaddadddsd', 'aaaaaa@gmail.com', NULL, '$2y$10$C6WB.Gg4I.lZUSdxPrq/KOhLSP17Hxm.ILoApA6XEaF9OZ8tUzI8W', NULL, 0, '34242424242', NULL, NULL),
(14, 'asdadadadadasdasd', 'ext.33ramanoharan@cma-cgm.com', NULL, '$2y$10$XBbusesVfVkxllVlhY7fsOu5iNVO5KkzFJ8L3wjUrhjGZR0ispaXC', NULL, 0, '3213313213213', NULL, NULL),
(15, 'asdadsadadasd', 'EXT.RTHIRUVENGADAM@cma-cgm.com3333', NULL, '$2y$10$HJADDSCvCV6d9PdlCCiQ1OUhQaaLimhiSXLOXXKMXkxqv4J3eM1Km', NULL, 0, '2131321311313', NULL, NULL),
(16, 'sdaaddasdsadadad', 'ext.ramanssssssoharan@cma-cgm.com', NULL, '$2y$10$7cDob/Jemdh5ZlK6oYxeLOP4Qj5S/bk6U2RiQFpChdpbL4I1Khwv6', NULL, 0, '34324234342424', NULL, NULL),
(17, 'sdaaddasdsadadad', 'ext.ramanssssssohssssaran@cma-cgm.com', NULL, '$2y$10$2J6i8t3bKppqc/XkBoWR1OmSniivpe1SQqc/LbedWeGx.vyuxpG.m', NULL, 0, '34324234342424', NULL, NULL),
(18, 'sadadadadasd', 'EXT.RTHIRUssssssVENGADAM@cma-cgm.com', NULL, '$2y$10$dHKqIx5FB9P2CQjiWv5lFOU0uiEJ2iX4eQRMp2g35N0b.8twoJ9Dq', NULL, 0, '523234324234', NULL, NULL),
(19, 'asdadadadsadasdasdasd', 'EXT.RTHIRUVEssssssaNGADAM@cma-cgm.com', NULL, '$2y$10$k8Ys7KWwB7CODN3d2gzI0uyy5Uh60lw01/pmHr1ipgQzjy65RuT0u', NULL, 0, '3432443432432', NULL, NULL),
(20, 'sddadadad', 'EXT.RTHIRsdsdsdUVENGADAM@cma-cgm.com', NULL, '$2y$10$vjGNLJTsnAS44eG7f4.QBu8j6Tu..E262MN02eOkcYl2FgpxlG5ha', NULL, 0, '3454345345345345', NULL, NULL),
(21, 'adsadasdasd', 'EXT.RTHIRUVENererrGADAM@cma-cgm.com', NULL, '$2y$10$0XHP8MIIQDZCWD7FTtsaLuYZMax8wAvQGQYKqHG3lBk/KhsxohLqu', NULL, 0, '3543254353534543', NULL, NULL),
(22, 'asdadsadasdasd', 'EXT.R22222THIRUVENGADAM@cma-cgm.com', NULL, '$2y$10$BQ5LOrIz28LFPKcJiFyf3u2.PNKrSJ6UOob.9mqpK3mXlg.kmv/RK', NULL, 0, '35435345345345435', NULL, NULL),
(23, 'sdaadadsadad', 'ext.rama333noharan@cma-cgm.com', NULL, '$2y$10$/HS8lBfYx7TcGsEu69N2Xe6yY7Wu7lcUFbv60QfruJOgGwkhzIfMa', NULL, 0, '3452342432424324', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_management`
--

CREATE TABLE `user_management` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mobile_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_management`
--

INSERT INTO `user_management` (`id`, `mobile_no`, `address`, `company_name`, `company_logo`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '123456', 'namakkal', 'uts', '1602146281.png', 4, '2020-10-08 08:38:01', '2020-10-08 08:40:18'),
(2, '6369225442', 'Sathyamangalam', 'SUN TECH', '1608804935.jpeg', 7, '2020-12-24 10:15:35', '2020-12-24 10:19:05'),
(3, '6369225442', 'SATHYAMANGALAM', 'SUN TECH', '1609780399.jpeg', 8, '2021-01-04 17:13:19', '2021-01-04 17:14:49');

-- --------------------------------------------------------

--
-- Table structure for table `user_rtos`
--

CREATE TABLE `user_rtos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `rto_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_rtos`
--

INSERT INTO `user_rtos` (`id`, `user_id`, `rto_id`, `created_at`, `updated_at`) VALUES
(3, 4, 3, NULL, NULL),
(5, 7, 6, NULL, NULL),
(7, 8, 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `youtubes`
--

CREATE TABLE `youtubes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `youtubes`
--

INSERT INTO `youtubes` (`id`, `youtube`, `product_id`, `created_at`, `updated_at`) VALUES
(12, 'https://www.youtube.com/embed/_DcHgIhRaPI', 32, NULL, NULL),
(13, 'https://www.youtube.com/embed/_DcHgIhRaPI', 32, NULL, NULL),
(14, 'https://www.youtube.com/embed/_DcHgIhRaPI', 33, NULL, NULL),
(15, 'https://www.youtube.com/embed/_DcHgIhRaPI', 33, NULL, NULL),
(16, 'https://www.youtube.com/embed/_DcHgIhRaPI', 33, NULL, NULL),
(17, 'https://www.youtube.com/embed/_DcHgIhRaPI', 33, NULL, NULL),
(18, 'https://www.youtube.com/embed/_DcHgIhRaPI', 34, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `config_distributors`
--
ALTER TABLE `config_distributors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_forms`
--
ALTER TABLE `customer_forms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_forms_user_id_foreign` (`user_id`),
  ADD KEY `customer_forms_rto_id_foreign` (`rto_id`);

--
-- Indexes for table `customer_images`
--
ALTER TABLE `customer_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_images_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `customer_tapes`
--
ALTER TABLE `customer_tapes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_tapes_customer_id_foreign` (`customer_id`),
  ADD KEY `customer_tapes_product_id_foreign` (`product_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_company_id_foreign` (`company_id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_items`
--
ALTER TABLE `purchase_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `purchase_items_purchase_id_foreign` (`purchase_id`),
  ADD KEY `purchase_items_company_id_foreign` (`company_id`),
  ADD KEY `purchase_items_product_id_foreign` (`product_id`);

--
-- Indexes for table `rtos`
--
ALTER TABLE `rtos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales_items`
--
ALTER TABLE `sales_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sales_items_user_id_foreign` (`user_id`),
  ADD KEY `sales_items_product_id_foreign` (`product_id`),
  ADD KEY `sales_items_sales_id_foreign` (`sales_id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_management`
--
ALTER TABLE `user_management`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_management_user_id_foreign` (`user_id`);

--
-- Indexes for table `user_rtos`
--
ALTER TABLE `user_rtos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_rtos_user_id_foreign` (`user_id`),
  ADD KEY `user_rtos_rto_id_foreign` (`rto_id`);

--
-- Indexes for table `youtubes`
--
ALTER TABLE `youtubes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `youtubes_product_id_foreign` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `config_distributors`
--
ALTER TABLE `config_distributors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer_forms`
--
ALTER TABLE `customer_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `customer_images`
--
ALTER TABLE `customer_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `customer_tapes`
--
ALTER TABLE `customer_tapes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `purchase_items`
--
ALTER TABLE `purchase_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rtos`
--
ALTER TABLE `rtos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sales_items`
--
ALTER TABLE `sales_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user_management`
--
ALTER TABLE `user_management`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_rtos`
--
ALTER TABLE `user_rtos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `youtubes`
--
ALTER TABLE `youtubes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer_forms`
--
ALTER TABLE `customer_forms`
  ADD CONSTRAINT `customer_forms_rto_id_foreign` FOREIGN KEY (`rto_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `customer_forms_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `customer_images`
--
ALTER TABLE `customer_images`
  ADD CONSTRAINT `customer_images_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customer_forms` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `customer_tapes`
--
ALTER TABLE `customer_tapes`
  ADD CONSTRAINT `customer_tapes_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customer_forms` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `customer_tapes_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `purchase_items`
--
ALTER TABLE `purchase_items`
  ADD CONSTRAINT `purchase_items_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `purchase_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `purchase_items_purchase_id_foreign` FOREIGN KEY (`purchase_id`) REFERENCES `purchases` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sales_items`
--
ALTER TABLE `sales_items`
  ADD CONSTRAINT `sales_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sales_items_sales_id_foreign` FOREIGN KEY (`sales_id`) REFERENCES `sales` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sales_items_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_management`
--
ALTER TABLE `user_management`
  ADD CONSTRAINT `user_management_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_rtos`
--
ALTER TABLE `user_rtos`
  ADD CONSTRAINT `user_rtos_rto_id_foreign` FOREIGN KEY (`rto_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_rtos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `youtubes`
--
ALTER TABLE `youtubes`
  ADD CONSTRAINT `youtubes_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
