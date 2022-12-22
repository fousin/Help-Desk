<?php
    $arquivo = fopen('banco.ban', 'r');
    $banco_dados = array();
    
    //enquanto houver registros
    while(!feof($arquivo)){//testa o fim de um arquivo end of file//retorna true se chegar ao final do arquivo
        $registro = fgets($arquivo);//recuperar tudo na linha ou ate a quebra de linha especificada

        $dado = explode('#', $registro);
        
        array_push($banco_dados, $dado);
    }

    fclose($arquivo);



?>  
