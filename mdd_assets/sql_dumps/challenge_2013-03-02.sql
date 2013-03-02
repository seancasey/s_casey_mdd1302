# ************************************************************
# Sequel Pro SQL dump
# Version 3408
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.25)
# Database: challenge
# Generation Time: 2013-03-02 21:36:50 +0000
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
  `comment_date` date DEFAULT NULL,
  `commenter_id` int(11) unsigned DEFAULT NULL,
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
	(96,1,1,'vghjvgjkvghj','ghcghvhvg',2,NULL,NULL,NULL),
	(99,2,1,'vghjvgjkvghj','ghcghvhvg',2,NULL,NULL,NULL),
	(102,2,1,'fghj','cfgcvgjh',2,NULL,NULL,NULL),
	(104,1,1,'dsfdfd','fadfadsfa',2,NULL,NULL,NULL),
	(105,2,1,'daffd','dsadasdas',1,NULL,NULL,NULL),
	(118,1,1,'hgdsghdjasd','dbsdjkasbdkabsd',2,NULL,NULL,NULL),
	(119,1,1,'hgdsghdjasd','dbsdjkasbdkabsd',2,NULL,NULL,NULL),
	(120,1,1,'hgdsghdjasd','dbsdjkasbdkabsd',1,NULL,NULL,NULL),
	(122,1,1,'hgdsghdjasd','dbsdjkasbdkabsd',1,NULL,NULL,NULL),
	(123,1,1,'hgdsghdjasd','dbsdjkasbdkabsd',1,NULL,NULL,NULL),
	(125,1,1,'gfgfgf','fdgdfgdf',1,NULL,NULL,NULL),
	(130,1,2,'Fgdgg','Dd',NULL,NULL,NULL,NULL),
	(131,1,3,'Test challenge','testing',NULL,NULL,NULL,NULL);

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



# Dump of table friend_list
# ------------------------------------------------------------

DROP TABLE IF EXISTS `friend_list`;

CREATE TABLE `friend_list` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) unsigned DEFAULT NULL,
  `fid` int(11) unsigned DEFAULT NULL,
  `confirmed` int(2) DEFAULT NULL,
  `link_code` varchar(255) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `friend_list` WRITE;
/*!40000 ALTER TABLE `friend_list` DISABLE KEYS */;

INSERT INTO `friend_list` (`id`, `uid`, `fid`, `confirmed`, `link_code`, `email`)
VALUES
	(1,1,1,0,'4f6c363e174425bd5b614b35002cf6a7','sean@sean.com'),
	(2,1,1,0,'7869923a4fc9396094ab649d5de211ab','seancasey08@gmail.com'),
	(3,1,1,0,'17f8871ac05e86563c7213ca57da0305','adssa@fd.com'),
	(4,1,1,0,'01e293804316c0299287e77af7bc860b','seaf@dd.com'),
	(5,1,1,0,'21974cfa0d5b04f139de7fd5107c7173','www@ddd.com'),
	(6,1,1,0,'36f521f555e0b1b693c4bc1aaaab27da','aaa@www.com'),
	(7,1,1,0,'2909d89388c9fa6a880f0ffc8983617a','asaas@sasa.com'),
	(8,1,1,0,'0c5204caefb0a54ebeaee0e95f844914','dsda@dsdsd.com'),
	(9,1,1,0,'1439ff9a19384ea4d2bbe50d3d14b98a','fghj@fh.com'),
	(10,1,1,0,'07aee3b7f0459ca5cdc4ccc8652083df','fhtj@rdgh.com'),
	(11,1,1,0,'7b6feba4c5babe31b858acc35daf50db','xcfxffg@ghjfj.com'),
	(12,1,1,0,'d819a8e7b9268b272a5a35b97e6b7b43','dfghdfgfg@fdddh.com'),
	(13,1,1,0,'90b85b2cef40dc4a6198372fa47da405','sdgfhg@dfg.com'),
	(14,1,1,0,'8b3c7e14e9c7f98f982eade2393b821f','fhcfhgchfg@vghv.com'),
	(15,1,1,0,'d3c54b961bf1696ea26f8d4aec66e784','ccs@dfasdas.com'),
	(16,1,1,0,'e15b2d59ed13c9c6d3e86b5dce007eb0','romion34@gmail.com'),
	(17,1,1,0,'a4322316cd4a4a9e13a596d2d08fe298','romion34@gmail.com'),
	(18,1,1,0,'cbb89b91348e56ae6a2d03652d27856f','keithkeith41@gmail.com'),
	(19,1,1,0,'c5f7be9e0d72723af3806dc4285c25a2','seancasey08@gmail.com'),
	(20,1,1,0,'a0149a85d91963928b56afe47a508856','romion34@gmail.com'),
	(21,1,1,0,'995bffcd607b81e1b6c9bfff90a5ed12','seancasey08@gmail.com'),
	(22,1,1,0,'d625d422db097a16e883bd3a3fefb35d','seancasey08@gmail.com'),
	(23,1,1,0,'d34da37c088b18a57981b406dda7ea73','seancasey08@gmail.com'),
	(24,1,0,0,'57d2a6696dc326c3777be3099266b407','poop@gmail.com');

/*!40000 ALTER TABLE `friend_list` ENABLE KEYS */;
UNLOCK TABLES;


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
