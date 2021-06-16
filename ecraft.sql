-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2021 at 05:34 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecraft`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'Fiesta Putra', 'fiesta@ecraft.com', 'admin123'),
(2, 'Izaz Dhiya', 'izaz@ecraft.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL,
  `picture` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `picture`) VALUES
(1, 'Anyaman', 'Keranjang belanja.png'),
(2, 'Sepatu', 'sepatu.png'),
(3, 'Aksesoris', 'aksessoris gelang.png');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) NOT NULL,
  `category` int(10) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(200) NOT NULL,
  `spesification` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `picture` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category`, `brand`, `name`, `description`, `spesification`, `price`, `picture`) VALUES
(1, 3, 'JemberHandicraft', 'Gelang Agalis', 'Gelang yang dibuat dari kayu agalis dan diproduksi dengan style modern dan harga terjangkau', 'Hasil Produk Asli Jember, Terbuat dari Katu Agalis, Tidak mudah Retak, kualitas premium, harga terja', 10000, 'gelang.png'),
(2, 1, 'HandcraftReuse', 'Tas Modern', 'Tas Modern dapat digunakan sebagai tempat belanja dan cocok buat fashion anak muda', 'Terbuat dari Koran bekas, bahan awet dan tidak gampang rusak', 15000, 'tas modern.png'),
(3, 1, 'HandcraftReuse', 'Jam Dinding', 'Jam Dinding ini dapat digunakan sebagai Hiasan dikamar dan ruang tamu', 'Terbuat dari Koran bekas, bahan awet dan tidak gampang rusak', 10000, 'jam dindingg.jpeg'),
(4, 1, 'HandycraftOke', 'Patung Kecil', 'Patung Kecil  ini dapat digunakan sebagai Hiasan dikamar dan ruang tamu', 'Terbuat dari Semen  yang dicetak dalam ukiran kemudian di jemur agar semen mengeras, bahan awet dan ', 25000, 'Patung Orang.png'),
(5, 2, 'JemberGaul', 'SepatuRGN', 'Sepatu dapat digunakan oleh Cowok maupun cewek, Ukuran 39/40/41, dan Murah', 'Sepatu terbuat dari olahan karet dan spons dan lapisan luar diberi hiasan kancing bekas', 100000, 'sepatu.png'),
(6, 1, 'JemberKreatif', 'Rak Pensil', 'Rak pensil yang lentur , Ukuran kecil/besar, dan Murah', 'Rak pensil terbuat dari benang wol, yang dibentuk dengan motif bunga agar lebih menarik', 10000, 'Rak pensil.png'),
(7, 3, 'JemberKreatif', 'Lampu Tidur', 'Lampu Tidur Warna Warni , Ukuran kecil/besar, dan Hemat Listrik', 'Lampu Tidur terbuat dari lapisan benang wol di bentuk oval dan daya listik 10 watt', 30000, 'Lampu Tidur.png'),
(8, 3, 'HandycraftOke', 'Gelang Kece', 'Gelang Kece untuk fashion , Ukuran kecil/besar, dan Murah', 'Gelang Kece terbuat dari biji yang diawetkan, dan dihiasi dengan kerang hias', 5000, 'aksessoris gelang.png'),
(9, 3, 'JemberHandicraft', 'Tasbih Agalis', 'Tasbih Agalis terbuat dari biji agalis dengan konsep yang kekinian dan Murah', 'Tasbih Agalis terbuat dari biji yang diawetkan dan kualitas premium', 10000, 'Tasbih.png'),
(10, 1, 'HandcraftReuse', 'Keranjang Belanja', 'Keranjang Belanja dapat digunakan sebagai tempat belanja dan fashionable', 'Keranjang Belanja dari bambu, bahan awet dan kualitas premium', 15000, 'Keranjang belanja.png'),
(11, 1, 'JemberKreatif', 'Vas Bunga Unik', 'Vas Bunga Unik dengan konsep yang kekinian dan Murah', 'Vas Bunga Unik terbuat dari Sedotan bekas  yang susun rapi dan dihiasi dengan bunga mawar yang indah', 10000, 'vas bunga plastik.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
