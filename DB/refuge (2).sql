-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2020 at 09:52 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `refuge`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_set_qty_of_aid`
--

CREATE TABLE `admin_set_qty_of_aid` (
  `id_date` int(11) NOT NULL,
  `number_of_refugee` int(11) NOT NULL,
  `type_of_aid` varchar(30) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `date` datetime(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_set_qty_of_aid`
--

INSERT INTO `admin_set_qty_of_aid` (`id_date`, `number_of_refugee`, `type_of_aid`, `quantity`, `date`) VALUES
(2, 31, 'maize', '4', '2020-04-07 06:54:13.515965'),
(3, 31, 'oil', '2', '0000-00-00 00:00:00.000000'),
(7, 36, 'rice', '2', '2020-04-07 09:50:28.788451'),
(8, 36, 'rice', '2', '2020-04-07 09:55:02.644184'),
(9, 36, 'other type', '3', '2020-04-07 09:58:40.925389'),
(10, 36, 'patato', '4', '2020-04-07 10:06:06.547196'),
(11, 36, 'rice', '4', '2020-04-07 10:10:48.823312'),
(12, 36, 'maize', '3', '2020-04-07 10:11:16.041361'),
(14, 36, 'beans', '0', '2020-04-07 12:55:44.256818'),
(15, 36, 'rice', '20', '2020-04-08 13:23:24.714366'),
(16, 36, 'rice', '5', '2020-04-08 13:24:11.877334'),
(17, 36, 'oil', '4', '2020-04-08 13:24:44.634058'),
(18, 36, 'maize', '10', '2020-04-08 13:25:37.382700'),
(19, 36, 'beans', '2', '2020-04-08 13:25:58.173907'),
(20, 36, 'rice', '4', '2020-04-08 13:38:58.882376'),
(21, 8, 'oil', '30', '2020-04-08 19:52:34.206135');

-- --------------------------------------------------------

--
-- Table structure for table `daily_info`
--

CREATE TABLE `daily_info` (
  `id` int(11) NOT NULL,
  `name_of_add_info` varchar(70) NOT NULL,
  `information` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daily_info`
--

INSERT INTO `daily_info` (`id`, `name_of_add_info`, `information`) VALUES
(1, 'jc', 'hello mesiuer lesanima'),
(2, 'nclaude', '  mc m  mc'),
(3, 'nclaude', 'to day wehave meeting'),
(4, 'nclaude', 'to day is very cool men');

-- --------------------------------------------------------

--
-- Table structure for table `receive_aid`
--

CREATE TABLE `receive_aid` (
  `r_aid_id` int(8) NOT NULL,
  `name_of_head_of_family` varchar(60) NOT NULL,
  `national_id` varchar(16) NOT NULL,
  `n_of_family` int(3) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `district` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receive_aid`
--

INSERT INTO `receive_aid` (`r_aid_id`, `name_of_head_of_family`, `national_id`, `n_of_family`, `phone`, `district`) VALUES
(1, 'kamana pascal', '2143872143562176', 5, '0732679401', 'darifulu'),
(2, 'muhire jean', '2109216543789843', 3, '0732679402', 'darifulu'),
(3, 'cyomba', '4354365443', 5, '65654545', 'nord kivu'),
(4, 'bozizi', '118893543455', 9, '0782668889', 'nord kivu'),
(5, 'kamatari ange', '118787469575', 4, '07345226789', 'nord kivu'),
(7, 'ndayi', '', 0, '0782679199', '');

-- --------------------------------------------------------

--
-- Table structure for table `refugees`
--

CREATE TABLE `refugees` (
  `id` int(11) NOT NULL,
  `Names` varchar(60) NOT NULL,
  `N_id` varchar(16) NOT NULL,
  `N_of_family_M` int(10) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `country` varchar(20) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `all_member_of_family` text NOT NULL,
  `r_country` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `refugees`
--

INSERT INTO `refugees` (`id`, `Names`, `N_id`, `N_of_family_M`, `phone`, `country`, `province`, `district`, `all_member_of_family`, `r_country`) VALUES
(1, 'kamana pascal', '2143872143562176', 5, '0732679401', 'SUDAN', 'darifulu', 'darifulu', ' \r\n                                                1.alice \r\n                                                2.ange\r\n                                                3.kanana\r\n                                                4.kaline\r\n                                                5.agnes\r\n                                                6.\r\n                                                7.\r\n                                               ', 'RWANDA'),
(2, 'muhire jean', '2109216543789843', 3, '0732679402', 'SUDAN', 'darifulu', 'darifulu', ' \r\n                                                1. heeh\r\n                                                2.aboud\r\n                                                3.juma\r\n                                               \r\n                                               ', 'RWANDA'),
(3, 'cyomba', '4354365443', 5, '65654545', 'RDC', 'nord kivu', 'nord kivu', '1. kawa 2. anne 3. alice', 'RWANDA'),
(4, 'bozizi', '118893543455', 9, '0782668889', 'RDC', 'nord kivu', 'nord kivu', '1. kawa 2. anne 3. alice', 'RWANDA'),
(5, 'kamatari ange', '118787469575', 4, '07345226789', 'RDC', 'nord kivu', 'nord kivu', ' \r\n                                                1. revity\r\n                                                2. guiness\r\n                                                3.grace\r\n                                                4.\r\n                                                5.\r\n                                               ', 'RWANDA'),
(7, 'ndayi', '', 0, '0782679199', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `setting_camp`
--

CREATE TABLE `setting_camp` (
  `camp_id` int(11) NOT NULL,
  `camp_name` varchar(50) NOT NULL,
  `camp_hostel` int(11) NOT NULL,
  `max_family` int(11) NOT NULL,
  `home_basic_` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting_camp`
--

INSERT INTO `setting_camp` (`camp_id`, `camp_name`, `camp_hostel`, `max_family`, `home_basic_`) VALUES
(1, 'rwanda', 10, 10, 'cleaning tools');

-- --------------------------------------------------------

--
-- Table structure for table `stocjk_of_tools`
--

CREATE TABLE `stocjk_of_tools` (
  `tools_id` int(3) NOT NULL,
  `name_of_tools` varchar(30) NOT NULL,
  `no_tools` int(15) NOT NULL,
  `sender` varchar(30) NOT NULL,
  `receiver` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stocjk_of_tools`
--

INSERT INTO `stocjk_of_tools` (`tools_id`, `name_of_tools`, `no_tools`, `sender`, `receiver`) VALUES
(1, 'amahema', 100, 'unicef', 'nclaude'),
(2, 'soaps', 100, 'hchr', 'nclaude');

-- --------------------------------------------------------

--
-- Table structure for table `stock_of_food`
--

CREATE TABLE `stock_of_food` (
  `food_id` int(11) NOT NULL,
  `name_of_food` varchar(30) NOT NULL,
  `no_food` int(12) NOT NULL,
  `sender` varchar(40) NOT NULL,
  `receiver` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock_of_food`
--

INSERT INTO `stock_of_food` (`food_id`, `name_of_food`, `no_food`, `sender`, `receiver`) VALUES
(1, 'rice', 1316, 'chchr', 'user'),
(4, 'maize', 1532, '', 'nclaude'),
(6, 'patato', 1856, 'unicef', 'nclaude'),
(15, 'oil', 2016, 'hchl', 'nclaude'),
(16, 'beans', 1928, 'hcl', 'nclaude');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `names` varchar(40) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(12) NOT NULL,
  `type` varchar(10) NOT NULL,
  `added_by` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `names`, `phone`, `username`, `password`, `type`, `added_by`) VALUES
(1, 'claude ndayi ', '0732672703', 'nclaude', 'nclaude', 'user', ''),
(2, 'jean claude ndayi', '0782226789', 'jclaude', 'jclaude', 'admin', ''),
(3, 'KABATESI marie lose', '0732679190', 'mlose', 'mlose', 'user', ''),
(4, 'UWAMUBONYE Emmacle', '0784567867', 'uemma', 'uemma', 'user', ''),
(5, 'KABATESI lose', '0782226789', 'kabalose', 'kabalose', 'admin', ''),
(6, 'reserved user', '0782228889', 'ndago', 'ndago', 'user', 'jclaude');

-- --------------------------------------------------------

--
-- Table structure for table `users_leader`
--

CREATE TABLE `users_leader` (
  `h_id` int(11) NOT NULL,
  `leader_name` varchar(50) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `region` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `number_of_refugee` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_leader`
--

INSERT INTO `users_leader` (`h_id`, `leader_name`, `phone`, `region`, `username`, `password`, `number_of_refugee`) VALUES
(1, 'ndayi', '0782679199', 'nord kivu', 'ndayi', 'ndayi', '');

-- --------------------------------------------------------

--
-- Table structure for table `wait_final_received`
--

CREATE TABLE `wait_final_received` (
  `wr_id` int(11) NOT NULL,
  `names` varchar(50) NOT NULL,
  `nida` varchar(16) NOT NULL,
  `r_id` int(11) NOT NULL,
  `number_fmly` int(11) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `district` varchar(20) NOT NULL,
  `maize` int(11) NOT NULL,
  `rice` int(11) NOT NULL,
  `oil` int(11) NOT NULL,
  `beans` int(11) NOT NULL,
  `other` int(11) NOT NULL,
  `received` varchar(10) NOT NULL,
  `date` datetime(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wait_final_received`
--

INSERT INTO `wait_final_received` (`wr_id`, `names`, `nida`, `r_id`, `number_fmly`, `phone`, `district`, `maize`, `rice`, `oil`, `beans`, `other`, `received`, `date`) VALUES
(1, 'kamana pascal', '2143872143562176', 1, 5, '0732679401', 'darifulu', 50, 20, 20, 10, 20, 'received', '2020-04-08 13:52:47.468450'),
(2, 'muhire jean', '2109216543789843', 2, 3, '0732679402', 'darifulu', 30, 12, 12, 6, 12, 'received', '2020-04-08 13:52:47.587261'),
(3, 'kamana pascal', '2143872143562176', 1, 5, '0732679401', 'darifulu', 50, 20, 20, 10, 20, 'received', '2020-04-08 16:19:23.371653'),
(4, 'muhire jean', '2109216543789843', 2, 3, '0732679402', 'darifulu', 30, 12, 12, 6, 12, 'received', '2020-04-08 16:19:23.456517'),
(5, 'kamana pascal', '2143872143562176', 1, 5, '0732679401', 'darifulu', 50, 20, 20, 10, 20, 'received', '2020-04-08 16:20:32.540169'),
(6, 'muhire jean', '2109216543789843', 2, 3, '0732679402', 'darifulu', 30, 12, 12, 6, 12, 'not done', '2020-04-08 16:20:32.627035'),
(7, 'kamana pascal', '2143872143562176', 1, 5, '0732679401', 'darifulu', 50, 20, 150, 10, 20, 'received', '2020-04-08 19:52:50.302452'),
(8, 'muhire jean', '2109216543789843', 2, 3, '0732679402', 'darifulu', 30, 12, 90, 6, 12, 'not done', '2020-04-08 19:52:50.425591'),
(9, 'kamana pascal', '2143872143562176', 1, 5, '0732679401', 'darifulu', 50, 20, 150, 10, 20, 'not done', '2020-04-11 16:41:57.129701'),
(10, 'muhire jean', '2109216543789843', 2, 3, '0732679402', 'darifulu', 30, 12, 90, 6, 12, 'not done', '2020-04-11 16:41:57.227545'),
(11, 'cyomba', '4354365443', 3, 5, '65654545', 'nord kivu', 50, 20, 150, 10, 20, 'not done', '2020-04-11 16:41:57.265206'),
(12, 'bozizi', '118893543455', 4, 9, '0782668889', 'nord kivu', 90, 36, 270, 18, 36, 'received', '2020-04-11 16:41:57.331829'),
(13, 'kamatari ange', '118787469575', 5, 4, '07345226789', 'nord kivu', 40, 16, 120, 8, 16, 'received', '2020-04-11 16:41:57.399288');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_set_qty_of_aid`
--
ALTER TABLE `admin_set_qty_of_aid`
  ADD PRIMARY KEY (`id_date`);

--
-- Indexes for table `daily_info`
--
ALTER TABLE `daily_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receive_aid`
--
ALTER TABLE `receive_aid`
  ADD PRIMARY KEY (`r_aid_id`);

--
-- Indexes for table `refugees`
--
ALTER TABLE `refugees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `N_id` (`N_id`);

--
-- Indexes for table `setting_camp`
--
ALTER TABLE `setting_camp`
  ADD PRIMARY KEY (`camp_id`);

--
-- Indexes for table `stocjk_of_tools`
--
ALTER TABLE `stocjk_of_tools`
  ADD PRIMARY KEY (`tools_id`);

--
-- Indexes for table `stock_of_food`
--
ALTER TABLE `stock_of_food`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `users_leader`
--
ALTER TABLE `users_leader`
  ADD PRIMARY KEY (`h_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `wait_final_received`
--
ALTER TABLE `wait_final_received`
  ADD PRIMARY KEY (`wr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_set_qty_of_aid`
--
ALTER TABLE `admin_set_qty_of_aid`
  MODIFY `id_date` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `daily_info`
--
ALTER TABLE `daily_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `receive_aid`
--
ALTER TABLE `receive_aid`
  MODIFY `r_aid_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `refugees`
--
ALTER TABLE `refugees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `setting_camp`
--
ALTER TABLE `setting_camp`
  MODIFY `camp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stocjk_of_tools`
--
ALTER TABLE `stocjk_of_tools`
  MODIFY `tools_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stock_of_food`
--
ALTER TABLE `stock_of_food`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users_leader`
--
ALTER TABLE `users_leader`
  MODIFY `h_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wait_final_received`
--
ALTER TABLE `wait_final_received`
  MODIFY `wr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
