<?php

use common\models\Crypto;
use frontend\widget\Social;

/**
 * @var string $name
 * @var Crypto $crypto
 * @var array $social
 */
?>

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="mb-auto">
        <div>
            <h3 class="float-md-start mb-0">Duntek</h3>
            <nav class="nav nav-masthead justify-content-center float-md-end">
                <a class="nav-link" href="/site/login">Логин</a>
                <a class="nav-link activetab" href="/" aria-current="page">Профиль</a>
                <a class="nav-link disabled" href="#" aria-disabled="true">Выплаты</a>
                <a class="nav-link" href="/site/about">О проекте</a>
            </nav>
        </div>
    </header>
    <main class="px-3">
        <h1>Криптотепло</h1>
        <p class="lead">Привет, <?= $name ?>!</p>
        <p class="lead">Ваш адрес в сети blockchain <a
                    href="https://www.blockchain.com/btc/address/<?= $crypto->address ?>"><?= $crypto->address ?></a>
        </p>
        <p class="lead mb-4">Ваш баланс составляет <?= $crypto->getBalance() ?>₿ (<?= $crypto->getFiat() ?> руб), вы ещё
            не выводили
            средства на карту, с начала
            работы котла вы уже получили 0 пополнений.</p>
        </p>
    </main>
    <footer class="mt-auto text-white-50 d-flex justify-content-center">
      <?= Social::widget(['social' => $social,]) ?>
    </footer>
</div>

<!--<div class="text-center">-->
<!--    <a href="https://oauth.yandex.ru/authorize?response_type=token&client_id=c6bf4a0e603946c594f20603c2babc6d">Войти через Яндекс</a>-->
<!--</div>-->
