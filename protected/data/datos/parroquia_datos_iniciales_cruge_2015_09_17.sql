-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 17-09-2015 a las 21:38:59
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

--
-- Volcado de datos para la tabla `cruge_authitem`
--

INSERT INTO `cruge_authitem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
('action_asistencia_admin', 0, '', NULL, 'N;'),
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
('action_ui_systemupdate', 0, '', NULL, 'N;'),
('action_ui_usermanagementadmin', 0, '', NULL, 'N;'),
('action_ui_usermanagementcreate', 0, '', NULL, 'N;'),
('admin', 0, '', NULL, 'N;');

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
(78, 1, 1442539410, 1442561010, 0, '::1', 1, 1442539410, 1442543917, '::1');

--
-- Volcado de datos para la tabla `cruge_system`
--

INSERT INTO `cruge_system` (`idsystem`, `name`, `largename`, `sessionmaxdurationmins`, `sessionmaxsameipconnections`, `sessionreusesessions`, `sessionmaxsessionsperday`, `sessionmaxsessionsperuser`, `systemnonewsessions`, `systemdown`, `registerusingcaptcha`, `registerusingterms`, `terms`, `registerusingactivation`, `defaultroleforregistration`, `registerusingtermslabel`, `registrationonlogin`) VALUES
(1, 'default', NULL, 360, 10, 1, -1, -1, 0, 0, 0, 0, '', 0, '', '', 1);

--
-- Volcado de datos para la tabla `cruge_user`
--

INSERT INTO `cruge_user` (`iduser`, `regdate`, `actdate`, `logondate`, `username`, `email`, `password`, `authkey`, `state`, `totalsessioncounter`, `currentsessioncounter`) VALUES
(1, NULL, NULL, 1442539411, 'admin', 'admin@tucorreo.com', 'admin', NULL, 1, 0, 0),
(2, NULL, NULL, NULL, 'invitado', 'invitado', 'nopassword', NULL, 1, 0, 0);
SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
