-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-07-2025 a las 00:44:58
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
(3, 'Dicaro', 'El nombre Dicaro nace de las iniciales de su fundadora, Diana Carmenza Ramírez Orozco, como reflejo de identidad, esfuerzo y pasión por el arte. Este emprendimiento colombiano se especializa en la creación de joyas y accesorios artesanales únicos, elaborados totalmente a mano con técnicas tradicionales y contemporáneas. Dicaro ofrece una amplia variedad de productos hechos con amor y detalle: Joyas artesanales como collares, pulseras, anillos y tobilleras. Accesorios únicos como balacas, bolsos y más.', '3225341136', 'Calle 4 No. 11 – 37 Centro', '3225341136', '@dicaro.accesorios', '@dicaro.accesorios', 'dicaroaccesorios28@gmail.com', 0, NULL, 'Dicaro nació en 2002 en la ciudad como un emprendimiento liderado por una madre profesional, que al cuidar a su hijo con síndrome de Down, encontró en la bisutería artesanal hecha a mano una forma de crear, cuidar y emprender. Inició con collares artesanales y fue creciendo con técnicas como el telar de mostacillas, el Miyuki y el ensamble en alambre. Hoy, Dicaro representa el valor del emprendimiento femenino, la inclusión y el arte que nace del corazón.');

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
(33, 'Aretes rubí', 'Los aretes Rubí son piezas exclusivas tejidas a mano, elaboradas con mostacilla checa, cuentas de cristal Murano y herrajes en acero inoxidable, lo que garantiza durabilidad y un acabado sofisticado.', 'Aretes tejidos a mano con mostacilla checa y murano con herraje en acero', 35000.00, NULL, 3),
(34, 'Pulseras vibra', 'Las Pulseras Vibra son accesorios artesanales llenos de energía positiva y diseño vibrante. Hechas a mano con piedras naturales, ojo tuco, murano y balines en acero, estas pulseras reflejan la fuerza del color y el poder de lo auténtico.', 'Pulsera de resorte en piedras naturales, ojo turco, murano y balines en acero', 35000.00, NULL, 3),
(35, 'Pulseras Alondra', 'Las Pulseras Alondra son exclusivas pulseras artesanales hechas a mano, elaboradas con dedicación, creatividad y amor por el detalle. Su diseño combina Miyuki de calidad, hilos resistentes y acabados únicos, dando vida a accesorios ligeros, coloridos y versátiles.', 'Pulseras tejidas a mano con delicas de Miyuki, terminación en hilo ajustable.', 40000.00, NULL, 3),
(36, 'Anillo Inspiración', 'El Anillo Inspiración es una joya artesanal tejida completamente a mano con delicas de Miyuki, reconocidas por su calidad y precisión. Montado sobre una base ajustable en gold filled (baño de oro), combina elegancia, comodidad y durabilidad.', 'Anillos tejidos a mano con delicas de Miyuki en base de oro golfield ajustable.', 50000.00, NULL, 3),
(37, 'Maxiaretes Esplendor', 'Los Maxiaretes Esplendor son aretes artesanales tejidos a mano con delicada mostacilla checa y herrajes en acero inoxidable, que garantizan resistencia, brillo y elegancia.', 'Aretes tejidos a mano con mostacilla checa y herraje en acero. Medida aprox. 5 cm', 50000.00, NULL, 3),
(38, 'Pulsera Encanto', 'Su diseño versátil y femenino la convierte en el accesorio ideal para usar a diario o en ocasiones especiales. Cada pieza resalta el equilibrio entre lo natural y lo moderno, siendo perfecta para quienes aman la bisutería artesanal con estilo.', 'Set de pulseras en resorte con perlas naturales de agua dulces, dijes y balines en acero inoxidable.', 140000.00, NULL, 3),
(39, 'Candongas Ilusión', 'Su diseño liviano, moderno y resistente las convierte en el complemento ideal para destacar con estilo. Estas candongas hechas a mano combinan calidad, arte y elegancia en una sola pieza.', 'Candongas en acero inoxidable tejidas en alambrismo con murano', 30000.00, NULL, 3),
(40, 'Candongas Florecita', 'Su diseño inspirado en formas florales las convierte en un accesorio alegre y femenino, ideal para quienes buscan candongas artesanales únicas, ligeras y resistentes, perfectas para realzar cualquier look con un toque de arte hecho a mano.', 'Candongas en acero inoxidable tejidas a mano con mostacilla checa.', 35000.00, NULL, 3),
(41, 'Earcuff Ternura', 'Diseñado para lucir sin necesidad de perforaciones, este earcuff hecho a mano combina detalle, color y un acabado moderno, ideal para quienes buscan joyería artesanal contemporánea con estilo y originalidad.', 'Earcuff tejidos a mano con delicas de Miyuki y base en rodio ajustable.', 25000.00, NULL, 3);

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
(0, 'Diana Carmenza Ramirez', 'sebasaugus@hotmail.com', 'Dicaro-5871', NULL);

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
  MODIFY `id_local` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

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
