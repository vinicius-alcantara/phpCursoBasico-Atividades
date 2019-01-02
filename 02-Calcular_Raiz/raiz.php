<?php
    $num = isset($_POST["Nnum"])? $_POST["Nnum"] : 0;
    $result = sqrt($num);
    
    echo "A raiz quadrada de $num é: ". round($result); //round arredonda p/ um número inteiro
        echo "<br/>";
        echo "<a href='index.html'><input type='button' value='Voltar'></a>";

?>