-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 05-10-2015 a las 10:20:42
-- Versión del servidor: 5.6.12-log
-- Versión de PHP: 5.4.12

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
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE IF NOT EXISTS `asistencia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` datetime NOT NULL,
  `numero_asistentes` int(11) NOT NULL,
  `numero_comulgados` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `asistencia`
--

INSERT INTO `asistencia` (`id`, `fecha`, `numero_asistentes`, `numero_comulgados`) VALUES
(1, '2015-08-09 10:33:26', 100, 20),
(2, '2015-08-16 03:42:58', 10, 1),
(3, '2015-09-28 03:43:16', 20, 2),
(4, '2015-09-28 05:20:11', 200, 20),
(5, '2015-10-02 04:33:45', 200, 50),
(6, '2015-10-03 03:59:49', 250, 80);

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
  `rc_lugar` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `bautizo`
--

INSERT INTO `bautizo` (`id`, `persona_id`, `fecha_bautizo`, `iglesia`, `padre_parroquia_id`, `papa_id`, `mama_id`, `feligreses_de`, `padrino_id`, `madrina_id`, `tomo_id`, `pagina`, `numero`, `nota`, `rc_ano`, `rc_tomo`, `rc_folio`, `rc_acta`, `rc_fecha`, `rc_lugar`) VALUES
(2, 4, '2015-02-12', 'JESUS EL BUEN PASTOR', 1, 5, 6, 'otavalo', 1, 2, 1, 1252, 232, NULL, 2009, '445', 54465, 456, '2014-11-03', NULL),
(3, 7, '2015-02-12', 'JESUS EL BUEN PASTOR', 1, 5, 6, 'otavalo', 5, 4, 1, 34531, 321323, NULL, 2009, '31313', 3123, 1313, '2014-11-03', NULL),
(4, 1, '2015-06-10', 'JESÚS EL BUEN PASTOR', 1, 5, 6, 'Otavalo', 7, 4, 3, 1, 23, NULL, 2015, '1', 22, 22, '2015-06-09', NULL),
(6, 3, '2015-06-11', 'JESÚS EL BUEN PASTOR', 1, 1, 2, 'Ibarra', 7, NULL, 1, 23, 11, NULL, 2016, '212', 122, 122, '2015-06-08', NULL),
(7, 8, '2015-07-17', 'JESÚS EL BUEN PASTOR', 1, 5, 9, 'Quito', 1, 2, 3, 30, 234, NULL, 2015, '123', 15, 3456, '2015-07-12', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comunion`
--

CREATE TABLE IF NOT EXISTS `comunion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `persona_id` int(11) NOT NULL,
  `fecha_comunion` date NOT NULL,
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `comunion`
--

INSERT INTO `comunion` (`id`, `persona_id`, `fecha_comunion`, `iglesia`, `padre_parroquia_id`, `papa_id`, `mama_id`, `feligreses_de`, `padrino_id`, `madrina_id`, `tomo_id`, `pagina`, `numero`, `nota`) VALUES
(5, 3, '2015-03-21', 'Jesus el Buen Pastor', 1, 1, 2, 'Ibarra', 7, 6, 9, 1, 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `confirmacion`
--

CREATE TABLE IF NOT EXISTS `confirmacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `persona_id` int(11) NOT NULL,
  `fecha_confirmacion` date NOT NULL,
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
  `ano_bautizo` year(4) DEFAULT NULL,
  `tomo_bautizo` int(11) DEFAULT NULL,
  `pagina_bautizo` int(11) DEFAULT NULL,
  `numero_bautizo` int(11) DEFAULT NULL,
  `lugar_bautizo` varchar(40) DEFAULT NULL,
  `fecha_bautizo` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `confirmacion`
--

INSERT INTO `confirmacion` (`id`, `persona_id`, `fecha_confirmacion`, `iglesia`, `padre_parroquia_id`, `papa_id`, `mama_id`, `feligreses_de`, `padrino_id`, `madrina_id`, `tomo_id`, `pagina`, `numero`, `nota`, `ano_bautizo`, `tomo_bautizo`, `pagina_bautizo`, `numero_bautizo`, `lugar_bautizo`, `fecha_bautizo`) VALUES
(4, 3, '2015-03-15', 'Buen Pastor', 1, 1, 2, 'Ibarra', 7, 6, 8, 1, 1, NULL, 2014, 1, 20, 234, 'Otavalo', '2015-09-17'),
(5, 4, '2015-07-12', 'JESÚS EL BUEN PASTOR', 1, 1, 6, 'Ibarra', 7, 3, 8, 20, 234, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
('action_asistenciaReporte_reporte', 0, '', NULL, 'N;'),
('action_asistencia_admin', 0, '', NULL, 'N;'),
('action_asistencia_create', 0, '', NULL, 'N;'),
('action_bautizo_admin', 0, '', NULL, 'N;'),
('action_bautizo_create', 0, '', NULL, 'N;'),
('action_bautizo_delete', 0, '', NULL, 'N;'),
('action_bautizo_update', 0, '', NULL, 'N;'),
('action_bautizo_view', 0, '', NULL, 'N;'),
('action_bautizo_viewPrint', 0, '', NULL, 'N;'),
('action_comunion_admin', 0, '', NULL, 'N;'),
('action_comunion_create', 0, '', NULL, 'N;'),
('action_comunion_update', 0, '', NULL, 'N;'),
('action_comunion_view', 0, '', NULL, 'N;'),
('action_comunion_viewPrint', 0, '', NULL, 'N;'),
('action_confirmacion_admin', 0, '', NULL, 'N;'),
('action_confirmacion_create', 0, '', NULL, 'N;'),
('action_confirmacion_update', 0, '', NULL, 'N;'),
('action_confirmacion_view', 0, '', NULL, 'N;'),
('action_dashboard_advanced', 0, '', NULL, 'N;'),
('action_dashboard_buttons', 0, '', NULL, 'N;'),
('action_dashboard_general', 0, '', NULL, 'N;'),
('action_dashboard_generalForm', 0, '', NULL, 'N;'),
('action_dashboard_icons', 0, '', NULL, 'N;'),
('action_dashboard_index', 0, '', NULL, 'N;'),
('action_dashboard_invoice', 0, '', NULL, 'N;'),
('action_dashboard_sliders', 0, '', NULL, 'N;'),
('action_dashboard_timeline', 0, '', NULL, 'N;'),
('action_dashboard_widgets', 0, '', NULL, 'N;'),
('action_libro_admin', 0, '', NULL, 'N;'),
('action_libro_create', 0, '', NULL, 'N;'),
('action_libro_delete', 0, '', NULL, 'N;'),
('action_matrimonio_admin', 0, '', NULL, 'N;'),
('action_matrimonio_create', 0, '', NULL, 'N;'),
('action_matrimonio_update', 0, '', NULL, 'N;'),
('action_matrimonio_view', 0, '', NULL, 'N;'),
('action_matrimonio_viewPrint', 0, '', NULL, 'N;'),
('action_padre_admin', 0, '', NULL, 'N;'),
('action_padre_create', 0, '', NULL, 'N;'),
('action_padre_update', 0, '', NULL, 'N;'),
('action_padre_view', 0, '', NULL, 'N;'),
('action_persona_admin', 0, '', NULL, 'N;'),
('action_persona_ajaxlistPersonas', 0, '', NULL, 'N;'),
('action_persona_create', 0, '', NULL, 'N;'),
('action_persona_createModal', 0, '', NULL, 'N;'),
('action_persona_delete', 0, '', NULL, 'N;'),
('action_persona_mini', 0, '', NULL, 'N;'),
('action_persona_reporte', 0, '', NULL, 'N;'),
('action_persona_reporteDashboard', 0, '', NULL, 'N;'),
('action_persona_update', 0, '', NULL, 'N;'),
('action_persona_view', 0, '', NULL, 'N;'),
('action_ui_sessionadmin', 0, '', NULL, 'N;'),
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=85 ;

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
(35, 1, 1417658823, 1417838823, 1, '127.0.0.1', 2, 1417740017, NULL, NULL),
(36, 1, 1417879791, 1418059791, 0, '192.168.0.4', 3, 1417883518, 1417893908, '127.0.0.1'),
(37, 1, 1417893937, 1418073937, 1, '127.0.0.1', 1, 1417893937, NULL, NULL),
(38, 1, 1422714142, 1422894142, 1, '127.0.0.1', 1, 1422714142, NULL, NULL),
(39, 1, 1426346401, 1426526401, 1, '127.0.0.1', 6, 1426435431, NULL, NULL),
(40, 1, 1426807414, 1426987414, 1, '192.168.0.2', 3, 1426956025, NULL, NULL),
(41, 1, 1427037826, 1427217826, 1, '127.0.0.1', 1, 1427037826, NULL, NULL),
(42, 1, 1427571991, 1427751991, 1, '127.0.0.1', 3, 1427650078, NULL, NULL),
(43, 1, 1428013402, 1428193402, 1, '127.0.0.1', 2, 1428178150, NULL, NULL),
(44, 1, 1428427145, 1428607145, 1, '192.168.0.6', 3, 1428427821, NULL, NULL),
(45, 1, 1428855576, 1429035576, 1, '127.0.0.1', 1, 1428855576, NULL, NULL),
(46, 1, 1429372252, 1429552252, 1, '127.0.0.1', 1, 1429372252, NULL, NULL),
(47, 1, 1430231711, 1430411711, 1, '127.0.0.1', 1, 1430231711, NULL, NULL),
(48, 1, 1430510108, 1430690108, 0, '192.168.0.6', 1, 1430510108, 1430510788, '192.168.0.6'),
(49, 1, 1430518494, 1430698494, 0, '192.168.0.6', 1, 1430518494, 1430518506, '192.168.0.6'),
(50, 1, 1431186701, 1431366701, 1, '127.0.0.1', 2, 1431271273, NULL, NULL),
(51, 1, 1431371080, 1431551080, 1, '127.0.0.1', 1, 1431371080, NULL, NULL),
(52, 1, 1433691278, 1433871278, 1, '127.0.0.1', 1, 1433691278, NULL, NULL),
(53, 1, 1434152773, 1434332773, 0, '127.0.0.1', 2, 1434209433, 1434211676, '127.0.0.1'),
(54, 1, 1434211680, 1434391680, 1, '127.0.0.1', 2, 1434293200, NULL, NULL),
(55, 1, 1436482845, 1436482965, 0, '127.0.0.1', 1, 1436482845, NULL, NULL),
(56, 1, 1436483008, 1436483128, 0, '127.0.0.1', 1, 1436483008, NULL, NULL),
(57, 1, 1436485097, 1436485217, 0, '127.0.0.1', 1, 1436485097, NULL, NULL),
(58, 1, 1436485449, 1436485569, 0, '127.0.0.1', 1, 1436485449, NULL, NULL),
(59, 1, 1436485581, 1436485701, 0, '127.0.0.1', 1, 1436485581, 1436485626, '127.0.0.1'),
(60, 1, 1436485628, 1436507228, 1, '127.0.0.1', 1, 1436485628, NULL, NULL),
(61, 1, 1436628252, 1436649852, 0, '127.0.0.1', 1, 1436628252, NULL, NULL),
(62, 1, 1436650829, 1436672429, 0, '127.0.0.1', 2, 1436664422, NULL, NULL),
(63, 1, 1436672465, 1436694065, 1, '127.0.0.1', 1, 1436672465, NULL, NULL),
(64, 1, 1436718577, 1436740177, 0, '127.0.0.1', 1, 1436718577, 1436722283, '127.0.0.1'),
(65, 1, 1436722321, 1436743921, 0, '192.168.0.108', 4, 1436723409, 1436726122, '127.0.0.1'),
(66, 1, 1437605200, 1437626800, 1, '127.0.0.1', 1, 1437605200, NULL, NULL),
(67, 1, 1437838604, 1437860204, 1, '127.0.0.1', 1, 1437838604, NULL, NULL),
(68, 1, 1438444724, 1438466324, 1, '127.0.0.1', 1, 1438444724, NULL, NULL),
(69, 1, 1439653900, 1439675500, 1, '127.0.0.1', 7, 1439670374, NULL, NULL),
(70, 1, 1439820725, 1439842325, 0, '127.0.0.1', 1, 1439820725, 1439822282, '127.0.0.1'),
(71, 1, 1439824050, 1439845650, 0, '127.0.0.1', 1, 1439824050, 1439827180, '127.0.0.1'),
(72, 1, 1439827185, 1439848785, 0, '127.0.0.1', 1, 1439827185, 1439828169, '127.0.0.1'),
(73, 1, 1439828175, 1439849775, 0, '127.0.0.1', 2, 1439829195, 1439830377, '127.0.0.1'),
(74, 1, 1439833184, 1439854784, 1, '127.0.0.1', 1, 1439833184, NULL, NULL),
(75, 1, 1440687404, 1440709004, 1, '127.0.0.1', 1, 1440687404, NULL, NULL),
(76, 1, 1440886957, 1440908557, 1, '127.0.0.1', 1, 1440886957, NULL, NULL),
(77, 1, 1441485007, 1441506607, 1, '127.0.0.1', 2, 1441489553, NULL, NULL),
(78, 1, 1442539410, 1442561010, 0, '::1', 1, 1442539410, 1442543917, '::1'),
(79, 1, 1442544068, 1442565668, 1, '::1', 1, 1442544068, NULL, NULL),
(80, 1, 1443301189, 1443322789, 1, '::1', 1, 1443301189, NULL, NULL),
(81, 1, 1443450260, 1443471860, 0, '::1', 2, 1443469431, NULL, NULL),
(82, 1, 1443472810, 1443494410, 1, '::1', 1, 1443472810, NULL, NULL),
(83, 1, 1443655064, 1443871064, 1, '::1', 2, 1443821200, NULL, NULL),
(84, 1, 1443884300, 1444100300, 1, '::1', 9, 1443978359, NULL, NULL);

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
(1, 'default', NULL, 3600, 10, 1, -1, -1, 0, 0, 0, 0, '', 0, '', '', 1);

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
(1, NULL, NULL, 1443978359, 'admin', 'admin@tucorreo.com', 'admin', NULL, 1, 0, 0),
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`id`, `ano`, `tomo`, `tipo`) VALUES
(1, 2014, '1', 'BAUTIZOS'),
(2, 2014, '1', 'MATRIMONIOS'),
(3, 2015, '1', 'BAUTIZOS'),
(4, 2015, '2', 'BAUTIZOS'),
(7, 2016, '1', 'BAUTIZOS'),
(8, 2015, '1', 'CONFIRMACIONES'),
(9, 2015, '1', 'PRIMERAS COMUNIONES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matrimonio`
--

CREATE TABLE IF NOT EXISTS `matrimonio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_matrimonio` date NOT NULL,
  `iglesia` varchar(60) DEFAULT NULL,
  `padre_parroquia_id` int(11) NOT NULL,
  `novio_id` int(11) NOT NULL,
  `papa_novio_id` int(11) DEFAULT NULL,
  `mama_novio_id` int(11) DEFAULT NULL,
  `testigo_novio_1` varchar(60) DEFAULT NULL,
  `testigo_novio_2` varchar(60) DEFAULT NULL,
  `novia_id` int(11) NOT NULL,
  `papa_novia_id` int(11) DEFAULT NULL,
  `mama_novia_id` int(11) DEFAULT NULL,
  `testigo_novia_1` varchar(60) DEFAULT NULL,
  `testigo_novia_2` varchar(60) DEFAULT NULL,
  `tomo_id` int(11) NOT NULL,
  `pagina` int(11) DEFAULT NULL,
  `numero` int(11) NOT NULL,
  `rc_ano` year(4) NOT NULL,
  `rc_tomo` varchar(20) DEFAULT NULL,
  `rc_folio` int(11) DEFAULT NULL,
  `rc_acta` int(11) DEFAULT NULL,
  `rc_lugar` varchar(60) DEFAULT NULL,
  `rc_fecha` date DEFAULT NULL,
  `acta_preparada_por` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `matrimonio`
--

INSERT INTO `matrimonio` (`id`, `fecha_matrimonio`, `iglesia`, `padre_parroquia_id`, `novio_id`, `papa_novio_id`, `mama_novio_id`, `testigo_novio_1`, `testigo_novio_2`, `novia_id`, `papa_novia_id`, `mama_novia_id`, `testigo_novia_1`, `testigo_novia_2`, `tomo_id`, `pagina`, `numero`, `rc_ano`, `rc_tomo`, `rc_folio`, `rc_acta`, `rc_lugar`, `rc_fecha`, `acta_preparada_por`) VALUES
(1, '2015-03-13', 'Jesus el Buen Pastor', 1, 1, 5, 6, 'Andres Marcelo Aguirre Parreño', 'Roger Andres Mera lopez', 2, 8, 3, 'Xavier Israel Aldas Morales', 'Matin Aldas Morales', 2, 1, 1, 2015, '1', 1, 1, 'Quito', '2015-03-13', NULL),
(2, '2015-07-12', 'JESÚS EL BUEN PASTOR', 2, 5, 1, 2, 'David', 'Xavier', 6, NULL, NULL, 'Edison', 'Alexys', 2, 23, 24432, 2015, '23', 324, 123, 'Quito', '2015-07-12', NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `padre`
--

INSERT INTO `padre` (`id`, `nombres`, `apellidos`, `fecha_nacimiento`) VALUES
(1, 'Eugeniuz ', 'Wetta ', '1965-06-16'),
(2, 'Franklin', 'Samaniego', '2014-06-03');

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
  `estado_civil` enum('SOLTERO(A)','CASADO(A)','DIVORCIADO(A)','VIUDO(A)') DEFAULT 'SOLTERO(A)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `clavePersonas` (`nombres`,`apellidos`,`fecha_nacimiento`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id`, `documento`, `nombres`, `apellidos`, `fecha_nacimiento`, `lugar_nacimiento`, `estado_civil`) VALUES
(1, '1003117940', 'Washington David', 'Paredes Esparza', '1988-09-21', 'Otavalo', 'SOLTERO(A)'),
(2, '1801850429', 'Cinthya Carolina', 'Aldas Morales', '1988-11-16', 'Ambato ', 'SOLTERO(A)'),
(3, NULL, 'Ashley Carolina', 'Paredes Aldas', '2010-10-27', 'Otavalo', 'SOLTERO(A)'),
(4, '', 'Elizabeth Judith', 'Paredes Esparza', '2009-06-12', 'Otavalo', 'SOLTERO(A)'),
(5, NULL, 'Edison Amable ', 'Paredes Moran', '1970-08-29', 'Quito', 'SOLTERO(A)'),
(6, NULL, 'Maria Judith', 'Esparza Vaca', '1965-02-14', 'Otavalo', 'SOLTERO(A)'),
(7, NULL, 'Jhonathan Javier', 'Paredes Esparza', '1991-05-21', 'Otavalo', 'SOLTERO(A)'),
(8, NULL, 'Xavier', 'Aldas', '1980-02-13', 'Ambato', 'SOLTERO(A)'),
(9, NULL, 'Lourdes', 'Morales', '1970-02-10', 'Ambato', 'SOLTERO(A)');

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
