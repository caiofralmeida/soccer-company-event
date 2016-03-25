<?php

ini_set('display_errors', 1);

require __DIR__ .'/../vendor/autoload.php';

require __DIR__ . '/../config/services.php';

$app = new \Phalcon\Mvc\Micro($di);

require __DIR__ . '/../config/routes.php';

$app->before(new \CaioFRAlmeida\SoccerCompanyEvent\Middleware\IsAutenticado());

$app->handle();
