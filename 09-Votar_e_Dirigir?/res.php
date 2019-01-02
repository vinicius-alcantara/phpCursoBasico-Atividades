<?php
    $ano_nasc = $_POST["Nano-nasc"];    
    $ano_atual = date('Y');
    $idade = ($ano_atual - $ano_nasc);
    
    if($idade >= 16 && $idade < 18) {
        echo "Você pode votar, mas não pode dirigir!";
    }
    elseif ($idade < 16) {
        echo "Você não pode votar e nem dirigir";
    }
    elseif ($idade >= 18 && $idade < 65) {
        echo "Seu voto é obrigatório e você pode dirigir";
    }
    elseif ($idade >= 65) {
        echo "Seu voto não é obrigatório e você pode dirigir";
    }
    
    echo "<br/>";
        echo "<a href='index.html'><input type='button' value='Voltar'></a>";
    
?>