<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\ContactForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Зв’язок та замовлення';
?>
<div class="site-contact container py-5">
    <h1 class="display-5 fw-bold mb-4 text-primary"><?= Html::encode($this->title) ?></h1>

    <div class="row g-5">
        <div class="col-lg-5 order-lg-2">
            <div class="p-4 rounded-4 shadow-sm border bg-light h-100">
                <h3 class="h4 mb-4 fw-bold">Наші контакти</h3>

                <div class="mb-4">
                    <p class="text-muted mb-1 small text-uppercase fw-bold">Телефон для замовлень:</p>
                    <a href="tel:+380973725849" class="fs-4 fw-bold text-dark text-decoration-none">
                        +38 (097) 372-58-49
                    </a>
                </div>

                <div class="mb-4">
                    <p class="text-muted mb-1 small text-uppercase fw-bold">Телефон + Viber:</p>
                    <a href="tel:+380632140037" class="fs-4 fw-bold text-dark text-decoration-none d-block">
                        +38 (063) 214-00-37
                    </a>
                    <span class="badge bg-info text-white">Viber</span>
                </div>



                <div class="mb-4 pt-3 border-top">
                    <p class="text-muted mb-1 small text-uppercase fw-bold">Графік роботи:</p>
                    <p class="fs-5">Пн-Пт: 09:00 — 18:00</p>
                </div>

                <div class="p-3 bg-white rounded-3 border-start border-warning border-4 shadow-sm mt-auto">
                    <p class="small mb-0 text-muted">
                        <strong>💡 Порада:</strong> Якщо ви замовляєте книгу в подарунок, вкажіть це в коментарі — ми додамо авторську листівку від Тетяни Борисової!
                    </p>
                </div>
            </div>
        </div>

        <div class="col-lg-7 order-lg-1">
            <div class="pe-lg-4">
                <p class="fs-5 text-muted mb-4">
                    Залиште ваші дані, і ми зателефонуємо вам для уточнення деталей доставки книги.
                </p>

                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                <div class="row">
                    <div class="col-md-6">
                        <?= $form->field($model, 'name')->textInput([
                            'autofocus' => true,
                            'placeholder' => 'Ваше ім’я',
                            'class' => 'form-control form-control-lg rounded-3'
                        ])->label('Як до вас звертатися?') ?>
                    </div>
                    <div class="col-md-6">
                        <?= $form->field($model, 'email')->textInput([
                            'placeholder' => '+380...',
                            'class' => 'form-control form-control-lg rounded-3'
                        ])->label('Номер телефону') ?>
                    </div>
                </div>

                <?= $form->field($model, 'body')->textarea([
                    'rows' => 4,
                    'placeholder' => 'Наприклад: Кількість книг, адреса доставки (Нова Пошта) або ваші запитання...',
                    'class' => 'form-control form-control-lg rounded-3'
                ])->label('Коментар до замовлення') ?>

                <div class="form-group mt-4 text-center text-md-start">
                    <?= Html::submitButton('Відправити заявку Ріко 🐾', [
                        'class' => 'btn btn-primary btn-lg px-5 py-3 shadow rounded-pill fw-bold',
                        'name' => 'contact-button'
                    ]) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>