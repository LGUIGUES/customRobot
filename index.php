<?php

session_start();

// Require files //
require('controller/HomeController.php');
require('controller/RobotController.php');
require('controller/ErrorController.php');

if (array_key_exists('page', $_GET)) {

    switch($_GET['page']) {

        case 'createRobot':
            $_createRobot = new RobotController;
            $_createRobot -> createRobot();
            break;
        default:
            $_error = new ErrorController;
            $_error -> showError();
    }

} else {

    $_homeController = new HomeController;
    $_homeController -> showHome();
}
