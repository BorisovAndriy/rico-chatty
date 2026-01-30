<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \common\models\LoginForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Вхід до панелі керування';
?>
<main class="site-login container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-5 col-md-8">
            <div class="card shadow-sm border-0 rounded-4 p-4">
                <div class="card-body">
                    <h1 class="h3 fw-bold mb-4 text-center text-primary"><?= Html::encode($this->title) ?></h1>

                    <p class="text-muted text-center mb-4">Будь ласка, введіть ваші дані для входу:</p>

                    <?php $form = ActiveForm::begin([
                        'id' => 'login-form',
                        'options' => ['aria-label' => 'Форма авторизації']
                    ]); ?>

                    <?= $form->field($model, 'username')->textInput([
                        'autofocus' => true,
                        'class' => 'form-control form-control-lg rounded-3',
                        'placeholder' => 'Логін'
                    ])->label('Ім’я користувача', ['class' => 'fw-bold']) ?>

                    <?= $form->field($model, 'password')->passwordInput([
                        'class' => 'form-control form-control-lg rounded-3',
                        'placeholder' => '••••••••'
                    ])->label('Пароль', ['class' => 'fw-bold']) ?>

                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <?= $form->field($model, 'rememberMe')->checkbox([
                            'class' => 'form-check-input',
                            'uncheck' => null // Для коректної верстки Bootstrap 5
                        ])->label('Запам’ятати мене', ['class' => 'form-check-label small text-secondary']) ?>
                    </div>

                    <div class="form-group d-grid mb-4">
                        <?= Html::submitButton('Увійти 🐾', [
                            'class' => 'btn btn-primary btn-lg shadow rounded-pill fw-bold',
                            'name' => 'login-button'
                        ]) ?>
                    </div>

                    <div class="text-center pt-3 border-top mt-3">
                        <p class="small text-muted mb-2">
                            Забули пароль? <?= Html::a('Скинути його', ['site/request-password-reset'], ['class' => 'text-decoration-none fw-bold']) ?>
                        </p>
                        <p class="small text-muted mb-0">
                            Потрібне підтвердження? <?= Html::a('Надіслати знову', ['site/resend-verification-email'], ['class' => 'text-decoration-none fw-bold']) ?>
                        </p>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>

            <div class="text-center mt-4">
                <?= Html::a('← Повернутися на сайт', ['site/index'], ['class' => 'text-secondary text-decoration-none small']) ?>
            </div>
        </div>
    </div>
</main>