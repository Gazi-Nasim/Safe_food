-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2023 at 02:51 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `safe_food`
--

-- --------------------------------------------------------

--
-- Table structure for table `advantages`
--

CREATE TABLE `advantages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `details` text NOT NULL,
  `heading` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `advantages`
--

INSERT INTO `advantages` (`id`, `details`, `heading`, `created_at`, `updated_at`) VALUES
(1, 'ওমেগা- ৩ পলিআনস্যাচুরেটেড ফ্যাটি অ্যাসিডযুক্ত ডায়েটরি সরিষার তেল ডায়েটরি ফিশ অয়েল বা কর্ন অয়েলের তুলনায় প্রানীদের কোলন ক্যান্সার হ্রাস করতে খুব কার্যকর।', 'ক্যান্সার প্রতিরোধ করে', '2023-11-05 07:39:59', '2023-11-05 07:39:59'),
(2, 'সর্দি কাশি কমাতে সরিষার তেল অনেক উপকারী। সরিষার তেল অ্যাজমা সমস্যা দূর করে। সরিষার তেল দিয়ে বানানো পেঁয়াজ ও কাঁচামরিচের ভর্তা কফ তরল করতে সাহায্য করে।', 'সর্দি কাশি কমাতে', '2023-11-05 07:39:59', '2023-11-05 07:39:59'),
(3, 'একাধিক গবেষণায় এটা প্রমাণিত হয়েছে যে, নিয়মিত সরিষার তেল দিয়ে রান্না করা খাবার খেলে হার্টের কোন ক্ষতি হয়না। সেই সাথে হঠাৎ হার্ট অ্যাটাকের আশঙ্কা কমে আসে।', 'হার্টের সমস্যা সমাধান করে', '2023-11-05 07:39:59', '2023-11-05 07:39:59'),
(4, 'বাত ব্যাথা, জয়েন্টের ব্যথা, হাঁটুর ব্যথা বিভিন্ন রকম ব্যথায় জর্জরিত, এর থেকে নিরাময়ের জন্য আপনি ঘানি ভাঙ্গা খাঁটি সরিষার তেলের উপর নির্ভর করতে পারেন।', 'শরীর ব্যথা কমাতে', '2023-11-05 07:39:59', '2023-11-05 07:39:59'),
(5, 'চুলের যত্নে সরিষার তেল ব্যবহার করলে চুল মজবুত থাকে। সরিষার তেলের পুষ্টি উপাদান, ভিটামিন ও মিনারেল চুলের অকালপক্বতা রোধ করে। এছাড়াও সরিষার তেলে অ্যান্টি-অক্সিড্যান্ট, বিটা ক্যারোটিন, ওমেগা থ্রি ফ্যাটি এসিড যা চুল বৃদ্ধি করতে সাহায্য করে।', 'চুলের যত্নে সরিষার তেল', '2023-11-05 07:39:59', '2023-11-05 07:39:59'),
(6, 'সরিষার তেলে উচ্চ মাত্রায় ভিটামিন -ই থাকায় ক্ষতিকর আল্ট্রাভায়োলেট রশ্মি থেকে এবং অনান্য দৃষ্টিতে পদার্থ থেকে ত্বককে সুরক্ষা করে। ভিটামিন -ই বলিরেখা এবং বয়সের ছাপ দূর করতে সাহায্য করে।', 'প্রাকৃতিক সানস্ক্রিন', '2023-11-05 07:39:59', '2023-11-05 07:39:59'),
(7, 'সরিষার তেলে থাকা ওমেগা -৩, ওমেগা-৬, ফ্যাটি এসিড এবং ভিটামিন পুষ্টি-ই শরীরকে প্রয়োজনীয় সরবরাহ করে এবং রোগ প্রতিরোধ ক্ষমতা বাড়ায়। রান্নায় সরিষার তেল ব্যবহারে অনেক মারাত্মক রোগ থেকে মুক্ত ও সুস্থ থাকা যায়। এছাড়াও সরিষার তেলে মনোস্যাচুরেটেড ও পলি অনস্যাচুরেটেড ফ্যাট থাকে, যা হার্টের জন্য উপকারী। গ্যাস বা বদহজম জনিত পেটের ব্যাথা অনুভব হলে অনেক সময় সরিষার তেল মালিশে অনেক আরামবোধ হয় ও সেরে যায়।', 'রোগ প্রতিরোধ ক্ষমতা বৃদ্ধি করে', '2023-11-05 07:39:59', '2023-11-05 07:39:59');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(51, '2023_11_02_064050_create_why_mustrads_table copy', 2),
(61, '2023_11_02_065246_create_prices_table', 3),
(62, '2014_10_12_000000_create_users_table', 4),
(63, '2014_10_12_100000_create_password_reset_tokens_table', 4),
(64, '2019_08_19_000000_create_failed_jobs_table', 4),
(65, '2019_12_14_000001_create_personal_access_tokens_table', 4),
(66, '2023_11_02_063916_create_single_data_table', 4),
(67, '2023_11_02_064004_create_advantages_table', 4),
(68, '2023_11_02_064050_create_why_mustrads_table', 4),
(69, '2023_11_02_064134_create_why_safefoods_table', 4),
(70, '2023_11_02_064347_create_policies_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `policies`
--

CREATE TABLE `policies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `details` text NOT NULL,
  `heading` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `previous` varchar(255) NOT NULL,
  `current` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `single_data`
--

CREATE TABLE `single_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading_one` text NOT NULL,
  `picture_one` varchar(255) NOT NULL,
  `heading_second` text NOT NULL,
  `heading_third` text NOT NULL,
  `picture_second` varchar(255) NOT NULL,
  `heading_fourth` text NOT NULL,
  `picture_third` varchar(255) NOT NULL,
  `heading_fifth` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `single_data`
--

INSERT INTO `single_data` (`id`, `heading_one`, `picture_one`, `heading_second`, `heading_third`, `picture_second`, `heading_fourth`, `picture_third`, `heading_fifth`, `created_at`, `updated_at`) VALUES
(1, 'আপনি কি স্পেলারে ভাঙ্গানো পুড়ে যাওয়া অথবা বিভিন্ন ধরনের কেমিক্যাল মিশ্রিত সরিষার তেল খাচ্ছেন?', '1699190734_482874-1024x1024.jpg', 'সয়াবিন তেলের পরিবর্তে কেন আপনার ঘানি ভাঙ্গা সরিষার তেল খাওয়া উচিৎ?', 'সেফফুড এর সরিষার তেলে কেন আস্থা রাখবেন ?', '1699190770_ad.jpeg', 'সরিষার তেলের কিছু উপকারিতা যা আমরা অনেকেই জানিনা', '1698947201_002.jpg', 'প্রথম চাপের ঘানি ভাঙ্গা খাঁটি সরিষার তেল ৫ লিটারের', NULL, '2023-11-05 07:26:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `why_mustrads`
--

CREATE TABLE `why_mustrads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `why_mustrads`
--

INSERT INTO `why_mustrads` (`id`, `icon`, `details`, `created_at`, `updated_at`) VALUES
(1, '1699191147_aa-removebg-preview.png', 'হজমশক্তি বৃদ্ধি করে', '2023-11-05 07:32:27', '2023-11-05 07:32:27'),
(2, '1699191147_b1-removebg-preview.png', 'ক্যান্সার প্রতিরোধ করে', '2023-11-05 07:32:28', '2023-11-05 07:32:28'),
(3, '1699191148_c1-removebg-preview.png', 'ওজন কমাতে সাহায্য করে', '2023-11-05 07:32:28', '2023-11-05 07:32:28'),
(4, '1699191148_Untitled_design__7_-removebg-preview.png', 'সর্দি কাশি উপশম করে', '2023-11-05 07:32:28', '2023-11-05 07:32:28'),
(5, '1699191148_Untitled_design__8_-removebg-preview.png', 'ত্বকের কালো দাগ ছোপ কমাতে সাহায্য করে', '2023-11-05 07:32:28', '2023-11-05 07:32:28'),
(6, '1699191148_Untitled_design__9_-removebg-preview.png', 'শরীরের ব্যথা কম করে', '2023-11-05 07:32:28', '2023-11-05 07:32:28'),
(7, '1699191148_Untitled_design__10_-removebg-preview.png', 'হৃদপিন্ড ঠিক রাখতে সাহায্য করে', '2023-11-05 07:32:28', '2023-11-05 07:32:28'),
(8, '1699191148_Untitled_design__11_-removebg-preview.png', 'রোগ প্রতিরোধ ক্ষমতা বৃদ্ধি করে', '2023-11-05 07:32:28', '2023-11-05 07:32:28'),
(9, '1699191148_Untitled_design__12_-removebg-preview.png', 'ত্বকের ডার্ক স্পট, ট্যান বা পিগমেন্টশন কমায়।', '2023-11-05 07:32:28', '2023-11-05 07:32:28');

-- --------------------------------------------------------

--
-- Table structure for table `why_safefoods`
--

CREATE TABLE `why_safefoods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `details` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `why_safefoods`
--

INSERT INTO `why_safefoods` (`id`, `details`, `created_at`, `updated_at`) VALUES
(1, 'বাংলাদেশের কৃষকদের উৎপাদিত বিভিন্ন জাতের সরিষার মধ্য হতে মাঘী সরিষার দানা সব থেকে বেশি পুষ্টিগুন সমৃদ্ধ।', '2023-11-05 07:36:44', '2023-11-05 07:36:44'),
(2, 'সেফফুড প্রান্তিক কৃষকদের কাছ থেকে মাঘী সরিষা সংগ্রহ করে স্টক করে, সারাবছর ব্যাপী সরিষার তেল উৎপাদনের জন্য।', '2023-11-05 07:36:44', '2023-11-05 07:36:44'),
(3, 'সেফফুড এর কর্মীরা পরম মমতায় তেল বোতলজাত এবং হোম ডেলিভারির কাজটি করে থাকে।', '2023-11-05 07:36:44', '2023-11-05 07:36:44'),
(4, 'সেফফুডের উৎপাদিত তেল পরম যত্নের সাথে উন্নতমানের ফিল্টার মেশিনে ফিল্টার করা হয়।', '2023-11-05 07:36:44', '2023-11-05 07:36:44'),
(5, 'সেফফুডের সরিষার তেল ১০০% মাঘী সরিষার দানা থেকে সম্পূর্ণ পুষ্টিগুণ অক্ষুণ্ণ রেখে মোটর চালিত তেতুল কাঠের ঘানিতে কোল্ড প্রেস পদ্ধতিতে উৎপাদন করা হয় ।', '2023-11-05 07:36:45', '2023-11-05 07:36:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advantages`
--
ALTER TABLE `advantages`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `policies`
--
ALTER TABLE `policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `single_data`
--
ALTER TABLE `single_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `why_mustrads`
--
ALTER TABLE `why_mustrads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `why_safefoods`
--
ALTER TABLE `why_safefoods`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advantages`
--
ALTER TABLE `advantages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `policies`
--
ALTER TABLE `policies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `single_data`
--
ALTER TABLE `single_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `why_mustrads`
--
ALTER TABLE `why_mustrads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `why_safefoods`
--
ALTER TABLE `why_safefoods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
