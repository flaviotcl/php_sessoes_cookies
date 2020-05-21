<?php
    session_start();
   
    /*** 
     *   session_destroy() remove todas as chaves/variáveis
     *   de $_SESSION['usuario']; 
     **/


    $usuario = $_SESSION['usuario']; 
   
    /*** 
     *   Verifico se existe a chave 'rate' e aplico unset(),
     *   se a chave estivesse setada como null, logo a function 
     *   array_key_exists retornaria true, pois a chave existe,
     *   só que, o valor setado é null.
     *   A function unset() remove a chave/variável 'rate' de dentro
     *   do Array $_SESSION['usuario']
     **/
    
    if ( array_key_exists('rate',$usuario))
    {
         unset($_SESSION['usuario']['rate']);
    }  


?>