DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;

INSERT INTO `products` (`id`, `name`, `price`, `image`, `description`)
VALUES
	(11,'water',1,'water.png','Nice looking water'),
	(12,'cheese',3.74,'cheese.png','Nice looking cheese'),
	(13,'beer',2,'beer.png','Nice looking beer'),
	(14,'apple',0.3,'apple.png','Nice looking apple');

/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table reviews
# ------------------------------------------------------------

DROP TABLE IF EXISTS `reviews`;

CREATE TABLE `reviews` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `sess_id` varchar(70) DEFAULT NULL,
  `review` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `reviews` WRITE;
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;

INSERT INTO `reviews` (`id`, `product_id`, `sess_id`, `review`)
VALUES
	(24,11,'17143b28aeb4f0ee0ab2923a80702f7a',5),
	(25,12,'17143b28aeb4f0ee0ab2923a80702f7a',5),
	(26,13,'17143b28aeb4f0ee0ab2923a80702f7a',5),
	(27,14,'17143b28aeb4f0ee0ab2923a80702f7a',1);

/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;
UNLOCK TABLES;