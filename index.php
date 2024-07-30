<?php session_start(); $_SESSION["num1"] = rand(0,10); $_SESSION["num2"] = rand(0,10); ?>
<!DOCTYPE html>
<html lang=es>
<head>
<meta charset=UTF-8>
<meta name=viewport content="width=device-width, initial-scale=1.0">
<meta name=description content="vCard de Javier Díaz Garrido">
<meta name=author content="Javier Díaz">
<title>Yo soy Javier</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel=stylesheet type=text/css>
<link href=assets/bootstrap/css/bootstrap.min.css rel=stylesheet media=screen>
<link href=https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css rel=stylesheet media=screen>

<link href=assets/css/animate.css rel=stylesheet>
<link href=assets/css/magnific-popup.css rel=stylesheet>
<link href=assets/css/style.css rel=stylesheet media=screen>
<link href=assets/css/responsive.css rel=stylesheet>
<!--[if lt IE 9]>
<script src=https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js></script>
<script src=https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js></script>
<![endif]-->
<link rel="shortcut icon" href=assets/images/ico/favicon.png>
<link rel=apple-touch-icon-precomposed sizes=144x144 href=assets/images/ico/apple-touch-icon-144-precomposed.png>
<link rel=apple-touch-icon-precomposed sizes=114x114 href=assets/images/ico/apple-touch-icon-114-precomposed.png>
<link rel=apple-touch-icon-precomposed sizes=72x72 href=assets/images/ico/apple-touch-icon-72-precomposed.png>
<link rel=apple-touch-icon-precomposed href=assets/images/ico/apple-touch-icon-57-precomposed.png>
<script src="https://www.google.com/recaptcha/api.js"></script>
<script>
   function onSubmit(token) {
    var button = document.createElement('input');
	button.type = 'hidden';
	button.name = 'recaptcha_token';
	button.value = token;
    var form =document.getElementById("contact-form");
    form.appendChild(button);
     form.submit();
   }
 </script>
</head>
<body>
<section id=home class=tt-fullHeight data-stellar-vertical-offset=50 data-stellar-background-ratio=0.2>
<div class=intro>
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

<h1><span>Web</span> Project Manager</h1>
<div class="typewriter">
    <p class=line1>Profesional dedicado a la gestión y creación de proyectos IT</p> 
    <p class=line2>También administrador de eCommerce y</p>
    <p class=line3>desarrollador PHP especializado en PrestaShop.</p>
</div>
<div class=social-icons>
<ul class=list-inline>
<li><a href=https://www.linkedin.com/in/javier-diaz-garrido/ target=_blank><i class="fa fa-linkedin"></i></a></li>
<li><a href=https://twitter.com/heipry target=_blank><i class="fa-brands fa-x-twitter"><svg xmlns="https://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
  <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
</svg></i></a></li>

<li><a href="https://wa.me/34627496505?text=Hola%20Javier%20he%20leido%20tu%20curriculum,%20" target=_blank><i class="fa fa-whatsapp"></i></a></li>
<li><a href="mailto:heipry@gmail.com?Subject=Hemos%20visto%20tu%20curriculum"><i class="fa fa-envelope"></i>
</a></li>
</ul>
</div>
</div>
<div class=mouse-icon>
<div class=wheel></div>
</div>
</section>
<header class=header>
<nav class="navbar navbar-custom">
<div class=container>
<div class=navbar-header>
<button type=button class=navbar-toggle data-toggle=collapse data-target=#custom-collapse>
<span class=sr-only>Navegacion</span>
<span class=icon-bar></span>
<span class=icon-bar></span>
<span class=icon-bar></span>
</button>
<a class=navbar-brand href=index.html><img src=assets/images/logo.png alt></a>
</div>
<div class="collapse navbar-collapse" id=custom-collapse>
<ul class="nav navbar-nav navbar-right">
<li><a href=#home>Home</a></li>
<li><a href=#about>Sobre mi</a></li>
<li><a href=#resume>Resumen</a></li>
<li><a href=#cert>Certificaciones</a></li>
<li><a href=#skills>Habilidades</a></li>
<li><a href=#works>Trabajos</a></li>
<li><a href=#contact>Contacto</a></li>
</ul>
</div>
</div>
</nav>
</header>
<!-- About -->
<section id=about class="about-section section-padding">
<div class=container>
<h2 class="section-title wow fadeInUp">Sobre mi</h2>
<div class=row>
<div class="col-md-5 col-md-push-8">
<div class="about">
        <div class="inner">          
          
          <div class="about-con typewritter">
            <ul>
              <li class="wow contact1" >Javier Díaz</li>
              <li class="wow contact1">Email: <a href="mailto:heipry@gmail.com">heipry@gmail.com</a></li>
              <li class="wow contact2">Whatsapp: &nbsp;<a href="https://wa.me/34627496505?ext=Hola%20Javier%20he%20leido%20tu%20curriculum,%20" target="_blank"><i class="fa fa-whatsapp"></i> </a> </li>
              <!--li>Fecha de nacimiento: 24 de Mayo de 1981</li-->
              <li class="wow contact3">Localidad: Arnedo (La Rioja)</li>
              <li class="wow contact4">Nacionalidad: Española</li>
            </ul>            
            <a href="https://javierdiaz.com.es/assets/images/Javier_Diaz_CV_Europass.pdf" class="bbutton">DESCARGAR MI CV</a> </div>
        </div>
        
</div>
<ul class=list-check>
<li>Experiencia en gestión de proyectos web y administración de tiendas online</li>
<li>Conocimientos de programación en lenguajes como JavaScript, PHP o Java</li>
<li>Desarrollo y personalización de CMSs (WordPress, PrestaShop,...)</li>
<li>Amplios conocimientos de desarrollo web: HTML5, CSS3, JavaScript, PHP</li>
<li>Gestión de plantillas de personal</li>
<li>Experiencia en atención al cliente</li>

</ul>
</div>
<div class="col-md-7 col-md-pull-4">
<div class="short-info wow fadeInUp">
<h3>HOY EN DÍA</h3>
<p>Me siento cómodo en la gestión de proyectos web, ya sea desarrollando sites optimizados desde cero, actualizándolos para el día a día, o gestionando el mantenimiento continuo para maximizar ventas u otros objetivos.<p><br>
</div>
<div class="short-info wow fadeInUp">
<h3>¿ De dónde vengo ?</h3>
<p>Empecé mi carrera profesional en la oficina de una pequeña empresa de cerramientos donde fui ascendiendo hasta tener a mi cargo un equipo de más de 10 personas. Como siempre me gustó la informática ya en este puesto me di cuenta de cuál era mi camino. <br>
Salí de allí para montar mi propio eCommerce de cerramientos. Una cosa llevó a la otra y, aún en paralelo con mi pequeña tienda, empecé a ofrecer mis habilidades de creación y gestión de webs a clientes y proveedores. Éste fue un giro importante para mi carrera que me obligo a reciclarme. Completé un ciclo formativo de grado superior en Desarrollo de Aplicaciones Web, conseguí el título de técnico superior y de administrador de servicios de internet y desde entonces no he parado de formarme. Acabo de terminar otro ciclo de grado superior, esta vez el de Desarrollo de Aplicaciones Multiplataforma.<br>
He trabajado como desarrollador web en una agencia digital donde me especialicé en la programación PHP. Después estuve más de tres años como director de tecnología de una empresa con un eCommerce multicanal basado en PrestaShop donde aprendí sobre la personalización y desarrollo de este CMS y sobre la venta en marketplaces como Amazon.<br>
Hasta hace unos días, estuve dirigiendo el desarrollo de proyectos web en la empresa en la que trabajaba, seguía ligado a la personalización de PrestaShop aunque también desarrollábamos con WordPress y otros CMS.</p>

</div>
<div class=my-signature>
<img src=assets/images/sign.png alt>
</div>
<div class=download-button>
<a class="btn btn-info btn-lg" href=#contact><i class="fa fa-paper-plane"></i>Enviarme un mensaje</a>
<a class="btn btn-primary btn-lg" href=assets/images/Javier_Diaz_CV_Europass.pdf target="_blank"><i class="fa fa-download"></i>Descargar mi cv</a>
</div>
</div>
</div>
</div>
</section>
<section id=video class=video-section>
<div class=tf-bg-overlay>
<div class=container>
<div class=control>
<div class="video-intro text-center">
<button type=button class=play-trigger data-toggle=modal data-target=#tour-video><i class="fa fa-play"></i></button>
<h2>Video Sobre Mi</h2>
</div>
<div class="modal modal-video" id=tour-video>
<div class="modal-dialog modal-lg">
<div class=modal-content>
<div class=modal-header>
<button type=button class=close data-dismiss=modal aria-hidden=true>&times;</button>
<h4 class=modal-title>Video Presentación</h4>
</div>
<div class=modal-body>
<div class=video-container>
<iframe width=560 height=315 src="https://www.youtube.com/embed/o9WmVthjTnI?rel=0"></iframe>
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
<section id=resume class="resume-section section-padding">
<div class=container>
<h2 class="section-title wow fadeInUp">Resumen</h2>
<div class=row>
<div class=col-md-12>
<div class=resume-title>
<h3>Educación</h3>
</div>
<div class=resume>
<ul class=timeline>
<li>
<div class=posted-date>
<span class=month>2015-2017</span>
</div>
<div class="timeline-panel wow fadeInUp">
<div class=timeline-content>
<div class=timeline-heading>
<h3>Diplomado en desarrollo de sitios web y aplicaciones móviles - <a class="image-link importante" href="assets/images/diplomadoweb.jpg"><i class="fa fa-search-plus"></i></a></h3>
<span><a href="https://dgair.sep.gob.mx/cete" target="_blank">Centro de Capacitación Televisiva (09DBT002), Mexico</a></span>
</div>
<div class=timeline-body>
<p>Impartido de manera telemática por la fundación Carlos Slim y el Sistema Educativo Nacional de Mexico, acredité mis competencias como desarrollador web y de aplicaciones móviles mediante este título equivalente a 73 créditos académicos y correspondiente al nivel 6 de la Clasificación Internacional Normalizada de Educación (Grado Universitario).</p>
</div>
</div>
</div>
</li>

<li class=timeline-inverted>
<div class=posted-date>
<span class=month>2017</span>
</div>
<div class="timeline-panel wow fadeInUp">
<div class=timeline-content>
<div class=timeline-heading>
<h3>Administración de servicios de Internet (IFCT0509) - <a class="image-link importante" href="assets/images/certificadoASI.jpg"><i class="fa fa-search-plus"></i></a></h3>
<span><a href="https://www.adesos.org/" target="_blank">ADESOS, entidad colaboradora de OPEA, Calahorra, La Rioja </a></span>
</div>
<div class=timeline-body>
<p>Conseguí el certificado de profesionalidad que acredita mi disponibilidad como administrador de servicios de Internet, entornos Web y administrador de servicios de mensajería electrónica (WEBMASTER) así como técnico de sistemas de Internet.</p>
</div>
</div>
</div>
</li>
<li>
<div class=posted-date>
<span class=month>2017-2019</span>
</div>
<div class="timeline-panel wow fadeInUp">
<div class=timeline-content>
<div class=timeline-heading>
<h3>CFGS Desarrollo de aplicaciones WEB - <a class="image-link importante" href="assets/images/diploma-daw.jpg"><i class="fa fa-search-plus"></i></a></h3>
<span><a href="https://directorio.educa.jcyl.es/m/es/centros/2012/1-42002744-virgen-del-espino" target="_blank">IES Virgen del Espino, Soria, modalidad Online</a></span>
</div>
<div class=timeline-body>
<p>Estudios del Ciclo Formativo de Grado Superior de desarrollo de aplicaciones Web en modalidad online, titulación oficial y homologada que me permite trabajar como desarrollador multimedia y de aplicativos para entornos web. </p>
</div>
</div>
</div>
</li>

<li class=timeline-inverted>
<div class=posted-date>
<span class=month>2021-2024</span>
</div>
<div class="timeline-panel wow fadeInUp">
<div class=timeline-content>
<div class=timeline-heading>
<h3>CFGS Desarrollo de aplicaciones multiplataforma - <a class="image-link importante" href="assets/images/diploma-dam.jpg"><i class="fa fa-search-plus"></i></a></h3>
<span><a href="https://iescomercio.com/" target="_blank">IES Comercio, Logroño, modalidad Online </a></span>
</div>
<div class=timeline-body>
<p>Titulación oficial y homologada. Obtuve la <b>Matrícula de Honor</b>, destacando por mi rendimiento académico. Esta formación me capacita para trabajar como desarrollador multimedia y de aplicaciones informáticas para la gestión empresarial y de negocio, tanto en propósitos generales como en el ámbito del entretenimiento y la informática móvil.

</p>
</div>
</div>
</div>
</li>
</ul>
</div>
</div>
</div>
<div class=row>
<div class=col-md-12>
<div class=resume-title>


<h3>Experiencia</h3>
</div>
<div class=resume>
    <ul class=timeline>
        <li class=posted-date>
            <div class=posted-date>
                <span class=month>2021-2024</span>
            </div>
            <div class="timeline-panel wow fadeInUp">
                <div class=timeline-content>
                    <div class=timeline-heading>
                        <h3>Web Project Manager</h3>
                        <span>Proyecto Online, Logroño, La Rioja</span>
                    </div>
                    <div class=timeline-body>
                        <p>Gerente de proyectos web. Me encargo de liderar un equipo multidisciplinar para desarrollo
                            web que incluía las áreas de diseño, programación y maquetación. Estábamos especializados en el desarrollo bajo PrestaShop, WordPress y otros CMSs con diseño personalizado de marca, desarrollo de módulos, etc, dando un servicio 360º al añadir la gestión de redes sociales, SEO y SEM.
                        </p>
                    </div>
                </div>
            </div>
        </li>
        <li class=timeline-inverted>
            <div class=posted-date>

                <span class=month>2018-2021</span>
            </div>
            <div class="timeline-panel wow fadeInUp">
                <div class=timeline-content>
                    <div class=timeline-heading>
                        <h3>Ecommerce Manager</h3>
                        <span>TapasRioja (Berlin Packaging), Rincón de Soto, La Rioja</span>
                    </div>
                    <div class=timeline-body>
                        <p>En esta etapa estuve administrando, actualizando y gestionando un ecommerce que solo en web
                            tenía un volumen de ventas de más de 100 pedidos diarios. Hay que tener en cuenta que una
                            tienda web con este volumen necesita un rediseño y actualización continuo. Entre mis
                            funciones también se incluía el soporte técnico a los usuarios, la gestion de la presencia
                            en redes sociales y la venta en Marketplaces de la empresa. Mi etapa aquí comprendía también
                            las funciones de director de tecnología de la delegación, con gestión de la red interna,
                            servidor y un ERP distribuido entre varios puestos de trabajo.</p>
                    </div>
                </div>
            </div>
        </li>
        <li class=posted-date>
            <div class=posted-date>
                <span class=month>2017</span>
            </div>
            <div class="timeline-panel wow fadeInUp">
                <div class=timeline-content>
                    <div class=timeline-heading>
                        <h3>Contract Web Developer</h3>
                        <span class= multiline>Si4Ti, Logroño, La Rioja</span>
                        <span>Procesyva SL, Calahorra, La Rioja</span>
                    </div>
                    <div class=timeline-body>
                        <p>En 2017 pasé a trabajar en varias agencias digitales como desarrollador web independiente y gestor externo de proyectos. El
                            trabajo comprendía todo lo que se puede esperar de este puesto: manejo de lenguajes de
                            marcas, HTML y CSS, lenguajes de programación, sobre todo PHP y JavaScript, manejo de CMSs
                            como WordPress y PrestaShop, así como la comunicación con clientes o gestión de servidores de DNS y dominios.
                        </p>
                    </div>
                </div>
            </div>
        </li>
        <li class=timeline-inverted>
            <div class=posted-date>
                <span class=month>2015-2017</span>
            </div>
            <div class="timeline-panel wow fadeInUp">
                <div class=timeline-content>
                    <div class=timeline-heading>
                        <h3>Diseñador y gestor web</h3>
                        <span>Jadigar Web Services, Arnedo, La Rioja</span>
                    </div>
                    <div class=timeline-body>
                        <p>En paralelo a la empresa de venta por internet, empecé a ofrecer mis servicios como diseñador
                            de páginas web y gestor de redes sociales a otras empresas, convirtiéndome en autónomo bajo
                            la marca Jadigar Web Services. En este momento consideré necesario ampliar mi formación
                            online. Así me convirtí en partner de Google para Adwords y publicidad para móviles así como
                            socio certificado de Google Analytics.</p>
                    </div>
                </div>
            </div>
        </li>
        <li class=posted-date>
            <div class=posted-date>
                <span class=month>2012-2015</span>
            </div>
            <div class="timeline-panel wow fadeInUp">
                <div class=timeline-content>
                    <div class=timeline-heading>
                        <h3>Propietario de empresa</h3>
                        <span>Carpintería Caraldiaz, Arnedo, La Rioja</span>
                    </div>
                    <div class=timeline-body>
                        <p>Monté mi propia empresa en la que pivoté el modelo de negocio desde la fabricación y montaje local a
                            la venta en internet. La joven empresa tuvo que fabricar una infraestructura digital desde
                            cero con la que adquirí una experiencia en aplicaciones web, marketing digital y legislación
                            en la red que me dio la oportunidad de conocer el mundo del desarrollo web de manera
                            profesional.
                        </p>
                    </div>
                </div>
            </div>
        </li><!--
        <li class=timeline-inverted>
            <div class=posted-date>
                <span class=month>2008-2012</span>
            </div>
            <div class="timeline-panel wow fadeInUp">
                <div class=timeline-content>
                    <div class=timeline-heading>
                        <h3>Gerente de empresa</h3>
                        <span>Carpintería Metálica Ancar SL, Arnedo, La Rioja</span>
                    </div>
                    <div class=timeline-body>
                        <p>Tras la jubilación del antiguo gerente asumí la dirección completa de la empresa. En esta
                            etapa modernizamos los procesos de la empresa y conseguimos la inclusión de la etiqueta CE
                            de nuestros productos. Además la empresa inició una emergente aunque agresiva campaña en
                            Internet y redes sociales de la que debí ocuparme personalmente. </p>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class=posted-date>
                <span class=month>2003-2008</span>
            </div>
            <div class="timeline-panel wow fadeInUp">
                <div class=timeline-content>
                    <div class=timeline-heading>
                        <h3>Responsable oficina</h3>
                        <span>Carpintería Metálica Ancar SL, Arnedo, La Rioja</span>
                    </div>
                    <div class=timeline-body>
                        <p>En esta empresa llegué a dirigir un grupo de 10 personas. Planificaba y ejecutaba el trabajo
                            a partir de bocetos, dibujos, especificaciones y pedidos de trabajo. Aqui empecé a dedicarme
                            a la atención al público ya que el puesto tenía un marcado perfil de ventas, tanto en
                            persona como por medios telemáticos. Adicionalmente debía cuidar la red e instalaciones
                            informáticas de la oficina.</p>
                    </div>
                </div>
            </div>
        </li>-->
    </ul>
</div>
</div>
</div>
</div>
</section>
<section id=cert class="works-section section-padding">
<div class=container>
<h2 class="section-title wow fadeInUp">Certificados</h2>
<ul class=list-inline id=filter>
    <?php
    include_once 'back/conexion/conexion.inc.php';
    $categorias = ['front', 'back', 'e-com', 'dire', 'otros'];
    ?>

<li><a class=active id="categoria_mostrada" data-group=<?php echo $categorias[3] ?>>Proyectos</a></li>
<li><a data-group=<?php echo $categorias[1] ?>>Back End</a></li>
<li><a data-group=<?php echo $categorias[2] ?>>E-commerce</a></li>
<li><a data-group=<?php echo $categorias[0]; ?>>Front/CMS</a></li>
<li><a data-group=<?php echo $categorias[4] ?>>Otros</a></li>
<li><a data-group=todos>Todos</a></li>
</ul>
<?php 
// RECIBIR
    $gsent = $pdo->prepare("SELECT * FROM jdg_titulos where visible = 1");
    $gsent->execute();
    $resultado = $gsent->fetchAll();
?>
<div class=row>
<div id=grid>
    <?php foreach ($resultado as $dato): ?>
    <div class="portfolio-item col-xs-4 col-sm-2 col-md-2" data-groups='["<?php echo $dato['categoria']; ?>","todos"]'>
    <div class=portfolio-bg>
    <div class=portfolio>
    <div class=tt-overlay></div>
    <div class=links> <a class=image-link href=assets/images/works-big/<?php echo $dato['foto']; ?>><i class="fa fa-search-plus"></i></a> <a href=#popup<?php echo $dato['id']; ?> class=open-popup-link><i class="fa fa-quote-right"></i></a>
    <div id=popup<?php echo $dato['id']; ?> class="white-popup mfp-hide"> <?php echo $dato['descripcion']; ?></div>
</div>
<img src=assets/images/works/<?php echo $dato['foto']; ?> alt=<?php echo $dato['foto']; ?>>
<div class="text-center"> <p><?php echo $dato['titulo']; ?></p> </div>
</div>
</div>
</div>
<?php endforeach; ?>
</div>

<div class=row>
<div class="col-xs-6 col-md-2 col-md-offset-5 col-xs-offset-3" >
    <button type=button class="btn btn-primary" data-toggle=modal data-target=#lista>Ver lista completa</button>
</div>
</div>

</div>
</div>
</section>

<div class="modal" id=lista>
<div class="modal-dialog modal-lg">
<div class=modal-content>
<div class=modal-header>
<button type=button class=close data-dismiss=modal aria-hidden=true>&times;</button>
<h4 class=modal-title>Lista certificaciones</h4>
</div>
<div class=modal-body>
    <?php 
// RECIBIR TODO
    $gsent = $pdo->prepare("SELECT * FROM jdg_titulos");
    $gsent->execute();
    $resultado = $gsent->fetchAll();
    foreach ($resultado as $dato):
?>
<ul class="media-list">
  <li class="media">
    <div class="pull-left">

    <a class=image-link href=assets/images/works-big/<?php echo $dato['foto']; ?>>
        <img class="media-object pad" src="assets/images/works/<?php echo $dato['foto'];?>" alt="<?php echo $dato['foto'];?>">
        </a> 
    </div>
    <div class="media-body">
      <p class="media-heading"><?php echo $dato['descripcion'];?></p>

    </div>
  </li>
</ul>
<?php endforeach; ?>
</div>
</div>
</div>
</div>


<section id=skills class="skills-section section-padding">
<div class=container>
<h2 class="section-title wow fadeInUp">Habilidades</h2>
<div class=row>
<div class=col-md-6>
<div class=skill-progress>
<div class=skill-title><h3>HTML y CSS</h3></div>
<div class=progress>
<div class="progress-bar six-sec-ease-in-out" role=progressbar aria-valuenow=85 aria-valuemin=0 aria-valuemax=100><span>85%</span>
</div>
</div>
</div>
<div class=skill-progress>
<div class=skill-title><h3>Marketing digital</h3></div>
<div class=progress>
<div class="progress-bar six-sec-ease-in-out" role=progressbar aria-valuenow=70 aria-valuemin=0 aria-valuemax=100><span>70%</span>
</div>
</div>
</div>
<div class=skill-progress>
<div class=skill-title><h3>Programación PHP</h3></div>
<div class=progress>
<div class="progress-bar six-sec-ease-in-out" role=progressbar aria-valuenow=80 aria-valuemin=0 aria-valuemax=100><span>80%</span>
</div>
</div>
</div>
</div>
<div class=col-md-6>
<div class=skill-progress>
<div class=skill-title><h3>Desarrollo web</h3></div>
<div class=progress>
<div class="progress-bar six-sec-ease-in-out" role=progressbar aria-valuenow=90 aria-valuemin=0 aria-valuemax=100><span>90%</span>
</div>
</div>
</div>
<div class=skill-progress>
<div class=skill-title><h3>Ecommerce</h3></div>
<div class=progress>
<div class="progress-bar six-sec-ease-in-out" role=progressbar aria-valuenow=95 aria-valuemin=0 aria-valuemax=100><span>95%</span>
</div>
</div>
</div>
<div class=skill-progress>
<div class=skill-title><h3>Gestión de proyectos</h3></div>
<div class=progress>
<div class="progress-bar six-sec-ease-in-out" role=progressbar aria-valuenow=95 aria-valuemin=0 aria-valuemax=100><span>95%</span>
</div>
</div>
</div>
</div>
</div>
<div class="skill-chart text-center">
<h3>Otras características</h3>
</div>
<div class="row more-skill text-center">
<div class="col-xs-12 col-sm-4 col-md-2">
<div class=chart data-percent=91 data-color=e74c3c>
<span class=percent></span>
<div class=chart-text>
<span>Experiencia como supervisor
</span>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-4 col-md-2">
<div class=chart data-percent=93 data-color=2ecc71>
<span class=percent></span>
<div class=chart-text>
<span>Proactividad</span>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-4 col-md-2">
<div class=chart data-percent=81 data-color=3498db>
<span class=percent></span>
<div class=chart-text>
<span>Atención al cliente</span>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-4 col-md-2">
<div class=chart data-percent=83 data-color=3498db>
<span class=percent></span>
<div class=chart-text>
<span>Resolución de problemas</span>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-4 col-md-2">
<div class=chart data-percent=74 data-color=3498db>
<span class=percent></span>
<div class=chart-text>
<span>Aptitudes de comunicación</span>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-4 col-md-2">
<div class=chart data-percent=98 data-color=3498db>
<span class=percent></span>
<div class=chart-text>
<span>Adaptabilidad</span>
</div>
</div>
</div>
</div>
</div>
</section>

<section id=works class="works-section section-padding">
<div class=container>
<h2 class="section-title wow fadeInUp">Trabajos realizados</h2>
<div class=row>
<div id=grid>
<div class="portfolio-item col-xs-12 col-sm-6 col-md-4" >
<div class=portfolio-bg>
<div class=portfolio>
<div class=tt-overlay></div>
<div class="links links-w"> <a href=https://brunocalzada.com/ target="_blank"><i class="fa fa-link"></i></a> <a href=#bruno class=open-popup-link><i class="fa fa-list"></i></a>
<div id=bruno class="white-popup mfp-hide">Página de presentación para profesional independiente. Realizada sobre WordPress+Elementor con elementos JavaScript personalizados</div>
</div>
<img src=assets/images/portfolio/pr-bruno.jpg alt=image>
<div class=portfolio-info> <h3>Bruno Calzada</h3>
</div>
</div>
</div>
</div>

<div class="portfolio-item col-xs-12 col-sm-6 col-md-4">
<div class=portfolio-bg>
<div class=portfolio>
<div class=tt-overlay></div>
<div class="links links-w"> <a href=https://heipry.github.io/cmroma/ target="_blank"><i class="fa fa-link"></i></a> <a href=#roma class=open-popup-link><i class="fa fa-list"></i></a>
<div id=roma class="white-popup mfp-hide">Pagina corporativa con scroll vertical y las secciones más comunes (Nosotros, Servicios, Galeria, Contacto) realziada sin CMS</div>
</div>
<img src=assets/images/portfolio/proyecto3.jpg alt=image>
<div class=portfolio-info> <h3>C.M. Roma</h3> </div>
</div>
</div>
</div>


<div class="portfolio-item col-xs-12 col-sm-6 col-md-4" >
<div class=portfolio-bg>
<div class=portfolio>
<div class=tt-overlay></div>
<div class="links links-w"> <a href=https://coplasem.com/ target="_blank"><i class="fa fa-link"></i></a> <a href=#coplasem class=open-popup-link><i class="fa fa-list"></i></a>
<div id=coplasem class="white-popup mfp-hide">Proyecto 360 de Ecommerce basado en PrestaShop para empresa de venta de material para embalaje. Theme modificado, modulos personalizados, conexion con ERP, etc...</div>
</div>
<img src=assets/images/portfolio/pr-coplasem.jpg alt=image>
<div class=portfolio-info> <h3>Coplasem, Más que Embalaje</h3>
</div>
</div>
</div>
</div>
<div class="portfolio-item col-xs-12 col-sm-6 col-md-4" >
<div class=portfolio-bg>
<div class=portfolio>
<div class=tt-overlay></div>
<div class="links links-w"> <a href=https://www.figma.com/proto/cQ7Uu3ZCcFWOVxFNv8SpeY/App-ShopSaver-(v2) target="_blank"><i class="fa fa-link"></i></a> <a href=#shopsaver class=open-popup-link><i class="fa fa-list"></i></a>
<div id=shopsaver class="white-popup mfp-hide">Aplicación android de gestión de listas de la compra y búsqueda en supermercados online. Código disponible en <a href="https://github.com/Heipry/ShopSaver" target="_blank">https://github.com/Heipry/ShopSaver</a> </div>
</div>
<img src=assets/images/portfolio/pr-shopsaver.jpg alt=image>
<div class=portfolio-info> <h3>ShopSaver: Busca, compara y guarda</h3>
</div>
</div>
</div>
</div>
<div class="portfolio-item col-xs-12 col-sm-6 col-md-4">
<div class=portfolio-bg>
<div class=portfolio>
<div class=tt-overlay></div>
<div class="links links-w"> <a href=https://codepen.io/jadigar/full/weXKam target="_blank"><i class="fa fa-link"></i></a> <a href=#hangi class=open-popup-link><i class="fa fa-list"></i></a>
<div id=hangi class="white-popup mfp-hide">Minijuego de "el ahorcado" realizado integramente con BootStrap y VanillaJS
</div>
</div><img src=assets/images/portfolio/proyecto9.jpg alt=image>
<div class=portfolio-info> <h3>Hangi: El ahorcado</h3>
</div>
</div>
</div>
</div>
<div class="portfolio-item col-xs-12 col-sm-6 col-md-4">
<div class=portfolio-bg>
<div class=portfolio>
<div class=tt-overlay>
</div>
<div class="links links-w"> <a href=https://github.com/Heipry/posql target="_blank"><i class="fa fa-link"></i></a> <a href=#poquery class=open-popup-link><i class="fa fa-list"></i></a>
<div id=poquery class="white-popup mfp-hide">Módulo PrestaShop para ejecutar consultas SQL personalizadas con fecha de inicio y de fin.
</div>
</div><img src=assets/images/portfolio/poQuery.jpg alt=image>
<div class=portfolio-info> <h3>Addon PoQuery for PrestaShop</h3>
</div>
</div>
</div>
</div>


<div class="portfolio-item col-xs-12 col-sm-6 col-md-4" >
<div class=portfolio-bg>
<div class=portfolio>
<div class=tt-overlay></div>
<div class="links links-w"> <a href=https://www.inacer.es/ target="_blank"><i class="fa fa-link"></i></a> <a href=#inacer class=open-popup-link><i class="fa fa-list"></i></a>
<div id=inacer class="white-popup mfp-hide">Proyecto de digitalización para asociación regional con diseño de imagen, desarrollo de web mediante WordPress+Elementor y plan de capacitación para gestión de redes</div>
</div>
<img src=assets/images/portfolio/inacer.jpg alt=image>
<div class=portfolio-info> <h3>Inacer, Asociación Alfarería Y Cerámica De La Rioja</h3>
</div>
</div>
</div>
</div>
<div class="portfolio-item col-xs-12 col-sm-6 col-md-4">
<div class=portfolio-bg>
<div class=portfolio>
<div class=tt-overlay></div>
<div class="links links-w"> <a href=https://bierhaus.tienda/ target="_blank"><i class="fa fa-link"></i></a> <a href=#bierhaus class=open-popup-link><i class="fa fa-list"></i></a>
<div id=bierhaus class="white-popup mfp-hide">Página web multipropósito. Combina una tienda basada en PrestaShop con sistema de venta de packs, tarjetas regalo y entradas a eventos, con una página web corporativa con conexión a aplicaciones de entrega a domicilio y un backoffice implementado mediante PHP para la gestión de la secciópn "Nuestros grifos" para visualización en pantallas de gran tamaño
</div>
</div><img src=assets/images/portfolio/bierhaus.jpg alt=image>
<div class=portfolio-info> <h3>Bierhaus Odeon</h3>
</div>
</div>
</div>
</div>
<div class="portfolio-item col-xs-12 col-sm-6 col-md-4">
<div class=portfolio-bg>
<div class=portfolio>
<div class=tt-overlay>
</div>
<div class="links links-w"> <a href=https://www.enoturismo-ecuestre.com/ target="_blank"><i class="fa fa-link"></i></a> <a href=#enoturismo class=open-popup-link><i class="fa fa-list"></i></a>
<div id=enoturismo class="white-popup mfp-hide">Página web para servicio de corte turístico. Cambio de logotipos e identidad corporativa, rediseño e implementación de página web mediante WordPress, internacionalización y presencia en internet.
</div>
</div><img src=assets/images/portfolio/enoturismo.jpg alt=image>
<div class=portfolio-info> <h3>Enoturismo Ecuestre</h3>
</div>
</div>
</div>
</div>


</div>
</div>
<div class=resume-title style="margin-top:10px;">
<h3>Ver más proyectos</h3>
</div>
<div class="col-xs-4 codelink" style="border:1px solid black;">
        <a href="https://github.com/Heipry" target="_blank"><img border="0" width="16" alt="GitHub icon"  src="https://javierdiaz.com.es/assets/firma/gh.png"></a>
        
</div>
<div class="col-xs-4 codelink" style="border:1px solid black;">
        <a href="https://codepen.io/jadigar/" target="_blank"><img border="0" width="16" alt="Codepen icon" src="https://javierdiaz.com.es/assets/firma/cp.png"></a>
</div>
<div class="col-xs-4 codelink" style="border:1px solid black;">
         <a href="https://gitlab.com/Heipry" target="_blank"><img border="0" width="16" alt="GitLab icon" src="https://javierdiaz.com.es/assets/firma/gl.png"></a>
</div>

</div></section>



<section class="hire-section text-center" data-stellar-vertical-offset=50 data-stellar-background-ratio=0.2>
<div class=hire-section-bg>
<div class=container>
<div class=row>
<div class=col-md-12>
<h2>Estoy listo para que hablemos</h2>
<a href=#contact class="btn btn-default">Contactar</a>
</div>
</div>
</div>
</div>
</section>
<section id=contact class="contact-section section-padding">
<div class=container>
<h2 class="section-title wow fadeInUp">Contactar</h2>
<div class=row>
<div class=col-md-6>
<div class=contact-form>
<strong>Envía un mensaje</strong>
<form name=contact-form id= "contact-form" method=post action=assets/php/sendemail.php>
<div class=form-group>
<label for=InputName1>Nombre</label>
<input type=text name=name class=form-control id=InputName1 required>
</div>
<div class=form-group>
<label for=InputEmail1>Email</label>
<input type=email name=email class=form-control id=InputEmail1 required>
</div>
<div class=form-group>
<label for=InputSubject>Asunto</label>
<input type=text name=subject class=form-control id=InputSubject>
</div>
<div style="display: none;">
		<label for="required">Este es un campo de control. Si lo ves, pasa de él.</label>
		<input type="text" name="required" />
</div>

<div class=form-group>
<label for=numero >Resuelve la operacion <?php echo $_SESSION["num1"]; ?> + <?php echo $_SESSION["num2"];?>:</label>
<input type=text name=numero class=form-control id=numero required>
</div>
<div class=form-group>
<label for=InputTextarea>Mensaje</label>
<textarea name=message class=form-control id=InputTextarea rows=5 required></textarea>
</div>
<button class="g-recaptcha btn btn-primary"
        data-sitekey="6Lcab7UpAAAAAM8Czt9NQHDT4ao8u_261Ovp4PSl" 
        data-callback='onSubmit' 
        data-action='submit'>Enviar mensaje</button><!--
<button type=submit name=submit class="btn btn-primary">Enviar mensaje</button>-->
</form>
</div>
</div>
<div class=col-md-6>
<div class="row center-xs">
<div class=col-sm-6>
<i class="fa fa-map-marker"></i>
<address>
<strong>Dirección</strong>
Avda Reyes Católicos<br>
Arnedo, La Rioja<br>
</address>
</div>
<div class=col-sm-6>
<i class="fa fa-mobile"></i>
<div class=contact-number>
<strong>Teléfono y WhatsApp</strong>
<a href="https://wa.me/34627496505?ext=Hola%20Javier%20he%20leido%20tu%20curriculum,%20" target="_blank">627 496 505</i> </a>

</div>
</div>
</div>
<div class=row>
<div class=col-sm-12>
<div class="short-info wow fadeInUp">
<h3>¿ Buscas alguien que pueda ayudarte con tu proyecto? </h3>
<p>Sé que mi perfil es bastante ecléptico<br> Podría decirte que soy maquetador, o programador, o experto en ecommerce. A lo largo de mi carrera he hecho muchas cosas. Puedes comprobar <a href=#works>mi portfolio</a> y verás lo que he estado haciendo en estos últimos tiempos. Sin embargo, puedo decirte que a pesar de mi perfil técnico, lo que mejor se me da es coordinar un proyecto. Así que si lo que necesitas es una persona comprometida con su trabajo, quí me tienes. Saludos </p></div>
</div>
</div>
</div>
</div>
</div>
</section>
<footer class=footer-wrapper>
<div class=container>
<div class=row>
<div class=col-md-12>
<div class="copyright text-center">
<p>&copy; 2024 Javier Diaz. All rights reserved.</p>
</div>
</div>
</div>
</div>
</footer>
<div class=scroll-up>
<a href=#home><i class="fa fa-angle-up"></i></a>
</div>

<script src=assets/js/jquery.js></script>
<script src=assets/bootstrap/js/bootstrap.min.js></script>
<script src=assets/js/jquery.stellar.min.js></script>
<script src=assets/js/jquery.sticky.js></script>
<script src=assets/js/smoothscroll.js></script>
<script src=assets/js/wow.min.js></script>
<script src=assets/js/jquery.countTo.js></script>
<script src=assets/js/jquery.inview.min.js></script>
<script src=assets/js/jquery.easypiechart.js></script>
<script src=assets/js/jquery.shuffle.min.js></script>
<script src=assets/js/jquery.magnific-popup.min.js></script>

<script src=assets/js/jquery.fitvids.js></script>
<script src=assets/js/scripts.js></script>
</body>
</html>