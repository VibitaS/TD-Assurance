SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `contract_date` date NOT NULL,
  `purchase_date` date NOT NULL,
  `insurance_money` float NOT NULL,
  `image` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `product_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `product` (`id`, `name`, `contract_date`, `purchase_date`, `insurance_money`, `image`, `user_id`) VALUES
(2,	'Computer Model XXX',	'2018-02-04',	'2015-06-01',	300,	'computer.jpg',	1),
(6,	'Computer Model XXX',	'2018-02-04',	'2015-06-01',	300,	'computer.jpg',	1),
(7,	'Computer Model XXX',	'2018-02-04',	'2015-06-01',	300,	'computer.jpg',	1);

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `user` (`id`, `login`, `password`) VALUES
(1,	'user',	'user');