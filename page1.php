<?php
//Formulario que inluya los campos de nombre,apellidos,email , telfono y contraseña(doble confirmacion)
$_SESSION['telf'] = null;
$paramNum= "";
session_start();
if(isset($_GET['next'])){

    $_SESSION['telf']= $_GET['telefono'];

    if(!preg_match("/[0-9]/",   $_SESSION['telf'])){
        echo '<script> alert("Error en el telefono : Inserta un numero")</script>';
    }else {
        echo $_SESSION['telf'];
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Práctica Formulario</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="pagina1">
    <div class="Numeros">
        <span class="pagina" style="background-color:#12ad5e; color: white">1</span>
        <span class="lineas"></span>
        <span class="pagina">2</span>
        <span class="lineas"></span>
        <span class="pagina">3</span>
    </div>
    <div class="Titulos">
        <span>ACCOUNT SET UP</span>
        <span>ADDITIONAL DATA<span></span></span>
        <span>ACCOUNT SUMMARY</span>
    </div>
    <div class="Formulario">
        <h1>CREATE YOUR ACCOUNT</h1>
        <h2>Step 1</h2>
        <form name="formUser" method="get" class="Inputs" ac>
            <input type="text" placeholder="Nombre" name="nombre"><br>
            <input type="text" placeholder="Apellido" name="apellido"><br>
            <input type="text" placeholder="Email" name="email"><br>
            <input type="number" placeholder="Teléfono" name="telefono"><br>
            <input type="password" placeholder="Contraseña" name="password"><br>
            <!-- Ponemos Confirmar Contraseña -->
            <input class="Next" type="submit" value="Next" name="next" style="cursor: pointer">
        </form>
    </div>

</body>
</html>
