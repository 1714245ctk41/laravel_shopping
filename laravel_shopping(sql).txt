-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2020 at 03:53 AM
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
-- Database: `laravel_shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent_id`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'giày', 0, 'giay', '2020-11-12 13:02:06', '2020-11-12 13:03:40', '2020-11-12 13:03:40'),
(2, 'giày', 0, 'giay', '2020-11-12 13:04:17', '2020-11-12 13:04:17', NULL),
(3, 'Giày addidas trend', 2, 'giay-addidas-trend', '2020-11-13 23:49:35', '2020-11-16 07:03:59', '2020-11-16 07:03:59'),
(4, 'Giày New Balance', 2, 'giay-new-balance', '2020-11-13 23:49:45', '2020-11-13 23:49:45', NULL),
(5, 'Quần áo', 0, 'quan-ao', '2020-11-13 23:49:54', '2020-11-13 23:49:54', NULL),
(6, 'Quần áo nam', 5, 'quan-ao-nam', '2020-11-13 23:49:58', '2020-11-16 07:03:55', '2020-11-16 07:03:55'),
(7, 'Quần áo nữ', 5, 'quan-ao-nu', '2020-11-13 23:50:02', '2020-11-13 23:50:02', NULL),
(8, 'Giày addidas', 2, 'giay-addidas', '2020-11-16 07:04:09', '2020-11-16 07:04:09', NULL),
(9, 'Quần áo nam', 5, 'quan-ao-nam', '2020-11-16 07:05:01', '2020-11-16 07:05:01', NULL),
(10, 'Giày addidas child 1', 8, 'giay-addidas-child-1', '2020-11-16 07:53:27', '2020-11-16 07:53:27', NULL),
(11, 'Giày addidas child 2', 8, 'giay-addidas-child-2', '2020-11-16 07:53:37', '2020-11-16 07:53:37', NULL);

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
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
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
(55, '2014_10_12_000000_create_users_table', 1),
(56, '2014_10_12_100000_create_password_resets_table', 1),
(57, '2019_08_19_000000_create_failed_jobs_table', 1),
(58, '2020_11_02_182605_create_categories_table', 1),
(59, '2020_11_04_052147_add_column_deleted_at_table_categories', 1),
(60, '2020_11_04_054839_create_menus_table', 1),
(61, '2020_11_04_191937_add_column_deleted_at_table_menus', 1),
(62, '2020_11_05_042136_create_products_table', 1),
(63, '2020_11_05_042551_create_product_images_table', 1),
(64, '2020_11_05_042804_create_tags_table', 1),
(65, '2020_11_05_042928_create_product_tags_table', 1),
(66, '2020_11_09_054747_create_sliders_table', 1),
(67, '2020_11_09_171727_add_column_deleted_at_to_slider', 1),
(68, '2020_11_09_205221_create_settings_table', 1),
(69, '2020_11_10_202043_create_roles_table', 1),
(70, '2020_11_10_202129_create_permissions_table', 1),
(71, '2020_11_10_202236_create_table_user_role', 1),
(72, '2020_11_10_202415_create_table_permission_role', 1),
(73, '2020_11_10_225923_add_column_deleted_at_table_users', 1),
(74, '2020_11_13_173447_add_column_views_products', 2);

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
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `key_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `parent_id`, `key_code`, `created_at`, `updated_at`) VALUES
(43, 'category', 'category', 0, '', '2020-11-12 10:48:04', '2020-11-12 10:48:04'),
(44, 'list', 'list', 43, 'category_list', '2020-11-12 10:48:04', '2020-11-12 10:48:04'),
(45, 'add', 'add', 43, 'category_add', '2020-11-12 10:48:04', '2020-11-12 10:48:04'),
(46, 'edit', 'edit', 43, 'category_edit', '2020-11-12 10:48:04', '2020-11-12 10:48:04'),
(47, 'delete', 'delete', 43, 'category_delete', '2020-11-12 10:48:04', '2020-11-12 10:48:04'),
(48, 'slider', 'slider', 0, '', '2020-11-12 10:49:03', '2020-11-12 10:49:03'),
(49, 'list', 'list', 48, 'slider_list', '2020-11-12 10:49:03', '2020-11-12 10:49:03'),
(50, 'add', 'add', 48, 'slider_add', '2020-11-12 10:49:03', '2020-11-12 10:49:03'),
(51, 'edit', 'edit', 48, 'slider_edit', '2020-11-12 10:49:03', '2020-11-12 10:49:03'),
(52, 'delete', 'delete', 48, 'slider_delete', '2020-11-12 10:49:03', '2020-11-12 10:49:03'),
(53, 'menu', 'menu', 0, '', '2020-11-12 10:49:08', '2020-11-12 10:49:08'),
(54, 'list', 'list', 53, 'menu_list', '2020-11-12 10:49:08', '2020-11-12 10:49:08'),
(55, 'add', 'add', 53, 'menu_add', '2020-11-12 10:49:08', '2020-11-12 10:49:08'),
(56, 'edit', 'edit', 53, 'menu_edit', '2020-11-12 10:49:08', '2020-11-12 10:49:08'),
(57, 'delete', 'delete', 53, 'menu_delete', '2020-11-12 10:49:08', '2020-11-12 10:49:08'),
(58, 'product', 'product', 0, '', '2020-11-12 10:49:14', '2020-11-12 10:49:14'),
(59, 'list', 'list', 58, 'product_list', '2020-11-12 10:49:14', '2020-11-12 10:49:14'),
(60, 'add', 'add', 58, 'product_add', '2020-11-12 10:49:14', '2020-11-12 10:49:14'),
(61, 'edit', 'edit', 58, 'product_edit', '2020-11-12 10:49:14', '2020-11-12 10:49:14'),
(62, 'delete', 'delete', 58, 'product_delete', '2020-11-12 10:49:14', '2020-11-12 10:49:14'),
(63, 'setting', 'setting', 0, '', '2020-11-12 10:49:19', '2020-11-12 10:49:19'),
(64, 'list', 'list', 63, 'setting_list', '2020-11-12 10:49:19', '2020-11-12 10:49:19'),
(65, 'add', 'add', 63, 'setting_add', '2020-11-12 10:49:19', '2020-11-12 10:49:19'),
(66, 'edit', 'edit', 63, 'setting_edit', '2020-11-12 10:49:19', '2020-11-12 10:49:19'),
(67, 'delete', 'delete', 63, 'setting_delete', '2020-11-12 10:49:19', '2020-11-12 10:49:19'),
(68, 'user', 'user', 0, '', '2020-11-12 10:49:25', '2020-11-12 10:49:25'),
(69, 'list', 'list', 68, 'user_list', '2020-11-12 10:49:25', '2020-11-12 10:49:25'),
(70, 'add', 'add', 68, 'user_add', '2020-11-12 10:49:25', '2020-11-12 10:49:25'),
(71, 'edit', 'edit', 68, 'user_edit', '2020-11-12 10:49:25', '2020-11-12 10:49:25'),
(72, 'delete', 'delete', 68, 'user_delete', '2020-11-12 10:49:25', '2020-11-12 10:49:25'),
(73, 'role', 'role', 0, '', '2020-11-12 10:49:31', '2020-11-12 10:49:31'),
(74, 'list', 'list', 73, 'role_list', '2020-11-12 10:49:31', '2020-11-12 10:49:31'),
(75, 'add', 'add', 73, 'role_add', '2020-11-12 10:49:31', '2020-11-12 10:49:31'),
(76, 'edit', 'edit', 73, 'role_edit', '2020-11-12 10:49:31', '2020-11-12 10:49:31'),
(77, 'delete', 'delete', 73, 'role_delete', '2020-11-12 10:49:31', '2020-11-12 10:49:31');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`id`, `role_id`, `permission_id`, `created_at`, `updated_at`) VALUES
(34, 2, 44, NULL, NULL),
(36, 2, 59, NULL, NULL),
(38, 2, 45, NULL, NULL),
(39, 2, 46, NULL, NULL),
(40, 2, 47, NULL, NULL),
(41, 2, 49, NULL, NULL),
(42, 2, 50, NULL, NULL),
(43, 2, 51, NULL, NULL),
(44, 2, 52, NULL, NULL),
(45, 2, 54, NULL, NULL),
(46, 2, 55, NULL, NULL),
(47, 2, 56, NULL, NULL),
(48, 2, 57, NULL, NULL),
(49, 2, 60, NULL, NULL),
(50, 2, 61, NULL, NULL),
(51, 2, 62, NULL, NULL),
(52, 2, 64, NULL, NULL),
(53, 2, 65, NULL, NULL),
(54, 2, 66, NULL, NULL),
(55, 2, 67, NULL, NULL),
(56, 2, 69, NULL, NULL),
(57, 2, 70, NULL, NULL),
(58, 2, 71, NULL, NULL),
(59, 2, 72, NULL, NULL),
(60, 2, 74, NULL, NULL),
(61, 2, 75, NULL, NULL),
(62, 2, 76, NULL, NULL),
(63, 2, 77, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature_image_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feature_image_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `views_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `feature_image_path`, `feature_image_name`, `content`, `user_id`, `category_id`, `created_at`, `updated_at`, `views_count`) VALUES
(1, 'Elessi Sport', '9000000', '/storage/product/2/Etz1jupJBSW1A6pIeu3p.jpg', '3310312204_2_1_2-400x511.jpg', '<p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters. On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire.</p>\r\n<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<div class=\"nasa-inner-wrap nasa-pin-wrap nasa-pin-banner-wrap nasa-has-effect nasa-inited\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; direction: ltr; color: #555555; font-family: \'nunito sans\', helvetica, arial, sans-serif; font-size: 14.5px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\" data-pin=\"{&quot;nasa_pin_2&quot;:{&quot;0&quot;:{&quot;marker_pin&quot;:&quot;&lt;span class=\\&quot;nasa-marker-icon-bg\\&quot;&gt;&lt;span class=\\&quot;woocommerce-Price-amount amount\\&quot;&gt;&lt;bdi&gt;&lt;span class=\\&quot;woocommerce-Price-currencySymbol\\&quot;&gt;$&lt;\\/span&gt;90&lt;\\/bdi&gt;&lt;\\/span&gt;&lt;\\/span&gt;&quot;,&quot;position&quot;:&quot;nasa-top&quot;,&quot;id_product&quot;:&quot;2862&quot;,&quot;title_product&quot;:&quot;Elessi Sport&quot;,&quot;link_product&quot;:&quot;https:\\/\\/elessi.nasatheme.com\\/product\\/elessi-sport-galaxy\\/&quot;,&quot;img_product&quot;:&quot;&lt;img width=\\&quot;401\\&quot; height=\\&quot;512\\&quot; src=\\&quot;https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-401x512.jpg\\&quot; class=\\&quot;attachment-shop_catalog size-shop_catalog\\&quot; alt=\\&quot;\\&quot; srcset=\\&quot;https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-401x512.jpg 401w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-235x300.jpg 235w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-801x1024.jpg 801w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-117x150.jpg 117w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-768x981.jpg 768w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-1202x1536.jpg 1202w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-1603x2048.jpg 1603w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-450x575.jpg 450w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-595x760.jpg 595w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2.jpg 1800w\\&quot; sizes=\\&quot;(max-width: 401px) 100vw, 401px\\&quot; \\/&gt;&quot;,&quot;coords&quot;:{&quot;lat&quot;:&quot;1111&quot;,&quot;long&quot;:&quot;440&quot;}},&quot;1&quot;:{&quot;marker_pin&quot;:&quot;&lt;span class=\\&quot;nasa-marker-icon-bg\\&quot;&gt;&lt;span class=\\&quot;woocommerce-Price-amount amount\\&quot;&gt;&lt;bdi&gt;&lt;span class=\\&quot;woocommerce-Price-currencySymbol\\&quot;&gt;$&lt;\\/span&gt;99&lt;\\/bdi&gt;&lt;\\/span&gt;&lt;\\/span&gt;&quot;,&quot;position&quot;:&quot;nasa-top&quot;,&quot;id_product&quot;:&quot;2886&quot;,&quot;title_product&quot;:&quot;Travel Boots&quot;,&quot;link_product&quot;:&quot;https:\\/\\/elessi.nasatheme.com\\/product\\/travel-boots\\/&quot;,&quot;img_product&quot;:&quot;&lt;img width=\\&quot;401\\&quot; height=\\&quot;512\\&quot; src=\\&quot;https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-401x512.jpg\\&quot; class=\\&quot;attachment-shop_catalog size-shop_catalog\\&quot; alt=\\&quot;Travel Boots\\&quot; srcset=\\&quot;https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-401x512.jpg 401w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-235x300.jpg 235w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-801x1024.jpg 801w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-117x150.jpg 117w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-768x981.jpg 768w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-1202x1536.jpg 1202w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-1603x2048.jpg 1603w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-450x575.jpg 450w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-595x760.jpg 595w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2.jpg 1800w\\&quot; sizes=\\&quot;(max-width: 401px) 100vw, 401px\\&quot; \\/&gt;&quot;,&quot;coords&quot;:{&quot;lat&quot;:&quot;473&quot;,&quot;long&quot;:&quot;776&quot;}},&quot;canvas&quot;:{&quot;src&quot;:&quot;https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2016\\/06\\/shoes-desc.jpg&quot;,&quot;width&quot;:&quot;1920&quot;,&quot;height&quot;:&quot;1080&quot;}}}\">\r\n<div class=\"easypin\">\r\n<div><img class=\"nasa_pin_pb_image lazyloaded\" src=\"https://elessi-cdn.nasatheme.com/wp-content/uploads/2016/06/shoes-desc.jpg\" alt=\"Shoes Product Description\" width=\"1920\" height=\"1080\" data-easypin_id=\"nasa_pin_2\" data-ll-status=\"loaded\" /></div>\r\n</div>\r\n</div>', 2, 2, '2020-11-13 01:52:35', '2020-11-14 01:09:06', 0),
(2, 'White Sport', '10000000', '/storage/product/2/LZymmp2uywdAtunR2r0E.jpg', '3334312001_2_1_2-400x511.jpg', '<div id=\"nasa-single-product-tabs\" class=\"product-details\">\r\n<div class=\"nasa-tabs-content woocommerce-tabs\">\r\n<div class=\"nasa-panels\">\r\n<div id=\"nasa-tab-description\" class=\"nasa-panel nasa-content-description active\">\r\n<div class=\"row\">\r\n<div class=\"large-12 columns margin-bottom-10\">\r\n<p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters. On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire.</p>\r\n<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<div class=\"nasa-inner-wrap nasa-pin-wrap nasa-pin-banner-wrap nasa-has-effect nasa-inited\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; direction: ltr;\" data-pin=\"{&quot;nasa_pin_2&quot;:{&quot;0&quot;:{&quot;marker_pin&quot;:&quot;&lt;span class=\\&quot;nasa-marker-icon-bg\\&quot;&gt;&lt;span class=\\&quot;woocommerce-Price-amount amount\\&quot;&gt;&lt;bdi&gt;&lt;span class=\\&quot;woocommerce-Price-currencySymbol\\&quot;&gt;$&lt;\\/span&gt;90&lt;\\/bdi&gt;&lt;\\/span&gt;&lt;\\/span&gt;&quot;,&quot;position&quot;:&quot;nasa-top&quot;,&quot;id_product&quot;:&quot;2862&quot;,&quot;title_product&quot;:&quot;Elessi Sport&quot;,&quot;link_product&quot;:&quot;https:\\/\\/elessi.nasatheme.com\\/product\\/elessi-sport-galaxy\\/&quot;,&quot;img_product&quot;:&quot;&lt;img width=\\&quot;401\\&quot; height=\\&quot;512\\&quot; src=\\&quot;https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-401x512.jpg\\&quot; class=\\&quot;attachment-shop_catalog size-shop_catalog\\&quot; alt=\\&quot;\\&quot; srcset=\\&quot;https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-401x512.jpg 401w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-235x300.jpg 235w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-801x1024.jpg 801w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-117x150.jpg 117w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-768x981.jpg 768w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-1202x1536.jpg 1202w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-1603x2048.jpg 1603w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-450x575.jpg 450w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-595x760.jpg 595w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2.jpg 1800w\\&quot; sizes=\\&quot;(max-width: 401px) 100vw, 401px\\&quot; \\/&gt;&quot;,&quot;coords&quot;:{&quot;lat&quot;:&quot;1111&quot;,&quot;long&quot;:&quot;440&quot;}},&quot;1&quot;:{&quot;marker_pin&quot;:&quot;&lt;span class=\\&quot;nasa-marker-icon-bg\\&quot;&gt;&lt;span class=\\&quot;woocommerce-Price-amount amount\\&quot;&gt;&lt;bdi&gt;&lt;span class=\\&quot;woocommerce-Price-currencySymbol\\&quot;&gt;$&lt;\\/span&gt;99&lt;\\/bdi&gt;&lt;\\/span&gt;&lt;\\/span&gt;&quot;,&quot;position&quot;:&quot;nasa-top&quot;,&quot;id_product&quot;:&quot;2886&quot;,&quot;title_product&quot;:&quot;Travel Boots&quot;,&quot;link_product&quot;:&quot;https:\\/\\/elessi.nasatheme.com\\/product\\/travel-boots\\/&quot;,&quot;img_product&quot;:&quot;&lt;img width=\\&quot;401\\&quot; height=\\&quot;512\\&quot; src=\\&quot;https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-401x512.jpg\\&quot; class=\\&quot;attachment-shop_catalog size-shop_catalog\\&quot; alt=\\&quot;Travel Boots\\&quot; srcset=\\&quot;https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-401x512.jpg 401w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-235x300.jpg 235w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-801x1024.jpg 801w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-117x150.jpg 117w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-768x981.jpg 768w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-1202x1536.jpg 1202w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-1603x2048.jpg 1603w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-450x575.jpg 450w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-595x760.jpg 595w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2.jpg 1800w\\&quot; sizes=\\&quot;(max-width: 401px) 100vw, 401px\\&quot; \\/&gt;&quot;,&quot;coords&quot;:{&quot;lat&quot;:&quot;473&quot;,&quot;long&quot;:&quot;776&quot;}},&quot;canvas&quot;:{&quot;src&quot;:&quot;https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2016\\/06\\/shoes-desc.jpg&quot;,&quot;width&quot;:&quot;1920&quot;,&quot;height&quot;:&quot;1080&quot;}}}\">\r\n<div class=\"easypin\">\r\n<div><img class=\"nasa_pin_pb_image lazyloaded\" src=\"https://elessi-cdn.nasatheme.com/wp-content/uploads/2016/06/shoes-desc.jpg\" alt=\"Shoes Product Description\" width=\"1920\" height=\"1080\" data-easypin_id=\"nasa_pin_2\" data-ll-status=\"loaded\" /></div>\r\n<div class=\"easypin-marker\"><span class=\"nasa-marker-icon-wrap\"><span class=\"nasa-marker-icon-bg\"><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">$</span>90</bdi></span></span></span>\r\n<div class=\"nasa-top easypin-popover\">\r\n<div class=\"nasa-product-pin text-center\">\r\n<h5 class=\"title-wrap\">&nbsp;</h5>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"easypin-marker\"><span class=\"nasa-marker-icon-wrap\"><span class=\"nasa-marker-icon-bg\"><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">$</span>99</bdi></span></span></span>\r\n<div class=\"nasa-top easypin-popover\">\r\n<div class=\"nasa-product-pin text-center\">\r\n<h5 class=\"title-wrap\">&nbsp;</h5>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', 2, 2, '2020-11-14 01:10:15', '2020-11-14 01:10:15', 7),
(3, 'Strong Men', '15000000', '/storage/product/2/meiRwlR3yX56DJf141d4.jpg', '3346312004_2_1_2-400x511.jpg', '<p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters. On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire.</p>\r\n<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<div class=\"nasa-inner-wrap nasa-pin-wrap nasa-pin-banner-wrap nasa-has-effect nasa-inited\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; direction: ltr; color: #555555; font-family: \'nunito sans\', helvetica, arial, sans-serif; font-size: 14.5px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\" data-pin=\"{&quot;nasa_pin_2&quot;:{&quot;0&quot;:{&quot;marker_pin&quot;:&quot;&lt;span class=\\&quot;nasa-marker-icon-bg\\&quot;&gt;&lt;span class=\\&quot;woocommerce-Price-amount amount\\&quot;&gt;&lt;bdi&gt;&lt;span class=\\&quot;woocommerce-Price-currencySymbol\\&quot;&gt;$&lt;\\/span&gt;90&lt;\\/bdi&gt;&lt;\\/span&gt;&lt;\\/span&gt;&quot;,&quot;position&quot;:&quot;nasa-top&quot;,&quot;id_product&quot;:&quot;2862&quot;,&quot;title_product&quot;:&quot;Elessi Sport&quot;,&quot;link_product&quot;:&quot;https:\\/\\/elessi.nasatheme.com\\/product\\/elessi-sport-galaxy\\/&quot;,&quot;img_product&quot;:&quot;&lt;img width=\\&quot;401\\&quot; height=\\&quot;512\\&quot; src=\\&quot;https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-401x512.jpg\\&quot; class=\\&quot;attachment-shop_catalog size-shop_catalog\\&quot; alt=\\&quot;\\&quot; srcset=\\&quot;https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-401x512.jpg 401w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-235x300.jpg 235w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-801x1024.jpg 801w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-117x150.jpg 117w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-768x981.jpg 768w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-1202x1536.jpg 1202w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-1603x2048.jpg 1603w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-450x575.jpg 450w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-595x760.jpg 595w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2.jpg 1800w\\&quot; sizes=\\&quot;(max-width: 401px) 100vw, 401px\\&quot; \\/&gt;&quot;,&quot;coords&quot;:{&quot;lat&quot;:&quot;1111&quot;,&quot;long&quot;:&quot;440&quot;}},&quot;1&quot;:{&quot;marker_pin&quot;:&quot;&lt;span class=\\&quot;nasa-marker-icon-bg\\&quot;&gt;&lt;span class=\\&quot;woocommerce-Price-amount amount\\&quot;&gt;&lt;bdi&gt;&lt;span class=\\&quot;woocommerce-Price-currencySymbol\\&quot;&gt;$&lt;\\/span&gt;99&lt;\\/bdi&gt;&lt;\\/span&gt;&lt;\\/span&gt;&quot;,&quot;position&quot;:&quot;nasa-top&quot;,&quot;id_product&quot;:&quot;2886&quot;,&quot;title_product&quot;:&quot;Travel Boots&quot;,&quot;link_product&quot;:&quot;https:\\/\\/elessi.nasatheme.com\\/product\\/travel-boots\\/&quot;,&quot;img_product&quot;:&quot;&lt;img width=\\&quot;401\\&quot; height=\\&quot;512\\&quot; src=\\&quot;https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-401x512.jpg\\&quot; class=\\&quot;attachment-shop_catalog size-shop_catalog\\&quot; alt=\\&quot;Travel Boots\\&quot; srcset=\\&quot;https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-401x512.jpg 401w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-235x300.jpg 235w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-801x1024.jpg 801w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-117x150.jpg 117w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-768x981.jpg 768w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-1202x1536.jpg 1202w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-1603x2048.jpg 1603w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-450x575.jpg 450w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-595x760.jpg 595w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2.jpg 1800w\\&quot; sizes=\\&quot;(max-width: 401px) 100vw, 401px\\&quot; \\/&gt;&quot;,&quot;coords&quot;:{&quot;lat&quot;:&quot;473&quot;,&quot;long&quot;:&quot;776&quot;}},&quot;canvas&quot;:{&quot;src&quot;:&quot;https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2016\\/06\\/shoes-desc.jpg&quot;,&quot;width&quot;:&quot;1920&quot;,&quot;height&quot;:&quot;1080&quot;}}}\">\r\n<div class=\"easypin\">\r\n<div><img class=\"nasa_pin_pb_image lazyloaded\" src=\"https://elessi-cdn.nasatheme.com/wp-content/uploads/2016/06/shoes-desc.jpg\" alt=\"Shoes Product Description\" width=\"1920\" height=\"1080\" data-easypin_id=\"nasa_pin_2\" data-ll-status=\"loaded\" /></div>\r\n</div>\r\n</div>', 2, 4, '2020-11-14 01:13:07', '2020-11-14 01:18:25', 6),
(4, 'Canvas Loafers', '12000000', '/storage/product/2/ClTBg17jPCtn1Z7wH1dH.jpg', '7219312022_2_1_2-400x511.jpg', '<p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters. On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire.</p>\r\n<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<div class=\"nasa-inner-wrap nasa-pin-wrap nasa-pin-banner-wrap nasa-has-effect nasa-inited\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; direction: ltr; color: #555555; font-family: \'nunito sans\', helvetica, arial, sans-serif; font-size: 14.5px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\" data-pin=\"{&quot;nasa_pin_2&quot;:{&quot;0&quot;:{&quot;marker_pin&quot;:&quot;&lt;span class=\\&quot;nasa-marker-icon-bg\\&quot;&gt;&lt;span class=\\&quot;woocommerce-Price-amount amount\\&quot;&gt;&lt;bdi&gt;&lt;span class=\\&quot;woocommerce-Price-currencySymbol\\&quot;&gt;$&lt;\\/span&gt;90&lt;\\/bdi&gt;&lt;\\/span&gt;&lt;\\/span&gt;&quot;,&quot;position&quot;:&quot;nasa-top&quot;,&quot;id_product&quot;:&quot;2862&quot;,&quot;title_product&quot;:&quot;Elessi Sport&quot;,&quot;link_product&quot;:&quot;https:\\/\\/elessi.nasatheme.com\\/product\\/elessi-sport-galaxy\\/&quot;,&quot;img_product&quot;:&quot;&lt;img width=\\&quot;401\\&quot; height=\\&quot;512\\&quot; src=\\&quot;https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-401x512.jpg\\&quot; class=\\&quot;attachment-shop_catalog size-shop_catalog\\&quot; alt=\\&quot;\\&quot; srcset=\\&quot;https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-401x512.jpg 401w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-235x300.jpg 235w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-801x1024.jpg 801w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-117x150.jpg 117w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-768x981.jpg 768w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-1202x1536.jpg 1202w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-1603x2048.jpg 1603w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-450x575.jpg 450w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-595x760.jpg 595w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2.jpg 1800w\\&quot; sizes=\\&quot;(max-width: 401px) 100vw, 401px\\&quot; \\/&gt;&quot;,&quot;coords&quot;:{&quot;lat&quot;:&quot;1111&quot;,&quot;long&quot;:&quot;440&quot;}},&quot;1&quot;:{&quot;marker_pin&quot;:&quot;&lt;span class=\\&quot;nasa-marker-icon-bg\\&quot;&gt;&lt;span class=\\&quot;woocommerce-Price-amount amount\\&quot;&gt;&lt;bdi&gt;&lt;span class=\\&quot;woocommerce-Price-currencySymbol\\&quot;&gt;$&lt;\\/span&gt;99&lt;\\/bdi&gt;&lt;\\/span&gt;&lt;\\/span&gt;&quot;,&quot;position&quot;:&quot;nasa-top&quot;,&quot;id_product&quot;:&quot;2886&quot;,&quot;title_product&quot;:&quot;Travel Boots&quot;,&quot;link_product&quot;:&quot;https:\\/\\/elessi.nasatheme.com\\/product\\/travel-boots\\/&quot;,&quot;img_product&quot;:&quot;&lt;img width=\\&quot;401\\&quot; height=\\&quot;512\\&quot; src=\\&quot;https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-401x512.jpg\\&quot; class=\\&quot;attachment-shop_catalog size-shop_catalog\\&quot; alt=\\&quot;Travel Boots\\&quot; srcset=\\&quot;https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-401x512.jpg 401w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-235x300.jpg 235w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-801x1024.jpg 801w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-117x150.jpg 117w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-768x981.jpg 768w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-1202x1536.jpg 1202w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-1603x2048.jpg 1603w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-450x575.jpg 450w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-595x760.jpg 595w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2.jpg 1800w\\&quot; sizes=\\&quot;(max-width: 401px) 100vw, 401px\\&quot; \\/&gt;&quot;,&quot;coords&quot;:{&quot;lat&quot;:&quot;473&quot;,&quot;long&quot;:&quot;776&quot;}},&quot;canvas&quot;:{&quot;src&quot;:&quot;https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2016\\/06\\/shoes-desc.jpg&quot;,&quot;width&quot;:&quot;1920&quot;,&quot;height&quot;:&quot;1080&quot;}}}\">\r\n<div class=\"easypin\">\r\n<div><img class=\"nasa_pin_pb_image lazyloaded\" src=\"https://elessi-cdn.nasatheme.com/wp-content/uploads/2016/06/shoes-desc.jpg\" alt=\"Shoes Product Description\" width=\"1920\" height=\"1080\" data-easypin_id=\"nasa_pin_2\" data-ll-status=\"loaded\" /></div>\r\n</div>\r\n</div>', 2, 2, '2020-11-14 01:13:57', '2020-11-14 01:13:57', 0),
(5, 'Travel Boots', '15000000', '/storage/product/2/hD3LBfGY0jDGBP6bVCQb.jpg', '3337312107_2_1_2-400x511.jpg', '<p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters. On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire.</p>\r\n<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<div class=\"nasa-inner-wrap nasa-pin-wrap nasa-pin-banner-wrap nasa-has-effect nasa-inited\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; direction: ltr; color: #555555; font-family: \'nunito sans\', helvetica, arial, sans-serif; font-size: 14.5px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\" data-pin=\"{&quot;nasa_pin_2&quot;:{&quot;0&quot;:{&quot;marker_pin&quot;:&quot;&lt;span class=\\&quot;nasa-marker-icon-bg\\&quot;&gt;&lt;span class=\\&quot;woocommerce-Price-amount amount\\&quot;&gt;&lt;bdi&gt;&lt;span class=\\&quot;woocommerce-Price-currencySymbol\\&quot;&gt;$&lt;\\/span&gt;90&lt;\\/bdi&gt;&lt;\\/span&gt;&lt;\\/span&gt;&quot;,&quot;position&quot;:&quot;nasa-top&quot;,&quot;id_product&quot;:&quot;2862&quot;,&quot;title_product&quot;:&quot;Elessi Sport&quot;,&quot;link_product&quot;:&quot;https:\\/\\/elessi.nasatheme.com\\/product\\/elessi-sport-galaxy\\/&quot;,&quot;img_product&quot;:&quot;&lt;img width=\\&quot;401\\&quot; height=\\&quot;512\\&quot; src=\\&quot;https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-401x512.jpg\\&quot; class=\\&quot;attachment-shop_catalog size-shop_catalog\\&quot; alt=\\&quot;\\&quot; srcset=\\&quot;https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-401x512.jpg 401w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-235x300.jpg 235w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-801x1024.jpg 801w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-117x150.jpg 117w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-768x981.jpg 768w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-1202x1536.jpg 1202w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-1603x2048.jpg 1603w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-450x575.jpg 450w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-595x760.jpg 595w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2.jpg 1800w\\&quot; sizes=\\&quot;(max-width: 401px) 100vw, 401px\\&quot; \\/&gt;&quot;,&quot;coords&quot;:{&quot;lat&quot;:&quot;1111&quot;,&quot;long&quot;:&quot;440&quot;}},&quot;1&quot;:{&quot;marker_pin&quot;:&quot;&lt;span class=\\&quot;nasa-marker-icon-bg\\&quot;&gt;&lt;span class=\\&quot;woocommerce-Price-amount amount\\&quot;&gt;&lt;bdi&gt;&lt;span class=\\&quot;woocommerce-Price-currencySymbol\\&quot;&gt;$&lt;\\/span&gt;99&lt;\\/bdi&gt;&lt;\\/span&gt;&lt;\\/span&gt;&quot;,&quot;position&quot;:&quot;nasa-top&quot;,&quot;id_product&quot;:&quot;2886&quot;,&quot;title_product&quot;:&quot;Travel Boots&quot;,&quot;link_product&quot;:&quot;https:\\/\\/elessi.nasatheme.com\\/product\\/travel-boots\\/&quot;,&quot;img_product&quot;:&quot;&lt;img width=\\&quot;401\\&quot; height=\\&quot;512\\&quot; src=\\&quot;https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-401x512.jpg\\&quot; class=\\&quot;attachment-shop_catalog size-shop_catalog\\&quot; alt=\\&quot;Travel Boots\\&quot; srcset=\\&quot;https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-401x512.jpg 401w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-235x300.jpg 235w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-801x1024.jpg 801w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-117x150.jpg 117w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-768x981.jpg 768w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-1202x1536.jpg 1202w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-1603x2048.jpg 1603w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-450x575.jpg 450w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-595x760.jpg 595w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2.jpg 1800w\\&quot; sizes=\\&quot;(max-width: 401px) 100vw, 401px\\&quot; \\/&gt;&quot;,&quot;coords&quot;:{&quot;lat&quot;:&quot;473&quot;,&quot;long&quot;:&quot;776&quot;}},&quot;canvas&quot;:{&quot;src&quot;:&quot;https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2016\\/06\\/shoes-desc.jpg&quot;,&quot;width&quot;:&quot;1920&quot;,&quot;height&quot;:&quot;1080&quot;}}}\">\r\n<div class=\"easypin\">\r\n<div><img class=\"nasa_pin_pb_image lazyloaded\" src=\"https://elessi-cdn.nasatheme.com/wp-content/uploads/2016/06/shoes-desc.jpg\" alt=\"Shoes Product Description\" width=\"1920\" height=\"1080\" data-easypin_id=\"nasa_pin_2\" data-ll-status=\"loaded\" /></div>\r\n</div>\r\n</div>', 2, 4, '2020-11-14 01:15:16', '2020-11-14 01:15:16', 9),
(6, 'Eliza Heaven', '8000000', '/storage/product/2/xPXQlxLi7NfOG1GSmvP9.jpg', '3335312050_2_1_2-400x511.jpg', '<p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters. On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire.</p>\r\n<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<div class=\"nasa-inner-wrap nasa-pin-wrap nasa-pin-banner-wrap nasa-has-effect nasa-inited\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; direction: ltr; color: #555555; font-family: \'nunito sans\', helvetica, arial, sans-serif; font-size: 14.5px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\" data-pin=\"{&quot;nasa_pin_2&quot;:{&quot;0&quot;:{&quot;marker_pin&quot;:&quot;&lt;span class=\\&quot;nasa-marker-icon-bg\\&quot;&gt;&lt;span class=\\&quot;woocommerce-Price-amount amount\\&quot;&gt;&lt;bdi&gt;&lt;span class=\\&quot;woocommerce-Price-currencySymbol\\&quot;&gt;$&lt;\\/span&gt;90&lt;\\/bdi&gt;&lt;\\/span&gt;&lt;\\/span&gt;&quot;,&quot;position&quot;:&quot;nasa-top&quot;,&quot;id_product&quot;:&quot;2862&quot;,&quot;title_product&quot;:&quot;Elessi Sport&quot;,&quot;link_product&quot;:&quot;https:\\/\\/elessi.nasatheme.com\\/product\\/elessi-sport-galaxy\\/&quot;,&quot;img_product&quot;:&quot;&lt;img width=\\&quot;401\\&quot; height=\\&quot;512\\&quot; src=\\&quot;https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-401x512.jpg\\&quot; class=\\&quot;attachment-shop_catalog size-shop_catalog\\&quot; alt=\\&quot;\\&quot; srcset=\\&quot;https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-401x512.jpg 401w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-235x300.jpg 235w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-801x1024.jpg 801w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-117x150.jpg 117w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-768x981.jpg 768w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-1202x1536.jpg 1202w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-1603x2048.jpg 1603w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-450x575.jpg 450w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-595x760.jpg 595w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2.jpg 1800w\\&quot; sizes=\\&quot;(max-width: 401px) 100vw, 401px\\&quot; \\/&gt;&quot;,&quot;coords&quot;:{&quot;lat&quot;:&quot;1111&quot;,&quot;long&quot;:&quot;440&quot;}},&quot;1&quot;:{&quot;marker_pin&quot;:&quot;&lt;span class=\\&quot;nasa-marker-icon-bg\\&quot;&gt;&lt;span class=\\&quot;woocommerce-Price-amount amount\\&quot;&gt;&lt;bdi&gt;&lt;span class=\\&quot;woocommerce-Price-currencySymbol\\&quot;&gt;$&lt;\\/span&gt;99&lt;\\/bdi&gt;&lt;\\/span&gt;&lt;\\/span&gt;&quot;,&quot;position&quot;:&quot;nasa-top&quot;,&quot;id_product&quot;:&quot;2886&quot;,&quot;title_product&quot;:&quot;Travel Boots&quot;,&quot;link_product&quot;:&quot;https:\\/\\/elessi.nasatheme.com\\/product\\/travel-boots\\/&quot;,&quot;img_product&quot;:&quot;&lt;img width=\\&quot;401\\&quot; height=\\&quot;512\\&quot; src=\\&quot;https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-401x512.jpg\\&quot; class=\\&quot;attachment-shop_catalog size-shop_catalog\\&quot; alt=\\&quot;Travel Boots\\&quot; srcset=\\&quot;https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-401x512.jpg 401w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-235x300.jpg 235w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-801x1024.jpg 801w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-117x150.jpg 117w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-768x981.jpg 768w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-1202x1536.jpg 1202w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-1603x2048.jpg 1603w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-450x575.jpg 450w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-595x760.jpg 595w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2.jpg 1800w\\&quot; sizes=\\&quot;(max-width: 401px) 100vw, 401px\\&quot; \\/&gt;&quot;,&quot;coords&quot;:{&quot;lat&quot;:&quot;473&quot;,&quot;long&quot;:&quot;776&quot;}},&quot;canvas&quot;:{&quot;src&quot;:&quot;https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2016\\/06\\/shoes-desc.jpg&quot;,&quot;width&quot;:&quot;1920&quot;,&quot;height&quot;:&quot;1080&quot;}}}\">\r\n<div class=\"easypin\">\r\n<div><img class=\"nasa_pin_pb_image lazyloaded\" src=\"https://elessi-cdn.nasatheme.com/wp-content/uploads/2016/06/shoes-desc.jpg\" alt=\"Shoes Product Description\" width=\"1920\" height=\"1080\" data-easypin_id=\"nasa_pin_2\" data-ll-status=\"loaded\" /></div>\r\n</div>\r\n</div>', 2, 2, '2020-11-14 01:16:02', '2020-11-14 01:16:02', 0),
(7, 'Tiny Paws', '7000000', '/storage/product/2/zSPiqVQTNmFlsBx31aqa.jpg', '3311312004_2_1_2-400x511.jpg', '<p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters. On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire.</p>\r\n<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<div class=\"nasa-inner-wrap nasa-pin-wrap nasa-pin-banner-wrap nasa-has-effect nasa-inited\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; direction: ltr; color: #555555; font-family: \'nunito sans\', helvetica, arial, sans-serif; font-size: 14.5px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\" data-pin=\"{&quot;nasa_pin_2&quot;:{&quot;0&quot;:{&quot;marker_pin&quot;:&quot;&lt;span class=\\&quot;nasa-marker-icon-bg\\&quot;&gt;&lt;span class=\\&quot;woocommerce-Price-amount amount\\&quot;&gt;&lt;bdi&gt;&lt;span class=\\&quot;woocommerce-Price-currencySymbol\\&quot;&gt;$&lt;\\/span&gt;90&lt;\\/bdi&gt;&lt;\\/span&gt;&lt;\\/span&gt;&quot;,&quot;position&quot;:&quot;nasa-top&quot;,&quot;id_product&quot;:&quot;2862&quot;,&quot;title_product&quot;:&quot;Elessi Sport&quot;,&quot;link_product&quot;:&quot;https:\\/\\/elessi.nasatheme.com\\/product\\/elessi-sport-galaxy\\/&quot;,&quot;img_product&quot;:&quot;&lt;img width=\\&quot;401\\&quot; height=\\&quot;512\\&quot; src=\\&quot;https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-401x512.jpg\\&quot; class=\\&quot;attachment-shop_catalog size-shop_catalog\\&quot; alt=\\&quot;\\&quot; srcset=\\&quot;https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-401x512.jpg 401w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-235x300.jpg 235w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-801x1024.jpg 801w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-117x150.jpg 117w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-768x981.jpg 768w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-1202x1536.jpg 1202w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-1603x2048.jpg 1603w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-450x575.jpg 450w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-595x760.jpg 595w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2.jpg 1800w\\&quot; sizes=\\&quot;(max-width: 401px) 100vw, 401px\\&quot; \\/&gt;&quot;,&quot;coords&quot;:{&quot;lat&quot;:&quot;1111&quot;,&quot;long&quot;:&quot;440&quot;}},&quot;1&quot;:{&quot;marker_pin&quot;:&quot;&lt;span class=\\&quot;nasa-marker-icon-bg\\&quot;&gt;&lt;span class=\\&quot;woocommerce-Price-amount amount\\&quot;&gt;&lt;bdi&gt;&lt;span class=\\&quot;woocommerce-Price-currencySymbol\\&quot;&gt;$&lt;\\/span&gt;99&lt;\\/bdi&gt;&lt;\\/span&gt;&lt;\\/span&gt;&quot;,&quot;position&quot;:&quot;nasa-top&quot;,&quot;id_product&quot;:&quot;2886&quot;,&quot;title_product&quot;:&quot;Travel Boots&quot;,&quot;link_product&quot;:&quot;https:\\/\\/elessi.nasatheme.com\\/product\\/travel-boots\\/&quot;,&quot;img_product&quot;:&quot;&lt;img width=\\&quot;401\\&quot; height=\\&quot;512\\&quot; src=\\&quot;https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-401x512.jpg\\&quot; class=\\&quot;attachment-shop_catalog size-shop_catalog\\&quot; alt=\\&quot;Travel Boots\\&quot; srcset=\\&quot;https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-401x512.jpg 401w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-235x300.jpg 235w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-801x1024.jpg 801w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-117x150.jpg 117w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-768x981.jpg 768w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-1202x1536.jpg 1202w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-1603x2048.jpg 1603w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-450x575.jpg 450w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-595x760.jpg 595w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2.jpg 1800w\\&quot; sizes=\\&quot;(max-width: 401px) 100vw, 401px\\&quot; \\/&gt;&quot;,&quot;coords&quot;:{&quot;lat&quot;:&quot;473&quot;,&quot;long&quot;:&quot;776&quot;}},&quot;canvas&quot;:{&quot;src&quot;:&quot;https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2016\\/06\\/shoes-desc.jpg&quot;,&quot;width&quot;:&quot;1920&quot;,&quot;height&quot;:&quot;1080&quot;}}}\">\r\n<div class=\"easypin\">\r\n<div><img class=\"nasa_pin_pb_image lazyloaded\" src=\"https://elessi-cdn.nasatheme.com/wp-content/uploads/2016/06/shoes-desc.jpg\" alt=\"Shoes Product Description\" width=\"1920\" height=\"1080\" data-easypin_id=\"nasa_pin_2\" data-ll-status=\"loaded\" /></div>\r\n</div>\r\n</div>', 2, 2, '2020-11-14 01:16:42', '2020-11-17 01:47:52', 3);
INSERT INTO `products` (`id`, `name`, `price`, `feature_image_path`, `feature_image_name`, `content`, `user_id`, `category_id`, `created_at`, `updated_at`, `views_count`) VALUES
(8, 'Young Brown', '10000000', '/storage/product/2/soifKLazK4q46xKHBtkO.jpg', '7323312107_2_1_2-400x511.jpg', '<p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters. On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire.</p>\r\n<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<div class=\"nasa-inner-wrap nasa-pin-wrap nasa-pin-banner-wrap nasa-has-effect nasa-inited\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; direction: ltr; color: #555555; font-family: \'nunito sans\', helvetica, arial, sans-serif; font-size: 14.5px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\" data-pin=\"{&quot;nasa_pin_2&quot;:{&quot;0&quot;:{&quot;marker_pin&quot;:&quot;&lt;span class=\\&quot;nasa-marker-icon-bg\\&quot;&gt;&lt;span class=\\&quot;woocommerce-Price-amount amount\\&quot;&gt;&lt;bdi&gt;&lt;span class=\\&quot;woocommerce-Price-currencySymbol\\&quot;&gt;$&lt;\\/span&gt;90&lt;\\/bdi&gt;&lt;\\/span&gt;&lt;\\/span&gt;&quot;,&quot;position&quot;:&quot;nasa-top&quot;,&quot;id_product&quot;:&quot;2862&quot;,&quot;title_product&quot;:&quot;Elessi Sport&quot;,&quot;link_product&quot;:&quot;https:\\/\\/elessi.nasatheme.com\\/product\\/elessi-sport-galaxy\\/&quot;,&quot;img_product&quot;:&quot;&lt;img width=\\&quot;401\\&quot; height=\\&quot;512\\&quot; src=\\&quot;https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-401x512.jpg\\&quot; class=\\&quot;attachment-shop_catalog size-shop_catalog\\&quot; alt=\\&quot;\\&quot; srcset=\\&quot;https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-401x512.jpg 401w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-235x300.jpg 235w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-801x1024.jpg 801w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-117x150.jpg 117w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-768x981.jpg 768w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-1202x1536.jpg 1202w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-1603x2048.jpg 1603w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-450x575.jpg 450w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-595x760.jpg 595w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2.jpg 1800w\\&quot; sizes=\\&quot;(max-width: 401px) 100vw, 401px\\&quot; \\/&gt;&quot;,&quot;coords&quot;:{&quot;lat&quot;:&quot;1111&quot;,&quot;long&quot;:&quot;440&quot;}},&quot;1&quot;:{&quot;marker_pin&quot;:&quot;&lt;span class=\\&quot;nasa-marker-icon-bg\\&quot;&gt;&lt;span class=\\&quot;woocommerce-Price-amount amount\\&quot;&gt;&lt;bdi&gt;&lt;span class=\\&quot;woocommerce-Price-currencySymbol\\&quot;&gt;$&lt;\\/span&gt;99&lt;\\/bdi&gt;&lt;\\/span&gt;&lt;\\/span&gt;&quot;,&quot;position&quot;:&quot;nasa-top&quot;,&quot;id_product&quot;:&quot;2886&quot;,&quot;title_product&quot;:&quot;Travel Boots&quot;,&quot;link_product&quot;:&quot;https:\\/\\/elessi.nasatheme.com\\/product\\/travel-boots\\/&quot;,&quot;img_product&quot;:&quot;&lt;img width=\\&quot;401\\&quot; height=\\&quot;512\\&quot; src=\\&quot;https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-401x512.jpg\\&quot; class=\\&quot;attachment-shop_catalog size-shop_catalog\\&quot; alt=\\&quot;Travel Boots\\&quot; srcset=\\&quot;https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-401x512.jpg 401w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-235x300.jpg 235w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-801x1024.jpg 801w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-117x150.jpg 117w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-768x981.jpg 768w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-1202x1536.jpg 1202w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-1603x2048.jpg 1603w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-450x575.jpg 450w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-595x760.jpg 595w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2.jpg 1800w\\&quot; sizes=\\&quot;(max-width: 401px) 100vw, 401px\\&quot; \\/&gt;&quot;,&quot;coords&quot;:{&quot;lat&quot;:&quot;473&quot;,&quot;long&quot;:&quot;776&quot;}},&quot;canvas&quot;:{&quot;src&quot;:&quot;https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2016\\/06\\/shoes-desc.jpg&quot;,&quot;width&quot;:&quot;1920&quot;,&quot;height&quot;:&quot;1080&quot;}}}\">\r\n<div class=\"easypin\">\r\n<div><img class=\"nasa_pin_pb_image lazyloaded\" src=\"https://elessi-cdn.nasatheme.com/wp-content/uploads/2016/06/shoes-desc.jpg\" alt=\"Shoes Product Description\" width=\"1920\" height=\"1080\" data-easypin_id=\"nasa_pin_2\" data-ll-status=\"loaded\" /></div>\r\n</div>\r\n</div>', 2, 2, '2020-11-14 01:17:21', '2020-11-14 01:20:17', 2),
(9, 'Captain Foots', '9000000', '/storage/product/2/CDGgXVtFEAfMGTytPx1n.jpg', '7305312040_2_1_2-400x511.jpg', '<p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters. On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire.</p>\r\n<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<div class=\"nasa-inner-wrap nasa-pin-wrap nasa-pin-banner-wrap nasa-has-effect nasa-inited\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; direction: ltr; color: #555555; font-family: \'nunito sans\', helvetica, arial, sans-serif; font-size: 14.5px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\" data-pin=\"{&quot;nasa_pin_2&quot;:{&quot;0&quot;:{&quot;marker_pin&quot;:&quot;&lt;span class=\\&quot;nasa-marker-icon-bg\\&quot;&gt;&lt;span class=\\&quot;woocommerce-Price-amount amount\\&quot;&gt;&lt;bdi&gt;&lt;span class=\\&quot;woocommerce-Price-currencySymbol\\&quot;&gt;$&lt;\\/span&gt;90&lt;\\/bdi&gt;&lt;\\/span&gt;&lt;\\/span&gt;&quot;,&quot;position&quot;:&quot;nasa-top&quot;,&quot;id_product&quot;:&quot;2862&quot;,&quot;title_product&quot;:&quot;Elessi Sport&quot;,&quot;link_product&quot;:&quot;https:\\/\\/elessi.nasatheme.com\\/product\\/elessi-sport-galaxy\\/&quot;,&quot;img_product&quot;:&quot;&lt;img width=\\&quot;401\\&quot; height=\\&quot;512\\&quot; src=\\&quot;https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-401x512.jpg\\&quot; class=\\&quot;attachment-shop_catalog size-shop_catalog\\&quot; alt=\\&quot;\\&quot; srcset=\\&quot;https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-401x512.jpg 401w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-235x300.jpg 235w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-801x1024.jpg 801w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-117x150.jpg 117w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-768x981.jpg 768w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-1202x1536.jpg 1202w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-1603x2048.jpg 1603w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-450x575.jpg 450w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2-595x760.jpg 595w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3310312204_2_1_2.jpg 1800w\\&quot; sizes=\\&quot;(max-width: 401px) 100vw, 401px\\&quot; \\/&gt;&quot;,&quot;coords&quot;:{&quot;lat&quot;:&quot;1111&quot;,&quot;long&quot;:&quot;440&quot;}},&quot;1&quot;:{&quot;marker_pin&quot;:&quot;&lt;span class=\\&quot;nasa-marker-icon-bg\\&quot;&gt;&lt;span class=\\&quot;woocommerce-Price-amount amount\\&quot;&gt;&lt;bdi&gt;&lt;span class=\\&quot;woocommerce-Price-currencySymbol\\&quot;&gt;$&lt;\\/span&gt;99&lt;\\/bdi&gt;&lt;\\/span&gt;&lt;\\/span&gt;&quot;,&quot;position&quot;:&quot;nasa-top&quot;,&quot;id_product&quot;:&quot;2886&quot;,&quot;title_product&quot;:&quot;Travel Boots&quot;,&quot;link_product&quot;:&quot;https:\\/\\/elessi.nasatheme.com\\/product\\/travel-boots\\/&quot;,&quot;img_product&quot;:&quot;&lt;img width=\\&quot;401\\&quot; height=\\&quot;512\\&quot; src=\\&quot;https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-401x512.jpg\\&quot; class=\\&quot;attachment-shop_catalog size-shop_catalog\\&quot; alt=\\&quot;Travel Boots\\&quot; srcset=\\&quot;https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-401x512.jpg 401w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-235x300.jpg 235w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-801x1024.jpg 801w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-117x150.jpg 117w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-768x981.jpg 768w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-1202x1536.jpg 1202w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-1603x2048.jpg 1603w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-450x575.jpg 450w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2-595x760.jpg 595w, https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2020\\/06\\/3337312107_2_1_2.jpg 1800w\\&quot; sizes=\\&quot;(max-width: 401px) 100vw, 401px\\&quot; \\/&gt;&quot;,&quot;coords&quot;:{&quot;lat&quot;:&quot;473&quot;,&quot;long&quot;:&quot;776&quot;}},&quot;canvas&quot;:{&quot;src&quot;:&quot;https:\\/\\/elessi-cdn.nasatheme.com\\/wp-content\\/uploads\\/2016\\/06\\/shoes-desc.jpg&quot;,&quot;width&quot;:&quot;1920&quot;,&quot;height&quot;:&quot;1080&quot;}}}\">\r\n<div class=\"easypin\">\r\n<div><img class=\"nasa_pin_pb_image lazyloaded\" src=\"https://elessi-cdn.nasatheme.com/wp-content/uploads/2016/06/shoes-desc.jpg\" alt=\"Shoes Product Description\" width=\"1920\" height=\"1080\" data-easypin_id=\"nasa_pin_2\" data-ll-status=\"loaded\" /></div>\r\n</div>\r\n</div>', 2, 4, '2020-11-14 01:19:51', '2020-11-14 01:20:37', 5);

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `image_name`, `image_path`, `product_id`, `created_at`, `updated_at`) VALUES
(1, '3310312204_2_1_2-400x511.jpg', '/storage/product/2/f2Cxy2xCay04cJw9wbUw.jpg', 1, '2020-11-13 01:52:35', '2020-11-13 01:52:35'),
(2, '3310312204_2_2_2-400x511.jpg', '/storage/product/2/Ec3bZIrVFb8O5AWhRk5D.jpg', 1, '2020-11-13 01:52:35', '2020-11-13 01:52:35'),
(3, '3334312001_2_1_2-400x511.jpg', '/storage/product/2/iPBaU46RgCK8LUHXW0uH.jpg', 2, '2020-11-14 01:10:15', '2020-11-14 01:10:15'),
(4, '3334312001_2_2_2-400x511.jpg', '/storage/product/2/KDr3AtxddEz1PyUrkiIq.jpg', 2, '2020-11-14 01:10:15', '2020-11-14 01:10:15'),
(5, '7219312022_2_1_2-400x511.jpg', '/storage/product/2/gXHG5c2rZHVqTvvXhYLk.jpg', 4, '2020-11-14 01:13:57', '2020-11-14 01:13:57'),
(6, '7219312022_2_2_2-400x511.jpg', '/storage/product/2/uFJDk2dhzpHQNr5BxoBG.jpg', 4, '2020-11-14 01:13:57', '2020-11-14 01:13:57'),
(7, '3337312107_2_1_2-400x511.jpg', '/storage/product/2/1AT9WE4U60FN4GGbuEhO.jpg', 5, '2020-11-14 01:15:16', '2020-11-14 01:15:16'),
(8, 'bag-blog-2-380x380.jpg', '/storage/product/2/uD1L7CSbkfxMkW9RhAWt.jpg', 5, '2020-11-14 01:15:16', '2020-11-14 01:15:16'),
(9, '3335312050_2_1_2-400x511.jpg', '/storage/product/2/GQGQEuCOT2vLiCtd19rd.jpg', 6, '2020-11-14 01:16:02', '2020-11-14 01:16:02'),
(10, '3335312050_2_2_2-400x511.jpg', '/storage/product/2/VMCGhmquta6vMEgTWeCM.jpg', 6, '2020-11-14 01:16:02', '2020-11-14 01:16:02'),
(11, '3311312004_2_1_2-400x511.jpg', '/storage/product/2/kDpqOEFAttUlCH2CZCW5.jpg', 7, '2020-11-14 01:16:42', '2020-11-14 01:16:42'),
(12, '3311312004_2_2_2-400x511.jpg', '/storage/product/2/E4UlSa6bMaSmbMvho0tC.jpg', 7, '2020-11-14 01:16:42', '2020-11-14 01:16:42'),
(13, '3346312004_2_1_2-400x511.jpg', '/storage/product/2/wm5cszkwlKJ8l6Fv4dsp.jpg', 3, '2020-11-14 01:18:25', '2020-11-14 01:18:25'),
(14, '3346312004_2_2_2-400x511.jpg', '/storage/product/2/jWvTKJgVFfReee23idc0.jpg', 3, '2020-11-14 01:18:25', '2020-11-14 01:18:25'),
(15, '7323312107_2_1_2-400x511.jpg', '/storage/product/2/Fn9Elkt2a3aPPRz7bNdq.jpg', 8, '2020-11-14 01:20:17', '2020-11-14 01:20:17'),
(16, '7323312107_2_2_2-400x511.jpg', '/storage/product/2/pCg3AMWqLq0vZvYWl5Fb.jpg', 8, '2020-11-14 01:20:17', '2020-11-14 01:20:17'),
(17, '7305312040_2_1_2-400x511.jpg', '/storage/product/2/wPtaynJQL6lYhtIUkheU.jpg', 9, '2020-11-14 01:20:37', '2020-11-14 01:20:37'),
(18, '7305312040_2_2_2-400x511.jpg', '/storage/product/2/m77Nhz0edIhIzPjhezfB.jpg', 9, '2020-11-14 01:20:37', '2020-11-14 01:20:37');

-- --------------------------------------------------------

--
-- Table structure for table `product_tags`
--

CREATE TABLE `product_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_tags`
--

INSERT INTO `product_tags` (`id`, `product_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2020-11-13 01:52:35', '2020-11-13 01:52:35'),
(2, 1, 2, '2020-11-13 01:52:35', '2020-11-13 01:52:35'),
(3, 2, 3, '2020-11-14 01:10:15', '2020-11-14 01:10:15'),
(4, 2, 4, '2020-11-14 01:10:15', '2020-11-14 01:10:15'),
(5, 4, 5, '2020-11-14 01:13:57', '2020-11-14 01:13:57'),
(6, 5, 6, '2020-11-14 01:15:16', '2020-11-14 01:15:16'),
(7, 6, 7, '2020-11-14 01:16:02', '2020-11-14 01:16:02'),
(8, 6, 8, '2020-11-14 01:16:02', '2020-11-14 01:16:02'),
(9, 7, 9, '2020-11-14 01:16:42', '2020-11-14 01:16:42'),
(10, 7, 10, '2020-11-14 01:16:42', '2020-11-14 01:16:42'),
(11, 3, 11, '2020-11-14 01:18:25', '2020-11-14 01:18:25'),
(12, 3, 12, '2020-11-14 01:18:25', '2020-11-14 01:18:25'),
(13, 9, 13, '2020-11-14 06:22:20', '2020-11-14 06:22:20');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Quản trị hệ thống', NULL, NULL),
(2, 'guess', 'Khách hàng', NULL, NULL),
(3, 'developer', 'Phát triển hệ thống', NULL, NULL),
(4, 'content', 'Chỉnh sửa nội dung', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 2, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `config_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `config_value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `config_key`, `config_value`, `type`, `created_at`, `updated_at`) VALUES
(1, 'phone_contact', '098797667', 'Text', '2020-11-14 07:13:56', '2020-11-14 07:13:56'),
(2, 'email', 'info@domain.com', 'Text', '2020-11-14 07:14:33', '2020-11-14 07:14:33'),
(3, 'facebook_link', 'https://www.facebook.com/TranVanHoang23', 'Text', '2020-11-14 07:14:59', '2020-11-14 07:14:59'),
(4, 'instagram', 'http://instagram.com/', 'Text', '2020-11-14 07:16:06', '2020-11-14 07:16:06'),
(5, 'footer_information', '<iframe         src=\"https://www.google.com/maps/embed?pb=!4v1581599637550!6m8!1m7!1svsXUo6yo0NdjsXT6vPIAXA!2m2!1d51.51880808946012!2d-0.1547634856692368!3f65.52!4f-10.799999999999997!5f1.2691112702514291\"         width=\"100%\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>', 'Text', '2020-11-14 07:24:46', '2020-11-14 07:24:46');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `description`, `image_path`, `image_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Travel Boots', '$99', '/storage/slider/2/yH5969EgsEv61ccV5IoS.jpg', 'shoes-slider3.jpg', '2020-11-13 12:31:02', '2020-11-13 12:31:02', NULL),
(2, 'Eliza Heaven', '$85', '/storage/slider/2/HEO6zZXaGWuOnLXDGzgs.jpg', 'shoes-slider1.jpg', '2020-11-13 12:31:24', '2020-11-13 12:31:24', NULL),
(3, 'Tiny Paws', '$95', '/storage/slider/2/6LCuuvOvV2gCqnE9gcXg.jpg', 'shoes-slider4.jpg', '2020-11-13 12:31:41', '2020-11-16 07:44:37', NULL),
(4, 'Elessi Sport', '$90', '/storage/slider/2/F29fHwtU5K3gFSU9s1Ux.jpg', 'shoes-slider2.jpg', '2020-11-13 12:32:04', '2020-11-13 12:32:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'HI', '2020-11-13 01:52:35', '2020-11-13 01:52:35'),
(2, 'CA', '2020-11-13 01:52:35', '2020-11-13 01:52:35'),
(3, 'white', '2020-11-14 01:10:15', '2020-11-14 01:10:15'),
(4, 'sport', '2020-11-14 01:10:15', '2020-11-14 01:10:15'),
(5, 'canvas', '2020-11-14 01:13:57', '2020-11-14 01:13:57'),
(6, 'travel', '2020-11-14 01:15:16', '2020-11-14 01:15:16'),
(7, 'Eliza', '2020-11-14 01:16:02', '2020-11-14 01:16:02'),
(8, 'heaven', '2020-11-14 01:16:02', '2020-11-14 01:16:02'),
(9, 'Tiny', '2020-11-14 01:16:42', '2020-11-14 01:16:42'),
(10, 'Paws', '2020-11-14 01:16:42', '2020-11-14 01:16:42'),
(11, 'strong', '2020-11-14 01:18:25', '2020-11-14 01:18:25'),
(12, 'men', '2020-11-14 01:18:25', '2020-11-14 01:18:25'),
(13, 'captain', '2020-11-14 06:22:20', '2020-11-14 06:22:20'),
(14, 'foots', '2020-11-14 06:26:00', '2020-11-14 06:26:00');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'gasdf Le Freshfood', '1714245ctk41@gmail.com', NULL, '$2y$10$E9z/c9udglW629JxRnkn2O4f6T1oKIzFxxsz894LxbU0Ruf5cWooO', 'kb5d2ej93dUhyzooxOEVeR4KpMUjVhlCxPqDYQNcDdgbRGVVM3PolAFwrCu5', '2020-11-12 06:49:14', '2020-11-12 06:49:14', NULL);

--
-- Indexes for dumped tables
--

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
-- Indexes for table `menus`
--
ALTER TABLE `menus`
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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_tags`
--
ALTER TABLE `product_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `product_tags`
--
ALTER TABLE `product_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
