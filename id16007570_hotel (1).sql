-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 26, 2021 at 02:21 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id16007570_hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `camere`
--

CREATE TABLE `camere` (
  `codCamera` int(11) NOT NULL,
  `hotel` int(11) NOT NULL,
  `numCamera` int(11) NOT NULL,
  `costoNotte` int(11) NOT NULL,
  `tipoCamera` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `camere`
--

INSERT INTO `camere` (`codCamera`, `hotel`, `numCamera`, `costoNotte`, `tipoCamera`) VALUES
(1, 1, 6, 140, 'singola'),
(2, 1, 1, 150, 'singola'),
(3, 1, 2, 140, 'singola'),
(4, 1, 3, 40, 'singola'),
(5, 1, 4, 70, 'singola'),
(6, 1, 5, 90, 'singola'),
(7, 2, 1, 150, 'singola'),
(8, 2, 2, 140, 'singola'),
(9, 2, 3, 40, 'singola'),
(10, 2, 4, 70, 'matrimoniale'),
(11, 2, 5, 90, 'doppia'),
(12, 3, 1, 150, 'singola'),
(13, 3, 2, 220, 'doppia'),
(14, 3, 3, 70, 'doppia'),
(15, 3, 4, 100, 'doppia'),
(16, 3, 5, 130, 'doppia'),
(17, 4, 1, 150, 'singola'),
(18, 4, 2, 220, 'matrimoniale'),
(19, 4, 3, 70, 'doppia'),
(20, 4, 4, 100, 'doppia'),
(21, 4, 5, 130, 'doppia'),
(22, 5, 1, 200, 'doppia'),
(23, 5, 2, 300, 'suite'),
(24, 5, 3, 75, 'matrimoniale'),
(25, 5, 4, 110, 'matrimoniale'),
(26, 5, 5, 140, 'matrimoniale'),
(27, 6, 1, 200, 'doppia'),
(28, 6, 2, 300, 'suite'),
(29, 6, 3, 120, 'suite'),
(30, 6, 4, 170, 'suite'),
(31, 6, 5, 200, 'suite'),
(32, 7, 1, 200, 'matrimoniale'),
(33, 7, 3, 120, 'suite'),
(34, 7, 4, 170, 'suite'),
(35, 7, 5, 200, 'suite'),
(36, 8, 1, 300, 'suite');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `nome` text COLLATE utf8_unicode_ci NOT NULL,
  `stelle` int(11) NOT NULL,
  `partitaIva` int(11) NOT NULL,
  `telefono` int(11) NOT NULL,
  `mail` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`nome`, `stelle`, `partitaIva`, `telefono`, `mail`) VALUES
('Four Seasons Hotel', 5, 1, 5526261, 'fourseason@mail.com'),
('NH Collection Firenze Porta Rossa', 5, 2, 364528455, 'berninipalace@mail.it'),
('Italiana Hotels Florence', 3, 3, 53644262, 'italianahotel@mail.it'),
('Rosary Garden Hotel', 2, 4, 45836453, 'rosarygarden@mail.it'),
('Plaza Hotel Lucchesi', 5, 5, 34574763, 'hotelpontevecchio@mail.it'),
('Firenze hotel', 1, 7, 5454546, 'hirenzehotel@mail.it');

-- --------------------------------------------------------

--
-- Table structure for table `prenotazione`
--

CREATE TABLE `prenotazione` (
  `codPrenotazione` int(11) NOT NULL,
  `camera` int(11) NOT NULL,
  `dataInizio` date NOT NULL,
  `dataFine` date NOT NULL,
  `utente` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `prenotazione`
--

INSERT INTO `prenotazione` (`codPrenotazione`, `camera`, `dataInizio`, `dataFine`, `utente`) VALUES
(8, 24, '2021-05-06', '2021-05-07', 'Duccio.chellini@gmail.com'),
(9, 4, '2021-05-27', '2021-05-28', 'marco64.chellini@gmail.com'),
(10, 9, '2021-05-24', '2021-05-28', 'Duccio.chellini@gmail.com'),
(11, 7, '2021-05-27', '2021-05-28', 'Duccio.chellini@gmail.com'),
(16, 5, '2021-05-29', '2021-05-09', 'Duccio.chellini@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `utente`
--

CREATE TABLE `utente` (
  `mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cognome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dataNascita` date NOT NULL,
  `telefono` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `documento` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amministratore` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `utente`
--

INSERT INTO `utente` (`mail`, `password`, `nome`, `cognome`, `dataNascita`, `telefono`, `documento`, `amministratore`) VALUES
('ceciliaronchi22@gmail.com', '11111111111', 'cecilia', 'ronchi', '1965-01-22', '3386924195', 'documentoAssente', 0),
('Duccio.chellini@gmail.com', 'duccio1', 'Duccio', 'Chellini', '2002-11-29', '3311144045', 'AY850815', 0),
('florencehotel.admin@mail.it', 'admin', 'Admin', 'Hotel', '2000-01-01', '198735827565', '534383846', 1),
('g.rossi@libero.it', 'password', 'giorgio', 'rossi', '1985-05-08', '3315533645', 'AY372944', 0),
('giovanni.storti@edu.it', 'passwordgiovanni', 'Giovanni', 'Storti', '1968-12-05', '3335568454', 'FI364864A', 0),
('marco64.chellini@gmail.com', 'florencia21', 'marco', 'chellini', '1964-04-02', '3454009533', 'av cfr556 456', 0),
('petalessio@yahoo.it', 'Fiorentina', 'Alessio', 'Petrucci', '2001-11-17', '31481565555', 'Patente', 0),
('samuelconroi@mail.com', 'password', 'samuel', 'conroi', '2000-07-04', '3773781929', '2345', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `camere`
--
ALTER TABLE `camere`
  ADD PRIMARY KEY (`codCamera`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`partitaIva`);

--
-- Indexes for table `prenotazione`
--
ALTER TABLE `prenotazione`
  ADD PRIMARY KEY (`codPrenotazione`),
  ADD KEY `camera` (`camera`);

--
-- Indexes for table `utente`
--
ALTER TABLE `utente`
  ADD UNIQUE KEY `mail` (`mail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `camere`
--
ALTER TABLE `camere`
  MODIFY `codCamera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `partitaIva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `prenotazione`
--
ALTER TABLE `prenotazione`
  MODIFY `codPrenotazione` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `prenotazione`
--
ALTER TABLE `prenotazione`
  ADD CONSTRAINT `prenotazione_ibfk_1` FOREIGN KEY (`camera`) REFERENCES `camere` (`codCamera`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
