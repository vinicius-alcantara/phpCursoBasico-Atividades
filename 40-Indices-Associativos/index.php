<pre>
<?php
    //Índices associativos - Utilizando strings como índice/posiçõa no vetor
    $v = array (
        "Nome" => "Vinícius",
        "Sobrenome" => "Alcântara",
        "Idade" => 31,
        "Altura" => 1.85,
        "Peso" => 130
    );
    
    $v["Fuma"] = TRUE; //Adicionando uma nova prosição
        //print_r($v);
    
        foreach ($v as $campo => $valor) {
            echo "O campo $campo possui o conteúdo $valor<br/>";
        }
        
?>
</pre>
