<?php

// Require files //
require('class/Validator.php');
require('model/Robot.php');

class RobotController extends TemplateRendering
{
    public function createRobot()
    {
        $_validator = new Validator;                

        if (isset($_POST['custom']) && array_key_exists('customNameRobot', $_POST) && array_key_exists('customMoralityRobot', $_POST)) {

            $nameRobot = $_POST['customNameRobot'];
            $moralityRobot = $_POST['customMoralityRobot'];

            $errorName = $_validator -> validName($nameRobot);            
            $errorMorality = $_validator -> validMorality($moralityRobot);

            if (!empty($errorName) || !empty($errorMorality)) {

                $_SESSION['errorName'] = $errorName;
                $_SESSION['formDataName'] = $_POST['customNameRobot'];                
                $_SESSION['errorMorality'] = $errorMorality;
                $_SESSION['formMorality'] = $_POST['customMoralityRobot'];
                // $classOpacity = 'txt-opacity';                               
               
                echo $this -> _twig->render('robot.twig', ['errorName' => $_SESSION['errorName'], 'formDataName' => $_SESSION['formDataName'], 'errorMorality' => $_SESSION['errorMorality'], 'formMorality' => $_SESSION['formMorality']]);                

            } else {
                $robot = new Robot();
                $robot -> createRobot($nameRobot,$moralityRobot);                
                                             
                $robotName = $robot -> getNameRobot();
                $date = $robot -> getDate();
                $time = $robot -> getHour();
                $number = $robot -> getNumber();
                $invNameRobot = $robot -> getInvName();
                $moralityRobot = $robot -> getMorality();                
                
                if (strpos($moralityRobot, 'Extermination')) {
                    $classText = 'text-danger';
                } else {
                    $classText = 'text-success';
                }

                echo $this -> _twig->render('robot.twig', ['robotName' => $robotName, 'date' => $date, 'time' => $time, 'number' => $number, 'invNameRobot' => $invNameRobot, 'moralityRobot' => $moralityRobot, 'classText' => $classText]);                            
            }

        } elseif (isset($_POST['random'])) {

            $robot = new Robot();
            $robot -> createRobot();
            
            $robotName = $robot -> getNameRobot();
            $date = $robot -> getDate();
            $time = $robot -> getHour();
            $number = $robot -> getNumber();
            $invNameRobot = $robot -> getInvName();
            $moralityRobot = $robot -> getMorality();            
            
            if (strpos($moralityRobot, 'Extermination')) {
                $classText = 'text-danger';
            } else {
                $classText = 'text-success';
            }

            echo $this -> _twig->render('robot.twig', ['robotName' => $robotName, 'date' => $date, 'time' => $time, 'number' => $number, 'invNameRobot' => $invNameRobot, 'moralityRobot' => $moralityRobot, 'classText' => $classText]);            
        }
    }
}