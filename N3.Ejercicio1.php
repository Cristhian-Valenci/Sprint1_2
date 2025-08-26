<?php 

$numero = readline("Elije un numero entero positivo y te mostrare su Criba de Eristostenes");

print_r(encontrarCribaDeEratostenes($numero));


 function encontrarCribaDeEratostenes($numero) : array{
   $criba = [];

   for($i = 2; $i<= $numero; $i++) {
    $criba[$i] = $i;
   }

   foreach ($criba as $num) {
    for ($i = 2; $i * $num <= $numero; $i++) {
        $multiplo = $i * $num;
        unset($criba[$multiplo]);
    }
   }

   return  $criba;
}

?>