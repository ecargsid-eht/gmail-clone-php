-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2022 at 10:56 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gmail`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `contact` varchar(30) NOT NULL,
  `email` varchar(200) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `password` varchar(200) NOT NULL,
  `dp` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `name`, `dob`, `contact`, `email`, `gender`, `password`, `dp`) VALUES
(2, 'Amrit', '2001-02-27', '6299387955', 'lbrock513@gmail.com', 'm', '8b02dd10d623770d6a60224e4c5da3e0', ''),
(3, 'Uttsav', '2019-01-14', '123456789', 'utsavamrit@gmail.com', 'm', '81dc9bdb52d04dc20036dbd8313ed055', ''),
(5, 'sugipu', '2021-12-22', '2345678977', 'amritmshr123@gmail.com', 'f', '202cb962ac59075b964b07152d234b70', ''),
(6, 'iruwbiu', '0000-00-00', '213456', 'amritmshr123@gmail.com', '0', '202cb962ac59075b964b07152d234b70', ''),
(7, 'ytfuygi', '0000-00-00', '', '', '0', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(8, 'srhnea', '2022-01-12', '1234567', 'amrit@gmail.com', 'm', '202cb962ac59075b964b07152d234b70', ''),
(9, 'amrit', '0000-00-00', '123435', 'amrit123@gmail.com', 'm', '202cb962ac59075b964b07152d234b70', ''),
(10, 'Amrit', '2022-02-08', '12345', 'amrit123@gmail.com', 'm', '202cb962ac59075b964b07152d234b70', '');

-- --------------------------------------------------------

--
-- Table structure for table `mails`
--

CREATE TABLE `mails` (
  `m_id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `title` varchar(400) NOT NULL,
  `content` text NOT NULL,
  `attachment` varchar(300) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL,
  `read_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mails`
--

INSERT INTO `mails` (`m_id`, `sender_id`, `receiver_id`, `title`, `content`, `attachment`, `date`, `status`, `read_status`) VALUES
(1, 0, 0, '0', 'rdytfyguhigggh', '', '2021-12-07 04:52:41', 0, 0),
(2, 0, 0, '0', 'uegfiuqb;eogujb;oug', '', '2021-12-07 04:54:27', 0, 0),
(4, 0, 0, '0', '', '', '2021-12-07 04:57:47', 0, 0),
(5, 2, 3, 'dsgushdif', 'svas', '', '2021-12-09 04:12:42', 0, 0),
(6, 2, 3, 'uwgliugj', 'fdsa', '', '2021-12-09 04:12:39', 0, 0),
(7, 2, 5, 'jcgclgjclut', 'v;iyfliyflyihvlhflkuyfkgvkt', '', '2021-12-09 05:06:07', 0, 0),
(8, 5, 3, 'lsiuegilu', 'liugiylgiugl', '', '2021-12-08 04:31:48', 0, 0),
(9, 5, 2, 'beugliugiy', 'egiohwpoueghpOUSJGhpisujhbaurgoashbgoiy', '', '2021-12-08 04:35:06', 0, 0),
(10, 2, 3, 'elfiguu', 'iugi', '', '2021-12-10 04:25:22', 0, 0),
(11, 5, 3, 'grwuh', 'rghwr', '', '2021-12-26 16:36:50', 0, 0),
(12, 5, 0, 'ghuou', 'rwghoi', '', '2021-12-26 16:36:23', 1, 0),
(13, 5, 2, 'wghi', 'ugiu', '', '2021-12-26 16:36:50', 0, 0),
(14, 8, 3, 'sfbiFB', 'ovwdbuwuio', '', '2022-01-11 05:08:09', 0, 0),
(15, 9, 3, 'wefgr', '2e3efrgf', '', '2022-01-15 06:23:10', 0, 0),
(16, 9, 8, 'wrfeg', 'eqfvf', '', '2022-01-15 06:27:26', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mails`
--
ALTER TABLE `mails`
  ADD PRIMARY KEY (`m_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mails`
--
ALTER TABLE `mails`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
