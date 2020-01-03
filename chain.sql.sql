-- MySQL dump 10.13  Distrib 8.0.16, for Win64 (x86_64)
--
-- Host: localhost    Database: chain
-- ------------------------------------------------------
-- Server version	8.0.16

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brands`
--

LOCK TABLES `brands` WRITE;
/*!40000 ALTER TABLE `brands` DISABLE KEYS */;
INSERT INTO `brands` VALUES (1,'HP'),(2,'Samsung'),(3,'Apple'),(4,'Sony'),(5,'LG'),(6,'Cloth Brand');
/*!40000 ALTER TABLE `brands` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(250) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cart`
--

LOCK TABLES `cart` WRITE;
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Electronics'),(2,'Ladies Wears'),(3,'Mens Wear'),(4,'Kids Wear'),(5,'Furnitures'),(6,'Home Appliances'),(7,'Electronics Gadgets');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `active` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'test',1),(2,'test 2',1);
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company`
--

DROP TABLE IF EXISTS `company`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) NOT NULL,
  `service_charge_value` varchar(255) NOT NULL,
  `vat_charge_value` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `currency` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company`
--

LOCK TABLES `company` WRITE;
/*!40000 ALTER TABLE `company` DISABLE KEYS */;
INSERT INTO `company` VALUES (1,'Mertics (Pvt) Ltd.','','','No.77, Gajaba Place, Off Robert Gunawardena Mawatha, Colombo - 06','+94777140803','Sri Lanka','This is just a testing                  \r\nSecond Line','LKR');
/*!40000 ALTER TABLE `company` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` VALUES (1,'eryaery','wrtyey','wt@gmail.com','1342645762353'),(2,'Test Name','Tet Address ','test@mail.com','347456523634');
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detail_kwitansi`
--

DROP TABLE IF EXISTS `detail_kwitansi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `detail_kwitansi` (
  `id_item` int(11) NOT NULL AUTO_INCREMENT,
  `no_kwitansi` varchar(10) NOT NULL,
  `kode_barang` char(5) NOT NULL,
  `nama_barang` varchar(150) NOT NULL,
  `kuantitas` mediumint(9) NOT NULL,
  `harga_satuan` int(11) NOT NULL,
  PRIMARY KEY (`id_item`),
  KEY `no_kwitansi` (`no_kwitansi`),
  CONSTRAINT `ndx_no_kw` FOREIGN KEY (`no_kwitansi`) REFERENCES `kwitansi` (`no_kwitansi`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detail_kwitansi`
--

LOCK TABLES `detail_kwitansi` WRITE;
/*!40000 ALTER TABLE `detail_kwitansi` DISABLE KEYS */;
INSERT INTO `detail_kwitansi` VALUES (1,'INV.17.001','B.001','Flashdisk 16 Gb',10,60000),(2,'INV.17.001','B.002','Memori Card 8Gb ',20,45000),(3,'INV.17.001','C.001','Monitor LCD 15 in',1,1500000),(4,'INV.17.002','A001','Buku Double Folio',12,5000),(5,'INV.17.002','A002','Buku Gambar A4',12,7000);
/*!40000 ALTER TABLE `detail_kwitansi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(255) NOT NULL,
  `permission` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groups`
--

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` VALUES (1,'Super Administrator','a:28:{i:0;s:10:\"createUser\";i:1;s:10:\"updateUser\";i:2;s:8:\"viewUser\";i:3;s:10:\"deleteUser\";i:4;s:11:\"createGroup\";i:5;s:11:\"updateGroup\";i:6;s:9:\"viewGroup\";i:7;s:11:\"deleteGroup\";i:8;s:14:\"createCustomer\";i:9;s:14:\"updateCustomer\";i:10;s:12:\"viewCustomer\";i:11;s:14:\"deleteCustomer\";i:12;s:14:\"createSupplier\";i:13;s:14:\"updateSupplier\";i:14;s:12:\"viewSupplier\";i:15;s:14:\"deleteSupplier\";i:16;s:13:\"createProduct\";i:17;s:13:\"updateProduct\";i:18;s:11:\"viewProduct\";i:19;s:13:\"deleteProduct\";i:20;s:11:\"createOrder\";i:21;s:11:\"updateOrder\";i:22;s:9:\"viewOrder\";i:23;s:11:\"deleteOrder\";i:24;s:10:\"viewReport\";i:25;s:13:\"updateCompany\";i:26;s:11:\"viewProfile\";i:27;s:13:\"updateSetting\";}'),(9,'w4ter','a:3:{i:0;s:10:\"createUser\";i:1;s:10:\"updateUser\";i:2;s:13:\"updateCompany\";}'),(10,'user','a:6:{i:0;s:8:\"viewUser\";i:1;s:14:\"createCustomer\";i:2;s:14:\"updateCustomer\";i:3;s:12:\"viewCustomer\";i:4;s:12:\"viewSupplier\";i:5;s:11:\"viewProduct\";}');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `invoice`
--

DROP TABLE IF EXISTS `invoice`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `invoice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_time` varchar(45) DEFAULT NULL,
  `customer` varchar(45) DEFAULT NULL,
  `sales_order_no` varchar(45) DEFAULT NULL,
  `total` varchar(45) DEFAULT NULL,
  `paid_status` varchar(45) DEFAULT NULL,
  `user_id` varchar(45) DEFAULT NULL,
  `invoice_no` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `invoice`
--

LOCK TABLES `invoice` WRITE;
/*!40000 ALTER TABLE `invoice` DISABLE KEYS */;
INSERT INTO `invoice` VALUES (1,'1557820194','eryaery',NULL,NULL,'2','1',NULL);
/*!40000 ALTER TABLE `invoice` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `invoice_detail`
--

DROP TABLE IF EXISTS `invoice_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `invoice_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sales_order_no` varchar(45) DEFAULT NULL,
  `product_id` varchar(45) DEFAULT NULL,
  `quantity` varchar(45) DEFAULT NULL,
  `price` varchar(45) DEFAULT NULL,
  `amount` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `invoice_detail`
--

LOCK TABLES `invoice_detail` WRITE;
/*!40000 ALTER TABLE `invoice_detail` DISABLE KEYS */;
INSERT INTO `invoice_detail` VALUES (1,NULL,'Youghut','100','100','12000.00'),(2,NULL,'Youghut','100','1000','12000.00'),(3,NULL,'Youghut','100','1000','6000.00'),(4,NULL,'Youghut','300','1000','6000.00'),(5,NULL,'Jelly','100','1000','18000.00'),(6,NULL,'Jelly','1000','1000','12000.00'),(7,NULL,'Youghut','350','1000','6000.00');
/*!40000 ALTER TABLE `invoice_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kwitansi`
--

DROP TABLE IF EXISTS `kwitansi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `kwitansi` (
  `no_kwitansi` varchar(10) NOT NULL,
  `tgl_kwitansi` date NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `alamat_pelanggan` varchar(200) NOT NULL,
  PRIMARY KEY (`no_kwitansi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kwitansi`
--

LOCK TABLES `kwitansi` WRITE;
/*!40000 ALTER TABLE `kwitansi` DISABLE KEYS */;
INSERT INTO `kwitansi` VALUES ('INV.17.001','2017-12-29','Oya Suryana','Jalan Cut Nyak Dien\nCijoho - Kuningan \nJawa Barat'),('INV.17.002','2017-12-28','Rika Widianingsih, S.Pd.','Cijoho\r\nKuningan\r\nJawa barat');
/*!40000 ALTER TABLE `kwitansi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `materials`
--

DROP TABLE IF EXISTS `materials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `materials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `unit` varchar(45) DEFAULT NULL,
  `reorderlevel` int(11) DEFAULT NULL,
  `price` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `materials`
--

LOCK TABLES `materials` WRITE;
/*!40000 ALTER TABLE `materials` DISABLE KEYS */;
INSERT INTO `materials` VALUES (13,'Tar','Raw Material','Kg',40,'255.5'),(14,'Youghut Cup','Raw Material','g',500,'450.50'),(15,'Test Large Material Name','Raw Material','Kg',300,'275.0'),(16,'Test Packing Material','Packing Material','Pieces',120,'1200');
/*!40000 ALTER TABLE `materials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_items`
--

DROP TABLE IF EXISTS `order_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `order_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_items`
--

LOCK TABLES `order_items` WRITE;
/*!40000 ALTER TABLE `order_items` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bill_no` varchar(255) NOT NULL,
  `date_time` varchar(255) NOT NULL,
  `gross_amount` varchar(255) NOT NULL,
  `service_charge_rate` varchar(255) NOT NULL,
  `service_charge_amount` varchar(255) NOT NULL,
  `vat_charge_rate` varchar(255) NOT NULL,
  `vat_charge_amount` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `net_amount` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `table_id` int(11) NOT NULL,
  `paid_status` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `unit` varchar(45) DEFAULT NULL,
  `reorderlevel` varchar(45) DEFAULT NULL,
  `price` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (3,'Youghut','Pieces','120','30'),(4,'Jelly','Pieces','100','200');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `purchase`
--

DROP TABLE IF EXISTS `purchase`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `purchase` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_time` varchar(45) DEFAULT NULL,
  `supplier` varchar(45) DEFAULT NULL,
  `no` varchar(45) DEFAULT NULL,
  `total` varchar(45) DEFAULT NULL,
  `paid_status` varchar(45) DEFAULT NULL,
  `user_id` varchar(45) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=110 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `purchase`
--

LOCK TABLES `purchase` WRITE;
/*!40000 ALTER TABLE `purchase` DISABLE KEYS */;
INSERT INTO `purchase` VALUES (3,'1556772089','eefe','0',NULL,'2','1',NULL),(4,'1556772221','eefe','0',NULL,'2','1',NULL),(7,'1556772572','wdwdwd','0',NULL,'2','1',NULL),(11,'03/05/2014','Test','1',NULL,'paid','1','GRN'),(12,NULL,'Test','2',NULL,'paid','1','Purchase Order'),(13,NULL,'Test','3',NULL,'paid','1','Purchase Order'),(15,NULL,NULL,'4',NULL,'paid','1','Purchase Order'),(16,NULL,NULL,'5',NULL,'paid','1','Purchase Order'),(17,NULL,NULL,'6',NULL,'paid','1','Purchase Order'),(18,NULL,NULL,'7',NULL,'paid','1','Purchase Order'),(19,NULL,NULL,'8',NULL,'paid','1','Purchase Order'),(20,NULL,NULL,'9',NULL,'paid','1','Purchase Order'),(21,NULL,NULL,'10',NULL,'paid','1','Purchase Order'),(22,NULL,NULL,'11',NULL,'paid','1','Purchase Order'),(23,NULL,NULL,'12',NULL,'paid','1','Purchase Order'),(24,NULL,NULL,'13',NULL,'paid','1','Purchase Order'),(25,NULL,NULL,'14',NULL,'paid','1','Purchase Order'),(26,NULL,NULL,'15',NULL,'paid','1','Purchase Order'),(27,NULL,NULL,'16',NULL,'paid','1','Purchase Order'),(28,NULL,NULL,'17',NULL,'paid','1','Purchase Order'),(29,NULL,NULL,'18',NULL,'paid','1','Purchase Order'),(30,NULL,NULL,'19',NULL,'paid','1','Purchase Order'),(31,NULL,NULL,'20',NULL,'paid','1','Purchase Order'),(32,NULL,NULL,'21',NULL,'paid','1','Purchase Order'),(33,NULL,NULL,'22',NULL,'paid','1','Purchase Order'),(34,NULL,NULL,'23',NULL,'paid','1','Purchase Order'),(35,NULL,NULL,'24',NULL,'paid','1','Purchase Order'),(36,NULL,NULL,'25',NULL,'paid','1','Purchase Order'),(37,NULL,NULL,'26',NULL,'paid','1','Purchase Order'),(38,NULL,NULL,'27',NULL,'paid','1','Purchase Order'),(39,NULL,NULL,'28',NULL,'paid','1','Purchase Order'),(40,NULL,NULL,'29',NULL,'paid','1','Purchase Order'),(41,NULL,NULL,'30',NULL,'paid','1','Purchase Order'),(42,NULL,NULL,'31',NULL,'paid','1','Purchase Order'),(43,NULL,NULL,'32',NULL,'paid','1','Purchase Order'),(44,NULL,NULL,'33',NULL,'paid','1','Purchase Order'),(46,NULL,NULL,'34',NULL,'paid','1','Purchase Order'),(47,NULL,NULL,'35',NULL,'paid','1','Purchase Order'),(48,NULL,NULL,'36',NULL,'paid','1','Purchase Order'),(49,NULL,NULL,'37',NULL,'paid','1','Purchase Order'),(50,NULL,NULL,'38',NULL,'paid','1','Purchase Order'),(51,NULL,NULL,'39',NULL,'paid','1','Purchase Order'),(52,NULL,NULL,'40',NULL,'paid','1','Purchase Order'),(53,NULL,NULL,'41',NULL,'paid','1','Purchase Order'),(54,NULL,NULL,'42',NULL,'paid','1','Purchase Order'),(55,NULL,NULL,'43',NULL,'paid','1','Purchase Order'),(56,NULL,NULL,'44',NULL,'paid','1','Purchase Order'),(57,NULL,NULL,'45',NULL,'paid','1','Purchase Order'),(58,NULL,NULL,'46',NULL,'paid','1','Purchase Order'),(59,NULL,NULL,'47',NULL,'paid','1','Purchase Order'),(60,NULL,NULL,'48',NULL,'paid','1','Purchase Order'),(61,NULL,NULL,'49',NULL,'paid','1','Purchase Order'),(62,NULL,NULL,'50',NULL,'paid','1','Purchase Order'),(63,NULL,NULL,'51',NULL,'paid','1','Purchase Order'),(64,NULL,NULL,'52',NULL,'paid','1','Purchase Order'),(65,NULL,NULL,'53',NULL,'paid','1','Purchase Order'),(66,NULL,NULL,'54',NULL,'paid','1','Purchase Order'),(67,NULL,NULL,'55',NULL,'paid','1','Purchase Order'),(68,NULL,NULL,'56',NULL,'paid','1','Purchase Order'),(69,NULL,NULL,'57',NULL,'paid','1','Purchase Order'),(70,NULL,NULL,'58',NULL,'paid','1','Purchase Order'),(71,NULL,NULL,'59',NULL,'paid','1','Purchase Order'),(72,NULL,NULL,'60',NULL,'paid','1','Purchase Order'),(73,NULL,NULL,'61',NULL,'paid','1','Purchase Order'),(74,NULL,NULL,'62',NULL,'paid','1','Purchase Order'),(75,NULL,NULL,'63',NULL,'paid','1','Purchase Order'),(76,NULL,NULL,'64',NULL,'paid','1','Purchase Order'),(77,NULL,NULL,'65',NULL,'paid','1','Purchase Order'),(78,NULL,NULL,'66',NULL,'paid','1','Purchase Order'),(79,NULL,NULL,'67',NULL,'paid','1','Purchase Order'),(80,NULL,NULL,'68',NULL,'paid','1','Purchase Order'),(81,NULL,NULL,'69',NULL,'paid','1','Purchase Order'),(82,NULL,NULL,'70',NULL,'paid','1','Purchase Order'),(83,NULL,NULL,'71',NULL,'paid','1','Purchase Order'),(84,NULL,NULL,'72',NULL,'paid','1','Purchase Order'),(85,NULL,NULL,'73',NULL,'paid','1','Purchase Order'),(86,NULL,NULL,'74',NULL,'paid','1','Purchase Order'),(87,NULL,NULL,'75',NULL,'paid','1','Purchase Order'),(88,NULL,NULL,'76',NULL,'paid','1','Purchase Order'),(89,NULL,NULL,'77',NULL,'paid','1','Purchase Order'),(90,NULL,NULL,'78',NULL,'paid','1','Purchase Order'),(91,NULL,NULL,'79',NULL,'paid','1','Purchase Order'),(92,NULL,NULL,'80',NULL,'paid','1','Purchase Order'),(93,NULL,NULL,'81',NULL,'paid','1','Purchase Order'),(94,NULL,NULL,'82',NULL,'paid','1','Purchase Order'),(95,NULL,NULL,'83',NULL,'paid','1','Purchase Order'),(96,NULL,NULL,'84',NULL,'paid','1','Purchase Order'),(97,NULL,NULL,'85',NULL,'paid','1','Purchase Order'),(98,NULL,NULL,'86',NULL,'paid','1','Purchase Order'),(99,NULL,NULL,'87',NULL,'paid','1','Purchase Order'),(100,NULL,NULL,'88',NULL,'paid','1','Purchase Order'),(101,NULL,NULL,'89',NULL,'paid','1','Purchase Order'),(102,NULL,NULL,'90',NULL,'paid','1','Purchase Order'),(103,NULL,NULL,'91',NULL,'paid','1','Purchase Order'),(104,NULL,NULL,'92',NULL,'paid','1','Purchase Order'),(105,NULL,'Test','93',NULL,'paid','1','Purchase Order'),(106,NULL,'Test','94',NULL,'paid','1','Purchase Order'),(107,NULL,'Test','95',NULL,'paid','1','Purchase Order'),(108,NULL,'Test','96',NULL,'paid','1','Purchase Order'),(109,NULL,'Test','97',NULL,'paid','1','Purchase Order');
/*!40000 ALTER TABLE `purchase` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `purchase_detail`
--

DROP TABLE IF EXISTS `purchase_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `purchase_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `purchase_order_no` varchar(45) DEFAULT NULL,
  `material_id` varchar(45) DEFAULT NULL,
  `quantity` varchar(45) DEFAULT NULL,
  `price` varchar(45) DEFAULT NULL,
  `amount` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `purchase_detail`
--

LOCK TABLES `purchase_detail` WRITE;
/*!40000 ALTER TABLE `purchase_detail` DISABLE KEYS */;
INSERT INTO `purchase_detail` VALUES (1,'0','Test Large Material Name','100','1000',NULL),(2,'0','Test Large Material Name','100','1000',NULL),(3,'0','Youghut Cup','100','1000',NULL),(4,'0','Test Large Material Name','5','1000',NULL),(5,'0','Test Large Material Name','100','1000',NULL),(6,'0','Test Large Material Name','100','1000',NULL),(7,'0','Youghut Cup','100','1000',NULL),(8,'0','Test Packing Material','5','100',NULL),(9,'','Test Packing Material','100','100',NULL),(10,'1','Test Packing Material','2','1000',NULL),(11,'1','Test Packing Material','100','1000',NULL),(12,'1','Test Packing Material','100','1000',NULL),(13,'1','Test Packing Material','100','1000',NULL),(14,'','Test Packing Material','100','1000','12000.00');
/*!40000 ALTER TABLE `purchase_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `purchase_order`
--

DROP TABLE IF EXISTS `purchase_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `purchase_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_time` varchar(45) DEFAULT NULL,
  `vendor` varchar(45) DEFAULT NULL,
  `purchase_order_no` varchar(45) DEFAULT NULL,
  `total` double DEFAULT NULL,
  `paid_status` varchar(45) DEFAULT NULL,
  `user_id` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `purchase_order`
--

LOCK TABLES `purchase_order` WRITE;
/*!40000 ALTER TABLE `purchase_order` DISABLE KEYS */;
INSERT INTO `purchase_order` VALUES (1,'1556501273','Pvt Ltd.','0',NULL,'2','1'),(2,'1556501361','Pvt Ltd.','0',NULL,'2','1'),(3,'1556501517','Pvt Ltd.','0',NULL,'2','1'),(4,'1556501775','Ilham','0',NULL,'2','1'),(5,'1556694802','Ilham','0',NULL,'2','1');
/*!40000 ALTER TABLE `purchase_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `purchase_order_detail`
--

DROP TABLE IF EXISTS `purchase_order_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `purchase_order_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `purchase_order_no` varchar(45) DEFAULT NULL,
  `material_id` varchar(45) DEFAULT NULL,
  `quantity` varchar(45) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `amount` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `purchase_order_detail`
--

LOCK TABLES `purchase_order_detail` WRITE;
/*!40000 ALTER TABLE `purchase_order_detail` DISABLE KEYS */;
INSERT INTO `purchase_order_detail` VALUES (1,'0',NULL,'100',1000,12000),(2,'0',NULL,'300',1000,12000),(3,'0',NULL,'100',100,12000),(4,'0',NULL,'2',1000,12000),(5,'0',NULL,'100',1000,12000),(6,'0','14','2',1000,5000);
/*!40000 ALTER TABLE `purchase_order_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quotation`
--

DROP TABLE IF EXISTS `quotation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `quotation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_time` varchar(45) DEFAULT NULL,
  `customer` varchar(45) DEFAULT NULL,
  `total` varchar(45) DEFAULT NULL,
  `user_id` varchar(45) DEFAULT NULL,
  `quotation_id` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quotation`
--

LOCK TABLES `quotation` WRITE;
/*!40000 ALTER TABLE `quotation` DISABLE KEYS */;
INSERT INTO `quotation` VALUES (1,'1556778556','qeeret',NULL,'1','0'),(2,'1557838379','eryaery',NULL,'1','0'),(3,'1557842430','eryaery',NULL,'1','0');
/*!40000 ALTER TABLE `quotation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quotation_detail`
--

DROP TABLE IF EXISTS `quotation_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `quotation_detail` (
  `id` int(11) NOT NULL,
  `product_id` varchar(45) DEFAULT NULL,
  `quantity` varchar(45) DEFAULT NULL,
  `price` varchar(45) DEFAULT NULL,
  `amount` varchar(45) DEFAULT NULL,
  `quotation_id` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quotation_detail`
--

LOCK TABLES `quotation_detail` WRITE;
/*!40000 ALTER TABLE `quotation_detail` DISABLE KEYS */;
INSERT INTO `quotation_detail` VALUES (0,'Jelly','100','1000',NULL,'0');
/*!40000 ALTER TABLE `quotation_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sales`
--

DROP TABLE IF EXISTS `sales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `sales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_time` varchar(45) DEFAULT NULL,
  `customer` varchar(45) DEFAULT NULL,
  `no` varchar(45) DEFAULT NULL,
  `total` varchar(45) DEFAULT NULL,
  `paid_status` varchar(45) DEFAULT NULL,
  `user_id` varchar(45) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `due_date` varchar(45) DEFAULT NULL,
  `delivery_address` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=136 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sales`
--

LOCK TABLES `sales` WRITE;
/*!40000 ALTER TABLE `sales` DISABLE KEYS */;
INSERT INTO `sales` VALUES (22,'05/15/2019','eryaery','1000',NULL,'paid','1','Sales Receipt',NULL,NULL),(27,'03/03/2014','eryaery','1001',NULL,'paid','1','Sales Receipt',NULL,NULL),(30,'03/04/2014','eryaery','1003',NULL,'paid','1','Sales Receipt',NULL,NULL),(31,NULL,'eryaery','1004',NULL,'pending','1','Quotation',NULL,NULL),(32,'03/04/2014','eryaery','1005',NULL,'pending','1','Invoice','03/04/2014',NULL),(33,'03/04/2014',NULL,'1006',NULL,'pending','1','Invoice','03/04/2014',NULL),(37,'03/04/2014','Test Name',NULL,'13500','closed','1','Payment',NULL,NULL),(39,'03/04/2014','Test Name','1007',NULL,'paid','1','Sales Receipt',NULL,NULL),(40,'03/04/2014','Test Name','1008',NULL,'pending','1','Sales Order',NULL,NULL),(134,'03/02/2014','Test Name','1009','4778','pending','1','Sales Order',NULL,NULL);
/*!40000 ALTER TABLE `sales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sales_detail`
--

DROP TABLE IF EXISTS `sales_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `sales_detail` (
  `id` int(11) NOT NULL,
  `sales_order_no` varchar(45) DEFAULT NULL,
  `product_id` varchar(45) DEFAULT NULL,
  `quantity` varchar(45) DEFAULT NULL,
  `price` varchar(45) DEFAULT NULL,
  `amount` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sales_detail`
--

LOCK TABLES `sales_detail` WRITE;
/*!40000 ALTER TABLE `sales_detail` DISABLE KEYS */;
INSERT INTO `sales_detail` VALUES (0,'1','Youghut','5','1000',NULL);
/*!40000 ALTER TABLE `sales_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sales_order`
--

DROP TABLE IF EXISTS `sales_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `sales_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_time` varchar(45) DEFAULT NULL,
  `customer` varchar(45) DEFAULT NULL,
  `sales_order_no` varchar(45) DEFAULT NULL,
  `total` varchar(45) DEFAULT NULL,
  `paid_status` varchar(45) DEFAULT NULL,
  `user_id` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sales_order`
--

LOCK TABLES `sales_order` WRITE;
/*!40000 ALTER TABLE `sales_order` DISABLE KEYS */;
INSERT INTO `sales_order` VALUES (1,'1556599317','Pvt Ltd.','0',NULL,'2','1'),(2,'1556599350','Pvt Ltd.','0',NULL,'2','1'),(3,'1556599378','Pvt Ltd.','0',NULL,'2','1'),(4,'1556694842','Pvt Ltd.','0',NULL,'2','1'),(5,'1556793296','Ilham Safeek','0',NULL,'2','1');
/*!40000 ALTER TABLE `sales_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sales_order_detail`
--

DROP TABLE IF EXISTS `sales_order_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `sales_order_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sales_order_no` varchar(45) DEFAULT NULL,
  `product_id` varchar(45) DEFAULT NULL,
  `quantity` varchar(45) DEFAULT NULL,
  `price` varchar(45) DEFAULT NULL,
  `amount` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sales_order_detail`
--

LOCK TABLES `sales_order_detail` WRITE;
/*!40000 ALTER TABLE `sales_order_detail` DISABLE KEYS */;
INSERT INTO `sales_order_detail` VALUES (1,'0','3','100','100','5000'),(2,'0','3','100','100','12000.00'),(3,'0','4','100','1000','5000');
/*!40000 ALTER TABLE `sales_order_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stores`
--

DROP TABLE IF EXISTS `stores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `stores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `active` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stores`
--

LOCK TABLES `stores` WRITE;
/*!40000 ALTER TABLE `stores` DISABLE KEYS */;
INSERT INTO `stores` VALUES (1,'Trincomalee',1);
/*!40000 ALTER TABLE `stores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `supplier_review`
--

DROP TABLE IF EXISTS `supplier_review`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `supplier_review` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_time` varchar(45) DEFAULT NULL,
  `review` varchar(2500) DEFAULT NULL,
  `source` varchar(255) DEFAULT NULL,
  `supplier_id` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supplier_review`
--

LOCK TABLES `supplier_review` WRITE;
/*!40000 ALTER TABLE `supplier_review` DISABLE KEYS */;
INSERT INTO `supplier_review` VALUES (13,'04:26 pm 05.05.2019',' Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s. Over the years, sometimes by accident, sometimes on purpose (injected humour and the like). ','Cource Test','8'),(15,'04:31 pm 05.05.2019',' Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s. Over the years, sometimes by accident, sometimes on purpose (injected humour and the like).   Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s. Over the years, sometimes by accident, sometimes on purpose (injected humour and the like).   Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s. Over the years, sometimes by accident, sometimes on purpose (injected humour and the like). ','Long Test','8'),(16,'01:22 pm 06.05.2019',' Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s. Over the years, sometimes by accident, sometimes on purpose (injected humour and the like). ','Test Source','8'),(17,'04:00 pm 18.05.2019',' rw4t424t24t  ewrwrw4rw4r                                     ','eqerwrw4','1');
/*!40000 ALTER TABLE `supplier_review` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `supplier_sample`
--

DROP TABLE IF EXISTS `supplier_sample`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `supplier_sample` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `supplier_id` varchar(45) DEFAULT NULL,
  `item` varchar(45) DEFAULT NULL,
  `date_time` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `note` varchar(2500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supplier_sample`
--

LOCK TABLES `supplier_sample` WRITE;
/*!40000 ALTER TABLE `supplier_sample` DISABLE KEYS */;
INSERT INTO `supplier_sample` VALUES (1,'8',NULL,'10:44 am 06.05.2019',NULL,NULL),(2,'8','Test Item','10:46 am 06.05.2019','requested','Test Sample Note'),(3,'8','Test Item','10:46 am 06.05.2019','Requested','Test Sample Note'),(4,'8','Test Item','10:47 am 06.05.2019','Requested',' Lorem Ipsum is simply dummy text of the prin'),(5,'8','Test Item','10:47 am 06.05.2019','Requested',' Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s. Over the years, sometimes by accident, sometimes on purpose (injected humour and the like). '),(6,'8','Another Test item','05:48 pm 09.05.2019','Requested','Another Test Note'),(7,'1','Sample','03:59 pm 18.05.2019','Requested','wetwtawrtarwter');
/*!40000 ALTER TABLE `supplier_sample` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `suppliers`
--

DROP TABLE IF EXISTS `suppliers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `suppliers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `web` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `tags` varchar(45) DEFAULT NULL,
  `source` varchar(45) DEFAULT NULL,
  `overview` varchar(2500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `suppliers`
--

LOCK TABLES `suppliers` WRITE;
/*!40000 ALTER TABLE `suppliers` DISABLE KEYS */;
INSERT INTO `suppliers` VALUES (1,'Test','Test Address','mail@gmail.com','463476784746858','wrw.com','review',NULL,'qrqerqere','qerqrqwrqer     ');
/*!40000 ALTER TABLE `suppliers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tables`
--

DROP TABLE IF EXISTS `tables`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tables` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `table_name` varchar(255) NOT NULL,
  `capacity` varchar(255) NOT NULL,
  `available` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tables`
--

LOCK TABLES `tables` WRITE;
/*!40000 ALTER TABLE `tables` DISABLE KEYS */;
/*!40000 ALTER TABLE `tables` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `task`
--

DROP TABLE IF EXISTS `task`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `task` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(1000) DEFAULT NULL,
  `ingredients` varchar(1000) DEFAULT NULL,
  `production` varchar(1000) DEFAULT NULL,
  `date_time_issued` varchar(45) DEFAULT NULL,
  `date_time_completed` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `damage` varchar(1000) DEFAULT NULL,
  `return_materials` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `task`
--

LOCK TABLES `task` WRITE;
/*!40000 ALTER TABLE `task` DISABLE KEYS */;
INSERT INTO `task` VALUES (16,'yeah','{\"16\":\"100\",\"15\":\"200\"}','','','','todo','',''),(21,'success Test','{\"16\":\"100\",\"15\":\"200\"}','{\"2\":\"200\"}','08:56 pm 17.04.2019','02:57 am 18.04.2019','completed',NULL,'{\"16\":\"120\"}'),(54,'Testing','{\"16\":\"300\"}','','02:02 am 18.04.2019','','progress','',''),(59,'Produce a product','{\"14\":\"1200\"}','{\"Youghut\":\"200\"}','04:05 pm 18.04.2019','09:38 am 23.04.2019','completed','{\"Youghut\":\"20\"}','{\"Test Packing Material\":\"120\"}'),(60,'asrtrse','{\"14\":\"300\"}','','08:31 am 24.04.2019','','progress','',''),(69,'Product Name Test','{\"Test Packing Material\":\"100\",\"Youghut Cup\":\"200\"}','','08:35 am 24.04.2019','','progress','',''),(70,'New Test','{\"Youghut Cup\":\"5000\"}','','','','todo','','');
/*!40000 ALTER TABLE `task` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_group`
--

DROP TABLE IF EXISTS `user_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `user_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_group`
--

LOCK TABLES `user_group` WRITE;
/*!40000 ALTER TABLE `user_group` DISABLE KEYS */;
INSERT INTO `user_group` VALUES (1,1,1),(7,6,7),(8,7,5),(9,7,5),(10,8,7),(11,2,9);
/*!40000 ALTER TABLE `user_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gender` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','$2y$10$yfi5nUQGXUZtMdl27dWAyOd/jMOmATBpiUvJDmUu9hJ5Ro6BE5wsK','admin@admin.com','john','doe','80789998',1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `v_invoice`
--

DROP TABLE IF EXISTS `v_invoice`;
/*!50001 DROP VIEW IF EXISTS `v_invoice`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8mb4;
/*!50001 CREATE VIEW `v_invoice` AS SELECT 
 1 AS `no_kwitansi`,
 1 AS `tgl_kwitansi`,
 1 AS `nama_pelanggan`,
 1 AS `alamat_pelanggan`,
 1 AS `id_item`,
 1 AS `kode_barang`,
 1 AS `nama_barang`,
 1 AS `kuantitas`,
 1 AS `harga_satuan`,
 1 AS `total_bayar`*/;
SET character_set_client = @saved_cs_client;

--
-- Final view structure for view `v_invoice`
--

/*!50001 DROP VIEW IF EXISTS `v_invoice`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_invoice` AS select `kwitansi`.`no_kwitansi` AS `no_kwitansi`,`kwitansi`.`tgl_kwitansi` AS `tgl_kwitansi`,`kwitansi`.`nama_pelanggan` AS `nama_pelanggan`,`kwitansi`.`alamat_pelanggan` AS `alamat_pelanggan`,`detail_kwitansi`.`id_item` AS `id_item`,`detail_kwitansi`.`kode_barang` AS `kode_barang`,`detail_kwitansi`.`nama_barang` AS `nama_barang`,`detail_kwitansi`.`kuantitas` AS `kuantitas`,`detail_kwitansi`.`harga_satuan` AS `harga_satuan`,(`detail_kwitansi`.`kuantitas` * `detail_kwitansi`.`harga_satuan`) AS `total_bayar` from (`kwitansi` join `detail_kwitansi` on((`detail_kwitansi`.`no_kwitansi` = `kwitansi`.`no_kwitansi`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-01-02 11:22:59
