-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2023 at 05:01 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cname` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`id`, `fname`, `lname`, `email`, `cname`, `phone`, `country`, `message`) VALUES
(1, 'A.M. Charitha Bimsara', 'Adikari', 'Charithabimsara@gmail.com', 'DEWPhotograpy', '0719934597', 'Sri Lanka', 'ss'),
(2, 'A.M. Charitha Bimsara', 'Adikari', 'Charithabimsara@gmail.com', 'DEWPhotograpy', '0719934597', 'Sri Lanka', 'sss'),
(3, 'A.M. Charitha Bimsara', 'Adikari', 'Charithabimsara@gmail.com', 'DEWPhotograpy', '0719934597', 'Sri Lanka', 's'),
(4, 'A.M. Charitha Bimsara', 'Adikari', 'Charithabimsara@gmail.com', 'DEWPhotograpy', '0719934597', 'Sri Lanka', 'kkkkkkkkkkkkk');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(10) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `salt` varchar(3) NOT NULL,
  `password` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `fname`, `lname`, `email`, `salt`, `password`) VALUES
(62, '11', 'Adikari', 'Charithabimsara@gmail.com', '78b', 'b3a6da263deea5467db9f2452d7d26fcf123f843335c887db18892047143d3f6'),
(63, '33', '33', '33@gmail.com', '812', '332e2888db9f7f478e3f485d89393d08234b1c5e83e738e1dd1149a42f8bf91b'),
(64, 'A.M. Charitha Bimsara', 'Adikari', 'saman@gmail.com', '39d', '9120e596744d590326bcbd6670d2c0b9c16658256b70b551cce475c64417f103');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `title`, `description`, `created_at`) VALUES
(8, 'Phishing', 'Organized a phishing simulation campaign to educate employees about email security.', '2023-08-12 14:31:58'),
(9, 'Secure Web Application Development', 'Built a web application with strong security features, including input validation and authentication.', '2023-08-12 14:31:58'),
(10, 'Security Awareness Training', 'Provided security awareness training to employees to enhance their understanding of cybersecurity best practices.', '2023-08-12 14:31:58');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `review` text NOT NULL,
  `rating` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `review`, `rating`, `created_at`) VALUES
(27, 'Alex Williams', 'Amazing customer service. The product exceeded my expectations.', 5, '2023-08-14 10:00:00'),
(49, 'Saman Kulathunga', 'Amazing Service', 4, '2023-08-12 20:26:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
