-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1:3306
-- Timp de generare: nov. 01, 2019 la 09:42 PM
-- Versiune server: 5.7.26
-- Versiune PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `enginerepaire`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `db_login`
--

DROP TABLE IF EXISTS `db_login`;
CREATE TABLE IF NOT EXISTS `db_login` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `USERNAME` varchar(30) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `PASSWORD` varchar(128) NOT NULL,
  `isAdmin` int(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `db_login`
--

INSERT INTO `db_login` (`ID`, `USERNAME`, `EMAIL`, `PASSWORD`, `isAdmin`) VALUES
(1, 'fredi', 'scorneaalfredmarius@yahoo.com', 'frediesmecher', 0),
(2, 'fredi2', 'fredi@ceva.ro', '123456', 0),
(3, 'fredi', 'agdgj2@dnANDM', 'frediesmecher', 0),
(4, 'fredi', 'mas31@yahoo.com', 'frediesmecher', 0),
(5, 'fredi', 'ewqeqwe@gmaiol.com', 'frediesmecher', 0),
(6, 'fredi', 'ana@mai.com', 'frediesmecher', 0),
(14, 'scorneaalfredmarius@yahoo.com', '', 'frediesmecher', 0),
(15, 'stefania', 'stefania_mihaela14@yahoo.com', '1234', 0),
(12, 'adideaconu', 'adi@sugecucu', 'adideaconu', 0),
(16, 'sug', 'sugi@g', '123', 1);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `db_programari`
--

DROP TABLE IF EXISTS `db_programari`;
CREATE TABLE IF NOT EXISTS `db_programari` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `ID_SERVICII` varchar(30) NOT NULL,
  `ID_UTILIZATOR` int(10) NOT NULL,
  `DATA` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `db_programari`
--

INSERT INTO `db_programari` (`ID`, `ID_SERVICII`, `ID_UTILIZATOR`, `DATA`) VALUES
(1, '3', 1, '2019-11-12'),
(5, '7', 16, '2019-11-22'),
(4, '5, 6', 16, '2019-11-13'),
(6, '6, 7', 0, '2019-11-16'),
(7, '5, 6', 16, '2019-11-23'),
(8, '2, 3, 4', 16, '2019-11-16'),
(9, '6, 7', 16, '2019-11-30'),
(10, '7', 16, '2019-11-14'),
(11, '5', 16, '2019-11-09'),
(12, '5, 6', 16, '2019-11-09'),
(13, '6', 16, '2019-11-11'),
(14, '6', 16, '2019-11-10'),
(15, '6', 16, '2019-11-08'),
(16, '6', 16, '2019-11-01'),
(17, '3', 16, '2019-11-02'),
(18, '3', 16, '2019-11-03');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `db_recenzii`
--

DROP TABLE IF EXISTS `db_recenzii`;
CREATE TABLE IF NOT EXISTS `db_recenzii` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `USERNAME` varchar(30) NOT NULL,
  `RATING` int(10) NOT NULL,
  `TEXT` varchar(250) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `db_recenzii`
--

INSERT INTO `db_recenzii` (`ID`, `USERNAME`, `RATING`, `TEXT`) VALUES
(1, 'fredi', 5, 'Genial acest service.Mi-am reparat caruta de BMW rasturnata pe Germania'),
(2, 'Adi', 3, 'Sugi'),
(3, 'fredi2', 1, 'mio furat bani si bambeu meu o ruginit ca lau lasat cu geamurile deskise si o ploat si so strikat motoru\''),
(4, 'fredi', 4, 'Sall'),
(5, 'fredi', 4, 'Ce faci bai'),
(6, 'fredi', 4, ''),
(7, 'fredi', 4, ''),
(8, 'fredi', 3, 'treii stelute'),
(9, 'fredi', 5, 'pizda ma-tii cu 5 stelute'),
(10, 'fredi', 1, 'pzd mati'),
(11, 'fredi', 1, 'ewfwe'),
(12, 'fredi', 4, 'ce faci vere'),
(13, 'fredi', 4, 'hahalero');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `db_servicii`
--

DROP TABLE IF EXISTS `db_servicii`;
CREATE TABLE IF NOT EXISTS `db_servicii` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `SERVICIU` varchar(50) NOT NULL,
  `PRET` int(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `db_servicii`
--

INSERT INTO `db_servicii` (`ID`, `SERVICIU`, `PRET`) VALUES
(1, 'Vopsitorie Integrala', 50),
(2, 'Revizie Motor', 100),
(3, 'Revizie Cutie', 85),
(4, 'Schimburi Discuri & Placute De Frana', 150),
(5, 'Detailng Interior & Exterior', 95),
(6, 'Geometrie Roti', 75),
(7, 'Schimb Anvelope', 75);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
