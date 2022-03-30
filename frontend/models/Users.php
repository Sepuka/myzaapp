<?php

namespace frontend\models;

use yii\base\Model;

class Users extends Model {
  public function getUserName(string $token): string {
    $db = \Yii::$app->db;
    $result = $db->createCommand('SELECT first_name FROM users WHERE token=:token')
      ->bindValue('token', $token)
      ->queryOne(\PDO::FETCH_ASSOC);

    return $result['first_name'];
  }
}
