-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-07-2025 a las 02:51:31
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
(1, 'KILLARI', 'En Killari, fusionamos el verdadero valor de la artesanía tradicional con el espíritu del emprendimiento moderno. Cada pieza que creamos cuenta una historia única, tejida por manos expertas que dominan técnicas ancestrales, utilizando materiales 100% naturales.', '3187313614', 'Calle 4 No. 11 – 37 Centro', '3187313614', '', '', 'killariarteycultura@gmail.com', 1, 'local.jpg', 'Killari nació del amor por lo hecho a mano y del sueño de convertir la tradición en arte vivo...');

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
(24, 'Collares en Cuarzo', 'Nuestra colección de collares de cuarzo artesanales, cada pieza es una fusión perfecta entre arte, energía y estilo. Elaborados cuidadosamente a mano con minerales 100% auténticos.', 'Cuarzo natural, Cadenas o cordones, Cuerda encerada, Cuero o cuerina', 25000.00, 'collarescuarzo.jpeg', 1),
(25, 'Collares en Piedras naturales', 'Nuestros collares artesanales con piedras naturales son creaciones únicas donde la belleza natural se fusiona con el poder energético de los minerales.', 'Piedras naturales, hilo de nylon, cuerina, alambre de bisutería, broches, mostacillas, cuentas o dijes', 50000.00, 'collarespiedra.jpg', 1),
(26, 'Collares en Mostacilla', 'Collares artesanales de mostacilla, elaborados a mano con técnicas tradicionales indígenas.', 'Mostacillas, hilos como nylon, encerado o elástico, broches, terminales', 60000.00, 'collaresmostacilla.jpg', 1),
(27, 'Manillas en Cobre', 'Elegantes, duraderas y con propiedades antimicrobianas, estas piezas son perfectas para mejorar la seguridad, higiene y estilo.', 'Cobre puro o aleaciones de bronce o latón', 25000.00, 'manillascobre.jpg', 1),
(28, 'Manillas elaboradas en Piedra', 'Manillas hechas a mano con piedras naturales, resistentes y elegantes.', 'Piedras naturales como granito, mármol o volcánica, componentes metálicos', 20000.00, 'manillaspiedra.jpg', 1),
(29, 'Mochilas Hiladas', 'La mochila hilada artesanal está hecha a mano con hilos resistentes y detalles tejidos que reflejan la tradición.', 'Yute, algodón o cáñamo, detalles en cuero o cuerda', 40000.00, 'mochilahilada.jpg', 1),
(30, 'Monederos en cuero', 'Monederos de cuero genuino, elegantes y funcionales.', 'Cuero genuino o sintético, cierres, forro de tela', 15000.00, 'monederocuero.jpg', 1),
(31, 'Cartucheras de Aguayo', 'Cartucheras de tela andina tradicional, duraderas y coloridas.', 'Tela aguayo andina', 20000.00, 'cartucherasaguayo.jpg', 1),
(32, 'Monederos de correa en cuero', 'Monederos de cinturón en cuero, resistentes y elegantes.', 'Cuero genuino o sintético', 20000.00, 'monederocorrea.jpg', 1);

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
(1, 'Martha Cecilia Echeverry Polanco', 'istrion@gmail.com', '12345678', 'marthalucia.png');

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
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

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
