<?php
    session_start();
    require('banco_user.php');

    //verifica a autenticaçao do usuario 
    $usuario_autenticado = false;
    $usuario_id = null;
    $usuario_perfil_id = null;
    $perfis = array(1=>'Administrativo', 2 =>'Usuário');

    
    foreach($banco_dados as $user){

        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
            $usuario_id = $user['id'];
            $usuario_perfil_id = $user['perfil_id'];
        }

    }

    if($usuario_autenticado){
        echo 'usuario autenticado';
        $_SESSION['autenticado']='SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;
        //header('Location: home.php?');

    }else{
        $_SESSION['autenticado']='NAO';
        //header('Location: index.php?login=erro');
        
    }

?>