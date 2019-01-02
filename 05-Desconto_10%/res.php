<?php
    $valor = isset($_POST["Nvl"]) ? $_POST["Nvl"] : 0;
    $desconto = 0.10;
    $result = (number_format($valor)) * ($desconto); 
    
    echo "O Valor do produto com 10% de desconto é: $ ". number_format($result,2);
        echo "<br/>";
            echo "<a href='index.html'><input = type='button' value='Voltar'></a>";
?>
