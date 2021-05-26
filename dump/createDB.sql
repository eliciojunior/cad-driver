CREATE DATABASE [IF NOT EXISTS] `dbCadDriver` CHARACTER SET utf8 COLLATE utf8_general_ci;

USE `dbCadDriver`;

DROP TABLE `tbUsuarios`;
CREATE TABLE IF NOT EXIST `tbUsuarios` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(225) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
LOCK TABLES `tbUsuarios` WRITE;
INSERT INTO `tbUsuarios` VALUES (1,'admin@email.com','admin');
UNLOCK TABLES;

DROP TABLE `tbMotoristas`;
CREATE TABLE IF NOT EXIST `tbMotoristas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(225) DEFAULT NULL,
  `telefone` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
LOCK TABLES `tbMotoristas` WRITE;
UNLOCK TABLES;