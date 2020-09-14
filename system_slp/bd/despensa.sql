-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-09-2020 a las 10:31:54
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `despensa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE `grupos` (
  `co_stock` int(11) NOT NULL,
  `sector` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`co_stock`, `sector`) VALUES
(1, 'lacteos'),
(2, 'bebidas'),
(3, 'golosinas'),
(4, 'limpieza'),
(5, 'comestibles');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `cd_producto` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripción` varchar(50) NOT NULL,
  `vencimiento` varchar(50) NOT NULL,
  `cantidad_inicial` int(11) NOT NULL,
  `entrada` int(11) NOT NULL,
  `salida` int(11) NOT NULL,
  `stock_total` int(11) NOT NULL,
  `cd_stock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`cd_producto`, `nombre`, `descripción`, `vencimiento`, `cantidad_inicial`, `entrada`, `salida`, `stock_total`, `cd_stock`) VALUES
(19, 'Leche', 'Común Entera 1L', '2020-12-20', 10, 10, 0, 10, 1),
(20, 'Queso ', 'Cuartirolo 1k', '2025-12-20', 1, 2, 0, 2, 1),
(22, 'Coca-Cola', '3L ', '2021-12-20', 10, 20, 0, 10, 2),
(23, 'Fanta', '3L', '2021-12-20', 10, 20, 0, 10, 2),
(25, 'Cordoba', 'Cola-3L', '20-12-20', 10, 20, 0, 10, 2),
(33, 'Chupetin', 'Pico dulce', '15-10-2020', 20, 40, 0, 20, 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`co_stock`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`cd_producto`),
  ADD KEY `cd_stock` (`cd_stock`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `grupos`
--
ALTER TABLE `grupos`
  MODIFY `co_stock` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `cd_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`cd_stock`) REFERENCES `grupos` (`co_stock`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
