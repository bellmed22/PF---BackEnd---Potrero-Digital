-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 28, 2023 at 01:19 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `servicios`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrador`
--

CREATE TABLE `administrador` (
  `id` int(11) NOT NULL,
  `nombre_admin` varchar(50) NOT NULL,
  `password_admin` varchar(50) NOT NULL,
  `email_admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `administrador`
--

INSERT INTO `administrador` (`id`, `nombre_admin`, `password_admin`, `email_admin`) VALUES
(1, 'admin', '12345', 'admin@admin.ad');

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `nombre_producto` varchar(100) NOT NULL,
  `tipo_producto` tinyint(1) NOT NULL,
  `descripcion_producto` varchar(255) NOT NULL,
  `precio_producto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre_producto`, `tipo_producto`, `descripcion_producto`, `precio_producto`) VALUES
(13, 'Postales', 1, 'Postales, flyers y volantes.\r\nEstandar: A6 (10,5x1...', '$16.000'),
(14, 'Landing Page', 2, 'Toda la informaciÃ³n de tu sitio en una sola pantalla.', '$30.000'),
(15, 'PÃ¡gina personalizada', 2, 'DiseÃ±o personalizado adaptado a tus gustos y necesidades.', '$60.000'),
(16, 'Afiches', 1, 'Afiches para boletines.\r\nTamaÃ±o: A3 (27,94x43,18 cm).', '$18.000'),
(17, 'Folletos', 1, 'DÃ­pticos y trÃ­pticos.\r\nTamaÃ±o: A5 (14,8x21,0cm). ', '$20.000'),
(18, 'IlustraciÃ³n (Simple)', 3, 'Ilustracion digital, \n1 persona o personaje, busto o medio cuerpo.\nColor simple.\n\n\n*Consultar por mÃ¡s personas o fondo.', '$15.000'),
(19, 'IlustraciÃ³n (Full color)', 3, 'Ilustracion digital, \n1 persona o personaje, busto o medio cuerpo.\nFull color.\n\n\n*Consultar por mÃ¡s personas o fondo.', '$20.000'),
(20, 'E-commerce', 2, 'Carro de ventas autogestionable. 4 secciones:\r\n-Inicio\r\n-Productos o Servicios\r\n-Noticias, GalerÃ­a o Productos destacados\r\n-Contacto', '$80.000'),
(21, 'IlustraciÃ³n (B&N)', 3, 'Ilustracion digital, \r\n1 persona o personaje, busto o medio cuerpo.\r\nBlanco y Negro.\r\n\r\n\r\n*Consultar por mÃ¡s personas o fondo.', '$10.000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
