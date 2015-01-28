-- MySQL dump 10.13  Distrib 5.6.16, for Linux (x86_64)
--
-- Host: localhost    Database: dq
-- ------------------------------------------------------
-- Server version	5.6.16

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
-- Current Database: `dq`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `dq` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `dq`;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `uname` varchar(32) DEFAULT NULL,
  `pwd` varchar(32) DEFAULT NULL,
  `creattime` varchar(32) DEFAULT NULL,
  `ext` varchar(32) DEFAULT NULL,
  `groupid` int(32) DEFAULT NULL,
  `email` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'admin','ec208860bb77e3d8d0f4131513f2cc0d','','luvr',NULL,'admin@qq.com');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `block`
--

DROP TABLE IF EXISTS `block`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `block` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `blockid` varchar(32) DEFAULT NULL,
  `html_code` mediumtext,
  `php_code` mediumtext,
  `last_html` mediumtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `block`
--

LOCK TABLES `block` WRITE;
/*!40000 ALTER TABLE `block` DISABLE KEYS */;
/*!40000 ALTER TABLE `block` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gift`
--

DROP TABLE IF EXISTS `gift`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gift` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `material` varchar(32) DEFAULT NULL,
  `band` varchar(32) DEFAULT NULL,
  `chara` varchar(256) DEFAULT NULL,
  `sie` varchar(256) DEFAULT NULL,
  `content` mediumtext,
  `img_url` varchar(256) DEFAULT NULL,
  `title` varchar(256) DEFAULT NULL,
  `link` varchar(256) DEFAULT NULL,
  `price` varchar(32) DEFAULT NULL,
  `total` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gift`
--

LOCK TABLES `gift` WRITE;
/*!40000 ALTER TABLE `gift` DISABLE KEYS */;
/*!40000 ALTER TABLE `gift` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `liquor`
--

DROP TABLE IF EXISTS `liquor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `liquor` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `type` int(32) DEFAULT '0',
  `alcohol` varchar(32) DEFAULT '0',
  `level` varchar(32) DEFAULT '0',
  `tempera` varchar(32) DEFAULT NULL,
  `price` varchar(32) DEFAULT NULL,
  `url` varchar(256) DEFAULT NULL,
  `link` varchar(128) DEFAULT NULL,
  `location` varchar(32) DEFAULT NULL,
  `content` mediumtext,
  `uname` varchar(32) DEFAULT NULL,
  `total` varchar(32) DEFAULT NULL,
  `creattime` varchar(32) DEFAULT NULL,
  `changetime` varchar(32) DEFAULT NULL,
  `title` varchar(32) DEFAULT NULL,
  `country` varchar(32) DEFAULT NULL,
  `province` varchar(32) DEFAULT NULL,
  `county` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `liquor`
--

LOCK TABLES `liquor` WRITE;
/*!40000 ALTER TABLE `liquor` DISABLE KEYS */;
INSERT INTO `liquor` VALUES (45,1,'1','1','1','1','http://dq/Public/Upload/20150128/59e92d2e209a125f9a026c54392782d9_1422378358_7090_0.jpg','','要地','','admin','1','1422378358',NULL,'1','??','????','?????'),(46,1,'3','3','3','3','http:///59e92d2e209a125f9a026c54392782d9_1422378482_2955_0.jpg,http:///d41d8cd98f00b204e9800998ecf8427e_1422378482_3820_1.','',NULL,'',NULL,'3','1422378482',NULL,'3','??','?????','??'),(47,1,'54321','5','54321','5','/home/mtf/Application/dq/html/20150128/1422434615_47_336.html','',NULL,'',NULL,'5','1422378539',NULL,'5','??','????','?????'),(48,1,'333','33','333','33','/home/mtf/Application/dq/html/20150128/1422434587_48_1099.html','',NULL,'',NULL,'33','1422378636',NULL,'111111','??','?????','??');
/*!40000 ALTER TABLE `liquor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `uname` varchar(32) DEFAULT NULL,
  `pwd` varchar(32) DEFAULT NULL,
  `creattime` varchar(32) DEFAULT NULL,
  `ext` varchar(32) DEFAULT NULL,
  `groupid` int(32) DEFAULT NULL,
  `sex` varchar(32) DEFAULT NULL,
  `email` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-01-28 16:49:15
