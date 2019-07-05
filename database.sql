-- Sets Default Database Values
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "-04:00";

-- FindAVet SQL

CREATE DATABASE IF NOT EXISTS `findavet` DEFAULT CHARACTER SET utf8mb4;
USE `findavet`;

-- Database for Vets (search.php)
CREATE TABLE IF NOT EXISTS `vets` (
    `id` INT NOT NULL AUTO_INCREMENT, -- Creates Unique Row for Each Vet
    `name` VARCHAR(255) NOT NULL, -- Name of Vet
    `doctor` VARCHAR(255) NOT NULL, -- Practicing Doctor at Office
    `address` VARCHAR(255) NOT NULL, -- Address of Office, Possible Link to Google Maps (GMaps API)
    `phone` VARCHAR(13) NOT NULL, -- Phone Number of Office

    PRIMARY KEY (`id`) -- Sets the Auto-Incremented ID as Unique Primary Key
)

-- User Table (if Eventually Needed)
CREATE TABLE IF NOT EXISTS `users` (
    `uid` INT NOT NULL AUTO_INCREMENT, -- Creates Unique Row for Each User
    `username` VARCHAR(50) NOT NULL, -- Username for User
    `password` VARCHAR(255) NOT NULL, -- User's Password (Hashed)
    `admin` TINYINT(1) NOT NULL, -- Admin (1) or Not Admin (0)

    PRIMARY KEY (`uid`)-- Sets the Auto-Incremented ID as Unique Primary Key
)