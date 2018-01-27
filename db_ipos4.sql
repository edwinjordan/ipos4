-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2018 at 03:19 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_ipos4`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `admin_nama` varchar(50) DEFAULT NULL,
  `admin_username` varchar(100) DEFAULT NULL,
  `admin_password` varchar(32) DEFAULT NULL,
  `admin_view_password` varchar(32) DEFAULT NULL,
  `admin_level` char(2) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `admin_nama`, `admin_username`, `admin_password`, `admin_view_password`, `admin_level`) VALUES
(1, 'admin', 'admin', 'e00cf25ad42683b3df678c61f42c6bda', 'admin1', '1'),
(2, 'Imtihan71', 'Imtihan71', 'eda3b644a8631ee0f33fc01ec2cb5993', 'widia72', '1');

-- --------------------------------------------------------

--
-- Table structure for table `form_kontak`
--

CREATE TABLE IF NOT EXISTS `form_kontak` (
  `id_form` int(11) NOT NULL AUTO_INCREMENT,
  `nama_form` varchar(100) NOT NULL,
  `email_form` varchar(100) NOT NULL,
  `phone_form` varchar(30) NOT NULL,
  `pesan_form` text NOT NULL,
  PRIMARY KEY (`id_form`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `form_kontak`
--

INSERT INTO `form_kontak` (`id_form`, `nama_form`, `email_form`, `phone_form`, `pesan_form`) VALUES
(1, 'a', 'as@a.com', 'skj', 'kjkas'),
(2, '0', '0', '0', '0'),
(3, 'e', 'edwinlaksono12@gmail.com', '456', 'rtert'),
(4, 'a', 'edwinlaksono12@gmail.com', '345', 'awdw'),
(5, 'ew', 'edwinlaksono12@gmail.com', '45', 'dsfsd');

-- --------------------------------------------------------

--
-- Table structure for table `mainmenu`
--

CREATE TABLE IF NOT EXISTS `mainmenu` (
  `seq` int(11) NOT NULL AUTO_INCREMENT,
  `idmenu` int(11) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `active_menu` varchar(50) NOT NULL,
  `icon_class` varchar(50) NOT NULL,
  `link_menu` varchar(50) NOT NULL,
  `menu_akses` varchar(12) NOT NULL,
  `entry_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `entry_user` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`seq`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `mainmenu`
--

INSERT INTO `mainmenu` (`seq`, `idmenu`, `nama_menu`, `active_menu`, `icon_class`, `link_menu`, `menu_akses`, `entry_date`, `entry_user`) VALUES
(1, 1, 'Dashboard', '', 'menu-icon fa fa-tachometer', 'Dashboard', '', '2017-10-27 13:35:22', NULL),
(8, 8, 'Administrator', '', 'menu-icon fa fa-user', '#', '', '2017-10-13 16:57:17', NULL),
(2, 2, 'Master Data', '', 'menu-icon fa fa-book', 'Master_Data', '', '2018-01-20 02:37:25', NULL),
(3, 3, 'Pembelian', '', 'menu-icon fa fa-tags ', 'Pembelian', '', '2018-01-20 03:18:02', NULL),
(4, 4, 'Penjualan', '', 'menu-icon fa fa-tags ', 'Penjualan', '', '2018-01-20 03:18:14', NULL),
(5, 5, 'Persediaan', '', 'menu-icon fa fa-archive', 'Persediaan', '', '2018-01-20 02:53:55', NULL),
(6, 6, 'Proses Data', '', 'menu-icon fa fa-pie-chart', 'Proses_Data', '', '2018-01-20 02:54:13', NULL),
(7, 7, 'Laporan', '', 'menu-icon fa fa-file-text-o', 'Laporan', '', '2018-01-20 02:54:41', NULL),
(9, 9, 'Pengaturan', '', 'menu-icon fa fa-wrench', 'Pengaturan', '', '2018-01-20 02:55:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `submenu`
--

CREATE TABLE IF NOT EXISTS `submenu` (
  `id_sub` int(11) NOT NULL AUTO_INCREMENT,
  `nama_sub` varchar(50) NOT NULL,
  `mainmenu_idmenu` int(11) NOT NULL,
  `active_sub` varchar(20) NOT NULL,
  `icon_class` varchar(100) NOT NULL,
  `link_sub` varchar(50) NOT NULL,
  `sub_akses` varchar(12) NOT NULL,
  `entry_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `entry_user` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_sub`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=82 ;

--
-- Dumping data for table `submenu`
--

INSERT INTO `submenu` (`id_sub`, `nama_sub`, `mainmenu_idmenu`, `active_sub`, `icon_class`, `link_sub`, `sub_akses`, `entry_date`, `entry_user`) VALUES
(1, 'Entry User', 8, '', '', 'User', '', '2017-10-17 16:28:25', NULL),
(2, 'Daftar Item', 2, '', '', 'Daftar_Item', '', '2018-01-20 03:28:12', NULL),
(3, 'Item Baru', 2, '', '', 'Item_Baru', '', '2018-01-20 03:33:04', NULL),
(4, 'Kartu Stok', 2, '', '', 'Kartu_Stok', '', '2018-01-20 04:41:44', NULL),
(5, 'Datasheet', 2, '', '', 'Datasheet', '', '2018-01-20 04:41:57', NULL),
(6, 'Daftar Supplier', 2, '', '', 'Daftar_Supplier', '', '2018-01-20 04:42:10', NULL),
(7, 'Daftar Pelanggan', 2, '', '', 'Daftar_Pelanggan', '', '2018-01-20 04:42:24', NULL),
(8, 'Grup Pelanggan', 2, '', '', 'Grup_Pelanggan', '', '2018-01-20 04:42:37', NULL),
(9, 'Satuan', 2, '', '', 'Satuan', '', '2018-01-20 04:42:47', NULL),
(10, 'Jenis', 2, '', '', 'Jenis', '', '2018-01-20 04:42:53', NULL),
(11, 'Bank', 2, '', '', 'Bank', '', '2018-01-20 04:42:57', NULL),
(12, 'Dept/Gudang', 2, '', '', 'Dept_Gudang', '', '2018-01-20 04:43:06', NULL),
(13, 'Merek', 2, '', '', 'Merek', '', '2018-01-20 04:43:12', NULL),
(14, 'Pesanan Pembelian', 3, '', '', 'Pesanan_Pembelian', '', '2018-01-20 04:43:21', NULL),
(15, 'Daftar Pembelian', 3, '', '', 'Daftar_Pembelian', '', '2018-01-20 04:43:29', NULL),
(16, 'History Harga Beli', 3, '', '', 'History_Harga_Beli', '', '2018-01-20 04:43:43', NULL),
(17, 'Daftar Pembayaran Hutang Pembelian', 3, '', '', 'Daftar_Pembayaran_Pembelian', '', '2018-01-23 07:52:32', NULL),
(18, 'Retur Pembelian', 3, '', '', 'Retur_Pembelian', '', '2018-01-20 04:44:17', NULL),
(19, 'Pesanan Penjualan', 4, '', '', 'Pesanan_Penjualan', '', '2018-01-20 04:44:27', NULL),
(20, 'Daftar Penjualan', 4, '', '', 'Daftar_Penjualan', '', '2018-01-20 04:44:32', NULL),
(21, 'Penjualan Kasir', 4, '', '', 'Penjualan_Kasir', '', '2018-01-20 04:44:42', NULL),
(22, 'History Harga Jual', 4, '', '', 'History_Harga_Jual', '', '2018-01-20 04:45:01', NULL),
(23, 'Daftar Pembayaran Piutang Penjualan', 4, '', '', 'Daftar_Pembayaran_Penjualan', '', '2018-01-23 07:58:22', NULL),
(24, 'Retur Penjualan', 4, '', '', 'Retur_Penjualan', '', '2018-01-20 04:45:34', NULL),
(25, 'Point Penjualan', 4, '', '', 'Point_Penjualan', '', '2018-01-20 04:45:48', NULL),
(26, 'Daftar Item Masuk', 5, '', '', 'Daftar_Item_Masuk', '', '2018-01-20 04:46:00', NULL),
(27, 'Daftar Item Keluar', 5, '', '', 'Daftar_Item_Keluar', '', '2018-01-20 04:46:11', NULL),
(28, 'Stok Opname', 5, '', '', 'Stok_Opname', '', '2018-01-20 04:46:26', NULL),
(29, 'Saldo Awal Item', 5, '', '', 'Saldo_Awal_Item', '', '2018-01-20 04:46:37', NULL),
(30, 'Transfer Item', 5, '', '', 'Transfer_Item', '', '2018-01-20 04:47:05', NULL),
(31, 'Stok Minimum', 5, '', '', 'Stok_Minimum', '', '2018-01-20 04:47:21', NULL),
(32, 'Mutasi Item', 5, '', '', 'Mutasi_Item', '', '2018-01-20 04:47:29', NULL),
(33, 'Proses Bulanan', 6, '', '', 'Proses_Bulanan', '', '2018-01-20 04:47:38', NULL),
(34, 'Proses Tahunan', 6, '', '', 'Proses_Tahunan', '', '2018-01-20 04:47:45', NULL),
(35, 'Kelompok Akses User', 9, '', '', 'Kelompok_Akses_User', '', '2018-01-20 04:47:57', NULL),
(36, 'Daftar User', 9, '', '', 'Daftar_User', '', '2018-01-20 04:48:09', NULL),
(37, 'Data Perusahaan', 9, '', '', 'Data_Perusahaan', '', '2018-01-20 04:48:32', NULL),
(38, 'Pengaturan Umum', 9, '', '', 'Pengaturan_Umum', '', '2018-01-20 04:48:41', NULL),
(39, 'Periode Transaksi', 9, '', '', 'Periode_Transaksi', '', '2018-01-20 04:48:51', NULL),
(40, 'Setting No. Transaksi', 9, '', '', 'Setting_No_Transaksi', '', '2018-01-20 04:49:16', NULL),
(41, 'Setting No. Supplier, Pelanggan, Sales', 9, '', '', 'Setting_No_SupplierPelangganSales', '', '2018-01-20 04:49:39', NULL),
(42, 'Mini Printer', 9, '', '', 'Mini_Printer', '', '2018-01-20 04:49:56', NULL),
(43, 'Customer Display', 9, '', '', 'Customer_Display', '', '2018-01-20 04:50:14', NULL),
(44, 'Informasi', 9, '', '', 'Informasi', '', '2018-01-20 04:50:32', NULL),
(45, 'Import Data Item dari Excel', 9, '', '', 'Import_Data_Item_dari_Excel', '', '2018-01-20 04:50:47', NULL),
(46, 'Import Data Supplier dari Excel', 9, '', '', 'Import_Data_Supplier_dari_Excel', '', '2018-01-20 04:51:10', NULL),
(47, 'Import Data Pelanggan dari Excel', 9, '', '', 'Import_Data_Pelanggan_dari_Excel', '', '2018-01-20 04:51:28', NULL),
(48, 'Backup Database', 9, '', '', 'Backup_Database', '', '2018-01-20 04:51:40', NULL),
(49, 'Restore Database', 9, '', '', 'Restore_Database', '', '2018-01-20 04:51:54', NULL),
(50, 'Kosongkan Data', 9, '', '', 'Kosongkan_Data', '', '2018-01-20 04:52:04', NULL),
(51, 'Pengaturan Database', 9, '', '', 'Pengaturan_Database', '', '2018-01-20 04:52:17', NULL),
(52, 'Laporan Daftar Item', 7, '', '', 'Laporan_Daftar_Item', '', '2018-01-20 04:52:32', NULL),
(53, 'Laporan Daftar Item Multi Harga', 7, '', '', 'Laporan_Daftar_Item_Multi_Harga', '', '2018-01-20 04:52:51', NULL),
(54, 'Laporan Daftar Supplier', 7, '', '', 'Laporan_Daftar_Supplier', '', '2018-01-20 04:53:09', NULL),
(55, 'Laporan Daftar Pelanggan', 7, '', '', 'Laporan_Daftar_Pelanggan', '', '2018-01-20 04:53:23', NULL),
(56, 'Laporan Pesanan Pembelian', 7, '', '', 'Laporan_Pesanan_Pembelian', '', '2018-01-20 04:53:39', NULL),
(57, 'Laporan Pembelian', 7, '', '', 'Laporan_Pembelian', '', '2018-01-20 04:53:50', NULL),
(58, 'Laporan Retur Pembelian', 7, '', '', 'Laporan_Retur_Pembelian', '', '2018-01-20 04:54:01', NULL),
(59, 'Laporan Pembelian per Item', 7, '', '', 'Laporan_Pembelian_per_Item', '', '2018-01-20 04:54:13', NULL),
(60, 'Laporan Pesanan Penjualan', 7, '', '', 'Laporan_Pesanan_Penjualan', '', '2018-01-20 04:54:31', NULL),
(61, 'Laporan Penjualan', 7, '', '', 'Laporan_Penjualan', '', '2018-01-20 04:54:45', NULL),
(62, 'Laporan Retur Penjualan', 7, '', '', 'Laporan_Retur_Penjualan', '', '2018-01-20 04:54:54', NULL),
(63, 'Laporan Penjualan per Item', 7, '', '', 'Laporan_Penjualan_per_Item', '', '2018-01-20 04:55:17', NULL),
(64, 'Laporan Retur Jual per Item', 7, '', '', 'Laporan_Retur_Jual_per_Item', '', '2018-01-20 04:55:28', NULL),
(65, 'Laporan Penjualan per Supplier', 7, '', '', 'Laporan_Penjualan_per_Supplier', '', '2018-01-20 04:55:48', NULL),
(66, 'Laporan Penjualan per Wilayah Pelanggan', 7, '', '', 'Laporan_Penjualan_per_Wilayah_Pelanggan', '', '2018-01-20 04:56:26', NULL),
(67, 'Laporan Penjualan per Wilayah per Jenis', 7, '', '', 'Laporan_Penjualan_per_Wilayah_per_Jenis', '', '2018-01-21 03:36:13', NULL),
(68, 'Laporan Komisi Sales', 7, '', '', 'Laporan_Komisi_Sales', '', '2018-01-20 04:56:55', NULL),
(69, 'Laporan Pembayaran dengan Kartu Bayar', 7, '', '', 'Laporan_Pembayaran_dengan_Kartu_Bayar', '', '2018-01-20 04:57:11', NULL),
(70, 'Laporan Grafik Penjualan Item Terbaik', 7, '', '', 'Laporan_Grafik_Penjualan_Item_Terbaik', '', '2018-01-20 04:57:27', NULL),
(71, 'Laporan Grafik Penjualan Harian', 7, '', '', 'Laporan_Grafik_Penjualan_Harian', '', '2018-01-20 04:57:39', NULL),
(72, 'Laporan Grafik Penjualan Bulanan', 7, '', '', 'Laporan_Grafik_Penjualan_Bulanan', '', '2018-01-20 04:57:53', NULL),
(73, 'Laporan Grafik Kedatangan Pelanggan', 7, '', '', 'Laporan_Grafik_Kedatangan_Pelanggan', '', '2018-01-20 04:58:33', NULL),
(74, 'Laporan Csv Faktur Pajak Keluaran', 7, '', '', 'Laporan_Csv_Faktur_Pajak_Keluaran', '', '2018-01-20 04:58:51', NULL),
(75, 'Laporan Item Masuk', 7, '', '', 'Laporan_Item_Masuk', '', '2018-01-20 04:59:06', NULL),
(76, 'Laporan Item Keluar', 7, '', '', 'Laporan_Item_Keluar', '', '2018-01-20 04:59:20', NULL),
(77, 'Laporan Item Opname', 7, '', '', 'Laporan_Item_Opname', '', '2018-01-20 04:59:29', NULL),
(78, 'Laporan Item Transfer', 7, '', '', 'Laporan_Item_Transfer', '', '2018-01-20 04:59:44', NULL),
(79, 'Laporan Item Serial', 7, '', '', 'Laporan_Item_Serial', '', '2018-01-20 05:00:03', NULL),
(80, 'Laporan Serial History', 7, '', '', 'Laporan_Serial_History', '', '2018-01-20 05:00:13', NULL),
(81, 'Laporan Mutasi Item', 7, '', '', 'Laporan_Mutasi_Item', '', '2018-01-20 05:00:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tab_akses_mainmenu`
--

CREATE TABLE IF NOT EXISTS `tab_akses_mainmenu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_menu` int(11) NOT NULL,
  `id_level` int(11) NOT NULL,
  `c` int(11) DEFAULT '0',
  `r` int(11) DEFAULT '0',
  `u` int(11) DEFAULT '0',
  `d` int(11) DEFAULT '0',
  `entry_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `entry_user` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `tab_akses_mainmenu`
--

INSERT INTO `tab_akses_mainmenu` (`id`, `id_menu`, `id_level`, `c`, `r`, `u`, `d`, `entry_date`, `entry_user`) VALUES
(1, 1, 1, NULL, 1, NULL, NULL, '2017-10-27 13:41:23', 'direktur'),
(2, 8, 1, 0, 0, 0, 0, '2017-10-27 13:41:26', ''),
(3, 2, 1, 0, 1, 0, 0, '2017-10-13 18:29:46', ''),
(4, 3, 1, 0, 1, 0, 0, '2017-10-14 13:31:55', ''),
(5, 4, 1, 0, 1, 0, 0, '2017-10-15 18:22:01', ''),
(6, 5, 1, 0, 1, 0, 0, '2017-10-15 18:24:32', ''),
(7, 6, 1, 0, 1, 0, 0, '2017-10-15 18:24:40', ''),
(9, 9, 1, 0, 1, 0, 0, '2018-01-19 09:16:20', ''),
(8, 7, 1, 0, 1, 0, 0, '2018-01-19 09:16:20', ''),
(10, 10, 1, 0, 1, 0, 0, '2018-01-19 09:16:52', '');

-- --------------------------------------------------------

--
-- Table structure for table `tab_akses_submenu`
--

CREATE TABLE IF NOT EXISTS `tab_akses_submenu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sub_menu` int(11) NOT NULL,
  `id_level` int(11) NOT NULL,
  `c` int(11) DEFAULT '0',
  `r` int(11) DEFAULT '0',
  `u` int(11) DEFAULT '0',
  `d` int(11) DEFAULT '0',
  `entry_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `entry_user` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=82 ;

--
-- Dumping data for table `tab_akses_submenu`
--

INSERT INTO `tab_akses_submenu` (`id`, `id_sub_menu`, `id_level`, `c`, `r`, `u`, `d`, `entry_date`, `entry_user`) VALUES
(1, 1, 1, 0, 1, 0, 0, '2017-10-13 16:45:40', ''),
(2, 2, 1, 0, 1, 0, 0, '2017-10-15 21:59:02', ''),
(3, 3, 1, 0, 1, 0, 0, '2018-01-19 09:41:54', ''),
(4, 4, 1, 0, 1, 0, 0, '2017-10-15 21:59:16', ''),
(5, 5, 1, 0, 1, 0, 0, '2018-01-19 09:42:03', ''),
(6, 6, 1, 0, 1, 0, 0, '2018-01-19 09:44:40', ''),
(7, 7, 1, 0, 1, 0, 0, '2018-01-19 09:44:40', ''),
(8, 8, 1, 0, 1, 0, 0, '2018-01-19 09:44:40', ''),
(9, 9, 1, 0, 1, 0, 0, '2018-01-19 09:44:40', ''),
(10, 10, 1, 0, 1, 0, 0, '2018-01-19 09:44:40', ''),
(11, 11, 1, 0, 1, 0, 0, '2018-01-19 09:45:33', ''),
(12, 12, 1, 0, 1, 0, 0, '2018-01-19 09:45:33', ''),
(13, 13, 1, 0, 1, 0, 0, '2018-01-19 09:45:43', ''),
(14, 14, 1, 0, 1, 0, 0, '2018-01-19 10:00:28', ''),
(15, 15, 1, 0, 1, 0, 0, '2018-01-19 10:00:28', ''),
(16, 16, 1, 0, 1, 0, 0, '2018-01-19 10:00:28', ''),
(17, 17, 1, 0, 1, 0, 0, '2018-01-19 10:00:28', ''),
(18, 18, 1, 0, 1, 0, 0, '2018-01-19 10:00:28', ''),
(19, 19, 1, 0, 1, 0, 0, '2018-01-19 10:07:51', ''),
(20, 20, 1, 0, 1, 0, 0, '2018-01-19 10:07:51', ''),
(21, 21, 1, 0, 1, 0, 0, '2018-01-19 10:08:52', ''),
(22, 22, 1, 0, 1, 0, 0, '2018-01-19 10:08:52', ''),
(23, 23, 1, 0, 1, 0, 0, '2018-01-19 10:08:52', ''),
(24, 24, 1, 0, 1, 0, 0, '2018-01-19 10:08:52', ''),
(25, 25, 1, 0, 1, 0, 0, '2018-01-19 10:08:52', ''),
(26, 26, 1, 0, 1, 0, 0, '2018-01-19 10:20:20', ''),
(27, 27, 1, 0, 1, 0, 0, '2018-01-19 10:20:20', ''),
(28, 28, 1, 0, 1, 0, 0, '2018-01-19 10:21:15', ''),
(29, 29, 1, 0, 1, 0, 0, '2018-01-19 10:21:15', ''),
(30, 30, 1, 0, 1, 0, 0, '2018-01-19 10:21:15', ''),
(31, 31, 1, 0, 1, 0, 0, '2018-01-19 10:21:15', ''),
(32, 32, 1, 0, 1, 0, 0, '2018-01-19 10:21:15', ''),
(33, 33, 1, 0, 1, 0, 0, '2018-01-20 01:19:50', ''),
(34, 34, 1, 0, 1, 0, 0, '2018-01-20 01:19:50', ''),
(35, 35, 1, 0, 1, 0, 0, '2018-01-20 02:34:29', ''),
(36, 36, 1, 0, 1, 0, 0, '2018-01-20 02:34:29', ''),
(37, 37, 1, 0, 1, 0, 0, '2018-01-20 02:34:29', ''),
(38, 38, 1, 0, 1, 0, 0, '2018-01-20 02:34:29', ''),
(39, 39, 1, 0, 1, 0, 0, '2018-01-20 02:34:29', ''),
(40, 40, 1, 0, 1, 0, 0, '2018-01-20 02:34:29', ''),
(41, 41, 1, 0, 1, 0, 0, '2018-01-20 02:34:29', ''),
(42, 42, 1, 0, 1, 0, 0, '2018-01-20 02:34:29', ''),
(43, 43, 1, 0, 1, 0, 0, '2018-01-20 02:34:29', ''),
(44, 44, 1, 0, 1, 0, 0, '2018-01-20 02:34:29', ''),
(45, 45, 1, 0, 1, 0, 0, '2018-01-20 02:34:29', ''),
(46, 46, 1, 0, 1, 0, 0, '2018-01-20 02:34:29', ''),
(47, 47, 1, 0, 1, 0, 0, '2018-01-20 02:34:29', ''),
(48, 48, 1, 0, 1, 0, 0, '2018-01-20 02:34:29', ''),
(49, 49, 1, 0, 1, 0, 0, '2018-01-20 02:34:29', ''),
(50, 50, 1, 0, 1, 0, 0, '2018-01-20 02:34:50', ''),
(51, 51, 1, 0, 1, 0, 0, '2018-01-20 02:34:50', ''),
(52, 52, 1, 0, 1, 0, 0, '2018-01-20 04:35:54', ''),
(53, 53, 1, 0, 1, 0, 0, '2018-01-20 04:35:54', ''),
(54, 54, 1, 0, 1, 0, 0, '2018-01-20 04:35:54', ''),
(55, 55, 1, 0, 1, 0, 0, '2018-01-20 04:35:54', ''),
(56, 56, 1, 0, 1, 0, 0, '2018-01-20 04:35:54', ''),
(57, 57, 1, 0, 1, 0, 0, '2018-01-20 04:35:54', ''),
(58, 58, 1, 0, 1, 0, 0, '2018-01-20 04:35:54', ''),
(59, 59, 1, 0, 1, 0, 0, '2018-01-20 04:35:54', ''),
(60, 60, 1, 0, 1, 0, 0, '2018-01-20 04:35:54', ''),
(61, 61, 1, 0, 1, 0, 0, '2018-01-20 04:35:54', ''),
(62, 62, 1, 0, 1, 0, 0, '2018-01-20 04:35:54', ''),
(63, 63, 1, 0, 1, 0, 0, '2018-01-20 04:35:54', ''),
(64, 64, 1, 0, 1, 0, 0, '2018-01-20 04:35:54', ''),
(65, 65, 1, 0, 1, 0, 0, '2018-01-20 04:35:54', ''),
(66, 66, 1, 0, 1, 0, 0, '2018-01-20 04:35:54', ''),
(67, 67, 1, 0, 1, 0, 0, '2018-01-20 04:35:54', ''),
(68, 68, 1, 0, 1, 0, 0, '2018-01-20 04:35:54', ''),
(69, 69, 1, 0, 1, 0, 0, '2018-01-20 04:35:54', ''),
(70, 70, 1, 0, 1, 0, 0, '2018-01-20 04:35:54', ''),
(71, 71, 1, 0, 1, 0, 0, '2018-01-20 04:35:54', ''),
(72, 72, 1, 0, 1, 0, 0, '2018-01-20 04:35:54', ''),
(73, 73, 1, 0, 1, 0, 0, '2018-01-20 04:35:54', ''),
(74, 74, 1, 0, 1, 0, 0, '2018-01-20 04:38:21', ''),
(75, 75, 1, 0, 1, 0, 0, '2018-01-20 04:38:21', ''),
(76, 76, 1, 0, 1, 0, 0, '2018-01-20 04:38:21', ''),
(77, 77, 1, 0, 1, 0, 0, '2018-01-20 04:38:21', ''),
(78, 78, 1, 0, 1, 0, 0, '2018-01-20 04:38:21', ''),
(79, 79, 1, 0, 1, 0, 0, '2018-01-20 04:38:21', ''),
(80, 80, 1, 0, 1, 0, 0, '2018-01-20 04:38:21', ''),
(81, 81, 1, 0, 1, 0, 0, '2018-01-20 04:38:21', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_about`
--

CREATE TABLE IF NOT EXISTS `tb_about` (
  `id_about` int(11) NOT NULL AUTO_INCREMENT,
  `about_logo` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `about_deskripsi` text CHARACTER SET latin1 COLLATE latin1_general_ci,
  `id_admin` int(11) DEFAULT NULL,
  `about_title_meta` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `about_deskripsi_meta` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `about_keyword_meta` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_about`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tb_about`
--

INSERT INTO `tb_about` (`id_about`, `about_logo`, `about_deskripsi`, `id_admin`, `about_title_meta`, `about_deskripsi_meta`, `about_keyword_meta`) VALUES
(3, 'icwisatamisteri.png', 'Situs Wisata misteri adalah sebuah situs yang memberikan informasi seputar wisata misteri atau horo yang ada di padang sumatera barat\r\n', NULL, 'tentang kami', 'tentang kami', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_album`
--

CREATE TABLE IF NOT EXISTS `tb_album` (
  `id_album` int(11) NOT NULL AUTO_INCREMENT,
  `album_nama` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `album_gambar` varchar(200) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `album_title_meta` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `album_deskripsi_meta` varchar(200) DEFAULT NULL,
  `album_keyword_meta` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_album`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tb_album`
--

INSERT INTO `tb_album` (`id_album`, `album_nama`, `album_gambar`, `id_admin`, `album_title_meta`, `album_deskripsi_meta`, `album_keyword_meta`) VALUES
(7, 'Misteri', 'Misteri.jpg', 1, 'Misteri', '', 'Misteri'),
(11, 'mitos', 'mitos.jpg', 1, 'mitos', '', 'mitos'),
(12, 'budaya', 'budaya.jpg', 1, 'budaya', '', 'budaya'),
(13, 'legenda', 'legenda.jpg', 1, 'legenda', '', 'legenda');

-- --------------------------------------------------------

--
-- Table structure for table `tb_foto`
--

CREATE TABLE IF NOT EXISTS `tb_foto` (
  `id_gallery` int(11) NOT NULL AUTO_INCREMENT,
  `gallery_nama` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `gallery_gambar` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `id_album` int(11) DEFAULT NULL,
  `gallery_title_meta` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `gallery_deskripsi_meta` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `gallery_keyword_meta` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_gallery`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `tb_foto`
--

INSERT INTO `tb_foto` (`id_gallery`, `gallery_nama`, `gallery_gambar`, `id_admin`, `id_album`, `gallery_title_meta`, `gallery_deskripsi_meta`, `gallery_keyword_meta`) VALUES
(17, 'Misteri Air Terjun Lembah Anai', 'air terjun.jpg', 1, 7, 'Misteri Air Terjun Lembah Anai ', '<p>Misteri Air Terjun Lembah Anai&nbsp;</p>', 'Misteri Air Terjun Lembah Anai '),
(18, 'Misteri Jembatan Kembar Padang', 'jembatan padang panjang.jpg', 1, 7, 'Misteri Jembatan Kembar Padang', '<p>Misteri Jembatan Kembar Padang</p>', 'Misteri Jembatan Kembar Padang'),
(19, 'Mitos Hantu Cindaku', 'hantu cindaku.jpg', 1, 11, 'Mitos Hantu Cindaku', '<p>Mitos Hantu Cindaku</p>', 'Mitos Hantu Cindaku'),
(20, 'Mitos Hantu Palasik', 'palasik.jpg', 1, 11, 'Mitos Hantu Palasik', '<p>Mitos Hantu Palasik</p>', 'Mitos Hantu Palasik'),
(21, 'Mitos Hantu Si Ampa', 'Mitos_Hantu_Siampa.jpg', 1, 11, 'Mitos Hantu Si Ampa', '<p>Mitos Hantu Si Ampa</p>', 'Mitos Hantu Si Ampa'),
(22, 'Legenda Hantu Si Ampa', 'legenda hantu siampa.jpg', 1, 13, 'Legenda Hantu Si Ampa', '<p>Legenda Hantu Si Ampa</p>', 'Legenda Hantu Si Ampa'),
(23, 'Legenda Hantu Ngeak', 'gheak.jpg', 1, 13, 'Legenda Hantu Ngeak', '<p>Legenda Hantu Ngeak</p>', 'Legenda Hantu Ngeak'),
(24, 'Budaya Bambu Gila ', 'Budaya_Bambu_Gila.jpg', 1, 12, 'Budaya Bambu Gila ', '<p>Budaya Bambu Gila&nbsp;</p>', 'Budaya Bambu Gila ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori_produk`
--

CREATE TABLE IF NOT EXISTS `tb_kategori_produk` (
  `id_produk` int(11) NOT NULL AUTO_INCREMENT,
  `produk_utama` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `produk_gambar` varchar(200) NOT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `produk_title_meta` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `produk_deskripsi_meta` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `produk_keyword_meta` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_produk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tb_kategori_produk`
--

INSERT INTO `tb_kategori_produk` (`id_produk`, `produk_utama`, `produk_gambar`, `id_admin`, `produk_title_meta`, `produk_deskripsi_meta`, `produk_keyword_meta`) VALUES
(3, 'Misteri', 'misteri.jpg', 1, 'Misteri', '<p>MENGUAK MISTERI PADANG PANJANG KOTA SERAMBI MEKAH&nbsp;</p>\r\n<p>Ke seantero dunia, telah terberita bahwa Padang Panjang, Provinsi Sumbar adalah Kota Serambi Mekah. Yang menarik dalam hal ini, tentu', 'Misteri'),
(8, 'budaya', 'budaya.jpg', 1, 'budaya', '', 'budaya'),
(9, 'legenda', 'legendanew.jpg', 1, 'legenda', '', 'legenda'),
(10, 'mitos', 'mitos.jpg', 1, 'mitos', '', 'mitos');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kontak`
--

CREATE TABLE IF NOT EXISTS `tb_kontak` (
  `id_kontak` int(11) NOT NULL AUTO_INCREMENT,
  `kontak_lat` varchar(100) DEFAULT NULL,
  `kontak_long` varchar(100) DEFAULT NULL,
  `kontak_deskripsi` text,
  `kontak_judul` varchar(30) DEFAULT NULL,
  `kontak_title_meta` varchar(200) DEFAULT NULL,
  `kontak_deskripsi_meta` text,
  `kontak_keyword_meta` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_kontak`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_kontak`
--

INSERT INTO `tb_kontak` (`id_kontak`, `kontak_lat`, `kontak_long`, `kontak_deskripsi`, `kontak_judul`, `kontak_title_meta`, `kontak_deskripsi_meta`, `kontak_keyword_meta`) VALUES
(1, '', '', '<ul>\r\n<li>Padang, Sumatera Barat - Indonesia</li>\r\n<li>085230201114</li>\r\n<li>wisatamisteri<a href="mailto:kursusbahasa@gmail.com">@gmail.com</a></li>\r\n</ul>', '', 'Kontak Elbe Clinic', '<p><span class="contact-info">Address: <em>322 Moon St, Venice Italy, 1231</em></span><br /><span class="contact-info">Phone: <em>0039 12345 6789</em></span><br /><span class="contact-info">Email: <a href="#"><em>hello@viride.com</em></a></span></p>', 'Kontak Wisata Misteri');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE IF NOT EXISTS `tb_produk` (
  `id_detail` int(11) NOT NULL AUTO_INCREMENT,
  `detail_judul` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `detail_deskripsi` text CHARACTER SET latin1 COLLATE latin1_general_ci,
  `detail_gambar` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `id_produk` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `detail_title_meta` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `detail_deskripsi_meta` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `detail_keyword_meta` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_detail`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id_detail`, `detail_judul`, `detail_deskripsi`, `detail_gambar`, `id_admin`, `id_produk`, `detail_title_meta`, `detail_deskripsi_meta`, `detail_keyword_meta`) VALUES
(12, 'Misteri Air Terjun Lembah Anai', '<p>&nbsp; adalah lokasi ajaib. Tempat yang tidak akan &ldquo;melepaskan&rdquo; seorangpun yang pernah melewatinya. Siapa saja yang pernah mengalami perjalanan antar tebing dan jurang di jalur sepanjang 4 kilometer itu pasti punya kenangan tersendiri.</p>\r\n<p>&nbsp; Bila kenangan itu muncul, mungkin ada baiknya bila kita memanfaatkannya untuk kembali mereview perjalanan hidup, menghitung segalanya dari pangkal. Rehatlah disana agak sebentar, lalu biarkan alam menjadi peredam segala rasa kecewa, sedih, dan kelu hati.</p>\r\n<p>&nbsp; Betapa kuat sensasi yang saya rasakan saya sengaja berhenti di sana (lembah Anai, red). Memang ini bukan pertama kali saya melewati Silaing. Namun, rasanya udah terlalu lama saya tidak berhenti sekedar menghela nafas dan melepaskan lelah.</p>\r\n<p>&nbsp; Ketika menatap hijau bebukitan sembari menghisap udara dingin yang sedikit melembabkan pernafasan, saya seakan sadar bahwa telah begitu lama saya tidak menjadi bagian dari alam yang sesungguhnya. Saya&ndash;mungkin seperti jugap para pesinggah lainnya&ndash; selama ini hanyalah aktor-aktor kecil yang dipermainkan liku labirin hidup yang berdinding beton dan kaca.</p>\r\n<p>&nbsp; Motor saya tepikan di sebuah tikungan. terdapat bagian yang diperluas sehingga memungkinkan untuk kendaraan berhenti dengan aman. Sementara mobil dan truk terus menghujam udara dengan semprotan karbon dioksida, wangi daun Thitonia justru menjadi aroma therapy yang tak pernah terkalahkan oleh asap sehitam apapun.</p>\r\n<p>&nbsp; Dari lokasi itu, terlihat jelas jurang yang perlahan ditinggalkan kabut. Saya tiba-tiba tidak sabar untuk melihat jembatan kereta api peninggalan nenek moyang-sama sekali, rel panjang itu bukan ciptaan Belanda, tapi kakek dan nenek kita.</p>\r\n<p>&nbsp; Ketika udara mulai cerah, di bawah sana sang legenda menampakkan kecantikannya. Tapi Ia yang sekarang, berbeda dengan Ia yang dulu. Lembah Anai yang dulunya saya kenal serba hijau molek oleh duan-daun belukar subur, kini sedikit terluka. Gempa Sumatera (30/9), telah menciptakan goresan-goresan di wajah lembah itu. Tebing-tebing penuh lekuk tampak terkelupas. Agaknya selapis humus subur sudah turun menjadi material longsor, hingga meninggalkan relief bebatuan bercampur tanah. Tapi alangkah luar biasanya rencana tuhan.</p>\r\n<p>&nbsp; Sama sekali, luka itu bukan memperburuk penampilan Lembah Anai. Ia kini semakin cantik dengan &ldquo;kulit&rdquo; barunya. Di empat titik, relief batu-batu mineral menghias dengan sempurna. Mungkin tinggal menunggu lelumutan melapisi, maka bebatuan itu akan membuat orang lupa akan wisata lembah sekelas Grand Canyon sekalipun.</p>\r\n<p>&nbsp; Ya, sang legenda kini semakin menghipnotis. ternyata luka-luka itu begitu cantiknya. Apalagi bagi mereka yang menyukai fotografi. Sebagai Background, atau objek utama, relief batu Silaing memang tak ada duanya.</p>\r\n<p>&nbsp; Pantas saja Buya Hamka pernah menjadikan lokasi ini sebagai salah satu setting romannya. Dalam &ldquo;Dibawah Lindungan Ka&rsquo;bah&rdquo; buya seakan memastikan bahwa Lembah Anai dan Padang Panjang adalah sorga romantisme yang tiada pudarnya.</p>\r\n<p>&nbsp; Turun sedikit ke arah padang, terdapat lagi keindahan yang lain. batas kota dengan jembatan melintang diatasnya membuat kenangan-kenangan masa kecil berhamburan dari pikiran saya. masih teringat ibu, bibi, dan nenek mengajak saya yang ketika itu masih belia berjalan-jalan. Sebelum berangkat kala itu, mereka berjanji bahwa tempat yang akan kami kunjungi adalah lokasi wisata yang sangat indah.</p>\r\n<p>&nbsp; Dengan sederhana saya ketika itu memahami bahwa mereka akan mengajak saya ke Stanza (wisata permainan modern di tahun 80-an). ternyata saya salah, mereka mengajak saya ke sebuah spektrum sorga, begitu cantik, sampai saya sebagai anak kecil waktu itu merengek-rengek meminta ibu membangun sebuah rumah disalah satu tebingnya.</p>\r\n<p>&nbsp; Semakin sore, awan hitam berarak dari balik tebing. Gerimis mulai mempengaruhi minat sebagian pengunjung untuk berlama-lama ditengah kungungan udara dingin. Satu persatu mereka beranjak. Sangat mungkin pula, sebagian diantara mereka justru takut longsor akan kembali terjadi, sehingga kendaraan mereka kebut menuju arah keluar lembah.</p>\r\n<p>&nbsp; Namun bagi saya, hujan di Silaing adalah waktu yang tepat untuk menggerus kecantikan lembah ini. Di balik tirai-tirai air Lembah Anai bak anak gadis yang sedang memeras rambut basahnya. Semakin lebat hujan, semakin cantik ia.</p>', 'Misteri_Air_Terjun_Lembah_Anai.jpg', 1, '3', 'Misteri Air Terjun Lembah Anai', '<p>Misteri Air Terjun Lembah Anai</p>', 'Misteri Air Terjun Lembah Anai'),
(13, 'Hantu Cindaku', '<div class="separator">\r\n<p>Makhluk astral ini di yakini masih ada di Ranah minang (PADANG) makhluk ini bukanlah manusia kutukan melainkan adalah orang yang punya ilmu gaib yang murni dari nenek moyangnya.<br />makhluk ini hanya bisa berubah wujud di tanah kelahiran nya saja dengan cara meleketakan dadanya ke tanah dia seperti manusia tapi mirip dengan harimau.<br />Fungsi cindaku di ranah minang ialah perantara hubungan manusia dan harimau.</p>\r\n</div>', 'Hantu_Cindaku.jpg', 1, '10', 'Hantu Cindaku', '<p>Hantu Cindaku</p>', 'Hantu Cindaku'),
(14, 'Legenda Hantu Si Ampa', '<p><span>&nbsp; Hantu ini biasanya menghuni bangunan tua yang sudah lama tidak dihuni dan pohon-pohon besar yang terlihat lebih mencolok dari pada pohon-pohon lain disekitarnya. Siampa ini bersosok hitam tinggi besar dan memiliki 2 mata yang berwarna merah. Menurut ceritanya, hantu ini suka mengganggu manusia dengan mencekik atau menindih pada saat sedang tidur. Banyak kejadian dimana ada orang-orang yang sedang tidur, lalu terbangun secara tiba-tiba tapi tidak bisa bicara apa-apa dan menatap dengan mata yang menggambarkan sedang kesakitan seperti sedang ditindih atau dicekik sesuatu sampai sesak napas. Pernah?</span></p>', 'Legenda_Hantu_Si_Ampa.jpg', 1, '9', 'Legenda Hantu Si Ampa', '<p>Legenda Hantu Si Ampa</p>', 'Legenda Hantu Si Ampa'),
(15, 'Budaya Bambu Gila', '<p>Kesenian Bambu Gila ini berasal dari tradisi lama masyarakat Maluku. Menurut sejarahnya, kesenian ini sudah ada sebelum masuknya agama Islam dan Kristen di daerah Maluku. Pada saat itu masyarakat Maluku masih mengenal Animisme dan Dinamisme dalam kehidupan spiritual mereka. Sehingga mereka masih akrab dengan berbagai ritual untuk para leluhur dan mempercayai adanya roh gaib. Salah satu tradisi yang masih dilestarikan hingga sekarang adalah Kesenian Bambu Gila ini.<br /> <br /> Konon Bambu Gila ini dulunya tidak hanya dilakukan sebagai atraksi atau hiburan, Bambu Gila juga digunakan dalam kehidupan sehari-hari masyarakat di sana. Terutama pada pekerjaan yang terkesan berat seperti memindahkan kapal, menarik kapal, bahkan untuk melawan para musuh saat perang. Namun seiring dengan masuknya agama Islam dan Kristen di Maluku, tradisi tersebut lebih difungsikan sebagai atraksi seni atau hiburan rakyat dan dipertahankan hingga sekarang.</p>', 'Budaya_Bambu_Gila.jpg', 1, '8', 'Budaya Bambu Gila', '<p>Budaya Bambu Gila</p>', 'Budaya Bambu Gila'),
(16, 'Misteri Jembatan Kembar Padang', '<p>Ke seantero dunia, telah terberita bahwa Padang Panjang, Provinsi Sumbar adalah Kota Serambi Mekah. Yang menarik dalam hal ini, tentulah misteri yang terkandung di dalamnya, yang menyebabkan kota seluas 23 km2 ini dikatakan Kota Serambi Mekah. Banyak tabir sejarah yang menarik diungkapkan tentang hal ini di sini. Dan dengan pengupasan pengungkapan ini, akan terlihatlah bahwa di sini tersimpul dengan sebenarnya prinsip, &ldquo;Adat basandi syarak, syarak basandi kitabullah. Syarak mangato, adat mamakai&rdquo;.</p>\r\n<p>Penyebab kota ini dikatakan Kota Serambi Mekah, menurut Taufik, Dt. Mangkuto Rajo, salah seorang pemuka masyarakat yang cukup disegani di daerah ini, cukup beralasan kota ini dikatakan Kota Serambi Mekah. Tidak hanya sekadar diletak-letakkan begitu saja. Sebab sebutan Kota Serambi Mekah itu berat. Punya kewibawaan yang tinggi.</p>\r\n<p>Ke mana kita harus menoleh, untuk mengetahui hal ini ? Kata Taufik, tak lain adalah kepada sejarah. Sebab, menurut Buya Hamka dalam bukunya berjudul,&rdquo;Dalam Perbendaharaan Lama&rdquo;, membaca sejarah nenek moyang adalah suatu hal yang meninggalkan kesan menadalam di jiwa kita. Kian dibaca kian terbayanglah masa lampau dan masa yang lampau akan meninggalkan jejak yang mendalam untuk menghadapi zaman kini dan zaman mendatang.</p>\r\n<p>Sebagaimana diketahui, bahwa Raja Pagaruyung, Aityawarman(1347-1375), sebagai raja simbolik Minangkabau telah menobatkan dirinya sebagai maharaja diraja yang disebut dengan Kanaka Medinindra. Artinya; raja yang berdaulat di atas tanah yang mengandung emas. Bayangkan, pada masa itu dalam catatan Bangsa Eropa, di Luhak Tanah Datar saja terdapat 1.200 tambang emas.</p>\r\n<p>Dengan penobatan dirinya ini, telah membuat nagari-nagari di seluruh kawasan Ranah Minangkabau berdiri di atas otonom penuh dengan ketentuan atau aturan adat, yakni adat nan salingka nagari(adat yang selingkar nagari).</p>\r\n<p>Fenomena ini, apabila dikaitkan dengan pengertian Kanaka Medinindra tadi, khusus untuk Luhak Tanah Datar yang di dalamnya terdapat Padang Panjang, perdagangan di luhak ini sangat lancar. Pedagang yang masuk ke sini, antara lain dari Hindia, Parsi, Gujarat, Timur Tengah dan Eropa.</p>\r\n<p>Dikaitkan dengan hal di atas, terhadap keberadaan Padang Panjang kala itu, Padang Panjang merupakan pintu gerbang masuk dan keluar dari Minangkabau oleh kaum pedagang di kawasan barat Minangkabau, menuju pelabuhan sebelah barat yakni pelabuhan di Tiku Pariaman. Sedangkan gerbang untuk wilayah timurnya adalah Sumpur Kudus.</p>\r\n<p>Perjalanan menuju Tiku Pariaman dari Padang Panjang, terlebih dahulu melewati Anduriang Kayu Tanam, selanjutnya barulah ke Tiku Pariaman. Perjalanan yang kala itu berjarak sekitar 3 jam perjalanan kendaraan yang ada waktu itu tersebut, dari Padang Panjang dapat ditembus melalui dua gerbang. Pertama, melalui Jalan Bukit Tujuh yang pada umumnya dilalui warga masyarakat Limo Koto. Kedua, lewat jalan Jawi di Sungai Andok, yang pada umumnya dilalui warga masyarakat Enam Koto. Ketiga, melewati jalan Ambacang di Tambangan yang pada umumnya dilalui warga masyarakat Batipuah dan sekitarnya.</p>\r\n<p>Waktu itu, kemakmuran masyarakat Minangkabau, dapat dilihat dari suasana yang terjadi di Pasar Padang Panjang. Kalau ingin melihat kesejahteraan hidup masyarakat Minangkabau, lihatlah kilauan emas dan model pakaian yang dipakai masyarakat di Pasar Padang Panjang. Menurut sejarah, pernah dicatat orang Eropa, ada dua puluh dua macam perhiasan emas dipakai oleh kaum wanita dan tujuh belas macamnya lagi dipakai kaum pria. Paling tidak, ini dapat menjadi gambaran betapa makmurnya masyarakat Minangkabau karena kekayaan alam berupa emasnya yang melimpah ruah di samping rempah-rempah dan hasil bumi lainnya.</p>\r\n<p>Perdagangan melalui Pelabuhan Tiku Pariaman sungguh cukup lama waktunya dikuasai oleh Aceh., yang sudah duluan memeluk agama Islam. Pedagang-pedagang di Pelabuhan Tiku Pariaman dal;am menjalankan proses perdagangannya sudah lama memakai cara-cara Islam dan mereka fasih dengan ayat-ayat Al-Qur&rsquo;an dan hadist. Karena demikian kuatnya penguasaan Pelabuhan Tiku Pariaman oleh Aceh kala itu, salah seorang putra mahkota berasal dari Aceh(belum penulis temukan namanya), pernah diangkat menjadi Panglima di Pelabuhan Tiku Pariaman pada tahun 1575.</p>\r\n<p>Melihat kepada fenomena yang terlukis dalam lintasan sekemulit perjalanan sejarah tadi, dapat agaknya kita katakan, bahwa karena Padang Panjang merupakan pintu masuk dan keluar jalur perdagangan dari sebelah barat dengan pelabuhannya di Tiku Pariaman, yang para pedagangnya telah sejak jauh hari menggunakan cara-cara Islam, sudah dapat ditebak bahwa Padang Panjang sudah barang tentu otomatis menjadi tempat yang paling strategis untuk pengembangan agama Islam di Minangkabau. Apalagi pasar yang termodern menurut kondisi saat itu di Minangkabau adalah Pasar Padang Panjang. Pantaskah Padang Panjang menjadi benteng pertahanan dan pusat pengembangan agama Islam di Minangkabau ? Selanjutnya, pantaskah Padang Panjang disebut Kota Serambi Mekah ? Jawabnya sudah barang tentu,&rdquo;PANTAS&rdquo;.</p>\r\n<p>Argumentasi yang bisa memperkuat jawaban itu tadi, masih banyak lagi. Antara lain, apabila kembali kita buka lembaran sejarah masa lalu, akan terlihat bahwa pada abad ke-XIX masih terlihat keramaian di pasar Padang Panjang oleh kedatangan pedagang-pedagang dan pengembang Tarikat Syatariyah yang datang dari Ulakan Pariaman. Mereka ini menuju Koto Laweh dan Kapeh-Kapeh sebagai pusat kegiatan perdagangan dan pengajiannya. Aliran Syatariyah ini dibawa oleh Syech Burhanuddin pada abad ke-XVII dari gurunya Syech Abdul Rauf dari Singkil Aceh Selatan(1619-1693).*</p>\r\n<p>KETIKA TIGA HAJI PULANG DARI MEKAH</p>\r\n<p>Seperti telah disinggung pada laporan terdahulu dalam edisi laporan utama kali ini, bahwa pada masanya dulu itu, Pasar padang panjang merupakan pasar termodren di kawasan Minangkabau. Di samping sangat ramai, letaknya pun sangat strategis karena terletak di persimpangan jalan.</p>\r\n<p>Sebagai pertanda pasar ramai kala itu, di pasar tersebut terdapat permainan judi asbung ayam, minum tuak dan sejenisnya. Taklah bisa suatu pasar dikatakan ramai kala itu, jika di dalamnya tak ada permainan judi, sabung ayam dan minum tuak. Dengan pakaian serba hitamnya, para pemabuk dan pejudi, amatlah bangga dengan segala kegiatannya. Padang Panjang sebagai pasar yang sangat modern dan amat ramai kala itu, dapat kita bayangkan, bagaimana maraknya permainan judi dan mabuk-mabukan.</p>\r\n<p>Pada abad ke-XVII, sebenarnya telah masuk ajaran Islam aliran Syatariyah yang dibawa Sech Burhanuddin ke Padang Panjang. Islam aliran Syatariyah merupakan pengembangan agama dengan cara penuh toleransi. Sistem yang dilakukannya dalam membawa masyarakat Bergama Islam dengan cara lunak lembut, bukan sebaliknya dengan cara kekerasan.</p>\r\n<p>Suatu contoh, bagi orang yang masih saja sehari-hari menghabiskan waktunya berjudi sabung ayam atau minum Tuak, tak dilarang dia melakukan hal itu secara prontal, tetapi diajak mengerjakan apa yang dianjurkan agama Islam. Kasarnya, dia dibiarkan masih dibiarkan berjudi, tetapi ketika waktu shalat masuk, mereka diajak ke masjid atau surau untuk melaksanakan shalat. Dan secara beransur-ansur, mereka diyakinkan bahwa berjudi dan minum tuak itu tidak baik, karenanya alangkah baiknya jika secara beransur-ansur diusahakan meninggalkannya. Penye baran agama melalui sistem lunak lembut atau tak prontal ini berjalan cukup lama, seiring dengan masih ramainya pasar Padang panjang sampai pada abad ke-XIX.</p>\r\n<p>Namun pada tahun 1803, kembalilah tiga orang haji yang merupakan ulama besar Minangkabau dari Mekah. Mereka adalah Haji Piobang, Haji Sumanik dan Haji Miskin. Di saat Tuanku Nan Renceh menjabat sebagai Perdana Menteri, Panglima Tertinggi di Minangkabau, di jajaran eksekutifnya; Haji Piobang yang adalah seorang Kolonel Kavaleri yang pernah menjadi komandan tempur tentara berkuda di Kerajaan Turki, menjabat sebagai Komandan Tentara Kavaleri. Sedangkan Haji Sumanik dan Haji Miskin, masing-masing sebagai Komandan Tentara berpangkat mayor dengan jabatan Komandan Tentara Artileri dan Haji Miskin sebagai Menteri Penerangan.</p>\r\n<p>Apa pengaruh kepulangan ketiga haji ini untuk Padang Panjang ? Kepulangan mereka bertiga tak lain adalah membawa tekad untuk membawa umat di tanah kelahirannya ini benar-benar menjalankan syariat Islam secara murni seperti yang mereka lihat bdi tanah suci Mekah.</p>\r\n<p>Mereka ini tidak ingin di negerinya ini terjadi lagi pencampuradukan antara yang hak dengan yang batil, antara perbuat yang disuruh agama Islam dengan yang dilarang agama Islam. Mereka tak ingin lagi melihat orang yang disaat waktu shalat tiba berbondong-bondong ke masjid dan surau, tetapi begitu selesai shalat kembali lagi ke meja judi dan ke lokasi mabuk-mabukan.</p>\r\n<p>Sebagai langkah awal, ketiga haji ini merencanakan bertekad untuk menyatukan seluruh umat Islam di Nusantara. Piobang malah sengaja pulang membawa tekad membebaskan tanah kelahirannnya Nusantara ini dari penjajahan oleh orang-orang kafir. Dalam usaha ini, dia merencanakan langkah pertama dengan membawa agama Islam mazhab Hambali serta dengan gerakan Wahhabi.</p>\r\n<p>Untuk daerah Luhak Tanah Datar khususnya, yang paling aktif adalah Haji Miskin. Sekembali dari Mekah tersebut, mula-mulau Haji Miskin bermukim di Batu Tebal. Kemudian pindah ke Pandai Sikek. Di pandai Sikek inilah Haji Miskin mulai memperlihat tekadnya menghadapi kaum adat yang masih saja mencampuradukkan perbuatan yang hala dengan yang haram tadi.</p>\r\n<p>Haji Miskin dengan pengikutnya, membakar Balai Adat Nagari Pandai Sikek yang merupakan kebanggaan masyarakat Pandai Sikek kala itu. Perlawan tak dapat dielakkan dari kaum adat. Karena demikian sengitnya perlawanan, Haji Miskin dan pengikutnya terpaksa mundur ke Koto Laweh dan meminta perlindungan kepada Tuanku Pamansingan.</p>\r\n<p>Tak lama antaranya, setelah terjadi kejadian di Pandai Sikek tersebut, terjadi pula kejadian yang amat mengerikan, yakni perkelahian antara pengikut Haji Miskin dengan masyarakat Pasar Padang Panjang. Haji Miskin dan pengikutnya tak lagi berdaya menghadapi masyarakat pasar yang notabenenya kaum adat ini. Haji Miskin dan pengikutnya akhirnya memutuskan untuk mundur ke Bukit Kamang. Peristiwa ini terjadi pada tahun 1805. Di Kamang Mudik, Haji Miskin mendapat sambutan baik dan perlindungan dari Tuanku Nan Renceh. Tuanku Nan Renceh dan Tuanku Pamansiangan merupakan penganut pahaman aliran Syatariyah. Namun mereka berdua sepaham dengan tindakan yang dilakukan Haji Miskin dalam menghadapi kaum adat.</p>\r\n<p>Pasca perkelahian baru lalu itu, membuat Pasar Padang Panjang tak lagi seceria biasanya. Persaan cemas dan was-was seperti menghantui masyarakat pasar ini. Namun dalam hal ini, Tuanku Nan Renceh yang menjadi tempat mengungsi bagi Haji Miskin, selalu mencari siasat untuk menaklukkan nagari-nagari di Minangkabau.</p>\r\n<p>Setiap nagari yang telah berhasil ditaklukkannya, yang telah menyatakan tunduk di bawah kekuasaannya, diangkatnya di sana seorang kadi yang bertugas mendampingi penghulu yang bertugas melaksanakan aturan-aturan agama. Selanjutnya, dipilihnya pula seorang malin yang bertugas untuk mengamati orang-orang yang masih tidak mengerjakan perintah agama. Malin sekaligus bertugas sebagai imam shalat berjama&rsquo;ah. Dalam menentukan seorang malin, persyaratan terpenting yang harus dipenuhinya adalah penilaian dari segi keberaniannya. Keahlian dari sisi agama hanyalah factor pendukung. Mungkin pertimbangannya, kalau sudah punya keberanian, dia tentu akan mampu melawan orang-orang yang masih senang melalaikan agama dan mencampuradukkan antara yang halal dengan haram. Sedangkan ilmu agama tentu dengan otomatis bisa dipelajarinya. Pada saatnya nanti, para malin inilah yang menjadi cikal bakal &ldquo;Harimau Nan Salapan&rdquo;. Makin lama, pertentangan antara kaum adat yang masih menyenangi judi, minum tuak dengan kaum Paderi(kaum agama) yang menginginkan agama Islam dijalankan secara murni tanpa dicampuradukkan dengan hal-hal yang tidak dibenarkan agama, kian hari semakin tampak meruncing.</p>\r\n<p>Penyerangan pertama oleh kelompok yang menamakan kaum Paderi kepada kaum adat adalah yang terjadi ketika kaum adat sedang berada di gelanggang adu jago, yakni tempat judi jago, sabung ayam dan minum tuak di Bukit Batabuah. Dalam peristiwa ini, kaum Paderi terpaksa mundur karena kuatnya kaum adat. Empat bulan kemudian, kaum Paderi kembali menyerang gelanggang adu jago di Banuhampu. Korban saling berjatuhan di kedua belah pihak. Gelanggang tersebut bagaikan bermandikan darah.</p>\r\n<p>Selanjutnya, timbullah pemikiran dari kaum Paderi, bahwa yang menjadi biang keladi utama kuatnya kaum adat mempertahankan paham mencampuradukkan antara yang haram dengan yang hala ini, adalah ajaran Syatariyah yang terlalu toleransi dalam menyebarkan ajaran agama kepada umat. Kaum agama menganggap kelompok aliran Syatariyah terlalu lemah dalam menghadapi kaum adat. Kaum agama mengetahui benar, bahwa kampung tertua pusat penyebaran ajaran Syatariyah di pedalaman Minangkabau adalah Kapeh-Kapeh-Paninjauan Padang Panjang(kini masuk wilayah Kabupaten tanah Datar).</p>\r\n<p>Kaum Paderi di bawah pasukan Harimau Nan Salapan menyerang Kapeh-Kapeh. Kampung itu dibumi hanguskan oleh pasukan Harimau Nan Salapan. Termasuk Surau Kapeh-Kapeh sendiri mereka bumi hanguskan. Surau Gadang di Sigando, tak sempat mereka bakar. Tak diketahui apa sebabnya hingga kini.</p>\r\n<p>Suasana mencekam benar-benar semakin mendalam di Pasar Padang Panjang. Sebab, Pasar Padang Panjang berbatasan langsung dengan Nagari Paninjauan, lokasi Kapeh-Kapeh yang dibumi hanguskan pasukan Harimau Nan Salapan tersebut.</p>\r\n<p>Konon kabarnya, penyerangan pasukan Harimau Nan Salapan ke Kapeh-Kapeh Paninjauan tersebut di bawah restu Tuanku Pamansiangan. Masuk akal, karena mungkin saja bagi Tuanku Pamansiangan, sebagai pembalasan terhadap kekalahan Haji Miskin saat terjadi perkelahian antara pengikut Haji Miskin dengan kaum adat di Pasar Padang panjang jauh hari sebelumnya.</p>\r\n<p>Makin hari, serangan kepada nagari-nagari yang masih kuat mempertahankan tradisi adat semakin gencar dari kaum Paderi, termasuk ke Nagari Batipuh. Kaum Paderi suatu kali, mendapat perlawanan yang hebat ketika menyerang Nagari Gunung Rajo dan Nagari Ladang Laweh. Mengiringi perlawanan sengit di kedua nagari ini, sekaligus membuat terjadinya pertempuran yang amat dahsyat di dekat Nagari Gunung Bungsu. Dalam pertempuran ini, korban di kedua belah pihak cukup banyak. Nagari Batipuh dalam kesempatan ini dapat dimasuki kaum Paderi tetapi tak dapat dikuasainya. Kemudian Tuanku Lintau menyerang Batipuh dari arah timur. Namun pasukan Tuanku Lintau tidak mampu masuk ke Nagari Batipuh. Pada saat ini, boleh dikatakan sedikit sekali wilayah Minangkabau yang tidak dapat dikuasai kaum Paderi. Padang Panjang dan sekitarnya, yakni IV Koto dan V Koto telah dapat dikuasai kaum Paderi sepenuhnya.</p>\r\n<p>Tekanan demi tekanan yang dilangsungkan kaum Paderi untuk menaklukkan kaum adat, dengan misi kaum Paderi untuk menjadikan umat di nagari yang ditaklukkannya itu benar-benar menjalankan agama secara murni, makin hari semakin gencar.</p>\r\n<p>Kaum Paderi, yang sudah barang tentu dengan paham yang dibawa Haji Piobang, Haji Sumanik dan Haji Piobang, semakin gencar mengikis paham pencampuradukan antara yang halal dengan yang haram di Minangkabau. Upaya yang dilakukan kaum Paderi, memang amat keras, termasuk juga melakukan pembunuhan dan perampasan terhadap pihak-pihak yang tidak mau meninggalkan pahamnya. Perasaan takut kehilangan harta dan nyawa bagi kaum adat yang enggan meninggalkan menerima kedatangan kaum Paderi selalu menghantui perasaan mereka.</p>\r\n<p>Pada hari Sabtu, tanggal 10 Februari 1820, bertepatan dengan tanggal 8 Jumadil Awal 1236 H, dengan mengatasnamakan Minangkabau, beberapa orang penghulu atau pemangku adat yang mengatasnamakan 162 penghuludari 20 nagari meminta bantuan kepada Belanda. Pada hakekatnya, mereka ini sama dengan menyarahkan Minangkabau ke tangan Belanda. Hal ini mereka lakukan tentu saja demi keselamatan hidup mereka. Salah satu isi dari penyerahan oleh kaum adat ini, menyatakan bahwa penghulu-penghulu siap membantu Belanda baik dengan tenaga maupun dengan makanan demi menjaga keselamatan mereka.</p>\r\n<p>Penyerahan ini tentu saja suatu kesempatan yang telah lama ditunggu-tunggunya, dan tak akan pernah dia lepaskan kesempatan ini sedikitpun. Bahkan, mungkin saja ini hasil dari scenario Belanda yang diulakukannya secara rapi. Yakni memperuncing pertentangan antara kjaum adat dengan kaum agama dengan strategi yang halus sehingga tidak terasa oleh kedua belah pihak.</p>\r\n<p>Tak lama kemudian, tanggal 18 Februari 1821, Belanda memasuki Benteng Simawang dengan 100 orang serdadu. Benteng merupakan hasil poenyerahan Inggris kepada Belanda di Padang tahun 1819. Selanjutnya, Belanda semakin leluasa melakukan penyerangan di Minangkabau, karena mereka mendapat dukungan dari kaum adat yang telah menyerahkan Minangkabau ke tangan Belanda tersebut. Di mana-mana, Belanda telah mendapat dukungan dari kaum adat, dari para penghulu yang menyerahkan nagarinya kepada Belanda. Antara lain, seperti menyerang Sulit Air yang dilakukan Belanda tanggal 28 April 1821. Kemudian mengulanginya lagi pada tanggal 30 April 1821. Pada penyerangan kedua inilah Belanda baru bisa memasuki Sulit Air, karena pada penyerangan pertama dia mendapatkan perlawanan dari masyarakat setempat. Inilah pula yang disebut permulaan perang Paderi. Mulai saat inilah kaum Paderi berhadapan dengan Belanda dan kaum adat yang tidak suka kepada kaum Paderi.</p>\r\n<p>Pada tanggal 19 Agustus 1921, Belanda menyerang Nagari Gunung Padang Panjang. Belanda bertolak dari pos-nya di Simawang. Dalam perjalanannya dari Simawang menuju Gunung, Belanda memperoleh bantuan tenaga dan makanan dari nagari-nagari yang telah ikut mengadakan perjanjian dengan Belanda tempo hari. Dubalang-dubalang nagari yang bersekutu dengan Belanda ini turut mengambil peran penting dalam penyerangan tersebut.</p>\r\n<p>Pertempuran dengan rakyat gunung Padang Panjang yang telah menganut paham Paderi tak dapat dielakkan. Korban berjatuhan. Akhirnya, dalam sebuah pertempuran dengan kekuatan yang benar-benar tak berimbang, jatuhlah Gunung Padang panjang ke tangan Belanda. Kemudian, setelah menguasai Nagari Gunung, Belanda dengan mudah menguasai kawasan Padang Panjang.</p>\r\n<p>Belanda membuat sebuah pos di Gunung. Pembuatan pos ini tak luput dari bantuan yang diberikan oleh para dubalang nagari-nagari sekitarnya yang telah menyerahkan nagarinya kepada Belanda. Pos atau yang disebut juga dengan benteng ini terletak di sebuah bukit, di pinggiran perkampungan bernama Tabiang Aie Hilang. Kemudian masyarakat setempat menamainya Puncak Pagaduangan. Inilah benteng atau pos pertama Belanda yang dibuatkannya berkat hasil sebuah pertempuran.</p>\r\n<p>Kendatipun seluruh daerah di Minangkabau telah dimasuki serdadu Belanda, namun masyarakat penganut paham kaum Paderi tidak mengenal pudar semangatnya. Di Koto Laweh dan Pandai Sikek misalnya, serdadu Belanda mendapat perlawanan sengit dari masyarakat. Demikian pula halnya di Nagari Gunung. Masyarakat yang berada di sekitar pos atau benteng pernah suatu kali berhasil menangkap seorang serdadu Belanda bernama Janjang Sekar Marbus yang sedang membawa surat Kolonel Elout untuk Kapten Veltman di Tambangan. Masyarakat membunuhnya, dan langsung mengambil senjata sereta kudanya. Namun pembalasan Belanda akibat pembunuhan terhadap serdadunya ini, bukanlah tanggung-tanggung. Belanda membumi hanguskan bentengnya di Guguak Sigandang dan sekaligus membantai pemuka-pemuka masayarakat di IV Koto dan VI Koto Padang Panjang sebanyak 12 orang.</p>\r\n<p>Kekuatan kaum Paderi kian hari kian melemah. Pada tahun 1937 Jenderal Cochius meminta agar Datuk Pamuncak dari Batipuh membuat tangsa(rumah tahanan) serdadu di Guguak Malintang Padang panjang. Datuk Pamuncak menerima permintaan itu.</p>\r\n<p>Setelah beberapa tahun Belanda memasuki pedalaman Minangkabau, mereka pun mulai menyusun pemerintahan. Susunan pemerintahannya ini, sudah barang tentu untuk menggantikan sususan pemerintahan yang disusun kaum Paderi.</p>\r\n<p>Belanda menyusun pemerintahan mulai dari tingkat Regent, Lareh, penghulu kepala. Demang, yang semua itu dijabat oleh kaum pribumi. Sedangkan jabatan yang penting-penting, seperti Resident, kepala afdelling dan yang lain sejenisnya dijabat Belanda. Padang panjang pernah tercatat dalam sejarah, menjadi pusat kantor afdelling Tanah datar.</p>\r\n<p>Melihat kepada peran serta Padang Panjang dalam menegakkan ajaran agama Islam, mulai dari kedatangan aliran Syatariyah sampai kepada kehadiran oaham kaum Paderi yang dibawa oleh Haji Piobang, Haji Sumanik dan Haji Miskin, sungguh sangat wajar kota kecil ini dijuluki Kota Serambi Mekah. Pengobranan 12 orang pemuka masyarakat IV Koto dan VI Kota oleh kaum Belanda yang dinilainya berpihak kepada kaum Paderi, sungguh merupakan suatu catatan sejarah yang membuktikan bahwa Padang Panjang sejak tempo dulu hingga kini pantas diberi prediket benteng agama Islam di Minangkabau khususnya dan nunantara ini umumnya. *</p>\r\n<p>GAMBARAN TENTANG MINANGKABAU YANG CUKUP LENGKAP</p>\r\n<p>Sesungguhnya, taklah salah apabila dikatakan, jika ingin melihat gambaran tentang Minangkabau yang cukup lengkap, melihatlah ke Padang Panjang. Di sini, akan ditemukan adat basandi syarak, syarak basandi kitabullah secara utuh. Di sini akan ditemukan, syarak mangato adat mamakai dengan agak sempurna sesuai dengan kondisi kekinian alam Minangkabau.</p>\r\n<p>Seperti dikemukakan tokoh masyarakat Padang Panjang, Taufik, Dt. Mangkuto Rajo bahwa di kota sejuk ini Alhamdulillah sampai kini masih tetap terjaga dengan baik adat dan syarak.</p>\r\n<p>Pertalian adat dan syarak, yang terpatri dalam system adat basandi syarak syarak basandi kitabullah, belum lagi terkontaminasi oleh arus modernisasi di kota ini. Semua ini kata Taufik, tak lain adalah berkat adanya keseiringan antara adat dan agama. Syarak managato adat mamakai, tetap menjadi titik tumpu menjaga kerukunan, kesejahteraan dan kemakmuran masyarakat dengan keseimbangan antara kepentingan dunia dengan kepentingan akhirat hingga hari ini di Padang Panjang.</p>\r\n<p>Modal utama bagi kota ini, adalah kemampuan kota ini menjadikannya sebagai tempat pengembangan agama Islam dari dulu hingga kini. Sebagai pusat pengembangan agama Islam, kota ini memiliki perguruan-perguruan agama Islam yang amat banyak, yang amat tua dan amat dikenal ke mana-mana.</p>\r\n<p>Muncul pertanyaan, apa sesungguhnya yang menyebabkan Padang Panjang menjadi tempat tumbuh suburnya perguruan-perguruan agama Islam dari dulu hingga kini ? Apakah karena tanahnya subur, apakah karena cuacanya sejuk ? apakah karena rakyatnya cinta akan kerukunan dan kedamaian dan apakah karena memang dari dulu hingga kini warga Kota Padang panjang telah benar-benar menjadi rakyat yang ta&rsquo;at beribadah menurut ajaran agama Islam ?</p>\r\n<p>Pertanyaan yang demikian banyak, sesungguhnya akan terjawab apabila kita mencoba menelusuri sejarah dari Padang Panjang, seperti yang sudah kita uraikan pada laporan terdahulu dalam kesempatan edisi ini.</p>\r\n<p>Padang Panjang memang dari zaman dahulu telah menjadi pusat pengembangan agama Islam di Minangkabau. Ingat kita tentunya, dengan Nagari Gunung yang menjadi pusat pengembangan agama Islam yang dibawa oleh Haji Miskin, sebagai salah seorang dari tiga haji lainnya yang cukup aktif melakukan pengembangan agama Islam di daerah ini. Yakni selain dari Haji Piobang dan Haji Sumanik.</p>\r\n<p>Selanjutnya, jauh sebelum berdirinya perguruan agama yang terbentuk dalam system pendidikan Pondok Pesantren, seperti perguruan Thawalib, Diniyah Putri, Diniyah Putra, Kauman Muhammadyah dan lain sebagainya yang menjamur banyaknya sampai sekarang, Padang Panjang telah memiliki perguruan agama yang dikenal dengan halaqah. Antara lain, halaqah yang dirikan ayah mendiang ulama besar HAMKA. Halaqah berupa perguruan dengan system pengajian melingkar dengan guru di tengah. Sistem pengajarannya tidak memakai bangku, tetapi duduk bersila. Perguruan halaqah I ni melahirkan ulama-ulama besar yang cukup disegani di zamannya. Dan ini banyak sekali di Padang Panjang, jauh sebelum Pondok Pesantren seperti sekareang ini berdiri.</p>\r\n<p>Menurut sejumlah sumber di samping Taufik, Dt. Mangkuto Rajo, tertujunya keinginan para pendiri perguruan agama Islam mendirikan halaqah dan Pondok-Pondok Pesantren sejak dulu kala hingga kini di kota kecil ini, agaknya di samping karena memang kota ini semenjak dahulu kala telah tersohor sebagai kota pusat pengembangan agama Islam di Minangkabau, sekaligus juga kota ini terletak di persimpangan, sehingga letaknya ini amat strategis. Selanjutnya, kota ini termasuk kota yang sejuk, jauh dari hingar bingar arus modernisasi yang bisa merusak akidah, seperti diskotik, bar dan lain sejenisnya.</p>\r\n<p>Karena itu, Padang Panjang sungguh sangat tepat menjadi tempat belajar bagi para santri. Dan sangat tepat pula untuk menanamkan investasi dunia dan akhirat bagi para pendiri Pondok-Pondok Pesantren.</p>\r\n<p>Kalau kembali kita buka lembaran sejarah, kita niscaya akan dapat membaca secara tersirat, bahwa Padang panjang sudah sangat teruji dalam hal pengembangan agama Islam. Berbagai rintangan dan halangan telah ia lalui mulai sejak negeri ini berada di era penjajahan.</p>\r\n<p>Pasang surut masa keemasan dan kemunduran Padang Panjang sebagai kota perdagangan dan pusat pengembangan agama Islam sejak dulu, telah dapat dikategorikan kota ini sebagai kota yang telah lolos dari berbagai ujian berat dan ringan.</p>\r\n<p>Kalau kita buka berbagai buku literatur tentang riwayat hidup seseorang atau sejarah perjalanan sebuah bangsa, termasuk buku perjalanan hidup Rasul Yang Agung Muhammad dari kelahiran kelahiran hingga detik-detik terakhir, yang ditulis Syaikh Shaiyyurrahman al-Mubarakfury, buku berjudul Mencari Tuhan Yang Hilang Yang Hilang dan sejumlah buku lainnya, semuanya secara umumu meriwayatkan bahwa kecermelangan dan kemunduran yang silih berganti. Namun pada intinya, suatu keberhasilan yang dicapai oleh sebuah bangsa atau seseorang, pada umumnya didahului oleh ujian atau rintangan. Itu pulalah agaknya orang bijak mengatakan, bahwa taklah punya makna suatu keberhasilan jika tidak didahului oleh penderitaan atau rintangan. Padang Panjang telah melewati semuanya.</p>', 'Misteri_Jembatan_Kembar_Padang.jpg', 1, '3', 'Misteri Jembatan Kembar Padang', '<p>Misteri Jembatan Kembar Padang</p>', 'Misteri Jembatan Kembar Padang'),
(17, 'Mitos Hantu Palasik', '<p><span>Palasik "</span><em>Parasi</em><span>t"adalah makhluk yang sangat mengganggu para kaum ibu-ibu minang &nbsp;membuat kekawatiran tentang buah hati mereka di ranah minang, jarang ibu-ibu minang membawa anak nya keluar rumah siang maupun &nbsp;malam hari, palasik di gunakan oleh orang yang mempunyai ilmu hitam yang tidak baik lagi jika ayahnya palasik maka anak nya juga palasik di minangkabau sesama palasik harus di nikah kan sesama pungguna palasik dan di kucilkan dalam lingkungan masyarakat bentuk palasik sudah di ketahui yaitu seperti kepala dengan isi perut yang terlihat ia terbang melayang biasa nya kepala tersebut ada penggunanya dan penggunanya akan di temukan di suatu tempat tampa kepala sama sekali ia mengincar anak-anak kecil yang benak kepala nya masih terlihat bergerak ubun-ubun kepala maksudnya, ia akan memakan benak anak kecil yang masih bergerak tersebut dan si palasik akan bertahan tampa makanan selama setahun mau perbulan dengan memangsa anak kecil ia dapat abadi tampa makanan untuk menangkal palasik ini dengan memegang lidi saat perjalan keluar rumah bisa pun dengan memegang bawang putih jika anak sudah terkena palasik cara nya ialah dengan di bawa ke orang hebat (dukun) ustad atau pun juga bisa langsung ke orang tersebut si pengguna palasik.</span></p>', 'Mitos_Hantu_Palasik.jpg', 1, '10', 'Mitos Hantu Palasik', '<p>Mitos Hantu Palasik</p>', 'Mitos Hantu Palasik'),
(19, 'Legenda Hantu Ngeak', '<p><span>Hantu ini yang buat saya ini kurang menakutkan karena ini hanya menggangu telinga tetapi sesekali pandangan ! di minang kabau terjadinya hantu ngeak ini karena adanya seorang ibu yang menggugur kan kandungan nya dan akhirnya kandungan akan tidak beristirahat dengan tenang dan mencari ibunya ia hampir mirip dengan kelelawar dengan wajah seperti wajah manusia aku pernah mendengarnya 2 kali di hidupku sekarang ini tapi aku belum pernah melihatnya tapi orang tua ku sudah pernah melihat dengan mata telanjang ia sering mengganggu manusia dengan tangisanya seperti bayi.&nbsp;</span></p>', 'Legenda_Hantu_Ngeak.jpg', 1, '9', 'Legenda Hantu Ngeak', '<p>Legenda Hantu Ngeak</p>', 'Legenda Hantu Ngeak'),
(20, 'Mitos Hantu Siampa', '<p>Makhluk ini hampir mirip dengan Gunderuwo cuman perbedaan fisik dan perilaku :D <br />siampa adalah makhluk yang sangat senang jika ada majikannya jika siampa yang tidak ada majikanya biasa nya akan sering bermunculan di sore hari dan juga sekitar jam 3 malam.<br />biasa nya ia di temui di tempat tempat agak kumuh contoh rumah gadang yang tidak terurus lagi ataupun tempat dukun yang agak sedikit kotor biasanya orag orang memelihara siampa ini cuman untuk menjaga benda , hewan ternak,kebun cabe dll. <br />Di ranah minang anak muda suka sekali mencuri ayam untuk di santap bersama sama dan si punya ayam biasanya menggunakan siampa untuk menjaga ayam - ayam nya agar tidak di curi, tumbal untuk siampa ini tidak minta nyawa tapi sesuatu yang jorok contoh nya menjaili majikannya seperti ini dengan meletak jari telunjuk yang sudah di potong ke dalam nasi yang baru di masak , mengaduk aduk sambal randang di malam hari dengan tangan kiri nya menangis di malam hari jika majikanya meninggal dan suara tangisan yang menyerupai seorang gadis.</p>', 'Mitos_Hantu_Siampa.jpg', 1, '10', 'Mitos Hantu Siampa', '<p>Mitos Hantu Siampa</p>', 'Mitos Hantu Siampa');

-- --------------------------------------------------------

--
-- Table structure for table `tb_slider`
--

CREATE TABLE IF NOT EXISTS `tb_slider` (
  `id_slider` int(11) NOT NULL AUTO_INCREMENT,
  `slider_judul` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `slider_deskripsi` text CHARACTER SET latin1 COLLATE latin1_general_ci,
  `slider_gambar` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_slider`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `foto`) VALUES
(0, 'ew', 'edwin.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE IF NOT EXISTS `user_type` (
  `user_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_type_name` varchar(200) NOT NULL,
  PRIMARY KEY (`user_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`user_type_id`, `user_type_name`) VALUES
(1, 'Administrator');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
