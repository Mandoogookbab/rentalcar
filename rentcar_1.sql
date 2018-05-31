/*
SQLyog Community v13.0.0 (64 bit)
MySQL - 5.6.26 : Database - rentcar
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`rentcar` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `rentcar`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `admin_id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `address` varchar(20) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`admin_id`,`username`,`password`,`name`,`address`,`description`,`email`) values 
(1,'admin1','abc','minseon','seoul','administrator','indigosky94@naver.com'),
(2,'admin2','abc','jina','incheon','administrator','yeonjn95@naver.com');

/*Table structure for table `car_type` */

DROP TABLE IF EXISTS `car_type`;

CREATE TABLE `car_type` (
  `car_type_id` int(5) NOT NULL AUTO_INCREMENT,
  `car_type` varchar(30) DEFAULT NULL,
  `price` int(10) DEFAULT NULL,
  `capacity` int(5) DEFAULT NULL,
  `images` varchar(50) DEFAULT NULL,
  `bluetooth` varchar(10) DEFAULT NULL,
  `navigation` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`car_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `car_type` */

insert  into `car_type`(`car_type_id`,`car_type`,`price`,`capacity`,`images`,`bluetooth`,`navigation`) values 
(1,'ray',100,2,'','Y','Y'),
(2,'sm5',200,5,'','N','N'),
(3,'k7',300,5,'','Y','N'),
(4,'sorento',400,7,'','N','Y');

/*Table structure for table `customer` */

DROP TABLE IF EXISTS `customer`;

CREATE TABLE `customer` (
  `customer_id` int(5) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(10) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `customer` */

insert  into `customer`(`customer_id`,`customer_name`,`address`,`username`,`password`,`email`,`phone`) values 
(1,'jack','incheon','jack','abc','1234@1234',1012341234),
(2,'jane ','seoul','jane','abc','5678@5678',1056785678),
(3,'','','','','',0);

/*Table structure for table `reservation` */

DROP TABLE IF EXISTS `reservation`;

CREATE TABLE `reservation` (
  `reservation_id` int(5) NOT NULL AUTO_INCREMENT,
  `customer_id` int(5) DEFAULT NULL,
  `rent` date DEFAULT NULL,
  `return` date DEFAULT NULL,
  `res_time` datetime DEFAULT NULL,
  `cus_number` int(5) DEFAULT NULL,
  `is_confirmed` varchar(5) DEFAULT NULL,
  `is_paid` varchar(5) DEFAULT NULL,
  `car_type_id` int(5) DEFAULT NULL,
  PRIMARY KEY (`reservation_id`),
  KEY `customer_id` (`customer_id`),
  KEY `cartypefk` (`car_type_id`),
  CONSTRAINT `cartypefk` FOREIGN KEY (`car_type_id`) REFERENCES `car_type` (`car_type_id`),
  CONSTRAINT `customerfk` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `reservation` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
