<?php
spl_autoload_register(function($class) {
    $arquivo = $_SERVER["DOCUMENT_ROOT"]
    ."/provaI_desenv_webII/lib/".$class.".class.php";
 
    if (file_exists($arquivo)) 
    {
        require $arquivo;
    }
});