<?php

require('class/CreateNameRobot.php');
require('class/ChoiceNumber.php');
require('class/Killer.php');

class Robot
{   
    protected $_nameRobot;
    protected $_name;   
    protected $_date;
    protected $_hour;
    protected $_number;
    protected $_killer;
    protected $_validator;       

    public function __construct()
    {   
         $this -> _nameRobot = 'AA-0000';
    }    

    public function createRobot($nameRobot = '',$moralityRobot = '')
    {
        $date = new DateTime;
        $createNameRobot = new CreateNameRobot;
        $number = new ChoiceNumber;
        $choiceMoralityRobot = new Killer;       

        $this -> _name = $createNameRobot -> createName($nameRobot);
        $this -> _date = $date -> format('Y m d');
        $this -> _hour = $date -> format('H:i:s');
        $this -> _number = $number -> randomNumber();
        $this -> _killer = $choiceMoralityRobot -> randomKiller($moralityRobot);       
               
    }    
    
    public function getNameRobot()
    {
        return $this -> _name;
    }

    public function getDate()
    {
        return $this -> _date;
    }

    public function getHour()
    {
        return $this -> _hour;
    }

    public function getNumber()
    {
        return $this -> _number;
    }

    public function getInvName()
    {
        return strrev($this -> _name);
    }

    public function getMorality()
    {
        return $this -> _killer;
    }
}