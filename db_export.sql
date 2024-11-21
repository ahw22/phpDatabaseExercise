-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping data for table shop.products: ~0 rows (approximately)
INSERT INTO `products` (`id`, `productName`, `manufacturer`, `category`, `price`) VALUES
	(3, 'Lead Pencil', 'BIC', 'Stationary', '2,5€'),
	(5, 'Ballpoint Pen', 'BBRZ', 'Stationary', '4,5€'),
	(10, 'Ruler, 30cm', 'RulerCorp', 'Stationary', '5,25€');

-- Dumping data for table shop.users: ~3 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `password`, `reg_date`, `role`) VALUES
	(1, 'admin', 'admin@admin.at', 'admin', '2024-11-21 10:19:39', 'admin'),
	(3, 'admin', 'admin@admin.at', '1234', '2024-11-21 10:19:43', 'admin'),
	(8, 'user', 'user@user.com', 'user', '2024-11-21 10:37:49', 'user');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
