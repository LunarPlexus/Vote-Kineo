CREATE TABLE `vote-kineo`.`voters` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `isVoting` tinyint(4) DEFAULT NULL,
  `forWhom` varchar(100) DEFAULT NULL,
  `state` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
