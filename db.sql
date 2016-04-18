-- MySQL dump 10.13  Distrib 5.5.47, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: linkfenixdb
-- ------------------------------------------------------
-- Server version	5.5.47-0ubuntu0.14.04.1

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
-- Table structure for table `casts`
--

DROP TABLE IF EXISTS `casts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `casts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `casts`
--

LOCK TABLES `casts` WRITE;
/*!40000 ALTER TABLE `casts` DISABLE KEYS */;
INSERT INTO `casts` VALUES (1,'jm','2016-04-07 00:00:00'),(2,'jino','2016-04-07 00:00:00'),(3,'ado','2016-04-07 00:00:00'),(4,'Test','2016-04-07 00:00:00'),(5,'elmer','2016-04-07 00:00:00'),(6,'jordan','2016-04-07 00:00:00'),(7,'rhea','2016-04-07 00:00:00'),(8,'dada','2016-04-07 00:00:00');
/*!40000 ALTER TABLE `casts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `episodes`
--

DROP TABLE IF EXISTS `episodes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `episodes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `season_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ecode` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `releasedate` date NOT NULL,
  `duration` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL COMMENT 'content image for episodes',
  `fimage` varchar(255) NOT NULL COMMENT 'featured image',
  `imdb` varchar(255) NOT NULL COMMENT 'imdb for episodes',
  `clicked` int(2) NOT NULL DEFAULT '0' COMMENT '0 = default , 1 = visited',
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `episodes`
--

LOCK TABLES `episodes` WRITE;
/*!40000 ALTER TABLE `episodes` DISABLE KEYS */;
INSERT INTO `episodes` VALUES (8,14,'episode 1','e1','The revenge of test','Crane and Abbie need to cooperate with their most detested foes when a supernatural event shocks the witnesses. Joe and Jenny try to restore their relationship...','2016-03-28','45 min','http://ia.media-imdb.com/images/M/MV5BMTc4MzkwMjY5NF5BMl5BanBnXkFtZTgwNDY5Mzk4NjE@._V1_UY268_CR16,0,182,268_AL_.jpg','http://neliosoftware.com/wp-content/uploads/2014/05/smile.jpg','http://www.imdb.com/title/tt4538234/',1,'2016-04-07 05:44:15'),(9,15,'episode 2','e2','The test comes back','Crane and Abbie need to cooperate with their most detested foes when a supernatural event shocks the witnesses. Joe and Jenny try to restore their relationship...','2016-03-28','30 min','http://ia.media-imdb.com/images/M/MV5BMjM4MTg1OTg1MV5BMl5BanBnXkFtZTgwODc4ODIzODE@._V1_UY268_CR109,0,182,268_AL_.jpg','http://neliosoftware.com/wp-content/uploads/2014/05/smile.jpg','http://www.imdb.com/title/tt4538234/',1,'2016-04-07 08:06:30'),(10,16,'episode 3','e3','Test is comes back again','Crane and Abbie need to cooperate with their most detested foes when a supernatural event shocks the witnesses. Joe and Jenny try to restore their relationship...','2016-03-28','20 min','http://ia.media-imdb.com/images/M/MV5BMTUxNjQyMTc2OV5BMl5BanBnXkFtZTgwNDgxOTIzODE@._V1_UY268_CR99,0,182,268_AL_.jpg','http://neliosoftware.com/wp-content/uploads/2014/05/smile.jpg','http://www.imdb.com/title/tt4538234/',0,'2016-04-07 08:06:30'),(11,17,'episode 4','e4','The defeat of test','Crane and Abbie need to cooperate with their most detested foes when a supernatural event shocks the witnesses. Joe and Jenny try to restore their relationship...','2016-03-28','10 min','http://ia.media-imdb.com/images/M/MV5BMjA0MTg2NjA0OF5BMl5BanBnXkFtZTgwMTM0NDMyODE@._V1_UY268_CR104,0,182,268_AL_.jpg','http://neliosoftware.com/wp-content/uploads/2014/05/smile.jpg','http://www.imdb.com/title/tt4538234/',0,'2016-04-07 08:06:30'),(12,18,'episode 5','e5','The adventure of test','Crane and Abbie need to cooperate with their most detested foes when a supernatural event shocks the witnesses. Joe and Jenny try to restore their relationship...','2016-03-28','30 min','http://ia.media-imdb.com/images/M/MV5BMzMxOTU5MTM1NF5BMl5BanBnXkFtZTgwNzU2NTkwNzE@._V1_UY268_CR110,0,182,268_AL_.jpg','http://neliosoftware.com/wp-content/uploads/2014/05/smile.jpg','http://www.imdb.com/title/tt4538234/',0,'2016-04-07 08:06:30'),(13,19,'episode 66','e6','The test failures','Crane and Abbie need to cooperate with their most detested foes when a supernatural event shocks the witnesses. Joe and Jenny try to restore their relationship...','2016-03-28','11 min','http://ia.media-imdb.com/images/M/MV5BNDI1NTQ0Nzk5Nl5BMl5BanBnXkFtZTgwODU4ODExNzE@._V1_UY268_CR87,0,182,268_AL_.jpg','http://neliosoftware.com/wp-content/uploads/2014/05/smile.jpg','http://www.imdb.com/title/tt4538234/',0,'2016-04-07 08:06:30'),(14,20,'episode 7','e7','The deatch of test','Crane and Abbie need to cooperate with their most detested foes when a supernatural event shocks the witnesses. Joe and Jenny try to restore their relationship...','2016-03-28','25 min','http://ia.media-imdb.com/images/M/MV5BMjI0NzMwOTI1MV5BMl5BanBnXkFtZTgwOTk4MTk4NjE@._V1_UY268_CR109,0,182,268_AL_.jpg','http://neliosoftware.com/wp-content/uploads/2014/05/smile.jpg','http://www.imdb.com/title/tt4538234/',0,'2016-04-07 08:06:30'),(15,21,'episode 23','e1','the childhood of the star','Crane and Abbie need to cooperate with their most detested foes when a supernatural event shocks the witnesses. Joe and Jenny try to restore their relationship...','2016-04-01','23 min','http://ia.media-imdb.com/images/M/MV5BNTEyMjAwMDU1OV5BMl5BanBnXkFtZTcwNDQyNTkxMw@@._V1_UY268_CR0,0,182,268_AL_.jpg','http://neliosoftware.com/wp-content/uploads/2014/05/smile.jpg','http://www.imdb.com/title/tt4538234/',0,'2016-04-07 08:06:30'),(16,22,'episode 1','e1','the episode sample','Crane and Abbie need to cooperate with their most detested foes when a supernatural event shocks the witnesses. Joe and Jenny try to restore their relationship...','2016-04-06','45 min','http://ia.media-imdb.com/images/M/MV5BMjI0NzMwOTI1MV5BMl5BanBnXkFtZTgwOTk4MTk4NjE@._V1_UY268_CR109,0,182,268_AL_.jpg','http://neliosoftware.com/wp-content/uploads/2014/05/smile.jpg','http://www.imdb.com/title/tt4538234/',0,'2016-04-07 08:06:30'),(17,22,'episode 2','e2','the episode reborn','Crane and Abbie need to cooperate with their most detested foes when a supernatural event shocks the witnesses. Joe and Jenny try to restore their relationship...','2016-04-06','45 min','http://ia.media-imdb.com/images/M/MV5BMjI0NzMwOTI1MV5BMl5BanBnXkFtZTgwOTk4MTk4NjE@._V1_UY268_CR109,0,182,268_AL_.jpg','http://neliosoftware.com/wp-content/uploads/2014/05/smile.jpg','http://www.imdb.com/title/tt4538234/',0,'2016-04-07 08:06:30'),(18,22,'episode 3','e3','the another prophecy','Crane and Abbie need to cooperate with their most detested foes when a supernatural event shocks the witnesses. Joe and Jenny try to restore their relationship...','2016-04-08','45 min','http://ia.media-imdb.com/images/M/MV5BMjI0NzMwOTI1MV5BMl5BanBnXkFtZTgwOTk4MTk4NjE@._V1_UY268_CR109,0,182,268_AL_.jpg','http://neliosoftware.com/wp-content/uploads/2014/05/smile.jpg','http://www.imdb.com/title/tt4538234/',0,'2016-04-08 00:00:00');
/*!40000 ALTER TABLE `episodes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fontfamilies`
--

DROP TABLE IF EXISTS `fontfamilies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fontfamilies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(255) NOT NULL,
  `active` smallint(2) NOT NULL COMMENT '1 = active, 0 = inactive',
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fontfamilies`
--

LOCK TABLES `fontfamilies` WRITE;
/*!40000 ALTER TABLE `fontfamilies` DISABLE KEYS */;
INSERT INTO `fontfamilies` VALUES (1,'Times New Roman',0,'2016-04-11 00:00:00'),(2,'Georgia',0,'2016-04-11 00:00:00'),(3,'Serif',0,'2016-04-11 00:00:00'),(4,'Arial',0,'2016-04-11 00:00:00'),(5,'Sans-Serif',0,'2016-04-11 00:00:00'),(6,'Serif',0,'2016-04-11 00:00:00'),(7,'Helvetica',0,'2016-04-11 00:00:00'),(8,'Arial Black',1,'2016-04-11 00:00:00');
/*!40000 ALTER TABLE `fontfamilies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fontsizes`
--

DROP TABLE IF EXISTS `fontsizes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fontsizes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(255) NOT NULL,
  `active` smallint(2) NOT NULL COMMENT '1 = active, 0 = inactive',
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fontsizes`
--

LOCK TABLES `fontsizes` WRITE;
/*!40000 ALTER TABLE `fontsizes` DISABLE KEYS */;
INSERT INTO `fontsizes` VALUES (1,'1',0,'2016-04-11 00:00:00'),(2,'2',0,'2016-04-11 00:00:00'),(3,'3',0,'2016-04-11 00:00:00'),(4,'4',0,'2016-04-11 00:00:00'),(5,'5',0,'2016-04-11 00:00:00'),(6,'6',0,'2016-04-11 00:00:00'),(7,'7',1,'2016-04-11 00:00:00'),(8,'8',0,'2016-04-11 00:00:00'),(9,'9',0,'2016-04-11 00:00:00'),(10,'10',0,'2016-04-11 00:00:00'),(11,'11',0,'2016-04-11 00:00:00'),(12,'12',0,'2016-04-11 00:00:00');
/*!40000 ALTER TABLE `fontsizes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `genres`
--

DROP TABLE IF EXISTS `genres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `genres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `genres`
--

LOCK TABLES `genres` WRITE;
/*!40000 ALTER TABLE `genres` DISABLE KEYS */;
INSERT INTO `genres` VALUES (3,'Adventures','2016-04-07 00:00:00'),(4,'Absurdist','2016-04-07 00:00:00'),(6,'Comedy','2016-04-07 00:00:00'),(7,'Crime','2016-04-07 00:00:00'),(8,'Drama','2016-04-07 00:00:00'),(9,'Fantasy','2016-04-07 00:00:00'),(10,'Historical','2016-04-07 00:00:00'),(11,'Historical fiction','2016-04-07 00:00:00'),(12,'Horror','2016-04-07 00:00:00'),(13,'Magical realism','2016-04-07 00:00:00'),(14,'Mystery','2016-04-07 00:00:00'),(15,'Paranoid','2016-04-07 00:00:00'),(16,'Philosophical','2016-04-07 00:00:00'),(17,'Political','2016-04-07 00:00:00'),(18,'Romance','2016-04-07 00:00:00'),(19,'Saga','2016-04-07 00:00:00'),(20,'Satire','2016-04-07 00:00:00'),(21,'Science fiction','2016-04-07 00:00:00'),(22,'Slice of Life','2016-04-07 00:00:00'),(23,'Speculative','2016-04-07 00:00:00'),(24,'Thriller','2016-04-07 00:00:00'),(25,'Urban','2016-04-07 00:00:00'),(26,'Western','2016-04-07 00:00:00'),(27,'Animation','2016-04-07 00:00:00'),(28,'Live action scripted','2016-04-07 00:00:00'),(29,'elmer','2016-04-07 00:00:00'),(30,'jordan','2016-04-07 00:00:00'),(31,'rhea','2016-04-07 00:00:00'),(32,'dada','2016-04-07 00:00:00');
/*!40000 ALTER TABLE `genres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `iframecolors`
--

DROP TABLE IF EXISTS `iframecolors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `iframecolors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(255) NOT NULL,
  `active` smallint(2) NOT NULL COMMENT '1 = active, 0 = inactive',
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `iframecolors`
--

LOCK TABLES `iframecolors` WRITE;
/*!40000 ALTER TABLE `iframecolors` DISABLE KEYS */;
INSERT INTO `iframecolors` VALUES (1,'green',0,'2016-04-11 00:00:00'),(2,'black',1,'2016-04-11 00:00:00'),(3,'blue',0,'2016-04-11 00:00:00'),(4,'red',0,'2016-04-11 00:00:00'),(5,'violet',0,'2016-04-11 00:00:00'),(6,'orange',0,'2016-04-11 00:00:00'),(7,'pink',0,'2016-04-11 00:00:00'),(8,'orange',0,'2016-04-11 00:00:00');
/*!40000 ALTER TABLE `iframecolors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `iframelinks`
--

DROP TABLE IF EXISTS `iframelinks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `iframelinks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `count` varchar(255) NOT NULL COMMENT 'number of links to be display inside an iframe',
  `active` smallint(2) NOT NULL COMMENT '1= active, 0 = inactive',
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `iframelinks`
--

LOCK TABLES `iframelinks` WRITE;
/*!40000 ALTER TABLE `iframelinks` DISABLE KEYS */;
INSERT INTO `iframelinks` VALUES (1,'5',1,'2016-04-05 00:00:00'),(2,'10',0,'2016-04-05 00:00:00'),(3,'15',0,'2016-04-05 00:00:00'),(4,'20',0,'2016-04-05 00:00:00'),(5,'all',0,'2016-04-05 00:00:00');
/*!40000 ALTER TABLE `iframelinks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `iframes`
--

DROP TABLE IF EXISTS `iframes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `iframes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL COMMENT 'folder location inside plugin linkfenix',
  `active` smallint(2) NOT NULL COMMENT 'a = active , 0 = inactive',
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `iframes`
--

LOCK TABLES `iframes` WRITE;
/*!40000 ALTER TABLE `iframes` DISABLE KEYS */;
INSERT INTO `iframes` VALUES (1,'../iframe/v1',0,'2016-04-05 00:00:00'),(2,'../iframe/v2',0,'2016-04-05 00:00:00'),(3,'../iframe/v3',0,'2016-04-05 00:00:00'),(4,'../iframe/v4',1,'2016-04-05 00:00:00'),(5,'../iframe/v5',0,'2016-04-05 00:00:00');
/*!40000 ALTER TABLE `iframes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `links`
--

DROP TABLE IF EXISTS `links`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `links` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `movie_id` int(11) NOT NULL,
  `tvshow_id` int(11) NOT NULL,
  `episode_id` int(11) NOT NULL,
  `age` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL COMMENT 'site name eg. vodlocker.com',
  `icon` varchar(255) NOT NULL COMMENT 'link icons',
  `link` varchar(255) NOT NULL,
  `source` varchar(255) NOT NULL,
  `vote` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `audio` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `links`
--

LOCK TABLES `links` WRITE;
/*!40000 ALTER TABLE `links` DISABLE KEYS */;
INSERT INTO `links` VALUES (9,1,0,0,'29 days','vodlocker.com','https://www.google.com/s2/favicons?domain=vodlocker.com','https://google.com','hd','3/5','3/5','3/5','2016-04-18 00:00:00'),(10,1,0,0,'29 days','vodlocker.com','https://www.google.com/s2/favicons?domain=vodlocker.com','https://google.com','hd','3/5','3/5','3/5','2016-04-18 00:00:00'),(11,0,7,8,'50 days','vodlocker.com','https://www.google.com/s2/favicons?domain=vodlocker.com','https://yahoo.com','hd','4/5','4/5','4/5','2016-04-18 00:00:00'),(12,0,7,9,'50 days','vodlocker.com','https://www.google.com/s2/favicons?domain=vodlocker.com','https://google.com','hd','5/6','5/6','5/6','2016-04-18 00:00:00'),(13,0,7,10,'60 days','vodlocker.com','https://www.google.com/s2/favicons?domain=vodlocker.com','https://yahoo.com','hd','4/5','4/5','4/5','2016-04-18 00:00:00'),(14,0,7,11,'30 days','vodlocker.com','https://www.google.com/s2/favicons?domain=vodlocker.com','https://yahoo.com','hd','3/6','3/6','3/6','2016-04-18 00:00:00'),(15,23,0,0,'50 days','vodlocker.com','https://www.google.com/s2/favicons?domain=vodlocker.com','https://yahoo.com','hd','3/4','3/4','3/4','2016-04-18 00:00:00'),(16,0,1,17,'56 days','vodlocker.com','https://www.google.com/s2/favicons?domain=vodlocker.com','https://yahoo.com','hd','5/6','5/6','5/6','2016-04-18 00:00:00');
/*!40000 ALTER TABLE `links` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `movies`
--

DROP TABLE IF EXISTS `movies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `movies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `year` year(4) NOT NULL,
  `imdb` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `releasedate` date NOT NULL,
  `director` varchar(255) NOT NULL,
  `languages` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL COMMENT 'content image',
  `fimage` varchar(255) NOT NULL COMMENT 'featured image',
  `clicked` int(2) NOT NULL DEFAULT '0' COMMENT '0 = default , 1 = visited',
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movies`
--

LOCK TABLES `movies` WRITE;
/*!40000 ALTER TABLE `movies` DISABLE KEYS */;
INSERT INTO `movies` VALUES (1,'Gods Of Egypt',2016,'http://www.imdb.com/title/tt4538234/','USA','127','Mortal hero Bek teams with the god Horus in an alliance against Set, the merciless god of darkness who has usurped Egypt\'s throne, plunging the once peaceful and prosperous empire into chaos and conflict...','2016-03-02','Alex Proyas','english','https://static1.solarmovie.ph/images/movies/b3/d6/07/cbe68624062625acdd118aae9b/1_150x220.jpg','http://neliosoftware.com/wp-content/uploads/2014/05/smile.jpg',0,'2016-04-08 12:45:34'),(2,'Conspirancy Encounters',2016,'http://www.imdb.com/title/tt4538234/','USA','123','sdakfgbsdabflnasdflasdjkfldsfjksad','2016-03-03','ado','english','https://static1.solarmovie.ph/images/movies/25/5f/20/1ccebc3df340f2032c0f5ecbef/1_150x220.jpg','http://neliosoftware.com/wp-content/uploads/2014/05/smile.jpg',1,'2016-04-07 08:42:49'),(3,'Kill or Be Killed',2015,'http://www.imdb.com/title/tt4538234/','USA','103 min','\"In the autumn of 1900, outlaw Claude Barbee puts his retirement plan in action, attempting to lead his train-robbing gang across Texas to recover a cash stash hidden after a botched railroad heist\",','2016-03-01','\"Duane Graves, Justin Meeks','English','https://static4.solarmovie.ph/images/movies/21/34/5d/14b6be9ca60b2a5b80f0d355d9/1_150x220.jpg','http://neliosoftware.com/wp-content/uploads/2014/05/smile.jpg',0,'2016-03-04 07:50:50'),(4,'The Midnight Man',2016,'http://www.imdb.com/title/tt4538234/','USA','126 min','\"When Grady, an assassin with a genetic disorder that renders him unable to feel pain, is sent on a high-stakes assignment, his world is turned upside-down after an attack when he awakens to\",','2016-04-07','jm','D.C. Hamilton','https://static3.solarmovie.ph/images/movies/57/6d/bc/c8dad627a069adfb9b2b42b32d/1_150x220.jpg\n','http://neliosoftware.com/wp-content/uploads/2014/05/smile.jpg',0,'2016-03-04 07:50:50'),(5,'JINO',2016,'http://www.imdb.com/title/tt4538234/','PH','123','RFSDFASDFASDF','2016-03-07','ME','','http://hilobrow.com/wp-content/uploads/2011/03/02William-Mortensen-Machiavelli-150x150.jpg','http://neliosoftware.com/wp-content/uploads/2014/05/smile.jpg',0,'2016-03-11 03:14:46'),(6,'kabanatas pangalawa',2016,'http://www.imdb.com/title/tt4538234/','iihfeiuh','97','This is','2016-03-09','Ado','','http://hilobrow.com/wp-content/uploads/2011/03/123-RedRuinedCitySmaller-228x300.jpg','http://neliosoftware.com/wp-content/uploads/2014/05/smile.jpg',0,'2016-03-09 05:39:32'),(7,'Robocop 1',2016,'http://www.imdb.com/title/tt4538234/','iihfeiuh','97','This is','2016-03-09','Ado','','http://hilobrow.com/wp-content/uploads/2011/03/bridle1-150x150.jpg','http://neliosoftware.com/wp-content/uploads/2014/05/smile.jpg',0,'2016-03-09 05:39:38'),(8,'Robocop 2',2016,'http://www.imdb.com/title/tt4538234/','iihfeiuh','97','This is','2016-03-09','Ado','','http://hilobrow.com/wp-content/uploads/2011/03/bridle1-150x150.jpg','http://neliosoftware.com/wp-content/uploads/2014/05/smile.jpg',0,'2016-03-09 05:39:43'),(9,'Robocop 3',2016,'http://www.imdb.com/title/tt4538234/','iihfeiuh','97','This is','2016-03-09','Ado','','http://hilobrow.com/wp-content/uploads/2011/03/bridle1-150x150.jpg','http://neliosoftware.com/wp-content/uploads/2014/05/smile.jpg',0,'2016-03-09 05:39:47'),(10,'Robocop 4',2016,'http://www.imdb.com/title/tt4538234/','iihfeiuh','97','This is','2016-03-09','Ado','','http://hilobrow.com/wp-content/uploads/2011/03/bridle1-150x150.jpg','http://neliosoftware.com/wp-content/uploads/2014/05/smile.jpg',0,'2016-03-09 05:39:49'),(11,'Robocop 5',2016,'http://www.imdb.com/title/tt4538234/','iihfeiuh','97','This is','2016-03-09','Ado','','http://hilobrow.com/wp-content/uploads/2011/03/bridle1-150x150.jpg','http://neliosoftware.com/wp-content/uploads/2014/05/smile.jpg',0,'2016-03-09 05:39:52'),(12,'Robocop 6',2016,'http://www.imdb.com/title/tt4538234/','iihfeiuh','97','This is','2016-03-09','Ado','','http://hilobrow.com/wp-content/uploads/2011/03/bridle1-150x150.jpg','http://neliosoftware.com/wp-content/uploads/2014/05/smile.jpg',0,'2016-03-09 05:39:56'),(13,'Robocop 7',2016,'http://www.imdb.com/title/tt4538234/','iihfeiuh','97','This is','2016-03-09','Ado','','http://hilobrow.com/wp-content/uploads/2011/03/bridle1-150x150.jpg','http://neliosoftware.com/wp-content/uploads/2014/05/smile.jpg',0,'2016-03-09 05:39:58'),(14,'Robocop 8',2016,'http://www.imdb.com/title/tt4538234/','iihfeiuh','97','This is','2016-03-09','Ado','','http://hilobrow.com/wp-content/uploads/2011/03/bridle1-150x150.jpg','http://neliosoftware.com/wp-content/uploads/2014/05/smile.jpg',0,'2016-03-09 05:40:01'),(15,'Robocop 9',2016,'http://www.imdb.com/title/tt4538234/','iihfeiuh','97','This is','2016-03-09','Ado','','http://hilobrow.com/wp-content/uploads/2011/03/bridle1-150x150.jpg','http://neliosoftware.com/wp-content/uploads/2014/05/smile.jpg',0,'2016-03-09 05:40:03'),(16,'Robocop 10',2016,'http://www.imdb.com/title/tt4538234/','iihfeiuh','97','This is','2016-03-09','Ado','','http://hilobrow.com/wp-content/uploads/2011/03/bridle1-150x150.jpg','http://neliosoftware.com/wp-content/uploads/2014/05/smile.jpg',0,'2016-03-09 05:40:06'),(17,'Robocop 11',2016,'http://www.imdb.com/title/tt4538234/','iihfeiuh','97','This is','2016-03-09','Ado','','http://hilobrow.com/wp-content/uploads/2011/03/bridle1-150x150.jpg','http://neliosoftware.com/wp-content/uploads/2014/05/smile.jpg',0,'2016-03-09 05:40:08'),(18,'Robocop 12',2016,'http://www.imdb.com/title/tt4538234/','iihfeiuh','97','This is','2016-03-09','Ado','','http://hilobrow.com/wp-content/uploads/2011/03/bridle1-150x150.jpg','http://neliosoftware.com/wp-content/uploads/2014/05/smile.jpg',0,'2016-03-09 05:40:10'),(19,'Robocop 13',2016,'http://www.imdb.com/title/tt4538234/','iihfeiuh','97','This is','2016-03-09','Ado','','http://hilobrow.com/wp-content/uploads/2011/03/bridle1-150x150.jpg','http://neliosoftware.com/wp-content/uploads/2014/05/smile.jpg',0,'2016-03-09 05:40:13'),(20,'Robocop 14',2016,'http://www.imdb.com/title/tt4538234/','iihfeiuh','97','This is','2016-03-09','Ado','','http://hilobrow.com/wp-content/uploads/2011/03/bridle1-150x150.jpg','http://neliosoftware.com/wp-content/uploads/2014/05/smile.jpg',0,'2016-03-09 05:40:16'),(21,'Robocop 15',2016,'http://www.imdb.com/title/tt4538234/','iihfeiuh','97','This is','2016-03-09','Ado','','http://hilobrow.com/wp-content/uploads/2011/03/bridle1-150x150.jpg','http://neliosoftware.com/wp-content/uploads/2014/05/smile.jpg',0,'2016-03-09 05:40:18'),(22,'Robocop 16',2016,'http://www.imdb.com/title/tt4538234/','iihfeiuh','97','This is','2016-03-09','Ado','','http://hilobrow.com/wp-content/uploads/2011/03/bridle1-150x150.jpg','http://neliosoftware.com/wp-content/uploads/2014/05/smile.jpg',0,'2016-03-09 05:40:27'),(23,'Test Test 1',2016,'http://www.imdb.com/title/tt4538234/','tse','tseset','estset','2016-03-09','set','','http://hilobrow.com/wp-content/uploads/2011/03/209-WomanHulk149-150x150.jpg','http://neliosoftware.com/wp-content/uploads/2014/05/smile.jpg',0,'2016-03-09 05:51:41'),(24,'Test Test 2',2016,'http://www.imdb.com/title/tt4538234/','tse','tseset','estset','2016-03-09','set','','http://hilobrow.com/wp-content/uploads/2011/03/209-WomanHulk149-150x150.jpg','http://neliosoftware.com/wp-content/uploads/2014/05/smile.jpg',0,'2016-03-09 05:51:46'),(25,'Jm',2016,'http://www.imdb.com/title/tt4538234/','barriadda','12','tests sdf sdafsa sad fsda fdsafsd sdfsd fsdf dsfsdfdsfsdfsd','2016-03-11','jino lacson','','http://hilobrow.com/wp-content/uploads/2011/03/53-GirlsDetailSmaller-150x150.jpg','http://neliosoftware.com/wp-content/uploads/2014/05/smile.jpg',0,'2016-03-11 04:08:59'),(26,'da last',2016,'http://www.imdb.com/title/tt4538234/','sdfdsfdsf','12','sdfds','2016-03-11','ako','','http://hilobrow.com/wp-content/uploads/2011/03/RevereHarvardEngraving-150x150.jpg','http://neliosoftware.com/wp-content/uploads/2014/05/smile.jpg',0,'2016-03-11 04:10:53'),(27,'KUNG FU PANDA 3',2016,'http://www.imdb.com/title/tt4538234/','PH','125','kung fu panda na','2016-03-11','jm,jino','','http://hilobrow.com/wp-content/uploads/2011/03/AngusYoung11-150x150.jpg','http://neliosoftware.com/wp-content/uploads/2014/05/smile.jpg',0,'2016-03-11 06:31:58'),(28,'Power Ranger',2016,'http://www.imdb.com/title/tt4538234/','test','20','dfsafsfsdfsdf sfsd sdfsa asfsad sd fsdfds fsd sadfasd f','2016-03-14','jino lacson','','http://hilobrow.com/wp-content/uploads/2011/03/Gorey-IAmTheBahhumBug-150x150.jpg','http://neliosoftware.com/wp-content/uploads/2014/05/smile.jpg',0,'2016-03-14 03:29:14');
/*!40000 ALTER TABLE `movies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `movies_casts`
--

DROP TABLE IF EXISTS `movies_casts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `movies_casts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cast_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movies_casts`
--

LOCK TABLES `movies_casts` WRITE;
/*!40000 ALTER TABLE `movies_casts` DISABLE KEYS */;
INSERT INTO `movies_casts` VALUES (1,1,1,'2016-04-07 00:00:00'),(3,1,2,'2016-04-07 00:00:00'),(4,2,2,'2016-04-07 00:00:00'),(5,3,2,'2016-04-07 00:00:00'),(6,4,2,'2016-04-07 00:00:00'),(8,1,5,'2016-04-07 00:00:00'),(9,2,5,'2016-04-07 00:00:00'),(10,3,5,'2016-04-07 00:00:00'),(11,4,5,'2016-04-07 00:00:00'),(13,1,4,'2016-04-07 00:00:00'),(14,2,4,'2016-04-07 00:00:00'),(15,3,4,'2016-04-07 00:00:00'),(16,4,4,'2016-04-07 00:00:00'),(18,1,3,'2016-04-07 00:00:00'),(19,2,3,'2016-04-07 00:00:00'),(20,3,3,'2016-04-07 00:00:00'),(21,4,3,'2016-04-07 00:00:00'),(22,2,6,'2016-04-07 00:00:00'),(23,2,7,'2016-04-07 00:00:00'),(24,2,8,'2016-04-07 00:00:00'),(25,2,9,'2016-04-07 00:00:00'),(26,2,10,'2016-04-07 00:00:00'),(27,2,11,'2016-04-07 00:00:00'),(28,2,12,'2016-04-07 00:00:00'),(29,2,13,'2016-04-07 00:00:00'),(30,2,14,'2016-04-07 00:00:00'),(31,2,15,'2016-04-07 00:00:00'),(32,2,16,'2016-04-07 00:00:00'),(33,2,17,'2016-04-07 00:00:00'),(34,2,18,'2016-04-07 00:00:00'),(35,2,19,'2016-04-07 00:00:00'),(36,2,20,'2016-04-07 00:00:00'),(37,2,21,'2016-04-07 00:00:00'),(38,2,22,'2016-04-07 00:00:00'),(39,3,23,'2016-04-07 00:00:00'),(40,3,24,'2016-04-07 00:00:00'),(41,1,25,'2016-04-07 00:00:00'),(42,2,25,'2016-04-07 00:00:00'),(43,3,25,'2016-04-07 00:00:00'),(44,2,26,'2016-04-07 00:00:00'),(45,1,27,'2016-04-07 00:00:00'),(46,3,27,'2016-04-07 00:00:00'),(47,1,28,'2016-04-07 00:00:00'),(48,2,28,'2016-04-07 00:00:00'),(49,3,28,'2016-04-07 00:00:00');
/*!40000 ALTER TABLE `movies_casts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `movies_genres`
--

DROP TABLE IF EXISTS `movies_genres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `movies_genres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `movie_id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movies_genres`
--

LOCK TABLES `movies_genres` WRITE;
/*!40000 ALTER TABLE `movies_genres` DISABLE KEYS */;
INSERT INTO `movies_genres` VALUES (4,2,3,'2016-04-07 00:00:00'),(8,5,4,'2016-04-07 00:00:00'),(14,4,28,'2016-04-07 00:00:00'),(17,3,3,'2016-04-07 00:00:00'),(18,3,4,'2016-04-07 00:00:00'),(19,3,5,'2016-04-07 00:00:00'),(20,3,6,'2016-04-07 00:00:00'),(21,3,7,'2016-04-07 00:00:00'),(22,3,8,'2016-04-07 00:00:00'),(23,3,9,'2016-04-07 00:00:00'),(24,3,10,'2016-04-07 00:00:00'),(25,3,11,'2016-04-07 00:00:00'),(26,3,12,'2016-04-07 00:00:00'),(27,3,13,'2016-04-07 00:00:00'),(28,3,14,'2016-04-07 00:00:00'),(29,3,15,'2016-04-07 00:00:00'),(30,3,16,'2016-04-07 00:00:00'),(31,3,17,'2016-04-07 00:00:00'),(32,3,18,'2016-04-07 00:00:00'),(33,3,19,'2016-04-07 00:00:00'),(34,3,20,'2016-04-07 00:00:00'),(35,3,21,'2016-04-07 00:00:00'),(36,3,22,'2016-04-07 00:00:00'),(37,3,23,'2016-04-07 00:00:00'),(38,3,24,'2016-04-07 00:00:00'),(39,3,25,'2016-04-07 00:00:00'),(40,3,26,'2016-04-07 00:00:00'),(41,3,27,'2016-04-07 00:00:00'),(42,3,28,'2016-04-07 00:00:00'),(45,1,6,'2016-04-07 00:00:00'),(46,6,13,'2016-04-07 00:00:00'),(47,7,13,'2016-04-07 00:00:00'),(48,8,13,'2016-04-07 00:00:00'),(49,9,13,'2016-04-07 00:00:00'),(50,10,13,'2016-04-07 00:00:00'),(51,11,13,'2016-04-07 00:00:00'),(52,12,13,'2016-04-07 00:00:00'),(53,13,13,'2016-04-07 00:00:00'),(54,14,13,'2016-04-07 00:00:00'),(55,15,13,'2016-04-07 00:00:00'),(56,16,13,'2016-04-07 00:00:00'),(57,17,13,'2016-04-07 00:00:00'),(58,18,13,'2016-04-07 00:00:00'),(59,19,13,'2016-04-07 00:00:00'),(60,20,13,'2016-04-07 00:00:00'),(61,21,13,'2016-04-07 00:00:00'),(62,22,13,'2016-04-07 00:00:00'),(63,23,22,'2016-04-07 00:00:00'),(64,24,22,'2016-04-07 00:00:00'),(65,25,26,'2016-04-07 00:00:00'),(66,26,28,'2016-04-07 00:00:00'),(67,27,6,'2016-04-07 00:00:00'),(68,27,8,'2016-04-07 00:00:00'),(69,28,7,'2016-04-07 00:00:00'),(70,28,10,'2016-04-07 00:00:00');
/*!40000 ALTER TABLE `movies_genres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `options`
--

DROP TABLE IF EXISTS `options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `options` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL COMMENT 'name of the checkbox',
  `scode` varchar(255) NOT NULL COMMENT 'mv = movie options, tv = tv options,  pr= preferences',
  `active` smallint(2) NOT NULL COMMENT '1 = active , 0 =inactive',
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `options`
--

LOCK TABLES `options` WRITE;
/*!40000 ALTER TABLE `options` DISABLE KEYS */;
INSERT INTO `options` VALUES (1,'Title (obligatory)','mv',1,'2016-04-06 00:00:00'),(2,'Genres (obligatory)','mv',1,'2016-04-06 00:00:00'),(3,'Description','mv',1,'2016-04-06 00:00:00'),(4,'Year - next to the title, for example: Avatar (2009)','mv',1,'2016-04-13 00:00:00'),(5,'IMDB link','mv',1,'2016-04-06 00:00:00'),(6,'Posters only as featured image','mv',1,'2016-04-06 00:00:00'),(7,'Posters only in the content','mv',1,'2016-04-06 00:00:00'),(8,'Title (obligatory)','tv',1,'2016-04-06 00:00:00'),(9,'Genres (obligatory)','tv',1,'2016-04-06 00:00:00'),(10,'Description','tv',1,'2016-04-06 00:00:00'),(11,'Year - next to the title, for example: Avatar (2009)','tv',1,'2016-04-06 00:00:00'),(12,'IMDB link','tv',1,'2016-04-06 00:00:00'),(13,'Posters only as featured image','tv',1,'2016-04-06 00:00:00'),(14,'Posters only in the content','tv',1,'2016-04-06 00:00:00'),(15,'Enable Shortcoder','pr',1,'2016-04-06 00:00:00');
/*!40000 ALTER TABLE `options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `seasons`
--

DROP TABLE IF EXISTS `seasons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `seasons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tvshow_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `scode` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seasons`
--

LOCK TABLES `seasons` WRITE;
/*!40000 ALTER TABLE `seasons` DISABLE KEYS */;
INSERT INTO `seasons` VALUES (14,7,'season 1','s01','2016-04-07 00:00:00'),(15,7,'season 2','s02','2016-04-07 00:00:00'),(16,7,'season 3','s03','2016-04-07 00:00:00'),(17,7,'season 4','s04','2016-04-07 00:00:00'),(18,7,'season 5','s05','2016-04-07 00:00:00'),(19,7,'season 6','s06','2016-04-07 00:00:00'),(20,7,'season 7','s07','2016-04-07 00:00:00'),(21,5,'season 1','so1','2016-04-07 00:00:00'),(22,1,'season 1','s01','2016-04-07 00:00:00');
/*!40000 ALTER TABLE `seasons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tvshows`
--

DROP TABLE IF EXISTS `tvshows`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tvshows` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `year` year(4) NOT NULL,
  `imdb` varchar(255) NOT NULL COMMENT 'main imdb link ',
  `country` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `releasedate` date NOT NULL,
  `director` varchar(255) NOT NULL,
  `languages` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL COMMENT 'content image',
  `fimage` varchar(255) NOT NULL COMMENT 'featured image',
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tvshows`
--

LOCK TABLES `tvshows` WRITE;
/*!40000 ALTER TABLE `tvshows` DISABLE KEYS */;
INSERT INTO `tvshows` VALUES (1,'Prophecy',2016,'http://www.imdb.com/title/tt4538234/','America','30 min','Richard Cyper rescues Kahlan, a mysterious confessor from the Midlands ','2016-03-14','Jino','English','http://hilobrow.com/wp-content/uploads/2011/03/kirby-devil-150x150.jpg','http://neliosoftware.com/wp-content/uploads/2014/05/smile.jpg','2016-04-07 08:03:09'),(2,'The Freighteneers',2016,'http://www.imdb.com/title/tt4538234/','America','30 min','Richard Cyper rescues Kahlan, a mysterious confessor from the Midlands ','2016-03-14','Jino','English','http://hilobrow.com/wp-content/uploads/2011/03/butter_gold_graph-150x150.jpg','http://neliosoftware.com/wp-content/uploads/2014/05/smile.jpg','2016-04-07 08:03:54'),(3,'The three musketeers',2016,'http://www.imdb.com/title/tt4538234/','America','30 min','Richard Cyper rescues Kahlan, a mysterious confessor from the Midlands ','2016-03-14','Jino','English','http://hilobrow.com/wp-content/uploads/2011/03/ectoplasm-136x300.jpg','http://neliosoftware.com/wp-content/uploads/2014/05/smile.jpg','2016-04-07 08:04:07'),(4,'The fly',2016,'http://www.imdb.com/title/tt4538234/','America','30 min','Richard Cyper rescues Kahlan, a mysterious confessor from the Midlands ','2016-03-14','Jino','English','http://hilobrow.com/wp-content/uploads/2011/03/gilgamesh-epic12-150x150.jpg','http://neliosoftware.com/wp-content/uploads/2014/05/smile.jpg','2016-04-07 08:04:14'),(5,'Planet Galaxy',2016,'http://www.imdb.com/title/tt4538234/','America','30 min','Richard Cyper rescues Kahlan, a mysterious confessor from the Midlands ','2016-03-15','Jino','English','http://hilobrow.com/wp-content/uploads/2011/03/hr_lg_butter-150x150.jpg','http://neliosoftware.com/wp-content/uploads/2014/05/smile.jpg','2016-04-07 08:04:26'),(6,'Walking Dead',2016,'http://www.imdb.com/title/tt4538234/','America','30 min','Richard Cyper rescues Kahlan, a mysterious confessor from the Midlands ','2016-03-15','Jino','English','http://hilobrow.com/wp-content/uploads/2011/03/italy-150x150.jpg','http://neliosoftware.com/wp-content/uploads/2014/05/smile.jpg','2016-04-08 02:54:02'),(7,'Forevermore',2016,'http://www.imdb.com/title/tt4538234/','America','30 min','Richard Cyper rescues Kahlan, a mysterious confessor from the Midlands ','2016-03-16','Jino','English','http://hilobrow.com/wp-content/uploads/2011/03/kirby-devil-150x150.jpg','http://neliosoftware.com/wp-content/uploads/2014/05/smile.jpg','2016-04-07 08:05:01');
/*!40000 ALTER TABLE `tvshows` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tvshows_casts`
--

DROP TABLE IF EXISTS `tvshows_casts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tvshows_casts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tvshow_id` int(11) NOT NULL,
  `cast_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tvshows_casts`
--

LOCK TABLES `tvshows_casts` WRITE;
/*!40000 ALTER TABLE `tvshows_casts` DISABLE KEYS */;
INSERT INTO `tvshows_casts` VALUES (1,3,2,'2016-04-07 00:00:00'),(2,3,5,'2016-04-07 00:00:00'),(3,3,6,'2016-04-07 00:00:00');
/*!40000 ALTER TABLE `tvshows_casts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tvshows_genres`
--

DROP TABLE IF EXISTS `tvshows_genres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tvshows_genres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tvshow_id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tvshows_genres`
--

LOCK TABLES `tvshows_genres` WRITE;
/*!40000 ALTER TABLE `tvshows_genres` DISABLE KEYS */;
INSERT INTO `tvshows_genres` VALUES (1,3,6,'2016-04-07 00:00:00'),(2,3,6,'2016-04-07 00:00:00'),(3,3,4,'2016-04-07 00:00:00'),(4,1,16,'2016-04-07 00:00:00'),(5,7,25,'2016-04-07 00:00:00');
/*!40000 ALTER TABLE `tvshows_genres` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-04-18  5:00:26
