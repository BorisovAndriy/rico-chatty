<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\PasswordResetRequestForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Відновлення доступу';
?>
<main class="site-request-password-reset container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
            <div class="card shadow-sm border-0 rounded-4 p-4">
                <div class="card-body text-center text-md-start">
                    <h1 class="h3 fw-bold mb-3 text-primary text-center"><?= Html::encode($this->title) ?></h1>

                    <p class="text-secondary mb-4 text-center">
                        Будь ласка, вкажіть вашу електронну пошту. Ми надішлемо туди посилання для скидання пароля.
                    </p>

                    <?php $form = ActiveForm::begin([
                        'id' => 'request-password-reset-form',
                        'options' => ['aria-label' => 'Форма запиту на відновлення пароля']
                    ]); ?>

                    <?= $form->field($model, 'email')->textInput([
                        'autofocus' => true,
                        'placeholder' => 'example@mail.com',
                        'class' => 'form-control form-control-lg rounded-3',
                        'type' => 'email',
                        'aria-required' => 'true'
                    ])->label('Ваша e-mail адреса', ['class' => 'fw-bold text-dark']) ?>

                    <div class="form-group d-grid mt-4">
                        <?= Html::submitButton('Надіслати посилання 🐾', [
                            'class' => 'btn btn-primary btn-lg shadow rounded-pill fw-bold'
                        ]) ?>
                    </div>

                    <?php ActiveForm::end(); ?>

                    <div class="text-center mt-4 pt-3 border-top">
                        <?= Html::a('Згадали пароль? Увійти', ['site/login'], ['class' => 'text-decoration-none small fw-bold']) ?>
                    </div>
                </div>
            </div>

            <div class="text-center mt-4">
                <?= Html::a('← Повернутися на сайт', ['site/index'], ['class' => 'text-secondary text-decoration-none small']) ?>
            </div>
        </div>
    </div>
</main>