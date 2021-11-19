<?php
//Formulario que inluya los campos de nombre,apellidos,email , telfono y contraseña(doble confirmacion)
//Parametro String --> Acepta solo caracteres y palabras con tíldes
$paramString = '/^[a-zA-ZáéíóúÁÉÍÓÚñÑäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ]+$/';
// Solo se puede números y que el mínimo sea de 8 dígitos
$paramNum= '/[0-9].{8,}/';
//Parametros para que conteunga un numero,mayuscula,minuscula, caracter especial y que el rango sea entre de 8-16 caracteres
$paramContra= '/^(?=.*[^A-Za-z0-9])(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{8,16}$/';
// Correo -->  continenen un formato de cualquier tipo + @ contiene cualquier tipo un punto. y un string de 2-4 caracteres (com,es,net)..etc
$paramCorreo= '/[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4}/';
// Inicion la sesión
session_start();
$nombre = null;
// Boton para reiniciar
if (isset($_GET['reiniciar'])) {
    //Al reiniciar quito todas las sesiones acumuladas
    session_destroy();
    session_start();
}
if(isset($_GET['nextpag2'])){
    // Campo de nombre
    $_SESSION['fName']= $_GET['nombre'];
    // Campo de Apellido
    $_SESSION['lName'] = $_GET['apellido'];
    // Campo de Correo
    $_SESSION['email'] = $_GET['correo'];
    // Campo de telefono
    $_SESSION['telef']= $_GET['telefono'];
    // Campo de contraseña
    $_SESSION['passwd'] = $_GET['contrasena'];
    // Campo de confirmar contraseña
    $_SESSION['confPasswd'] =$_GET['confContrasena'];
    // Array vacio
    $_SESSION['infoForm']= [];
    //Si no coincide con el pregmatch mostrará los errores correspondiendtes de cada apartado
    if(!preg_match($paramString, $_SESSION['fName'])){
        echo '<script> alert("Error escribe un nombre válido")</script>';
    }
    if(!preg_match($paramString, $_SESSION['lName'])){
        echo '<script> alert("Error escribe un Apellido válido")</script>';
    }
    if(!preg_match($paramCorreo, $_SESSION['email'])){
        echo '<script> alert("Error en el Correo Inserta un correo válido")</script>';
    }
    if(!preg_match($paramNum,   $_SESSION['telef'])){
        echo '<script> alert("Error en el telefono Inserta un numero")</script>';
    }
    if(!preg_match($paramContra, $_SESSION['passwd'])){
        echo '<script> alert("Error en la Contraseña. Debe tener entre 8 y 16 caracateres y " +
    "al menos un caracter minuscula , una mayuscula, numero y algo que no sea ni numero ni letra")</script>';
    }
    if($_SESSION['passwd'] != $_SESSION['confPasswd'] || $_SESSION['passwd'] == null){
        echo "No son iguales";
    }
    //Si toooodo esta bien se acumula en un array
    if(preg_match($paramString, $_SESSION['fName']) && preg_match($paramString, $_SESSION['lName'])&& preg_match($paramCorreo, $_SESSION['email']) &&
        preg_match($paramContra, $_SESSION['passwd'])){
        echo '<script> alert("Datos introducidos Correctamente")</script>';
        // page2.php?nombre=adas&apellido=sada&correo=asda&telefono=asd&contrasena=asd&confContrasena=asd&nextpag2=Next
        //header(" Location: page2.php?");
        $_SESSION['infoForm']= [
            'nombre' =>  $_SESSION['fName'],
            'apellidos' =>  $_SESSION['lName'],
            'correo' =>  $_SESSION['email'],
            'telefono' =>  $_SESSION['telef'],
            'contrasena' =>  $_SESSION['passwd']
        ];
        //Imprime el array
         print_r($_SESSION['infoForm']);
         $nombre = $_SESSION['infoForm']['nombre'];



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
        <form name="formUser" method="get" class="Inputs"   >
            <input type="text" placeholder="Nombre" name="nombre"><br>
            <input type="text" placeholder="Apellido" name="apellido"><br>
            <input type="email" placeholder="Email" name="correo"><br>
            <input type="text" placeholder="Teléfono" name="telefono"><br>
            <input type="password" placeholder="Contraseña" name="contrasena"><br>
            <input type="password" placeholder="Confirmar Contraseña" name="confContrasena"><br>
            <input class="Next" type="submit" value="Next" name="nextpag2" style="cursor: pointer">
        </form>
        <form name="reiniciar">
        <input class="Next" type="submit" value="Reset" name="reiniciar" style="cursor: pointer; margin-left: 40%">
        </form>
         <a href="page3.php?nombre=<?php echo $nombre ?>">Hola</a>
    </div>
</body>
</html>
