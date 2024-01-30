-- Adminer 4.8.1 MySQL 10.6.12-MariaDB-0ubuntu0.22.04.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP DATABASE IF EXISTS `blog`;
CREATE DATABASE `blog` /*!40100 DEFAULT CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci */;
USE `blog`;

INSERT INTO `Authors` (`id`, `pseudo`) VALUES
    (1,'Matéo'),
    (2,'Valentine'),
    (3,'Sandrine'),
    (4,'Noah'),
    (5,'Andrea');

INSERT INTO `Categories` (`id`, `theme`) VALUES
    (1,	'Loisir');


INSERT INTO `Comments` (`id`, `text`, `publicationDate`, `type`, `Authors_id`, `Posts_id`) VALUES
     (1,	'Un article fascinant qui explore en profondeur un sujet complexe. Les arguments sont bien articulés, et l\'auteur offre une perspective perspicace. Bravo pour cette analyse approfondie',	'2024-01-23',	NULL,	1,	1),
     (2,'L\'entraînement en minutes peut sacrifier la profondeur et la progression à long terme. Risque de négliger la forme et la variété, compromettant la santé physique.',	'2024-01-23',	NULL,	2,	4);

INSERT INTO `Posts` (`id`, `title`, `text`, `popularity`, `startPublicationDate`, `endPublicationDate`, `Authors_id`) VALUES
    (1,	'Mon sport',	'Le biathlon, mariage unique de ski de fond et de tir, incarne l\'alliance parfaite entre endurance et précision. Un sport captivant qui allie force physique et concentration.',	4,	'2024-01-28',	'2024-02-28',	1),
    (2,	'Entrainement optimal',	'L\'entraînement optimal requiert discipline et variété. Alliez intensité et récupération, ajustez selon vos progrès. Soyez conséquent, mais écoutez votre corps pour maximiser les gains.',	2,	'2024-01-01',	'2024-01-30',	1),
    (3,	'Mental gagnant',	'Un mental gagnant forge la persévérance dans l\'adversité, embrasse les défis comme des opportunités et refuse le découragement. Il est résilient, focalisé et prêt à apprendre de chaque expérience.',	4,	'2024-01-28',	'2024-02-06',	1),
    (4,	'Entrainement en minutes',	'L\'entraînement en minutes offre une solution efficace pour des vies actives. Intensifiez chaque session, privilégiez la qualité et optimisez les résultats.',	1,	'2024-01-05',	'2024-01-28',	2),
    (5,	'Mon post 1',	'Mon super post 1',	2,	'2024-01-05',	'2024-02-06',	3),
    (6,	'mon post 2',	'Mon super post 2',	4,	'2024-01-09',	'2024-01-15',	3),
    (7,	'mon post 3',	'Mon super post 3',	1,	'2024-01-01',	'2024-02-06',	4),
    (8,	'Mon post 4',	'Mon super post 4',	3,	'2024-01-05',	'2024-01-28',	2),
    (9,	'Mon post 5',	'Mon super post 5',	5,	'2024-01-05',	'2024-02-05',	5),
    (10,'mon post 6',	'Mon super post 6',	0,	'2024-01-05',	'2024-01-30',	2),
    (11,'mon post 7',	'Mon super post 7',	2,	'2024-01-05',	'2024-01-30',	5),
    (12,'mon post 8',	'mon super post 8',	5,	'2024-01-09',	'2024-01-28',	4);

-- 2024-01-25 09:17:42