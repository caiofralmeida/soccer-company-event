<?php

return [
    'app' => [
        'name' => 'FutCatho',
    ],
    'databases' => [

    ],
    'view' => [
        'dir'    => '../view/',
        'engine' => 'Phalcon\Mvc\View\Engine\Volt',
        'prefix' => '.html',
        'options' => [
            'compileAlways' => false
        ]
    ]
];
