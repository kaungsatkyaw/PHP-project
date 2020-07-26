-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2020 at 06:08 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myphone`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`, `phone`, `gender`, `address`, `type`) VALUES
(1, 'map', '$2y$10$lDnPxKl27LgYmiP9WJytxOuaU4WlyGF.rLEUfAgxVIgyMJD0k92FG', 'shadowkingmap@gmail.com', '09761728032', 'male', 'yangon', 'Main_Admin'),
(2, 'ksk', '$2y$10$uaeOdZl4/Kv6oeEwzpQXDu/9eH83u8RnzfX/OGauQxmNll/Qy1Fr.', 'ksk@gmail.com', '09692831204', 'male', '7000 Stinson hartis Road', 'Co-Admin'),
(3, 'apk', '$2y$10$A/C9shIdU4qZA7Gg3UNmLOqow9FONUTpitRieuKTpKOeOjKHSuhjG', 'apk@gmail.com', '09692831204', 'male', 'yangon', 'Co-Admin');

-- --------------------------------------------------------

--
-- Table structure for table `order_list`
--

CREATE TABLE `order_list` (
  `o_id` int(11) NOT NULL,
  `list` varchar(500) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `region` varchar(255) NOT NULL,
  `city` varchar(225) NOT NULL,
  `township` varchar(225) NOT NULL,
  `address` varchar(225) NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_list`
--

INSERT INTO `order_list` (`o_id`, `list`, `name`, `phone`, `region`, `city`, `township`, `address`, `price`) VALUES
(1, 'MI-6X, qty = 1, Mi-9 Pro, qty = 1, Redmi Note 7, qty = 1,', 'AUNGAUNG', '0912346789', 'North Carolina', 'Indian Tiral', 'Indian Tiral', '7000 Stinson hartis Road', '1250.55');

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE `phone` (
  `p_id` int(11) NOT NULL,
  `p_img` varchar(100) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `p_txt` varchar(150) NOT NULL,
  `p_price` varchar(50) NOT NULL,
  `category` varchar(100) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phone`
--

INSERT INTO `phone` (`p_id`, `p_img`, `p_name`, `p_txt`, `p_price`, `category`, `qty`) VALUES
(1, 'mi_9pro.jpg', 'Mi-9 Pro', '(5G)RAM (6/64)', '243', 'Select category', 10),
(2, 'mi-6x.jpg', 'Mi - 6x', 'Snap Dragon - 630 (Ram - 4/64)', '178', 'Mi', 10),
(3, '2-1024x768.png', 'Mi Note 10', '108MP (camera)/Battery - 5260 mAh', '789', 'Select category', 10),
(4, 'Xiaomi-Mi-Play.webp', 'Xiaomi Mi-Play', 'Camera-32MP/Ram(4/64)', '264', 'Redmi', 10),
(5, '1527755798_635_xiaomi_mi_8.webp', 'Redmi Note-8 pro', 'Ram(6/128)', '286', 'Select category', 10),
(6, 'redminote7.jpg', 'Redmi Note-7', 'SnapDragon 660/Ram(6/128)', '238', 'Redmi', 10);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `u_email` varchar(100) NOT NULL,
  `u_phone` varchar(50) NOT NULL,
  `u_pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `u_name`, `u_email`, `u_phone`, `u_pass`) VALUES
(3, 'kaungset', 'ksk@gmail.com', '0912346789', '1234'),
(4, 'aungaung', 'aungaung@gmail.com', '0912346789', 'aung123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_list`
--
ALTER TABLE `order_list`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `order_list`
--
ALTER TABLE `order_list`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `phone`
--
ALTER TABLE `phone`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
