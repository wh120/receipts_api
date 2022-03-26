-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2022 at 05:47 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `receipts`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'قسم المواد الأولية', NULL, NULL),
(2, 'قسم المواد الجاهزة', NULL, NULL),
(3, 'قسم التحضير', NULL, NULL),
(4, 'قسم الأنتاج', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_default_unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `item_category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `code`, `name`, `description`, `unit`, `is_default_unit`, `item_category_id`, `created_at`, `updated_at`) VALUES
(1, '10001', 'شراب وينر ظرف 9 غ محلى', 'شراب وينر ظرف 9 غ محلى', 'ظرف', '1', 1, '2022-03-26 13:42:59', '2022-03-26 13:42:59'),
(2, '10002', 'شراب عمار ظرف 35 غ اصبع', 'شراب عمار ظرف 35 غ اصبع', 'ظرف', '1', 1, '2022-03-26 13:42:59', '2022-03-26 13:42:59'),
(3, '10003', 'شراب عمار ظرف 35 غ مربع', 'شراب عمار ظرف 35 غ مربع', 'ظرف', '1', 1, '2022-03-26 13:42:59', '2022-03-26 13:42:59'),
(4, '10004', 'شراب عمار 650 غ', 'شراب عمار 650 غ', 'ظرف', '1', 1, '2022-03-26 13:42:59', '2022-03-26 13:42:59'),
(5, '10005', 'شراب عمار 2 كغ علبة بلاستيك', 'شراب عمار 2 كغ علبة بلاستيك', 'ظرف', '1', 1, '2022-03-26 13:42:59', '2022-03-26 13:42:59'),
(6, '10006', 'شراب محلى وينر دكما', 'شراب محلى وينر دكما', 'ظرف', '1', 1, '2022-03-26 13:42:59', '2022-03-26 13:42:59'),
(7, '10007', 'شراب عادي عمار دكما', 'شراب عادي عمار دكما', 'ظرف', '1', 1, '2022-03-26 13:42:59', '2022-03-26 13:42:59'),
(8, '10008', 'شراب عمار 10غ غير محلى', 'شراب عمار 10غ غير محلى', 'ظرف', '1', 1, '2022-03-26 13:42:59', '2022-03-26 13:42:59'),
(9, '10101', 'ميلو وينر علبة بلاستيك 200 غ', 'ميلو وينر علبة بلاستيك 200 غ', 'ظرف', '1', 1, '2022-03-26 13:42:59', '2022-03-26 13:42:59'),
(10, '10102', 'ميلو وينر ظرف 25 غ', 'ميلو وينر ظرف 25 غ', 'ظرف', '1', 1, '2022-03-26 13:42:59', '2022-03-26 13:42:59'),
(11, '10103', 'ميلو الفائز علبة بلاستيك 250 غ', 'ميلو الفائز علبة بلاستيك 250 غ', 'ظرف', '1', 1, '2022-03-26 13:42:59', '2022-03-26 13:42:59'),
(12, '10104', 'ميلو الفائز ظرف 20غ', 'ميلو الفائز ظرف 20غ', 'ظرف', '1', 1, '2022-03-26 13:42:59', '2022-03-26 13:42:59'),
(13, '10105', 'ميلو الفائز ظرف 20 غ * 12 علبة', 'ميلو الفائز ظرف 20 غ * 12 علبة', 'ظرف', '1', 1, '2022-03-26 13:42:59', '2022-03-26 13:42:59'),
(14, '10106', 'ميلو الفائز دكما', 'ميلو الفائز دكما', 'ظرف', '1', 1, '2022-03-26 13:42:59', '2022-03-26 13:42:59'),
(15, '10107', 'ميلو الفائز فرط', 'ميلو الفائز فرط', 'ظرف', '1', 1, '2022-03-26 13:42:59', '2022-03-26 13:42:59'),
(16, '10108', 'ميلو الفائز 400 غ', 'ميلو الفائز 400 غ', 'ظرف', '1', 1, '2022-03-26 13:42:59', '2022-03-26 13:42:59'),
(17, '10109', 'ميلو الفائز 800 غ', 'ميلو الفائز 800 غ', 'ظرف', '1', 1, '2022-03-26 13:43:00', '2022-03-26 13:43:00'),
(18, '101010', 'ميلو وينر علبة بلاستيك 250 غ', 'ميلو وينر علبة بلاستيك 250 غ', 'ظرف', '1', 1, '2022-03-26 13:43:00', '2022-03-26 13:43:00'),
(19, '101011', 'ميلو وينر ظرف 20 غ', 'ميلو وينر ظرف 20 غ', 'ظرف', '1', 1, '2022-03-26 13:43:00', '2022-03-26 13:43:00'),
(20, '101012', 'ميلو وينر 800غ', 'ميلو وينر 800غ', 'ظرف', '1', 1, '2022-03-26 13:43:00', '2022-03-26 13:43:00'),
(21, '10201', 'كابتشينو وينر علب', 'كابتشينو وينر علب', 'ظرف', '1', 1, '2022-03-26 13:43:00', '2022-03-26 13:43:00'),
(22, '10202', 'وينر 3*1 علب', 'وينر 3*1 علب', 'ظرف', '1', 1, '2022-03-26 13:43:00', '2022-03-26 13:43:00'),
(23, '10203', 'وينر 3*1 مطربان', 'وينر 3*1 مطربان', 'ظرف', '1', 1, '2022-03-26 13:43:00', '2022-03-26 13:43:00'),
(24, '10301', 'سحلب وينر', 'سحلب وينر', 'ظرف', '1', 1, '2022-03-26 13:43:00', '2022-03-26 13:43:00'),
(25, '10401', 'شوكولا وينر 300 غ', 'شوكولا وينر 300 غ', 'ظرف', '1', 1, '2022-03-26 13:43:00', '2022-03-26 13:43:00'),
(26, '10402', 'شوكولا وينر 700 غ', 'شوكولا وينر 700 غ', 'ظرف', '1', 1, '2022-03-26 13:43:00', '2022-03-26 13:43:00'),
(27, '10403', 'شوكولا وينر دكما', 'شوكولا وينر دكما', 'ظرف', '1', 1, '2022-03-26 13:43:00', '2022-03-26 13:43:00');

-- --------------------------------------------------------

--
-- Table structure for table `item_categories`
--

CREATE TABLE `item_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_main_category_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `item_categories`
--

INSERT INTO `item_categories` (`id`, `code`, `name`, `item_main_category_id`) VALUES
(1, '100', 'الشراب', 1),
(2, '101', 'الميلو', 1),
(3, '102', 'الكابتشينو', 1),
(4, '103', 'السحلب', 1),
(5, '104', 'شوكولا', 1);

-- --------------------------------------------------------

--
-- Table structure for table `item_main_categories`
--

CREATE TABLE `item_main_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `item_main_categories`
--

INSERT INTO `item_main_categories` (`id`, `code`, `name`) VALUES
(1, '1', 'المواد الجاهزة'),
(2, '2', 'المنكهات الصناعية والمواد الأولية'),
(3, '3', 'مواد الرولات'),
(4, '4', 'الصناديق الخارجية'),
(5, '5', 'العلب والكليشات والأكياس'),
(6, '6', 'مواد مختلفة لزوم الانتاج');

-- --------------------------------------------------------

--
-- Table structure for table `item_receipts`
--

CREATE TABLE `item_receipts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `item_units`
--

CREATE TABLE `item_units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversion_factor` tinyint(3) UNSIGNED NOT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT 0,
  `item_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `item_units`
--

INSERT INTO `item_units` (`id`, `name`, `conversion_factor`, `is_default`, `item_id`, `created_at`, `updated_at`) VALUES
(1, 'علبة', 12, 0, 1, '2022-03-26 13:42:59', '2022-03-26 13:42:59'),
(2, 'طرد', 100, 0, 1, '2022-03-26 13:42:59', '2022-03-26 13:42:59'),
(3, 'علبة', 12, 0, 2, '2022-03-26 13:42:59', '2022-03-26 13:42:59'),
(4, 'طرد', 100, 0, 2, '2022-03-26 13:42:59', '2022-03-26 13:42:59'),
(5, 'علبة', 12, 0, 3, '2022-03-26 13:42:59', '2022-03-26 13:42:59'),
(6, 'طرد', 100, 0, 3, '2022-03-26 13:42:59', '2022-03-26 13:42:59'),
(7, 'علبة', 12, 0, 4, '2022-03-26 13:42:59', '2022-03-26 13:42:59'),
(8, 'طرد', 100, 0, 4, '2022-03-26 13:42:59', '2022-03-26 13:42:59'),
(9, 'علبة', 12, 0, 5, '2022-03-26 13:42:59', '2022-03-26 13:42:59'),
(10, 'طرد', 100, 0, 5, '2022-03-26 13:42:59', '2022-03-26 13:42:59'),
(11, 'علبة', 12, 0, 6, '2022-03-26 13:42:59', '2022-03-26 13:42:59'),
(12, 'طرد', 100, 0, 6, '2022-03-26 13:42:59', '2022-03-26 13:42:59'),
(13, 'علبة', 12, 0, 7, '2022-03-26 13:42:59', '2022-03-26 13:42:59'),
(14, 'طرد', 100, 0, 7, '2022-03-26 13:42:59', '2022-03-26 13:42:59'),
(15, 'علبة', 12, 0, 8, '2022-03-26 13:42:59', '2022-03-26 13:42:59'),
(16, 'طرد', 100, 0, 8, '2022-03-26 13:42:59', '2022-03-26 13:42:59'),
(17, 'علبة', 12, 0, 9, '2022-03-26 13:42:59', '2022-03-26 13:42:59'),
(18, 'طرد', 100, 0, 9, '2022-03-26 13:42:59', '2022-03-26 13:42:59'),
(19, 'علبة', 12, 0, 10, '2022-03-26 13:42:59', '2022-03-26 13:42:59'),
(20, 'طرد', 100, 0, 10, '2022-03-26 13:42:59', '2022-03-26 13:42:59'),
(21, 'علبة', 12, 0, 11, '2022-03-26 13:42:59', '2022-03-26 13:42:59'),
(22, 'طرد', 100, 0, 11, '2022-03-26 13:42:59', '2022-03-26 13:42:59'),
(23, 'علبة', 12, 0, 12, '2022-03-26 13:42:59', '2022-03-26 13:42:59'),
(24, 'طرد', 100, 0, 12, '2022-03-26 13:42:59', '2022-03-26 13:42:59'),
(25, 'علبة', 12, 0, 13, '2022-03-26 13:42:59', '2022-03-26 13:42:59'),
(26, 'طرد', 100, 0, 13, '2022-03-26 13:42:59', '2022-03-26 13:42:59'),
(27, 'علبة', 12, 0, 14, '2022-03-26 13:42:59', '2022-03-26 13:42:59'),
(28, 'طرد', 100, 0, 14, '2022-03-26 13:42:59', '2022-03-26 13:42:59'),
(29, 'علبة', 12, 0, 15, '2022-03-26 13:42:59', '2022-03-26 13:42:59'),
(30, 'طرد', 100, 0, 15, '2022-03-26 13:42:59', '2022-03-26 13:42:59'),
(31, 'علبة', 12, 0, 16, '2022-03-26 13:43:00', '2022-03-26 13:43:00'),
(32, 'طرد', 100, 0, 16, '2022-03-26 13:43:00', '2022-03-26 13:43:00'),
(33, 'علبة', 12, 0, 17, '2022-03-26 13:43:00', '2022-03-26 13:43:00'),
(34, 'طرد', 100, 0, 17, '2022-03-26 13:43:00', '2022-03-26 13:43:00'),
(35, 'علبة', 12, 0, 18, '2022-03-26 13:43:00', '2022-03-26 13:43:00'),
(36, 'طرد', 100, 0, 18, '2022-03-26 13:43:00', '2022-03-26 13:43:00'),
(37, 'علبة', 12, 0, 19, '2022-03-26 13:43:00', '2022-03-26 13:43:00'),
(38, 'طرد', 100, 0, 19, '2022-03-26 13:43:00', '2022-03-26 13:43:00'),
(39, 'علبة', 12, 0, 20, '2022-03-26 13:43:00', '2022-03-26 13:43:00'),
(40, 'طرد', 100, 0, 20, '2022-03-26 13:43:00', '2022-03-26 13:43:00'),
(41, 'علبة', 12, 0, 21, '2022-03-26 13:43:00', '2022-03-26 13:43:00'),
(42, 'طرد', 100, 0, 21, '2022-03-26 13:43:00', '2022-03-26 13:43:00'),
(43, 'علبة', 12, 0, 22, '2022-03-26 13:43:00', '2022-03-26 13:43:00'),
(44, 'طرد', 100, 0, 22, '2022-03-26 13:43:00', '2022-03-26 13:43:00'),
(45, 'علبة', 12, 0, 23, '2022-03-26 13:43:00', '2022-03-26 13:43:00'),
(46, 'طرد', 100, 0, 23, '2022-03-26 13:43:00', '2022-03-26 13:43:00'),
(47, 'علبة', 12, 0, 24, '2022-03-26 13:43:00', '2022-03-26 13:43:00'),
(48, 'طرد', 100, 0, 24, '2022-03-26 13:43:00', '2022-03-26 13:43:00'),
(49, 'علبة', 12, 0, 25, '2022-03-26 13:43:00', '2022-03-26 13:43:00'),
(50, 'طرد', 100, 0, 25, '2022-03-26 13:43:00', '2022-03-26 13:43:00'),
(51, 'علبة', 12, 0, 26, '2022-03-26 13:43:00', '2022-03-26 13:43:00'),
(52, 'طرد', 100, 0, 26, '2022-03-26 13:43:00', '2022-03-26 13:43:00'),
(53, 'علبة', 12, 0, 27, '2022-03-26 13:43:00', '2022-03-26 13:43:00'),
(54, 'طرد', 100, 0, 27, '2022-03-26 13:43:00', '2022-03-26 13:43:00');

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
(133, '2014_10_12_000000_create_users_table', 1),
(134, '2014_10_12_100000_create_password_resets_table', 1),
(135, '2019_08_19_000000_create_failed_jobs_table', 1),
(136, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(137, '2022_03_18_153430_create_departments_table', 1),
(138, '2022_03_21_151217_create_roles_table', 1),
(139, '2022_03_21_200505_create_item_main_categories_table', 1),
(140, '2022_03_21_203713_create_item_categories_table', 1),
(141, '2022_03_21_222233_create_items_table', 1),
(142, '2022_03_21_235853_create_item_units_table', 1),
(143, '2022_03_23_164039_create_receipt_types_table', 1),
(144, '2022_03_25_125211_create_permission_tables', 1),
(145, '2022_03_25_165255_create_receipts_table', 1),
(146, '2022_03_25_165324_create_item_receipts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 11);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `receipts`
--

CREATE TABLE `receipts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `receipt_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by_user_id` bigint(20) UNSIGNED NOT NULL,
  `accepted_by_user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `must_approved_by_role` bigint(20) UNSIGNED NOT NULL,
  `receipt_type_id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accepted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `receipts`
--

INSERT INTO `receipts` (`id`, `receipt_number`, `created_by_user_id`, `accepted_by_user_id`, `must_approved_by_role`, `receipt_type_id`, `description`, `accepted_at`, `created_at`, `updated_at`) VALUES
(1, '123456', 1, 1, 1, 1, 'لايوجد ملاحظات', '2022-03-26 13:43:00', '2022-03-26 13:43:00', '2022-03-26 13:43:00');

-- --------------------------------------------------------

--
-- Table structure for table `receipt_types`
--

CREATE TABLE `receipt_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `receipt_types`
--

INSERT INTO `receipt_types` (`id`, `name`) VALUES
(2, 'input'),
(3, 'output'),
(1, 'purchase'),
(4, 'sale');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `department_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`, `department_id`) VALUES
(1, 'مدير النظام', 'api', NULL, NULL, NULL),
(2, 'مدير قسم المواد الأولية', 'api', NULL, NULL, 1),
(3, 'مدير قسم المواد الجاهزة', 'api', NULL, NULL, 2),
(4, 'مدير قسم التحضير', 'api', NULL, NULL, 3),
(5, 'مدير قسم الأنتاج', 'api', NULL, NULL, 4);

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Gardner Considine DVM', 'cassin.delia@example.net', '2022-03-26 13:42:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2i9sVUU2MT', '2022-03-26 13:42:59', '2022-03-26 13:42:59'),
(2, 'Nestor Smitham', 'rice.jewell@example.net', '2022-03-26 13:42:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'cFQ04U7iIr', '2022-03-26 13:42:59', '2022-03-26 13:42:59'),
(3, 'Prof. Freddy Wintheiser Jr.', 'glover.georgette@example.org', '2022-03-26 13:42:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '0RxMhKtteo', '2022-03-26 13:42:59', '2022-03-26 13:42:59'),
(4, 'Marcelina Green', 'arlie.kshlerin@example.com', '2022-03-26 13:42:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'PyDZonIEUb', '2022-03-26 13:42:59', '2022-03-26 13:42:59'),
(5, 'Oda Wiza', 'rmurphy@example.com', '2022-03-26 13:42:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'csnzNmqbfX', '2022-03-26 13:42:59', '2022-03-26 13:42:59'),
(6, 'Linwood Hane', 'miracle.adams@example.com', '2022-03-26 13:42:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'nK7yLWP4ee', '2022-03-26 13:42:59', '2022-03-26 13:42:59'),
(7, 'Georgette Farrell', 'gregorio01@example.net', '2022-03-26 13:42:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'sGGGrBnMWM', '2022-03-26 13:42:59', '2022-03-26 13:42:59'),
(8, 'Bertram Howe', 'boyer.christopher@example.net', '2022-03-26 13:42:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2xH97vNqPw', '2022-03-26 13:42:59', '2022-03-26 13:42:59'),
(9, 'Cathy Aufderhar', 'buddy.nienow@example.com', '2022-03-26 13:42:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'kXTRbDSnkH', '2022-03-26 13:42:59', '2022-03-26 13:42:59'),
(10, 'Estrella Hintz', 'lakin.aiden@example.com', '2022-03-26 13:42:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Wu5UVyic3g', '2022-03-26 13:42:59', '2022-03-26 13:42:59'),
(11, 'admin', 'admin', '2022-03-26 13:43:00', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'OXbVRhYWqY', '2022-03-26 13:43:00', '2022-03-26 13:43:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `departments_name_unique` (`name`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `items_code_unique` (`code`),
  ADD UNIQUE KEY `items_name_unique` (`name`),
  ADD KEY `items_item_category_id_foreign` (`item_category_id`);

--
-- Indexes for table `item_categories`
--
ALTER TABLE `item_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `item_categories_code_unique` (`code`),
  ADD UNIQUE KEY `item_categories_name_unique` (`name`),
  ADD KEY `item_categories_item_main_category_id_foreign` (`item_main_category_id`);

--
-- Indexes for table `item_main_categories`
--
ALTER TABLE `item_main_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `item_main_categories_code_unique` (`code`),
  ADD UNIQUE KEY `item_main_categories_name_unique` (`name`);

--
-- Indexes for table `item_receipts`
--
ALTER TABLE `item_receipts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_units`
--
ALTER TABLE `item_units`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_units_item_id_foreign` (`item_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `receipts`
--
ALTER TABLE `receipts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `receipts_created_by_user_id_foreign` (`created_by_user_id`),
  ADD KEY `receipts_accepted_by_user_id_foreign` (`accepted_by_user_id`),
  ADD KEY `receipts_must_approved_by_role_foreign` (`must_approved_by_role`),
  ADD KEY `receipts_receipt_type_id_foreign` (`receipt_type_id`);

--
-- Indexes for table `receipt_types`
--
ALTER TABLE `receipt_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `receipt_types_name_unique` (`name`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`),
  ADD KEY `roles_department_id_foreign` (`department_id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

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
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `item_categories`
--
ALTER TABLE `item_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `item_main_categories`
--
ALTER TABLE `item_main_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `item_receipts`
--
ALTER TABLE `item_receipts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item_units`
--
ALTER TABLE `item_units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `receipts`
--
ALTER TABLE `receipts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `receipt_types`
--
ALTER TABLE `receipt_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_item_category_id_foreign` FOREIGN KEY (`item_category_id`) REFERENCES `item_categories` (`id`);

--
-- Constraints for table `item_categories`
--
ALTER TABLE `item_categories`
  ADD CONSTRAINT `item_categories_item_main_category_id_foreign` FOREIGN KEY (`item_main_category_id`) REFERENCES `item_main_categories` (`id`);

--
-- Constraints for table `item_units`
--
ALTER TABLE `item_units`
  ADD CONSTRAINT `item_units_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`);

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `receipts`
--
ALTER TABLE `receipts`
  ADD CONSTRAINT `receipts_accepted_by_user_id_foreign` FOREIGN KEY (`accepted_by_user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `receipts_created_by_user_id_foreign` FOREIGN KEY (`created_by_user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `receipts_must_approved_by_role_foreign` FOREIGN KEY (`must_approved_by_role`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `receipts_receipt_type_id_foreign` FOREIGN KEY (`receipt_type_id`) REFERENCES `receipt_types` (`id`);

--
-- Constraints for table `roles`
--
ALTER TABLE `roles`
  ADD CONSTRAINT `roles_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`);

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
