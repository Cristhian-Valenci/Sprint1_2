<?php

    function isBitten() : bool {
      
        rand(0, 1);
        if (rand() == 0) {
            return true;
        } else {
            return false;
        }
    }
?>