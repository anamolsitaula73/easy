-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 27, 2023 at 10:23 PM
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
-- Database: `easy-li`
--

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

DROP TABLE IF EXISTS `artists`;
CREATE TABLE IF NOT EXISTS `artists` (
  `artist_id` int NOT NULL AUTO_INCREMENT,
  `artist_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`artist_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`artist_id`, `artist_name`) VALUES
(1, 'Mickey Mouse'),
(2, 'Goofy'),
(3, 'Bart Simpson'),
(4, 'Homer'),
(5, 'Bruce Lee'),
(6, 'sushant kc'),
(7, 'motu'),
(8, 'chyas'),
(9, 'Amrit Gyawali');

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

DROP TABLE IF EXISTS `genres`;
CREATE TABLE IF NOT EXISTS `genres` (
  `genre_id` int NOT NULL AUTO_INCREMENT,
  `genre_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`genre_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`genre_id`, `genre_name`) VALUES
(1, 'Rock'),
(2, 'Pop'),
(3, 'Hip-hop'),
(4, 'Rap'),
(5, 'R & B'),
(6, 'Classical'),
(7, 'Techno'),
(8, 'Jazz'),
(9, 'Folk'),
(10, 'Country'),
(11, 'lokdohori'),
(12, 'll'),
(13, 'jhyaurey bhaka');

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

DROP TABLE IF EXISTS `songs`;
CREATE TABLE IF NOT EXISTS `songs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `artist` int NOT NULL,
  `genre` int NOT NULL,
  `path` varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `artist` (`artist`),
  KEY `genre` (`genre`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `title`, `artist`, `genre`, `path`) VALUES
(24, 'Sci-fi', 5, 2, 'assets/music/bensound-scifi.mp3'),
(25, 'Slow Motion', 5, 3, 'assets/music/bensound-slowmotion.mp3'),
(26, 'Sunny', 5, 4, 'assets/music/bensound-sunny.mp3'),
(27, 'Sweet', 5, 5, 'assets/music/bensound-sweet.mp3'),
(28, 'Tenderness ', 3, 7, 'assets/music/bensound-tenderness.mp3'),
(29, 'The Lounge', 3, 8, 'assets/music/bensound-thelounge.mp3 '),
(30, 'Ukulele', 3, 9, 'assets/music/bensound-ukulele.mp3 '),
(46, 'SS', 5, 10, '../assets/newmusic/wewillrock.mp3'),
(56, 'Bheos Vayea Mah', 6, 2, 'assets/newmusic/behos-vayea.mp3'),
(59, 'We will rock you', 1, 1, 'assets/newmusic/wewillrock.mp3'),
(62, 'haha', 5, 9, 'assets/newmusic/behos-vayea.mp3'),
(63, 'haha', 5, 9, 'assets/newmusic/behos-vayea.mp3'),
(64, 'new Begining', 3, 10, 'assets/newmusic/begin.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(190) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(32) NOT NULL,
  `usertype` varchar(190) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=120 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `usertype`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin123', 'admin'),
(105, 'Anamol Sitaula', 'anmolsitaula73@gmail.com', 'aaaaaa', 'user'),
(106, 'gorey', 'sa@gmail.com', 'sasa', 'user'),
(107, 'Pranil Gurung Aka BOBO', 'pranilgurung@gmail.com', 'aaaaaa', 'user'),
(110, 'anamol1', 'anmolsitaula73@gmail.com', 'vvvvvv', 'user'),
(112, 'aaa', 'mm@gmail.com', 'aaaaaa', 'user'),
(113, 'anamol1', 'bb@gmail.com', 'vvvvvv', 'user'),
(115, 'aan n', 'aa@gmail.com', 'nnnnnn', 'user'),
(116, 'Suyog Poudel', 'suyogpoudel3@gmail.com', 'aaaaaa', 'user'),
(118, 'gorg', 'gorey@gmail.com', 'aaaaaa', 'user'),
(119, 'Amrit Gyawali', 'amritgyawali8848@gmail.com', 'ssssss', 'user');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `songs`
--
ALTER TABLE `songs`
  ADD CONSTRAINT `songs_ibfk_1` FOREIGN KEY (`artist`) REFERENCES `artists` (`artist_id`),
  ADD CONSTRAINT `songs_ibfk_3` FOREIGN KEY (`genre`) REFERENCES `genres` (`genre_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
