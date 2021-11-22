<?php
//Formulario que muestre los datos de los anteriores formularios
// no soy robot, mensaje de confirmacion y descargar fcihero con datos
session_start();

$fnombre = "";
$apellido = "";
$correo =  "";
$telefono = "";
$contra = "";
$provincia = "";
$ciudad = "";
$cp = "";
$web = "";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $formCompletado = $_SESSION['infoForm'][$id];
    $fnombre =  $formCompletado['nombre'];
    $apellido = $formCompletado['apellidos'];
    $correo =  $formCompletado['correo'];
    $telefono = $formCompletado['telefono'];
    $contra = $formCompletado['contrasena'];
    $provincia = $formCompletado['provincia'];
    $ciudad = $formCompletado['ciudad'];
    $cp = $formCompletado['cp'];
    $web = $formCompletado['web'];

    $fichero = fopen("fichero/archivo.txt", "w");
    fwrite($fichero, "Nombre:  $fnombre" . PHP_EOL);
    fwrite($fichero, "Apellido: $apellido" . PHP_EOL);
    fwrite($fichero, "Email: $correo" . PHP_EOL);
    fwrite($fichero, "Telefono:  $telefono" . PHP_EOL);
    fwrite($fichero, "Password:  $contra "  . PHP_EOL);
    fwrite($fichero, "Provincia: $provincia" . PHP_EOL);
    fwrite($fichero, "Ciudad: $ciudad" . PHP_EOL);
    fwrite($fichero, "CP: $cp" . PHP_EOL);
    fwrite($fichero, "Web: $web" . PHP_EOL);
    fclose($fichero);
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
        Nombre: <input type="text" name="nombre" value="<?php echo $fnombre ?>" style="width:20%; margin-right: 10%" disabled>
        Apellido: <input type="text" name="apellido" value="<?php echo $apellido ?>" disabled><br>
        Email: <input type="text" name="email"   value="<?php echo $correo ?>" disabled>
        Telefono: <input type="text" name="telefono" value="<?php echo $telefono ?>"style="width:23%"  disabled><br>
        Password: <input type="password" name="password"  value="<?php echo $contra ?>"style="width:18%; margin-right: 10%" disabled>
        Provincia: <input type="text" name="provincia" value="<?php echo $provincia ?>" style="width:25%" disabled><br>
        Ciudad: <input type="text" name="ciudad" value="<?php echo $ciudad ?> "style="width:20%; margin-right:11%;" disabled>
        CP: <input type="text" name="cp"  value="<?php echo $cp ?>"style="width: 15%" disabled><br>
        Web: <input type="text" name="web" value="<?php echo $web ?>" disabled>
    </div>
    <div class="botones">
        <form method="get" name="formFinal">
            <a href="page2.php" class="Back" style="cursor: pointer; margin-left: 20%; padding: 2% 3%; text-decoration: none">Back</a>
            <a href="fichero/archivo.txt" class="Descargar" download="fichero/archivo.txt" style="padding: 2% 3%;  margin-left: 15%; ">Descargar </a>
        </form>
    </div>
    <br/>
</div>

</body>
</html>