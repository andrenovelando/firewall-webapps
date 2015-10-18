-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2015 at 03:53 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `svkpu`
--

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1444623432),
('m130524_201442_init', 1444623435);

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE IF NOT EXISTS `task` (
  `task_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(12) NOT NULL,
  `description` varchar(64) NOT NULL,
  `url` varchar(64) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `facebook` varchar(10) NOT NULL,
  `twitter` varchar(10) NOT NULL,
  `create_time` varchar(15) NOT NULL,
  `running_time` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`task_id`, `user_id`, `status`, `description`, `url`, `jumlah`, `facebook`, `twitter`, `create_time`, `running_time`) VALUES
(8, 20, 'Pending', '', 'assets/data_praktikan/Putih_20/task_Putih_20_1445172701', 25, 'Yes', 'Yes', '1445172701', 0),
(9, 21, 'Cancelled', '', 'assets/data_praktikan/Kuda_21/task_Kuda_21_1445172788', 30, 'Yes', 'No', '1445172788', 0),
(10, 21, 'Pending', '', 'assets/data_praktikan/Kuda_21/task_Kuda_21_1445172867', 45, 'No', 'Yes', '1445172867', 0),
(11, 20, 'Pending', '', 'assets/data_praktikan/Putih_20/task_Putih_20_1445173056', 50, 'No', 'No', '1445173056', 0),
(12, 20, 'Pending', '', 'assets/data_praktikan/Putih_20/task_Putih_20_1445173244', 35, 'Yes', 'Yes', '1445173244', 0),
(13, 20, 'Cancelled', '', 'assets/data_praktikan/Putih_20/task_Putih_20_1445173518', 75, 'Yes', 'Yes', '1445173518', 0),
(14, 20, 'Pending', '', 'assets/data_praktikan/Putih_20/task_Putih_20_1445173568', 75, 'Yes', 'Yes', '1445173568', 0),
(15, 20, 'Pending', '', 'assets/data_praktikan/Putih_20/task_Putih_20_1445175439', 75, 'Yes', 'Yes', '1445175439', 0),
(16, 20, 'Pending', '', 'assets/data_praktikan/Putih_20/task_Putih_20_1445175504', 15, 'No', 'Yes', '1445175504', 0),
(17, 20, 'Pending', '', 'assets/data_praktikan/Putih_20/task_Putih_20_1445175534', 21, 'Yes', 'No', '1445175534', 0),
(18, 20, 'Pending', '', 'assets/data_praktikan/Putih_20/task_Putih_20_1445175553', 32, 'No', 'No', '1445175553', 0),
(19, 20, 'Pending', '', 'assets/data_praktikan/Putih_20/task_Putih_20_1445175567', 54, 'Yes', 'Yes', '1445175567', 0),
(20, 20, 'Pending', '', 'assets/data_praktikan/Putih_20/task_Putih_20_1445175623', 43, 'No', 'No', '1445175623', 0),
(21, 20, 'Pending', '', 'assets/data_praktikan/Putih_20/task_Putih_20_1445176148', 14, 'Yes', 'Yes', '1445176148', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `full_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification` varchar(12) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `full_name`, `role`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification`) VALUES
(18, 'SV', 'Sharing Vision', 'Admin', '2IGvBe9KDJvg9149LJhAOAi_6qye42Hu', '$2y$13$n1tYhMPtA1KSPnkCO8EVzuPTcxW0eOBGlN8f7/tYJb8nKCRYhSOvW', NULL, 'SV@sharingvision.id', 10, 1444900547, 1444900547, 'Yes'),
(19, 'KPU', 'Kuda Putih Utama', 'Expert', 'PCStka5hH2kVV78zvzRZe7e5rdmUwtBL', '$2y$13$bhK3m5vq1Vn4EAOdSn1ceO1PjiukOtOgrg3ANMI3bkKS5efASC/8y', NULL, 'KPU@kudaputihutama.id', 10, 1444900592, 1444900592, 'Yes'),
(20, 'Putih', 'Putih Utama', 'Praktikan', 'R6YaiwGlE7N-ufBU2sR1VJuMTDzW_mRi', '$2y$13$bkg/OWaoCqEPhkkbyF8PHOwoG3llNfoIWRwLWRQRW.RGBB2ZCsypC', NULL, 'Putih@utama.org', 10, 1444906488, 1444906488, 'Yes'),
(21, 'Kuda', 'kuda', 'Praktikan', 'gEVCUKvbKYp7S1QYEFcU5nMvOXj17gL5', '$2y$13$r9.wT60Q52IZicU0MtrG7eOGxd0lx9FE6nPbVT4o2gPYV2Iq.7KJ.', NULL, 'kuda@kki.com', 10, 1445164734, 1445164734, 'Yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`task_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
