-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2016 at 05:23 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `e_ppmp`
--

-- --------------------------------------------------------

--
-- Table structure for table `approval`
--

CREATE TABLE IF NOT EXISTS `approval` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `dean_id` int(8) DEFAULT NULL,
  `recommend_id` int(8) NOT NULL,
  `evaluate_id` int(8) NOT NULL,
  `approve_id` int(8) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_dean_id` (`dean_id`),
  KEY `fk_approve_id` (`approve_id`),
  KEY `fk_evaluate_id` (`evaluate_id`),
  KEY `fk_recommend_id` (`recommend_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `budget`
--

CREATE TABLE IF NOT EXISTS `budget` (
  `budget_id` int(8) NOT NULL AUTO_INCREMENT,
  `budget` int(10) NOT NULL,
  `date_given` datetime NOT NULL,
  PRIMARY KEY (`budget_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(1, 'Supplies and Material'),
(2, 'Training'),
(3, 'Services'),
(4, 'Equipment'),
(5, 'Seminar-Workshop'),
(6, 'Infrastructure');

-- --------------------------------------------------------

--
-- Table structure for table `office`
--

CREATE TABLE IF NOT EXISTS `office` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `office_name` varchar(255) NOT NULL,
  `budget_id` int(8) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_budge_id` (`budget_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `office`
--

INSERT INTO `office` (`id`, `office_name`, `budget_id`, `status`) VALUES
(1, 'Academic Programs', NULL, 1),
(2, 'Accounting', NULL, 1),
(3, 'Accreditation', NULL, 1),
(4, 'Admission', NULL, 1),
(5, 'Application Development/ERS', NULL, 1),
(6, 'BAC', NULL, 1),
(7, 'Board Secretary', NULL, 1),
(8, 'Budget', NULL, 1),
(9, 'Building Administrator', NULL, 1),
(10, 'CAFA-Architechture', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `user_id` int(8) NOT NULL,
  `supply_id` int(8) NOT NULL,
  `approval_id` int(8) NOT NULL,
  `schedule_id` int(8) NOT NULL,
  `quantity` int(8) NOT NULL,
  `price` int(8) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_user_id` (`user_id`),
  KEY `fk_supply_id` (`supply_id`),
  KEY `fk_approval_id` (`approval_id`),
  KEY `fk_schedule_id` (`schedule_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `jan_qty` int(8) NOT NULL,
  `feb_qty` int(8) NOT NULL,
  `mar_qty` int(8) NOT NULL,
  `apr_qty` int(8) NOT NULL,
  `may_qty` int(8) NOT NULL,
  `june_qty` int(8) NOT NULL,
  `july_qty` int(8) NOT NULL,
  `aug_qty` int(8) NOT NULL,
  `sep_qty` int(8) NOT NULL,
  `oct_qty` int(8) NOT NULL,
  `nov_qty` int(8) NOT NULL,
  `dec_qty` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE IF NOT EXISTS `subcategory` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `category_id` int(8) NOT NULL,
  `subcategory` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_category_id` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `category_id`, `subcategory`) VALUES
(1, 1, 'Computer Supplies'),
(2, 1, 'Electrical Supplies'),
(3, 1, 'Janitorial Supplies'),
(4, 1, 'Hardware Supplies'),
(5, 1, 'Office Supplies'),
(6, 1, 'Chemicals'),
(7, 1, 'Laboratory Supplies'),
(8, 4, 'Office Equipment'),
(9, 4, 'I.T. Equipment'),
(10, 4, 'Furniture'),
(11, 4, 'Appliances'),
(12, 4, 'Engineering Equimpent'),
(13, 4, 'Chemical Apparatus'),
(14, 4, 'Consumables'),
(15, 1, 'Others'),
(16, 4, 'Others'),
(17, 1, 'Paper Products'),
(18, 1, 'Writing Supplies'),
(19, 1, 'Microsoft Licenses');

-- --------------------------------------------------------

--
-- Table structure for table `supply`
--

CREATE TABLE IF NOT EXISTS `supply` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `sub_id` int(8) NOT NULL,
  `item description` varchar(500) NOT NULL,
  `unit` varchar(10) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_sub_id` (`sub_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `supply`
--

INSERT INTO `supply` (`id`, `sub_id`, `item description`, `unit`, `status`) VALUES
(1, 15, 'ACETATE', 'roll', 1),
(2, 5, 'AIR FRESHENER, aerosol, 280ml/150g min', 'can', 1),
(3, 5, 'ALCOHOL, ethyl, 68%-70%, scented, 500ml (-5ml)', 'bottle', 1),
(4, 2, 'BATTERY, dry cell, AA, 2 pieces per blister pack', 'pack', 1),
(5, 2, 'BATTERY, dry cell, AAA, 2 pieces per blister pack', 'pack', 1),
(6, 2, 'BATTERY, dry cell, D, 2 pieces per blister pack', 'pack', 1),
(7, 8, 'BINDING AND PUNCHING MACHINE', 'unit', 1),
(8, 3, 'BROOM, SOFT (TAMBO), weight: 200g min tiger grass ', 'piece', 1),
(9, 3, 'BROOM, STICK (TINGTING)', 'piece', 1),
(10, 8, 'CALCULATOR, COMPACT, electronic, 12 digits cap, 1 unit in individual box', 'unit', 1),
(11, 8, 'CALCULATOR, SCIENTIFIC, 1 unit in individual box', 'unit', 1),
(12, 5, 'CARBON FILM, A4 SIZE, 100 sheets per box', 'box', 1),
(13, 5, 'CARBON FILM, PE, black, size 216mm x 330mm, 100 sheets per box', 'box', 1),
(14, 17, 'CARTOLINA, ASSORTED COLORS, 20 pieces per pack', 'pack', 1),
(15, 8, 'CHAIR, MONOBLOC, BEIGE, with backrest, w/o armrest', 'piece', 1),
(16, 8, 'CHAIR, MONOBLOC, WHITE, with backrest, w/o armrest', 'piece', 1),
(17, 5, 'CHALK, WHITE ENAMEL, 100 pieces per box', 'box', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `office_id` int(3) NOT NULL,
  `user_type` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_office_id` (`office_id`),
  KEY `fk_user_type` (`user_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `office_id`, `user_type`, `user_id`, `name`, `position`, `password`, `status`) VALUES
(1, 6, 1, '006-00001', 'Peregrino B. Amador', 'BAC Secretary', '12345', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE IF NOT EXISTS `user_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `type`) VALUES
(1, 'admin'),
(2, 'regular_user'),
(3, 'approving_officer');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `approval`
--
ALTER TABLE `approval`
  ADD CONSTRAINT `fk_approve_id` FOREIGN KEY (`approve_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `fk_dean_id` FOREIGN KEY (`dean_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `fk_evaluate_id` FOREIGN KEY (`evaluate_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `fk_recommend_id` FOREIGN KEY (`recommend_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `office`
--
ALTER TABLE `office`
  ADD CONSTRAINT `fk_budge_id` FOREIGN KEY (`budget_id`) REFERENCES `budget` (`budget_id`);

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `fk_approval_id` FOREIGN KEY (`approval_id`) REFERENCES `approval` (`id`),
  ADD CONSTRAINT `fk_schedule_id` FOREIGN KEY (`schedule_id`) REFERENCES `schedule` (`id`),
  ADD CONSTRAINT `fk_supply_id` FOREIGN KEY (`supply_id`) REFERENCES `supply` (`id`),
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `fk_category_id` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Constraints for table `supply`
--
ALTER TABLE `supply`
  ADD CONSTRAINT `fk_sub_id` FOREIGN KEY (`sub_id`) REFERENCES `subcategory` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user_type` FOREIGN KEY (`user_type`) REFERENCES `user_type` (`id`),
  ADD CONSTRAINT `fk_office_id` FOREIGN KEY (`office_id`) REFERENCES `office` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
