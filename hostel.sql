-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.21-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for dbhostel
DROP DATABASE IF EXISTS `dbhostel`;
CREATE DATABASE IF NOT EXISTS `dbhostel` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `dbhostel`;

-- Dumping structure for table dbhostel.block
DROP TABLE IF EXISTS `block`;
CREATE TABLE IF NOT EXISTS `block` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table dbhostel.block: ~6 rows (approximately)
/*!40000 ALTER TABLE `block` DISABLE KEYS */;
INSERT INTO `block` (`id`, `name`, `gender`) VALUES
	(1, 'LESTARI A1', 'M'),
	(2, 'LESTARI A2', 'M'),
	(3, 'LESTARI A3', 'M'),
	(4, 'LESTARI A4', 'M'),
	(5, 'LESTARI B1', 'F'),
	(6, 'LESTARI B2', 'F');
/*!40000 ALTER TABLE `block` ENABLE KEYS */;

-- Dumping structure for table dbhostel.bookings
DROP TABLE IF EXISTS `bookings`;
CREATE TABLE IF NOT EXISTS `bookings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `room_id` int(11) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `comment` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table dbhostel.bookings: ~1 rows (approximately)
/*!40000 ALTER TABLE `bookings` DISABLE KEYS */;
INSERT INTO `bookings` (`id`, `room_id`, `student_id`, `status`, `comment`, `created_at`) VALUES
	(1, 1, 1, 3, 'sjdflksjfsldkfjlks', '2019-11-21 12:13:45');
/*!40000 ALTER TABLE `bookings` ENABLE KEYS */;

-- Dumping structure for table dbhostel.login
DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table dbhostel.login: ~0 rows (approximately)
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` (`username`, `email`, `password`) VALUES
	('admin', 'test@gmail.com', 'admin1234');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;

-- Dumping structure for table dbhostel.regstud
DROP TABLE IF EXISTS `regstud`;
CREATE TABLE IF NOT EXISTS `regstud` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `matricno` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `studentname` varchar(50) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `prog` varchar(50) NOT NULL,
  `yearsem` varchar(50) NOT NULL,
  `block` varchar(50) NOT NULL,
  `roomno` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `phoneno` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `matricno` (`matricno`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table dbhostel.regstud: ~8 rows (approximately)
/*!40000 ALTER TABLE `regstud` DISABLE KEYS */;
INSERT INTO `regstud` (`id`, `matricno`, `email`, `studentname`, `faculty`, `prog`, `yearsem`, `block`, `roomno`, `address`, `gender`, `phoneno`) VALUES
	(1, 'B031910002', 'ainaimanina01@gmail.com', 'Aina Imanina Bt Mohd', 'FTMK                        ', 'BITS                        ', '1/2', ' B1', 'B2-A-1-02', '', 'F', '0102233456'),
	(2, 'B031910004', 'rafiRid@gmail.com', 'Ridhwan Rafi Bin Maulana', 'FTMK', 'BITC', '1/1', 'A3', 'A-G-01', 'FLAT Angkasa, Tingkat 3-A, 6323 Taiping, Perak', 'M', '0165982112'),
	(3, 'B031910008', 'ainul@gmail.com', 'AINUL MARDHIAH', 'FTMK', 'BITC', '2/2', 'B2', 'B2-B-2-03', 'NO31, Taman Putra Jaya', 'F', '0112356487'),
	(4, 'B031910649', 'ina10@icloud.com', 'Ina Asyikin Bt Syah', 'FTMK', 'BITZ', '2/2', 'B1', 'B1-B-3-04', 'No.12, Jalan Manggis', 'F', '0154455689'),
	(5, 'B031910010', 'shahrizal@gmail.com ', 'MUHD SHAH BIN RIZAL', 'FTMK ', 'BITS ', '1/1', 'B1', 'A-1-02', 'Taman Putra, Lot.2323, Taman Bay, 76100 Melaka', 'M', '0123345554'),
	(6, '0147899654', 'carolchela@gmail.com', 'Caroline Chela', 'FTMK ', 'BITC ', '1/2', ' B2', 'B2-B-3-06', 'TAMAN INDAH, LORONG 3E, LOT 101, 45000 KUALA LUMPU', 'F', '0147899654'),
	(7, '0148989789', 'nurain10@gmail.com', 'Nur Ain Binti Mohd Akma', 'FTMK', 'BITS', '1/2', 'B1', 'B1-A-1-01', 'No.12, TAMAN PAYA INDAH, LORONG 4H,76100 MELAKA', 'F', ''),
	(8, '', '', '', '', '', '', 'LESTARI A2', '', '', '', '');
/*!40000 ALTER TABLE `regstud` ENABLE KEYS */;

-- Dumping structure for table dbhostel.rooms
DROP TABLE IF EXISTS `rooms`;
CREATE TABLE IF NOT EXISTS `rooms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `block_id` int(11) DEFAULT NULL,
  `rNo` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `studentid` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`rNo`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

-- Dumping data for table dbhostel.rooms: ~35 rows (approximately)
/*!40000 ALTER TABLE `rooms` DISABLE KEYS */;
INSERT INTO `rooms` (`id`, `block_id`, `rNo`, `price`, `studentid`, `status`) VALUES
	(1, 5, 'B1-A-G-01-L', 'RM504.00', 0, 0),
	(2, 5, 'B1-A-G-01-R', 'RM504.00', 0, 0),
	(3, 5, 'B1-A-G-02-L', 'RM504.00', 0, 0),
	(4, 5, 'B1-A-G-02-R', 'RM504.00', 0, 0),
	(5, 5, 'B1-A-G-03-L', 'RM504.00', 0, 0),
	(6, 5, 'B1-A-G-03-R', 'RM504.00', 0, 0),
	(7, 5, 'B1-A-G-04-L', 'RM504.00', 0, 0),
	(8, 5, 'B1-A-G-04-R', 'RM504.00', 0, 0),
	(9, 5, 'B1-A-G-05-L', 'RM504.00', 0, 0),
	(10, 5, 'B1-A-G-05-R', 'RM504.00', 0, 0),
	(11, 5, 'B1-A-G-06-L', 'RM504.00', 0, 0),
	(12, 5, 'B1-A-G-06-R', 'RM504.00', 0, 0),
	(13, 5, 'B1-B-G-01-L', 'RM504.00', 0, 0),
	(14, 5, 'B1-B-G-01-R', 'RM504.00', 0, 0),
	(15, 5, 'B1-B-G-02-L', 'RM504.00', 0, 0),
	(16, 5, 'B1-B-G-02-R', 'RM504.00', 0, 0),
	(17, 5, 'B1-B-G-03-L', 'RM504.00', 0, 0),
	(18, 5, 'B1-B-G-03-R', 'RM504.00', 0, 0),
	(19, 5, 'B1-B-G-04-L', 'RM504.00', 0, 0),
	(20, 5, 'B1-B-G-04-R', 'RM504.00', 0, 0),
	(21, 5, 'B1-B-G-05-L', 'RM504.00', 0, 0),
	(22, 5, 'B1-B-G-05-R', 'RM504.00', 0, 0),
	(23, 5, 'B1-B-G-06-L', 'RM504.00', 0, 0),
	(24, 5, 'B1-C-G-01-L', 'RM504.00', 0, 0),
	(25, 5, 'B1-C-G-01-R', 'RM504.00', 0, 0),
	(26, 5, 'B1-C-G-02-L', 'RM504.00', 0, 0),
	(27, 5, 'B1-C-G-02-R', 'RM504.00', 0, 0),
	(28, 5, 'B1-C-G-03-L', 'RM504.00', 0, 0),
	(29, 5, 'B1-C-G-03-R', 'RM504.00', 0, 0),
	(30, 5, 'B1-C-G-04-L', 'RM504.00', 0, 0),
	(31, 5, 'B1-C-G-04-R', 'RM504.00', 0, 0),
	(32, 5, 'B1-C-G-05-L', 'RM504.00', 0, 0),
	(33, 5, 'B1-C-G-05-R', 'RM504.00', 0, 0),
	(34, 5, 'B1-C-G-06-L', 'RM504.00', 0, 0),
	(36, 5, 'B1-C-G-06-R', 'RM504.00', 0, 0);
/*!40000 ALTER TABLE `rooms` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
