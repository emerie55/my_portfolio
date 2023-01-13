-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2022 at 01:04 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `iemerie`
--

-- --------------------------------------------------------

--
-- Table structure for table `con_tact`
--

CREATE TABLE IF NOT EXISTS `con_tact` (
`id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(1000) NOT NULL,
  `message` mediumtext NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `con_tact`
--

INSERT INTO `con_tact` (`id`, `fullname`, `email`, `subject`, `message`, `date`) VALUES
(1, 'Isioma Chika', 'isioma@gmail.com', 'Website', 'Hi sir, please i need you to do a work for me.', '03 Apr, 2022'),
(3, 'Innocent Chiemerie', 'feargodinnocent1994@gmail.com', 'Website work', 'Good day, please I have a work for you, my company needs a website, thanks.', '03 Apr, 2022');

-- --------------------------------------------------------

--
-- Table structure for table `i_emerie`
--

CREATE TABLE IF NOT EXISTS `i_emerie` (
`id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `i_emerie`
--

INSERT INTO `i_emerie` (`id`, `fullname`, `username`, `password`) VALUES
(1, 'Innocent Chiemerie', 'emerie', 'jc_1994');

-- --------------------------------------------------------

--
-- Table structure for table `port_folio`
--

CREATE TABLE IF NOT EXISTS `port_folio` (
`id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `propic` varchar(100) NOT NULL,
  `client` varchar(100) NOT NULL,
  `prodate` varchar(100) NOT NULL,
  `prourl` varchar(1000) NOT NULL,
  `info` varchar(10000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `port_folio`
--

INSERT INTO `port_folio` (`id`, `title`, `propic`, `client`, `prodate`, `prourl`, `info`) VALUES
(1, 'Phinewaters School', 'pdf/pwms.PNG', 'Phinewaters Montessori School', '2020-05-06', 'www.phinewatersmontessorischool.com', 'Phinewaters School aims to develop Internationally-minded lifelong learners who have the knowledge and courage to make a positive difference in the world.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_visitor`
--

CREATE TABLE IF NOT EXISTS `tbl_visitor` (
`id` int(11) NOT NULL,
  `user_ip` varchar(100) NOT NULL,
  `device` varchar(100) NOT NULL,
  `date_visited` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_visitor`
--

INSERT INTO `tbl_visitor` (`id`, `user_ip`, `device`, `date_visited`) VALUES
(16, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:95.0) Gecko/20100101 Firefox/95.0', '2022-04-03 01:33:27.526434'),
(17, '192.168.43.181', 'Mozilla/5.0 (Linux; Android 10; CPH2239) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101', '2022-04-03 01:39:49.458280'),
(18, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:95.0) Gecko/20100101 Firefox/95.0', '2022-04-06 20:04:43.079169'),
(19, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:95.0) Gecko/20100101 Firefox/95.0', '2022-04-13 18:29:16.946239'),
(20, '192.168.43.181', 'Mozilla/5.0 (Linux; Android 8.1.0; itel A32F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.48', '2022-04-13 18:35:32.057766');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `con_tact`
--
ALTER TABLE `con_tact`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `i_emerie`
--
ALTER TABLE `i_emerie`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `port_folio`
--
ALTER TABLE `port_folio`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_visitor`
--
ALTER TABLE `tbl_visitor`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `con_tact`
--
ALTER TABLE `con_tact`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `i_emerie`
--
ALTER TABLE `i_emerie`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `port_folio`
--
ALTER TABLE `port_folio`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_visitor`
--
ALTER TABLE `tbl_visitor`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
