<?php

use frontend\widget\NarrowNavButton;
use frontend\widget\Social;
use rmrevin\yii\fontawesome\FAB;

/** @var array $social */
?>

<div class="multi-block mx-auto">
    <div class="background-img">
    <div class="d-flex w-100 h-100 p-3 mx-auto flex-column sub-narrow-block">
        <header class="mb-auto">
            <div class="block-h-5">
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
            <div class="floor-block" id="main-block">
                <h1>Криптообогреватель duntek</h1>
                <p class="lead">Уникальное решение в сфере загородной жизни</p>
                <p class="lead">Криптокотёл Duntek окупает свою стоимость в течение 2-х лет, дальше, вы получаете прямую
                    прибыль!</p>
                <a href="https://youtu.be/NvmEtBVSlxA"
                   class="btn btn-lg btn-secondary fw-bold border-white bg-white"><?= Fab::icon('youtube') ?>&nbsp;Узнать
                    больше</a>
            </div>
        </main>
      <?= NarrowNavButton::widget(['scrollTarget' => 'images-block']) ?>
    </div>
    </div>

    <div id="images-block">
        <div class="w-100 p-3 mx-auto sub-wide-block">
            <div class="p-3">
                <img src="/images/1.jpg">
            </div>
            <div class="p-3">
                <div class="text-block-head">Для нашего котла мы разработали корпус из особого пластика.</div>
                <div class="text-block-body">
                    Он <b>не</b> занимает много места, благодаря своей прямоугольной форме может быть установлен
                    непосредственно в угол помещения не загромождая котельную.
                    Каждый корпус тестируется на протечку перед продажей
                </div>
            </div>
        </div>
        <div class="w-100 p-3 mx-auto sub-wide-block">
            <div class="p-3">
                <div class="text-block-head">Мы тестируем все устройства перед продажей</div>
                <div class="text-block-body">
                    Каждый ASIC погружается в иммерсионную жидкость проходит полный цикл испытаний,
                    мы тестируем их 30 дней и гарантируем бесперебойную работу каждого котла.
                </div>
            </div>
            <div  class="p-3">
                <img src="/images/2.jpg">
            </div>
        </div>
        <div class="w-100 p-3 mx-auto sub-wide-block">
            <div class="p-3">
                <img src="/images/3.jpg">
            </div>
            <div class="p-3">
                <div class="text-block-head">Не беспокойтесь на счет шума</div>
                <div class="text-block-body">
                    Это абсолютно не шумное устройство, ведь для них используется жидкостное охлаждение.
                    Нет никаких гудящих вентиляторов, нет никакой пыли, при этом охлаждающая жидкость
                    абсолютно безвредна и пожаробезопасна.
                </div>
            </div>
        </div>
        <div class="w-100 p-3 mx-auto sub-wide-block">
            <div class="p-3">
                <div class="text-block-head">Котел небольшого размера</div>
                <div class="text-block-body">
                    Мы постарались сделать наш отопительный котел компактным, чтобы он мог быть установлен
                    даже в самый маленький дом.
                </div>
            </div>
            <div class="p-3">
                <img src="/images/4.jpg">
            </div>
        </div>
    </div>

    <div class="d-flex w-100 p-3 mx-auto flex-column sub-narrow-block">
        <footer class="mt-auto text-white-50 d-flex justify-content-center block-h-5">
          <?= Social::widget(['social' => $social,]) ?>
        </footer>
    </div>
</div>