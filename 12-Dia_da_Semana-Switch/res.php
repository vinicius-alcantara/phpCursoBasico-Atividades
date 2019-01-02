<?php
    $dia_sem = isset($_POST["Ndia"])? $_POST["Ndia"] : null;
    
    switch ($dia_sem) {
    case 2: //segunda
    case 3: //terça
    case 4: //quarta
    case 5: //quita
    case 6: //sexta
        echo "Hoje é dia de estudar!";
            break;

    case 7:
    case 0:
        echo "Hoje é dia de descansar!";
}
?>