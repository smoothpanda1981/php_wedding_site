-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Sep 04, 2014 at 12:35 AM
-- Server version: 5.5.38
-- PHP Version: 5.5.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `wedding`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
`id` int(11) NOT NULL,
  `text1` varchar(512) NOT NULL,
  `text2` varchar(256) NOT NULL,
  `text3` varchar(256) NOT NULL,
  `text4` varchar(256) NOT NULL,
  `text5` varchar(256) NOT NULL,
  `text6` varchar(256) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `text1`, `text2`, `text3`, `text4`, `text5`, `text6`) VALUES
(1, 'Voici notre liste de mariage ...<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Un voyage de rêve à Bora Bora ! ', '<u>Compte postal</u> :', 'PostFinance', '(YAN WANG ou OUAFAH HAMMIMOU)', '<u>IBAN</u> :', 'CH89 0900 0000 1497 6993 9');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
`id` int(11) NOT NULL,
  `username` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `passcode` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `passcode`) VALUES
(1, 'ouafah', 'mariage27092014'),
(2, 'yan', 'mariage27092014');

-- --------------------------------------------------------

--
-- Table structure for table `adresse`
--

CREATE TABLE `adresse` (
`id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `text1` varchar(256) NOT NULL,
  `text2` varchar(256) NOT NULL,
  `text3` varchar(256) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `adresse`
--

INSERT INTO `adresse` (`id`, `title`, `text1`, `text2`, `text3`) VALUES
(1, 'Lausanne Palace Hôtel', 'Rue du Grand-Chêne 7', '1003 Lausanne', 'SUISSE');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
`id` int(11) NOT NULL,
  `title` varchar(256) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `text1` varchar(256) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `text2` varchar(256) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `text3` varchar(256) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `title`, `text1`, `text2`, `text3`) VALUES
(1, 'Nous contacter', 'Tél : +41 76 223 07 58 (Yan)', 'ou', 'Tél : +41 76 615 13 93 (Ouafah)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `adresse`
--
ALTER TABLE `adresse`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `adresse`
--
ALTER TABLE `adresse`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;