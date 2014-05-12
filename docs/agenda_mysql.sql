-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 12, 2014 at 02:46 PM
-- Server version: 5.5.35
-- PHP Version: 5.3.10-1ubuntu3.9

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
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '123'),
(2, 'bogdan', '123');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `firstname`, `lastname`, `street`, `postalcode`, `city`, `region_id`, `phone`, `email`, `img_path`) VALUES
(2, 'Gerald', 'Cambrault', NULL, NULL, NULL, NULL, '0722222222', 'gerald.cambrault@agenda.dev', NULL),
(3, 'Cătălin', 'Ionescu', 'Str. Basarabiei, Nr. 100', NULL, 'Targoviste', 17, '0728186219', 'catalin.ionescu@agenda.dev', NULL),
(4, 'Ioana', 'Petrescu', 'Str. Bujorului, Nr. 6, Bl. 10, Sc. A', '10000', 'Bucuresti', 10, '0728186218', 'ioana.petrescu@agenda.dev', ''),
(5, 'Costin', 'Corbu', 'Str. Test, #100', '123123', 'Alba-Iulia', 1, '0722111111111', 'costin.corbu@agenda.dev', NULL),
(6, 'Alin', 'Dobra', NULL, '', 'Bucuresti', 10, '+ 4 0123312321312', 'alin.dobra@agenda.dev', NULL),
(7, 'Teo', 'Willy', NULL, NULL, 'București', 10, '021321312312', NULL, NULL),
(8, 'John', 'Doe', 'Bld. Unirii', '987', 'Ploiești', 32, '074324323443', 'john.doe@example.com', NULL),
(9, 'Valentin', 'Cristian', 'Bld. Elisabeta, nr. 10003B', '13134', 'Bucuresti', 10, '072233333333', 'valentin.cristian@agenda.dev', NULL),
(10, 'Andreea', 'Alexandrescu', 'Str. abcdefg', NULL, NULL, NULL, '0345123123123', NULL, NULL),
(11, 'Stefan', 'Popescu', NULL, '100', 'Campina', 32, '0712321312312', 'stefan.popescu@example.com', NULL);

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