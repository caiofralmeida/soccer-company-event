<?php

$loginController = new CaioFRAlmeida\SoccerCompanyEvent\Controller\LoginController();
$painelController = new CaioFRAlmeida\SoccerCompanyEvent\Controller\PainelController();
$jogadorController = new CaioFRAlmeida\SoccerCompanyEvent\Controller\JogadorController();
$eventoController = new CaioFRAlmeida\SoccerCompanyEvent\Controller\EventoController();

$app->get('/login', [$loginController, 'indexAction'])
    ->setName('get_login');

$app->post('/login', [$loginController, 'postAction'])
    ->setName('post_login');

$app->get('/logout', [$loginController, 'logoutAction']);

$app->get('/', [$painelController, 'indexAction']);

$app->get('/jogadores', [$jogadorController, 'indexAction']);

$app->post('/jogadores/add', [$jogadorController, 'addAction']);

$app->get('/eventos', [$eventoController, 'indexAction']);

$app->notFound(function(){
    echo 'página não encontrada :(';die;
});
