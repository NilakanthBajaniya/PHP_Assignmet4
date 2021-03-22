CREATE DATABASE `Nilakanth_A4` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
CREATE TABLE `messages` (
  `MessageId` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `message` varchar(1000) NOT NULL,
  PRIMARY KEY (`MessageId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
