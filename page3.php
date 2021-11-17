<?php
//Formulario que muestre los datos de los anteriores formularios
// no soy robot, mensaje de confirmacion y descargar fcihero con datos
if(isset($_GET['finish'])){
    $fichero = "datos.txt";
    $aceptar = null;
    echo "<script>
        window.confirm('¿Quieres descargar un documento con tus datos?')
        </script>";


        // Abre el fichero para obtener el contenido existente
        $actual = file_get_contents($fichero);
        // Añade una nueva persona al fichero
        $actual.= "hola";
        // Escribe el contenido al fichero
        file_put_contents($fichero,$actual);

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
            Nombre :<input type="text" name="nombre" style="width:20%; margin-right: 10%" disabled>
            Apellido :<input type="text" name="apellido" disabled><br>
            Email :<input type="text" name="email" disabled>
            Telefono :<input type="text" name="telefono" style="width:23%" disabled><br>
            Password :<input type="text" name="password" style="width:18%; margin-right: 10%" disabled>
            Provincia :<input type="text" name="provincia" style="width:25%" disabled><br>
            Ciudad :<input type="text" name="ciudad" style="width:20%; margin-right:11%;" disabled>
            CP :<input type="text" name="cp" style="width: 15%" disabled><br>
            Calle :<input type="text" name="calle" disabled>
            Web :<input type="text" name="web" disabled>
        </div>
        <div class="botones">
            <form method="Get" name="formulario">
                <a class="Back" href="page2.php"  style="cursor: pointer; margin-left: 15%; padding: 2% 5%; text-decoration: none">BACK </a>
                <input class="Next" type="submit" value="Finish" name="finish" style="cursor: pointer;  margin-left: 15%;"></a>
            </form>
        </div>
    </div>
</body>
</html>