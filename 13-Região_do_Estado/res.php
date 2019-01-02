<?php
    $estado = isset($_POST["Nestado"])? $_POST["Nestado"] : NULL;
    
    switch ($estado) {
    case "AM":
    case "RR":
    case "AP":
    case "PA":
    case "TO":
    case "RO":
    case "AC":
        echo "O estado selecionado pertence a região Norte!";
            break;
    
    case "MA":
    case "PI":
    case "CE":
    case "RN":
    case "PE":
    case "PB":
    case "SE":
    case "AL":
    case "BA":
        echo "O estado selecionado pertence a região Nordeste!";
            break;
        
    case "MT":
    case "MS":
    case "GO":
            echo "O estado selecionado pertence a região Centro-Oeste!";
            break;
        
    case "SP":
    case "RJ":
    case "ES":
    case "MG":
            echo "O estado selecionado pertence a região Sudeste!";
            break;
        
    case "RS":
    case "PR":
    case "SC":
            echo "O estado selecionado pertence a região Sul!";
}
    
?>

