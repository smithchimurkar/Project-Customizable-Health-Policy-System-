-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 15, 2022 at 04:05 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `clg_insurance`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_entry1`
--

CREATE TABLE IF NOT EXISTS `tbl_entry1` (
  `eeid` int(11) NOT NULL AUTO_INCREMENT,
  `rdate` varchar(12) NOT NULL,
  `uid` int(10) NOT NULL,
  `user` varchar(40) NOT NULL,
  `amt1` varchar(20) NOT NULL,
  `amt2` varchar(20) NOT NULL,
  `totalamt` varchar(20) NOT NULL,
  `cat` int(10) NOT NULL,
  PRIMARY KEY (`eeid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `tbl_entry1`
--

