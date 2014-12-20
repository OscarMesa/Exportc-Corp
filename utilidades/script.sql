-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-12-2014 a las 17:58:18
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tablatarifas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `costoenvio`
--

CREATE TABLE IF NOT EXISTS `costoenvio` (
  `origen` varchar(35) NOT NULL,
  `destino` varchar(35) NOT NULL,
  `kilo` int(6) NOT NULL,
  `sobre` int(6) NOT NULL,
  `minimoKG` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `costoenvio`
--

INSERT INTO `costoenvio` (`origen`, `destino`, `kilo`, `sobre`, `minimoKG`) VALUES
('AREA - METROPOLITANA', 'ITAGUI', 176, 2750, 7390),
('AREA - METROPOLITANA', 'ENVIGADO', 176, 3750, 7390),
('AREA - METROPOLITANA', 'SABANETA', 176, 2570, 7390),
('AREA - METROPOLITANA', 'BELLO', 176, 2750, 7390),
('AREA - METROPOLITANA', 'MEDELLIN', 176, 2750, 7390),
('AREA - METROPOLITANA', 'SAN - ANTONIO-DE-PRADO', 191, 2750, 7390),
('AREA - METROPOLITANA', 'LA ESTRELLA', 191, 2750, 7390),
('AREA - METROPOLITANA', 'CALDAS', 191, 2750, 7390),
('AREA - METROPOLITANA', 'COOPACABANA', 191, 2750, 7390),
('AREA - METROPOLITANA', 'GIRARDOTA', 191, 2750, 7390),
('AREA - METROPOLITANA', 'MUTATA', 441, 4998, 13302),
('AREA - METROPOLITANA', 'CHIGORODO', 441, 4998, 13302),
('AREA - METROPOLITANA', 'CAREPA', 441, 4998, 13302),
('AREA - METROPOLITANA', 'ZUNGO', 441, 4998, 13302),
('AREA - METROPOLITANA', 'APARTADO', 441, 4998, 13302),
('AREA - METROPOLITANA', 'CURRULAO', 441, 4998, 13302),
('AREA - METROPOLITANA', 'EL TRES', 441, 4998, 13302),
('AREA - METROPOLITANA', 'TURBO', 441, 4998, 13302),
('AREA - METROPOLITANA', 'NECOCLI', 675, 9417, 20188),
('AREA - METROPOLITANA', 'TADO', 523, 7601, 15731),
('AREA - METROPOLITANA', 'ANIMAS', 523, 7601, 15731),
('AREA - METROPOLITANA', 'ITSMINA', 523, 7601, 15701),
('AREA - METROPOLITANA', 'CONDOTO', 523, 7601, 15731),
('AREA - METROPOLITANA', 'CERTEGUI', 523, 7601, 15731),
('AREA - METROPOLITANA', 'YUTO', 523, 7601, 15731),
('AREA - METROPOLITANA', 'QUIBDO', 523, 7601, 15731);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
