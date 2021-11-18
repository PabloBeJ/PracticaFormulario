<?php
//Formulario que muestre los datos de los anteriores formularios
// no soy robot, mensaje de confirmacion y descargar fcihero con datos
$hola = "Pablo";
$adios = "horcajada";
if(isset($_GET['finish'])){
    $fichero = fopen("fichero/archivo.txt", "w");
    fwrite($fichero, "Nombre: $hola" . PHP_EOL);
    fwrite($fichero, "Apellido: $adios" . PHP_EOL);
    fwrite($fichero, "Email: $hola" . PHP_EOL);
    fwrite($fichero, "Telefono: $hola" . PHP_EOL);
    fwrite($fichero, "Password: $hola" . PHP_EOL);
    fwrite($fichero, "Provincia: $hola" . PHP_EOL);
    fwrite($fichero, "Ciudad: $hola" . PHP_EOL);
    fwrite($fichero, "CP: $hola" . PHP_EOL);
    fwrite($fichero, "Calle: $hola" . PHP_EOL);
    fwrite($fichero, "Web: $hola" . PHP_EOL);
    fclose($fichero);
    echo '<script>alert("Datos guardados en la base de datos.\nPulsa en descargar para ver tus datos.");
        document.getElementById()</script>';
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Document</title>
</head>
<body class="pagina3">
    <div class="Numeros">
        <span class="pagina" style="background-color:#12ad5e; color: white">1</span>
        <span class="lineas" style="background-color:#12ad5e;"></span>
        <span class="pagina" style="background-color:#12ad5e; color: white" ;">2</span>
        <span class="lineas" style="background-color:#12ad5e;"></span>
        <span class="pagina" style="background-color:#12ad5e; color: white">3</span>
    </div>
    <div class="Titulos">
        <span>ACCOUNT SET UP</span>
        <span>ADDITIONAL DATA<span></span></span>
        <span>ACCOUNT SUMMARY</span>
    </div>
    <div class="Formulario3">
        <h1>PROFILE SUMMARY</h1>
        <h2>Step 3</h2>
        <div class="Inputs3">
            Nombre: <input type="text" name="nombre" value="<?php echo $hola  ?>" style="width:20%; margin-right: 10%" disabled>
            Apellido: <input type="text" name="apellido" disabled><br>
            Email: <input type="text" name="email" disabled>
            Telefono: <input type="text" name="telefono" style="width:23%" disabled><br>
            Password: <input type="text" name="password" style="width:18%; margin-right: 10%" disabled>
            Provincia: <input type="text" name="provincia" style="width:25%" disabled><br>
            Ciudad: <input type="text" name="ciudad" style="width:20%; margin-right:11%;" disabled>
            CP: <input type="text" name="cp" style="width: 15%" disabled><br>
            Calle: <input type="text" name="calle" value="micalle" disabled>
            Web: <input type="text" name="web" disabled>
        </div>
        <div class="botones">
            <form method="get" name="formFinal">
                <a href="page2.php" class="Back" style="cursor: pointer; margin-left: 15%; padding: 2% 3%; text-decoration: none">Back</a>
                <input class="Next" type="submit" value="Guardar" name="finish"  style="cursor: pointer; margin-left: 1%">
                <a href="fichero/archivo.txt" id=class="Descargar" download="fichero/archivo.txt" style="padding: 2% 3%;  margin-left: 1%; ">Descargar </a>
            </form>
        </div>
    </div>
</body>
</html>