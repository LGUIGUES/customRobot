<?php

// Autoloader Twig //
require('www/vendor/autoload.php');

class TemplateRendering
{   
    public $_loader;
    public $_twig;

    public function __construct()
    {
        // Template rendering //
        $this -> _loader = $loader = new \Twig\Loader\FilesystemLoader('./www/view/template');

        $this -> _twig = $twig = new \Twig\Environment($loader, [

            'cache' => false, //For developement => false else __DIR__ . '/tmp' //

        ]);

    }    
}