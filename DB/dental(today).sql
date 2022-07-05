-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2022 at 02:03 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

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
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `d_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `next_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `d_id`, `p_id`, `date`, `time`, `next_date`, `status`, `created_at`, `updated_at`) VALUES
(2, '1', '2', '2022-06-28', '09:39', NULL, 0, '2022-06-25 23:33:26', '2022-06-25 23:33:26');

-- --------------------------------------------------------

--
-- Table structure for table `chife_complaints`
--

CREATE TABLE `chife_complaints` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chife_complaints`
--

INSERT INTO `chife_complaints` (`id`, `name`, `status`) VALUES
(1, 'Bad breath', 0),
(2, 'Bad smell', 0),
(3, 'Bleeding gum', 0),
(4, 'Broken filling', 0),
(5, 'Burning sensation', 0),
(6, 'Decayed tooth', 0),
(7, 'Dental checkup', 0),
(8, 'Dental decay', 0),
(9, 'Deposits in the teeth', 0),
(10, 'Discomfort', 0),
(11, 'Facial swelling', 0),
(12, 'Food impaction', 0),
(13, 'Forwardly placed front teeth', 0),
(14, 'Gum discoloration', 0),
(15, 'Gum enlargement', 0),
(16, 'Implant placement', 0),
(17, 'Intra-oral swelling', 0),
(18, 'Irregularly placed front teeth', 0),
(19, 'Missing tooth/teeth', 0),
(20, 'Mobile tooth', 0),
(21, 'Oral ulcer', 0),
(22, 'Pain', 0),
(23, 'Pain in the gum', 0),
(24, 'Routine check-up', 0),
(25, 'Sensitivity', 0),
(26, 'Swollen gum', 0),
(27, 'Temporomandibular joint disorder', 0),
(28, 'To improve the aesthetics of my teeth', 0),
(29, 'Tooth cleaning', 0),
(30, 'Tooth filling', 0),
(31, 'Tooth malaignment', 0),
(32, 'Tooth sensitivity', 0),
(33, 'Tooth whitening', 0),
(34, 'Toothache', 0),
(35, 'Unerupted upper fornt teeth', 0),
(36, 'Want to clean the teeth', 0),
(37, 'Want to fill the decayed tooth', 0),
(38, 'Want to replace the missing tooth', 0),
(39, 'Want to wear clip', 0),
(40, 'Wants to remove the tooth', 0),
(41, 'Helloei', 1);

-- --------------------------------------------------------

--
-- Table structure for table `clinical_findings`
--

CREATE TABLE `clinical_findings` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clinical_findings`
--

INSERT INTO `clinical_findings` (`id`, `name`, `status`) VALUES
(1, 'Abrassion', 0),
(2, 'Abscess', 0),
(3, 'Aesthetic', 0),
(4, 'Alveolar Bone Loss', 0),
(5, 'Apexification', 0),
(6, 'Apexogenesis', 0),
(7, 'Apical Abscess/Infection', 0),
(8, 'Attrition,Abrasion,Erosion', 0),
(9, 'Avulsed Tooth/Teeth', 0),
(10, 'Avulsion', 0),
(11, 'BDC', 0),
(12, 'BDR', 0),
(13, 'Biunderbass Canal', 0),
(14, 'Calculas With Gingibitis and Stain', 0),
(15, 'Caries', 0),
(16, 'Complete Endentulousness', 0),
(17, 'Cracked Tooth Syndrome', 0),
(18, 'Cyst', 0),
(19, 'Discharging Buccal Sinus', 0),
(20, 'Elective', 0),
(21, 'Fracutured Tooth/Root', 0),
(22, 'Grossly Carious Tooth', 0),
(23, 'Impaction', 0),
(24, 'Intra/Extra Oral Swelling', 0),
(25, 'Malalignment', 0),
(26, 'Missing Teeth', 0),
(27, 'Mobility', 0),
(28, 'MOD Caries', 0),
(29, 'Partial Edentuous', 0),
(30, 'Perforation Repair', 0),
(31, 'Pericoronitis', 0),
(32, 'Pwridontal Abscess', 0),
(33, 'Periodontitis', 0),
(34, 'Peri-radicular Pathosis', 0),
(35, 'Plaque, Calculus, Stain', 0),
(36, 'Pulp Polyp', 0),
(37, 'Pulpitis', 0),
(38, 'Restoration of Endodontically Treated Tooth', 0),
(39, 'Retained Deciduous', 0),
(40, 'Retained Primary Tooth', 0),
(41, 'Retainer', 0),
(42, 'Sealer', 0),
(43, 'Sensitivity', 0),
(44, 'Severe Mobility', 0),
(45, 'Spacing/Crowding', 0),
(46, 'helloesi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `BMDC` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid` int(11) DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood_group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bDegree` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mCollege` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `batch` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `session` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passing_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `professional_degree` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `speciality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `verification` tinyint(1) NOT NULL DEFAULT 0,
  `p_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bmdc_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postG_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `fname`, `lname`, `email`, `password`, `phone`, `BMDC`, `nid`, `dob`, `gender`, `blood_group`, `bDegree`, `mCollege`, `batch`, `session`, `passing_year`, `professional_degree`, `speciality`, `role`, `status`, `verification`, `p_image`, `bmdc_image`, `postG_image`, `created_at`, `updated_at`) VALUES
(2, 'ma', 'ma', 'ma@ma.com', '1234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, '2022-07-05 11:09:39', '2022-07-05 11:09:39'),
(4, 'sa', 'as', 'sa@sa.com', '1234', 12312, '21234', 123123, '12/12/1433', 'Male', 'B+', 'bds', 'asddf', 'sadf', 'sdf', 'sdf', NULL, 'afdsf', 0, 0, 0, '20220705050720.jpg', '0705050720.jpg', '', '2022-07-05 11:10:51', '2022-07-05 11:12:20');

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
(10, '2022_06_04_131646_create_treatment_infos_table', 6),
(11, '2022_06_04_143529_create_treatment_infos_table', 7),
(12, '2022_06_04_162845_create_treatment_infos_table', 8),
(13, '2022_06_09_060129_create_prescriptions_table', 9),
(14, '2022_06_08_194035_create_prescriptions_table', 10),
(17, '2022_06_13_201818_create_drugs_table', 11),
(18, '2022_06_14_220840_create_prescriptions_table', 12),
(20, '2022_06_15_203335_create_medicines_table', 13),
(21, '2022_06_21_200002_create_subscriptions_table', 14),
(22, '2022_06_21_200819_create_subscription_plans_table', 15),
(23, '2022_06_21_205019_create_subscription_plans_table', 16),
(26, '2022_06_23_011150_create_treatment_costs_table', 18),
(31, '2022_06_26_043438_create_appointments_table', 20),
(37, '2022_06_13_135839_create_treatment_infos_table', 22),
(38, '2022_05_24_020633_create_patient_infos_table', 23),
(39, '2022_06_02_101635_create_doctors_table', 24);

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
  `d_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patient_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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

INSERT INTO `patient_infos` (`id`, `d_id`, `patient_id`, `name`, `age`, `mobile`, `gender`, `Blood_group`, `date`, `occupation`, `address`, `email`, `image`, `bp_high`, `bp_low`, `Bleeding_disorder`, `Heart_Disease`, `Allergy`, `Diabetic`, `Pregnant`, `Helpatics`, `other`, `created_at`, `updated_at`) VALUES
(1, '3', NULL, 'dasf', NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, '', '100', '80', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-05 08:01:43', '2022-07-05 09:56:02');

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
(1, '1', 'Package - 01', '1000', '1', '26/06/2022', '26/07/2022', 1, '2022-06-21 16:46:00', '2022-06-26 09:01:47'),
(2, '1', 'Package - 02', '2000', '3', '', '', 0, '2022-06-21 16:47:23', '2022-06-26 08:56:12'),
(4, '1', 'Package - 03', '4000', '6', '', '', 0, '2022-06-22 08:11:44', '2022-06-26 08:56:10'),
(5, '1', 'Package - 04', '6000', '12', '26/06/2022', '26/06/2023', 1, '2022-06-22 17:40:54', '2022-06-26 10:23:52'),
(6, '3', 'Package - 04', '6000', '12', '05/07/2022', '05/07/2023', 1, '2022-07-05 07:47:00', '2022-07-05 07:50:30'),
(7, '4', NULL, NULL, NULL, NULL, NULL, 0, '2022-07-05 10:15:37', '2022-07-05 10:15:37'),
(8, '5', NULL, NULL, NULL, NULL, NULL, 0, '2022-07-05 10:18:28', '2022-07-05 10:18:28'),
(9, '1', NULL, NULL, NULL, NULL, NULL, 0, '2022-07-05 10:36:33', '2022-07-05 10:36:33'),
(10, '2', NULL, NULL, NULL, NULL, NULL, 0, '2022-07-05 11:09:39', '2022-07-05 11:09:39'),
(11, '4', NULL, NULL, NULL, NULL, NULL, 0, '2022-07-05 11:10:51', '2022-07-05 11:10:51');

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
-- Table structure for table `treatment_costs`
--

CREATE TABLE `treatment_costs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `d_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `treatment_costs`
--

INSERT INTO `treatment_costs` (`id`, `d_id`, `name`, `price`) VALUES
(1, '1', 'Restoration', '1200'),
(2, '1', 'Pulpectomy', '1500'),
(3, '1', 'Pulpotomy', '500'),
(4, '1', 'Curettage with Scaler', '1200'),
(5, '1', 'Operculectomy', '1000'),
(6, '3', 'Restoration', '1550');

-- --------------------------------------------------------

--
-- Table structure for table `treatment_infos`
--

CREATE TABLE `treatment_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `d_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tooth_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tooth_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tooth_side` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chife_complaints` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `clinical_findings` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `investigation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `treatment_plans` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cost` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `due` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_status` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `treatment_infos`
--

INSERT INTO `treatment_infos` (`id`, `d_id`, `p_id`, `tooth_type`, `tooth_no`, `tooth_side`, `chife_complaints`, `clinical_findings`, `investigation`, `treatment_plans`, `cost`, `paid`, `due`, `payment_status`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', '1', 'Permanent Teeth', '18', 'Upper Right', 'Bad breath', 'Abrassion', 'X-ray', 'Restoration', '1200', '0', '0', 0, 0, '2022-07-05 07:28:00', '2022-07-05 07:28:00'),
(2, '1', '1', 'Permanent Teeth', '18', 'Upper Right', 'Bad breath', 'Abscess', 'X-ray', 'Pulpectomy', '1500', '0', '0', 0, 0, '2022-07-05 07:31:55', '2022-07-05 07:31:55');

-- --------------------------------------------------------

--
-- Table structure for table `treatment_plans`
--

CREATE TABLE `treatment_plans` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `treatment_plans`
--

INSERT INTO `treatment_plans` (`id`, `name`, `status`) VALUES
(1, 'Restoration', 0),
(2, 'Pulpectomy', 0),
(3, 'Pulpotomy', 0),
(5, 'Operculectomy', 0),
(6, 'Abscess Drainage', 0),
(7, 'Cyst Enucleation', 0),
(8, 'Polishing', 0),
(9, 'Curettage with Scaler', 0),
(10, 'Scaling', 0),
(11, 'Apisectomy', 0),
(12, 'Abscess Drainage', 0),
(13, 'Orthodontic Tratment', 0),
(14, 'helloeas', 1);

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
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `treatment_costs`
--
ALTER TABLE `treatment_costs`
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
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `chife_complaints`
--
ALTER TABLE `chife_complaints`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `clinical_findings`
--
ALTER TABLE `clinical_findings`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `patient_infos`
--
ALTER TABLE `patient_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `subscription_plans`
--
ALTER TABLE `subscription_plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `treatment_costs`
--
ALTER TABLE `treatment_costs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `treatment_infos`
--
ALTER TABLE `treatment_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `treatment_plans`
--
ALTER TABLE `treatment_plans`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
