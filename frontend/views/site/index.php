<?php

use common\models\Crypto;
use yii\bootstrap4\Html;

/**
 * @var string $name
 * @var Crypto $crypto
 */

?>

<div class="card w-50 text-center mx-auto" style="min-width: 400px">
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
                <a class="nav-link" href="/site/login">Логин</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="true" href="#">Профиль</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" aria-disabled="true">Журнал</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" aria-disabled="true">Выплаты</a>
            </li>
        </ul>
    </div>
    <div class="card-body">
        <h5 class="card-title">Привет, <?= $name ?>!</h5>
        <p class="card-text">
          <?= Html::img('@web/images/logo.jpeg', ['class' => 'd-block mx-auto mb-4', 'width' => '72', 'height' => '72']) ?>
        <p class="lead mb-4">Ваш адрес в сети blockchain <a
                    href="https://www.blockchain.com/btc/address/<?= $crypto->address ?>"><?= $crypto->address ?></a>
        </p>
        <p class="lead mb-4">Ваш баланс составляет <?= $crypto->getBalance() ?>₿ (<?= $crypto->getFiat() ?> руб), ты ещё
            не выводил
            средства на карту, с начала
            работы котла ты уже получил N пополнений.</p>
        </p>
    </div>
</div>

<!--<div class="text-center">-->
<!--    <a href="https://oauth.yandex.ru/authorize?response_type=token&client_id=c6bf4a0e603946c594f20603c2babc6d">Войти через Яндекс</a>-->
<!--</div>-->

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->


<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
