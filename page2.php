<?php
//Formulario que incluya lso campos de dirección,+
//ciudad, provincia, codigo postal, y web
$provincias = [];
$string = file_get_contents("fichero/ProvinciasEspana.txt");
$array = explode("\n",$string);
$paramWeb= '/www.+[-0-9a-zA-Z.+_].[a-zA-Z]{2,4}/';
$paramString = '/^[a-zA-ZáéíóúÁÉÍÓÚñÑäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ]+$/';
$paramNum = '/[0-9].{4,}/';
foreach ($array as $key => $row){
    $item = explode(";",$row);
    $provincias[] = [
            'id'=> $item[0],
             'provincia' => $item[1]
    ];
}
foreach ($provincias as $numero => $valor){
    echo $valor['id'];
    echo $valor['provincia'];
}
if(isset($_GET['nextpag3'])){
    $_SESSION['Fciudad'] = $_GET['ciudad'];
    $_SESSION['CodigoCP']= $_GET['cp'];
    $_SESSION['pagWeb'] = $_GET['web'];
    echo  $_SESSION['Fciudad'] . " WENAS "  .   $_SESSION['CodigoCP'];
    if(!preg_match($paramString,   $_SESSION['Fciudad'])){
    //    echo '<script> alert("Errrror Inserta una Ciudad válido")</script>';
        ?>
        <input id="checkCiudad" value="error">
        <?php
    }else  ?> <input id="checkCiudad" value="verdadero"> <?php
   if(!preg_match($paramNum,  $_SESSION['CodigoCP'])){
      //  echo '<script> alert("Errrror Inserta un numero")</script>';
       ?>
       <input id="checkCP" value="error">
       <?php
    }else  ?> <input id="checkCP" value="verdadero"> <?php
    if(!preg_match($paramWeb,   $_SESSION['pagWeb'])){
      //  echo '<script> alert("Errrror Inserta una web valida")</script>';
        ?>
        <input id="checkWeb" value="error">
        <?php
    }else  ?> <input id="checkWeb" value="verdadero"> <?php
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="script/script2.js" type="text/javascript"></script>
    <title>Document</title>
</head>
<body class="pagina2">
<div class="Numeros">
    <span class="pagina" style="background-color:#12ad5e; color: white">1</span>
    <span class="lineas" style="background-color:#12ad5e;"></span>
    <span class="pagina" style="background-color:#12ad5e; color: white" ;">2</span>
    <span class="lineas"></span>
    <span class="pagina">3</span>
</div>
<div class="Titulos">
    <span>ACCOUNT SET UP</span>
    <span>ADDITIONAL DATA<span></span></span>
    <span>ACCOUNT SUMMARY</span>
</div>
<div class="Formulario">
    <h1>Add Extra Data</h1>
    <h2>Step 2</h2>
    <img src="img/Espana.jpg" ; alt="Mapa de Espana">
    <form name="formUser" method="get" class="Inputs2">
        <input type="text" placeholder="Provincia" name="provincia" readonly value="">

      <!--  <label id="errorCiudad" style="color: red" for=""> </label> <br> -->
        <input type="" placeholder="Ciudad" id="ciudad" name="ciudad" value="">

        <select name="ciudad" id="Peppa">
            <option value=""></option>
            <option value="Monclo-Aravaca">Moncloa-Aravaca</option>
            <option value="pinto">Pinto</option>
        </select>
        <!--  <label id="errorCP" style="margin-left: 15%; color: red" for=""> </label><br> -->
       <input style="margin-left: 25%" id="codigoPostal" type="text"   placeholder="Código Postal" name="cp" value="28" >

        <!--       <label id="errorWeb" style="margin-left: 15%; color: red" for=""> </label><br> -->

       <input type="text" id="web" placeholder="Web" name="web">
       <a class="Next" href="page1.php" methods="GET" style=" margin-left: 15%; padding: 2% 5%; text-decoration: none;">BACK </a>
       <input class="Next" type="submit" value="Next" name="nextpag3" style="cursor: pointer">
   </form>
</div>
</body>
</html>