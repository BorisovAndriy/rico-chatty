<?php

$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'name' => 'Ріко-Розмовляйко',
    'basePath' => dirname(__DIR__),
    'language' => 'uk-UA',
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
            'baseUrl' => '',
        ],

        'reCaptcha' => [
            'class' => 'himiklab\yii2\recaptcha\ReCaptchaConfig',
            'siteKeyV2' => '6Ld4H1wsAAAAAKjSKGGnPcO42HBJQQNdQtzR_2Ob', // Твій Site Key
            'secretV2' => '6Ld4H1wsAAAAAALctY5tJCSAW5CmF8ZwZ-5haDKl', // Твій Secret Key
        ],

        // Ми прибрали блок 'response' з суворими CSP заголовками,
        // щоб jQuery та капча могли працювати вільно.

        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => [
                'name' => '_identity-frontend',
                'httpOnly' => true,
                'secure' => true,
            ],
        ],
        'session' => [
            'name' => 'advanced-frontend',
            'cookieParams' => [
                'httpOnly' => true,
                'secure' => true,
            ],
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

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                'sitemap.xml' => 'sitemap/index',
                'contact' => 'site/contact',
                'shop' => 'site/shop',
                'read' => 'site/read',
                'about' => 'site/about',
                'login' => 'site/login',
                'signup' => 'site/signup',
                'request-password-reset' => 'site/request-password-reset',
                'reset-password' => 'site/reset-password',
                '' => 'site/index',
                '<action:\w+>' => 'site/<action>',
            ],
        ],
    ],
    'params' => $params,
];