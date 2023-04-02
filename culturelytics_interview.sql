-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2023 at 10:54 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `culturelytics_interview`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer_table`
--

CREATE TABLE `answer_table` (
  `id` int(11) NOT NULL,
  `answer` varchar(250) NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answer_table`
--

INSERT INTO `answer_table` (`id`, `answer`, `updated_date`) VALUES
(1, 'Peacock', '2023-03-31 18:04:44'),
(2, 'Tiger', '2023-03-31 18:04:44'),
(3, 'Tricolor', '2023-03-31 18:04:44'),
(4, 'Lotus', '2023-03-31 18:04:44'),
(5, 'Banyan', '2023-03-31 18:04:44'),
(6, 'Ganges', '2023-03-31 18:04:44'),
(7, 'Mango', '2023-03-31 18:04:44'),
(8, 'Vande Mataram', '2023-03-31 18:04:44'),
(9, 'INR', '2023-03-31 18:04:44'),
(10, 'Lion Capital of Ashoka', '2023-03-31 18:04:44');

-- --------------------------------------------------------

--
-- Table structure for table `questions_table`
--

CREATE TABLE `questions_table` (
  `id` int(11) NOT NULL,
  `question` varchar(250) NOT NULL,
  `answer` varchar(250) NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions_table`
--

INSERT INTO `questions_table` (`id`, `question`, `answer`, `updated_date`) VALUES
(1, 'National Flower', 'Lotus', '2023-03-31 18:08:50'),
(2, 'National Flag', 'Tricolor', '2023-03-31 18:08:50'),
(3, 'National Tree', 'Banyan', '2023-03-31 18:08:50'),
(4, 'National Bird', 'Peacock', '2023-03-31 18:08:50'),
(5, 'National Currency', 'INR', '2023-03-31 18:08:50'),
(6, 'National Animal', 'Tiger', '2023-03-31 18:08:50'),
(7, 'National Song', 'Vande Mataram', '2023-03-31 18:08:50'),
(8, 'National Emblem', 'Lion Capital of Ashoka', '2023-03-31 18:08:50'),
(9, 'National River', 'Ganges', '2023-03-31 18:08:50'),
(10, 'National Fruit', 'Mango', '2023-03-31 18:08:50');

-- --------------------------------------------------------

--
-- Table structure for table `submit_table`
--

CREATE TABLE `submit_table` (
  `id` int(11) NOT NULL,
  `submited_ans` varchar(500) NOT NULL,
  `user_id` varchar(250) NOT NULL,
  `added_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `submit_table`
--

INSERT INTO `submit_table` (`id`, `submited_ans`, `user_id`, `added_date`) VALUES
(1, 'YToxMDp7aTowO3M6NToiVGlnZXIiO2k6MTtzOjA6IiI7aToyO3M6NzoiUGVhY29jayI7aTozO3M6MDoiIjtpOjQ7czowOiIiO2k6NTtzOjA6IiI7aTo2O3M6MDoiIjtpOjc7czowOiIiO2k6ODtzOjA6IiI7aTo5O3M6MDoiIjt9', '7401', '2023-04-01 18:37:58'),
(2, 'YToxMDp7aTowO3M6MDoiIjtpOjE7czowOiIiO2k6MjtzOjA6IiI7aTozO3M6NToiTG90dXMiO2k6NDtzOjA6IiI7aTo1O3M6NjoiR2FuZ2VzIjtpOjY7czowOiIiO2k6NztzOjA6IiI7aTo4O3M6MDoiIjtpOjk7czowOiIiO30=', '6342', '2023-04-01 18:39:38'),
(3, 'YToxMDp7aTowO3M6MDoiIjtpOjE7czowOiIiO2k6MjtzOjA6IiI7aTozO3M6MDoiIjtpOjQ7czo1OiJMb3R1cyI7aTo1O3M6NjoiR2FuZ2VzIjtpOjY7czo1OiJNYW5nbyI7aTo3O3M6MDoiIjtpOjg7czowOiIiO2k6OTtzOjA6IiI7fQ==', '2935', '2023-04-01 18:50:26'),
(4, 'YToxMDp7aTowO3M6MDoiIjtpOjE7czowOiIiO2k6MjtzOjA6IiI7aTozO3M6MDoiIjtpOjQ7czowOiIiO2k6NTtzOjA6IiI7aTo2O3M6MDoiIjtpOjc7czo1OiJNYW5nbyI7aTo4O3M6MDoiIjtpOjk7czozOiJJTlIiO30=', '4187', '2023-04-01 18:57:07'),
(5, 'YToxMDp7aTowO3M6NToiTG90dXMiO2k6MTtzOjU6IlRpZ2VyIjtpOjI7czowOiIiO2k6MztzOjA6IiI7aTo0O3M6MDoiIjtpOjU7czowOiIiO2k6NjtzOjA6IiI7aTo3O3M6MDoiIjtpOjg7czowOiIiO2k6OTtzOjA6IiI7fQ==', '9218', '2023-04-01 18:58:54'),
(6, 'YToxMDp7aTowO3M6NToiTG90dXMiO2k6MTtzOjg6IlRyaWNvbG9yIjtpOjI7czo2OiJCYW55YW4iO2k6MztzOjc6IlBlYWNvY2siO2k6NDtzOjM6IklOUiI7aTo1O3M6NToiVGlnZXIiO2k6NjtzOjE0OiJWYW5kZSBNYXRhcmFtCiI7aTo3O3M6MjI6Ikxpb24gQ2FwaXRhbCBvZiBBc2hva2EiO2k6ODtzOjY6IkdhbmdlcyI7aTo5O3M6NToiTWFuZ28iO30=', '2241', '2023-04-01 19:35:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer_table`
--
ALTER TABLE `answer_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions_table`
--
ALTER TABLE `questions_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submit_table`
--
ALTER TABLE `submit_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer_table`
--
ALTER TABLE `answer_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `questions_table`
--
ALTER TABLE `questions_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `submit_table`
--
ALTER TABLE `submit_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
