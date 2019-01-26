/*
Navicat MySQL Data Transfer

Source Server         : Database Local
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : mvc

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-01-26 23:55:59
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for bills
-- ----------------------------
DROP TABLE IF EXISTS `bills`;
CREATE TABLE `bills` (
  `code` int(11) NOT NULL AUTO_INCREMENT,
  `MaHD` varchar(50) NOT NULL,
  `MaKH` varchar(20) NOT NULL,
  `MaNV` varchar(20) NOT NULL,
  `TongTien` int(11) DEFAULT NULL,
  `Date` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bills
-- ----------------------------
INSERT INTO `bills` VALUES ('31', '1548521346', 'KH_1', 'NV1', '700000', '2019-01-26 17:49:06', '1');
INSERT INTO `bills` VALUES ('32', 'KH2_NV01_1548521656', 'KH2', 'NV01', '35000', '2019-01-26 17:54:16', null);

-- ----------------------------
-- Table structure for bills_detail
-- ----------------------------
DROP TABLE IF EXISTS `bills_detail`;
CREATE TABLE `bills_detail` (
  `code` int(11) NOT NULL AUTO_INCREMENT,
  `MaHD` varchar(50) DEFAULT NULL,
  `MaSP` varchar(20) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `TongTien` int(11) DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bills_detail
-- ----------------------------
INSERT INTO `bills_detail` VALUES ('44', '1548521346', '1', '2', '300000', '600000');
INSERT INTO `bills_detail` VALUES ('45', '1548521346', '4', '1', '100000', '100000');
INSERT INTO `bills_detail` VALUES ('46', 'KH2_NV01_1548521656', '7', '3', '5000', '15000');
INSERT INTO `bills_detail` VALUES ('47', 'KH2_NV01_1548521656', '8', '1', '20000', '20000');

-- ----------------------------
-- Table structure for customers
-- ----------------------------
DROP TABLE IF EXISTS `customers`;
CREATE TABLE `customers` (
  `code` varchar(10) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `mobile` varchar(10) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of customers
-- ----------------------------
INSERT INTO `customers` VALUES ('2', 'Phạm Ngọc Long', 'ngoclong@gmail.com', '954834777', 'Hai Nam');
INSERT INTO `customers` VALUES ('3', 'Pham Nam Phong', 'namphong@gmail.com', '0947284719', 'Ha Noi');

-- ----------------------------
-- Table structure for employees
-- ----------------------------
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

-- ----------------------------
-- Records of employees
-- ----------------------------
INSERT INTO `employees` VALUES ('1', 'Nguyễn Chí Dũng', '0965346911', 'chidungplus@gmail.com', 'Hà Nội', '123');
INSERT INTO `employees` VALUES ('4', 'Phạm Ngọc Bách', '0975643839', 'ngocbach@gmail.com', 'Hà Nam', '444');

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `code` varchar(10) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `price` bigint(20) DEFAULT NULL,
  `quantity` bigint(20) DEFAULT NULL,
  `images` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES ('1', 'Iphone 6', '300000', '100', 'iphone-6s-vang-1.png');
INSERT INTO `products` VALUES ('10', 'Iphone Xs Max', '10000', '100', 'iphone-xs-anh-dai-dien.png');
INSERT INTO `products` VALUES ('3', 'Iphone 7 Plus', '100000', '100', 'iphone-7-plus-black.jpg');
INSERT INTO `products` VALUES ('4', 'Iphone X', '100000', '100', 'iphone-x-1-min.png');
INSERT INTO `products` VALUES ('5', 'Ipad Pro', '20000', '600', '11-xam-wifi-1-.png');
INSERT INTO `products` VALUES ('6', 'Ipad Air', '30000', '100', 'ipad-air-1-den-4g-1.png');
INSERT INTO `products` VALUES ('7', 'Ipad Pro Mini', '5000', '2000', 'ipad-pro-97-den-1.png');
INSERT INTO `products` VALUES ('8', 'Macbook Air', '20000', '500', 'apple-macbook-air-mjve2-01.png');
INSERT INTO `products` VALUES ('9', 'Macbook Pro', '50000', '300', 'macbook-mnyh2.png');
