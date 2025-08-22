<?php
include_once 'back/conexion/conexion.inc.php';
$gsent = $pdo->prepare("SELECT * FROM jdg_titulos ORDER BY id DESC");
$gsent->execute();
$resultado = $gsent->fetchAll();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Lista certificaciones</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Lista certificaciones de Javier Díaz Garrido">
    <meta name="author" content="Javier Díaz">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel="stylesheet" type="text/css">
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="screen">
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

</head>

<body>
    <div class="container">
        <h2 style="line-height: 120px;">Lista certificaciones</h2>
        <ul class="media-list">
            <?php foreach ($resultado as $dato): ?>
                <li class="media lista">
                    <div class="pull-left">

                        <label class="lightbox-trigger">
                            <input type="checkbox" id="<?php echo $dato['foto']; ?>" class="lightbox-checkbox" />
                            <img class="media-object pad lista" src="assets/images/works/<?php echo $dato['foto']; ?>" alt="<?php echo $dato['foto']; ?>">
                            <label class="lightbox-overlay" for="<?php echo $dato['foto']; ?>">
                                <img src="assets/images/works-big/<?php echo $dato['foto']; ?>" alt="<?php echo $dato['foto']; ?>" />
                            </label>
                        </label>

                    </div>
                    <div class=" media-body">
                        <p class="media-heading"><?php echo $dato['descripcion']; ?></p>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>

</html>