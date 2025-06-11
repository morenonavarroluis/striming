-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-06-2025 a las 10:08:34
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
-- Base de datos: `video_admin`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rols`
--

CREATE TABLE `rols` (
  `id_rols` int(11) NOT NULL,
  `roles` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rols`
--

INSERT INTO `rols` (`id_rols`, `roles`) VALUES
(1, 'administrador'),
(2, 'usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `id_rol`) VALUES
(3, 'admin', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1),
(4, 'user', '7c4a8d09ca3762af61e59520943dc26494f8941b', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `video`
--

CREATE TABLE `video` (
  `video_id` int(11) NOT NULL,
  `video_name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `fecha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `video`
--

INSERT INTO `video` (`video_id`, `video_name`, `location`, `fecha`) VALUES
(1, '202506071749279447', 'videos/202506071749279447.mp4', '2025-06-07'),
(2, '202506071749280663', 'videos/202506071749280663.mp4', '2025-06-07'),
(3, '202506071749281697', 'videos/202506071749281697.mp4', '2025-06-07'),
(4, '202506071749281708', 'videos/202506071749281708.mp4', '2025-06-07'),
(5, '202506071749281737', 'videos/202506071749281737.mp4', '2025-06-07'),
(6, '202506071749281746', 'videos/202506071749281746.mp4', '2025-06-07'),
(7, '202506071749281762', 'videos/202506071749281762.mp4', '2025-06-07'),
(8, '202506071749281784', 'videos/202506071749281784.mp4', '2025-06-07'),
(9, '202506071749281796', 'videos/202506071749281796.mp4', '2025-06-07'),
(10, '202506071749281821', 'videos/202506071749281821.mp4', '2025-06-07'),
(11, '202506071749281835', 'videos/202506071749281835.mp4', '2025-06-07'),
(12, '202506071749281848', 'videos/202506071749281848.mp4', '2025-06-07'),
(13, '202506071749281861', 'videos/202506071749281861.mp4', '2025-06-07'),
(14, '202506071749281873', 'videos/202506071749281873.mp4', '2025-06-07'),
(15, '202506071749281886', 'videos/202506071749281886.mp4', '2025-06-07'),
(16, '202506071749281934', 'videos/202506071749281934.mp4', '2025-06-07'),
(17, '202506071749282045', 'videos/202506071749282045.mp4', '2025-06-07'),
(18, '202506071749282059', 'videos/202506071749282059.mp4', '2025-06-07'),
(19, '202506071749282073', 'videos/202506071749282073.mp4', '2025-06-07'),
(20, '202506071749282112', 'videos/202506071749282112.mp4', '2025-06-07');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `rols`
--
ALTER TABLE `rols`
  ADD PRIMARY KEY (`id_rols`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `id_rol` (`id_rol`);

--
-- Indices de la tabla `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `rols`
--
ALTER TABLE `rols`
  MODIFY `id_rols` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `video`
--
ALTER TABLE `video`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `rols` (`id_rols`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
