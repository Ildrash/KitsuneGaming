-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 21, 2023 at 05:03 PM
-- Server version: 8.0.31
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gaming`
--

-- --------------------------------------------------------

--
-- Table structure for table `clienti`
--

DROP TABLE IF EXISTS `clienti`;
CREATE TABLE IF NOT EXISTS `clienti` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Nume` varchar(15) COLLATE utf8mb3_romanian_ci NOT NULL,
  `Prenume` varchar(20) COLLATE utf8mb3_romanian_ci NOT NULL,
  `Adresa` varchar(50) COLLATE utf8mb3_romanian_ci NOT NULL,
  `Email` varchar(20) COLLATE utf8mb3_romanian_ci NOT NULL,
  `Telefon` int NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_romanian_ci;

--
-- Dumping data for table `clienti`
--

INSERT INTO `clienti` (`ID`, `Nume`, `Prenume`, `Adresa`, `Email`, `Telefon`) VALUES
(1, 'Necula', 'Adrian', 'Str. Lujerului, nr. 3, Brasov', 'adriannecula@gmail.c', 754222111),
(2, 'Constantinescu', 'Maria', 'Str. Agavei, nr. 27, Bucuresti', 'maria.c12@yahoo.com', 754243164),
(3, 'Alecu', 'Georgiana', 'Str. Petrolului, nr. 15, Ap. 12, Turda', 'GeorgitheA@gmail.com', 774851298),
(4, 'Mihai', 'Andrei', 'Str. Pluto, nr. 1, Bucuresti', 'mihai548@icloud.com', 756127435);

-- --------------------------------------------------------

--
-- Table structure for table `comenzi`
--

DROP TABLE IF EXISTS `comenzi`;
CREATE TABLE IF NOT EXISTS `comenzi` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `NumeClient` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_romanian_ci NOT NULL,
  `Email` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_romanian_ci NOT NULL,
  `NumeProdus` varchar(50) COLLATE utf8mb3_romanian_ci NOT NULL,
  `Cantitate` int NOT NULL,
  `PretVanzare` decimal(5,2) DEFAULT NULL,
  `Data` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=166 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_romanian_ci;

--
-- Dumping data for table `comenzi`
--

INSERT INTO `comenzi` (`ID`, `NumeClient`, `Email`, `NumeProdus`, `Cantitate`, `PretVanzare`, `Data`) VALUES
(165, 'Alecu', 'constantin.catalin2004@gmail.com', 'PathOfExile', 12, NULL, '2023-11-21 18:25:03'),
(161, 'Ovidiu Marian', 'Test@test.com', 'FigurineFunkoPop', 26, NULL, '2023-11-21 18:18:00'),
(157, 'Maria', 'Catatest@test.ro', 'FigurineFunkoPop', 25, NULL, '2023-11-21 18:14:45'),
(156, 'Catalin', 'Catatest@test.ro', 'AgeOfEmpires4', 8, NULL, '2023-11-21 18:13:37');

-- --------------------------------------------------------

--
-- Table structure for table `mesaje`
--

DROP TABLE IF EXISTS `mesaje`;
CREATE TABLE IF NOT EXISTS `mesaje` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Nume` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_romanian_ci NOT NULL,
  `Email` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_romanian_ci NOT NULL,
  `Telefon` varchar(12) CHARACTER SET utf8mb3 COLLATE utf8mb3_romanian_ci DEFAULT NULL,
  `Mesaj` varchar(1000) CHARACTER SET utf8mb3 COLLATE utf8mb3_romanian_ci NOT NULL,
  `Data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_romanian_ci;

--
-- Dumping data for table `mesaje`
--

INSERT INTO `mesaje` (`ID`, `Nume`, `Email`, `Telefon`, `Mesaj`, `Data`) VALUES
(55, 'Alecu Georgeta', 'constantin.catalin20', '0732021015', 'Star', '2023-11-21 17:41:26'),
(56, 'Andrei Gheorghe', 'constantin.catalin20', '124234521321', 'Salutare', '2023-11-21 18:28:26'),
(58, 'Daniel', 'constantin.catalin20', '0727259111', 'Alberque', '2023-11-21 18:44:54');

-- --------------------------------------------------------

--
-- Table structure for table `producatori`
--

DROP TABLE IF EXISTS `producatori`;
CREATE TABLE IF NOT EXISTS `producatori` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `NumeProducator` varchar(30) COLLATE utf8mb3_romanian_ci NOT NULL,
  `Adresa` varchar(30) COLLATE utf8mb3_romanian_ci NOT NULL,
  `email` varchar(20) COLLATE utf8mb3_romanian_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_romanian_ci;

--
-- Dumping data for table `producatori`
--

INSERT INTO `producatori` (`ID`, `NumeProducator`, `Adresa`, `email`) VALUES
(1, 'ArenaNet', 'Washington, USA', 'pr@arena.net'),
(2, 'Gunfire Games', 'Austin, Texas, US', 'pr@gunfiregames.com'),
(3, 'CD PROJECT RED', 'Warsaw, Poland', 'biz@cdprojektred.com'),
(4, 'Grinding Gear Games', 'Auckland, NZ', 'contact@grindinggear'),
(5, 'Blizzard Entertainment', 'Irvine, California, USA', 'pr@blizzard.com'),
(6, 'Capcom', 'London, UK', 'support@capcom.com'),
(7, 'Ubisoft', 'Montreuil, France', 'support@ubi.com'),
(8, 'Xbox Game Studios', 'Redmond, Washington, US', 'support@xbox.com'),
(9, '2K Games', 'LONDON, UK', 'PR@2KGAMES.COM'),
(10, '4A Games', 'Kyiv, Ukraine', 'contact@4a-games.com'),
(11, 'id Software', 'Richardson, Texas, US', 'help.bethesda.net'),
(12, 'Funko', 'Everett, Washington, US', 'funkoeurope@help.com');

-- --------------------------------------------------------

--
-- Table structure for table `produse`
--

DROP TABLE IF EXISTS `produse`;
CREATE TABLE IF NOT EXISTS `produse` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `ID_Producator` int NOT NULL,
  `NumeProdus` varchar(20) COLLATE utf8mb3_romanian_ci NOT NULL,
  `Descriere` varchar(10) COLLATE utf8mb3_romanian_ci NOT NULL,
  `Cantitate` int NOT NULL,
  `PretAchizitie` decimal(4,2) NOT NULL,
  `PretVanzare` decimal(6,2) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_romanian_ci;

--
-- Dumping data for table `produse`
--

INSERT INTO `produse` (`ID`, `ID_Producator`, `NumeProdus`, `Descriere`, `Cantitate`, `PretAchizitie`, `PretVanzare`) VALUES
(1, 5, 'WorldOfWarcraft', 'MMORPG', 25, '49.99', '69.99'),
(2, 2, 'PathOfExile', 'MMORPG', 10, '35.99', '49.99'),
(3, 1, 'GuildWars2', 'MMORPG', 15, '59.99', '79.99'),
(4, 3, 'CyberPunk2077', 'Action', 32, '99.99', '149.99'),
(5, 4, 'Darksiders3', 'Action', 8, '79.99', '119.99'),
(6, 6, 'DevilMayCry5', 'Action', 6, '99.99', '119.99'),
(7, 7, 'Anno1800', 'RTS', 12, '69.99', '89.99'),
(8, 8, 'AgeOfEmpires4', 'RTS', 9, '89.99', '129.99'),
(9, 5, 'StarCraft2', 'RTS', 6, '69.99', '89.99'),
(10, 9, 'Borderlands3', 'FPS', 21, '79.99', '99.99'),
(11, 10, 'MetroExodus', 'FPS', 13, '99.99', '129.99'),
(12, 11, 'DoomEternal', 'FPS', 26, '89.99', '119.99'),
(13, 12, 'FigurineFunkoPop', 'Figurine', 100, '79.99', '129.99');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
