/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE DATABASE IF NOT EXISTS semestre20202;

#seleccionar
USE semestre20202;

#DROP TABLE IF EXISTS `Alumno`;

CREATE TABLE IF NOT EXISTS `Alumno` (
  `boleta` varchar(10) NOT NULL,
  `nombre` varchar(64) NOT NULL,
  `primerApe` varchar(64) NOT NULL,
  `segundoApe` varchar(64) DEFAULT NULL,
  `correo` varchar(128) NOT NULL,
  `fechaNac` date DEFAULT NULL,
  `contrasena` varchar(32) NOT NULL,
  `auditoria` datetime NOT NULL,
  PRIMARY KEY (`boleta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#DROP TABLE IF EXISTS `Materia`;

CREATE TABLE IF NOT EXISTS `Materia` (
	`Id_materia` varchar(10) NOT NULL,
	`Materia` varchar(40) NOT NULL,
    `Nivel` varchar(10) NOT NULL,
    PRIMARY KEY (`Id_materia`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

#DROP TABLE IF EXISTS `Horario`;

CREATE TABLE IF NOT EXISTS `Horario` (
	`boleta` varchar(10) NOT NULL,
	`Id_materia` varchar(10) NOT NULL,
	foreign key (`boleta`) references Alumno (`boleta`),
    foreign key (`Id_materia`) references Materia (`Id_materia`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
