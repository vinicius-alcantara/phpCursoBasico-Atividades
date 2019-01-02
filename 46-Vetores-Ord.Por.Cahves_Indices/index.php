<pre>
<?php
    //Ordenação Associativa
    $v = array(
        "C",
        "A",
        "E",
        "B",
        "D"
    );
    
    print_r($v);
        echo "<br/>";
    
    ksort($v);//Ordenação Progressiva
        print_r($v);
            echo "<br/>";
    
    krsort($v);
        print_r($v);//Ordenação Reversa
?>
</pre>
