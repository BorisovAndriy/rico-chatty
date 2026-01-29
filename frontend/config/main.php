<?php

$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'name' => 'Ріко-Розмовляйко', // Назва вашого проекту, що відображається в заголовках
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
            // Сюди можна додати cookieValidationKey, якщо він не в main-local.php
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // назва сесії для фронтенду
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => \yii\log\FileTarget::class,
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],

        // Налаштування красивих посилань (ЧПУ)
        'urlManager' => [
            'enablePrettyUrl' => true,   // Увімкнути ЧПУ
            'showScriptName' => false,   // Приховати index.php з URL
            'rules' => [
                // Короткі правила для основних сторінок
                'contact' => 'site/contact',
                'shop' => 'site/shop',
                'read' => 'site/read',
                'about' => 'site/about',
                'login' => 'site/login',
                'signup' => 'site/signup',

                // Загальне правило для інших сторінок контролера Site
                '<action:\w+>' => 'site/<action>',
            ],
        ],
    ],
    'params' => $params,
];