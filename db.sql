-- MySQL dump 10.13  Distrib 5.5.46, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: linkfenixdb
-- ------------------------------------------------------
-- Server version	5.5.46-0ubuntu0.14.04.2

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `casts`
--

LOCK TABLES `casts` WRITE;
/*!40000 ALTER TABLE `casts` DISABLE KEYS */;
INSERT INTO `casts` VALUES (1,'jm'),(2,'jino'),(3,'ado'),(4,'Test'),(5,'elmer'),(6,'jordan'),(7,'rhea'),(8,'dada');
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
  `realeasedate` datetime NOT NULL,
  `duration` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `IMDB` varchar(255) NOT NULL COMMENT 'imdb linker',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `episodes`
--

LOCK TABLES `episodes` WRITE;
/*!40000 ALTER TABLE `episodes` DISABLE KEYS */;
INSERT INTO `episodes` VALUES (8,14,'episode 1','e1','The revenge of test','Crane and Abbie need to cooperate with their most detested foes when a supernatural event shocks the witnesses. Joe and Jenny try to restore their relationship...','2016-03-28 00:00:00','45 min','http://ia.media-imdb.com/images/M/MV5BMTc4MzkwMjY5NF5BMl5BanBnXkFtZTgwNDY5Mzk4NjE@._V1_UY268_CR16,0,182,268_AL_.jpg','http://www.imdb.com/title/tt4538234/','2016-03-28 07:18:30'),(9,15,'episode 2','e2','The test comes back','Abbie Mills receives a message from Ichabod Crane after not hearing from him for several months. They now become aware of a new evil that must be addressed, and join forces with old friends to face this new threat to Sleepy Hollow...','2016-03-28 00:00:00','30 min','http://ia.media-imdb.com/images/M/MV5BMjM4MTg1OTg1MV5BMl5BanBnXkFtZTgwODc4ODIzODE@._V1_UY268_CR109,0,182,268_AL_.jpg','http://www.imdb.com/title/tt4538234/','2016-03-28 07:18:40'),(10,16,'episode 3','e3','Test is comes back again','sample desc epi e3','2016-03-28 00:00:00','20 min','http://ia.media-imdb.com/images/M/MV5BMTUxNjQyMTc2OV5BMl5BanBnXkFtZTgwNDgxOTIzODE@._V1_UY268_CR99,0,182,268_AL_.jpg','http://www.imdb.com/title/tt4538234/','2016-03-28 07:18:51'),(11,17,'episode 4','e4','The defeat of test','sample desc epi e4','2016-03-28 00:00:00','10 min','http://ia.media-imdb.com/images/M/MV5BMjA0MTg2NjA0OF5BMl5BanBnXkFtZTgwMTM0NDMyODE@._V1_UY268_CR104,0,182,268_AL_.jpg','http://www.imdb.com/title/tt4538234/','2016-03-28 07:18:56'),(12,18,'episode 5','e5','The adventure of test','sample desc epi e5','2016-03-28 00:00:00','30 min','http://ia.media-imdb.com/images/M/MV5BMzMxOTU5MTM1NF5BMl5BanBnXkFtZTgwNzU2NTkwNzE@._V1_UY268_CR110,0,182,268_AL_.jpg','http://www.imdb.com/title/tt4538234/','2016-03-28 07:19:00'),(13,19,'episode 66','e6','The test failures','sample desc epi e6','2016-03-28 00:00:00','11 min','http://ia.media-imdb.com/images/M/MV5BNDI1NTQ0Nzk5Nl5BMl5BanBnXkFtZTgwODU4ODExNzE@._V1_UY268_CR87,0,182,268_AL_.jpg','http://www.imdb.com/title/tt4538234/','2016-03-31 06:20:06'),(14,20,'episode 7','e7','The deatch of test','sample desc epi e7','2016-03-28 00:00:00','25 min','http://ia.media-imdb.com/images/M/MV5BMjI0NzMwOTI1MV5BMl5BanBnXkFtZTgwOTk4MTk4NjE@._V1_UY268_CR109,0,182,268_AL_.jpg','http://www.imdb.com/title/tt4538234/','2016-03-31 07:19:06'),(15,21,'episode 23','e01','the childhood of the star','sampe desc1','0000-00-00 00:00:00','23 min','http://ia.media-imdb.com/images/M/MV5BNTEyMjAwMDU1OV5BMl5BanBnXkFtZTcwNDQyNTkxMw@@._V1_UY268_CR0,0,182,268_AL_.jpg','http://www.imdb.com/title/tt4538234/','2016-03-31 06:07:51');
/*!40000 ALTER TABLE `episodes` ENABLE KEYS */;
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `genres`
--

LOCK TABLES `genres` WRITE;
/*!40000 ALTER TABLE `genres` DISABLE KEYS */;
INSERT INTO `genres` VALUES (3,'Adventures'),(4,'Absurdist'),(6,'Comedy'),(7,'Crime'),(8,'Drama'),(9,'Fantasy'),(10,'Historical'),(11,'Historical fiction'),(12,'Horror'),(13,'Magical realism'),(14,'Mystery'),(15,'Paranoid'),(16,'Philosophical'),(17,'Political'),(18,'Romance'),(19,'Saga'),(20,'Satire'),(21,'Science fiction'),(22,'Slice of Life'),(23,'Speculative'),(24,'Thriller'),(25,'Urban'),(26,'Western'),(27,'Animation'),(28,'Live action scripted'),(29,'elmer'),(30,'jordan'),(31,'rhea'),(32,'dada');
/*!40000 ALTER TABLE `genres` ENABLE KEYS */;
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
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `links`
--

LOCK TABLES `links` WRITE;
/*!40000 ALTER TABLE `links` DISABLE KEYS */;
INSERT INTO `links` VALUES (1,0,7,8,'29 days','','','www.link.com','CAM','30','4','7','2016-03-28 07:01:04'),(2,0,7,9,'30 days','','','aaaa','HD','100','aaaa','aaaa','2016-03-28 07:03:18'),(3,0,7,10,'11 days','','','aaa','HD','500','aa','aa','2016-03-28 07:03:23'),(4,0,7,11,'15 days','','','test@yahoolinks','HD','600','video test','audio test','2016-03-28 07:03:28'),(5,23,0,0,'17 days','','','testlinkers@yahoo.com','HD','700','higher','audiotest','2016-03-28 07:03:32');
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
  `year` date NOT NULL,
  `IMDB` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `releasedate` date NOT NULL,
  `director` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `languages` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movies`
--

LOCK TABLES `movies` WRITE;
/*!40000 ALTER TABLE `movies` DISABLE KEYS */;
INSERT INTO `movies` VALUES (1,'Gods Of Egypt','2016-03-02','6.5/10','USA','127','Mortal hero Bek teams with the god Horus in an alliance against Set, the merciless god of darkness who has usurped Egypt\'s throne, plunging the once peaceful and prosperous empire into chaos and conflict...','2016-03-02','Alex Proyas','2016-03-22 12:45:34','english','https://static1.solarmovie.ph/images/movies/b3/d6/07/cbe68624062625acdd118aae9b/1_150x220.jpg'),(2,'Conspirancy Encounters','2016-03-03','6.5/10','USA','123','sdakfgbsdabflnasdflasdjkfldsfjksad','2016-03-03','ado','2016-03-22 08:42:49','english','https://static1.solarmovie.ph/images/movies/25/5f/20/1ccebc3df340f2032c0f5ecbef/1_150x220.jpg'),(3,'Kill or Be Killed','2015-03-04','10','USA','103 min','\"In the autumn of 1900, outlaw Claude Barbee puts his retirement plan in action, attempting to lead his train-robbing gang across Texas to recover a cash stash hidden after a botched railroad heist\",','2016-03-01','\"Duane Graves, Justin Meeks','2016-03-04 07:50:50','English','https://static4.solarmovie.ph/images/movies/21/34/5d/14b6be9ca60b2a5b80f0d355d9/1_150x220.jpg'),(4,'The Midnight Man','2016-03-03','10','USA','126 min','\"When Grady, an assassin with a genetic disorder that renders him unable to feel pain, is sent on a high-stakes assignment, his world is turned upside-down after an attack when he awakens to\",','2016-04-07','jm','2016-03-04 07:50:50','D.C. Hamilton','https://static3.solarmovie.ph/images/movies/57/6d/bc/c8dad627a069adfb9b2b42b32d/1_150x220.jpg\n'),(5,'JINO','2016-03-07','1234515','PH','123','RFSDFASDFASDF','2016-03-07','ME','2016-03-11 03:14:46','','http://hilobrow.com/wp-content/uploads/2011/03/02William-Mortensen-Machiavelli-150x150.jpg'),(6,'Robocop','2016-03-09','fefe','iihfeiuh','97','This is','2016-03-09','Ado','2016-03-09 05:39:32','','http://hilobrow.com/wp-content/uploads/2011/03/123-RedRuinedCitySmaller-228x300.jpg'),(7,'Robocop','2016-03-09','fefe','iihfeiuh','97','This is','2016-03-09','Ado','2016-03-09 05:39:38','','http://hilobrow.com/wp-content/uploads/2011/03/bridle1-150x150.jpg'),(8,'Robocop','2016-03-09','fefe','iihfeiuh','97','This is','2016-03-09','Ado','2016-03-09 05:39:43','','http://hilobrow.com/wp-content/uploads/2011/03/bridle1-150x150.jpg'),(9,'Robocop','2016-03-09','fefe','iihfeiuh','97','This is','2016-03-09','Ado','2016-03-09 05:39:47','','http://hilobrow.com/wp-content/uploads/2011/03/bridle1-150x150.jpg'),(10,'Robocop','2016-03-09','fefe','iihfeiuh','97','This is','2016-03-09','Ado','2016-03-09 05:39:49','','http://hilobrow.com/wp-content/uploads/2011/03/bridle1-150x150.jpg'),(11,'Robocop','2016-03-09','fefe','iihfeiuh','97','This is','2016-03-09','Ado','2016-03-09 05:39:52','','http://hilobrow.com/wp-content/uploads/2011/03/bridle1-150x150.jpg'),(12,'Robocop','2016-03-09','fefe','iihfeiuh','97','This is','2016-03-09','Ado','2016-03-09 05:39:56','','http://hilobrow.com/wp-content/uploads/2011/03/bridle1-150x150.jpg'),(13,'Robocop','2016-03-09','fefe','iihfeiuh','97','This is','2016-03-09','Ado','2016-03-09 05:39:58','','http://hilobrow.com/wp-content/uploads/2011/03/bridle1-150x150.jpg'),(14,'Robocop','2016-03-09','fefe','iihfeiuh','97','This is','2016-03-09','Ado','2016-03-09 05:40:01','','http://hilobrow.com/wp-content/uploads/2011/03/bridle1-150x150.jpg'),(15,'Robocop','2016-03-09','fefe','iihfeiuh','97','This is','2016-03-09','Ado','2016-03-09 05:40:03','','http://hilobrow.com/wp-content/uploads/2011/03/bridle1-150x150.jpg'),(16,'Robocop','2016-03-09','fefe','iihfeiuh','97','This is','2016-03-09','Ado','2016-03-09 05:40:06','','http://hilobrow.com/wp-content/uploads/2011/03/bridle1-150x150.jpg'),(17,'Robocop','2016-03-09','fefe','iihfeiuh','97','This is','2016-03-09','Ado','2016-03-09 05:40:08','','http://hilobrow.com/wp-content/uploads/2011/03/bridle1-150x150.jpg'),(18,'Robocop','2016-03-09','fefe','iihfeiuh','97','This is','2016-03-09','Ado','2016-03-09 05:40:10','','http://hilobrow.com/wp-content/uploads/2011/03/bridle1-150x150.jpg'),(19,'Robocop','2016-03-09','fefe','iihfeiuh','97','This is','2016-03-09','Ado','2016-03-09 05:40:13','','http://hilobrow.com/wp-content/uploads/2011/03/bridle1-150x150.jpg'),(20,'Robocop','2016-03-09','fefe','iihfeiuh','97','This is','2016-03-09','Ado','2016-03-09 05:40:16','','http://hilobrow.com/wp-content/uploads/2011/03/bridle1-150x150.jpg'),(21,'Robocop','2016-03-09','fefe','iihfeiuh','97','This is','2016-03-09','Ado','2016-03-09 05:40:18','','http://hilobrow.com/wp-content/uploads/2011/03/bridle1-150x150.jpg'),(22,'Robocop','2016-03-09','fefe','iihfeiuh','97','This is','2016-03-09','Ado','2016-03-09 05:40:27','','http://hilobrow.com/wp-content/uploads/2011/03/bridle1-150x150.jpg'),(23,'Test Test','2016-03-09','s','tse','tseset','estset','2016-03-09','set','2016-03-09 05:51:41','','http://hilobrow.com/wp-content/uploads/2011/03/209-WomanHulk149-150x150.jpg'),(24,'Test Test','2016-03-09','s','tse','tseset','estset','2016-03-09','set','2016-03-09 05:51:46','','http://hilobrow.com/wp-content/uploads/2011/03/209-WomanHulk149-150x150.jpg'),(25,'Jm','2016-03-11','test','barriadda','12','tests sdf sdafsa sad fsda fdsafsd sdfsd fsdf dsfsdfdsfsdfsd','2016-03-11','jino lacson','2016-03-11 04:08:59','','http://hilobrow.com/wp-content/uploads/2011/03/53-GirlsDetailSmaller-150x150.jpg'),(26,'da last','2016-03-11','sdfds','sdfdsfdsf','12','sdfds','2016-03-11','ako','2016-03-11 04:10:53','','http://hilobrow.com/wp-content/uploads/2011/03/RevereHarvardEngraving-150x150.jpg'),(27,'KUNG FU PANDA 3','2016-03-11','1234234','PH','125','kung fu panda na','2016-03-11','jm,jino','2016-03-11 06:31:58','','http://hilobrow.com/wp-content/uploads/2011/03/AngusYoung11-150x150.jpg'),(28,'Power Ranger','2016-03-14','imbd','test','20','dfsafsfsdfsdf sfsd sdfsa asfsad sd fsdfds fsd sadfasd f','2016-03-14','jino lacson','2016-03-14 03:29:14','','http://hilobrow.com/wp-content/uploads/2011/03/Gorey-IAmTheBahhumBug-150x150.jpg');
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movies_casts`
--

LOCK TABLES `movies_casts` WRITE;
/*!40000 ALTER TABLE `movies_casts` DISABLE KEYS */;
INSERT INTO `movies_casts` VALUES (1,1,1),(3,1,2),(4,2,2),(5,3,2),(6,4,2),(8,1,5),(9,2,5),(10,3,5),(11,4,5),(13,1,4),(14,2,4),(15,3,4),(16,4,4),(18,1,3),(19,2,3),(20,3,3),(21,4,3),(22,2,6),(23,2,7),(24,2,8),(25,2,9),(26,2,10),(27,2,11),(28,2,12),(29,2,13),(30,2,14),(31,2,15),(32,2,16),(33,2,17),(34,2,18),(35,2,19),(36,2,20),(37,2,21),(38,2,22),(39,3,23),(40,3,24),(41,1,25),(42,2,25),(43,3,25),(44,2,26),(45,1,27),(46,3,27),(47,1,28),(48,2,28),(49,3,28);
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movies_genres`
--

LOCK TABLES `movies_genres` WRITE;
/*!40000 ALTER TABLE `movies_genres` DISABLE KEYS */;
INSERT INTO `movies_genres` VALUES (4,2,3),(8,5,4),(14,4,28),(17,3,3),(18,3,4),(19,3,5),(20,3,6),(21,3,7),(22,3,8),(23,3,9),(24,3,10),(25,3,11),(26,3,12),(27,3,13),(28,3,14),(29,3,15),(30,3,16),(31,3,17),(32,3,18),(33,3,19),(34,3,20),(35,3,21),(36,3,22),(37,3,23),(38,3,24),(39,3,25),(40,3,26),(41,3,27),(42,3,28),(45,1,6),(46,6,13),(47,7,13),(48,8,13),(49,9,13),(50,10,13),(51,11,13),(52,12,13),(53,13,13),(54,14,13),(55,15,13),(56,16,13),(57,17,13),(58,18,13),(59,19,13),(60,20,13),(61,21,13),(62,22,13),(63,23,22),(64,24,22),(65,25,26),(66,26,28),(67,27,6),(68,27,8),(69,28,7),(70,28,10);
/*!40000 ALTER TABLE `movies_genres` ENABLE KEYS */;
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seasons`
--

LOCK TABLES `seasons` WRITE;
/*!40000 ALTER TABLE `seasons` DISABLE KEYS */;
INSERT INTO `seasons` VALUES (14,7,'season 1','s01'),(15,7,'season 2','s02'),(16,7,'season 3','s03'),(17,7,'season 4','s04'),(18,7,'season 5','s05'),(19,7,'season 6','s06'),(20,7,'season 7','s07'),(21,1,'season 1','so1');
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
  `year` date NOT NULL,
  `IMDB` varchar(255) NOT NULL COMMENT 'main imdb link ',
  `country` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `releasedate` date NOT NULL,
  `director` varchar(255) NOT NULL,
  `languages` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tvshows`
--

LOCK TABLES `tvshows` WRITE;
/*!40000 ALTER TABLE `tvshows` DISABLE KEYS */;
INSERT INTO `tvshows` VALUES (1,'Prophecy','2016-03-14','7.9 /10','test','23','Richard Cyper rescues Kahlan, a mysterious confessor from the Midlands sent to give the Book of Counted Shadows to the one true seeker. Zed, an old man who lives nearby, tells Richard that he is this seeker and gives him the Sword of Truth...','2016-03-14','jino','english','https://static4.solarmovie.ph/images/movies/0d/36/bb/38cb1547384a859a12bc4507cc/1_150x220.jpg','2016-03-27 06:58:31'),(2,'a','2016-03-14','a','a','a','a','2016-03-14','a','a','http://hilobrow.com/wp-content/uploads/2011/03/butter_gold_graph-150x150.jpg','2016-03-28 06:58:38'),(3,'The Monkey','2016-03-14','imbd2','sdfdsf','dsfdsfsdfs','sdfsdfdsf','2016-03-14','asfdsf','sdfdsf','http://hilobrow.com/wp-content/uploads/2011/03/ectoplasm-136x300.jpg','2016-03-28 06:58:45'),(4,'The Monkey 2','2016-03-14','fsdfds','dfsdfsd','sdfsdf','sdfsdf','2016-03-14','dsfds','dsfsd','http://hilobrow.com/wp-content/uploads/2011/03/gilgamesh-epic12-150x150.jpg','2016-03-28 06:58:50'),(5,'new tv show','2016-03-15','test','test','test','test','2016-03-15','test','tes','http://hilobrow.com/wp-content/uploads/2011/03/hr_lg_butter-150x150.jpg','2016-03-28 06:58:59'),(6,'episodes t first','2016-03-15','sdfsdf','stset','setest','setsetsetes','2016-03-15','testst','estset','http://hilobrow.com/wp-content/uploads/2011/03/italy-150x150.jpg','2016-03-31 02:54:16'),(7,'kabanata pangalawa','2016-03-15','dsf','sdfds','dsf','sdfsd','2016-03-16','sdfds','dsf','http://hilobrow.com/wp-content/uploads/2011/03/kirby-devil-150x150.jpg','2016-03-31 07:38:03');
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tvshows_casts`
--

LOCK TABLES `tvshows_casts` WRITE;
/*!40000 ALTER TABLE `tvshows_casts` DISABLE KEYS */;
INSERT INTO `tvshows_casts` VALUES (1,3,2),(2,3,5),(3,3,6);
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tvshows_genres`
--

LOCK TABLES `tvshows_genres` WRITE;
/*!40000 ALTER TABLE `tvshows_genres` DISABLE KEYS */;
INSERT INTO `tvshows_genres` VALUES (1,3,6),(2,3,6),(3,3,4),(4,1,16),(5,7,25);
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

-- Dump completed on 2016-04-01  6:54:23
