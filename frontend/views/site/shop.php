<?php

/** @var yii\web\View $this */
/** @var yii\widgets\ActiveForm $form */
/** @var common\models\Order $model */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use himiklab\yii2\recaptcha\ReCaptcha2;

$this->title = 'Замовити книгу — Ріко-Розмовляйко';

$this->registerCss("
    .site-shop { padding-top: 0 !important; background-color: #fcfcfd; }
    
    /* Контакти */
    .contact-nav-capsule {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 50px;
        padding: 8px 20px;
        display: inline-flex;
        gap: 25px;
    }

    /* Картки переваг — точна копія з головної */
    .benefit-card {
        background: #fff;
        border-radius: 20px;
        padding: 25px;
        height: 100%;
        transition: 0.3s ease;
        border: 1px solid #e2e8f0; /* Повна тонка рамка */
        border-top-width: 5px !important; /* Товстий верх */
        display: flex;
        flex-direction: column;
        box-shadow: 0 5px 15px rgba(0,0,0,0.03);
    }
    .benefit-card:hover { transform: translateY(-7px); box-shadow: 0 15px 30px rgba(0,0,0,0.08); }
    .benefit-header { display: flex; align-items: center; margin-bottom: 15px; gap: 15px; }
    .benefit-icon { font-size: 2rem; }
    .benefit-card h3 { font-size: 1.2rem; font-weight: 700; margin: 0; }
    .benefit-card p { color: #64748b; font-size: 0.95rem; line-height: 1.5; margin: 0; }

    /* Кольорові схеми для тексту та верхньої рамки */
    .border-primary { border-top-color: #0d6efd !important; }
    .border-primary h3 { color: #0d6efd; }

    .border-success { border-top-color: #198754 !important; }
    .border-success h3 { color: #198754; }

    .border-danger { border-top-color: #dc3545 !important; }
    .border-danger h3 { color: #dc3545; }

    .border-warning { border-top-color: #ffc107 !important; }
    .border-warning h3 { color: #ffc107; }

    .border-info { border-top-color: #0dcaf0 !important; }
    .border-info h3 { color: #0dcaf0; }

    .border-dark { border-top-color: #212529 !important; }
    .border-dark h3 { color: #212529; }

    .border-secondary { border-top-color: #6c757d !important; }
    .border-secondary h3 { color: #6c757d; }
");
?>

<main class="site-shop pb-5">
    <div class="container pt-4">
        <div class="row g-5 align-items-center mb-5">
            <div class="col-lg-5 text-center">
                <?= Html::img('@web/images/book/page-1.jpg', ['class' => 'img-fluid rounded-4 shadow-lg']) ?>
            </div>
            <div class="col-lg-6">
                <div class="shop-card-clean border-top border-5 border-primary p-4 bg-white rounded-5 shadow-sm">
                    <h2 class="fw-bold text-dark">Видання від автора</h2>
                    <div class="display-4 fw-bold text-primary mb-4">600 <small class="fs-4 text-muted">грн</small></div>
                    <?php $form = ActiveForm::begin(['id' => 'order-phone-form']); ?>
                    <?= $form->field($model, 'name')->textInput(['placeholder' => "Ваше ім'я", 'class' => 'form-control rounded-pill mb-2'])->label(false) ?>
                    <?= $form->field($model, 'phone')->textInput(['placeholder' => 'Ваш номер телефону', 'class' => 'form-control rounded-pill mb-2'])->label(false) ?>
                    <?= $form->field($model, 'comment')->textarea(['placeholder' => 'Адреса (Місто, № НП)', 'class' => 'form-control rounded-4 mb-3'])->label(false) ?>
                    <?= $form->field($model, 'reCaptcha')->widget(ReCaptcha2::class)->label(false) ?>
                    <?= Html::submitButton('Замовити книгу 🐾', ['class' => 'btn btn-primary btn-lg w-100 rounded-pill']) ?>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>

        <div class="row g-4">
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