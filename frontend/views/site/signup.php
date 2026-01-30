<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\SignupForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Реєстрація у проекті';
?>
<main class="site-signup container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-5 col-md-8">
            <div class="card shadow-sm border-0 rounded-4 p-4">
                <div class="card-body">
                    <h1 class="h3 fw-bold mb-3 text-center text-primary"><?= Html::encode($this->title) ?></h1>

                    <p class="text-muted text-center mb-4">Приєднуйтесь до світу Ріко! Заповніть форму нижче:</p>

                    <?php $form = ActiveForm::begin([
                        'id' => 'form-signup',
                        'options' => ['aria-label' => 'Форма реєстрації нового користувача']
                    ]); ?>

                    <?= $form->field($model, 'username')->textInput([
                        'autofocus' => true,
                        'class' => 'form-control form-control-lg rounded-3',
                        'placeholder' => 'Оберіть логін',
                        'autocomplete' => 'username'
                    ])->label('Ім’я користувача', ['class' => 'fw-bold text-dark']) ?>

                    <?= $form->field($model, 'email')->textInput([
                        'type' => 'email',
                        'class' => 'form-control form-control-lg rounded-3',
                        'placeholder' => 'example@mail.com',
                        'autocomplete' => 'email'
                    ])->label('Електронна пошта', ['class' => 'fw-bold text-dark']) ?>

                    <?= $form->field($model, 'password')->passwordInput([
                        'class' => 'form-control form-control-lg rounded-3',
                        'placeholder' => '••••••••',
                        'autocomplete' => 'new-password'
                    ])->label('Пароль', ['class' => 'fw-bold text-dark']) ?>

                    <div class="form-group d-grid mt-4">
                        <?= Html::submitButton('Зареєструватися 🐾', [
                            'class' => 'btn btn-primary btn-lg shadow rounded-pill fw-bold',
                            'name' => 'signup-button'
                        ]) ?>
                    </div>

                    <?php ActiveForm::end(); ?>

                    <div class="text-center mt-4 pt-3 border-top">
                        <p class="small text-muted mb-0">
                            Вже маєте аккаунт? <?= Html::a('Увійти', ['site/login'], ['class' => 'text-decoration-none fw-bold']) ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="text-center mt-4">
                <?= Html::a('← Повернутися на головну', ['site/index'], ['class' => 'text-secondary text-decoration-none small']) ?>
            </div>
        </div>
    </div>
</main>