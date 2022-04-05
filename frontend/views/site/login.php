<?php

$isGuest = Yii::$app->user->isGuest;

/**
 * @var string $authBlock
 * @var string $email
 */
?>

<div class="card w-50 text-center mx-auto">
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
        <p class="card-text"><?= $isGuest ? 'Чтобы пользоваться duntek вам следует войти в свою учетную запись' : sprintf('Ваша почта %s', $email) ?></p>
      <?= $authBlock ?>
    </div>
</div>
