<?php

use Phalcon\Mvc\View\Simple as SimpleView;
use Phalcon\Di\FactoryDefault;
use Phalcon\Config\Adapter\Php as PhpConfig;

$di = new FactoryDefault();

$di->set('config', function() {
    return new PhpConfig(__DIR__ . '/app.php');
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
