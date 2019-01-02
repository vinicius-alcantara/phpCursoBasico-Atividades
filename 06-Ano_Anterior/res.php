<?php
    /*
    Formula Normal
    $ano_atual = isset($_POST["Naat"]) ? $_POST["Naat"] : 0;
    $cont = 1;
    $result = $ano_atual - $cont;
    */

    /* Formaula com pré-decremento
   
    $ano_atual = isset($_POST["Naat"]) ? $_POST["Naat"] : 0;
    $dec = 1;
    $result = $ano_atual -= $dec;
        echo "O ano anterior é: $result";
            echo "<br/>";
                echo "<a href='index.html'><input type='button' value='Voltar'></a>";
   
     */

    // OU AINDA ASSIM TBM, COM PRÉ-DECREMENTO
    $ano_atual = isset($_POST["Naat"]) ? $_POST["Naat"] : 0;
    $result = --$ano_atual;
    echo "O ano anterior é: $result";
            echo "<br/>";
                echo "<a href='index.html'><input type='button' value='Voltar'></a>";
?>

