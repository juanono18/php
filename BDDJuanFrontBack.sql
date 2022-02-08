-- MySQL dump 10.13  Distrib 5.7.36, for Win32 (AMD64)
--
-- Host: 127.0.0.1    Database: imgeuro
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.22-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `contenido`
--

DROP TABLE IF EXISTS `contenido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contenido` (
  `COD` int(11) NOT NULL AUTO_INCREMENT,
  `PAIS` varchar(50) DEFAULT NULL,
  `TITLE` varchar(90) DEFAULT NULL,
  `SUBTITLE` varchar(190) DEFAULT NULL,
  `TEXTO` longtext DEFAULT NULL,
  `IMG1` varchar(40) DEFAULT NULL,
  `IMG2` varchar(40) DEFAULT NULL,
  `FECHAPUBLI` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`COD`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contenido`
--

LOCK TABLES `contenido` WRITE;
/*!40000 ALTER TABLE `contenido` DISABLE KEYS */;
INSERT INTO `contenido` VALUES (1,'España','THERMANCIA, LA PETRA ESPAÑOLA','Un lugar mágico, que supera el paso del tiempo, en cada visita lo verás más grandioso','Tiermes fue una ciudad celtíbera emplazada en los límites de la cabecera del valle del Duero en la meseta superior y el valle del Tajo, a más de 1200 metros de altitud. Fue un oppidum celtibérico y luego municipium romano (cuyo nombre era Termes, y el gentilicio de sus habitantes, termestinos). Fue aliada de Numancia durante las guerras celtibéricas.\r\nActualmente se enclava en el término municipal de Montejo de Tiermes, provincia de Soria, comunidad autónoma de Castilla y León (España), en el límite con las provincias de Segovia y Guadalajara.','img/postimg/post1.png','img/postimg/post1_1.png','2022-02-08 16:15:18'),(2,'España','LA ALHAMBRA, EL SUEÑO NAZARÍ','Es una joya de la arquitectura, siendo la fusión de las culturas que han pasado por Granada a lo largo de la historia','La Alhambra es un complejo monumental sobre una ciudad palatina andalusí situado en Granada, España. Consiste en un conjunto de antiguos palacios, jardines y fortaleza (alcazaba, del árabe) inicialmente concebido para alojar al emir y la corte del Reino Nazarí, más tarde como residencia real castellana y de sus representantes. Su singularidad artística radica en los interiores de los palacios nazaríes, cuya decoración está entre las cumbres del arte andalusí, así como en su localización y adaptación, generando un paisaje nuevo pero totalmente integrado con la naturaleza preexistente. Además, alberga un museo de arte andalusí, la pinacoteca principal de la ciudad así como un antiguo convento convertido en Parador nacional.','img/postimg/post2.png','img/postimg/post2_1.png','2022-02-08 16:24:19'),(3,'España',' ISLAS COLUMBRETES','El conjunto de islas volcánicas españolas en el mediterraneo','Las Columbretes , son un archipiélago de pequeñas islas españolas de origen volcánico, ubicado en el mar Mediterráneo; a 49 kilómetros de distancia de la península ibérica (concretamente de Oropesa del Mar). Pertenecen administrativamente a Castellón de la Plana en la Comunidad Valenciana (España). Para su protección, en 1988 entraron a formar parte del Reserva natural de las Islas Columbretes, y en 1995 se sumó el entorno como Reserva marina de las Islas Columbretes. Están habitadas por varios equipos de vigilantes de manera permanente.','img/postimg/post3.png','img/postimg/post3_1.png','2022-02-08 16:40:57'),(4,'Italia','VENECIA Y SUS CANALES','La ciudad de los carnavales infinitos, te cautivará para siempre, solo con pisarla','Venecia, la capital de la región de Véneto en el norte de Italia, abarca más de 100 islas pequeñas en una laguna del mar Adriático. No tiene caminos, sino solo canales, incluida la vía pública del Gran Canal, bordeada de palacios renacentistas y góticos. En la plaza central de San Marcos, se encuentra la basílica de San Marcos, que tiene un suelo de mosaicos bizantinos, y el campanario Campanile con vista a los techos rojos de la ciudad.','img/postimg/post4.png','img/postimg/post4_1.png','2022-02-08 16:42:03'),(5,'Alemania','LA SELVA NEGRA',' Magnífica cuando llega el otoño y se cubre de oro, la Selva Negra constituye en cualquier caso uno de los rincones más agrestes de Alemania','La Selva Negra es una región montañosa en el suroeste de Alemania, que limita con Francia. Famosa por sus densos bosques de hoja perenne y las pintorescas villas, a menudo, se asocia con los cuentos de hadas de los hermanos Grimm. Es famosa por los spas y los relojes de cuco que se fabrican en la región desde el siglo XVIII. La ciudad más grande de la región, Friburgo, está llena de edificios góticos y la rodean viñedos.','img/postimg/post5.png','img/postimg/post5_1.png','2022-02-08 16:42:41'),(6,' Madagascar',' MADAGASCAR','La isla en la que la evolución, ha creado joyas vivas y sorprendentes','Madagascar es una enorme nación insular frente a la costa sureste de África. Alberga miles de especies animales, como lémures, que solo se encuentran en este lugar, junto con bosques tropicales, playas y arrecifes. Cerca de la ajetreada capital, Antananarivo, se ubica Ambohimanga, un complejo de palacios reales y cementerios en la ladera, junto con la “avenida de los Baobabs”, un camino de tierra bordeado de enormes árboles con siglos de antigüedad.','img/postimg/post7.png','img/postimg/post7_1.png','2022-02-08 16:44:45');
/*!40000 ALTER TABLE `contenido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `COD` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBREAPELL` varchar(120) DEFAULT NULL,
  `EMAIL` varchar(60) DEFAULT NULL,
  `USUARIO` varchar(60) DEFAULT NULL,
  `ALTA` date DEFAULT current_timestamp(),
  `BAJA` date DEFAULT NULL,
  `PASS` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`COD`),
  UNIQUE KEY `EMAIL` (`EMAIL`),
  UNIQUE KEY `USUARIO` (`USUARIO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-02-08 19:23:53
