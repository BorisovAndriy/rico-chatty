<?php

/** @var yii\web\View $this */

use yii\helpers\Url;
use yii\helpers\Html;

$this->title = 'Читати уривок книги "Зимові пригоди Ріко-Розмовляйко" онлайн';

// SEO Мета-теги
$this->registerMetaTag(['name' => 'description', 'content' => 'Перегляньте безкоштовний уривок логопедичної книги Тетяни Борисової. 47 сторінок інтерактивної казки для розвитку мовлення вашої дитини.']);
$this->registerMetaTag(['property' => 'og:title', 'content' => $this->title]);
$this->registerMetaTag(['property' => 'og:description', 'content' => 'Гортайте сторінки книги онлайн. Авторська методика розвитку мовлення через гру.']);
$this->registerMetaTag(['property' => 'og:image', 'content' => Url::to('@web/images/book/page-1.jpg', true)]);
$this->registerMetaTag(['property' => 'og:type', 'content' => 'article']);

// МІКРОРОЗМІТКА (SCHEMA.ORG)
$bookSchema = [
    "@context" => "https://schema.org",
    "@type" => "Book",
    "name" => "Зимові пригоди Ріко-Розмовляйко",
    "alternateName" => "Ріко-Розмовляйко",
    "author" => [
        "@type" => "Person",
        "name" => "Тетяна Борисова",
        "jobTitle" => "Логопед"
    ],
    "image" => Url::to('@web/images/book/page-1.jpg', true),
    "description" => "Інтерактивна книга для розвитку мовлення. Унікальна методика від логопеда Тетяни Борисової.",
    "genre" => "Дитяча література, Логопедія",
    "workExample" => [
        "@type" => "Book",
        "bookFormat" => "https://schema.org/EBook",
        "potentialAction" => [
            "@type" => "ReadAction",
            "target" => [
                "@type" => "EntryPoint",
                "urlTemplate" => Url::current([], true),
                "actionPlatform" => [
                    "http://schema.org/DesktopWebPlatform",
                    "http://schema.org/MobileWebPlatform"
                ]
            ]
        ]
    ]
];

?>

<script type="application/ld+json">
<?= json_encode($bookSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?>
</script>

<main class="site-read">
    <section class="mt-5 p-4 p-md-5 author-quote-block shadow-lg rounded-5 overflow-hidden position-relative">
        <div class="position-relative" style="z-index: 2;">
            <blockquote class="blockquote">
                <article class="poem-body" style="font-size: 1.6rem; line-height: 1.6; color: #ffffff; font-family: 'Georgia', serif; font-style: italic; padding-left: 25%">
                    <p class="mb-2">Ріко-Розмовляйко з нами зимоньку вітає,</p>
                    <p class="mb-2">Він спілкуватись любить, в очі заглядає,</p>
                    <p class="mb-2">Хоче все побачить, хоче все почути —</p>
                    <p class="mb-0 fw-bold text-warning">Ріко-Розмовляйко розумним хоче бути.</p>
                </article>
                <footer class="blockquote-footer mt-2 text-center text-md-start">
                    <div class="h1 fw-bold mb-4 text-warning float-md-end">
                        <?= Html::a('Купити книгу 🐾', ['site/shop'], ['class' => 'btn btn-warning btn-lg px-5 py-3 shadow rounded-pill fw-bold']) ?>
                    </div>
                </footer>
            </blockquote>
        </div>
    </section>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">

                <div class="book-slider-container mb-5">
                    <div id="bookCarousel" class="carousel slide shadow-lg rounded-4 overflow-hidden border" data-bs-ride="false">
                        <div class="carousel-inner">
                            <?php for ($i = 1; $i <= 47; $i++): ?>
                                <div class="carousel-item <?= $i === 1 ? 'active' : '' ?>">
                                    <?= Html::img(["/images/book/page-{$i}.jpg"], [
                                        'class' => 'd-block w-100',
                                        'alt' => "Сторінка {$i} книги Ріко-Розмовляйко",
                                        'loading' => $i > 3 ? 'lazy' : 'eager' // Оптимізація швидкості завантаження
                                    ]) ?>
                                    <div class="page-badge" style="position: absolute; bottom: 10px; left: 10px; z-index: 10;">
                                        <span class="badge bg-warning text-dark px-3 py-2 fs-6 shadow">Стор. <?= $i ?></span>
                                    </div>
                                </div>
                            <?php endfor; ?>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#bookCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#bookCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </button>
                    </div>
                </div>

                <div class="row g-4 mt-5">
                    <?php
                    $benefits = [
                        ['🗣️', 'Активне мовлення', 'Спеціальні ігрові запитання спонукають малюка не просто слухати, а активно вступати в діалог.', 'border-primary'],
                        ['📚', 'Багатий словник', 'Дитина засвоює нові іменники, дієслова та прикметники через контекст зимової казки.', 'border-success'],
                        ['🧠', 'Логіка та пам\'ять', 'Завдання на переказ та послідовність подій розвивають нейронні зв\'язки та уважність.', 'border-danger'],
                        ['🌈', 'Емоційний інтелект', 'Разом із Ріко діти вчаться розрізняти емоції: радість від зустрічі, подив та співпереживання.', 'border-warning'],
                        ['🎨', 'Зорова увага', 'Деталізовані ілюстрації тренують здатність концентруватися та знаходити дрібні предмети.', 'border-info'],
                        ['💎', 'Чиста вимова', 'Логопедичні акценти в тексті допомагають батькам ненав\'язливо тренувати правильні звуки.', 'border-primary'],
                        ['🎓', 'Шкільна готовність', 'Формування навичок слухання, розуміння тексту та побудови речень — фундамент для навчання.', 'border-purple'],
                        ['✍️', 'Моторика рук', 'Пальчикові ігри та вправи, описані в посібнику, стимулюють мовленнєві центри мозку.', 'border-orange'],
                        ['👨‍👩‍👧', 'Час разом', 'Книга створює простір для теплого спілкування дитини з батьками, зміцнюючи зв\'язок.', 'border-pink'],
                    ];

                    foreach ($benefits as $b): ?>
                        <div class="col-md-4">
                            <div class="benefit-card <?= $b[3] ?> shadow-sm h-100">
                                <div class="benefit-header">
                                    <span class="benefit-icon"><?= $b[0] ?></span>
                                    <h3><?= $b[1] ?></h3>
                                </div>
                                <p><?= $b[2] ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</main>