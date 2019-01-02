<?php
    $num = isset($_POST["Nnum"])? $_POST["Nnum"] : NULL;
    $op = isset($_POST["Nop"])? $_POST["Nop"] : NULL;
    $cont = 1;
    switch ($op) {
    case 1:
        do {
        $resp = ($num + $cont);
            echo "$num + $cont = $resp <br/>";
            ++$cont;
        }while ($cont <= 10);
        
        break;
        
    case 2: 
        do {
        $resp = ($num - $cont);
            echo "$num - $cont = $resp <br/>";
            ++$cont;
        }while ($cont <= 10);
        
        break;
        
    case 3:
        do {
        $resp = ($num * $cont);
            echo "$num X $cont = $resp <br/>";
            ++$cont;
        }while ($cont <= 10);
        
        break;
        
    case 4:
        do {
        $resp = ($num / $cont);
            echo "$num / $cont = $resp <br/>";
            ++$cont;
        }while ($cont <= 10);
    }
    
    
?>

