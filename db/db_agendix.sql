


DROP TABLE IF EXISTS `tb_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_menu` (
  `men_id` int(11) NOT NULL AUTO_INCREMENT,
  `men_titulo` varchar(50) DEFAULT "",
  `men_icone` varchar(50) DEFAULT "",
  `men_link` varchar(50) DEFAULT "",
  `men_tipomenu` char(1) DEFAULT "",
  `men_id_submenu` int(11) ,
  `men_perm` char(1) DEFAULT "",
  `per_del` char(1) DEFAULT "",
  PRIMARY KEY (`men_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_menu`
--

LOCK TABLES `tb_menu` WRITE;
/*!40000 ALTER TABLE `tb_menu` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_permissoes`
--

DROP TABLE IF EXISTS `tb_permissoes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_permissoes` (
  `per_id` int(11) NOT NULL AUTO_INCREMENT,
  `per_id_grupo` int(11) DEFAULT "",
  `per_id_menu` int(11) DEFAULT "",
  `per_id_usuario` int(11) DEFAULT "",
  `per_del` char(1) DEFAULT "",
  PRIMARY KEY (`per_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_permissoes`
--

LOCK TABLES `tb_permissoes` WRITE;
/*!40000 ALTER TABLE `tb_permissoes` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_permissoes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_usuarios`
--

DROP TABLE IF EXISTS `tb_usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_usuarios` (
  `usu_id` int(11) NOT NULL AUTO_INCREMENT,
  `usu_nome` varchar(250) NOT NULL,
  `usu_email` varchar(250) DEFAULT "",
  `usu_login` varchar(20) DEFAULT "",
  `usu_senha` varchar(80) DEFAULT "",
  `usu_dtsenha` date DEFAULT "",
  `usu_tipo` varchar(45) DEFAULT "" COMMENT 'A - Administrador, U - Usuário',
  `usu_del` char(1) DEFAULT "",
  PRIMARY KEY (`usu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_usuarios`
--

LOCK TABLES `tb_usuarios` WRITE;
/*!40000 ALTER TABLE `tb_usuarios` DISABLE KEYS */;
INSERT INTO `tb_usuarios` VALUES (1,'Cesar',NULL,'cgrossl','6ab0357358450ad998820809ff239bed','2022-06-20','A','');
/*!40000 ALTER TABLE `tb_usuarios` ENABLE KEYS */;
UNLOCK TABLES;