-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1:3306
-- Timp de generare: nov. 22, 2019 la 10:17 AM
-- Versiune server: 5.7.26
-- Versiune PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `machiaje`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `buze`
--

DROP TABLE IF EXISTS `buze`;
CREATE TABLE IF NOT EXISTS `buze` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nume` varchar(50) NOT NULL,
  `pret` varchar(50) NOT NULL,
  `cantitate` int(11) NOT NULL,
  `img` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Eliminarea datelor din tabel `buze`
--

INSERT INTO `buze` (`id`, `nume`, `pret`, `cantitate`, `img`) VALUES
(1, 'ruj MAC', '90 lei', 10, 'ruj.mac.jpg'),
(2, 'ruj Maybelline', '32 lei', 5, 'ruj.maybelline.jpg'),
(3, 'ruj LOreal Paris', '30 lei', 5, 'ruj.Loreal.jpg'),
(4, 'ruj NYX', '40 lei', 20, 'ruj.nyx.jpg'),
(5, 'ruj Catrice', '25 lei', 11, 'ruj.catrice.jpg'),
(6, 'ruj Sleek', '30 lei', 25, 'ruj.sleek.jpg'),
(7, 'ruj MaxFactor', '23 lei', 2, 'ruj.maxfactor.jpg'),
(8, 'ruj Rimmel', '21 lei', 4, 'ruj.rimmel.jpg'),
(9, 'ruj Dior', '100 lei', 4, 'ruj.dior.jpg'),
(10, 'ruj Bourjois', '18 lei', 1, 'ruj.bourjois.jpg');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `comenzii`
--

DROP TABLE IF EXISTS `comenzii`;
CREATE TABLE IF NOT EXISTS `comenzii` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `Nume` varchar(30) NOT NULL,
  `Adresa` varchar(200) NOT NULL,
  `Produse` varchar(200) NOT NULL,
  `Pret` varchar(10) NOT NULL,
  `Telefon` int(15) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `fata`
--

DROP TABLE IF EXISTS `fata`;
CREATE TABLE IF NOT EXISTS `fata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nume` varchar(50) NOT NULL,
  `pret` varchar(50) NOT NULL,
  `cantitate` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Eliminarea datelor din tabel `fata`
--

INSERT INTO `fata` (`id`, `nume`, `pret`, `cantitate`, `img`) VALUES
(1, 'corector lichid Catrice', '16 lei', '15 buc', 'corector.catrice.jpg'),
(2, 'pudra Rimmel', '19 lei', '10 buc', 'pudra.rimmel.jpg'),
(3, 'iluminator Bourjois', '29 lei', '9 buc', 'iluminator.bourjois.jpg'),
(4, 'fond de ten NYX', '79 lei', '4 buc', 'fondeten.nyx.jpg'),
(5, 'fond de ten Estee Lauder', '165 lei', '3 buc', 'fonddeten.esteelauder.jpg'),
(6, 'anticearcan Estee Lauder', '130 lei', '1 buc', 'anticearcan.esteelauder.jpg'),
(7, 'blush Bourjois', '34 lei', '4 buc', 'blush.bourjois.jpg'),
(8, 'bronzer NYX', '50 lei', '4 buc', 'bronzer.nyx.jpg'),
(9, 'spray facial MAC', '90 lei', '5 buc', 'spray.mac.jpg'),
(10, 'perle bronzante Avon', '29 lei', '10 buc', 'perle.avon.jpg');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `ochi`
--

DROP TABLE IF EXISTS `ochi`;
CREATE TABLE IF NOT EXISTS `ochi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nume` varchar(50) NOT NULL,
  `pret` varchar(50) NOT NULL,
  `cantitate` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Eliminarea datelor din tabel `ochi`
--

INSERT INTO `ochi` (`id`, `nume`, `pret`, `cantitate`, `img`) VALUES
(1, 'mascara Pupa', '42 lei', '4 buc', 'mascara.pupa.jpg'),
(2, 'paleta farduri Revolution', '25 lei', '5 buc', 'paleta.revolution.jpg'),
(3, 'mascara Maybelline', '25 lei', '30 buc', 'mascara.maybelline.jpg'),
(4, 'paleta farduri Huda Beauty', '310 lei', '2 buc', 'paleta.huda.jpg'),
(5, 'eyeliner NYX', '50 lei', '12 buc', 'eyeliner.nyx.jpg'),
(6, 'baza pleoapa Avon', '14 lei', '34 buc', 'bazapleoapa.avon.jpg'),
(7, 'adeziv gene false', '22 lei', '7 buc', 'adezivgene.jpg'),
(8, 'baza pentru sclipici NYX', '43 lei', '4 buc', 'bazasclipici.nyx.jpg'),
(9, 'fard de pleoape theBalm', '76 lei', '3 buc', 'fard.thebalm.jpg'),
(10, 'fixator baza pleoapa Revolution', '19 lei', '5 buc', 'fixator.revolution.jpg');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `isAdmin` int(2) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nume` varchar(30) NOT NULL,
  `prenume` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Eliminarea datelor din tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `isAdmin`, `email`, `nume`, `prenume`) VALUES
(2, 'florina', 'florina', 1, 'florina@gmail.com', 'florina', 'todinca');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
