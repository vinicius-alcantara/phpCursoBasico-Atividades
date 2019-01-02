<pre>
<?php
    $v = array(
        1,
        2,
        3,
        4,
        5
    );
    
    print_r($v);
        echo "<br/>";
    
    array_unshift($v, 0);//Adiciona um novo valor no início do vetor
        print_r($v);
            echo "<br/>";
    
    array_shift($v);//Remove valor no início do vetor
        print_r($v);
?>
</pre>