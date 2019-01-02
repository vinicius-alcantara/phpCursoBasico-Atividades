<?php
    $num1 = isset($_POST["Nnum1"]) ? $_POST["Nnum1"] : 0;
    $num2 = isset($_POST["Nnum2"]) ? $_POST["Nnum2"] : 0;
    $operacao = isset($_POST["Nop"]) ? $_POST["Nop"] : 0;
    
    if($operacao == "adicao") {
        $result = ($num1) + ($num2);
        echo "O Resultado da operação é: $result";
    } 
    
    else {
        $result = ($num1) * ($num2);
        echo "O Resultado da operação é: $result";
}

    echo "<br/>";

    echo "<a href='index.html'><input type='button' value='Voltar'></a>";
    
?>