-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 08, 2012 at 04:57 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `flamenco`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `s.no` int(2) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  PRIMARY KEY (`s.no`),
  UNIQUE KEY `pwd` (`pwd`),
  UNIQUE KEY `user` (`user`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`s.no`, `user`, `pwd`) VALUES
(1, 'flamenco12', 'iitroorkeesre');

-- --------------------------------------------------------

--
-- Table structure for table `panache`
--

CREATE TABLE IF NOT EXISTS `panache` (
  `s.no` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `no` int(2) NOT NULL,
  `leader` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `video` varchar(255) NOT NULL,
  PRIMARY KEY (`s.no`,`no`,`leader`,`city`),
  UNIQUE KEY `name` (`name`,`email`,`contact`,`video`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `panache`
--


-- --------------------------------------------------------

--
-- Table structure for table `stepup`
--

CREATE TABLE IF NOT EXISTS `stepup` (
  `s.no` int(5) NOT NULL AUTO_INCREMENT,
  `team_name` varchar(255) NOT NULL,
  `no_of_people` int(2) NOT NULL,
  `team_leader` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `city` char(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `videolinks` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  PRIMARY KEY (`s.no`,`no_of_people`,`team_leader`,`city`,`videolinks`,`category`),
  UNIQUE KEY `team_name` (`team_name`,`email`,`contact`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `stepup`
--

