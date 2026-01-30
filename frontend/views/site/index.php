<?php

/** @var yii\web\View $this */

use yii\helpers\Url;
use yii\helpers\Html;

$this->title = 'Ріко-Розмовляйко — Книга для розвитку мовлення';

// 1. Реєстрація Meta Description
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Інтерактивна книга «Зимові пригоди Ріко-Розмовляйко» від логопеда Тетяни Борисової. Унікальна методика розвитку мовлення для дітей 3-6 років через гру та казку.'
]);

// 2. Мікророзмітка КНИГИ (Schema.org Book)
$bookSchema = [
    "@context" => "https://schema.org",
    "@type" => "Book",
    "name" => "Зимові пригоди Ріко-Розмовляйко",
    "author" => [
        "@type" => "Person",
        "name" => "Тетяна Борисова",
        "jobTitle" => "Логопед"
    ],
    "image" => Url::to('@web/favicon-96x96.png', true),
    "description" => "Інтерактивна книга «Зимові пригоди Ріко-Розмовляйко» від логопеда Тетяни Борисової. Унікальна методика розвитку мовлення для дітей 3-6 років через гру та казку.",
    "genre" => "Дитяча література, Логопедія",
    "audience" => [
        "@type" => "Audience",
        "audienceType" => "Діти від 3 до 6 років"
    ]
];

$this->registerCss("
    /* --- СТИЛІ БЛОКІВ --- */
    .benefit-card {
        padding: 15px 20px !important;
        border-radius: 20px;
        transition: transform 0.3s ease;
        height: 100% !important;
        background: #fff;
    }
    .benefit-card:hover { transform: translateY(-5px); }

    .benefit-header {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 8px;
    }
    .benefit-icon { 
        font-size: 1.8rem; 
        margin: 0 !important; 
        line-height: 1;
    }
    .benefit-card h3 { 
        font-size: 1.15rem !important; 
        margin: 0 !important; 
        white-space: nowrap; 
        font-weight: 700;
    }
    .benefit-card p { 
        font-size: 0.95rem !important; 
        line-height: 1.4;
        margin: 0 !important; 
        color: #4a5568;
    }

    .border-primary h3 { color: #0d6efd !important; }
    .border-success h3 { color: #198754 !important; }
    .border-danger h3 { color: #dc3545 !important; }
    .border-warning h3 { color: #f59e0b !important; }
    .border-info h3 { color: #0dcaf0 !important; }
    .border-secondary h3 { color: #6c757d !important; }
    .border-dark h3 { color: #2d3748 !important; } 

    .hero-banner, .author-quote-block {
        background: linear-gradient(135deg, #2b6cb0 0%, #1a365d 100%) !important;
    }

    /* --- ФІКС СОБАК: БІЛИЙ ФОН + ВІДСУТНІСТЬ КЛІТИНКИ --- */
    .hero-rico-icon, .author-rico-clean {
        width: 300px; 
        height: auto;
        vertical-align: middle;
        mix-blend-mode: normal !important; 
        filter: brightness(1.1) contrast(1.05) drop-shadow(0 8px 15px rgba(0,0,0,0.3));
        animation: rico-bounce 3s infinite ease-in-out;
        
        /* Біла підкладка як на нижньому блоці */
        background: radial-gradient(circle, rgba(255,255,255,1) 0%, rgba(255,255,255,0.8) 45%, rgba(255,255,255,0) 70%);
        border-radius: 50%;
        padding: 10px;

        /* Вирізаємо шахівницю по колу */
        -webkit-mask-image: radial-gradient(circle, rgba(0,0,0,1) 45%, rgba(0,0,0,0) 65%);
        mask-image: radial-gradient(circle, rgba(0,0,0,1) 45%, rgba(0,0,0,0) 65%);
    }

    .author-rico-clean {
        width: 260px !important;
    }

    @keyframes rico-bounce {
        0%, 100% { transform: translateY(0) rotate(0); }
        50% { transform: translateY(-10px) rotate(3deg); }
    }
");
?>

<script type="application/ld+json">
<?= json_encode($bookSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?>
</script>

<main class="site-index">

    <section class="p-4 mb-5 rounded-5 text-center shadow-sm hero-banner">
        <div class="container-fluid py-4">
            <h1 class="display-5 fw-bold text-white mb-3">Зимові пригоди<br>Ріко-Розмовляйко</h1>

            <?= Html::img(Url::to(['/favicon.svg']), ['class' => 'hero-rico-icon', 'alt' => 'Rico icon']) ?>

            <p class="fs-5 text-white opacity-90 mb-3 mt-3">Більше ніж просто книга — це ваш домашній логопед та найкращий друг дитини.</p>
            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                <?= Html::a('Купити книгу', ['site/shop'], ['class' => 'btn btn-warning btn-lg px-5 py-3 shadow rounded-pill fw-bold']) ?>
                <?= Html::a('Читати уривок', ['site/read'], ['class' => 'btn btn-outline-light btn-lg px-5 py-3 rounded-pill']) ?>
            </div>
        </div>
    </section>

    <div class="body-content container">
        <h2 class="text-center mb-5 fw-bold display-5 text-secondary">Чому батьки обирають Ріко?</h2>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <article class="card benefit-card border-0 shadow-sm border-top border-primary border-4">
                    <div class="benefit-header">
                        <div class="benefit-icon">📖</div>
                        <h3 class="h5">Унікальна методика</h3>
                    </div>
                    <p>Кожна сторінка — це ретельно продуманий логопедичний маршрут, що базується на принципах ігрової терапії.</p>
                </article>
            </div>

            <div class="col-lg-4 col-md-6">
                <article class="card benefit-card border-0 shadow-sm border-top border-success border-4">
                    <div class="benefit-header">
                        <div class="benefit-icon">🗣️</div>
                        <h3 class="h5">Збагачення словника</h3>
                    </div>
                    <p>Ми фокусуємося на розширенні активного запасу слів. Дитина вчиться описувати дії та емоції природно.</p>
                </article>
            </div>

            <div class="col-lg-4 col-md-6">
                <article class="card benefit-card border-0 shadow-sm border-top border-danger border-4">
                    <div class="benefit-header">
                        <div class="benefit-icon">👅</div>
                        <h3 class="h5">Логопедичні вправи</h3>
                    </div>
                    <p>Артикуляційна гімнастика вплетена в сюжет! Вправи для язичка виконуються разом із Ріко без нудьги.</p>
                </article>
            </div>

            <div class="col-lg-4 col-md-6">
                <article class="card benefit-card border-0 shadow-sm border-top border-warning border-4">
                    <div class="benefit-header">
                        <div class="benefit-icon">🌟</div>
                        <h3 class="h5">Світ пригод</h3>
                    </div>
                    <p>Замість сухих правил — захоплююча подорож. Кожен крок героя мотивує малюка до пізнання нового.</p>
                </article>
            </div>

            <div class="col-lg-4 col-md-6">
                <article class="card benefit-card border-0 shadow-sm border-top border-info border-4">
                    <div class="benefit-header">
                        <div class="benefit-icon">🎨</div>
                        <h3 class="h5">Яскраві ілюстрації</h3>
                    </div>
                    <p>Візуальний ряд створений художниками спеціально для дітей. Деталі стимулюють зорову увагу та мову.</p>
                </article>
            </div>

            <div class="col-lg-4 col-md-6">
                <article class="card benefit-card border-0 shadow-sm border-top border-dark border-4">
                    <div class="benefit-header">
                        <div class="benefit-icon">✍️</div>
                        <h3 class="h5">Авторський підхід</h3>
                    </div>
                    <p>Тетяна Борисова вклала роки практики. Кожна історія перевірена досвідом і довела свою ефективність.</p>
                </article>
            </div>

            <div class="col-lg-4 col-md-6">
                <article class="card benefit-card border-0 shadow-sm border-top border-danger border-4">
                    <div class="benefit-header">
                        <div class="benefit-icon">🔍</div>
                        <h3 class="h5">Розвиток уваги</h3>
                    </div>
                    <p>Завдання "знайди і покажи" тренують посидючість та здатність малюка концентруватися на деталях.</p>
                </article>
            </div>

            <div class="col-lg-4 col-md-6">
                <article class="card benefit-card border-0 shadow-sm border-top border-secondary border-4">
                    <div class="benefit-header">
                        <div class="benefit-icon">🎓</div>
                        <h3 class="h5">Підготовка до школи</h3>
                    </div>
                    <p>Робота з текстом розвиває фонематичний слух та навички логічного мислення й переказу.</p>
                </article>
            </div>

            <div class="col-lg-4 col-md-6">
                <article class="card benefit-card border-0 shadow-sm border-top border-primary border-4">
                    <div class="benefit-header">
                        <div class="benefit-icon">👨‍👩‍👧‍👦</div>
                        <h3 class="h5">Сімейні цінності</h3>
                    </div>
                    <p>Спільне читання зміцнює зв'язок між батьками та дитиною через спільні емоції та обговорення.</p>
                </article>
            </div>
        </div>

        <section class="mt-5 p-5 rounded-4 shadow-lg border-0 author-quote-block" style="position: relative; overflow: hidden;">
            <div class="row align-items-center position-relative" style="z-index: 2;">
                <div class="col-md-8">
                    <h2 class="h1 fw-bold mb-4 text-warning">Слово автора</h2>
                    <blockquote class="blockquote">
                        <p class="fs-3 fst-italic text-white mb-4 fw-light" style="line-height: 1.6;">
                            "Моя мета — щоб кожна дитина відчула радість від спілкування. Ріко — це персонаж, що допоможе провести міст між світом мовчання та світом яскравих слів."
                        </p>
                        <footer class="blockquote-footer mt-2 fw-bold text-warning" style="font-size: 1.25rem; border-top: 1px solid rgba(255,255,255,0.2); pt-3;">
                            Тетяна Борисова, <cite title="Source Title" class="text-white opacity-75">логопед, автор книги</cite>
                        </footer>
                    </blockquote>
                </div>
                <div class="col-md-4 text-center mt-4 mt-md-0">
                    <div class="d-inline-block">
                        <?= Html::img(Url::to(['/favicon.svg']), ['class' => 'author-rico-clean', 'alt' => 'Rico mascot']) ?>
                    </div>
                </div>
            </div>
            <div style="position: absolute; top: -50px; right: -50px; font-size: 20rem; opacity: 0.1; color: white; pointer-events: none;">🐾</div>
        </section>
    </div>
</main>