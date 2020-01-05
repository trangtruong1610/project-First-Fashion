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
  `AccountID` INT(11) NOT NULL,
  `Username` VARCHAR(100) COLLATE utf8_unicode_ci NOT NULL,
  `Password` VARCHAR(100) COLLATE utf8_unicode_ci NOT NULL,
  `EmployeeName` VARCHAR(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` VARCHAR(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Phone` VARCHAR(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `AccTypeID` INT(11) DEFAULT NULL,
  `Status` BIT(1) DEFAULT NULL,
  PRIMARY KEY (`AccountID`),
  KEY `AccTypeID` (`AccTypeID`),
  CONSTRAINT `account_ibfk_1` FOREIGN KEY (`AccTypeID`) REFERENCES `accounttype` (`AccTypeID`)
) ENGINE=INNODB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `account` */

INSERT  INTO `account`(`AccountID`,`Username`,`Password`,`EmployeeName`,`Email`,`Phone`,`AccTypeID`,`Status`) VALUES 
(1,'circle1','123456','Trang Truong','Trangtruong@gmail.com','09000909',1,NULL),
(2,'circle2','123456','Minh An','Anminh@gmail.com','01253206',2,NULL);

/*Table structure for table `accounttype` */

DROP TABLE IF EXISTS `accounttype`;

CREATE TABLE `accounttype` (
  `AccTypeID` INT(11) NOT NULL,
  `AccountType` VARCHAR(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` BIT(1) DEFAULT NULL,
  PRIMARY KEY (`AccTypeID`)
) ENGINE=INNODB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `accounttype` */

INSERT  INTO `accounttype`(`AccTypeID`,`AccountType`,`status`) VALUES 
(1,'admin',NULL),
(2,'Superadmin',NULL);

/*Table structure for table `category` */

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `NameCate` TEXT CHARACTER SET latin1 NOT NULL,
  `parent_id` INT(11) DEFAULT NULL,
  `cate_type` VARCHAR(255),
  PRIMARY KEY (`id`),
  KEY `parent_id` (`parent_id`),
  CONSTRAINT `category_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `category` (`id`)
) ENGINE=INNODB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `category` */

INSERT  INTO `category`(`id`,`NameCate`,`parent_id`,`cate_type`) VALUES 
(1,'fashion',NULL,NULL),
(2,'accessories',NULL,NULL),
(3,'kid fashion',NULL,NULL),
(4,'men',1,NULL),
(5,'women',1,NULL),
(6,'men',2,NULL),
(7,'women',2,NULL),
(8,'children',2,NULL),
(9,'Gucci',1,'brand'),
(10,'Gucci',2,'brand'),
(11,'Calvin Klein',1,'brand'),
(12,'Calvin Klein',2,'brand'),
(13,'Hugo Boss',1,'brand'),
(14,'Hugo Boss',2,'brand'),
(15,'Louis Vuitton',1,'brand'),
(16,'Louis Vuitton',2,'brand'),
(17,'Bubbery',1,'brand'),
(18,'Bubbery',2,'brand'),
(19,'Bubbery',3,'brand'),
(20,'Gap',1,'brand'),
(21,'Gap',2,'brand'),
(22,'Gap',3,'brand');
`cate_type`
/*Table structure for table `file` */

DROP TABLE IF EXISTS `file`;

CREATE TABLE `file` (
  `product_id` INT(11) DEFAULT NULL,
  `File_id` INT(11) NOT NULL AUTO_INCREMENT,
  `File_Type` VARCHAR(255) COLLATE utf8_unicode_ci NOT NULL,
  `Link` VARCHAR(255) COLLATE utf8_unicode_ci NOT NULL,
  `File_role` VARCHAR(255) COLLATE utf8_unicode_ci NOT NULL,
  `Status` BOOL NOT NULL,
  PRIMARY KEY (`File_id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `file_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`ProductID`)
) ENGINE=INNODB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `file` */

INSERT  INTO `file`(`product_id`,`File_id`,`File_Type`,`Link`,`File_role`,`Status`) VALUES 
(1,1,'image','https://www.imageupload.net/upload-image/2019/12/30/14090581_22480959_1000.jpg','avatar',1),
(1,2,'image','https://www.imageupload.net/upload-image/2019/12/30/14090581_22480968_1000.jpg','demo',1),
(1,3,'image','https://www.imageupload.net/upload-image/2019/12/30/14090581_22480970_1000.jpg','demo',1),
(1,4,'image','https://www.imageupload.net/upload-image/2019/12/30/14090581_22480974_1000.jpg','demo',1),
(2,5,'image','https://www.imageupload.net/upload-image/2019/12/30/14229690_20141914_1000.jpg','avatar',1),
(2,6,'image','https://www.imageupload.net/upload-image/2019/12/30/14229690_20141924_1000.jpg','demo',1),
(2,7,'image','https://www.imageupload.net/upload-image/2019/12/30/14229690_20141929_1000.jpg','demo',1),
(2,8,'image','https://www.imageupload.net/upload-image/2019/12/30/14229690_20141939_1000.jpg','demo',1),
(3,9,'image','https://www.imageupload.net/upload-image/2019/12/30/14516838_23027721_1000.png','avatar',1),
(3,10,'image','https://www.imageupload.net/upload-image/2019/12/30/14516838_23027722_1000.png','demo',1),
(3,11,'image','https://www.imageupload.net/upload-image/2019/12/30/14516838_23027724_1000.png','demo',1),
(3,12,'image','https://www.imageupload.net/upload-image/2019/12/30/14516838_23027725_1000.png','demo',1),
(4,13,'image','https://www.imageupload.net/upload-image/2019/12/30/12606171_12109880_1000-1.png','avatar',1),
(4,14,'image','https://www.imageupload.net/upload-image/2019/12/30/12606171_12109880_1000.png','demo',1),
(4,15,'image','https://www.imageupload.net/upload-image/2019/12/30/12606171_12109882_1000.png','demo',1),
(4,16,'image','https://www.imageupload.net/upload-image/2019/12/30/12606171_12109883_1000.png','demo',1),
(5,17,'image','https://www.imageupload.net/upload-image/2019/12/30/13611915_22000685_1000.jpg','demo',1),
(5,18,'image','https://www.imageupload.net/upload-image/2019/12/30/13611915_22000686_1000.png','avatar',1),
(5,19,'image','https://www.imageupload.net/upload-image/2019/12/30/13611915_22000688_1000.jpg','demo',1),
(5,20,'image','https://www.imageupload.net/upload-image/2019/12/30/13611915_22000689_1000.jpg','demo',1),
(6,21,'image','https://www.imageupload.net/upload-image/2019/12/30/192451F086008_2.png','avatar',1),
(6,22,'image','https://www.imageupload.net/upload-image/2019/12/30/192451F086008_3.png','demo',1),
(6,23,'image','https://www.imageupload.net/upload-image/2019/12/30/192451F086008_4.png','demo',1),
(6,24,'image','https://www.imageupload.net/upload-image/2019/12/30/192451F086008_5.png','demo',1),
(7,25,'image','https://www.imageupload.net/upload-image/2019/12/30/192278M213011_1.png','demo',1),
(7,26,'image','https://www.imageupload.net/upload-image/2019/12/30/192278M213011_2.png','demo',1),
(7,27,'image','https://www.imageupload.net/upload-image/2019/12/31/519QX1rMZFL._UX679_.jpg','avatar',1),
(7,28,'image','https://www.imageupload.net/upload-image/2019/12/30/192278M213011_4.png','demo',1),
(8,29,'image','https://www.imageupload.net/upload-image/2019/12/30/192813M237017_1.png','avatar',1),
(8,30,'image','https://www.imageupload.net/upload-image/2019/12/30/192813M237017_2.png','demo',1),
(8,31,'image','https://www.imageupload.net/upload-image/2019/12/30/192813M237017_3.png','demo',1),
(8,32,'image','https://www.imageupload.net/upload-image/2019/12/30/192813M237017_4.png','demo',1),
(9,33,'image','https://www.imageupload.net/upload-image/2019/12/30/14229690_20141924_10004ef114e7778b2569.jpg','avatar',1),
(9,34,'image','https://www.imageupload.net/upload-image/2019/12/30/14231367_20122561_1000.jpg','demo',1),
(9,35,'image','https://www.imageupload.net/upload-image/2019/12/30/14231367_20122568_1000.jpg','demo',1),
(9,36,'image','https://www.imageupload.net/upload-image/2019/12/30/14231367_20122576_1000.jpg','demo',1),
(10,37,'image','https://www.imageupload.net/upload-image/2019/12/30/12870974-1-racingred.jpg','avatar',1),
(10,38,'image','https://www.imageupload.net/upload-image/2019/12/30/12870974-2.jpg','demo',1),
(10,39,'image','https://www.imageupload.net/upload-image/2019/12/30/12870974-3.jpg','demo',1),
(10,40,'image','https://www.imageupload.net/upload-image/2019/12/30/12870974-4.jpg','demo',1),
(11,41,'image','https://www.imageupload.net/upload-image/2019/12/30/11055311-1-dfwhite.jpg','avatar',1),
(11,42,'image','https://www.imageupload.net/upload-image/2019/12/30/11055311-2.jpg','demo',1),
(11,43,'image','https://www.imageupload.net/upload-image/2019/12/30/11055311-3.jpg','demo',1),
(11,44,'image','https://www.imageupload.net/upload-image/2019/12/30/11055311-4.jpg','demo',1),
(12,45,'image','https://www.imageupload.net/upload-image/2019/12/30/hugo-boss-men_s-medium-gray-crosstown-grainy-briefcase-50390384_030.jpg','avatar',1),
(12,46,'image','https://www.imageupload.net/upload-image/2019/12/30/hugo-boss-men_s-medium-gray-crosstown-grainy-briefcase-50390384_030_3.jpg','demo',1),
(12,47,'image','https://www.imageupload.net/upload-image/2019/12/30/hugo-boss-men_s-medium-gray-crosstown-grainy-briefcase-50390384_030_6.jpg','demo',1),
(12,48,'image','https://www.imageupload.net/upload-image/2019/12/30/tai-xung.jpg','demo',1),
(13,49,'image','https://www.imageupload.net/upload-image/2019/12/30/24122017153203892_BOSS0806FSQJFHD62-15-1454400Kcopy.jpg','avatar',1),
(13,50,'image','https://www.imageupload.net/upload-image/2019/12/30/hugo-boss-round-frame-glasses.jpg','demo',1),
(14,51,'image','https://www.imageupload.net/upload-image/2019/12/30/14032866_18392426_1000.png','avatar',1),
(14,52,'image','https://www.imageupload.net/upload-image/2019/12/30/14032866_18392437_1000.png','demo',1),
(14,53,'image','https://www.imageupload.net/upload-image/2019/12/30/14032866_18392444_1000.jpg','demo',1),
(15,54,'image','https://www.imageupload.net/upload-image/2019/12/30/b9b76549-7824-4424-8d21-f260aa1e1df2.jpg','avatar',1),
(15,55,'image','https://www.imageupload.net/upload-image/2019/12/30/jackets-gucci.jpg','demo',1),
(16,56,'image','https://www.imageupload.net/upload-image/2019/12/30/71pZh1GFML._UL1500_.jpg','demo',1),
(16,57,'image','https://www.imageupload.net/upload-image/2019/12/30/cmp-salopette.jpg','avatar',1);

/*Table structure for table `middle` */

DROP TABLE IF EXISTS `middle`;

CREATE TABLE `middle` (
  `id_pro` INT(11) NOT NULL,
  `id_cate` INT(11) DEFAULT NULL,
  PRIMARY KEY (`id_pro`),
  KEY `id_cate` (`id_cate`),
  CONSTRAINT `middle_ibfk_1` FOREIGN KEY (`id_pro`) REFERENCES `product` (`ProductID`),
  CONSTRAINT `middle_ibfk_2` FOREIGN KEY (`id_cate`) REFERENCES `category` (`id`)
) ENGINE=INNODB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `middle` */

/*Table structure for table `product` */

DROP TABLE IF EXISTS `product`;

CREATE TABLE `product` (
  `Idcategory` INT(11) DEFAULT NULL,
  `ProductID` INT(11) NOT NULL AUTO_INCREMENT,
  `ProductName` VARCHAR(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Size` VARCHAR(255) COLLATE utf8_unicode_ci NOT NULL,
  `Color` VARCHAR(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Material` VARCHAR(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Description` VARCHAR(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ListPrice` VARCHAR(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Origin` VARCHAR(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Status` BIT(1) DEFAULT NULL,
  PRIMARY KEY (`ProductID`),
  KEY `Idcategory` (`Idcategory`)
) ENGINE=INNODB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `product` */

INSERT  INTO `product`(`Idcategory`,`ProductID`,`ProductName`,`Size`,`Color`,`Material`,`Description`,`ListPrice`,`Origin`,`Status`) VALUES 
(NULL,1,'Heraldic','52','Black','silk','Feeling regal today? Showcasing the iconic Heraldic print and DG King embroidered logo','1938$','USA',1),
(NULL,2,'Distressed','44','Black','cotton','This season, Dolce & Gabbana explore the concept of luxe sportswear bringing a contemporary update to their much-loved ','703$','Italia',1),
(NULL,3,'Carnation Dressed','38','Black','polyamade','Multicolour silk-cotton blend carnation print midi dress from Dolce & Gabbana featuring a round neck, three-quarter length','1871$','Germany',1),
(NULL,4,'Mainyver Tops','39','White','cotton','Available in a range of styles to suit all','963$','USA',1),
(NULL,5,'Saffiano','30','Pink','Leather','Chiefs in leather craftsmanship, Prada\'s acclaimed Saffiano leather is consistently','833$','France',1),
(NULL,6,'Beige','36','Brown','Jersy','Relaxed-fit cotton-blend jersey lounge pants featuring logo pattern in beige and brown. Mid-rise','1500$','Germany',1),
(NULL,7,'BlackGG','37','Black','Cotton','Short sleeve cotton jersey t-shirt in black. Rib knit crewneck collar','480$','Italia',1),
(NULL,8,'Christian','39','Black','Leather','High-top buffed calfskin sneakers in black. Round toe. Tonal lace-up closure.','1350$','France',1),
(NULL,9,'Tarpered','35','Blue','Jeans','Jeans by Calvin Klein Jeans It\'s all the in jeans Mid-blue wash Regular rise Zip fly Functional','680$','Italia',1),
(NULL,10,'PaddedJacket','37','Red','Cotton','Jacket by Calvin Klein Jeans Dashboard it to your everyday line-up Padded for comfort Detachable','720$','USA',1),
(NULL,11,'IronWhite','36','White','Cotton','Shirt by Calvin Klein It\'s a classic Spread collar Button placket Small logo detail to chest Skinny fit Cut very closely to the body Exclusive to ASOS','300$','VietNam',1),
(NULL,12,'Grainy','15.25','Grey','Leather','Hugo Boss Crossbody. Barcode: 4021402639977','567$','Italia',1),
(NULL,13,'Sunglasses','55','Grey','Nilon','These authentic Boss by Hugo Boss Boss 1029/F/S Asian Fit 807/T4 sunglasses have Black Titanium frames and are available online for a discounted price at SmartBuyGlasses','300$','France',1),
(NULL,14,'BurbberyKid','12','Brown','Cotton','A cotton shirt dress with contrasting panels in our Vintage check and Icon stripe.','240$','Russia',1),
(NULL,15,'BomberJacket','8','Blue','Lurex','Dark blue waterproof nylon satin. Yellow trims along the sleeves and pockets','1004$','Germany',1),
(NULL,16,'Campagnolo','14','Red','Cotton','Kids ́ clothing Pants Cmp Salopette 14 Years. Length: Long, Color: Red, Features: Thermal, Features: Waterproof','219$','USA',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
