<?php

use Phalcon\Mvc\View\Simple as SimpleView;
use Phalcon\Di\FactoryDefault;

$di = new FactoryDefault();

$di->set('view', function () {

    $view = new SimpleView();

    $view->setViewsDir('../view/');

    $view->registerEngines([
        '.html' => 'Phalcon\Mvc\View\Engine\Volt'
    ]);

    return $view;
}, true);
