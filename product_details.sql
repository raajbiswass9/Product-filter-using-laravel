-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2019 at 08:10 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dummy`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `product_id` int(2) NOT NULL,
  `product_code` varchar(7) NOT NULL,
  `product_category` varchar(10) NOT NULL,
  `product_image` varchar(50) NOT NULL,
  `product_price` varchar(8) NOT NULL,
  `product_brand` varchar(20) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `product_color` varchar(15) NOT NULL,
  `product_size` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`product_id`, `product_code`, `product_category`, `product_image`, `product_price`, `product_brand`, `product_name`, `product_color`, `product_size`) VALUES
(1, 'PQV1017', 'Jeans', 'men_jeans.jpg', '3124', 'Peter England', 'Narrow jeans', 'Light blue', '32'),
(2, 'VRL4605', 'Jeans', 'men_jeans.jpg', '3133', 'Peter England', 'Narrow jeans', 'Black', '34'),
(3, 'IGE746', 'Jeans', 'men_jeans.jpg', '2845', 'True Religion', 'Narrow jeans', 'Light blue', '38'),
(4, 'IOK2058', 'Jeans', 'men_jeans.jpg', '3129', 'Puma', 'Narrow jeans', 'Dark blue', '36'),
(5, 'ZNJ840', 'Jeans', 'men_jeans.jpg', '4754', 'Levis', 'Straight leg jeans', 'Dark blue', '32'),
(6, 'QPV1015', 'Jeans', 'men_jeans.jpg', '2736', 'Wrangler', 'Straight leg jeans', 'Grey', '30'),
(7, 'KIU3494', 'Jeans', 'men_jeans.jpg', '4467', 'Levis', 'Narrow jeans', 'Dark blue', '30'),
(8, 'KKJ1169', 'Jeans', 'men_jeans.jpg', '1843', 'Nike', 'Slim fit jeans', 'Black', '36'),
(9, 'ZSC2840', 'Jeans', 'men_jeans.jpg', '2546', 'Levis', 'Bootcut jeans', 'White', '30'),
(10, 'NFY2990', 'Jeans', 'men_jeans.jpg', '4704', 'True Religion', 'Bootcut jeans', 'Grey', '30'),
(11, 'YGP4441', 'Jeans', 'men_jeans.jpg', '2346', 'Jack & Jones', 'Straight leg jeans', 'Grey', '28'),
(12, 'SOA2304', 'Jeans', 'men_jeans.jpg', '4685', 'Levis', 'Straight leg jeans', 'Grey', '28'),
(13, 'XFR1268', 'Jeans', 'men_jeans.jpg', '2336', 'Nike', 'Slim fit jeans', 'White', '38'),
(14, 'OWW3324', 'Jeans', 'men_jeans.jpg', '4662', 'Peter England', 'Bootcut jeans', 'Light blue', '34'),
(15, 'URU3714', 'Jeans', 'men_jeans.jpg', '3283', 'Nike', 'Slim fit jeans', 'Black', '30'),
(16, 'XMU2443', 'Jeans', 'men_jeans.jpg', '1842', 'Wrangler', 'Bootcut jeans', 'Black', '32'),
(17, 'COS3816', 'Jeans', 'men_jeans.jpg', '3968', 'Wrangler', 'Narrow jeans', 'Dark blue', '36'),
(18, 'ASV2949', 'Jeans', 'men_jeans.jpg', '3032', 'Jack & Jones', 'Straight leg jeans', 'White', '32'),
(19, 'XCG2495', 'Jeans', 'men_jeans.jpg', '4206', 'Jack & Jones', 'Straight leg jeans', 'Black', '36'),
(20, 'HBJ2966', 'Jeans', 'men_jeans.jpg', '2844', 'Peter England', 'Straight leg jeans', 'Black', '28'),
(21, 'NRD3617', 'Shirts', 'shirts.jpg', '1743', 'Lee', 'Solid Casual Slim Sh', 'Blue', 'XL'),
(22, 'XNT707', 'Shirts', 'shirts.jpg', '4605', 'True Religion', 'Solid Casual Spread ', 'Black', 'XXL'),
(23, 'CXY3304', 'Shirts', 'shirts.jpg', '3843', 'Wrangler', 'Solid Casual Slim Sh', 'Blue', 'XL'),
(24, 'QAB1163', 'Shirts', 'shirts.jpg', '1817', 'Nike', 'Solid Casual Spread ', 'Red', 'S'),
(25, 'OES842', 'Shirts', 'shirts.jpg', '2236', 'Puma', 'Solid Casual Spread ', 'Black', 'XL'),
(26, 'PKE1971', 'Shirts', 'shirts.jpg', '3903', 'Peter England', 'Checkered Casual Spr', 'Black', 'XXL'),
(27, 'AMJ2293', 'Shirts', 'shirts.jpg', '4840', 'True Religion', 'Checkered Casual Spr', 'Red', 'XL'),
(28, 'TNX2922', 'Shirts', 'shirts.jpg', '3870', 'Levis', 'Solid Casual Slim Sh', 'Blue', 'L'),
(29, 'KNQ1226', 'Shirts', 'shirts.jpg', '2522', 'Nike', 'Solid Casual Spread ', 'Black', 'L'),
(30, 'QSE4095', 'Shirts', 'shirts.jpg', '3164', 'Jack & Jones', 'Solid Casual Spread ', 'Black', 'XL'),
(31, 'EXE2750', 'Shirts', 'shirts.jpg', '2074', 'True Religion', 'Checkered Casual Spr', 'Red', 'L'),
(32, 'DSM4763', 'Shirts', 'shirts.jpg', '2921', 'Lee', 'Checkered Casual Spr', 'Blue', 'L'),
(33, 'YOA3473', 'Shirts', 'shirts.jpg', '2101', 'Lee', 'Printed Casual Cut A', 'White', 'L'),
(34, 'IXL4452', 'Shirts', 'shirts.jpg', '4109', 'Jack & Jones', 'Solid Casual Spread ', 'Blue', 'XXL'),
(35, 'EOR3153', 'Shirts', 'shirts.jpg', '1956', 'Nike', 'Checkered Casual Spr', 'Black', 'XL'),
(36, 'AOE2859', 'Shirts', 'shirts.jpg', '2613', 'Peter England', 'Solid Casual Spread ', 'Red', 'L'),
(37, 'ZTX1444', 'Shirts', 'shirts.jpg', '3437', 'True Religion', 'Solid Casual Slim Sh', 'White', 'S'),
(38, 'HTB2813', 'Shirts', 'shirts.jpg', '1810', 'Jack & Jones', 'Checkered Casual Spr', 'Blue', 'XXL'),
(39, 'SSY155', 'Shirts', 'shirts.jpg', '3087', 'True Religion', 'Checkered Casual Spr', 'Grey', 'L'),
(40, 'UWS4394', 'Shirts', 'shirts.jpg', '3084', 'Lee', 'Printed Casual Cut A', 'Red', 'XXL');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `product_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
