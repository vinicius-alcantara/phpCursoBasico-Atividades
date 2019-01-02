<?php
    $num = $_POST["Nnum"];
    $op = $_POST["Nop"];
    
    switch ($op) {
    case "dobro":
        $resp = ($num * 2);
            echo "O dobro de $num é $resp";
            break;
    case "cubo":
        $resp = pow($num, 3);
            echo "O cubo de $num é $resp";
            break;
    case "raiz":
        $resp = sqrt($num);
            echo "A raiz de $num é $resp";
}
?>