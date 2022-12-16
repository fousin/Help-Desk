<?php
    session_start();
    /*
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';

    //remover indices do array de sessão
    //unset($_SESSION)

    unset($_SESSION['X']);//remove o indice apenas se ele existir sem dar erro
    
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';

    //destruir a variavel de sessão
    //session_destroy()
    session_destroy();//será destruida mas ainda teremos acesso ate uma nova requisição
    //force um redirecionamento pra uma nova requisição

    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';
    */
    session_destroy();
    header('Location: index.php')

?>
