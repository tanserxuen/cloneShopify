-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2020 at 06:09 PM
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
-- Database: `practise`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(1, 'Ipsam culpa asperiores tempora ad qui at.', 'Perferendis sunt accusantium est voluptatum nihil et voluptate. Vel corrupti est nostrum iure natus id et. Cumque pariatur porro eius et. Qui dolore et sit vitae deserunt illum.', '2020-08-27 22:59:56', '2020-08-27 22:59:56'),
(2, 'Sint voluptas voluptatem commodi distinctio quo.', 'Id asperiores quos et rem occaecati blanditiis sunt consequatur. Odit laudantium assumenda enim quisquam perferendis beatae facilis autem. Similique eveniet et atque aut.', '2020-08-27 22:59:57', '2020-08-27 22:59:57'),
(3, 'Cumque veritatis esse error commodi saepe magni.', 'Beatae ut ut adipisci. Culpa asperiores cumque doloremque reiciendis. Ipsa voluptatem occaecati exercitationem suscipit accusantium.', '2020-08-27 22:59:57', '2020-08-27 22:59:57'),
(4, 'Ut omnis omnis est sint deleniti quo.', 'Sed adipisci non quaerat molestias cum vitae. Quis eos natus vel. Quae quisquam corrupti qui. Asperiores animi magnam et unde. Nisi autem animi similique consequatur vel saepe eius ut.', '2020-08-27 22:59:57', '2020-08-27 22:59:57'),
(5, 'Omnis a sit labore fugiat et a consectetur.', 'Est vero laborum inventore. Sed corporis atque qui. Quis expedita inventore amet sapiente ullam culpa.', '2020-08-27 22:59:57', '2020-08-27 22:59:57'),
(6, 'Quia aut consequuntur fugit ea id ad et aliquid.', 'Esse fugiat a et laborum et architecto. Molestiae et consequuntur maiores facere facere accusantium. Totam non ad impedit dolorum. Sapiente officia est eos est omnis in nobis.', '2020-08-27 22:59:57', '2020-08-27 22:59:57'),
(7, 'Facere eligendi corporis dolorem quo vitae.', 'Vitae maiores omnis iure eum dolor rerum. Ipsa tempora quisquam aut recusandae laudantium esse provident magnam.', '2020-08-27 22:59:57', '2020-08-27 22:59:57'),
(8, 'Est molestiae ut officia impedit quibusdam ut.', 'Modi corporis qui dolorum nam vitae animi rerum. Tempore sunt vel dicta qui nihil officia temporibus. Tempora ea qui reiciendis quod voluptas suscipit.', '2020-08-27 22:59:57', '2020-08-27 22:59:57'),
(9, 'Impedit nihil dolorem eum nobis assumenda.', 'Sunt et excepturi doloremque. Quo rerum tempore ducimus iste magnam sint. Totam hic ut molestias placeat quis beatae et est.', '2020-08-27 22:59:57', '2020-08-27 22:59:57'),
(10, 'Illum tempore sed a voluptatem magnam.', 'Velit quis velit omnis dolorem. Quas totam deserunt dolores quas ut. Quasi voluptatem dolorum eum earum pariatur.', '2020-08-27 22:59:57', '2020-08-27 22:59:57'),
(11, 'Nihil omnis consequuntur aut alias ad.', 'Harum provident et rerum rerum quasi dolorum aut asperiores. Ut et aut omnis deserunt. Sed id beatae et quisquam sed iusto libero.', '2020-08-27 22:59:57', '2020-08-27 22:59:57'),
(12, 'Dolorem vitae culpa natus.', 'Ea similique at sint pariatur. Provident dolores ut quaerat officiis qui voluptates. Consequuntur sunt magnam qui atque. Iure quas et aliquam.', '2020-08-27 22:59:57', '2020-08-27 22:59:57'),
(13, 'Accusamus voluptatem maxime et sint.', 'Id ratione sed ea dolorem. Dolor molestiae at non eius dolorem libero. Qui ut totam suscipit dolorem iure et.', '2020-08-27 22:59:57', '2020-08-27 22:59:57'),
(14, 'Soluta quae repudiandae ut quam.', 'Veritatis quis ut numquam cupiditate dolor consequuntur. Ullam aliquam et voluptatem pariatur qui debitis ut.', '2020-08-27 22:59:57', '2020-08-27 22:59:57'),
(15, 'Est velit ab esse rerum explicabo itaque autem.', 'Eius consequatur facilis in delectus doloribus alias dolore sed. Tenetur repellendus accusamus illo sint autem modi. Dolorem harum ducimus ducimus.', '2020-08-27 22:59:57', '2020-08-27 22:59:57'),
(16, 'Totam natus dolores eligendi nulla ut.', 'Dignissimos accusantium facere dolores consequatur eum ut. Natus est laboriosam ut voluptatem. Molestiae ipsum natus eos et. Vitae est maxime officiis aut. Temporibus enim quisquam magni.', '2020-08-27 22:59:57', '2020-08-27 22:59:57'),
(17, 'Sunt autem nostrum voluptatum accusantium.', 'Adipisci architecto sit est sunt dolores. Aut voluptatem in facilis accusantium. Eos ut non sed et ipsam veniam temporibus et. Quos corporis ratione harum quaerat. Facere numquam laborum et facilis.', '2020-08-27 22:59:57', '2020-08-27 22:59:57'),
(18, 'Eos voluptas eos et labore a aliquam et alias.', 'At corrupti itaque voluptate harum quibusdam expedita recusandae. Delectus in consequuntur dignissimos corporis officiis et et. Qui quis deleniti fugit reiciendis animi.', '2020-08-27 22:59:57', '2020-08-27 22:59:57'),
(19, 'Et et corporis ratione atque quasi excepturi sit.', 'Nobis odit consectetur soluta nostrum tenetur officiis illum. Non veniam culpa quis. Consequuntur sunt eaque ab at ut et rerum. Porro ipsa fugit laborum ab earum pariatur.', '2020-08-27 22:59:57', '2020-08-27 22:59:57'),
(20, 'Nam velit distinctio quisquam sint.', 'Esse id in totam numquam impedit dicta. In rerum debitis commodi. Provident assumenda hic rerum molestiae maiores nulla.', '2020-08-27 22:59:57', '2020-08-27 22:59:57'),
(21, 'Sit id ex iure cumque.', 'Est recusandae aperiam sunt assumenda aliquam. Soluta rerum beatae blanditiis delectus beatae reprehenderit.', '2020-08-27 22:59:58', '2020-08-27 22:59:58'),
(22, 'Sint sapiente ipsam totam et.', 'Quae asperiores aperiam sit quae. Reiciendis beatae quis quae omnis. Repellendus incidunt magnam accusamus architecto eos et. Est quia qui magni quis consequatur sapiente.', '2020-08-27 22:59:58', '2020-08-27 22:59:58'),
(23, 'Incidunt ut reprehenderit culpa et ut quod ipsum.', 'Ex magni laborum inventore nemo impedit earum. Unde molestiae nihil ut. Error neque soluta ea. Quia cupiditate et autem itaque nemo architecto deleniti velit.', '2020-08-27 22:59:58', '2020-08-27 22:59:58'),
(24, 'Nisi aut nihil aut ratione et neque ratione.', 'Ad magni nemo qui nesciunt necessitatibus. Dolorem quasi explicabo debitis officia molestias blanditiis. Minus expedita tenetur quos ut.', '2020-08-27 22:59:58', '2020-08-27 22:59:58'),
(25, 'Est voluptatibus aut aliquid et corrupti.', 'Illum laudantium qui dicta qui. Id optio beatae et occaecati quas. Qui dolores commodi tempore accusantium commodi fugiat pariatur aut.', '2020-08-27 22:59:58', '2020-08-27 22:59:58'),
(26, 'Excepturi ipsam cum perspiciatis totam est.', 'Tenetur voluptas temporibus ducimus adipisci quas natus dicta. Laudantium voluptates sapiente voluptas culpa. Deleniti officiis veritatis est aut.', '2020-08-27 22:59:58', '2020-08-27 22:59:58'),
(27, 'Autem quos quae eos quae explicabo repellat.', 'Eos dolore illum excepturi deserunt dolor minima. Ratione aut omnis blanditiis vitae vel libero sequi. Cumque nulla libero iusto et.', '2020-08-27 22:59:58', '2020-08-27 22:59:58'),
(28, 'Eum laborum molestias est quis iusto.', 'Quaerat dolore qui rerum. Distinctio explicabo porro repellat et eos dolor. Reprehenderit qui rerum sunt modi temporibus.', '2020-08-27 22:59:58', '2020-08-27 22:59:58'),
(29, 'Omnis porro aut soluta porro.', 'Nesciunt eos magnam adipisci vero vero. Dolorum voluptates dolores fugit eveniet ipsum et. Voluptatem quam quia sed odio qui accusantium voluptatum.', '2020-08-27 22:59:58', '2020-08-27 22:59:58'),
(30, 'Illo deserunt maxime molestiae sapiente.', 'Aut aut sed et rem fugit qui. Placeat perferendis nisi non perspiciatis modi. Consequatur fugit quas voluptatem earum natus cumque quaerat quis.', '2020-08-27 22:59:58', '2020-08-27 22:59:58');

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
(12, '2020_07_26_164616_create_teas_table', 2),
(15, '2020_07_27_072818_create_outlets_table', 3),
(16, '2020_07_28_090615_create_tea_sers_table', 4),
(17, '2020_07_28_090819_create_tea_cats_table', 4),
(31, '2014_10_12_000000_create_users_table', 5),
(32, '2014_10_12_100000_create_password_resets_table', 5),
(33, '2019_08_19_000000_create_failed_jobs_table', 5),
(34, '2020_08_08_051752_create_articles_table', 5),
(35, '2020_08_09_084916_create_teas_table', 5),
(36, '2020_08_10_153543_create_orders_table', 5),
(38, '2020_08_27_093441_add_rate_to_teas_table', 6),
(41, '2020_08_21_075257_create_order_details_table', 7),
(42, '2020_08_28_060432_create_roles_table', 7),
(43, '2020_08_28_060738_create_role_user_table', 7),
(44, '2020_08_28_065000_create_teas_table', 7),
(45, '2020_08_31_132603_add_image_to_teas_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping` tinyint(1) NOT NULL,
  `payment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `user_id`, `customer_id`, `shipping`, `payment`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, 'FPX', NULL, NULL),
(2, 11, 1, 1, 1, 'Cash', '2020-08-27 23:01:26', '2020-08-27 23:01:26'),
(3, 12, 3, 1, 0, 'ebank', '2020-08-28 06:45:59', '2020-08-28 06:45:59'),
(4, 13, 3, 1, 1, 'ebank', '2020-08-28 06:46:56', '2020-08-28 06:46:56'),
(5, 14, 3, 1, 1, 'FPX', '2020-08-28 06:49:12', '2020-08-28 06:49:12'),
(6, 15, 1, 1, 0, 'FPX', '2020-08-28 06:56:57', '2020-08-28 06:56:57'),
(7, 16, 7, 1, 0, 'ebank', '2020-08-28 07:19:00', '2020-08-28 07:19:00'),
(8, 17, 1, 1, 1, 'ebank', '2020-08-28 07:22:24', '2020-08-28 07:22:24'),
(9, 18, 3, 1, 0, 'ebank', '2020-08-28 07:23:38', '2020-08-28 07:23:38'),
(10, 19, 7, 1, 1, 'Cash', '2020-08-28 07:28:00', '2020-08-28 07:28:00'),
(11, 20, 7, 1, 0, 'ebank', '2020-08-28 07:28:56', '2020-08-28 07:28:56'),
(12, 21, 5, 5, 1, 'Cash', '2020-08-29 03:10:48', '2020-08-29 03:10:48'),
(13, 22, 5, 5, 1, 'FPX', '2020-08-29 03:33:43', '2020-08-29 03:33:43'),
(14, 23, 1, 1, 0, 'ebank', '2020-08-29 03:36:30', '2020-08-29 03:36:30'),
(15, 24, 5, 5, 1, 'ebank', '2020-08-29 04:11:35', '2020-08-29 04:11:35'),
(16, 25, 1, 1, 1, 'ebank', '2020-08-30 03:06:52', '2020-08-30 03:06:52'),
(17, 26, 7, 7, 1, 'ebank', '2020-08-31 01:35:01', '2020-08-31 01:35:01'),
(18, 27, 7, 7, 1, 'ebank', '2020-08-31 01:35:53', '2020-08-31 01:35:53'),
(19, 28, 5, 5, 1, 'ebank', '2020-09-01 06:42:32', '2020-09-01 06:42:32');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tea_id` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`tea_id`)),
  `unit_price` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`unit_price`)),
  `quantity` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`quantity`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `tea_id`, `unit_price`, `quantity`, `created_at`, `updated_at`) VALUES
(1, '[4,2,3,1]', '[11.9,11.9,11.9,11.9]', '[4,2,1,3]', '2020-08-27 23:00:01', '2020-08-27 23:00:01'),
(2, '[4,2,1,3]', '[11.9,11.9,11.9,11.9]', '[1,2,3,4]', '2020-08-27 23:00:01', '2020-08-27 23:00:01'),
(3, '[1,3,4,2]', '[11.9,11.9,11.9,11.9]', '[2,1,4,3]', '2020-08-27 23:00:01', '2020-08-27 23:00:01'),
(4, '[4,3,2,1]', '[11.9,11.9,11.9,11.9]', '[1,2,4,3]', '2020-08-27 23:00:01', '2020-08-27 23:00:01'),
(5, '[4,1,3,2]', '[11.9,11.9,11.9,11.9]', '[4,2,3,1]', '2020-08-27 23:00:01', '2020-08-27 23:00:01'),
(6, '[2,4,3,1]', '[11.9,11.9,11.9,11.9]', '[3,2,4,1]', '2020-08-27 23:00:02', '2020-08-27 23:00:02'),
(7, '[3,2,1,4]', '[11.9,11.9,11.9,11.9]', '[2,4,1,3]', '2020-08-27 23:00:02', '2020-08-27 23:00:02'),
(8, '[1,4,3,2]', '[11.9,11.9,11.9,11.9]', '[4,2,1,3]', '2020-08-27 23:00:02', '2020-08-27 23:00:02'),
(9, '[1,2,4,3]', '[11.9,11.9,11.9,11.9]', '[2,1,3,4]', '2020-08-27 23:00:02', '2020-08-27 23:00:02'),
(10, '[3,2,4,1]', '[11.9,11.9,11.9,11.9]', '[3,4,2,1]', '2020-08-27 23:00:02', '2020-08-27 23:00:02'),
(11, '[37,38]', '[11.9,11.9]', '[1,7]', '2020-08-27 23:01:26', '2020-08-27 23:01:26'),
(12, '[51,25]', '[9.9,11.9]', '[1,1]', '2020-08-28 06:45:58', '2020-08-28 06:45:58'),
(13, '[16]', '[11.9]', '[3]', '2020-08-28 06:46:56', '2020-08-28 06:46:56'),
(14, '[47]', '[11.9]', '[5]', '2020-08-28 06:49:12', '2020-08-28 06:49:12'),
(15, '[46,15,4]', '[11.9,11.9,11.9]', '[1,3,2]', '2020-08-28 06:56:57', '2020-08-28 06:56:57'),
(16, '[37,39,38,41,40,42,43]', '[11.9,11.9,11.9,11.9,11.9,11.9,11.9]', '[1,1,1,1,1,1,1]', '2020-08-28 07:18:59', '2020-08-28 07:18:59'),
(17, '[51,51,38]', '[9.9,9.9,11.9]', '[1,3,2]', '2020-08-28 07:22:24', '2020-08-28 07:22:24'),
(18, '[51]', '[9.9]', '[1]', '2020-08-28 07:23:38', '2020-08-28 07:23:38'),
(19, '[51,51]', '[9.9,9.9]', '[1,3]', '2020-08-28 07:28:00', '2020-08-28 07:28:00'),
(20, '[38,40,42]', '[11.9,11.9,11.9]', '[1,1,1]', '2020-08-28 07:28:56', '2020-08-28 07:28:56'),
(21, '[51,38,39]', '[9.9,11.9,11.9]', '[1,1,3]', '2020-08-29 03:10:47', '2020-08-29 03:10:47'),
(22, '[51,37]', '[9.9,11.9]', '[1,1]', '2020-08-29 03:33:43', '2020-08-29 03:33:43'),
(23, '[51]', '[9.9]', '[3]', '2020-08-29 03:36:29', '2020-08-29 03:36:29'),
(24, '[51]', '[9.9]', '[4]', '2020-08-29 04:11:35', '2020-08-29 04:11:35'),
(25, '[44,44,41,52,53]', '[11.9,11.9,11.9,8,48]', '[1,1,1,2,1]', '2020-08-30 03:06:52', '2020-08-30 03:06:52'),
(26, '[40,26,53]', '[11.9,11.9,48]', '[1,3,2]', '2020-08-31 01:35:00', '2020-08-31 01:35:00'),
(27, '[53]', '[48]', '[10]', '2020-08-31 01:35:53', '2020-08-31 01:35:53'),
(28, '[53]', '[48]', '[1]', '2020-09-01 06:42:32', '2020-09-01 06:42:32');

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2020-08-27 22:59:59', '2020-08-27 22:59:59'),
(2, 'user', '2020-08-27 22:59:59', '2020-08-27 22:59:59');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(3, 2, 3, NULL, NULL),
(7, 2, 5, NULL, NULL),
(8, 2, 6, NULL, NULL),
(9, 2, 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teas`
--

CREATE TABLE `teas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `image` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT 'bite.gif',
  `quantity` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teas`
--

INSERT INTO `teas` (`id`, `name`, `description`, `price`, `image`, `quantity`, `rate`, `created_at`, `updated_at`) VALUES
(1, 'Animi autem velit.', 'Qui culpa consequuntur sed sint. Vel voluptates perspiciatis ea voluptatem facere soluta.', 11.9, '1576745572e39d382c78c1ec19f80bbce7cb37b79e.png', 7, 4, '2020-08-27 23:00:04', '2020-08-27 23:00:04'),
(2, 'Tempore enim magnam.', 'Dolor quod autem dolores veniam ea velit. Debitis nostrum iure eum.', 11.9, 'bite.gif', 8, 1, '2020-08-27 23:00:04', '2020-08-27 23:00:04'),
(3, 'Voluptates ex dolor.', 'In laudantium aut in. Praesentium quos excepturi laudantium quo.', 11.9, 'bite.gif', 3, 5, '2020-08-27 23:00:04', '2020-08-27 23:00:04'),
(4, 'Voluptatem.', 'Voluptates itaque tempore sapiente ut. Eos et at voluptas vero. Similique consequatur et officiis.', 11.9, 'bite.gif', 6, 4, '2020-08-27 23:00:04', '2020-08-27 23:00:04'),
(5, 'Itaque provident ut.', 'Aut praesentium sint natus adipisci dolorem et voluptatem. Ut molestias et ut sunt qui.', 11.9, 'bite.gif', 2, 4, '2020-08-27 23:00:04', '2020-08-27 23:00:04'),
(6, 'Maxime vel.', 'Ipsum quidem expedita dolor voluptatibus aut aperiam. Sunt enim eaque earum adipisci itaque.', 11.9, 'bite.gif', 4, 2, '2020-08-27 23:00:04', '2020-08-27 23:00:04'),
(7, 'Est odio illum.', 'Laborum nostrum dolorem perferendis. Modi totam aliquam et doloribus ut quia.', 11.9, 'bite.gif', 2, 4, '2020-08-27 23:00:04', '2020-08-27 23:00:04'),
(8, 'Et veritatis.', 'Dolorum minus dolor sit. Debitis deleniti rem id excepturi modi. A et ipsum id aliquid deserunt.', 11.9, 'bite.gif', 0, 5, '2020-08-27 23:00:04', '2020-08-27 23:00:04'),
(9, 'Asperiores et.', 'Et voluptatem perferendis fugiat aut ea aut error et. Autem aut et porro culpa qui.', 11.9, 'bite.gif', 4, 2, '2020-08-27 23:00:04', '2020-08-27 23:00:04'),
(10, 'Et exercitationem.', 'Eos impedit voluptas rerum omnis ad. Et sint ipsum voluptas voluptate.', 11.9, 'bite.gif', 9, 4, '2020-08-27 23:00:04', '2020-08-27 23:00:04'),
(11, 'Qui inventore.', 'Ex dignissimos qui qui quibusdam id cum. Iste in dolor est aut. Culpa rerum ut eum quas ipsam ut.', 11.9, 'bite.gif', 3, 4, '2020-08-27 23:00:04', '2020-08-27 23:00:04'),
(12, 'Sint deleniti ut.', 'Voluptate amet et enim. Neque omnis ut et quos aperiam blanditiis est.', 11.9, 'bite.gif', 8, 4, '2020-08-27 23:00:04', '2020-08-27 23:00:04'),
(13, 'Ex ipsa excepturi.', 'Perferendis cumque perferendis iusto cupiditate fugiat. Ut nesciunt illo ad accusamus.', 11.9, 'bite.gif', 7, 4, '2020-08-27 23:00:04', '2020-08-27 23:00:04'),
(14, 'Quaerat culpa.', 'Hic sed reiciendis et eveniet soluta distinctio. Sint nihil soluta minus unde necessitatibus dolor.', 11.9, 'bite.gif', 3, 1, '2020-08-27 23:00:04', '2020-08-27 23:00:04'),
(15, 'Blanditiis ab esse.', 'Atque earum ut sed quia. Reiciendis exercitationem quam ut.', 11.9, 'bite.gif', 9, 4, '2020-08-27 23:00:05', '2020-08-27 23:00:05'),
(16, 'Aut libero aut sint.', 'Consequatur veniam et omnis qui et suscipit. Ut quia nisi aut. Quae hic expedita eos eius.', 11.9, 'bite.gif', 6, 2, '2020-08-27 23:00:05', '2020-08-27 23:00:05'),
(17, 'Esse et voluptatem.', 'Magni dicta eius voluptatem id. Porro et fugiat at eos aut. Placeat quae nihil aut quia earum.', 11.9, 'bite.gif', 7, 4, '2020-08-27 23:00:05', '2020-08-27 23:00:05'),
(18, 'Dolor eius tempora.', 'Vel quis ut voluptas. Sunt deleniti possimus et culpa est.', 11.9, 'bite.gif', 2, 4, '2020-08-27 23:00:05', '2020-08-27 23:00:05'),
(19, 'Deserunt rerum.', 'Aperiam ut amet id error in sed sint velit. Unde maiores perspiciatis culpa qui blanditiis facere.', 11.9, 'bite.gif', 4, 4, '2020-08-27 23:00:05', '2020-08-27 23:00:05'),
(20, 'Cupiditate voluptas.', 'Sint qui sint sequi veritatis. Inventore nam id debitis est aut nam corporis autem.', 11.9, 'bite.gif', 0, 4, '2020-08-27 23:00:05', '2020-08-27 23:00:05'),
(21, 'Enim minima quaerat.', 'Similique porro quia occaecati dolores error. Rerum velit et dolorem fugit non nemo.', 11.9, 'bite.gif', 3, 4, '2020-08-27 23:00:05', '2020-08-27 23:00:05'),
(22, 'Aut nihil et vel.', 'Fugit et facere voluptas aut. Id in cumque iste modi dolorem.', 11.9, 'bite.gif', 4, 4, '2020-08-27 23:00:05', '2020-08-27 23:00:05'),
(23, 'Earum corrupti.', 'Quisquam odit molestias eligendi autem. Modi perspiciatis laboriosam deserunt quibusdam vitae.', 11.9, 'bite.gif', 1, 3, '2020-08-27 23:00:05', '2020-08-27 23:00:05'),
(24, 'Mollitia tempore.', 'Nam quisquam vel illum aperiam qui. Suscipit distinctio eos inventore ut. Minus fugiat enim qui.', 11.9, 'bite.gif', 2, 4, '2020-08-27 23:00:05', '2020-08-27 23:00:05'),
(25, 'Vitae dolorem ut.', 'Harum atque sint consequatur eaque tempore assumenda debitis. Ut dolorum qui et quo cum.', 11.9, 'bite.gif', 6, 4, '2020-08-27 23:00:05', '2020-08-27 23:00:05'),
(26, 'Quaerat laborum.', 'Est saepe explicabo velit enim sed. Repellendus deserunt molestiae animi error omnis.', 11.9, 'bite.gif', 8, 4, '2020-08-27 23:00:05', '2020-08-27 23:00:05'),
(27, 'Nulla porro quidem.', 'Aut eligendi qui veritatis non cum odit tenetur. Ratione et qui omnis ut quidem eos.', 11.9, 'bite.gif', 4, 4, '2020-08-27 23:00:05', '2020-08-27 23:00:05'),
(28, 'Mollitia est.', 'Aut quo consequuntur eum culpa explicabo et. Est odio ad facere.', 11.9, 'bite.gif', 6, 2, '2020-08-27 23:00:05', '2020-08-27 23:00:05'),
(29, 'Quos repellendus in.', 'Delectus optio voluptatem a. Nesciunt qui aperiam dolore velit.', 11.9, 'bite.gif', 8, 4, '2020-08-27 23:00:05', '2020-08-27 23:00:05'),
(30, 'Accusamus explicabo.', 'Sint et perferendis quidem itaque rerum est. Eos ut deleniti iste et repellat ut.', 11.9, 'bite.gif', 3, 5, '2020-08-27 23:00:05', '2020-08-27 23:00:05'),
(31, 'Fugiat et amet.', 'Iusto eum et sunt dignissimos veritatis. Dolores suscipit autem ea.', 11.9, 'bite.gif', 4, 1, '2020-08-27 23:00:05', '2020-08-27 23:00:05'),
(32, 'Ut similique.', 'Libero modi quam sapiente. Sit aliquam repellat omnis.', 11.9, 'bite.gif', 6, 4, '2020-08-27 23:00:05', '2020-08-27 23:00:05'),
(33, 'Reprehenderit sint.', 'Eum aut iste quod odio. Aut qui qui voluptas possimus ex quaerat est. Debitis non a aut aut quis.', 11.9, 'bite.gif', 1, 4, '2020-08-27 23:00:05', '2020-08-27 23:00:05'),
(34, 'Incidunt nesciunt.', 'Voluptas harum excepturi at sit assumenda provident. Enim qui ducimus qui occaecati beatae.', 11.9, 'bite.gif', 4, 4, '2020-08-27 23:00:05', '2020-08-27 23:00:05'),
(35, 'Vel accusamus.', 'Consequatur vel delectus maxime voluptatum in libero. Vel ullam quis mollitia error.', 11.9, 'bite.gif', 2, 4, '2020-08-27 23:00:05', '2020-08-27 23:00:05'),
(36, 'Ipsum nemo ab est.', 'Et ut et est. Est dolor architecto facere similique.', 11.9, 'bite.gif', 8, 4, '2020-08-27 23:00:05', '2020-08-27 23:00:05'),
(37, 'Quia eveniet earum.', 'Sed consequatur consequatur deserunt. Est omnis expedita possimus sed nulla consequatur sed.', 11.9, 'bite.gif', 1, 4, '2020-08-27 23:00:06', '2020-08-27 23:00:06'),
(38, 'Minima rerum velit.', 'Beatae ipsa et doloribus. Impedit animi adipisci cum ab. Sunt laborum minima rerum ut id quam.', 11.9, 'bite.gif', 7, 4, '2020-08-27 23:00:06', '2020-08-27 23:00:06'),
(39, 'Quia unde.', 'Ullam earum beatae et. Beatae omnis quam facilis.', 11.9, 'bite.gif', 5, 4, '2020-08-27 23:00:06', '2020-08-27 23:00:06'),
(40, 'Est quasi aperiam.', 'Ipsa iure eos a error quisquam in. Vero dolorem nostrum enim occaecati. Cum ad officia qui.', 11.9, 'bite.gif', 5, 5, '2020-08-27 23:00:06', '2020-08-27 23:00:06'),
(41, 'Sit iure ex unde.', 'Autem adipisci et nisi aut est ab est fugit. Repudiandae quia libero labore excepturi.', 11.9, 'bite.gif', 0, 4, '2020-08-27 23:00:06', '2020-08-27 23:00:06'),
(42, 'Harum suscipit.', 'Aut dolor quam dolores qui ut cupiditate tempora beatae. Molestiae non deleniti nisi quia nemo.', 11.9, 'bite.gif', 6, 4, '2020-08-27 23:00:06', '2020-08-27 23:00:06'),
(43, 'Repellat eaque.', 'Harum natus ut est repellendus nihil atque dolores et. Debitis natus est quis et.', 11.9, 'bite.gif', 4, 4, '2020-08-27 23:00:06', '2020-08-27 23:00:06'),
(44, 'Quae debitis qui et.', 'Voluptate ad est aperiam quas repellat sed. Sit magnam corporis omnis architecto sed.', 11.9, 'bite.gif', 2, 4, '2020-08-27 23:00:06', '2020-08-27 23:00:06'),
(45, 'Neque non.', 'Dolorem saepe voluptate neque quas. Et nihil iure iusto enim. Sit sed aut suscipit et.', 11.9, 'bite.gif', 0, 4, '2020-08-27 23:00:06', '2020-08-27 23:00:06'),
(46, 'Veniam libero ad.', 'Quam quisquam reiciendis voluptates repellendus enim ut. Aut minus exercitationem eum nostrum.', 11.9, 'bite.gif', 1, 4, '2020-08-27 23:00:06', '2020-08-27 23:00:06'),
(47, 'Provident omnis et.', 'Nulla magni quis neque aspernatur. Exercitationem voluptatem rerum sed enim.', 11.9, 'bite.gif', 5, 4, '2020-08-27 23:00:06', '2020-08-27 23:00:06'),
(48, 'Voluptatem culpa.', 'Ipsa ut assumenda rerum. Reprehenderit corrupti cumque est in molestiae.', 11.9, 'bite.gif', 0, 4, '2020-08-27 23:00:06', '2020-08-27 23:00:06'),
(49, 'Delectus.', 'Totam enim id esse quibusdam. Animi explicabo itaque atque. Et repudiandae maiores dolor.', 11.9, 'bite.gif', 0, 4, '2020-08-27 23:00:06', '2020-08-27 23:00:06'),
(50, 'Occaecati ipsam.', 'Enim aut ut aliquid optio magnam sint. Non eum aut vel aliquid. Omnis soluta dolorem non vero.', 11.9, 'bite.gif', 4, 5, '2020-08-27 23:00:06', '2020-08-27 23:00:06'),
(51, 'Brown Sugar Milk Tea', 'not Bang bang', 9.9, 'bite.gif', 20, 5, '2020-08-27 23:07:11', '2020-08-27 23:07:23'),
(52, 'TAN SER XUEN', 'Tasty and delicious', 8, 'bite.gif', 5, 3, '2020-08-30 00:45:19', '2020-08-30 00:45:19'),
(53, 'Classic Roater ICe', 'icy and jiucy', 48, '1565944827374cf79fff6fc7fe4708a363ba79904f.png', 25, 2, '2020-08-30 03:05:18', '2020-08-30 03:05:18'),
(54, 'Tan Ser Xuen', 'yummmmmy', 5.9, 'bite.gif', 13, 4, '2020-08-31 06:57:47', '2020-08-31 07:01:03'),
(55, 'jimmy', 'dtrvybui', 5, 'bite.gif', 5, 5, '2020-08-31 07:36:22', '2020-08-31 07:36:22'),
(57, 'TAN SER XUEN', 'tgrfv', 1, 'bite.gif', 1, 1, '2020-09-01 05:31:33', '2020-09-01 05:31:33'),
(58, 'Jasmine SunWhite', 'white nd juicy', 54, NULL, 7, 4, '2020-09-06 23:17:10', '2020-09-09 07:25:25');

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
(1, 'Admin Userrrrr', 'admin@admin.com', NULL, '$2y$10$XjGq/vyB9iw34R.0uJgCauY0svA9Cy6sQkeqBiZRtxxv5V2wp1.qi', NULL, '2020-08-27 23:00:00', '2020-08-29 04:26:33'),
(3, 'User', 'user@user.com', NULL, '$2y$10$iLmjJ6JKlvzPpGr71v3cPOFpuTfhO3T5dTmUIG.ccznVemdEE4jOm', NULL, '2020-08-27 23:46:20', '2020-08-27 23:46:20'),
(5, 'Joan', 'txuen006@gmail.com', NULL, '$2y$10$4ffDPPRp/nbUoCfxA85CdOmvI/gJEubThv4qnnJAe7d.Atl9R.TAW', NULL, '2020-08-28 06:50:46', '2020-08-28 06:50:46'),
(6, 'Mr Nobody', 'mrnobody@test.com', NULL, '$2y$10$sjQuU15aodbizMIzunIo5eY4aPyP7CDocTwSfI19E5zubUxwCkYVu', NULL, '2020-08-28 07:16:52', '2020-08-28 07:16:52'),
(7, 'MariaHee', 'maria@maria.com', NULL, '$2y$10$OHMXje4EZKC2Ax75d716pewNI6UUyjqKEgo4nUhnIO6uaqdBeJWRS', NULL, '2020-08-28 07:18:51', '2020-08-28 07:18:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- Indexes for table `teas`
--
ALTER TABLE `teas`
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
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `teas`
--
ALTER TABLE `teas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
