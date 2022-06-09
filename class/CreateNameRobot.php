<?php

class CreateNameRobot
{
    public function createName($nameRobot) {

        if (!empty($nameRobot)) {
            
            return $nameRobot;            

        } else {

            $alphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            $stringShuffle = str_shuffle($alphabet);
            $letters = substr($stringShuffle, 0, 2);
            $numbers = mt_rand(1000, 9999);        

            $nameRobot = $letters . "-" . $numbers;         
            
            return $nameRobot;
        }
       
    }   
}