<?php

class Killer extends Settings
{
    public function randomKiller($moralityRobot)
    {   
        if (!empty($moralityRobot)) {

            switch($moralityRobot) {

                case '1' :
                    return $this -> _TEXT_KILLER;
                    break;
                case '2' : 
                    return $this -> _TEXT_SERVILE;
                    break;
                case '3' :
                    return $this -> randomMorality();
                    break;  
            }            

        } else {

             return $this -> randomMorality();             
        }        
    }
    
    public function randomMorality()
    {
        $random = mt_rand(1,3);
    
            switch($random) {

                case '1' :
                    return $this -> _TEXT_SERVILE;
                    break;
                case '2' : 
                    return $this -> _TEXT_SERVILE;
                    break;
                case '3' :
                    return $this -> _TEXT_KILLER;
                    break;       
            }
    }
}