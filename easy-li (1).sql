-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 26, 2023 at 03:51 PM
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
-- Table structure for table `albums`
--

DROP TABLE IF EXISTS `albums`;
CREATE TABLE IF NOT EXISTS `albums` (
  `album_id` int NOT NULL AUTO_INCREMENT,
  `album_title` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `artist` int NOT NULL,
  `artworkPath` varchar(500) NOT NULL,
  PRIMARY KEY (`album_id`),
  KEY `artist` (`artist`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`album_id`, `album_title`, `artist`, `artworkPath`) VALUES
(1, 'Bacon and Eggs', 2, 'assets/images/artwork/clearday.jpg'),
(2, 'Pizza head', 5, 'assets/images/artwork/energy.jpg'),
(3, 'Summer Hits', 3, 'assets/images/artwork/goinghigher.jpg'),
(4, 'The movie soundtrack', 2, 'assets/images/artwork/funkyelement.jpg'),
(5, 'Best of the Worst', 1, 'assets/images/artwork/popdance.jpg'),
(6, 'Hello World', 3, 'assets/images/artwork/ukulele.jpg'),
(7, 'Best beats', 4, 'assets/images/artwork/sweet.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

DROP TABLE IF EXISTS `artists`;
CREATE TABLE IF NOT EXISTS `artists` (
  `id` int NOT NULL AUTO_INCREMENT,
  `artist_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`id`, `artist_name`) VALUES
(1, 'Mickey Mouse'),
(2, 'Goofy'),
(3, 'Bart Simpson'),
(4, 'Homer'),
(5, 'Bruce Lee'),
(6, 'sushant kc');

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

DROP TABLE IF EXISTS `genres`;
CREATE TABLE IF NOT EXISTS `genres` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `name`) VALUES
(1, 'Rock'),
(2, 'Pop'),
(3, 'Hip-hop'),
(4, 'Rap'),
(5, 'R & B'),
(6, 'Classical'),
(7, 'Techno'),
(8, 'Jazz'),
(9, 'Folk'),
(10, 'Country');

-- --------------------------------------------------------

--
-- Table structure for table `name`
--

DROP TABLE IF EXISTS `name`;
CREATE TABLE IF NOT EXISTS `name` (
  `id` int NOT NULL,
  `namee` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `playlists`
--

DROP TABLE IF EXISTS `playlists`;
CREATE TABLE IF NOT EXISTS `playlists` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `owner` varchar(50) NOT NULL,
  `dateCreated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `playlists`
--

INSERT INTO `playlists` (`id`, `name`, `owner`, `dateCreated`) VALUES
(1, 'sss', 'suyog', '2023-06-12 00:00:00'),
(2, 'bbb', 'suyog', '2023-06-12 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `playlistsongs`
--

DROP TABLE IF EXISTS `playlistsongs`;
CREATE TABLE IF NOT EXISTS `playlistsongs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `songId` int NOT NULL,
  `playlistId` int NOT NULL,
  `playlistOrder` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `songId` (`songId`),
  KEY `playlistId` (`playlistId`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `playlistsongs`
--

INSERT INTO `playlistsongs` (`id`, `songId`, `playlistId`, `playlistOrder`) VALUES
(1, 7, 1, 0),
(2, 10, 1, 1),
(3, 17, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

DROP TABLE IF EXISTS `songs`;
CREATE TABLE IF NOT EXISTS `songs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `artist` int NOT NULL,
  `album` int NOT NULL,
  `genre` int NOT NULL,
  `duration` varchar(8) NOT NULL,
  `path` varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `artist` (`artist`),
  KEY `album` (`album`),
  KEY `genre` (`genre`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `title`, `artist`, `album`, `genre`, `duration`, `path`) VALUES
(1, 'Acoustic Breeze', 1, 5, 8, '2:37', 'assets/music/bensound-acousticbreeze.mp3'),
(2, 'A new beginning', 1, 5, 1, '2:35', 'assets/music/bensound-anewbeginning.mp3'),
(3, 'Better Days', 1, 5, 2, '2:33', 'assets/music/bensound-betterdays.mp3'),
(4, 'Buddy', 1, 5, 3, '2:02', 'assets/music/bensound-buddy.mp3'),
(5, 'Clear Day', 1, 5, 4, '1:29', 'assets/music/bensound-clearday.mp3'),
(6, 'Going Higher', 2, 1, 1, '4:04', 'assets/music/bensound-goinghigher.mp3'),
(7, 'Funny Song', 2, 4, 2, '3:07', 'assets/music/bensound-funnysong.mp3'),
(8, 'Funky Element', 2, 1, 3, '3:08', 'assets/music/bensound-funkyelement.mp3'),
(9, 'Extreme Action', 2, 1, 4, '8:03', 'assets/music/bensound-extremeaction.mp3'),
(10, 'Epic', 2, 4, 5, '2:58', 'assets/music/bensound-epic.mp3'),
(11, 'Energy', 2, 1, 6, '2:59', 'assets/music/bensound-energy.mp3'),
(12, 'Dubstep', 2, 1, 7, '2:03', 'assets/music/bensound-dubstep.mp3'),
(13, 'Happiness', 3, 6, 8, '4:21', 'assets/music/bensound-happiness.mp3'),
(14, 'Happy Rock', 3, 6, 9, '1:45', 'assets/music/bensound-happyrock.mp3'),
(15, 'Jazzy Frenchy', 3, 6, 10, '1:44', 'assets/music/bensound-jazzyfrenchy.mp3'),
(16, 'Little Idea', 3, 6, 1, '2:49', 'assets/music/bensound-littleidea.mp3'),
(17, 'Memories', 3, 6, 2, '3:50', 'assets/music/bensound-memories.mp3'),
(18, 'Moose', 4, 7, 1, '2:43', 'assets/music/bensound-moose.mp3'),
(19, 'November', 4, 7, 2, '3:32', 'assets/music/bensound-november.mp3'),
(20, 'Of Elias Dream', 4, 7, 3, '4:58', 'assets/music/bensound-ofeliasdream.mp3'),
(21, 'Pop Dance', 4, 7, 2, '2:42', 'assets/music/bensound-popdance.mp3'),
(23, 'Sad Day', 5, 2, 1, '2:28', 'assets/music/bensound-sadday.mp3'),
(24, 'Sci-fi', 5, 2, 2, '4:44', 'assets/music/bensound-scifi.mp3'),
(25, 'Slow Motion', 5, 2, 3, '3:26', 'assets/music/bensound-slowmotion.mp3'),
(26, 'Sunny', 5, 2, 4, '2:20', 'assets/music/bensound-sunny.mp3'),
(27, 'Sweet', 5, 2, 5, '5:07', 'assets/music/bensound-sweet.mp3'),
(28, 'Tenderness ', 3, 3, 7, '2:03', 'assets/music/bensound-tenderness.mp3'),
(29, 'The Lounge', 3, 3, 8, '4:16', 'assets/music/bensound-thelounge.mp3 '),
(30, 'Ukulele', 3, 3, 9, '2:26', 'assets/music/bensound-ukulele.mp3 '),
(31, 'Tomorrow', 3, 3, 1, '4:54', 'assets/music/bensound-tomorrow.mp3 ');

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(78, 'ccccc', 'anmolsitaula73@gmail.com', '0b4e7a0e5fe84ad35fb5f95b9ceeac79');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `albums`
--
ALTER TABLE `albums`
  ADD CONSTRAINT `albums_ibfk_1` FOREIGN KEY (`artist`) REFERENCES `artists` (`id`);

--
-- Constraints for table `playlistsongs`
--
ALTER TABLE `playlistsongs`
  ADD CONSTRAINT `playlistsongs_ibfk_1` FOREIGN KEY (`songId`) REFERENCES `songs` (`id`),
  ADD CONSTRAINT `playlistsongs_ibfk_2` FOREIGN KEY (`songId`) REFERENCES `songs` (`id`),
  ADD CONSTRAINT `playlistsongs_ibfk_3` FOREIGN KEY (`playlistId`) REFERENCES `playlists` (`id`);

--
-- Constraints for table `songs`
--
ALTER TABLE `songs`
  ADD CONSTRAINT `songs_ibfk_1` FOREIGN KEY (`artist`) REFERENCES `artists` (`id`),
  ADD CONSTRAINT `songs_ibfk_2` FOREIGN KEY (`album`) REFERENCES `albums` (`album_id`),
  ADD CONSTRAINT `songs_ibfk_3` FOREIGN KEY (`genre`) REFERENCES `genres` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
