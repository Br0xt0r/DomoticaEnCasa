
<?php
session_start();

ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);
require("./funcionComprobar.php");

include('conectar.php');
$conexion = conectarBase();

if (isset($_SESSION['usuarios'])){
    header('Location: DomoticaEnCasa.php');
}

if (isset($_POST['Login'])){
    $user = htmlentities(trim($_POST['user']));
    $pass = htmlentities(trim($_POST['pass']));
    echo $user;
    $consulta = $conexion->query("select * from usuarios where nombre='mario';");
    if (($user != '')){
        while($lugar = $consulta->fetch(2)){
            if (Password::verify($pass, $lugar['pass'])){
                echo "BIEN";
                $_SESSION['usuarios'] = $_POST['user'];
                echo "<script type='text/javascript'> alert('Has iniciado sesion correctamente.'); window.location.href='DomoticaEnCasa.php'</script>";
            }else{
                echo "<script type='text/javascript'> alert('La contraseña es incorrecta.'); window.location.href='login.php'</script>";
            }
        }
    }else{
        echo "<script type='text/javascript'> alert('No has escrito un usuario valido.'); window.location.href='login.php'</script>";

    }
}
?>

<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <center>
            <div class="col-sm-12">
                <form method='POST' action='login.php' style='margin-top:20px;background-color:graymargin-top:20px;background-color:gray'>
                    <label for='user'>Introduce el usuario</label><input type='text' name='user' placeholder='Nombre de usuario'/>
                    <br>
                    <label for='pass'>Introduce la contraseña</label><input type='password' name='pass' placeholder='Contraseña'/>
                    <br>
                    <input type='submit' name='Login'/>
                </form>
            </div>
        </center>
    </body>
</html>