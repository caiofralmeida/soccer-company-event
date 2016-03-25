<?php

$loginController = new CaioFRAlmeida\SoccerCompanyEvent\Controller\LoginController();
$painelController = new CaioFRAlmeida\SoccerCompanyEvent\Controller\PainelController();

$app->get('/login', [$loginController, 'indexAction']);
$app->post('/login', [$loginController, 'postAction']);

$app->get('/', [$painelController, 'indexAction']);

$app->notFound(function(){
    echo ' nao existo';die;
});
