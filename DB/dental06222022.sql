-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2022 at 11:35 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dental`
--

-- --------------------------------------------------------

--
-- Table structure for table `chife_complaints`
--

CREATE TABLE `chife_complaints` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chife_complaints`
--

INSERT INTO `chife_complaints` (`id`, `name`) VALUES
(1, 'Bad breath'),
(2, 'Bad smell'),
(3, 'Bleeding gum'),
(4, 'Broken filling'),
(5, 'Burning sensation'),
(6, 'Decayed tooth'),
(7, 'Dental checkup'),
(8, 'Dental decay'),
(9, 'Deposits in the teeth'),
(10, 'Discomfort'),
(11, 'Facial swelling'),
(12, 'Food impaction'),
(13, 'Forwardly placed front teeth'),
(14, 'Gum discoloration'),
(15, 'Gum enlargement'),
(16, 'Implant placement'),
(17, 'Intra-oral swelling'),
(18, 'Irregularly placed front teeth'),
(19, 'Missing tooth/teeth'),
(20, 'Mobile tooth'),
(21, 'Oral ulcer'),
(22, 'Pain'),
(23, 'Pain in the gum'),
(24, 'Routine check-up'),
(25, 'Sensitivity'),
(26, 'Swollen gum'),
(27, 'Temporomandibular joint disorder'),
(28, 'To improve the aesthetics of my teeth'),
(29, 'Tooth cleaning'),
(30, 'Tooth filling'),
(31, 'Tooth malaignment'),
(32, 'Tooth sensitivity'),
(33, 'Tooth whitening'),
(34, 'Toothache'),
(35, 'Unerupted upper fornt teeth'),
(36, 'Want to clean the teeth'),
(37, 'Want to fill the decayed tooth'),
(38, 'Want to replace the missing tooth'),
(39, 'Want to wear clip'),
(40, 'Wants to remove the tooth'),
(41, 'Helloei');

-- --------------------------------------------------------

--
-- Table structure for table `clinical_findings`
--

CREATE TABLE `clinical_findings` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clinical_findings`
--

INSERT INTO `clinical_findings` (`id`, `name`) VALUES
(1, 'Abrassion'),
(2, 'Abscess'),
(3, 'Aesthetic'),
(4, 'Alveolar Bone Loss'),
(5, 'Apexification'),
(6, 'Apexogenesis'),
(7, 'Apical Abscess/Infection'),
(8, 'Attrition,Abrasion,Erosion'),
(9, 'Avulsed Tooth/Teeth'),
(10, 'Avulsion'),
(11, 'BDC'),
(12, 'BDR'),
(13, 'Biunderbass Canal'),
(14, 'Calculas With Gingibitis and Stain'),
(15, 'Caries'),
(16, 'Complete Endentulousness'),
(17, 'Cracked Tooth Syndrome'),
(18, 'Cyst'),
(19, 'Discharging Buccal Sinus'),
(20, 'Elective'),
(21, 'Fracutured Tooth/Root'),
(22, 'Grossly Carious Tooth'),
(23, 'Impaction'),
(24, 'Intra/Extra Oral Swelling'),
(25, 'Malalignment'),
(26, 'Missing Teeth'),
(27, 'Mobility'),
(28, 'MOD Caries'),
(29, 'Partial Edentuous'),
(30, 'Perforation Repair'),
(31, 'Pericoronitis'),
(32, 'Pwridontal Abscess'),
(33, 'Periodontitis'),
(34, 'Peri-radicular Pathosis'),
(35, 'Plaque, Calculus, Stain'),
(36, 'Pulp Polyp'),
(37, 'Pulpitis'),
(38, 'Restoration of Endodontically Treated Tooth'),
(39, 'Retained Deciduous'),
(40, 'Retained Primary Tooth'),
(41, 'Retainer'),
(42, 'Sealer'),
(43, 'Sensitivity'),
(44, 'Severe Mobility'),
(45, 'Spacing/Crowding'),
(46, 'helloesi');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BMDC` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chember_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chember_add` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `verification` tinyint(1) NOT NULL DEFAULT 0,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `email`, `password`, `BMDC`, `chember_name`, `chember_add`, `phone`, `role`, `status`, `verification`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Mahadi', 'ma@ma.com', '1234', 'D-6000', 'bhdbf', 'nndyufhjnfh', '019876543245', 0, 0, 0, NULL, '2022-06-22 09:15:17', '2022-06-22 09:29:51');

-- --------------------------------------------------------

--
-- Table structure for table `drugs`
--

CREATE TABLE `drugs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `d_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `drug_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `drug_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meal_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `drugs`
--

INSERT INTO `drugs` (`id`, `d_id`, `p_id`, `t_id`, `drug_name`, `drug_time`, `meal_time`, `duration`, `date`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '1', 'napas', '1+1+1', 'After Meal', '1', '14-06-2022', '2022-06-13 20:45:03', '2022-06-13 21:51:52'),
(2, '1', '1', '1', 'Flox', '1+0+1', 'Before Meal', '7', '14-06-2022', '2022-06-13 21:02:44', '2022-06-13 21:02:44'),
(3, '1', '1', '1', 'gose', '1+0+1', 'Before Meal', '1', '14-06-2022', '2022-06-13 21:22:30', '2022-06-13 21:22:30'),
(5, '1', '2', '2', 'test', '1+0+1', 'Before Meal', '1', '14-06-2022', '2022-06-14 14:04:05', '2022-06-14 14:04:05'),
(6, '1', '1', '1', 'test 1', '1+0+1', 'After Meal', '7', '15-06-2022', '2022-06-15 08:34:45', '2022-06-15 08:34:56');

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
-- Table structure for table `investigations`
--

CREATE TABLE `investigations` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `investigations`
--

INSERT INTO `investigations` (`id`, `name`, `status`) VALUES
(1, 'X-ray', 0),
(2, 'OPG', 0),
(3, 'CBCT', 0),
(4, 'Helloes', 1);

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`id`, `name`, `brand`) VALUES
(1, 'Napa', NULL),
(2, 'A-Flox', 'Square'),
(4, 'asdf', 'qwer'),
(5, 'hello', 'awe');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_05_23_214619_create_patient_infos_table', 1),
(7, '2022_06_02_081939_create_doctors_table', 3),
(9, '2022_05_24_020633_create_patient_infos_table', 5),
(10, '2022_06_04_131646_create_treatment_infos_table', 6),
(11, '2022_06_04_143529_create_treatment_infos_table', 7),
(12, '2022_06_04_162845_create_treatment_infos_table', 8),
(13, '2022_06_09_060129_create_prescriptions_table', 9),
(14, '2022_06_08_194035_create_prescriptions_table', 10),
(15, '2022_06_13_135839_create_treatment_infos_table', 10),
(17, '2022_06_13_201818_create_drugs_table', 11),
(18, '2022_06_14_220840_create_prescriptions_table', 12),
(20, '2022_06_15_203335_create_medicines_table', 13),
(21, '2022_06_21_200002_create_subscriptions_table', 14),
(22, '2022_06_21_200819_create_subscription_plans_table', 15),
(23, '2022_06_21_205019_create_subscription_plans_table', 16),
(25, '2022_06_02_101635_create_doctors_table', 17);

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
-- Table structure for table `patient_infos`
--

CREATE TABLE `patient_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Blood_group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bp_high` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bp_low` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Bleeding_disorder` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Heart_Disease` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Allergy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Diabetic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Pregnant` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Helpatics` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_infos`
--

INSERT INTO `patient_infos` (`id`, `name`, `age`, `mobile`, `gender`, `Blood_group`, `date`, `occupation`, `address`, `email`, `image`, `bp_high`, `bp_low`, `Bleeding_disorder`, `Heart_Disease`, `Allergy`, `Diabetic`, `Pregnant`, `Helpatics`, `other`, `created_at`, `updated_at`) VALUES
(1, 'Mahadi', '30', '01938984203', 'Male', 'AB+', '1998-03-12', 'student', 'uttara', 'mah@ma.com', '', '110', '80', 'no', 'no', 'no', 'no', 'no', 'no', NULL, '2022-06-04 05:41:05', '2022-06-13 07:53:01'),
(2, 'test', '30', '01674746453', 'Male', 'ab-', '2014-03-29', 'job', NULL, NULL, '', '100', '80', 'no', 'yes', 'yes', 'no', 'no', 'yes', NULL, '2022-06-04 09:22:09', '2022-06-05 01:29:40'),
(3, 'mahadi', '25', '01787654321', 'Male', 'ab-', '2020-02-11', 'job', 'uttara', NULL, '', '120', '80', 'no', 'yes', 'yes', 'yes', 'yes', 'no', NULL, '2022-06-05 03:58:50', '2022-06-05 03:59:44');

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
-- Table structure for table `prescriptions`
--

CREATE TABLE `prescriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `d_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_plan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `drug_id_list` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prescriptions`
--

INSERT INTO `prescriptions` (`id`, `d_id`, `p_id`, `t_id`, `t_plan`, `drug_id_list`, `date`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '1', 'Restoration', '1,2,3', '14-06-2022', '2022-06-14 16:34:57', '2022-06-14 16:34:57'),
(3, '1', '1', '1', 'Restoration', '6', '15-06-2022', '2022-06-15 09:46:27', '2022-06-15 09:46:27');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `d_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `package_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `package_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `d_id`, `package_name`, `package_price`, `duration`, `start`, `end`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', 'Package - 01', '1000', '1', '22/06/2022', '22/07/2022', 1, '2022-06-21 16:46:00', '2022-06-22 08:12:43'),
(2, '1', 'Package - 02', '2000', '3', '22/06/2022', '22/09/2022', 1, '2022-06-21 16:47:23', '2022-06-22 08:12:47'),
(3, '1', 'Package - 04', '6000', '12', '22/06/2022', '22/06/2023', 1, '2022-06-22 08:10:12', '2022-06-22 08:13:02'),
(4, '1', 'Package - 03', '4000', '6', '22/06/2022', '22/12/2022', 1, '2022-06-22 08:11:44', '2022-06-22 08:12:57');

-- --------------------------------------------------------

--
-- Table structure for table `subscription_plans`
--

CREATE TABLE `subscription_plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `package_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `package_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscription_plans`
--

INSERT INTO `subscription_plans` (`id`, `package_name`, `package_price`, `duration`) VALUES
(1, 'Package - 01', '1000', '1'),
(2, 'Package - 02', '2000', '3'),
(3, 'Package - 03', '4000', '6'),
(4, 'Package - 04', '6000', '12');

-- --------------------------------------------------------

--
-- Table structure for table `treatment_infos`
--

CREATE TABLE `treatment_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `p_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tooth_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tooth_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tooth_side` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chife_complaints` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `clinical_findings` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `investigation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `treatment_plans` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `treatment_infos`
--

INSERT INTO `treatment_infos` (`id`, `p_id`, `tooth_type`, `tooth_no`, `tooth_side`, `chife_complaints`, `clinical_findings`, `investigation`, `treatment_plans`, `created_at`, `updated_at`) VALUES
(1, '1', 'Permanent Teeth', '18', 'Upper Right', 'Bad smell', 'Aesthetic', 'X-ray,OPG', 'Restoration', '2022-06-13 08:08:32', '2022-06-13 08:08:32'),
(2, '2', 'Permanent Teeth', '16', 'Upper Right', 'Bad breath', 'Alveolar Bone Loss', 'X-ray,CBCT', 'Restoration', '2022-06-14 13:56:30', '2022-06-14 13:56:30');

-- --------------------------------------------------------

--
-- Table structure for table `treatment_plans`
--

CREATE TABLE `treatment_plans` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `cost` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `treatment_plans`
--

INSERT INTO `treatment_plans` (`id`, `name`, `cost`) VALUES
(1, 'Restoration', NULL),
(2, 'Pulpectomy', NULL),
(3, 'Pulpotomy', NULL),
(4, 'Extraction', NULL),
(5, 'Operculectomy', NULL),
(6, 'Abscess Drainage', NULL),
(7, 'Cyst Enucleation', NULL),
(8, 'Polishing', NULL),
(9, 'Curettage with Scaler', NULL),
(10, 'Scaling', NULL),
(11, 'Apisectomy', NULL),
(12, 'Abscess Drainage', NULL),
(13, 'Orthodontic Tratment', NULL),
(14, 'helloeas', 1000);

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
-- Indexes for dumped tables
--

--
-- Indexes for table `chife_complaints`
--
ALTER TABLE `chife_complaints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clinical_findings`
--
ALTER TABLE `clinical_findings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `doctors_email_unique` (`email`);

--
-- Indexes for table `drugs`
--
ALTER TABLE `drugs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `investigations`
--
ALTER TABLE `investigations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
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
-- Indexes for table `patient_infos`
--
ALTER TABLE `patient_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscription_plans`
--
ALTER TABLE `subscription_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `treatment_infos`
--
ALTER TABLE `treatment_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `treatment_plans`
--
ALTER TABLE `treatment_plans`
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
-- AUTO_INCREMENT for table `chife_complaints`
--
ALTER TABLE `chife_complaints`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `clinical_findings`
--
ALTER TABLE `clinical_findings`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `drugs`
--
ALTER TABLE `drugs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `investigations`
--
ALTER TABLE `investigations`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `patient_infos`
--
ALTER TABLE `patient_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prescriptions`
--
ALTER TABLE `prescriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subscription_plans`
--
ALTER TABLE `subscription_plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `treatment_infos`
--
ALTER TABLE `treatment_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `treatment_plans`
--
ALTER TABLE `treatment_plans`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
