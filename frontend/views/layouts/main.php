<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

// Додаємо стилі для сніжинок прямо в макет
$this->registerCss("
    .snow-container {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: 9999;
    }
    .snowflake {
        position: fixed;
        top: -10px;
        color: #fff;
        font-size: 1em;
        user-select: none;
        z-index: 9999;
        text-shadow: 0 0 5px rgba(0,0,0,0.1);
        animation-name: fall;
        animation-timing-function: linear;
        animation-iteration-count: infinite;
    }
    @keyframes fall {
        0% { transform: translateY(0) rotate(0deg); opacity: 0; }
        10% { opacity: 1; }
        90% { opacity: 1; }
        100% { transform: translateY(105vh) rotate(360deg); opacity: 0; }
    }
");

// Простий скрипт для генерації сніжинок
$this->registerJs("
    function createSnowflake() {
        const snow = document.createElement('div');
        snow.innerHTML = '❄';
        snow.classList.add('snowflake');
        snow.style.left = Math.random() * 100 + 'vw';
        snow.style.animationDuration = Math.random() * 30 + 30 + 's';
        snow.style.opacity = Math.random();
        snow.style.fontSize = Math.random() * 10 + 10 + 'px';
        
        document.body.appendChild(snow);
        
        setTimeout(() => {
            snow.remove();
        }, 10000);
    }
    setInterval(createSnowflake, 1000);
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
        <?php $this->head() ?>
    </head>
    <body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>

    <header>
        <?php
        NavBar::begin([
            'brandLabel' => '🐶 Ріко-Розмовляйко', // Змінив назву на бренд
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                // Замінив navbar-dark bg-dark на ваші нові класи
                'class' => 'navbar navbar-expand-md fixed-top shadow-sm',
            ],
        ]);
        $menuItems = [
            ['label' => 'Почитати про Ріко', 'url' => ['/site/read']],
            ['label' => 'Купити книгу', 'url' => ['/site/shop']],
            ['label' => 'Про автора', 'url' => ['/site/about']],
            ['label' => 'Зв’язок', 'url' => ['/site/contact']],
        ];

        echo Nav::widget([
            'options' => ['class' => 'navbar-nav ms-auto mb-2 mb-md-0'], // ms-auto притисне меню вправо
            'items' => $menuItems,
        ]);
        NavBar::end();
        ?>
    </header>

    <main role="main" class="flex-shrink-0">
        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </main>

    <footer class="footer mt-auto py-3">
        <div class="container text-center">
            <span class="text-primary">&copy; Ріко-Розмовляйко <?= date('Y') ?></span>
            <span class="ms-3 text-muted">| Powered by Andriy Borisov</span>
        </div>
    </footer>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage(); ?>