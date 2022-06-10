-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-06-2022 a las 23:51:37
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
-- Estructura de tabla para la tabla `archivos`
--

CREATE TABLE `archivos` (
  `id` int(11) NOT NULL,
  `Id_clase` int(30) NOT NULL,
  `Nombre_archivo` varchar(100) NOT NULL,
  `Id_estudiante` int(11) NOT NULL,
  `Id_materia` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clases`
--

CREATE TABLE `clases` (
  `Id` int(11) NOT NULL,
  `Nombre_clase` varchar(100) NOT NULL,
  `Info_clase` varchar(100) NOT NULL,
  `Archivo_clase` varchar(100) NOT NULL,
  `Id_materia` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clases`
--

INSERT INTO `clases` (`Id`, `Nombre_clase`, `Info_clase`, `Archivo_clase`, `Id_materia`) VALUES
(8, 'Clase 1 - Diagramas de Flujo', 'Realizar taller de diagrama de flujo', 'Taller diagrama de flujo.pdf', 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `Id_materia` int(100) NOT NULL,
  `Nombre_materia` varchar(30) NOT NULL,
  `Imagen_materia` varchar(100) NOT NULL,
  `Id_profesor` int(11) NOT NULL,
  `Direccion_notas` varchar(100) NOT NULL,
  `Direccion_actividades` varchar(100) NOT NULL,
  `Direccion_notasE` varchar(100) NOT NULL,
  `Direccion_actividadesE` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`Id_materia`, `Nombre_materia`, `Imagen_materia`, `Id_profesor`, `Direccion_notas`, `Direccion_actividades`, `Direccion_notasE`, `Direccion_actividadesE`) VALUES
(13, 'Lógica de programación ', 'Logica.png', 9, 'notaslogicaprofe.php', 'logicadeprogramacionprofesor.php\r\n', 'notaslogica.php', 'logicadeprogramacion.php'),
(14, 'Programacion ', 'programacion.png', 9, 'porgramacionnotasprofesor.php', 'programacionprofesor.php', 'programacionnotas.php', 'programacion.php'),
(15, 'Base de datos', 'Base-de-datos.png', 9, 'basededatosprofesor.php', 'basededatosprofesor.php', 'basededatosnotas.php', 'basededatos.php'),
(16, 'Ingles', 'Ingles.png', 9, 'inglesnotasprofesor.php', 'inglesprofesor.php', 'inglesnotas.php', 'ingles.php'),
(17, 'Hojas de calculo', 'Hojas-de-calculo.png', 9, 'hojasdecalculonotasprofesor.php', 'hojasdecalculoprofesor.php', 'hojasdecalculonotas.php\r\n', 'hojasdecalculo.php'),
(18, 'Nuevas tecnologías', 'Nuevas-tecnologias.png', 9, 'nuevastecnotasprofesor.php', 'nuevastecprofesor.php', 'nuevastecnotas.php', 'nuevastec.php');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias_asignadas`
--

CREATE TABLE `materias_asignadas` (
  `Id` int(11) NOT NULL,
  `Id_Estudiante` int(30) NOT NULL,
  `Id_materia` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materias_asignadas`
--

INSERT INTO `materias_asignadas` (`Id`, `Id_Estudiante`, `Id_materia`) VALUES
(7, 2, 1),
(8, 2, 2),
(9, 2, 13),
(10, 2, 14),
(11, 2, 15),
(12, 2, 16),
(15, 2, 17),
(16, 2, 18);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(5) NOT NULL,
  `direccionf` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `foto` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `usuario` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `clave` int(10) NOT NULL,
  `correo` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` int(30) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha de nacimiento` date NOT NULL,
  `genero` varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  `nivel` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `direccionf`, `foto`, `usuario`, `clave`, `correo`, `telefono`, `nombre`, `apellido`, `fecha de nacimiento`, `genero`, `nivel`) VALUES
(1, '', 'Foto juan1.jpg', 'admin', 1234, 'juandap00@hotmail.com', 12345, 'juan david', 'Peralta giraldo', '2000-02-29', 'M', 3),
(9, '', 'Profesora.jpg', 'lina', 1234, 'linagir@hotmail.com', 12126, 'lina', 'cecilia', '2020-02-13', 'F', 2),
(2, '', 'Estudiante foto.jpg', 'Estudiante', 1234, 'estudiante@gmail.com', 2454, 'Estudiante ', '1', '2020-02-01', 'm', 1),
(45, 'Resource id #11', '221088296_956513668522450_8912262950145641174_n.jpg', 'bital001', 1234, 'juandap00@hotmail.com', 74586863, 'jesus', 'juandap00@hotmail.com', '2022-06-14', 'M', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `archivos`
--
ALTER TABLE `archivos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Id_clase` (`Id_clase`),
  ADD KEY `Id_materia` (`Id_materia`),
  ADD KEY `Id_estudiante` (`Id_estudiante`);

--
-- Indices de la tabla `clases`
--
ALTER TABLE `clases`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_materia` (`Id_materia`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`Id_materia`),
  ADD KEY `Id_profesor` (`Id_profesor`);

--
-- Indices de la tabla `materias_asignadas`
--
ALTER TABLE `materias_asignadas`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `archivos`
--
ALTER TABLE `archivos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `clases`
--
ALTER TABLE `clases`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `Id_materia` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `materias_asignadas`
--
ALTER TABLE `materias_asignadas`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
