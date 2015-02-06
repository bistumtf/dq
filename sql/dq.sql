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
-- Table structure for table `channel`
--

DROP TABLE IF EXISTS `channel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `channel` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `url` varchar(256) DEFAULT NULL,
  `icon` varchar(256) DEFAULT NULL,
  `title` varchar(256) DEFAULT NULL,
  `child` varchar(256) DEFAULT NULL,
  `parent` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `channel`
--

LOCK TABLES `channel` WRITE;
/*!40000 ALTER TABLE `channel` DISABLE KEYS */;
INSERT INTO `channel` VALUES (8,'javascript:jump(1)','icon-text-width','主页','',''),(14,'javascript:jump(11)','icon-text-width','频道管理','',NULL),(15,'javascript:jump(3)','icon-text-width','土特产','35,',NULL),(35,'javascript:jump(\'__ITEM__&a=item_list&channelid=35\')','icon-text-width','甘肃','','15,');
/*!40000 ALTER TABLE `channel` ENABLE KEYS */;
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
-- Table structure for table `item`
--

DROP TABLE IF EXISTS `item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `item` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) DEFAULT NULL,
  `creat_at` varchar(32) DEFAULT NULL,
  `price` varchar(32) DEFAULT NULL,
  `image_url` mediumtext,
  `webibo_url` mediumtext,
  `link` varchar(256) DEFAULT NULL,
  `content` mediumtext,
  `total` varchar(32) DEFAULT NULL,
  `detail` mediumtext,
  `channelid` int(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item`
--

LOCK TABLES `item` WRITE;
/*!40000 ALTER TABLE `item` DISABLE KEYS */;
/*!40000 ALTER TABLE `item` ENABLE KEYS */;
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
  `url` mediumtext,
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
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `liquor`
--

LOCK TABLES `liquor` WRITE;
/*!40000 ALTER TABLE `liquor` DISABLE KEYS */;
INSERT INTO `liquor` VALUES (45,1,'1111111111111','22222','2222','2222222','http://dq/Public/Upload/20150204/4b341c37e5160713758a34ca8a39c807_1423060402_5450_0.jpg,http://dq/Public/Upload/20150204/c716e23ed7d620fc1ecce03b00102d76_1423060402_9047_1.jpg,http://dq/Public/Upload/20150204/aa7d8d22d3211a6a93949a77abd2fdef_1423060402_2157_2.jpg','',NULL,'&lt;p&gt;&lt;img alt=&quot;b7003af33a87e9502dab853b13385343fbf2b42c.jpg&quot; src=&quot;/ueditor/php/upload/image/20150204/1423060414108620.jpg&quot; title=&quot;1423060414108620.jpg&quot;/&gt;&lt;/p&gt;','admin','22222','1423060416',NULL,'sSd','国家','省份、州','地级市、县'),(46,1,'3','3','3','3','http:///59e92d2e209a125f9a026c54392782d9_1422378482_2955_0.jpg,http:///d41d8cd98f00b204e9800998ecf8427e_1422378482_3820_1.','',NULL,'',NULL,'3','1422378482',NULL,'3','??','?????','??'),(47,1,'54321','5','54321','5','http://dq/Public/Upload/20150128/59e92d2e209a125f9a026c54392782d9_1422378539_7419_0.jpg,http://http://dq/Public/Upload/20150128/59e92d2e209a125f9a026c54392782d9_1422378539_7419_0.jpg/d41d8cd98f00b204e9800998ecf8427e_1422378539_1419_1.','',NULL,'',NULL,'5','1422378539',NULL,'5','??','????','?????'),(48,1,'333','33','333','33','http://dq/Public/Upload/20150128/59e92d2e209a125f9a026c54392782d9_1422378636_8834_0.jpg','',NULL,'',NULL,'33','1422378636',NULL,'111111','??','?????','??'),(49,1,'','','','','','',NULL,'','admin','','1423058929',NULL,'','国家','省份、州','地级市、县'),(50,1,'','','','','','',NULL,'&lt;p&gt;123123123123&lt;br/&gt;&lt;/p&gt;','admin','','1423060260',NULL,'','国家','省份、州','地级市、县');
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

-- Dump completed on 2015-02-06 20:03:21
