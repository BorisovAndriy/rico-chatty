<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Про автора та методику | Тетяна Борисова';

$this->registerCss("
    .site-about { padding-top: 0 !important; background-color: #fcfcfd; }
    
    /* Головний синій банер з округленим низом (як на головній) */
    .hero-banner { 
        margin-top: 0 !important; 
        border-radius: 0 0 80px 80px !important; 
        padding: 80px 0 !important;
        background: linear-gradient(180deg, #2b6cb0 0%, #1a365d 100%);
        color: white;
    }

    /* Картки переваг по аналогії з index/shop */
    .benefit-card {
        background: #fff;
        border-radius: 20px;
        padding: 25px;
        height: 100%;
        transition: 0.3s ease;
        border: 1px solid #e2e8f0;
        border-top-width: 5px !important;
        display: flex;
        flex-direction: column;
        box-shadow: 0 5px 15px rgba(0,0,0,0.03);
    }
    .benefit-card:hover { transform: translateY(-7px); box-shadow: 0 15px 30px rgba(0,0,0,0.08); }
    .benefit-header { display: flex; align-items: center; margin-bottom: 15px; gap: 15px; }
    .benefit-icon { font-size: 2rem; }
    .benefit-card h3 { font-size: 1.2rem; font-weight: 700; margin: 0; }
    .benefit-card p { color: #64748b; font-size: 0.95rem; line-height: 1.5; margin: 0; }

    /* Кольорові класи для рамок */
    .border-primary { border-top-color: #0d6efd !important; }
    .border-success { border-top-color: #198754 !important; }
    .border-danger { border-top-color: #dc3545 !important; }
    .border-warning { border-top-color: #ffc107 !important; }
    .border-info { border-top-color: #0dcaf0 !important; }
    .border-dark { border-top-color: #212529 !important; }
    .border-secondary { border-top-color: #6c757d !important; }

    /* Стиль нижнього блоку цитати */
    .quote-section {
        background: #fff;
        border-radius: 30px;
        border-left: 10px solid #0d6efd;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    }
");

// Підготовка даних мікророзмітки (твій оригінал)
$authorSchema = [
    "@context" => "https://schema.org",
    "@type" => "Person",
    "name" => "Тетяна Борисова",
    "jobTitle" => "Логопед, автор книг",
    "description" => "Дізнайтеся про методику Тетяни Борисової — логопеда-практика та автора серії «Ріко-Розмовляйко». Професійний підхід до раннього розвитку дитини та ігрової терапії",
    "url" => Url::to(['site/about'], true),
    "image" => Url::to('@web/favicon.ico', true),
    "knowsAbout" => [
        "Логопедія",
        "Ранній розвиток дитини",
        "Ігрова терапія",
        "Артикуляційна гімнастика"
    ]
];
?>

<script type="application/ld+json">
<?= json_encode($authorSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?>
</script>

<main class="site-about">


    <section class="mt-5 p-4 p-md-5 author-quote-block shadow-lg rounded-5 overflow-hidden position-relative">
        <div class="position-relative" style="z-index: 2;">
            <h2 class="h1 fw-bold mb-4 text-warning text-center text-md-start">Зимові пригоди Ріко-Розмовляйко</h2>
            <blockquote class="blockquote">
                <p class="fs-3 fst-italic text-white mb-4 fw-light quote-text" style="line-height: 1.6;">
                    Логопед-практик, авторка серії книг «Ріко-Розмовляйко» та розробниця унікальної методики ігрового розвитку мовлення для дітей дошкільного віку.
                </p>
                <footer class="blockquote-footer mt-2 text-center text-md-start">
                    <?= Html::a('Купити книгу 🐾', ['site/shop'], ['class' => 'btn btn-warning btn-lg px-5 py-3 shadow rounded-pill fw-bold']) ?>
                    <?= Html::a('Читати уривок', ['site/read'], ['class' => 'btn btn-outline-light btn-lg px-5 py-3 rounded-pill']) ?>
                </footer>
            </blockquote>
        </div>
    </section>
<!--
    <section class="hero-banner text-center mb-5 shadow-sm">
        <div class="container py-4">
            <h1 class="display-4 fw-bold text-white mb-3" style="font-size: calc(1.5rem + 3vw);">Тетяна Борисова</h1>
            <p class="lead text-white mx-auto px-3 fst-italic opacity-90" style="max-width: 800px; font-size: 1.25rem;">
                Логопед-практик, авторка серії книг «Ріко-Розмовляйко» та розробниця унікальної методики ігрового розвитку мовлення для дітей дошкільного віку.
            </p>
            <hr class="w-25 mx-auto border-light border-2 opacity-50">
        </div>
    </section>
-->
    <div class="container pb-5">
        <div class="row g-4">

            <div class="col-lg-4 col-md-6">
                <article class="benefit-card border-primary">
                    <div class="benefit-header">
                        <div class="benefit-icon">🎓</div>
                        <h3 style="color: #0d6efd;">Кваліфікація</h3>
                    </div>
                    <p>Багаторічний досвід роботи з дітьми дозволив сформувати глибоке розуміння фізіології та психології мовлення. Кожна вправа в книгах базується на наукових підходах.</p>
                </article>
            </div>

            <div class="col-lg-4 col-md-6">
                <article class="benefit-card border-success">
                    <div class="benefit-header">
                        <div class="benefit-icon">🧠</div>
                        <h3 style="color: #198754;">Ранній розвиток</h3>
                    </div>
                    <p>Мовлення — це фундамент інтелекту. Своєчасна корекція та розвиток словникового запасу у віці 3-6 років напряму впливають на формування логічного мислення.</p>
                </article>
            </div>

            <div class="col-lg-4 col-md-6">
                <article class="benefit-card border-danger">
                    <div class="benefit-header">
                        <div class="benefit-icon">🎮</div>
                        <h3 style="color: #b02a37;">Ігрова терапія</h3>
                    </div>
                    <p>Ми відійшли від нудних занять. Дитина вчиться через гру з песиком Ріко. Такий підхід знімає психологічні бар'єри та робить процес навчання природним.</p>
                </article>
            </div>

            <div class="col-lg-4 col-md-6">
                <article class="benefit-card border-warning">
                    <div class="benefit-header">
                        <div class="benefit-icon">🗣️</div>
                        <h3 style="color: #856404;">Чистота вимови</h3>
                    </div>
                    <p>Особлива увага приділяється артикуляційній гімнастиці. Правильна постановка звуків з дитинства допомагає дитині відчувати себе впевнено.</p>
                </article>
            </div>

            <div class="col-lg-4 col-md-6">
                <article class="benefit-card border-info">
                    <div class="benefit-header">
                        <div class="benefit-icon">📚</div>
                        <h3 style="color: #087990;">Соціалізація</h3>
                    </div>
                    <p>Розвинене мовлення дозволяє дитині ефективно комунікувати. Наші методики вчать не просто говорити слова, а будувати діалог з навколишнім світлом.</p>
                </article>
            </div>

            <div class="col-lg-4 col-md-6">
                <article class="benefit-card border-dark">
                    <div class="benefit-header">
                        <div class="benefit-icon">🧩</div>
                        <h3 style="color: #212529;">Подолання затримок</h3>
                    </div>
                    <p>Для дітей із затримкою мовленнєвого розвитку книга стає м'яким стимулом. Завдяки яскравим образам дитина швидше починає копіювати звуки.</p>
                </article>
            </div>

            <div class="col-lg-4 col-md-6">
                <article class="benefit-card border-secondary">
                    <div class="benefit-header">
                        <div class="benefit-icon">🏡</div>
                        <h3 style="color: #495057;">Роль батьків</h3>
                    </div>
                    <p>Ми даємо інструмент для професійної допомоги вдома. Вам не потрібно бути логопедом — методика прописана для занять у комфортній домашній обстановці.</p>
                </article>
            </div>

            <div class="col-lg-4 col-md-6">
                <article class="benefit-card border-primary">
                    <div class="benefit-header">
                        <div class="benefit-icon">📈</div>
                        <h3 style="color: #0d6efd;">Ефективність</h3>
                    </div>
                    <p>Позитивні відгуки сотень батьків підтверджують: діти показують кращі результати при тестуванні перед школою та мають багатший емоційний інтелект.</p>
                </article>
            </div>

            <div class="col-lg-4 col-md-6">
                <article class="benefit-card border-success">
                    <div class="benefit-header">
                        <div class="benefit-icon">❤️</div>
                        <h3 style="color: #198754;">Місія проекту</h3>
                    </div>
                    <p>Моя мета — зробити професійну логопедію доступною для кожної родини, щоб кожна дитина мала можливість розкрити свій потенціал.</p>
                </article>
            </div>

        </div>
<!--
        <section class="my-5 p-5 quote-section text-center">
            <blockquote class="blockquote mb-0">
                <p class="h3 fst-italic text-dark mb-4">"Мова дитини — це ключ до її майбутнього. Давайте відкриємо цей світ разом."</p>
                <footer class="blockquote-footer mt-2 fw-bold text-primary" style="font-size: 1.2rem;">Тетяна Борисова</footer>
            </blockquote>
        </section>
        -->

        <section class="mt-5 p-4 p-md-5 author-quote-block shadow-lg rounded-5 overflow-hidden position-relative">
            <div class="position-relative" style="z-index: 2;">
                <h2 class="h1 fw-bold mb-4 text-warning text-center text-md-start">Слово автора</h2>
                <blockquote class="blockquote">
                    <p class="fs-3 fst-italic text-white mb-4 fw-light quote-text" style="line-height: 1.6;">
                        "Мова дитини — це ключ до її майбутнього. Давайте відкриємо цей світ разом."
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