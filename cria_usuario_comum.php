<?php

    //criando texto/dados do usuario
    $texto = 5 . '#' .  $_POST['emailCadastro'] . '#' . $_POST['senhaCadastro'] . '#' . 2 . PHP_EOL;
    
    //abrindo arquivo
    $arquivo = fopen('banco.ban', 'a'); //referencia do arquivo aberto

    //escrevendo o texto
    fwrite($arquivo, $texto);

    //fechando arquivo
    fclose($arquivo);

    header('Location: index.php?cod=success');
?>
