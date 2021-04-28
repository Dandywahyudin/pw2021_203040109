-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2021 at 05:03 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw2021_203040109`
--

-- --------------------------------------------------------

--
-- Table structure for table `latihan4a`
--

CREATE TABLE `latihan4a` (
  `id` int(11) NOT NULL,
  `No` varchar(100) NOT NULL,
  `Picture` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `Price` varchar(100) NOT NULL,
  `Size` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `latihan4a`
--

INSERT INTO `latihan4a` (`id`, `No`, `Picture`, `Name`, `Description`, `Price`, `Size`) VALUES
(1, '1.', 'hitam1.jfif', 'Black Hoodie', 'SIZE: Long sleeve STYLE: Hooded top COMPOSITION: Cotton 60%, Polyester 40% CARE INSTRUCTIONS: Machine wash at 40°', 'IDR.299.900', 'S M L XL'),
(2, '2.', 'putih2.jfif', 'White Hoodie', 'SIZE: Long sleeve STYLE: Hooded top COMPOSITION: Cotton 60%, Polyester 40% CARE INSTRUCTIONS: Machine wash at 40°', 'IDR.299.900', 'S M L XL'),
(3, '3.', 'merah3.jfif', 'Red Hoodie', 'SIZE: Long sleeve STYLE: Hooded top COMPOSITION: Cotton 60%, Polyester 40% CARE INSTRUCTIONS: Machine wash at 40°', 'IDR.299.900', 'S M L XL'),
(4, '4.', 'navy4.jfif', 'Navy Hoodie', 'SIZE: Long sleeve STYLE: Hooded top COMPOSITION: Cotton 60%, Polyester 40% CARE INSTRUCTIONS: Machine wash at 40°', 'IDR.299.900', 'S M L XL'),
(5, '5.', 'baju1.png', 'Black Tshirt', 'SIZE: Short sleeve FIT: Slim fit STYLE: Round neck COMPOSITION: Cotton 100% CARE INSTRUCTIONS: Machine wash at 40°', 'IDR.155.000', 'S M L XL'),
(6, '6.', 'baju2.png', 'Maroon Tshirt', 'SIZE: Short sleeve FIT: Slim fit STYLE: Round neck COMPOSITION: Cotton 100% CARE INSTRUCTIONS: Machine wash at 40°', 'IDR.155.000', 'S M L XL'),
(7, '7.', 'baju3.png', 'Yellow Tshirt', 'SIZE: Short sleeve FIT: Slim fit STYLE: Round neck COMPOSITION: Cotton 100% CARE INSTRUCTIONS: Machine wash at 40°', 'IDR.155.000', 'S M L XL'),
(8, '8.', 'baju4.jfif', 'White Tshirt', 'SIZE: Short sleeve FIT: Slim fit STYLE: Round neck COMPOSITION: Cotton 100% CARE INSTRUCTIONS: Machine wash at 40°', 'IDR.155.000', 'S M L XL'),
(11, '11.', 'crewneck1.png', 'Green Crewneck', 'SIZE: Long sleeve FIT: Regular fit STYLE: Crewneck, Sweatshirt COMPOSITION: Cotton 60%, Polyester 40% elasticrib Cotton 97%, Elastane 3% CARE INSTRUCTIONS: Machine wash at 40°', 'IDR.249.000', 'S M L XL'),
(12, '12.', 'crewneck2.jfif', 'Black Crewneck', 'SIZE: Long sleeve FIT: Regular fit STYLE: Crewneck, Sweatshirt COMPOSITION: Cotton 60%, Polyester 40% elasticrib Cotton 97%, Elastane 3% CARE INSTRUCTIONS: Machine wash at 40°', 'IDR.249.000', 'S M L XL'),
(13, '13.', 'crewneck3.jfif', 'Orange Crewneck', 'SIZE: Long sleeve FIT: Regular fit STYLE: Crewneck, Sweatshirt COMPOSITION: Cotton 60%, Polyester 40% elasticrib Cotton 97%, Elastane 3% CARE INSTRUCTIONS: Machine wash at 40°', 'IDR.249.000', 'S M L XL'),
(14, '14.', 'crewneck4.png', 'Navy Crewneck', 'SIZE: Long sleeve FIT: Regular fit STYLE: Crewneck, Sweatshirt COMPOSITION: Cotton 60%, Polyester 40% elasticrib Cotton 97%, Elastane 3% CARE INSTRUCTIONS: Machine wash at 40°', 'IDR.249.000', 'S M L XL');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `latihan4a`
--
ALTER TABLE `latihan4a`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `latihan4a`
--
ALTER TABLE `latihan4a`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
