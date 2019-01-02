<?php
    $nota1 = $_POST["Nnota1"];
    $nota2 = $_POST["Nnota2"];
    $nota3 = $_POST["Nnota3"];
    $nota4 = $_POST["Nnota4"];
    $media = ($nota1 + $nota2 + $nota3 + $nota4) /4;
    
    if($media < 7 && $media >= 5) {
        echo "Sua media é $media.<br/>";
        echo "Você está de prova final!";
    }
    elseif($media >= 7) {
        echo "Sua media é $media.<br/>";
        echo "Você está aprovado!";
    }
 else {
        echo "Sua media é $media.<br/>";
        echo "Você está reprovado!";
    }
    echo "<br/>";
    echo "<a href='index.html'><input type='button' value='Voltar'></a>";
?>