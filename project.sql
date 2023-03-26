-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: localhost    Database: clean_work
-- ------------------------------------------------------
-- Server version	8.0.32

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `content_manager`
--

DROP TABLE IF EXISTS `content_manager`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `content_manager` (
  `title` varchar(45) NOT NULL,
  `content` mediumtext NOT NULL,
  `page` varchar(45) NOT NULL,
  PRIMARY KEY (`title`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `content_manager`
--

LOCK TABLES `content_manager` WRITE;
/*!40000 ALTER TABLE `content_manager` DISABLE KEYS */;
INSERT INTO `content_manager` VALUES ('Address','Akershusstranda 20, 0150 Oslo, Norway',' Home'),('Company title','Trusted by companies',' Home'),('Email','info@company.com',' Home'),('Good comment title','Happy Customer',' Home'),('Introduction Content 1','<a href=\"#\">Clean Work</a> is a Bootstrap v.5.1.3 HTML CSS template for free download provided by Tooplate. You can use this layout for any purpose. Images are taken from <a rel=\"nofollow\" href=\"https://www.freepik.com/\" target=\"_blank\">FreePik</a> and <a rel=\"nofollow\" href=\"https://worldvectorlogo.com/\" target=\"_blank\">WorldVectorLogo</a> websites.',' Home'),('Introduction Content 2','You <strong>may not</strong> redistribute this template ZIP file on any other template collection website. Please <a href=\"https://www.tooplate.com/contact\" target=\"_blank\">contact us</a> for more info. Thank you.',' Home'),('Introduction Title','Reliable &amp; Fast Cleaning <br> Service<',' Home'),('Phone number','1102209800',' Home'),('Service title','Our best offeres',' Home'),('Slogan','One-Stop Cleaning Service',' Home'),('Working day 1','Mon - Fri',' Home'),('Working day 2','Sat',' Home'),('Working time 1','8:00 AM - 5:30 PM',' Home'),('Working time 2','6:00 AM - 2:30 PM',' Home');
/*!40000 ALTER TABLE `content_manager` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `customer` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` char(10) COLLATE utf8mb4_general_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `rank_id` tinyint NOT NULL DEFAULT '1',
  `password` varchar(64) COLLATE utf8mb4_general_ci NOT NULL,
  `categoryID` tinyint NOT NULL,
  PRIMARY KEY (`id`),
  KEY `rank_id` (`rank_id`),
  KEY `categoryID` (`categoryID`),
  CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`rank_id`) REFERENCES `customer_rank` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `customer_ibfk_2` FOREIGN KEY (`categoryID`) REFERENCES `person_category` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` VALUES (1,'MeoAhihi','viphongly2804@gmail.com','0835607205','2023-02-10 07:04:33',1,'123456',0),(2,'Leo Hoc','luatluukhoa@gmail.com','0778978372','2023-01-10 07:04:33',1,'aaaaaa',1),(3,'Lưu Khoa Học','luatluukhoaa@gmail.com','0897148972','2023-02-10 07:04:33',1,'bbbbbb',2),(5,'Hoc luu khoa','hocluukhoa@gmail.com','0888300779','2023-02-10 07:04:33',1,'',0),(6,'Zinah Beauty & Brow Bar','Zinahbeautyvip@zinah9999.pass','0123333333','2023-02-10 07:04:33',1,'',0),(7,'VP chấm Sữa','dfgwuey@ndfgn.fgdsf','0123258963','2023-02-10 07:04:33',1,'',0);
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer_order`
--

DROP TABLE IF EXISTS `customer_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `customer_order` (
  `id` int NOT NULL AUTO_INCREMENT,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `customer_id` int NOT NULL,
  `service_type_id` int NOT NULL,
  `address` text COLLATE utf8mb4_general_ci NOT NULL,
  `comment` text COLLATE utf8mb4_general_ci,
  `state` tinyint NOT NULL DEFAULT '2',
  PRIMARY KEY (`id`),
  KEY `service_type_id` (`service_type_id`),
  KEY `customer_id` (`customer_id`),
  KEY `state` (`state`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer_order`
--

LOCK TABLES `customer_order` WRITE;
/*!40000 ALTER TABLE `customer_order` DISABLE KEYS */;
INSERT INTO `customer_order` VALUES (18,'2023-02-17 06:03:17',6,1,'asdfasfsdf',NULL,4),(19,'2023-02-17 06:06:08',5,3,'123 binh chanh',NULL,2),(20,'2023-02-17 06:06:31',2,2,'456 hhhhh',NULL,3),(21,'2023-02-17 06:06:51',1,1,'hcm',NULL,5),(22,'2023-02-17 06:07:13',6,4,'616566 uybibh',NULL,6);
/*!40000 ALTER TABLE `customer_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer_rank`
--

DROP TABLE IF EXISTS `customer_rank`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `customer_rank` (
  `id` tinyint NOT NULL AUTO_INCREMENT,
  `type` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `least completed order` int NOT NULL,
  `least money spent` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer_rank`
--

LOCK TABLES `customer_rank` WRITE;
/*!40000 ALTER TABLE `customer_rank` DISABLE KEYS */;
INSERT INTO `customer_rank` VALUES (1,'Bronze',0,0),(2,'Silver',9,3000),(3,'Gold',19,20000),(4,'Diamon',29,50000);
/*!40000 ALTER TABLE `customer_rank` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employee_rank`
--

DROP TABLE IF EXISTS `employee_rank`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `employee_rank` (
  `id` tinyint NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee_rank`
--

LOCK TABLES `employee_rank` WRITE;
/*!40000 ALTER TABLE `employee_rank` DISABLE KEYS */;
INSERT INTO `employee_rank` VALUES (1,'Cleaner'),(2,'Supervisor'),(3,'Manager'),(4,'Director');
/*!40000 ALTER TABLE `employee_rank` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `employees` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` char(10) COLLATE utf8mb4_general_ci NOT NULL,
  `is_free` tinyint(1) NOT NULL DEFAULT '1',
  `rank_id` tinyint NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `rank_id` (`rank_id`),
  CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`rank_id`) REFERENCES `employee_rank` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employees`
--

LOCK TABLES `employees` WRITE;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` VALUES (1,'Leo Liu','0778978372',1,4),(2,'Wind Li','0835607205',1,3),(3,'Nhien Li','0123456789',1,2),(4,'Jessy Fan','0835607205',1,1),(5,'Yoshioka Junko','0516251112',1,1),(6,'Berthold Leitz','0953633124',1,1);
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `history_result`
--

DROP TABLE IF EXISTS `history_result`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `history_result` (
  `id` tinyint(1) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `history_result`
--

LOCK TABLES `history_result` WRITE;
/*!40000 ALTER TABLE `history_result` DISABLE KEYS */;
INSERT INTO `history_result` VALUES (-5,'dis. while in progress'),(-4,'dis. while on the way'),(-3,'disproved when verified'),(-2,'disproved while verifying'),(-1,'disproved'),(0,'not paid'),(1,'finished');
/*!40000 ALTER TABLE `history_result` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_history`
--

DROP TABLE IF EXISTS `order_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `order_history` (
  `id` int NOT NULL,
  `start` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `end` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `customer_id` int NOT NULL,
  `service_type_id` int NOT NULL,
  `address` text COLLATE utf8mb4_general_ci NOT NULL,
  `comment` text COLLATE utf8mb4_general_ci NOT NULL,
  `employee_list` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `result` tinyint(1) NOT NULL DEFAULT '-1',
  PRIMARY KEY (`id`),
  KEY `result` (`result`),
  CONSTRAINT `order_history_ibfk_1` FOREIGN KEY (`result`) REFERENCES `history_result` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_history`
--

LOCK TABLES `order_history` WRITE;
/*!40000 ALTER TABLE `order_history` DISABLE KEYS */;
INSERT INTO `order_history` VALUES (1,'2023-01-11 05:29:07','2023-02-03 15:15:05',1,3,'112 Tùng Thiện Vương, P11, Q8, TPHCM','','1,2,3,4,5,6',-1),(2,'2023-02-03 15:14:12','2023-02-03 15:22:03',2,4,'Bình Chánh','','1,2,3,4,5,6',-1),(3,'2023-01-30 22:33:49','2023-02-03 15:29:18',1,1,'113 Tùng Thiện Vương','','1,2,3',-1),(4,'2023-02-03 15:54:03','2023-02-03 16:06:54',1,2,'asd','','',-1),(5,'2023-01-29 21:24:26','2023-02-03 15:29:25',2,2,'JJCV+J3W, Mỹ Lộc, Cần Giuộc, Long An, Việt Nam','','1,2,3',-1),(6,'2023-01-13 05:40:40','2023-02-03 14:05:40',2,2,'113 Tùng Thiện Vương','','1,2,3',-1),(7,'2023-01-29 21:24:26','2023-02-03 16:33:03',2,2,'JJCV+J3W, Mỹ Lộc, Cần Giuộc, Long An, Việt Nam','','1,2,3',-1),(8,'2023-01-30 22:33:49','2023-02-03 16:33:46',1,1,'113 Tùng Thiện Vương','','',-1),(9,'2023-01-30 22:33:49','2023-02-03 16:35:41',2,2,'113 Tùng Thiện Vương','','1,2,3',-1),(10,'2023-02-03 15:22:34','2023-02-03 15:25:41',1,2,'haha','','1,2,3,4,5,6',-1),(12,'2023-02-03 15:36:00','2023-02-03 15:36:15',2,1,'asd','','1,2,3',-1),(14,'2022-12-06 04:52:39','2023-01-06 04:49:20',6,1,'1261/1/15a Lê Đức Thọ, P13, Q.Gò Vấp, TPHCM','ahihihihihhi','1,2,3',1),(15,'2023-02-06 04:54:30','2023-02-06 04:54:09',1,3,'112 Tùng Thiện Vương, P11, Q8','xe chị lắm, chị tắm cho sâu, kẻo về mẹ mắng','1,2,3',1),(16,'2023-02-06 04:32:33','2023-02-06 04:53:27',7,2,'112 Tùng Thiện Vương, P11, Q8','Đổ cái nồi cháo heo','4,5,6',-1),(17,'2023-02-06 04:35:19','2023-02-09 07:46:13',2,2,'123 Ai Bit Dou, Bình Chánh, TPHCM','Đổ nước nóng, dọn giùm plz','1,2,3',-1);
/*!40000 ALTER TABLE `order_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_state`
--

DROP TABLE IF EXISTS `order_state`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `order_state` (
  `id` tinyint NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_state`
--

LOCK TABLES `order_state` WRITE;
/*!40000 ALTER TABLE `order_state` DISABLE KEYS */;
INSERT INTO `order_state` VALUES (1,'begin'),(2,'verifying'),(3,'verified'),(4,'on_the_way'),(5,'in_progress'),(6,'finished'),(7,'ended');
/*!40000 ALTER TABLE `order_state` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `person_category`
--

DROP TABLE IF EXISTS `person_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `person_category` (
  `id` tinyint NOT NULL AUTO_INCREMENT,
  `type` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `person_category`
--

LOCK TABLES `person_category` WRITE;
/*!40000 ALTER TABLE `person_category` DISABLE KEYS */;
INSERT INTO `person_category` VALUES (0,'customer'),(1,'admin'),(2,'superadmin');
/*!40000 ALTER TABLE `person_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `service_type`
--

DROP TABLE IF EXISTS `service_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `service_type` (
  `id` int NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `price` smallint NOT NULL,
  `duration` tinyint NOT NULL,
  `rating` float NOT NULL DEFAULT '5',
  `subtitle` text COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service_type`
--

LOCK TABLES `service_type` WRITE;
/*!40000 ALTER TABLE `service_type` DISABLE KEYS */;
INSERT INTO `service_type` VALUES (1,'Office Cleaning',820,5,3,'Best Cleaning Service Provider Ipsum dolor sit consectetur kengan','Please tell your friends about Tooplate\'s free HTML templates. Thank you for choosing our templates for your work.  Affordable Service Clean Work is free Bootstrap v.5.1.3 HTML CSS template provided by Tooplate. You can use this layout for a commercial purpose.  Expert Team You are not allowed to redistribute this clean work HTML template\'s downloadable ZIP file on any other template website. Please contact us for more info. Thank you.'),(2,'Kitchen Cleaning',640,4,5,'Best Cleaning Service Provider Ipsum dolor sit consectetur kengan','Please tell your friends about Tooplate\'s free HTML templates. Thank you for choosing our templates for your work.  Affordable Service Clean Work is free Bootstrap v.5.1.3 HTML CSS template provided by Tooplate. You can use this layout for a commercial purpose.  Expert Team You are not allowed to redistribute this clean work HTML template\'s downloadable ZIP file on any other template website. Please contact us for more info. Thank you.'),(3,'Car Washing',240,2,5,'Best Cleaning Service Provider Ipsum dolor sit consectetur kengan','Please tell your friends about Tooplate\'s free HTML templates. Thank you for choosing our templates for your work.  Affordable Service Clean Work is free Bootstrap v.5.1.3 HTML CSS template provided by Tooplate. You can use this layout for a commercial purpose.  Expert Team You are not allowed to redistribute this clean work HTML template\'s downloadable ZIP file on any other template website. Please contact us for more info. Thank you.'),(4,'Factory Cleaning',6800,30,5,'Best Cleaning Service Provider Ipsum dolor sit consectetur kengan','Please tell your friends about Tooplate\'s free HTML templates. Thank you for choosing our templates for your work.  Affordable Service Clean Work is free Bootstrap v.5.1.3 HTML CSS template provided by Tooplate. You can use this layout for a commercial purpose.  Expert Team You are not allowed to redistribute this clean work HTML template\'s downloadable ZIP file on any other template website. Please contact us for more info. Thank you.');
/*!40000 ALTER TABLE `service_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `team`
--

DROP TABLE IF EXISTS `team`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `team` (
  `order_id` int NOT NULL,
  `employee_id` int NOT NULL,
  PRIMARY KEY (`order_id`,`employee_id`),
  KEY `employee_id` (`employee_id`),
  CONSTRAINT `team_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`),
  CONSTRAINT `team_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `customer_order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `team`
--

LOCK TABLES `team` WRITE;
/*!40000 ALTER TABLE `team` DISABLE KEYS */;
/*!40000 ALTER TABLE `team` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'clean_work'
--

--
-- Dumping routines for database 'clean_work'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-03-26 22:55:40
