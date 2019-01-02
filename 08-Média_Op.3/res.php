<?php
    $nota1 = isset($_POST["Nnota1"])? $_POST["Nnota1"] : NULL;
    $nota2 = isset($_POST["Nnota2"])? $_POST["Nnota2"] : NULL;
    $nota3 = isset($_POST["Nnota3"])? $_POST["Nnota3"] : NULL;
    $nota4 = isset($_POST["Nnota4"])? $_POST["Nnota4"] : NULL;
    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
    $sit = ($media < 7)? "Reprovado" : "Aprovado";
    
    echo "Sua média é: $media. Você está $sit";
        echo "<br/>";
            echo "<a href='index.html'><input type='button' value='Voltar'/></a>";
?>