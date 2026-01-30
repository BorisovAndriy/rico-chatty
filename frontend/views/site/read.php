<?php

/** @var yii\web\View $this */

use yii\helpers\Url;
use yii\helpers\Html;

$this->title = 'Читати уривок | Ріко-Розмовляйко';

// Мікророзмітка сторінки
$readSchema = [
    "@context" => "https://schema.org",
    "@type" => "Book",
    "name" => "Зимові пригоди Ріко-Розмовляйко",
    "alternativeHeadline" => "Зимова історія для розвитку мовлення",
    "numberOfPages" => "47",
    "learningResourceType" => "Educational Book",
    "interactivityType" => "active",
    "author" => [
        "@type" => "Person",
        "name" => "Тетяна Борисова"
    ],
    "image" => Url::to('@web/images/book/page-1.jpg', true),
    "description" => "Перегляньте 47 сторінок авторського посібника «Ріко-Розмовляйко». Ознайомтеся з ілюстраціями та вправами для розвитку дитячого мовлення перед покупкою",
    "publisher" => [
        "@type" => "Organization",
        "name" => "Персиковий Острів Квестів"
    ]
];

$this->registerCss("
    /* --- Стилі для компактності та кольору --- */
    body { color: #212529; background-color: #ffffff; }
    
    .book-slider-container { max-width: 800px; margin: 0 auto; }
    .carousel-item img { height: 650px; object-fit: contain; background-color: #ffffff; }
    .carousel-control-prev-icon, .carousel-control-next-icon {
        background-color: rgba(0,0,0,0.5);
        border-radius: 50%; padding: 20px; filter: invert(1);
    }
    .page-badge { position: absolute; bottom: 20px; right: 20px; z-index: 10; }
    
    /* Картки переваг: Іконка + Заголовок в один рядок */
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
        gap: 10px;
        margin-bottom: 8px;
    }
    .benefit-icon { font-size: 1.8rem; margin: 0 !important; }
    .benefit-card h3 { 
        font-size: 1.15rem !important; 
        margin: 0 !important; 
        white-space: nowrap; 
        font-weight: 700;
    }
    .benefit-card p { font-size: 0.9rem !important; margin: 0 !important; }

    /* Кольорові бордери замість чорного */
    .border-primary { border-top-color: #0d6efd !important; } .border-primary h3 { color: #0d6efd !important; }
    .border-success { border-top-color: #198754 !important; } .border-success h3 { color: #198754 !important; }
    .border-danger { border-top-color: #dc3545 !important; } .border-danger h3 { color: #dc3545 !important; }
    .border-warning { border-top-color: #ffc107 !important; } .border-warning h3 { color: #ffc107 !important; }
    .border-info { border-top-color: #0dcaf0 !important; } .border-info h3 { color: #0dcaf0 !important; }
    .border-purple { border-top-color: #6610f2 !important; } .border-purple h3 { color: #6610f2 !important; }
    .border-orange { border-top-color: #fd7e14 !important; } .border-orange h3 { color: #fd7e14 !important; }
    .border-pink { border-top-color: #e83e8c !important; } .border-pink h3 { color: #e83e8c !important; }
    
    @media (max-width: 768px) { .carousel-item img { height: 400px; } }
");
?>

<script type="application/ld+json">
<?= json_encode($readSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?>
</script>

<main class="site-read py-5" style="background-color: #ffffff; color: #1a1a1a; min-height: 100vh; font-family: 'Georgia', serif;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <header class="text-center mb-5">
                    <h1 class="display-4 fw-bold mb-3 text-primary">Ріко-Розмовляйко 🐾</h1>
                    <p class="text-secondary fst-italic" style="font-size: 1.2rem;">Зимова історія для розвитку мовлення</p>
                    <hr class="w-25 mx-auto border-primary border-2 opacity-100">
                </header>

                <article class="poem-body mx-auto mb-5" style="max-width: 650px; font-size: 1.4rem; line-height: 1.8; color: #212529;">
                    <div class="text-center mb-5">
                        <p class="mb-2">Ріко-Розмовляйко з нами зимоньку вітає,</p>
                        <p class="mb-2">Він спілкуватись любить, в очі заглядає,</p>
                        <p class="mb-2">Хоче все побачить, хоче все почути –</p>
                        <p class="mb-2">Ріко-Розмовляйко розумним хоче бути.</p>

                        <div class="mt-4 ps-4 border-start border-primary border-4 d-inline-block text-start">
                            <p class="mb-2 fst-italic text-secondary" style="font-family: sans-serif; font-size: 1.1rem;">І ти, дитинонько, часу даремно не гай,</p>
                            <h2 class="h4 fw-bold text-primary mb-0" style="font-family: sans-serif;">Слухай, думай, пізнавай і розмовляй!</h2>
                        </div>
                    </div>
                </article>

                <div class="book-slider-container mb-5">
                    <h2 class="h5 text-center mb-4 fw-bold" style="font-family: sans-serif; color: #495057;">Гортайте сторінки книги (47 ілюстрацій)</h2>

                    <div id="bookCarousel" class="carousel slide book-slider shadow-lg rounded-4 overflow-hidden" data-bs-ride="false">
                        <div class="carousel-inner" role="listbox">
                            <?php for ($i = 1; $i <= 47; $i++): ?>
                                <div class="carousel-item <?= $i === 1 ? 'active' : '' ?>">
                                    <?= Html::img(["/images/book/page-{$i}.jpg"], [
                                        'class' => 'd-block w-100',
                                        'alt' => "Сторінка посібника Ріко-Розмовляйко №{$i}",
                                        'loading' => $i === 1 ? 'eager' : 'lazy',
                                    ]) ?>
                                    <div class="page-badge">
                                        <span class="badge bg-primary rounded-pill shadow px-3 py-2">Стор. <?= $i ?></span>
                                    </div>
                                </div>
                            <?php endfor; ?>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#bookCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Назад</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#bookCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Вперед</span>
                        </button>
                    </div>
                </div>

                <section class="mt-5 pt-4">
                    <div class="row g-4" style="font-family: sans-serif;">
                        <div class="col-md-4">
                            <div class="card benefit-card border-0 shadow-sm border-top border-primary border-4">
                                <div class="benefit-header">
                                    <span class="benefit-icon">🗣️</span>
                                    <h3>Активне мовлення</h3>
                                </div>
                                <p class="text-muted small">Спеціальні ігрові запитання спонукають малюка не просто слухати, а активно вступати в діалог.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card benefit-card border-0 shadow-sm border-top border-success border-4">
                                <div class="benefit-header">
                                    <span class="benefit-icon">📚</span>
                                    <h3>Багатий словник</h3>
                                </div>
                                <p class="text-muted small">Дитина засвоює нові іменники, дієслова та прикметники через контекст зимової казки.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card benefit-card border-0 shadow-sm border-top border-danger border-4">
                                <div class="benefit-header">
                                    <span class="benefit-icon">🧠</span>
                                    <h3>Логіка та пам'ять</h3>
                                </div>
                                <p class="text-muted small">Завдання на переказ та послідовність подій розвивають нейронні зв'язки та уважність.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card benefit-card border-0 shadow-sm border-top border-warning border-4">
                                <div class="benefit-header">
                                    <span class="benefit-icon">🌈</span>
                                    <h3>Емоційний інтелект</h3>
                                </div>
                                <p class="text-muted small">Разом із Ріко діти вчаться розрізняти емоції: радість від зустрічі, подив та співпереживання.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card benefit-card border-0 shadow-sm border-top border-info border-4">
                                <div class="benefit-header">
                                    <span class="benefit-icon">🎨</span>
                                    <h3>Зорова увага</h3>
                                </div>
                                <p class="text-muted small">Деталізовані ілюстрації тренують здатність концентруватися та знаходити дрібні предмети.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card benefit-card border-0 shadow-sm border-top border-primary border-4">
                                <div class="benefit-header">
                                    <span class="benefit-icon">💎</span>
                                    <h3>Чиста вимова</h3>
                                </div>
                                <p class="text-muted small">Логопедичні акценти в тексті допомагають батькам ненав'язливо тренувати правильні звуки.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card benefit-card border-0 shadow-sm border-top border-purple border-4">
                                <div class="benefit-header">
                                    <span class="benefit-icon">🎓</span>
                                    <h3>Шкільна готовність</h3>
                                </div>
                                <p class="text-muted small">Формування навичок слухання, розуміння тексту та побудови речень — фундамент для навчання.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card benefit-card border-0 shadow-sm border-top border-orange border-4">
                                <div class="benefit-header">
                                    <span class="benefit-icon">✍️</span>
                                    <h3>Моторика рук</h3>
                                </div>
                                <p class="text-muted small">Пальчикові ігри та вправи, описані в посібнику, стимулюють мовленнєві центри мозку.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card benefit-card border-0 shadow-sm border-top border-pink border-4">
                                <div class="benefit-header">
                                    <span class="benefit-icon">👨‍👩‍👧</span>
                                    <h3>Час разом</h3>
                                </div>
                                <p class="text-muted small">Книга створює простір для теплого спілкування дитини з батьками, зміцнюючи емоційний зв'язок.</p>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="mt-5 pt-5 text-center">
                    <p class="mb-4 text-secondary lead" style="font-family: sans-serif;">Сподобався уривок? Отримайте повну друковану версію!</p>
                    <?= Html::a('Замовити книгу для дитини 🐾', ['site/shop'], [
                        'class' => 'btn btn-primary btn-lg px-5 shadow rounded-pill fw-bold py-3 text-uppercase',
                        'style' => 'font-family: sans-serif;'
                    ]) ?>
                </div>

            </div>
        </div>
    </div>
</main>