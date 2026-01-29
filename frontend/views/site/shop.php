<?php

/** @var yii\web\View $this */
/** @var yii\widgets\ActiveForm $form */
/** @var common\models\Order $model */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Замовити книгу — Ріко-Розмовляйко';
?>
<div class="site-shop">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h1 class="display-4 fw-bold mb-4">🛍️ Замовити книгу <br> "Ріко-Розмовляйко"</h1>

                <div class="alert alert-warning border-0 shadow-sm py-4 mb-5 rounded-4">
                    <h2 class="h4 fw-bold text-dark">⚠️ Увага! Обмежений тираж</h2>
                    <p class="mb-0 fs-5 text-dark">Перша партія книги майже розпродана. Поспішайте зарезервувати свій примірник!</p>
                </div>

                <div class="row mb-5 text-start">
                    <div class="col-md-6 border-end">
                        <h3 class="h2 text-primary fw-bold">600 грн</h3>
                        <p class="text-muted">Ціна за одне подарункове видання</p>
                        <hr>

                        <h5 class="fw-bold mb-3">📞 Прямий зв'язок:</h5>

                        <div class="mb-4">
                            <p class="mb-1 text-muted small">Телефон та  <span class="badge bg-info shadow-sm">Viber</span>:</p>
                            <a href="tel:+380632140037" class="fs-4 fw-bold text-decoration-none text-dark d-block mb-1">+38 (063) 214-00-37</a>
                        </div>

                        <div class="mb-3">
                            <p class="mb-1 text-muted small">Телефон для замовлень:</p>
                            <a href="tel:+380973725849" class="fs-4 fw-bold text-decoration-none text-dark">+38 (097) 372-58-49</a>
                        </div>

                        <p class="text-muted small mt-4">Телефонуйте, ми радо відповімо на всі питання щодо доставки та змісту книги.</p>
                    </div>

                    <div class="col-md-6 ps-md-4 mt-4 mt-md-0">
                        <h3 class="h4 mb-4">Швидке замовлення</h3>
                        <p class="text-muted small">Залиште ваші дані, і ми перетелефонуємо для уточнення адреси доставки:</p>

                        <div class="order-form bg-light p-4 rounded-4 shadow-sm border">
                            <?php $form = ActiveForm::begin([
                                'id' => 'order-phone-form',
                                'enableClientValidation' => true,
                                'options' => ['autocomplete' => 'on']
                            ]); ?>

                            <?= $form->field($model, 'name')->textInput([
                                'placeholder' => 'Олена',
                                'class' => 'form-control form-control-lg rounded-3'
                            ])->label('Ваше ім\'я', ['class' => 'form-label small fw-bold']) ?>

                            <?= $form->field($model, 'phone')->textInput([
                                'placeholder' => '+380...',
                                'type' => 'tel',
                                'class' => 'form-control form-control-lg rounded-3'
                            ])->label('Ваш номер телефону', ['class' => 'form-label small fw-bold']) ?>

                            <?= $form->field($model, 'comment')->textarea([
                                'placeholder' => 'Адреса доставки або побажання...',
                                'rows' => 2,
                                'class' => 'form-control rounded-3'
                            ])->label('Коментар (необов\'язково)', ['class' => 'form-label small fw-bold']) ?>

                            <div class="form-group mt-3">
                                <?= Html::submitButton('Чекаю на дзвінок 🐾', [
                                    'class' => 'btn btn-primary btn-lg w-100 shadow rounded-pill fw-bold', // Змінено з btn-success на btn-primary
                                    'name' => 'order-button'
                                ]) ?>
                            </div>

                            <?php ActiveForm::end(); ?>
                        </div>
                    </div>
                </div>

                <div class="mt-4 pt-4 border-top">
                    <p class="text-muted italic">"Кожна книга — це частинка тепла та крок до успішного майбутнього вашої дитини."</p>
                </div>
            </div>
        </div>
    </div>
</div>