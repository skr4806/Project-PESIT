-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2016 at 06:34 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(5) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `f_name`, `l_name`, `telephone`, `password`, `email`) VALUES
(1, 'Bhavin', 'Patel', '2147483647', 'hellewuthre', 'mailmebhav@gmail.com'),
(2, 'Bhavin', 'Patel', '0', 'hellewuthre', 'mailmebhav@gmail.com'),
(3, 'Bhavin', 'Patel', '2147483647', 'hellewuthre', 'mailmebhav@gmail.com'),
(4, 'Bhavin', 'Patel', '8867232570', 'hj', 'mailmebhav@gmail.com'),
(5, 'Bhavin', 'Patel', '8867232570', 'hellewuthre', 'mailmebhav@gmail.com'),
(6, 'Bhavin', 'Patel', '8867232570', 'hellewuthre', 'mailmebhav@gmail.com'),
(7, 'Bhavin', 'Patel', '8867232570', 'hellewuthre', 'mailmebhav@gmail.com'),
(8, 'Bhavin', 'Patel', '8867232570', 'g', 'mailmebhav@gmail.com'),
(9, 'Bhavin', 'Patel', '8867232570', 'hellewuthre', '_'),
(10, 'Bhavin', 'Patel', '8867232570', 'hellewuthre', '_'),
(11, 'B', 'P', '8754', 'sjj', '_'),
(12, 'b', 'm', 'mk', 'knd', '_'),
(13, 'bhav', 'asas', 'asaa', 'as', 'mailmebhavin1995@gma'),
(14, 'bh', 'sd', 'sa', 'as', 'mail@gmail.com'),
(15, 'hbsdjsa', 'kssdjkasj', 'ksnkjd', 'asd', 'mailmebhavin19a95@gm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
