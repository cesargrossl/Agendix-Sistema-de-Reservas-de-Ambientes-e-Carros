

CREATE DATABASE `db_agendix`;
USE `db_agendix`;


DROP TABLE IF EXISTS `tb_menu`;

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

LOCK TABLES `tb_menu` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `tb_permissoes`;

CREATE TABLE `tb_permissoes` (
  `per_id` int(11) NOT NULL AUTO_INCREMENT,
  `per_id_grupo` int(11) ,
  `per_id_menu` int(11) ,
  `per_id_usuario` int(11) ,
  `per_del` char(1) DEFAULT "",
  PRIMARY KEY (`per_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `tb_permissoes` WRITE;

UNLOCK TABLES;


DROP TABLE IF EXISTS `tb_usuarios`;

CREATE TABLE `tb_usuarios` (
  `usu_id` int(11) NOT NULL AUTO_INCREMENT,
  `usu_nome` varchar(250) NOT NULL,
  `usu_email` varchar(250) DEFAULT "",
  `usu_login` varchar(20) DEFAULT "",
  `usu_senha` varchar(80) DEFAULT "",
  `usu_dtsenha` date,
  `usu_tipo` varchar(45) DEFAULT "" COMMENT 'A - Administrador, U - Usuário',
  `usu_del` char(1) DEFAULT "",
  PRIMARY KEY (`usu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

LOCK TABLES `tb_usuarios` WRITE;

INSERT INTO `tb_usuarios` VALUES (1,'Cesar',NULL,'cgrossl','6ab0357358450ad998820809ff239bed','2022-06-20','A','');

UNLOCK TABLES;