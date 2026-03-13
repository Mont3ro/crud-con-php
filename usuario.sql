-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-03-2026 a las 20:33:40
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `usuario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `apellido` varchar(20) DEFAULT NULL,
  `correo` varchar(20) DEFAULT NULL,
  `direccion` varchar(20) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `numero_ficha` varchar(20) DEFAULT NULL,
  `cedula` int(20) DEFAULT NULL,
  `contraseña` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellido`, `correo`, `direccion`, `telefono`, `numero_ficha`, `cedula`, `contraseña`) VALUES
(2, 'Pedri', 'yamal', 'mariag2@mail.com', 'Calle 2 #10-02', '3000000002', 'F1002', 1000000002, 'pedrito202'),
(3, 'Carlos', 'Rodriguez', 'carlosr3@mail.com', 'Calle 3 #10-03', '3000000003', 'F1003', 1000000003, 'Carlos123'),
(4, 'Ana', 'Martinez', 'anam4@mail.com', 'Calle 4 #10-04', '3000000004', 'F1004', 1000000004, 'Ana123'),
(5, 'Luis', 'Hernandez', 'luish5@mail.com', 'Calle 5 #10-05', '3000000005', 'F1005', 1000000005, 'Luis123'),
(6, 'Laura', 'Lopez', 'laural6@mail.com', 'Calle 6 #10-06', '3000000006', 'F1006', 1000000006, 'Laura123'),
(7, 'Pedro', 'Gonzalez', 'pedrog7@mail.com', 'Calle 7 #10-07', '3000000007', 'F1007', 1000000007, 'Pedro123'),
(8, 'Sofia', 'Ramirez', 'sofiar8@mail.com', 'Calle 8 #10-08', '3000000008', 'F1008', 1000000008, 'Sofia123'),
(9, 'Diego', 'Torres', 'diegot9@mail.com', 'Calle 9 #10-09', '3000000009', 'F1009', 1000000009, 'Diego123'),
(10, 'Valentina', 'Flores', 'valef10@mail.com', 'Calle 10 #10-10', '3000000010', 'F1010', 1000000010, 'Vale123'),
(11, 'Andres', 'Diaz', 'andresd11@mail.com', 'Calle 11 #10-11', '3000000011', 'F1011', 1000000011, 'Andres123'),
(12, 'Camila', 'Vargas', 'camilav12@mail.com', 'Calle 12 #10-12', '3000000012', 'F1012', 1000000012, 'Camila123'),
(13, 'Jorge', 'Moreno', 'jorgem13@mail.com', 'Calle 13 #10-13', '3000000013', 'F1013', 1000000013, 'Jorge123'),
(14, 'Daniela', 'Castro', 'danielac14@mail.com', 'Calle 14 #10-14', '3000000014', 'F1014', 1000000014, 'Dani123'),
(15, 'Miguel', 'Rojas', 'miguelr15@mail.com', 'Calle 15 #10-15', '3000000015', 'F1015', 1000000015, 'Miguel123'),
(16, 'Paula', 'Ortiz', 'paulao16@mail.com', 'Calle 16 #10-16', '3000000016', 'F1016', 1000000016, 'Paula123'),
(17, 'Sebastian', 'Silva', 'sebass17@mail.com', 'Calle 17 #10-17', '3000000017', 'F1017', 1000000017, 'Sebas123'),
(18, 'Natalia', 'Mendoza', 'nataliam18@mail.com', 'Calle 18 #10-18', '3000000018', 'F1018', 1000000018, 'Nata123'),
(19, 'Felipe', 'Guerrero', 'felipeg19@mail.com', 'Calle 19 #10-19', '3000000019', 'F1019', 1000000019, 'Felipe123'),
(20, 'Isabella', 'Cruz', 'isabellac20@mail.com', 'Calle 20 #10-20', '3000000020', 'F1020', 1000000020, 'Isa123'),
(21, 'Ricardo', 'Reyes', 'ricardor21@mail.com', 'Calle 21 #10-21', '3000000021', 'F1021', 1000000021, 'Ricardo123'),
(22, 'Juliana', 'Pineda', 'julianap22@mail.com', 'Calle 22 #10-22', '3000000022', 'F1022', 1000000022, 'Juli123'),
(23, 'Fernando', 'Santos', 'fernandos23@mail.com', 'Calle 23 #10-23', '3000000023', 'F1023', 1000000023, 'Fer123'),
(24, 'Manuela', 'Herrera', 'manuelah24@mail.com', 'Calle 24 #10-24', '3000000024', 'F1024', 1000000024, 'Manu123'),
(25, 'Alejandro', 'Medina', 'alejandrom25@mail.co', 'Calle 25 #10-25', '3000000025', 'F1025', 1000000025, 'Alejo123'),
(26, 'Gabriela', 'Vega', 'gabrielav26@mail.com', 'Calle 26 #10-26', '3000000026', 'F1026', 1000000026, 'Gabi123'),
(27, 'Oscar', 'Rincon', 'oscarr27@mail.com', 'Calle 27 #10-27', '3000000027', 'F1027', 1000000027, 'Oscar123'),
(28, 'Daniel', 'Navarro', 'danieln28@mail.com', 'Calle 28 #10-28', '3000000028', 'F1028', 1000000028, 'Daniel123'),
(29, 'Tatiana', 'Jimenez', 'tatianaj29@mail.com', 'Calle 29 #10-29', '3000000029', 'F1029', 1000000029, 'Tati123'),
(30, 'Brayan', 'Suarez', 'brayans30@mail.com', 'Calle 30 #10-30', '3000000030', 'F1030', 1000000030, 'Brayan123'),
(31, 'Angie', 'Quintero', 'angieq31@mail.com', 'Calle 31 #10-31', '3000000031', 'F1031', 1000000031, 'Angie123'),
(32, 'Cristian', 'Valencia', 'cristianv32@mail.com', 'Calle 32 #10-32', '3000000032', 'F1032', 1000000032, 'Cristian123'),
(33, 'Karen', 'Montoya', 'karenm33@mail.com', 'Calle 33 #10-33', '3000000033', 'F1033', 1000000033, 'Karen123'),
(34, 'David', 'Arango', 'davida34@mail.com', 'Calle 34 #10-34', '3000000034', 'F1034', 1000000034, 'David123'),
(35, 'Laura', 'Cardona', 'laurac35@mail.com', 'Calle 35 #10-35', '3000000035', 'F1035', 1000000035, 'LauraC123'),
(36, 'Santiago', 'Barrera', 'santiagob36@mail.com', 'Calle 36 #10-36', '3000000036', 'F1036', 1000000036, 'Santi123'),
(37, 'Diana', 'Ospina', 'dianao37@mail.com', 'Calle 37 #10-37', '3000000037', 'F1037', 1000000037, 'Diana123'),
(38, 'Kevin', 'Galindo', 'keving38@mail.com', 'Calle 38 #10-38', '3000000038', 'F1038', 1000000038, 'Kevin123'),
(39, 'Lorena', 'Muñoz', 'lorenam39@mail.com', 'Calle 39 #10-39', '3000000039', 'F1039', 1000000039, 'Lore123'),
(40, 'Jonathan', 'Castaño', 'jonathanc40@mail.com', 'Calle 40 #10-40', '3000000040', 'F1040', 1000000040, 'Jona123'),
(41, 'Andrea', 'Salazar', 'andreas41@mail.com', 'Calle 41 #10-41', '3000000041', 'F1041', 1000000041, 'Andrea123'),
(42, 'Esteban', 'Londoño', 'estebanl42@mail.com', 'Calle 42 #10-42', '3000000042', 'F1042', 1000000042, 'Esteban123'),
(43, 'Paola', 'Marin', 'paolam43@mail.com', 'Calle 43 #10-43', '3000000043', 'F1043', 1000000043, 'Paola123'),
(44, 'Julian', 'Buitrago', 'julianb44@mail.com', 'Calle 44 #10-44', '3000000044', 'F1044', 1000000044, 'Julian123'),
(45, 'Carolina', 'Agudelo', 'carolinaa45@mail.com', 'Calle 45 #10-45', '3000000045', 'F1045', 1000000045, 'Caro123'),
(46, 'Mateo', 'Peña', 'mateop46@mail.com', 'Calle 46 #10-46', '3000000046', 'F1046', 1000000046, 'Mateo123'),
(47, 'Valeria', 'Trujillo', 'valeriat47@mail.com', 'Calle 47 #10-47', '3000000047', 'F1047', 1000000047, 'ValeT123'),
(48, 'Nicolas', 'Giraldo', 'nicolasg48@mail.com', 'Calle 48 #10-48', '3000000048', 'F1048', 1000000048, 'Nico123'),
(49, 'Sara', 'Henao', 'sarah49@mail.com', 'Calle 49 #10-49', '3000000049', 'F1049', 1000000049, 'Sara123'),
(50, 'Samuel', 'Acevedo', 'samuel50@mail.com', 'Calle 50 #10-50', '3000000050', 'F1050', 1000000050, 'Samuel123'),
(51, 'Marlon', 'Montero', 'maklkos@gmail.com', 'calle 23 # 52-02', '3256261006', 'F-1054', 1025563, 'majnaosniudnaojo3525');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cedula` (`cedula`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
