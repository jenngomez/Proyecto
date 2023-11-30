-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 08-06-2023 a las 23:39:36
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Mega_Alianza`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Clientes`
--

CREATE TABLE `Clientes` (
  `id_Clientes` bigint(13) NOT NULL,
  `Razon_social` varchar(45) DEFAULT NULL,
  `Nombre_comercial` varchar(45) DEFAULT NULL,
  `Telefono` bigint(13) DEFAULT NULL,
  `Ciudad` varchar(15) DEFAULT NULL,
  `Direccion` varchar(45) DEFAULT NULL,
  `Correo` varchar(45) DEFAULT NULL,
  `Persona_contacto` varchar(45) DEFAULT NULL,
  `Telefono_p_contacto` bigint(13) DEFAULT NULL,
  `Estado` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Empleados`
--

CREATE TABLE `Empleados` (
  `id_Empleados` bigint(13) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Celular` bigint(13) DEFAULT NULL,
  `Usuario` varchar(20) DEFAULT NULL,
  `Contrasena` varchar(45) DEFAULT NULL,
  `Cargo` varchar(45) DEFAULT NULL,
  `Ruta` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Encuesta_satisfacción`
--

CREATE TABLE `Encuesta_satisfacción` (
  `Id_Encuesta_satisfacción` int(11) NOT NULL,
  `Fecha` datetime DEFAULT NULL,
  `Nombre_comercial` varchar(45) DEFAULT NULL,
  `Nombre_contacto` varchar(45) DEFAULT NULL,
  `Telefono_contacto` bigint(13) DEFAULT NULL,
  `Nombre_empleado` varchar(45) DEFAULT NULL,
  `Conoce` varchar(30) DEFAULT NULL,
  `Personal` varchar(45) DEFAULT NULL,
  `Productos` varchar(45) DEFAULT NULL,
  `Servicios` varchar(45) DEFAULT NULL,
  `Observaciones` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Formato_visitas`
--

CREATE TABLE `Formato_visitas` (
  `id_Formato_visitas` int(11) NOT NULL,
  `Nit` bigint(13) DEFAULT NULL,
  `Direccion_mega` varchar(45) DEFAULT NULL,
  `Telefono_mega` bigint(13) DEFAULT NULL,
  `Fecha` datetime DEFAULT NULL,
  `Nombre_empleado` varchar(45) DEFAULT NULL,
  `Ruta` varchar(10) DEFAULT NULL,
  `Razon_social` varchar(45) DEFAULT NULL,
  `Nombre_comercial` varchar(45) DEFAULT NULL,
  `Telefono` bigint(13) DEFAULT NULL,
  `Direccion` varchar(45) DEFAULT NULL,
  `Cliente_nuevo` varchar(10) DEFAULT NULL,
  `Observaciones` varchar(200) DEFAULT NULL,
  `Prueba` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Pedidos`
--

CREATE TABLE `Pedidos` (
  `Id_Pedido` int(11) NOT NULL,
  `Fecha` datetime DEFAULT NULL,
  `id_cliente` bigint(13) DEFAULT NULL,
  `Orden_pedido` int(11) DEFAULT NULL,
  `Id_empleado` bigint(13) DEFAULT NULL,
  `Id_producto` int(11) DEFAULT NULL,
  `Descripción` varchar(60) DEFAULT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  `Precio` decimal(10,0) DEFAULT NULL,
  `Observaciones` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Productos`
--

CREATE TABLE `Productos` (
  `id_Producto` int(11) NOT NULL,
  `Descripcion` varchar(60) DEFAULT NULL,
  `Grupo_inventario` varchar(30) DEFAULT NULL,
  `Precio` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Clientes`
--
ALTER TABLE `Clientes`
  ADD PRIMARY KEY (`id_Clientes`);

--
-- Indices de la tabla `Empleados`
--
ALTER TABLE `Empleados`
  ADD PRIMARY KEY (`id_Empleados`);

--
-- Indices de la tabla `Encuesta_satisfacción`
--
ALTER TABLE `Encuesta_satisfacción`
  ADD PRIMARY KEY (`Id_Encuesta_satisfacción`);

--
-- Indices de la tabla `Formato_visitas`
--
ALTER TABLE `Formato_visitas`
  ADD PRIMARY KEY (`id_Formato_visitas`);

--
-- Indices de la tabla `Pedidos`
--
ALTER TABLE `Pedidos`
  ADD PRIMARY KEY (`Id_Pedido`);

--
-- Indices de la tabla `Productos`
--
ALTER TABLE `Productos`
  ADD PRIMARY KEY (`id_Producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Encuesta_satisfacción`
--
ALTER TABLE `Encuesta_satisfacción`
  MODIFY `Id_Encuesta_satisfacción` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Formato_visitas`
--
ALTER TABLE `Formato_visitas`
  MODIFY `id_Formato_visitas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Pedidos`
--
ALTER TABLE `Pedidos`
  MODIFY `Id_Pedido` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
