<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\ResetPasswordForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Встановлення нового пароля';
?>
<main class="site-reset-password container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-5 col-md-8">
            <div class="card shadow-sm border-0 rounded-4 p-4">
                <div class="card-body">
                    <div class="text-center mb-4">
                        <span class="display-4 text-primary">🔐</span>
                    </div>

                    <h1 class="h3 fw-bold mb-3 text-dark text-center"><?= Html::encode($this->title) ?></h1>

                    <p class="text-secondary mb-4 text-center">
                        Будь ласка, придумайте та введіть ваш новий надійний пароль:
                    </p>

                    <?php $form = ActiveForm::begin([
                        'id' => 'reset-password-form',
                        'options' => ['aria-label' => 'Форма встановлення нового пароля']
                    ]); ?>

                    <?= $form->field($model, 'password')->passwordInput([
                        'autofocus' => true,
                        'placeholder' => '••••••••',
                        'class' => 'form-control form-control-lg rounded-3',
                        'aria-required' => 'true'
                    ])->label('Новий пароль', ['class' => 'fw-bold text-dark']) ?>

                    <div class="form-group d-grid mt-4">
                        <?= Html::submitButton('Зберегти новий пароль 🐾', [
                            'class' => 'btn btn-primary btn-lg shadow rounded-pill fw-bold'
                        ]) ?>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>

            <div class="text-center mt-4">
                <?= Html::a('← Повернутися на головну', ['site/index'], ['class' => 'text-secondary text-decoration-none small']) ?>
            </div>
        </div>
    </div>
</main>