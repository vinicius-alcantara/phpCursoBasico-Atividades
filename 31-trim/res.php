<?php
    //Removendo Espaços com a função trim, ltrim e rtrim
    //trim - Remove espaçoes no início e no final
    //ltrim - Remove espaços a esquerda
    //rtrim - Remove espaços a direita
    $nome = isset($_POST["Nnome"])?$_POST["Nnome"]:NULL;
        echo (strlen($nome)). "<br/>";
    $nome = trim($nome);
        echo (strlen($nome));
?>
