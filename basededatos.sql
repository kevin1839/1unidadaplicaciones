create database aplicacion1;
use aplicacion1;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `consumidor` (
  `id` int(5) NOT NULL,
  `nombre` text NOT NULL,
  `domicilio` text NOT NULL,
  `dni` int(8) NOT NULL,
  `apoderado` text DEFAULT NULL,
  `telefono` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `detallesr` (
  `id` int(5) NOT NULL,
  `tipo_identificacion` text DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `tipo_reclamacion` text DEFAULT NULL,
  `detalleR` text DEFAULT NULL,
  `DetallePro` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




CREATE TABLE `reclamo` (
  `nroHoja` int(5) NOT NULL,
  `NRegistro` varchar(8) NOT NULL,
  `fecha` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



ALTER TABLE `consumidor`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `detallesr`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `reclamo`
  ADD PRIMARY KEY (`nroHoja`);


ALTER TABLE `consumidor`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

ALTER TABLE `detallesr`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

ALTER TABLE `reclamo`
  MODIFY `nroHoja` int(5) NOT NULL AUTO_INCREMENT;