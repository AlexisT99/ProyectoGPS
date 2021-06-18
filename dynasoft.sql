-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 18-06-2021 a las 05:32:00
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dynasoft`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo_presupuesto`
--

CREATE TABLE `catalogo_presupuesto` (
  `ID_PRESUPUESTO` varchar(15) NOT NULL,
  `NUMERO` int(11) DEFAULT NULL,
  `NORMA` varchar(50) DEFAULT NULL,
  `CONCEPTO_SERVICIO` varchar(250) DEFAULT NULL,
  `UNIDAD` varchar(50) DEFAULT NULL,
  `CANTIDAD` int(11) DEFAULT NULL,
  `PU` varchar(50) DEFAULT NULL,
  `IMPORTE_LETRA` varchar(250) DEFAULT NULL,
  `IMPORTE_NUMERO` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `catalogo_presupuesto`
--

INSERT INTO `catalogo_presupuesto` (`ID_PRESUPUESTO`, `NUMERO`, `NORMA`, `CONCEPTO_SERVICIO`, `UNIDAD`, `CANTIDAD`, `PU`, `IMPORTE_LETRA`, `IMPORTE_NUMERO`) VALUES
('PRESU10', 1, 'NOM-55-33', 'Equipo hidráulico', 'Nucleo', 3, '100', '300', 300),
('PRESU10', 2, 'NOM-88-22', 'Material remojado', 'km', 5, '2000', '10000', 10000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_prestacion`
--

CREATE TABLE `cat_prestacion` (
  `IDCATPRESTACION` int(11) NOT NULL,
  `NOMCATPRESTACION` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cat_prestacion`
--

INSERT INTO `cat_prestacion` (`IDCATPRESTACION`, `NOMCATPRESTACION`) VALUES
(1, 'Percepcion'),
(2, 'Prestamo'),
(3, 'Descuentos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `costomantener`
--

CREATE TABLE `costomantener` (
  `IDGASTO` int(11) DEFAULT NULL,
  `ID_MANTENIMIENTO` int(11) DEFAULT NULL,
  `CODIGO_EQUIPO` varchar(16) DEFAULT NULL,
  `MONTO_MANTENER` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `CODIGO_EQUIPO` varchar(16) NOT NULL,
  `CANTIDAD_EQUIPO` int(11) NOT NULL,
  `DESCRIPCION_EQUIPO` varchar(100) DEFAULT NULL,
  `CARACTERISTICAS` varchar(100) DEFAULT NULL,
  `MARCA_EQUIPO` varchar(50) DEFAULT NULL,
  `MODELO_EQUIPO` varchar(50) DEFAULT NULL,
  `TIPO_EQUIPO` varchar(50) DEFAULT NULL,
  `DISPONIBLE` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo_obra`
--

CREATE TABLE `equipo_obra` (
  `CODIGO_EQUIPO` varchar(16) DEFAULT NULL,
  `ID_OBRA` varchar(50) DEFAULT NULL,
  `IDTRABAJADOR` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastos`
--

CREATE TABLE `gastos` (
  `IDGASTO` int(11) NOT NULL,
  `IDTRABAJADOR` int(11) DEFAULT NULL,
  `FECHAGASTO` date NOT NULL,
  `MONTO` float NOT NULL,
  `DESCRIPCION` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `gastos`
--

INSERT INTO `gastos` (`IDGASTO`, `IDTRABAJADOR`, `FECHAGASTO`, `MONTO`, `DESCRIPCION`) VALUES
(1, 1, '2021-06-15', 5000, 'Gasto de compra');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastos_equipo`
--

CREATE TABLE `gastos_equipo` (
  `IDGASTO` int(11) DEFAULT NULL,
  `CODIGO_EQUIPO` varchar(16) DEFAULT NULL,
  `CANTIDAD_GE` int(11) NOT NULL,
  `PRECIO_UNITARIO_GE` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastos_material`
--

CREATE TABLE `gastos_material` (
  `IDGASTO` int(11) DEFAULT NULL,
  `ID_MATERIAL` varchar(16) DEFAULT NULL,
  `CANTIDAD_GM` int(11) NOT NULL,
  `PRECIO_UNITARIO_GM` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastos_seguro`
--

CREATE TABLE `gastos_seguro` (
  `IDGASTO` int(11) DEFAULT NULL,
  `ID_SEGURO` varchar(50) DEFAULT NULL,
  `MONTO_SEGURO` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastos_servicio`
--

CREATE TABLE `gastos_servicio` (
  `IDSERVICIO` int(11) DEFAULT NULL,
  `IDGASTO` int(11) DEFAULT NULL,
  `PRECIOUNITARIOSERVICIO` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `gastos_servicio`
--

INSERT INTO `gastos_servicio` (`IDSERVICIO`, `IDGASTO`, `PRECIOUNITARIOSERVICIO`) VALUES
(1, 1, 5000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidentes`
--

CREATE TABLE `incidentes` (
  `ID_INCIDENTE` varchar(15) NOT NULL,
  `ID_OBRA` varchar(50) DEFAULT NULL,
  `IDTRABAJADOR` int(11) DEFAULT NULL,
  `CODIGO_EQUIPO` varchar(16) DEFAULT NULL,
  `ID_MATERIAL` varchar(16) DEFAULT NULL,
  `DESCRIPCION_INCIDENTE` varchar(100) NOT NULL,
  `FECHA_INCIDENTE` date NOT NULL,
  `PETICION_FINANCIEROS` varchar(2) DEFAULT NULL,
  `IMG_TICKET` varchar(200) DEFAULT NULL,
  `ESTADO_PETICION` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informe_muestreo`
--

CREATE TABLE `informe_muestreo` (
  `ID_INFORME_MUESTREO` int(11) NOT NULL,
  `ID_OBRA` varchar(50) DEFAULT NULL,
  `ENSAYE` int(11) NOT NULL,
  `FECHA_PRUEBA` date NOT NULL,
  `FECHA_INFORME` date NOT NULL,
  `ELEMENTO_COLADO` varchar(50) NOT NULL,
  `FC_PROYECTO` varchar(50) NOT NULL,
  `CANTIDAD_EMPLEADA` varchar(50) NOT NULL,
  `ADITIVO` varchar(50) NOT NULL,
  `FINALIDAD_ADITIVO` varchar(50) NOT NULL,
  `TEMPERATURA` varchar(15) NOT NULL,
  `TAM_MAX` varchar(15) NOT NULL,
  `REV_PYCT` varchar(15) NOT NULL,
  `INICIO_COLADO` time NOT NULL,
  `FINAL_COLADO` time NOT NULL,
  `CONCRETERA_UBIC` varchar(100) NOT NULL,
  `TIPO_CONCRETO` varchar(50) NOT NULL,
  `TIPO_CEMENTO` varchar(50) NOT NULL,
  `LABORATORISTA` varchar(50) NOT NULL,
  `JEFE_LABORATORIO` varchar(50) NOT NULL,
  `E_ACOMODAR_CONCRETO` varchar(200) DEFAULT NULL,
  `E_ACARREAR_CONCRETO` varchar(200) DEFAULT NULL,
  `OBSERVACIONES` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informe_resistencias`
--

CREATE TABLE `informe_resistencias` (
  `ID_INFORME_RESIS` varchar(50) NOT NULL,
  `ID_OBRA` varchar(50) DEFAULT NULL,
  `NO_ENSAYO_RESIS` int(11) NOT NULL,
  `NO_MUESTRA_RESIS` int(11) NOT NULL,
  `PROPORCIONAMIENTO_FC` varchar(50) NOT NULL,
  `REVENIMIENTO_CM` float NOT NULL,
  `ADICIONANTE` varchar(50) NOT NULL,
  `TIPO_RESIS` varchar(50) NOT NULL,
  `MARCA_RESIS` varchar(50) NOT NULL,
  `CANTIDAD_USADA` varchar(25) NOT NULL,
  `FINALIDAD` varchar(100) NOT NULL,
  `EQUIPO_MEZCLADO_CAPACIDAD` varchar(100) NOT NULL,
  `EQUIPO_ACOMODO_CONCRETO` varchar(100) NOT NULL,
  `DIAMETRO_CM` float NOT NULL,
  `SECCION_CM2` float NOT NULL,
  `FECHA_COLADO` date NOT NULL,
  `FECHA_RUPTURA` date NOT NULL,
  `EDAD_DIAS` int(11) NOT NULL,
  `PROCEDIMIENTO_CURADO` varchar(100) NOT NULL,
  `CARGA_ROPTURA_KG` float NOT NULL,
  `RESISTENCIA_KG_CM2` float NOT NULL,
  `RESISTENCIA_PROYECTO` float NOT NULL,
  `LABORATORISTA` varchar(50) NOT NULL,
  `JEFE_LABORATORIO` varchar(50) NOT NULL,
  `FECHA_PRUEBA` date DEFAULT NULL,
  `FECHA_INFORME` date DEFAULT NULL,
  `TOMADA` varchar(50) DEFAULT NULL,
  `OBSERVACIONES` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingresos`
--

CREATE TABLE `ingresos` (
  `IDINGRESO` int(11) NOT NULL,
  `ID_OBRA` varchar(50) DEFAULT NULL,
  `IDTRABAJADOR` int(11) DEFAULT NULL,
  `MONTO_INGRESO` float NOT NULL,
  `FECHAINGRESO` date NOT NULL,
  `DESCRIPCIONINGRESO` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mantenimiento`
--

CREATE TABLE `mantenimiento` (
  `ID_MANTENIMIENTO` int(11) NOT NULL,
  `CODIGO_EQUIPO` varchar(16) DEFAULT NULL,
  `PROVEEDOR` varchar(50) DEFAULT NULL,
  `FECHA_PROX_M` date DEFAULT NULL,
  `ESTADO` varchar(20) DEFAULT NULL,
  `OBSERVACIONES` varchar(100) DEFAULT NULL,
  `TIPO_SERVICIO` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `material`
--

CREATE TABLE `material` (
  `ID_MATERIAL` varchar(16) NOT NULL,
  `NOMBRE_MATERIAL` varchar(50) NOT NULL,
  `CANTIDAD_MATERIAL` int(11) NOT NULL,
  `UNIDAD_MEDIDA` varchar(50) NOT NULL,
  `DESCRIPCION` varchar(100) NOT NULL,
  `FECHA_VENCIDO` date DEFAULT NULL,
  `CANTIDAD` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `material_obra`
--

CREATE TABLE `material_obra` (
  `ID_MATERIAL` varchar(16) DEFAULT NULL,
  `ID_OBRA` varchar(50) DEFAULT NULL,
  `IDTRABAJADOR` int(11) DEFAULT NULL,
  `CANTIDAD` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nomina`
--

CREATE TABLE `nomina` (
  `IDPAGO` int(11) NOT NULL,
  `FECHA` date NOT NULL,
  `TOTALPAGO` float NOT NULL,
  `OBSPAGO` varchar(200) DEFAULT NULL,
  `INICIOPERIODO` date NOT NULL,
  `FINPERIODO` date NOT NULL,
  `PERCEPCIONES` float NOT NULL,
  `DESCUENTOS` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `nomina`
--

INSERT INTO `nomina` (`IDPAGO`, `FECHA`, `TOTALPAGO`, `OBSPAGO`, `INICIOPERIODO`, `FINPERIODO`, `PERCEPCIONES`, `DESCUENTOS`) VALUES
(1, '2021-06-15', 10500, 'Pago del 8 al 15', '2021-06-08', '2021-06-15', 15000, -4500),
(2, '2021-06-20', 20900, 'Pago de nomina 13 al 20', '2021-06-13', '2021-06-20', 26000, -5100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `obra_trabajadores`
--

CREATE TABLE `obra_trabajadores` (
  `idObra` varchar(50) NOT NULL,
  `idTrabajador` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `obra_trabajadores`
--

INSERT INTO `obra_trabajadores` (`idObra`, `idTrabajador`) VALUES
('M6060', '5 - Andrés Perez Sanchez'),
('OBRA10', '5 - Andrés Perez Sanchez'),
('OBR55', '5 - Andrés Perez Sanchez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestaciones`
--

CREATE TABLE `prestaciones` (
  `IDPRESTACION` int(11) NOT NULL,
  `IDCATPRESTACION` int(11) DEFAULT NULL,
  `NOMBREPRES` varchar(30) NOT NULL,
  `DESCRIPCIONPRES` varchar(100) NOT NULL,
  `VALORMUL` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `prestaciones`
--

INSERT INTO `prestaciones` (`IDPRESTACION`, `IDCATPRESTACION`, `NOMBREPRES`, `DESCRIPCIONPRES`, `VALORMUL`) VALUES
(1, 1, 'Sueldo', 'Sueldo del trabajador', 1),
(2, 2, 'Prestamo', 'Prestamo del trabajador', 1),
(3, 3, 'Infonavit', 'Infonavit', 0.1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestacion_nomina_trab`
--

CREATE TABLE `prestacion_nomina_trab` (
  `IDPRESNOMTRAB` int(11) NOT NULL,
  `IDPRESTACION` int(11) DEFAULT NULL,
  `IDPAGO` int(11) DEFAULT NULL,
  `IDTRABAJADOR` int(11) DEFAULT NULL,
  `MONTO` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `prestacion_nomina_trab`
--

INSERT INTO `prestacion_nomina_trab` (`IDPRESNOMTRAB`, `IDPRESTACION`, `IDPAGO`, `IDTRABAJADOR`, `MONTO`) VALUES
(1, 2, 1, 1, -3000),
(2, 1, 1, 1, 10000),
(3, 3, 1, 1, -1000),
(4, 1, 1, 2, 5000),
(5, 3, 1, 2, -500),
(6, 2, 2, 1, -2000),
(7, 1, 2, 1, 10000),
(8, 3, 2, 1, -1000),
(9, 1, 2, 2, 5000),
(10, 3, 2, 2, -500),
(11, 2, 2, 3, -500),
(12, 1, 2, 3, 5000),
(13, 3, 2, 3, -500),
(14, 1, 2, 4, 3000),
(15, 3, 2, 4, -300),
(16, 1, 2, 5, 3000),
(17, 3, 2, 5, -300);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos`
--

CREATE TABLE `prestamos` (
  `IDPRESTAMO` int(11) NOT NULL,
  `IDTRABAJADOR` int(11) DEFAULT NULL,
  `MONTO` float NOT NULL,
  `RESTANTE` float NOT NULL,
  `FECHAPRESTAMO` date NOT NULL,
  `ESTADOPRESTAMO` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `prestamos`
--

INSERT INTO `prestamos` (`IDPRESTAMO`, `IDTRABAJADOR`, `MONTO`, `RESTANTE`, `FECHAPRESTAMO`, `ESTADOPRESTAMO`) VALUES
(1, 1, 5000, 0, '2021-06-15', 'I'),
(2, 3, 500, 0, '2021-06-15', 'I');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presupuesto_obras`
--

CREATE TABLE `presupuesto_obras` (
  `ID_PRESUPUESTO` varchar(15) NOT NULL,
  `NOMBRE_OBRA` varchar(100) DEFAULT NULL,
  `NOMBRE_CLIENTE` varchar(100) DEFAULT NULL,
  `TELEFONO_CLIENTE` varchar(100) DEFAULT NULL,
  `DIRECCION_CLIENTE` varchar(100) DEFAULT NULL,
  `UBICACION_CLIENTE` varchar(100) DEFAULT NULL,
  `NOMBRE_TRABAJADOR` varchar(100) DEFAULT NULL,
  `FECHA_REGISTRO` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `presupuesto_obras`
--

INSERT INTO `presupuesto_obras` (`ID_PRESUPUESTO`, `NOMBRE_OBRA`, `NOMBRE_CLIENTE`, `TELEFONO_CLIENTE`, `DIRECCION_CLIENTE`, `UBICACION_CLIENTE`, `NOMBRE_TRABAJADOR`, `FECHA_REGISTRO`) VALUES
('1', 'Puente', 'Juan Martinez', '3241118986', 'Milpilla', '87 grado', 'Juancho', '2021-06-05'),
('PRESU10', 'Catalina de madera', 'Sancho Panza', '311-7436405', 'Av Ocegueda Macedo 222', 'Ahuacatlan 225 colonia la presa', 'Erick Nolasco', '2021-06-24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puestos`
--

CREATE TABLE `puestos` (
  `IDPUESTOS` int(11) NOT NULL,
  `NOMBREPUESTO` varchar(50) NOT NULL,
  `DESCRIPCIONPUESTO` varchar(200) DEFAULT NULL,
  `SUELDO` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `puestos`
--

INSERT INTO `puestos` (`IDPUESTOS`, `NOMBREPUESTO`, `DESCRIPCIONPUESTO`, `SUELDO`) VALUES
(1, 'Administrador', 'Administrar', 10000),
(2, 'Gerente', 'Gerenciar', 5000),
(3, 'Supervisor de obra', 'supervisor de obra', 5000),
(4, 'Trabajador', 'Trabajador', 3000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_obras`
--

CREATE TABLE `registro_obras` (
  `ID_OBRA` varchar(50) NOT NULL,
  `IDTRABAJADOR` int(11) DEFAULT NULL,
  `DESCRIPCION` varchar(50) DEFAULT NULL,
  `CONTRATISTA_NOMBRE` varchar(100) DEFAULT NULL,
  `TEL_CONTRATISTA` varchar(15) DEFAULT NULL,
  `LUGAR_DESARROLLO` varchar(50) DEFAULT NULL,
  `FECHA_INICIO_OBRA` date DEFAULT NULL,
  `FECHA_FINAL_OBRA` date DEFAULT NULL,
  `STATUS_OBRA` varchar(50) DEFAULT NULL,
  `COSTO` float DEFAULT NULL,
  `NOMBRE` varchar(50) DEFAULT NULL,
  `ID_PRESUPUESTO` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro_obras`
--

INSERT INTO `registro_obras` (`ID_OBRA`, `IDTRABAJADOR`, `DESCRIPCION`, `CONTRATISTA_NOMBRE`, `TEL_CONTRATISTA`, `LUGAR_DESARROLLO`, `FECHA_INICIO_OBRA`, `FECHA_FINAL_OBRA`, `STATUS_OBRA`, `COSTO`, `NOMBRE`, `ID_PRESUPUESTO`) VALUES
('OBR55', 3, 'Probando', 'Sancho Panza', '311-7436405', 'Ahuacatlan 225 colonia la presa', '2021-06-26', '2021-07-07', 'En proceso', 10300, 'Catalina de madera', 'PRESU10'),
('OBRA10', 3, 'Prueba no guara', 'Sancho Panza', '311-7436405', 'Ahuacatlan 225 colonia la presa', '2021-06-30', '2021-07-06', 'En proceso', 10300, 'Catalina de madera', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reintegro`
--

CREATE TABLE `reintegro` (
  `IDREINTEGRO` int(11) NOT NULL,
  `IDTRABAJADOR` int(11) DEFAULT NULL,
  `IDDETVIAT` int(11) DEFAULT NULL,
  `INGMONTO` float NOT NULL,
  `FECHAOTING` date NOT NULL,
  `DESCOTING` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reintegro`
--

INSERT INTO `reintegro` (`IDREINTEGRO`, `IDTRABAJADOR`, `IDDETVIAT`, `INGMONTO`, `FECHAOTING`, `DESCOTING`) VALUES
(1, 1, 1, 4000, '2021-06-15', ' ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguro`
--

CREATE TABLE `seguro` (
  `ID_SEGURO` varchar(50) NOT NULL,
  `CODIGO_EQUIPO` varchar(16) DEFAULT NULL,
  `FECHA_VENCIDO` date DEFAULT NULL,
  `COSTO_SEGURO` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `IDSERVICIO` int(11) NOT NULL,
  `NOMBRESERVICIO` varchar(50) NOT NULL,
  `DESCRIPCION` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`IDSERVICIO`, `NOMBRESERVICIO`, `DESCRIPCION`) VALUES
(1, 'Pago de internet', 'Internet'),
(2, 'Telefono', 'Telefono');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes_gastos`
--

CREATE TABLE `solicitudes_gastos` (
  `IDTRABAJADOR` int(11) DEFAULT NULL,
  `IDGASTO` int(11) DEFAULT NULL,
  `IDSOLICITUD` int(11) NOT NULL,
  `ESTADOSOLICITUD` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `solicitudes_gastos`
--

INSERT INTO `solicitudes_gastos` (`IDTRABAJADOR`, `IDGASTO`, `IDSOLICITUD`, `ESTADOSOLICITUD`) VALUES
(1, 1, 1, 'E');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoviaticos`
--

CREATE TABLE `tipoviaticos` (
  `IDTIVIATICO` int(11) NOT NULL,
  `NOMBRE` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipoviaticos`
--

INSERT INTO `tipoviaticos` (`IDTIVIATICO`, `NOMBRE`) VALUES
(1, 'Hospedaje'),
(2, 'Alimentacion'),
(3, 'Transporte');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipviat_viaticos`
--

CREATE TABLE `tipviat_viaticos` (
  `IDVIATICO` int(11) DEFAULT NULL,
  `IDTIVIATICO` int(11) DEFAULT NULL,
  `MONTOVIAT` float NOT NULL,
  `DESCVIAT` varchar(300) NOT NULL,
  `ESTADO` char(1) NOT NULL,
  `IDDETVIAT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipviat_viaticos`
--

INSERT INTO `tipviat_viaticos` (`IDVIATICO`, `IDTIVIATICO`, `MONTOVIAT`, `DESCVIAT`, `ESTADO`, `IDDETVIAT`) VALUES
(1, 1, 4000, 'Hotel', 'C', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajadores`
--

CREATE TABLE `trabajadores` (
  `IDTRABAJADOR` int(11) NOT NULL,
  `IDPUESTOS` int(11) DEFAULT NULL,
  `NOMBRETRAB` varchar(30) NOT NULL,
  `APEPATTRAB` varchar(30) NOT NULL,
  `APEMATTRAB` varchar(30) NOT NULL,
  `DIRECCIONTRAB` varchar(60) NOT NULL,
  `CELULARTRAB` varchar(10) NOT NULL,
  `TIPOSANGRETRAB` varchar(10) NOT NULL,
  `CUENTABANCTRAB` varchar(18) NOT NULL,
  `NOSEGUROTRAB` varchar(11) NOT NULL,
  `USUARIO` varchar(50) NOT NULL,
  `CONTRASENA` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `trabajadores`
--

INSERT INTO `trabajadores` (`IDTRABAJADOR`, `IDPUESTOS`, `NOMBRETRAB`, `APEPATTRAB`, `APEMATTRAB`, `DIRECCIONTRAB`, `CELULARTRAB`, `TIPOSANGRETRAB`, `CUENTABANCTRAB`, `NOSEGUROTRAB`, `USUARIO`, `CONTRASENA`) VALUES
(1, 1, 'Admin', 'Admin', 'Admin', 'Direccion', '3111111111', 'ab+', '1111111111111111', '11111111111', 'admin', 'admin'),
(2, 2, 'Pedro', 'Martinez', 'Perez', 'direccion', '3111203234', 'ab+', '1111111111111111', '11111111111', 'pedro', '1234'),
(3, 3, 'Julio', 'Perez', 'Lopez', 'Direccion', '3111111111', 'O+', '1111111111111111', '12345678901', '1234', 'julio'),
(4, 4, 'Eduardo', 'Sanchez', 'Arreola', 'Direccion', '3111111111', 'ab+', '1234567890123456', '11111111111', '1234', 'Eduardo'),
(5, 4, 'Andrés', 'Perez', 'Sanchez', 'Direccion', '3111203234', 'ab+', '1234567890123456', '12345678901', '1234', 'Andres');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `viajes`
--

CREATE TABLE `viajes` (
  `IDVIAJE` int(11) NOT NULL,
  `ID_OBRA` varchar(50) DEFAULT NULL,
  `ID_INFORME_MUESTREO` int(11) DEFAULT NULL,
  `NO_CARRO` varchar(20) NOT NULL,
  `NO_REVISION` varchar(20) NOT NULL,
  `VOLUMEN` float NOT NULL,
  `HORA_SALIDA_VIAJE` time NOT NULL,
  `HORA_LLEGADA_VIAJE` time NOT NULL,
  `HORA_INICIAL_VIAJE` time NOT NULL,
  `HORA_FINAL_VIAJE` time NOT NULL,
  `REVENIMIENTO` float NOT NULL,
  `NO_PROVETAS` varchar(25) NOT NULL,
  `OBSERVACIONES` varchar(300) NOT NULL,
  `NO_VIAJE` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `viaje_informe_muestreo`
--

CREATE TABLE `viaje_informe_muestreo` (
  `IDVIAJE` int(11) DEFAULT NULL,
  `ID_INFORME_MUESTREO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `viaticos`
--

CREATE TABLE `viaticos` (
  `IDVIATICO` int(11) NOT NULL,
  `IDTRABAJADOR` int(11) DEFAULT NULL,
  `FECHAASIG` date NOT NULL,
  `MONTO` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `viaticos`
--

INSERT INTO `viaticos` (`IDVIATICO`, `IDTRABAJADOR`, `FECHAASIG`, `MONTO`) VALUES
(1, 1, '2021-06-15', 5000);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `catalogo_presupuesto`
--
ALTER TABLE `catalogo_presupuesto`
  ADD KEY `FK_REGISTRO_REFERENCE_FKIDPRESUPRE` (`ID_PRESUPUESTO`);

--
-- Indices de la tabla `cat_prestacion`
--
ALTER TABLE `cat_prestacion`
  ADD PRIMARY KEY (`IDCATPRESTACION`);

--
-- Indices de la tabla `costomantener`
--
ALTER TABLE `costomantener`
  ADD KEY `FK_COSTOMAN_REFERENCE_GASTOS` (`IDGASTO`),
  ADD KEY `FK_COSTOMAN_REFERENCE_MANTENIM` (`ID_MANTENIMIENTO`),
  ADD KEY `FK_COSTOMAN_REFERENCE_EQUIPO` (`CODIGO_EQUIPO`);

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`CODIGO_EQUIPO`);

--
-- Indices de la tabla `equipo_obra`
--
ALTER TABLE `equipo_obra`
  ADD KEY `FK_EQUIPO_O_REFERENCE_EQUIPO` (`CODIGO_EQUIPO`),
  ADD KEY `FK_EQUIPO_O_REFERENCE_REGISTRO` (`ID_OBRA`),
  ADD KEY `FK_EQUIPO_O_REFERENCE_TRABAJAD` (`IDTRABAJADOR`);

--
-- Indices de la tabla `gastos`
--
ALTER TABLE `gastos`
  ADD PRIMARY KEY (`IDGASTO`),
  ADD KEY `FK_GASTOS_REFERENCE_TRABAJAD` (`IDTRABAJADOR`);

--
-- Indices de la tabla `gastos_equipo`
--
ALTER TABLE `gastos_equipo`
  ADD KEY `FK_GASTOS_E_REFERENCE_GASTOS` (`IDGASTO`),
  ADD KEY `FK_GASTOS_E_REFERENCE_EQUIPO` (`CODIGO_EQUIPO`);

--
-- Indices de la tabla `gastos_material`
--
ALTER TABLE `gastos_material`
  ADD KEY `FK_GASTOS_M_REFERENCE_GASTOS` (`IDGASTO`),
  ADD KEY `FK_GASTOS_M_REFERENCE_MATERIAL` (`ID_MATERIAL`);

--
-- Indices de la tabla `gastos_seguro`
--
ALTER TABLE `gastos_seguro`
  ADD KEY `FK_GASTOS_SS_REFERENCE_GASTOS` (`IDGASTO`),
  ADD KEY `FK_GASTOS_S_REFERENCE_SEGURO` (`ID_SEGURO`);

--
-- Indices de la tabla `gastos_servicio`
--
ALTER TABLE `gastos_servicio`
  ADD KEY `FK_GASTOS_S_REFERENCE_SERVICIO` (`IDSERVICIO`),
  ADD KEY `FK_GASTOS_S_REFERENCE_GASTOS` (`IDGASTO`);

--
-- Indices de la tabla `incidentes`
--
ALTER TABLE `incidentes`
  ADD PRIMARY KEY (`ID_INCIDENTE`),
  ADD KEY `FK_INCIDENT_REFERENCE_REGISTRO` (`ID_OBRA`),
  ADD KEY `FK_INCIDENT_REFERENCE_TRABAJAD` (`IDTRABAJADOR`),
  ADD KEY `FK_INCIDENT_REFERENCE_EQUIPO` (`CODIGO_EQUIPO`),
  ADD KEY `FK_INCIDENT_REFERENCE_MATERIAL` (`ID_MATERIAL`);

--
-- Indices de la tabla `informe_muestreo`
--
ALTER TABLE `informe_muestreo`
  ADD PRIMARY KEY (`ID_INFORME_MUESTREO`),
  ADD KEY `FK_INFORME__REFERENCEE_REGISTRO` (`ID_OBRA`);

--
-- Indices de la tabla `informe_resistencias`
--
ALTER TABLE `informe_resistencias`
  ADD PRIMARY KEY (`ID_INFORME_RESIS`),
  ADD KEY `FK_INFORME__REFERENCE_REGISTRO` (`ID_OBRA`);

--
-- Indices de la tabla `ingresos`
--
ALTER TABLE `ingresos`
  ADD PRIMARY KEY (`IDINGRESO`),
  ADD KEY `FK_INGRESOS_REFERENCE_REGISTRO` (`ID_OBRA`),
  ADD KEY `FK_INGRESOS_REFERENCE_TRABAJAD` (`IDTRABAJADOR`);

--
-- Indices de la tabla `mantenimiento`
--
ALTER TABLE `mantenimiento`
  ADD PRIMARY KEY (`ID_MANTENIMIENTO`),
  ADD KEY `FK_MANTENIM_REFERENCE_EQUIPO` (`CODIGO_EQUIPO`);

--
-- Indices de la tabla `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`ID_MATERIAL`);

--
-- Indices de la tabla `material_obra`
--
ALTER TABLE `material_obra`
  ADD KEY `FK_MATERIAL_REFERENCE_MATERIAL` (`ID_MATERIAL`),
  ADD KEY `FK_MATERIAL_REFERENCE_REGISTRO` (`ID_OBRA`),
  ADD KEY `FK_MATERIAL_REFERENCE_TRABAJAD` (`IDTRABAJADOR`);

--
-- Indices de la tabla `nomina`
--
ALTER TABLE `nomina`
  ADD PRIMARY KEY (`IDPAGO`);

--
-- Indices de la tabla `prestaciones`
--
ALTER TABLE `prestaciones`
  ADD PRIMARY KEY (`IDPRESTACION`),
  ADD KEY `FK_PRESTACI_REFERENCE_CAT_PRES` (`IDCATPRESTACION`);

--
-- Indices de la tabla `prestacion_nomina_trab`
--
ALTER TABLE `prestacion_nomina_trab`
  ADD PRIMARY KEY (`IDPRESNOMTRAB`),
  ADD KEY `FK_PRESTACI_REFERENCE_PRESTACI` (`IDPRESTACION`),
  ADD KEY `FK_PRESTACI_REFERENCE_NOMINA` (`IDPAGO`),
  ADD KEY `FK_PRESTACI_REFERENCE_TRABAJAD` (`IDTRABAJADOR`);

--
-- Indices de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD PRIMARY KEY (`IDPRESTAMO`),
  ADD KEY `FK_PRESTAMO_REFERENCE_TRABAJAD` (`IDTRABAJADOR`);

--
-- Indices de la tabla `presupuesto_obras`
--
ALTER TABLE `presupuesto_obras`
  ADD PRIMARY KEY (`ID_PRESUPUESTO`);

--
-- Indices de la tabla `puestos`
--
ALTER TABLE `puestos`
  ADD PRIMARY KEY (`IDPUESTOS`);

--
-- Indices de la tabla `registro_obras`
--
ALTER TABLE `registro_obras`
  ADD PRIMARY KEY (`ID_OBRA`),
  ADD KEY `FK_REGISTRO_REFERENCE_TRABAJAD` (`IDTRABAJADOR`),
  ADD KEY `FK_REGISTRO_REFERENCE_FKIDPRESU` (`ID_PRESUPUESTO`);

--
-- Indices de la tabla `reintegro`
--
ALTER TABLE `reintegro`
  ADD PRIMARY KEY (`IDREINTEGRO`),
  ADD KEY `FK_REINTEGR_REFERENCE_TRABAJAD` (`IDTRABAJADOR`),
  ADD KEY `FK_REINTEGR_REFERENCE_TIPVIAT_` (`IDDETVIAT`);

--
-- Indices de la tabla `seguro`
--
ALTER TABLE `seguro`
  ADD PRIMARY KEY (`ID_SEGURO`),
  ADD KEY `FK_SEGURO_REFERENCE_EQUIPO` (`CODIGO_EQUIPO`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`IDSERVICIO`);

--
-- Indices de la tabla `solicitudes_gastos`
--
ALTER TABLE `solicitudes_gastos`
  ADD PRIMARY KEY (`IDSOLICITUD`),
  ADD KEY `FK_SOLICITU_REFERENCE_TRABAJAD` (`IDTRABAJADOR`),
  ADD KEY `FK_SOLICITU_REFERENCE_GASTOS` (`IDGASTO`);

--
-- Indices de la tabla `tipoviaticos`
--
ALTER TABLE `tipoviaticos`
  ADD PRIMARY KEY (`IDTIVIATICO`);

--
-- Indices de la tabla `tipviat_viaticos`
--
ALTER TABLE `tipviat_viaticos`
  ADD PRIMARY KEY (`IDDETVIAT`),
  ADD KEY `FK_TIPVIAT__REFERENCE_VIATICOS` (`IDVIATICO`),
  ADD KEY `FK_TIPVIAT__REFERENCE_TIPOVIAT` (`IDTIVIATICO`);

--
-- Indices de la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  ADD PRIMARY KEY (`IDTRABAJADOR`),
  ADD KEY `FK_TRABAJAD_REFERENCE_PUESTOS` (`IDPUESTOS`);

--
-- Indices de la tabla `viajes`
--
ALTER TABLE `viajes`
  ADD PRIMARY KEY (`IDVIAJE`),
  ADD KEY `FK_VIAJES_REFERENCE_REGISTRO` (`ID_OBRA`),
  ADD KEY `FK_VIAJES_REFERENCE_INFORME_` (`ID_INFORME_MUESTREO`);

--
-- Indices de la tabla `viaje_informe_muestreo`
--
ALTER TABLE `viaje_informe_muestreo`
  ADD KEY `FK_VIAJE_IN_REFERENCE_VIAJES` (`IDVIAJE`),
  ADD KEY `FK_VIAJE_IN_REFERENCE_INFORME_` (`ID_INFORME_MUESTREO`);

--
-- Indices de la tabla `viaticos`
--
ALTER TABLE `viaticos`
  ADD PRIMARY KEY (`IDVIATICO`),
  ADD KEY `FK_VIATICOS_REFERENCE_TRABAJAD` (`IDTRABAJADOR`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cat_prestacion`
--
ALTER TABLE `cat_prestacion`
  MODIFY `IDCATPRESTACION` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `gastos`
--
ALTER TABLE `gastos`
  MODIFY `IDGASTO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `informe_muestreo`
--
ALTER TABLE `informe_muestreo`
  MODIFY `ID_INFORME_MUESTREO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ingresos`
--
ALTER TABLE `ingresos`
  MODIFY `IDINGRESO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `mantenimiento`
--
ALTER TABLE `mantenimiento`
  MODIFY `ID_MANTENIMIENTO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `nomina`
--
ALTER TABLE `nomina`
  MODIFY `IDPAGO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `prestaciones`
--
ALTER TABLE `prestaciones`
  MODIFY `IDPRESTACION` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `prestacion_nomina_trab`
--
ALTER TABLE `prestacion_nomina_trab`
  MODIFY `IDPRESNOMTRAB` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  MODIFY `IDPRESTAMO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `puestos`
--
ALTER TABLE `puestos`
  MODIFY `IDPUESTOS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `reintegro`
--
ALTER TABLE `reintegro`
  MODIFY `IDREINTEGRO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `IDSERVICIO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `solicitudes_gastos`
--
ALTER TABLE `solicitudes_gastos`
  MODIFY `IDSOLICITUD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tipoviaticos`
--
ALTER TABLE `tipoviaticos`
  MODIFY `IDTIVIATICO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipviat_viaticos`
--
ALTER TABLE `tipviat_viaticos`
  MODIFY `IDDETVIAT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  MODIFY `IDTRABAJADOR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `viajes`
--
ALTER TABLE `viajes`
  MODIFY `IDVIAJE` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `viaticos`
--
ALTER TABLE `viaticos`
  MODIFY `IDVIATICO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `catalogo_presupuesto`
--
ALTER TABLE `catalogo_presupuesto`
  ADD CONSTRAINT `FK_REGISTRO_REFERENCE_FKIDPRESUPRE` FOREIGN KEY (`ID_PRESUPUESTO`) REFERENCES `PRESUPUESTO_OBRAS` (`ID_PRESUPUESTO`);

--
-- Filtros para la tabla `costomantener`
--
ALTER TABLE `costomantener`
  ADD CONSTRAINT `FK_COSTOMAN_REFERENCE_EQUIPO` FOREIGN KEY (`CODIGO_EQUIPO`) REFERENCES `equipo` (`CODIGO_EQUIPO`),
  ADD CONSTRAINT `FK_COSTOMAN_REFERENCE_GASTOS` FOREIGN KEY (`IDGASTO`) REFERENCES `gastos` (`IDGASTO`),
  ADD CONSTRAINT `FK_COSTOMAN_REFERENCE_MANTENIM` FOREIGN KEY (`ID_MANTENIMIENTO`) REFERENCES `mantenimiento` (`ID_MANTENIMIENTO`);

--
-- Filtros para la tabla `equipo_obra`
--
ALTER TABLE `equipo_obra`
  ADD CONSTRAINT `FK_EQUIPO_O_REFERENCE_EQUIPO` FOREIGN KEY (`CODIGO_EQUIPO`) REFERENCES `equipo` (`CODIGO_EQUIPO`),
  ADD CONSTRAINT `FK_EQUIPO_O_REFERENCE_REGISTRO` FOREIGN KEY (`ID_OBRA`) REFERENCES `registro_obras` (`ID_OBRA`),
  ADD CONSTRAINT `FK_EQUIPO_O_REFERENCE_TRABAJAD` FOREIGN KEY (`IDTRABAJADOR`) REFERENCES `trabajadores` (`IDTRABAJADOR`);

--
-- Filtros para la tabla `gastos`
--
ALTER TABLE `gastos`
  ADD CONSTRAINT `FK_GASTOS_REFERENCE_TRABAJAD` FOREIGN KEY (`IDTRABAJADOR`) REFERENCES `trabajadores` (`IDTRABAJADOR`);

--
-- Filtros para la tabla `gastos_equipo`
--
ALTER TABLE `gastos_equipo`
  ADD CONSTRAINT `FK_GASTOS_E_REFERENCE_EQUIPO` FOREIGN KEY (`CODIGO_EQUIPO`) REFERENCES `equipo` (`CODIGO_EQUIPO`),
  ADD CONSTRAINT `FK_GASTOS_E_REFERENCE_GASTOS` FOREIGN KEY (`IDGASTO`) REFERENCES `gastos` (`IDGASTO`);

--
-- Filtros para la tabla `gastos_material`
--
ALTER TABLE `gastos_material`
  ADD CONSTRAINT `FK_GASTOS_M_REFERENCE_GASTOS` FOREIGN KEY (`IDGASTO`) REFERENCES `gastos` (`IDGASTO`),
  ADD CONSTRAINT `FK_GASTOS_M_REFERENCE_MATERIAL` FOREIGN KEY (`ID_MATERIAL`) REFERENCES `material` (`ID_MATERIAL`);

--
-- Filtros para la tabla `gastos_seguro`
--
ALTER TABLE `gastos_seguro`
  ADD CONSTRAINT `FK_GASTOS_SS_REFERENCE_GASTOS` FOREIGN KEY (`IDGASTO`) REFERENCES `gastos` (`IDGASTO`),
  ADD CONSTRAINT `FK_GASTOS_S_REFERENCE_SEGURO` FOREIGN KEY (`ID_SEGURO`) REFERENCES `seguro` (`ID_SEGURO`);

--
-- Filtros para la tabla `gastos_servicio`
--
ALTER TABLE `gastos_servicio`
  ADD CONSTRAINT `FK_GASTOS_S_REFERENCE_GASTOS` FOREIGN KEY (`IDGASTO`) REFERENCES `gastos` (`IDGASTO`),
  ADD CONSTRAINT `FK_GASTOS_S_REFERENCE_SERVICIO` FOREIGN KEY (`IDSERVICIO`) REFERENCES `servicios` (`IDSERVICIO`);

--
-- Filtros para la tabla `incidentes`
--
ALTER TABLE `incidentes`
  ADD CONSTRAINT `FK_INCIDENT_REFERENCE_EQUIPO` FOREIGN KEY (`CODIGO_EQUIPO`) REFERENCES `equipo` (`CODIGO_EQUIPO`),
  ADD CONSTRAINT `FK_INCIDENT_REFERENCE_MATERIAL` FOREIGN KEY (`ID_MATERIAL`) REFERENCES `material` (`ID_MATERIAL`),
  ADD CONSTRAINT `FK_INCIDENT_REFERENCE_REGISTRO` FOREIGN KEY (`ID_OBRA`) REFERENCES `registro_obras` (`ID_OBRA`),
  ADD CONSTRAINT `FK_INCIDENT_REFERENCE_TRABAJAD` FOREIGN KEY (`IDTRABAJADOR`) REFERENCES `trabajadores` (`IDTRABAJADOR`);

--
-- Filtros para la tabla `informe_muestreo`
--
ALTER TABLE `informe_muestreo`
  ADD CONSTRAINT `FK_INFORME__REFERENCEE_REGISTRO` FOREIGN KEY (`ID_OBRA`) REFERENCES `registro_obras` (`ID_OBRA`);

--
-- Filtros para la tabla `informe_resistencias`
--
ALTER TABLE `informe_resistencias`
  ADD CONSTRAINT `FK_INFORME__REFERENCE_REGISTRO` FOREIGN KEY (`ID_OBRA`) REFERENCES `registro_obras` (`ID_OBRA`);

--
-- Filtros para la tabla `ingresos`
--
ALTER TABLE `ingresos`
  ADD CONSTRAINT `FK_INGRESOS_REFERENCE_REGISTRO` FOREIGN KEY (`ID_OBRA`) REFERENCES `registro_obras` (`ID_OBRA`),
  ADD CONSTRAINT `FK_INGRESOS_REFERENCE_TRABAJAD` FOREIGN KEY (`IDTRABAJADOR`) REFERENCES `trabajadores` (`IDTRABAJADOR`);

--
-- Filtros para la tabla `mantenimiento`
--
ALTER TABLE `mantenimiento`
  ADD CONSTRAINT `FK_MANTENIM_REFERENCE_EQUIPO` FOREIGN KEY (`CODIGO_EQUIPO`) REFERENCES `equipo` (`CODIGO_EQUIPO`);

--
-- Filtros para la tabla `material_obra`
--
ALTER TABLE `material_obra`
  ADD CONSTRAINT `FK_MATERIAL_REFERENCE_MATERIAL` FOREIGN KEY (`ID_MATERIAL`) REFERENCES `material` (`ID_MATERIAL`),
  ADD CONSTRAINT `FK_MATERIAL_REFERENCE_REGISTRO` FOREIGN KEY (`ID_OBRA`) REFERENCES `registro_obras` (`ID_OBRA`),
  ADD CONSTRAINT `FK_MATERIAL_REFERENCE_TRABAJAD` FOREIGN KEY (`IDTRABAJADOR`) REFERENCES `trabajadores` (`IDTRABAJADOR`);

--
-- Filtros para la tabla `prestaciones`
--
ALTER TABLE `prestaciones`
  ADD CONSTRAINT `FK_PRESTACI_REFERENCE_CAT_PRES` FOREIGN KEY (`IDCATPRESTACION`) REFERENCES `cat_prestacion` (`IDCATPRESTACION`);

--
-- Filtros para la tabla `prestacion_nomina_trab`
--
ALTER TABLE `prestacion_nomina_trab`
  ADD CONSTRAINT `FK_PRESTACI_REFERENCE_NOMINA` FOREIGN KEY (`IDPAGO`) REFERENCES `nomina` (`IDPAGO`),
  ADD CONSTRAINT `FK_PRESTACI_REFERENCE_PRESTACI` FOREIGN KEY (`IDPRESTACION`) REFERENCES `prestaciones` (`IDPRESTACION`),
  ADD CONSTRAINT `FK_PRESTACI_REFERENCE_TRABAJAD` FOREIGN KEY (`IDTRABAJADOR`) REFERENCES `trabajadores` (`IDTRABAJADOR`);

--
-- Filtros para la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD CONSTRAINT `FK_PRESTAMO_REFERENCE_TRABAJAD` FOREIGN KEY (`IDTRABAJADOR`) REFERENCES `trabajadores` (`IDTRABAJADOR`);

--
-- Filtros para la tabla `registro_obras`
--
ALTER TABLE `registro_obras`
  ADD CONSTRAINT `FK_REGISTRO_REFERENCE_FKIDPRESU` FOREIGN KEY (`ID_PRESUPUESTO`) REFERENCES `PRESUPUESTO_OBRAS` (`ID_PRESUPUESTO`),
  ADD CONSTRAINT `FK_REGISTRO_REFERENCE_TRABAJAD` FOREIGN KEY (`IDTRABAJADOR`) REFERENCES `trabajadores` (`IDTRABAJADOR`);

--
-- Filtros para la tabla `reintegro`
--
ALTER TABLE `reintegro`
  ADD CONSTRAINT `FK_REINTEGR_REFERENCE_TIPVIAT_` FOREIGN KEY (`IDDETVIAT`) REFERENCES `tipviat_viaticos` (`IDDETVIAT`),
  ADD CONSTRAINT `FK_REINTEGR_REFERENCE_TRABAJAD` FOREIGN KEY (`IDTRABAJADOR`) REFERENCES `trabajadores` (`IDTRABAJADOR`);

--
-- Filtros para la tabla `seguro`
--
ALTER TABLE `seguro`
  ADD CONSTRAINT `FK_SEGURO_REFERENCE_EQUIPO` FOREIGN KEY (`CODIGO_EQUIPO`) REFERENCES `equipo` (`CODIGO_EQUIPO`);

--
-- Filtros para la tabla `solicitudes_gastos`
--
ALTER TABLE `solicitudes_gastos`
  ADD CONSTRAINT `FK_SOLICITU_REFERENCE_GASTOS` FOREIGN KEY (`IDGASTO`) REFERENCES `gastos` (`IDGASTO`),
  ADD CONSTRAINT `FK_SOLICITU_REFERENCE_TRABAJAD` FOREIGN KEY (`IDTRABAJADOR`) REFERENCES `trabajadores` (`IDTRABAJADOR`);

--
-- Filtros para la tabla `tipviat_viaticos`
--
ALTER TABLE `tipviat_viaticos`
  ADD CONSTRAINT `FK_TIPVIAT__REFERENCE_TIPOVIAT` FOREIGN KEY (`IDTIVIATICO`) REFERENCES `tipoviaticos` (`IDTIVIATICO`),
  ADD CONSTRAINT `FK_TIPVIAT__REFERENCE_VIATICOS` FOREIGN KEY (`IDVIATICO`) REFERENCES `viaticos` (`IDVIATICO`);

--
-- Filtros para la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  ADD CONSTRAINT `FK_TRABAJAD_REFERENCE_PUESTOS` FOREIGN KEY (`IDPUESTOS`) REFERENCES `puestos` (`IDPUESTOS`);

--
-- Filtros para la tabla `viajes`
--
ALTER TABLE `viajes`
  ADD CONSTRAINT `FK_VIAJES_REFERENCE_INFORME_` FOREIGN KEY (`ID_INFORME_MUESTREO`) REFERENCES `informe_muestreo` (`ID_INFORME_MUESTREO`),
  ADD CONSTRAINT `FK_VIAJES_REFERENCE_REGISTRO` FOREIGN KEY (`ID_OBRA`) REFERENCES `registro_obras` (`ID_OBRA`);

--
-- Filtros para la tabla `viaje_informe_muestreo`
--
ALTER TABLE `viaje_informe_muestreo`
  ADD CONSTRAINT `FK_VIAJE_IN_REFERENCE_INFORME_` FOREIGN KEY (`ID_INFORME_MUESTREO`) REFERENCES `informe_muestreo` (`ID_INFORME_MUESTREO`),
  ADD CONSTRAINT `FK_VIAJE_IN_REFERENCE_VIAJES` FOREIGN KEY (`IDVIAJE`) REFERENCES `viajes` (`IDVIAJE`);

--
-- Filtros para la tabla `viaticos`
--
ALTER TABLE `viaticos`
  ADD CONSTRAINT `FK_VIATICOS_REFERENCE_TRABAJAD` FOREIGN KEY (`IDTRABAJADOR`) REFERENCES `trabajadores` (`IDTRABAJADOR`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
