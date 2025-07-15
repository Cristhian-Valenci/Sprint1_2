<?php

    function isBitten() : String {
      
        $count = rand(0, 1);
        if ($count == 0) {
            return "El perro te mordio";
        } else {
            return "El perro NO te mordio";
        }
    }

    echo isBitten();
?>