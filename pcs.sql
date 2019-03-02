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

-- Dumping structure for table pcs.m_bulan
CREATE TABLE IF NOT EXISTS `m_bulan` (
  `id_bulan` int(11) NOT NULL AUTO_INCREMENT,
  `bulan` int(11) DEFAULT NULL,
  `nama_bulan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_bulan`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Dumping data for table pcs.m_bulan: ~12 rows (approximately)
/*!40000 ALTER TABLE `m_bulan` DISABLE KEYS */;
INSERT INTO `m_bulan` (`id_bulan`, `bulan`, `nama_bulan`) VALUES
	(1, 1, 'Jan'),
	(2, 2, 'Feb'),
	(3, 3, 'Mar'),
	(4, 4, 'Apr'),
	(5, 5, 'Mei'),
	(6, 6, 'Jun'),
	(7, 7, 'Jul'),
	(8, 8, 'Agu'),
	(9, 9, 'Sep'),
	(10, 10, 'Okt'),
	(11, 11, 'Nov'),
	(12, 12, 'Des');
/*!40000 ALTER TABLE `m_bulan` ENABLE KEYS */;

-- Dumping structure for table pcs.m_factory
CREATE TABLE IF NOT EXISTS `m_factory` (
  `id_factory` int(11) NOT NULL AUTO_INCREMENT,
  `kd_factory` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `status` int(1) DEFAULT '1',
  PRIMARY KEY (`id_factory`),
  UNIQUE KEY `kd_factory` (`kd_factory`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table pcs.m_factory: ~3 rows (approximately)
/*!40000 ALTER TABLE `m_factory` DISABLE KEYS */;
INSERT INTO `m_factory` (`id_factory`, `kd_factory`, `name`, `address`, `status`) VALUES
	(1, 'PB001', 'Pabrik Cikarang', 'Jl. raya cikarang', 1),
	(2, 'PB002', 'Pabrik Bekasi', 'Jl. raya bekasi', 1),
	(3, 'PB003', 'Pabrik Tebet', 'Jl. raya tebet', 1);
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
	(1, 'Shift Pagi', 1),
	(2, 'Shift Sore', 1);
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

-- Dumping data for table pcs.m_user: ~2 rows (approximately)
/*!40000 ALTER TABLE `m_user` DISABLE KEYS */;
INSERT INTO `m_user` (`id_user`, `id_role`, `name`, `username`, `password`, `status`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
	(1, 1, 'Haidar', 'haidar', 'rCDFgFNWKWmxRtiUYBPNrq3csC8oHpBq8siVtCoVAwDNGRfxcgcwgS4RXGs4iksZNLb+GrRl2NLVlnXzbaLVWA==', 1, NULL, '2019-02-28 22:17:57', NULL, '2019-02-28 22:17:58'),
	(2, 2, 'Ghozi', 'ghozi', 'rCDFgFNWKWmxRtiUYBPNrq3csC8oHpBq8siVtCoVAwDNGRfxcgcwgS4RXGs4iksZNLb+GrRl2NLVlnXzbaLVWA==', 1, NULL, '2019-02-28 22:17:57', NULL, '2019-02-28 22:17:58');
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table pcs.t_production: ~4 rows (approximately)
/*!40000 ALTER TABLE `t_production` DISABLE KEYS */;
INSERT INTO `t_production` (`id_production`, `id_factory`, `date`, `id_shift`, `total`, `created_date`, `created_by`, `modified_date`, `modified_by`, `status`) VALUES
	(2, 1, '2019-03-02', 1, 20, '2019-03-02 09:26:11', NULL, '2019-03-02 14:00:01', NULL, 1),
	(3, 1, '2019-03-03', 1, 30, '2019-04-02 09:26:11', NULL, '2019-03-02 14:00:03', NULL, 1),
	(4, 1, '2019-03-04', 1, 40, '2019-05-02 09:26:11', NULL, '2019-03-02 14:00:04', NULL, 1),
	(5, 1, '2019-03-05', 1, 10, '2018-01-02 09:26:11', NULL, '2019-03-02 14:00:05', NULL, 1);
/*!40000 ALTER TABLE `t_production` ENABLE KEYS */;

-- Dumping structure for view pcs.v_production
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `v_production` (
	`id_production` INT(11) NOT NULL,
	`id_factory` INT(11) NULL,
	`date` DATE NULL,
	`id_shift` INT(11) NULL,
	`total` INT(11) NULL,
	`created_date` DATETIME NULL,
	`created_by` INT(11) NULL,
	`modified_date` DATETIME NULL,
	`modified_by` INT(11) NULL,
	`status` INT(1) NULL,
	`shift_name` VARCHAR(50) NULL COLLATE 'latin1_swedish_ci',
	`factory_name` VARCHAR(50) NULL COLLATE 'latin1_swedish_ci'
) ENGINE=MyISAM;

-- Dumping structure for view pcs.v_production_all_m
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `v_production_all_m` (
	`jml_produksi` DECIMAL(32,0) NULL,
	`month` INT(2) NULL,
	`month_name` VARCHAR(9) NULL COLLATE 'utf8mb4_general_ci'
) ENGINE=MyISAM;

-- Dumping structure for view pcs.v_production_all_m_ys
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `v_production_all_m_ys` (
	`jml_produksi` DECIMAL(32,0) NULL,
	`month` INT(2) NULL,
	`month_name` VARCHAR(9) NULL COLLATE 'utf8mb4_general_ci'
) ENGINE=MyISAM;

-- Dumping structure for view pcs.v_production_list_year
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `v_production_list_year` (
	`id_bulan` INT(11) NOT NULL,
	`bulan` INT(11) NULL,
	`nama_bulan` VARCHAR(50) NULL COLLATE 'latin1_swedish_ci',
	`jml_produksi_all` DECIMAL(32,0) NULL
) ENGINE=MyISAM;

-- Dumping structure for view pcs.v_production_list_year_ys
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `v_production_list_year_ys` (
	`id_bulan` INT(11) NOT NULL,
	`bulan` INT(11) NULL,
	`nama_bulan` VARCHAR(50) NULL COLLATE 'latin1_swedish_ci',
	`jml_produksi_all` DECIMAL(32,0) NULL
) ENGINE=MyISAM;

-- Dumping structure for view pcs.v_production
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `v_production`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_production` AS SELECT `tp`.*, `sf`.`name` as `shift_name`, `fc`.`name` as `factory_name`
FROM `t_production` as `tp`
JOIN `m_shift` as `sf` ON `sf`.`id_shift`=`tp`.`id_shift` and `sf`.`status`=1
JOIN `m_factory` as `fc` ON `fc`.`id_factory`=`tp`.`id_factory` and `fc`.`status`=1
WHERE `tp`.`status` = 1 ;

-- Dumping structure for view pcs.v_production_all_m
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `v_production_all_m`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_production_all_m` AS select sum(`tp`.`total`) AS `jml_produksi`,month(`tp`.`created_date`) AS `month`,monthname(str_to_date(month(`tp`.`created_date`),'%m')) AS `month_name` from `t_production` `tp` where (year(`tp`.`created_date`) = year(curdate())) group by month(`tp`.`created_date`) ;

-- Dumping structure for view pcs.v_production_all_m_ys
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `v_production_all_m_ys`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_production_all_m_ys` AS select sum(`tp`.`total`) AS `jml_produksi`,month(`tp`.`created_date`) AS `month`,monthname(str_to_date(month(`tp`.`created_date`),'%m')) AS `month_name` from `t_production` `tp` where (year(`tp`.`created_date`) = (year(curdate()) - 1)) group by month(`tp`.`created_date`) ;

-- Dumping structure for view pcs.v_production_list_year
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `v_production_list_year`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_production_list_year` AS select `mb`.`id_bulan` AS `id_bulan`,`mb`.`bulan` AS `bulan`,`mb`.`nama_bulan` AS `nama_bulan`,if(isnull(`v_prod_all`.`jml_produksi`),0,`v_prod_all`.`jml_produksi`) AS `jml_produksi_all` from (`m_bulan` `mb` left join `v_production_all_m` `v_prod_all` on((`mb`.`bulan` = `v_prod_all`.`month`))) ;

-- Dumping structure for view pcs.v_production_list_year_ys
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `v_production_list_year_ys`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_production_list_year_ys` AS select `mb`.`id_bulan` AS `id_bulan`,`mb`.`bulan` AS `bulan`,`mb`.`nama_bulan` AS `nama_bulan`,if(isnull(`v_prod_all_ys`.`jml_produksi`),0,`v_prod_all_ys`.`jml_produksi`) AS `jml_produksi_all` from (`m_bulan` `mb` left join `v_production_all_m_ys` `v_prod_all_ys` on((`mb`.`bulan` = `v_prod_all_ys`.`month`))) ;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
