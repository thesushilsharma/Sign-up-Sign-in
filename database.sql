CREATE DATABASE IF NOT EXISTS `sushil`;

CREATE TABLE
    IF NOT EXISTS `sushil`.`sharma` (
        `sno` INT(3) UNSIGNED NOT NULL AUTO_INCREMENT,
        `name` TEXT NOT NULL,
        `age` TINYINT(3) UNSIGNED NOT NULL,
        `gender` VARCHAR(20) NOT NULL,
        `email` VARCHAR(25) NOT NULL,
        `username` VARCHAR(8) NOT NULL,
        `password` VARCHAR(23) NOT NULL,
        `password_confirm` VARCHAR(23) NOT NULL,
        `phone` VARCHAR(10) NOT NULL,
        `studentid` MEDIUMINT(7) UNSIGNED NOT NULL,
        `date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (`sno`),
        UNIQUE (`username`(8)),
        UNIQUE (`studentid`)
    );