<?php

$loginController = new CaioFRAlmeida\SoccerCompanyEvent\Controller\LoginController();
$painelController = new CaioFRAlmeida\SoccerCompanyEvent\Controller\PainelController();

$app->get('/login', [$loginController, 'indexAction'])
    ->setName('get_login');

$app->post('/login', [$loginController, 'postAction'])
    ->setName('post_login');

$app->get('/logout', [$loginController, 'logoutAction']);

$app->get('/', [$painelController, 'indexAction']);

$app->notFound(function(){
    echo ' nao existo';die;
});
