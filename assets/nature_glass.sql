-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2025 at 12:19 PM
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
(12, 'daftar@gmail.com', '$2y$10$V8LQFElBoEdqOilWG0Hr0.YqJRT9DbKJzbKH3920QBcTWYulaitYS', 'Pendaftar', 'usr');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
