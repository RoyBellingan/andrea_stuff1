-- phpMyAdmin SQL Dump
-- version 4.0.0-rc1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generato il: Mag 29, 2013 alle 09:18
-- Versione del server: 5.0.24-community-nt
-- Versione PHP: 5.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `studenti`
--
use `studenti`;
-- --------------------------------------------------------

--
-- Struttura della tabella `docenti`
--

CREATE TABLE IF NOT EXISTS `docenti` (
  `cod_docente` int(11) NOT NULL,
  `nome_docente` char(10) NOT NULL,
  `cognome_docente` char(20) NOT NULL,
  `FKcod_materie` int(11) NOT NULL,
  UNIQUE KEY `indice_docenti` (`cod_docente`),
  KEY `FKcod_materie` (`FKcod_materie`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `materie`
--

CREATE TABLE IF NOT EXISTS `materie` (
  `cod_materia` int(11) NOT NULL,
  `nome_materia` char(20) default NULL,
  UNIQUE KEY `indice_materie` (`cod_materia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `materie`
--

INSERT INTO `materie` (`cod_materia`, `nome_materia`) VALUES
(1, 'arte'),
(3, 'matematica'),
(4, 'informatica'),
(5, 'geografia'),
(6, 'fisica'),
(7, 'chimica'),
(8, 'francese'),
(9, 'fisica'),
(10, 'astronomia'),
(11, 'religione'),
(12, 'tedesco'),
(13, 'fafa'),
(14, 'astrofisica'),
(15, 'astronomia');

-- --------------------------------------------------------

--
-- Struttura della tabella `studenti`
--

CREATE TABLE IF NOT EXISTS `studenti` (
  `cod_studente` int(11) NOT NULL,
  `nome` char(10) NOT NULL,
  `cognome` char(20) NOT NULL,
  `classe` int(11) NOT NULL,
  UNIQUE KEY `indice_studenti` (`cod_studente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `studenti`
--

INSERT INTO `studenti` (`cod_studente`, `nome`, `cognome`, `classe`) VALUES
(1, '"carlo"', '"marzetti"', 1),
(2, '"marcello"', '"loretti"', 2);

-- --------------------------------------------------------

--
-- Struttura della tabella `studentixdocenti`
--

CREATE TABLE IF NOT EXISTS `studentixdocenti` (
  `FKcod_studenti` int(11) NOT NULL,
  `FKcod_docenti` int(11) NOT NULL,
  UNIQUE KEY `indicestudentixdocenti` (`FKcod_docenti`,`FKcod_studenti`),
  KEY `FKcod_studenti` (`FKcod_studenti`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `studentixmateria`
--

CREATE TABLE IF NOT EXISTS `studentixmateria` (
  `FKcod_materia` int(11) NOT NULL,
  `FKcod_studente` int(11) NOT NULL,
  `voto` int(11) NOT NULL,
  `data` date NOT NULL,
  UNIQUE KEY `indice_studentixmateria` (`FKcod_studente`,`FKcod_materia`),
  KEY `FKcod_materia` (`FKcod_materia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE IF NOT EXISTS `utenti` (
  `cognome` char(20) NOT NULL,
  `nome` char(10) NOT NULL,
  `username` char(20) NOT NULL,
  `password` char(20) NOT NULL,
  `email` char(20) NOT NULL,
  `telefono` char(20) NOT NULL,
  `indirizzo` char(25) NOT NULL,
  `data` date default NULL,
  UNIQUE KEY `indiceutenti` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`cognome`, `nome`, `username`, `password`, `email`, `telefono`, `indirizzo`, `data`) VALUES
('contartese', 'andrea', 'admin', 'prova', 'cont@gm.it', '06214847', 'via dalle scatole 32', NULL),
('coluccia', 'fabio', 'ciuccia', 'ciuccia', 'ciuccia@gmail', '216310,', 'via dalle scatole 32', NULL),
('contartese', 'andrea', 'conti', 'prova', 'contartese@gmail.com', '06654564', 'via dalle scatole 23', NULL),
('jimenez', 'pablo', 'jimpax', 'prova', 'jp@gm.it', '061486546', 'via dei scemi 34', NULL),
('pippo', 'pippo', 'marina', 'marina', 'jskdjkdjksdj', 'dhjhdjdhs', 'jassdkdjsdjds', NULL),
('ottaviani', 'mattia', 'matti', 'prova', 'mattia@gmail.com', '30245804664', 'via dalle scatole 32', NULL),
('provv', 'ropp', 'prova', 'prova', 'cpso@ff', '064875', 'viaia', NULL);

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `docenti`
--
ALTER TABLE `docenti`
  ADD CONSTRAINT `docenti_ibfk_1` FOREIGN KEY (`FKcod_materie`) REFERENCES `materie` (`cod_materia`);

--
-- Limiti per la tabella `studentixdocenti`
--
ALTER TABLE `studentixdocenti`
  ADD CONSTRAINT `studentixdocenti_ibfk_1` FOREIGN KEY (`FKcod_studenti`) REFERENCES `studenti` (`cod_studente`),
  ADD CONSTRAINT `studentixdocenti_ibfk_2` FOREIGN KEY (`FKcod_docenti`) REFERENCES `docenti` (`cod_docente`);

--
-- Limiti per la tabella `studentixmateria`
--
ALTER TABLE `studentixmateria`
  ADD CONSTRAINT `studentixmateria_ibfk_1` FOREIGN KEY (`FKcod_studente`) REFERENCES `studenti` (`cod_studente`),
  ADD CONSTRAINT `studentixmateria_ibfk_2` FOREIGN KEY (`FKcod_materia`) REFERENCES `materie` (`cod_materia`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
