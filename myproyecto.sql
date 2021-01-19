-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-12-2020 a las 12:01:47
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `myproyecto`
--
CREATE DATABASE IF NOT EXISTS `myproyecto` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;
USE `myproyecto`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `resumen` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `post`
--

INSERT INTO `post` (`id`, `nombre`, `resumen`, `foto`, `url`) VALUES
(1, 'Neuromante', 'peli molona', 'https://th.bing.com/th/id/AMMS_c6ce1f588ff87398431ad7dacc3a1b88?pid=Api&rs=1', 'https://www.youtube.com/watch?v=LXBqZLalJk0'),
(2, 'Cyberpunk ', 'Cyberping resumen aolsa ah', 'https://cdn.wccftech.com/wp-content/uploads/2018/06/WCCFcyberpunk20777-2060x1159.jpg', 'https://www.youtube.com/watch?v=LXBqZLalJk0'),
(3, '12 monks', '12 mosh ytdhjsxhfkj', 'https://cdn.wccftech.com/wp-content/uploads/2018/06/WCCFcyberpunk20777-2060x1159.jpg', 'https://www.youtube.com/watch?v=DhF_MNMcPtg'),
(4, 'guns-akimbo', 'interesante', 'https://inkapelis.me/pelicula/guns-akimbo-2020/', 'https://inkapelis.me/pelicula/guns-akimbo-2020/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `clave` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `clave`, `estado`) VALUES
(1, 'victor', '123', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
