-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2025 at 04:30 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nature_glass`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id_address` int(10) NOT NULL,
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `postcode` int(5) NOT NULL,
  `detailAddress` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id_address`, `id`, `username`, `phone`, `provinsi`, `kota`, `kecamatan`, `postcode`, `detailAddress`) VALUES
(1, 13, 'UAS', '081234567890', 'DKI Jakarta', 'Jakarta Selatan', 'Pasar Minggu', 12560, '');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(5) NOT NULL,
  `id` int(10) NOT NULL,
  `id_product` int(10) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id_cart`, `id`, `id_product`, `qty`) VALUES
(1, 11, 1, 2),
(2, 11, 2, 1),
(11, 11, 3, 2),
(12, 13, 1, 2),
(13, 13, 2, 2),
(14, 13, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int(10) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `p_description` text NOT NULL,
  `p_price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `p_name`, `p_description`, `p_price`) VALUES
(1, 'Dune Terrarium', 'Di dalam terrarium ini terdapat lapisan pasir dan tanah yang disusun dengan rapi. Tumbuhan yang digunakan adalah jenis yang tahan di medan kering yang memberikan sentuhan hijau alami. Selain itu, terdapat juga batu hiasan yang menambah estetika dan keindahan terrarium ini, menambah elemen dekoratif yang unik dan menarik. Dilengkapi alas kayu bundar, memberikan kesan alami dan elegan.', 50000),
(2, 'Forest Terrarium', 'Di dalam terrarium ini terdapat lumut hijau yang segar, tanaman sukulen, dan elemen dekoratif yang menyerupai batu dengan sarang kecil di atasnya, yang berisi dua figur burung kuning. Dasar terrarium ini dilapisi dengan kerikil putih kecil dan tanah gelap. Penampilan keseluruhan didominasi oleh warna hijau segar, memberikan kesan yang hidup dan bersemangat. Terrarium ini menciptakan ekosistem mini yang mandiri dan dapat digunakan sebagai hiasan dalam ruangan.', 50000),
(3, 'Barren Desert Terrarium', 'Di dalam terrarium ini terdapat lapisan pasir yang dominan, menciptakan suasana seperti padang pasir yang tandus. Tumbuhan yang digunakan adalah jenis yang sangat tahan terhadap kondisi kering, seperti kaktus kecil dan sukulen. Selain itu, terdapat batu-batu kecil yang tersebar di sekitar tanaman, menambah kesan alami dan realistis dari padang pasir. Terrarium ini memberikan nuansa minimalis dan eksotis, cocok untuk dekorasi ruangan yang ingin menampilkan keindahan alam yang sederhana namun menawan.', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `id` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `role` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`id`, `email`, `password`, `username`, `role`) VALUES
(1, 'test@gmail.com', '123', 'Admin', 'adm'),
(2, 'admin@gmail.com', '123', 'Real Admin', 'adm'),
(10, 'raihansultan@gmail.com', '$2y$10$dqYDHym9hhEyXwSR/M1aneiD0YAufYV3ivQseG5YnBYL.kzHJzEAm', 'Raihan Sultan', 'usr'),
(11, 'baru@gmail.com', '$2y$10$lcfLlnWvxgmElRpFhap/7Oe8Tf2LPa/Jb0JlRdm5a/4jzwcswgkDy', 'Baru', 'usr'),
(12, 'daftar@gmail.com', '$2y$10$V8LQFElBoEdqOilWG0Hr0.YqJRT9DbKJzbKH3920QBcTWYulaitYS', 'Pendaftar', 'usr'),
(13, 'uas@gmail.com', '$2y$10$Nu.5dIasmXsxuPiD0WDmyOG/g6b04lggXngpY0OMJaHYQTCT6pgry', 'uas', 'usr');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id_address`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`),
  ADD KEY `id` (`id`),
  ADD KEY `id_product` (`id_product`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id_address` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user_account` (`id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user_account` (`id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
