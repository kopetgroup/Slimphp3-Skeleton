<?php
return [
    'settings' => [

        // comment this line when deploy to production environment
        'displayErrorDetails' => APP_DEBUG_MODE,

        // View settings
        'view' => [
            'template_path' => str_replace('/config','/',__DIR__).'/templates',
            'twig' => [
                'cache' => __DIR__ . '/../storage/cache/twig',
                'debug' => APP_DEBUG_MODE,
                'auto_reload' => true,
            ],
        ],

        // monolog settings
        'logger' => [
            'name' => APP_NAME,
            'path' => __DIR__ . '/../storage/logs/app.log',
        ],
    ],
];
//done
