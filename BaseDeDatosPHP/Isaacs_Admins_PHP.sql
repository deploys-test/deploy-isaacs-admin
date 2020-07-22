/*
SQLyog Community v12.5.1 (64 bit)
MySQL - 5.1.50-community : Database - isaacs_admins
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`isaacs_admins` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `isaacs_admins`;

/*Table structure for table `asignaturas` */

DROP TABLE IF EXISTS `asignaturas`;

CREATE TABLE `asignaturas` (
  `Asig_Id` int(2) NOT NULL,
  `Asig_Nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`Asig_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `asignaturas` */

insert  into `asignaturas`(`Asig_Id`,`Asig_Nombre`) values 
(1,'Humanidades Lengua Castellana'),
(2,'Compresion Lectora'),
(3,'Ingles'),
(4,'Ciencias Sociales'),
(5,'Formacion Ciudadana'),
(6,'Matematicas'),
(7,'Geometria'),
(8,'Educacion Religiosa'),
(9,'Ciencias Naturales '),
(10,'Educacion Artistica'),
(11,'Educacion Fisica'),
(12,'Informatica'),
(13,'Convivencia');

/*Table structure for table `calificaciones` */

DROP TABLE IF EXISTS `calificaciones`;

CREATE TABLE `calificaciones` (
  `Cal_Id` int(20) NOT NULL,
  `Est_Id` int(13) NOT NULL,
  `NivelE_Id` int(2) NOT NULL,
  `Asig_Id` int(10) NOT NULL,
  `Cal_Promedio` double NOT NULL,
  PRIMARY KEY (`Cal_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `calificaciones` */

insert  into `calificaciones`(`Cal_Id`,`Est_Id`,`NivelE_Id`,`Asig_Id`,`Cal_Promedio`) values 
(1,1001878316,81,1,3.8),
(2,1001878316,81,2,4.5),
(3,1001878316,81,3,4.9),
(4,1001878316,81,4,2.6),
(5,1001878316,81,5,4.9),
(6,1001878316,81,6,3.1),
(7,1001878316,81,7,3.6),
(8,1001878316,81,8,3.7),
(9,1001878316,81,9,2.9),
(10,1001878316,81,10,4.7),
(11,1001878316,81,11,2.3),
(12,1001878316,81,12,4.3),
(13,1001878316,81,13,3.6),
(14,1001318316,81,1,4.5),
(15,1001318316,81,2,3.5),
(16,1001318316,81,3,3.8),
(17,1001318316,81,4,2.9),
(18,1001318316,81,5,4.1),
(19,1001318316,81,6,3.2);

/*Table structure for table `certificados` */

DROP TABLE IF EXISTS `certificados`;

CREATE TABLE `certificados` (
  `Cert_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Est_Id` int(10) NOT NULL,
  `G_Id` varchar(3) NOT NULL,
  `NivelE_Id` int(10) NOT NULL,
  `Per_Id` int(1) NOT NULL,
  `Cert_Pdf` mediumtext,
  PRIMARY KEY (`Cert_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=308 DEFAULT CHARSET=utf8;

/*Data for the table `certificados` */

insert  into `certificados`(`Cert_Id`,`Est_Id`,`G_Id`,`NivelE_Id`,`Per_Id`,`Cert_Pdf`) values 
(306,1001878316,'6A',82,4,NULL);

/*Table structure for table `ciudades` */

DROP TABLE IF EXISTS `ciudades`;

CREATE TABLE `ciudades` (
  `Ciud_Id` int(10) NOT NULL,
  `Ciud_Nombre` varchar(25) NOT NULL,
  PRIMARY KEY (`Ciud_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ciudades` */

insert  into `ciudades`(`Ciud_Id`,`Ciud_Nombre`) values 
(41,'Barranquilla'),
(42,'Bogota'),
(43,'Medellin'),
(44,'Cali'),
(45,'Manizales'),
(46,'Cucuta'),
(47,'Santander');

/*Table structure for table `estudiantes` */

DROP TABLE IF EXISTS `estudiantes`;

CREATE TABLE `estudiantes` (
  `Est_Id` int(13) NOT NULL,
  `Est_Nombre` varchar(40) NOT NULL,
  `Est_Apellidos` varchar(40) NOT NULL,
  `Est_Email` varchar(75) NOT NULL,
  `Est_Telefono` decimal(10,0) NOT NULL,
  `Est_FechaNac` date NOT NULL,
  `G_Id` varchar(3) NOT NULL,
  `Ciud_Id` int(10) NOT NULL,
  `NivelE_Id` int(10) NOT NULL,
  `Est_AnoLectivo` int(4) NOT NULL,
  PRIMARY KEY (`Est_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `estudiantes` */

insert  into `estudiantes`(`Est_Id`,`Est_Nombre`,`Est_Apellidos`,`Est_Email`,`Est_Telefono`,`Est_FechaNac`,`G_Id`,`Ciud_Id`,`NivelE_Id`,`Est_AnoLectivo`) values 
(1001316878,'Camilo Andres','Montalvo Barrios','cmontalvob@misena.edu.co',3021123456,'1890-12-12','7C',41,83,2016),
(1001318316,'Jean Carlos','Cuentas Garcia','jcuentasgarcia@misena.edu.co',2031313134,'2018-03-31','10B',41,80,2018),
(1001878316,'Ivan Jose','Bernal Barrios','ibernalbarrios@misena.edu.co',3046839269,'2000-02-26','8A',43,83,2017);

/*Table structure for table `grados` */

DROP TABLE IF EXISTS `grados`;

CREATE TABLE `grados` (
  `G_Id` varchar(4) NOT NULL,
  PRIMARY KEY (`G_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `grados` */

insert  into `grados`(`G_Id`) values 
('10B'),
('10C'),
('11A'),
('11B'),
('6A'),
('6B'),
('6C'),
('7A'),
('7B'),
('7C'),
('8A'),
('8B'),
('8C'),
('9A'),
('9B'),
('9C');

/*Table structure for table `intensidad_horarias` */

DROP TABLE IF EXISTS `intensidad_horarias`;

CREATE TABLE `intensidad_horarias` (
  `Ih_Id` int(3) NOT NULL,
  `Ih_Horas` int(2) NOT NULL,
  `G_Id` varchar(3) NOT NULL,
  `Asig_Id` int(2) NOT NULL,
  PRIMARY KEY (`Ih_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `intensidad_horarias` */

insert  into `intensidad_horarias`(`Ih_Id`,`Ih_Horas`,`G_Id`,`Asig_Id`) values 
(60,3,'10B',1),
(61,4,'6A',1),
(62,2,'6A',2),
(63,4,'6A',3),
(64,2,'6A',4),
(65,3,'6A',5),
(66,2,'6A',6),
(67,2,'6A',7),
(68,1,'6A',8),
(69,2,'6A',9),
(70,1,'6A',10),
(71,2,'6A',11),
(72,2,'6A',12),
(73,1,'6A',13),
(74,5,'9C',1);

/*Table structure for table `nivel_desempeno` */

DROP TABLE IF EXISTS `nivel_desempeno`;

CREATE TABLE `nivel_desempeno` (
  `NivelD_Id` int(2) NOT NULL,
  `NivelD_Concepto` varchar(8) NOT NULL,
  `NivelD_RangoMin` varchar(4) NOT NULL,
  `NivelD_RangoMax` varchar(4) NOT NULL,
  PRIMARY KEY (`NivelD_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `nivel_desempeno` */

insert  into `nivel_desempeno`(`NivelD_Id`,`NivelD_Concepto`,`NivelD_RangoMin`,`NivelD_RangoMax`) values 
(71,'Bajo','1,0','2,9'),
(72,'Basico','3,0','3,9'),
(73,'Alto','4,0','4,5'),
(74,'Superior','4,6','5,0');

/*Table structure for table `nivel_educacion` */

DROP TABLE IF EXISTS `nivel_educacion`;

CREATE TABLE `nivel_educacion` (
  `NivelE_Id` int(10) NOT NULL,
  `NivelE_Nombre` varchar(25) NOT NULL,
  PRIMARY KEY (`NivelE_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `nivel_educacion` */

insert  into `nivel_educacion`(`NivelE_Id`,`NivelE_Nombre`) values 
(80,'Jardin Escolar'),
(81,'Basica Primaria'),
(82,'Basica Secundaria'),
(83,'Educacion Media');

/*Table structure for table `periodos` */

DROP TABLE IF EXISTS `periodos`;

CREATE TABLE `periodos` (
  `Per_Id` int(1) NOT NULL,
  `Per_FechaInicial` date NOT NULL,
  `Per_FechaFinal` date NOT NULL,
  PRIMARY KEY (`Per_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `periodos` */

insert  into `periodos`(`Per_Id`,`Per_FechaInicial`,`Per_FechaFinal`) values 
(1,'2017-02-24','2017-04-24'),
(2,'2017-03-27','2017-06-19'),
(3,'2017-06-21','2017-09-11'),
(4,'2017-10-10','2017-11-24');

/*Table structure for table `prof_asig` */

DROP TABLE IF EXISTS `prof_asig`;

CREATE TABLE `prof_asig` (
  `PA_Id` int(3) NOT NULL,
  `P_Id` int(3) NOT NULL,
  `Asig_Id` varchar(2) NOT NULL,
  `G_Id` varchar(3) NOT NULL,
  `PA_AnoLectivo` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `prof_asig` */

insert  into `prof_asig`(`PA_Id`,`P_Id`,`Asig_Id`,`G_Id`,`PA_AnoLectivo`) values 
(90,115,'1','10B',2018),
(92,111,'2','6A',2018),
(93,112,'11','7A',2018),
(94,113,'4','8C',2019),
(96,110,'12','11B',2018),
(115,115,'4','7A',2018);

/*Table structure for table `profesores` */

DROP TABLE IF EXISTS `profesores`;

CREATE TABLE `profesores` (
  `P_Id` decimal(13,0) NOT NULL,
  `P_Nombre` varchar(40) NOT NULL,
  `P_Apellidos` varchar(40) NOT NULL,
  `P_Email` varchar(50) NOT NULL,
  `P_Telefono` decimal(10,0) NOT NULL,
  `Ciud_Id` int(2) NOT NULL,
  `NivelE_Id` int(2) NOT NULL,
  PRIMARY KEY (`P_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `profesores` */

insert  into `profesores`(`P_Id`,`P_Nombre`,`P_Apellidos`,`P_Email`,`P_Telefono`,`Ciud_Id`,`NivelE_Id`) values 
(110,'Reinaldo','Gomez','reinagamez@misena.edu.co',3043319991,42,80),
(111,'Sivelys','Sarmiento Crespo','ssarmiento47@misena.edu.co',3023459189,42,83),
(112,'Ronald','Gonzales','rgomemo@misena.edu.co',2423423423,43,81),
(113,'Rafael','Hernandez','rafahernan@misena.edu.co',3126008210,44,83),
(114,'Peter ','Gomez','pgomez@misena.edu.co',3003319992,46,81),
(115,'Carlos','Arevalo','carevla.@gmail.com',3301998736,41,82);

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `Usuario` varchar(25) NOT NULL,
  `Clave` varchar(25) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `usuarios` */

insert  into `usuarios`(`Usuario`,`Clave`,`Email`) values 
('Administrador','1234','');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
