-- phpMyAdmin SQL Dump
-- version 4.5.1

-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1

-- Generation Time: Dec 31, 2017 at 02:30 PM

-- Server version: 10.1.19-MariaDB

-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--




-- Database: `kolekcija`--
 

CREATE DATABASE IF NOT EXISTS `kolekcija` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `kolekcija`;


--Table structure for table `filmovi`
--



CREATE TABLE IF NOT EXISTS `filmovi` 
(
`id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  
`naslov` varchar(191) NOT NULL,
  
`id_zanr` int(10) UNSIGNED NOT NULL,
 
`godina` int(11) NOT NULL,
  
`trajanje` smallint(6) NOT NULL,
  
`slika` varchar(191) NOT NULL,
  
PRIMARY KEY (`id`),
  
KEY `filmovi_id_zanr_foreign` (`id_zanr`)
) 
ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;



--Dumping data for table `filmovi`
--


INSERT INTO `filmovi` (`id`, `naslov`, `id_zanr`, `godina`, `trajanje`, `slika`) 
VALUES
(1, 'Antitrust', 1, 2001, 105, 'antitrust_2001_1514505278.jpg'),

(2, 'Firewall', 2, 2006, 105, 'firewall_2006_1514505303.jpg'),

(3, 'Hackers', 2, 1995, 107, 'hackers_1995_1514505385.jpg'),

(4, 'Operation Swordfish', 1, 2001, 99, 'operation_swordfish_2001_1514505443.jpg'),

(5, 'Operation Takedown', 6, 2000, 96, 'operation_takedown_2000_1514505485.jpg'),

(6, 'Pirates of Silicon Valley', 6, 1999, 95, 'pirates_of_silicone_valley_1999_1514505523.jpg'),

(7, 'The Social Network', 3, 2010, 120, 'the_social_network_2010_1514505563.jpg'),

(8, 'Tron', 1, 1982, 96, 'tron_1982_1514505612.jpg'),

(9, 'Tron legacy', 1, 2010, 125, 'tron_1982_1514505641.jpg'),
(10, 'War Games', 8, 1983, 114, 'war_games_1983_1514505676.jpg');




--Table structure for table `zanr`
--

CREATE TABLE IF NOT EXISTS `zanr`
(
`id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,

`naziv` varchar(191) NOT NULL,
  PRIMARY KEY (`id`)
) 
ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;



--Dumping data for table `zanr`
--



INSERT INTO `zanr` (`id`, `naziv`) 
VALUES
(1, 'akcijski'),

(2, 'krimić'),

(3, 'drama'),

(4, 'triler'),
(5, 'komedija'),

(6, 'biografski'),

(7, 'avanturistički'),

(8, 'sci-fi'),

(9, 'povijesni');




--Constraints for dumped tables
--

Constraints for table `filmovi`
--
ALTER TABLE `filmovi`
  ADD CONSTRAINT `filmovi_id_zanr_foreign` FOREIGN KEY (`id_zanr`) REFERENCES `zanr` (`id`);





/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
