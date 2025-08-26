<?php 

define("COSTOPORMINUTO",5);

function calcularCantidadAPagar(int $minutos) : int {
    $costoDeLlamada;
    
    if ($minutos <= 0) {
        $costoDeLlamada = 0;
    } else if ($minutos <= 3) {
        $costoDeLlamada = 10;
    } else {
        $costoDeLlamada = 10 + (($minutos - 3) * COSTOPORMINUTO);   
    }

    return $costoDeLlamada;
}
echo calcularCantidadAPagar(0) . "<br>";
echo calcularCantidadAPagar(2) . "<br>";
echo calcularCantidadAPagar(5) . "<br>";
echo calcularCantidadAPagar(10) . "<br>";
?>