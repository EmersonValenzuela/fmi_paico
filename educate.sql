-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-10-2021 a las 01:23:33
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `educate`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `fecha` date NOT NULL DEFAULT current_timestamp(),
  `hora` time NOT NULL DEFAULT current_timestamp(),
  `image` text NOT NULL,
  `image2` text NOT NULL,
  `image3` text NOT NULL,
  `curso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `blog`
--

INSERT INTO `blog` (`id`, `title`, `description`, `fecha`, `hora`, `image`, `image2`, `image3`, `curso`) VALUES
(64, '´Primer Blogg', 'asdasdasdasd', '2021-02-25', '20:14:29', '26022021021429_84903.jpg', '26022021021429_849031.jpg', '26022021021429_849032.jpg', 27);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_curso`
--

CREATE TABLE `categoria_curso` (
  `id_categoria` int(11) NOT NULL,
  `nombre_categoria` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria_curso`
--

INSERT INTO `categoria_curso` (`id_categoria`, `nombre_categoria`) VALUES
(1, 'Cursos de Especialización'),
(2, 'Cursos Secundaria'),
(3, 'Cursos Primaria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `iduser` varchar(11) NOT NULL,
  `idblog` varchar(11) NOT NULL,
  `comentario` varchar(255) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comments`
--

INSERT INTO `comments` (`id`, `iduser`, `idblog`, `comentario`, `fecha`) VALUES
(60, '14', '64', 'Comentario 1', '2021-02-27 19:30:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id_curso` int(11) NOT NULL,
  `nombre_curso` text NOT NULL,
  `descripcion_curso` text NOT NULL,
  `beneficio_curso` text NOT NULL,
  `silabus_curso` text NOT NULL,
  `img_curso` text NOT NULL,
  `fecha_curso` date NOT NULL DEFAULT current_timestamp(),
  `id_profesor` int(11) NOT NULL,
  `categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id_curso`, `nombre_curso`, `descripcion_curso`, `beneficio_curso`, `silabus_curso`, `img_curso`, `fecha_curso`, `id_profesor`, `categoria`) VALUES
(22, 'Lógica de Programacion', '                        <p>Primer Contenido</p>\r\n\r\n                        <h5 class=\"sub-title\">subtitulo</h5>\r\n\r\n                        <p>Segundo Contenido</p>\r\n\r\n                        <ul class=\"courses-details-list\">\r\n                            <li>\r\n                                <i class=\"far fa-check-circle\"></i>\r\n                                <p>item </p>\r\n                            </li>\r\n                            <li>\r\n                                <i class=\"far fa-check-circle\"></i>\r\n                                <p>item </p>\r\n                            </li>\r\n                            <li>\r\n                                <i class=\"far fa-check-circle\"></i>\r\n                                <p>item</p>\r\n                            </li>\r\n                        </ul>', '                                    <p>Contenido</p>\r\n                                    <ul class=\"courses-details-list\">\r\n                                        <li>\r\n                                            <i class=\"far fa-check-circle\"></i>\r\n                                            <p>Item </p>\r\n                                        </li>\r\n                                        <li>\r\n                                            <i class=\"far fa-check-circle\"></i>\r\n                                            <p>Item</p>\r\n                                        </li>\r\n                                        <li>\r\n                                            <i class=\"far fa-check-circle\"></i>\r\n                                            <p>Item </p>\r\n                                        </li>\r\n                                    </ul>', '                                        <div class=\"col-md-4 col-sm-6\">\r\n                                            <div class=\"single-curriculum\">\r\n                                                <h4 class=\"title\">2nd Semester</h4>\r\n                                                <ul class=\"curriculum-list\">\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.1: Introduction</a></li>\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.2: Know about BBA</a></li>\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.3: How to improve</a></li>\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.4: Business Math</a></li>\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.1: Social Marketing</a></li>\r\n                                                </ul>\r\n                                            </div>                                           \r\n                                        </div>\r\n                                        <div class=\"col-md-4 col-sm-6\">\r\n                                            <div class=\"single-curriculum\">\r\n                                                <h4 class=\"title\">3rd Semester</h4>\r\n                                                <ul class=\"curriculum-list\">\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.1: Introduction</a></li>\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.2: Know about BBA</a></li>\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.3: How to improve</a></li>\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.4: Business Math</a></li>\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.1: Social Marketing</a></li>\r\n                                                </ul>\r\n                                            </div>                                           \r\n                                        </div>\r\n                                        <div class=\"col-md-4 col-sm-6\">\r\n                                            <div class=\"single-curriculum\">\r\n                                                <h4 class=\"title\">4th Semester</h4>\r\n                                                <ul class=\"curriculum-list\">\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.1: Introduction</a></li>\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.2: Know about BBA</a></li>\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.3: How to improve</a></li>\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.4: Business Math</a></li>\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.1: Social Marketing</a></li>\r\n                                                </ul>\r\n                                            </div>                                           \r\n                                        </div>\r\n                                        <div class=\"col-md-4 col-sm-6\">\r\n                                            <div class=\"single-curriculum\">\r\n                                                <h4 class=\"title\">5th Semester</h4>\r\n                                                <ul class=\"curriculum-list\">\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.1: Introduction</a></li>\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.2: Know about BBA</a></li>\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.3: How to improve</a></li>\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.4: Business Math</a></li>\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.1: Social Marketing</a></li>\r\n                                                </ul>\r\n                                            </div>                                           \r\n                                        </div>\r\n                                        <div class=\"col-md-4 col-sm-6\">\r\n                                            <div class=\"single-curriculum\">\r\n                                                <h4 class=\"title\">6th Semester</h4>\r\n                                                <ul class=\"curriculum-list\">\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.1: Introduction</a></li>\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.2: Know about BBA</a></li>\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.3: How to improve</a></li>\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.4: Business Math</a></li>\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.1: Social Marketing</a></li>\r\n                                                </ul>\r\n                                            </div>                                           \r\n                                        </div>\r\n                                        <div class=\"col-md-4 col-sm-6\">\r\n                                            <div class=\"single-curriculum\">\r\n                                                <h4 class=\"title\">7st Semester</h4>\r\n                                                <ul class=\"curriculum-list\">\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.1: Introduction</a></li>\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.2: Know about BBA</a></li>\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.3: How to improve</a></li>\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.4: Business Math</a></li>\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.1: Social Marketing</a></li>\r\n                                                </ul>\r\n                                            </div>                                           \r\n                                        </div>\r\n', '24022021112620_66414.png', '2021-02-24', 5, 1),
(23, 'Base de datos', 'Base de datos', 'Base de datos', 'Base de datos', '24022021113012_130.png', '2021-02-24', 5, 1),
(24, 'Desarrollo web', 'Desarrollo web', 'Desarrollo web', 'Desarrollo web', '24022021113120_41181.jpg', '2021-02-24', 5, 1),
(25, 'Aritmética', 'Aritmética', 'Aritmética', 'Aritmética', '24022021113251_79323.jpg', '2021-02-24', 5, 2),
(26, 'Matemáticas', 'Matemáticas', 'Matemáticas', 'Matemáticas', '24022021113331_41027.jpg', '2021-02-24', 5, 3),
(27, 'Comunicación', '                        <p>Primer Contenido</p>\r\n\r\n                        <h5 class=\"sub-title\">subtitulo</h5>\r\n\r\n                        <p>Segundo Contenido</p>\r\n\r\n                        <ul class=\"courses-details-list\">\r\n                            <li>\r\n                                <i class=\"far fa-check-circle\"></i>\r\n                                <p>item </p>\r\n                            </li>\r\n                            <li>\r\n                                <i class=\"far fa-check-circle\"></i>\r\n                                <p>item </p>\r\n                            </li>\r\n                            <li>\r\n                                <i class=\"far fa-check-circle\"></i>\r\n                                <p>item</p>\r\n                            </li>\r\n                        </ul>\r\n', '                          <p>Contenido</p>\r\n                                    <ul class=\"courses-details-list\">\r\n                                        <li>\r\n                                            <i class=\"far fa-check-circle\"></i>\r\n                                            <p>Item </p>\r\n                                        </li>\r\n                                        <li>\r\n                                            <i class=\"far fa-check-circle\"></i>\r\n                                            <p>Item</p>\r\n                                        </li>\r\n                                        <li>\r\n                                            <i class=\"far fa-check-circle\"></i>\r\n                                            <p>Item </p>\r\n                                        </li>\r\n                                    </ul>\r\n\r\n', '\r\n\r\n\r\n\r\n\r\n                                        <div class=\"col-md-4 col-sm-6\">\r\n                                            <div class=\"single-curriculum\">\r\n                                                <h4 class=\"title\">2nd Semester</h4>\r\n                                                <ul class=\"curriculum-list\">\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.1: Introduction</a></li>\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.2: Know about BBA</a></li>\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.3: How to improve</a></li>\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.4: Business Math</a></li>\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.1: Social Marketing</a></li>\r\n                                                </ul>\r\n                                            </div>                                           \r\n                                        </div>\r\n                                        <div class=\"col-md-4 col-sm-6\">\r\n                                            <div class=\"single-curriculum\">\r\n                                                <h4 class=\"title\">3rd Semester</h4>\r\n                                                <ul class=\"curriculum-list\">\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.1: Introduction</a></li>\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.2: Know about BBA</a></li>\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.3: How to improve</a></li>\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.4: Business Math</a></li>\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.1: Social Marketing</a></li>\r\n                                                </ul>\r\n                                            </div>                                           \r\n                                        </div>\r\n                                        <div class=\"col-md-4 col-sm-6\">\r\n                                            <div class=\"single-curriculum\">\r\n                                                <h4 class=\"title\">4th Semester</h4>\r\n                                                <ul class=\"curriculum-list\">\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.1: Introduction</a></li>\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.2: Know about BBA</a></li>\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.3: How to improve</a></li>\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.4: Business Math</a></li>\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.1: Social Marketing</a></li>\r\n                                                </ul>\r\n                                            </div>                                           \r\n                                        </div>\r\n                                        <div class=\"col-md-4 col-sm-6\">\r\n                                            <div class=\"single-curriculum\">\r\n                                                <h4 class=\"title\">5th Semester</h4>\r\n                                                <ul class=\"curriculum-list\">\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.1: Introduction</a></li>\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.2: Know about BBA</a></li>\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.3: How to improve</a></li>\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.4: Business Math</a></li>\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.1: Social Marketing</a></li>\r\n                                                </ul>\r\n                                            </div>                                           \r\n                                        </div>\r\n                                        <div class=\"col-md-4 col-sm-6\">\r\n                                            <div class=\"single-curriculum\">\r\n                                                <h4 class=\"title\">6th Semester</h4>\r\n                                                <ul class=\"curriculum-list\">\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.1: Introduction</a></li>\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.2: Know about BBA</a></li>\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.3: How to improve</a></li>\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.4: Business Math</a></li>\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.1: Social Marketing</a></li>\r\n                                                </ul>\r\n                                            </div>                                           \r\n                                        </div>\r\n                                        <div class=\"col-md-4 col-sm-6\">\r\n                                            <div class=\"single-curriculum\">\r\n                                                <h4 class=\"title\">7st Semester</h4>\r\n                                                <ul class=\"curriculum-list\">\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.1: Introduction</a></li>\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.2: Know about BBA</a></li>\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.3: How to improve</a></li>\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.4: Business Math</a></li>\r\n                                                    <li><a href=\"#\"><i class=\"fal fa-book\"></i> Lessons 1.1: Social Marketing</a></li>\r\n                                                </ul>\r\n                                            </div>                                           \r\n                                        </div>', '28022021034739_44545.jpg', '2021-02-27', 7, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dc_educación`
--

CREATE TABLE `dc_educación` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `school` varchar(100) NOT NULL,
  `time` text NOT NULL,
  `id_teacher` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `dc_educación`
--

INSERT INTO `dc_educación` (`id`, `title`, `school`, `time`, `id_teacher`) VALUES
(12, 'Linea Blanca', 'sad', 'asdasdasdas', 5),
(14, 'Tecnico en Informatica', 'Instituto Gilda ', '15/03/2017 Al 23/12/2019', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dc_experience`
--

CREATE TABLE `dc_experience` (
  `id` int(11) NOT NULL,
  `asignation` text NOT NULL,
  `place` varchar(40) NOT NULL,
  `time` text NOT NULL,
  `id_teacher` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `dc_experience`
--

INSERT INTO `dc_experience` (`id`, `asignation`, `place`, `time`, `id_teacher`) VALUES
(6, 'asdasdasd', 'asdasdasd', 'asdasdasdas', 5),
(7, 'Tutor del Aula de innovacion', 'I.E.P San pedro', '15/03/2017 Al 23/12/2019', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `emails`
--

CREATE TABLE `emails` (
  `id_email` int(11) NOT NULL,
  `name_email` text NOT NULL,
  `email` text NOT NULL,
  `cell_email` text NOT NULL,
  `subject_email` text NOT NULL,
  `coment_email` text NOT NULL,
  `estado_email` int(11) NOT NULL,
  `date_email` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `emails`
--

INSERT INTO `emails` (`id_email`, `name_email`, `email`, `cell_email`, `subject_email`, `coment_email`, `estado_email`, `date_email`) VALUES
(27, 'Emerson Valenzuela', 'valenestradam1@gmail.com', '926651423', 'Se suspendio mi cuenta por razón de virus', 'PruebA MEnsaje', 2, '2021-02-27 19:31:56'),
(28, 'Marlon Estrada', 'leon10e.01@gmail.com', '926651423', 'Cuenta suspendida', 'Porfavor no suspenda mi cuenta', 2, '2021-02-27 21:59:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id` int(11) NOT NULL,
  `rol` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id`, `rol`) VALUES
(1, 'Administrador'),
(2, 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `profession` varchar(40) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `concept` varchar(245) NOT NULL,
  `foto` text NOT NULL,
  `register` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `profession`, `designation`, `concept`, `foto`, `register`) VALUES
(5, 'pki-validation', 'tecnico en informatica 2', 'CTA', 's<sdasdassaasd d asdsadasd asd', '10022021024439_32717.jpg', '2021-02-09'),
(7, 'Emerson Valenzuela Estrada', 'tecnico en informatica ', 'Desarrollador Web', 'desarrolla las paginas webs y se encargga de la maquetación', '28022021033851_33629.jpg', '2021-02-27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(9) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `idRol` int(11) NOT NULL,
  `photo` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `username`, `pass`, `idRol`, `photo`) VALUES
(1, 'administrador', 'info_ngeducate@sysm.com\r\n', '', 'admin', '123', 1, '24092019015612_71951_user.png'),
(10, 'Emerson Valenzuela', 'valenestradam1@gmail.com', '926651423', 'emerson', '123', 2, '06022021061252_43613.jpg'),
(12, 'Juana Huamani', 'valenestradam1@gmail.com', '926651423', 'Juana', '123', 2, '08022021120034_68107.jpg'),
(13, 'Emerson Valenzuela', 'valenestradam1@gmail.com', '926651423', '123', '123', 2, NULL),
(14, 'Emerson Valenzuela', 'valenestradam1@gmail.com', '926651423', 'marlon123', '123', 2, '28022021013122_90687.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categoria_curso`
--
ALTER TABLE `categoria_curso`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id_curso`);

--
-- Indices de la tabla `dc_educación`
--
ALTER TABLE `dc_educación`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `dc_experience`
--
ALTER TABLE `dc_experience`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id_email`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT de la tabla `categoria_curso`
--
ALTER TABLE `categoria_curso`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `dc_educación`
--
ALTER TABLE `dc_educación`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `dc_experience`
--
ALTER TABLE `dc_experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `emails`
--
ALTER TABLE `emails`
  MODIFY `id_email` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
