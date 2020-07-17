-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2020 at 12:04 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab_work`
--

-- --------------------------------------------------------

--
-- Table structure for table `api_keys`
--

CREATE TABLE `api_keys` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `api_key` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `api_keys`
--

INSERT INTO `api_keys` (`id`, `user_id`, `api_key`) VALUES
(31, 45, '8666VNRNAmzsNpHPCYlgXy6Cuk9g6laYhVFk558EIE8ELDxchVZHoao6fLPlVQhw'),
(32, 45, 'SmesCYtazxOdFxRohi0hcyz4QbGMb3a8yJcNa9F5i0gsfNL1vlLbWV4wnDNlOezn'),
(33, 45, 'KPvDqsOKGFmqx9fmL6zH8XIvVNSrbRiQEv29bz5kPiRM03Y3Uj2DrQPkpnpuhTyn'),
(34, 45, 'xy2cLWm5mxQ55ub5gsq0r0WrQ0hT1DfKQF7SodgDTFo25S3OGtLXngoAWDLFxwXo');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_name` varchar(255) NOT NULL,
  `units` int(11) DEFAULT NULL,
  `unit_price` double(3,2) DEFAULT NULL,
  `order_status` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) DEFAULT NULL,
  `user_city` varchar(32) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `img_name` varchar(200) NOT NULL,
  `created_time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `offset` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `user_city`, `username`, `password`, `img_name`, `created_time`, `offset`) VALUES
(42, 'Alvin ', 'Kariuki', 'Nairobi', 'alkari', '$2y$10$AI03MPat7x76oDHA1KD.KupQOYBf2VftQ6Mt3VZS4JJa9Y2WTAjhK', 'blood.jpg', '2020-05-21 21:37:17.598797', -180),
(43, 'Alvin ', 'Kamau', 'Nairobi', 'alkari_vin', '$2y$10$fpPwLu5vqXxPGpGqrN8wxuppLLCf.3ENS1ZeDHOu6MoVnhDv9k6Wy', 'code.PNG', '2020-05-31 19:52:50.865505', -180),
(44, 'witney', 'Karimi', 'Kiambani', 'witicer', '$2y$10$v4d.ti.pzFMLn1Hh4gILxu5FbJtD26XEHFS1rg7bSY7PguSCeZsj6', 'artur.jpg', '2020-06-01 20:25:25.511146', -180),
(45, 'Alvin ', 'kalasham', 'Nairobi', '111208', '$2y$10$wb6ttYutQyEhGz/HpB84SOeNb0qgxj1dUUlmsF3GYiQDVc0uz2U5.', '1-13898_free-download-boku-no-hero-academia-wallpaper-id.jpg', '2020-06-22 09:20:58.126243', -180);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `api_keys`
--
ALTER TABLE `api_keys`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `api_keys`
--
ALTER TABLE `api_keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `api_keys`
--
ALTER TABLE `api_keys`
  ADD CONSTRAINT `api_keys_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
