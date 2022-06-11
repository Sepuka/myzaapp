<?php

use frontend\widget\Social;
use rmrevin\yii\fontawesome\FAB;

/** @var array $social */
?>

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="mb-auto">
        <div>
            <h3 class="float-md-start mb-0">Duntek</h3>
            <nav class="nav nav-masthead justify-content-center float-md-end">
                <a class="nav-link" href="/site/login">Логин</a>
                <a class="nav-link" href="/">Профиль</a>
                <a class="nav-link disabled" href="#" aria-disabled="true">Выплаты</a>
                <a class="nav-link activetab" href="/site/about" aria-current="page">О проекте</a>
            </nav>
        </div>
    </header>
    <main class="px-3">
        <div id="about_short_title" class="floor-block">
            <h1>Криптообогреватель duntek</h1>
            <p class="lead">Уникальное решение в сфере загородной жизни</p>
            <p class="lead">Криптокотёл Duntek окупает свою стоимость в течение 2-х лет, дальше, вы получаете прямую
                прибыль!</p>
            <a href="https://youtu.be/NvmEtBVSlxA"
               class="btn btn-lg btn-secondary fw-bold border-white bg-white"><?= Fab::icon('youtube') ?>&nbsp;Узнать
                больше</a>
        </div>

        <div id="about_compare_table" class="floor-block">
            <h4>сравнение решений для обогрева</h4>
            <p class="lead">стоимость эксплуатации альтернативных решений</p>
            <div class="table-responsive">
                <table class="table table-striped table-sm table-payback">
                    <thead>
                    <tr>
                        <th scope="col">
                            <div>день</div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" aria-label="Дневной тариф" value="4.96">
                                <span class="input-group-text">руб</span>
                            </div>
            </div>
            </th>
            <th scope="col">
                <div>ночь</div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" aria-label="Ночной тариф" value="2.68">
                    <span class="input-group-text">руб</span>
                </div>
            </th>
            <th scope="col">
                <div>мощность</div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" aria-label="Мощность" value="2.2">
                    <span class="input-group-text">Кв/ч</span>
                </div>
            </th>
            <th scope="col">
                <div>цена за 30 сут</div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" aria-label="Цена" value="">
                    <span class="input-group-text">руб</span>
                </div>
            </th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>random</td>
                <td>data</td>
                <td>placeholder</td>
                <td>text</td>
            </tr>
            <tr>
                <td>placeholder</td>
                <td>irrelevant</td>
                <td>visual</td>
                <td>layout</td>
            </tr>
            <tr>
                <td>data</td>
                <td>rich</td>
                <td>dashboard</td>
                <td>tabular</td>
            </tr>
            </tbody>
            </table>
        </div>
    </main>
    <footer class="mt-auto text-white-50 d-flex justify-content-center">
      <?= Social::widget(['social' => $social,]) ?>
    </footer>
</div>