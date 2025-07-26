-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-07-2025 a las 01:03:12
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `artesanos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `local`
--

CREATE TABLE `local` (
  `id_local` int(11) NOT NULL,
  `nombre_local` varchar(100) NOT NULL,
  `descripcion_local` text DEFAULT NULL,
  `telefono_local` varchar(20) DEFAULT NULL,
  `direccion_local` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(20) DEFAULT NULL,
  `instagram` varchar(100) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `correo_local` varchar(100) DEFAULT NULL,
  `id_usuario` bigint(20) NOT NULL,
  `imagen_local` varchar(255) DEFAULT NULL,
  `historia` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `local`
--

INSERT INTO `local` (`id_local`, `nombre_local`, `descripcion_local`, `telefono_local`, `direccion_local`, `whatsapp`, `instagram`, `facebook`, `correo_local`, `id_usuario`, `imagen_local`, `historia`) VALUES
(1, 'Creaciones Malu', 'Artesanías hechas a mano con amor y esperanza', '3114931433', 'Dirección no especificada', '3114931433', 'https://www.instagram.com/creaciones_malu72', NULL, 'creacionesmalu@gmail.com', 1, 'martha aguirre.png', 'Martha Aguirre es una artesana apasionada... juntos.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `nombre_producto` varchar(100) NOT NULL,
  `descripcion_producto` text DEFAULT NULL,
  `materiales_producto` text DEFAULT NULL,
  `precio_producto` decimal(10,2) NOT NULL,
  `imagen_producto` varchar(255) DEFAULT NULL,
  `id_local` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `nombre_producto`, `descripcion_producto`, `materiales_producto`, `precio_producto`, `imagen_producto`, `id_local`) VALUES
(1, 'Manilla 7 nudos de San Benito', 'Diseñada con hilo terlenca #15 y medalla de San Benito en acero.', 'Hilo terlenca #15, medalla de San Benito en acero', 7000.00, 'manilla 7 nudos.jpg', 1),
(2, 'Pesebre en gruta de icopor', 'Pesebre hecho en icopor, calceta de plátano, base en madera y figuras de arcilla.', 'Icopor, calceta de plátano, madera, arcilla', 20000.00, 'pesebre de gruta.png', 1),
(3, 'Manilla de Mostacilla Checa', 'Elaborada con mostacilla de colores y hilo de marroquinería.', 'Mostacilla checa, hilo de marroquinería', 15000.00, 'Manilla de mostacillacheca.png', 1),
(4, 'Bolso Imitación Guayu', 'Hecho con hilo crochet de colores y aguja de crochet.', 'Hilo crochet, aguja de crochet', 35000.00, 'Bolso imitacion guayu.png', 1),
(5, 'Tarjeteros en Guadua', 'Elaborados en guadua y sesina.', 'Guadua, sesina', 20000.00, 'Tarjeteroenguadua.png', 1),
(6, 'Monedero de Totumo', 'Diseñado con totumo, pinturas acrílicas, tintilla, laca y cremallera.', 'Totumo, pinturas acrílicas, tintilla, laca, cremallera', 20000.00, 'Monederodetotumo.png', 1),
(7, 'Monedero de Coco', 'Elaborado con cáscara de coco, lija, cremallera y cera vegetal.', 'Coco, lija, cremallera, cera vegetal', 25000.00, 'Monederodecoco.png', 1),
(8, 'Llavero en Tagua', 'Hecho en tagua, pinturas acrílicas, cordón cola de rata, herraje y resina.', 'Tagua, pinturas acrílicas, cordón, herraje, resina', 10000.00, 'Llaveroentagua.jpg', 1),
(9, 'Bolso de Totumo', 'Elaborado con hilo terlenca #5, totumo, tintilla, pinturas y resina.', 'Hilo terlenca #5, totumo, tintilla, pinturas acrílicas, resina', 35000.00, 'Bolsodetotumo.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` bigint(20) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `contraseña` varchar(255) NOT NULL,
  `imagen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `correo`, `contraseña`, `imagen`) VALUES
(1, 'Martha Lucia Aguirre', 'creacionesmalu@gmail.com', '1234', 'martha aguirre.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `local`
--
ALTER TABLE `local`
  ADD PRIMARY KEY (`id_local`),
  ADD KEY `id_usuario` (`id_usuario`) USING BTREE;

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_local` (`id_local`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `local`
--
ALTER TABLE `local`
  MODIFY `id_local` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `local`
--
ALTER TABLE `local`
  ADD CONSTRAINT `local_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_local`) REFERENCES `local` (`id_local`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
