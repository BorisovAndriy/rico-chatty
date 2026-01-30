<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \common\models\Order $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;
use yii\helpers\Url;

$this->title = 'Зв’язок та замовлення | Ріко-Розмовляйко';

// Підготовка даних для ContactPage та Organization
$contactSchema = [
    "@context" => "https://schema.org",
    "@type" => "ContactPage",
    "mainEntity" => [
        "@type" => "Organization",
        "name" => "Ріко-Розмовляйко",
        "url" => Url::to(['site/index'], true),
        "logo" => Url::to('@web/favicon.ico', true),
        "contactPoint" => [
            [
                "@type" => "ContactPoint",
                "telephone" => "+380973725849",
                "contactType" => "sales",
                "availableLanguage" => ["Ukrainian", "Russian"]
            ],
            [
                "@type" => "ContactPoint",
                "telephone" => "+380632140037",
                "contactType" => "customer service",
                "availableLanguage" => ["Ukrainian", "Russian"]
            ]
        ]
    ]
];

// Дані для LocalBusiness (графік роботи)
$businessSchema = [
    "@context" => "https://schema.org",
    "@type" => "LocalBusiness",
    "name" => "Ріко-Розмовляйко",
    "telephone" => "+380632140037",
    "openingHours" => "Mo-Fr 09:00-18:00",
    "image" => Url::to('@web/favicon.ico', true),
    "priceRange" => "600 UAH"
];
?>

<script type="application/ld+json">
<?= json_encode($contactSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?>
</script>

<script type="application/ld+json">
<?= json_encode($businessSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?>
</script>

<main class="site-contact container py-5">
    <h1 class="display-5 fw-bold mb-4 text-primary" style="font-size: calc(1.5rem + 2.5vw);"><?= Html::encode($this->title) ?></h1>

    <div class="row g-5">
        <div class="col-lg-5 order-lg-2">
            <section class="p-4 rounded-4 shadow-sm border bg-light h-100">
                <h2 class="h4 mb-4 fw-bold text-dark">Наші контакти</h2>

                <div class="mb-4">
                    <p class="text-secondary mb-1 small text-uppercase fw-bold">Телефон для замовлень:</p>
                    <a href="tel:+380973725849" class="fs-4 fw-bold text-dark text-decoration-none hover-link">
                        +38 (097) 372-58-49
                    </a>
                </div>

                <div class="mb-4">
                    <p class="text-secondary mb-1 small text-uppercase fw-bold">Телефон + Viber:</p>
                    <a href="tel:+380632140037" class="fs-4 fw-bold text-dark text-decoration-none d-block">
                        +38 (063) 214-00-37
                    </a>
                    <span class="badge" style="background-color: #087990; color: #ffffff;">Viber</span>
                </div>

                <div class="mb-4 pt-3 border-top">
                    <p class="text-secondary mb-1 small text-uppercase fw-bold">Графік роботи:</p>
                    <p class="fs-5 text-dark">Пн-Пт: 09:00 — 18:00</p>
                </div>

                <div class="p-3 bg-white rounded-3 border-start border-warning border-4 shadow-sm mt-auto">
                    <p class="small mb-0 text-muted">
                        <strong style="color: #856404;">💡 Порада:</strong> Якщо ви замовляєте книгу в подарунок, вкажіть це в коментарі — ми додамо авторську листівку з привітанням для дитини!
                    </p>
                </div>
            </section>
        </div>

        <div class="col-lg-7 order-lg-1">
            <div class="pe-lg-4">
                <p class="fs-5 text-muted mb-4">
                    Залиште ваші дані, і ми зателефонуємо вам для уточнення деталей доставки книги.
                </p>

                <?php $form = ActiveForm::begin([
                    'id' => 'contact-form',
                    'options' => ['aria-label' => 'Форма замовлення']
                ]); ?>

                <div class="row">
                    <div class="col-md-6">
                        <?= $form->field($model, 'name')->textInput([
                            'autofocus' => true,
                            'placeholder' => 'Ваше ім’я',
                            'class' => 'form-control form-control-lg rounded-3',
                            'aria-required' => 'true'
                        ])->label('Як до вас звертатися?', ['class' => 'fw-bold text-dark']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $form->field($model, 'phone')->textInput([
                            'placeholder' => '+380...',
                            'class' => 'form-control form-control-lg rounded-3',
                            'type' => 'tel',
                            'aria-required' => 'true'
                        ])->label('Номер телефону', ['class' => 'fw-bold text-dark']) ?>
                    </div>
                </div>

                <?= $form->field($model, 'comment')->textarea([
                    'rows' => 4,
                    'placeholder' => 'Наприклад: Кількість книг, адреса доставки (Нова Пошта) або ваші запитання...',
                    'class' => 'form-control form-control-lg rounded-3'
                ])->label('Коментар до замовлення', ['class' => 'fw-bold text-dark']) ?>

                <div class="form-group mt-4 text-center text-md-start">
                    <?= Html::submitButton('Відправити заявку Ріко 🐾', [
                        'class' => 'btn btn-primary btn-lg px-5 py-3 shadow rounded-pill fw-bold',
                        'name' => 'contact-button',
                        'style' => 'min-width: 250px;'
                    ]) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</main>