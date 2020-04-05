<?php

include("Calculadora.php");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="POST">
    
    <h1>Calculadora</h1>

    <select name="operacion" id="op">
    <option value="Suma">Suma</option>
    <option value="Resta">Resta</option>
    <option value="Multiplicacion">Multiplicacion</option>
    <option value="Division">Division</option>
    </select>
    <br>
    <label for="valor1">Valor1: </label>
    <input type="number" name="valor1">
    <br>
    <label for="valor2">Valor2: </label>
    <input type="number" name="valor2">
    <input type="submit" value="Enviar">

    </form>

    <?php
    
    if(isset($_POST["valor1"]) && isset($_POST["valor2"]) && isset($_POST["operacion"])){

        $Calculadora = new Calculadora();

        if($_POST["operacion"]=="Suma"){

           print "Resultado es: ". $Calculadora->Suma(intval($_POST["valor1"]), $_POST["valor2"]);

        }
        else{

            if($_POST["operacion"]=="Resta"){

                print "Resultado es: ". $Calculadora->Resta(intval($_POST["valor1"]), $_POST["valor2"]);
            }else{
                if($_POST["operacion"]=="Multiplicacion"){

                    print "Resultado es: ". $Calculadora->Multiplicacion(intval($_POST["valor1"]), $_POST["valor2"]);
                }else{
                    print "Resultado es: ". $Calculadora->Division(intval($_POST["valor1"]), $_POST["valor2"]);
                }
            }
        }

    }
    
    ?>
</body>
</html>