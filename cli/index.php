<?php

use Phalcon\Di\FactoryDefault\Cli;
use Phalcon\Cli\Console;

require __DIR__ . '/../vendor/autoload.php';

$di = new Cli();

$di->get('dispatcher')
    ->setNamespaceName('CaioFRAlmeida\SoccerCompanyEvent\Task');

$args = [];

if (isset($argv[1])) {
    $args['task'] = $argv[1];
}

$console = new Console($di);

try {
    $console->handle($args);
} catch (\Exception $e) {
    die('erro ao executar task');
}
