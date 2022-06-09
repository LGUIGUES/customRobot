<?php

require('class/Settings.php');

class Validator extends Settings
{
    public function validName($nameRobot)
    {
        if (empty($nameRobot) || !preg_match($this -> _VALID_TYPE_NAME, $nameRobot)) {
            
            return $errors['nameRobot'] = $this -> _ERROR_NAME;
        }    
        
    }

    public function validMorality($moralityRobot)
    {
        if (!preg_match($this -> _VALID_TYPE_MORALITY, $moralityRobot)) {

            return $errors['moralityRobot'] = $this -> _ERROR_MORALITY;
        }   
       
    }
}