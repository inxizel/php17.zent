# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.1.8-MariaDB)
# Database: mvc
# Generation Time: 2019-01-24 07:00:56 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table bills
# ------------------------------------------------------------

DROP TABLE IF EXISTS `bills`;

CREATE TABLE `bills` (
  `code` int(11) NOT NULL AUTO_INCREMENT,
  `MaHD` varchar(50) NOT NULL,
  `MaKH` varchar(20) NOT NULL,
  `MaNV` varchar(20) NOT NULL,
  `TongTien` int(11) DEFAULT NULL,
  `Date` datetime DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `bills` WRITE;
/*!40000 ALTER TABLE `bills` DISABLE KEYS */;

INSERT INTO `bills` (`code`, `MaHD`, `MaKH`, `MaNV`, `TongTien`, `Date`)
VALUES
	(6,'KH3_NV01_1548072277','KH3','NV01',1700000,'2019-01-21 13:04:37'),
	(7,'KH2_NV01_1548158492','KH2','NV01',0,'2019-01-22 13:01:32'),
	(8,'KH2_NV01_1548158546','KH2','NV01',0,'2019-01-22 13:02:26'),
	(9,'KH2_NV01_1548158616','KH2','NV01',15000,'2019-01-22 13:03:36'),
	(10,'KH2_NV01_1548159511','KH2','NV01',1600000,'2019-01-22 13:18:31'),
	(11,'KH2_NV01_1548159601','KH2','NV01',120000,'2019-01-22 13:20:01'),
	(12,'KH3_NV01_1548159838','KH3','NV01',800000,'2019-01-22 13:23:58'),
	(13,'KH2_NV01_1548159872','KH2','NV01',120000,'2019-01-22 13:24:32');

/*!40000 ALTER TABLE `bills` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table bills_detail
# ------------------------------------------------------------

DROP TABLE IF EXISTS `bills_detail`;

CREATE TABLE `bills_detail` (
  `code` int(11) NOT NULL AUTO_INCREMENT,
  `MaHD` varchar(50) DEFAULT NULL,
  `MaSP` varchar(20) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `TongTien` int(11) DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `bills_detail` WRITE;
/*!40000 ALTER TABLE `bills_detail` DISABLE KEYS */;

INSERT INTO `bills_detail` (`code`, `MaHD`, `MaSP`, `quantity`, `price`, `TongTien`)
VALUES
	(11,'KH3_NV01_1548072277','1',5,300000,1500000),
	(12,'KH3_NV01_1548072277','3',2,100000,200000),
	(13,'KH2_NV01_1548158616','10',1,10000,10000),
	(14,'KH2_NV01_1548158616','7',1,5000,5000),
	(15,'KH2_NV01_1548159511','4',6,100000,600000),
	(16,'KH2_NV01_1548159511','3',9,100000,900000),
	(17,'KH2_NV01_1548159511','9',2,50000,100000),
	(18,'KH2_NV01_1548159601','8',3,20000,60000),
	(19,'KH2_NV01_1548159601','6',2,30000,60000),
	(20,'KH3_NV01_1548159838','4',4,100000,400000),
	(21,'KH3_NV01_1548159838','3',4,100000,400000),
	(22,'KH2_NV01_1548159872','8',2,20000,40000),
	(23,'KH2_NV01_1548159872','5',4,20000,80000);

/*!40000 ALTER TABLE `bills_detail` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table customers
# ------------------------------------------------------------

DROP TABLE IF EXISTS `customers`;

CREATE TABLE `customers` (
  `code` varchar(10) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `mobile` varchar(10) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;

INSERT INTO `customers` (`code`, `name`, `email`, `mobile`, `address`)
VALUES
	('2','Phạm Ngọc Long','ngoclong@gmail.com','954834777','Hai Nam'),
	('3','Pham Nam Phong','namphong@gmail.com','0947284719','Ha Noi');

/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table employees
# ------------------------------------------------------------

DROP TABLE IF EXISTS `employees`;

CREATE TABLE `employees` (
  `code` varchar(10) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `employees` WRITE;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;

INSERT INTO `employees` (`code`, `name`, `mobile`, `email`, `address`, `password`)
VALUES
	('1','Nguyễn Chí Dũng','0965346911','chidungplus@gmail.com','Hà Nội','222'),
	('4','Phạm Ngọc Bách','0975643839','ngocbach@gmail.com','Hà Nam','444');

/*!40000 ALTER TABLE `employees` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table products
# ------------------------------------------------------------

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `code` varchar(10) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `price` bigint(20) DEFAULT NULL,
  `quantity` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;

INSERT INTO `products` (`code`, `name`, `price`, `quantity`)
VALUES
	('1','Con Gà',300000,100),
	('10','Bánh Trưng',10000,100),
	('3','Con mèo',100000,100),
	('4','Mứt Tết',100000,100),
	('5','Nho Khô',20000,600),
	('6','Bánh Ngọt',30000,100),
	('7','Kẹo Lạc',5000,2000),
	('8','Hoa Hồng',20000,500),
	('9','Nến Đỏ',50000,300);

/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
