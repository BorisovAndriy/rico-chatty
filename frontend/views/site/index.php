<?php

/** @var yii\web\View $this */
/** @var yii\widgets\ActiveForm $form */
/** @var common\models\Order $model */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use himiklab\yii2\recaptcha\ReCaptcha2;

$this->title = 'Замовити книгу — Ріко-Розмовляйко';

// МІКРОРОЗМІТКА ДЛЯ МАГАЗИНУ (Product)
$shopSchema = [
    "@context" => "https://schema.org",
    "@type" => "Product",
    "name" => "Зимові пригоди Ріко-Розмовляйко",
    "image" => Url::to('@web/images/book/page-1.jpg', true),
    "description" => "Інтерактивна книга для розвитку мовлення від логопеда Тетяни Борисової.",
    "brand" => [
        "@type" => "Brand",
        "name" => "Ріко-Розмовляйко"
    ],
    "offers" => [
        "@type" => "Offer",
        "url" => Url::current([], true),
        "priceCurrency" => "UAH",
        "price" => "600",
        "availability" => "https://schema.org/InStock",
        "itemCondition" => "https://schema.org/NewCondition"
    ]
];

$this->registerCss("
    .site-shop { padding-top: 0 !important; background-color: #fcfcfd; }
    
    .contact-nav-capsule {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 50px;
        padding: 8px 20px;
        display: inline-flex;
        gap: 25px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.03);
    }
    .contact-nav-capsule a { color: #475569; text-decoration: none; font-weight: 600; font-size: 0.9rem; transition: 0.2s; }

    .shop-card-clean {
        background: #ffffff;
        border-radius: 40px;
        padding: 40px;
        box-shadow: 0 20px 50px rgba(0,0,0,0.04);
    }
    .price-display { font-size: 4rem; font-weight: 900; color: #1e40af; letter-spacing: -2px; }
    .input-round {
        background: #f8fafc !important;
        border: 1px solid #e2e8f0 !important;
        border-radius: 50px !important;
        padding: 15px 25px !important;
        font-size: 1rem !important;
        margin-bottom: 5px !important;
    }
    .btn-order-main {
        background: #2563eb;
        color: white;
        border-radius: 50px;
        padding: 18px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        border: none;
        transition: 0.3s;
        cursor: pointer;
    }

    .benefit-card {
        background: #fff;
        border-radius: 20px;
        padding: 25px;
        height: 100%;
        transition: 0.3s ease;
        border: 1px solid #e2e8f0;
        border-top-width: 6px !important;
        box-shadow: 0 5px 15px rgba(0,0,0,0.03);
        display: flex;
        flex-direction: column;
    }
    .benefit-card:hover { transform: translateY(-7px); box-shadow: 0 15px 30px rgba(0,0,0,0.08); }
    .benefit-header { display: flex; align-items: center; margin-bottom: 15px; gap: 15px; }
    .benefit-icon { font-size: 2rem; }
    .benefit-card h3 { font-size: 1.2rem; font-weight: 700; margin: 0; }
    .benefit-card p { color: #64748b; font-size: 0.95rem; line-height: 1.5; margin: 0; }

    .border-primary { border-top-color: #3b82f6 !important; }
    .border-primary h3 { color: #3b82f6; }
    .border-success { border-top-color: #10b981 !important; }
    .border-success h3 { color: #10b981; }
    .border-danger { border-top-color: #ef4444 !important; }
    .border-danger h3 { color: #ef4444; }
    .border-warning { border-top-color: #f59e0b !important; }
    .border-warning h3 { color: #f59e0b; }
    .border-info { border-top-color: #0dcaf0 !important; }
    .border-info h3 { color: #0dcaf0; }
    .border-dark { border-top-color: #1e293b !important; }
    .border-dark h3 { color: #1e293b; }
");
?>

<script type="application/ld+json">
<?= json_encode($shopSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?>
</script>

<main class="site-shop pb-5">
    <div class="container pt-4">
        <div class="text-center mb-5">
            <div class="contact-nav-capsule">
                <a href="tel:+380632140037">📞 063 214 00 37</a>
                <a href="tel:+380973725849">📱 097 372 58 49</a>
            </div>
        </div>

        <div class="row g-5 align-items-center">
            <div class="col-lg-5 text-center">
                <?= Html::img('@web/images/book/page-1.jpg', ['class' => 'img-fluid rounded-4 shadow-lg']) ?>
            </div>

            <div class="col-lg-6">
                <div class="shop-card-clean border-top border-5 border-primary">
                    <h2 class="fw-bold text-dark mb-1">Видання від автора</h2>
                    <div class="price-display mb-4">600 <small class="fs-4 text-muted">грн</small></div>

                    <div class="order-box">
                        <p class="fw-bold mb-3 text-secondary">Швидка заявка</p>
                        <?php $form = ActiveForm::begin(['id' => 'order-phone-form']); ?>
                        <?= $form->field($model, 'name')->textInput(['placeholder' => "Ваше ім'я", 'class' => 'form-control input-round'])->label(false) ?>
                        <?= $form->field($model, 'phone')->textInput(['class' => 'form-control input-round', 'placeholder' => 'Ваш номер телефону'])->label(false) ?>
                        <?= $form->field($model, 'comment')->textarea(['placeholder' => 'Адреса (Місто, № Нової пошти)', 'rows' => 2, 'class' => 'form-control input-round', 'style' => 'border-radius: 20px !important; resize: none;'])->label(false) ?>
                        <div class="captcha-container text-center my-3">
                            <?= $form->field($model, 'reCaptcha')->widget(ReCaptcha2::class)->label(false) ?>
                        </div>
                        <?= Html::submitButton('Замовити книгу 🐾', ['class' => 'btn btn-order-main w-100 shadow-sm']) ?>
                        <?php ActiveForm::end(); ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4 mt-5">
            <?php
            $benefits = [
                ['🚚', 'Швидка доставка', 'Відправка в день замовлення Новою Поштою.', 'border-primary'],
                ['📚', 'Тверда обкладинка', 'Якісний перепліт гарантує довговічність.', 'border-success'],
                ['✨', 'Преміальний папір', 'Щільні сторінки, які приємно гортати малюкам.', 'border-danger'],
                ['🎁', 'Подарунковий вигляд', 'Готовий і корисний подарунок до будь-якого свята.', 'border-warning'],
                ['👩‍🏫', 'Авторський контроль', 'Купівля напряму в автора гарантує оригінальність.', 'border-info'],
                ['📦', 'Надійне пакування', 'Дбайливо загортаємо кожну книгу.', 'border-dark'],
                ['✅', 'Перевірена якість', 'Відповідає логопедичним нормам.', 'border-danger'],
                ['💬', 'Прямий діалог', 'Консультація автора щодо методики.', 'border-success'],
                ['🎨', 'Унікальний дизайн', 'Ексклюзивні ілюстрації для розвитку мовлення.', 'border-primary']
            ];

            foreach ($benefits as $b): ?>
                <div class="col-lg-4 col-md-6">
                    <article class="benefit-card <?= $b[3] ?> shadow-sm">
                        <div class="benefit-header">
                            <div class="benefit-icon"><?= $b[0] ?></div>
                            <h3><?= $b[1] ?></h3>
                        </div>
                        <p><?= $b[2] ?></p>
                    </article>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>