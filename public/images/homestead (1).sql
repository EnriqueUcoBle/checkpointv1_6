-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-05-2019 a las 01:28:20
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `homestead`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `usuario_id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `sexo` varchar(20) DEFAULT NULL,
  `fecha_nacimiento` date NOT NULL,
  `telefono_celular` int(11) NOT NULL,
  `telefono_fijo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`usuario_id`, `nombre`, `apellidos`, `direccion`, `email`, `sexo`, `fecha_nacimiento`, `telefono_celular`, `telefono_fijo`) VALUES
(1, 'manuel enrique', 'uco  ble', 'calle 20', 'manuel@gmail.com', 'masculino', '1996-12-03', 99330803, 93411899);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `matricula` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `semestre_actual` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`matricula`, `nombre`, `apellidos`, `sexo`, `fecha_nacimiento`, `semestre_actual`) VALUES
('23125423', 'miguel angel', 'uco fraire', 'masculino', '2019-05-01', '7'),
('47823572', 'javier ezequiel', 'zavala martinez', 'masculino', '2019-05-06', '8'),
('729852345', 'francisco', 'romero rosado', 'masculino', '2019-05-24', '5'),
('7523957', 'diana cristina', 'uco fraire', 'femenino', '2019-05-01', '7'),
('75923852', 'ana luz', 'diaz castillejo', 'femenino', '2019-05-03', '3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencias`
--

CREATE TABLE `asistencias` (
  `id` int(11) NOT NULL,
  `fecha` varchar(45) DEFAULT NULL,
  `grupos_id` int(11) NOT NULL,
  `alumno_matricula` varchar(45) NOT NULL,
  `clave_docente` varchar(45) NOT NULL,
  `asistencia` varchar(10) DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificaciones`
--

CREATE TABLE `calificaciones` (
  `id` int(11) NOT NULL,
  `parcial_1` varchar(45) DEFAULT NULL,
  `parcial_2` varchar(45) DEFAULT NULL,
  `parcial_3` varchar(45) DEFAULT NULL,
  `examen_final` varchar(45) DEFAULT NULL,
  `promedio_general` varchar(45) DEFAULT NULL,
  `alumnos_matricula` varchar(45) NOT NULL,
  `clave_docente` varchar(45) NOT NULL,
  `materia_id` int(11) NOT NULL,
  `periodo_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capturista`
--

CREATE TABLE `capturista` (
  `usuario_id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `sexo` varchar(20) DEFAULT NULL,
  `fecha_nacimiento` date NOT NULL,
  `telefono_celular` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `capturista`
--

INSERT INTO `capturista` (`usuario_id`, `nombre`, `apellidos`, `email`, `sexo`, `fecha_nacimiento`, `telefono_celular`) VALUES
(3, 'javier ezequiel', 'romero vaca', 'romerova@gmail.com', 'masculino', '2019-03-01', 233453474);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE `docentes` (
  `clave_docente` varchar(45) NOT NULL,
  `usuario_id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `direccion` varchar(45) DEFAULT 'NA',
  `puesto` varchar(45) NOT NULL,
  `email` varchar(45) DEFAULT 'NA',
  `sexo` varchar(20) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `telefono_celular` varchar(20) DEFAULT 'NA',
  `telefono_fijo` varchar(20) DEFAULT 'NA'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `docentes`
--

INSERT INTO `docentes` (`clave_docente`, `usuario_id`, `nombre`, `apellidos`, `direccion`, `puesto`, `email`, `sexo`, `fecha_nacimiento`, `telefono_celular`, `telefono_fijo`) VALUES
('15301035', 4, 'jose ', 'roma machin', 'NA', 'docente de plantel 28', 'NA', 'masculino', '2015-06-01', '9933080317', 'NA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE `grupos` (
  `id` int(11) NOT NULL,
  `periodo` varchar(45) DEFAULT NULL,
  `semestre` varchar(45) DEFAULT NULL,
  `materia_id` int(11) NOT NULL,
  `clave_docente` varchar(45) NOT NULL,
  `alumno_matricula` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kardex`
--

CREATE TABLE `kardex` (
  `materia` varchar(45) NOT NULL,
  `periodo` varchar(45) NOT NULL,
  `calificacion` varchar(45) NOT NULL,
  `oportunidad_1` varchar(45) DEFAULT NULL,
  `periodo_1` varchar(45) DEFAULT NULL,
  `oportunidad_2` varchar(45) DEFAULT NULL,
  `periodo_2` varchar(45) DEFAULT NULL,
  `oportunidad_3` varchar(45) DEFAULT NULL,
  `periodo_3` varchar(45) DEFAULT NULL,
  `alumno_matricula` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id` int(11) NOT NULL,
  `clave` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id`, `clave`, `nombre`) VALUES
(1, 'mat-12', 'matematicas'),
(2, 'esp-2', 'español'),
(3, 'geo-ds', 'geografia'),
(4, 'cie-nat', 'ciencias natulares');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodo`
--

CREATE TABLE `periodo` (
  `id` varchar(10) NOT NULL,
  `ano` varchar(45) DEFAULT NULL,
  `periodo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `periodo`
--

INSERT INTO `periodo` (`id`, `ano`, `periodo`) VALUES
('2018-A', '2018', 'A'),
('2018-B', '2018', 'B'),
('2019-A', '2019', 'A'),
('2019-B', '2019', 'B');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes`
--

CREATE TABLE `reportes` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `matricula_alumno` varchar(45) NOT NULL,
  `encargado` varchar(45) DEFAULT 'servicios escolares'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutores`
--

CREATE TABLE `tutores` (
  `usuario_id` int(10) UNSIGNED NOT NULL,
  `alumno_matricula` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `sexo` varchar(20) DEFAULT NULL,
  `fecha_nacimiento` date NOT NULL,
  `telefono_celular` int(11) NOT NULL,
  `telefono_fijo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tutores`
--

INSERT INTO `tutores` (`usuario_id`, `alumno_matricula`, `nombre`, `apellidos`, `direccion`, `email`, `sexo`, `fecha_nacimiento`, `telefono_celular`, `telefono_fijo`) VALUES
(2, '23125423', 'enrique ', 'uco ble', 'calle 20', 'enrique@gmai.com', 'masculino', '2019-05-03', 99332627, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `pass` varchar(45) NOT NULL DEFAULT 'Usuario01',
  `tipo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `pass`, `tipo`) VALUES
(1, 'manuel', 'Usuario01', 'admin'),
(2, 'enrique', 'Usuario01', 'tutor'),
(3, 'javier', 'Usuario01', 'secretario'),
(4, 'jose', 'Usuario01', 'docente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`usuario_id`);

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`matricula`),
  ADD UNIQUE KEY `matricula_UNIQUE` (`matricula`);

--
-- Indices de la tabla `asistencias`
--
ALTER TABLE `asistencias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_asistencias_grupos1_idx` (`grupos_id`),
  ADD KEY `fk_asistencias_alumnos1_idx` (`alumno_matricula`),
  ADD KEY `fk_asistencias_docentes1_idx` (`clave_docente`);

--
-- Indices de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_calificaciones_alumnos1_idx` (`alumnos_matricula`),
  ADD KEY `fk_calificaciones_docentes1_idx` (`clave_docente`),
  ADD KEY `fk_calificaciones_materias1_idx` (`materia_id`),
  ADD KEY `fk_calificaciones_periodo1_idx` (`periodo_id`);

--
-- Indices de la tabla `capturista`
--
ALTER TABLE `capturista`
  ADD PRIMARY KEY (`usuario_id`);

--
-- Indices de la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD PRIMARY KEY (`clave_docente`,`usuario_id`),
  ADD KEY `fk_docentes_usuarios` (`usuario_id`);

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_grupos_materias1_idx` (`materia_id`),
  ADD KEY `fk_grupos_docentes1_idx` (`clave_docente`),
  ADD KEY `fk_grupos_alumnos1_idx` (`alumno_matricula`);

--
-- Indices de la tabla `kardex`
--
ALTER TABLE `kardex`
  ADD KEY `fk_kardex_alumnos1_idx` (`alumno_matricula`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indices de la tabla `periodo`
--
ALTER TABLE `periodo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_reportes_alumnos1_idx` (`matricula_alumno`);

--
-- Indices de la tabla `tutores`
--
ALTER TABLE `tutores`
  ADD PRIMARY KEY (`usuario_id`),
  ADD KEY `fk_tutores_alumnos1_idx` (`alumno_matricula`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `reportes`
--
ALTER TABLE `reportes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD CONSTRAINT `fk_docentes_usuarios1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `asistencias`
--
ALTER TABLE `asistencias`
  ADD CONSTRAINT `fk_asistencias_alumnos1` FOREIGN KEY (`alumno_matricula`) REFERENCES `alumnos` (`matricula`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_asistencias_docentes1` FOREIGN KEY (`clave_docente`) REFERENCES `docentes` (`clave_docente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_asistencias_grupos1` FOREIGN KEY (`grupos_id`) REFERENCES `grupos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD CONSTRAINT `fk_calificaciones_alumnos1` FOREIGN KEY (`alumnos_matricula`) REFERENCES `alumnos` (`matricula`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_calificaciones_docentes1` FOREIGN KEY (`clave_docente`) REFERENCES `docentes` (`clave_docente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_calificaciones_materias1` FOREIGN KEY (`materia_id`) REFERENCES `materias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_calificaciones_periodo1` FOREIGN KEY (`periodo_id`) REFERENCES `periodo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `capturista`
--
ALTER TABLE `capturista`
  ADD CONSTRAINT `fk_docentes_usuarios2` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD CONSTRAINT `fk_docentes_usuarios` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD CONSTRAINT `fk_grupos_alumnos1` FOREIGN KEY (`alumno_matricula`) REFERENCES `alumnos` (`matricula`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_grupos_docentes1` FOREIGN KEY (`clave_docente`) REFERENCES `docentes` (`clave_docente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_grupos_materias1` FOREIGN KEY (`materia_id`) REFERENCES `materias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `kardex`
--
ALTER TABLE `kardex`
  ADD CONSTRAINT `fk_kardex_alumnos1` FOREIGN KEY (`alumno_matricula`) REFERENCES `alumnos` (`matricula`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD CONSTRAINT `fk_reportes_alumnos1` FOREIGN KEY (`matricula_alumno`) REFERENCES `alumnos` (`matricula`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tutores`
--
ALTER TABLE `tutores`
  ADD CONSTRAINT `fk_docentes_usuarios0` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tutores_alumnos1` FOREIGN KEY (`alumno_matricula`) REFERENCES `alumnos` (`matricula`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
