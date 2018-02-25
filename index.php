<?php

require 'inc/config.php';
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
$app->get(
    '/ranking.php',
    function () {

        require_once("view/ranking.php");

    }
);

$app->get('/ranking', function () {

    $sql = new Sql();

    $data = $sql->select("SELECT USUARIO, PONTUAÇÂO FROM RANKING R
                           inner join CADASTRO C AS ID_LOGIN.R = ID_LOGIN.C ORDER BY asc top 3;");


    foreach ($data as &$RANKING) {
        $RANKING['ID_LOGIN'] = $ID_LOGIN;
        $RANKING['PONTUACAO'] = $PONTUACAO;
        $RANKING['posicao'] = $posicao;
    };

    echo json_encode($data);
});

$app->run();
