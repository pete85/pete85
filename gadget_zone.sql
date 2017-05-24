-- phpMyAdmin SQL Dump
-- version 2.8.0.1
-- http://www.phpmyadmin.net
-- 
-- Host: custsql-ipg26.eigbox.net
-- Generation Time: May 24, 2017 at 04:23 AM
-- Server version: 5.6.32
-- PHP Version: 4.4.9
-- 
-- Database: `gadget_zone`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `customer`
-- 

CREATE TABLE `customer` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `house_no` int(10) NOT NULL,
  `street` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postcode` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(15) NOT NULL,
  `password` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=4 ;

-- 
-- Dumping data for table `customer`
-- 

INSERT INTO `customer` VALUES (1, 'john', 'John', 'Smith', 12, 'test street', 'TW1 3FD', 'test@test.com', 2147483647, 'John_123');
INSERT INTO `customer` VALUES (2, 'test', 'Piotr', 'Furmanek', 12, 'Old Street', 'TW2 5YH', 'testing@testing.com', 1234567890, 'Test_123');
INSERT INTO `customer` VALUES (3, 'mark', 'Mark', 'Smith', 12, 'new road', 'tw3 5yt', 'mark@test.com', 123456788, 'Mark_123');

-- --------------------------------------------------------

-- 
-- Table structure for table `products`
-- 

CREATE TABLE `products` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=6 ;

-- 
-- Dumping data for table `products`
-- 

INSERT INTO `products` VALUES (1, 'Cooler', 'desktop_usb', 19.95, 'Cras id arcu dolor. Sed id euismod neque. Duis tortor arcu, posuere ut dolor ut, faucibus interdum sem. Morbi id semper leo, ac lobortis leo. Integer congue arcu odio, a egestas libero maximus ut. Sed bibendum libero eget volutpat congue. Nunc quis quam a ex vulputate laoreet.', 'cooler.jpg');
INSERT INTO `products` VALUES (2, 'Drone', 'toys_games', 299.95, 'Cras id arcu dolor. Sed id euismod neque. Duis tortor arcu, posuere ut dolor ut, faucibus interdum sem. Morbi id semper leo, ac lobortis leo. Integer congue arcu odio, a egestas libero maximus ut. Sed bibendum libero eget volutpat congue. Nunc quis quam a ex vulputate laoreet.', 'drone.jpg');
INSERT INTO `products` VALUES (3, 'Led Pen', 'desktop_usb', 29.95, 'Cras id arcu dolor. Sed id euismod neque. Duis tortor arcu, posuere ut dolor ut, faucibus interdum sem. Morbi id semper leo, ac lobortis leo. Integer congue arcu odio, a egestas libero maximus ut. Sed bibendum libero eget volutpat congue. Nunc quis quam a ex vulputate laoreet.', 'ledpen.jpg');
INSERT INTO `products` VALUES (4, 'Newtons cradle', 'lifestyle', 23.95, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae ornare augue. Phasellus tincidunt sagittis purus, eleifend viverra ex maximus nec. In at condimentum dolor. Aliquam sit amet enim euismod, iaculis neque nec, interdum ipsum. Donec commodo ex et elit laoreet iaculis. Ut dignissim, diam a dictum pharetra, dui risus tincidunt nisl, vitae condimentum justo orci non augue. Integer at eros nibh. Sed felis sapien, ultricies at porta nec, commodo ultrices mi. Vestibulum vulputate nulla non odio finibus ultricies.', 'balls.jpg');
INSERT INTO `products` VALUES (5, 'RC Plane', 'toys_games', 199.95, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae ornare augue. Phasellus tincidunt sagittis purus, eleifend viverra ex maximus nec. In at condimentum dolor. Aliquam sit amet enim euismod, iaculis neque nec, interdum ipsum. Donec commodo ex et elit laoreet iaculis. Ut dignissim, diam a dictum pharetra, dui risus tincidunt nisl, vitae condimentum justo orci non augue. Integer at eros nibh. Sed felis sapien, ultricies at porta nec, commodo ultrices mi. Vestibulum vulputate nulla non odio finibus ultricies.', 'plane.jpg');
