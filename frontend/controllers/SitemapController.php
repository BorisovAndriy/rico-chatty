<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\web\Response;

class SitemapController extends Controller
{
    public function actionIndex()
    {
        Yii::$app->response->format = Response::FORMAT_RAW;
        Yii::$app->response->headers->add('Content-Type', 'application/xml');

        $urls = [
            ['loc' => ['site/index'], 'priority' => '1.0'],
            ['loc' => ['site/read'], 'priority' => '0.8'],
            ['loc' => ['site/shop'], 'priority' => '0.9'],
            ['loc' => ['site/about'], 'priority' => '0.7'],
            ['loc' => ['site/contact'], 'priority' => '0.7'],
        ];

        return $this->renderPartial('index', [
            'urls' => $urls,
        ]);
    }
}