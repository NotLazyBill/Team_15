-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2022 at 09:04 PM
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
  `type` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `alt_text` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `stock` int(11) NOT NULL,
  `sale` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `type`, `image`, `desc`, `alt_text`, `created_at`, `updated_at`, `stock`, `sale`) VALUES
(1, 'Round Cut Stud Earrings 6mm-Silver', 12, 'women-earrings', 'images/diamondearrings.jpg', '1', 'round-cut-stud-earrings', '2022-11-22', '2022-11-23', 5, 1),
(2, 'Gold Huggie Pearl Drop Earrings', 18, 'women-earrings', 'images/pearlearrings.jpg', '1', 'gold-huggie-pearl-earrings', '2022-11-22', '2022-11-23', 6, 1),
(3, 'Ines Pearl And Cz Drop Earrings-Rose Gold', 14, 'women-earrings', 'images/pearlearrings2.jpg', '1', 'ines-pearl-rose-gold-earrings', '2022-11-22', '2022-11-23', 3, 1),
(4, 'Starburst Small Hoop Earrings-Rose Gold', 11, 'women-earrings', 'images/starearrings.jpg', '1', 'starburst-earrings', '2022-11-22', '2022-11-23', 9, 1),
(5, 'Gold Chuncky Pendant Necklace', 11, 'women-necklace', 'images/silverchain.jpg', '2', 'gold-chunky-necklace', '2022-11-22', '2022-11-23', 7, 1),
(6, 'Gold Dimante Necklace', 12, 'women-necklace', 'images/heartchain.jpg', '2', 'gold-dimante-necklace', '2022-11-22', '2022-11-23', 7, 1),
(7, 'Little Sea Shell Necklace', 9, 'women-necklace', 'images/pearlchain.jpg', '2', 'little-shell-necklace', '2022-11-22', '2022-11-23', 12, 1),
(8, 'Rose Gold Necklace', 10, 'women-necklace', 'images/salechain.jpg', '2', 'rose-gold-necklace', '2022-11-22', '2022-11-23', 15, 1),
(9, 'Single Diamond Ring', 12, 'women-ring', 'images/diamondring.jpg', '3', 'single-diamong-ring', '2022-11-22', '0000-00-00', 10, 1),
(10, 'Gold Princess Ring', 15, 'women-ring', 'images/goldring.jpg', '3', 'gold-princess-ring', '2022-11-22', '0000-00-00', 12, 1),
(11, 'Detailed God Ring', 10, 'women-ring', 'images/goldring2.jpg', '3', 'detailed-gold-ring', '2022-11-22', '0000-00-00', 5, 1),
(12, 'Silver Diamond Ring', 11, 'women-ring', 'images/silverrings.jpg', '3', 'silver-diamond-ring', '2022-11-22', '0000-00-00', 13, 1),
(13, 'Worded Gold Bracelet', 15, 'women-bracelet', 'images/salebraclet2.jpg', '4', 'worded-gold-bracelet', '2022-11-22', '0000-00-00', 9, 1),
(14, 'Silver Bracelet', 9, 'women-bracelet', 'images/salebraclet3.jpg', '4', 'silver-bracelet', '2022-11-22', '0000-00-00', 12, 1),
(15, 'Gold Chunky Bracelet', 20, 'women-bracelet', 'images/salebraclet4.jpg', '4', 'gold-chunky-bracelet', '2022-11-22', '0000-00-00', 3, 1),
(16, 'Patterned Gold Bracelet', 18, 'women-bracelet', 'images/salebraclet5.jpg', '4', 'patterned-gold-bracelet', '2022-11-22', '0000-00-00', 7, 1),
(17, 'Silver Guardian Angel Bracelet', 17, 'women-bracelet', 'images/shop/bracelets/guardian-angel-bracelet.jpg', '4', 'guardian-angel-bracelet', '2022-11-28', '2022-11-29', 9, 0),
(18, 'Plain Silver Bracelet', 13, 'women-bracelet', 'images/shop/bracelets/plain-silver-bracelet.jpg', '4', 'plain-silver-bracelet', '2022-11-28', '2022-11-29', 5, 0),
(19, 'Teardrop Shaped Gemstone Silver Bracelet', 25, 'women-bracelet', 'images/shop/bracelets/teardrop-bracelet.jpg', '4', 'teardrop-bracelet', '2022-11-28', '2022-11-29', 11, 0),
(20, 'Plain Silver Bangle', 15, 'women-bracelet', 'images/shop/bracelets/plain-silver-bangle-bracelet.jpg', '4', 'plain-silver-bangle-bracelet', '2022-11-28', '2022-11-29', 5, 0),
(21, 'Silver Butterfly Bracelet', 18, 'women-bracelet', 'images/shop/bracelets/silver-butterfly-bracelet.jpg', '4', 'silver-butterfly-bracelet', '2022-11-28', '2022-11-29', 3, 0),
(22, 'Oval Cut Gemstone Bracelet', 25, 'women-bracelet', 'images/shop/bracelets/oval-cut-gemstone-bracelet.jpg', '4', 'oval-cut-gemstone-bracelet', '2022-11-28', '2022-11-29', 1, 0),
(23, 'Green Amber Square Gemstone Bracelet', 27, 'women-bracelet', 'images/shop/bracelets/green-amber-square-gemstone-bracelet.jpg', '4', 'green-amber-square-gemstone-bracelet', '2022-11-28', '2022-11-29', 10, 0),
(24, 'Gold Heart Necklace', 18, 'women-necklace', 'images/shop/necklaces/gold-heart-necklace.jpg', '2', 'gold-heart-necklace', '2022-11-28', '2022-11-29', 9, 0),
(25, 'Gold Four Leaf Clover Necklace', 18, 'women-necklace', 'images/shop/necklaces/gold-four-leaf-clover-necklace.jpg', '2', 'gold-four-leaf-clover-necklace', '2022-11-28', '2022-11-29', 9, 0),
(26, '3 Heart Necklace', 22, 'women-necklace', 'images/shop/necklaces/3-heart-necklace.jpg', '2', '3-heart-necklace', '2022-11-28', '2022-11-29', 9, 0),
(27, 'Flower with Pearl Necklace', 20, 'women-necklace', 'images/shop/necklaces/flower-pearl-necklace.jpg', '2', 'flower-pearl-necklace', '2022-11-28', '2022-11-29', 9, 0),
(28, 'Mermaid Necklace', 20, 'women-necklace', 'images/shop/necklaces/mermaid-necklace.jpg', '2', 'mermaid-necklace', '2022-11-28', '2022-11-29', 9, 0),
(29, 'Hollow Heart Necklace', 16, 'women-necklace', 'images/shop/necklaces/hollow-heart-necklace.jpg', '2', 'hollow-heart-necklace', '2022-11-28', '2022-11-29', 9, 0),
(30, 'Poppies Necklace', 27, 'women-necklace', 'images/shop/necklaces/poppies-necklace.jpg', '2', 'poppies-necklace', '2022-11-28', '2022-11-29', 9, 0),
(31, 'Emerald Gold Hoop Earrings', 24, 'women-earrings', 'images/shop/earrings/emerald-gold-hoop-earrings.jpg', '1', 'emerald-gold-hoop-earrings', '2022-11-28', '2022-11-29', 1, 0),
(32, 'Double Hoop Diamond Earrings', 25, 'women-earrings', 'images/shop/earrings/double-hoop-diamond-earrings.jpg', '1', 'double-hoop-diamond-earrings', '2022-11-28', '2022-11-29', 3, 0),
(33, 'Pearl Earrings', 20, 'women-earrings', 'images/shop/earrings/pearl-earrings.jpg', '1', 'pearl-earrings', '2022-11-28', '2022-11-29', 9, 0),
(34, 'Diamond Star Earrings', 27, 'women-earrings', 'images/shop/earrings/diamond-star-earrings.jpg', '1', 'diamond-star-earrings', '2022-11-28', '2022-11-29', 7, 0),
(35, 'Pastel Heart Earrings', 20, 'women-earrings', 'images/shop/earrings/pastel-heart-earrings.jpg', '1', 'pastel-heart-earrings', '2022-11-28', '2022-11-29', 1, 0),
(36, 'Diamond & Gold Round Earrings', 30, 'women-earrings', 'images/shop/earrings/diamond-gold-round-earrings.jpg', '1', 'diamond-gold-round-earrings', '2022-11-28', '2022-11-29', 7, 0),
(37, 'Flower Earrings', 25, 'women-earrings', 'images/shop/earrings/flower-earrings.jpg', '1', 'flower-earrings', '2022-11-28', '2022-11-29', 11, 0),
(38, 'Purple Gemstone Ring', 25, 'women-ring', 'images/shop/rings/purple-gemstone-ring.jpg', '3', 'purple-gemstone-ring', '2022-11-28', '2022-11-29', 9, 0),
(39, 'Black Diamond Ring', 25, 'women-ring', 'images/shop/rings/black-diamond-ring.jpg', '3', 'black-diamond-ring', '2022-11-28', '2022-11-29', 4, 0),
(40, 'Gold & Black Heart Ring', 20, 'women-ring', 'images/shop/rings/gold-black-heart-ring.jpg', '3', 'gold-black-heart-ring', '2022-11-28', '2022-11-29', 3, 0),
(41, 'Infinite Hearts Ring', 25, 'women-ring', 'images/shop/rings/infinite-hearts-ring.jpg', '3', 'infinite-hearts-ring', '2022-11-28', '2022-11-29', 9, 0),
(42, 'Silver Love Ring', 25, 'women-ring', 'images/shop/rings/silver-love-ring.jpg', '3', 'silver-love-ring', '2022-11-28', '2022-11-29', 15, 0),
(43, 'Joined Hearts Ring', 27, 'women-ring', 'images/shop/rings/joined-hearts-ring.jpg', '3', 'joined-hearts-ring', '2022-11-28', '2022-11-29', 12, 0),
(44, 'Pink & Gold Bracelet Watch', 40, 'women-watch', 'images/shop/watches/pink-gold-bracelet-watch.jpg', '5', 'pink-gold-bracelet-watch', '2022-11-28', '2022-11-29', 9, 0),
(45, 'Minimalistic Gold & White Watch', 45, 'women-watch', 'images/shop/watches/minimalistic-gold-white-watch.jpg', '5', 'minimalistic-gold-white-watch', '2022-11-28', '2022-11-29', 6, 0),
(46, 'Silver & Grey Watch', 38, 'women-watch', 'images/shop/watches/silver-grey-watch.jpg', '5', 'silver-grey-watch', '2022-11-28', '2022-11-29', 8, 0),
(47, 'Casual Timeless Watch', 35, 'women-atch', 'images/shop/watches/casual-timeless-watch.jpg', '5', 'casual-timeless-watch', '2022-11-28', '2022-11-29', 2, 0),
(48, 'Rose Gold Stars Watch', 45, 'women-watch', 'images/shop/watches/rose-gold-stars-watch.jpg', '5', 'rose-gold-stars-watch', '2022-11-28', '2022-11-29', 12, 0),
(49, 'Wooden Strap Watch', 38, 'women-watch', 'images/shop/watches/wooden-strap-watch.jpg', '5', 'wooden-strap-watch', '2022-11-28', '2022-11-29', 9, 0);

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_address`
--
ALTER TABLE `user_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
