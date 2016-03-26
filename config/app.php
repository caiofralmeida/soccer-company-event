<?php

return [
    'app' => [
        'name' => 'FutCatho',
        'domain' => 'catho.com'
    ],
    'view' => [
        'dir'    => '../view/',
        'engine' => 'Phalcon\Mvc\View\Engine\Volt',
        'prefix' => '.html',
        'options' => [
            'compileAlways' => false,
            'compiledPath' => '../view-compiled/',
            'stat' => true
        ]
    ]
];
