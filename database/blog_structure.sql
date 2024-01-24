-- Adminer 4.8.1 MySQL 10.6.12-MariaDB-0ubuntu0.22.04.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;

CREATE TABLE `Authors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;


CREATE TABLE `Categories` (
  `id` int(11) NOT NULL,
  `theme` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;


CREATE TABLE `Categories_has_Posts` (
  `Categories_id` int(11) NOT NULL,
  `Posts_id` int(11) NOT NULL,
  PRIMARY KEY (`Categories_id`,`Posts_id`),
  KEY `fk_Categories_has_Posts_Posts1_idx` (`Posts_id`),
  KEY `fk_Categories_has_Posts_Categories1_idx` (`Categories_id`),
  CONSTRAINT `fk_Categories_has_Posts_Categories1` FOREIGN KEY (`Categories_id`) REFERENCES `Categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Categories_has_Posts_Posts1` FOREIGN KEY (`Posts_id`) REFERENCES `Posts` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;


CREATE TABLE `Comments` (
  `id` int(11) NOT NULL,
  `text` varchar(300) DEFAULT NULL,
  `publicationDate` date DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `Authors_id` int(11) NOT NULL,
  `Posts_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Comments_Authors_idx` (`Authors_id`),
  KEY `fk_Comments_Posts1_idx` (`Posts_id`),
  CONSTRAINT `fk_Comments_Authors` FOREIGN KEY (`Authors_id`) REFERENCES `Authors` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Comments_Posts1` FOREIGN KEY (`Posts_id`) REFERENCES `Posts` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;


CREATE TABLE `Posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) DEFAULT NULL,
  `text` varchar(300) DEFAULT NULL,
  `popularity` int(6) DEFAULT NULL,
  `startPublicationDate` date DEFAULT NULL,
  `endPublicationDate` date DEFAULT NULL,
  `Authors_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Posts_Authors1_idx` (`Authors_id`),
  CONSTRAINT `fk_Posts_Authors1` FOREIGN KEY (`Authors_id`) REFERENCES `Authors` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;


-- 2024-01-24 08:48:02
