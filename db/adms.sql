-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2015 at 03:17 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `adms`
--
CREATE DATABASE IF NOT EXISTS `adms` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `adms`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `username`, `password`) VALUES
(1, 'admin', 'adminadmin');

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE IF NOT EXISTS `advertisement` (
  `a_ID` int(11) NOT NULL AUTO_INCREMENT,
  `statues` varchar(16) NOT NULL,
  `c_food` varchar(50) DEFAULT 'NAN',
  `c_agriculture` varchar(50) DEFAULT 'NAN',
  `price` decimal(10,2) NOT NULL,
  `a_description` varchar(50) DEFAULT 'NAN',
  `customer` varchar(50) NOT NULL,
  PRIMARY KEY (`a_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`a_ID`, `statues`, `c_food`, `c_agriculture`, `price`, `a_description`, `customer`) VALUES
(1, 'sale', 'Fish', 'NULL', '232.00', 'fgfgfgfg', 'uma'),
(4, 'sale', 'Eggs', 'Fertilizers', '424.00', 'eefefef', 'uma'),
(5, 'sale', 'Eggs', 'Fertilizers', '3535.00', 'bfgbfghfhf', 'uma'),
(6, 'sale', 'Vegetables', 'Pesticides', '4646.00', 'ghfghgh', 'uma'),
(8, 'sale', 'Vegetables', 'Fertilizers', '3434.00', 'fhfhfhfh', 'uma'),
(9, 'sale', 'Other Food Items', 'NULL', '5656.00', 'ghghg', 'uma'),
(10, 'sale', 'Fish', 'NULL', '6767.00', '6668', 'uma'),
(11, 'sale', 'Eggs', 'NULL', '4545.00', 'rtrtrt', 'uma'),
(12, 'sale', 'Meat', 'NULL', '466.00', 'hghghg', 'uma'),
(14, 'sale', 'Fish', 'Crops', '56.00', '6666', 'uma'),
(16, 'sale', 'Eggs', 'NULL', '4564.00', 'hghgfh', 'uma'),
(17, 'sale', 'Meat', 'NULL', '4646.00', 'fghghgfhgfh', 'uma'),
(18, 'sale', 'Fish', 'Fertilizers', '4646.00', 'hhhththt', 'uma'),
(20, 'sale', 'NULL', 'NULL', '3535.00', 'fgfgfg', 'uma'),
(22, 'sale', 'Fish', 'NULL', '656.00', 'gfhfgjhfg', 'uma'),
(23, 'sale', 'Meat', 'NULL', '464.00', '56565', 'uma'),
(54, 'sale', 'NULL', 'NULL', '345.00', 'fgfgfg', 'uma');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` smallint(6) NOT NULL,
  `desease_ID` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `position` smallint(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `desease_ID`, `name`, `description`, `position`) VALUES
(2, 0, 'plant name :cocounut Desease Type :fvfv Date :2014-09-09', 'District : ffggbRegion :bgbgbWeather Condition :bbgbgSoil Condition gbgbgb\n User Commnet :gbgbgbgbbg', 3),
(3, 0, 'plant name :cocounut Desease Type :fvfv Date :2014-09-09', 'District : ffggbRegion :bgbgbWeather Condition :bbgbgSoil Condition gbgbgb\n User Commnet :gbgbgbgbbg', 2),
(4, 0, 'plant name :cocounut Desease Type :fvfv Date :2014-09-09', 'District : ffggbRegion :bgbgbWeather Condition :bbgbgSoil Condition gbgbgb\n User Commnet :gbgbgbgbbg', 4),
(5, 0, 'plant name :cocounut Desease Type :fvfv Date :2014-09-09', 'District : ffggbRegion :bgbgbWeather Condition :bbgbgSoil Condition gbgbgb\n User Commnet :gbgbgbgbbg', 5),
(6, 0, 'plant name :mango Desease Type :Gall Date :2014-10-06', 'District : GalleRegion :GalleWeather Condition :hotSoil Condition Clayey\n User Commnet :this  show some week ago', 6),
(7, 0, 'plant name : cocounut Desease Type :fvfv\n  Date : 2014-09-09', 'District : ffggb\nRegion : bgbgb\nWeather Condition : bbgbg\n Soil Condition gbgbgb\n User Commnet : gbgbgbgbbg', 7),
(8, 0, 'plant name : cocounut Desease Type :fvfv\n  Date : 2014-09-09', 'District : ffggb\nRegion : bgbgb\nWeather Condition : bbgbg\n Soil Condition gbgbgb\n User Commnet : gbgbgbgbbg', 8),
(9, 0, 'plant name : T Desease Type :Fungal Disease\n  Date : 2014-10-13', 'District : Anuradhapura\nRegion : ddeef\nWeather Condition : Sunny\n Soil Condition Good\n User Commnet : kdjgng', 11),
(10, 0, 'plant name : cocounut Desease Type :fvfv\n  Date : 2014-09-09', 'District : ffggb\nRegion : bgbgb\nWeather Condition : bbgbg\n Soil Condition gbgbgb\n User Commnet : gbgbgbgbbg', 9),
(11, 51, 'plant name : cocounut Desease Type :fvfv  Date : 2014-09-09', 'District : ffggb\r\nRegion : bgbgb\r\nWeather Condition : bbgbg\r\n Soil Condition gbgbgb\r\n User Commnet : gbgb\r\n', 10),
(12, 77, 'plant name : eeee Desease Type :Fungal Disease\n  Date : 2014-10-14', 'District : Trincomalee\nRegion : ssede\nWeather Condition : Heavy Rainfall from recently\n Soil Condition Sandy\n User Commnet : severt test', 12),
(13, 0, 'test new one', 'This is one test case', 12),
(14, 86, 'plant name : kk  Desease Type :Bacterial Disease\n  Date : 2014-10-12', 'District : kk\nRegion : jkjk\nWeather Condition : Heavy Rainfall from recently\n Soil Condition Good\n User Commnet : kkkkkkkkkkkkkkkk', 13);

-- --------------------------------------------------------

--
-- Table structure for table `g_user`
--

CREATE TABLE IF NOT EXISTS `g_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `g_user`
--

INSERT INTO `g_user` (`id`, `username`, `password`) VALUES
(1, 'umayanga', 'umayanga'),
(37, 'test1', 'test1'),
(50, 'sss', 'umayanga'),
(51, 'kapila', 'aaaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `plant_desease_detail`
--

CREATE TABLE IF NOT EXISTS `plant_desease_detail` (
  `desease_ID` int(11) NOT NULL AUTO_INCREMENT,
  `plant_name` varchar(100) NOT NULL,
  `desease_type` varchar(100) DEFAULT NULL,
  `district` varchar(100) NOT NULL,
  `region` varchar(100) NOT NULL,
  `weather_condition` varchar(100) DEFAULT NULL,
  `soil_condition` varchar(100) DEFAULT NULL,
  `date` date NOT NULL,
  `user_comment` varchar(255) DEFAULT NULL,
  `user_name` varchar(100) NOT NULL,
  `type` varchar(45) NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`desease_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=132 ;

--
-- Dumping data for table `plant_desease_detail`
--

INSERT INTO `plant_desease_detail` (`desease_ID`, `plant_name`, `desease_type`, `district`, `region`, `weather_condition`, `soil_condition`, `date`, `user_comment`, `user_name`, `type`) VALUES
(52, 'cocounut', 'fvfv', 'ffggb', 'bgbgb', 'bbgbg', 'gbgbgb', '2014-09-09', 'gbgbgbgbbg', 'uma', 'confirm'),
(53, 'cocounut', 'fvfv', 'ffggb', 'bgbgb', 'bbgbg', 'gbgbgb', '2014-09-09', 'gbgbgbgbbg', 'uma', 'confirm'),
(55, 'cocounut', 'fvfv', 'ffggb', 'bgbgb', 'bbgbg', 'gbgbgb', '2014-09-09', 'gbgbgbgbbg', 'uma', 'confirm'),
(56, 'cocounut', 'fvfv', 'ffggb', 'bgbgb', 'bbgbg', 'gbgbgb', '2014-09-09', 'gbgbgbgbbg', 'uma', 'confirm'),
(57, 'cocounut', 'fvfv', 'ffggb', 'bgbgb', 'bbgbg', 'gbgbgb', '2014-09-09', 'gbgbgbgbbg', 'uma', 'confirm'),
(58, 'cocounut', 'fvfv', 'ffggb', 'bgbgb', 'bbgbg', 'gbgbgb', '2014-09-09', 'gbgbgbgbbg', 'uma', 'confirm'),
(59, 'cocounut', 'fvfv', 'ffggb', 'bgbgb', 'bbgbg', 'gbgbgb', '2014-09-09', 'gbgbgbgbbg', 'uma', 'confirm'),
(60, 'cocounut', 'fvfv', 'ffggb', 'bgbgb', 'bbgbg', 'gbgbgb', '2014-09-09', 'gbgbgbgbbg', 'uma', 'confirm'),
(61, 'cocounut', 'fvfv', 'ffggb', 'bgbgb', 'bbgbg', 'gbgbgb', '2014-09-09', 'gbgbgbgbbg', 'uma', 'confirm'),
(62, 'cocounut', 'fvfv', 'ffggb', 'bgbgb', 'bbgbg', 'gbgbgb', '2014-09-09', 'gbgbgbgbbg', 'uma', 'confirm'),
(63, 'cocounut', 'fvfv', 'ffggb', 'bgbgb', 'bbgbg', 'gbgbgb', '2014-09-09', 'gbgbgbgbbg', 'uma', 'pending'),
(64, 'cocounut', 'fvfv', 'ffggb', 'bgbgb', 'bbgbg', 'gbgbgb', '2014-09-09', 'gbgbgbgbbg', 'uma', 'confirm'),
(65, 'cocounut', 'fvfv', 'ffggb', 'bgbgb', 'bbgbg', 'gbgbgb', '2014-09-09', 'gbgbgbgbbg', 'uma', 'pending'),
(66, 'cocounut', 'fvfv', 'ffggb', 'bgbgb', 'bbgbg', 'gbgbgb', '2014-09-09', 'gbgbgbgbbg', 'uma', 'pending'),
(67, 'cocounut', 'fvfv', 'ffggb', 'bgbgb', 'bbgbg', 'gbgbgb', '2014-09-09', 'gbgbgbgbbg', 'uma', 'pending'),
(68, 'cocounut', 'fvfv', 'ffggb', 'bgbgb', 'bbgbg', 'gbgbgb', '2014-09-09', 'gbgbgbgbbg', 'uma', 'pending'),
(69, 'cocounut', 'fvfv', 'ffggb', 'bgbgb', 'bbgbg', 'gbgbgb', '2014-09-09', 'gbgbgbgbbg', 'uma', 'pending'),
(70, 'cocounut', 'fvfv', 'ffggb', 'bgbgb', 'bbgbg', 'gbgbgb', '2014-09-09', 'gbgbgbgbbg', 'uma', 'pending'),
(71, 'mango', 'Gall', 'Galle', 'Galle', 'hot', 'Clayey', '2014-10-06', 'this  show some week ago', 'uma', 'confirm'),
(72, 'Mango', 'Canker', 'Gampaha', 'test1', 'raning', 'Silt', '2014-10-06', 'test2', 'uma', 'confirm'),
(74, 'T', 'Fungal Disease', 'Anuradhapura', 'ddeef', 'Sunny', 'Good', '2014-10-13', 'kdjgng', 'uma', 'confirm'),
(75, 'eeee', 'Fungal Disease', 'Trincomalee', 'ssede', 'Heavy Rainfall from recently', 'Sandy', '2014-10-14', 'severt test', 'uma', 'confirm'),
(76, 'eeee', 'Fungal Disease', 'Trincomalee', 'ssede', 'Heavy Rainfall from recently', 'Sandy', '2014-10-14', 'severt test', 'uma', 'confirm'),
(79, 'thth', 'Fungal Disease', 'Jaffna', 'ssede', 'Light Rainfall', 'Good', '2014-10-23', 'bfbbbgbgbgbgbgb', 'uma', 'pending'),
(80, 'fgfg', 'Viral Disease', 'Galle', 'ddeef', 'Cloudy', 'Sandy', '2014-10-12', 'ggggggggggggggggg', 'uma', 'pending'),
(81, 'hbbhb', 'Bacterial Disease', 'mkmm', 'kmkm', 'Light Rainfall', 'Good', '2014-10-13', 'jjkkkk', 'uma', 'pending'),
(82, 'ff', 'Bacterial Disease', 'Kalutara', 'dvgdgv', 'Light Rainfall', 'Loam', '2014-10-13', 'gfdgggggggggg', 'uma', 'pending'),
(83, 'jkjkj', 'Fungal Disease', 'Kegalle', 'galle', 'Light Rainfall', 'Sandy', '2014-10-13', 'gggrg', 'uma', 'pending'),
(84, 'hgjj', 'Bacterial Disease', 'Galle', 'htht', 'Sunny', 'Clay', '2014-10-13', 'hhhhhhhhhhh', 'uma', 'pending'),
(85, 'jyj', 'Viral Disease', 'Jaffna', 'ggg', 'Heavy Rainfall from recently', 'Good', '2014-10-20', 'gggggggggggggggg', 'uma', 'pending'),
(86, 'kk', 'Bacterial Disease', 'kk', 'jkjk', 'Heavy Rainfall from recently', 'Good', '2014-10-12', 'kkkkkkkkkkkkkkkk', 'uma', 'confirm'),
(87, 'fgjj', 'Viral Disease', 'Badulla', 'fgg', 'Cloudy', 'Sandy', '2014-10-19', 'hththth', 'uma', 'confirm'),
(125, 'jyj', 'Bacterial Disease', 'yjyju', 'jjujuuj', 'Heavy Rainfall from recently', 'Good', '2015-01-16', 'ujjjujuju', 'uma', 'confirm'),
(126, 'ghg', 'Bacterial Disease', 'Anuradhapura', 'fgg', 'Light Rainfall', 'Good', '2015-01-15', 'hfhhhf', 'Lasith', 'confirm'),
(127, 'dwsd', 'Fungal Disease', 'Galle', 'effe', 'Heavy Rainfall from recently', 'Good', '2015-01-12', 'fefefef', 'uma', 'confirm'),
(128, 'coconut', 'Canker', 'Ampara', 'souther', 'hot', 'Sandy', '2015-01-19', 'this happen since two week', 'uma', 'pending'),
(129, 'Mango', 'Blight', 'Gampaha', 'Megalle', 'humid', 'Sandy', '2015-01-19', 'This happen since last month', 'uma', 'pending'),
(130, 'Cocunut', 'Canker', 'Galle', 'Megalle', 'raning', 'Gravel', '2015-01-19', 'This show since last month', 'uma', 'pending'),
(131, 'Mango', 'Blight', 'Galle', 'Megalle', 'hot', 'Silt', '2015-01-19', 'This  show  since last month.', 'uma', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `pm`
--

CREATE TABLE IF NOT EXISTS `pm` (
  `id` bigint(20) NOT NULL,
  `id2` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `user1` bigint(20) NOT NULL,
  `user2` bigint(20) NOT NULL,
  `message` text NOT NULL,
  `timestamp` int(10) NOT NULL,
  `user1read` varchar(3) NOT NULL,
  `user2read` varchar(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pm`
--

INSERT INTO `pm` (`id`, `id2`, `title`, `user1`, `user2`, `message`, `timestamp`, `user1read`, `user2read`) VALUES
(1, 1, '1 st massage', 1, 2, 'check one', 1413560633, 'yes', 'yes'),
(2, 1, 'I am kawaya', 2, 1, 'My name is kawya', 1413561379, 'yes', 'yes'),
(2, 2, '', 2, 0, 'please massage me.........!', 1413561945, '', ''),
(2, 3, '', 1, 0, 'Hi...........! kohomada.......!', 1413562063, '', ''),
(1, 2, '', 2, 0, 'I check.........!', 1413562169, '', ''),
(6, 1, 'Hello...!', 1, 10, 'second massage..!', 1413563851, 'yes', 'yes'),
(7, 1, 'Mr.', 0, 1, 'This is my first test massage', 1413568591, 'yes', 'no'),
(8, 1, 'About password', 0, 2, 'your password is not so strong please change.', 1413885507, 'yes', 'no'),
(9, 1, 'Test four', 0, 1, 'test forum', 1421574617, 'yes', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `s_user`
--

CREATE TABLE IF NOT EXISTS `s_user` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `depname` varchar(50) NOT NULL,
  `depid` varchar(20) NOT NULL,
  `contactno` varchar(20) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  `usertype` varchar(20) NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`ID`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `s_user`
--

INSERT INTO `s_user` (`ID`, `username`, `password`, `fullname`, `depname`, `depid`, `contactno`, `email`, `address`, `usertype`) VALUES
(0, 'admin', 'admin', 'ADMIN', 'PLANT PROTECTION SERVICE', '001', '0291019901', 'uma.madhuhshan@gmail.com', 'plant protection service ,peradeniya', 'admin'),
(1, 'uma', 'uma', 'umayanga madhushan', 'ucsc', '082', '3434343434', 'uma.madhushan@gmail.com', '180, kanampitiya Road ,Galle', 'ok'),
(2, 'kawya', 'kawya', 'kawindi madushani', 'plant protection service', '001', '0728550958', 'uma.madhushan@gmail.com', '186/11,kanampitiya Road,GAale', 'ok'),
(5, 'Amilla', 'Ammila', 'Amila nadeeshani', 'A', '020', '0119821562', 'Amila@yahoo.com', 'ok', 'pending'),
(6, 'Maneesha', 'M', 'mimi', 'fffgggggg', '091', '454', 'uma.madhushan@gmail.com', 'gfhgh', 'pending'),
(7, 'Kanishka', 'C', 'Kanishka Panditharathana', 'Agriculture department', '440', '0112234455', 'c32@gmail.com', 'Makiluwa ,Galle', 'ok'),
(9, 'Lasith', 'L', 'Lasith Salinga', 'cdvdvvv', '002', '124', 'lasint23@yahoo.com', 'colombo', 'ok'),
(10, 'Janaka', 'JAnaka', 'Janaka Rathnayaka', 'plant protection SL', '050', '072157653', 'janaka@gmail.com', 'Thangalla,Hambanthota', 'pending'),
(11, 'nimal', '123567', 'rathnayake', 'agro ', 'agro 120', '1234567890', 'a@gmal.com', 'dsadasdas', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE IF NOT EXISTS `topics` (
  `parent` smallint(6) NOT NULL,
  `id` int(11) NOT NULL,
  `id2` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `message` longtext NOT NULL,
  `authorid` int(11) NOT NULL,
  `timestamp` int(11) NOT NULL,
  `timestamp2` int(11) NOT NULL,
  PRIMARY KEY (`id`,`id2`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`parent`, `id`, `id2`, `title`, `message`, `authorid`, `timestamp`, `timestamp2`) VALUES
(1, 1, 1, 'dgdg', 'fffffffffffffffff', 2, 1412736866, 1412736955),
(2, 2, 1, 'nnnnnnnn', 'ggggggggggggg', 2, 1412736902, 1412736902),
(1, 1, 2, '', 'gjgjgjggj', 1, 1412736955, 1412736955),
(3, 3, 1, 'llllllllll', ',k,k<img src="[img]" alt="Image" />[/img]', 1, 1412738847, 1412738847),
(1, 4, 1, 'ttttttttttttt', '<strong><em>ghghghghg</em></strong>', 5, 1412748804, 1412748804),
(3, 5, 1, 'dgg', 'gddddddd', 5, 1412748832, 1413555214),
(11, 6, 1, 'topic1', 'ghjojo', 1, 1413212711, 1413212711),
(11, 7, 1, 'yyyyy', 'yuy', 1, 1413212761, 1413212761),
(13, 10, 1, 'Test three', 'we hope your attention as soon as possible...!', 0, 1413885596, 1413885596),
(11, 11, 1, 'jhg', 'vfvgtyh', 1, 1414254465, 1414254465),
(3, 9, 1, 'nn', 'hhhhjnh', 1, 1413555167, 1413555167),
(3, 5, 2, '', 'rrrtr', 1, 1413555214, 1413555214),
(13, 12, 1, 'test 4', 'this is test four..............! ', 0, 1421574677, 1421574677);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
