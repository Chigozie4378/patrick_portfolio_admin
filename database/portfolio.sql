-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2024 at 11:02 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `body` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `image2` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `body`, `image`, `image2`) VALUES
(1, 'Lorem', '<p>loremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremlorem</p><p>loremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremlorem</p><p>loremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremlorem</p>', '../assets/images/cytonn-photography-ZJEKICY5EXY-unsplash.jpg', '../../patrick_portfolio_admin/assets/images/cytonn-photography-ZJEKICY5EXY-unsplash.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `introduction`
--

CREATE TABLE `introduction` (
  `id` int(11) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `introduction`
--

INSERT INTO `introduction` (`id`, `body`) VALUES
(1, 'Welcome to SoftSkan We help our clients achieve success by helping them see more from their data and making informed decisions.');

-- --------------------------------------------------------

--
-- Table structure for table `mission`
--

CREATE TABLE `mission` (
  `id` int(11) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mission`
--

INSERT INTO `mission` (`id`, `body`) VALUES
(1, '<p>Our mission is to be a trusted partner and a reference point for companies dealing with Information &amp; Communication Technology (ICT) related issues, especially in the areas of big data, data/information management; business intelligence; technology architecture; technology project management and technology consulting services.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `emphasize` text NOT NULL,
  `introduction` text NOT NULL,
  `body` text NOT NULL,
  `link` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `emphasize`, `introduction`, `body`, `link`) VALUES
(45, 'Data Science', 'Data Science Data Science Data Science Data Science Data Science Data Science Data Science Data Science Data Science Data Science Data Science Data Science Data Science', '<p>This Data science key note This Data science key note This Data science key note This Data science key note This Data science key note This Data science key note This Data science key note This Data science key note This Data science key note This Data science key note</p>', '<p>This is Data Science Intoduction This is Data Science Intoduction This is Data Science Intoduction This is Data Science Intoduction This is Data Science Intoduction This is Data Science Intoduction This is Data Science Intoduction This is Data Science Intoduction This is Data Science Intoduction This is Data Science Intoduction</p><p>This is Data Science Intoduction This is Data Science Intoduction This is Data Science Intoduction This is Data Science Intoduction This is Data Science Intoduction This is Data Science Intoduction This is Data Science Intoduction This is Data Science Intoduction</p>', '<p>This Data science body  This Data science body  This Data science body  This Data science body  This Data science body  This Data science body  This Data science body  This Data science body  This Data science body  This Data science body  This Data science body  This Data science body  This Data science body  This Data science body  This Data science body  This Data science body</p><p>This Data science body  This Data science body  This Data science body  This Data science body  This Data science body  This Data science body  This Data science body  This Data science body  This Data science body  This Data science body  This Data science body  This Data science body  This Data science body  This Data science body</p><p>This Data science body  This Data science body  This Data science body  This Data science body  This Data science body  This Data science body  This Data science body  This Data science body  This Data science body  This Data science body</p>', '../../patrick_portfolio/pages/services/data_science.php');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `image2` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `image`, `image2`) VALUES
(6, 'Data Science', '../assets/images/austin-distel-wD1LRb9OeEo-unsplash.jpg', '../../patrick_portfolio_admin/assets/images/austin-distel-wD1LRb9OeEo-unsplash.jpg'),
(7, 'Data Warehouse', '../assets/images/photo-1544006659-f0b21884ce1d (1).avif', '../../patrick_portfolio_admin/assets/images/photo-1544006659-f0b21884ce1d (1).avif'),
(8, 'DataBase', '../assets/images/towfiqu-barbhuiya-Q69veNk1iJQ-unsplash.jpg', '../../patrick_portfolio_admin/assets/images/towfiqu-barbhuiya-Q69veNk1iJQ-unsplash.jpg'),
(9, 'Web Design', '../assets/images/images (1).jpeg', '../../patrick_portfolio_admin/assets/images/images (1).jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `introduction`
--
ALTER TABLE `introduction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mission`
--
ALTER TABLE `mission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `introduction`
--
ALTER TABLE `introduction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mission`
--
ALTER TABLE `mission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
