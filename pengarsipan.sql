# Host: localhost  (Version 5.5.5-10.4.27-MariaDB)
# Date: 2023-03-01 22:01:21
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "users"
#

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id_users` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_users`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "users"
#

INSERT INTO `users` VALUES (1,'admin','$2y$10$aDVizV.gsj9vg8f5aGleduQVDh41fV940fYblrBil6W7IIyImYCve');
