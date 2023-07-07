-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 28, 2023 at 05:33 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `well-life-jobs-master`
--

-- --------------------------------------------------------

--
-- Table structure for table `cardiometabolicreports`
--

CREATE TABLE `cardiometabolicreports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `hs_crp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hs_crp_calculate` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `microalbumin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creatinine_urine_random` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cholesterol_total` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hdl_cholesterol` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `triglycerides` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ldl_cholesterol_calculated` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chol_hdl_c` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `non_hdl_cholesterol` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tg_hdl_hdl_C` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lipoprotein_fractionation_nmr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `glucose` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insulin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hba1c` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estimated_average_glucose` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vitamin_b12` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lc_ms` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `omegacheck` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `arachidonic_acid_epa_ratio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `epa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dpa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dha` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `omega6_total` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `omega3_total` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `arachidonic_acid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linoleic_acid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nt_probnp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creatine_kinase` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uric_acid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dhea_s` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thyroid_stimulating_hormone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thyroxine` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `calcium` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sodium` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `potassium` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chloride` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `co2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bun` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creatinine` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bun_creatinine_ratio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `protein` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `albumin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `globulin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `albumin_globulin_ratio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ast` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bilirubin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testosterone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testosterone_free` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testosterone_free_pt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testosterone_bioavailable` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shbg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thyroid_peroxidase_ab` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thyroglobulin_antibodies` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ggt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lipase` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ferritin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iron` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tibc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transferrin_saturation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prostatic_specific_ag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ana_screen` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rheuamatoid_factor` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `antigen_antibody` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ab_igm` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ab_igg` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ebnaabigg` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `h_b_core_ab` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `h_b_core_ab_igm` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `he_b_surface_ag` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `h_a_igm` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `h_c_antibody` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `index_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `labscreen` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wbc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rbc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hemoglobin` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hematocrit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mcv` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mch` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mchc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rcdw` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `platelet_count` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mean_platelet_volume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `neutrophil` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `neutrophil_absolute` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lymphocyte` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lymphocyte_absolute` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `monocyte` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `monocyte_absolute` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eosinophil` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eosinophil_absolute` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `basophil` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `basophil_absolute` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `homocysteine` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vitamin_d` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `egfr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oxldl` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ana_pattern` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ana_titer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dna_antibody` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_rnp_antibody` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rnp_antibody` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_antibody` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chromatin` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sjogren_antibody_a` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sjogren_antibody_b` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scl_antibody` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jo1_antibody` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ribosomal_p_antibody` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `centromere_b_antibody` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `egfr_non_african_descent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `egfr_african_descent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tg_hdl_c` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ldl_p` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `small_ldl_p` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ldl_size` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hdl_p` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `large_hdl_p` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hdl_size` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vldl_size` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `large_vldl_p` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cardiometabolicreports`
--

INSERT INTO `cardiometabolicreports` (`id`, `patient_id`, `hs_crp`, `hs_crp_calculate`, `microalbumin`, `creatinine_urine_random`, `cholesterol_total`, `hdl_cholesterol`, `triglycerides`, `ldl_cholesterol_calculated`, `chol_hdl_c`, `non_hdl_cholesterol`, `tg_hdl_hdl_C`, `lipoprotein_fractionation_nmr`, `glucose`, `insulin`, `hba1c`, `estimated_average_glucose`, `vitamin_b12`, `lc_ms`, `omegacheck`, `arachidonic_acid_epa_ratio`, `epa`, `dpa`, `dha`, `omega6_total`, `omega3_total`, `arachidonic_acid`, `linoleic_acid`, `nt_probnp`, `creatine_kinase`, `uric_acid`, `dhea_s`, `thyroid_stimulating_hormone`, `thyroxine`, `calcium`, `sodium`, `potassium`, `chloride`, `co2`, `bun`, `creatinine`, `bun_creatinine_ratio`, `protein`, `albumin`, `globulin`, `albumin_globulin_ratio`, `alp`, `alt`, `ast`, `bilirubin`, `testosterone`, `testosterone_free`, `testosterone_free_pt`, `testosterone_bioavailable`, `shbg`, `thyroid_peroxidase_ab`, `thyroglobulin_antibodies`, `ggt`, `lipase`, `ferritin`, `iron`, `tibc`, `transferrin_saturation`, `prostatic_specific_ag`, `ana_screen`, `rheuamatoid_factor`, `antigen_antibody`, `ab_igm`, `ab_igg`, `ebnaabigg`, `h_b_core_ab`, `h_b_core_ab_igm`, `he_b_surface_ag`, `h_a_igm`, `h_c_antibody`, `index_1`, `labscreen`, `wbc`, `rbc`, `hemoglobin`, `hematocrit`, `mcv`, `mch`, `mchc`, `rcdw`, `platelet_count`, `mean_platelet_volume`, `neutrophil`, `neutrophil_absolute`, `lymphocyte`, `lymphocyte_absolute`, `monocyte`, `monocyte_absolute`, `eosinophil`, `eosinophil_absolute`, `basophil`, `basophil_absolute`, `homocysteine`, `vitamin_d`, `egfr`, `oxldl`, `ana_pattern`, `ana_titer`, `dna_antibody`, `sm_rnp_antibody`, `rnp_antibody`, `sm_antibody`, `chromatin`, `sjogren_antibody_a`, `sjogren_antibody_b`, `scl_antibody`, `jo1_antibody`, `ribosomal_p_antibody`, `centromere_b_antibody`, `egfr_non_african_descent`, `egfr_african_descent`, `tg_hdl_c`, `ldl_p`, `small_ldl_p`, `ldl_size`, `hdl_p`, `large_hdl_p`, `hdl_size`, `vldl_size`, `large_vldl_p`, `status`, `created_at`, `updated_at`) VALUES
(2, 1, '12', NULL, '11.98', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '120', '1', '1', '1', '1', '1', '1', NULL, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL, '1', '1', '1', '1', '1', '1', NULL, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, '1', '1', '1', '1', '1', '1', '1', NULL, '1', NULL, NULL, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'Active', '2023-06-25 04:06:37', '2023-06-25 04:22:51'),
(3, 2, '100', '200', '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', NULL, '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', NULL, NULL, NULL, '55', '55', '55', '55', '55', '55', NULL, '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', NULL, '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', NULL, NULL, '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', '55', '5555', 'Active', '2023-06-27 00:10:09', '2023-06-28 09:32:23'),
(4, 1, '50', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', NULL, '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', NULL, NULL, NULL, '100', '100', '100', '100', '100', '100', NULL, '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', NULL, '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', NULL, NULL, '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', NULL, '100', '100', '100', '100', '100', '100', '100', 'Active', '2023-06-27 08:10:35', '2023-06-28 09:33:34'),
(5, 2, '10', NULL, '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', NULL, '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', NULL, '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', NULL, NULL, '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', 'Active', '2023-06-27 08:15:39', '2023-06-27 08:15:39');

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
(5, '2022_02_15_100725_create_reports_table', 1),
(6, '2022_11_28_160545_add_columns_1_to_reports_table', 1),
(7, '2022_12_21_135625_create_patients_table', 1),
(8, '2022_12_21_140646_add_columns_2_to_reports_table', 1),
(9, '2022_12_22_095930_add_columns_3_to_reports_table', 1),
(10, '2022_12_22_143455_add_columns_4_to_reports_table', 1),
(11, '2023_01_16_153529_add_columns_5_to_reports_table', 1),
(12, '2023_01_19_140403_add_columns_6_to_reports_table', 1),
(13, '2023_02_06_134505_add_columns_1_to_patients_table', 1);

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
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_line_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_line_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height_unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight_unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ethnicity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diabetes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smoke` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fhhx` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lipid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `htnmed` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deprecated` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `first_name`, `last_name`, `phone`, `email`, `address_line_1`, `address_line_2`, `city`, `province`, `country`, `zip`, `gender`, `age`, `height`, `height_unit`, `weight`, `weight_unit`, `birthday`, `ethnicity`, `diabetes`, `smoke`, `fhhx`, `lipid`, `htnmed`, `deprecated`, `created_at`, `updated_at`) VALUES
(1, 'Rashmi2', 'Singh', '+919327569319', 'rashmisingh93272@gmail.com', 'mil', 'para', 'Rajkot', 'Gujrat', 'India', '360002', 'Female', '0', '5.1', 'm', '60', 'kg', '2023-05-02', '2', '0', '0', '1', '1', '0', 0, '2023-05-31 10:21:34', '2023-05-31 10:21:34'),
(2, 'Dev', 'Test', '12536725763', 'test@gmail.com', 'mil', 'para', 'Rajkot', 'Gujrat', 'India', '360002', 'Male', '22', '6', 'ft', '75', 'kg', '2000-12-27', '3', '0', '0', '0', '1', '0', 0, '2023-05-31 22:27:54', '2023-05-31 22:27:54');

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
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `region` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bmd` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expected_bmd` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `equivalent_age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cac` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `arterial_age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `right_hand_est_grip_strength` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height_unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight_unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `equivalent_age_for_grip_strength` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fev_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `equivalent_age_for_lung` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ethnicity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diabetes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smoke` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fhhx` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chol` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hdl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sbp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lipid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `htnmed` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cac_riskscore` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nocac_riskscore` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `biological_age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chances_of_dying` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `albumin_liver` decimal(8,2) DEFAULT NULL,
  `alp_liver` decimal(8,2) DEFAULT NULL,
  `creatinine_kidney` decimal(8,2) DEFAULT NULL,
  `glucose_pancreas` decimal(8,2) DEFAULT NULL,
  `crp_immune` decimal(8,2) DEFAULT NULL,
  `lympho_immune` decimal(8,2) DEFAULT NULL,
  `wbc_immune` decimal(8,2) DEFAULT NULL,
  `mcv_bone_marrow` decimal(8,2) DEFAULT NULL,
  `rdw_bone_marrow` decimal(8,2) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `pwv` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vascular_age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vascular_age_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `percentile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `balance_age` decimal(8,2) DEFAULT NULL,
  `pr_interval` decimal(8,2) DEFAULT NULL,
  `ekg_heart_age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `max_pulse_wave` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `24_hr_bp_average` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `24_hr_bp_average_dbp` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skin_age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `left_breast_thermography` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `right_breast_thermography` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanita_metabolic_age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bf_percent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vo_2_max` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trudiagnostic_truage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sleep_ahi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hrv` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heart_age` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heart_age_average` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `musculoskeletal_age` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `psychomotor_speed` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brain_age` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lab_age` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio_age` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bbt_result` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deprecated` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `patient_id`, `name`, `status`, `type`, `gender`, `birthday`, `parameters`, `region`, `bmd`, `expected_bmd`, `equivalent_age`, `cac`, `arterial_age`, `right_hand_est_grip_strength`, `height`, `height_unit`, `weight`, `weight_unit`, `equivalent_age_for_grip_strength`, `fev_1`, `equivalent_age_for_lung`, `ethnicity`, `diabetes`, `smoke`, `fhhx`, `chol`, `hdl`, `sbp`, `lipid`, `htnmed`, `cac_riskscore`, `nocac_riskscore`, `biological_age`, `chances_of_dying`, `albumin_liver`, `alp_liver`, `creatinine_kidney`, `glucose_pancreas`, `crp_immune`, `lympho_immune`, `wbc_immune`, `mcv_bone_marrow`, `rdw_bone_marrow`, `age`, `pwv`, `vascular_age`, `imt`, `vascular_age_2`, `percentile`, `balance_age`, `pr_interval`, `ekg_heart_age`, `max_pulse_wave`, `24_hr_bp_average`, `24_hr_bp_average_dbp`, `skin_age`, `left_breast_thermography`, `right_breast_thermography`, `tanita_metabolic_age`, `bf_percent`, `vo_2_max`, `trudiagnostic_truage`, `sleep_ahi`, `hrv`, `heart_age`, `heart_age_average`, `musculoskeletal_age`, `psychomotor_speed`, `brain_age`, `lab_age`, `bio_age`, `bbt_result`, `deprecated`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 'Active', 'BMD', 'Female', '2023-05-02', NULL, '[\"Spine L1-L4\",\"Femur Neck\",\"Total Femur\"]', '[\"13\",\"13\",\"13\"]', NULL, NULL, '13', '58', '13', '5', 'm', '60', 'kg', '-520', '13', '98.9', '2', '0', '0', '1', '13', '13', NULL, '1', '0', '', '', '', '', '13.00', '13.00', '13.00', '13.00', '13.00', '13.00', NULL, '13.00', '13.00', 0, '13', '94.74', '13', '-62', '< 2.5 %', '15.46', '13.00', '-233.75', 'Wave Type-2', '13', '13', '13', 'TH-2', 'TH-2', '13', '13', '13', '13', '13', '13', '126.32', '-4.686', NULL, '13', '168.24', '', '', '13', 0, '2023-06-01 13:00:40', '2023-06-01 13:00:40'),
(2, 1, NULL, 'Active', 'BMD', 'Female', '2023-05-02', NULL, '[\"Femur Neck\",\"Total Body Advanced\"]', '[\"00\",\"00\"]', NULL, NULL, '00', '39', '00', '5', 'm', '60', 'kg', '-585', '00', '608.71', '2', '0', '0', '1', '00', '00', NULL, '1', '0', '', '', '', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', NULL, '-0.02', '0.00', 0, '00', 'NAN', '00', '-65', '< 2.5 %', '10.63', '0.00', '-259.23', 'Wave Type-1', '00', '00', '00', 'TH-4', 'TH-4', '00', '00', '00', '00', '00', '00', '149.12', '-14.222', NULL, '00', '178.64', '', '', '00', 0, '2023-06-01 13:02:50', '2023-06-01 13:02:50'),
(5, 2, NULL, 'Active', 'BMD', 'Male', '2000-12-27', NULL, '[\"Lateral Spine\",\"Radius Ultradistal\",\"Radius Total\"]', '[\"5\",\"4\",\"3\"]', NULL, NULL, '55', '69', '5', '6', 'ft', '75', 'kg', '-203', '5', '15.62', '3', '0', '0', '0', '5', '5', NULL, '1', '0', '', '', '', '', '5.00', '5.00', '5.00', '5.00', '5.00', '5.00', NULL, '5.00', '5.00', 22, '5', 'NAN', '5', '-61', '< 2.5 %', '12.49', '5.00', '-249.43', 'Wave Type-2', '5', '5', '5', 'TH-2', 'TH-1', '5', '5', '5', '5', '5', '5', '140.35', '-6.016', NULL, '5', '174.64', '', '', '5', 0, '2023-06-05 09:46:45', '2023-06-05 09:46:45');

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
-- Indexes for table `cardiometabolicreports`
--
ALTER TABLE `cardiometabolicreports`
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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
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
-- AUTO_INCREMENT for table `cardiometabolicreports`
--
ALTER TABLE `cardiometabolicreports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
