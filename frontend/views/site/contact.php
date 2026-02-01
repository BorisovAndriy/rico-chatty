<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Про автора та методику | Тетяна Борисова';

$this->registerCss("
    .site-about { padding-top: 0 !important; background-color: #fcfcfd; }
    
    .hero-banner { 
        margin-top: 0 !important; 
        border-radius: 0 0 80px 80px !important; 
        padding: 80px 0 !important;
        background: linear-gradient(180deg, #2b6cb0 0%, #1a365d 100%);
        color: white;
    }

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

    .border-primary { border-top-color: #0d6efd !important; }
    .border-success { border-top-color: #198754 !important; }
    .border-danger { border-top-color: #dc3545 !important; }
    .border-warning { border-top-color: #ffc107 !important; }
    .border-info { border-top-color: #0dcaf0 !important; }
    .border-dark { border-top-color: #212529 !important; }
    .border-secondary { border-top-color: #6c757d !important; }

    .quote-section {
        background: #fff;
        border-radius: 30px;
        border-left: 10px solid #0d6efd;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    }
");

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
            <h2 class="h1 fw-bold mb-4 text-warning text-center text-md-start">Консультація та замовлення</h2>
            <blockquote class="blockquote">
                <p class="fs-3 fst-italic text-white mb-4 fw-light quote-text" style="line-height: 1.6;">
                    Маєте запитання щодо доставки чи змісту книг? Не зволікайте — пишіть або телефонуйте. Ми допоможемо обрати найкраще для розвитку вашої дитини!
                </p>
                <footer class="blockquote-footer mt-2 text-center text-md-start">
                    <?= Html::a('Купити книгу 🐾', ['site/shop'], ['class' => 'btn btn-warning btn-lg px-5 py-3 shadow rounded-pill fw-bold']) ?>
                    <?= Html::a('Читати уривок', ['site/read'], ['class' => 'btn btn-outline-light btn-lg px-5 py-3 rounded-pill']) ?>
                </footer>
            </blockquote>
        </div>
    </section>

    <div class="container pb-5">
        <div class="row g-4">

            <div class="col-lg-4 col-md-6">
                <article class="benefit-card border-primary">
                    <div class="benefit-header">
                        <div class="benefit-icon">📞</div>
                        <h3 style="color: #0d6efd;">Телефон</h3>
                    </div>
                    <p class="fs-5 fw-bold text-dark mt-2">+38 (097) 372-58-49</p>
                </article>
            </div>

            <div class="col-lg-4 col-md-6">
                <article class="benefit-card border-success">
                    <div class="benefit-header">
                        <div class="benefit-icon">📱</div>
                        <h3 style="color: #198754;">Телефон 2</h3>
                    </div>
                    <p class="fs-5 fw-bold text-dark mt-2">+38 (063) 214-00-37</p>
                </article>
            </div>


            <div class="col-lg-4 col-md-6">
                <article class="benefit-card border-success">
                    <div class="benefit-header">
                        <h3 style="color: #198754;">   <a href="viber://chat?number=%2B380632140037" class="btn btn-primary rounded-pill px-4 shadow-sm">Viber</a></h3>
                    </div>
                    <p class="fs-5 fw-bold text-dark mt-2">+38 (063) 214-00-37</p>
                </article>
            </div>
        </div>

        <section class="mt-5 p-4 p-md-5 author-quote-block shadow-lg rounded-5 overflow-hidden position-relative">
            <div class="position-relative" style="z-index: 2;">
                <h2 class="h1 fw-bold mb-4 text-warning text-center text-md-start">Зв'яжіться з нами</h2>
                <blockquote class="blockquote">
                    <p class="fs-3 fst-italic text-white mb-4 fw-light quote-text" style="line-height: 1.6;">
                        Маєте запитання щодо методики чи замовлення книг? Напишіть або зателефонуйте нам, і ми з радістю допоможемо вам відкрити світ мовлення для вашої дитини!
                    </p>
                    <footer class="blockquote-footer mt-2 text-center text-md-start">
                        <span class="text-white fw-bold">Тетяна Борисова</span>,
                        <cite title="Source Title" class="text-white opacity-75">логопед, помічник у розвитку мовлення Вашої дитини</cite>
                    </footer>
                </blockquote>
            </div>
        </section>
    </div>
</main>