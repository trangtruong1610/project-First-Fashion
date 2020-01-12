/*
SQLyog Professional v12.5.1 (64 bit)
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
  `id` int(11) NOT NULL,
  `Username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `EmployeeName` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `AccTypeID` int(11) DEFAULT NULL,
  `Status` bit(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `AccTypeID` (`AccTypeID`),
  CONSTRAINT `account_ibfk_1` FOREIGN KEY (`AccTypeID`) REFERENCES `accounttype` (`AccTypeID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `account` */

insert  into `account`(`id`,`Username`,`Password`,`EmployeeName`,`Email`,`Phone`,`AccTypeID`,`Status`) values 
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
  `CategoryName` text CHARACTER SET latin1 NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `CategoryType` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `parent_id` (`parent_id`),
  CONSTRAINT `category_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `category` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `category` */

insert  into `category`(`id`,`CategoryName`,`parent_id`,`CategoryType`) values 
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
(22,'Gap',3,'brand'),
(23,'Old Navy',1,'brand'),
(24,'Old Navy',2,'brand'),
(25,'Old Navy',3,'brand'),
(26,'Cartier',2,'brand'),
(27,'Adiddas',1,'brand'),
(28,'Adiddas',2,'brand'),
(29,'Adiddas',3,'brand'),
(30,'Dolce & Gabana',1,'brand'),
(31,'Dolce & Gabana',2,'brand'),
(32,'Prada',2,'brand'),
(33,'Jacket',NULL,NULL),
(34,'Tops',NULL,NULL),
(35,'bottoms',NULL,NULL),
(36,'dress',NULL,NULL);

/*Table structure for table `file` */

DROP TABLE IF EXISTS `file`;

CREATE TABLE `file` (
  `product_id` int(11) DEFAULT NULL,
  `File_id` int(11) NOT NULL AUTO_INCREMENT,
  `File_Type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Link` varchar(355) COLLATE utf8_unicode_ci NOT NULL,
  `File_role` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`File_id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `file_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=125 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `file` */

insert  into `file`(`product_id`,`File_id`,`File_Type`,`Link`,`File_role`,`status`) values 
(1,2,'image','https://www.imageupload.net/upload-image/2019/12/30/14090581_22480968_1000.jpg','p_demo','1'),
(1,3,'image','https://www.imageupload.net/upload-image/2019/12/30/14090581_22480970_1000.jpg','p_demo','1'),
(1,4,'image','https://www.imageupload.net/upload-image/2019/12/30/14090581_22480974_1000.jpg','p_demo','1'),
(2,6,'image','https://www.imageupload.net/upload-image/2019/12/30/14229690_20141924_1000.jpg','p_demo','1'),
(2,7,'image','https://www.imageupload.net/upload-image/2019/12/30/14229690_20141929_1000.jpg','p_demo','1'),
(2,8,'image','https://www.imageupload.net/upload-image/2019/12/30/14229690_20141939_1000.jpg','p_demo','1'),
(3,10,'image','https://www.imageupload.net/upload-image/2019/12/30/14516838_23027722_1000.png','p_demo','1'),
(3,11,'image','https://www.imageupload.net/upload-image/2019/12/30/14516838_23027724_1000.png','p_demo','1'),
(3,12,'image','https://www.imageupload.net/upload-image/2019/12/30/14516838_23027725_1000.png','p_demo','1'),
(4,14,'image','https://www.imageupload.net/upload-image/2019/12/30/12606171_12109880_1000.png','p_demo','1'),
(4,15,'image','https://www.imageupload.net/upload-image/2019/12/30/12606171_12109882_1000.png','p_demo','1'),
(4,16,'image','https://www.imageupload.net/upload-image/2019/12/30/12606171_12109883_1000.png','p_demo','1'),
(5,18,'image','https://www.imageupload.net/upload-image/2019/12/30/13611915_22000686_1000.png','p_demo','1'),
(5,19,'image','https://www.imageupload.net/upload-image/2019/12/30/13611915_22000688_1000.jpg','p_demo','1'),
(5,20,'image','https://www.imageupload.net/upload-image/2019/12/30/13611915_22000689_1000.jpg','p_demo','1'),
(6,21,'image','https://www.imageupload.net/upload-image/2019/12/30/192451F086008_2.png','p_demo','1'),
(6,22,'image','https://www.imageupload.net/upload-image/2019/12/30/192451F086008_3.png','p_demo','1'),
(6,23,'image','https://www.imageupload.net/upload-image/2019/12/30/192451F086008_4.png','p_demo','1'),
(6,24,'image','https://www.imageupload.net/upload-image/2019/12/30/192451F086008_5.png','p_demo','1'),
(7,25,'image','https://www.imageupload.net/upload-image/2019/12/30/192278M213011_1.png','p_demo','1'),
(7,26,'image','https://www.imageupload.net/upload-image/2019/12/30/192278M213011_2.png','p_demo','1'),
(7,27,'image','https://www.imageupload.net/upload-image/2019/12/30/192278M213011_3.png','p_demo','1'),
(7,28,'image','https://www.imageupload.net/upload-image/2019/12/30/192278M213011_4.png','p_demo','1'),
(8,29,'image','https://www.imageupload.net/upload-image/2019/12/30/192813M237017_1.png','p_demo','1'),
(8,30,'image','https://www.imageupload.net/upload-image/2019/12/30/192813M237017_2.png','p_demo','1'),
(8,31,'image','https://www.imageupload.net/upload-image/2019/12/30/192813M237017_3.png','p_demo','1'),
(8,32,'image','https://www.imageupload.net/upload-image/2019/12/30/192813M237017_4.png','p_demo','1'),
(9,34,'image','https://www.imageupload.net/upload-image/2019/12/30/14231367_20122561_1000.jpg','p_demo','1'),
(9,35,'image','https://www.imageupload.net/upload-image/2019/12/30/14231367_20122568_1000.jpg','p_demo','1'),
(9,36,'image','https://www.imageupload.net/upload-image/2019/12/30/14231367_20122576_1000.jpg','p_demo','1'),
(10,38,'image','https://www.imageupload.net/upload-image/2019/12/30/12870974-2.jpg','p_demo','1'),
(10,39,'image','https://www.imageupload.net/upload-image/2019/12/30/12870974-3.jpg','p_demo','1'),
(10,40,'image','https://www.imageupload.net/upload-image/2019/12/30/12870974-4.jpg','p_demo','1'),
(11,42,'image','https://www.imageupload.net/upload-image/2019/12/30/11055311-2.jpg','p_demo','1'),
(11,43,'image','https://www.imageupload.net/upload-image/2019/12/30/11055311-3.jpg','p_demo','1'),
(11,44,'image','https://www.imageupload.net/upload-image/2019/12/30/11055311-4.jpg','p_demo','1'),
(12,46,'image','https://www.imageupload.net/upload-image/2019/12/30/hugo-boss-men_s-medium-gray-crosstown-grainy-briefcase-50390384_030_3.jpg','p_demo','1'),
(12,47,'image','https://www.imageupload.net/upload-image/2019/12/30/hugo-boss-men_s-medium-gray-crosstown-grainy-briefcase-50390384_030_6.jpg','p_demo','1'),
(12,48,'image','https://www.imageupload.net/upload-image/2019/12/30/tai-xung.jpg','p_demo','1'),
(13,50,'image','https://www.imageupload.net/upload-image/2019/12/31/ezgif.com-webp-to-jpg589d5ddfd67241b7.jpg','p_demo','1'),
(14,52,'image','https://www.imageupload.net/upload-image/2019/12/30/14032866_18392437_1000.png','p_demo','1'),
(14,53,'image','https://www.imageupload.net/upload-image/2019/12/30/14032866_18392444_1000.jpg','p_demo','1'),
(15,54,'image','https://www.imageupload.net/upload-image/2019/12/30/b9b76549-7824-4424-8d21-f260aa1e1df2.jpg','p_demo','1'),
(16,56,'image','https://www.imageupload.net/upload-image/2019/12/30/71pZh1GFML._UL1500_.jpg','p_demo','1'),
(16,57,'image','https://www.imageupload.net/upload-image/2019/12/30/cmp-salopette.jpg','p_demo','1'),
(17,59,'image','https://www.imageupload.net/upload-image/2019/12/31/acne-studios-ellison-face-tshirt-paprika-red-face-patch-at-breast-solid-color-design--4709-500x500.jpg','p_demo','1'),
(17,60,'image','https://www.imageupload.net/upload-image/2019/12/31/acne-studios-ellison-face-tshirt-paprika-red-face-patch-at-breast-solid-color-design--4710-500x500.jpg','p_demo','1'),
(17,61,'image','https://www.imageupload.net/upload-image/2019/12/31/acne-studios-ellison-face-tshirt-paprika-red-face-patch-at-breast-solid-color-design--4713-500x500.jpg','p_demo','1'),
(18,63,'image','https://www.imageupload.net/upload-image/2019/12/31/13613105-2.jpg','p_demo','1'),
(18,64,'image','https://www.imageupload.net/upload-image/2019/12/31/13613105-3.jpg','p_demo','1'),
(19,66,'image','https://www.imageupload.net/upload-image/2019/12/31/201418M175002_2.jpg','p_demo','1'),
(19,67,'image','https://www.imageupload.net/upload-image/2019/12/31/201418M175002_3.jpg','p_demo','1'),
(19,68,'image','https://www.imageupload.net/upload-image/2019/12/31/201418M175002_4.jpg','p_demo','1'),
(20,69,'image','https://www.imageupload.net/upload-image/2019/12/31/adidas-design-2-move-climacool-3-stripes-knit-shorts-regular-1.jpg','p_demo','1'),
(20,71,'image','https://www.imageupload.net/upload-image/2019/12/31/adidas-design-2-move-climacool-shorts-tall.jpg','p_demo','1'),
(20,72,'image','https://www.imageupload.net/upload-image/2019/12/31/tai-xung.jpg','p_demo','1'),
(21,74,'image','https://www.imageupload.net/upload-image/2019/12/31/13903653_17736916_480.jpg','p_demo','1'),
(21,75,'image','https://www.imageupload.net/upload-image/2019/12/31/miki-house-logo-hi-top-sneakers.jpg','p_demo','1'),
(21,76,'image','https://www.imageupload.net/upload-image/2019/12/31/miki-house-trainers-logo-touch-strap-sneakers.jpg','p_demo','1'),
(22,78,'image','https://www.imageupload.net/upload-image/2019/12/31/805096.jpg','p_demo','1'),
(22,79,'image','https://www.imageupload.net/upload-image/2019/12/31/barts-kids-fleece-headband-fuchsia-aw18.jpg','p_demo','1'),
(23,81,'image','https://www.imageupload.net/upload-image/2019/12/31/black-gold-octagonal-glasses_0-3.jpg','p_demo','1'),
(23,82,'image','https://www.imageupload.net/upload-image/2019/12/31/black-gold-octagonal-glasses_1-5.jpg','p_demo','1'),
(24,84,'image','https://www.imageupload.net/upload-image/2019/12/31/BLOW-WB30_V1.jpg','p_demo','1'),
(25,85,'image','https://www.imageupload.net/upload-image/2019/12/31/5f2e6a6d52544b118388aa4f010ff35a_9366.jpg','p_demo','1'),
(25,87,'image','https://www.imageupload.net/upload-image/2019/12/31/hervia.com-adidas-x-pharrell-williams-solar-hu-glide-greyscale-ef2378-tonal-white-1563382535Hu-White-0002-Layer-1.jpg','p_demo','1'),
(26,88,'image','https://www.imageupload.net/upload-image/2019/12/31/008_32f31535-db58-4f41-aa3f-2ac075f2ea84.jpg','p_demo','1'),
(26,90,'image','https://www.imageupload.net/upload-image/2019/12/31/66448100.jpg','p_demo','1'),
(27,92,'image','https://www.imageupload.net/upload-image/2019/12/31/10232851-1-andoverheather.jpg','p_demo','1'),
(27,93,'image','https://www.imageupload.net/upload-image/2019/12/31/Polo-Ralph-Lauren-player-logo-slim-fit-oxford-shirt-buttondown-pocket-in-grey-Slate-Mens-Shirts-mg9nBFdw_1.jpg','p_demo','1'),
(28,95,'image','https://www.imageupload.net/upload-image/2019/12/31/12846552b_xxl_v1572924597342.jpg','p_demo','1'),
(29,96,'image','https://www.imageupload.net/upload-image/2019/12/31/71nB87oqU4L._UL1500_.jpg','p_demo','1'),
(30,99,'image','https://www.imageupload.net/upload-image/2019/12/31/9336383-3.jpg','p_demo','1'),
(30,100,'image','https://www.imageupload.net/upload-image/2019/12/31/9336383-4.jpg','p_demo','1'),
(31,120,'image','https://bit.ly/2NgWu3Y',NULL,NULL),
(31,121,'image','https://bit.ly/39ZeoBV',NULL,NULL),
(31,122,'image','https://bit.ly/2FHRZet',NULL,NULL),
(31,123,'image','https://bit.ly/2R71bhJ',NULL,NULL);

/*Table structure for table `middle` */

DROP TABLE IF EXISTS `middle`;

CREATE TABLE `middle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `middle_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  CONSTRAINT `middle_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `middle` */

insert  into `middle`(`id`,`product_id`,`category_id`) values 
(1,1,1),
(2,1,30),
(3,2,1),
(4,2,31),
(5,3,1),
(6,3,31),
(7,4,1),
(8,4,12),
(9,5,2),
(10,5,32),
(11,6,1),
(12,6,10),
(13,1,34),
(14,2,35),
(15,3,36),
(16,4,36),
(17,6,35),
(18,7,1),
(19,7,4),
(20,7,34),
(21,7,9),
(22,8,2),
(23,8,28),
(24,9,1),
(25,9,5),
(26,9,12),
(27,9,35),
(28,10,1),
(29,10,5),
(30,10,11),
(31,10,33),
(32,11,1),
(33,11,4),
(34,11,11),
(35,11,34),
(36,12,2),
(37,12,14),
(38,13,2),
(39,13,14),
(40,14,3),
(41,14,19),
(42,14,34),
(43,15,3),
(44,15,1),
(45,16,3),
(46,16,29),
(47,17,1),
(48,17,5),
(49,17,13),
(50,17,34),
(51,18,1),
(52,18,5),
(53,18,11),
(54,18,33),
(55,19,1),
(56,19,4),
(57,19,15),
(58,19,33),
(59,20,1),
(60,20,27),
(61,20,35),
(62,21,3),
(63,21,19),
(64,22,3),
(65,22,2),
(66,22,19),
(67,23,2),
(68,23,10),
(69,24,2),
(70,24,5),
(71,24,21),
(72,25,2),
(73,25,28),
(74,26,1),
(75,26,4),
(76,26,20),
(77,26,34),
(78,27,1),
(79,27,4),
(80,27,11),
(81,27,34),
(82,28,2),
(83,28,26),
(84,29,2),
(85,29,26),
(86,30,1),
(87,30,4),
(88,30,36),
(89,30,16),
(90,31,26),
(91,31,2);

/*Table structure for table `product` */

DROP TABLE IF EXISTS `product`;

CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Size` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Color` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Material` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Price` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Origin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `File` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Status` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Trending` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `product` */

insert  into `product`(`id`,`Name`,`Size`,`Color`,`Material`,`Description`,`Price`,`Origin`,`File`,`Status`,`Trending`) values 
(1,'Heraldic','52','Black','silk','Feeling regal today? Showcasing the iconic Heraldic print and DG King embroidered logo','1938$','USA','https://www.imageupload.net/upload-image/2019/12/30/14090581_22480959_1000.jpg','1',0),
(2,'Distressed','44','Black','cotton','This season, Dolce & Gabbana explore the concept of luxe sportswear bringing a contemporary update to their much-loved ','703$','Italia','https://www.imageupload.net/upload-image/2019/12/30/14229690_20141914_1000.jpg','1',0),
(3,'Carnation Dressed','38','Black','polyamade','Multicolour silk-cotton blend carnation print midi dress from Dolce & Gabbana featuring a round neck, three-quarter length','1871$','Germany','https://www.imageupload.net/upload-image/2019/12/30/14516838_23027721_1000.png','1',0),
(4,'Mainyver Tops','39','White','cotton','Available in a range of styles to suit all','963$','USA','https://www.imageupload.net/upload-image/2019/12/30/12606171_12109880_1000-1.png','1',0),
(5,'Saffiano','30','Pink','Leather','Chiefs in leather craftsmanship, Prada\'s acclaimed Saffiano leather is consistently','833$','France','https://www.imageupload.net/upload-image/2019/12/30/13611915_22000685_1000.jpg','1',0),
(6,'Beige','36','Brown','Jersy','Relaxed-fit cotton-blend jersey lounge pants featuring logo pattern in beige and brown. Mid-rise','1500$','Germany','https://www.imageupload.net/upload-image/2019/12/31/gucci-beige-Beige-GG-Logo-Lounge-Pants.jpg','1',0),
(7,'BlackGG','37','Black','Cotton','Short sleeve cotton jersey t-shirt in black. Rib knit crewneck collar','480$','Italia','https://www.imageupload.net/upload-image/2019/12/31/BW70603Z0Y_F_GIV-001.fronte.jpg','1',0),
(8,'Christian','39','Black','Leather','High-top buffed calfskin sneakers in black. Round toe. Tonal lace-up closure.','1350$','France','https://www.imageupload.net/upload-image/2019/12/31/ezgif.com-webp-to-jpg.md.jpg','1',0),
(9,'Tarpered','35','Blue','Jeans','Jeans by Calvin Klein Jeans It\'s all the in jeans Mid-blue wash Regular rise Zip fly Functional','680$','Italia','https://www.imageupload.net/upload-image/2019/12/30/14229690_20141924_10004ef114e7778b2569.jpg','1',0),
(10,'PaddedJacket','37','Red','Cotton','Jacket by Calvin Klein Jeans Add it to your everyday line-up Padded for comfort Detachable','720$','USA','https://www.imageupload.net/upload-image/2019/12/30/12870974-1-racingred.jpg','1',0),
(11,'IronWhite','36','White','Cotton','Shirt by Calvin Klein It\'s a classic Spread collar Button placket Small logo detail to chest Skinny fit Cut very closely to the body Exclusive to ASOS','300$','VietNam','https://www.imageupload.net/upload-image/2019/12/30/11055311-1-dfwhite.jpg','1',0),
(12,'Grainy','15.25','Grey','Leather','Hugo Boss Crossbody. Barcode: 4021402639977','567$','Italia','https://www.imageupload.net/upload-image/2019/12/30/hugo-boss-men_s-medium-gray-crosstown-grainy-briefcase-50390384_030.jpg','1',0),
(13,'Sunglasses','55','Grey','Nilon','These authentic Boss by Hugo Boss Boss 1029/F/S Asian Fit 807/T4 sunglasses have Black Titanium frames and are available online for a discounted price at SmartBuyGlasses','300$','France','https://www.imageupload.net/upload-image/2019/12/31/716btntoj5L._UL1500_.jpg','1',0),
(14,'BurbberyKid','12','Brown','Cotton','A cotton shirt dress with contrasting panels in our Vintage check and Icon stripe.','240$','Russia','https://www.imageupload.net/upload-image/2019/12/30/14032866_18392426_1000.png','1',0),
(15,'BomberJacket','8','Blue','Lurex','Dark blue waterproof nylon satin. Yellow trims along the sleeves and pockets','1004$','Germany','https://www.imageupload.net/upload-image/2019/12/30/jackets-gucci.jpg','1',0),
(16,'Campagnolo','14','Red','Cotton','Kids ́ clothing Pants Cmp Salopette 14 Years. Length: Long, Color: Red, Features: Thermal, Features: Waterproof','219$','USA','https://www.imageupload.net/upload-image/2019/12/31/pmpl_29832_1.jpg','1',0),
(17,'Elision','35','Orange','Cotton','Fabric: Jersey - Face patch at breast - Solid-color design - T-shirt style - Waist-length style - Crew neck - Short sleeves - Shell: 100% cotton - Wash cold','233$','VietNam','https://www.imageupload.net/upload-image/2019/12/31/acne-studios-ellison-face-tshirt-paprika-red-face-patch-at-breast-solid-color-design-1069-500x500.jpg','1',1),
(18,'Twill Bomer','37','Purple','Cotton','Bomber jacket by Calvin Klein A fresh addition Baseball collar Zip opening Side pockets Fitted hem and cuffs Regular fit True to size','344$','USA','https://www.imageupload.net/upload-image/2019/12/31/13613105-1-navy.jpg','1',1),
(19,'Classic Teddy','XXL','Black','Cotton','Long sleeve wool-blend canvas bomber jacket in black. Rib knit stand collar, cuffs, and hem striped in white. Press-stud closure at front. Lambskin stripes in white at armscyes ...','564$','France','https://www.imageupload.net/upload-image/2019/12/31/201418M175002_1.jpg','1',1),
(20,'Climacool','M','Black','Sporty','Men ́s clothing Pants Adidas Design 2 Move Climacool 3 Stripes Knit Shorts Regular M. Length: Short, Recommended use: Multisport','122$','USA','https://www.imageupload.net/upload-image/2019/12/31/adidas-design-2-move-climacool-3-stripes-knit-shorts-regular.jpg','1',0),
(21,'Miki House','19','Red','Leather','Red faux leather My First shoes from MIKI HOUSE featuring a round toe, a touch strap fastening and a flat sole.','110$','USA','https://www.imageupload.net/upload-image/2019/12/31/13903653_17736912_1000.jpg','1',0),
(22,'Fleece','6','Pink','Cotton','The Barts Fleece Col Kids is made from soft fleece material and finished with a small Barts branding.','103$','Germany','https://www.imageupload.net/upload-image/2019/12/31/71VYxA3casL._UX679_.jpg','1',0),
(23,'Octagonal','56.18','Black','Metal','Octagonal metal-frame optical glasses in black and gold-tone. Transparent rubber nose pads. Logo plaque at hinges. Acetate temple tips featuring signature red and green stripes','286$','Italia','https://www.imageupload.net/upload-image/2019/12/31/9816402.jpg','1',0),
(24,'Frank Belt','M , S','Black','Leather','B-Low the Belt Frank Hip Belt in Black & Silver - Black. Size S (also in M). Genuine leather belt. Measures approx 1.5 H. Silver-tone metal buckle measures approx 2.75 H.','199$','Russia','https://www.imageupload.net/upload-image/2019/12/31/BLOW-WB30_V1-1.jpg','1',0),
(25,'Pharell','38, 39','White','Midsoles','Fabric: Knit\'Hu\' embroidery at vamp - Mesh trim - Intergrated cushioned tongues and pull tabs - Removable cushioned insoles - Boost foam midsoles and plastic side heel guards','399$','France','https://www.imageupload.net/upload-image/2019/12/31/Adidas_PU-9.jpg','1',0),
(26,'City Dragon','M','Black','Cotton','Short sleeve cotton jersey t-shirt in black. Distressing throughout. Rib knit crewneck collar. Multicolor graphic and text printed at front. Supplier color: Tar','544$','USA','https://www.imageupload.net/upload-image/2019/12/31/008_a41a66da-079c-431c-82c1-b7e13117e8d0.jpg','1',0),
(27,'Polo Ralhm','L , Xl','Grey','Cotton','Shirt by Polo Ralph Lauren A wardrobe staple Button-down collar Polo Ralph Lauren logo Button placket Slim fit A narrow cut that sits close to the body','127$','USA','https://www.imageupload.net/upload-image/2019/12/31/8994938-1-grey.jpg','1',1),
(28,'Cartier','45mm , 18.7mm','White , Black','Plantinum','Platinum case with a black alligator leather strap. Fixed bezel. Openwork dial with blue sword-shaped hands and index hour markers. Minute markers around the outer rim','1400$','Switzerland','https://www.imageupload.net/upload-image/2019/12/31/12846552_xxl_v1572924596501.jpg','1',1),
(29,'Rado','30mm','Black','Plantinum','Black high-tech ceramic case and bracelet. Fixed black ceramic bezel. Black dial with luminous gold-tone hands. Diamonds mark the 3, 6, 9 and 12 o\'clock positions. Dial Type: Analog. Luminescent hands','999$','Switzerland','https://www.imageupload.net/upload-image/2019/12/31/411H6t6lNgL._UY445_.jpg','1',0),
(30,'Asos','L','Blue','Cotton','Tall dress by ASOS DESIGN For that thing you have to go to One-shoulder design Tulle underskirt Zip with hook-and-eye fastening Regular cut Fits you just right','313$','France','https://www.imageupload.net/upload-image/2019/12/31/9336383-1-navy.jpg','1',1),
(31,'Panthère de Cartier','S, M, L','Yellow Gold, Pink Gold, White Gold','Rhodium Finish','Panthère de Cartier watch, mini model, quartz movement. Rhodium-finish 18K white gold case set with brilliant-cut diamonds. Rhodium-finish 18K white gold octagonal crown set with a brilliant-cut diamond. Silvered dial, blued-steel sword-shaped hands, sapp','3650$','United Kingdom','http://localhost:8080/CodeIgniter/index.php/../upload/trending8.png','1',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
