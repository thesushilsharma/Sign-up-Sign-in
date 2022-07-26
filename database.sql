CREATE DATABASE IF NOT EXISTS `sushil`;

CREATE TABLE IF NOT EXISTS `sushil`.`sharma` (
    `sno` int(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `name` text NOT NULL,
    `age` int(3) NOT NULL,
    `gender` varchar(8) NOT NULL,
    `email` varchar(25) NOT NULL UNIQUE,
    `phone` varchar(10) NOT NULL,
    `message` text NOT NULL,
    `date` datetime NOT NULL DEFAULT current_timestamp()
  );