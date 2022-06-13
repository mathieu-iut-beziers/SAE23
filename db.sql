-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 14, 2022 at 12:29 AM
-- Server version: 10.0.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_PUIG`
--
CREATE DATABASE IF NOT EXISTS `db_PUIG` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `db_PUIG`;

-- --------------------------------------------------------

--
-- Table structure for table `base_client`
--

CREATE TABLE `base_client` (
  `id` int(11) UNSIGNED NOT NULL,
  `nom` varbinary(30) NOT NULL,
  `prenom` varbinary(30) NOT NULL,
  `phone` varbinary(12) NOT NULL,
  `adresse` varbinary(255) NOT NULL,
  `mail` varbinary(255) NOT NULL,
  `nb_location` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `base_client`
--

INSERT INTO `base_client` (`id`, `nom`, `prenom`, `phone`, `adresse`, `mail`, `nb_location`) VALUES
(1, 0x61646d696e, 0x61646d696e, 0x61646d696e, 0x7275652061646d696e, 0x61646d696e40676d61696c2e636f6d, 1),
(3, 0x557365722064652054657374, 0x557365722064652054657374, 0x30363036303630363036, 0x5465737420546573742054657374, 0x7465737440746573742e636f6d, 0),
(4, 0x4d617468696575, 0x4d617468696575, 0x30373334353536373135, 0x4d616874696575, 0x4d617468696575, 3);

-- --------------------------------------------------------

--
-- Table structure for table `base_co`
--

CREATE TABLE `base_co` (
  `id` int(11) UNSIGNED NOT NULL,
  `user` varbinary(255) NOT NULL,
  `password` varbinary(255) DEFAULT NULL,
  `role` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `base_co`
--

INSERT INTO `base_co` (`id`, `user`, `password`, `role`) VALUES
(1, 0x61646d696e, 0x2a42434442343646393735394243334337433236373944344538313134354235334545363136303539, 1),
(3, 0x30, 0x2a46333341453644443034454634433743314433313035353638453746423743314545313643393337, 0),
(4, 0x6d617468696575, 0x2a46313339324543383738383538313546443442424430353530313546373244333143323437453731, 0);

-- --------------------------------------------------------

--
-- Table structure for table `base_materielle`
--

CREATE TABLE `base_materielle` (
  `id_mat` int(11) UNSIGNED NOT NULL,
  `type` varchar(30) NOT NULL,
  `description` varchar(255) NOT NULL,
  `prix` float NOT NULL,
  `stock` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `base_materielle`
--

INSERT INTO `base_materielle` (`id_mat`, `type`, `description`, `prix`, `stock`) VALUES
(1, 'Grue', 'Grue de chantier', 1200, 5),
(2, 'Vélo', 'Un simple vélo', 300, 13),
(3, 'Chariot Elevateur', 'Pour porter des palettes', 140, 12);

-- --------------------------------------------------------

--
-- Table structure for table `base_pret`
--

CREATE TABLE `base_pret` (
  `id_pret` int(11) UNSIGNED NOT NULL,
  `id_mat` int(11) UNSIGNED NOT NULL,
  `nom_obj` varchar(30) NOT NULL,
  `client` varbinary(30) NOT NULL,
  `status` varbinary(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `base_pret`
--

INSERT INTO `base_pret` (`id_pret`, `id_mat`, `nom_obj`, `client`, `status`) VALUES
(1, 1, 'Grue', 0x76616c65, 0x30),
(12, 2, 'Vélo', 0x6d617468696575, 0x30),
(4, 1, 'Grue', 0x76616c65, 0x30),
(5, 1, 'Grue', 0x76616c65, 0x30),
(6, 1, 'Grue', 0x76616c65, 0x31),
(7, 1, 'Grue', 0x74657374, 0x31),
(11, 1, 'Grue', 0x6d617468696575, 0x31),
(9, 1, 'Grue', 0x61646d696e, 0x31);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `base_client`
--
ALTER TABLE `base_client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `base_co`
--
ALTER TABLE `base_co`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `base_materielle`
--
ALTER TABLE `base_materielle`
  ADD PRIMARY KEY (`id_mat`);

--
-- Indexes for table `base_pret`
--
ALTER TABLE `base_pret`
  ADD PRIMARY KEY (`id_pret`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `base_client`
--
ALTER TABLE `base_client`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `base_co`
--
ALTER TABLE `base_co`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `base_materielle`
--
ALTER TABLE `base_materielle`
  MODIFY `id_mat` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `base_pret`
--
ALTER TABLE `base_pret`
  MODIFY `id_pret` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
