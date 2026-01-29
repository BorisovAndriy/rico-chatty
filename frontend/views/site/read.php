<?php

/** @var yii\web\View $this */

use yii\helpers\Url;
use yii\helpers\Html;

$this->title = 'Ріко-Розмовляйко — Читати уривок';

// Реєструємо покращені стилі для слайдера та нових іконок
$this->registerCss("
    .book-slider-container {
        max-width: 800px;
        margin: 0 auto;
    }
    .book-slider {
        background: #fdfdfd;
        border: 1px solid #eee;
    }
    .carousel-item img {
        height: 650px; 
        object-fit: contain;
        background-color: #ffffff;
    }
    .carousel-control-prev-icon, .carousel-control-next-icon {
        background-color: rgba(0,0,0,0.3);
        border-radius: 50%;
        padding: 20px;
        filter: invert(1);
    }
    .page-badge {
        position: absolute;
        bottom: 20px;
        right: 20px;
        z-index: 10;
    }
    .custom-list {
        list-style: none;
        padding-left: 0;
    }
    .custom-list li {
        display: flex;
        align-items: center;
        margin-bottom: 12px;
        font-weight: 500;
    }
    .blue-check {
        width: 24px;
        height: 24px;
        margin-right: 12px;
        flex-shrink: 0;
    }
    @media (max-width: 768px) {
        .carousel-item img {
            height: 400px;
        }
    }
");
?>

    <div class="site-read py-5" style="background-color: #ffffff; color: #1a1a1a; min-height: 100vh; font-family: 'Georgia', serif;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-md-11">

                <header class="text-center mb-5">
                    <h1 class="display-4 fw-bold mb-3 text-primary">Ріко-Розмовляйко 🐾</h1>
                    <p class="text-muted fst-italic" style="font-size: 1.2rem;">Зимова історія для розвитку мовлення</p>
                    <hr class="w-25 mx-auto border-primary border-2">
                </header>

                <article class="poem-body mx-auto mb-5" style="max-width: 650px; font-size: 1.5rem; line-height: 1.8; color: #222;">
                    <div class="text-center mb-5">
                        <p class="mb-2">Ріко-Розмовляйко з нами зимоньку вітає,</p>
                        <p class="mb-2">Він спілкуватись любить, в очі заглядає,</p>
                        <p class="mb-2">Хоче все побачить, хоче все почути –</p>
                        <p class="mb-2">Ріко-Розмовляйко розумним хоче бути.</p>

                        <div class="mt-4 ps-4 border-start border-primary border-4 d-inline-block text-start">
                            <p class="mb-2 italic text-muted">І ти, дитинонько, часу даремно не гай,</p>
                            <p class="mb-0 fw-bold text-primary">Слухай, думай, пізнавай і розмовляй!</p>
                        </div>
                    </div>
                </article>

                <div class="book-slider-container mb-5">
                    <h4 class="text-center mb-4" style="font-family: sans-serif; color: #555;">Гортайте сторінки книги (47 ілюстрацій)</h4>

                    <div id="bookCarousel" class="carousel slide book-slider shadow-lg rounded-4 overflow-hidden" data-bs-interval="false">

                        <div class="carousel-inner">
                            <?php for ($i = 1; $i <= 47; $i++): ?>
                                <div class="carousel-item <?= $i === 1 ? 'active' : '' ?>">
                                    <img src="<?= Url::to(["/images/book/page-{$i}.jpg"]) ?>" class="d-block w-100" alt="Сторінка <?= $i ?>">
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
                    <p class="text-center text-muted mt-3 small">Використовуйте стрілки, щоб гортати оригінальні сторінки посібника</p>
                </div>

                <div class="mt-5">
                    <div class="p-4 bg-light rounded-4 border-start border-primary border-4 shadow-sm">
                        <h5 class="small text-uppercase fw-bold mb-4 text-primary" style="letter-spacing: 1px; font-family: sans-serif;">Про цей посібник</h5>

                        <?php
                        // SVG іконка синьої галочки
                        $blueCheck = '
                        <svg class="blue-check" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="12" cy="12" r="12" fill="#0d6efd"/>
                            <path d="M7 12.5L10.5 16L17 9" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>';
                        ?>

                        <div class="row" style="font-size: 1.1rem; font-family: sans-serif; line-height: 1.4;">
                            <div class="col-md-6">
                                <ul class="custom-list mb-0">
                                    <li><?= $blueCheck ?> Розвиток мовлення дітей</li>
                                    <li><?= $blueCheck ?> Збагачення словника</li>
                                    <li><?= $blueCheck ?> Удосконалення вимови</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="custom-list mb-0">
                                    <li><?= $blueCheck ?> Активізація пам'яті</li>
                                    <li><?= $blueCheck ?> Емоційний розвиток</li>
                                    <li><?= $blueCheck ?> Скарбниця мовлення</li>
                                </ul>
                            </div>
                        </div>
                        <p class="mt-4 mb-0 text-muted small border-top pt-2">
                            Книга призначена для дітей дошкільного і молодшого шкільного віку. Автор: Тетяна Борисова.
                        </p>
                    </div>
                </div>

                <div class="mt-5 pt-5 text-center">
                    <p class="mb-4 text-muted lead">Бажаєте отримати повну версію з вправами?</p>
                    <?= Html::a('Замовити друкований примірник 🐾', ['site/shop'], [
                        'class' => 'btn btn-primary btn-lg px-5 shadow rounded-pill fw-bold py-3 text-uppercase'
                    ]) ?>
                </div>

            </div>
        </div>
    </div>

<?php
// JS-скрипт для повної зупинки автоматичного гортання
$this->registerJs("
    var myCarousel = document.querySelector('#bookCarousel');
    var carousel = new bootstrap.Carousel(myCarousel, {
      interval: false,
      ride: false
    });
");
?>