<?php session_start();
$_SESSION["num1"] = rand(0, 10);
$_SESSION["num2"] = rand(0, 10); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="vCard de Javier Díaz Garrido">
    <meta name="author" content="Javier Díaz">
    <title>Yo soy Javier</title>
    <link rel="canonical" href="https://javierdiaz.com.es/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel="stylesheet" type="text/css">
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="screen">

    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet" media="screen">
    <link href="assets/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
<script src=https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js></script>
<script src=https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js></script>
<![endif]-->
    <link rel="shortcut icon" href="assets/images/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/images/ico/apple-touch-icon-57-precomposed.png">
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
        function onSubmit(token) {
            var button = document.createElement('input');
            button.type = 'hidden';
            button.name = 'recaptcha_token';
            button.value = token;
            var form = document.getElementById("contact-form");
            form.appendChild(button);
            form.submit();
        }
    </script>
</head>

<body>
    <section id="home" class="tt-fullHeight" data-stellar-vertical-offset="50" data-stellar-background-ratio="0.2">
        <div class="intro">
            <div class="contains">
                <div class="wrapper">
                    <p class="glitch">
                        <span>Y</span>
                        <span>o</span>

                        <span>S</span>
                        <span>o</span>
                        <span>y</span>

                        <span>J</span>
                        <span>a</span>
                        <span>v</span>
                        <span>i</span>
                        <span>e</span>
                        <span>r</span>
                    </p>
                    <p class="glitch_fixed">
                        <span>Y</span>
                        <span>o</span>

                        <span>S</span>
                        <span>o</span>
                        <span>y</span>

                        <span>J</span>
                        <span>a</span>
                        <span>v</span>
                        <span>i</span>
                        <span>e</span>
                        <span>r</span>
                    </p>
                    <p class="glitch_opacity">
                        <span>Y</span>
                        <span>o</span>


                        <span>S</span>
                        <span>o</span>
                        <span>y</span>

                        <span>J</span>
                        <span>a</span>
                        <span>v</span>
                        <span>i</span>
                        <span>e</span>
                        <span>r</span>
                    </p>
                </div>
            </div>
            <?php
            // Detect job
            $job = $_GET['job'] ?? '';
            if ($job === 'developer') {
                $cvFile = 'Javier_Diaz_CV_Developer.pdf';
            } else {
                $cvFile = 'Javier_Diaz_CV_Europass.pdf';
            }

            if ($job === 'developer') {
                //developer
            ?>
                <h1><span>Especialista</span> Web</h1>
                <div class="typewriter">
                    <p class="line1">Profesional dedicado a la creación de paginas web</p>
                    <p class="line2">También administrador de sistemas informáticos y</p>
                    <p class="line3">versado en labores de relaciones públicas.</p>
                </div>
            <?php
            } elseif ($job === 'manager') {
                // manager                
            ?>
                <h1><span>Web</span> Project Manager</h1>
                <div class="typewriter">
                    <p class="line1">Profesional dedicado a la gestión y creación de proyectos web</p>
                    <p class="line2">También administrador de eCommerce y</p>
                    <p class="line3">desarrollador PHP especializado en PrestaShop.</p>
                </div>
            <?php
            } else {
                // Default case (empty or other value)
            ?>
                <h1><span>Docente</span> y Consultor Web</h1>
                <div class="typewriter">
                    <p class="line1">Apasionado por compartir conocimientos en el ámbito IT</p>
                    <p class="line2">También administrador de eCommerce y</p>
                    <p class="line3">desarrollador PHP especializado en PrestaShop.</p>
                </div>
            <?php
            }
            ?>

            <div class="social-icons">
                <ul class="list-inline">
                    <li><a href="https://www.linkedin.com/in/javier-diaz-garrido/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="https://twitter.com/heipry" target="_blank"><i class="fa-brands fa-x-twitter"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                                    <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
                                </svg></i></a></li>

                    <li><a href="https://wa.me/34627496505?text=Hola%20Javier%20he%20leido%20tu%20curriculum,%20" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
                    <li><a href="mailto:heipry@gmail.com?Subject=Hemos%20visto%20tu%20curriculum"><i class="fa fa-envelope"></i>
                        </a></li>
                </ul>
            </div>
        </div>
        <div class="mouse-icon">
            <div class="wheel"></div>
        </div>
    </section>
    <header class="header">
        <nav class="navbar navbar-custom">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
                        <span class="sr-only">Navegacion</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt></a>
                </div>
                <div class="collapse navbar-collapse" id="custom-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">Sobre mi</a></li>
                        <li><a href="#resume">Resumen</a></li>
                        <li><a href="#cert">Certificaciones</a></li>
                        <li><a href="#skills">Habilidades</a></li>
                        <li><a href="#works">Trabajos</a></li>
                        <li><a href="#contact">Contacto</a></li>
                        <li><a href="https://blog.javierdiaz.com.es">Blog</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- About -->
    <section id="about" class="about-section section-padding">
        <div class="container">
            <h2 class="section-title wow fadeInUp">Sobre mi</h2>
            <div class="row">
                <div class="col-md-5 col-md-push-8">
                    <div class="about">
                        <div class="inner">

                            <div class="about-con typewritter">
                                <ul>
                                    <li class="wow contact1">Javier Díaz</li>
                                    <li class="wow contact1"><a href="mailto:contacto@javierdiaz.com.es">contacto@javierdiaz.com.es</a></li>
                                    <li class="wow contact2">Whatsapp: &nbsp;<a href="https://wa.me/34627496505?ext=Hola%20Javier%20he%20leido%20tu%20curriculum,%20" target="_blank"><i class="fa fa-whatsapp"></i> </a> </li>
                                    <li class="wow contact3">Localidad: Arnedo (La Rioja)</li>
                                    <li class="wow contact4">Nacionalidad: Española</li>
                                </ul>
                                <a href="assets/images/<?= htmlspecialchars($cvFile) ?>" class="bbutton">DESCARGAR MI CV</a>
                            </div>
                        </div>

                    </div>
                    <ul class="list-check">
                        <li>Experiencia como gestor de proyectos formativos y tutorización web</li>
                        <li>Conocimientos de programación en lenguajes como JavaScript, PHP o Java</li>
                        <li>Desarrollo y personalización de CMSs (WordPress, PrestaShop,...)</li>
                        <li>Amplios conocimientos de desarrollo web: HTML5, CSS3, JavaScript, PHP</li>
                        <li>Gestión de equipos en proyectos formativos y tecnológicos</li>
                        <li>Experiencia en atención al cliente y formación personalizada</li>

                    </ul>
                </div>
                <div class="col-md-7 col-md-pull-4">
                    <div class="short-info wow fadeInUp">
                        <?php if ($job === 'developer') {
                            // developer
                        ?>
                            <h3>Hoy en día</h3>
                            <p> Desarrollador y gerente de proyectos web con más de 10 años de experiencia. Experto en PrestaShop y WordPress, así como en
                                el desarrollo de módulos y diseño personalizado de marca. Hábil en la gestión de equipos, la administración de contenido web y
                                el mantenimiento de infraestructuras digitales.Acostumbrado a liderar proyectos full stack, incluyendo soporte técnico, gestión de redes sociales y ventas multicanal en marketplaces. Certificado por Google, con dominio de PHP, JavaScript, CSS y HTML. Compagino esta trayectoria técnica con una creciente actividad como formador en desarrollo web.</p> <br>
                    </div>
                    <div class="short-info wow fadeInUp">
                        <h3>¿De dónde vengo?</h3>
                        <p> Mi trayectoria comenzó en el ámbito comercial, liderando un equipo de más de 10 personas en el sector de ventas de cerramientos. Posteriormente fundé un eCommerce propio, lo que impulsó mi reorientación definitiva hacia el desarrollo web. Me formé en Desarrollo de Aplicaciones Web y Multiplataforma, trabajando como desarrollador PHP en agencias digitales y evolucionando hasta ocupar el rol de director de tecnología en una filial multinacional, donde gestioné un eCommerce multicanal basado en PrestaShop. Desde entonces, he coordinado numerosos proyectos IT, combinando experiencia técnica con visión de negocio. </p>
                    <?php
                        } elseif ($job === 'manager') {
                            // manager                
                    ?>
                        <h3>Hoy en día</h3>
                        <p> Me siento comodo en la gestión de proyectos web, ya sea desarrollando sites óptimizados desde cero, actualizándolos para el día a día, o gestionando el mantenimiento continuo para maximizar ventas u otros objetivos. </p> <br>
                    </div>
                    <div class="short-info wow fadeInUp">
                        <h3>¿De dónde vengo?</h3>
                        <p> Inicié mi carrera en una pequeña empresa de venta de cerramientos, donde llegué a liderar un equipo de más de 10 personas. Posteriormente, lancé mi propio eCommerce y ofrecí servicios de creación y gestión de webs a clientes y proveedores, lo que me impulsó a reciclarme profesionalmente. Me formé en Desarrollo de Aplicaciones Web y Multiplataforma, y he trabajado como desarrollador PHP en varias agencias digitales y como director de tecnología en una multinacional con eCommerce multicanal basado en PrestaShop y WordPress. Más tarde, inicié el camino de la gestión de proyectos IT, sigo ligado a la personalización de PrestaShop aunque también a WordPress y otros CMSs y me he acostumbrado a las bondades del teletrabajo. </p>
                    <?php
                        } else {
                            // Default case (empty or other value)
                    ?>
                        <h3>Hoy en día</h3>
                        <p> Especializado en gestión y desarrollo web, fusiono mi sólida experiencia con mi pasión por la docencia para formar a la próxima generación de profesionales. Tras más de una década en el sector, he desarrollado una metodología práctica y adaptativa que va más allá de la teoría.<br>
                            Como docente en programas de eLearning y reskilling, mi objetivo es dotar a los alumnos de habilidades directamente aplicables al mercado digital. Mi formación se centra en el desarrollo web (HTML, CSS, JavaScript, PHP) y el diseño UX/UI, asegurando que los estudiantes no solo sepan codificar, sino que también comprendan cómo crear productos digitales usables y eficientes.<br>
                            Mi bagaje en gestión de proyectos me permite aportar una visión integral del sector, preparando a los alumnos con las herramientas y la mentalidad necesarias para tener éxito en cualquier equipo o proyecto. </p> <br>
                    </div>
                    <div class="short-info wow fadeInUp">
                        <h3>¿De dónde vengo?</h3>
                        <p> Mi trayectoria profesional es el motor de mi enfoque pedagógico. Comencé desarrollando habilidades de liderazgo y gestión en el sector comercial. Posteriormente, mi paso por el emprendimiento al lanzar y gestionar mi propio eCommerce me proporcionó una visión integral del lado de negocio. Esta experiencia me llevó a una reorientación profesional, formándome en desarrollo web y trabajando como desarrollador y, más tarde, como director de tecnología. Hoy, mi experiencia como gestor de proyectos IT me permite preparar a mis alumnos no solo con habilidades técnicas, sino también con la mentalidad y las herramientas necesarias para triunfar en un entorno de trabajo real. Mi camino me ha enseñado a valorar la aplicación práctica por encima de la teoría, algo que transmito en cada una de mis formaciones. </p>

                    <?php
                        }
                    ?>
                    </div>
                    <div class="my-signature">
                        <img src="assets/images/sign.png" alt>
                    </div>
                    <div class="download-button">

                        <a class="btn btn-info btn-lg" href="#contact"><i class="fa fa-paper-plane"></i>Enviarme un mensaje</a>
                        <a class="btn btn-primary btn-lg" href="assets/images/<?= htmlspecialchars($cvFile) ?>" target="_blank"><i class="fa fa-download"></i>Descargar mi cv</a>



                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="video" class="video-section">
        <div class="tf-bg-overlay">
            <div class="container">
                <div class="control">
                    <div class="video-intro text-center">
                        <button type="button" class="play-trigger" data-toggle="modal" data-target="#tour-video"><i class="fa fa-play"></i></button>
                        <h2>Video Sobre Mi</h2>
                    </div>
                    <div class="modal modal-video" id="tour-video">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Video Presentación</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="video-container"><iframe width="560" height="315" src="https://www.youtube.com/embed/6xbrvIsYxCY?si=92Q0SlEhoXu_hcUW" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Resume-->
    <section id="resume" class="resume-section section-padding">
        <div class="container">
            <h2 class="section-title wow fadeInUp">Resumen</h2>
            <div class="row">
                <div class="col-md-12">
                    <div class="resume-title">
                        <h3>Educación</h3>
                    </div>
                    <div class="resume">
                        <ul class="timeline">
                            <li>
                                <div class="posted-date">
                                    <span class="month">2017</span>
                                </div>
                                <div class="timeline-panel wow fadeInUp">
                                    <div class="timeline-content">
                                        <div class="timeline-heading">
                                            <h3>Administración de servicios de Internet (IFCT0509) - <a class="image-link importante" href="assets/images/certificadoASI.jpg"><i class="fa fa-search-plus"></i></a></h3>
                                            <span><a href="https://www.adesos.org/" target="_blank">ADESOS, entidad colaboradora de OPEA, Calahorra, La Rioja </a></span>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Conseguí el certificado de profesionalidad que acredita mi disponibilidad como administrador de servicios de Internet, entornos Web y administrador de servicios de mensajería electrónica (WEBMASTER) así como técnico de sistemas de Internet.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="posted-date">
                                    <span class="month">2017-2019</span>
                                </div>
                                <div class="timeline-panel wow fadeInUp">
                                    <div class="timeline-content">
                                        <div class="timeline-heading">
                                            <h3>CFGS Desarrollo de aplicaciones WEB - <a class="image-link importante" href="assets/images/diploma-daw.jpg"><i class="fa fa-search-plus"></i></a></h3>
                                            <span><a href="https://directorio.educa.jcyl.es/m/es/centros/2012/1-42002744-virgen-del-espino" target="_blank">IES Virgen del Espino, Soria, modalidad Online</a></span>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Estudios del Ciclo Formativo de Grado Superior de desarrollo de aplicaciones Web en modalidad online, titulación oficial y homologada que me permite trabajar como desarrollador multimedia y de aplicativos para entornos web. </p>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="posted-date">
                                    <span class="month">2021-2024</span>
                                </div>
                                <div class="timeline-panel wow fadeInUp">
                                    <div class="timeline-content">
                                        <div class="timeline-heading">
                                            <h3>CFGS Desarrollo de aplicaciones multiplataforma - <a class="image-link importante" href="assets/images/diploma-dam.jpg"><i class="fa fa-search-plus"></i></a></h3>
                                            <span><a href="https://iescomercio.com/" target="_blank">IES Comercio, Logroño, modalidad Online </a></span>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Titulación oficial y homologada. Obtuve la <b>Matrícula de Honor</b>, destacando por mi rendimiento académico. Esta formación me capacita para trabajar como desarrollador multimedia y de aplicaciones informáticas para la gestión empresarial y de negocio, tanto en propósitos generales como en el ámbito del entretenimiento y la informática móvil.

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="posted-date">
                                    <span class="month">2024-</span>
                                </div>
                                <div class="timeline-panel wow fadeInUp">
                                    <div class="timeline-content">
                                        <div class="timeline-heading">
                                            <h3>Master FP Desarrollo de aplicaciones en lenguaje Python <a class="image-link importante" href="assets/images/diploma-daw.jpg"><i class="fa fa-search-plus"></i></a></h3>
                                            <span><a href="https://directorio.educa.jcyl.es/m/es/centros/2012/1-42002744-virgen-del-espino" target="_blank">CIPFPD La Rioja
                                                </a></span>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Estudiando actualmente el Máster de Formación Profesional en Desarrollo de Aplicaciones en Lenguaje Python. Este programa me capacita para diseñar, desarrollar e implementar aplicaciones avanzadas utilizando Python, aplicando buenas prácticas de programación, automatización y análisis de datos.</p>

                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="resume-title">


                        <h3>Experiencia</h3>
                    </div>
                    <div class="resume">
                        <ul class="timeline">
                            <li class="posted-date">
                                <div class="posted-date">
                                    <span class="month">2024-2025</span>
                                </div>
                                <div class="timeline-panel wow fadeInUp">
                                    <div class="timeline-content">
                                        <div class="timeline-heading">
                                            <h3>Docente y tutor de Desarrollo Web</h3>
                                            <span>Vértice eLearning, Málaga </span>
                                        </div>
                                        <div class="timeline-body">
                                            <p>
                                            <p>

                                                Capacité a más de 100 alumnos en programas de formación online, impartiendo más de 400 horas de contenido sobre HTML, CSS y JS.<br>

                                                Durante este periodo, gestioné y evalué el progreso de los estudiantes en los módulos clave del <strong>Certificado Profesional IFCD0110 </strong>Confección y publicación de páginas web, asegurando que adquirieran habilidades técnicas directamente aplicables al mercado digital e impartí los siguientes módulos formativos:
                                            </p>

                                            <ul class="experiencia">
                                                <li>UF1302: Creación de páginas web con el lenguaje de marcas (60 h) <strong>x2</strong></li>
                                                <li>UF1303: Elaboración de hojas de estilo (CSS) (60 h)</li>
                                                <li>UF1305: Programación con lenguajes de guion (60 h)</li>
                                                <li>UF1306: Pruebas de funcionalidades y optimización (60 h)</li>
                                                <li>MF0952: Publicación de páginas web (60 h) <strong>x2</strong></li>
                                            </ul>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="posted-date">

                                    <span class="month">2024</span>
                                </div>
                                <div class="timeline-panel wow fadeInUp">
                                    <div class="timeline-content">
                                        <div class="timeline-heading">
                                            <h3>Product Owner</h3>
                                            <span>Sysprovider SL, Logroño, La Rioja</span>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Como Product Owner, lideré equipos multidisciplinares mediante metodologías ágiles como Scrum y Kanban, para el desarrollo y entrega de productos digitales enfocados en plataformas como PrestaShop y WordPress. Mi rol abarcó la planificación estratégica, la gestión de hosting y el soporte técnico manteniendo comunicación constante con el cliente para asegurarla alineación con los requisitos y la satisfacción de sus necesidades.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="posted-date">
                                <div class="posted-date">
                                    <span class="month">2021-2024</span>
                                </div>
                                <div class="timeline-panel wow fadeInUp">
                                    <div class="timeline-content">
                                        <div class="timeline-heading">
                                            <h3>Web Project Manager</h3>
                                            <span>Proyecto Online, Logroño, La Rioja</span>
                                        </div>
                                        <div class="timeline-body">
                                            <p>En este rol, gestioné proyectos web complejos, liderando un equipo multidisciplinar para desarrollo
                                                web que incluía las áreas de diseño, programación y maquetación. Nos especializamos en el desarrollo 360º de soluciones basadas en PrestaShop, WordPress y otros CMS, incluyendo diseño personalizado, desarrollo de módulos y una completa oferta de servicios de marketing digital (SEO, SEM y gestión de redes sociales).
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="posted-date">

                                    <span class="month">2018-2021</span>
                                </div>
                                <div class="timeline-panel wow fadeInUp">
                                    <div class="timeline-content">
                                        <div class="timeline-heading">
                                            <h3>Ecommerce Manager</h3>
                                            <span>TapasRioja (Berlin Packaging), Rincón de Soto, La Rioja</span>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Fui responsable de la administración, actualización y gestión integral de un eCommerce con un volumen de más de 100 pedidos diarios, lo que implicaba un rediseño y optimización continuos. Mis funciones también incluían el soporte técnico a usuarios, la gestión de la presencia en redes sociales y la venta en Marketplaces. Además, como Director de Tecnología de la delegación, gestionaba la red interna, el servidor y un ERP distribuido, adquiriendo una visión completa de la infraestructura digital y la optimización de procesos.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="posted-date">
                                <div class="posted-date">
                                    <span class="month">2015-2017</span>
                                </div>
                                <div class="timeline-panel wow fadeInUp">
                                    <div class="timeline-content">
                                        <div class="timeline-heading">
                                            <h3>Diseñador y gestor web</h3>
                                            <span>Jadigar Web Services, Arnedo, La Rioja</span>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Durante este periodo, mientras gestionaba mi propio eCommerce de venta de cerramientos, me establecí como autónomo para ofrecer servicios de diseño web y gestión de redes sociales. Para ampliar mis competencias, obtuve certificaciones en Google Ads, publicidad móvil y Google Analytics. Colaboré con agencias digitales como Procesyva SL o Si4Ti, especializándome en desarrollo web (HTML, CSS, PHP, JavaScript) y la personalización de CMS como WordPress y PrestaShop, sentando las bases de mi profundo conocimiento técnico en desarrollo web y mi habilidad para la gestión de proyectos digitales desde una perspectiva emprendedora.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php if ($job === 'manager') {
                                // manager                
                            ?>
                                <li class="timeline-inverted">
                                    <div class="posted-date">
                                        <span class="month">2012-2015</span>
                                    </div>
                                    <div class="timeline-panel wow fadeInUp">
                                        <div class="timeline-content">
                                            <div class="timeline-heading">
                                                <h3>Propietario de empresa</h3>
                                                <span>Carpintería Caraldiaz, Arnedo, La Rioja</span>
                                            </div>
                                            <div class="timeline-body">
                                                <p>Monté mi propia empresa en la que pivoté el modelo de negocio desde la fabricación y montaje local a
                                                    la venta en internet. La joven empresa tuvo que fabricar una infraestructura digital desde
                                                    cero con la que adquirí una experiencia en aplicaciones web, marketing digital y legislación
                                                    en la red que me dio la oportunidad de conocer el mundo del desarrollo web de manera
                                                    profesional.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php
                            } else {
                                // Default case (empty or other value)
                            ?>

                            <?php
                            }
                            ?>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="cert" class="works-section section-padding">
        <div class="container">
            <h2 class="section-title wow fadeInUp">Certificados</h2>
            <ul class="list-inline" id="filter">
                <?php
                include_once 'back/conexion/conexion.inc.php';
                $categorias = ['front', 'back', 'e-com', 'dire', 'edu', 'otros'];

                if ($job === 'developer') {
                    // developer
                ?>
                    <li><a class="active" id="categoria_mostrada" data-group="<?php echo $categorias[1]; ?>">Back End</a></li>
                    <li><a data-group="<?php echo $categorias[0]; ?>">Front/CMS</a></li>
                    <li><a data-group="<?php echo $categorias[2]; ?>">E-commerce</a></li>
                    <li><a data-group="<?php echo $categorias[3]; ?>">Proyectos</a></li>
                    <li><a data-group="<?php echo $categorias[4]; ?>">Docencia</a></li>
                    <li><a data-group="<?php echo $categorias[5]; ?>">Otros</a></li>
                    <li><a data-group="todos">Todos</a></li>
                <?php
                } elseif ($job === 'manager') {
                    // manager
                ?>
                    <li><a class="active" id="categoria_mostrada" data-group="<?php echo $categorias[3]; ?>">Proyectos</a></li>
                    <li><a data-group="<?php echo $categorias[0]; ?>">Front/CMS</a></li>
                    <li><a data-group="<?php echo $categorias[2]; ?>">E-commerce</a></li>
                    <li><a data-group="<?php echo $categorias[1]; ?>">Back End</a></li>
                    <li><a data-group="<?php echo $categorias[4]; ?>">Docencia</a></li>
                    <li><a data-group="<?php echo $categorias[5]; ?>">Otros</a></li>
                    <li><a data-group="todos">Todos</a></li>
                <?php
                } else {
                    // Default case (empty or other value)
                ?>
                    <li><a class="active" id="categoria_mostrada" data-group="<?php echo $categorias[4]; ?>">Docencia</a></li>
                    <li><a data-group="<?php echo $categorias[1]; ?>">Back End</a></li>
                    <li><a data-group="<?php echo $categorias[2]; ?>">E-commerce</a></li>
                    <li><a data-group="<?php echo $categorias[0]; ?>">Front/CMS</a></li>
                    <li><a data-group="<?php echo $categorias[3]; ?>">Proyectos</a></li>
                    <li><a data-group="<?php echo $categorias[5]; ?>">Otros</a></li>
                    <li><a data-group="todos">Todos</a></li>
                <?php
                }
                ?>
                <?php
                // Get visible
                $gsent = $pdo->prepare("SELECT * FROM jdg_titulos where visible = 1");
                $gsent->execute();
                $resultado = $gsent->fetchAll();
                ?>
            </ul>
            <div class="row">
                <div id="grid">
                    <?php foreach ($resultado as $dato): ?>
                        <div class="portfolio-item col-xs-4 col-sm-2 col-md-2" data-groups='["<?php echo $dato['categoria']; ?>","todos"]'>
                            <div class="portfolio-bg">
                                <div class="portfolio">
                                    <div class="tt-overlay"></div>
                                    <div class="links"> <a class="image-link" href="assets/images/works-big/<?php echo $dato['foto']; ?>"><i class="fa fa-search-plus"></i></a> <a href="#popup<?php echo $dato['id']; ?>" class="open-popup-link"><i class="fa fa-quote-right"></i></a>
                                        <div id="popup<?php echo $dato['id']; ?>" class="white-popup mfp-hide"> <?php echo $dato['descripcion']; ?></div>
                                    </div>
                                    <img src="assets/images/works/<?php echo $dato['foto']; ?>" alt="<?php echo $dato['foto']; ?>">
                                    <div class="text-center">
                                        <p><?php echo $dato['titulo']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="row">
                    <div class="col-xs-6 col-md-2 col-md-offset-5 col-xs-offset-3">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#lista">Ver lista completa</button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="modal" id="lista">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Lista certificaciones</h4>
                </div>
                <div class="modal-body">
                    <ul class="media-list">
                        <?php
                        // Get all
                        $gsent = $pdo->prepare("SELECT * FROM jdg_titulos ORDER BY id DESC");
                        $gsent->execute();
                        $resultado = $gsent->fetchAll();
                        foreach ($resultado as $dato): ?>
                            <li class="media">
                                <div class="pull-left">

                                    <a class="image-link" href="assets/images/works-big/<?php echo $dato['foto']; ?>">
                                        <img class="media-object pad" src="assets/images/works/<?php echo $dato['foto']; ?>" alt="<?php echo $dato['foto']; ?>">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <p class="media-heading"><?php echo $dato['descripcion']; ?></p>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <section id="skills" class="skills-section section-padding">
        <div class="container">
            <h2 class="section-title wow fadeInUp">Habilidades</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="skill-progress">
                        <div class="skill-title">
                            <h3>HTML y CSS</h3>
                        </div>
                        <div class="progress">
                            <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span>85%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill-progress">
                        <div class="skill-title">
                            <h3>Programación PHP</h3>
                        </div>
                        <div class="progress">
                            <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100"><span>92%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill-progress">
                        <div class="skill-title">
                            <h3>JavaScript</h3>
                        </div>
                        <div class="progress">
                            <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"><span>87%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="skill-progress">
                        <div class="skill-title">
                            <h3>Ecommerce</h3>
                        </div>
                        <div class="progress">
                            <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"><span>90%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill-progress">
                        <div class="skill-title">
                            <h3>Plataformas eLearning</h3>
                        </div>
                        <div class="progress">
                            <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"><span>95%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill-progress">
                        <div class="skill-title">
                            <h3>Administración de sistemas</h3>
                        </div>
                        <div class="progress">
                            <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"><span>82%</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <?php if ($job === 'developer') {
                // developer
            ?>
                <div class="row text-center">
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="chart" data-percent="95" data-color="e74c3c">
                            <span class="percent"></span>
                            <div class="chart-text">
                                <span>Diseño Responsive y UX/UI
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="chart" data-percent="90" data-color="2ecc71">
                            <span class="percent"></span>
                            <div class="chart-text">
                                <span>Optimización y Seguridad Web</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="chart" data-percent="89" data-color="3498db">
                            <span class="percent"></span>
                            <div class="chart-text">
                                <span>Control de Versiones (Git)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="chart" data-percent="93" data-color="3498db">
                            <span class="percent"></span>
                            <div class="chart-text">
                                <span>Administración Entornos Web</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row more-skill text-center spaced">
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="list-text">
                            <img src="/assets/images/docencia1.png" alt="Atención al Alumnado" class="skill-icon wow fadeIn" data-wow-duration="3s">
                            <span>Capacidad de liderazgo
                            </span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="list-text">
                            <img src="/assets/images/docencia2.png" alt="Atención al Alumnado" class="skill-icon wow fadeIn" data-wow-duration="3s">
                            <span>Aptitudes de Comunicación</span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="list-text">
                            <img src="/assets/images/docencia3.png" alt="Atención al Alumnado" class="skill-icon wow fadeIn" data-wow-duration="3s">
                            <span>Resolución de Problemas</span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="list-text">
                            <img src="/assets/images/docencia4.png" alt="Atención al Alumnado" class="skill-icon wow fadeIn" data-wow-duration="3s">
                            <span>Colaboración y Scrum</span>
                        </div>
                    </div>
                </div>
        </div>
    <?php
            } elseif ($job === 'manager') {
                // manager                
    ?>
        <div class="row text-center">
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="chart" data-percent="95" data-color="e74c3c">
                    <span class="percent"></span>
                    <div class="chart-text">
                        <span>Gestión de Recursos
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="chart" data-percent="90" data-color="2ecc71">
                    <span class="percent"></span>
                    <div class="chart-text">
                        <span>Planificación Estratégica</span>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="chart" data-percent="89" data-color="3498db">
                    <span class="percent"></span>
                    <div class="chart-text">
                        <span>Control de Tiempos y Costes</span>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="chart" data-percent="93" data-color="3498db">
                    <span class="percent"></span>
                    <div class="chart-text">
                        <span>Capacidad de Planificación</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row more-skill text-center spaced">
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="list-text">
                    <img src="/assets/images/docencia1.png" alt="Atención al Alumnado" class="skill-icon wow fadeIn" data-wow-duration="3s">
                    <span>Liderazgo de Equipos
                    </span>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="list-text">
                    <img src="/assets/images/docencia2.png" alt="Atención al Alumnado" class="skill-icon wow fadeIn" data-wow-duration="3s">
                    <span>Comunicación Efectiva</span>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="list-text">
                    <img src="/assets/images/docencia3.png" alt="Atención al Alumnado" class="skill-icon wow fadeIn" data-wow-duration="3s">
                    <span>Negociación y Resolución</span>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="list-text">
                    <img src="/assets/images/docencia4.png" alt="Atención al Alumnado" class="skill-icon wow fadeIn" data-wow-duration="3s">
                    <span>Adaptabilidad al Cambio</span>
                </div>
            </div>
        </div>
        </div>
    <?php
            } else {
                // Default case (empty or other value)
    ?>
        <div class="row text-center">
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="chart" data-percent="95" data-color="e74c3c">
                    <span class="percent"></span>
                    <div class="chart-text">
                        <span>Gestión de Proyectos
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="chart" data-percent="90" data-color="2ecc71">
                    <span class="percent"></span>
                    <div class="chart-text">
                        <span>Metodologías Didácticas</span>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="chart" data-percent="89" data-color="3498db">
                    <span class="percent"></span>
                    <div class="chart-text">
                        <span>Habilidades Evaluación</span>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="chart" data-percent="93" data-color="3498db">
                    <span class="percent"></span>
                    <div class="chart-text">
                        <span>Capacidad de Planificación</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row more-skill text-center spaced">
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="list-text">
                    <img src="/assets/images/docencia1.png" alt="Atención al Alumnado" class="skill-icon wow fadeIn" data-wow-duration="3s">
                    <span>Atención al Alumnado
                    </span>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="list-text">
                    <img src="/assets/images/docencia2.png" alt="Atención al Alumnado" class="skill-icon wow fadeIn" data-wow-duration="3s">
                    <span>Aptitudes de Comunicación</span>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="list-text">
                    <img src="/assets/images/docencia3.png" alt="Atención al Alumnado" class="skill-icon wow fadeIn" data-wow-duration="3s">
                    <span>Resolución de Conflictos</span>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="list-text">
                    <img src="/assets/images/docencia4.png" alt="Atención al Alumnado" class="skill-icon wow fadeIn" data-wow-duration="3s">
                    <span>Adaptabilidad</span>
                </div>
            </div>
        </div>
        </div>
    <?php
            }
    ?>


    </section>
    <section class="blog-section text-center" data-stellar-vertical-offset="50" data-stellar-background-ratio="0.2">
        <div class="hire-section-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>¿Listo para ver mis habilidades en acción?</h2>
                        <p>
                            En mi blog comparto soluciones ingeniosas, tutoriales prácticos y la visión de un desarrollador sobre el mundo web. Descubre cómo los fundamentos pueden ser tu mejor herramienta.
                        </p>
                        <a href="https://heipry.github.io/javierdiaz_blog/" class="btn btn-default">Visita el Blog</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="works" class="works-section section-padding">
        <div class="container">

            <?php if ($job === 'developer' || $job === 'manager') {

            ?>
                <h2 class="section-title wow fadeInUp">Trabajos realizados</h2>
                <div class="row">
                    <div class="grid">
                        <div class="portfolio-item col-xs-12 col-sm-6 col-md-4">
                            <div class="portfolio-bg">
                                <div class="portfolio">
                                    <div class="tt-overlay"></div>
                                    <div class="links links-w"> <a href="https://www.figma.com/proto/cQ7Uu3ZCcFWOVxFNv8SpeY/App-ShopSaver-(v2)" target="_blank"><i class="fa fa-link"></i></a> <a href="#shopsaver" class="open-popup-link"><i class="fa fa-list"></i></a>
                                        <div id="shopsaver" class="white-popup mfp-hide">Aplicación android de gestión de listas de la compra y búsqueda en supermercados online. Código disponible en <a href="https://github.com/Heipry/ShopSaver" target="_blank">https://github.com/Heipry/ShopSaver</a> </div>
                                    </div>
                                    <img src="assets/images/portfolio/pr-shopsaver.jpg" alt="image">
                                    <div class="portfolio-info">
                                        <h3>ShopSaver: Busca, compara y guarda</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-item col-xs-12 col-sm-6 col-md-4">
                            <div class=portfolio-bg>
                                <div class=portfolio>
                                    <div class=tt-overlay></div>
                                    <div class="links links-w"> <a href=https://coplasem.com/ target="_blank"><i class="fa fa-link"></i></a> <a href=#coplasem class=open-popup-link><i class="fa fa-list"></i></a>
                                        <div id=coplasem class="white-popup mfp-hide">Proyecto 360 de Ecommerce basado en PrestaShop para empresa de venta de material para embalaje. Theme modificado, modulos personalizados, conexion con ERP, etc...</div>
                                    </div>
                                    <img src=assets/images/portfolio/pr-coplasem.jpg alt=image>
                                    <div class=portfolio-info>
                                        <h3>Coplasem, Más que Embalaje</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-item col-xs-12 col-sm-6 col-md-4">
                            <div class="portfolio-bg">
                                <div class="portfolio">
                                    <div class="tt-overlay">
                                    </div>
                                    <div class="links links-w"> <a href="https://github.com/Heipry/posql" target="_blank"><i class="fa fa-link"></i></a> <a href="#poquery" class="open-popup-link"><i class="fa fa-list"></i></a>
                                        <div id="poquery" class="white-popup mfp-hide">Módulo PrestaShop para ejecutar consultas SQL personalizadas con fecha de inicio y de fin.
                                        </div>
                                    </div><img src="assets/images/portfolio/poQuery.jpg" alt="image">
                                    <div class="portfolio-info">
                                        <h3>Addon PoQuery for PrestaShop</h3>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="portfolio-item col-xs-12 col-sm-6 col-md-4">
                            <div class=portfolio-bg>
                                <div class=portfolio>
                                    <div class=tt-overlay></div>
                                    <div class="links links-w"> <a href=https://brunocalzada.com/ target="_blank"><i class="fa fa-link"></i></a> <a href=#bruno class=open-popup-link><i class="fa fa-list"></i></a>
                                        <div id=bruno class="white-popup mfp-hide">Página de presentación para profesional independiente. Realizada sobre WordPress+Elementor con elementos JavaScript personalizados</div>
                                    </div>
                                    <img src=assets/images/portfolio/pr-bruno.jpg alt=image>
                                    <div class=portfolio-info>
                                        <h3>Bruno Calzada</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-item col-xs-12 col-sm-6 col-md-4">
                            <div class="portfolio-bg">
                                <div class="portfolio">
                                    <div class="tt-overlay"></div>
                                    <div class="links links-w"> <a href="https://bierhaus.tienda/" target="_blank"><i class="fa fa-link"></i></a> <a href="#bierhaus" class="open-popup-link"><i class="fa fa-list"></i></a>
                                        <div id="bierhaus" class="white-popup mfp-hide">Página web multipropósito. Combina una tienda basada en PrestaShop con sistema de venta de packs, tarjetas regalo y entradas a eventos, con una página web corporativa con conexión a aplicaciones de entrega a domicilio y un backoffice implementado mediante PHP para la gestión de la secciópn "Nuestros grifos" para visualización en pantallas de gran tamaño
                                        </div>
                                    </div><img src="assets/images/portfolio/bierhaus.jpg" alt="image">
                                    <div class="portfolio-info">
                                        <h3>Bierhaus Odeon</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-item col-xs-12 col-sm-6 col-md-4">
                            <div class="portfolio-bg">
                                <div class="portfolio">
                                    <div class="tt-overlay">
                                    </div>
                                    <div class="links links-w"> <a href="https://www.enoturismo-ecuestre.com/" target="_blank"><i class="fa fa-link"></i></a> <a href="#enoturismo" class="open-popup-link"><i class="fa fa-list"></i></a>
                                        <div id="enoturismo" class="white-popup mfp-hide">Página web para servicio de corte turístico. Cambio de logotipos e identidad corporativa, rediseño e implementación de página web mediante WordPress, internacionalización y presencia en internet.
                                        </div>
                                    </div><img src="assets/images/portfolio/enoturismo.jpg" alt="image">
                                    <div class="portfolio-info">
                                        <h3>Enoturismo Ecuestre</h3>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="resume-title" style="margin-top:10px;">
                    <h3>Ver más proyectos</h3>
                </div>
                <div class="codelink text-center">
                    <a href="https://github.com/Heipry" target="_blank">
                        <img alt="GitHub icon" src="https://javierdiaz.com.es/assets/firma/gh.png">
                    </a>
                    <a href="https://codepen.io/jadigar/" target="_blank">
                        <img alt="Codepen icon" src="https://javierdiaz.com.es/assets/firma/cp.png">
                    </a>
                </div>

        </div>
    </section>
<?php
            } else {
                // Default case (empty or other value)
?>
    <section id="edumat" class="works-section section-padding">
        <div class="container">
            <h2 class="section-title wow fadeInUp">Recursos de Formación</h2>
            <div class="row">
                <div class="grid">
                    <div class="portfolio-item col-xs-12 col-sm-6 col-md-3">
                        <div class="portfolio-bg">
                            <div class="portfolio">
                                <div class="tt-overlay"></div>
                                <div class="links links-w"> <a href="https://codepen.io/jadigar/full/weXKam" target="_blank"><i class="fa fa-link"></i></a> <a href="#hangi" class="open-popup-link"><i class="fa fa-list"></i></a>
                                    <div id="hangi" class="white-popup mfp-hide">Minijuego de "el ahorcado" realizado integramente con BootStrap y VanillaJS como recurso de enseñanza
                                    </div>
                                </div><img src="assets/images/portfolio/proyecto9.jpg" alt="minijuego ahorcado">
                                <div class="portfolio-info">
                                    <h3>Hangi: El ahorcado</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-item col-xs-12 col-sm-6 col-md-3">
                        <div class="portfolio-bg">
                            <div class="portfolio">
                                <div class="tt-overlay"></div>
                                <div class="links links-w"> <a href="https://heipry.github.io/EjerciciosCSS" target="_blank"><i class="fa fa-link"></i></a> <a href="#css" class="open-popup-link"><i class="fa fa-list"></i></a>
                                    <div id="css" class="white-popup mfp-hide">Ejercicios de CSS correspondientes a las prácticas UF1303 del certificado profesional IFCD0110, desarrollados dentro del proyecto de Reskilling europeo para la mejora de competencias digitales, formación y actualización profesional.</div>
                                </div>
                                <img src="assets/images/portfolio/ejercicios-css.jpg" alt="practicas css">
                                <div class="portfolio-info">
                                    <h3>Prácticas UF1303 del certificado IFCD0110 </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-item col-xs-12 col-sm-6 col-md-3">
                        <div class="portfolio-bg">
                            <div class="portfolio">
                                <div class="tt-overlay"></div>
                                <div class="links links-w"> <a href="https://docs.google.com/forms/d/e/1FAIpQLSeRGKjJ0zpEMICSx8dx-_bQa_pWIYHdXHVvM59yUBgAbqEZGQ/viewform?usp=sharing&ouid=102080009925472955765" target="_blank"><i class="fa fa-link"></i></a> <a href="#WCAG" class="open-popup-link"><i class="fa fa-list"></i></a>
                                    <div id="WCAG" class="white-popup mfp-hide">Test de autoevaluación sobre criterios de accesibilidad y sus principios correspondientes(WCAG 2.1). Recurso de las prácticas MF0952 del certificado IFCD0110, desarrollado dentro del proyecto de Reskilling europeo para la mejora de competencias digitales, formación y actualización profesional.</div>
                                </div>
                                <img src="assets/images/portfolio/test-wcag.jpg" alt="test de autoevaluación">
                                <div class="portfolio-info">
                                    <h3>Test Autoevaluación MF0952 del certificado IFCD0110 </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-item col-xs-12 col-sm-6 col-md-3">
                        <div class="portfolio-bg">
                            <div class="portfolio">
                                <div class="tt-overlay"></div>
                                <div class="links links-w"> <a href="https://gist.github.com/Heipry/0c585a989953f46d56792cb2d93c0a15" target="_blank"><i class="fa fa-link"></i></a> <a href="#gist" class="open-popup-link"><i class="fa fa-list"></i></a>
                                    <div id="gist" class="white-popup mfp-hide">
                                        Listado práctico de atajos de teclado para <strong>Visual Studio Code</strong>, pensado para aumentar la productividad y agilizar el flujo de trabajo de desarrolladores y estudiantes.
                                        Un recurso con amplia aceptación en la comunidad, respaldado por más de 100 estrellas en GitHub Gist.
                                    </div>

                                </div>
                                <img src="assets/images/portfolio/gist.jpg" alt="Gist de atajos">
                                <div class="portfolio-info">
                                    <h3>Gist de atajos globales y personalizados de VSCode </h3>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="resume-title" style="margin-top:10px;">
                <h3 id="toggle-codelink">Ver más recursos</h3>
            </div>
            <div class="codelink text-center">
                <div>
                    <a href="https://github.com/users/Heipry/projects/1" target="_blank">
                        <img alt="GitHub icon" src="https://javierdiaz.com.es/assets/firma/gh.png">
                    </a>
                    <p>Github Pages</p>
                </div>
                <div>
                    <a href="https://codepen.io/collection/ZQYaJb" target="_blank">
                        <img alt="Codepen icon" src="https://javierdiaz.com.es/assets/firma/cp.png">
                    </a>
                    <p>Efectos</p>
                </div>
                <div>
                    <a href="https://codepen.io/collection/rBLxPK" target="_blank">
                        <img alt="Codepen icon" src="https://javierdiaz.com.es/assets/firma/cp.png" style="filter: brightness(0) saturate(100%) invert(61%) sepia(55%) saturate(2250%) hue-rotate(117deg) brightness(94%) contrast(101%);">
                    </a>
                    <p>Retos</p>
                </div>
                <div>
                    <a href="https://codepen.io/collection/EPyxzr" target="_blank">
                        <img alt="Codepen icon" src="https://javierdiaz.com.es/assets/firma/cp.png" style="filter: brightness(0) saturate(100%) invert(46%) sepia(69%) saturate(3202%) hue-rotate(180deg) brightness(102%) contrast(107%);">
                    </a>
                    <p>Ejemplos</p>
                </div>
                <div>
                    <a href=" https://octagonal-cashew-a93.notion.site/Autoevaluaciones-Google-Forms-24ef9cb236248067b8bbdf3be5e891f9" target="_blank">
                        <img alt="Google Forms icon" src="https://javierdiaz.com.es/assets/firma/gf.png">
                    </a>
                    <p>Autoevaluaciones</p>
                </div>
                <div>
                    <a href="https://gist.github.com/Heipry" target="_blank">
                        <img alt="Google Forms icon" src="https://javierdiaz.com.es/assets/firma/gist.png">
                    </a>
                    <p>Gists</p>
                </div>
            </div>

            <h3 class="subsection-title wow fadeInUp">Trabajos finalizados</h2>
                <div class="row">
                    <div class="grid">
                        <div class="portfolio-item col-xs-12 col-sm-6 col-md-4">
                            <div class="portfolio-bg">
                                <div class="portfolio">
                                    <div class="tt-overlay"></div>
                                    <div class="links links-w"> <a href="https://www.figma.com/proto/cQ7Uu3ZCcFWOVxFNv8SpeY/App-ShopSaver-(v2)" target="_blank"><i class="fa fa-link"></i></a> <a href="#shopsaver" class="open-popup-link"><i class="fa fa-list"></i></a>
                                        <div id="shopsaver" class="white-popup mfp-hide">Aplicación android de gestión de listas de la compra y búsqueda en supermercados online. Código disponible en <a href="https://github.com/Heipry/ShopSaver" target="_blank">https://github.com/Heipry/ShopSaver</a> </div>
                                    </div>
                                    <img src="assets/images/portfolio/pr-shopsaver.jpg" alt="image">
                                    <div class="portfolio-info">
                                        <h3>ShopSaver: Busca, compara y guarda</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-item col-xs-12 col-sm-6 col-md-4">
                            <div class="portfolio-bg">
                                <div class="portfolio">
                                    <div class="tt-overlay"></div>
                                    <div class="links links-w"> <a href="https://bierhaus.tienda/" target="_blank"><i class="fa fa-link"></i></a> <a href="#bierhaus" class="open-popup-link"><i class="fa fa-list"></i></a>
                                        <div id="bierhaus" class="white-popup mfp-hide">Página web multipropósito. Combina una tienda basada en PrestaShop con sistema de venta de packs, tarjetas regalo y entradas a eventos, con una página web corporativa con conexión a aplicaciones de entrega a domicilio y un backoffice implementado mediante PHP para la gestión de la secciópn "Nuestros grifos" para visualización en pantallas de gran tamaño
                                        </div>
                                    </div><img src="assets/images/portfolio/bierhaus.jpg" alt="image">
                                    <div class="portfolio-info">
                                        <h3>Bierhaus Odeon</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-item col-xs-12 col-sm-6 col-md-4">
                            <div class="portfolio-bg">
                                <div class="portfolio">
                                    <div class="tt-overlay">
                                    </div>
                                    <div class="links links-w"> <a href="https://www.enoturismo-ecuestre.com/" target="_blank"><i class="fa fa-link"></i></a> <a href="#enoturismo" class="open-popup-link"><i class="fa fa-list"></i></a>
                                        <div id="enoturismo" class="white-popup mfp-hide">Página web para servicio de corte turístico. Cambio de logotipos e identidad corporativa, rediseño e implementación de página web mediante WordPress, internacionalización y presencia en internet.
                                        </div>
                                    </div><img src="assets/images/portfolio/enoturismo.jpg" alt="image">
                                    <div class="portfolio-info">
                                        <h3>Enoturismo Ecuestre</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </div>
    </section>
<?php
            }
?>

<section class="hire-section text-center" data-stellar-vertical-offset="50" data-stellar-background-ratio="0.2">
    <div class="hire-section-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Estoy listo para que hablemos</h2>
                    <a href="#contact" class="btn btn-default">Contactar</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="contact" class="contact-section section-padding">
    <div class="container">
        <h2 class="section-title wow fadeInUp">Contactar</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="contact-form">
                    <strong>Envía un mensaje</strong>
                    <form name="contact-form" id="contact-form" method="post" action="assets/php/sendemail.php">
                        <div class="form-group">
                            <label for="InputName1">Nombre</label>
                            <input type="text" name="name" class="form-control" id="InputName1" required>
                        </div>
                        <div class="form-group">
                            <label for="InputEmail1">Email</label>
                            <input type="email" name="email" class="form-control" id="InputEmail1" required>
                        </div>
                        <div class="form-group">
                            <label for="InputSubject">Asunto</label>
                            <input type="text" name="subject" class="form-control" id="InputSubject">
                        </div>
                        <div style="display: none;">
                            <label>Este es un campo de control. Si lo ves, pasa de él.</label>
                            <input type="text" name="required">
                        </div>

                        <div class="form-group">
                            <label for="numero">Resuelve la operacion <?php echo $_SESSION["num1"]; ?> + <?php echo $_SESSION["num2"]; ?>:</label>
                            <input type="text" name="numero" class="form-control" id="numero" required>
                        </div>
                        <div class="form-group">
                            <label for="InputTextarea">Mensaje</label>
                            <textarea name="message" class="form-control" id="InputTextarea" rows="5" required></textarea>
                        </div>
                        <button class="g-recaptcha btn btn-primary"
                            data-sitekey="6Lcab7UpAAAAAM8Czt9NQHDT4ao8u_261Ovp4PSl"
                            data-callback='onSubmit'
                            data-action='submit'>Enviar mensaje</button>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row center-xs">
                    <div class="col-sm-6">
                        <i class="fa fa-map-marker"></i>
                        <address>
                            <strong>Dirección</strong>
                            C/ Joan Miró<br>
                            Arnedo, La Rioja<br>
                        </address>
                    </div>
                    <div class="col-sm-6">
                        <i class="fa fa-mobile"></i>
                        <div class="contact-number">
                            <strong>Teléfono y WhatsApp</strong>
                            <a href="https://wa.me/34627496505?ext=Hola%20Javier%20he%20leido%20tu%20curriculum,%20" target="_blank">627 496 505</a>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="short-info wow fadeInUp">
                            <?php if ($job === 'developer') {
                                // developer
                            ?>
                                <h3>¿Buscas alguien que pueda diseñar construir y subirte una web?</h3>
                                <p>Si lo que necesitas es alguien que te haga una, o varias, páginas web, quiero que sepas que también has llegado a tu destino.<br> Yo podría decirte que domino perfectamente CMS´s como Prestashop o WordPress además de HTML5 y CSS (por eso estás viendo esta página) sin embargo creo que lo mejor es que te des una vuelta por <a href="#works">mi portfolio</a> y verás lo que he estado haciendo en estos últimos tiempos. Tómalo como un pequeño apunte, no está todo, pero te dará una idea. Saludos </p>

                            <?php
                            } elseif ($job === 'manager') {
                                // manager                
                            ?>
                                <h3>¿Buscas alguien que pueda ayudarte con tu proyecto? </h3>
                                <p>Sé que mi perfil es bastante ecléptico<br> Podría decirte que soy maquetador, o programador, o experto en ecommerce. A lo largo de mi carrera he hecho muchas cosas. Puedes comprobar <a href="#works">mi portfolio</a> y verás lo que he estado haciendo en estos últimos tiempos. Sin embargo, puedo decirte que a pesar de mi perfil técnico, lo que mejor se me da es coordinar un proyecto. Así que si lo que necesitas es una persona comprometida con su trabajo, quí me tienes. Saludos </p>
                            <?php
                            } else {
                                // Default case (empty or other value)
                            ?>
                                <h3>¿Buscas a un profesional con sólida experiencia técnica que también sea capaz de formar y guiar a otros en el ámbito del desarrollo web y la gestión digital? </h3>
                                <p>Mi trayectoria me ha permitido acumular un amplio conocimiento como desarrollador, gestor de proyectos y especialista en eCommerce. Puedes explorar <a href="#works">mi portfolio</a> para ver los resultados de mi trabajo en estos últimos años. <br>Actualmente, mi enfoque profesional va más allá de lo puramente técnico: me dedico a <b>compartir conocimientos, estructurar contenidos de calidad y facilitar el aprendizaje en entornos digitales.</b><br> Si necesitas a alguien con profunda experiencia en el sector tecnológico, habilidades pedagógicas demostradas para impartir formación práctica y efectiva, y la capacidad de acompañar a los alumnos en su desarrollo profesional, soy la persona que buscas.<br> Estoy a tu disposición</p>
                            <?php
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="footer-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="copyright text-center">
                    <p>&copy; <?php echo date('Y'); ?> Javier Díaz. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="scroll-up">
    <a href="#home"><i class="fa fa-angle-up"></i></a>
</div>

<script src="assets/js/jquery.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.stellar.min.js"></script>
<script src="assets/js/jquery.sticky.js"></script>
<script src="assets/js/smoothscroll.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/jquery.countTo.js"></script>
<script src="assets/js/jquery.inview.min.js"></script>
<script src="assets/js/jquery.easypiechart.js"></script>
<script src="assets/js/jquery.shuffle.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/jquery.fitvids.js"></script>
<script src="assets/js/scripts.js"></script>
</body>

</html>