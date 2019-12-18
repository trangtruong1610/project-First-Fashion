/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 5.7.26 : Database - first-fashion
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`first-fashion` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `first-fashion`;

/*Table structure for table `account` */

DROP TABLE IF EXISTS `account`;

CREATE TABLE `account` (
  `AccountID` int(11) NOT NULL,
  `Username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `EmployeeName` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `AccTypeID` int(11) DEFAULT NULL,
  `Status` bit(1) DEFAULT NULL,
  PRIMARY KEY (`AccountID`),
  KEY `AccTypeID` (`AccTypeID`),
  CONSTRAINT `account_ibfk_1` FOREIGN KEY (`AccTypeID`) REFERENCES `accounttype` (`AccTypeID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `account` */

/*Table structure for table `accounttype` */

DROP TABLE IF EXISTS `accounttype`;

CREATE TABLE `accounttype` (
  `AccTypeID` int(11) NOT NULL,
  `AccountType` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Quantity` int(11) DEFAULT NULL,
  PRIMARY KEY (`AccTypeID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `accounttype` */

/*Table structure for table `brand` */

DROP TABLE IF EXISTS `brand`;

CREATE TABLE `brand` (
  `BrandID` int(11) NOT NULL,
  `BrandName` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Origin` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(0) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` bit(1) DEFAULT NULL,
  PRIMARY KEY (`BrandID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `brand` */

/*Table structure for table `picture` */

DROP TABLE IF EXISTS `picture`;

CREATE TABLE `picture` (
  `PictureID` int(11) NOT NULL,
  `ProductID` int(11) DEFAULT NULL,
  `PictureType` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`PictureID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `picture` */

/*Table structure for table `product` */

DROP TABLE IF EXISTS `product`;

CREATE TABLE `product` (
  `ProductID` int(11) NOT NULL AUTO_INCREMENT,
  `ProductName` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TypeID` int(11) NOT NULL,
  `BrandID` int(11) NOT NULL,
  `PictureID` int(11) DEFAULT NULL,
  `Size` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Color` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Material` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ListPrice` int(11) DEFAULT NULL,
  `InStockQuantity` int(11) DEFAULT NULL,
  `Origin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Status` bit(1) DEFAULT NULL,
  PRIMARY KEY (`ProductID`),
  KEY `BrandID` (`BrandID`),
  KEY `PictureID` (`PictureID`),
  KEY `TypeID` (`TypeID`),
  CONSTRAINT `product_ibfk_1` FOREIGN KEY (`BrandID`) REFERENCES `brand` (`BrandID`),
  CONSTRAINT `product_ibfk_2` FOREIGN KEY (`PictureID`) REFERENCES `picture` (`PictureID`),
  CONSTRAINT `product_ibfk_3` FOREIGN KEY (`TypeID`) REFERENCES `producttype` (`TypeID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `product` */

/*Table structure for table `producttype` */

DROP TABLE IF EXISTS `producttype`;

CREATE TABLE `producttype` (
  `TypeID` int(11) NOT NULL,
  `ProductType` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Status` bit(1) DEFAULT NULL,
  PRIMARY KEY (`TypeID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `producttype` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
