CREATE DATABASE  IF NOT EXISTS `mfb` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `mfb`;
-- MySQL dump 10.13  Distrib 5.5.38, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: mfb
-- ------------------------------------------------------
-- Server version	5.5.38-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fanpage_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `long_lived_access_token` text COLLATE utf8_unicode_ci,
  `cover` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `fanpage_id` (`fanpage_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` VALUES (13,'499394323498794','GeekBoy','CAAJ4LGdPR8MBAJpjzQlnuOT8QUUQowWRaQrg1XSnKGJhsNAG0TTrf5Rrk1tX1l2yYzxe1RUgfDH5I7PHMWrjrnsffJFDqvCdYpiBamzi2WT7TvnSIU4E9FNMx9ao5CmyFrJ1ZAeoZAB4ZBktZCENNcaBE2Gv6h2v0Wx3LNtP1UuQpzu3jCf6',''),(14,'489874674396911','Nâng Ly','CAAJ4LGdPR8MBAGlZCRdEjfKDFZBnGmb80CGgOeyczFAZCW7ZADQIHlY0hv254MZAOmU4n8I4RoMn1a2Xl2OHyeno9G1fxPSSFOMVMWxPZAqszfte2lDI9dIcB9T3ZAZBX8fLQgJCfAVKSawjjtzRGg0lQ2jzI0OuWNxqmwMPFJ1Gwzt1NtciZAE6u','https://fbcdn-sphotos-h-a.akamaihd.net/hphotos-ak-xfa1/v/t1.0-9/s720x720/19907_571075766276801_653871305_n.jpg?oh=fb46d95fa4dc139feaaaf3392f4caa2f&oe=548D4A51&__gda__=1419364282_5714fd03cb42566b8cc0fa2f104afa78'),(15,'121809317986153','Niềm vui khám phá','CAAJ4LGdPR8MBALbdwvv1EWHxx2BlcZATgkgBYdZCDmno3mK0ZCERgR6qBlIeN7fRJDcjf5ZBiRT86b2jvnMXXfNqG4MYlRYxRHMF5tvVJ3JC5gKgB7dC6CX23ln1zWX7o9jYQnL6VGniMZBxCTRWpumrDKs74oScAEqYqIDmVEN99yPlChJPS','https://fbcdn-sphotos-g-a.akamaihd.net/hphotos-ak-xpa1/v/t1.0-9/p180x540/10616003_360782344088848_3939975285075635097_n.jpg?oh=57007577855bd804e7f78168277c349d&oe=54922D55&__gda__=1419401907_7a449d1b1867a8078d8e03a9812baf3e'),(16,'314542145335284','Nhật Ký Yêu Thương','CAAJ4LGdPR8MBANBBrQGMQZCQFDkz8BBuBt70gSQvpIcWKXZC0m3ZCwXhDUzHw1QAjMKOl2deFbnoyEdLbAtfAD89TpjpVmOfKSiRIeE2ilDblZCVlwetoZBryZB56DRqSaNZA9kZAHeQbZBZCfByLDfZADeZBU4C9iuB0VziteszWtGowxqaUv5IkOVA0I7Cu5Iomh8ZD','https://fbcdn-sphotos-d-a.akamaihd.net/hphotos-ak-xpf1/t31.0-8/s720x720/859262_314889398633892_398290575_o.jpg'),(17,'614619545303130','Mamy Shop','CAAJ4LGdPR8MBANeHQEJG7O0dVmFbgSYyEeli7dyfqY1TPNHE8Dk1ZCvWutpbBUJPnnhTz7aVA1b9sg3oe3q5aVRYKZAQzYmvaGJGZBM550oTU2FpNGv73H8690ZANjlZAagCZCofRuNtcZBXdPiDpxgWVKXyIwfloBPRobBbKWYQFfDYRXhKEJauBMoxsX2Pp8ZD','');

--
-- Table structure for table `user_page`
--

DROP TABLE IF EXISTS `user_page`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `fanpage_id` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_page`
--

INSERT INTO `user_page` VALUES (13,'890446910969119','499394323498794'),(14,'890446910969119','489874674396911'),(15,'890446910969119','121809317986153'),(16,'890446910969119','314542145335284'),(17,'890446910969119','614619545303130');
/*!40000 ALTER TABLE `user_page` ENABLE KEYS */;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fb_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` int(11) NOT NULL,
  `avatar` text COLLATE utf8_unicode_ci,
  `long_lived_access_token` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fid` (`fb_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

INSERT INTO `users` VALUES (5,'890446910969119',0,'','CAAJ4LGdPR8MBAIXJoKOtFeuCh5cmDcM68VrQxtKzJQyh0yN97BKLlVI8h3IZAPrOXZApRx6UNvfSZA905TF36UbRzFS4CVVOZAM0Tok4YVWNpwy1QmZCuFZAZCAWRKvIAjWIpq6cpRgJcSlqs805wPsiMUewBooNXj68DIHO5x5CZAJZBHZAp0pD2C');

-- Dump completed on 2014-09-19 17:00:31
