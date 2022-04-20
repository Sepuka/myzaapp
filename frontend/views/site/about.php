<?php

use frontend\Widget\Social;
use rmrevin\yii\fontawesome\FAB;
use yii\bootstrap5\Nav;

/** @var array $social */
?>

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="mb-auto">
        <div>
            <h3 class="float-md-start mb-0">Duntek</h3>
            <nav class="nav nav-masthead justify-content-center float-md-end">
                <a class="nav-link" href="/site/login">Логин</a>
                <a class="nav-link" href="/">Профиль</a>
                <a class="nav-link disabled" href="#" aria-disabled="true">Журнал</a>
                <a class="nav-link disabled" href="#" aria-disabled="true">Выплаты</a>
                <a class="nav-link activetab" href="/site/about" aria-current="page">О проекте</a>
            </nav>
        </div>
    </header>
    <main class="px-3">
        <h1>Криптотепло</h1>
        <p class="lead">Уникальное решение в сфере загородной жизни</p>
        <p class="lead">Криптокотёл Duntek самоокупает свою стоимость в течение 2-х лет, дальше, вы получаете прямую
            прибыль!</p>
        <a href="https://youtu.be/NvmEtBVSlxA"
           class="btn btn-lg btn-secondary fw-bold border-white bg-white"><?= Fab::icon('youtube') ?>&nbsp;Узнать
            больше</a>
    </main>
    <footer class="mt-auto text-white-50 d-flex justify-content-center">
      <?= Social::widget(['social' => $social,]) ?>
    </footer>
</div>