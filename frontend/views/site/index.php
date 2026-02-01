<?php

/** @var yii\web\View $this */

use yii\helpers\Url;
use yii\helpers\Html;

$this->title = 'Ріко-Розмовляйко — Інтерактивна книга для розвитку мовлення дітей';

// SEO Мета-теги
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Інтерактивна книга «Зимові пригоди Ріко-Розмовляйко» від логопеда Тетяни Борисової. Унікальна методика розвитку мовлення для дітей 3-6 років через гру та казку.'
]);
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => 'Ріко-Розмовляйко, логопедична книга, розвиток мовлення, Тетяна Борисова, дитяча книга, вправи для мовлення, логопед онлайн'
]);

// Open Graph для соцмереж
$this->registerMetaTag(['property' => 'og:title', 'content' => $this->title]);
$this->registerMetaTag(['property' => 'og:description', 'content' => 'Ваш домашній логопед у форматі захоплюючої казки. Допоможіть дитині заговорити чітко та впевнено!']);
$this->registerMetaTag(['property' => 'og:image', 'content' => Url::to('@web/images/book/page-1.jpg', true)]);
$this->registerMetaTag(['property' => 'og:url', 'content' => Url::to(['site/index'], true)]);
$this->registerMetaTag(['property' => 'og:type', 'content' => 'website']);

// МІКРОРОЗМІТКА (SCHEMA.ORG)
$bookSchema = [
    "@context" => "https://schema.org",
    "@type" => "Book",
    "name" => "Зимові пригоди Ріко-Розмовляйко",
    "alternateName" => "Ріко-Розмовляйко",
    "author" => [
        "@type" => "Person",
        "name" => "Тетяна Борисова",
        "jobTitle" => "Логопед",
        "url" => Url::to(['site/index'], true)
    ],
    "image" => Url::to('@web/images/book/page-1.jpg', true),
    "description" => "Інтерактивна книга для розвитку мовлення для дітей 3-6 років. Унікальна методика через гру та казку.",
    "genre" => "Дитяча література, Логопедія",
    "inLanguage" => "uk-UA",
    "audience" => [
        "@type" => "Audience",
        "audienceType" => "Діти від 3 до 6 років"
    ],
    "offers" => [
        "@type" => "Offer",
        "price" => "600",
        "priceCurrency" => "UAH",
        "availability" => "https://schema.org/InStock",
        "url" => Url::to(['site/shop'], true)
    ]
];
?>

<script type="application/ld+json">
<?= json_encode($bookSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?>
</script>

<main class="site-index">

    <section class="mt-5 p-4 p-md-5 author-quote-block shadow-lg rounded-5 overflow-hidden position-relative">
        <div class="position-relative" style="z-index: 2;">
            <h2 class="h1 fw-bold mb-4 text-warning text-center text-md-start">Зимові пригоди Ріко-Розмовляйко</h2>
            <blockquote class="blockquote">
                <p class="fs-3 fst-italic text-white mb-4 fw-light quote-text" style="line-height: 1.6;">
                    Більше ніж просто книга — це ваш домашній логопед та найкращий друг дитини.
                </p>
                <footer class="blockquote-footer mt-2 text-center text-md-start">
                    <?= Html::a('Купити книгу 🐾', ['site/shop'], ['class' => 'btn btn-warning btn-lg px-5 py-3 shadow rounded-pill fw-bold']) ?>
                    <?= Html::a('Читати уривок', ['site/read'], ['class' => 'btn btn-outline-light btn-lg px-5 py-3 rounded-pill']) ?>
                </footer>
            </blockquote>
        </div>
    </section>

    <div class="container py-5">
        <h2 class="text-center mb-5 fw-bold display-5">Чому батьки обирають Ріко?</h2>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <article class="benefit-card border-primary shadow-sm">
                    <div class="benefit-header">
                        <div class="benefit-icon">📖</div>
                        <h3>Унікальна методика</h3>
                    </div>
                    <p>Кожна сторінка — це ретельно продуманий логопедичний маршрут, що базується на принципах ігрової терапії.</p>
                </article>
            </div>
            <div class="col-lg-4 col-md-6">
                <article class="benefit-card border-success shadow-sm">
                    <div class="benefit-header">
                        <div class="benefit-icon">🗣️</div>
                        <h3>Збагачення словника</h3>
                    </div>
                    <p>Ми фокусуємося на розширенні активного запасу слів. Дитина вчиться описувати дії та емоції природно.</p>
                </article>
            </div>
            <div class="col-lg-4 col-md-6">
                <article class="benefit-card border-danger shadow-sm">
                    <div class="benefit-header">
                        <div class="benefit-icon">👅</div>
                        <h3>Логопедичні вправи</h3>
                    </div>
                    <p>Артикуляційна гімнастика вплетена в сюжет! Вправи для язичка виконуються разом із Ріко без нудьги.</p>
                </article>
            </div>
            <div class="col-lg-4 col-md-6">
                <article class="benefit-card border-warning shadow-sm">
                    <div class="benefit-header">
                        <div class="benefit-icon">🌟</div>
                        <h3>Світ пригод</h3>
                    </div>
                    <p>Замість сухих правил — захоплююча подорож. Кожен крок героя мотивує малюка до пізнання нового.</p>
                </article>
            </div>
            <div class="col-lg-4 col-md-6">
                <article class="benefit-card border-info shadow-sm">
                    <div class="benefit-header">
                        <div class="benefit-icon">🎨</div>
                        <h3>Яскраві ілюстрації</h3>
                    </div>
                    <p>Візуальний ряд створений художниками спеціально для дітей. Деталі стимулюють зорову увагу та мову.</p>
                </article>
            </div>
            <div class="col-lg-4 col-md-6">
                <article class="benefit-card border-dark shadow-sm">
                    <div class="benefit-header">
                        <div class="benefit-icon">✍️</div>
                        <h3>Авторський підхід</h3>
                    </div>
                    <p>Тетяна Борисова вклала роки практики. Кожна історія перевірена досвідом і довела свою ефективність.</p>
                </article>
            </div>
            <div class="col-lg-4 col-md-6">
                <article class="benefit-card border-danger shadow-sm">
                    <div class="benefit-header">
                        <div class="benefit-icon">🔍</div>
                        <h3>Розвиток уваги</h3>
                    </div>
                    <p>Завдання "знайди і покажи" тренують посидючість та здатність малюка концентруватися на деталях.</p>
                </article>
            </div>
            <div class="col-lg-4 col-md-6">
                <article class="benefit-card border-secondary shadow-sm">
                    <div class="benefit-header">
                        <div class="benefit-icon">🎓</div>
                        <h3>Підготовка до школи</h3>
                    </div>
                    <p>Робота з текстом розвиває фонематичний слух та навички логічного мислення й переказу.</p>
                </article>
            </div>
            <div class="col-lg-4 col-md-6">
                <article class="benefit-card border-primary shadow-sm">
                    <div class="benefit-header">
                        <div class="benefit-icon">👨‍👩‍👧‍👦</div>
                        <h3>Сімейні цінності</h3>
                    </div>
                    <p>Спільне читання зміцнює зв'язок між батьками та дитиною через спільні емоції та обговорення.</p>
                </article>
            </div>
        </div>

        <section class="mt-5 p-4 p-md-5 author-quote-block shadow-lg rounded-5 overflow-hidden position-relative">
            <div class="position-relative" style="z-index: 2;">
                <h2 class="h1 fw-bold mb-4 text-warning text-center text-md-start">Слово автора</h2>
                <blockquote class="blockquote">
                    <p class="fs-3 fst-italic text-white mb-4 fw-light quote-text" style="line-height: 1.6;">
                        "Моя мета — щоб кожна дитина відчула радість від спілкування. Ріко — це персонаж, що допоможе провести міст між світом мовчання та світом яскравих слів."
                    </p>
                    <footer class="blockquote-footer mt-2 text-center text-md-start">
                        <span class="text-white fw-bold">Тетяна Борисова</span>,
                        <cite title="Source Title" class="text-white opacity-75">логопед, автор книги</cite>
                    </footer>
                </blockquote>
            </div>
        </section>
    </div>
</main>