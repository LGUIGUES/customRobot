<?php

class Settings
{   
    protected $errors = [];
    private const VALID_TYPE_NAME = '#^[A-Z]{2}[-]{1}[0-9]{4}$#';
    private const VALID_TYPE_MORALITY = '#^[1-3]{1}$#';
    private const ERROR_NAME = 'You must choose a valid name !';
    private const ERROR_MORALITY = 'You must choose a valid morality !';
    private const TEXT_KILLER = 'It\'s the end of the world : Extermination !';
    private const TEXT_SERVILE = 'I\'m at your service : Do you want a coffee ? ';
    private const TEXT_NUMBER_ODD = '. It\'s an odd number';
    private const TEXT_NUMBER_EVENT = '. It\'s an even number';

    public function __construct()
    {
        $this -> _VALID_TYPE_NAME = self::VALID_TYPE_NAME;
        $this -> _VALID_TYPE_MORALITY = self::VALID_TYPE_MORALITY;
        $this -> _ERROR_NAME = self::ERROR_NAME;
        $this -> _ERROR_MORALITY = self::ERROR_MORALITY;
        $this -> _TEXT_KILLER = self::TEXT_KILLER;
        $this -> _TEXT_SERVILE = self::TEXT_SERVILE;
        $this -> _TEXT_NUMBER_ODD = self::TEXT_NUMBER_ODD;
        $this -> _TEXT_NUMBER_EVENT = self::TEXT_NUMBER_EVENT;
    }    
}