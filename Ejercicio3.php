
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

    echo $sumaXY . "<br>";
    echo $restaXY . "<br>";
    echo $multiplicacionXY . "<br>";
    echo $moduloXY . "<br>";

    echo $sumaNM . "<br>";
    echo $restaNM . "<br>";
    echo $multiplicacionNM . "<br>";
    echo $divisionNM . "<br>";  

    function calculadora($x, $y) {
        $suma = $x + $y;
        $resta = $x - $y;
        $multiplicacion = $x * $y;
        $division = $x / $y;

        return[$suma, $resta, $multiplicacion, $division];
    }
   




?>
