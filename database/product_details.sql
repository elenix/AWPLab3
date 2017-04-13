-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2017 at 07:37 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beautycup`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `id` int(11) NOT NULL,
  `path` varchar(500) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `discaunt` int(11) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`id`, `path`, `name`, `description`, `discaunt`, `price`) VALUES
(1, 'picture/A.jpg', 'Chocolate cream', 'Very good for someone who are white wanted to turn their skin darker', 50, 100.5),
(2, 'picture/B.jpg', 'Pink Nail', 'you want your nail look pink-pink? buy this. it will turn your nail to pink in 5 sec! trust me!', 30, 70.9),
(3, 'picture/K.jpg', 'Iphone 10', 'This the best phone you ever get! its limited edition! Apple still not aired this phone yet! You must get it before other people buy it! trust us..', 10, 10.9),
(4, 'picture/D.jpg', 'Black Lipstick', 'Halloween day is coming guys! It\'s time for you to change your normal style! Use this lipstick to make you look like a zombie kampung pisang! Discount only for today!', 30, 50.3),
(5, 'picture/E.jpg', 'Green face mask', 'muka anda berjerawat? tiada masalah lagi jika anda menggunakan product ini! Ianya mampu menghilangkan jerawat anda dalam masa sehari! cuba sendiri la malas cakap banyak', 30, 30.9),
(6, 'picture/F.jpg', 'White face mask', 'muka anda hitam teroks? tiada masalah lagi jika anda menggunakan product ini! Ianya mampu memutihkan wajah anda dalam masa sehari! cuba sendiri la malas cakap banyak', 40, 80.7),
(7, 'picture/G.jpg', 'ASUS Zenfone ', 'This phone so good in winter season! it could turn your house warmer! Just on this phone and it heat your house. the battery long last 1 year!', 10, 700.2),
(8, 'picture/I.jpg', 'Camera Lens Mug', 'Every photographer have issue exhausted when taking picture. they need water while capturing a good photo. this camera Lens mug can help them drink while taking picture thru eye!', 20, 100.4),
(9, 'picture/H.jpg', 'Conan Shoe', 'Do you want to become detective like Conan Edogawa?? Buy this shoe! This shoe can sot the ball to the criminal if he try to run away after got discovered by your inspection!', 33, 77.9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
