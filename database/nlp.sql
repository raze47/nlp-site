-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2021 at 01:37 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nlp`
--

-- --------------------------------------------------------

--
-- Table structure for table `app_table`
--

CREATE TABLE `app_table` (
  `app_tools_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `app_table`
--

INSERT INTO `app_table` (`app_tools_id`, `name`, `size`, `downloads`) VALUES
(5, 'Application of Language Modelling in Sentiment Analysis for Faculty Comment Evaluation-20210308T160819Z-001.zip', 6248368, 0),
(6, 'Speaker Recognition Using MFCC and ANN-20210308T152251Z-001.zip', 44146741, 0);

-- --------------------------------------------------------

--
-- Table structure for table `bicolano_tools`
--

CREATE TABLE `bicolano_tools` (
  `bicolano_tools_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cebuano_tools`
--

CREATE TABLE `cebuano_tools` (
  `cebuano_tools_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cebuano_tools`
--

INSERT INTO `cebuano_tools` (`cebuano_tools_id`, `name`, `size`, `downloads`) VALUES
(4, 'Cebuano to Filipino Translator-20210308T160035Z-001.zip', 164906889, 0),
(5, 'Filipino to Cebuano Translator-20210308T153706Z-001.zip', 166293657, 0);

-- --------------------------------------------------------

--
-- Table structure for table `english_tools`
--

CREATE TABLE `english_tools` (
  `english_tools_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `size`, `downloads`) VALUES
(1, 'Sta. Maria online-class-agreement.pdf', 722388, 0),
(2, 'Beyond_Good_and_Evil_NT.pdf', 795918, 0);

-- --------------------------------------------------------

--
-- Table structure for table `filipino_tools`
--

CREATE TABLE `filipino_tools` (
  `filipino_tools_id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `filipino_tools`
--

INSERT INTO `filipino_tools` (`filipino_tools_id`, `name`, `size`, `downloads`) VALUES
(8, 'Corpus-Based Stemming Alg', 6588735, 0),
(9, 'Filipino Spell Checker-20', 171308218, 0),
(10, 'Filipino Spelling Checker', 6940926, 0),
(11, 'Morphological Analyzer 20', 178033087, 0),
(12, 'POSTFili_ Part-Of-Speech-', 6238393, 0),
(13, 'Stemmer-EXE Jar File-2021', 54638916, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hiligaynon_tools`
--

CREATE TABLE `hiligaynon_tools` (
  `hiligaynon_tools_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `others_tools`
--

CREATE TABLE `others_tools` (
  `others_tools_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `others_tools`
--

INSERT INTO `others_tools` (`others_tools_id`, `name`, `size`, `downloads`) VALUES
(1, 'php_mcrypt-1.0.3-7.4-ts-vc15-x64.zip', 224451, 0);

-- --------------------------------------------------------

--
-- Table structure for table `publications`
--

CREATE TABLE `publications` (
  `publications_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publications`
--

INSERT INTO `publications` (`publications_id`, `name`, `size`, `downloads`) VALUES
(11, 'Hazlitt_Wisdom_of_the_Stoics (1).pdf', 9811174, 0),
(12, 'The-World-is-Your-Body (1).pdf', 2593451, 0);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `reg_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `address` varchar(255) NOT NULL,
  `street_1` varchar(255) NOT NULL,
  `street_2` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state_province` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `zip_postal` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `re_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`reg_id`, `first_name`, `middle_name`, `last_name`, `address`, `street_1`, `street_2`, `city`, `state_province`, `country`, `zip_postal`, `email`, `password`, `re_password`) VALUES
(6, 'testfirst1', 'testmid1', 'testsur1', 'Office', 'testst1', 'testst1', 'testcity1', 'teststate1', 'testcountry1', 'testpostal1', 'test1@mail.com', '5a105e8b9d40e1329780d62ea2265d8a', ''),
(7, 'testfirst2', 'testmid2', 'testsur2', 'Campus', 'testst2', 'testst2', 'testcity2', 'teststate2', 'testcountry2', 'testpostal2', 'test2@mail.com', 'ad0234829205b9033196ba818f7a872b', ''),
(8, 'testfirst3', 'testmid3', 'testsur3', 'Office', 'testst3', 'testst3', 'testcity3', 'teststate3', 'testcountry3', 'testpostal3', 'test3@mail.com', '8ad8757baa8564dc136c1e07507f4a98', ''),
(10, 'NLP', 'Admin', 'Account', 'Office', 'Hipodromo Street', '1016', ' Manila', 'NCR', 'Philippines', '1412', 'nlpAdmin@gmail.com', 'e3274be5c857fb42ab72d786e281b4b8', ''),
(11, 'Tester first', 'Tester middle', 'Tester surname', 'Home', '23-C Flamingo St', 'Concepcion village', 'Manila', 'NCR', 'Philippines', '1242', 'tester@email.com', 'ed587b7e3f0dd7fcb43a73284f2e45fb', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app_table`
--
ALTER TABLE `app_table`
  ADD PRIMARY KEY (`app_tools_id`);

--
-- Indexes for table `bicolano_tools`
--
ALTER TABLE `bicolano_tools`
  ADD PRIMARY KEY (`bicolano_tools_id`);

--
-- Indexes for table `cebuano_tools`
--
ALTER TABLE `cebuano_tools`
  ADD PRIMARY KEY (`cebuano_tools_id`);

--
-- Indexes for table `english_tools`
--
ALTER TABLE `english_tools`
  ADD PRIMARY KEY (`english_tools_id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `filipino_tools`
--
ALTER TABLE `filipino_tools`
  ADD PRIMARY KEY (`filipino_tools_id`);

--
-- Indexes for table `hiligaynon_tools`
--
ALTER TABLE `hiligaynon_tools`
  ADD PRIMARY KEY (`hiligaynon_tools_id`);

--
-- Indexes for table `others_tools`
--
ALTER TABLE `others_tools`
  ADD PRIMARY KEY (`others_tools_id`);

--
-- Indexes for table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`publications_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`reg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `app_table`
--
ALTER TABLE `app_table`
  MODIFY `app_tools_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bicolano_tools`
--
ALTER TABLE `bicolano_tools`
  MODIFY `bicolano_tools_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cebuano_tools`
--
ALTER TABLE `cebuano_tools`
  MODIFY `cebuano_tools_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `english_tools`
--
ALTER TABLE `english_tools`
  MODIFY `english_tools_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `filipino_tools`
--
ALTER TABLE `filipino_tools`
  MODIFY `filipino_tools_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `hiligaynon_tools`
--
ALTER TABLE `hiligaynon_tools`
  MODIFY `hiligaynon_tools_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `others_tools`
--
ALTER TABLE `others_tools`
  MODIFY `others_tools_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `publications`
--
ALTER TABLE `publications`
  MODIFY `publications_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
