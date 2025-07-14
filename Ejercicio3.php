
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

    $opcion = 0; //Ejemplo de una opcion que elija el usuario, siendo 1 - Suma, 2 - Resta, 3 - Multiplicacion, 4 - Division
    function calculadora($x, $y, $opcion) {
        switch ($option) {
            case '1':
                return $x + $y;
                break;
            case '2':
                return $x - $y;
                break;
            case '3':
                return $x * $y;
                break;
            case '4':
                return $x / $y;
                break;
            default:
                return "Elije una opcion valida por favor.";
        }
    }
   




?>
