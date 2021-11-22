<?php
//Formulario que inluya los campos de nombre,apellidos,email , telfono y contraseña(doble confirmacion)
//Parametro String --> Acepta solo caracteres y palabras con tíldes
$paramString = '/^[a-zA-ZáéíóúÁÉÍÓÚñÑäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ s]+$/';
// Solo se puede números y que el mínimo sea de 8 dígitos
$paramNum = '/[0-9].{8,}/';
//Parametros para que conteunga un numero,mayuscula,minuscula, caracter especial y que el rango sea entre de 8-16 caracteres
$paramContra = '/^(?=.*[^A-Za-z0-9])(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{8,16}$/';
// Correo -->  continenen un formato de cualquier tipo + @ contiene cualquier tipo un punto. y un string de 2-4 caracteres (com,es,net)..etc
$paramCorreo = '/[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4}/';
// Inicion la sesión
session_start();
$nombre = null;
// Boton para reiniciar
if (isset($_GET['reiniciar'])) {
    //Al reiniciar quito todas las sesiones acumuladas
    session_destroy();
    session_start();
}
if (isset($_GET['nextpag2'])) {
    // Campo de nombre
    $_SESSION['fName'] = $_GET['nombre'];
    // Campo de Apellido
    $_SESSION['lName'] = $_GET['apellido'];
    // Campo de Correo
    $_SESSION['email'] = $_GET['correo'];
    // Campo de telefono
    $_SESSION['telef'] = $_GET['telefono'];
    // Campo de contraseña
    $_SESSION['passwd'] = $_GET['contrasena'];
    // Campo de confirmar contraseña
    $_SESSION['confPasswd'] = $_GET['confContrasena'];
    // Array vacio
    $_SESSION['infoForm'] = [];
    //Creo un Div invisible para todos los inputs del formulario indicque si esta bien o mal
    ?>
    <div class="invisible" style="visibility: hidden">
        <?php
        //Error/Verdadero para el nombre
        if (!preg_match($paramString, $_SESSION['fName'])) {
            ?>
            <input id="checknombre" value="error">
            <?php
        } else echo '<input id="checknombre" value="verdadero">';
        //Error/Verdadero para el Apellido
        if (!preg_match($paramString, $_SESSION['lName'])) {
            ?>
            <input id="checkApellido" value="error">
            <?php
        }else echo '<input id="checkApellido" value="verdadero">';
        //Error/Verdadero para el Correo
        if (!preg_match($paramCorreo, $_SESSION['email'])) {
            ?>
            <input id="checkCorreo" value="error">
            <?php
        }else echo '<input id="checkCorreo" value="verdadero">';
        //Error/Verdadero para el Teléfono
        if (!preg_match($paramNum, $_SESSION['telef'])) {
            ?>
            <input id="checkTelef" value="error">
            <?php
        }else echo '<input id="checkTelef" value="verdadero">';
        //Error/Verdadero para la Contraseña
        if (!preg_match($paramContra, $_SESSION['passwd'])) {
            ?>
            <input id="checkContra" value="error">
            <?php
            //Error/Verdadero para Confirmar Contraseña
        }else echo '<input id="checkContra" value="verdadero">';
        if ($_SESSION['passwd'] != $_SESSION['confPasswd'] || $_SESSION['passwd'] == null) {
            ?>
            <input id="checkConfirContra" value="error">
            <?php
        }else echo '<input id="checkConfirContra" value="verdadero">';
        ?> </div>
    <?php
    //Si toooodo esta bien se acumula en un array
    if (preg_match($paramString, $_SESSION['fName']) && preg_match($paramString, $_SESSION['lName']) && preg_match($paramCorreo, $_SESSION['email']) &&
        preg_match($paramContra, $_SESSION['passwd'])) {
        $_SESSION['infoForm'] = [
            [
                'nombre' => $_SESSION['fName'],
                'apellidos' => $_SESSION['lName'],
                'correo' => $_SESSION['email'],
                'telefono' => $_SESSION['telef'],
                'contrasena' => $_SESSION['passwd']]
        ];
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Práctica Formulario</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="script/script.js" type="text/javascript"></script>
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
<div class="Formulario" id="0">
    <h1>CREATE YOUR ACCOUNT</h1>
    <h2>Step 1</h2>
    <form name="formUser" method="get" class="Inputs" onclick="validateForm()">

        <!-- Un label que si estta mal me mostrara un mensaje de error escrito en script1  -->
        <label id="errorNombre" style="margin-left: 15%; color: red" for=""> </label><br>
        <!-- Input de nombre. Si se ha escrito al recargar la página me mostraras los datos anteriores. -->

        <label class="errores" id="errorNombre" ></label><br>

        <input type="text" id="nombre" placeholder="Nombre" name="nombre" value="<?php echo $_SESSION['fName'] ?>"><br>

        <label class="errores" id="errorApellido"> </label><br>
        <input type="text" id="apellido" placeholder="Apellidos" name="apellido"
               value="<?php echo $_SESSION['lName'] ?>"><br>

        <label class="errores" id="errorCorreo"> </label><br>
        <input type="email" id="correo" placeholder="Email" name="correo" value="<?php echo $_SESSION['email'] ?>"><br>

        <label class="errores" id="errorTelef" > </label><br>
        <input type="text" id="telefono" placeholder="Teléfono" name="telefono"
               value="<?php echo $_SESSION['telef'] ?>"><br>

        <label class="errores" id="errorContraPart1"> </label><br>
        <label class="errores" id="errorContraPart2"> </label><br>
        <input type="password" id="contrasena" placeholder="Contraseña" name="contrasena"
               value="<?php echo $_SESSION['passwd'] ?>"><br>

        <label class="errores" id="errorConfContra" > </label><br>
        <input type="password" id="confContrasena" placeholder="Confirmar Contraseña" name="confContrasena"
               value="<?php echo $_SESSION['confPasswd'] ?>"><br>


        <input class="Next" type="submit" value="Next" name="nextpag2" style="cursor: pointer">
    </form>
    <!--  Boton para reiniciar la sesión -->
    <form name="reiniciar">
        <input class="Next" type="submit" value="Reset" name="reiniciar" style="cursor: pointer; margin-left: 40%">

        <input class="Next" type="submit" value="Comprobar" name="nextpag2" style="width: 20%; margin-left: 24%">
        <form name="reiniciar">
            <input class="Next" type="submit" value="Reset" name="reiniciar" style="width: 20%;margin-left: 10%">
            <a href="page2.php?id=<?php echo 0 ?>" id="next" class="Next"  value="Reset" style=";padding:2%;  margin-left: 43%;visibility: hidden;">Next</a>
        </form>

    </form>


</div>
</body>
</html>

