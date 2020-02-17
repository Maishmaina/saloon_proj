-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 17, 2020 at 03:30 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salon`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `c_id` int(11) NOT NULL,
  `c_name` text NOT NULL,
  `c_email` text NOT NULL,
  `c_password` text NOT NULL,
  `c_image` text NOT NULL,
  `c_gender` text NOT NULL,
  `c_location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`c_id`, `c_name`, `c_email`, `c_password`, `c_image`, `c_gender`, `c_location`) VALUES
(6, 'Githendu', 'agithendu@gmail.com', '$2y$05$45kYu1eiIIdWMqu9w4nBv.x0UEUCdtqZOE7FQNJUT3iEZU958W5Jq', 'avatar5.png', 'male', '105, Main Street'),
(7, 'Kanangoya', 'gkanangoya@gmail.com', '$2y$05$qeK6AlcPtOCIrMAngvxiVufk2kooktImxN/82SBj8z1mPjFWCyzjO', 'avatar04.png', 'male', 'Cabral Street');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `o_id` int(11) NOT NULL,
  `o_p_id` int(11) NOT NULL,
  `o_c_id` int(11) NOT NULL,
  `o_amount` int(11) NOT NULL,
  `o_invoice` text NOT NULL,
  `o_qty` int(11) NOT NULL,
  `o_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `o_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`o_id`, `o_p_id`, `o_c_id`, `o_amount`, `o_invoice`, `o_qty`, `o_date`, `o_status`) VALUES
(1, 2, 6, 200, '356788574', 1, '2020-02-09 12:26:31', 'pending'),
(2, 6, 7, 130, '5634782', 1, '2020-02-09 13:59:59', 'paid');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(11) NOT NULL,
  `p_title` text NOT NULL,
  `p_image` text NOT NULL,
  `p_price` int(50) NOT NULL,
  `p_desc` text NOT NULL,
  `p_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `p_title`, `p_image`, `p_price`, `p_desc`, `p_type`) VALUES
(1, 'body waxing', 'body_waxing.jpeg', 1000, 'Get the best services ever in our premises, if in need of our product contact us and we deliver product', 'service '),
(2, 'conditioning ', 'conditioning.jpg', 700, 'Get the best services ever in our premises, if in need of our product contact us and we deliver product', 'service'),
(3, 'hair cut', 'hair_cut.jpg', 500, 'Get the best services ever in our premises, if in need of our product contact us and we deliver product', 'service'),
(4, 'manicures', 'manicures.jpg', 1000, 'Get the best services ever in our premises, if in need of our product contact us and we deliver product', 'service'),
(5, 'massage', 'massage.jpg', 1500, 'Get the best services ever in our premises, if in need of our product contact us and we deliver product', 'service'),
(6, 'shampoos', 'shampoos.jpg', 2000, 'Get the best services ever in our premises, if in need of our product contact us and we deliver product', 'service'),
(7, 'men cut', 'hair_cutmen.jpg', 500, 'Get the best services ever in our premises, if in need of our product contact us and we deliver product', 'service');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
