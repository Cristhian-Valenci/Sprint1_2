
<?php

    $x = 10;
    $y = 5;
    $N = 20.5;
    $M = 15.7;

    $sumaXY = $x + $y;
    $restaXY = $x - $y;
    $multiplicacionXY = $x * $y;
    $moduloXY = $x % $y;

    $sumaNM = $N + $M;
    $restaNM = $N - $M;
    $multiplicacionNM = $N * $M;
    $divisionNM = $N / $M;

    $dobleDeX = $x * 2;
    $dobleDeY = $y * 2;
    $dobleDeN = $N * 2;
    $dobleDeM = $M * 2;
    $sumaDeVaribales = $x + $y + $N + $M;
    $miltiplicacionDeVariables = $x * $y * $N * $M;

    echo $sumaXY . "<br>";
    echo $restaXY . "<br>";
    echo $multiplicacionXY . "<br>";
    echo $moduloXY . "<br>";

    echo $sumaNM . "<br>";
    echo $restaNM . "<br>";
    echo $multiplicacionNM . "<br>";
    echo $divisionNM . "<br>";  

    $opcion = "Suma"; //Ejemplo de una opcion que elija el usuario.
    function calculadora($x, $y, string $opcion) {
        switch ($opcion) {
            case "Suma":
                return $x + $y;
                break;
            case "Resta":
                return $x - $y;
                break;
            case "Multiplicacion":
                return $x * $y;
                break;
            case "Division":
                return $x / $y;
                break;
            default:
                return "Elije una opcion valida por favor.";
        }

       
    }
   
     echo calculadora($x, $y, $opcion);




?>
