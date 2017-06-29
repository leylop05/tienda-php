-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 30-04-2016 a las 06:55:34
-- Versión del servidor: 5.5.8
-- Versión de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `ID_CATEGO` int(10) NOT NULL,
  `NOMBRE` varchar(50) NOT NULL,
  `DESCUENTO` int(30) NOT NULL,
  PRIMARY KEY (`ID_CATEGO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`ID_CATEGO`, `NOMBRE`, `DESCUENTO`) VALUES
(111, 'Bolsos', 0),
(222, 'Accesorios', 10),
(333, 'Faldas', 5),
(444, 'Enterizos', 3),
(555, 'Zapatos', 25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descripción`
--

CREATE TABLE IF NOT EXISTS `descripción` (
  `Nombre` varchar(20) NOT NULL,
  `Tamaño` varchar(10) NOT NULL,
  `Color` varchar(10) NOT NULL,
  `Descripción` varchar(500) NOT NULL,
  `Id_producto` int(10) NOT NULL,
  `Id_categoria` int(10) NOT NULL,
  PRIMARY KEY (`Id_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `descripción`
--

INSERT INTO `descripción` (`Nombre`, `Tamaño`, `Color`, `Descripción`, `Id_producto`, `Id_categoria`) VALUES
('carteras', '30 x 15 cm', 'Verde/Azul', 'Cartera tipo estuche ideal para combinar tus accesorios', 1, 111);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dirs_envio`
--

CREATE TABLE IF NOT EXISTS `dirs_envio` (
  `ID` int(10) NOT NULL,
  `DETALLLE` text NOT NULL,
  `HOR_ENTR` varchar(11) NOT NULL,
  `ID_USUARIO` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `dirs_envio`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE IF NOT EXISTS `imagenes` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Foto` varchar(200) NOT NULL,
  PRIMARY KEY (`Nombre`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`Id`, `Nombre`, `Foto`) VALUES
(1, 'Bolsos', 'imagenes/1000.jpg'),
(2, 'Accesorios', 'imagenes/2000.jpg'),
(3, 'faldas', 'imagenes/3000.jpg'),
(4, 'enterizos', 'imagenes/4000.jpg'),
(5, 'Zapatos', 'imagenes/5000.jpg'),
(0, '', 'imagenes/'),
(0, 'bolso2', 'imagenes/1112.jpg'),
(0, 'bolso3', 'imagenes/111.jpg'),
(0, 'bolso1', 'imagenes/113.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE IF NOT EXISTS `pagos` (
  `ID` int(10) NOT NULL,
  `FECHA` varchar(6) NOT NULL,
  `TIPO` varchar(30) NOT NULL,
  `ESTADO` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `pagos`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE IF NOT EXISTS `pedidos` (
  `ID_PK` int(20) NOT NULL,
  `Fecha` int(10) NOT NULL,
  `ID_Producto` int(20) NOT NULL,
  `ID_Usuario` int(20) NOT NULL,
  `ID_Pago` int(20) NOT NULL,
  `ID_destino` int(20) NOT NULL,
  PRIMARY KEY (`ID_Producto`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `pedidos`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `ID` int(10) NOT NULL,
  `NOMBRE` varchar(30) NOT NULL,
  `DESCUENTO` int(11) NOT NULL,
  `PRECIO` int(11) NOT NULL,
  `CANTIDAD` int(11) NOT NULL,
  `ID_CATEGORIA` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `productos`
--

INSERT INTO `productos` (`ID`, `NOMBRE`, `DESCUENTO`, `PRECIO`, `CANTIDAD`, `ID_CATEGORIA`) VALUES
(1, 'carteras', 0, 250, 100, 111),
(2, 'Bolso', 15, 100, 0, 111),
(3, 'Sobre', 0, 100, 50, 111),
(4, 'Cartera Lon', 0, 150, 5, 111),
(5, 'Pulsera Peq', 1, 10, 30, 222),
(6, 'Anillos Lov', 0, 2, 20, 222),
(7, 'Aretes Love', 2, 2, 20, 222),
(8, 'Maxy Collar', 0, 10, 15, 222),
(9, 'Falda Panta', 5, 3, 4, 333),
(10, 'Falda Pin U', 0, 12, 5, 333),
(11, 'Falda Larga', 0, 15, 30, 333),
(12, 'Mini Falda', 1, 123, 15, 333),
(13, 'Enterizo1', 0, 150, 12, 444),
(14, 'Enterizo Mi', 0, 125, 13, 444),
(15, 'Small Enter', 1, 122, 3, 444),
(16, 'Curvaceous ', 0, 123, 6, 444),
(17, 'Sandal', 0, 150, 0, 555),
(18, 'Botas Caña', 2, 600, 9, 555),
(19, 'Tennis Girl', 0, 120, 9, 555),
(20, 'Botin Teena', 0, 250, 10, 555);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `user` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Volcar la base de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `user`, `password`) VALUES
(5, 'oscar', 'oscar@alsldksa.com', '415', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(4, 'as', 'Omoyamor@uniminuto.e', 'sa', 'df211ccdd94a63e0bcb9e6ae427a249484a49d60'),
(6, 'Leidy', 'leydi@jaskdj.com', 'aaa', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(7, 'juan', 'le@ho.com', 'juan', '51eac6b471a284d3341d8c0c63d0f1a286262a18'),
(8, '123', '1@hot.com', '789', 'fc1200c7a7aa52109d762a9f005b149abef01479'),
(9, 'AS', 'OMOYA@OUTLOOK.COM', '3232', 'b6859efee19ad16204f1a9a06afeb3afc9498957'),
(10, '', '', '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
(11, 'OSAJDOJS', 'OSCAR@OURLOOK.COM', 'OSCAR', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(12, 'lupita', 'lupita@mail.com', 'lupitamambo', '235a0b950606010e6b8edfcd7f89809889cc43dd'),
(13, 'leidy', 'leidy@mail.com', 'leylop', 'f51fabbca8cc1a8bef111911e7bfa350a8ed2d34'),
(14, 'juan', 'juan@gg.com', 'juanito', '2a3327f8d343d85a1f1422aad8346d635109c430'),
(15, 'juanu', 'Leycolop901@hotmail.', 'hola', 'fc1200c7a7aa52109d762a9f005b149abef01479'),
(16, 'lubek', 'lubek@mail.com', 'lubek', '12345');
