<?php
include ('./conectar.php');
$conexion = conectarBase();
echo "<title>Domotica en casa</title>";
error_reporting(E_ALL);
ini_set('display_errors', '1');

//              SALON
if (isset($_POST['salon'])){
    if ($_POST['salon'] == "Encender Luz"){
        $archivo = fopen("fichero.txt", "w");
        fwrite($archivo, "encender_luz_salon");
        fclose($archivo);
    }
    if ($_POST['salon'] == "Apagar Luz"){
        $archivo = fopen("fichero.txt", "w");
        fwrite($archivo, "apagar_luz_salon");
        fclose($archivo);
    }
    if ($_POST['salon'] == "Encender Ventilador"){
        $archivo = fopen("fichero.txt", "w");
        fwrite($archivo, "encender_ventilador");
        fclose($archivo);
    }
    if ($_POST['salon'] == "Apagar Ventilador"){
        $archivo = fopen("fichero.txt", "w");
        fwrite($archivo, "apagar_ventilador");
        fclose($archivo);
    }
}
//              PASILLO

if (isset($_POST['pasillo'])){
    if ($_POST['pasillo'] == "Encender Luz"){
        $archivo = fopen("fichero.txt", "w");
        fwrite($archivo, "encender_luz_pasillo");
        fclose($archivo);
    }
    if ($_POST['pasillo'] == "Apagar Luz"){
        $archivo = fopen("fichero.txt", "w");
        fwrite($archivo, "apagar_luz_pasillo");
        fclose($archivo);
    }
}

//              DORMITORIO
if (isset($_POST['dormitorio'])){
    if ($_POST['dormitorio'] == "Encender Luz"){
        $archivo = fopen("fichero.txt", "w");
        fwrite($archivo, "encender_luz_dormitorio");
        fclose($archivo);
    }
    if ($_POST['dormitorio'] == "Apagar Luz"){
        $archivo = fopen("fichero.txt", "w");
        fwrite($archivo, "apagar_luz_dormitorio");
        fclose($archivo);
    }
    if ($_POST['dormitorio'] == "Luz Cian"){
        $archivo = fopen("fichero.txt", "w");
        fwrite($archivo, "cian_luz_dormitorio");
        fclose($archivo);
    }
    if ($_POST['dormitorio'] == "Luz Roja"){
        $archivo = fopen("fichero.txt", "w");
        fwrite($archivo, "roja_luz_dormitorio");
        fclose($archivo);
    }
    if ($_POST['dormitorio'] == "Luz Azul"){
        $archivo = fopen("fichero.txt", "w");
        fwrite($archivo, "azul_luz_dormitorio");
        fclose($archivo);
    }
    if ($_POST['dormitorio'] == "Luz Verde"){
        $archivo = fopen("fichero.txt", "w");
        fwrite($archivo, "verde_luz_dormitorio");
        fclose($archivo);
    }
    if ($_POST['dormitorio'] == "Luz Magenta"){
        $archivo = fopen("fichero.txt", "w");
        fwrite($archivo, "magenta_luz_dormitorio");
        fclose($archivo);
    }
    if ($_POST['dormitorio'] == "Luz Blanca"){
        $archivo = fopen("fichero.txt", "w");
        fwrite($archivo, "blanca_luz_dormitorio");
        fclose($archivo);
    }
}

//              COCINA
if (isset($_POST['cocina'])){
    if ($_POST['cocina'] == "Encender Luz"){
        $archivo = fopen("fichero.txt", "w");
        fwrite($archivo, "encender_luz_cocina");
        fclose($archivo);
    }
    if ($_POST['cocina'] == "Apagar Luz"){
        $archivo = fopen("fichero.txt", "w");
        fwrite($archivo, "apagar_luz_cocina");
        fclose($archivo);
    }
}

//              MAQUINAS
if (isset($_POST['maquinas'])){
    if ($_POST['maquinas'] == "Encender Luz"){
        $archivo = fopen("fichero.txt", "w");
        fwrite($archivo, "encender_sala_maquinas");
        fclose($archivo);
    }
    if ($_POST['maquinas'] == "Apagar Luz"){
        $archivo = fopen("fichero.txt", "w");
        fwrite($archivo, "apagar_sala_maquinas");
        fclose($archivo);
    }
    if ($_POST['maquinas'] == "Mostrar Valores"){
        $archivo = fopen("fichero.txt", "w");
        fwrite($archivo, "mostrar_valores");
        fclose($archivo);
    }
}

//              BAÑO
if (isset($_POST['baño'])){
    if ($_POST['baño'] == "Encender Luz"){
        $archivo = fopen("fichero.txt", "w");
        fwrite($archivo, "encender_luz_bano");
        fclose($archivo);
    }
    if ($_POST['baño'] == "Apagar Luz"){
        $archivo = fopen("fichero.txt", "w");
        fwrite($archivo, "apagar_luz_bano");
        fclose($archivo);
    }
}

//              GARAJE
if (isset($_POST['garaje'])){
    if ($_POST['garaje'] == "Encender Luz"){
        $archivo = fopen("fichero.txt", "w");
        fwrite($archivo, "encender_luz_garaje");
        fclose($archivo);
    }
    if ($_POST['garaje'] == "Apagar Luz"){
        $archivo = fopen("fichero.txt", "w");
        fwrite($archivo, "apagar_luz_garaje");
        fclose($archivo);
    }
    if ($_POST['garaje'] == "Cerrar Puerta"){
        $archivo = fopen("fichero.txt", "w");
        fwrite($archivo, "cerrar_garaje");
        fclose($archivo);
    }
    if ($_POST['garaje'] == "Abrir Puerta"){
        $archivo = fopen("fichero.txt", "w");
        fwrite($archivo, "abrir_garaje");
        fclose($archivo);
    }
}

//          ALARMA
if (isset($_POST['alarma'])){
    if ($_POST['alarma'] == "Encender alarma"){
        $archivo = fopen("fichero.txt", "w");
        fwrite($archivo, "encender_alarma");
        fclose($archivo);
    }
    if ($_POST['alarma'] == "Apagar alarma"){
        $archivo = fopen("fichero.txt", "w");
        fwrite($archivo, "apagar_alarma");
        fclose($archivo);
    }
}

?>





<html>
    <head>
        <link rel="stylesheet" type="text/css" href="./estilos/styles.css" media="screen" />
        <link rel="stylesheet" href="./estilos/bootstrap.css">

    </head>
    <body>
        <div class="row">
            <div class="col-sm-12">
                                                <!--SALON-->
                <div class="col-sm-3" style="border: 1px solid black; float:left;background-color:#DFBD7C">
                    <h1 class="h1" style="text-align:center">Salon</h1>
                    <form action="./DomoticaEnCasa.php" method="POST" style="padding:10 auto;text-align:center;background-color:white; border: 2px solid black" >
                        <h3>Luces</h3>
                        <input type="submit" name="salon" value="Encender Luz" class="btn btn-success">
                        <br>
                        <br>
                        <input type="submit" name="salon" value="Apagar Luz" class="btn btn-dark">
                        <h3>Ventilador</h3>
                        <input type="submit" name="salon" value="Encender Ventilador" class="btn btn-success">
                        <br>
                        <br>
                        <input type="submit" name="salon" value="Apagar Ventilador" class="btn btn-dark">
                        <br>
                        <br>
                    </form>
                </div>
                                                <!--DORMITORIO-->
                <div class="col-sm-3" style="border: 1px solid black;float:left;background-color:#DFBD7C">
                <h1 class="h1" style="text-align:center">Dormitorio</h1>

                    <form action="./DomoticaEnCasa.php" method="POST" style="padding:10 auto;text-align:center; border: 2px solid black;background-color:white">
                        <h3>Luces</h3>
                        <input type="submit" name="dormitorio" value="Encender Luz" class="btn btn-success">
                        <br>
                        <br>
                        <input type="submit" name="dormitorio" value="Apagar Luz" class="btn btn-dark">
                        <h3>RGB</h3>
                        <input type="submit" name="dormitorio" value="Luz Cian" class="btn btn-warning">
                        <input type="submit" name="dormitorio" value="Luz Roja" class="btn btn-warning">
                        <input type="submit" name="dormitorio" value="Luz Azul" class="btn btn-warning">
                        <br>
                        <br>
                        <input type="submit" name="dormitorio" value="Luz Verde" class="btn btn-warning">
                        <input type="submit" name="dormitorio" value="Luz Magenta" class="btn btn-warning">
                        <input type="submit" name="dormitorio" value="Luz Blanca" class="btn btn-warning">
                        <br>
                        <br>
                    </form>
                </div>
                                                <!--SALA MAQUINAS-->
                <div class="col-sm-3" style="border: 1px solid black;float:left;background-color:#DFBD7C">
                    <h1 class="h1" style="text-align:center">Sala Maquinas</h1>
                    <form action="./DomoticaEnCasa.php" method="POST" style="padding:10 auto;text-align:center; border: 2px solid black;background-color:white">
                        <h3 class="h3" style="text-align:center">Luces</h3>
                        
                        <input type="submit" name="maquinas" value="Encender Luz" class="btn btn-success">
                        <br>
                        <br>
                        <input type="submit" name="maquinas" value="Apagar Luz" class="btn btn-dark">
                        <br>
                        <h3 class="h3" style="text-align:center">Temperatura y humedad</h3>
                        <input type="submit" name="maquinas" value="Mostrar Valores" class="btn btn-warning">                
                        <br>
                        <br>
                        <br>
                        <p>
                        <br>
                    </form>
                </div>
                                                        <!--ALARMA-->
                <div class="col-sm-3" style="border: 1px solid black;float:left;background-color:#DFBD7C">
                    <h1 class="h1" style="text-align:center">Alarma</h1>
                    <form action="./DomoticaEnCasa.php" method="POST" style="padding:10 auto;text-align:center; border: 2px solid black;background-color:white">
                        <br>
                        <br>
                        <br>
                        
                        <br>
                        <input type="submit" name="alarma" value="Encender alarma" class="btn btn-success">
                        <br>
                        <br>
                        <input type="submit" name="alarma" value="Apagar alarma" class="btn btn-dark">
                        <br>
                        <br>
                        <br>
                        <br>
                        <p>
                        <br>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                                                    <!--COCINA-->
                <div class="col-sm-3" style="border: 1px solid black;float:left;background-color:#DFBD7C">
                    <h1 class="h1" style="text-align:center">Cocina</h1>
                    <form action="./DomoticaEnCasa.php" method="POST" style="padding:10 auto;text-align:center; border: 2px solid black;background-color:white">
                        <h3 class="h3" style="text-align:center">Luces</h3>
                        <input type="submit" name="cocina" value="Encender Luz" class="btn btn-success">
                        <br>
                        <br>
                        <input type="submit" name="cocina" value="Apagar Luz" class="btn btn-dark">
                        <br>
                        <br>
                    </form>
                </div>
                                                    <!--BAÑO-->
                <div class="col-sm-3" style="border: 1px solid black;float:left;background-color:#DFBD7C">
                    <h1 class="h1" style="text-align:center">Baño</h1>
                    <form action="./DomoticaEnCasa.php" method="POST" style="padding:10 auto;text-align:center; border: 2px solid black; background-color:white">
                        <h3 class="h3" style="text-align:center">Luces</h3>
                        <input type="submit" name="baño" value="Encender Luz" class="btn btn-success">
                        <br>
                        <br>
                        <input type="submit" name="baño" value="Apagar Luz" class="btn btn-dark">
                        <br>
                        <br>
                    </form>
                </div>
                                                    <!--GARAJE-->
                <div class="col-sm-3" style="border: 1px solid black;float:left;background-color:#DFBD7C">
                    <h1 class="h1" style="text-align:center">Garaje</h1>
                    <form action="./DomoticaEnCasa.php" method="POST" style="padding:10 auto;text-align:center; border: 2px solid black;background-color:white">
                        <h3 class="h3" style="text-align:center">Luces</h3>
                        <input type="submit" name="garaje" value="Encender Luz" class="btn btn-success">
                        <input type="submit" name="garaje" value="Apagar Luz" class="btn btn-dark">
                        <h3 class="h3" style="text-align:center">Puerta</h3>
                        <input type="submit" name="garaje" value="Abrir Puerta" class="btn btn-success">
                        <input type="submit" name="garaje" value="Cerrar Puerta" class="btn btn-dark">
                        <p></p>
                    </form>
                </div>
                                                    <!--PASILLO-->
                <div class="col-sm-3" style="border: 1px solid black;float:left;background-color:#DFBD7C">
                    <h1 class="h1" style="text-align:center">Pasillo</h1>
                    <form action="./DomoticaEnCasa.php" method="POST" style="padding:10 auto;text-align:center; border: 2px solid black;background-color:white">
                        <h3 class="h3" style="text-align:center">Luces</h3>
                        <input type="submit" name="pasillo" value="Encender Luz" class="btn btn-success">
                        <br>
                        <br>
                        <input type="submit" name="pasillo" value="Apagar Luz" class="btn btn-dark">
                        <br>
                        <br>
                    </form>
                </div>

            </div>
            <div class="col-sm-12" style="text-align:center">
                    </html>
                    <?php
                                        //CONSULTA PARA OBTENER TEMPERATURA Y HUMEDAD
                    $consulta = $conexion->query("SELECT * FROM HistorialTemperatura ORDER by IDRegistro DESC LIMIT 1 ");
                    while ($lugar = $consulta->fetch(2)){
                        $temperatura = $lugar['Temperatura'];
                        $humedad = $lugar['Humedad'];
                        
			echo "<br><br>";
                            //MOSTRAR Tª y HUMEDAD
			echo "<center>";
				echo "<table style='text-align:center;'>";
					echo "<tr>";
						echo "<td>Humedad: $humedad</td>";
						echo "<td></td>";
						echo "<td>Temperatura: $temperatura</td>";
					echo "</tr>";
				echo "</table>";
			echo "</center>";
                    }
                    ?>
                    <html>
            </div>
        </div>
    </body>
</html>
