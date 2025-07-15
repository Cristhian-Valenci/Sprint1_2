<?php

    function calcularGradoDelEstudiante($nota) {
        if ($nota >= 60) {
            return "Primera Division";
        } elseif ($nota >= 45) {
            return "Segunda Division";
        } elseif ($nota >= 33) {
            return "Tercera Division";
        }else {
            return "Estudiante reprobado";
        }
      
    }
   
    //Ejemplo :
    echo gradoDelEstudiante(60);
?>