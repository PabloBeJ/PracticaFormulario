<?php
//Formulario que incluya lso campos de dirección,+
//ciudad, provincia, codigo postal, y web
$meses = [];
$string = file_get_contents("fichero/ProvinciasEspana.txt");
$array = explode("\n",$string);

foreach ($array as $key => $row){
    $item = explode(";",$row);
    $meses[] = [
            'id'=> $item[0],
             'provincia' => $item[1]
    ];
}
foreach ($meses as $numero => $valor){
    echo $valor['id'];
        echo $valor['provincia'];
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
    <div class="Inputs2">
        <input type="text" placeholder="Provincia" name="provincia" readonly value="">
        <input type="" placeholder="Ciudad" name="ciudad">
        <select name="ciudad" id="ciudad">
            <option value=""></option>
            <option value="Monclo-Aravaca">Moncloa-Aravaca</option>
            <option value="pinto">Pinto</option>
        </select>
        <input style="margin-left: 25%" type="text" placeholder="Código Postal" name="cp" value="28" readonly>
        <input type="text" placeholder="Web" name="web">
    </div>
    <div class="botones">
        <form action="page3.php" methods="GET">
            <a class="Back" href="page1.php" methods="GET" style=" margin-left: 15%; padding: 2% 5%; text-decoration: none;">BACK </a>
            <a href="page2.php" methods="GET">
            <input class="Next" type="submit" value="Next" name="next" style="cursor: pointer;  margin-left: 15%; text-decoration: none;"></a>
            </a>
        </form>
    </div>
</div>
</body>
</html>