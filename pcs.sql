-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2019 at 04:33 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pcs`
--

-- --------------------------------------------------------

--
-- Table structure for table `m_bulan`
--

CREATE TABLE `m_bulan` (
  `id_bulan` int(11) NOT NULL,
  `bulan` int(11) DEFAULT NULL,
  `nama_bulan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_bulan`
--

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

-- --------------------------------------------------------

--
-- Table structure for table `m_factory`
--

CREATE TABLE `m_factory` (
  `id_factory` int(11) NOT NULL,
  `kd_factory` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `status` int(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_factory`
--

INSERT INTO `m_factory` (`id_factory`, `kd_factory`, `name`, `address`, `status`) VALUES
(1, 'PB001', 'Pabrik Cikarang', 'Jl. raya cikarang', 1),
(3, 'PB002', 'Pabrik Bekasi', 'Jl. raya bekasi', 1),
(5, 'PB003', 'Pabrik Tebet', 'Jl. raya tebet', 1);

-- --------------------------------------------------------

--
-- Table structure for table `m_menu`
--

CREATE TABLE `m_menu` (
  `id_menu` int(11) NOT NULL,
  `menu` varchar(50) DEFAULT NULL,
  `status` int(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_menu`
--

INSERT INTO `m_menu` (`id_menu`, `menu`, `status`) VALUES
(1, 'Dashboard', 1),
(2, 'Produksi', 1),
(3, 'User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `m_role`
--

CREATE TABLE `m_role` (
  `id_role` int(11) NOT NULL,
  `role` varchar(50) DEFAULT NULL,
  `status` int(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_role`
--

INSERT INTO `m_role` (`id_role`, `role`, `status`) VALUES
(1, 'Manager', 1),
(2, 'Controlling', 1);

-- --------------------------------------------------------

--
-- Table structure for table `m_role_menu`
--

CREATE TABLE `m_role_menu` (
  `id_role_menu` int(11) NOT NULL,
  `id_role` int(11) DEFAULT NULL,
  `id_menu` int(11) DEFAULT NULL,
  `status` int(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_role_menu`
--

INSERT INTO `m_role_menu` (`id_role_menu`, `id_role`, `id_menu`, `status`) VALUES
(1, 1, 1, 1),
(2, 2, 1, 1),
(3, 2, 2, 1),
(4, 2, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `m_shift`
--

CREATE TABLE `m_shift` (
  `id_shift` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `status` int(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_shift`
--

INSERT INTO `m_shift` (`id_shift`, `name`, `status`) VALUES
(1, 'Shift Pagi', 1),
(2, 'Shift Sore', 1);

-- --------------------------------------------------------

--
-- Table structure for table `m_user`
--

CREATE TABLE `m_user` (
  `id_user` int(11) NOT NULL,
  `id_role` int(11) NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL DEFAULT '0',
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_user`
--

INSERT INTO `m_user` (`id_user`, `id_role`, `name`, `username`, `password`, `status`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(1, 1, 'Haidar', 'haidar', 'rCDFgFNWKWmxRtiUYBPNrq3csC8oHpBq8siVtCoVAwDNGRfxcgcwgS4RXGs4iksZNLb+GrRl2NLVlnXzbaLVWA==', 1, NULL, '2019-02-28 22:17:57', NULL, '2019-02-28 22:17:58'),
(2, 2, 'Ghozi', 'ghozi', 'rCDFgFNWKWmxRtiUYBPNrq3csC8oHpBq8siVtCoVAwDNGRfxcgcwgS4RXGs4iksZNLb+GrRl2NLVlnXzbaLVWA==', 1, NULL, '2019-02-28 22:17:57', NULL, '2019-02-28 22:17:58');

-- --------------------------------------------------------

--
-- Table structure for table `t_production`
--

CREATE TABLE `t_production` (
  `id_production` int(11) NOT NULL,
  `id_factory` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `id_shift` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `status` int(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_production`
--

INSERT INTO `t_production` (`id_production`, `id_factory`, `date`, `id_shift`, `total`, `created_date`, `created_by`, `modified_date`, `modified_by`, `status`) VALUES
(2, NULL, NULL, 1, 20, '2019-03-02 09:26:11', NULL, NULL, NULL, 1),
(3, NULL, NULL, 1, 30, '2019-04-02 09:26:11', NULL, NULL, NULL, 1),
(4, NULL, NULL, 1, 40, '2019-05-02 09:26:11', NULL, NULL, NULL, 1),
(5, NULL, NULL, 1, 10, '2018-01-02 09:26:11', NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_production_all_m`
-- (See below for the actual view)
--
CREATE TABLE `v_production_all_m` (
`jml_produksi` decimal(32,0)
,`month` int(2)
,`month_name` varchar(9)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_production_all_m_ys`
-- (See below for the actual view)
--
CREATE TABLE `v_production_all_m_ys` (
`jml_produksi` decimal(32,0)
,`month` int(2)
,`month_name` varchar(9)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_production_list_year`
-- (See below for the actual view)
--
CREATE TABLE `v_production_list_year` (
`id_bulan` int(11)
,`bulan` int(11)
,`nama_bulan` varchar(50)
,`jml_produksi_all` decimal(32,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_production_list_year_ys`
-- (See below for the actual view)
--
CREATE TABLE `v_production_list_year_ys` (
`id_bulan` int(11)
,`bulan` int(11)
,`nama_bulan` varchar(50)
,`jml_produksi_all` decimal(32,0)
);

-- --------------------------------------------------------

--
-- Structure for view `v_production_all_m`
--
DROP TABLE IF EXISTS `v_production_all_m`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_production_all_m`  AS  select sum(`tp`.`total`) AS `jml_produksi`,month(`tp`.`created_date`) AS `month`,monthname(str_to_date(month(`tp`.`created_date`),'%m')) AS `month_name` from `t_production` `tp` where (year(`tp`.`created_date`) = year(curdate())) group by month(`tp`.`created_date`) ;

-- --------------------------------------------------------

--
-- Structure for view `v_production_all_m_ys`
--
DROP TABLE IF EXISTS `v_production_all_m_ys`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_production_all_m_ys`  AS  select sum(`tp`.`total`) AS `jml_produksi`,month(`tp`.`created_date`) AS `month`,monthname(str_to_date(month(`tp`.`created_date`),'%m')) AS `month_name` from `t_production` `tp` where (year(`tp`.`created_date`) = (year(curdate()) - 1)) group by month(`tp`.`created_date`) ;

-- --------------------------------------------------------

--
-- Structure for view `v_production_list_year`
--
DROP TABLE IF EXISTS `v_production_list_year`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_production_list_year`  AS  select `mb`.`id_bulan` AS `id_bulan`,`mb`.`bulan` AS `bulan`,`mb`.`nama_bulan` AS `nama_bulan`,if(isnull(`v_prod_all`.`jml_produksi`),0,`v_prod_all`.`jml_produksi`) AS `jml_produksi_all` from (`m_bulan` `mb` left join `v_production_all_m` `v_prod_all` on((`mb`.`bulan` = `v_prod_all`.`month`))) ;

-- --------------------------------------------------------

--
-- Structure for view `v_production_list_year_ys`
--
DROP TABLE IF EXISTS `v_production_list_year_ys`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_production_list_year_ys`  AS  select `mb`.`id_bulan` AS `id_bulan`,`mb`.`bulan` AS `bulan`,`mb`.`nama_bulan` AS `nama_bulan`,if(isnull(`v_prod_all_ys`.`jml_produksi`),0,`v_prod_all_ys`.`jml_produksi`) AS `jml_produksi_all` from (`m_bulan` `mb` left join `v_production_all_m_ys` `v_prod_all_ys` on((`mb`.`bulan` = `v_prod_all_ys`.`month`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `m_bulan`
--
ALTER TABLE `m_bulan`
  ADD PRIMARY KEY (`id_bulan`);

--
-- Indexes for table `m_factory`
--
ALTER TABLE `m_factory`
  ADD PRIMARY KEY (`id_factory`),
  ADD UNIQUE KEY `kd_factory` (`kd_factory`);

--
-- Indexes for table `m_menu`
--
ALTER TABLE `m_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `m_role`
--
ALTER TABLE `m_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `m_role_menu`
--
ALTER TABLE `m_role_menu`
  ADD PRIMARY KEY (`id_role_menu`),
  ADD KEY `id_role` (`id_role`),
  ADD KEY `id_menu` (`id_menu`);

--
-- Indexes for table `m_shift`
--
ALTER TABLE `m_shift`
  ADD PRIMARY KEY (`id_shift`);

--
-- Indexes for table `m_user`
--
ALTER TABLE `m_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_role` (`id_role`);

--
-- Indexes for table `t_production`
--
ALTER TABLE `t_production`
  ADD PRIMARY KEY (`id_production`),
  ADD UNIQUE KEY `uc_production` (`id_factory`,`date`,`id_shift`),
  ADD KEY `id_factory` (`id_factory`),
  ADD KEY `id_shift` (`id_shift`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m_bulan`
--
ALTER TABLE `m_bulan`
  MODIFY `id_bulan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `m_factory`
--
ALTER TABLE `m_factory`
  MODIFY `id_factory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `m_menu`
--
ALTER TABLE `m_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `m_role`
--
ALTER TABLE `m_role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `m_role_menu`
--
ALTER TABLE `m_role_menu`
  MODIFY `id_role_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `m_shift`
--
ALTER TABLE `m_shift`
  MODIFY `id_shift` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `m_user`
--
ALTER TABLE `m_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_production`
--
ALTER TABLE `t_production`
  MODIFY `id_production` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
