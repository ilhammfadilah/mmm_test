-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2022 at 03:44 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pt_mmmtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_2ddesaindetail`
--

CREATE TABLE `tbl_2ddesaindetail` (
  `id_detail` int(11) NOT NULL,
  `id_header` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `submodel` varchar(50) DEFAULT NULL,
  `id_tipe` varchar(50) NOT NULL,
  `id_warna` varchar(50) NOT NULL,
  `id_material` varchar(50) NOT NULL,
  `beratmaterial` varchar(50) NOT NULL,
  `ukuran` varchar(50) NOT NULL,
  `id_finishing` varchar(50) NOT NULL,
  `id_konsepkepala` varchar(50) NOT NULL,
  `id_warnaproduk` varchar(50) NOT NULL,
  `id_ongkos` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `hargamaterial` varchar(50) NOT NULL,
  `hargadiamond` varchar(50) NOT NULL,
  `hargakepala` varchar(50) NOT NULL,
  `ongkos` varchar(50) NOT NULL,
  `totalharga` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `totaljumlah` varchar(50) NOT NULL,
  `totalberat` varchar(50) NOT NULL,
  `jsfinishing` varchar(50) NOT NULL,
  `jspolesrangka` varchar(50) NOT NULL,
  `jspasangbatu` varchar(50) NOT NULL,
  `jsrakit` varchar(50) NOT NULL,
  `jspoleschrome` varchar(50) NOT NULL,
  `approvedjs` varchar(50) NOT NULL,
  `approveddate` date NOT NULL,
  `gambar1` varchar(50) NOT NULL,
  `gambar2` varchar(50) NOT NULL,
  `gambar3` varchar(50) NOT NULL,
  `gambar4` varchar(50) NOT NULL,
  `gambar5` varchar(50) NOT NULL,
  `video1` varchar(50) NOT NULL,
  `video2` varchar(50) NOT NULL,
  `video3` varchar(50) NOT NULL,
  `deleted` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_2ddesainheader`
--

CREATE TABLE `tbl_2ddesainheader` (
  `id_header` int(11) NOT NULL,
  `nomor` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `id_karyawan` varchar(50) NOT NULL,
  `id_client` varchar(50) NOT NULL,
  `disetujui_1` varchar(50) DEFAULT NULL,
  `date_1` date DEFAULT NULL,
  `disetujui_2` varchar(50) DEFAULT NULL,
  `date_2` date DEFAULT NULL,
  `disetujui_3` varchar(50) DEFAULT NULL,
  `date_3` date DEFAULT NULL,
  `disetujui41` varchar(50) DEFAULT NULL,
  `date_4` date DEFAULT NULL,
  `disetujui_5` varchar(50) DEFAULT NULL,
  `date_5` date DEFAULT NULL,
  `deleted` int(1) NOT NULL,
  `create_by` varchar(50) NOT NULL,
  `create_date` date NOT NULL,
  `update_by` varchar(50) NOT NULL,
  `update_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_2ddesainkepala`
--

CREATE TABLE `tbl_2ddesainkepala` (
  `id_subdetailkepala` int(11) NOT NULL,
  `id_detail` int(11) NOT NULL,
  `id_barang` varchar(50) NOT NULL,
  `jumlah` varchar(50) DEFAULT NULL,
  `harga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_2ddesainsubdetail`
--

CREATE TABLE `tbl_2ddesainsubdetail` (
  `id_subdetail` int(11) NOT NULL,
  `id_detail` int(11) NOT NULL,
  `id_parcel` varchar(50) NOT NULL,
  `jumlah` varchar(50) DEFAULT NULL,
  `berat` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `id_user` varchar(50) NOT NULL,
  `deleted` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_2ddesainsubdetail`
--

INSERT INTO `tbl_2ddesainsubdetail` (`id_subdetail`, `id_detail`, `id_parcel`, `jumlah`, `berat`, `harga`, `id_user`, `deleted`) VALUES
(3, 0, '12', '1', '2', '2000000', '1', '0'),
(4, 0, '13', '1', '2', '1500000', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bagian`
--

CREATE TABLE `tbl_bagian` (
  `id_bagian` int(11) NOT NULL,
  `bagian` varchar(50) NOT NULL,
  `deleted` int(1) NOT NULL,
  `create_by` varchar(50) NOT NULL,
  `create_date` date NOT NULL,
  `update_by` varchar(50) NOT NULL,
  `update_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_bagian`
--

INSERT INTO `tbl_bagian` (`id_bagian`, `bagian`, `deleted`, `create_by`, `create_date`, `update_by`, `update_date`) VALUES
(3, 'Web Developer', 1, 'AnggaKP', '2022-07-14', 'AnggaKP', '2022-07-14'),
(4, 'DESIGN MANAGER', 0, 'AnggaKP', '2022-07-14', 'AnggaKP', '2022-07-29'),
(5, 'DESIGNER 2D', 0, 'AnggaKP', '2022-07-14', 'AnggaKP', '2022-07-29'),
(6, 'SALESMAN', 0, 'AnggaKP', '2022-07-29', '', '0000-00-00'),
(7, 'SALES MANAGER', 0, 'AnggaKP', '2022-07-29', '', '0000-00-00'),
(8, 'BOD', 0, 'AnggaKP', '2022-07-29', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bahanbaku`
--

CREATE TABLE `tbl_bahanbaku` (
  `id_bahanbaku` int(11) NOT NULL,
  `bahanbaku` varchar(50) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `deleted` int(1) NOT NULL,
  `create_by` varchar(50) NOT NULL,
  `create_date` date NOT NULL,
  `update_by` varchar(50) NOT NULL,
  `update_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_bahanbaku`
--

INSERT INTO `tbl_bahanbaku` (`id_bahanbaku`, `bahanbaku`, `satuan`, `deleted`, `create_by`, `create_date`, `update_by`, `update_date`) VALUES
(3, 'Cairan Kimias', 'Meter', 1, 'AnggaKP', '2022-07-12', 'AnggaKP', '2022-07-12'),
(4, 'contoh', 'contoh', 1, 'AnggaKP', '2022-07-20', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bsis`
--

CREATE TABLE `tbl_bsis` (
  `id_bsis` int(11) NOT NULL,
  `namaakun` varchar(50) NOT NULL,
  `normal` varchar(50) NOT NULL,
  `pengurang` varchar(50) NOT NULL,
  `bsis` varchar(50) NOT NULL,
  `akun` varchar(50) NOT NULL,
  `deleted` int(1) NOT NULL,
  `create_by` varchar(50) NOT NULL,
  `create_date` date NOT NULL,
  `update_by` varchar(50) NOT NULL,
  `update_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_bsis`
--

INSERT INTO `tbl_bsis` (`id_bsis`, `namaakun`, `normal`, `pengurang`, `bsis`, `akun`, `deleted`, `create_by`, `create_date`, `update_by`, `update_date`) VALUES
(2, 'CURRENT ASSETS', 'D', 'N', 'B', '1', 0, 'AnggaKP', '2022-07-13', 'AnggaKP', '2022-07-13'),
(3, 'FIXED ASSETS', 'D', 'N', 'B', '2', 0, 'AnggaKP', '2022-07-13', '', '0000-00-00'),
(4, 'LIABILITIES', 'C', 'N', 'B', '3', 0, 'AnggaKP', '2022-07-13', '', '0000-00-00'),
(5, 'EQUITY', 'C', 'N', 'B', '4', 0, 'AnggaKP', '2022-07-13', '', '0000-00-00'),
(6, 'INCOME', 'D', 'N', 'I', '5', 0, 'AnggaKP', '2022-07-13', '', '0000-00-00'),
(7, 'EXPENSE', 'C', 'Y', 'I', '6', 0, 'AnggaKP', '2022-07-13', '', '0000-00-00'),
(9, 'Contoh', 'D', 'Y', 'B', '7', 0, 'AnggaKP', '2022-07-14', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cashbankdetail`
--

CREATE TABLE `tbl_cashbankdetail` (
  `id_cashbankdetail` int(11) NOT NULL,
  `id_cashbankheader` varchar(50) NOT NULL,
  `nomor` varchar(50) NOT NULL,
  `akun` varchar(50) NOT NULL,
  `nilai` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `deleted` int(1) NOT NULL,
  `create_by` varchar(50) NOT NULL,
  `create_date` date NOT NULL,
  `update_by` varchar(50) NOT NULL,
  `update_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cashbankdetail`
--

INSERT INTO `tbl_cashbankdetail` (`id_cashbankdetail`, `id_cashbankheader`, `nomor`, `akun`, `nilai`, `keterangan`, `deleted`, `create_by`, `create_date`, `update_by`, `update_date`) VALUES
(1, '1', '00001', '100,01', '12.000', 'KAS KECIL ', 0, 'AnggaKP', '2022-07-22', '', '0000-00-00'),
(2, '0', '2', '100,02', '21.111', 'KAS BESAR', 1, 'AnggaKP', '2022-07-22', '', '0000-00-00'),
(3, '2', '00002', '100,01', '11.458', 'KAS KECIL ', 0, 'AnggaKP', '2022-07-22', 'AnggaKP', '2022-07-22'),
(4, '3', '00003', '100,02', '11.547', 'KAS BESAR', 0, 'AnggaKP', '2022-07-22', 'AnggaKP', '2022-07-22'),
(5, '4', '00004', '100,02', '12.755', 'KAS BESAR', 0, 'AnggaKP', '2022-07-22', '', '0000-00-00'),
(6, '0', '2', '100,02', '2', 'KAS BESAR', 0, 'AnggaKP', '2022-12-27', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cashbankheader`
--

CREATE TABLE `tbl_cashbankheader` (
  `id_cashbankheader` varchar(20) NOT NULL,
  `id_matauang` varchar(50) NOT NULL,
  `inout` varchar(50) NOT NULL,
  `nomor` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `typetransaksi` varchar(50) NOT NULL,
  `rate` varchar(50) NOT NULL,
  `subaccount` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL,
  `memo` varchar(50) NOT NULL,
  `deleted` int(1) NOT NULL,
  `create_by` varchar(50) NOT NULL,
  `create_date` date NOT NULL,
  `update_by` varchar(50) NOT NULL,
  `update_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cashbankheader`
--

INSERT INTO `tbl_cashbankheader` (`id_cashbankheader`, `id_matauang`, `inout`, `nomor`, `tanggal`, `typetransaksi`, `rate`, `subaccount`, `total`, `memo`, `deleted`, `create_by`, `create_date`, `update_by`, `update_date`) VALUES
('1', '4', 'I', '00001', '2022-07-22', 'Reguler', '1.00', '1234567891', '24 ', '', 0, 'AnggaKP', '2022-07-22', '', '0000-00-00'),
('2', '4', 'I', '00002', '2022-07-22', 'Reguler', '1.00', '1234567891', '22.916 ', '', 0, 'AnggaKP', '2022-07-22', '', '0000-00-00'),
('3', '4', 'I', '00003', '2022-07-22', 'Reguler', '1.00', '1234567891', '23.094 ', '', 0, 'AnggaKP', '2022-07-22', '', '0000-00-00'),
('4', '4', 'I', '00004', '2022-07-22', 'Reguler', '1.00', '1234567891', '25.51 ', '', 0, 'AnggaKP', '2022-07-22', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cashbanklawan`
--

CREATE TABLE `tbl_cashbanklawan` (
  `id_cashbanklawan` int(11) NOT NULL,
  `id_cashbankheader` varchar(50) NOT NULL,
  `nomor` varchar(50) NOT NULL,
  `akun` varchar(50) NOT NULL,
  `nilai` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `deleted` int(1) NOT NULL,
  `create_by` varchar(50) NOT NULL,
  `create_date` date NOT NULL,
  `update_by` varchar(50) NOT NULL,
  `update_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cashbanklawan`
--

INSERT INTO `tbl_cashbanklawan` (`id_cashbanklawan`, `id_cashbankheader`, `nomor`, `akun`, `nilai`, `keterangan`, `deleted`, `create_by`, `create_date`, `update_by`, `update_date`) VALUES
(1, '1', '00001', '100,01', '12.000', 'KAS KECIL ', 0, 'AnggaKP', '2022-07-22', 'AnggaKP', '2022-07-22'),
(2, '0', '2', '100,01', '23.222', 'KAS KECIL ', 1, 'AnggaKP', '2022-07-22', '', '0000-00-00'),
(3, '2', '00002', '100,01', '11.458', 'KAS KECIL ', 0, 'AnggaKP', '2022-07-22', 'AnggaKP', '2022-07-22'),
(4, '3', '00003', '100,01', '11.547', 'KAS KECIL ', 0, 'AnggaKP', '2022-07-22', 'AnggaKP', '2022-07-22'),
(5, '4', '00004', '100,01', '12.755', 'KAS KECIL ', 0, 'AnggaKP', '2022-07-22', 'AnggaKP', '2022-07-22'),
(6, '0', '2', '100,02', '1000', 'KAS BESAR', 1, 'AnggaKP', '2022-07-29', '', '0000-00-00'),
(7, '0', '2', '100,02', '3', 'KAS BESAR', 0, 'AnggaKP', '2022-12-27', '', '0000-00-00'),
(8, '0', '2', '100,02', '3', 'KAS BESAR', 1, 'AnggaKP', '2022-12-27', '', '0000-00-00'),
(9, '0', '2', '100,02', '3', 'KAS BESAR', 1, 'AnggaKP', '2022-12-27', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clarity`
--

CREATE TABLE `tbl_clarity` (
  `id_clarity` int(11) NOT NULL,
  `clarity` varchar(50) NOT NULL,
  `deleted` int(1) NOT NULL,
  `create_by` varchar(50) NOT NULL,
  `create_date` date NOT NULL,
  `update_by` varchar(50) DEFAULT NULL,
  `update_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_clarity`
--

INSERT INTO `tbl_clarity` (`id_clarity`, `clarity`, `deleted`, `create_by`, `create_date`, `update_by`, `update_date`) VALUES
(2, 'VVS2', 1, 'AnggaKP', '2022-07-11', 'AnggaKP', '2022-07-11'),
(4, 'VVS1', 0, 'AnggaKP', '2022-07-11', NULL, NULL),
(5, 'VVS3', 1, 'AnggaKP', '2022-07-12', 'AnggaKP', '2022-07-12'),
(6, 'VVS3', 1, 'AnggaKP', '2022-07-12', NULL, NULL),
(7, 'AS2', 0, 'AnggaKP', '2022-07-12', 'AnggaKP', '2022-07-12'),
(8, 'x', 1, 'AnggaKP', '2022-07-12', NULL, NULL),
(9, 'b', 1, 'AnggaKP', '2022-07-12', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client`
--

CREATE TABLE `tbl_client` (
  `id_client` int(11) NOT NULL,
  `subaccount` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kodepos` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `kontak` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `npwp` varchar(50) NOT NULL,
  `deleted` int(1) NOT NULL,
  `create_by` varchar(50) NOT NULL,
  `create_date` date NOT NULL,
  `update_by` varchar(50) NOT NULL,
  `update_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_client`
--

INSERT INTO `tbl_client` (`id_client`, `subaccount`, `nama`, `alamat`, `kota`, `provinsi`, `kodepos`, `phone`, `kontak`, `email`, `npwp`, `deleted`, `create_by`, `create_date`, `update_by`, `update_date`) VALUES
(3, '1234567891', 'PT. Mita Express, Peter Jonatan', 'Medan', 'Medan', 'Sumatra Utara', '46211', '+62812563211256', 'Nugroho Chandra, Slamet', 'peter@gmail.com', '12345678909', 1, 'AnggaKP', '2022-07-12', 'AnggaKP', '2022-07-12'),
(4, '123456789112', 'Angga Kusuma Putra', 'ciamis', 'Ciamis', 'jawa barat', '46211', '+6285861085294', 'Angga Kusuma Putra', 'angga@gmail.com', '12345678909', 0, 'AnggaKP', '2022-07-13', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_coa`
--

CREATE TABLE `tbl_coa` (
  `id_coa` int(11) NOT NULL,
  `id_groupakun` varchar(15) DEFAULT NULL,
  `kode` int(11) DEFAULT NULL,
  `akun` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `namaakun` varchar(50) NOT NULL,
  `headerdetail` varchar(50) DEFAULT NULL,
  `deleted` int(1) NOT NULL,
  `create_by` varchar(50) NOT NULL,
  `create_date` date NOT NULL,
  `update_by` varchar(50) NOT NULL,
  `update_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_coa`
--

INSERT INTO `tbl_coa` (`id_coa`, `id_groupakun`, `kode`, `akun`, `level`, `namaakun`, `headerdetail`, `deleted`, `create_by`, `create_date`, `update_by`, `update_date`) VALUES
(2, NULL, 2, '2', '1', 'FIXED ASSETS', 'H', 0, 'AnggaKP', '2022-07-13', 'AnggaKP', '2022-07-13'),
(3, NULL, 3, '3', '1', 'LIABILITIES', 'H', 0, 'AnggaKP', '2022-07-13', 'AnggaKP', '2022-07-14'),
(4, NULL, 4, '4', '1', 'EQUITY', 'H', 0, 'AnggaKP', '2022-07-13', '', '0000-00-00'),
(5, NULL, 5, '5', '1', 'INCOME', 'H', 0, 'AnggaKP', '2022-07-13', '', '0000-00-00'),
(6, NULL, 6, '6', '1', 'EXPENSE', 'H', 0, 'AnggaKP', '2022-07-13', 'AnggaKP', '2022-07-13'),
(34, NULL, 1, '1', '1', 'CURRENT ASSETS', 'H', 0, 'AnggaKP', '2022-07-13', 'AnggaKP', '2022-07-13'),
(95, NULL, 1, '10', '2', 'KAS - BANK ', 'H', 0, 'AnggaKP', '2022-07-15', '', '0000-00-00'),
(96, NULL, 1, '100', '3', 'KAS', 'H', 0, 'AnggaKP', '2022-07-15', '', '0000-00-00'),
(97, '3', 1, '100,01', '4', 'KAS KECIL ', 'D', 0, 'AnggaKP', '2022-07-15', 'AnggaKP', '2022-07-15'),
(98, '3', 1, '100,02', '4', 'KAS BESAR', 'D', 0, 'AnggaKP', '2022-07-15', '', '0000-00-00'),
(99, '3', 1, '100,03', '4', 'contoh', 'D', 0, 'AnggaKP', '2022-07-20', '', '0000-00-00'),
(100, '', 2, '20', '2', 'contoh', 'H', 0, 'AnggaKP', '2022-07-20', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_color`
--

CREATE TABLE `tbl_color` (
  `id_color` int(11) NOT NULL,
  `color` varchar(50) NOT NULL,
  `deleted` int(1) NOT NULL,
  `create_by` varchar(50) NOT NULL,
  `create_date` date NOT NULL,
  `update_by` varchar(50) DEFAULT NULL,
  `update_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_color`
--

INSERT INTO `tbl_color` (`id_color`, `color`, `deleted`, `create_by`, `create_date`, `update_by`, `update_date`) VALUES
(2, 'G/H', 1, 'AnggaKP', '2022-07-11', 'AnggaKP', '2022-07-11'),
(3, 'D/E/F', 0, 'AnggaKP', '2022-07-12', 'AnggaKP', '2022-07-12'),
(4, 'G/H', 0, 'AnggaKP', '2022-07-12', 'AnggaKP', '2022-07-12'),
(5, 'D/E/F/H', 1, 'AnggaKP', '2022-07-12', 'AnggaKP', '2022-07-12'),
(6, 's', 1, 'AnggaKP', '2022-07-12', NULL, NULL),
(7, 'a', 1, 'AnggaKP', '2022-07-12', NULL, NULL),
(8, 'a', 1, 'AnggaKP', '2022-07-12', NULL, NULL),
(9, 'x', 1, 'AnggaKP', '2022-07-12', NULL, NULL),
(10, 'dsd12', 1, 'AnggaKP', '2022-07-12', 'AnggaKP', '2022-07-12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_costcenter`
--

CREATE TABLE `tbl_costcenter` (
  `id_costcenter` int(11) NOT NULL,
  `kodecostcenter` varchar(50) NOT NULL,
  `namacostcenter` varchar(50) NOT NULL,
  `deleted` int(1) NOT NULL,
  `create_by` varchar(50) NOT NULL,
  `create_date` date NOT NULL,
  `update_by` varchar(50) NOT NULL,
  `update_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_costcenter`
--

INSERT INTO `tbl_costcenter` (`id_costcenter`, `kodecostcenter`, `namacostcenter`, `deleted`, `create_by`, `create_date`, `update_by`, `update_date`) VALUES
(6, '1', 'Contoh', 0, 'AnggaKP', '2022-07-13', '', '0000-00-00'),
(7, '2', 'Baik', 0, 'AnggaKP', '2022-07-13', '', '0000-00-00'),
(8, '3', 'Cantik', 0, 'AnggaKP', '2022-07-13', 'AnggaKP', '2022-07-13'),
(9, '21', 'Contoh lagi', 0, 'AnggaKP', '2022-07-13', '', '0000-00-00'),
(10, '12', 'Angga', 0, 'AnggaKP', '2022-07-13', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detailbarang`
--

CREATE TABLE `tbl_detailbarang` (
  `id_detail` int(11) NOT NULL,
  `kode_jenis` varchar(50) NOT NULL,
  `kode_barang` varchar(50) NOT NULL,
  `samplesatu` varchar(50) DEFAULT NULL,
  `sampledua` varchar(50) DEFAULT NULL,
  `sampletiga` varchar(50) DEFAULT NULL,
  `sampleempat` varchar(50) DEFAULT NULL,
  `samplelima` varchar(50) DEFAULT NULL,
  `sampleenam` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_detailbarang`
--

INSERT INTO `tbl_detailbarang` (`id_detail`, `kode_jenis`, `kode_barang`, `samplesatu`, `sampledua`, `sampletiga`, `sampleempat`, `samplelima`, `sampleenam`) VALUES
(10, 'D00001', 'BRG-00001', 'contoh sample', 'Contoh sample dua', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_diagroup`
--

CREATE TABLE `tbl_diagroup` (
  `id_diagroup` int(11) NOT NULL,
  `diagroup` varchar(50) NOT NULL,
  `deleted` int(1) NOT NULL,
  `create_by` varchar(50) NOT NULL,
  `create_date` date NOT NULL,
  `update_by` varchar(50) DEFAULT NULL,
  `update_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_diagroup`
--

INSERT INTO `tbl_diagroup` (`id_diagroup`, `diagroup`, `deleted`, `create_by`, `create_date`, `update_by`, `update_date`) VALUES
(5, 'MELE', 0, 'AnggaKP', '2022-07-12', NULL, NULL),
(6, 'STAR', 0, 'AnggaKP', '2022-07-12', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_diameter`
--

CREATE TABLE `tbl_diameter` (
  `id_diameter` int(11) NOT NULL,
  `id_diagroup` varchar(50) NOT NULL,
  `diameter_from` varchar(50) NOT NULL,
  `diameter_to` varchar(50) NOT NULL,
  `carat` varchar(50) NOT NULL,
  `deleted` int(1) NOT NULL,
  `create_by` varchar(50) NOT NULL,
  `create_date` date NOT NULL,
  `update_by` varchar(50) DEFAULT NULL,
  `update_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_diameter`
--

INSERT INTO `tbl_diameter` (`id_diameter`, `id_diagroup`, `diameter_from`, `diameter_to`, `carat`, `deleted`, `create_by`, `create_date`, `update_by`, `update_date`) VALUES
(4, '5', '0,09', '0,11', '2', 0, 'AnggaKP', '2022-07-12', 'AnggaKP', '2022-07-12'),
(5, '6', '0,09', '0,11', '3', 0, 'AnggaKP', '2022-07-12', 'AnggaKP', '2022-07-12'),
(6, '6', '0,10', '0,12', '3', 0, 'AnggaKP', '2022-07-12', 'AnggaKP', '2022-07-12'),
(7, '5', '0,12', '0,15', '3', 0, 'AnggaKP', '2022-07-12', 'AnggaKP', '2022-07-12'),
(8, '5', '0,16', '0,17', '3', 0, 'AnggaKP', '2022-07-12', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_finishing`
--

CREATE TABLE `tbl_finishing` (
  `id_finishing` int(11) NOT NULL,
  `finishing` varchar(50) NOT NULL,
  `deleted` int(1) NOT NULL,
  `create_by` varchar(50) NOT NULL,
  `create_date` date NOT NULL,
  `update_by` varchar(50) NOT NULL,
  `update_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_finishing`
--

INSERT INTO `tbl_finishing` (`id_finishing`, `finishing`, `deleted`, `create_by`, `create_date`, `update_by`, `update_date`) VALUES
(3, 'Glossy,', 1, 'AnggaKP', '2022-07-14', 'AnggaKP', '2022-07-14'),
(5, 'contoh', 0, 'AnggaKP', '2022-07-20', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_groupakun`
--

CREATE TABLE `tbl_groupakun` (
  `id_groupakun` int(11) NOT NULL,
  `groupakun` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deleted` int(1) NOT NULL,
  `create_by` varchar(50) NOT NULL,
  `create_date` date NOT NULL,
  `update_by` varchar(50) NOT NULL,
  `update_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_groupakun`
--

INSERT INTO `tbl_groupakun` (`id_groupakun`, `groupakun`, `nama`, `deleted`, `create_by`, `create_date`, `update_by`, `update_date`) VALUES
(3, 'CASH BANK', 'Kas Kecil', 0, 'AnggaKP', '2022-07-15', 'AnggaKP', '2022-07-15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_karyawan`
--

CREATE TABLE `tbl_karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `id_bagian` varchar(30) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kodepos` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `kontak` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `npwp` varchar(50) NOT NULL,
  `tanggalmasuk` date NOT NULL,
  `deleted` int(1) NOT NULL,
  `create_by` varchar(50) NOT NULL,
  `create_date` date NOT NULL,
  `update_by` varchar(50) NOT NULL,
  `update_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_karyawan`
--

INSERT INTO `tbl_karyawan` (`id_karyawan`, `id_bagian`, `nik`, `nama`, `alamat`, `kota`, `provinsi`, `kodepos`, `phone`, `kontak`, `email`, `npwp`, `tanggalmasuk`, `deleted`, `create_by`, `create_date`, `update_by`, `update_date`) VALUES
(5, '4', '1271122810000003', 'Angga Kusuma Putra', 'Lingkungan Limusnunggal', 'Ciamis', 'Jawa Barat', '46211', '+6285861085294', 'Angga Kusuma Putra', 'anggakp@gmail.com', '123124512312451', '2022-07-13', 0, 'AnggaKP', '2022-07-12', 'AnggaKP', '2022-07-14'),
(6, '5', '12312414553453453', 'Putra Kusuma', 'ciamis', 'Ciamis', 'jawa barat', '46211', '+62812563211256', 'Nugroho Chandra, Slamet', 'angga@gmail.com', '1231251512', '2022-07-14', 1, 'AnggaKP', '2022-07-14', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_konsepkepala`
--

CREATE TABLE `tbl_konsepkepala` (
  `id_konsepkepala` int(11) NOT NULL,
  `konsepkepala` varchar(50) NOT NULL,
  `deleted` int(1) NOT NULL,
  `create_by` varchar(50) NOT NULL,
  `create_date` date NOT NULL,
  `update_by` varchar(50) NOT NULL,
  `update_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_konsepkepala`
--

INSERT INTO `tbl_konsepkepala` (`id_konsepkepala`, `konsepkepala`, `deleted`, `create_by`, `create_date`, `update_by`, `update_date`) VALUES
(1, 'Contoh saja', 0, 'AnggaKP', '2022-07-29', '', '0000-00-00'),
(2, 'Ini contoh yaa', 0, 'AnggaKP', '2022-07-29', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kurs`
--

CREATE TABLE `tbl_kurs` (
  `id_kurs` int(11) NOT NULL,
  `id_matauang` varchar(50) NOT NULL,
  `rate` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `deleted` int(1) NOT NULL,
  `create_by` varchar(50) NOT NULL,
  `create_date` date NOT NULL,
  `update_by` varchar(50) NOT NULL,
  `update_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kurs`
--

INSERT INTO `tbl_kurs` (`id_kurs`, `id_matauang`, `rate`, `tanggal`, `deleted`, `create_by`, `create_date`, `update_by`, `update_date`) VALUES
(10, '4', 1, '2022-07-15 05:16:34', 0, 'AnggaKP', '2022-07-15', 'AnggaKP', '2022-07-15'),
(11, '3', 14975, '2022-07-18 09:41:24', 0, 'AnggaKP', '2022-07-18', '', '0000-00-00'),
(12, '3', 15000, '2022-07-18 09:42:01', 0, 'AnggaKP', '2022-07-18', '', '0000-00-00'),
(13, '5', 15000, '2022-07-29 11:37:41', 0, 'AnggaKP', '2022-07-29', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_matauang`
--

CREATE TABLE `tbl_matauang` (
  `id_matauang` int(11) NOT NULL,
  `kodematauang` varchar(50) NOT NULL,
  `namamatauang` varchar(50) NOT NULL,
  `deleted` int(1) NOT NULL,
  `create_by` varchar(50) NOT NULL,
  `create_date` date NOT NULL,
  `update_by` varchar(50) NOT NULL,
  `update_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_matauang`
--

INSERT INTO `tbl_matauang` (`id_matauang`, `kodematauang`, `namamatauang`, `deleted`, `create_by`, `create_date`, `update_by`, `update_date`) VALUES
(3, 'USD', 'United State Dollar', 0, 'AnggaKP', '2022-07-12', 'AnggaKP', '2022-07-12'),
(4, 'IDR', 'Indonesia Rupiah', 0, 'AnggaKP', '2022-07-15', '', '0000-00-00'),
(5, 'SGD', 'Singapore Dollar', 0, 'AnggaKP', '2022-07-15', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_material`
--

CREATE TABLE `tbl_material` (
  `id_material` int(11) NOT NULL,
  `material` varchar(50) NOT NULL,
  `satuan` varchar(30) NOT NULL,
  `deleted` int(1) NOT NULL,
  `create_by` varchar(50) NOT NULL,
  `create_date` date NOT NULL,
  `update_by` varchar(50) NOT NULL,
  `update_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_material`
--

INSERT INTO `tbl_material` (`id_material`, `material`, `satuan`, `deleted`, `create_by`, `create_date`, `update_by`, `update_date`) VALUES
(3, 'White Gold 750', 'Gram', 0, 'AnggaKP', '2022-07-12', 'AnggaKP', '2022-07-12'),
(4, 'WhiteGold', 'Gram', 0, 'AnggaKP', '2022-07-20', 'AnggaKP', '2022-07-29'),
(5, 'Contoh', 'Kilogram', 0, 'AnggaKP', '2022-07-29', '', '0000-00-00'),
(6, 'Contoh Saja', 'Kilogram', 0, 'AnggaKP', '2022-07-29', '', '0000-00-00'),
(7, 'Emas Murni', 'Kilogram', 0, 'AnggaKP', '2022-07-29', '', '0000-00-00'),
(8, 'Emas Unggul', 'Kilogram', 0, 'AnggaKP', '2022-07-29', '', '0000-00-00'),
(9, 'WhiteGold', 'KIlogram', 0, 'AnggaKP', '2022-07-20', 'AnggaKP', '2022-07-29'),
(10, 'WhiteGold', 'Kg', 0, 'AnggaKP', '2022-07-20', 'AnggaKP', '2022-07-29'),
(11, 'WhiteGold', 'G', 0, 'AnggaKP', '2022-07-20', 'AnggaKP', '2022-07-29'),
(12, 'WhiteGold', 'Kg', 0, 'AnggaKP', '2022-07-20', 'AnggaKP', '2022-07-29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ongkos`
--

CREATE TABLE `tbl_ongkos` (
  `id_ongkos` int(11) NOT NULL,
  `ongkos` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `deleted` int(1) NOT NULL,
  `create_by` varchar(50) NOT NULL,
  `create_date` date NOT NULL,
  `update_by` varchar(50) NOT NULL,
  `update_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_ongkos`
--

INSERT INTO `tbl_ongkos` (`id_ongkos`, `ongkos`, `harga`, `deleted`, `create_by`, `create_date`, `update_by`, `update_date`) VALUES
(1, 'ongkos sample', '50000', 0, 'AnggaKP', '2022-07-29', '', '0000-00-00'),
(2, 'fee', '55000', 0, 'AnggaKP', '2022-07-29', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_parcel`
--

CREATE TABLE `tbl_parcel` (
  `id_parcel` int(11) NOT NULL,
  `parcel` varchar(50) NOT NULL,
  `id_diameter` varchar(50) NOT NULL,
  `id_clarity` varchar(50) NOT NULL,
  `id_shape` varchar(50) NOT NULL,
  `id_color` varchar(50) NOT NULL,
  `hargabeli` varchar(50) NOT NULL,
  `hargajual` varchar(50) NOT NULL,
  `deleted` varchar(1) NOT NULL,
  `create_by` varchar(50) NOT NULL,
  `create_date` date NOT NULL,
  `update_by` varchar(50) DEFAULT NULL,
  `update_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_parcel`
--

INSERT INTO `tbl_parcel` (`id_parcel`, `parcel`, `id_diameter`, `id_clarity`, `id_shape`, `id_color`, `hargabeli`, `hargajual`, `deleted`, `create_by`, `create_date`, `update_by`, `update_date`) VALUES
(12, 'P01CA', '4', '4', '2', '3', '2000000', '2500000', '0', 'AnggaKP', '2022-07-12', 'AnggaKP', '2022-08-02'),
(13, 'P01CA', '7', '4', '2', '3', '1500000', '1800000', '0', 'AnggaKP', '2022-07-12', 'AnggaKP', '2022-08-02'),
(14, 'P01CA', '8', '4', '2', '3', '4000000', '3500000', '0', 'AnggaKP', '2022-07-12', 'AnggaKP', '2022-08-02'),
(15, 'C01CA', '4', '4', '3', '4', '4500000', '5000000', '0', 'AnggaKP', '2022-07-12', 'AnggaKP', '2022-08-02'),
(16, 'C01CA', '7', '4', '3', '3', '2000000', '3000000', '0', 'AnggaKP', '2022-07-12', 'AnggaKP', '2022-08-02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id_produk` int(11) NOT NULL,
  `jenis_produk` varchar(50) NOT NULL,
  `id_jenisproduk` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shape`
--

CREATE TABLE `tbl_shape` (
  `id_shape` int(11) NOT NULL,
  `shape` varchar(50) NOT NULL,
  `deleted` int(1) NOT NULL,
  `create_by` varchar(50) NOT NULL,
  `create_date` date NOT NULL,
  `update_by` varchar(50) DEFAULT NULL,
  `update_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_shape`
--

INSERT INTO `tbl_shape` (`id_shape`, `shape`, `deleted`, `create_by`, `create_date`, `update_by`, `update_date`) VALUES
(1, 'Marquise', 1, 'AnggaKP', '2022-07-11', 'AnggaKP', '2022-07-11'),
(2, 'Round', 0, 'AnggaKP', '2022-07-12', NULL, NULL),
(3, 'Marquise', 0, 'AnggaKP', '2022-07-12', 'AnggaKP', '2022-07-12'),
(4, 'Round1', 1, 'AnggaKP', '2022-07-12', NULL, NULL),
(5, 'a', 1, 'AnggaKP', '2022-07-12', NULL, NULL),
(6, 'c', 1, 'AnggaKP', '2022-07-12', NULL, NULL),
(7, 'z', 1, 'AnggaKP', '2022-07-12', NULL, NULL),
(8, 'ad', 1, 'AnggaKP', '2022-07-12', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tipe`
--

CREATE TABLE `tbl_tipe` (
  `id_tipe` int(11) NOT NULL,
  `tipeproduk` varchar(50) NOT NULL,
  `deleted` int(1) NOT NULL,
  `create_by` varchar(50) NOT NULL,
  `create_date` date NOT NULL,
  `update_by` varchar(50) NOT NULL,
  `update_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_tipe`
--

INSERT INTO `tbl_tipe` (`id_tipe`, `tipeproduk`, `deleted`, `create_by`, `create_date`, `update_by`, `update_date`) VALUES
(3, ' Bangle', 1, 'AnggaKP', '2022-07-14', 'AnggaKP', '2022-07-14'),
(4, 'Contoh', 0, 'AnggaKP', '2022-07-20', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(130) NOT NULL,
  `username` varchar(50) NOT NULL,
  `image` varchar(130) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `tanggal_daftar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama`, `username`, `image`, `password`, `role_id`, `is_active`, `tanggal_daftar`) VALUES
(1, 'AnggaKP', 'anggakp', 'add.png', '$2y$10$zgQDm4gaA4JQFtwWDv3e5eN7CXV4uhSaP1b.Oj0fkwfpZz4ENzKfu', 1, 1, '2021-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_warnaproduk`
--

CREATE TABLE `tbl_warnaproduk` (
  `id_warnaproduk` int(11) NOT NULL,
  `warnaproduk` varchar(50) NOT NULL,
  `deleted` int(1) NOT NULL,
  `create_by` varchar(50) NOT NULL,
  `create_date` date NOT NULL,
  `update_by` varchar(50) NOT NULL,
  `update_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_warnaproduk`
--

INSERT INTO `tbl_warnaproduk` (`id_warnaproduk`, `warnaproduk`, `deleted`, `create_by`, `create_date`, `update_by`, `update_date`) VALUES
(3, 'White Gold', 0, 'AnggaKP', '2022-07-14', 'AnggaKP', '2022-07-14'),
(4, 'Merah', 0, 'AnggaKP', '2022-07-20', 'AnggaKP', '2022-07-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_2ddesaindetail`
--
ALTER TABLE `tbl_2ddesaindetail`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `tbl_2ddesainheader`
--
ALTER TABLE `tbl_2ddesainheader`
  ADD PRIMARY KEY (`id_header`);

--
-- Indexes for table `tbl_2ddesainkepala`
--
ALTER TABLE `tbl_2ddesainkepala`
  ADD PRIMARY KEY (`id_subdetailkepala`);

--
-- Indexes for table `tbl_2ddesainsubdetail`
--
ALTER TABLE `tbl_2ddesainsubdetail`
  ADD PRIMARY KEY (`id_subdetail`);

--
-- Indexes for table `tbl_bagian`
--
ALTER TABLE `tbl_bagian`
  ADD PRIMARY KEY (`id_bagian`);

--
-- Indexes for table `tbl_bahanbaku`
--
ALTER TABLE `tbl_bahanbaku`
  ADD PRIMARY KEY (`id_bahanbaku`);

--
-- Indexes for table `tbl_bsis`
--
ALTER TABLE `tbl_bsis`
  ADD PRIMARY KEY (`id_bsis`);

--
-- Indexes for table `tbl_cashbankdetail`
--
ALTER TABLE `tbl_cashbankdetail`
  ADD PRIMARY KEY (`id_cashbankdetail`);

--
-- Indexes for table `tbl_cashbankheader`
--
ALTER TABLE `tbl_cashbankheader`
  ADD PRIMARY KEY (`id_cashbankheader`);

--
-- Indexes for table `tbl_cashbanklawan`
--
ALTER TABLE `tbl_cashbanklawan`
  ADD PRIMARY KEY (`id_cashbanklawan`);

--
-- Indexes for table `tbl_clarity`
--
ALTER TABLE `tbl_clarity`
  ADD PRIMARY KEY (`id_clarity`);

--
-- Indexes for table `tbl_client`
--
ALTER TABLE `tbl_client`
  ADD PRIMARY KEY (`id_client`);

--
-- Indexes for table `tbl_coa`
--
ALTER TABLE `tbl_coa`
  ADD PRIMARY KEY (`id_coa`);

--
-- Indexes for table `tbl_color`
--
ALTER TABLE `tbl_color`
  ADD PRIMARY KEY (`id_color`);

--
-- Indexes for table `tbl_costcenter`
--
ALTER TABLE `tbl_costcenter`
  ADD PRIMARY KEY (`id_costcenter`);

--
-- Indexes for table `tbl_detailbarang`
--
ALTER TABLE `tbl_detailbarang`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `tbl_diagroup`
--
ALTER TABLE `tbl_diagroup`
  ADD PRIMARY KEY (`id_diagroup`);

--
-- Indexes for table `tbl_diameter`
--
ALTER TABLE `tbl_diameter`
  ADD PRIMARY KEY (`id_diameter`);

--
-- Indexes for table `tbl_finishing`
--
ALTER TABLE `tbl_finishing`
  ADD PRIMARY KEY (`id_finishing`);

--
-- Indexes for table `tbl_groupakun`
--
ALTER TABLE `tbl_groupakun`
  ADD PRIMARY KEY (`id_groupakun`);

--
-- Indexes for table `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `tbl_konsepkepala`
--
ALTER TABLE `tbl_konsepkepala`
  ADD PRIMARY KEY (`id_konsepkepala`);

--
-- Indexes for table `tbl_kurs`
--
ALTER TABLE `tbl_kurs`
  ADD PRIMARY KEY (`id_kurs`);

--
-- Indexes for table `tbl_matauang`
--
ALTER TABLE `tbl_matauang`
  ADD PRIMARY KEY (`id_matauang`);

--
-- Indexes for table `tbl_material`
--
ALTER TABLE `tbl_material`
  ADD PRIMARY KEY (`id_material`);

--
-- Indexes for table `tbl_ongkos`
--
ALTER TABLE `tbl_ongkos`
  ADD PRIMARY KEY (`id_ongkos`);

--
-- Indexes for table `tbl_parcel`
--
ALTER TABLE `tbl_parcel`
  ADD PRIMARY KEY (`id_parcel`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tbl_shape`
--
ALTER TABLE `tbl_shape`
  ADD PRIMARY KEY (`id_shape`);

--
-- Indexes for table `tbl_tipe`
--
ALTER TABLE `tbl_tipe`
  ADD PRIMARY KEY (`id_tipe`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tbl_warnaproduk`
--
ALTER TABLE `tbl_warnaproduk`
  ADD PRIMARY KEY (`id_warnaproduk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_2ddesaindetail`
--
ALTER TABLE `tbl_2ddesaindetail`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_2ddesainkepala`
--
ALTER TABLE `tbl_2ddesainkepala`
  MODIFY `id_subdetailkepala` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_2ddesainsubdetail`
--
ALTER TABLE `tbl_2ddesainsubdetail`
  MODIFY `id_subdetail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_bagian`
--
ALTER TABLE `tbl_bagian`
  MODIFY `id_bagian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_bahanbaku`
--
ALTER TABLE `tbl_bahanbaku`
  MODIFY `id_bahanbaku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_bsis`
--
ALTER TABLE `tbl_bsis`
  MODIFY `id_bsis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_cashbankdetail`
--
ALTER TABLE `tbl_cashbankdetail`
  MODIFY `id_cashbankdetail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_cashbanklawan`
--
ALTER TABLE `tbl_cashbanklawan`
  MODIFY `id_cashbanklawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_clarity`
--
ALTER TABLE `tbl_clarity`
  MODIFY `id_clarity` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_client`
--
ALTER TABLE `tbl_client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_coa`
--
ALTER TABLE `tbl_coa`
  MODIFY `id_coa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `tbl_color`
--
ALTER TABLE `tbl_color`
  MODIFY `id_color` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_costcenter`
--
ALTER TABLE `tbl_costcenter`
  MODIFY `id_costcenter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_detailbarang`
--
ALTER TABLE `tbl_detailbarang`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_diagroup`
--
ALTER TABLE `tbl_diagroup`
  MODIFY `id_diagroup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_diameter`
--
ALTER TABLE `tbl_diameter`
  MODIFY `id_diameter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_finishing`
--
ALTER TABLE `tbl_finishing`
  MODIFY `id_finishing` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_groupakun`
--
ALTER TABLE `tbl_groupakun`
  MODIFY `id_groupakun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_konsepkepala`
--
ALTER TABLE `tbl_konsepkepala`
  MODIFY `id_konsepkepala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_kurs`
--
ALTER TABLE `tbl_kurs`
  MODIFY `id_kurs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_matauang`
--
ALTER TABLE `tbl_matauang`
  MODIFY `id_matauang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_material`
--
ALTER TABLE `tbl_material`
  MODIFY `id_material` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_ongkos`
--
ALTER TABLE `tbl_ongkos`
  MODIFY `id_ongkos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_parcel`
--
ALTER TABLE `tbl_parcel`
  MODIFY `id_parcel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_shape`
--
ALTER TABLE `tbl_shape`
  MODIFY `id_shape` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_tipe`
--
ALTER TABLE `tbl_tipe`
  MODIFY `id_tipe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_warnaproduk`
--
ALTER TABLE `tbl_warnaproduk`
  MODIFY `id_warnaproduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
