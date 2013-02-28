# ************************************************************
# Sequel Pro SQL dump
# Version 3408
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.25)
# Database: challenge
# Generation Time: 2013-02-28 04:18:08 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table challenge_comments
# ------------------------------------------------------------

DROP TABLE IF EXISTS `challenge_comments`;

CREATE TABLE `challenge_comments` (
  `challenge_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `comment_id` int(11) DEFAULT NULL,
  `comment` text,
  PRIMARY KEY (`challenge_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table challenge_type
# ------------------------------------------------------------

DROP TABLE IF EXISTS `challenge_type`;

CREATE TABLE `challenge_type` (
  `challenge_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `challenge_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`challenge_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table challenges
# ------------------------------------------------------------

DROP TABLE IF EXISTS `challenges`;

CREATE TABLE `challenges` (
  `challenge_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `challenger_id` int(11) unsigned DEFAULT NULL,
  `opponent_id` int(11) unsigned DEFAULT NULL,
  `challenge_name` varchar(255) DEFAULT NULL,
  `challenge_desc` varchar(255) DEFAULT NULL,
  `challenge_accepted` int(2) DEFAULT NULL,
  `challenge_completed` int(2) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `completed_date` date DEFAULT NULL,
  PRIMARY KEY (`challenge_id`),
  KEY `challenger_id` (`challenger_id`),
  KEY `opponent_id` (`opponent_id`),
  CONSTRAINT `challenges_ibfk_3` FOREIGN KEY (`challenger_id`) REFERENCES `users` (`user_id`),
  CONSTRAINT `challenges_ibfk_4` FOREIGN KEY (`opponent_id`) REFERENCES `users` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `challenges` WRITE;
/*!40000 ALTER TABLE `challenges` DISABLE KEYS */;

INSERT INTO `challenges` (`challenge_id`, `challenger_id`, `opponent_id`, `challenge_name`, `challenge_desc`, `challenge_accepted`, `challenge_completed`, `created_date`, `completed_date`)
VALUES
	(19,1,1,'test','test',NULL,NULL,NULL,NULL),
	(20,1,1,'test','test',1,NULL,NULL,NULL),
	(21,1,1,'dadasdas','sdasdassa',1,NULL,NULL,NULL),
	(22,1,1,'cfghfhj','szdfghjk',1,NULL,NULL,NULL),
	(23,1,1,'vghjvgjkvghj','ghcghvhvg',1,NULL,NULL,NULL),
	(24,1,1,'daa','sada',NULL,NULL,NULL,NULL),
	(25,1,1,'sgfhjvh','bvnvjbnm',NULL,NULL,NULL,NULL),
	(26,1,2,'fdafdafas','dasdasdaas',NULL,NULL,NULL,NULL),
	(27,1,4,'fdfdsfsf','dsfdsfsdf',NULL,NULL,NULL,NULL),
	(28,1,3,'edasdas','sdasdas',NULL,NULL,NULL,NULL),
	(29,1,3,'sdasa','sdasa',NULL,NULL,NULL,NULL),
	(30,1,2,'sasdas','sdsadasda',NULL,NULL,NULL,NULL),
	(31,1,3,'cdafafa','dfasdasdasdadas',NULL,NULL,NULL,NULL),
	(32,1,2,'sdfdadf','fdafadfada',NULL,NULL,NULL,NULL),
	(33,1,3,'vgjk','gyughj',NULL,NULL,NULL,NULL),
	(34,1,2,'Run 3 miles','I challenge you to run 3 miles honkey',NULL,NULL,NULL,NULL),
	(35,1,5,'Run 1 mile','1 lap around lake eola',NULL,NULL,NULL,NULL),
	(36,1,5,'finish your project','Do it',NULL,NULL,NULL,NULL),
	(37,1,5,'fsfsgfagfsg','fgsgfssfdgfsdgdsf',NULL,NULL,NULL,NULL),
	(38,1,5,'g','g',NULL,NULL,NULL,NULL),
	(39,1,3,'hjkhhk','hhkjhkhjkhjk',NULL,NULL,NULL,NULL),
	(40,1,5,'pooo','ppies',NULL,NULL,NULL,NULL),
	(41,1,3,'This is a long challenge name to test the wrap','daffdafadfa',NULL,NULL,NULL,NULL);

/*!40000 ALTER TABLE `challenges` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table facebook_users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `facebook_users`;

CREATE TABLE `facebook_users` (
  `fb_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `fb_image` varchar(200) DEFAULT NULL,
  `fb_location` varchar(255) DEFAULT NULL,
  `fname` varchar(200) DEFAULT NULL,
  `lname` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `user_id` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`fb_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table relations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `relations`;

CREATE TABLE `relations` (
  `relation_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `friend_id` int(11) unsigned NOT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`relation_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `relations` WRITE;
/*!40000 ALTER TABLE `relations` DISABLE KEYS */;

INSERT INTO `relations` (`relation_id`, `friend_id`, `user_id`)
VALUES
	(1,2,1),
	(2,3,1),
	(3,4,1),
	(4,5,1);

/*!40000 ALTER TABLE `relations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `fb_id` int(11) DEFAULT NULL,
  `fname` varchar(200) DEFAULT NULL,
  `lname` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`user_id`, `fb_id`, `fname`, `lname`, `email`, `password`)
VALUES
	(1,NULL,'seean','casey','seancasey08@gmail.com','aa062e9b90f8245934f9399c280202d1'),
	(2,NULL,'Keith','Caulkens','seancasey2474@gmail.com','aa062e9b90f8245934f9399c280202d1'),
	(3,NULL,'Angel','Diaz','seancasey08@gmail.com','aa062e9b90f8245934f9399c280202d1'),
	(4,NULL,'Simon','Fig-newton','seancasey08@gmail.com','aa062e9b90f8245934f9399c280202d1'),
	(5,NULL,'romaine','simon','seancasey08@gmail.com','aa062e9b90f8245934f9399c280202d1'),
	(6,NULL,'Brad','Cerny','seancasey2474@gmail.com','aa062e9b90f8245934f9399c280202d1');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
