-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2019 at 02:44 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogging`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_comments` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_comments`, `post_id`, `user_id`, `user_name`, `created_at`, `updated_at`) VALUES
(4, 'OK GOOD..', 2, 1, 'Rony', '2019-12-11 09:38:44', '2019-12-11 09:38:44'),
(5, 'GoodJob KIm..:3', 2, 3, 'Saif', '2019-12-11 09:50:15', '2019-12-11 09:50:15'),
(6, 'kek :\'D', 2, 4, 'nafiz', '2019-12-11 09:58:15', '2019-12-11 09:58:15'),
(25, 'boka', 2, 5, 'shubhashis', '2019-12-16 10:25:27', '2019-12-16 10:25:27'),
(26, 'OK GJ BCB....!!!', 1, 1, 'Rony', '2019-12-16 13:01:16', '2019-12-16 13:01:16'),
(27, 'ok good', 1, 2, 'Rahy', '2019-12-16 14:17:57', '2019-12-16 14:17:57'),
(29, 'kek XD', 1, 4, 'nafiz', '2019-12-16 16:01:31', '2019-12-16 16:01:31'),
(30, 'lel', 1, 1, 'Rony', '2019-12-19 16:14:57', '2019-12-19 16:14:57'),
(32, 'ok', 1, 1, 'Rony', '2019-12-19 18:19:14', '2019-12-19 18:19:14');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `post_id`, `created_at`, `updated_at`) VALUES
(2, 1, 2, '2019-12-15 10:49:38', '2019-12-15 10:49:38'),
(5, 3, 2, '2019-12-15 15:22:56', '2019-12-15 15:22:56'),
(27, 5, 2, '2019-12-16 10:25:03', '2019-12-16 10:25:03'),
(57, 2, 2, '2019-12-16 15:43:36', '2019-12-16 15:43:36'),
(59, 2, 1, '2019-12-16 15:44:12', '2019-12-16 15:44:12'),
(61, 4, 1, '2019-12-16 16:01:37', '2019-12-16 16:01:37'),
(66, 1, 1, '2019-12-19 18:19:05', '2019-12-19 18:19:05');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_01_133533_create_post_table', 1),
(5, '2019_12_11_124211_create_comments_table', 1),
(6, '2019_12_15_132502_create_likes_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('shubhashis.paul86@gmail.com', '$2y$10$ngmVkMlwIfahahNRFkyzh.7mjeBLSdUtcjFowqhP6cXflB1DDLDly', '2019-12-16 10:39:38');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `publish_at` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `content`, `publish_at`, `category`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'ঘরোয়া ক্রিকেটে মাঠে নিষিদ্ধ হচ্ছে মোবাইল', 'তৃতীয় বিভাগ ক্রিকেট লিগে কামরাঙ্গীরচরের বিপক্ষে ম্যাচে পক্ষপাতমূলক আম্পায়ারিংয়ের প্রতিবাদ করেছিলেন ঢাকা রয়েল ক্রিকেটার্সের কোচ, ক্রিকেটার ও ম্যানেজার। কিন্তু প্রতিবাদ করে উল্টো বিপদে পড়েছেন কোচ ও ক্রিকেটাররা। রয়েলের কোচ রনি হোসেন, অধিনায়ক অমি ও দলের আরেক ক্রিকেটার সালমানকে দুই বছর সব ধরনের ক্রিকেট থেকে নিষিদ্ধ করেছে বিসিবির ডিসিপ্লিনারি কমিটি। তবে যে দুজন আম্পায়ারকে নিয়ে বিতর্ক, সেই জহিরুল ইসলাম ও সাইদুর রহমানের বিরুদ্ধে কোনো ব্যবস্থা নেওয়া হয়নি। \r\n\r\n\r\nপ্রথম বিভাগ ও তৃতীয় বিভাগে একের পর এক পাতানো ম্যাচ ও পক্ষপাতমূলক আম্পায়ারিংয়ের অভিযোগ ওঠার পরও এসব থামার কোনো নামগন্ধ নেই। ২ ডিসেম্বর তৃতীয় বিভাগ ক্রিকেট লিগে গুলশান ক্লাব ও কাঁঠালবাগান ক্রিসেন্ট ক্লাবের মধ্যকার সুপার লিগের ম্যাচেও আম্পায়ারদের বিরুদ্ধে স্বেচ্ছাচারিতার অভিযোগ উঠেছে।\r\n১৭ নভেম্বর কামরাঙ্গীরচর-ঢাকা রয়েল ম্যাচে আম্পায়ারিং নিয়ে অভিযোগের পর শুধু রয়েল কোচ ও ক্রিকেটাররাই শাস্তি পাননি, দলের ম্যানেজার সাব্বির আহমেদের বিরুদ্ধে থানায় জিডিও করা হয়েছে। তিনি এখন ভারতে অবস্থান করছেন। সিসিডিএমের সদস্যসচিব আলী হোসেন বলছেন, দেশে ফিরলে সাব্বির আহমেদেরও শুনানি হবে।\r\nপরশু আবার সিসিডিএম ও বিসিবির পক্ষ থেকে সব ক্লাবকে চিঠি পাঠানো হয়েছে। চিঠিতে ম্যাচ চলাকালে দলের ম্যানেজার ছাড়া বাকি সবার মুঠোফোন ব্যবহার নিষিদ্ধ করা হয়েছে। ম্যাচ চলাকালে খেলোয়াড়-কোচরা আইসিসির নিয়মানুযায়ীই মুঠোফোন ব্যবহার করতে পারেন না। কিন্তু সিসিডিএম ও বিসিবির এই চিঠিতে মাঠে শুধু খেলোয়াড়-কোচ নয়, ম্যানেজার ছাড়া সব কর্মকর্তা এমনকি টিমবয়দের মুঠোফোন ব্যবহারও নিষিদ্ধ করা হয়েছে।\r\nইতিমধ্যে তৃতীয় বিভাগ ক্রিকেট লিগ শেষ। শেষের পথে প্রথম বিভাগ ক্রিকেট লিগও। হুট করেই টুর্নামেন্টের এই পর্যায়ে এসে ক্রিকেট কর্তাদের এমন সিদ্ধান্ত নানা প্রশ্নের জন্ম দিচ্ছে।\r\nকামরাঙ্গীরচর ও ঢাকা রয়েল ক্রিকেটার্সের ম্যাচে বাজে আম্পায়ারিংয়ের বিরুদ্ধে প্রতিবাদে মুঠোফোনে করা একটি ভিডিও ছড়িয়ে পড়ে সামাজিক যোগাযোগমাধ্যমে। এক সূত্রে জানা গেছে, বিতর্কিত আম্পায়ারিংয়ের ঘটনা ভিডিও করায় শুনানিতে ঢাকা রয়েল ক্রিকেটার্সের খেলোয়াড়দের বিরুদ্ধে দেশের ক্রিকেটের ভাবমূর্তি নষ্ট করার অভিযোগ তোলা হয়েছে। ভুক্তভোগী ক্লাব কর্মকর্তাদের অভিযোগ, বিসিবি ও সিসিডিএম নিজেদের অপকর্ম ধামাচাপা দিতেই মুঠোফোন নিষিদ্ধ করার সিদ্ধান্ত নিয়েছে।\r\nসিসিডিএমের সদস্যসচিব আলী হোসেন অবশ্য দাবি করলেন, ক্রিকেটাররা যেন ম্যাচ ফিক্সিংয়ে না জড়ান, সে জন্যই মুঠোফোন নিষিদ্ধ করা হয়েছে। আম্পায়ারিং-বিতর্ক ধামাচাপা দেওয়ার চেষ্টার কথা অস্বীকার করেছেন তিনি। তাঁর ব্যাখ্যা, ‘সতর্কতার জন্যই এটা করছি। আসলে আগেই করা উচিত ছিল।’\r\nবিসিবির প্রধান নির্বাহী নিজামউদ্দিন চৌধুরীর কথায় অবশ্য একটু ভিন্ন সুর। সময়ের প্রয়োজনের কারণেই নাকি মুঠোফোন নিষিদ্ধ করার হয়েছে। তবে কী কারণে টুর্নামেন্টের শেষ পর্যায়ে এসে মুঠোফোন নিষিদ্ধ করা, সেই ব্যাখ্যা পাওয়া গেল না নিজামউদ্দিনের কথায়, ‘অ্যান্টিকরাপশন নিয়মের কতটুকু আমরা কোন ম্যাচে কাজে লাগাব, সেটা সংশ্লিষ্ট বোর্ড বা বিভাগের ওপর নির্ভর করে। আমরা আগে শিক্ষা দেওয়ার মধ্যেই রাখতাম। এখন দেখা যাচ্ছে কিছু কিছু বাস্তবায়ন করতে হচ্ছে। সে জন্যই আমরা এই পথে এগোচ্ছি।’', '2019-11-14', 'Sports', 'cricket-ball-bat-over-white-26767065_1575841256_1575842769_1576522821.jpg', '2019-12-16 13:00:22', '2019-12-16 13:00:22'),
(2, 2, 'Trump warns Kim has \'everything\' to lose through hostility', 'President Donald Trump warned on Sunday that North Korea\'s Kim Jong-un had \"everything\" to lose through hostility towards the United States, after Pyongyang said it had carried out a major new weapons test.\r\n\r\n\"Kim Jong Un is too smart and has far too much to lose, everything actually, if he acts in a hostile way,\" Mr Trump tweeted in response to the unspecified test at the Sohae space launch center.\r\n\r\nThe announcement of Saturday\'s test came just hours after Mr Trump said he would be \"surprised\" by any hostile action from the North, emphasising his \"very good relationship\" with Kim.\r\n\r\nMr Trump and Kim engaged in months of mutual insults and threats of devastation in 2017, sending tensions soaring before a diplomatic rapprochement the following year.\r\n\r\nThe pair have met three times since June 2018 but with little progress towards denuclearisation. Pyongyang has set Washington a December 31 deadline to make new concessions to kickstart stalled talks.\r\n\r\n\"North Korea, under the leadership of Kim Jong-un, has tremendous economic potential, but it must denuclearise as promised,\" Mr Trump tweeted. \"Nato, China, Russia, Japan, and the entire world is unified on this issue!\"\r\n\r\nWriting that Kim had \"signed a strong Denuclearisation Agreement\" at their June 2018 summit in Singapore,\" Mr Trump warned: \"He does not want to void his special relationship with the President of the United States or interfere with the U.S. Presidential Election in November.\"\r\n\r\nA spokesman for North Korea\'s Academy of the National Defense Science said Saturday\'s \"very important test\" would have an \"important effect\" on changing the \"strategic position\" of North Korea, in a statement carried by the official KCNA news agency.\r\n\r\nThe statement did not provide further details on the test.\r\n\r\n\r\nA senior US administration official earlier said Washington had seen reports of a test and was \"coordinating closely with allies and partners.\"\r\n\r\nMr Trump indicated that military action was still possible when he was asked about Pyongyang on the sidelines of a Nato summit in Britain this week.\r\n\r\nNorth Korea fired back that if the United States used military force it would take \"prompt corresponding actions at any level.\"\r\n\r\nUN diplomats fear that North Korea will resume long-range nuclear or ballistic tests if no progress is made soon in talks with the United States.\r\n\r\nSohae, on North Korea\'s northwest coast, is ostensibly a facility designed for putting satellites into orbit.\r\n\r\nBut Pyongyang has carried out several rocket launches there that were condemned by the US and others as disguised long-range ballistic missile tests.\r\n\r\nFollowing the Singapore summit, Mr Trump said Kim had agreed to destroy \"a major missile engine testing site\" without naming the facility.\r\n\r\nKim then agreed to shutter the Sohae site during a summit last year with South Korean President Moon Jae-in in Pyongyang as part of trust-building measures.', '2019-12-11', 'International', 'TELEMMGLPICT000218216576_trans_NvBQzQNjv4Bq3480UNUU8UfSxDSaY1n7MGtT0gK_6EfZT336f62EI5U_1575843485_1576069734_1576504878_1576504952.jpg', '2019-12-11 07:08:55', '2019-12-16 08:02:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rony', 'fhasanrony@gmail.com', NULL, '$2y$10$8UORp7yX4a/6lDB4PZFP9.lZQWctBD/6As5.ekuqksM4GOVPEPHdm', NULL, '2019-12-11 06:50:26', '2019-12-11 06:50:26'),
(2, 'Rahy', 'mohammad.rahul789@gmail.com', NULL, '$2y$10$sX2m.fQ4rhBPNp7Rd1AyG.PugxGtUBWWMxZsjPL0WdyF2VV5nnfgC', NULL, '2019-12-11 07:00:17', '2019-12-11 07:00:17'),
(3, 'Saif', 'saif@gmail.com', NULL, '$2y$10$HyQgtPhJPq3oVvq5Su382uEADjkfA4G5exPsCWo2dJ3qkNtnsuAa6', NULL, '2019-12-11 07:12:36', '2019-12-11 07:12:36'),
(4, 'nafiz', 'nafiz@gmail.com', NULL, '$2y$10$mTtaPGQQjLdhXJ./rT0Kc.tbWFVd.0dj7wFyExasID2NwcllpXTl2', NULL, '2019-12-11 09:57:34', '2019-12-11 09:57:34'),
(5, 'shubhashis', 'shubhashis.paul86@gmail.com', NULL, '$2y$10$eXQarTWSLT0eKR7R/vipYeUm824xrGZNpv7zmBczgOeiyOwr4NqAK', NULL, '2019-12-16 10:20:34', '2019-12-16 10:20:34'),
(6, 'tahsin', 'tahsin@gmail.com', NULL, '$2y$10$YFj.mXTub42t.acOqRgQCuF./g9eslrHe0N2QxxTuDpLaqxAh.gC6', NULL, '2019-12-19 16:29:39', '2019-12-19 16:29:39'),
(7, 'sir', 'sir@gmail.com', NULL, '$2y$10$glDJrnVioCznS1j07SzdwerImwaK9lj19Wf/mUx3A2OqLIqYaEYAa', NULL, '2019-12-19 18:21:42', '2019-12-19 18:21:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
