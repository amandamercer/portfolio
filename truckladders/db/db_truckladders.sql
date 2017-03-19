-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 05, 2016 at 06:26 PM
-- Server version: 5.6.28
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_truckladders`
--

-- --------------------------------------------------------

--
-- Table structure for table `lt_ordersLadders`
--

CREATE TABLE `lt_ordersLadders` (
  `ordersLadders_id` int(10) UNSIGNED NOT NULL,
  `orders_id` int(10) NOT NULL,
  `ladders_id` int(10) NOT NULL,
  `ladders_quantity` smallint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lt_ordersLadders`
--

INSERT INTO `lt_ordersLadders` (`ordersLadders_id`, `orders_id`, `ladders_id`, `ladders_quantity`) VALUES
(1, 1, 1, 2),
(2, 1, 2, 1),
(3, 1, 4, 4),
(4, 2, 2, 1),
(5, 2, 3, 3),
(6, 3, 1, 1),
(7, 3, 2, 1),
(8, 3, 3, 2),
(9, 3, 4, 1),
(10, 4, 1, 1),
(11, 4, 2, 1),
(12, 4, 3, 1),
(13, 4, 4, 1),
(14, 5, 1, 1),
(15, 5, 2, 2),
(16, 5, 3, 3),
(17, 5, 4, 4),
(18, 6, 1, 2),
(19, 6, 3, 2),
(20, 7, 1, 1),
(21, 7, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` tinyint(2) UNSIGNED NOT NULL,
  `admin_username` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_username`, `admin_password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banners`
--

CREATE TABLE `tbl_banners` (
  `banners_id` tinyint(1) UNSIGNED NOT NULL,
  `banners_name` varchar(100) NOT NULL,
  `banners_image` varchar(100) NOT NULL,
  `banners_alt` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_banners`
--

INSERT INTO `tbl_banners` (`banners_id`, `banners_name`, `banners_image`, `banners_alt`) VALUES
(1, 'Home', 'home_banner.png', 'Home Banner'),
(2, 'Product Catalog', 'product_catalog_banner.jpg', 'Product Banner'),
(3, 'Contact Us', 'contact_us_banner.jpg', 'Contact Banner'),
(4, 'Client Profile', 'client_profile_banner.jpg', 'Client Banner');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `contact_id` tinyint(1) UNSIGNED NOT NULL,
  `contact_name` varchar(100) NOT NULL,
  `contact_phone` varchar(50) NOT NULL,
  `contact_email` varchar(100) NOT NULL,
  `contact_street` varchar(200) NOT NULL,
  `contact_city` varchar(100) NOT NULL,
  `contact_province` varchar(10) NOT NULL,
  `contact_postalCode` varchar(10) NOT NULL,
  `contact_about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`contact_id`, `contact_name`, `contact_phone`, `contact_email`, `contact_street`, `contact_city`, `contact_province`, `contact_postalCode`, `contact_about`) VALUES
(1, 'John Smith', '123-456-7890', 'info@truckladders.ca', '123 Truckladder Dr', 'London', 'ON', 'N5Y 3X8', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sed mollis felis, in vestibulum mi. Sed laoreet eleifend odio sit amet facilisis. Donec sed diam ut ipsum vulputate facilisis a sed nisi. Donec et enim nibh. Suspendisse faucibus porta sem ut ultricies. In hac habitasse platea dictumst. Aenean sapien ante, cursus nec ultricies non, faucibus sed neque. Quisque ex dui, porta ac erat eu, aliquam semper elit.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sed mollis felis, in vestibulum mi. Sed laoreet eleifend odio sit amet facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(2, 'Jane Doe', '519-657-9845', 'janedoe@janedoe.com', '123 Peach St.', 'London', 'ON', 'H2U 8D3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(3, 'Jessica Patterson', '519-999-5465', 'jessp@gmail.com', '93 Element Dr', 'London', 'ON', 'N6G 3K4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customers`
--

CREATE TABLE `tbl_customers` (
  `customers_id` int(10) UNSIGNED NOT NULL,
  `customers_username` varchar(100) DEFAULT NULL,
  `customers_password` varchar(100) DEFAULT NULL,
  `customers_dealershipName` varchar(100) DEFAULT NULL,
  `customers_name` varchar(100) NOT NULL,
  `customers_phone` varchar(50) NOT NULL,
  `customers_email` varchar(100) NOT NULL,
  `customers_street` varchar(200) DEFAULT NULL,
  `customers_city` varchar(100) DEFAULT NULL,
  `customers_province` varchar(10) DEFAULT NULL,
  `customers_postalCode` varchar(10) DEFAULT NULL,
  `customers_category` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_customers`
--

INSERT INTO `tbl_customers` (`customers_id`, `customers_username`, `customers_password`, `customers_dealershipName`, `customers_name`, `customers_phone`, `customers_email`, `customers_street`, `customers_city`, `customers_province`, `customers_postalCode`, `customers_category`) VALUES
(61, NULL, NULL, 'Harding Blackwell', 'Teagan Bishop', '+184-57-9405485', 'jugotev@gmail.com', 'Dolorem eligendi quisquam voluptas mollit consequatur Voluptate totam exercitation et voluptas distinctio Occaecat esse quaerat error hic voluptatem', NULL, NULL, NULL, 'Dealer'),
(62, NULL, NULL, 'Renee Drake', 'William Bradley', '+257-15-2712410', 'muwebi@gmail.com', 'Eum error delectus quasi adipisci iste ullamco magni dolore excepteur officia vero eaque sint porro nulla ratione', NULL, NULL, NULL, 'Dealer'),
(63, NULL, NULL, 'Renee Drake', 'William Bradley', '+257-15-2712410', 'muwebi@gmail.com', 'Eum error delectus quasi adipisci iste ullamco magni dolore excepteur officia vero eaque sint porro nulla ratione', NULL, NULL, NULL, 'Dealer'),
(64, NULL, NULL, '', 'Echo Clemons', '+627-36-5985824', 'nahasihape@yahoo.com', '', NULL, NULL, NULL, 'Individual'),
(65, NULL, NULL, '', 'Echo Clemons', '+627-36-5985824', 'nahasihape@yahoo.com', '', NULL, NULL, NULL, 'Individual');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ladders`
--

CREATE TABLE `tbl_ladders` (
  `ladders_id` int(10) UNSIGNED NOT NULL,
  `ladders_name` varchar(100) NOT NULL,
  `ladders_material` varchar(100) NOT NULL,
  `ladders_price` varchar(100) NOT NULL,
  `ladders_desc` text NOT NULL,
  `ladders_image1` varchar(100) NOT NULL DEFAULT 'default.png',
  `ladders_image2` varchar(100) NOT NULL DEFAULT 'default.png',
  `ladders_image3` varchar(100) NOT NULL DEFAULT 'default.png',
  `ladders_image4` varchar(100) NOT NULL DEFAULT 'default.png',
  `ladders_category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ladders`
--

INSERT INTO `tbl_ladders` (`ladders_id`, `ladders_name`, `ladders_material`, `ladders_price`, `ladders_desc`, `ladders_image1`, `ladders_image2`, `ladders_image3`, `ladders_image4`, `ladders_category`) VALUES
(5, 'Flat Bed Standard Height 15"', 'Aluminum', '650.00', 'Rub rail attachment\r\n60" deck to ground\r\n15" step', '1458254954_ladder11.png', '1458254954_ladder11.png', '1458254954_ladder12.png', '1458255056_ladder.png', '1'),
(6, 'Flat Bed Standard Height 12"', 'Aluminum', '600.00', 'Rub rail attachment\r\n60" deck to ground\r\n12" step', '1458254954_ladder11.png', '1458254954_ladder11.png', '1458254954_ladder12.png', '1458255056_ladder.png', '1'),
(7, 'Flat Bed Standard Height 12"', 'Steel', '500.00', 'Rub rail attachment\r\n60" deck to ground\r\n12" step', '1458254954_ladder11.png', '1458254954_ladder11.png', '1458254954_ladder12.png', '1458255056_ladder.png', '1'),
(8, 'Van/Straight Box Truck 60" Great Dane', 'Aluminum', '600.00', '60" floor to ground\r\n12" step\r\nGreat Dane\r\nWabash\r\nStoughton\r\nAll trailers with 1" or less truck attachment', '1458254954_ladder11.png', '1458254954_ladder11.png', '1458254954_ladder12.png', '1458255056_ladder.png', '1'),
(9, 'Van/Straight Box Truck 60" Manac', 'Aluminum', '600.00', '60" floor to ground\r\n12" step\r\nManac', '1458254954_ladder11.png', '1458254954_ladder11.png', '1458254954_ladder12.png', '1458255056_ladder.png', '1'),
(10, 'Container Chassis 60"', 'Aluminum', '600.00', '60" floor to ground\r\n12" step', '1458254954_ladder11.png', '1458254954_ladder11.png', '1458254954_ladder12.png', '1458255056_ladder.png', '1'),
(11, 'Chevrolet/GMC 32"', 'Aluminum', '275.00', '2012-2016\r\n32" tall\r\n4" wide tailgate', 'default.png', 'default.png', 'default.png', 'default.png', '2'),
(12, 'Chevrolet/GMC 32"', 'Aluminum', '275.00', '2012-2016\r\n32" tall\r\n3" wide tailgate', 'default.png', 'default.png', 'default.png', 'default.png', '2'),
(13, 'Chevrolet/GMC 30"', 'Aluminum', '275.00', '2012-2016\r\n30" tall\r\n4" wide tailgate', 'default.png', 'default.png', 'default.png', 'default.png', '2'),
(14, 'Ford 32"', 'Aluminum', '275.00', '2009-2015\r\n32" tall\r\n4" wide tailgate', 'default.png', 'default.png', 'default.png', 'default.png', '2'),
(15, 'Ford 30"', 'Aluminum', '275.00', '2001-2009\r\n30" tall\r\n3" wide tailgate', 'default.png', 'default.png', 'default.png', 'default.png', '2'),
(16, 'Dodge 32"', 'Aluminum', '275.00', '2009-2015\r\n32" tall\r\n7" wide tailgate', 'default.png', 'default.png', 'default.png', 'default.png', '2'),
(17, 'Dodge 30"', 'Aluminum', '275.00', '2001-2009\r\n30" tall\r\n3" wide tailgate', 'default.png', 'default.png', 'default.png', 'default.png', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orders`
--

CREATE TABLE `tbl_orders` (
  `orders_id` int(10) UNSIGNED NOT NULL,
  `orders_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `orders_truckMake` varchar(50) NOT NULL,
  `orders_truckModel` varchar(50) NOT NULL,
  `orders_truckYear` varchar(10) NOT NULL,
  `orders_modified` varchar(50) DEFAULT NULL,
  `orders_bHeight` varchar(100) DEFAULT NULL,
  `orders_tWidth` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_orders`
--

INSERT INTO `tbl_orders` (`orders_id`, `orders_date`, `orders_truckMake`, `orders_truckModel`, `orders_truckYear`, `orders_modified`, `orders_bHeight`, `orders_tWidth`) VALUES
(103, '2016-12-01 11:53:00', 'GMC', 'Sierra 1500', '2010', 'Stock', '', ''),
(104, '2016-12-01 12:33:53', 'Dodge', 'MODEL', '2016', 'Stock', '', ''),
(105, '2016-12-01 12:51:28', 'Dodge', 'Ram 3500', '2011', 'Stock', '', ''),
(106, '2016-12-01 12:51:52', 'Dodge', 'Ram 3500', '2011', 'Stock', '', ''),
(107, '2016-12-01 12:58:25', 'GMC', 'Sierra 1500', '2012', 'Stock', '', ''),
(108, '2016-12-01 13:26:47', 'GMC', 'Sierra 1500', '2012', 'Stock', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimonials`
--

CREATE TABLE `tbl_testimonials` (
  `testimonials_id` smallint(4) UNSIGNED NOT NULL,
  `testimonials_name` varchar(100) NOT NULL,
  `testimonials_text` text NOT NULL,
  `testimonials_approved` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_testimonials`
--

INSERT INTO `tbl_testimonials` (`testimonials_id`, `testimonials_name`, `testimonials_text`, `testimonials_approved`) VALUES
(1, 'Steve Copp', 'In at lacus in ex ullamcorper commodo nec id magna. Integer eleifend, elit vitae maximus ultricies, tortor urna tristique urna, a cursus ex nibh ac velit. Ut vitae quam non libero molestie convallis molestie eget ex. Vestibulum eget quam a ante fermentum mollis a eget nunc. Sed dapibus ligula at ante pharetra dictum.', 1),
(2, 'Craig Menear', 'Ut mollis quam at nulla placerat tristique. Nulla gravida mollis urna, nec rhoncus eros pulvinar et. Pellentesque et enim faucibus, venenatis quam in, tincidunt eros. Donec volutpat vestibulum est vitae aliquam.', 1),
(3, 'Robert Sawyer', 'In at lacus in ex ullamcorper commodo nec id magna. Integer eleifend, elit vitae maximus ultricies, tortor urna tristique urna, a cursus ex nibh ac velit. Ut vitae quam non libero molestie convallis molestie eget ex. Vestibulum eget quam a ante fermentum mollis a eget nunc. Sed dapibus ligula at ante pharetra dictum.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `users_id` int(10) UNSIGNED NOT NULL,
  `users_username` varchar(100) NOT NULL,
  `users_password` varchar(100) NOT NULL,
  `users_name` varchar(100) NOT NULL,
  `users_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`users_id`, `users_username`, `users_password`, `users_name`, `users_email`) VALUES
(1, 'jsmith', 'ufier83ut09uteijw', 'John Smith', 'jsmith@gmail.com'),
(2, 'ctebo', 'segjklio238u', 'Chris Tebo', 'ctebo@gmail.com'),
(3, 'hwells', 'ifoauef90298024', 'Heather Wells', 'hwells@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lt_ordersLadders`
--
ALTER TABLE `lt_ordersLadders`
  ADD PRIMARY KEY (`ordersLadders_id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_banners`
--
ALTER TABLE `tbl_banners`
  ADD PRIMARY KEY (`banners_id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  ADD PRIMARY KEY (`customers_id`);

--
-- Indexes for table `tbl_ladders`
--
ALTER TABLE `tbl_ladders`
  ADD PRIMARY KEY (`ladders_id`);

--
-- Indexes for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD PRIMARY KEY (`orders_id`);

--
-- Indexes for table `tbl_testimonials`
--
ALTER TABLE `tbl_testimonials`
  ADD PRIMARY KEY (`testimonials_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lt_ordersLadders`
--
ALTER TABLE `lt_ordersLadders`
  MODIFY `ordersLadders_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` tinyint(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_banners`
--
ALTER TABLE `tbl_banners`
  MODIFY `banners_id` tinyint(1) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `contact_id` tinyint(1) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  MODIFY `customers_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `tbl_ladders`
--
ALTER TABLE `tbl_ladders`
  MODIFY `ladders_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  MODIFY `orders_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
--
-- AUTO_INCREMENT for table `tbl_testimonials`
--
ALTER TABLE `tbl_testimonials`
  MODIFY `testimonials_id` smallint(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `users_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
