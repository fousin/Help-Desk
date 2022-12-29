<?php
    session_start();
    require('banco_user.php');

    $usuario_autenticado = false;
    $usuario_id = null;
    $usuario_perfil_id = null;
    $perfis = array(1=>'Administrativo', 2 =>'Usuário');

    //verifica a autenticaçao do usuario
    foreach($banco_dados as $user){
        
        if($user[1] == $_POST['email'] && $user[2] == $_POST['senha']){
            $usuario_autenticado = true;
            $usuario_id = $user[0];
            $usuario_perfil_id = $user[3];
        }

    }

    if($usuario_autenticado){
        echo 'usuario autenticado';
        $_SESSION['autenticado']='SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;
        header('Location: ../view/home.php?');
    }else{
        $_SESSION['autenticado']='NAO';
        header('Location: ../index.php?login=erro');
        
    }

?>