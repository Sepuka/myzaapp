<?php

namespace frontend\models;

use yii\base\Model;

class Users extends Model {
  public function getUser(string $token): array {
    $db     = \Yii::$app->db;
    $result = $db->createCommand('SELECT * FROM users WHERE token=:token')
      ->bindValue('token', $token)
      ->queryOne(\PDO::FETCH_ASSOC);

    return $result;
  }

  public function getAddress(int $user_id): ?string {
    $db     = \Yii::$app->db;
    $result = $db->createCommand('SELECT address FROM cryptos WHERE user_id=:user_id')
      ->bindValue('user_id', $user_id)
      ->queryOne(\PDO::FETCH_ASSOC);

    return is_array($result) ? $result['address'] : null;
  }
}
