CREATE DATABASE IF NOT EXISTS `cronhxtd_findavet`;
USE `cronhxtd_findavet`;

CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `vets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `namemaps` varchar(255) NOT NULL,
  `placeid` varchar(255) NOT NULL,
  `doctor` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(13) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DELIMITER //
CREATE DEFINER=`cronhxtd_findavet`@`localhost` PROCEDURE `search`(IN searchTerm VARCHAR(255))
BEGIN
  SET @search = searchTerm;
	PREPARE stmt FROM @search;
	SELECT * FROM vets WHERE name LIKE CONCAT('%', @search, '%');
END//

/* To Insert Vet (Row) into database

INSERT INTO `vets` (name, namemaps, placeid, doctor, address, phone)
VALUES ('', '', '', '', '', '');

*/