<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Про автора та методику | Тетяна Борисова';

// Підготовка даних мікророзмітки
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

    <section class="py-5 text-center bg-white mb-5 border-bottom shadow-sm" style="background: linear-gradient(180deg, #ffffff 0%, #f8f9fa 100%);">
        <div class="container py-4">
            <h1 class="display-4 fw-bold text-primary mb-3" style="font-size: calc(1.5rem + 3vw);">Тетяна Борисова</h1>
            <p class="lead text-dark mx-auto px-3 fst-italic" style="max-width: 800px; font-size: 1.25rem;">
                Логопед-практик, авторка серії книг «Ріко-Розмовляйко» та розробниця унікальної методики ігрового розвитку мовлення для дітей дошкільного віку.
            </p>
            <hr class="w-25 mx-auto border-primary border-2 opacity-75">
        </div>
    </section>

    <div class="container">
        <div class="row g-4">

            <div class="col-lg-4 col-md-6">
                <article class="card h-100 border-0 shadow-sm bg-light p-3 border-top border-primary border-4">
                    <div class="card-body">
                        <h2 class="card-title h5 fw-bold mb-3" style="color: #0d6efd;">🎓 Кваліфікація</h2>
                        <p class="card-text text-muted">Багаторічний досвід роботи з дітьми дозволив сформувати глибоке розуміння фізіології та психології мовлення. Кожна вправа в книгах базується на наукових підходах.</p>
                    </div>
                </article>
            </div>

            <div class="col-lg-4 col-md-6">
                <article class="card h-100 border-0 shadow-sm bg-light p-3 border-top border-success border-4">
                    <div class="card-body">
                        <h2 class="card-title h5 fw-bold mb-3" style="color: #198754;">🧠 Ранній розвиток</h2>
                        <p class="card-text text-muted">Мовлення — це фундамент інтелекту. Своєчасна корекція та розвиток словникового запасу у віці 3-6 років напряму впливають на формування логічного мислення.</p>
                    </div>
                </article>
            </div>

            <div class="col-lg-4 col-md-6">
                <article class="card h-100 border-0 shadow-sm bg-light p-3 border-top border-danger border-4">
                    <div class="card-body">
                        <h2 class="card-title h5 fw-bold mb-3" style="color: #b02a37;">🎮 Ігрова терапія</h2>
                        <p class="card-text text-muted">Ми відійшли від нудних занять. Дитина вчиться через гру з песиком Ріко. Такий підхід знімає психологічні бар'єри та робить процес навчання природним.</p>
                    </div>
                </article>
            </div>

            <div class="col-lg-4 col-md-6">
                <article class="card h-100 border-0 shadow-sm bg-light p-3 border-top border-warning border-4">
                    <div class="card-body">
                        <h2 class="card-title h5 fw-bold mb-3" style="color: #856404;">🗣️ Чистота вимови</h2>
                        <p class="card-text text-muted">Особлива увага приділяється артикуляційній гімнастиці. Правильна постановка звуків з дитинства допомагає дитині відчувати себе впевнено.</p>
                    </div>
                </article>
            </div>

            <div class="col-lg-4 col-md-6">
                <article class="card h-100 border-0 shadow-sm bg-light p-3 border-top border-info border-4">
                    <div class="card-body">
                        <h2 class="card-title h5 fw-bold mb-3" style="color: #087990;">📚 Соціалізація</h2>
                        <p class="card-text text-muted">Розвинене мовлення дозволяє дитині ефективно комунікувати. Наші методики вчать не просто говорити слова, а будувати діалог з навколишнім світлом.</p>
                    </div>
                </article>
            </div>

            <div class="col-lg-4 col-md-6">
                <article class="card h-100 border-0 shadow-sm bg-light p-3 border-top border-dark border-4">
                    <div class="card-body">
                        <h2 class="card-title h5 fw-bold mb-3" style="color: #212529;">🧩 Подолання затримок</h2>
                        <p class="card-text text-muted">Для дітей із затримкою мовленнєвого розвитку книга стає м'яким стимулом. Завдяки яскравим образам дитина швидше починає копіювати звуки.</p>
                    </div>
                </article>
            </div>

            <div class="col-lg-4 col-md-6">
                <article class="card h-100 border-0 shadow-sm bg-light p-3 border-top border-secondary border-4">
                    <div class="card-body">
                        <h2 class="card-title h5 fw-bold mb-3" style="color: #495057;">🏡 Роль батьків</h2>
                        <p class="card-text text-muted">Ми даємо інструмент для професійної допомоги вдома. Вам не потрібно бути логопедом — методика прописана для занять у комфортній домашній обстановці.</p>
                    </div>
                </article>
            </div>

            <div class="col-lg-4 col-md-6">
                <article class="card h-100 border-0 shadow-sm bg-light p-3 border-top border-primary border-4">
                    <div class="card-body">
                        <h2 class="card-title h5 fw-bold mb-3" style="color: #0d6efd;">📈 Ефективність</h2>
                        <p class="card-text text-muted">Позитивні відгуки сотень батьків підтверджують: діти показують кращі результати при тестуванні перед школою та мають багатший емоційний інтелект.</p>
                    </div>
                </article>
            </div>

            <div class="col-lg-4 col-md-6">
                <article class="card h-100 border-0 shadow-sm bg-light p-3 border-top border-success border-4">
                    <div class="card-body">
                        <h2 class="card-title h5 fw-bold mb-3" style="color: #198754;">❤️ Місія проекту</h2>
                        <p class="card-text text-muted">Моя мета — зробити професійну логопедію доступною для кожної родини, щоб кожна дитина мала можливість розкрити свій потенціал.</p>
                    </div>
                </article>
            </div>

        </div>

        <section class="my-5 p-5 bg-white border rounded-4 text-center shadow-sm">
            <blockquote class="blockquote mb-0">
                <p class="h3 fst-italic text-dark mb-4">"Мова дитини — це ключ до її майбутнього. Давайте відкриємо цей світ разом."</p>
                <footer class="blockquote-footer mt-2 fw-bold text-primary" style="font-size: 1.2rem;">Тетяна Борисова</footer>
            </blockquote>
        </section>
    </div>
</main>