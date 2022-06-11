<?php

use common\models\User;
use frontend\widget\Social;

$isGuest = Yii::$app->user->isGuest;

/**
 * @var string $authBlock
 * @var ?User $user
 * @var array $social
 */

$email = $user ? sprintf('Ваша почта %s', $user->email) : '';
?>

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="mb-auto">
        <div>
            <h3 class="float-md-start mb-0">Duntek</h3>
            <nav class="nav nav-masthead justify-content-center float-md-end">
                <a class="nav-link activetab" href="/site/login" aria-current="page">Логин</a>
                <a class="nav-link" href="/">Профиль</a>
                <a class="nav-link disabled" href="#" aria-disabled="true">Выплаты</a>
                <a class="nav-link" href="/site/about">О проекте</a>
            </nav>
        </div>
    </header>
    <main class="px-3">
        <h1>Криптотепло</h1>
        <h5 class="card-title"><?= $isGuest ? 'Войдите, пожалуйста' : 'Вы вошли' ?></h5>
        <p class="card-text"><?= $isGuest ? 'Чтобы пользоваться duntek вам следует войти в свою учетную запись' : $email ?></p>
      <?= $authBlock ?>
    </main>
    <footer class="mt-auto text-white-50 d-flex justify-content-center">
      <?= Social::widget(['social' => $social,]) ?>
    </footer>
</div>