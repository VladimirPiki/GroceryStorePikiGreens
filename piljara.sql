-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.24-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for piljara
CREATE DATABASE IF NOT EXISTS `piljara` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `piljara`;

-- Dumping structure for table piljara.dukani
CREATE TABLE IF NOT EXISTS `dukani` (
  `dukani_id` tinyint(2) unsigned NOT NULL AUTO_INCREMENT,
  `adresa` varchar(50) NOT NULL,
  `telefon` int(9) unsigned NOT NULL,
  `grad` varchar(15) NOT NULL,
  PRIMARY KEY (`dukani_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table piljara.dukani: ~10 rows (approximately)
INSERT INTO `dukani` (`dukani_id`, `adresa`, `telefon`, `grad`) VALUES
	(1, 'Ulica 16ta bb', 75228730, 'Bitola'),
	(2, 'Partizanska 23a', 72230630, 'Bitola'),
	(3, 'Pavle Del Radev bb', 76775980, 'Prilep'),
	(4, 'Jane Sandanski 03b', 75222333, 'Strumica'),
	(5, '8mi Septemvri 7a bb', 75443888, 'Ohrid'),
	(6, 'Ivo Lola Ribar 31a', 75228740, 'Kavadarci'),
	(7, 'Jane Sandanski bb', 76775980, 'Prilep'),
	(8, 'Ulica Goce Delcev bb', 75228555, 'Strumica'),
	(9, 'Ulica Partizanska br 55', 75244655, 'Bitola'),
	(10, 'Gjorgi Sugarev', 75244555, 'Negotino'),
	(11, 'Ulica Goran Pandev br bb', 76777888, 'Kavadarci');

-- Dumping structure for table piljara.prodazba
CREATE TABLE IF NOT EXISTS `prodazba` (
  `prodazba_id` mediumint(9) unsigned NOT NULL AUTO_INCREMENT,
  `prodazba_datum` date NOT NULL,
  `promet` mediumint(7) unsigned NOT NULL,
  `prodadeno_kg` decimal(20,1) unsigned NOT NULL,
  `rasipano_kg` decimal(20,1) unsigned NOT NULL,
  `rabotnik_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`prodazba_id`) USING BTREE,
  KEY `FK_prodazba_rabotnik` (`rabotnik_id`),
  CONSTRAINT `FK_prodazba_rabotnik` FOREIGN KEY (`rabotnik_id`) REFERENCES `rabotnik` (`rabotnik_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=118 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table piljara.prodazba: ~8 rows (approximately)
INSERT INTO `prodazba` (`prodazba_id`, `prodazba_datum`, `promet`, `prodadeno_kg`, `rasipano_kg`, `rabotnik_id`) VALUES
	(1, '2022-08-09', 43000, 250.0, 20.0, 1),
	(2, '2022-08-10', 53000, 300.0, 24.0, 2),
	(3, '2022-08-11', 33000, 287.0, 14.0, 3),
	(4, '2022-08-12', 45454, 417.0, 34.0, 4),
	(5, '2022-08-13', 50070, 280.0, 20.0, 5),
	(6, '2022-08-14', 60000, 490.0, 14.0, 6),
	(7, '2022-08-15', 49970, 277.0, 18.0, 7),
	(8, '2022-08-16', 57000, 450.0, 20.0, 9);

-- Dumping structure for table piljara.proizvodi
CREATE TABLE IF NOT EXISTS `proizvodi` (
  `proizvodi_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `ime` varchar(15) NOT NULL,
  `tip` enum('zelencuk','ovoshje') NOT NULL,
  `kg` decimal(20,1) NOT NULL DEFAULT 0.0,
  `cena` smallint(4) unsigned NOT NULL,
  `datum_priem` datetime NOT NULL,
  PRIMARY KEY (`proizvodi_id`),
  UNIQUE KEY `Index 2` (`datum_priem`,`ime`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2116 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table piljara.proizvodi: ~14 rows (approximately)
INSERT INTO `proizvodi` (`proizvodi_id`, `ime`, `tip`, `kg`, `cena`, `datum_priem`) VALUES
	(1, 'Domat', 'zelencuk', 35.0, 40, '2022-08-05 00:00:00'),
	(2, 'Krastavica', 'zelencuk', 350.0, 40, '2022-08-06 13:00:00'),
	(3, 'Ljubenici', 'ovoshje', 400.0, 30, '2022-08-06 13:00:00'),
	(4, 'Zelka', 'zelencuk', 280.0, 33, '2022-08-06 13:00:00'),
	(5, 'Kompiri', 'zelencuk', 330.0, 13, '2022-08-06 13:00:00'),
	(6, 'Piperki', 'zelencuk', 102.0, 19, '2022-08-06 13:00:00'),
	(7, 'Banani', 'ovoshje', 143.0, 39, '2022-08-10 14:00:00'),
	(8, 'Domat', 'zelencuk', 143.0, 39, '2022-08-10 14:00:00'),
	(9, 'Jagodi', 'ovoshje', 43.0, 49, '2022-08-10 14:00:00'),
	(10, 'Kivi', 'ovoshje', 15.0, 23, '2022-08-10 14:00:00'),
	(11, 'Ljubenici', 'ovoshje', 40.0, 30, '2022-08-12 14:00:00'),
	(12, 'Jagodi', 'ovoshje', 30.0, 10, '2022-09-10 13:09:00'),
	(13, 'Jabolka', 'ovoshje', 54.0, 28, '2022-09-14 16:47:00'),
	(14, 'Piperki Ajvar', 'zelencuk', 100.0, 23, '2022-09-15 13:00:00');

-- Dumping structure for table piljara.rabotnik
CREATE TABLE IF NOT EXISTS `rabotnik` (
  `rabotnik_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `datum` date NOT NULL,
  `smena` enum('prva','vtora') NOT NULL,
  `dukani_id` tinyint(2) unsigned NOT NULL,
  `vraboteni_id` tinyint(2) unsigned NOT NULL,
  PRIMARY KEY (`rabotnik_id`),
  UNIQUE KEY `Politika na firmata` (`datum`,`smena`,`vraboteni_id`) USING BTREE,
  KEY `FK_dukani_rabotnik` (`dukani_id`),
  KEY `FK_vraboteni_rabotnik` (`vraboteni_id`),
  CONSTRAINT `FK_dukani_rabotnik` FOREIGN KEY (`dukani_id`) REFERENCES `dukani` (`dukani_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_vraboteni_rabotnik` FOREIGN KEY (`vraboteni_id`) REFERENCES `vraboteni` (`vraboteni_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table piljara.rabotnik: ~9 rows (approximately)
INSERT INTO `rabotnik` (`rabotnik_id`, `datum`, `smena`, `dukani_id`, `vraboteni_id`) VALUES
	(1, '2022-08-09', 'prva', 1, 1),
	(2, '2022-08-10', 'prva', 1, 2),
	(3, '2022-08-11', 'prva', 1, 2),
	(4, '2022-08-12', 'vtora', 3, 4),
	(5, '2022-08-13', 'prva', 6, 7),
	(6, '2022-08-14', 'vtora', 5, 4),
	(7, '2022-08-15', 'prva', 4, 6),
	(8, '2022-08-16', 'vtora', 11, 10),
	(9, '2022-08-17', 'vtora', 11, 11);

-- Dumping structure for table piljara.vraboteni
CREATE TABLE IF NOT EXISTS `vraboteni` (
  `vraboteni_id` tinyint(2) unsigned NOT NULL AUTO_INCREMENT,
  `ime` varchar(15) NOT NULL,
  `prezime` varchar(30) NOT NULL,
  `grad` varchar(30) NOT NULL,
  `plata` mediumint(6) unsigned NOT NULL,
  PRIMARY KEY (`vraboteni_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table piljara.vraboteni: ~12 rows (approximately)
INSERT INTO `vraboteni` (`vraboteni_id`, `ime`, `prezime`, `grad`, `plata`) VALUES
	(1, 'Vladimir', 'Krstevski', 'Bitola', 30000),
	(2, 'Eleonora', 'Markovska', 'Bitola', 32000),
	(3, 'Andrej', 'Markovski', 'Bitola', 35000),
	(4, 'Andrej', 'Nedelkovski', 'Prilep', 29000),
	(5, 'Darko', 'Krstevski', 'Prilep', 25000),
	(6, 'Darko', 'Joshevski', 'Strumica', 33000),
	(7, 'Darko', 'Krstev', 'Strumica', 31000),
	(8, 'Antimon', 'Krstev', 'Kocani', 29700),
	(9, 'Jovana', 'Mladenova', 'Ohrid', 28500),
	(10, 'Zorica', 'Krstevska', 'Kavadarci', 55000),
	(11, 'Andrej', 'Nedelkovski', 'Ohrid', 29000);

-- Dumping structure for procedure piljara._delete_dukani
DELIMITER //
CREATE PROCEDURE `_delete_dukani`(
	IN `dukani_param` TINYINT
)
BEGIN
DELETE FROM dukani
WHERE dukani_id=dukani_param;
END//
DELIMITER ;

-- Dumping structure for procedure piljara._delete_prodazba
DELIMITER //
CREATE PROCEDURE `_delete_prodazba`(
	IN `prodazba_id_param` TINYINT
)
BEGIN
DELETE FROM prodazba
WHERE prodazba_id=prodazba_id_param;
END//
DELIMITER ;

-- Dumping structure for procedure piljara._delete_proizvodi
DELIMITER //
CREATE PROCEDURE `_delete_proizvodi`(
	IN `proizvodi_param` TINYINT
)
BEGIN
DELETE FROM proizvodi
WHERE proizvodi_id=proizvodi_param;
END//
DELIMITER ;

-- Dumping structure for procedure piljara._delete_rabotnik
DELIMITER //
CREATE PROCEDURE `_delete_rabotnik`(
	IN `rabotnik_id_param` TINYINT
)
BEGIN
DELETE FROM rabotnik
WHERE rabotnik_id=rabotnik_id_param;
END//
DELIMITER ;

-- Dumping structure for procedure piljara._delete_vraboteni
DELIMITER //
CREATE PROCEDURE `_delete_vraboteni`(
	IN `vraboteni_id_param` TINYINT
)
BEGIN
DELETE FROM vraboteni
WHERE vraboteni_id=vraboteni_id_param;
END//
DELIMITER ;

-- Dumping structure for procedure piljara._insert_dukani
DELIMITER //
CREATE PROCEDURE `_insert_dukani`(
	IN `adresa_param` VARCHAR(50),
	IN `telefon_pram` INT(9),
	IN `grad_param` VARCHAR(15)
)
BEGIN
INSERT INTO dukani(adresa,telefon,grad)
VALUES(adresa_param,telefon_pram,grad_param);
END//
DELIMITER ;

-- Dumping structure for procedure piljara._insert_prodazba
DELIMITER //
CREATE PROCEDURE `_insert_prodazba`(
	IN `prodazba_datum_param` DATE,
	IN `promet_param` MEDIUMINT(7),
	IN `prodadeno_kg_param` DECIMAL(20,1),
	IN `rasipano_kg_param` DECIMAL(20,1),
	IN `rabotnik_id_param` MEDIUMINT(8)
)
BEGIN
INSERT INTO prodazba(prodazba_datum,promet,prodadeno_kg,rasipano_kg,rabotnik_id)
VALUES(prodazba_datum_param,promet_param,prodadeno_kg_param,rasipano_kg_param,rabotnik_id_param);
END//
DELIMITER ;

-- Dumping structure for procedure piljara._insert_proizvodi
DELIMITER //
CREATE PROCEDURE `_insert_proizvodi`(
	IN `ime_param` VARCHAR(15),
	IN `tip_param` ENUM('zelencuk','ovoshje'),
	IN `kg_param` DECIMAL(20,1),
	IN `cena_param` DECIMAL(20,1),
	IN `datum_priem_param` DATETIME
)
BEGIN
INSERT INTO proizvodi(ime,tip,kg,cena,datum_priem)
VALUES(ime_param,tip_param,kg_param,cena_param,datum_priem_param);
END//
DELIMITER ;

-- Dumping structure for procedure piljara._insert_rabotnik
DELIMITER //
CREATE PROCEDURE `_insert_rabotnik`(
	IN `datum_param` DATE,
	IN `smena_param` ENUM('prva','vtora'),
	IN `dukani_id_param` TINYINT,
	IN `vraboteni_id_param` TINYINT
)
BEGIN
INSERT INTO rabotnik(datum,smena,dukani_id,vraboteni_id)
VALUES(datum_param,smena_param,dukani_id_param,vraboteni_id_param);
END//
DELIMITER ;

-- Dumping structure for procedure piljara._insert_vraboteni
DELIMITER //
CREATE PROCEDURE `_insert_vraboteni`(
	IN `ime_param` VARCHAR(15),
	IN `prezime_param` VARCHAR(30),
	IN `grad_param` VARCHAR(30),
	IN `plata_param` MEDIUMINT(6)
)
BEGIN
INSERT INTO vraboteni(ime,prezime,grad,plata)
VALUES(ime_param,prezime_param,grad_param,plata_param);
END//
DELIMITER ;

-- Dumping structure for procedure piljara._select_dukani
DELIMITER //
CREATE PROCEDURE `_select_dukani`()
BEGIN
SELECT* FROM dukani;
END//
DELIMITER ;

-- Dumping structure for procedure piljara._select_prodazba
DELIMITER //
CREATE PROCEDURE `_select_prodazba`()
BEGIN
SELECT prodazba.prodazba_id,prodazba.prodazba_datum,prodazba.promet,
prodazba.prodadeno_kg,prodazba.rasipano_kg,
CONCAT(vraboteni.ime," -- ",vraboteni.prezime," -- ",vraboteni.grad) AS rabotnik_id
FROM prodazba
	left JOIN rabotnik
	ON rabotnik.rabotnik_id=prodazba.prodazba_id
	left JOIN vraboteni
	ON vraboteni.vraboteni_id=prodazba.prodazba_id;
END//
DELIMITER ;

-- Dumping structure for procedure piljara._select_prodazba_nova
DELIMITER //
CREATE PROCEDURE `_select_prodazba_nova`()
BEGIN
SELECT * FROM prodazba
left JOIN rabotnik
ON rabotnik.rabotnik_id=prodazba.rabotnik_id
LEFT JOIN vraboteni
ON vraboteni.vraboteni_id=rabotnik.vraboteni_id;
END//
DELIMITER ;

-- Dumping structure for procedure piljara._select_proizvodi
DELIMITER //
CREATE PROCEDURE `_select_proizvodi`()
BEGIN
SELECT * FROM proizvodi;
END//
DELIMITER ;

-- Dumping structure for procedure piljara._select_rabotnik
DELIMITER //
CREATE PROCEDURE `_select_rabotnik`()
BEGIN
SELECT * FROM rabotnik
        left JOIN dukani
        ON dukani.dukani_id=rabotnik.dukani_id
        left JOIN vraboteni
        ON vraboteni.vraboteni_id=rabotnik.vraboteni_id;
END//
DELIMITER ;

-- Dumping structure for procedure piljara._select_vraboteni
DELIMITER //
CREATE PROCEDURE `_select_vraboteni`()
BEGIN
SELECT * FROM vraboteni;
END//
DELIMITER ;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
