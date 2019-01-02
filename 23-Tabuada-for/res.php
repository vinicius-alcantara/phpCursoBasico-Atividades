<?php
    //tabuada
    $num = isset($_POST["Nnum"])? $_POST["Nnum"]:NULL;
    $op = isset($_POST["Nop"])? $_POST["Nop"]:NULL;
    
    switch ($op){
        case 1:
            for($cont = 1; $cont <= 10; $cont++){
                $resp = ($num + $cont);
                echo "$num + $cont = $resp <br/>";
            }
            break;
        case 2:
            for($cont = 1; $cont <= 10; $cont++){
                $resp = ($num - $cont);
                echo "$num - $cont = $resp <br/>";
            }
            break;
        case 3:
            for($cont = 1; $cont <= 10; $cont++){
                $resp = ($num * $cont);
                echo "$num X $cont = $resp <br/>";
            }
            break;
        case 4:
            for($cont = 1; $cont <= 10; $cont++){
                $resp = ($num / $cont);
                echo "$num / $cont = $resp <br/>";
            }
    }
?>