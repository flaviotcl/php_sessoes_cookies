<?php

/*** 
 *   1° parâmetro - Tempo de vida do cookie de sessão, definido em segundos. 
 *   Colocado como 0, significa que: qdo o navegador for fechado o Cookie Session
 *   será perdido.  
 **/

/*** 
 *   2° parâmetro - Caminho no domínio onde o cookie vai funcionar. 
 *   Use uma única barra ('/') para que funcione em todos os caminhos do domínio.
 **/

/*** 3° parâmetro - Domínio do cookie, por exemplo 'www.php.net'. 
 *   Para tornar os cookies visíveis em todos os subdomínios,
 *   o domínio deve ser prefixado com um ponto, como '.php.net'. 
 **/ 

/*** 
 *   4° parâmetro - Se TRUE, o cookie só será enviado em conexões seguras.  
 **/

/***
 *   5° Parâmetro - Qdo setado como true estabelece q/ o
 *   arquivo de cookie só poderá ser acessado pelo protocolo
 *   http.  
 **/

//ini_set('session.save_handler','sqlite');
//ini_set('session.save_path',__DIR__.'/sessions.db');
session_set_cookie_params(0,'/','localhost', false, false);


session_start();
