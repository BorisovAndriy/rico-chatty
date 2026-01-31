<?php

/** @var yii\web\View $this */

use yii\helpers\Url;
use yii\helpers\Html;

$this->title = 'Читати уривок | Ріко-Розмовляйко';

// МІКРОРОЗМІТКА (SCHEMA.ORG) — ПОВЕРНУТО
$bookSchema = [
    "@context" => "https://schema.org",
    "@type" => "Book",
    "name" => "Зимові пригоди Ріко-Розмовляйко",
    "author" => [
        "@type" => "Person",
        "name" => "Тетяна Борисова",
        "jobTitle" => "Логопед"
    ],
    "image" => Url::to('@web/images/book/page-1.jpg', true),
    "description" => "Ознайомтеся з уривком інтерактивної книги для розвитку мовлення. Унікальна методика від логопеда Тетяни Борисової.",
    "genre" => "Дитяча література, Логопедія"
];


?>

<script type="application/ld+json">
<?= json_encode($bookSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?>
</script>

<main class="site-read">
    <!--
    <section class="mt-5 p-5 author-quote-block shadow-lg rounded-5">
        <div class="row align-items-center position-relative" style="z-index: 2;">
            <div class="col-md-3 text-center mt-3 mt-md-0">
                <?= Html::img(Url::to(['/favicon.svg']), ['class' => 'author-rico-clean', 'alt' => 'Rico mascot']) ?>
            </div>
            <div class="col-md-8">

                <h3 class="h1 fw-bold mb-5 text-warning">Зимові пригоди Ріко-Розмовляйко</h3>

                <blockquote class="blockquote">
                    <div class="col-md-9 text-center text-md-start">
                        <article class="poem-body" style="font-size: 1.6rem; line-height: 1.6; color: #ffffff; font-family: 'Georgia', serif; font-style: italic;">
                            <p class="mb-2">Ріко-Розмовляйко з нами зимоньку вітає,</p>
                            <p class="mb-2">Він спілкуватись любить, в очі заглядає,</p>
                            <p class="mb-2">Хоче все побачить, хоче все почути —</p>
                            <p class="mb-0 fw-bold text-warning">Ріко-Розмовляйко розумним хоче бути.</p>
                        </article>
                    </div>
                </blockquote>
            </div>

        </div>
        <div style="position: absolute; bottom: -20px; right: -20px; font-size: 15rem; opacity: 0.1; color: white; pointer-events: none; z-index: 1;">🐾</div>
    </section>
    -->

    <section class="mt-5 p-4 p-md-5 author-quote-block shadow-lg rounded-5 overflow-hidden position-relative">
        <div class="position-relative" style="z-index: 2;">
            <!--
            <h2 class="h1 fw-bold mb-4 text-warning text-center text-md-start">Ріко-Розмовляйко з нами зимоньку вітає,</h2>
            -->
            <blockquote class="blockquote">
                <article class="poem-body" style="font-size: 1.6rem; line-height: 1.6; color: #ffffff; font-family: 'Georgia', serif; font-style: italic; padding-left: 25%">
                    <p class="mb-2">Ріко-Розмовляйко з нами зимоньку вітає,</p>
                    <p class="mb-2">Він спілкуватись любить, в очі заглядає,</p>
                    <p class="mb-2">Хоче все побачить, хоче все почути —</p>
                    <p class="mb-0 fw-bold text-warning">Ріко-Розмовляйко розумним хоче бути.</p>
                </article>
                <footer class="blockquote-footer mt-2 text-center text-md-start">
                    <h3 class="h1 fw-bold mb-4 text-warning float-md-end"> <?= Html::a('Купити книгу 🐾', ['site/shop'], ['class' => 'btn btn-warning btn-lg px-5 py-3 shadow rounded-pill fw-bold']) ?></h3>
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
                                    <?= Html::img(["/images/book/page-{$i}.jpg"], ['class' => 'd-block w-100', 'alt' => "Сторінка {$i}"]) ?>
                                    <div class="page-badge" style="position: absolute; bottom: 10px; left: 10px; z-index: 10;">
                                        <span class="badge bg-warning text-dark px-3 py-2 fs-6 shadow">Стор. <?= $i ?></span>
                                    </div>
                                </div>
                            <?php endfor; ?>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#bookCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#bookCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>
                </div>

                <div class="row g-4 mt-5">
                    <div class="col-md-4">
                        <div class="benefit-card border-primary shadow-sm h-100">
                            <div class="benefit-header">
                                <span class="benefit-icon">🗣️</span>
                                <h3>Активне мовлення</h3>
                            </div>
                            <p>Спеціальні ігрові запитання спонукають малюка не просто слухати, а активно вступати в діалог.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="benefit-card border-success shadow-sm h-100">
                            <div class="benefit-header">
                                <span class="benefit-icon">📚</span>
                                <h3>Багатий словник</h3>
                            </div>
                            <p>Дитина засвоює нові іменники, дієслова та прикметники через контекст зимової казки.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="benefit-card border-danger shadow-sm h-100">
                            <div class="benefit-header">
                                <span class="benefit-icon">🧠</span>
                                <h3>Логіка та пам'ять</h3>
                            </div>
                            <p>Завдання на переказ та послідовність подій розвивають нейронні зв'язки та уважність.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="benefit-card border-warning shadow-sm h-100">
                            <div class="benefit-header">
                                <span class="benefit-icon">🌈</span>
                                <h3>Емоційний інтелект</h3>
                            </div>
                            <p>Разом із Ріко діти вчаться розрізняти емоції: радість від зустрічі, подив та співпереживання.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="benefit-card border-info shadow-sm h-100">
                            <div class="benefit-header">
                                <span class="benefit-icon">🎨</span>
                                <h3>Зорова увага</h3>
                            </div>
                            <p>Деталізовані ілюстрації тренують здатність концентруватися та знаходити дрібні предмети.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="benefit-card border-primary shadow-sm h-100">
                            <div class="benefit-header">
                                <span class="benefit-icon">💎</span>
                                <h3>Чиста вимова</h3>
                            </div>
                            <p>Логопедичні акценти в тексті допомагають батькам ненав'язливо тренувати правильні звуки.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="benefit-card border-purple shadow-sm h-100">
                            <div class="benefit-header">
                                <span class="benefit-icon">🎓</span>
                                <h3>Шкільна готовність</h3>
                            </div>
                            <p>Формування навичок слухання, розуміння тексту та побудови речень — фундамент для навчання.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="benefit-card border-orange shadow-sm h-100">
                            <div class="benefit-header">
                                <span class="benefit-icon">✍️</span>
                                <h3>Моторика рук</h3>
                            </div>
                            <p>Пальчикові ігри та вправи, описані в посібнику, стимулюють мовленнєві центри мозку.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="benefit-card border-pink shadow-sm h-100">
                            <div class="benefit-header">
                                <span class="benefit-icon">👨‍👩‍👧</span>
                                <h3>Час разом</h3>
                            </div>
                            <p>Книга створює простір для теплого спілкування дитини з батьками, зміцнюючи зв'язок.</p>
                        </div>
                    </div>
                </div>
<!--
                <section class="mt-5 p-5 author-quote-block shadow-lg rounded-5">
                    <div class="row align-items-center position-relative" style="z-index: 2;">
                        <div class="col-md-8">
                            <h2 class="h1 fw-bold mb-4 text-warning">Сподобався уривок?</h2>
                            <blockquote class="blockquote">
                                <?= Html::a('КУПИТИ КНИГУ 🐾', ['site/shop'], [
                                    'class' => 'btn btn-warning btn-lg px-5 shadow rounded-pill fw-bold py-3',
                                    'style' => 'font-size: 1.5rem;'
                                ]) ?>
                            </blockquote>
                        </div>
                        <div class="col-md-4 text-center mt-4 mt-md-0">
                            <?= Html::img(Url::to(['/favicon.svg']), ['class' => 'author-rico-clean', 'alt' => 'Rico mascot']) ?>
                        </div>
                    </div>
                    <div style="position: absolute; bottom: -20px; right: -20px; font-size: 15rem; opacity: 0.1; color: white; pointer-events: none; z-index: 1;">🐾</div>
                </section>
-->
            </div>
        </div>
    </div>
</main>