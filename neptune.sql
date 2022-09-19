-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2022 at 11:20 PM
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
-- Database: `neptune`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `brand_photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_photo`) VALUES
(2, '165290847133771559.jpg'),
(3, '165290847897273769.jpg'),
(4, '16529084862164515.png'),
(6, '165290874139217141.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact_box`
--

CREATE TABLE `contact_box` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email_address` varchar(200) NOT NULL,
  `message` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` int(20) NOT NULL,
  `portfolio_title` varchar(200) NOT NULL,
  `portfolio_category` varchar(200) NOT NULL,
  `portfolio_description` longtext NOT NULL,
  `portfolio_photo` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `portfolio_title`, `portfolio_category`, `portfolio_description`, `portfolio_photo`) VALUES
(1, 'Autem consequat Ea ', 'Perferendis et moles', 'Vel asperiores cillu', '1.jpg'),
(3, 'Et non quis dolorem ', 'Incidunt id volupt', 'Nisi ea odio commodi', '3.png'),
(6, 'Voluptates repellend', 'Dolor reprehenderit ', 'Adipisci neque quas ', '6.png'),
(7, 'Odio qui sunt pariat', 'Facere aut aperiam i', 'Fugit qui sit dolo', '7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_counts`
--

CREATE TABLE `portfolio_counts` (
  `id` int(11) NOT NULL,
  `portfolio_number` varchar(200) NOT NULL,
  `portfolio_description` varchar(200) NOT NULL,
  `portfolio_icon` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio_counts`
--

INSERT INTO `portfolio_counts` (`id`, `portfolio_number`, `portfolio_description`, `portfolio_icon`, `status`) VALUES
(1, '253', 'Impedit beatae ab e', 'fa fa-address-book-o', 'active'),
(2, '706', 'Adipisicing mollit e', 'fa fa-address-card', 'active'),
(3, '66', 'Facilis nisi repudia', 'fa fa-bicycle', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `servies`
--

CREATE TABLE `servies` (
  `id` int(11) NOT NULL,
  `service_title` varchar(200) NOT NULL,
  `service_description` varchar(1000) NOT NULL,
  `service_icon` varchar(200) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `servies`
--

INSERT INTO `servies` (`id`, `service_title`, `service_description`, `service_icon`, `status`) VALUES
(1, 'Magnam molestiae qui', 'Molestiae sit vitae', 'fa fa-address-card', 'active'),
(2, 'Quis laboris volupta', 'Labore qui aliquid h', 'fa fa-bar-chart', 'active'),
(3, 'Nostrud possimus it', 'Minim minima accusan', 'fa fa-area-chart', 'active'),
(4, 'Cupidatat recusandae', 'Qui velit aliquip pa', 'fa fa-adjust', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `settings_name` varchar(200) NOT NULL,
  `settings_value` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `settings_name`, `settings_value`) VALUES
(1, 'owner_name', 'kH sagor'),
(2, 'owner_bio', 'Web Designer & Developer'),
(3, 'owner_about', 'A Web Designer, or Web Applications Designer, is responsible for designing the overall layout and aesthetic for websites. Their duties include coding webpages or entire websites, meeting with clients to review website templates or refine their designs and running tests to preview layouts and website features.'),
(4, 'owner_address', 'Dhaka, Bangladesh'),
(5, 'owner_email_address', 'creat.usmail.bd2@gmail.com'),
(6, 'owner_phone_number', '01626429927'),
(7, 'facebook', 'https://facebook.com/'),
(8, 'instagram', 'https://instagram.com/'),
(9, 'twitter', 'https://twitter.com/');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `skill_title` varchar(200) NOT NULL,
  `skill_description` varchar(200) NOT NULL,
  `skill_progress` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `client_name` varchar(200) NOT NULL,
  `client_title` varchar(1000) NOT NULL,
  `feedback` mediumtext NOT NULL,
  `client_photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email_address` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `account_status` varchar(20) NOT NULL DEFAULT 'active',
  `profile_photo_name` varchar(200) NOT NULL DEFAULT 'default_profile_photo.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_box`
--
ALTER TABLE `contact_box`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_counts`
--
ALTER TABLE `portfolio_counts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servies`
--
ALTER TABLE `servies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_box`
--
ALTER TABLE `contact_box`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `portfolio_counts`
--
ALTER TABLE `portfolio_counts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `servies`
--
ALTER TABLE `servies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
