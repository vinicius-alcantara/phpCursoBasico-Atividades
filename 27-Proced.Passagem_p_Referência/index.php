<?php
    //Passagem de Parâmetro por valor
     function soma1($x) {
        $x = ($x + 2);
            echo "$x<br/>";
    }
    
    $a = 3;
        soma1($a);
            echo "$a<br/>";
            

    //___________________________________

    //Passagem de parâmetro por referência
    function soma2(&$x) {
        $x = ($x + 2);
            echo "$x<br/>";
    }
    
    $b = 3;
        soma2($b);
            echo "$b";
?>