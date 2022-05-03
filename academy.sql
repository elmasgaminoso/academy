-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-05-2022 a las 22:27:30
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `academy`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `creadores`
--

CREATE TABLE `creadores` (
  `id` int(2) NOT NULL,
  `imagen` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `texto1` varchar(1000) COLLATE utf8_spanish2_ci NOT NULL,
  `texto2` varchar(1000) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `creadores`
--

INSERT INTO `creadores` (`id`, `imagen`, `texto1`, `texto2`) VALUES
(2, 'j.jpg', 'Es nuestro programador web principal, Trabajo en escribir el cÃ³digo de php, html y realizo todo el css. tambiÃ©n coordinÃ³ la distribuciÃ³n de imÃ¡genes ,texto y juego en la pÃ¡gina web.', ' It is our main web programmer, I work in writing the php, html code and I do all the css. He also coordinated the distribution of images, text and game on the website.'),
(3, 'm.jpg', 'Nuestra ilustradora, DiseÃ±Ã³ a mano todos los banners, imÃ¡genes, diseÃ±o de pÃ¡gina y tÃ­tulos, haciendo mÃ¡s llamativa la pÃ¡gina', ' Our illustrator, designed by hand all the banners, images, page design and titles, making the page more striking'),
(4, 'd.jpg', 'Nuestro segundo programador, Fue el encargado de hacer el juego, hacerlo funcional y hacer parte del cÃ³digo en la pÃ¡gina.', ' Our second programmer, was in charge of making the game, make it functional and be part of the code on the page.'),
(5, 'k.jpg', 'DiseÃ±o los personajes y tiles del juego, tambiÃ©n se encargÃ³ de la redacciÃ³n de la pÃ¡gina.', ' Design the characters and tiles of the game, also took care of the writing of the page.'),
(6, '1.jpg', '', ''),
(7, '1.png', '', ''),
(8, '2.jpg', '', ''),
(9, '2.png', '', ''),
(10, '3.jpg', '', ''),
(11, '4.jpg', '', ''),
(12, '5.jpg', '', ''),
(13, '6.jpg', '', ''),
(14, '7.jpg', '', ''),
(15, '9.jpg', '', ''),
(16, '10.jpg', '', ''),
(17, 'g.JPG', '', ''),
(18, 'h.jpeg', '', ''),
(19, 'img.jpg', '', ''),
(20, 'j.PNG', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(5) NOT NULL,
  `usuario` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `clave` int(10) NOT NULL,
  `correo` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` int(30) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha de nacimiento` date NOT NULL,
  `genero` varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  `nivel` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `clave`, `correo`, `telefono`, `nombre`, `fecha de nacimiento`, `genero`, `nivel`) VALUES
(1, 'admin', 1234, 'juandap00@hotmail.com', 12345, 'juan david', '2000-02-29', 'M', 5),
(9, 'lina', 1234, 'linagir@hotmail.com', 12126, 'lina cecilia', '2020-02-13', 'F', 4),
(2, 'hola', 1234, 'linagir@hotmail.com', 2454, 'hola', '2020-02-01', 'm', 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `creadores`
--
ALTER TABLE `creadores`
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
-- AUTO_INCREMENT de la tabla `creadores`
--
ALTER TABLE `creadores`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
