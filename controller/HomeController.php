<?php

// Require files //
require('class/TemplateRendering.php');

class HomeController extends TemplateRendering
{   
    public function showHome()
    {        
        echo $this -> _twig->render('home.twig');
    }
}