<?php

/** @var yii\web\View $this */
/** @var string $name */
/** @var string $message */
/** @var Exception $exception */

use yii\helpers\Html;

$this->title = $name;
?>
<main class="site-error container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <div class="display-1 mb-4">🐾</div>

            <h1 class="fw-bold text-dark mb-4"><?= Html::encode($this->title) ?></h1>

            <div class="alert shadow-sm border-0 p-4 mb-4" style="background-color: #f8d7da; border-left: 5px solid #b02a37 !important;">
                <p class="fs-5 mb-0" style="color: #842029;">
                    <strong>Ой! Помилка:</strong> <?= nl2br(Html::encode($message)) ?>
                </p>
            </div>

            <div class="text-muted fs-5 mb-5">
                <p>Здається, песик Ріко забіг не туди. Вищевказана помилка виникла під час обробки вашого запиту.</p>
                <p>Не хвилюйтеся, ви можете повернутися до вивчення наших книг або зв'язатися з нами.</p>
            </div>

            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                <?= Html::a('Повернутися на головну', ['/site/index'], [
                    'class' => 'btn btn-primary btn-lg px-4 shadow rounded-pill fw-bold'
                ]) ?>
                <?= Html::a('Написати нам', ['/site/contact'], [
                    'class' => 'btn btn-outline-secondary btn-lg px-4 rounded-pill'
                ]) ?>
            </div>

            <p class="mt-5 text-muted small">
                Якщо ви вважаєте, що це помилка сервера, будь ласка, повідомте нам. Дякуємо за розуміння!
            </p>
        </div>
    </div>
</main>