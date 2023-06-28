-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 06-06-2023 a las 18:39:16
-- Versión del servidor: 5.7.42
-- Versión de PHP: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `javierdiaz`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jdg_titulos`
--

CREATE TABLE `jdg_titulos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `visible` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `jdg_titulos`
--

INSERT INTO `jdg_titulos` (`id`, `titulo`, `descripcion`, `foto`, `categoria`, `visible`) VALUES
(1, 'PHP and MySQL', ' Learn PHP and MySQL Development From Scratch by Eduonix - 9-03-2017 ', 'phpandmysql.jpg', 'back', 1),
(3, 'Google Ads Display', 'Certificación google publicidad digital para red de Display - 23-08-2021/23-08-2022 ', 'adwords2.jpg', 'e-com', 1),
(4, 'Desarrollo Web', 'Curso de introducciÃ³n al desarrollo Web - Universidad de Alicante - 2016-2017 ', 'web.jpg', 'front', 1),
(5, 'Chino para negocios', 'Aprende Chino para los negocios - Academia Lun Yu - 1-12-2016 ', 'chino.jpg', 'e-com', 0),
(6, 'PHP en Azure', ' Desarrollando con PHP y Microsoft Azure - Microsoft VA - 22-03-2017 ', 'php-azure.jpg', 'back', 1),
(7, 'Marketing digital', ' Curso bÃ¡sico de Marketing Digital - IAB Spain - 29-12-2016 ', 'marketing.jpg', 'e-com', 1),
(8, 'Desarrollo Apps', 'Curso de Desarrollo de Apps MÃ³viles - Universidad Complutense de Madrid - 21-12-2016', 'apps1.jpg', 'back', 1),
(9, 'Cloud Computing', 'Curso de Cloud Computing - Escuela de OrganizaciÃ³n Industrial - 30-01-2017', 'cloud1.jpg', 'otros', 1),
(10, 'Reading Tools', 'Curso Reading Tools - Universidad AutÃ³noma de Mexico - 15-02-2017', 'reading.jpg', 'otros', 1),
(11, 'Programar en PHP', 'ProgramaciÃ³n bÃ¡sica con PHP - 10-03-2017', 'php1.jpg', 'back', 0),
(12, 'HTML5 Css Apps', 'Desarrollo en HTML5, CSS y Javascript de Apps Web, Android, IOS- universidad PolitÃ©cnica de Madrid - 9-03-2017', 'web3.jpg', 'front', 0),
(13, 'Analisis Web', 'Curso de analÃ­tica Web - Escuela de OrganizaciÃ³n Industrial - 1-01-2017', 'analitica1.jpg', 'e-com', 1),
(14, 'Machine learning', 'IntroducciÃ³n al Machine Learning - 24-02-2017', 'machine.jpg', 'otros', 1),
(15, 'Google Analytics', 'CertificaciÃ³n Google Partner para Analytics - 18-07-2018/ 18-07-2019', 'analitica2.jpg', 'e-com', 0),
(16, 'Bootstrap', 'Curso de Bootstrap 3 - DevCode FormaciÃ³n Online - 08-04-2017', 'bootstrap3.jpg', 'front', 1),
(18, 'Bases de datos', 'Administrador de bases de datos - FundaciÃ³n Carlos Slim - 21-07-2017', 'bases.jpg', 'back', 1),
(19, 'Adwords', 'CertificaciÃ³n google Partner para Adwords- Google partners certifications - 18-12-2017/18-12-2018', 'adw2_.jpg', 'e-com', 0),
(20, 'Front-End', 'Desarrolador Front-end - FundaciÃ³n Carlos Slim - 24-07-2017', 'front.jpg', 'front', 1),
(21, 'Back-end Developer', 'Desarrolador Back-end - FundaciÃ³n Carlos Slim - 24-07-2017', 'back.jpg', 'back', 1),
(22, 'Chino bÃ¡sico', 'Chino bÃ¡sico: Como dar una primera impresiÃ³n positiva - Arizona State University - 9-05-2017', 'chino-coursera.jpg', 'otros', 0),
(23, 'Java', 'Curso de Java Gratis - DevCode FormaciÃ³n Online - 18-07-2017', 'javag.jpg', 'back', 1),
(24, 'Servidores', 'Administrador de Servidores - FundaciÃ³n Carlos Slim - 20-07-2017', 'servidores.jpg', 'otros', 1),
(25, 'Programar (POO)', 'Programador (Orientado a objetos) - FundaciÃ³n Carlos Slim - 24-07-2017', 'programador.jpg', 'back', 1),
(26, 'Css Avanzado', 'Css Avanzado - Acamica Academia online - 31-01-2017', 'css-avanzado.jpg', 'front', 1),
(27, 'HTML Developer', 'The Ultimate HTML Developer- Arkmont Online Education - 02-08-2017', 'arkmont.jpg', 'front', 1),
(28, 'Practical PHP', 'PHP: Master the Basics and Code Dynamic Websites- Code College - 22-03-2017', 'php2.jpg', 'back', 1),
(29, 'WordPress', 'Curso WordPress - 22-11-2017', 'wp3.jpg', 'front', 0),
(30, 'Apps Android', 'Programando con Java para aplicaciones Android - Universidad Nacional Autonoma de MÃ©xico - 27-08-2017', 'javacoursera.jpg', 'back', 1),
(31, 'Front End Development', 'Front End Development Program - Free Code Camp - 29-08-2017', 'frontfcc.jpg', 'front', 1),
(32, 'Curador datos', 'Curador de datos - FundaciÃ³n Carlos Slim - 10-07-2017', 'curador.jpg', 'back', 1),
(33, 'WordPress completo', 'Wordpress al completo - DKA FormaciÃ³n- 23-11-2017', 'wp1.jpg', 'front', 1),
(34, 'Soporte tÃ©cnico', 'Curso bÃ¡sico de soporte tÃ©cnico - Microsoft Virtual Academy- 09-01-2018', 'soporte.jpg', 'otros', 1),
(35, 'Cisco CCNA', 'Cisco CCNA Course - Cybrary - 18-08-2017', 'ccna.jpg', 'otros', 1),
(36, 'Ciber seguridad', 'Entender los ataques para desplegar contramedidas (2Âª EdiciÃ³n) - Universidad Rey Juan Carlos - 24-12-2017', 'seguridad.jpg', 'otros', 1),
(37, 'Bases de datos', 'Aspectos fundamentales de bases de datos - Microsoft Virtual Academy - 09-01-2018', 'basesmva.jpg', 'back', 1),
(38, 'MongoDB', 'MongoDB Basics - MongoDB Inc. - 30-08-2017', 'mongodb.jpg', 'back', 1),
(39, 'Temas WordPress', 'IntroducciÃ³n al desarrollo de temas WordPress - 1-12-2017', 'wp2.jpg', 'front', 0),
(40, 'Oracle SQL', 'SQL Fundamentals(2018) - Oracle - 09-01-2018', 'oracle.jpg', 'back', 1),
(41, 'Git y Github', 'GestiÃ³n de proyectos Software con Git y GitHub  â€“ Universidad PolitÃ©cnica de Madrid - 24 horas - 21-02-2018.', 'github.jpg', 'otros', 0),
(42, 'PHP 7', 'ActualizaciÃ³n PHP 7', 'php7.jpg', 'back', 1),
(43, 'HTML CSS JS jQuery', 'Quick Frontend Website Creation with HTML CSS JavaScript jQuery - 20-06-2017', 'frontend.jpg', 'front', 1),
(44, 'Linux Unix', 'IntroducciÃ³n a Linux como entorno de desarrollo de sistemas software - Universidad PolitÃ©cnica de Madrid - 45 h. 23-05-2018.', 'unix.jpg', 'otros', 1),
(45, 'AtenciÃ³n TelefÃ³nica', 'ComunicaciÃ³n y AtenciÃ³n TelefÃ³nica - DKA FormaciÃ³n - 10-06-2018', 'atentel.jpg', 'otros', 1),
(46, 'Marketing negocios', 'Fundamentos de Marketing Digital - 24-01-2017', 'marketing1.jpg', 'e-com', 0),
(47, 'Ecommerce', 'Comercio ElectrÃ³nico para Emprendedores - Instituto de EconomÃ­a Internacional - 10-09-2016', 'ecomm1.jpg', 'e-com', 0),
(48, 'LegislaciÃ³n', 'LegislaciÃ³n para Emprendedores - Instituto de EconomÃ­a Internacional - 10-10-2016', 'certificado_legislacion-1.jpg', 'e-com', 0),
(49, 'Git y GitHub', 'Fundamentos de Git y GitHub - DevCode FormaciÃ³n Online - 20-06-2017', 'git.jpg ', 'otros', 0),
(50, 'Responsive Design', 'Responsive Design - Acamica Academia online - 06-02-2017', 'responsive.jpg', 'front', 1),
(51, 'HTML5 CSS', 'HTML5+CSS. EdiciÃ³n III - StemByMe FundaciÃ³n Telefonica - 16-08-2017', 'html5css.jpg', 'front', 0),
(52, 'Digital Marketing', 'Digital Skills: Digital Marketing - ACCENTURE - 01-06-2018', 'digital-marketing.jpg', 'e-com', 1),
(53, 'Clase invertida', 'Invirtiendo la clase. Un camino hacia la innovaciÃ³n en educaciÃ³n (2Âº ediciÃ³n) - Universidad de Flores - 18-07-2018', 'flip.jpg', 'edu', 1),
(54, 'GestiÃ³n en la nube', 'Herramientas de gestiÃ³n y comunicaciÃ³n en la nube - TecnolÃ³gico Nacional de MÃ©xico - 31-05-2018', 'herramientas-nube.jpg', 'edu', 1),
(55, 'JavaScript Algorithms', 'JavaScript Algorithms and Data Structures Projects - FreeCodeCamp - 02-06-2018', 'js-fcc.jpg', 'front', 1),
(56, 'Social Media', 'Digital Skills: Social Media - ACCENTURE - 01-06-2018', 'social-media.jpg', 'e-com', 1),
(57, 'Formador Online', 'SSCE002PO AcreditaciÃ³n docente para teleformaciÃ³n: Formador On Line - Femxa FormaciÃ³n SL - 04-07-2018', 'teleformador.jpg', 'edu', 1),
(58, 'User Experience', 'Digital Skills: User Experience - ACCENTURE - 01-06-2018', 'user-experience.jpg', 'front', 1),
(59, 'Web Analytics', 'Digital Skills: Web Analytics - ACCENTURE - 01-06-2018', 'web-analytics.jpg', 'e-com', 0),
(60, 'Animaciones CSS', 'Animaciones en CSS - Acamica - 01-02-2017', 'css-animaciones.jpg', 'front', 1),
(61, 'CSS intermedio', 'CSS intermedio - Acamica - 30-01-2017', 'css-intermedio.jpg', 'front', 0),
(62, 'Ecommerce Industrial', 'Curso de E-commerce - Escuela de OrganizaciÃ³n Industrial - 20-01-2017', 'ecom-eoi.jpg', 'e-com', 0),
(63, 'Programacion', 'Fundamentos de la programaciÃ³n - Acamica - 03-02-2017', 'fundamentos-programacion.jpg', 'back', 0),
(64, 'Lean Startup', 'Lean Startup: desarrolla tu modelo de negocio - Instituto de Economia Internacional - 25-01-2017', 'lean-startup.jpg', 'otros', 0),
(65, 'Productividad personal', 'Curso de productividad personal en la era digital - FundaciÃ³n Santa MarÃ­a la Real - 12-01-2017', 'productividad.jpg', 'otros', 1),
(66, 'TIC Docencia', 'TIC en la docencia - Oficina de EducaciÃ³n Virtual (CES Virtual) - 15-8-2018', 'tic-docencia.jpg', 'edu', 1),
(67, 'EvaluaciÃ³n educativa', 'EvaluaciÃ³n educativa en un clic - Instituto Nacional para la EvaluaciÃ³n de la EducaciÃ³n- 10/08/2018', 'evaleduc.jpg', 'edu', 1),
(68, 'Angular 6', 'Desarrollo Front End con Angular 6 (2018-C39) - Centro Nacional de FormaciÃ³n en Nuevas Tecnologias - 20-06-2018 ', 'angular6.jpg', 'front', 1),
(69, 'Tendencias educativas', 'Escuela Digital: Tendencias educativas con TIC - Universidad de La Laguna - 10-11-2018', 'tendencias-educativas.jpg', 'edu', 1),
(70, 'Uso EDU mÃ³viles', 'Uso educativo de dispositivos mÃ³viles - Universidad TecnolÃ³gica de Puebla - 12-12-2018', 'moviles.jpg', 'edu', 1),
(71, 'JavaScript', 'ProgramaciÃ³n con JavaScript (3.Âª ediciÃ³n) - MiriadaX - 30/12/2018', 'JavaScript.jpg', 'front', 1),
(72, 'React Angular', 'Client-based Web Applications development: ReactJS & Angular - Universidad PolitÃ©cnica de Madrid (UPM) (MiriadaX) - 1/01/2019', 'React+Angular.jpg', 'front', 1),
(73, 'Desarrollo Node', 'Desarrollo de servicios en la nube con HTML5, CSS3, JavaScript 6-7-8-9 y node.js (2.Âª ediciÃ³n) - Universidad PolitÃ©cnica de Madrid (UPM) (MiriadaX) -  7/07/2019 ', 'node-m.jpg', 'front', 1),
(74, 'MÃ³dulos Prestashop', 'Desarrollo de MÃ³dulos para Prestashop - JosÃ© Antonio Iglesias - 28/10/2019', 'mprestashop.jpg', 'e-com', 1),
(75, 'PHP Composer', 'Composer para iniciantes - Alexandre Cardoso - 15-12-2019', 'composer.jpg', 'back', 1),
(76, 'Docker', 'Iniciando con contenedores en Docker - Jair GÃ³mez - 01/03/2020', 'docker.jpg', 'back', 0),
(77, 'Photoshop FotÃ³grafos', 'Adobe Photoshop esencial para fotÃ³grafos - Crehana - 03/2019', 'photoshop.jpg', 'otros', 1),
(78, 'DiseÃ±o UX', 'DiseÃ±o de experiencia de usuario | Universidad TecnolÃ³gica Nacional - Facultad Regional Buenos Aires | 4-03-2020', 'ux.jpg', 'front', 1),
(79, 'Ventas Amazon', 'Aprende los primeros pasos para Vender en Amazon | Ecommaster Moocs de Marketing Digital | 05/04/2020', 'amazon.jpg', 'e-com', 1),
(80, 'Symfony 4', 'Curso de Symfony 4 - IMAGINA FORMACIÃ“N - 08/06/2020', 'symfony4.jpg', 'back', 1),
(81, 'PHP Web', 'ProgramaciÃ³n Efectiva en PHP para aplicaciones Web - Universidad Nacional Abierta y a Distancia (UNAD) - 24-10-2020', 'php-efectiva.jpg', 'back', 1),
(82, 'Git y Github', 'GestiÃ³n de proyectos Software con Git y GitHub (3.Âª ediciÃ³n) â€“ Universidad PolitÃ©cnica de Madrid - 50 horas - 12-12-2020. ', 'github2020.jpg', 'otros', 1),
(83, 'HTML5 Css Js', 'Desarrollo Frontend con HTML, CSS y Javascript (10.Âª ediciÃ³n)- Universidad PolitÃ©cnica de Madrid - 64 horas -  13-11-2020', 'web32020.jpg', 'front', 1),
(84, 'Node Express BD', 'Desarrollo Backend con Node, Express y BBDDs (3.Âª ediciÃ³n) - 3/04/2021', 'node21.jpg', 'back', 1),
(85, 'Responsive Web Design', 'Responsive Web Design - freeCodeCamp.org - 18/08/2021 ', 'web-fcc.jpg', 'front', 1),
(86, 'Google Analytics ', 'CertificaciÃ³n Google Partner para Analytics - 23-08-2021/ 23-08-2022', 'analitica3.jpg', 'e-com', 1),
(87, 'Google Ads Search', 'CertificaciÃ³n Google sobre las CampaÃ±as de BÃºsqueda de Google Ads - 24-08-2021/24-08-2022', 'ads-search.jpg', 'e-com', 1),
(88, 'Google Ads Shopping', 'CertificaciÃ³n Google para creaciÃ³n y personalizaciÃ³n de campaÃ±as de Shopping - 03-09-2021/03-09-2022', 'shopping21.jpg', 'e-com', 1),
(89, 'Google Business', 'Google My Business Basics Assessment - 06-09-2021', 'mybusiness.jpg', 'e-com', 1),
(90, 'Aplicaciones Google Ads', 'CertificaciÃ³n en Aplicaciones de Google Ads - CreaciÃ³n y optimizaciÃ³n de campaÃ±as de aplicaciones - 14-09-2021/14-09-2022', 'adsapps.jpg', 'e-com', 1),
(91, 'Seguridad Teletrabajo', 'Protege tu Negocio: Ciberseguridad en el Teletrabajo - Incibe - Conocimientos generales sobre cÃ³mo implantar la modalidad de teletrabajo de forma segura - 17/09/2021', 'teletrabajo.jpg', 'otros', 1),
(92, 'EducaciÃ³n computaciÃ³n', 'Herramientas educativas en ciencias de la computaciÃ³n y programaciÃ³n - FundaciÃ³n televisa - 17-09-2021', 'televisa.jpg', 'edu', 1),
(93, 'Temas WordPress ', 'Curso de CreaciÃ³n de Temas para WordPress - OpenWebinars - 19-11-2021', 'temaswp-ow.jpg', 'front', 1),
(94, 'Hooks Wordpress', 'Manejando Hooks en WordPress - OpenWebinars - 19-11-2021 ', 'hookswp-ow.jpg', 'front', 1),
(95, 'API WordPress', 'REST API en WordPress - OpenWebinars - 19-11-2021', 'apiwp-ow.jpg', 'back', 1),
(96, 'TDD PHPUnit', 'Test-driven development en PHP con PHPUnit - OpenWebinars - 19-11-2021', 'phpunit-ow.jpg', 'back', 1),
(97, 'SOAP PHP', 'Consumo de WebServices SOAP con PHP - OpenWebinars - 19-11-2021', 'soapphp-ow.jpg', 'back', 1),
(98, 'Twig', 'CreaciÃ³n de extensiones en Twig - OpenWebinars - 19-11-2021', 'twig-ow.jpg', 'front', 1),
(99, 'Plugins WordPress', 'Curso de creaciÃ³n de plugins para WordPress - OpenWebinars - 20-11-2021', 'ow-pluiginswp.jpg', 'back', 1),
(100, 'Docker WordPress', 'Entorno de desarrollo para WordPress con Docker - OpenWebinars - 20-11-2021', 'ow-dockerwp.jpg', 'back', 1),
(101, 'Management 3.0', 'GestiÃ³n de personas y equipos en el Management 3.0 - OpenWebinars - 20-11-2021 ', 'ow-manage3.jpg', 'otros', 1),
(102, 'Docs Markdown', 'GestiÃ³n de documentaciÃ³n tÃ©cnica con GitHub y Markdown - OpenWebinars - 20-11-2021', 'ow-doctecnica.jpg', 'otros', 1),
(103, 'Desarrollo web legal', 'Aspectos legales del desarrollo web - OpenWebinars - 20-11-2021', 'ow-weblegal.jpg', 'otros', 1),
(104, 'Docker', 'IntroducciÃ³n a Docker - OpenWebinars - 20-11-2021', 'ow-docker.jpg', 'back', 1),
(105, 'Equipos trabajo', 'ComunicaciÃ³n en el equipo de trabajo - OpenWebinars - 20-11-2021', 'certificado-comunicacion.jpg', 'otros', 1),
(106, 'GestiÃ³n teletrabajo', 'Teletrabajo: Claves para una gestiÃ³n eficaz - OpenWebinars - 20-11-2021', 'ow-teletrabajo.jpg', 'otros', 1),
(107, 'React', 'React avanzado - OpenWebinars - 20-11-2021', 'ou-react-1.jpg', 'front', 1),
(108, 'Symfony 5', 'Symfony 5 avanzado - OpenWebinars - 20-11-2021', 'ow-symfony-1.jpg', 'back', 1),
(109, 'Symfony Doctrine', 'Consultas Doctrine en Symfony - OpenWebinars - 21-11-2021', 'ow-doctrine.jpg', 'back', 1),
(110, 'TDD fundamentos', 'Fundamentos de Test-driven development - OpenWebinars - 21-11-2021', 'ow-td.jpg', 'otros', 1),
(111, 'Vue eventos', 'Uso de eventos en Vue - OpenWebinars - 21-11-2021', 'ow-eventosvue.jpg', 'front', 1),
(112, 'Kanban', 'DiseÃ±a y utiliza un tablero Kanban - OpenWebinars - 21-11-2021', 'ow-kanban.jpg', 'otros', 1),
(113, 'SCRUM', 'SCRUM: Gestionando equipos de trabajo - OpenWebinars - 21-11-2021', 'ow-scrum.jpg', 'otros', 1),
(114, 'Doc. tÃ©cnica', 'Mejores prÃ¡cticas para la creaciÃ³n de documentaciÃ³n tÃ©cnica - OpenWebinars - 21-11-2021', 'ow-doctecnica1.jpg', 'otros', 1),
(115, 'React Hooks', 'Taller de React Hooks  - OpenWebinars - 21-11-2021', 'ow-reacthooks.jpg', 'front', 1),
(116, 'Liderazgo', 'Liderazgo de equipos - OpenWebinars - 21-11-2021', 'ow-liderazgo-1.jpg', 'otros', 1),
(117, 'JavaScript Prototypes', 'Taller de JavaScript Prototypes - OpenWebinars - 21-11-2021', 'ow-jsprototypes.jpg', 'front', 1),
(118, 'Proyectos IT', 'GestiÃ³n de Proyectos IT - OpenWebinars - 21-11-2021 ', 'ow-gestionit-1.jpg', 'otros', 1),
(119, 'DiseÃ±o UX', 'IntroducciÃ³n al diseÃ±o centrado en el usuario (UX) - OpenWebinars - 21-11-2021', 'ow-ux-1.jpg', 'front', 1),
(120, 'DiseÃ±o UI', 'IntroducciÃ³n al diseÃ±o de interfaz de Usuarios (UI) - OpenWebinars - 21-11-2021', 'ow-ui-1.jpg', 'front', 1),
(121, 'Composer', 'Composer: GestiÃ³n de dependencias en PHP - OpenWebinars - 21-11-2021', 'ow-composer.jpg', 'back', 1),
(122, 'Symfony API', 'Curso de creaciÃ³n de API en Symfony 3 - OpenWebinars - 21-11-2021', 'ow-symfonyapi-1.jpg', 'back', 1),
(123, 'Analytics Dashboard', 'Dashboards con Google Analytics - OpenWebinars - 21-11-2021', 'ow-dashboards.jpg', 'e-com', 1),
(124, 'Analytics Empresas', 'Curso de Google Analytics para Empresas - OpenWebinars - 21-11-2021', 'ow-analytics-1.jpg', 'e-com', 1),
(125, 'PrestaShop Back-End', 'FormaciÃ³n Desarrollador Back-End- PrestaShop Academy (FormaciÃ³n oficial PrestaShop) â€“ 5/1/2023', 'PrestaShopBack.jpg', 'back', 1),
(126, 'Equipos Remoto', 'GestiÃ³n de Equipos de Trabajo en Remoto- Centro Integrado de FPD de La Rioja - 31/1/22', 'equipos-remoto.jpg', 'otros', 1),
(127, 'Control Proyectos', 'PlanificaciÃ³n, Seguimiento y Control de Proyectos- Centro Integrado de FPD de La Rioja - 03/05/22', 'control-proyectos.jpg', 'otros', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jdg_usuarios`
--

CREATE TABLE `jdg_usuarios` (
  `nombre` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `jdg_usuarios`
--

INSERT INTO `jdg_usuarios` (`nombre`, `pass`) VALUES
('heipry', '$2y$10$CxPGKloa2Ic9IOXaC6PUt.35AAYA/j5kTMWDassXpTvgDLXM/XQV2');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `jdg_titulos`
--
ALTER TABLE `jdg_titulos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `jdg_usuarios`
--
ALTER TABLE `jdg_usuarios`
  ADD PRIMARY KEY (`nombre`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `jdg_titulos`
--
ALTER TABLE `jdg_titulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
