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
  `BrandID` int(11) NOT NULL AUTO_INCREMENT,
  `BrandName` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Origin` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Description` text COLLATE utf8_unicode_ci,
  `Status` bit(1) DEFAULT NULL,
  PRIMARY KEY (`BrandID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `brand` */

insert  into `brand`(`BrandID`,`BrandName`,`Origin`,`Description`,`Status`) values 
(1,'Chanel','France','Chanel is well-known for the perfume No. 5 de Chanel and Chanel Suit. Chanel\'s use of jersey fabric produced garments that were comfortable and affordable.[6] Chanel revolutionized fashion — high fashion (haute couture) and everyday fashion (prêt-à-porter) — by replacing structured-silhouettes, based upon the corset and the bodice, with garments that were functional and at the same time flattering to the woman\'s figure.\r\n',NULL),
(2,'HugoBoss','Germany','Hugo Boss AG, often styled as BOSS, is a German luxury fashion house headquartered in Metzingen. It was founded in 1924 by Hugo Boss and originally produced general purpose clothing. With the rise of the Nazi Party in the 1930s, Boss began to produce and sell Nazi uniforms',NULL),
(3,'Prada','Italia','Mario Prada did not believe that women should have a role in business, and so he prevented female family members from entering his company. Ironically, Mario\'s son harbored no interest in the business, so it was his daughter Luisa Prada who took the helm of Prada as his successor, and ran it for almost twenty years. Her own daughter, Miuccia Prada, joined the company in 1970, eventually taking over for her mother in 1978',NULL),
(4,'LouisVuitton','France','Louis Vuitton Malletier, commonly referred to as Louis Vuitton or shortened to LV, is a French fashion house and luxury retail company founded in 1854 by Louis Vuitton. The label\'s LV monogram appears on most of its products, ranging from luxury trunks and leather goods to ready-to-wear, shoes, watches, jewelry, accessories, sunglasses and books. Louis Vuitton is one of the world\'s leading international fashion houses; it sells its products through standalone boutiques, lease departments in high-end department stores, and through the e-commerce section of its website',NULL),
(5,'CalvinKlein','America','Calvin Klein Inc. (/klaɪn/) is an American luxury fashion house established in 1968. It specializes in leather, lifestyle accessories, home furnishings, perfumery, jewellery, watches and ready-to-wear. The company has substantial market share in retail and commercial lines as well haute couture garments.\r\n\r\nThe company was founded by designer Calvin Klein and his childhood friend, Barry K. Schwartz.[1][2] The company is headquartered in Midtown Manhattan, New York City.[3]',NULL),
(6,'DolceGabbana','Italia','The two met in Milan in 1980 and designed for the same fashion house. In 1982, they established a designer consulting studio; in time it grew to become \"Dolce & Gabbana\". They presented their first women\'s collection in 1985[5] in Milan, where a year later their store would open its doors.\r\n\r\nIn 1988, they launched a leotard line, and in 1989 they began designing underwear and swimming costumes. Dolce & Gabbana started to export their products to Japan and other countries including the United States, where they founded their own showroom in 1990. In 1992, the same year they presented their men\'s collection, they also launched their first perfume Dolce & Gabbana. They won the Woolmark award in 1991, and Perfume\'s Academy \"Most Feminine Flavor of the Year\" in 1993 for their fragrance Dolce & Gabbana Parfum. By the end of the 1990s, the company\'s revenues were around US$500 million and in 2003 their revenue reached $633 million. By 2005, their turnover was €600 million.[6]',NULL);

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
  CONSTRAINT `product_ibfk_4` FOREIGN KEY (`BrandID`) REFERENCES `brand` (`BrandID`),
  CONSTRAINT `product_ibfk_5` FOREIGN KEY (`TypeID`) REFERENCES `producttype` (`TypeID`),
  CONSTRAINT `product_ibfk_6` FOREIGN KEY (`PictureID`) REFERENCES `picture` (`PictureID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `product` */

/*Table structure for table `producttype` */

DROP TABLE IF EXISTS `producttype`;

CREATE TABLE `producttype` (
  `TypeID` int(11) NOT NULL AUTO_INCREMENT,
  `ProductType` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Status` bit(1) DEFAULT NULL,
  PRIMARY KEY (`TypeID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `producttype` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
