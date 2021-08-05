-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2021 at 01:52 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sugarcake`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(2) NOT NULL,
  `cat_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'เค้ก'),
(2, 'โรล'),
(9, 'เครื่องดื่ม');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `detail_id` int(11) NOT NULL,
  `pd_id` int(5) NOT NULL,
  `qty` int(100) NOT NULL,
  `price` int(10) NOT NULL,
  `order_type` int(5) NOT NULL,
  `purchase_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`detail_id`, `pd_id`, `qty`, `price`, `order_type`, `purchase_id`) VALUES
(1, 1, 2, 500, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pd_id` int(5) NOT NULL,
  `pd_name` varchar(50) NOT NULL,
  `pd_price` int(5) NOT NULL,
  `pd_img` varchar(500) NOT NULL,
  `pd_des` varchar(500) NOT NULL,
  `qty_wholesale` int(50) NOT NULL,
  `price_wholesale` int(50) NOT NULL,
  `cat_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pd_id`, `pd_name`, `pd_price`, `pd_img`, `pd_des`, `qty_wholesale`, `price_wholesale`, `cat_id`) VALUES
(27, 'กล้วย', 55, 'img/img60790264a3484.png', '1', 0, 0, 9),
(29, 'เค้กแครอท', 89, 'img/img6079028ab7695.png', '7', 0, 0, 1),
(30, 'คัพเค้ก', 65, 'img/img607902a2e8c42.png', '7', 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `purchaseorder`
--

CREATE TABLE `purchaseorder` (
  `purchase_id` int(50) NOT NULL,
  `purchase_price` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` date NOT NULL,
  `user_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `purchaseorder`
--

INSERT INTO `purchaseorder` (`purchase_id`, `purchase_price`, `created_at`, `deleted_at`, `user_id`) VALUES
(1, 500, '2021-04-08 13:22:16', '2021-04-14', 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(4) NOT NULL,
  `user_img` varchar(400) NOT NULL,
  `user_fname` varchar(50) NOT NULL,
  `user_lname` varchar(50) NOT NULL,
  `user_username` varchar(50) NOT NULL,
  `user_pass` varchar(10) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_tel` varchar(10) NOT NULL,
  `user_birth` date NOT NULL,
  `user_gender` int(2) NOT NULL,
  `user_address` varchar(500) NOT NULL,
  `user_status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_img`, `user_fname`, `user_lname`, `user_username`, `user_pass`, `user_email`, `user_tel`, `user_birth`, `user_gender`, `user_address`, `user_status`) VALUES
(1, '', 'พันวา', 'สุรมณฑา', 'oh_aew', '1234', 'ohaew@gmail.com', '0981702726', '1999-01-17', 0, 'Danaiwittaya Puket', 3),
(2, '', 'นิลาวัณย์', 'จันทนะ', 'taenlvn', '1234', 'taenlvn@gmail.com', '0934652383', '1999-07-13', 0, '777/2 ม. 15 ต. พันดอน อ. กุมภวาปี จ. อุดรธานี\r\n', 1),
(20, '', 'ตะนอย', 'ลีส์', 'staff', '1234', 'tanoy@gmail.com', '0801630597', '1999-04-11', 2, 'โคราชบ้านเอ็ง', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`detail_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pd_id`);

--
-- Indexes for table `purchaseorder`
--
ALTER TABLE `purchaseorder`
  ADD PRIMARY KEY (`purchase_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pd_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `purchaseorder`
--
ALTER TABLE `purchaseorder`
  MODIFY `purchase_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
