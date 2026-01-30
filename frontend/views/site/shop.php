<?php

/** @var yii\web\View $this */
/** @var yii\widgets\ActiveForm $form */
/** @var common\models\Order $model */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$this->title = 'Замовити книгу — Ріко-Розмовляйко';

// 1. Мікророзмітка ТОВАРУ
$productSchema = [
    "@context" => "https://schema.org",
    "@type" => "Product",
    "name" => "Книга «Зимові пригоди Ріко-Розмовляйко»",
    "image" => [
        Url::to('@web/favicon.ico', true),
    ],
    "description" => "Купити книгу «Ріко-Розмовляйко» за ціною автора — 600 грн. Розвиваючий посібник для дітей, що покращує вимову та словниковий запас. Швидка доставка по Україні",
    "brand" => [
        "@type" => "Brand",
        "name" => "Ріко-Розмовляйко"
    ],
    "offers" => [
        "@type" => "Offer",
        "url" => Url::to(['site/shop'], true),
        "priceCurrency" => "UAH",
        "price" => "600",
        "itemCondition" => "https://schema.org/NewCondition",
        "availability" => "https://schema.org/InStock",
        "seller" => [
            "@type" => "Person",
            "name" => "Тетяна Борисова"
        ]
    ]
];

// 2. Мікророзмітка КАНАЛІВ ЗВ'ЯЗКУ (LocalBusiness)
$businessSchema = [
    "@context" => "https://schema.org",
    "@type" => "LocalBusiness",
    "name" => "Ріко-Розмовляйко",
    "image" => Url::to('@web/favicon.ico', true),
    "telephone" => "+380632140037",
    "priceRange" => "600 UAH",
    "address" => [
        "@type" => "PostalAddress",
        "addressCountry" => "UA"
    ]
];
?>

<script type="application/ld+json">
<?= json_encode($productSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?>
</script>

<script type="application/ld+json">
<?= json_encode($businessSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?>
</script>

<main class="site-shop">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 fw-bold mb-4">
                    🛍️ Замовити книгу <br> "Ріко-Розмовляйко"
                </h1>

                <section class="alert border-0 shadow-sm py-4 mb-5 rounded-4 author-quote-block text-start" style="background-color: #f1c40f !important; border-left: 10px solid #3498db !important;">
                    <div class="d-flex align-items-center px-3">
                        <div class="me-3 display-6">⚠️</div>
                        <div>
                            <h2 class="h4 fw-bold mb-1" style="color: #2c3e50 !important;">Увага! Обмежений тираж</h2>
                            <p class="mb-0 fs-5" style="color: #2c3e50 !important;">Перша партія книги майже розпродана. Поспішайте зарезервувати свій примірник!</p>
                        </div>
                    </div>
                </section>

                <div class="row mb-5 text-start g-5">
                    <aside class="col-md-6 border-end-md">
                        <div class="mb-4">
                            <h3 class="display-5 fw-bold text-primary mb-0">600 грн</h3>
                            <p class="text-secondary fs-5">Ціна за одне подарункове видання</p>
                        </div>

                        <hr class="my-4 border-primary opacity-25">

                        <h2 class="h4 fw-bold mb-4">📞 Прямий зв'язок:</h2>

                        <div class="mb-4 p-3 rounded-4 bg-light border-start border-primary border-4">
                            <p class="mb-1 text-muted small text-uppercase fw-bold">Телефон та Viber:</p>
                            <a href="tel:+380632140037" class="fs-3 fw-bold text-decoration-none text-primary d-block mb-1">
                                +38 (063) 214-00-37
                            </a>
                            <span class="badge bg-primary shadow-sm px-3 py-2 rounded-pill">Viber / Telegram</span>
                        </div>

                        <div class="mb-4 p-3 rounded-4 bg-light border-start border-warning border-4">
                            <p class="mb-1 text-muted small text-uppercase fw-bold">Додатковий номер:</p>
                            <a href="tel:+380973725849" class="fs-4 fw-bold text-decoration-none text-dark d-block">
                                +38 (097) 372-58-49
                            </a>
                        </div>

                        <div class="p-3 bg-light rounded-4 fst-italic shadow-sm">
                            <p class="text-muted small mb-0">
                                🐾 Телефонуйте, автор Тетяна Борисова радо відповість на всі питання щодо методики та змісту книги.
                            </p>
                        </div>
                    </aside>

                    <section class="col-md-6">
                        <h2 class="h4 mb-3 fw-bold text-primary">Швидке замовлення</h2>
                        <p class="text-secondary mb-4">Заповніть форму, і ми зв'яжемося з вами протягом години:</p>

                        <div class="order-form bg-white p-4 rounded-5 shadow-lg border border-light">
                            <?php $form = ActiveForm::begin([
                                'id' => 'order-phone-form',
                                'enableClientValidation' => true,
                                'options' => ['autocomplete' => 'on']
                            ]); ?>

                            <?= $form->field($model, 'name')->textInput([
                                'placeholder' => 'Як вас звати?',
                                'class' => 'form-control form-control-lg rounded-pill px-4',
                            ])->label(null, ['class' => 'fw-bold mb-2 ms-3']) ?>

                            <?= $form->field($model, 'phone')->textInput([
                                'placeholder' => '+380...',
                                'type' => 'tel',
                                'class' => 'form-control form-control-lg rounded-pill px-4',
                            ])->label(null, ['class' => 'fw-bold mb-2 ms-3']) ?>

                            <?= $form->field($model, 'comment')->textarea([
                                'placeholder' => 'Місто та номер Нової Пошти...',
                                'rows' => 3,
                                'class' => 'form-control rounded-4 px-4 py-3'
                            ])->label(null, ['class' => 'fw-bold mb-2 ms-3']) ?>

                            <div class="form-group mt-4">
                                <?= Html::submitButton('Чекаю на дзвінок 🐾', [
                                    'class' => 'btn btn-primary btn-lg w-100 shadow rounded-pill fw-bold py-3 text-uppercase',
                                    'style' => 'letter-spacing: 1px;'
                                ]) ?>
                            </div>

                            <?php ActiveForm::end(); ?>
                        </div>
                    </section>
                </div>

                <footer class="mt-5 pt-5 border-top border-primary border-2 opacity-50">
                    <p class="text-secondary fst-italic fs-5">"Кожна книга — це частинка тепла та крок до успішного майбутнього вашої дитини."</p>
                </footer>
            </div>
        </div>
    </div>
</main>