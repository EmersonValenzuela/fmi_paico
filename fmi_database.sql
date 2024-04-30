-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 30, 2024 at 10:27 AM
-- Server version: 8.0.30
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `educate`
--
DROP DATABASE IF EXISTS `educate`;
CREATE DATABASE IF NOT EXISTS `educate` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `educate`;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE `blog` (
  `id` int NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `image` text NOT NULL,
  `image2` text NOT NULL,
  `image3` text NOT NULL,
  `curso` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categoria_curso`
--

DROP TABLE IF EXISTS `categoria_curso`;
CREATE TABLE `categoria_curso` (
  `id_categoria` int NOT NULL,
  `nombre_categoria` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `categoria_curso`
--

INSERT INTO `categoria_curso` (`id_categoria`, `nombre_categoria`) VALUES
(1, 'Cursos de Especialización'),
(2, 'Cursos Secundaria'),
(3, 'Cursos Primaria');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `id` int NOT NULL,
  `iduser` varchar(11) NOT NULL,
  `idblog` varchar(11) NOT NULL,
  `comentario` varchar(255) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `iduser`, `idblog`, `comentario`, `fecha`) VALUES
(61, '15', '64', 'Hola buenos dias', '2022-07-08 19:24:54');

-- --------------------------------------------------------

--
-- Table structure for table `cursos`
--

DROP TABLE IF EXISTS `cursos`;
CREATE TABLE `cursos` (
  `id_curso` int NOT NULL,
  `nombre_curso` text NOT NULL,
  `descripcion_curso` text NOT NULL,
  `beneficio_curso` text NOT NULL,
  `silabus_curso` text NOT NULL,
  `img_curso` text NOT NULL,
  `fecha_curso` date DEFAULT NULL,
  `id_profesor` int NOT NULL,
  `categoria` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dc_educación`
--

DROP TABLE IF EXISTS `dc_educación`;
CREATE TABLE `dc_educación` (
  `id` int NOT NULL,
  `title` varchar(100) NOT NULL,
  `school` varchar(100) NOT NULL,
  `time` text NOT NULL,
  `id_teacher` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `dc_educación`
--

INSERT INTO `dc_educación` (`id`, `title`, `school`, `time`, `id_teacher`) VALUES
(12, 'Linea Blanca', 'sad', 'asdasdasdas', 5),
(14, 'Tecnico en Informatica', 'Instituto Gilda ', '15/03/2017 Al 23/12/2019', 7);

-- --------------------------------------------------------

--
-- Table structure for table `dc_experience`
--

DROP TABLE IF EXISTS `dc_experience`;
CREATE TABLE `dc_experience` (
  `id` int NOT NULL,
  `asignation` text NOT NULL,
  `place` varchar(40) NOT NULL,
  `time` text NOT NULL,
  `id_teacher` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `dc_experience`
--

INSERT INTO `dc_experience` (`id`, `asignation`, `place`, `time`, `id_teacher`) VALUES
(6, 'asdasdasd', 'asdasdasd', 'asdasdasdas', 5),
(7, 'Tutor del Aula de innovacion', 'I.E.P San pedro', '15/03/2017 Al 23/12/2019', 7);

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

DROP TABLE IF EXISTS `emails`;
CREATE TABLE `emails` (
  `id_email` int NOT NULL,
  `name_email` text NOT NULL,
  `email` text NOT NULL,
  `cell_email` text NOT NULL,
  `subject_email` text NOT NULL,
  `coment_email` text NOT NULL,
  `estado_email` int NOT NULL,
  `date_email` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`id_email`, `name_email`, `email`, `cell_email`, `subject_email`, `coment_email`, `estado_email`, `date_email`) VALUES
(27, 'Emerson Valenzuela', 'valenestradam1@gmail.com', '926651423', 'Se suspendio mi cuenta por razón de virus', 'PruebA MEnsaje', 2, '2021-02-27 19:31:56'),
(28, 'Marlon Estrada', 'leon10e.01@gmail.com', '926651423', 'Cuenta suspendida', 'Porfavor no suspenda mi cuenta', 2, '2021-02-27 21:59:05');

-- --------------------------------------------------------

--
-- Table structure for table `rol`
--

DROP TABLE IF EXISTS `rol`;
CREATE TABLE `rol` (
  `id` int NOT NULL,
  `rol` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `rol`
--

INSERT INTO `rol` (`id`, `rol`) VALUES
(1, 'Administrador'),
(2, 'cliente'),
(3, 'Blog'),
(4, 'Administrador'),
(5, 'Cotizaciones');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cos_drywall`
--

DROP TABLE IF EXISTS `tbl_cos_drywall`;
CREATE TABLE `tbl_cos_drywall` (
  `id_cos` int NOT NULL,
  `drw_id` int NOT NULL,
  `cos_griddle` varchar(11) NOT NULL,
  `cos_riel` varchar(11) NOT NULL,
  `cos_studs` varchar(11) NOT NULL,
  `cos_tin_screw` varchar(11) NOT NULL,
  `cos_tin_drw` varchar(11) NOT NULL,
  `cos_putty_bucket` varchar(11) NOT NULL,
  `cos_putty_box` varchar(11) NOT NULL,
  `cos_equine` varchar(11) NOT NULL,
  `cos_adhesive` int NOT NULL,
  `material_cos` varchar(11) NOT NULL,
  `job_cos` varchar(11) NOT NULL,
  `total` varchar(11) NOT NULL,
  `a_meters` varchar(10) NOT NULL,
  `a_griddle` varchar(10) NOT NULL,
  `a_riel` varchar(10) NOT NULL,
  `a_studs` varchar(10) NOT NULL,
  `a_tin_screw` varchar(10) NOT NULL,
  `a_tin_drw` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_cos_drywall`
--

INSERT INTO `tbl_cos_drywall` (`id_cos`, `drw_id`, `cos_griddle`, `cos_riel`, `cos_studs`, `cos_tin_screw`, `cos_tin_drw`, `cos_putty_bucket`, `cos_putty_box`, `cos_equine`, `cos_adhesive`, `material_cos`, `job_cos`, `total`, `a_meters`, `a_griddle`, `a_riel`, `a_studs`, `a_tin_screw`, `a_tin_drw`) VALUES
(1, 2, '240.00', '96.00', '408.00', '1.90', '9.70', '144.00', '144.00', '144.00', 144, '1331.60', '351.60', '1683.20', '29.3', '20', '8', '34', '162', '806.6'),
(2, 5, '240.00', '96.00', '408.00', '1.90', '9.70', '144.00', '144.00', '144.00', 144, '1331.60', '351.60', '1683.20', '29.3', '20', '8', '34', '162', '806.6');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_drywall`
--

DROP TABLE IF EXISTS `tbl_drywall`;
CREATE TABLE `tbl_drywall` (
  `id_drw` int NOT NULL,
  `name_drw` varchar(60) NOT NULL,
  `email_drw` varchar(50) NOT NULL,
  `number_drw` varchar(20) NOT NULL,
  `line_meters_drw` varchar(10) NOT NULL,
  `iron_drw` varchar(10) NOT NULL,
  `rails_drw` varchar(10) NOT NULL,
  `studs_drw` varchar(10) NOT NULL,
  `tin_screw_price_drw` varchar(10) NOT NULL,
  `drywall_screw_price` varchar(10) NOT NULL,
  `putty_price_bucket_drw` varchar(10) NOT NULL,
  `amount_putty_bucket_drw` varchar(10) NOT NULL,
  `putty_price_box_drw` varchar(10) NOT NULL,
  `amount_putty_box_drw` varchar(11) NOT NULL,
  `equine_price_drw` varchar(10) NOT NULL,
  `equine_quantity_drw` varchar(10) NOT NULL,
  `adhesive_price_drw` varchar(10) NOT NULL,
  `amount_adhesive_drw` varchar(10) NOT NULL,
  `square_meter_drw` varchar(10) NOT NULL,
  `date_drw` text NOT NULL,
  `date_ex_drw` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_drywall`
--

INSERT INTO `tbl_drywall` (`id_drw`, `name_drw`, `email_drw`, `number_drw`, `line_meters_drw`, `iron_drw`, `rails_drw`, `studs_drw`, `tin_screw_price_drw`, `drywall_screw_price`, `putty_price_bucket_drw`, `amount_putty_bucket_drw`, `putty_price_box_drw`, `amount_putty_box_drw`, `equine_price_drw`, `equine_quantity_drw`, `adhesive_price_drw`, `amount_adhesive_drw`, `square_meter_drw`, `date_drw`, `date_ex_drw`) VALUES
(1, 'Marlon Emerson', 'valenestradam1@gmail.com', '926730944', '10', '12.00', '20.00', '10.00', '20.00', '20.00', '15.00', '30', '60.00', '4', '5.00', '30', '20.00', '2', '100.00', '2024-04-09T19:47:31-05:00', '2024-04-24/-0519:47:31-05:00'),
(2, '12fioasdofn', 'ofnnqweq@gmail.com', '927638912', '12', '12.00', '12.00', '12.00', '12.00', '12.00', '12.00', '12', '12.00', '12', '12.00', '12', '12.00', '12', '12.00', '2024-04-09T19:51:19-05:00', '2024-04-24/-0519:51:19-05:00'),
(3, 'emerson', 'valenzuelaestradam@gmail.com', '926730944', '12', '12.00', '12.00', '12.00', '12.00', '12.00', '12.00', '12', '12.00', '12', '12.00', '12', '12.00', '12', '12.00', '2024-04-30T04:29:48-05:00', '2024-05-15/-0504:29:48-05:00'),
(5, 'emerson', 'valenzuelaestradam@gmail.com', '926730944', '12', '12.00', '12.00', '12.00', '12.00', '12.00', '12.00', '12', '12.00', '12', '12.00', '12', '12.00', '12', '12.00', '2024-04-30T04:30:15-05:00', '2024-05-15/-0504:30:15-05:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(9) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `idRol` int NOT NULL,
  `photo` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `username`, `pass`, `idRol`, `photo`) VALUES
(1, 'Alvaro Paico', 'adminstrador@fmi.com', 'adminstra', 'admin', '123', 4, '30042024051340_2026.png'),
(2, 'Cotizador', 'cotizacion@ssdasd.com', 'cotizacio', 'cotizador', '123', 5, '30042024051307_9067.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria_curso`
--
ALTER TABLE `categoria_curso`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dc_educación`
--
ALTER TABLE `dc_educación`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dc_experience`
--
ALTER TABLE `dc_experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id_email`);

--
-- Indexes for table `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_cos_drywall`
--
ALTER TABLE `tbl_cos_drywall`
  ADD PRIMARY KEY (`id_cos`);

--
-- Indexes for table `tbl_drywall`
--
ALTER TABLE `tbl_drywall`
  ADD PRIMARY KEY (`id_drw`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria_curso`
--
ALTER TABLE `categoria_curso`
  MODIFY `id_categoria` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `dc_educación`
--
ALTER TABLE `dc_educación`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `dc_experience`
--
ALTER TABLE `dc_experience`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `id_email` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `rol`
--
ALTER TABLE `rol`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_cos_drywall`
--
ALTER TABLE `tbl_cos_drywall`
  MODIFY `id_cos` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_drywall`
--
ALTER TABLE `tbl_drywall`
  MODIFY `id_drw` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
