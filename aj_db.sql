-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2022 at 12:21 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aj_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `basket`
--

CREATE TABLE `basket` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `price` float NOT NULL,
  `type` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `alt_text` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `stock` int(11) NOT NULL,
  `sale` tinyint(4) DEFAULT 0
  `gender` varchar(11) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `type`, `image`, `desc`, `alt_text`, `created_at`, `updated_at`, `stock`, `sale`, `gender`) VALUES
(0, 'Earrings', 12, 1, 'images/diamondearrings.jpg', 'Round Cut Stud Earrings 6mm-Silver', 'information about the product', '2022-11-22', '2022-11-23', 5, `0`, `female`),
(1, 'Earrings', 18, 1, 'images/pearlearrings.jpg', 'Gold Huggie Pearl Drop Earrings', 'information about the product', '2022-11-22', '2022-11-23', 6, `0`, `female`),
(2, 'Earrings', 14, 1, 'images/pearlearrings2.jpg', 'Ines Pearl And Cz Drop Earrings-Rose Gold', 'information about the product', '2022-11-22', '2022-11-23', 3, `0`, `female`),
(3, 'Earrings', 11, 1, 'images/starearrings.jpg', 'Starburst Small Hoop Earrings-Rose Gold', 'information about the product', '2022-11-22', '2022-11-23', 9, `0`, `female`),
(4, 'Necklace', 11, 2, 'images/silverchain.jpg', 'Gold Chuncky Pendant Necklace', 'information about the product', '2022-11-22', '2022-11-23', 7, `0`, `female`),
(5, 'Necklace', 12, 2, 'images/heartchain.jpg', 'Gold Dimante Necklace', 'information about the product', '2022-11-22', '2022-11-23', 7, `0`, `female`),
(6, 'Necklace', 9, 2, 'images/pearlchain.jpg', 'Little Sea Shell Necklace', 'information about the product', '2022-11-22', '2022-11-23', 12, `0`, `female`),
(7, 'Necklace', 10, 2, 'images/salechain.jpg', 'Rose Gold Necklace', 'information about the product', '2022-11-22', '2022-11-23', 15, `0`, `female`),
(8, 'Ring', 12, 3, 'images/diamondring.jpg', 'Single Diamond Ring', 'information about the product', '2022-11-22', '0000-00-00', 10, `0`, `female`),
(9, 'Ring', 15, 3, 'images/goldring.jpg', 'Gold Princess Ring', 'information about the product', '2022-11-22', '0000-00-00', 12, `0`, `female`),
(10, 'Ring', 10, 3, 'images/goldring2.jpg', 'Detailed God Ring', 'information about the product', '2022-11-22', '0000-00-00', 5, `0`, `female`),
(11, 'Ring', 11, 3, 'images/silverrings.jpg', 'Silver Diamond Ring', 'information about the product', '2022-11-22', '0000-00-00', 13, `0`, `female`),
(12, 'Bracelet', 15, 4, 'images/salebraclet2.jpg', 'Worded Gold Bracelet', 'information about the product', '2022-11-22', '0000-00-00', 9, `0`, `female`),
(13, 'Bracelet', 9, 4, 'images/salebraclet3.jpg', 'Silver Bracelet', 'information about the product', '2022-11-22', '0000-00-00', 12, `0`, `female`),
(14, 'Bracelet', 20, 4, 'images/salebraclet4.jpg', 'Gold Chunky Bracelet', 'information about the product', '2022-11-22', '0000-00-00', 3, `0`, `female`),
(15, 'Bracelet', 18, 4, 'images/salebraclet5.jpg', 'Patterned Gold Bracelet', 'information about the product', '2022-11-22', '0000-00-00', 7, `0`, `female`);


-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `join_date` date NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `admin`, `email`, `password`, `join_date`, `fname`, `lname`) VALUES
(1, 'dfggdfgdf', 0, 'dfgdfgdf', 'dgdfgdf', '0000-00-00', 'dgfdgdf', 'dfgdfgdf'),
(2, 'dfgdfgdf', 0, 'dfgdfgdf', 'dfgdfgdf', '0000-00-00', 'fgfdgfd', 'dfgfdgdf'),
(3, 'dfgdfg', 0, 'dfgdfg', 'dfgdfgdf', '0000-00-00', 'dfgdfgdf', 'dfgdfgdf'),
(4, 'sfaasfa', 1, 'afdawsfaw', '$2y$10$P6GJeIts8EjlSQuBGZGKv.hQyfYOKZ.kx0/nqm13y02oshreKiFsC', '2022-11-25', 'test', 'dasdas');

-- --------------------------------------------------------

--
-- Table structure for table `user_address`
--

CREATE TABLE `user_address` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address_line1` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `address_line2` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `postcode` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_address`
--
ALTER TABLE `user_address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_address`
--
ALTER TABLE `user_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `basket`
--
ALTER TABLE `basket`
  ADD CONSTRAINT `basket_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `basket_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`),
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `user_address`
--
ALTER TABLE `user_address`
  ADD CONSTRAINT `user_address_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
