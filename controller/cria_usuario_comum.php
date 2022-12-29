<?php
    function cadastro(){
        //criando texto/dados do usuario
        $texto = PHP_EOL . 5 . '#' .  $_POST['emailCadastro'] . '#' . $_POST['senhaCadastro'] . '#' . 2 ;
        //abrindo arquivo
        $arquivo = fopen('../data/banco.ban', 'a'); //referencia do arquivo aberto
        //escrevendo o texto
        fwrite($arquivo, $texto);
        //fechando arquivo
        fclose($arquivo);
    }
    $cadastro = true;
    if($_POST['emailCadastro'] == '' || $_POST['senhaCadastro'] == ''){
        header('Location: ../view/cria_usuario.php?cod=campovazio');
    } else{
        //verificar se email ja foi cadastrado
        $arquivo = fopen('../data/banco.ban', 'r');
        $banco_dados = array();

        while(!feof($arquivo)){ //testa o fim de um arquivo end of file
                                //retorna true se chegar ao final do arquivo

            $registro = fgets($arquivo);//recuperar tudo na linha ou ate a quebra de linha
            $dado = explode('#', $registro);

            if($_POST['emailCadastro'] == $dado[1]){
                header('Location: ../view/cria_usuario.php?cod=emailUser'); 
                $cadastro = false;
            }
        }
        
    }

    if($cadastro){
        cadastro();
        header('Location: ../view/cria_usuario.php?cod=success');
    }

?>
