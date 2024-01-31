<?php
session_start();
if (!isset($_POST['nombre_usuario']) || !isset($_POST['pass'])){
    header('Location:index.php');
}else {
    require 'conexion/conexion.inc.php';
    $u_login = $_POST['nombre_usuario'];
    $pass_login = $_POST['pass'];
    $sql = 'SELECT * FROM jdg_usuarios WHERE nombre = ?';
    $s_sql = $pdo->prepare($sql);
    $s_sql->execute(array($u_login));
    $resul = $s_sql->fetch();
    if (!$resul){
        echo "<br>El usuario  no existe";
        die();
    }else{
        if (password_verify($pass_login, $resul['pass'])) {

            $_SESSION['admin'] = $u_login;
            header('Location: agenda.php');

        } else {
            //echo $pass_login. " - ".$resul['pass'];
            echo '<br>La contraseña no es válida.';
            die();
        }

    }

}