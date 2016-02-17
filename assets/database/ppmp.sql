-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2016 at 01:44 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ppmp`
--

-- --------------------------------------------------------

--
-- Table structure for table `approval`
--

CREATE TABLE IF NOT EXISTS `approval` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `office_id` int(11) NOT NULL,
  `first_lvl_id` int(11) NOT NULL,
  `second_lvl_id` int(11) NOT NULL,
  `third_lvl_id` int(11) NOT NULL,
  `fourth_lvl_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `office_id` (`office_id`),
  KEY `first_lvl_id` (`first_lvl_id`),
  KEY `second_lvl_id` (`second_lvl_id`),
  KEY `third_lvl_id` (`third_lvl_id`),
  KEY `approval_ibfk_5` (`fourth_lvl_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `approval`
--

INSERT INTO `approval` (`id`, `office_id`, `first_lvl_id`, `second_lvl_id`, `third_lvl_id`, `fourth_lvl_id`) VALUES
(1, 6, 1, 2, 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `budget`
--

CREATE TABLE IF NOT EXISTS `budget` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `budget` int(11) NOT NULL,
  `office_id` int(11) NOT NULL,
  `date_given` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `office_id` (`office_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `status`) VALUES
(1, 'Supplies and Material', 1),
(2, 'Training', 1),
(3, 'Services', 1),
(4, 'Equipment', 1),
(5, 'Seminar-Workshop', 1),
(6, 'Infrastructure', 1);

-- --------------------------------------------------------

--
-- Table structure for table `office`
--

CREATE TABLE IF NOT EXISTS `office` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `office_name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=101 ;

--
-- Dumping data for table `office`
--

INSERT INTO `office` (`id`, `office_name`, `status`) VALUES
(1, 'Academic Programs', 1),
(2, 'Accounting', 1),
(3, 'Accreditation', 1),
(4, 'Admission', 1),
(5, 'Application Development/ERS', 1),
(6, 'BAC', 1),
(7, 'Board Secretary', 1),
(8, 'Budget', 1),
(9, 'Building Administrator', 1),
(10, 'CAFA-Architechture', 1),
(11, 'CAFA-Fine Arts', 1),
(12, 'CAFA-Graphics', 1),
(13, 'CAFA-Office of the Dean', 1),
(14, 'Campus Ministry', 1),
(15, 'Cashier', 1),
(16, 'CIE-Home Economics', 1),
(17, 'CIE-Office of the Dean', 1),
(18, 'CIE-Professional Industrial Education', 1),
(19, 'CIE-Student Teaching', 1),
(20, 'CIE-Technical Arts', 1),
(21, 'CIT-Basic Industrial Technology', 1),
(22, 'CIT-Civil Engineering Technology', 1),
(23, 'CIT-Electrical Engineering Technology', 1),
(24, 'CIT-Electronics Engineering Technology', 1),
(25, 'CIT-Food and Apparel Technology', 1),
(26, 'CIT-Graphic Arts and Printing Technology', 1),
(27, 'CIT-Mechanical Engineering Technology', 1),
(28, 'CIT-Office of the Dean', 1),
(29, 'CIT-Power Plant Engineering Technology', 1),
(30, 'CLA-English', 1),
(31, 'CLA-Filipino', 1),
(32, 'CLA-Office of the Dean', 1),
(33, 'CLA-Physical Education', 1),
(34, 'CLA-Social Science', 1),
(35, 'Clinic', 1),
(36, 'COE-Civil', 1),
(37, 'COE-Electrical', 1),
(38, 'COE-Electronics', 1),
(39, 'COE-Mechanical', 1),
(40, 'COE-Office of the Dean', 1),
(41, 'Commision on Audit', 1),
(42, 'COS-Chemistry', 1),
(43, 'COS-Mathematics', 1),
(44, 'COS-Office of the Dean', 1),
(45, 'COS-Physics', 1),
(46, 'ETEEAP - Expanded Tertiary Education and Equilvancy Program', 1),
(47, 'Executive Secretary', 1),
(48, 'Graduate Programs', 1),
(49, 'Guest House', 1),
(50, 'Guidance', 1),
(51, 'Hostel', 1),
(52, 'Human Resources', 1),
(53, 'Infrastracture', 1),
(54, 'Internal Control', 1),
(55, 'IRJP - Industrial Relations and Job Placement', 1),
(56, 'IRTC-Audio Visual', 1),
(57, 'IRTC-Civil', 1),
(58, 'IRTC-Computer', 1),
(59, 'IRTC-Conference Hall', 1),
(60, 'IRTC-Electrical', 1),
(61, 'IRTC-Mechanical', 1),
(62, 'IRTC-Office of the Director', 1),
(63, 'ITSO-Innovation and Technology Support', 1),
(64, 'Library', 1),
(65, 'Linkages and External Affairs', 1),
(66, 'Maintenance', 1),
(67, 'Management Info System', 1),
(68, 'Motorpool', 1),
(69, 'Office of the President', 1),
(70, 'Office of the Vice President for Academic Affairs', 1),
(71, 'Office of the Vice President for Planning, Development and Information System', 1),
(72, 'Office of the Vice President for Admin and Finance', 1),
(73, 'Office of the Vice President for Research and Extension', 1),
(74, 'Philippine Artisan', 1),
(75, 'Planning and Development', 1),
(76, 'Printing and Publication', 1),
(77, 'Procurement', 1),
(78, 'Public Affairs', 1),
(79, 'Quality Assurance', 1),
(80, 'Records', 1),
(81, 'Registrar', 1),
(82, 'Resource Generation', 1),
(83, 'Security', 1),
(84, 'Security (Admin Lobby)', 1),
(85, 'Student Affairs', 1),
(86, 'Supply', 1),
(87, 'Telephone and Network', 1),
(88, 'TUP Admin Employees Association', 1),
(89, 'TUP Faculty Association', 1),
(90, 'TUP Manila Multipurpose Cooperative', 1),
(91, 'UES-Extension Services', 1),
(92, 'UITC - University Information Technology Center', 1),
(93, 'University Student Government', 1),
(94, 'URDS-Research and Development', 1),
(95, 'Web', 1),
(96, 'Medical/Dental', 1),
(97, 'Sports Office', 1),
(98, 'CLA-Kalinangan Dance Troupe', 1),
(99, 'Senior Citizens & Persons with Disability', 1),
(100, 'BAC-Chairman', 1);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date_submitted` date NOT NULL,
  `first_lvl_status` tinyint(1) NOT NULL,
  `second_lvl_status` tinyint(1) NOT NULL,
  `third_lvl_status` tinyint(1) NOT NULL,
  `fourth_lvl_status` int(11) NOT NULL,
  `reason_for_rejection` varchar(512) DEFAULT NULL,
  `submitted` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=210 ;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `user_id`, `title`, `date_submitted`, `first_lvl_status`, `second_lvl_status`, `third_lvl_status`, `fourth_lvl_status`, `reason_for_rejection`, `submitted`) VALUES
(209, 1, 'Title', '2016-02-15', 1, 0, 0, 0, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `project_details`
--

CREATE TABLE IF NOT EXISTS `project_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `supply_id` int(11) DEFAULT NULL,
  `supply_description` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `jan_qty` int(11) NOT NULL,
  `feb_qty` int(11) NOT NULL,
  `mar_qty` int(11) NOT NULL,
  `apr_qty` int(11) NOT NULL,
  `may_qty` int(11) NOT NULL,
  `jun_qty` int(11) NOT NULL,
  `jul_qty` int(11) NOT NULL,
  `aug_qty` int(11) NOT NULL,
  `sep_qty` int(11) NOT NULL,
  `oct_qty` int(11) NOT NULL,
  `nov_qty` int(11) NOT NULL,
  `dec_qty` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `project_id` (`project_id`),
  KEY `supply_id` (`supply_id`),
  KEY `fk_category_id` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=100 ;

--
-- Dumping data for table `project_details`
--

INSERT INTO `project_details` (`id`, `project_id`, `category_id`, `supply_id`, `supply_description`, `quantity`, `unit`, `price`, `jan_qty`, `feb_qty`, `mar_qty`, `apr_qty`, `may_qty`, `jun_qty`, `jul_qty`, `aug_qty`, `sep_qty`, `oct_qty`, `nov_qty`, `dec_qty`) VALUES
(99, 209, 1, 12, 'CARBON FILM, A4 SIZE, 100 sheets per box', 1, 'box', '223.60', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE IF NOT EXISTS `subcategory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `subcategory` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `category_id`, `subcategory`, `status`) VALUES
(1, 1, 'Computer Supplies', 1),
(2, 1, 'Electrical Supplies', 1),
(3, 1, 'Janitorial Supplies', 1),
(4, 4, 'Office Equipment', 1),
(5, 1, 'Office Supplies', 1),
(6, 1, 'Paper Products', 1),
(7, 1, 'Writing Supplies', 1),
(8, 1, 'Microsoft Products', 1),
(9, 1, 'Hardware Supplies', 1),
(10, 1, 'Chemicals', 1),
(11, 1, 'Laboratory Supplies', 1),
(12, 1, 'Others', 1),
(13, 4, 'I.T. Equipment', 1),
(14, 4, 'Furniture', 1),
(15, 4, 'Appliances', 1),
(16, 4, 'Engineering Equipment', 1),
(17, 4, 'Chemical Apparatus', 1),
(18, 1, 'Consumables', 1),
(19, 4, 'Others', 1);

-- --------------------------------------------------------

--
-- Table structure for table `supply`
--

CREATE TABLE IF NOT EXISTS `supply` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subcategory_id` int(11) NOT NULL,
  `supply_description` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `subcategory_id` (`subcategory_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=150 ;

--
-- Dumping data for table `supply`
--

INSERT INTO `supply` (`id`, `subcategory_id`, `supply_description`, `unit`, `price`, `status`) VALUES
(1, 12, 'ACETATE', 'roll', '624.00', 0),
(2, 5, 'AIR FRESHENER, aerosol, 280ml/150g min', 'can', '81.64', 1),
(3, 5, 'ALCOHOL, ethyl, 68%-70%, scented, 500ml (-5ml)', 'bottle', '43.14', 0),
(4, 2, 'BATTERY, dry cell, AA, 2 pieces per blister pack', 'pack', '17.14', 0),
(5, 2, 'BATTERY, dry cell, AAA, 2 pieces per blister pack', 'pack', '15.03', 1),
(6, 2, 'BATTERY, dry cell, D, 2 pieces per blister pack', 'pack', '77.56', 1),
(7, 5, 'BINDING AND PUNCHING MACHINE', 'unit', '10.00', 0),
(8, 3, 'BROOM, SOFT (TAMBO), weight: 200g min tiger grass ', 'piece', '104.00', 1),
(9, 3, 'BROOM, STICK (TINGTING)', 'piece', '23.92', 1),
(10, 5, 'CALCULATOR, COMPACT, electronic, 12 digits cap, 1 unit in individual box', 'unit', '142.36', 0),
(11, 5, 'CALCULATOR, SCIENTIFIC, 1 unit in individual box', 'unit', '328.64', 0),
(12, 5, 'CARBON FILM, A4 SIZE, 100 sheets per box', 'box', '223.60', 1),
(13, 5, 'CARBON FILM, PE, black, size 216mm x 330mm, 100 sheets per box', 'box', '202.80', 0),
(14, 5, 'CARTOLINA, ASSORTED COLORS, 20 pieces per pack', 'pack', '73.32', 1),
(15, 14, 'CHAIR, MONOBLOC, BEIGE, with backrest, w/o armrest', 'piece', '251.56', 0),
(16, 14, 'CHAIR, MONOBLOC, WHITE, with backrest, w/o armrest', 'piece', '251.56', 0),
(17, 18, 'CHALK, WHITE ENAMEL, 100 pieces per box', 'box', '25.86', 0),
(18, 3, 'CLEANER, TOILET BOWL AND URINAL, , 900ml-1,000ml cap', 'bottle', '41.60', 1),
(19, 3, 'CLEANSER, SCOURING POWDER, 350g min./can', 'can', '18.20', 1),
(20, 5, 'CLEARBOOK, A4 SIZE', 'piece', '37.44', 1),
(21, 5, 'CLEARBOOK, LEGAL', 'piece', '41.60', 1),
(22, 5, 'CLIP, BACKFOLD, 19MM, 12 pieces per box', 'box', '7.28', 1),
(23, 5, 'CLIP, BACKFOLD, 25MM, 12 pieces per box', 'box', '15.08', 1),
(24, 5, 'CLIP, BACKFOLD, 32MM, 12 pieces per box', 'box', '20.68', 0),
(25, 5, 'CLIP, BACKFOLD, 50MM, 12 pieces per box', 'box', '43.68', 1),
(26, 2, 'COMPACT FLUORESCENT LAMP, 18 WATTS, 1 piece in individual box', 'piece', '93.29', 0),
(27, 5, 'CONTINUOUS FORM, 1 PLY, 280 x 241mm , 2,000 sheets per box', 'box', '601.90', 1),
(28, 5, 'CONTINUOUS FORM, 1 PLY, 280MM X 378MM, 2,000 sheets per box', 'box', '950.30', 1),
(29, 5, 'CONTINUOUS FORM, 2 PLY, 280 x 241mm, 1,000 sets per box', 'box', '685.15', 0),
(30, 5, 'CONTINUOUS FORM, 2 PLY, 280MM X 378MM, 1,000 sets per box', 'box', '1.00', 0),
(31, 5, 'CONTINUOUS FORM, 3 PLY, 280 x 241mm, 500 sets per box', 'box', '571.80', 0),
(32, 5, 'CONTINUOUS FORM, 3 PLY, 280MM X 378MM, 500 sets per box', 'box', '958.15', 0),
(33, 5, 'CORRECTION TAPE, 1 piece in individual plastic', 'piece', '41.08', 1),
(34, 5, 'CUTTER BLADE, 10 pieces per tube', 'tube', '9.19', 0),
(35, 5, 'CUTTER KNIFE', 'piece', '19.76', 0),
(36, 5, 'DATA FILE BOX, made of chipboard, with closed ends', 'piece', '69.73', 0),
(37, 5, 'DATA FOLDER, made of chipboard, taglia lock', 'piece', '68.64', 1),
(38, 5, 'DATING AND STAMPING MACHINE', 'piece', '478.38', 0),
(39, 3, 'DETERGENT POWDER, all purpose, 1kg per plastic pouch', 'pouch', '41.60', 0),
(40, 4, 'DIGITAL VOICE RECORDER, memory: 4GB (expandable), 1 unit in individual box', 'unit', '6.00', 0),
(41, 3, 'DISINFECTANT, bleaching solution', 'container', '101.82', 0),
(42, 3, 'DISINFECTANT SPRAY, aerosol type, 400-550 grams', 'can', '119.60', 1),
(43, 4, 'DOCUMENT CAMERA', 'unit', '25.00', 1),
(44, 3, 'DUST PAN, non-rigid plastic', 'piece', '27.96', 0),
(45, 1, 'DVD REWRITABLE', 'piece', '21.37', 1),
(46, 5, 'ELECTRIC FAN, INDUSTRIAL', 'unit', '1.00', 0),
(47, 5, 'ELECTRIC FAN, ORBIT type, ceiling,  metal blade', 'unit', '1.00', 1),
(48, 5, 'ELECTRIC FAN, STAND TYPE', 'unit', '1.00', 0),
(49, 5, 'ELECTRIC FAN, WALL TYPE', 'unit', '789.36', 0),
(50, 5, 'ENVELOPE, DOCUMENTARY, for A4 size document, 500 pieces per box', 'box', '381.54', 0),
(51, 5, 'ENVELOPE, DOCUMENTARY, for legal size document, 500 pieces per box', 'box', '507.40', 0),
(52, 5, 'ENVELOPE, EXPANDING, KRAFTBOARD,for legal size doc, 100 pieces per box', 'box', '621.71', 0),
(53, 5, 'ENVELOPE, EXPANDING, PLASTIC', 'piece', '35.03', 1),
(54, 5, 'ENVELOPE, MAILING, 500 pieces per box', 'box', '134.04', 1),
(55, 5, 'ENVELOPE, MAILING, WITH WINDOW, 500 pieces per box', 'box', '171.48', 0),
(56, 5, 'ERASER, FELT, FOR BLACKBOARD OR WHITEBOARD', 'piece', '10.07', 0),
(57, 5, 'ERASER, PLASTIC OR RUBBER', 'piece', '2.16', 1),
(58, 1, 'EXTERNAL HARD DRIVE, 1TB, 2.5"HDD, USB 3.0, 1 unit in individual box', 'unit', '3.00', 1),
(59, 5, 'FACSIMILE MACHINE', 'unit', '3.00', 0),
(60, 5, 'FASTENER, METAL, 70mm between prongs, 50 sets per box', 'box', '57.09', 0),
(61, 5, 'FILE ORGANIZER, LEGAL', 'piece', '82.87', 1),
(62, 5, 'FILE TAB DIVIDER, A4,  5 colors per set', 'set', '12.48', 1),
(63, 5, 'FILE TAB DIVIDER, LEGAL,  5 colors per set', 'set', '16.64', 1),
(64, 3, 'FIRE EXTINGUISHER, DRY CHEMICAL', 'unit', '1.00', 1),
(65, 3, 'FIRE EXTINGUISHER, PURE HCFC', 'unit', '3.00', 1),
(66, 1, 'FLASH DRIVE, 16 GB capacity,1 piece in individual blister pack', 'piece', '210.08', 1),
(67, 3, 'FLOOR WAX, PASTE, RED', 'can', '202.80', 0),
(68, 2, 'FLUORESCENT LAMP, 28 WATTS', 'tube', '114.40', 0),
(69, 2, 'FLUORESCENT LAMP, 36 WATTS', 'tube', '36.30', 0),
(70, 5, 'FOLDER, FANCY, A4, 50 pieces per bundle', 'bundle', '234.00', 1),
(71, 5, 'FOLDER, FANCY, legal, 50 pieces per bundle', 'bundle', '291.20', 1),
(72, 5, 'FOLDER, L-TYPE, A4 SIZE, 50 pieces per pack', 'pack', '166.40', 1),
(73, 5, 'FOLDER, L-TYPE, LEGAL SIZE, 50 pieces per pack', 'pack', '182.00', 1),
(74, 5, 'FOLDER, PRESSBOARD, size: 240mm x 370mm (-5mm), 100 pieces per box', 'box', '935.98', 0),
(75, 5, 'FOLDER, TAGBOARD, for A4 size documents, 100 pieces per pack', 'pack', '259.36', 0),
(76, 5, 'FOLDER, TAGBOARD, for legal size documents ,100 pieces per pack', 'pack', '299.98', 0),
(77, 14, 'FURNITURE CLEANER, aerosol, 300ml min./can', 'can', '84.76', 1),
(78, 5, 'GLUE, all purpose, gross weight: 200 grams min', 'jars', '48.88', 1),
(79, 5, 'HANDBOOK ON RA9184', 'book', '28.90', 1),
(80, 5, 'INDEX TAB, 5 sets per box', 'box', '50.84', 0),
(81, 3, 'INSECTICIDE, aerosol type, net content: 600ml min ', 'can', '117.52', 0),
(82, 5, 'LOOSELEAF COVER, 50 sets per bundle', 'bundle', '539.76', 0),
(83, 5, 'MAGAZINE FILE BOX, LARGE', 'piece', '44.72', 1),
(84, 7, 'MARKER, FLUORESCENT, 3 colors per set', 'set', '35.55', 0),
(85, 7, 'MARKER, PERMANENT, bullet type, black', 'piece', '9.65', 0),
(86, 7, 'MARKER, PERMANENT, bullet type, blue', 'piece', '9.65', 0),
(87, 7, 'MARKER, PERMANENT, bullet type, red', 'piece', '9.65', 0),
(88, 7, 'MARKER, WHITEBOARD, black', 'piece', '11.80', 0),
(89, 7, 'MARKER, WHITEBOARD, blue', 'piece', '11.80', 0),
(90, 7, 'MARKER, WHITEBOARD, red', 'piece', '11.80', 0),
(91, 5, 'MONOBLOC, TABLE, BEIGE', 'unit', '1.00', 0),
(92, 5, 'MONOBLOC, TABLE, WHITE', 'unit', '1.00', 1),
(93, 3, 'MOPBUCKET', 'unit', '2.00', 0),
(94, 3, 'MOPHANDLE', 'piece', '142.48', 0),
(95, 3, 'MOPHEAD, made of rayon, weight: 400 grams min', 'piece', '98.80', 0),
(96, 1, 'MOUSE, OPTICAL, USB CONNECTION TYPE, 1 unit in individual box', 'unit', '127.80', 0),
(97, 4, 'MULTIMEDIA PROJECTOR, 4000 min ANSI Lumens', 'unit', '28.00', 0),
(98, 7, 'NOTEBOOK, STENOGRAPHER, spiral, 40 leaves', 'piece', '10.40', 1),
(99, 7, 'NOTEPAD, STICK-ON, 2X3, 100 sheets per pad', 'pad', '31.20', 0),
(100, 7, 'NOTEPAD, STICK-ON, 3X3, 100 sheets per pad', 'pad', '40.44', 1),
(101, 7, 'NOTEPAD, STICK-ON, 3X4, 100 sheets per pad', 'pad', '54.06', 0),
(102, 7, 'PAD PAPER, RULED', 'pad', '18.26', 0),
(103, 5, 'PAPER CLIP, 32MM, 100 pieces per box or 52 grams (min.) (net of box)', 'box', '6.76', 0),
(104, 5, 'PAPER CLIP, 48MM, 100 pieces per box or 120 grams (min.) (net of box)', 'box', '13.52', 1),
(105, 5, 'PAPER SHREDDER', 'unit', '5.00', 0),
(106, 5, 'PAPER TRIMMER CUTTING MACHINE', 'unit', '7.00', 0),
(107, 7, 'PAPER, MULTICOPY, 80gsm, size: 210mm x 297mm (A4)', 'ream', '105.35', 0),
(108, 7, 'PAPER, MULTICOPY, 80gsm, size: 216mm x 330mm (Legal)', 'ream', '132.02', 0),
(109, 7, 'PAPER, MULTI-PURPOSE, 70 gsm., size: 210mm x 297mm (A4)', 'ream', '91.94', 0),
(110, 7, 'PAPER, MULTI-PURPOSE, 70 gsm., size: 216mm x 330mm (Legal)', 'ream', '105.61', 0),
(111, 7, 'PAPER, PARCHMENT, 100 sheets per box', 'box', '86.84', 0),
(112, 7, 'PAPER, THERMAL, 216MM X 30M', 'roll', '27.82', 1),
(113, 4, 'PENCIL SHARPENER, 1 piece in individual plastic case', 'piece', '187.20', 0),
(114, 7, 'PENCIL, LEAD WITH ERASER, 12 dozens per box', 'box', '19.62', 0),
(115, 19, 'PHILIPPINE NATIONAL FLAG', 'piece', '278.72', 0),
(116, 4, 'PRINTER, IMPACT DOT MATRIX, 24 pins, 136 column', 'unit', '18.00', 0),
(117, 4, 'PRINTER, IMPACT DOT MATRIX, 9 pins, 80 columns', 'unit', '5.00', 0),
(118, 4, 'PRINTER, LASER, MONOCHROME', 'unit', '1.00', 0),
(119, 5, 'PUNCHER, paper, heavy duty, with two hole guide, 1 piece in individual box', 'piece', '114.28', 0),
(120, 3, 'RAGS, ALL COTTON, 32 pieces per kilo per bundle', 'bundle', '45.76', 0),
(121, 5, 'RECORD BOOK, 300 PAGES, size: 214mm x 278mm min', 'book', '60.32', 1),
(122, 5, 'RECORD BOOK, 500 PAGES, size: 214mm x 278mm min', 'book', '86.85', 0),
(123, 5, 'RING BINDER, PLASTIC, 32MM, 10 pieces per bundle', 'bundle', '256.87', 1),
(124, 12, 'RUBBER BAND, 70mm min lay flat length (#18)', 'box', '105.85', 1),
(125, 5, 'RULER, PLASTIC, 450MM, 1 piece in individual plastic', 'piece', '13.88', 1),
(126, 5, 'SCISSORS, symmetrical, blade length: 65mm, 1 piece in individual plastic', 'pair', '15.53', 1),
(127, 5, 'SCOURING PAD, 5 pieces per pack', 'pack', '119.60', 0),
(128, 7, 'SIGN PEN, BLACK, liquid/gel ink, 0.5mm needle tip', 'piece', '44.01', 0),
(129, 7, 'SIGN PEN, BLUE, liquid/gel ink, 0.5mm needle tip', 'piece', '44.01', 0),
(130, 7, 'SIGN PEN, RED, liquid/gel ink, 0.5mm needle tip', 'piece', '44.01', 0),
(131, 5, 'STAMP PAD INK, purple or violet, 50ml (min.)', 'bottle', '24.63', 0),
(132, 5, 'STAMP PAD, FELT, bed dimension: 60mm x 100mm', 'piece', '27.66', 0),
(133, 5, 'STAPLE REMOVER, PLIER TYPE', 'piece', '17.68', 0),
(134, 5, 'STAPLE WIRE, HEAVY DUTY, 23/13', 'box', '30.42', 0),
(135, 5, 'STAPLE WIRE, STANDARD', 'box', '18.92', 0),
(136, 5, 'STAPLER, BINDER TYPE', 'unit', '1.00', 1),
(137, 5, 'STAPLER, STANDARD TYPE, load cap: 200 staples min, 1 piece in individual box', 'piece', '92.23', 0),
(138, 5, 'TAPE DISPENSER, TABLE TOP', 'piece', '47.72', 0),
(139, 2, 'TAPE, ELECTRICAL', 'roll', '18.20', 0),
(140, 18, 'TAPE, MASKING, width: 24mm (?1mm)', 'roll', '55.12', 1),
(141, 18, 'TAPE, MASKING, width: 48mm (?1mm)', 'roll', '105.04', 1),
(142, 18, 'TAPE, PACKAGING, width: 48mm (?1mm)', 'roll', '33.28', 1),
(143, 18, 'TAPE, TRANSPARENT, width: 24mm (?1mm)', 'roll', '17.37', 1),
(144, 18, 'TAPE, TRANSPARENT, width: 48mm (?1mm)', 'roll', '33.28', 0),
(145, 3, 'TOILET TISSUE PAPER 2-plys sheets, 150 pulls, 12 rolls in a pack', 'pack', '75.57', 0),
(146, 3, 'TRASHBAG, plastic, gusseted type, transparent, 10 pcs per roll/pack', 'roll', '139.88', 0),
(147, 3, 'TWINE, PLASTIC', 'roll', '54.08', 1),
(148, 3, 'WASTEBASKET, NON RIGID PLASTIC', 'piece', '23.90', 0),
(149, 3, 'WRAPPING PAPER, 50 sheets per pack', 'pack', '124.78', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `office_id` int(11) NOT NULL,
  `user_type_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `office_id` (`office_id`),
  KEY `user_type_id` (`user_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `office_id`, `user_type_id`, `name`, `position`, `password`, `status`) VALUES
(1, 6, 2, 'Peragrino B. Amador', 'BAC Secretary', '12345', 1),
(2, 8, 4, 'Vivian C. Santos', 'Budget Officer', '12345', 1),
(4, 100, 4, 'Enrico Hilario', 'BAC. Chairman', '12345', 1),
(5, 69, 4, 'Adora S. Pili', 'President', '12345', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE IF NOT EXISTS `user_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `type`) VALUES
(1, 'admin'),
(2, 'BAC'),
(3, 'regular'),
(4, 'approver');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `approval`
--
ALTER TABLE `approval`
  ADD CONSTRAINT `approval_ibfk_5` FOREIGN KEY (`fourth_lvl_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `approval_ibfk_1` FOREIGN KEY (`office_id`) REFERENCES `office` (`id`),
  ADD CONSTRAINT `approval_ibfk_2` FOREIGN KEY (`first_lvl_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `approval_ibfk_3` FOREIGN KEY (`second_lvl_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `approval_ibfk_4` FOREIGN KEY (`third_lvl_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `budget`
--
ALTER TABLE `budget`
  ADD CONSTRAINT `budget_ibfk_1` FOREIGN KEY (`office_id`) REFERENCES `office` (`id`);

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `project_details`
--
ALTER TABLE `project_details`
  ADD CONSTRAINT `fk_category_id` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `project_details_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`),
  ADD CONSTRAINT `project_details_ibfk_2` FOREIGN KEY (`supply_id`) REFERENCES `supply` (`id`);

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Constraints for table `supply`
--
ALTER TABLE `supply`
  ADD CONSTRAINT `supply_ibfk_1` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategory` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`office_id`) REFERENCES `office` (`id`),
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`user_type_id`) REFERENCES `user_type` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
