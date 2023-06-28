-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 15-05-2023 a las 10:30:49
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `jdg_titulos`
--

INSERT INTO `jdg_titulos` (`id`, `titulo`, `descripcion`, `foto`, `categoria`, `visible`) VALUES
(1, 'PHP and MySQL', ' Learn PHP and MySQL Development From Scratch by Eduonix - 9-03-2017 ', 'phpandmysql.jpg', 'back', 1),
(3, 'Google Ads Display', 'Certificación google publicidad digital para red de Display - 23-08-2021/23-08-2022 ', 'adwords2.jpg', 'e-com', 1),
(4, 'Desarrollo Web', 'Curso de introducción al desarrollo Web - Universidad de Alicante - 2016-2017 ', 'web.jpg', 'front', 1),
(5, 'Chino para negocios', 'Aprende Chino para los negocios - Academia Lun Yu - 1-12-2016 ', 'chino.jpg', 'e-com', 0),
(6, 'PHP en Azure', ' Desarrollando con PHP y Microsoft Azure - Microsoft VA - 22-03-2017 ', 'php-azure.jpg', 'back', 1),
(7, 'Marketing digital', ' Curso básico de Marketing Digital - IAB Spain - 29-12-2016 ', 'marketing.jpg', 'e-com', 1),
(8, 'Desarrollo Apps', 'Curso de Desarrollo de Apps Móviles - Universidad Complutense de Madrid - 21-12-2016', 'apps1.jpg', 'back', 1),
(9, 'Cloud Computing', 'Curso de Cloud Computing - Escuela de Organización Industrial - 30-01-2017', 'cloud1.jpg', 'otros', 1),
(10, 'Reading Tools', 'Curso Reading Tools - Universidad Autónoma de Mexico - 15-02-2017', 'reading.jpg', 'otros', 1),
(11, 'Programar en PHP', 'Programación básica con PHP - 10-03-2017', 'php1.jpg', 'back', 0),
(12, 'HTML5 Css Apps', 'Desarrollo en HTML5, CSS y Javascript de Apps Web, Android, IOS- universidad Politécnica de Madrid - 9-03-2017', 'web3.jpg', 'front', 0),
(13, 'Analisis Web', 'Curso de analí­tica Web - Escuela de Organización Industrial - 1-01-2017', 'analitica1.jpg', 'e-com', 1),
(14, 'Machine learning', 'Introducción al Machine Learning - 24-02-2017', 'machine.jpg', 'otros', 1),
(15, 'Google Analytics', 'Certificación Google Partner para Analytics - 18-07-2018/ 18-07-2019', 'analitica2.jpg', 'e-com', 0),
(16, 'Bootstrap', 'Curso de Bootstrap 3 - DevCode Formación Online - 08-04-2017', 'bootstrap3.jpg', 'front', 1),
(18, 'Bases de datos', 'Administrador de bases de datos - Fundación Carlos Slim - 21-07-2017', 'bases.jpg', 'back', 1),
(19, 'Adwords', 'Certificación google Partner para Adwords- Google partners certifications - 18-12-2017/18-12-2018', 'adw2_.jpg', 'e-com', 0),
(20, 'Front-End', 'Desarrolador Front-end - Fundación Carlos Slim - 24-07-2017', 'front.jpg', 'front', 1),
(21, 'Back-end Developer', 'Desarrolador Back-end - Fundación Carlos Slim - 24-07-2017', 'back.jpg', 'back', 1),
(22, 'Chino básico', 'Chino básico: Como dar una primera impresión positiva - Arizona State University - 9-05-2017', 'chino-coursera.jpg', 'otros', 0),
(23, 'Java', 'Curso de Java Gratis - DevCode Formación Online - 18-07-2017', 'javag.jpg', 'back', 1),
(24, 'Servidores', 'Administrador de Servidores - Fundación Carlos Slim - 20-07-2017', 'servidores.jpg', 'otros', 1),
(25, 'Programar (POO)', 'Programador (Orientado a objetos) - Fundación Carlos Slim - 24-07-2017', 'programador.jpg', 'back', 1),
(26, 'Css Avanzado', 'Css Avanzado - Acamica Academia online - 31-01-2017', 'css-avanzado.jpg', 'front', 1),
(27, 'HTML Developer', 'The Ultimate HTML Developer- Arkmont Online Education - 02-08-2017', 'arkmont.jpg', 'front', 1),
(28, 'Practical PHP', 'PHP: Master the Basics and Code Dynamic Websites- Code College - 22-03-2017', 'php2.jpg', 'back', 1),
(29, 'WordPress', 'Curso WordPress - 22-11-2017', 'wp3.jpg', 'front', 0),
(30, 'Apps Android', 'Programando con Java para aplicaciones Android - Universidad Nacional Autonoma de México - 27-08-2017', 'javacoursera.jpg', 'back', 1),
(31, 'Front End Development', 'Front End Development Program - Free Code Camp - 29-08-2017', 'frontfcc.jpg', 'front', 1),
(32, 'Curador datos', 'Curador de datos - Fundación Carlos Slim - 10-07-2017', 'curador.jpg', 'back', 1),
(33, 'WordPress completo', 'Wordpress al completo - DKA Formación- 23-11-2017', 'wp1.jpg', 'front', 1),
(34, 'Soporte técnico', 'Curso básico de soporte técnico - Microsoft Virtual Academy- 09-01-2018', 'soporte.jpg', 'otros', 1),
(35, 'Cisco CCNA', 'Cisco CCNA Course - Cybrary - 18-08-2017', 'ccna.jpg', 'otros', 1),
(36, 'Ciber seguridad', 'Entender los ataques para desplegar contramedidas (2Âª Edición) - Universidad Rey Juan Carlos - 24-12-2017', 'seguridad.jpg', 'otros', 1),
(37, 'Bases de datos', 'Aspectos fundamentales de bases de datos - Microsoft Virtual Academy - 09-01-2018', 'basesmva.jpg', 'back', 1),
(38, 'MongoDB', 'MongoDB Basics - MongoDB Inc. - 30-08-2017', 'mongodb.jpg', 'back', 1),
(39, 'Temas WordPress', 'Introducción al desarrollo de temas WordPress - 1-12-2017', 'wp2.jpg', 'front', 0),
(40, 'Oracle SQL', 'SQL Fundamentals(2018) - Oracle - 09-01-2018', 'oracle.jpg', 'back', 1),
(41, 'Git y Github', 'Gestión de proyectos Software con Git y GitHub  â€“ Universidad Politécnica de Madrid - 24 horas - 21-02-2018.', 'github.jpg', 'otros', 0),
(42, 'PHP 7', 'Actualización PHP 7', 'php7.jpg', 'back', 1),
(43, 'HTML CSS JS jQuery', 'Quick Frontend Website Creation with HTML CSS JavaScript jQuery - 20-06-2017', 'frontend.jpg', 'front', 1),
(44, 'Linux Unix', 'Introducción a Linux como entorno de desarrollo de sistemas software - Universidad Politécnica de Madrid - 45 h. 23-05-2018.', 'unix.jpg', 'otros', 1),
(45, 'Atención Telefónica', 'Comunicación y Atención Telefónica - DKA Formación - 10-06-2018', 'atentel.jpg', 'otros', 1),
(46, 'Marketing negocios', 'Fundamentos de Marketing Digital - 24-01-2017', 'marketing1.jpg', 'e-com', 0),
(47, 'Ecommerce', 'Comercio Electrónico para Emprendedores - Instituto de Economí­a Internacional - 10-09-2016', 'ecomm1.jpg', 'e-com', 0),
(48, 'Legislación', 'Legislación para Emprendedores - Instituto de Economí­a Internacional - 10-10-2016', 'certificado_legislacion-1.jpg', 'e-com', 0),
(49, 'Git y GitHub', 'Fundamentos de Git y GitHub - DevCode Formación Online - 20-06-2017', 'git.jpg ', 'otros', 0),
(50, 'Responsive Design', 'Responsive Design - Acamica Academia online - 06-02-2017', 'responsive.jpg', 'front', 1),
(51, 'HTML5 CSS', 'HTML5+CSS. Edición III - StemByMe Fundación Telefonica - 16-08-2017', 'html5css.jpg', 'front', 0),
(52, 'Digital Marketing', 'Digital Skills: Digital Marketing - ACCENTURE - 01-06-2018', 'digital-marketing.jpg', 'e-com', 1),
(53, 'Clase invertida', 'Invirtiendo la clase. Un camino hacia la innovación en educación (2Âº edición) - Universidad de Flores - 18-07-2018', 'flip.jpg', 'edu', 1),
(54, 'Gestión en la nube', 'Herramientas de gestión y comunicación en la nube - Tecnológico Nacional de México - 31-05-2018', 'herramientas-nube.jpg', 'edu', 1),
(55, 'JavaScript Algorithms', 'JavaScript Algorithms and Data Structures Projects - FreeCodeCamp - 02-06-2018', 'js-fcc.jpg', 'front', 1),
(56, 'Social Media', 'Digital Skills: Social Media - ACCENTURE - 01-06-2018', 'social-media.jpg', 'e-com', 1),
(57, 'Formador Online', 'SSCE002PO Acreditación docente para teleformación: Formador On Line - Femxa Formación SL - 04-07-2018', 'teleformador.jpg', 'edu', 1),
(58, 'User Experience', 'Digital Skills: User Experience - ACCENTURE - 01-06-2018', 'user-experience.jpg', 'front', 1),
(59, 'Web Analytics', 'Digital Skills: Web Analytics - ACCENTURE - 01-06-2018', 'web-analytics.jpg', 'e-com', 0),
(60, 'Animaciones CSS', 'Animaciones en CSS - Acamica - 01-02-2017', 'css-animaciones.jpg', 'front', 1),
(61, 'CSS intermedio', 'CSS intermedio - Acamica - 30-01-2017', 'css-intermedio.jpg', 'front', 0),
(62, 'Ecommerce Industrial', 'Curso de E-commerce - Escuela de Organización Industrial - 20-01-2017', 'ecom-eoi.jpg', 'e-com', 0),
(63, 'Programacion', 'Fundamentos de la programación - Acamica - 03-02-2017', 'fundamentos-programacion.jpg', 'back', 0),
(64, 'Lean Startup', 'Lean Startup: desarrolla tu modelo de negocio - Instituto de Economia Internacional - 25-01-2017', 'lean-startup.jpg', 'otros', 0),
(65, 'Productividad personal', 'Curso de productividad personal en la era digital - Fundación Santa Marí­a la Real - 12-01-2017', 'productividad.jpg', 'otros', 1),
(66, 'TIC Docencia', 'TIC en la docencia - Oficina de Educación Virtual (CES Virtual) - 15-8-2018', 'tic-docencia.jpg', 'edu', 1),
(67, 'Evaluación educativa', 'Evaluación educativa en un clic - Instituto Nacional para la Evaluación de la Educación- 10/08/2018', 'evaleduc.jpg', 'edu', 1),
(68, 'Angular 6', 'Desarrollo Front End con Angular 6 (2018-C39) - Centro Nacional de Formación en Nuevas Tecnologias - 20-06-2018 ', 'angular6.jpg', 'front', 1),
(69, 'Tendencias educativas', 'Escuela Digital: Tendencias educativas con TIC - Universidad de La Laguna - 10-11-2018', 'tendencias-educativas.jpg', 'edu', 1),
(70, 'Uso EDU móviles', 'Uso educativo de dispositivos móviles - Universidad Tecnológica de Puebla - 12-12-2018', 'moviles.jpg', 'edu', 1),
(71, 'JavaScript', 'Programación con JavaScript (3.Âª edición) - MiriadaX - 30/12/2018', 'JavaScript.jpg', 'front', 1),
(72, 'React Angular', 'Client-based Web Applications development: ReactJS & Angular - Universidad Politécnica de Madrid (UPM) (MiriadaX) - 1/01/2019', 'React+Angular.jpg', 'front', 1),
(73, 'Desarrollo Node', 'Desarrollo de servicios en la nube con HTML5, CSS3, JavaScript 6-7-8-9 y node.js (2.Âª edición) - Universidad Politécnica de Madrid (UPM) (MiriadaX) -  7/07/2019 ', 'node-m.jpg', 'front', 1),
(74, 'Módulos Prestashop', 'Desarrollo de Módulos para Prestashop - José Antonio Iglesias - 28/10/2019', 'mprestashop.jpg', 'e-com', 1),
(75, 'PHP Composer', 'Composer para iniciantes - Alexandre Cardoso - 15-12-2019', 'composer.jpg', 'back', 1),
(76, 'Docker', 'Iniciando con contenedores en Docker - Jair Gómez - 01/03/2020', 'docker.jpg', 'back', 0),
(77, 'Photoshop Fotógrafos', 'Adobe Photoshop esencial para fotógrafos - Crehana - 03/2019', 'photoshop.jpg', 'otros', 1),
(78, 'Diseño UX', 'Diseño de experiencia de usuario | Universidad Tecnológica Nacional - Facultad Regional Buenos Aires | 4-03-2020', 'ux.jpg', 'front', 1),
(79, 'Ventas Amazon', 'Aprende los primeros pasos para Vender en Amazon | Ecommaster Moocs de Marketing Digital | 05/04/2020', 'amazon.jpg', 'e-com', 1),
(80, 'Symfony 4', 'Curso de Symfony 4 - IMAGINA FORMACIÓN - 08/06/2020', 'symfony4.jpg', 'back', 1),
(81, 'PHP Web', 'Programación Efectiva en PHP para aplicaciones Web - Universidad Nacional Abierta y a Distancia (UNAD) - 24-10-2020', 'php-efectiva.jpg', 'back', 1),
(82, 'Git y Github', 'Gestión de proyectos Software con Git y GitHub (3.Âª edición) â€“ Universidad Politécnica de Madrid - 50 horas - 12-12-2020. ', 'github2020.jpg', 'otros', 1),
(83, 'HTML5 Css Js', 'Desarrollo Frontend con HTML, CSS y Javascript (10.Âª edición)- Universidad Politécnica de Madrid - 64 horas -  13-11-2020', 'web32020.jpg', 'front', 1),
(84, 'Node Express BD', 'Desarrollo Backend con Node, Express y BBDDs (3.Âª edición) - 3/04/2021', 'node21.jpg', 'back', 1),
(85, 'Responsive Web Design', 'Responsive Web Design - freeCodeCamp.org - 18/08/2021 ', 'web-fcc.jpg', 'front', 1),
(86, 'Google Analytics ', 'Certificación Google Partner para Analytics - 23-08-2021/ 23-08-2022', 'analitica3.jpg', 'e-com', 1),
(87, 'Google Ads Search', 'Certificación Google sobre las Campañas de Búsqueda de Google Ads - 24-08-2021/24-08-2022', 'ads-search.jpg', 'e-com', 1),
(88, 'Google Ads Shopping', 'Certificación Google para creación y personalización de campañas de Shopping - 03-09-2021/03-09-2022', 'shopping21.jpg', 'e-com', 1),
(89, 'Google Business', 'Google My Business Basics Assessment - 06-09-2021', 'mybusiness.jpg', 'e-com', 1),
(90, 'Aplicaciones Google Ads', 'Certificación en Aplicaciones de Google Ads - Creación y optimización de campañas de aplicaciones - 14-09-2021/14-09-2022', 'adsapps.jpg', 'e-com', 1),
(91, 'Seguridad Teletrabajo', 'Protege tu Negocio: Ciberseguridad en el Teletrabajo - Incibe - Conocimientos generales sobre cómo implantar la modalidad de teletrabajo de forma segura - 17/09/2021', 'teletrabajo.jpg', 'otros', 1),
(92, 'Educación computación', 'Herramientas educativas en ciencias de la computación y programación - Fundación televisa - 17-09-2021', 'televisa.jpg', 'edu', 1),
(93, 'Temas WordPress ', 'Curso de Creación de Temas para WordPress - OpenWebinars - 19-11-2021', 'temaswp-ow.jpg', 'front', 1),
(94, 'Hooks Wordpress', 'Manejando Hooks en WordPress - OpenWebinars - 19-11-2021 ', 'hookswp-ow.jpg', 'front', 1),
(95, 'API WordPress', 'REST API en WordPress - OpenWebinars - 19-11-2021', 'apiwp-ow.jpg', 'back', 1),
(96, 'TDD PHPUnit', 'Test-driven development en PHP con PHPUnit - OpenWebinars - 19-11-2021', 'phpunit-ow.jpg', 'back', 1),
(97, 'SOAP PHP', 'Consumo de WebServices SOAP con PHP - OpenWebinars - 19-11-2021', 'soapphp-ow.jpg', 'back', 1),
(98, 'Twig', 'Creación de extensiones en Twig - OpenWebinars - 19-11-2021', 'twig-ow.jpg', 'front', 1),
(99, 'Plugins WordPress', 'Curso de creación de plugins para WordPress - OpenWebinars - 20-11-2021', 'ow-pluiginswp.jpg', 'back', 1),
(100, 'Docker WordPress', 'Entorno de desarrollo para WordPress con Docker - OpenWebinars - 20-11-2021', 'ow-dockerwp.jpg', 'back', 1),
(101, 'Management 3.0', 'Gestión de personas y equipos en el Management 3.0 - OpenWebinars - 20-11-2021 ', 'ow-manage3.jpg', 'otros', 1),
(102, 'Docs Markdown', 'Gestión de documentación técnica con GitHub y Markdown - OpenWebinars - 20-11-2021', 'ow-doctecnica.jpg', 'otros', 1),
(103, 'Desarrollo web legal', 'Aspectos legales del desarrollo web - OpenWebinars - 20-11-2021', 'ow-weblegal.jpg', 'otros', 1),
(104, 'Docker', 'Introducción a Docker - OpenWebinars - 20-11-2021', 'ow-docker.jpg', 'back', 1),
(105, 'Equipos trabajo', 'Comunicación en el equipo de trabajo - OpenWebinars - 20-11-2021', 'certificado-comunicacion.jpg', 'otros', 1),
(106, 'Gestión teletrabajo', 'Teletrabajo: Claves para una gestión eficaz - OpenWebinars - 20-11-2021', 'ow-teletrabajo.jpg', 'otros', 1),
(107, 'React', 'React avanzado - OpenWebinars - 20-11-2021', 'ou-react-1.jpg', 'front', 1),
(108, 'Symfony 5', 'Symfony 5 avanzado - OpenWebinars - 20-11-2021', 'ow-symfony-1.jpg', 'back', 1),
(109, 'Symfony Doctrine', 'Consultas Doctrine en Symfony - OpenWebinars - 21-11-2021', 'ow-doctrine.jpg', 'back', 1),
(110, 'TDD fundamentos', 'Fundamentos de Test-driven development - OpenWebinars - 21-11-2021', 'ow-td.jpg', 'otros', 1),
(111, 'Vue eventos', 'Uso de eventos en Vue - OpenWebinars - 21-11-2021', 'ow-eventosvue.jpg', 'front', 1),
(112, 'Kanban', 'Diseña y utiliza un tablero Kanban - OpenWebinars - 21-11-2021', 'ow-kanban.jpg', 'otros', 1),
(113, 'SCRUM', 'SCRUM: Gestionando equipos de trabajo - OpenWebinars - 21-11-2021', 'ow-scrum.jpg', 'otros', 1),
(114, 'Doc. técnica', 'Mejores prácticas para la creación de documentación técnica - OpenWebinars - 21-11-2021', 'ow-doctecnica1.jpg', 'otros', 1),
(115, 'React Hooks', 'Taller de React Hooks  - OpenWebinars - 21-11-2021', 'ow-reacthooks.jpg', 'front', 1),
(116, 'Liderazgo', 'Liderazgo de equipos - OpenWebinars - 21-11-2021', 'ow-liderazgo-1.jpg', 'otros', 1),
(117, 'JavaScript Prototypes', 'Taller de JavaScript Prototypes - OpenWebinars - 21-11-2021', 'ow-jsprototypes.jpg', 'front', 1),
(118, 'Proyectos IT', 'Gestión de Proyectos IT - OpenWebinars - 21-11-2021 ', 'ow-gestionit-1.jpg', 'otros', 1),
(119, 'Diseño UX', 'Introducción al diseño centrado en el usuario (UX) - OpenWebinars - 21-11-2021', 'ow-ux-1.jpg', 'front', 1),
(120, 'Diseño UI', 'Introducción al diseño de interfaz de Usuarios (UI) - OpenWebinars - 21-11-2021', 'ow-ui-1.jpg', 'front', 1),
(121, 'Composer', 'Composer: Gestión de dependencias en PHP - OpenWebinars - 21-11-2021', 'ow-composer.jpg', 'back', 1),
(122, 'Symfony API', 'Curso de creación de API en Symfony 3 - OpenWebinars - 21-11-2021', 'ow-symfonyapi-1.jpg', 'back', 1),
(123, 'Analytics Dashboard', 'Dashboards con Google Analytics - OpenWebinars - 21-11-2021', 'ow-dashboards.jpg', 'e-com', 1),
(124, 'Analytics Empresas', 'Curso de Google Analytics para Empresas - OpenWebinars - 21-11-2021', 'ow-analytics-1.jpg', 'e-com', 1),
(125, 'PrestaShop Back-End', 'Formación Desarrollador Back-End- PrestaShop Academy (Formación oficial PrestaShop) â€“ 5/1/2023', 'PrestaShopBack.jpg', 'back', 1),
(126, 'Equipos Remoto', 'Gestión de Equipos de Trabajo en Remoto- Centro Integrado de FPD de La Rioja - 31/1/22', 'equipos-remoto.jpg', 'otros', 1),
(127, 'Control Proyectos', 'Planificación, Seguimiento y Control de Proyectos- Centro Integrado de FPD de La Rioja - 03/05/22', 'control-proyectos.jpg', 'otros', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jdg_usuarios`
--

CREATE TABLE `jdg_usuarios` (
  `nombre` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
