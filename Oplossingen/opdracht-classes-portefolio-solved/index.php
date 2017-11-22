<?php

    function __autoload($className)
    {
        include_once 'classes/' . $className . '.php';
    }

    
    $pagina = new HTMLbuilder('header-partial.html', 'body-partial.html' , 'footer-partial.html');

?>