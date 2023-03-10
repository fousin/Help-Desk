<?php
    function cadastro($id){
        //criando texto/dados do usuario
        if($_POST['adm']=='adm'){
            $texto = PHP_EOL . $id . '#' .  $_POST['emailCadastro'] . '#' . $_POST['senhaCadastro'] . '#' . 1 ;
        }else{
            $texto = PHP_EOL . $id . '#' .  $_POST['emailCadastro'] . '#' . $_POST['senhaCadastro'] . '#' . 2 ;
        }
        //abrindo arquivo
        $arquivo = fopen('../data/banco.bd', 'a'); //referencia do arquivo aberto
        //escrevendo o texto
        fwrite($arquivo, $texto);
        //fechando arquivo
        fclose($arquivo);
    }
    
    $cadastro = true;
    $newId = 0;

    if($_POST['emailCadastro'] == '' || $_POST['senhaCadastro'] == ''){
        header('Location: ../view/cria_usuario.php?cod=campovazio');
    } else{
        //verificar se email ja foi cadastrado
        $arquivo = fopen('../data/banco.bd', 'r');
        $banco_dados = array();

        while(!feof($arquivo)){ //testa o fim de um arquivo end of file
                                //retorna true se chegar ao final do arquivo

            $registro = fgets($arquivo);//recuperar tudo na linha ou ate a quebra de linha
            $dado = explode('#', $registro);

            if($_POST['emailCadastro'] == $dado[1]){
                header('Location: ../view/cria_usuario.php?cod=emailUser'); 
                $cadastro = false;
            }
            if($newId < $dado[0]){
                $newId = $dado[0];
            }
        }
    }

    if($cadastro){
        $newId++;
        cadastro($newId);
        header('Location: ../view/cria_usuario.php?cod=success');
    }

?>
