-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.37-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for pcs
CREATE DATABASE IF NOT EXISTS `pcs` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `pcs`;

-- Dumping structure for table pcs.m_factory
CREATE TABLE IF NOT EXISTS `m_factory` (
  `id_factory` int(11) NOT NULL AUTO_INCREMENT,
  `kd_factory` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `status` int(1) DEFAULT '1',
  PRIMARY KEY (`id_factory`),
  UNIQUE KEY `kd_factory` (`kd_factory`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table pcs.m_factory: ~3 rows (approximately)
/*!40000 ALTER TABLE `m_factory` DISABLE KEYS */;
INSERT INTO `m_factory` (`id_factory`, `kd_factory`, `name`, `address`, `status`) VALUES
	(1, 'PB001', 'Pabrik Cikarang', 'Jl. raya cikarang', 1),
	(3, 'PB002', 'Pabrik Bekasi', 'Jl. raya bekasi', 1),
	(5, 'PB003', 'Pabrik Tebet', 'Jl. raya tebet', 1);
/*!40000 ALTER TABLE `m_factory` ENABLE KEYS */;

-- Dumping structure for table pcs.m_menu
CREATE TABLE IF NOT EXISTS `m_menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `menu` varchar(50) DEFAULT NULL,
  `status` int(1) DEFAULT '1',
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table pcs.m_menu: ~3 rows (approximately)
/*!40000 ALTER TABLE `m_menu` DISABLE KEYS */;
INSERT INTO `m_menu` (`id_menu`, `menu`, `status`) VALUES
	(1, 'Dashboard', 1),
	(2, 'Produksi', 1),
	(3, 'User', 1);
/*!40000 ALTER TABLE `m_menu` ENABLE KEYS */;

-- Dumping structure for table pcs.m_role
CREATE TABLE IF NOT EXISTS `m_role` (
  `id_role` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(50) DEFAULT NULL,
  `status` int(1) DEFAULT '1',
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table pcs.m_role: ~2 rows (approximately)
/*!40000 ALTER TABLE `m_role` DISABLE KEYS */;
INSERT INTO `m_role` (`id_role`, `role`, `status`) VALUES
	(1, 'Manager', 1),
	(2, 'Controlling', 1);
/*!40000 ALTER TABLE `m_role` ENABLE KEYS */;

-- Dumping structure for table pcs.m_role_menu
CREATE TABLE IF NOT EXISTS `m_role_menu` (
  `id_role_menu` int(11) NOT NULL AUTO_INCREMENT,
  `id_role` int(11) DEFAULT NULL,
  `id_menu` int(11) DEFAULT NULL,
  `status` int(1) DEFAULT '1',
  PRIMARY KEY (`id_role_menu`),
  KEY `id_role` (`id_role`),
  KEY `id_menu` (`id_menu`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table pcs.m_role_menu: ~4 rows (approximately)
/*!40000 ALTER TABLE `m_role_menu` DISABLE KEYS */;
INSERT INTO `m_role_menu` (`id_role_menu`, `id_role`, `id_menu`, `status`) VALUES
	(1, 1, 1, 1),
	(2, 2, 1, 1),
	(3, 2, 2, 1),
	(4, 2, 3, 1);
/*!40000 ALTER TABLE `m_role_menu` ENABLE KEYS */;

-- Dumping structure for table pcs.m_shift
CREATE TABLE IF NOT EXISTS `m_shift` (
  `id_shift` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `status` int(1) DEFAULT '1',
  PRIMARY KEY (`id_shift`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table pcs.m_shift: ~2 rows (approximately)
/*!40000 ALTER TABLE `m_shift` DISABLE KEYS */;
INSERT INTO `m_shift` (`id_shift`, `name`, `status`) VALUES
	(1, 'Shift 1', 1),
	(2, 'Shift 2', 1);
/*!40000 ALTER TABLE `m_shift` ENABLE KEYS */;

-- Dumping structure for table pcs.m_user
CREATE TABLE IF NOT EXISTS `m_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `id_role` int(11) NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL DEFAULT '0',
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  KEY `id_role` (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table pcs.m_user: ~0 rows (approximately)
/*!40000 ALTER TABLE `m_user` DISABLE KEYS */;
INSERT INTO `m_user` (`id_user`, `id_role`, `name`, `username`, `password`, `status`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
	(1, 1, 'Haidar', 'haidar', NULL, 1, NULL, '2019-02-28 22:17:57', NULL, '2019-02-28 22:17:58'),
	(2, 2, 'Ghozi', 'ghozi', NULL, 1, NULL, '2019-02-28 22:17:57', NULL, '2019-02-28 22:17:58');
/*!40000 ALTER TABLE `m_user` ENABLE KEYS */;

-- Dumping structure for table pcs.t_production
CREATE TABLE IF NOT EXISTS `t_production` (
  `id_production` int(11) NOT NULL AUTO_INCREMENT,
  `id_factory` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `id_shift` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `status` int(1) DEFAULT '1',
  PRIMARY KEY (`id_production`),
  UNIQUE KEY `uc_production` (`id_factory`,`date`,`id_shift`),
  KEY `id_factory` (`id_factory`),
  KEY `id_shift` (`id_shift`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table pcs.t_production: ~0 rows (approximately)
/*!40000 ALTER TABLE `t_production` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_production` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
