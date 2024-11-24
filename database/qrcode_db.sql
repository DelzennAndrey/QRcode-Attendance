/*
SQLyog Community v13.2.1 (64 bit)
MySQL - 10.4.28-MariaDB : Database - qrcode_attendance
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`qrcode_attendance` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `qrcode_attendance`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `admin` */

/*Table structure for table `event` */

DROP TABLE IF EXISTS `event`;

CREATE TABLE `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(50) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `event` */

insert  into `event`(`id`,`event_name`,`date`) values 
(1,'meeting','2024-11-18');

/*Table structure for table `student` */

DROP TABLE IF EXISTS `student`;

CREATE TABLE `student` (
  `student_id` char(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `student` */

insert  into `student`(`student_id`,`name`,`course`,`department`,`password`) values 
('2022','delzenn mendez','BSIT','CICT','12345');

/*Table structure for table `students_attendance` */

DROP TABLE IF EXISTS `students_attendance`;

CREATE TABLE `students_attendance` (
  `attendance_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` char(15) NOT NULL,
  `event_id` int(11) NOT NULL,
  `in` char(20) DEFAULT NULL,
  `out` char(20) DEFAULT NULL,
  PRIMARY KEY (`attendance_id`),
  KEY `event_id` (`event_id`),
  KEY `student_id` (`student_id`),
  CONSTRAINT `students_attendance_ibfk_2` FOREIGN KEY (`event_id`) REFERENCES `event` (`id`),
  CONSTRAINT `students_attendance_ibfk_3` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `students_attendance` */

insert  into `students_attendance`(`attendance_id`,`student_id`,`event_id`,`in`,`out`) values 
(1,'2022',1,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
