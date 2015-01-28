
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
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
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `liquor`
--

LOCK TABLES `liquor` WRITE;
/*!40000 ALTER TABLE `liquor` DISABLE KEYS */;
INSERT INTO `liquor` VALUES (1,1,'2','3','4','5','http://email.163.com','http://www.baidu.com','biejing','213213','1','100','1421828924','1421828924',NULL,NULL,NULL,NULL),(2,1,'2','3','4','5','http://email.163.com','http://www.baidu.com','biejing','213213','1','100','1421828940','1421828940',NULL,NULL,NULL,NULL),(3,1,'2','3','4','5','http://email.163.com','http://www.baidu.com','biejing','213213','1','100','1421828941','1421828941',NULL,NULL,NULL,NULL),(4,1,'2','3','4','5','http://email.163.com','http://www.baidu.com','biejing','213213','1','100','1421828941','1421828941',NULL,NULL,NULL,NULL),(5,1,'2','3','4','5','http://email.163.com','http://www.baidu.com','biejing','213213','1','100','1421828942','1421828942',NULL,NULL,NULL,NULL),(6,1,'2','3','4','5','http://email.163.com','http://www.baidu.com','biejing','213213','1','100','1421828942','1421828942',NULL,NULL,NULL,NULL),(7,1,'2','3','4','5','http://email.163.com','http://www.baidu.com','biejing','213213','1','100','1421828943','1421828943',NULL,NULL,NULL,NULL),(8,1,'2','3','4','5','http://email.163.com','http://www.baidu.com','biejing','213213','1','100','1421828943','1421828943',NULL,NULL,NULL,NULL),(9,1,'2','3','4','5','http://email.163.com','http://www.baidu.com','biejing','213213','1','100','1421828944','1421828944',NULL,NULL,NULL,NULL),(10,1,'2','3','4','5','http://email.163.com','http://www.baidu.com','biejing','213213','1','100','1421828945','1421828945',NULL,NULL,NULL,NULL),(11,1,'2','3','4','5','http://email.163.com','http://www.baidu.com','biejing','213213','1','100','1421828945','1421828945',NULL,NULL,NULL,NULL),(12,1,'2','3','4','5','http://email.163.com','http://www.baidu.com','biejing','213213','1','100','1421828946','1421828946',NULL,NULL,NULL,NULL),(13,1,'2','3','4','5','http://email.163.com','http://www.baidu.com','biejing','213213','1','100','1421828961','1421828961',NULL,NULL,NULL,NULL),(14,1,'2','3','4','5','http://email.163.com','http://www.baidu.com','biejing','213213','1','100','1421828961','1421828961',NULL,NULL,NULL,NULL),(15,1,'2','3','4','5','http://email.163.com','http://www.baidu.com','biejing','213213','1','100','1421828961','1421828961',NULL,NULL,NULL,NULL),(16,1,'2','3','4','5','http://email.163.com','http://www.baidu.com','biejing','213213','1','100','1421828961','1421828961',NULL,NULL,NULL,NULL),(17,1,'2','3','4','5','http://email.163.com','http://www.baidu.com','biejing','213213','1','100','1421828961','1421828961',NULL,NULL,NULL,NULL),(18,1,'2','3','4','5','http://email.163.com','http://www.baidu.com','biejing','213213','1','100','1421828961','1421828961',NULL,NULL,NULL,NULL),(19,1,'2','3','4','5','http://email.163.com','http://www.baidu.com','biejing','213213','1','100','1421828961','1421828961',NULL,NULL,NULL,NULL),(20,1,'2','3','4','5','http://email.163.com','http://www.baidu.com','biejing','213213','1','100','1421828961','1421828961',NULL,NULL,NULL,NULL),(21,1,'2','3','4','5','http://email.163.com','http://www.baidu.com','biejing','213213','1','100','1421828961','1421828961',NULL,NULL,NULL,NULL),(22,1,'2','3','4','5','http://email.163.com','http://www.baidu.com','biejing','213213','1','100','1421828961','1421828961',NULL,NULL,NULL,NULL),(23,1,'2','3','4','5','http://email.163.com','http://www.baidu.com','biejing','213213','1','100','1421828961','1421828961',NULL,NULL,NULL,NULL),(24,1,'2','3','4','5','http://email.163.com','http://www.baidu.com','biejing','213213','1','100','1421828961','1421828961',NULL,NULL,NULL,NULL),(25,1,'2','3','4','5','http://email.163.com','http://www.baidu.com','biejing','213213','1','100','1421828961','1421828961',NULL,NULL,NULL,NULL),(26,1,'2','3','4','5','http://email.163.com','http://www.baidu.com','biejing','213213','1','100','1421828961','1421828961',NULL,NULL,NULL,NULL),(27,1,'2','3','4','5','http://email.163.com','http://www.baidu.com','biejing','213213','1','100','1421828961','1421828961',NULL,NULL,NULL,NULL),(28,1,'2','3','4','5','http://email.163.com','http://www.baidu.com','biejing','213213','1','100','1421828961','1421828961',NULL,NULL,NULL,NULL),(29,1,'2','3','4','5','http://email.163.com','http://www.baidu.com','biejing','213213','1','100','1421828961','1421828961',NULL,NULL,NULL,NULL),(30,1,'2','3','4','5','http://email.163.com','http://www.baidu.com','biejing','213213','1','100','1421828961','1421828961',NULL,NULL,NULL,NULL),(31,1,'2','3','4','5','http://email.163.com','http://www.baidu.com','biejing','213213','1','100','1421828961','1421828961',NULL,NULL,NULL,NULL),(32,1,'2','3','4','5','http://email.163.com','http://www.baidu.com','biejing','213213','1','100','1421828961','1421828961',NULL,NULL,NULL,NULL),(33,1,'2','3','4','5','http://email.163.com','http://www.baidu.com','biejing','213213','1','100','1421828961','1421828961',NULL,NULL,NULL,NULL),(34,1,'2','3','4','5','http://email.163.com','http://www.baidu.com','biejing','213213','1','100','1421828961','1421828961',NULL,NULL,NULL,NULL),(35,1,'2','3','4','5','http://email.163.com','http://www.baidu.com','biejing','213213','1','100','1421828961','1421828961',NULL,NULL,NULL,NULL),(36,1,'2','3','4','5','http://email.163.com','http://www.baidu.com','biejing','213213','1','100','1421828961','1421828961',NULL,NULL,NULL,NULL),(37,1,'2','3','4','5','http://email.163.com','http://www.baidu.com','biejing','213213','1','100','1421828961','1421828961',NULL,NULL,NULL,NULL),(38,1,'2','3','4','5','http://email.163.com','http://www.baidu.com','biejing','213213','1','100','1421828961','1421828961',NULL,NULL,NULL,NULL),(39,1,'2','3','4','5','http://email.163.com','http://www.baidu.com','biejing','213213','1','100','1421828961','1421828961',NULL,NULL,NULL,NULL),(40,1,'2','3','4','5','http://email.163.com','http://www.baidu.com','biejing','213213','1','100','1421828961','1421828961',NULL,NULL,NULL,NULL),(41,1,'2','3','4','5','http://email.163.com','http://www.baidu.com','biejing','213213','1','100','1421828961','1421828961',NULL,NULL,NULL,NULL),(42,1,'2','3','4','5','http://email.163.com','http://www.baidu.com','biejing','213213','1','100','1421828961','1421828961',NULL,NULL,NULL,NULL);
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
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

-- Dump completed on 2015-01-21 18:31:13
