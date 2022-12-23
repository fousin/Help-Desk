<?php
    session_start();

    //montando o texto
    $titulo= str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);
    //implode('#',$_POST);
    $texto = $_SESSION['id'] . '#' . $titulo . '#'. $categoria . '#' . $descricao . PHP_EOL;

    //abrindo arquivo
    $arquivo = fopen('data/arquivo.hd', 'a'); //referencia do arquivo aberto
    //escrevendo o texto
    fwrite($arquivo, $texto);
    //fechando arquivo
    fclose($arquivo);
    header('Location: abrir_chamado.php')
    //echo $texto;
?>