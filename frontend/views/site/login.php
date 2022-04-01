<?php

use yii\bootstrap4\Html;

/**
 * @var string $vk_auth
 */
?>

<div class="px-4 py-5 my-5 text-center">
  <?= Html::img('@web/images/logo.jpeg', ['class' => 'd-block mx-auto mb-4', 'width' => '72', 'height' => '72']) ?>
    <h1 class="display-5 fw-bold">Войдите пожалуйста</h1>
</div>

<?= $vk_auth ?>
