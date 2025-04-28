-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2023 at 05:38 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `firstName` VARCHAR(50) NOT NULL,
  `lastName` VARCHAR(50) NOT NULL,
  `gender` ENUM('m','f','o') NOT NULL,
  `email` VARCHAR(100) NOT NULL UNIQUE,
  `password` VARCHAR(255) NOT NULL,
  `number` VARCHAR(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Insert or update data in the table `registration`
--

INSERT INTO `registration` (`firstName`, `lastName`, `gender`, `email`, `password`, `number`) VALUES
('samruddhi', 'ubale', 'f', 'samruddhi@gmail.com', 'sam123', '8355957822'),
('nisha', 'shah', 'f', 'nisha@gmail.com', 'nisha123', '8765432345'),
('sakshi', 'sal', 'f', 'sakshi@gmail.com', 'sak123', '0564768904'),
('sanavi', 'shinde', 'f', 'sanavi@gmail.com', 'sanu123', '6735467892')
ON DUPLICATE KEY UPDATE
  `firstName` = VALUES(`firstName`),
  `lastName` = VALUES(`lastName`),
  `gender` = VALUES(`gender`),
  `password` = VALUES(`password`),
  `number` = VALUES(`number`);

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
