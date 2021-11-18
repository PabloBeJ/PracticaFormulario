<?php
//Formulario que incluya lso campos de dirección,+
//ciudad, provincia, codigo postal, y web
$provincias = [];
$string = file_get_contents("fichero/ProvinciasEspana.txt");
$array = explode("\n",$string);
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
if(isset($_GET['next'])){
    $_SESSION['CodigoP']= $_GET['cp'];
    if(!preg_match("/[0-9]/",   $_SESSION['CodigoP'])){
        echo '<script> alert("Errrror Inserta un numero")</script>';
    }else {
        echo $_SESSION['telf'];
    }
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
    <form name="formUser" method="get" class="Inputs2" action="page3.php">
        <input type="text" placeholder="Provincia" name="provincia" readonly value="">
        <input type="" placeholder="Ciudad" name="ciudad">
        <select name="ciudad" id="ciudad">
            <option value=""></option>
            <option value="Monclo-Aravaca">Moncloa-Aravaca</option>
            <option value="pinto">Pinto</option>
        </select>
        <input style="margin-left: 25%" type="number" placeholder="Código Postal" name="cp" value="28" >
        <input type="text" placeholder="Web" name="web">
            <a class="Next" href="page1.php" methods="GET" style=" margin-left: 15%; padding: 2% 5%; text-decoration: none;">BACK </a>
        <input class="Next" type="submit" value="Next" name="next" style="cursor: pointer; padding: 2% 5%; font-size: 30px; margin-left: 20%;">
    </form>
</div>
</body>
</html>