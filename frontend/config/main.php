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
    'language' => 'uk-UA', // Встановлюємо мову для всього додатку
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
            'baseUrl' => '', // Гарантує коректну роботу ЧПУ
        ],

// ВИПРАВЛЕННЯ БЕЗПЕКИ, GOOGLE ADS ТА ПАНЕЛІ ISSUES
        'response' => [
            'on beforeSend' => function ($event) {
                $response = $event->sender;
                $headers = $response->headers;

                // 1. Захист від клікджекингу
                $headers->set('X-Frame-Options', 'SAMEORIGIN');

                // 2. ФІНАЛЬНИЙ CSP: Додано *.google.com та *.google.nl для списків користувачів Ads
                $headers->set('Content-Security-Policy', "default-src 'self'; " .
                    "script-src 'self' 'unsafe-inline' 'unsafe-eval' https://cdnjs.cloudflare.com https://www.googletagmanager.com https://www.google-analytics.com https://www.googleadservices.com https://googleads.g.doubleclick.net https://*.google.com; " .
                    "style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; " .
                    "font-src 'self' data: https://fonts.gstatic.com; " .
                    "img-src 'self' data: https://www.google-analytics.com https://www.googletagmanager.com https://googleads.g.doubleclick.net https://*.google.com https://*.google.com.ua https://*.google.nl; " .
                    "connect-src 'self' https://www.google-analytics.com https://googleads.g.doubleclick.net https://*.google.com https://*.google.nl; " .
                    "frame-src 'self' https://www.googletagmanager.com https://*.google.com https://td.doubleclick.net; " .
                    "require-trusted-types-for 'script'; " .
                    "trusted-types goog#html yii-security;");

                // 3. Строгий механізм HSTS
                $headers->set('Strict-Transport-Security', 'max-age=31536000; includeSubDomains; preload');

                // 4. Заборона відгадування типу контенту
                $headers->set('X-Content-Type-Options', 'nosniff');

                // 5. Ізоляція джерел (COOP)
                $headers->set('Cross-Origin-Opener-Policy', 'same-origin');
            },
        ],

        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => [
                'name' => '_identity-frontend',
                'httpOnly' => true,
                'secure' => true, // Рекомендовано для HTTPS
            ],
        ],
        'session' => [
            'name' => 'advanced-frontend',
            'cookieParams' => [
                'httpOnly' => true,
                'secure' => true, // Рекомендовано для HTTPS
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
                // SEO-friendly посилання
                'sitemap.xml' => 'sitemap/index',
                'contact' => 'site/contact',
                'shop' => 'site/shop',
                'read' => 'site/read',
                'about' => 'site/about',
                'login' => 'site/login',
                'signup' => 'site/signup',
                'request-password-reset' => 'site/request-password-reset',
                'reset-password' => 'site/reset-password',

                // Правило для кореня
                '' => 'site/index',
                '<action:\w+>' => 'site/<action>',
            ],
        ],
    ],
    'params' => $params,
];