<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\helpers\Url;

AppAsset::register($this);

$this->registerCss("
    .brand-logo-img {
        width: 35px;
        height: 35px;
        margin-right: 10px;
        vertical-align: middle;
        border-radius: 50%;
        object-fit: cover;
    }
    main > .container { padding-top: 100px; }
    
    .footer .container {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 8px;
        flex-wrap: wrap;
        font-size: 0.9rem;
    }
    .footer-divider { color: #dee2e6; margin: 0 4px; }
    .footer-link { 
        text-decoration: none; 
        color: #212529; 
        font-weight: 600; 
    }
    .footer-link:hover { 
        text-decoration: underline; 
        color: #0d6efd; 
    }
");
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" class="h-100">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>

        <link rel="icon" type="image/x-icon" href="<?= Url::to(['/favicon.ico']) ?>?v=<?= time() ?>">
        <link rel="shortcut icon" type="image/x-icon" href="<?= Url::to(['/favicon.ico']) ?>?v=<?= time() ?>">

        <?php $this->head() ?>
    </head>
    <body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>

    <header>
        <?php
        // ПОВЕРНУТО СОБАКУ: Формуємо логотип (іконка + текст)
        $brandLabel = Html::img(Url::to(['/favicon.ico']), [
                'class' => 'brand-logo-img',
                'alt' => 'Rico'
            ]) . 'РІКО-РОЗМОВЛЯЙКО';

        NavBar::begin([
            'brandLabel' => $brandLabel,
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar navbar-expand-md fixed-top shadow-sm bg-white navbar-light',
                'style' => 'background: linear-gradient(to right, #2c8ed6, #f0ad4e);' // Додав градієнт як на скриншоті
            ],
        ]);
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav ms-auto'],
            'items' => [
                ['label' => 'Почитати про Ріко', 'url' => ['/site/read']],
                ['label' => 'Купити книгу', 'url' => ['/site/shop']],
                ['label' => 'Про автора', 'url' => ['/site/about']],
                ['label' => 'Зв’язок', 'url' => ['/site/contact']],
            ],
        ]);
        NavBar::end();
        ?>
    </header>

    <main role="main" class="flex-shrink-0">
        <div class="container">
            <?= Breadcrumbs::widget(['links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : []]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </main>

    <footer class="footer mt-auto py-3 bg-light border-top">
        <div class="container text-center">
            <span class="text-primary fw-bold">🐾 Ріко-Розмовляйко <?= date('Y') ?></span>
            <span class="footer-divider">|</span>
            <span class="text-muted">Powered by:
            <a href="mailto:borisovandriy@gmail.com" class="footer-link">BorisovAndriy@gmail.com</a>
        </span>
        </div>
    </footer>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage(); ?>