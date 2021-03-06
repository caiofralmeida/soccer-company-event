<?php

use Phalcon\Mvc\View\Simple as SimpleView;
use Phalcon\Di\FactoryDefault;
use Phalcon\Config\Adapter\Php as PhpConfig;

$di = new FactoryDefault();

$di->set('config', function() {
    $config = new PhpConfig(__DIR__ . '/app.php');

    if (is_readable(__DIR__ . '/app.development.php')
        && getenv('APPLICATION_ENV') == 'development') {
        $development = new PhpConfig(__DIR__. '/app.development.php');
        $config->merge($development);
    }

    return $config;
}, true);

$di->set('view', function() use ($di) {

    $config = $di->get('config')['view'];

    $view = new SimpleView();
    $view->setViewsDir($config['dir']);
    $view->setVar('appConfig', $di->get('config')['app']);
    $view->setVar('flashSession', $di->get('flashSession'));

    $engine = new $config['engine']($view);
    $engine->setOptions([$config['options']]);

    $view->registerEngines([
        $config['prefix'] => $engine
    ]);

    return $view;
}, true);

$di->set('connection', function () use ($di) {
    $config = $di->get('config')['database'];

    $adapter = new $config->adapter([
        "host"     => $config->host,
        "username" => $config->username,
        "password" => $config->password,
        "dbname"   => $config->db
    ]);

    return $adapter;
}, true);
