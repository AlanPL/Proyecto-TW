CREATE DATABASE  IF NOT EXISTS `semestre20202` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `semestre20202`;
-- MySQL dump 10.13  Distrib 8.0.20, for Win64 (x86_64)
--
-- Host: localhost    Database: semestre20202
-- ------------------------------------------------------
-- Server version	8.0.20

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin` (
  `idadmin` int NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `correo` varchar(128) NOT NULL,
  `contrasena` varchar(45) NOT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'admin','admin@admin.com','admin');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `alumno`
--

DROP TABLE IF EXISTS `alumno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `alumno` (
  `boleta` varchar(10) NOT NULL,
  `nombre` varchar(64) NOT NULL,
  `primerApe` varchar(64) NOT NULL,
  `segundoApe` varchar(64) DEFAULT NULL,
  `correo` varchar(128) NOT NULL,
  `fechaNac` date DEFAULT NULL,
  `contrasena` varchar(32) NOT NULL,
  `auditoria` datetime NOT NULL,
  `estado` varchar(45) NOT NULL,
  PRIMARY KEY (`boleta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumno`
--

LOCK TABLES `alumno` WRITE;
INSERT INTO `alumno` (boleta,nombre,primerApe,segundoApe,correo,fechaNac,contrasena,auditoria,estado) 
  VALUES ('2019630149', 'Wade', 'paterno', 'materno', 'correo@alumno.com', '1999-05-21', '12345678', '2020-06-15','nada'),
  ('2354510', 'Bob', 'paterno', 'materno', 'ejemplo@correo.com', '1999-05-21', '87654321', '2020-06-15','nada'),
  ('1278452', 'Pedro', 'paterno', 'materno', 'correo@gmail.com', '1999-05-21', 'constrasena', '2020-06-15','nada');
/*!40000 ALTER TABLE `alumno` DISABLE KEYS */;
/*!40000 ALTER TABLE `alumno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `materia`
--

DROP TABLE IF EXISTS `materia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `materia` (
  `Id_materia` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(40) NOT NULL,
  `Nivel` varchar(10) NOT NULL,
  PRIMARY KEY (`Id_materia`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `materia`
--

LOCK TABLES `materia` WRITE;
INSERT INTO `materia` VALUES (101, 'Analisis Vectorial', 1), (102, 'Calculo', 1), (103,'Matematicas Discretas', 1), (104, 'Algoritmia y Programacion Estructurada', 1),
        (105, 'Fisica', 1), (106, 'Ingenieria, Etica y Sociedad', 1);
INSERT INTO `materia` VALUES (201, 'Ecuaciones diferenciales', 2), (202, 'Algebra Lineal', 2), (203,'Calculo Aplicado', 2), (204, 'Estructura de datos', 2),
        (205, 'Comunicacion Oral y Escrita', 2), (206, 'Analisis Fundamental de Circuitos', 2);
INSERT INTO `materia` VALUES (301, 'Matematicas Avanzadas para la Ingenieria', 3), (302, 'Fundamentos Economicos', 3), (303,'Fundamentos de Diseno Digital', 3), 
        (304, 'Teoria Computacional', 3), (305, 'Base de Datos', 3), (306, 'Programacion Orientada a Objetos', 3), (307, 'Electronica Analogica', 3);
INSERT INTO `materia` VALUES (401, 'Redes de computadoras', 4), (402,'Diseno de Sistemas Digitales', 4), (403, 'Probabilidad y Estadistica', 4), (404,'Sistemas Operativos', 4),
        (405, 'Analisis y Diseno Orientado a Objetos', 4), (406, 'Tecnologias para la Web', 4), (407,'Administracion Financiera', 4);
/*!40000 ALTER TABLE `materia` DISABLE KEYS */;
/*!40000 ALTER TABLE `materia` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

--
-- Table structure for table `horario`
--

DROP TABLE IF EXISTS `horario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `horario` (
  `boleta` varchar(10) NOT NULL,
  `Id_materia` int NOT NULL AUTO_INCREMENT,
  `recurse` int NOT NULL, /*0:primera vez, 1:recurse, 2:Ya quemo recurse*/
  KEY `boleta` (`boleta`),
  KEY `horario_ibfk_2_idx` (`Id_materia`),
  CONSTRAINT `horario_ibfk_1` FOREIGN KEY (`boleta`) REFERENCES `alumno` (`boleta`),
  CONSTRAINT `horario_ibfk_2` FOREIGN KEY (`Id_materia`) REFERENCES `materia` (`Id_materia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `horario`
--

LOCK TABLES `horario` WRITE;
INSERT INTO `horario` (boleta,Id_materia,recurse) VALUES ('2019630149', '201', 1), ('2019630149','202', 1), ('2019630149','302', 2),  
  ('2354510', '201', 1),('2354510', '204', 2),('2354510', '304', 2),('1278452', '202',0),('1278452', '201', 1),('1278452', '302', 0);
/*!40000 ALTER TABLE `horario` DISABLE KEYS */;
/*!40000 ALTER TABLE `horario` ENABLE KEYS */;
UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-05-22 12:36:40
