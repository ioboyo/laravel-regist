-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2018 at 06:40 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evisa`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `interview_date` date NOT NULL,
  `no_referensi` varchar(10) NOT NULL,
  `date_arrival` date NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`user_id`, `interview_date`, `no_referensi`, `date_arrival`, `created_at`, `updated_at`) VALUES
(37, '2018-01-03', 'UKRaLKEPa', '2018-01-03', '2018-01-23 17:36:30', '2018-01-23 17:36:30'),
(34, '2018-01-03', 'UKReDUlLA', '2018-01-03', '2018-01-22 08:17:27', '2018-01-22 08:17:27'),
(36, '2018-01-27', 'UKRfYOpKp', '2018-01-12', '2018-01-22 15:01:41', '2018-01-22 15:01:41'),
(35, '2018-01-24', 'UKRRPBXbc', '2018-01-31', '2018-01-22 14:47:37', '2018-01-22 14:47:37');

-- --------------------------------------------------------

--
-- Table structure for table `employment`
--

CREATE TABLE `employment` (
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `income` varchar(20) DEFAULT NULL,
  `cost` varchar(20) DEFAULT NULL,
  `total_money` varchar(20) DEFAULT NULL,
  `transport` varchar(20) DEFAULT NULL,
  `accmodation` varchar(20) DEFAULT NULL,
  `living_expenses` varchar(20) DEFAULT NULL,
  `paying` tinyint(1) DEFAULT NULL,
  `spend` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `passports`
--

CREATE TABLE `passports` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `date_issue` date NOT NULL,
  `expiry_date` date NOT NULL,
  `no_passport` varchar(10) NOT NULL,
  `given_name` varchar(60) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `date_of_birth` date NOT NULL,
  `place_of_birth` varchar(20) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passports`
--

INSERT INTO `passports` (`user_id`, `date_issue`, `expiry_date`, `no_passport`, `given_name`, `last_name`, `date_of_birth`, `place_of_birth`, `address`) VALUES
(36, '2018-01-05', '2018-01-26', '12354687', 'test', 'test', '2018-01-11', 'test', 'test'),
(34, '2013-01-07', '2018-01-07', '33145664', 'anindita', 'sri saputro', '1993-02-10', 'jakarta', 'reni jaya'),
(37, '2018-01-22', '2018-01-16', '4456789', 'panji', 'pragiwaksono', '2000-01-03', 'bogor', 'jakarta'),
(35, '2018-01-01', '2018-01-31', '45681245', 'andika', 'erwansyah', '1995-07-11', 'brebes', 'pamulang');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `cl_proofrelationship` int(11) NOT NULL,
  `eployment_evidence` int(11) NOT NULL,
  `financial_evidence` int(11) NOT NULL,
  `educational_evidence` int(11) NOT NULL,
  `sponsor_evidence` int(11) NOT NULL,
  `accomodation` int(11) NOT NULL,
  `tb_certificate` int(11) NOT NULL,
  `additional` int(11) NOT NULL,
  `appendix` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role` varchar(8) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_number` varchar(13) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_customer` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `user_name`, `contact_number`, `id_customer`) VALUES
(1, 'Admin', 'admin@mail.com', '$2y$10$R0gIzd8/SlHpCLu7L6oPFuG5nQGGA9yc4.tGhWipnqwgtf3sXtnvC', 'bZvRLYHY7Gkymn9fAQJLXN9uLwLbINDAI0HlUOS5TYRLdzhYLwBh9gsiRfnH', '2017-12-05 01:41:40', '2017-12-05 01:41:40', 'admin', '123456', 'ADM01'),
(34, NULL, 'anindita@mail.com', '$2y$10$qztpc71D3NNpseOWDxRfJunUsluhwoYyHW//6PhUSpQzUMyjCEKDO', 'GYeXTH7rOQaop8Nntr1TYCLbSyqS7FB0XjV28UljmBaoTeQV1dy8XpLVl3bF', '2018-01-22 08:13:55', '2018-01-22 08:13:55', 'anindita', '0845123456', 'UKhKm'),
(35, NULL, 'andika@mail.com', '$2y$10$33izzxZdBtfisxkuX1vaTuseHexYAInb3jICBtyHphZhGX./b.cvC', 'IHLr0pUAC64RwfnajpbfTlW13g21gdyH9zL5INbTV7TQvIO72SqymHCibxaf', '2018-01-22 14:43:10', '2018-01-22 14:43:10', 'andika', '085697308120', 'UKJ0X'),
(36, NULL, 'test@mail.com', '$2y$10$D5APNovyZjm5jocct3a6ceV3aXLsx.4epODtRgfmPBEfOJnG5CocW', 'QLCQuvdoNXNnsPXXTpzpvzWP44QUkdJaGiRVqwp1U31OTrzX8gLfmDDaNb0G', '2018-01-22 15:00:58', '2018-01-22 15:00:58', 'test', '0212215445', 'UKQig'),
(37, NULL, 'panji@mail.com', '$2y$10$jIJpVco4fQZik.06bBWoDORoi.K.PKZozzCA22YQ5.IfLDC9iRYLS', 'iQnmwgLNk9ufyCBnMVPEO7zyP3ZKblTrE8hsFYahFIZg2QSW3RxLNwwXgfYv', '2018-01-23 17:35:07', '2018-01-23 17:35:07', 'panji', '0213214567', 'UKyZM');

-- --------------------------------------------------------

--
-- Table structure for table `verifications`
--

CREATE TABLE `verifications` (
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  `no_referensi` varchar(10) NOT NULL,
  `status` varchar(25) NOT NULL,
  `add_info` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `verifications`
--

INSERT INTO `verifications` (`user_id`, `created_at`, `updated_at`, `no_referensi`, `status`, `add_info`) VALUES
(34, '2018-01-22 08:30:18', '2018-01-22 08:30:18', 'UKReDUlLA', 'Complete', 'silakan cetak formulir & datang ke kantor untuk wawancara.'),
(36, '2018-01-22 15:02:19', '2018-01-22 15:02:19', 'UKRfYOpKp', 'Complete', 'berhasil'),
(35, '2018-01-22 14:50:59', '2018-01-22 14:50:59', 'UKRRPBXbc', 'Complete', 'Silakan cetak formulir');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD UNIQUE KEY `no_referensi` (`no_referensi`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passports`
--
ALTER TABLE `passports`
  ADD UNIQUE KEY `no_passport` (`no_passport`),
  ADD KEY `passports_ibfk_1` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `verifications`
--
ALTER TABLE `verifications`
  ADD UNIQUE KEY `no_referensi` (`no_referensi`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `applications`
--
ALTER TABLE `applications`
  ADD CONSTRAINT `applications_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `passports`
--
ALTER TABLE `passports`
  ADD CONSTRAINT `passports_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `verifications`
--
ALTER TABLE `verifications`
  ADD CONSTRAINT `verifications_ibfk_1` FOREIGN KEY (`no_referensi`) REFERENCES `applications` (`no_referensi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `verifications_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
