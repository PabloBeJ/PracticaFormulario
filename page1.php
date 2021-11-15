<?php
//Formulario que inluya los campos de nombre,apellidos,email , telfono y contraseña(doble confirmacion)
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Práctica Formulario</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
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
        <div class="Inputs">
            <input type="text" placeholder="Nombre" name="nombre"><br>
            <input type="text" placeholder="Apellidos" name="apellidos"><br>
            <input type="text" placeholder="Email" name="email"><br>
            <input type="text" placeholder="Teléfono" name="telefono"><br>
            <input type="password" placeholder="Contraseña" name="password"><br>
            <!-- Ponemos Confirmar Contraseña -->
        </div>
        <a href="page2.php" methods="GET">
        <input class="Next" type="submit" value="Next" name="next" style="cursor: pointer">
        </a>
    </div>

</body>
</html>
