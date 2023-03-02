# Host: localhost  (Version 5.5.5-10.4.27-MariaDB)
# Date: 2023-03-02 17:25:33
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "users"
#

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id_users` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_users`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "users"
#

INSERT INTO `users` VALUES (1,'Dexi Eluama','1','dexi','$2y$10$MQIbgVpUUduooI/3hkHzluT5iaOG/Oj7SzoSdVb7b0.iJYnQjabpG'),(2,'Costa','2','costa','$2y$10$2.TfypgD1uHJJ.EzIHCKj.tCPwYNiP9JU1GmLKeUrlnSbMWPv8DuC'),(3,'Nona','3','nona','$2y$10$NY8aulDq3kaRBvMJjEEycuMUvivgv3IAUwV.buqWkVFTnYaWPOFE.');
