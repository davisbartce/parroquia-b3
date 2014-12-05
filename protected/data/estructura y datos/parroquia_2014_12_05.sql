-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 05-12-2014 a las 12:07:40
-- Versión del servidor: 5.6.12-log
-- Versión de PHP: 5.4.12

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `parroquia`
--
CREATE DATABASE IF NOT EXISTS `parroquia` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `parroquia`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bautizo`
--

CREATE TABLE IF NOT EXISTS `bautizo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `persona_id` int(11) NOT NULL,
  `fecha_bautizo` date NOT NULL,
  `iglesia` varchar(60) DEFAULT NULL,
  `padre_parroquia_id` int(11) NOT NULL,
  `papa_id` int(11) DEFAULT NULL,
  `mama_id` int(11) DEFAULT NULL,
  `feligreses_de` varchar(64) DEFAULT NULL,
  `padrino_id` int(11) DEFAULT NULL,
  `madrina_id` int(11) DEFAULT NULL,
  `tomo_id` int(11) NOT NULL,
  `pagina` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `nota` varchar(150) DEFAULT NULL,
  `rc_ano` year(4) DEFAULT NULL,
  `rc_tomo` varchar(20) NOT NULL,
  `rc_folio` int(11) NOT NULL,
  `rc_acta` int(11) NOT NULL,
  `rc_fecha` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `bautizo`
--

INSERT INTO `bautizo` (`id`, `persona_id`, `fecha_bautizo`, `iglesia`, `padre_parroquia_id`, `papa_id`, `mama_id`, `feligreses_de`, `padrino_id`, `madrina_id`, `tomo_id`, `pagina`, `numero`, `nota`, `rc_ano`, `rc_tomo`, `rc_folio`, `rc_acta`, `rc_fecha`) VALUES
(1, 3, '2014-11-03', 'Quito', 1, 1, 2, 'Ibarra', NULL, NULL, 1, 1, 1, NULL, 2014, '1', 1, 1234, '2014-11-22'),
(2, 4, '1996-06-12', 'San Luis', 1, 5, 6, 'otavalo', 1, 2, 1, 1252, 232, NULL, 2009, '445', 54465, 456, '2014-11-03'),
(3, 7, '2014-11-25', 'El Jordan', 1, 5, 6, 'otavalo', 5, 4, 1, 34531, 321323, NULL, 2009, '31313', 3123, 1313, '2014-11-03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_authassignment`
--

CREATE TABLE IF NOT EXISTS `cruge_authassignment` (
  `userid` int(11) NOT NULL,
  `bizrule` text,
  `data` text,
  `itemname` varchar(64) NOT NULL,
  PRIMARY KEY (`userid`,`itemname`),
  KEY `fk_cruge_authassignment_cruge_authitem1` (`itemname`),
  KEY `fk_cruge_authassignment_user` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_authitem`
--

CREATE TABLE IF NOT EXISTS `cruge_authitem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cruge_authitem`
--

INSERT INTO `cruge_authitem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
('action_bautizo_admin', 0, '', NULL, 'N;'),
('action_bautizo_create', 0, '', NULL, 'N;'),
('action_bautizo_update', 0, '', NULL, 'N;'),
('action_bautizo_view', 0, '', NULL, 'N;'),
('action_dashboard_buttons', 0, '', NULL, 'N;'),
('action_dashboard_general', 0, '', NULL, 'N;'),
('action_dashboard_generalForm', 0, '', NULL, 'N;'),
('action_dashboard_icons', 0, '', NULL, 'N;'),
('action_dashboard_index', 0, '', NULL, 'N;'),
('action_dashboard_invoice', 0, '', NULL, 'N;'),
('action_dashboard_sliders', 0, '', NULL, 'N;'),
('action_dashboard_widgets', 0, '', NULL, 'N;'),
('action_libro_admin', 0, '', NULL, 'N;'),
('action_libro_create', 0, '', NULL, 'N;'),
('action_padre_admin', 0, '', NULL, 'N;'),
('action_padre_create', 0, '', NULL, 'N;'),
('action_persona_admin', 0, '', NULL, 'N;'),
('action_persona_ajaxlistPersonas', 0, '', NULL, 'N;'),
('action_persona_create', 0, '', NULL, 'N;'),
('action_persona_createModal', 0, '', NULL, 'N;'),
('action_persona_delete', 0, '', NULL, 'N;'),
('action_persona_mini', 0, '', NULL, 'N;'),
('action_persona_update', 0, '', NULL, 'N;'),
('action_ui_systemupdate', 0, '', NULL, 'N;'),
('action_ui_usermanagementadmin', 0, '', NULL, 'N;'),
('action_ui_usermanagementcreate', 0, '', NULL, 'N;'),
('admin', 0, '', NULL, 'N;');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_authitemchild`
--

CREATE TABLE IF NOT EXISTS `cruge_authitemchild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_field`
--

CREATE TABLE IF NOT EXISTS `cruge_field` (
  `idfield` int(11) NOT NULL AUTO_INCREMENT,
  `fieldname` varchar(20) NOT NULL,
  `longname` varchar(50) DEFAULT NULL,
  `position` int(11) DEFAULT '0',
  `required` int(11) DEFAULT '0',
  `fieldtype` int(11) DEFAULT '0',
  `fieldsize` int(11) DEFAULT '20',
  `maxlength` int(11) DEFAULT '45',
  `showinreports` int(11) DEFAULT '0',
  `useregexp` varchar(512) DEFAULT NULL,
  `useregexpmsg` varchar(512) DEFAULT NULL,
  `predetvalue` mediumblob,
  PRIMARY KEY (`idfield`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_fieldvalue`
--

CREATE TABLE IF NOT EXISTS `cruge_fieldvalue` (
  `idfieldvalue` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `idfield` int(11) NOT NULL,
  `value` blob,
  PRIMARY KEY (`idfieldvalue`),
  KEY `fk_cruge_fieldvalue_cruge_user1` (`iduser`),
  KEY `fk_cruge_fieldvalue_cruge_field1` (`idfield`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_session`
--

CREATE TABLE IF NOT EXISTS `cruge_session` (
  `idsession` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `created` bigint(30) DEFAULT NULL,
  `expire` bigint(30) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `ipaddress` varchar(45) DEFAULT NULL,
  `usagecount` int(11) DEFAULT '0',
  `lastusage` bigint(30) DEFAULT NULL,
  `logoutdate` bigint(30) DEFAULT NULL,
  `ipaddressout` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idsession`),
  KEY `crugesession_iduser` (`iduser`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Volcado de datos para la tabla `cruge_session`
--

INSERT INTO `cruge_session` (`idsession`, `iduser`, `created`, `expire`, `status`, `ipaddress`, `usagecount`, `lastusage`, `logoutdate`, `ipaddressout`) VALUES
(1, 1, 1416324807, 1416326607, 0, '192.168.64.101', 1, 1416324807, NULL, NULL),
(2, 1, 1416330496, 1416332296, 0, '::1', 4, 1416332111, NULL, NULL),
(3, 1, 1416332312, 1416334112, 0, '::1', 1, 1416332312, 1416332483, '::1'),
(4, 1, 1416338435, 1416340235, 0, '::1', 1, 1416338435, NULL, NULL),
(5, 1, 1416343141, 1416344941, 0, '::1', 1, 1416343141, NULL, NULL),
(6, 1, 1416345954, 1416347754, 0, '::1', 1, 1416345954, NULL, NULL),
(7, 1, 1416348138, 1416349938, 1, '::1', 1, 1416348138, NULL, NULL),
(8, 1, 1416405754, 1416407554, 1, '::1', 1, 1416405754, NULL, NULL),
(9, 1, 1416416151, 1416417951, 0, '192.168.64.101', 1, 1416416151, NULL, NULL),
(10, 1, 1416418145, 1416419945, 0, '::1', 1, 1416418145, NULL, NULL),
(11, 1, 1416419961, 1416421761, 0, '::1', 1, 1416419961, NULL, NULL),
(12, 1, 1416426851, 1416428651, 0, '192.168.64.101', 2, 1416428437, NULL, NULL),
(13, 1, 1416429566, 1416431366, 1, '::1', 1, 1416429566, NULL, NULL),
(14, 1, 1416491103, 1416492903, 1, '::1', 1, 1416491103, NULL, NULL),
(15, 1, 1416496813, 1416498613, 0, '192.168.64.101', 1, 1416496813, NULL, NULL),
(16, 1, 1416501097, 1416502897, 0, '::1', 3, 1416502499, NULL, NULL),
(17, 1, 1416503037, 1416504837, 0, '::1', 1, 1416503037, NULL, NULL),
(18, 1, 1416505137, 1416506937, 0, '192.168.0.3', 5, 1416505989, NULL, NULL),
(19, 1, 1416507006, 1416508806, 0, '192.168.64.101', 2, 1416507542, NULL, NULL),
(20, 1, 1416516290, 1416518090, 0, '::1', 2, 1416516337, NULL, NULL),
(21, 1, 1416518126, 1416519926, 0, '192.168.64.101', 2, 1416518430, NULL, NULL),
(22, 1, 1416520043, 1416521843, 0, '::1', 1, 1416520043, 1416520141, '::1'),
(23, 1, 1416520235, 1416522035, 0, '::1', 2, 1416521872, NULL, NULL),
(24, 1, 1416522087, 1416523887, 1, '::1', 1, 1416522087, NULL, NULL),
(25, 1, 1416580544, 1416582344, 1, '::1', 1, 1416580544, NULL, NULL),
(26, 1, 1416612745, 1416614545, 1, '192.168.0.4', 1, 1416612745, NULL, NULL),
(27, 1, 1416957035, 1416958835, 1, '192.168.0.2', 1, 1416957035, NULL, NULL),
(28, 1, 1416959671, 1416961471, 1, '192.168.0.4', 1, 1416959671, NULL, NULL),
(29, 1, 1417044156, 1417045956, 0, '127.0.0.1', 1, 1417044156, NULL, NULL),
(30, 1, 1417045994, 1417047794, 1, '192.168.0.3', 2, 1417047304, NULL, NULL),
(31, 1, 1417217869, 1417219669, 1, '192.168.0.3', 1, 1417217869, NULL, NULL),
(32, 1, 1417276735, 1417278535, 0, '127.0.0.1', 1, 1417276735, NULL, NULL),
(33, 1, 1417281236, 1417283036, 0, '127.0.0.1', 1, 1417281236, NULL, NULL),
(34, 1, 1417283297, 1417463297, 1, '127.0.0.1', 5, 1417298005, NULL, NULL),
(35, 1, 1417658823, 1417838823, 1, '127.0.0.1', 2, 1417740017, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_system`
--

CREATE TABLE IF NOT EXISTS `cruge_system` (
  `idsystem` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `largename` varchar(45) DEFAULT NULL,
  `sessionmaxdurationmins` int(11) DEFAULT '30',
  `sessionmaxsameipconnections` int(11) DEFAULT '10',
  `sessionreusesessions` int(11) DEFAULT '1' COMMENT '1yes 0no',
  `sessionmaxsessionsperday` int(11) DEFAULT '-1',
  `sessionmaxsessionsperuser` int(11) DEFAULT '-1',
  `systemnonewsessions` int(11) DEFAULT '0' COMMENT '1yes 0no',
  `systemdown` int(11) DEFAULT '0',
  `registerusingcaptcha` int(11) DEFAULT '0',
  `registerusingterms` int(11) DEFAULT '0',
  `terms` blob,
  `registerusingactivation` int(11) DEFAULT '1',
  `defaultroleforregistration` varchar(64) DEFAULT NULL,
  `registerusingtermslabel` varchar(100) DEFAULT NULL,
  `registrationonlogin` int(11) DEFAULT '1',
  PRIMARY KEY (`idsystem`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cruge_system`
--

INSERT INTO `cruge_system` (`idsystem`, `name`, `largename`, `sessionmaxdurationmins`, `sessionmaxsameipconnections`, `sessionreusesessions`, `sessionmaxsessionsperday`, `sessionmaxsessionsperuser`, `systemnonewsessions`, `systemdown`, `registerusingcaptcha`, `registerusingterms`, `terms`, `registerusingactivation`, `defaultroleforregistration`, `registerusingtermslabel`, `registrationonlogin`) VALUES
(1, 'default', NULL, 3000, 10, 1, -1, -1, 0, 0, 0, 0, '', 0, '', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_user`
--

CREATE TABLE IF NOT EXISTS `cruge_user` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `regdate` bigint(30) DEFAULT NULL,
  `actdate` bigint(30) DEFAULT NULL,
  `logondate` bigint(30) DEFAULT NULL,
  `username` varchar(64) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL COMMENT 'Hashed password',
  `authkey` varchar(100) DEFAULT NULL COMMENT 'llave de autentificacion',
  `state` int(11) DEFAULT '0',
  `totalsessioncounter` int(11) DEFAULT '0',
  `currentsessioncounter` int(11) DEFAULT '0',
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `cruge_user`
--

INSERT INTO `cruge_user` (`iduser`, `regdate`, `actdate`, `logondate`, `username`, `email`, `password`, `authkey`, `state`, `totalsessioncounter`, `currentsessioncounter`) VALUES
(1, NULL, NULL, 1417740017, 'admin', 'admin@tucorreo.com', 'admin', NULL, 1, 0, 0),
(2, NULL, NULL, NULL, 'invitado', 'invitado', 'nopassword', NULL, 1, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE IF NOT EXISTS `direccion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ciudad` varchar(64) NOT NULL,
  `calles` varchar(64) NOT NULL,
  `numero` int(11) DEFAULT NULL,
  `persona_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `persona_id` (`persona_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE IF NOT EXISTS `libro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ano` year(4) NOT NULL,
  `tomo` varchar(45) NOT NULL,
  `tipo` enum('BAUTIZOS','MATRIMONIOS','CONFIRMACIONES','PRIMERAS COMUNIONES') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`id`, `ano`, `tomo`, `tipo`) VALUES
(1, 2014, '1', 'BAUTIZOS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matrimonio`
--

CREATE TABLE IF NOT EXISTS `matrimonio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `testigo_novio_1` int(11) NOT NULL,
  `testigo_novio_2` int(11) NOT NULL,
  `conocen_novio` varchar(10) NOT NULL,
  `novio_impedimento` tinyint(1) DEFAULT '0',
  `testigo_novia_1` int(11) NOT NULL,
  `testigo_novia_2` int(11) NOT NULL,
  `conocen_novia` varchar(10) NOT NULL,
  `novia_impedimento` tinyint(1) DEFAULT '0',
  `numero` int(11) NOT NULL,
  `ciudad` varchar(24) NOT NULL,
  `iglesia` varchar(64) NOT NULL,
  `fecha_matrimonio` date NOT NULL,
  `novio_id` int(11) NOT NULL,
  `novio_papa_id` int(11) DEFAULT NULL,
  `novio_mama_id` int(11) DEFAULT NULL,
  `bautizo_novio` tinyint(1) DEFAULT '0',
  `iglesia_bautizo_novio` varchar(64) DEFAULT NULL,
  `fecha_bautizo_novio` date DEFAULT NULL,
  `tomo_bautizo_novio` int(11) DEFAULT NULL,
  `pagina_bautizo_novio` int(11) DEFAULT NULL,
  `numero_bautizo_novio` int(11) DEFAULT NULL,
  `estado_civil_novio` enum('CASADO','SOLTERO','DIVORCIADO') NOT NULL DEFAULT 'CASADO',
  `novia_id` int(11) NOT NULL,
  `novia_papa_id` int(11) DEFAULT NULL,
  `novia_mama_id` int(11) DEFAULT NULL,
  `bautizo_novia` tinyint(1) DEFAULT '0',
  `iglesia_bautizo_novia` varchar(64) DEFAULT NULL,
  `fecha_bautizo_novia` date DEFAULT NULL,
  `tomo_bautizo_novia` int(11) DEFAULT NULL,
  `pagina_bautizo_novia` int(11) DEFAULT NULL,
  `numero_bautizo_novia` int(11) DEFAULT NULL,
  `estado_civil_novia` enum('CASADA','SOLTERA','DIVORCIADA') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `padre`
--

CREATE TABLE IF NOT EXISTS `padre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(60) NOT NULL,
  `apellidos` varchar(60) NOT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `padre`
--

INSERT INTO `padre` (`id`, `nombres`, `apellidos`, `fecha_nacimiento`) VALUES
(1, 'Eugeniuz ', 'Wetta ', '1965-06-16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE IF NOT EXISTS `persona` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `documento` varchar(20) DEFAULT NULL,
  `nombres` varchar(60) NOT NULL,
  `apellidos` varchar(60) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `lugar_nacimiento` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `clavePersonas` (`nombres`,`apellidos`,`fecha_nacimiento`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id`, `documento`, `nombres`, `apellidos`, `fecha_nacimiento`, `lugar_nacimiento`) VALUES
(1, '1003117940', 'Washington David', 'Paredes Esparza', '1988-09-21', 'Otavalo'),
(2, '1801850429', 'Cinthya Carolina', 'Aldas Morales', '1988-11-16', 'Ambato '),
(3, NULL, 'Ashley Carolina', 'Paredes Aldas ', '2010-10-27', 'Otavalo '),
(4, NULL, 'Elizabeth Judith', 'Paredes Esparza', '1995-06-12', 'Otavalo'),
(5, NULL, 'Edison Amable ', 'Paredes Moran', '1970-08-29', 'Quito'),
(6, NULL, 'Maria Judith', 'Esparza Vaca', '1965-02-14', 'Otavalo'),
(7, NULL, 'Jhonathan Javier', 'Paredes Esparza', '1991-05-21', 'Otavalo');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cruge_authassignment`
--
ALTER TABLE `cruge_authassignment`
  ADD CONSTRAINT `fk_cruge_authassignment_cruge_authitem1` FOREIGN KEY (`itemname`) REFERENCES `cruge_authitem` (`name`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cruge_authassignment_user` FOREIGN KEY (`userid`) REFERENCES `cruge_user` (`iduser`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cruge_authitemchild`
--
ALTER TABLE `cruge_authitemchild`
  ADD CONSTRAINT `crugeauthitemchild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `cruge_authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `crugeauthitemchild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `cruge_authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cruge_fieldvalue`
--
ALTER TABLE `cruge_fieldvalue`
  ADD CONSTRAINT `fk_cruge_fieldvalue_cruge_field1` FOREIGN KEY (`idfield`) REFERENCES `cruge_field` (`idfield`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cruge_fieldvalue_cruge_user1` FOREIGN KEY (`iduser`) REFERENCES `cruge_user` (`iduser`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD CONSTRAINT `direccion_ibfk_1` FOREIGN KEY (`persona_id`) REFERENCES `persona` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
