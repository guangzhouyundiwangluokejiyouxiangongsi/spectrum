-- MySQL dump 10.13  Distrib 5.5.53, for Win32 (AMD64)
--
-- Host: localhost    Database: baike
-- ------------------------------------------------------
-- Server version	5.5.53

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
-- Current Database: `baike`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `baike` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `baike`;

--
-- Table structure for table `yd_advertisement`
--

DROP TABLE IF EXISTS `yd_advertisement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `yd_advertisement` (
  `adv_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '表id',
  `adv_storeid` int(10) unsigned NOT NULL COMMENT '店铺（公司）id',
  `adv_title` varchar(255) NOT NULL COMMENT '广告标题',
  `adv_url` varchar(255) NOT NULL COMMENT '广告链接',
  `adv_status` tinyint(4) NOT NULL COMMENT '广告状态',
  `adv_addtime` int(11) NOT NULL COMMENT '添加时间',
  `adv_endtime` int(11) NOT NULL COMMENT '结束时间',
  PRIMARY KEY (`adv_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `yd_advertisement`
--

LOCK TABLES `yd_advertisement` WRITE;
/*!40000 ALTER TABLE `yd_advertisement` DISABLE KEYS */;
/*!40000 ALTER TABLE `yd_advertisement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `yd_album`
--

DROP TABLE IF EXISTS `yd_album`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `yd_album` (
  `alb_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '表id',
  `alb_storeid` int(10) unsigned NOT NULL COMMENT '店铺（公司）id',
  `alb_title` varchar(255) NOT NULL COMMENT '相册标题',
  `alb_description` varchar(255) NOT NULL COMMENT '相册描述',
  `alb_addtime` int(11) NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`alb_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `yd_album`
--

LOCK TABLES `yd_album` WRITE;
/*!40000 ALTER TABLE `yd_album` DISABLE KEYS */;
INSERT INTO `yd_album` VALUES (1,0,'','',1493019092),(2,0,'','',1493019147),(3,0,'','',1493019181),(4,0,'','',1493019254),(5,0,'','',1493019318),(6,0,'','',1493019356),(7,0,'','',1493019359),(8,0,'','',1493019359),(9,0,'','',1493019360),(10,0,'','',1493019360),(11,0,'','',1493019360),(12,0,'','',1493019394),(13,0,'','',1493019395),(14,0,'','',1493019395),(15,0,'','',1493019396),(16,0,'','',1493019765);
/*!40000 ALTER TABLE `yd_album` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `yd_carousel`
--

DROP TABLE IF EXISTS `yd_carousel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `yd_carousel` (
  `car_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '表id',
  `car_storeid` int(10) unsigned NOT NULL COMMENT '店铺（公司）id',
  `car_imgname` varchar(255) NOT NULL COMMENT '图片名',
  `car_imgpath` varchar(255) NOT NULL COMMENT '图片路径',
  `car_title` varchar(255) NOT NULL COMMENT '标题',
  `car_status` tinyint(4) NOT NULL COMMENT '状态0：禁用，1：启用',
  PRIMARY KEY (`car_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `yd_carousel`
--

LOCK TABLES `yd_carousel` WRITE;
/*!40000 ALTER TABLE `yd_carousel` DISABLE KEYS */;
/*!40000 ALTER TABLE `yd_carousel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `yd_company_info`
--

DROP TABLE IF EXISTS `yd_company_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `yd_company_info` (
  `com_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '表id',
  `com_storeid` int(10) unsigned NOT NULL COMMENT '店铺（公司）id',
  `com_scid` int(11) NOT NULL,
  `com_name` varchar(30) NOT NULL DEFAULT '' COMMENT '公司名',
  `com_url` varchar(255) NOT NULL COMMENT '网址',
  `com_logo` varchar(255) NOT NULL COMMENT '公司logo',
  `com_synopsis` text NOT NULL COMMENT '公司简介',
  `com_content` text NOT NULL COMMENT '公司介绍',
  `com_history` text NOT NULL COMMENT '公司历程',
  `com_service` text NOT NULL COMMENT '公司业务',
  `com_honor` text NOT NULL COMMENT '公司荣誉',
  `com_culture` text NOT NULL COMMENT '公司文化',
  `com_province` varchar(50) NOT NULL COMMENT '省',
  `com_city` varchar(50) NOT NULL COMMENT '市区',
  `com_district` varchar(50) NOT NULL COMMENT '县',
  `com_detailed` varchar(255) NOT NULL COMMENT '详细地址',
  `com_visit` int(11) NOT NULL COMMENT '访问量',
  `com_time` varchar(255) NOT NULL DEFAULT '' COMMENT '添加时间',
  `com_praise` int(11) NOT NULL COMMENT '点赞量',
  PRIMARY KEY (`com_id`),
  UNIQUE KEY `com_storeid` (`com_storeid`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `yd_company_info`
--

LOCK TABLES `yd_company_info` WRITE;
/*!40000 ALTER TABLE `yd_company_info` DISABLE KEYS */;
INSERT INTO `yd_company_info` VALUES (60,532,1,'ada打撒','[\"www.baidu.com\",\"www.baidu.com\",\"www.baidu.com\"]','/CompanyInfo/logo/201704/5900322bbcf52.jpg','<p>啊啊啊&quot;logoajdk&quot;?&gt;@#$%$&quot;拉快速的反击啊路上的s风景,&quot;</p>','','<p>的撒地方</p>','<p>是打发</p>','<p>wqerqwer</p>','<p>wqerqwer</p>','内蒙古自治区','乌海市','乌达区','大丰收',0,'0000-00-00 00:00:00',0),(62,533,1,'阿斯顿发生的法','[\"https:\\/\\/www.baidu.com\"]','/CompanyInfo/logo/201704/59005e9a7c99b.jpg','<p>去去</p>','','<p>qwerqwer</p>','<p>qwerqwer</p>','<p>wqerqwer</p>','<p>wqerqwer</p>','北京市','北京市市辖区','东城区','速度发啊似懂非懂萨芬',0,'1493210224',0),(63,543,1,'asfddsafdfa','[\"https:\\/\\/www.baidu.com\"]','/CompanyInfo/logo/201704/59005e9a7c99b.jpg','<p>去去</p>','','<p>qwerqwer</p>','<p>qwerqwer</p>','<p>wqerqwer</p>','<p>wqerqwer</p>','北京市','北京市市辖区','东城区','',0,'0000-00-00 00:00:00',0);
/*!40000 ALTER TABLE `yd_company_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `yd_image`
--

DROP TABLE IF EXISTS `yd_image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `yd_image` (
  `img_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '表id',
  `img_storeid` int(10) unsigned NOT NULL COMMENT '店铺id(一个公司只有一个相册)',
  `img_title` varchar(255) NOT NULL COMMENT '图片标题',
  `img_description` varchar(255) NOT NULL COMMENT '图片描述',
  `img_path` varchar(255) NOT NULL COMMENT '图片路径+名',
  `img_addtime` int(11) NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`img_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `yd_image`
--

LOCK TABLES `yd_image` WRITE;
/*!40000 ALTER TABLE `yd_image` DISABLE KEYS */;
/*!40000 ALTER TABLE `yd_image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `yd_media`
--

DROP TABLE IF EXISTS `yd_media`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `yd_media` (
  `med_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '表id',
  `med_storeid` int(10) unsigned NOT NULL COMMENT '店铺（公司）id',
  `med_title` varchar(255) NOT NULL COMMENT '新闻标题',
  `med_content` text NOT NULL COMMENT '新闻内容',
  `med_url` varchar(255) NOT NULL COMMENT '网址',
  `med_source` varchar(255) NOT NULL COMMENT '来源',
  `med_isshow` tinyint(4) NOT NULL DEFAULT '1' COMMENT '0:不显示，1：显示',
  `med_img` varchar(255) NOT NULL COMMENT '图片路径加名',
  `med_visit` int(11) NOT NULL COMMENT '访问量',
  `med_praise` int(11) NOT NULL COMMENT '点赞量',
  `med_addtime` int(11) NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`med_id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `yd_media`
--

LOCK TABLES `yd_media` WRITE;
/*!40000 ALTER TABLE `yd_media` DISABLE KEYS */;
INSERT INTO `yd_media` VALUES (90,532,'asdfa','','www.baidu.com','1231231',1,'',0,0,0),(92,532,'阿达','','www.baidu.com','飒飒',1,'',0,0,0),(93,532,'撒旦21342314','','','12211212',1,'',0,0,0),(94,532,'对方噶S阿斯顿','','','asdfa56747',1,'',0,0,0),(98,533,'撒旦法撒点粉','','sdfasdfasdf','asdfadsfa',1,'',0,0,0),(99,533,'asdfa','','https://www.baidu.com','水岸府邸',1,'',0,0,1493207627),(100,533,'asdfa','','https://www.baidu.com','大水法',1,'',0,0,1493207660);
/*!40000 ALTER TABLE `yd_media` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `yd_url`
--

DROP TABLE IF EXISTS `yd_url`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `yd_url` (
  `url_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '表id',
  `url_storeid` int(10) unsigned NOT NULL COMMENT '店铺（公司）id',
  `url_con` varchar(255) NOT NULL COMMENT 'url地址',
  PRIMARY KEY (`url_id`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `yd_url`
--

LOCK TABLES `yd_url` WRITE;
/*!40000 ALTER TABLE `yd_url` DISABLE KEYS */;
INSERT INTO `yd_url` VALUES (1,532,'www'),(2,532,'www222'),(11,0,'123'),(12,0,''),(15,0,''),(19,0,''),(20,0,''),(21,0,'222'),(22,0,'3333'),(23,0,'111'),(24,0,'123'),(25,0,''),(26,0,''),(27,0,''),(28,0,''),(29,0,''),(30,0,''),(31,0,''),(32,0,''),(33,0,''),(34,0,''),(35,0,'www'),(36,0,'www222'),(37,0,'www'),(38,0,'www222'),(39,0,'www'),(40,0,'www222'),(41,0,''),(42,0,''),(43,0,''),(44,0,''),(45,0,''),(46,0,''),(47,0,''),(48,0,''),(49,0,''),(50,0,''),(51,0,''),(52,0,''),(53,0,''),(54,0,''),(55,0,''),(56,0,''),(57,0,''),(58,0,''),(59,0,''),(60,0,''),(61,0,''),(62,0,''),(63,0,''),(64,0,''),(65,0,''),(66,0,''),(67,0,' '),(68,0,'asdfasdfasdf'),(69,0,'dfasdf'),(70,0,'asdfasdfa'),(71,0,'fdsafd');
/*!40000 ALTER TABLE `yd_url` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-04-27 10:41:41
