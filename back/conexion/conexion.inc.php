<?php 
$link = 'mysql:host=database-5013029817.webspace-host.com;dbname=dbs10940238';
$usuario = 'dbu2644377';
$pass = 'Jdg240581';
try {
    $pdo = new PDO($link, $usuario, $pass);
    //echo 'Conectado';
    /*foreach($pdo->query('SELECT * from colores') as $fila) {
        print_r($fila);
    }
    $pdo = null;*/
} catch (PDOException $e) {
    print "¡Error!: ". $e->getMessage() . "<br>";
    die();
}
