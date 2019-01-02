<?php
    //Soma vários argumentos
    function soma() {
        $p = func_get_args();
        $tot = func_num_args();
        $s = 0;
            for($i = 0; $i < $tot; $i++){
                $s += $p[$i];
            }
                return $s;   
    }
    
            $resp = soma(5,5,5);
            echo "$resp";
?>

