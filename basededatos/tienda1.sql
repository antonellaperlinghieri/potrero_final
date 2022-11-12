-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 11-11-2022 a las 16:00:31
-- Versión del servidor: 5.7.34
-- Versión de PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombreproducto` varchar(50) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `precio` int(50) NOT NULL,
  `imagen` varchar(240) NOT NULL,
  `imagen1` varchar(255) NOT NULL,
  `imagen2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombreproducto`, `descripcion`, `precio`, `imagen`, `imagen1`, `imagen2`) VALUES
(19, 'SOFA CALIFORNIA', 'California le dará a tu ambiente un estilo moderno y relajado, es un sofá clásico de 3 cuerpos íntegramente tapizado, de fuerte estructura, posee funda en tela tussor, por lo que su principal característica es ser desenfundable.', 327000, 'producto-9.png', 'sofa-california.png', 'sofa-california1.png'),
(20, 'OKLAHOMA CUERO', 'El sillón reclinable Oklahoma te invita a disfrutar de tecnología y confort con un producto exclusivo . Es una propuesta de alta gama ideal para incorporar en ambientes de diseño exigente. ', 1396623, 'producto-5.png', 'sillon-oklahoma.png', 'sillon-oklahoma2.png'),
(21, 'GILBERT XL', 'El sofá Gilbert de diseño italiano, le aportara a tu living elegancia, comodidad y firmeza. Es ideal para dividir ambientes. Está conformado por 2 módulos de 1.50 mts cada uno, unidos.', 134000, 'producto-7.png', 'sofa-gilbert.png', 'sofa-gilbert2.png'),
(22, 'MICHIGAN', 'El sofá Michigan aporta un diseño elegante y novedoso a la gama de sofás convertibles en cama de Divanlito. Se compone de 2 módulos de 1mt de ancho cada uno, sus brazos delgados permiten maximizar la utilización del espacio.', 777000, 'producto-2.png', 'sofa-michigan.png', 'sofa-michigan2.png'),
(23, 'MONTANA', 'El sofá Montana es ideal para optimizar espacio y disfrutar de la comodidad absoluta en tu hogar. Se compone de 2 módulos de 1 mt cada uno, y brazos de 15 cm. Última tecnología de confort en almohadones y asientos con resortes, perdurables en el tiempo.', 600000, 'montana.png', 'sofa-montana.png', 'sofa-montana1.png'),
(24, 'PREGO', 'El sofá cama Prego es contemporáneo, minimalista, ultra resistente y estéticamente perfecto para vos. Importado italiano de ultima generacion con tecnología exclusiva de Divanlito, podrás disfrutar de un práctico sistema de apertura.', 430877, 'producto-2.png', 'sofa-prego.jpeg', 'sofa-prego1.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre_completo` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre_completo`, `correo`, `usuario`, `password`) VALUES
(1, 'ANTONELLA', 'ANTONELLA@GMAIL.COM', 'ANTONELLA', '1485'),
(2, 'salsita', 'salsita@gmail.com', 'sal', '1485'),
(3, 'ANTONELLA', 'antonellaperlinghieri19988@gmail.com', 'antonella', 'antonellaperlinghieri23'),
(4, 'ANTONELLA', 'antonella26@gmail.com', 'antonella', 'antonellaperlinghieri23'),
(6, 'antonella', 'antonella1@gmail.com', 'anto', '12345'),
(7, '', '', '', ''),
(8, 'antonella perlinghieri', 'anto@gmail.com', 'antonella', 'salypimi');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
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
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
