<?php

    function gradoDelEstudiante($nota) {
        if ($nota >= 60) {
            return "Primera Division";
        } elseif ($nota >= 45 && $nota <= 59) {
            return "Segunda Division";
        } elseif ($nota >= 33 && $nota <= 44) {
            return "Tercera Division";
        }else {
            return "Estudiante reprobado";
        }
      
    }
   
    //Ejemplo :
    echo gradoDelEstudiante(60);
?>