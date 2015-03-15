-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 15-03-2015 a las 12:35:32
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
-- Volcado de datos para la tabla `bautizo`
--

INSERT INTO `bautizo` (`id`, `persona_id`, `fecha_bautizo`, `iglesia`, `padre_parroquia_id`, `papa_id`, `mama_id`, `feligreses_de`, `padrino_id`, `madrina_id`, `tomo_id`, `pagina`, `numero`, `nota`, `rc_ano`, `rc_tomo`, `rc_folio`, `rc_acta`, `rc_fecha`) VALUES
(1, 3, '2014-11-03', 'JESUS EL BUEN PASTOR', 1, 1, 2, 'Ibarra', NULL, NULL, 1, 1, 1, 'Confirmado en Otavalo', 2014, '1', 1, 1234, '2014-11-22'),
(2, 4, '1996-06-12', 'JESUS EL BUEN PASTOR', 1, 5, 6, 'otavalo', 1, 2, 1, 1252, 232, NULL, 2009, '445', 54465, 456, '2014-11-03'),
(3, 7, '2014-11-25', 'JESUS EL BUEN PASTOR', 1, 5, 6, 'otavalo', 5, 4, 1, 34531, 321323, NULL, 2009, '31313', 3123, 1313, '2014-11-03');

--
-- Volcado de datos para la tabla `confirmacion`
--

INSERT INTO `confirmacion` (`id`, `persona_id`, `fecha_confirmacion`, `iglesia`, `padre_parroquia_id`, `papa_id`, `mama_id`, `feligreses_de`, `padrino_id`, `madrina_id`, `tomo_id`, `pagina`, `numero`, `nota`, `rc_ano`, `rc_tomo`, `rc_folio`, `rc_acta`, `rc_fecha`) VALUES
(4, 3, '2015-03-15', 'Buen Pastor', 1, 1, 3, 'Ibarra', 7, 6, 8, 1, 1, NULL, 2015, '1', 1, 1, '2015-03-14');

--
-- Volcado de datos para la tabla `cruge_authitem`
--

INSERT INTO `cruge_authitem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
('action_bautizo_admin', 0, '', NULL, 'N;'),
('action_bautizo_create', 0, '', NULL, 'N;'),
('action_bautizo_update', 0, '', NULL, 'N;'),
('action_bautizo_view', 0, '', NULL, 'N;'),
('action_confirmacion_admin', 0, '', NULL, 'N;'),
('action_confirmacion_create', 0, '', NULL, 'N;'),
('action_confirmacion_update', 0, '', NULL, 'N;'),
('action_confirmacion_view', 0, '', NULL, 'N;'),
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
('action_libro_delete', 0, '', NULL, 'N;'),
('action_matrimonio_admin', 0, '', NULL, 'N;'),
('action_matrimonio_create', 0, '', NULL, 'N;'),
('action_matrimonio_update', 0, '', NULL, 'N;'),
('action_matrimonio_view', 0, '', NULL, 'N;'),
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
(39, 1, 1426346401, 1426526401, 1, '127.0.0.1', 6, 1426435431, NULL, NULL);

--
-- Volcado de datos para la tabla `cruge_system`
--

INSERT INTO `cruge_system` (`idsystem`, `name`, `largename`, `sessionmaxdurationmins`, `sessionmaxsameipconnections`, `sessionreusesessions`, `sessionmaxsessionsperday`, `sessionmaxsessionsperuser`, `systemnonewsessions`, `systemdown`, `registerusingcaptcha`, `registerusingterms`, `terms`, `registerusingactivation`, `defaultroleforregistration`, `registerusingtermslabel`, `registrationonlogin`) VALUES
(1, 'default', NULL, 3000, 10, 1, -1, -1, 0, 0, 0, 0, '', 0, '', '', 1);

--
-- Volcado de datos para la tabla `cruge_user`
--

INSERT INTO `cruge_user` (`iduser`, `regdate`, `actdate`, `logondate`, `username`, `email`, `password`, `authkey`, `state`, `totalsessioncounter`, `currentsessioncounter`) VALUES
(1, NULL, NULL, 1426435431, 'admin', 'admin@tucorreo.com', 'admin', NULL, 1, 0, 0),
(2, NULL, NULL, NULL, 'invitado', 'invitado', 'nopassword', NULL, 1, 0, 0);

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`id`, `ano`, `tomo`, `tipo`) VALUES
(1, 2014, '1', 'BAUTIZOS'),
(2, 2014, '1', 'MATRIMONIOS'),
(3, 2015, '1', 'BAUTIZOS'),
(4, 2015, '2', 'BAUTIZOS'),
(7, 2016, '1', 'BAUTIZOS'),
(8, 2015, '1', 'CONFIRMACIONES');

--
-- Volcado de datos para la tabla `matrimonio`
--

INSERT INTO `matrimonio` (`id`, `fecha_matrimonio`, `iglesia`, `padre_parroquia_id`, `novio_id`, `papa_novio_id`, `mama_novio_id`, `testigo_novio_1`, `testigo_novio_2`, `novia_id`, `papa_novia_id`, `mama_novia_id`, `testigo_novia_1`, `testigo_novia_2`, `tomo_id`, `pagina`, `numero`, `rc_ano`, `rc_tomo`, `rc_folio`, `rc_acta`, `rc_lugar`, `rc_fecha`) VALUES
(1, '2015-03-13', 'Jesus el Buen Pastor', 1, 1, 5, 6, 'Chelo', 'Dn Roger', 2, NULL, 3, 'Xavier', 'Matin', 2, 1, 1, 2015, '1', 1, 1, 'Quito', '2015-03-13');

--
-- Volcado de datos para la tabla `padre`
--

INSERT INTO `padre` (`id`, `nombres`, `apellidos`, `fecha_nacimiento`) VALUES
(1, 'Eugeniuz ', 'Wetta ', '1965-06-16');

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id`, `documento`, `nombres`, `apellidos`, `fecha_nacimiento`, `lugar_nacimiento`, `estado_civil`) VALUES
(1, '1003117940', 'Washington David', 'Paredes Esparza', '1988-09-21', 'Otavalo', 'SOLTERO(A)'),
(2, '1801850429', 'Cinthya Carolina', 'Aldas Morales', '1988-11-16', 'Ambato ', 'SOLTERO(A)'),
(3, NULL, 'Ashley Carolina', 'Paredes Aldas ', '2010-10-27', 'Otavalo ', 'SOLTERO(A)'),
(4, NULL, 'Elizabeth Judith', 'Paredes Esparza', '1995-06-12', 'Otavalo', 'SOLTERO(A)'),
(5, NULL, 'Edison Amable ', 'Paredes Moran', '1970-08-29', 'Quito', 'SOLTERO(A)'),
(6, NULL, 'Maria Judith', 'Esparza Vaca', '1965-02-14', 'Otavalo', 'SOLTERO(A)'),
(7, NULL, 'Jhonathan Javier', 'Paredes Esparza', '1991-05-21', 'Otavalo', 'SOLTERO(A)');
SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
