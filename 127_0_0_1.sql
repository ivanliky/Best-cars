-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2017 at 09:03 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news_comments`
--
CREATE DATABASE IF NOT EXISTS `news_comments` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `news_comments`;

-- --------------------------------------------------------

--
-- Table structure for table `comments_table`
--

CREATE TABLE `comments_table` (
  `id` int(11) NOT NULL,
  `comments` text NOT NULL,
  `date_posted` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments_table`
--
ALTER TABLE `comments_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments_table`
--
ALTER TABLE `comments_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;--
-- Database: `posts`
--
CREATE DATABASE IF NOT EXISTS `posts` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `posts`;

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `korisnik_id` int(11) NOT NULL,
  `ime` varchar(45) NOT NULL,
  `prezime` varchar(45) NOT NULL,
  `datum_rodjenja` date NOT NULL,
  `drzava_rodjenja` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL,
  `korisnicko_ime` varchar(45) NOT NULL,
  `kratka_biografija` text NOT NULL,
  `fotografija` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news_table`
--

CREATE TABLE `news_table` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `post` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_table`
--

INSERT INTO `news_table` (`id`, `title`, `post`, `date`) VALUES
(3, 'Plug-in electric models', 'The BMW i is a sub-brand of BMW founded in 2011 to design and manufacture plug-in electric vehicles. The sub-brand initial plans called for the release of two vehicles; series production of the BMW i3 all-electric car began in September 2013, and the market launch took place in November 2013 with the first retail deliveries in Germany. The BMW i8 sports plug-in hybrid car was launched in Germany in June 2014.Combined sales of the BMW i brand models reached the 50,000 unit milestone in January 2016. Two years after its introduction, the BMW i3 ranked as the world\'s third best selling all-electric car in history. Global sales of the BMW i3 achieved the 50,000 unit milestone in July 2016.\r\n\r\nIn February 2016, BMW announced the introduction of the "iPerformance" model designation, which will be given to all BMW plug-in hybrid vehicles from July 2016. The aim is to provide a visible indicator of the transfer of technology from BMW i to the BMW core brand. The new designation will be used first on the plug-in hybrid variants of the latest BMW 7 Series. Global sales of all BMW plug-in electrified models achieved the 100,000 unit milestone in early November 2016, consisting of more than 60,000 BMW i3s, over 10,000 BMW i8s, and about 30,000 from combined sales of all BMW iPerformance plug-in hybrid models.', '2017-06-17 20:55:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`korisnik_id`);

--
-- Indexes for table `news_table`
--
ALTER TABLE `news_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `korisnik_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `news_table`
--
ALTER TABLE `news_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;--
-- Database: `regg`
--
CREATE DATABASE IF NOT EXISTS `regg` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `regg`;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(15) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
