# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.38)
# Database: mycms
# Generation Time: 2018-03-27 14:30:22 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `cat_id` int(10) NOT NULL AUTO_INCREMENT,
  `cat_title` varchar(50) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;

INSERT INTO `categories` (`cat_id`, `cat_title`)
VALUES
	(16,'Ipsums');

/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table comments
# ------------------------------------------------------------

DROP TABLE IF EXISTS `comments`;

CREATE TABLE `comments` (
  `comment_id` int(10) NOT NULL AUTO_INCREMENT,
  `post_id` int(10) NOT NULL,
  `comment_name` varchar(100) NOT NULL,
  `comment_email` varchar(100) NOT NULL,
  `comment_text` text NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;

INSERT INTO `comments` (`comment_id`, `post_id`, `comment_name`, `comment_email`, `comment_text`, `status`)
VALUES
	(1,4,'Wali','awpareshan@gmail.com','hello world, this is a test comment. ','approve'),
	(2,8,'John','john@john.com','Hello this is another testing comment. ','approve'),
	(3,4,'Wali','wali@wali.com','hey another comment is coming. ','approve'),
	(6,4,'Ayesha','bilal@yahoo.com','Hey, what to do with the CMS of Malala Yousafzai. ','approve'),
	(7,4,'Naiza ','naz@gmail.com','hey this is one more comment. ','approve'),
	(8,11,'Jahan','jan@gmail.com','hello again, a test comment. ','unapprove'),
	(9,8,'Hello','hello@hello.com','Hey, simple comment is this one. ','unapprove');

/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table posts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `post_id` int(10) NOT NULL AUTO_INCREMENT,
  `category_id` int(10) NOT NULL,
  `post_title` varchar(100) NOT NULL,
  `post_date` text NOT NULL,
  `post_author` varchar(50) NOT NULL,
  `post_keywords` text NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;

INSERT INTO `posts` (`post_id`, `category_id`, `post_title`, `post_date`, `post_author`, `post_keywords`, `post_image`, `post_content`)
VALUES
	(16,16,'Bob Ross Ipsum ','03-23-18','Ben Turner','','ows_151794076550312.jpg','<p>bob ross ipsum bob ross ipsum bob ross ipsum bob ross ipsumbob ross ipsumbob ross ipsumbob ross ipsumbob ross ipsumbob ross ipsumbob ross ipsumbob ross ipsum</p>'),
	(17,16,'Hoder Ipsum','03-27-18','Ben Turner','','cq5dam.web.1200.675.jpeg','<p>Hodor. Hodor HODOR hodor, hodor HODOR hodor, hodor hodor hodor hodor. Hodor, hodor hodor hodor hodor, hodor. Hodor hodor hodor! Hodor hodor - hodor hodor hodor - hodor... Hodor hodor hodor. Hodor. Hodor hodor; hodor hodor, hodor. Hodor hodor. Hodor. Hodor hodor HODOR! Hodor hodor - hodor hodor hodor hodor; hodor hodor, hodor, hodor hodor.</p>\r\n<p>Hodor HODOR hodor, hodor hodor, hodor. Hodor HODOR hodor, hodor hodor. Hodor. Hodor, hodor hodor hodor; hodor hodor. Hodor hodor HODOR! Hodor hodor, hodor. Hodor HODOR hodor, hodor hodor hodor. Hodor. Hodor. Hodor hodor hodor... Hodor hodor hodor hodor.</p>'),
	(18,16,'Samuel L Ipsum ','03-27-18','Ben Turner','','images.jpeg','<p>Well, the way they make shows is, they make one show. That show\'s called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they\'re going to make more shows. Some pilots get picked and become television programs. Some don\'t, become nothing. She starred in one of the ones that became nothing.</p>\r\n<p>Well, the way they make shows is, they make one show. That show\'s called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they\'re going to make more shows. Some pilots get picked and become television programs. Some don\'t, become nothing. She starred in one of the ones that became nothing.</p>'),
	(19,16,'Bacon Ipsum','03-27-18','Ben Turner','','download.jpeg','<p>Bacon ipsum dolor amet short ribs chuck venison porchetta frankfurter ham. Meatball sausage ground round, chicken salami pork chop leberkas andouille rump ham pork loin ball tip. Fatback landjaeger shoulder ham hock pig cow ribeye corned beef meatball shank. Meatloaf ball tip chuck pastrami. Landjaeger short loin spare ribs, tail buffalo brisket beef ribs ribeye. Tongue pork beef jowl filet mignon cow ground round picanha kevin drumstick.</p>\r\n<p>Short ribs spare ribs flank sausage tongue kielbasa pork loin. Pork chop shankle pork loin, pig hamburger chuck fatback andouille shoulder frankfurter burgdoggen ham hock filet mignon. Kevin jerky doner leberkas spare ribs. Turducken meatball cupim ham hock, boudin prosciutto filet mignon jowl pig shankle.</p>\r\n<p>Bacon ipsum dolor amet short ribs chuck venison porchetta frankfurter ham. Meatball sausage ground round, chicken salami pork chop leberkas andouille rump ham pork loin ball tip. Fatback landjaeger shoulder ham hock pig cow ribeye corned beef meatball shank. Meatloaf ball tip chuck pastrami. Landjaeger short loin spare ribs, tail buffalo brisket beef ribs ribeye. Tongue pork beef jowl filet mignon cow ground round picanha kevin drumstick.</p>\r\n<p>Short ribs spare ribs flank sausage tongue kielbasa pork loin. Pork chop shankle pork loin, pig hamburger chuck fatback andouille shoulder frankfurter burgdoggen ham hock filet mignon. Kevin jerky doner leberkas spare ribs. Turducken meatball cupim ham hock, boudin prosciutto filet mignon jowl pig shankle.</p>'),
	(20,16,'Cheese Ipsum','03-27-18','Ben Turner','','download (1).jpeg','<p style=\"margin: 1em 0px; color: #614f41; font-family: adelle, serif; font-size: 16px;\">Pepper jack cow babybel. Danish fontina cow roquefort fondue croque monsieur fromage frais when the cheese comes out everybody\'s happy rubber cheese. Cheeseburger cheddar cut the cheese hard cheese croque monsieur airedale emmental jarlsberg. Cheese strings airedale blue castello port-salut pepper jack cheesy grin.</p>\r\n<p style=\"margin: 1em 0px; color: #614f41; font-family: adelle, serif; font-size: 16px;\">Dolcelatte ricotta cheese and wine. Ricotta babybel fromage frais queso ricotta blue castello queso macaroni cheese. Roquefort pepper jack goat cauliflower cheese babybel airedale cheese triangles feta. When the cheese comes out everybody\'s happy pecorino cream cheese cream cheese cheeseburger.</p>');

/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`user_id`, `user_name`, `user_password`)
VALUES
	(3,'ben','test123');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
