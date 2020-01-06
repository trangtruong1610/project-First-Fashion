# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.3.20-MariaDB)
# Database: first-fashion
# Generation Time: 2020-01-05 07:56:16 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table account
# ------------------------------------------------------------

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

LOCK TABLES `account` WRITE;
/*!40000 ALTER TABLE `account` DISABLE KEYS */;

INSERT INTO `account` (`id`, `Username`, `Password`, `EmployeeName`, `Email`, `Phone`, `AccTypeID`, `Status`)
VALUES
	(1,'circle1','123456','Trang Truong','Trangtruong@gmail.com','09000909',1,NULL),
	(2,'circle2','123456','Minh An','Anminh@gmail.com','01253206',2,NULL);

/*!40000 ALTER TABLE `account` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table accounttype
# ------------------------------------------------------------

DROP TABLE IF EXISTS `accounttype`;

CREATE TABLE `accounttype` (
  `AccTypeID` int(11) NOT NULL,
  `AccountType` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` bit(1) DEFAULT NULL,
  PRIMARY KEY (`AccTypeID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `accounttype` WRITE;
/*!40000 ALTER TABLE `accounttype` DISABLE KEYS */;

INSERT INTO `accounttype` (`AccTypeID`, `AccountType`, `status`)
VALUES
	(1,'admin',NULL),
	(2,'Superadmin',NULL);

/*!40000 ALTER TABLE `accounttype` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table category
# ------------------------------------------------------------

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `CatagoryName` text CHARACTER SET latin1 NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `parent_id` (`parent_id`),
  CONSTRAINT `category_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `category` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;

INSERT INTO `category` (`id`, `CatagoryName`, `parent_id`)
VALUES
	(1,'fashion',NULL),
	(2,'accessories',NULL),
	(3,'kid fashion',NULL),
	(4,'men',1),
	(5,'women',1),
	(6,'men',2),
	(7,'women',2),
	(8,'children',2),
	(9,'Gucci',1),
	(10,'Gucci',2),
	(11,'Calvin Klein',1),
	(12,'Calvin Klein',2),
	(13,'Hugo Boss',1),
	(14,'Hugo Boss',2),
	(15,'Louis Vuitton',1),
	(16,'Louis Vuitton',2),
	(17,'Bubbery',1),
	(18,'Bubbery',2),
	(19,'Bubbery',3),
	(20,'Gap',1),
	(21,'Gap',2),
	(22,'Gap',3);

/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table file
# ------------------------------------------------------------

DROP TABLE IF EXISTS `file`;

CREATE TABLE `file` (
  `product_id` int(11) DEFAULT NULL,
  `File_id` int(11) NOT NULL AUTO_INCREMENT,
  `File_Type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Link` varchar(355) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`File_id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `file_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `file` WRITE;
/*!40000 ALTER TABLE `file` DISABLE KEYS */;

INSERT INTO `file` (`product_id`, `File_id`, `File_Type`, `Link`)
VALUES
	(1,2,'image','https://www.imageupload.net/upload-image/2019/12/30/14090581_22480968_1000.jpg'),
	(1,3,'image','https://www.imageupload.net/upload-image/2019/12/30/14090581_22480970_1000.jpg'),
	(1,4,'image','https://www.imageupload.net/upload-image/2019/12/30/14090581_22480974_1000.jpg'),
	(2,6,'image','https://www.imageupload.net/upload-image/2019/12/30/14229690_20141924_1000.jpg'),
	(2,7,'image','https://www.imageupload.net/upload-image/2019/12/30/14229690_20141929_1000.jpg'),
	(2,8,'image','https://www.imageupload.net/upload-image/2019/12/30/14229690_20141939_1000.jpg'),
	(3,10,'image','https://www.imageupload.net/upload-image/2019/12/30/14516838_23027722_1000.png'),
	(3,11,'image','https://www.imageupload.net/upload-image/2019/12/30/14516838_23027724_1000.png'),
	(3,12,'image','https://www.imageupload.net/upload-image/2019/12/30/14516838_23027725_1000.png'),
	(4,14,'image','https://www.imageupload.net/upload-image/2019/12/30/12606171_12109880_1000.png'),
	(4,15,'image','https://www.imageupload.net/upload-image/2019/12/30/12606171_12109882_1000.png'),
	(4,16,'image','https://www.imageupload.net/upload-image/2019/12/30/12606171_12109883_1000.png'),
	(5,18,'image','https://www.imageupload.net/upload-image/2019/12/30/13611915_22000686_1000.png'),
	(5,19,'image','https://www.imageupload.net/upload-image/2019/12/30/13611915_22000688_1000.jpg'),
	(5,20,'image','https://www.imageupload.net/upload-image/2019/12/30/13611915_22000689_1000.jpg'),
	(6,21,'image','https://www.imageupload.net/upload-image/2019/12/30/192451F086008_2.png'),
	(6,22,'image','https://www.imageupload.net/upload-image/2019/12/30/192451F086008_3.png'),
	(6,23,'image','https://www.imageupload.net/upload-image/2019/12/30/192451F086008_4.png'),
	(6,24,'image','https://www.imageupload.net/upload-image/2019/12/30/192451F086008_5.png'),
	(7,25,'image','https://www.imageupload.net/upload-image/2019/12/30/192278M213011_1.png'),
	(7,26,'image','https://www.imageupload.net/upload-image/2019/12/30/192278M213011_2.png'),
	(7,27,'image','https://www.imageupload.net/upload-image/2019/12/30/192278M213011_3.png'),
	(7,28,'image','https://www.imageupload.net/upload-image/2019/12/30/192278M213011_4.png'),
	(8,29,'image','https://www.imageupload.net/upload-image/2019/12/30/192813M237017_1.png'),
	(8,30,'image','https://www.imageupload.net/upload-image/2019/12/30/192813M237017_2.png'),
	(8,31,'image','https://www.imageupload.net/upload-image/2019/12/30/192813M237017_3.png'),
	(8,32,'image','https://www.imageupload.net/upload-image/2019/12/30/192813M237017_4.png'),
	(9,34,'image','https://www.imageupload.net/upload-image/2019/12/30/14231367_20122561_1000.jpg'),
	(9,35,'image','https://www.imageupload.net/upload-image/2019/12/30/14231367_20122568_1000.jpg'),
	(9,36,'image','https://www.imageupload.net/upload-image/2019/12/30/14231367_20122576_1000.jpg'),
	(10,38,'image','https://www.imageupload.net/upload-image/2019/12/30/12870974-2.jpg'),
	(10,39,'image','https://www.imageupload.net/upload-image/2019/12/30/12870974-3.jpg'),
	(10,40,'image','https://www.imageupload.net/upload-image/2019/12/30/12870974-4.jpg'),
	(11,42,'image','https://www.imageupload.net/upload-image/2019/12/30/11055311-2.jpg'),
	(11,43,'image','https://www.imageupload.net/upload-image/2019/12/30/11055311-3.jpg'),
	(11,44,'image','https://www.imageupload.net/upload-image/2019/12/30/11055311-4.jpg'),
	(12,46,'image','https://www.imageupload.net/upload-image/2019/12/30/hugo-boss-men_s-medium-gray-crosstown-grainy-briefcase-50390384_030_3.jpg'),
	(12,47,'image','https://www.imageupload.net/upload-image/2019/12/30/hugo-boss-men_s-medium-gray-crosstown-grainy-briefcase-50390384_030_6.jpg'),
	(12,48,'image','https://www.imageupload.net/upload-image/2019/12/30/tai-xung.jpg'),
	(13,50,'image','https://www.imageupload.net/upload-image/2019/12/31/ezgif.com-webp-to-jpg589d5ddfd67241b7.jpg'),
	(14,52,'image','https://www.imageupload.net/upload-image/2019/12/30/14032866_18392437_1000.png'),
	(14,53,'image','https://www.imageupload.net/upload-image/2019/12/30/14032866_18392444_1000.jpg'),
	(15,54,'image','https://www.imageupload.net/upload-image/2019/12/30/b9b76549-7824-4424-8d21-f260aa1e1df2.jpg'),
	(16,56,'image','https://www.imageupload.net/upload-image/2019/12/30/71pZh1GFML._UL1500_.jpg'),
	(16,57,'image','https://www.imageupload.net/upload-image/2019/12/30/cmp-salopette.jpg'),
	(17,59,'image','https://www.imageupload.net/upload-image/2019/12/31/acne-studios-ellison-face-tshirt-paprika-red-face-patch-at-breast-solid-color-design--4709-500x500.jpg'),
	(17,60,'image','https://www.imageupload.net/upload-image/2019/12/31/acne-studios-ellison-face-tshirt-paprika-red-face-patch-at-breast-solid-color-design--4710-500x500.jpg'),
	(17,61,'image','https://www.imageupload.net/upload-image/2019/12/31/acne-studios-ellison-face-tshirt-paprika-red-face-patch-at-breast-solid-color-design--4713-500x500.jpg'),
	(18,63,'image','https://www.imageupload.net/upload-image/2019/12/31/13613105-2.jpg'),
	(18,64,'image','https://www.imageupload.net/upload-image/2019/12/31/13613105-3.jpg'),
	(19,66,'image','https://www.imageupload.net/upload-image/2019/12/31/201418M175002_2.jpg'),
	(19,67,'image','https://www.imageupload.net/upload-image/2019/12/31/201418M175002_3.jpg'),
	(19,68,'image','https://www.imageupload.net/upload-image/2019/12/31/201418M175002_4.jpg'),
	(20,69,'image','https://www.imageupload.net/upload-image/2019/12/31/adidas-design-2-move-climacool-3-stripes-knit-shorts-regular-1.jpg'),
	(20,71,'image','https://www.imageupload.net/upload-image/2019/12/31/adidas-design-2-move-climacool-shorts-tall.jpg'),
	(20,72,'image','https://www.imageupload.net/upload-image/2019/12/31/tai-xung.jpg'),
	(21,74,'image','https://www.imageupload.net/upload-image/2019/12/31/13903653_17736916_480.jpg'),
	(21,75,'image','https://www.imageupload.net/upload-image/2019/12/31/miki-house-logo-hi-top-sneakers.jpg'),
	(21,76,'image','https://www.imageupload.net/upload-image/2019/12/31/miki-house-trainers-logo-touch-strap-sneakers.jpg'),
	(22,78,'image','https://www.imageupload.net/upload-image/2019/12/31/805096.jpg'),
	(22,79,'image','https://www.imageupload.net/upload-image/2019/12/31/barts-kids-fleece-headband-fuchsia-aw18.jpg'),
	(23,81,'image','https://www.imageupload.net/upload-image/2019/12/31/black-gold-octagonal-glasses_0-3.jpg'),
	(23,82,'image','https://www.imageupload.net/upload-image/2019/12/31/black-gold-octagonal-glasses_1-5.jpg'),
	(24,84,'image','https://www.imageupload.net/upload-image/2019/12/31/BLOW-WB30_V1.jpg'),
	(25,85,'image','https://www.imageupload.net/upload-image/2019/12/31/5f2e6a6d52544b118388aa4f010ff35a_9366.jpg'),
	(25,87,'image','https://www.imageupload.net/upload-image/2019/12/31/hervia.com-adidas-x-pharrell-williams-solar-hu-glide-greyscale-ef2378-tonal-white-1563382535Hu-White-0002-Layer-1.jpg'),
	(26,88,'image','https://www.imageupload.net/upload-image/2019/12/31/008_32f31535-db58-4f41-aa3f-2ac075f2ea84.jpg'),
	(26,90,'image','https://www.imageupload.net/upload-image/2019/12/31/66448100.jpg'),
	(27,92,'image','https://www.imageupload.net/upload-image/2019/12/31/10232851-1-andoverheather.jpg'),
	(27,93,'image','https://www.imageupload.net/upload-image/2019/12/31/Polo-Ralph-Lauren-player-logo-slim-fit-oxford-shirt-buttondown-pocket-in-grey-Slate-Mens-Shirts-mg9nBFdw_1.jpg'),
	(28,95,'image','https://www.imageupload.net/upload-image/2019/12/31/12846552b_xxl_v1572924597342.jpg'),
	(29,96,'image','https://www.imageupload.net/upload-image/2019/12/31/71nB87oqU4L._UL1500_.jpg'),
	(30,99,'image','https://www.imageupload.net/upload-image/2019/12/31/9336383-3.jpg'),
	(30,100,'image','https://www.imageupload.net/upload-image/2019/12/31/9336383-4.jpg');

/*!40000 ALTER TABLE `file` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table middle
# ------------------------------------------------------------

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table product
# ------------------------------------------------------------

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
  `Status` bit(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;

INSERT INTO `product` (`id`, `Name`, `Size`, `Color`, `Material`, `Description`, `Price`, `Origin`, `File`, `Status`)
VALUES
	(1,'Heraldic','52','Black','silk','Feeling regal today? Showcasing the iconic Heraldic print and DG King embroidered logo','1938$','USA','https://www.imageupload.net/upload-image/2019/12/30/14090581_22480959_1000.jpg',b'1'),
	(2,'Distressed','44','Black','cotton','This season, Dolce & Gabbana explore the concept of luxe sportswear bringing a contemporary update to their much-loved ','703$','Italia','https://www.imageupload.net/upload-image/2019/12/30/14229690_20141914_1000.jpg',b'1'),
	(3,'Carnation Dressed','38','Black','polyamade','Multicolour silk-cotton blend carnation print midi dress from Dolce & Gabbana featuring a round neck, three-quarter length','1871$','Germany','https://www.imageupload.net/upload-image/2019/12/30/14516838_23027721_1000.png',b'1'),
	(4,'Mainyver Tops','39','White','cotton','Available in a range of styles to suit all','963$','USA','https://www.imageupload.net/upload-image/2019/12/30/12606171_12109880_1000-1.png',b'1'),
	(5,'Saffiano','30','Pink','Leather','Chiefs in leather craftsmanship, Prada\'s acclaimed Saffiano leather is consistently','833$','France','https://www.imageupload.net/upload-image/2019/12/30/13611915_22000685_1000.jpg',b'1'),
	(6,'Beige','36','Brown','Jersy','Relaxed-fit cotton-blend jersey lounge pants featuring logo pattern in beige and brown. Mid-rise','1500$','Germany','https://www.imageupload.net/upload-image/2019/12/31/gucci-beige-Beige-GG-Logo-Lounge-Pants.jpg',b'1'),
	(7,'BlackGG','37','Black','Cotton','Short sleeve cotton jersey t-shirt in black. Rib knit crewneck collar','480$','Italia','https://www.imageupload.net/upload-image/2019/12/31/BW70603Z0Y_F_GIV-001.fronte.jpg',b'1'),
	(8,'Christian','39','Black','Leather','High-top buffed calfskin sneakers in black. Round toe. Tonal lace-up closure.','1350$','France','https://www.imageupload.net/upload-image/2019/12/31/ezgif.com-webp-to-jpg.md.jpg',b'1'),
	(9,'Tarpered','35','Blue','Jeans','Jeans by Calvin Klein Jeans It\'s all the in jeans Mid-blue wash Regular rise Zip fly Functional','680$','Italia','https://www.imageupload.net/upload-image/2019/12/30/14229690_20141924_10004ef114e7778b2569.jpg',b'1'),
	(10,'PaddedJacket','37','Red','Cotton','Jacket by Calvin Klein Jeans Add it to your everyday line-up Padded for comfort Detachable','720$','USA','https://www.imageupload.net/upload-image/2019/12/30/12870974-1-racingred.jpg',b'1'),
	(11,'IronWhite','36','White','Cotton','Shirt by Calvin Klein It\'s a classic Spread collar Button placket Small logo detail to chest Skinny fit Cut very closely to the body Exclusive to ASOS','300$','VietNam','https://www.imageupload.net/upload-image/2019/12/30/11055311-1-dfwhite.jpg',b'1'),
	(12,'Grainy','15.25','Grey','Leather','Hugo Boss Crossbody. Barcode: 4021402639977','567$','Italia','https://www.imageupload.net/upload-image/2019/12/30/hugo-boss-men_s-medium-gray-crosstown-grainy-briefcase-50390384_030.jpg',b'1'),
	(13,'Sunglasses','55','Grey','Nilon','These authentic Boss by Hugo Boss Boss 1029/F/S Asian Fit 807/T4 sunglasses have Black Titanium frames and are available online for a discounted price at SmartBuyGlasses','300$','France','https://www.imageupload.net/upload-image/2019/12/31/716btntoj5L._UL1500_.jpg',b'1'),
	(14,'BurbberyKid','12','Brown','Cotton','A cotton shirt dress with contrasting panels in our Vintage check and Icon stripe.','240$','Russia','https://www.imageupload.net/upload-image/2019/12/30/14032866_18392426_1000.png',b'1'),
	(15,'BomberJacket','8','Blue','Lurex','Dark blue waterproof nylon satin. Yellow trims along the sleeves and pockets','1004$','Germany','https://www.imageupload.net/upload-image/2019/12/30/jackets-gucci.jpg',b'1'),
	(16,'Campagnolo','14','Red','Cotton','Kids ́ clothing Pants Cmp Salopette 14 Years. Length: Long, Color: Red, Features: Thermal, Features: Waterproof','219$','USA','https://www.imageupload.net/upload-image/2019/12/31/pmpl_29832_1.jpg',b'1'),
	(17,'Elision','35','Orange','Cotton','Fabric: Jersey - Face patch at breast - Solid-color design - T-shirt style - Waist-length style - Crew neck - Short sleeves - Shell: 100% cotton - Wash cold','233$','VietNam','https://www.imageupload.net/upload-image/2019/12/31/acne-studios-ellison-face-tshirt-paprika-red-face-patch-at-breast-solid-color-design-1069-500x500.jpg',b'1'),
	(18,'Twill Bomer','37','Purple','Cotton','Bomber jacket by Calvin Klein A fresh addition Baseball collar Zip opening Side pockets Fitted hem and cuffs Regular fit True to size','344$','USA','https://www.imageupload.net/upload-image/2019/12/31/13613105-1-navy.jpg',b'1'),
	(19,'Classic Teddy','XXL','Black','Cotton','Long sleeve wool-blend canvas bomber jacket in black. Rib knit stand collar, cuffs, and hem striped in white. Press-stud closure at front. Lambskin stripes in white at armscyes ...','564$','France','https://www.imageupload.net/upload-image/2019/12/31/201418M175002_1.jpg',b'1'),
	(20,'Climacool','M','Black','Sporty','Men ́s clothing Pants Adidas Design 2 Move Climacool 3 Stripes Knit Shorts Regular M. Length: Short, Recommended use: Multisport','122$','USA','https://www.imageupload.net/upload-image/2019/12/31/adidas-design-2-move-climacool-3-stripes-knit-shorts-regular.jpg',b'1'),
	(21,'Miki House','19','Red','Leather','Red faux leather My First shoes from MIKI HOUSE featuring a round toe, a touch strap fastening and a flat sole.','110$','USA','https://www.imageupload.net/upload-image/2019/12/31/13903653_17736912_1000.jpg',b'1'),
	(22,'Fleece','6','Pink','Cotton','The Barts Fleece Col Kids is made from soft fleece material and finished with a small Barts branding.','103$','Germany','https://www.imageupload.net/upload-image/2019/12/31/71VYxA3casL._UX679_.jpg',b'1'),
	(23,'Octagonal','56.18','Black','Metal','Octagonal metal-frame optical glasses in black and gold-tone. Transparent rubber nose pads. Logo plaque at hinges. Acetate temple tips featuring signature red and green stripes','286$','Italia','https://www.imageupload.net/upload-image/2019/12/31/9816402.jpg',b'1'),
	(24,'Frank Belt','M , S','Black','Leather','B-Low the Belt Frank Hip Belt in Black & Silver - Black. Size S (also in M). Genuine leather belt. Measures approx 1.5 H. Silver-tone metal buckle measures approx 2.75 H.','199$','Russia','https://www.imageupload.net/upload-image/2019/12/31/BLOW-WB30_V1-1.jpg',b'1'),
	(25,'Pharell','38, 39','White','Midsoles','Fabric: Knit\'Hu\' embroidery at vamp - Mesh trim - Intergrated cushioned tongues and pull tabs - Removable cushioned insoles - Boost foam midsoles and plastic side heel guards','399$','France','https://www.imageupload.net/upload-image/2019/12/31/Adidas_PU-9.jpg',b'1'),
	(26,'City Dragon','M','Black','Cotton','Short sleeve cotton jersey t-shirt in black. Distressing throughout. Rib knit crewneck collar. Multicolor graphic and text printed at front. Supplier color: Tar','544$','USA','https://www.imageupload.net/upload-image/2019/12/31/008_a41a66da-079c-431c-82c1-b7e13117e8d0.jpg',b'1'),
	(27,'Polo Ralhm','L , Xl','Grey','Cotton','Shirt by Polo Ralph Lauren A wardrobe staple Button-down collar Polo Ralph Lauren logo Button placket Slim fit A narrow cut that sits close to the body','127$','USA','https://www.imageupload.net/upload-image/2019/12/31/8994938-1-grey.jpg',b'1'),
	(28,'Cartier','45mm , 18.7mm','White , Black','Plantinum','Platinum case with a black alligator leather strap. Fixed bezel. Openwork dial with blue sword-shaped hands and index hour markers. Minute markers around the outer rim','1400$','Switzerland','https://www.imageupload.net/upload-image/2019/12/31/12846552_xxl_v1572924596501.jpg',b'1'),
	(29,'Rado','30mm','Black','Plantinum','Black high-tech ceramic case and bracelet. Fixed black ceramic bezel. Black dial with luminous gold-tone hands. Diamonds mark the 3, 6, 9 and 12 o\'clock positions. Dial Type: Analog. Luminescent hands','999$','Switzerland','https://www.imageupload.net/upload-image/2019/12/31/411H6t6lNgL._UY445_.jpg',b'1'),
	(30,'Asos','L','Blue','Cotton','Tall dress by ASOS DESIGN For that thing you have to go to One-shoulder design Tulle underskirt Zip with hook-and-eye fastening Regular cut Fits you just right','313$','France','https://www.imageupload.net/upload-image/2019/12/31/9336383-1-navy.jpg',b'1');

/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
