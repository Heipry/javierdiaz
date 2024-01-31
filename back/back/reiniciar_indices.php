<?php
include_once 'conexion/conexion.inc.php';
$s_indices = $pdo->prepare("ALTER TABLE jdg_titulos AUTO_INCREMENT=1");
$correcto = $s_indices->execute();
if($correcto) $mensaje = "id minimizado";
else $mensaje = "Imposible reducir indice";
header("location:agenda.php?alerta=$mensaje");

$s_indices=null;
$pdo = null;