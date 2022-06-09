<?php

class ChoiceNumber extends Settings
{
    public function randomNumber() {

        $number = mt_rand(1, 10);

        if ($number%2) {

            return $number . $this -> _TEXT_NUMBER_ODD;

        } else {

            return $number . $this -> _TEXT_NUMBER_EVENT;
        }
    }
}