<?php
    $A = $_POST ['A'];
    $B = $_POST ['B'];
    $C = $_POST ['C'];
    if (($A < $B+$C) && ($B < $A+$C) && ($C < $A+$B))
        if (($A == $B) && ($B==$C))
            echo "Este triangulo e equilatero <br>";
        else if (($A==$B) || ($A==$C) || ($B==$C))
            echo "Este triangulo e isosceles <br>";
        else
            echo "Este triangulo e escaleno <br>";
    else
        echo "Isto nao e triangulo <br>";
?>