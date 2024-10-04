<?php

// $_SERVER["SERVER_NAME"]
switch ('localhost') {
    case 'localhost':
        $enviroment['local'] = "http://localhost/";
        break;
    case 'homol':
        $enviroment['homol'] = "";
        break;
    case 'prod':
        $enviroment['prod'] = "";
        break;
}

/**
 * Definindo constante URL_LOCAL
 * Caminho absoluto
 */
define("URL_LOCAL_BASE", $enviroment['local']);
define("URL_LOCAL_SITE", constant("URL_LOCAL_BASE")."infOlympic/");
define("URL_LOCAL_SITE_PAGINA", constant("URL_LOCAL_SITE")."?pagina=");