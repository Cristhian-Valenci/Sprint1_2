<?php 


define("PRECIOCHOCOLATE", 1);
define("PRECIOCHICLE", 0.5);
define("PRECIOCARAMELO", 1.5);

$cantidadDeChocolates = readline("Cuantos chocolates quieres comprar? ");

$cantidadDeChicles = readline("Cuantos chicles quieres comprar? ");

$cantidadDeCaramelos = readline("Cuantos caramelos quieres comprar? ");

function calcularPrecioChocolate (int $cantidadDeChocolates) : float {
    return $cantidadDeChocolates * PRECIOCHOCOLATE;     
}
function calcularPrecioChicle (int $cantidadDeChicles) : float {
    return $cantidadDeChicles * PRECIOCHICLE;     
}
function calcularPrecioCaramelo (int $cantidadDeCaramelos) : float {
    return $cantidadDeCaramelos * PRECIOCARAMELO;
}

$precioTotal = calcularPrecioChocolate($cantidadDeChocolates) + calcularPrecioChicle($cantidadDeChicles) + calcularPrecioCaramelo($cantidadDeCaramelos);

echo "El precio total de tu compra es de: " . $precioTotal;

?>