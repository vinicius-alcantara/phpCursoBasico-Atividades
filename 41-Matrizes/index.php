<pre>
<?php
    $matriz = array(
        array(2,4),
        array(4,6),
        array(8,10)
    );
    print_r($matriz). "<br/>";
    
    $matriz[2][0] = $matriz[0][1];//Atribuindo valor de um array para outro
    
    print_r($matriz);
    
?>
</pre>