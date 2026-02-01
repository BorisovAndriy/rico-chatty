<?php
/** @var yii\web\View $this */
/** @var yii\widgets\ActiveForm $form */
/** @var common\models\Order $model */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;
use himiklab\yii2\recaptcha\ReCaptcha2;

$this->title = 'Купити логопедичну книгу Ріко-Розмовляйко | Замовити онлайн';

// SEO & Social Tags
$this->registerMetaTag(['name' => 'description', 'content' => 'Замовляйте інтерактивну логопедичну книгу "Зимові пригоди Ріко-Розмовляйко". Авторська методика Тетяни Борисової. Ціна: 600 грн.']);
$this->registerMetaTag(['property' => 'og:title', 'content' => $this->title]);
$this->registerMetaTag(['property' => 'og:description', 'content' => 'Інтерактивна логопедична казка для дітей 3-6 років. Доставка по Україні.']);
$this->registerMetaTag(['property' => 'og:image', 'content' => Url::to('@web/images/book/page-1.jpg', true)]);
$this->registerMetaTag(['property' => 'og:type', 'content' => 'product']);

// МІКРОРОЗМІТКА (SCHEMA.ORG)
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
    "description" => "Інтерактивна книга для розвитку мовлення. Унікальна методика від логопеда Тетяни Борисової.",
    "genre" => "Дитяча література, Логопедія",
    "offers" => [
        "@type" => "Offer",
        "price" => "600",
        "priceCurrency" => "UAH",
        "availability" => "https://schema.org/InStock",
        "url" => Url::current([], true)
    ]
];
?>

<script type="application/ld+json">
<?= json_encode($bookSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?>
</script>

<main class="site-shop pb-5">
    <div class="container pt-4">

        <?php if (Yii::$app->session->hasFlash('success')): ?>
            <?php Yii::$app->session->removeFlash('success'); ?>
            <div class="row justify-content-center mb-5 mt-4">
                <div class="col-lg-8 text-center">
                    <div class="success-message-card">
                        <div class="display-1 mb-4">🐾</div>
                        <h2 class="fw-bold text-success mb-3">Дякуємо! Ваше замовлення прийнято!</h2>
                        <p class="lead text-dark mb-4">Наш менеджер вже зв'яжеться з вами незабаром.</p>
                        <div class="alert alert-success rounded-pill d-inline-block px-5">Ріко вже готує вашу книжку! ✨</div>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <div class="row g-5 align-items-center mb-5">
                <div class="col-lg-4 text-center">
                    <?= Html::img('@web/images/book/page-1.jpg', [
                        'class' => 'img-fluid rounded-4 shadow-lg',
                        'alt' => 'Обкладинка книги Ріко-Розмовляйко'
                    ]) ?>
                </div>
                <div class="col-lg-8">
                    <div class="shop-card-clean border-top border-5 border-primary p-4 bg-white rounded-5 shadow-sm">
                        <h2 class="fw-bold text-dark">Замовити книгу
                            <div class="display-4 fw-bold text-primary mb-4 float-md-end">600 <small class="fs-4 text-muted">грн</small></div>
                        </h2>

                        <div style="clear: both;"></div>

                        <?php $form = ActiveForm::begin(['id' => 'order-phone-form']); ?>

                        <?= $form->field($model, 'name')->textInput(['placeholder' => "Як до Вас звертатись?", 'class' => 'form-control rounded-pill'])->label(false) ?>

                        <?= $form->field($model, 'phone')->widget(MaskedInput::class, [
                            'mask' => '+38 (099) 999-99-99',
                            'options' => [
                                'class' => 'form-control rounded-pill',
                                'placeholder' => '+38 (0__) ___-__-__',
                            ],
                            'clientOptions' => [
                                'clearIncomplete' => true,
                            ]
                        ])->label(false) ?>

                        <?= $form->field($model, 'comment')->textarea(['placeholder' => 'Коментарій, побажання, № НП або поштомата', 'class' => 'form-control rounded-4'])->label(false) ?>

                        <div class="text-center d-flex justify-content-center">
                            <?= $form->field($model, 'reCaptcha', ['options' => ['class' => 'field-order-recaptcha m-0']])->widget(ReCaptcha2::class)->label(false) ?>
                        </div>

                        <?= Html::submitButton('Замовити книгу 🐾', ['class' => 'btn btn-primary btn-lg w-100 rounded-pill btn-order-animated mt-3']) ?>

                        <?php ActiveForm::end(); ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <div class="row g-4">
            <?php
            $benefits = [
                ['🚚', 'Швидка доставка', 'Відправка в день замовлення Новою Поштою.', 'border-primary'],
                ['📚', 'Тверда обкладинка', 'Якісний перепліт гарантує довговічність.', 'border-success'],
                ['✨', 'Преміальний папір', 'Щільні сторінки, які приємно гортати малюкам.', 'border-danger'],
                ['🎁', 'Подарунковий вигляд', 'Готовий і корисний подарунок до будь-якого святa.', 'border-warning'],
                ['👩‍🏫', 'Авторський контроль', 'Купівля напряму в автора гарантує оригінальність.', 'border-info'],
                ['📦', 'Надійне пакування', 'Дбайливо загортаємо кожну книгу.', 'border-dark'],
                ['✅', 'Перевірена якість', 'Відповідає логопедичним нормам.', 'border-danger'],
                ['💬', 'Прямий діалог', 'Консультація автора щодо методики.', 'border-success'],
                ['🎨', 'Унікальний дизайн', 'Ексклюзивні ілюстрації для розвитку мовлення.', 'border-primary']
            ];

            foreach ($benefits as $b): ?>
                <div class="col-lg-4 col-md-6">
                    <article class="benefit-card <?= $b[3] ?>">
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