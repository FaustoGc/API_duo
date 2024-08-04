-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-08-2024 a las 00:27:25
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `almacen_parahogar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `Id_clientes` int(11) NOT NULL,
  `nombres` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `telefono` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`Id_clientes`, `nombres`, `apellido`, `telefono`) VALUES
(1, 'Leidy', 'Alvarez', 932872943),
(2, 'Marcela', 'Gonzalez', 959270281),
(3, 'Rafael ', 'Benabides', 992594487),
(4, 'Antonela ', 'Martinez', 900127245),
(5, 'Patricio', 'Garrido', 910125692),
(6, 'Sara', 'Lopez', 979285643),
(18, 'Mario', 'Andrade', 987654321),
(19, 'Alexander', 'Moreira', 998981212);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `nombre`, `apellido`, `telefono`) VALUES
(1, 'Roberto', 'Mendoza', '123-456-7890'),
(2, 'Patricia', 'Vargas', '098-765-4321'),
(3, 'Ricardo', 'Ortiz', '567-890-1234'),
(4, 'Carmen', 'Reyes', '345-678-9012'),
(5, 'Guillermo', 'Guerrero', '789-012-3456'),
(6, 'Teresa', 'Salgado', '901-234-5678'),
(7, 'Eduardo', 'Paredes', '234-567-8901'),
(8, 'Lourdes', 'Cordero', '678-901-2345'),
(9, 'Hernan', 'Zambrano', '012-345-6789'),
(10, 'Rosario', 'Delgado', '456-789-0123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `cantidad_en_almacen` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`, `cantidad_en_almacen`) VALUES
(1, 'Sartén', 20.00, 50),
(2, 'Cubiertos', 15.00, 100),
(3, 'Artículos de cocina', 30.00, 200),
(4, 'Cestas de mimbre', 25.00, 30),
(5, 'Lámparas', 40.00, 20),
(6, 'Vajillas', 60.00, 15),
(7, 'Estanterías', 80.00, 10),
(8, 'Mesas', 100.00, 5),
(9, 'Sillas', 50.00, 10),
(10, 'Muebles', 200.00, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id_venta` int(11) NOT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `id_empleado` int(11) DEFAULT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `total_vendido` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id_venta`, `id_cliente`, `id_empleado`, `id_producto`, `total_vendido`) VALUES
(1, 1, 1, 1, 1200.99),
(2, 2, 2, 2, 25.75),
(3, 3, 3, 3, 45.90),
(4, 4, 4, 4, 200.00),
(5, 5, 5, 5, 150.50),
(6, 6, 6, 6, 80.25);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`Id_clientes`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_empleado` (`id_empleado`),
  ADD KEY `id_producto` (`id_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `Id_clientes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`Id_clientes`),
  ADD CONSTRAINT `ventas_ibfk_2` FOREIGN KEY (`id_empleado`) REFERENCES `empleados` (`id`),
  ADD CONSTRAINT `ventas_ibfk_3` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
