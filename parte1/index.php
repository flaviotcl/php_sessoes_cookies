<?php

/*** Trabalhando com Cookies ***/
//setcookie('meunome','Flavio',time()+ 3600);


/***Criando Sessões ***/
/***
*  session_save_path(__DIR__.'/sessions');
*  session_start();
*  $_SESSION['email'] = flaviotcl@gmail.com';  
***/




/***Manipulando os dados da Sessão  ***/

    session_start();


    $_SESSION['usuario'] = [
        'nome' => 'Erik',
        'idade' => 32,
        'ativo' => true,
        'rate' => 4.3
    ];

    unset($_SESSION['usuario']);
 
    $_SESSION['usuario'] = [
        'nome' => 'Flavio',
        'idade' => 33,
        'ativo' => true,
        'rate' => 3.3
    ];
