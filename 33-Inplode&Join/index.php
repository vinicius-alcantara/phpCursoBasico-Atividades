<?php
    //Implode - Unificando valores de vetores p uma única variável
    $vetor[0] = "Marcus";
    $vetor[1] = "Vinícius";
    $vetor[2] = "Braga";
    $vetor[3] = "Alcântara";
    
    $nome = implode(" ", $vetor);
        echo "$nome";
        
    /*
     * Ou podendo usar a função Join
     
        $nome = join(" ", $vetor);
            echo "$nome";
     */
?>
     
