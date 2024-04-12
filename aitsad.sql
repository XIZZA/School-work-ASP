-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2024 at 09:24 AM
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
-- Database: `aitsad`
--

-- --------------------------------------------------------

--
-- Table structure for table `mailing_list`
--

CREATE TABLE `mailing_list` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mailing_list`
--

INSERT INTO `mailing_list` (`id`, `email`) VALUES
(0, 'ebaraka@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `usertype`) VALUES
(2, 'Emmanuel Baraka', 'ebaraka@gmail.com', '$2y$10$FoYKjHkoj5WI.4m/udjXzueEUzLrONsKZpaRM2J1IJyCJ4cPP0a12', 'Company'),
(3, 'Felix Kyalo', 'fkyalo@gmail.com', '$2y$10$YIkW1oXkYATiIEoMKQ7JnOQYGidKsHxMRt5vUkDeMLlkrwytTo4xG', 'Administrator'),
(4, 'James Kariuki', 'jamesk@gmail.com', '$2y$10$0l67qgOp55Ru3XTvlOe8M.8ZP7XKA8UxhrMy8AaatzZqo2SByFsy2', 'Company'),
(5, 'Jordan Peterson', 'peterson@gmail.com', '$2y$10$ymFtwxXMl7JXFVVHimrW8.x1qeKnoe76YGh/kwnuGCuxwL.VD80ma', 'Company');

-- --------------------------------------------------------

--
-- Table structure for table `user_responses`
--

CREATE TABLE `user_responses` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_type` varchar(50) DEFAULT NULL,
  `company_type` varchar(50) DEFAULT NULL,
  `how_found` varchar(50) DEFAULT NULL,
  `statement_1` varchar(255) DEFAULT NULL,
  `statement_2` varchar(255) DEFAULT NULL,
  `organization_description` text DEFAULT NULL,
  `aitsad_discovery_method` varchar(50) DEFAULT NULL,
  `improvement_1` varchar(255) DEFAULT NULL,
  `improvement_2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mailing_list`
--
ALTER TABLE `mailing_list`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`) USING HASH;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `user_responses`
--
ALTER TABLE `user_responses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_responses`
--
ALTER TABLE `user_responses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
