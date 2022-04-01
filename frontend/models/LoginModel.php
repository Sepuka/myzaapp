<?php

namespace frontend\models;

use common\models\User;
use yii\base\Model;

class LoginModel extends User {
  public function login(string $token): bool {
    $user = User::findIdentity($token);
    if ($user === null) {
      return false;
    }

    return \Yii::$app->user->login($user, 3600 * 24 * 30);
  }
}
