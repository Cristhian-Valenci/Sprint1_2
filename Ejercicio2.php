
<?php

    $saludo = "Hello, World!";
    $saludoEnMayusculas = strtoupper($saludo);
    $longitudDeSaludo = strlen($saludo);
    $arraySaludo = ["H", "e", "l", "l", "o", ",", " ", "W", "o", "r", "l", "d", "!"];
    $saludoInverso = array_reverse($arraySaludo);
    $curso = "Este es el curso de PHP";


    echo $saludo . "<br>";
    echo $saludoEnMayusculas . "<br>";
    echo $longitudDeSaludo . "<br>";
    echo implode($saludoInverso) . "<br>"; //convierte el array a un solo String
    echo $saludo . " " . $curso . "<br>";


?>