-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 21, 2022 at 07:04 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Productdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `Producttb`
--

CREATE TABLE `Producttb` (
  `id` int(11) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Producttb`
--

INSERT INTO `Producttb` (`id`, `product_name`, `product_price`, `product_image`) VALUES
(1, 'G\'ilof', 560, './img/chehol.png'),
(2, 'airpods', 400, './img/airpods2.jpeg'),
(8, 'hw56plus', 999, './img/product/hw56plus3.jpg'),
(10, 'm16plus', 999, './img/product/m16plus2.jpeg\r\n'),
(11, 'COWIN C7', 333, './img/product/Cowin_SE7.jpg'),
(12, 'Powerbank', 444, './img/product/Powerbank.webp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Producttb`
--
ALTER TABLE `Producttb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Producttb`
--
ALTER TABLE `Producttb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
