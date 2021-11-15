<?php
//Formulario que muestre los datos de los anteriores formularios
// no soy robot, mensaje de confirmacion y descargar fcihero con datos
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Document</title>
</head>
<body>
<div class="Numeros">
    <span class="pagina" style="background-color:#12ad5e; color: white">1</span>
    <span class="lineas"style="background-color:#12ad5e;"></span>
    <span class="pagina" style="background-color:#12ad5e; color: white";">2</span>
    <span class="lineas" style="background-color:#12ad5e;"></span>
    <span class="pagina"  style="background-color:#12ad5e; color: white">3</span>
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
        <input type="text" placeholder="Provincia" name="provincia" readonly value="">
        <input type="" placeholder="Ciudad" name="ciudad">
        <select name="ciudad" id="ciudad">
            <option value=""></option>
            <option value="Monclo-Aravaca">Moncloa-Aravaca</option>
            <option value="pinto">Pinto</option>
        </select>
        <input  type="text" placeholder="Código Postal" name="cp" value="28" readonly>
        <input type="text" placeholder="Web" name="web">
    </div>
    <div class="botones">
        <form action="page3.php" methods="GET">
            <a class="Back" href="page2.php" methods="GET" style="cursor: pointer; margin-left: 15%; padding: 2% 5%; text-decoration: none;">BACK </a>
            <a href="page2.php" methods="GET">
                <input class="Next" type="submit" value="Finish" name="finish" style="cursor: pointer;  margin-left: 15%;"></a>
            </a>
        </form>
</div>

</body>
</html>