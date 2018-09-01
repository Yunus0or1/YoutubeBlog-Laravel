-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2018 at 07:21 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project250`
--

-- --------------------------------------------------------

--
-- Table structure for table `channel`
--

CREATE TABLE `channel` (
  `topic` varchar(200) NOT NULL,
  `channel_1_name` varchar(200) NOT NULL,
  `channel_1_link` varchar(200) NOT NULL,
  `channel_2_name` varchar(200) NOT NULL,
  `channel_2_link` varchar(200) NOT NULL,
  `channel_3_name` varchar(200) NOT NULL,
  `channel_3_link` varchar(200) NOT NULL,
  `channel_4_name` varchar(200) NOT NULL,
  `channel_4_link` varchar(200) NOT NULL,
  `heading` varchar(200) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `channel`
--

INSERT INTO `channel` (`topic`, `channel_1_name`, `channel_1_link`, `channel_2_name`, `channel_2_link`, `channel_3_name`, `channel_3_link`, `channel_4_name`, `channel_4_link`, `heading`) VALUES
('modernphysics', 'Wired', 'https://www.youtube.com/channel/UCftwRNsjfRo08xYE31tkiyw', 'Battlefield', 'https://www.youtube.com/channel/UCvNBXWGykQrWb7kPAn5eLUQ', 'Business Insider', 'https://www.youtube.com/channel/UCcyq283he07B7_KUX07mmtA', 'Xbox', 'https://www.youtube.com/channel/UCjBp_7RuDBUYbd1LegWEJ8g', ' আধুনিক বিজ্ঞান ছাড়া কি আর চলে ! ');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(10) NOT NULL,
  `title` varchar(200) NOT NULL,
  `details` varchar(2000) NOT NULL,
  `videokey` varchar(200) NOT NULL,
  `writer` varchar(200) NOT NULL,
  `job` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `topic` varchar(200) NOT NULL,
  `filepath` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `title`, `details`, `videokey`, `writer`, `job`, `email`, `topic`, `filepath`) VALUES
(26, 'কিভাবে টেসলা গাড়ির অটোপাইলট কাজ করে।', 'মারসিডিস বেঞ্জ, বি,এম,ডাব্লিউ প্রমুখ স্বনামধন্য গাড়ি কোম্পানিদের জন্য যেন এক আতঙ্কের নাম টেসলা । যেটিতে ব্যবহার করা হয় নি কম্বাস্টন ইঞ্জিন বরং ব্যবহৃত হয়েছে ইলেকট্রিক মোটর এবং ব্যাটারী । আর রয়েছে \r\n		অত্যাধুনিক কৃত্তিম বুদ্ধিমত্তার ব্যবস্থা । যার দরুন টেসলা গাড়ি ড্রাইভারের সহযোগিতা ছাড়াই হাই রোড, অলি-গলি সব জায়গাতে চলাচলের উপযুক্ত । আর অত্যাধুনিক কৃত্তিম বুদ্ধিমত্তার জন্য ব্যবহৃত হয়েছে  অত্যাধুনিক রাডার\r\n		সিস্টেম ,  ইমেজ প্রসেসিং ক্ষমতা সম্পন্ন ক্যামেরা , আল্ট্রাসনিক সেন্সর এবং  লাইভ স্যাটালাইট ইমেজ । \r\n		\r\n		টেসলা গাড়িকে যেন তুলনা করা যায় একজন মেধাবী তুখোড় ছাত্রের সাথে যে প্রতি মুহূর্তে কিছু না কিছু শিখছেই । যেমন ঃ প্রথমদিকের টেসলা গাড়িতে অটোপাইলট দিয়ে বাঁক নেয়া নিষিদ্ধ ছিল কোম্পানির পক্ষে থেকে। কিন্তু\r\n		একজন চালক বার বার অটোপাইলট এর মাধ্যমে বাঁক নেওয়ার ফলে বাঁক নেওয়ার পদ্ধতি টেসলা গাড়ি শিখে নিয়েছিল। এমনিভাবে প্রতি মুহূর্তেই টেসলা গাড়ির ডাটাবেজে যুক্ত হচ্ছে নিত্য নতুন গাড়ি চালানোর পদ্ধতি ।', 'Kt-rhVU8evI', 'Yunus', 'student', 'ahmedyunuspilot@gmail.com', 'modernphysics', '1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `updated_at` varchar(500) NOT NULL,
  `created_at` varchar(500) NOT NULL,
  `job` varchar(200) DEFAULT NULL,
  `remember_token` varchar(200) DEFAULT NULL,
  `avatar` varchar(200) DEFAULT NULL,
  `active` int(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `updated_at`, `created_at`, `job`, `remember_token`, `avatar`, `active`) VALUES
(1, 'Yunus', 'ahmedyunuspilot@gmail.com', '$2y$10$z8Rb9RSpfcGlX5yp4Im5hea2iLYFkZTxIU7VMxow5rh5i4AHiW/Yq', '', '', 'Student', 'AQTI4r3sAshUavgCifmYt1ZArM0kuvkjfbmKPnC8CTSg3clfeWGtkKafH3dJ', 'FilesForRegistrationsPage/images/IMG_20170906_105052.jpg', 0),
(4, 'Yunus', 'graphixen@gmail.com', '$2y$10$0o3SF.AHgxh839pOBQmlreEFunp9UAf9j055R80g8xDoHOqhLT8/C', '2018-03-08 08:55:55', '2018-03-08 08:55:55', NULL, 'nNZVY7Np18t9GWtkgK6iKiZaIKFHa4HWZfoFjNTUE1Bfv4pSBeni8YzPQ6wn', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `writers`
--

CREATE TABLE `writers` (
  `id` int(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `topic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `writers`
--

INSERT INTO `writers` (`id`, `email`, `title`, `topic`) VALUES
(32, 'ahmedyunuspilot@gmail.com', 'কিভাবে টেসলা গাড়ির অটোপাইলট কাজ করে।', 'modernphysics');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `channel`
--
ALTER TABLE `channel`
  ADD PRIMARY KEY (`topic`);

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
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `writers`
--
ALTER TABLE `writers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `writers`
--
ALTER TABLE `writers`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
