<?php


require 'inc/Slim-2.x/Slim/Slim.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

// GET route
$app->get(
    '/',
    function () {

        require_once("view/index.php");
        
    }
);
$app->get(
    '/login.php',
    function () {

        require_once("view/login.php");

    }
);
$app->get(
    '/curso.php',
    function () {

        require_once("view/curso.php");

    }
);

$app->get(
    '/quizinicio.php',
    function () {

        require_once("view/quizinicio.php");

    }
);


$app->run();
