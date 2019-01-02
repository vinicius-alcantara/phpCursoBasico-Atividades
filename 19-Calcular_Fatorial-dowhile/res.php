<?php
    //Calcula o Fatorial de um Número Inteiro
    $num = isset($_POST["Nnum"])? $_POST["Nnum"] : NULL;
    $cont = ($num - 1);
    $num_orig = $num;
    
    do {
        $resp = ($num * $cont); 
        --$cont;
        $num = $resp;
    } while ($cont >=1);
    
    echo "O fatorial de $num_orig é: $resp";
?>
