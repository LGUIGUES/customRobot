<?php

class ErrorController extends TemplateRendering
{
    public function showError()
    {
        echo $this -> _twig->render('404.twig'); 
    }
}