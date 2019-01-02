<?php
    $Nnum1 = isset($_POST["Nnum1"])? $_POST["Nnum1"] : NULL;
    $Nnum2 = isset($_POST["Nnum2"])? $_POST["Nnum2"] : NULL;
    $cont = isset($_POST["Ncont"])? $_POST["Ncont"] : NULL;
    
    if($Nnum1 <= $Nnum2) {
        while ($Nnum1 <= $Nnum2){
            echo "$Nnum1<br/>";
            $Nnum1 += $cont;
        }
    }
    else {
            while ($Nnum1 >= $Nnum2) {
                echo "$Nnum1<br/>";
               $Nnum1 -= $cont;
            }
    }
    
?>
