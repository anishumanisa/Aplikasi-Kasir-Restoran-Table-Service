-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2019 at 03:51 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lsp_final`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_user` (IN `param` INT(11))  BEGIN
        DELETE FROM tbl_user WHERE id_user = param;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `select_query_order` ()  BEGIN
       SELECT * FROM query_order;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `query_detail_order`
-- (See below for the actual view)
--
CREATE TABLE `query_detail_order` (
`id_detail_order` int(11)
,`id_order` int(11)
,`tanggal_order` datetime
,`id_masakan` int(11)
,`nama_masakan` varchar(100)
,`harga_masakan` int(11)
,`qty` int(11)
,`total_harga` int(100)
,`status_detail_order` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `query_order`
-- (See below for the actual view)
--
CREATE TABLE `query_order` (
`id_order` int(11)
,`tanggal_order` datetime
,`id_meja` int(11)
,`no_meja` int(11)
,`status_meja` int(11)
,`id_user` int(11)
,`nama_user` varchar(100)
,`nama_level` enum('admin','waiter','kasir','owner','pelanggan')
,`keterangan_order` varchar(225)
,`status_order` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `query_result`
-- (See below for the actual view)
--
CREATE TABLE `query_result` (
`id_transaksi` int(11)
,`id_order` int(11)
,`id_detail_order` int(11)
,`nama_user` varchar(100)
,`nama_level` enum('admin','waiter','kasir','owner','pelanggan')
,`no_meja` int(11)
,`nama_masakan` varchar(100)
,`harga_masakan` int(11)
,`qty` int(11)
,`total_harga` int(100)
,`total_bayar` int(11)
,`bayar` int(11)
,`kembali` int(11)
,`tanggal_transaksi` datetime
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `query_transaksi`
-- (See below for the actual view)
--
CREATE TABLE `query_transaksi` (
`id_detail_order` int(11)
,`id_order` int(11)
,`nama_user` varchar(100)
,`nama_level` enum('admin','waiter','kasir','owner','pelanggan')
,`no_meja` int(11)
,`nama_masakan` varchar(100)
,`harga_masakan` int(11)
,`qty` int(11)
,`total_harga` int(100)
,`status_detail_order` int(11)
,`status_order` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `query_user`
-- (See below for the actual view)
--
CREATE TABLE `query_user` (
`id_user` int(11)
,`nama_user` varchar(100)
,`username` varchar(100)
,`password` varchar(225)
,`id_level` int(11)
,`nama_level` enum('admin','waiter','kasir','owner','pelanggan')
);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_order`
--

CREATE TABLE `tbl_detail_order` (
  `id_detail_order` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `id_masakan` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `keterangan_detail_order` varchar(225) NOT NULL,
  `status_detail_order` int(11) NOT NULL,
  `total_harga` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_detail_order`
--

INSERT INTO `tbl_detail_order` (`id_detail_order`, `id_order`, `id_masakan`, `qty`, `keterangan_detail_order`, `status_detail_order`, `total_harga`) VALUES
(99, 87, 6, 2, '', 0, 30000),
(100, 87, 7, 2, '', 0, 40000),
(101, 88, 3, 2, '', 0, 44000),
(102, 88, 4, 2, '', 0, 36000),
(103, 89, 6, 2, '', 0, 30000),
(104, 89, 7, 2, '', 0, 40000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_level`
--

CREATE TABLE `tbl_level` (
  `id_level` int(11) NOT NULL,
  `nama_level` enum('admin','waiter','kasir','owner','pelanggan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_level`
--

INSERT INTO `tbl_level` (`id_level`, `nama_level`) VALUES
(1, 'admin'),
(2, 'waiter'),
(3, 'kasir'),
(4, 'owner'),
(6, 'pelanggan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_masakan`
--

CREATE TABLE `tbl_masakan` (
  `id_masakan` int(11) NOT NULL,
  `nama_masakan` varchar(100) NOT NULL,
  `harga_masakan` int(11) NOT NULL,
  `status_masakan` int(11) NOT NULL,
  `history` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_masakan`
--

INSERT INTO `tbl_masakan` (`id_masakan`, `nama_masakan`, `harga_masakan`, `status_masakan`, `history`) VALUES
(1, 'Ayam Geprek', 20000, 0, 0),
(2, 'Ayam Katsu', 21000, 1, 2),
(3, 'Ayam Bakar', 22000, 1, 1),
(4, 'Soto Babat', 18000, 1, 1),
(6, 'Bakso', 15000, 1, 2),
(7, 'Sate', 20000, 1, 2),
(8, 'Nasi Goreng', 17000, 1, 3),
(9, 'Nasi Timbel', 18000, 1, 2),
(10, 'Ayam mercon', 23000, 1, 0),
(11, 'Bakso Setan', 15000, 1, 0),
(12, 'Ayam Kate', 17000, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_meja`
--

CREATE TABLE `tbl_meja` (
  `id_meja` int(11) NOT NULL,
  `no_meja` int(11) NOT NULL,
  `status_meja` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_meja`
--

INSERT INTO `tbl_meja` (`id_meja`, `no_meja`, `status_meja`) VALUES
(1, 1, 0),
(2, 2, 0),
(4, 3, 0),
(6, 4, 0),
(7, 5, 0),
(8, 6, 0),
(9, 7, 0),
(10, 8, 0),
(11, 9, 1),
(12, 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id_order` int(11) NOT NULL,
  `id_meja` int(11) NOT NULL,
  `tanggal_order` datetime NOT NULL,
  `id_user` int(11) NOT NULL,
  `keterangan_order` varchar(225) NOT NULL,
  `status_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id_order`, `id_meja`, `tanggal_order`, `id_user`, `keterangan_order`, `status_order`) VALUES
(87, 1, '2019-04-06 20:34:00', 42, '', 1),
(88, 2, '2019-04-06 20:35:00', 42, '', 1),
(89, 11, '2019-04-06 20:49:00', 42, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `tanggal_transaksi` datetime NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `bayar` int(11) NOT NULL,
  `kembali` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id_transaksi`, `id_user`, `id_order`, `tanggal_transaksi`, `total_bayar`, `bayar`, `kembali`) VALUES
(47, 42, 87, '2019-04-06 20:36:01', 70000, 80000, 10000),
(48, 42, 88, '2019-04-06 20:36:35', 80000, 90000, 10000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(225) NOT NULL,
  `id_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `username`, `password`, `id_level`) VALUES
(40, 'Anis', 'Anis', '', 6),
(42, 'Anis Humanisa', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(43, 'Anis Humanisa', 'kasir', 'c7911af3adbd12a035b289556d96470a', 3),
(44, 'Anis Humanisa', 'waiter', 'f64cff138020a2060a9817272f563b3c', 2),
(45, 'Anis Humanisa', 'owner', '72122ce96bfec66e2396d2e25225d70a', 4);

-- --------------------------------------------------------

--
-- Structure for view `query_detail_order`
--
DROP TABLE IF EXISTS `query_detail_order`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `query_detail_order`  AS  select `tbl_detail_order`.`id_detail_order` AS `id_detail_order`,`tbl_detail_order`.`id_order` AS `id_order`,`tbl_order`.`tanggal_order` AS `tanggal_order`,`tbl_masakan`.`id_masakan` AS `id_masakan`,`tbl_masakan`.`nama_masakan` AS `nama_masakan`,`tbl_masakan`.`harga_masakan` AS `harga_masakan`,`tbl_detail_order`.`qty` AS `qty`,`tbl_detail_order`.`total_harga` AS `total_harga`,`tbl_detail_order`.`status_detail_order` AS `status_detail_order` from ((`tbl_masakan` join `tbl_detail_order` on((`tbl_detail_order`.`id_masakan` = `tbl_masakan`.`id_masakan`))) join `tbl_order` on((`tbl_detail_order`.`id_order` = `tbl_order`.`id_order`))) ;

-- --------------------------------------------------------

--
-- Structure for view `query_order`
--
DROP TABLE IF EXISTS `query_order`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `query_order`  AS  select `tbl_order`.`id_order` AS `id_order`,`tbl_order`.`tanggal_order` AS `tanggal_order`,`tbl_meja`.`id_meja` AS `id_meja`,`tbl_meja`.`no_meja` AS `no_meja`,`tbl_meja`.`status_meja` AS `status_meja`,`query_user`.`id_user` AS `id_user`,`query_user`.`nama_user` AS `nama_user`,`query_user`.`nama_level` AS `nama_level`,`tbl_order`.`keterangan_order` AS `keterangan_order`,`tbl_order`.`status_order` AS `status_order` from ((`tbl_meja` join `tbl_order` on((`tbl_order`.`id_meja` = `tbl_meja`.`id_meja`))) join `query_user` on((`tbl_order`.`id_user` = `query_user`.`id_user`))) ;

-- --------------------------------------------------------

--
-- Structure for view `query_result`
--
DROP TABLE IF EXISTS `query_result`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `query_result`  AS  select `tbl_transaksi`.`id_transaksi` AS `id_transaksi`,`query_transaksi`.`id_order` AS `id_order`,`query_transaksi`.`id_detail_order` AS `id_detail_order`,`query_transaksi`.`nama_user` AS `nama_user`,`query_transaksi`.`nama_level` AS `nama_level`,`query_transaksi`.`no_meja` AS `no_meja`,`query_transaksi`.`nama_masakan` AS `nama_masakan`,`query_transaksi`.`harga_masakan` AS `harga_masakan`,`query_transaksi`.`qty` AS `qty`,`query_transaksi`.`total_harga` AS `total_harga`,`tbl_transaksi`.`total_bayar` AS `total_bayar`,`tbl_transaksi`.`bayar` AS `bayar`,`tbl_transaksi`.`kembali` AS `kembali`,`tbl_transaksi`.`tanggal_transaksi` AS `tanggal_transaksi` from (`query_transaksi` join `tbl_transaksi` on((`tbl_transaksi`.`id_order` = `query_transaksi`.`id_order`))) ;

-- --------------------------------------------------------

--
-- Structure for view `query_transaksi`
--
DROP TABLE IF EXISTS `query_transaksi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `query_transaksi`  AS  select `tbl_detail_order`.`id_detail_order` AS `id_detail_order`,`tbl_detail_order`.`id_order` AS `id_order`,`query_order`.`nama_user` AS `nama_user`,`query_order`.`nama_level` AS `nama_level`,`query_order`.`no_meja` AS `no_meja`,`tbl_masakan`.`nama_masakan` AS `nama_masakan`,`tbl_masakan`.`harga_masakan` AS `harga_masakan`,`tbl_detail_order`.`qty` AS `qty`,`tbl_detail_order`.`total_harga` AS `total_harga`,`tbl_detail_order`.`status_detail_order` AS `status_detail_order`,`query_order`.`status_order` AS `status_order` from ((`tbl_masakan` join `tbl_detail_order` on((`tbl_detail_order`.`id_masakan` = `tbl_masakan`.`id_masakan`))) join `query_order` on((`tbl_detail_order`.`id_order` = `query_order`.`id_order`))) ;

-- --------------------------------------------------------

--
-- Structure for view `query_user`
--
DROP TABLE IF EXISTS `query_user`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `query_user`  AS  select `tbl_user`.`id_user` AS `id_user`,`tbl_user`.`nama_user` AS `nama_user`,`tbl_user`.`username` AS `username`,`tbl_user`.`password` AS `password`,`tbl_user`.`id_level` AS `id_level`,`tbl_level`.`nama_level` AS `nama_level` from (`tbl_level` join `tbl_user` on((`tbl_user`.`id_level` = `tbl_level`.`id_level`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_detail_order`
--
ALTER TABLE `tbl_detail_order`
  ADD PRIMARY KEY (`id_detail_order`);

--
-- Indexes for table `tbl_level`
--
ALTER TABLE `tbl_level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `tbl_masakan`
--
ALTER TABLE `tbl_masakan`
  ADD PRIMARY KEY (`id_masakan`);

--
-- Indexes for table `tbl_meja`
--
ALTER TABLE `tbl_meja`
  ADD PRIMARY KEY (`id_meja`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_detail_order`
--
ALTER TABLE `tbl_detail_order`
  MODIFY `id_detail_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
--
-- AUTO_INCREMENT for table `tbl_level`
--
ALTER TABLE `tbl_level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_masakan`
--
ALTER TABLE `tbl_masakan`
  MODIFY `id_masakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_meja`
--
ALTER TABLE `tbl_meja`
  MODIFY `id_meja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
