<?php

/** @var yii\web\View $this */

use yii\helpers\Url;

$this->title = 'Ріко-Розмовляйко — Текст казки';
?>

<div class="site-read py-5" style="background-color: #ffffff; color: #1a1a1a; min-height: 100vh; font-family: 'Georgia', serif;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-9">


                <header class="text-center mb-5">
                    <h1 class="display-4 fw-bold mb-4" style="color: #000;">Ріко-Розмовляйко</h1>
                    <p class="text-muted italic" style="font-size: 1.1rem;">Зимова історія для розвитку мовлення</p>
                </header>

                <article class="poem-body mx-auto" style="max-width: 500px; font-size: 1.6rem; line-height: 2; color: #222;">
                    <div class="mb-5">
                        <p class="mb-2">Ріко-Розмовляйко з нами зимоньку вітає,</p>
                        <p class="mb-2">Він спілкуватись любить, в очі заглядає,</p>
                        <p class="mb-2">Хоче все побачити, хоче все почути —</p>
                        <p class="mb-2">Ріко-Розмовляйко розумним хоче бути.</p>
                    </div>

                    <div class="ps-4 border-start border-dark border-3">
                        <p class="mb-2">І ти, дитинонько, часу даремно не гай,</p>
                        <p class="mb-0 fw-bold">Слухай, думай, пізнавай і розмовляй!</p>
                    </div>
                </article>

                <div class="mt-5 pt-5">
                    <div class="p-4 bg-light rounded-0 border-start border-dark border-1">
                        <h5 class="small text-uppercase fw-bold mb-3" style="letter-spacing: 1px; font-family: sans-serif;">Методичний коментар</h5>
                        <p class="mb-0 text-muted" style="font-size: 1rem; line-height: 1.6; font-family: sans-serif;">
                            Цей текст спрямований на емоційне залучення дитини. Використовуйте вірш як вступ до занять.
                            Важливо підтримувати зоровий контакт під час читання, як це робить герой твору — песик Ріко.
                        </p>
                    </div>
                </div>

                <div class="mt-5 pt-5 text-center">
                    <p class="mb-4 text-muted small">Бажаєте прочитати повну версію книги про Ріко?</p>
                    <a href="<?= Url::to(['site/shop']) ?>" class="btn btn-dark btn-lg px-5 rounded-0 shadow-none">
                        Замовити примірник
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>