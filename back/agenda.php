<?php
session_start();
if (!isset($_SESSION['admin'])){
    header('Location:index.php');
}else {
    include_once 'conexion/conexion.inc.php';
    $mensaje = "";
    $categorias = ['front', 'back', 'e-com', 'dire', 'edu', 'otros'];
//AGREGAR
    if ($_POST) {
        if (!is_null($_POST['titulo']) && $_POST['titulo'] != "" && 
        !is_null($_POST['descripcion']) && $_POST['descripcion'] != "" &&
        !is_null($_POST['foto']) && $_POST['foto'] != "") {
            $categoria = $_POST['categoria'];
            $titulo = $_POST['titulo'];
            $foto = $_POST['foto'];
            $descripcion = $_POST['descripcion'];     
            $visible = isset($_POST['visible']) ? 1 : 0;
            $sql_agregar = 'INSERT INTO jdg_titulos (titulo, descripcion, foto, categoria, visible) VALUES (?,?,?,?,?)';
            $s_agregar = $pdo->prepare($sql_agregar);
            $s_agregar->execute(array($titulo, $descripcion, $foto, $categoria, $visible));
        } else {
            $mensaje = "Rellena todos los campos";
        }
    }
// RECIBIR
    $gsent = $pdo->prepare("SELECT * FROM jdg_titulos");
    $gsent->execute();
    $resultado = $gsent->fetchAll();

//MODIFICAR
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $gsentId = $pdo->prepare("SELECT * FROM jdg_titulos WHERE id=?");
        $gsentId->execute(array($id));
        $resultadoId = $gsentId->fetch();
        //var_dump($resultadoId);
    }
    if (isset($_GET['alerta'])) {
        $mensaje = $_GET['alerta'];
    }

//BORRAR
    if (isset($_GET['remove'])) {
        $id = $_GET['remove'];
    }


    ?>
    <!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
              integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt"
              crossorigin="anonymous">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
              integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
              crossorigin="anonymous">
    </head>
    <body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <?php foreach ($resultado as $dato): ?>
                <div class='alert alert-primary' role='alert'>
                <?php
                if (!$_GET || !isset($_GET['remove']) || $id != $dato['id']):
                    $marca = $dato['visible'] ? 'V' : 'O';
                    echo $marca.' - '.$dato['categoria'] . ' | ' . $dato['titulo']. ' | ' . $dato['descripcion']. ' | <img src="../assets/images/works/' . $dato['foto'].'">' ?>
                <a href="<?php echo $_SERVER['PHP_SELF']; ?>?remove=<?php echo $dato['id']; ?>" class = "float-right ml-3"> <i class="fas fa-trash-alt"></i></a>
                <a href="<?php echo $_SERVER['PHP_SELF']; ?>?id=<?php echo $dato['id']; ?>" class = "float-right"><i class="fas fa-edit"></i></a>
            <?php else:
                    echo $dato['titulo'] . ": Confirmar borrado" ?>
                <a href="eliminar.php?id=<?php echo $id; ?>" class = "float-right ml-3"> <i class="fas fa-trash-alt"></i></a>
                 <a href="<?php echo $_SERVER['PHP_SELF']; ?>" class = "float-right"><i class="fas fa-undo-alt"></i></a>
                <?php endif; ?>
            </div>
            <?php endforeach;
                ?>
        </div>
        <div class="col-md-4">
            <?php if (!$_GET || !isset($_GET['id'])): ?>
            <h2>Agregar Elementos</h2>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
               <select class="custom-select" name="categoria">
                <option class=' alert alert-primary' value='<?php echo $categorias[0]?>'>Front/CMS</option>
                <option class='alert alert-secondary' value='<?php echo $categorias[1] ?>'>Back End</option>
                <option class='alert alert-danger' value='<?php echo $categorias[2] ?>'>E-Commerce</option>
                <option class='alert alert-success' value='<?php echo $categorias[3] ?>'>Direccion</option>
                <option class='alert alert-info' value='<?php echo $categorias[4] ?>'>Docencia</option>
                <option class='alert alert-info' value='<?php echo $categorias[5] ?>'>Otros</option>
                <input type="text" class="form-control mt-3" name="titulo" placeholder="titulo">
                <input type="text" class="form-control mt-3" name="descripcion" placeholder="descripcion">
                <input type="text" class="form-control mt-3" name="foto" placeholder="nombre archivo">
                <div class="form-check">
                <input type="checkbox" class="form-check-input mt-3" name="visible" id="visible" checked>
                <label class="form-check-label mt-3" for="visible">Visible</label>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Agregar</button>
                <button type="submit" formaction="reiniciar_indices.php" class="btn btn-primary mt-3">Minimizar
                    indices
                </button>

                <?php if ($mensaje != "") echo "<p class='mb-0 alert alert-warning' role='alert'>$mensaje</p>"?>
                </form>
                <?php else: ?>
                <h2>Modificar Elemento</h2>
                <form action="editar.php" method="GET">
                    <?php

                    for ($i = 0; $i < count($categorias); $i++) {
                        if ($resultadoId['categoria'] == $categorias[$i]) {
                            $categorias[$i] .= "' selected= 'selected";
                        }
                    }

                    ?>
                    <select class="custom-select" name="categoria">
                    <option class='alert alert-primary' value='<?php echo $categorias[0]?>'>Front/CMS</option>
                    <option class='alert alert-secondary' value='<?php echo $categorias[1] ?>'>Back End</option>
                    <option class='alert alert-danger' value='<?php echo $categorias[2] ?>'>E-Commerce</option>
                    <option class='alert alert-success' value='<?php echo $categorias[3] ?>'>Direccion</option>
                    <option class='alert alert-info' value='<?php echo $categorias[4] ?>'>Docencia</option>
                    <option class='alert alert-info' value='<?php echo $categorias[5] ?>'>Otros</option>
                    </select>
                    <input type="text" class="form-control mt-3" name="titulo" value="<?php
                    if (isset($resultadoId)) echo $resultadoId['titulo'];
                    ?>">
                    <input type="text" class="form-control mt-3" name="descripcion" value="<?php
                    if (isset($resultadoId)) echo $resultadoId['descripcion'];
                    ?>">
                    <input type="text" class="form-control mt-3" name="foto" value="<?php
                    if (isset($resultadoId)) echo $resultadoId['foto'];
                    ?>">
                    <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="visible" id="visible" <?php if($resultadoId['visible'] == 1) echo 'checked';?>> 
                    <label class="form-check-label" for=""visible">Visible</label>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <button type="submit" class="btn btn-primary mt-3">Modificar</button>
                    <?php if ($mensaje != "") echo "<p class='mb-0 alert alert-warning' role='alert'>$mensaje</p>" ?>

                </form>
                <?php endif;
                //Cerramos sentencias
                $s_agregar = null;
                $gsent = null;
                $gsentId = null;
                //Cerramos conexion
                $pdo = null;
                ?>
            </div>
        </div>
    </div>

    </body>
    </html>
    <?php
    echo "<br><a href='cerrar.php'>Cerrar sesión</a>";
    }