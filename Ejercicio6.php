<?php

    function isBitten() : bool {
      
        rand(0, 1);
        if (rand() == 0) {
            return "El perro te mordio";
        } else {
            return "El perro NO te mordio";
        }
    }
?>