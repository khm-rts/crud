-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Vært: 127.0.0.1
-- Genereringstid: 06. 12 2023 kl. 09:26:16
-- Serverversion: 10.4.8-MariaDB
-- PHP-version: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `min_database`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `brugere`
--

CREATE TABLE `brugere` (
  `bruger_id` int(10) UNSIGNED NOT NULL,
  `bruger_fornavn` varchar(50) NOT NULL,
  `bruger_efternavn` varchar(50) NOT NULL,
  `bruger_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Data dump for tabellen `brugere`
--

INSERT INTO `brugere` (`bruger_id`, `bruger_fornavn`, `bruger_efternavn`, `bruger_email`) VALUES
(1, 'Elliot', 'Alderson', 'mrrobot@gmail.com'),
(2, 'Felicity', 'Smoak', 'overwatch@gmail.com'),
(3, 'John', 'Connor', 'connor@gmail.com'),
(4, 'Kate', 'Libby', 'acidburn@gmail.com'),
(5, 'Lisbeth', 'Salander', 'wasp@gmail.com'),
(6, 'Kevin', 'Mitnick', 'elcondor@gmail.com'),
(7, 'Stephen', 'Wozniak', 'woz@gmail.com');

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `brugere`
--
ALTER TABLE `brugere`
  ADD PRIMARY KEY (`bruger_id`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `brugere`
--
ALTER TABLE `brugere`
  MODIFY `bruger_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
