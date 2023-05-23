-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 23, 2023 at 03:37 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bioskop`
--

-- --------------------------------------------------------

--
-- Table structure for table `aktor`
--

DROP TABLE IF EXISTS `aktor`;
CREATE TABLE IF NOT EXISTS `aktor` (
  `aktorid` int NOT NULL AUTO_INCREMENT,
  `nama_aktor` varchar(40) COLLATE utf8mb4_general_ci NOT NULL,
  `foto_aktor` int DEFAULT NULL,
  PRIMARY KEY (`aktorid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aktor`
--

INSERT INTO `aktor` (`aktorid`, `nama_aktor`, `foto_aktor`) VALUES
(1, 'Chriss Pratt', NULL),
(2, 'Karen Gillan', NULL),
(3, 'Will Poulter', NULL),
(4, 'Vin Diesel', NULL),
(5, 'Michelle Rodriguez', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

DROP TABLE IF EXISTS `film`;
CREATE TABLE IF NOT EXISTS `film` (
  `filmid` int NOT NULL,
  `poster_film` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `judul_film` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `detail_film` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `rilis_film` date NOT NULL,
  `rating_film` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `director_film` varchar(40) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `writer_film` varchar(40) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `durasi_film` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `file_film` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`filmid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`filmid`, `poster_film`, `judul_film`, `detail_film`, `rilis_film`, `rating_film`, `director_film`, `writer_film`, `durasi_film`, `file_film`) VALUES
(1, NULL, 'Guardians of the Galaxy Vol. 3', 'Still reeling from the loss of Gamora, Peter Quill rallies his team to defend the universe and one of their own - a mission that could mean the end of the Guardians if not successful.', '2023-05-03', '8,3', 'James Gunn', 'James Gunn', '150', NULL),
(2, NULL, 'Fast X', 'The end of an era for the Fast and Furious Saga, a global franchise that has captivated audiences for three decades. Dom Toretto and his family, who have overcome countless obstacles, now face their most formidable adversary yet—a vengeful threat fro', '2023-05-17', '6,4', 'Louis Leterrier', 'James Gunn', '150m', NULL),
(3, NULL, 'Evil Dead Rise', 'Moving the action out of the woods and into the city, \"Evil Dead Rise\" tells a twisted tale of two estranged sisters, played by Sutherland and Sullivan, whose reunion is cut short by the rise of flesh possessing demons, thrusting them into a primal b', '2023-04-05', '7,5', 'Ben Affleck', 'Alex Convery', '111m', NULL),
(4, NULL, 'Air', 'The movie explores how Nike\'s basketball shoe division was struggling in 1984 due to low sales, and how the company\'s Marketing VP Rob Strasser and CEO Phil Knight tasked basketball talent scout Sonny Vaccaro to find a new spokesperson for their shoe', '2023-04-05', '7,5', 'Ben Affleck', 'Alex Convery', '111m', NULL),
(5, NULL, 'The Super Mario Bros. Movie', 'A Brooklyn plumber named Mario travels through the Mushroom Kingdom with a princess named Peach and an anthropomorphic mushroom named Toad to find Mario\'s brother, Luigi, and to save the world from a ruthless fire-breathing Koopa named Bowser.', '2023-04-05', '7,2', 'Aaron Horvath, Michael Jelenic, Pierre L', 'Matthew Fogel', '92m', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `film_aktor`
--

DROP TABLE IF EXISTS `film_aktor`;
CREATE TABLE IF NOT EXISTS `film_aktor` (
  `film_id` int DEFAULT NULL,
  `aktor_id` int DEFAULT NULL,
  KEY `aktorid_fkfa` (`aktor_id`),
  KEY `filmid_fkfa` (`film_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `film_aktor`
--

INSERT INTO `film_aktor` (`film_id`, `aktor_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 4),
(2, 5),
(5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `film_genre`
--

DROP TABLE IF EXISTS `film_genre`;
CREATE TABLE IF NOT EXISTS `film_genre` (
  `film_id` int DEFAULT NULL,
  `genre_id` int DEFAULT NULL,
  KEY `filmid_fkfg` (`film_id`),
  KEY `aktorid_fkfg` (`genre_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `film_genre`
--

INSERT INTO `film_genre` (`film_id`, `genre_id`) VALUES
(1, 1),
(1, 2),
(1, 6),
(2, 1),
(2, 2),
(2, 7),
(2, 14),
(2, 20);

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

DROP TABLE IF EXISTS `genre`;
CREATE TABLE IF NOT EXISTS `genre` (
  `genreid` int NOT NULL AUTO_INCREMENT,
  `nama_genre` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`genreid`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`genreid`, `nama_genre`) VALUES
(1, 'Action'),
(2, 'Adventure'),
(3, 'Animation'),
(4, 'Anime'),
(5, 'Biography'),
(6, 'Comedy'),
(7, 'Crime'),
(8, 'Documentary'),
(9, 'Drama'),
(10, 'Family'),
(11, 'Fantasy'),
(12, 'History'),
(13, 'Horror'),
(14, 'Mystery'),
(15, 'Politics'),
(16, 'Reality'),
(17, 'Romance'),
(18, 'Science Fiction'),
(19, 'Sport'),
(20, 'Thriller'),
(21, 'War');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `roleid` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `role` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`roleid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`roleid`, `role`) VALUES
('role1', 'admin'),
('role2', 'member');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userid` int NOT NULL AUTO_INCREMENT,
  `email` varchar(40) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `nohp` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `aktif` enum('1','0') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `roleid` varchar(6) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`userid`),
  KEY `user_fkr_1` (`roleid`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `email`, `password`, `name`, `nohp`, `token`, `aktif`, `roleid`) VALUES
(1, 'mohamad.reyhand.f@students.esqbs.ac.id', '$2y$10$zFq3ib8eUUvCETcNEFfOiuM1HlxrrFiIFfvqZ/qGpdPa7vL1R4Urm', 'Reyhand', '082246680795', '5e890f5f4eb6c8db29a5ce1d733a248ba2c55456bdc99fe4705949957adc46f5', '1', 'role1'),
(19, 'refido.arjunal.a@students.esqbs.ac.id', '$2y$10$.mjtXPMvQOoLniOd9M6YwOnO8BxOVlYQtB.4BrBQA4VB2qvXTey56', 'Sensei ji', '03124324341', '74942d81fc2154f2abf73d8b1bd8e9973e5f322e4cf81ff5796aebd5b5fa4fcc', '1', 'role1'),
(20, 'damar.adji.s@students.esqbs.ac.id', '$2y$10$O5DxPz/VhAP7ftZvSD3ihO8S94n5Ka1jtRD33aAoljxe3XvVUliKW', 'Damar', '23232323', '0ff24d051c96cfb0492b0f9765b1d70e0ed037ceaa989aeb828fd6efa2424107', '1', 'role2'),
(21, 'afifah.k.rusli@students.esqbs.ac.id', '$2y$10$TW8cNpUyyoSXIY0CqwuQvO3FKLktRwUftICfjK/bmt3sjZQgoAcOu', 'Afifah', '023232323', 'ca5d7b4dacc0a88b9e2c0df29955349400374c946554a5d07820207c17741aea', '1', 'role2');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `film_aktor`
--
ALTER TABLE `film_aktor`
  ADD CONSTRAINT `aktorid_fkfa` FOREIGN KEY (`aktor_id`) REFERENCES `aktor` (`aktorid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `filmid_fkfa` FOREIGN KEY (`film_id`) REFERENCES `film` (`filmid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `film_genre`
--
ALTER TABLE `film_genre`
  ADD CONSTRAINT `aktorid_fkfg` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`genreid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `filmid_fkfg` FOREIGN KEY (`film_id`) REFERENCES `film` (`filmid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_fkr_1` FOREIGN KEY (`roleid`) REFERENCES `role` (`roleid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
