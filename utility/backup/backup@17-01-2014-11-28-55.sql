-- MySQL dump 10.13  Distrib 5.5.24, for Win32 (x86)
--
-- Host: localhost    Database: db_perpus
-- ------------------------------------------------------
-- Server version	5.5.24-log

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `hak_akses` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'perpus','bismillah',1);
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_anggota`
--

DROP TABLE IF EXISTS `data_anggota`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_anggota` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `no_induk` varchar(5) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `jk` varchar(2) NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `foto` varchar(75) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=164 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_anggota`
--

LOCK TABLES `data_anggota` WRITE;
/*!40000 ALTER TABLE `data_anggota` DISABLE KEYS */;
INSERT INTO `data_anggota` VALUES (1,'1272','ABDULLAH IRWANSYAH','L','9a','Kulon Progo, 4 Agustus 1997','Puser, Banjararum, Kalibawang, Kulon Progo',''),(2,'1273','AHMAD FAHROJI','L','9c','Kulon Progo, 27 Januari 1998','Tukmudal, Sidoharjo, Samigaluh, Kulon Progo',''),(3,'1275','ANDRI RAHMAT DANI','L','9b','Kulon Progo, 30 Januari 1997','Munggang Wetan, Sidoharjo, Samigaluh, Kulon Progo',''),(4,'1276','ANISAH','P','9b','Kulon Progo, 13 November 1998','Puser, Banjararum, Kalibawang, Kulon Progo',''),(5,'1278','ARIS SUKARTA','L','9b','Kulon Progo, 5 November 1996','Menggermalang, Gerbosari, Samigaluh, Kulon Progo',''),(6,'1279','ATHIFAH','P','9c','Kulon Progo, 26 Mei 1998','Madigondo, Sidoharjo, Samigaluh, Kulon Progo',''),(7,'1280','CANDRIKA PURNIAJATI','P','9a','Kulon Progo, 10 Juni 1996','Munggang Lor, Sidoharjo, Samigaluh, Kulon Progo',''),(8,'1281','CIPTADI','L','9a','Kulon Progo, 14 Desember 1996','Madigondo, Sidoharjo, Samigaluh, Kulon Progo',''),(9,'1282','DAMA ADITYO','L','9b','Kotabumi, 28 Oktober 1997','Munggang Wetan, Sidoharjo, Samigaluh, Kulon Progo',''),(10,'1283','DANANG KHOIRUDIN','L','9b','Tangerang, 20 September 1997','Tukmudal, Sidoharjo, Samigaluh, Kulon Progo',''),(11,'1284','DANANG PRASETYO TAN ANTORO','L','9a','Magelang, 3 Januari 1998','Wonogiri, Sidoharjo, Samigaluh, Kulon Progo',''),(12,'1286','EDI KURNIAWAN','L','9a','Kulon Progo, 29 Oktober 1996','Wonogiri, Sidoharjo, Samigaluh, Kulon Progo',''),(13,'1287','EDY NURYONO','L','9b','Kulon Progo, 18 Oktober 1997','Plarangan, Purwoharjo, Samigaluh, Kulon Progo',''),(14,'1288','EKKI NOVERIDA PUTRI','P','9c','Kulon Progo, 1 Agustus 1998','Sumoroto, Sidoharjo, Samigaluh, Kulon Progo',''),(15,'1289','FALENIS CITROEN FELAYATI','P','9b','Yogyakarta, 11 November 1998','Munggang Wetan, Sidoharjo, Samigaluh, Kulon Progo',''),(16,'1290','FENDI NUR CAHYONO','L','9a','Kulon Progo, 26 Januari 1997','Bangunrejo, Purwoharjo, Samigaluh, Kulon Progo',''),(17,'1291','FITRI ARIYANI','P','9c','Kulon Progo, 30 Januari 1998','Munggang Lor, Sidoharjo, Samigaluh, Kulon Progo',''),(18,'1292','GHAFUR FAHRUDIN','L','9a','Kulon Progo, 12 Januari 1998','Tukmudal, Sidoharjo, Samigaluh, Kulon Progo',''),(19,'1293','HERLIN RATNA SARI','P','9c','Kulon Progo, 2 Desember 1998','Wonogiri, Sidoharjo, Samigaluh, Kulon Progo',''),(20,'1294','ILHAM BAGUS ARDI WARDANA','L','9b','Kulon Progo, 2 Maret 1998','Gorolangu, Sidoharjo, Samigaluh, Kulon Progo',''),(21,'1295','IRAWATI WAHYUNINGSIH','P','9b','Kulon Progo, 12 November 1998','Puser, Banjararum, Kalibawang, Kulon Progo',''),(22,'1296','JAFAR YUNIYANTO','L','9b','Kulon Progo, 12 Juni 1997','Munggang Wetan, Sidoharjo, Samigaluh, Kulon Progo',''),(23,'1297','KRISMONIA MUTI\'AH','P','9c','Kulon Progo, 2 Juni 1998','Sumoroto, Sidoharjo, Samigaluh, Kulon Progo',''),(24,'1298','KUSNI ZAFEI','L','9a','Kulon Progo, 10 April 1997','Bangunrejo, Purwoharjo, Samigaluh, Kulon Progo',''),(25,'1299','LINDA ARUM SARI','P','9c','Kulon Progo, 14 Maret 1998','Munggang Lor, Sidoharjo, Samigaluh, Kulon Progo',''),(26,'1300','MAHMUD SHOBARI','L','9c','Kulon Progo, 11 Juni 1998','Sumoroto, Sidoharjo, Samigaluh, Kulon Progo',''),(27,'1301','MUHAMMAD SUPRIYADI','L','9c','Bekasi, 8 Juli 1999','Bleder, Sidoharjo, Samigaluh, Kulon Progo',''),(28,'1302','MUSTIKA FAJAR UTAMI','P','9c','Kulon Progo, 9 November 1997','Nyemani, Sidoharjo, Samigaluh, Kulon Progo',''),(29,'1303','NASHIRRUDIN','L','9a','Kulon Progo, 7 April 1998','Madigondo, Sidoharjo, Samigaluh, Kulon Progo',''),(30,'1304','NUNGKI KURNIA SAPUTRA','L','9b','Kulon Progo, 30 Agustus 1996','Gorolangu, Sidoharjo, Samigaluh, Kulon Progo',''),(31,'1305','NUR EVI YULI LESTARI','P','9c','Kulon Progo, 27 Februari 1999','Puser, Banjararum, Kalibawang, Kulon Progo',''),(32,'1306','NUR FAJRI RAYATI','P','9a','Kulon Progo, 28 Agustus 1997','Puser, Banjararum, Kalibawang, Kulon Progo',''),(33,'1307','NUR LAILA JAMIL','P','9c','Kulon Progo, 18 Mei 1998','Madigondo, Sidoharjo, Samigaluh, Kulon Progo',''),(34,'1308','NURDIYANTO','L','9a','Kulon Progo, 2 Oktober 1998','Madigondo, Sidoharjo, Samigaluh, Kulon Progo',''),(35,'1309','NURUL UMAH','P','9b','Kulon Progo, 20 Mei 1998','Munggang Lor, Sidoharjo, Samigaluh, Kulon Progo',''),(36,'1310','RIRIN NOVIYANTI','P','9a','Kulon Progo, 4 Mei 1998','Wonogiri, Sidoharjo, Samigaluh, Kulon Progo',''),(37,'1311','RISCHATOHIRIN','L','9c','Kulon Progo, 27 Oktober 1997','Gorolangu, Sidoharjo, Samigaluh, Kulon Progo',''),(38,'1312','RISKI KOMARUDIN','L','9c','Kulon Progo, 14 Desember 1995','Nyemani, Sidoharjo, Samigaluh, Kulon Progo',''),(39,'1313','RIZKI BASUKI','L','9c','Kulon Progo, 23 September 1997','Nyemani, Sidoharjo, Samigaluh, Kulon Progo',''),(40,'1314','ROHMIYATI','P','9b','Sleman, 21 Maret 1997','Madigondo, Sidoharjo, Samigaluh, Kulon Progo',''),(41,'1315','SHOLEH SHALAHUDIN','L','9b','Kulon Progo, 4 November 1998','Madigondo, Sidoharjo, Samigaluh, Kulon Progo',''),(42,'1316','SISWIANJARWILASTI','P','9a','Kulon Progo, 28 Juni 1997','Madigondo, Sidoharjo, Samigaluh, Kulon Progo',''),(43,'1317','SITI AMINAH','P','9a','Magelang, 1 Desember 1997','Madigondo, Sidoharjo, Samigaluh, Kulon Progo',''),(44,'1318','SITI KHOTIJAH','P','9c','Pemalang, 21 September 1998','Munggang Lor, Sidoharjo, Samigaluh, Kulon Progo',''),(45,'1319','SITI VIFATUN NOVI','P','9a','Kulon Progo, 14 September 1997','Puser, Banjararum, Kalibawang, Kulon Progo',''),(46,'1320','TAUFIK NUR SAHIDA','L','9a','Kulon Progo, 13 September 1998','Tukmudal, Sidoharjo, Samigaluh, Kulon Progo',''),(47,'1321','TIKA NUFITASARI','P','9a','Kulon Progo, 11 November 1996','Plarangan, Purwoharjo, Samigaluh, Kulon Progo',''),(48,'1322','TRI RIANA UTAMI','P','9c','Kulon Progo, 23 Juli 1998','Ngaliyan, Ngargosari, Samigaluh, Kulon Progo',''),(49,'1323','TUSMIYANTO','L','9b','Kulon Progo, 25 Agustus 1996','Plarangan, Purwoharjo, Samigaluh, Kulon Progo',''),(50,'1324','UMI TSALASATUN','P','9b','Kulon Progo, 26 Februari 1999','Madigondo, Sidoharjo, Samigaluh, Kulon Progo',''),(51,'1325','VARISKA NUR RAHMAH','P','9b','Kulon Progo, 18 Januari 1998','Tukmudal, Sidoharjo, Samigaluh, Kulon Progo',''),(52,'1327','WAHYU KURNIAWAN','L','9a','Kulon Progo, 14 April 1997','Munggang Wetan, Sidoharjo, Samigaluh, Kulon Progo',''),(53,'1328','ZUHAIR AKHIMULLOH','L','9c','Kulon Progo, 2 Juni 1998','Gorolangu, Sidoharjo, Samigaluh, Kulon Progo',''),(54,'1331','TERA JINGGA SHAFIRA','P','9b','Jakarta, 3 Januari 1998','Nungkep, Sidoharjo, Samigaluh, Kulon Progo',''),(55,'1332','AHMAD ARIFUDIN','L','8c','Kulon Progo, 16 Oktober 1997','Tukmudal, Sidoharjo, Samigaluh, Kulon Progo',''),(56,'1333','AJI CAHYO NUGROHO','L','8b','Kulon Progo, 2 Desember 1998','Sumoroto, Sidoharjo, Samigaluh, Kulon Progo',''),(57,'1334','ANDRI KURNIAWAN','L','8b','Kulon Progo, 5 April 2000','Bangunrejo, Purwoharjo, Samigaluh, Kulon Progo',''),(58,'1335','ANIK SUMARYANI','P','8a','Kulon Progo, 14 Maret 1998','Nyemani, Sidoharjo, Samigaluh, Kulon Progo',''),(59,'1336','ARIF NUR HIDAYAT','L','8a','Kulon Progo, 10 Maret 1998','Bleder, Sidoharjo, Samigaluh, Kulon Progo',''),(60,'1337','ASMAR CHABIB','L','8a','Kulon Progo, 20 September 1998','Nyemani, Sidoharjo, Samigaluh, Kulon Progo',''),(61,'1338','ASTRI WAHYU MITAYANI','P','8a','Kulon Progo, 12 Februari 2000','Munggang Wetan, Sidoharjo, Samigaluh, Kulon Progo',''),(62,'1339','ATIN NURJANAH','P','8c','Kulon Progo, 15 Agustus 1999','Nyemani, Sidoharjo, Samigaluh, Kulon Progo',''),(63,'1340','AVIFAH FITRIANINGRUM','P','8a','Kulon Progo, 31 Januari 1999','Ngaliyan, Ngargosari, Samigaluh, Kulon Progo',''),(64,'1341','AYULIS TRIYANI','P','8c','Kulon Progo, 8 Juni 1998','Nyemani, Sidoharjo, Samigaluh, Kulon Progo',''),(65,'1342','BAGUS BAHARUDIN','L','8c','Kulon Progo, 9 Desember 1998','Munggang Lor, Sidoharjo, Samigaluh, Kulon Progo',''),(66,'1343','CHOMARI','L','8b','Kulon Progo, 4 September 1998','Sumoroto, Sidoharjo, Samigaluh, Kulon Progo',''),(67,'1344','DANI NOVIAN TORO','L','8b','Kulon Progo, 30 November 1999','Bangunrejo, Purwoharjo, Samigaluh, Kulon Progo',''),(68,'1345','DAROJAT ARIFIN','L','8b','Kulon Progo, 15 November 1999','Taman, Purwoharjo, Samigaluh, Kulon Progo',''),(69,'1346','DESI TARTIKA','P','8c','Kulon Progo, 7 Desember 1997','Nyemani, Sidoharjo, Samigaluh, Kulon Progo',''),(70,'1347','DEVI RAHMAWATI','P','8b','Kulon Progo, 1 April 1999','Menggermalang, Gerbosari, Samigaluh, Kulon Progo',''),(71,'1348','DONNY FERIYAWAN','L','8c','Kulon Progo, 21 Januari 1999','Madigondo, Sidoharjo, Samigaluh, Kulon Progo',''),(72,'1351','ERNAWATI DWI SETIANI','P','8b','Kulon Progo, 27 Februari 2000','Wonogiri, Sidoharjo, Samigaluh, Kulon Progo',''),(73,'1352','ETRIYADI','L','8a','Kulon Progo, 13 Februari 1999','Nglambur, Sidoharjo, Samigaluh, Kulon Progo',''),(74,'1353','FENTI ERNA YULIANINGSIH','P','8b','Kulon Progo, 29 Maret 1999','Keweron, Sidoharjo, Samigaluh, Kulon Progo',''),(75,'1354','HENDRA KURNIAWAN','L','8a','Kulon Progo, 9 Agustus 1999','Munggang Wetan, Sidoharjo, Samigaluh, Kulon Progo',''),(76,'1355','HERMAWAN SULISTIYANTO','L','8a','Kulon Progo, 5 September 1998','Madigondo, Sidoharjo, Samigaluh, Kulon Progo',''),(77,'1356','IBNU FARID DAROJI','L','8c','Kulon Progo, 13 April 1999','Madigondo, Sidoharjo, Samigaluh, Kulon Progo',''),(78,'1357','IDHEA FASIH PRATIWI','P','8a','Lubuk Linggau, 19 Agustus 1999','Nungkep, Sidoharjo, Samigaluh, Kulon Progo',''),(79,'1358','IIS ASTUTI','P','8c','Kulon Progo, 19 Februari 1998','Bangunrejo, Purwoharjo, Samigaluh, Kulon Progo',''),(80,'1359','IKA RUYANAH','P','8b','Kulon Progo, 19 Maret 1999','Tukharjo, Purwoharjo, Samigaluh, Kulon Progo',''),(81,'1360','ISMIYATUN','P','8b','Kulon Progo, 19 Oktober 1999','Taman, Purwoharjo, Samigaluh, Kulon Progo',''),(82,'1361','ISTIANI','P','8a','Kulon Progo, 15 Juni 1998','Plarangan, Purwoharjo, Samigaluh, Kulon Progo',''),(83,'1362','IVAN ADI PRASETYO','L','8b','Kulon Progo, 22 April 2000','Bangunrejo, Purwoharjo, Samigaluh, Kulon Progo',''),(84,'1363','MARKONI','L','8b','Kulon Progo, 26 Februari 1998','Munggang Lor, Sidoharjo, Samigaluh, Kulon Progo',''),(85,'1364','MIFTAKHUL ROHMAH','P','8b','Kulon Progo, 26 Februari 1999','Sumoroto, Sidoharjo, Samigaluh, Kulon Progo',''),(86,'1365','MUDALIYAH','P','8c','Kulon Progo, 25 Agustus 1998','Nglambur, Sidoharjo, Samigaluh, Kulon Progo',''),(87,'1366','MUHAMMAD GALIH MU\'ADZ','L','8b','Pekalongan, 26 Agustus 1999','Tukmudal, Sidoharjo, Samigaluh, Kulon Progo',''),(88,'1367','NENENG THOYYIBAH','P','8c','Kulon Progo, 28 April 1999','Madigondo, Sidoharjo, Samigaluh, Kulon Progo',''),(89,'1368','NITA RIYASMI','P','8b','Kulon Progo, 13 September 1998','Madigondo, Sidoharjo, Samigaluh, Kulon Progo',''),(90,'1369','RAHMAD CHOIRUDIN','L','7a','Kulon Progo, 21 Juni 1999','Wonogiri, Sidoharjo, Samigaluh, Kulon Progo',''),(91,'1370','RAHMAWATI','P','8c','Kulon Progo, 20 Maret 1999','Nyemani, Sidoharjo, Samigaluh, Kulon Progo',''),(92,'1371','RINALDI HARI PANGESTU','L','8a','Kulon Progo, 22 Juni 1999','Munggang Wetan, Sidoharjo, Samigaluh, Kulon Progo',''),(93,'1372','RIYA FITRIYANI','P','8c','Kulon Progo, 19 Januari 1999','Bangunrejo, Purwoharjo, Samigaluh, Kulon Progo',''),(94,'1373','ROHMAWATI','P','8a','Kulon Progo, 3 Januari 1998','Plarangan, Purwoharjo, Samigaluh, Kulon Progo',''),(95,'1374','ROSATU LILIS ARISKA','P','8a','Kulon Progo, 28 April 1998','Madigondo, Sidoharjo, Samigaluh, Kulon Progo',''),(96,'1375','RUDI RIYANTO','L','8a','Kulon Progo, 11 Maret 1998','Munggang Lor, Sidoharjo, Samigaluh, Kulon Progo',''),(97,'1377','SAMSUL HIDAYAT','L','8a','Kulon Progo, 29 Desember 1998','Munggang Lor, Sidoharjo, Samigaluh, Kulon Progo',''),(98,'1378','SIDIK PUJI ATMOKO','L','8b','Kulon Progo, 7 Februari 1999','Gorolangu, Sidoharjo, Samigaluh, Kulon Progo',''),(99,'1379','SISKA PRASETYAWATI','P','8b','Kulon Progo, 24 Agustus 1999','Puser, Banjararum, Kalibawang, Kulon Progo',''),(100,'1380','WAHYU YULIYANTO','L','8c','Kulon Progo, 18 Juli 1998','Menggermalang, Gerbosari, Samigaluh, Kulon Progo',''),(101,'1381','YATNI','L','8c','Kulon Progo, 21 Maret 1997','Wonogiri, Sidoharjo, Samigaluh, Kulon Progo',''),(102,'1382','YUNI ASTUTI','P','8c','Kulon Progo, 24 Juni 1999','Puser, Banjararum, Kalibawang, Kulon Progo',''),(103,'1383','YUNI SUMARMIATUN','P','8a','Kulon Progo, 8 Juni 1999','Wonogiri, Sidoharjo, Samigaluh, Kulon Progo',''),(104,'1384','YUSUF BAHRUDIN','L','8c','Kulon Progo, 17 Mei 1998','Wonogiri, Sidoharjo, Samigaluh, Kulon Progo',''),(105,'1376','RYAS MALIKI','L','7a','Kebumen, 6 Maret 1999','Munggang Lor, Sidoharjo, Samigaluh, Kulon Progo',''),(106,'1385','AHMAD SYARIF HIDAYATULLOH','L','7a','Kulon Progo, 10 Juni 2000','Madigondo, Sidoharjo, Samigaluh, Kulon Progo',''),(107,'1386','ALEX BUDI SANTOSO','L','7c','Kulon Progo, 13 Juli 1999','Munggang Lor, Sidoharjo, Samigaluh, Kulon Progo',''),(108,'1387','ALIFIA RAHMA YULFANI','P','7a','Kulon Progo, 28 April 2000','Ngaliyan, Ngargosari, Samigaluh, Kulon Progo',''),(109,'1388','AMALIA EMI YURIAH','P','7b','Kulon Progo, 27 Juli 2000','Tetes, Sidoharjo, Samigaluh, Kulon Progo',''),(110,'1389','ANIS NUR ADILA','P','7c','Kulon Progo, 01 Juni 2000','Sumoroto, Sidoharjo, Samigaluh, Kulon Progo',''),(111,'1390','APRILIYA WAHYUNI','P','7b','Kulon Progo, 14 April 1998','Madigondo, Sidoharjo, Samigaluh, Kulon Progo',''),(112,'1391','ARI WAHYU ARDIANSYAH','L','7a','Kulon Progo, 15 Mei 1999','Nyemani, Sidoharjo, Samigaluh, Kulon Progo',''),(113,'1392','ARIF DARMAWAN','L','7b','Kulon Progo, 03 Nopember 2000','Madigondo, Sidoharjo, Samigaluh, Kulon Progo',''),(114,'1393','ASMINI','P','7c','Kulon Progo, 06 Mei 2000','Puser, Banjararum, Kalibawang, Kulon Progo',''),(115,'1442','BAHARUDDIEN ALI YUSUF SALIM AL QOSYIM','L','7a','Kulon Progo, 14 Maret 2000','Karang, Gerbosari, Samigaluh, Kulon Progo',''),(116,'1394','CAHYA PRASETYANINGTYAS','P','7c','Kulon Progo, 16 Juni 2001','Wonogiri, Sidoharjo, Samigaluh, Kulon Progo',''),(117,'1395','CHONNY YAHYA ADI NUGROHO','L','7a','Kulon Progo, 18 Juni 1998','Gorolangu, Sidoharjo, Samigaluh, Kulon Progo',''),(118,'1396','DANI PURWADI','L','7b','Kulon Progo, 29 Oktober 1999','Plarangan, Purwoharjo, Samigaluh, Kulon Progo',''),(119,'1397','DARYANTI','P','7b','Kulon Progo, 03 Maret 2001','Nyemani, Sidoharjo, Samigaluh, Kulon Progo',''),(120,'1398','DWI NOVRIYANTO','L','7c','Kulon Progo, 14 Nopember 2000','Wonogiri, Sidoharjo, Samigaluh, Kulon Progo',''),(121,'1399','DWI RIYANTO','L','7b','Kulon Progo, 01 Februari 1999','Plarangan, Purwoharjo, Samigaluh, Kulon Progo',''),(122,'1400','ERNA DWI WAHYUNI','P','7c','Kulon Progo, 06 Nopember 1998','Gorolangu, Sidoharjo, Samigaluh, Kulon Progo',''),(123,'1401','FAJAR ERLANDI','L','7c','Bandung, 21 Mei 1998','Sumoroto, Sidoharjo, Samigaluh, Kulon Progo',''),(124,'1402','FAJAR IRAWAN','L','7c','Kulon Progo, 28 Maret 1998','Taman, Purwoharjo, Samigaluh, Kulon Progo',''),(125,'1403','FIKI HAMDAN ASRORI','L','7c','Kulon Progo, 15 September 1999','Madigondo, Sidoharjo, Samigaluh, Kulon Progo',''),(126,'1404','FITRI NURLAILA SARI','P','7b','Tangerang, 23 Juni 2000','Tukmudal, Sidoharjo, Samigaluh, Kulon Progo',''),(127,'1405','HESTI WAHYUNI WULANDARI','P','7b','Kulon Progo, 25 Juni 2000','Sumoroto, Sidoharjo, Samigaluh, Kulon Progo',''),(128,'1406','IIS AFIFAH','P','7c','Kulon Progo, 11 Februari 2000','Munggang Wetan, Sidoharjo, Samigaluh, Kulon Progo',''),(129,'1407','INDAH FENTI NUR','P','7c','Kulon Progo, 02 Februari 2000','Madigondo, Sidoharjo, Samigaluh, Kulon Progo',''),(130,'1408','INDRA FACHRUROZZI','L','7b','Kulon Progo, 20 Februari 1998','Sumoroto, Sidoharjo, Samigaluh, Kulon Progo',''),(131,'1409','INDRIASARI','P','7b','Kulon Progo, 26 Agustus 2000','Bangunrejo, Purwoharjo, Samigaluh, Kulon Progo',''),(132,'1410','ISMA\'  ISTYANINGSIH','P','7b','Kulon Progo, 25 Maret 2000','Keweron, Sidoharjo, Samigaluh, Kulon Progo',''),(133,'1411','JEVRI SUSANTO','L','7c','Kulon Progo, 25 Maret 1999','Plarangan, Purwoharjo, Samigaluh, Kulon Progo',''),(134,'1412','JORDIE JUMANTORO','L','7a','Kulon Progo, 16 April 2000','Nyemani, Sidoharjo, Samigaluh, Kulon Progo',''),(135,'1413','LIA HASTARI','P','7c','Kulon Progo, 14 Maret 2000','Plarangan, Purwoharjo, Samigaluh, Kulon Progo',''),(136,'1414','LILIS KURNIASARI','P','7a','Kulon Progo, 25 Mei 2000','Madigondo, Sidoharjo, Samigaluh, Kulon Progo',''),(137,'1415','MAHENDRA ADIATMA','L','7b','Kulon Progo, 29 Juli 2000','Ngaliyan, Ngargosari, Samigaluh, Kulon Progo',''),(138,'1416','MUHAMAD RIZAL SAPUTRA','L','7c','Kulon Progo, 02 September 1999','Bangunrejo, Purwoharjo, Samigaluh, Kulon Progo',''),(139,'1417','MUHAMMAD AZIS','L','7b','Kulon Progo, 12 Desember 1999','Keceme, Gerbosari, Samigaluh, Kulon Progo',''),(140,'1418','MUHAMMAD IDAM SURYA','L','7b','Kulon Progo, 17 April 2000','Gebang, Sidoharjo, Samigaluh, Kulon Progo',''),(141,'1419','NUR SAIFULLAH','L','7a','Kulon Progo, 29 April 1998','Nglambur, Sidoharjo, Samigaluh, Kulon Progo',''),(142,'1420','PUTRI NUR HAYATI','P','7b','Kulon Progo, 09 Oktober 2000','Munggang Wetan, Sidoharjo, Samigaluh, Kulon Progo',''),(143,'1421','RAHAYU PANGASTUTI','P','7a','Kulon Progo, 08 Januari 1999','Wonogiri, Sidoharjo, Samigaluh, Kulon Progo',''),(144,'1422','RAHMAT','L','7c','Kulon Progo, 22 September 1998','Tukharjo, Purwoharjo, Samigaluh, Kulon Progo',''),(145,'1423','RIANDRA MANSYUR YAHYA','L','7c','Kulon Progo, 09 Juli 2000','Madigondo, Sidoharjo, Samigaluh, Kulon Progo',''),(146,'1424','RIKI ARDIYANTO','L','7a','Kulon Progo, 03 Juli 2000','Plarangan, Purwoharjo, Samigaluh, Kulon Progo',''),(147,'1425','RISKA RAHMAWATI','P','7a','Kulon Progo, 22 April 1999','Bangunrejo, Purwoharjo, Samigaluh, Kulon Progo',''),(148,'1426','RITA DEVI AMALIA','P','7c','Kulon Progo, 18 Februari 1999','Sumoroto, Sidoharjo, Samigaluh, Kulon Progo',''),(149,'1427','RYAN HIDAYAT','L','7a','Kulon Progo, 07 Agustus 2000','Wonogiri, Sidoharjo, Samigaluh, Kulon Progo',''),(150,'1428','SIDIQ PURWANTO','L','7a','Kulon Progo, 07 Mei 2000','Nglambur, Sidoharjo, Samigaluh, Kulon Progo',''),(151,'1429','SLAMET RIYANTO','L','7b','Kulon Progo, 09 Mei 2000','Bangunrejo, Purwoharjo, Samigaluh, Kulon Progo',''),(152,'1430','SRI ADI NINGSIH','P','7a','Kulon Progo, 19 Nopember 2000','Madigondo, Sidoharjo, Samigaluh, Kulon Progo',''),(153,'1431','SUFIYAH','P','7a','Kulon Progo, 29 Oktober 2000','Puser, Banjararum, Kalibawang, Kulon Progo',''),(154,'1432','SURYADI','L','7b','Kulon Progo, 23 September 1997','Tukharjo, Purwoharjo, Samigaluh, Kulon Progo',''),(155,'1433','SURYANTO','L','7c','Kulon Progo, 02 Nopember 1999','Tukharjo, Purwoharjo, Samigaluh, Kulon Progo',''),(156,'1434','TIWI SUSANTI','P','7a','Kulon Progo, 23 Oktober 1999','Taman, Purwoharjo, Samigaluh, Kulon Progo',''),(157,'1435','TOHAROH','L','7a','Kulon Progo, 15 Mei 1999','Bangunrejo, Purwoharjo, Samigaluh, Kulon Progo',''),(158,'1436','UJANG TAUFIK HIDAYAT','L','7a','Kulon Progo, 16 Juni 2000','Gebang, Sidoharjo, Samigaluh, Kulon Progo',''),(159,'1437','VENTIRATNA NUR\'AINI','P','7b','Kulon Progo, 09 Februari 2001','Wonogiri, Sidoharjo, Samigaluh, Kulon Progo',''),(160,'1438','WAHYU NUR SAFITRI','P','7a','Kulon Progo, 24 Nopember 2000','Plarangan, Purwoharjo, Samigaluh, Kulon Progo',''),(161,'1439','WAHYUNTORO','L','7c','Kulon Progo, 30 April 1998','Wonogiri, Sidoharjo, Samigaluh, Kulon Progo',''),(162,'1440','WIDAYANA ANNISA\'UROHMA','P','7a','Kulon Progo, 13 Maret 2000','Tegalsari, Ngargosari, Samigaluh, Kulon Progo',''),(163,'1441','YARQONI','L','7b','Kulon Progo, 15 Nopember 1999','Nyemani, Sidoharjo, Samigaluh, Kulon Progo','');
/*!40000 ALTER TABLE `data_anggota` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_buku`
--

DROP TABLE IF EXISTS `data_buku`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_buku` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `judul` varchar(250) NOT NULL,
  `pengarang` varchar(250) NOT NULL,
  `th_terbit` varchar(4) NOT NULL,
  `penerbit` varchar(250) NOT NULL,
  `isbn` varchar(25) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `kode_klas` varchar(20) NOT NULL,
  `jumlah_buku` int(2) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `asal` varchar(50) NOT NULL,
  `jum_temp` int(4) NOT NULL,
  `tgl_input` varchar(75) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_buku`
--

LOCK TABLES `data_buku` WRITE;
/*!40000 ALTER TABLE `data_buku` DISABLE KEYS */;
INSERT INTO `data_buku` VALUES (1,'bbbbbbbbbbbbb','bbbbbbbbbbbbb','bbbb','bbbbbbbbbbbbb','bbbbbbbbbbbbb','aaa','',2,'bbbbbbbbbbbbb','bbbbbbbbbbbbb',1,'tanggal');
/*!40000 ALTER TABLE `data_buku` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pengunjung`
--

DROP TABLE IF EXISTS `pengunjung`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pengunjung` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `jk` varchar(2) NOT NULL,
  `kelas` varchar(17) NOT NULL,
  `perlu1` varchar(15) NOT NULL,
  `perlu2` varchar(15) NOT NULL,
  `perlu3` varchar(15) NOT NULL,
  `perlu4` varchar(15) NOT NULL,
  `cari` varchar(255) NOT NULL,
  `saran` varchar(255) NOT NULL,
  `tgl_kunjung` date NOT NULL,
  `jam_kunjung` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pengunjung`
--

LOCK TABLES `pengunjung` WRITE;
/*!40000 ALTER TABLE `pengunjung` DISABLE KEYS */;
INSERT INTO `pengunjung` VALUES (1,'nur akhwan','L','VII a','Pinjam Buku','Baca Buku','','','komputer','-','2014-01-17','10:36:41');
/*!40000 ALTER TABLE `pengunjung` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trans_pinjam`
--

DROP TABLE IF EXISTS `trans_pinjam`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trans_pinjam` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `judul_buku` varchar(250) NOT NULL,
  `id_peminjam` int(4) NOT NULL,
  `nama_peminjam` varchar(100) NOT NULL,
  `tgl_pinjam` varchar(15) NOT NULL,
  `tgl_kembali` varchar(15) NOT NULL,
  `status` varchar(10) NOT NULL,
  `ket` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trans_pinjam`
--

LOCK TABLES `trans_pinjam` WRITE;
/*!40000 ALTER TABLE `trans_pinjam` DISABLE KEYS */;
INSERT INTO `trans_pinjam` VALUES (1,'Belajar Fisika',2,'Agus','17-04-2010','24-04-2010','kembali',''),(2,'Belajar Fisika',2,'Budi','17-04-2010','24-04-2010','kembali',''),(3,'Buku Pintar PHP',1,'Budi','26-04-2010','03-05-2010','kembali',''),(4,'Buku Pintar PHP',1,'Agus','26-04-2010','03-05-2010','kembali',''),(5,'Buku Pintar PHP',1,'Agus','26-04-2010','03-05-2010','kembali',''),(6,'Buku Pintar PHP',1,'Agus','26-04-2010','03-05-2010','kembali',''),(7,'Buku Pintar PHP',1,'Agus','26-04-2010','03-05-2010','kembali',''),(8,'Buku Pintar PHP',1,'Agus','26-04-2010','03-05-2010','kembali',''),(9,'Buku Pintar PHP',1,'Agus','26-04-2010','03-05-2010','kembali',''),(10,'Buku Pintar PHP',1,'Budi','26-04-2010','03-05-2010','kembali',''),(11,'Belajar Fisika',2,'Agus','26-04-2010','03-05-2010','kembali',''),(12,'Buku Pintar PHP',1,'Agus','26-04-2010','03-05-2010','kembali',''),(13,'Aplikasi Pemrograman Web Dinamis dengan PHP dan MySQL',3,'Agus','21-10-2010','28-10-2010','kembali',''),(14,'Belajar Fisika',4,'Agus','10-10-2012','17-10-2012','kembali',''),(15,'Belajar Fisika',2,'Agus','10-10-2012','17-10-2012','kembali',''),(16,'bbbbbbbbbbbbb',1,'FITRI ARIYANI','17-01-2014','24-01-2014','kembali',''),(17,'bbbbbbbbbbbbb',1,'FITRI ARIYANI','17-01-2014','24-01-2014','kembali',''),(18,'bbbbbbbbbbbbb',1,'DAMA ADITYO','17-01-2014','07-02-2014','pinjam','');
/*!40000 ALTER TABLE `trans_pinjam` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-01-17 18:28:55
