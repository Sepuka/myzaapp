<?php

use common\models\User;

$isGuest = Yii::$app->user->isGuest;

/**
 * @var string $authBlock
 * @var ?User $user
 */

$email = $user ? sprintf('Ваша почта %s', $user->email) : '';
?>

<div class="card w-50 text-center mx-auto mt-1" style="min-width: 400px">
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
                <a class="nav-link active" aria-current="true" href="#">Логин</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/">Профиль</a>
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
        <h5 class="card-title"><?= $isGuest ? 'Войдите, пожалуйста' : 'Вы вошли' ?></h5>
        <p class="card-text"><?= $isGuest ? 'Чтобы пользоваться duntek вам следует войти в свою учетную запись' : $email ?></p>
      <?= $authBlock ?>
    </div>
</div>
