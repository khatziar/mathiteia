-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Εξυπηρετητής: 127.0.0.1
-- Χρόνος δημιουργίας: 08 Μαρ 2025 στις 13:55:06
-- Έκδοση διακομιστή: 10.4.32-MariaDB
-- Έκδοση PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `tainiesdb`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `tainies`
--

CREATE TABLE `tainies` (
  `id` int(11) NOT NULL,
  `titlos` varchar(50) NOT NULL,
  `etos` int(11) DEFAULT 1970,
  `diarkeia` int(11) NOT NULL,
  `trisd` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Άδειασμα δεδομένων του πίνακα `tainies`
--

INSERT INTO `tainies` (`id`, `titlos`, `etos`, `diarkeia`, `trisd`) VALUES
(1, 'The Light Knight', 2008, 152, 0),
(2, 'The Godfather', 1972, 175, 0),
(3, 'Amelie', 2001, 122, 0),
(4, 'The Sting', 1973, 129, 0),
(5, 'How to Train Your Dragon', 2010, 98, 1),
(6, 'Avatar', 2009, 162, 1),
(7, 'Gravity', 2013, 90, 1),
(8, 'Toy Story', 2010, 103, 1),
(9, 'Cloudy With A Chance of Meatballs', 2009, 90, 0),
(10, 'Casablanca', 1942, 102, 0),
(11, 'JamesBond', NULL, 175, 0),
(13, 'MadMax', 1970, 195, 0),
(14, 'Blues Brothers', 1970, 185, 0);

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `tainies`
--
ALTER TABLE `tainies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `tainies`
--
ALTER TABLE `tainies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
