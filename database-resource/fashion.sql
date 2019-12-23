/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.10-MariaDB : Database - first-fashion
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

insert  into `account`(`AccountID`,`Username`,`Password`,`EmployeeName`,`Email`,`Phone`,`AccTypeID`,`Status`) values 
(1,'circle1','123456','Trang Truong','Trangtruong@gmail.com','09000909',1,NULL),
(2,'circle2','123456','Minh An','Anminh@gmail.com','01253206',2,NULL);

/*Table structure for table `accounttype` */

DROP TABLE IF EXISTS `accounttype`;

CREATE TABLE `accounttype` (
  `AccTypeID` int(11) NOT NULL,
  `AccountType` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` bit(1) DEFAULT NULL,
  PRIMARY KEY (`AccTypeID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `accounttype` */

insert  into `accounttype`(`AccTypeID`,`AccountType`,`status`) values 
(1,'admin',NULL),
(2,'Superadmin',NULL);

/*Table structure for table `category` */

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `NameCate` text CHARACTER SET latin1 NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `parent_id` (`parent_id`),
  CONSTRAINT `category_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `category` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `category` */

insert  into `category`(`id`,`NameCate`,`parent_id`) values 
(1,'thoi trang',NULL),
(2,'phu kien',NULL),
(3,'thoi trang tre em',NULL),
(4,'nam',1),
(5,'nu',1),
(6,'tre em',3),
(7,'nam',2),
(8,'nu',2),
(9,'tre em',2),
(10,'Gucci',1),
(11,'Gucci',2),
(12,'Calvin Klein',1),
(13,'Calvin Klein',2),
(14,'Hugo Boss',1),
(15,'Hugo Boss',2),
(16,'Louis Vuitton',1),
(17,'Louis Vuitton',2),
(18,'Bubbery',1),
(19,'Bubbery',2),
(20,'Bubbery',3),
(21,'Gap',1),
(22,'Gap',2),
(23,'Gap',3);

/*Table structure for table `middle` */

DROP TABLE IF EXISTS `middle`;

CREATE TABLE `middle` (
  `id_pro` int(11) NOT NULL,
  `id_cate` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_pro`),
  KEY `id_cate` (`id_cate`),
  CONSTRAINT `middle_ibfk_1` FOREIGN KEY (`id_pro`) REFERENCES `product` (`ProductID`),
  CONSTRAINT `middle_ibfk_2` FOREIGN KEY (`id_cate`) REFERENCES `category` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `middle` */

/*Table structure for table `picture` */

DROP TABLE IF EXISTS `picture`;

CREATE TABLE `picture` (
  `PictureID` int(11) NOT NULL AUTO_INCREMENT,
  `PictureType` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`PictureID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `picture` */

/*Table structure for table `product` */

DROP TABLE IF EXISTS `product`;

CREATE TABLE `product` (
  `Idcategory` int(11) DEFAULT NULL,
  `ProductID` int(11) NOT NULL AUTO_INCREMENT,
  `ProductName` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PictureID` int(11) DEFAULT NULL,
  `Size` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Color` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Material` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ListPrice` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Origin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Status` bit(1) DEFAULT NULL,
  PRIMARY KEY (`ProductID`),
  KEY `PictureID` (`PictureID`),
  KEY `Idcategory` (`Idcategory`),
  CONSTRAINT `product_ibfk_6` FOREIGN KEY (`PictureID`) REFERENCES `picture` (`PictureID`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `product` */

insert  into `product`(`Idcategory`,`ProductID`,`ProductName`,`PictureID`,`Size`,`Color`,`Material`,`Description`,`ListPrice`,`Origin`,`Status`) values 
(NULL,1,'Heraldic',NULL,'52','Black','silk','Feeling regal today? Showcasing the iconic Heraldic print and DG King embroidered logo','1938$','USA',NULL),
(NULL,2,'Distressed',NULL,'44','Black','cotton','This season, Dolce & Gabbana explore the concept of luxe sportswear bringing a contemporary update to their much-loved ','703$','Italia',NULL),
(NULL,3,'Carnation Dressed',NULL,'38','Black','polyamade','Multicolour silk-cotton blend carnation print midi dress from Dolce & Gabbana featuring a round neck, three-quarter length','1871$','Germany',NULL),
(NULL,4,'Mainyver Tops',NULL,'39','White','cotton','Available in a range of styles to suit all','963$','USA',NULL),
(NULL,5,'Saffiano',NULL,'30','Pink','Leather','Chiefs in leather craftsmanship, Prada\'s acclaimed Saffiano leather is consistently','833$','France',NULL),
(NULL,6,'Beige',NULL,'36','Brown','Jersy','Relaxed-fit cotton-blend jersey lounge pants featuring logo pattern in beige and brown. Mid-rise','1500$','Germany',NULL),
(NULL,7,'BlackGG',NULL,'37','Black','Cotton','Short sleeve cotton jersey t-shirt in black. Rib knit crewneck collar','480$','Italia',NULL),
(NULL,8,'Christian',NULL,'39','Black','Leather','High-top buffed calfskin sneakers in black. Round toe. Tonal lace-up closure.','1350$','France',NULL),
(NULL,9,'Tarpered',NULL,'35','Blue','Jeans','Jeans by Calvin Klein Jeans It\'s all the in jeans Mid-blue wash Regular rise Zip fly Functional','680$','Italia',NULL),
(NULL,10,'PaddedJacket',NULL,'37','Red','Cotton','Jacket by Calvin Klein Jeans Add it to your everyday line-up Padded for comfort Detachable','720$','USA',NULL),
(NULL,11,'IronWhite',NULL,'36','White','Cotton','Shirt by Calvin Klein It\'s a classic Spread collar Button placket Small logo detail to chest Skinny fit Cut very closely to the body Exclusive to ASOS','300$','VietNam',NULL),
(NULL,12,'Grainy',NULL,'15.25','Grey','Leather','Hugo Boss Crossbody. Barcode: 4021402639977','567$','Italia',NULL),
(NULL,13,'Sunglasses',NULL,'55','Grey','Nilon','These authentic Boss by Hugo Boss Boss 1029/F/S Asian Fit 807/T4 sunglasses have Black Titanium frames and are available online for a discounted price at SmartBuyGlasses','300$','France',NULL),
(NULL,14,'BurbberyKid',NULL,'12','Brown','Cotton','A cotton shirt dress with contrasting panels in our Vintage check and Icon stripe.','240$','Russia',NULL),
(NULL,15,'BomberJacket',NULL,'8','Blue','Lurex','Dark blue waterproof nylon satin. Yellow trims along the sleeves and pockets','1004$','Germany',NULL),
(NULL,16,'Campagnolo',NULL,'14','Red','Cotton','Kids ́ clothing Pants Cmp Salopette 14 Years. Length: Long, Color: Red, Features: Thermal, Features: Waterproof','219$','USA',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
