-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3308
-- Generation Time: May 21, 2021 at 03:34 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gdlwebcamp`
--

-- --------------------------------------------------------

--
-- Table structure for table `categoria_evento`
--

CREATE TABLE `categoria_evento` (
  `id_categoria` tinyint(10) NOT NULL,
  `cat_evento` varchar(50) NOT NULL,
  `icon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categoria_evento`
--

INSERT INTO `categoria_evento` (`id_categoria`, `cat_evento`, `icon`) VALUES
(1, 'Seminario', 'fa-university'),
(2, 'Conferencia', 'fa-comment'),
(3, 'Talleres', 'fa-code');

-- --------------------------------------------------------

--
-- Table structure for table `eventos`
--

CREATE TABLE `eventos` (
  `evento_id` int(10) NOT NULL,
  `nombre_evento` varchar(80) NOT NULL,
  `fecha_evento` date NOT NULL,
  `hora_evento` time NOT NULL,
  `id_cat_evento` tinyint(10) NOT NULL,
  `id_inv` tinyint(10) NOT NULL,
  `clave` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `eventos`
--

INSERT INTO `eventos` (`evento_id`, `nombre_evento`, `fecha_evento`, `hora_evento`, `id_cat_evento`, `id_inv`, `clave`) VALUES
(1, 'Responsive Web Design', '2016-12-09', '10:00:00', 3, 1, 'taller_01'),
(2, 'Flexbox', '2016-12-09', '12:00:00', 3, 2, 'taller_02'),
(3, 'HTML5 y CSS3', '2016-12-09', '14:00:00', 3, 3, 'taller_03'),
(4, 'Drupal', '2016-12-09', '17:00:00', 3, 4, 'taller_04'),
(5, 'WordPress', '2016-12-09', '19:00:00', 3, 5, 'taller_05'),
(6, 'Como ser freelancer', '2016-12-09', '10:00:00', 2, 6, 'conf_01'),
(7, 'Tecnologías del Futuro', '2016-12-09', '17:00:00', 2, 1, 'conf_02'),
(8, 'Seguridad en la Web', '2016-12-09', '19:00:00', 2, 2, 'conf_03'),
(9, 'Diseño UI y UX para móviles', '2016-12-09', '10:00:00', 1, 6, 'sem_01'),
(10, 'AngularJS', '2016-12-10', '10:00:00', 3, 1, 'taller_06'),
(11, 'PHP y MySQL', '2016-12-10', '12:00:00', 3, 2, 'taller_07'),
(12, 'JavaScript Avanzado', '2016-12-10', '14:00:00', 3, 3, 'taller_08'),
(13, 'SEO en Google', '2016-12-10', '17:00:00', 3, 4, 'taller_09'),
(14, 'De Photoshop a HTML5 y CSS3', '2016-12-10', '19:00:00', 3, 5, 'taller_10'),
(15, 'PHP Intermedio y Avanzado', '2016-12-10', '21:00:00', 3, 6, 'taller_11'),
(16, 'Como crear una tienda online que venda millones en pocos días', '2016-12-10', '10:00:00', 2, 6, 'conf_04'),
(17, 'Los mejores lugares para encontrar trabajo', '2016-12-10', '17:00:00', 2, 1, 'conf_05'),
(18, 'Pasos para crear un negocio rentable ', '2016-12-10', '19:00:00', 2, 2, 'conf_06'),
(19, 'Aprende a Programar en una mañana', '2016-12-10', '10:00:00', 1, 3, 'sem_02'),
(20, 'Diseño UI y UX para móviles', '2016-12-10', '17:00:00', 1, 5, 'sem_03'),
(21, 'Laravel', '2016-12-11', '10:00:00', 3, 1, 'taller_12'),
(22, 'Crea tu propia API', '2016-12-11', '12:00:00', 3, 2, 'taller_13'),
(23, 'JavaScript y jQuery', '2016-12-11', '14:00:00', 3, 3, 'taller_14'),
(24, 'Creando Plantillas para WordPress', '2016-12-11', '17:00:00', 3, 4, 'taller_15'),
(25, 'Tiendas Virtuales en Magento', '2016-12-11', '19:00:00', 3, 5, 'taller_16'),
(26, 'Como hacer Marketing en línea', '2016-12-11', '10:00:00', 2, 6, 'conf_07'),
(27, '¿Con que lenguaje debo empezar?', '2016-12-11', '17:00:00', 2, 2, 'conf_08'),
(28, 'Frameworks y librerias Open Source', '2016-12-11', '19:00:00', 2, 3, 'conf_09'),
(29, 'Creando una App en Android en una mañana', '2016-12-11', '10:00:00', 1, 4, 'sem_04'),
(30, 'Creando una App en iOS en una tarde', '2016-12-11', '17:00:00', 1, 1, 'sem_05');

-- --------------------------------------------------------

--
-- Table structure for table `invitados`
--

CREATE TABLE `invitados` (
  `id_invitados` tinyint(10) NOT NULL,
  `nombre_invitado` varchar(30) NOT NULL,
  `ape_invotado` varchar(30) NOT NULL,
  `des_invitado` text NOT NULL,
  `url_imagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `invitados`
--

INSERT INTO `invitados` (`id_invitados`, `nombre_invitado`, `ape_invotado`, `des_invitado`, `url_imagen`) VALUES
(1, 'Rafael', 'Garcia', 'Es un hecho establecido desde hace mucho tiempo que un lector se distraerá con el contenido legible de una página cuando mire su diseño. El punto de usar Lorem Ipsum es que tiene una distribución de letras más o menos normal, en lugar de usar \'Contenido aquí, contenido aquí\'', 'invitado1.jpg'),
(2, 'Carlo', 'Figueroa', 'Es un hecho establecido desde hace mucho tiempo que un lector se distraerá con el contenido legible de una página cuando mire su diseño. El punto de usar Lorem Ipsum es que tiene una distribución de letras más o menos normal, en lugar de usar \'Contenido aquí, contenido aquí\',', 'invitado2.jpg'),
(3, 'Luis', 'Torres', 'Es un hecho establecido desde hace mucho tiempo que un lector se distraerá con el contenido legible de una página cuando mire su diseño. El punto de usar Lorem Ipsum es que tiene una distribución de letras más o menos normal, en lugar de usar \'Contenido aquí, contenido aquí\',', 'invitado3.jpg'),
(4, 'Eduardo', 'Martinez', 'Es un hecho establecido desde hace mucho tiempo que un lector se distraerá con el contenido legible de una página cuando mire su diseño. El punto de usar Lorem Ipsum es que tiene una distribución de letras más o menos normal, en lugar de usar \'Contenido aquí, contenido aquí\',', 'invitado4.jpg'),
(5, 'Daniela ', 'Lopez', 'Es un hecho establecido desde hace mucho tiempo que un lector se distraerá con el contenido legible de una página cuando mire su diseño. El punto de usar Lorem Ipsum es que tiene una distribución de letras más o menos normal, en lugar de usar \'Contenido aquí, contenido aquí\',', 'invitado5.jpg'),
(6, 'Salome', 'Farias', 'Es un hecho establecido desde hace mucho tiempo que un lector se distraerá con el contenido legible de una página cuando mire su diseño. El punto de usar Lorem Ipsum es que tiene una distribución de letras más o menos normal, en lugar de usar \'Contenido aquí, contenido aquí\',', 'invitado6.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria_evento`
--
ALTER TABLE `categoria_evento`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indexes for table `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`evento_id`),
  ADD KEY `id_cat_evento` (`id_cat_evento`),
  ADD KEY `id_inv` (`id_inv`);

--
-- Indexes for table `invitados`
--
ALTER TABLE `invitados`
  ADD PRIMARY KEY (`id_invitados`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria_evento`
--
ALTER TABLE `categoria_evento`
  MODIFY `id_categoria` tinyint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `eventos`
--
ALTER TABLE `eventos`
  MODIFY `evento_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `invitados`
--
ALTER TABLE `invitados`
  MODIFY `id_invitados` tinyint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `eventos`
--
ALTER TABLE `eventos`
  ADD CONSTRAINT `eventos_ibfk_1` FOREIGN KEY (`id_cat_evento`) REFERENCES `categoria_evento` (`id_categoria`),
  ADD CONSTRAINT `eventos_ibfk_2` FOREIGN KEY (`id_inv`) REFERENCES `invitados` (`id_invitados`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
