<?php
require('conectar.php');
require('funcionComprobar.php');
$conexion = conectarBase();
$usuario = "$argv[1]";
$pass = Password::hash("$argv[2]");
$conexion->query("insert into usuarios values(NULL, '$usuario', '$pass');");
?>



