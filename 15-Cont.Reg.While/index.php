<?php
    //Contador Regressivo de 10 até 1
    /* Primeira Forma
    $cont = 10;
    while ($cont <= 10 && $cont >= 1) {
        echo "$cont<br/>";
        --$cont;
        
    }
    */

    $cont = 10;
    while ($cont <= 10 && $cont >= 1) {
        echo "$cont<br/>";
        $cont -= 1;
    }
?>

