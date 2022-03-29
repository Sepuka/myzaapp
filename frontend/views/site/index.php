<?php
use yii\bootstrap4\Html;
?>
<div class="px-4 py-5 my-5 text-center">
    <?=Html::img( Yii::$app->request->baseUrl . '/img/logo.jpeg', ['class' => 'd-block mx-auto mb-4', 'width'=>'72', 'height'=>'72'])?>
    <h1 class="display-5 fw-bold">Привет, Иван!</h1>
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Твой баланс составляет 0.0043 ₿ (567 рублей), ты ещё не выводил средства на карту, с начала
            работы котла ты уже получил 14 пополнений.</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Запросить вывод</button>
            <button type="button" class="btn btn-outline-secondary btn-lg px-4">Посмотреть журнал</button>
        </div>
    </div>
</div>

<div class="text-center">
    <a href="https://oauth.vk.com/authorize?client_id=8085028&redirect_uri=https://duntek.ru/myza/vk_auth&state=https://duntek.ru/&response_type=code&scope=email">
        <button type="button" class="btn btn-primary btn-lg px-4 gap-3">вход через ВКонтакте</button>
    </a>
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
