-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2013 at 09:39 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `agenda`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `street` varchar(255) DEFAULT NULL,
  `postalcode` varchar(10) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `region_id` int(10) unsigned DEFAULT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(120) DEFAULT NULL,
  `img_path` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_contacts_regions` (`region_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `firstname`, `lastname`, `street`, `postalcode`, `city`, `region_id`, `phone`, `email`, `img_path`) VALUES
(2, ' ădela', 'Alexandrescu', NULL, NULL, NULL, NULL, '072222222', 'adela.alexandrescu@example.com', NULL),
(3, 'Catalin', 'Ionescu', 'Str. Basarabiei, Nr. 100', NULL, 'Targoviste', 17, '021123456789', 'catalin.ionescu@example.com', NULL),
(4, 'Bogdan', 'Constantinescu', 'Str. Bujorului, Nr. 6, Bl. 10, Sc. A', '10000', 'Bucuresti', 10, '0728186218', 'bog_con@yahoo.com', 'uploads/bogdan.constantinescu.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE IF NOT EXISTS `regions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(3) NOT NULL,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED AUTO_INCREMENT=43 ;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`id`, `code`, `name`) VALUES
(1, 'AB', 'Alba'),
(2, 'AR', 'Arad'),
(3, 'AG', 'Arges'),
(4, 'BC', 'Bacau'),
(5, 'BH', 'Bihor'),
(6, 'BN', 'Bistrita-Nasaud'),
(7, 'BT', 'Botosani'),
(8, 'BR', 'Braila'),
(9, 'BV', 'Brasov'),
(10, 'B', 'Bucuresti'),
(11, 'BZ', 'Buzau'),
(12, 'CL', 'Calarasi'),
(13, 'CS', 'Caras-Severin'),
(14, 'CJ', 'Cluj'),
(15, 'CT', 'Constanta'),
(16, 'CV', 'Covasna'),
(17, 'DB', 'Dambovita'),
(18, 'DJ', 'Dolj'),
(19, 'GL', 'Galati'),
(20, 'GR', 'Giurgiu'),
(21, 'GJ', 'Gorj'),
(22, 'HG', 'Harghita'),
(23, 'HD', 'Hunedoara'),
(24, 'IL', 'Ialomita'),
(25, 'IS', 'Iasi'),
(26, 'IF', 'Ilfov'),
(27, 'MM', 'Maramures'),
(28, 'MH', 'Mehedinti'),
(29, 'MS', 'Mures'),
(30, 'NT', 'Neamt'),
(31, 'OT', 'Olt'),
(32, 'PH', 'Prahova'),
(33, 'SJ', 'Salaj'),
(34, 'SM', 'Satu Mare'),
(35, 'SB', 'Sibiu'),
(36, 'SV', 'Suceava'),
(37, 'TR', 'Teleorman'),
(38, 'TM', 'Timis'),
(39, 'TL', 'Tulcea'),
(40, 'VL', 'VÃ¢lcea'),
(41, 'VS', 'Vaslui'),
(42, 'VN', 'Vrancea');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `fk_contacts_regions` FOREIGN KEY (`region_id`) REFERENCES `regions` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
