# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.7.34)
# Database: ctf
# Generation Time: 2022-11-11 08:13:49 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table messages
# ------------------------------------------------------------

DROP TABLE IF EXISTS `messages`;

CREATE TABLE `messages` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` text,
  `message` text,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;

INSERT INTO `messages` (`id`, `name`, `message`, `date`)
VALUES
	(2,'Gregg','Guys, I have removed the menu for editing items, because there were bugs and I don\'t have time to deal with them now. For now, talk to me and I will add them directly to the database.','2022-11-15 08:35:37'),
	(3,'Pat','Hi everyone! I did some minor modifications to the menu for editing items, go check them out! It should work.','2022-11-14 12:30:00'),
	(4,'John','Hello. I will be off for the next week.','2022-11-16 10:15:15'),
	(5,'Bob','Folks, I just shipped the last \'Cap\' that we had available. Maybe we need to order?','2022-11-18 09:30:33'),
	(6,'Jack','Okay, I will order next week.','2022-11-18 11:27:45'),
	(7,'Jack','Team, I am attaching the invoices for october. Please, keep them secure. It is top secret as our competitor will try to benefit from this information! Gregg has encrypted them (he said that he developed custom PHP encryption script, so he did it for me). Thanks.','2022-11-01 08:00:00'),
	(8,'John','Jack, where is the attachment? I will talk to Greg, so that he helps me decrypt them. Smart of him to use custom encryption method.','2022-11-01 09:04:47'),
	(9,'Jack','Sorry, it is <a href=\'/admin/files/3c74636c936ab5898b91a56c119b389f.txt\'> here </a>','2022-11-01 10:58:31'),
	(11,'John','Hi everyone, we just hired a new member of our team! Meet Pat, she will be our intern for the next 3 months.','2022-10-10 09:43:00'),
	(12,'Alice','Hi Pat! Guys, I have some ideas about the products page, please schedule a meeting and send me an invite.','2022-10-11 08:15:00'),
	(13,'Pat','Hi everyone! I am glad to be part of this team.','2022-10-10 11:30:30');

/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table orders
# ------------------------------------------------------------

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `product` int(11) unsigned NOT NULL,
  `name` varchar(200) DEFAULT '',
  `phone` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `reviewed` tinyint(1) NOT NULL DEFAULT '0',
  `session` text,
  PRIMARY KEY (`id`),
  KEY `product` (`product`),
  CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`product`) REFERENCES `products` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table products
# ------------------------------------------------------------

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(33) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `path` varchar(33) DEFAULT NULL,
  `hidden` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;

INSERT INTO `products` (`id`, `name`, `price`, `stock`, `path`, `hidden`)
VALUES
	(1,'Shoes',35,35,'images/1.webp',0),
	(2,'Jacket',65,3,'images/2.webp',0),
	(3,'Cap',15,0,'images/3.webp',0),
	(4,'CDF{5eEk_aND_Y0u_5hAll_F1nd}',1337,1337,'images/4.webp',1),
	(5,'Sunglasses',30,15,'images/5.webp',0),
	(6,'Funny cup',10,12,'images/6.webp',0),
	(7,'T-Shirt',15,44,'images/7.webp',0),
	(8,'Shirt',20,20,'images/8.webp',0),
	(9,'Sneakers',55,15,'images/9.webp',0),
	(10,'Gloves',13,25,'images/10.webp',0);

/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table reviews
# ------------------------------------------------------------

DROP TABLE IF EXISTS `reviews`;

CREATE TABLE `reviews` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` text,
  `comment` text,
  `hidden` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `reviews` WRITE;
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;

INSERT INTO `reviews` (`id`, `name`, `comment`, `hidden`)
VALUES
	(1,'Adam D','This shop is amazing.. the service, the team and everything! Love it.',0),
	(2,'John J','I would order again.. guarantee it!',0),
	(3,'George L','The products are amazing!',0),
	(4,'Ali G','I wish the delivery was a bit faster, but everything else is superb',0),
	(5,'Alex A','CDF{p4r4M373r_m4573r}',1),
	(6,'Alice E','Can\'t wait for the new products!',0),
	(7,'Donald W','It\'s very cheap and good',0),
	(8,'Rajesh K','Me and my kids love it!',0);

/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `username`, `password`)
VALUES
	(1,'admin','XW!n#$oDLYk5k2SHk3na');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
