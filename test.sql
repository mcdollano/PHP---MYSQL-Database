-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2017 at 10:50 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `image`, `price`, `category`) VALUES
(4, 'Herschel 3', '  color blue', 'images/item3.jpg', '  Php 3,700.00', 'Herschel'),
(5, 'Herschel 4', 'color blue', 'images/item6.jpg', 'Php 4,000.00', 'Herschel'),
(6, 'Herschel 5', 'color blue', 'images/item7.jpg', 'Php 4,000.00', 'Herschel'),
(7, 'Herschel 6', 'color blue', 'images/item8.jpg', 'Php 3,500.00', 'Herschel'),
(8, 'Kate Spade 1', 'color brown with floral design', 'images/kate1.jpg', 'Php 4,500.00', 'Kate Spade'),
(9, 'Kate Spade 2', 'color blue with floral design', 'images/kate2.jpg', 'Php 5,500.00', 'Kate Spade'),
(10, 'Kate Spade 3', 'color brown', 'images/kate3.jpg', 'Php 5,500.00', 'Kate Spade'),
(11, 'Kate Spade 4', 'color red', 'images/kate4.jpg', 'Php 5,500.00', 'Kate Spade'),
(12, 'Kate Spade 5', 'color black', 'images/kate5.jpg', 'Php 5,500.00', 'Kate Spade'),
(13, 'Kate Spade 6', 'color red', 'images/kate6.jpg', 'Php 5,500.00', 'Kate Spade'),
(14, 'Herschel 17', 'item number 17', 'images/item17.jpg', '5000', 'Herschel'),
(15, 'Herschel 16', 'item number 16', 'images/item16.jpg', '4500', 'Herschel');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'root', 'secret', 'regular'),
(4, 'hello', 'world', 'regular'),
(5, 'abcd', 'abcd', 'regular'),
(14, 'test', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'regular'),
(15, 'haha', '637d1f5c6e6d1be22ed907eb3d223d858ca396d8', 'regular'),
(17, 'newuser', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'regular');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
