# Host: localhost  (Version 5.7.24)
# Date: 2021-01-31 17:14:30
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "codesconditions"
#

DROP TABLE IF EXISTS `codesconditions`;
CREATE TABLE `codesconditions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `codesconditions_descripcion_unique` (`descripcion`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "codesconditions"
#

INSERT INTO `codesconditions` VALUES (1,'Tormenta tropical','2021-01-31 03:49:03','2021-01-31 03:49:03'),(2,'Huracán','2021-01-31 03:49:03','2021-01-31 03:49:03'),(3,'Tormentas eléctricas severas','2021-01-31 03:49:03','2021-01-31 03:49:03'),(4,'Tormentas','2021-01-31 03:49:03','2021-01-31 03:49:03'),(5,'Lluvia y nieve mezcladas','2021-01-31 03:49:03','2021-01-31 03:49:03'),(6,'Lluvia mezclada y aguanieve','2021-01-31 03:49:03','2021-01-31 03:49:03'),(7,'Mezcla de nieve y aguanieve','2021-01-31 03:49:03','2021-01-31 03:49:03'),(8,'Llovizna helada','2021-01-31 03:49:03','2021-01-31 03:49:03'),(9,'Llovizna','2021-01-31 03:49:03','2021-01-31 03:49:03'),(10,'Lluvia helada','2021-01-31 03:49:03','2021-01-31 03:49:03'),(11,'Duchas','2021-01-31 03:49:03','2021-01-31 03:49:03'),(12,'Lluvia','2021-01-31 03:49:03','2021-01-31 03:49:03'),(13,'Copos de nieve','2021-01-31 03:49:03','2021-01-31 03:49:03'),(14,'Duchas de nieve liviana','2021-01-31 03:49:03','2021-01-31 03:49:03'),(15,'La nieve que sopla','2021-01-31 03:49:03','2021-01-31 03:49:03'),(16,'Nieve','2021-01-31 03:49:03','2021-01-31 03:49:03'),(17,'Granizo','2021-01-31 03:49:03','2021-01-31 03:49:03'),(18,'Aguanieve','2021-01-31 03:49:03','2021-01-31 03:49:03'),(19,'Polvo','2021-01-31 03:49:03','2021-01-31 03:49:03'),(20,'Brumoso','2021-01-31 03:49:03','2021-01-31 03:49:03'),(21,'Calina','2021-01-31 03:49:03','2021-01-31 03:49:03'),(22,'Ahumado','2021-01-31 03:49:03','2021-01-31 03:49:03'),(23,'Tempestuoso','2021-01-31 03:49:03','2021-01-31 03:49:03'),(24,'Ventoso','2021-01-31 03:49:03','2021-01-31 03:49:03'),(25,'Frío','2021-01-31 03:49:03','2021-01-31 03:49:03'),(26,'Nublado','2021-01-31 03:49:03','2021-01-31 03:49:03'),(27,'Mayormente nublado (Noche)','2021-01-31 03:49:03','2021-01-31 03:49:03'),(28,'Mayormente nublado (Día)','2021-01-31 03:49:03','2021-01-31 03:49:03'),(29,'Parcialmente nublado (Noche)','2021-01-31 03:49:03','2021-01-31 03:49:03'),(30,'Parcialmente nublado (Día)','2021-01-31 03:49:03','2021-01-31 03:49:03'),(31,'Noche clara','2021-01-31 03:49:03','2021-01-31 03:49:03'),(32,'Soleado','2021-01-31 03:49:03','2021-01-31 03:49:03'),(33,'Justo (Noche)','2021-01-31 03:49:03','2021-01-31 03:49:03'),(34,'Justo (Día)','2021-01-31 03:49:03','2021-01-31 03:49:03'),(35,'Mezcla de lluvia y granizo','2021-01-31 03:49:03','2021-01-31 03:49:03'),(36,'Caliente','2021-01-31 03:49:03','2021-01-31 03:49:03'),(37,'Tormentas aisladas','2021-01-31 03:49:03','2021-01-31 03:49:03'),(38,'Tormentas eléctricas dispersas','2021-01-31 03:49:03','2021-01-31 03:49:03'),(39,'Chubascos dispersos (Día)','2021-01-31 03:49:03','2021-01-31 03:49:03'),(40,'Lluvia Pesada','2021-01-31 03:49:03','2021-01-31 03:49:03'),(41,'Chubascos de nieve dispersos (Día)','2021-01-31 03:49:03','2021-01-31 03:49:03'),(42,'Fuertes nevadas','2021-01-31 03:49:03','2021-01-31 03:49:03'),(43,'Tormenta de nieve','2021-01-31 03:49:03','2021-01-31 03:49:03'),(44,'No disponible','2021-01-31 03:49:03','2021-01-31 03:49:03'),(45,'Lluvias dispersas (Noche)','2021-01-31 03:49:03','2021-01-31 03:49:03'),(46,'Chubascos de nieve dispersos (Noche)','2021-01-31 03:49:03','2021-01-31 03:49:03'),(47,'Chubascos dispersos','2021-01-31 03:49:04','2021-01-31 03:49:04');

#
# Structure for table "consultas"
#

DROP TABLE IF EXISTS `consultas`;
CREATE TABLE `consultas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ciudad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `humedad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temperatura` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigo` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "consultas"
#

INSERT INTO `consultas` VALUES (1,'Miami','64','24',26,'2021-01-31 19:46:14','2021-01-31 19:46:14'),(2,'Orlando','50','25',23,'2021-01-31 19:46:41','2021-01-31 19:46:41'),(3,'New York','55','-4',26,'2021-01-31 19:47:24','2021-01-31 19:47:24'),(4,'New York','55','-4',26,'2021-01-31 19:48:01','2021-01-31 19:48:01'),(5,'New York','55','-4',26,'2021-01-31 19:49:02','2021-01-31 19:49:02'),(6,'New York','54','-3',14,'2021-01-31 21:45:08','2021-01-31 21:45:08'),(7,'Orlando','47','25',23,'2021-01-31 22:01:06','2021-01-31 22:01:06'),(8,'Miami','65','23',26,'2021-01-31 22:07:42','2021-01-31 22:07:42'),(9,'New York','54','-3',14,'2021-01-31 22:07:53','2021-01-31 22:07:53'),(10,'Miami','65','23',26,'2021-01-31 22:09:57','2021-01-31 22:09:57'),(11,'New York','54','-3',14,'2021-01-31 22:10:07','2021-01-31 22:10:07');

#
# Structure for table "failed_jobs"
#

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "failed_jobs"
#


#
# Structure for table "migrations"
#

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "migrations"
#

INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2021_01_31_032041_create_codesconditions_table',1),(5,'2021_01_31_184146_create_consultas_table',2);

#
# Structure for table "password_resets"
#

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "password_resets"
#


#
# Structure for table "users"
#

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "users"
#

