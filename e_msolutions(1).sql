-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 23, 2023 at 02:56 PM
-- Server version: 8.0.31
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e&msolutions`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `firstname` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `phone` int NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`firstname`, `email`, `phone`, `message`) VALUES
('brown', 'blessingsbrown190@gmail.com', 991303083, 'mmmmmmmmmmmmmm'),
('brown', 'emmanuelchinoko27@gmail.com', 991303083, 'mmmmmmmmmmmmmm'),
('kelly', 'blessingsbrown190@gmail.com', 991303083, 'mmmmmmmmmmmmmm'),
('kelly kelz'blessingsbrown190@gmail', 88029784, 'jsjflsdkjlfkd'),
('yyyyyy', 'yyyyyy@gmail.com', 9999999, 'aaaaaaaaaaa'),
('yyyyyy', 'yyyyyy@gmail.com', 9999999, 'aaaaaaaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

DROP TABLE IF EXISTS `contact_us`;
CREATE TABLE IF NOT EXISTS `contact_us` (
  `id` int NOT NULL,
  `phone` int NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `phone`, `email`, `address`) VALUES
(1, 994348794, 'Blessings@eandm.com', 'moyale balack p/201');

-- --------------------------------------------------------

--
-- Table structure for table `homepage`
--

DROP TABLE IF EXISTS `homepage`;
CREATE TABLE IF NOT EXISTS `homepage` (
  `id` int NOT NULL,
  `introduction` varchar(500) NOT NULL,
  `projects` varchar(500) NOT NULL,
  `who_we_are` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `homepage`
--

INSERT INTO `homepage` (`id`, `introduction`, `projects`, `who_we_are`) VALUES
(0, 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhjegkljdflgkjldfjlgdfjogijeroigtuoeriuoigjdlfkjglkdfjhlkfdjhkljorijhosdjlkhfsjlhkdjflhjdflskjgldfhjlkfdjogiherjhojklsdhflkjjdflksjdlkfjooigejtjlskdfjhlkdfjhlkjhlkjdfoijeoiut09yu54968u04i5yowerljlgkdfmklmb,cmb,mckltthorpkhtrlkoyhpriypoiry094i5yktrh;lkfgmnllmg.cv,mnooitjroyirpwtoiwrpowepoir0t456905487oiewjkhlkmdfmslmbmcvmnmcvnmgfijoijrtjiyioyiotriohtrioeoiyiewoyeriuytioirtijhjfglkfkgkjlkmbmknmnmnjfgioitrioitroiiortiuiueroiurt98', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modifed` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Active | 0=Inactive',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `file_name`, `title`, `created`, `modifed`, `status`) VALUES
(1, 'blessing1.jpeg', 'Demo Product 1', '2023-01-12 16:19:36', '2023-01-12 16:19:36', 1),
(2, 'blessing2.jpeg', 'Demo Product 2', '2023-01-12 16:19:36', '2023-01-12 16:19:36', 1),
(4, 'blessing4.jpg', 'Demo Product 4', '2023-01-12 16:19:36', '2023-01-12 16:19:36', 1);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

DROP TABLE IF EXISTS `skills`;
CREATE TABLE IF NOT EXISTS `skills` (
  `id` int NOT NULL,
  `skills` varchar(500) NOT NULL,
  `Tools` varchar(500) NOT NULL,
  `Technologies` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
