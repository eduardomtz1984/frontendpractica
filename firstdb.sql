-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2016 at 11:01 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

CREATE DATABASE firstdb;
USE firstdb;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `firstdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `portada` varchar(125) DEFAULT NULL,
  `titulo` varchar(125) DEFAULT NULL,
  `autor` varchar(125) DEFAULT NULL,
  `isbn` varchar(25) DEFAULT NULL,
  `reseña` varchar(25) DEFAULT NULL,
  `cantidad` varchar(25) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `portada`, `titulo`, `autor`, `isbn`, `reseña`, `cantidad`) VALUES
(1, 'http://200.23.113.50/myproject/book.png', 'titulo 1', 'autor 1', 'isbn1', 'el libro trata ...', '7'),
(2, 'http://200.23.113.50/myproject/book.png', 'titulo 2', 'autor 2', 'isbn 2', 'el libro trata ...', '98'),
(3, 'http://200.23.113.50/myproject/book.png', 'titulo 3', 'autor 3', 'isbn3', 'el libro trata ...', '1154564');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Username` varchar(25) DEFAULT NULL,
  `Password` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Username`, `Password`) VALUES
('admin', '123qwe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
-- ALTER TABLE `books`
--  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
