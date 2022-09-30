-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 04, 2022 at 03:22 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Kamo`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image_url`, `description`) VALUES
(9, 'rtgr', 'rty', 'https://media.ldlc.com/r1600/ld/products/00/05/81/99/LD0005819995_1.jpg', 'drgdfg'),
(10, 'imac', '500000', 'https://www.techinn.com/f/13781/137819846/apple-imac-27-5k-i7-3.8ghz-8gb-512gb-ssd-all-in-one-pc.jpg', 'erherhrthr'),
(12, 'samsung', '800000', 'https://www.electrorates.com/blogimg/Samsung_Galaxy_S22.webp', 'samsung 22\r\n'),
(13, 'xiaomi', '300000', 'https://media.router-switch.com/media/catalog/product/cache/b90fceee6a5fa7acd36a04c7b968181c/x/i/xiaomi-mi-11-ultra-5g.jpg', 'xiaomi mi 11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
