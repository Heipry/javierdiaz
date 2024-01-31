<?php
include_once 'conexion/conexion.inc.php';
$id = $_GET['id'];
$sql_eliminar = 'DELETE FROM  jdg_titulos  WHERE id=?';
$s_eliminar = $pdo->prepare($sql_eliminar);
$s_eliminar->execute(array($id));
$mensaje = "El elemento $id fue eliminado";
header("location:agenda.php?alerta=$mensaje");
$s_eliminar=null;
$pdo = null;