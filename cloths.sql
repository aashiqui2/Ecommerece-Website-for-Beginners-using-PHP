-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2023 at 08:11 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `cloths`
--

CREATE TABLE `cloths` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_desc` text NOT NULL,
  `category_price` float(10,2) NOT NULL,
  `category_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cloths`
--

INSERT INTO `cloths` (`category_id`, `category_name`, `category_desc`, `category_price`, `category_image`) VALUES
(1, 'Amazing Frocks', 'A dress is a garment traditionally worn by women or girls consisting of a skirt with an attached bodice. It consists of a top piece that covers the torso and hangs down over the legs. A dress can be any one-piece garment containing a skirt of any length, and can be formal or casual', 800.00, './Images/cloth1.jpg'),
(2, 'Blue Gown', 'A gown, from the Saxon word, gunna, is a usually loose outer garment from knee-to-full-length worn by men and women in Europe from the Early Middle Ages to the 17th century, and continuing today in ', 990.00, './Images/cloth2.jpg'),
(3, 'Wedding Dress', 'A wedding dress or bridal gown is the dress worn by the bride during a wedding ceremony. The color, style and ceremonial importance of the gown can depend on the religion and culture of the wedding participants.', 3000.00, './Images/cloth3.jpg'),
(4, 'Full Gown', 'Gowns are often more comfortable than other types of dresses. Many gowns are made from flowing materials like silk or satin, making them more comfortable to wear than other types of dresses. Additionally, many gowns have built-in support systems that help keep them in place and minimize the need for shapewear.', 2000.00, './Images/cloth4.jpg'),
(5, 'Stylish Dress ', 'Fashion is a form of self-expression and autonomy at a particular period and place and in a specific context, of clothing, footwear, lifestyle, accessories, makeup, hairstyle, and body posture. The term implies a look defined by the fashion industry as that which is trending', 1500.00, './Images/cloth8.jpg'),
(6, 'Casual Cloths', 'Casual wear is a Western dress code that is relaxed, occasional, spontaneous and suited for everyday use. Casual wear became popular in the Western world following the counterculture of the 1960s. When emphasising casual wear\'s comfort, it may be referred to as leisurewear or loungewear.', 2500.00, './Images/cloth6.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cloths`
--
ALTER TABLE `cloths`
  ADD PRIMARY KEY (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cloths`
--
ALTER TABLE `cloths`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
