# ************************************************************
# Sequel Pro SQL dump
# Version 3408
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.25)
# Database: challenge
# Generation Time: 2013-02-25 16:06:30 +0000
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
  `challengee_id` int(11) unsigned DEFAULT NULL,
  `challenge_name` varchar(255) DEFAULT NULL,
  `challenge_desc` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`challenge_id`),
  KEY `challenger_id` (`challenger_id`),
  KEY `challengee_id` (`challengee_id`),
  CONSTRAINT `challenges_ibfk_3` FOREIGN KEY (`challenger_id`) REFERENCES `users` (`user_id`),
  CONSTRAINT `challenges_ibfk_4` FOREIGN KEY (`challengee_id`) REFERENCES `users` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `challenges` WRITE;
/*!40000 ALTER TABLE `challenges` DISABLE KEYS */;

INSERT INTO `challenges` (`challenge_id`, `challenger_id`, `challengee_id`, `challenge_name`, `challenge_desc`)
VALUES
	(3,1,1,'ssd','sssa'),
	(4,1,1,'ssd','sssa'),
	(5,1,1,'vhjvhjghj','gghghjghghkghk'),
	(6,1,1,'o','o');

/*!40000 ALTER TABLE `challenges` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table user_friends
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user_friends`;

CREATE TABLE `user_friends` (
  `fb_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `fb_image` varchar(200) DEFAULT NULL,
  `fb_location` varchar(255) DEFAULT NULL,
  `fname` varchar(200) DEFAULT NULL,
  `lname` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`fb_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



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
	(2,NULL,'casey','casey','seancasey09@gmail.com','aa062e9b90f8245934f9399c280202d1'),
	(3,NULL,'Sean','Sean','seancasey08dsds@gmail.com','aa062e9b90f8245934f9399c280202d1'),
	(4,NULL,'Sean','Sean','seancasey0ds8@gmail.com','aa062e9b90f8245934f9399c280202d1'),
	(5,NULL,'Sean','Sean','seancaseywassda08@gmail.com','aa062e9b90f8245934f9399c280202d1'),
	(6,NULL,'Sean','Sean','seancasey9908@gmail.com','aa062e9b90f8245934f9399c280202d1');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
