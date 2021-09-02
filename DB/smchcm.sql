-- MySQL dump 10.13  Distrib 5.7.24, for Linux (x86_64)
--
-- Host: localhost    Database: smchcm
-- ------------------------------------------------------
-- Server version	5.7.24-0ubuntu0.18.04.1

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
-- Table structure for table `Acompanhante`
--

DROP TABLE IF EXISTS `Acompanhante`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Acompanhante` (
  `idAcomp` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Sexo` enum('M','F') COLLATE utf8mb4_unicode_ci NOT NULL,
  `GraoParentesco` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paci_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idAcomp`),
  KEY `acompanhante_paci_id_foreign` (`paci_id`),
  CONSTRAINT `acompanhante_paci_id_foreign` FOREIGN KEY (`paci_id`) REFERENCES `Paciente` (`idPacie`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Acompanhante`
--

LOCK TABLES `Acompanhante` WRITE;
/*!40000 ALTER TABLE `Acompanhante` DISABLE KEYS */;
INSERT INTO `Acompanhante` VALUES (1,'Alzira Faustino','F','Familiar',4,'2019-07-07 04:26:59','2019-07-07 04:26:59'),(3,'Tina Das Rosas','F','Familiar',7,'2019-07-16 19:37:34','2019-07-16 19:37:34'),(4,'Justino','M','Amigo',8,'2019-07-25 11:18:41','2019-07-25 11:18:41');
/*!40000 ALTER TABLE `Acompanhante` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Consulta`
--

DROP TABLE IF EXISTS `Consulta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Consulta` (
  `idCons` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `TipoServ` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TipoExame` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Descricao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Telefone` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acomp_id` int(10) unsigned NOT NULL,
  `sint_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idCons`),
  KEY `consulta_acomp_id_foreign` (`acomp_id`),
  KEY `consulta_sint_id_foreign` (`sint_id`),
  CONSTRAINT `consulta_acomp_id_foreign` FOREIGN KEY (`acomp_id`) REFERENCES `Acompanhante` (`idAcomp`),
  CONSTRAINT `consulta_sint_id_foreign` FOREIGN KEY (`sint_id`) REFERENCES `Sintoma` (`idSint`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Consulta`
--

LOCK TABLES `Consulta` WRITE;
/*!40000 ALTER TABLE `Consulta` DISABLE KEYS */;
/*!40000 ALTER TABLE `Consulta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Contacto`
--

DROP TABLE IF EXISTS `Contacto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Contacto` (
  `idContac` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Telefone` int(11) DEFAULT NULL,
  `Cel` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idContac`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Contacto`
--

LOCK TABLES `Contacto` WRITE;
/*!40000 ALTER TABLE `Contacto` DISABLE KEYS */;
/*!40000 ALTER TABLE `Contacto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Cotacao`
--

DROP TABLE IF EXISTS `Cotacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Cotacao` (
  `idCotac` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Quantidade` int(11) NOT NULL,
  `pac_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `serv_id` int(10) unsigned NOT NULL,
  `medic_id` int(10) unsigned DEFAULT NULL,
  `Entidade` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idCotac`),
  KEY `cotacao_pac_id_foreign` (`pac_id`),
  KEY `cotacao_user_id_foreign` (`user_id`),
  KEY `cotacao_serv_id_foreign` (`serv_id`),
  KEY `cotacao_medic_id_foreign` (`medic_id`),
  CONSTRAINT `cotacao_medic_id_foreign` FOREIGN KEY (`medic_id`) REFERENCES `Medico` (`idMedic`),
  CONSTRAINT `cotacao_pac_id_foreign` FOREIGN KEY (`pac_id`) REFERENCES `Paciente` (`idPacie`),
  CONSTRAINT `cotacao_serv_id_foreign` FOREIGN KEY (`serv_id`) REFERENCES `Servico` (`idServ`),
  CONSTRAINT `cotacao_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Cotacao`
--

LOCK TABLES `Cotacao` WRITE;
/*!40000 ALTER TABLE `Cotacao` DISABLE KEYS */;
/*!40000 ALTER TABLE `Cotacao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Departamento`
--

DROP TABLE IF EXISTS `Departamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Departamento` (
  `idDept` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idDept`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Departamento`
--

LOCK TABLES `Departamento` WRITE;
/*!40000 ALTER TABLE `Departamento` DISABLE KEYS */;
INSERT INTO `Departamento` VALUES (1,'Medicina 1','2019-07-16 09:56:59','2019-07-16 09:56:59'),(2,'Medicina 2','2019-07-16 09:57:05','2019-07-16 09:57:05');
/*!40000 ALTER TABLE `Departamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Distrito`
--

DROP TABLE IF EXISTS `Distrito`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Distrito` (
  `idDist` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `NomeDist` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prov_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idDist`),
  KEY `distrito_prov_id_foreign` (`prov_id`),
  CONSTRAINT `distrito_prov_id_foreign` FOREIGN KEY (`prov_id`) REFERENCES `Provincia` (`idProv`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Distrito`
--

LOCK TABLES `Distrito` WRITE;
/*!40000 ALTER TABLE `Distrito` DISABLE KEYS */;
INSERT INTO `Distrito` VALUES (1,'Kamfumo',1,'2019-01-26 06:36:58','2019-01-26 06:36:58'),(2,'Nkanogola',6,'2019-01-29 05:28:12','2019-01-29 05:28:12'),(3,'Boane',1,'2019-02-05 01:03:02','2019-02-05 01:03:02'),(4,'Magude',1,'2019-02-05 01:03:21','2019-02-05 01:03:21'),(5,'Manhiça',1,'2019-02-05 01:03:55','2019-02-05 01:03:55'),(6,'Marracuene',1,'2019-02-05 01:04:12','2019-02-05 01:04:12'),(7,'Matola',1,'2019-02-05 01:04:19','2019-02-05 01:04:19'),(8,'Matutuine',1,'2019-02-05 01:04:38','2019-02-05 01:04:38'),(9,'Moamba',1,'2019-02-05 01:04:45','2019-02-05 01:04:45'),(10,'Namaacha',1,'2019-02-05 01:05:01','2019-02-05 01:05:01'),(11,'Bilene',2,'2019-02-05 01:05:54','2019-02-05 01:05:54'),(12,'Chibuto',2,'2019-02-05 01:06:04','2019-02-05 01:06:04'),(13,'Chicualacuala',2,'2019-02-05 01:06:28','2019-02-05 01:06:28'),(14,'Chigubo',2,'2019-02-05 01:06:37','2019-02-05 01:06:37'),(15,'Chokwe',2,'2019-02-05 01:06:55','2019-02-05 01:06:55'),(16,'Chongoene',2,'2019-02-05 01:07:09','2019-02-05 01:07:09'),(17,'Guija',2,'2019-02-05 01:07:24','2019-02-05 01:07:24'),(18,'Limpopo',2,'2019-02-05 01:07:34','2019-02-05 01:07:34'),(19,'Mabalane',2,'2019-02-05 01:07:47','2019-02-05 01:07:47'),(20,'Manjacaze',2,'2019-02-05 01:08:09','2019-02-05 01:08:09'),(21,'Mapai',2,'2019-02-05 01:08:22','2019-02-05 01:08:22'),(22,'Massanguene',2,'2019-02-05 01:08:34','2019-02-05 01:08:34'),(23,'Massingir',2,'2019-02-05 01:08:49','2019-02-05 01:08:49'),(24,'Xai-Xai',2,'2019-02-05 01:09:02','2019-02-05 01:09:02'),(25,'Funhalouro',3,'2019-02-05 01:09:30','2019-02-05 01:09:30'),(26,'Govuro',3,'2019-02-05 01:09:45','2019-02-05 01:09:45'),(27,'Homoine',3,'2019-02-05 01:10:00','2019-02-05 01:10:00'),(28,'Inhambane',3,'2019-02-05 01:10:25','2019-02-05 01:10:25'),(29,'Inharime',3,'2019-02-05 01:10:39','2019-02-05 01:10:39'),(30,'Inhassoro',3,'2019-02-05 01:10:54','2019-02-05 01:10:54'),(31,'Jangamo',3,'2019-02-05 01:11:14','2019-02-05 01:11:14'),(32,'Mabote',3,'2019-02-05 01:11:26','2019-02-05 01:11:26'),(33,'Massinga',3,'2019-02-05 01:11:35','2019-02-05 01:11:35'),(34,'Maxixe',3,'2019-02-05 01:11:46','2019-02-05 01:11:46'),(35,'Morrumbene',3,'2019-02-05 01:11:56','2019-02-05 01:11:56'),(36,'Panda',3,'2019-02-05 01:12:06','2019-02-05 01:12:06'),(37,'Panda',3,'2019-02-05 01:12:18','2019-02-05 01:12:18'),(38,'Vinlanculos',3,'2019-02-05 01:12:32','2019-02-05 01:12:32'),(39,'Zavala',3,'2019-02-05 01:12:41','2019-02-05 01:12:41'),(40,'Angonia',6,'2019-02-05 01:13:39','2019-02-05 01:13:39'),(41,'Cahora-Bassa',6,'2019-02-05 01:13:51','2019-02-05 01:13:51'),(42,'Changara',6,'2019-02-05 01:14:05','2019-02-05 01:14:05'),(43,'Chifunde',6,'2019-02-05 01:14:18','2019-02-05 01:14:18'),(44,'Chiuta',6,'2019-02-05 01:14:31','2019-02-05 01:14:31'),(45,'Dôa',6,'2019-02-05 01:14:50','2019-02-05 01:14:50'),(46,'Macanga',6,'2019-02-05 01:15:09','2019-02-05 01:15:09'),(47,'Magoe',6,'2019-02-05 01:15:22','2019-02-05 01:15:22'),(48,'Marara',6,'2019-02-05 01:15:33','2019-02-05 01:15:33'),(49,'Maravia',6,'2019-02-05 01:15:47','2019-02-05 01:15:47'),(50,'Moatize',6,'2019-02-05 01:16:00','2019-02-05 01:16:00'),(51,'Mutarara',6,'2019-02-05 01:16:12','2019-02-05 01:16:12'),(52,'Tete',6,'2019-02-05 01:16:22','2019-02-05 01:16:22'),(53,'Tsangano',6,'2019-02-05 01:16:33','2019-02-05 01:16:33'),(54,'Zumbo',6,'2019-02-05 01:16:42','2019-02-05 01:16:42'),(55,'Beira',5,'2019-02-05 01:17:26','2019-02-05 01:17:26'),(56,'Buzi',5,'2019-02-05 01:17:34','2019-02-05 01:17:34'),(57,'Caia',5,'2019-02-05 01:17:45','2019-02-05 01:17:45'),(58,'Cheringoma',5,'2019-02-05 01:18:17','2019-02-05 01:18:17'),(59,'Chibabava',5,'2019-02-05 01:18:36','2019-02-05 01:18:36'),(60,'Dondo',5,'2019-02-05 01:18:49','2019-02-05 01:18:49'),(61,'Gorongoza',5,'2019-02-05 01:19:10','2019-02-05 01:19:10'),(62,'Machanga',5,'2019-02-05 01:19:24','2019-02-05 01:19:24'),(63,'Maringue',5,'2019-02-05 01:19:35','2019-02-05 01:19:35'),(64,'Marromeu',5,'2019-02-05 01:19:56','2019-02-05 01:19:56'),(65,'Moaze',5,'2019-02-05 01:20:07','2019-02-05 01:20:07'),(66,'Nhamatanda',5,'2019-02-05 01:20:18','2019-02-05 01:20:18'),(67,'Chimbonila',9,'2019-02-05 01:20:57','2019-02-05 01:20:57'),(68,'Cuamba',9,'2019-02-05 01:21:27','2019-02-05 01:21:27'),(69,'Lago',9,'2019-02-05 01:21:37','2019-02-05 01:21:37'),(70,'Lago',9,'2019-02-05 01:21:56','2019-02-05 01:21:56'),(71,'Majune',9,'2019-02-05 01:23:30','2019-02-05 01:23:30'),(72,'Mndimba',9,'2019-02-05 01:23:46','2019-02-05 01:23:46'),(73,'Marrupa',9,'2019-02-05 01:24:02','2019-02-05 01:24:02'),(74,'Maúa',9,'2019-02-05 01:24:29','2019-02-05 01:24:29'),(75,'Mavago',9,'2019-02-05 01:24:40','2019-02-05 01:24:40'),(76,'Mecanhelas',9,'2019-02-05 01:24:59','2019-02-05 01:24:59'),(77,'Mecula',9,'2019-02-05 01:25:11','2019-02-05 01:25:11'),(78,'Metarica',9,'2019-02-05 01:25:20','2019-02-05 01:25:20'),(79,'Muembe',9,'2019-02-05 01:25:34','2019-02-05 01:25:34'),(80,'Ngauma',9,'2019-02-05 01:25:46','2019-02-05 01:25:46'),(81,'Nipepe',9,'2019-02-05 01:25:55','2019-02-05 01:25:55'),(82,'Sanga',9,'2019-02-05 01:26:05','2019-02-05 01:26:05');
/*!40000 ALTER TABLE `Distrito` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Empresa`
--

DROP TABLE IF EXISTS `Empresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Empresa` (
  `idEmp` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nuit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dist_id` int(10) unsigned NOT NULL,
  `NomeAvenida` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CasaNr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Telefone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idEmp`),
  KEY `empresa_dist_id_foreign` (`dist_id`),
  CONSTRAINT `empresa_dist_id_foreign` FOREIGN KEY (`dist_id`) REFERENCES `Distrito` (`idDist`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Empresa`
--

LOCK TABLES `Empresa` WRITE;
/*!40000 ALTER TABLE `Empresa` DISABLE KEYS */;
INSERT INTO `Empresa` VALUES (1,'ITEC','3124354567',1,'Mao tsetung 1254','123','8245556454','anisio.bule@itecgroup.co.mz','2019-07-06 12:03:08','2019-07-06 12:03:08'),(3,'Banco ABC','2343243423',25,'J;ASFCBJDSL','2321','3423423523','emp@gmail.com','2019-07-11 10:52:35','2019-07-11 10:52:35');
/*!40000 ALTER TABLE `Empresa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Empresa_paciente`
--

DROP TABLE IF EXISTS `Empresa_paciente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Empresa_paciente` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Emp_id` int(10) unsigned NOT NULL,
  `pac_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `empresa_paciente_emp_id_foreign` (`Emp_id`),
  KEY `empresa_paciente_pac_id_foreign` (`pac_id`),
  CONSTRAINT `empresa_paciente_emp_id_foreign` FOREIGN KEY (`Emp_id`) REFERENCES `Empresa` (`idEmp`),
  CONSTRAINT `empresa_paciente_pac_id_foreign` FOREIGN KEY (`pac_id`) REFERENCES `Paciente` (`idPacie`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Empresa_paciente`
--

LOCK TABLES `Empresa_paciente` WRITE;
/*!40000 ALTER TABLE `Empresa_paciente` DISABLE KEYS */;
INSERT INTO `Empresa_paciente` VALUES (1,1,7,'2019-07-16 19:37:34','2019-07-16 19:37:34');
/*!40000 ALTER TABLE `Empresa_paciente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Endereco`
--

DROP TABLE IF EXISTS `Endereco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Endereco` (
  `idEnder` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `NomeAvenida` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Rua` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Casa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Telefone` int(11) DEFAULT NULL,
  `Cel` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idEnder`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Endereco`
--

LOCK TABLES `Endereco` WRITE;
/*!40000 ALTER TABLE `Endereco` DISABLE KEYS */;
/*!40000 ALTER TABLE `Endereco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Especialidade`
--

DROP TABLE IF EXISTS `Especialidade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Especialidade` (
  `idEspec` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `NoomeEsp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idEspec`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Especialidade`
--

LOCK TABLES `Especialidade` WRITE;
/*!40000 ALTER TABLE `Especialidade` DISABLE KEYS */;
INSERT INTO `Especialidade` VALUES (1,'Genecologista','2019-07-16 06:01:12','2019-07-16 06:01:12'),(2,'Fisioterapeuta','2019-07-16 06:01:22','2019-07-16 06:01:22');
/*!40000 ALTER TABLE `Especialidade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ExameAuxiliar`
--

DROP TABLE IF EXISTS `ExameAuxiliar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ExameAuxiliar` (
  `idExam` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Tipo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cons_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idExam`),
  KEY `exameauxiliar_cons_id_foreign` (`cons_id`),
  CONSTRAINT `exameauxiliar_cons_id_foreign` FOREIGN KEY (`cons_id`) REFERENCES `Consulta` (`idCons`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ExameAuxiliar`
--

LOCK TABLES `ExameAuxiliar` WRITE;
/*!40000 ALTER TABLE `ExameAuxiliar` DISABLE KEYS */;
/*!40000 ALTER TABLE `ExameAuxiliar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Medic_Rec_Exam`
--

DROP TABLE IF EXISTS `Medic_Rec_Exam`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Medic_Rec_Exam` (
  `exame_id` int(10) unsigned NOT NULL,
  `med_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `medic_rec_exam_exame_id_foreign` (`exame_id`),
  KEY `medic_rec_exam_med_id_foreign` (`med_id`),
  CONSTRAINT `medic_rec_exam_exame_id_foreign` FOREIGN KEY (`exame_id`) REFERENCES `ExameAuxiliar` (`idExam`),
  CONSTRAINT `medic_rec_exam_med_id_foreign` FOREIGN KEY (`med_id`) REFERENCES `Medico` (`idMedic`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Medic_Rec_Exam`
--

LOCK TABLES `Medic_Rec_Exam` WRITE;
/*!40000 ALTER TABLE `Medic_Rec_Exam` DISABLE KEYS */;
/*!40000 ALTER TABLE `Medic_Rec_Exam` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Medico`
--

DROP TABLE IF EXISTS `Medico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Medico` (
  `idMedic` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `NomeMed` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Sexo` enum('M','F') COLLATE utf8mb4_unicode_ci NOT NULL,
  `DataNas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ContratNum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nacionalidade` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NomeAvenida` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Telefone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `espec_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idMedic`),
  KEY `medico_espec_id_foreign` (`espec_id`),
  CONSTRAINT `medico_espec_id_foreign` FOREIGN KEY (`espec_id`) REFERENCES `Especialidade` (`idEspec`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Medico`
--

LOCK TABLES `Medico` WRITE;
/*!40000 ALTER TABLE `Medico` DISABLE KEYS */;
INSERT INTO `Medico` VALUES (1,'Armando Faizal Suares','M','1990-04-12','AE324','0',NULL,'3212223233','armando@gmail.com',1,'2019-07-23 20:53:37','2019-07-23 20:53:37');
/*!40000 ALTER TABLE `Medico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Nacionalidade`
--

DROP TABLE IF EXISTS `Nacionalidade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Nacionalidade` (
  `idnac` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `NomeNac` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idnac`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Nacionalidade`
--

LOCK TABLES `Nacionalidade` WRITE;
/*!40000 ALTER TABLE `Nacionalidade` DISABLE KEYS */;
INSERT INTO `Nacionalidade` VALUES (1,'Mocambicana','2019-01-26 01:00:45','2019-01-26 01:00:45'),(2,'Sul Africana','2019-01-26 01:03:05','2019-01-26 01:03:05'),(3,'Americana','2019-01-26 01:03:30','2019-01-26 01:03:30');
/*!40000 ALTER TABLE `Nacionalidade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Paciente`
--

DROP TABLE IF EXISTS `Paciente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Paciente` (
  `idPacie` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Sexo` enum('M','F') COLLATE utf8mb4_unicode_ci NOT NULL,
  `DataNasc` date NOT NULL,
  `EstadoCivil` enum('S','C') COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nacionalidade` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NomeAvenida` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Bairro` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Telefone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dist_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idPacie`),
  KEY `paciente_dist_id_foreign` (`dist_id`),
  CONSTRAINT `paciente_dist_id_foreign` FOREIGN KEY (`dist_id`) REFERENCES `Distrito` (`idDist`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Paciente`
--

LOCK TABLES `Paciente` WRITE;
/*!40000 ALTER TABLE `Paciente` DISABLE KEYS */;
INSERT INTO `Paciente` VALUES (4,'Paula Fernandes','F','1990-04-12','S','1','Mao tsetung 1254','Central','8245556454','paula@gmail.com',1,'2019-07-07 04:26:59','2019-07-07 04:26:59'),(7,'Paulo Manjate','F','1990-04-12','S','1','25 de Setembro','Central','3423423523','paulo.manjate@itecgroup.co.mz',1,'2019-07-16 19:37:34','2019-07-16 19:37:34'),(8,'Julia','M','2019-07-25','S','2','wdaeqwsc','escw','wdscx','julia@gmail.com',70,'2019-07-25 11:18:40','2019-07-25 11:18:40');
/*!40000 ALTER TABLE `Paciente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Patologia`
--

DROP TABLE IF EXISTS `Patologia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Patologia` (
  `idPat` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `NomePat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Referencia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idPat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Patologia`
--

LOCK TABLES `Patologia` WRITE;
/*!40000 ALTER TABLE `Patologia` DISABLE KEYS */;
/*!40000 ALTER TABLE `Patologia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PrecoServico`
--

DROP TABLE IF EXISTS `PrecoServico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `PrecoServico` (
  `idPrec` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Preco` double(8,2) NOT NULL,
  `prec_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idPrec`),
  KEY `precoservico_prec_id_foreign` (`prec_id`),
  CONSTRAINT `precoservico_prec_id_foreign` FOREIGN KEY (`prec_id`) REFERENCES `Servico` (`idServ`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PrecoServico`
--

LOCK TABLES `PrecoServico` WRITE;
/*!40000 ALTER TABLE `PrecoServico` DISABLE KEYS */;
INSERT INTO `PrecoServico` VALUES (1,0.00,3,'2019-07-15 06:40:10','2019-07-15 06:40:10'),(2,0.00,4,'2019-07-15 06:44:53','2019-07-15 06:44:53'),(3,0.00,5,'2019-07-15 06:47:03','2019-07-15 06:47:03'),(4,123.00,4,'2019-07-15 17:57:51','2019-07-15 17:57:51'),(5,50.00,3,'2019-07-15 18:48:21','2019-07-15 18:48:21'),(6,70.00,3,'2019-07-17 10:45:18','2019-07-17 10:45:18');
/*!40000 ALTER TABLE `PrecoServico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Provincia`
--

DROP TABLE IF EXISTS `Provincia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Provincia` (
  `idProv` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Nomeprov` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idProv`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Provincia`
--

LOCK TABLES `Provincia` WRITE;
/*!40000 ALTER TABLE `Provincia` DISABLE KEYS */;
INSERT INTO `Provincia` VALUES (1,'Maputo','2019-01-26 01:00:45','2019-01-26 01:00:45'),(2,'Gaza','2019-01-26 01:03:05','2019-01-26 01:03:05'),(3,'Inhambane','2019-01-26 01:03:30','2019-01-26 01:03:30'),(4,'Manica','2019-01-26 01:04:19','2019-01-26 01:04:19'),(5,'Sofala','2019-01-26 01:04:39','2019-01-26 01:04:39'),(6,'Tete','2019-01-26 01:04:51','2019-01-26 01:04:51'),(7,'Zambezia','2019-01-26 01:05:06','2019-01-26 01:05:06'),(8,'Nampula','2019-01-26 01:05:18','2019-01-26 01:05:18'),(9,'Niassa','2019-01-26 01:05:26','2019-01-26 01:05:26'),(10,'Cabo Delgado','2019-01-26 01:05:36','2019-01-26 01:05:36');
/*!40000 ALTER TABLE `Provincia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Servico`
--

DROP TABLE IF EXISTS `Servico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Servico` (
  `idServ` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `NomeServ` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idServ`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Servico`
--

LOCK TABLES `Servico` WRITE;
/*!40000 ALTER TABLE `Servico` DISABLE KEYS */;
INSERT INTO `Servico` VALUES (3,'Dermatologia','2019-07-15 06:40:10','2019-07-15 06:40:10'),(4,'Fisioterapia','2019-07-15 06:44:52','2019-07-15 06:44:52'),(5,'Cardiologia','2019-07-15 06:47:03','2019-07-15 06:47:03');
/*!40000 ALTER TABLE `Servico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Sintoma`
--

DROP TABLE IF EXISTS `Sintoma`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Sintoma` (
  `idSint` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Descricao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idSint`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Sintoma`
--

LOCK TABLES `Sintoma` WRITE;
/*!40000 ALTER TABLE `Sintoma` DISABLE KEYS */;
/*!40000 ALTER TABLE `Sintoma` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Unidade_Sanitaria`
--

DROP TABLE IF EXISTS `Unidade_Sanitaria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Unidade_Sanitaria` (
  `idUsanit` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dist_id` int(10) unsigned NOT NULL,
  `dept_id` int(10) unsigned NOT NULL,
  `NomeAvenida` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Bairro` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Telefone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idUsanit`),
  KEY `unidade_sanitaria_dist_id_foreign` (`dist_id`),
  KEY `unidade_sanitaria_dept_id_foreign` (`dept_id`),
  CONSTRAINT `unidade_sanitaria_dept_id_foreign` FOREIGN KEY (`dept_id`) REFERENCES `Departamento` (`idDept`),
  CONSTRAINT `unidade_sanitaria_dist_id_foreign` FOREIGN KEY (`dist_id`) REFERENCES `Distrito` (`idDist`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Unidade_Sanitaria`
--

LOCK TABLES `Unidade_Sanitaria` WRITE;
/*!40000 ALTER TABLE `Unidade_Sanitaria` DISABLE KEYS */;
INSERT INTO `Unidade_Sanitaria` VALUES (1,'HCM-Clinica -2',1,1,'Mao tsetung 1254','Central','8245556454','emp@gmail.com','2019-07-23 20:48:30','2019-07-23 20:48:30');
/*!40000 ALTER TABLE `Unidade_Sanitaria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=267 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (239,'2019_05_21_074444_create_iten_servico_table',1),(244,'2014_10_12_000000_create_users_table',2),(245,'2014_10_12_100000_create_password_resets_table',2),(246,'2019_05_21_072142_create_contacto_table',2),(247,'2019_05_21_072208_create_endereco_table',2),(248,'2019_05_21_073727_create_especialidade_table',2),(249,'2019_05_21_073807_create_provincia_table',2),(250,'2019_05_21_073818_create_distrito_table',2),(251,'2019_05_21_073852_create_paciente_table',2),(252,'2019_05_21_073916_create_servico_table',2),(253,'2019_05_21_073938_create_preco_servico_table',2),(254,'2019_05_21_074030_create_medico_table',2),(255,'2019_05_21_074106_create_cotacao_table',2),(256,'2019_05_21_074128_create_acompanhante_table',2),(257,'2019_05_21_074203_create_patologia_table',2),(258,'2019_05_21_074214_create_sintoma_table',2),(259,'2019_05_21_074240_create_consulta_table',2),(260,'2019_05_21_074339_create_departamento_table',2),(261,'2019_05_21_074407_create_unidade_sanitaria_table',2),(262,'2019_05_21_074437_create_exame_auxiliar_table',2),(263,'2019_05_21_074509_create_medic_rec_exam_table',2),(264,'2019_06_23_173700_create__empresa_table',2),(265,'2019_06_23_173801_create__empresa_paciente_table',2),(266,'2019_07_06_200100_create__nacionalidade_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nameapelido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nivel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Anisio Bule','anisio','anisio.bule@itecgroup.co.mz','$2y$10$NqBauVCQuo9LMEMlR1VybOMoqABR/lH/Hk1z9BoZTf8.AXrJZDinS','Tecnico','2','FiHpMTPsUEaIihunC6KIPep9Vfc2D5ZMUxr3DMemepIE9Qs6C8oM8xwOD4vl',NULL,'2019-02-24 07:11:13'),(2,'Paulo Manjate','paulo','paulo.manjate@itecgroup.co.mz','$2y$10$zgMP0oGJPlkOBrj0TFOueOT4QsNSCIbxsR5J9TJ9U/AwcQ..6.NBS','Activo','Tecn',NULL,'2019-01-20 21:39:53','2019-01-20 21:39:53'),(3,'Criado Por Anisio','demo','demo@itecgroup.co.mz','$2y$10$o/JoXTK8/YVnDCU2ZF9bSuIg5P1fYaxoBEgiUqbwJu.bBM4mqF6G6','Activo','1',NULL,'2019-01-26 21:56:17','2019-01-26 21:56:17');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-10-19 12:35:00
