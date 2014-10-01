CREATE DATABASE  IF NOT EXISTS `mfb` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (13,'499394323498794','GeekBoy','CAAJ4LGdPR8MBAJpjzQlnuOT8QUUQowWRaQrg1XSnKGJhsNAG0TTrf5Rrk1tX1l2yYzxe1RUgfDH5I7PHMWrjrnsffJFDqvCdYpiBamzi2WT7TvnSIU4E9FNMx9ao5CmyFrJ1ZAeoZAB4ZBktZCENNcaBE2Gv6h2v0Wx3LNtP1UuQpzu3jCf6',''),(14,'489874674396911','Nâng Ly','CAAJ4LGdPR8MBAGlZCRdEjfKDFZBnGmb80CGgOeyczFAZCW7ZADQIHlY0hv254MZAOmU4n8I4RoMn1a2Xl2OHyeno9G1fxPSSFOMVMWxPZAqszfte2lDI9dIcB9T3ZAZBX8fLQgJCfAVKSawjjtzRGg0lQ2jzI0OuWNxqmwMPFJ1Gwzt1NtciZAE6u','https://fbcdn-sphotos-h-a.akamaihd.net/hphotos-ak-xfa1/v/t1.0-9/s720x720/19907_571075766276801_653871305_n.jpg?oh=fb46d95fa4dc139feaaaf3392f4caa2f&oe=548D4A51&__gda__=1419364282_5714fd03cb42566b8cc0fa2f104afa78'),(15,'121809317986153','Niềm vui khám phá','CAAJ4LGdPR8MBALbdwvv1EWHxx2BlcZATgkgBYdZCDmno3mK0ZCERgR6qBlIeN7fRJDcjf5ZBiRT86b2jvnMXXfNqG4MYlRYxRHMF5tvVJ3JC5gKgB7dC6CX23ln1zWX7o9jYQnL6VGniMZBxCTRWpumrDKs74oScAEqYqIDmVEN99yPlChJPS','https://fbcdn-sphotos-g-a.akamaihd.net/hphotos-ak-xpa1/v/t1.0-9/p180x540/10616003_360782344088848_3939975285075635097_n.jpg?oh=57007577855bd804e7f78168277c349d&oe=54922D55&__gda__=1419401907_7a449d1b1867a8078d8e03a9812baf3e'),(16,'314542145335284','Nhật Ký Yêu Thương','CAAJ4LGdPR8MBANBBrQGMQZCQFDkz8BBuBt70gSQvpIcWKXZC0m3ZCwXhDUzHw1QAjMKOl2deFbnoyEdLbAtfAD89TpjpVmOfKSiRIeE2ilDblZCVlwetoZBryZB56DRqSaNZA9kZAHeQbZBZCfByLDfZADeZBU4C9iuB0VziteszWtGowxqaUv5IkOVA0I7Cu5Iomh8ZD','https://fbcdn-sphotos-d-a.akamaihd.net/hphotos-ak-xpf1/t31.0-8/s720x720/859262_314889398633892_398290575_o.jpg'),(17,'614619545303130','Mamy Shop','CAAJ4LGdPR8MBANeHQEJG7O0dVmFbgSYyEeli7dyfqY1TPNHE8Dk1ZCvWutpbBUJPnnhTz7aVA1b9sg3oe3q5aVRYKZAQzYmvaGJGZBM550oTU2FpNGv73H8690ZANjlZAagCZCofRuNtcZBXdPiDpxgWVKXyIwfloBPRobBbKWYQFfDYRXhKEJauBMoxsX2Pp8ZD',''),(18,'676020879146272','MaMy','CAAJ4LGdPR8MBAHEEqM5qjWbLI6FgygxoeOHuUBS9MFzixrRLGL4TWZBwaTBsZBkHKkqWpC1Alq02SFgepX1z0kKDpTNdGYPQfn8oWq274yPccZCGO7eCcJFZBb2npZC51yOtwFKJZBf3eAtIgEvOjzGntyut07wo3Y20vADb2X994OTIdyiR1a','https://scontent-b.xx.fbcdn.net/hphotos-xpf1/v/t1.0-9/s720x720/10616273_697418987006461_721621264901072230_n.jpg?oh=58e5daed85aa7c7164cb5b4f4e9867c1&oe=548AA4BB'),(19,'388431377849752','Nhà Nam NTC Thủ Đức','CAAJ4LGdPR8MBAHXXfkbKrocou73E3WJZBNdJgUkbkIexPOa236W9hmB2E3LQSwtL5jHeZBZCHHgmhdZBOxzpQRuJWuTRfr57SvuJRLBnPDkBUewBdyva9U0fN0pcLApHA27G8EnCE7TV3LLpdRI8edAqEQOFPqRZAPorNAaJHZAHS9ws6OosO7','');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `modifier` int(11) DEFAULT NULL,
  `type` tinyint(4) DEFAULT NULL,
  `push_facebook_on` tinyint(4) DEFAULT NULL,
  `date_created` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_modified` varchar(200) DEFAULT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `fk_posts_1_idx` (`page_id`),
  KEY `fk_posts_2_idx` (`author`),
  CONSTRAINT `fk_posts_1` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_posts_2` FOREIGN KEY (`author`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (36,5,13,2147483647,1,1,'1411726113','1411726113','{\"message\":\" N\\u1eef Vi\\u1ec7t Nam 2-1 Th\\u00e1i Lan: K\\u1ef3 t\\u00edch l\\u1ecbch s\\u1eed\\r\\nTrong tr\\u1eadn t\\u1ee9 k\\u1ebft b\\u00f3ng \\u0111\\u00e1 n\\u1eef ASIAD 17 g\\u1eb7p Th\\u00e1i Lan l\\u00fac 14h, tuy\\u1ec3n Vi\\u1ec7t Nam gi\\u00e0nh chi\\u1ebfn th\\u1eafng 2-1 \\u0111\\u1ec3 l\\u1ea7n \\u0111\\u1ea7u ti\\u00ean v\\u00e0o b\\u00e1n k\\u1ebft \\u00c1 v\\u1eadn h\\u1ed9i.\\r\\n#Geekboy\",\"link\":\"http:\\/\\/news.zing.vn\\/Nu-Viet-Nam-21-Thai-Lan-Ky-tich-lich-su-post461623.html\"}'),(38,5,13,2147483647,1,1,'1411726363','1411726363','{\"message\":\" \'\'Khi ra bi\\u1ec3n l\\u1edbn, ch\\u00ednh ph\\u1ee7 c\\u1ea7n \\u0111\\u1ee9ng sau, h\\u1ed7 tr\\u1ee3 doanh nghi\\u1ec7p. N\\u1ebfu \\u0111\\u1ec3 c\\u00e1c CEO t\\u1ef1 b\\u01a1i l\\u1ed9i, gi\\u1eefa d\\u00f2ng s\\u1ebd t\\u1ef1 \\u0111\\u1eafm\\u201d.\",\"link\":\"http:\\/\\/cafebiz.vn\\/nhan-vat\\/ong-johnathan-hanh-nguyen-ra-bien-lon-neu-de-cac-ceo-tu-boi-loi-giua-dong-se-tu-dam-20140926110618691ca48.chn\",\"publish\":false,\"scheduled_publish_time\":1411726363}'),(39,5,13,5,1,1,'1411726556','1411726556','{\"message\":\"M\\u1ed9t c\\u00e2u h\\u1ecfi kh\\u00e1c \\u0111\\u01b0\\u1ee3c \\u0111\\u1eb7t ra cho \\u00f4ng Johnathan H\\u1ea1nh Nguy\\u1ec5n t\\u1ea1i bu\\u1ed5i \\u0111\\u1ed1i tho\\u1ea1i v\\u1edbi ch\\u1ee7 \\u0111\\u1ec1 \\u201cChi\\u1ebfc la b\\u00e0n ra bi\\u1ec3n l\\u1edbn\\u2019\\u2019 trong khu\\u00f4n kh\\u1ed5 Di\\u1ec5n \\u0111\\u00e0n Vi\\u1ec7t Nam CEO Forum 2014 l\\u00e0: C\\u00e1c doanh nghi\\u1ec7p F & B (th\\u1ef1c ph\\u1ea9m v\\u00e0 \\u0111\\u1ed3 u\\u1ed1ng) Vi\\u1ec7t Nam th\\u01b0\\u1eddng \\u2018s\\u1edbm n\\u1edf t\\u1ed1i t\\u00e0n\\u2019. V\\u1eady doanh nghi\\u1ec7p Vi\\u1ec7t thi\\u1ebfu nh\\u1eefng \\u0111i\\u1ec1u g\\u00ec \\u0111\\u1ec3 kinh doanh chu\\u1ed7i F&B th\\u00e0nh c\\u00f4ng v\\u00e0 ra \\u0111\\u01b0\\u1ee3c bi\\u1ec3n l\\u1edbn?\",\"link\":\"http:\\/\\/cafebiz.vn\\/nhan-vat\\/ong-johnathan-hanh-nguyen-ra-bien-lon-neu-de-cac-ceo-tu-boi-loi-giua-dong-se-tu-dam-20140926110618691ca48.chn\"}'),(40,5,13,5,1,1,'1411726709','1411726709','{\"message\":\"M\\u1ed9t c\\u00e2u h\\u1ecfi kh\\u00e1c \\u0111\\u01b0\\u1ee3c \\u0111\\u1eb7t ra cho \\u00f4ng Johnathan H\\u1ea1nh Nguy\\u1ec5n t\\u1ea1i bu\\u1ed5i \\u0111\\u1ed1i tho\\u1ea1i v\\u1edbi ch\\u1ee7 \\u0111\\u1ec1 \\u201cChi\\u1ebfc la b\\u00e0n ra bi\\u1ec3n l\\u1edbn\\u2019\\u2019 trong khu\\u00f4n kh\\u1ed5 Di\\u1ec5n \\u0111\\u00e0n Vi\\u1ec7t Nam CEO Forum 2014 l\\u00e0: C\\u00e1c doanh nghi\\u1ec7p F & B (th\\u1ef1c ph\\u1ea9m v\\u00e0 \\u0111\\u1ed3 u\\u1ed1ng) Vi\\u1ec7t Nam th\\u01b0\\u1eddng \\u2018s\\u1edbm n\\u1edf t\\u1ed1i t\\u00e0n\\u2019. V\\u1eady doanh nghi\\u1ec7p Vi\\u1ec7t thi\\u1ebfu nh\\u1eefng \\u0111i\\u1ec1u g\\u00ec \\u0111\\u1ec3 kinh doanh chu\\u1ed7i F&B th\\u00e0nh c\\u00f4ng v\\u00e0 ra \\u0111\\u01b0\\u1ee3c bi\\u1ec3n l\\u1edbn?\",\"link\":\"http:\\/\\/cafebiz.vn\\/nhan-vat\\/ong-johnathan-hanh-nguyen-ra-bien-lon-neu-de-cac-ceo-tu-boi-loi-giua-dong-se-tu-dam-20140926110618691ca48.chn\"}'),(41,5,13,5,1,1,'1411726722','1411726722','{\"message\":\" \",\"link\":\"\"}'),(42,5,15,5,1,1,'1411727569','1411727569','{\"message\":\" B\\u00e9 g\\u00e1i l\\u1edbp 3 \\u0111\\u00f3i l\\u1ea3, ch\\u1ebft \\u0111u\\u1ed1i d\\u01b0\\u1edbi m\\u01b0\\u01a1ng\\r\\nTr\\u00ean \\u0111\\u01b0\\u1eddng \\u0111i h\\u1ecdc v\\u1ec1, do qu\\u00e1 \\u0111\\u00f3i, b\\u00e9 Nhung \\u0111\\u00e3 x\\u1ec9u v\\u00e0 r\\u01a1i xu\\u1ed1ng m\\u01b0\\u01a1ng n\\u01b0\\u1edbc, ch\\u1ebft \\u0111u\\u1ed1i.\\r\\nC\\u01a1 quan ch\\u1ee9c n\\u0103ng x\\u00e3 \\u0110\\u1ee9c B\\u1ed3ng cho bi\\u1ebft, v\\u1ee5 vi\\u1ec7c x\\u1ea3y ra v\\u00e0o kho\\u1ea3ng 10h30 ng\\u00e0y 25\\/9. Khi \\u0111\\u00f3, ch\\u00e1u Ph\\u1ea1m Th\\u1ecb Nhung sinh n\\u0103m 2006, tr\\u00fa t\\u1ea1i x\\u00e3 \\u0110\\u1ee9c B\\u1ed3ng (huy\\u1ec7n V\\u0169 Quang, t\\u1ec9nh H\\u00e0 T\\u0129nh), l\\u00e0 h\\u1ecdc sinh l\\u1edbp 3A tr\\u01b0\\u1eddng Ti\\u1ec3u h\\u1ecdc \\u0110\\u1ee9c B\\u1ed3ng tr\\u00ean \\u0111\\u01b0\\u1eddng \\u0111i h\\u1ecdc v\\u1ec1 kh\\u00f4ng may r\\u01a1i xu\\u1ed1ng m\\u01b0\\u01a1ng n\\u01b0\\u1edbc t\\u1ea1i khu v\\u1ef1c ch\\u00e2n c\\u1ea7u \\u0110\\u1ed9ng.\\r\\n\\r\\nKhi ph\\u00e1t hi\\u1ec7n v\\u1ee5 vi\\u1ec7c, m\\u1ecdi ng\\u01b0\\u1eddi kh\\u00f4ng k\\u1ecbp c\\u1ee9u ch\\u00e1u do n\\u01b0\\u1edbc l\\u1edbn \\u0111\\u00e3 cu\\u1ed1n ch\\u00e1u m\\u1ea5t t\\u00edch. Ngay sau \\u0111\\u00f3, ch\\u00ednh quy\\u1ec1n x\\u00e3 v\\u00e0 nh\\u00e2n d\\u00e2n huy \\u0111\\u1ed9ng ng\\u01b0\\u1eddi t\\u00ecm ki\\u1ebfm. H\\u01a1n m\\u1ed9t gi\\u1edd sau, thi th\\u1ec3 ch\\u00e1u Nhung \\u0111\\u01b0\\u1ee3c t\\u00ecm th\\u1ea5y.\",\"link\":\"http:\\/\\/news.zing.vn\\/Be-gai-lop-3-doi-la-chet-duoi-duoi-muong-post461675.html\"}'),(43,5,15,5,1,0,'1412157092','1412157092','{\"message\":\" Hi\\u0301 hi\\u0301 cha\\u0300o tha\\u0301ng 10 \\u0111\\u00e2\\u0300y ma mi\\u0323 :\\\")\\r\\nBo\\u0309 qua tha\\u0301ng 9 co\\u0301 2 n\\u00f4\\u0303i bu\\u00f4\\u0300n l\\u01a1\\u0301n \\r\\nSo luck!!\",\"link\":\"\"}'),(44,5,15,5,1,0,'1412157145','1412157145','{\"message\":\" Disable caching & debug in Drupal 8\\r\\n\\r\\nGo to sites\\/defaut\\/services.yml\\r\\nAt line 21, change: debug: false => debug: true.\\r\\nAt line 30, change: auto_reload: null => auto_reload: true\\r\\nAt line 41, change: cache: true => cache: false\\r\\nHow to debug in Drupal 8 using Twig\\r\\nRead: https:\\/\\/drupalize.me\\/blog\\/201405\\/lets-debug-twig-drupal-8 \\r\\n\\r\\n{{ dump(_context|keys) }}\\r\\n\",\"link\":\"https:\\/\\/drupalize.me\\/blog\\/201405\\/lets-debug-twig-drupal-8 \"}'),(45,5,15,5,1,0,'1412158709','1412158709','{\"message\":\" Sashimi c\\u00e1 H\\u1ed3i \\u2013 H\\u01b0\\u01a1ng v\\u1ecb tinh khi\\u1ebft t\\u1ea1i Asahi Hot Pot .\",\"link\":\"http:\\/\\/www.nangly.com\\/sashimi-ca-hoi-huong-vi-tinh-khiet-tai-asahi-hot-pot\\/\",\"published\":false,\"scheduled_publish_time\":1412158709}'),(46,5,14,5,1,0,'1412159378','1412159378','{\"message\":\"T\\u00f4m n\\u01b0\\u1edbng t\\u1ea9m chanh m\\u1eadt ong\\r\\nM\\u00f3n \\u0103n ngon cho b\\u1eefa c\\u01a1m gia \\u0111\\u00ecnh\",\"link\":\"http:\\/\\/www.nangly.com\\/tom-nuong-tam-chanh-mat-ong\\/\"}'),(47,5,14,5,1,0,'1412159518','1412159518','{\"message\":\" B\\u1ea1n th\\u01b0\\u1eddng d\\u00f9ng m\\u1eaft \\u0111\\u1ec3 ch\\u1ecdn v\\u00e0 t\\u1eadn h\\u01b0\\u1edfng th\\u1ee9c \\u0103n tr\\u01b0\\u1edbc ti\\u00ean, nh\\u01b0ng khoang mi\\u1ec7ng, r\\u0103ng v\\u00e0 n\\u01b0\\u1edbu m\\u1edbi l\\u00e0 ph\\u01b0\\u01a1ng ti\\u1ec7n \\u0111\\u1ec3 b\\u1ea1n nhai v\\u00e0 nu\\u1ed1t \\u2013 b\\u01b0\\u1edbc \\u0111\\u1ea7u ti\\u00ean c\\u1ee7a b\\u1ed9 m\\u00e1y ti\\u00eau h\\u00f3a. B\\u1edfi v\\u1eady, r\\u0103ng mi\\u1ec7ng l\\u00e0 ch\\u1ed1t ch\\u1eb7n \\u0111\\u1ea7u ti\\u00ean c\\u1ee7a c\\u01a1 th\\u1ec3 v\\u1edbi th\\u1ef1c ph\\u1ea9m b\\u00ean ngo\\u00e0i. S\\u1ef1 th\\u1eadt ch\\u1ec9 ra r\\u1eb1ng, n\\u1ebfu dinh d\\u01b0\\u1ee1ng kh\\u00f4ng t\\u1ed1t, s\\u1ebd th\\u01b0\\u1eddng bi\\u1ec3u hi\\u1ec7n \\u1edf s\\u1ee9c kh\\u1ecfe r\\u0103ng mi\\u1ec7ng c\\u1ee7a b\\u1ea1n tr\\u01b0\\u1edbc ti\\u00ean.\\r\\n#Nangly\",\"link\":\"http:\\/\\/www.nangly.com\\/an-nhu-the-nao-de-bao-ve-rang\\/\",\"published\":false,\"scheduled_publish_time\":1412159518}');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_page`
--

LOCK TABLES `user_page` WRITE;
/*!40000 ALTER TABLE `user_page` DISABLE KEYS */;
INSERT INTO `user_page` VALUES (24,'890446910969119','676020879146272'),(25,'890446910969119','489874674396911'),(28,'890446910969119','121809317986153');
/*!40000 ALTER TABLE `user_page` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fb_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` text COLLATE utf8_unicode_ci,
  `long_lived_access_token` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fid` (`fb_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (5,'890446910969119','Phuoc Huu Nguyen','','CAAJ4LGdPR8MBAIXJoKOtFeuCh5cmDcM68VrQxtKzJQyh0yN97BKLlVI8h3IZAPrOXZApRx6UNvfSZA905TF36UbRzFS4CVVOZAM0Tok4YVWNpwy1QmZCuFZAZCAWRKvIAjWIpq6cpRgJcSlqs805wPsiMUewBooNXj68DIHO5x5CZAJZBHZAp0pD2C');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-10-01 17:35:25
