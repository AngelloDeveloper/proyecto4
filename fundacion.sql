-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 29-08-2021 a las 22:05:27
-- Versión del servidor: 8.0.21
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fundacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `afiliado`
--

DROP TABLE IF EXISTS `afiliado`;
CREATE TABLE IF NOT EXISTS `afiliado` (
  `idAfi` int NOT NULL AUTO_INCREMENT,
  `afiDni` int DEFAULT NULL,
  `afiNom` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `afiApe` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `afiNac` date DEFAULT NULL,
  `afiTlf` bigint DEFAULT NULL,
  `afiCor` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `afiEda` int DEFAULT NULL,
  `sta_tus` int DEFAULT NULL,
  `idSex` int DEFAULT NULL,
  `idBen` int DEFAULT NULL,
  `idDir` int DEFAULT NULL,
  `idTipN` int DEFAULT NULL,
  `idTafi` int DEFAULT NULL,
  `idCon` int DEFAULT NULL,
  `idPat` int DEFAULT NULL,
  `idEqM` int DEFAULT NULL,
  `idUser` int DEFAULT NULL,
  PRIMARY KEY (`idAfi`),
  KEY `idSex` (`idSex`),
  KEY `idBen` (`idBen`),
  KEY `idDir` (`idDir`),
  KEY `idTipN` (`idTipN`),
  KEY `idTafi` (`idTafi`),
  KEY `idCon` (`idCon`),
  KEY `idPat` (`idPat`),
  KEY `idEqM` (`idEqM`),
  KEY `idUser` (`idUser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aporteequipo`
--

DROP TABLE IF EXISTS `aporteequipo`;
CREATE TABLE IF NOT EXISTS `aporteequipo` (
  `idAporE` int NOT NULL AUTO_INCREMENT,
  `aporte` int DEFAULT NULL,
  `aporFch` date DEFAULT NULL,
  `aporGar` int DEFAULT NULL,
  PRIMARY KEY (`idAporE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aporteplan`
--

DROP TABLE IF EXISTS `aporteplan`;
CREATE TABLE IF NOT EXISTS `aporteplan` (
  `idApoP` int NOT NULL AUTO_INCREMENT,
  `aporMon` int DEFAULT NULL,
  `aporMes` date DEFAULT NULL,
  `idAfi` int DEFAULT NULL,
  `idPlan` int DEFAULT NULL,
  PRIMARY KEY (`idApoP`),
  KEY `idAfi` (`idAfi`),
  KEY `idPlan` (`idPlan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auditoria`
--

DROP TABLE IF EXISTS `auditoria`;
CREATE TABLE IF NOT EXISTS `auditoria` (
  `idAud` int NOT NULL AUTO_INCREMENT,
  `audTab` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `audFch` datetime DEFAULT NULL,
  `audMov` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `idUser` int DEFAULT NULL,
  PRIMARY KEY (`idAud`),
  KEY `idUser` (`idUser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `beneficiario`
--

DROP TABLE IF EXISTS `beneficiario`;
CREATE TABLE IF NOT EXISTS `beneficiario` (
  `idBen` int NOT NULL AUTO_INCREMENT,
  `benPare` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idBen`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

DROP TABLE IF EXISTS `cargo`;
CREATE TABLE IF NOT EXISTS `cargo` (
  `idCar` int NOT NULL AUTO_INCREMENT,
  `carRol` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idCar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargodirectivo`
--

DROP TABLE IF EXISTS `cargodirectivo`;
CREATE TABLE IF NOT EXISTS `cargodirectivo` (
  `idCarD` int NOT NULL AUTO_INCREMENT,
  `CardTip` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idCarD`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cobertura`
--

DROP TABLE IF EXISTS `cobertura`;
CREATE TABLE IF NOT EXISTS `cobertura` (
  `idCob` int NOT NULL AUTO_INCREMENT,
  `cobMon` int DEFAULT NULL,
  `sta_tus` int DEFAULT NULL,
  PRIMARY KEY (`idCob`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `condicion`
--

DROP TABLE IF EXISTS `condicion`;
CREATE TABLE IF NOT EXISTS `condicion` (
  `idCon` int NOT NULL AUTO_INCREMENT,
  `conTip` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idCon`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

DROP TABLE IF EXISTS `direccion`;
CREATE TABLE IF NOT EXISTS `direccion` (
  `idDir` int NOT NULL AUTO_INCREMENT,
  `dirPas` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `dirEst` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `dirMun` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `dirCiu` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `dirCod` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `idHab` int DEFAULT NULL,
  PRIMARY KEY (`idDir`),
  KEY `idHab` (`idHab`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

DROP TABLE IF EXISTS `equipo`;
CREATE TABLE IF NOT EXISTS `equipo` (
  `idEqM` int NOT NULL AUTO_INCREMENT,
  `eqmCat` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `eqmTip` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `eqmArt` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `eqmCan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `eqmMon` int DEFAULT NULL,
  `sta_tus` int DEFAULT NULL,
  `idAporE` int DEFAULT NULL,
  PRIMARY KEY (`idEqM`),
  KEY `idAporE` (`idAporE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitacion`
--

DROP TABLE IF EXISTS `habitacion`;
CREATE TABLE IF NOT EXISTS `habitacion` (
  `idHab` int NOT NULL AUTO_INCREMENT,
  `habCas` int DEFAULT NULL,
  `habSec` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `habCal` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idHab`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicamento`
--

DROP TABLE IF EXISTS `medicamento`;
CREATE TABLE IF NOT EXISTS `medicamento` (
  `idMed` int NOT NULL AUTO_INCREMENT,
  `medAsi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `medCom` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `medcan` int DEFAULT NULL,
  `meduni` int DEFAULT NULL,
  PRIMARY KEY (`idMed`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nomina`
--

DROP TABLE IF EXISTS `nomina`;
CREATE TABLE IF NOT EXISTS `nomina` (
  `idTipN` int NOT NULL AUTO_INCREMENT,
  `tnoCod` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idTipN`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

DROP TABLE IF EXISTS `noticias`;
CREATE TABLE IF NOT EXISTS `noticias` (
  `idNot` int NOT NULL AUTO_INCREMENT,
  `notImg` tinyblob,
  `notTtl` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `notSub` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `notDes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci,
  `notFch` datetime DEFAULT NULL,
  PRIMARY KEY (`idNot`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organigrama`
--

DROP TABLE IF EXISTS `organigrama`;
CREATE TABLE IF NOT EXISTS `organigrama` (
  `idOrg` int NOT NULL AUTO_INCREMENT,
  `orgNom` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `orgDni` int DEFAULT NULL,
  `idCarD` int DEFAULT NULL,
  PRIMARY KEY (`idOrg`),
  KEY `idCarD` (`idCarD`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `patologia`
--

DROP TABLE IF EXISTS `patologia`;
CREATE TABLE IF NOT EXISTS `patologia` (
  `idPat` int NOT NULL AUTO_INCREMENT,
  `parTip` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `idTra` int DEFAULT NULL,
  PRIMARY KEY (`idPat`),
  KEY `idTra` (`idTra`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan`
--

DROP TABLE IF EXISTS `plan`;
CREATE TABLE IF NOT EXISTS `plan` (
  `idPlan` int NOT NULL AUTO_INCREMENT,
  `planNom` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `planIni` datetime DEFAULT NULL,
  `planFin` datetime DEFAULT NULL,
  `planMin` int DEFAULT NULL,
  `planMax` int DEFAULT NULL,
  `sta_tus` int DEFAULT NULL,
  `idCob` int DEFAULT NULL,
  PRIMARY KEY (`idPlan`),
  KEY `idCob` (`idCob`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexo`
--

DROP TABLE IF EXISTS `sexo`;
CREATE TABLE IF NOT EXISTS `sexo` (
  `idSex` int NOT NULL AUTO_INCREMENT,
  `sexo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idSex`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tratamiento`
--

DROP TABLE IF EXISTS `tratamiento`;
CREATE TABLE IF NOT EXISTS `tratamiento` (
  `idTra` int NOT NULL AUTO_INCREMENT,
  `traCan` int DEFAULT NULL,
  `traFre` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `idMed` int DEFAULT NULL,
  PRIMARY KEY (`idTra`),
  KEY `idMed` (`idMed`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_afiliado`
--

DROP TABLE IF EXISTS `t_afiliado`;
CREATE TABLE IF NOT EXISTS `t_afiliado` (
  `idTafi` int NOT NULL AUTO_INCREMENT,
  `tafAfi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idTafi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `idUser` int NOT NULL AUTO_INCREMENT,
  `user` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `pass` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `sta_tus` int DEFAULT NULL,
  `idCar` int DEFAULT NULL,
  PRIMARY KEY (`idUser`),
  KEY `idCar` (`idCar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `afiliado`
--
ALTER TABLE `afiliado`
  ADD CONSTRAINT `afiliado_ibfk_1` FOREIGN KEY (`idSex`) REFERENCES `sexo` (`idSex`),
  ADD CONSTRAINT `afiliado_ibfk_2` FOREIGN KEY (`idBen`) REFERENCES `beneficiario` (`idBen`),
  ADD CONSTRAINT `afiliado_ibfk_3` FOREIGN KEY (`idDir`) REFERENCES `direccion` (`idDir`),
  ADD CONSTRAINT `afiliado_ibfk_4` FOREIGN KEY (`idTipN`) REFERENCES `nomina` (`idTipN`),
  ADD CONSTRAINT `afiliado_ibfk_5` FOREIGN KEY (`idTafi`) REFERENCES `t_afiliado` (`idTafi`),
  ADD CONSTRAINT `afiliado_ibfk_6` FOREIGN KEY (`idCon`) REFERENCES `condicion` (`idCon`),
  ADD CONSTRAINT `afiliado_ibfk_7` FOREIGN KEY (`idPat`) REFERENCES `patologia` (`idPat`),
  ADD CONSTRAINT `afiliado_ibfk_8` FOREIGN KEY (`idEqM`) REFERENCES `equipo` (`idEqM`),
  ADD CONSTRAINT `afiliado_ibfk_9` FOREIGN KEY (`idUser`) REFERENCES `usuario` (`idUser`);

--
-- Filtros para la tabla `aporteplan`
--
ALTER TABLE `aporteplan`
  ADD CONSTRAINT `aporteplan_ibfk_1` FOREIGN KEY (`idAfi`) REFERENCES `afiliado` (`idAfi`),
  ADD CONSTRAINT `aporteplan_ibfk_2` FOREIGN KEY (`idPlan`) REFERENCES `plan` (`idPlan`);

--
-- Filtros para la tabla `auditoria`
--
ALTER TABLE `auditoria`
  ADD CONSTRAINT `auditoria_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `usuario` (`idUser`);

--
-- Filtros para la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD CONSTRAINT `direccion_ibfk_1` FOREIGN KEY (`idHab`) REFERENCES `habitacion` (`idHab`);

--
-- Filtros para la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD CONSTRAINT `equipo_ibfk_1` FOREIGN KEY (`idAporE`) REFERENCES `aporteequipo` (`idAporE`);

--
-- Filtros para la tabla `organigrama`
--
ALTER TABLE `organigrama`
  ADD CONSTRAINT `organigrama_ibfk_1` FOREIGN KEY (`idCarD`) REFERENCES `cargodirectivo` (`idCarD`);

--
-- Filtros para la tabla `patologia`
--
ALTER TABLE `patologia`
  ADD CONSTRAINT `patologia_ibfk_1` FOREIGN KEY (`idTra`) REFERENCES `patologia` (`idPat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `plan`
--
ALTER TABLE `plan`
  ADD CONSTRAINT `plan_ibfk_1` FOREIGN KEY (`idCob`) REFERENCES `cobertura` (`idCob`);

--
-- Filtros para la tabla `tratamiento`
--
ALTER TABLE `tratamiento`
  ADD CONSTRAINT `tratamiento_ibfk_1` FOREIGN KEY (`idMed`) REFERENCES `medicamento` (`idMed`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`idCar`) REFERENCES `cargo` (`idCar`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
