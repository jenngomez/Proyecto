-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 05-11-2023 a las 23:10:21
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

--
-- Volcado de datos para la tabla `Clientes`
--

INSERT INTO `Clientes` (`id_Clientes`, `Razon_social`, `Nombre_comercial`, `Telefono`, `Ciudad`, `Direccion`, `Correo`, `Persona_contacto`, `Telefono_p_contacto`, `Estado`) VALUES
(901041661, 'CENTRO TURISTICO LA PIEDRA S.A.S', 'CENTRO TURISTICO LA PIEDRA', 3108416329, 'GUATAPE', 'VEREDA LA PIEDRA', 'INFO@LAPIEDRA.COM.CO', 'LUIS VILLEGAS', 3104914792, 'Activo'),
(1038418009, 'YENIFER GÓMEZ', 'PAPELERIA LOS SAUCES', 3218190186, 'MARINILLA', 'CARRERA 55 B #25-26', 'SAUCESPAPELERIA@GMAIL.COM', 'EMILSE VALENCIA', 3218440383, 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Clientes_has_Productos`
--

CREATE TABLE `Clientes_has_Productos` (
  `id` int(11) NOT NULL,
  `Clientes_id_Clientes` bigint(13) NOT NULL,
  `Productos_id_Producto` int(11) NOT NULL,
  `Empleados_id_Empleados` bigint(13) NOT NULL,
  `Pedidos_Id_Pedido` int(11) NOT NULL,
  `Cantidad` smallint(6) DEFAULT NULL
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

--
-- Volcado de datos para la tabla `Empleados`
--

INSERT INTO `Empleados` (`id_Empleados`, `Nombre`, `Celular`, `Usuario`, `Contrasena`, `Cargo`, `Ruta`) VALUES
(1037237425, 'EDUARDO VILLEGAS', 3104914792, 'admin_1', 'adminmega', 'ADMINISTRADOR', 'RIONEGRO'),
(1038418009, 'YENIFER GÓMEZ', 3218190186, 'admin_2', 'adminmega2', 'ADMINISTRADOR', 'RIONEGRO'),
(1040854237, 'GABRIELA VILLEGAS', 3115664323, 'vende_1', 'vendemega', 'VENDEDOR', 'RIONEGRO'),
(10384563423, 'BRAYAN GÓMEZ', 3125063423, 'logis_1', 'logismega', 'LOGISTICA', 'RIONEGRO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Encuesta_satisfacción`
--

CREATE TABLE `Encuesta_satisfacción` (
  `Id_Encuesta_satisfacción` int(11) NOT NULL,
  `Fecha` date DEFAULT NULL,
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
  `Cliente_nuevo` varchar(20) DEFAULT NULL,
  `Observaciones` varchar(200) DEFAULT NULL,
  `Prueba` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Formato_visitas`
--

INSERT INTO `Formato_visitas` (`id_Formato_visitas`, `Nit`, `Direccion_mega`, `Telefono_mega`, `Fecha`, `Nombre_empleado`, `Ruta`, `Razon_social`, `Nombre_comercial`, `Telefono`, `Direccion`, `Cliente_nuevo`, `Observaciones`, `Prueba`) VALUES
(1, NULL, NULL, NULL, '2023-10-05 00:00:00', 'ALEJANDRA', 'RIONEGRO', 'MERCAMAX', 'MERCAMAX', 3218440383, '', 'CLIENTE NUEVO', '', 'imgvisitas/WhatsApp Image 2022-09-26 at 7.32.39 PM (1).jpeg'),
(2, NULL, NULL, NULL, '2023-10-12 00:00:00', 'ALEJANDRA', 'RIONEGRO', 'MERCAMAX', 'MERCAMAX', 3218190186, '', 'CLIENTE NUEVO', '', 'imgvisitas/20210813_143043.jpg'),
(3, NULL, NULL, NULL, '2023-10-12 00:00:00', 'ESTEFANIA', 'GUARNE', 'LA PIEDRA', 'LA PIEDRA', 3218440383, '', 'CLIENTE NUEVO', '', 'imgvisitas/IMG-20210529-WA0057 (1).jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Pedidos`
--

CREATE TABLE `Pedidos` (
  `Id_Pedido` int(11) NOT NULL,
  `Fecha` datetime DEFAULT NULL,
  `id_cliente` bigint(13) DEFAULT NULL,
  `Id_empleado` bigint(13) DEFAULT NULL,
  `Descripción` varchar(60) DEFAULT NULL,
  `Precio` decimal(10,0) DEFAULT NULL,
  `Observaciones` varchar(200) DEFAULT NULL,
  `Estado` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Pedidos`
--

INSERT INTO `Pedidos` (`Id_Pedido`, `Fecha`, `id_cliente`, `Id_empleado`, `Descripción`, `Precio`, `Observaciones`, `Estado`) VALUES
(1, NULL, 1038418009, 1040854237, NULL, NULL, NULL, 'En elaboración'),
(2, NULL, 1038418009, 1040854237, NULL, NULL, NULL, 'En elaboración'),
(3, NULL, 1038418009, 1040854237, NULL, NULL, NULL, 'En elaboración'),
(4, NULL, 1038418009, 1037237425, NULL, NULL, NULL, 'En elaboración'),
(5, NULL, 1038418009, 1037237425, NULL, NULL, NULL, 'En elaboración'),
(6, NULL, 1038418009, 1037237425, NULL, NULL, NULL, 'En elaboración'),
(7, NULL, 1038418009, 1037237425, NULL, NULL, NULL, 'En elaboración'),
(8, NULL, 1038418009, 1037237425, NULL, NULL, NULL, 'En elaboración'),
(9, NULL, 1038418009, 1037237425, NULL, NULL, NULL, 'En elaboración'),
(10, NULL, 1038418009, 1037237425, NULL, NULL, NULL, 'En elaboración'),
(35, NULL, 1038418009, 1037237425, NULL, NULL, NULL, 'En elaboración'),
(36, NULL, 1038418009, 1037237425, NULL, NULL, NULL, 'En elaboración'),
(37, NULL, 1038418009, 1037237425, NULL, NULL, NULL, 'En elaboración'),
(38, NULL, 1038418009, 1037237425, NULL, NULL, NULL, 'En elaboración'),
(39, NULL, 1038418009, 1037237425, NULL, NULL, NULL, 'En elaboración'),
(40, NULL, 1038418009, 1037237425, NULL, NULL, NULL, 'En elaboración'),
(41, NULL, 1038418009, 1037237425, NULL, NULL, NULL, 'En elaboración'),
(42, NULL, 1038418009, 1037237425, NULL, NULL, NULL, 'En elaboración'),
(43, NULL, 1038418009, 1037237425, NULL, NULL, NULL, 'En elaboración'),
(44, NULL, 901041661, 1037237425, NULL, NULL, NULL, 'En elaboración'),
(45, NULL, 901041661, 1037237425, NULL, NULL, NULL, 'En elaboración'),
(46, NULL, 901041661, 1037237425, NULL, NULL, NULL, 'En elaboración');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Productos`
--

CREATE TABLE `Productos` (
  `id_Producto` int(11) NOT NULL,
  `Descripcion` varchar(60) DEFAULT NULL,
  `Iva` smallint(6) DEFAULT NULL,
  `Grupo_inventario` varchar(30) DEFAULT NULL,
  `Precio` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Productos`
--

INSERT INTO `Productos` (`id_Producto`, `Descripcion`, `Iva`, `Grupo_inventario`, `Precio`) VALUES
(2, 'JABON', 0, 'DESINFECCIÓN', '5000'),
(10075, 'DESINFECTANTE', 0, 'DESINFECCIÓN', '20000');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Clientes`
--
ALTER TABLE `Clientes`
  ADD PRIMARY KEY (`id_Clientes`);

--
-- Indices de la tabla `Clientes_has_Productos`
--
ALTER TABLE `Clientes_has_Productos`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id_Formato_visitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `Pedidos`
--
ALTER TABLE `Pedidos`
  MODIFY `Id_Pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
