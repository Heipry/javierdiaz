<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    include_once 'conexion/conexion.inc.php';
    if ($id != '') {


        $gsent = $pdo->prepare("SELECT * FROM jdg_titulos");
        $gsent->execute();
        $resultado = $gsent->fetchAll();
        $existe = false;

        foreach ($resultado as $valor) {

            if ($valor['id'] == $id){

                if (isset($_GET['descripcion'])) $descripcion = $_GET['descripcion'];
                else $descripcion = $valor['descripcion'];
                if (isset($_GET['categoria'])) $categoria = $_GET['categoria'];
                else $categoria = $valor['categoria'];
                if (isset($_GET['titulo'])) $titulo = $_GET['titulo'];
                else $titulo = $valor['titulo'];
                if (isset($_GET['foto'])) $foto = $_GET['foto'];
                else $foto = $valor['foto'];
                if (isset($_GET['visible'])) $visible = 1;
                else $visible = 0;
                $existe = true;
            }
        }
        if ($existe) {
            $sql_editar = "UPDATE jdg_titulos SET titulo=:tit, descripcion=:des, foto=:foto, categoria=:cat, visible=:vis WHERE id=:id";
            $s_editar = $pdo->prepare($sql_editar);
            $s_editar->bindParam(':tit',$titulo);
            $s_editar->bindParam(':des',$descripcion);
            $s_editar->bindParam(':foto',$foto);
            $s_editar->bindParam(':cat',$categoria);
            $s_editar->bindParam(':vis',$visible);
            $s_editar->bindParam(':id',$id);

            if ($s_editar->execute()){
                $mensaje = "La fila de $titulo ha sido modificada";
            }else {$mensaje = "hubo un problema al guardar $titulo";}
            
        } else {
            $mensaje = "El id  $id  no existe en la base de datos";
        }
    } else {
        $mensaje = "Se necesita un id";
    }
}else $mensaje = "No tiene acceso a esta página";
$s_editar = null;
$pdo = null;
header("location:agenda.php?alerta=$mensaje");