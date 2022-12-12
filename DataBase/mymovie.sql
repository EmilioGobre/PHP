-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-12-2022 a las 07:59:33
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mymovie`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `id` int(11) NOT NULL COMMENT 'Primary Key',
  `name` varchar(255) DEFAULT NULL,
  `horario` date DEFAULT NULL,
  `tickets_disponibles` double DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `clasificacion` text DEFAULT NULL,
  `imagen` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`id`, `name`, `horario`, `tickets_disponibles`, `precio`, `clasificacion`, `imagen`) VALUES
(3, 'Rick y Morty', '2013-02-12', 4.2, 93, 'D', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZ83OjcNGo4rX_QXBrQ3JeQZun92VYdKGQYw&usqp=CAU'),
(5, 'WILLOW', '1988-05-20', 3.6, 53, 'B', 'https://cinepremiere.com.mx/assets/images/noticias/2012/12-diciembre/willowbd.jpg'),
(6, 'Mision Imposible', '1996-07-12', 4.1, 66, 'B15', 'https://i.pinimg.com/originals/46/1b/27/461b2748d9a15d815f883090f44c734a.jpg'),
(9, 'Morbius', '2022-03-10', 2, 15, 'R', 'http://192.168.100.107/VSC%20PHP/Programacion%20Movil/MyMovie/img/.png'),
(15, 'Tierra de Osos', '2003-12-17', 3.4, 37, 'AA', 'http://192.168.100.107/VSC%20PHP/Programacion%20Movil/MyMovie/img/Tierra de Osos.png'),
(16, 'Zathura', '2005-11-08', 4.5, 76, 'B', 'http://192.168.100.107/VSC%20PHP/Programacion%20Movil/MyMovie/img/Zathura.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `email`, `password`) VALUES
(27, 'Emilio', 'lime121804@gmail.com', '123456'),
(28, 'Gigi', 'Gigi@gmail.com', '789456');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key', AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
